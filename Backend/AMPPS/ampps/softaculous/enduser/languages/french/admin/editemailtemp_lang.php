<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editemailtemp_lang.php
//===========================================================
// SOFTACULOUS 
// Version : 4.0
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Date:       8th Mar 2010
// Time:       23:00 hrs
// Site:       http://www.softaculous.com/ (SOFTACULOUS)
// ----------------------------------------------------------
// Please Read the Terms of use at http://www.softaculous.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Ltd.
//===========================================================
//////////////////////////////////////////////////////////////

if(!defined('SOFTACULOUS')){

	die('Hacking Attempt');

}

$l['tempsub'] = 'Please mention the subject';
$l['tempcontent'] = 'Please mention the Content for templates';
$l['no_email_template'] = 'No email template posted';
$l['invalid_email_template'] = 'Invalid email template';

$l['<title>'] = 'Edit Email Template';
$l['heading'] = 'Edit Email Template';
$l['edittemp'] = 'Edit Email Template';
$l['done'] = 'The email template was saved successfully';
$l['savetemp'] = 'Save Email Template';
$l['subject'] = 'Subject';
$l['content'] = 'Content';
$l['reset_confirm'] = 'Are you sure you want to Reset the email template ?';
$l['reset_template'] = 'Reset Template';
$l['temp_overview'] = 'Templates Overview';
$l['language'] = 'Language';
$l['ishtml'] = 'Send as HTML';

$l['if_note'] = '<strong>Note</strong> : You can use an IF for an Optional Variable in the following manner :<br /><strong>&lt;if $VARIABLE_NAME&gt;$VARIABLE_NAME&lt;/if&gt;</strong>';

// Installtion Variables Information
$l['mail_install_php_info'] = 'You can use the following Variables :<br />
<strong>$scriptname</strong> : Script Name<br />
<strong>$path</strong> : Installation Path<br />
<strong>$version</strong> : Version<br />
<strong>$url</strong> : URL<br />
<strong>$admin_url</strong> : Admin URL<br />
<strong>$datadirectory</strong> : Répertoire des données<br />
<strong>$admin_username</strong> : Admin Username<br />
<strong>$admin_pass</strong> : Admin Password<br />
<strong>$dbname</strong> : Base de données MySQL<br />
<strong>$dbuser</strong> : Utilisateur MySQL<br />
<strong>$dbhost</strong> : Hôte MySQL<br />
<strong>$dbpass</strong> : Mot de passe MySQL<br />
<strong>$cron</strong> : Tâches CRON<br />
<strong>$disable_notify_update</strong> : Update Notification<br />
<strong>$eu_auto_upgrade</strong> : Auto Upgrade<br />
<strong>$auto_backup</strong> : Automated Backups<br />
<strong>$auto_backup_rotation</strong> : Backup Rotation<br />
<strong>$time</strong> : Temps d\'installation<br />
<strong>$sn</strong> : Site Name (Can be changed from '.APP.' Admin panel -> Settings)<br />
<strong>$user_name</strong> : User Name<br />

<strong>$user_email</strong> : User Email';

// Clone Variables Information
$l['mail_clone_info'] = 'You can use the following Variables :<br />
<strong>$scriptname</strong> : Script Name<br />
<strong>$old_path</strong> : Original Installation Path<br />
<strong>$old_url</strong> : Original Installation URL<br />
<strong>$path</strong> : Cloned Installation Path<br />
<strong>$version</strong> : Version<br />
<strong>$url</strong> : Cloned Installation URL<br />
<strong>$admin_url</strong> : Admin URL<br />
<strong>$datadirectory</strong> : Data Directory<br />
<strong>$dbname</strong> : MySQL Database<br />
<strong>$dbuser</strong> : MySQL DB User<br />
<strong>$dbhost</strong> : MySQL DB Host<br />
<strong>$dbpass</strong> : MySQL DB Password<br />
<strong>$cron</strong> : Cron Command<br />
<strong>$time</strong> : Time of Installation<br />
<strong>$sn</strong> : Site Name (Can be changed from '.APP.' Admin panel -> Settings)';

// Installtion Variables Information
$l['mail_install_js_info'] = 'You can use the following Variables :<br />
<strong>$scriptname</strong> : Script Name<br />
<strong>$path</strong> : Installation Path<br />
<strong>$version</strong> : Version<br />
<strong>$url</strong> : URL<br />
<strong>$disable_notify_update</strong> : Update Notification<br />
<strong>$auto_backup</strong> : Automated Backups<br />
<strong>$auto_backup_rotation</strong> : Backup Rotation<br />
<strong>$time</strong> : Temps d\'installation<br />
<strong>$sn</strong> : Site Name (Can be changed from '.APP.' Admin panel -> Settings)<br />
<strong>$user_name</strong> : User Name<br />
<strong>$user_email</strong> : User Email';

