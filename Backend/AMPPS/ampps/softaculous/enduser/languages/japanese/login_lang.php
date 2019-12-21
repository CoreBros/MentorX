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

$l['user_data_missing'] = 'ユーザー名またはパスワード欄が空欄となっています。';
$l['invalid_username'] = '入力されたユーザー名またはパスワードが間違っています。';
$l['invalid_password'] = '入力されたユーザー名またはパスワードが間違っています。'; 
$l['invalid_user'] = '入力されたユーザー名またはパスワードが間違っています。'; 
$l['no_username'] = 'ユーザー名欄が空欄となっています。';
$l['no_password'] = 'パスワード欄が空欄となっています。';

$l['<title>'] = 'ログイン';
$l['sign_in'] = 'サインイン';
$l['log_user'] = 'ユーザー名';
$l['log_pass'] = 'パスワード';
$l['sub_but'] = 'ログイン';

$l['<title_fpass>'] = 'パスワードを忘れた場合';
$l['pass_nomatch'] = '入力されたユーザー名またはパスワードが間違っています。';
$l['forgotpass'] = 'パスワードを忘れた場合';
$l['emailuser'] = 'Ｅメールアドレス';
$l['enteremail'] = 'Ｅメールアドレスを入力して下さい。';
$l['sub_email'] = '送信';
$l['no_email'] = 'Ｅメールアドレスを送信していません。';
$l['invalidemail'] = '送信されたＥメールアドレスは無効です。';
$l['mail_sub'] = 'パスワードをリセットする。';
$l['mail_body'] = 'Hi,
						
パスワードのリセットが要求されています。パスワードのリセットしない場合は、本メールは無視して下さい。

パスワードをリセットする場合、下記のURLをクリックして下さい。:
http://'.(($globals['softpanel'] == 'webuzo') ? $softpanel->getConf('WU_PRIMARY_DOMAIN').':2002' : '127.0.0.1').'/index.php?act=login&sa=resetpass&key=&soft-1;

,
'.$globals['sn'];
$l['mail_done'] = 'パスワードのリセットに関するメールが送信されました。';
$l['fuser_mail_sub'] = 'Webuzoユーザー名';
$l['fuser_mail_body'] = 'Hi,
						
Webzoのユーザー名取得を要求されています。
要求しない場合は、本メールは無視して下さい。
下記のURLにログインして下さい:
http://'.(($globals['softpanel'] == 'webuzo') ? $softpanel->getConf('WU_PRIMARY_DOMAIN').':2002' : '127.0.0.1').'/index.php?act=login

ユーザー名: &soft-1;

,
'.$globals['sn'];
$l['fuser_mail_done'] = ' Webuzoユーザー名に関するＥメールが送信されました。';
$l['forgotuser'] = 'ユーザー名を忘れた場合';
$l['back_to_login'] = 'ログイン画面へ戻る';

$l['<title_reset>'] = 'パスワードのリセット';
$l['resetpass'] = 'パスワードのリセット';
$l['log_new_pass'] = '新規パスワード'; 
$l['log_reppass'] = 'パスワードの確認';
$l['changepass'] = 'パスワードの変更';
$l['no_key'] = 'リセットキーが送信されていません。';
$l['invalidkey'] = '無効なキーを指定しています
。';
$l['no_new'] = '有効なパスワードを入力して下さい。';
$l['no_reppass'] = '承認されたパスワードを入力して下さい。';
$l['no_match'] = '入力されたパスワードが間違っています。';
$l['keyexpire'] = 'キーの有効期限が切れています。';
$l['passchanged'] = ' パスワードは正常に変更されました。<a href="'.$globals['index'].'act=login">Login</a>へ進んで下さい。';
$l['forgot_pass'] = 'パスワードを忘れた場合';

