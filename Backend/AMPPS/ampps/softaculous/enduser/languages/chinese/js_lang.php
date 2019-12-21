<?php

//////////////////////////////////////////////////////////////
//===========================================================
// js_lang.php
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

$l['no_info_file'] = '找不到 INFO.XML 檔案! 請回報這個至您的伺服器管理員.';
$l['incompatible'] = '這個軟體需要更高版本的 '.APP.'! 請回報這個至您的伺服器管理員.';
$l['no_install'] = '找不到 INSTALL.XML 檔案! 請回報這個至您的伺服器管理員.';
$l['no_functions'] = '找不到 INSTALL FUNCTIONS 檔案! 請回報這個至您的伺服器管理員.';
$l['no_softdomain'] = '您沒有選擇要安裝這個軟體的域名.';
$l['wrong_softdomain'] = '您選擇的域名路徑無法被找到.';
$l['no_space'] = '您沒有足夠的空間來安裝這個軟體!';
$l['no_field'] = '表單 <b>&soft-1;</b> 是必填欄位.';
$l['no_package'] = '安裝包無法被找到!';
$l['no_decompress'] = '解壓縮檔案遇到錯誤.';
$l['mail_new_ins'] = '&soft-1; 的新安裝包已經下載完成. 安裝包的詳細資訊已經顯示於下方:';
$l['mail_path'] = '路徑';
$l['mail_url'] = '連結';
$l['mail_time'] = '安裝時間';
$l['mail_subject'] = '新的 &soft-1; 安裝包';
$l['some_files_exist'] = '安裝程序無法執行因為以下的檔案已經存在於目的資料夾 : ';
$l['delete_files'] = '請刪除這些檔案或選擇其他資料夾.';
$l['checking_data'] = '正在檢查輸出的資料';
$l['unzipping_files'] = '正在複製檔案及資料夾';
$l['unzipping_datadir'] = '正在解壓縮資料檔案';
$l['prop_db'] = '正在建立資料庫';
$l['finishing_process'] = '即將完成安裝程序';
$l['wait_note'] = '<b>注意:</b> 這將會使用到 3-4 分鐘. 請勿離開這個頁面直到處理程序達到 100%';
$l['softdirectory_invalid'] = '您輸入的資料夾是無效的.';
$l['err_domain'] = 'No Domain';
$l['err_domain_admin'] = 'This User does not have any Domain. Please contact Administrator.';
$l['no_sel_inst'] = '沒有選擇的安裝包';
$l['del_insid'] = '您確定您要刪除選擇的安裝包嗎 ?';
$l['ins_emailto'] = '電郵安裝詳細資訊至';
$l['no_https'] = '無法找到一個信任的安全連線簽章';
$l['err_dbprefix'] = '資料表前綴是錯誤的. 正確的值為 a-z or A-Z or 0-9 or _';

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
$l['software_support'] = '軟體支援';
$l['support_link'] = '造訪支援網站';
$l['support_note'] = '注意: Softaculous 不提供任何軟體的支援服務.';
$l['setup'] = '軟體安裝';
$l['choose_domain'] = '選擇域名';
$l['choose_domain_exp'] = '請選擇要安裝軟體的域名.';
$l['in_directory'] = '在資料夾裡';
$l['in_directory_exp'] = '您所輸入的資料夾 <b>不應存在</b> 您的域名. 例如要安裝在 http://mydomain/dir/ 只需輸入 <b>dir</b>.';
$l['softsubmit'] = '安裝';
$l['congrats'] = '恭喜, 軟體已經成功安裝';
$l['succesful'] = '已經被成功安裝在';
$l['enjoy'] = '我們希望安裝過程是簡單的.';
$l['install_notes'] = '以下為一些重要的訊息. 我們強烈建議您閱讀它們 ';
$l['please_note'] = '<b>注意</b>: '.APP.' 只是一個自動安裝器, 不需負責任何其他個別的安裝程序. 請瀏覽該語法供應商的網站獲取支援!';
$l['regards'] = '誠摯的';
$l['softinstaller'] = APP.' 自動安裝器';
$l['return'] = '回到總覽';
$l['current_ins'] = '目前安裝包';
$l['link'] = '連結';
$l['ins_time'] = '安裝時間';
$l['version'] = '版本';
$l['upd_to'] = '升級到版本';
$l['remove'] = '移除';
$l['no_info'] = '沒有資訊';
$l['ratesoft'] = '評價語法';
$l['reviews'] = '評價';
$l['reviewsoft'] = '撰寫評價';
$l['readreviews'] = '閱讀評價';
$l['reviews_exp'] = '觀看其他用戶撰寫的評價及';
$l['ins_type'] = '安裝形式';
$l['ins_type_exp'] = '<b>原始安裝包</b> - 安裝包於其網頁是有效的. <br /> <b>只是程式庫檔案</b> - 只是 Javascript 程式庫檔案.';
$l['ori_pack'] = '原始安裝包';
$l['just_lib'] = '只是程式庫檔案';
$l['overwrite_exist'] = '<b>或</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">選取選擇欄位來覆蓋所有的檔案</span></b>';
$l['overwrite'] = '覆蓋檔案';
$l['choose_protocol'] = '選擇條約';
$l['choose_protocol_exp'] = '如果您的網站有 SSL, 那麼請選擇 HTTPS 條約.';
$l['clone'] = '複製';
$l['options'] = '選項';
$l['downloading'] = '下載包裝';
$l['installing'] = '安裝語法';
$l['go'] = '執行';
$l['rem_inst_id'] = '正在移除安裝包 - ';
$l['inst_remvd'] = '選擇的安裝包已經刪除. 頁面正在重新整理中 !';
$l['release_date'] = '釋出日期';
$l['adv_option'] = '進階選項';
$l['disable_notify_update'] = '取消升級提醒';
$l['exp_disable_notify_update'] = '如果選擇了這個選項將不會傳送此語法的更新訊息至您的電子信箱.';
$l['prog_installing'] = '安裝中 '; // Dont remove trailing space
$l['prog_install_complete'] = '安裝完成.';
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

