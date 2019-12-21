<?php

//////////////////////////////////////////////////////////////
//===========================================================
// edit.php(For individual softwares)
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

//The Edit process
function __scripts_pre_remove(){

global $__settings, $globals, $setupcontinue, $error;

	// Remove the symlinks in vendor/bin, vendor/pear and public_html folder manually	
	sunlink($__settings['softpath'].'/public_html/.htaccess');
	sunlink($__settings['softpath'].'/public_html/plugins');
	sunlink($__settings['softpath'].'/public_html/robots.txt');
	sunlink($__settings['softpath'].'/public_html/skins');
	sunlink($__settings['softpath'].'/public_html/program/js');
	sunlink($__settings['softpath'].'/public_html/program/resources');
	sunlink($__settings['softpath'].'/vendor/bin/crypt-gpg-pinentry');
	sunlink($__settings['softpath'].'/vendor/bin/rcubeinitdb.sh');
	sunlink($__settings['softpath'].'/vendor/pear/net_smtp/README.rst');
}

//Check whether the Minimum Software configuration matches
function __requirements(){

global $__settings, $error, $software, $globals;
	
	return true;

}

?>