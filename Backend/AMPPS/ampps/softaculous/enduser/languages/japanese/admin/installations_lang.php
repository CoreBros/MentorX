<?php

//////////////////////////////////////////////////////////////
//===========================================================
// installations_lang.php
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

$l['no_submit'] = 'Ｅメール用のインスタレーションが選択されていません。';
$l['no_ins_selected'] = 'アップグレード用のインスタレーションが選択されていません。';
$l['posix_error'] = 'POSIX機能が無効です。インスタレーションを自動アップグレードするためにPOSIX機能を有効にして下さい。';
$l['shellexec_error'] = ' exec機能が無効です。インスタレーションを自動アップグレードするためにexec機能を有効にして下さい。';
$l['user_soft_upd_sub'] = 'スクリプトアップデートが利用可能です。';
$l['user_soft_upd'] = 'このＥメールは、あなたがインストールした期限切れのPHPスクリプトのインスタレーションに関するものです。セキュリティを考慮し、速やかに期限切れのインスタレーションをアップデートして下さい。下記のスクリプトがアップデート可能です:

&soft-1;
これらのスクリプトをアップグレードするためには、コントロール・パネル -> '.APP.' -> インスタレーションにアクセスして下さい。

システム管理者';
$l['no_reseller_upgrade_ins'] = 'Resellers are not allowed to auto upgrade installations';

//Theme Strings
$l['<title>'] = APP.' - インスタレーション・リスト';
$l['searchinstallations'] = 'インスタレーションの検索';
$l['search_scripts'] = 'スクリプト';
$l['search_scripts_exp'] = '複数のスクリプトは\'<b>;</b>\'で分けられます。';
$l['search_users'] = 'ユーザー';
$l['search_users_exp'] = '複数のユーザーは \'<b>;</b>\'で分けられます。';
$l['group_by_scripts'] = 'スクリプトのグループ';
$l['group_by_scripts_exp'] = '初期設定では、ユーザーによりグループ分けがされています。';
$l['only_outdated'] = '期限切れのインスタレーションのみ表示する';
$l['only_outdated_exp'] = '初期設定では、全てのインスタレーションを表示します。';
$l['li_user'] = 'ユーザー';
$l['li_scripts'] = 'スクリプト';
$l['li_domains'] = 'ドメイン';
$l['li_url'] = 'URL';
$l['li_insver'] = 'インストールされたバージョン';// Installed Ver
$l['li_ver'] = 'バージョン';
$l['li_realver'] = 'リアルバージョン';
$l['no_results'] = '検索結果はありません。';
$l['search_ins'] = '検索';
$l['with_selected'] = 'With Selected';
$l['sub_email_users'] = '新規バージョンのＥメールユーザー';
$l['emailed_users'] = '選択されたインスタレーションのユーザーは利用可能なアップデートが通知されます。';
$l['sub_upgrade_ins'] = 'アップグレード';
$l['upgrading_ins'] = 'インスタレーションのアップグレード中...';
$l['upgraded_ins'] = '自動アップグレードは完了しました。詳細はＥメールで送信されています。';
$l['upgraded'] = 'アップグレードされました。';
$l['failed'] = '失敗しました。';
$l['go_to_autoupgrade'] = 'リストを参照する';
$l['upgrading_completed'] = 'アップグレードの終了';
$l['beta_note'] = '<b>注意</b> : この機能は<b>BETA VERSION</b>に搭載されています。 <a href="http://softaculous.com/docs/Auto_Upgrade" target="_blank">Read More..</a>';
$l['wait_note'] = '<b>注意</b> :全てのインスタレーションのアップグレードが完了するまでこのページから離れないで下さい。';
$l['tasklist_button'] = 'タスク・リスト';
$l['auto_upgrade_enabled'] = '自動アップグレードが有効です。';
$l['real_ver_notice'] = 'リアルバージョンが '.APP.' レコードに合致しません。ユーザーが手動でインスタレーションをアップグレードしているようです。';
$l['latest_ver_notice'] = 'インスタレーションの最新バージョンを利用できます。';
$l['update_records'] = ' '.APP.' レコードのアップデート';
$l['no_submit_rec'] = ' '.APP.' レコードをアップデートするインスタレーションが選択されていません。';
$l['err_update_record'] = ' '.APP.' レコードのバージョンをアップデート中にエラーが発生しました。';
$l['succ_update_record'] = ' '.APP.' レコード内の選択されたインスタレーション・バージョンは正常にアップデートされました。';
$l['only_realversion'] = 'リアルバージョンを表示する';
$l['only_realversion_exp'] = 'チェックを入れた場合、'.APP.'はインスタレーションのリアルバージョンを検出します。<br /><b>注意</b>: インスタレーションのファイルをスキャンしてリアルバージョンを検出するため、この作業には時間が掛かる可能性があります。';
$l['no_info'] = '情報はありません。';
$l['search_domains'] = 'Domains';
$l['search_domains_exp'] = 'Leave blank for all. For multiple domains seperate with \'<b>;</b>\'';

$l['auto_upgrade_major'] = '(Major and Minor)'; 
$l['auto_upgrade_minor'] = '(Minor)';