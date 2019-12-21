<?php

//////////////////////////////////////////////////////////////
//===========================================================
// categories_lang.php
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

$l['saving_error'] = 'Es sind Fehler beim speichern der Einstellungen aufgetreten.';

//Theme Strings
$l['<title>'] = APP.' - Automatische Aktualisierung für Anwendungen abschalten';
$l['settings_saved'] = 'Die Einstellungen wurden erfolgreich gespeichert.';
$l['show_top_scripts'] = 'Automatische Aktualisierung abschalten';
$l['show_top_scripts_exp'] = 'Der Name der Kategorie der Top Anwendungen.';
$l['soft_free_note'] = 'HINWEIS: In der kostenfreiien Version von '.APP.' ist die Auswahl der Top 14 Anwendungen deaktiviert.';
$l['savescript'] = 'Anwendungen speichern';
$l['select_top_scripts'] = 'Anwendungen auswählen';
$l['selected_top_scripts'] = 'Ihre ausgewählten Anwendungen';
$l['select_from_below'] = 'Wählen Sie unten Ihre Anwendungen';
$l['script_note_exp'] = 'Wenn KEIN Wert angegeben ist, wird '.APP.' sein eigene Formel benutzen um die load zu berechnen und dann die Installation(en) upgraden.<br />Die Formel ist wie folgt: <strong>load = Server_Uptime / Anzahl_der_Kerne;</strong> <br />Nur wenn die load unter 0.70 liegt wird '.APP.' die Installation(en) aktualisieren.';
$l['script_note'] = 'Hinweis';


$l['planhead'] = 'Globale Einstellungen für alle Anwendungen, die automatisch aktualisiert werden können';
$l['uptime'] = 'Server load Limit setzen';
$l['exp_uptime'] = 'Der Wert kann z. B. auf 5 gesetzt werden. Wenn '.APP.' dann versucht eine Installation zu aktualisieren, wird es erst die load abfragen. Nur wenn der Wert unter dem angegeben Wert liegt wird die Aktualisierung gestartet.';
$l['save'] = 'speichern';
$l['scriptselect'] = 'Anwendungen';
$l['disable_autoupgrade'] = 'Automatische Aktualisierungen abschalten';
$l['disable_autoupgrade_exp'] = 'Wenn diese Option gestezt ist, wird die automatische Aktualisierung von Anwendungen abgeschaltet und Endbenutzer werden keine Möglichkeit haben diese im Endbnutzer Panel zu aktivieren.';
$l['exp_scriptselect'] = 'Wählen Sie die Anwendungen für die die automatische Aktualisierung abgeschaltet werden soll.';
$l['done'] = 'Ihr Plan wurde gespeichert. Your plan has been saved. Return to <a href="'.$globals['index'].'act=plans">Plans Overview</a>';
$l['select_all'] = 'Alle Auswählen: ';

