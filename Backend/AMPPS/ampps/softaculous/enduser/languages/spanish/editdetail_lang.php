<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editdetail_lang.php
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

$l['no_ins'] = 'No se presentó la instalación';
$l['wrong_ins_title'] = 'ID de la instalacion que ha enviado es incorrecto';
$l['wrong_ins'] = 'El ID de instalacion no existe';
$l['cant_remove_dir'] = 'El directorio no puede ser eliminado, ya que es el directorio de inicio. Por favor, desmarque la <b>Eliminar Directorio</b> la opcion, para continuar sin eliminar el directorio.';
$l['no_dir'] = 'El directorio de instalación no existe !';
$l['no_datadir'] = 'El directorio de datos no existe!';
$l['no_wwwdir'] = 'El directorio Web no existe!';

$l['wrong_url'] = 'La URL y nombre de directorio no coinciden';
$l['wrong_wwwurl'] = 'La URL y el nombre DIRECTORIO WEB no coinciden';
$l['err_mysql_user'] = 'El nombre de usuario MySQL o contraseña es incorrecta, la conexión no pudo ser establecida.';
$l['err_mysql_db'] = 'El nombre de la base de datos MySQL es incorrecto, ya que la base de datos no puede ser seleccionada.';
$l['mail_path'] = 'Ruta';
$l['mail_url'] = 'URL';
$l['mail_db'] = 'Base de Datos MySQL';
$l['mail_dbuser'] = 'Usuario MySQL DB';
$l['mail_dbhost'] = 'Host MySQL DB ';
$l['mail_dbpass'] = 'Password MySQL DB ';
$l['mail_time'] = 'Fecha de instalacion';
$l['mail_editdetail_time'] = 'Tiempo de modificacion';
$l['mail_subject'] = 'Detalles de instalacion de &soft-1;';
$l['mail_cron_command'] = 'CRON Job';
$l['mail_datadir'] = 'Directorio de Datos';
$l['mail_wwwdir'] = 'Directorio Web ';
$l['mail_wwwurl'] = 'URL Directory Web ';

//Theme Strings
$l['<title>'] = APP.' - Editar detalles';
$l['ins_details'] = 'Installation Details';
$l['info'] = 'Info';
$l['ins_softname'] = 'Software';
$l['ins_num'] = 'Instalacion Numero';
$l['ins_ver'] = 'Version';
$l['ins_time'] = 'Fecha de instalacion';
$l['ins_path'] = 'Ruta';
$l['ins_url'] = 'URL';
$l['ins_admin_url'] = 'Admin URL';
$l['ins_db'] = 'Nombre del Database ';
$l['ins_dbuser'] = 'Usuario del Database ';
$l['ins_dbpass'] = 'Password del Database ';
$l['ins_dbhost'] = 'Host del Database ';
$l['ins_datadir'] = 'Directorio de Datos';
$l['ins_wwwdir'] = 'Directorio Web';
$l['ins_wwwurl'] = 'URL Directorio  Web';
$l['ins_cron_command'] = 'Cron Command';
$l['details_edited'] = 'Los detalles de la instalación fueron editados con éxito.';
$l['version_edited'] = 'The version has been updated in our records.';
$l['return'] = 'Volver al Menu General';

