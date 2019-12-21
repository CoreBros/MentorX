<?php

//////////////////////////////////////////////////////////////
//===========================================================
// software_lang.php
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

$l['no_info_file'] = '¡No se puede encontrar el archivo INFO.XML! Por favor, contactar al administrador del Servidor.';
$l['incompatible'] = '¡El programa requiere una versión superior de '.APP.'! Por favor, contactar al administrador del Servidor.';
$l['no_install'] = '¡No se puede encontrar el archivo INSTALL.XML! Por favor, contactar al administrador del Servidor.';
$l['no_functions'] = '¡No se puede encontrar el archivo INSTALL FUNCTIONS!. Por favor, contactar al administrador del Servidor.';
$l['no_remove_functions'] = 'The REMOVE FUNCTIONS file could not be found! Please report this to the server administrator.';
$l['no_softdomain'] = 'No se ha seleccionado el dominio donde instalar el programa.';
$l['wrong_softdomain'] = 'No se puede encontrar la ruta del dominio seleccionado.';
$l['softdirectory_exists'] = '¡El directorio ya existe!. Por favor, escribe un nombre de directorio diferente.';
$l['no_space'] = '¡No dispones de espacio en disco suficiente para instalar este programa!';
$l['no_softdb'] = 'Base de datos no especificada.';
$l['database_exists'] = 'La base de datos ya existe';
$l['databaseuser_exists'] = '¡El nombre de usuario ya existe!. Por favor, escribe un nombre de usuario diferente';
$l['db_name_long'] = 'El nombre de base de datos no puede ser mayor de 7 letras';
$l['db_limit_crossed'] = 'Se han alcanzado el máximo número de bases de datos que puedes crear';
$l['no_field'] = 'Es necesario rellenar el campo <b>&soft-1;</b>.';
$l['error_adddb'] = 'No se puede crear la base de datos';
$l['error_adduser'] = 'Hubo un error al agregar el usuario a la nueva base de datos';
$l['no_package'] = '¡No se puede encontrar el paquete de instalación!';
$l['no_decompress'] = 'Hubo algunos errores al descomprimir los archivos.';
$l['mail_new_ins'] = 'Se ha realizado una nueva instalación de &soft-1;. Detalles: ';
$l['mail_path'] = 'Ruta';
$l['mail_url'] = 'URL';
$l['mail_admin_url'] = 'Administrador URL'; 
$l['mail_admin'] = 'Administrador ';
$l['mail_pass'] = 'Conctraseña Administrador';
$l['mail_db'] = 'Base de datos MySQL';
$l['mail_dbuser'] = 'Usuario MySQL';
$l['mail_dbhost'] = 'Host';
$l['mail_dbpass'] = 'Contraseña MySQL';
$l['mail_time'] = 'Fecha de la Instalación';
$l['mail_subject'] = 'Nueva Instalación de &soft-1;';
$l['no_cron_min'] = 'No se ha especificado el minuto del Cron';
$l['no_cron_hour'] = 'No se ha especificado la hora del Cron';
$l['no_cron_day'] = 'No se ha especificado el día del Cron';
$l['no_cron_month'] = 'No se ha especificado el mes del Cron';
$l['no_cron_weekday'] = 'No se ha especificado el día de la semana del Cron';
$l['wrong_cron_min'] = 'El formato de minutos del Cron no es válido. Los valores válidos son 0-59 ó a <b>*</b>';
$l['wrong_cron_hour'] = 'El formato de horas del Cron no es válido. Los valores válidos son 0-23 ó a <b>*</b>';
$l['wrong_cron_day'] = 'El formato de días del Cron no es válido. Los valores válidos son 1-31 ó a <b>*</b>';
$l['wrong_cron_month'] = 'El formato de mes del Cron no es válido. Los valores válidos son 1-12 ó a <b>*</b>';
$l['wrong_cron_weekday'] = 'El formato del día de la semana del Cron no es válido. Los valores válidos son 0-7 ó a <b>*</b>';
$l['mail_cron'] = 'Tareas programadas';
$l['no_datadir'] = 'No se ha especificado el Data directory';
$l['datadir_exists'] = 'El data directory enviado ya existe. Por favor, escribe otro.';
$l['no_decompress_data'] = 'Hubo algunos errores al descomprimir los archivos DATA.';
$l['mail_datadir'] = 'Data Directory';
$l['some_files_exist'] = 'La instalación no puede continuar ya que los siguientes archivos ya exisiten en el directorio de destino : ';
$l['delete_files'] = 'Por favor borra esos archivos ó elije cualquier otra carpeta.';
$l['overwrite_exist'] = '<b>OR</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">Select the checkbox to overwrite all files and continue</span></b>';
$l['checking_data'] = 'Comprobación de los datos';
$l['unzipping_files'] = 'Copiando archivos y carpetas';
$l['unzipping_datadir'] = 'Descomprimiendo archivos';
$l['prop_db'] = 'Propagando la base de datos';
$l['finishing_process'] = 'Instalación Terminada';
$l['wait_note'] = '<b>NOTE:</b> Este proceso puede tardar 3-4 minutos. Por favor, no deje esta página hasta que la barra de progreso llegue al 100%';
$l['no_hostname'] = 'Introduzca su nombre de host de base de datos';
$l['no_dbusername'] = 'Por favor, introduzca su nombre de usuario de base de datos';
$l['no_dbuserpass'] = 'Introduzca su contraseña de base de datos';
$l['softdirectory_invalid'] = 'El directorio que ha escrito no es válido.';
$l['softdatadir_invalid'] = 'El directorio de datos que ha escrito no es válido.';
$l['err_domain'] = 'No Domain';
$l['err_domain_admin'] = 'This User does not have any Domain. Please contact Administrator.';
$l['err_pass_strength'] = 'Password strength must be greater than ';
$l['no_https'] = 'A trusted SSL Certificate was not found';
$l['err_dbprefix'] = 'Table Prefix is invalid. Valid values are a-z or A-Z or 0-9 or _';
$l['no_php_install'] = 'PHP is not installed. To install it, please click <a href="'.$globals['index'].'act=apps&app=1">here</a>';
$l['no_mysql_install'] = 'MySQL is not installed. To install it, please click <a href="'.$globals['index'].'act=apps&app=16">here</a>';
$l['no_domain_verify'] = 'Could not access your domain. Please make sure your domain is pointing to this server and there is no .htaccess file restricing access to your domain';
$l['auto_backup_not_allowed'] = 'The auto backup frequency you chose is invalid';
$l['invalid_script'] = 'Invalid Script ID';
$l['no_domain_found'] = 'No domain found. Please add a domain to install the script';
$l['not_php_script'] = 'This script is not in PHP';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['install'] = 'Instalar';
$l['overview'] = 'Descripción';
$l['features'] = 'Características';
$l['demo'] = 'Demo';
$l['ratings'] = 'Puntuaciones';
$l['import'] = 'Importar';
$l['software_ver'] = 'Versión';
$l['space_req'] = 'Espacio en disco';
$l['available_space'] = 'Espacio Disponible';
$l['req_space'] = 'Espacio Necesario';
$l['mb'] = 'MB';
$l['software_support'] = 'Soporte';
$l['support_link'] = 'Visitar Web del script/programa';
$l['support_note'] = 'Nota: Softaculous no ofrece ayuda técnica.';
$l['setup'] = 'Formulario de Instalación';
$l['choose_domain'] = 'Dominio';
$l['choose_domain_exp'] = 'Por favor, selecciona el dominio donde se instalará el software.';
$l['choose_url'] = 'Choose Installation URL';
$l['choose_url_exp'] = 'Please choose the URL to install the software';
$l['in_directory'] = 'Directorio';
$l['in_directory_exp'] = 'El directorio es relativo al dominio y <b>no puede existir</b>. Por ejemplo, para instalar en http://dominio/directorio/ escribe <b>directorio</b>. Para instalar en http://dominio/ deja el campo vacío.';
$l['database_name'] = 'Base de datos';
$l['database_name_exp'] = 'Escribe el nombre de la base de datos que se creará para la instalación';
$l['softcopy_note'] = '<b>NOTA</b>: Para instalar este software se requiere el uso de su propia Utilidad de Instalación. Para completar el proceso, por favor, visita la URL que se mostrará una vez se hayan copiado los archivos.';
$l['softsubmit'] = 'Instalar';
$l['congrats'] = 'Enhorabuena, el software ha sido instalado correctamente';
$l['succesful'] = 'ha sido correctamente instalado en';
$l['admin_url'] = 'Admin URL';
$l['setup_continue'] = 'Sin embargo, la instalación se completará por el software en sí. Por lo tanto, por favor visite la siguiente URL';
$l['enjoy'] = 'Esperamos que el proceso de instalación haya sido de tu agrado.';
$l['install_notes'] = 'Las siguientes son algunas notas importantes y su altamente recomendable que lo lee';
$l['please_note'] = '<b>NOTE</b>: 	
'.APP.' es sólo un instalador automático y no proporciona ningún tipo de soporte. Por favor, ¡visita la web del desarrollador para mas información!';
$l['regards'] = 'Gracias';
$l['softinstaller'] = APP.' Auto Installer';
$l['return'] = 'Volver a la Descripción';
$l['current_ins'] = 'Instalaciones activas';
$l['link'] = 'Enlace';
$l['ins_time'] = 'Fecha de Instalación';
$l['version'] = 'Versión';
$l['upd_to'] = 'Actualizar a versión';
$l['remove'] = 'Eliminar';
$l['no_info'] = 'Sin Información';
$l['randpass'] = 'Generar una contraseña aleatoria';//Generate a Random Password
$l['ratesoft'] = 'Califica este Script';//Rate this Script
$l['reviews'] = 'Comentarios';//Reviews
$l['reviewsoft'] = 'Escribe un Comentario';//Write a Review
$l['readreviews'] = 'Los comentarios';//Read Reviews
$l['reviews_exp'] = 'Leer críticas escritas por otros usuarios y';//Read Reviews written by other users and
$l['cron_job'] = 'Tareas programadas';
$l['cron_job_exp'] = 'Este script requiere una tarea programada para su funcionamiento. Por favor, especifique los valores del CRON. Si tiene dudas, ¡déjelo como está!';
$l['cron_min'] = 'Minuto';
$l['cron_hour'] = 'Hora';
$l['cron_day'] = 'Día';
$l['cron_month'] = 'Mes';
$l['cron_weekday'] = 'Día de la semana';
$l['datadir'] = 'Data Directory';
$l['datadir_exp'] = 'Este script necesita guardar sus datos en una carpeta no accesible vía web. Será creado dentro del directorio home, por ejemplo si especificas <b>datadir</b> se creará lo siguiente - /home/usuario/<b>datadir</b>';
$l['db_alpha_num'] = 'Sólo se permiten caracteres alfanuméricos para el nombre de la base de datos.';
$l['overwrite'] = 'Sobrescribir archivos';
$l['ins_emailto'] = 'Mandar detalles de instalacióm por email a';
$l['choose_protocol'] = 'Seleccione Protocolo';
$l['choose_protocol_exp'] = 'Si su sitio tiene SSL, por favor, elija el protocolo HTTPS.';
$l['clone'] = 'Clone';
$l['backup'] = 'Backup';
$l['options'] = 'Opciones';
$l['admin'] = 'Admin';
$l['notify_ver'] = 'Notificar '.$globals['sn'].' nueva versión';
$l['notifyversion'] = 'Gracias por informarnos acerca de la nueva versión. Le informamos brevemente';
$l['del_insid'] = 'Está seguro que desea eliminar las instalaciones seleccionadas ? La acción será irreversible. \nNo se le pedirá información adicional.';
$l['rem_inst_id'] = 'Eliminando Instalación - ';
$l['no_sel_inst'] = 'Sin instalaciónen seleccionadas para eliminar.';
$l['inst_remvd'] = 'La instalación seleccionada se han eliminado. La página se volverá a cargar ahora!';
$l['remove'] = 'Eliminar';
$l['go'] = 'Go';
$l['screenshots'] = 'Pantallazos'; 
$l['downloading'] = 'Descargando Paquetes'; 
$l['installing'] = 'Instalando Script'; 
$l['editdetail'] = 'Editar Detalles';
$l['publish'] = 'Publicar en la Web';
$l['hostname'] = 'Base de datos Hostname';
$l['hostname_exp'] = 'MySQL hostname (principal <b>localhost</b>)';
$l['dbusername'] = 'Usuario Base de datos';
$l['dbusername_exp'] = 'El nombre de usuario MySQL';
$l['dbuserpass'] = 'Contraseña Base de Datos';
$l['dbuserpass_exp'] = 'La contraseña del usuario de MySQL';
$l['database_name_exp_aefer'] = 'Escriba el nombre de la base de datos que se utilizará para la instalación';
$l['sel_version'] = 'Seleccione Versión';
$l['choose_version_exp'] = 'Por favor seleccione la versión a instalar.';
$l['choose_version'] = 'Seleccione la versión que desea instalar';
$l['select'] = 'Seleccione';
$l['release_date'] = 'Release Date';
$l['adv_option'] = 'Advanced Options';
$l['disable_notify_update'] = 'Disable Update Notification Emails';
$l['exp_disable_notify_update'] = 'If checked you will not receive an email notification for updates available for this installation.';
$l['prog_installing'] = 'Installing '; // Dont remove trailing space
$l['prog_install_complete'] = 'Installation Completed.';
$l['eu_auto_upgrade'] = 'Auto Upgrade';
$l['exp_eu_auto_upgrade'] = 'Select the automatic upgrade preference for this installation when a new version is available';
$l['auto_upgrade_plugins'] = 'Auto Upgrade &soft-1; Plugins';
$l['exp_auto_upgrade_plugins'] = 'If checked, all the active &soft-1; plugins installed for this installation will be automatically upgraded to the latest version when your script installation is upgraded.';
$l['auto_upgrade_themes'] = 'Auto Upgrade &soft-1; Themes';
$l['exp_auto_upgrade_themes'] = 'If checked, the active &soft-1; theme for this installation will be automatically upgraded to the latest version when your script installation is upgraded.';
$l['auto_upgrade_enabled'] = 'Auto Upgrade Enabled';
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

