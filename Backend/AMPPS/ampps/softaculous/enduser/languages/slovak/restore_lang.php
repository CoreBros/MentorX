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

$l['restoreerror'] = 'Vyskytla sa chyba pri rozbaľovaní súborov zálohy';
$l['restoredatadir'] = 'Nebolo možné obnoviť priečinok dát';
$l['restorewww'] = 'Nebolo možné obnoviť priečinok Web';
$l['res_err_selectmy'] = 'Nebolo možné vybrať databázu pre obnovanie';
$l['err_myconn'] = 'Nebolo možné spojiť sa s databázou';
$l['err_db_create'] = 'Vyskytla sa chyba pri vytváraní databázy';
$l['off_backup_restore'] = 'Backup/Restore feature has been disabled by admin';
$l['no_backupinfo_file'] = 'Backup info file not found';
$l['no_backup_time'] = 'Backup time not found';
$l['instime_higher_than_btime'] = 'Installation time is higher than the Backup time';

//Theme Strings
$l['<title>'] = APP.' - Restore';
$l['restorefile'] = 'Obnoviť zo zálohy';
$l['restore_dir'] = 'Obnoviť priečinok';
$l['restore_dir_exp'] = 'Ak zaškrtnete toto, celý priečinok bude obnovený';
$l['restore_datadir'] = 'Obnoviť priečinok dát';
$l['restore_datadir_exp'] = 'Ak zaškrtnuté, priečinok dát bude obnovený';
$l['restore_db'] = 'Obnoviť databázu';
$l['restore_db_exp'] = 'Ak zaškrtnuté, bude obnovená aj databáza';
$l['restore_ins'] = 'Obnoviť inštaláciu';
$l['restore'] = 'Vaša záloha bola úspešne obnovená';
$l['confirm_restore'] = 'Ste si istý, že chcete obnoviť inštaláciu ?';
$l['return'] = 'Spať na prehľad';
$l['restore_wwwdir'] = 'Obnoviť priečinok Web';
$l['restore_wwwdir_exp'] = 'Ak zaškrtnuté, priečinok web bude obnovený';
$l['checking_data'] = 'Kontrola zadaných údajov';
$l['res_db'] = 'Obnovovanie databázy';
$l['res_dir'] = 'Obnovovanie priečinka';
$l['res_datadir'] = 'Obnovovanie priečinka dát';
$l['finishing_process'] = 'Záloha obnovená';
$l['wait_note'] = '<b>UPOZORNENIE:</b> Toto môže trvať 3-4 minúty. Prosím, neopúšťajte stránku, pokým ukazovateľ nedosiahne 100%';
$l['restoring'] = 'Záloha sa obnovuje na pozadí. Po jeho dokončení vám bude oznámené e-mailom. Proces obnovenia môžete sledovať na stránke <a href="'.$globals['index'].'act=eu_tasklist"> Zoznam úloh </a>.';
$l['prog_restoring'] = 'Obnovovanie'; // Dont remove the trailing space
$l['prog_restore_complete'] = 'Obnova dokončená.';
$l['no_restore_functions'] = 'Súbor RESTORE FUNCTIONS nebol nájdený! Prosím, oznámte to správcovi servera.';
$l['backup_file_empty'] = 'Backup file is empty';
$l['db_not_exist'] = 'Database file does not exist';
$l['db_empty'] = 'The database file is empty';

$l['read_archive'] = 'Reading the archive';

$l['no_backup_file'] = 'Backup file not present';

$l['wpc_not_in_free'] = 'Remote Backups cannot be restored in the Free version of '.APP.'! You can purchase the premium plan <a href="'.$globals['index'].'act=wpc_plans">here</a> to continue using them.';

$l['wpc_return'] = 'Return to Backups';

$l['ampps_notify_premium'] = 'This feature is available in the premium version of AMPPS. Please purchase <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';