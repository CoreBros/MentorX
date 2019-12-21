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

$l['no_submit'] = 'No installation was selected for emailing.';
$l['posix_error'] = 'POSIX function is disabled. Please enable POSIX function to perform Upgrade for Installations.';
$l['shellexec_error'] = 'exec function is disabled. Please enable exec function to perform Upgrade for Installations.';
$l['user_soft_upd_sub'] = 'Script Updates Available';
$l['user_soft_upd'] = 'This email is regarding the outdated installation of certain PHP scripts you have installed. For security reasons you must update these outdated installations as soon as possible.
The following script updates are available:

&soft-1;
To upgrade these scripts go to your Control Panel -> '.APP.' -> Installations.
There you will be able to update the scripts.

From System Administrator';
$l['no_reseller_upgrade_ins'] = 'Resellers are not allowed to auto upgrade installations';
$l['no_ins_selected'] = 'No installation(s) selected for Upgrade.';

//Theme Strings
$l['<title>'] = APP.' - List of Installations';
$l['searchinstallations'] = 'Search Installations';
$l['search_scripts'] = 'Scripts';
$l['search_scripts_exp'] = 'Leave blank for all. For multiple scripts seperate with \'<b>;</b>\'';
$l['search_users'] = 'Users';
$l['search_users_exp'] = 'Leave blank for all. For multiple users seperate with \'<b>;</b>\'';
$l['group_by_scripts'] = 'Group by Scripts';
$l['group_by_scripts_exp'] = 'By default its grouped by users';
$l['only_outdated'] = 'Show only outdated installations';
$l['only_outdated_exp'] = 'By default it will show all installations';
$l['li_user'] = 'User';
$l['li_scripts'] = 'Scripts';
$l['li_domains'] = 'Domains';
$l['li_url'] = 'URL';
$l['li_insver'] = 'Installed Ver';// Installed Ver
$l['li_ver'] = 'Version';
$l['li_realver'] = 'Real Ver';
$l['no_results'] = 'No results were found';
$l['search_ins'] = 'Search';
$l['with_selected'] = 'With Selected';
$l['sub_email_users'] = 'Email users of newer versions';
$l['emailed_users'] = 'The users of the selected installations were notified about the available updates.';
$l['sub_upgrade_ins'] = 'Upgrade';
$l['upgrading_ins'] = 'Upgrading Installations...';
$l['upgraded_ins'] = 'The Auto upgrade process has finished and the details have been sent via email.';
$l['upgraded'] = 'Upgraded';
$l['failed'] = 'Failed';
$l['go_to_autoupgrade'] = 'Go to List';
$l['upgrading_completed'] = 'Upgrade Finished';
$l['beta_note'] = '<b>Note</b> : This feature is in <b>BETA VERSION</b>. <a href="http://softaculous.com/docs/Auto_Upgrade" target="_blank">Read More..</a>';
$l['wait_note'] = '<b>Note</b> : Please don\'t leave this page until all the installations are upgraded.';
$l['tasklist_button'] = 'Task List';
$l['auto_upgrade_enabled'] = 'Auto Upgrade Enabled';
$l['real_ver_notice'] = 'The real version does not match with '.APP.' records. It seems that the user has upgraded installation(s) manually.';
$l['latest_ver_notice'] = 'Latest version is available for the installation(s).';
$l['update_records'] = 'Update '.APP.' records';
$l['no_submit_rec'] = 'No installation(s) were selected for updating '.APP.' records';
$l['err_update_record'] = 'Error occured while updating version in '.APP.' records';
$l['succ_update_record'] = 'Successfully updated version for selected installation(s) in '.APP.' record';
$l['only_realversion'] = 'Show Real Version';
$l['only_realversion_exp'] = 'If checked '.APP.' will try to detect the real version of the installations.<br /><b>Note</b>: This might take time as it will find the real version by scanning the files of the installations';
$l['no_info'] = 'No Info';
$l['search_domains'] = 'Domains';
$l['search_domains_exp'] = 'Leave blank for all. For multiple domains seperate with \'<b>;</b>\'';

$l['auto_upgrade_major'] = '(Major and Minor)'; 
$l['auto_upgrade_minor'] = '(Minor)';