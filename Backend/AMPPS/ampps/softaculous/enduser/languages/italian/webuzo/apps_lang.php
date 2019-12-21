<?php

//////////////////////////////////////////////////////////////
//===========================================================
// apps_lang.php
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

$l['no_info_file'] = 'Non è stato possibile trovare il file INFO.XML! Ti preghiamo di segnalarlo all\'amministratore di server.';
$l['incompatible'] = 'Il software richiede una versione più recente di '.APP.'! Ti preghiamo di segnalarlo all\'amministratore di server.';
$l['no_install'] = 'Non è stato possibile trovare il file INSTALL.XML! Ti preghiamo di segnalarlo all\'amministratore di server.';
$l['no_functions'] = 'Non è stato possibile trovare il file FUNZIONI DI INSTALLAZIONE! Ti preghiamo di segnalarlo all\'amministratore di server.';
$l['no_softdomain'] = 'Non hai scelto il dominio su cui installare il software.';
$l['wrong_softdomain'] = 'Non è stato possibile trovare il percorso del dominio selezionato.';
$l['softdirectory_exists'] = 'La directory inserita esiste già! Ti preghiamo di inserire un nome di directory diverso.';
$l['no_space'] = 'Non hai spazio sufficiente per installare questo software!';
$l['no_softdb'] = 'Il database non è stato pubblicato.';
$l['database_exists'] = 'Questo database esiste già. Ti preghiamo di scegliere un altro nome.';
$l['databaseuser_exists'] = 'Questo utente database esiste già. Ti preghiamo di scegliere un nome diverso.';
$l['db_name_long'] = 'Il nome del database non può avere più di 7 lettere. Ti preghiamo di scegliere un nome più corto.';
$l['db_limit_crossed'] = 'L\'installazione non può continuare, in quanto hai raggiunto il numero massimo di database permessi.';
$l['no_field'] = 'Il campo <b>&soft-1;</b> è obbligatorio è dev\'essere compilato.';
$l['error_adddb'] = 'Non è stato possibile creare il database.';
$l['error_adduser'] = 'Si è verificato un errore durante l\'aggiunta di un utente al nuovo database';
$l['no_package'] = 'Non è stato possibile trovare il pacchetto d\'installazione!';
$l['no_decompress'] = 'Si sono verificati alcuni errori durante l\'estrazione dei file di pacchetto.';
$l['mail_new_ins'] = 'La nuova installazione di of &soft-1; è stata completata. Di seguito i dettagli relativi all\'installazione:';
$l['mail_path'] = 'Percorso';
$l['mail_url'] = 'URL';
$l['mail_admin_url'] = 'URL admin';
$l['mail_admin'] = 'Username Admin';
$l['mail_pass'] = 'Password admin';
$l['mail_db'] = 'Database MySQL';
$l['mail_dbuser'] = 'Utente del database MySQL';
$l['mail_dbhost'] = 'Host del database MySQL';
$l['mail_dbpass'] = 'Password del database MySQL';
$l['mail_time'] = 'Ora di installazione';
$l['mail_subject'] = 'Nuova installazione di &soft-1;';
$l['no_cron_min'] = 'Non è stato specificato alcun minuto Cron';
$l['no_cron_hour'] = 'Non è stata specificata alcuna ora Cron';
$l['no_cron_day'] = 'Non è stato specificato alcun giorno Cron';
$l['no_cron_month'] = 'Non è stato specificato alcun mese Cron';
$l['no_cron_weekday'] = 'Non è stato specificato alcun giorno della settimana Cron';
$l['wrong_cron_min'] = 'Minuto cron errato. I valori validi sono 0-59 o <b>*</b>';
$l['wrong_cron_hour'] = 'Ora cron errata. I valori validi sono 0-23 o <b>*</b>';
$l['wrong_cron_day'] = 'Giorno cron errato. I valori validi sono 1-31 o <b>*</b>';
$l['wrong_cron_month'] = 'Mese cron errato. I valori validi sono 1-12 o <b>*</b>';
$l['wrong_cron_weekday'] = 'Giorno della settimana cron errato. I valori validi sono 0-7 o <b>*</b>';
$l['mail_cron'] = 'Cron Job';
$l['no_datadir'] = 'No Data directory was specified';
$l['datadir_exists'] = 'La directory dei dati inviata esiste già. Ti preghiamo di indicare una nuova directory.';
$l['no_decompress_data'] = 'Si sono verificati alcuni errori durante l\'estrazione dei file di DATI.';
$l['mail_datadir'] = 'Directory dei dati';
$l['some_files_exist'] = 'Installation cannot proceed because the following files already exist in the target folder : ';
$l['delete_files'] = 'Ti preghiamo di eliminare questi file o scegliere un altro tipo di account.';
$l['overwrite_exist'] = '<b>OR</b> <br />Spuntare la casella per sovrascrivere tutti i file e proseguire';
$l['checking_data'] = 'Performing Initial Steps';
$l['checking_dependencies'] = 'Computing the dependencies to be installed';
$l['installing_dependencies'] = 'Installing the dependencies';
$l['installing_package'] = 'Installing the application';
$l['unzipping_files'] = 'Copia dei file e delle cartelle in corso';
$l['wait_note'] = '<b>NOTE:</b> L\'operazione in esecuzione potrebbe richiedere 3-4 minuti. Ti preghiamo di non uscire dalla pagina fino a quando la barra di avanzamento non abbia raggiunto il 100%';
$l['no_hostname'] = 'Ti preghiamo di inserire l\'hostname del tuo database';
$l['no_dbusername'] = 'Ti preghiamo di inserire il nome utente del tuo database';
$l['no_dbuserpass'] = 'Ti preghiamo di inserire la password del tuo database';
$l['softdirectory_invalid'] = 'La directory inserita non è valida.';
$l['softdatadir_invalid'] = 'La directory dei dati inserita non è valida.';
$l['no_installation'] = 'No installation found';
$l['no_dep_found'] = 'Could not find dependency <b>&soft-1;</b> for <b>&soft-2;</b>';
$l['err_dep_install'] = 'There was an error installing dependency <b>&soft-1;</b> for <b>&soft-2;</b>';
$l['err_extract'] = 'There was an error extracting the package -';
$l['err_dep_remove'] = '<b>&soft-1;</b> is required by <b>&soft-2;</b>. Select the <b>Remove Dependent Application(s)</b> check box to continue.';
$l['no_app_info'] = 'Could not find the applications information';
$l['ins_finishing_process'] = 'Installazione quasi finita';
$l['rem_finishing_process'] = 'Rimosso con successo';

