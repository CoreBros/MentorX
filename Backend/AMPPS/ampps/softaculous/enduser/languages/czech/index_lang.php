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

$l['user_data_error_t'] = 'Chyba dat uživatele';
$l['user_data_error'] = APP.' was unable to load your account information. Please report this to the server administrator!';

$l['remote_licence_t'] = 'Neplatná licence';
$l['remote_licence'] = 'Nepoužíváte platnou licenci. Prosím oznamte to správci serveru!';

$l['enterprise_licence_t'] = 'Neplatná licence';
$l['enterprise_licence'] = 'Nepoužíváte platnou licenci. Prosím oznamte to správci serveru!';

$l['no_license'] = 'Soubor LICENSE nebyl nalezen! Prosím oznamte to správci serveru.';

$l['today'] = '<b>Dnes</b> na';//The today string for showing todays post time

$l['init_theme_error_t'] = 'Chyba šablony';//Title
$l['init_theme_error'] = 'Nelze načíst soubor motivu - &soft-1;';

$l['init_theme_func_error_t'] = 'Chyba funkcí šablony';//Title
$l['init_theme_func_error'] = 'Nelze načíst funkce šablony &soft-1;.';

$l['disable_softaculous_t'] = 'Softaculous zablokován';
$l['disable_softaculous'] = 'Softaculous je blokovaný pro tohoto uživatele. Kontaktujte prosím správce systému.';

$l['load_theme_settings_error'] = 'Nelze načíst soubor nastavení motivů.';

$l['view_guide'] = 'View Guide';
$l['max_db_length'] = 'The database name cannot be greater than &soft-1; characters. Please choose a shorter database name.';


//Error Handle Function
$l['following_errors_occured'] = 'Byly nalezeny následující chyby';

//Success Message Function
$l['following_message'] = 'Následující zpráva byla vrácena';

//Major Error Function
$l['fatal_error'] = 'Fatální chyba';
$l['following_fatal_error'] = 'Došlo k následující chybě';

//Message Function
$l['soft_message'] = APP.' Message';
$l['following_soft_message'] = 'Následující zpráva byla vrácena';

//Update Softwares
$l['no_soft_found'] = 'Software nenalezen… Nutná aktualizace';
$l['ver_not_match'] = 'Verze nesouhlasí… Nutná aktualizace';
$l['ver_match'] = 'Stávající verze je nejaktuálnější…. Pokračovat';
$l['del_prev_files'] = 'Mazání předchozích souborů… Provedeno';
$l['fetch_latest'] = 'Načítání nejnovějších souborů…';
$l['error_fetch_latest'] = 'Nelze načíst nejnovější soubory … Pokračovat';
$l['error_save_latest'] = 'Nelze uložit nejnovější soubory… Pokračovat';
$l['got_latest'] = 'Uloženy nejnovější soubory';
$l['unzip_latest'] = 'Rozbalování souborů…';
$l['error_unzip_latest'] = 'Chyba rozbalování… Pokračovat';
$l['unzipped_latest'] = 'Úspěšně rozbaleno';

//Update Softaculous
$l['getting_info'] = 'Vyžadování informací…';
$l['error_getting_latest'] = 'Nelze získat informaci… Přerušuji';
$l['got_info'] = 'Informace získána';
$l['manual_mode'] = 'Nová verze '.APP.' vyžaduje manuální zásah… Přerušuji';
$l['no_updates'] = 'Stávající verze je nejaktuálnější…. Pokračovat';
$l['fetch_upgrade'] = 'Načítání aktualizace…';
$l['error_fetch_upgrade'] = 'Nelze načíst soubor pro upgrade…. Přerušuji';
$l['error_save_upgrade'] = 'Nelze uložit soubor pro upgrade... Přerušuji';
$l['got_upgrade'] = 'Soubor pro upgrade uložen';
$l['unzip_upgrade'] = 'Rozbalování souborů…';
$l['error_unzip_upgrade'] = 'Chyba rozbalování… Přerušuji';
$l['unzipped_upgrade'] = 'Úspěšně rozbaleno';
$l['md5_check'] = 'MD5 kontrola úspěšná';
$l['err_md5_check'] = 'MD5 kontrola těchto souborů nebyla úspěšná';
$l['err_md5_file'] = 'neexistuje';

//MySQL Errors
$l['err_selectmy'] = 'MySQL databáze nebyla vybrána.';
$l['err_myconn'] = 'MySQL připojení nemohlo být vytvořeno.';
$l['err_makequery'] = 'Nelze provést dotaz';
$l['err_mynum'] = 'Chyba MySQL č.';
$l['err_myerr'] = 'Chyba MySQL';
$l['err_no_db_file'] = 'The database import file does not exist';
$l['err_no_open_db_file'] = 'Could not open the database import file';

//Importing Errors
$l['imp_wrong_softdomain'] = 'Cesta k doméně &soft-1; nebyla nalezena.';
$l['imp_softpath_wrong'] = 'Cesta &soft-1; je chybná a neexistuje.';
$l['imp_ins_exists'] = '&soft-1; je již nainstalovaný v &soft-2;  a je v naší správě!';
$l['imp_no_func'] = 'Import funkcí pro &soft-1; nemůže být nahrán.';
$l['imp_err'] = 'Došlo k chybám při importování softwaru instalovaného na &soft-1;';
$l['err_query'] = 'Could not execute the query';

$l['invalid_search_input'] = 'Invalid Theme Search character. Only alphanumeric characters, underscore and hyphen are allowed.';

