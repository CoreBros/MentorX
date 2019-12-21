<?php

//////////////////////////////////////////////////////////////
//===========================================================
// backup_lang.php
//===========================================================
// SOFTACULOUS 
// Versione : 1.1
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

$l['no_ins'] = 'Non è stata inviata alcuna installazione';
$l['wrong_ins_title'] = 'ID d\'installazione errato';
$l['wrong_ins'] = 'L\'ID d\'installazione fornita è inesistente';
$l['backup_ftp_error'] = 'Creazione della directory di backup <b>&soft-1;</b> non riuscita. Ti preghiamo di creare la directory manualmente e quindi riprovare.';
$l['err_backup'] = 'Creazione del backup non riuscita.';
$l['no_space_backup'] = 'Non hai spazio sufficiente per eseguire il backup di questa installazione!';
$l['err_notelength'] = 'La nota di backup deve contenere almeno 255 caratteri';
$l['off_backup_restore'] = 'Backup/Restore feature has been disabled by admin';

$l['cant_backup_dir'] = 'L\'utilità di backup non è stato in grado di eseguire il backup dei file.';
$l['could_not_read'] = 'Siamo spiacenti, Softaculous non è in grado di leggere il seguente file/directory <b>&soft-1;</b>. Per continuare ad utilizzare l\'utilità di backup, ti preghiamo di renderlo leggibile.';
$l['cant_datadir_dir'] = 'Si sono verificati diversi errori durante l\'aggiunta della directory dei dati.';
$l['cant_wwwdir'] = 'Si sono verificati diversi errori durante l\'aggiunta della web directory.';
$l['cant_backup_db'] = 'Si sono verificati diversi errori durante l\'aggiunta del database al backup.';
$l['err_perm_file'] = 'Si sono verificati degli errori durante la creazione di un file con permessi';
$l['err_dataperm_file'] = 'Si sono verificati degli errori durante la creazione di un file con permessi della directory dei dati';
$l['err_wwwperm_file'] = 'Si sono verificati degli errori durante la creazione di un file con permessi della WEB directory';
$l['save_dir_perms'] = 'Impossibile salvare i permessi del file';
$l['save_datadir_perms'] = 'Impossibile salvare i permessi della directory dei dati';
$l['save_www_perms'] = 'Impossibile salvare i permessi della web directory';
$l['cant_connect_mysql'] = 'Connessione al database non riuscita, verifica il nome utente e la password del tuo database. Se modificati, ti preghiamo di aggiornare i dettagli nella sezione Installazioni Softaculous, utilizzando il comando modificare dettagli.';

//Theme Strings
$l['<title>'] = APP.' - Backup';
$l['info'] = 'Informazioni';
$l['ins_softname'] = 'Software';
$l['ins_num'] = 'Numero installazione';
$l['ins_ver'] = 'Versione';
$l['ins_time'] = 'Tempo installazione';
$l['ins_path'] = 'Percorso';
$l['ins_wwwdir'] = 'Percorso della Web directory';
$l['ins_url'] = 'URL';
$l['ins_db'] = 'Nome del database';
$l['ins_dbuser'] = 'Utente del database';
$l['ins_dbpass'] = 'Password del database';
$l['ins_dbhost'] = 'Host del database';
$l['backup_ins'] = 'Backup di un\'installazione';
$l['backup_dir'] = 'Directory di backup';
$l['backup_dir_exp'] = 'Se spunti questo, sarà eseguito il backup di tutta la cartella';
$l['backup_db'] = 'Database di backup';
$l['backup_db_exp'] = 'Se spuntato, si farà anche il backup del database';
$l['backup_conf'] = 'La durata di esecuzione del backup dipenderà dal volume dei dati. Ti preghiamo di non chiudere la pagina web o passare ad una pagina nuova.';
$l['backedup'] = 'The backup was created successfully. You can download it da the <a href="'.$globals['index'].'act=backups">Backup</a> page.';
$l['backup_ins'] = 'Backup installazione';
$l['backup_datadir'] = 'Backup Data directory';
$l['backup_datadir_exp'] = 'Se spuntato, la directory dei dati sarà salvata';
$l['ins_datadir'] = 'Directory dei dati';
$l['return'] = 'Torna alla visione d\'insieme';
$l['ins_cron_command'] = 'Comando cron';
$l['backup_wwwdir'] = 'Backup web directory';
$l['backup_wwwdir_exp'] = 'Se spuntato, la web directory sarà salvata.';
$l['checking_data'] = 'Verifica in corso dei dati inoltrati';
$l['backingup_db'] = 'Backup del database in corso';
$l['backingup_dir'] = 'Backup della directory in corso';
$l['backingup_datadir'] = 'Backup della directory dei dati in corso';
$l['finishing_process'] = 'Backup quasi finito';
$l['wait_note'] = '<b>NOTE:</b> L\'operazione in esecuzione potrebbe richiedere 3-4 minuti. Adesso puoi uscire dalla pagina!';
$l['backingup'] = 'The backup is being created in the background. You will be notified by email once its completed. After the backup is completed, you can download it da the <a href="'.$globals['index'].'act=backups">Backup</a> page.';
$l['check_email'] = 'Per conoscere lo stato del backup, ti preghiamo di verificare la tua casella di posta elettronica';
$l['prog_backingup'] = 'Backup in corso '; // Dont remove the trailing space
$l['prog_backup_complete'] = 'Backup completato.';
$l['backup_note'] = 'Nota di backup';
$l['backup_note_exp'] = 'Puoi salvare una nota per riferimento futuro.';
$l['backup_operation'] = 'Selezionare operazione(i) di backup';
$l['backups_expire'] = 'I tuoi backup saranno eliminati automaticamente dopo <b>&soft-1;</b> giorni dalla creazione del backup.';
$l['err_max_backups'] = 'Hai raggiunto il numero massimo di (<b>&soft-1;</b>) backup permessi. Per eseguire un nuovo backup, elimina i backup indesiderati.';
$l['backup_notes'] = 'Backup creato dal backup automatico '.APP.'';
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