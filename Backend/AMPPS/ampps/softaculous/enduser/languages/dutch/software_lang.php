<?php

//////////////////////////////////////////////////////////////
//===========================================================
// software_lang.php
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

$l['no_info_file'] = 'Het bestand info.xml is niet gevonden! Neem contact op met de server administrator.';//The INFO.XML file could not be found! Please report this to the Server Admin.
$l['incompatible'] = 'Dit script vereist een nieuwere versie van '.APP.'! Neem contact op met de server administrator.';//The software requires a higher version of Softaculous! Please report this to the Server Admin.
$l['no_install'] = 'Het bestand install.xml is niet gevonden! Neem contact op met de server administrator.';//The INSTALL.XML file could not be found! Please report this to the Server Admin.
$l['no_functions'] = 'Het bestand install functions is niet gevonden! Neem contact op met de server administrator.';//The INSTALL FUNCTIONS file could not be found! Please report this to the Server Admin.
$l['no_remove_functions'] = 'The REMOVE FUNCTIONS file could not be found! Please report this to the server administrator.';
$l['no_softdomain'] = 'U heeft geen domein gelecteerd waarop u het script wilt installeren.';//You did not choose the domain to install the software.
$l['wrong_softdomain'] = 'Het path naar het domein dat u heeft geselecteerd kon niet worden gevonden.';//The path of the domain you selected could not be found.
$l['softdirectory_exists'] = 'De folder die u heeft opgegeven bestaat al! Vul een andere folder naam in.';//The directory you typed already exists! Please type in another directory name.
$l['no_space'] = 'U beschikt niet over voldoende schijfruimte om dit script te installeren!';//You do not have sufficient space to install this software!
$l['no_softdb'] = 'De database is niet aangemaakt.';//The database was not posted.
$l['database_exists'] = 'De database bestaat reeds.';//The DataBase already exists
$l['databaseuser_exists'] = 'De database gebruiker bestaat reeds. Geef een andere database gebruikersnaam op';//The DataBase user already exists. Please type a different Database name
$l['db_name_long'] = 'De databasenaam mag niet langer zijn dan 7 tekens.';//The DataBase name cannot be greater than 7 letters
$l['db_limit_crossed'] = 'U heeft reeds het maximale aantal databases in gebruik.';//The max number of DB's you can create has been crossed
$l['no_field'] = 'U bent vergeten het veld <b> &soft-1;</b> in te vullen.';//The field <b>&soft-1;</b> is complusory and must be filled.
$l['error_adddb'] = 'De database kon niet worden aangemaakt.';//The database could not be created
$l['error_adduser'] = 'Er is een fout opgetreden bij het aanmaken van de database gebruiker.';//There was an error in adding a user to the new database
$l['no_package'] = 'De installatie bestanden konden niet worden gevonden!';//The installation package could not be found!
$l['no_decompress'] = 'Er zijn fouten opgetreden tijdens het uitpakken van de bestanden.';//There were some errors in decompressing the package files.
$l['mail_new_ins'] = 'De installatie van &soft-1; is voltooid. Hieronder kunt u de details van de installatie zien:';//A new installation of &soft-1; has been made. Following are the details of the installation : 
$l['mail_path'] = 'Path';//Path
$l['mail_url'] = 'URL';//URL
$l['mail_admin_url'] = 'Admin URL';
$l['mail_db'] = 'MySQL database';//MySQL Database
$l['mail_dbuser'] = 'MySQL DB gebruiker';//MySQL DB User
$l['mail_dbhost'] = 'MySQL DB hostnaam';//MySQL DB Host
$l['mail_dbpass'] = 'MySQL DB wachtwoord';//MySQL DB Password
$l['mail_time'] = 'Tijdstip van installatie';//Time of Installation
$l['mail_subject'] = 'Nieuwe installatie van &soft-1;';//New Installation of &soft-1;
$l['no_cron_min'] = 'U heeft geen minuten instelling voor de cron job opgegeven';
$l['no_cron_hour'] = 'U heeft geen uren instelling voor de cron job opgegeven';
$l['no_cron_day'] = 'U heeft geen dagen instelling voor de cron job opgegeven';
$l['no_cron_month'] = 'U heeft geen maand instelling voor de cron job opgegeven';
$l['no_cron_weekday'] = 'U heeft geen dag van de week instelling voor de cron job opgegeven';
$l['wrong_cron_min'] = 'Minuten instelling voor de cron is ongeldig. Waarden toegestaan 0-59 or a <b>*</b>';
$l['wrong_cron_hour'] = 'Uren instelling voor de cron is ongeldig. Waarden toegestaan 0-23 or a <b>*</b>';
$l['wrong_cron_day'] = 'Dag instelling voor de cron is ongeldig. Waarden toegestaan 1-31 or a <b>*</b>';
$l['wrong_cron_month'] = 'Maand instelling voor de cron is ongeldig. Waarden toegestaan 1-12 or a <b>*</b>';
$l['wrong_cron_weekday'] = 'Dag van de week instelling voor de cron is ongeldig. Waarden toegestaan 0-7 or a <b>*</b>';
$l['mail_cron'] = 'Cron job';
$l['no_datadir'] = 'U heeft geen data folder opgegeven';
$l['datadir_exists'] = 'De data folder die u heeft opgegeven bestaat al. Geef een andere foldernaam op.';
$l['no_decompress_data'] = 'Er zijn fouten opgetreden bij het uitpakken van het data bestand.';
$l['mail_datadir'] = 'Data folder';
$l['some_files_exist'] = 'De installatie kon niet worden voltooid omdat de volgende bestanden reeds in de folder aanwezig zijn : ';
$l['delete_files'] = 'Verwijder deze bestanden handmatig of kies een andere foldernaam.';
$l['overwrite_exist'] = '<b>of</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">check de box om alle bestanden in deze folder te overschrijven.</span></b>';
$l['mail_admin'] = 'Admin gebruikersnaam';
$l['mail_pass'] = 'Admin wachtwoord';
$l['checking_data'] = 'Bestanden controleren';
$l['unzipping_files'] = 'Bezig met het kopiëren  van bestanden';
$l['unzipping_datadir'] = 'Bestanden worden uitgepakt';
$l['prop_db'] = 'Database wordt aangemaakt';
$l['finishing_process'] = 'Bezig met het voltooien van de installatie';
$l['wait_note'] = '<b>Let op:</b> Het installatie proces duren. Sluit deze pagina niet totdat de proces bar 100% aangeeft!';
$l['no_hostname'] = 'Vul de database hostname in';
$l['no_dbusername'] = 'Vul de database gebruikersnaam in';
$l['no_dbuserpass'] = 'Vul het database wachtwoord in';
$l['softdirectory_invalid'] = 'U heeft een ongeldige folder opgegeven';
$l['softdatadir_invalid'] = 'De foldernaam die u heeft opgegeven is niet geldig';
$l['err_domain'] = 'Foutmelding: geen domein';
$l['err_domain_admin'] = 'Deze gebruiker heeft geen domeinen. Neem contact op met de systeem beheerder.';
$l['err_pass_strength'] = 'De sterkte van het wachtwoord moet groter zijn dan ';
$l['no_https'] = 'Er is geen geldig SSL certificaat gevonden';
$l['err_dbprefix'] = 'Ongeldige tabel prefix opgegeven. Geldige waardes zijn: a-z of A-Z of 0-9 of _';
$l['no_php_install'] = 'PHP is niet geactiveerd. Neem contact op met de systeem beheerder';
$l['no_mysql_install'] = 'MySQL is niet geactiveerd. Neem contact op met de systeem beheerder';
$l['no_domain_verify'] = 'Could not access your domain. Please make sure your domain is pointing to this server and there is no .htaccess file restricing access to your domain';
$l['auto_backup_not_allowed'] = 'The auto backup frequency you chose is invalid';
$l['invalid_script'] = 'Invalid Script ID';
$l['no_domain_found'] = 'No domain found. Please add a domain to install the script';
$l['not_php_script'] = 'This script is not in PHP';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['install'] = 'Installeer';//Install
$l['overview'] = 'Overzicht';//Overview
$l['features'] = 'Mogelijkheden';//Features
$l['demo'] = 'Demo\'s';//Demo
$l['ratings'] = 'Beoordelingen';//Ratings
$l['import'] = 'Importeer';
$l['software_ver'] = 'Versie';//Version
$l['space_req'] = 'Benodigde opslagruimte';//Space Required
$l['available_space'] = 'Beschikbare opslagruimte';//Available Space
$l['req_space'] = 'Vereiste opslagruimte';//Required Space
$l['mb'] = 'MB';//MB
$l['software_support'] = 'Script ondersteuning';//Software Support
$l['support_link'] = 'Bezoek de script support website';//Visit Support Site
$l['support_note'] = 'Opmerking: Softaculous is alleen een script installer en biedt geen ondersteuning voor de diverse scripts.';//Note: Softaculous does not provide support for any software.
$l['setup'] = 'Installeer script';//Software Setup
$l['choose_domain'] = 'Domein';//Choose Domain
$l['choose_domain_exp'] = 'Via deze optie kunt u aangeven op welk domein het script geïnstalleerd moet worden.';//Please choose the domain to install the software.
$l['choose_url'] = 'Choose Installation URL';
$l['choose_url_exp'] = 'Please choose the URL to install the software';
$l['in_directory'] = 'Folder';//In Directory
$l['in_directory_exp'] = 'De folder is relatief ten opzichte van het domein en <b> mag geen bestaande folder zijn</b>! <br />Indien u bijvoorbeeld een script wilt laten zien via <br />http://domeinnaam.nl/folder/ vul dan  <b> folder </b> in. <br />Indien u het script wilt laten zien via <br />http://domeinnaam.nl/ laat dit veld dan leeg.';//The directory is relative to your domain and <b>should not exist</b>. e.g. To install at http://mydomain/dir/ just type <b>dir</b>. To install only in http://mydomain/ leave this empty.
$l['database_name'] = 'Database naam';//Database Name
$l['database_name_exp'] = 'Vul de naam van de database in die gebruikt zal worden voor de installatie van het script. <br />Standaard wordt er een random database naam ingevuld en is het niet nodig deze naam te wijzigen.';//Type the name of the database to be created for the installation
$l['softcopy_note'] = '<b> Let op </b>: Dit script vereist dat de installatie wordt voltooid via een aparte webinstaller. <br />U kunt de installatie voltooien via de url die zal verschijnen nadat de bestanden van het script <br />zijn geupload naar uw account.';//<b>NOTE</b>: This software requires to install using its Own Installation Utility. So please visit the URL that will be shown once the files have been copied, to complete the Installation Process.
$l['softsubmit'] = 'Installeer';//Install
$l['congrats'] = 'Het script is voor u geïnstalleerd ';//Congratulations, the software was installed successfully
$l['succesful'] = 'met succes geïnstalleerd op';//has been successfully installed at
$l['admin_url'] = 'URL administrator';
$l['setup_continue'] = 'U kunt de installatie voltooien via de volgende URL';//However, the setup will be completed by the Software itself. So please visit the following URL
$l['enjoy'] = 'We hopen dat u de tevreden bent over de installatie procedure.';//We hope the installation process was easy.
$l['install_notes'] = 'Het onderstaande is belangrijk: ';
$l['please_note'] = '<b> Let op </b>: '.APP.' is alleen een installer voor diverse scripts. <br />Bezoek de webiste van de fabrikant van het script indien u ondersteuning nodig heeft voor een script!';//<b>NOTE</b>: Softaculous is just an Auto Installer and does not provide any support for the software. Please visit the Softwares Site for any kind of support!
$l['regards'] = 'Groeten';//Regards
$l['softinstaller'] = APP.' auto installer';//Softaculous Auto Installer
$l['return'] = 'Terug naar het overzicht';//Return to Overview
$l['current_ins'] = 'Huidige installaties';//Current Installations
$l['link'] = 'Link';//Link
$l['ins_time'] = 'Tijd installatie';//Installation Time
$l['version'] = 'Versie';//Version
$l['upd_to'] = 'Update naar versie';//Upgrade to Version
$l['remove'] = 'Verwijderen';//Remove
$l['no_info'] = 'Geen info';//No Info
$l['randpass'] = 'Genereer een random wachtwoord';
$l['ratesoft'] = 'Beoordeel dit script';
$l['reviews'] = 'Reviews';
$l['reviewsoft'] = 'Naar beoordelingen';
$l['readreviews'] = 'Bekijk beoordelingen';
$l['reviews_exp'] = 'Bekijk de beoordelingen die geschreven zijn door andere gebruikers.<br />';
$l['cron_job'] = 'Cron job';
$l['cron_job_exp'] = 'Dit script heeft een cron job nodig om te kunnen werken. Hier kunt u de instellingen voor de cron job opgeven. Heeft u geen ervaring met cron jobs wijzig deze waarden dan niet!';
$l['cron_min'] = 'Min';
$l['cron_hour'] = 'Uur';
$l['cron_day'] = 'Dag';
$l['cron_month'] = 'Maand';
$l['cron_weekday'] = 'Dag van de week';
$l['datadir'] = 'Data folder';
$l['datadir_exp'] = 'Dit script heeft een data folder nodig die niet bereikbaar is via het web. Deze folder zal worden aangemaakt in uw home directory. Als u bijvoorbeeld de datafolder <b>datadir</b> noemt, zal de volgende folder worden aangemaakt - /home/username/<b>datadir</b>';
$l['db_alpha_num'] = 'Alleen letters en cijfer tekens zijn toegestaan in een database naam.';
$l['overwrite'] = 'Bestanden overschrijven';
$l['ins_emailto'] = 'E-mail installatie gegevens naar';
$l['choose_protocol'] = 'Protocol';
$l['choose_protocol_exp'] = 'Indien u beschikt over een SSL certificaat voor het geselecteerde domein, kies dan voor het HTTPS protocol.';
$l['clone'] = 'Clone';
$l['backup'] = 'Backup';
$l['options'] = 'Opties';
$l['admin'] = 'Admin';
$l['notify_ver'] = 'Stuur een bericht wanneer er voor '.$globals['sn'].' een nieuwere software versie beschikbaar is';
$l['notifyversion'] = 'Hartelijk dank voor de informatie. We zullen hier zo spoedig mogelijk naar kijken.';
$l['del_insid'] = 'Weet u zeker dat u deze actie wilt uitvoeren ? Deze actie kan niet ongedaan gemaakt worden.';
$l['rem_inst_id'] = 'Installatie wordt verwijderd - ';
$l['no_sel_inst'] = 'U heeft geen installatie(s) geselecteerd die u wilt verwijderen.';
$l['inst_remvd'] = 'De geselecteerde installaties zijn verwijderd. Deze pagina zal opnieuw worden geopend!';
$l['remove'] = 'Verwijder';
$l['go'] = 'Ga';
$l['screenshots'] = 'screenshots';
$l['downloading'] = 'Bestanden worden gedownload';
$l['installing'] = 'Script word geïnstalleerd ';
$l['editdetail'] = 'Wijzig details';
$l['publish'] = 'Publiceer';
$l['hostname'] = 'Database hostname';
$l['hostname_exp'] = 'De MySQL hostname (in de meeste gevallen kunt u <b>localhost</b> opgeven)';
$l['dbusername'] = 'Database gebruikersnaam';
$l['dbusername_exp'] = 'de MySQL gebruikersnaam';
$l['dbuserpass'] = 'Database wachtwoord';
$l['dbuserpass_exp'] = 'Het wachtwoord van de MySQL gebruiker';
$l['database_name_exp_aefer'] = 'Vul de naam van de database in die moet worden gebruikt voor deze installatie';
$l['sel_version'] = 'Selecteer versie';
$l['choose_version_exp'] = 'Via deze optie kunt u de versie selecteren van het script dat u wilt installeren.';
$l['choose_version'] = 'Script versie';
$l['select'] = 'Selecteer';
$l['release_date'] = 'Release datum';
$l['adv_option'] = 'Extra opties';
$l['disable_notify_update'] = 'Disable update notificatie emails';
$l['exp_disable_notify_update'] = 'Check de box om geen e-mails te ontvangen over updates voor dit script.';
$l['prog_installing'] = 'Bezig met installeren '; // Dont remove trailing space
$l['prog_install_complete'] = 'Installatie voltooid.';
$l['eu_auto_upgrade'] = 'Automatisch updaten';
$l['exp_eu_auto_upgrade'] = 'Select the automatic upgrade preference for this installation when a new version is available';
$l['auto_upgrade_plugins'] = '&soft-1; plugins automatisch updaten';
$l['exp_auto_upgrade_plugins'] = 'Via deze optie kunt u aangeven dat de plugins voor dit script automatisch moeten worden geupdate wanneer een update voor het script beschikbaar is.';
$l['auto_upgrade_themes'] = '&soft-1; template autmatisch updaten';
$l['exp_auto_upgrade_themes'] = 'Via deze optie kunt u aangeven dat het template dat dit script gebruikt automatisch moet worden geupdate wanneer een update voor het script beschikbaar is.';
$l['auto_upgrade_enabled'] = 'Automatisch updaten geactiveerd';
$l['bad'] = 'Slecht';
$l['good'] = 'Goed';
$l['strong'] = 'Sterk';
$l['short'] = 'Kort';
$l['strength_indicator'] = 'Wachtwoord sterkte';
$l['auto_backup'] = 'Automatische backups';
$l['exp_auto_backup'] = APP.' zal automatisch backups maken op de door u opgegeven tijdstippen.';
$l['auto_backup_rotation'] = 'Backup rotatie';
$l['exp_auto_backup_rotation'] = 'Wanneer een backup rotatie is bereikt al '.APP.' de oudste backup vervangen door een nieuwe backup. De backup bestanden maken gebruik van de opslag ruimte die beschikbaar is in uw hosting account.';
$l['no_backup'] = 'Geen backups activeren';
$l['daily'] = 'Elke dag';
$l['weekly'] = 'Een keer per week';
$l['monthly'] = 'Een keer per maand';
$l['unlimited'] = 'Geen limiet';
$l['changelog'] = 'Changelog';
$l['act_upgrade'] = 'Recente updates';
$l['act_clone'] = 'Recent gecloned';
$l['act_backup'] = 'Recente backups';
$l['act_install'] = 'Nieuwe installaties';
$l['act_edit'] = 'Recent gewijzigd';
$l['act_import'] = 'Recent geimporteerd';
$l['act_restore'] = 'Recently hersteld';
$l['ampps_download'] = 'You can develop <b>&soft-1;</b> on your <b>desktop</b> using our Free developer tool Softaculous AMPPS. Click <a href="http://www.ampps.com/download?give=latest" target="_blank"><b>here</b></a> to download <a href="http://www.ampps.com/download?give=latest" target="_blank"><img src="https://images.softaculous.com/ampps.gif" height="25" /></a>';