//hf_theme.php
$l['root_login'] = 'Přihlášený jako ROOT';
$l['welcome'] = 'Vítejte';
$l['logout'] = 'Odhlásit';
$l['page_time'] = 'Stránka vytvořena v';
$l['times_are'] = 'Všechny časy jsou GMT';
$l['time_is'] = 'Čas';
$l['no_script_found'] = 'Skript nenalezen!';
$l['webuzo_sysapps_disabled'] = 'This functionality has been disabled from the Webuzo Admin Panel';
$l['webuzo_install_utility'] = 'This utility is not installed. Please install it first';

//The Category Language Variables
$l['forums'] = 'Fóra';
$l['blogs'] = 'Blogy';
$l['cms'] = 'Portály/CMS';
$l['galleries'] = 'Obrázkové galerie';
$l['wikis'] = 'Wiki';
$l['admanager'] = 'Správa reklamy';
$l['calendars'] = 'Kalendáře';
$l['games'] = 'Gaming';
$l['mail'] = 'Emaily';
$l['polls'] = 'Ankety a průzkumy';
$l['projectman'] = 'Správa projektů';
$l['ecommerce'] = 'E-obchod';
$l['guestbooks'] = 'Návštěvní knihy';
$l['customersupport'] = 'Zákaznická podpora';
$l['others'] = 'Ostatní';
$l['music'] = 'Hudba';
$l['video'] = 'Video';
$l['files'] = 'Správa souborů';
$l['go_cpanel'] = 'Přejít na ovládací panel';
$l['go_home'] = APP.' Home';
$l['go_demos'] = 'Demo skripty';
$l['go_ratings'] = 'Hodnocení skriptů';
$l['go_settings'] = 'Upravit nastavení';
$l['go_email_settings'] = 'Nastavení emailu';
$l['go_installations'] = 'Všechny instalace';
$l['go_support'] = 'Pomoc a podpora';
$l['go_sync'] = 'Synchronizovat s dalšími auto instalátory';
$l['go_backups'] = 'Zálohy a obnova';
$l['go_tasklist'] = 'Seznam úkolů';
$l['go_apps_installations'] = 'Všechny nainstalované aplikace';
$l['go_my_themes'] = 'Moje motivy';
$l['go_logout'] = 'Odhlásit';
$l['ins_stats'] = 'Instalované skripty';
$l['outdated_stats'] = 'Neaktuální instalace';
$l['backups_stats'] = 'Zálohy';

$l['type_php'] = 'PHP';
$l['type_perl'] = 'Perl';
$l['type_js'] = 'JavaScript';
$l['type_java'] = 'Java';
$l['type_python'] = 'Python';
$l['search'] = 'Hledat';
$l['back_to_top'] = 'Zpět na začátek';

$l['show'] = 'Show';
$l['hide'] = 'Hide';

// Categories
$l['cat_php_forums'] = 'Fóra';
$l['cat_php_blogs'] = 'Blogy';
$l['cat_php_cms'] = 'Portály/CMS';
$l['cat_php_galleries'] = 'Obrázkové galerie';
$l['cat_php_wikis'] = 'Wiki';
$l['cat_php_admanager'] = 'Správa reklamy';
$l['cat_php_calendars'] = 'Kalendáře';
$l['cat_php_games'] = 'Gaming';
$l['cat_php_mail'] = 'Emaily';
$l['cat_php_polls'] = 'Ankety a analýzy';
$l['cat_php_projectman'] = 'Správa projektů';
$l['cat_php_ecommerce'] = 'E-obchod';
$l['cat_php_guestbooks'] = 'Návštěvní knihy';
$l['cat_php_customersupport'] = 'Zákaznická podpora';
$l['cat_php_others'] = 'Ostatní';
$l['cat_php_music'] = 'Hudba';
$l['cat_php_video'] = 'Video';
$l['cat_php_rss'] = 'RSS';
$l['cat_php_socialnetworking'] = 'Sociální sítě';
$l['cat_php_microblogs'] = 'Mikro blogy';
$l['cat_php_frameworks'] = 'Framework';
$l['cat_php_educational'] = 'Vzdělávací';
$l['cat_php_erp'] = 'ERP';
$l['cat_php_dbtools'] = 'DB nástroje';
$l['cat_php_files'] = 'Správa souborů';
$l['cat_js_libraries'] = 'Knihovny';
$l['cat_js_widgets'] = 'Widgety';
$l['cat_perl_blogs'] = 'Blogy';
$l['cat_perl_ecommerce'] = 'E-obchod';
$l['cat_perl_wikis'] = 'Wiki';
$l['cat_perl_forums'] = 'Fóra';
$l['cat_perl_mail'] = 'Emaily';
$l['cat_java_cms'] = 'CMS';
$l['cat_java_forums'] = 'Fóra';
$l['cat_java_projectman'] = 'Správa projektů';
$l['cat_java_erp'] = 'ERP';
$l['cat_java_blogs'] = 'Blogy';
$l['cat_java_wikis'] = 'Wiki';
$l['cat_python_wikis'] = 'Wiki';
$l['cat_python_projectman'] = 'Správa projektů';
$l['cat_apps_server_side_scripting'] = 'Skriptování na straně serveru';
$l['cat_apps_web_servers'] = 'Webové servery';
$l['cat_apps_utilities'] = 'Nástroje';
$l['cat_apps_libraries'] = 'Knihovny';
$l['cat_apps_databases'] = 'Databáze';
$l['cat_apps_stacks'] = 'Zásobníky';
$l['cat_apps_security'] = 'Zabezpečení';
$l['cat_apps_statistics'] = 'Statistiky';
$l['cat_apps_java_tools'] = 'Java nástroje';
$l['cat_apps_java_containers'] = 'Java kontejnery';
$l['cat_apps_version_control'] = 'Verze kontroly';
$l['cat_apps_modules'] = 'Moduly';
$l['cat_apps_message_queue'] = 'Fronta vzkazů';

