<?php

//////////////////////////////////////////////////////////////
//===========================================================
// ftp_lang.php
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

$l['no_quota_limit'] = 'Por favor, introduzca límite de cuota';
$l['err_invalid_quotalimit'] = 'Límite de cuota debe ser un numero entero positivo';
$l['err_del_msg'] = 'Hubo un error al borrar usuario FTP. Por favor, inténtalo de nuevo.';
$l['err_update_msg'] = 'Hubo un error al actualizar el usuario FTP. Por favor, inténtalo de nuevo.';
$l['err_used_quotalimit'] = 'Usted ya ha utilizado más de su cuota asignada';
$l['err_noftpuser'] = 'FTP user does not exist';
//Theme Strings
$l['<title>'] = 'Administrar FTP';
$l['ftp_head'] = 'Administrar FTP';

$l['add_new'] = 'Añadir nuevo usuario FTP';
$l['return'] = 'Volver a Home';

$l['record_del_conf'] = 'Esta seguro de querer eliminar este usaurio FTP ?';
$l['delete'] = 'Usuario FTP eliminado satisfactoriamente';
$l['ftp_name'] = 'Nombre de Usuario';
$l['ftp_path'] = 'Directorio';
$l['ftp_option'] = 'Opciones';
$l['ftp_quota'] = 'Cuota';
$l['ftp_quota_unlimit'] = 'Ilimitado';
$l['connect_error'] ='Oops ha ocurrido un error mientras se conectaba al <strong>Servidor</strong>';
$l['cpass'] = 'Cambiar password';
$l['unlimited'] = 'Ilimiatado';
$l['limited'] = 'MB';
$l['update'] = 'Cuota usuarios FTP actualizado correctamente';
$l['ftp_usage'] = 'Uso';
$l['service_stop'] = 'Your Pure-FTPd service is not running currently. Click here to start.';
$l['is_domain_resolve'] = 'Your Domain does not resolve to the server IP ! So use the IP as Host instead of the domain name, while connecting.';