<?php

//////////////////////////////////////////////////////////////
//===========================================================
// addbackuploc_lang.php
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

//Error Strings
$l['ftp_error-1'] = 'Could not Resolve Domain Name';
$l['ftp_error-2'] = 'Could not login with specified FTP details';
$l['ftp_error-3'] = 'Specified FTP Path does not exist';
$l['ftp_error'] = 'Could not connect to the FTP server';
$l['no_ftp_user'] = 'No FTP user was specified';
$l['no_backup_loc'] = 'No Backup Location was specified';
$l['no_backup_loc_name'] = 'No backup location name was specified';
$l['no_protocol'] = 'Invalid Protocol';
$l['no_server_host'] = 'No server host was specified';
$l['record_exists'] = 'Backup Location with the same path already exists';

//Theme Strings
$l['<title>'] = 'Add Backup Location';
$l['location_name'] = 'Location Name';
$l['location_name_exp'] = 'Choose a name for backup location for your reference';
$l['protocol'] = 'Protocol';
$l['protocol_exp'] = 'Select the protocol by which '.APP.' will communicate';
$l['server_host'] = 'Server Host (Required)';
$l['server_host_exp'] = 'Enter the server host e.g. ftp.mydomain.com';
$l['port'] = 'Port';
$l['port_exp'] = 'Enter the port to connect (default FTP port is <b>21</b>)';
$l['ftp_user'] = 'Username';
$l['ftp_user_exp'] = 'The username of your FTP Account';
$l['ftp_pass'] = 'Password';
$l['ftp_pass_exp'] = 'The Password of your FTP account';
$l['backup_loc'] = 'Backup Location';
$l['rel_backup_loc_exp'] = 'Relative path from FTP user\'s directory e.g. /backups'; 
$l['abs_backup_loc_exp'] = 'Absolute path to backup directory e.g. /home/USERNAME/backups'; 
$l['dropbox_backup_loc_exp'] = 'Backup Directory e.g. /backups or you can leave empty to allow '.APP.' to manage the backup directory';
$l['add_backup_loc'] = 'Add Backup Location';
$l['backup_loc_saved'] = 'Backup Location added successfully';
$l['ftp'] = 'FTP';
$l['return_settings'] = 'Return to Settings';
$l['invalid_backup_loc'] = 'The backup path is not an absolute path. Please provide an absolute path'; 
$l['no_pass_pri'] = 'Please provide either a passoword or private key'; 
$l['off_rbackup'] = 'Backup on Remote Location is disabled by admin';
$l['dropbox'] = 'Dropbox';
$l['dropbox_authorization'] = 'Authorization';
$l['dropbox_authorize'] = 'Authorize';
$l['dropbox_authorization_exp'] = 'Grant '.APP.' APP access to create backups in your Dropbox account. Click on the <b>Authorize</b> button and follow the steps. Make a note of the code generated and enter the same in the <b>Auth Code</b> text box below';
$l['dropbox_code'] = 'Auth Code';
$l['dropbox_code_exp'] = 'Enter the code generated after allowing access via <b>Authorize</b> button above';
$l['dropbox_auth_tooltip'] = 'Hit this button to authorize Dropbox Access';
$l['no_dropbox_access'] = 'Please authorize '.APP.' App in your Dropbox';
$l['token_gen_failed'] = 'Failed to generate Dropbox Access Token';
$l['dropbox_backup_loc'] = 'Backup Location (Optional)';

$l['ftps'] = 'FTPS';
$l['sftp'] = 'SFTP';
$l['auth_password'] = 'Authentication method';
$l['auth_password_exp'] = 'Select the authentication method';
$l['private_key'] = 'Private Key';
$l['private_key_exp'] = 'Paste the private key here';
$l['passphrase'] = 'Passphrase';
$l['passphrase_exp'] = 'Passphrase for the private key (Optional)';
$l['auth_method_pass'] = 'Password';
$l['auth_method_key'] = 'SSH Key';

$l['gdrive'] = 'Google Drive';
$l['gdrive_auth_message'] = 'You will be prompted to authorize '.APP.' to access your Google Drive on submitting the form';
$l['gdrive_token_gen_failed'] = 'Failed to generate Google Drive Access Token';
$l['gdrive_err_access_denied'] = 'It seems you cancelled the authorization process';

$l['ampps_notify_premium'] = 'This feature is available in the premium version of AMPPS. Please purchase <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';