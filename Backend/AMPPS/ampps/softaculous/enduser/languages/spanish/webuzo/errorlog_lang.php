<?php

//////////////////////////////////////////////////////////////
//===========================================================
// services_lang.php
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
$l['lbl_head'] = 'Error Log';
$l['msg'] = 'Esta página mostrará los últimos 300 registros de errores de /var/log/httpd/';
$l['domain'] = 'Ver registros de dominio de error específicos : ';
$l['empty_file'] = 'Archivo de registro de errores está vacío!!';
$l['default_file'] = 'error_log';
$l['default_log'] = 'httpd registro de errores (por defecto)';
$l['clear_logs'] = 'Clear Logs';
$l['err_clearlog'] = 'Log file would not be deleted';