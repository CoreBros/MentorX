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

$l['no_info_file'] = 'Die INFO.XML Datei konnte nicht gefunden werden! Bitte melden Sie dies dem Server Administrator.';
$l['incompatible'] = 'Die Software erfordert eine höhere Version von  '.APP.'! Bitte melden Sie dies dem Server Administrator.';
$l['no_upgrade'] = 'Die UPGRADE.XML Datei konnte nicht gefunden werden! Bitte melden Sie dies dem Server Administrator.';
$l['no_functions'] = 'Die UPGRADE FUNCTIONS Datei konnte nicht gefunden werden! Bitte melden Sie dies dem Server Administrator.';
$l['no_field'] = 'Das Feld <b>&soft-1;</b> ist erforderlich und muss ausgefüllt werden.';
$l['no_package'] = 'Das Upgrade Paket konnte nicht gefunden werden!';
$l['no_decompress'] = 'Es sind einige Fehler beim entpacken der Paket Dateien aufgetreten.';
$l['checking_data'] = 'Überprüfe die eingegebenen Daten';
$l['unzipping_files'] = 'Kopiere Dateien und Ordner';
$l['unzipping_datadir'] = 'Entpacke Daten Dateien';
$l['prop_db'] = 'Aktualisiere die Datenbank';
$l['finishing_process'] = 'Schließe Upgrade ab';
$l['wait_note'] = '<b>HINWEIS:</b> Dies kann einige Minuten in Anspruch nehmen. Bitte verlassen Sie diese Seite NICHT, bis der Status Balken 100% zeigt.';
$l['cver_greater'] = 'Die aktuelle Version ist höher oder gleich der Version, auf die Sie upgraden wollen. Dies kann passieren, wenn Sie die Installation manuell upgegradet haben. Sollte dies nicht der Fall sein, markieren Sie bitte die folgenden Checkbox';
$l['force_upgrade'] = 'erzwungenes Upgrade';
$l['backup_finish'] = 'Sicherung abgeschlossen';
$l['backup_fail_proceed'] = 'Es sind einige Fehler beim Sicherungsprozess aufgetreten. Weiter mit dem Upgrade?';
$l['no_space'] = 'Es steht nicht genügend Speicherplatz zuer Verfügung um diese Installation zu aktualisieren!';
$l['invalid_insid'] = 'Invalid Installation ID';
$l['invalid_script'] = 'Invalid Script ID';
$l['no_upgrade_support'] = 'Upgrade is not supported for this script';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['upgrade'] = 'Software Upgrade';
$l['softins_url'] = 'URL';
$l['softins_path'] = 'Pfad';
$l['softcopy_note'] = '<b>HINWEIS</b>: Diese Software erfordert eine Installation über ihr eigenes Installationstool. Bitte besuchen Sie die URL, die angezeigt wird, sobald alle Dateien kopiert wurden, um den Installationsprozess abzuschließen.';
$l['softsubmit'] = 'Upgrade';
$l['congrats'] = 'Glückwunsch, die Software wurde erfolgeich upgegradet';
$l['succesful'] = 'wurde erfolgreich upgegradet unter';
$l['admin_url'] = 'Admin URL';
$l['setup_continue'] = 'Das Setup wird von der Software selbst abgeschlossen. Um die Installation abzuschließen besuchen Sie bitte die folgende URL';
$l['enjoy'] = 'Wir hoffen, dass der Upgrade Prozess einfach war.';
$l['upgrade_notes'] = 'Im Folgenden ein paar wichtige Informationen. Wir empfehlen dringend, diese zu lesen: ';
$l['please_note'] = '<b>HINWEIS</b>: '.APP.' ist nur ein Auto Installer und stellt keinen Support für die Software Pakete zur Verfügung. Bitte besuchen Sie die Webseite der Software / Anwendung für Support!';
$l['regards'] = 'Mit freudlichen Grüßen';
$l['softinstaller'] = APP.' Auto Installer';
$l['return'] = 'Zurück zur Übersicht';
$l['note_backup'] = 'Es wird empfohlen eine <a href="'.$globals['index'].'act=backup&insid=&soft-1;">Sicherung</a> von der Installation zu machen, bevor ein Upgrade gestartet wird.';
$l['alreadyupdated'] = 'Hmm ... es sieht so aus, als ob die aktuelle Version <b>&soft-1;</b> ist und nicht <b>&soft-2;</b>. <br />Klicken Sie um die '.APP.' Aufzeichnungen zu aktualisieren.';
$l['no_update_required'] = 'Es sieht so aus als ob Sie Ihre Installation nicht zu aktualisieren brauchen, da sie bereits aktuell ist.';
$l['auto_backup'] = 'Wollen Sie eine Sicherung machen bevor Sie upgraden?';
$l['select_version'] = 'Wählen Sie die Version, auf die Sie upgraden wollen';
$l['upgrading'] = 'Führe Upgrade aus...';
$l['backing_up'] = 'Sichere die Installation';
$l['setup_partial'] = 'Es ist noch ein Schritt zum Abschließen des Upgrade Prozesses.';
$l['finish_update'] = 'Bitte besuchen Sie unten angegebenen Link um den Upgrade Prozess abzuschließen.';
$l['finish_up_sucess'] = 'Nach Abschluss des Upgrade Prozesses können Sie die &soft-1; Installation hier finden';
$l['upgrading_to'] = 'Sie werden upgraden auf: ';
$l['version'] = 'Version ';
$l['create_backup'] = 'Sicherung erstellen';
$l['create_backup_exp'] = 'Eine Sicherung erstellen, bevor das Upgrade startet';
$l['prog_upgrading'] = 'Aktualisiere ';// Dont remove the trailing space
$l['prog_upgrade_complete'] = 'Upgrade vollständig.';

$l['upgrade_tweet_sub'] = 'Erzähle es deinen Freunden';

$l['not_in_free'] = '<b>&soft-1;</b> kann nicht in der kostenlosen Version von '.APP.' installiert werden!';
$l['notify_admin'] = 'Bitte informieren Sie Ihren Server Administrator, die Premium Version von '.APP.' zu erwerben!';

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