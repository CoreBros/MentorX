<?php

//////////////////////////////////////////////////////////////
//===========================================================
// software_lang.php
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

$l['no_info_file'] = '找不到 INFO.XML! 請回報這個錯誤給網頁管理員.';
$l['incompatible'] = '這個語法需要更高版本的 '.APP.'! 請回報這個錯誤給網頁管理員.';
$l['no_install'] = '找不到 INSTALL.XML! 請回報這個錯誤給伺服器管理員.';
$l['no_functions'] = 'INSTALL FUNCTIONS 檔案無法被找到! 請回報這個錯誤給伺服器管理員.';
$l['no_remove_functions'] = 'REMOVE FUNCTIONS 檔案無法被找到! 請回報這個錯誤給伺服器管理員.';
$l['no_softdomain'] = '您還沒選擇域名來安裝這個語法.';
$l['wrong_softdomain'] = '您選擇的域名路徑無法被找到.';
$l['softdirectory_exists'] = '您所輸入的資料夾名稱已經存在! 請選擇其他的資料夾名稱.';
$l['no_space'] = '您沒有足夠的空間來安裝這個語法!';
$l['no_softdb'] = '資料庫無法存取.';
$l['database_exists'] = '資料庫名稱已經存在. 請選擇其他的資料庫名稱.';
$l['databaseuser_exists'] = '資料庫使用者已經存在. 請選擇其他資料庫使用者名稱.';
$l['db_name_long'] = '資料庫名稱不能超過 7 個文字. 請嘗試縮短資料庫名稱.';
$l['db_limit_crossed'] = '您已經達到最多資料庫的創建數, 因此資料庫無法創建.';
$l['no_field'] = '字段 <b>&soft-1;</b> 為必填字段並且需要被填寫.';
$l['error_adddb'] = '資料庫無法被創建';
$l['error_adduser'] = '有個錯誤當要新增使用者至新的資料庫';
$l['no_package'] = '找不到安裝包!';
$l['no_decompress'] = '有個錯誤當要解壓縮安裝包檔案.';
$l['mail_new_ins'] = '一個新的安裝包 of &soft-1; 已經完成. 以下為安裝包的詳細資訊:';
$l['mail_path'] = '路徑';
$l['mail_url'] = '連結';
$l['mail_admin_url'] = '管理員連結';
$l['mail_admin'] = '管理員名稱';
$l['mail_pass'] = '管理員密碼';
$l['mail_db'] = 'MySQL 資料庫';
$l['mail_dbuser'] = 'MySQL 資料庫使用者';
$l['mail_dbhost'] = 'MySQL 資料庫域名';
$l['mail_dbpass'] = 'MySQL 資料庫密碼';
$l['mail_time'] = '安裝時間';
$l['mail_subject'] = '新的安裝包 &soft-1;';
$l['no_cron_min'] = '沒有指定的 Cron 分鐘數';
$l['no_cron_hour'] = '沒有指定的 Cron 小時數';
$l['no_cron_day'] = '沒有指定的 Cron 天數';
$l['no_cron_month'] = '沒有指定的 Cron 月份數';
$l['no_cron_weekday'] = '沒有指定的 Cron 周數';
$l['wrong_cron_min'] = 'Cron 分鐘數是錯誤的. 合法的數據為 0-59 或是 <b>*</b>';
$l['wrong_cron_hour'] = 'Cron hour 是錯誤的. 合法的數據為 0-23 或是 <b>*</b>';
$l['wrong_cron_day'] = 'Cron day 是錯誤的. 合法的數據為 1-31 或是 <b>*</b>';
$l['wrong_cron_month'] = 'Cron month 是錯誤的. 合法的數據為 1-12 或是 <b>*</b>';
$l['wrong_cron_weekday'] = 'Cron weekday 是錯誤的. 合法的數據為 0-7 或是 <b>*</b>';
$l['mail_cron'] = 'Cron 工作';
$l['no_datadir'] = '沒有指定的資料資料夾';
$l['datadir_exists'] = '您所輸入的資料夾名稱已經存在! 請選擇其他的資料夾名稱.';
$l['no_decompress_data'] = '有些錯誤當要解壓縮資料檔案.';
$l['mail_datadir'] = '資料資料夾';
$l['some_files_exist'] = '安裝無法被執行因為有以下的檔案已經存在於指定資料夾 : ';
$l['delete_files'] = '請刪除這些檔案或選擇其他的資料夾.';
$l['overwrite_exist'] = '<b>或</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">選擇選項來覆蓋所有檔案並繼續 </span></b>';
$l['checking_data'] = '正在檢查送出的資料';
$l['unzipping_files'] = '正在複製檔案與資料夾';
$l['unzipping_datadir'] = '正在解壓縮資料檔案';
$l['prop_db'] = '正在傳送指定資料庫';
$l['finishing_process'] = '正在完成安裝程序';
$l['wait_note'] = '<b>注意:</b> 這將會使用到 3-4 分鐘. 請勿離開這個頁面直到處理程序達到 100%';
$l['no_hostname'] = '請輸入您的資料庫域名';
$l['no_dbusername'] = '請輸入您的資料庫使用者名稱';
$l['no_dbuserpass'] = '請輸入您的資料庫使用者密碼';
$l['softdirectory_invalid'] = '您所輸入的資料夾名稱是錯誤的.';
$l['softdatadir_invalid'] = '您所輸入的資料資料夾是錯誤的.';
$l['err_domain'] = '沒有域名';
$l['err_domain_admin'] = '這個使用者並沒有任何域名. 請聯絡管理員.';
$l['err_pass_strength'] = '密碼強度一定要大於 ';
$l['no_https'] = '一個信任的 SSL連線 無法找到';
$l['err_dbprefix'] = '資料表前綴是錯誤的. 正確的值為 a-z or A-Z or 0-9 or _';
$l['no_php_install'] = 'PHP 還沒安裝. 要安裝請點選 <a href="'.$globals['index'].'act=apps&app=1">這裡</a>';
$l['no_mysql_install'] = 'MySQL 還沒安裝. 要安裝請點選<a href="'.$globals['index'].'act=apps&app=16">這裡</a>';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['install'] = '安裝';
$l['overview'] = '總攬';
$l['features'] = '功能';
$l['demo'] = '範例';
$l['ratings'] = '評分';
$l['import'] = '匯入';
$l['software_ver'] = '版本';
$l['space_req'] = '空間需求';
$l['available_space'] = '剩餘空間';
$l['req_space'] = '需求空間';
$l['mb'] = 'MB';
$l['software_support'] = '語法支援';
$l['support_link'] = '訪問支援網頁';
$l['support_note'] = '注意: Softaculous 不具備任何支援的責任.';
$l['setup'] = '語法安裝';
$l['choose_domain'] = '選擇域名';
$l['choose_domain_exp'] = '請選擇域名來安裝語法.';
$l['choose_url'] = 'Choose Installation URL';
$l['choose_url_exp'] = 'Please choose the URL to install the software';
$l['in_directory'] = '安裝資料夾';
$l['in_directory_exp'] = '選擇一個要安裝資料夾於您的域名內且 <b>需要是不存在的</b>. 例如 要安裝於 http://mydomain/dir/ 只需要輸入 <b>dir</b>. 如果只要安裝在家目錄例如 http://mydomain/ 則保留為空.';
$l['database_name'] = '資料庫名稱';
$l['database_name_exp'] = '輸入一個語法所需要的資料庫名稱';
$l['softcopy_note'] = '<b>注意</b>: 這個語法需要使用他們自己的安裝工具. 請瀏覽其網頁並複製檔案到要安裝的資料夾位置.';
$l['softsubmit'] = '安裝';
$l['congrats'] = '恭喜, 語法已經成功安裝';
$l['succesful'] = '已經成功安裝於';
$l['admin_url'] = '管理員後台連結';
$l['setup_continue'] = '不過, 安裝程序還是需要由軟體本身完成, 請訪問以下連結';
$l['enjoy'] = '我們希望安裝程序是簡單的.';
$l['install_notes'] = '以下是一些重要的注意事項. 我們非常建議您閱讀他們 ';
$l['please_note'] = '<b>注意</b>: '.APP.' 只是一個自動安裝器, 不需負責任何其他個別的安裝程序. 請瀏覽該語法供應商的網站獲取支援!';
$l['regards'] = '誠摯';
$l['softinstaller'] = APP.' 自動安裝器';
$l['return'] = '回到總覽';
$l['current_ins'] = '目前的安裝包';
$l['link'] = '連結';
$l['ins_time'] = '安裝時間';
$l['version'] = '版本';
$l['upd_to'] = '升級到最新版本';
$l['remove'] = '移除';
$l['no_info'] = '沒有資訊';
$l['randpass'] = '創造一個隨機密碼';
$l['ratesoft'] = '評分這個語法';
$l['reviews'] = '評價';
$l['reviewsoft'] = '撰寫一個評價';
$l['readreviews'] = '閱讀評價';
$l['reviews_exp'] = '閱讀其他使用者評價以及';
$l['cron_job'] = 'CRON 工作';
$l['cron_job_exp'] = '這個語法需要一個 CRON 來工作.請指定一個 CRON 定時任務. 如果您不知道其功用, 隨他而去吧!';
$l['cron_min'] = '分';
$l['cron_hour'] = '小時';
$l['cron_day'] = '日';
$l['cron_month'] = '月';
$l['cron_weekday'] = '周';
$l['datadir'] = '資料資料夾';
$l['datadir_exp'] = '這個語法需要儲存其資訊的一個可透過網頁存取的資料夾. 這將會創建於您的家目錄. 例如 如果您指定了了資料夾名稱 <b>datadir</b> , 將會創建以下資料夾 - /home/username/<b>datadir</b>';
$l['db_alpha_num'] = '只有英文字母以及數字才可以成為資料庫的名稱.';
$l['overwrite'] = '覆寫文件';
$l['ins_emailto'] = '寄送一封具有安裝資訊的電子郵件給';
$l['choose_protocol'] = '選擇協議';
$l['choose_protocol_exp'] = '如果您的網頁具有 SSL, 那們請選擇 HTTPS 安全協議.';
$l['clone'] = '複製';
$l['backup'] = '備份';
$l['options'] = '選項';
$l['admin'] = '管理員';
$l['notify_ver'] = '告知 '.$globals['sn'].' 一個新的版本';
$l['notifyversion'] = '感謝您告知一個新版本. 我們將會盡可能快速的去調查他';
$l['del_insid'] = '您確定您想要移除選擇的安裝包嗎? 這個動作將無法復原. \n沒有進一步的項目將會被詢問.';
$l['rem_inst_id'] = '正在移除安裝包 - ';
$l['no_sel_inst'] = '沒有選擇的安裝包要被移除.';
$l['inst_remvd'] = '選擇的安裝包已經刪除. 頁面正在重新整理中 !';
$l['remove'] = '移除';
$l['go'] = '執行';
$l['screenshots'] = '截圖';
$l['downloading'] = '正在下載安裝包';
$l['installing'] = '正在安裝語法';
$l['editdetail'] = '編輯詳細資訊';
$l['publish'] = '發布到網際網路';
$l['hostname'] = '資料庫域名名稱';
$l['hostname_exp'] = 'MySQL 域名 (通常為 <b>localhost</b>)';
$l['dbusername'] = '資料庫使用者名稱';
$l['dbusername_exp'] = 'MySQL 資料庫使用者名稱';
$l['dbuserpass'] = '資料庫密碼';
$l['dbuserpass_exp'] = 'MySQL 資料庫使用者密碼';
$l['database_name_exp_aefer'] = '請輸入語法會用到的資料庫名稱';
$l['sel_version'] = '選擇版本';
$l['choose_version_exp'] = '請選擇要安裝的版本.';
$l['choose_version'] = '選擇您要的版本來安裝';
$l['select'] = '選擇';
$l['release_date'] = '釋放日期';
$l['adv_option'] = '進階選項';
$l['disable_notify_update'] = '取消升級提醒';
$l['exp_disable_notify_update'] = '如果選擇了這個選項將不會傳送此語法的更新訊息至您的電子信箱.';
$l['prog_installing'] = '安裝中 '; // Dont remove trailing space
$l['prog_install_complete'] = '安裝完成.';
$l['eu_auto_upgrade'] = '自動更新';
$l['exp_eu_auto_upgrade'] = 'Select the automatic upgrade preference for this installation when a new version is available';
$l['auto_upgrade_enabled'] = '啟用自動升級';
$l['bad'] = '糟糕';
$l['good'] = '不錯';
$l['strong'] = '強';
$l['short'] = '過短';
$l['strength_indicator'] = '密碼強度偵測器';
$l['auto_backup'] = '自動備份';
$l['exp_auto_backup'] = APP.' 將會自動備份使用 CRON 工作的時段';
$l['auto_backup_rotation'] = '巡迴備份';
$l['exp_auto_backup_rotation'] = '如果啟用備份巡迴限制,  '.APP.' 將會刪除最老舊的備份檔案並創建一個新的. 備份將會利用您的空間來選擇一個備份巡迴的限制於您的伺服器';
$l['no_backup'] = '不要備份';
$l['daily'] = '每日一次';
$l['weekly'] = '每周一次';
$l['monthly'] = '每月一次';
$l['unlimited'] = '無限制';
$l['changelog'] = '修改紀錄';
$l['act_upgrade'] = '近期更新';
$l['act_clone'] = '近期複製';
$l['act_backup'] = '近期備份';
$l['act_install'] = '近期安裝';
$l['act_edit'] = '近期編輯';
$l['act_import'] = '近期匯入';
$l['act_restore'] = '近期復原';
$l['ampps_download'] = '您可以開發 <b>&soft-1;</b> 於您的 <b>電腦</b> 使用免費開發人員工具 Softaculous AMPPS. 點選 <a href="http://www.ampps.com/download?give=latest" target="_blank"><b>此處</b></a> 來下載 <a href="http://www.ampps.com/download?give=latest" target="_blank"><img src="https://images.softaculous.com/ampps.gif" height="25" /></a>';

