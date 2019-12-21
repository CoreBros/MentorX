<?php
//////////////////////////////////////////////////////////////
//===========================================================
// dbmanage_lang.php
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

//Error Strings

$l['err_dbname_missing'] = 'Datenbank fehlt';
$l['err_dbuser_missing'] = 'Benutzer fehlt';
$l['err_host_missing'] = 'Host fehlt';
$l['err_db_user'] = 'Ungültige Datenbank oder Benutzer';
$l['err_invalid_host'] = 'Ungültiger Hostname';
$l['err_nodata'] = 'Bitte geben Sie Datenbank / Benutzer an, um Berechtigungen zuzuweisen';
$l['connect_error'] = 'Upps, es ist ein Fehler bei der Verbindung zum <strong>Server</strong> aufgetreten.';

// Theme Strings
$l['<title>'] = APP.' - Datenbanken verwalten';
$l['db_add_label'] = 'Neue Datenbank anlegen';
$l['db_label'] = 'Neue Datenbank';
$l['db_user'] = 'Benutzer';
$l['db_user_add_label'] = 'Neuen Datenbankbenutzer anlegen';
$l['db_user_label'] = 'Neuer Benutzer';
$l['db_user_password'] = 'Passwort';
$l['randpass'] = 'Zufallspasswort generieren';
$l['submitdb'] = 'Anlegen';
$l['submituserdb'] = 'Anlegen';
$l['db_user_name'] = 'Benutzer';
$l['user_db_add_label'] = 'Benutzer zur Datenbank hinzufügen';
$l['user_label'] = 'Benutzer';
$l['db_set_label'] = 'Datenbank';
$l['submitselectuser'] = 'Hinzufügen';
$l['db_headling'] = 'Aktuelle Datenbank';
$l['db_name'] = 'Datenbank';
$l['db_option'] = 'Optionen';
$l['add_new'] = 'Neue hinzufügen';
$l['db_user_headling'] = 'Datenbank Benutzer';
$l['delete'] = 'Datenbank löschen';
$l['db_del_conf'] = 'Sind Sie sicher, dass Sie diese Datenbank entfernen möchten?';
$l['dbuser_del_conf'] = 'Sind Sie sicher, dass Sie diesen Benutzer entfernen möchten?';
$l['err_db_not_found'] = 'Datenbank Feld darf nicht leer sein';
$l['err_invalid_db'] = 'Ungültige Datenbank';
$l['err_exists_db'] = 'Datenbank existiert bereits';
$l['err_long_dbuser'] = 'Der Benutzername darf nicht länger sein als ';
$l['err_char'] = ' Zeichen.';
$l['err_dbuser_not_found'] = 'Benutzer Feld darf nicht leer sein';
$l['err_dbpassword_not_found'] = 'Passwort Feld darf nicht leer sein';
$l['err_invalid_dbuser'] = 'Ungültiger Datenbank Benutzer';
$l['err_exists_dbuser'] = 'Benutzer existiert bereits';

$l['db_user_create_label'] = 'Datenbank Benutzer anlegen';
$l['db_headling_pri'] = 'Rechte';
$l['submitpri'] = 'Änderungen übernehmen';
$l['db_pri'] = 'Rechte';
$l['select_host'] = 'Host auswählen';
$l['local'] = 'localhost';
$l['anyhost'] = 'Jeder Host';
$l['text'] = 'Text Feld benutzen';
$l['submitpri_close'] = 'Abbrechen';
$l['db_pri_updated'] = 'Datenbank Rechte aktualisiert';
$l['db_user_del'] = 'Benutzer erfolgreich gelöscht';
$l['db_db_del'] = 'Datenbank erfolgreich gelöscht';
$l['db_size'] = 'Größe';
$l['pri_option'] = 'ALLE';
$l['db_create'] = 'Datenbank erfolgreich angelegt';
$l['user_added'] = 'Benutzer erfolgreich angelegt';
$l['no_db'] = 'Keine Datenbank gefunden';
$l['err_del_db'] = 'Konnte die Datenbank nicht löschen';
$l['no_dbuser'] = 'Kein Datenbankbenutzer gefunden';
$l['err_del_dbuser'] = 'Konnte den Benutzer nicht löschen';
$l['err_dbcreate'] = 'Konnte keine Datenbank anlegen';
$l['err_dbusercreate'] = 'Konnte keinen Datenbankbenutzer anlegen';
$l['new_pass'] = 'Neues Passwort';
$l['pass_changed'] = 'Benutzer Passwort geändert';
$l['err_editdbuser'] = 'Benutzer Passwort konnte nicht geändert werden';
$l['service_stop'] = 'Your MySQL service is not running currently. Click here to start.';