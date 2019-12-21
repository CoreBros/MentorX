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

$l['tempsub'] = 'Por favor, mensione el asunto';
$l['tempcontent'] = 'Por favor mencione el contenido de las plantillas';
$l['no_email_template'] = 'No email template posted';
$l['invalid_email_template'] = 'Invalid email template';

$l['<title>'] = 'Editar Plantilla Email ';
$l['heading'] = 'Editar Plantilla Email ';
$l['edittemp'] = 'Editar Plantilla Email ';
$l['done'] = 'La plantilla de email ha sido guardada satisfactoriamente';
$l['savetemp'] = 'Guardar plantilla de email';
$l['subject'] = 'Asunto';
$l['content'] = 'Contenido';
$l['reset_confirm'] = 'Esta seguro de querer resetear la plantilla de email?';
$l['reset_template'] = 'Resetear Plantilla';
$l['temp_overview'] = 'Vista Plantillas';
$l['language'] = 'Language';
$l['ishtml'] = 'Send as HTML';

$l['if_note'] = '<strong>Nota</strong> : Puede utilizar un SI para una variable facultativa de la siguiente manera :<br /><strong>&lt;if $VARIABLE_NAME&gt;$VARIABLE_NAME&lt;/if&gt;</strong>';

// Installtion Variables Information
$l['mail_install_php_info'] = 'Puede utilizar las siguientes variables :<br />
<strong>$scriptname</strong> : Nombre de Script<br />
<strong>$path</strong> : Ruta<br />
<strong>$version</strong> : Version<br />
<strong>$url</strong> : URL<br />
<strong>$admin_url</strong> : Admin URL<br />
<strong>$datadirectory</strong> : Directorio de Datos<br />
<strong>$admin_username</strong> : Nombre Usuario Administrador<br />
<strong>$admin_pass</strong> : Password Administrador<br />
<strong>$dbname</strong> : Base de datos MySQL<br />
<strong>$dbuser</strong> : Usuario MySQL<br />
<strong>$dbhost</strong> : Host<br />
<strong>$dbpass</strong> : Contraseña MySQL<br />
<strong>$cron</strong> : Tareas programadas<br />
<strong>$disable_notify_update</strong> : Update Notification<br />
<strong>$eu_auto_upgrade</strong> : Auto Upgrade<br />
<strong>$auto_backup</strong> : Automated Backups<br />
<strong>$auto_backup_rotation</strong> : Backup Rotation<br />
<strong>$time</strong> : Fecha de la Instalación<br />
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
$l['mail_install_js_info'] = 'Puede utilizar las siguientes variabless :<br />
<strong>$scriptname</strong> : Nombre de Script <br />
<strong>$path</strong> : Ruta<br />
<strong>$version</strong> : Version<br />
<strong>$url</strong> : URL<br />
<strong>$disable_notify_update</strong> : Update Notification<br />
<strong>$auto_backup</strong> : Automated Backups<br />
<strong>$auto_backup_rotation</strong> : Backup Rotation<br />
<strong>$time</strong> : Fecha de la Instalación<br />
<strong>$sn</strong> : Site Name (Can be changed from '.APP.' Admin panel -> Settings)<br />
<strong>$user_name</strong> : User Name<br />
<strong>$user_email</strong> : User Email';

// Installtion Variables Information
$l['mail_install_perl_info'] = 'Puede utilizar las siguientes variables :<br />
<strong>$scriptname</strong> : Nombre de Script <br />
<strong>$path</strong> : Ruta<br />
<strong>$version</strong> : Version<br />
<strong>$url</strong> : URL<br />
<strong>$admin_url</strong> : Admin URL<br />
<strong>$datadirectory</strong> : Directorio de Datos <br />
<strong>$wwwdir</strong> : Directorio Web <br />
<strong>$admin_username</strong> : Nombre de Usuario Administrador<br />
<strong>$admin_pass</strong> : Password Administrador <br />
<strong>$dbname</strong> : Base de datos MySQL<br />
<strong>$dbuser</strong> : Usuario MySQL<br />
<strong>$dbhost</strong> : Host<br />
<strong>$dbpass</strong> : Contraseña MySQL<br />
<strong>$cron</strong> : Tareas programadas<br />
<strong>$disable_notify_update</strong> : Update Notification<br />
<strong>$auto_backup</strong> : Automated Backups<br />
<strong>$auto_backup_rotation</strong> : Backup Rotation<br />
<strong>$time</strong> : Fecha de la Instalación<br />
<strong>$sn</strong> : Site Name (Can be changed from '.APP.' Admin panel -> Settings)<br />
<strong>$user_name</strong> : User Name<br />
<strong>$user_email</strong> : User Email';

