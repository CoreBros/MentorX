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
	
global $__settings, $error, $globals, $notes;

	$file = sfile($__settings['softpath'].'/config/config.php');
	$bool = false;
	if(preg_match('/PLUGIN_MANAGER/is', $file)){
		$bool = true;
	}
	
	$file = explode("\n", $file);
	
	if(empty($file)){
		return false;
	}

	if($bool){
		foreach($file as $k => $v){
			if(preg_match('/define\((\'|\")PLUGIN_MANAGER(\'|\"),(\s*?)false\);/is',$v)){
				$file[$k] = 'define(\'PLUGIN_MANAGER\', true);';
			}
		}
	}else{
		foreach($file as $k => $v){
			if(preg_match('/return(\s*?)true;/is',$v)){
				$file[$k] = 'define(\'PLUGIN_MANAGER\', true);';
				$file[$k+1] = 'return true;';
				$file[$k+2] = '?>';
			}
		}
	}
	
	swrite($__settings['softpath'].'/config/config.php', implode("\n",$file), 1);
	
	$notes = "After completing Upgrade process please log in to your Feng Office installation, click on your username (displayed at the top right corner) and access the <b>Settings</b> link and then access the <b>Plugins</b> page to upgrade your plugins";
	
	@schmod($__settings['softpath'].'/config/', $globals['odc']);
	@schmod($__settings['softpath'].'/config/config.php', $globals['ofc']);
	@schmod($__settings['softpath'].'/cache/', $globals['odc']);
	@schmod($__settings['softpath'].'/tmp/', $globals['odc']);
	@schmod($__settings['softpath'].'/upload/', $globals['odc']);
	@schmod($__settings['softpath'].'/config/installed_version.php', $globals['ofc']);
	
	return true;
	
}

?>