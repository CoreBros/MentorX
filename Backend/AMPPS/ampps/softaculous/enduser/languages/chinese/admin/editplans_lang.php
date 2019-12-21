<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editplans_lang.php
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

$l['no_planname'] = '請提供計畫名稱';
$l['invalidfilename'] = '請提供可用的計畫名稱. 特殊字元不能使用.';
$l['no_cpplan'] = '請選擇可用控制台計畫';
$l['plan_exist'] = '同名計畫已經存在';
$l['error_plans'] = '請選擇至少一位用戶或控制台計畫Please choose atleast one user or control panel plan';
$l['user_plan_exist'] = '使用者 - <b>&soft-1;</b> - 已經被分配到另一個計畫. 要複寫請選擇複寫選項';
$l['reseller_plan_exist'] = '經銷商 - <b>&soft-1;</b> - 已經被分配到另一個計畫. 要複寫請選擇複寫選項';
$l['error_cpplan'] = ' 請選擇一個可用的控制台計劃';
$l['error_scriptselect'] = ' 請選擇至少一個語法';
$l['error_disable'] = ' 如果您要<b>關閉</b> '.APP.' 對於用戶請選擇選項';
$l['error_userselect'] = ' 請選擇至少一位用戶';
$l['error_resellerselect'] = ' 請選擇至少一位經銷商';
$l['cpplan_plan_exist'] = ' 控制台計劃 - <b>&soft-1;</b> - 已經被分配到另一個計畫. 要複寫請選擇複寫選項';
$l['err_prefix'] = '您不能以 \'經銷商_\' 當作的計劃名稱的前綴.';
$l['no_plan_support'] = 'Plans feature is not supported on this panel';
$l['invalid_plan_name'] = 'Invalid Plan name';

//Theme Strings
$l['<title>'] = 'Softaculous - 存取控制';
$l['title'] = '編輯存取控制計畫';
$l['planhead'] = '存取控制設定';
$l['planname'] = '計畫名稱';
$l['exp_plan'] = '存取控制計畫名稱';
$l['cplanname'] = '控制台計畫';
$l['exp_cplan'] = '控制台計畫';
$l['no_cpplans'] = '請選擇一個控制台計畫';
$l['editplan'] = '儲存計畫';
$l['userselect'] = '用戶分配';
$l['resellerselect'] = '經銷商分配';
$l['exp_userselect'] = '選擇一個被這個存取群組影響的用戶.';
$l['exp_resellerselect'] = '選擇被這個存取群組影響的用戶.';
$l['scriptselect'] = '語法分配';
$l['exp_scriptselect'] = '為特定計畫選定語法';
$l['done'] = '您的計劃已經被儲存. 回到 <a href="'.$globals['index'].'act=plans">計畫總覽</a>';
$l['plan_save_fail'] = '無法儲存計畫詳細資料';
$l['cpanelplan'] = '控制台計畫分配';
$l['cpplanselect'] = 'Select the control panel plans to whom this ACL will apply. All users under that plan will be able to use only the scripts assigned here';
$l['select_all'] = '選擇全部: ';
$l['overwrite_settings'] = '複寫設定:';


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