<?php

//////////////////////////////////////////////////////////////
//===========================================================
// js_lang.php
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

$l['no_info_file'] = 'ID specificato sprovvisto di classe.';
$l['incompatible'] = 'Il software richiede una versione più recente di '.APP.'! Ti preghiamo di segnalarlo all\'amministratore di server.';
$l['no_install'] = 'Non è stato possibile trovare il file INSTALL.XML! Ti preghiamo di segnalarlo all\'amministratore di server.';
$l['no_functions'] = 'Non è stato possibile trovare il file FUNZIONI DI INSTALLAZIONE! Ti preghiamo di segnalarlo all\'amministratore di server.';
$l['no_softdomain'] = 'Non hai scelto il dominio su cui installare il software.';
$l['wrong_softdomain'] = 'Non è stato possibile trovare il percorso del dominio selezionato.';
$l['no_space'] = 'Non hai spazio sufficiente per installare questo software!';
$l['no_field'] = 'Il campo <b>&soft-1;</b> è obbligatorio è dev\'essere compilato.';
$l['no_package'] = 'Non è stato possibile trovare il pacchetto d\'installazione!';
$l['no_decompress'] = 'Si sono verificati alcuni errori durante l\'estrazione dei file di pacchetto.';
$l['mail_new_ins'] = 'La nuova installazione di of &soft-1; è stata completata. Di seguito i dettagli relativi all\'installazione:';
$l['mail_path'] = 'Percorso';
$l['mail_url'] = 'URL';
$l['mail_time'] = 'Ora di installazione';
$l['mail_subject'] = 'Nuova installazione di &soft-1;';
$l['some_files_exist'] = 'Impossibile continuare l\'installazione perché i file seguenti esistono già nella cartella di destinazione: ';
$l['delete_files'] = 'Ti preghiamo di eliminare questi file o scegliere un altro tipo di account.';
$l['checking_data'] = 'Verifica in corso dei dati inoltrati';
$l['unzipping_files'] = 'Copia dei file e delle cartelle in corso';
$l['unzipping_datadir'] = 'Estrazione dei file di dati in corso';
$l['prop_db'] = 'Propagazione del database';
$l['finishing_process'] = 'Installareazione quasi finita';
$l['wait_note'] = '<b>NOTE:</b> L\'operazione in esecuzione potrebbe richiedere 3-4 minuti. Ti preghiamo di non uscire dalla pagina fino a quando la barra di avanzamento non abbia raggiunto il 100%';
$l['cant_download'] = 'Download del file ZIP non riuscito.';
$l['softdirectory_invalid'] = 'La directory inserita non è valida.';
$l['softdirectory_exists'] = 'La directory inserita esiste già! Ti preghiamo di inserire un nome di directory diverso.';
$l['ins_emailto'] = 'Inviare i dettagli dell\'installazione a';
$l['disable_classes'] = 'PHP Classes are disabled by admin or you are using '.APP.' Free version';
$l['invalid_class_id'] = 'Invalid Class ID';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['install'] = 'Installa';
$l['overview'] = 'Leggi il contenuto';
$l['features'] = 'Caratteristiche';
$l['demo'] = 'Demo';
$l['file'] = 'File';
$l['ratings'] = 'Valutazioni';
$l['import'] = 'Importareare';
$l['software_ver'] = 'Versione';
$l['space_req'] = 'Spazio richiesto';
$l['available_space'] = 'Spazio disponibile';
$l['req_space'] = 'Spazio necessario';
$l['mb'] = 'MB';
$l['software_support'] = 'Supporto software';
$l['support_link'] = 'Visita il sito di supporto';
$l['support_note'] = 'Nota: Softaculous non fornisce alcun tipo di supporto software.';
$l['setup'] = 'Installareazione del software';
$l['choose_domain'] = 'Scegliere dominio';
$l['choose_domain_exp'] = 'Scegli il dominio su cui installare il software.';
$l['in_directory'] = 'Nella directory';
$l['in_directory_exp'] = 'La directory è legata al tuo percorso home e sarà <b> creata se non esiste</b>. Per installare in &soft-1;/dir, digitare <b>dir</b>. Per installare solo in &soft-1;/, lasciare questo spazio vuoto.';
$l['aef_in_directory_exp'] = 'The directory is relative to your home path and will be <b>created if it inesistente</b>. e.g. To install at <span id="aef_span_lang">&soft-1;</span>/dir just type <b>dir</b>. To install only in <span id="aef_span_lang_a">&soft-1;</span>/ leave this empty.';
$l['softsubmit'] = 'Installa';
$l['congrats'] = 'Congratulazioni, il software è stato installato correttamente';
$l['succesful'] = 'è stato installato con successo a';
$l['enjoy'] = 'Speriamo che il processo d\'installazione sia stato semplice.';
$l['install_notes'] = 'Di seguito alcune note importanti. Si raccomanda la loro attenta lettura ';
$l['please_note'] = '<b>NOTE</b>: '.APP.' è solo un autoinstaller e non fornisce alcun tipo di assistenza per i singoli pacchetti software. Per assistenza e supporto, visitare il sito web del venditore/i.';
$l['regards'] = 'Riconoscimenti';
$l['softinstaller'] = 'Autoinstaller '.APP.'';
$l['return'] = 'Torna alla visione d\'insieme';
$l['current_ins'] = 'Installazioni correnti';
$l['link'] = 'Link';
$l['ins_time'] = 'Tempo installazione';
$l['version'] = 'Versione';
$l['upd_to'] = 'Aggiornare alla versione';
$l['remove'] = 'Rimuovere';
$l['no_info'] = 'Informazionirmazioni non disponibili';
$l['ratesoft'] = 'Valuta questo script';
$l['reviews'] = 'Recensioni';
$l['reviewsoft'] = 'Scrivi una recensione';
$l['readreviews'] = 'Leggi le recensioni';
$l['reviews_exp'] = 'Leggi le recensioni scritte da altri utenti e';
$l['ins_type'] = 'Tipo di installazione';
$l['ins_type_exp'] = '<b>Pacchetto originale</b> - Il pacchetto disponibile sul sito web degli script. <br /> <b>Solo file di libreria</b> - Solo i file di libreria Javascript.';
$l['ori_pack'] = 'Pacchetto originale';
$l['just_lib'] = 'Solo file di libreria';
$l['overwrite_exist'] = '<b>OR</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">Spuntare la casella per sovrascrivere tutti i file e proseguire</span></b>';
$l['overwrite'] = 'Sovrascrivere file';
$l['choose_protocol'] = 'Scegliere protocollo';
$l['choose_protocol_exp'] = 'Se il tuo sito utilizza SSL, ti preghiamo di scegliere il protocollo HTTPS.';
$l['downloading'] = 'Download pacchetto in corso';
$l['installing'] = 'Installareazione script in corso';
$l['files'] = 'File & cartelle';
$l['modified_time'] = 'Ultima modifica';
$l['size'] = 'Dimensioni';
$l['classes_ins_error'] = 'Si è verificato un errore nel tentativo di salvare l\'installazione.';
$l['del_insid'] = 'Sei sicuro di voler eliminare le installazioni selezionate? Questa azione è permanente. \n Non ti saranno richieste ulteriori conferme!';
$l['rem_inst_id'] = 'Rimozione installazione in corso - ';
$l['no_sel_inst'] = 'Non è stata selezionata alcuna installazione da eliminare.';
$l['inst_remvd'] = 'Le installazioni selezionate sono state rimosse. La pagina sarà ricaricata adesso!';
$l['go'] = 'Avanti';
$l['download_zip'] = 'Scaricare tutti i file ';
$l['software_category'] = 'Categoria';
$l['adv_option'] = 'Opzioni avanzate';
$l['disable_notify_update'] = 'Disattivare notifiche di aggiornamento';
$l['exp_disable_notify_update'] = 'Se spuntato, non riceverai una notifica email sugli aggiornamenti disponibili per questa installazione.';
$l['prog_installing'] = 'Installareazione in corso ';// Dont remove the trailing space
$l['prog_install_complete'] = 'Installareazione completata.';

$l['install_tweet_sub'] = 'Dillo ai tuoi amici';
$l['select_domain'] = 'Selezionare dominio';
$l['with_selected'] = 'Con selezionati';
$l['download'] = 'Download';

