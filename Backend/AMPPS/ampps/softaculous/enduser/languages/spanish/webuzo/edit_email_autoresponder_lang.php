<?php

//////////////////////////////////////////////////////////////
//===========================================================
// edit_email_autoresponder_lang.php
//===========================================================
// SOFTACULOUS 
// Version : 2.7.2
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Dhanya Varier
// Date:       12th Sept 2018
// Time:       14:00 hrs
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

$l['no_user'] = 'You did not specify the user';
$l['no_email_body'] = 'You did not specify email body';
$l['no_user_exist'] = 'This user doesn\'t exist. You can add it from Email Account page.<br/><center><a href="'.$globals['index'].'act=email_account">Email Account</a></center>';
$l['err_add_msg'] = 'There were some errors while adding the new Email Autoresponder. Please try again.' ;
$l['err_edit_msg'] = 'There were some errors while editing the Email Autoresponder. Please try again.' ;
$l['err_del_msg'] = 'Some error occurred while deleting the record';
$l['no_email_autorespond_added'] = 'No Email Autoresponder Added for the Email Account';
$l['no_email_config'] = 'No Email Autoresponder Configured for any Email Accounts';
$l['exim_not_installed'] = 'Please <a href="'.$globals['index'].'act=apps_updates">update Exim</a> to use this utility.';

// Theme Strings
$l['<title>'] = APP.' - Edit Email Autoresponder';
$l['loginname'] = 'Email';
$l['emailautoresponder'] = 'Edit Email Autoresponder';
$l['submit_button'] = 'Edit Autoresponder';
$l['change_final'] = 'Email autoresponder edited successfully. Return to <a href="'.$globals['index'].'act=add_email_autoresponder">Add Email Autoresponder</a>';
$l['success_interval_change'] = 'Autoreply interval changed successfully';
$l['connect_error'] = 'Unable to connect to the server';
$l['invalid_domain'] = 'Invalid Domain';
$l['service_stop'] = 'Your Exim service is not running currently. Click here to start.';
$l['mailsubject'] = 'Email Subject';
$l['optional'] = 'Optional';
$l['mailbody'] = 'Email Body';