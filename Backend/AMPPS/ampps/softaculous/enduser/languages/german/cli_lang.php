<?php

//////////////////////////////////////////////////////////////
//===========================================================
// cli_lang.php
//===========================================================
// SOFTACULOUS 
// Version : 4.1.7
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

$l['err_cannot_autoupgrade'] = "Das automatische Update kann nicht für dieses Control Panel ausgeführt werden.\n";
$l['err_invalid_param'] = "Ungültiger Parameter &soft-1;\nBitte lesen Sie hierzu die Dokumentation für mehr Informationen:\nhttp://www.softaculous.com/docs/Upgrade_Script_from_CLI\n";
$l['err_no_input'] = "Bitte geben Sie Parameter an.\n";
$l['err_no_insid'] = "Es wurde keine Installations ID angegeben.\n";
$l['err_no_username'] = "Es wurde kein Benutzername angegeben.\n";
$l['err_no_such_user'] = "Der Benutzer wurde nicht gefunden.\n";
$l['err_dont_provide_username'] = "Der Benutzername ist nicht erforderlich.\n";
$l['err_no_softdir'] = "Softdir für Benutzer &soft-1; nicht gefunden\n";
$l['err_no_installation'] = "Es wurde keine Installation gefunden für : &soft-1;\n";
$l['err_cant_upgrade'] = "Diese Installation ist bereits aktuell oder sie kann nicht automtisch upgegradet werden.\n";
$l['err_backup_fail'] = 'Das Backup war nicht erfolgreich, daher wird der upgrade Prozess abgebrochen. Im Folgenden die Details:';
$l['err_upgrade_restore_failed'] = 'Die Aktualisierung ist fehlgeschlagen UND die Rücksicherung vom vorher angelegten Backup ist fehlgeschlagen. Im Folgenden die Details:';
$l['err_upgrade_restore_success'] = 'Die Aktualisierung ist fehlgeschlagen, aber die Installation konnte erfolgreich aus dem Backup wieder hergestelt werden. Im Folgenden die Details:';
$l['err_upgrade'] = 'Die Aktualisierung der Installation ist fehlgeschlagen. Im Folgenden die Details:';
$l['err_upgrade_req'] = 'Diese Installation erfüllt nicht die Aktualisierungsvoraussetzungen. Daher kann sie nicht automatisch akualisiert werden. Im Folgenden die Details:';
$l['err_could_not_posix'] = 'Konnte nicht auf den Benutzer wechseln, daher wird der Prozess abgebrochen...';
$l['err_cant_upgrade_for_this_server'] = "Das automatische Upgrade kann nicht ausgeführt werden\n weil die externe URL nicht zugänglich ist. Dies könnte daran liegen, dass allow_url_fopen() auf Ihrem Server ausgeschaltet ist oder CURL konnte die URL nicht erreichen.";
$l['err_auto_upgrade_req_fail'] = 'Diese Installation erfüllt nicht die Voraussetzungen für die automatische Aktualisierung. Daher kann sie nicht automatisch aktualisiert werden. Im Folgenden die Details:';
$l['help'] = "Willkommen im WebApps Installer Command-line Interface.
Verfügbare Kommandos: \n\t
--install\t Eine Anwendung installieren.
--upgrade\t Eine installierte Anwendung aktualisieren.
--import\t Eine installierte Anwendung in den WebApps Installer importieren.\n
Für Support kontaktieren Sie bitte: support@softaculous.com
";
$l['err_no_script'] = "Es wurde kein Anwendungsname angegeben.\n";
$l['err_no_url'] = "Bitte geben Sie eine URL an, unter der eine Installation gemacht wurde. Z.B. --url=DOMAIN.COM/testdir\n";
$l['err_no_such_script'] = "Upps! Keine Anwendung gefunden - &soft-1;\n";
$l['import_success'] = "Erfolgreich importiert!\n";
$l['import_error'] = "Der folgende Fehler ist aufgetreten:\n";
$l['err_no_path'] = "Bitte geben Sie den Pfad an. Z.B. --path=/home/USER/public_html/test\n";
$l['err_no_import'] = "Das Import Tool steht für diese Anwendung nicht zur Verfügung\n";
$l['err_user_not_allowed'] = "Das Import Tool ist nicht für den Endbenutzer verfügbar\n";
$l['err_cant_load_docroots'] = "Konnte den Pfad für zu den Domain(s) nicht laden\n";
$l['ins_available_for'] = " Anwendung(en) für das folgende Verzeichnis verfügbar:\n";// Keep the space at the beginning
$l['ins_found_at_path'] = " Anwendung gefunden unter dem angegebenen Pfad.\n Führen Sie den vorherigen Befehl mit --r aus, um sie zu importieren.\n";
$l['imp_ins_exists'] = "Diese Anwendng wurde bereits für - &soft-1; importiert unter &soft-2;\n";
$l['upgraded_manually'] = "The installation is already up to date. Updated ".APP." records\n";
$l['upgraded_successfully'] = "Das Upgrade war erfolgreich\n";
$l['shellexec_disabled'] = 'shell_exec() ist deaktiviert';
$l['list_scripts'] = "\nDies ist eine Liste der Anwendungen, welche eventuell auf Ihrem Server nicht funktionieren.\nWeil er die minimalen Anforderungen der Anwendungen nicht erfüllt.";
$l['req_pass'] = "Anforderungs Test aller Anwendungen wurde abgeschlossen.";
$l['err_cannot_autobackup'] = "Automatische Backups könne für dieses Control Panel nicht ausgeführt werden.\n";
$l['err_no_auto_backup'] = "Automatische Backups wurden vom Admin deaktiviert.\n";
$l['err_update_record'] = 'Es ist ein Fehler beim Update der Version in den '.APP." Aufzeichnungen aufgetreten.";
$l['suc_update_record'] = "Die ".APP." Aufzeichnung wurde erfolgreich aktualisiert von  &soft-1; nach &soft-2; für &soft-3;\n";
$l['show_real_version'] = "Richtige Version: &soft-1; -- Version in den ".APP." Aufzeichnungen: &soft-2; \n";
$l['no_outdated_ins'] = "Keine veralteten Anwendung(en) gefunden.\n";
$l['edit_detail_options'] = "\n--show_outdated_version=1 um die veralteten Anwendungen des angegebenen Benutzers anzuzeigen
--user=USER_NAME der Benutzername, dessen Aufzeichnungen Sie aktualisieren wollen
--sid=SCRIPT_ID Anwendungs ID, dessen Aufzeichnungen Sie aktualisieren wollen
--update_records=1 Dies wird die ".APP." Aufzeichnungen aktualisieren\n";
$l['only_au_ins_note'] = "Hinweis: Nur Installationen, welche automatisch aktualisiert werden können werden hier aufgelistet\n";
$l['err_restore_cli'] = "Restore via CLI can not be performed for this control panel.\n";
$l['err_no_backupfile'] = "Die Backup Datei existiert nicht.\n";
$l['err_wrongins'] = "Die Backup Datei ist nicht für diese Installation.\n";
$l['err_no_file'] = "Der Backup Dateiname wurde nicht angegeben.\n";
$l['err_no_backupinfo'] = "Die Backup Info Datei wurde nicht gefunden.\n";
$l['err_no_backup_file'] = "Die Backup Datei konnte nicht gefunden werden.\n";

