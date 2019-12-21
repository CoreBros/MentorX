<?php

//////////////////////////////////////////////////////////////
//===========================================================
// sclone_lang.php
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

$l['no_ins'] = 'Es wurde keine Installation angegeben';
$l['wrong_ins_title'] = 'Falsche Installations-ID';
$l['wrong_ins'] = 'Die angegebene Installations-ID existiert nicht';
$l['no_info_file'] = 'Die INFO.XML Datei konnte nicht gefunden werden! Bitte melden Sie dies dem Server Administrator.';
$l['incompatible'] = 'Diese Anwendung erfodert eine höhere Version von '.APP.'! Bitte melden Sie dies dem Server Administrator.The software requires a higher version of '.APP.'!';
$l['no_install'] = 'Die INSTALL.XML Datei konnte nicht gefunden werden! Bitte melden Sie dies dem Server Administrator.';
$l['no_functions'] = 'Die CLONE FUNCTIONS Datei konnte nicht gefunden werden!';
$l['no_clone'] = 'Nich klonen';
$l['no_softdomain'] = 'Sie haben keine Domain ausgewählt, auf der die Software installiert werden soll.';
$l['wrong_softdomain'] = 'Der Pfad der angegebenen Domain konnte nicht gefunden werden.';
$l['softdirectory_exists'] = 'Das angegebene Verzeichnis existiert bereits! Bitte geben Sie einen anderen Verzeichnis Namen an.';
$l['no_space'] = 'Es steht nicht genügend Speicherplatz für die Installation dieser Software zur Verfügung!';
$l['no_softdb'] = 'Es wurde keine Datenbank angegeben.';
$l['database_exists'] = 'Die Datenbank existiert bereits. Bitte wählen Sie einen anderen Namen.';
$l['databaseuser_exists'] = 'Der Datenbankbenutzer existiert bereits. Bitte wählen Sie einen anderen Datenbankbenutzer.';
$l['db_name_long'] = 'Der Datenbank Name darf nicht mehr als 7 Zeichen beinhalten. Bitte wählen Sie einen kürzeren Datenbank Namen.';
$l['db_limit_crossed'] = 'Die maximale Anzahl an Datenbanken, die Sie anlegen können ist erreicht, daher kann die Installation nicht fortgesetzt werden.';
$l['cloning'] = 'Klone Installation';
$l['downloading'] = 'Llade Paket herunter';
$l['cant_clone_db'] = 'Konnte die Datenbank nicht klonen';
$l['fail_create'] = 'Konnte das Verzeichnis anlegen';
$l['fail_create_datadir'] = 'Konnte das Daten Verzeichnis nicht anlegen';
$l['cant_clone_dir'] = 'Das Verzeichnis konnte nicht geklont werden, da es das home Verzeichnis ist.';
$l['cant_connect_mysql'] = 'Konnte nicht zur Datenbank konnektieren, bitte überprüfen Sie Benutzername/Passwort Ihrer Datenbank. Sollten sich diese geändert haben, aktualisieren Sie bitte die Details der Installation unter Details bearbeiten.';
$l['same_ins'] = 'Es ist nicht möglich eine Instalaltion an den gleichen Ort zu klonen';
$l['ins_exists'] = 'Es sieht danach aus, als ob <b>&soft-1;</b> bereits an dem ausgewählen Ort installiert ist.';
$l['ins_recursive'] = 'Die Installation kann nicht in ein Unterverzeichnis der original Installation geklont werden';
$l['no_clone_support'] = 'Clone is not supported for this script';
$l['invalid_script'] = 'Invalid Script ID';
$l['no_domain_found'] = 'No domain found. Please add a domain to install the script';