$l['no_domain_verify'] = 'Could not access your domain. Please make sure your domain is pointing to this server and there is no .htaccess file restricing access to your domain';
$l['auto_backup_not_allowed'] = 'The auto backup frequency you chose is invalid';
$l['invalid_script'] = 'Invalid Script ID';
$l['no_domain_found'] = 'No domain found. Please add a domain to install the script';
$l['not_php_script'] = 'This script is not in PHP';
$l['auto_upgrade_plugins'] = 'Auto Upgrade &soft-1; Plugins';
$l['exp_auto_upgrade_plugins'] = 'If checked, all the active &soft-1; plugins installed for this installation will be automatically upgraded to the latest version when your script installation is upgraded.';
$l['auto_upgrade_themes'] = 'Auto Upgrade &soft-1; Themes';
$l['exp_auto_upgrade_themes'] = 'If checked, the active &soft-1; theme for this installation will be automatically upgraded to the latest version when your script installation is upgraded.';
$l['install_tweet_sub'] = 'Tell your friends about your new site';
$l['choose_theme'] = 'Select Theme';
$l['clear_theme'] = 'Clear selection';
$l['installing_theme'] = 'Installing theme';
$l['cant_download_theme'] = 'Could not download the theme files';
$l['no_theme_package'] = 'The theme installation package could not be found!';
$l['unzipping_theme_files'] = 'Copying themes files and folders';
$l['use_this_theme'] = 'Select this';
$l['err_auto_backup_limit'] = 'The auto backup rotation cannot be more than <b>&soft-1;</b>';
$l['select_domain'] = 'Select Domain';
$l['refresh'] = 'Refresh';
$l['purchase'] = 'Buy';
$l['your_purchased'] = 'Purchased ';
$l['your_purchased_times'] = ' times(s)';
$l['err_theme_not_bought'] = 'You have not purchased the theme, so could not install it !';
$l['err_theme_reached_limit'] = 'Please buy this theme and try to install it again. You reached the limit of installing this theme.';
$l['payment_heading'] = 'Purchase Theme';
$l['payment_redirect'] = 'You will be redirected to pay ';
$l['close'] = 'Close';
$l['free'] = 'Free';
$l['theme_is_optional'] = '<b>Note</b>: This is optional. If not selected, the default theme will be installed';
$l['with_selected'] = 'With Selected';
$l['not_in_free'] = '<b>&soft-1;</b> cannot be installed in the Free version of '.APP.'!';
$l['notify_admin'] = 'Please notify your Server Admin to purchase the premium version of '.APP.'!';
$l['related_scripts'] = 'Related Scripts';

