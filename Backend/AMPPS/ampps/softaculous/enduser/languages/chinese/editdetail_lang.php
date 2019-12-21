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

$l['no_ins'] = '沒有指定的安裝包';
$l['wrong_ins_title'] = '錯誤的安裝包 ID';
$l['wrong_ins'] = '您所送出的安裝包 ID 不存在';
$l['cant_remove_dir'] = '資料夾無法從家目錄移除. 請取消選擇 <b>移除資料夾</b> 選項來繼續並去除移除資料夾的動作.';
$l['no_dir'] = '安裝包的資料夾並不存在 !';
$l['no_datadir'] = '資料資料夾並不存在 !';
$l['no_wwwdir'] = '網頁資料架並不存在 !';
$l['wrong_url'] = '連結與資料夾的名稱不符合';
$l['wrong_wwwurl'] = '網頁連結與網頁資料夾名稱不符合';
$l['err_mysql_user'] = 'MySQL 使用者名稱或密碼或資料庫域名是錯誤的或是網際網路無法為失去連線的.';
$l['err_mysql_db'] = 'MySQL 資料庫名稱是錯誤的導致資料庫無法被選擇.';
$l['mail_path'] = '路徑';
$l['mail_url'] = '連結';
$l['mail_db'] = 'MySQL 資料庫';
$l['mail_dbuser'] = 'MySQL 資料庫使用者';
$l['mail_dbhost'] = 'MySQL 資料庫域名';
$l['mail_dbpass'] = 'MySQL 資料庫密碼';
$l['mail_time'] = '安裝時間';
$l['mail_editdetail_time'] = '修改時間';
$l['mail_subject'] = '&soft-1; 的詳細修改資料';
$l['mail_cron_command'] = 'CRON 工作';
$l['mail_datadir'] = '資料資料夾';
$l['mail_wwwdir'] = '網頁資料夾';
$l['mail_wwwurl'] = '網頁資料夾連結';

//Theme Strings
$l['<title>'] = APP.' - 編輯詳細資訊';
$l['info'] = '資訊';
$l['ins_softname'] = '語法';
$l['ins_num'] = '安裝號碼';
$l['ins_ver'] = '版本';
$l['ins_time'] = '安裝時間';
$l['ins_path'] = '路徑';
$l['ins_url'] = '連結';
$l['ins_admin_url'] = '管理員連結';
$l['ins_db'] = '資料庫名稱';
$l['ins_dbuser'] = '資料庫使用者';
$l['ins_dbpass'] = '資料庫密碼';
$l['ins_dbhost'] = '資料庫域名';
$l['ins_datadir'] = '資料資料夾';
$l['ins_wwwdir'] = '網頁資料夾';
$l['ins_wwwurl'] = '網頁資料夾連結';
$l['ins_cron_command'] = 'Cron 指令';
$l['details_edited'] = '安裝包資訊已經成功修改';
$l['version_edited'] = '版本已經更新於記錄.';
$l['return'] = '回到總攬';

$l['edit_ins'] = '編輯安裝包詳細資訊';
$l['edit_dir'] = '資料夾';
$l['edit_datadir'] = '資料資料夾';
$l['edit_db'] = '資料庫名稱';
$l['edit_dbuser'] = '資料庫使用者';
$l['edit_dbpass'] = '資料庫密碼';
$l['edit_dbhost'] = '資料庫域名';
$l['edit_url'] = '連結';
$l['editins'] = '編輯安裝包詳細資訊';
$l['mail_editdetail_ins'] = '安裝包 &soft-1; 已經被修改. 以下為安裝包的修改資訊 : ';
$l['edit_wwwdir'] = '網頁資料夾';
$l['edit_wwwurl'] = '網頁資料夾連結';
$l['disable_notify_update'] = '取消更新通知';
$l['exp_disable_notify_update'] = '如果選擇這個選項將不會寄送任何有關於可用更新的電子郵件有關於這個安裝包.';
$l['alreadyupdated'] = '嗯 ... 看來實際的安裝包版本以及 <b>&soft-1;</b> 不是 <b>&soft-2;</b>. <br />點選此處來更新 '.APP.' 紀錄.';
$l['edit_acc_detail'] = '編輯管理員帳號詳細資訊';
$l['eu_auto_upgrade'] = '自動更新';
$l['exp_eu_auto_upgrade'] = 'Select the automatic upgrade preference for this installation when a new version is available';
$l['auto_backup'] = '自動安裝';
$l['exp_auto_backup'] = APP.' 將會自動安裝透過 CRON 所設定的時間檢查';
$l['auto_backup_rotation'] = '巡迴備份';
$l['exp_auto_backup_rotation'] = '如果啟用備份巡迴限制,  '.APP.' 將會刪除最老舊的備份檔案並創建一個新的. 備份將會利用您的空間來選擇一個備份巡迴的限制於您的伺服器';
$l['no_backup'] = '不要備份';
$l['daily'] = '每日一次';
$l['weekly'] = '每周一次';
$l['monthly'] = '每月一次';
$l['unlimited'] = '無限制';

$l['ins_details'] = 'Installation Details';
$l['auto_upgrade_plugins'] = 'Auto Upgrade &soft-1; Plugins';
$l['exp_auto_upgrade_plugins'] = 'If checked, all the active &soft-1; plugins installed for this installation will be automatically upgraded to the latest version when your script installation is upgraded.';
$l['auto_upgrade_themes'] = 'Auto Upgrade &soft-1; Themes';
$l['exp_auto_upgrade_themes'] = 'If checked, the active &soft-1; theme for this installation will be automatically upgraded to the latest version when your script installation is upgraded.';
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