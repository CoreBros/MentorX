<?php

//////////////////////////////////////////////////////////////
//===========================================================
// index_lang.php
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


$l['user_data_error_t'] = 'Data error';//User Data Error
$l['user_data_error'] = APP.' kan uw log in gegevens niet vinden. Neem contact op met de server administrator!';//Softaculous was unable to load your Account Information. Please report this to the Server Admin!

$l['remote_licence_t'] = 'Invalid License';
$l['remote_licence'] = 'You are not using a valid license. Please report this to the server administrator!';

$l['enterprise_licence_t'] = 'Invalid License';
$l['enterprise_licence'] = 'You are not using a valid license. Please report this to the server administrator!';

$l['no_license'] = 'Het licentiebestand kan niet worden gevonden! Neem contact op met de server administrator.';//The LICENSE file could not be found! Please report this to the Server Admin.

$l['today'] = '<b>Vandaag</b> om ';//<b>Today</b> at //The today string for showing todays post time

$l['init_theme_error_t'] = 'Thema Fout';//Theme Error//Title
$l['init_theme_error'] = 'Kan het thema niet laden - &soft-1;.';//Unable to load the theme file - &soft-1;.

$l['init_theme_func_error_t'] = 'Thema functie fout';//Theme Function Error//Title
$l['init_theme_func_error'] = 'Kan de thema functie(s) niet laden van &soft-1;.';//Unable to load the theme function(s) of &soft-1;.

$l['disable_softaculous_t'] = 'Softaculous is niet geactiveerd';
$l['disable_softaculous'] = 'Softaculous is niet geactiveerd voor uw account. Neem contact op met de server administrator.';

$l['load_theme_settings_error'] = 'Kan het thema instellingen bestand niet laden.';//Unable to load the Themes settings file.

$l['view_guide'] = 'View Guide';
$l['max_db_length'] = 'The database name cannot be greater than &soft-1; characters. Please choose a shorter database name.';


//Error Handle Function
$l['following_errors_occured'] = 'De volgende fouten zijn opgetreden';//The following Errors were found

//Success Message Function
$l['following_message'] = 'Het volgende bericht werd teruggezonden';//The following message was returned

//Major Error Function
$l['fatal_error'] = 'Fatal Error';//Fatal Error
$l['following_fatal_error'] = 'De volgende fout is opgetreden';//The following error occured

//Message Function
$l['soft_message'] = APP.' bericht';//Softaculous Message
$l['following_soft_message'] = 'Het volgende bericht werd teruggezonden';//The following message was returned

//Update Softwares
$l['no_soft_found'] = 'Script niet gevonden ..... update noodzakelijk';//Software not found.....Needs Update
$l['ver_not_match'] = 'Versies komen niet overeen ..... update noodzakelijk';//Versions dont match.....Needs Update
$l['ver_match'] = 'Huidige versie is up-to-date ...... doorgaan';//Current Version is Latest Version......Continuing
$l['del_prev_files'] = 'Verwijderen van eerdere geinstalleerde bestanden ...... succes';//Deleting previous files......
$l['fetch_latest'] = 'Ophalen van de gegevens voor de laatste versie ......';//Fetching Latest File......
$l['error_fetch_latest'] = 'Kan de laatste versie niet ophalen ...... doorgaan';//Could not fetch latest file......Continuing
$l['error_save_latest'] = 'Kan de laatste versie niet opslaan ...... doorgaan';//Could not SAVE latest file......Continuing
$l['got_latest'] = 'Laatst opgeslagen versie';//Saved the Latest File
$l['unzip_latest'] = 'Uitpakken van bestanden ......';//Unzipping the files......
$l['error_unzip_latest'] = 'Er is een fout opgetreden bij het uitpakken van de zip bestanden ...... Doorgaan';//Error unzipping......Continuing
$l['unzipped_latest'] = 'Bestanden succesvol uitgepakt';//Unzipped Successfully

//Update Softaculous
$l['getting_info'] = 'Opvragen van informatie ......';//Requesting Information......
$l['error_getting_latest'] = 'Opvragen van informatie mislukt ...... exit';//Could not get information......Abandoning
$l['got_info'] = 'Informatie ontvangen';//Got information
$l['manual_mode'] = 'De laatste versie van '.APP.' moet handmatig geupdate worden ...... exit';//The new version of Softaculous requires manual attention......Abandoning
$l['no_updates'] = 'De huidige versie is de laatste versie ...... doorgaan';//Current Version is Latest Version......Continuing
$l['fetch_upgrade'] = 'Ophalen update ......';//Fetching Upgrade......
$l['error_fetch_upgrade'] = 'Ophalen van update bestand mislukt ...... exit';//Could not fetch upgrade file......Abandoning
$l['error_save_upgrade'] = 'Opslaan van update mislukt ...... exit';//Could not SAVE upgrade file......Abandoning
$l['got_upgrade'] = 'Update bestand opgeslagen';//Saved the Upgrade File
$l['unzip_upgrade'] = 'Uitpakken van bestanden ......';//Unzipping the files......
$l['error_unzip_upgrade'] = 'Er is een fout opgetreden bij het uitpakken van de bestanden ...... exit';//Error unzipping......Abandoning
$l['unzipped_upgrade'] = 'Bestanden succesvol uitgepakt';//Unzipped Successfully
$l['md5_check'] = 'MD5 check succesvol';
$l['err_md5_check'] = 'MD5 check niet succesvol';
$l['err_md5_file'] = ' bestaat niet';

