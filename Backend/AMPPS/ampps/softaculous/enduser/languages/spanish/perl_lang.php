<?php

//////////////////////////////////////////////////////////////
//===========================================================
// software_lang.php
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

$l['no_info_file'] = 'El archivo Info.xml no se ha encontrado! Por favor, informe al administrador del servidor.';
$l['incompatible'] = 'El software requiere una versión más alta de '.APP.'! Por favor, informe al administrador del servidor.';
$l['no_install'] = 'El fichero INSTALL.XML no se ha encontrado! Por favor reporte el error al administrador del servidor.';
$l['no_functions'] = 'El archivo INSTALL FUNCIONES no se ha encontrado! Por favor, informe al administrador del servidor.';
$l['no_softdomain'] = 'Debe elegir un dominio para instalar el software.';
$l['wrong_softdomain'] = 'No se ha encontrado la ruta del dominio seleccionada.';
$l['softdirectory_exists'] = 'El directorio que ha escrito ya existe! Por favor escriba otro nombre de directorio.';
$l['no_space'] = 'No tiene espacio suficiente para instalar este software!';
$l['no_softdb'] = 'La base de datos no esta disponible.';
$l['database_exists'] = 'La base de datos ya existe. Por favor, elija otro nombre.';
$l['databaseuser_exists'] = 'El usuario de base de datos ya existe. Por favor, elija un nombre de base de datos diferente.';
$l['db_name_long'] = 'El nombre de base de datos no puede ser mayor de 7 caracteres. Por favor, elija un nombre de base de datos más corto.';
$l['db_limit_crossed'] = 'El número máximo de bases de datos que se pueden crear se ha alcanzado, por lo que la instalación no puede continuar.';
$l['no_field'] = 'el campo <b>&soft-1;</b> es requerido y debe ser rellenado.';
$l['error_adddb'] = 'La Base de Datos no ha sido creada';
$l['error_adduser'] = 'Se ha producido un error al añadir un usuario a la base de datos nueva';
$l['no_package'] = 'El paquete de instalación no se pudo encontrar!';
$l['no_decompress'] = 'Ocurrieron algunos errores en la descompresión de los archivos del paquete.';
$l['mail_new_ins'] = 'La nueva instalacion of &soft-1; ha concluido. Los detalles de la instalacion se mostraran a continuacion:';
$l['mail_path'] = 'Ruta';
$l['mail_url'] = 'URL';
$l['mail_admin_url'] = 'Admin URL';
$l['mail_admin'] = 'Usuario Administrador ';
$l['mail_pass'] = 'Admin Pass';
$l['mail_db'] = 'MySQL Database';
$l['mail_dbuser'] = 'MySQL DB User';
$l['mail_dbhost'] = 'MySQL DB Host';
$l['mail_dbpass'] = 'MySQL DB Password';
$l['mail_time'] = 'Tiempo de instalacion';
$l['mail_subject'] = 'Nueva instalacion de &soft-1;';
$l['no_cron_min'] = 'No se han especificado minutos en la tarea CRON';
$l['no_cron_hour'] = 'No se ha especificado la hora en la tarea CRON';
$l['no_cron_day'] = 'El dia no ha sido especificado en la tarea CRON';
$l['no_cron_month'] = 'El mes no se ha especificado en la tarea CRON';
$l['no_cron_weekday'] = 'No se han especificado dias de la semana en la tarea CRON';
$l['wrong_cron_min'] = 'El valor especificado para Minutos en la tarea de Cron es erróneo. Los valores válidos son 0-59  <b>*</b>';
$l['wrong_cron_hour'] = 'Formato de hora invalido. Los valores validos son 0-23 <b>*</b>';
$l['wrong_cron_day'] = 'Formato de dia invalido. Los valores validos son 1-31 <b>*</b>';
$l['wrong_cron_month'] = 'Formato de mes invalido. Los valores validos son 1-12 <b>*</b>';
$l['wrong_cron_weekday'] = 'Formato de dia de semana invalido. Los valores validos son 0-7  <b>*</b>';
$l['mail_cron'] = 'Cron Job';
$l['no_datadir'] = 'No se ha especificado el directorio de datos';
$l['datadir_exists'] = 'El directorio de datos que ha enviado ya existe. Por favor, especifique otro.';
$l['no_decompress_data'] = 'Hubo algunos errores en la descompresión de los archivos de datos.';
$l['mail_datadir'] = 'Directorio de Datos';
$l['some_files_exist'] = 'La instalación no puede continuar debido a los siguientes archivos ya existen en la carpeta de destino : ';
$l['delete_files'] = 'Por favor, elimine estos archivos o elegir otra carpeta.';
$l['overwrite_exist'] = '<b>OR</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">Seleccione la opción para sobrescribir todos los archivos y continuar</span></b>';
$l['www_files_exist'] = 'La instalación no puede continuar debido a los siguientes archivos ya existen en el directorio WEB';
$l['no_decompress_www'] = 'Hubo algunos errores en la descompresión de los archivos Web.';
$l['no_config_perl_path'] = 'Se produjo un error al configurar los archivos CGI.';
$l['mail_wwwdir'] = 'Directorio Web';
$l['checking_data'] = 'Comprobación de los datos presentados';
$l['unzipping_files'] = 'Copia de archivos y carpetas';
$l['unzipping_datadir'] = 'Descomprimir los archivos de datos';
$l['prop_db'] = 'Propagación de la base de datos';
$l['finishing_process'] = 'Terminando instalacion';
$l['wait_note'] = '<b>NOTE:</b> Este proceso puede tardar 3-4 minutos. Por favor, no deje esta página hasta que la barra de progreso llegue al 100%';
$l['softdirectory_invalid'] = 'El directorio que ha escrito no es válido.';
$l['softdatadir_invalid'] = 'El directorio de datos que ha escrito no es válido.';
$l['wwwdir_invalid'] = 'El directorio WWW que ha escrito no es válido.';
$l['err_pass_strength'] = 'Password strength must be greater than ';
$l['no_https'] = 'A trusted SSL Certificate was not found';
$l['err_dbprefix'] = 'Table Prefix is invalid. Valid values are a-z or A-Z or 0-9 or _';
$l['no_perl_install'] = 'PERL is not installed. To install it, please click <a href="'.$globals['index'].'act=apps&app=19">here</a>';
$l['no_mysql_install'] = 'MySQL is not installed. To install it, please click <a href="'.$globals['index'].'act=apps&app=16">here</a>';
$l['auto_backup_not_allowed'] = 'The auto backup frequency you chose is invalid';
$l['invalid_script'] = 'Invalid Script ID';
$l['not_perl_script'] = 'This script is not in PERL';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['install'] = 'Instalacion';
$l['overview'] = 'Visión de conjunto';
$l['features'] = 'Caracteristicas';
$l['demo'] = 'Demo';
$l['ratings'] = 'Valoraciones';
$l['import'] = 'Importacion';
$l['software_ver'] = 'Version';
$l['space_req'] = 'Espacio requerido';
$l['available_space'] = 'Espacio disponible';
$l['req_space'] = 'Espacio requerido';
$l['mb'] = 'MB';
$l['software_support'] = 'Soporte de Software';
$l['support_link'] = 'Visite el soporte del sitio';
$l['support_note'] = 'Nota: Softaculous no da soporte de ningun software.';
$l['setup'] = 'Configuracion de Software ';
$l['choose_domain'] = 'Elija dominio';
$l['choose_domain_exp'] = 'Por favor elija un dominio para instalar el software.';
$l['in_directory'] = 'En Directory';
$l['in_directory_exp'] = 'El directorio es relativo a su dominio y <b> no debería existir </b>. por ejemplo Para instalar en http://mydomain/dir/ sólo tienes que escribir <b>dir</b>. Para instalar sólo en http://mydomain/ salir de este vacío.';
$l['database_name'] = 'Nombre del Database';
$l['database_name_exp'] = 'Escriba el nombre de la base de datos que se creó para la instalación';
$l['softcopy_note'] = '<b>NOTA</b>: Este software requiere que esté instalado utilizando su utilidad propia instalación. Por favor, visite la dirección URL que se mostrará una vez que los archivos se han copiado para completar el proceso de instalación.';
$l['softsubmit'] = 'Instalacion';
$l['congrats'] = 'Felicidades, el software se ha instalado correctamente';
$l['succesful'] = 'ha sido instalado con éxito en';
$l['admin_url'] = 'URL Administrativo';
$l['setup_continue'] = 'Sin embargo, la instalación se completará con el propio software. Para completar la instalación, por favor visite la siguiente URL';
$l['enjoy'] = 'Esperamos que el proceso de instalación fuera sencillo.';
$l['install_notes'] = 'Las siguientes son algunas notas importantes. Se recomienda encarecidamente que las lea';
$l['please_note'] = '<b>NOTA</b>: '.APP.' es sólo un instalador del software automático y no ofrece ningún apoyo para los paquetes de software individuales. Por favor visite el sitio proveedor de software web para soporte!';
$l['regards'] = 'Saludos';
$l['softinstaller'] = APP.' Autoinstalador';
$l['return'] = 'Volver a vista general';
$l['current_ins'] = 'Instalaciones Actuales';
$l['link'] = 'Enlaces';
$l['ins_time'] = 'Tiempo de instalacion';
$l['version'] = 'Version';
$l['upd_to'] = 'Actualizar a version';
$l['remove'] = 'Eliminar';
$l['no_info'] = 'No existe informacion';
$l['randpass'] = 'Generar una contraseña aleatoria';
$l['ratesoft'] = 'Valorar este script';
$l['reviews'] = 'Comentarios';
$l['reviewsoft'] = 'Escribir un comentario';
$l['readreviews'] = 'Leer comentarios';
$l['reviews_exp'] = 'Leer comentarios escritos por otros usuarios';
$l['cron_job'] = 'CRON Job';
$l['cron_job_exp'] = 'Este script requiere un CRON para trabajar. Por favor, especifique los intervalos de cron. Si no son conscientes de ello, dejarlo como está!';
$l['cron_min'] = 'Minutos';
$l['cron_hour'] = 'Horas';
$l['cron_day'] = 'Dia';
$l['cron_month'] = 'Mes';
$l['cron_weekday'] = 'Semana';
$l['datadir'] = 'Directorio de Datos';
$l['datadir_exp'] = 'Este script requiere almacenar sus datos en un directorio no accesible via web. Se creara en su directorio home, por ejmplo, si especifica <b>datadir</b> la siguiente carpeta - /home/username/<b>sera creada</b>';
$l['db_alpha_num'] = 'Solo se permiten caracteres alfanumericos para especificar el nombre de la Base de Datos.';
$l['overwrite'] = 'Sobreescribir ficheros';
$l['ins_emailto'] = 'Los detalles de la instalacion se enviaran al mail';
$l['choose_protocol'] = 'Elija protocolo';
$l['choose_protocol_exp'] = 'Si su sitio permite SSL, por favor elija protocolo HTTPS';
$l['clone'] = 'Clone';
$l['backup'] = 'Backup';
$l['options'] = 'Opciones';
$l['admin'] = 'Admin';
$l['notify_ver'] = 'Notificacion '.$globals['sn'].' de nueva version';
$l['notifyversion'] = 'Gracias por informar de la existencia de una nueva version. Introduciremos la actualizacion lo antes posible';
$l['del_insid'] = 'Esta seguro de que desea eliminar la instalacion seleccionada? Esta accion será irreversible, no se le preguntarán mas confirmaciones.';
$l['rem_inst_id'] = 'Eliminando instalacion - ';
$l['no_sel_inst'] = 'No se ha seleccionado ninuna instalacion para eliminar.';
$l['inst_remvd'] = 'La instalacion seleccionada ha sido eliminada. La pagina se actualizara en unos instantes !';
$l['remove'] = 'Eliminar';
$l['go'] = 'Ir';
$l['screenshots'] = 'Capturas de pantalla';
$l['downloading'] = 'Descargar paquete';
$l['installing'] = 'Instalando Script';
$l['editdetail'] = 'Editar Detalles';
$l['wwwdir'] = 'Directorio Web';
$l['wwwdir_exp'] = 'El directorio es accesible via web';
$l['publish'] = 'Publicar en la web';
$l['release_date'] = 'Release Date';
$l['adv_option'] = 'Advanced Options';
$l['disable_notify_update'] = 'Disable Update Notification Emails';
$l['exp_disable_notify_update'] = 'If checked you will not receive an email notification for updates available for this installation.';
$l['prog_installing'] = 'Installing '; // Dont remove trailing space
$l['prog_install_complete'] = 'Installation Completed.';
$l['bad'] = 'Bad';
$l['good'] = 'Good';
$l['strong'] = 'Strong';
$l['short'] = 'Short';
$l['strength_indicator'] = 'Strength Indicator';
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
$l['soft_ins_exists'] = 'An installation already exists at &soft-1; as per our records. To re-install the application please uninstall the existing installation!';
$l['install_now'] = 'Instalar ahora';
$l['my_apps'] = 'Mis aplicaciones';

$l['backup_location'] = 'Backup Location';
$l['backup_location_exp'] = 'Choose the backup location to be used while backing up this installation';
$l['default'] = 'Default';
$l['invalid_backup_location'] = 'Backup location submitted does not exist';
$l['local_folder'] = 'Local Folder';

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