<?php

//////////////////////////////////////////////////////////////
//===========================================================
// upgrade_lang.php
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

$l['no_info_file'] = 'INFO.XML 檔案無法被找到! 請聯絡您的伺服器管理員.';
$l['incompatible'] = '這個語法需要更高版本的 '.APP.'! 請回報給您的伺服器管理員.';
$l['no_upgrade'] = 'UPGRADE.XML 檔案無法被找到! 請回報給您的伺服器管理員.';
$l['no_functions'] = 'UPGRADE FUNCTIONS 檔案無法被找到! 請回報給您的伺服器管理員.';
$l['no_field'] = '欄位 <b>&soft-1;</b> 是必填的.';
$l['no_package'] = '升級安裝包無法被找到!';
$l['no_decompress'] = '解壓縮檔案時出現了一些錯誤.';
$l['checking_data'] = '正在檢查送出的資料';
$l['unzipping_files'] = '正在複製文件與資料夾';
$l['unzipping_datadir'] = '正在解壓縮資料檔案';
$l['prop_db'] = '正在更新資料庫';
$l['finishing_process'] = '完成升級程序';
$l['wait_note'] = '<b>注意:</b> 這將會使用到 3-4 分鐘. 請勿離開這個頁面直到處理程序達到 100%';
$l['cver_greater'] = '目前的版本與您要更新的版本一模一樣. 有可能您已經使用安裝程序升級過了. 如果這不是個案請選擇以下按鈕';
$l['force_upgrade'] = '成功升級';
$l['backup_finish'] = '備份成功';
$l['backup_fail_proceed'] = '備份時出現了某些錯誤. 需要直接升級嗎 ?';
$l['backing_up'] = '正在備份語法';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['upgrade'] = '語法更新';
$l['softins_url'] = '網址';
$l['softins_path'] = '路徑';
$l['softcopy_note'] = '<b>注意</b>: 這個語法將會使用自己的安裝程序更新. 要完成這個更新, 請瀏覽這個連結將會檢視第一個複製的檔案.';
$l['softsubmit'] = '更新';
$l['congrats'] = '恭喜, 這個語法已經成功更新';
$l['succesful'] = '已經成功更新於';
$l['admin_url'] = '管理員連結';
$l['setup_continue'] = '不過, 安裝程序還是需要由軟體本身完成, 請訪問以下連結';
$l['enjoy'] = '我們將會希望更新程序是簡單的.';
$l['upgrade_notes'] = '以下為很重要的注意事項. 我們高度建議您閱讀他們 ';
$l['please_note'] = '<b>注意</b>: '.APP.' 只是一個自動語法安裝器, 並不負責任何語法支援服務. 請瀏覽語法開發者的網頁來獲取支援!';
$l['regards'] = '誠摯的';
$l['softinstaller'] = APP.' 自動安裝器';
$l['return'] = '回到總攬';
$l['note_backup'] = '我們建議您製作一個 <a href="'.$globals['index'].'act=backup&insid=&soft-1;">備份</a> 於更新前.';
$l['alreadyupdated'] = '嗯 ... 實際的安裝程序 <b>&soft-1;</b> 並不是 <b>&soft-2;</b>. <br />點選此處來更新 '.APP.' 記錄.';
$l['no_update_required'] = '看起來您不需要安裝語法的安裝包, 因為已經完成更新了';
$l['auto_backup'] = '請問您需要於更新前備份一下嗎 ?';
$l['select_version'] = '選擇一個版本來更新';
$l['upgrading'] = '正在更新...';
$l['setup_partial'] = '您只需要在一步即可完成更新程序';
$l['finish_update'] = '請瀏覽以下的連結來完成更新程序.';
$l['finish_up_sucess'] = '完成更新程序後, 您可以存取 the &soft-1; 的安裝程序於此處';
$l['upgrading_to'] = '您將會升級到 : ';
$l['version'] = '版本 ';
$l['create_backup'] = '製作備份';
$l['create_backup_exp'] = '於升級前製作備份';
$l['prog_upgrading'] = '正在升級 ';// Dont remove the trailing space
$l['prog_upgrade_complete'] = '升級完成.';


$l['no_space'] = 'You do not have sufficient space to upgrade this installation!';
$l['invalid_insid'] = 'Invalid Installation ID';
$l['invalid_script'] = 'Invalid Script ID';
$l['no_upgrade_support'] = 'Upgrade is not supported for this script';

$l['upgrade_tweet_sub'] = 'Tell your friends';
$l['not_in_free'] = '<b>&soft-1;</b> cannot be upgraded in the Free version of '.APP.'!';
$l['notify_admin'] = 'Please notify your Server Admin to purchase the premium version of '.APP.'!';

$l['backup_type'] = 'Backup Options';
$l['backup_type_exp'] = 'Choose full backup or advanced options';
$l['standard_backup'] = 'Full Backup (Default)';
$l['advanced_backup'] = 'Advanced Options';

$l['backup_dir'] = 'Backup Directory';
$l['backup_db'] = 'Backup Database';
$l['backup_wwwdir'] = 'Backup Web Directory';
$l['backup_datadir'] = 'Backup Data Directory';
$l['no_dir'] = 'The installation files are missing hence cannot proceed with the upgrade';
$l['wpc_return'] = 'Return to Installations';