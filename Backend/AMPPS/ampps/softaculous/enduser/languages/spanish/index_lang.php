<?php

//////////////////////////////////////////////////////////////
//===========================================================
// index_lang.php
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

$l['user_data_error_t'] = 'Error en Datos de Usuario';
$l['user_data_error'] = ''.APP.' no ha podido cargar la Información de Cuenta. Por favor, contactar con el administrador del Servidor';

$l['remote_licence_t'] = 'Invalid License';
$l['remote_licence'] = 'You are not using a valid license. Please report this to the server administrator!';

$l['enterprise_licence_t'] = 'Invalid License';
$l['enterprise_licence'] = 'You are not using a valid license. Please report this to the server administrator!';

$l['no_license'] = '¡No se ha podido encontrar el archivo de LICENCIA! Por favor, contactar con el administrador del Servidor.';

$l['today'] = '<b>Hoy</b> a las ';//The today string for showing todays post time

$l['init_theme_error_t'] = 'Error de plantilla';//Title
$l['init_theme_error'] = 'No se ha podido cargar el archivo de plantilla - &soft-1;.';

$l['init_theme_func_error_t'] = 'Error de Función de Plantilla';//Title
$l['init_theme_func_error'] = 'No se ha podido cargar la(s) funcion(es) de &soft-1;.';

$l['disable_softaculous_t'] = 'Deshabilitado';
$l['disable_softaculous'] = 'Esta deshabilitado para este usuario. Por favor contacte con el administrador.';

$l['load_theme_settings_error'] = 'No se ha podido cargar el archivo de plantillas.';

$l['view_guide'] = 'View Guide';
$l['max_db_length'] = 'The database name cannot be greater than &soft-1; characters. Please choose a shorter database name.';


//Error Handle Function
$l['following_errors_occured'] = 'Se han encontrado los siguientes Errores';

//Success Message Function
$l['following_message'] = 'Se ha devuelto el siguiente mensaje';

//Major Error Function
$l['fatal_error'] = 'Error Grave';
$l['following_fatal_error'] = 'Ha ocurrido el siguiente error';

//Message Function
$l['soft_message'] = 'Mensaje '.APP.'';
$l['following_soft_message'] = 'Se ha devuelto el siguiente mensaje';

//Update Softwares
$l['no_soft_found'] = 'Software no encontrado.....Necesaria Actualización';
$l['ver_not_match'] = 'Las versiones no concuerdan.....Necesaria Actualización';
$l['ver_match'] = 'La versión actual ya se encuentra actualizada......Continuando';
$l['del_prev_files'] = 'Borrando los archivos previos......Done';
$l['fetch_latest'] = 'Adquiriendo actualización......';
$l['error_fetch_latest'] = 'No se ha adquirido el archivo de actualización......Continuando';
$l['error_save_latest'] = 'No se ha GUARDADO el archivo de actualización......Continuando';
$l['got_latest'] = 'Guardado el Archivo de Actualización';
$l['unzip_latest'] = 'Descomprimiendo archivos......';
$l['error_unzip_latest'] = 'Error al descomprimir......Abortando';
$l['unzipped_latest'] = 'Descomprensión correcta';

//Update Softaculous
$l['getting_info'] = 'Pidiendo información al servidor......';
$l['error_getting_latest'] = 'No se ha podido obtener información......Abortando';
$l['got_info'] = 'Información obtenida';
$l['manual_mode'] = 'La nueva versión de '.APP.' requiere instalación manual......Abortando';
$l['no_updates'] = 'La versión actual ya se encuentra actualizada......Continuando';
$l['fetch_upgrade'] = 'Adquiriendo actualización......';
$l['error_fetch_upgrade'] = 'No se ha adquirido el archivo de actualización......Abortando';
$l['error_save_upgrade'] = 'No se ha GUARDADO el archivo de actualización......Abortando';
$l['got_upgrade'] = 'Guardado el Archivo de Actualización';
$l['unzip_upgrade'] = 'Descomprimiendo archivos......';
$l['error_unzip_upgrade'] = 'Error al descomprimir......Abortando';
$l['unzipped_upgrade'] = 'Descomprensión correcta';
$l['md5_check'] = 'MD5 Comprobacion satisfactoria';
$l['err_md5_check'] = 'MD5 Comprobando los ficheros que no son correctos';
$l['err_md5_file'] = ' no existe';

//MySQL Errors
$l['err_selectmy'] = 'La base de datos MySQL no podía ser seleccionada.';
$l['err_myconn'] = 'La conexión con MySQL no se puede establecer.';
$l['err_makequery'] = 'No se pudo realizar la consulta numeradas';
$l['err_mynum'] = 'MySQL Error No';
$l['err_myerr'] = 'MySQL Error';
$l['err_no_db_file'] = 'The database import file does not exist';
$l['err_no_open_db_file'] = 'Could not open the database import file';

//Importing Errors
$l['imp_wrong_softdomain'] = 'La ruta del dominio &soft-1; no se ha encontrado.';//The path of the domain &soft-1; could not be found.
$l['imp_softpath_wrong'] = 'La ruta del &soft-1; es un error y no existe.';//The PATH of &soft-1; is WRONG and does not exist.
$l['imp_ins_exists'] = 'Según nuestros registros &soft-1; ya está instalado en &soft-2; y está mantenido por nosotros';//&soft-1; is already installed at &soft-2; as per our records and is being maintained by us!
$l['imp_no_func'] = 'La función de importación para &soft-1; no se pudo cargar.';//The import function for &soft-1; could not be loaded.
$l['imp_err'] = 'Hubo algunos errores al importar el software instalado en &soft-1;';//There were some errors while importing the software installed at &soft-1;
$l['err_query'] = 'Could not execute the query';

$l['invalid_search_input'] = 'Invalid Theme Search character. Only alphanumeric characters, underscore and hyphen are allowed.';

//hf_theme.php
$l['root_login'] = 'Logged in as ROOT';
$l['welcome'] = 'Bienvenido';
$l['logout'] = 'Cerrar Sesión';
$l['page_time'] = 'Página creada en';
$l['times_are'] = 'Hora en GMT';
$l['time_is'] = 'Fecha y hora actual:';
$l['no_script_found'] = 'No such Script found!';
$l['webuzo_sysapps_disabled'] = 'This functionality has been disabled from the Webuzo Admin Panel';
$l['webuzo_install_utility'] = 'This utility is not installed. Please install it first';

