<?php

//////////////////////////////////////////////////////////////
//===========================================================
// settings_lang.php
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

$l['no_path'] = 'Geen (geldig) path opgegeven';//No Path was posted
$l['wrong_path'] = 'Kan het bestand universal.php niet vinden via het door u opgegeven path';//Could not locate universal.php at the path you specified
$l['no_softscripts'] = 'U heeft geen geldig path voor de locatie van de scripts is opgegeven';//No path of the Script/Softwares location was given
$l['wrong_softscripts'] = 'Het script path is onjuist. Er zijn geen scripts gevonden';//The Script/Softwares path is wrong as no software was found
$l['no_sn'] = 'U heeft geen site naam opgegeven.';//No Site Name was specified.
$l['no_cookie_name'] = 'U heeft geen cookie naam opgegeven';//No Cookie Name was specified
$l['no_soft_email'] = 'U heeft geen e-mail adres opgegeven';//No Email Address was provided
$l['wrong_soft_email'] = 'Het e-mail adres dat u heeft opgegeven is ongeldig';//The Email Address you submitted is Invalid
$l['wrong_from_email'] = 'Het FROM e-mail adres dat u heeft opgegeven is ongeldig';
$l['no_license'] = 'U heeft geen licensie key opgegeven';//No license key was submitted
$l['no_lang'] = 'U heeft geen taalkeuze geselecteerd';//No language was selected
$l['wrong_lang'] = 'De geselecteerde taal is ongeldig';//The selected language is invalid
$l['no_theme_folder'] = 'Geen thema gekozen';//No theme was selected
$l['wrong_theme_folder'] = 'U heeft een ongeldig thema geselecteerd';//The selected theme is invalid
$l['no_timezone'] = 'U heeft geen tijdzone geselecteerd';//No Timezone was selected
$l['wrong_timezone'] = 'U heeft een ongeldige tijdzone opgegeven';//The selected timezone is invalid
$l['no_cron_time'] = 'U eeft een ongeldige cron job tijd opgegeven';//No Cron Job Time was specified
$l['no_off_message'] = 'U heeft geen -onderwerp '.APP.' niet actief- opgegeven';//No Switch Off Subject was specified
$l['no_off_subject'] = 'U heeft geen - bericht '.APP.' niet actief - opgegeven';//No Switch Off Message was specified
$l['saving_error'] = 'Er zijn fouten geconstateerd tijdens het opslaan van de instellingen';//There were some errors while saving the settings
$l['no_update'] = 'U heeft een ongeldige update instelling opgegeven';
$l['invalid_update'] = 'U heeft een ongeldige waarde opgegeven';
$l['no_protocol'] = 'U heeft geen geldig protocol opgegeven';
$l['wrong_protocol'] = 'Het geselecteerde protocol is ongeldig';
$l['wrong_network_interface'] = 'U heeft geen geldige interface opgegeven';
$l['pass_strength_error'] = 'Password strength must be an integer only, between 0 to 100.';
$l['err_binary_path'] = 'It seems that the binary does not exist at the defined path. Please check it and try again.';
$l['err_invalid_soa'] = 'Invalid SOA!!!Please enter a valid positive number';

