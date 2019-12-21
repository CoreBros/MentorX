<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editini_lang.php
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

$l['no_include_path'] = 'Include 的路徑沒有被指定!';
$l['no_etime'] = '沒有指定最大執行時間!';
$l['no_itime'] = '沒有指定最大匯入時間!';
$l['no_memory'] = '沒有指定記憶體容量限制!';
$l['no_mfile'] = '沒有指定最大上傳容量!';
$l['no_savepath'] = '沒有指定 Session 儲存路徑!';
$l['err_invalid_etime'] = '最大執行時間必須為正整數!';
$l['err_invalid_itmie'] = '最大匯入時間必須為正整數!';
$l['err_invalid_mlimit'] = '記憶體容量限制必須為正整數!';
$l['err_invalid_ufile'] = '最大上傳容量必須為正整數!';
$l['err_invalid_ipath'] = '數值必須開始於 <strong>.:/</strong>';
$l['err_add_msg'] = '有些錯誤當要儲存文件時!';


//Theme Strings
$l['<title>'] = APP.' - PHP 設定';
$l['settings_saved'] = 'PHP 設定成功儲存';
$l['phpinihead'] = 'PHP 設定';
$l['asp'] = 'asp_tags';
$l['dll'] = 'enable_dl';
$l['ufile'] = 'max_file_uploads';
$l['rglobals'] = 'register_globals';
$l['include'] = 'include_path';
$l['execution_time'] = 'max_execution_time';
$l['input_time'] = 'max_input_time';
$l['memory'] = 'memory_limit';
$l['savepath'] = 'session.save_path';
$l['mfile'] = 'upload_max_filesize';
$l['on'] = '開啟';
$l['off'] = '關閉';
$l['save'] = '儲存';
$l['mb'] = 'MB';
$l['retrieve']= '重設為預設設定';
$l['ins_retrieve']= '這將會重新設定整個 php.ini,不只是一些設定而已.所有現行的設定將會被忽略.';
$l['change_final'] = 'PHP 設定儲存成功.';
$l['option'] = '設定';
$l['basic'] = '基本';
$l['advance'] = '進階';
$l['change_final_file'] = 'PHP 設定成功儲存';
$l['connect_error'] ='噢!有個錯誤當正在連結<strong>伺服器</strong>';
$l['note'] = '要開啟/關閉擴充功能,請使用 Ampps 軟體.';
$l['restart'] = '重啟 Apache';
$l['ins_restart'] = '所有設定需要重啟 Apache 才會生效. ';