//The Category Language Variables
$l['forums'] = 'Foros';
$l['blogs'] = 'Blogs';
$l['cms'] = 'Portales/CMS';
$l['galleries'] = 'Galerías de imágenes';
$l['wikis'] = 'Wikis';
$l['admanager'] = 'Gestores de anuncios';
$l['calendars'] = 'Calendarios';
$l['games'] = 'Juegos';
$l['mail'] = 'Correo';
$l['polls'] = 'Votaciones y Encuestas';
$l['projectman'] = 'Gestor de proyectos';
$l['ecommerce'] = 'Comercio electrónico';
$l['guestbooks'] = 'Libros de visitas';
$l['customersupport'] = 'Ayuda al cliente';
$l['music'] = 'Música';
$l['video'] = 'Vídeo';
$l['others'] = 'Otros';
$l['files'] = 'File Management';
$l['go_cpanel'] = 'Volver al Panel de Control';
$l['go_home'] = ''.APP.' Inicio';
$l['go_demos'] = 'Demos';
$l['go_ratings'] = 'Valoraciones';
$l['go_settings'] = 'Editar Preferencias';
$l['go_email_settings'] = 'Preferencias de Correo';
$l['go_installations'] = 'Listado de Instalaciones';
$l['go_support'] = 'Ayuda';
$l['go_sync'] = 'Sincronizar automáticamente con otros instaladores';//Synchronize with other Auto Installers
$l['go_backups'] = 'Backups and Restore';
$l['go_tasklist'] = 'Task List';
$l['go_apps_installations'] = 'All Installed Applications';
$l['go_my_themes'] = 'My Themes';
$l['go_logout'] = 'Logout';
$l['ins_stats'] = 'Installations';
$l['outdated_stats'] = 'Outdated Installations';
$l['backups_stats'] = 'Backups';

$l['type_php'] = 'PHP';
$l['type_perl'] = 'Perl';
$l['type_js'] = 'JavaScript';
$l['type_java'] = 'Java';
$l['type_python'] = 'Python';
$l['search'] = 'Search';
$l['back_to_top'] = 'Volver arriba';

$l['show'] = 'Show';
$l['hide'] = 'Hide';

// Categories
$l['cat_php_forums'] = 'Foros';
$l['cat_php_blogs'] = 'Blogs';
$l['cat_php_cms'] = 'Portales/CMS';
$l['cat_php_galleries'] = 'Galerías de imágenes';
$l['cat_php_wikis'] = 'Wikis';
$l['cat_php_admanager'] = 'Anuncios';
$l['cat_php_calendars'] = 'Calendarios';
$l['cat_php_games'] = 'Juegos';
$l['cat_php_mail'] = 'Correo';
$l['cat_php_polls'] = 'Encuestas y análisis';
$l['cat_php_projectman'] = 'Gestor de proyectos';
$l['cat_php_ecommerce'] = 'Comercio electrónico';
$l['cat_php_guestbooks'] = 'Libros de visitas';
$l['cat_php_customersupport'] = 'Ayuda al cliente';
$l['cat_php_others'] = 'Otros';
$l['cat_php_music'] = 'Música';
$l['cat_php_video'] = 'Vídeo';
$l['cat_php_rss'] = 'RSS';
$l['cat_php_socialnetworking'] = 'Social Networking';
$l['cat_php_microblogs'] = 'Micro Blogs';
$l['cat_php_frameworks'] = 'Frameworks';
$l['cat_php_educational'] = 'Educacional';
$l['cat_php_erp'] = 'ERP';
$l['cat_php_dbtools'] = 'DB Tools';
$l['cat_php_files'] = 'Gestion de Ficheros';
$l['cat_js_libraries'] = 'Librerias';
$l['cat_js_widgets'] = 'Widgets';
$l['cat_perl_blogs'] = 'Blogs';
$l['cat_perl_wikis'] = 'Wikis';
$l['cat_perl_forums'] = 'Forums';
$l['cat_perl_ecommerce'] = 'E-Commerce';
$l['cat_perl_mail'] = 'Mails';
$l['cat_java_cms'] = 'CMS';
$l['cat_java_forums'] = 'Forums';
$l['cat_java_projectman'] = 'Gestor de proyectos';
$l['cat_java_erp'] = 'ERP';
$l['cat_java_blogs'] = 'Blogs';
$l['cat_java_wikis'] = 'Wikis';
$l['cat_python_wikis'] = 'Wikis';
$l['cat_python_projectman'] = 'Project Management';
$l['cat_apps_server_side_scripting'] = 'Server Side Scripting';
$l['cat_apps_web_servers'] = 'Web Servers';
$l['cat_apps_utilities'] = 'Utilities';
$l['cat_apps_libraries'] = 'Libraries';
$l['cat_apps_databases'] = 'Databases';
$l['cat_apps_stacks'] = 'Stacks';
$l['cat_apps_security'] = 'Security';
$l['cat_apps_statistics'] = 'Statistics';
$l['cat_apps_java_tools'] = 'Java Tools';
$l['cat_apps_java_containers'] = 'Java Containers';
$l['cat_apps_version_control'] = 'Version Control';
$l['cat_apps_modules'] = 'Modules';
$l['cat_apps_message_queue'] ='Message Queue';

// Classes Categories
$l['classes_ajax'] = 'Ajax';
$l['classes_cryptography'] = 'Criptografia';
$l['classes_algorithms'] = 'Algoritmos';
$l['classes_artificialintelligence'] = 'Inteligencia Artificial';
$l['classes_email'] = 'Email';
$l['classes_finances'] = 'Finanzas';
$l['classes_searching'] = 'Buscadores';
$l['classes_user_management'] = 'Gestion de Usuarios';
$l['classes_utilitiesandtools'] = 'Utilidades y Herramientas';
$l['classes_validation'] = 'Validacion';
$l['classes_security'] = 'Seguridad';
$l['classes_console'] = 'Consola';
$l['classes_codegeneration'] = 'Generadores de Codigos';
$l['classes_chat'] = 'Chat';
$l['classes_astrology'] = 'Astrologia';
$l['classes_audio'] = 'Audio';
$l['classes_biology'] = 'Biologia';
$l['classes_blogs'] = 'Blogs';
$l['classes_cache'] = 'Cache';
$l['classes_compression'] = 'Compresion';
$l['classes_configuration'] = 'Configuracion';
$l['classes_contentmanagement'] = 'Gestion de Contenidos';
$l['classes_conversion'] = 'Conversion';
$l['classes_datatypes'] = 'Datatypes';
$l['classes_databases'] = 'Bases de Datos';
$l['classes_debug'] = 'Debug';
$l['classes_designpatterns'] = 'Diseño de Patrones';
$l['classes_ecommerce'] = 'E-Commerce';
$l['classes_elearning'] = 'E-Learning';
$l['classes_emulators'] = 'Emuladores';
$l['classes_filesandfolders'] = 'Archivos y directorios';
$l['classes_flash'] = 'Flash';
$l['classes_forums'] = 'Foros';
$l['classes_games'] = 'Juegos';
$l['classes_geography'] = 'Geografia';
$l['classes_graphics'] = 'Graficos';
$l['classes_gui'] = 'GUI';
$l['classes_hosting'] = 'Hosting';
$l['classes_html'] = 'HTML';
$l['classes_http'] = 'HTTP';
$l['classes_language'] = 'Idiomas';
$l['classes_projectmanagement'] = 'Gestor de Proyectos';

