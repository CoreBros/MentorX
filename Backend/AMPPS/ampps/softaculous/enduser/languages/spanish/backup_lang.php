<?php

//////////////////////////////////////////////////////////////
//===========================================================
// backup_lang.php
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

$l['no_ins'] = 'No se ha realizado la instalacion';
$l['wrong_ins_title'] = 'ID de instalacion incorrecto';
$l['wrong_ins'] = 'El identificador de instalación que ha enviado no existe';
$l['backup_ftp_error'] = 'Could not create Backup Directory <b>&soft-1;</b>. Please create manually and try again.';
$l['err_backup'] = 'Could not create Backup.';
$l['no_space_backup'] = 'You do not have sufficient space to backup this installation!';
$l['err_notelength'] = 'Backup note must be less than 255 characters';
$l['off_backup_restore'] = 'Backup/Restore feature has been disabled by admin';

$l['cant_backup_dir'] = 'La utilidad de copia de seguridad no puede realizar copias de seguridad de los archivos.';
$l['could_not_read'] = 'Oops no se ha podido leer el siguiente archivo <b>&soft-1;</b> Por favor, hagalo legible para poder continuar con el backup.';
$l['cant_datadir_dir'] = 'Han aparecido errores mientras se añadian datos.';
$l['cant_wwwdir'] = 'Han aparecido errores mientras se añadia el directorio web.';
$l['cant_backup_db'] = 'Hubo errores al agregar la base de datos para la copia de seguridad.';
$l['err_perm_file'] = 'Hubo errores al tratar de hacer un archivo de permisos';
$l['err_dataperm_file'] = 'Hubo errores al tratar de hacer un archivo de permisos del directorio de datos';
$l['err_wwwperm_file'] = 'Hubo errores al tratar de hacer un archivo de permisos del directorio WEB';
$l['save_dir_perms'] = 'No se pudo guardar los permisos de archivos';
$l['save_datadir_perms'] = 'No se pudo guardar los permisos del directorio de datos';
$l['save_www_perms'] = 'No se pudo guardar los permisos del directorio Web';
$l['cant_connect_mysql'] = 'No se pudo conectar a la base de datos, compruebe el nombre de usuario / contraseña de su base de datos. Si se cambia, por favor, actualice los datos utilizando Editar detalles.';


