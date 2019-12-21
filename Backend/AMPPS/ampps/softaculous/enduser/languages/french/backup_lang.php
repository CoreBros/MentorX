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

$l['no_ins'] = 'Aucune installation n\'a été soumise';
$l['wrong_ins_title'] = 'ID d\'installation erroné';
$l['wrong_ins'] = 'L\'ID d\'installation que vous avez soumis n\'existe pas';
$l['backup_ftp_error'] = 'Impossible de créer le répertoire de sauvegarde <b>&soft-1;</b>. Veuillez créer manuellement et réessayer.';
$l['err_backup'] = 'Impossible de créer la sauvegarde.';
$l['no_space_backup'] = 'Vous n\'avez pas suffisamment d\'espace pour sauvegarder cette installation!';
$l['err_notelength'] = 'La note de sauvegarde doit avoir moins de 255 caractères';
$l['off_backup_restore'] = 'Backup/Restore feature has been disabled by admin';

$l['cant_backup_dir'] = 'L\'utilitaire de sauvegarde n\'a pas pu sauvegarder les fichiers.';
$l['could_not_read'] = 'Oops Softaculous n\'a pas pu lire le fichier / répertoire suivant <b>&soft-1;</b> Veuillez le rendre lisible pour continuer à utiliser l\'utilitaire de sauvegarde.';
$l['cant_datadir_dir'] = 'Il y a eu des erreurs lors de l\'ajout du répertoire de données.';
$l['cant_wwwdir'] = 'Il y a eu des erreurs lors de l\'ajout du répertoire Web.';
$l['cant_backup_db'] = 'Il y a eu des erreurs lors de l\'ajout de la base de données à la sauvegarde.';
$l['err_perm_file'] = 'There were errors while trying to make a file of permissions';
$l['err_dataperm_file'] = 'There were errors while trying to make a file of permissions of the data directory';
$l['err_wwwperm_file'] = 'There were errors while trying to make a file of permissions of the WEB directory';
$l['save_dir_perms'] = 'Could not save the file permissions';
$l['save_datadir_perms'] = 'Could not save the permissions of the data directory';
$l['save_www_perms'] = 'Impossible d\'enregistrer les autorisations du répertoire Web';
$l['cant_connect_mysql'] = 'Could not connect to database, please check the Username/Password of your database. If changed, please update the details in Softaculous installations using Edit Details.';

//Theme Strings
$l['<title>'] = APP.' - Backup';
$l['info'] = 'Info';
$l['ins_softname'] = 'Software';
$l['ins_num'] = 'Numéro d\'installation';
$l['ins_ver'] = 'Version';
$l['ins_time'] = 'Temps de l\'installation';
$l['ins_path'] = 'Path';
$l['ins_wwwdir'] = 'Web Directory Path';
$l['ins_url'] = 'URL';
$l['ins_db'] = 'Nom de la base de données';
$l['ins_dbuser'] = 'Nom utilisateur de la base de données';
$l['ins_dbpass'] = 'Mot de passe de la base de données';
$l['ins_dbhost'] = 'Hôte de base de données';
$l['backup_ins'] = 'Backup a Installation';
$l['backup_dir'] = 'Sauvegarde du répertoire';
$l['backup_dir_exp'] = 'Si vous cochez cette case, le dossier entier sera sauvegardé';
$l['backup_db'] = 'Sauvegarde de la base de données';
$l['backup_db_exp'] = 'Si cette case est cochée, la base de données sera également sauvegardée';
$l['backup_conf'] = 'The backup may take some time depending on the data. Please do not close the webpage nor navigate to another page.';
$l['backedup'] = 'La sauvegarde a été créée avec succès. Vous pouvez y accéder à partir de la <a href="'.$globals['index'].'act=backups">page Sauvegardes</a>.';
$l['backup_ins'] = 'Sauvegarder l\'installation';
$l['backup_datadir'] = 'Backup Data Directory';
$l['backup_datadir_exp'] = 'Si cette case est cochée, le répertoire Données sera enregistré.';
$l['ins_datadir'] = 'Répertoire des données';
$l['return'] = 'Retour au sommaire';
$l['ins_cron_command'] = 'Commande Cron';
$l['backup_wwwdir'] = 'Sauvegarde du répertoire Web';
$l['backup_wwwdir_exp'] = 'Si cette case est cochée, le répertoire Web sera enregistré.';
$l['checking_data'] = 'Vérification des données soumises';
$l['backingup_db'] = 'Sauvegarde de la base de données';
$l['backingup_dir'] = 'Sauvegarde du répertoire';
$l['backingup_datadir'] = 'Sauvegarde de l\'annuaire de données';
$l['finishing_process'] = 'Finalisation de la sauvegarde';
$l['wait_note'] = '<b>NOTE:</b> Cela peut prendre 3-4 minutes. Vous pouvez quitter cette page si vous le souhaitez!';
$l['backingup'] = 'La sauvegarde est en cours de création en arrière-plan. Vous serez avisé par courriel une fois que celui-ci aura été rempli. Une fois la sauvegarde terminée, vous pouvez y accéder à partir de la <a href="'.$globals['index'].'act=backups">page Sauvegardes</a>.';
$l['check_email'] = 'Veuillez vérifier votre email pour connaître l\'état de la sauvegarde';
$l['prog_backingup'] = 'Sauvegarde '; // Dont remove the trailing space
$l['prog_backup_complete'] = 'Sauvegarde terminée.';
$l['backup_note'] = 'Note';
$l['backup_note_exp'] = 'Vous pouvez enregistrer une note à titre de référence';
$l['backup_operation'] = 'Prération de sauvegarde(s)';
$l['backups_expire'] = 'Vos sauvegardes seront automatiquement purgées après <b>&soft-1;</b> jours de création de la sauvegarde.';
$l['err_max_backups'] = 'Vous avez atteint le nombre maximum de (<b>&soft-1;</b>) sauvegardes autorisées. Veuillez supprimer les sauvegardes indésirables pour pouvoir prendre une nouvelle sauvegarde.';
$l['backup_notes'] = 'Backup created by '.APP.' auto backup';
$l['max_backups'] = 'Vous disposez actuellement de <b>&soft-1;</b> sauvegarde(s) dans votre compte. La limite maximale de vos sauvegardes est de <b>&soft-2;</b>.';

$l['no_backup_functions'] = 'Impossible de trouver le fichier FONCTIONS DE SAUVEGARDE! Veuillez en informer l\'administrateur du serveur.';
$l['no_dir_exists'] = 'Le répertoire d\'installation n\'existe pas.';
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