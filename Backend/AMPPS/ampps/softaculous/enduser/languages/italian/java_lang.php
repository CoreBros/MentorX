<?php

//////////////////////////////////////////////////////////////
//===========================================================
// java_lang.php
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

$l['java_message'] = 'Java is not installed. To install it, please click <a href="'.$globals['index'].'act=apps&app=37">qui</a>';
$l['java_title'] = 'Java non è installato sul tuo server';
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
$l['mail_admin'] = 'Nome utente Admin';
$l['mail_pass'] = 'Password admin';
$l['mail_db'] = 'database MySQL';
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
$l['mail_cron'] = 'Lavoro Cron';
$l['no_datadir'] = 'Non è stata specificata alcuna directory dei dati';
$l['datadir_exists'] = 'La directory dei dati inviata esiste già. Ti preghiamo di indicare una nuova directory.';
$l['no_decompress_data'] = 'Si sono verificati alcuni errori durante l\'estrazione dei file di DATI.';
$l['mail_datadir'] = 'Directory dei dati';
$l['some_files_exist'] = 'Impossibile continuare l\'installazione perché i file seguenti esistono già nella cartella di destinazione: ';
$l['delete_files'] = 'Ti preghiamo di eliminare questi file o scegliere un altro tipo di account.';
$l['overwrite_exist'] = '<b>OR</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">Spuntare la casella per sovrascrivere tutti i file e proseguire</span></b>';
$l['checking_data'] = 'Verifica in corso dei dati inoltrati';
$l['unzipping_files'] = 'Copia dei file e delle cartelle in corso';
$l['unzipping_datadir'] = 'Estrazione dei file di dati in corso';
$l['prop_db'] = 'Propagazione del database';
$l['finishing_process'] = 'Installareazione quasi finita';
$l['wait_note'] = '<b>NOTE:</b> L\'operazione in esecuzione potrebbe richiedere 3-4 minuti. Ti preghiamo di non uscire dalla pagina fino a quando la barra di avanzamento non abbia raggiunto il 100%';
$l['no_hostname'] = 'Ti preghiamo di inserire l\'hostname del tuo database';
$l['no_dbusername'] = 'Ti preghiamo di inserire il nome utente del tuo database';
$l['no_dbuserpass'] = 'Ti preghiamo di inserire la password del tuo database';
$l['softdirectory_invalid'] = 'La directory inserita non è valida.';
$l['softdatadir_invalid'] = 'La directory dei dati inserita non è valida.';
$l['no_dir'] = 'Ti preghiamo di fornire un nome di directory.';
$l['err_pass_strength'] = 'La robustezza della password deve essere superiore a ';
$l['no_https'] = 'Non è stato possibile trovare il certificato trusted SSL';
$l['err_dbprefix'] = 'Il prefisso della tabella non è valido. I valori validi sono a-z, A-Z, 0-9 o _';
$l['no_mysql_install'] = 'MySQL is not installed. To install it, please click <a href="'.$globals['index'].'act=apps&app=16">qui</a>';
$l['auto_backup_not_allowed'] = 'La frequenza di backup automatico scelta non è valida';
$l['invalid_script'] = 'Invalid Script ID';
$l['not_java_script'] = 'This script is not in Java';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['install'] = 'Installa';
$l['overview'] = 'Quadro generale';
$l['features'] = 'Caratteristiche';
$l['demo'] = 'Demo';
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
$l['in_directory_exp'] = 'La directory è legata al tuo dominio e <b> non dovrebbe esistere </b>. Per installare all\'indirizzo http://mydomain/dir/, digitare <b>dir</b>.';
$l['database_name'] = 'Nome del database';
$l['database_name_exp'] = 'Inserire il nome del database da creare per l\'installazione';
$l['softcopy_note'] = '<b>NOTE</b>: Questo software deve essere installato utilizzando la propria utilità di installazione. Per completare l\'installazione, ti preghiamo di visitare l\'URL che comparirà una volta copiati i file.';
$l['softsubmit'] = 'Installa';
$l['congrats'] = 'Congratulazioni, il software è stato installato correttamente';
$l['succesful'] = 'è stato installato con successo a';
$l['admin_url'] = 'URL amministrativo';
$l['setup_continue'] = 'Tuttavia, l\'installazione sarà completata dal software stesso. Per completare l\'installazione, ti preghiamo di visitare il seguente URL';
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
$l['clone'] = 'Clonare';
$l['backup'] = 'Backup';
$l['options'] = 'Opzioni';
$l['admin'] = 'Admin';
$l['notify_ver'] = 'Inviare messaggio di notifica di nuova versione a '.$globals['sn'].'';
$l['notifyversion'] = 'Grazie delle informazioni sulla nuova versione. Provvederemo ad esaminarle il prima possibile';
$l['del_insid'] = 'Sei sicuro di voler eliminare le installazioni selezionate? Questa azione è permanente. \n Non ti saranno richieste ulteriori conferme!';
$l['rem_inst_id'] = 'Rimozione installazione in corso - ';
$l['no_sel_inst'] = 'Non è stata selezionata alcuna installazione da eliminare.';
$l['inst_remvd'] = 'Le installazioni selezionate sono state rimosse. La pagina sarà ricaricata adesso!';
$l['remove'] = 'Rimuovere';
$l['go'] = 'Avanti';
$l['screenshots'] = 'Screenshot';
$l['downloading'] = 'Download pacchetto in corso';
$l['installing'] = 'Installareazione script in corso';
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
$l['prog_installing'] = 'Installareazione in corso '; // Dont remove trailing space
$l['prog_install_complete'] = 'Installareazione completata.';
$l['bad'] = 'Non valido';
$l['good'] = 'Buono';
$l['strong'] = 'Forte';
$l['short'] = 'Breve';
$l['strength_indicator'] = 'Indicatore di robustezza password';
$l['auto_backup'] = 'Backup automatici';
$l['exp_auto_backup'] = APP.' will take automated backups via CRON as per the frequency you select';
$l['auto_backup_rotation'] = 'Rotazione backup';
$l['exp_auto_backup_rotation'] = 'Se il limite di rotazione dei backup è stato raggiunto, la '.APP.' eliminerà il backup più vecchio di questa installazione e quindi eseguirà un nuovo backup. I backup occupano spazio di archiviazione, quindi scegliere la rotazione di backup in funzione dello spazio disponibile sul server';
$l['no_backup'] = 'Non eseguire backup';
$l['daily'] = 'Una volta al giorno';
$l['weekly'] = 'Una volta alla settimana';
$l['monthly'] = 'Una volta al mese';
$l['unlimited'] = 'Illimitato';
$l['changelog'] = 'Changelog';
$l['act_upgrade'] = 'Aggiorna eseguito di recente';
$l['act_clone'] = 'Clonazione eseguita di recente';
$l['act_backup'] = 'Backup eseguito di recente';
$l['act_install'] = 'Installareato di recente';
$l['act_edit'] = 'Modifiche apportate di recente';
$l['act_import'] = 'Importareato di recente';
$l['act_restore'] = 'Ripristinato di recente';

$l['install_tweet_sub'] = 'Parla agli amici del tuo sito web';
$l['err_auto_backup_limit'] = 'La rotazione dei backup non può eccedere il valore <b>&soft-1;</b>';
$l['select_domain'] = 'Selezionare dominio';
$l['with_selected'] = 'Con selezionati';
$l['not_in_free'] = '<b>&soft-1;</b> non può essere installato nella versione gratuita della '.APP.'!';
$l['notify_admin'] = 'Ti preghiamo di chiedere al tuo amministratore di server di acquistare la versione premium della '.APP.'!';
$l['related_scripts'] = 'Script correlati';
$l['install_now'] = 'Install Now';
$l['my_apps'] = 'My Apps';

$l['soft_ins_exists'] = 'An installation already exists at &soft-1; as per our records. To re-install the application please uninstall the existing installation!';
$l['no_java_support'] = 'Java script installation is not supported on this panel';

$l['choose_url'] = 'Choose Installation URL';
$l['choose_url_exp'] = 'Please choose the URL to install the software';

$l['error_max_ins_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Installations allowed per script';