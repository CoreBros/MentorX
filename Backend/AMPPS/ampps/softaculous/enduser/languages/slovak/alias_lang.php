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

$l['err_invalid_alias'] = 'Zadaný názov aliasu je neplatný';
$l['err_invalid_alias_path'] = 'Zadaná cesta aliasu je neplatná';
$l['err_exists_alias'] = 'Zadaný názov aliasu už existuje';
$l['err_dir_not_created'] = 'Priečinok cesty aliasu nebol vytvorený';
$l['err_invalid_alias_sp'] = 'Špeciálne znaky nie sú povolené v názve aliasu';
$l['err_alias_ampps'] = 'Názov aliasu je už obsadený';

//Theme Strings
$l['submitalias'] = 'Vytvoriť alias';
$l['alias_label'] = 'Názov aliasu';
$l['alias_path'] = 'Cesta';

$l['<title>'] = APP.' - Alias Manager';
$l['alias_headling'] = 'Správca aliasu';
$l['alias_name'] = 'Alias';
$l['alias_option'] = 'Možnosti';
$l['delete'] = 'Alias úspešne zmazaný';
$l['alias_del_conf'] = 'Ste si istý, že chcete zmazať tento alias?';
$l['alias_path'] = 'Cesta';
$l['connect_error'] = 'Oops, vyskytla sa chyba pri spájaní so <strong>serverom</strong>';
$l['alias_path_notice'] = '<b>Poznámka:</b> Ubezpečte sa, že cesta je správna. V prípade novej cesty bude vytvorený nový priečinok.';
$l['alias_name_notice'] = '<b>UPOZORNENIE:</b>Keď pridáte toto, mal by ste byť schopný dostať sa na http://localhost/vasa_stranka.';
if($globals['os'] == 'windows'){
	$l['alias_path_eg'] = 'e.g C:/www/your_site';
}else{
	$l['alias_path_eg'] = 'e.g /usr/local/www/your_site';
}
$l['alias_name_eg'] = 'napr.:  vasa_stranka';
$l['add_new_button'] = 'Pridať nový';
$l['back_button'] = 'Vrátiť sa späť';
