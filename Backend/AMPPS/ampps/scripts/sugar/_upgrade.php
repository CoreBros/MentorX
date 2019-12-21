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

global $__settings, $error, $software;

	$query = "SELECT user_name FROM users WHERE `title` = 'Administrator';";
	$result = sdb_query($query, $__settings['softdbhost'], $__settings['softdbuser'], $__settings['softdbpass'], $__settings['softdb']);
	$username = $result[0]['user_name'];
	
	if(empty($username)){
		$error[] = "Could not get the admin username.";
	}
	
	// this zip can be only used for upgrade from 6.5.0 to 6.5.17
	// please do not forget to change zip filename
	scopy($software['path'].'/SugarCE-Upgrade-6.5.x-to-6.5.17.zip', $__settings['softpath'].'/upload/SugarCE-Upgrade-6.5.x-to-6.5.17.zip');
	swrite($__settings['softpath'].'/soft.log', '', 1);
	
	// please do not forget to change zip filename
	sshell_exec('"'.phpbin().'" -f '.$__settings['softpath'].'/modules/UpgradeWizard/silentUpgrade.php '.$__settings['softpath'].'/upload/SugarCE-Upgrade-6.5.x-to-6.5.17.zip '.$__settings['softpath'].'/soft.log '.$__settings['softpath'].' '.$username);

	$query = "SELECT value FROM config WHERE `name` = 'sugar_version';";
	$result = sdb_query($query, $__settings['softdbhost'], $__settings['softdbuser'], $__settings['softdbpass'], $__settings['softdb']);
	$newversion = $result[0]['value'];

	if($newversion != $software['ver']){
		$error[] = "Could not upgrade the database";
	}
}

//Check whether the Minimum Software configuration matches
function __requirements(){

global $__settings, $error, $software, $globals;
	//If there are some shorfalls then pass it to $error and return false
	
	if($globals['softpanel'] == 'ampps'){
		$error[] = "Upgrade is not possible through AMPPS";
	}
	
	if(!function_exists('shell_exec')){
		$error[] = "Upgrade requires shell_exec to be enabled on your server";
	}
	
	if(sversion_compare($__settings['ver'], '6.5.0', '<')){
		$error[] = "Upgrade is possible from version 6.5.0";	
	}
	
	return true;

}


?>