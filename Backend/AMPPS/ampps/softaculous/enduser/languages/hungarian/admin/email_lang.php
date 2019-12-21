<?php

//////////////////////////////////////////////////////////////
//===========================================================
// email_lang.php
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

$l['no_mail'] = 'Nem volt kiválasztva a levélküldés módja';
$l['wrong_mail'] = 'A kiválasztott levélküldés módja érvénytelen';
$l['no_mail_server'] = 'Nem volt SMTP szerver megadva';
$l['no_mail_port'] = 'Nem volt SMTP port megadva';
$l['no_mail_user'] = 'Nem volt SMTP felhasználói név megadva';
$l['no_mail_pass'] = 'Nem volt SMTP jelszó megadva';
$l['saving_error'] = 'Hiba történt a beállítások mentésekor';

//Theme Strings
$l['<title>'] = APP.' - Beállítási központ';
$l['settings_saved'] = 'Az email beállítások sikeresen mentésre kerültek';
$l['emailhead'] = 'Email beállítások';
$l['mailmethod'] = 'Küldési mód';
$l['mailmethod_exp'] = 'Levél küldés a PHP mail() funkcióval vagy az SMTP szerverével';
$l['smtp_server'] = 'SMTP szerver';
$l['smtp_port'] = 'SMTP port';
$l['smtp_user'] = 'SMTP név';
$l['smtp_pass'] = 'SMTP jelszó';
$l['edit_settings'] = 'Beállítások mentése';
$l['mailauthtype'] = 'SMTP Authtype';
$l['mailauthtype_exp'] = 'Choose the Authtype for the emails sent using SMTP';

$l['mail_send'] = 'Send Test Email ?';
$l['mail_subject'] = 'Email Settings - Test Email';
$l['mail_message'] = 'This is a test e-mail to verify the updated Email Settings in '.APP.' Admin panel -> Email
Feel free to delete this email.';
$l['enc_mail_pass'] = 'Save SMTP Password in Encrypted format ?';
$l['err_mcrypt'] = 'mcrypt extension is required to encrypt password';
$l['err_openssl'] = 'Openssl extension is required to encrypt password';