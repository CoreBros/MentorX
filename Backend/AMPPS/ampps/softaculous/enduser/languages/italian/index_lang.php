<?php

//////////////////////////////////////////////////////////////
//===========================================================
// index_lang.php
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

$l['user_data_error_t'] = 'Errore nei Dati Utente';
$l['user_data_error'] = APP.' non &egrave; riuscito a caricare le Informazionirmazionirmazioni del tuo Account. Si prega di inviare una segnalazione all\'Amministratore del Server!';

$l['remote_licence_t'] = 'Licenza non valida';
$l['remote_licence'] = 'La tua licenza non è valida. Ti preghiamo di segnalarlo all\'amministratore di server!';

$l['enterprise_licence_t'] = 'Licenza non valida';
$l['enterprise_licence'] = 'La tua licenza non è valida. Ti preghiamo di segnalarlo all\'amministratore di server!';

$l['no_license'] = 'Impossibile trovare il file della LICENZA! Si prega di inviare una segnalazione all\'Amministratore del Server.';

$l['today'] = 'Oggi alle ore ';//The today string for showing todays post time

$l['init_theme_error_t'] = 'Errore nel Tema';//Title
$l['init_theme_error'] = 'Impossibile caricare il file del tema - &soft-1;.';

$l['init_theme_func_error_t'] = 'Errore nella Funzione del Tema';//Title
$l['init_theme_func_error'] = 'Impossibile caricare una o pi&ugrave; funzioni del tema di &soft-1;.';

$l['disable_softaculous_t'] = 'Softaculous disattivato';
$l['disable_softaculous'] = 'Softaculous è stato disattivato per questo utente. Ti preghiamo di contattare l\'amministratore di sistema.';

$l['load_theme_settings_error'] = 'Impossibile caricare i file delle impostazioni del Tema.';

$l['view_guide'] = 'View Guide';
$l['max_db_length'] = 'The database name cannot be greater than &soft-1; characters. Please choose a shorter database name.';


//Error Handle Function
$l['following_errors_occured'] = 'Si sono verificati i seguenti errori';

//Success Message Function
$l['following_message'] = '&eacute; stato restituito il seguente messaggio';

//Major Error Function
$l['fatal_error'] = 'Errore fatale';
$l['following_fatal_error'] = 'Si &egrave; verificato il seguente errore';

//Message Function
$l['soft_message'] = 'Messaggio da '.APP;
$l['following_soft_message'] = '&eacute; stato restituito il seguente messaggio';

//Update Softwares
$l['no_soft_found'] = 'Software non trovato... Necessita aggiornamento';
$l['ver_not_match'] = 'Le Versionei sono differenti... Necessita aggiornamento';
$l['ver_match'] = 'La Versione Corrente &egrave; la pi&ugrave; recente... Continua';
$l['del_prev_files'] = 'Cancellazione dei file precedenti...Done';
$l['fetch_latest'] = 'Ricerca dei file pi&ugrave; recenti in corso...';
$l['error_fetch_latest'] = 'Impossibile trovare file pi&ugrave; recenti... Continua';
$l['error_save_latest'] = 'Impossibile SALVARE i file pi&ugrave; recenti... Continua';
$l['got_latest'] = 'I file pi&ugrave; recenti sono stati salvati';
$l['unzip_latest'] = 'Decompressione dei file in corso...';
$l['error_unzip_latest'] = 'Errore nella decompressione... Continua';
$l['unzipped_latest'] = 'Decompressione effettuata con successo';

//Update Softaculous
$l['getting_info'] = 'Richiesta informazioni in corso...';
$l['error_getting_latest'] = 'Impossibile ottenere informazioni... Interruzione';
$l['got_info'] = 'Informazionirmazionirmazioni ottenute';
$l['manual_mode'] = 'La nuova versione di '.APP.' richiede attenzione manuale... Interruzione';
$l['no_updates'] = 'La Versione Corrente &egrave; la pi&ugrave; recente... Continua';
$l['fetch_upgrade'] = 'Ricerca aggiornamento in corso...';
$l['error_fetch_upgrade'] = 'Impossibile trovare i file di aggiornamento... Interruzione';
$l['error_save_upgrade'] = 'Impossibile SALVARE i file di aggiornamento... Interruzione';
$l['got_upgrade'] = 'File di aggiornamento salvati';
$l['unzip_upgrade'] = 'Decompressione dei file in corso...';
$l['error_unzip_upgrade'] = 'Errore nella decompressione... Interruzione';
$l['unzipped_upgrade'] = 'Decompressione effettuata con successo';
$l['md5_check'] = 'Verifica MD5 eseguita correttamente';
$l['err_md5_check'] = 'Non è stato possibile eseguire correttamente le verifiche MD5 per questi file';
$l['err_md5_file'] = ' inesistente';

//Errore MySQLs
$l['err_selectmy'] = 'Impossibile selezionare il database MySQL.';
$l['err_myconn'] = 'Impossibile stabilire una connessione al database MySQL.';
$l['err_makequery'] = 'Impossibile effettuare la query enumerata';
$l['err_mynum'] = 'Errore MySQL Numero';
$l['err_myerr'] = 'Errore MySQL';
$l['err_no_db_file'] = 'The database import file does not exist';
$l['err_no_open_db_file'] = 'Could not open the database import file';

//Importareareing Errors
$l['imp_wrong_softdomain'] = 'Impossibile trovare il percorso del dominio &soft-1;.';
$l['imp_softpath_wrong'] = 'Il PERCORSO di &soft-1; &egrave; ERRATO E non esite.';
$l['imp_ins_exists'] = '&soft-1; &egrave; gi&agrave; installato su &soft-2; e viene mantenuto da noi!';
$l['imp_no_func'] = 'Impossibile caricare le funzioni di importazionie per &soft-1;.';
$l['imp_err'] = 'Si sono verificati alcuni errori nell\'importazione del software installato su &soft-1;';
$l['err_query'] = 'Could not execute the query';

$l['invalid_search_input'] = 'Invalid Theme Search character. Only alphanumeric characters, underscore and hyphen are allowed.';

//hf_theme.php
$l['root_login'] = 'Registrato come ROOT';
$l['welcome'] = 'Benvenuto';
$l['logout'] = 'Logout';
$l['page_time'] = 'Pagina creata in';
$l['times_are'] = 'Tutti gli orari sono con fuso orario GMT';
$l['time_is'] = 'L\'ora corrente &egrave;';
$l['no_script_found'] = 'Script non trovato!';
$l['webuzo_sysapps_disabled'] = 'This functionality has been disabled from the Webuzo Admin Panel';
$l['webuzo_install_utility'] = 'This utility is not installed. Please install it first';

