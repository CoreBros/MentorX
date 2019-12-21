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

$l['no_domain'] = 'Не е конкретизирано име на домейн';
$l['alreay_exists'] = 'Представеният домейн вече съществува в профила ви.';
$l['no_ftp_user'] = 'Няма конкретизиран FTP потребител';
$l['no_ftp_pass'] = 'Няма конкретизирана FTP парола';
$l['no_ftp_path'] = 'Няма конкретизирана FTP директория';
$l['wrong_ftp_path'] = 'FTP представената директория е неправилна и не сочи към даден домейн.';
$l['no_backup_path'] = 'No Backup PATH was specified';
$l['no_data_dir'] = 'No Data Directory was specified';
$l['ftp_error-1'] = 'Could not Resolve Domain Name';
$l['ftp_error-2'] = 'Could not login with specified FTP details';
$l['ftp_error-3'] = 'Specified FTP Path does not exist';
$l['no_port'] = 'No Port was specified';
$l['no_pub_allowed'] = 'Public Key is not required while authenticating using password';
$l['no_public_key'] = 'No path to public key was found';
$l['no_private_key'] = 'No path to private key was found';
$l['err_sftp_only'] = 'Only SFTP allows authentication through keys';
$l['no_pub_pri'] = 'Public or Private Key not found';
$l['no_protocol'] = 'Invalid Protocol';
$l['not_allowed'] = 'You are not allowed to add a domain';
$l['ftp_error'] = 'Could not connect to the FTP server';
$l['err_upload_remote'] = 'Unable to upload file to the FTP path';
$l['err_fetch_file'] = 'Unable to access the file uploaded to the domain';
$l['err_fetch_path'] = 'Unable to fetch path from the data received';

//Theme Strings
$l['<title>'] = 'Добави домейн';
$l['add_domain'] = 'Добави домейн';
$l['domain'] = 'Име на домейн';
$l['domain_exp'] = 'Въведете валидно име на домейн(без http://) примерно mydomain.com';
$l['ftp_user'] = 'потребител';
$l['ftp_user_exp'] = 'Потребителското име на FTP акаунта';
$l['ftp_pass'] = 'парола';
$l['ftp_pass_exp'] = 'Паролата на FTP акаунта';
$l['ftp_path'] = 'директория';
$l['ftp_path_exp'] = 'FTP директорията към вашия домейн, примерно /public_html';
$l['backup_path'] = 'Backup Path';
$l['backup_path_exp'] = 'The Backup Path for your Backups made by Softaculous e.g. /backups';
$l['data_dir'] = 'Data Directory';
$l['data_dir_exp'] = 'Full Path to Data Directory e.g. /home/USER/datadir<br/>Some scripts like Elgg, Moodle, etc need a non web accessible folder.<br/>This will be used for that purpose.';
$l['ins_email_exp'] = 'Изпрати имейл съдържащ подробности за настройки, когато инсталирате нов софтуер';
$l['submit_add'] = 'Тествайте и Запазване на домейн';
$l['settings_saved'] = 'Вашият домейн е запазен успешно';
$l['show_all_dom'] = 'Покажи всички домейни';
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
$l['auth_method_pass'] = 'Password'; 
$l['auth_method_key'] = 'SSH Key'; 
$l['no_pass_pri'] = 'Please provide either a password or private key'; 
$l['err_reconnect'] = 'Could not reconnect to database';