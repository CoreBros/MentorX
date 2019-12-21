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

$l['connect_error'] ='Oops ha ocurrido un error mientras se conectaba al <strong>Servidor</strong>';
$l['err_invalid_data'] ='Por favor inserte algun dato';
$l['no_user'] = 'Por favor inserte un valor en el campo <strong>Registro</strong> ';
$l['err_invalid_record'] = 'Ha introducido algunos datos no válidos para el campo Nombre';
$l['no_ttl'] = 'Por favor escriba el TTL';
$l['no_address'] = 'Por favor escriba la direccion';
$l['no_cname'] = 'Por favor escriba el CNAME';
$l['no_txt'] = 'Por favor introduzca los datos TXT ';
$l['err_invalid_address'] = 'Direccion Ip invalida';
$l['err_invalid_cname'] = 'CNAME Invalido';
$l['err_invalid_txt'] = 'Invalido TXT Data';
$l['err_invalid_ttl'] = 'El valor TTL debe ser un numero entero positivo';
$l['err_domain_exist'] = 'El Registro ya existe';
$l['err_add_msg'] = 'Ocurrio un error mientras se añadia el registro';
$l['err_edit_msg'] = 'Some error occured while editing the record';
$l['err_del_msg'] = 'Ocurrio un error mientras se borraba el registro';
$l['edit'] = 'El Registro se ha editado con exito';
$l['delete'] = 'El Registro se ha borrado ocn exito';
$l['invalid_domain'] = 'Invalid Domain';
$l['err_norecord'] = 'No Record found';
$l['no_type'] = 'Invalid Type';

// Theme Strings
$l['<title>'] = APP.' - Configuracion Avanzada de DNS';
$l['domain'] = 'Seleccionar Dominio';
$l['advancedns'] = 'Configuracion Avanzada de DNS';
$l['submit_button'] = 'Añadir Registro';
$l['typedefault'] = 'Direccion';
$l['change_final'] = 'Registro añadido';
$l['dns_name'] = 'Nombre';
$l['dns_ttl'] = 'TTL';
$l['dns_class'] = 'Clase';
$l['dns_type'] = 'Tipo';
$l['dns_record'] = 'Registro';
$l['dns_option'] = 'Opciones';
$l['record_del_conf'] = 'Esta seguro de que quiere eliminar este Registro ?';
$l['record_table'] = 'Fichero de Registros de Zona de';
$l['no_dns_recods'] = 'No DNS record(s) found';
$l['service_stop'] = 'Your Bind service is not running currently. Click here to start.';