<?php

//////////////////////////////////////////////////////////////
//===========================================================
// remove_lang.php
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

$l['no_ins'] = 'Geen installatie opgegeven';//No installation was submitted
$l['wrong_ins_title'] = 'Foutief installatie ID';//Wrong Installation ID
$l['wrong_ins'] = 'Het door u opgegeven installatie ID bestaat niet';//The installation ID you submitted does not exist
$l['cant_remove_dir'] = 'De door u opgegeven folder kan niet worden verwijderd omdat het de home directory is. Deselecteer de <b> verwijder folder </b> optie om door te gaan zonder het verwijderen van de folder.';//The Directory cannot be removed as it is the HOME Directory. Please uncheck the <b>Remove Directory</b> option to continue without removing the directory.
$l['cant_remove_wwwdir'] = 'De door u web directory kan niet worden verwijderd omdat dit de home directory is. Uncheck de box <b>Verwijder web directory</b> om door te kunnen gaan.';
$l['mail_rem_ins'] = 'De installatie van &soft-1; is verwijderd. Gegevens van de installatie:';//A installation of &soft-1; has been removed. Following were the details of the installation : 
$l['mail_path'] = 'Path';//Path
$l['mail_url'] = 'URL';//URL
$l['mail_db'] = 'MySQL database';//MySQL Database
$l['mail_dbuser'] = 'MySQL datbase gebruiker';//MySQL DB User
$l['mail_dbhost'] = 'MySQL database hostnaam';//MySQL DB Host
$l['mail_dbpass'] = 'MySQL database wachtwoord';//MySQL DB Password
$l['mail_time'] = 'Tijdstip van installatie';//Time of Installation
$l['mail_rem_time'] = 'Tijdstip van verwijdering';//Time of Removal
$l['mail_subject'] = 'De installatie van &soft-1; is verwijderd.';//Removed Installation of &soft-1;
$l['mail_cron_command'] = 'CRON job';
$l['mail_datadir'] = 'Data folder';
$l['mail_wwwdir'] = 'Web directory';
$l['checking_data'] = 'Bezig met controleren van de gegevens';
$l['rem_db'] = 'Database wordt verwijderd';
$l['rem_dir'] = 'Directory wordt verwijderd';
$l['rem_datadir'] = 'Data directory wordt verwijderd';
$l['rem_cron'] = 'Cron job wordt verwijderd';
$l['finishing_process'] = 'Installatie succesvol verwijderd';
$l['wait_note'] = '<b>Let op:</b> Deze actie kan 3-4 minuten duren. Sluit deze pagina niet totdat de proces bar 100% aangeeft';


//Theme Strings
$l['<title>'] = APP.' - Verwijder installatie';//Softaculous - Remove
$l['info'] = 'Info';//Info
$l['ins_softname'] = 'Script';//Software
$l['ins_num'] = 'Installatie nummer';//Installation Number
$l['ins_ver'] = 'Versie';//Version
$l['ins_time'] = 'Tijdstip van installatie';//Installation Time
$l['ins_path'] = 'Path';//Path
$l['ins_url'] = 'URL';//URL
$l['ins_db'] = 'Database naam';//Database Name
$l['ins_dbuser'] = 'Database gebruiker';//Database User
$l['ins_dbpass'] = 'Database wachtwoord';
$l['ins_dbhost'] = 'Database hostnaam';//Database Host
$l['remove_ins'] = 'Verwijder een geïnstalleerd script';//Remove a Installation
$l['remove_dir'] = 'Verwijder folder';//Remove Directory
$l['remove_dir_exp'] = 'Via deze optie kunt u aangeven dat de hele folder verwijderd moet worden.';//If you check this the entire folder will be deleted
$l['remove_db'] = 'Verwijder database';//Remove Database
$l['remove_db_exp'] = 'Via deze optie kunt u aangeven dat de database verwijderd moet worden.';//If checked the database will be deleted
$l['remove_dbuser'] = 'Verwijder database gebruiker';//Remove Database User
$l['remove_dbuser_exp'] = 'Via deze optie kunt u aangeven dat de database gebruiker verwijderd moet worden.';//If checked the database user will also be deleted
$l['remove_conf'] = 'Deze actie kan niet meer ongedaan gemaakt worden. \n Weet u zeker dat u dit script wilt verwijderen?';
$l['uninstalled'] = 'De installatie is succesvol verwijderd';//The installation was removed successfully
$l['removeins'] = 'Verwijder installatie';//Remove Installation
$l['ins_cron_command'] = 'Cron job';
$l['remove_datadir'] = 'Verwijder data folder';
$l['remove_datadir_exp'] = 'Via deze optie kunt u aangeven dat de data folder moet worden verwijderd.';
$l['ins_datadir'] = 'Data folder';
$l['remove_wwwdir'] = 'Verwijder web directory';
$l['remove_wwwdir_exp'] = 'Via deze optie kunt u aangeven dat de web directory moet worden verwijderd.';
$l['ins_wwwdir'] = 'Web directory';
$l['return'] = 'Terug naar het overzicht';
$l['prog_removing'] = 'Bezig met verwijderen ';// Dont remove the trailing space
$l['prog_remove_complete'] = 'Installatie verwijderd.';
$l['disabled_script_info'] = 'No information available as this script has been disabled.';

$l['wpc_return'] = 'Return to Installations';