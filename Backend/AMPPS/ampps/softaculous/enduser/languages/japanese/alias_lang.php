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

$l['err_invalid_alias'] = '入力されたエイリアスは無効です。';
$l['err_invalid_alias_path'] = '入力されたエイリアスのパスは無効です。';
$l['err_exists_alias'] = '送信されたエイリアスは既に存在しています。';
$l['err_dir_not_created'] = 'エイリアスのパスディレクトリは作成されませんでした。';
$l['err_invalid_alias_sp'] = 'エイリアス名に特殊文字は使用できません。';
$l['err_alias_ampps'] = 'このエイリアスは既に取得されています。';

//Theme Strings
$l['submitalias'] = 'エイリアスの作成';
$l['alias_label'] = 'エイリアス名';
$l['alias_path'] = 'エイリアスのパス';

$l['<title>'] = APP.' - エイリアスマネージャー';
$l['alias_headling'] = 'エイリアスマネージャー';
$l['alias_name'] = 'エイリアス名';
$l['alias_option'] = 'オプション';
$l['delete'] = 'エイリアス名は正常に削除されました。';
$l['alias_del_conf'] = 'このエイリアスを削除してもよろしいですか？';
$l['alias_path'] = 'パス';
$l['connect_error'] = 'サーバーへの接続中にエラーが発生しました。';
$l['alias_path_notice'] = '正しいパスが入力されているか確認して下さい。新規パスの場合は、新規ディレクトリが作成されます。';
$l['alias_name_notice'] = '入力後、http://localhost/your_siteへのアクセスが可能になります。';
if($globals['os'] == 'windows'){
	$l['alias_path_eg'] = 'e.g C:/www/your_site';
}else{
	$l['alias_path_eg'] = 'e.g /usr/local/www/your_site';
}
$l['alias_name_eg'] = '例：あなたのサイト名';
$l['add_new_button'] = '新規追加';
$l['back_button'] = '戻る';