//Theme Strings
$l['<title>'] = APP.' - Instellingen';//Softaculous - Settings Center
$l['settings_saved'] = 'De instellingen zijn succesvol opgeslagen';//The settings were saved successfully
$l['pathhead'] = 'Script paths';//Software Paths
$l['softpath'] = ''.APP.' path';//'.APP.' Path
$l['softpath_exp'] = 'Via deze optie kunt u het path naar de folder waar alle bestanden, met uitzondering van de scripts, worden opgeslagen instellen.';//It is the path where all files excluding the various scripts are located
$l['softscripts'] = 'Script path';//Scripts Path
$l['softscripts_exp'] = 'Via deze optie kunt u het path naar de folder waar de scripts worden opgeslagen instellen.';//It is the path where all the softwares/scripts are located
$l['gen_set'] = 'Algemene instellingen';//General Settings
$l['sitename'] = 'Website naam';//Site Name
$l['sitename_exp'] = 'Via deze optie kunt u de servernaam of bedrijfsnaam dat door '.APP.' gebruikt wordt instellen. Deze naam zal verschijnen op een aantal pagina\'s van de '.APP.' installer.';//The name of the Server/Company using '.APP.'. It will appear in many pages of Softaculous Installer
$l['cook_name'] = 'Cookie naam';//Cookie Name
$l['cook_name_exp'] = 'Via deze optie kunt u de naam van het cookie dat wordt opgeslagen via de browser instellen.';//The name of the Cookie that will be stored on browsers.
$l['comp_output'] = 'Output comprimeren';//Compress Output
$l['comp_output_exp'] = 'Via deze optie kunt u de output comprimeren. Het comprimeren van de output verminderd het gebruik van dataverkeer.';//This will compress output and it saves alot of bandwidth.
$l['soft_email'] = 'Admin e-mail adres';//Email Address
$l['soft_email_exp'] = 'Via deze optie kunt u het e-mail adres dat gebruikt wordt voor systeem berichten instellen.';
$l['from_email'] = 'Afzender e-mail adres';
$l['from_email_exp'] = 'Via deze optie kunt u het e-mail adres dat wordt gebruikt voor de FROM headers instellen.';
$l['license'] = 'Licentie key';//license Key
$l['license_exp'] = 'Voer de juiste '.APP.' licensie code in';//Please put the correct license Key issued by '.APP.'
$l['choose_lang'] = 'Taalkeuze';//Choose Language
$l['choose_lang_exp'] = 'Via deze optie kunt u de gewenste taal instellen.';//Choose your preferred language
$l['choose_theme'] = 'Thema';//Choose Theme
$l['choose_theme_exp'] = 'Via deze optie kunt u het theme dat door '.APP.' gebruikt wordt instellen.';//The selected theme will be the Default Theme throughout '.APP.'
$l['timezone'] = 'Tijdzone';//Timezone
$l['update_settings'] = 'Update instellingen';//Update Settings
$l['auto_upd_softac'] = 'Update '.APP.' automatisch';//Auto Update '.APP.'
$l['auto_upd_softac_exp'] = 'Wanneer u deze optie activeert zal '.APP.' automatisch geupdate worden naar de laatste versie. <br />De <b>laatste stabiele versie</b> wordt pas vrijgegeven nadat deze uitvoerig is getest<br />De <b>release candidate versie</b> bevat de ook de laatst toegevoegde onderdelen.';
$l['never_update'] = 'Update nooit';
$l['stable'] = 'Stabiele versie (aanbevolen)';
$l['release_cand'] = 'Release candidate (niet uitvoerig getest!)';
$l['auto_upd_soft'] = 'Update scripts automatisch';//Auto Update Softwares
$l['auto_upd_soft_exp'] = 'Wanneer u deze optie activeert zullen de scripts die beschikbaar zijn in '.APP.' automatisch worden geupdate naar de laatste versie.';//If enabled various Scripts/Softwares will be UPDATED to their latest Versions
$l['auto_add_soft'] = 'Nieuwe scripts automatisch toevoegen';//Auto Add New Softwares
$l['auto_add_soft_exp'] = 'Wanneer u deze optie activeert zullen neiuwe scripts die beschikbaar zijn in '.APP.' automatisch worden toegevoegd (aanbevolen).';//If enabled new Scripts/Softwares will be added during the CRON Job. RECOMMENDED
$l['email_upd_soft'] = ' '.APP.' update melding';//Notify Updates
$l['email_upd_soft_exp'] = 'Wanneer u deze optie activeert ontvangt u een e-mail wanneer '.APP.' updates beschikbaar zijn of wanneer de auto update functie hiervoor is uitgevoerd.';//Will send emails when '.APP.' Upgrades are available or Auto Upgrade is done
$l['email_upd_softs'] = 'Script update melding';//Notify Software Updates
$l['email_upd_softs_exp'] = 'Wanneer u deze optie activeert ontvangt u een e-mail wanneer scripts updates voor '.APP.' beschikbaar zijn of wanneer de auto update functie hiervoor is uitgevoerd.';//Will send emails when Scripts/Software Updates are available or Auto Update of Scripts/Software is done
$l['cron_time'] = 'Cron job instellingen';//Updates Cron Job
$l['cron_time_exp'] = 'De cron job instellingen om te controleren of er updates beschikbaar zijn. Wijzig deze instelling niet als u niet op de hoogte bent met het gebruik van cron jobs.';//The Cron Job time to check for Available Updates. Dont change if you are unaware of CRON Jobs
$l['disable_soft'] = 'Deacitveer '.APP.'';//Disable '.APP.'
$l['soft_off'] = 'Zet '.APP.' op niet actief';//Turn '.APP.' Off
$l['soft_off_exp'] = 'Via deze optie kunt u '.APP.' op niet actief zetten en kan de installer niet meer gebruikt worden!';//This will disable '.APP.' and users will not be able to use it!
$l['off_sub'] = 'Onderwerp '.APP.' niet actief';//Switch Off Subject
$l['off_message'] = 'Bericht '.APP.' niet actief';//Switch Off Message
$l['edit_settings'] = 'Instellingen bijwerken';//Edit Settings
$l['chmod_files'] = 'CHMOD bestanden';
$l['chmod_files_exp'] = 'Gebruik deze optie wanneer suPHP actief is en niet door '.APP.' gedetecteerd wordt. Laat dit veld leeg wanneer u niet zeker bent over deze instelling.';
$l['chmod_dir'] = 'CHMOD folders';
$l['chmod_dir_exp'] = 'Gebruik deze optie wanneer suPHP actief is en niet door '.APP.' gedetecteerd wordt. Laat dit veld leeg wanneer u niet zeker bent over deze instelling.';
$l['is_vps'] = 'VPS';
$l['is_vps_exp'] = 'Via deze optie kunt u aangeven dat de server die u gebruikt een VPS is.';
$l['eu_news_off'] = ''.APP.' nieuws uitschakelen voor gebruikers';
$l['eu_news_off_exp'] = 'Via deze optie kunt u '.APP.' nieuws over updates en nieuwe scripts uitschakelen voor gebuikers.';
$l['logo_url'] = 'URL logo';
$l['logo_url_exp'] = 'Via deze optie kunt u de URL naar het logo dat gebruikt wordt voor '.APP.' instellen. Wanneer u dit veld leeg laat zal het standaard '.APP.'  logo getoond worden.';
$l['php_bin'] = 'PHP binary';
$l['php_bin_exp'] = 'Via deze optie kunt u  binary path dat wordt gebruikt voor onder andere de cron job instellen. Wanneer u dit veld leeg laat zal <b>/usr/bin/php</b> gebruikt worden. Houd er rekening mee dat het <b> PHP-binair een CLI-binair moet zijn </b>.';
$l['end_user_set'] = 'Gebruiker instellingen';
$l['off_sync_link'] = 'Sync link uitschakelen';
$l['off_sync_link_exp'] = 'Via deze optie kunt u de synchronize link voor gebruikers uitschakelen.';
$l['off_panel_link'] = 'Control panel link uitschekelen';
$l['off_panel_link_exp'] = 'Via deze optie kunt u de control panel pink in het dock voor gebruikers uitschakelen.';
$l['chmod_conf_file'] = 'CHMOD configuratie bestanden';
$l['chmod_conf_file_exp'] = 'Via deze optie kunt u de permissies voor het configuratie bestand instellen. De standaard waarde is 0644. Laat dit veld leeg wanneer u niet zeker bent over deze instelling.';
$l['suphp_detected'] = 'suPHP is gedetecteerd';
$l['no_prefill'] = 'Folder prefix uitschakelen';
$l['no_prefill_exp'] = 'Via deze optie kunt u de standaard folder prefix (scriptnaam) die wordt toegevoegd tijdens de installatie van een script uitschakelen.';
$l['footer_link'] = 'URL footer';
$l['footer_link_exp'] = 'Via deze optie kunt u tekst toevoegen aan de footer van de pagina die wordt getoond wanneer een gebruiker een script installeert.';
$l['eu_email_off'] = 'Update e-mails voor gebruikers uitschakelen';
$l['eu_email_off_exp'] = 'Via deze optie kunt de automatische verzending van e-mails over de beschikbaarheid van een update voor een geinstalleerd script uitschakelen.';
$l['random_pass'] = 'Random wachtwoord tijdens installatie';
$l['random_pass_exp'] = 'Via deze optie kunt u het aanmaken van een random wachtwoord tijdens de installatie van een script inschakelen.';
$l['off_demo_link'] = 'Script demo\'s uitschakelen';
$l['off_demo_link_exp'] = 'Via deze optie kunt u de link naar de script demo\'s voor gebruikers uitschakelen.';
$l['off_rating_link'] = 'Script ratings uitschakelen';
$l['off_rating_link_exp'] = 'Via deze optie kunt u de link naar de script ratings voor gebruikers uitschakelen.';
$l['off_review_link'] = 'Script reviews uitschakelen';
$l['off_review_link_exp'] = 'Via deze optie kunt u de link naar de script reviews voor gebruikers uitschakelen.';
$l['off_screenshot_link'] = 'Script screenshots uitschakelen';
$l['off_screenshot_link_exp'] = 'Via deze optie kunt u de script screenshots voor gebruikers uitschakelen.';
$l['random_dbprefix'] = 'Random database prefix inschakelen';
$l['random_dbprefix_exp'] = 'Via deze optie kunt u een random database prefix toevoegen tijdens de installatie van een script inschakelen.';
$l['remote_mysql'] = 'Remote MySQL hostname';
$l['remote_mysql_exp'] = 'Via deze optie kunt u aangeven dat u een remote database server gebruikt door de hostname of ip adres van de database server op te geven.';
$l['perl_scripts'] = 'PERL scripts uitschakelen';
$l['perl_scripts_exp'] = 'Via deze optie kunt u de link naar PERL scripts voor gebruikers uitschakelen';
$l['show_top_scripts'] = 'Top scripts groep weergeven';
$l['show_top_scripts_exp'] = 'Via deze optie kunt u de link naar top scripts groep voor gebruikers inschakelen.';
$l['err_change_app_name'] = 'Er is een fout opgetreden bij het wijzigen van de naam van de groep.';
$l['hide_dbprefix'] = 'Databse prefix uitschakelen';
$l['hide_dbprefix_exp'] = 'Via deze optie kunt u het gerbuik van een database prefix tijdens de installatie van een script uitschakelen.';
$l['user_mod_dir'] = 'USER MOD DIR gebruiken';
$l['user_mod_dir_exp'] = 'Via deze optie kunt u de mogelijkheid voor gebruikers om scripts te installeren via een tijdelijke link (http://IP/~user) inschakelen.';
$l['off_email_link'] = 'E-mail naar gebruikers uitschakelen';
$l['off_email_link_exp'] = 'Via deze optie kunt u het verzenden van e-mails naar gebruikers uitschakelen. Deze optie zal ook het verzenden van e-mails over de installatie gegevens of het verwijderen van een script uitschakelen.';
$l['disable_classes'] = 'PHP classes uitschakelen';
$l['disable_classes_exp'] = 'Via deze optie kunt u de link naar PHP classes voor gebruikers uitschakelen.';
$l['panel_hf'] = 'Show Softaculous in control panel\'s native UI';
$l['panel_hf_exp'] = 'If this is enabled then Softaculous will be shown in control panel\'s native UI.';
$l['disable_backup_restore'] = 'Backup/Restore functie uitschakelen';
$l['disable_backup_restore_exp'] = 'Via deze optie kunt u de link naar de backup/restore functie voor gebruikers uitschakelen.';
$l['nolabels'] = 'Alle scripts uitschakelen';
$l['nolabels_exp'] = 'Via deze optie kunt u alle scripts zoals PHP, Jvascripts, PERL voor uw gebruikers uitschakelen.';
$l['settings'] = APP.' instellingen';
$l['disable_reseller_panel'] = 'Reseller panel uitschakelen';
$l['disable_reseller_panel_exp'] = 'Via deze optie kunt u het '.APP.' panel voor resellers uitschakelen .';
$l['choose_protocol'] = 'Protocol';
$l['choose_protocol_exp'] = 'Via deze optie kunt u instellen of hhtp of https protocol als standaard wordt gebruikt bij de installatie van een script.';
$l['random_username'] = 'Random gebruikersnaam';
$l['random_username_exp'] = 'Via deze optie kunt u een random gebruikersnaam genereren wanneer een script door een gebruiker wordt geinstalleerd.';
$l['network_interface'] = 'Network interface';
$l['network_interface_exp'] = 'Via deze optie kunt u de netwerk interface die gebruikt wordt specificeren. Laat dit veld leeg wanneer u niet zeker bent over deze instelling.';
$l['default_domain_path'] = 'Standaard domein Path';
$l['default_domain_path_exp'] = 'Via deze optie kunt u het standaard domein path opgeven voor domeinen die worden toegevoegd.';
$l['empty_username'] = 'Veld gebruikersnaam leeg laten';
$l['empty_username_exp'] = 'Via deze optie kunt u aangeven dat de admin gebruikersnaam tijdens de installatie een leeg veld is.';
$l['empty_pass'] = 'Veld wachtwoord leeg laten';
$l['empty_pass_exp'] = 'Via deze optie kunt u aangeven dat het admin wachtwoord tijdens de installatie een leeg veld is.';
$l['show_cscript_in_top'] = 'Logo custom script in top scripts.';
$l['show_cscript_in_top_exp'] = 'Via deze optie kunt u aangeven dat de logo van een custom script moet worden weergegeven in de top scripts.';
$l['pass_strength'] = 'Activeer de wachtwoord sterkte tool';
$l['pass_strength_exp'] = 'Via deze optie kunt u de wachtwoord sterkte tool activeren.';
$l['off_remove_mail'] = 'Verwijder script e-mail';
$l['off_remove_mail_exp'] = 'Via deze optie kunt u de e-mail notificatie die wordt verzonden nadat een script verwijderd wordt uitschakelen.';
$l['off_backup_mail'] = 'Backup script e-mail';
$l['off_backup_mail_exp'] = 'Via deze optie kunt u de e-mail notificatie die wordt verzonden nadat een backup van een script gemaakt is uitschakelen.';
$l['off_install_mail'] = 'Nieuwe installatie e-mail';
$l['off_install_mail_exp'] = 'Via deze optie kunt u de e-mail notificatie die wordt verzonden nadat een script geinstalleerd is uitschakelen.';
$l['off_edit_mail'] = 'Wijzig script e-mail';
$l['off_edit_mail_exp'] = 'Via deze optie kunt u de e-mail notificatie die wordt verzonden nadat een script gewijzigd is uitschakelen.';
$l['off_clone_mail'] = 'Clone script e-mail';
$l['off_clone_mail_exp'] = 'Via deze optie kunt u de e-mail notificatie die wordt verzonden nadat een script geclooned is uitschakelen.';
$l['off_restore_mail'] = 'Turn off Restore Installation emails';
$l['off_restore_mail_exp'] = 'This will disable the email sent to endusers when an installation is restored.';
$l['admin_prefix'] = 'Prefix voor admin gebruikersnaam';
$l['admin_prefix_exp'] = 'Selecteer de prefix die wordt gebruikt voor de admin gebruikersnaam<br/> Het  \'-\' teken is niet toegestaan';
$l['ap_none'] = 'Geen';
$l['ap_username'] = 'Gebruikersnaam';
$l['ap_domain'] = 'Domein';
$l['ap_admin_defined'] = 'Admin gebruikersnaam';
$l['disable_auto_backup'] = 'Backup mogelijkheid voor gebruikers uitschakelen';
$l['disable_auto_backup_exp'] = 'Via deze optie kunt u de backup mogelijkheid voor gebruikers uitschakelen.';
$l['webuzo_disable_username'] = 'Pre-fill Webuzo gebruikersnaam';
$l['webuzo_disable_username_exp'] = 'Via deze optie kunt ude Webuze gebruikersnaam op de log in pagina automatisch laten invullen.';
$l['disable_clone'] = 'Clone mogelijkheidDisable Clone feature for endusers';
$l['disable_clone_exp'] = 'Via deze optie kunt u de mogelijkheid voor het cloonen van scripts voor gebruikers uitschakelen.';
$l['disable_remote_import'] = 'Disable Remote Import feature for endusers';
$l['disable_remote_import_exp'] = 'This will disable the remote import option for endusers';
$l['disable_backup_upgrade'] = 'Backup optie voor update van scripts';
$l['disable_backup_upgrade_exp'] = 'Via deze optie kunt u de mogelijkheid om een backup te maken van een script voordat de update wordt uitgevoerd uitschakelen.';
$l['ephp_bin'] = 'Gebruiker PHP binary';
$l['ephp_bin_exp'] = 'Het PHP binary path dat wordt gebruikt voor de websites van gebruikers. '.APP.' gebruikt dit path om na te gaan of een script geinstalleerd kan worden. Wanneer er geen path wordt opgegeven dan zal '.APP.' gebruiken: ';
$l['no_ampps_download'] = 'AMPPS download link';
$l['no_ampps_download_exp'] = 'Via deze optie kunt u de AMPPS doenload link voor gebruikers verwijderen';
$l['no_strong_mysql_pass'] = 'Database gebruiker wachtwoorden';
$l['no_strong_mysql_pass_exp'] = 'Via deze optie kunt u aangeven dat de database gebruiker wachtwoorden moeten worden gegenereerd zonder speciale tekens.';

