<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editdomain_lang.php
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

$l['no_domain'] = '沒有指定的域名名稱';
$l['alreay_exists'] = '指定的域名已經存在於您的帳號中.';
$l['no_ftp_user'] = '沒有指定的 FTP 帳號';
$l['no_ftp_pass'] = '沒有指定的 FTP 密碼';
$l['no_ftp_path'] = '沒有指定的 FTP 路徑';
$l['no_data_dir'] = '沒有指定的資料資料夾';
$l['wrong_ftp_path'] = '指定的 FTP 路徑是錯誤的或是沒有給予指定的域名.';
$l['no_id'] = '找不到ID !';
$l['no_backup_path'] = '沒有指定的備份路徑';
$l['ftp_error-1'] = '無法解析域名';
$l['ftp_error-2'] = '無法使用提供的 FTP 資料來登入檔案系統';
$l['ftp_error-3'] = '指定的 FTP 路徑不存在';

//Theme Strings
$l['<title>'] = '編輯域名';
$l['edit_domain'] = '編輯域名';
$l['domain'] = '域名名稱';
$l['domain_exp'] = '輸入一個有效的域名名稱 (不包含 http://) 例如 mydomain.com';
$l['ftp_user'] = '帳號';
$l['ftp_user_exp'] = 'FTP 的登入名稱';
$l['ftp_pass'] = '密碼';
$l['ftp_pass_exp'] = 'FTP 的登入密碼';
$l['ftp_path'] = '路徑';
$l['ftp_path_exp'] = '相對的用戶資料夾路徑並可以由網路存取. 例如 /public_html';
$l['backup_path'] = '備份路徑';
$l['backup_path_exp'] = '相對的用戶資料夾首頁. e.g. /backups';
$l['data_dir'] = '資料資料夾';
$l['data_dir_exp'] = '完整的資料資料夾路徑. 例如 /home/USER/datadir<br/>一些指令例如 Elgg, Moodle, 等需要一個無法由網路存取的路徑.<br/>這會有使用的目的.';
$l['ins_email_exp'] = '寄送一封電子郵件包含安裝資料當您安裝了一個指令S';
$l['submit_edit'] = '儲存 & 上傳';
$l['settings_saved'] = '您的域名已經成功儲存';
$l['show_all_dom'] = '顯示所有域名';

$l['no_port'] = 'No Port was specified';
$l['no_pub_allowed'] = 'Public Key is not required while authenticating using password';
$l['no_public_key'] = 'No path to public key was found';
$l['no_private_key'] = 'No path to private key was found';
$l['err_sftp_only'] = 'Only SFTP allows authentication through keys';
$l['no_pub_pri'] = 'Public or Private Key not found';
$l['no_domain_exist'] = 'The domain does not exist';
$l['not_allowed'] = 'You are not allowed to edit this domain';
$l['port'] = 'Port';
$l['port_exp'] = 'Enter the port to connect';
$l['protocol'] = 'Protocol';
$l['protocol_exp'] = 'Select the protocol by which Softaculous will communicate';
$l['auth_password'] = 'Authentication method';
$l['auth_password_exp'] = 'Select the authentication method';
$l['private_key'] = 'Private Key';
$l['private_key_exp'] = 'Paste the private key here';
$l['passphrase'] = 'Passphrase';
$l['passphrase_exp'] = 'Passphrase for encrypted private key(optional)';
$l['sftp_path'] = 'Web Directory';
$l['sftp_path_exp'] = 'Absolute path to web directory of user. e.g. /home/USERNAME/public_html';
$l['sbackup_path_exp'] = 'Absolute path to Backup Directory e.g /home/USERNAME/backups';
$l['server_host'] = 'Server Host (Optional)';
$l['server_host_exp'] = '<b>IF</b> your domain name and server host are not the same enter the server host e.g. ftp.mydomain.com';
$l['ftp_error'] = 'Could not connect to the FTP server';
$l['err_upload_remote'] = 'Unable to upload file to the FTP path';
$l['err_fetch_file'] = 'Unable to access the file uploaded to the domain';
$l['err_fetch_path'] = 'Unable to fetch path from the data received';
$l['invalid_domain_id'] = 'Invalid Domain ID';
$l['ftp_pass_opt'] = 'Leave blank if you do not want to update the password.';
$l['auth_method_pass'] = 'Password';
$l['auth_method_key'] = 'SSH Key';
$l['no_pass_pri'] = 'Please provide either a password or private key';
$l['err_reconnect'] = 'Could not reconnect to database';