// Classes Categories
$l['classes_ajax'] = 'Ajax';
$l['classes_cryptography'] = 'Šifrování';
$l['classes_algorithms'] = 'Algoritmy';
$l['classes_artificialintelligence'] = 'Umělá inteligence';
$l['classes_email'] = 'Email';
$l['classes_finances'] = 'Finance';
$l['classes_searching'] = 'Vyhledávání';
$l['classes_user_management'] = 'Správa uživatelů';
$l['classes_utilitiesandtools'] = 'Nástroje a nářadí';
$l['classes_validation'] = 'Ověření';
$l['classes_security'] = 'Zabezpečení';
$l['classes_console'] = 'Konzole';
$l['classes_codegeneration'] = 'Generování kódu';
$l['classes_chat'] = 'Chat';
$l['classes_astrology'] = 'Astrologie';
$l['classes_audio'] = 'Audio';
$l['classes_biology'] = 'Biologie';
$l['classes_blogs'] = 'Blogy';
$l['classes_cache'] = 'Cache';
$l['classes_compression'] = 'Komprese';
$l['classes_configuration'] = 'Konfigurace';
$l['classes_contentmanagement'] = 'Správa obsahu';
$l['classes_conversion'] = 'Konverze';
$l['classes_datatypes'] = 'Typy dat';
$l['classes_databases'] = 'Databáze';
$l['classes_debug'] = 'Ladit';
$l['classes_designpatterns'] = 'Vzory designu';
$l['classes_ecommerce'] = 'E-obchod';
$l['classes_elearning'] = 'E-learning';
$l['classes_emulators'] = 'Emulátory';
$l['classes_filesandfolders'] = 'Soubory a složky';
$l['classes_flash'] = 'Flash';
$l['classes_forums'] = 'Fóra';
$l['classes_games'] = 'Hry';
$l['classes_geography'] = 'Zeměpis';
$l['classes_graphics'] = 'Grafika';
$l['classes_gui'] = 'GUI';
$l['classes_hosting'] = 'Hosting';
$l['classes_html'] = 'HTML';
$l['classes_http'] = 'HTTP';
$l['classes_language'] = 'Jazyk';
$l['classes_projectmanagement'] = 'Správa projektů';

// Softaculous Remote Domain Strings
$l['no_domain_data'] = 'Domain Data Not Found!!';
$l['no_aefer_resp'] = 'Could not access the worker file over web. Please check if your domain is pointing to the correct server.'; 

// Webuzo Strings
$l['webuzo'] = 'Webuzo';
$l['go_domain'] = 'Správa domén';
$l['webuzo_license_exp'] = 'Vaše licence není aktivní nebo expirovala. Pokud licence vypršela, prosím obnovte ji, aby bylo  možné pokračovat v používání Webuzo.';
$l['webuzo_license_exp_t'] = 'Neaktivní licence';
$l['err_no_access'] = 'You do not have permission to access this page';

// Ampps Strings
$l['ampps'] = 'AMPPS';
$l['go_domain'] = 'Správa domén';
$l['ampps_license_exp'] = 'Vaše licence není aktivní nebo expirovala. Pokud licence expirovala, prosím obnovte ji, aby bylo možné pokračovat v používání AMMPS.';
$l['ampps_license_exp_t'] = 'Neaktivní licence';


/////////////////////////////////////////////////////////////
/////  Following Variables are used for Email Templates /////
/////////////////////////////////////////////////////////////

$l['notify_enable'] = 'Dostupný';
$l['notify_disable'] = 'Nedostupný';

$l['autoupgrade_enable'] = 'Dostupný';
$l['autoupgrade_disable'] = 'Nedostupný';

// Auto backup strings
$l['auto_backup_enable'] = 'Dostupný';
$l['auto_backup_disable'] = 'Nedostupný';

// Install Template Vaiable
$l['mail_install_php_sub'] = 'Nová instalace $scriptname';
$l['mail_install_php'] = 'Nová instalace $scriptname $version byla dokončena. Podrobnosti o instalaci naleznete níže:
Cesta : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>Adresář pro data : $datadirectory</if>
<if $admin_username>Uživatelské jméno správce : $admin_username</if>
<if $admin_pass>Heslo správce : $admin_pass</if>
<if $admin_email>Email správce: $admin_email</if>
<if $dbname>MySQL databáze : $dbname</if>
<if $dbuser>Uživatel MySQL DB : $dbuser</if>
<if $dbhost>MySQL DB Host : $dbhost</if>
<if $dbpass>MySQL DB Heslo : $dbpass</if>
<if $cron>Úloha CRONu : $cron</if>
<if $disable_notify_update>Upozornění o aktualizaci : $disable_notify_update</if>
<if $eu_auto_upgrade>Auto Upgrade : $eu_auto_upgrade</if>
<if $auto_backup>Automatické zálohování : $auto_backup</if>
<if $auto_backup_rotation>Rotace záloh : $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
<if $time>Čas instalace : $time</if>

