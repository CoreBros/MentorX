<?php

//////////////////////////////////////////////////////////////
//===========================================================
// userindex_lang.php
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
$l['<title>'] = 'Centrum zabezpieczeń - wspierane przez Softaculous';
$l['security_center'] = 'Centrum zabezpieczeń';
$l['subject_name'] = 'Temat';
$l['subject_status'] = 'Status';
$l['ampps_subject'] = 'Login AMPPS';
$l['mysql_subject'] = 'Login serwera MySQL';
$l['phpmyadmin_subject'] = 'login hasło phpMyAdmin';

//Unsecure Messege
$l['ampps_unsecure'] = 'Aby zabezpieczyć AMPPS, ustaw hasło.';
$l['phpmyadmin_unsecure'] = 'phpMyAdmin jest dostępny z poziomu sieci bez podawania hasła. Ustaw konfigurację <b>auth_type</b> na "http" lub "cookie" w <b>config.inc.php</b>';
$l['mysql_unsecure'] = 'Aby zabezpieczyć MySQL, zmień hasło na coś innego niż puste hasło lub "mysql"(Default)';

