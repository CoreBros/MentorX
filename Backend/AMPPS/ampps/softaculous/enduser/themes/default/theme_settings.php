<?php

//////////////////////////////////////////////////////////////
//===========================================================
// theme_settings.php
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

if(!defined('SOFTACULOUS')){

	die('Hacking Attempt');

}

//Is the ADMIN Mode Defined!
if(!defined('SOFTADMIN')){
	$theme['url'] = $softpanel->theme['url'].'/default';
	$theme['this_url'] = $softpanel->theme['url'].'/default';
}else{
	$theme['url'] = $softpanel->theme['admin_url'].'/default';
	$theme['this_url'] = $softpanel->theme['admin_url'].'/default';
}

$theme['images'] = $theme['url'].'/images/';//Has a Trailing slash
$theme['a_images'] =  $theme['url'].'/images/'.$globals['softpanel'].'/';//Has a Trailing slash

// Images specific to the this THEME
$theme['this_images'] = $theme['images'];//Has a Trailing slash

// Name of this theme
$theme['this_theme'] = 'modern';

?>