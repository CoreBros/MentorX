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

$l['<title>'] = 'Softaculous - List User';
$l['title'] = 'List User';
$l['user_name'] = 'User Name';
$l['owner'] = 'Owner';
$l['login'] = 'Login';
$l['api_key'] = 'API Key';
$l['api_pass'] = 'API Password';
$l['number_of_users'] = 'Number of Users';
$l['option'] = 'Option';
$l['no_users'] = 'No Users to Display';
$l['adduser'] = 'Add User';
$l['del_user'] = 'Delete User ?';
$l['del_res_user'] = 'Delete Reseller ?<br/> <b>All Subusers created by this Reseller will be deleted too.</b>';
$l['delete'] = 'User was deleted successfully.';
$l['edit'] = 'User was edited successfully';

$l['no_username'] = 'Please enter User Name to create.';
$l['no_number_of_users'] = 'Please enter Number of Users.';
$l['user_exists'] = 'User already exists. Try different username.';
$l['err_domain'] = 'Could not delete domain : ';

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
$l['connect_error'] = 'Connection Error';
$l['err_user_nof'] = 'Only Resellers can have Number of Users';

//Theme Strings
$l['user_details'] = 'User Details';
$l['username'] = 'User Name';
$l['exp_username'] = 'All characters will be made lower case. Don\'t use spaces in between.';
$l['number_of_users'] = 'Number of Users';
$l['exp_number_of_users'] = 'Number of Subusers allowed to User';
$l['cplanname'] = 'Control Panel Plans';
$l['exp_cplan'] = 'Control panel plans';
$l['no_cpplans'] = 'Please select a control panel plan';
$l['saveplan'] = 'Save Plan';
$l['userselect'] = 'User Assignment';
$l['resellerselect'] = 'Reseller Assignment';
$l['exp_userselect'] = 'Select the individual users that are affected by this Access Group.';
$l['exp_resellerselect'] = 'Select the resellers that are affected by this Access Group.';
$l['scriptselect'] = 'Script Assignment';
$l['exp_scriptselect'] = 'Select the scripts for this particular plan';
$l['done'] = 'User has been deleted successfully.';
$l['plan_save_fail'] = 'Unable to save plan details';
$l['cpanelplan'] = 'Control Panel Plan Assignment';
$l['cpplanselect'] = 'Select the control panel plans to whom this ACL will apply. All users under that plan will be able to use only the scripts assigned here';
$l['default_plan_note'] = 'NOTE: Please specify the plan name as \'<b>softaculous_default</b>\' to create a default plan for any User who is not assigned to any other Softaculous Plan.';
$l['select_all'] = 'Select All: ';
$l['overwrite_settings'] = 'Overwite Settings:';
$l['uid'] = 'UID';
$l['gid'] = 'GID';

$l['err_no_user'] = 'User does not exist!';
$l['err_no_root_del'] = 'root user cannot be deleted !';
$l['err_invalid_email'] = 'Please provide valid Email';