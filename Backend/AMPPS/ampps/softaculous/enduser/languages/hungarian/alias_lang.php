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

$l['err_invalid_alias'] = 'A beírt Alis Név érvénytelen';
$l['err_invalid_alias_path'] = 'A beírt Alias útvonal érvénytelen';
$l['err_exists_alias'] = 'A megadott Alias Név már létezik';
$l['err_dir_not_created'] = 'Az Alias útvonal könyvtár nem lett létrehozva';
$l['err_invalid_alias_sp'] = 'Speciális karakterek nem megengedettek az Alias névben';
$l['err_alias_ampps'] = 'Ez az Alias név már meg lett adva';

//Theme Strings
$l['submitalias'] = 'Alias létrehozása';
$l['alias_label'] = 'Alias Név';
$l['alias_path'] = 'Útvonal';

$l['<title>'] = APP.' - Alias Manager';
$l['alias_headling'] = 'Alias Kezelő';
$l['alias_name'] = 'Alias';
$l['alias_option'] = 'Beállítások';
$l['delete'] = 'Alias törlésa sikeres volt';
$l['alias_del_conf'] = 'Biztosan törölni szeretné ezt az Aliast?';
$l['alias_path'] = 'Útvonal';
$l['connect_error'] = 'Upsz, a <strong>Szerverhez</strong> való csatlakozáskor hiba lépett fel';
$l['alias_path_notice'] = '<b>Megjegyzés:</b> Győződjön meg arról, hogy az útvonal helyes. Új könyvtár jön létre új útvonal esetén.';
$l['alias_name_notice'] = '<b>Megjegyzés:</b> A hozzáadás után hozzá tud férni a http://localhost/your_site oldalhoz.';
if($globals['os'] == 'windows'){
	$l['alias_path_eg'] = 'e.g C:/www/your_site';
}else{
	$l['alias_path_eg'] = 'e.g /usr/local/www/your_site';
}
$l['alias_name_eg'] = 'pl.: your_site';
$l['add_new_button'] = 'Új hozzáadása';
$l['back_button'] = 'Vissza az Áttekintéshez';