// Removal Variables
$l['mail_remove_info'] = 'You can use the following Variables :<br />
<strong>$scriptname</strong> : Script Name<br />
<strong>$path</strong> : Ruta<br />
<strong>$version</strong> : Version<br />
<strong>$url</strong> : URL<br />
<strong>$datadirectory</strong> : Data Directory<br />
<strong>$wwwdir</strong> : Web Directory<br />
<strong>$dbname</strong> : Base de datos MySQL<br />
<strong>$dbuser</strong> : Usuario MySQL<br />
<strong>$dbhost</strong> : Host<br />
<strong>$dbpass</strong> : Contraseña MySQL<br />
<strong>$cron</strong> : Tareas programadas<br />
<strong>$time</strong> : Fecha de la Instalación<br />
<strong>$rem_time : Removal Time</strong><br />
<strong>$sn</strong> : Site Name (Can be changed from '.APP.' Admin panel -> Settings)<br />
<strong>$user_name</strong> : User Name<br />
<strong>$user_email</strong> : User Email';

// Outdated Insatllation Variables (FROM ADMIN)
$l['mail_update_info'] = 'Puede utilizar las siguientes variables :<br />
<strong>$serverip</strong> : IP  del Servidor<br />
<strong>$installation</strong> : Lista de Instalaciones<br />
<strong>$time</strong> : Tiempo<br />
<strong>$sn</strong> : Site Name (Can be changed from '.APP.' Admin panel -> Settings)';

// Outdated Insatllation Variables (FROM CRON)
$l['mail_cron_info'] = 'You can use the following Variables :<br />
<strong>$serverip</strong> : Server IP<br />
<strong>$installation</strong> : List of Installations which can now be updated<br />
<strong>$time</strong> : Time<br />
<strong>$sn</strong> : Site Name (Can be changed from '.APP.' Admin panel -> Settings)

';

// Editdetail Variables
$l['mail_editdetail_info'] = 'Puede utilizar las siguientes variables :<br />
<strong>$path</strong> : Ruta<br />
<strong>$url</strong> : URL<br />
<strong>$datadirectory</strong> : Directorio de Datos<br />
<strong>$wwwdir</strong> : Directorio Web <br />
<strong>$wwwurl</strong> : Web URL<br />
<strong>$dbname</strong> : Base de datos MySQL<br />
<strong>$dbuser</strong> : Usuario MySQL<br />
<strong>$dbhost</strong> : Host<br />
<strong>$dbpass</strong> : Contraseña MySQL<br />
<strong>$auto_backup</strong> : Automated Backups<br />
<strong>$auto_backup_rotation</strong> : Backup Rotation<br />
<strong>$time</strong> : Fecha de la Instalación<br />
<strong>$edit_time : Time of Modification</strong><br />
<strong>$sn</strong> : Site Name (Can be changed from '.APP.' Admin panel -> Settings)<br />
<strong>$user_name</strong> : User Name<br />
<strong>$user_email</strong> : User Email';


// Backup Background Email variables
$l['mail_backup_bg_info'] = 'Puede utilizar las siguientes variables :<br />
<strong>$path</strong> : Ruta de Instalacion<br />
<strong>$url</strong> : URL<br />
<strong>$scriptname</strong> : Nombre de Script<br />
<strong>$backup_file</strong> : Web Directory<br />
<strong>$error</strong> : Web URL<br />
<strong>$backup_note</strong> : Backup Note<br />
<strong>$sn</strong> : Site Name (Can be changed from '.APP.' Admin panel -> Settings)<br />
<strong>$user_name</strong> : User Name<br />
<strong>$user_email</strong> : User Email';

// Backup Email variables
$l['mail_backup_info'] = 'Puede utilizar las siguientes variables :<br />
<strong>$path</strong> : Ruta de Instalacion<br />
<strong>$url</strong> : URL<br />
<strong>$scriptname</strong> : Nombre de Script <br />
<strong>$backup_file</strong> : Web Directory<br />
<strong>$error</strong> : Web URL<br />
<strong>$backup_note</strong> : Backup Note<br />
<strong>$sn</strong> : Site Name (Can be changed from '.APP.' Admin panel -> Settings)<br />
<strong>$user_name</strong> : User Name<br />
<strong>$user_email</strong> : User Email';

// Backup Failed Email variables
$l['mail_backup_fail_info'] = 'You can use the following Variables :<br />
<strong>$path</strong> : Ruta de Instalacion<br />
<strong>$url</strong> : URL<br />
<strong>$scriptname</strong> : Nombre de Script <br />
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

