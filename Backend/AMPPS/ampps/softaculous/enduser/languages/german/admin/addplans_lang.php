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

$l['no_planname'] = 'Bitte geben Sie den Namen für den Plan an';
$l['invalidfilename'] = 'Bitte geben Sie einen gültigen Plan Namen an. Sonderzeichen sind nicht erlaubt.';
$l['no_cpplan'] = 'Bitte wählen Sie einen gültigen Control Panel Plan aus';
$l['plan_exist'] = 'Es existiert bereits ein Plan mit diesem Namen';
$l['error_plans'] = 'Bitte wählen Sie mindestens einen Benutzer oder Control Panel Plan aus';
$l['user_plan_exist'] = 'Benutzer - <b>&soft-1;</b> - ist / sind bereits in einem anderen Plan enthalten. Um diese Einstellung zu überschreiben, wählen Sie bitte die entsprechende Option aus.';
$l['reseller_plan_exist'] = 'Reseller - <b>&soft-1;</b> - ist / sind bereits in einem anderen Plan enthalten. Um diese Einstellung zu überschreiben, wählen Sie bitte die entsprechende Option aus.';
$l['error_cpplan'] = 'Bitte wählen Sie einen gültigen Control Panel Plan aus';
$l['error_scriptselect'] = 'Bitte wählen Sie mindestens eine Anwendung aus';
$l['error_disable'] = 'Bitte markieren Sie die Checkbox, wenn Sie '.APP.' für die ausgewählten Benutzer <b>deaktivieren</b> wollen';
$l['error_userselect'] = 'Bitte wählen Sie mindestens einen Benutzer aus.';
$l['error_resellerselect'] = 'Bitte wählen Sie mindestens einen Reseller aus.';
$l['cpplan_plan_exist'] = 'Control Panel Pläne - <b>&soft-1;</b> - sind bereits in einem anderen Plan enthalten. Um diese Einstellung zu überschreiben, wählen Sie bitte die entsprechende Option aus.';
$l['err_prefix'] = '\'reseller_\' darf nicht als Präfix für Ihren Plan Namen gewählt werden.';
$l['no_plan_support'] = 'Plans feature is not supported on this panel';

//Theme Strings
$l['<title>'] = APP.' - Zugangskontrolle';
$l['title'] = 'Zugangskontrollpläne hinzufügen';
$l['planhead'] = 'Einstellungen für Zugangskontrolle';
$l['planname'] = 'Plan Name';
$l['exp_plan'] = 'Zugangskontrollplan Name';
$l['cplanname'] = 'Control Panel Pläne';
$l['exp_cplan'] = 'Control Panel Pläne';
$l['no_cpplans'] = 'Bitte wählen Sie einen Control Panel Plan';
$l['saveplan'] = 'Plan speichern';
$l['userselect'] = 'Benutzer Auswahl';
$l['resellerselect'] = 'Reseller Auswahl';
$l['exp_userselect'] = 'Wählen Sie die Benutzer, die in dieser Gruppe enthalten sein sollen.';
$l['exp_resellerselect'] = 'Wählen Sie die Reseller, die in dieser Gruppe enthalten sein sollen.';
$l['scriptselect'] = 'Auswahl der Anwendungen';
$l['exp_scriptselect'] = 'Wählen Sie die Anwendungen für diesen Plan';
$l['done'] = 'Ihr Plan wurde gespeichert. Gehen Sie zur <a href="'.$globals['index'].'act=plans">Plan Übersicht</a> zurück';
$l['plan_save_fail'] = 'der Plan konnte nicht gespeichert werden';
$l['cpanelplan'] = 'Control Panel Plan Auswahl';
$l['cpplanselect'] = 'Wählen Sie den Control Panel Pläne auf die diese ACL zutreffen wird. Alle Benutzer in diesem Plan werden ausschließlich die in diesem Plan enthaltenen Anwendungen verwenden können.';
$l['default_plan_note'] = 'HINWEIS: Bitte geben Sie den Namen \'<b>softaculous_default</b>\' an, um einen Standard Plan zu erstellen, in den jeder Benutzer automatisch eingefügt wird, solange er in keinem andern Plan beinhaltet ist.';
$l['select_all'] = 'Alle auswählen: ';
$l['overwrite_settings'] = 'Einstellungen überschreiben:';

$l['disable_autoupgrade'] = 'Disable Auto Upgrade';
$l['exp_disable_autoupgrade'] = 'Disable auto upgrading script installations for users that fall under this plan';

$l['limit_features'] = 'Feature Restrictions';

$l['default_note'] = 'Default : Unlimited';

$l['max_ins_script'] = 'Maximum Installations per Script';
$l['max_backup_script'] = 'Maximum Backups per Script';
$l['max_clone_script'] = 'Maximum Clone per Script';
$l['max_staging_script'] = 'Maximum Staging per Script';

$l['exp_max_ins_script'] = 'This will limit the maximum number of installations a user can create for particular script';
$l['exp_max_backup_script'] = 'This will limit the maximum number of backups a user can create for particular script';
$l['exp_max_clone_script'] = 'This will limit the maximum number of clone a user can create for particular script';
$l['exp_max_staging_script'] = 'This will limit the maximum number of staging a user can create for particular script';