<?php

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

function filelist($startdir="./", $searchSubdirs=1, $directoriesonly=0, $maxlevel="all", $level=1, $reset = 1) {
	//list the directory/file names that you want to ignore
	$ignoredDirectory = array();
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
                               filelist($startdir . $file . "/", $searchSubdirs, $directoriesonly, $maxlevel, ($level + 1), 0);
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
						  
					 
     }}}}
           closedir($dh);
}}

if(!empty($reset)){
	$r = $directorylist;
	$directorylist = array();
	return($r);
}
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

function fetch_wp_themes($search_key = '', $search_by = ''){
	
	$search_key = html_entity_decode($search_key);
	//Fetch all WordPress Plugins/New Plugins to install
	$theme_apiurl = 'http://api.wordpress.org/themes/info/1.0/';
	$browse = (!empty($search_key) ? '' : 'popular');
	$post_data = array(
		'action' => 'query_themes',
		'request' => serialize( (object) array(
			'search' => $search_key,
			'per_page' => 10,
			'page' => 1,
			'browse' => $browse,
			'slug' => '',
			'fields' => array(
				'description' => true,
				'rating' => false,
				'ratings' => true,
				'sections' => true,
				'downloaded' => true,
				'download_link' => true,
				'last_updated' => false,
				'tags' => false,
				'homepage' => true,
				'template' => true,
				'parent' => true,
				'versions' => false,
				'screenshot_url' => true,
				'active_installs' => true,
			)
		)));
		
	$api_data = curl_call($theme_apiurl, 0, 5, $post_data);
	$api_data = unserialize($api_data);
	//echo '<br />Curl URL: '.$theme_apiurl; echo '<br />Curl Unserialized response: ';r_print($api_data);
	
	if(!empty($api_data->error)){
		$error[] = $api_data->error;
		return false;
	}
	
	if(empty($api_data->themes)){
		$error[] = 'There were some errors fetching Themes List!';
		return false;
	}
		
	$all_themes = $api_data->themes;
	
	foreach($all_themes as $th_key => $th_val){
		
		//Search is performed using the Plugin/Theme Name by default. In some cases(installation), however, we require the match using slug value.
		if(!empty($search_key)){
			if(!empty($search_by) && html_entity_decode($th_val->$search_by) !== $search_key){
				unset($all_themes[$th_key]);
				continue;
			}
		}
	
		$post_data = array(
				'action' => 'theme_information',
				'request' => serialize( (object) array( 'slug' => $th_val->slug )));
				
		$api_data1 = curl_call($theme_apiurl, 0, 5, $post_data);
		$api_data1 = unserialize($api_data1);
		
		$all_themes[$th_key]->download_link = $api_data1->download_link;
	}
	return array_values($all_themes);
}

function curl_call($url, $header = 1, $time = 1, $post = array(), $cookie = '', $nodns = 0){
	
	// Set the curl parameters.
	$ch = curl_init();
	
	$HTTPHEADER = array();
	
	// Do not load the content from cached URL
	// Some hosts have cache enabled and we do not want the content to be loaded from cache
	$HTTPHEADER[] = 'Cache-Control: no-cache';
	
	curl_setopt($ch, CURLOPT_URL, $url);
	
	curl_setopt($ch, CURLOPT_HTTPHEADER, $HTTPHEADER);
	
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $time);

	// Turn off the server and peer verification (TrustManager Concept).
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
	
	$no_follow_location = 0;
	if(function_exists('ini_get')){
		$open_basedir = ini_get('open_basedir'); // Followlocation does not work if open_basedir is enabled
		if(!empty($open_basedir)){
			$no_follow_location = 1;
		}
	}

	if(empty($no_follow_location)){		
		// Follow redirects
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);		
	}
			
	if(!empty($post)){
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));
	}
	
	// Is there a Cookie
	if(!empty($cookie)){
		curl_setopt($ch, CURLOPT_COOKIESESSION, true);
		curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	}
	
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:2.0.1) Gecko/20100101 Firefox/4.0.1');
	
	if($header){
		curl_setopt($ch, CURLOPT_HEADER, 1);
		curl_setopt($ch, CURLOPT_NOBODY, true);
	}

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

	// Get response from the server.
	$resp = curl_exec($ch);

	//echo curl_error($ch);
	curl_close($ch);
	
	return $resp;
	
}

