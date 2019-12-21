<?php

//////////////////////////////////////////////////////////////
//===========================================================
// appact_theme.php
//===========================================================
// SOFTACULOUS WEBUZO
// Version : 2.7.1
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Nikhil Muskur
// Date:	   12th May 2018
// Time:	   14:01 hrs
// Site:	   http://www.webuzo.com/ (SOFTACULOUS WEBUZO)
// ----------------------------------------------------------
// Please Read the Terms of use at http://www.webuzo.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Ltd.
//===========================================================
//////////////////////////////////////////////////////////////

if(!defined('SOFTACULOUS')){
	die('Hacking Attempt');
}


function appact_theme(){
	global $user, $globals, $l, $theme, $softpanel, $error, $done;

	if(function_exists($theme['call_app_theme'])){
		call_user_func($theme['call_app_theme']);
	}else{
		reporterror('', 'App Theme not Found');
	}
}


?>