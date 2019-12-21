<?php

//////////////////////////////////////////////////////////////
//===========================================================
// installations_lang.php
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

$l['no_submit'] = 'Es wurde keine Installation zum Versenden ausgewählt.';
$l['no_ins_selected'] = 'Es wurde keine Installation für das Upgrade ausgewählt.';
$l['user_soft_upd_sub'] = 'Anwendungsupdates verfügbar';
$l['posix_error'] = 'Die POSIX Funktion ist deaktiviert. Bitte aktivieren Sie die POSIX Funktion um Upgrades Ihrer Installationen durchzuführen.';
$l['shellexec_error'] = 'Die exec Funktion ist deaktiviert. Bitte aktivieren Sie die exec Funktion um Upgrades Ihrer Installationen durchzuführen.';
$l['user_soft_upd'] = 'Diese E-Mail bezieht sich auf die veraltete Version von bestimmten PHP Skripten, die Sie installiert haben. Aus Sicherheitsgründen sollten Sie diese veralteten Installationen so bald wie möglich updaten.
Die folgenden Anwendungsupdates sind verfügbar:

&soft-1;
Um diese Anwendungen zu aktualisieren navigieren Sie zu Ihrem Control Panell -> '.APP.' -> Installationen.
Dort können Sie die Anwendungen aktualisieren.

Ihr System Administrator';
$l['no_reseller_upgrade_ins'] = 'Resellers are not allowed to auto upgrade installations';

//Theme Strings
$l['<title>'] = APP.' - Liste der Installationen';
$l['searchinstallations'] = 'Installationen suchen';
$l['search_scripts'] = 'Anwendungen';
$l['search_scripts_exp'] = 'Leer lassen um alle auszuwählen. Mehrere Anwendungen trennen Sie mit \'<b>;</b>\'';
$l['search_users'] = 'Benutzer';
$l['search_users_exp'] = 'Leer lassen um alle auszuwählen. Mehrere Benutzer trennen Sie mit \'<b>;</b>\'';
$l['group_by_scripts'] = 'nach Anwendungen gruppieren';
$l['group_by_scripts_exp'] = 'Standard ist, nach Benutzern zu gruppieren';
$l['only_outdated'] = 'Nur veraltete Installationen anzeigen';
$l['only_outdated_exp'] = 'Standardmäßig werden alle Installationen angezeigt';
$l['li_user'] = 'Benutzer';
$l['li_scripts'] = 'Anwendungen';
$l['li_domains'] = 'Domains';
$l['li_url'] = 'URL';
$l['li_insver'] = 'Installierte Version';// Installed Ver
$l['li_ver'] = 'Version';
$l['li_realver'] = 'richitige Version';
$l['no_results'] = 'keine Ergebnisse';
$l['search_ins'] = 'Suchen';
$l['with_selected'] = 'mit ausgewählten';
$l['sub_email_users'] = 'E-Mail Benutzer neuerer Versionen';
$l['emailed_users'] = 'Die Benutzer der ausgewählten Installationen wurden über die verfügbaren Updates benachrichtigt.';
$l['sub_upgrade_ins'] = 'Upgrade';
$l['upgrading_ins'] = 'Führe Upgrade der Installationen aus...';
$l['upgraded_ins'] = 'Der automatische Upgrade Prozess ist abgeschlossen. Die Details wurden per E-Mail versendet.';
$l['upgraded'] = 'Upgegradet';
$l['failed'] = 'Fehlgeschlagen';
$l['go_to_autoupgrade'] = 'Gehe zur Liste';
$l['upgrading_completed'] = 'Upgrade abgeschlossen';
$l['beta_note'] = '<b>HINWEIS</b>: Dieses Feature ist im <b>BETA STATUS</b>. <a href="http://softaculous.com/docs/Auto_Upgrade" target="_blank">Mehr erfahren...</a>';
$l['wait_note'] = '<b>HINWEIS</b> : Bitte verlassen Sie diese Seite nicht bis alle Installationen upgegradet wurden.';
$l['tasklist_button'] = 'Aufgaben Liste';
$l['auto_upgrade_enabled'] = 'Auto Upgrade aktiviert';
$l['real_ver_notice'] = 'Die richtige Version stimmt nicht mit den '.APP.' Aufzeichnungen überein. Es sieht danach aus, dass der Benutzer die Installation(en) manuell aktualisiert hat.';
$l['latest_ver_notice'] = 'Neuste Version ist für die Installation(en) verfügbar.';
$l['update_records'] = APP.' Aufzeichnungen aktualisieren';
$l['no_submit_rec'] = 'Es wurden keine Installationen zum aktualisieren der '.APP.' Aufzeichnungen ausgewählt.';
$l['err_update_record'] = 'Es ist ein Fehler beim Aktualisieren der Version in '.APP.' Aufzeichnungen aufgetreten.';
$l['succ_update_record'] = 'Die Version für die ausgwählte(n) Installation(en) wurde erfolgreich in den '.APP.' Aufzeichnungen aktualisiert.';
$l['only_realversion'] = 'Richtige Version anzeigen';
$l['only_realversion_exp'] = 'Wenn diese Option gesetzt ist wird '.APP.' versuchen die richtige Version der Installationen herauszufinden.<br /><b>Hinweis</b>: Dies kann einen Augenblick dauern, da in den Dateien der Installation nach der Version gesucht wird.';
$l['no_info'] = 'Keine Info';
$l['search_domains'] = 'Domains';
$l['search_domains_exp'] = 'Leer lassen für alle. Mehrere Domains mit \'<b>;</b>\' trennen.';

$l['auto_upgrade_major'] = '(Major and Minor)'; 
$l['auto_upgrade_minor'] = '(Minor)';