$l['remove_options'] = 'Gebruikers instellingen bij verwijderen script';
$l['remove_dir'] = 'Directory verwijderen weergeven';
$l['remove_dir_exp'] = 'Via deze optie kunt u aangeven dat de installatie directory altijd verwijderd moet worden wanneer een gebruiker een script verwijderd.';
$l['remove_db'] = 'Database en database gerbruiker verwijderen weegeven';
$l['remove_db_exp'] = 'Via deze optie kunt u aangeven dat de database en database gebruiker altijd verwijderd moet worden wanneer een gebruiker een script verwijderd';
$l['remove_datadir'] = 'Data directory verwijderen weergeven';
$l['remove_datadir_exp'] = 'Via deze optie kunt u aangeven dat de data directory altijd verwijderd moet worden wanneer een gebruiker een script verwijderd.';
$l['remove_wwwdir'] = 'WWW directory verwijderen weergeven';
$l['remove_wwwdir_exp'] = 'Via deze optie kunt u aangeven dat de www directory altijd verwijderd moet worden wanneer een gebruiker een script verwijderd.';

$l['social_media'] = 'Social Media instellingen';
$l['install_tweet_off'] = 'Tweet berichten uitschakelen voor nieuwe installaties';
$l['install_tweet_off_exp'] = 'Via deze optie kunt u de Tweet optie die wordt weergegeven na de installatie van een script uitschakelen.';
$l['install_tweet_msg'] = 'Tweet bericht voor nieuwe installaties';
$l['install_tweet_msg_exp'] = 'Tweet bericht voor nieuwe installaties';