// Softaculous Remote Domain Strings
$l['no_domain_data'] = 'Domain Data Not Found!!';
$l['no_aefer_resp'] = 'Could not access the worker file over web. Please check if your domain is pointing to the correct server.'; 

// Webuzo Strings 
$l['webuzo'] = 'Webuzo'; 
$l['go_domain'] = 'Gestor de Dominios'; 
$l['webuzo_license_exp'] = 'Su licencia ha expirado. Si su licencia ha expirado, por favor renuevela para poder seguir utilizando las aplicaciones.'; 
$l['webuzo_license_exp_t'] = 'Licencia inactiva';
$l['err_no_access'] = 'You do not have permission to access this page';

// Ampps Strings
$l['ampps'] = 'AMPPS';
$l['go_domain'] = 'Gestor de Dominios';
$l['ampps_license_exp'] = 'Su licencia ha expirado. Si su licencia ha expirado, por favor renuevela para poder seguir utilizando las aplicaciones';
$l['ampps_license_exp_t'] = 'Licencia inactiva';


/////////////////////////////////////////////////////////////
/////  Following Variables are used for Email Templates /////
/////////////////////////////////////////////////////////////


$l['notify_enable'] = 'Enabled';
$l['notify_disable'] = 'Disabled';

$l['autoupgrade_enable'] = 'Enabled';
$l['autoupgrade_disable'] = 'Disabled';

// Auto backup strings
$l['auto_backup_enable'] = 'Enabled';
$l['auto_backup_disable'] = 'Disabled';

// Install Template Vaiable
$l['mail_install_php_sub'] = 'Nueva Instalación de $scriptname';
$l['mail_install_php'] = 'Se ha realizado una nueva instalación de $scriptname $version. Detalles: 
Ruta : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>Data Directory : $datadirectory</if>
<if $admin_username>Admin Username : $admin_username</if>
<if $admin_pass>Admin Password : $admin_pass</if>
<if $admin_email>Admin Email: $admin_email</if>
<if $dbname>Base de datos MySQL : $dbname</if>
<if $dbuser>Usuario MySQL : $dbuser</if>
<if $dbhost>Host : $dbhost</if>
<if $dbpass>Contraseña MySQL : $dbpass</if>
<if $cron>Tareas programadas : $cron</if>
<if $disable_notify_update>Update Notification : $disable_notify_update</if>
<if $eu_auto_upgrade>Auto Upgrade : $eu_auto_upgrade</if>
<if $auto_backup>Automated Backups : $auto_backup</if>
<if $auto_backup_rotation>Backup Rotation : $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
<if $time>Fecha de la Instalación : $time</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Clone Template Vaiable
$l['mail_clone_sub'] = 'Clone Installation of $scriptname';
$l['mail_clone'] = 'Si quieres cancelar la inscripción de dichos correos electrónicos, vete a tu Panel de Control 

Tu configuración de la $scriptname $versione se ha clonado correctamente.

Tus datos originales de configuración:
Ruta Original: $old_path
URL Original : $old_url

Tus datos clonados de configuración:
Ruta: $path
URL : $url
URL admin : $admin_url
<if $datadirectory>Directorio de los datos: $datadirectory</if>
<if $dbname>base de datos MySQL : $dbname</if>
<if $dbuser>Usuario de la base de datos MySQL : $dbuser</if>
<if $dbhost>Host de la base de datos MySQL : $dbhost</if>
<if $dbpass>Password de la base de datos MySQL : $dbpass</if>
<if $cron>Cron Job : $cron</if>
<if $time>Hora de instalación: $time</if>

Si quieres cancelar la inscripción de dichos correos electrónicos, vete a tu Panel de Control -> '.APP.' -> Configuración del correo electrónico
';

// Install Template Vaiable
$l['mail_install_js_sub'] = 'Nueva Instalación de $scriptname';
$l['mail_install_js'] = 'Una nueva instalacion de $scriptname $version ha sido completada. Los detalles de la instalacion se mostraran a continuacion:
Ruta : $path
URL : $url
<if $disable_notify_update>Update Notification : $disable_notify_update</if>
<if $auto_backup>Automated Backups : $auto_backup</if>
<if $auto_backup_rotation>Backup Rotation : $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
<if $time>Fecha de la Instalación : $time</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Install Template Vaiable
$l['mail_install_perl_sub'] = 'Nueva Instalación de $scriptname';
$l['mail_install_perl'] = 'Una nueva instalacion de $scriptname $version ha sido completada. Los detalles de la instalacion se mostraran a continuacion:
Ruta : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>Data Directory : $datadirectory</if>
<if $wwwdir>Web Directory : $wwwdir</if>
<if $admin_username>Admin Username : $admin_username</if>
<if $admin_pass>Admin Password : $admin_pass</if>
<if $admin_email>Admin Email: $admin_email</if>
<if $dbname>Base de datos MySQL : $dbname</if>
<if $dbuser>Usuario MySQL : $dbuser</if>
<if $dbhost>Host : $dbhost</if>
<if $dbpass>Contraseña MySQL : $dbpass</if>
<if $cron>Tareas programadas : $cron</if>
<if $disable_notify_update>Update Notification : $disable_notify_update</if>
<if $auto_backup>Automated Backups : $auto_backup</if>
<if $auto_backup_rotation>Backup Rotation : $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
<if $time>Fecha de la Instalación : $time</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Install Template Vaiable
$l['mail_install_java_sub'] = 'Nueva Instalación de $scriptname';
$l['mail_install_java'] = 'Una nueva instalacion de $scriptname $version se ha completado. Los detalles de la instalacion se mostraran a continuacion:
Ruta : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>Directorio de datos: $datadirectory</if>
<if $wwwdir>Directorio Web : $wwwdir</if>
<if $admin_username>Usuario Administrador : $admin_username</if>
<if $admin_pass>Password  Administrador: $admin_pass</if>
<if $admin_email>Email Administrador : $admin_email</if>
<if $dbname>Base de datos MySQL : $dbname</if>
<if $dbuser>Usuario MySQL : $dbuser</if>
<if $dbhost>Host : $dbhost</if>
<if $dbpass>Contraseña MySQL : $dbpass</if>
<if $cron>Tareas programadas : $cron</if>
<if $disable_notify_update>Update Notification : $disable_notify_update</if>
<if $auto_backup>Automated Backups : $auto_backup</if>
<if $auto_backup_rotation>Backup Rotation : $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
<if $time>Fecha de la Instalación : $time</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

