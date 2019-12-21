<?php

//////////////////////////////////////////////////////////////
//===========================================================
// js_lang.php
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

$l['no_info_file'] = 'INFO.XML ¡el archivo no se pudo encontrar! Por favor, informa de ello al administrador del servidor.';
$l['incompatible'] = '¡El software requiere una versión más reciente de '.APP.'! Por favor, informa de ello al administrador del servidor.';
$l['no_install'] = 'INSTALL.XML ¡el archivo no se pudo encontrar! Por favor, informa de ello al administrador del servidor.';
$l['no_functions'] = 'INSTALL FUNCTIONS ¡el archivo no se pudo encontrar! Por favor, informa de ello al administrador del servidor.';
$l['no_softdomain'] = 'No has seleccionado el dominio dónde se instalará el software.';
$l['wrong_softdomain'] = 'La ruta del dominio seleccionado no se puede encontrar.';
$l['no_space'] = '¡No dispones de espacio suficiente para instalar el software!';
$l['no_field'] = 'El campo <b>&soft-1;</b> es obligatorio y debe rellenarse.';
$l['no_package'] = '¡El paquete de instalación no se pudo encontrar!';
$l['no_decompress'] = 'Hubo algunos errores al descomprimir los archivos del paquete.';
$l['mail_new_ins'] = 'Se ha completado una nueva instalación de &soft-1;. Los detalles de la instalación se muestran abajo:';
$l['mail_path'] = 'Ruta';
$l['mail_url'] = 'URL';
$l['mail_time'] = 'Fecha de la instalación';
$l['mail_subject'] = 'Nueva instalación de &soft-1;';
$l['some_files_exist'] = 'La instalación no ha podido continuar ya que los siguientes archivos ya existen en el directorio de destino : ';
$l['delete_files'] = 'Por favor borra esos archivos ó escoje otra carpeta.';
$l['checking_data'] = 'Comprobación de los datos presentados';
$l['unzipping_files'] = 'Copiando archivos y carpetas';
$l['unzipping_datadir'] = 'Descomprimiendo archivos';
$l['prop_db'] = 'Propagando la base de datos';
$l['finishing_process'] = 'Acabando Instalación';
$l['wait_note'] = '<b>NOTE:</b> Este proceso puede tardar 3-4 minutos. Por favor, no deje esta página hasta que la barra de progreso llegue al 100%';
$l['softdirectory_invalid'] = 'El directorio que ha escrito no es válido.';
$l['err_domain'] = 'No Domain';
$l['err_domain_admin'] = 'This User does not have any Domain. Please contact Administrator.';
$l['no_sel_inst'] = 'No hay instalaciones seleccionadas';
$l['del_insid'] = '¿Está seguro que desea eliminar las instalaciones seleccionadas ?';
$l['ins_emailto'] = 'Email installation details to';
$l['no_https'] = 'A trusted SSL Certificate was not found';
$l['err_dbprefix'] = 'Table Prefix is invalid. Valid values are a-z or A-Z or 0-9 or _';
$l['auto_backup_not_allowed'] = 'The auto backup frequency you chose is invalid';
$l['invalid_script'] = 'Invalid Script ID';
$l['not_js_script'] = 'This script is not JavaScript';
$l['no_domain_found'] = 'No domain found. Please add a domain to install the script';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['install'] = 'Instalar';
$l['overview'] = 'Resumen';
$l['features'] = 'Características';
$l['demo'] = 'Demo';
$l['ratings'] = 'Valoraciones';
$l['import'] = 'Importar';
$l['software_ver'] = 'Versión';
$l['space_req'] = 'Espacio necesario';
$l['available_space'] = 'Espacio disponible';
$l['req_space'] = 'Espacio requerido';
$l['mb'] = 'MB';
$l['software_support'] = 'Ayuda técnica del Software';
$l['support_link'] = 'Visita el sitio de ayuda';
$l['support_note'] = 'Nota: Softaculous no ofrece ayuda para ninguno de sus programas.';
$l['setup'] = 'Configuración del software';
$l['choose_domain'] = 'Dominio';
$l['choose_domain_exp'] = 'Por favo escoja el dominio dónde se instalará el.';
$l['in_directory'] = 'Directorio';
$l['in_directory_exp'] = 'El directorio es relativo a tu dominio y será <b>creado si no existe</b>. Por ejemplo, para instalar en http://mydomain/dir/ escribe <b>dir</b>. Para instalar directamente en http://mydomain/ deja este espacio vacío.';
$l['softsubmit'] = 'Instalar';
$l['congrats'] = 'Enhorabuena, el software se ha instalado correctamente';
$l['succesful'] = 'ha sido correctamente instalado en';
$l['enjoy'] = 'Esperamos que el proceso de instalación haya sido fácil.';
$l['install_notes'] = 'Lo siguiente son algunas notas importantes. Es muy recomendable que prestes atención y las leas ';
$l['please_note'] = '<b>NOTA</b>: '.APP.' sólamente es nu sotware de instalación automática y no ofrece ayuda técnica. ¡Por favor, visita el desarrollador del software para obtener ayuda!';
$l['regards'] = 'Saludos';
$l['softinstaller'] = 'Auto instalador '.APP.'';
$l['return'] = 'Volver';
$l['current_ins'] = 'Instalaciones activas';
$l['link'] = 'Enlace';
$l['ins_time'] = 'Fecha de la instalación';
$l['version'] = 'Versión';
$l['upd_to'] = 'Actualizar a Versión';
$l['remove'] = 'Borrar';
$l['no_info'] = 'Sin información';
$l['ratesoft'] = 'Valorar este script';
$l['reviews'] = 'Opiniones';
$l['reviewsoft'] = 'Escribir una opinión';
$l['readreviews'] = 'Leer opiniones';
$l['reviews_exp'] = 'Leer opiniones escritas por otros usuarios y';
$l['ins_type'] = 'Tipo de instalación';
$l['ins_type_exp'] = '<b>Paquete original</b> - Paquete disponible. <br /> <b>Archivos de librería</b> - Únicamente los archivos de librería Javascript.';
$l['ori_pack'] = 'Paquete original';
$l['just_lib'] = 'Archivos de librería';
$l['overwrite_exist'] = '<b>OR</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">Marca el cuadro para sobreescribir todos los archivos y continuar</span></b>';
$l['overwrite'] = 'Sobreescribir archivos';
$l['choose_protocol'] = 'Eleja protocolo';
$l['choose_protocol_exp'] = 'Si su sitio tiene SSL, por favor, elija el protocolo HTTPS.';
$l['clone'] = 'Clone';
$l['options'] = 'Options';
$l['downloading'] = 'Descarga de paquetes';
$l['installing'] = 'Instalacion de Scripts';
$l['go'] = 'Ir';
$l['rem_inst_id'] = 'Eliminando instalacion - ';
$l['inst_remvd'] = 'La instalación seleccionada (s) se han eliminado. Por favor recargue la pagina !';
$l['release_date'] = 'Release Date';
$l['adv_option'] = 'Advanced Options';
$l['disable_notify_update'] = 'Disable Update Notification Emails';
$l['exp_disable_notify_update'] = 'If checked you will not receive an email notification for updates available for this installation.';
$l['prog_installing'] = 'Installing '; // Dont remove trailing space
$l['prog_install_complete'] = 'Installation Completed.';

