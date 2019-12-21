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

$l['user_data_missing'] = 'Полето за потребителско име или парола е празно';
$l['invalid_username'] = 'Потребителското име или паролата е грешни';
$l['invalid_password'] = 'Потребителското име или паролата е грешни'; 
$l['invalid_user'] = 'Потребителското име или паролата е грешни';
$l['no_username'] = 'Полето за парола е празно';
$l['no_password'] = 'The Password field was empty';
$l['disable_user'] = 'Login disabled by <strong>root</strong> user.';

$l['<title>'] = 'Влез';
$l['sign_in'] = 'Вход';
$l['log_user'] = 'Потребител';
$l['log_pass'] = 'Парола';
$l['sub_but'] = 'Влез';

$l['<title_fpass>'] = 'Забравена парола';
$l['pass_nomatch'] = 'Потребителското име или паролата е грешни.';
$l['forgotpass'] = 'Забравена парола';
$l['emailuser'] = 'Имейл адрес';
$l['enteremail'] = 'Въведи имейл адрес';
$l['sub_email'] = 'Изпрати';
$l['no_email'] = 'Вие не сте въвели имейл адрес';
$l['invalidemail'] = 'Имейл адреса който сте въвели е невалиден';
$l['mail_sub'] = 'Смяна на парола';
$l['mail_body'] = 'Здравей,
						
Изпратено е искане за смяна на паролата ви.
Ако не сте подали заявка за нулиране на паролата, моля игнорирайте това съобщение.

Ако бихте искали да промените паролата си, моля кликнете на адреса по-долу:
http://'.$globals['primary_ip'].':2002/index.php?act=login&sa=resetpass&key=&soft-1;

Поздрави,
'.$globals['sn'];
$l['mail_done'] = 'Съобщение е изпратено с детайлите, за да възстановите паролата си';
$l['fuser_mail_sub'] = 'Webuzo Username';
$l['fuser_mail_body'] = 'Hi,
						
A request to fetch the Webuzo Username has been made.
If you did not request the Webuzo Username, then please ignore this email.

Login to the URL below :
http://'.(($globals['softpanel'] == 'webuzo') ? $softpanel->getConf('WU_PRIMARY_DOMAIN').':2002' : '127.0.0.1').'/index.php?act=login

Username : &soft-1;

Regards,
'.$globals['sn'];
$l['fuser_mail_done'] = 'An email has been sent with the Webuzo Username';
$l['forgotuser'] = 'Forgot Username';
$l['back_to_login'] = 'Към Вход';

$l['<title_reset>'] = 'Смяна на парола';
$l['resetpass'] = 'Смяна на парола';
$l['log_new_pass'] = 'Нова парола'; 
$l['log_reppass'] = 'Потвърди парола';
$l['changepass'] = 'Смени парола';
$l['no_key'] = 'Няма изпратен ключ за смяна на парола';
$l['invalidkey'] = 'Вашият ключ е невалиден';
$l['no_new'] = 'Моля въведете валидна парола';
$l['no_reppass'] = 'Моля въведете парола за потвърждаване';
$l['no_match'] = 'Паролата която сте въвели несъвпада';
$l['keyexpire'] = 'Ключа вече не е валиден';
$l['passchanged'] = 'Парола е променена успешно. Моля преминете към <a href="'.$globals['index'].'act=login">Вход</a>';
$l['forgot_pass'] = 'Забравена парола';

