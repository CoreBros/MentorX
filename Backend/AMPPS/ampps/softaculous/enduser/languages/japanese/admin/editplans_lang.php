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

$l['no_planname'] = 'プラン名を指定して下さい。';
$l['invalidfilename'] = '有効なプラン名を指定して下さい。特殊文字の使用はできません。';
$l['no_cpplan'] = '有効なコントロールパネル・プランを選択して下さい。';
$l['plan_exist'] = '同じ名称のプランが既に存在しています。';
$l['error_plans'] = '最低１つのユーザーまたはコントロールパネル・プランを選択して下さい。';
$l['user_plan_exist'] = 'ユーザー - <b>&soft-1;</b> - は既に別のプランが割当てられています。上書きするには上書きオプションを選択して下さい。';
$l['reseller_plan_exist'] = 'リセラー- <b>&soft-1;</b> - は既に別のプランが割当てられています。上書きするには上書きオプションを選択して下さい。';
$l['error_cpplan'] = '有効なコントロールパネル・プランを選択して下さい。';
$l['error_scriptselect'] = '最低１つのスクリプトを選択して下さい。';
$l['error_disable'] = '選択したユーザーの'.APP.'を<b>無効</b>にしたい場合はチェックボックスを選択して下さい。';
$l['error_userselect'] = '最低１つのユーザーを選択して下さい。';
$l['error_resellerselect'] = '最低１つのリセラーを選択して下さい。';
$l['cpplan_plan_exist'] = 'コントロールパネル・プラン - <b>&soft-1;</b> - は既に別のプランが割当てられています。上書きするには上書きオプションを選択して下さい。';
$l['err_prefix'] = 'あなたのプラン名のプレフィックスは\'リセラー_\'とすることができません。';
$l['no_plan_support'] = 'Plans feature is not supported on this panel';
$l['invalid_plan_name'] = 'Invalid Plan name';

//Theme Strings
$l['<title>'] = 'Softaculous ? アクセスコントロール';
$l['title'] = 'アクセスコントロールの編集';
$l['planhead'] = 'アクセスコントロール設定';
$l['planname'] = 'プラン名';
$l['exp_plan'] = 'アクセスコントロールプラン名';
$l['cplanname'] = 'コントロールパネル・プラン';
$l['exp_cplan'] = 'コントロールパネル・プラン';
$l['no_cpplans'] = 'コントロールパネル・プランを選択して下さい。';
$l['editplan'] = 'プランの保存';
$l['userselect'] = 'ユーザーの割当て';
$l['resellerselect'] = 'リセラーの割当て';
$l['exp_userselect'] = 'このアクセスグループにより影響を受ける個別のユーザーの選択';
$l['exp_resellerselect'] = 'このアクセスグループにより影響を受ける個別のリセラーの選択';
$l['scriptselect'] = 'スクリプトの割当て';
$l['exp_scriptselect'] = '特定のプランのスクリプトの選択';
$l['done'] = 'あなたのプランは保存されました。<a href="'.$globals['index'].'act=plans">Plans Overview</a>へ戻ります。';
$l['plan_save_fail'] = 'プラン内容を保存できません。';
$l['cpanelplan'] = 'コントロールパネル・プランの割当て';
$l['cpplanselect'] = 'このACLが適合するコントロールパネル・プランを選択して下さい。このプランでは、全てのユーザーが、割当てられたスクリプトのみ利用できます。';
$l['select_all'] = '全て選択: ';
$l['overwrite_settings'] = '設定の上書き:';

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