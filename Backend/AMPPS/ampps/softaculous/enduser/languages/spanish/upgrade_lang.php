<?php

//////////////////////////////////////////////////////////////
//===========================================================
// upgrade_lang.php
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

$l['no_info_file'] = 'No se puede encontrar el Archivo Info.xml! Por favor, contacte al administrador del Servidor.';
$l['incompatible'] = 'El programa requiere una versión superior de '.APP.'! Por favor, contacte al administrador del Servidor.';
$l['no_upgrade'] = '¡No se puede encontrar el archivo UPGRADE.XML! Por favor, contacte al administrador del Servidor.';
$l['no_functions'] = '¡No se puede encontrar el archivo UPGRADE FUNCTIONS! Por favor, contacte al administrador del Servidor.';
$l['no_field'] = 'Es necesario rellenar el campo <b>&soft-1;</b>.';
$l['no_package'] = '¡No se puede actualizar el paquete de actualización!';
$l['no_decompress'] = 'Ocurrieron algunos errores al descomprimir los archivos.';
$l['checking_data'] = 'Comprobación de los datos presentados.';
$l['unzipping_files'] = 'Copia de archivos y carpetas';
$l['unzipping_datadir'] = 'Descomprimir los archivos de datos';
$l['prop_db'] = 'Actualización de la base de datos';
$l['finishing_process'] = 'Actualizacion terminada';
$l['wait_note'] = '<b>NOTA:</b> Esta operacion tardará alrededor de 3-4 minutos. Por favor, no deje esta página hasta que la barra de progreso llegue al 100%';
$l['cver_greater'] = 'La versión actual es mayor o igual que la versión que está actualizando. Esto es posible si ha actualizado manualmente la instalación. Si este no es el caso, por favor marque la siguiente casilla';
$l['force_upgrade'] = 'Forzar actualizacion';
$l['backup_finish'] = 'Backup finalizado';
$l['backup_fail_proceed'] = 'Algún error ocurrió durante el proceso de copia de seguridad. Proceda a actualizar ?';
$l['backing_up'] = 'Copia de seguridad de la instalación';
$l['no_space'] = 'You do not have sufficient space to upgrade this installation!';
$l['invalid_insid'] = 'Invalid Installation ID';
$l['invalid_script'] = 'Invalid Script ID';
$l['no_upgrade_support'] = 'Upgrade is not supported for this script';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['upgrade'] = 'Actualización de Software';
$l['softins_url'] = 'URL';
$l['softins_path'] = 'Ruta';
$l['softcopy_note'] = '<b>NOTA</b>: Para completar la actualización es necesaria una intervención manual. Por favor, visita la dirección URL que se mostrará una vez se hayan copiado los archivos de instalación.';
$l['softsubmit'] = 'Actualizar';
$l['congrats'] = 'Enhorabuena, el software se ha actualizado correctamente';
$l['succesful'] = 'ha sido actualizado correctamente en';
$l['admin_url'] = 'Admin URL';
$l['setup_continue'] = 'Para completar la instalación es necesaria una intervención manual. Por favor, visita la siguiente dirección URL';
$l['enjoy'] = 'Esperamos que el proceso de instalación haya sido de tu agrado.';
$l['upgrade_notes'] = 'Las siguientes son algunas notas importantes y es altamente recomendable que lo lea';
$l['please_note'] = '<b>NOTA</b>: '.APP.' es sólo un instalador automático y no ofrece ayuda técnica de ningún tipo. ¡Visita la página web del desarrollador para más información!';
$l['regards'] = 'Gracias';
$l['softinstaller'] = APP.' Auto Instalador';
$l['return'] = 'Volver a Preferencias';
$l['note_backup'] = 'Es recomendable que realice <a href="'.$globals['index'].'act=backup&insid=&soft-1;">un backup</a> de la instalación antes de actualizar.';
$l['alreadyupdated'] = 'Hmm ... parece que la versión actual de la instalación es <b>&soft-1;</b> y no <b>&soft-2;</b>. <br />Haga clic aquí para actualizar '.APP.' los registros.';
$l['no_update_required'] = 'Parece que la aplicaion no necesita actualizarse,  su instalación ya esta al dia';
$l['auto_backup'] = 'Le gustaría tener una copia de seguridad antes de actualizar ?';
$l['select_version'] = 'Seleccione una versión para actualizar a';
$l['upgrading'] = 'Actualizando...';
$l['setup_partial'] = 'Está a un paso de completar el proceso de actualización';
$l['finish_update'] = 'Visite por favor el enlace que se muestra a continuación para completar el proceso de actualización.';
$l['finish_up_sucess'] = 'Después de completar el proceso de actualización, puede acceder a &soft-1; instalacion aqui';
$l['upgrading_to'] = 'Se actualizara a : ';
$l['version'] = 'Version ';
$l['create_backup'] = 'Crear copia de seguridad';
$l['create_backup_exp'] = 'Crear una copia de seguridad antes de actualizar';
$l['prog_upgrading'] = 'Upgrading ';// Dont remove the trailing space
$l['prog_upgrade_complete'] = 'Upgrade Completed.';

$l['upgrade_tweet_sub'] = 'Tell your friends';

$l['not_in_free'] = '<b>&soft-1;</b> cannot be upgraded in the Free version of '.APP.'!';
$l['notify_admin'] = 'Please notify your Server Admin to purchase the premium version of '.APP.'!';

$l['backup_type'] = 'Backup Options';
$l['backup_type_exp'] = 'Choose full backup or advanced options';
$l['standard_backup'] = 'Full Backup (Default)';
$l['advanced_backup'] = 'Advanced Options';

$l['backup_dir'] = 'Backup Directory';
$l['backup_db'] = 'Backup Database';
$l['backup_wwwdir'] = 'Backup Web Directory';
$l['backup_datadir'] = 'Backup Data Directory';
$l['no_dir'] = 'The installation files are missing hence cannot proceed with the upgrade';
$l['wpc_return'] = 'Return to Installations';