$l['mail_install_python_sub'] = 'New Installation of $scriptname';
$l['mail_install_python'] = 'A new installation of $scriptname $version has been completed. The details of the installation are shown below:
Path : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>Data Directory : $datadirectory</if>
<if $wwwdir>Web Directory : $wwwdir</if>
<if $admin_username>Admin Username : $admin_username</if>
<if $admin_pass>Admin Password : $admin_pass</if>
<if $admin_email>Admin Email: $admin_email</if>
<if $dbname>MySQL Database : $dbname</if>
<if $dbuser>MySQL DB User : $dbuser</if>
<if $dbhost>MySQL DB Host : $dbhost</if>
<if $dbpass>MySQL DB Password : $dbpass</if>
<if $cron>Cron Job : $cron</if>
<if $disable_notify_update>Update Notification : $disable_notify_update</if>
<if $auto_backup>Automated Backups : $auto_backup</if>
<if $auto_backup_rotation>Backup Rotation : $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
<if $time>Time of Installation : $time</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Update template Variable (From ADMIN)
$l['mail_update_sub'] = 'Scripts Updates Available';
$l['mail_update'] = 'Este correo electrónico se refiere a la instalación antigua algunos scripts en PHP que has configurado. Por motivos de seguridad debes actualizar estas instalaciones antiguas lo antes posible.
Están disponibles las siguientes actualizaciones del script:

$installation

Para realizar el upgrade de estos scrips, vete a tu Panel de Control -> '.APP.' -> Instalaciones.
Aquí podrás actualizar los script.

Desde el Administrador del Sistema $serverip
';

// Remove Template Variable
$l['mail_remove_sub'] = 'Eliminada la instalación de $scriptname';
$l['mail_remove'] = 'Se ha eliminado la instalación de $scriptname. Detalles: 
Ruta : $path
<if $url>URL : $url</if>
<if $datadirectory>Data Directory : $datadirectory</if>
<if $wwwdir>Web Directory : $wwwdir</if>
<if $dbname>Base de datos MySQL : $dbname</if>
<if $dbuser>Usuario MySQL : $dbuser</if>
<if $dbhost>Host : $dbhost</if>
<if $dbpass>Contraseña MySQL : $dbpass</if>
<if $cron>Tareas programadas : $cron</if>
Fecha de la Instalación : $time
Fecha de la eliminación : $rem_time

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Cron Template Variable
$l['mail_cron_sub'] = 'Actualizaciones disponibles';
$l['changelog'] = '== Changelog for';
$l['mail_cron'] = 'Están disponibles las siguientes actualizaciones del script:

$installation

Para realizar el upgrade de estos script, vete al Panel de Control -> '.APP.' -> Instalaciones.
Aquí podrás actualizar los script.


$changelog

Desde '.APP.' Cron Jobs $serverip

Si quieres cancelar la inscripción de dichos correos electrónicos, vete a tu Panel de Control -> '.APP.' -> Configuración del correo electrónico
';

// Editdetail Template Variable
$l['mail_editdetail_sub'] = 'Detalles del ainstalacion modificada de $scriptname';
$l['mail_editdetail'] = 'Los datos de instalación de $scriptname se han modificado. A continuación, se muestran los datos modificados de la instalación:
Ruta: $path
URL : $url
<if $datadirectory>Directorio de los datos: $datadirectory</if>
<if $wwwdir>Directorio Web: $wwwdir</if>
<if $wwwurl>URL Web : $wwwurl</if>
<if $admin_username>Nombre de usuario Admin : $admin_username</if>
<if $admin_pass>Password del administrador: $admin_pass</if>
<if $dbname>base de datos MySQL : $dbname</if>
<if $dbuser>Usuario de la base de datos MySQL : $dbuser</if>
<if $dbhost>Host de la base de datos MySQL : $dbhost</if>
<if $dbpass>Password de la base de datos MySQL: $dbpass</if>
<if $cron>Cron Job: $cron</if>
<if $disable_notify_update>Notificación de Actualización: $disable_notify_update</if>
<if $eu_auto_upgrade>Actualización automática: $eu_auto_upgrade</if>
<if $auto_backup>Copia de Seguridad Automática: $auto_backup</if>
<if $auto_backup_rotation>Rotación de copia de seguridad: $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
Fecha de la instalación: $time
Hora de modificación: $edit_time

Si quieres cancelar la inscripción de dichos correos electrónicos, vete a tu Panel de Control -> '.APP.' -> Configuración del correo electrónico
';

// Backup Language Strings
$l['mail_backup_sub'] = 'Copia de seguridad de la instalación de tu $scriptname 
';
$l['mail_backup'] = 'La Copia de Seguridad de la instalación de tu $scriptname se ha completado correctamente.
Los datos son los siguientes:
Instalaciones Ruta: $path
Instalaciones URL: $url
<if $backup_location>Backup Location : $backup_location</if>
Ruta de la copia de seguridad: $backup_file
<if $backup_note>Nota de copia de seguridad: $backup_note</if>

Puedes acceder a la copia de seguridad de la Sección de Copia de Seguridad en '.APP.'.

Si quieres cancelar la inscripción de dichos correos electrónicos, vete a tu Panel de Control -> '.APP.' -> Configuración de correo electrónico
';

$l['mail_backup_fail_sub'] = 'No lograda: Copia de seguridad de la instalación de tu $scriptname 
';
$l['mail_backup_fail'] = 'La Copia de Seguridad de la instalación de tu $scriptname se ha completado correctamente.
Los datos son los siguientes:
Instalaciones Ruta: $path
Instalaciones URL: $url
Ruta de la copia de seguridad: $backup_file

Se ha detectado el siguiente error:
$error

Por favor, crea una nueva copia de seguridad en unos momentos.

Si quieres cancelar la inscripción de dichos correos electrónicos, vete a tu Panel de Control -> '.APP.' -> Configuración del correo electrónico
';


// Restore Language Strings
$l['mail_restore_sub'] = 'Restauracion de $scriptname';
$l['mail_restore'] = 'El restablecimiento de la copia de seguridad de tu $scriptname se ha completado correctamente.
Los datos son los siguientes:
Instalaciones Ruta: $path
Instalaciones URL: $url

Si quieres cancelar la inscripción de dichos correos electrónicos, vete a tu Panel de Control -> '.APP.' -> Configuración del correo electrónico
';

$l['mail_restore_fail_sub'] = 'No logrado: Restablecimiento de tu $scriptname
';
$l['mail_restore_fail'] = 'El restablecimiento de tu $scriptname no se ha completado correctamente.
Los datos son los siguientes:
Instalaciones Ruta: $path
Instalaciones URL: $url

Se ha detectado el siguiente error:
$error

Por favor, restablece de nuevo la copia de seguridad en unos momentos.

Si quieres cancelar la inscripción de dichos correos electrónicos, vete a tu Panel de Control -> '.APP.' -> Configuración del correo electrónico
';

