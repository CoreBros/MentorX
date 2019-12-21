<?php

//////////////////////////////////////////////////////////////
//===========================================================
// enduser.php
//===========================================================
// SOFTACULOUS 
// Version : 1.1
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

if(version_compare(PHP_VERSION, '7.1.0', '>=') && file_exists(dirname(dirname(__FILE__)).'/includes71/enduser.php')){
	include_once(dirname(dirname(__FILE__)).'/includes71/enduser.php');
}elseif(version_compare(PHP_VERSION, '5.6.0', '>=') && file_exists(dirname(dirname(__FILE__)).'/includes56/enduser.php')){
	include_once(dirname(dirname(__FILE__)).'/includes56/enduser.php');
}elseif(version_compare(PHP_VERSION, '5.3.0', '>=') && file_exists(dirname(dirname(__FILE__)).'/includes53/enduser.php')){
	include_once(dirname(dirname(__FILE__)).'/includes53/enduser.php');
}elseif(file_exists(dirname(dirname(__FILE__)).'/includes52/enduser.php')){
	include_once(dirname(dirname(__FILE__)).'/includes52/enduser.php');
}else{
	include_once(dirname(dirname(__FILE__)).'/includes/enduser.php');
}