$l['date_added'] = 'Date Added';
$l['downloaded'] = 'Downloaded';

$l['soft_ins_exists'] = 'An installation already exists at &soft-1; as per our records. To re-install the application please uninstall the existing installation!';
$l['install_now'] = '现在安装';
$l['my_apps'] = '我的应用';

$l['backup_location'] = 'Backup Location';
$l['backup_location_exp'] = 'Choose the backup location to be used while backing up this installation';
$l['default'] = 'Default';
$l['invalid_backup_location'] = 'Backup location submitted does not exist';
$l['local_folder'] = 'Local Folder';

$l['custom_autobackup'] = 'Custom';
$l['custom_autobackup_cron'] = 'Automated Backups Cron time';
$l['custom_autobackup_cron_exp'] = 'Please specify the CRON timings for automated backups';

//Errors for autobcakup cron settings
$l['wrong_autobackup_cron_min'] = 'Automated Backup cron minute is wrong. Valid values are 0-59 or a *';
$l['wrong_autobackup_cron_hour'] = 'Automated Backup cron hour is wrong. Valid values are 0-23 or a *';
$l['wrong_autobackup_cron_day'] = 'Automated Backup cron day is wrong. Valid values are 1-31 or a *';
$l['wrong_autobackup_cron_month'] = 'Automated Backup cron month is wrong. Valid values are 1-12 or a *';
$l['wrong_autobackup_cron_weekday'] = 'Automated Backup cron weekday is wrong. Valid values are 0-7 or a *';

