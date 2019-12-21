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

$l['no_domain'] = 'No se ha especificado el nombre del dominio.';
$l['alreay_exists'] = 'El dominio ya existe en su cuenta.';
$l['no_ftp_user'] = 'No se ha especificado usuario FTP.';
$l['no_ftp_pass'] = 'No se ha especificado la password FTP.';
$l['no_ftp_path'] = 'No se ha especidficado la ruta FTP.';
$l['no_backup_path'] = 'No Backup PATH was specified';
$l['no_data_dir'] = 'No Data Directory was specified';
$l['wrong_ftp_path'] = 'La ruta FTP presentada es incorrecta y no apunta al dominio dado.';
$l['ftp_error-1'] = 'Could not Resolve Domain Name';
$l['ftp_error-2'] = 'Could not login with specified FTP details';
$l['ftp_error-3'] = 'Specified FTP Path does not exist';
$l['no_port'] = 'No Port was specified';
$l['no_pub_allowed'] = 'Public Key is not required while authenticating using password';
$l['no_public_key'] = 'No path to public key was found';
$l['no_private_key'] = 'No path to private key was found';
$l['err_sftp_only'] = 'Only SFTP allows authentication through keys';
$l['no_pub_pri'] = 'Public or Private Key not found';
$l['no_protocol'] = 'Invalid Protocol';
$l['not_allowed'] = 'You are not allowed to add a domain';
$l['ftp_error'] = 'Could not connect to the FTP server';
$l['err_upload_remote'] = 'Unable to upload file to the FTP path';
$l['err_fetch_file'] = 'Unable to access the file uploaded to the domain';
$l['err_fetch_path'] = 'Unable to fetch path from the data received';

//Theme Strings
$l['<title>'] = 'Agregar un dominio.';
$l['add_domain'] = 'Agregar dominio.';
$l['domain'] = 'Nombre de Dominio.';
$l['domain_exp'] = 'Ingrese un nombre de dominio válido (sin http://) por ejemplo, mydomain.com';
$l['ftp_user'] = 'Usuario';
$l['ftp_user_exp'] = 'El nombre de usaurio de su cuenta FTP.';
$l['ftp_pass'] = 'Password';
$l['ftp_pass_exp'] = 'Las password de su cuenta FTP.';
$l['ftp_path'] = 'Rtua';
$l['ftp_path_exp'] = 'Las ruta FTP de su dominio, por ejemplo /public_html';
$l['backup_path'] = 'Backup Path';
$l['backup_path_exp'] = 'The Backup Path for your Backups made by Softaculous e.g. /backups';
$l['data_dir'] = 'Data Directory';
$l['data_dir_exp'] = 'Full Path to Data Directory e.g. /home/USER/datadir<br/>Some scripts like Elgg, Moodle, etc need a non web accessible folder.<br/>This will be used for that purpose.';
$l['ins_email_exp'] = 'Enviar un correo electrónico con los detalles de configuración cuando se instala un nuevo software';
$l['submit_add'] = 'Probar y guardar Dominio';
$l['settings_saved'] = 'Su dominio se ha guardado satisfactoriamente.';
$l['show_all_dom'] = 'Mostrar todos los dominios';
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