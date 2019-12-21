<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editdetail_lang.php
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

$l['no_ins'] = 'インスタレーションは送信されませんでした。';
$l['wrong_ins_title'] = 'インスタレーションIDが間違っていいます。';
$l['wrong_ins'] = '送信されたインスタレーションIDは存在しません。';
$l['cant_remove_dir'] = 'ホーム・ディテクトリのためディレクトリは削除できませんでした。ディレクトリを削除せずに続けるには、<b>ディレクトリを削除する</b>ののチェックを外して下さい。 ';
$l['no_dir'] = 'そのインスタレーション・ディレクトリは存在しません。';
$l['no_datadir'] = 'そのデータ・ディレクトリは存在しません。';
$l['no_wwwdir'] = 'そのウェブ・ディレクトリは存在しません。';
$l['wrong_url'] = 'URLとディレクトリ名が一致しません。';
$l['wrong_wwwurl'] = 'ウェブURLとウェブ・ディレクトリ名が一致しません。';
$l['err_mysql_user'] = ' MySQLユーザー名、パスワードもしくはデータベースホストが間違っているため接続できません。';
$l['err_mysql_db'] = 'MySQLデータベース名が正確ではないため、データベースを選択できません。 ';
$l['mail_path'] = 'パス';
$l['mail_url'] = 'URL';
$l['mail_db'] = 'MySQLデータベース';
$l['mail_dbuser'] = 'MySQLデータベースユーザー';
$l['mail_dbhost'] = 'MySQLデータベースホスト';
$l['mail_dbpass'] = 'MySQLデータベースパスワード';
$l['mail_time'] = 'インストール時間';
$l['mail_editdetail_time'] = '修正時間';
$l['mail_subject'] = '&soft-1;の修正されたインスタレーション詳細';
$l['mail_cron_command'] = 'CRONのジョブ';
$l['mail_datadir'] = 'データ・ディレクトリ';
$l['mail_wwwdir'] = 'ウェブ・ディレクトリ';
$l['mail_wwwurl'] = 'ウェブ・ディレクトリのURL';

//Theme Strings
$l['<title>'] = APP.' – 内容の編集';
$l['ins_details'] = 'Installation Details';
$l['info'] = 'インフォメーション';
$l['ins_softname'] = 'ソフトウェア';
$l['ins_num'] = 'インストール番号';
$l['ins_ver'] = 'バージョン';
$l['ins_time'] = 'インストール時間';
$l['ins_path'] = 'パス';
$l['ins_url'] = 'URL';
$l['ins_admin_url'] = '管理者用URL';
$l['ins_db'] = 'データベース名';
$l['ins_dbuser'] = 'データベースユーザー';
$l['ins_dbpass'] = 'データベースパスワード';
$l['ins_dbhost'] = 'データベースホスト';
$l['ins_datadir'] = 'データ・ディレクトリ';
$l['ins_wwwdir'] = 'ウェブ・ディレクトリ';
$l['ins_wwwurl'] = 'ウェブ・ディレクトリのURL';
$l['ins_cron_command'] = 'Cron コマンド';
$l['details_edited'] = 'インストール内容は正常に編集されました。';
$l['version_edited'] = '記録上、そのバージョンは既にアップデートされています。';
$l['return'] = '概要へ戻る';