//The Categoria Language Variables
$l['forums'] = 'Forum';
$l['blogs'] = 'Blog';
$l['cms'] = 'Portals/CMS';
$l['galleries'] = 'Galleria Immagini';
$l['wikis'] = 'Wiki';
$l['admanager'] = 'Gestione Ad';
$l['calendars'] = 'Calendari';
$l['games'] = 'Giochi';
$l['mail'] = 'Mail';
$l['polls'] = 'Sondaggi';
$l['projectman'] = 'Gestione Progetto';
$l['ecommerce'] = 'E-Commerce';
$l['guestbooks'] = 'Guest Book';
$l['customersupport'] = 'Supporto Clienti';
$l['others'] = 'Altro';
$l['music'] = 'Musica';
$l['video'] = 'Video';
$l['files'] = 'Gestione file';
$l['go_cpanel'] = 'Vai al Pannello di Controllo';
$l['go_home'] = 'Pagina Principale';
$l['go_demos'] = 'Script in versione demo';
$l['go_ratings'] = 'Valutazioni script';
$l['go_settings'] = 'Modifica Impostazioni';
$l['go_email_settings'] = 'Impostazioni E-mail';
$l['go_installations'] = 'Tutte le installazioni';
$l['go_support'] = 'Guida e supporto';
$l['go_sync'] = 'Sincronizza con altri Installareareatori Automatici';

$l['go_backups'] = 'Backup e Ripristino';
$l['go_tasklist'] = 'Task List';
$l['go_apps_installations'] = 'All Installareareed Applications';
$l['go_my_themes'] = 'My Themes';
$l['go_logout'] = 'Logout';
$l['ins_stats'] = 'Installations';
$l['outdated_stats'] = 'Outdated Installations';
$l['backups_stats'] = 'Backups';

$l['type_php'] = 'PHP';
$l['type_perl'] = 'Perl';
$l['type_js'] = 'JavaScript';
$l['type_java'] = 'Java';
$l['type_python'] = 'Python';
$l['search'] = 'Cerca';
$l['back_to_top'] = 'Back to Top';

$l['show'] = 'Show';
$l['hide'] = 'Hide';

// Categorie
$l['cat_php_forums'] = 'Forum';
$l['cat_php_blogs'] = 'Blog';
$l['cat_php_cms'] = 'Portals/CMS';
$l['cat_php_galleries'] = 'Image Galleries';
$l['cat_php_wikis'] = 'Wiki';
$l['cat_php_admanager'] = 'Ad Management';
$l['cat_php_calendars'] = 'Calendars';
$l['cat_php_games'] = 'Gaming';
$l['cat_php_mail'] = 'Mails';
$l['cat_php_polls'] = 'Sondaggi e analisi';
$l['cat_php_projectman'] = 'Project Management';
$l['cat_php_ecommerce'] = 'E-Commerce';
$l['cat_php_guestbooks'] = 'Guest Book';
$l['cat_php_customersupport'] = 'Assistenza Clienti';
$l['cat_php_others'] = 'Altro';
$l['cat_php_music'] = 'Music';
$l['cat_php_video'] = 'Video';
$l['cat_php_rss'] = 'RSS';
$l['cat_php_socialnetworking'] = 'Social Networking';
$l['cat_php_microblogs'] = 'Micro Blog';
$l['cat_php_frameworks'] = 'Framework';
$l['cat_php_educational'] = 'Educational';
$l['cat_php_erp'] = 'ERP';
$l['cat_php_dbtools'] = 'DB Tools';
$l['cat_php_files'] = 'Gestione file';
$l['cat_js_libraries'] = 'Libraries';
$l['cat_js_widgets'] = 'Widgets';
$l['cat_perl_blogs'] = 'Blog';
$l['cat_perl_wikis'] = 'Wiki';
$l['cat_perl_forums'] = 'Forum';
$l['cat_perl_ecommerce'] = 'E-Commerce';
$l['cat_perl_mail'] = 'Mails';
$l['cat_java_cms'] = 'CMS';
$l['cat_java_forums'] = 'Forum';
$l['cat_java_projectman'] = 'Project Management';
$l['cat_java_erp'] = 'ERP';
$l['cat_java_blogs'] = 'Blog';
$l['cat_java_wikis'] = 'Wiki';
$l['cat_python_wikis'] = 'Wiki';
$l['cat_python_projectman'] = 'Project Management';
$l['cat_apps_server_side_scripting'] = 'Server Side Scripting';
$l['cat_apps_web_servers'] = 'Web Servers';
$l['cat_apps_utilities'] = 'Utilities';
$l['cat_apps_libraries'] = 'Libraries';
$l['cat_apps_databases'] = 'databases';
$l['cat_apps_stacks'] = 'Stacks';
$l['cat_apps_security'] = 'Sicurezza';
$l['cat_apps_statistics'] = 'Statistics';
$l['cat_apps_java_tools'] = 'Java Tools';
$l['cat_apps_java_containers'] = 'Java Containers';
$l['cat_apps_version_control'] = 'Versione Control';
$l['cat_apps_modules'] = 'Modules';
$l['cat_apps_message_queue'] ='Message Queue';

// Classes Categorie
$l['classes_ajax'] = 'Ajax';
$l['classes_cryptography'] = 'Cryptography';
$l['classes_algorithms'] = 'Algorithms';
$l['classes_artificialintelligence'] = 'Artificial Intelligence';
$l['classes_email'] = 'Email';
$l['classes_finances'] = 'Finances';
$l['classes_searching'] = 'Searching';
$l['classes_user_management'] = 'User Management';
$l['classes_utilitiesandtools'] = 'Utilities and Tools';
$l['classes_validation'] = 'Validation';
$l['classes_security'] = 'Sicurezza';
$l['classes_console'] = 'Console';
$l['classes_codegeneration'] = 'Code Generation';
$l['classes_chat'] = 'Chat';
$l['classes_astrology'] = 'Astrology';
$l['classes_audio'] = 'Audio';
$l['classes_biology'] = 'Biology';
$l['classes_blogs'] = 'Blog';
$l['classes_cache'] = 'Cache';
$l['classes_compression'] = 'Compression';
$l['classes_configuration'] = 'Configurazione';
$l['classes_contentmanagement'] = 'Content Management';
$l['classes_conversion'] = 'Conversion';
$l['classes_datatypes'] = 'Datatypes';
$l['classes_databases'] = 'databases';
$l['classes_debug'] = 'Debug';
$l['classes_designpatterns'] = 'Design Patterns';
$l['classes_ecommerce'] = 'E-Commerce';
$l['classes_elearning'] = 'E-Learning';
$l['classes_emulators'] = 'Emulators';
$l['classes_filesandfolders'] = 'File and Folders';
$l['classes_flash'] = 'Flash';
$l['classes_forums'] = 'Forum';
$l['classes_games'] = 'Games';
$l['classes_geography'] = 'Geography';
$l['classes_graphics'] = 'Graphics';
$l['classes_gui'] = 'GUI';
$l['classes_hosting'] = 'Hosting';
$l['classes_html'] = 'HTML';
$l['classes_http'] = 'HTTP';
$l['classes_language'] = 'Language';
$l['classes_projectmanagement'] = 'Project Management';

