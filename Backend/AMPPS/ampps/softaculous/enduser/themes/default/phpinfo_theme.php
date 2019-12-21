<?php

//////////////////////////////////////////////////////////////
//===========================================================
// userindex_theme.php
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

function phpinfo_theme(){

global $globals;
echo '<html><head><title>PHP Info</title></head><body><a href="'.$globals['index'].'"> Back to AMPPS Home</a><center><h2>PHP Info</h2></center>';
phpinfo();
echo '<a href='.$globals['index'].'"> Back to AMPPS Home</a>';
echo '</body>';
echo '</html>';

}		

