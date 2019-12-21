<?php

//////////////////////////////////////////////////////////////
//===========================================================
// errorlog_lang.php
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

//Theme Strings
$l['<title>'] = APP . ' - Error Log';
$l['lbl_head'] = 'error Log';
$l['msg'] = 'Auf dieser Seite werden die letzten 300 Fehler-Logs aus /var/log/httpd/ Anzeige';
$l['domain'] = 'Alle Domain Specific Error Logs : ';
$l['empty_file'] = 'Fehlerprotokolldatei ist leer !';
$l['default_file'] = 'error_log';
$l['default_log'] = 'httpd Fehlerprotokoll (Default)';
$l['clear_logs'] = 'Clear Logs';
$l['err_clearlog'] = 'Log file would not be deleted';