<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editemailtemp_lang.php
//===========================================================
// SOFTACULOUS 
// Version : 4.XX
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Tradução por: Infotech Brazil 
// Data:       Feb 2012
// Horário:    21:00 hrs
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

$l['tempsub'] = 'Por favor, mencione o assunto';
$l['tempcontent'] = 'Por favor, mencione o conteúdo para os modelos';
$l['no_email_template'] = 'No email template posted';
$l['invalid_email_template'] = 'Invalid email template';

$l['<title>'] = 'Editar o Modelo de E-mail';
$l['heading'] = 'Editar o Modelo de E-mail';
$l['edittemp'] = 'Editar  o Modelo de E-mail';
$l['done'] = 'O modelo de e-mail foi salva com sucesso';
$l['savetemp'] = 'Salvar o Modelo de E-mail';
$l['subject'] = 'Assunto';
$l['content'] = 'Conteúdo';
$l['reset_confirm'] = 'Tem certeza de que deseja redefinir o modelo de e-mail?';
$l['reset_template'] = 'Redefinir Gabarito';
$l['temp_overview'] = 'Resumo dos Gabaritos';
$l['language'] = 'Language';
$l['ishtml'] = 'Send as HTML';

$l['if_note'] = '<strong>Nota</strong> : Você pode usar um IF para uma variável facultativa da seguinte maneira:<br /><strong>&lt;if $VARIABLE_NAME&gt;$VARIABLE_NAME&lt;/if&gt;</strong>';

// Installtion Variables Information
$l['mail_install_php_info'] = 'Você pode usar as seguintes variáveis:<br />
<strong>$scriptname</strong> : Nome do Script<br />
<strong>$path</strong> : Directório<br />
<strong>$version</strong> : Versão<br />
<strong>$url</strong> : Endereço URL <br />
<strong>$admin_url</strong> : URL Administrativo <br />
<strong>$datadirectory</strong> : Diretório de Dados<br />
<strong>$admin_username</strong> : Nome de Usuário Administrador<br />
<strong>$admin_pass</strong> : Senha do Administrador<br />
<strong>$dbname</strong> : Base de Dados<br />
<strong>$dbuser</strong> : Usuário<br />
<strong>$dbhost</strong> : Servidor<br />
<strong>$dbpass</strong> : Senha MySQL DB<br />
<strong>$cron</strong> : Tarefa Cron<br />
<strong>$disable_notify_update</strong> : Update Notification<br />
<strong>$eu_auto_upgrade</strong> : Auto Upgrade<br />
<strong>$auto_backup</strong> : Automated Backups<br />
<strong>$auto_backup_rotation</strong> : Backup Rotation<br />
<strong>$time</strong> : Data da Instalação<br />
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
$l['mail_install_js_info'] = 'Você pode usar as seguintes variáveis:<br />
<strong>$scriptname</strong> : Nome do Script<br />
<strong>$path</strong> : Diretório<br />
<strong>$version</strong> : Versão<br />
<strong>$url</strong> : Endereço URL<br />
<strong>$disable_notify_update</strong> : Update Notification<br />
<strong>$auto_backup</strong> : Automated Backups<br />
<strong>$auto_backup_rotation</strong> : Backup Rotation<br />
<strong>$time</strong> : Data de Instalação<br />
<strong>$sn</strong> : Site Name (Can be changed from '.APP.' Admin panel -> Settings)<br />
<strong>$user_name</strong> : User Name<br />
<strong>$user_email</strong> : User Email';

