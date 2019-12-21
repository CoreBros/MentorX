<?php

//////////////////////////////////////////////////////////////
//===========================================================
// domainadd_lang.php
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

$l['err_invalid_domain'] = 'The entered domain is invalid';
$l['err_exits_domain'] = 'The submitted domain already exists';
$l['not_selected'] = 'Domain Not Selected';
$l['already_exists'] = 'The directory already exists';
$l['park_instead_addon'] = 'A domain pointing to that path already exists. Hence please add this domain as a Parked Domain.';
$l['domain_not_exists'] = 'The selected domain does not exist';
$l['domain_path_not_found'] = 'Invalid Path specified for Domain.';
$l['domain_exists'] = 'The domain already exists';
$l['invalid_ip'] = 'Invalid IP Address specified for Domain.';

//Theme Strings
$l['<title>'] = 'Add New Domain';
$l['submitdomain'] = 'Add Domain';
$l['domain_label'] = 'Domain';
$l['is_addon_part'] = 'Is Domain Addon or Parked?';
$l['domain_path'] = 'Domain Path   ';
$l['domain_add_label'] = 'Add New Domain';
$l['domain_not_found'] = 'Domain name not found';
$l['suc_dom_added'] = 'Domain added successfully.';
$l['lbl_db_manage'] = 'Back to Domain Manage';
$l['select_domain'] = 'Select Domain';
$l['exp_checkaddon'] = 'Check for Addon & Uncheck for Parked';
$l['domain_not_added'] = 'Oops!!! There were some errors while adding the domain';
$l['ip_label'] = 'IP Address (Optional) ';
$l['exp_ip'] = 'Different IP Address for domain';
$l['validate_mails_label'] = 'Mail Validation records (Optional)';
$l['exp_validate_mails'] = 'Tick to add SPF, DKIM and DMARC records in the DNS';
$l['only_subdomain'] = 'You have permission to create sub domains only';
$l['issue_lecert_label'] = 'Issue Let\'s Encrypt certificate';
$l['exp_issue_lecert'] = 'Tick to issue SSL certificate from LE for the new domain';
$l['suc_dom_added'] = 'Domain added successfully.<br/>Return to <a href="'.$globals['index'].'act=domainmanage">Manage Domain</a>';