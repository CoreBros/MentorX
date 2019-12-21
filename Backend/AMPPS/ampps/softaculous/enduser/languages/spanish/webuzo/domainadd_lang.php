<?php

//////////////////////////////////////////////////////////////
//===========================================================
// domainadd_lang.php
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

$l['err_invalid_domain'] = 'El dominio ingresado no es válido';
$l['err_exits_domain'] = 'El dominio ya existe';
$l['not_selected'] = 'No ha seleccionado el dominio';
$l['already_exists'] = 'El directorio ya existe';
$l['park_instead_addon'] = 'Un dominio que apunta a una ruta ya existe. Por lo tanto por favor agregue este dominio como un dominio aparcado.';
$l['domain_not_exists'] = 'El dominio seleccionado no existe';
$l['domain_path_not_found'] = 'Invalid Path specified for Domain.';
$l['domain_exists'] = 'The domain already exists';
$l['invalid_ip'] = 'Invalid IP Address specified for Domain.';

//Theme Strings
$l['<title>'] = 'Añadir nuevo Dominio';
$l['submitdomain'] = 'Añadir Dominio';
$l['domain_label'] = 'Dominio';
$l['is_addon_part'] = 'Es un dominio estacionado?';
$l['domain_path'] = 'Ruta de Dominio   ';
$l['domain_add_label'] = 'Añadir nuevo Dominio';
$l['domain_not_found'] = 'Domain name not found';
$l['suc_dom_added'] = 'Añadir un Dominio';
$l['lbl_db_manage'] = 'Volver a Administrar Dominio';
$l['select_domain'] = 'Seleccionar Dominio';
$l['exp_checkaddon'] = 'Verifique que su Dominio es Addon y desmarque Dominio Estacionado';
$l['domain_not_added'] = 'Oops!!! There were some errors while adding the domain';
$l['ip_label'] = 'IP Address (Optional) ';
$l['exp_ip'] = 'Different IP Address for domain';
$l['validate_mails_label'] = 'Mail Validation records (Optional)';
$l['exp_validate_mails'] = 'Tick to add SPF, DKIM and DMARC records in the DNS';
$l['only_subdomain'] = 'You have permission to create sub domains only';
$l['issue_lecert_label'] = 'Issue Let\'s Encrypt certificate';
$l['exp_issue_lecert'] = 'Tick to issue SSL certificate from LE for the new domain';
$l['suc_dom_added'] = 'Domain added successfully.<br/>Return to <a href="'.$globals['index'].'act=domainmanage">Manage Domain</a>';