$l['upgrade_tweet_off'] = 'Tweet berichten uitschakelen voor geupdate installaties';
$l['upgrade_tweet_off_exp'] = 'Via deze optie kunt u de Tweet optie die wordt weergegeven na de update van een script uitschakelen.';
$l['upgrade_tweet_msg'] = 'Tweet bericht voor geupdate installaties';
$l['upgrade_tweet_msg_exp'] = 'Tweet bericht voor geupdate installaties';

$l['clone_tweet_off'] = 'Tweet berichten uitschakelen voor gecloonde installaties';
$l['clone_tweet_off_exp'] = 'Via deze optie kunt u de Tweet optie die wordt weergegeven na het cloonen van een script uitschakelen.';
$l['clone_tweet_msg'] = 'Tweet bericht voor gecloonde installaties';
$l['clone_tweet_msg_exp'] = 'Tweet bericht voor gecloonde installaties';

$l['no_ftp_encrypted'] = 'FTP wachtwoord niet versleutelen';
$l['no_ftp_encrypted_exp'] = 'Via deze optie kunt u aangeven dat FTP wachtwoorden voor een domeinnaam niet versleuteld moet worden opgeslagen in de database.';
$l['pre_download_all'] = 'Scripts van te voren downloaden';
$l['pre_download_all_exp'] = 'Via deze optie kunt u aangeven dat scripts van te voren moeten worden gedownload (inclusief scripts die nieuw zijn toegevoegd).';

