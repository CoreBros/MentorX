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

$l['no_info_file'] = 'Il file INFO.XML non &egrave; stato trovato! Si prega di inviare una segnalazione all\'Amministratore del Server.';
$l['incompatible'] = 'Il software richiede una versione successiva di '.APP.'! Si prega di inviare una segnalazione all\'Amministratore del Server.';
$l['no_upgrade'] = 'Il file UPGRADE.XML non &egrave; stato trovato! Si prega di inviare una segnalazione all\'Amministratore del Server.';
$l['no_functions'] = 'Il file delle UPGRADE FUNCTIONS non &egrave; stato trovato! Si prega di inviare una segnalazione all\'Amministratore del Server.';
$l['no_field'] = 'Il campo <b>&soft-1;</b> &egrave; obbligatorio e deve essere compilato.';
$l['no_package'] = 'Il pacchetto di aggiornamento non &egrave; stato trovato!';
$l['no_decompress'] = 'Si &egrave; verificato un errore durante l\'estrazione del pacchetto di aggiornamento.';
$l['checking_data'] = 'Verifica in corso dei dati inoltrati';
$l['unzipping_files'] = 'Copia dei file e delle cartelle in corso';
$l['unzipping_datadir'] = 'Estrazione dei file di dati in corso';
$l['prop_db'] = 'Aggiornamento del database in corso';
$l['finishing_process'] = 'Aggiornamento quasi finito';
$l['wait_note'] = '<b>NOTE:</b> L\'operazione in esecuzione potrebbe richiedere 3-4 minuti. Ti preghiamo di non uscire dalla pagina fino a quando la barra di avanzamento non abbia raggiunto il 100%';
$l['cver_greater'] = 'La versione attuale è più recente o identica alla versione che desideri installare. Ciò è possibile quando esegui manualmente l\'aggiornamento dell\'installazione. Se non è questa la causa, ti preghiamo di spuntare la seguente casella';
$l['force_upgrade'] = 'Forzare upgrade';
$l['backup_finish'] = 'Backup eseguito';
$l['backup_fail_proceed'] = 'Si è verificato un errore durante l\'esecuzione del processo di backup. Continuare l\'aggiornamento?';
$l['backing_up'] = 'Backup dell\'installazione in corso';
$l['no_space'] = 'Non hai spazio sufficiente per aggiornare questa installazione!';
$l['invalid_insid'] = 'Invalid Installation ID';
$l['invalid_script'] = 'Invalid Script ID';
$l['no_upgrade_support'] = 'Upgrade is not supported for this script';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['upgrade'] = 'Aggiornamento Software';
$l['softins_url'] = 'URL';
$l['softins_path'] = 'Percorso';
$l['softcopy_note'] = '<b>ATTENZIONE</b>: Questo software deve essere aggiornato utilizzando la propria Utility di installazione. Per completare l\'installazione, si prega di visitare l\'URL che verr&agrave; indicato una volta che i file sono stati copiati.';
$l['softsubmit'] = 'Aggiorna';
$l['congrats'] = 'Congratulazioni, il software &egrave; stato aggiornato con successo.';
$l['succesful'] = '&egrave; stato aggiornato con successo su';
$l['admin_url'] = 'URL admin';
$l['setup_continue'] = 'Il processo di aggiornamento verr&agrave; completato dal Software stesso. Si prega di visitare il seguente URL';
$l['enjoy'] = 'Ci auguriamo che il processo di aggiornamento sia stato semplice.';
$l['upgrade_notes'] = 'Di seguito sono riportate alcune note importanti; ci raccomandiamo che vengano lette con attenzione';
$l['please_note'] = '<b>ATTENZIONE</b>: '.APP.' &egrave; semplicemente un programma di Installazione Automatica e non fornisce alcun supporto per il software. Si prega di visitare il sito ufficiale del software per qualsiasi tipo di supporto!';
$l['regards'] = 'Saluti';
$l['softinstaller'] = 'Autoinstaller '.APP.'';
$l['return'] = 'Ritorna alla Panoramica';
$l['note_backup'] = 'Its recommended that you take a <a href="'.$globals['index'].'act=backup&insid=&soft-1;">backup</a> of the installation before upgrading.';
$l['alreadyupdated'] = 'Beh...sembra che la versione reale dell\'installazione sia la <b>&soft-1;</b> invece della <b>&soft-2;</b>. <br />Fare click qui per aggiornare i registri della'.APP.'.';
$l['no_update_required'] = 'Sembra che non devi aggiornare l\'installazione, in quanto è stata già aggiornata.';
$l['auto_backup'] = 'Vorresti fare un backup prima di eseguire l\'aggiornamento?';
$l['select_version'] = 'Selezionare la versione di upgrade';
$l['upgrading'] = 'Aggiornamento in corso...';
$l['setup_partial'] = 'Il processo di aggiornamento è quasi finito';
$l['finish_update'] = 'Per completare il processo di upgrade, ti preghiamo di seguire il link indicato di seguito';
$l['finish_up_sucess'] = 'Dopo il completamento del processo di aggiornamento, puoi accedere qui all\'installazione di &soft-1;';
$l['upgrading_to'] = 'Stai aggiornando alla versione: ';
$l['version'] = 'Versione ';
$l['create_backup'] = 'Creare backup';
$l['create_backup_exp'] = 'Creare un backup prima dell\'aggiornamento';
$l['prog_upgrading'] = 'Aggiornamento in corso ';// Dont remove the trailing space
$l['prog_upgrade_complete'] = 'Aggiornamento completato.';

$l['upgrade_tweet_sub'] = 'Dillo ai tuoi amici';

$l['not_in_free'] = '<b>&soft-1;</b> non può essere aggiornato nella versione gratuita della '.APP.'!';
$l['notify_admin'] = 'Ti preghiamo di chiedere al tuo amministratore di server di acquistare la versione premium della '.APP.'!';

$l['backup_type'] = 'Backup Options';
$l['backup_type_exp'] = 'Choose full backup or advanced options';
$l['standard_backup'] = 'Full Backup (Default)';
$l['advanced_backup'] = 'Advanced Options';

$l['backup_dir'] = 'Backup Directory';
$l['backup_db'] = 'Backup Database';
$l['backup_wwwdir'] = 'Backup Web Directory';
$l['backup_datadir'] = 'Backup Data Directory';
$l['no_dir'] = 'The installation files are missing hence cannot proceed with the upgrade';
$l['wpc_return'] = 'Return to Installations';