// Restore Background Language Strings
$l['mail_restore_bg_sub'] = 'Restore of your $scriptname backup started in background';
$l['mail_restore_bg'] = 'The restore of your $scriptname backup has started in the background. You will receive an email notification about the status once the restore process is completed.
The details are as follows :
Installation Path : $path
Installation URL : $url

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Backup Background Language Strings
$l['mail_backup_bg_sub'] = 'Backup of your $scriptname installation started in background';
$l['mail_backup_bg'] = 'The backup of your $scriptname has started in background. You will receive an email notification about the status once the backup process is completed.
The details are as follows :
Installation Path : $path
Installation URL : $url

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings';

// import Language Strings
$l['mail_import_sub'] = 'Import of your $scriptname installation';
$l['mail_import'] = 'The import of your $scriptname installation was completed successfully.
The details are as follows :
Installation Path : $path
Installation URL : $url

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// import fail Language Strings
$l['mail_import_fail_sub'] = 'Failed : Import of your $scriptname installation';
$l['mail_import_fail'] = 'The import of your $scriptname installation did not complete successfully.
The details are as follows :
Installation Path : $path
Installation URL : $url

The following error occured :
$error

Please try to import the installation again after some time.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Import Background Language Strings
$l['mail_import_bg_sub'] = 'Import of your $scriptname installation';
$l['mail_import_bg'] = 'The import of your $scriptname installation has started in the background. You will receive an email notification about the status once the import process is completed.
The details are as follows :
Installation Path : $path
Installation URL : $url

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';


// Install Template Vaiable CLASSES
$l['mail_install_classes_sub'] = 'New Installation of $classesname';
$l['mail_install_classes'] = 'Una nueva instalación de la version $classesname $version se ha completado. Los detalles de la instalación se muestra a continuación:
Path : $path
<if $time>Tiempo de instalacion : $time</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

////////////////////////
// ADMIN UPGRADE - 6
////////////////////////

// Auto Upgrade Email For Admin (successful)
$l['mail_adminupgrade_success_admin_sub'] = 'La instalación del $scriptname del usuario $user se ha actualizado correctamente
';
$l['mail_adminupgrade_success_admin'] = 'La instalación del $scriptname del usuario $user se ha actualizado a la última versión correctamente
Los datos son los siguientes:
Instalaciones URL: $url
Última Versión: $version
Antigua Versión: $oldversion
';

// Auto Upgrade Email For Admin (Failed) but restored successfully.
$l['mail_adminupgrade_fail_admin_sub'] = 'Actualización para la instalación del $scriptname no lograda y restablecida desde la copia de seguridad
';
$l['mail_adminupgrade_fail_admin'] = 'Actualización de instalación del $scriptname para el usuario $user no lograda.
'.APP.' ha creado una copia de seguridad antes del upgrade, y la copia de seguridad se ha restablecido correctamente.
Instalaciones URL: $url
Versión Actual: $oldversion
Última Versión: $version
Los datos del error son los siguientes:
Error: $upgrade_error
';

// Auto Upgrade Email for user (successful)
$l['mail_adminupgrade_success_user_sub'] = 'La instalación del $scriptname ha sido actualizada correctamente por parte del System Admin
';
$l['mail_adminupgrade_success_user'] = 'La instalación de tu $scriptname ha sido actualizada correctamente a la última versión por parte del System Admin
Los datos son los siguientes:
Instalaciones URL: $url
Última Versión: $version
Versión Antigua: $oldversion

Si quieres cancelar la inscripción de dichos correos electrónicos, vete a tu Panel de Control -> '.APP.' -> Configuración del correo electrónico
';

// Auto Upgrade Email for user (fail) but restored successfully
$l['mail_adminupgrade_fail_user_sub'] = 'Actualización de la instalación de tu $scriptname por parte del System Admin no lograda';
$l['mail_adminupgrade_fail_user'] = 'El System Admin ha intentado actualizar la instalación de tu $scriptname, pero el proceso de upgrade no se ha logrado.
Se ha  creado una copia de seguridad antes de la actualización de tu instalación, y tu instalación se ha restablecido desde esta copia de seguridad.
Instalaciones URL: $url
Versión Actual: $oldversion
Última Versión: $version
Los datos del error son los siguientes:
Error: $upgrade_error

Si quieres cancelar la inscripción de dichos correos electrónicos, vete a tu Panel de Control -> '.APP.' -> Configuración del correo electrónico
';

// ALL IS FAILED (Upgrade and RESTORE toooo) (FOR ADMIN)
$l['mail_adminupgrade_restore_fail_admin_sub'] = 'Actualización de la instalación $scriptname para el usuario $user no lograda.
';
$l['mail_adminupgrade_restore_fail_admin'] = 'Actualización de la instalación $scriptname para el usuario $user no lograda.
¡Se ha creado una copia de seguridad antes del upgrade, pero si embargo el proceso de restablecimiento no se ha logrado!

Requerirá un restablecimiento manual. La guía para el restablecimiento manual está disponible aquí:
http://www.softaculous.com/docs/Manual_Restore

A continuación se muestran los datos de instalación y copia de seguridad que podrían ser de utilidad para restablecer la instalación de tu $scriptname :
RUTA_A_TU_ARCHIVO_COPIADESEGURIDAD: $backup_path
RUTA_DE_INSTALACIÓN: $softpath
<if $dbname>NOMBRE_BASEDEDATOS: $dbname</if>
<if $dbuser>USUARIO_BASEDEDATOS: $dbuser</if>
<if $dbpass>PASSWORD_BASEDEDATOS: $dbpass</if>
<if $dbhost>HOST_BASEDEDATOS: $dbhost</if>

Instalaciones URL: $url
Versión Actual: $oldversion
Última Versión: $version
<if $upgrade_error>
Los datos del error son los siguientes:
Error: $upgrade_error
</if>
<if $error>
Restablece los datos del error como se muestra a continuación:
Error: $error
</if>

El staff '.APP.' está disponible también para dar asistencia. Puedes ponerte en contacto con el staff '.APP.' a través del (support@'.strtolower(APP).'.com) para cualquier problema.
';

// ALL IS FAILED (Upgrade and RESTORE toooo) (FOR USER)
$l['mail_adminupgrade_restore_fail_user_sub'] = 'Actualización de la instalación de tu $scriptname por parte del System Admin no lograda
';
$l['mail_adminupgrade_restore_fail_user'] = 'El System Admin ha intentado actualizar la configuración de tu $scriptname, pero el upgrade no se ha logrado.
¡Se ha creado una copia de seguridad antes del upgrade, pero sin embargo, el proceso de restablecimiento no se ha logrado!

Requerirá un restablecimiento manual. La guía para el restablecimiento manual está disponible aquí:
http://www.softaculous.com/docs/Manual_Ripristinare

