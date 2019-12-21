<?php

//////////////////////////////////////////////////////////////
//===========================================================
// import_lang.php
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
$l['err_host'] = 'IP cannot be added in Hosts file. Please uncheck the option in Advance Settings';
$l['err_primary_exists'] = 'You can not added 127.0.0.1 or localhost as domain';

//Theme Strings
$l['<title>'] = 'Add New Domain';
$l['submitdomain'] = 'Aggiungi dominio';
$l['domain_label'] = 'Dominio';
$l['is_addon_part'] = 'Is Domain Addon or Parked?';
$l['domain_path'] = 'Domain Path   ';
$l['domain_add_label'] = 'Add New Domain';
$l['domain_not_found'] = 'Domain name not found';
$l['suc_dom_added'] = 'Added the Domain';
$l['lbl_domain_manage'] = 'Go to Domain Manage';
$l['select_domain'] = 'Selezionare dominio';
$l['exp_checkaddon'] = 'Check for Addon & Uncheck for Parked';
$l['host_entry'] = 'Add an entry to Host File ?';
$l['exp_hostadd'] = 'Check to add an entry';
if($globals['os'] == 'windows'){
	$l['exp_dompath'] = '<br />Enter the Domain Path e.g C:/Ampps/your_site';
}else{
	$l['exp_dompath'] = '<br />Enter the Domain Path e.g /Applications/AMPPS/your_site';
}
$l['ssl_entry'] = 'Add an SSL entry ?';
$l['exp_ssl'] = 'Check to add an SSL entry';
$l['hosts_perms'] = 'Access Denied: You dont have permissions to edit hosts file. Entry wont be added to host file.';

