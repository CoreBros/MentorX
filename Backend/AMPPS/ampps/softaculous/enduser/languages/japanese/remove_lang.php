<?php

//////////////////////////////////////////////////////////////
//===========================================================
// remove_lang.php
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

$l['no_ins'] = 'インスタレーションは送信されていません。';
$l['wrong_ins_title'] = 'インスタレーションIDが間違っています。';
$l['wrong_ins'] = 'あなたが送信したインスタレーションIDは存在しません。';
$l['cant_remove_dir'] = 'そのディレクトリは、ホームディレクトリのため削除できません。ディレクトリを残したまま続行するには、<b>ディレクトリの削除</b>のチェックを外して下さい。';
$l['cant_remove_wwwdir'] = 'そのウェブ・ディレクトリは、ホームディレクトリのため削除できません。ディレクトリを残したまま続行するには、<b>ウェブ・ディレクトリの削除</b>のチェックを外して下さい。';
$l['mail_rem_ins'] = ' &soft-1;のインスタレーションは削除されました。インスタレーションの詳細は以下の通りです: ';
$l['mail_path'] = 'パス';
$l['mail_url'] = 'URL';
$l['mail_db'] = 'MySQLデータベース';
$l['mail_dbuser'] = 'MySQLデータベース・ユーザー';
$l['mail_dbhost'] = 'MySQLデータベース・ホスト';
$l['mail_dbpass'] = 'MySQLデータベース・パスワード';
$l['mail_time'] = 'インストール時間';
$l['mail_rem_time'] = '削除時間';
$l['mail_subject'] = '削除された&soft-1;のインスタレーション';
$l['mail_cron_command'] = 'cronのジョブ';
$l['mail_datadir'] = 'データ・ディレクトリ';
$l['mail_wwwdir'] = 'ウェブ・ディレクトリ';
$l['checking_data'] = '送信データの確認';
$l['rem_db'] = 'データベース／データベースユーザーの削除';
$l['rem_dir'] = 'ディレクトリの削除';
$l['rem_datadir'] = 'データ・ディレクトリの削除';
$l['rem_cron'] = 'cronのジョブの削除';
$l['finishing_process'] = '正常に削除されました。';
$l['wait_note'] = '<b>注意:</b>この作業には2～3分程掛かります。プログレスバーが100％に達するまで、このページから離れないで下さい。';


//Theme Strings
$l['<title>'] = APP.' - 削除';
$l['info'] = 'インフォメーション';
$l['ins_softname'] = 'ソフトウェア';
$l['ins_num'] = 'インストール番号';
$l['ins_ver'] = 'バージョン';
$l['ins_time'] = 'インストール時間';
$l['ins_path'] = 'パス';
$l['ins_url'] = 'URL';
$l['ins_db'] = 'データベース名';
$l['ins_dbuser'] = 'データベース・ユーザー';
$l['ins_dbpass'] = 'データベース・パスワード';
$l['ins_dbhost'] = 'データベース・ホスト';
$l['remove_ins'] = 'インスタレーションの削除';
$l['remove_dir'] = 'ディレクトリの削除';
$l['remove_dir_exp'] = 'チェックした場合、全てのフォルダが削除されます。';
$l['remove_db'] = 'データベースの削除';
$l['remove_db_exp'] = 'チェックした場合、データベースは削除されます。';
$l['remove_dbuser'] = 'データベースユーザーの削除';
$l['remove_dbuser_exp'] = 'チェックした場合、データベース・ユーザーも削除されます。';
$l['remove_conf'] = 'この削除は取り消すことができません。本当にこのインスタレーションを削除しますか？';
$l['uninstalled'] = 'インスタレーションは正常に削除されました。';
$l['removeins'] = 'インスタレーションの削除';
$l['ins_cron_command'] = 'cronコマンド';
$l['remove_datadir'] = 'データ・ディレクトリの削除';
$l['remove_datadir_exp'] = 'チェックした場合、データファイルは削除されます。';
$l['ins_datadir'] = 'データ・ディレクトリ';
$l['remove_wwwdir'] = 'ウェブ・ディレクトの削除';
$l['remove_wwwdir_exp'] = 'チェックした場合、ウェブ・ディレクトリは削除されます。';
$l['ins_wwwdir'] = 'ウェブ・ディレクトリ';
$l['return'] = '概要へ戻る';
$l['prog_removing'] = '削除 ';// Dont remove the trailing space
$l['prog_remove_complete'] = 'インストレーションは削除されました。';
$l['disabled_script_info'] = 'このスクリプトが無効なため、インフォメーションを利用できません。';

$l['wpc_return'] = 'Return to Installations';