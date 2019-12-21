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

$l['no_info_file'] = 'Die INFO.XML Datei konnte nicht gefunden werden! Bitte melden Sie dies dem Server Administrator.';
$l['incompatible'] = 'Die Software erfordert eine höhere Version von  '.APP.'! Bitte melden Sie dies dem Server Administrator.';
$l['no_install'] = 'Die INSTALL.XML Datei konnte nicht gefunden werden! Bitte melden Sie dies dem Server Administrator.';
$l['no_functions'] = 'Die INSTALL FUNCTIONS Datei konnte nicht gefunden werden! Bitte melden Sie dies dem Server Administrator.';
$l['no_softdomain'] = 'Sie haben keine Domain ausgewählt auf der die Software installiert werden soll.';
$l['wrong_softdomain'] = 'Der Pfad der Domain die Sie ausgewählt habe konnte nicht gefunden werden.';
$l['no_space'] = 'Es ist nicht genügend Speicherplatz vorhanden, um diese Software zu installieren!';
$l['no_field'] = 'Das Feld <b>&soft-1;</b> muss ausgefüllt werden.';
$l['no_package'] = 'Das Installationspaket konnte nicht gefunden werden!';
$l['no_decompress'] = 'Es sind Fehler beim entpacken der Paket Dateien aufgetreten.';
$l['mail_new_ins'] = 'Eine neue Installation von &soft-1; wurde erfolgreich beendet. Die Details der Installation sind unten aufgeführt:';
$l['mail_path'] = 'Pfad';
$l['mail_url'] = 'URL';
$l['mail_time'] = 'Installationszeit';
$l['mail_subject'] = 'Neue Installation von &soft-1;';
$l['some_files_exist'] = 'Die Installation kann nicht fortgesetzt werden, weil die folgenden Dateien im Zielordner bereits existieren: ';
$l['delete_files'] = 'Bitte löschen Sie diese Dateien oder wählen einen anderen Ordner aus.';
$l['checking_data'] = 'Überpüfe die eingegebenen Daten';
$l['unzipping_files'] = 'Kopiere Dateien und Ordner';
$l['unzipping_datadir'] = 'Entpacke Dateien';
$l['prop_db'] = 'Aktualisiere die Datenbank';
$l['finishing_process'] = 'Installation wird abgeschlossen';
$l['wait_note'] = '<b>HINWEIS:</b> Dies kann einige Minuten in Anspruch nehmen. Bitte verlassen Sie diese Seite NICHT, bis der Status Balken 100% zeigt.';
$l['softdirectory_invalid'] = 'Das Verzeichnis ist ungültig.';
$l['err_domain'] = 'No Domain';
$l['err_domain_admin'] = 'This User does not have any Domain. Please contact Administrator.';
$l['no_sel_inst'] = 'Keine Installationen ausgewählt';
$l['del_insid'] = 'Sind Sie sicher, dass Sie die ausgewählten Installationen entfernen wollen?';
$l['ins_emailto'] = 'E-Mail mit Installationsdetails an';
$l['no_https'] = 'Es wurde kein gültiges SSL Zertifikat gefunden';
$l['err_dbprefix'] = 'Das Tabellen Prefix ist ungültig. Gültige Werte sind a-z oder A-Z oder 0-9 oder _';
$l['auto_backup_not_allowed'] = 'Die Backup Frequenz, die Sie gewählt haben, die ungültig';
$l['invalid_script'] = 'Invalid Script ID';
$l['not_js_script'] = 'This script is not JavaScript';
$l['no_domain_found'] = 'No domain found. Please add a domain to install the script';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['install'] = 'Installieren';
$l['overview'] = 'Übersicht';
$l['features'] = 'Eigenschaften';
$l['demo'] = 'Demo';
$l['ratings'] = 'Bewertungen';
$l['import'] = 'Importieren';
$l['software_ver'] = 'Version';
$l['space_req'] = 'Benötigter Speicherplatz';
$l['available_space'] = 'Verfügbarer Speicherplatz';
$l['req_space'] = 'Benötigter Speicherplatz';
$l['mb'] = 'MB';
$l['software_support'] = 'Software Support';
$l['support_link'] = 'Support Seite besuchen';
$l['support_note'] = 'Hinweis: '.APP.' bietet keinerlei Support für die Software an.';
$l['setup'] = 'Software Setup';
$l['choose_domain'] = 'Domain auswählen';
$l['choose_domain_exp'] = 'Bitte wählen Sie die Domain, auf der die Software installiert werden soll.';
$l['in_directory'] = 'In Verzeichnis';
$l['in_directory_exp'] = 'Das Verzeichnis ist relativ zur Domain und wird <b>erstellt wenn es noch nicht existiert</b>. Z.B. um Software unter http://meinedomain/verzeichnis/ zu installieren, reicht die Angabe <b>verzeichnis</b>. Um direkt unter http://meinedomain/ zu installieren kann das Feld leer gelassen werden.';
$l['softsubmit'] = 'Installieren';
$l['congrats'] = 'Glückwunsch, die Software wurde erfolgreich installiert.';
$l['succesful'] = 'wurde erfolgreich installiert unter';
$l['enjoy'] = 'Wir hoffen, dass der Installationsprozess einfach war.';
$l['install_notes'] = 'Im Folgenden ein paar wichtige Informationen. Wir empfehlen dringend, diese zu lesen:';
$l['please_note'] = '<b>HINWEIS</b>: '.APP.' ist nur ein Auto Installer und stellt keinen Support für die Software Pakete zur Verfügung. Bitte besuchen Sie die Webseite der Software / Anwendung für Support!';
$l['regards'] = 'mit freundlichen Grüßen';
$l['softinstaller'] = APP.' Auto Installer';
$l['return'] = 'zurück zur Übersicht';
$l['current_ins'] = 'Aktuelle Installationen';
$l['link'] = 'Link';
$l['ins_time'] = 'Installationszeit';
$l['version'] = 'Version';
$l['upd_to'] = 'Upgrade auf Version';
$l['remove'] = 'entfernen';
$l['no_info'] = 'Keine Info';
$l['ratesoft'] = 'Diese Anwendung bewerten';
$l['reviews'] = 'Berichte';
$l['reviewsoft'] = 'Bericht schreiben';
$l['readreviews'] = 'Berichte lesen';
$l['reviews_exp'] = 'Berichte von anderen Benutzern lesen und';
$l['ins_type'] = 'Installationstyp';
$l['ins_type_exp'] = '<b>Original Paket</b> - Das Paket ist von der Webseite der Anwendung verfügbar. <br /> <b>Nur Library Dateien</b> - Nur die Javascript Library Dateien.';
$l['ori_pack'] = 'Original Paket';
$l['just_lib'] = 'Nur Library Dateien';
$l['overwrite_exist'] = '<b>ODER</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">aktivieren Sie die Checkbox um alle Dateien zu überschreiben und fortzufahren</span></b>';
$l['overwrite'] = 'Dateien überschreiben';
$l['choose_protocol'] = 'Protokoll auswählen';
$l['choose_protocol_exp'] = 'Wenn Ihre Seite SSL benutzt, wählen Sie bitte das HTTPS Protokoll.';
$l['clone'] = 'Clone';
$l['options'] = 'Options';
$l['downloading'] = 'Lade Paket herunter';
$l['installing'] = 'Installiere Anwendungen';
$l['go'] = 'Los';
$l['rem_inst_id'] = 'Entferne - ';
$l['inst_remvd'] = 'Die ausgewählten Installationen wurden entfernt. Die Seite lädt jetzt neu!';
$l['release_date'] = 'Veröffentlichungsdatum';
$l['adv_option'] = 'Erweiterte Optionen';
$l['disable_notify_update'] = 'Update Benachrichtigung deaktivieren';
$l['exp_disable_notify_update'] = 'Wenn diese Option gesetzt ist, werden Sie keine E-Mail Benachrichtigung über zur Verfügung stehende Updates für diese Installation erhalten.';
$l['prog_installing'] = 'Installiere '; // Dont remove trailing space
$l['prog_install_complete'] = 'Installation vollständig.';

