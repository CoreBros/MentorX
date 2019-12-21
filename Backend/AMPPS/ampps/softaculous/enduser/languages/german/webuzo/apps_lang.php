<?php

//////////////////////////////////////////////////////////////
//===========================================================
// apps_lang.php
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
$l['incompatible'] = 'Die Software erfordert eine höhere Version von '.APP.'! Bitte melden Sie dies dem Server Administrator.';
$l['no_install'] = 'Die INSTALL.XML Datei konnte nicht gefunden werden! Bitte melden Sie dies dem Server Administrator.';
$l['no_functions'] = 'Die INSTALL FUNCTIONS Datei konnte nicht gefunden werden! Bitte melden Sie dies dem Server Administrator.';
$l['no_softdomain'] = 'Es wurde keine Domain ausgewählt, auf der die Software installiert werden soll.';
$l['wrong_softdomain'] = 'Der Pfad der Domain, die Sie ausgewählt haben, konnte nicht gefunden werden.';
$l['softdirectory_exists'] = 'Das Verzeichnis, das Sie angegeben haben, existiert bereits! Bitte geben Sie einen anderen Verzeichnisnamen an.';
$l['no_space'] = 'Es ist nicht genügend Speicherplatz vorhanden, um diese Software zu installieren!';
$l['no_softdb'] = 'Es wurde keine Datenbank angegeben.';
$l['database_exists'] = 'Die Datenbank existiert bereits. Bitte geben Sie einen anderen Namen an.';
$l['databaseuser_exists'] = 'Der Datenbank Benutzer existiert bereits. Bitte geben Sie einen anderen Namen an.';
$l['db_name_long'] = 'Der Datenbank Name darf maximal 7 Buchstaben enthalten. Bitte geben Sie einen kürzeren Datenbank Namen an.';
$l['db_limit_crossed'] = 'Die maximale Anzahl an Datenbanken wurde erreicht, deshalb kann die Installation nicht fortgesetzt werden.';
$l['no_field'] = 'Das Feld <b>&soft-1;</b> ist erforderlich und muss ausgefüllt werden.';
$l['error_adddb'] = 'Die Datenbank konnte nicht angelegt werden.';
$l['error_adduser'] = 'Es ist ein Fehler beim Hinzufügen eines Benutzers zur neuen Datenbank aufgetreten.';
$l['no_package'] = 'Das Installationspaket konnte nicht gefunden werden!';
$l['no_decompress'] = 'Es sind einige Fehler beim entpacken der Paket Dateien aufgetreten.';
$l['mail_new_ins'] = 'Eine neue Installation von &soft-1; wurde abgeschlossen. Die Details der Installation sind unten aufgeführt:';
$l['mail_path'] = 'Pfad';
$l['mail_url'] = 'URL';
$l['mail_admin_url'] = 'Admin URL';
$l['mail_admin'] = 'Admin Benutzername';
$l['mail_pass'] = 'Admin Passwort';
$l['mail_db'] = 'MySQL Datenbank';
$l['mail_dbuser'] = 'MySQL DB Benutzer';
$l['mail_dbhost'] = 'MySQL DB Host';
$l['mail_dbpass'] = 'MySQL DB Passwort';
$l['mail_time'] = 'Installationszeit';
$l['mail_subject'] = 'Neue Installation von &soft-1;';
$l['no_cron_min'] = 'Es wurde keine Cron Minute angegeben';
$l['no_cron_hour'] = 'Es wurde keine Cron Stunde angegeben';
$l['no_cron_day'] = 'Es wurde kein Cron Tag angegeben';
$l['no_cron_month'] = 'Es wurde kein Cron Monat angegeben';
$l['no_cron_weekday'] = 'Es wurde kein Cron Wochentag angegeben';
$l['wrong_cron_min'] = 'Cron Minute ist falsch. Gültige Werte sind 0-59 oder ein <b>*</b>';
$l['wrong_cron_hour'] = 'Cron Stunde ist falsch. Gültige Werte sind 0-23 oder ein <b>*</b>';
$l['wrong_cron_day'] = 'Cron Tag ist falsch. Gültige Werte sind 1-31 oder ein <b>*</b>';
$l['wrong_cron_month'] = 'Cron Monat ist falsch. Gültige Werte sind 1-12 oder ein <b>*</b>';
$l['wrong_cron_weekday'] = 'Cron Wochentag ist falsch. Gültige Werte sind 0-7 oder ein <b>*</b>';
$l['mail_cron'] = 'Cron Job';
$l['no_datadir'] = 'Es wurde kein Datenverzeichnis angegeben';
$l['datadir_exists'] = 'Das Datenverzeichnis existiert bereits. Bitte geben Sie ein anderes an.';
$l['no_decompress_data'] = 'Es sind einige Fehler beim entpacken der Daten Dateien aufgetreten.';
$l['mail_datadir'] = 'Daten Verzeichnis';
$l['some_files_exist'] = 'Die Installation kann nicht fortgesezt werden, weil folgende Dateien im Zielordner bereits existieren: ';
$l['delete_files'] = 'Bitte löschen Sie diese Dateien oder wählen einen anderen Ordner.';
$l['overwrite_exist'] = '<b>ODER</b> <br />aktivieren Sie die Checkbox um alle Dateien zu überschreiben und fortzufahren';
$l['checking_data'] = 'Führe erste Schritte aus';
$l['checking_dependencies'] = 'Errechne die zu installierenden Abhängigkeiten';
$l['installing_dependencies'] = 'Installiere die Abhängigkeiten';
$l['installing_package'] = 'Installiere die Anwendung';
$l['unzipping_files'] = 'Kopiere Dateien und Ordner';
$l['wait_note'] = '<b>HINWEIS:</b> Dies kann 3-4 Minuten in Anspruch nehmen. Bitte verlassen Sie diese Seite NICHT, bis der Status Balken 100% zeigt.';
$l['no_hostname'] = 'Bitte geben Sie den Datenbank Hostnamen ein';
$l['no_dbusername'] = 'Bitte geben Sie Ihren Datenbank Benutzer ein';
$l['no_dbuserpass'] = 'Bitte geben Sie Ihr Datenbank Passwort ein';
$l['softdirectory_invalid'] = 'Das angegebene Verzeichnis ist ungültig..';
$l['softdatadir_invalid'] = 'Das angegebene Datenverzeichnis ist ungültig.';
$l['no_installation'] = 'Keine Installation gefunden';
$l['no_dep_found'] = 'Konnte die Abhängigkeit <b>&soft-1;</b> für <b>&soft-2;</b> nicht finden';
$l['err_dep_install'] = 'Es ist ein Fehler beim Instalieren der Abhängigkeit <b>&soft-1;</b> für <b>&soft-2;</b> aufgetreten';
$l['err_extract'] = 'Es ist ein Fehler beim Entpacken des Pakets aufgetreten -';
$l['err_dep_remove'] = '<b>&soft-1;</b> ist erforderlich für <b>&soft-2;</b>. Wählen Sie die <b>abhängige Anwendung(en) entfernen</b> check box um fortzufahren.';
$l['no_app_info'] = 'Konnte die Anwednugnsinformationen nicht finden';
$l['ins_finishing_process'] = 'Schließe Installation ab.';
$l['rem_finishing_process'] = 'Erfolgreich entfernt';

