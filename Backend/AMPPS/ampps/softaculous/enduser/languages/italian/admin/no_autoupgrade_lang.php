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

$l['saving_error'] = 'There were some errors while saving settings.';

//Theme Strings
$l['<title>'] = APP.' - Disable Auto Upgrade For Scripts';
$l['settings_saved'] = 'The settings were saved successfully.';
$l['show_top_scripts'] = 'Disable Auto Upgrade';
$l['show_top_scripts_exp'] = 'The name of the Top Apps Category.';
$l['soft_free_note'] = 'NOTE: In the free version of '.APP.', selection of Top 14 scripts is disabled.';
$l['savescript'] = 'Save Scripts';
$l['select_top_scripts'] = 'Select Scripts';
$l['selected_top_scripts'] = 'Your Selected Scripts';
$l['select_from_below'] = 'Select your scripts from below';
$l['script_note_exp'] = 'If NO value is provided then '.APP.' will use its own formula to calculate the load time and try to upgrade installation(s).<br />Formula will be calculated as : <strong>load = Uptime_of_server / Number_of_cores;</strong> <br />And if load is less than 0.70, ONLY then '.APP.' will try to upgrade the installation(s).';
$l['script_note'] = 'Note';


$l['planhead'] = 'Global Setting for All Auto Upgradable Scripts';
$l['uptime'] = 'Set Server load limit';
$l['exp_uptime'] = 'For e.g. you can set value as 5, Now when Softaculous will try to upgrade an installation(s) it will check the load time and if it is lower than the value ONLY than it will upgrade.';
$l['save'] = 'Save';
$l['scriptselect'] = 'Script';
$l['disable_autoupgrade'] = 'Disable Auto Upgrade';
$l['disable_autoupgrade_exp'] = 'If enabled no installation(s) will be auto upgraded and users will not get an option to enable auto upgrade from enduser panel.';
$l['exp_scriptselect'] = 'Select the scripts for disabling Auto upgrade';
$l['done'] = 'Your plan has been saved. Return to <a href="'.$globals['index'].'act=plans">Plans Overview</a>';
$l['select_all'] = 'Select All: ';

