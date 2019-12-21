<?php

//////////////////////////////////////////////////////////////
//===========================================================
// ftp_account_lang.php
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

$l['no_domain'] = 'cPanelサーバー名を指定していません。.';
$l['no_user'] = 'cPanelユーザー名を指定していません。';
$l['no_pass'] = ' cPanelユーザーパスワードを指定していません。';
$l['err_invalid_user'] = 'ユーザー名はWebuzo のユーザー名と同一にする必要があります。';
$l['err_invalid_ip'] = '無効なcPanelIPアドレス';
$l['err_invalid_domain'] = '無効なcPanelドメイン名';
$l['err_ftp_user_connect'] = 'ユーザー情報を使用してあなたのcPanel サーバーへ接続することができませんでした。あなたのユーザー情報を確認して下さい。';

// Theme Strings
$l['<title>'] = APP.' - Import From cPanel';
$l['import_cpanel'] = ' cPanelからのインポート';
$l['r_domain'] = 'cPanelサーバーアドレス （必須）';
$l['r_domain_exp'] = 'IPアドレスまたはFQDN';
$l['r_user'] = 'ユーザー名 （必須）';
$l['r_user_exp'] = ' Webuzoと同一のユーザー名';
$l['r_pass'] = 'パスワード';
$l['r_pass_exp'] = 'cPanel user password.<br/>If specified, the process will import data directly from cPanel.';
$l['submit_button'] = '送信';
$l['import_done'] = ' cPanel からのインポートはバックグラウンドで開始されました。インポートが完了次第、Ｅメールを受信します。';
$l['note'] = '<b>注意:</b>この機能は<b>Beta</b>内にあります。<a href="http://www.webuzo.com/wiki/Import_From_cPanel" target="_blank" >Here</a> のガイドをご参照下さい。';
$l['r_backup'] = 'cPanel backup file';
$l['r_backup_exp'] = 'If specified, the process will import data from this file.<br/>The file should be stored locally inside <b>/home/webuzo-username</b> directory';
$l['backup_notfound'] = 'Backup file not found';
$l['err_backup_format'] = 'Incorrect File format found';
$l['atleast_one'] = 'Specify either cPanel password or backup file name';
$l['err_both'] = 'You can not specify cPanel password and backup file name';
$l['or'] = 'OR';
$l['is_backup_avbl'] = 'Do you have backup saved on the local server?';
$l['exp_backup_avbl'] = 'Check for backup saved locally & Uncheck for Remote Import';