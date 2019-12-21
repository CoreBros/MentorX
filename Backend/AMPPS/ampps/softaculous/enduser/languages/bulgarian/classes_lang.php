<?php

//////////////////////////////////////////////////////////////
//===========================================================
// js_lang.php
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

$l['no_info_file'] = 'Няма клас за определен ID';
$l['incompatible'] = 'Софтуерът изисква по-висока версия на '.APP.'! Моля да докладвате за това на администратора на сървъра.';
$l['no_install'] = 'Файла INSTALL.XML не може да бъде намерен! Моля да докладвате за това на администратора на сървъра.';
$l['no_functions'] = 'Инсталационния файл с функции не може да бъде намерен! Моля да докладвате за това на администратора на сървъра.';
$l['no_softdomain'] = 'Не сте избрали домейна, за да инсталирате софтуера.';
$l['wrong_softdomain'] = 'Пътят на домейна, който сте избрали, не може да бъде намерен.';
$l['no_space'] = 'Вие не разполагат с достатъчно пространство, за да инсталирате този софтуер!';
$l['no_field'] = 'Полето <b>&soft-1;</b> е задължително и трябва да бъде попълнено.';
$l['no_package'] = 'Инсталационния пакет не може да бъде намерен!';
$l['no_decompress'] = 'Имаше грешки при декомпресиране на пакета файлове.';
$l['mail_new_ins'] = 'Нова инсталация на &soft-1; е завършена. Детайли на инсталацията са показани по-долу:';
$l['mail_path'] = 'Директория';
$l['mail_url'] = 'URL';
$l['mail_time'] = 'Време на инсталирането';
$l['mail_subject'] = 'Нова инсталация на &soft-1;';
$l['some_files_exist'] = 'Инсталацията не може да се процедира поради следните файлове, които вече съществуват в целевата папка: ';
$l['delete_files'] = 'Моля изтрийте тези файлове или изберете друга папка.';
$l['checking_data'] = 'Проверка на предоставените данни';
$l['unzipping_files'] = 'Копиране на файлове и папки';
$l['unzipping_datadir'] = 'Разархивирате файлове с данни';
$l['prop_db'] = 'Посадъчен базата данни';
$l['finishing_process'] = 'Завършване на инсталацията';
$l['wait_note'] = '<b>ВНИМАНИЕ:</b> Това може да отнеме 3-4 минути. Моля не напускайте тази страница докато прогресния бар достигне 100%';
$l['cant_download'] = 'Не може да се изтегли ZIP файла.';
$l['softdirectory_invalid'] = 'Директорията която сте въвели е невалидна.';
$l['softdirectory_exists'] = 'Директорията вече съществува! Моля въведете име на друга директория.';
$l['ins_emailto'] = 'Имейл за информация за инсталиране на';
$l['disable_classes'] = 'PHP Classes are disabled by admin or you are using '.APP.' Free version';
$l['invalid_class_id'] = 'Invalid Class ID';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['install'] = 'Инсталация';
$l['overview'] = 'Прочети ме';
$l['features'] = 'Характеристики';
$l['demo'] = 'Демо';
$l['file'] = 'Файлове';
$l['ratings'] = 'Оценки';
$l['import'] = 'Внасяне';
$l['software_ver'] = 'Версия';
$l['space_req'] = 'Необходимото пространство';
$l['available_space'] = 'Наличното пространство';
$l['req_space'] = 'Задължително пространство';
$l['mb'] = 'MB';
$l['software_support'] = 'Софтуерна поддръжка';
$l['support_link'] = 'Посетете сайта за поддръжка';
$l['support_note'] = 'Забележка: Softaculous не осигурява поддръжка за какъвто и да е софтуер.';
$l['setup'] = 'Софтуер настройки';
$l['choose_domain'] = 'Избери домейн';
$l['choose_domain_exp'] = 'Моля изберете домейна, за да инсталирате софтуера.';
$l['in_directory'] = 'В директория';
$l['in_directory_exp'] = 'Директория е сходна до вашата home директория и ще бъде <b>създадена ако не тя не съшествува</b>. Например: За да инсталирате &soft-1;/dir напишете <b>dir</b>. За да инсталирате само в &soft-1;/ оставете това празно.';
$l['aef_in_directory_exp'] = 'Директория е сходна до вашата home директория и ще бъде <b>създадена ако не тя не съшествува</b>. Например: За да инсталирате <span id="aef_span_lang">&soft-1;</span>/dir напишете <b>dir</b>. За да инсталирате само в <span id="aef_span_lang_a">&soft-1;</span>/ оставете празно място.';
$l['softsubmit'] = 'Инсталация';
$l['congrats'] = 'Поздравления, софтуерът е инсталиран успешно';
$l['succesful'] = 'е инсталиран успешно в';
$l['enjoy'] = 'Надяваме се, че процеса на инсталиране беше лесен.';
$l['install_notes'] = 'По-долу са някои важни бележки. Препоръчително е да ги прочетете ';
$l['please_note'] = '<b>ВНИМАНИЕ</b>: '.APP.' е просто автоматичен инсталатор на софтуер и не предоставя никаква подкрепа за отделните софтуерни пакети. Моля, посетете уеб сайта за поддръжка на софтуера!';
$l['regards'] = 'Поздрави';
$l['softinstaller'] = APP.' автоматичен инсталатор';
$l['return'] = 'Назад към преглед';
$l['current_ins'] = 'Инсталации';
$l['link'] = 'Линк';
$l['ins_time'] = 'Време на инсталацията';
$l['version'] = 'Версия';
$l['upd_to'] = 'Ъпгрейд до версия';
$l['remove'] = 'Изтрий';
$l['no_info'] = 'Няма информация';
$l['ratesoft'] = 'Оцени този скрипт';
$l['reviews'] = 'Отзиви';
$l['reviewsoft'] = 'Добави мнение';
$l['readreviews'] = 'Прочети мнения';
$l['reviews_exp'] = 'Прочети мнения написани от други потребители';
$l['ins_type'] = 'Вид на инсталация';
$l['ins_type_exp'] = '<b>Оригинален пакет</b> - Пакет на разположение от уеб сайта за скриптове. <br /> <b>Само библиотечни файлове</b> - Само Javascript библиотечни файлове.';
$l['ori_pack'] = 'Оригинален пакет';
$l['just_lib'] = 'Само библиотечни файлове';
$l['overwrite_exist'] = '<b>ИЛИ</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">Поставете отметка в квадратчето, за да презапишете всички файлове и ще продължи</span></b>';
$l['overwrite'] = 'Презапишете файловете';
$l['choose_protocol'] = 'Избери протокол';
$l['choose_protocol_exp'] = 'Ако вашият сайт има SSL, моля изберете протокол HTTPS.';
$l['downloading'] = 'Изтегляне на пакет';
$l['installing'] = 'Инсталирай скрипт';
$l['files'] = 'Файлове и папки';
$l['modified_time'] = 'Последна промяна на';
$l['size'] = 'Размер';
$l['classes_ins_error'] = 'Възникна грешка при запазването на инсталацията.';
$l['del_insid'] = 'Сигурен ли сте, че искате да премахнете избраните инсталации? Действието ще бъдат необратимо.';
$l['rem_inst_id'] = 'Изтрий инсталация - ';
$l['no_sel_inst'] = 'Няма избрани инсталации за изтриване.';
$l['inst_remvd'] = 'Избраните инсталации са били изтрити. Страницата ще се презареди!';
$l['go'] = 'Отиди';
$l['download_zip'] = 'Свали всички файлове ';
$l['software_category'] = 'Категория';
$l['adv_option'] = 'Advanced Options';
$l['disable_notify_update'] = 'Disable Update Notifications Emails';
$l['exp_disable_notify_update'] = 'If checked you will not receive an email notification for updates available for this installation.';
$l['prog_installing'] = 'Installing ';// Dont remove the trailing space
$l['prog_install_complete'] = 'Installation Completed.';

$l['install_tweet_sub'] = 'Tell your friends';
$l['select_domain'] = 'Select Domain';
$l['with_selected'] = 'With Selected';
$l['download'] = 'Download';