// Softaculous Remote Domain Strings
$l['no_domain_data'] = 'Domain Data Not Found!!';
$l['no_aefer_resp'] = 'Could not access the worker file over web. Please check if your domain is pointing to the correct server.'; 

// Webuzo Strings
$l['webuzo'] = 'Webuzo';
$l['go_domain'] = 'Gestire domini';
$l['webuzo_license_exp'] = 'Your license is not active or it has expired. If your license has expired, please renew it to continue using Webuzo';
$l['webuzo_license_exp_t'] = 'License Inattivo';
$l['err_no_access'] = 'You do not have permission to access this page';

// Ampps Strings
$l['ampps'] = 'AMPPS';
$l['go_domain'] = 'Gestire domini';
$l['ampps_license_exp'] = 'Your license is not active or it has expired. If your license has expired, please renew it to continue using Ampps';
$l['ampps_license_exp_t'] = 'License Inattivo';


/////////////////////////////////////////////////////////////
/////  Following Variables are used for Email Templates /////
/////////////////////////////////////////////////////////////


$l['notify_enable'] = 'Enabled';
$l['notify_disable'] = 'Disabled';

$l['autoupgrade_enable'] = 'Enabled';
$l['autoupgrade_disable'] = 'Disabled';

// Auto backup strings
$l['auto_backup_enable'] = 'Enabled';
$l['auto_backup_disable'] = 'Disabled';

// Installareare Template Vaiable
$l['mail_install_php_sub'] = 'Nuova installazione di $scriptname';
$l['mail_install_php'] = 'E\' stata effettuata una nuova installazione di $scriptname $version. Di seguito, i dettagli dell\'installazione: 
Percorso : $path
URL : $url
URL admin : $admin_url
<if $datadirectory>Directory dei dati : $datadirectory</if>
<if $admin_username>Nome utente Admin : $admin_username</if>
<if $admin_pass>Password amministratore : $admin_pass</if>
<if $admin_email>Email admin: $admin_email</if>
<if $dbname>database MySQL : $dbname</if>
<if $dbuser>Utente del database MySQL : $dbuser</if>
<if $dbhost>Host del database MySQL : $dbhost</if>
<if $dbpass>Password del database MySQL : $dbpass</if>
<if $cron>Cron Job : $cron</if>
<if $disable_notify_update>Update Notification : $disable_notify_update</if>
<if $eu_auto_upgrade>Aggiornamento automatico : $eu_auto_upgrade</if>
<if $auto_backup>Automated Backup : $auto_backup</if>
<if $auto_backup_rotation>Rotazione backup : $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
<if $time>Data di installazione : $time</if>

Se vuoi cancellare l\'iscrizione da tali email, vai al tuo Pannello di Controllo -> '.APP.' -> Impostazioni email
';

// Clonare Template Vaiable
$l['mail_clone_sub'] = 'Clonare installazione of $scriptname';
$l['mail_clone'] = 'La tua configurazione della $scriptname $versione è stata clonata con successo.

I tuoi dati originali di configurazione:
Percorso Originale: $old_path
URL Originale : $old_url

I tuoi dati clonati di configurazione :
Percorso: $path
URL: $url
URL admin: $admin_url
<if $datadirectory>Directory dei dati: $datadirectory</if>
<if $dbname>database MySQL: $dbname</if>
<if $dbuser>Utente del database MySQL: $dbuser</if>
<if $dbhost>Host del database MySQL: $dbhost</if>
<if $dbpass>Password del database MySQL: $dbpass</if>
<if $cron>Cron Job: $cron</if>
<if $time>Ora di installazione: $time</if>

Se vuoi cancellare l\'iscrizione da tali email, vai al tuo Pannello di Controllo -> '.APP.' -> Impostazioni email
';

// Installareare Template Vaiable
$l['mail_install_js_sub'] = 'Nuova installazione di $scriptname';
$l['mail_install_js'] = 'E\' stata effettuata una nuova installazione di $scriptname $version. Di seguito, i dettagli dell\'installazione: 
Percorso : $path
URL : $url
<if $disable_notify_update>Update Notification : $disable_notify_update</if>
<if $auto_backup>Automated Backup : $auto_backup</if>
<if $auto_backup_rotation>Rotazione backup : $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
<if $time>Data di installazione : $time</if>

Se vuoi cancellare l\'iscrizione da tali email, vai al tuo Pannello di Controllo -> '.APP.' -> Impostazioni email
';

// Installareare Template Vaiable
$l['mail_install_perl_sub'] = 'Nuova installazione di $scriptname';
$l['mail_install_perl'] = 'E\' stata effettuata una nuova installazione di $scriptname $version. Di seguito, i dettagli dell\'installazione: 
Percorso : $path
URL : $url
URL admin : $admin_url
<if $datadirectory>Directory dei dati : $datadirectory</if>
<if $wwwdir>Web directory : $wwwdir</if>
<if $admin_username>Nome utente Admin : $admin_username</if>
<if $admin_pass>Password amministratore : $admin_pass</if>
<if $admin_email>Email admin: $admin_email</if>
<if $dbname>database MySQL : $dbname</if>
<if $dbuser>Utente del database MySQL : $dbuser</if>
<if $dbhost>Host del database MySQL : $dbhost</if>
<if $dbpass>Password del database MySQL : $dbpass</if>
<if $cron>Cron Job : $cron</if>
<if $disable_notify_update>Update Notification : $disable_notify_update</if>
<if $auto_backup>Automated Backup : $auto_backup</if>
<if $auto_backup_rotation>Rotazione backup : $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
<if $time>Data di installazione : $time</if>

Se vuoi cancellare l\'iscrizione da tali email, vai al tuo Pannello di Controllo -> '.APP.' -> Impostazioni email
';

// Installareare Template Vaiable
$l['mail_install_java_sub'] = 'Nuova installazione di $scriptname';
$l['mail_install_java'] = 'E\' stata effettuata una nuova installazione di $scriptname $version. Di seguito, i dettagli dell\'installazione: 
Percorso : $path
URL : $url
URL admin : $admin_url
<if $datadirectory>Directory dei dati : $datadirectory</if>
<if $wwwdir>Web directory : $wwwdir</if>
<if $admin_username>Nome utente Admin : $admin_username</if>
<if $admin_pass>Password amministratore : $admin_pass</if>
<if $admin_email>Email admin: $admin_email</if>
<if $dbname>database MySQL : $dbname</if>
<if $dbuser>Utente del database MySQL : $dbuser</if>
<if $dbhost>Host del database MySQL : $dbhost</if>
<if $dbpass>Password del database MySQL : $dbpass</if>
<if $cron>Cron Job : $cron</if>
<if $disable_notify_update>Update Notification : $disable_notify_update</if>
<if $auto_backup>Automated Backup : $auto_backup</if>
<if $auto_backup_rotation>Rotazione backup : $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
<if $time>Data di installazione : $time</if>

Se vuoi cancellare l\'iscrizione da tali email, vai al tuo Pannello di Controllo -> '.APP.' -> Impostazioni email
';

