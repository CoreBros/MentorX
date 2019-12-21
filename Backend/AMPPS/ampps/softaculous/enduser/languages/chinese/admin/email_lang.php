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

$l['no_mail'] = '沒有選擇寄件方式';
$l['wrong_mail'] = '您送出的計畫方式是錯誤的';
$l['no_mail_server'] = '沒有送出 SMTP 伺服器';
$l['no_mail_port'] = '沒有送出 SMTP 埠';
$l['no_mail_user'] = '沒有送出 SMTP 郵件使用者名稱';
$l['no_mail_pass'] = '沒有送出 SMPT 郵件使用者密碼';
$l['saving_error'] = '儲存設定時出現錯誤';

//Theme Strings
$l['<title>'] = APP.' - 設定中心';
$l['settings_saved'] = '電子郵件設定已經成功儲存';
$l['emailhead'] = '電子郵件設定';
$l['mailmethod'] = '寄件方式';
$l['mailmethod_exp'] = '使用 PHP mail() 指令或者您的 SMTP 伺服器';
$l['smtp_server'] = 'SMTP 伺服器';
$l['smtp_port'] = 'SMTP 埠';
$l['smtp_user'] = 'SMTP 使用者名稱';
$l['smtp_pass'] = 'SMTP 使用者密碼';
$l['edit_settings'] = '編輯設定';

$l['mailauthtype'] = 'SMTP Authtype';
$l['mailauthtype_exp'] = 'Choose the Authtype for the emails sent using SMTP';

$l['mail_send'] = 'Send Test Email ?';
$l['mail_subject'] = 'Email Settings - Test Email';
$l['mail_message'] = 'This is a test e-mail to verify the updated Email Settings in '.APP.' Admin panel -> Email
Feel free to delete this email.';
$l['enc_mail_pass'] = 'Save SMTP Password in Encrypted format ?';
$l['err_mcrypt'] = 'mcrypt extension is required to encrypt password';
$l['err_openssl'] = 'Openssl extension is required to encrypt password';