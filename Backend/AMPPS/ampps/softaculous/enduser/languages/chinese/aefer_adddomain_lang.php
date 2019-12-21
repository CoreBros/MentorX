<?php

//////////////////////////////////////////////////////////////
//===========================================================
// adddomain_lang.php
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
$l['alreay_exists'] = '輸入的域名已經存在於您的帳號中.';
$l['no_ftp_user'] = '沒有指定的FTP用戶名稱';
$l['no_ftp_pass'] = '沒有指定的FTP用戶密碼';
$l['no_ftp_path'] = '沒有指定的FTP路徑';
$l['no_backup_path'] = '沒有指定的備份路徑';
$l['no_data_dir'] = '沒有指定的資料資料夾';
$l['wrong_ftp_path'] = '輸入的FTP路徑不是正確的並沒有指向給予的域名.';
$l['ftp_error-1'] = '無法分解域名名稱';
$l['ftp_error-2'] = '無法登入提供的FTP資料';
$l['ftp_error-3'] = '指定的FTP路徑不存在';


//Theme Strings
$l['<title>'] = '新增一個域名';
$l['add_domain'] = '新增域名';
$l['domain'] = '域名名稱';
$l['domain_exp'] = '輸入一個有效的域名名稱(但不要加上 http://) 例如: mydomain.com';
$l['ftp_user'] = '用戶';
$l['ftp_user_exp'] = 'FTP帳號的用戶名稱';
$l['ftp_pass'] = '密碼';
$l['ftp_pass_exp'] = 'FTP帳號的密碼';
$l['ftp_path'] = '路徑';
$l['ftp_path_exp'] = '輸入一個可以存取的路徑. 例如: /public_html';
$l['backup_path'] = '備份路徑';
$l['backup_path_exp'] = '輸入一個提供備份並可以存取的路徑. 路如: /backups';
$l['data_dir'] = '資料資料夾';
$l['data_dir_exp'] = '資料資料夾的完整路徑 例如: /home/USER/datadir<br/>有些語法像是 Elgg, Moodle, 等需要一個不是網頁所控管的資料夾.<br/>這將會經常使用.';
$l['ins_email_exp'] = '寄送一個電子郵件包含安裝資訊當您安裝一個新的軟體或語法';
$l['submit_add'] = '測試並儲存域名';
$l['settings_saved'] = '您的域名成功儲存';
$l['show_all_dom'] = '檢視所有域名';
$l['protocol'] = '協議書';
$l['protocol_exp'] = '從您可以連結的域名選擇協議書';
$l['port'] = '埠';
$l['port_exp'] = '輸入一個埠讓 Softaculous 可以遠端連結域名';
$l['ftp_error'] = 'Could not connect to the FTP server';
$l['err_upload_remote'] = 'Unable to upload file to the FTP path';
$l['err_fetch_file'] = 'Unable to access the file uploaded to the domain';
$l['err_fetch_path'] = 'Unable to fetch path from the data received';

$l['no_port'] = 'No Port was specified';
$l['no_pub_allowed'] = 'Public Key is not required while authenticating using password';
$l['no_public_key'] = 'No path to public key was found';
$l['no_private_key'] = 'No path to private key was found';
$l['err_sftp_only'] = 'Only SFTP allows authentication through keys';
$l['no_pub_pri'] = 'Public or Private Key not found';
$l['no_protocol'] = 'Invalid Protocol';
$l['not_allowed'] = 'You are not allowed to add a domain';
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
$l['auth_method_pass'] = 'Password'; 
$l['auth_method_key'] = 'SSH Key'; 
$l['no_pass_pri'] = 'Please provide either a password or private key'; 
$l['err_reconnect'] = 'Could not reconnect to database';