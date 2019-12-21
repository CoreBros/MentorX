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

$l['no_domain'] = 'ドメイン名が特定されていません。';
$l['alreay_exists'] = '送信されたドメインは既に存在しています。';
$l['no_ftp_user'] = ' FTPユーザーが特定されていません。';
$l['no_ftp_pass'] = ' FTPパスワードが特定されていません。';
$l['no_ftp_path'] = ' FTPパスが特定されていません。';
$l['no_data_dir'] = 'データ・ディレクトリが特定されていません。';
$l['wrong_ftp_path'] = '送信されたFTPパスは正確ではありません。また、与えられたドメインを提示していません。';
$l['no_id'] = 'IDを発見できませんでした。';
$l['no_backup_path'] = 'バックアップのパスが特定されていません。';
$l['ftp_error-1'] = 'ドメイン名を決定することができませんでした。';
$l['ftp_error-2'] = '指定されたFTPではログインすることができませんでした。';
$l['ftp_error-3'] = '指定されたFTPのパスは存在しません。';
$l['no_port'] = 'ポートが指定されていません。';
$l['no_pub_allowed'] = '使用中パスワードの認証中は、公開キーは必要ありません。';
$l['no_public_key'] = '公開キーへのパスは発見されませんでした。';
$l['no_private_key'] = 'プライベート・キーへのパスは発見されませんでした。';
$l['err_sftp_only'] = ' SFTPに限り、キーによる認証が可能です。';
$l['no_pub_pri'] = '公開またはプライベート・キーが発見されませんでした。';
$l['no_domain_exist'] = 'The domain does not exist';
$l['not_allowed'] = 'You are not allowed to edit this domain';
$l['ftp_error'] = 'Could not connect to the FTP server';
$l['err_upload_remote'] = 'Unable to upload file to the FTP path';
$l['err_fetch_file'] = 'Unable to access the file uploaded to the domain';
$l['err_fetch_path'] = 'Unable to fetch path from the data received';
$l['invalid_domain_id'] = 'Invalid Domain ID';

//Theme Strings
$l['<title>'] = 'ドメインの編集';
$l['edit_domain'] = 'ドメインの編集';
$l['domain'] = 'ドメイン名';
$l['domain_exp'] = '有効なドメイン名を入力して下さい（http://は省略して下さい。例：mydomain.com）。';
$l['ftp_user'] = 'ユーザー';
$l['ftp_user_exp'] = 'あなたのFTPアカウントのユーザー名です。';
$l['ftp_pass'] = 'パスワード';
$l['ftp_pass_exp'] = 'あなたのFTPアカウントのパスワードです。';
$l['ftp_path'] = 'パス';
$l['ftp_path_exp'] = 'ユーザーのアクセス可能なウェブ・ディレクトリに関連するパスです（例：/public_html）。';
$l['backup_path'] = 'バックアップ・パス';
$l['backup_path_exp'] = 'ユーザーのホームディレクトリからのパスに関連するパスです（例：/backups）。';
$l['data_dir'] = 'データ・ディレクトリ';
$l['data_dir_exp'] = 'データ・ディレクトリへのフルパスです（例：/home/USER/datadir）。<br/> ElggやMoodleなどの一部のスクリプトは、ウェブアクセスが不可のフォルダである必要があります。<br/> これらは特定の目的に使用されます。';
$l['ins_email_exp'] = 'ソフトウェアを新規インストールした際に、セットアップ内容をＥメールで送信します。';
$l['submit_edit'] = '保存とアップデート';
$l['settings_saved'] = 'あなたのドメインは正常に保存されました。';
$l['show_all_dom'] = '全てのドメインを表示する。';
$l['port'] = 'ポート';
$l['port_exp'] = '接続するポートを入力する。';
$l['protocol'] = 'プロトコル';
$l['protocol_exp'] = 'Softaculousが通信するためのプロトコルを選択する。';
$l['auth_password'] = '認証方法';
$l['auth_password_exp'] = '認証方法を選択する';
$l['private_key'] = '秘密鍵';
$l['private_key_exp'] = 'ここに秘密鍵を貼り付けてください';
$l['passphrase'] = 'パスフレーズ';
$l['passphrase_exp'] = '暗号化したプライベート・キーのためのパスフレーズです（任意）。';
$l['sftp_path'] = 'ウェブ・ディレクトリ';
$l['sftp_path_exp'] = 'ユーザーのウェブ・ディレクトリへの絶対パスです（例：/home/USERNAME/public_html）。';
$l['sbackup_path_exp'] = 'バックアップ・ディレクトリへの絶対パスです（例：/home/USERNAME/backups）。';
$l['server_host'] = 'Server Host (Optional)';
$l['server_host_exp'] = '<b>IF</b> your domain name and server host are not the same enter the server host e.g. ftp.mydomain.com';
$l['ftp_pass_opt'] = 'Leave blank if you do not want to update the password.';
$l['auth_method_pass'] = 'Password';
$l['auth_method_key'] = 'SSH Key';
$l['no_pass_pri'] = 'Please provide either a password or private key';
$l['err_reconnect'] = 'Could not reconnect to database';