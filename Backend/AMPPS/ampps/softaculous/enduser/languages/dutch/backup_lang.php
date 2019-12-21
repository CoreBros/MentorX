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

$l['no_ins'] = 'Er is geen installatie opgegeven';
$l['wrong_ins_title'] = 'Er is geen geldig installatie ID opgegeven';
$l['wrong_ins'] = 'Het opgegeven installatie ID is niet geldig';
$l['backup_ftp_error'] = 'Could not create Backup Directory <b>&soft-1;</b>. Please create manually and try again.';
$l['err_backup'] = 'Could not create Backup.';
$l['no_space_backup'] = 'You do not have sufficient space to backup this installation!';
$l['err_notelength'] = 'Backup note must be less than 255 characters';
$l['off_backup_restore'] = 'Backup/Restore feature has been disabled by admin';

$l['cant_backup_dir'] = 'Er is een fout opgetreden bij het backuppen van de bestanden.';
$l['could_not_read'] = 'Er is een fout opgetreden bij het openen van het bestand/directory <b>&soft-1;</b> Check de bestand en/of folder permissies.';
$l['cant_datadir_dir'] = 'Er zijn fouten opgetreden bij het toevoegen van de data directory.';
$l['cant_wwwdir'] = 'Er zijn fouten opgetreden bij het toevoegen van de web directory.';
$l['cant_backup_db'] = 'E zijn fouten opgetreden bij het maken van de database backup.';
$l['err_perm_file'] = 'Er zijn fouten opgetreden bij het maken van het permissie bestand';
$l['err_dataperm_file'] = 'Er zijn fouten opgetreden bij het maken van het permissie bestand voor de data directory';
$l['err_wwwperm_file'] = 'Er zijn fouten opgetreden bij het maken van het permissie bestand voor de web directory';
$l['save_dir_perms'] = 'Er zijn fouten opgetreden bij het opslaan van de bestands permissies';
$l['save_datadir_perms'] = 'Er zijn fouten opgetreden bij het opslaan van de data folder bestands permissies';
$l['save_www_perms'] = 'Er zijn fouten opgetreden bij het opslaan van de web directory bestands permissies';
$l['cant_connect_mysql'] = 'Er kan geen verbinding gemaakt worden met de database.';

//Theme Strings
$l['<title>'] = APP.' - Backup';
$l['info'] = 'Informatie';
$l['ins_softname'] = 'Script';
$l['ins_num'] = 'Installation ID';
$l['ins_ver'] = 'Versie';
$l['ins_time'] = 'Tijdstip installati';
$l['ins_path'] = 'Path';
$l['ins_wwwdir'] = 'Web directory path';
$l['ins_url'] = 'URL';
$l['ins_db'] = 'Database naam';
$l['ins_dbuser'] = 'Database gebruikersnaam';
$l['ins_dbpass'] = 'Database wachtwoord';
$l['ins_dbhost'] = 'Database hostnaam';
$l['backup_ins'] = 'Backup een script';
$l['backup_dir'] = 'Backup directory';
$l['backup_dir_exp'] = 'Via deze optie kunt u aangeven dat de gehele script directory moet worden opgenomen in de backup.';
$l['backup_db'] = 'Backup database';
$l['backup_db_exp'] = 'Via deze optie kunt u aangeven dat de database moet worden opgenomen in de backup.';
$l['backup_conf'] = 'De backup procedure kan enige tijd in beslag nemen. Sluit deze pagina niet tijdens het backup proces.';
$l['backedup'] = 'Het backup proces is succesvol verlopen. <br />U kunt de backup downloaden via de <a href="'.$globals['index'].'act=backups">Backups en herstellen</a> pagina.';
$l['backup_ins'] = 'Backup script';
$l['backup_datadir'] = 'Backup data directory';
$l['backup_datadir_exp'] = 'Via deze optie kunt u aangeven dat de data directory moet worden opgenomen in de backup.';
$l['ins_datadir'] = 'Data directory';
$l['return'] = 'Terug naar het overzicht';
$l['ins_cron_command'] = 'Cron commando';
$l['backup_wwwdir'] = 'Backup web directory';
$l['backup_wwwdir_exp'] = 'Via deze optie kunt u aangeven dat de web directory moet worden opgenomen in de backup.';
$l['checking_data'] = 'Controlleren van de opgegeven gegevens';
$l['backingup_db'] = 'Database backup wordt gemaakt';
$l['backingup_dir'] = 'Directory backup wordt gemaakt';
$l['backingup_datadir'] = 'Data directory wordt gemaakt';
$l['finishing_process'] = 'Bezig met voltooien backup';
$l['wait_note'] = '<b>Let op:</b> Dit proces kan enkele minuten duren. U kunt deze pagina tijdentijds verlaten !';
$l['backingup'] = 'Het backup proces zal worden voltooid als achtergrond proces. U ontvangt een e-mail nadat het backup proces voltooid is.';
$l['check_email'] = 'Een e-mail wordt verzonden zodra het backup proces voltooid is.';
$l['prog_backingup'] = 'Backup wordt gemaakt '; // Dont remove the trailing space
$l['prog_backup_complete'] = 'Backup proces voltooid.';
$l['backup_note'] = 'Backup aantekeningen';
$l['backup_note_exp'] = 'U kunt aantekeningen opslaan over dit backup proces';
$l['backup_operation'] = 'Select Backup Operation(s)';
$l['backups_expire'] = 'Your backups will be automatically purged after <b>&soft-1;</b> days of the backup creation.';
$l['err_max_backups'] = 'You have reached the maximum number of (<b>&soft-1;</b>) backups allowed. Please delete unwanted backups to be able to take a new backup.';
$l['backup_notes'] = 'Backup created by '.APP.' auto backup';
$l['max_backups'] = 'You currently have <b>&soft-1;</b> backups in your account. Your maximum backups limit is <b>&soft-2;</b>.';

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