//MySQL Errors
$l['err_selectmy'] = 'De MySQL database kon niet worden geselecteerd.';
$l['err_myconn'] = 'De verbinding met de MySQL database server is mislukt.';
$l['err_makequery'] = 'Fout in query nummer';
$l['err_mynum'] = 'MySQL fout nummer';
$l['err_myerr'] = 'MySQL fout';
$l['err_no_db_file'] = 'The database import file does not exist';
$l['err_no_open_db_file'] = 'Could not open the database import file';

//Importing Errors
$l['imp_wrong_softdomain'] = 'Het path &soft-1; kon niet worden gevonden.';
$l['imp_softpath_wrong'] = 'Het path &soft-1; is foutief en bestaat niet.';
$l['imp_ins_exists'] = '&soft-1; is volgens onze gegevens reeds geinstalleerd &soft-2; !';
$l['imp_no_func'] = 'De importeer functie &soft-1; kon niet geladen worden.';
$l['imp_err'] = 'Er zijn fouten opgetreden bij het immporteren en installeren van &soft-1;';
$l['err_query'] = 'Could not execute the query';

$l['invalid_search_input'] = 'Invalid Theme Search character. Only alphanumeric characters, underscore and hyphen are allowed.';

//hf_theme.php
$l['root_login'] = 'Logged in as ROOT';
$l['welcome'] = 'Welkom';//Welcome
$l['logout'] = 'Log uit';//Logout
$l['page_time'] = 'Pagina aangemaakt in';//Page Created In
$l['times_are'] = 'Alle tijden zijn GMT';//All times are GMT
$l['time_is'] = 'Datum - tijd';//The time now is
$l['no_script_found'] = 'No such Script found!';//no such script found!
$l['webuzo_sysapps_disabled'] = 'This functionality has been disabled from the Webuzo Admin Panel';
$l['webuzo_install_utility'] = 'This utility is not installed. Please install it first';

//The Category Language Variables
$l['forums'] = 'Forums';//Forums
$l['blogs'] = 'Blogs';//Blogs
$l['cms'] = 'Portals / CMS';//Portals/CMS
$l['galleries'] = 'Galleries';//Image Galleries
$l['wikis'] = 'Wiki';//Wikis
$l['admanager'] = 'Ad management';//Ad Management
$l['calendars'] = 'Calenders';//Calendars
$l['games'] = 'Gaming';//Gaming
$l['mail'] = 'E-mail scripts';//Mails
$l['polls'] = 'Polls and analytics';//Polls and Analytics
$l['projectman'] = 'Project management';//Project Management
$l['ecommerce'] = 'E-commerce';//E-Commerce
$l['guestbooks'] = 'Guest books';//Guest Books
$l['customersupport'] = 'Customer support';//Customer Support
$l['others'] = 'Other';//Others
$l['music'] = 'Music';//Music
$l['video'] = 'Video';//Video
$l['files'] = 'File management';//File Management
$l['go_cpanel'] = 'Open control panel';//Go to cPanel
$l['go_home'] = 'Home';//Softaculous Home
$l['go_demos'] = 'Script Demo\'s';
$l['go_ratings'] = 'Script beoordelingen';
$l['go_settings'] = 'Instellingen wijzigen';//Edit Settings
$l['go_email_settings'] = 'E-mail instellingen';//Email Settings
$l['go_installations'] = 'Geinstalleerde scripts';//All Installations
$l['go_support'] = 'FAQ';//Help and Support
$l['go_sync'] = 'Synchroniseer met andere auto installers';
$l['go_backups'] = 'Backups en herstellen';
$l['go_tasklist'] = 'Taakbeheer';
$l['go_apps_installations'] = 'All Installed Applications';
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
$l['search'] = 'Zoeken';
$l['back_to_top'] = 'Naar bovenkant pagina';

$l['show'] = 'Show';
$l['hide'] = 'Hide';

