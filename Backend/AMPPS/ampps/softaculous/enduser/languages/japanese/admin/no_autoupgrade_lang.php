<?php

//////////////////////////////////////////////////////////////
//===========================================================
// categories_lang.php
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

$l['saving_error'] = '設定の保存中にエラーが発生しました。';

//Theme Strings
$l['<title>'] = APP.' -スクリプトの自動アップグレードを無効にする';
$l['settings_saved'] = '設定は正常に保存されました。';
$l['show_top_scripts'] = '自動アップグレードを無効にする。';
$l['show_top_scripts_exp'] = 'トップAppsカテゴリーの名称';
$l['soft_free_note'] = '注意: '.APP.'の無料バージョンでは、トップ14のスクリプトは選択することができません。';
$l['savescript'] = 'スクリプトの保存';
$l['select_top_scripts'] = 'スクリプトの選択';
$l['selected_top_scripts'] = '選択されたスクリプト';
$l['select_from_below'] = '以下からあなたのスクリプトを選択する。';
$l['script_note_exp'] = '数値が提供されない場合、'.APP.' 自らの式によりロード時間を計算し、インスタレーションをアップグレードします。<br />式は以下の通り計算されます : <strong>load = Uptime_of_server / Number_of_cores;</strong> <br />また、ロードが0.70未満の場合のみインスタレーションをアップグレードします。';
$l['script_note'] = '注意';


$l['planhead'] = '自動アップグレード可能なスクリプトのグローバル設定';
$l['uptime'] = 'サーバのロード制限を設定する。';
$l['exp_uptime'] = '例：数値を「５」に設定した場合、Softaculous がインスタレーションをアップグレードする際にロード時間を確認し、確認結果が数値未満の場合のみアップグレードされます。';
$l['save'] = '保存';
$l['scriptselect'] = 'スクリプト';
$l['disable_autoupgrade'] = '自動アップグレードを無効にする。';
$l['disable_autoupgrade_exp'] = 'インスタレーションの自動アップグレードを無効にした場合、ユーザーはエンドユーザー・パネルから自動アップグレードのオプションを取得できません。';
$l['exp_scriptselect'] = '無効にする自動アップグレードのスクリプトを選択して下さい。';
$l['done'] = 'あなたのプランは保存されました。<a href="'.$globals['index'].'act=plans">Plans Overview</a>へ戻ります。';
$l['select_all'] = '全て選択: ';

