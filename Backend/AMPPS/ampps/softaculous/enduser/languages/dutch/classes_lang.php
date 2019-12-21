<?php

//////////////////////////////////////////////////////////////
//===========================================================
// js_lang.php
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

$l['no_info_file'] = 'Geen waarde opgegeven voor ID';
$l['incompatible'] = 'Dit script vereist een nieuwere versie van '.APP.'! Neem contact op met de server administrator.';//The software requires a higher version of Softaculous! Please report this to the Server Admin.
$l['no_install'] = 'Het bestand install.xml is niet gevonden! Neem contact op met de server administrator.';//The INSTALL.XML file could not be found! Please report this to the Server Admin.
$l['no_functions'] = 'Het bestand install functions is niet gevonden! Neem contact op met de server administrator.';//The INSTALL FUNCTIONS file could not be found! Please report this to the Server Admin.
$l['no_softdomain'] = 'U heeft geen domein gelecteerd waarop u het script wilt installeren.';//You did not choose the domain to install the software.
$l['wrong_softdomain'] = 'Het path naar het domein dat u heeft geselecteerd kon niet worden gevonden.';//The path of the domain you selected could not be found.
$l['no_space'] = 'U beschikt niet over voldoende schijfruimte om dit script te installeren!';//You do not have sufficient space to install this software!
$l['no_field'] = 'U bent vergeten het veld <b> &soft-1;</b> in te vullen.';//The field <b>&soft-1;</b> is complusory and must be filled.
$l['no_package'] = 'De installatie bestanden konden niet worden gevonden!';//The installation package could not be found!
$l['no_decompress'] = 'Er zijn fouten opgetreden tijdens het uitpakken van de bestanden.';//There were some errors in decompressing the package files.
$l['mail_new_ins'] = 'De installatie van &soft-1; is voltooid. Hieronder kunt u de details van de installatie zien:';//A new installation of &soft-1; has been made. Following are the details of the installation : 
$l['mail_path'] = 'Path';//Path
$l['mail_url'] = 'URL';//URL
$l['mail_time'] = 'Tijdstip van installatie';//Time of Installation
$l['mail_subject'] = 'Nieuwe installatie van &soft-1;';//New Installation of &soft-1;
$l['some_files_exist'] = 'De installatie kon niet worden voltooid omdat de volgende bestanden reeds in de folder aanwezig zijn : ';
$l['delete_files'] = 'Verwijder deze bestanden handmatig of kies een andere foldernaam.';
$l['checking_data'] = 'Bestanden controleren';
$l['unzipping_files'] = 'Bezig met het kopiëren  van bestanden';
$l['unzipping_datadir'] = 'Bestanden worden uitgepakt';
$l['prop_db'] = 'Database wordt aangemaakt';
$l['finishing_process'] = 'Bezig met het voltooien van de installatie';
$l['wait_note'] = '<b>Let op:</b> Deze actie kan 3-4 minuten duren. Sluit deze pagina niet totdat de proces bar 100% aangeeft!';
$l['cant_download'] = 'Het zip bestand kan niet gedownload worden.';
$l['softdirectory_invalid'] = 'U heeft een ongeldige directory opgegeven';
$l['softdirectory_exists'] = 'De door u opgegeven directory bestaat reeds';
$l['ins_emailto'] = 'E-mail installatie details naar';
$l['disable_classes'] = 'PHP Classes are disabled by admin or you are using '.APP.' Free version';
$l['invalid_class_id'] = 'Invalid Class ID';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['install'] = 'Installeer';//Install
$l['overview'] = 'Overzicht';//Overview
$l['features'] = 'Mogelijkheden';//Features
$l['demo'] = 'Demo\'s';//Demo
$l['ratings'] = 'Beoordelingen';//Ratings
$l['file'] = 'Bestanden';
$l['import'] = 'Importeer';
$l['software_ver'] = 'Versie';//Version
$l['space_req'] = 'Benodigde opslagruimte';//Space Required
$l['available_space'] = 'Beschikbare opslagruimte';//Available Space
$l['req_space'] = 'Vereiste opslagruimte';//Required Space
$l['mb'] = 'MB';//MB
$l['software_support'] = 'Script ondersteuning';//Software Support
$l['support_link'] = 'Bezoek de script support website';//Visit Support Site
$l['support_note'] = 'Opmerking: Softaculous is alleen een script installer en <br />biedt geen ondersteuning voor de diverse scripts.';//Note: Softaculous does not provide support for any software.
$l['setup'] = 'Script setup';//Software Setup
$l['choose_domain'] = 'Kies domein';//Choose Domain
$l['choose_domain_exp'] = 'Kies het domein waar het script geïnstalleerd moet worden.';//Please choose the domain to install the software.
$l['in_directory'] = 'Folder';//In Directory
$l['in_directory_exp'] = 'De folder is relatief ten opzichte van het domein en <b> mag geen bestaande folder zijn</b>! <br />Indien u bijvoorbeeld een script wilt laten zien via http://domeinnaam.nl/folder/ vul dan  <b> folder </b> in. <br />Indien u het script wilt laten zien via http://domeinnaam.nl/ laat dit veld dan leeg.';//The directory is relative to your domain and <b>should not exist</b>. e.g. To install at http://mydomain/dir/ just type <b>dir</b>. To install only in http://mydomain/ leave this empty.
$l['aef_in_directory_exp'] = 'De folder is relatief ten opzichte van het domein en <b> mag geen bestaande folder zijn</b>! <br />Indien u bijvoorbeeld een script wilt laten zien via http://domeinnaam.nl/folder/ vul dan  <b> folder </b> in. <br />Indien u het script wilt laten zien via http://domeinnaam.nl/ laat dit veld dan leeg.';
$l['softsubmit'] = 'Installeer';
$l['congrats'] = 'Het installatie proces is cussesvol verlopen';
$l['succesful'] = 'is succesvol geinstalleer op';
$l['enjoy'] = 'We hopen dat u de tevreden bent over de installatie procedure.';
$l['install_notes'] = 'Het onderstaande is belangrijk: ';
$l['please_note'] = '<b> Let op </b>: '.APP.' is alleen een installer voor diverse scripts. Bezoek de webiste van de fabrikant van het script indien u ondersteuning nodig heeft voor een script!';
$l['regards'] = 'Vriendelijke groet';
$l['softinstaller'] = APP.' Auto Installer';
$l['return'] = 'Terug naar het overicht';
$l['current_ins'] = 'Huidige installaties';
$l['link'] = 'Link';
$l['ins_time'] = 'Installatie tijd';
$l['version'] = 'Versie';
$l['upd_to'] = 'Update naar versie';
$l['remove'] = 'Verwijder';
$l['no_info'] = 'No informatie';
$l['ratesoft'] = 'Beoordeel dit script';
$l['reviews'] = 'Reviews';
$l['reviewsoft'] = 'Review toevoegen';
$l['readreviews'] = 'Naar beoordelingen';
$l['reviews_exp'] = 'Bekijk de beoordelingen die geschreven zijn door andere gebruikers.<br />';
$l['ins_type'] = 'Installatie type';
$l['ins_type_exp'] = '<b>Origineel script</b> - Script zoals weergegeven op de demo site. <br /> <b>Alleen de library bestanden</b> - De javascript library files.';
$l['ori_pack'] = 'Origineel script';
$l['just_lib'] = 'Library files';
$l['overwrite_exist'] = '<b>of</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">check de box om alle bestanden te overschrijven</span></b>';
$l['overwrite'] = 'Bestanden overschrijven';
$l['choose_protocol'] = 'Kies protocol';
$l['choose_protocol_exp'] = 'Indien u beschikt over een SSL certificaat voor dit domein, kies dan het HTTPS protocol.';
$l['installing'] = 'Het script wordt geinstalleerd';
$l['files'] = 'Files en folder';
$l['modified_time'] = 'Datum laatste wijziging';
$l['size'] = 'Grootte';
$l['classes_ins_error'] = 'Er zijn fouten opgetreden tijdens de installatie.';
$l['del_insid'] = 'Weet u zeker dat u de installie wilt verwijderen ? Deze actie kan niet ongedaan gemaakt worden.';
$l['rem_inst_id'] = 'Bezig met verwijderen - ';
$l['no_sel_inst'] = 'U heeft geen installatie opgegeven die verwijderd moet worden.';
$l['inst_remvd'] = 'De geselecteerde installatie is verwijderd !';
$l['downloading'] = 'Bezig met downloaden van bestanden';
$l['installing'] = 'Bezig met installatie';
$l['go'] = 'Ga';
$l['download_zip'] = 'Alle bestanden downloaden ';
$l['software_category'] = 'Categorie';
$l['adv_option'] = 'Geavanceerde opties';
$l['disable_notify_update'] = 'Disable update notificatie emails';
$l['exp_disable_notify_update'] = 'Check de box om geen e-mails te ontvangen over updates van dit script.';
$l['prog_installing'] = 'Bezig met installeren '; // Dont remove trailing space
$l['prog_install_complete'] = 'Installatie voltooid.';

$l['install_tweet_sub'] = 'Tell your friends';
$l['select_domain'] = 'Selecteer domein';
$l['with_selected'] = 'Selecteer optie';
$l['download'] = 'Download';

