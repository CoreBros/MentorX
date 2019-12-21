<?php

//////////////////////////////////////////////////////////////
//===========================================================
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

if(version_compare(PHP_VERSION, '7.1.0', '>=') && file_exists(dirname(__FILE__).'/includes71/'.basename(__FILE__))){
	include_once(dirname(__FILE__).'/includes71/'.basename(__FILE__));
}elseif(version_compare(PHP_VERSION, '5.6.0', '>=') && file_exists(dirname(__FILE__).'/includes56/'.basename(__FILE__))){
	include_once(dirname(__FILE__).'/includes56/'.basename(__FILE__));
}elseif(version_compare(PHP_VERSION, '5.3.0', '>=') && file_exists(dirname(__FILE__).'/includes53/'.basename(__FILE__))){
	include_once(dirname(__FILE__).'/includes53/'.basename(__FILE__));
}elseif(file_exists(dirname(__FILE__).'/includes52/'.basename(__FILE__))){
	include_once(dirname(__FILE__).'/includes52/'.basename(__FILE__));
}else{
	include_once(dirname(__FILE__).'/includes/'.basename(__FILE__));
}