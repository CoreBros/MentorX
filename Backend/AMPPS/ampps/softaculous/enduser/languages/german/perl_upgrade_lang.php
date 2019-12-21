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
$l['no_decompress_www'] = 'Es sind einige Fehler beim entpacken der Web Dateien aufgetreten.';
$l['no_config_perl_path'] = 'Ein Fehler ist während der Konfiguration der CGI Dateien aufgetreten.';
$l['checking_data'] = 'Überprüfe die eingegebenen Daten';
$l['unzipping_files'] = 'Kopiere Dateien und Ordner';
$l['unzipping_datadir'] = 'Entpacke Daten Dateien';
$l['prop_db'] = 'Aktualisiere die Datenbank';
$l['finishing_process'] = 'Schließe Upgrade ab';
$l['wait_note'] = '<b>HINWEIS:</b> Dies kann einige Minuten in Anspruch nehmen. Bitte verlassen Sie diese Seite NICHT, bis der Status Balken 100% zeigt.';
$l['no_space'] = 'Es steht nicht genügend Speicherplatz zuer Verfügung um diese Installation zu aktualisieren!';
$l['invalid_insid'] = 'Invalid Installation ID';
$l['invalid_script'] = 'Invalid Script ID';
$l['not_perl_script'] = 'This script is not in PERL';
$l['no_perl_upgrade'] = 'Upgrade is not supported for this script';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['upgrade'] = 'Software Upgrade';
$l['softins_url'] = 'URL';
$l['softins_path'] = 'Pfad';
$l['softcopy_note'] = '<b>HINWEIS</b>: Diese Software führt das Upgrade mit eigenen Tools aus. Um das Upgrade abzuschließen besuchen Sie bitte die URL, die Ihnen angezeigt wird, sobald alle Dateien kopiert wurden.';
$l['softsubmit'] = 'Upgrade';
$l['congrats'] = 'Glückwunsch, die Software wurde erfolgreich upgegradet.';
$l['succesful'] = 'wurde erfolgreich upgegradet unter';
$l['admin_url'] = 'Admin URL';
$l['setup_continue'] = 'Um das Upgrade abzuschließen, klicken Sie bitte auf folgende URL';
$l['enjoy'] = 'Wir hoffen das der Upgrade Prozess einfach war.';
$l['upgrade_notes'] = 'Im Folgenden ein paar wichtige Informationen. Wir empfehlen dringend, diese zu lesen:';
$l['please_note'] = '<b>HINWEIS</b>: '.APP.' ist nur ein Auto Installer und stellt keinen Support für die Software Pakete zur Verfügung. Bitte besuchen Sie die Webseite der Software / Anwendung für Support!';
$l['regards'] = 'Mit freundlichen Grüßen';
$l['softinstaller'] = APP.' Auto Installer';
$l['return'] = 'Zurück zur Übersicht';
$l['note_backup'] = 'Es wird empfohlen eine <a href="'.$globals['index'].'act=backup&insid=&soft-1;">Sicherung</a> von der Installation zu machen, bevor ein Upgrade gestartet wird.';
$l['create_backup'] = 'Sicherung erstellen';
$l['create_backup_exp'] = 'Vor dem Upgrade eine Sicherung erstellen';
$l['prog_upgrading'] = 'Aktualisiere ';// Dont remove the trailing space
$l['prog_upgrade_complete'] = 'Upgrade vollständig.';

$l['upgrade_tweet_sub'] = 'Erzähle es deinen Freunden';
$l['not_in_free'] = '<b>&soft-1;</b> kann nicht in der kostenlosen Version von '.APP.' installiert werden!';
$l['notify_admin'] = 'Bitte informieren Sie Ihren Server Administrator, die Premium Version von '.APP.' zu erwerben!';