$l['mail_install_python_sub'] = 'New Installazioni of $scriptname';
$l['mail_install_python'] = 'A new installation of $scriptname $version has been completed. The details of the installation are shown below:
Percorso : $path
URL : $url
URL admin : $admin_url
<if $datadirectory>Directory dei dati : $datadirectory</if>
<if $wwwdir>Web directory : $wwwdir</if>
<if $admin_username>Nome utente Admin : $admin_username</if>
<if $admin_pass>Password amministratore : $admin_pass</if>
<if $admin_email>Email admin: $admin_email</if>
<if $dbname>database MySQL : $dbname</if>
<if $dbuser>Utente del database MySQL : $dbuser</if>
<if $dbhost>Host del database MySQL : $dbhost</if>
<if $dbpass>Password del database MySQL : $dbpass</if>
<if $cron>Cron Job : $cron</if>
<if $disable_notify_update>Update Notification : $disable_notify_update</if>
<if $auto_backup>Automated Backup : $auto_backup</if>
<if $auto_backup_rotation>Rotazione backup : $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
<if $time>Ora di installazione : $time</if>

Se vuoi cancellare l\'iscrizione da tali email, vai al tuo Pannello di Controllo -> '.APP.' -> Impostazioni email
';

// Update template Variable (From ADMIN)
$l['mail_update_sub'] = 'Script Updates Available';
$l['mail_update'] = 'Questa email  si riferisce all’installazione datata di certi script in PHP che hai configurato. Per motivi di sicurezza devi aggiornare queste installazioni datate prima possibile.
I seguenti aggiornamenti dello script sono disponibili:

$installation

Per effettuare l\'upgrade di questi script vai al tuo Pannello di Controllo -> '.APP.' -> Installazioni.
Qui potrai aggiornare gli script.

Da Amministratore di Sistema $serverip
';

// Rimuovere Template Variable
$l['mail_remove_sub'] = 'Installazione di $scriptname rimossa';
$l['mail_remove'] = 'L\'installazione di $scriptname &egrave; stata rimossa. Di seguito i dettagli dell\'installazione: 
Percorso : $path
<if $url>URL : $url</if>
<if $datadirectory>Directory dei dati : $datadirectory</if>
<if $wwwdir>Web directory : $wwwdir</if>
<if $dbname>database MySQL : $dbname</if>
<if $dbuser>Utente del database MySQL : $dbuser</if>
<if $dbhost>Host del database MySQL : $dbhost</if>
<if $dbpass>Password del database MySQL : $dbpass</if>
<if $cron>Cron Job : $cron</if>
Data di installazione : $time
Data di rimozione : $rem_time

Se vuoi cancellare l\'iscrizione da tali email, vai al tuo Pannello di Controllo -> '.APP.' -> Impostazioni email
';

// Cron Template Variable
$l['mail_cron_sub'] = 'Script Updates Available';
$l['changelog'] = '== Changelog for';
$l['mail_cron'] = 'I seguenti aggiornamenti dello script sono disponibili:

$installation

Per effettuare l\'upgrade di questi script vai al tuo Pannello di Controllo -> '.APP.' -> Installazioni.
Qui potrai aggiornare gli script.


$changelog

Da '.APP.' Cron Jobs $serverip

Se vuoi cancellare l\'iscrizione da tali email, vai al tuo Pannello di Controllo -> '.APP.' -> Impostazioni email
';

// Modificaredetail Template Variable
$l['mail_editdetail_sub'] = 'Modified Dettagli d\'installazione of $scriptname';
$l['mail_editdetail'] = 'I dati di installazione di $scriptname sono stati modificati. Di seguito ci sono i dati modificati dell\'installazione :
Percorso: $path
URL: $url
<if $datadirectory>Directory dei dati: $datadirectory</if>
<if $wwwdir>Web directory: $wwwdir</if>
<if $wwwurl>Web URL: $wwwurl</if>
<if $admin_username>Nome utente Admin: $admin_username</if>
<if $admin_pass>Password amministratore: $admin_pass</if>
<if $dbname>database MySQL: $dbname</if>
<if $dbuser>Utente del database MySQL: $dbuser</if>
<if $dbhost>Host del database MySQL: $dbhost</if>
<if $dbpass>Password del database MySQL: $dbpass</if>
<if $cron>Cron Job: $cron</if>
<if $disable_notify_update>Notifica Aggiornamento: $disable_notify_update</if>
<if $eu_auto_upgrade>Aggiornamento automatico: $eu_auto_upgrade</if>
<if $auto_backup>Backup Automatico: $auto_backup</if>
<if $auto_backup_rotation>Rotazione backup: $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
Data di installazione: $time
Ora di modifica: $edit_time

Se vuoi cancellare l\'iscrizione da tali email, vai al tuo Pannello di Controllo -> '.APP.' -> Impostazioni email
';

// Backup Language Strings
$l['mail_backup_sub'] = 'Backup dell\'installazione del tuo $scriptname 
';
$l['mail_backup'] = 'Il Backup dell\'installazione del tuo $scriptname è stato completato con successo.
I dati sono i seguenti :
Installazioni Percorso: $path
Installazioni URL: $url
<if $backup_location>Backup Location : $backup_location</if>
Percorso di backup: $backup_file
<if $backup_note>Nota di backup: $backup_note</if>

Puoi accedere al backup dalla Sezione Backup in '.APP.'.

Se vuoi cancellare l\'iscrizione da tali email, vai al tuo Pannello di Controllo -> '.APP.' -> Impostazioni email
';

$l['mail_backup_fail_sub'] = 'Non riuscito : Backup dell\'installazione del tuo $scriptname 
';
$l['mail_backup_fail'] = 'Il Backup dell\'installazione del tuo $scriptname è stato completato con successo.
I dati sono i seguenti:
Installazioni Percorso: $path
Installazioni URL: $url
Percorso di backup: $backup_file

Si è verificato il seguente errore:
$error

Si prega di creare un nuovo backup dopo qualche istante.

Se vuoi cancellare l\'iscrizione da tali email, vai al tuo Pannello di Controllo -> '.APP.' -> Impostazioni email
';


// Ripristinare Language Strings
$l['mail_restore_sub'] = 'Ripristinare of your $scriptname';
$l['mail_restore'] = 'Il ripristino del backup del tuo $scriptname è stato completato con successo.
I dati sono i seguenti:
Installazioni Percorso: $path
Installazioni URL: $url

Se vuoi cancellare l\'iscrizione da tali email, vai al tuo Pannello di Controllo -> '.APP.' -> Impostazioni email
';

$l['mail_restore_fail_sub'] = 'Non riuscito: Ripristino del tuo $scriptname
';
$l['mail_restore_fail'] = 'Il ripristino del tuo $scriptname non è stato completato con successo.
I dati sono i seguenti:
Installazioni Percorso: $path
Installazioni URL: $url

Si è verificato il seguente errore:
$error

Si prega di ripristinare di nuovo il backup dopo qualche istante.

