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

$l['no_info_file'] = 'El archivo INFO.XML no pudo ser encontrado! Por favor, reporta esto al administrador del servidor.';
$l['incompatible'] = 'El software requiere una versión superior de '.APP.'! Por favor, reporta esto al administrador del servidor.';
$l['no_upgrade'] = 'El archivo UPGRADE.XML no pudo ser encontrado! Por favor, reporta esto al administrador del servidor.';
$l['no_functions'] = 'El archivo que contiene UPGRADE FUNCTIONS no pudo ser encontrado! Por favor, reporta esto al administrador del servidor.';
$l['no_field'] = 'El campo <b>&soft-1;</b> es obligatorio y debe ser rellenado.';
$l['no_package'] = 'El paquete de actualización no pudo ser encontrado!';
$l['no_decompress'] = 'Hubo algún error al descomprimir los ficheros del paquete.';
$l['no_decompress_www'] = 'Hubo algún error al descomprimir los ficheros web.';
$l['no_config_perl_path'] = 'Hubo algún error al configurar los ficheros CGI.';
$l['checking_data'] = 'Comprobando los datos enviados';
$l['unzipping_files'] = 'Copiando archivos y carpetas';
$l['unzipping_datadir'] = 'Descomprimiendo archivos de datos';
$l['prop_db'] = 'Actualizando la base de datos';
$l['finishing_process'] = 'Finalizando la actualización';
$l['wait_note'] = '<b>NOTA:</b> Esto puede durar 3-4 minutos. Por favor, no salgas de esta página hasta que la barra de progreso llegue al 100%';
$l['no_space'] = 'You do not have sufficient space to upgrade this installation!';
$l['invalid_insid'] = 'Invalid Installation ID';
$l['invalid_script'] = 'Invalid Script ID';
$l['not_perl_script'] = 'This script is not in PERL';
$l['no_perl_upgrade'] = 'Upgrade is not supported for this script';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['upgrade'] = 'Actualización de software';
$l['softins_url'] = 'URL';
$l['softins_path'] = 'Ruta';
$l['softcopy_note'] = '<b>NOTA</b>: Este software realizará una actualización utilizando su propia herramienta de actualización. Para completar esta actualización, por favor visita la URL que será mostrada cuando los ficheros hayan sido copiados.';
$l['softsubmit'] = 'Actualizar';
$l['congrats'] = 'Felicidades, el software ha sido actualizado correctamente';
$l['succesful'] = 'ha sido correctamente actualizado en';
$l['admin_url'] = 'URL de administración';
$l['setup_continue'] = 'De todas formas, la actualización será completada por el propio programa, así que por favor visita la siguiente URL';
$l['enjoy'] = 'Esperamos que el proceso de actualización haya sido fácil.';
$l['upgrade_notes'] = 'A continuación algunas notas importantes. Es altamente recomendable que las leas ';
$l['please_note'] = '<b>NOTA</b>: '.APP.' es únicamente un auto instalador y no provee ningún soporte para el software. Por favor, visita la web del desarrollador para encontrar soporte!';
$l['regards'] = 'Atentamente';
$l['softinstaller'] = APP.' Auto Installer';
$l['return'] = 'Volver a vista resumen';
$l['note_backup'] = 'Es recomendable que hagas una <a href="'.$globals['index'].'act=backup&insid=&soft-1;">copia de seguridad</a> de la instalación antes de actualizar.';
$l['create_backup'] = 'Create Backup';
$l['create_backup_exp'] = 'Create a Backup before upgrading';
$l['prog_upgrading'] = 'Upgrading ';// Dont remove the trailing space
$l['prog_upgrade_complete'] = 'Upgrade Completed.';

$l['upgrade_tweet_sub'] = 'Tell your friends';
$l['not_in_free'] = '<b>&soft-1;</b> cannot be upgraded in the Free version of '.APP.'!';
$l['notify_admin'] = 'Please notify your Server Admin to purchase the premium version of '.APP.'!';

