<?php

//////////////////////////////////////////////////////////////
//===========================================================
// upgrade_lang.php
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

$l['no_info_file'] = 'Non è stato possibile trovare il file INFO.XML! Ti preghiamo di segnalarlo all\'amministratore di server.';
$l['incompatible'] = 'Il software richiede una versione più recente di '.APP.'! Ti preghiamo di segnalarlo all\'amministratore di server.';
$l['no_upgrade'] = 'Non è stato possibile trovare il file UPGRADE.XML! Ti preghiamo di segnalarlo all\'amministratore di server.';
$l['no_functions'] = 'Non è stato possibile trovare il file FUNZIONI DI UPGRADE! Ti preghiamo di segnalarlo all\'amministratore di server.';
$l['no_field'] = 'Il campo <b>&soft-1;</b> è obbligatorio è dev\'essere compilato.';
$l['no_package'] = 'Non è stato possibile trovare il pacchetto di aggiornamento!';
$l['no_decompress'] = 'Si sono verificati alcuni errori durante l\'estrazione dei file di pacchetto.';
$l['no_decompress_www'] = 'Si sono verificati alcuni errori durante l\'estrazione dei file web.';
$l['no_config_perl_path'] = 'Si è verificato un errore durante la configurazione dei file CGI.';
$l['checking_data'] = 'Verifica in corso dei dati inoltrati';
$l['unzipping_files'] = 'Copia dei file e delle cartelle in corso';
$l['unzipping_datadir'] = 'Estrazione dei file di dati in corso';
$l['prop_db'] = 'Aggiornamento del database in corso';
$l['finishing_process'] = 'Aggiornamento quasi finito';
$l['wait_note'] = '<b>NOTE:</b> L\'operazione in esecuzione potrebbe richiedere 3-4 minuti. Ti preghiamo di non uscire dalla pagina fino a quando la barra di avanzamento non abbia raggiunto il 100%';
$l['no_space'] = 'Non hai spazio sufficiente per aggiornare questa installazione!';
$l['invalid_insid'] = 'Invalid Installation ID';
$l['invalid_script'] = 'Invalid Script ID';
$l['not_perl_script'] = 'This script is not in PERL';
$l['no_perl_upgrade'] = 'Upgrade is not supported for this script';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['upgrade'] = 'Aggiornamento software';
$l['softins_url'] = 'URL';
$l['softins_path'] = 'Percorso';
$l['softcopy_note'] = '<b>NOTE</b>: Il software eseguirà l\'aggiornamento utilizzando la propria utilità di aggiornamento. Per completare l\'aggiornamento, ti preghiamo di visitare l\'URL che comparirà una volta copiati i file.';
$l['softsubmit'] = 'Aggiorna';
$l['congrats'] = 'Congratulazioni, il software è stato aggiornato correttamente';
$l['succesful'] = 'è stato aggiornato con successo a';
$l['admin_url'] = 'URL admin';
$l['setup_continue'] = 'Tuttavia, l\'upgrade sarà completato dal software stesso. Ti preghiamo quindi di visitare il seguente URL';
$l['enjoy'] = 'Speriamo che il processo di aggiornamento sia stato semplice.';
$l['upgrade_notes'] = 'Di seguito alcune note importanti. Si raccomanda la loro attenta lettura ';
$l['please_note'] = '<b>NOTE</b>: '.APP.' è solo un autoinstaller e non fornisce alcun tipo di assistenza per il software. Per assistenza e supporto, visitare il sito web del/i venditore/i.';
$l['regards'] = 'Riconoscimenti';
$l['softinstaller'] = 'Autoinstaller '.APP.'';
$l['return'] = 'Torna alla visione d\'insieme';
$l['note_backup'] = 'Its recommended that you take a <a href="'.$globals['index'].'act=backup&insid=&soft-1;">backup</a> of the installation before upgrading.';
$l['create_backup'] = 'Creare backup';
$l['create_backup_exp'] = 'Creare un backup prima dell\'aggiornamento';
$l['prog_upgrading'] = 'Aggiornamento in corso ';// Dont remove the trailing space
$l['prog_upgrade_complete'] = 'Aggiornamento completato.';

$l['upgrade_tweet_sub'] = 'Dillo ai tuoi amici';

