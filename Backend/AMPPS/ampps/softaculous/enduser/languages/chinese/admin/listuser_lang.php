<?php

//////////////////////////////////////////////////////////////
//===========================================================
// addplans_lang.php
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

$l['<title>'] = 'Softaculous - 使用者列表';
$l['title'] = '使用者列表';
$l['user_name'] = '使用者名稱';
$l['api_key'] = 'API 金鑰';
$l['api_pass'] = 'API 密碼';
$l['number_of_users'] = '使用者號碼';
$l['option'] = '選項';
$l['no_users'] = '沒有可以顯示的使用者';
$l['adduser'] = '新增使用者';
$l['del_user'] = '刪除使用者 ?';
$l['del_res_user'] = '刪除經銷商 ?<br/> <b>有這個經銷商所創建的所有子用戶將會被刪除.</b>';
$l['delete'] = '使用者已經成功刪除.';
$l['edit'] = '使用者已經成功編輯';

$l['no_username'] = '請輸入使用者名稱來建立.';
$l['no_number_of_users'] = '請輸入使用者號碼.';
$l['user_exists'] = '使用者已經存在. 請嘗試另外一個使用者名稱.';
$l['err_domain'] = '無法刪除域名 : ';

$l['no_planname'] = '請指定計劃名稱';
$l['invalidfilename'] = '請指定有效的計劃名稱. 不允許特殊字元.';
$l['no_cpplan'] = '請選擇有效的控制台計劃';
$l['plan_exist'] = '同名計劃已經存在';
$l['error_plans'] = '請選擇至少一個使用者或控制台計劃';
$l['user_plan_exist'] = '使用者 - <b>&soft-1;</b> - 已經分配到另外一個計劃. 要覆寫請選擇覆寫選項';
$l['reseller_plan_exist'] = '經銷商 - <b>&soft-1;</b> - 已經分配到另外一個計劃. 要覆寫請選擇覆寫選項';
$l['error_cpplan'] = '請選擇一個有效的控制台計劃';
$l['error_scriptselect'] = '請選擇至少一個語法';
$l['error_disable'] = '請選擇這個勾選表單如果您要 <b>關閉</b> '.APP.' 給指定使用者';
$l['error_userselect'] = '請至少選取一個使用者';
$l['error_resellerselect'] = '請至少選曲一個經銷商';
$l['cpplan_plan_exist'] = '控制台計劃 - <b>&soft-1;</b> - 已經分配到另外一個計劃. 要覆寫請選擇覆寫選項';
$l['err_prefix'] = '您不能給 \'經銷商\' 當作您計劃名稱的前綴.';
$l['connect_error'] = '連線錯誤';
$l['err_user_nof'] = '只有經銷商可以擁有使用者,';

//Theme Strings
$l['user_details'] = '使用者詳細資訊';
$l['username'] = '使用者名稱';
$l['exp_username'] = '所有的字元必須要小寫. 請勿在字元間使用空格.';
$l['number_of_users'] = '使用者號碼';
$l['exp_number_of_users'] = '允許使用者擁有的子用戶';
$l['cplanname'] = '控制台計劃';
$l['exp_cplan'] = '控制台計劃';
$l['no_cpplans'] = '請選擇一個控制台計劃';
$l['saveplan'] = '儲存計劃';
$l['userselect'] = '使用者分配';
$l['resellerselect'] = '經銷商分配';
$l['exp_userselect'] = '選擇此訪問組的各個用戶.';
$l['exp_resellerselect'] = '選擇此訪問組的各個經銷商.';
$l['scriptselect'] = '語法分配';
$l['exp_scriptselect'] = '為此特定計畫選擇語法';
$l['done'] = '用戶已經成功刪除.';
$l['plan_save_fail'] = '無法儲存計畫詳細資訊';
$l['cpanelplan'] = '控制台計畫分配';
$l['cpplanselect'] = '這個ACL將適用選擇控制面板計劃給誰. 所有用戶按照該計劃將能夠使用指定的腳本';
$l['default_plan_note'] = '注意: 如果要建立預設計畫將所有的用戶不被分配到其他的 Softaculous 計畫, 請將 \'<b>softaculous_default</b>\' 作為您的計畫名稱.';
$l['select_all'] = '選擇全部: ';
$l['overwrite_settings'] = '覆寫設定:';
$l['uid'] = 'UID';
$l['gid'] = 'GID';


$l['owner'] = 'Owner';
$l['login'] = 'Login';

$l['err_no_user'] = 'User does not exist!';
$l['err_no_root_del'] = 'root user cannot be deleted !';
$l['err_invalid_email'] = 'Please provide valid Email';