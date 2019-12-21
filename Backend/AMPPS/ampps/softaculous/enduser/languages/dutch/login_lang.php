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

$l['user_data_missing'] = 'U heeft geen gebruikersnaam of wachtwoord opgegeven';
$l['invalid_username'] = 'U heeft een ongeldige gebruikersnaam of wachtwoord opgegeven';
$l['invalid_password'] = 'U heeft een ongeldige gebruikersnaam of wachtwoord opgegeven'; 
$l['invalid_user'] = 'U heeft een ongeldige gebruikersnaam of wachtwoord opgegeven'; 
$l['no_username'] = 'U heeft geen gebruikersnaam opegeven';
$l['no_password'] = 'U heeft geen wachtwoord opgegeven';
$l['disable_user'] = 'Login disabled by <strong>root</strong> user.';

$l['<title>'] = 'Login';
$l['sign_in'] = 'Login';
$l['log_user'] = 'gebruikersnaam';
$l['log_pass'] = 'Wachtwoord';
$l['sub_but'] = 'Login';

$l['<title_fpass>'] = 'Wachtwoord vergeten';
$l['pass_nomatch'] = 'U heeft een ongeldige gebruikersnaam of wachtwoord opgegeven';
$l['forgotpass'] = 'Wachtwoord vergeten';
$l['emailuser'] = 'E-mail adres';
$l['enteremail'] = 'Vul uw e-mail adres in';
$l['sub_email'] = 'Doorgaan';
$l['no_email'] = 'U heeft geen e-mail adres ingevuld';
$l['invalidemail'] = 'Het e-mail adres dat u heeft opgegeven is niet geldig';
$l['mail_sub'] = 'Reset wachtwoord';
$l['mail_body'] = 'M.H.,
						
						
Er is een verzoek ontvangen om uw wachtwoord te resetten.
Indien u dit verzoek zelf niet heeft gedaan, kunt u deze e-mail als niet verzonden beschouwen.

Via de onderstaande link kunt u het wachtwoord om in te loggen in de script installer resetten:
http://'.(($globals['softpanel'] == 'webuzo') ? $softpanel->getConf('WU_PRIMARY_DOMAIN').':2002' : '127.0.0.1').'/index.php?act=login&sa=resetpass&key=&soft-1;

Vriendelijke groet,
'.$globals['sn'];
$l['mail_done'] = 'Er is een e-mail verzonden met instructies hoe u uw wachtwoord kunt resetten';
$l['fuser_mail_sub'] = 'Webuzo Username';
$l['fuser_mail_body'] = 'Hi,
						
A request to fetch the Webuzo Username has been made.
If you did not request the Webuzo Username, then please ignore this email.

Login to the URL below :
http://'.(($globals['softpanel'] == 'webuzo') ? $softpanel->getConf('WU_PRIMARY_DOMAIN').':2002' : '127.0.0.1').'/index.php?act=login

Username : &soft-1;

Regards,
'.$globals['sn'];
$l['fuser_mail_done'] = 'An email has been sent with the Webuzo Username';
$l['forgotuser'] = 'Forgot Username';
$l['back_to_login'] = 'Back to Login';

$l['<title_reset>'] = 'Reset wachtwoord';
$l['resetpass'] = 'Reset wachtwoord';
$l['log_new_pass'] = 'Nieuw wachtwoord'; 
$l['log_reppass'] = 'Bevestig wachtwoord';
$l['changepass'] = 'Wijzig wachtwoord';
$l['no_key'] = 'U heeft geen reset key opgegeven';
$l['invalidkey'] = 'U heeft geen geldige reset key opegeven';
$l['no_new'] = 'U heeft geen geldig wachtwoord opgegeven';
$l['no_reppass'] = 'Het veld \'herhaal wachtwoord\' is niet ingevuld';
$l['no_match'] = 'De door u opgegeven wachtwoorden komen niet overeen';
$l['keyexpire'] = 'De reset key is niet meer geldig';
$l['passchanged'] = 'De wijziging van het wachtwoord is succesvol verlopen. Klik <a href="'.$globals['index'].'act=login">hier</a> om in te loggen.';
$l['forgot_pass'] = 'Wachtwoord vergeten';

