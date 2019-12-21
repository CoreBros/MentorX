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

$l['tempsub'] = 'U heeft geen e-mail onderwerp opgegeven';
$l['tempcontent'] = 'U geeft geen e-mail inhoud opgegeven';
$l['no_email_template'] = 'No email template posted';
$l['invalid_email_template'] = 'Invalid email template';

$l['<title>'] = 'Wijzig e-mail template';
$l['heading'] = 'Wijzig e-mail template';
$l['edittemp'] = 'Wijzig e-mail template';
$l['done'] = 'Het e-mail template is succesvol opgeslagen';
$l['savetemp'] = 'E-mail template opslaan';
$l['subject'] = 'Onderwerp';
$l['content'] = 'Inhoud';
$l['reset_confirm'] = 'Weet u zeker dat u het e-mail template wilt resetten ?';
$l['reset_template'] = 'Reset template';
$l['temp_overview'] = 'Terug naar het e-mail templates overzicht';
$l['language'] = 'Language';
$l['ishtml'] = 'Send as HTML';

$l['if_note'] = '<strong>Opmerking</strong>: U kunt het IF statment gebruiken voor een optionele waarde op de volgende manier: :<br /><strong>&lt;if $VARIABLE_NAME&gt;$VARIABLE_NAME&lt;/if&gt;</strong>';

// Installtion Variables Information
$l['mail_install_php_info'] = 'U kunt de volgende variabelen gebruiken:<br />
<strong>$scriptname</strong> : Script naam<br />
<strong>$path</strong> : Installatie Path<br />
<strong>$version</strong> : Versie<br />
<strong>$url</strong> : URL<br />
<strong>$admin_url</strong> : Admin URL<br />
<strong>$datadirectory</strong> : Data folder<br />
<strong>$admin_username</strong> : Admin gebruikersnaam<br />
<strong>$admin_pass</strong> : Admin wachtwoord<br />
<strong>$dbname</strong> : MySQL database<br />
<strong>$dbuser</strong> : MySQL DB gebruikersnaam<br />
<strong>$dbhost</strong> : MySQL DB hostnaam<br />
<strong>$dbpass</strong> : MySQL DB wachtwoord<br />
<strong>$cron</strong> : Cron job commando<br />
<strong>$disable_notify_update</strong> : Update Notification<br />
<strong>$eu_auto_upgrade</strong> : Auto Upgrade<br />
<strong>$auto_backup</strong> : Automated Backups<br />
<strong>$auto_backup_rotation</strong> : Backup Rotation<br />
<strong>$time</strong> : Tijdstip van installatie<br />
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
<strong>$sn</strong> : Site Name (Can be changed from '.APP.' Admin panel -> Settings)<br />
<strong>$user_name</strong> : User Name<br />
<strong>$user_email</strong> : User Email';

// Installtion Variables Information
$l['mail_install_js_info'] = 'U kunt de volgende variabelen gebruiken:<br />
<strong>$scriptname</strong> : Script naam<br />
<strong>$path</strong> : Installatie path<br />
<strong>$version</strong> : Versie<br />
<strong>$url</strong> : URL<br />
<strong>$disable_notify_update</strong> : Update Notification<br />
<strong>$auto_backup</strong> : Automated Backups<br />
<strong>$auto_backup_rotation</strong> : Backup Rotation<br />
<strong>$time</strong> : Tijdstip van installatie<br />
<strong>$sn</strong> : Site Name (Can be changed from '.APP.' Admin panel -> Settings)<br />
<strong>$user_name</strong> : User Name<br />
<strong>$user_email</strong> : User Email';

// Installtion Variables Information
$l['mail_install_perl_info'] = 'U kunt de volgende variabelen gebruiken:<br />
<strong>$scriptname</strong> : Script naam<br />
<strong>$path</strong> : Installatie path<br />
<strong>$version</strong> : Versie<br />
<strong>$url</strong> : URL<br />
<strong>$admin_url</strong> : Admin URL<br />
<strong>$datadirectory</strong> : Data folder<br />
<strong>$wwwdir</strong> : Web directory<br />
<strong>$admin_username</strong> : Admin gebruikersnaam<br />
<strong>$admin_pass</strong> : Admin wachtwoord<br />
<strong>$dbname</strong> : MySQL database<br />
<strong>$dbuser</strong> : MySQL DB gebruikersnaam<br />
<strong>$dbhost</strong> : MySQL DB hostnaam<br />
<strong>$dbpass</strong> : MySQL DB wachtwoord<br />
<strong>$cron</strong> : Cron job commando<br />
<strong>$disable_notify_update</strong> : Update Notification<br />
<strong>$auto_backup</strong> : Automated Backups<br />
<strong>$auto_backup_rotation</strong> : Backup Rotation<br />
<strong>$time</strong> : Tijdstip van installatie<br />
<strong>$sn</strong> : Site Name (Can be changed from '.APP.' Admin panel -> Settings)<br />
<strong>$user_name</strong> : User Name<br />
<strong>$user_email</strong> : User Email';

