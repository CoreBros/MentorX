<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editemailtemp_lang.php
//===========================================================
// SOFTACULOUS 
// Version : 4.0
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Date:       8th Mar 2010
// Time:       23:00 hrs
// Site:       http://www.softaculous.com/ (SOFTACULOUS)
// ----------------------------------------------------------
// Please Read the Terms of use at http://www.softaculous.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Ltd.
//===========================================================
//////////////////////////////////////////////////////////////

if(!defined('SOFTACULOUS')){

	die('Hacking Attempt');

}

$l['tempsub'] = 'Please mention the subject';
$l['tempcontent'] = 'Please mention the Content for templates';
$l['no_email_template'] = 'No email template posted';
$l['invalid_email_template'] = 'Invalid email template';

$l['<title>'] = 'Ｅメールテンプレートの編集';
$l['heading'] = 'Ｅメールテンプレートを編集する';
$l['edittemp'] = 'Ｅメールテンプレートを編集する';
$l['done'] = 'Ｅメールテンプレートは正常に保存されました。';
$l['savetemp'] = 'Ｅメールテンプレート保存';
$l['subject'] = 'サブジェクト';
$l['content'] = 'コンテンツ';
$l['reset_confirm'] = 'Ｅメールテンプレートをリセットしてもよろしいですか？';
$l['reset_template'] = 'テンプレートのリセット';
$l['temp_overview'] = 'テンプレート概要';
$l['language'] = 'Language';
$l['ishtml'] = 'Send as HTML';

$l['if_note'] = '<strong>注意</strong> : You can use an IF for an Optional Variable in the following manner :<br /><strong>&lt;if $VARIABLE_NAME&gt;$VARIABLE_NAME&lt;/if&gt;</strong>';

// Installtion Variables Information
$l['mail_install_php_info'] = '次の変数を使用することができます :<br />
<strong>$scriptname</strong> : スクリプト名<br />
<strong>$path</strong> : インスタレーション・パス<br />
<strong>$version</strong> :バージョン<br />
<strong>$url</strong> : URL<br />
<strong>$admin_url</strong> : 管理用 URL<br />
<strong>$datadirectory</strong> :データディレクトリ<br />
<strong>$admin_username</strong> : 管理用ユーザー名<br />
<strong>$admin_pass</strong> : 管理用パスワード<br />
<strong>$dbname</strong> : MySQLデータベース<br />
<strong>$dbuser</strong> : MySQL データベース・ユーザー<br />
<strong>$dbhost</strong> : MySQL データベース・ホスト<br />
<strong>$dbpass</strong> : MySQL データベース・パスワード<br />
<strong>$cron</strong> : Cron コマンド<br />
<strong>$disable_notify_update</strong> : アップデート通知<br />
<strong>$eu_auto_upgrade</strong> : 自動アップグレード<br />
<strong>$auto_backup</strong> : 自動バックアップ<br />
<strong>$auto_backup_rotation</strong> : バックアップ・ローテーション<br />
<strong>$time</strong> : インストール時間<br />
<strong>$sn</strong> : Site Name (Can be changed from '.APP.' Admin panel -> Settings)<br />
<strong>$user_name</strong> : User Name<br />

<strong>$user_email</strong> : User Email';
// Clone Variables Information
$l['mail_clone_info'] = '次の変数を使用することができます:<br />
<strong>$scriptname</strong> : スクリプト名<br />
<strong>$old_path</strong> : オリジナルインスタレーション・パス<br />
<strong>$old_url</strong> : オリジナルインスタレーション・URL<br />
<strong>$path</strong> : 複製されたインスタレーションのパス<br />
<strong>$version</strong> :バージョン<br />
<strong>$url</strong> : 複製されたインスタレーションのURL<br />
<strong>$admin_url</strong> : 管理用URL<br />
<strong>$datadirectory</strong> : データディレクトリ<br />
<strong>$dbname</strong> : MySQL データベース<br />
<strong>$dbuser</strong> : MySQL データベース・ユーザー<br />
<strong>$dbhost</strong> : MySQL データベース・ホスト<br />
<strong>$dbpass</strong> : MySQL データベース・パスワード<br />
<strong>$cron</strong> : Cron コマンド<br />
<strong>$time</strong> : インストール時間<br />
<strong>$sn</strong> : Site Name (Can be changed from '.APP.' Admin panel -> Settings)<br />
<strong>$user_name</strong> : User Name<br />
<strong>$user_email</strong> : User Email';

