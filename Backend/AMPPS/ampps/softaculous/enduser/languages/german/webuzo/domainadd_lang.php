<?php

//////////////////////////////////////////////////////////////
//===========================================================
// domainadd_lang.php
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

$l['err_invalid_domain'] = 'Die eingegebene Domain ist ungültig';
$l['err_exits_domain'] = 'Die eingegebene Domain existiert bereits';
$l['not_selected'] = 'Domain nicht ausgewählt';
$l['already_exists'] = 'Das Verzeichnis existiert bereits';
$l['park_instead_addon'] = 'Eine Domain mit diesem Pfad existiert bereits. fügen Sie diese Domain daher bitte als geparkt hinzu.';
$l['domain_not_exists'] = 'Die ausgewählte Domain existiert nicht';
$l['domain_path_not_found'] = 'Ungültiger Pfad für die Domain.';
$l['domain_exists'] = 'Diese Domain existiert bereits';
$l['invalid_ip'] = 'Ungültige IP Adresse für die Domain angegeben.';

//Theme Strings
$l['<title>'] = 'Neue Domain hinzufügen';
$l['submitdomain'] = 'Domain hinzufügen';
$l['domain_label'] = 'Domain';
$l['is_addon_part'] = 'Is Domain Addon or Parked?';
$l['domain_path'] = 'Domain Pfad  ';
$l['domain_add_label'] = 'Neue Domain hinzufügen';
$l['domain_not_found'] = 'Domain Name wurde nicht gefunden';
$l['suc_dom_added'] = 'Die Domain wurde hinzugefügt';
$l['lbl_db_manage'] = 'Zurück zu Domain verwalten';
$l['select_domain'] = 'Domain auswählen';
$l['exp_checkaddon'] = 'Nach Addons prüfen und als geparkt markieren';
$l['domain_not_added'] = 'Upps!!! Es sind Fehler beim Hinzufügen der Domain aufgetreten';
$l['ip_label'] = 'IP Adresse (Optional) ';
$l['exp_ip'] = 'Andere IP Adresse für Domain';
$l['validate_mails_label'] = 'Mail Validation records (Optional)';
$l['exp_validate_mails'] = 'Tick to add SPF, DKIM and DMARC records in the DNS';
$l['only_subdomain'] = 'You have permission to create sub domains only';
$l['issue_lecert_label'] = 'Issue Let\'s Encrypt certificate';
$l['exp_issue_lecert'] = 'Tick to issue SSL certificate from LE for the new domain';
$l['suc_dom_added'] = 'Domain added successfully.<br/>Return to <a href="'.$globals['index'].'act=domainmanage">Manage Domain</a>';