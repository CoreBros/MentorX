<?php

//////////////////////////////////////////////////////////////
//===========================================================
// import_lang.php
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

$l['err_invalid_domain'] = '您進入的域名名稱錯誤';
$l['err_exits_domain'] = '您的域名名稱已經存在';
$l['not_selected'] = '域名沒有被選擇';
$l['already_exists'] = '目錄已經存在';
$l['park_instead_addon'] = '域名指向的路徑已經存在,因此,添加這個域名作為託管域名.';
$l['domain_not_exists'] = '選擇的域名不存在.';
$l['err_host'] = 'IP地址無法新增到 Host 檔案,請取消選取選項於全域設定.';
$l['err_primary_exists'] = '您不能以 127.0.0.1 或 localhost 當作域名';

//Theme Strings
$l['<title>'] = '新增域名';
$l['submitdomain'] = '新增域名';
$l['domain_label'] = '域名';
$l['is_addon_part'] = '域名是插件或停止的嗎?';
$l['domain_path'] = '域名路徑';
$l['domain_add_label'] = '新增域名';
$l['domain_not_found'] = '沒有找到該域名的名稱';
$l['suc_dom_added'] = '新增到域名了';
$l['lbl_domain_manage'] = '前往域名管理';
$l['select_domain'] = '選擇域名';
$l['exp_checkaddon'] = '檢查停用的插件和取消選取的工具';
$l['host_entry'] = '添加條目至 Host ?';
$l['exp_hostadd'] = '檢查添加的條目';
if($globals['os'] == 'windows'){
	$l['exp_dompath'] = '<br />輸入域名位置 e.g C:/Ampps/your_site';
}else{
	$l['exp_dompath'] = '<br />輸入域名位置 e.g /Applications/AMPPS/your_site';
}
$l['ssl_entry'] = '新增SSL連線 ?';
$l['exp_ssl'] = '選取來添加SSL連線';
$l['hosts_perms'] = '存取被拒: 您沒有權限去編輯 Host 檔案,資料將不會進入 Host 檔案.';