// Installtion Variables Information
$l['mail_install_js_info'] = '次の変数を使用することができます :<br />
<strong>$scriptname</strong> : スクリプト名<br />
<strong>$path</strong> : インスタレーション・パス<br />
<strong>$version</strong> : バージョン<br />
<strong>$url</strong> : URL<br />
<strong>$disable_notify_update</strong> : アップデート通知<br />
<strong>$auto_backup</strong> : 自動バックアップ<br />
<strong>$auto_backup_rotation</strong> : バックアップ・ローテーション<br />
<strong>$time</strong> : インストール時間<br />
<strong>$sn</strong> : Site Name (Can be changed from '.APP.' Admin panel -> Settings)<br />
<strong>$user_name</strong> : User Name<br />
<strong>$user_email</strong> : User Email';

// Installtion Variables Information
$l['mail_install_perl_info'] = '次の変数を使用することができます:<br />
<strong>$scriptname</strong> : スクリプト名<br />
<strong>$path</strong> : ンスタレーション・パス<br />
<strong>$version</strong> : バージョン<br />
<strong>$url</strong> : URL<br />
<strong>$admin_url</strong> : 管理用URL<br />
<strong>$datadirectory</strong> : データ・ディレクトリ<br />
<strong>$wwwdir</strong> : ウェブ・ディレクトリ<br />
<strong>$admin_username</strong> : 管理用ユーザー名<br />
<strong>$admin_pass</strong> : 管理用パスワード<br />
<strong>$dbname</strong> : MySQLデータベース<br />
<strong>$dbuser</strong> : MySQL データベース・ユーザー<br />
<strong>$dbhost</strong> : MySQL データベース・ホスト<br />
<strong>$dbpass</strong> : MySQL データベース・パスワード<br />
<strong>$cron</strong> : Cron コマンド<br />
<strong>$disable_notify_update</strong> : アップデート通知<br />
<strong>$auto_backup</strong> : 自動バックアップ<br />
<strong>$auto_backup_rotation</strong> : バックアップ・ローテーション<br />
<strong>$time</strong> :インストール時間<br />
<strong>$sn</strong> : Site Name (Can be changed from '.APP.' Admin panel -> Settings)<br />
<strong>$user_name</strong> : User Name<br />
<strong>$user_email</strong> : User Email';

// Removal Variables
$l['mail_remove_info'] = '次の変数を使用することができます:<br />
<strong>$scriptname</strong> : スクリプト名<br />
<strong>$path</strong> : インスタレーション・パス<br />
<strong>$version</strong> : バージョン<br />
<strong>$url</strong> : URL<br />
<strong>$datadirectory</strong> : データ・ディレクトリ<br />
<strong>$wwwdir</strong> : ウェブ・ディレクトリ<br />
<strong>$dbname</strong> : MySQL データベース<br />
<strong>$dbuser</strong> : MySQL データベース・ユーザー<br />
<strong>$dbhost</strong> : MySQL データベース・ホスト<br />
<strong>$dbpass</strong> : MySQL データベース・パスワード<br />
<strong>$cron</strong> : Cron コマンド<br />
<strong>$time</strong> : インストール時間<br />
<strong>$rem_time</strong> :削除時間<br />
<strong>$sn</strong> : Site Name (Can be changed from '.APP.' Admin panel -> Settings)<br />
<strong>$user_name</strong> : User Name<br />
<strong>$user_email</strong> : User Email';

