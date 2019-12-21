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

$l['no_info_file'] = 'Die INFO.XML Datei konnte nicht gefunden werden! Bitte melden Sie dies dem Server Administrator.';
$l['incompatible'] = 'Die Software erfordert eine höhere Version von '.APP.'! Bitte melden Sie dies dem Server Administrator.';
$l['no_functions'] = 'Die IMPORT FUNCTIONS Datei konnte nicht gefunden werden! Bitte melden Sie dies dem Server Administrator.';
$l['no_softdomain'] = 'Sie haben keine Domain ausgewählt auf die die Software importiert werden soll.';
$l['disable_import'] = 'Import feature has been disabled by admin';
$l['invalid_script'] = 'Invalid Script ID';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['import_soft'] = 'Software importieren';
$l['choose_domain'] = 'Domain auswählen';
$l['choose_domain_exp'] = 'Bitte wählen Sie die Domain, auf der die Software bereits installiert ist.';
$l['in_directory'] = 'In Verzeichnis';
$l['in_directory_exp'] = 'Das Verzeichnis ist relativ zur der Domain. Z.B. um Software zu importieren, die unter http://meinedomain/verzeichnis/ installiert ist, reicht die Angabe <b>verzeichnis</b>. Um Software zu importieren, die direkt unter http://meineseite/ installiert ist, kann dieses Fald leer gelassen werden.';
$l['softsubmit'] = 'Importieren';
$l['congrats'] = 'Glückwunsch, die Software wurde erfolgreich importiert.';
$l['succesful'] = 'wurde erfolgreich importiert nach';
$l['admin_url'] = 'Admin URL';
$l['enjoy'] = 'Wir hoffen, dass der Import Prozess einfach war.';
$l['import_notes'] = 'Im Folgenden ein paar wichtige Informationen. Wir empfehlen dringend, diese zu lesen: ';
$l['please_note'] = '<b>HINWEIS</b>: '.APP.' ist nur ein Auto Installer und stellt keinen Support für die Software Pakete zur Verfügung. Bitte besuchen Sie die Webseite der Software / Anwendung für Support.';
$l['regards'] = 'mit freundlichen Grüßen';
$l['softinstaller'] = APP.' Auto Installer';
$l['return'] = 'zurück zur Übersicht';

$l['choose_protocol'] = 'Protokoll auswählen';
$l['choose_protocol_exp'] = 'Wenn Ihre Seite SSL unterstützt, wählen Sie bitte das HTTPS Protokoll.';
$l['no_https'] = 'Es wurde kein vertrauenswürdiges SSL Zertifikat gefunden';
$l['wrong_softdomain'] = 'Der Pfad der Domain, die Sie ausgewählt haben, konnte nicht gefunden werden.';

