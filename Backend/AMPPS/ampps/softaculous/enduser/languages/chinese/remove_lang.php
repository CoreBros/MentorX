<?php

//////////////////////////////////////////////////////////////
//===========================================================
// remove_lang.php
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

$l['no_ins'] = '沒有選擇執行的安裝包';
$l['wrong_ins_title'] = '錯誤的安裝包ID';
$l['wrong_ins'] = '您執行的安裝包ID不存在';
$l['cant_remove_dir'] = '資料夾無法刪除因為這個資料夾為家目錄. 請取消選擇 <b>移除資料夾</b> 選項來繼續並去除移除資料夾的動作.';
$l['cant_remove_wwwdir'] = '網頁資料夾無法刪除因為這個資料夾為家目錄. 請取消選擇 <b>移除網頁資料夾</b> 選項來繼續並去除移除網頁資料夾的動作.';
$l['mail_rem_ins'] = '一個 &soft-1; 安裝包已經被移除了. 以下資訊為安裝包的詳細資料 : ';
$l['mail_path'] = '路徑';
$l['mail_url'] = '連結';
$l['mail_db'] = 'MySQL 資料庫';
$l['mail_dbuser'] = 'MySQL 資料庫使用者';
$l['mail_dbhost'] = 'MySQL 資料庫域名';
$l['mail_dbpass'] = 'MySQL 資料庫密碼';
$l['mail_time'] = '安裝包時間';
$l['mail_rem_time'] = '移除時間';
$l['mail_subject'] = '移除了 &soft-1; 的安裝包';
$l['mail_cron_command'] = 'CRON 工作';
$l['mail_datadir'] = '資料資料夾';
$l['mail_wwwdir'] = '網頁資料夾';
$l['checking_data'] = '正在檢查送出的資料';
$l['rem_db'] = '正在移除 資料庫/資料庫使用者';
$l['rem_dir'] = '正在移除資料夾';
$l['rem_datadir'] = '正在移除資料資料夾';
$l['rem_cron'] = '正在移除 Cron 工作';
$l['finishing_process'] = '成功移除';
$l['wait_note'] = '<b>注意:</b> 這將會花費 3-4 分鐘. 請不要來開這個網頁直到處理程序達到 100%';


//Theme Strings
$l['<title>'] = APP.' - 移除';
$l['info'] = '資料';
$l['ins_softname'] = '軟體';
$l['ins_num'] = '安裝號碼';
$l['ins_ver'] = '版本';
$l['ins_time'] = '安裝時間';
$l['ins_path'] = '路徑';
$l['ins_url'] = '網址';
$l['ins_db'] = '資料庫名稱';
$l['ins_dbuser'] = '資料庫使用者';
$l['ins_dbpass'] = '資料庫密碼';
$l['ins_dbhost'] = '資料庫主機';
$l['remove_ins'] = '移除一個安裝';
$l['remove_dir'] = '移除資料夾';
$l['remove_dir_exp'] = '如果選取了這個,整個資料夾將會被刪除';
$l['remove_db'] = '移除資料庫';
$l['remove_db_exp'] = '如果選取了這個,整個資料庫將會被刪除';
$l['remove_dbuser'] = '移除資料庫使用者';
$l['remove_dbuser_exp'] = '如果選取了這個,資料庫使用者也會被刪除';
$l['remove_conf'] = '這些動作是不可回溯性的! \n 您確定您要刪除這份安裝 ?';
$l['uninstalled'] = '安裝已經成功移除';
$l['removeins'] = '移除安裝';
$l['ins_cron_command'] = 'Cron 指令';
$l['remove_datadir'] = '移除資料資料夾';
$l['remove_datadir_exp'] = '如果選擇了資料資料夾將會被刪除.';
$l['ins_datadir'] = '資料資料夾';
$l['remove_wwwdir'] = '移除網頁資料夾';
$l['remove_wwwdir_exp'] = '如果選擇了網頁資料夾將會被刪除.';
$l['ins_wwwdir'] = '網頁資料夾';
$l['return'] = '回到總覽';
$l['prog_removing'] = '移除中 ';// Dont remove the trailing space
$l['prog_remove_complete'] = '安裝包已經移除.';
$l['disabled_script_info'] = '語法無效後沒有資訊可用.';

$l['wpc_return'] = 'Return to Installations';