//Theme Strings
$l['<title>'] = APP.' - Copia de Seguridad';
$l['info'] = 'Info';
$l['ins_softname'] = 'Software';
$l['ins_num'] = 'Numero de Instalacion';
$l['ins_ver'] = 'Version';
$l['ins_time'] = 'Teimpo de Instalacion';
$l['ins_path'] = 'Ruta';
$l['ins_wwwdir'] = 'Ruta del directorio Web';
$l['ins_url'] = 'URL';
$l['ins_db'] = 'Nombre de la Base de Datos';
$l['ins_dbuser'] = 'Usuario de la Base de Datos';
$l['ins_dbpass'] = 'Contraseña de la Base de Datos';
$l['ins_dbhost'] = 'Host de la Base de Datos';
$l['backup_ins'] = 'Copia de Seguridad de la instalacion';
$l['backup_dir'] = 'Directorio de Copia de Seguridad';
$l['backup_dir_exp'] = 'Si selecciona todo el directorio se realizara una copia de toda la carpeta';
$l['backup_db'] = 'Copia de Seguridad de la Base de Datos';
$l['backup_db_exp'] = 'Si selecciona la Base de Datos tambien será copiada';
$l['backup_conf'] = 'La copia de seguridad puede tardar algún tiempo, dependiendo de los datos. Por favor, no cierre la página web ni vaya a otra página.';
$l['backedup'] = 'La copia de seguridad se ha creado satisfactoriamente. Puede descargarla de <a href="'.$globals['index'].'act=backups">Copia de Seguridad</a> page.';
$l['backup_ins'] = 'Instalacion de la Copia de Seguridad';
$l['backup_datadir'] = 'Copia de Seguridad del directorio de datos';
$l['backup_datadir_exp'] = 'Compruebe si el directorio de datos ha sido salvado.';
$l['ins_datadir'] = 'Directorio de Datos';
$l['return'] = 'Volver al Menu General';
$l['ins_cron_command'] = 'Comando Cron ';
$l['backup_wwwdir'] = 'Copia de Seguridad del directorio Web';
$l['backup_wwwdir_exp'] = 'Compruebe que el directorio Web ha sido salvado.';
$l['checking_data'] = 'Comprobando los datos';
$l['backingup_db'] = 'Copia de Seguridad de la Base de Datos';
$l['backingup_dir'] = 'Copia de Seguridad del Directorio';
$l['backingup_datadir'] = 'Copia de Seguridad del Directorio de Datos';
$l['finishing_process'] = 'La Copia de Seguridad ha finalizado';
$l['wait_note'] = '<b>NOTA:</b> Esta operación puede tardar 3-4 minutos. Puede abandonar la pagina si lo desea.';
$l['backingup'] = 'La Copia de Seguridad se esta ejecutando en segundo plano. Le será notificado por mail cuando haya finalizado. Despues de que la Copia de Seguridad se haya completado,puede descargarla desde la pagina <a href="'.$globals['index'].'act=backups">Copia de Seguridad</a>.';
$l['check_email'] = 'Por favor, compruebe su email para ver el estado de su copia de seguridad.';
$l['prog_backingup'] = 'Backing Up '; // Dont remove the trailing space
$l['prog_backup_complete'] = 'Backup Completed.';
$l['backup_note'] = 'Backup Note';
$l['backup_note_exp'] = 'You can save a note for your reference';
$l['backup_operation'] = 'Select Backup Operation(s)';
$l['backups_expire'] = 'Your backups will be automatically purged after <b>&soft-1;</b> days of the backup creation.';
$l['err_max_backups'] = 'You have reached the maximum number of (<b>&soft-1;</b>) backups allowed. Please delete unwanted backups to be able to take a new backup.';
$l['backup_notes'] = 'Backup created by '.APP.' auto backup';
$l['max_backups'] = 'You currently have <b>&soft-1;</b> backups in your account. Your maximum backups limit is <b>&soft-2;</b>.';

$l['no_backup_functions'] = 'The BACKUP FUNCTIONS file could not be found! Please report this to the server administrator.';
$l['no_dir_exists'] = 'The Installation Directory does not exist.';
$l['backup_location_name'] = 'Backup Location';
$l['backup_file_empty'] = 'Incorrect backup file size : 0';
$l['err_mysql_db'] = 'The MySQL database name is incorrect as the database could not be selected.';
$l['backup_loc'] = 'Backup Location'; 
$l['exp_backup_loc'] = 'Choose the backup location where you would like to store the backup'; 
$l['default'] = 'Default'; 
$l['invalid_backup_location'] = 'Backup location submitted does not exist'; 
$l['local_folder'] = 'Local Folder'; 

$l['invalid_access_token'] = 'Invalid Access Token. Please Re-Authorize '.APP.' Dropbox APP from the Edit Backup location page in '.APP.' enduser panel';
$l['insufficient_space'] = 'Your Dropbox account is full. Please free some space and attempt the backup after sometime';

$l['gdrive_err_init'] = 'There were some errors while initiating the backup on Google Drive!!';
$l['gdrive_err_end'] = 'There were some errors while committing backup to your Google Drive account!!';

$l['error_max_backup_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Backups allowed per script';

$l['ftp_access'] = 'PHP process is unable to write files to your server. Please configure FTP access to continue.';
$l['configure_domain'] = 'Configure Settings';

$l['wpc_return'] = 'Return to Backups';

$l['ampps_notify_premium'] = 'This feature is available in the premium version of AMPPS. Please purchase <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';
$l['backing_up'] = 'Your backup is being created in background. You will be notified by email once its completed. You can track the backup process from the <a href="'.$globals['index'].'act=eu_tasklist">Task List</a> page.<br /> Your installation URL : <a href="&soft-1;" target="_blank">&soft-1;</a>';