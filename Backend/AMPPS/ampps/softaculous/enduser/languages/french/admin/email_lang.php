<?php

//////////////////////////////////////////////////////////////
//===========================================================
// admin/email_lang.php
//===========================================================
// SOFTACULOUS FRENCH PACK
// Version 4
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Date:       10th Jan 2009
// Time:       21:00 hrs
// Site:       http://www.softaculous.com/ (SOFTACULOUS)
// ----------------------------------------------------------
// Edited by:  Romain Fluttaz
// Date:       1 July 2009
// Time:       15:00 hrs
// Site:       http://botux.fr/
// ----------------------------------------------------------
// Edited by:  Michel LAURENT
// Date:       25th Augustus 2009
// Time:       18:00 hrs
// Site:       http://www.equipc.net
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

$l['no_mail'] = 'Aucune méthode pour l\'envoi d\'e-mail n\'a été sélectionnée';
$l['wrong_mail'] = 'La méthode que vous avez soumis pour l\'envoi d\'email est invalide';
$l['no_mail_server'] = 'Aucun serveur SMTP n\'a été indiqué';
$l['no_mail_port'] = 'Aucun port SMTP n\'a été indiqué';
$l['no_mail_user'] = 'Aucun nom d\'utilisateur SMTP  n\'a été indiqué';
$l['no_mail_pass'] = 'Aucun mot de passe SMTP n\'a été indiqué';
$l['saving_error'] = 'Il y a eu des erreurs lors de l\'enregistrement de la configuration';

//Theme Strings
$l['<title>'] = APP.' - Paramètres';
$l['settings_saved'] = 'La configuration des e-mails a été enregistrée';
$l['emailhead'] = 'Configuration E-mail';
$l['mailmethod'] = 'Méthode d\'envoi';
$l['mailmethod_exp'] = 'Envoyer des mails en utilisant PHP mail() ou votre serveur SMTP';
$l['smtp_server'] = 'Serveur SMTP';
$l['smtp_port'] = 'Port SMTP';
$l['smtp_user'] = 'Nom d\'utilisateur SMTP';
$l['smtp_pass'] = 'Mot de passe SMTP';
$l['edit_settings'] = 'Modifier les paramètres';
$l['mailauthtype'] = 'SMTP Authtype';
$l['mailauthtype_exp'] = 'Choose the Authtype for the emails sent using SMTP';

$l['mail_send'] = 'Send Test Email ?';
$l['mail_subject'] = 'Email Settings - Test Email';
$l['mail_message'] = 'This is a test e-mail to verify the updated Email Settings in '.APP.' Admin panel -> Email
Feel free to delete this email.';
$l['enc_mail_pass'] = 'Save SMTP Password in Encrypted format ?';
$l['err_mcrypt'] = 'mcrypt extension is required to encrypt password';
$l['err_openssl'] = 'Openssl extension is required to encrypt password';