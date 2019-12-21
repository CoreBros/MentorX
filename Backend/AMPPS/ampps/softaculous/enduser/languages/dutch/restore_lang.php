<?php

//////////////////////////////////////////////////////////////
//===========================================================
// restore_lang.php
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

$l['restoreerror'] = 'Er is een fout opgetreden bij het uitpakken van de bestanden';
$l['restoredatadir'] = 'Er is een fout opgetreden bij het hetstellen van de data directory';
$l['restorewww'] = 'Er is een fout opgetreden bij het herstellen van de web directory';
$l['res_err_selectmy'] = 'Er is een fout opgetreden bij het selecteren van de database';
$l['err_myconn'] = 'Er kan geen verbinding worden gemaakt met de database';
$l['err_db_create'] = 'Er is een fout opgetreden bij het aanmaken van de database';
$l['off_backup_restore'] = 'Backup/Restore feature has been disabled by admin';
$l['no_backupinfo_file'] = 'Backup info file not found';
$l['no_backup_time'] = 'Backup time not found';
$l['instime_higher_than_btime'] = 'Installation time is higher than the Backup time';

//Theme Strings
$l['<title>'] = APP.' - Backup terug plaatsen';
$l['restorefile'] = 'Backup terug plaatsen';
$l['restore_dir'] = 'Herstel directory';
$l['restore_dir_exp'] = 'Via deze optie kunt aangeven dat u de backup van de directory met alle bestanden van het script wilt terug plaatsten.';
$l['restore_datadir'] = 'Herstel data directory';
$l['restore_datadir_exp'] = 'Via deze optie kunt u aangeven dat u de backup van de data directory wilt terug plaatsen.';
$l['restore_db'] = 'Herstel database';
$l['restore_db_exp'] = 'Via deze optie kunt u aangeven dat de backup van de database wordt terug geplaatst.';
$l['restore_ins'] = 'Plaats backup terug';
$l['restore'] = 'De backup is succesvol terug geplaatst';
$l['confirm_restore'] = 'Weet u zeker dat u de backup terug wilt plaatsen?';
$l['return'] = 'Terug naar het overzicht';
$l['restore_wwwdir'] = 'Herstel web directory';
$l['restore_wwwdir_exp'] = 'Via deze optie kunt u aangeven dat u de backup van de web directory wilt terug plaatsen.';
$l['checking_data'] = 'Bezig met controleren van de ingevoerde data';
$l['res_db'] = 'Bezig met herstellen van de database';
$l['res_dir'] = 'Bezig met het herstellen van de directories';
$l['res_datadir'] = 'Bezig met het herstellen van de data directory';
$l['finishing_process'] = 'Backup terug geplaatst';
$l['wait_note'] = '<b>Let op:</b> Deze actie kan enkele minuten duren. Sluit deze pagina niet totdat de proces bar 100% aangeeft';
$l['restoring'] = 'Uw back-up wordt op de achtergrond hersteld. U wordt per e-mail op de hoogte gebracht zodra het is voltooid. U kunt het herstelproces volgen via de pagina <a href="'.$globals['index'].'act=eu_tasklist"> Takenlijst </a>.';
$l['prog_restoring'] = 'Herstellen '; // Dont remove the trailing space
$l['prog_restore_complete'] = 'Backup proces voltooid.';
$l['no_restore_functions'] = 'The RESTORE FUNCTIONS file could not be found! Please report this to the server administrator.';
$l['backup_file_empty'] = 'Backup file is empty';
$l['db_not_exist'] = 'Database file does not exist';
$l['db_empty'] = 'The database file is empty';

$l['read_archive'] = 'Reading the archive';

$l['no_backup_file'] = 'Backup file not present';

$l['wpc_not_in_free'] = 'Remote Backups cannot be restored in the Free version of '.APP.'! You can purchase the premium plan <a href="'.$globals['index'].'act=wpc_plans">here</a> to continue using them.';

$l['wpc_return'] = 'Return to Backups';

$l['ampps_notify_premium'] = 'This feature is available in the premium version of AMPPS. Please purchase <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';