$l['choose_theme'] = 'Select Theme';
$l['clear_theme'] = 'Clear selection';
$l['installing_theme'] = 'Installing theme';
$l['cant_download_theme'] = 'Could not download the theme files';
$l['no_theme_package'] = 'The theme installation package could not be found!';
$l['unzipping_theme_files'] = 'Copying themes files and folders';
$l['use_this_theme'] = 'Select this';
$l['err_auto_backup_limit'] = 'The auto backup rotation cannot be more than <b>&soft-1;</b>';
$l['select_domain'] = 'Select Domain';
$l['refresh'] = 'Refresh';
$l['purchase'] = 'Buy';
$l['your_purchased'] = 'Purchased ';//trailing space is required
$l['your_purchased_times'] = ' times(s)';
$l['err_theme_not_bought'] = 'You have not purchased the theme, so could not install it !';
$l['err_theme_reached_limit'] = 'Please buy this theme and try to install it again. You reached the limit of installing this theme.';
$l['payment_heading'] = 'Purchase Theme';
$l['payment_redirect'] = 'You will be redirected to pay ';//trailing space is required
$l['close'] = 'Close';
$l['free'] = 'Free';
$l['select'] = 'Select';
$l['theme_is_optional'] = '<b>Note</b>: This is optional. If not selected, the default theme will be installed';
$l['with_selected'] = 'With Selected';
$l['not_in_free'] = '<b>&soft-1;</b> cannot be installed in the Free version of '.APP.'!';
$l['notify_admin'] = 'Please notify your Server Admin to purchase the premium version of '.APP.'!';
$l['related_scripts'] = 'Related Scripts';