$l['install_tweet_sub'] = 'Laat uw vrienden weten dat u een nieuwe website heeft!';

$l['choose_theme'] = 'Kies template';
$l['clear_theme'] = 'Template keuze ongedaan maken';
$l['installing_theme'] = 'Template wordt geïnstalleerd';
$l['cant_download_theme'] = 'Fout bij downloaden template bestanden';
$l['no_theme_package'] = 'De installatie bestanden van het template kunnen niet gevonden worden!';
$l['unzipping_theme_files'] = 'De template bestanden worden geïnstalleerd';
$l['use_this_theme'] = 'Selecteer';
$l['err_auto_backup_limit'] = 'Het maximale aantal backups kan niet groter zijn dan <b>&soft-1;</b>';
$l['select_domain'] = 'Selecteer domeinnaam';
$l['refresh'] = 'Refresh';
$l['purchase'] = 'Koop';
$l['your_purchased'] = 'Gekochte ';//trailing space is required
$l['your_purchased_times'] = ' tijdstip';
$l['err_theme_not_bought'] = 'Dit template kan niet geinstalleerd worden omdat dit geen gratis template is en u dit template (nog) niet gekocht heeft!';
$l['err_theme_reached_limit'] = 'U moet dit template kopen voordat u het template kunt installeren.';
$l['payment_heading'] = 'Koop templates';
$l['payment_redirect'] = 'U zult worden doorverwezen naar de website waar u dit template kunt aanschaffen ';//trailing space is required
$l['close'] = 'Sluiten';
$l['free'] = 'Gratis';
$l['select'] = 'Selecteer';
$l['theme_is_optional'] = 'Het kiezen van een template is optioneel. <br />Wanneer u geen template selecteert zal het standaard template worden geïnstalleerd.';
$l['with_selected'] = 'Selecteer optie';
$l['not_in_free'] = '<b>&soft-1;</b> cannot be installed in the Free version of '.APP.'!';
$l['notify_admin'] = 'Please notify your Server Admin to purchase the premium version of '.APP.'!';
$l['related_scripts'] = 'Related Scripts';

$l['date_added'] = 'Date Added';
$l['downloaded'] = 'Downloaded';

$l['soft_ins_exists'] = 'An installation already exists at &soft-1; as per our records. To re-install the application please uninstall the existing installation!';
$l['install_now'] = 'Installeer nu';
$l['my_apps'] = 'Mijn apps';

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
$l['manage_sets'] = 'Beheer plug-ins / themasets';
$l['manage_plugin_sets'] = 'Manage Plugin Sets';
$l['manage_theme_sets'] = 'Manage Theme Sets';