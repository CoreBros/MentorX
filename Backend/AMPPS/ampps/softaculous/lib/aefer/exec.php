<?php 

// Binary Safe Sub String
function _substr($string, $start, $length = NULL){

global $globals;

	$r = preg_split('/(.)/u', $string, -1, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);
	
	if($length === NULL){
		return implode('', array_slice($r, $start));
	}else{
		return implode('', array_slice($r, $start, $length));
	}
}

function r_print($array){

	echo '<pre>';
	print_r($array);
	echo '</pre>';

}

function can_create_file(){
	$file = dirname(__FILE__).'/soft.tmp';
	$fp = @fopen($file, 'wb');
	if($fp === FALSE){
		return false;
	}
	
	if(@fwrite($fp, 'ampps') === FALSE){
		return false;
	}
	
	@fclose($fp);
	
	// Check if the file exists
	if(file_exists($file)){
		@unlink($file);
		return true;
	}
	
	return false;	
}

function ampps_ftp($host, $port, $username, $pass, $cd = false, $pri = '', $passphrase = ''){
	global $settings;
	
	if($settings['protocol'] == 'sftp' && !class_exists('sftp')){
		include_once('_'.$settings['protocol'].'.php');
	}elseif($settings['protocol'] == 'ftps' && !class_exists('ftps')){
		include_once('_'.$settings['protocol'].'.php');
	}elseif($settings['protocol'] == 'ftp' && !class_exists('ftp_base')){
		include_once('_'.$settings['protocol'].'.php');
	}elseif($settings['protocol'] == 'customio' && !class_exists('CustomIO')){
		include_once('_'.$settings['protocol'].'.php');
	}elseif(!class_exists($settings['protocol'])){
		require_once('_'.$settings['protocol'].'.php');
	}
	
	if($settings['protocol'] == 'ftp'){
		$ftp = new ftp(FALSE, FALSE);
		if(!$ftp->SetServer($host)) {
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
	
	if(empty($ftp)){
		if($settings['protocol'] == 'customio'){
			$ftp = new CustomIO();
		}else{
			$ftp = new $settings['protocol']();
		}
		
		if($settings['protocol'] == 'sftp' && !empty($pri)){
			$ftp->auth_pass = 0;
		}else{
			$ftp->auth_pass = 1;
		}
		
		$ret = $ftp->connect($host, $port, $username, $pass, $pri, $passphrase);
		if(!is_object($ftp)){
			return -1;
		}
		
		if(!$ret){
			return -2;
		}
		
		/* if($settings['protocol'] == 'sftp' && (!$ret)){
			return -2;
		}
		
		if(($settings['protocol'] == 'ftps' || $settings['protocol'] == 'customio') && !$ftp->ftp_conn){
			return -2;
		} */
		
		if(!empty($cd)){
			if(!$ftp->is_dir($cd)){
				return -3;
			}
		}
	}
	
	return $ftp;
	
}

function unzip($file, $destination, $overwrite = 0, $include = array(), $exclude = array()){

global $globals, $unzip_inc, $unzip_exc;		
	
	//Are we to include specific only files
	if(!empty($include)){		
		foreach($include as $ik => $iv){
			
			//Are there empty expressions
			if(empty($iv)){
				unset($include[$ik]);
				continue;
			}
			
			$include[$ik] = preg_quote($iv, '/');
			$include[$ik] = str_replace('\*', '[^\\\\\/]*', $include[$ik]); //Replace everything except (\,/), some special characters were not replaced that is why we changed pattern. 
		}
	}
	
	//Are we to exclude any files
	if(!empty($exclude)){		
		foreach($exclude as $ek => $ev){
			
			//Are there empty expressions
			if(empty($ev)){
				unset($exclude[$ek]);
				continue;
			}
			
			$exclude[$ek] = preg_quote($ev, '/');
			$exclude[$ek] = str_replace('\*', '[^\\\\\/]*', $exclude[$ek]); //Replace everything except (\,/), some special characters were not replaced that is why we changed pattern. 
		}
	}
	
	$unzip_inc = $include;
	$unzip_exc = $exclude;
	
	$archive = new PclZip($file);
	
	$result = $archive->extract(PCLZIP_OPT_PATH, $destination, PCLZIP_CB_PRE_EXTRACT, 'inc_exc', PCLZIP_OPT_REPLACE_NEWER);
	
	// Check for custom user func, if anything is to be done post unzip	
	// The difference is that this is called immediately after unzipping
	if(function_exists('soft_post_unzip')){
		soft_post_unzip($destination);
	}
	
	if($result == 0){
		return false;
	}
	
	return true;

}

function inc_exc($p_event, &$v){
global $globals, $unzip_inc, $unzip_exc;
	
	$include = $unzip_inc;
	$exclude = $unzip_exc;
	
	/*//If folders continue
	if($v['folder'] == true){
		return 1;
	}*/
	
	if(!empty($include)){				
		foreach($include as $ik => $iv){
			if(!preg_match('/^'.$iv.'$/is', $v['stored_filename'])){
				return 0;
			}
		}
	}
	
	//Exclude certain files
	if(!empty($exclude)){				
		foreach($exclude as $ek => $ev){
			if(preg_match('/^'.$ev.'$/is', $v['stored_filename'])){
				return 0;
			}
		}
	}
	
	//Else true
	return 1;
}


// Time calculation
function microtime_float(){
	list($usec, $sec) = explode(" ", microtime());
	return ((float)$usec + (float)$sec);
}

function soft_memory_limit($mb){
	
	$bytes = ($mb * 1024 * 1024);
	$mb_str = (string) $mb.'M';
	
	$memory_limit = @ini_get('memory_limit');
	
	if(empty($memory_limit)){
		return;
	}
	
	$memory_limit_bytes = (strpos($memory_limit, 'M') ? (intval($memory_limit) * 1024 * 1024) : intval($memory_limit));
	
	if($memory_limit_bytes <= $bytes){
		@ini_set('memory_limit', $mb_str);
	}

}

function inputsec($string){

	if(!get_magic_quotes_gpc()){
	
		$string = addslashes($string);
	
	}else{
	
		$string = stripslashes($string);
		$string = addslashes($string);
	
	}
	
	return $string;

}

function GET($name){
	
	global $GET;
	
	if(isset($_GET[$name]) && !empty($_GET[$name])){
		return inputsec(trim($_GET[$name]));
	}
	
	return $GET[$name];
}

function softdie($txt){
	$array = array();
	$array['settings'] = $GLOBALS['settings'];
	$array['os'] = (strtoupper(substr(PHP_OS, 0, 3) == 'WIN') ? 'windows' : 'linux'); // Which OS are you ?
	$array['result'] = $txt;
	echo '<aefer>'.base64_encode(serialize($array)).'</aefer>';die();
}

function spath($path){
	
	global $settings;
	
	// This is for those who have defined override_spath in custom_user_func.php
	if(function_exists('override_spath')){
		return override_spath($path);
	}
	
	return str_replace($settings['diff_path'], '', $path);
		
}

//[[[functions]]]

// Include the necessary files
include_once('./_pclzip.php');

set_time_limit(0);
	
// Set a Minimum Memory limit of 32 MB
soft_memory_limit(32);

// The Clock is ticking
$start_time = microtime_float();

// First Delete yourself !
@unlink(__FILE__); // More has to be done here !

// Destination

$destination = GET('destination');

// The settings
$settings = unserialize(base64_decode('[[[settings]]]'));
$settings['site_diff_path'] = $settings['diff_path']; // For publish's _pclzip.php compatibility

$_include = unserialize(base64_decode('[[[include]]]'));
$_exclude = unserialize(base64_decode('[[[exclude]]]'));

$can_write = can_create_file();

// Can we Create files ?
if(!$can_write){

	$ftp = ampps_ftp('127.0.0.1', $settings['port'], $settings['ftp_user'], $settings['ftp_pass'], $settings['ftp_softpath'], base64_decode($settings['_public_key']), base64_decode($settings['_private_key']), $settings['passphrase']);
	
	if($ftp <= 0){
		// Try again with domain - Windows
		$ftp = ampps_ftp($settings['softdomain'], $settings['port'], $settings['ftp_user'], $settings['ftp_pass'], $settings['ftp_softpath'], base64_decode($settings['_public_key']), base64_decode($settings['_private_key']), $settings['passphrase']);
		
		if($ftp <= 0){
			softdie('f'.$ftp);// - Error unzipping
		}
	}

}

//Extract data.zip to softdatadir
if(!unzip(GET('zipfile'), (GET('zipfile') == 'data.zip' ? $settings['softdatadir'] : (!empty($destination) ? $destination : $settings['softpath'])), 1, $_include, $_exclude)){ 
	softdie('4');// - Error unzipping
}

softdie('DONE');

