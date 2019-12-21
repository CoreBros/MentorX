<?php

//////////////////////////////////////////////////////////////
//===========================================================
// advancedns_lang.php
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

$l['connect_error'] ='Oops there was an error while connecting to the <strong>Server</strong>';
$l['err_invalid_data'] ='Please enter some data';
$l['no_user'] = 'Please enter a value for the <strong>Record</strong> field';
$l['err_invalid_record'] = 'You entered some invalid data for the Name field';
$l['no_ttl'] = 'Please enter the TTL';
$l['no_address'] = 'Please enter the Address';
$l['no_cname'] = 'Please enter the CNAME';
$l['no_txt'] = 'Please enter the TXT data';
$l['err_invalid_address'] = 'Invalid IP Address';
$l['err_invalid_cname'] = 'Invalid CNAME';
$l['err_invalid_txt'] = 'Invalid TXT Data';
$l['err_invalid_ttl'] = 'TTL must be a positive integer';
$l['err_domain_exist'] = 'Record already exist';
$l['err_add_msg'] = 'Some error occurred while addding the record';
$l['err_edit_msg'] = 'Some error occurred while editing the record';
$l['err_del_msg'] = 'Some error occurred while deleting the record';
$l['edit'] = 'Record edited successfully';
$l['delete'] = 'Record deleted successfully';
$l['invalid_domain'] = 'Invalid Domain';
$l['err_norecord'] = 'No Record found';
$l['no_type'] = 'Invalid Type';

// Theme Strings
$l['<title>'] = APP.' - Advance DNS Setting';
$l['domain'] = 'Selezionare dominio';
$l['advancedns'] = 'Advance DNS Setting';
$l['submit_button'] = 'Add Record';
$l['typedefault'] = 'Address';
$l['change_final'] = 'Record added';
$l['dns_name'] = 'Name';
$l['dns_ttl'] = 'TTL';
$l['dns_class'] = 'Class';
$l['dns_type'] = 'Tipo';
$l['dns_record'] = 'Record';
$l['dns_option'] = 'Option';
$l['record_del_conf'] = 'Are you sure you want to delete this record ?';
$l['record_table'] = 'Zone File records of';
$l['no_dns_recods'] = 'No DNS record(s) found';
$l['service_stop'] = 'Your Bind service is not running currently. Click here to start.';