Se vuoi cancellare l\'iscrizione da tali email, vai al tuo Pannello di Controllo -> '.APP.' -> Impostazioni email
';

// Restore Background Language Strings
$l['mail_restore_bg_sub'] = 'Restore of your $scriptname backup started in background';
$l['mail_restore_bg'] = 'The restore of your $scriptname backup has started in the background. You will receive an email notification about the status once the restore process is completed.
The details are as follows :
Installation Path : $path
Installation URL : $url

Se vuoi cancellare l\'iscrizione da tali email, vai al tuo Pannello di Controllo -> '.APP.' -> Impostazioni email
';

// Backup Background Language Strings
$l['mail_backup_bg_sub'] = 'Backup of your $scriptname installation started in background';
$l['mail_backup_bg'] = 'The backup of your $scriptname has started in background. You will receive an email notification about the status once the backup process is completed.
The details are as follows :
Installation Path : $path
Installation URL : $url

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// import Language Strings
$l['mail_import_sub'] = 'Import of your $scriptname installation';
$l['mail_import'] = 'The import of your $scriptname installation was completed successfully.
The details are as follows :
Installation Path : $path
Installation URL : $url

Se vuoi cancellare l\'iscrizione da tali email, vai al tuo Pannello di Controllo -> '.APP.' -> Impostazioni email
';

// import fail Language Strings
$l['mail_import_fail_sub'] = 'Failed : Import of your $scriptname installation';
$l['mail_import_fail'] = 'The import of your $scriptname installation did not complete successfully.
The details are as follows :
Installation Path : $path
Installation URL : $url

The following error occured :
$error

Please try to import the installation again after some time.

Se vuoi cancellare l\'iscrizione da tali email, vai al tuo Pannello di Controllo -> '.APP.' -> Impostazioni email
';

// Import Background Language Strings
$l['mail_import_bg_sub'] = 'Import of your $scriptname installation';
$l['mail_import_bg'] = 'The import of your $scriptname installation has started in the background. You will receive an email notification about the status once the import process is completed.
The details are as follows :
Installation Path : $path
Installation URL : $url

Se vuoi cancellare l\'iscrizione da tali email, vai al tuo Pannello di Controllo -> '.APP.' -> Impostazioni email
';


// Installareare Template Vaiable CLASSES
$l['mail_install_classes_sub'] = 'New Installazioni of $classesname';
$l['mail_install_classes'] = 'A new installation of $classesname $version has been completed. The details of the installation are shown below:
Percorso : $path
<if $time>Ora di installazione : $time</if>

Se vuoi cancellare l\'iscrizione da tali email, vai al tuo Pannello di Controllo -> '.APP.' -> Impostazioni email
';

////////////////////////
// ADMIN UPGRADE - 6
////////////////////////

// Aggiornamento automatico Email For Admin (successful)
$l['mail_adminupgrade_success_admin_sub'] = 'L\'installazione dello $scriptname dell\'utente $user è stata aggiornata con successo
';
$l['mail_adminupgrade_success_admin'] = 'L\'installazione dello $scriptname dell\'utente $user è stata aggiornata all\'ultima versione con successo
I dati sono i seguenti:
Installazioni URL: $url
Ultima Versione: $version
Vecchia Versione: $oldversion
';

// Aggiornamento automatico Email For Admin (Failed) but restored successfully.
$l['mail_adminupgrade_fail_admin_sub'] = 'Aggiornamento processo per l\'installazione $scriptname non riuscito e ripristinato da backup
';
$l['mail_adminupgrade_fail_admin'] = 'Aggiornamento processo di installazione $scriptname per l\'utente $user non riuscito.
'.APP.' ha creato un backup prima dell\'upgrade, e il backup è stato ripristinato con successo.
Installazioni URL: $url
Versione Attuale: $oldversion
Ultima Versione: $version
I dati dell\'errore sono i seguenti :
Errore: $upgrade_error
';

// Aggiornamento automatico Email for user (successful)
$l['mail_adminupgrade_success_user_sub'] = 'L\'installazione dello $scriptname è stata aggiornata con successo da parte del System Admin
';
$l['mail_adminupgrade_success_user'] = 'L\'installazione del tuo $scriptname è stata aggiornata con successo all\'ultima versione da parte del System Admin
I dati sono i seguenti:
Installazioni URL: $url
Ultima Versione: $version
Vecchia Versione: $oldversion

Se vuoi cancellare l\'iscrizione da tali email, vai al tuo Pannello di Controllo -> '.APP.' -> Impostazioni email
';

// Aggiornamento automatico Email for user (fail) but restored successfully
$l['mail_adminupgrade_fail_user_sub'] = 'Aggiornamento dell\'installazione del tuo $scriptname da parte del System Admin non riuscito';
$l['mail_adminupgrade_fail_user'] = 'Il System Admin ha provato ad aggiornare l\'installazione del tuo $scriptname, ma il processo di upgrade non è riuscito.
È stato creato un backup prima dell\'aggiornamento della tua installazione, e la tua installazione è stata ripristinata da questo backup.
Installazioni URL: $url
Versione Attuale: $oldversion
Ultima Versione: $version
I dati dell\'errore sono i seguenti:
Errore: $upgrade_error

Se vuoi cancellare l\'iscrizione da tali email, vai al tuo Pannello di Controllo -> '.APP.' -> Impostazioni email
';

// ALL IS FAILED (Aggiorna and RESTORE toooo) (FOR ADMIN)
$l['mail_adminupgrade_restore_fail_admin_sub'] = 'Aggiornamento processo di installazione $scriptname per l\'utente $user non riuscito.
';
$l['mail_adminupgrade_restore_fail_admin'] = 'Aggiornamento processo di installazione $scriptname per l\'utente $user non riuscito.
È stato creato un backup prima dell\'upgrade, ma il processo di ripristino comunque non è riuscito!

Richiederà un ripristino manuale. La guida per il ripristino manuale è disponibile qui :
http://www.softaculous.com/docs/Manual_Restore

Di seguito sono riportati i dati di installazione e backup che potrebbero servirti per ripristinare l\'installazione del tuo $scriptname :
PERCORSO_AL_TUO_FILE_BACKUP: $backup_path
PERCORSO_DI_INSTALLAZIONE: $softpath
<if $dbname>NOME_DATABASE: $dbname</if>
<if $dbuser>UTENTE_DATABASE: $dbuser</if>
<if $dbpass>PASSWORD_DATABASE: $dbpass</if>
<if $dbhost>HOST_DATABASE: $dbhost</if>

Installazioni URL: $url
Versione Attuale: $oldversion
Ultima Versione: $version
<if $upgrade_error>
I dati dell\'errore sono i seguenti:
Errore: $upgrade_error
</if>
<if $error>
Ripristina dati dell\'errore come di seguito:
Errore: $error
</if>

Lo staff '.APP.' è disponibile anche per l\'assistenza. Puoi contattare lo staff '.APP.' tramite (support@'.strtolower(APP).'.com) per qualsiasi problema.
';

