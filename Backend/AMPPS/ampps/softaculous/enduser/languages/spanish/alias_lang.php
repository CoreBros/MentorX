<?php

//////////////////////////////////////////////////////////////
//===========================================================
// userindex_lang.php
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

global $globals;

$l['err_invalid_alias'] = 'El nombre de Alias introducido no es valido';
$l['err_invalid_alias_path'] = 'Las ruta de Alias introducida no es valida';
$l['err_exists_alias'] = 'El nombre de Alias ya existe';
$l['err_dir_not_created'] = 'La ruta del directorio de Alias no ha sido creada';
$l['err_invalid_alias_sp'] = 'Los caracteres especiales no estan permitidos en el nombre de alias';
$l['err_alias_ampps'] = 'El nombre de Alias ya está en uso';

//Theme Strings
$l['submitalias'] = 'Crear Alias';
$l['alias_label'] = 'Nombre de Alias';
$l['alias_path'] = 'Ruta de Alias';

$l['<title>'] = APP.' - Alias Manager';
$l['alias_headling'] = 'Alias Manager';
$l['alias_name'] = 'Alias';
$l['alias_option'] = 'Opciones';
$l['delete'] = 'Alias eliminado satisfactoriamente';
$l['alias_del_conf'] = 'Esta seguro de que quiere eliminar el Alias?';
$l['alias_path'] = 'Ruta';
$l['connect_error'] = 'Oops hubo un error durante la conexion al  <strong>servidor</strong>';
$l['alias_path_notice'] = '<b>Note:</b> Asegurese de que la ruta es correcta. Si el directorio no existe, sera creado.';
$l['alias_name_notice'] = '<b>Nota:</b> Despues de agregar el directorio, usted deberia poder acceder a la direccion http://localhost/your_site.';
if($globals['os'] == 'windows'){
	$l['alias_path_eg'] = 'por ejemplo C:/www/your_site';
}else{
	$l['alias_path_eg'] = 'por ejemplo /usr/local/www/your_site';
}
$l['alias_name_eg'] = 'por ejemplo your_site';
$l['add_new_button'] = 'Agregar nuevo';
$l['back_button'] = 'Volver';
