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

$l['no_planname'] = 'プラン名を指定して下さい。';
$l['invalidfilename'] = '有効なプラン名を指定して下さい。特殊な文字は使用できません。';
$l['no_cpplan'] = '有効なコントロールパネルプランを選択して下さい。';
$l['plan_exist'] = '既存と同一名のプラン';
$l['error_plans'] = '最低１つのユーザーまたはコントロールパネルを選択して下さい。';
$l['user_plan_exist'] = 'ユーザー - <b>&soft-1;</b> - は既に別のプランに割り当てられています。上書きするオプションを選択して下さい。';
$l['reseller_plan_exist'] = 'リセラー - <b>&soft-1;</b> -  は既に別のプランに割り当てられています。上書きするオプションを選択して下さい。';
$l['error_cpplan'] = '有効なコントロールパネルプランを選択して下さい。';
$l['error_scriptselect'] = '最低１つのスクリプトを選択して下さい。';
$l['error_disable'] = '選択されたユーザーの'.APP.'を無効にしたい場合は、チェックボックスを選択して下さい。';
$l['error_userselect'] = '最低１つのユーザーを選択して下さい。';
$l['error_resellerselect'] = '最低１つのリセラーを選択して下さい。';
$l['cpplan_plan_exist'] = 'コントロールパネルプラン - <b>&soft-1;</b> - は既に別のプランに割り当てられています。上書きするオプションを選択して下さい。';
$l['err_prefix'] = 'あなたのプラン名のプレフィックスとして\'リセラー_\'を使用することはできません。';
$l['no_plan_support'] = 'Plans feature is not supported on this panel';

//Theme Strings
$l['<title>'] = 'Softaculous ? アクセスコントロール';
$l['title'] = 'アクセスコントロールプランの追加';
$l['planhead'] = 'アクセスコントロール設定';
$l['planname'] = 'プラン名';
$l['exp_plan'] = 'アクセスコントロールプラン名';
$l['cplanname'] = 'コントロールパネルプラン';
$l['exp_cplan'] = 'コントロールパネルプラン';
$l['no_cpplans'] = 'コントロールパネルプランを選択して下さい。';
$l['saveplan'] = 'プランの保存';
$l['userselect'] = 'ユーザーの割り当て';
$l['resellerselect'] = 'リセラーの割り当て';
$l['exp_userselect'] = 'このアクセスグループの影響を受ける個別ユーザーの選択';
$l['exp_resellerselect'] = 'このアクセスグループの影響を受けるリセラーの選択';
$l['scriptselect'] = 'スクリプトの割り当て';
$l['exp_scriptselect'] = '特定のプランのスクリプトの選択';
$l['done'] = 'あなたのプランは保存されました。<a href="'.$globals['index'].'act=plans">Plans Overview</a>へ戻る。';
$l['plan_save_fail'] = 'プラン詳細を保存できません。';
$l['cpanelplan'] = 'コントロールパネルプランの割り当て';
$l['cpplanselect'] = 'このACLが適合するコントロールパネルプランを選択して下さい。全てのユーザーは、このプランにおいて割り当てられたスクリプトに限り使用することができます。';
$l['default_plan_note'] = '注意： Softaculous のプランが割り当てられていないユーザー用の初期設定プランを作成するために、\'<b>softaculous_default</b>\'としてプラン名を指定して下さい。';
$l['select_all'] = '全てを選択する: ';
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