// ALL IS FAILED (Aggiorna and RESTORE toooo) (FOR USER)
$l['mail_adminupgrade_restore_fail_user_sub'] = 'Aggiornamento dell\'installazione del tuo $scriptname da parte del System Admin non riuscito
';
$l['mail_adminupgrade_restore_fail_user'] = 'Il System Admin ha cercato di aggiornare la configurazione del tuo $scriptname, ma l\'upgrade non è riuscito.
È stato creato un backup prima dell\'upgrade, ma il processo di ripristino comunque non è riuscito!

Richiederà un ripristino manuale. La guida per il ripristino manuale è disponibile qui :
http://www.softaculous.com/docs/Manual_Restore

Di seguito sono riportati i dati di installazione e backup che potrebbero servirti per ripristinare l\'installazione del tuo $scriptname :
PERCORSO_AL_TUO_FILE_BACKUP: $backup_path
PERCORSO_DI_INSTALLAZIONE: $softpath
<if $dbname>NOME_DATABASE: $dbname</if>
<if $dbuser>UTENTE_DATABASE: $dbuser</if>
<if $dbpass>PASSWORD_DATABASE: $dbpass</if>
<if $dbhost>HOST_DATABASE: $dbhost</if>

Installazioni URL: $url
Versione Attuale: $oldversion
Ultima Versione: $version
<if $upgrade_error>
I dati dell\'errore sono i seguenti:
Errore: $upgrade_error
</if>
<if $error>
Ripristina dati dell\'errore come di seguito:
Errore: $error
</if>

Lo staff '.APP.' è disponibile anche per l\'assistenza. Puoi contattare lo staff '.APP.' tramite (support@'.strtolower(APP).'.com) per qualsiasi problema.

Se vuoi cancellare l\'iscrizione da tali email, vai al tuo Pannello di Controllo -> '.APP.' -> Impostazioni email
';

////////////////////////
// USER UPGRADE - 3
////////////////////////

// When upgraded by user successfully (By user)
$l['mail_userupgrade_success_user_sub'] = 'Installazione $scriptname aggiornata con successo
';
$l['mail_userupgrade_success_user'] = 'L\'installazione del tuo $scriptname è stata aggiornata con successo all\'ultima versione.
I dati sono i seguenti:
Installazioni URL: $url
Ultima Versione: $version
Vecchia Versione: $oldversion

Se vuoi cancellare l\'iscrizione da tali email, vai al tuo Pannello di Controllo -> '.APP.' -> Impostazioni email
';

// If any error occured while upgrading, (By user)
$l['mail_userupgrade_fail_user_sub'] = 'Aggiornamento dell\'installazione del tuo $scriptname non riuscito
';
$l['mail_userupgrade_fail_user'] = 'L\'upgrade dell\'installazione del tuo $scriptname non è riuscito.
I dati sono i seguenti:
Installazioni URL: $url
Versione Attuale: $oldversion
Ultima Versione: $version
Errore: $upgrade_error

Se vuoi cancellare l\'iscrizione da tali email, vai al tuo Pannello di Controllo -> '.APP.' -> Impostazioni email
';

// If UPGRADE and RESTORE failed while upgrading, (By user)
$l['mail_userupgrade_restore_fail_user_sub'] = 'Aggiornamento dell\'installazione del tuo $scriptname non riuscito
';
$l['mail_userupgrade_restore_fail_user'] = 'L\'upgrade dell\'installazione del tuo $scriptname non è riuscito.
È stato creato un backup prima dell\'upgrade, ma il processo di ripristino comunque non è riuscito!

Richiederà un ripristino manuale. La guida per il ripristino manuale è disponibile qui :
http://www.softaculous.com/docs/Manual_Restore

I dati sono i seguenti:
Installazioni URL: $url
Versione Attuale: $oldversion
Ultima Versione: $version
<if $upgrade_error>
I dati dell\'errore sono i seguenti:
Errore: $upgrade_error
</if>
<if $error>
I dati di ripristino dell\'errore sono i seguenti:
Errore: $error
</if>

Lo staff '.APP.' è disponibile anche per l\'assistenza. Puoi contattare lo staff '.APP.' tramite (support@'.strtolower(APP).'.com) per qualsiasi problema.

Se vuoi cancellare l\'iscrizione da tali email, vai al tuo Pannello di Controllo -> '.APP.' -> Impostazioni email
';

////////////////////////
// AUTO UPGRADE - 3
////////////////////////

// When AUTOUPGRADED successfully
$l['mail_autoupgrade_success_user_sub'] = 'Aggiornamento automatico delle installazioni $scriptname riuscito
';
$l['mail_autoupgrade_success_user'] = 'L\'installazione del tuo $scriptname è stata aggiornata automaticamente con successo all\'ultima versione.
I dati sono i seguenti:
Installazioni URL: $url
Ultima Versione: $version
Vecchia Versione: $oldversion

Se vuoi cancellare l\'iscrizione da tali email, vai al tuo Pannello di Controllo -> '.APP.' -> Impostazioni email
';

// When AUTOUPGRADE FAILED
$l['mail_autoupgrade_fail_user_sub'] = 'Aggiornamento automatico dell\'installazione del tuo $scriptname non riuscito
';
$l['mail_autoupgrade_fail_user'] = 'Aggiornamento automatico dell\'installazione del tuo $scriptname non riuscito
I dati sono i seguenti:
Installazioni URL: $url
Versione Attuale: $oldversion
Ultima Versione: $version
Errore: $upgrade_error

Se vuoi cancellare l\'iscrizione da tali email, vai al tuo Pannello di Controllo -> '.APP.' -> Impostazioni email
';

// If UPGRADE and RESTORE failed while AUTOUPGRADING
$l['mail_autoupgrade_restore_fail_user_sub'] = 'Aggiornamento automatico dell\'installazione del tuo $scriptname non riuscito
';
$l['mail_autoupgrade_restore_fail_user'] = 'Aggiornamento automatico dell\'installazione del tuo $scriptname non riuscito
È stato creato un backup prima dell\'upgrade, ma il processo di ripristino comunque non è riuscito!

Richiederà un ripristino manuale. La guida per il ripristino manuale è disponibile qui :
http://www.softaculous.com/docs/Manual_Restore

I dati sono i seguenti:
Installazioni URL: $url
Versione Attuale: $oldversion
Ultima Versione: $version
<if $upgrade_error>
I dati dell\'errore sono i seguenti:
Errore: $upgrade_error
</if>
<if $error>
Ripristinare i dati dell\'errore come di seguito:
Errore: $error
</if>

Lo staff '.APP.' è disponibile anche per l\'assistenza. Puoi contattare lo staff '.APP.' tramite (support@'.strtolower(APP).'.com) per qualsiasi problema.

Se vuoi cancellare l\'iscrizione da tali email, vai al tuo Pannello di Controllo -> '.APP.' -> Impostazioni email
';

////////////////////////
// PRE UPGRADE CHECK 
////////////////////////

