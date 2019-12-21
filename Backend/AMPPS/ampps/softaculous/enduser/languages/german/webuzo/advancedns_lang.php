<?php

//////////////////////////////////////////////////////////////
//===========================================================
// advancedns_lang.php
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

$l['connect_error'] = 'Upps, es ist ein Fehler bei der Verbindung zum <strong>Server</strong> aufgetreten';
$l['err_invalid_data'] = 'Bitte geben Sie Daten ein';
$l['no_user'] = 'Bitte geben Sie einen Wert für die <strong>Rekord</strong> Feld';
$l['err_invalid_record'] = 'Sie trat einige ungültige Daten für das Feld Name';
$l['no_ttl'] = 'Bitte geben Sie die TTL';
$l['no_address'] = 'Bitte geben Sie die Adresse';
$l['no_cname'] = 'Bitte geben Sie den CNAME';
$l['no_txt'] = 'Bitte geben Sie die TXT- Daten';
$l['err_invalid_address'] = 'Ungültige IP-Adresse';
$l['err_invalid_cname'] = 'Ungültige Registrierung betragen';
$l['err_invalid_txt'] = 'Ungültige TXT Daten';
$l['err_invalid_ttl'] = 'TTL muss eine positive ganze Zahl sein';
$l['err_domain_exist'] = 'Rekord gibt es bereits';
$l['err_add_msg'] = 'Ein Fehler trat beim addding den Rekord';
$l['err_edit_msg'] = 'Some error occured while editing the record';
$l['err_del_msg'] = 'Einige Fehler beim Löschen des Datensatzes';
$l['edit'] = 'Rekord erfolgreich bearbeitet';
$l['delete'] = 'Erfolgreich gelöschten Datensatz';
$l['invalid_domain'] = 'Ungültige Domain';
$l['err_norecord'] = 'Keine aufzeichnung gefunden';
$l['no_type'] = 'Invalid type';

// Theme Strings
$l['<title>'] = APP.' - Advance-DNS-Einstellung';
$l['domain'] = 'Wählen Domain';
$l['advancedns'] = 'Advance- DNS-Einstellung';
$l['submit_button'] = 'Eintrag hinzufügen';
$l['typedefault'] = 'Adresse';
$l['change_final'] = 'Datensatz hinzugefügt';
$l['dns_name'] = 'Name';
$l['dns_ttl'] = 'TTL';
$l['dns_class'] = 'Klasse';
$l['dns_type'] = 'Typ';
$l['dns_record'] = 'Rekord';
$l['dns_option'] = 'Optionen';
$l['record_del_conf'] = 'Sind Sie sicher, dass Sie diesen Datensatz wirklich löschen ?';
$l['record_table'] = 'Zone-Datei Einträge von';
$l['no_dns_recods'] = 'No DNS record(s) found';
$l['service_stop'] = 'Your Bind service is not running currently. Click here to start.';