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

function fetch_wp_plugins($search_key = '', $search_by = ''){
	global $error;

	$search_key = html_entity_decode($search_key);
	//Fetch all WordPress Plugins/New Plugins to install
	$plugin_apiurl = 'http://api.wordpress.org/plugins/info/1.0/';
	$post_data = array(
		'action' => 'query_plugins',
		'request' => serialize( (object) array(
			'search' => $search_key,
			'per_page' => 10,
			'page' => 1,
			'slug' => '',
			'fields' => array(
				'downloaded' => true,
				'rating' => true,
				'description' => false,
				'short_description' => true,
				'donate_link' => false,
				'tags' => false,
				'sections' => false,
				'homepage' => false,
				'added' => false,
				'last_updated' => false,
				'compatibility' => false,
				'tested' => true,
				'requires' => true,
				'screenshot' => false,
				'icons' => true,
				'path' => true,
			)
		)));
		
	$api_data = curl_call($plugin_apiurl, 0, 5, $post_data);
	$api_data = unserialize($api_data);
	//echo '<br />Curl: '.$plugin_apiurl;r_print($api_data);
	
	if(!empty($api_data->error)){
		$error[] = $api_data->error;
		return false;
	}
	
	if(empty($api_data->plugins)){
		$error[] = 'There were some errors fetching Plugins List!';
		return false;
	}
		
	$all_plugins = $api_data->plugins;
	
	//Search is performed using the Plugin/Theme Name by default. In some cases(installation), however, we require the match using slug value.
	if(!empty($search_key) && !empty($search_by)){
		foreach($all_plugins as $pl_key => $pl_val){
			if(html_entity_decode($pl_val->$search_by) !== $search_key){
				unset($all_plugins[$pl_key]);
			}
		}
	}
	return array_values($all_plugins);
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

function soft_get_plugin_path($path, $slug){
	global $settings;
	
	$path = cleanpath($path);
	
	if(file_exists($settings['softpath'].'/wp-content/plugins/'.$slug.'/'.$slug.'.php')){
		return $plugin_path = $slug.'/'.$slug.'.php';
	}
	
	$list = filelist($path, 0);
	$plugin_files = array();
	
	foreach($list as $lk => $lv){
		if(!is_dir($lk)){
			$plugin_files[basename($lk)] = $lk;
		}
	}
	
	foreach($plugin_files as $pk => $pv){
		$data = implode('', file($pv));
		if(preg_match('/\n(\s*?)(\*?)(\s*?)Plugin(\s*?)Name:(.*?)\n/is',$data)){
			return $plugin_path = $slug.'/'.$pk;
			break;
		}
	}
	
	return $plugin_path = $slug.'/'.$slug.'.php';
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

function soft_mysql_connect($host, $user, $pass, $newlink = false){
	
	if(extension_loaded('mysqli')){
		//echo 'mysqli';
		//To handle connection if user passes a custom port along with the host as 127.0.0.1:6446.
		//For testing, use port 127.0.0.1 instead of localhost as 127.0.0.1:6446 http://php.net/manual/en/mysqli.construct.php#112328
		$exh = explode(':', $host);
		if(!empty($exh[1])){
			$sconn = @mysqli_connect($exh[0], $user, $pass, '', $exh[1]);
		}else{
			$sconn = @mysqli_connect($host, $user, $pass);
		}
	}else{
		//echo 'mysql';
		$sconn = @mysql_connect($host, $user, $pass, $newlink);
	}
	
	return $sconn;
}

function soft_mysql_select_db($db, $conn){
	
	if(extension_loaded('mysqli')){
		$return = @mysqli_select_db($conn, $db);
	}else{
		$return = @mysql_select_db($db, $conn);
	}
	
	return $return;
}

function soft_mysql_error($conn){
	
	if(extension_loaded('mysqli')){
		$return = @mysqli_error($conn);
		
		// In mysqli if connection  is not made then we will get connection error using the following function.
		if(empty($conn)){
			$return = @mysqli_connect_error();
		}
		
	}else{
		$return = @mysql_error($conn);
	}
	
	return $return;
}

function soft_mysql_query($query, $conn){
	
	if(extension_loaded('mysqli')){
		$return = @mysqli_query($conn, $query);
	}else{
		$return = @mysql_query($query, $conn);
	}
	return $return;
}

function soft_mysql_num_rows($result){
	
	if(extension_loaded('mysqli')){
		$return = @mysqli_num_rows($result);
	}else{
		$return = @mysql_num_rows($result);
	}
	
	return $return;
}

function soft_mysql_fetch_assoc($result){
	
	if(extension_loaded('mysqli')){
		$return = @mysqli_fetch_assoc($result);
	}else{
		$return = @mysql_fetch_assoc($result);
	}
	
	return $return;
}

function soft_mysql_insert_id($conn){
	
	if(extension_loaded('mysqli')){
		$return = @mysqli_insert_id($conn);
	}else{
		$return = @mysql_insert_id($conn);
	}
	
	return $return;
}

function softmysqlfile($raw, $host, $user, $pass, $db, $__conn = ""){

global $settings, $error, $software, $globals, $l, $softpanel;
	
	$queries = sqlsplit($raw);
	
	//Make the Connection
	if(empty($__conn)){
		$__conn = @soft_mysql_connect($host, $user, $pass, true);
	}
	
	//CHECK Errors and SELECT DATABASE
	if(!empty($__conn)){	
		if(!(@soft_mysql_select_db($db, $__conn))){
			$error[] = 'Error Selecting the database!';
			return false;
		}
	}else{
		$error[] = 'Error connecting the database!';
		return false;
	}
	
	$num = count($queries);
	
	//Start the Queries
	foreach($queries as $k => $q){	
		
		//PARSE the String and make the QUERY
		$result = soft_mysql_query($q, $__conn);
		
		//Looks like there was an error
		if(!$result){
			$error[] = 'Error executing the query!';
			return false;				
		}
		
		// Is there only one query ?
		if($num == 1){
			
			// Is it a SELECT query ?
			if(preg_match('/^(SELECT|SHOW|DESCRIBE)/is', $q)){ // CHECKSUM|OPTIMIZE|ANALYZE|CHECK|EXPLAIN
				
				// Accumulate the data !
				for($i = 0; $i < soft_mysql_num_rows($result); $i++){
					$return[] = soft_mysql_fetch_assoc($result);
				}
				
			}
	
			// Is it a INSERT query ? Then we will have to return insert id
			if(preg_match('/^INSERT/is', $q)){
				$return[] = soft_mysql_insert_id($__conn);
			}	
		}
	
	}
	
	// Are we to return the data ?
	if(!empty($return)){
		return $return;
	}	
	return true;	
}

function sqlsplit($data){

	$ret = array();
	$buffer = '';
	// Defaults for parser
	$sql = '';
	$start_pos = 0;
	$i = 0;
	$len= 0;
	$big_value = 200000000;
	$sql_delimiter = ';';
	
	$finished = false;
	
	while (!($finished && $i >= $len)) {
	
		if ($data === FALSE) {
			// subtract data we didn't handle yet and stop processing
			//$offset -= strlen($buffer);
			break;
		} elseif ($data === TRUE) {
			// Handle rest of buffer
		} else {
			// Append new data to buffer
			$buffer .= $data;
			// free memory
			$data = false;
			// Do not parse string when we're not at the end and don't have ; inside
			if ((strpos($buffer, $sql_delimiter, $i) === FALSE) && !$finished)  {
				continue;
			}
		}
		// Current length of our buffer
		$len = strlen($buffer);
		
		// Grab some SQL queries out of it
		while ($i < $len) {
			$found_delimiter = false;
			// Find first interesting character
			$old_i = $i;
			// this is about 7 times faster that looking for each sequence i
			// one by one with strpos()
			if (preg_match('/(\'|"|#|-- |\/\*|`|(?i)DELIMITER)/', $buffer, $matches, PREG_OFFSET_CAPTURE, $i)) {
				// in $matches, index 0 contains the match for the complete 
				// expression but we don't use it
				$first_position = $matches[1][1];
			} else {
				$first_position = $big_value;
			}
			/**
			 * @todo we should not look for a delimiter that might be
			 *       inside quotes (or even double-quotes)
			 */
			// the cost of doing this one with preg_match() would be too high
			$first_sql_delimiter = strpos($buffer, $sql_delimiter, $i);
			if ($first_sql_delimiter === FALSE) {
				$first_sql_delimiter = $big_value;
			} else {
				$found_delimiter = true;
			}
	
			// set $i to the position of the first quote, comment.start or delimiter found
			$i = min($first_position, $first_sql_delimiter);
	
			if ($i == $big_value) {
				// none of the above was found in the string
	
				$i = $old_i;
				if (!$finished) {
					break;
				}
				// at the end there might be some whitespace...
				if (trim($buffer) == '') {
					$buffer = '';
					$len = 0;
					break;
				}
				// We hit end of query, go there!
				$i = strlen($buffer) - 1;
			}
	
			// Grab current character
			$ch = $buffer[$i];
	
			// Quotes
			if (strpos('\'"`', $ch) !== FALSE) {
				$quote = $ch;
				$endq = FALSE;
				while (!$endq) {
					// Find next quote
					$pos = strpos($buffer, $quote, $i + 1);
					// No quote? Too short string
					if ($pos === FALSE) {
						// We hit end of string => unclosed quote, but we handle it as end of query
						if ($finished) {
							$endq = TRUE;
							$i = $len - 1;
						}
						$found_delimiter = false;
						break;
					}
					// Was not the quote escaped?
					$j = $pos - 1;
					while ($buffer[$j] == '\\') $j--;
					// Even count means it was not escaped
					$endq = (((($pos - 1) - $j) % 2) == 0);
					// Skip the string
					$i = $pos;
	
					if ($first_sql_delimiter < $pos) {
						$found_delimiter = false;
					}
				}
				if (!$endq) {
					break;
				}
				$i++;
				// Aren't we at the end?
				if ($finished && $i == $len) {
					$i--;
				} else {
					continue;
				}
			}
	
			// Not enough data to decide
			if ((($i == ($len - 1) && ($ch == '-' || $ch == '/'))
			  || ($i == ($len - 2) && (($ch == '-' && $buffer[$i + 1] == '-')
				|| ($ch == '/' && $buffer[$i + 1] == '*')))) && !$finished) {
				break;
			}
	
			// Comments
			if ($ch == '#'
			 || ($i < ($len - 1) && $ch == '-' && $buffer[$i + 1] == '-'
			  && (($i < ($len - 2) && $buffer[$i + 2] <= ' ')
			   || ($i == ($len - 1)  && $finished)))
			 || ($i < ($len - 1) && $ch == '/' && $buffer[$i + 1] == '*')
					) {
				// Copy current string to SQL
				if ($start_pos != $i) {
					$sql .= substr($buffer, $start_pos, $i - $start_pos);
				}
				// Skip the rest
				$j = $i;
				$i = strpos($buffer, $ch == '/' ? '*/' : "\n", $i);
				// didn't we hit end of string?
				if ($i === FALSE) {
					if ($finished) {
						$i = $len - 1;
					} else {
						break;
					}
				}
				// Skip *
				if ($ch == '/') {
					// Check for MySQL conditional comments and include them as-is
					if ($buffer[$j + 2] == '!') {
						$comment = substr($buffer, $j + 3, $i - $j - 3);
						if (preg_match('/^[0-9]{5}/', $comment, $version)) {
							if ($version[0] <= 50000000) {
								$sql .= substr($comment, 5);
							}
						} else {
							$sql .= $comment;
						}
					}
					$i++;
				}
				// Skip last char
				$i++;
				// Next query part will start here
				$start_pos = $i;
				// Aren't we at the end?
				if ($i == $len) {
					$i--;
				} else {
					continue;
				}
			}
			// Change delimiter, if redefined, and skip it (don't send to server!)
			if (strtoupper(substr($buffer, $i, 9)) == "DELIMITER"
			 && ($buffer[$i + 9] <= ' ')
			 && ($i < $len - 11)
			 && strpos($buffer, "\n", $i + 11) !== FALSE) {
			   $new_line_pos = strpos($buffer, "\n", $i + 10);
			   $sql_delimiter = substr($buffer, $i + 10, $new_line_pos - $i - 10);
			   $i = $new_line_pos + 1;
			   // Next query part will start here
			   $start_pos = $i;
			   continue;
			}
	
			// End of SQL
			if ($found_delimiter || ($finished && ($i == $len - 1))) {
				$tmp_sql = $sql;
				if ($start_pos < $len) {
					$length_to_grab = $i - $start_pos;
	
					if (! $found_delimiter) {
						$length_to_grab++;
					}
					$tmp_sql .= substr($buffer, $start_pos, $length_to_grab);
					unset($length_to_grab);
				}
				// Do not try to execute empty SQL
				if (! preg_match('/^([\s]*;)*$/', trim($tmp_sql))) {
					$sql = $tmp_sql;
					$ret[] = $sql;
					
					$buffer = substr($buffer, $i + strlen($sql_delimiter));
					// Reset parser:
					$len = strlen($buffer);
					$sql = '';
					$i = 0;
					$start_pos = 0;
					// Any chance we will get a complete query?
					//if ((strpos($buffer, ';') === FALSE) && !$finished) {
					if ((strpos($buffer, $sql_delimiter) === FALSE) && !$finished) {
						break;
					}
				} else {
					$i++;
					$start_pos = $i;
				}
			}
		} // End of parser loop
	} // End of import loop

	return $ret;

}

function soft_preg_replace($pattern, $file, &$var, $valuenum, $stripslashes = ''){	
	preg_match($pattern, $file, $matches);
	if(empty($stripslashes)){
		$var = @trim($matches[$valuenum]);
	}else{
		$var = @stripslashes(trim($matches[$valuenum]));
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

//Plugins
$plugins = unserialize(base64_decode('[[[plugins]]]'));

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

foreach($plugins as $plk => $plv){		
	if(empty($plv)){
		continue;
	}
	
	$pl_slug = $plk;
	if(preg_match('/(.*?)\/(.*?)\.php/is', $plk)){
		soft_preg_replace('/(.*?)\/(.*?)\.php/is', $plk, $pl_slug, 1, 1);
	}
	if(empty($pl_slug)){//This is the case for the default Hello Dolly plugin that comes installed with the initial WP package
		continue;
	}
		
	$pldata = fetch_wp_plugins($pl_slug, 'slug');
	
	if(($action == 'install' && !file_exists($settings['softpath'].'/wp-content/plugins/'.$plk)) || ($action == 'update' && file_exists($settings['softpath'].'/wp-content/plugins/'.$plk))){

		$plugin_package = $settings['softpath'].'/wp-content/uploads/'.basename($pldata[0]->download_link);

		if(!$can_write){			
			$data = get_web_file($pldata[0]->download_link);			
			if(!empty($data)){
				swrite($plugin_package, $data);
			}			
		}else{
			get_web_file($pldata[0]->download_link, $plugin_package);
		}
		
		if(file_exists($plugin_package)){			
			unzip($plugin_package, $settings['softpath'].'/wp-content/plugins/');
		}
		
		@sunlink($plugin_package);
	}
	
	//Activate plugins only while installing
	if($action == 'install'){
		$plugin_path = soft_get_plugin_path($settings['softpath'].'/wp-content/plugins/'.$pl_slug, $pl_slug);
			
		// First get the active plugin list 
		$query1 = "SELECT option_value FROM ".$settings['dbprefix']."options WHERE option_name = 'active_plugins';";

		$result1 = softmysqlfile($query1, $settings['softdbhost'], $settings['softdbuser'], $settings['softdbpass'], $settings['softdb']);
		
		if(empty($result1)){
			softdie($error);
		}

		$settings['active_plugins'] = _unserialize($result1[0]['option_value']);

		//Add the plugins to activate
		$settings['active_plugins'][] = $plugin_path ;

		// This should be at the end (As there may be many plugins)
		$settings['active_plugins'] = serialize($settings['active_plugins']);

		$query2 = "UPDATE ".$settings['dbprefix']."options
				SET option_value = '".$settings['active_plugins']."' 
				WHERE option_name = 'active_plugins';";
		$result2 = softmysqlfile($query2, $settings['softdbhost'], $settings['softdbuser'], $settings['softdbpass'], $settings['softdb']);
		
		if(empty($result2)){
			softdie($error);
		}
	}
}

softdie('DONE');

