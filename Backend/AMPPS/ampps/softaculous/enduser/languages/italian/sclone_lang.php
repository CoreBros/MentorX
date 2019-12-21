<?php

//////////////////////////////////////////////////////////////
//===========================================================
// sclone_lang.php
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
$l['no_info_file'] = 'Non è stato possibile trovare il file INFO.XML! Ti preghiamo di segnalarlo all\'amministratore di server.';
$l['incompatible'] = 'Il software richiede una versione più recente di '.APP.'! Ti preghiamo di segnalarlo all\'amministratore di server.';
$l['no_install'] = 'Non è stato possibile trovare il file INSTALL.XML! Ti preghiamo di segnalarlo all\'amministratore di server.';
$l['no_functions'] = 'Non è stato possibile trovare i file relativi alle FUNZIONI DI CLONAZIONE!';
$l['no_clone'] = 'Nessun clone';
$l['no_softdomain'] = 'Non hai scelto il dominio su cui installare il software.';
$l['wrong_softdomain'] = 'Non è stato possibile trovare il percorso del dominio selezionato.';
$l['softdirectory_exists'] = 'La directory inserita esiste già! Ti preghiamo di inserire un nome di directory diverso.';
$l['no_space'] = 'Non hai spazio sufficiente per installare questo software!';
$l['no_softdb'] = 'Il database non è stato pubblicato.';
$l['database_exists'] = 'Questo database esiste già. Ti preghiamo di scegliere un altro nome.';
$l['databaseuser_exists'] = 'Questo utente database esiste già. Ti preghiamo di scegliere un nome diverso.';
$l['db_name_long'] = 'Il nome del database non può avere più di 7 lettere. Ti preghiamo di scegliere un nome più corto.';
$l['db_limit_crossed'] = 'L\'installazione non può continuare, in quanto hai raggiunto il numero massimo di database permessi.';
$l['cloning'] = 'Clonazione installazione in corso';
$l['downloading'] = 'Download pacchetto in corso';
$l['cant_clone_db'] = 'Clonazione del database non riuscita';
$l['fail_create'] = 'Creazione della directory non riuscita';
$l['fail_create_datadir'] = 'Creazione della directory di dati non riuscita';
$l['cant_clone_dir'] = 'La directory non può essere clonata in quanto è la home directory.';
$l['cant_connect_mysql'] = 'Connessione al database non riuscita, verifica il nome utente e la password del tuo database. Se modificati, ti preghiamo di aggiornare i dettagli nella sezione Installazioni Softaculous, utilizzando il comando modificare dettagli.';
$l['same_ins'] = 'Non è possibile clonare un\'installazione nella stessa locazione';
$l['ins_exists'] = 'Sembra che tu abbia già installato <b>&soft-1;</b> nella locazione scelta';
$l['ins_recursive'] = 'Non puoi clonare l\'installazione in una sottodirectory dell\'installazione originale';
$l['no_clone_support'] = 'Clone is not supported for this script';
$l['invalid_script'] = 'Invalid Script ID';
$l['no_domain_found'] = 'No domain found. Please add a domain to install the script';

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
$l['no_datadir'] = 'Non è stata specificata alcuna directory dei dati';
$l['datadir_exists'] = 'La directory dei dati inviata esiste già. Ti preghiamo di indicare una nuova directory.';
$l['no_decompress_data'] = 'Si sono verificati alcuni errori durante l\'estrazione dei file di DATI.';
$l['some_files_exist'] = 'Impossibile continuare l\'installazione perché i file seguenti esistono già nella cartella di destinazione: ';
$l['delete_files'] = 'Ti preghiamo di eliminare questi file o scegliere un altro tipo di account.';
$l['overwrite_exist'] = '<b>OR</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">Spuntare la casella per sovrascrivere tutti i file e proseguire</span></b>';
$l['prog_cloning'] = 'Clonazione in corso '; // Dont remove trailing space
$l['prog_cloning_complete'] = 'Clonazione completata.';
$l['checking_data'] = 'Verifica in corso dei dati inoltrati';
$l['unzipping_files'] = 'Copia dei file e delle cartelle in corso';
$l['unzipping_datadir'] = 'Estrazione dei file di dati in corso';
$l['prop_db'] = 'Propagazione del database';
$l['finishing_process'] = 'Clonazione quasi finita';
$l['wait_note'] = '<b>NOTE:</b> L\'operazione in esecuzione potrebbe richiedere 3-4 minuti. Ti preghiamo di non uscire dalla pagina fino a quando la barra di avanzamento non abbia raggiunto il 100%';
$l['no_hostname'] = 'Ti preghiamo di inserire l\'hostname del tuo database';
$l['no_dbusername'] = 'Ti preghiamo di inserire il nome utente del tuo database';
$l['no_dbuserpass'] = 'Ti preghiamo di inserire la password del tuo database';
$l['softdirectory_invalid'] = 'La directory inserita non è valida.';
$l['softdatadir_invalid'] = 'La directory dei dati inserita non è valida.';
$l['err_domain'] = 'Nessun dominio';
$l['err_domain_admin'] = 'Questo utente non ha alcun dominio. Ti preghiamo di contattare l\'amministratore.';
$l['no_https'] = 'Non è stato possibile trovare il certificato trusted SSL';
$l['no_php_install'] = 'PHP is not installed. To install it, please click <a href="'.$globals['index'].'act=apps&app=1">qui</a>';
$l['no_mysql_install'] = 'MySQL is not installed. To install it, please click <a href="'.$globals['index'].'act=apps&app=16">qui</a>';
$l['no_field'] = 'Il campo <b>&soft-1;</b> è obbligatorio è dev\'essere compilato.';
$l['error_adddb'] = 'Non è stato possibile creare il database.';
$l['error_adduser'] = 'Si è verificato un errore durante l\'aggiunta di un utente al nuovo database';
$l['no_package'] = 'Non è stato possibile trovare il pacchetto d\'installazione!';
$l['no_decompress'] = 'Si sono verificati alcuni errori durante l\'estrazione dei file di pacchetto.';

