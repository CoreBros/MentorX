<?php

//////////////////////////////////////////////////////////////
//===========================================================
// addplans_lang.php
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

$l['no_planname'] = 'Por favor especifique el nombre del plan';
$l['invalidfilename'] = 'Por favor especifique un nombre de plan valido. Los caracteres especiales no estan permitidos.';
$l['no_cpplan'] = 'Por favor elija un Panel de COntrol valido para el plan';
$l['plan_exist'] = 'Ya existe un plan con el mismo nombre';
$l['error_plans'] = 'Por favor elija al menos un usuario o Panel de Control para el plan';
$l['user_plan_exist'] = 'El usuario(s) - <b>&soft-1;</b> - esta ya asignado a otro plan. Para sobreescribirlo, por favor seleccione la opcion sobreescribir';
$l['reseller_plan_exist'] = 'El Revendedor(es) - <b>&soft-1;</b> - ya esta asignado a otro plan. Para sobreescribirlo por favor seleccione la opcion sobreescribir';
$l['error_cpplan'] = 'Por favor seleccione un Panel de Control valido para el plan';
$l['error_scriptselect'] = 'Por favor seleccione al menos un script';
$l['error_disable'] = 'Por favor seleccione el checkbox si quiere <b>deshabilitar</b> '.APP.' el usaurio (s) seleccionado (s)';
$l['error_userselect'] = 'Por favor seleccione al menos un usuario';
$l['error_resellerselect'] = 'Por favor seleccione al menos un revendedor';
$l['cpplan_plan_exist'] = 'El Panel de Control del Plan - <b>&soft-1;</b> - ya esta asignado a otro plan. Para sobreescribirlo, por favor seleccione la opcion sobreescribir';
$l['err_prefix'] = 'No puede dar \'reseller_\' como un prefijo para su nombre de plan.';
$l['no_plan_support'] = 'Plans feature is not supported on this panel';

//Theme Strings
$l['<title>'] = 'Softaculous - Control de Acceso';
$l['title'] = 'Añadir Control de Acceso al Plan';
$l['planhead'] = 'Configuracion del Control de Acceso';
$l['planname'] = 'Nombre del Plan';
$l['exp_plan'] = 'Nombre del Control de Acceso del Plan';
$l['cplanname'] = 'Panel de Control de Planes';
$l['exp_cplan'] = 'Panel de Control de Planes';
$l['no_cpplans'] = 'Por favor seleccione un Panel de Control de Plan';
$l['saveplan'] = 'Guardar el Plan';
$l['userselect'] = 'Asignacion de Usuario';
$l['resellerselect'] = 'Asignacion de revendedor';
$l['exp_userselect'] = 'Seleccione los usuarios individuales que seran afectados por este Grupo de Acceso.';
$l['exp_resellerselect'] = 'Seleccione los revendedores que seran afectados por este Grupo de Acceso.';
$l['scriptselect'] = 'Asignacion de Script';
$l['exp_scriptselect'] = 'Seleccione los scripts para este plan en particular';
$l['done'] = 'Su plan ha sido guardado. Volver a <a href="'.$globals['index'].'act=plans">Inicio Planes</a>';
$l['plan_save_fail'] = 'No se puede guardar los detalles del plan';
$l['cpanelplan'] = 'Panel de Control Plan de Asignación';
$l['cpplanselect'] = 'Seleccione el panel de control de los planes a los que se aplicará esta ACL. Todos los usuarios en virtud de ese plan serán capaces de utilizar sólo las secuencias de comandos asignados aquí';
$l['default_plan_note'] = 'NOTA: Por favor especifique el nombre del plan como  \'<b>softaculous_default</b>\' para crear un plan por defecto para cualquier Usuario que no está asignado a ningún otro plan de Softaculous.';
$l['select_all'] = 'Seleccionar todo: ';
$l['overwrite_settings'] = 'Sobreescribir configuracion:';

$l['disable_autoupgrade'] = 'Disable Auto Upgrade';
$l['exp_disable_autoupgrade'] = 'Disable auto upgrading script installations for users that fall under this plan';


$l['limit_features'] = 'Feature Restrictions';

$l['default_note'] = 'Default : Unlimited';

$l['max_ins_script'] = 'Maximum Installations per Script';
$l['max_backup_script'] = 'Maximum Backups per Script';
$l['max_clone_script'] = 'Maximum Clone per Script';
$l['max_staging_script'] = 'Maximum Staging per Script';

$l['exp_max_ins_script'] = 'This will limit the maximum number of installations a user can create for particular script';
$l['exp_max_backup_script'] = 'This will limit the maximum number of backups a user can create for particular script';
$l['exp_max_clone_script'] = 'This will limit the maximum number of clone a user can create for particular script';
$l['exp_max_staging_script'] = 'This will limit the maximum number of staging a user can create for particular script';