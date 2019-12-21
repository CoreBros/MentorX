<?php

//////////////////////////////////////////////////////////////
//===========================================================
// addplans_lang.php
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

$l['<title>'] = 'Softaculous - Benutzer Liste';
$l['title'] = 'Benutzer Liste';
$l['user_name'] = 'Benutzername';
$l['owner'] = 'Besitzer';
$l['login'] = 'Login';
$l['api_key'] = 'API Key';
$l['api_pass'] = 'API Passwort';
$l['number_of_users'] = 'Anzahl der Benutzer';
$l['option'] = 'Optionen';
$l['no_users'] = 'Keine Benutzer verfügbar';
$l['adduser'] = 'Benutzer hinzufügen';
$l['del_user'] = 'Benutzer löschen?';
$l['del_res_user'] = 'Reseller löschen?<br/> <b>Alle Sub Benutzer, die dieser Reseller erstellt hat werden ebenfalls gelöscht.</b>';
$l['delete'] = 'Benutzer wurde erfolgreich gelöscht';
$l['edit'] = 'Benutzer wurde erfolgreich editiert';

$l['no_username'] = 'Bitte geben Sie den Benutzernamen ein, der erstellt werden soll.';
$l['no_number_of_users'] = 'Bitte geben Sie die Anzahl der Bentzer ein.';
$l['user_exists'] = 'Der Benutzer existiert bereits. Versuchen Sie einen anderen Benutzernamen.';
$l['err_domain'] = 'Konnte Domain nicht löschen: ';

$l['no_planname'] = 'Bitte geben Sie den Plan Namen an';
$l['invalidfilename'] = 'Bitte geben Sie einen gültigen Plan Name an. Sonderzeichen sind nicht erlaubt.';
$l['no_cpplan'] = 'Bitte wählen Sie einen gültigen Control Panel Plan';
$l['plan_exist'] = 'Ein Plan mit demselben Namen existiert bereits';
$l['error_plans'] = 'Bitte wählen Sie mindestens einen Benutzer oder Control Panel Plan';
$l['user_plan_exist'] = 'Benutzer - <b>&soft-1;</b> - ist/sind bereits einem anderen Plan zugeordnet. Um dies zu überschreiben wählen Sie die Überschreiben Option';
$l['reseller_plan_exist'] = 'Reseller - <b>&soft-1;</b> - ist/sind bereits einem anderen Plan zugeordnet. Um dies zu überschreiben wählen Sie die Überschreiben Option';
$l['error_cpplan'] = 'Bitte wählen Sie einen gültigen Control Panel Plan';
$l['error_scriptselect'] = 'Bitte wähen Sie mindestens eine Anwendung aus';
$l['error_disable'] = 'Bitte wählen Sie die Check Box aus, wenn Sie '.APP.' für die ausgewählten Benutzer <b>deaktivieren</b> wollen.';
$l['error_userselect'] = 'Bitte wählen Sie mindestens einen Benutzer aus';
$l['error_resellerselect'] = 'Bitte wählen Sie mindestens einen Reseller aus';
$l['cpplan_plan_exist'] = 'Control Panel Plan / Pläne - <b>&soft-1;</b> - ist / sind bereits einem anderen Plan zugeordnet. Um dies zu überschreiben wählen Sie die Überschreiben Option';
$l['err_prefix'] = '\'reseller_\' kann nicht als Präfix für den Plannamen benutzt werden.';
$l['connect_error'] = 'Verbindungsfehler';
$l['err_user_nof'] = 'Nur Reseller können eine Anzahl an Benutzern haben';

//Theme Strings
$l['user_details'] = 'Benutzer Details';
$l['username'] = 'Benutzername';
$l['exp_username'] = 'Alle Buchastaben werden als Kleinbuchstaben gespeichert. Benutzen Sie keine Leerzeichen.';
$l['number_of_users'] = 'Anzahl der Benutzer';
$l['exp_number_of_users'] = 'Anzahl an Sub Benutzern, die dem benutzer erlaubt sind';
$l['cplanname'] = 'Control Panel Pläne';
$l['exp_cplan'] = 'Control Panel Pläne';
$l['no_cpplans'] = 'Bitte wählen Sie einen Control Panel Plan aus';
$l['saveplan'] = 'Plan speichern';
$l['userselect'] = 'Benutzer Zuordnung';
$l['resellerselect'] = 'Reseller Zuordnung';
$l['exp_userselect'] = 'Die Benutzer auswählen, die zu dieser Zugriffsgruppe gehören.';
$l['exp_resellerselect'] = 'Die Reseller auswählen, die zu dieser Zugriffsgruppe gehören.';
$l['scriptselect'] = 'Anwendungs Zuordnung';
$l['exp_scriptselect'] = 'Anwendungen für diesen Plan auswählen.';
$l['done'] = 'Der Benutzer wurde erfolgreich gelöscht.';
$l['plan_save_fail'] = 'Konnte die Plan Details nicht speichern';
$l['cpanelplan'] = 'Control Panel Plan Zuordnung';
$l['cpplanselect'] = 'Die Control Panel Pläne auswählen, auf welche diese ACL zutrifft. Alle Benutzer in diesem Plan werden nur die Anwendungen nutzen können, die hier angegeben sind.';
$l['default_plan_note'] = 'HINWEIS: Bitte geben Sie diesen Plan als \'<b>softaculous_default</b>\' an, um einen Standardplan für alle Benutzer zu erstellen, die keinem anderen Softaculous Plan zugeordnet sind.';
$l['select_all'] = 'Alle auswählen:';
$l['overwrite_settings'] = 'Einstelleungen Überschreiben:';
$l['uid'] = 'UID';
$l['gid'] = 'GID';

$l['err_no_user'] = 'User does not exist!';
$l['err_no_root_del'] = 'root user cannot be deleted !';
$l['err_invalid_email'] = 'Please provide valid Email';