$l['edit_ins'] = 'Editar detalles de instalacion';
$l['edit_dir'] = 'Directorio';
$l['edit_datadir'] = 'Directorio de datos';
$l['edit_db'] = 'Nombre del Database';
$l['edit_dbuser'] = 'Usuario del Database ';
$l['edit_dbpass'] = 'Password del Database ';
$l['edit_dbhost'] = 'Database Host';
$l['edit_url'] = 'URL';
$l['editins'] = 'Editar detalles de instalacion';
$l['mail_editdetail_ins'] = 'Los detalles de instalacion de &soft-1; han sido modificados. A continuacion se muestran los detalles de la instalacion modificados: ';
$l['edit_wwwdir'] = 'Directorio Web ';
$l['edit_wwwurl'] = 'URL del Directorio Web';
$l['disable_notify_update'] = 'Disable Update Notification Emails';
$l['exp_disable_notify_update'] = 'If checked you will not receive an email notification for updates available for this installation.';
$l['alreadyupdated'] = 'Hmm ... it looks like the actual version of the installation is <b>&soft-1;</b> and not <b>&soft-2;</b>. <br />Click here to update '.APP.' records.';
$l['edit_acc_detail'] = 'Edit Admin Account Details';
$l['eu_auto_upgrade'] = 'Auto Upgrade';
$l['exp_eu_auto_upgrade'] = 'Select the automatic upgrade preference for this installation when a new version is available';
$l['auto_upgrade_plugins'] = 'Auto Upgrade &soft-1; Plugins';
$l['exp_auto_upgrade_plugins'] = 'If checked, all the active &soft-1; plugins installed for this installation will be automatically upgraded to the latest version when your script installation is upgraded.';
$l['auto_upgrade_themes'] = 'Auto Upgrade &soft-1; Themes';
$l['exp_auto_upgrade_themes'] = 'If checked, the active &soft-1; theme for this installation will be automatically upgraded to the latest version when your script installation is upgraded.';
$l['auto_backup'] = 'Automated backups';
$l['exp_auto_backup'] = APP.' will take automated backups via CRON as per the frequency you select';
$l['auto_backup_rotation'] = 'Backup Rotation';
$l['exp_auto_backup_rotation'] = 'If the backup rotation limit is reached '.APP.' will delete the oldest backup for this installation and create a new backup. The backups will utilize your space so choose the backup rotation as per the space available on your server';
$l['no_backup'] = 'Don\'t backup';
$l['daily'] = 'Once a day';
$l['weekly'] = 'Once a week';
$l['monthly'] = 'Once a month';
$l['unlimited'] = 'Unlimited';
$l['auto_backup_not_allowed'] = 'The auto backup frequency you chose is invalid';

$l['no_edit'] = 'The EDIT.XML file could not be found! Please report this to the server administrator.';
$l['no_functions'] = 'The EDIT FUNCTIONS file could not be found! Please report this to the server administrator.';
$l['no_field'] = 'The field <b>&soft-1;</b> is required and must be filled out.';
$l['err_auto_backup_limit'] = 'The auto backup rotation cannot be more than <b>&soft-1;</b>';
$l['select_files'] = 'Select additional files/folders';
$l['select_files_exp'] = 'Please select the additonal files/folders associated with this installation. <br />This list will be used for operations like Clone, Backup and Removal of this installation';
$l['invalid_files_in_post_list'] = 'There were some invalid files/folders selected';
$l['select_files_list'] = 'Select additional files/folders from the following list';

$l['select_files_backup'] = 'Use above selected files/folders for Backup';
$l['select_files_backup_exp'] = 'If selected only the files/folders related to this installation will be backed up. <br />By default backup will include all the files/folders under this path';
$l['no'] = 'No (Backup all files and folders inside installation directory excluding subdomains)';
$l['yes'] = 'Yes (Backup standard application files/folders along with above selected files/folders)';
$l['check_all_edit'] = 'Check All';