Pokud si nepřejete dostávat tyto emaily, přejděte na Ovládací panel -> '.APP.' -> Nastavení emailu
';

// Clone Template Vaiable
$l['mail_clone_sub'] = 'Klonovat instalaci $scriptname';
$l['mail_clone'] = 'Vaše instalace $scriptname $version byla úspěšně naklonována.

Podrobnosti o původní instalaci :
Původní cesta : $old_path
Původní URL : $old_url

Podrobnosti o naklonované instalaci :
Cesta : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>Adresář pro data : $datadirectory</if>
<if $dbname>MySQL databáze : $dbname</if>
<if $dbuser>Uživatel MySQL DB : $dbuser</if>
<if $dbhost>MySQL DB Host : $dbhost</if>
<if $dbpass>MySQL DB Heslo : $dbpass</if>
<if $cron>Úloha CRONu : $cron</if>
<if $time>Čas instalace : $time</if>

Pokud si nepřejete dostávat tyto emaily, přejděte na Ovládací panel -> '.APP.' -> Nastavení emailu
';

// Install Template Vaiable
$l['mail_install_js_sub'] = 'Nová instalace $scriptname';
$l['mail_install_js'] = 'Nová instalace $scriptname $version byla dokončena. Podrobnosti o instalaci naleznete níže:
Cesta : $path
URL : $url
<if $disable_notify_update>Upozornění o aktualizaci : $disable_notify_update</if>
<if $auto_backup>Automatické zálohování : $auto_backup</if>
<if $auto_backup_rotation>Rotace záloh : $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
<if $time>Čas instalace : $time</if>

Pokud si nepřejete dostávat tyto emaily, přejděte na Ovládací panel -> '.APP.' -> Nastavení emailu
';

// Install Template Vaiable
$l['mail_install_perl_sub'] = 'Nová instalace $scriptname';
$l['mail_install_perl'] = 'Nová instalace $scriptname $version byla dokončena. Podrobnosti o instalaci naleznete níže:
Cesta : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>Adresář pro data : $datadirectory</if>
<if $wwwdir>Adresář webu : $wwwdir</if>
<if $admin_username>Uživatelské jméno správce : $admin_username</if>
<if $admin_pass>Heslo správce : $admin_pass</if>
<if $admin_email>Email správce: $admin_email</if>
<if $dbname>MySQL databáze : $dbname</if>
<if $dbuser>Uživatel MySQL DB : $dbuser</if>
<if $dbhost>MySQL DB Host : $dbhost</if>
<if $dbpass>MySQL DB Heslo : $dbpass</if>
<if $cron>Úloha CRONu : $cron</if>
<if $disable_notify_update>Upozornění o aktualizaci : $disable_notify_update</if>
<if $auto_backup>Automatické zálohování : $auto_backup</if>
<if $auto_backup_rotation>Rotace záloh : $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
<if $time>Čas instalace : $time</if>

Pokud si nepřejete dostávat tyto emaily, přejděte na Ovládací panel -> '.APP.' -> Nastavení emailu
';

// Install Template Vaiable
$l['mail_install_java_sub'] = 'Nová instalace $scriptname';
$l['mail_install_java'] = 'A new installation of $scriptname $version has been completed. The details of the installation are shown below:
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

$l['mail_install_python_sub'] = 'Nová instalace $scriptname';
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
$l['mail_update_sub'] = 'Dostupné aktualizace skriptů';
$l['mail_update'] = 'Tento email se týká zastaralé instalace jistých PHP skriptů, které byly Vámi nainstalovány. Z bezpečnostních důvodů musíte tyto zastaralé instalace co nejdříve aktualizovat.
Pro následující skripty jsou dostupné aktualizace:

$installation

Pro aktualizaci těchto skriptů přejděte na Ovládací panel -> '.APP.' -> Nastavení emailu
Zde můžete skripty aktualizovat.

Od správce systému $serverip
';

// Remove Template Variable
$l['mail_remove_sub'] = 'Odstraněná instalace $scriptname';
$l['mail_remove'] = 'Instalace $scriptname byla odstraněna. Podrobnosti o odstraněné  instalaci naleznete níže:
Cesta : $path
<if $url>URL : $url</if>
<if $datadirectory>Adresář pro data : $datadirectory</if>
<if $wwwdir>Adresář webu : $wwwdir</if>
<if $dbname>MySQL databáze : $dbname</if>
<if $dbuser>Uživatel MySQL DB : $dbuser</if>
<if $dbhost>MySQL DB Host : $dbhost</if>
<if $dbpass>MySQL DB Heslo : $dbpass</if>
<if $cron>Úloha CRONu : $cron</if>
Čas instalace : $time
Čas odstranění : $rem_time

Pokud si nepřejete dostávat tyto emaily, přejděte na Ovládací panel -> '.APP.' -> Nastavení emailu
';

// Cron Template Variable
$l['mail_cron_sub'] = 'Dostupné aktualizace skriptů';
$l['changelog'] = '== Changelog for';
$l['mail_cron'] = 'Pro následující skripty jsou dostupné aktualizace:

$installation

Pro aktualizaci těchto skriptů přejděte na Ovládací panel -> '.APP.' -> Nastavení emailu
Zde můžete skripty aktualizovat.
$changelog

Z '.APP.' Úlohy CRONu $serverip

Pokud si nepřejete dostávat tyto emaily, přejděte na Ovládací panel -> '.APP.' -> Nastavení emailu
';

