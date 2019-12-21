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

$l['restoreerror'] = 'There was some error while unzipping the backup files';
$l['restoredatadir'] = 'Unable to restore data directory';
$l['restorewww'] = 'Unable to restore Web directory';
$l['res_err_selectmy'] = 'Could not select the database to restore';
$l['err_myconn'] = 'Could not connect to the database';
$l['err_db_create'] = 'Error occured while creating Database';
$l['off_backup_restore'] = 'Backup/Restore feature has been disabled by admin';
$l['no_backupinfo_file'] = 'Backup info file not found';
$l['no_backup_time'] = 'Backup time not found';
$l['instime_higher_than_btime'] = 'Installation time is higher than the Backup time';

//Theme Strings
$l['<title>'] = APP.' - Restore';
$l['restorefile'] = 'Restaurer depuis une sauvegarde';
$l['restore_dir'] = 'Restaurer le répertoire';
$l['restore_dir_exp'] = 'Si vous cochez cette case, le dossier entier sera restauré';
$l['restore_datadir'] = 'Restore Data Directory';
$l['restore_datadir_exp'] = 'If checked the Data directory will be restored';
$l['restore_db'] = 'Restaurer la base de données';
$l['restore_db_exp'] = 'Si cochée, la base de données sera également restaurée';
$l['restore_ins'] = 'Restaurer l\'installation';
$l['restore'] = 'Votre sauvegarde a été restaurée avec succès';
$l['confirm_restore'] = 'Voulez-vous vraiment restaurer l\'installation?';
$l['return'] = 'Retour au sommaire';
$l['restore_wwwdir'] = 'Restore Web Directory';
$l['restore_wwwdir_exp'] = 'If checked the Web directory will be restored';
$l['checking_data'] = 'Checking the submitted data';
$l['res_db'] = 'Restoring the Database';
$l['res_dir'] = 'Restoring the Directory';
$l['res_datadir'] = 'Restoring the Data Directory';
$l['finishing_process'] = 'Backup Restored';
$l['wait_note'] = '<b>NOTE:</b> Cela peut prendre 3-4 minutes. S\'il vous plaît ne quitter pas cette page jusqu\'à ce que la barre de progression atteint 100%';
$l['restoring'] = 'Votre sauvegarde est en cours de restauration en arrière-plan. Vous serez averti par email une fois que c\'est terminé. Vous pouvez suivre le processus de restauration à partir de la page <a href="'.$globals['index'].'act=eu_tasklist"> Liste des tâches </a>.';
$l['prog_restoring'] = 'Restauration '; // Dont remove the trailing space
$l['prog_restore_complete'] = 'Restoration Complétée.';
$l['no_restore_functions'] = 'Le fichier RESTORE FUNCTIONS n\'a pas pu être trouvé! Veuillez en informer l\'administrateur du serveur.';
$l['backup_file_empty'] = 'Backup file is empty';
$l['db_not_exist'] = 'Database file does not exist';
$l['db_empty'] = 'The database file is empty';

$l['read_archive'] = 'Reading the archive';

$l['no_backup_file'] = 'Backup file not present';

$l['wpc_not_in_free'] = 'Remote Backups cannot be restored in the Free version of '.APP.'! You can purchase the premium plan <a href="'.$globals['index'].'act=wpc_plans">here</a> to continue using them.';

$l['wpc_return'] = 'Return to Backups';

$l['ampps_notify_premium'] = 'This feature is available in the premium version of AMPPS. Please purchase <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';