$l['tweet_vars_link'] = 'Opties voor tweet berichten';
$l['tweet_vars'] = '[[SCRIPTNAME]] - Naam van het script <br />[[TYPE]] - Type script, bijvoorbeeld: PHP, PERL, etc <br />[[softurl]] - Installatie URL <br />[[cat]] - Script categorie, bijvoorbeeld: Blog, CMS, etc <br />[[ver]] - Script versie <br />';

$l['session_timeout'] = 'Session timeout';
$l['session_timeout_exp'] = 'Via deze optie kunt u aangeven hoe lang een Softaculous Sessie actief moet blijven. Tijd in minuten. Standaard waarde 15';


$l['auto_backup_limit'] = 'Auto backup rotatie limiet';
$l['auto_backup_limit_exp'] = 'Via deze optie kunt u aangeven wat de maximale rotatie limiet voor backups is.';
$l['auto_backup_unlimited'] = 'Geen limiet';
$l['auto_backup_all'] = 'All';
$l['auto_backup_daily'] = 'Disable Daily Auto backups';
$l['auto_backup_weekly'] = 'Disable Weekly Auto backups';
$l['auto_backup_monthly'] = 'Disable Monthly Auto backups';

$l['off_upgrade_plugins'] = 'Auto update plugins voor gebruikers uitschakelen';
$l['off_upgrade_plugins_exp'] = 'Via deze optie kunt u de auto update mogelijkheid voor plugins die gebruikt worden door een script uitschakelen.';
$l['off_upgrade_themes'] = 'Auto update templates voor gebruikers uitschakelenDisable auto upgrade themes for enduser';
$l['off_upgrade_themes_exp'] = 'Via deze optie kunt u de auto update mogelijkheid voor templates die gebruikt worden door een script uitschakelen.';

$l['pfx_settings'] = 'PopularFX instellingen';
$l['eu_enable_themes'] = 'Activeer gratis templates';
$l['eu_enable_themes_exp'] = 'Via deze optie kunt u de mogelijkheid om tijdens de installatie van scripts als WordPress een gratis template te installeren activeren.';
$l['eu_themes_premium'] = 'Activeer premium templates';
$l['eu_themes_premium_exp'] = 'Via deze optie kunt u de mogelijkheid om tijdens de installatie van scripts als WordPress een betaald template te installeren activeren.<br /><a href="http://www.softaculous.com/docs/Premium_Themes" target="_blank">Meer informatie</a>';

$l['backups_expire'] = 'Delete Backup Frequency';
$l['backups_expire_exp'] = 'If you would like to delete your users\' backups after certain days since backup creation. By default the backups are never deleted.';

