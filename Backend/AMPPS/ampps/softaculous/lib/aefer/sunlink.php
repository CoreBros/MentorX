<?php

function died(){
  		 print_r(error_get_last());
	}
	register_shutdown_function('died');


function r_print($array){

	echo '<pre>';
	print_r($array);
	echo '</pre>';

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

function softdie($txt){
	$array = array();
	$array['settings'] = $GLOBALS['settings'];
	$array['result'] = $txt;
	echo '<aefer>'.base64_encode(serialize($array)).'</aefer>';die();
}

function soft_stream_wrapper_register($protocol, $classname){

	global $globals;
	
	$protocols = array('dropbox', 'aws', 'gdrive', 'softftpes', 'softsftp', 'softftp');
	
	if(!in_array($protocol, $protocols)){
		return true;
	}
	
	//@include_once($globals['path'].'/lib/classes/'.$protocol.'.php');
	@include_once('_'.$protocol.'.php');
	
	if(!stream_wrapper_register($protocol, $classname)){
		return false;
	}
	
	return true;
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

//[[[functions]]]

set_time_limit(0);
	
// Set a Minimum Memory limit of 32 MB
soft_memory_limit(32);

// Which OS are you ?
$globals['os'] = (strtoupper(substr(PHP_OS, 0, 3) == 'WIN') ? 'windows' : 'linux');

// First Delete yourself !
@unlink(__FILE__); // More has to be done here !

// The settings
$settings = unserialize(base64_decode('[[[settings]]]'));

// Path of the file to remove
$path = unserialize(base64_decode('[[[path]]]'));

$path_parts = parse_url($path);

if($path_parts['scheme'] == 'ftp'){

	$settings['protocol'] = $path_parts['scheme'];

	$ftp = ampps_ftp($path_parts['host'], $path_parts['port'], rawurldecode($path_parts['user']), rawurldecode($path_parts['pass']));
	if($ftp <= 0){
		softdie('f'.$ftp);// - Error
	}
	
	$ftp->delete($path_parts['path']);
	
}else{
	soft_stream_wrapper_register($path_parts['scheme'], $path_parts['scheme']);
	// Remove it !
	@unlink($path);
}

softdie('DONE');

