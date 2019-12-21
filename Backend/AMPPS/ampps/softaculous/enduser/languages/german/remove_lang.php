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

$l['no_ins'] = 'Es wurde keine Installation angegeben';
$l['wrong_ins_title'] = 'Falsche Installations ID';
$l['wrong_ins'] = 'Die Installations ID existiert nicht';
$l['cant_remove_dir'] = 'Das Verzeichnis kann nicht entfernt werden, da es das home Verzeichnis ist. Bitte wählen Sie die <b>Verzeichnis entfernen</b> Option wieder ab um ohne das Verzeichnis zu entfernen weiter zu machen.';
$l['cant_remove_wwwdir'] = 'Das Web Verzeichnis kann nicht entfernt werden, da es das home Verzeichnis ist. Bitte wählen Sie die <b>Web Verzeichnis entfernen</b> Option wieder ab um ohne das Verzeichnis zu entfernen weiter zu machen.';
$l['mail_rem_ins'] = 'Die Installation von &soft-1; wurde entfernt. Im Folgenden die Details der entfernten Installation: ';
$l['mail_path'] = 'Pfad';
$l['mail_url'] = 'URL';
$l['mail_db'] = 'MySQL Datenbank';
$l['mail_dbuser'] = 'MySQL DB Benutzer';
$l['mail_dbhost'] = 'MySQL DB Host';
$l['mail_dbpass'] = 'MySQL DB Passwort';
$l['mail_time'] = 'Installationszeit';
$l['mail_rem_time'] = 'Entfernungszeit';
$l['mail_subject'] = 'Entfernte Installation von &soft-1;';
$l['mail_cron_command'] = 'CRON Job';
$l['mail_datadir'] = 'Daten Verzeichnis';
$l['mail_wwwdir'] = 'Web Verzeichnis';
$l['checking_data'] = 'Überprüfe die angegebenen Daten';
$l['rem_db'] = 'Entferne Datenbank / Datenbank Benutzer';
$l['rem_dir'] = 'Entferne das Verzeichnis';
$l['rem_datadir'] = 'Entferne das Daten Verzeichnis';
$l['rem_cron'] = 'Entferne die Cron Jobs';
$l['finishing_process'] = 'Erfolgreich entfernt';
$l['wait_note'] = '<b>HINWEIS:</b> Dies kann einige Minuten in Anspruch nehmen. Bitte verlassen Sie diese Seite NICHT, bis der Status Balken 100% zeigt.';


//Theme Strings
$l['<title>'] = APP.' - entfernen';
$l['info'] = 'Info';
$l['ins_softname'] = 'Software';
$l['ins_num'] = 'Installationsnummer';
$l['ins_ver'] = 'Version';
$l['ins_time'] = 'Installationszeit';
$l['ins_path'] = 'Pfad';
$l['ins_url'] = 'URL';
$l['ins_db'] = 'Datenbank Name';
$l['ins_dbuser'] = 'Datenbank Benutzer';
$l['ins_dbpass'] = 'Datenbank Passwort';
$l['ins_dbhost'] = 'Datenbank Host';
$l['remove_ins'] = 'Eine Installation entfernen';
$l['remove_dir'] = 'Verzeichnis entfernen';
$l['remove_dir_exp'] = 'Wenn Sie diese Option setzen, wird das gesamte Verzeichnis entfernt';
$l['remove_db'] = 'Datenbank entfernen';
$l['remove_db_exp'] = 'Wenn diese Option gesetzt wird, wird die Datenbank entfernt';
$l['remove_dbuser'] = 'Datenbank Benutzer entfernen';
$l['remove_dbuser_exp'] = 'Wenn diese Option gesetzt wird, wird der Datenbank Benutzer ebenfalls entfernt';
$l['remove_conf'] = 'Diese Aktionen sind unwiderruflich! \n Sind Sie sicher, dass Sie diese Installation entfernen wollen?';
$l['uninstalled'] = 'Die Installation wurde erfolgreich entfernt';
$l['removeins'] = 'Installation entfernen';
$l['ins_cron_command'] = 'Cron Befehl';
$l['remove_datadir'] = 'Daten Verzeichnis entfernen';
$l['remove_datadir_exp'] = 'Wenn diese Option gesetzt wird, wird das Daten Verzeichnis entfernt.';
$l['ins_datadir'] = 'Daten Verzeichnis';
$l['remove_wwwdir'] = 'Web Verzeichnis entfernen';
$l['remove_wwwdir_exp'] = 'Wenn diese Option gesetzt wird, wird das Web Verzeichnis entfernt.';
$l['ins_wwwdir'] = 'Web Verzeichnis';
$l['return'] = 'zurück zur Übersicht';
$l['prog_removing'] = 'Entferne ';// Dont remove the trailing space
$l['prog_remove_complete'] = 'Installation entfernt.';
$l['disabled_script_info'] = 'Keine Informationen verfügbar, da diese Anwendung deaktiviert wurde.';

$l['wpc_return'] = 'Return to Installations';