// Categories
$l['cat_php_forums'] = 'Forums';
$l['cat_php_blogs'] = 'Blogs';
$l['cat_php_cms'] = 'Portals/CMS';
$l['cat_php_galleries'] = 'Image galleries';
$l['cat_php_wikis'] = 'Wikis';
$l['cat_php_admanager'] = 'Ad management';
$l['cat_php_calendars'] = 'Calendars';
$l['cat_php_games'] = 'Gaming';
$l['cat_php_mail'] = 'Mails';
$l['cat_php_polls'] = 'Peilingen en analyses';
$l['cat_php_projectman'] = 'Project management';
$l['cat_php_ecommerce'] = 'E-commerce';
$l['cat_php_guestbooks'] = 'Guest books';
$l['cat_php_customersupport'] = 'Customer support';
$l['cat_php_others'] = 'Others';
$l['cat_php_music'] = 'Music';
$l['cat_php_video'] = 'Video';
$l['cat_php_rss'] = 'RSS';
$l['cat_php_socialnetworking'] = 'Social networking';
$l['cat_php_microblogs'] = 'Micro blogs';
$l['cat_php_frameworks'] = 'Frameworks';
$l['cat_php_educational'] = 'Educational';
$l['cat_php_erp'] = 'ERP';
$l['cat_php_dbtools'] = 'DB tools';
$l['cat_php_files'] = 'File management';
$l['cat_js_libraries'] = 'Libraries';
$l['cat_js_widgets'] = 'Widgets';
$l['cat_perl_blogs'] = 'Blogs';
$l['cat_perl_wikis'] = 'Wikis';
$l['cat_perl_forums'] = 'Forums';
$l['cat_perl_ecommerce'] = 'E-commerce';
$l['cat_perl_mail'] = 'Mails';
$l['cat_java_cms'] = 'CMS';
$l['cat_java_forums'] = 'Forums';
$l['cat_java_projectman'] = 'Project management';
$l['cat_java_erp'] = 'ERP';
$l['cat_java_blogs'] = 'Blogs';
$l['cat_java_wikis'] = 'Wikis';
$l['cat_python_wikis'] = 'Wikis';
$l['cat_apps_server_side_scripting'] = 'Server Side Scripting';
$l['cat_apps_web_servers'] = 'Web Servers';
$l['cat_apps_utilities'] = 'Utilities';
$l['cat_apps_libraries'] = 'Libraries';
$l['cat_apps_databases'] = 'Databases';
$l['cat_apps_stacks'] = 'Stacks';
$l['cat_apps_security'] = 'Security';
$l['cat_apps_statistics'] = 'Statistics';
$l['cat_apps_java_tools'] = 'Java Tools';
$l['cat_apps_java_containers'] = 'Java Containers';
$l['cat_apps_version_control'] = 'Version Control';
$l['cat_apps_modules'] = 'Modules';
$l['cat_apps_message_queue'] ='Message Queue';

// Classes Categories
$l['classes_ajax'] = 'Ajax';
$l['classes_cryptography'] = 'Cryptography';
$l['classes_algorithms'] = 'Algorithms';
$l['classes_artificialintelligence'] = 'Artificial intelligence';
$l['classes_email'] = 'E-mail';
$l['classes_finances'] = 'Finances';
$l['classes_searching'] = 'Searching';
$l['classes_user_management'] = 'User management';
$l['classes_utilitiesandtools'] = 'Utilities and tools';
$l['classes_validation'] = 'Validation';
$l['classes_security'] = 'Security';
$l['classes_console'] = 'Console';
$l['classes_codegeneration'] = 'Code generation';
$l['classes_chat'] = 'Chat';
$l['classes_astrology'] = 'Astrology';
$l['classes_audio'] = 'Audio';
$l['classes_biology'] = 'Biology';
$l['classes_blogs'] = 'Blogs';
$l['classes_cache'] = 'Cache';
$l['classes_compression'] = 'Compression';
$l['classes_configuration'] = 'Configuration';
$l['classes_contentmanagement'] = 'Content management';
$l['classes_conversion'] = 'Conversion';
$l['classes_datatypes'] = 'Datatypes';
$l['classes_databases'] = 'Databases';
$l['classes_debug'] = 'Debug';
$l['classes_designpatterns'] = 'Design patterns';
$l['classes_ecommerce'] = 'E-commerce';
$l['classes_elearning'] = 'E-learning';
$l['classes_emulators'] = 'Emulators';
$l['classes_filesandfolders'] = 'Files and folders';
$l['classes_flash'] = 'Flash';
$l['classes_forums'] = 'Forums';
$l['classes_games'] = 'Games';
$l['classes_geography'] = 'Geography';
$l['classes_graphics'] = 'Graphics';
$l['classes_gui'] = 'GUI';
$l['classes_hosting'] = 'Hosting';
$l['classes_html'] = 'HTML';
$l['classes_http'] = 'HTTP';
$l['classes_language'] = 'Language';
$l['classes_projectmanagement'] = 'Project management';

// Softaculous Remote Domain Strings
$l['no_domain_data'] = 'Domain Data Not Found!!';
$l['no_aefer_resp'] = 'Could not access the worker file over web. Please check if your domain is pointing to the correct server.'; 

