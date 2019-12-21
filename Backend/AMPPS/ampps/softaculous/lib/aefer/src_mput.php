<?php

error_reporting(E_ALL);


function cleanpath($path){
	
	$path = str_replace('\\\\', '/', $path);
	$path = str_replace('\\', '/', $path);
	return rtrim($path, '/');
}

function get_extension($fname){

	$temp_r = explode('.', $fname);
	
	$ext = $temp_r[count($temp_r)-1];
	
	return $ext;

}

function optGET($name, $default = ''){

global $error;

	//Check the GETED NAME was GETed
	if(isset($_GET[$name])){
	
		return inputsec(htmlizer(trim($_GET[$name])));
		
	}else{
		
		return $default;
	
	}

}

/**
 * Converts Special characters to html entities
 *
 * @package      string
 * @author       Pulkit Gupta
 * @param        string $string The string containing special characters
 * @return       string A string containing special characters replaced by html entities of the format &#ASCIICODE;
 * @since     	 1.0
 */
function htmlizer($string){

global $globals;

	$string = htmlentities($string, ENT_QUOTES, $globals['charset']);
	
	preg_match_all('/(&amp;#(\d{1,7}|x[0-9a-fA-F]{1,6});)/', $string, $matches);//r_print($matches);
	
	foreach($matches[1] as $mk => $mv){		
		$tmp_m = entity_check($matches[2][$mk]);
		$string = str_replace($matches[1][$mk], $tmp_m, $string);
	}
	
	return $string;
	
}

/**
 * Takes care of Slashes
 *
 * @package      string
 * @author       Pulkit Gupta
 * @param        string $string The string that will be processed
 * @return       string A string that is safe to use for Database Queries, etc
 * @since     	 1.0
 */
function inputsec($string){

	if(!get_magic_quotes_gpc()){
	
		$string = addslashes($string);
	
	}else{
	
		$string = stripslashes($string);
		$string = addslashes($string);
	
	}
	
	// This is to replace ` which can cause the command to be executed in exec()
	$string = str_replace('`', '\`', $string);
	
	return $string;

}

function softdie($txt, $l_file = ''){
	$array = array();
	$array['settings'] = $GLOBALS['__settings'];
	$array['include'] = $GLOBALS['include'];
	$array['result'] = $txt;
	
	// Add last transferred file to the array if the process is still INCOMPLETE
	if(!empty($l_file)){
		$array['l_file'] = $l_file;
	}
	
	// Was there an error ?
	if(!empty($GLOBALS['error'])){
		$array['error'] = $GLOBALS['error'];
	}
	
	echo '<r_import>'.base64_encode(serialize($array)).'</r_import>';die();
}

function sftp_connect($host, $username, $pass, $protocol = 'ftp', $port = 21, $cd = false, $pri = '', $passphrase = ''){
		
	global $globals;
	
	$port = (int) $port; // Converting to INT as FTP class requires an integer
	
	if(defined('SOFTACULOUS_USE_CUSTOM_PROTO')){
		$protocol = SOFTACULOUS_USE_CUSTOM_PROTO;
	}
	
	if(!class_exists('ftp_base') && $protocol == 'ftp'){
		include_once(dirname(__FILE__).'/_ftp.php');
	}
	
	if(!class_exists('sftp') && $protocol == 'sftp'){
		include_once(dirname(__FILE__).'/_sftp.php');
	}
	
	if(!class_exists('ftps') && $protocol == 'ftps'){
		include_once(dirname(__FILE__).'/_ftps.php');
	}
	
	if(!class_exists('CustomIO') && $protocol == 'customio'){
		include_once(dirname(__FILE__).'/customio.php');
	}
	
	if(!class_exists($protocol) && file_exists($globals['path'].'/lib/classes/'.$protocol.'.php')){
		include_once($globals['path'].'/lib/classes/'.$protocol.'.php');
	}
	
	if($protocol == 'ftp'){
		$ftp = new ftp(FALSE, FALSE);
		
		if($_GET['debug'] == 'died' && $_GET['echo'] == '1') $ftp->LocalEcho = true; 
		if($_GET['debug'] == 'died' && $_GET['verbose'] == '1') $ftp->Verbose = true; 
		
		if(!$ftp->SetServer($host, $port)) {
			$ftp->quit();
			return 0;
		}
		
		if (!$ftp->connect()) {
			return -1;
		}
		
		if (!$ftp->login($username, $pass)) {
			$ftp->quit();
			return -2;
		}
		
		if(!empty($cd)){
			if(!$ftp->chdir($cd)){
				if(!$ftp->chdir(trim($cd, '/'))){
					return -3;
				}
				//return -3;
			}
		}
		
		if(!$ftp->SetType(FTP_AUTOASCII)){
			
		}
		
		if(!$ftp->Passive(TRUE)){
			
		}
	}
	
	// Class other than FTP
	if(empty($ftp)){
	
		// Initialize a Class
		if($protocol == 'customio' && file_exists($globals['path'].'/lib/classes/customio.php')){
			
			$ftp = new CustomIO();
		}else{
		
			$ftp = new $protocol();
		}
		// Return if Class not found
		if(!is_object($ftp)){
			die();
			return -1;
		}
		// For SFTP authentication with keys or password
		if($protocol == 'sftp' && !empty($pri)){
			$ftp->auth_pass = 0;
		}else{
			$ftp->auth_pass = 1;
		}
		
		// Can connect ?
		$ret = $ftp->connect($host, $port, $username, $pass, $pri, $passphrase);
		
		if(!$ret){
			return -2;
		}
		
		// Is directory present
		if(!empty($cd)){
			if(!$ftp->is_dir($cd)){
				return -3;
			}
		}
	}
	
	return $ftp;
	
}