// Installtion Variables Information
$l['mail_install_perl_info'] = 'Você pode usar as seguintes variáveis:<br />
<strong>$scriptname</strong> : Nome do Script<br />
<strong>$path</strong> : Diretório<br />
<strong>$version</strong> : Versão<br />
<strong>$url</strong> : Endereço<br />
<strong>$admin_url</strong> : URL Administrativo <br />
<strong>$datadirectory</strong> : Diretório dos Dados<br />
<strong>$wwwdir</strong> : Diretório Web<br />
<strong>$admin_username</strong> : Nome de Usuário Administrador<br />
<strong>$admin_pass</strong> : Senha do Administrador<br />
<strong>$dbname</strong> : Base de Dados<br />
<strong>$dbuser</strong> : Usuário<br />
<strong>$dbhost</strong> : Servidor<br />
<strong>$dbpass</strong> : Senha MySQL DB<br />
<strong>$cron</strong> : Tarefa Cron<br />
<strong>$disable_notify_update</strong> : Update Notification<br />
<strong>$auto_backup</strong> : Automated Backups<br />
<strong>$auto_backup_rotation</strong> : Backup Rotation<br />
<strong>$time</strong> : Data de Instalação<br />
<strong>$sn</strong> : Site Name (Can be changed from '.APP.' Admin panel -> Settings)<br />
<strong>$user_name</strong> : User Name<br />
<strong>$user_email</strong> : User Email';

// Removal Variables
$l['mail_remove_info'] = 'Você pode usar as seguintes variáveis:<br />
<strong>$scriptname</strong> : Nome do Script<br />
<strong>$path</strong> : Diretório<br />
<strong>$version</strong> : Versão<br />
<strong>$url</strong> : Endereço URL<br />
<strong>$datadirectory</strong> : Diretório dos Dados<br />
<strong>$wwwdir</strong> : URL Web<br />
<strong>$dbname</strong> : Base de Dados<br />
<strong>$dbuser</strong> : Usuário<br />
<strong>$dbhost</strong> : Servidor<br />
<strong>$dbpass</strong> : Senha MySQL DB<br />
<strong>$cron</strong> : Tarefa Cron<br />
<strong>$time</strong> : Data de Instalação<br />
<strong>$rem_time</strong> : Horário da Remoção<br />
<strong>$sn</strong> : Site Name (Can be changed from '.APP.' Admin panel -> Settings)<br />
<strong>$user_name</strong> : User Name<br />
<strong>$user_email</strong> : User Email';

// Outdated Insatllation Variables (FROM ADMIN)
$l['mail_update_info'] = 'Você pode usar as seguintes variáveis:<br />
<strong>$serverip</strong> : IP do Servidor<br />
<strong>$installation</strong> : Lista das Instalações<br />
<strong>$time</strong> : Horário<br />
<strong>$sn</strong> : Site Name (Can be changed from '.APP.' Admin panel -> Settings)';

// Outdated Insatllation Variables (FROM CRON)
$l['mail_cron_info'] = 'Você pode usar as seguintes variáveis:<br />
<strong>$serverip</strong> : IP do Servidor<br />
<strong>$installation</strong> : Lista de instalações que agora podem ser atualizados<br />
<strong>$time</strong> : Horário<br />
<strong>$sn</strong> : Site Name (Can be changed from '.APP.' Admin panel -> Settings)

';

// editdetail Variables
$l['mail_editdetail_info'] = 'Você pode usar as seguintes variáveis:<br />
<strong>$path</strong> : Diretório<br />
<strong>$url</strong> : Endereço URL<br />
<strong>$datadirectory</strong> : Diretório dos Dados<br />
<strong>$wwwdir</strong> : Diretório Web<br />
<strong>$wwwurl</strong> : URL Web<br />
<strong>$dbname</strong> : Base de Dados<br />
<strong>$dbuser</strong> : Usuário<br />
<strong>$dbhost</strong> : Servidor<br />
<strong>$dbpass</strong> : Senha MySQL DB<br />
<strong>$auto_backup</strong> : Automated Backups<br />
<strong>$auto_backup_rotation</strong> : Backup Rotation<br />
<strong>$time</strong> : Data de Instalação<br />
<strong>$edit_time</strong> : Horário da Modificação<br />
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

