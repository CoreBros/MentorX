<?php

//////////////////////////////////////////////////////////////
//===========================================================
// ftp_lang.php
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

$l['no_quota_limit'] = 'Bitte geben Sie das Quota Limit ein';
$l['err_invalid_quotalimit'] = 'Das Quota Limit muss eine positive Ganzzahl sein.';
$l['err_del_msg'] = 'Es sind Fehler beim Entfernen des FTP Benutzers aufgetreten. Bitte versuchen Sie es erneut.';
$l['err_update_msg'] = 'Es sind Fehler beim aktualisieren des FTP Benutzers aufgetreten. Bitte veruchen Sie es erneut.';
$l['err_used_quotalimit'] = 'Sie benutzen mehr als den Ihnen zugewiesenen Speicherplatz';
$l['err_noftpuser'] = 'Der FTP Benutzer existiert nicht';

//Theme Strings
$l['<title>'] = 'FTP verwalten';
$l['ftp_head'] = 'FTP verwalten';
$l['add_new'] = 'Neuen FTP Benutzer hinzufügen';
$l['return'] = 'Zurück zu Home';
$l['record_del_conf'] = 'Sind Sie sicher, dass Sie diesen FTP Benutzer löschen wollen?';
$l['delete'] = 'FTP Benutzer erfolgreich gelöscht.';
$l['ftp_name'] = 'Benutzername';
$l['ftp_path'] = 'Verzeichnis';
$l['ftp_option'] = 'Optionen';
$l['ftp_quota'] = 'Quota';
$l['ftp_quota_unlimit'] = 'unbegrenzt';
$l['unlimited'] = 'unbegrenzt';
$l['connect_error'] = 'Upps! Es ist ein Fehler bei der Verbindung zum <strong>Server</strong> aufgetreten';
$l['cpass'] = 'Passwort ändern';
$l['limited'] = 'MB';
$l['update'] = 'Quota für FTP Benutzer erfolgreich aktualisiert';
$l['ftp_usage'] = 'Benutzung';
$l['service_stop'] = 'Your Pure-FTPd service is not running currently. Click here to start.';
$l['is_domain_resolve'] = 'Your Domain does not resolve to the server IP ! So use the IP as Host instead of the domain name, while connecting.';