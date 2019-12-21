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

$l['no_planname'] = '請提供一的計畫名稱';
$l['invalidfilename'] = '請提供一個可用的計畫名稱. 不允許特殊字元.';
$l['no_cpplan'] = '請選擇一個可用的控制台計畫';
$l['plan_exist'] = '同名計畫已經存在';
$l['error_plans'] = '請選擇至少一個使用者或控制台計畫';
$l['user_plan_exist'] = '使用者(們) - <b>&soft-1;</b> - 已經分配到另一個計畫. 要覆寫請選擇覆寫設定';
$l['reseller_plan_exist'] = '經銷商(們) - <b>&soft-1;</b> - 已經分配到另一個計畫. 要覆寫請選擇覆寫設定';
$l['error_cpplan'] = '請選擇一個可用的控制台計畫';
$l['error_scriptselect'] = '請至少選擇一個語法';
$l['error_disable'] = '如果您要 <b>停用</b> '.APP.'選擇的使用者, 請選擇勾選表單';
$l['error_userselect'] = '請至少選擇一個使用者';
$l['error_resellerselect'] = '請至少選擇一個經銷商';
$l['cpplan_plan_exist'] = '使用者(們) - <b>&soft-1;</b> - 已經分配到另一個計畫. 要覆寫請選擇覆寫設定';
$l['err_prefix'] = '您不能拿 \'reseller_\' 當作您的計畫名稱前綴.';
$l['no_plan_support'] = 'Plans feature is not supported on this panel';

//Theme Strings
$l['<title>'] = 'Softaculous - 訪問控制';
$l['title'] = '新增訪問控制計畫';
$l['planhead'] = '訪問控制設定';
$l['planname'] = '計畫名稱';
$l['exp_plan'] = '訪問控制計畫名稱';
$l['cplanname'] = '控制台計畫';
$l['exp_cplan'] = '控制台計畫';
$l['no_cpplans'] = '請選擇一個控制台計畫';
$l['saveplan'] = '儲存計畫';
$l['userselect'] = '用戶分配';
$l['resellerselect'] = '經銷商分配';
$l['exp_userselect'] = '選擇此訪問組的各個用戶.';
$l['exp_resellerselect'] = '選擇此訪問組的各個經銷商.';
$l['scriptselect'] = '語法分配';
$l['exp_scriptselect'] = '為此特定計畫選擇語法';
$l['done'] = '您的計畫已經儲存. 回到 <a href="'.$globals['index'].'act=plans">回到總覽</a>';
$l['plan_save_fail'] = '無法儲存計畫詳細資訊';
$l['cpanelplan'] = '控制台計畫分配';
$l['cpplanselect'] = '這個ACL將適用選擇控制面板計劃給誰. 所有用戶按照該計劃將能夠使用指定的腳本';
$l['default_plan_note'] = '注意: 如果要建立預設計畫將所有的用戶不被分配到其他的 Softaculous 計畫, 請將 \'<b>softaculous_default</b>\' 作為您的計畫名稱.';
$l['select_all'] = '選擇全部: ';
$l['overwrite_settings'] = '覆寫設定:';

$l['disable_autoupgrade'] = 'Disable Auto Upgrade';
$l['exp_disable_autoupgrade'] = 'Disable auto upgrading script installations for users that fall under this plan';

$l['limit_features'] = 'Feature Restrictions';

$l['default_note'] = 'Default : Unlimited';

$l['max_ins_script'] = 'Maximum Installations per Script';
$l['max_backup_script'] = 'Maximum Backups per Script';
$l['max_clone_script'] = 'Maximum Clone per Script';
$l['max_staging_script'] = 'Maximum Staging per Script';

$l['exp_max_ins_script'] = 'This will limit the maximum number of installations a user can create for particular script';
$l['exp_max_backup_script'] = 'This will limit the maximum number of backups a user can create for particular script';
$l['exp_max_clone_script'] = 'This will limit the maximum number of clone a user can create for particular script';
$l['exp_max_staging_script'] = 'This will limit the maximum number of staging a user can create for particular script';