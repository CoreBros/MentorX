<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editdomain_lang.php
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

$l['no_domain'] = 'U heeft geen domeinnaam opgegeven';
$l['alreay_exists'] = 'De opgegeven domeinnaam is reeds aanwezig in uw account.';
$l['no_ftp_user'] = 'U heeft geen FTP gebruiker opgegeven';
$l['no_ftp_pass'] = 'U heeft geen FTP wachtwoord opgegeven';
$l['no_ftp_path'] = 'U heeft geen FTP path opegeven';
$l['no_data_dir'] = 'No Data Directory was specified';
$l['wrong_ftp_path'] = 'Het opgegeven FTP path is niet geldig';
$l['no_id'] = 'ID niet gevonden!';
$l['no_backup_path'] = 'U heeft geen backup path opgegeven';
$l['ftp_error-1'] = 'Domeinnaam resolved niet';
$l['ftp_error-2'] = 'Er kan geen verbinding via FTP gemaakt worden met de gegevens die u heeft opgegeven';
$l['ftp_error-3'] = 'Het opgegeven FTP path is niet geldig';
$l['no_port'] = 'U heeft geen poort opgegeven';
$l['no_pub_allowed'] = 'U hoeft geen public key op te geven wanneer authenticatie via wachtwoord gebruikt wordt';
$l['no_public_key'] = 'Path naar public key is niet gevonden';
$l['no_private_key'] = 'Path naar private key niet gevonden';
$l['err_sftp_only'] = 'SFTP is alleen mogelijk via key authenticatie';
$l['no_pub_pri'] = 'Public of private key niet gevonden';
$l['no_domain_exist'] = 'The domain does not exist';
$l['not_allowed'] = 'You are not allowed to edit this domain';
$l['ftp_error'] = 'Could not connect to the FTP server';
$l['err_upload_remote'] = 'Unable to upload file to the FTP path';
$l['err_fetch_file'] = 'Unable to access the file uploaded to the domain';
$l['err_fetch_path'] = 'Unable to fetch path from the data received';
$l['invalid_domain_id'] = 'Invalid Domain ID';

//Theme Strings
$l['<title>'] = 'Wijzig een domein';
$l['edit_domain'] = 'Wijzig domein';
$l['domain'] = 'Domeinnaam';
$l['domain_exp'] = 'Vul een gelidge domeinnaam in, zonder http://www.';
$l['ftp_user'] = 'gebruiker';
$l['ftp_user_exp'] = 'De FTP gebruikersnaam van uw account';
$l['ftp_pass'] = 'wachtwoord';
$l['ftp_pass_exp'] = 'Het wachwoord van uw FTP account';
$l['ftp_path'] = 'path';
$l['ftp_path_exp'] = 'Het FTP path naar het domein, bijvoorbeeld: /public_html';
$l['backup_path'] = 'Backup path';
$l['backup_path_exp'] = 'Het backup path naar het domein bijvoorbeeld. /backups';
$l['data_dir'] = 'Data directory';
$l['data_dir_exp'] = 'Het volledige path naar de data directory, bijvoorbeeld /home/USER/datadir<br/>Sommige scripts zoals Elgg, Moodle, vereisen een folder die niet via het web toegankelijk is.';
$l['backup_path'] = 'Backup path';
$l['backup_path_exp'] = 'Het backup path naar het domein bijvoorbeeld. /backups';
$l['ins_email_exp'] = 'Stuur een e-mail met installatie details nadat een script geïnstalleerd is';
$l['submit_edit'] = 'Opslaan en update';
$l['settings_saved'] = 'Instellingen succesvol opgeslagen';
$l['show_all_dom'] = 'Overzicht domeinen';
$l['port'] = 'Poort';
$l['port_exp'] = 'Vul de poort in waarmee verbinding moet worden gemaakt';
$l['protocol'] = 'Protocol';
$l['protocol_exp'] = 'Selecteer het protocol dat door Softaculous gebruikt zal worden voor de communicatie';
$l['auth_password'] = 'Verificatiemethode';
$l['auth_password_exp'] = 'Selecteer de authenticatiemethode';
$l['private_key'] = 'Privésleutel';
$l['private_key_exp'] = 'Plak hier de privésleutel';
$l['passphrase'] = 'Wachtwoord';
$l['passphrase_exp'] = 'Wachtwoord voor een encrypted private key (optioneel)';
$l['sftp_path'] = 'Web directory';
$l['sftp_path_exp'] = 'Absoluut path naar de web directory van de gebruiker, bijvoorbeeld /home/USERNAME/public_html';
$l['sbackup_path_exp'] = 'Absoluut path naar de backup directory, bijvoorbeeld /home/USERNAME/backups';
$l['server_host'] = 'Server Host (Optional)';
$l['server_host_exp'] = '<b>IF</b> your domain name and server host are not the same enter the server host e.g. ftp.mydomain.com';
$l['ftp_pass_opt'] = 'Leave blank if you do not want to update the password.';
$l['auth_method_pass'] = 'Password';
$l['auth_method_key'] = 'SSH Key';
$l['no_pass_pri'] = 'Please provide either a password or private key';
$l['err_reconnect'] = 'Could not reconnect to database';