A continuación se muestran los datos de instalación y copia de seguridad que podrían serte de utilidad para restablecer la instalación de tu $scriptname :
RUTA_A_TU_ARCHIVO_COPIADESEGURIDAD: $backup_path
RUTA_DE_INSTALACIÓN: $softpath
<if $dbname>NOMBRE_BASEDEDATOS: $dbname</if>
<if $dbuser>USUARIO_BASEDEDATOS: $dbuser</if>
<if $dbpass>PASSWORD_BASEDEDATOS: $dbpass</if>
<if $dbhost>HOST_BASEDEDATOS: $dbhost</if>

Instalaciones URL: $url
Versión Actual: $oldversion
Última Versión: $version
<if $upgrade_error>
Los datos del error son los siguientes:
Error: $upgrade_error
</if>
<if $error>
Restablece los datos del error como se muestra a continuación:
Error: $error
</if>

El staff '.APP.' está disponible también para dar asistencia. Puedes ponerte en contacto con el staff '.APP.' a través del (support@'.strtolower(APP).'.com) para cualquier problema.

Si quieres cancelar la inscripción de dichos correos electrónicos, vete a tu Panel de Control -> '.APP.' -> Configuración del correo electrónico
';

////////////////////////
// USER UPGRADE - 3
////////////////////////

// When upgraded by user successfully (By user)
$l['mail_userupgrade_success_user_sub'] = 'Instalación del $scriptname actualizada correctamente
';
$l['mail_userupgrade_success_user'] = 'La instalación de tu $scriptname se ha actualizado correctamente a la última versión.
Los datos son los siguientes:
Instalaciones URL: $url
Última Versión: $version
Versión Antigua: $oldversion

Si quieres cancelar la inscripción de dichos correos electrónicos, vete a tu Panel de Control -> '.APP.' -> Configuración del correo electrónico
';

// If any error occured while upgrading, (By user)
$l['mail_userupgrade_fail_user_sub'] = 'Actualización de la instalación de tu $scriptname no lograda
';
$l['mail_userupgrade_fail_user'] = 'El upgrade de la instalación de tu $scriptname no se ha logrado.
Los datos son los siguientes:
Instalaciones URL: $url
Versión Actual: $oldversion
Última Versión: $version
Error: $upgrade_error

Si quieres cancelar la inscripción de dichos correos electrónicos, vete a tu Panel de Control -> '.APP.' -> Configuración del correo electrónico
';

// If UPGRADE and RESTORE failed while upgrading, (By user)
$l['mail_userupgrade_restore_fail_user_sub'] = 'Actualización de la instalación de tu $scriptname no lograda
';
$l['mail_userupgrade_restore_fail_user'] = 'El upgrade de la instalación de tu $scriptname no se ha logrado.
¡Se ha creado una copia de seguridad antes del upgrade, pero sin embargo, el proceso de restablecimiento no se ha logrado!

Requerirá un restablecimiento manual. La guía para el restablecimiento manual está disponible aquí:
http://www.softaculous.com/docs/Manual_Ripristinare

Los datos son los siguientes:
Instalaciones URL: $url
Versión Actual: $oldversion
Última Versión: $version
<if $upgrade_error>
Los datos del error son los siguientes:
Error: $upgrade_error
</if>
<if $error>
Los datos de restablecimiento del error son los siguientes:
Error: $error
</if>

El staff '.APP.' está disponible también para la asistencia. Puedes ponerte en contacto con el staff '.APP.' a través de (support@'.strtolower(APP).'.com) para cualquier problema.

Si quieres cancelar la inscripción de dichos correos electrónicos, vete a tu Panel de Control -> '.APP.' -> Configuración del correo electrónico
';

////////////////////////
// AUTO UPGRADE - 3
////////////////////////

// When AUTOUPGRADED successfully
$l['mail_autoupgrade_success_user_sub'] = 'Actualización automática de las instalaciones $scriptname lograda
';
$l['mail_autoupgrade_success_user'] = 'La instalación de tu $scriptname se ha actualizado automáticamente correctamente a la última versión.
Los datos son los siguientes:
Instalaciones URL: $url
Última Versión: $version
Versión Antigua: $oldversion

Si quieres cancelar la inscripción de dichos correos electrónicos, vete a tu Panel de Control -> '.APP.' -> Configuración del correo electrónico
';

// When AUTOUPGRADE FAILED
$l['mail_autoupgrade_fail_user_sub'] = 'Actualización automática de la instalación de tu $scriptname no lograda
';
$l['mail_autoupgrade_fail_user'] = 'Actualización automática de la instalación de tu $scriptname no lograda
Los datos son los siguientes:
Instalaciones URL: $url
Versión Actual: $oldversion
Última Versión: $version
Error: $upgrade_error

Si quieres cancelar la inscripción de dichos correos electrónicos, vete a tu Panel de Control -> '.APP.' -> Configuración del correo electrónico
';

// If UPGRADE and RESTORE failed while AUTOUPGRADING
$l['mail_autoupgrade_restore_fail_user_sub'] = 'Actualización automática de la instalación de tu $scriptname no lograda
';
$l['mail_autoupgrade_restore_fail_user'] = 'Actualización automática de la instalación de tu $scriptname no lograda
¡Se ha creado una copia de seguridad antes del upgrade, pero sin embargo, el proceso de restablecimiento no se ha logrado!

Requerirá un restablecimiento manual. La guía para el restablecimiento manual está disponible aquí:
http://www.softaculous.com/docs/Manual_Ripristinare

Los datos son los siguientes:
Instalaciones URL: $url
Versión Actual: $oldversion
Última Versión: $version
<if $upgrade_error>
Los datos del error son los siguientes:
Error: $upgrade_error
</if>
<if $error>
Restablecer los datos del error como se muestra a continuación:
Error: $error
</if>

El staff '.APP.' está disponible también para la asistencia. Puedes ponerte en contacto con el staff '.APP.' a través de (support@'.strtolower(APP).'.com) para cualquier problema.

Si quiere cancelar la inscripción de dichos correos electrónicos, vete a tu Panel de Control -> '.APP.' -> Configuración del correo electrónico
';

////////////////////////
// PRE UPGRADE CHECK 
////////////////////////

// If pre upgradation check fails while AUTOUPGRADE (FOR USER)
$l['mail_autoupgrade_precheck_fail_sub'] = 'Control de la actualización anterior no lograda
';
$l['mail_autoupgrade_precheck_fail'] = 'La actualización automática para la siguiente configuración no se puede completar, porque no satisface los requisitos de upgrade :
Instalaciones URL: $url
Versión Actual: $oldversion
Última Versión: $version
<if $upgrade_error>
Error: $upgrade_error
</if>
<if $error>
Error: $error
</if>

