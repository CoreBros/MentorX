<?php

//////////////////////////////////////////////////////////////
//===========================================================
// cli_lang.php
//===========================================================
// SOFTACULOUS 
// Version : 4.1.7
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

$l['err_cannot_autoupgrade'] = "自動安裝無法於這個管理介面運行.\n";
$l['err_invalid_param'] = "錯誤的 &soft-1; 參數\n請閱讀以下連結的說明事項 :\nhttp://www.softaculous.com/docs/Upgrade_Script_from_CLI\n";
$l['err_no_input'] = "請提供一些輸入.\n";
$l['err_no_insid'] = "沒有提供安裝包ID.\n";
$l['err_no_username'] = "沒有提供用戶名稱.\n";
$l['err_no_such_user'] = "找不到用戶.\n";
$l['err_dont_provide_username'] = "不需要用戶名稱.\n";
$l['err_no_softdir'] = "找不到用戶的語法資料夾 &soft-1;\n";
$l['err_no_installation'] = "沒有找到任何安裝包於這個安裝包ID : &soft-1;\n";
$l['err_cant_upgrade'] = "這個語法已經是最新的或是這個語法不支援自動更新.\n";
$l['err_backup_fail'] = '備份沒有順利進行因此停止升級程序. 以下為詳細資訊 :';
$l['err_upgrade_restore_failed'] = '錯誤的升級安裝包然後也錯誤的還原過去的備份檔案. 以下為詳細資訊 :';
$l['err_upgrade_restore_success'] = '錯誤的升級安裝包但是成功還原了過去的備份檔案. 以下為詳細資訊 :';
$l['err_upgrade'] = '錯誤的升級安裝包. 以下為詳細資訊 :';
$l['err_upgrade_req'] = '這個安裝包與更新需求沒有見識. 因此其無法被自動安裝. 以下為詳細資訊 :';
$l['err_could_not_posix'] = '無法切換用戶因此中斷程序...';
$l['err_cant_upgrade_for_this_server'] = "這個預先的升級檢測無法進行因為以下的連結無法被存取.\n 有可能是 allow_url_fopen() 於您的伺服器關閉或 CURL 錯誤的存取連結. 因此自動安裝無法被進行.";
$l['err_auto_upgrade_req_fail'] = '這個安裝包與更新需求沒有見識. 因此其無法被自動安裝. 以下為詳細資訊 :';
$l['help'] = '歡迎來到 Softaculous 終端機介面.
可用命令 : \n\t
--install\t 來安裝語法.
--upgrade\t 來升級已安裝的語法.
--import\t 來匯入已存在的語法進入 Softaculous.\n
需要支援請聯絡我們於 : support@softaculous.com
';
$l['err_no_script'] = "沒有提供語法名稱.\n";
$l['err_no_url'] = "請提供URL在安裝中製作出來的, 例如 --url=DOMAIN.COM/testdir\n";
$l['err_no_such_script'] = "糟了! 找不到語法的名稱 - &soft-1;\n";
$l['import_success'] = "成功匯入!\n";
$l['import_error'] = "以下的錯誤發生了 : \n";
$l['err_no_path'] = "請提供路徑. 例如 --path=/home/USER/public_html/test\n";
$l['err_no_import'] = "匯入工具不支援本語法\n";
$l['err_user_not_allowed'] = "匯入工具不可由 Enduser 利用\n";
$l['err_cant_load_docroots'] = "無法載入路徑至域名\n";
$l['ins_available_for'] = " 個安裝包可於下列目錄中使用 :\n";// 保留起始的空格
$l['ins_found_at_path'] = " 安裝包在指定的路徑中找到.\n 執行前一個指令並加上 --r 來匯入.\n";
$l['imp_ins_exists'] = "安裝包已經成功匯入至 - &soft-1;\n;";
$l['upgraded_manually'] = "The installation is already up to date. Updated ".APP." records\n";
$l['upgraded_successfully'] = "更新成功 \n";
$l['shellexec_disabled'] = 'shell_exec() 是關閉的';
$l['list_scripts'] = "\n以下語法可能無法於您的伺服器運行.\n因為其沒有見識到最小的語法需求";
$l['req_pass'] = "所有語法需要檢查通過.";
$l['err_cannot_autobackup'] = "自動安裝無法於這個管理介面運行.\n";
$l['err_no_auto_backup'] = "管理員已經取消自動更新.\n";