$l['default_hf_bg'] = 'Default color for Header Footer';
$l['default_hf_bg_exp'] = 'This will be the default color for Header, Footer and Left Panel';
$l['default_cat_hover'] = 'Default color for Category hover';
$l['default_cat_hover_exp'] = 'This will be the default color when the user hovers over the Categories in Left panel';
$l['default_hf_text'] = 'Default color for text in Header Footer';
$l['default_hf_text_exp'] = 'This will be the default color for text in Header, Footer and Left Panel';
$l['default_scriptname_text'] = 'Default color for script name text in Left panel';
$l['default_scriptname_text_exp'] = 'This will be the default color for script name text in Left Panel';

$l['max_backups'] = 'Maximum backups per user limit';
$l['max_backups_exp'] = 'This will limit the maximum number of backups a user can take';
$l['max_backups_unlimited'] = 'Unlimited';

$l['default_landing'] = 'Default page for Enduser Panel';
$l['default_landing_exp'] = 'This will be the default page for '.APP.' Enduser Panel';
$l['top_scripts'] = 'Top Scripts (Default)';
$l['all_ins'] = 'All Installations';
$l['outdated_ins'] = 'Outdated Installations';

$l['no_add_domain'] = 'Disable Adding domains by Endusers';
$l['no_add_domain_exp'] = 'This will not allow Endusers to add domains';

$l['force_auto_upgrade'] = 'Force Auto Upgrade preference for users\' installations';
$l['force_auto_upgrade_exp'] = 'Chosen auto upgrade preference, will be selected and disabled in the enduser panel. Enduser(s) will <b>not</b> be able to modify it. (Not Applicable for existing installations)';
$l['enable_auto_upgrade'] = 'Prefill Auto Upgrade preference for users\' installations';
$l['enable_auto_upgrade_exp'] = 'Chosen auto upgrade preference, will be selected by default in the enduser panel. Enduser(s) will be able to modify it.';
$l['dont_auto_upgrade'] = 'Do not Auto Upgrade (Default)';
$l['minor_auto_upgrade'] = 'Upgrade to <b>Minor</b> versions only';
$l['major_auto_upgrade'] = 'Upgrade to any latest version available (<b>Major</b> as well as <b>Minor</b>)';

$l['set_backup_dir'] = 'Set Backup Directory';
$l['set_backup_dir_exp'] = 'Choose the path to store enduser(s) installation backups. <br /> This will be absolute path i.e. if you enter /backups then the backups will be created at /backups/USERNAME directory on your server. This directory should exist and should be writable for all users.';

$l['off_customize_theme'] = 'Turn off Customize Theme';
$l['off_customize_exp'] = 'If selected, then Enduser(s) will not be able to access Customise Theme option';

$l['enc_db_pass'] = 'Store Database Password in encrypted format';
$l['enc_db_pass_exp'] = 'If selected, then the Database Password for users\' installations will be stored in encrypted format';

$l['time_format'] = 'Default Time format';
$l['time_format_exp'] = 'Choose the default time format. Default : <b>F j, Y, g:i a</b>';

$l['no_prefill_db'] = 'Don\'t Prefill Database details';
$l['no_prefill_db_exp'] = 'Don\'t prefill the database details by default.';

$l['off_protocol'] = 'Disable Protocol';
$l['off_protocol_exp'] = 'If selected, the protocol will not be displayed to the enduser';

$l['disable_branches'] = 'Disable Scripts Branches';
$l['disable_branches_exp'] = 'If checked, all the branches of a script will be disabled except the parent one';
$l['db_prefix'] = 'Enable DB Prefix';
$l['db_prefix_exp'] = 'If selected, all database and users will be created with a prefix.';

$l['disable_cronupdate_email'] = 'Disable CronJob Email';
$l['disable_cronupdate_email_exp'] = 'If checked, cronjob notifications will not be send to Email Address given';

$l['set_soa_expire_val'] = 'Set SOA Expire Value';
$l['set_soa_expire_val_exp'] = 'Set a numeric SOA expire value for all the domains. Minimum Value : 86400';

$l['nat_config'] = 'NAT Configuration';
$l['nat_config_exp'] = 'Select this option if you are using NAT configuration on your server';

$l['logs_level'] = APP.' Logs Level';
$l['logs_level_exp'] = 'Selected logs level will be used for error/debug logs. <br />Logs level 4 might contain passwords';
$l['off'] = 'Off';
$l['logs_level-4'] = 'Detailed Logs';

$l['backup_set'] = 'Backup Settings';
$l['email_set'] = 'Email Settings';
$l['hide_feature_set'] = 'Disable Features for End users';
$l['auto_upgrade_set'] = 'Auto Upgrade Settings';

$l['no_prefill_pass'] = 'Don\'t Prefill Password fields';
$l['no_prefill_pass_exp'] = 'While editing an installation or a domain the password will not be shown';
$l['enc_user_pass'] = 'Encrypt API Pass';
$l['enc_user_pass_exp'] = 'If selected the API Pass for user(s) will be encrypted and stored';

$l['sync_domains'] = 'Enable Sync Domain(s)';
$l['sync_domains_exp_remote'] = 'This will enable the synchronizing of Domain(s) in '.APP.' records with the domain(s) list passed via $PRE_LOGIN in session.php, click <a href="http://www.softaculous.com/docs/Softaculous_Remote#Sync_Domains" target="_blank">here</a> to for guide';
$l['sync_domains_exp_ent'] = 'This will enable the synchronizing of Domain(s) in '.APP.' records with the domain(s) list passed via $PRE_LOGIN in session.php, click <a href="http://www.softaculous.com/docs/Softaculous_Enterprise_Integration#Sync_Domains" target="_blank">here</a> to for guide';

