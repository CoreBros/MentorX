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

$l['no_mail'] = 'Не указан метод отправки';
$l['wrong_mail'] = 'Указанный метод отправки не действует.';
$l['no_mail_server'] = 'Не указан SMTP сервер';
$l['no_mail_port'] = 'Не указан SMTP порт';
$l['no_mail_user'] = 'Не указан SMTP пользователь';
$l['no_mail_pass'] = 'Не указан SMTP пароль';
$l['saving_error'] = 'При сохранении произошли некоторые ошибки';

//Theme Strings
$l['<title>'] = ''.APP.' - Центр настроек';
$l['settings_saved'] = 'Email настройки успешно сохранены';
$l['emailhead'] = 'Настройки Email';
$l['mailmethod'] = 'Метод отправки';
$l['mailmethod_exp'] = 'Отправлять почту с помощью PHP функции mail() или через SMTP-сервер';
$l['smtp_server'] = 'SMTP Сервер';
$l['smtp_port'] = 'SMTP Порт';
$l['smtp_user'] = 'SMTP Пользователь';
$l['smtp_pass'] = 'SMTP Пароль';
$l['edit_settings'] = 'Сохранить настройки';
$l['mailauthtype'] = 'SMTP Authtype';
$l['mailauthtype_exp'] = 'Choose the Authtype for the emails sent using SMTP';

$l['mail_send'] = 'Send Test Email ?';
$l['mail_subject'] = 'Email Settings - Test Email';
$l['mail_message'] = 'This is a test e-mail to verify the updated Email Settings in '.APP.' Admin panel -> Email
Feel free to delete this email.';
$l['enc_mail_pass'] = 'Save SMTP Password in Encrypted format ?';
$l['err_mcrypt'] = 'mcrypt extension is required to encrypt password';
$l['err_openssl'] = 'Openssl extension is required to encrypt password'; 