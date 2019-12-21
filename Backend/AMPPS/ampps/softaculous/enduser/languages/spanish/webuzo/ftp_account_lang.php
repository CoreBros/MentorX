<?php

//////////////////////////////////////////////////////////////
//===========================================================
// settings_lang.php
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

$l['no_new'] = 'No ha especificado la contraseña.';
$l['no_conf'] = 'La confirmacion de contraseña se ha perdido.';
$l['no_match'] = 'Las contraseñas no coinciden';
$l['no_dir'] = 'No ha especificado el directorio';
$l['no_user'] = 'Por favor insrte el nombrede usuario';
$l['no_quota_limit'] = 'Por favor, introduzca límite de cuota';
$l['err_invalid_user'] = 'Nombre de usaurio invalido';
$l['err_invalid_quotalimit'] = 'Límite de cuota debe ser un numero entero positivo';
$l['err_add_msg'] = 'Hubo un error al agregar nuevo usuario FTP. Por favor, inténtalo de nuevo.' ;
// Theme Strings
$l['<title>'] = APP.' - Añadir cuenta FTP';
$l['loginname']='Login';
$l['ftp']='Añadir cuenta FTP';
$l['new_pass']='Password';
$l['retype_pass']='Password (de nuevo)';
$l['directory']='Directorio';
$l['path'] = 'El usaurio tendra acceso a este directorio';
$l['submit_button']='Crear cuenta';
$l['change_note'] = 'Cambiar Password';
$l['change_final'] = 'Usuario FTP creado';
$l['change_onboot'] = 'Su password sera cambiada cuando reinicie su maquina';
$l['user_exist'] = 'El nombre de usaurio ya existe';
 $l['lbl_ftp_manage'] = 'Volver a Administrar FTP';
 $l['quota'] = 'Cuota';
 $l['unlimited'] = 'Ilimitado';
$l['limited'] = 'MB';
$l['randpass'] = 'Generate a Random Password';
$l['service_stop'] = 'Your Pure-FTPd service is not running currently. Click here to start.';
$l['is_domain_resolve'] = 'Your Domain does not resolve to the server IP ! So use the IP as Host instead of the domain name, while connecting.';
$l['change_final'] = 'FTP user created.<br/>Return to <a href="'.$globals['index'].'act=ftp">Manage FTP</a>';