$l['email_password'] = 'Email password in plain text';
$l['email_password_exp'] = 'If checked, the passwords will be sent in plain-text to the users via email for install, clone, etc.';

$l['disable_sign_on'] = 'Disable Auto Login';
$l['disable_sign_on_exp'] = 'Select this option to disable auto login to script\'s admin panel from '.APP;

$l['demo_logo'] = 'Logo URL For Scripts Demo';
$l['demo_logo_exp'] = 'If empty the '.APP.' logo will be shown, recommended dimension for the logo Width:150, Height:45';

$l['email_update_apps'] = 'Notify Application Updates';
$l['email_update_apps_exp'] = 'If enabled, emails will be sent when updates for installed Application(s) are available';

$l['demo_logo_url'] = 'Custom link for Scripts Demo Logo';
$l['demo_logo_url_exp'] = 'If empty the '.APP.' url will be used';

$l['favicon_logo'] = 'Favicon logo URL';
$l['favicon_logo_exp'] = 'If empty the '.APP.' favicon will be shown in Enduser Panel';

$l['rebranding_settings'] = 'Rebranding Settings';

$l['use_eu_username'] = 'Prefill Control Panel Username as Admin Username';
$l['use_eu_username_exp'] = 'If set, the script installation\'s Admin Username on the script install form will be prefilled as Control Panel Username';
$l['use_eu_email'] = 'Prefill Enduser Email as Admin Email';
$l['use_eu_email_exp'] = 'If set, the script installation\'s Admin Email on the script install form will be prefilled as the Email set in Enduser Email Settings';

$l['dbpass_len'] = 'Length for random generated MySQL database user password';
$l['dbpass_len_exp'] = 'Choose the length of random generated database user password. If left blank '.APP.' will use default: 10';
$l['off_available_space'] = 'Don\'t display available space';
$l['off_available_space_exp'] = 'If checked, Available Space will not be displayed on the script\'s Overview page';
$l['disable_import'] = 'Disable Import feature for endusers';
$l['disable_import_exp'] = 'This will disable the local import as well as remote import option for endusers';
$l['update_system'] = 'Update Operating System';
$l['update_system_exp'] = 'This will updates the operating system using yum or apt-get';
$l['off_rbackup'] = 'Disable Backup on Remote Server';
$l['off_rbackup_exp'] = 'If checked, backups from '.APP.' on remote server will be disabled for all endusers';

$l['sync_ins_list'] = 'Sync installations list with '.APP.' Records';
$l['sync_ins_list_exp'] = 'Check if the installation directory exists in the user\'s web directory and remove the installation(s) from '.APP.' records for which directory does not exist';

$l['sync_ins_real_ver'] = 'Detect and update actual version of installations';
$l['sync_ins_real_ver_exp'] = 'Detect if the user has manually updated their installation and update the version in '.APP.' records in case of version mismatch';
$l['update_system'] = 'Update OS';
$l['update_system_exp'] = 'If enabled, Operating System will be updated using Yum or Apt-get';

$l['auto_backup_custom'] = 'Disable Custom time for Auto backups';

$l['sitepad_settings'] = 'SitePad Settings'; 
$l['off_sitepad'] = 'Turn Off SitePad Website Builder';
$l['off_sitepad_exp'] = 'This will disable SitePad for all your users<br /><b>Note:</b> SitePad is based on Freemium model and if your users upgrade to the premium plan you get recurring commissions from SitePad. <a href="mailto:sales@sitepad.com">More details</a>';
$l['off_sitepad_conf'] = 'Are you sure you want to disable SitePad Website Builder ? You can get revenues from SitePad via Commissions when your users upgrade to the premium plan of SitePad. Contact us for more details about SitePad at sales@sitepad.com';
$l['auto_backup_default'] = 'Default'; 
$l['auto_backup'] = 'Default auto backup frequency';
$l['auto_backup_exp'] = 'Choose the default auto backup frequency. The chosen value will be pre-selected for endusers';
$l['no_backup'] = 'Don\'t backup';
$l['daily'] = 'Once a day';
$l['weekly'] = 'Once a week';
$l['monthly'] = 'Once a month';
$l['backup_rotation'] = 'Default auto backup rotation';
$l['backup_rotation_exp'] = 'Choose the default auto backup rotation. The chosen value will be pre-selected for endusers';

$l['hc_api_url'] = 'Hosting Controller API URL';
$l['hc_api_url_exp'] = 'API calls for various tasks such as fetching users list, etc at admin level or in CLI will be performed using this HC API URL. This URL must be a valid API URL accessible from your server and of the format <b>http(s)://IP:PORT</b>';

$l['force_softaculous_on_ssl'] = 'Force '.APP.' to run on SSL(HTTPS)';
$l['force_softaculous_on_ssl_exp'] = 'If enabled, '.APP.' will redirect non-ssl page request to HTTPS';

$l['off_import_mail'] = 'Turn off Import Installation emails';
$l['off_import_mail_exp'] = 'This will disable the email sent to endusers when an installation is imported.';