// If pre upgradation check fails while AUTOUPGRADE (FOR USER)
$l['mail_autoupgrade_precheck_fail_sub'] = 'Controllo aggiornamento precedente non riuscito
';
$l['mail_autoupgrade_precheck_fail'] = 'Il processo di aggiornamento automatico per la seguente configurazione non può essere completato, perché non soddisfa i requisiti di upgrade :
Installazioni URL: $url
Versione Attuale: $oldversion
Ultima Versione: $version
<if $upgrade_error>
Errore: $upgrade_error
</if>
<if $error>
Errore: $error
</if>

Se vuoi cancellare l\'iscrizione da tali email, vai al tuo Pannello di Controllo -> '.APP.' -> Impostazioni email
';

/////////////////////////////////
// Backup Failed CLI UPGRADE
/////////////////////////////////

// If a backup fails before AUTO UPGRADING an installation (FOR USER)
$l['mail_autoupgrade_backup_fail_sub'] = 'Processo di backup non riuscito prima dell\'aggiornamento automatico dell\'installazione dello $scriptname
';
$l['mail_autoupgrade_backup_fail'] = 'Il backup dell\'installazione dello $scriptname non è riuscito. Pertanto il processo di aggiornamento automatico è stato interrotto.
I dati sono i seguenti:
Installazioni URL: $url
Versione Attuale: $oldversion
Ultima Versione: $version
Errore: $error

Se vuoi cancellare l\'iscrizione da tali email, vai al tuo Pannello di Controllo -> '.APP.' -> Impostazioni email
';

$l['err_openconfig'] = 'Apertura del file Configurazione non riuscita';
$l['err_writeconfig'] = 'Scrittura del file Configurazione non riuscita';

$l['classes_con_failed'] = 'Error : Failed to Connect to Server .';
$l['cl_ratings'] = 'Valutazioni';
$l['cl_author'] = 'Author';
$l['cl_license'] = 'License';
$l['cl_version'] = 'Versione';
$l['cl_show_files'] = 'Show File';
$l['cl_install_but'] = 'Installa';
$l['expand_view'] = 'Click qui for full view';
$l['collapse_view'] = 'Click qui for embedded view';
$l['email_off_notice'] = '<b>NOTE : Notification emails are disabled so you will not receive any email.</b>';

// Add User Language Strings
$l['mail_add_user_sub'] = 'Welcome to Softaculous Remote Installareareer';
$l['mail_add_user'] = 'You can now successfully login into Softaculous Remote Installareareer.
The details are as follows :
User 					: $username
API Key 				: $api_key
API Password 			: $api_pass
Number of Users allowed	: $number_of_users';

// Requirement parser languages
$l['req_ver_nf'] = 'Required &soft-1; version &soft-2; &soft-3; AND found version is : ';
$l['req_ext_nf'] = 'Required &soft-1; extension not found :';
$l['req_func_nf'] = 'Required &soft-1; function not found';
$l['req_ext_ver'] = 'Required &soft-1; &soft-2; extension version &soft-3; &soft-4; BUT found &soft-5;';
$l['gt'] = 'greater than';
$l['lt'] = 'less than';
$l['ge'] = 'greater than equal to';
$l['le'] = 'less than equal to';
$l['eq'] = 'is';
$l['ne'] = 'should not be equal to';

// Automated Backup Language Strings
$l['mail_auto_backup_sub'] = 'Backup automatico dell\'installazione del tuo $scriptname 
';
$l['mail_auto_backup'] = 'Il backup automatico dell\'installazione del tuo $scriptname è stato completato con successo.
I dati sono i seguenti:
Installazioni Percorso: $path
Installazioni URL: $url
Percorso di backup: $backup_file
<if $backup_location>Backup Location : $backup_location</if>

Puoi accedere al backup dalla Sezione Backup in '.APP.'.

Se vuoi cancellare l\'iscrizione da tali email, vai al tuo Pannello di Controllo -> '.APP.' -> Impostazioni email
';

$l['mail_auto_backup_fail_sub'] = 'Non riuscito : Backup automatico dell\'installazione del tuo $scriptname 
';
$l['mail_auto_backup_fail'] = 'Il backup automatico dell\'installazione del tuo $scriptname non è stato completato con successo.
I dati sono i seguenti:
Installazioni Percorso: $path
Installazioni URL: $url
Percorso di backup: $backup_file
<if $backup_location>Backup Location : $backup_location</if>
Si è verificato il seguente errore:
$error

Se vuoi cancellare l\'iscrizione da tali email, vai al tuo Pannello di Controllo -> '.APP.' -> Impostazioni email
';

// Email for sending the list of scripts which does not meet the requirements.
$l['mail_script_requirement_sub'] = 'Log dei requisiti dello script non riuscito
';
$l['mail_script_requirement'] = 'La seguente lista degli script non soddisfa i requisiti minimi sul tuo server e potrebbe non funzionare.
I dati sono i seguenti:

$failed_req

Nota: se stai modificando la versione di PHP su runtime (ad esempio utilizzando CageFS, hive, .htaccess etc.) allora puoi ignorare i precedenti avvisi sulla versione PHP non riuscita.';

// Softpanel Language Strings
$l['no_www_domain'] = 'Please close all '.$globals['sn'].' pages and log out da the control panel using the log out button.
Afterwards you can log in again and use '.$globals['sn'].'.';

$l['install_tweet'] = 'I just installed #[[SCRIPTNAME]] on [[softurl]] via #[[APP]] #[[TYPE]]';
$l['install_tweet_classes'] = 'I just installed #[[SCRIPTNAME]] via #[[APP]] #[[TYPE]]';
$l['upgrade_tweet'] = 'I just upgraded #[[SCRIPTNAME]] on [[softurl]] via #[[APP]] #[[TYPE]]';
$l['clone_tweet'] = 'I just cloned #[[SCRIPTNAME]] on [[softurl]] via #[[APP]] #[[TYPE]]';

// month strings
$l['January'] = 'Gennaio';
$l['February'] = 'febbraio';
$l['March'] = 'Marzo';
$l['April'] = 'Aprile';
$l['May'] = 'Maggio';
$l['June'] = 'Giugno';
$l['July'] = 'Luglio';
$l['August'] = 'Agosto';
$l['September'] = 'Settembre';
$l['October'] = 'Ottobre';
$l['November'] = 'Novembre';
$l['December'] = 'Dicembre';

// Mail templates for webuzo backup
$l['mail_webuzo_backup_sub'] = '$type backup completed successfully';
$l['mail_webuzo_backup'] = 'The backup process was completed successfully.
Backup file is created with the file name:
$filename

Regards,
Webuzo Team';
$l['mail_webuzo_backup_fail_sub'] = '$type backup failed';
$l['mail_webuzo_backup_fail'] = 'The backup process did not complete successfully.
The following error(s) occured:
$error

Regards,
Webuzo Team';
$l['mail_webuzo_restore_sub'] = '$type restore completed successfully';
$l['mail_webuzo_restore'] = 'The restoration was completed successfully.

