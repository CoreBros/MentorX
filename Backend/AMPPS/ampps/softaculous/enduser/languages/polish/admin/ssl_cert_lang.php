<?php

//////////////////////////////////////////////////////////////
//===========================================================
// update_ssl_cert_lang.php
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

//Error Strings
$l['no_key'] = 'Private Key is required';
$l['no_crt'] = 'Certificate is required';
$l['key_save_failed'] = 'Could not write the Private key';
$l['cert_save_failed'] = 'Could not write the Certificate';
$l['save_key'] = 'Certificate Installed Successfully !';
$l['invalid_ssl_key'] = 'SSL Certificate is invalid';
$l['no_ssl_support'] = 'SSL Certificate feature is not supported on this panel';

//Theme Strings
$l['<title>'] = APP.' - SSL Certificate';
$l['update_ssl_cert'] = 'SSL Certificate';
$l['paste_key'] = 'Paste your key here';
$l['paste_crt'] = 'Paste your Certificate here';
$l['update_button'] = 'Save';