$l['soft_license'] = APP." Lizenz";
$l['lic_type'] = "Typ";
$l['num_users'] = "Anzahl der Benutzer";
$l['licexpires'] = "Läuft ab";
$l['primary_ip'] = "Lizenz IP";
$l['free'] = "Free";
$l['premium'] = "Premium";
$l['expired'] = "abgelaufen";
$l['never'] = "nie";

// Remove installation
$l['no_panels'] = "Anwendungen üver die CLI zu entfernen ist nur über cPanel oder Webuzo möglich.\n";
$l['no_input'] = "Bitte geben Sie die erforderlichen Daten an..\n";
$l['invalid_par'] = 'Ungültiger Parameter ';
$l['no_scripts'] = 'Anwendungen wurden nicht geladen.';
$l['remove'] = 'Entfernt';
$l['heading'] = "Anwendungsname \t Installations ID der Anwendung \n";
$l['no_installation'] = "Es wurde keine Installationen auf Ihrem Server gefunden.\n";
$l['err_remove'] = "Entfernen der Installation fehlgeschlagen.\n";
$l['note_by_automated_backup'] = 'Backup durch automatisches Backup erzeugt';
$l['note_by_automated_upgrade'] = 'Backup durch automatische Aktualisierung erzeugt';
$l['sql_db'] = 'Konnte die Datenbankdatei nicht finden';
$l['err_query'] = 'Konnte die Anfrage nicht ausführen';
$l['sqlfile_err'] = 'Konnte die sql Datei nicht anlegen';
$l['fetching_remote_files'] = 'Importiere Dateien vom Remote-Server';
$l['import_complete'] = 'Import abgeschlossen';
$l['import_script'] = 'Importiere';
$l['export_db'] = 'Exportiere Datenbank vom Remote-Server';
$l['fetch_datadir'] = 'Hole Datenverzeichnis vom Remote-Server';
$l['import_db'] = 'Aktualisiere die Datenbank';
$l['insid_missing'] = 'Bitte geben Sie die Installations ID an';
$l['insid_incorrect'] = 'Installations ID ist ungültig';
$l['read_file'] = 'Konnte die Importdaten Datei nicht lesen';
$l['no_remote_import'] = 'Der Remote Import ist für diese Anwendung nicht unterstützt';
$l['wrong_ftp_path'] = 'Der angegebene FTP Pfad ist ungültig';

