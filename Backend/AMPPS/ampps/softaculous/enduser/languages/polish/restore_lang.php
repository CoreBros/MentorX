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

$l['restoreerror'] = 'Pojawił się błąd przy rozpakowaniu plików backupu';
$l['restoredatadir'] = 'Nie można przywrócić katalogu danych';
$l['restorewww'] = 'Nie można przywrócić katalogu Web';
$l['res_err_selectmy'] = 'Nie można wybrać bazy danych do przywrócenia';
$l['err_myconn'] = 'Nie można połączyć się z bazą danych';
$l['err_db_create'] = 'Wystąpił błąd podczas tworzenia bazy danych';
$l['off_backup_restore'] = 'Backup/Restore feature has been disabled by admin';
$l['no_backupinfo_file'] = 'Backup info file not found';
$l['no_backup_time'] = 'Backup time not found';
$l['instime_higher_than_btime'] = 'Installation time is higher than the Backup time';

//Theme Strings
$l['<title>'] = APP.' - Restore';
$l['restorefile'] = 'Przywróć z backupu';
$l['restore_dir'] = 'Przywróć katalog';
$l['restore_dir_exp'] = 'Jeśli zaznaczysz tą opcję zostanie usunięty cały katalog';
$l['restore_datadir'] = 'Przywróć katalog danych';
$l['restore_datadir_exp'] = 'Jeśli ta opcja będzie zaznaczona, katalog danych będzie przywrócony';
$l['restore_db'] = 'Przywróć bazę danych';
$l['restore_db_exp'] = 'Jeśli ta opcja będzie zaznaczona, baza danych będzie przywrócona';
$l['restore_ins'] = 'Przywróć instalację';
$l['restore'] = 'Backup został pomyślnie przywrócony';
$l['confirm_restore'] = 'Czy na pewno chcesz przywrócić instalację?';
$l['return'] = 'Powrót do przegladu';
$l['restore_wwwdir'] = 'Przywróć katalog Web';
$l['restore_wwwdir_exp'] = 'Jeśli opcja jest zaznaczona katalogu Web zostanie przywrócony';
$l['checking_data'] = 'Sprawdzenia zatwierdzonych danych';
$l['res_db'] = 'Przywracanie bazy danych';
$l['res_dir'] = 'Przywracanie katalogu';
$l['res_datadir'] = 'Przywracanie katalogu danych';
$l['finishing_process'] = 'Przywrócone backupy';
$l['wait_note'] = '<b>Uwaga:</b> To może zająć 3-4 minuty. Prosimy nie zamykać tej strony do momentu, aż pasek postępu zapełni się w 100%';
$l['restoring'] = 'Twoja kopia zapasowa jest przywracana w tle. Zostaniesz powiadomiony e-mailem po jego zakończeniu. Możesz śledzić proces przywracania na <a href="'.$globals['index'].'act=eu_tasklist"> stronie Lista zadań </a>.';
$l['prog_restoring'] = 'Przywracanie'; // Dont remove the trailing space
$l['prog_restore_complete'] = 'Przywracanie ukończone.';
$l['no_restore_functions'] = 'Plik FUNKCJE PRZYWRACANIA nie został odnaleziony! Prosimy zgłosić to do administratora serwera.';
$l['backup_file_empty'] = 'Backup file is empty';
$l['db_not_exist'] = 'Database file does not exist';
$l['db_empty'] = 'The database file is empty';

$l['read_archive'] = 'Reading the archive';

$l['no_backup_file'] = 'Backup file not present';

$l['wpc_not_in_free'] = 'Remote Backups cannot be restored in the Free version of '.APP.'! You can purchase the premium plan <a href="'.$globals['index'].'act=wpc_plans">here</a> to continue using them.';

$l['wpc_return'] = 'Return to Backups';

$l['ampps_notify_premium'] = 'This feature is available in the premium version of AMPPS. Please purchase <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';