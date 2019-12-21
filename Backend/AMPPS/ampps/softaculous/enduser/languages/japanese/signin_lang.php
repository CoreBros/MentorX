<?php

//////////////////////////////////////////////////////////////
//===========================================================
// login_lang.php
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
	global $softpanel;

$l['user_data_missing'] = 'APIキーまたはAPIパスワード欄が空欄となっています。';
$l['invalid_username'] = '入力されたユーザー名またはパスワードが間違っています。';
$l['invalid_password'] = '入力されたユーザー名またはパスワードが間違っています。'; 
$l['no_username'] = 'ユーザー名の入力欄が空欄となっています。';
$l['no_password'] = 'パスワードの入力欄が空欄となっています。';

$l['<title>'] = 'ログイン';
$l['sign_in'] = 'サインイン';
$l['log_user'] = 'APIキー';
$l['log_pass'] = 'APIパスワード';
$l['sub_but'] = 'ログイン';

$l['<title_fpass>'] = 'パスワードを忘れた場合';
$l['pass_nomatch'] = '入力されたユーザー名またはパスワードが間違っています。';
$l['forgotpass'] = 'パスワードを忘れた場合';
$l['emailuser'] = 'Ｅメールアドレス';
$l['enteremail'] = 'Ｅメールアドレスの入力';
$l['sub_email'] = '送信';
$l['no_email'] = 'Ｅメールアドレスを送信していません。';
$l['invalidemail'] = 'あなたが送信したＥメールアドレスは無効です。';
$l['mail_sub'] = 'パスワードのリセット';
$l['mail_body'] = 'Hi,
						
パスワードのリセットがリクエストされました。
あなたがリクエストしていない場合、本メールは無視して下さい。

パスワードをリセットする場合は、下記URLをクリックして下さい。
http://'.(($globals['softpanel'] == 'webuzo') ? $softpanel->getConf('WU_PRIMARY_DOMAIN').':2002' : '127.0.0.1').'/index.php?act=login&sa=resetpass&key=&soft-1;

Regards,
'.$globals['sn'];
$l['mail_done'] = 'パスワードのリセットに関するメールが送信されました。';
$l['back_to_login'] = 'ログイン画面へ戻る';

$l['<title_reset>'] = 'パスワードのリセット';
$l['resetpass'] = 'パスワードのリセット';
$l['log_new_pass'] = '新規パスワード'; 
$l['log_reppass'] = 'パスワードの確認';
$l['changepass'] = 'パスワードの変更';
$l['no_key'] = 'リセットキーが送信されていません。';
$l['invalidkey'] = '無効なキーが指定されています。';
$l['no_new'] = '有効なパスワードを入力して下さい。';
$l['no_reppass'] = '正確なパスワードを入力して下さい。';
$l['no_match'] = 'あなたが入力したパスワードは一致しません。';
$l['keyexpire'] = 'キーの有効期限が切れています。';
$l['passchanged'] = 'パスワードは正常に変更されました。<a href="'.$globals['index'].'act=login">ログイン</a>を続行して下さい。';
$l['forgot_pass'] = 'パスワードを忘れた場合';