$l['date_added'] = 'Date Added';
$l['downloaded'] = 'Downloaded';

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

$l['pushtolive'] = 'Push to Live';
$l['staging'] = 'Create Staging';

$l['dont_auto_upgrade'] = 'Do not Auto Upgrade'; 
$l['minor_auto_upgrade'] = 'Upgrade to <b>Minor</b> versions only'; 
$l['major_auto_upgrade'] = 'Upgrade to any latest version available (<b>Major</b> as well as <b>Minor</b>)'; 
$l['auto_upgrade_major'] = '(Major and Minor)'; 
$l['auto_upgrade_minor'] = '(Minor)'; 

$l['err_fetch_key'] = 'Could not fetch the PFX API key at the moment';
$l['ampps_notify_premium'] = 'This feature is available in the premium version of AMPPS. Please purchase <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';

$l['view_items'] = 'List Items in Set';
$l['ok'] = 'OK';
$l['plugins'] = 'Plugins';
$l['themes'] = 'Themes';
$l['empty_set'] = 'There are currently no items in the set!!';

$l['error_max_ins_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Installations allowed per script';
$l['error_max_backup_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Backups allowed per script';
$l['error_max_clone_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Clone allowed per script';
$l['error_max_staging_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Staging allowed per script';

$l['remove_complete'] = 'Remove Completely';
$l['remove_info'] = 'Remove from '.APP;
$l['manage_sets'] = 'Administrar complementos / conjuntos de temas';
$l['manage_plugin_sets'] = 'Manage Plugin Sets';
$l['manage_theme_sets'] = 'Manage Theme Sets';