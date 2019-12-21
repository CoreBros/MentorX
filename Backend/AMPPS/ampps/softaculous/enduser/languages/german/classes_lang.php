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

$l['no_info_file'] = 'Keine Klasse für die angegebene ID';
$l['incompatible'] = 'Die Software erfordert eine höhere Version von '.APP.'! Bitte melden Sie dies dem Server Administrator.';
$l['no_install'] = 'Die INSTALL.XML Datei konnte nicht gefunden werden! Bitte melden Sie dies dem Server Administrator.';
$l['no_functions'] = 'Die INSTALL FUNCTIONS Datei konnte nicht gefunden werden! Bitte melden Sie dies dem Server Administrator.';
$l['no_softdomain'] = 'Sie haben keine Domain ausgewählt auf der die Software installiert werden soll.';
$l['wrong_softdomain'] = 'Der Pfad der Domain die Sie ausgewählt habe konnte nicht gefunden werden.';
$l['no_space'] = 'Es ist nicht genügend Speicherplatz vorhanden, um diese Software zu installieren!';
$l['no_field'] = 'Das Feld <b>&soft-1;</b> ist erfoderlich und muss ausgefüllt werden.';
$l['no_package'] = 'Das Installationspaket konnte nicht gefunden werden!';
$l['no_decompress'] = 'Es sind Fehler beim entpacken der Paket Dateien aufgetreten.';
$l['mail_new_ins'] = 'Eine neue Installation von &soft-1; wurde erfolgreich beendet. Die Details der Installation sind unten aufgeführt:';
$l['mail_path'] = 'Pfad';
$l['mail_url'] = 'URL';
$l['mail_time'] = 'Installationszeit';
$l['mail_subject'] = 'Neue Installation von &soft-1;';
$l['some_files_exist'] = 'Die Installation kann nicht fortgesetzt werden, weil folgende Dateien im Zielordner bereits existieren: ';
$l['delete_files'] = 'Bitte löschen Sie diese Dateien oder wählen einen anderen Ordner aus.';
$l['checking_data'] = 'Überprüfe die angegebenen Daten';
$l['unzipping_files'] = 'Kopiere Dateien und Ordner';
$l['unzipping_datadir'] = 'Entpacke Daten Dateien';
$l['prop_db'] = 'Aktualisiere die Datenbank';
$l['finishing_process'] = 'Schließe die Installation ab';
$l['wait_note'] = '<b>HINWEIS:</b> Dies kann einige Minuten in Anspruch nehmen. Bitte verlassen Sie diese Seite NICHT, bis der Status Balken 100% zeigt.';
$l['cant_download'] = 'Kann die ZIP Datei nicht herunter laden.';
$l['softdirectory_invalid'] = 'Das angegebene Verzeichnis ist ungültig.';
$l['softdirectory_exists'] = 'Das Verzeichnis existiert bereits! Bitte geben Sie einen anderen Verzeichnis Namen an.';
$l['ins_emailto'] = 'E-Mail mit Installationsdetails an';
$l['disable_classes'] = 'PHP Classes are disabled by admin or you are using '.APP.' Free version';
$l['invalid_class_id'] = 'Invalid Class ID';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['install'] = 'Installieren';
$l['overview'] = 'Liesmich';
$l['features'] = 'Eigenschaften';
$l['demo'] = 'Demo';
$l['file'] = 'Dateien';
$l['ratings'] = 'Bewertungen';
$l['import'] = 'Importieren';
$l['software_ver'] = 'Version';
$l['space_req'] = 'erforderlicher Speicherplatz';
$l['available_space'] = 'Verfügbarer Speicherplatz';
$l['req_space'] = 'erforderlicher Speicherplatz';
$l['mb'] = 'MB';
$l['software_support'] = 'Software Support';
$l['support_link'] = 'Support Seite besuchen';
$l['support_note'] = 'Hinweis: '.APP.' bietet keinerlei Support für die Software an.';
$l['setup'] = 'Software Setup';
$l['choose_domain'] = 'Domain auswählen';
$l['choose_domain_exp'] = 'Bitte wählen Sie die Domain, auf der die Software installiert werden soll.';
$l['in_directory'] = 'In Verzeichnis';
$l['in_directory_exp'] = 'Das Verzeichnis ist relativ zur Domain und wird <b>erstellt wenn es noch nicht existiert</b>. Z.B. um Software unter &soft-1;/verzeichnis zu installieren, reicht die Angabe <b>verzeichnis</b>. Um direkt unter &soft-1;/ zu installieren kann das Feld leer gelassen werden.';
$l['aef_in_directory_exp'] = 'Das Verzeichnis ist relativ zur Domain und wird <b>erstellt wenn es noch nicht existiert</b>. Z.B. um Software unter  <span id="aef_span_lang">&soft-1;</span>/verzeichnis zu installieren, reicht die Angabe <b>verzeichnis</b>. Um direkt unter <span id="aef_span_lang_a">&soft-1;</span>/ zu installieren kann das Feld leer gelassen werden.';
$l['softsubmit'] = 'Installieren';
$l['congrats'] = 'Glückwunsch, die Software wure erfolgreich installiert.';
$l['succesful'] = 'wurde erfolgreich installiert unter';
$l['enjoy'] = 'Wir hoffen, dass der Installationsprozess einfach war.';
$l['install_notes'] = 'Im Folgenden ein paar wichtige Informationen. Wir empfehlen dringend, diese zu lesen:';
$l['please_note'] = '<b>HINWEIS</b>: '.APP.' ist nur ein Auto Installer und stellt keinen Support für die Software Pakete zur Verfügung. Bitte besuchen Sie die Webseite der Software / Anwendung für Support!';
$l['regards'] = 'Mit freundlichen Grüßen';
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
$l['reviewsoft'] = 'einen Bericht schreiben';
$l['readreviews'] = 'Berichte lesen';
$l['reviews_exp'] = 'Berichte von anderen Benutzern lesen und';
$l['ins_type'] = 'Installationstyp';
$l['ins_type_exp'] = '<b>Original Paket</b> - Paket, wie von der Anwendungs Webseite verfügbar. <br /> <b>Nur Library Dateien</b> - Nur die Javascript Library Dateien.';
$l['ori_pack'] = 'Original Paket';
$l['just_lib'] = 'Nur Library Dateien';
$l['overwrite_exist'] = '<b>ODER</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">aktivieren Sie die Checkbox um alle Dateien zu überschreiben und fortzufahren</span></b>';
$l['overwrite'] = 'Dateien überschreiben';
$l['choose_protocol'] = 'Protokoll auswählen';
$l['choose_protocol_exp'] = 'Wenn Ihre Seite SSL benutzt, wählen Sie bitte das HTTPS Protokoll.';
$l['downloading'] = 'Lade Paket herunter';
$l['installing'] = 'Installiere Anwendungen';
$l['files'] = 'Dateien & Ordner';
$l['modified_time'] = 'Zuletzt geändert';
$l['size'] = 'Größe';
$l['classes_ins_error'] = 'Ein Fehler ist aufgetreten während die Installation gespeichert wurde.';
$l['del_insid'] = 'Sind Sie sicher, dass Sie die gewählten Installationen entfernen wollen? Die Installation wird unwiderruflich gelöscht werden. \nEs werden keine weiteren Bestätigungen gefordert!';
$l['rem_inst_id'] = 'Entferne Installation - ';
$l['no_sel_inst'] = 'Es wurden keine Installationen zum Entfernen markiert.';
$l['inst_remvd'] = 'Die ausgewählten Installationen wurden entfernt. Die Seite wird jetzt neu geladen!';
$l['go'] = 'Los';
$l['download_zip'] = 'Alle Dateien herunter laden';
$l['software_category'] = 'Kategorie';
$l['adv_option'] = 'Erweiterte Optionen';
$l['disable_notify_update'] = 'Update Benachrichtigungen deaktivieren';
$l['exp_disable_notify_update'] = 'Wenn diese Option gesetzt ist, werden Sie keine E-Mail Benachrichtigung über zur Verfügung stehende Updates für diese Installation erhalten.';
$l['prog_installing'] = 'Installiere ';// Dont remove the trailing space
$l['prog_install_complete'] = 'Installation vollständig.';

$l['install_tweet_sub'] = 'Erzähle es deinen Freunden';
$l['select_domain'] = 'Domain auswählen';
$l['with_selected'] = 'Mit ausgewählten';
$l['download'] = 'Download';