$l['auto_backup_not_allowed'] = 'The auto backup frequency you chose is invalid';
$l['invalid_script'] = 'Invalid Script ID';
$l['not_js_script'] = 'This script is not JavaScript';
$l['no_domain_found'] = 'No domain found. Please add a domain to install the script';

$l['install_tweet_sub'] = 'Tell your friends about your new site';
$l['err_auto_backup_limit'] = 'The auto backup rotation cannot be more than <b>&soft-1;</b>';
$l['select_domain'] = 'Select Domain';
$l['with_selected'] = 'With Selected';
$l['not_in_free'] = '<b>&soft-1;</b> cannot be installed in the Free version of '.APP.'!';
$l['notify_admin'] = 'Please notify your Server Admin to purchase the premium version of '.APP.'!';
$l['related_scripts'] = 'Related Scripts';
$l['backup'] = 'Backup';
$l['install_now'] = '现在安装';
$l['my_apps'] = '我的应用';
$l['editdetail'] = 'Edit Details';

$l['bad'] = 'Bad';
$l['good'] = 'Good';
$l['strong'] = 'Strong';
$l['short'] = 'Short';
$l['strength_indicator'] = 'Strength Indicator';

$l['backup_location'] = 'Backup Location';
$l['backup_location_exp'] = 'Choose the backup location to be used while backing up this installation';
$l['default'] = 'Default';
$l['invalid_backup_location'] = 'Backup location submitted does not exist';
$l['local_folder'] = 'Local Folder';

$l['no_cron_min'] = 'No Cron minute was specified';
$l['no_cron_hour'] = 'No Cron hour was specified';
$l['no_cron_day'] = 'No Cron day was specified';
$l['no_cron_month'] = 'No Cron month was specified';
$l['no_cron_weekday'] = 'No Cron weekday was specified';

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
$l['ampps_notify_premium'] = 'This feature is available in the premium version of AMPPS. Please purchase <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';

$l['choose_url'] = 'Choose Installation URL';
$l['choose_url_exp'] = 'Please choose the URL to install the software';

$l['error_max_ins_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Installations allowed per script';
$l['notify_ver'] = 'Notify '.$globals['sn'].' of a new Version';
$l['notifyversion'] = 'Thank you for informing about the new version. We will look into it as soon as possible';