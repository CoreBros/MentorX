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
$l['checking_data'] = 'Bezig met controlleren van gegevens';
$l['unzipping_files'] = 'De bestanden worden gekopieerd';
$l['unzipping_datadir'] = 'De bestanden worden uitgepakt';
$l['prop_db'] = 'De database wordt geupdate';
$l['finishing_process'] = 'Bezig met het voltooien van de update';
$l['wait_note'] = '<b>Let op:</b> Deze actie kan 3-4 minuten duren. Sluit deze pagina niet totdat de proces bar 100% aangeeft!';
$l['cver_greater'] = 'De huidige versie is nieuwer dan de versie waarnaar u wilt updaten. Wellicht heeft u het script handmatig geupdate. Indien u het script niet handmatig heeft geupdate, check dan deze box';
$l['force_upgrade'] = 'Force update';
$l['backup_finish'] = 'Backup proces voltooid';
$l['backup_fail_proceed'] = 'Er zijn fouten opgetreden in het backup proces. Wilt u verder gaan met de update ?';
$l['backing_up'] = 'De backup wordt gemaakt';
$l['no_space'] = 'You do not have sufficient space to upgrade this installation!';
$l['invalid_insid'] = 'Invalid Installation ID';
$l['invalid_script'] = 'Invalid Script ID';
$l['no_upgrade_support'] = 'Upgrade is not supported for this script';

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
$l['alreadyupdated'] = 'De huidige versie lijkt versie <b>&soft-1;</b> te zijn en niet <b>&soft-2;</b>. <br />Klik hier om de '.APP.' records te updaten.';
$l['no_update_required'] = 'De huidige versie is de laatste versie. Update niet nodig.';
$l['auto_backup'] = 'Wilt u eerste een backup maken van de bestanden van uw website ?';
$l['select_version'] = 'Selecteer de versie waarnaar u wilt updaten';
$l['upgrading'] = 'Updating ...';
$l['setup_partial'] = 'Er is nog één stap te gaan om het update proces te voltooien';
$l['finish_update'] = 'Klik op de onderstaande link om het update proces te voltooien.';
$l['finish_up_sucess'] = 'Nadat het update process is voltooid, kunt u de &soft-1; installatie via deze link openen';
$l['upgrading_to'] = 'Het script zal worden geupdate naar: ';
$l['version'] = 'Versie';
$l['create_backup'] = 'Backup maken';
$l['create_backup_exp'] = 'Maak een backup voordat de update wordt uitgevoerd';
$l['prog_upgrading'] = 'Udating ';// Dont remove the trailing space
$l['prog_upgrade_complete'] = 'Update voltooid.';

$l['upgrade_tweet_sub'] = 'Informeer andere over uw website';

$l['not_in_free'] = '<b>&soft-1;</b> cannot be upgraded in the Free version of '.APP.'!';
$l['notify_admin'] = 'Please notify your Server Admin to purchase the premium version of '.APP.'!';

$l['backup_type'] = 'Backup Options';
$l['backup_type_exp'] = 'Choose full backup or advanced options';
$l['standard_backup'] = 'Full Backup (Default)';
$l['advanced_backup'] = 'Advanced Options';

$l['backup_dir'] = 'Backup Directory';
$l['backup_db'] = 'Backup Database';
$l['backup_wwwdir'] = 'Backup Web Directory';
$l['backup_datadir'] = 'Backup Data Directory';
$l['no_dir'] = 'The installation files are missing hence cannot proceed with the upgrade';
$l['wpc_return'] = 'Return to Installations';