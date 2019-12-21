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

$l['user_data_missing'] = 'Pole s používateľským menom alebo heslom bolo prázdne';
$l['invalid_username'] = 'Prihlasovacie meno alebo heslo, ktoré ste zadali, je nesprávne';
$l['invalid_password'] = 'Prihlasovacie meno alebo heslo, ktoré ste zadali, je nesprávne'; 
$l['invalid_user'] = 'Prihlasovacie meno alebo heslo, ktoré ste zadali, je nesprávne'; 
$l['no_username'] = 'Pole s prihlasovacím menom bolo prázdne';
$l['no_password'] = 'Pole s heslom bolo prázdne';
$l['disable_user'] = 'Prihlásenie zakázané používateľom <strong>root</strong>.';

$l['<title>'] = 'Prihlásenie';
$l['sign_in'] = 'Zaregistrovať sa';
$l['log_user'] = 'Prihlasovacie meno';
$l['log_pass'] = 'Heslo';
$l['sub_but'] = 'Prihlásenie';

$l['<title_fpass>'] = 'Zabudnuté heslo';
$l['pass_nomatch'] = 'Zadané prihlasovacie meno alebo heslo je nesprávne.';
$l['forgotpass'] = 'Zabudnuté heslo';
$l['emailuser'] = 'Emailové adresy';
$l['enteremail'] = 'Zadajte vašu emailovú adresu';
$l['sub_email'] = 'Potvrdiť';
$l['no_email'] = 'Nezadali ste vašu emailovú adresu';
$l['invalidemail'] = 'Zadaná emailová adresa je neplatná';
$l['mail_sub'] = 'Resetovať heslo';
$l['mail_body'] = 'Hi,
						
A request to reset your password has been made.
If you did not request the password reset, then please ignore this email.

If you would like to reset your password, then please click the URL below :
http://'.(($globals['softpanel'] == 'webuzo') ? $softpanel->getConf('WU_PRIMARY_DOMAIN').':2002' : '127.0.0.1').'/index.php?act=login&sa=resetpass&key=&soft-1;

Regards,
'.$globals['sn'];
$l['mail_done'] = 'Bol vám odoslaný mail s detailami, ako obnoviť vaše heslo';
$l['fuser_mail_sub'] = 'Používateľské meno Webuzo';
$l['fuser_mail_body'] = 'Hi,
						
A request to fetch the Webuzo Username has been made.
If you did not request the Webuzo Username, then please ignore this email.

Login to the URL below :
http://'.(($globals['softpanel'] == 'webuzo') ? $softpanel->getConf('WU_PRIMARY_DOMAIN').':2002' : '127.0.0.1').'/index.php?act=login

Username : &soft-1;

Regards,
'.$globals['sn'];
$l['fuser_mail_done'] = 'Bol odoslaný email s používateľským menom Webuzo';
$l['forgotuser'] = 'Zabudnuté používateľské meno';
$l['back_to_login'] = 'Späť na prihlásenie';

$l['<title_reset>'] = 'Resetovať heslo';
$l['resetpass'] = 'Resetovať heslo';
$l['log_new_pass'] = 'Nové heslo'; 
$l['log_reppass'] = 'Potvrdiť heslo';
$l['changepass'] = 'Zmeniť heslo';
$l['no_key'] = 'Žiadny kľúč pre reset nebol zadaný';
$l['invalidkey'] = 'Zadali ste neplatný kľúč';
$l['no_new'] = 'Prosím, zadajte platné heslo';
$l['no_reppass'] = 'Prosím, zadajte heslo pre potvrdenie';
$l['no_match'] = 'Heslá, ktoré ste zadali sa nezhodujú';
$l['keyexpire'] = 'Kľúč už nie je platný';
$l['passchanged'] = 'Heslo úspešne zmenené. Prosím prejdite na <a href="'.$globals['index'].'act=login">prihlásenie</a>';
$l['forgot_pass'] = 'Zabudnuté heslo';

