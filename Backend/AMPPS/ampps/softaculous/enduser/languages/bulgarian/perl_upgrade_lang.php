<?php

//////////////////////////////////////////////////////////////
//===========================================================
// upgrade_lang.php
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

$l['no_info_file'] = 'INFO.XML файла не може да бъде намерен! Моля да докладвате за това на администратора на сървъра.';
$l['incompatible'] = 'Софтуерът изисква по-висока версия на '.APP.'! Моля да докладвате за това на администратора на сървъра.';
$l['no_upgrade'] = 'UPGRADE.XML файла не може да бъде намерен! Моля да докладвате за това на администратора на сървъра.';
$l['no_functions'] = 'Файла за ъпгрейд на функциите не може да бъде намерен! Моля да докладвате за това на администратора на сървъра.';
$l['no_field'] = 'Полето <b>&soft-1;</b> е задължително и трябва да бъде попълнено.';
$l['no_package'] = 'Ъпгрейд пакета не може да бъде намерен!';
$l['no_decompress'] = 'Има грешки при декомпресиране на пакета файлове.';
$l['no_decompress_www'] = 'Има грешки при декомпресиране на уеб файлове.';
$l['no_config_perl_path'] = 'Възникна грешка при конфигурирането на CGI файлове.';
$l['checking_data'] = 'Проверка на предоставените данни';
$l['unzipping_files'] = 'Копиране на файлове и папки';
$l['unzipping_datadir'] = 'Разархивиране файлове с данни';
$l['prop_db'] = 'Актуализацията на базата данни';
$l['finishing_process'] = 'Завършване на актуализацията';
$l['wait_note'] = '<b>ВНИМАНИЕ:</b> Това може да отнеме 3-4 минути. Моля не напускайте тази страница докато прогресния бар достигне 100%';
$l['no_space'] = 'You do not have sufficient space to upgrade this installation!';
$l['invalid_insid'] = 'Invalid Installation ID';
$l['invalid_script'] = 'Invalid Script ID';
$l['not_perl_script'] = 'This script is not in PERL';
$l['no_perl_upgrade'] = 'Upgrade is not supported for this script';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['upgrade'] = 'Софтуерен ъпгрейд';
$l['softins_url'] = 'URL';
$l['softins_path'] = 'Директория';
$l['softcopy_note'] = '<b>ВНИМАНИЕ</b>: Този софтуер ще извършите надстройка, използвайки собствените си ъпгрейд полезност. За да завършите ъпгрейд, моля, посетете URL, който ще бъде показан веднъж файловете са копирани.';
$l['softsubmit'] = 'Ъпгрейд';
$l['congrats'] = 'Поздравления, софтуерът е обновен успешно';
$l['succesful'] = 'е успешно обновен';
$l['admin_url'] = 'Админ URL';
$l['setup_continue'] = 'Въпреки това, с актуализацията ще бъде завършен до самия софтуер, така че моля посетете следния URL адрес';
$l['enjoy'] = 'Надяваме се, че процеса на надграждане е лесен.';
$l['upgrade_notes'] = 'По-долу са някои важни бележки. Препоръчително е да ги прочетете ';
$l['please_note'] = '<b>ВНИМАНИЕ</b>: '.APP.' е просто автоматичен инсталатор и не предоставя никаква поддръжка за софтуера. Моля посетете уеб сайта за поддръжка на софтуера!';
$l['regards'] = 'Regards';
$l['softinstaller'] = APP.' автоматичен инсталатор';
$l['return'] = 'Назад към преглед';
$l['note_backup'] = 'Препоръчително е да направите <a href="'.$globals['index'].'act=backup&insid=&soft-1;">резервно копие</a> на инсталацията преди да направите ъпгрейд.';
$l['create_backup'] = 'Create Backup';
$l['create_backup_exp'] = 'Create a Backup before upgrading';
$l['prog_upgrading'] = 'Upgrading ';// Dont remove the trailing space
$l['prog_upgrade_complete'] = 'Upgrade Completed.';

$l['upgrade_tweet_sub'] = 'Tell your friends';
$l['not_in_free'] = '<b>&soft-1;</b> cannot be upgraded in the Free version of '.APP.'!';
$l['notify_admin'] = 'Please notify your Server Admin to purchase the premium version of '.APP.'!';

