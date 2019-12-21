<?php

//////////////////////////////////////////////////////////////
//===========================================================
// settings_lang.php
//===========================================================
// SOFTACULOUS 
// Version : 1.0
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

$l['no_mail'] = 'No se ha seleccionado el método de correo';
$l['wrong_mail'] = 'Método no válido';
$l['no_mail_server'] = 'No se ha especificado el servidor SMTP';
$l['no_mail_port'] = 'No se ha especificado el puerto SMTP';
$l['no_mail_user'] = 'No se ha especificado el nombre de usuario SMTP';
$l['no_mail_pass'] = 'No se ha especificado la contraseña SMTP';
$l['saving_error'] = 'Hubo algún error al guardar preferencias';

//Theme Strings
$l['<title>'] = ''.APP.' - Preferencias de Email';
$l['settings_saved'] = 'Las preferencias de email han sido guardadas correctamente';
$l['emailhead'] = 'Preferencias de Email';
$l['mailmethod'] = 'Método';
$l['mailmethod_exp'] = 'Enviar correos utilizando la función PHP mail() ó el servidor SMTP';
$l['smtp_server'] = 'Servidor SMTP';
$l['smtp_port'] = 'Puerto SMTP';
$l['smtp_user'] = 'Usuario SMTP';
$l['smtp_pass'] = 'Contraseña SMTP';
$l['edit_settings'] = 'Editar Preferencias';
$l['mailauthtype'] = 'SMTP Authtype';
$l['mailauthtype_exp'] = 'Choose the Authtype for the emails sent using SMTP';

$l['mail_send'] = 'Send Test Email ?';
$l['mail_subject'] = 'Email Settings - Test Email';
$l['mail_message'] = 'This is a test e-mail to verify the updated Email Settings in '.APP.' Admin panel -> Email
Feel free to delete this email.';
$l['enc_mail_pass'] = 'Save SMTP Password in Encrypted format ?';
$l['err_mcrypt'] = 'mcrypt extension is required to encrypt password';
$l['err_openssl'] = 'Openssl extension is required to encrypt password'; 