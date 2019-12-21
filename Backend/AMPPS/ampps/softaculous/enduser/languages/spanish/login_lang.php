<?php

//////////////////////////////////////////////////////////////
//===========================================================
// login_lang.php
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
	global $softpanel;

$l['user_data_missing'] = 'El campo usuario o contraseña estan vacios';
$l['invalid_username'] = 'El nombre de usuario o la contraseña es incorrecta';
$l['invalid_password'] = 'El nombre de usuario o la contraseña es incorrecta';
$l['invalid_user'] = 'El nombre de usuario o la contraseña es incorrecta'; 
$l['no_username'] = 'El campo usuario esta vacio';
$l['no_password'] = 'El campo usuario esta vacio';
$l['disable_user'] = 'Login disabled by <strong>root</strong> user.';

$l['<title>'] = 'Login';
$l['sign_in'] = 'Registro';
$l['log_user'] = 'Usuario';
$l['log_pass'] = 'Contraseña';
$l['sub_but'] = 'Login';

$l['<title_fpass>'] = 'Contraseña olvidada';
$l['pass_nomatch'] = 'El nombre de usuario o la contraseña es incorrecta';
$l['forgotpass'] = 'Contraseña olvidada';
$l['emailuser'] = 'Direccion de correo electronico';
$l['enteremail'] = 'Introduzca su direccion de correo electronico';
$l['sub_email'] = 'Enviar';
$l['no_email'] = 'No se envió niguna direccion de correo electronico';
$l['invalidemail'] = 'La dirección de correo electrónico que ha enviado no es válido';
$l['mail_sub'] = 'Resetear Contraseña';
$l['mail_body'] = 'Hola,
						
Se ha realizado la solicitudad para restablecer su contraseña.
Si usted no solicitó el restablecimiento de la contraseña, por favor ignore este mensaje.

Si desea restablecer su contraseña, por favor haga clic en el enlace de abajo :
http://'.(($globals['softpanel'] == 'webuzo') ? $softpanel->getConf('WU_PRIMARY_DOMAIN').':2002' : '127.0.0.1').'/index.php?act=login&sa=resetpass&key=&soft-1;

Saludos,
'.$globals['sn'];
$l['mail_done'] = 'Un correo ha sido enviado con los detalles para restablecer la contraseña';
$l['fuser_mail_sub'] = 'Webuzo Username';
$l['fuser_mail_body'] = 'Hi,
						
A request to fetch the Webuzo Username has been made.
If you did not request the Webuzo Username, then please ignore this email.

Login to the URL below :
http://'.(($globals['softpanel'] == 'webuzo') ? $softpanel->getConf('WU_PRIMARY_DOMAIN').':2002' : '127.0.0.1').'/index.php?act=login

Username : &soft-1;

Regards,
'.$globals['sn'];
$l['fuser_mail_done'] = 'An email has been sent with the Webuzo Username';
$l['forgotuser'] = 'Forgot Username';
$l['back_to_login'] = 'Volver a loguearse';

$l['<title_reset>'] = 'Resetear Contraseña';
$l['resetpass'] = 'Resetear Contraseña';
$l['log_new_pass'] = 'Nueva contraseña'; 
$l['log_reppass'] = 'Confirmar Contraseña';
$l['changepass'] = 'Cambiar contraseña';
$l['no_key'] = 'No ha pulsado la tecla reset';
$l['invalidkey'] = 'Ha especificado una clave no válida';
$l['no_new'] = 'Por favor, introduzca una contraseña valida';
$l['no_reppass'] = 'Por favor, introduzca la confirmacion de la contraseña';
$l['no_match'] = 'Las contraseñas no coinciden';
$l['keyexpire'] = 'la clave no es valida';
$l['passchanged'] = 'La contraseña se ha cambiado satisfactoriamente. Por favor, proceda de nuevo a  <a href="'.$globals['index'].'act=login">Loguearse</a>';
$l['forgot_pass'] = 'Contraseña olvidada';

