<?php

//////////////////////////////////////////////////////////////
//===========================================================
// remove_lang.php
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

$l['no_ins'] = 'Non &egrave; stata inserita nessuna installazione';
$l['wrong_ins_title'] = 'L\'ID dell\'installazione &egrave; errato';
$l['wrong_ins'] = 'L\'ID dell\'installazione inserito non esiste';
$l['cant_remove_dir'] = 'La Cartella non pu&ograve; essere eliminata, dal momento che si tratta della Cartella HOME. Si prega di deselezionare l\'opzione <b>Cancella Cartella</b> per continuare senza rimuovere la cartella.';
$l['cant_remove_wwwdir'] = 'La WEB directory non può essere eliminata in quanto è la home directory. Per continuare senza rimuovere la web directory, deselezionare l\'opzione <b>Rimuovere WEB Directory</b>.';
$l['mail_rem_ins'] = 'L\'installazione di &soft-1; &egrave; stata rimossa. Di seguito i dettagli dell\'installazione: ';
$l['mail_path'] = 'Percorso';
$l['mail_url'] = 'URL';
$l['mail_db'] = 'database MySQL';
$l['mail_dbuser'] = 'Utente DB MySQL';
$l['mail_dbhost'] = 'Host DB MySQL';
$l['mail_dbpass'] = 'Password DB MySQL';
$l['mail_time'] = 'Data di installazione';
$l['mail_rem_time'] = 'Data di rimozione';
$l['mail_subject'] = 'Installazione di &soft-1; rimossa';
$l['mail_cron_command'] = 'compito CRON';
$l['mail_datadir'] = 'Directory dei dati';
$l['mail_wwwdir'] = 'Web directory';
$l['checking_data'] = 'Verifica in corso dei dati inoltrati';
$l['rem_db'] = 'Rimozione del database/utente database in corso';
$l['rem_dir'] = 'Rimozione della directory in corso';
$l['rem_datadir'] = 'Rimozione della directory dei dati in corso';
$l['rem_cron'] = 'Rimozione compiti Cron in corso';
$l['finishing_process'] = 'Rimosso con successo';
$l['wait_note'] = '<b>NOTE:</b> L\'operazione in esecuzione potrebbe richiedere 3-4 minuti. Ti preghiamo di non uscire dalla pagina fino a quando la barra di avanzamento non abbia raggiunto il 100%';

//Theme Strings
$l['<title>'] = APP.' - Rimuovi';
$l['info'] = 'Informazionirmazionirmazioni';
$l['ins_softname'] = 'Software';
$l['ins_num'] = 'Numero di installazione';
$l['ins_ver'] = 'Versione';
$l['ins_time'] = 'Data di installazione';
$l['ins_path'] = 'Percorso';
$l['ins_url'] = 'URL';
$l['ins_db'] = 'Nome del database';
$l['ins_dbuser'] = 'Nome utente del database';
$l['ins_dbpass'] = 'Password del database';
$l['ins_dbhost'] = 'Host del database';
$l['remove_ins'] = 'Rimuovi installazione';
$l['remove_dir'] = 'Rimuovi cartella';
$l['remove_dir_exp'] = 'Se viene selezionata questa opzione, l\'intera cartella verr&agrave; cancellata';
$l['remove_db'] = 'Rimuovi database';
$l['remove_db_exp'] = 'Se viene selezionata questa opzione, il database verr&agrave; cancellato';
$l['remove_dbuser'] = 'Rimuovi utente database';
$l['remove_dbuser_exp'] = 'Se viene selezionata questa opzione, anche l\'utente del database verr&agrave; rimosso';
$l['remove_conf'] = 'Queste operazioni sono irreversibili! \n Sei sicuro di voler rimuovere questa installazione?';
$l['uninstalled'] = 'L\'installazione &egrave; stata rimossa con successo';
$l['removeins'] = 'Rimuovi installazione';
$l['ins_cron_command'] = 'Cron Comando';
$l['remove_datadir'] = 'Rimuovere Directory dei dati';
$l['remove_datadir_exp'] = 'If checked the Data directory will be removed.';
$l['ins_datadir'] = 'Directory dei dati';
$l['remove_wwwdir'] = 'Rimuovere Web directory';
$l['remove_wwwdir_exp'] = 'If checked the web directory will be removed.';
$l['ins_wwwdir'] = 'Web directory';
$l['return'] = 'Torna alla visione d\'insieme';
$l['prog_removing'] = 'Removing ';// Dont remove the trailing space
$l['prog_remove_complete'] = 'Installazioni Rimosso.';
$l['disabled_script_info'] = 'No information available as this script has been disabled.';

$l['wpc_return'] = 'Return to Installations';