$l['prog_removing'] = 'Entferne ';// Dont remove the trailing space
$l['prog_remove_complete'] = 'Installation entfernt.';
$l['disable_sysapps'] = 'Diese Funktion wurde vom Webuzo Admin Panel deaktiviert';
$l['no_cli_force'] = 'Bitte benutzen Sie --force um diese Applikation zu installieren. Da bereits eine Anwendung installiert ist, die nicht mit dieser kompatibel ist.';
$l['conflict_check_box'] = 'Bitte wählen Sie die Checkbox um zu installieren ';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['install'] = 'Installieren';
$l['overview'] = 'Übersicht';
$l['features'] = 'Features';
$l['demo'] = 'Demo';
$l['ratings'] = 'Bewertungen';
$l['import'] = 'Importieren';
$l['software_ver'] = 'Version';
$l['space_req'] = 'Erforderlicher Speicherplatz';
$l['available_space'] = 'Verfügbarer Speicherplatz';
$l['req_space'] = 'Erforderlicher Speicherplatz';
$l['mb'] = 'MB';
$l['software_support'] = 'Software Support';
$l['support_link'] = 'Support Seite besuchen';
$l['support_note'] = 'Hinweis: Softaculous bietet keinen Support für die Software.';
$l['setup'] = 'Software Setup';
$l['choose_domain'] = 'Domain wählen';
$l['choose_domain_exp'] = 'Bitte wälen Sie die Domain auf der die Software installiert werden soll.';
$l['in_directory'] = 'Ins Verzeichnis';
$l['in_directory_exp'] = 'Das Verzeichnis ist relativ zur Domain und <b>sollte nicht existieren</b>. Z.B. um Software unter http://meinedomain/verzeichnis/ zu installieren, reicht die Angabe <b>verzeichnis</b>. Um direkt unter http://meinedomain/ zu installieren kann das Feld leer gelassen werden.';
$l['database_name'] = 'Datenbank Name';
$l['database_name_exp'] = 'Geben Sie einen Namen für die Datenbank ein, die für die Installation erstellt werden soll.';
$l['softcopy_note'] = '<b>HINWEIS</b>: Diese Software erfordert eine Installation über ihr eigenes Installationstool. Bitte besuchen Sie die URL, die angezeigt wird, sobald alle Dateien kopiert wurden, um den Installationsprozess abzuschließen.';
$l['softsubmit'] = 'Installieren';
$l['congrats'] = 'Glückwunsch, die Software wurde erfolgreich installiert';
$l['succesful'] = 'wurde erfogreich installiert.';
$l['admin_url'] = 'Administrative URL';
$l['setup_continue'] = 'Das Setup wird von der Software selbst abgeschlossen. Um die Installation abzuschließen besuchen Sie bitte die folgende URL';
$l['enjoy'] = 'Wir hoffen, dass der Installationprozess einfach war.';
$l['install_notes'] = 'Im Folgenden ein paar wichtige Informationen. Wir empfehlen dringend, diese zu lesen: ';
$l['please_note'] = '<b>HINWEIS</b>: '.APP.' ist nur ein Auto Installer und stellt keinen Support für die Software Pakete zur Verfügung. Bitte besuchen Sie die Webseite der Software / Anwendung für Support!';
$l['regards'] = 'Mit freundlichen Grüßen';
$l['softinstaller'] = APP.' Auto Installer';
$l['return'] = 'Zurück zur Übersicht';
$l['current_ins'] = 'Aktuelle Installationen';
$l['link'] = 'Link';
$l['ins_time'] = 'Installationszeit';
$l['version'] = 'Version';
$l['upd_to'] = 'Upgrade auf Version';
$l['remove'] = 'entfernen';
$l['no_info'] = 'Keine Info';
$l['randpass'] = 'Zufallspasswort generieren';
$l['ratesoft'] = 'Diese Anwendung bewerten';
$l['reviews'] = 'Berichte';
$l['reviewsoft'] = 'einen Bericht schreiben';
$l['readreviews'] = 'Berichte lesen';
$l['reviews_exp'] = 'Berichte von anderen Benutzern lesen und';
$l['cron_job'] = 'CRON Job';
$l['cron_job_exp'] = 'Diese Anwendung erfordert einen CRON Job um funktionieren zu können. Bitte geben Sie die Zeiten für den CRON Job an. Wenn Sie sich nicht sicher sind, lassen Sie alles auf Voreinstellung!';
$l['cron_min'] = 'Min';
$l['cron_hour'] = 'Stunde';
$l['cron_day'] = 'Tag';
$l['cron_month'] = 'Monat';
$l['cron_weekday'] = 'Wochentag';
$l['datadir'] = 'Daten Verzeichnis';
$l['datadir_exp'] = 'Diese Anwendung erfordert es seine Daten in einem Ordner zu speichern, der per Internet nicht erreichbar ist. Dieser wird in Ihrem home Verzeichnis angelegt. Das heißt, wenn <b>datenverzeichnis</b> angegeben wird, wird folgender Ordner ersstellt - /home/benutzername/<b>datenverzeichnis</b>';
$l['db_alpha_num'] = 'Es sind nur alpha numerische Buchstaben für den Datenbank Namen erlaubt.';
$l['overwrite'] = 'Dateien überschreiben';
$l['ins_emailto'] = 'E-Mail mit Installationsdetails an';
$l['choose_protocol'] = 'Protokoll auswählen';
$l['choose_protocol_exp'] = 'Wenn Ihre Seite SSL benutzt, wählen Sie bitte das HTTPS Protokoll.';
$l['backup'] = 'Backup';
$l['options'] = 'Optionen';
$l['admin'] = 'Admin';
$l['notify_ver'] = 'Benachrichtigung über eine neue Verison';
$l['notifyversion'] = 'Vielen Dank, dass Sie sich über die neue Version informiert haben. Wir werden dies so bald wie möglich prüfen.';
$l['del_insid'] = 'Sind Sie sicher, dass Sie die gewählten Installationen entfernen wollen? Die Installation wird unwiderruflich gelöscht werden. \nEs werden keine weiteren Bestätigungen gefordert!';
$l['rem_inst_id'] = 'Entferne Installation - ';
$l['no_sel_inst'] = 'Es wurden keine Installationen zum Entfernen markiert.';
$l['inst_remvd'] = 'Die ausgewählten Installationen wurden entfernt. Die Seite wird jetzt neu geladen!';
$l['remove'] = 'Remove';
$l['go'] = 'Weiter';
$l['screenshots'] = 'Screenshots';
$l['downloading'] = 'Lade Paket herunter';
$l['installing'] = 'Installiere Anwendung';
$l['removing'] = 'Entferne Anwendung';
$l['editdetail'] = 'Details bearbeiten';
$l['publish'] = 'Veröffentliche im Internet';
$l['hostname'] = 'Datenbank Hostname';
$l['hostname_exp'] = 'Der MySQL Hostname (meistens <b>localhost</b>)';
$l['dbusername'] = 'Datenbank Benutzername';
$l['dbusername_exp'] = 'Der MySQL Benutzername';
$l['dbuserpass'] = 'Datenbank Passwort';
$l['dbuserpass_exp'] = 'Das Passwort des MySQL Benutzers';
$l['database_name_exp_aefer'] = 'Geben Sie den Namen der Datenbank an, die für die Installation benutzt werden soll';
$l['sel_version'] = 'Version auswählen';
$l['choose_version_exp'] = 'Bitte wählen Sie die Version die Sie installieren möchten.';
$l['choose_version'] = 'Wählen Sie die Version die Sie installieren möchten';
$l['select'] = 'auswählen';
$l['release_date'] = 'Veröffentlichungsdatum';
$l['adv_option'] = 'Erweiterte Optionen';
$l['disable_notify_update'] = 'Update Benachrichtigungen deaktivieren';
$l['exp_disable_notify_update'] = 'Wenn diese Option gesetzt ist, werden Sie keine E-Mail Benachrichtigung über zur Verfügung stehende Updates für diese Installation erhalten.';
$l['prog_installing'] = 'Installiere ';
$l['prog_install_complete'] = 'Installation vollständig.';
$l['iagree'] = 'Ich stimme den Geschäftsbedingungen der &soft-1; Liezenz zu.';
$l['notes'] = 'Notizen';
$l['uninstalled'] = 'Die Anwendung wurde erfoglreich entfernt';
$l['install_tweet_sub'] = 'Erzähle Deinen Freunden von Deiner neuen Seite';
$l['not_in_free'] = '<b>&soft-1;</b> kann nicht in der kostenlosen Version von Webuzo installiert werden! Bitte aktualisieren Sie auf die Premium Version von Webuzo!';