//Theme Strings
$l['<title>'] = APP.' - Clonare installazione';
$l['info'] = 'Informazionirmazioni';
$l['ins_softname'] = 'Software';
$l['ins_num'] = 'Numero installazione';
$l['ins_ver'] = 'Versione';
$l['ins_time'] = 'Tempo installazione';
$l['ins_path'] = 'Percorso';
$l['ins_url'] = 'URL';
$l['ins_admin_url'] = 'URL admin';
$l['ins_db'] = 'Nome del database';
$l['ins_dbuser'] = 'Utente del database';
$l['ins_dbpass'] = 'Password del database';
$l['ins_dbhost'] = 'Host del database';
$l['ins_datadir'] = 'Directory dei dati';
$l['ins_wwwdir'] = 'Web directory';
$l['ins_wwwurl'] = 'URL della Web directory';
$l['ins_cron_command'] = 'Comando cron';
$l['cloned'] = 'L\'installazione è stata clonata con successo';
$l['clone_ins'] = 'Clonare dettagli dell\'installazione';
$l['cloneins'] = 'Clonare installazione';
$l['choose_protocol'] = 'Scegliere protocollo';
$l['choose_protocol_exp'] = 'Se il tuo sito utilizza SSL, ti preghiamo di scegliere il protocollo HTTPS.';
$l['cron_job'] = 'compito CRON';
$l['cron_job_exp'] = 'Per funzionare, questo script ha bisogno di un CRON. Indicare le tempistiche CRON. Se non conosci le tempistiche, non modificare!';
$l['cron_min'] = 'Min';
$l['cron_hour'] = 'Ora';
$l['cron_day'] = 'Giorno';
$l['cron_month'] = 'Mese';
$l['cron_weekday'] = 'Giorno della settimana';
$l['datadir'] = 'Directory dei dati';
$l['datadir_exp'] = 'Questo script richiede la memorizzazione dei suoi dati in una cartella non accessibile attraverso il web. Sarà creata nella cartella home. Ad es., se hai indicato <b>datadir</b>, sarà creato il percorso - /home/username/<b>datadir</b>';
$l['db_name_long'] = 'Il nome del database non può avere più di 7 lettere. Ti preghiamo di scegliere un nome più corto.';
$l['db_alpha_num'] = 'Il nome del database può contenere solo caratteri alfanumerici.';
$l['overwrite'] = 'Sovrascrivere file';
$l['database_exists'] = 'Questo database esiste già. Ti preghiamo di scegliere un altro nome.';
$l['no_softdomain'] = 'Non hai scelto il dominio su cui installare il software.';
$l['wrong_softdomain'] = 'Non è stato possibile trovare il percorso del dominio selezionato.';
$l['no_space'] = 'Non hai spazio sufficiente per installare questo software!';
$l['no_softdb'] = 'Il database non è stato pubblicato.';
$l['choose_domain'] = 'Scegliere dominio';
$l['choose_domain_exp'] = 'Scegli il dominio su cui installare il software.';
$l['in_directory'] = 'Nella directory';
$l['in_directory_exp'] = 'La directory è legata al tuo dominio e <b> non dovrebbe esistere </b>. Per installare all\'indirizzo http://mydomain/dir/, digitare <b>dir</b>. Per installare solo in http://mydomain/, lasciare questo spazio vuoto.';
$l['database_name'] = 'Nome del database';
$l['database_name_exp'] = 'Inserire il nome del database da creare per l\'installazione';
$l['softcopy_note'] = '<b>NOTE</b>: Questo software deve essere installato utilizzando la propria utilità di installazione. Per completare l\'installazione, ti preghiamo di visitare l\'URL che comparirà una volta copiati i file.';
$l['softsubmit'] = 'Clonare';
$l['congrats'] = 'Congratulazioni, l\'installazione è stata clonata con successo';
$l['succesful'] = 'è stato clonato con successo a';
$l['admin_url'] = 'URL amministrativo';
$l['setup_continue'] = 'Tuttavia, l\'installazione sarà completata dal software stesso. Per completare l\'installazione, ti preghiamo di visitare il seguente URL';
$l['enjoy'] = 'Speriamo che il processo d\'installazione sia stato semplice.';
$l['install_notes'] = 'Di seguito alcune note importanti. Si raccomanda la loro attenta lettura ';
$l['please_note'] = '<b>NOTE</b>: '.APP.' è solo un autoinstaller e non fornisce alcun tipo di assistenza per i singoli pacchetti software. Per assistenza e supporto, visitare il sito web del venditore/i.';
$l['regards'] = 'Riconoscimenti';
$l['softinstaller'] = 'Autoinstaller '.APP.'';
$l['return'] = 'Torna alla visione d\'insieme';

