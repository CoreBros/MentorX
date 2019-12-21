<?php

//////////////////////////////////////////////////////////////
//===========================================================
// email_forward_lang.php
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

$l['no_addemail'] = 'You did not specify the Forward Email address';
$l['no_sendemail'] = 'You did not specify the TO Email address';
$l['err_invalid_addemail'] = 'Invalid Forward Email address';
$l['err_invalid_sendemail'] = 'Invalid TO Email address';
$l['err_add_msg'] = 'There were some errors while adding new Email Forwarder. Please try again.' ;
$l['err_exist_sendemail'] = 'Record already exists';
$l['err_del_msg'] = 'Some error occurred while deleting the record';
$l['no_record'] = 'No such record found.';
$l['no_email_fwd'] = 'No Forward Email Address Configured';

// Theme Strings
$l['<title>'] = APP.' - Email Forward';
$l['loginname']='Address Forward';
$l['email']='Add Email Forward';
$l['new_pass']='To Email Address';
$l['submit_button']='Create Forwarder';
$l['change_final'] = 'Email forwarded successfully';
$l['invalid_domain'] = 'Invalid Domain';
$l['email_user'] = 'Addresses';
$l['email_forward'] = 'Forwarded';
$l['option'] = 'Options';
$l['record_table'] = 'Email Forwarders of';
$l['record_del_conf'] = 'Are you sure you want to delete this record ?';
$l['delete'] = 'Record deleted successfully';
$l['connect_error'] = 'Unable to connect to the server';
$l['adv_option'] = 'Advance Option';
$l['pipe'] = 'Pipe to a Program:';
$l['no_pipe'] = 'Please provide the path of pipe file';
$l['err_invalid_dir'] = 'The directory you typed is invalid.';
$l['no_to_data'] = 'Plese provide a Send Email Data';
