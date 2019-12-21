<?php

//////////////////////////////////////////////////////////////
//===========================================================
// ipblock_lang.php
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

$l['no_data'] = 'Please enter IP Address/Domain';
$l['err_invalid_ip'] = 'Invalid IP Address';
$l['err_invalid_domain'] = 'Invalid Domain name';
$l['err_exist'] = 'IP Address already blocked';
$l['err_same'] = 'You can\'t block your own IP Address';
$l['no_data'] = 'No IP found';
$l['no_ip_blocked'] = 'No IP(s) Blocked';

//Theme Strings
$l['<title>'] = APP . ' - IP Block';
$l['lbl_head'] = 'IP Block';
$l['name'] = 'IP Address/Domain';
$l['submit_button'] = ' Add';
$l['record_table'] = 'IP addresses being blocked:';
$l['option'] = 'Options';
$l['block'] = 'IP Address';
$l['rec_added'] = 'IP Address Successfully blocked';
$l['some_error'] = 'Some error occurred. Please try again!';
$l['record_del_conf'] = 'Do you want to unblock this IP ?';
$l['delete'] = 'IP Unblocked Successfully' ;
$l['single_ip'] = 'Single IP or Domain';
$l['ip_range'] = 'IP Range';
$l['cidr_format'] = 'CIDR Format';
$l['ip_type'] = 'IP Address Type';
$l['wrong_type'] = 'Invalid IP Address Type Specified';
$l['start_ip'] = 'Starting IP';
$l['end_ip'] = 'Ending IP';
$l['invalid_cidr'] = 'Invalid CIDR Format';
$l['invalid_range'] = 'Invalid Range Format';
$l['invalid_mask_bit'] = 'Invalid Mask Bit Count';
$l['err_domain_ip'] = 'Invalid Domain or IP Address';