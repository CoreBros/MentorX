<?php

//////////////////////////////////////////////////////////////
//===========================================================
// remove_lang.php
//===========================================================
// SOFTACULOUS 
// Version : 1.0
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

$l['no_ins'] = 'No se ha presentado la instalación';
$l['wrong_ins_title'] = 'ID de instalación Incorrecto';
$l['wrong_ins'] = 'El ID de instalación enviado no existe';
$l['cant_remove_dir'] = 'El Directorio no puede ser eliminado, ya que es el directorio home. Por favor, desmarca la opción <b> Eliminar </b> para continuar sin eliminar el directorio.';
$l['cant_remove_wwwdir'] = 'El directorio WEB no puede ser eliminado, ya que es el directorio home. Por favor, desmarca la opción <b>Eliminar directorio Web</b> para continuar sin eliminar el directorio Web.';
$l['mail_rem_ins'] = 'Se ha eliminado la instalación de &soft-1;. Detalles: ';
$l['mail_path'] = 'Ruta';
$l['mail_url'] = 'URL';
$l['mail_db'] = 'Base de datos MySQL';
$l['mail_dbuser'] = 'Usuario MySQL';
$l['mail_dbhost'] = 'Host';
$l['mail_dbpass'] = 'Contraseña MySQL';
$l['mail_time'] = 'Fecha de la Instalación';
$l['mail_rem_time'] = 'Fecha de la eliminación';
$l['mail_subject'] = 'Eliminada la instalación de &soft-1;';
$l['mail_cron_command'] = 'CRON Job';
$l['mail_datadir'] = 'Directorio de Datos';
$l['mail_wwwdir'] = 'Directorio Web';
$l['checking_data'] = 'Comprobación de los datos presentados';
$l['rem_db'] = 'Eliminación de la Base de datos / Usuario de la Base de Datos';
$l['rem_dir'] = 'Eliminación del Directorio';
$l['rem_datadir'] = 'Eliminación de los Datos del Directorio';
$l['rem_cron'] = 'Eliminación de los Cron Jobs';
$l['finishing_process'] = 'Eliminado Correctamente';
$l['wait_note'] = '<b>NOTA:</b> Este proceso puede durar 3-4 minutos.Por favor, no se debe cerrar esta página hasta que la barra de progreso indique 100%';

//Theme Strings
$l['<title>'] = APP.' - Eliminar';
$l['info'] = 'Info';
$l['ins_softname'] = 'Software';
$l['ins_num'] = 'Número de Instalación';
$l['ins_ver'] = 'Versión';
$l['ins_time'] = 'Fecha de la Instalación';
$l['ins_path'] = 'Ruta';
$l['ins_url'] = 'URL';
$l['ins_db'] = 'Base de datos';
$l['ins_dbuser'] = 'Usuario';
$l['ins_dbpass'] = 'Contraseña de la base de datos';
$l['ins_dbhost'] = 'Host';
$l['remove_ins'] = 'Eliminar la instalación';
$l['remove_dir'] = 'Eliminar directorio';
$l['remove_dir_exp'] = 'Selecciona para borrar por completo la carpeta';
$l['remove_db'] = 'Eliminar base de datos';
$l['remove_db_exp'] = 'Selecciona para borrar la base de datos';
$l['remove_dbuser'] = 'Eliminar Usuario de la base de datos';
$l['remove_dbuser_exp'] = 'Selecciona para borrar el usuario también';
$l['remove_conf'] = '¡Atención! \n ¿Realmente quieres eliminar esta instalación?';
$l['uninstalled'] = 'Instalación eliminada correctamente';
$l['removeins'] = 'Eliminar Instalación';
$l['ins_cron_command'] = 'Comando Cron';
$l['remove_datadir'] = 'Eliminar Directorio de Datos';
$l['remove_datadir_exp'] = 'Si se selecciona el directorio de datos se eliminará.';
$l['ins_datadir'] = 'Directorio de Datos';
$l['remove_wwwdir'] = 'Eliminar Directorio Web';
$l['remove_wwwdir_exp'] = 'Si la opción esta maracda el directorio Web será eliminado.';
$l['ins_wwwdir'] = 'Directorio Web';
$l['return'] = 'Volver a vista general';
$l['prog_removing'] = 'Removing ';// Dont remove the trailing space
$l['prog_remove_complete'] = 'Installation Removed.';
$l['disabled_script_info'] = 'No information available as this script has been disabled.';

$l['wpc_return'] = 'Return to Installations';