// Installtion Variables Information
$l['mail_install_perl_info'] = 'You can use the following Variables :<br />
<strong>$scriptname</strong> : Script Name<br />
<strong>$path</strong> : Installation Path<br />
<strong>$version</strong> : Version<br />
<strong>$url</strong> : URL<br />
<strong>$admin_url</strong> : Admin URL<br />
<strong>$datadirectory</strong> : Répertoire des données<br />
<strong>$wwwdir</strong> : Web Directory<br />
<strong>$admin_username</strong> : Admin Username<br />
<strong>$admin_pass</strong> : Admin Password<br />
<strong>$dbname</strong> : Base de données MySQL<br />
<strong>$dbuser</strong> : Utilisateur MySQL<br />
<strong>$dbhost</strong> : Hôte MySQL<br />
<strong>$dbpass</strong> : Mot de passe MySQL<br />
<strong>$cron</strong> : Tâches CRON<br />
<strong>$disable_notify_update</strong> : Update Notification<br />
<strong>$auto_backup</strong> : Automated Backups<br />
<strong>$auto_backup_rotation</strong> : Backup Rotation<br />
<strong>$time</strong> : Temps d\'installation<br />
<strong>$sn</strong> : Site Name (Can be changed from '.APP.' Admin panel -> Settings)<br />
<strong>$user_name</strong> : User Name<br />
<strong>$user_email</strong> : User Email';

// Removal Variables
$l['mail_remove_info'] = 'You can use the following Variables :<br />
<strong>$scriptname</strong> : Script Name<br />
<strong>$path</strong> : Installation Path<br />
<strong>$version</strong> : Version<br />
<strong>$url</strong> : URL<br />
<strong>$datadirectory</strong> : Répertoire des données<br />
<strong>$wwwdir</strong> : Web Directory<br />
<strong>$dbname</strong> : Base de données MySQL<br />
<strong>$dbuser</strong> : Utilisateur MySQL<br />
<strong>$dbhost</strong> : Hôte MySQL<br />
<strong>$dbpass</strong> : Mot de passe MySQL<br />
<strong>$cron</strong> : Tâches CRON<br />
<strong>$time</strong> : Temps d\'installation<br />
<strong>$rem_time : Removal Time</strong><br />
<strong>$sn</strong> : Site Name (Can be changed from '.APP.' Admin panel -> Settings)<br />
<strong>$user_name</strong> : User Name<br />
<strong>$user_email</strong> : User Email';

// Outdated Insatllation Variables (FROM ADMIN)
$l['mail_update_info'] = 'You can use the following Variables :<br />
<strong>$serverip</strong> : Server IP<br />
<strong>$installation</strong> : List of Installation<br />
<strong>$time</strong> : Time<br />
<strong>$sn</strong> : Site Name (Can be changed from '.APP.' Admin panel -> Settings)';

// Outdated Insatllation Variables (FROM CRON)
$l['mail_cron_info'] = 'You can use the following Variables :<br />
<strong>$serverip</strong> : Server IP<br />
<strong>$installation</strong> : List of Installations which can now be updated<br />
<strong>$time</strong> : Time<br />
<strong>$sn</strong> : Site Name (Can be changed from '.APP.' Admin panel -> Settings)

';

// Editdetail Variables
$l['mail_editdetail_info'] = 'You can use the following Variables :<br />
<strong>$path</strong> : Installation Path<br />
<strong>$url</strong> : URL<br />
<strong>$datadirectory</strong> : Répertoire des données<br />
<strong>$wwwdir</strong> : Web Directory<br />
<strong>$wwwurl</strong> : Web URL<br />
<strong>$dbname</strong> : Base de données MySQL<br />
<strong>$dbuser</strong> : Utilisateur MySQL<br />
<strong>$dbhost</strong> : Hôte MySQL<br />
<strong>$dbpass</strong> : Mot de passe MySQL<br />
<strong>$auto_backup</strong> : Automated Backups<br />
<strong>$auto_backup_rotation</strong> : Backup Rotation<br />
<strong>$time</strong> : Temps d\'installation<br />
<strong>$edit_time : Modification Time</strong><br />
<strong>$sn</strong> : Site Name (Can be changed from '.APP.' Admin panel -> Settings)<br />
<strong>$user_name</strong> : User Name<br />
<strong>$user_email</strong> : User Email';