// Editdetail Template Variable
$l['mail_editdetail_sub'] = 'Upravené detaily instalace $scriptname';
$l['mail_editdetail'] = 'Podrobnosti instalace $scriptname byly změněny. Níže jsou uvedeny upravené podrobnosti instalace :
Cesta : $path
URL : $url
<if $datadirectory>Adresář pro data : $datadirectory</if>
<if $wwwdir>Adresář webu : $wwwdir</if>
<if $wwwurl>Web URL : $wwwurl</if>
<if $dbname>MySQL databáze : $dbname</if>
<if $dbuser>Uživatel MySQL DB : $dbuser</if>
<if $dbhost>MySQL DB Host : $dbhost</if>
<if $dbpass>MySQL DB Heslo : $dbpass</if>
<if $cron>Úloha CRONu : $cron</if>
<if $disable_notify_update>Upozornění o aktualizaci : $disable_notify_update</if>
<if $eu_auto_upgrade>Auto Upgrade : $eu_auto_upgrade</if>
<if $auto_backup>Automatické zálohování : $auto_backup</if>
<if $auto_backup_rotation>Rotace záloh : $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
Čas instalace : $time
Čas modifikace : $edit_time

Pokud si nepřejete dostávat tyto emaily, přejděte na Ovládací panel -> '.APP.' -> Nastavení emailu
';

// Backup Language Strings
$l['mail_backup_sub'] = 'Záloha instalace vašeho $scriptname';
$l['mail_backup'] = 'Záloha vaší instalace $scriptname byla úspěšně dokončena.
Zde jsou vypsány veškeré podrobnosti :
Cesta umístění instalace : $path
URL instalace : $url
<if $backup_location>Backup Location : $backup_location</if>
Cesta k umístění zálohy : $backup_file
<if $backup_note>Poznámky k záloze : $backup_note</if>

Přístup k zálohám naleznete v sekci Zálohy v '.APP.'.

Pokud si nepřejete dostávat tyto emaily, přejděte na Ovládací panel -> '.APP.' -> Nastavení emailu
';

$l['mail_backup_fail_sub'] = 'Záloha instalace vašeho $scriptname se nezdařila';
$l['mail_backup_fail'] = 'Nepodařilo se provést zálohu instalace $scriptname .
Zde jsou vypsány veškeré podrobnosti :
Cesta umístění instalace : $path
URL instalace : $url
Cesta k umístění zálohy : $backup_file

Vyskytly se následující chyby :
$error

Zkuste prosím vytvořit zálohu znovu později.

Pokud si nepřejete dostávat tyto emaily, přejděte na Ovládací panel -> '.APP.' -> Nastavení emailu
';


// Restore Language Strings
$l['mail_restore_sub'] = 'Obnova vašeho $scriptname';
$l['mail_restore'] = 'Obnova $scriptname z Vaší zálohy byla úspěšně dokončena.
Zde jsou vypsány veškeré podrobnosti :
Cesta umístění instalace : $path
URL instalace : $url

Pokud si nepřejete dostávat tyto emaily, přejděte na Ovládací panel -> '.APP.' -> Nastavení emailu
';

$l['mail_restore_fail_sub'] = 'Obnova vašeho $scriptname se nezdařila';
$l['mail_restore_fail'] = 'Nepodařilo se provést obnovu $scriptname z Vaší zálohy.
Zde jsou vypsány veškeré podrobnosti :
Cesta umístění instalace : $path
URL instalace : $url

Vyskytly se následující chyby :
$error

Zkuste prosím obnovit zálohu znovu později.

Pokud si nepřejete dostávat tyto emaily, přejděte na Ovládací panel -> '.APP.' -> Nastavení emailu
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
$l['mail_install_classes_sub'] = 'Nová instalace $classesname';
$l['mail_install_classes'] = 'Nová instalace $classesname $version byla dokončena. Podrobnosti o instalaci naleznete níže:
Cesta : $path
<if $time>Čas instalace : $time</if>

Pokud si nepřejete dostávat tyto emaily, přejděte na Ovládací panel -> '.APP.' -> Nastavení emailu
';

////////////////////////
// ADMIN UPGRADE - 6
////////////////////////

// Auto Upgrade Email For Admin (successful)
$l['mail_adminupgrade_success_admin_sub'] = 'Instalace $scriptname uživatele $user byla úspěšně aktualizovaná';
$l['mail_adminupgrade_success_admin'] = 'Instalace $scriptname uživatele $user byla úspěšně aktualizována na nejnovější verzi.
Zde jsou vypsány veškeré podrobnosti :
URL instalace : $url
Nejnovější verze : $version
Předešlá verze : $oldversion
';

// Auto Upgrade Email For Admin (Failed) but restored successfully.
$l['mail_adminupgrade_fail_admin_sub'] = 'Proces aktualizace pro instalaci $scriptname se nezdařil a byla obnovena ze zálohy';
$l['mail_adminupgrade_fail_admin'] = 'Proces aktualizace instalace $scriptname uživatele $user selhal.
'.APP.' vytvořila před aktualizací zálohu a byla úspěšně z této zálohy obnovena. 
URL instalace : $url
Aktuální verze : $oldversion
Nejnovější verze : $version
Při aktualizaci se vyskytly následující chyby :
Chyba : $upgrade_error
';