Si quieres cancelar la inscripción de dichos correos electrónicos, vete a tu Panel de Control -> '.APP.' -> Configuración del correo electrónico
';

/////////////////////////////////
// Backup Failed CLI UPGRADE
/////////////////////////////////

// If a backup fails before AUTO UPGRADING an installation (FOR USER)
$l['mail_autoupgrade_backup_fail_sub'] = 'Proceso de copia de seguridad no logrado antes de la actualización automática de la instalación del $scriptname
';
$l['mail_autoupgrade_backup_fail'] = 'La copia de seguridad de la instalación del $scriptname no se ha logrado. Por lo tanto, el proceso de actualización automático se ha interrumpido.
Los datos son los siguientes:
Instalaciones URL: $url
Versión Actual: $oldversion
Última Versión: $version
Error: $error

Si quieres cancelar la inscripción de dichos correos electrónicos, vete a tu Panel de Control -> '.APP.' -> Configuración del correo electrónico
';

$l['err_openconfig'] = 'No se pudo abrir el archivo de configuración';
$l['err_writeconfig'] = 'No se pudo escribir el archivo de configuración';

$l['classes_con_failed'] = 'Error: No se pudo conectar con el servidor .';
$l['cl_ratings'] = 'Valoraciones';
$l['cl_author'] = 'Autor';
$l['cl_license'] = 'Licencia';
$l['cl_version'] = 'Version';
$l['cl_show_files'] = 'Mostrar ficheros';
$l['cl_install_but'] = 'Instalacion';
$l['expand_view'] = 'Haga clic aquí para una vista completa';
$l['collapse_view'] = 'Haga clic aquí para una vista incrustada';
$l['email_off_notice'] = '<b>NOTA : Correos electrónicos de notificación están desactivadas por lo que no recibirá ningún correo electrónico.</b>';

// Add User Language Strings
$l['mail_add_user_sub'] = 'Welcome to Softaculous Remote Installer';
$l['mail_add_user'] = 'You can now successfully login into Softaculous Remote Installer.
The details are as follows :
User 					: $username
API Key 				: $api_key
API Password 			: $api_pass
Number of Users allowed	: $number_of_users';

// Requirement parser languages
$l['req_ver_nf'] = 'Required &soft-1; version &soft-2; &soft-3; AND found version is : ';
$l['req_ext_nf'] = 'Required &soft-1; extension not found :';
$l['req_func_nf'] = 'Required &soft-1; function not found';
$l['req_ext_ver'] = 'Required &soft-1; &soft-2; extension version &soft-3; &soft-4; BUT found &soft-5;';
$l['gt'] = 'greater than';
$l['lt'] = 'less than';
$l['ge'] = 'greater than equal to';
$l['le'] = 'less than equal to';
$l['eq'] = 'is';
$l['ne'] = 'should not be equal to';

// Automated Backup Language Strings
$l['mail_auto_backup_sub'] = 'Copia de seguridad automática de la instalación de tu $scriptname 
';
$l['mail_auto_backup'] = 'La copia de seguridad automática de la instalación de tu $scriptname se ha completado correctamente.
Los datos son los siguientes:
Instalaciones Ruta: $path
Instalaciones URL: $url
Ruta de copia de seguridad: $backup_file
<if $backup_location>Backup Location : $backup_location</if>
Puedes acceder a la copia de seguridad desde la Sección Copia de Seguridad en '.APP.'.

Si quieres cancelar la inscripción de dichos correos electrónicos, vete a tu Panel de Control -> '.APP.' ->Configuración del correo electrónico
';

$l['mail_auto_backup_fail_sub'] = 'No logrado: Copia de seguridad automático de la instalación de tu $scriptname 
';
$l['mail_auto_backup_fail'] = 'La copia de seguridad automática de la instalación de tu $scriptname no se ha completado correctamente.
Los datos son los siguientes:
Instalaciones Ruta: $path
Instalaciones URL: $url
Ruta de copia de seguridad: $backup_file
<if $backup_location>Backup Location : $backup_location</if>
Se ha detectado el siguiente error:
$error

Si quieres cancelar la inscripción de dichos correos electrónicos, vete a tu Panel de Control -> '.APP.' -> Configuración del correo electrónico
';

// Email for sending the list of scripts which does not meet the requirements.
$l['mail_script_requirement_sub'] = 'Log de los requisitos del script no logrado
';
$l['mail_script_requirement'] = 'La siguiente lista de los script no satisface los requisitos mínimos en tu servidor y podría no funcionar.
Los datos son los siguientes:

$failed_req

Nota: si estás modificando la versión de PHP en runtime (por ejemplo, usando CageFS, hive, .htaccess etc.) entonces puedes ignorar los avisos anteriores sobre la versión PHP no lograda.';

// Softpanel Language Strings
$l['no_www_domain'] = 'Please close all '.$globals['sn'].' pages and log out from the control panel using the log out button.
Afterwards you can log in again and use '.$globals['sn'].'.';

$l['install_tweet'] = 'I just installed #[[SCRIPTNAME]] on [[softurl]] via #[[APP]] #[[TYPE]]';
$l['install_tweet_classes'] = 'I just installed #[[SCRIPTNAME]] via #[[APP]] #[[TYPE]]';
$l['upgrade_tweet'] = 'I just upgraded #[[SCRIPTNAME]] on [[softurl]] via #[[APP]] #[[TYPE]]';
$l['clone_tweet'] = 'I just cloned #[[SCRIPTNAME]] on [[softurl]] via #[[APP]] #[[TYPE]]';

// month strings
$l['January'] = 'Enero';
$l['February'] = 'Febrero';
$l['March'] = 'Marzo';
$l['April'] = 'Abril';
$l['May'] = 'Mayo';
$l['June'] = 'Junio';
$l['July'] = 'Julio';
$l['August'] = 'Agosto';
$l['September'] = 'Septiembre';
$l['October'] = 'Octubre';
$l['November'] = 'Noviembre';
$l['December'] = 'Diciembre';

// Mail templates for webuzo backup
$l['mail_webuzo_backup_sub'] = '$type backup completed successfully';
$l['mail_webuzo_backup'] = 'The backup process was completed successfully.
Backup file is created with the file name:
$filename

Regards,
Webuzo Team';
$l['mail_webuzo_backup_fail_sub'] = '$type backup failed';
$l['mail_webuzo_backup_fail'] = 'The backup process did not complete successfully.
The following error(s) occured:
$error

Regards,
Webuzo Team';
$l['mail_webuzo_restore_sub'] = '$type restore completed successfully';
$l['mail_webuzo_restore'] = 'The restoration was completed successfully.

The file restored was:
$filename

Regards,
Webuzo Team';
$l['mail_webuzo_restore_fail_sub'] = '$type restore failed';
$l['mail_webuzo_restore_fail'] = 'The restore process encountered errors and would not be completed.
The following error(s) occured:
$error

