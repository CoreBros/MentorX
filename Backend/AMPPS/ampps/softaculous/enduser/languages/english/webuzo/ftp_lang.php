<?php

//////////////////////////////////////////////////////////////
//===========================================================
// ftp_lang.php
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

$l['no_quota_limit'] = 'Please enter Quota Limit';
$l['err_invalid_quotalimit'] = 'Quota Limit must be a positive integer.';
$l['err_del_msg'] = 'There were some errors while deleting FTP User. Please try again.';
$l['err_update_msg'] = 'There were some errors while updating FTP User. Please try again.';
$l['err_used_quotalimit'] = 'You have already used more than assigned Quota';
$l['err_noftpuser'] = 'FTP user does not exist';

//Theme Strings
$l['<title>'] = 'Manage FTP';
$l['ftp_head'] = 'Manage FTP';

$l['add_new'] = 'Add new FTP user';
$l['return'] = 'Return to Home';
$l['record_del_conf'] = 'Are you sure want to delete this FTP user ?';
$l['delete'] = 'FTP User deleted successfully.';
$l['ftp_name'] = 'User Name';
$l['ftp_path'] = 'Directory';
$l['ftp_option'] = 'Option';
$l['ftp_quota'] = 'Quota';
$l['ftp_quota_unlimit'] = 'Unlimited';
$l['connect_error'] ='Oops! There was an error while connecting to <strong>Server</strong>';
$l['cpass'] = 'Change Password';
$l['unlimited'] = 'Unlimited';
$l['limited'] = 'MB';
$l['update'] = 'FTP Users quota updated successfully';
$l['ftp_usage'] = 'Usage';
$l['service_stop'] = 'Your Pure-FTPd service is not running currently. Click here to start.';
$l['is_domain_resolve'] = 'Your Domain does not resolve to the server IP ! So use the IP as Host instead of the domain name, while connecting.';

