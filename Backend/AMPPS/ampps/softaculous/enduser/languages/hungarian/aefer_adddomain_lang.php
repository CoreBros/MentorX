<?php

//////////////////////////////////////////////////////////////
//===========================================================
// adddomain_lang.php
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

$l['no_domain'] = 'Nem lett megadva domain név';
$l['alreay_exists'] = 'A megadott domain már létezik a fiókjában.';
$l['no_ftp_user'] = 'Nem lett megadva FTP felhasználó';
$l['no_ftp_pass'] = 'Nem lett megadva FTP jelszó';
$l['no_ftp_path'] = 'Nem lett megadva FTP útvonal';
$l['no_backup_path'] = 'Nem lett megadva Backup útvonal';
$l['no_data_dir'] = 'Nem lett megadva Adat Könyvtár';
$l['wrong_ftp_path'] = 'A beírt FTP útvonal hibás és nem mutat a megadott domain névre.';
$l['ftp_error-1'] = 'Nem feloldható domain név';
$l['ftp_error-2'] = 'Nem tudott belépni a megadott FTP adatokkal';
$l['ftp_error-3'] = 'A megadott FTP útvonal nem létezik';
$l['no_port'] = 'Nem lett megadva Port';
$l['no_pub_allowed'] = 'Nyilvános Kulcs nem szükséges amíg a hitelesítő jelszót használja';
$l['no_public_key'] = 'Nincs útvonal a nyilvános kulcshoz';
$l['no_private_key'] = 'Nincs útvonal a privát kulcshoz';
$l['err_sftp_only'] = 'Csak az SFTP teszi lehetővé a kulcsokon keresztüli hitelesítést';
$l['no_pub_pri'] = 'Nyilvános vagy privát Kulcs nem található';
$l['no_protocol'] = 'Érvénytelen protokoll';
$l['not_allowed'] = 'Nem adhat hozzá domain nevet';
$l['ftp_error'] = 'Could not connect to the FTP server';
$l['err_upload_remote'] = 'Unable to upload file to the FTP path';
$l['err_fetch_file'] = 'Unable to access the file uploaded to the domain';
$l['err_fetch_path'] = 'Unable to fetch path from the data received';


//Theme Strings
$l['<title>'] = 'Add a Domain';
$l['add_domain'] = 'Add Domain';
$l['domain'] = 'Domain Name';
$l['domain_exp'] = 'Enter a valid domain name (without http://) e.g. mydomain.com';
$l['ftp_user'] = 'Username';
$l['ftp_user_exp'] = 'The username of your FTP Account';
$l['ftp_pass'] = 'Password';
$l['ftp_pass_exp'] = 'The Password of your FTP account';
$l['ftp_path'] = 'Path';
$l['ftp_path_exp'] = 'The FTP Path to your domain e.g. /public_html';
$l['backup_path'] = 'Backup Path';
$l['backup_path_exp'] = 'The Backup Path for your Backups made by Softaculous e.g. /backups';
$l['data_dir'] = 'Data Directory';
$l['data_dir_exp'] = 'Full Path to Data Directory e.g. /home/USER/datadir<br/>Some scripts like Elgg, Moodle, etc need a non web accessible folder.<br/>This will be used for that purpose.';
$l['ins_email_exp'] = 'Send an email containing setup details when you install a new software';
$l['submit_add'] = 'Test and Save Domain';
$l['settings_saved'] = 'Your Domain was saved successfully';
$l['show_all_dom'] = 'Show all domains';
$l['port'] = 'Port';
$l['port_exp'] = 'Enter the port to connect';
$l['protocol'] = 'Protocol';
$l['protocol_exp'] = 'Select the protocol by which Softaculous will communicate';
$l['auth_password'] = 'Authentication method'; 
$l['auth_password_exp'] = 'Select the authentication method'; 
$l['private_key'] = 'Private Key'; 
$l['private_key_exp'] = 'Paste the private key here'; 
$l['passphrase'] = 'Passphrase';
$l['passphrase_exp'] = 'Passphrase for encrypted private key(optional)';
$l['sftp_path'] = 'Web Directory';
$l['sftp_path_exp'] = 'Absolute path to web directory of user. e.g. /home/USERNAME/public_html';
$l['sbackup_path_exp'] = 'Absolute path to Backup Directory e.g /home/USERNAME/backups';
$l['server_host'] = 'Server Host (Optional)';
$l['server_host_exp'] = '<b>IF</b> your domain name and server host are not the same enter the server host e.g. ftp.mydomain.com';
$l['auth_method_pass'] = 'Password'; 
$l['auth_method_key'] = 'SSH Key'; 
$l['no_pass_pri'] = 'Please provide either a password or private key'; 
$l['err_reconnect'] = 'Could not reconnect to database';
