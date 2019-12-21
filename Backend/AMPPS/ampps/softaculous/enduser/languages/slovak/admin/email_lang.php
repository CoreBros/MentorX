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

$l['no_mail'] = 'No mail method was selected';
$l['wrong_mail'] = 'The mail method you submitted is invalid';
$l['no_mail_server'] = 'No SMTP mail server was posted';
$l['no_mail_port'] = 'No SMTP mail port was posted';
$l['no_mail_user'] = 'No SMTP mail username was posted';
$l['no_mail_pass'] = 'No SMTP mail password was posted';
$l['saving_error'] = 'There were some errors while saving settings';

//Theme Strings
$l['<title>'] = APP.' - Settings Center';
$l['settings_saved'] = 'The email settings were saved successfully';
$l['emailhead'] = 'Email Settings';
$l['mailmethod'] = 'Mailing Method';
$l['mailmethod_exp'] = 'Send mail using PHP mail() function or your SMTP server';
$l['smtp_server'] = 'SMTP Server';
$l['smtp_port'] = 'SMTP Port';
$l['smtp_user'] = 'SMTP Username';
$l['smtp_pass'] = 'SMTP Password';
$l['edit_settings'] = 'Edit Settings';
$l['mailauthtype'] = 'SMTP Authtype';
$l['mailauthtype_exp'] = 'Choose the Authtype for the emails sent using SMTP';

$l['mail_send'] = 'Send Test Email ?';
$l['mail_subject'] = 'Email Settings - Test Email';
$l['mail_message'] = 'This is a test e-mail to verify the updated Email Settings in '.APP.' Admin panel -> Email
Feel free to delete this email.';
$l['enc_mail_pass'] = 'Save SMTP Password in Encrypted format ?';
$l['err_mcrypt'] = 'mcrypt extension is required to encrypt password';
$l['err_openssl'] = 'Openssl extension is required to encrypt password'; 