$l['edit_ins'] = 'インストール内容の編集';
$l['edit_dir'] = 'ディレクトリ';
$l['edit_datadir'] = 'データ・ディレクトリ';
$l['edit_db'] = 'データベース名';
$l['edit_dbuser'] = 'データベースユーザー';
$l['edit_dbpass'] = 'データベースパスワード';
$l['edit_dbhost'] = 'データベースホスト';
$l['edit_url'] = 'URL';
$l['editins'] = 'インストール内容を編集する';
$l['mail_editdetail_ins'] = 'インストール内容は修正されました。修正内容は次の通りです。: ';
$l['edit_wwwdir'] = 'ウェブ・ディレクトリ';
$l['edit_wwwurl'] = 'ウェブ・ディレクトリのURL';
$l['disable_notify_update'] = 'アップデート通知を無効にする';
$l['exp_disable_notify_update'] = 'チェックした場合、このインスタレーションのアップデート通知メールを受信しません。';
$l['alreadyupdated'] = '実際のインスタレーションバージョンは<b>&soft-2;</b>ではなく<b>&soft-1;</b>のようです。'.APP.'記録をアップデートするにはここをクリックして下さい。';
$l['edit_acc_detail'] = '管理者アカウントの内容を編集する';
$l['eu_auto_upgrade'] = '本体の自動アップグレード';
$l['exp_eu_auto_upgrade'] = 'Select the automatic upgrade preference for this installation when a new version is available';
$l['auto_upgrade_plugins'] = '&soft-1; のプラグインの自動アップグレード';
$l['exp_auto_upgrade_plugins'] = 'チェックした場合、新しいバージョンが利用可能となった際に、自動で最新バージョンにアップグレードします。';
$l['auto_upgrade_themes'] = '&soft-1; のテーマの自動アップグレード';
$l['exp_auto_upgrade_themes'] = 'チェックした場合、新しいバージョンが利用可能となった際に、自動で最新バージョンにアップグレードします。';
$l['auto_backup'] = '自動バックアップ';
$l['exp_auto_backup'] = APP.'は、選択された頻度でCRONを介して自動でバックアップします。';
$l['auto_backup_rotation'] = 'バックアップローテーション';
$l['exp_auto_backup_rotation'] = 'バックアップローテーションが上限に達した場合、'.APP.'はこのインスタレーションで最も古いバックアップを消去し、新規でバックアップを作成します。バックアップによりあなたのサーバーの空き容量が消費されるため、サーバーの空き容量に合わせてローテーションを選択して下さい。';
$l['no_backup'] = 'バックアップしない';
$l['daily'] = '１回/日';
$l['weekly'] = '１回/週';
$l['monthly'] = '１回/月';
$l['unlimited'] = '無制限';
$l['auto_backup_not_allowed'] = 'The auto backup frequency you chose is invalid';



$l['no_edit'] = 'The EDIT.XML file could not be found! Please report this to the server administrator.';
$l['no_functions'] = 'The EDIT FUNCTIONS file could not be found! Please report this to the server administrator.';
$l['no_field'] = 'The field <b>&soft-1;</b> is required and must be filled out.';
$l['err_auto_backup_limit'] = 'The auto backup rotation cannot be more than <b>&soft-1;</b>';
$l['select_files'] = 'Select additional files/folders';
$l['select_files_exp'] = 'Please select the additonal files/folders associated with this installation. <br />This list will be used for operations like Clone, Backup and Removal of this installation';
$l['invalid_files_in_post_list'] = 'There were some invalid files/folders selected';
$l['select_files_list'] = 'Select additional files/folders from the following list';

$l['select_files_backup'] = 'Use above selected files/folders for Backup';
$l['select_files_backup_exp'] = 'If selected only the files/folders related to this installation will be backed up. <br />By default backup will include all the files/folders under this path';
$l['no'] = 'No (Backup all files and folders inside installation directory excluding subdomains)';
$l['yes'] = 'Yes (Backup standard application files/folders along with above selected files/folders)';
$l['check_all_edit'] = 'Check All';