//remote import
$l['server_host'] = 'Server Name (Optional)';
$l['server_host_exp'] = '<b>WENN</b> Ihr Domain Name und Server Name nicht gleich sind tragen Sie den Server Namen ein, z.B. ftp.meinedomain.de';
$l['protocol'] = 'Protokoll';
$l['protocol_exp'] = 'Das Protokoll auswählen, mit dem Softaculous kommunizieren wird';
$l['port'] = 'Port';
$l['port_exp'] = 'Geben Sie den Port ein, zu dem die Verbindung aufgebaut werden soll';
$l['domain'] = 'Domain Name';
$l['domain_exp'] = 'Geben Sie einen gültigen Domain Name ein, z.B. meinedomain.de';
$l['ftp_user'] = 'Benutzername';
$l['ftp_user_exp'] = 'Der Benutzername Ihres FTP Accounts';
$l['ftp_pass'] = 'Passwort';
$l['ftp_pass_exp'] = 'Das Passwort Ihres FTP Accounts';
$l['ftp_path'] = 'Pfad';
$l['ftp_path_exp'] = 'Relativer Pfad zum Webverzeichnis des Buntzers, z.B. /public_html';
$l['Installed_path'] = 'Installationsverzeichnis (Optional)';
$l['Installed_path_exp'] = 'Installationsverzeichnis, z.B. "blog" wenn Sie die Anwendung unter /public_html/blog installiert haben';
$l['wrong_ftp_path'] = 'Der angegebene FTP Pfad existiert nicht';
$l['ftp_error-1'] = 'Konnte Domain Namen nicht ausflösen';
$l['ftp_error-2'] = 'Konnte nicht mit den angegebenen FTP Details einloggen';
$l['ftp_error-3'] = 'Der angegebene FTP Pfad existiert nicht';
$l['imp_err'] = 'Es traten einige Fehler beim Importieren der Software, die unter &soft-1; installiert ist, auf.';
$l['not_in_free'] = '<b>&soft-1;</b> kann nicht in der kostenlosen Version von '.APP.' importiert werden!';
$l['notify_admin'] = 'Bitte informieren Sie Ihren Server Administrator, die Premium Version von '.APP.' zu erwerben!';
$l['remote_import'] = 'Der Import Prozess Ihrer Installation wurde im Hintergrund gestartet. Sie werden eine E-mail über den Abschluss des Prozesses erhalten.';
$l['db_err'] = 'Konnte keine Verbindung zur Datenbank aufbauen.';
$l['remote_dir_err'] = 'Das Remote-Verzeichnis existiert nicht';
$l['err_db_create'] = 'Es ist ein Fehler beim Erstellen der Datenbank aufgetreten';
$l['dest_dir_err'] = 'Zielverzeichnis existiert bereits';
$l['source'] = 'Quelle';
$l['destination'] = 'Ziel';
$l['auth_password'] = 'Authentifizierungsmethode'; 
$l['auth_password_exp'] = 'Wählen Sie die Authentifizierungsmethode'; 
$l['private_key'] = 'Private Key';
$l['private_key_exp'] = 'Fügen Sie hier den privaten Schlüssel ein';
$l['passphrase'] = 'Passphrase';
$l['passphrase_exp'] = 'Passphrase für verschlüsselten Private Key (optional)';
$l['database_name'] = 'Datenbank Name';
$l['database_name_exp'] = 'Geben Sie einen Namen für die Datenbank ein, die für die Installation erstellt werden soll';
$l['database_exists'] = 'Die Datenbank existiert bereits. Bitte wählen Sie einen anderen Namen aus';
$l['databaseuser_exists'] = 'Der Datenbank Benutzer existiert bereits';
$l['db_limit_crossed'] = 'Die maximale Anzahl an Datenbanken, die Sie anlegen können, ist erreicht, daher kann der Import nicht fortgesetzt werden';
$l['empty_db'] = 'Das Datenbank Name Feld ist leer.Bitte geben Sie den Datenbank Namen ein';
$l['adv_option'] = 'Erweiterte Optionen';
$l['database_name'] = 'Datenbank Name';
$l['database_name_exp'] = 'Geben Sie den Namen der Datenbank an, die für die Installation erstellt werden soll';
$l['db_name_long'] = 'Der Datenbank Name darf nicht mehr als 7 Buchstaben enthalten. Bitte wählen Sie einen kürzeren Datenbank Namen.';
$l['db_alpha_num'] = 'Es sind nur alpha numerische Buchstaben für den Datenbank Namen erlaubt';
$l['remote_btn'] = 'Vom Remote-Server';
$l['local_btn'] = 'Von diesem server';
$l['checking_data'] = 'Überprüfe die angegebenen Daten';
$l['fetching_remote_db'] = 'Hole Datenbankdetails vom Remote-Server';
$l['create_db'] = 'Erstelle die Datenbank';
$l['fetching_remote_files'] = 'Importiere Dateien vom Remote-Server';
$l['import_complete'] = 'Import abgeschlossen';
$l['import_script'] = 'Importiere';
$l['no_remote_import'] = 'Der Remote Import ist für diese Anwendung nicht unterstützt';
$l['overwrite'] = 'Dateien überschreiben';
$l['some_files_exist'] = 'Die Installation kann nicht bearbeitet werden, da die folgenden Dateien bereits im Ziel Ordner existieren: ';
$l['delete_files'] = 'Bitte löschen Sie Dateien oder wählen Sie einen anderen Ordner.';
$l['overwrite_exist'] = '<b>ODER</b> <br />Wählen Sie die Checkbox um alle Dateien zu überschreiben und fortzufahren';
$l['sftp_path'] = 'SFTP Pfad';
$l['sftp_path_exp'] = 'Absoluter Pfad zum Web Verzeichnis des Benutzers. Z.B. /home/BENUTZERNAME/public_html';
$l['ftp_error'] = 'Konnte keine Verbindung zum FTP Server herstellen';
$l['err_upload_remote'] = 'Konnte die Datei nicht zum angegebenen FTP Pfad hochladen';
$l['err_fetch_file'] = 'Konnte die Datei, die zur Domain hochgeladen wurde, nicht abrufen';
$l['err_fetch_path'] = 'Konnte den angegebenen Pfad nicht abrufen';
$l['dbusername'] = 'Database Username';
$l['dbusername_exp'] = 'The MySQL username';
$l['dbuserpass'] = 'Database Password';
$l['dbuserpass_exp'] = 'The password of the MySQL user';
$l['database_name_exp_aefer'] = 'Type the name of the database to be used for the installation';
$l['hostname'] = 'Database Hostname';
$l['hostname_exp'] = 'The MySQL hostname (mainly <b>localhost</b>)';
$l['no_hostname'] = 'Please enter your Database Hostname';
$l['no_dbusername'] = 'Please enter your Database Username';
$l['no_dbuserpass'] = 'Please enter your Database Password';
$l['no_db'] = 'Please enter your Database Name';
$l['auth_method_pass'] = 'Password';
$l['auth_method_key'] = 'SSH Key';
$l['no_pass_pri'] = 'Please provide either a password or private key';
$l['finishing_process'] = 'Finishing Import';
$l['wait_note'] = '<b>NOTE:</b> This may take 3-4 minutes. You can leave this page if you wish !';

$l['import_push_bg'] = 'Import has been pushed in background';