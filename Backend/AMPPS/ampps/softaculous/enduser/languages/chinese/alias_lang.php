<?php

//////////////////////////////////////////////////////////////
//===========================================================
// userindex_lang.php
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

global $globals;

$l['err_invalid_alias'] = '輸入的別名是無效的';
$l['err_invalid_alias_path'] = '輸入的別名路徑是無效的';
$l['err_exists_alias'] = '輸入的別名已經存在';
$l['err_dir_not_created'] = '別名路徑的資料夾尚未存在';
$l['err_invalid_alias_sp'] = '別名不支援特殊符號文字';
$l['err_alias_ampps'] = '這個別名已經存在';

//Theme Strings
$l['submitalias'] = '創建別名';
$l['alias_label'] = '別名名稱';
$l['alias_path'] = '別名路徑';

$l['<title>'] = APP.' - 別名管理中心';
$l['alias_headling'] = '別名管理中心';
$l['alias_name'] = '別名';
$l['alias_option'] = '選項';
$l['delete'] = '別名成功刪除';
$l['alias_del_conf'] = '您確定您要刪除這個別名?';
$l['alias_path'] = '路徑';
$l['connect_error'] = '喔喔, 有個錯誤當要連接<strong>伺服器</strong>';
$l['alias_path_notice'] = '<b>注意:</b>請確定路徑是正確的. 新的資料夾將會被創建於這個案件中.';
$l['alias_name_notice'] = '<b>注意:</b> 這個新增完成, 您必須訪問您的網站 http://localhost/your_site.';
if($globals['os'] == 'windows'){
	$l['alias_path_eg'] = 'e.g C:/www/your_site';
}else{
	$l['alias_path_eg'] = 'e.g /usr/local/www/your_site';
}
$l['alias_name_eg'] = '例如 your_site';
$l['add_new_button'] = '新增一個';
$l['back_button'] = '返回';
