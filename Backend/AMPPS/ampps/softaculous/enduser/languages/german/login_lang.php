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

$l['user_data_missing'] = 'Das Benutzername oder Passwort Feld war leer';
$l['invalid_username'] = 'Der Benutzername oder das Passwort ist falsch';
$l['invalid_password'] = 'Der Benutzername oder das Passwort ist falsch'; 
$l['invalid_user'] = 'Der Benutzername oder das Passwort ist falsch'; 
$l['no_username'] = 'Das Benutzername Feld war leer';
$l['no_password'] = 'Das Passwort Feld war leer';
$l['disable_user'] = 'Login vom <strong>root</strong> Benutzer deaktiviert.';

$l['<title>'] = 'Login';
$l['sign_in'] = 'Anmelden';
$l['log_user'] = 'Benutzername';
$l['log_pass'] = 'Passwort';
$l['sub_but'] = 'Anmelden';

$l['<title_fpass>'] = 'Passwort vergessen';
$l['pass_nomatch'] = 'Der Benutzername oder das Passwort ist falsch.';
$l['forgotpass'] = 'Passwort vergessen';
$l['emailuser'] = 'E-Mail Adresse';
$l['enteremail'] = 'Geben Sie Ihre E-Mail Adresse ein';
$l['sub_email'] = 'abschicken';
$l['no_email'] = 'Sie haben keine E-Mail Adresse angegeben';
$l['invalidemail'] = 'Die eingegebene E-Mail Adresse ist ungültig.';
$l['mail_sub'] = 'Passwort zurücksetzen';
$l['mail_body'] = 'Hallo,
						
jemand hat eine Anfrage gestellt Ihr Passwort zurück zu setzen.
Wenn Sie diese Anfrage nicht gestellt haben ignorieren Sie diese E-Mail.

Wenn Sie Ihr Passwort zurücksetzen wollen, klicken Sie bitte auf folgende URL::
http://'.(($globals['softpanel'] == 'webuzo') ? $softpanel->getConf('WU_PRIMARY_DOMAIN').':2002' : '127.0.0.1').'/index.php?act=login&sa=resetpass&key=&soft-1;

Mit freundlichen Grüßen,
'.$globals['sn'];
$l['mail_done'] = 'Eine Mail mit den Details zum Zurücksetzen Ihres Passwortes wurde versendet.';
$l['fuser_mail_sub'] = 'Webuzo Benutzername';
$l['fuser_mail_body'] = 'Hallo,
						
jemand hat eine Anfrage gestellt Ihr Passwort zurück zu setzen.
Wenn Sie Ihren Webuzo Benutzernamen nicht angefragt haben ignorieren Sie diese E-Mail.

Loggen Sie sich hier ein:
http://'.(($globals['softpanel'] == 'webuzo') ? $softpanel->getConf('WU_PRIMARY_DOMAIN').':2002' : '127.0.0.1').'/index.php?act=login

Benutzername: &soft-1;

Mit freundlichen Grüßen,
'.$globals['sn'];
$l['fuser_mail_done'] = 'Es wurde eine E-Mail mit dem Webuzo Benutzernamen verschickt';
$l['forgotuser'] = 'Bentzernamen vergessen';
$l['back_to_login'] = 'Zurück zur Anmeldung';

$l['<title_reset>'] = 'Passwort zurücksetzen';
$l['resetpass'] = 'Passwort zurücksetzen';
$l['log_new_pass'] = 'Neues Passwort'; 
$l['log_reppass'] = 'Passwort bestätigen';
$l['changepass'] = 'Passwort ändern';
$l['no_key'] = 'Es wurde kein Schlüssel zum Zurücksetzen angegeben';
$l['invalidkey'] = 'Sie haben einen ungültigen Schlüssel angegeben';
$l['no_new'] = 'Bitte geben Sie ein gültiges Passwort ein';
$l['no_reppass'] = 'Bitte geben Sie das Bestätigungspasswort ein';
$l['no_match'] = 'Die Passwörter stimmen nicht überein';
$l['keyexpire'] = 'Der Schlüssel ist nicht mehr gültig';
$l['passchanged'] = 'Passwort erfolgreich geändert. Bitte loggen Sie sich hier ein: <a href="'.$globals['index'].'act=login">Anmelden</a>';
$l['forgot_pass'] = 'Passwort vergessen';