// These strings are for Softaculous Remote
$l['hostname'] = 'Nome host del database';
$l['hostname_exp'] = 'Il nome host MySQL (principalmente <b>localhost</b>)';
$l['dbusername'] = 'Nome utente del database';
$l['dbusername_exp'] = 'Il nome utente MySQL';
$l['dbuserpass'] = 'Password del database';
$l['dbuserpass_exp'] = 'La password dell\'utente MySQL';
$l['database_name_exp_aefer'] = 'Inserire il nome del database da utilizzare durante l\'installazione';

$l['clone_tweet_sub'] = 'Dillo ai tuoi amici';
$l['not_in_free'] = '<b>&soft-1;</b> non può essere clonato nella versione gratuita della '.APP.'!';
$l['notify_admin'] = 'Ti preghiamo di chiedere al tuo amministratore di server di acquistare la versione premium della '.APP.'!';

$l['soft_ins_exists'] = 'An installation already exists at &soft-1; as per our records. To clone the application at this location please uninstall the existing installation!';

$l['no_sclone'] = 'The CLONE.XML file could not be found! Please report this to the server administrator.';
$l['no_functions'] = 'The CLONE FUNCTIONS file could not be found! Please report this to the server administrator.';

$l['clone_push_bg'] = 'Clone has been pushed in background';
$l['err_mysql_db'] = 'The MySQL database name is incorrect as the database could not be selected.';

$l['error_max_clone_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Clone allowed per script';

$l['choose_url'] = 'Choose Installation URL';
$l['choose_url_exp'] = 'Please choose the URL to install the software';

$l['ampps_notify_premium'] = 'This feature is available in the premium version of AMPPS. Please purchase <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';