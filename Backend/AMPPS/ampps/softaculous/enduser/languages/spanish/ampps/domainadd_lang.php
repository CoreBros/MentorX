<?php

//////////////////////////////////////////////////////////////
//===========================================================
// import_lang.php
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

$l['err_invalid_domain'] = 'El dominio insertado no es válido';
$l['err_exits_domain'] = 'El dominio insertado ya existe';
$l['not_selected'] = 'NO ha seleccionado Dominio';
$l['already_exists'] = 'El directorio ya existe';
$l['park_instead_addon'] = 'Ya existe un dominio que apunta a esta ruta. Por lo tanto, por favor, agregue este dominio como un dominio aparcado.';
$l['domain_not_exists'] = 'El dominio seleccionado no existe';
$l['err_host'] = 'Su IP no se puede añadir en el archivo Hosts. Por favor desactive la opción en Configuración Avanzada';
$l['err_primary_exists'] = 'No es posible añadir 127.0.0.1 o localhost como dominio';

//Theme Strings
$l['<title>'] = 'Añadir nuevo dominio';
$l['submitdomain'] = 'Añadir Dominio';
$l['domain_label'] = 'Dominio';
$l['is_addon_part'] = 'Es un subdominio o es parqueado?';
$l['domain_path'] = 'Ruta de dominio   ';
$l['domain_add_label'] = 'Añadir nuevo dominio';
$l['domain_not_found'] = 'Nombre de dominio no encontrado';
$l['suc_dom_added'] = 'Dominio añadido';
$l['lbl_domain_manage'] = 'Ir a Administrar Dominios';
$l['select_domain'] = 'Seleccionar Dominio';
$l['exp_checkaddon'] = 'Compruebe si es un subdominio y Desmarque la opcion si es un dominio parqueado';
$l['host_entry'] = 'Agregue una entrada al archivo host ?';
$l['exp_hostadd'] = 'Compruebe para añadir una entrada';
if($globals['os'] == 'windows'){
	$l['exp_dompath'] = '<br />Introduzca la ruta de acceso del dominio p.e. C:/Ampps/your_site';
}else{
	$l['exp_dompath'] = '<br />Introduzca la ruta de acceso del dominio p.e. /Applications/AMPPS/your_site';
}
$l['ssl_entry'] = 'Agregue una entrada SSL?';
$l['exp_ssl'] = 'Compruebe para añadir una entrada SSL';
$l['hosts_perms'] = 'Acceso denegado: No tienes permisos para editar el archivo hosts. La entrada no será añadido al archivo host.';

