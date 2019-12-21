<?php

//////////////////////////////////////////////////////////////
//===========================================================
// ftp_account_lang.php
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

$l['no_new'] = 'You did not specify the password.';
$l['no_conf'] = 'The confirmation password is missing.';
$l['no_match'] = 'The passwords you entered do not match.';
$l['no_dir'] = 'You did not specify the directory';
$l['no_user'] = 'Please enter Username';
$l['no_quota_limit'] = 'Please enter Quota Limit';
$l['err_invalid_user'] = 'Invalid user name';
$l['err_invalid_quotalimit'] = 'Quota Limit must be a positive integer';
$l['err_add_msg'] = 'There were some errors while adding new FTP User. Please try again.' ;
// Theme Strings
$l['<title>'] = APP.' - Add FTP Account';
$l['loginname']='Login';
$l['ftp']='Add FTP Account';
$l['new_pass']='Password';
$l['retype_pass']='Password (Again)';
$l['directory']='Directory';
$l['path'] = 'The directory this user will be allowed to access';
$l['submit_button']='Create Account';
$l['change_note'] = 'Change Password';
$l['change_final'] = 'FTP user created.<br/>Return to <a href="'.$globals['index'].'act=ftp">Manage FTP</a>';
$l['change_onboot'] = 'Your password will be changed when the VPS is booted again';
$l['user_exist'] = 'User name already exist';
 $l['lbl_ftp_manage'] = 'Back to FTP Manage';
 $l['quota'] = 'Quota';
 $l['unlimited'] = 'Unlimited';
$l['limited'] = 'MB';
$l['randpass'] = 'Generate a Random Password';
$l['service_stop'] = 'Your Pure-FTPd service is not running currently. Click here to start.';
$l['is_domain_resolve'] = 'Your Domain does not resolve to the server IP ! So use the IP as Host instead of the domain name, while connecting.';