<?php

//////////////////////////////////////////////////////////////
//===========================================================
// installations_lang.php
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

$l['no_submit'] = '沒有選擇需要傳送電郵的安裝包.';
$l['no_ins_selected'] = '沒有選擇要升級的安裝包.';
$l['posix_error'] = 'POSIX 功能已經停用. 請啟用 POSIX 功能來進行自動升級安裝functions to perform Auto Upgrade for Installations.';
$l['shellexec_error'] = 'exec 功能已經停用. 請啟用 exec 功能來進行自動升級安裝.';
$l['user_soft_upd_sub'] = '有可用的語法更新';
$l['user_soft_upd'] = '這份電郵是關於一些 PHP 的安裝包已經過期. 為了安全考量您必須盡快更新這些過期的安裝包.
以下為可用的語法更新:

&soft-1;
更新這些語法請前往你的控制台 -> '.APP.' -> 安裝包.
在那裡您將可以更新的語法.

系統管理員敬上';
$l['no_reseller_upgrade_ins'] = 'Resellers are not allowed to auto upgrade installations';

//Theme Strings
$l['<title>'] = APP.' - 安裝包列表';
$l['searchinstallations'] = '搜尋安裝包';
$l['search_scripts'] = '語法';
$l['search_scripts_exp'] = '要全部請留空. 多個獨立語法請使用 \'<b>;</b>\'';
$l['search_users'] = 'Users使用者';
$l['search_users_exp'] = '要全部請留空. 多個獨立語法請使用 \'<b>;</b>\'';
$l['group_by_scripts'] = '集合語法';
$l['group_by_scripts_exp'] = '由使用者預設的群組';
$l['only_outdated'] = '僅顯示過期的安裝包';
$l['only_outdated_exp'] = '預設它將會顯示所有的安裝包';
$l['li_user'] = '使用者';
$l['li_scripts'] = '語法';
$l['li_url'] = '連結';
$l['li_insver'] = '安裝版本';// Installed Ver
$l['li_ver'] = '版本';
$l['li_realver'] = '真實版本';
$l['no_results'] = '沒有找到結果';
$l['search_ins'] = '搜尋';
$l['with_selected'] = '與選擇的';
$l['sub_email_users'] = '傳送更新版本的電郵提醒給使用者';
$l['emailed_users'] = '選擇的使用者將會收到電郵的提醒關於需要更新這些語法.';
$l['sub_upgrade_ins'] = '更新';
$l['upgrading_ins'] = '更新安裝包...';
$l['upgraded_ins'] = '自動更新程序已經完成並將詳細資訊透過電郵傳送.';
$l['upgraded'] = '升級過';
$l['failed'] = '失敗';
$l['go_to_autoupgrade'] = '回到列表';
$l['upgrading_completed'] = '升級成功';
$l['beta_note'] = '<b>注意</b> : 這個功能還在 <b>測試階段</b>. <a href="http://softaculous.com/docs/Auto_Upgrade" target="_blank">詳細資訊..</a>';
$l['wait_note'] = '<b>注意</b> : 知道安裝包被更新前請不要離開這個頁面.';
$l['tasklist_button'] = '任務列表';
$l['auto_upgrade_enabled'] = '自動更新已經啟用';
$l['real_ver_notice'] = '真正的版本與 '.APP.' 紀錄不相符. 似乎使用者已經手動升級這個安裝包了.';
$l['latest_ver_notice'] = '這個安裝包有可用的更新.';
$l['update_records'] = '更新 '.APP.' 記錄';
$l['no_submit_rec'] = '沒有安裝包的更新 '.APP.' 紀錄';
$l['err_update_record'] = '在 '.APP.' 更新版本紀錄失敗';
$l['succ_update_record'] = '成功在 '.APP.' 更新版本記錄';
$l['only_realversion'] = '顯示真實版本';
$l['only_realversion_exp'] = '選擇的 '.APP.' 城市將會偵測安裝包的真實版本.<br /><b>注意</b>: 透過掃描安裝包文件來找到真實版本需要一些時間';
$l['no_info'] = '沒有資訊';

$l['li_domains'] = 'Domains';
$l['search_domains'] = 'Domains';
$l['search_domains_exp'] = 'Leave blank for all. For multiple domains seperate with \'<b>;</b>\'';

$l['auto_upgrade_major'] = '(Major and Minor)'; 
$l['auto_upgrade_minor'] = '(Minor)';