// Webuzo Strings
$l['webuzo'] = 'Webuzo';
$l['go_domain'] = 'Domein beheer';
$l['webuzo_license_exp'] = 'U heeft geen of geen actieve licentie.';
$l['webuzo_license_exp_t'] = 'Licentie verlopen';
$l['err_no_access'] = 'You do not have permission to access this page';

// Ampps Strings
$l['ampps'] = 'AMPPS';
$l['go_domain'] = 'Domein beheer';
$l['ampps_license_exp'] = 'U heeft geen of geen actieve licentie.';
$l['ampps_license_exp_t'] = 'License Inactive';


/////////////////////////////////////////////////////////////
/////  Following Variables are used for Email Templates /////
/////////////////////////////////////////////////////////////


$l['notify_enable'] = 'Actief';
$l['notify_disable'] = 'Niet actief';

$l['autoupgrade_enable'] = 'Enabled';
$l['autoupgrade_disable'] = 'Disabled';

// Auto backup strings
$l['auto_backup_enable'] = 'Enabled';
$l['auto_backup_disable'] = 'Disabled';

// Install Template Vaiable
$l['mail_install_php_sub'] = 'Nieuwe installatie van $scriptname';
$l['mail_install_php'] = 'De installatie van $scriptname $version is voltooid. Hieronder kunt u de details van de installatie zien:
Path : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>Data Directory: $datadirectory</if>
<if $admin_username>Admin gebruikersnaam: $admin_username</if>
<if $admin_pass>Admin wachtwoord: $admin_pass</if>
<if $admin_email>Admin Email: $admin_email</if>
<if $dbname>MySQL database: $dbname</if>
<if $dbuser>MySQL DB gebruiker: $dbuser</if>
<if $dbhost>MySQL DB host: $dbhost</if>
<if $dbpass>MySQL DB wachtwoord: $dbpass</if>
<if $cron>Cron job: $cron</if>
<if $disable_notify_update>Update notificatie: $disable_notify_update</if>
<if $eu_auto_upgrade>Auto Upgrade : $eu_auto_upgrade</if>
<if $auto_backup>Automated Backups : $auto_backup</if>
<if $auto_backup_rotation>Backup Rotation : $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
<if $time>Tijdstip van installatie : $time</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Clone Template Vaiable
$l['mail_clone_sub'] = 'Clone Installation of $scriptname';
$l['mail_clone'] = 'Your installation of $scriptname $version has been cloned successfully.

Your original installation details :
Original Path : $old_path
Original URL : $old_url

Your cloned installation details :
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

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Install Template Vaiable
$l['mail_install_js_sub'] = 'Nieuwe installatie van $scriptname';
$l['mail_install_js'] = 'De installatie van $scriptname $version is voltooid. Hieronder kunt u de details van de installatie zien:
Path : $path
URL : $url
<if $disable_notify_update>Update Notification : $disable_notify_update</if>
<if $auto_backup>Automated Backups : $auto_backup</if>
<if $auto_backup_rotation>Backup Rotation : $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
<if $time>Tijdstip van installatie: $time</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Install Template Vaiable
$l['mail_install_perl_sub'] = 'Nieuwe installatie van $scriptname';
$l['mail_install_perl'] = 'De installatie van $scriptname $version is voltooid. Hieronder kunt u de details van de installatie zien:
Path: $path
URL: $url
Admin URL: $admin_url
<if $datadirectory>Data directory: $datadirectory</if>
<if $wwwdir>Web directory: $wwwdir</if>
<if $admin_username>Admin gebruikersnaam: $admin_username</if>
<if $admin_pass>Admin wachtwoord: $admin_pass</if>
<if $admin_email>Admin e-mail: $admin_email</if>
<if $dbname>MySQL database: $dbname</if>
<if $dbuser>MySQL DB gebruiker: $dbuser</if>
<if $dbhost>MySQL DB hostnaam: $dbhost</if>
<if $dbpass>MySQL DB wachtwoord : $dbpass</if>
<if $cron>Cron job: $cron</if>
<if $disable_notify_update>Update notificatie: $disable_notify_update</if>
<if $auto_backup>Automated Backups : $auto_backup</if>
<if $auto_backup_rotation>Backup Rotation : $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
<if $time>Tijdstip van installatie: $time</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Install Template Vaiable
$l['mail_install_java_sub'] = 'Nieuwe installatie van $scriptname';
$l['mail_install_java'] = 'De installatie van $scriptname $version is voltooid. Hieronder kunt u de details van de installatie zien:
Path: $path
URL: $url
Admin URL: $admin_url
<if $datadirectory>Data directory: $datadirectory</if>
<if $wwwdir>Web directory: $wwwdir</if>
<if $admin_username>Admin gebruikersnaam: $admin_username</if>
<if $admin_pass>Admin wachtwoord: $admin_pass</if>
<if $admin_email>Admin e-mail: $admin_email</if>
<if $dbname>MySQL database: $dbname</if>
<if $dbuser>MySQL DB gebruiker: $dbuser</if>
<if $dbhost>MySQL DB hostnaam: $dbhost</if>
<if $dbpass>MySQL DB wachtwoord: $dbpass</if>
<if $cron>Cron job: $cron</if>
<if $disable_notify_update>Update notificatie: $disable_notify_update</if>
<if $auto_backup>Automated Backups : $auto_backup</if>
<if $auto_backup_rotation>Backup Rotation : $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
<if $time>Tijdstip van installatie: $time</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