$l['no_cron_min'] = 'Es wurde keine Cron Minute angegeben';
$l['no_cron_hour'] = 'Es wurde keine Cron Stunde angegeben';
$l['no_cron_day'] = 'Es wurde kein Cron Tag angegeben';
$l['no_cron_month'] = 'Es wurde kein Cron Monat angegeben';
$l['no_cron_weekday'] = 'Es wurde kein Cron Wochentag angegeben';
$l['wrong_cron_min'] = 'Cron Minute ist fehlerhaft. Gültige Werte sind 0-59 oder ein <b>*</b>';
$l['wrong_cron_hour'] = 'Cron Stunde ist fehlerhaft. Gültige Werte sind 0-23 oder ein <b>*</b>';
$l['wrong_cron_day'] = 'Cron Tag ist fehlerhaft. Gültige Werte sind 1-31 oder ein <b>*</b>';
$l['wrong_cron_month'] = 'Cron Monat ist fehlerhaft. Gültige Werte sind 1-12 oder ein <b>*</b>';
$l['wrong_cron_weekday'] = 'Cron Wochentagist fehlerhaft. Gültige Werte sind 0-7 oder ein <b>*</b>';
$l['no_datadir'] = 'Es wurde kein Datenverzeichnis angegeben';
$l['datadir_exists'] = 'Das angegebene Datenverzeichnis existiert bereits. Please specify another one.';
$l['no_decompress_data'] = 'Es sind einige Fehler beim entpacken der Daten Dateien aufgetreten.';
$l['some_files_exist'] = 'Die Installation kann nicht fortgesezt werden, weil folgende Dateien im Zielordner bereits existieren: ';
$l['delete_files'] = 'Bitte löschen Sie diese Dateien oder wählen einen anderen Ordner.';
$l['overwrite_exist'] = '<b>ODER</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">aktivieren Sie die Checkbox um alle Dateien zu überschreiben und fortzufahren</span></b>';
$l['prog_cloning'] = 'Klone '; // Dont remove trailing space
$l['prog_cloning_complete'] = 'Klonen vollständig.';
$l['checking_data'] = 'Überprüfe die angegebenen Daten';
$l['unzipping_files'] = 'Kopiere Dateien und Ordner';
$l['unzipping_datadir'] = 'Entpacke Daten Dateien';
$l['prop_db'] = 'Aktualisiere die Datenbank';
$l['finishing_process'] = 'Schließe das Klonen ab';
$l['wait_note'] = '<b>HINWEIS:</b> Dies kann einige Minuten in Anspruch nehmen. Bitte verlassen Sie diese Seite NICHT, bis der Status Balken 100% zeigt.';
$l['no_hostname'] = 'Bitte geben Sie Ihren Datenbank Hostnamen an';
$l['no_dbusername'] = 'Bitte geben Sie Ihren Datenbankbenutzer an';
$l['no_dbuserpass'] = 'Bitte geben Sie Ihr Datenbank Passwort an';
$l['softdirectory_invalid'] = 'Das angegebene Verzeichnis ist ungültig.';
$l['softdatadir_invalid'] = 'Das angegebene Daten Verzeichnis ist ungültig.';
$l['err_domain'] = 'Keine Domain';
$l['err_domain_admin'] = 'Dieser Benutzer hat keine Domain. Bitte kontaktieren Sie den Admninistrator.';
$l['no_https'] = 'Es wurde kein gültiges SSL Zertifikat gefunden';
$l['no_php_install'] = 'PHP ist nicht installiert. Um es zu installieren, klicken Sie bitte <a href="'.$globals['index'].'act=apps&app=1">hier</a>';
$l['no_mysql_install'] = 'MySQL ist nicht installiert. Um es zu installieren, klicken Sie bitte <a href="'.$globals['index'].'act=apps&app=16">hier</a>';
$l['no_field'] = 'Das Feld <b>&soft-1;</b> ist erforderlich und muss ausgefüllt werden.';
$l['error_adddb'] = 'Die Datenbank konnte nicht erstellt werden';
$l['error_adduser'] = 'Es ist ein Fehler beim Hinzufügen eines Benutzers zu der neuen Datenbank aufgetreten.';
$l['no_package'] = 'Das Installationspaket konnte nicht gefunden werden!';
$l['no_decompress'] = 'Es sind einige Fehler beim entpacken der Paket Dateien aufgetreten.';