$l['soft_license'] = APP." 通行證";
$l['lic_type'] = "類型";
$l['num_users'] = "用戶數量";
$l['licexpires'] = "到期日";
$l['primary_ip'] = "通行證 IP";
$l['free'] = "免費";
$l['premium'] = "付費";
$l['expired'] = "過期";
$l['never'] = "永遠沒有";

$l['err_update_record'] = 'An error occured while updating version in '.APP.' records
';
$l['suc_update_record'] = 'Updated '.APP.' records successfully from &soft-1; to &soft-2; for &soft-3;
';
$l['show_real_version'] = 'Real Version : &soft-1; -- Version as per '.APP.' records : &soft-2; 
';
$l['no_outdated_ins'] = 'No Outdated instllation(s) found.
';
$l['edit_detail_options'] = '
--show_outdated_version=1 For showing the outdated installation(s) of the specified user
--user=USER_NAME whose records you want to update
--sid=SCRIPT_ID Script ID of the script you want to update the records for
--update_records=1 This will update '.APP.' records
';
$l['only_au_ins_note'] = 'Note : Only installations that can be auto upgraded will be listed here
';
$l['err_restore_cli'] = "Restore via CLI can not be performed for this control panel.\n";
$l['err_no_backupfile'] = "The backup file does not exist.\n";
$l['err_wrongins'] = "The backup file is not for this installation.\n";
$l['err_no_file'] = "Backup filename not specified.\n";
$l['err_no_backupinfo'] = "Backup info file not found.\n";
$l['err_no_backup_file'] = "Backup file not found.\n";

$l['no_panels'] = 'Removing scripts from CLI is possible only on cPanel or Webuzo.
';
$l['no_input'] = 'Please provide required input.
';
$l['invalid_par'] = 'Invalid parameter ';
$l['no_scripts'] = 'Scripts were not loaded.';
$l['remove'] = 'Removed';
$l['heading'] = 'Script Name 	 Script Installation ID 
';
$l['no_installation'] = 'No installations were found on your server.
';
$l['err_remove'] = 'Remove installation Failed.
';
$l['note_by_automated_backup'] = 'Backup created by automated backups';
$l['note_by_automated_upgrade'] = 'Backup created by automated upgrade';
$l['sql_db'] = 'Could not find database file';
$l['err_query'] = 'Could not execute the query';
$l['sqlfile_err'] = 'Could not create sql file';
$l['fetching_remote_files'] = 'Importing files from remote server';
$l['import_complete'] = 'Import Completed';
$l['import_script'] = 'Importing';
$l['export_db'] = 'Exporting database from remote server';
$l['fetch_datadir'] = 'Fetching data directory from remote server';
$l['import_db'] = 'Propagating the database';
$l['insid_missing'] = 'Please provide installation ID';
$l['insid_incorrect'] = 'Installation ID is incorrect';
$l['read_file'] = 'Could not read the import data file';
$l['no_remote_import'] = 'Remote Import is not supported for this script';
$l['wrong_ftp_path'] = 'Specified FTP path is incorrect';

