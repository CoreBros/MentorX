<?php

//////////////////////////////////////////////////////////////
//===========================================================
// backup_lang.php
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

$l['no_ins'] = 'Es wurde keine Installation angegeben';
$l['wrong_ins_title'] = 'Falsche Istallations ID';
$l['wrong_ins'] = 'Die angegebene Installations ID existiert nicht';
$l['backup_ftp_error'] = 'Konnte das Backup Verzeichnis nicht anlegen <b>&soft-1;</b>. Bitte legen Sie dieses manuell an und versuchen es erneut.';
$l['err_backup'] = 'Konnte kein Backup anlegen.';
$l['no_space_backup'] = 'Es steht nicht genügend Speicherplatz für das Backup dieser Installation zur Verfügung!';
$l['err_notelength'] = 'Die Backup Notiz muss weniger als 255 Zeichen betragen';
$l['off_backup_restore'] = 'Backup/Restore feature has been disabled by admin';

$l['cant_backup_dir'] = 'Das Backup Programm konnte die Dateien nicht sichern.';
$l['could_not_read'] = 'Ups, '.APP.' konnte die folgende Datei / das folgende Verzeichnis nicht lesen <b>&soft-1;</b> Bitte setzen Sie Leserechte um mit der Sicherung fortfahren zu können.';
$l['cant_datadir_dir'] = 'Es sind Fehler beim Hinzufügen des Daten Verzeinisses aufgetreten.';
$l['cant_wwwdir'] = 'Es sind Fehler beim Hinzufügen des Web Verzeichnisses aufgetreten.';
$l['cant_backup_db'] = 'Es sind Fehler beim Hinzufügen der Datenbank zum Backup aufgetreten.';
$l['err_perm_file'] = 'Es sind Fehler aufgetreten beim Anlegen einer Berechtigungsdatei';
$l['err_dataperm_file'] = 'Es sind Fehler aufgetreten beim Anlegen einer Berechtigungsdatei des Daten Verzeichnisses';
$l['err_wwwperm_file'] = 'Es sind Fehler aufgetreten beim Anlegen einer Berechtigungsdatei des WEB Verzeichnisses';
$l['save_dir_perms'] = 'Die Datei Berechitgungen konnten nicht gespeichert werden.';
$l['save_datadir_perms'] = 'Die Datei Berechtigungen des Daten Verzeichnisses konnten nicht gespeichert werden.';
$l['save_www_perms'] = 'Die Datei Berechitgungen des Web Verzeichnisses konnten nicht gespeichert werden.';
$l['cant_connect_mysql'] = 'Konnte keine Verbindung zur Datenbank aufbauen. Bitte überprüfen Sie Benutzername/Passwort Ihrer Datenbank. Wenn sich die Login Daten geändert haben, editieren Sie sie bitte unter Details bearbeiten';
//Theme Strings
$l['<title>'] = APP.' - Backup';
$l['info'] = 'Info';
$l['ins_softname'] = 'Software';
$l['ins_num'] = 'Installations Nummer';
$l['ins_ver'] = 'Version';
$l['ins_time'] = 'Installations Zeit';
$l['ins_path'] = 'Pfad';
$l['ins_wwwdir'] = 'Web Verzeichnis Pfad';
$l['ins_url'] = 'URL';
$l['ins_db'] = 'Datenbank Name';
$l['ins_dbuser'] = 'Datenbank Benutzer';
$l['ins_dbpass'] = 'Datenbank Passwort';
$l['ins_dbhost'] = 'Datenbank Host';
$l['backup_ins'] = 'Eine Installation sichern';
$l['backup_dir'] = 'Verzeichnis sichern';
$l['backup_dir_exp'] = 'Wenn diese Option gesetzt ist, wird das gesamte Verzeichnis gesichert';
$l['backup_db'] = 'Datenbank sichern';
$l['backup_db_exp'] = 'Wenn diese Option gesetzt ist, wird die Datenbank ebenfalls gesichert';
$l['backup_conf'] = 'Die Sicherung kann etwas Zeit in Anpsruch nehmen, abhängig von den zu sichernden Daten. Bitte schlißen Sie diese Seite nicht und navigieren nicht zu einer anderen Seite.';
$l['backedup'] = 'Die Sicherung wurde erfolgreich erstellt. Sie können es hier herunterladen: <a href="'.$globals['index'].'act=backups">Backup</a>.';
$l['backup_ins'] = 'Installation sichern';
$l['backup_datadir'] = 'Daten Verzeichnis sichern';
$l['backup_datadir_exp'] = 'Wenn diese Option gesetzt ist, wird das Daten Verzeichnis gesichert.';
$l['ins_datadir'] = 'Daten Verzeichnis';
$l['return'] = 'Zurück zur Übersicht';
$l['ins_cron_command'] = 'Cron Befehl';
$l['backup_wwwdir'] = 'Web Verzeichnis sichern';
$l['backup_wwwdir_exp'] = 'Wenn diese Option gesetzt ist, wird das Web Verzeichnis gesichert.';
$l['checking_data'] = 'Prüfe die eingegebenen Daten';
$l['backingup_db'] = 'Sichere die Datenbank';
$l['backingup_dir'] = 'Sichere das Verzeichnis';
$l['backingup_datadir'] = 'Sichere das Daten Verzeichnis';
$l['finishing_process'] = 'Beende Sicherung';
$l['wait_note'] = '<b>HINWEIS:</b> Dies kann 3 bis 4 Minuten dauern. Sie können die Seite verlassen.';
$l['backingup'] = 'Die Sicherung wird im Hintergrund erstellt. Sie werden per E-Mail benachrichtigt sobald es fertiggestellt ist. Nachdem die Sicherung fertiggestellt ist können Sie es hier herunterladen: <a href="'.$globals['index'].'act=backups">Backup</a> Seite.';
$l['check_email'] = 'Bitte überprüfen Sie Ihre E-Mails für den aktuellen Status der Sicherung.';
$l['prog_backingup'] = 'Sichere '; // Dont remove the trailing space
$l['prog_backup_complete'] = 'Sicherung vollständig.';
$l['backup_note'] = 'Backup Notiz';
$l['backup_note_exp'] = 'Hier können Sie eine Notiz als Referenz hinterlegen';
$l['backup_operation'] = 'Ausgewählte Backup Operation(en)';
$l['backups_expire'] = 'Ihre Sicherungen werden automatisch nach <b>&soft-1;</b> Tagen nach Anlegen des Backups gelöscht.';
$l['err_max_backups'] = 'Die maximale Anzahl an Sicherungen (<b>&soft-1;</b>), die Sie erstellen dürfen ist erreicht. Bitte löschen Sie nicht mehr benötigte Sicherungen um ein neues anzulegen.';
$l['backup_notes'] = 'Backup angelegt durch '.APP.' auto Backup';
$l['max_backups'] = 'Sie haben aktuell <b>&soft-1;</b> Sicherung(en) in Ihrem Account. Die maximale Anzahl an Sicherungen ist <b>&soft-2;</b>.';

