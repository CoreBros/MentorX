<?php

//////////////////////////////////////////////////////////////
//===========================================================
// upgrade.php(For individual softwares)
//===========================================================
// SOFTACULOUS 
// Version : 1.0
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Date:       10th Jan 2009
// Time:       21:00 hrs
// Site:       http://www.softaculous.com/ (SOFTACULOUS)
// ----------------------------------------------------------
// Please Read the Terms of use at http://www.softaculous.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Inc.
//===========================================================
//////////////////////////////////////////////////////////////

if(!defined('SOFTACULOUS')){

	die('Hacking Attempt');

}

/////////////////////////////////////////
// All functions in this PAGE must begin
// with TWO UNDERSCORE '__' to avoid 
// clashes with SOFTACULOUS Functions
// e.g. __funcname()
/////////////////////////////////////////

//////////////////////////////////////////
// Note : The path of the upgrade package 
//        is $software['path'].'/' . So to
//        access other files use 
//        $software['path'].'/other_file.ext'
//////////////////////////////////////////

// NOTE: $__settings will contain the installation information like PATH, URL. They are :
//       $__settings['ver'] - The version of the current installation
//		 $__settings['itime'] - When the software was installed
//		 $__settings['softpath'] - The current PATH
//		 $__settings['softurl'] - The URL of the software
//		 IF database was made by Softaclous
//		 $__settings['softdb'] - The Database name
//		 $__settings['softdbuser'] - Database User
//		 $__settings['softdbhost'] - Database Host
//		 $__settings['softdbpass'] - Database Password

//The Upgrade process
function __upgrade($version_from){

global $__settings, $error, $software, $globals, $setupcontinue;
	@schmod($__settings['softpath'].'/config.php', $globals['ofc']);
	@schmod($__settings['softpath'].'/uploads/images/', $globals['odc']);

	// get the cookie
	$_get = __cmssimple_scurl_call($__settings['softurl'].'/install/upgrade.php', 1, 5);
	preg_match('/Set-Cookie: (.*?);/is', $_get, $matches);
	$cookie = $matches[1];
	
	$post = array();
	$post['default_cms_lang'] = 'en_US';
	$post['submit'] = 'Submit';
	$get = __cmssimple_scurl_call($__settings['softurl'].'/install/upgrade.php?sessiontest=1', 0, 5, $post, $cookie);
	
	if(preg_match('/Thanks(\s*?)for(\s*?)upgrading(\s*?)CMS(\s*?)Made(\s*?)Simple/is', $get)){
		$post = array();
		$post['page'] = '2';
		$get1 = __cmssimple_scurl_call($__settings['softurl'].'/install/upgrade.php', 0, 5, $post, $cookie);
	}
	
	if(!preg_match('/title=\"Failure\"/is', $get1)){
		$post = array();
		$post['page'] = '3';
		$get2 = __cmssimple_scurl_call($__settings['softurl'].'/install/upgrade.php', 0, 5, $post, $cookie);
	}
	
	if(preg_match('/config(\s*?)upgrade<\/strong(.*?)title=\"Success\"/is', $get2)){
		$post = array();
		$post['page'] = '4';
		$get3 = __cmssimple_scurl_call($__settings['softurl'].'/install/upgrade.php', 0, 5, $post, $cookie);
	}
		
	if(preg_match('/Clearing(\s*?)site(\s*?)cache(.*?)<\/strong(.*?)title=\"Success\"/is', $get3)){
		$post = array();
		$post['page'] = '5';
		$get4 = __cmssimple_scurl_call($__settings['softurl'].'/install/upgrade.php', 0, 5, $post, $cookie);
	}
		
	if(preg_match('/CMS(\s*?)database(\s*?)is(\s*?)up(\s*?)to(\s*?)date(.*?)<\/p(.*?)title=\"Success\"/is', $get4)){
		$post = array();
		$post['page'] = '6';
		$get5 = __cmssimple_scurl_call($__settings['softurl'].'/install/upgrade.php', 0, 5, $post, $cookie);
	}
		
	if(preg_match('/core(\s*?)modules(\s*?)are(\s*?)up(\s*?)to(\s*?)date(.*?)<\/p(.*?)title=\"Success\"/is', $get5)){
		$post = array();
		$post['page'] = '7';
		$get6 = __cmssimple_scurl_call($__settings['softurl'].'/install/upgrade.php', 0, 5, $post, $cookie);
	}
	
	if(!empty($_GET['debug'])){
		echo $_get.'<br />';
		echo $get.'<br />';
		echo $get1.'<br />';
		echo $get2.'<br />';
		echo $get3.'<br />';
		echo $get4.'<br />';
		echo $get5.'<br />';
		echo $get6.'<br />';
	}
	
	if(preg_match('/Upgrade(\s*?)process(\s*?)complete/is', $get6)){
		$setupcontinue = '';
		@schmod($__settings['softpath'].'/config.php', $globals['ocfc']);
		srm($__settings['softpath'].'/install');
	}elseif(sis_autoupgrading()){
		$error[] = '{{err_auto_upgrade}}';
	}
}

//Check whether the Minimum Software configuration matches
function __requirements(){

global $__settings, $error, $software;

	//If there are some shorfalls then pass it to $error and return false
	
	return true;

}

function __cmssimple_scurl_call($url, $header = 1, $time = 1, $post = array(), $cookie = ''){
	
	global $globals;
	
	if(!function_exists('curl_init')){
		$ctx = _stream_context_create(array('http' => array('timeout' => $time)));
		return @file_get_contents($url, 0, $ctx);
	}
	
	// Set the curl parameters.
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $time);

	//Set proxy 
	curl_proxy($ch);

	// Turn off the server and peer verification (TrustManager Concept).
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
	
	// Follow redirects
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
			
	if(!empty($post)){
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));
	}
	
	// Is there a Cookie
	if(!empty($cookie)){
		curl_setopt($ch, CURLOPT_COOKIESESSION, true);
		curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	}
	
	if($header){
	
		curl_setopt($ch, CURLOPT_HEADER, 1);
		curl_setopt($ch, CURLOPT_NOBODY, true);
		curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:2.0.1) Gecko/20100101 Firefox/4.0.1');
		
	}

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

	// Get response from the server.
	$resp = curl_exec($ch);

	//echo curl_error($ch);
	
	return $resp;
	
}

?>