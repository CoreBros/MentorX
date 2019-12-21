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

$l['<title>'] = 'Softaculous ? リストユーザー';
$l['title'] = 'リストユーザー';
$l['user_name'] = 'ユーザー名';
$l['owner'] = 'Owner';
$l['login'] = 'Login';
$l['api_key'] = 'APIキー';
$l['api_pass'] = 'APIパスワード';
$l['number_of_users'] = 'ユーザー数';
$l['option'] = 'オプション';
$l['no_users'] = '表示できるユーザーはいません。';
$l['adduser'] = 'ユーザーの追加';
$l['del_user'] = 'ユーザーを削除しますか？';
$l['del_res_user'] = 'リセラーを削除しますか？<br/> <b>このリセラーにより作成された全てのサブユーザーも削除されます。</b>';
$l['delete'] = 'ユーザーは正常に削除されました。';
$l['edit'] = 'ユーザーは正常に編集されました。';

$l['no_username'] = '作成するユーザー名を入力して下さい。';
$l['no_number_of_users'] = 'ユーザー数を入力して下さい。';
$l['user_exists'] = 'ユーザーは既に存在しています。別のユーザー名で試みて下さい。';
$l['err_domain'] = 'ドメインを削除することができませんでした: ';

$l['no_planname'] = 'プラン名を指定して下さい。';
$l['invalidfilename'] = '有効なプラン名を指定して下さい。特殊文字はご使用いただけません。';
$l['no_cpplan'] = '有効なコントロールパネルプランを選択して下さい。';
$l['plan_exist'] = '同じ名称のプランが既に存在しています。';
$l['error_plans'] = '１つ以上のユーザーまたはコントロールパネルプランを選択して下さい。';
$l['user_plan_exist'] = 'ユーザー- <b>&soft-1;</b> -は別のプランに割当てられています。上書きするには上書きのオプションを選択して下さい。';
$l['reseller_plan_exist'] = 'リセラー- <b>&soft-1;</b> - は別のプランに割当てられています。上書きするには上書きのオプションを選択して下さい。';
$l['error_cpplan'] = '有効なコントロールパネルプランを選択して下さい。';
$l['error_scriptselect'] = '１つ以上のスクリプトを選択して下さい。';
$l['error_disable'] = '選択したユーザーの'.APP.'を<b>無効</b>にするにはチェックボックスを選択して下さい。 ';
$l['error_userselect'] = '１つ以上のユーザーを選択して下さい。';
$l['error_resellerselect'] = '１つ以上のリセラーを選択して下さい。';
$l['cpplan_plan_exist'] = 'コントロールパネルプラン- <b>&soft-1;</b> - は別のプランに割当てられています。上書きするには上書きのオプションを選択して下さい。';
$l['err_prefix'] = 'プラン名のプレフィックスに \'リセラー_\'は使用できません。';
$l['connect_error'] = '接続エラー';
$l['err_user_nof'] = 'リセラーのみユーザー数を把握することができます。';

//Theme Strings
$l['user_details'] = 'ユーザー詳細';
$l['username'] = 'ユーザー名';
$l['exp_username'] = '全て小文字で作成されます。中間でスペースを入力しないで下さい。';
$l['number_of_users'] = 'ユーザー数';
$l['exp_number_of_users'] = 'サブユーザー数';
$l['cplanname'] = 'コントロールパネルプラン';
$l['exp_cplan'] = 'コントロールパネルプラン';
$l['no_cpplans'] = 'コントロールパネルプランを選択して下さい。';
$l['saveplan'] = 'プランの保存';
$l['userselect'] = 'ユーザーの割当て';
$l['resellerselect'] = 'リセラーの割当て';
$l['exp_userselect'] = 'このアクセスグループに割当てられるユーザーを選択して下さい。';
$l['exp_resellerselect'] = 'このアクセスグループに割当てられるリセラーを選択して下さい。';
$l['scriptselect'] = 'スクリプトの割当て';
$l['exp_scriptselect'] = '特定のプランのスクリプトを選択する';
$l['done'] = 'ユーザーは正常に削除されました。';
$l['plan_save_fail'] = 'プラン詳細を保存できません。';
$l['cpanelplan'] = 'コントロールパネルプランの割当て';
$l['cpplanselect'] = 'このACLが適用されるコントロール・パネルプランを選択して下さい。このプランでの全ユーザーはここで割当てられたスクリプトのみ使用することができます。';
$l['default_plan_note'] = '注意: Softaculous のプランに割当てられなかったユーザー用の初期プラン\'<b>softaculous_default</b>\'として作成される、プラン名を指定して下さい。';
$l['select_all'] = '全てを選択: ';
$l['overwrite_settings'] = '設定の上書き:';
$l['uid'] = 'UID';
$l['gid'] = 'GID';

$l['err_no_user'] = 'User does not exist!';
$l['err_no_root_del'] = 'root user cannot be deleted !';
$l['err_invalid_email'] = 'Please provide valid Email';