// Outdated Insatllation Variables (FROM ADMIN)
$l['mail_update_info'] = '次の変数を使用することができます :<br />
<strong>$serverip</strong> : サーバーIP<br />
<strong>$installation</strong> :インスタレーション・リスト<br />
<strong>$time</strong> : 時間<br />
<strong>$sn</strong> : Site Name (Can be changed from '.APP.' Admin panel -> Settings)';

// Outdated Insatllation Variables (FROM CRON)
$l['mail_cron_info'] = '次の変数を使用することができます:<br />
<strong>$serverip</strong> : サーバーIP<br />
<strong>$installation</strong> : アップデート可能なインスタレーションのリスト<br />
<strong>$time</strong> : 時間<br />
<strong>$sn</strong> : Site Name (Can be changed from '.APP.' Admin panel -> Settings)

';

// Edit detail Variables
$l['mail_editdetail_info'] = '次の変数を使用することができます  :<br />
<strong>$path</strong> :インスタレーション・パス<br />
<strong>$url</strong> : URL<br />
<strong>$datadirectory</strong> : データ・ディレクトリ<br />
<strong>$wwwdir</strong> : ウェブ・ディレクトリ<br />
<strong>$wwwurl</strong> : ウェブURL<br />
<strong>$dbname</strong> : MySQL データベース<br />
<strong>$dbuser</strong> : MySQL データベース・ユーザー<br />
<strong>$dbhost</strong> : MySQL データベース・ホスト<br />
<strong>$dbpass</strong> : MySQL データベース・パスワード<br />
<strong>$auto_backup</strong> : 自動バックアップ<br />
<strong>$auto_backup_rotation</strong> : バックアップ・ローテーション<br />
<strong>$time</strong> :インストール時間<br />
<strong>$edit_time</strong> : 修正時間<br />
<strong>$sn</strong> : Site Name (Can be changed from '.APP.' Admin panel -> Settings)<br />
<strong>$user_name</strong> : User Name<br />
<strong>$user_email</strong> : User Email';

// Backup Background Email variables
$l['mail_backup_bg_info'] = '次の変数を使用することができます  :<br />
<strong>$path</strong> : インスタレーション・パス<br />
<strong>$url</strong> : URL<br />
<strong>$scriptname</strong> : スクリプト名<br />
<strong>$backup_file</strong> : ウェブ・ディレクトリ<br />
<strong>$error</strong> : ウェブURL<br />
<strong>$backup_note</strong> : Backup Note<br />
<strong>$sn</strong> : Site Name (Can be changed from '.APP.' Admin panel -> Settings)<br />
<strong>$user_name</strong> : User Name<br />
<strong>$user_email</strong> : User Email';

// Backup Email variables
$l['mail_backup_info'] = '次の変数を使用することができます:<br />
<strong>$path</strong> : インスタレーション・パス<br />
<strong>$url</strong> : URL<br />
<strong>$scriptname</strong> : スクリプト名<br />
<strong>$backup_file</strong> : ウェブ・ディレクトリ<br />
<strong>$error</strong> : ウェブURL<br />
<strong>$backup_note</strong> : バックアップ・ノート<br />
<strong>$sn</strong> : Site Name (Can be changed from '.APP.' Admin panel -> Settings)<br />
<strong>$user_name</strong> : User Name<br />
<strong>$user_email</strong> : User Email';

// Backup Failed Email variables
$l['mail_backup_fail_info'] = '次の変数を使用することができます:<br />
<strong>$path</strong> : インスタレーション・パス<br />
<strong>$url</strong> : URL<br />
<strong>$scriptname</strong> : スクリプト名<br />
<strong>$backup_file</strong> : ウェブ・ディレクトリ<br />
<strong>$error</strong> : ウェブURL<br />
<strong>$sn</strong> : Site Name (Can be changed from '.APP.' Admin panel -> Settings)<br />
<strong>$user_name</strong> : User Name<br />
<strong>$user_email</strong> : User Email';

