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
$l['<title>'] = 'Security Center - Powered by Softaculous';
$l['security_center'] = 'Security Center';
$l['subject_name'] = 'Tárgy';
$l['subject_status'] = 'Állapot';
$l['ampps_subject'] = 'AMPPS belépés';
$l['mysql_subject'] = 'MySQL szerver belépés';
$l['phpmyadmin_subject'] = 'phpMyAdmin jelszó belépés';

//Unsecure Messege
$l['ampps_unsecure'] = 'Az AMPPS rögzítéséhez állítson be jelszót.';
$l['phpmyadmin_unsecure'] = 'phpMyAdmin a hálózaton keresztül hozzáférhető jelszó nélkül. Állítsa be a konfigurációt <b>auth_type</b>  "http" vagy "cookie" <b>config.inc.php</b> fájlban';
$l['mysql_unsecure'] = 'Ahhoz, hogy biztosítsa a MySQL-t, változtassa meg a jelszavát az Üres Jelszó vagy  "mysql"(Alapértelmezett) résznél';

