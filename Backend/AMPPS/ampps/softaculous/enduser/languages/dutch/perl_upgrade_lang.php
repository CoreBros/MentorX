<?php

//////////////////////////////////////////////////////////////
//===========================================================
// upgrade_lang.php
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
$l['no_upgrade'] = 'Het bestand upgrade.xml is niet gevonden! Neem contact op met de server administrator.';//The UPGRADE.XML file could not be found! Please report this to the Server Admin.
$l['no_functions'] = 'Het bestand upgrade functies is niet gevonden gevonden! Neem contact op met de server administrator.';//The UPGRADE FUNCTIONS file could not be found! Please report this to the Server Admin.
$l['no_field'] = 'Het veld <b> &soft-1;</b> is verplicht en moet worden gevuld.';//The field <b>&soft-1;</b> is complusory and must be filled.
$l['no_package'] = 'De bestanden voor de update zijn niet gevonden!';//The upgradation package could not be found!
$l['no_decompress'] = 'Er zijn fouten opgetreden tijdens het uitpakken van de bestanden.';//There were some errors in decompressing the package files.
$l['no_decompress_www'] = 'Er zijn fouten opgetreden bij het uitpakken van de web bestanden.';
$l['no_config_perl_path'] = 'Er zijn fouten opgetreden bij het configureren van de CGI bestanden.';
$l['checking_data'] = 'Bezig met controlleren van gegevens';
$l['unzipping_files'] = 'De bestanden worden gekopieerd';
$l['unzipping_datadir'] = 'De bestanden worden uitgepakt';
$l['prop_db'] = 'De database wordt geupdate';
$l['finishing_process'] = 'Bezig met het voltooien van de update';
$l['wait_note'] = '<b>Let op:</b> Deze actie kan 3-4 minuten duren. Sluit deze pagina niet totdat de proces bar 100% aangeeft!';
$l['no_space'] = 'You do not have sufficient space to upgrade this installation!';
$l['invalid_insid'] = 'Invalid Installation ID';
$l['invalid_script'] = 'Invalid Script ID';
$l['not_perl_script'] = 'This script is not in PERL';
$l['no_perl_upgrade'] = 'Upgrade is not supported for this script';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['upgrade'] = 'Software-update';//Software Upgrade
$l['softins_url'] = 'URL';//URL
$l['softins_path'] = 'Path';//Path
$l['softcopy_note'] = '<b> Let op </b>: Dit script vereist dat de update wordt voltooid via een aparte webinstaller. U moet de update voltooien via de URL die zal verschijnen nadat de nieuwe bestanden van het script zijn geupload naar uw account.';//<b>NOTE</b>: This software requires to install using its Own Upgradation Utility. So please visit the URL that will be shown once the files have been copied, to complete the Upgradation Process.
$l['softsubmit'] = 'Update';//Upgrade
$l['congrats'] = 'Het script is succesvol geupdate';//Congratulations, the software was upgraded successfully
$l['succesful'] = 'is geupdate naar versie';//has been successfully upgraded at
$l['admin_url'] = 'Admin URL';
$l['setup_continue'] = 'U kunt de update voltooien via de volgende URL';//However, the upgrade will be completed by the Software itself. So please visit the following URL
$l['enjoy'] = 'We hopen dat u de tevreden bent over de update procedure.';//We hope the upgradation process was easy.
$l['upgrade_notes'] = 'Het onderstaande is belangrijk: ';
$l['please_note'] = '<b> Let op </b>: '.APP.' is alleen een installer voor diverse scripts. Bezoek de webiste van de fabrikant van het script indien u ondersteuning nodig heeft voor een script!';//<b>NOTE</b>: Softaculous is just an Auto Installer and does not provide any support for the software. Please visit the Softwares Site for any kind of support!
$l['regards'] = 'Groeten';//Regards
$l['softinstaller'] = APP.' installer';//Softaculous Auto Installer
$l['return'] = 'Terug naar het overzicht';//Return to Overview
$l['note_backup'] = 'Wij adviseren u om een <a href="'.$globals['index'].'act=backup&insid=&soft-1;">backup</a> te maken van de huidige website voordat u deze update.';
$l['create_backup'] = 'Backup maken';
$l['create_backup_exp'] = 'Maak een backup voor de update';
$l['prog_upgrading'] = 'Udating ';// Dont remove the trailing space
$l['prog_upgrade_complete'] = 'Update voltooid.';

$l['upgrade_tweet_sub'] = 'Tell your friends';
$l['not_in_free'] = '<b>&soft-1;</b> cannot be upgraded in the Free version of '.APP.'!';
$l['notify_admin'] = 'Please notify your Server Admin to purchase the premium version of '.APP.'!';