//Webuzo Backups and Restore
$l['not_permitted'] = 'This User is not permitted to run the script';
$l['no_option'] = 'Nothing to do';
$l['no_backup_dir'] = 'Backup Directory not present';
$l['backup_filename'] = 'Backup file name';
$l['create_tar'] = 'Creating the tar file';
$l['tar_error'] = 'There were some errors while creating the tar file';
$l['tar_created'] = 'tar file created';
$l['create_db'] = 'Creating DB backup';
$l['no_dbback_func'] = 'Backup function is not available';
$l['db_back_fail'] = 'Utility could not backup the DB';
$l['compress_sql'] = 'Compressing the SQL file';
$l['db_backup_filename'] = 'DB backup file name is';
$l['no_mysql'] = 'MySQL is not installed';
$l['skip_db_files'] = 'Skipping Database backup process';
$l['tar_extract'] = 'Extracting the tar file';
$l['err_tar_xtrct'] = 'There were some errors while extracting the tar file';
$l['db_restore_file'] = 'Restoring DB file';
$l['db_restore_err'] = 'Utility could not restore the DB';
$l['db_restore_done'] = 'Database successfully restored';
$l['skip_db_restore'] = 'Skipping Database restore process';
$l['no_exim'] = 'Exim is not installed';
$l['skip_exim_files'] = 'Skipping Exim files';
$l['no_bind'] = 'BIND is not installed';
$l['skip_bind_files'] = 'Skipping BIND files';
$l['no_backup_type'] = 'Backup type not specified';
$l['wrng_backup_type'] = 'Incorrect backup type specified';
$l['wrng_back_file'] = 'File specified is not a Backup file';
$l['strt_backup'] = 'Starting the Backup process';
$l['success_backup'] = 'Backup process completed';
$l['error_backup'] = 'Backup process completed with errors';
$l['exit_cli'] = 'Exiting CLI';
$l['no_file2restore'] = 'No File specified to restore';
$l['no_db_backup'] = 'DB backup file not found';
$l['chck_backup_exits'] = 'Checking if Backup file exists';
$l['strt_restore'] = 'Starting the Restore process';
$l['success_restore'] = 'Restore process completed';
$l['error_restore'] = 'Restore process completed with errors';
$l['send_email'] = 'Sending email to user';
$l['only_for_premium'] = 'This feature is only available to Premium license users';
$l['err_no_owner'] = "Owner is not provided.\n";
$l['err_invalid_file'] = "Invalid file name\n";
$l['acl_saved'] = 'Setting saved successfully';
$l['acl_errr'] = 'Could not save the setting';
$l['err_unzipping'] = 'Error occured while unzipping the files';
$l['invalid_import_file'] = 'Please provide a valid file to import settings';
$l['no_access_url'] = 'Could not access the source settings file';
$l['no_write_tmpfile'] = 'Could not write the temporary file';
$l['file_not_exist'] = 'File does not exist, please provide correct path';
$l['no_root_user'] = 'Only root user can import the admin settings';
$l['successfully_imported'] = 'Settings imported successfully';
$l['no_ins_found'] = 'No installation(s) found';

$l['cli_ftp_error'] = 'Error connectng to FTP server';
$l['err_fetch_file'] = 'Could not access the file uploaded to the domain';
$l['err_fetch_path'] = 'Could not fetch path from the data received';
$l['cli_no_remote_import'] = 'CLI Remote Import is not supported for this script';
$l['cli_wrong_ftp_path'] = 'FTP path is incorrect';
$l['cli_ftp_error-1'] = 'Unable to resolve Domain Name';
$l['cli_ftp_error-2'] = 'Unable to login with specified FTP details';
$l['cli_ftp_error-3'] = 'FTP Path does not exist';
$l['invalid_backup_location'] = 'Backup location submitted does not exist';
$l['invalid_access_token'] = 'Invalid Access Token. Please Re-Authorize '.APP.' Dropbox APP from the Edit Backup location page in '.APP.' enduser panel';
$l['insufficient_space'] = 'Your Dropbox account is full. Please free some space and attempt the backup after sometime';

$l['gdrive_err_init'] = 'There were some errors while initiating the backup on Google Drive!!';
$l['gdrive_err_end'] = 'There were some errors while committing backup to your Google Drive account!!';
$l['pass_decrpyt_fail'] = 'Password decryption failed.';
$l['ssh_conn_fail'] = 'SSH connection to the remote server failed';
$l['delete_temp_file'] = 'Deleting temporary backup file';
$l['ssh_conn_success'] = 'SSH connection successful';
$l['bckp_dir_notfound'] = 'Backup directory not found, creating';
$l['fail_bckp_dir'] = 'Failed to create remote backup directory';
$l['ssh_upload_start'] = 'Starting SSH upload of the backup file';
$l['ssh_upload_fail'] = 'SSH upload failed';
$l['ssh_upload_success'] = 'SSH upload successful';
$l['ssh_conn_close'] = 'Closing SSH connection';
$l['ftp_conn_fail'] = 'FTP connection failed';
$l['ftp_conn_success'] = 'FTP connection successful';
$l['ftp_change_dir'] = 'Changing to the FTP directory';
$l['ftp_upload_fail'] = 'FTP upload failed';
$l['ftp_upload_success'] = 'FTP upload successful';
$l['ftp_conn_close'] = 'Closing FTP connection';
$l['empty_server_list'] = 'Unable to get backup server list';
$l['ftp_upload_start'] = 'Starting FTP upload of the backup file';
$l['dwnlod_restore_fail'] = 'Unable to download the file for Restore';
$l['remote_del_fail'] = 'Unable to Delete the file on Remote Server';
$l['remote_del_success'] = 'Remote Backup file Deleted Successfully';
$l['no_server_id_filename'] = 'Backup Server ID and Filename not provided !';
$l['cd_backup_location_fail'] = 'Unable to change directory to the specified location';

