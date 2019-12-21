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

$l['err_invalid_alias'] = 'De door u opgegeven opgegeven alias naam is niet geldig';
$l['err_invalid_alias_path'] = 'Het door uopgegeven alias path is niet geldig';
$l['err_exists_alias'] = 'De opgegeven alias naam bestaat reeds';
$l['err_dir_not_created'] = 'Er is een fout opgetreden bij het aanmaken van het alias path';
$l['err_invalid_alias_sp'] = 'Speciale tekens zijn niet toegestaan in de naam van een alias';
$l['err_alias_ampps'] = 'De opgegeven alias naam bestaat reeds';

//Theme Strings
$l['submitalias'] = 'Maak alias';
$l['alias_label'] = 'Alias naam';
$l['alias_path'] = 'Alias path';

$l['<title>'] = APP.' - Alias beheer';
$l['alias_headling'] = 'Alias beheer';
$l['alias_name'] = 'Alias';
$l['alias_option'] = 'Opties';
$l['delete'] = 'Alias succesvol verwijderd';
$l['alias_del_conf'] = 'Weet u zeker dat u deze alias wilt verwijderen?';
$l['alias_path'] = 'Path';
$l['connect_error'] = 'Er kan geen verbinding met de server gemaakt worden';
$l['alias_path_notice'] = '<b>Let op:</b> vul een geldig path in. Bij opgave van een niet bestaand path, zal deze worden aangemaakt.';
$l['alias_name_notice'] = '<b>Let op:</b>nadat deze is toegevoegd kunt u uw webiste bereiken op de volgende manier: http://localhost/your_site.';
if($globals['os'] == 'windows'){
	$l['alias_path_eg'] = 'bijvoorbeeld C:/www/uw-domeinnaam';
}else{
	$l['alias_path_eg'] = 'bijvoorbeeld /usr/local/www/uw-domeinnaam';
}
$l['alias_name_eg'] = 'bijvoorbeeld uw_website';
$l['add_new_button'] = 'Toevoegen';
$l['back_button'] = 'Terug naar het overzicht';
