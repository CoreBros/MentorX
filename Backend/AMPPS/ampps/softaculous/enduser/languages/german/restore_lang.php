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

$l['restoreerror'] = 'Es ist ein Fehler beim Entpacken der Sicherungsdateien aufgetreten';
$l['restoredatadir'] = 'Das Datenverzeichnis konnte nicht wieder hergestellt werden';
$l['restorewww'] = 'Das Datenverzeichnis konnte nicht wieder hergestellt werden';
$l['res_err_selectmy'] = 'Die Datenbank konnte nicht zum Wiederherstellen ausgewählt werden';
$l['err_myconn'] = 'Verbindung zur Datenbank konnte nicht hergestellt werden';
$l['err_db_create'] = 'Es ist ein Fehler beim Erstellen der Datenbank aufgetreten';
$l['off_backup_restore'] = 'Backup/Restore feature has been disabled by admin';
$l['no_backupinfo_file'] = 'Backup info file not found';
$l['no_backup_time'] = 'Backup time not found';
$l['instime_higher_than_btime'] = 'Installation time is higher than the Backup time';

//Theme Strings
$l['<title>'] = APP.' - Wiederherstellen';
$l['restorefile'] = 'Wiederherstellen von Sicherung';
$l['restore_dir'] = 'Wiederherstellungs Verzeichnis';
$l['restore_dir_exp'] = 'Wenn diese Option gesetzt ist, wird das gesamte Verzeichnis wiederhergestellt';
$l['restore_datadir'] = 'Datenverzeichnis wiederherstellen';
$l['restore_datadir_exp'] = 'Wenn diese Option gesetzt ist, wird das gesamte Daten Verzeichnis wiederhergestellt';
$l['restore_db'] = 'Datenbank wiederherstellen';
$l['restore_db_exp'] = 'Wenn diese Option gesetzt ist, wird die Datenbank ebenfalls wiederhergestellt';
$l['restore_ins'] = 'Installation wiederherstellen';
$l['restore'] = 'Ihr Backup wurde erfolgreich wiederhergestellt';
$l['confirm_restore'] = 'Sind Sie sicher, dass sie die Installation wiederherstellen wollen?';
$l['return'] = 'Zurück zur Übersicht';
$l['restore_wwwdir'] = 'Web Verzeichnis wiederherstellen';
$l['restore_wwwdir_exp'] = 'Wenn diese Option gesetzt ist, wird das Web Verzeichnis wiederhergestellt';
$l['checking_data'] = 'Überprüfe die angegebenen Daten';
$l['res_db'] = 'stelle Datenbank wieder her';
$l['res_dir'] = 'stelle das Verzeichnis wieder her';
$l['res_datadir'] = 'stelle Datenverzeichnis wieder her';
$l['finishing_process'] = 'Backup wiederhergestellt';
$l['wait_note'] = '<b>HINWEIS:</b> Dies kann einige Minuten in Anspruch nehmen. Bitte verlassen Sie diese Seite NICHT, bis der Status Balken 100% zeigt.';
$l['restoring'] = 'Ihre Sicherung wird im Hintergrund wiederhergestellt. Sie werden per E-Mail benachrichtigt, sobald der Vorgang abgeschlossen ist. Sie können den Wiederherstellungsprozess auf der Seite <a href="'.$globals['index'].'act=eu_tasklist"> Aufgabenliste </a> verfolgen.';
$l['prog_restoring'] = 'Sichere folgende Installation zurück '; // Dont remove the trailing space
$l['prog_restore_complete'] = 'Rücksicherung vollständig.';
$l['no_restore_functions'] = 'Die RESTORE FUNCTIONS Datei konnte nicht gefunden werden! Bitte melden Sie dies dem Server Administrator.';
$l['backup_file_empty'] = 'Backup file is empty';
$l['db_not_exist'] = 'Database file does not exist';
$l['db_empty'] = 'The database file is empty';

$l['read_archive'] = 'Reading the archive';

$l['no_backup_file'] = 'Backup file not present';

$l['wpc_not_in_free'] = 'Remote Backups cannot be restored in the Free version of '.APP.'! You can purchase the premium plan <a href="'.$globals['index'].'act=wpc_plans">here</a> to continue using them.';

$l['wpc_return'] = 'Return to Backups';

$l['ampps_notify_premium'] = 'This feature is available in the premium version of AMPPS. Please purchase <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';