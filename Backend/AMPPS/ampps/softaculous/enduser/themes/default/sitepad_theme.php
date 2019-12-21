<?php

//////////////////////////////////////////////////////////////
//===========================================================
// sitepad_theme.php
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


function sitepad_theme(){
	
global $user, $globals, $l, $theme, $nupanel, $error, $redirect_url;
		
// Redirect the USER
if(!empty($redirect_url) && empty($error)){
	redirect($redirect_url, false, true);
	exit();
}

// Header
softheader($l['<title>']);

// Handle the errors IF ANY !
error_handle($error, '75%');

// Footer
softfooter();

}