$l['off_checkhttps'] = 'Disable SSL certificate check on script install form';
$l['off_checkhttps_exp'] = 'This will disable the SSL certificate check for domains when a user selects to install a script on https protocol and will not see any error if SSL certificate is not installed';
$l['hide_sitepad'] = 'Hide SitePad Website Builder';
$l['hide_sitepad_exp'] = 'This will disable SitePad for the users who have not used SitePad but will leave SitePad enabled for users who have used SitePad';

// SitePad Settings language strings
$l['sm_saving_error'] = 'There were some errors while saving the SitePad settings'; 
$l['sm_brand'] = 'Brand Name';
$l['sm_brand_exp'] = 'A single word for the Brand Name. If empty the default value will be : SitePad';
$l['sm_sitename'] = 'Site Name';
$l['sm_sitename_exp'] = 'The name of the server or company using SitePad. It will appear in many pages of the SitePad Website Builder' ;
$l['sm_brand_editor'] = 'Editor Name';
$l['sm_brand_editor_exp'] = 'The name of the editor to be shown. If empty the default value will be : SitePad Editor';
$l['sm_logo_url'] = 'Logo URL';
$l['sm_logo_url_exp'] = 'It should be a 100 x 100 pixels transparent PNG image. If empty the SitePad logo will be shown';
$l['sm_brand_url'] = 'Website URL';
$l['sm_brand_url_exp'] = 'The URL to show the users for this Website Builder. If empty the default value will be : https://sitepad.com';
$l['host_sm'] = 'Custom Server Host';
$l['host_sm_exp'] = 'You can create a CNAME record to point to <a href="http://sitepad.com/wiki/Servers" target="_blank">our Servers</a>. Or you can simply use our servers hostname. If empty SitePad will use default server host for user';
$l['sm_brand_demos'] = 'Themes Demos URL';
$l['sm_brand_demos_exp'] = 'You can create a CNAME record to point to <b>demos.sitepad.com</b> <br />If empty SitePad will use default demos server for displaying themes demos';
$l['sm_no_demos'] = 'Disable Themes Demos';
$l['sm_no_demos_exp'] = 'Select this checkbox if you want to disable the themes demos for the user';
$l['sm_no_recent_themes'] = 'Disable Recent Themes';
$l['sm_no_recent_themes_exp'] = 'Select this checkbox if you want to disable the recently added themes section on the enduser Dashboard';
$l['sm_ftp_host'] = 'FTP Host';
$l['sm_ftp_host_exp'] = 'You can specify the FTP Host/IP that SitePad should use to connect while publishing files to your server. By default server IP will be used';
$l['sm_ftp_port'] = 'FTP Port';
$l['sm_ftp_port_exp'] = 'You can specify the FTP Port that SitePad should use to connect while publishing files to your server. By default 21 will be used';

// END SitePad Settings language strings

$l['err_no_dir'] = 'Backup directory doesn\'t exist on your server';

$l['quick_install_default'] = 'Set Quick Install as the default install option';
$l['quick_install_default_exp'] = 'If selected, the default install form will show minimal options (only required fields)';

$l['off_staging_mail'] = 'Turn off Staging Installation emails';
$l['off_staging_mail_exp'] = 'This will disable the email sent to endusers when staging an installation';
$l['max_bg_process'] = 'Maximum number of background processes';
$l['max_bg_process_exp'] = 'Set the maximum number of processes to be executed simultaneously in background. This will be used for tasks like Auto Upgrade. Default value : 10';
$l['au_extra_retry'] = 'Retry Auto Upgrade Script Plugins and Themes';
$l['au_extra_retry_exp'] = 'In case the auto upgrade for plugin or theme failed '.APP.' will retry after the given time. Default value : 48 hours';

$l['upgrade_backup_on'] = 'Set Backup checkbox pre-selected on Upgrade';
$l['upgrade_backup_on_exp'] = 'If selected, the Create Backup checkbox on the script upgrade page will be by default';

$l['off_staging'] = 'Turn Off Staging';
$l['off_staging_exp'] = 'This will turn off the Staging feature for endusers';
$l['err_openssl'] = 'Openssl extension is required to encrypt password';

$l['no_indir'] = 'Hide <b>In Directory</b> Field';
$l['no_indir_exp'] = 'If selected, then In Directory field will be hidden on installation form and the users will be able to install scripts only on domain root not in subdirectory.';

$l['max_staging'] = 'Maximum Staging installations per user limit';
$l['max_staging_exp'] = 'This will limit the maximum number of staging installations a user can create. Default : Unlimited';

$l['force_upgrade_plugins'] = 'Force upgrade for Plugins';
$l['force_upgrade_plugins_exp'] = 'If checked then the option to auto upgrade plugins for user\'s installation\'s will be enabled for endusers even if the user\'s didn\'t checked the option "auto upgrade plugins" in a particular edit installation\'s page.';

$l['force_upgrade_themes'] = 'Force upgrade for Themes';
$l['force_upgrade_themes_exp'] = 'If checked then the option to auto upgrade plugins for user\'s installation\'s will be enabled for endusers even if the user\'s didn\'t checked the option "auto upgrade themes" in a particular edit installation\'s page.';

$l['all_scripts'] = 'All Scripts';

$l['disable_csrf'] = 'Disable CSRF';
$l['disable_csrf_exp'] = 'This will disable the CSRF security check in Softaculous';

$l['cookie_name_invalid'] = 'The cookie name you submitted is invalid.';
$l['disable_manage_sets'] = 'Disable WordPress Manage Sets feature for endusers';
$l['disable_manage_sets_exp'] = 'This will disable the WordPress Plugin / Theme Sets feature for endusers';