$l['mail_install_python_sub'] = 'New Installation of $scriptname';
$l['mail_install_python'] = 'A new installation of $scriptname $version has been completed. The details of the installation are shown below:
Path : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>Data Directory : $datadirectory</if>
<if $wwwdir>Web Directory : $wwwdir</if>
<if $admin_username>Admin Username : $admin_username</if>
<if $admin_pass>Admin Password : $admin_pass</if>
<if $admin_email>Admin Email: $admin_email</if>
<if $dbname>MySQL Database : $dbname</if>
<if $dbuser>MySQL DB User : $dbuser</if>
<if $dbhost>MySQL DB Host : $dbhost</if>
<if $dbpass>MySQL DB Password : $dbpass</if>
<if $cron>Cron Job : $cron</if>
<if $disable_notify_update>Update Notification : $disable_notify_update</if>
<if $auto_backup>Automated Backups : $auto_backup</if>
<if $auto_backup_rotation>Backup Rotation : $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
<if $time>Time of Installation : $time</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Update template Variable (From ADMIN)
$l['mail_update_sub'] = 'Script update beschikbaar';
$l['mail_update'] = 'Er zijn updates beschikbaar voor PHP scripts die u heeft geïnstalleerd. Om veiligheids redenen adviseren wij u deze scripts te updaten naar de laatst beschikbare versie.
Er zijn updates beschikbaar voor:

$installation

U kunt deze scripts automatisch updaten via uw control panel bij Tools -> '.APP.' -> Installations.


Vriendelijke groet,

$serverip
';

// Remove Template Variable
$l['mail_remove_sub'] = 'De installatie van $scriptname is succesvol verwijderd.';
$l['mail_remove'] = 'De installatie van $scriptname is verwijderd. Gegevens van de installatie:
Path : $path
<if $url>URL: $url</if>
<if $datadirectory>Data directory: $datadirectory</if>
<if $wwwdir>Web directory: $wwwdir</if>
<if $dbname>MySQL database: $dbname</if>
<if $dbuser>MySQL DB gebruiker: $dbuser</if>
<if $dbhost>MySQL DB hostnaam: $dbhost</if>
<if $dbpass>MySQL DB wachtwoord: $dbpass</if>
<if $cron>Cron job: $cron</if>
Tijdstip van installatie: $time
Tijdstip verwijdering: $rem_time

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Cron Template Variable
$l['mail_cron_sub'] = 'Script update beschikbaar';
$l['changelog'] = '== Changelog for';
$l['mail_cron'] = 'Er zijn updates beschikbaar voor:

$installation

U kunt deze scripts automatisch updaten via uw control panel bij Tools -> '.APP.' -> Installations.


$changelog

Vriendelijke groet,

$serverip

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings

';

// Edit detail Template Variable
$l['mail_editdetail_sub'] = 'Wijzigingen voor $scriptname';
$l['mail_editdetail'] = 'De installatie gegevens voor $scriptname zijn gewijzigd. De installatie gegevens zijn nu:
Path: $path
URL: $url
<if $datadirectory>Data directory: $datadirectory</if>
<if $wwwdir>Web directory: $wwwdir</if>
<if $wwwurl>Web URL: $wwwurl</if>
<if $dbname>MySQL database: $dbname</if>
<if $dbuser>MySQL DB gebruiker: $dbuser</if>
<if $dbhost>MySQL DB hostnaam: $dbhost</if>
<if $dbpass>MySQL DB wachtwoord: $dbpass</if>
<if $cron>Cron job: $cron</if>
<if $disable_notify_update>Update notificatie: $disable_notify_update</if>
<if $eu_auto_upgrade>Auto Upgrade : $eu_auto_upgrade</if>
<if $auto_backup>Automated Backups : $auto_backup</if>
<if $auto_backup_rotation>Backup Rotation : $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
Tijdstip van installatie : $time
Tijdstip wijziging: $edit_time

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Backup Language Strings
$l['mail_backup_sub'] = 'Backup van $scriptname ';
$l['mail_backup'] = 'De backup voor $scriptname is succesvol verlopen.
Gegevens backup:
Installatie path: $path
Installatie URL: $url
<if $backup_location>Backup Location : $backup_location</if>
Backup path: $backup_file
<if $backup_note>Backup Note : $backup_note</if>

U kunt de backup downloaden via de backup sectie in '.APP.'.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

$l['mail_backup_fail_sub'] = 'Backup van $scriptname mislukt';
$l['mail_backup_fail'] = 'De backup voor $scriptname is niet succesvol verlopen.
Gegevens backup proces:
Installation path: $path
Installatie URL: $url
Backup path: $backup_file

