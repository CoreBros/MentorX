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

$l['no_mail'] = 'U heeft geen e-mail instelling geselecteerd';//No Mail Method was selected
$l['wrong_mail'] = 'De e-mail instelling die u heeft opgegeven is ongeldig';//The Mail Method you submitted is invalid
$l['no_mail_server'] = 'U heeft geen SMTP mail server opgegeven';//No SMTP Mail Server was posted
$l['no_mail_port'] = 'U heeft geen SMTP mail poort opgegeven';//No SMTP Mail Port was posted
$l['no_mail_user'] = 'U heeft geen SMTP mail gebruikersnaam opgegeven';//No SMTP Mail Username was posted
$l['no_mail_pass'] = 'U heeft geen SMTP mail wachtwoord opgegeven';//No SMTP Mail Password was posted
$l['saving_error'] = 'Er zijn fouten opgetreden tijdens het opslaan van de instellingen';//There were some errors while saving the settings

//Theme Strings
$l['<title>'] = APP.' - Instellingen Center';//Softaculous - Settings Center
$l['settings_saved'] = 'De e-mail instellingen zijn succesvol opgeslagen';//The email settings were saved successfully
$l['emailhead'] = 'E-mail instellingen';//Email Settings
$l['mailmethod'] = 'E-mail methode';//Mailing Method
$l['mailmethod_exp'] = 'Via deze optie kunt u aangeven of e-mail verzonden wordt via de PHP mail functie of via een SMTP-server.';//Send mails using PHP mail() function or your SMTP server
$l['smtp_server'] = 'SMTP server';//SMTP Server
$l['smtp_port'] = 'SMTP poort';//SMTP Port
$l['smtp_user'] = 'SMTP gebruikersnaam';//SMTP Username
$l['smtp_pass'] = 'SMTP wachtwoord';//SMTP Password
$l['edit_settings'] = 'Instellingen wijzigen';//Edit Settings
$l['mailauthtype'] = 'SMTP Authtype';
$l['mailauthtype_exp'] = 'Choose the Authtype for the emails sent using SMTP';

$l['mail_send'] = 'Send Test Email ?';
$l['mail_subject'] = 'Email Settings - Test Email';
$l['mail_message'] = 'This is a test e-mail to verify the updated Email Settings in '.APP.' Admin panel -> Email
Feel free to delete this email.';
$l['enc_mail_pass'] = 'Save SMTP Password in Encrypted format ?';
$l['err_mcrypt'] = 'mcrypt extension is required to encrypt password';
$l['err_openssl'] = 'Openssl extension is required to encrypt password';