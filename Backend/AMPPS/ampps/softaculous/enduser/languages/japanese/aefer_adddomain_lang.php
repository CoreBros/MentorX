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

$l['no_domain'] = 'ドメイン名が特定されていません。';
$l['alreay_exists'] = '送信されたドメインは既にアカウントに存在しています。';
$l['no_ftp_user'] = 'FTPのユーザーが特定されていません。';
$l['no_ftp_pass'] = 'FTPのパスワードが特定されていません。';
$l['no_ftp_path'] = 'FTPのパスが特定されていません。';
$l['no_backup_path'] = 'バックアップのパスが特定されていません。';
$l['no_data_dir'] = 'データディレクトリが特定されていません。';
$l['wrong_ftp_path'] = '送信されたFTPのパスが不正確です。ドメインを指定していません。';
$l['ftp_error-1'] = 'ドメイン名を決定できませんでした。';
$l['ftp_error-2'] = '特定されたFTPではログインできませんでした。';
$l['ftp_error-3'] = '特定されたFTPのパスは存在しません。';
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
$l['<title>'] = 'ドメインの追加';
$l['add_domain'] = 'ドメインを追加して下さい。';
$l['domain'] = 'ドメイン名';
$l['domain_exp'] = '有効なドメイン名（「http://」は除いて下さい）を入力してください。（例：「mydomain.com」）';
$l['ftp_user'] = 'ユーザー';
$l['ftp_user_exp'] = 'あなたのFTPアカウントのユーザー名です。';
$l['ftp_pass'] = 'パスワード';
$l['ftp_pass_exp'] = 'あなたのFTPアカウントのパスワードです。';
$l['ftp_path'] = 'パス';
$l['ftp_path_exp'] = 'ユーザーが直接アクセスできるウェブへの相対パスです（例：e.g. /public_html）。';
$l['backup_path'] = 'バックアップのパス';
$l['backup_path_exp'] = 'ユーザーのホームディレクトリからの相対パスです。（例：/backups';$l['data_dir'] = 'Data Directory）。';
$l['data_dir_exp'] = 'データディレクトリへのフルパスです（例：/home/USER/datadir）。<br/> ElggやMoodleなどの一部のスクリプトは、ウェブアクセスが不可のフォルダである必要があります。<br/> これらは特定の目的に使用されます。';
$l['ins_email_exp'] = 'ソフトウェアを新規インストールした際に、セットアップ内容をＥメールで送信します。';
$l['submit_add'] = 'ドメインのテストと保存';
$l['settings_saved'] = 'ドメインは正常に保存されました。';
$l['show_all_dom'] = 'すべてのドメインを閲覧する';
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