//Theme Strings
$l['<title>'] = APP.' - Installation klonen';
$l['info'] = 'Info';
$l['ins_softname'] = 'Software';
$l['ins_num'] = 'Installationsnummer';
$l['ins_ver'] = 'Version';
$l['ins_time'] = 'Installationszeit';
$l['ins_path'] = 'Pfad';
$l['ins_url'] = 'URL';
$l['ins_admin_url'] = 'Admin URL';
$l['ins_db'] = 'Datenbank Name';
$l['ins_dbuser'] = 'Datenbank Benutzer';
$l['ins_dbpass'] = 'Datenbank Passwort';
$l['ins_dbhost'] = 'Datenbank Host';
$l['ins_datadir'] = 'Daten Verzeichnnis';
$l['ins_wwwdir'] = 'Web Verzeichnis';
$l['ins_wwwurl'] = 'Web Verzeichnis URL';
$l['ins_cron_command'] = 'Cron Kommando';
$l['cloned'] = 'Die Instalaltion wurde erfolgreich geklont';
$l['clone_ins'] = 'Details der geklonten Installation';
$l['cloneins'] = 'Installation klonen';
$l['choose_protocol'] = 'Protokoll auswählen';
$l['choose_protocol_exp'] = 'Wenn Ihre Seite SSL benutzt, wählen Sie bitte das HTTPS Protokoll.';
$l['cron_job'] = 'CRON Job';
$l['cron_job_exp'] = 'Diese Anwendung erfordert einen CRON Job um funktionieren zu können. Bitte geben Sie die Zeiten für den CRON Job an. Wenn Sie sich nicht sicher sind, lassen Sie alles auf Voreinstellung!';
$l['cron_min'] = 'Min';
$l['cron_hour'] = 'Stunde';
$l['cron_day'] = 'Tag';
$l['cron_month'] = 'Monat';
$l['cron_weekday'] = 'Wochentag';
$l['datadir'] = 'Daten Verzeichnis';
$l['datadir_exp'] = 'Diese Anwendung erfordert es seine Daten in einem Ordner zu speichern, der per Internet nicht erreichbar ist. Dieser wird in Ihrem home Verzeichnis angelegt. Das heißt, wenn <b>datenverzeichnis</b> angegeben wird, wird folgender Ordner ersstellt - /home/benutzername/<b>datenverzeichnis</b>';
$l['db_name_long'] = 'Der Datenbank Name darf nicht mehr als 7 Buchstaben enthalten. Bitte wählen Sie einen kürzeren Datenbank Namen.';
$l['db_alpha_num'] = 'Es sind nur alpha numerische Buchstaben für den Datenbank Namen erlaubt.';
$l['overwrite'] = 'Dateien überschreiben';
$l['database_exists'] = 'Die Datenbank existiert bereits. Bitte wählen Sie einen anderen Namen aus.';
$l['no_softdomain'] = 'Sie haben keine Domain ausgewählt auf der die Software installiert werden soll.';
$l['wrong_softdomain'] = 'Der Pfad der Domain die Sie ausgewählt habe konnte nicht gefunden werden.';
$l['no_space'] = 'Es ist nicht genügend Speicherplatz vorhanden, um diese Software zu installieren!';
$l['no_softdb'] = 'Es wurde keine Datenbank angegeben.';
$l['choose_domain'] = 'Domain auswählen';
$l['choose_domain_exp'] = 'Bitte wählen Sie die Domain, auf der die Software installiert werden soll.';
$l['in_directory'] = 'In Verzeichnis';
$l['in_directory_exp'] = 'Das Verzeichnis ist relativ zur Domain und wird <b>erstellt wenn es noch nicht existiert</b>. Z.B. um Software unter http://meinedomain/verzeichnis/ zu installieren, reicht die Angabe <b>verzeichnis</b>. Um direkt unter http://meinedomain/ zu installieren kann das Feld leer gelassen werden.';
$l['database_name'] = 'Datenbank Name';
$l['database_name_exp'] = 'Geben Sie einen Namen für die Datenbank ein, die für die Installation erstellt werden soll.';
$l['softcopy_note'] = '<b>HINWEIS</b>: Diese Software erfordert eine Installation über ihr eigenes Installationstool. Bitte besuchen Sie die URL, die angezeigt wird, sobald alle Dateien kopiert wurden, um den Installationsprozess abzuschließen.';
$l['softsubmit'] = 'Klonen';
$l['congrats'] = 'Glückwunsch, die Software wure erfolgreich geklont';
$l['succesful'] = 'wurde erfolgreich geklont nach';
$l['admin_url'] = 'Administrative URL';
$l['setup_continue'] = 'Das Setup wird von der Software selbst abgeschlossen. Um die Installation abzuschließen besuchen Sie bitte die folgende URL';
$l['enjoy'] = 'Wir hoffen, dass der Installationsprozess einfach war.';
$l['install_notes'] = 'Im Folgenden ein paar wichtige Informationen. Wir empfehlen dringend, diese zu lesen: ';
$l['please_note'] = '<b>HINWEIS</b>: '.APP.' ist nur ein Auto Installer und stellt keinen Support für die Software Pakete zur Verfügung. Bitte besuchen Sie die Webseite der Software / Anwendung für Support!';
$l['regards'] = 'Mit freundlichen Grüßen';
$l['softinstaller'] = APP.' Auto Installer';
$l['return'] = 'Zurück zur Übersicht';

// These strings are for Softaculous Remote
$l['hostname'] = 'Datenbank Hostname';
$l['hostname_exp'] = 'Der MySQL Hostname (vorzugsweise <b>localhost</b>)';
$l['dbusername'] = 'Datenbank Benutzername';
$l['dbusername_exp'] = 'Der MySQL Benutzername';
$l['dbuserpass'] = 'Datenbank Passwort';
$l['dbuserpass_exp'] = 'Das Passwort des MySQL Benutzers';
$l['database_name_exp_aefer'] = 'Geben Sie den Namen der Datenbank an, die für die Installation benutzt werden soll';

$l['clone_tweet_sub'] = 'Erzähle es deinen Freunden';
$l['not_in_free'] = '<b>&soft-1;</b> kann nicht in der kostenlosen Version von '.APP.' geklont werden!';
$l['notify_admin'] = 'Bitte informieren Sie Ihren Server Administrator, die Premium Version von '.APP.' zu erwerben!';

$l['soft_ins_exists'] = 'An installation already exists at &soft-1; as per our records. To clone the application at this location please uninstall the existing installation!';

$l['no_sclone'] = 'The CLONE.XML file could not be found! Please report this to the server administrator.';
$l['no_functions'] = 'The CLONE FUNCTIONS file could not be found! Please report this to the server administrator.';

$l['clone_push_bg'] = 'Clone has been pushed in background';
$l['err_mysql_db'] = 'The MySQL database name is incorrect as the database could not be selected.';

$l['error_max_clone_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Clone allowed per script';

$l['choose_url'] = 'Choose Installation URL';
$l['choose_url_exp'] = 'Please choose the URL to install the software';

$l['ampps_notify_premium'] = 'This feature is available in the premium version of AMPPS. Please purchase <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';