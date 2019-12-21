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

$l['no_info_file'] = 'INFO.XML файла не може да бъде намерен! Моля докладвайте за това на администратора на сървъра.';
$l['incompatible'] = 'Софтуерът изисква по-висока версия на '.APP.'! Моля докладвайте за това на администратора на сървъра.';
$l['no_upgrade'] = 'UPGRADE.XML файла не може да бъде намерен Моля докладвайте за това на администратора на сървъра.';
$l['no_functions'] = 'Файла с ъпгрейд функциите не може да бъде намерен! Моля докладвайте за това на администратора на сървъра.';
$l['no_field'] = 'Полето <b>&soft-1;</b> е задължително и трябва да бъде попълнено.';
$l['no_package'] = 'Ъпгрейд пакет не може да бъде намерен!';
$l['no_decompress'] = 'Има грешки при декомпресиране на пакета файлове.';
$l['checking_data'] = 'Проверка на предоставените данни';
$l['unzipping_files'] = 'Копиране на файлове и папки';
$l['unzipping_datadir'] = 'Разархивиране на файлове с данни';
$l['prop_db'] = 'Актуализация на базата данни';
$l['finishing_process'] = 'Завършване на актуализацията';
$l['wait_note'] = '<b>ВНИМАНИЕ:</b> Това може да отнеме 3-4 минути. Моля не напускайте тази страница докато прогресния бар достига 100%';
$l['cver_greater'] = 'Текущата версия е по-голяма или равна на версията, която обновяване. Това е възможно, ако ръчно повиши инсталация. Ако това не е случай, моля, проверете следното отметката';
$l['force_upgrade'] = 'Принудителен ъпгрейд';
$l['backup_finish'] = 'Архивирането приключи';
$l['backup_fail_proceed'] = 'Някои грешка по време на процеса на архивиране. Преминете към ъпгрейд?';
$l['no_space'] = 'You do not have sufficient space to upgrade this installation!';
$l['invalid_insid'] = 'Invalid Installation ID';
$l['invalid_script'] = 'Invalid Script ID';
$l['no_upgrade_support'] = 'Upgrade is not supported for this script';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['upgrade'] = 'Софтуерен ъпгрейд';
$l['softins_url'] = 'URL';
$l['softins_path'] = 'Директория';
$l['softcopy_note'] = '<b>ВНИМАНИЕ</b>: Този софтуер ще извършите надстройка, използвайки собствените си ъпгрейд полезност. За да завършите ъпгрейд, моля, посетете URL, който ще бъде показан веднъж файловете са копирани.';
$l['softsubmit'] = 'Ъпгрейд';
$l['congrats'] = 'Поздравления, софтуерът е обновен успешно';
$l['succesful'] = 'е успешно обновен до';
$l['admin_url'] = 'Админ URL';
$l['setup_continue'] = 'Въпреки това, с актуализацията ще бъде завършен до самия софтуер, така че, моля, посетете следния URL адрес';
$l['enjoy'] = 'Надяваме се, че процеса на надграждане е лесен.';
$l['upgrade_notes'] = 'По-долу са някои важни бележки. Препоръчително е да ги прочетете ';
$l['please_note'] = '<b>ВНИМАНИЕ</b>: '.APP.' е просто автоматичен инсталатор и не предоставя никаква поддръжка за софтуера. Моля посетете уеб сайта за поддръжка на софтуера!';
$l['regards'] = 'Поздрави';
$l['softinstaller'] = APP.' автоматичен инсталатор';
$l['return'] = 'Назад към преглед';
$l['note_backup'] = 'Препоръчително да направите <a href="'.$globals['index'].'act=backup&insid=&soft-1;">ресервно копие</a> на инсталацията, преди да направите ъпгрейд.';
$l['alreadyupdated'] = 'Изглежда актуална версия на инсталацията е <b>&soft-1;</b> а не <b>&soft-2;</b>. <br />Кликнете тук за ъпгрейд '.APP.' на записите.';
$l['no_update_required'] = 'Тя изглежда че не трябва да актуализирате вашата инсталация, тъй като тя вече е актуализирана';
$l['auto_backup'] = 'Бихте ли искали да направите резервно копие, преди да направите ъпгрейд?';
$l['select_version'] = 'Изберете версия за надграждане до';
$l['upgrading'] = 'Ъпгрейд...';
$l['setup_partial'] = 'Още една крачка до завършване на процеса на актуализация';
$l['finish_update'] = 'Моля посетете линка по-долу, за да завършите процеса на актуализация.';
$l['finish_up_sucess'] = 'След завършване на процеса на актуализация, можете да получите достъп до и &soft-1; инсталирай тук ';
$l['upgrading_to'] = 'Вие ще ъпгрейд до: ';
$l['version'] = 'Версия ';
$l['backing_up'] = 'Backing up the installation';
$l['create_backup'] = 'Create Backup';
$l['create_backup_exp'] = 'Create a Backup before upgrading';
$l['prog_upgrading'] = 'Upgrading ';// Dont remove the trailing space
$l['prog_upgrade_complete'] = 'Upgrade Completed.';

$l['upgrade_tweet_sub'] = 'Tell your friends';

$l['not_in_free'] = '<b>&soft-1;</b> cannot be upgraded in the Free version of '.APP.'!';
$l['notify_admin'] = 'Please notify your Server Admin to purchase the premium version of '.APP.'!';

$l['backup_type'] = 'Backup Options';
$l['backup_type_exp'] = 'Choose full backup or advanced options';
$l['standard_backup'] = 'Full Backup (Default)';
$l['advanced_backup'] = 'Advanced Options';

$l['backup_dir'] = 'Backup Directory';
$l['backup_db'] = 'Backup Database';
$l['backup_wwwdir'] = 'Backup Web Directory';
$l['backup_datadir'] = 'Backup Data Directory';
$l['no_dir'] = 'The installation files are missing hence cannot proceed with the upgrade';
$l['wpc_return'] = 'Return to Installations';