<?php

//////////////////////////////////////////////////////////////
//===========================================================
// software_lang.php
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
$l['no_install'] = 'Il file INSTALL.XML non &egrave; stato trovato! Si prega di inviare una segnalazione all\'Amministratore del Server.';
$l['no_functions'] = 'Il file delle INSTALL FUNCTIONS non &egrave; stato trovato! Si prega di inviare una segnalazione all\'Amministratore del Server.';
$l['no_remove_functions'] = 'Non è stato possibile trovare le FUNZIONI DI RIMOZIONE! Ti preghiamo di segnalarlo all\'amministratore di server.';
$l['no_softdomain'] = 'Non hai scelto il dominio per installare il software.';
$l['wrong_softdomain'] = 'Il percorso del dominio selezionato non esiste.';
$l['softdirectory_exists'] = 'La cartella inserita esiste gi&agrave;! Si prega di inserire un altro nome.';
$l['no_space'] = 'Non hai spazio sufficiente per installare questo software!';
$l['no_softdb'] = 'Il database non &egrave; stato assegnato.';
$l['database_exists'] = 'Il database esiste gi&agrave;';
$l['databaseuser_exists'] = 'L\'utente del database esiste gi&agrave;. Si prega di inserire un altro nome utente';
$l['db_name_long'] = 'Il nome del DataBase non pu&ograve; essere pi&ugrave; lungo di 7 caratteri';
$l['db_limit_crossed'] = '&eacute; stato superato il numero massimo di database da creare';
$l['no_field'] = 'Il campo <b>&soft-1;</b> &egrave; obbligatorio e deve essere compilato.';
$l['error_adddb'] = 'Impossibile creare il database';
$l['error_adduser'] = 'Si &egrave; verificato un errore nell\'aggiunta del nuovo utente al database';
$l['no_package'] = 'Impossibile trovare il pacchetto di installazione!';
$l['no_decompress'] = 'Si &egrave; verificato un errore durante l\'estrazione del pacchetto di installazione.';
$l['mail_new_ins'] = 'E\' stata effettuata una nuova installazione di &soft-1;. Di seguito, i dettagli dell\'installazione: ';
$l['mail_path'] = 'Percorso';
$l['mail_url'] = 'URL';
$l['mail_admin_url'] = 'URL admin';
$l['mail_admin'] = 'Nome utente Admin';
$l['mail_pass'] = 'Password admin';
$l['mail_db'] = 'database MySQL';
$l['mail_dbuser'] = 'User DB MySQL';
$l['mail_dbhost'] = 'Host DB MySQL';
$l['mail_dbpass'] = 'Password DB MySQL';
$l['mail_time'] = 'Data di installazione';
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
$l['err_domain'] = 'Nessun dominio';
$l['err_domain_admin'] = 'Questo utente non ha alcun dominio. Ti preghiamo di contattare l\'amministratore.';
$l['err_pass_strength'] = 'La robustezza della password deve essere superiore a ';
$l['no_https'] = 'Non è stato possibile trovare il certificato trusted SSL';
$l['err_dbprefix'] = 'Il prefisso della tabella non è valido. I valori validi sono a-z, A-Z, 0-9 o _';
$l['no_php_install'] = 'PHP is not installed. To install it, please click <a href="'.$globals['index'].'act=apps&app=1">qui</a>';
$l['no_mysql_install'] = 'MySQL is not installed. To install it, please click <a href="'.$globals['index'].'act=apps&app=16">qui</a>';
$l['no_domain_verify'] = 'Accesso al tuo dominio non riuscito. Assicurati che il tuo dominio punta verso questo server e che l\'accesso al tuo dominio non è limitato da file .htaccess.';
$l['auto_backup_not_allowed'] = 'La frequenza di backup automatico scelta non è valida';
$l['invalid_script'] = 'Invalid Script ID';
$l['no_domain_found'] = 'No domain found. Please add a domain to install the script';
$l['not_php_script'] = 'This script is not in PHP';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['install'] = 'Installa';
$l['overview'] = 'Panoramica';
$l['features'] = 'Caratteristiche';
$l['demo'] = 'Demo';
$l['ratings'] = 'Valutazioni';
$l['import'] = 'Importa';
$l['software_ver'] = 'Versione';
$l['space_req'] = 'Spazio Richiesto';
$l['available_space'] = 'Spazio Disponibile';
$l['req_space'] = 'Spazio Richiesto';
$l['mb'] = 'MB';
$l['software_support'] = 'Supporto sul Software';
$l['support_link'] = 'Visita il Sito ufficiale per il Supporto';
$l['support_note'] = 'Attenzione: Softaculous non fornisce supporto per nessun software.';
$l['setup'] = 'Impostazioni del Software';
$l['choose_domain'] = 'Scegli il Dominio';
$l['choose_domain_exp'] = 'Scegli il dominio su cui installare ilsoftware.';
$l['choose_url'] = 'Choose Installation URL';
$l['choose_url_exp'] = 'Please choose the URL to install the software';
$l['in_directory'] = 'Nella Cartella';
$l['in_directory_exp'] = 'La cartella &egrave; relativa al tuo dominio e <b>non deve ancora esistere</b>. Ad esempio, per installare su http://mydomain/dir/, indicare soltanto <b>dir</b>. Per effettuare l\'installazione su http://mydomain/ lasciare il campo in bianco.';
$l['database_name'] = 'Nome del database';
$l['database_name_exp'] = 'Inserisci il nome del database da creare per l\'installazione';
$l['softcopy_note'] = '<b>ATTENZIONE</b>: Questo software deve essere installato utilizzando la propria Utility di installazione. Per completare l\'installazione, si prega di visitare l\'URL che verr&agrave; indicato una volta che i file sono stati copiati.';
$l['softsubmit'] = 'Installa';
$l['congrats'] = 'Congratulazioni, il software &egrave; stato installato con successo';
$l['succesful'] = '&egrave; stato installato con successo su';
$l['admin_url'] = 'URL admin';
$l['setup_continue'] = 'Il processo di installazione verr&agrave; completato dal Software stesso. Si prega di visitare il seguente URL';
$l['enjoy'] = 'Ci auguriamo che il processo di installazione sia stato semplice.';
$l['install_notes'] = 'Di seguito sono riportate alcune note importanti; ci raccomandiamo che vengano lette con attenzione';
$l['please_note'] = '<b>ATTENZIONE</b>: '.APP.' &egrave; semplicemente un programma di Installazione Automatica e non fornisce alcun supporto per il software. Si prega di visitare il sito ufficiale del software per qualsiasi tipo di supporto!';
$l['regards'] = 'Saluti';
$l['softinstaller'] = 'Autoinstaller '.APP.'';
$l['return'] = 'Ritorna alla Panoramica';
$l['current_ins'] = 'Installazioni correnti';
$l['link'] = 'Link';
$l['ins_time'] = 'Data di Installazione';
$l['version'] = 'Versione';
$l['upd_to'] = 'Aggiorna alla Versione';
$l['remove'] = 'Rimuovi';
$l['no_info'] = 'Nessuna Informazionirmazionirmazione';
$l['randpass'] = 'Genera una Password Casuale';
$l['ratesoft'] = 'Valuta questo Script';
$l['reviews'] = 'Recensioni';
$l['reviewsoft'] = 'Scrivi una Recensione';
$l['readreviews'] = 'Leggi le Recensioni';
$l['reviews_exp'] = 'Leggi le Recensioni scritte dagli altri utenti e';
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
$l['eu_auto_upgrade'] = 'Aggiornamento automatico';
$l['exp_eu_auto_upgrade'] = 'Select the automatic upgrade preference for this installation when a new version is available';
$l['auto_upgrade_plugins'] = 'Aggiornamento automatico &soft-1; Plugin';
$l['exp_auto_upgrade_plugins'] = 'Se spuntato, tutti i plugin attivi &soft-1; installati per questa versione saranno aggiornati automaticamente all\'ultima versione contestualmente all\'aggiornamento dello script.';
$l['auto_upgrade_themes'] = 'Aggiornamento automatico &soft-1; Temi';
$l['exp_auto_upgrade_themes'] = 'Se spuntato, tutti i temi attivi &soft-1; installati per questa versione saranno aggiornati automaticamente all\'ultima versione contestualmente all\'aggiornamento dello script.';
$l['auto_upgrade_enabled'] = 'Aggiornamento automatico attivato';
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
$l['changelog'] = 'Log delle modifiche';
$l['act_upgrade'] = 'Aggiorna eseguito di recente';
$l['act_clone'] = 'Clonazione eseguita di recente';
$l['act_backup'] = 'Backup eseguito di recente';
$l['act_install'] = 'Installareato di recente';
$l['act_edit'] = 'Modifiche apportate di recente';
$l['act_import'] = 'Importareato di recente';
$l['act_restore'] = 'Ripristinato di recente';
$l['ampps_download'] = 'You can develop <b>&soft-1;</b> on your <b>desktop</b> using our Gratuito developer tool Softaculous AMPPS. Click <a href="http://www.ampps.com/download?give=latest" target="_blank"><b>qui</b></a> to download <a href="http://www.ampps.com/download?give=latest" target="_blank"><img src="https://images.softaculous.com/ampps.gif" height="25" /></a>';

