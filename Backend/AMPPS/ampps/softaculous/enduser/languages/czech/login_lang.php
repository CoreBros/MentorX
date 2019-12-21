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

$l['user_data_missing'] = 'Pole uživatelského jména nebo hesla bylo prázdné';
$l['invalid_username'] = 'Zadané uživatelské jméno nebo heslo je chybné';
$l['invalid_password'] = 'Zadané uživatelské jméno nebo heslo je chybné'; 
$l['invalid_user'] = 'Zadané uživatelské jméno nebo heslo je chybné'; 
$l['no_username'] = 'Pole uživatelského jména bylo prázdné';
$l['no_password'] = 'Pole hesla bylo prázdné';
$l['disable_user'] = 'Přihlášení zakázáno uživatelem <strong>root</strong>.';

$l['<title>'] = 'Přihlásit';
$l['sign_in'] = 'Zaregistrovat se';
$l['log_user'] = 'Uživatelské jméno';
$l['log_pass'] = 'Heslo';
$l['sub_but'] = 'Přihlásit';

$l['<title_fpass>'] = 'Zapomenuté heslo';
$l['pass_nomatch'] = 'Zadané uživatelské jméno nebo heslo je chybné.';
$l['forgotpass'] = 'Zapomenuté heslo';
$l['emailuser'] = 'Emailová adresa';
$l['enteremail'] = 'Zadejte vaši emailovou adresu';
$l['sub_email'] = 'Zadat';
$l['no_email'] = 'Nezadali jste vaši emailovou adresu';
$l['invalidemail'] = 'Vámi zadaná emailová adresa je neplatná';
$l['mail_sub'] = 'Resetovat heslo';
$l['mail_body'] = 'Hi,
						
A request to reset your password has been made.
If you did not request the password reset, then please ignore this email.

If you would like to reset your password, then please click the URL below :
http://'.(($globals['softpanel'] == 'webuzo') ? $softpanel->getConf('WU_PRIMARY_DOMAIN').':2002' : '127.0.0.1').'/index.php?act=login&sa=resetpass&key=&soft-1;

Regards,
'.$globals['sn'];
$l['mail_done'] = 'Email s podrobnostmi pro reset hesla byl odeslán';
$l['fuser_mail_sub'] = 'Uživatelské jméno pro Webuzo';
$l['fuser_mail_body'] = 'Hi,
						
A request to fetch the Webuzo Username has been made.
If you did not request the Webuzo Username, then please ignore this email.

Login to the URL below :
http://'.(($globals['softpanel'] == 'webuzo') ? $softpanel->getConf('WU_PRIMARY_DOMAIN').':2002' : '127.0.0.1').'/index.php?act=login

Username : &soft-1;

Regards,
'.$globals['sn'];
$l['fuser_mail_done'] = 'Byl zaslán email s uživatelským jménem pro Webuzo';
$l['forgotuser'] = 'Zapomenuté uživatelské heslo';
$l['back_to_login'] = 'Zpátky na přihlášení';

$l['<title_reset>'] = 'Resetovat heslo';
$l['resetpass'] = 'Resetovat heslo';
$l['log_new_pass'] = 'Nové heslo'; 
$l['log_reppass'] = 'Potvrdit heslo';
$l['changepass'] = 'Změnit heslo';
$l['no_key'] = 'Nebyl zadán klíč pro obnovení';
$l['invalidkey'] = 'Zadali jste neplatný klíč';
$l['no_new'] = 'Prosím vložte platné heslo';
$l['no_reppass'] = 'Prosím vložte potvrzovací heslo';
$l['no_match'] = 'Vámi zadaná hesla nesouhlasí';
$l['keyexpire'] = 'Klíč již není platný';
$l['passchanged'] = 'Heslo bylo úspěšně změněno. Pokračujte prosím na <a href="'.$globals['index'].'act=login">Přihlášení</a>';
$l['forgot_pass'] = 'Zapomenuté heslo';