function get_web_file($url, $writefilename = ''){

global $globals, $ftp, $settings, $can_write;
	
	if(function_exists('curl_exec')){
	
		// Set the curl parameters.
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		
		// Turn off the server and peer verification (TrustManager Concept).
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
	
		// Follow redirects
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
		
		// UserAgent and Cookies
		curl_setopt($ch, CURLOPT_USERAGENT, 'Softaculous');
		
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 120); // Max time to connect
		
		if(!empty($globals['curl_call_timeout'])){
			curl_setopt($ch, CURLOPT_TIMEOUT, $globals['curl_call_timeout']);
		}
	
		// Get response from the server.
		$file = curl_exec($ch);

		$meta = curl_getinfo($ch);
		
		curl_close($ch);
	
	}else{
		return false;
	}
	
	//Did we get something
	if(empty($file)){
		return false;	
	}	
	
	//Are we to store the file
	if(empty($writefilename)){	
		return $file;
	
	//Store the file
	}else{	
		$fp = @fopen($writefilename, "wb"); //This opens the file
		
		//If its opened then proceed
		if($fp){
		
			if(@fwrite($fp, $file) === FALSE){
			
				return false;
			
			//Wrote the file
			}else{
				
				@fclose($fp);
				
				return true;
				
			}		
		}	
	}	
	return false;	
}

function swrite($file, $data){
	
	global $ftp;
	
	$file = spath($file);
	
	return $ftp->softput($file, $data);		
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
	
	if(!class_exists('PclZip')){
		include_once('_pclzip.php');
	}
	
	$archive = new PclZip($file);
	
	$result = $archive->extract(PCLZIP_OPT_PATH, $destination, PCLZIP_CB_PRE_EXTRACT, 'inc_exc', PCLZIP_OPT_REPLACE_NEWER);
	
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

function sunlink($path){
	global $ftp, $can_write;
	
	if(!$can_write){		
		$path = spath($path);
		return $ftp->delete($path);
		
	}else{
		return @unlink($path);
	}
}

function cleanpath($path){	
	// This was made for Locaweb since they have network paths starting with \\
	if(function_exists('override_cleanpath')){
		return override_cleanpath($path);
	}
	
	$path = str_replace('\\\\', '/', $path);
	$path = str_replace('\\', '/', $path);
	return rtrim($path, '/');
}

function _unserialize($str){

	$var = @unserialize($str);
	
	if(empty($var)){
		
		preg_match_all('!s:(\d+):"(.*?)";!s', $str, $matches);
		foreach($matches[2] as $mk => $mv){
			$tmp_str = 's:'.strlen($mv).':"'.$mv.'";';
			$str = str_replace($matches[0][$mk], $tmp_str, $str);
		}
		$var = @unserialize($str);
	
	}
	
	//If it is still empty false
	if($var === false){
	
		return false;
	
	}else{
	
		return $var;
	
	}

}

//[[[functions]]]

//500 seconds should be more than enough
set_time_limit(500);
	
// Set a Minimum Memory limit of 32 MB
soft_memory_limit(32);

// Which OS are you ?
$globals['os'] = (strtoupper(substr(PHP_OS, 0, 3) == 'WIN') ? 'windows' : 'linux');

// First Delete yourself !
@unlink(__FILE__); // More has to be done here !

// The settings
$settings = unserialize(base64_decode('[[[settings]]]'));

// Action
$action = unserialize(base64_decode('[[[action]]]'));

//Themes
$themes = unserialize(base64_decode('[[[themes]]]'));

$can_write = can_create_file(); // Check if we can write

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

foreach($themes as $thk => $thv){
	
	if(empty($thv)){
		continue;
	}		
	$thdata = fetch_wp_themes($thk, 'slug');
	
	if(($action == 'install' && !file_exists($settings['softpath'].'/wp-content/themes/'.$thk)) || ($action == 'update' && file_exists($settings['softpath'].'/wp-content/themes/'.$thk))){

		$theme_package = $settings['softpath'].'/wp-content/uploads/'.basename($thdata[0]->download_link);

		if(!$can_write){			
			$data = get_web_file($thdata[0]->download_link);			
			if(!empty($data)){
				swrite($theme_package, $data);
			}			
		}else{
			get_web_file($thdata[0]->download_link, $theme_package);
		}
		
		if(file_exists($theme_package)){			
			unzip($theme_package, $settings['softpath'].'/wp-content/themes/');
		}		
		@sunlink($theme_package);
	}
}

softdie('DONE');

