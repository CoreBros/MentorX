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

$l['err_invalid_alias'] = 'Въведеният Alias е невалидно';
$l['err_invalid_alias_path'] = 'Въведената Alias директория е невалидна';
$l['err_exists_alias'] = 'Изпратеното Alias име вече съшествува';
$l['err_dir_not_created'] = 'Alias директорията не е създадена';
$l['err_invalid_alias_sp'] = 'Специални знаци не са разрешени в Alias имена';
$l['err_alias_ampps'] = 'Този Alias е вече заето';

//Theme Strings
$l['submitalias'] = 'Създаване на Alias';
$l['alias_label'] = 'Alias име';
$l['alias_path'] = 'Alias директория';

$l['<title>'] = APP.' - Alias мениджър';
$l['alias_headling'] = 'Alias мениджър';
$l['alias_name'] = 'Alias';
$l['alias_option'] = 'Опции';
$l['delete'] = 'Alias е изтрито успешно';
$l['alias_del_conf'] = 'Сигурни ли сте че искате да изтриете този Alias?';
$l['alias_path'] = 'Директиря';
$l['connect_error'] = 'Имаше грешка при свързване към <strong>Сървъра</strong>';
$l['alias_path_notice'] = '<b>Внимание:</b> Уверете се че пътят е правилен. Нова директория ще бъдат създадени в случай на нова директория.';
$l['alias_name_notice'] = '<b>Внимание:</b> След добавянето на това, вие трябва да имат достъп до http://localhost/your_site.';
if($globals['os'] == 'windows'){
	$l['alias_path_eg'] = 'пример C:/www/your_site';
}else{
	$l['alias_path_eg'] = 'пример /usr/local/www/your_site';
}
$l['alias_name_eg'] = 'пример your_site';
$l['add_new_button'] = 'Добавяне на нов';
$l['back_button'] = 'Върни се назад';
