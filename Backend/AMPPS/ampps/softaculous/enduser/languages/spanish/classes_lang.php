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

$l['no_info_file'] = 'No hay clase para la ID especificada';
$l['incompatible'] = 'El software requiere una versión más reciente de '.APP.'! Por favor, informe al administrador del servidor.';
$l['no_install'] = 'El archivo install.xml no se ha encontrado! Por favor, informe al administrador del servidor.';
$l['no_functions'] = 'El archivo INSTALL FUNCTIONS no se ha encontrado! Por favor, informe al administrador del servidor.';
$l['no_softdomain'] = 'Usted no ha elegido el dominio para instalar el software.';
$l['wrong_softdomain'] = 'La ruta del dominio que ha seleccionado no se pudo encontrar.';
$l['no_space'] = 'Usted no tiene espacio suficiente para instalar este software!';
$l['no_field'] = 'El campo <b>&soft-1;</b> es obligatorio y debe ser rellenado.';
$l['no_package'] = 'El paquete de instalación no se pudo encontrar!';
$l['no_decompress'] = 'Hubo algunos errores en la descompresión de los archivos del paquete.';
$l['mail_new_ins'] = 'Una nueva instalacion de &soft-1; ha concluido. Los detalles de la instalacion se muestran a continuación:';
$l['mail_path'] = 'Ruta';
$l['mail_url'] = 'URL';
$l['mail_time'] = 'Tiempo de Instalacion';
$l['mail_subject'] = 'Nueva instalacion de &soft-1;';
$l['some_files_exist'] = 'La instalación no puede continuar debido a los siguientes archivos ya existen en la carpeta de destino: ';
$l['delete_files'] = 'Por favor, elimine estos archivos o seleccione otra carpeta.';
$l['checking_data'] = 'Comprobando los datos';
$l['unzipping_files'] = 'Copiando archivos y carpetas';
$l['unzipping_datadir'] = 'Descomprimiendo archivos de datos';
$l['prop_db'] = 'Propagando la Base de Datos';
$l['finishing_process'] = 'Finalizando instalacion';
$l['wait_note'] = '<b>NOTA:</b> Esta operación puede tardar 3-4 minutos. Por favor, no deje esta página hasta que la barra de progreso llegue al 100% ';
$l['cant_download'] = 'No se puede descargar el archivo ZIP.';
$l['softdirectory_invalid'] = 'El directorio que ha escrito no es valido.';
$l['softdirectory_exists'] = 'El directorio que ha escrito ya existe! Por favor, escriba otro nombre de directorio';
$l['ins_emailto'] = 'Detalles de la instalación por correo electrónico a';
$l['disable_classes'] = 'PHP Classes are disabled by admin or you are using '.APP.' Free version';
$l['invalid_class_id'] = 'Invalid Class ID';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['install'] = 'Instalacion';
$l['overview'] = 'Leeme';
$l['features'] = 'Caracteristicas';
$l['demo'] = 'Demo';
$l['file'] = 'Archivos';
$l['ratings'] = 'Ratings';
$l['import'] = 'Importar';
$l['software_ver'] = 'Version';
$l['space_req'] = 'Espacio requerido';
$l['available_space'] = 'Espacio disponible';
$l['req_space'] = 'Espacio requerido';
$l['mb'] = 'MB';
$l['software_support'] = 'Soporte de Software';
$l['support_link'] = 'Visite el soporte del sitio';
$l['support_note'] = 'Nota: no se proporciona soporte para el software';
$l['setup'] = 'Configuracion del Software';
$l['choose_domain'] = 'Elija Dominio';
$l['choose_domain_exp'] = 'Por favor, seleccione el dominio para instalar el software.';
$l['in_directory'] = 'En el Directorio';
$l['in_directory_exp'] = 'El directorio es relativoa su ruta home y se <b>creara si no existe</b>. Por ejemplo, para instalar &soft-1;/dir solo tiene que escribir <b>dir</b>. Para instalar solo en &soft-1;/ deje el campo vacio.';
$l['aef_in_directory_exp'] = 'El directorio es relativoa su ruta home y se <b>creara si no existe</b>. Por ejemplo, para instalar <span id="aef_span_lang">&soft-1;</span>/dir solo tiene que escribir <b>dir</b>. Para instalar solo en  <span id="aef_span_lang_a">&soft-1;</span>/ deje el campo vacio.';
$l['softsubmit'] = 'Instalacion';
$l['congrats'] = 'Felicidades, el software se ha instalado correctamente.';
$l['succesful'] = 'se ha instalado con exito en';
$l['enjoy'] = 'Esperamos que el proceso de instalacion haya sido sencillo.';
$l['install_notes'] = 'Las siguientes notas son importantes. Se recomienda encarecidamente que las lea.';
$l['please_note'] = '<b>NOTA</b>: No ofrecemos ningún apoyo para los paquetes de software individuales. Por favor, visite el proveedor de software para soporte.';
$l['regards'] = 'Saludos.';
$l['softinstaller'] = 'Autoinstalador';
$l['return'] = 'Volver al Menu General';
$l['current_ins'] = 'Instalaciones Actuales';
$l['link'] = 'Enlaces';
$l['ins_time'] = 'Teinmpo de Instalacion';
$l['version'] = 'Version';
$l['upd_to'] = 'Actualizar a la version';
$l['remove'] = 'Eliminar';
$l['no_info'] = 'No Info';
$l['ratesoft'] = 'Votar este Script';
$l['reviews'] = 'Comentarios';
$l['reviewsoft'] = 'Escribir un comentario';
$l['readreviews'] = 'Leer opiniones';
$l['reviews_exp'] = 'Leer los comentarios escritos por otros usuarios y';
$l['ins_type'] = 'Tipo de instalacion';
$l['ins_type_exp'] = '<b>Paquete Original</b> - Paquete como disponible en el sitio Web Scripts. <br /> <b>Archivos de libreria</b> - Sólo los archivos de biblioteca de JavaScript.';
$l['ori_pack'] = 'Paquete original';
$l['just_lib'] = 'Solo archivos de biblioteca';
$l['overwrite_exist'] = '<b>OR</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">Seleccione la opción para sobrescribir todos los archivos y continuar</span></b>';
$l['overwrite'] = 'Sobrescribir archivos';
$l['choose_protocol'] = 'Elegir Protocolo';
$l['choose_protocol_exp'] = 'Si su sitio tiene SSL, por favor, elija el protocolo HTTPS.';
$l['downloading'] = 'Descargando paquete';
$l['installing'] = 'Instalando Script';
$l['files'] = 'Archivos & Carpetas';
$l['modified_time'] = 'Ultimas modificaciones';
$l['size'] = 'Tamaño';
$l['classes_ins_error'] = 'Ocurrió un error al guardar la instalación';
$l['del_insid'] = '¿Está seguro que desea eliminar las instalaciones seleccionadas? La acción será irreversible. No se le volveran a solicitar mas confirmaciones.';
$l['rem_inst_id'] = 'Eliminando instalacion - ';
$l['no_sel_inst'] = 'No ha seleccionado ninguna isntalacion para eliminar.';
$l['inst_remvd'] = 'La instalacion seleccionada ha sido eliminada. La pagina se volverá a cargar ahora!.';
$l['go'] = 'Ir';
$l['download_zip'] = 'Descargar todos lso ficheros ';
$l['software_category'] = 'Categoria';
$l['adv_option'] = 'Advanced Options';
$l['disable_notify_update'] = 'Disable Update Notifications Emails';
$l['exp_disable_notify_update'] = 'If checked you will not receive an email notification for updates available for this installation.';
$l['prog_installing'] = 'Installing ';// Dont remove the trailing space
$l['prog_install_complete'] = 'Installation Completed.';

$l['install_tweet_sub'] = 'Tell your friends';
$l['select_domain'] = 'Select Domain';
$l['with_selected'] = 'With Selected';
$l['download'] = 'Download';