// Successfully Cli Upgraded by Admin
$l['mail_adminupgrade_success_admin_info'] = '次の変数を使用することができます  :<br />
<strong>$scriptname</strong> : スクリプト名<br />
<strong>$url</strong> : URL<br />
<strong>$oldversion</strong> : 現在のバージョン<br />
<strong>$version</strong> : 最新バージョン<br />
<strong>$user</strong> : ユーザー名<br />
<strong>$backup_path</strong> : バックアップ・パス<br />
<strong>$path</strong> : インスタレーション・パス<br />
<strong>$dbname</strong> : MySQL データベース<br />
<strong>$dbuser</strong> : MySQLデータベース・ユーザー<br />
<strong>$dbhost</strong> : MySQL データベース・ホスト<br />
<strong>$dbpass</strong> : MySQL データベース・パスワード<br />
<strong>$error</strong> : 復元のエラーリスト<br />
<strong>$upgrade_error</strong> : アップグレードのエラーリスト<br />
<strong>$sn</strong> : Site Name (Can be changed from '.APP.' Admin panel -> Settings)
';

$l['mail_adminupgrade_success_admin_info'] = $l['mail_adminupgrade_success_admin_info'];
$l['mail_adminupgrade_fail_admin_info'] = $l['mail_adminupgrade_success_admin_info'];
$l['mail_adminupgrade_restore_fail_admin_info'] = $l['mail_adminupgrade_success_admin_info'];

$l['mail_adminupgrade_success_user_info'] = $l['mail_adminupgrade_success_admin_info'];
$l['mail_adminupgrade_fail_user_info'] = $l['mail_adminupgrade_success_admin_info'];
$l['mail_adminupgrade_restore_fail_user_info'] = $l['mail_adminupgrade_success_admin_info'];

$l['mail_autoupgrade_success_user_info'] = $l['mail_adminupgrade_success_admin_info'];
$l['mail_autoupgrade_fail_user_info'] = $l['mail_adminupgrade_success_admin_info'];
$l['mail_autoupgrade_restore_fail_user_info'] = $l['mail_adminupgrade_success_admin_info'];

$l['mail_userupgrade_success_user_info'] = $l['mail_adminupgrade_success_admin_info'];
$l['mail_userupgrade_fail_user_info'] = $l['mail_adminupgrade_success_admin_info'];
$l['mail_userupgrade_restore_fail_user_info'] = $l['mail_adminupgrade_success_admin_info'];

$l['mail_autoupgrade_backup_fail_info'] = '次の変数を使用することができます:<br />
<strong>$scriptname</strong> : スクリプト名<br />
<strong>$url</strong> : URL<br />
<strong>$oldversion</strong> : 現在のバージョン<br />
<strong>$version</strong> : 最新バージョン<br />
<strong>$user</strong> : ユーザー名<br />
<strong>$error</strong> : エラーリスト<br />
<strong>$sn</strong> : Site Name (Can be changed from '.APP.' Admin panel -> Settings)
';

$l['mail_autoupgrade_precheck_fail_info'] = $l['mail_autoupgrade_backup_fail_info'];

// Auto backup successful Variables
$l['mail_auto_backup_info'] = '次の変数を使用することができます  :<br />
<strong>$scriptname</strong> : スクリプト名<br />
<strong>$path</strong> : インスタレーション・パス<br />
<strong>$url</strong> : インスタレーションURL<br />
<strong>$backup_file</strong> : バックアップ・パス<br />
<strong>$sn</strong> : Site Name (Can be changed from '.APP.' Admin panel -> Settings)
';

// Auto backup failed Variables
$l['mail_auto_backup_fail_info'] = '次の変数を使用することができます  :<br />
<strong>$scriptname</strong> : スクリプト名<br />
<strong>$path</strong> : インスタレーション・パス<br />
<strong>$url</strong> : インスタレーション URL<br />
<strong>$backup_file</strong> : バックアップ・パス<br />
<strong>$error</strong> : エラーリスト<br />
<strong>$sn</strong> : Site Name (Can be changed from '.APP.' Admin panel -> Settings)
';