$l['install_tweet_sub'] = 'Parla agli amici del tuo sito web';

$l['choose_theme'] = 'Selezionare tema';
$l['clear_theme'] = 'Annullare la selezione';
$l['installing_theme'] = 'Installareazione tema in corso';
$l['cant_download_theme'] = 'Download dei file di tema non riuscito.';
$l['no_theme_package'] = 'Non è stato possibile trovare il pacchetto d\'installazione del tema!';
$l['unzipping_theme_files'] = 'Copia dei file e delle cartelle di tema in corso';
$l['use_this_theme'] = 'Selezionare questo';
$l['err_auto_backup_limit'] = 'La rotazione dei backup non può eccedere il valore <b>&soft-1;</b>';
$l['select_domain'] = 'Selezionare dominio';
$l['refresh'] = 'Aggiorna';
$l['purchase'] = 'Compra';
$l['your_purchased'] = 'Acquistato ';//trailing space is required
$l['your_purchased_times'] = ' ora(e)';
$l['err_theme_not_bought'] = 'Impossibile installare il tema, in quanto non l\'hai ancora acquistata!';
$l['err_theme_reached_limit'] = 'Ti preghiamo di acquistare questo tema e quindi riprovare a installarlo. Hai raggiunto il limite di installazioni per questo tema.';
$l['payment_heading'] = 'Acquista tema';
$l['payment_redirect'] = 'Sarai redirezionato verso la piattaforma di pagamento ';//trailing space is required
$l['close'] = 'Chiudi';
$l['free'] = 'Gratuito';
$l['select'] = 'Selezionare';
$l['theme_is_optional'] = '<b>Note</b>: Opzionale. Se non selezionato, sarà installato il tema predefinito.';
$l['with_selected'] = 'Con selezionati';
$l['not_in_free'] = '<b>&soft-1;</b> non può essere installato nella versione gratuita della '.APP.'!';
$l['notify_admin'] = 'Ti preghiamo di chiedere al tuo amministratore di server di acquistare la versione premium della '.APP.'!';
$l['related_scripts'] = 'Script correlati';

