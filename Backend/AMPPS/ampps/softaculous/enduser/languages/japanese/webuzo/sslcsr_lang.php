<?php

//////////////////////////////////////////////////////////////
//===========================================================
// sslcsr_lang.php
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

$l['long_country'] = 'Country Code specified is too long. Please specify a 2 letter Code';
$l['no_country'] = 'No Country Code specified'; 
$l['no_state'] = 'No State or Province specified';
$l['no_locality'] = 'No locality specified';
$l['no_organisation'] = 'Organisation or Company name not specified';
$l['no_org_unit'] = 'Organisation Branch/Division name not specified';
$l['no_pass'] = 'No Pass Phrase specified';
$l['no_email'] = 'No Email specified';
$l['no_domain'] = 'No Domain specified';
$l['done'] = 'SSL files created and installed successfully';
$l['invalid_email'] = 'Email address entered is invalid';
$l['create_csr'] = 'Certificate Signing Requests created successfully';
$l['error_saving'] = 'There were some errors while creating Certificate Signing Request(CSR)';
$l['long_pass'] = 'Pass Phrase specified is too short. Please specify a 4 letter Pass Phrase';
$l['err_invalid_pass'] = 'Invalid Pass Phrase.';
$l['err_invalid_country'] = 'Invalid Country Code.';
$l['invalid_domain'] = 'Invalid Domain';
$l['nocsr'] = 'No such CSR record found.';

//Theme Strings
$l['<title>'] = APP . ' - Certificate Signing Requests';
$l['lbl_head'] = 'Certificate Signing Requests';
$l['no_key_file'] = 'Please add the Private Key file for the specified domain.';
$l['description'] = 'Description';
$l['key'] = 'key';
$l['genrate'] = 'Generate a new 2048 bit key';
$l['domain_desc'] = 'Provide the FQDNs that you are trying to secure. You may use a wildcard domain by adding an asterisk in a domain name in the form: ';
$l['domain'] ='Domain';
$l['country'] = 'Country Code';
$l['country_desc'] = '2 letter abbreviation e.g. US or IN';
$l['state'] = 'State';
$l['state_desc'] = 'Name of the State or Province';
$l['locality'] = 'Locality';
$l['locality_desc'] = 'Name of the City or Town'; 
$l['organisation'] = 'Company Name';
$l['organisation_desc'] = 'Name of your Company or Organisation';
$l['org_unit'] = 'Company Branch'; 
$l['org_unit_desc'] = 'Name of the Organisation branch or Division';
$l['pass_pharse'] = 'Pass Phrase';
$l['pass_pharse_desc'] = 'Pass Phrase is similar to a PASSWORD.';
$l['email'] = 'Email Address';
$l['email_desc'] = 'Your email address';
$l['createcsr'] = 'Create';
$l['cert_file'] = 'HOST';
$l['option'] = 'OPTION';
$l['record_del_conf'] = 'Do you want to delete this Certificate Signing Request(CSR) ?';
$l['delete'] = 'Certificate Signing Request(CSR) deleted successfully';
$l['some_error'] = 'There were some errors while deleting Certificate Signing Request(CSR)';
$l['connect_error'] = 'Oops! There was an error while connecting to <strong>Server</strong>';
$l['cert'] = 'Certificate Signing Request file of ';
$l['info'] = 'Information of Certificate Signing Requests';
$l['close_detail'] = 'Close Detail';
$l['no_csr_found'] = 'No CSR record found.';





