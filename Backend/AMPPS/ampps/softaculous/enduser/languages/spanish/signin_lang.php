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

$l['user_data_missing'] = 'The API KEY or API PASSWORD field was empty';
$l['invalid_username'] = 'The username or password you entered is incorrect';
$l['invalid_password'] = 'The username or password you entered is incorrect'; 
$l['no_username'] = 'The Username field was empty';
$l['no_password'] = 'The Password field was empty';

$l['<title>'] = 'Login';
$l['sign_in'] = 'Sign in';
$l['log_user'] = 'API KEY';
$l['log_pass'] = 'API PASSWORD';
$l['sub_but'] = 'Login';

$l['<title_fpass>'] = 'Forgot Password';
$l['pass_nomatch'] = 'The username or password you entered is incorrect.';
$l['forgotpass'] = 'Forgot Password';
$l['emailuser'] = 'Email Address';
$l['enteremail'] = 'Enter your email address';
$l['sub_email'] = 'Submit';
$l['no_email'] = 'You did not submit your email address';
$l['invalidemail'] = 'The email address you submitted is invalid';
$l['mail_sub'] = 'Reset Password';
$l['mail_body'] = 'Hi,
						
A request to reset your password has been made.
If you did not request the password reset, then please ignore this email.

If you would like to reset your password, then please click the URL below :
http://'.(($globals['softpanel'] == 'webuzo') ? $softpanel->getConf('WU_PRIMARY_DOMAIN').':2002' : '127.0.0.1').'/index.php?act=login&sa=resetpass&key=&soft-1;

Regards,
'.$globals['sn'];
$l['mail_done'] = 'A mail has been sent with the details to reset your password';
$l['back_to_login'] = 'Back to Login';

$l['<title_reset>'] = 'Reset Password';
$l['resetpass'] = 'Reset Password';
$l['log_new_pass'] = 'New password'; 
$l['log_reppass'] = 'Confirm Password';
$l['changepass'] = 'Change Password';
$l['no_key'] = 'No Reset Key was submitted';
$l['invalidkey'] = 'You specified an invalid key';
$l['no_new'] = 'Please enter valid Password';
$l['no_reppass'] = 'Please enter confirm password';
$l['no_match'] = 'The passwords you gave do not match';
$l['keyexpire'] = 'Key is no longer valid';
$l['passchanged'] = 'Password Changed Successfully. Please proceed to <a href="'.$globals['index'].'act=login">Login</a>';
$l['forgot_pass'] = 'Forgot Password';