$l['auto_backup'] = 'automatische Backups';
$l['exp_auto_backup'] = APP.' wird automatische Backups via Cron durchführen in der Häfigkeit, die Sie einstellen.';
$l['auto_backup_rotation'] = 'Backup Rotation';
$l['exp_auto_backup_rotation'] = 'Wenn das Backup Ratations Limit erreicht ist, wird '.APP.' das älteste Backup für diese Installation löschen und ein neues Backup anlegen. Die Backups werden Ihren Speicherplatz benutzen, daher wählen Sie bitte eine Rotation entsprechend Ihres verfügbaren Speicherplatzes auf dem Server.';
$l['no_backup'] = 'Nicht sichern';
$l['daily'] = 'Einmal am Tag';
$l['weekly'] = 'Einmal in der Woche';
$l['monthly'] = 'Einmal im Monat';
$l['unlimited'] = 'unbegrenzt';
$l['changelog'] = 'Changelog';
$l['act_upgrade'] = 'Zuletzt aktualisiert';
$l['act_clone'] = 'Zuletzt geklont';
$l['act_backup'] = 'Zuletzt gesichert';
$l['act_install'] = 'Zuletzt installiert';
$l['act_edit'] = 'Zuletzt bearbeitet';
$l['act_import'] = 'Zuletzt importiert';
$l['act_restore'] = 'Zuletzt zurück gesichert';
$l['ampps_download'] = 'Sie können <b>&soft-1;</b> auf Ihrem <b>desktop</b> entwickeln, indem Sie unser kostenloses Developer Tool Softaculous AMPPS benutzen. Klicken Sie <a href="http://www.ampps.com/download?give=latest" target="_blank"><b>hier</b></a> um es herunter zu laden <a href="http://www.ampps.com/download?give=latest" target="_blank"><img src="https://images.softaculous.com/ampps.gif" height="25" /></a>';

