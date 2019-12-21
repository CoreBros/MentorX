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

$l['no_domain'] = 'You did not specify the cPanel Server Name.';
$l['no_user'] = 'You did not specify the cPanel User Name.';
$l['no_pass'] = 'You did not specify the cPanel User password.';
$l['err_invalid_user'] = 'User name sholud be same as Webuzo user name';
$l['err_invalid_ip'] = 'Invalid cPanel IP Address';
$l['err_invalid_domain'] = 'Invalid cPanel Domain name';
$l['err_ftp_user_connect'] = 'Unable to connect to your cPanel server using given user details. Please confirm your user details.';

// Theme Strings
$l['<title>'] = APP.' - Import From cPanel';
$l['import_cpanel'] = 'Import From cPanel';
$l['r_domain'] = 'cPanel Server Address (Required)';
$l['r_domain_exp'] = 'IP address or FQDN';
$l['r_user'] = 'User Name (Required)';
$l['r_user_exp'] = 'Same as Webuzo User Name';
$l['r_pass'] = 'Password';
$l['r_pass_exp'] = 'cPanel user password.<br/>If specified, the process will import data directly from cPanel.';
$l['submit_button'] = 'Submit';
$l['import_done'] = 'Import from cPanel process has been started in the background. You will receive an email on completion of the process.';
$l['note'] = '<b>Note:</b> This utility will import your data from cPanel. <a href="http://www.webuzo.com/wiki/Import_From_cPanel" target="_blank" >Here</a> is the guide for the same.';
$l['r_backup'] = 'cPanel backup file';
$l['r_backup_exp'] = 'If specified, the process will import data from this file.<br/>The file should be stored locally inside <b>/home/webuzo-username</b> directory';
$l['backup_notfound'] = 'Backup file not found';
$l['err_backup_format'] = 'Incorrect File format found';
$l['atleast_one'] = 'Specify either cPanel password or backup file name';
$l['err_both'] = 'You can not specify cPanel password and backup file name';
$l['or'] = 'OR';
$l['is_backup_avbl'] = 'Do you have backup saved on the local server?';
$l['exp_backup_avbl'] = 'Check for backup saved locally & Uncheck for Remote Import';