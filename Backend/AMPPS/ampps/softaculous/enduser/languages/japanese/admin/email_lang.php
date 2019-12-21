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

$l['no_mail'] = 'メール方法が指定されていません。';
$l['wrong_mail'] = 'あなたが送信したメール方法は無効です。';
$l['no_mail_server'] = 'SMTPメールサーバはポストされていません。';
$l['no_mail_port'] = 'SMTP メールポートはポストされていません。';
$l['no_mail_user'] = 'SMTPメールユーザー名はポストされていません。';
$l['no_mail_pass'] = 'SMTPメールパスワードはポストされていません。';
$l['saving_error'] = '設定の保存中にエラーが発生しました。';

//Theme Strings
$l['<title>'] = APP.' ? セッティング・センター';
$l['settings_saved'] = 'Ｅメール設定は正常に保存されました。';
$l['emailhead'] = 'Ｅメール設定';
$l['mailmethod'] = 'メール方法';
$l['mailmethod_exp'] = 'あなたのSMTPサーバまたはPHPメール機能を使用してメールを送信します。';
$l['smtp_server'] = 'SMTPサーバ';
$l['smtp_port'] = 'SMTPポート';
$l['smtp_user'] = 'SMTPユーザー名';
$l['smtp_pass'] = 'SMTPパスワード';
$l['edit_settings'] = '設定編集';
$l['mailauthtype'] = 'SMTP Authtype';
$l['mailauthtype_exp'] = 'Choose the Authtype for the emails sent using SMTP';

$l['mail_send'] = 'Send Test Email ?';
$l['mail_subject'] = 'Email Settings - Test Email';
$l['mail_message'] = 'This is a test e-mail to verify the updated Email Settings in '.APP.' Admin panel -> Email
Feel free to delete this email.';
$l['enc_mail_pass'] = 'Save SMTP Password in Encrypted format ?';
$l['err_mcrypt'] = 'mcrypt extension is required to encrypt password';
$l['err_openssl'] = 'Openssl extension is required to encrypt password';