// Backup Background Email variables
$l['mail_backup_bg_info'] = 'You can use the following Variables :<br />
<strong>$path</strong> : Installation Path<br />
<strong>$url</strong> : URL<br />
<strong>$scriptname</strong> : Script Name<br />
<strong>$backup_file</strong> : Web Directory<br />
<strong>$error</strong> : Web URL<br />
<strong>$backup_note</strong> : Backup Note<br />
<strong>$sn</strong> : Site Name (Can be changed from '.APP.' Admin panel -> Settings)<br />
<strong>$user_name</strong> : User Name<br />
<strong>$user_email</strong> : User Email';

// Backup Email variables
$l['mail_backup_info'] = 'You can use the following Variables :<br />
<strong>$path</strong> : Installation Path<br />
<strong>$url</strong> : URL<br />
<strong>$scriptname</strong> : Script Name<br />
<strong>$backup_file</strong> : Web Directory<br />
<strong>$error</strong> : Web URL<br />
<strong>$backup_note</strong> : Backup Note<br />
<strong>$sn</strong> : Site Name (Can be changed from '.APP.' Admin panel -> Settings)<br />
<strong>$user_name</strong> : User Name<br />
<strong>$user_email</strong> : User Email';

// Backup Failed Email variables
$l['mail_backup_fail_info'] = 'You can use the following Variables :<br />
<strong>$path</strong> : Installation Path<br />
<strong>$url</strong> : URL<br />
<strong>$scriptname</strong> : Script Name<br />
<strong>$backup_file</strong> : Web Directory<br />
<strong>$error</strong> : Web URL<br />
<strong>$sn</strong> : Site Name (Can be changed from '.APP.' Admin panel -> Settings)<br />
<strong>$user_name</strong> : User Name<br />
<strong>$user_email</strong> : User Email';

// Successfully Cli Upgraded by Admin
$l['mail_adminupgrade_success_admin_info'] = 'You can use the following Variables :<br />
<strong>$scriptname</strong> : Script Name<br />
<strong>$url</strong> : URL<br />
<strong>$oldversion</strong> : Current Version<br />
<strong>$version</strong> : Latest Version<br />
<strong>$user</strong> : Username<br />
<strong>$backup_path</strong> : Backup Path<br />
<strong>$path</strong> : Installation Path<br />
<strong>$dbname</strong> : MySQL Database<br />
<strong>$dbuser</strong> : MySQL DB User<br />
<strong>$dbhost</strong> : MySQL DB Host<br />
<strong>$dbpass</strong> : MySQL DB Password<br />
<strong>$error</strong> : List of Restore Errors<br />
<strong>$upgrade_error</strong> : List of Upgrade Errors<br />
<strong>$sn</strong> : Site Name (Can be changed from '.APP.' Admin panel -> Settings)
';

$l['mail_adminupgrade_success_admin_info'] = $l['mail_adminupgrade_success_admin_info'];
$l['mail_adminupgrade_fail_admin_info'] = $l['mail_adminupgrade_success_admin_info'];
$l['mail_adminupgrade_restore_fail_admin_info'] = $l['mail_adminupgrade_success_admin_info'];

$l['mail_adminupgrade_success_user_info'] = $l['mail_adminupgrade_success_admin_info'];
$l['mail_adminupgrade_fail_user_info'] = $l['mail_adminupgrade_success_admin_info'];
$l['mail_adminupgrade_restore_fail_user_info'] = $l['mail_adminupgrade_success_admin_info'];

$l['mail_autoupgrade_success_user_info'] = $l['mail_adminupgrade_success_admin_info'];
$l['mail_autoupgrade_fail_user_info'] = $l['mail_adminupgrade_success_admin_info'];
$l['mail_autoupgrade_restore_fail_user_info'] = $l['mail_adminupgrade_success_admin_info'];

$l['mail_userupgrade_success_user_info'] = $l['mail_adminupgrade_success_admin_info'];
$l['mail_userupgrade_fail_user_info'] = $l['mail_adminupgrade_success_admin_info'];
$l['mail_userupgrade_restore_fail_user_info'] = $l['mail_adminupgrade_success_admin_info'];

$l['mail_autoupgrade_backup_fail_info'] = 'You can use the following Variables :<br />
<strong>$scriptname</strong> : Script Name<br />
<strong>$url</strong> : URL<br />
<strong>$oldversion</strong> : Current Version<br />
<strong>$version</strong> : Latest Version<br />
<strong>$user</strong> : Username<br />
<strong>$error</strong> : List of Errors<br />
<strong>$sn</strong> : Site Name (Can be changed from '.APP.' Admin panel -> Settings)
';

$l['mail_autoupgrade_precheck_fail_info'] = $l['mail_autoupgrade_backup_fail_info'];

// Auto backup successful Variables
$l['mail_auto_backup_info'] = 'You can use the following Variables :<br />
<strong>$scriptname</strong> : Script Name<br />
<strong>$path</strong> : Installation Path<br />
<strong>$url</strong> : Installation URL<br />
<strong>$backup_file</strong> : Backup Path<br />
<strong>$sn</strong> : Site Name (Can be changed from '.APP.' Admin panel -> Settings)
';

