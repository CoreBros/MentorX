<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editplans_lang.php
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

$l['no_planname'] = 'U heeft geen pakket naam opgegeven.';
$l['invalidfilename'] = 'U heeft geen geldige pakket naam opgegeven. Speciale tekens zijn niet toegestaan.';
$l['no_cpplan'] = 'U moet een geldig control panel plan kiezen.';
$l['plan_exist'] = 'Pakket naam bestaatd reeds.';
$l['error_plans'] = 'U moet minimaal een gebruiker of control panel plan kiezen.';
$l['user_plan_exist'] = 'De gebruikers - <b>&soft-1;</b> - zijn reeds toegewezen aan een ander pakket. Om de instellingen te overschrijven scheck de box \'Instellingen overschrijven\'';
$l['reseller_plan_exist'] = 'D reseller(s) - <b>&soft-1;</b> - zijn reeds toegewezen aan een ander pakket. Om de instellingen te overschrijven scheck de box \'Instellingen overschrijven\'';
$l['error_cpplan'] = 'U moet een geldig control panel pakket opgeven.';
$l['error_scriptselect'] = 'U moet minimaal een script selecteren.';
$l['error_disable'] = 'Select de box wanneer u '.APP.' niet beschikbaar wilt stellen voor de geselecteerde gerbuikers.';
$l['error_userselect'] = 'U moet minimaal een gebruiker selecteren.';
$l['error_resellerselect'] = 'U moet minimaal een reseller selecteren.';
$l['cpplan_plan_exist'] = 'Control panel pakket naam - <b>&soft-1;</b> - is reeds in gebruik. Om de instellingen te overschrijven scheck de box \'Instellingen overschrijven\'';
$l['err_prefix'] = 'u kunt \'reseller_\' niet gebruiken als prefix voor een pakket naam.';
$l['no_plan_support'] = 'Plans feature is not supported on this panel';
$l['invalid_plan_name'] = 'Invalid Plan name';

//Theme Strings
$l['<title>'] = 'Softaculous - Toegang beheer';
$l['title'] = 'Access Control pakket toevoegen';
$l['planhead'] = 'Control settings voor toegang';
$l['planname'] = 'Plan naam';
$l['exp_plan'] = 'Control Pakket naam';
$l['cplanname'] = 'Control panel pakket';
$l['exp_cplan'] = 'Control panel pakket';
$l['no_cpplans'] = 'Selecteer een control panel pakket.';
$l['editplan'] = 'Pakket opslaan';
$l['userselect'] = 'User assignment';
$l['resellerselect'] = 'Reseller assignment';
$l['exp_userselect'] = 'Selecteer de gebruikers die behoren bij deze access groep.';
$l['exp_resellerselect'] = 'Selecteer de resellers die behoren bij deze access groep.';
$l['scriptselect'] = 'Toegewezen scripts';
$l['exp_scriptselect'] = 'Selecteer de scripts die beschikbaar zijn in dit pakket.';
$l['done'] = 'De pakket instellingen zijn opgeslagen. Klik <a href="'.$globals['index'].'act=plans">hier</a> om terug te gaan naar het overzicht.';
$l['plan_save_fail'] = 'Fout bij opslaan van de pakket instellingen';
$l['cpanelplan'] = 'Control Panel Plan beheer';
$l['cpplanselect'] = 'Selecteer het control panel waaraan deze ACL moet worden toegewezen. Alle gebruikers die vallen onder dit pakket, kunnen dan alleen gebruik maken van de toegewezen scripts.';
$l['select_all'] = 'Selecteer alle: ';
$l['overwrite_settings'] = 'Instellingen overschrijven:';


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