$l['err_no_openssl'] = "Openssl extension is required to encrypt the password(s) with new encryption algorithm\n";
$l['err_no_mcrypt'] = "Mcrypt extension is required to decrypt the password(s) encrypted with old encryption algorithm\n";
$l['add_backup_file'] = 'Backup file added'; 
$l['err_include_extend'] = "\nFailed to include functions for Plugins/Theme Update";
$l['err_access_ins'] = "\nError accessing the installation &soft-1;\n Skipping plugins/theme upgrade for this installation";
$l['note_partial_backup'] = 'Partial Backup taken during Plugins/Theme Upgrade';
$l['err_partial_backup_fail'] = 'Partial Backup was not successful so aborting the plugins/theme upgrade process. Following are the details :';
$l['err_upgrade_extras'] = "\nThere were some errors while upgrading Theme and Plugins";
$l['upgraded_successfully_extras'] = "\nPlugins/Theme were upgraded successfully for : ";
$l['err_upgrade_restore_failed_extras'] = 'Failed to upgrade the plugins/theme AND also failed to restore from the backup created. Following are the details :';
$l['err_upgrade_restore_success_extras'] = 'Failed to upgrade the plugins/theme BUT successfully restored from the backup created. Following are the details :';
$l['err_cannot_autoupgrade_extras'] = "Auto upgrade for plugins/theme can not be performed for this control panel.\n";
$l['err_failed_attempt'] = "The Auto Upgrade Plugins/Theme failed last time so cannot attempt upgrade.\n";
$l['cant_create_dir'] = "Can\'t create directory ";
// import_webuzo.php
$l['no_server_ip'] = 'Server IP not provided.';
$l['no_server_pass'] = 'Server root password not provided.';
$l['no_server_port'] = 'Server port not provided';
$l['no_server_mysql_pass'] = 'Server mysql password not provided.';
$l['no_migrate_type'] = 'Migrate Type not provided.';
$l['invalid_migrate_type'] = 'Invalid Migrate Type.';
$l['migrate_finish'] = 'Finished Migrating Webuzo.';
$l['migrate_conf_finish'] = 'Finished migrating webuzo configurations.';
$l['migrate_user_account_finish'] = 'Finished migrating user accounts.';
$l['migrate_databases_finish'] = 'Finished migrating databases.';
$l['migrate_emails_finish'] = 'Finished migrating email accounts and email data.';
$l['migrate_ftp_finish'] = 'Finished migrating FTP.';
$l['mysql_not_same'] = 'MySQL version on both Webuzo server are not same.';
$l['webuzo_user_not_same'] = 'Webuzo Username on both Webuzo server are not same.';
$l['sshpass_installed'] = 'sshpass is already installed on your server.';
$l['remote_command_exec_fail'] = 'Execution of remote command failed.';
$l['migrate_command_failed'] = 'Some error occured while executing the command';
$l['conn_fail'] = 'Connection to Webuzo server failed.';

$l['cloning'] = 'Cloning ';
$l['staging'] = 'Staging ';
$l['pushtolive'] = 'Pushtolive ';
$l['cloning_complete'] = 'Cloning Completed.';
$l['staging_complete'] = 'Staging Completed.';
$l['pushtolive_complete'] = 'Pushing to Live Completed.';
$l['unzipping_files'] = 'Copying files and folders';
$l['prog_backingup'] = 'Backing Up ';
$l['panel_not_support'] = 'This panel does not support this utility.';

$l['checking_data'] = 'Checking the submitted data';
$l['prog_restoring'] = 'Restoring '; // Dont remove the trailing space
$l['res_dir'] = 'Restoring the Directory';
$l['res_db'] = 'Restoring the Database';
$l['res_datadir'] = 'Restoring the Data Directory';
$l['prog_restore_complete'] = 'Restore Completed.';
$l['read_archive'] = 'Reading the archive';
$l['pushtolive_backup_note'] = 'Backup created before pushing the site to live';

$l['license_refreshed'] = 'Your license has been refreshed !'; 
$l['updated_license'] = 'Updated license details are as follows :';
