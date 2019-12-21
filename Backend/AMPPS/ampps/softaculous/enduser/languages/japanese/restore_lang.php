<?php

//////////////////////////////////////////////////////////////
//===========================================================
// restore_lang.php
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

$l['restoreerror'] = 'バックアップファイルの展開中にエラーが発生しました。';
$l['restoredatadir'] = 'データ・ディレクトリを復元出来ません。';
$l['restorewww'] = 'ウェブ・ディレクトリを復元出来ません。';
$l['res_err_selectmy'] = '復元するデータベースを選択出来ませんでした。';
$l['err_myconn'] = 'データベースへ接続出来ませんでした。';
$l['err_db_create'] = 'データベースの作成中にエラーが発生しました。';
$l['off_backup_restore'] = 'Backup/Restore feature has been disabled by admin';
$l['no_backupinfo_file'] = 'Backup info file not found';
$l['no_backup_time'] = 'Backup time not found';
$l['instime_higher_than_btime'] = 'Installation time is higher than the Backup time';

//Theme Strings
$l['<title>'] = APP.' - 復元';
$l['restorefile'] = 'バックアップからの復元';
$l['restore_dir'] = 'ディレクトリの復元';
$l['restore_dir_exp'] = 'チェックした場合、全てのフォルダが復元されます。';
$l['restore_datadir'] = 'データディレクトリの復元';
$l['restore_datadir_exp'] = 'チェックした場合、データディレクトリが復元されます。';
$l['restore_db'] = 'データベースの復元';
$l['restore_db_exp'] = 'チェックした場合、データベースが復元されます。';
$l['restore_ins'] = 'インスタレーションの復元';
$l['restore'] = 'あなたのバックアップは正常に復元されました。';
$l['confirm_restore'] = 'インストレーションを復元しますか？';
$l['return'] = '概要へ戻る';
$l['restore_wwwdir'] = 'ウェブ・ディレクトリの復元';
$l['restore_wwwdir_exp'] = 'チェックした場合、ウェブ・ディレクトリが復元されます。';
$l['checking_data'] = '送信データの確認';
$l['res_db'] = 'データベースの復元';
$l['res_dir'] = 'ディレクトリの復元';
$l['res_datadir'] = 'データ・ディレクトリの復元';
$l['finishing_process'] = 'バックアップを復元しました。';
$l['wait_note'] = '<b>注意:</b>この作業には3～4分程掛かります。進捗状況メーターが100％に達するまで、このページから離れないで下さい。 ';
$l['restoring'] = 'バックアップはバックグラウンドで復元されています。 完了すると、Eメールで通知されます。 復元プロセスは<a href="'.$globals['index'].'act=eu_tasklist">タスクリスト</a>ページから追跡できます。';
$l['prog_restoring'] = '復元 '; // Dont remove the trailing space
$l['prog_restore_complete'] = '復元完了.';
$l['no_restore_functions'] = 'The RESTORE FUNCTIONS file could not be found! Please report this to the server administrator.';
$l['backup_file_empty'] = 'Backup file is empty';
$l['db_not_exist'] = 'Database file does not exist';
$l['db_empty'] = 'The database file is empty';

$l['read_archive'] = 'Reading the archive';

$l['no_backup_file'] = 'Backup file not present';

$l['wpc_not_in_free'] = 'Remote Backups cannot be restored in the Free version of '.APP.'! You can purchase the premium plan <a href="'.$globals['index'].'act=wpc_plans">here</a> to continue using them.';

$l['wpc_return'] = 'Return to Backups';

$l['ampps_notify_premium'] = 'This feature is available in the premium version of AMPPS. Please purchase <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';