De onderstaande fout is opgetreden:
$error

U kunt de backup opnieuw maken of contact opnemen met de server administrator.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Restore language string
$l['mail_restore_sub'] = 'Backup terug plaatsen voor $scriptname';
$l['mail_restore'] = 'De backup van $scriptname backup is succesvol terug geplaatst.
Installatie gegevens:
Installation path: $path
Installation URL: $url

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

$l['mail_restore_fail_sub'] = 'Failed: Backup terug plaatsen voor $scriptname mislukt';
$l['mail_restore_fail'] = 'Het terug plaatsen van de backup van $scriptname is mislukt.
Installatie gegevens:
Installation Path: $path
Installation URL: $url

De onderstaande fout is opgetreden:
$error

U kunt het herstel proces opnieuw uitvoeren of contact opnemen met de server administrator.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Restore Background Language Strings
$l['mail_restore_bg_sub'] = 'Restore of your $scriptname backup started in background';
$l['mail_restore_bg'] = 'The restore of your $scriptname backup has started in the background. You will receive an email notification about the status once the restore process is completed.
The details are as follows :
Installation Path : $path
Installation URL : $url

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
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

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
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

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Import Background Language Strings
$l['mail_import_bg_sub'] = 'Import of your $scriptname installation';
$l['mail_import_bg'] = 'The import of your $scriptname installation has started in the background. You will receive an email notification about the status once the import process is completed.
The details are as follows :
Installation Path : $path
Installation URL : $url

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';


// Install Template Vaiable CLASSES
$l['mail_install_classes_sub'] = 'Installatie $classesname voltooid';
$l['mail_install_classes'] = 'De installatie van $classesname $version is voltooid. Hieronder kunt u de details van de installatie zien:
Path: $path
<if $time>Tijdstip installatie: $time</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

////////////////////////
// ADMIN UPGRADE - 6
////////////////////////

// Auto Upgrade Email For Admin (successful)
$l['mail_adminupgrade_success_admin_sub'] = '$scriptname installation of user $user has been upgraded successfully';
$l['mail_adminupgrade_success_admin'] = '$scriptname installation of user $user has been upgraded successfully to the latest version.
The details are as follows :
Installation URL : $url
Latest Version : $version
Old Version : $oldversion
';

// Auto Upgrade Email For Admin (Failed) but restored successfully.
$l['mail_adminupgrade_fail_admin_sub'] = 'Upgrade process for $scriptname installation failed and was restored from the backup';
$l['mail_adminupgrade_fail_admin'] = 'Upgrade process of $scriptname installation for user $user failed.
'.APP.' had created a backup before upgrading, and the backup was restored successfully.
Installation URL : $url
Current Version : $oldversion
Latest Version : $version
The Upgrade error details are as follows :
Error : $upgrade_error
';

// Auto Upgrade Email for user (successful)
$l['mail_adminupgrade_success_user_sub'] = '$scriptname is succesvol geupdate';
$l['mail_adminupgrade_success_user'] = 'Uw $scriptname installatie is succesvol geupdate naar de laatste versie door onze systeem beheerders.
Update gegevens:
Installatie URL: $url
Laatste versie: $version
Old Version : $oldversion

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Auto Upgrade Email for user (fail) but restored successfully
$l['mail_adminupgrade_fail_user_sub'] = '$scriptname update is niet succesvol verlopen';
$l['mail_adminupgrade_fail_user'] = 'De update van uw $scriptname installatie door onze systeem beheerders is niet succesvol verlopen.
De backup die gemaakt is voor de update is succesvol terug geplaatst.
Installatie URL  $url
Current Version : $oldversion
Latest Version : $version
Gegevens update proces:
Error : $upgrade_error

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// ALL IS FAILED (Upgrade and RESTORE toooo) (FOR ADMIN)
$l['mail_adminupgrade_restore_fail_admin_sub'] = 'Upgrade process of $scriptname installation of user $user has failed';
$l['mail_adminupgrade_restore_fail_admin'] = 'Upgrade process of $scriptname installation of user $user has failed.
A backup had created before upgrading, but the restore process also failed !

It will require a manual restore. Guide for the manual restore is available here :
http://www.softaculous.com/docs/Manual_Restore

Following are the installation and backup details which you might require to restore your $scriptname installation :
PATH_TO_YOUR_BACKUP_FILE : $backup_path
PATH_OF_INSTALLATION : $softpath
<if $dbname>DATABASE_NAME : $dbname</if>
<if $dbuser>DATABSE_USER : $dbuser</if>
<if $dbpass>DATABASE_PASS : $dbpass</if>
<if $dbhost>DATABASE_HOST : $dbhost</if>

Installation URL : $url
Current Version : $oldversion
Latest Version : $version
<if $upgrade_error>
The Upgrade error details are as follows :
Error : $upgrade_error
</if>
<if $error>
The Restore error details are as follows :
Error : $error
</if>

