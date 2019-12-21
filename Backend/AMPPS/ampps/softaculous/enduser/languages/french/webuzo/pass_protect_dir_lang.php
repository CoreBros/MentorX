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

$l['no_dir_path'] = 'Directory path not specified.';
$l['no_username'] = 'Username not specified.';
$l['no_password'] = 'Password not specified.';
$l['no_re_password'] = 'Confirm password not specified.';
$l['no_dir_path'] = 'Invalid directory specified.';
$l['no_match'] = 'The passwords you entered do not match.';
$l['err_pass_protect'] = 'Oops !!! There were some errors while adding user';
$l['err_del_msg'] = 'Some error occurred while deleting the record';
$l['pass_too_short'] = 'Passwords must be at least 5 characters long';
$l['err_invalid_user'] = 'Username must be only alphanumeric characters.';
$l['no_dir_protected'] = 'No Protected Directories Found';

// Theme Strings
$l['<title>'] = APP.' - Password Protect Directory';
$l['lbl_head'] = 'Password Protect Directory';
$l['dir_path'] = 'Path to Directory';
$l['exp_dir_path'] = 'Specify the path to password protect relative to your user directory.
For e.g public_html/test_path';
$l['dir_name'] = 'Name the protected directory';
$l['exp_dir_name'] = 'Alias name for the Password Protected Directory';
$l['username'] = 'Username';
$l['exp_username'] = 'Username for the Password Protected Directory';
$l['password'] = 'Password';
$l['exp_password'] = 'Password for the Password Protected Directory (Minimum 5 characters long)';
$l['re_password'] = 'Password (Again)';
$l['exp_re_password'] = 'Confirm Password for the Password Protected Directory';
$l['submit_pass_protect'] = 'Save !!!';
$l['add_pass_protect'] = 'User created successfully';
$l['record_table'] = 'Password Protected Directories';
$l['pass_protected_path'] = 'Password Protected Directory Path';
$l['pass_protected_user'] = 'Username';
$l['option'] = 'Options';
$l['record_del_conf'] = 'Are you sure you want to delete this record ?';
$l['delete'] = 'Record deleted successfully';
$l['connect_error'] = 'Unable to connect to the server';
$l['no_proct_dir'] = 'No password protected directories found';
$l['randpass'] = 'Generate a Random Password';