/* The below function will list all folders and files within a directory
It is a recursive function that uses a global array.  The global array was the easiest
way for me to work with an array in a recursive function
*This function has no limit on the number of levels down you can search.
*The array structure was one that worked for me.
ARGUMENTS:
$startdir => specify the directory to start from; format: must end in a "/"
$searchSubdirs => True/false; True if you want to search subdirectories
$directoriesonly => True/false; True if you want to only return directories
$maxlevel => "all" or a number; specifes the number of directories down that you want to search
$level => integer; directory level that the function is currently searching
*/
function filelist_fn($startdir="./", $searchSubdirs=1, $directoriesonly=0, $maxlevel="all", $level=1, $reset = 1) {
	//list the directory/file names that you want to ignore
	$ignoredDirectory[] = ".";
	$ignoredDirectory[] = "..";
	$ignoredDirectory[] = "_vti_cnf";
	global $directorylist;    //initialize global array
   
	if(substr($startdir, -1) != '/'){
		$startdir = $startdir.'/';
	}
   
	if (is_dir($startdir)) {
		if ($dh = opendir($startdir)) {
			while (($file = readdir($dh)) !== false) {
				if (!(array_search($file,$ignoredDirectory) > -1)) {
					if (@filetype($startdir . $file) == "dir") {

						//build your directory array however you choose;
						//add other file details that you want.

						$directorylist[$startdir . $file]['level'] = $level;
						$directorylist[$startdir . $file]['dir'] = 1;
						$directorylist[$startdir . $file]['name'] = $file;
						$directorylist[$startdir . $file]['path'] = $startdir;
						if ($searchSubdirs) {
							if ((($maxlevel) == "all") or ($maxlevel > $level)) {
								filelist_fn($startdir . $file . "/", $searchSubdirs, $directoriesonly, $maxlevel, ($level + 1), 0);
							}
						}


						} else {
							if (!$directoriesonly) {

							//  echo substr(strrchr($file, "."), 1);
							//if you want to include files; build your file array 
							//however you choose; add other file details that you want.
							$directorylist[$startdir . $file]['level'] = $level;
							$directorylist[$startdir . $file]['dir'] = 0;
							$directorylist[$startdir . $file]['name'] = $file;
							$directorylist[$startdir . $file]['path'] = $startdir;


							}
						}
					}
				}
			closedir($dh);
		}
	}

	if(!empty($reset)){
		$r = $directorylist;
		$directorylist = array();
		return($r);
	}
}


@unlink(__FILE__); // More has to be done here !

//[[[functions]]]

$include = unserialize(base64_decode('[[[include]]]'));
$__settings = unserialize(base64_decode('[[[settings]]]'));

// We need to stop execution in 25 secs.. We will be called again if the process is incomplete
$GLOBALS['end'] = (int) time() + 25; 
       
//Empty last file everytime as a precaution
$GLOBALS['last_file'] = '';
$GLOBALS['last_file'] = optGET('last_file');

if(!empty($GLOBALS['last_file'])){			
	$GLOBALS['last_file'] = rawurldecode($GLOBALS['last_file']);
}

// Do we need to use Server Host or domain name ?
$connect_host = (!empty($__settings['server_host']) ? $__settings['server_host'] : $__settings['softdomain']);
$ftp = sftp_connect($connect_host, $__settings['ftp_user'], $__settings['ftp_pass'], $__settings['protocol'], $__settings['port'], $__settings['ftp_path'], $__settings['private_key'], $__settings['passphrase']);

if(!is_object($ftp)){
	$error[] = 'Could not connect to the destination server using '.$__settings['protocol'].' - '.$ftp;
	softdie('ftp_conn_fail');
}

if(empty($error)){
	
	// Set default values
	$GLOBALS['start'] = 0;
	$GLOBALS['end_file'] = '';
	
	if(!empty($__settings['softdatadir'])){
		
		$source_datadir = cleanpath(preg_replace('/'.preg_quote($__settings['source_data']['diff_path'], '/').'/is', '', $__settings['source_data']['softdatadir']));
	
		//DESTINATION data directory should be relative
		$relative_datadir = cleanpath(preg_replace('/'.preg_quote($__settings['diff_path'], '/').'/is', '', $__settings['data_dir']));
	
		$return = $ftp->mput($__settings['source_data']['softdatadir'], rtrim($relative_datadir, '/').$source_datadir, '', $include);
	}else{
		// This is in else because this has been called already before without softdatadir so softpath is already imported
		$return = $ftp->mput($__settings['source_data']['softpath'], $__settings['ftp_softpath'], '', $include);
	}
	
}

// Is the transfer process is INCOMPLETE ? 
if(!empty($GLOBALS['end_file'])){
	softdie('INCOMPLETE', $GLOBALS['end_file']);
}

if($return == true){
	softdie('DONE');
}

if(!empty($ftp->error)){
	$error[] = implode(' ', $ftp->error);
}else{
	$error[] = 'Could not put the files from source server to destination';
}

softdie('mput_fail');