The '.APP.' team is available for help as well. You can contact the '.APP.' Team (support@'.strtolower(APP).'.com) if you face any problems.
';

// ALL IS FAILED (Upgrade and RESTORE toooo) (FOR USER)
$l['mail_adminupgrade_restore_fail_user_sub'] = 'Upgrade of your $scriptname installation by System Admin failed';
$l['mail_adminupgrade_restore_fail_user'] = 'The System Admin had tried to upgrade your $scriptname installation, but the upgrade failed.
A backup had been created before upgrading, but the restore process also failed !

It will require a manual restore. Guide for the manual restore is available here :
http://www.softaculous.com/docs/Manual_Restore

Following are the installation and backup details which you might require to restore your $scriptname installation :
PATH_TO_YOUR_BACKUP_FILE : $backup_path
PATH_OF_INSTALLATION : $softpath
<if $dbname>DATABASE_NAME : $dbname</if>
<if $dbuser>DATABSE_USER : $dbuser</if>
<if $dbpass>DATABASE_PASS : $dbpass</if>
<if $dbhost>DATABASE_HOST : $dbhost</if>

Installation URL : $url
Current Version : $oldversion
Latest Version : $version
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

////////////////////////
// USER UPGRADE - 3
////////////////////////

// When upgraded by user successfully (By user)
$l['mail_userupgrade_success_user_sub'] = '$scriptname installation upgraded successfully';
$l['mail_userupgrade_success_user'] = 'Your $scriptname installation has been successfully upgraded to the latest version.
The details are as follows :
Installation URL : $url
Latest Version : $version
Old Version : $oldversion

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// If any error occured while upgrading, (By user)
$l['mail_userupgrade_fail_user_sub'] = 'Upgrade of your $scriptname installation failed';
$l['mail_userupgrade_fail_user'] = 'The upgrade of your $scriptname installation has failed.
The details are as follows :
Installation URL : $url
Current Version : $oldversion
Latest Version : $version
Error : $upgrade_error

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// If UPGRADE and RESTORE failed while upgrading, (By user)
$l['mail_userupgrade_restore_fail_user_sub'] = 'Upgrade of your $scriptname installation failed';
$l['mail_userupgrade_restore_fail_user'] = 'The upgrade of your $scriptname installation has failed.
A backup had been created before upgrading, but the restore process also failed !

It will require a manual restore. Guide for the manual restore is available here :
http://www.softaculous.com/docs/Manual_Restore

The details are as follows :
Installation URL : $url
Current Version : $oldversion
Latest Version : $version
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

////////////////////////
// AUTO UPGRADE - 3
////////////////////////

// When AUTOUPGRADED successfully
$l['mail_autoupgrade_success_user_sub'] = '$scriptname Installation Auto Upgraded Successfully';
$l['mail_autoupgrade_success_user'] = 'Your $scriptname installation has been successfully auto upgraded to the latest version.
The details are as follows :
Installation URL : $url
Latest Version : $version
Old Version : $oldversion

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// When AUTOUPGRADE FAILED
$l['mail_autoupgrade_fail_user_sub'] = 'Auto Upgrade of your $scriptname installation failed';
$l['mail_autoupgrade_fail_user'] = 'The auto upgradation of your $scriptname installation has failed.
The details are as follows :
Installation URL : $url
Current Version : $oldversion
Latest Version : $version
Error : $upgrade_error

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// If UPGRADE and RESTORE failed while AUTOUPGRADING
$l['mail_autoupgrade_restore_fail_user_sub'] = 'Auto Upgrade of your $scriptname installation failed';
$l['mail_autoupgrade_restore_fail_user'] = 'The auto upgradation of your $scriptname installation has failed.
A backup had been created before upgrading, but the restore process also failed !

It will require a manual restore. Guide for the manual restore is available here :
http://www.softaculous.com/docs/Manual_Restore

The details are as follows :
Installation URL : $url
Current Version : $oldversion
Latest Version : $version
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

////////////////////////
// PRE UPGRADE CHECK 
////////////////////////

// If pre upgradation check fails while AUTOUPGRADE (FOR USER)
$l['mail_autoupgrade_precheck_fail_sub'] = 'Pre Upgrade Check failed';
$l['mail_autoupgrade_precheck_fail'] = 'Auto upgrade process for the following installation cannot be completed, because it does not meet the upgrade requirements :
Installation URL : $url
Current Version : $oldversion
Latest Version : $version
<if $upgrade_error>
Error : $upgrade_error
</if>
<if $error>
Error : $error
</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

/////////////////////////////////
// Backup Failed CLI UPGRADE
/////////////////////////////////

