<?php

//////////////////////////////////////////////////////////////
//===========================================================
// settings_lang.php
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

$l['no_mail'] = 'Non &egrave; stato selezionato alcun Metodo per la posta elettronica';
$l['wrong_mail'] = 'Il Metodo inserito non &egrave; valido';
$l['no_mail_server'] = 'Non &egrave; stato inserito un Server SMTP';
$l['no_mail_port'] = 'Non &egrave; stata inserita una Porta SMTP';
$l['no_mail_user'] = 'Non &egrave; stato inserito un Nome Utente SMTP';
$l['no_mail_pass'] = 'Non &egrave; stata inserita una Password SMTP';
$l['saving_error'] = 'Si &egrave; verificato un errore durante il salvataggio delle impostazioni';

//Theme Strings
$l['<title>'] = APP.' - Pannello Impostazioni';
$l['settings_saved'] = 'Le impostazioni per la posta elettronica sono state salvate con successo';
$l['emailhead'] = 'Impostazioni E-mail';
$l['mailmethod'] = 'Metodo Posta Elettronica';
$l['mailmethod_exp'] = 'Invia messaggi utilizzando la funzione PHP mail() oppure il server SMTP';
$l['smtp_server'] = 'Server SMTP';
$l['smtp_port'] = 'Porta SMTP';
$l['smtp_user'] = 'Nome Utente SMTP';
$l['smtp_pass'] = 'Password SMTP';
$l['edit_settings'] = 'Modifica Impostazioni';
$l['mailauthtype'] = 'SMTP Authtype';
$l['mailauthtype_exp'] = 'Choose the Authtype for the emails sent using SMTP';

$l['mail_send'] = 'Send Test Email ?';
$l['mail_subject'] = 'Email Settings - Test Email';
$l['mail_message'] = 'This is a test e-mail to verify the updated Email Settings in '.APP.' Admin panel -> Email
Feel free to delete this email.';
$l['enc_mail_pass'] = 'Save SMTP Password in Encrypted format ?';
$l['err_mcrypt'] = 'mcrypt extension is required to encrypt password';
$l['err_openssl'] = 'Openssl extension is required to encrypt password';