// Auto Upgrade Email for user (successful)
$l['mail_adminupgrade_success_user_sub'] = 'Instalace $scriptname byla úspěšně aktualizovaná správcem systému';
$l['mail_adminupgrade_success_user'] = 'Vaše instalace $scriptname byla úspěšně aktualizována na nejnovější verzi Správcem systému.
Zde jsou vypsány veškeré podrobnosti :
URL instalace : $url
Nejnovější verze : $version
Předešlá verze : $oldversion

Pokud si nepřejete dostávat tyto emaily, přejděte na Ovládací panel -> '.APP.' -> Nastavení emailu
';

// Auto Upgrade Email for user (fail) but restored successfully
$l['mail_adminupgrade_fail_user_sub'] = 'Aktualizace instalace vašeho $scriptname správcem systému byla neúspěšná';
$l['mail_adminupgrade_fail_user'] = 'Správce systému se pokusil aktualizovat vaší $scriptname instalaci, ale proces aktualizace se nepodařilo úspěšně provést. 
Před aktualizací instalace byla vytvořena záloha a vaše instalace byla úspěšně z této zálohy obnovena. 
URL instalace : $url
Aktuální verze : $oldversion
Nejnovější verze : $version
Při aktualizaci se vyskytly následující chyby :
Chyba : $upgrade_error

Pokud si nepřejete dostávat tyto emaily, přejděte na Ovládací panel -> '.APP.' -> Nastavení emailu
';

// ALL IS FAILED (Upgrade and RESTORE toooo) (FOR ADMIN)
$l['mail_adminupgrade_restore_fail_admin_sub'] = 'Proces aktualizace instalace $scriptname uživatele $user se nezdařil';
$l['mail_adminupgrade_restore_fail_admin'] = 'Proces aktualizace instalace $scriptname uživatele $user selhal.
Před aktualizací byla vytvořena záloha, ale proces obnovy ze zálohy se také nepodařilo provést.

Je zapotřebí provést manuální obnovu. Návod pro manuální obnovu naleznete na :
http://www.softaculous.com/docs/Manual_Restore

Zde jsou podrobnosti o instalaci a záloze, které můžete při obnově $scriptname instalace potřebovat :
PATH_TO_YOUR_BACKUP_FILE : $backup_path
PATH_OF_INSTALLATION : $softpath
<if $dbname>DATABASE_NAME : $dbname</if>
<if $dbuser>DATABSE_USER : $dbuser</if>
<if $dbpass>DATABASE_PASS : $dbpass</if>
<if $dbhost>DATABASE_HOST : $dbhost</if>

URL instalace : $url
Aktuální verze : $oldversion
Nejnovější verze : $version
<if $upgrade_error>
Při aktualizaci se vyskytly se následující chyby :
Chyba : $upgrade_error
</if>
<if $error>
Při obnově se vyskytly se následující chyby :
Chyba : $error
</if>

K dispozici je Vám také '.APP.' Tým. V případě jakýchkoliv problémů můžete  '.APP.' Tým kontaktovat na (support@'.strtolower(APP).'.com).
';

// ALL IS FAILED (Upgrade and RESTORE toooo) (FOR USER)
$l['mail_adminupgrade_restore_fail_user_sub'] = 'Aktualizace vaší instalace $scriptname správcem systému se nezdařila';
$l['mail_adminupgrade_restore_fail_user'] = 'Správce systému se pokusil aktualizovat vaší $scriptname instalaci, ale proces aktualizace se nepodařilo úspěšně provést.
Před aktualizací byla vytvořena záloha, ale proces obnovy ze zálohy se také nepodařilo provést.

Je zapotřebí provést manuální obnovu. Návod pro manuální obnovu naleznete na :
http://www.softaculous.com/docs/Manual_Restore

Zde jsou podrobnosti o instalaci a záloze, které můžete při obnově $scriptname instalace potřebovat :
PATH_TO_YOUR_BACKUP_FILE : $backup_path
PATH_OF_INSTALLATION : $softpath
<if $dbname>DATABASE_NAME : $dbname</if>
<if $dbuser>DATABSE_USER : $dbuser</if>
<if $dbpass>DATABASE_PASS : $dbpass</if>
<if $dbhost>DATABASE_HOST : $dbhost</if>

URL instalace : $url
Aktuální verze : $oldversion
Nejnovější verze : $version
<if $upgrade_error>
Při aktualizaci se vyskytly se následující chyby :
Chyba : $upgrade_error
</if>
<if $error>
Při obnově se vyskytly se následující chyby :
Chyba : $error
</if>

K dispozici je Vám také '.APP.' Tým. V případě jakýchkoliv problémů můžete  '.APP.' Tým kontaktovat na (support@'.strtolower(APP).'.com).

Pokud si nepřejete dostávat tyto emaily, přejděte na Ovládací panel -> '.APP.' -> Nastavení emailu
';

////////////////////////
// USER UPGRADE - 3
////////////////////////

// When upgraded by user successfully (By user)
$l['mail_userupgrade_success_user_sub'] = 'Instalace $scriptname byla úspěšně aktualizovaná';
$l['mail_userupgrade_success_user'] = 'Vaše instalace $scriptname $version byla úspěšně aktualizována na nejnovější verzi.
Zde jsou vypsány veškeré podrobnosti :
URL instalace : $url
Nejnovější verze : $version
Aktuální verze : $oldversion

Pokud si nepřejete dostávat tyto emaily, přejděte na Ovládací panel -> '.APP.' -> Nastavení emailu
';

