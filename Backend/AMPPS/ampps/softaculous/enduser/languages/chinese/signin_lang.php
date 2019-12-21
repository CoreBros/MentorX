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

$l['user_data_missing'] = 'API KEY 或 API PASSWORD 欄位是空白的';
$l['invalid_username'] = '<b>使用者名稱</b>或密碼是錯誤的';
$l['invalid_password'] = '使用者名稱或<b>密碼</b>是錯誤的'; 
$l['no_username'] = '使用者名稱欄位是空白的';
$l['no_password'] = '密碼欄位是空白的';

$l['<title>'] = '登入';
$l['sign_in'] = '登入';
$l['log_user'] = 'API KEY';
$l['log_pass'] = 'API PASSWORD';
$l['sub_but'] = '登入';

$l['<title_fpass>'] = '忘記密碼';
$l['pass_nomatch'] = '您所輸入的使用者名稱或密碼是錯誤的.';
$l['forgotpass'] = '忘記密碼';
$l['emailuser'] = '電子信箱';
$l['enteremail'] = '輸入您的電子信箱';
$l['sub_email'] = '送出';
$l['no_email'] = '您沒有送出您的電子信箱';
$l['invalidemail'] = '您所送出的電子信箱是錯誤的';
$l['mail_sub'] = '重設密碼';
$l['mail_body'] = '嗨,
						
您有一個修改密碼的要求.
如果您沒有要求修改密碼, 請忽略這封電子郵件.

如果您想要修改您的密碼, 請點選以下的連結 :
http://'.(($globals['softpanel'] == 'webuzo') ? $softpanel->getConf('WU_PRIMARY_IP').':2002' : '127.0.0.1').'/index.php?act=login&sa=resetpass&key=&soft-1;

誠摯的,
'.$globals['sn'];
$l['mail_done'] = '一封電子郵件包含修改密碼的詳細資料已經送往您的電子信箱了';
$l['back_to_login'] = '回到登入介面';

$l['<title_reset>'] = '重設密碼';
$l['resetpass'] = '重設密碼';
$l['log_new_pass'] = '新的密碼'; 
$l['log_reppass'] = '確認新的密碼';
$l['changepass'] = '修改密碼';
$l['no_key'] = '沒有重設鑰匙送出';
$l['invalidkey'] = '您送出的是錯誤的鑰匙';
$l['no_new'] = '請輸入一個正確格式的密碼';
$l['no_reppass'] = '請輸入確認新的密碼欄位';
$l['no_match'] = '您提供的密碼並不相符';
$l['keyexpire'] = '鑰匙已經不存在了';
$l['passchanged'] = '密碼已經成功修改. 請前往 <a href="'.$globals['index'].'act=login">Login</a>';
$l['forgot_pass'] = '忘記密碼';