$l['date_added'] = 'Date Added';
$l['downloaded'] = 'Downloaded';

$l['soft_ins_exists'] = 'An installation already exists at &soft-1; as per our records. To re-install the application please uninstall the existing installation!';
$l['install_now'] = 'Installa ora';
$l['my_apps'] = 'Le mie applicazioni';

$l['backup_location'] = 'Backup Location';
$l['backup_location_exp'] = 'Choose the backup location to be used while backing up this installation';
$l['default'] = 'Default';
$l['invalid_backup_location'] = 'Backup location submitted does not exist';
$l['local_folder'] = 'Local Folder';

$l['custom_autobackup'] = 'Custom';
$l['custom_autobackup_cron'] = 'Automated Backups Cron time';
$l['custom_autobackup_cron_exp'] = 'Please specify the CRON timings for automated backups';

//Errors for autobcakup cron settings
$l['wrong_autobackup_cron_min'] = 'Automated Backup cron minute is wrong. Valid values are 0-59 or a *';
$l['wrong_autobackup_cron_hour'] = 'Automated Backup cron hour is wrong. Valid values are 0-23 or a *';
$l['wrong_autobackup_cron_day'] = 'Automated Backup cron day is wrong. Valid values are 1-31 or a *';
$l['wrong_autobackup_cron_month'] = 'Automated Backup cron month is wrong. Valid values are 1-12 or a *';
$l['wrong_autobackup_cron_weekday'] = 'Automated Backup cron weekday is wrong. Valid values are 0-7 or a *';

$l['quick_install'] = 'Quick Install';
$l['custom_install'] = 'Custom Install';

$l['outdated_script'] = '<b>&soft-1;</b> has not been updated for more than two years and may no longer be maintained or supported by the script vendor';

$l['pushtolive'] = 'Push to Live';
$l['staging'] = 'Create Staging';

$l['dont_auto_upgrade'] = 'Do not Auto Upgrade'; 
$l['minor_auto_upgrade'] = 'Upgrade to <b>Minor</b> versions only'; 
$l['major_auto_upgrade'] = 'Upgrade to any latest version available (<b>Major</b> as well as <b>Minor</b>)'; 
$l['auto_upgrade_major'] = '(Major and Minor)'; 
$l['auto_upgrade_minor'] = '(Minor)';

$l['err_fetch_key'] = 'Could not fetch the PFX API key at the moment';
$l['ampps_notify_premium'] = 'This feature is available in the premium version of AMPPS. Please purchase <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';

$l['view_items'] = 'List Items in Set';
$l['ok'] = 'OK';
$l['plugins'] = 'Plugins';
$l['themes'] = 'Themes';
$l['empty_set'] = 'There are currently no items in the set!!';

$l['error_max_ins_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Installations allowed per script';
$l['error_max_backup_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Backups allowed per script';
$l['error_max_clone_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Clone allowed per script';
$l['error_max_staging_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Staging allowed per script';

$l['remove_complete'] = 'Remove Completely';
$l['remove_info'] = 'Remove from '.APP;
$l['manage_sets'] = 'Gestisci plugin / set di temi';
$l['manage_plugin_sets'] = 'Manage Plugin Sets';
$l['manage_theme_sets'] = 'Manage Theme Sets';