// If any error occured while upgrading, (By user)
$l['mail_userupgrade_fail_user_sub'] = 'Aktualizace vaší instalace $scriptname se nezdařila';
$l['mail_userupgrade_fail_user'] = 'Aktualizace vaší instalace $scriptname selhala.
Zde jsou vypsány veškeré podrobnosti :
URL instalace : $url
Aktuální verze : $oldversion
Nejnovější verze : $version
Chyba : $upgrade_error

Pokud si nepřejete dostávat tyto emaily, přejděte na Ovládací panel -> '.APP.' -> Nastavení emailu
';

// If UPGRADE and RESTORE failed while upgrading, (By user)
$l['mail_userupgrade_restore_fail_user_sub'] = 'Aktualizace vaší instalace $scriptname se nezdařila';
$l['mail_userupgrade_restore_fail_user'] = 'Aktualizace vaší $scriptname instalace selhala.
Před aktualizací byla vytvořena záloha, ale proces obnovy ze zálohy se také nepodařilo provést.

Je zapotřebí provést manuální obnovu. Návod pro manuální obnovu naleznete na :
http://www.softaculous.com/docs/Manual_Restore

Zde jsou vypsány veškeré podrobnosti :
URL instalace : $url
Aktuální verze : $oldversion
Nejnovější verze : $version
<if $upgrade_error>
Při aktualizaci se vyskytly se následující chyby :
Chyba : $upgrade_error
</if>
<if $error>
Při obnově se vyskytly se následující chyby :
Chyba : $error
</if>

K dispozici je Vám také '.APP.' Tým. V případě jakýchkoliv problémů můžete  '.APP.' Tým kontaktovat na (support@'.strtolower(APP).'.com).

Pokud si nepřejete dostávat tyto emaily, přejděte na Ovládací panel -> '.APP.' -> Nastavení emailu
';

////////////////////////
// AUTO UPGRADE - 3
////////////////////////

// When AUTOUPGRADED successfully
$l['mail_autoupgrade_success_user_sub'] = 'Instalace $scriptname automaticky úspěšně aktualizovaná';
$l['mail_autoupgrade_success_user'] = 'Vaše instalace $scriptname $version byla úspěšně automaticky aktualizována na nejnovější verzi.
Zde jsou vypsány veškeré podrobnosti :
URL instalace : $url
Nejnovější verze : $version
Aktuální verze : $oldversion

Pokud si nepřejete dostávat tyto emaily, přejděte na Ovládací panel -> '.APP.' -> Nastavení emailu
';

// When AUTOUPGRADE FAILED
$l['mail_autoupgrade_fail_user_sub'] = 'Auto Upgrade vaší instalace $scriptname se nezdařil';
$l['mail_autoupgrade_fail_user'] = 'Automatická aktualizace vaší $scriptname instalace selhala.
Zde jsou vypsány veškeré podrobnosti :
URL instalace : $url
Aktuální verze : $oldversion
Nejnovější verze : $version
Chyba : $upgrade_error

Pokud si nepřejete dostávat tyto emaily, přejděte na Ovládací panel -> '.APP.' -> Nastavení emailu
';

// If UPGRADE and RESTORE failed while AUTOUPGRADING
$l['mail_autoupgrade_restore_fail_user_sub'] = 'Auto Upgrade vaší instalace $scriptname se nezdařil';
$l['mail_autoupgrade_restore_fail_user'] = 'Automatická aktualizace vaší $scriptname instalace selhala.
Před aktualizací byla vytvořena záloha, ale proces obnovy ze zálohy se také nepodařilo provést.

Je zapotřebí provést manuální obnovu. Návod pro manuální obnovu naleznete na :
http://www.softaculous.com/docs/Manual_Restore

Zde jsou vypsány veškeré podrobnosti :
URL instalace : $url
Aktuální verze : $oldversion
Nejnovější verze : $version
<if $upgrade_error>
Při aktualizaci se vyskytly se následující chyby :
Chyba : $upgrade_error
</if>
<if $error>
Při obnově se vyskytly se následující chyby :
Chyba : $error
</if>

K dispozici je Vám také '.APP.' Tým. V případě jakýchkoliv problémů můžete  '.APP.' Tým kontaktovat na (support@'.strtolower(APP).'.com).

Pokud si nepřejete dostávat tyto emaily, přejděte na Ovládací panel -> '.APP.' -> Nastavení emailu
';

////////////////////////
// PRE UPGRADE CHECK 
////////////////////////

// If pre upgradation check fails while AUTOUPGRADE (FOR USER)
$l['mail_autoupgrade_precheck_fail_sub'] = 'Předběžná kontrola upgradu se nezdařila';
$l['mail_autoupgrade_precheck_fail'] = 'Proces automatické aktualizace této instalace nebylo možno provést, protože nesplňuje požadavky pro aktualizaci :
URL instalace : $url
Aktuální verze : $oldversion
Nejnovější verze : $version
<if $upgrade_error>
Chyba : $upgrade_error
</if>
<if $error>
Chyba : $error
</if>

Pokud si nepřejete dostávat tyto emaily, přejděte na Ovládací panel -> '.APP.' -> Nastavení emailu
';

/////////////////////////////////
// Backup Failed CLI UPGRADE
/////////////////////////////////

