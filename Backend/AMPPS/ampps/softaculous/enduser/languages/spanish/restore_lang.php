<?php

//////////////////////////////////////////////////////////////
//===========================================================
// restore_lang.php
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

$l['restoreerror'] = 'Ha ocurrido un error mientras se descomprimian los ficheros de backup';
$l['restoredatadir'] = 'No se puede restaurar el directorio de datos';
$l['restorewww'] = 'No se puede restaurar Directorio Web';
$l['res_err_selectmy'] = 'No se pudo seleccionar la base de datos para restaurar';
$l['err_myconn'] = 'No se pudo conectar a la base de datos';
$l['err_db_create'] = 'Se produjo un error al crear la base de datos';
$l['off_backup_restore'] = 'Backup/Restore feature has been disabled by admin';
$l['no_backupinfo_file'] = 'Backup info file not found';
$l['no_backup_time'] = 'Backup time not found';
$l['instime_higher_than_btime'] = 'Installation time is higher than the Backup time';

//Theme Strings
$l['<title>'] = APP.' - Restaurar';
$l['restorefile'] = 'Restaurar desde copia de seguridad';
$l['restore_dir'] = 'Restaurar Directorio';
$l['restore_dir_exp'] = 'Si marca la opción toda la carpeta se restaurará';
$l['restore_datadir'] = 'Restaurar directorio de datos';
$l['restore_datadir_exp'] = 'Si marca la opción el directorio de datos se restaurará';
$l['restore_db'] = 'Restaurar base de datos';
$l['restore_db_exp'] = 'Si se selecciona la opción la base de datos también será restaurada';
$l['restore_ins'] = 'Restaurar instalación';
$l['restore'] = 'Su backup ha sido restaurado con éxito';
$l['confirm_restore'] = '¿Está seguro que desea restaurar la instalación?';
$l['return'] = 'Volver a vista general';
$l['restore_wwwdir'] = 'Restaurar Directorio Web';
$l['restore_wwwdir_exp'] = 'Si se selecciona la opción el directorio web será restaurado';
$l['checking_data'] = 'Comprobando los datos presentados';
$l['res_db'] = 'Restaurando la Base de Datos';
$l['res_dir'] = 'Restaurando el Directorio';
$l['res_datadir'] = 'Restaurando el Directorio de Datos';
$l['finishing_process'] = 'Backup Restaurado';
$l['wait_note'] = '<b>NOTA:</b> Este proceso puede durar 3-4 minutos.Por favor, no se debe cerrar esta página hasta que la barra de progreso indique 100%';
$l['restoring'] = 'Su copia de seguridad se está restaurando en segundo plano. Se le notificará por correo electrónico una vez completado. Puede hacer un seguimiento del proceso de restauración desde la página <a href="'.$globals['index'].'act=eu_tasklist"> Task List </a>.';
$l['prog_restoring'] = 'Restoring '; // Dont remove the trailing space
$l['prog_restore_complete'] = 'Restore Completed.';
$l['no_restore_functions'] = 'The RESTORE FUNCTIONS file could not be found! Please report this to the server administrator.';
$l['backup_file_empty'] = 'Backup file is empty';
$l['db_not_exist'] = 'Database file does not exist';
$l['db_empty'] = 'The database file is empty';

$l['read_archive'] = 'Reading the archive';

$l['no_backup_file'] = 'Backup file not present';

$l['wpc_not_in_free'] = 'Remote Backups cannot be restored in the Free version of '.APP.'! You can purchase the premium plan <a href="'.$globals['index'].'act=wpc_plans">here</a> to continue using them.';

$l['wpc_return'] = 'Return to Backups';

$l['ampps_notify_premium'] = 'This feature is available in the premium version of AMPPS. Please purchase <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';