The file restored was:
$filename

Regards,
Webuzo Team';
$l['mail_webuzo_restore_fail_sub'] = '$type restore failed';
$l['mail_webuzo_restore_fail'] = 'The restore process encountered errors and would not be completed.
The following error(s) occured:
$error

Regards,
Webuzo Team';

// Staging Template Vaiable
$l['mail_staging_sub'] = 'Staging of $scriptname';
$l['mail_staging'] = 'Your Staging of $scriptname $version has been completed successfully.

Your live installation details :
Original Path : $live_path
Original URL : $live_url

Your staging installation details :
Path : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>Data Directory : $datadirectory</if>
<if $dbname>MySQL Database : $dbname</if>
<if $dbuser>MySQL DB User : $dbuser</if>
<if $dbhost>MySQL DB Host : $dbhost</if>
<if $dbpass>MySQL DB Password : $dbpass</if>
<if $cron>Cron Job : $cron</if>
<if $time>Time of Installation : $time</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings';

// Pushtolive Template Vaiable
$l['mail_pushtolive_sub'] = 'Pushing $scriptname to live';
$l['mail_pushtolive'] = 'Pushing your $scriptname site $version to live has been completed successfully.

Your live installation details :
Original Path : $live_path
Original URL : $live_url

Your staging installation details :
Path : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>Data Directory : $datadirectory</if>
<if $dbname>MySQL Database : $dbname</if>
<if $dbuser>MySQL DB User : $dbuser</if>
<if $dbhost>MySQL DB Host : $dbhost</if>
<if $dbpass>MySQL DB Password : $dbpass</if>
<if $cron>Cron Job : $cron</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings';

/////////////////////////////////
// Backup Failed CLI UPGRADE of Plugins/Themes
/////////////////////////////////

// If a backup fails before AUTO UPGRADING Plugins/Themes of an installation (FOR USER)
$l['mail_autoupgrade_extras_backup_fail_sub'] = 'Backup process failed before auto upgrading plugins/theme of your $scriptname installation';
$l['mail_autoupgrade_extras_backup_fail'] = 'The backup process of plugins/theme of your $scriptname installation has failed. So the auto upgrade plugins/theme process was not performed.
The details are as follows :
Installation URL : $url
Error : $error

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

/////////////////////////////////
// Upgrade Plugins/Themes By USER
/////////////////////////////////

// Plugins/Theme when upgraded by user successfully (By user)
$l['mail_userupgrade_extras_success_user_sub'] = 'Plugins/Theme of $scriptname installation upgraded successfully';
$l['mail_userupgrade_extras_success_user'] = 'Plugins/Theme of your $scriptname installation have been successfully upgraded to the latest version.
The details are as follows :
Installation URL : $url

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// If UPGRADE and RESTORE Plugins/Theme failed while upgrading, (By user)
$l['mail_userupgrade_extras_restore_fail_user_sub'] = 'Upgrade of Plugins/Theme of your $scriptname installation failed';
$l['mail_userupgrade_extras_restore_fail_user'] = 'The upgrade of plugins/theme of your $scriptname installation has failed.
A backup had been created before upgrading, but the restore process also failed !

It will require a manual restore. Guide for the manual restore is available here :
http://www.softaculous.com/docs/Manual_Restore

The details are as follows :
Installation URL : $url
<if $upgrade_error>
The Upgrade error details are as follows :
Error : $upgrade_error
</if>
<if $error>
The Restore error details are as follows :
Error : $error
</if>

The '.APP.' team is available for help as well. You can contact the '.APP.' Team (support@'.strtolower(APP).'.com) if you face any problems.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// If any error occured while upgrading plugins/theme, (By user)
$l['mail_userupgrade_extras_fail_user_sub'] = 'Upgrade of plugins/theme of your $scriptname installation failed';
$l['mail_userupgrade_extras_fail_user'] = 'The upgrade of plugins/theme of your $scriptname installation has failed.
The details are as follows :
Installation URL : $url
Error : $upgrade_error

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

/////////////////////////////////
// Auto Upgrade Plugins/Themes
/////////////////////////////////

// When AUTOUPGRADED Plugins/Theme successfully
$l['mail_autoupgrade_extras_success_user_sub'] = 'Plugins/Theme of $scriptname Installation Auto Upgraded Successfully';
$l['mail_autoupgrade_extras_success_user'] = 'Plugins/Theme of your $scriptname installation have been successfully auto upgraded to the latest version.
The details are as follows :
Installation URL : $url
<if $plugins_updated>
Following Active Plugins were upgraded :
$plugins_updated
</if>
<if $theme_updated>
Following Active Theme was upgraded :
$theme_updated
</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// If UPGRADE and RESTORE of Plugins/Theme failed while AUTOUPGRADING
$l['mail_autoupgrade_extras_restore_fail_user_sub'] = 'Auto Upgrade of plugins/theme of your $scriptname installation failed';
$l['mail_autoupgrade_extras_restore_fail_user'] = 'The auto upgrade  of plugins/theme of your $scriptname installation has failed.
A backup had been created before upgrading, but the restore process also failed !

It will require a manual restore. Guide for the manual restore is available here :
http://www.softaculous.com/docs/Manual_Restore

The details are as follows :
Installation URL : $url
<if $upgrade_error>
The Upgrade error details are as follows :
Error : $upgrade_error
</if>
<if $error>
The Restore error details are as follows :
Error : $error
</if>

The '.APP.' team is available for help as well. You can contact the '.APP.' Team (support@'.strtolower(APP).'.com) if you face any problems.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// When AUTOUPGRADE Plugins/Theme FAILED
$l['mail_autoupgrade_extras_fail_user_sub'] = 'Auto Upgrade of plugins/theme of your $scriptname installation failed';
$l['mail_autoupgrade_extras_fail_user'] = 'The auto upgrade of plugins/theme of your $scriptname installation has failed.
The details are as follows :
Installation URL : $url
Error : $upgrade_error

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// clone fail Language Strings
$l['mail_clone_fail_sub'] = 'Failed : Clone of your $scriptname installation';
$l['mail_clone_fail'] = 'The clone of your $scriptname installation did not complete successfully.
The details are as follows :
Installation Path : $path
Installation URL : $url

The following error occured :
$error

Please try to import the installation again after some time.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// clone fail Language Strings
$l['mail_staging_fail_sub'] = 'Failed : Staging of your $scriptname installation';
$l['mail_staging_fail'] = 'The staging of your $scriptname installation did not complete successfully.
The details are as follows :
Installation Path : $path
Installation URL : $url

The following error occured :
$error

Please try to import the installation again after some time.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

$l['mail_upgrade_fail_sub'] = 'Failed : Upgrade of your $scriptname installation';
$l['mail_upgrade_fail'] = 'The upgrade of your $scriptname installation did not complete successfully.
The details are as follows :
Installation Path : $path
Installation URL : $url

The following error occured :
$error

Please try to upgrade again after some time.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

$l['invalid_resp'] = 'Invalid response received ';

