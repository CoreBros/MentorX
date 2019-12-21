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

$l['err_invalid_alias'] = 'Zadaný alias je neplatný';
$l['err_invalid_alias_path'] = 'Zadána cesta aliasu je neplatná';
$l['err_exists_alias'] = 'Zadaný alias již existuje';
$l['err_dir_not_created'] = 'Cesta aliasu adresáře nebyla vytvořena';
$l['err_invalid_alias_sp'] = 'Speciální znaky nejsou ve jménu aliasu povoleny';
$l['err_alias_ampps'] = 'Tento alias je již používán';

//Theme Strings
$l['submitalias'] = 'Vytvořit alias';
$l['alias_label'] = 'Jméno aliasu';
$l['alias_path'] = 'Cesta';

$l['<title>'] = APP.' - Alias Manager';
$l['alias_headling'] = 'Správce aliasu';
$l['alias_name'] = 'Alias';
$l['alias_option'] = 'Možnosti';
$l['delete'] = 'Alias byl úspěšně smazán';
$l['alias_del_conf'] = 'Opravdu chcete smazat tento alias?';
$l['alias_path'] = 'Cesta';
$l['connect_error'] = 'Jejda, došlo k chybě při připojování k <strong>serveru</strong>';
$l['alias_path_notice'] = '<b>Poznámka:</b> Ujistěte se, že cesta je správná. V případě nové cesty bude vytvořen nový adresář.';
$l['alias_name_notice'] = '<b>Poznámka:</b>Po přidání můžete přistupovat na http://localhost/vaše_stránky.';
if($globals['os'] == 'windows'){
	$l['alias_path_eg'] = 'e.g C:/www/your_site';
}else{
	$l['alias_path_eg'] = 'e.g /usr/local/www/your_site';
}
$l['alias_name_eg'] = 'např. vaše_stránky';
$l['add_new_button'] = 'Přidat nový';
$l['back_button'] = 'Vrátit se';