$l['auto_backup'] = 'Automated backups';
$l['exp_auto_backup'] = APP.' will take automated backups via CRON as per the frequency you select';
$l['auto_backup_rotation'] = 'Backup Rotation';
$l['exp_auto_backup_rotation'] = 'If the backup rotation limit is reached '.APP.' will delete the oldest backup for this installation and create a new backup. The backups will utilize your space so choose the backup rotation as per the space available on your server';
$l['no_backup'] = 'Don\'t backup';
$l['daily'] = 'Once a day';
$l['weekly'] = 'Once a week';
$l['monthly'] = 'Once a month';
$l['unlimited'] = 'Unlimited';
$l['changelog'] = 'Changelog';
$l['act_upgrade'] = 'Recently Upgraded';
$l['act_clone'] = 'Recently Cloned';
$l['act_backup'] = 'Recently Backed up';
$l['act_install'] = 'Recently Installed';
$l['act_edit'] = 'Recently Edited';
$l['act_import'] = 'Recently Imported';
$l['act_restore'] = 'Recently Restored';
$l['ampps_download'] = 'You can develop <b>&soft-1;</b> on your <b>desktop</b> using our Free developer tool Softaculous AMPPS. Click <a href="http://www.ampps.com/download?give=latest" target="_blank"><b>here</b></a> to download <a href="http://www.ampps.com/download?give=latest" target="_blank"><img src="https://images.softaculous.com/ampps.gif" height="25" /></a>';