$l['quick_install'] = 'Quick Install';
$l['custom_install'] = 'Custom Install';

$l['outdated_script'] = '<b>&soft-1;</b> has not been updated for more than two years and may no longer be maintained or supported by the script vendor';

$l['pushtolive'] = 'Push to Live';
$l['staging'] = 'Create Staging';

$l['dont_auto_upgrade'] = 'Do not Auto Upgrade'; 
$l['minor_auto_upgrade'] = 'Upgrade to <b>Minor</b> versions only'; 
$l['major_auto_upgrade'] = 'Upgrade to any latest version available (<b>Major</b> as well as <b>Minor</b>)'; 
$l['auto_upgrade_major'] = '(Major and Minor)'; 
$l['auto_upgrade_minor'] = '(Minor)'; 

$l['err_fetch_key'] = 'Could not fetch the PFX API key at the moment';
$l['ampps_notify_premium'] = 'This feature is available in the premium version of AMPPS. Please purchase <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';

$l['view_items'] = 'List Items in Set';
$l['ok'] = 'OK';
$l['plugins'] = 'Plugins';
$l['themes'] = 'Themes';
$l['empty_set'] = 'There are currently no items in the set!!';

$l['error_max_ins_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Installations allowed per script';
$l['error_max_backup_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Backups allowed per script';
$l['error_max_clone_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Clone allowed per script';
$l['error_max_staging_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Staging allowed per script';

$l['remove_complete'] = 'Remove Completely';
$l['remove_info'] = 'Remove from '.APP;
$l['manage_sets'] = '管理插件/主题集';
$l['manage_plugin_sets'] = 'Manage Plugin Sets';
$l['manage_theme_sets'] = 'Manage Theme Sets';