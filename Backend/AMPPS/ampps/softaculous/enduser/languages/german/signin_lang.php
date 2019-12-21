<?php

//////////////////////////////////////////////////////////////
//===========================================================
// login_lang.php
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
	global $softpanel;

$l['user_data_missing'] = 'Das API KEY oder API PASSWORT Fedl war leer';
$l['invalid_username'] = 'Der Benutzername oder das Passwort ist nicht korrekt';
$l['invalid_password'] = 'Der Benutzername oder das Passwort ist nicht korrekt'; 
$l['no_username'] = 'Das Benutzername Feld war leer';
$l['no_password'] = 'Das Passwort Feld war leer';

$l['<title>'] = 'Login';
$l['sign_in'] = 'Anmelden';
$l['log_user'] = 'API KEY';
$l['log_pass'] = 'API PASSWORT';
$l['sub_but'] = 'Login';

$l['<title_fpass>'] = 'Passwort vergessen';
$l['pass_nomatch'] = 'Der Benutzername oder das Passwort ist nicht korrekt.';
$l['forgotpass'] = 'Passwort vergessen';
$l['emailuser'] = 'E-Mail Adresse';
$l['enteremail'] = 'Geben Sie hier Ihre E-Mail Adresse ein';
$l['sub_email'] = 'Senden';
$l['no_email'] = 'Sie haben keine E-Mail Adresse angegeben';
$l['invalidemail'] = 'Die angegebene E-Mail Adresse ist ungültig';
$l['mail_sub'] = 'Passwort zurück setzen';
$l['mail_body'] = 'Hallo,
			
jemand hat eine Anfrage gestellt Ihr Passwort zurück zu setzen.
Wenn Sie diese Anfrage nicht gestellt haben ignorieren Sie diese E-Mail.
			
Wenn Sie Ihr Passwort zurücksetzen wollen, klicken Sie bitte auf folgende URL:
http://'.(($globals['softpanel'] == 'webuzo') ? $softpanel->getConf('WU_PRIMARY_DOMAIN').':2002' : '127.0.0.1').'/index.php?act=login&sa=resetpass&key=&soft-1;

Mit freundlichen Grüßen,
'.$globals['sn'];
$l['mail_done'] = 'Eine Mail mit den Details zum Zurücksetzen Ihres Passwortes wurde versendet.';
$l['back_to_login'] = 'Zurück zum Login';

$l['<title_reset>'] = 'Passwort zurück setzen';
$l['resetpass'] = 'Passwort zurück setzen';
$l['log_new_pass'] = 'Neues Passwort'; 
$l['log_reppass'] = 'Passwort bestätigen';
$l['changepass'] = 'Passwort ändern';
$l['no_key'] = 'Es wurde kein Reset Key eingegeben';
$l['invalidkey'] = 'Es wurde ein ungültiger Key angegeben';
$l['no_new'] = 'Bitte geben Sie ein gültiges Passwort an';
$l['no_reppass'] = 'Bitte geben Sie das Passwort zur Bestätigung erneut ein';
$l['no_match'] = 'Die angegebenen Passwörter stimmen nicht überein';
$l['keyexpire'] = 'Der Key ist mehr gültig';
$l['passchanged'] = 'Passwort erfolgreich geändert. Bitte zum <a href="'.$globals['index'].'act=login">Login</a> fortfahren';
$l['forgot_pass'] = 'Passwort vergessen';

