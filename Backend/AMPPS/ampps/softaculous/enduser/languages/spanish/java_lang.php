<?php

//////////////////////////////////////////////////////////////
//===========================================================
// java_lang.php
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

$l['java_message'] = 'Por favor, instale JAVA <a href="'.$globals['index'].'act=apps&app=37">Este es el link</a>';
$l['java_title'] = 'Java no esta instalado en su servidor';
$l['no_info_file'] = 'El fichero INFO.XML no puede ser encontrado! Por favor, informe al administrador del servidor.';
$l['incompatible'] = 'El software requeire una version mas actualizada de '.APP.'! Por favor, informe al administrador del servidor.';
$l['no_install'] = 'El fichero INSTALL.XML no puede ser encontrado! Por favor, informe al administrador del servidor.';
$l['no_functions'] = 'El fichero INSTALL FUNCTIONS no puede ser encontrado! Por favor, informe al administrador del servidor.';
$l['no_softdomain'] = 'Usted no escogió el dominio para instalar el software.';
$l['wrong_softdomain'] = 'La ruta de dominio no se ha podido encontrar.';
$l['softdirectory_exists'] = 'El directorio que ha escrito ya existe! Por favor, escriba otro nombre de directorio.';
$l['no_space'] = 'Usted no tiene espacio suficiente para instalar este software!';
$l['no_softdb'] = 'La base de datos no ha sido publicada.';
$l['database_exists'] = 'La base de datos ya existe. Por favor, elija un nombre diferente.';
$l['databaseuser_exists'] = 'El usuario de base de datos ya existe. Por favor, elija un nombre de base de datos diferente.';
$l['db_name_long'] = 'El nombre de base de datos no puede ser mayor que 7 caracteres. Por favor, elija un nombre de base de datos más corto.';
$l['db_limit_crossed'] = 'El número máximo de bases de datos que se pueden crear se ha alcanzado, la instalación no puede continuar.';
$l['no_field'] = 'El campo <b>&soft-1;</b> es requerido y debe ser rellenado.';
$l['error_adddb'] = 'La Base de Datos no puede ser creada';
$l['error_adduser'] = 'Se ha producido un error al añadir un usuario a la base de datos nueva';
$l['no_package'] = 'El paquete de instalación no se ha encontrado!';
$l['no_decompress'] = 'Hubo algunos errores en la descompresión de los archivos del paquete.';
$l['mail_new_ins'] = 'Una nueva instalacion de &soft-1; ha sido completada. Los detalles de instalacion se mostraran a continuacion:';
$l['mail_path'] = 'Ruta';
$l['mail_url'] = 'URL';
$l['mail_admin_url'] = 'Admin URL';
$l['mail_admin'] = 'Admin Username';
$l['mail_pass'] = 'Admin Pass';
$l['mail_db'] = 'MySQL Database';
$l['mail_dbuser'] = 'MySQL DB User';
$l['mail_dbhost'] = 'MySQL DB Host';
$l['mail_dbpass'] = 'MySQL DB Password';
$l['mail_time'] = 'Time of Installation';
$l['mail_subject'] = 'Nueva instalacion de &soft-1;';
$l['no_cron_min'] = 'No se han especificado los minutos en CRON';
$l['no_cron_hour'] = 'No se han especificado la hora en CRON';
$l['no_cron_day'] = 'No se ha especificado los dias en CRON';
$l['no_cron_month'] = 'No se han especificado los meses en CRON';
$l['no_cron_weekday'] = 'No se han especificado los dias de la semana en CRON';
$l['wrong_cron_min'] = 'Minutos Cron es erróneo. Los valores válidos son 0-59 o a <b>*</b>';
$l['wrong_cron_hour'] = 'Horas Cron es erróneo. Los valores válidos son 0-23 o a <b>*</b>';
$l['wrong_cron_day'] = 'Día Cron es erróneo. Los valores válidos son 1-31 o a <b>*</b>';
$l['wrong_cron_month'] = 'Mes Cron es erróneo. Los valores válidos son 1-12 o a <b>*</b>';
$l['wrong_cron_weekday'] = 'Día de la semana Cron es erróneo. Los valores válidos son 0-7 o a <b>*</b>';
$l['mail_cron'] = 'Cron Job';
$l['no_datadir'] = 'No se ha especificado el directorio de datos';
$l['datadir_exists'] = 'El directorio de datos que ha enviado existe. Por favor, especifique otro.';
$l['no_decompress_data'] = 'Hubo algunos errores en la descompresión de los archivos de datos.';
$l['mail_datadir'] = 'Directorio de Datos';
$l['some_files_exist'] = 'La instalación no puede continuar debido a los siguientes archivos ya existen en la carpeta de destino: ';
$l['delete_files'] = 'Por favor, elimine estos archivos o seleccione otra carpeta.';
$l['overwrite_exist'] = '<b>OR</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">Seleccione la opción para sobrescribir todos los archivos y continuar.</span></b>';
$l['checking_data'] = 'Comprobación de los datos presentados.';
$l['unzipping_files'] = 'Copia de archivos y carpetas.';
$l['unzipping_datadir'] = 'Descomprimiendo los archivos de datos';
$l['prop_db'] = 'Propagación de la base de datos';
$l['finishing_process'] = 'Finalizando instalacion';
$l['wait_note'] = '<b>NOTE:</b> Este proceso puede tardar 3-4 minutos. Por favor, no deje esta página hasta que la barra de progreso alcance 100%';
$l['no_hostname'] = 'Introduzca su nombre de host de base de datos';
$l['no_dbusername'] = 'Por favor, introduzca su nombre de usuario de base de datos';
$l['no_dbuserpass'] = 'Introduzca su contraseña de base de datos';
$l['softdirectory_invalid'] = 'El directorio que ha escrito no es válido.';
$l['softdatadir_invalid'] = 'El directorio de datos que ha escrito no es válido.';
$l['no_dir'] = 'Por favor, proporcione un nombre de directorio.';
$l['err_pass_strength'] = 'Password strength must be greater than ';
$l['no_https'] = 'A trusted SSL Certificate was not found';
$l['err_dbprefix'] = 'Table Prefix is invalid. Valid values are a-z or A-Z or 0-9 or _';
$l['no_mysql_install'] = 'MySQL is not installed. To install it, please click <a href="'.$globals['index'].'act=apps&app=16">here</a>';
$l['auto_backup_not_allowed'] = 'The auto backup frequency you chose is invalid';
$l['invalid_script'] = 'Invalid Script ID';
$l['not_java_script'] = 'This script is not in Java';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['install'] = 'Instalacion';
$l['overview'] = 'Genereal';
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
$l['support_link'] = 'Visite el sitio de soporte';
$l['support_note'] = 'Nota: Softaculous no proporciona soporte para el software.';
$l['setup'] = 'Software Setup';
$l['choose_domain'] = 'Elija dominio';
$l['choose_domain_exp'] = 'Por favor, elegir el dominio para instalar el software.';
$l['in_directory'] = 'En directorio';
$l['in_directory_exp'] = 'El directorio es relativo a su dominio y <b> no debería existir </b>. por ejemplo Para instalar en http://mydomain/dir/ solo debe escribir <b>dir</b>.';
$l['database_name'] = 'Nombre de Base de Datos';
$l['database_name_exp'] = 'Escriba el nombre de la base de datos que se creó para la instalación';
$l['softcopy_note'] = '<b>NOTE</b>: Este software requiere que esté instalado utilizando su utilidad propia instalación. Por favor, visite la dirección URL que se mostrará una vez que los archivos se han copiado para completar el proceso de instalación.';
$l['softsubmit'] = 'Instalacion';
$l['congrats'] = 'Felicidades, el software se ha instalado correctamente.';
$l['succesful'] = 'Ha sido instalado con éxito en';
$l['admin_url'] = 'URL Administrativo ';
$l['setup_continue'] = 'Sin embargo, la instalación se completará con el propio software. Para completar la instalación, por favor visite la siguiente URL';
$l['enjoy'] = 'Esperamos que el proceso de instalación fue fácil.';
$l['install_notes'] = 'Las siguientes son algunas notas importantes. Se recomienda encarecidamente que las lea.';
$l['please_note'] = '<b>NOTE</b>: '.APP.' is just an automatic software installer and does not provide any support for the individual software packages. Please visit the software vendor\'s web site for support!Softaculous es sólo un instalador del software automático y no ofrece ningún apoyo para los paquetes de software individuales. Por favor visite el sitio web de proveedor para soporte de software!';
$l['regards'] = 'Saludos';
$l['softinstaller'] = APP.' Auto Instalador';
$l['return'] = 'Volver a General';
$l['current_ins'] = 'Instalaciones Actuales';
$l['link'] = 'Link';
$l['ins_time'] = 'Tiempo de instalacion';
$l['version'] = 'Version';
$l['upd_to'] = 'Actualizar a la versión.';
$l['remove'] = 'Eliminar';
$l['no_info'] = 'No Info';
$l['randpass'] = 'Generar una contraseña aleatoria.';
$l['ratesoft'] = 'Valorar este script.';
$l['reviews'] = 'Comentarios';
$l['reviewsoft'] = 'Escriba su opinion';
$l['readreviews'] = 'Leer reseñas';
$l['reviews_exp'] = 'Leer los comentarios escritos por otros usuarios y';
$l['cron_job'] = 'CRON Job';
$l['cron_job_exp'] = 'Este script requiere un CRON para trabajar. Por favor, especifique los intervalos de cron. Si no son conscientes de ello, dejarlo como está!';
$l['cron_min'] = 'Minutos';
$l['cron_hour'] = 'Horas';
$l['cron_day'] = 'Dia';
$l['cron_month'] = 'Mes';
$l['cron_weekday'] = 'Semana';
$l['datadir'] = 'Directorio de Datos';
$l['datadir_exp'] = 'Este script requiere para almacenar sus datos en una carpeta no es accesible a través de la web. Se creará en la carpeta de inicio. es decir, si se especifica <b>datadir</b> la siguiente se creará - /home/username/<b>datadir</b>';
$l['db_alpha_num'] = 'Sólo caracteres alfanuméricos son permitidos para el nombre de base de datos.';
$l['overwrite'] = 'Sobreescribir ficheros';
$l['ins_emailto'] = 'Email de detalels de instalacion en';
$l['choose_protocol'] = 'Elegir protocolo';
$l['choose_protocol_exp'] = 'Si su sitio tiene SSL, por favor, elija el protocolo HTTPS.';
$l['clone'] = 'Clone';
$l['backup'] = 'Backup';
$l['options'] = 'Opciones';
$l['admin'] = 'Admin';
$l['notify_ver'] = 'Notificacion '.$globals['sn'].' de una nueva version';
$l['notifyversion'] = 'Gracias por informarnos acerca de la nueva versión. la tendrá disponible tan pronto como sea posible';
$l['del_insid'] = '¿Está seguro que desea eliminar las instalaciones seleccionadas? La acción será irreversible. \ No se le pediran mas confirmaciones.';
$l['rem_inst_id'] = 'Eliminando instalacion - ';
$l['no_sel_inst'] = 'No se ha seleccionado ninguna instalacion para eliminar.';
$l['inst_remvd'] = 'La instalación seleccionada (s) se han eliminado. Por favor, recargue la pagina !';
$l['remove'] = 'Eliminar';
$l['go'] = 'Ir';
$l['screenshots'] = 'Imagenes';
$l['downloading'] = 'Descarga de paquetes';
$l['installing'] = 'Instalacion de Scripts';
$l['editdetail'] = 'Editar detalles';
$l['publish'] = 'Publicar en la web';
$l['hostname'] = 'Nombre de maquina de la Base de Datos';
$l['hostname_exp'] = 'Nombre de maquina de la Base de Datos MySQL  (principalmente <b>localhost</b>)';
$l['dbusername'] = 'Usuario de la Base de Datos ';
$l['dbusername_exp'] = 'Usuario MySQL ';
$l['dbuserpass'] = 'Database Password';
$l['dbuserpass_exp'] = 'Password de usuario de la base de datos MySQL';
$l['database_name_exp_aefer'] = 'Escriba el nombre de la base de datos que se utilizará para la instalación';
$l['sel_version'] = 'Seleccione version';
$l['choose_version_exp'] = 'Por favor seleccione la versión a instalar.';
$l['choose_version'] = 'Seleccione la versión que desea instalar';
$l['select'] = 'Seleccionar';
$l['release_date'] = 'Release Date';
$l['adv_option'] = 'Advanced Options';
$l['disable_notify_update'] = 'Disable Update Notifications Emails';
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
$l['no_java_support'] = 'Java script installation is not supported on this panel';

$l['choose_url'] = 'Choose Installation URL';
$l['choose_url_exp'] = 'Please choose the URL to install the software';

$l['error_max_ins_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Installations allowed per script';