$l['choose_theme'] = 'Install Theme';
$l['clear_theme'] = 'Clear selection';
$l['installing_theme'] = 'Installing theme';
$l['cant_download_theme'] = 'Could not download the theme files';
$l['no_theme_package'] = 'The theme installation package could not be found!';
$l['unzipping_theme_files'] = 'Copying themes files and folders';
$l['use_this_theme'] = 'Select this';
$l['demo'] = 'Demo';
$l['refresh'] = 'Refresh';
$l['purchase'] = 'Buy';
$l['close'] = 'Close';
$l['free'] = 'Free';
$l['select'] = 'Select';
$l['theme_is_optional'] = '<b>Note</b>: This is optional. Select only if you want to change your current theme.';
$l['your_purchased'] = 'Purchased ';//trailing space is required
$l['your_purchased_times'] = ' times(s)';
$l['err_theme_not_bought'] = 'You have not purchased the theme, so could not install it !';
$l['err_theme_reached_limit'] = 'Please buy this theme and try to install it again. You reached the limit of installing this theme.';
$l['payment_heading'] = 'Purchase Theme';
$l['payment_redirect'] = 'You will be redirected to pay ';//trailing space is required
$l['date_added'] = 'Date Added';
$l['downloaded'] = 'Downloaded';
$l['edit_dbpass_exp'] = 'New Database Password. <br/>Leave blank if you do not want to update the password';
$l['select_tables'] = 'Select additional database tables';
$l['select_tables_exp'] = 'Selected tables will be included in the database backup';

$l['backup_loc'] = 'Backup Location';
$l['exp_backup_loc'] = 'Choose the backup location to be used while backing up this installation';
$l['default'] = 'Default';
$l['invalid_backup_location'] = 'Backup location submitted does not exist';
$l['local_folder'] = 'Local Folder';

$l['cron_min'] = 'Min';
$l['cron_hour'] = 'Hour';
$l['cron_day'] = 'Day';
$l['cron_month'] = 'Month';
$l['cron_weekday'] = 'Weekday';

$l['no_cron_min'] = 'No Cron minute was specified';
$l['no_cron_hour'] = 'No Cron hour was specified';
$l['no_cron_day'] = 'No Cron day was specified';
$l['no_cron_month'] = 'No Cron month was specified';
$l['no_cron_weekday'] = 'No Cron weekday was specified';

$l['custom_autobackup'] = 'Custom';
$l['custom'] = 'Custom Cron time';
$l['custom_autobackup_cron'] = 'Automated Backups Cron time';
$l['custom_autobackup_cron_exp'] = 'Please specify the CRON timings for automated backups';

//Errors for autobcakup cron settings
$l['wrong_autobackup_cron_min'] = 'Automated Backup cron minute is wrong. Valid values are 0-59 or a *';
$l['wrong_autobackup_cron_hour'] = 'Automated Backup cron hour is wrong. Valid values are 0-23 or a *';
$l['wrong_autobackup_cron_day'] = 'Automated Backup cron day is wrong. Valid values are 1-31 or a *';
$l['wrong_autobackup_cron_month'] = 'Automated Backup cron month is wrong. Valid values are 1-12 or a *';
$l['wrong_autobackup_cron_weekday'] = 'Automated Backup cron weekday is wrong. Valid values are 0-7 or a *';

$l['done'] = 'Done';
$l['error'] = 'Error';
$l['plugins_upgrade_now'] = 'Upgrade Plugin(s) Now';
$l['theme_upgrade_now'] = 'Upgrade Theme Now';
$l['plugins_upgrade_success'] = 'Plugin(s) Upgraded Successfully!!';
$l['theme_upgrade_success'] = 'Theme Upgraded Successfully!!';
$l['fetch_db_details'] = 'Allow Softaculous to fetch the database details ?';

$l['edit_notes'] = 'The following are some important notes. It is highly recommended that you read them ';
$l['domain_not_in_list'] = 'The URL posted is not in your domain(s) list'; 

$l['dont_auto_upgrade'] = 'Do not Auto Upgrade'; 
$l['minor_auto_upgrade'] = 'Upgrade to <b>Minor</b> versions only'; 
$l['major_auto_upgrade'] = 'Upgrade to any latest version available (<b>Major</b> as well as <b>Minor</b>)'; 
$l['auto_upgrade_major'] = '(Major and Minor)'; 
$l['auto_upgrade_minor'] = '(Minor)';

$l['wpc_return'] = 'Return to Installations';