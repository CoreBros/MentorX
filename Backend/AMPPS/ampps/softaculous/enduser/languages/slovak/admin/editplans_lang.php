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

$l['no_planname'] = 'Please specify the plan name';
$l['invalidfilename'] = 'Please specify a valid plan name. Special characters are not allowed.';
$l['no_cpplan'] = 'Please choose a valid control panel plan';
$l['plan_exist'] = 'Plan with the same name already exists';
$l['error_plans'] = 'Please choose atleast one user or control panel plan';
$l['user_plan_exist'] = 'User(s) - <b>&soft-1;</b> - are already assigned to another plan. To overwrite please select the overwrite option';
$l['reseller_plan_exist'] = 'Reseller(s) - <b>&soft-1;</b> - already assigned to another plan. To overwrite please select the overwrite option';
$l['error_cpplan'] = 'Please select a valid control panel plan';
$l['error_scriptselect'] = 'Please select atleast one script';
$l['error_disable'] = 'Please select the checkbox if you want to <b>disable</b> '.APP.' for the selected user(s)';
$l['error_userselect'] = 'Please select atleast one user';
$l['error_resellerselect'] = 'Please select atleast one reseller';
$l['cpplan_plan_exist'] = 'Control Panel Plan(s) - <b>&soft-1;</b> - are already assigned to another plan. To overwrite please select the overwrite option';
$l['err_prefix'] = 'You can not give \'reseller_\' as a prefix for your plan name.';
$l['no_plan_support'] = 'Plans feature is not supported on this panel';
$l['invalid_plan_name'] = 'Invalid Plan name';

//Theme Strings
$l['<title>'] = 'Softaculous - Access Control';
$l['title'] = 'Edit Access Control Plans';
$l['planhead'] = 'Access Control Settings';
$l['planname'] = 'Plan Name';
$l['exp_plan'] = 'Access Control Plan name';
$l['cplanname'] = 'Control Panel Plans';
$l['exp_cplan'] = 'Control panel plans';
$l['no_cpplans'] = 'Please select a control panel plan';
$l['editplan'] = 'Save Plan';
$l['userselect'] = 'User Assignment';
$l['resellerselect'] = 'Reseller Assignment';
$l['exp_userselect'] = 'Select the individual users that are affected by this Access Group.';
$l['exp_resellerselect'] = 'Select the resellers that are affected by this Access Group.';
$l['scriptselect'] = 'Script Assignment';
$l['exp_scriptselect'] = 'Select the scripts for this particular plan';
$l['done'] = 'Your plan has been saved. Return to <a href="'.$globals['index'].'act=plans">Plans Overview</a>';
$l['plan_save_fail'] = 'Unable to save plan details';
$l['cpanelplan'] = 'Control Panel Plan Assignment';
$l['cpplanselect'] = 'Select the control panel plans to whom this ACL will apply. All users under that plan will be able to use only the scripts assigned here';
$l['select_all'] = 'Select All: ';
$l['overwrite_settings'] = 'Overwite Settings:';

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
