<?php

//////////////////////////////////////////////////////////////
//===========================================================
// install_cert_lang.php
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

$l['no_key'] = 'Bitte geben Sie den privaten Schlüssel zum Hochladen an';
$l['no_crt'] = 'Bitte geben Sie das Zertifikat zum Hochladen an';
$l['error_inst'] = 'Es sind Fehler beim Installieren des Zertifikats aufgetreten';
$l['save_key'] = 'Zertifikat erfolgreich installiert.';
$l['invalid_domain'] = 'Ungültige Domain';
$l['nokey'] = 'Kein Eintrag gefunden';
$l['no_cert_installed'] = 'Es wurden keine installierten Zertifikate gefunden';

//Theme Strings
$l['<title>'] = ''.APP.' - Zertifikat installieren';
$l['lbl_head'] = 'Zertifikat installieren';
$l['domain'] = 'Domain auswählen';
$l['install_button'] = 'installieren';
$l['fatch_button'] = 'Fetch';
$l['paste_key'] = 'Fügen Sie den Schlüssel hier ein';
$l['paste_crt'] = 'Fügen Sie Ihr Zertifikat hier ein';
$l['paste_ca'] = 'Fügen Sie das CA Bundle hier ein (optional)';
$l['cert_file'] = 'HOST';
$l['option'] = 'OPTIONEN';
$l['record_del_conf'] = 'Wollen Sie dieses Zertifikat löschen?';
$l['delete'] = 'Zertifikat erfolgreich gelöscht';
$l['some_error'] = 'Es sind Fehler beim löschen des Zertifikats aufgetreten';
$l['some_detail_error'] = 'Keine Daten gefunden. Bitte fügen Sie Ihren Schlüseel und Ihr Zertifikat ein.';
$l['connect_error'] = 'Upps! Es ist ein Fehler bei der Verbindung zum <strong>Server</strong> aufgetreten';
$l['use_for_panel'] = 'Dieses Zertifikat für das Webuzo Panel benutzen';
$l['exp_use_for_panel'] = 'Wenn diese Option gesetzt ist wird das selbe Zertifikat für das Webuzo Panel benutzt';
