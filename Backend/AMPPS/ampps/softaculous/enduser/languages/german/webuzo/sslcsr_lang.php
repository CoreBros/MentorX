<?php

//////////////////////////////////////////////////////////////
//===========================================================
// sslcsr_lang.php
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

$l['long_country'] = 'Der angegebene Länder Code ist zu lang. Bitte geben Sie einen zwei Zeichen langen Länder Code an.';
$l['no_country'] = 'Kein Länder Code angegeben';
$l['no_state'] = 'Kein Bundesland oder Gebiet (State or province) angegeben';
$l['no_locality'] = 'Keine Ortschaft (locality) angegeben';
$l['no_organisation'] = 'Keine Organisation oder Firma (Organisation or Company) angegeben';
$l['no_org_unit'] = 'Organisation Branch/Division Name nicht angegeben';
$l['no_pass'] = 'Keine Passphrase angegeben';
$l['no_email'] = 'Keine E-Mail Adresse angegeben';
$l['no_domain'] = 'Keine Domain angegeben';
$l['done'] = 'SSL Dateien erfolgreich erstellt und installiert';
$l['invalid_email'] = 'Die angegebene E-Mail Adresse ist ungültig';
$l['create_csr'] = 'Zertifikats Request (Certificate Signing Requests) erfolgreich erstellt';
$l['error_saving'] = 'Es sind Fehler beim erstellen des Zertifikat Requests (Certificate Signing Requests) aufgetreten';
$l['long_pass'] = 'Die Passphrase ist zu kurz. Bitte geben Sie eine mindestens 4 Zeichen lange Passphrase an';
$l['err_invalid_pass'] = 'Ungültige Passphrase.';
$l['err_invalid_country'] = 'Ungültiger Länder Code.';
$l['invalid_domain'] = 'Ungültige Domain';
$l['nocsr'] = 'Dieser CSR Eintrag wurde nicht gefunden.';

//Theme Strings
$l['<title>'] = ''.APP.' - Certificate Signing Requests';
$l['lbl_head'] = 'Certificate Signing Requests (CSR)';
$l['no_key_file'] = 'Bitte geben Sie die Datei des privaten Schlüssels für die ausgewählte Domain an.';
$l['description'] = 'Beschreibung';
$l['key'] = 'key';
$l['genrate'] = 'Neuen 2048 bit Schlüssel generieren';
$l['domain_desc'] = 'Geben Sie die FQDNs an, die Sie absichern wollen. Sie können eine Wildcard Domain nutzen, indem Sie einen Stern in den Domain Namen setzen in folgender Form: ';
$l['domain'] ='Domain';
$l['country'] = 'Länder Code';
$l['country_desc'] = '2 Zeichen Abkürzung z.B. DE oder US';
$l['state'] = 'Bundesland (state)';
$l['state_desc'] = 'Name des Bundeslandes oder des Gebiets';
$l['locality'] = 'Ortschaft (locality)';
$l['locality_desc'] = 'Name der Stadt';
$l['organisation'] = 'Firmenname (Company Name)';
$l['organisation_desc'] = 'Name Ihrer Firma oder Organisation';
$l['org_unit'] = 'Branche (Company Branch)';
$l['org_unit_desc'] = 'Name der Branche oder Abteilung (Organisation branch or Division)';
$l['pass_pharse'] = 'Passphrase';
$l['pass_pharse_desc'] = 'Die Passphrase ist die gleiche wie das Passwort.';
$l['email'] = 'E-Mail Adresse';
$l['email_desc'] = 'Ihre E-Mail Adresse';
$l['createcsr'] = 'erstellen';
$l['cert_file'] = 'HOST';
$l['option'] = 'OPTIONEN';
$l['record_del_conf'] = 'Wollen Sie diesen CSR (Certificate Signing Requests) löschen?';
$l['delete'] = 'Certificate Signing Request(CSR) erfolgreich gelöscht';
$l['some_error'] = 'Es sind Fehler beim Löschen des Certificate Signing Request(CSR) aufgetreten';
$l['connect_error'] = 'Upps! Es ist ein Fehler beid er Verbindung zum <strong>Server</strong> aufgetreten';
$l['cert'] = 'Certificate Signing Request Datei von ';
$l['info'] = 'Informationen der Certificate Signing Requests';
$l['close_detail'] = 'Details schließen';
$l['no_csr_found'] = 'No CSR record found.';