// Auto backup failed Variables
$l['mail_auto_backup_fail_info'] = 'You can use the following Variables :<br />
<strong>$scriptname</strong> : Script Name<br />
<strong>$path</strong> : Installation Path<br />
<strong>$url</strong> : Installation URL<br />
<strong>$backup_file</strong> : Backup Path<br />
<strong>$error</strong> : List of Errors<br />
<strong>$sn</strong> : Site Name (Can be changed from '.APP.' Admin panel -> Settings)
';

$l['mail_install_classes_info'] = 'You can use the following Variables :<br />
<strong>$path</strong> : Installation Path<br />
<strong>$user_name</strong> : User Name<br />
<strong>$user_email</strong> : User Email';

$l['mail_restore_info'] = 'You can use the following Variables :<br />
<strong>$path</strong> : Installation Path<br />
<strong>$url</strong> : Installation URL<br />
<strong>$user_name</strong> : User Name<br />
<strong>$user_email</strong> : User Email';

$l['mail_restore_fail_info'] = 'You can use the following Variables :<br />
<strong>$path</strong> : Installation Path<br />
<strong>$url</strong> : Installation URL<br />
<strong>$user_name</strong> : User Name<br />
<strong>$user_email</strong> : User Email';

$l['mail_restore_bg_info'] = 'You can use the following Variables :<br />
<strong>$path</strong> : Installation Path<br />
<strong>$url</strong> : Installation URL<br />
<strong>$user_name</strong> : User Name<br />
<strong>$user_email</strong> : User Email';

$l['mail_import_info'] = 'You can use the following Variables :<br />
<strong>$path</strong> : Installation Path<br />
<strong>$url</strong> : Installation URL<br />
<strong>$user_name</strong> : User Name<br />
<strong>$user_email</strong> : User Email';

$l['mail_import_fail_info'] = 'You can use the following Variables :<br />
<strong>$path</strong> : Installation Path<br />
<strong>$url</strong> : Installation URL<br />
<strong>$user_name</strong> : User Name<br />
<strong>$user_email</strong> : User Email';

$l['mail_import_bg_info'] = 'You can use the following Variables :<br />
<strong>$path</strong> : Installation Path<br />
<strong>$url</strong> : Installation URL<br />
<strong>$user_name</strong> : User Name<br />
<strong>$user_email</strong> : User Email';

// Staging Variables Information
$l['mail_staging_info'] = 'You can use the following Variables :<br />
<strong>$scriptname</strong> : Script Name<br />
<strong>$live_path</strong> : Original Installation Path<br />
<strong>$live_url</strong> : Original Installation URL<br />
<strong>$path</strong> : Staging Installation Path<br />
<strong>$version</strong> : Version<br />
<strong>$url</strong> : Staging Installation URL<br />
<strong>$admin_url</strong> : Admin URL<br />
<strong>$datadirectory</strong> : Data Directory<br />
<strong>$dbname</strong> : MySQL Database<br />
<strong>$dbuser</strong> : MySQL DB User<br />
<strong>$dbhost</strong> : MySQL DB Host<br />
<strong>$dbpass</strong> : MySQL DB Password<br />
<strong>$cron</strong> : Cron Command<br />
<strong>$time</strong> : Time of Installation<br />
<strong>$sn</strong> : Site Name (Can be changed from '.APP.' Admin panel -> Settings)<br />
<strong>$user_name</strong> : User Name<br />
<strong>$user_email</strong> : User Email';

// Pushtolive Variables Information
$l['mail_pushtolive_info'] = 'You can use the following Variables :<br />
<strong>$scriptname</strong> : Script Name<br />
<strong>$live_path</strong> : Original Installation Path<br />
<strong>$live_url</strong> : Original Installation URL<br />
<strong>$path</strong> : Pushed Installation Path<br />
<strong>$version</strong> : Version<br />
<strong>$url</strong> : Pushed Installation URL<br />
<strong>$admin_url</strong> : Admin URL<br />
<strong>$datadirectory</strong> : Data Directory<br />
<strong>$dbname</strong> : MySQL Database<br />
<strong>$dbuser</strong> : MySQL DB User<br />
<strong>$dbhost</strong> : MySQL DB Host<br />
<strong>$dbpass</strong> : MySQL DB Password<br />
<strong>$cron</strong> : Cron Command<br />
<strong>$time</strong> : Time of Installation<br />
<strong>$sn</strong> : Site Name (Can be changed from '.APP.' Admin panel -> Settings)<br />
<strong>$user_name</strong> : User Name<br />
<strong>$user_email</strong> : User Email';