$l['choose_theme'] = 'Install Theme';
$l['clear_theme'] = 'Clear selection';
$l['installing_theme'] = 'Installing theme';
$l['cant_download_theme'] = 'Could not download the theme files';
$l['no_theme_package'] = 'The theme installation package could not be found!';
$l['unzipping_theme_files'] = 'Copying themes files and folders';
$l['use_this_theme'] = 'Select this';
$l['demo'] = 'Demo';
$l['refresh'] = 'Refresh';
$l['purchase'] = 'Buy';
$l['close'] = 'Close';
$l['free'] = 'Free';
$l['select'] = 'Select';
$l['theme_is_optional'] = '<b>Note</b>: This is optional. Select only if you want to change your current theme.';
$l['your_purchased'] = 'Purchased ';//trailing space is required
$l['your_purchased_times'] = ' times(s)';
$l['err_theme_not_bought'] = 'You have not purchased the theme, so could not install it !';
$l['err_theme_reached_limit'] = 'Please buy this theme and try to install it again. You reached the limit of installing this theme.';
$l['payment_heading'] = 'Purchase Theme';
$l['payment_redirect'] = 'You will be redirected to pay ';//trailing space is required
$l['date_added'] = 'Date Added';
$l['downloaded'] = 'Downloaded';
$l['edit_dbpass_exp'] = 'New Database Password. <br/>Leave blank if you do not want to update the password';
$l['select_tables'] = 'Select additional database tables';
$l['select_tables_exp'] = 'Selected tables will be included in the database backup';

$l['backup_loc'] = 'Backup Location';
$l['exp_backup_loc'] = 'Choose the backup location to be used while backing up this installation';
$l['default'] = 'Default';
$l['invalid_backup_location'] = 'Backup location submitted does not exist';
$l['local_folder'] = 'Local Folder';

$l['cron_min'] = 'Min';
$l['cron_hour'] = 'Hour';
$l['cron_day'] = 'Day';
$l['cron_month'] = 'Month';
$l['cron_weekday'] = 'Weekday';

$l['no_cron_min'] = 'No Cron minute was specified';
$l['no_cron_hour'] = 'No Cron hour was specified';
$l['no_cron_day'] = 'No Cron day was specified';
$l['no_cron_month'] = 'No Cron month was specified';
$l['no_cron_weekday'] = 'No Cron weekday was specified';

$l['custom_autobackup'] = 'Custom';
$l['custom'] = 'Custom Cron time';
$l['custom_autobackup_cron'] = 'Automated Backups Cron time';
$l['custom_autobackup_cron_exp'] = 'Please specify the CRON timings for automated backups';

//Errors for autobcakup cron settings
$l['wrong_autobackup_cron_min'] = 'Automated Backup cron minute is wrong. Valid values are 0-59 or a *';
$l['wrong_autobackup_cron_hour'] = 'Automated Backup cron hour is wrong. Valid values are 0-23 or a *';
$l['wrong_autobackup_cron_day'] = 'Automated Backup cron day is wrong. Valid values are 1-31 or a *';
$l['wrong_autobackup_cron_month'] = 'Automated Backup cron month is wrong. Valid values are 1-12 or a *';
$l['wrong_autobackup_cron_weekday'] = 'Automated Backup cron weekday is wrong. Valid values are 0-7 or a *';

$l['done'] = 'Done';
$l['error'] = 'Error';
$l['plugins_upgrade_now'] = 'Upgrade Plugin(s) Now';
$l['theme_upgrade_now'] = 'Upgrade Theme Now';
$l['plugins_upgrade_success'] = 'Plugin(s) Upgraded Successfully!!';
$l['theme_upgrade_success'] = 'Theme Upgraded Successfully!!';
$l['fetch_db_details'] = 'Allow Softaculous to fetch the database details ?';

$l['edit_notes'] = 'The following are some important notes. It is highly recommended that you read them ';
$l['domain_not_in_list'] = 'The URL posted is not in your domain(s) list'; 

$l['dont_auto_upgrade'] = 'Do not Auto Upgrade'; 
$l['minor_auto_upgrade'] = 'Upgrade to <b>Minor</b> versions only'; 
$l['major_auto_upgrade'] = 'Upgrade to any latest version available (<b>Major</b> as well as <b>Minor</b>)'; 
$l['auto_upgrade_major'] = '(Major and Minor)'; 
$l['auto_upgrade_minor'] = '(Minor)'; 

$l['wpc_return'] = 'Return to Installations';