//Webuzo Backups and Restore
$l['not_permitted'] = 'This User is not permitted to run the script';
$l['no_option'] = 'Nothing to do';
$l['no_backup_dir'] = 'Backup Directory not present';
$l['backup_filename'] = 'Backup file name';
$l['create_tar'] = 'Creating the tar file';
$l['tar_error'] = 'There were some errors while creating the tar file';
$l['tar_created'] = 'tar file created';
$l['create_db'] = 'Creating DB backup';
$l['no_dbback_func'] = 'Backup function is not available';
$l['db_back_fail'] = 'Utility could not backup the DB';
$l['compress_sql'] = 'Compressing the SQL file';
$l['db_backup_filename'] = 'DB backup file name is';
$l['no_mysql'] = 'MySQL is not installed';
$l['skip_db_files'] = 'Skipping Database backup process';
$l['tar_extract'] = 'Extracting the tar file';
$l['err_tar_xtrct'] = 'There were some errors while extracting the tar file';
$l['db_restore_file'] = 'Restoring DB file';
$l['db_restore_err'] = 'Utility could not restore the DB';
$l['db_restore_done'] = 'Database successfully restored';
$l['skip_db_restore'] = 'Skipping Database restore process';
$l['no_exim'] = 'Exim is not installed';
$l['skip_exim_files'] = 'Skipping Exim files';
$l['no_bind'] = 'BIND is not installed';
$l['skip_bind_files'] = 'Skipping BIND files';
$l['no_backup_type'] = 'Backup type not specified';
$l['wrng_backup_type'] = 'Incorrect backup type specified';
$l['wrng_back_file'] = 'File specified is not a Backup file';
$l['strt_backup'] = 'Starting the Backup process';
$l['success_backup'] = 'Backup process completed';
$l['error_backup'] = 'Backup process completed with errors';
$l['exit_cli'] = 'Exiting CLI';
$l['no_file2restore'] = 'No File specified to restore';
$l['no_db_backup'] = 'DB backup file not found';
$l['chck_backup_exits'] = 'Checking if Backup file exists';
$l['strt_restore'] = 'Starting the Restore process';
$l['success_restore'] = 'Restore process completed';
$l['error_restore'] = 'Restore process completed with errors';
$l['send_email'] = 'Sending email to user';
$l['only_for_premium'] = 'This feature is only available to Premium license users';
$l['err_no_owner'] = "Owner is not provided.\n";
$l['err_invalid_file'] = "Invalid file name\n";
$l['acl_saved'] = 'Setting saved successfully';
$l['acl_errr'] = 'Could not save the setting';
$l['err_unzipping'] = 'Error occured while unzipping the files';
$l['invalid_import_file'] = 'Please provide a valid file to import settings';
$l['no_access_url'] = 'Could not access the source settings file';
$l['no_write_tmpfile'] = 'Could not write the temporary file';
$l['file_not_exist'] = 'File does not exist, please provide correct path';
$l['no_root_user'] = 'Only root user can import the admin settings';
$l['successfully_imported'] = 'Settings imported successfully';
$l['no_ins_found'] = 'No installation(s) found';

