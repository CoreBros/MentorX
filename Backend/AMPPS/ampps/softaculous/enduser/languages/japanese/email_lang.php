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

$l['no_email'] = 'Ｅメールアドレスが特定されませんでした。';
$l['wrong_email'] = '送信されたＥメールアドレスは無効です。';
$l['off_email_link'] = 'Email settings have been disabled by admin';

//Theme Strings
$l['<title>'] = APP.' - Ｅメール設定';
$l['emailsettings'] = 'Ｅメール設定';
$l['email_address'] = 'Ｅメールアドレス';
$l['email_exp'] = '受信先Ｅメールアドレス';
$l['ins_email'] = 'インストール時のＥメール通知';
$l['ins_email_exp'] = '新しいソフトウェアをインストールした際に、セットアップの詳細をＥメールで通知します。';
$l['rem_email'] = 'アンインストール時のＥメール通知';
$l['rem_email_exp'] = 'ソフトウェアがアンインストールされた際に、Ｅメールで通知します。';
$l['edit_settings'] = '編集後の設定を保存する';
$l['settings_saved'] = '設定は正常に保存されました。';
$l['editdetail_email'] = 'インスタレーション編集時のＥメール通知';
$l['editdetail_email_exp'] = 'インスタレーションの詳細が編集された際に、Ｅメールで通知します。';
$l['disable_all_notify_update'] = '全てのアップデート通知を無効にする';
$l['disable_all_notify_update_exp'] = '全てのインスタレーションで利用可能な、アップデートのＥメール通知を無効にします。';
$l['backup_email'] = 'バックアップ時のＥメール通知';
$l['backup_email_exp'] = 'インスタレーションをバックアップした際に、バックアップの詳細をＥメールで通知します。';
$l['clone_email'] = '複製時のＥメール';
$l['clone_email_exp'] = 'インスタレーションを複製した際に、インスタレーションの詳細をＥメールで通知します。';
$l['restore_email'] = 'Restore Emails';
$l['restore_email_exp'] = 'Send an email containing restore details when you restore any installation';
$l['done'] = 'Done';
$l['email_password_user'] = 'Email password in plain text';
$l['email_password_user_exp'] = 'If checked, the passwords will be sent in plain-text to the users via email for install, clone, etc.';
$l['import_email'] = 'Import Emails'; 
$l['import_email_exp'] = 'Send an email containing details of the installation you have imported'; 

$l['staging_email'] = 'Staging Emails';
$l['staging_email_exp'] = 'Send an email containing installation details when you create a staging environment of any installation';