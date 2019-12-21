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

$l['no_mail'] = 'Mail metodu seçilmedi';
$l['wrong_mail'] = 'Mail metodunuz geçersiz';
$l['no_mail_server'] = 'SMMTP server hatası';
$l['no_mail_port'] = 'SMTP mail port\'u yok';
$l['no_mail_user'] = 'SMTP mail kullanıcı adı yok';
$l['no_mail_pass'] = 'SMTP mail şifresi yok';
$l['saving_error'] = 'Ayarlar kaydedilirken hata oluştu.';

//Theme Strings
$l['<title>'] = ''.APP.' - Ayar Merkezi';
$l['settings_saved'] = 'Mail ayarları başarıyla kaydedildi';
$l['emailhead'] = 'Email Ayarları';
$l['mailmethod'] = 'Mail Metodu';
$l['mailmethod_exp'] = 'Mailleri PHP mail() fonksiyonu veya SMTP ile gönder';
$l['smtp_server'] = 'SMTP Server';
$l['smtp_port'] = 'SMTP Port';
$l['smtp_user'] = 'SMTP Kullanıcı Adı';
$l['smtp_pass'] = 'SMTP Şifresi';
$l['edit_settings'] = 'Ayarları Değiştir';
$l['mailauthtype'] = 'SMTP Authtype';
$l['mailauthtype_exp'] = 'Choose the Authtype for the emails sent using SMTP';

$l['mail_send'] = 'Send Test Email ?';
$l['mail_subject'] = 'Email Settings - Test Email';
$l['mail_message'] = 'This is a test e-mail to verify the updated Email Settings in '.APP.' Admin panel -> Email
Feel free to delete this email.';
$l['enc_mail_pass'] = 'Save SMTP Password in Encrypted format ?';
$l['err_mcrypt'] = 'mcrypt extension is required to encrypt password';

$l['err_openssl'] = 'Openssl extension is required to encrypt password';