<?php

//////////////////////////////////////////////////////////////
//===========================================================
// pass_protect_dir_lang.php
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

$l['no_dir_path'] = 'ディレクトリ・パスが指定されていません。';
$l['no_username'] = 'ユーザー名が指定されていません。';
$l['no_password'] = 'パスワードが指定されていません。';
$l['no_re_password'] = '確認用パスワードが指定されていません。';
$l['no_dir_path'] = '無効なディレクトリが指定されています。';
$l['no_match'] = 'あなたが入力したパスワードが一致しません。';
$l['err_pass_protect'] = 'ユーザーの追加中にエラーが発生しました。';
$l['err_del_msg'] = 'レコードの削除中にエラーが発生しました。';
$l['pass_too_short'] = 'パスワードは５文字以上として下さい。';
$l['err_invalid_user'] = 'ユーザー名は英数字のみ有効です。';
$l['no_dir_protected'] = 'No Protected Directories Found';

// Theme Strings
$l['<title>'] = APP.' ?パスワード保護されたディレクトリ';
$l['lbl_head'] = 'パスワード保護されたディレクトリ';
$l['dir_path'] = 'ディレクトリへのパス';
$l['exp_dir_path'] = 'ディレクトリに関係するパスワード保護へのパスを指定して下さい（例：public_html/test_path）。';
$l['dir_name'] = '保護されたディレクトリ名';
$l['exp_dir_name'] = 'パスワード保護されたディレクトリのエイリアス名';
$l['username'] = 'ユーザー名';
$l['exp_username'] = 'パスワード保護されたディレクトリのユーザー名';
$l['password'] = 'パスワード';
$l['exp_password'] = 'パスワード保護されたディレクトリのパスワード (５文字以上)';
$l['re_password'] = 'パスワード (再)';
$l['exp_re_password'] = 'パスワード保護されたディレクトリの確認用パスワード';
$l['submit_pass_protect'] = '保存';
$l['add_pass_protect'] = 'ユーザーは正常に作成されました。';
$l['record_table'] = '保護されたディレクトリのパスワード';
$l['pass_protected_path'] = 'パスワード保護されたディレクトリのパス';
$l['pass_protected_user'] = 'ユーザー名';
$l['option'] = 'オプション';
$l['record_del_conf'] = 'このレコードを削除してもよろしいですか？';
$l['delete'] = 'レコードは正常に削除されました。';
$l['connect_error'] = 'サーバーへ接続することができません。';
$l['no_proct_dir'] = 'No password protected directories found';
$l['randpass'] = 'Generate a Random Password';