$l['install_tweet_sub'] = 'Erzähle Deinen Freunden von Deiner neuen Seite';
$l['err_auto_backup_limit'] = 'Die auto Backup Rotation darf nicht über <b>&soft-1;</b> liegen';
$l['select_domain'] = 'Domain auswählen';
$l['with_selected'] = 'Mit ausgewählter';
$l['not_in_free'] = '<b>&soft-1;</b> kann nicht in der kostenlosen Version von '.APP.' installiert werden!';
$l['notify_admin'] = 'Bitte informieren Sie Ihren Server Administrator, die Premium Version von '.APP.' zu erwerben!';
$l['related_scripts'] = 'ähnliche Anwendungen';
$l['backup'] = 'Backup';
$l['editdetail'] = 'Details bearbeiten';
$l['install_now'] = 'Jetzt installieren';
$l['my_apps'] = 'Meine Applikationen';

$l['bad'] = 'Bad';
$l['good'] = 'Good';
$l['strong'] = 'Strong';
$l['short'] = 'Short';
$l['strength_indicator'] = 'Strength Indicator';

$l['backup_location'] = 'Backup Location';
$l['backup_location_exp'] = 'Choose the backup location to be used while backing up this installation';
$l['default'] = 'Default';
$l['invalid_backup_location'] = 'Backup location submitted does not exist';
$l['local_folder'] = 'Local Folder';

$l['no_cron_min'] = 'No Cron minute was specified';
$l['no_cron_hour'] = 'No Cron hour was specified';
$l['no_cron_day'] = 'No Cron day was specified';
$l['no_cron_month'] = 'No Cron month was specified';
$l['no_cron_weekday'] = 'No Cron weekday was specified';

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
$l['ampps_notify_premium'] = 'This feature is available in the premium version of AMPPS. Please purchase <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';

$l['choose_url'] = 'Choose Installation URL';
$l['choose_url_exp'] = 'Please choose the URL to install the software';

$l['error_max_ins_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Installations allowed per script';
$l['notify_ver'] = 'Notify '.$globals['sn'].' of a new Version';
$l['notifyversion'] = 'Thank you for informing about the new version. We will look into it as soon as possible';