// Removal Variables
$l['mail_remove_info'] = 'U kunt de volgende variabelen gebruiken:<br />
<strong>$scriptname</strong> : Script naam<br />
<strong>$path</strong> : Installatie path<br />
<strong>$version</strong> : Versie<br />
<strong>$url</strong> : URL<br />
<strong>$datadirectory</strong> : Data folder<br />
<strong>$wwwdir</strong> : Web directory<br />
<strong>$dbname</strong> : MySQL Database<br />
<strong>$dbuser</strong> : MySQL DB gebruikersnaam<br />
<strong>$dbhost</strong> : MySQL DB Hostnaam<br />
<strong>$dbpass</strong> : MySQL DB wachtwoord<br />
<strong>$cron</strong> : Cron job commando<br />
<strong>$time</strong> : Tijdstip van installatie<br />
<strong>$rem_time</strong> : Tijdstip van verwijderen<br />
<strong>$sn</strong> : Site Name (Can be changed from '.APP.' Admin panel -> Settings)<br />
<strong>$user_name</strong> : User Name<br />
<strong>$user_email</strong> : User Email';

// Outdated Insatllation Variables (FROM ADMIN)
$l['mail_update_info'] = 'U kunt de volgende variabelen gebruiken:<br />
<strong>$serverip</strong> : Server IP<br />
<strong>$installation</strong> : Overzicht van scripts waarvoor updates beschikbaar zijn<br />
<strong>$time</strong> : Tijd<br />
<strong>$sn</strong> : Site Name (Can be changed from '.APP.' Admin panel -> Settings)';

// Outdated Insatllation Variables (FROM CRON)
$l['mail_cron_info'] = 'U kunt de volgende variabelen gebruiken:<br />
<strong>$serverip</strong> : Server IP<br />
<strong>$installation</strong> : Overzicht van scripts waarvoor updates beschikbaar zijn<br />
<strong>$time</strong> : Tijd<br />
<strong>$sn</strong> : Site Name (Can be changed from '.APP.' Admin panel -> Settings)

';


// Editdetail Variables
$l['mail_editdetail_info'] = 'U kunt de volgende variabelen gebruiken:<br />
<strong>$path</strong> : Installation Path<br />
<strong>$url</strong> : URL<br />
<strong>$datadirectory</strong> : Data folder<br />
<strong>$wwwdir</strong> : Web directory<br />
<strong>$wwwurl</strong> : Web URL<br />
<strong>$dbname</strong> : MySQL database<br />
<strong>$dbuser</strong> : MySQL DB gebruikersnaam<br />
<strong>$dbhost</strong> : MySQL DB Hostnaam<br />
<strong>$dbpass</strong> : MySQL DB wachtwoord<br />
<strong>$auto_backup</strong> : Automated Backups<br />
<strong>$auto_backup_rotation</strong> : Backup Rotation<br />
<strong>$time</strong> : Tijdstip van installatie<br />
<strong>$edit_time</strong> : Tijdstip wijziging<br />
<strong>$sn</strong> : Site Name (Can be changed from '.APP.' Admin panel -> Settings)<br />
<strong>$user_name</strong> : User Name<br />
<strong>$user_email</strong> : User Email';

// Backup Background Email variables
$l['mail_backup_bg_info'] = 'U kunt de volgende variabelen gebruiken:<br />
<strong>$path</strong> : Installatie path<br />
<strong>$url</strong> : URL<br />
<strong>$scriptname</strong> : Script naam<br />
<strong>$backup_file</strong> : Folder naam<br />
<strong>$error</strong> : Web URL<br />
<strong>$backup_note</strong> : Backup Note<br />
<strong>$sn</strong> : Site Name (Can be changed from '.APP.' Admin panel -> Settings)
';

// Backup Email variables
$l['mail_backup_info'] = 'U kunt de volgende variabelen gebruiken:<br />
<strong>$path</strong> : Installatie path<br />
<strong>$url</strong> : URL<br />
<strong>$scriptname</strong> : Script naam<br />
<strong>$backup_file</strong> : Folder naam<br />
<strong>$error</strong> : Web URL<br />
<strong>$backup_note</strong> : Backup Note<br />
<strong>$sn</strong> : Site Name (Can be changed from '.APP.' Admin panel -> Settings)<br />
<strong>$user_name</strong> : User Name<br />
<strong>$user_email</strong> : User Email';

// Backup Failed Email variables
$l['mail_backup_fail_info'] = 'U kunt de volgende variabelen gebruiken:<br />
<strong>$path</strong> : Installatie path<br />
<strong>$url</strong> : URL<br />
<strong>$scriptname</strong> : Script naam<br />
<strong>$backup_file</strong> : Folder naam<br />
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
