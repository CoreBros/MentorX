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

$l['no_info_file'] = '找不到 INFO.XML 檔案! 請回報本訊息給伺服器管理員.';
$l['incompatible'] = '這個軟體需要更高版本的 '.APP.'! 請回報本訊息給伺服器管理員.';
$l['no_upgrade'] = 'UPGRADE.XML 檔案無法被找到! 請回報給您的伺服器管理員.';
$l['no_functions'] = 'UPGRADE FUNCTIONS 檔案無法被找到! 請回報給您的伺服器管理員.';
$l['no_field'] = '欄位 <b>&soft-1;</b> 是必填的.';
$l['no_package'] = '升級安裝包無法被找到!';
$l['no_decompress'] = '解壓縮檔案時出現了一些錯誤.';
$l['no_decompress_www'] = '解壓縮網頁檔案發生錯誤.';
$l['no_config_perl_path'] = '設置 CGI 文件時發生錯誤.';
$l['checking_data'] = '正在檢查送出的資料';
$l['unzipping_files'] = '正在複製檔案與資料夾';
$l['unzipping_datadir'] = '正在解壓縮資料檔案';
$l['prop_db'] = '正在更新資料庫';
$l['finishing_process'] = '正在完成升級程序';
$l['wait_note'] = '<b>注意:</b> 這將會使用到 3-4 分鐘. 請勿離開這個頁面直到處理程序達到 100%';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['upgrade'] = '軟體更新';
$l['softins_url'] = '連結';
$l['softins_path'] = '路徑';
$l['softcopy_note'] = '<b>警告</b>: 這個軟體需要由其本身的升級工具進行. 請訪問複製檔案後所出現的連結來完成安裝程序.';
$l['softsubmit'] = '升級';
$l['congrats'] = '恭喜, 軟體的升級程序已經被成功執行';
$l['succesful'] = '已經被成功升級在';
$l['admin_url'] = '管理員連結';
$l['setup_continue'] = '不過, 升級程序還是需要由軟體本身完成, 請訪問以下連結';
$l['enjoy'] = '我們希望升級過程是簡單的.';
$l['install_notes'] = '以下為一些重要的訊息. 我們強烈建議您閱讀它們 ';
$l['please_note'] = '<b>注意</b>: '.APP.' 只是一個自動安裝器, 不需負責任何其他個別的升級程序. 請瀏覽該語法供應商的網站獲取支援!';
$l['regards'] = '誠摯的';
$l['softinstaller'] = APP.' 自動安裝器';
$l['return'] = '回到總覽';
$l['note_backup'] = '我們建議您製作一個 <a href="'.$globals['index'].'act=backup&insid=&soft-1;">備份</a> 於更新前.';
$l['create_backup'] = '製作備份';
$l['create_backup_exp'] = '於升級前製作備份';
$l['prog_upgrading'] = '正在升級 ';// Dont remove the trailing space
$l['prog_upgrade_complete'] = '升級完成.';


$l['no_space'] = 'You do not have sufficient space to upgrade this installation!';
$l['invalid_insid'] = 'Invalid Installation ID';
$l['invalid_script'] = 'Invalid Script ID';
$l['not_perl_script'] = 'This script is not in PERL';
$l['no_perl_upgrade'] = 'Upgrade is not supported for this script';
$l['upgrade_notes'] = 'The following are some important notes. It is highly recommended that you read them ';
$l['upgrade_tweet_sub'] = 'Tell your friends';
$l['not_in_free'] = '<b>&soft-1;</b> cannot be upgraded in the Free version of '.APP.'!';
$l['notify_admin'] = 'Please notify your Server Admin to purchase the premium version of '.APP.'!';
