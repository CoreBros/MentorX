<?php

//////////////////////////////////////////////////////////////
//===========================================================
// sslcrt_lang.php
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
$l['long_country'] = 'Der angegebene Länder Code (Country Code) ist zu lang. Bitte geben Sie einen 2 Zeichen langen Länder Code ein';
$l['no_country'] = 'Kein Länder Code (Country Code) angegeben';
$l['no_state'] = 'Kein Bundesland oder Gebiet (State or province) angegeben';
$l['no_locality'] = 'Keine Ortschaft (locality) angegeben';
$l['no_organisation'] = 'Keine Organisation oder Firma (Organisation or Company) angegeben';
$l['no_org_unit'] = 'Organisation Branch/Division Name nicht angegeben';
$l['no_email'] = 'Keine E-Mail angegeben';
$l['done'] = 'SSL Dateien erfolgreich erstellt und installiert';
$l['invalid_email'] = 'Die angegebene E-Mail Adresse ist ungültig';
$l['create_csr'] = 'Zertifikats Request (Certificate Signing Requests) erfolgreich erstellt';
$l['error_saving'] = 'Es sind Fehler beim erstellen des Zertifikat Requests (Certificate Signing Requests) aufgetreten';
$l['no_key_file'] = 'Bitte geben Sie die Datei des privaten Schlüssels (Private Key) für die ausgewählte Domain an';
$l['no_crt'] = 'Bitte geben Sie das Zertifikat zum Hochladen an';
$l['no_dot_crtfile'] = 'Ungültiges Datei Format. Geben Sie bitte eine .crt Datei an.';
$l['save_crt'] = 'Zertifikat wurde erfolgreich hochgeladen';
$l['create_crt'] = 'Zertifikat wurde erfolgreich generiert';
$l['error_create_crt'] = 'Es sind Fehler beim generieren des Zertifikats aufgetreten.';
$l['err_invalid_country'] = 'Ungültiger Länder Code (Country Code)';
$l['invalid_domain'] = 'Ungültige Domain';
$l['nocrt'] = 'Kein Zertifikat gefunden';
$l['no_domain'] = 'Es wurde keine Domain angegeben';
$l['no_cert_present'] = 'Es wurden keine Zertifikate gefunden';

//Theme Strings
$l['<title>'] = ''.APP.' - Zertifikate';
$l['lbl_head'] = 'Zertifikate';
$l['description'] = 'Beschreibung';
$l['key'] = 'key';
$l['genrate_key'] = 'Neuen 2048 bit Schlüssel generieren';
$l['domain_desc'] = 'Geben Sie die FQDNs an, die Sie absichern wollen. Sie können eine Wildcard Domain nutzen, indem Sie einen Stern in den Domain Namen setzen in folgender Form: ';
$l['domain'] ='Domain';
$l['country'] = 'Länder Code (Country Code)';
$l['country_desc'] = '2 Zeichen Abkürzung z.B. DE oder US';
$l['state'] = 'Bundesland (state)';
$l['state_desc'] = 'Name des Bundeslandes oder des Gebiets';
$l['locality'] = 'Ortschaft (locality)';
$l['locality_desc'] = 'Name der Stadt';
$l['organisation'] = 'Firmenname (Company Name)';
$l['organisation_desc'] = 'Name Ihrer Firma oder Organisation';
$l['org_unit'] = 'Branche (Company Branch)';
$l['org_unit_desc'] = 'Name der Branche oder Abteilung (Organisation branch or Division)';
$l['comname'] = 'Host';
$l['comname_desc'] = 'Ihr Name oder der Name Ihres Servers';
$l['email'] = 'E-Mail Adresse';
$l['email_desc'] = 'Ihre E-Mail Adresse';
$l['long_country'] = 'Der angegebene Länder Code ist zu lang. Bitte geben Sie einen 2 Zeichen Code an';
$l['no_country'] = 'Es wurde kein Länder Code angegeben';
$l['no_state'] = 'Kein/e Bundesland (state) oder Ort (province) angegeben';
$l['no_locality'] = 'Keine Ortschaft (locality) angegeben';
$l['no_organisation'] = 'Kein Firmenname oder Branche angegeben';
$l['no_comname'] = 'Kein Hostname angegeben';
$l['no_email'] = 'Keine E-Mail Adresse angegeben';
$l['done'] = 'SSL Dateien erfolgreich erstellt und installiert';
$l['invalid_email'] = 'Die eingegebene E-Mailadresse ist ungültig';
$l['genrate'] = 'Zertifikat generieren';
$l['upload'] = 'Neues Zertifikat hochladen';
$l['install_button'] = 'hochladen';
$l['createcrt'] = 'erstellen';
$l['paste'] = 'Fügen Sie Ihr Zertifikat hier ein';
$l['or'] = 'ODER';
$l['choose_file'] = 'Wählen Sie die .crt Datei aus';
$l['note'] = '<strong>HINWEIS: </strong>Sie müssen einen Schlüssel generieren oder hochladen, bevor SieZertifikate generieren können.';
$l['cert_file'] = 'HOST';
$l['option'] = 'OPTIONEN';
$l['record_del_conf'] = 'Wollen Sie dieses Zertifikat löschen?';
$l['delete'] = 'Zertifikat erfolgreich gelöscht';
$l['some_error'] = 'Es sind Fehler beim löschen des Zertifikats aufgetreten';
$l['connect_error'] = 'Upps! Es ist ein Fehler bei der Verbindung zum <strong>Server</strong> aufgetreten';
$l['cert'] = 'Zertifikatsdatei von ';
$l['info'] = 'Informationen des Zertifikats';
$l['close_detail'] = 'Details schließen';
