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

$l['err_invalid_domain'] = '入力されたドメインは無効です。';
$l['err_exits_domain'] = '送信されたドメインは既に存在しています。';
$l['not_selected'] = 'ドメインが選択されていません。';
$l['already_exists'] = 'そのディレクトリは既に存在しています。';
$l['park_instead_addon'] = 'パスを指定しているドメインは既に存在しています。このドメインをパークド・ドメインとして追加して下さい。';
$l['domain_not_exists'] = '選択されたドメインは存在しません。';
$l['err_host'] = 'ホスト・ファイルにIPを追加できません。アドバンスド設定のオプションからチェックを外して下さい。';
$l['err_primary_exists'] = 'あなたは127.0.0.1またはローカル・ホストをドメインとして追加できません。';

//Theme Strings
$l['<title>'] = '新規ドメインの追加';
$l['submitdomain'] = 'ドメインの追加';
$l['domain_label'] = 'ドメイン';
$l['is_addon_part'] = 'ドメインはアドオンまたはパークされていますか？';
$l['domain_path'] = 'ドメインパス  ';
$l['domain_add_label'] = '新規ドメインの追加';
$l['domain_not_found'] = 'ドメイン名は発見されませんでした。';
$l['suc_dom_added'] = 'ドメインの追加';
$l['lbl_domain_manage'] = 'ドメイン管理';
$l['select_domain'] = 'ドメインの選択';
$l['exp_checkaddon'] = 'アドオンにチェックし、パークのチェックを外す。';
$l['host_entry'] = 'ホストファイルへのエントリーを追加しますか？';
$l['exp_hostadd'] = 'エントリー追加へチェックを入れる。';
if($globals['os'] == 'windows'){
	$l['exp_dompath'] = '<br />ドメインのパスを入力する。例： C:/Ampps/your_site';
}else{
	$l['exp_dompath'] = '<br />　ドメインのパスを入力する。例： /Applications/AMPPS/your_site';
}
$l['ssl_entry'] = 'SSLエントリーを追加しますか？';
$l['exp_ssl'] = 'SSLエントリー追加へチェックを入れる。';
$l['hosts_perms'] = 'アクセスは拒否されました：あなたはホスト・ファイルを編集する権利を有していません。エントリーはホスト・ファイルへ追加されません。';