Regards,
Webuzo Team';

// Staging Template Vaiable
$l['mail_staging_sub'] = 'Staging of $scriptname';
$l['mail_staging'] = 'Your Staging of $scriptname $version has been completed successfully.

Your live installation details :
Original Path : $live_path
Original URL : $live_url

Your staging installation details :
Path : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>Data Directory : $datadirectory</if>
<if $dbname>MySQL Database : $dbname</if>
<if $dbuser>MySQL DB User : $dbuser</if>
<if $dbhost>MySQL DB Host : $dbhost</if>
<if $dbpass>MySQL DB Password : $dbpass</if>
<if $cron>Cron Job : $cron</if>
<if $time>Time of Installation : $time</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings';

// Pushtolive Template Vaiable
$l['mail_pushtolive_sub'] = 'Pushing $scriptname to live';
$l['mail_pushtolive'] = 'Pushing your $scriptname site $version to live has been completed successfully.

Your live installation details :
Original Path : $live_path
Original URL : $live_url

Your staging installation details :
Path : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>Data Directory : $datadirectory</if>
<if $dbname>MySQL Database : $dbname</if>
<if $dbuser>MySQL DB User : $dbuser</if>
<if $dbhost>MySQL DB Host : $dbhost</if>
<if $dbpass>MySQL DB Password : $dbpass</if>
<if $cron>Cron Job : $cron</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings';

/////////////////////////////////
// Backup Failed CLI UPGRADE of Plugins/Themes
/////////////////////////////////

// If a backup fails before AUTO UPGRADING Plugins/Themes of an installation (FOR USER)
$l['mail_autoupgrade_extras_backup_fail_sub'] = 'Backup process failed before auto upgrading plugins/theme of your $scriptname installation';
$l['mail_autoupgrade_extras_backup_fail'] = 'The backup process of plugins/theme of your $scriptname installation has failed. So the auto upgrade plugins/theme process was not performed.
The details are as follows :
Installation URL : $url
Error : $error

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

/////////////////////////////////
// Upgrade Plugins/Themes By USER
/////////////////////////////////

// Plugins/Theme when upgraded by user successfully (By user)
$l['mail_userupgrade_extras_success_user_sub'] = 'Plugins/Theme of $scriptname installation upgraded successfully';
$l['mail_userupgrade_extras_success_user'] = 'Plugins/Theme of your $scriptname installation have been successfully upgraded to the latest version.
The details are as follows :
Installation URL : $url

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// If UPGRADE and RESTORE Plugins/Theme failed while upgrading, (By user)
$l['mail_userupgrade_extras_restore_fail_user_sub'] = 'Upgrade of Plugins/Theme of your $scriptname installation failed';
$l['mail_userupgrade_extras_restore_fail_user'] = 'The upgrade of plugins/theme of your $scriptname installation has failed.
A backup had been created before upgrading, but the restore process also failed !

It will require a manual restore. Guide for the manual restore is available here :
http://www.softaculous.com/docs/Manual_Restore

The details are as follows :
Installation URL : $url
<if $upgrade_error>
The Upgrade error details are as follows :
Error : $upgrade_error
</if>
<if $error>
The Restore error details are as follows :
Error : $error
</if>

The '.APP.' team is available for help as well. You can contact the '.APP.' Team (support@'.strtolower(APP).'.com) if you face any problems.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// If any error occured while upgrading plugins/theme, (By user)
$l['mail_userupgrade_extras_fail_user_sub'] = 'Upgrade of plugins/theme of your $scriptname installation failed';
$l['mail_userupgrade_extras_fail_user'] = 'The upgrade of plugins/theme of your $scriptname installation has failed.
The details are as follows :
Installation URL : $url
Error : $upgrade_error

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

/////////////////////////////////
// Auto Upgrade Plugins/Themes
/////////////////////////////////

// When AUTOUPGRADED Plugins/Theme successfully
$l['mail_autoupgrade_extras_success_user_sub'] = 'Plugins/Theme of $scriptname Installation Auto Upgraded Successfully';
$l['mail_autoupgrade_extras_success_user'] = 'Plugins/Theme of your $scriptname installation have been successfully auto upgraded to the latest version.
The details are as follows :
Installation URL : $url
<if $plugins_updated>
Following Active Plugins were upgraded :
$plugins_updated
</if>
<if $theme_updated>
Following Active Theme was upgraded :
$theme_updated
</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// If UPGRADE and RESTORE of Plugins/Theme failed while AUTOUPGRADING
$l['mail_autoupgrade_extras_restore_fail_user_sub'] = 'Auto Upgrade of plugins/theme of your $scriptname installation failed';
$l['mail_autoupgrade_extras_restore_fail_user'] = 'The auto upgrade  of plugins/theme of your $scriptname installation has failed.
A backup had been created before upgrading, but the restore process also failed !

It will require a manual restore. Guide for the manual restore is available here :
http://www.softaculous.com/docs/Manual_Restore

The details are as follows :
Installation URL : $url
<if $upgrade_error>
The Upgrade error details are as follows :
Error : $upgrade_error
</if>
<if $error>
The Restore error details are as follows :
Error : $error
</if>

The '.APP.' team is available for help as well. You can contact the '.APP.' Team (support@'.strtolower(APP).'.com) if you face any problems.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// When AUTOUPGRADE Plugins/Theme FAILED
$l['mail_autoupgrade_extras_fail_user_sub'] = 'Auto Upgrade of plugins/theme of your $scriptname installation failed';
$l['mail_autoupgrade_extras_fail_user'] = 'The auto upgrade of plugins/theme of your $scriptname installation has failed.
The details are as follows :
Installation URL : $url
Error : $upgrade_error

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// clone fail Language Strings
$l['mail_clone_fail_sub'] = 'Failed : Clone of your $scriptname installation';
$l['mail_clone_fail'] = 'The clone of your $scriptname installation did not complete successfully.
The details are as follows :
Installation Path : $path
Installation URL : $url

The following error occured :
$error

Please try to import the installation again after some time.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// clone fail Language Strings
$l['mail_staging_fail_sub'] = 'Failed : Staging of your $scriptname installation';
$l['mail_staging_fail'] = 'The staging of your $scriptname installation did not complete successfully.
The details are as follows :
Installation Path : $path
Installation URL : $url

The following error occured :
$error

Please try to import the installation again after some time.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

$l['mail_upgrade_fail_sub'] = 'Failed : Upgrade of your $scriptname installation';
$l['mail_upgrade_fail'] = 'The upgrade of your $scriptname installation did not complete successfully.
The details are as follows :
Installation Path : $path
Installation URL : $url

The following error occured :
$error

Please try to upgrade again after some time.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

$l['invalid_resp'] = 'Invalid response received ';