$l['cli_ftp_error'] = 'Error connectng to FTP server';
$l['err_fetch_file'] = 'Could not access the file uploaded to the domain';
$l['err_fetch_path'] = 'Could not fetch path from the data received';
$l['cli_no_remote_import'] = 'CLI Remote Import is not supported for this script';
$l['cli_wrong_ftp_path'] = 'FTP path is incorrect';
$l['cli_ftp_error-1'] = 'Unable to resolve Domain Name';
$l['cli_ftp_error-2'] = 'Unable to login with specified FTP details';
$l['cli_ftp_error-3'] = 'FTP Path does not exist';
$l['invalid_backup_location'] = 'Backup location submitted does not exist';
$l['invalid_access_token'] = 'Invalid Access Token. Please Re-Authorize '.APP.' Dropbox APP from the Edit Backup location page in '.APP.' enduser panel';
$l['insufficient_space'] = 'Your Dropbox account is full. Please free some space and attempt the backup after sometime';

$l['gdrive_err_init'] = 'There were some errors while initiating the backup on Google Drive!!';
$l['gdrive_err_end'] = 'There were some errors while committing backup to your Google Drive account!!';
$l['pass_decrpyt_fail'] = 'Password decryption failed.';
$l['ssh_conn_fail'] = 'SSH connection to the remote server failed';
$l['delete_temp_file'] = 'Deleting temporary backup file';
$l['ssh_conn_success'] = 'SSH connection successful';
$l['bckp_dir_notfound'] = 'Backup directory not found, creating';
$l['fail_bckp_dir'] = 'Failed to create remote backup directory';
$l['ssh_upload_start'] = 'Starting SSH upload of the backup file';
$l['ssh_upload_fail'] = 'SSH upload failed';
$l['ssh_upload_success'] = 'SSH upload successful';
$l['ssh_conn_close'] = 'Closing SSH connection';
$l['ftp_conn_fail'] = 'FTP connection failed';
$l['ftp_conn_success'] = 'FTP connection successful';
$l['ftp_change_dir'] = 'Changing to the FTP directory';
$l['ftp_upload_fail'] = 'FTP upload failed';
$l['ftp_upload_success'] = 'FTP upload successful';
$l['ftp_conn_close'] = 'Closing FTP connection';
$l['empty_server_list'] = 'Unable to get backup server list';
$l['ftp_upload_start'] = 'Starting FTP upload of the backup file';
$l['dwnlod_restore_fail'] = 'Unable to download the file for Restore';
$l['remote_del_fail'] = 'Unable to Delete the file on Remote Server';
$l['remote_del_success'] = 'Remote Backup file Deleted Successfully';
$l['no_server_id_filename'] = 'Backup Server ID and Filename not provided !';
$l['cd_backup_location_fail'] = 'Unable to change directory to the specified location';

