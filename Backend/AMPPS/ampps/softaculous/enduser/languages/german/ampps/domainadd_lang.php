<?php

//////////////////////////////////////////////////////////////
//===========================================================
// import_lang.php
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

$l['err_invalid_domain'] = 'Der eingegebene Domain ist ungültig';
$l['err_exits_domain'] = 'Die eingereichten Domäne ist bereits vorhanden';
$l['not_selected'] = 'Domain nicht spezifiert';
$l['already_exists'] = 'Das Verzeichnis existiert bereits';
$l['park_instead_addon'] = 'Eine Domain zeigt auf diesem Weg ist bereits vorhanden. Daher fügen Sie bitte diese Domain als reservierte Domain .';
$l['domain_not_exists'] = 'Die gewählte Domäne ist nicht vorhanden';
$l['err_host'] = 'IP kann nicht in Hosts-Datei hinzugefügt werden. Bitte deaktivieren Sie die Option Erweiterte Einstellungen in';
$l['err_primary_exists'] = 'Sie können nicht 127.0.0.1 oder localhost als Domäne hinzugefügt';

//Theme Strings
$l['<title>'] = 'Neue Domain hinzufügen';
$l['submitdomain'] = 'Domain hinzufügen';
$l['domain_label'] = 'Domain';
$l['is_addon_part'] = 'Ist Domain Addon oder geparkt ?';
$l['domain_path'] = 'Domain-Pfad';
$l['domain_add_label'] = 'Neue Domain hinzufügen';
$l['domain_not_found'] = 'Domain -Name nicht gefunden';
$l['suc_dom_added'] = 'Hinzugefügt wurde die Domain';
$l['lbl_domain_manage'] = 'Gehen Sie zu Domain verwalten';
$l['select_domain'] = 'Wählen Domain';
$l['exp_checkaddon'] = 'Prüfen Sie, ob Addon & Deaktivieren Sie die Option für geparkte';
$l['host_entry'] = 'Fügen Sie einen Eintrag , um Datei zu hosten?';
$l['exp_hostadd'] = 'Überprüfen Sie , um einen Eintrag hinzuzufügen';
if($globals['os'] == 'windows'){
	$l['exp_dompath'] = '<br /> Geben Sie den Domain-Pfad zB C:/Ampps/meine_seite';
}else{
	$l['exp_dompath'] = '<br />Geben Sie den Domain-Pfad zB /Applications/AMPPS/meine_seite';
}
$l['ssl_entry'] = 'Fügen Sie ein SSL- Eintrag?';
$l['exp_ssl'] = 'Überprüfen Sie , um eine SSL -Eintrag hinzufügen';
$l['hosts_perms'] = 'Zugang verweigert: Sie haben keine Berechtigung, die Hosts datei zu ändern. Die Einträge werden der Host Datei nicht hinzugefügt.';