$l['no_backup_functions'] = 'The BACKUP FUNCTIONS file could not be found! Please report this to the server administrator.';
$l['no_dir_exists'] = 'The Installation Directory does not exist.';
$l['backup_location_name'] = 'Backup Location';
$l['backup_file_empty'] = 'Incorrect backup file size : 0';
$l['err_mysql_db'] = 'The MySQL database name is incorrect as the database could not be selected.';
$l['backup_loc'] = 'Backup Location'; 
$l['exp_backup_loc'] = 'Choose the backup location where you would like to store the backup'; 
$l['default'] = 'Default'; 
$l['invalid_backup_location'] = 'Backup location submitted does not exist'; 
$l['local_folder'] = 'Local Folder'; 

$l['invalid_access_token'] = 'Invalid Access Token. Please Re-Authorize '.APP.' Dropbox APP from the Edit Backup location page in '.APP.' enduser panel';
$l['insufficient_space'] = 'Your Dropbox account is full. Please free some space and attempt the backup after sometime';

$l['gdrive_err_init'] = 'There were some errors while initiating the backup on Google Drive!!';
$l['gdrive_err_end'] = 'There were some errors while committing backup to your Google Drive account!!';

$l['error_max_backup_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Backups allowed per script';

$l['ftp_access'] = 'PHP process is unable to write files to your server. Please configure FTP access to continue.';
$l['configure_domain'] = 'Configure Settings';

$l['wpc_return'] = 'Return to Backups';

$l['ampps_notify_premium'] = 'This feature is available in the premium version of AMPPS. Please purchase <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';
$l['backing_up'] = 'Your backup is being created in background. You will be notified by email once its completed. You can track the backup process from the <a href="'.$globals['index'].'act=eu_tasklist">Task List</a> page.<br /> Your installation URL : <a href="&soft-1;" target="_blank">&soft-1;</a>';