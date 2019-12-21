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

$l['no_domain'] = 'Der Domain Name wurde nicht angegeben';
$l['alreay_exists'] = 'Die angegebene Domain existiert bereits in Ihrem Account.';
$l['no_ftp_user'] = 'Es wurde kein FTP Benutzer angegeben';
$l['no_ftp_pass'] = 'Es wurde kein FTP Passwort angegeben';
$l['no_ftp_path'] = 'Es wurde kein FTP Pfad angegeben';
$l['no_data_dir'] = 'Es wurde kein Daten Verzeichnis abgegeben';
$l['wrong_ftp_path'] = 'Der angegebene FTP Pfad ist fehlerhaft und gehört nicht zur angegebenen Domain.';
$l['no_id'] = 'Keine ID gefunden!';
$l['no_backup_path'] = 'Es wurde kein Backup Pfad angegeben';
$l['ftp_error-1'] = 'Konnte Domain Namen nicht auflösen';
$l['ftp_error-2'] = 'Mit den eingegebenen FTP Daten konnte war kein Login möglich';
$l['ftp_error-3'] = 'Der angegebene FTP Pfad existiert nicht';
$l['no_port'] = 'Es wurde kein Port angegeben';
$l['no_pub_allowed'] = 'Der Public Key ist nicht erforderlich wenn die Authentifizierung mit einem Passwort statt findet';
$l['no_public_key'] = 'Der Pfad zum Public Key konnte nicht gefunden werden';
$l['no_private_key'] = 'Der Pfad zum Private Key konnte nicht gefunden werden';
$l['err_sftp_only'] = 'Nur STFP erlaubt die Authentifizierung durch Keys';
$l['no_pub_pri'] = 'Public oder Private Key wurde nicht gefunden';
$l['no_domain_exist'] = 'Die Domain existiert nicht';
$l['not_allowed'] = 'Sie haben keine Berechtigung diese Domain zu bearbeiten';
$l['ftp_error'] = 'Konnte keine Verbindung zum FTP Server herstellen';
$l['err_upload_remote'] = 'Konnte die Datei nicht zum angegebenen Pfad hochladen';
$l['err_fetch_file'] = 'Konnte die Datei, die zur Domain hochgeladen wurde, nicht abrufen';
$l['err_fetch_path'] = 'Konnte den angegebenen Pfad nicht abrufen';
$l['invalid_domain_id'] = 'Invalid Domain ID';

//Theme Strings
$l['<title>'] = 'Eine Domain bearbeiten';
$l['edit_domain'] = 'Domain bearbeiten';
$l['domain'] = 'Domain Name';
$l['domain_exp'] = 'Geben Sie einen gültigen Domain Namen an (ohne http://) z.B. mydomain.com';
$l['ftp_user'] = 'Benutzer';
$l['ftp_user_exp'] = 'Benutzername Ihres FTP Accounts';
$l['ftp_pass'] = 'Passwort';
$l['ftp_pass_exp'] = 'Passwort Ihres FTP Accounts';
$l['ftp_path'] = 'Pfad';
$l['ftp_path_exp'] = 'FTP Pfad zu Ihrer Domain z.B. /public_html';
$l['backup_path'] = 'Backup Pfad';
$l['backup_path_exp'] = 'Der Backup Pfad Ihrer Domain z.B. /backups';
$l['data_dir'] = 'Daten Verzeichnis';
$l['data_dir_exp'] = 'Kompletter Pfad zum Daten Verzeichnis z.B. /home/BENUTZER/datenverzeichnis<br/> Manche Anwendungen wie Elgg, Moodle, etc. benötigen ein nicht web zugängliches Verzeichnis.<br/> Dieser wird für diesen Zweck benutzt.';
$l['ins_email_exp'] = 'E-Mail mit Setup Details versenden, wenn neue Software installiert wurde';
$l['submit_edit'] = 'Speichern & Aktualisieren';
$l['settings_saved'] = 'Ihre Domain wurde erfolgreich gespeichert';
$l['show_all_dom'] = 'Alle Domains anzeigen';
$l['port'] = 'Port';
$l['port_exp'] = 'Geben Sie den Port an, zu dem die Verbindung aufgebaut werden soll';
$l['protocol'] = 'Protokoll';
$l['protocol_exp'] = 'Geben Sie das Protokoll an mit dem Softaculous kommunizieren soll';
$l['auth_password'] = 'Authentifizierungsmethode';
$l['auth_password_exp'] = 'Wählen Sie die Authentifizierungsmethode';
$l['private_key'] = 'Privat Schlüssel';
$l['private_key_exp'] = 'Fügen Sie hier den privaten Schlüssel ein';
$l['passphrase'] = 'Passphrase';
$l['passphrase_exp'] = 'Passphrase für verschlüsselten Private Key (optional)';
$l['sftp_path'] = 'Web Verzeichnis';
$l['sftp_path_exp'] = 'Absoluter Pfad zum Web Verzeichnis des Benutzers. Z.B. /home/BENUTZERNAME/public_html';
$l['sbackup_path_exp'] = 'Absoluter Pfad zum Backup Verzeichnis. Z.B. /home/BENUTZERNAME/backups';
$l['server_host'] = 'Server Name (Optional)';
$l['server_host_exp'] = '<b>WENN</b> Ihr Domain Name und Server Name nicht gleich sind, geben Sie den Namen hier ein, z.B. ftp.meinedomain.de';
$l['ftp_pass_opt'] = 'Leave blank if you do not want to update the password.';
$l['auth_method_pass'] = 'Password';
$l['auth_method_key'] = 'SSH Key';
$l['no_pass_pri'] = 'Please provide either a password or private key';
$l['err_reconnect'] = 'Could not reconnect to database';