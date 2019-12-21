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

$l['err_invalid_alias'] = 'Wprowadzona nazwa aliasu jest nieprawidłowa';
$l['err_invalid_alias_path'] = 'Wprowadzonej ścieżka aliasu jest nieprawidłowa';
$l['err_exists_alias'] = 'Dodana nazwa aliasu już istnieje';
$l['err_dir_not_created'] = 'Ścieżka katalogu aliasu nie została stworzona';
$l['err_invalid_alias_sp'] = 'Znaki specjalne są niedozwolone w nazwie aliasu';
$l['err_alias_ampps'] = 'Nazwa aliasu już istnieje';

//Theme Strings
$l['submitalias'] = 'Utwórz alias';
$l['alias_label'] = 'Nazwa aliasu';
$l['alias_path'] = 'Ścieżka';

$l['<title>'] = APP.' - Alias Manager';
$l['alias_headling'] = 'Menadżer aliasu';
$l['alias_name'] = 'Alias';
$l['alias_option'] = 'Opcje';
$l['delete'] = 'Alias został pomyślnie usunięty';
$l['alias_del_conf'] = 'Czy na pewno chcesz usunąć ten alias?';
$l['alias_path'] = 'Ścieżka';
$l['connect_error'] = 'Niestety wystąpił błąd podczas łączenia z <strong>serwerem</strong>';
$l['alias_path_notice'] = '<b>Uwaga:</b> Upewnij się, że ścieżka jest prawidłowa. Nowy katalog zostanie utworzony w przypadku nowej ścieżki.';
$l['alias_name_notice'] = '<b>Uwaga:</b> Po dodaniu tego, powinieneś mieć dostęp do http://localhost/twoja_strona.';
if($globals['os'] == 'windows'){
	$l['alias_path_eg'] = 'e.g C:/www/your_site';
}else{
	$l['alias_path_eg'] = 'e.g /usr/local/www/your_site';
}
$l['alias_name_eg'] = 'np.: twoja_strona';
$l['add_new_button'] = 'Dodaj Nowy';
$l['back_button'] = 'Wróć';