$l['mail_install_classes_info'] = 'You can use the following Variables :<br />
<strong>$path</strong> : Installation Path<br />
<strong>$user_name</strong> : User Name<br />
<strong>$user_email</strong> : User Email';

$l['mail_restore_info'] = 'You can use the following Variables :<br />
<strong>$path</strong> : Installation Path<br />
<strong>$url</strong> : Installation URL<br />
<strong>$user_name</strong> : User Name<br />
<strong>$user_email</strong> : User Email';

$l['mail_restore_fail_info'] = 'You can use the following Variables :<br />
<strong>$path</strong> : Installation Path<br />
<strong>$url</strong> : Installation URL<br />
<strong>$user_name</strong> : User Name<br />
<strong>$user_email</strong> : User Email';

$l['mail_restore_bg_info'] = 'You can use the following Variables :<br />
<strong>$path</strong> : Installation Path<br />
<strong>$url</strong> : Installation URL<br />
<strong>$user_name</strong> : User Name<br />
<strong>$user_email</strong> : User Email';

$l['mail_import_info'] = 'You can use the following Variables :<br />
<strong>$path</strong> : Installation Path<br />
<strong>$url</strong> : Installation URL<br />
<strong>$user_name</strong> : User Name<br />
<strong>$user_email</strong> : User Email';

$l['mail_import_fail_info'] = 'You can use the following Variables :<br />
<strong>$path</strong> : Installation Path<br />
<strong>$url</strong> : Installation URL<br />
<strong>$user_name</strong> : User Name<br />
<strong>$user_email</strong> : User Email';

$l['mail_import_bg_info'] = 'You can use the following Variables :<br />
<strong>$path</strong> : Installation Path<br />
<strong>$url</strong> : Installation URL<br />
<strong>$user_name</strong> : User Name<br />
<strong>$user_email</strong> : User Email';

// Staging Variables Information
$l['mail_staging_info'] = 'You can use the following Variables :<br />
<strong>$scriptname</strong> : Script Name<br />
<strong>$live_path</strong> : Original Installation Path<br />
<strong>$live_url</strong> : Original Installation URL<br />
<strong>$path</strong> : Staging Installation Path<br />
<strong>$version</strong> : Version<br />
<strong>$url</strong> : Staging Installation URL<br />
<strong>$admin_url</strong> : Admin URL<br />
<strong>$datadirectory</strong> : Data Directory<br />
<strong>$dbname</strong> : MySQL Database<br />
<strong>$dbuser</strong> : MySQL DB User<br />
<strong>$dbhost</strong> : MySQL DB Host<br />
<strong>$dbpass</strong> : MySQL DB Password<br />
<strong>$cron</strong> : Cron Command<br />
<strong>$time</strong> : Time of Installation<br />
<strong>$sn</strong> : Site Name (Can be changed from '.APP.' Admin panel -> Settings)<br />
<strong>$user_name</strong> : User Name<br />
<strong>$user_email</strong> : User Email';

// Pushtolive Variables Information
$l['mail_pushtolive_info'] = 'You can use the following Variables :<br />
<strong>$scriptname</strong> : Script Name<br />
<strong>$live_path</strong> : Original Installation Path<br />
<strong>$live_url</strong> : Original Installation URL<br />
<strong>$path</strong> : Pushed Installation Path<br />
<strong>$version</strong> : Version<br />
<strong>$url</strong> : Pushed Installation URL<br />
<strong>$admin_url</strong> : Admin URL<br />
<strong>$datadirectory</strong> : Data Directory<br />
<strong>$dbname</strong> : MySQL Database<br />
<strong>$dbuser</strong> : MySQL DB User<br />
<strong>$dbhost</strong> : MySQL DB Host<br />
<strong>$dbpass</strong> : MySQL DB Password<br />
<strong>$cron</strong> : Cron Command<br />
<strong>$time</strong> : Time of Installation<br />
<strong>$sn</strong> : Site Name (Can be changed from '.APP.' Admin panel -> Settings)<br />
<strong>$user_name</strong> : User Name<br />
<strong>$user_email</strong> : User Email';

