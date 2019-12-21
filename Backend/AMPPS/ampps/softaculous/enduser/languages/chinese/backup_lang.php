<?php

//////////////////////////////////////////////////////////////
//===========================================================
// backup_lang.php
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

$l['no_ins'] = '沒有選擇的語法';
$l['wrong_ins_title'] = '錯誤的安裝包ID';
$l['wrong_ins'] = '選擇的安裝ID不存在';
$l['backup_ftp_error'] = '不能創建 <b>&soft-1;</b> 的備份路徑. 請手動創建一個並重新試一遍.';
$l['err_backup'] = '無法創建備份.';
$l['no_space_backup'] = '您沒有足夠的空間來創建備份!';
$l['err_notelength'] = '備份的筆記文字必須少於 255 個';
$l['off_backup_restore'] = 'Backup/Restore feature has been disabled by admin';

$l['cant_backup_dir'] = '備份程序無法創建備份文件.';
$l['could_not_read'] = '喔, Softaculous 無法讀取以下 文件/資料夾 <b>&soft-1;</b> 請創建一個可以讀取的資料夾後再進行備份.';
$l['cant_datadir_dir'] = '那裡有個錯誤當要新增資料夾.';
$l['cant_wwwdir'] = '那裡有個錯誤當要新增網頁資料夾.';
$l['cant_backup_db'] = '那裡有個錯誤當要新增資料夾來備份.';
$l['err_perm_file'] = '那裡有個錯誤當要更改檔案的權限';
$l['err_dataperm_file'] = '那裡有個錯誤當要修改資料資料夾的權限';
$l['err_wwwperm_file'] = '那裡有個錯誤當要修改網頁資料夾的權限';
$l['save_dir_perms'] = '無法修改檔案的權限';
$l['save_datadir_perms'] = '無法修改資料資料夾的權限';
$l['save_www_perms'] = '無法修改網頁資料夾的權限';
$l['cant_connect_mysql'] = '無法連線到資料庫, 請檢查資料庫的 使用者名稱/密碼. 如果他改變了, 請更新詳細資料於 Softaculous 安裝包使用修改詳細資料的工具.';

//Theme Strings
$l['<title>'] = APP.' - 備份';
$l['info'] = '資訊';
$l['ins_softname'] = '語法';
$l['ins_num'] = '安裝包號碼';
$l['ins_ver'] = '版本';
$l['ins_time'] = '安裝時間';
$l['ins_path'] = '路徑';
$l['ins_wwwdir'] = '網頁資料夾路徑';
$l['ins_url'] = '連結';
$l['ins_db'] = '資料庫名稱';
$l['ins_dbuser'] = '資料庫使用者';
$l['ins_dbpass'] = '資料庫密碼';
$l['ins_dbhost'] = '資料庫域名';
$l['backup_ins'] = '備份一個安裝包';
$l['backup_dir'] = '備份安裝包';
$l['backup_dir_exp'] = '如果您選擇這個選項將會備份所有的資料夾';
$l['backup_db'] = '備份資料庫';
$l['backup_db_exp'] = '如果資料庫被選擇同時也會被備份';
$l['backup_conf'] = '如果備份資料也許會需要一些時間. 請勿關閉網頁或連結到其他網頁.';
$l['backedup'] = '成功備份. 您可以從 <a href="'.$globals['index'].'act=backups">備份</a> 來下載.<br /> 您的安裝連結 : <a href="&soft-1;" target="_blank">&soft-1;</a>';
$l['backup_ins'] = '備份安裝包';
$l['backup_datadir'] = '備份資料資料夾';
$l['backup_datadir_exp'] = '如果您選擇這個選項將會備份所有的資料資料夾.';
$l['ins_datadir'] = '資料資料夾';
$l['return'] = '回到總攬';
$l['ins_cron_command'] = 'Cron 指令';
$l['backup_wwwdir'] = '備份網頁資料夾';
$l['backup_wwwdir_exp'] = '如果選擇了這個選項網頁資料夾將會被儲存.';
$l['checking_data'] = '正在檢查送出的資料';
$l['backingup_db'] = '正在備份資料庫';
$l['backingup_dir'] = '正在備份資料夾';
$l['backingup_datadir'] = '正在備份資料資料夾';
$l['finishing_process'] = '正在完成備份';
$l['wait_note'] = '<b>注意:</b> 這將會使用到 3-4 分鐘. 您可以依照您的願望離開這個網頁 !';
$l['backingup'] = '備份正在於後台運行. 完成時您將會收到一則電子郵件提醒.<br /> 當備份完成後, 您可以從 <a href="'.$globals['index'].'act=backups">備份</a> 頁面下載.<br /> 您的安裝包連結 : <a href="&soft-1;" target="_blank">&soft-1;</a>';
$l['check_email'] = '請確認您的備份狀態於您的電子郵件';
$l['prog_backingup'] = '正在備份 '; // Dont remove the trailing space
$l['prog_backup_complete'] = '備份完成.';
$l['backup_note'] = '備份記事';
$l['backup_note_exp'] = '您可以依照意願留下備份記事';


$l['backup_operation'] = 'Select Backup Operation(s)';
$l['backups_expire'] = 'Your backups will be automatically purged after <b>&soft-1;</b> days of the backup creation.';
$l['err_max_backups'] = 'You have reached the maximum number of (<b>&soft-1;</b>) backups allowed. Please delete unwanted backups to be able to take a new backup.';
$l['backup_notes'] = 'Backup created by '.APP.' auto backup';
$l['max_backups'] = 'You currently have <b>&soft-1;</b> backups in your account. Your maximum backups limit is <b>&soft-2;</b>.';
$l['no_backup_functions'] = 'The BACKUP FUNCTIONS file could not be found! Please report this to the server administrator.';
$l['no_dir_exists'] = 'The Installation Directory does not exist.';
$l['backup_location_name'] = 'Backup Location';
$l['backup_file_empty'] = 'Incorrect backup file size : 0';
$l['err_mysql_db'] = 'The MySQL database name is incorrect as the database could not be selected.';
$l['backup_loc'] = 'Backup Location'; 
$l['exp_backup_loc'] = 'Choose the backup location where you would like to store the backup'; 
$l['default'] = 'Default'; 
$l['invalid_backup_location'] = 'Backup location submitted does not exist'; 
$l['local_folder'] = 'Local Folder'; 

$l['invalid_access_token'] = 'Invalid Access Token. Please Re-Authorize '.APP.' Dropbox APP from the Edit Backup location page in '.APP.' enduser panel';
$l['insufficient_space'] = 'Your Dropbox account is full. Please free some space and attempt the backup after sometime';

$l['gdrive_err_init'] = 'There were some errors while initiating the backup on Google Drive!!';
$l['gdrive_err_end'] = 'There were some errors while committing backup to your Google Drive account!!';

$l['error_max_backup_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Backups allowed per script';

$l['ftp_access'] = 'PHP process is unable to write files to your server. Please configure FTP access to continue.';
$l['configure_domain'] = 'Configure Settings';

$l['wpc_return'] = 'Return to Backups';

$l['ampps_notify_premium'] = 'This feature is available in the premium version of AMPPS. Please purchase <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';
$l['backing_up'] = 'Your backup is being created in background. You will be notified by email once its completed. You can track the backup process from the <a href="'.$globals['index'].'act=eu_tasklist">Task List</a> page.<br /> Your installation URL : <a href="&soft-1;" target="_blank">&soft-1;</a>';