$l['err_no_openssl'] = "Openssl extension is required to encrypt the password(s) with new encryption algorithm\n";
$l['err_no_mcrypt'] = "Mcrypt extension is required to decrypt the password(s) encrypted with old encryption algorithm\n";
$l['add_backup_file'] = 'Backup file added'; 
$l['err_include_extend'] = "\nFailed to include functions for Plugins/Theme Update";
$l['err_access_ins'] = "\nError accessing the installation &soft-1;\n Skipping plugins/theme upgrade for this installation";
$l['note_partial_backup'] = 'Partial Backup taken during Plugins/Theme Upgrade';
$l['err_partial_backup_fail'] = 'Partial Backup was not successful so aborting the plugins/theme upgrade process. Following are the details :';
$l['err_upgrade_extras'] = "\nThere were some errors while upgrading Theme and Plugins";
$l['upgraded_successfully_extras'] = "\nPlugins/Theme were upgraded successfully for : ";
$l['err_upgrade_restore_failed_extras'] = 'Failed to upgrade the plugins/theme AND also failed to restore from the backup created. Following are the details :';
$l['err_upgrade_restore_success_extras'] = 'Failed to upgrade the plugins/theme BUT successfully restored from the backup created. Following are the details :';
$l['err_cannot_autoupgrade_extras'] = "Auto upgrade for plugins/theme can not be performed for this control panel.\n";
$l['err_failed_attempt'] = "The Auto Upgrade Plugins/Theme failed last time so cannot attempt upgrade.\n";
$l['cant_create_dir'] = "Can\'t create directory ";
// import_webuzo.php
$l['no_server_ip'] = 'Server IP not provided.';
$l['no_server_pass'] = 'Server root password not provided.';
$l['no_server_port'] = 'Server port not provided';
$l['no_server_mysql_pass'] = 'Server mysql password not provided.';
$l['no_migrate_type'] = 'Migrate Type not provided.';
$l['invalid_migrate_type'] = 'Invalid Migrate Type.';
$l['migrate_finish'] = 'Finished Migrating Webuzo.';
$l['migrate_conf_finish'] = 'Finished migrating webuzo configurations.';
$l['migrate_user_account_finish'] = 'Finished migrating user accounts.';
$l['migrate_databases_finish'] = 'Finished migrating databases.';
$l['migrate_emails_finish'] = 'Finished migrating email accounts and email data.';
$l['migrate_ftp_finish'] = 'Finished migrating FTP.';
$l['mysql_not_same'] = 'MySQL version on both Webuzo server are not same.';
$l['webuzo_user_not_same'] = 'Webuzo Username on both Webuzo server are not same.';
$l['sshpass_installed'] = 'sshpass is already installed on your server.';
$l['remote_command_exec_fail'] = 'Execution of remote command failed.';
$l['migrate_command_failed'] = 'Some error occured while executing the command';
$l['conn_fail'] = 'Connection to Webuzo server failed.';

$l['cloning'] = 'Cloning ';
$l['staging'] = 'Staging ';
$l['pushtolive'] = 'Pushtolive ';
$l['cloning_complete'] = 'Cloning Completed.';
$l['staging_complete'] = 'Staging Completed.';
$l['pushtolive_complete'] = 'Pushing to Live Completed.';
$l['unzipping_files'] = 'Copying files and folders';
$l['prog_backingup'] = 'Backing Up ';
$l['panel_not_support'] = 'This panel does not support this utility.';

$l['checking_data'] = 'Checking the submitted data';
$l['prog_restoring'] = 'Restoring '; // Dont remove the trailing space
$l['res_dir'] = 'Restoring the Directory';
$l['res_db'] = 'Restoring the Database';
$l['res_datadir'] = 'Restoring the Data Directory';
$l['prog_restore_complete'] = 'Restore Completed.';
$l['read_archive'] = 'Reading the archive';
$l['pushtolive_backup_note'] = 'Backup created before pushing the site to live';

$l['license_refreshed'] = 'Your license has been refreshed !'; 
$l['updated_license'] = 'Updated license details are as follows :';