$l['prog_removing'] = 'Removing ';// Dont remove the trailing space
$l['prog_remove_complete'] = 'Installation Removed.';
$l['disable_sysapps'] = 'Questa funzionalità è stata disattivata dal pannello di controllo Webuzo';
$l['no_cli_force'] = 'Please use --force to install this application. Since conflicting app is already installed.';
$l['conflict_check_box'] = 'Please tick the checkbox to install ';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['install'] = 'Installare';
$l['overview'] = 'Quadro generale';
$l['features'] = 'Caratteristiche';
$l['demo'] = 'Demo';
$l['ratings'] = 'Valutazioni';
$l['import'] = 'Importare';
$l['software_ver'] = 'Versione';
$l['space_req'] = 'Spazio richiesto';
$l['available_space'] = 'Spazio disponibile';
$l['req_space'] = 'Spazio necessario';
$l['mb'] = 'MB';
$l['software_support'] = 'Supporto software';
$l['support_link'] = 'Visita il sito di supporto';
$l['support_note'] = 'Nota: Softaculous non fornisce alcun tipo di supporto software.';
$l['setup'] = 'Installazione del software';
$l['choose_domain'] = 'Scegliere dominio';
$l['choose_domain_exp'] = 'Scegli il dominio su cui installare il software.';
$l['in_directory'] = 'Nella directory';
$l['in_directory_exp'] = 'La directory è legata al tuo dominio e <b> non dovrebbe esistere </b>. Per installare all\'indirizzo http://mydomain/dir/, digitare <b>dir</b>. Per installare solo in http://mydomain/, lasciare questo spazio vuoto.';
$l['database_name'] = 'Nome del database';
$l['database_name_exp'] = 'Inserire il nome del database da creare per l\'installazione';
$l['softcopy_note'] = '<b>NOTE</b>: Questo software deve essere installato utilizzando la propria utilità di installazione. Per completare l\'installazione, ti preghiamo di visitare l\'URL che comparirà una volta copiati i file.';
$l['softsubmit'] = 'Installare';
$l['congrats'] = 'Congratulazioni, il software è stato installato correttamente';
$l['succesful'] = 'has been successfully installed.';
$l['admin_url'] = 'URL amministrativo';
$l['setup_continue'] = 'Tuttavia, l\'installazione sarà completata dal software stesso. Per completare l\'installazione, ti preghiamo di visitare il seguente URL';
$l['enjoy'] = 'Speriamo che il processo d\'installazione sia stato semplice.';
$l['install_notes'] = 'The following are some important notes. It is highly recommended that you read them ';
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
$l['no_info'] = 'Informazioni non disponibili';
$l['randpass'] = 'Generare una password casuale';
$l['ratesoft'] = 'Valuta questo script';
$l['reviews'] = 'Recensioni';
$l['reviewsoft'] = 'Scrivi una recensione';
$l['readreviews'] = 'Leggi le recensioni';
$l['reviews_exp'] = 'Leggi le recensioni scritte da altri utenti e';
$l['cron_job'] = 'compito CRON';
$l['cron_job_exp'] = 'Per funzionare, questo script ha bisogno di un CRON. Indicare le tempistiche CRON. Se non conosci le tempistiche, non modificare!';
$l['cron_min'] = 'Min';
$l['cron_hour'] = 'Ora';
$l['cron_day'] = 'Giorno';
$l['cron_month'] = 'Mese';
$l['cron_weekday'] = 'Giorno della settimana';
$l['datadir'] = 'Directory dei dati';
$l['datadir_exp'] = 'Questo script richiede la memorizzazione dei suoi dati in una cartella non accessibile attraverso il web. Sarà creata nella cartella home. Ad es., se hai indicato <b>datadir</b>, sarà creato il percorso - /home/username/<b>datadir</b>';
$l['db_alpha_num'] = 'Il nome del database può contenere solo caratteri alfanumerici.';
$l['overwrite'] = 'Sovrascrivere file';
$l['ins_emailto'] = 'Inviare i dettagli dell\'installazione a';
$l['choose_protocol'] = 'Scegliere protocollo';
$l['choose_protocol_exp'] = 'Se il tuo sito utilizza SSL, ti preghiamo di scegliere il protocollo HTTPS.';
$l['backup'] = 'Backup';
$l['options'] = 'Opzioni';
$l['admin'] = 'Admin';
$l['notify_ver'] = 'Inviare messaggio di notifica di nuova versione a '.$globals['sn'].'';
$l['notifyversion'] = 'Grazie delle informazioni sulla nuova versione. Provvederemo ad esaminarle il prima possibile';
$l['del_insid'] = 'Are you sure you wish to remove this application ? The action will be irreversible. \nNo further confirmations will be asked.';
$l['rem_inst_id'] = 'Removing Installation - ';
$l['no_sel_inst'] = 'Non è stata selezionata alcuna installazione da eliminare.';
$l['inst_remvd'] = 'Le installazioni selezionate sono state rimosse. La pagina sarà ricaricata adesso!';
$l['remove'] = 'Rimuovere';
$l['go'] = 'Avanti';
$l['screenshots'] = 'Screenshot';
$l['downloading'] = 'Download pacchetto in corso';
$l['installing'] = 'Installing Application';
$l['removing'] = 'Removing Application';
$l['editdetail'] = 'Modificare dettagli';
$l['publish'] = 'Pubblica sul web';
$l['hostname'] = 'Nome host del database';
$l['hostname_exp'] = 'Il nome host MySQL (principalmente <b>localhost</b>)';
$l['dbusername'] = 'Nome utente del database';
$l['dbusername_exp'] = 'Il nome utente MySQL';
$l['dbuserpass'] = 'Password del database';
$l['dbuserpass_exp'] = 'La password dell\'utente MySQL';
$l['database_name_exp_aefer'] = 'Inserire il nome del database da utilizzare durante l\'installazione';
$l['sel_version'] = 'Selezionare versione';
$l['choose_version_exp'] = 'Ti preghiamo di selezionare la versione da installare';
$l['choose_version'] = 'Scegliere la versione che vuoi installare';
$l['select'] = 'Selezionare';
$l['release_date'] = 'Data di rilascio';
$l['adv_option'] = 'Opzioni avanzate';
$l['disable_notify_update'] = 'Disattivare notifiche di aggiornamento';
$l['exp_disable_notify_update'] = 'Se spuntato, non riceverai una notifica email sugli aggiornamenti disponibili per questa installazione.';
$l['prog_installing'] = 'Installing '; // Dont remove trailing space
$l['prog_install_complete'] = 'Installazione completata.';
$l['iagree'] = 'I agree to the Terms and Conditions of &soft-1; License';
$l['notes'] = 'Notes';
$l['uninstalled'] = 'The Application was removed successfully';
$l['install_tweet_sub'] = 'Parla con i tuoi amici sulla tua nuova applicazione ';
$l['not_in_free'] = '<b>&soft-1;</b> cannot be installed in the Free version of Webuzo. Please upgrade to the premium version of Webuzo!';