// If a backup fails before AUTO UPGRADING an installation (FOR USER)
$l['mail_autoupgrade_backup_fail_sub'] = 'Backup process failed before auto upgrading $scriptname installation';
$l['mail_autoupgrade_backup_fail'] = 'The backup of $scriptname installation has failed. So the auto upgrade process was aborted.
The details are as follows :
Installation URL : $url
Current Version : $oldversion
Latest Version : $version
Error : $error

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

$l['err_openconfig'] = 'Het configuratie bestand kon niet worden geopend';
$l['err_writeconfig'] = 'Het configuratie bestand kon niet worden gewijzigd';

$l['classes_con_failed'] = 'Error: er kon geen verbinding worden gemaakt met de server.';
$l['cl_ratings'] = 'Waardering';
$l['cl_author'] = 'Fabrikant';
$l['cl_license'] = 'Licentie';
$l['cl_version'] = 'Versie';
$l['cl_show_files'] = 'Bestanden tonen';
$l['cl_install_but'] = 'Installeer';
$l['expand_view'] = 'Bekijk via volledig scherm';
$l['collapse_view'] = 'Bekijk via embedded scherm';

$l['email_off_notice'] = '<b>Let op: e-mail notificatie is uitgeschakeld en u ontvangt geen systeem berichten.</b>';

// Add User Language Strings
$l['mail_add_user_sub'] = 'Softaculous Remote Installer';
$l['mail_add_user'] = 'U kunt nu inloggen in de Softaculous Remote Installer.
Vul de onderstaande gegevens in :
Gebruikersnaam	: $username
API Key 				: $api_key
API wachtwoord	: $api_pass
Aantal gebruikers	: $number_of_users';

// Requirement parser languages
$l['req_ver_nf'] = 'Vereiste versie &soft-1; &soft-2; &soft-3; beschikbare versie : ';
$l['req_ext_nf'] = 'Vereist &soft-1; extensie niet gevonden :';
$l['req_func_nf'] = 'Vereist &soft-1; functie niet gevonden';
$l['req_ext_ver'] = 'Vereist &soft-1; &soft-2; extensie versie &soft-3; &soft-4; niet gevonden &soft-5;';
$l['gt'] = 'is groter dan';
$l['lt'] = 'is lager dan';
$l['ge'] = 'is groter of gelijk aan';
$l['le'] = 'is lager of gelijk aan';
$l['eq'] = 'is';
$l['ne'] = 'should not be equal to';

// Automated Backup Language Strings
$l['mail_auto_backup_sub'] = 'Backup voor $scriptname';
$l['mail_auto_backup'] = 'De automatische backup voor $scriptname is succesvol verlopen.
Details :
Path : $path
URL : $url
Backup patth : $backup_file
<if $backup_location>Backup Location : $backup_location</if>

U kunt de backup downloaden via de backup sectie in '.APP.'.

E-mail notificaties kunnen worden uitgeschakeld via uw Control Panel -> '.APP.' -> Email Settings
';

$l['mail_auto_backup_fail_sub'] = 'Foutmelding : Backup voor $scriptname';
$l['mail_auto_backup_fail'] = 'De automatische backup voor $scriptname is niet succesvol verlopen.
Details :
Path : $path
URL : $url
Backup patth : $backup_file
<if $backup_location>Backup Location : $backup_location</if>
Errors :
$error

E-mail notificaties kunnen worden uitgeschakeld via uw Control Panel -> '.APP.' -> Email Settings
';

// Email for sending the list of scripts which does not meet the requirements.
$l['mail_script_requirement_sub'] = 'Script versie vereisten error log';
$l['mail_script_requirement'] = 'De volgende scripts hebben andere server instellingen nodig en werken niet volledig.
Details :

$failed_req

';

// Softpanel Language Strings
$l['no_www_domain'] = 'Foutmelding: sluit deze pagina en klik op de log uit knop van uw control panel.<br />
Daarna kunt u opnieuw inloggen en zal het probleem zijn opgelost.';

$l['install_tweet'] = 'Ik heb het script #[[SCRIPTNAME]] geinstalleerd op het domein [[softurl]] via #[[APP]] #[[TYPE]]';
$l['install_tweet_classes'] = 'Ik heb het script  #[[SCRIPTNAME]] geinstalleerd via #[[APP]] #[[TYPE]]';
$l['upgrade_tweet'] = 'Ik heb een update gedaan van het script #[[SCRIPTNAME]] op het domein [[softurl]] via #[[APP]] #[[TYPE]]';
$l['clone_tweet'] = 'Ik heb een script gecloned #[[SCRIPTNAME]] op het domein [[softurl]] via #[[APP]] #[[TYPE]]';

// month strings
$l['January'] = 'Januari';
$l['February'] = 'Februari';
$l['March'] = 'Maart';
$l['April'] = 'April';
$l['May'] = 'Mei';
$l['June'] = 'Juni';
$l['July'] = 'Juli';
$l['August'] = 'Augustus';
$l['September'] = 'September';
$l['October'] = 'Oktober';
$l['November'] = 'November';
$l['December'] = 'December';

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