// If a backup fails before AUTO UPGRADING an installation (FOR USER)
$l['mail_autoupgrade_backup_fail_sub'] = 'Proces zálohování selhal před automatickou aktualizací instalace $scriptname';
$l['mail_autoupgrade_backup_fail'] = 'Záloha $scriptname instalace se nezdařila. Proces automatické aktualizace byl přerušen.
Zde jsou vypsány veškeré podrobnosti :
URL instalace : $url
Aktuální verze : $oldversion
Nejnovější verze : $version
Chyba : $error

Pokud si nepřejete dostávat tyto emaily, přejděte na Ovládací panel -> '.APP.' -> Nastavení emailu
';

$l['err_openconfig'] = 'Nelze otevřít soubor konfigurace';
$l['err_writeconfig'] = 'Nelze zapsat soubor konfigurace';

$l['classes_con_failed'] = 'Chyba: Připojení k serveru se nezdařilo';
$l['cl_ratings'] = 'Hodnocení';
$l['cl_author'] = 'Autor';
$l['cl_license'] = 'Licence';
$l['cl_version'] = 'Verze';
$l['cl_show_files'] = 'Zobrazit soubory';
$l['cl_install_but'] = 'Instalovat';
$l['expand_view'] = 'Klikněte zde pro plné zobrazení';
$l['collapse_view'] = 'Klikněte zde pro vložené zobrazení';

$l['email_off_notice'] = '<b>POZNÁMKA: Oznamovací emaily jsou zablokované, takže neobdržíte žádný email.</b>';

// Add User Language Strings
$l['mail_add_user_sub'] = 'Vítejte v Softaculous Remote Installer';
$l['mail_add_user'] = 'You can now successfully login into Softaculous Remote Installer.
The details are as follows :
User 					: $username
API Key 				: $api_key
API Password 			: $api_pass
Number of Users allowed	: $number_of_users';

// Requirement parser languages
$l['req_ver_nf'] = 'Požadovaná verze &soft-1; &soft-2; &soft-3; A nalezená verze je:';
$l['req_ext_nf'] = 'Požadované rozšíření &soft-1 nenalezeno:';
$l['req_func_nf'] = 'Požadovaná funkce &soft-1; nenalezena';
$l['req_ext_ver'] = 'Požadované rozšíření verze &soft-1; &soft-2; &soft-3; &soft-4; ale nalezen &soft-5;';
$l['gt'] = 'větší než';
$l['lt'] = 'menší než';
$l['ge'] = 'větší než rovno';
$l['le'] = 'menší než rovno';
$l['eq'] = 'je';
$l['ne'] = 'should not be equal to';

// Automated Backup Language Strings
$l['mail_auto_backup_sub'] = 'Automatická záloha instalace vašeho $scriptname';
$l['mail_auto_backup'] = 'Automatická záloha vaší $scriptname instalace byla úspěšně dokončena.
Zde jsou vypsány veškeré podrobnosti :
Cesta umístění instalace : $path
URL instalace : $url
Cesta k umístění zálohy : $backup_file
<if $backup_location>Backup Location : $backup_location</if>
Přístup k zálohám naleznete v sekci Zálohy v '.APP.'.

Pokud si nepřejete dostávat tyto emaily, přejděte na Ovládací panel -> '.APP.' -> Nastavení emailu
';

$l['mail_auto_backup_fail_sub'] = 'Automatická záloha instalace vašeho $scriptname se nezdařila';
$l['mail_auto_backup_fail'] = 'Automatickou zálohu vaší $scriptname instalace se nepodařilo dokončit.
Zde jsou vypsány veškeré podrobnosti :
Cesta umístění instalace : $path
URL instalace : $url
Cesta k umístění zálohy : $backup_file
<if $backup_location>Backup Location : $backup_location</if>
Vyskytly se následující chyby :
$error

Pokud si nepřejete dostávat tyto emaily, přejděte na Ovládací panel -> '.APP.' -> Nastavení emailu
';

// Email for sending the list of scripts which does not meet the requirements.
$l['mail_script_requirement_sub'] = 'Log požadavků skriptů, které se nezdařily';
$l['mail_script_requirement'] = 'Následující skripty na vašem serveru nesplňují minimální požadavky a nemusí pracovat správně.
Zde jsou vypsány veškeré podrobnosti :

$failed_req

Poznámka : Pokud měníte PHP verzi na runtime (např.: pomocí CageFS, hive, .htaccess, atd.), můžete ignorovat výše uvedené chybová hlášení verze PHP.';

// Softpanel Language Strings
$l['no_www_domain'] = 'Please close all '.$globals['sn'].' pages and log out from the control panel using the log out button.
Afterwards you can log in again and use '.$globals['sn'].'.';

$l['install_tweet'] = 'Právě jsem nainstaloval #[[SCRIPTNAME]] na [[softurl]] pomocí #[[APP]] #[[TYPE]]';
$l['install_tweet_classes'] = 'Právě jsem nainstaloval #[[SCRIPTNAME]] pomocí #[[APP]] #[[TYPE]]';
$l['upgrade_tweet'] = 'Právě jsem aktualizoval #[[SCRIPTNAME]] na [[softurl]] pomocí #[[APP]] #[[TYPE]]';
$l['clone_tweet'] = 'Právě jsem naklonoval #[[SCRIPTNAME]] na [[softurl]] pomocí #[[APP]] #[[TYPE]]';

// month strings
$l['January'] = 'January';
$l['February'] = 'February';
$l['March'] = 'March';
$l['April'] = 'April';
$l['May'] = 'May';
$l['June'] = 'June';
$l['July'] = 'July';
$l['August'] = 'August';
$l['September'] = 'September';
$l['October'] = 'October';
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

