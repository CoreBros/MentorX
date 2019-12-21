<?php

//////////////////////////////////////////////////////////////
//===========================================================
// lets_encrypt_lang.php
//===========================================================
// SOFTACULOUS 
// Version : 2.5.0
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Husain Bhala
// Date:       24th Oct 2016
// Time:       16:00 hrs
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

$l['<title>'] = APP . ' - Lets Encrypt';
$l['lbl_head'] = 'Lets Encrypt';
$l['error_no_domain'] = 'No valid domain found on your machine';
$l['error_inst'] = 'There were some errors while installing Certificate';
$l['error_remove'] = 'There were some errors while removing Certificate';
$l['error_renew'] = 'There were some errors while renewing Certificate';
$l['err_no_input'] = 'Please provide some inputs.';
$l['not_permitted'] = 'This User is not permitted to run the script';
$l['err_invalid_param'] = 'Invalid parameter';
$l['no_action'] = 'Please specify an action to perform';
$l['no_domain'] = 'Please specify a domain';
$l['no_acme'] = 'Acme script not found';
$l['incorrect_domain'] = 'Domain not present on the panel';
$l['err_port'] = 'Port 80 is closed or no web server is running';
$l['err_action'] = 'Incorrect action specified';
$l['err_acme'] = 'Acme script encountered some errors';
$l['err_renewdate'] = 'Renew data not yet passed';
$l['nxt_renew'] = 'Renew date for the certificate is - ';
$l['ssl_present'] = 'SSL cert already assigned to domain';
$l['strt_acme'] = 'Invoking Acme script';
$l['stop_acme'] = 'Acme script finished execution';
$l['connect_error'] = 'Oops! There was an error while connecting to <strong>Server</strong>';
$l['save_cert_done'] = 'Certificate saved successfully';
$l['act_bg'] = 'The process is running in the background, please refresh the page after few minutes.';
$l['invalid_domain'] = 'Invalid Domain';
$l['no_cert_installed'] = 'No Installed Certificates Found';
$l['domain'] = 'Select Domain';
$l['crt_details'] = 'Certificate Details';
$l['subject'] = 'Domain';
$l['issuer'] = 'Issued By';
$l['version'] = 'Version';
$l['serial'] = 'Serial No.';
$l['val_from'] = 'Valid From';
$l['val_till'] = 'Valid Till';
$l['type'] = 'Type';
$l['created'] = 'Created on';
$l['next_renew'] = 'Next Renew Date';
$l['install_button'] = 'Install';
$l['revoke_button'] = 'Revoke';
$l['renew_button'] = 'Renew';
$l['cert_file'] = 'HOST';
$l['record_del_conf'] = 'Do you want to remove this certificate ?';
$l['delete'] = 'Certificate removed successfully';
$l['no_renew'] = 'No Domain found for auto-renewal';
$l['renew_done'] = 'Certificate auto-renewed for domain - ';
$l['renew_error'] = 'Auto-renewal of certificate failed for domain - ';
$l['access_denied'] = 'Access denied';
$l['only_for_premium'] = 'This feature is only available to Premium license users';
$l['lecerts'] = 'Certificates';
$l['lelog'] = 'Logs';
$l['ref_logs'] = 'Refresh Logs';
$l['clear_logs'] = 'Clear Logs';
$l['log_empty'] = '** Log file is empty **';
$l['err_clearlog'] = 'Log file could not be deleted';
$l['note'] = '<b>Note:</b> If the utility fails, disable your custom webserver config or htaccess and try again.';
$l['use_for_panel'] = 'Use this certificate for Webuzo Panel';
$l['exp_use_for_panel'] = 'If checked then the same certificate will be used for Webuzo Panel';
$l['leconf_cert'] = 'Configure LE Certificate';
$l['conf_for_email'] = 'Use this certificate for Email SSL/TLS';
$l['exp_conf_for_email'] = 'If checked, then the same certificate will be used for your Email server (Exim / Dovecot)';
$l['error_no_le_domain'] = 'No domain found with Let\'s Encrypt Certificate installed on it';
$l['conf_cert'] = 'Configure';
$l['settings_saved'] = 'Your settings were saved successfully';
$l['confirm_remove_le_cert_email'] = 'Do you want to remove the certificate configured for your Email server?';
$l['confirm_remove_le_cert_panel'] = 'Do you want to remove the certificate configured for this Panel ?';
$l['certs_configured_for'] = 'Certificates configured for';
$l['options'] = 'Options';
$l['no_le_conf'] = 'No certificate configured for Email/Panel';
$l['ssl_for_panel'] = 'Webuzo Panel';
$l['ssl_for_email'] = 'Email SSL';