$l['install_tweet_sub'] = 'Tell your friends about your new site';
$l['err_auto_backup_limit'] = 'The auto backup rotation cannot be more than <b>&soft-1;</b>';
$l['select_domain'] = 'Select Domain';
$l['with_selected'] = 'With Selected';
$l['not_in_free'] = '<b>&soft-1;</b> cannot be installed in the Free version of '.APP.'!';
$l['notify_admin'] = 'Please notify your Server Admin to purchase the premium version of '.APP.'!';
$l['related_scripts'] = 'Related Scripts';
$l['backup'] = 'Backup';
$l['editdetail'] = 'Edit Details';
$l['install_now'] = 'Instalar ahora';
$l['my_apps'] = 'Mis aplicaciones';

$l['bad'] = 'Bad';
$l['good'] = 'Good';
$l['strong'] = 'Strong';
$l['short'] = 'Short';
$l['strength_indicator'] = 'Strength Indicator';

$l['backup_location'] = 'Backup Location';
$l['backup_location_exp'] = 'Choose the backup location to be used while backing up this installation';
$l['default'] = 'Default';
$l['invalid_backup_location'] = 'Backup location submitted does not exist';
$l['local_folder'] = 'Local Folder';

$l['no_cron_min'] = 'No Cron minute was specified';
$l['no_cron_hour'] = 'No Cron hour was specified';
$l['no_cron_day'] = 'No Cron day was specified';
$l['no_cron_month'] = 'No Cron month was specified';
$l['no_cron_weekday'] = 'No Cron weekday was specified';

$l['custom_autobackup'] = 'Custom';
$l['custom_autobackup_cron'] = 'Automated Backups Cron time';
$l['custom_autobackup_cron_exp'] = 'Please specify the CRON timings for automated backups';

//Errors for autobcakup cron settings
$l['wrong_autobackup_cron_min'] = 'Automated Backup cron minute is wrong. Valid values are 0-59 or a *';
$l['wrong_autobackup_cron_hour'] = 'Automated Backup cron hour is wrong. Valid values are 0-23 or a *';
$l['wrong_autobackup_cron_day'] = 'Automated Backup cron day is wrong. Valid values are 1-31 or a *';
$l['wrong_autobackup_cron_month'] = 'Automated Backup cron month is wrong. Valid values are 1-12 or a *';
$l['wrong_autobackup_cron_weekday'] = 'Automated Backup cron weekday is wrong. Valid values are 0-7 or a *';

$l['quick_install'] = 'Quick Install';
$l['custom_install'] = 'Custom Install';

$l['outdated_script'] = '<b>&soft-1;</b> has not been updated for more than two years and may no longer be maintained or supported by the script vendor';
$l['ampps_notify_premium'] = 'This feature is available in the premium version of AMPPS. Please purchase <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';

$l['choose_url'] = 'Choose Installation URL';
$l['choose_url_exp'] = 'Please choose the URL to install the software';

$l['error_max_ins_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Installations allowed per script';
$l['notify_ver'] = 'Notify '.$globals['sn'].' of a new Version';
$l['notifyversion'] = 'Thank you for informing about the new version. We will look into it as soon as possible';