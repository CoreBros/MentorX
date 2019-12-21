<?php

//////////////////////////////////////////////////////////////
//===========================================================
// java_lang.php
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

$l['java_message'] = 'Моля инсталирайте JAVA. <a href="'.$globals['index'].'act=apps&app=37">Линк</a>';
$l['java_title'] = 'Няма инсталирана Java на вашият сървър';
$l['no_info_file'] = 'Файла INFO.XML не може да бъде намерен! Моля да докладвате за това на администратора на сървъра.';
$l['incompatible'] = 'Софтуерът изисква по-висока версия на '.APP.'! Моля да докладвате за това на администратора на сървъра.';
$l['no_install'] = 'Файла INSTALL.XML не може да бъде намерен! Моля да докладвате за това на администратора на сървъра.';
$l['no_functions'] = 'Файла с инсталационните функции не може да бъде намерен! Моля да докладвате за това на администратора на сървъра.';
$l['no_softdomain'] = 'Не сте избрали домейн, за да инсталирате софтуера.';
$l['wrong_softdomain'] = 'Пътят на домейна, който сте избрали, не може да бъде намерен.';
$l['softdirectory_exists'] = 'Директорията която сте въвели вече съществува! Моля въведете друга директория.';
$l['no_space'] = 'Вие не разполагат с достатъчно пространство, за да инсталирате този софтуер!';
$l['no_softdb'] = 'Базата от данни не е публикувана.';
$l['database_exists'] = 'Базата данни вече съществува. Моля изберете различно име.';
$l['databaseuser_exists'] = 'Потребителска база данни вече съществува. Моля, изберете различно име на база данни.';
$l['db_name_long'] = 'Името на базата данни не може да бъде по-голяма от 7 букви. Моля изберете по-кратко име на базата данни.';
$l['db_limit_crossed'] = 'Максималният брой бази данни, които можете да създадете е бил достигнат, така че инсталацията не може да продължи.';
$l['no_field'] = 'Полето <b>&soft-1;</b> е задължително и трябва да го попълните.';
$l['error_adddb'] = 'Базата данни не може да бъде създадена';
$l['error_adduser'] = 'Имаше грешка в добавянето на потребител към новата база данни';
$l['no_package'] = 'Инсталационния пакет не може да бъде намерен!';
$l['no_decompress'] = 'Имаше някои грешки при декомпресиране на пакета файлове.';
$l['mail_new_ins'] = 'Нова инсталация на &soft-1; е завършена. Детайли на инсталацията са показани по-долу:';
$l['mail_path'] = 'Директория';
$l['mail_url'] = 'URL';
$l['mail_admin_url'] = 'Админ URL';
$l['mail_admin'] = 'Потребителско име за админ';
$l['mail_pass'] = 'Парола за админ';
$l['mail_db'] = 'MySQL база данни';
$l['mail_dbuser'] = 'MySQL база данни потребител';
$l['mail_dbhost'] = 'MySQL база данни хост';
$l['mail_dbpass'] = 'MySQL база данни парола';
$l['mail_time'] = 'Време на инсталацията';
$l['mail_subject'] = 'Нова инсталация на &soft-1;';
$l['no_cron_min'] = 'Не са посочени Cron минути';
$l['no_cron_hour'] = 'Не са посочени Cron часове';
$l['no_cron_day'] = 'Не са посочени Cron дни';
$l['no_cron_month'] = 'Не са посочени Cron месеци';
$l['no_cron_weekday'] = 'Не са посочени Cron делнични дни';
$l['wrong_cron_min'] = 'Cron минутите са грешни. Валидни стойности са 0-59 или <b>*</b>';
$l['wrong_cron_hour'] = 'Cron часовете са грешни. Валидни стойности са 0-23 или <b>*</b>';
$l['wrong_cron_day'] = 'Cron дните са грешни. Валидни стойности са 1-31 или <b>*</b>';
$l['wrong_cron_month'] = 'Cron месеците са грешни. Валидни стойности са 1-12 или <b>*</b>';
$l['wrong_cron_weekday'] = 'Cron делничните дни са грешни. Валидни стойности са 0-7 или <b>*</b>';
$l['mail_cron'] = 'Cron Job';
$l['no_datadir'] = 'Не е посочена директория за данни';
$l['datadir_exists'] = 'Директория с данни която сте посочили съществува. Моля посочете друга.';
$l['no_decompress_data'] = 'Има някои грешки в декомпресиране на файлове с данни.';
$l['mail_datadir'] = 'Директория с данни';
$l['some_files_exist'] = 'Инсталацията не може да се процедира поради следните файлове, които вече съществуват в целевата папка: ';
$l['delete_files'] = 'Моля изтрийте тези файлове, или изберете друга папка.';
$l['overwrite_exist'] = '<b>ИЛИ</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">Поставете отметка в квадратчето, за да презапишете всички файлове и ще продължи </span></b>';
$l['checking_data'] = 'Проверка на предоставените данни';
$l['unzipping_files'] = 'Копиране на файлове и папки';
$l['unzipping_datadir'] = 'Разархивиране на файлове с данни';
$l['prop_db'] = 'Посадъчен базата данни';
$l['finishing_process'] = 'Завършване на инсталацията';
$l['wait_note'] = '<b>ВНИМАНИЕ:</b> Това може да отнеме 3-4 минути. Моля не напускайте тази страница додокато прогресния бар достига 100%';
$l['no_hostname'] = 'Моля въведете вашата база данни хост';
$l['no_dbusername'] = 'Моля въведете вашата база данни потребител';
$l['no_dbuserpass'] = 'Моля въведете вашата база данни парола';
$l['softdirectory_invalid'] = 'Директорията която сте въвели е невалидна.';
$l['softdatadir_invalid'] = 'Директорията за данни която сте въвели е невалидна.';
$l['no_dir'] = 'Моля дайте име на директория.';
$l['err_pass_strength'] = 'Password strength must be greater than ';
$l['no_https'] = 'A trusted SSL Certificate was not found';
$l['err_dbprefix'] = 'Table Prefix is invalid. Valid values are a-z or A-Z or 0-9 or _';
$l['no_mysql_install'] = 'MySQL is not installed. To install it, please click <a href="'.$globals['index'].'act=apps&app=16">here</a>';
$l['auto_backup_not_allowed'] = 'The auto backup frequency you chose is invalid';
$l['invalid_script'] = 'Invalid Script ID';
$l['not_java_script'] = 'This script is not in Java';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['install'] = 'Инсталирай';
$l['overview'] = 'Преглед';
$l['features'] = 'Характеристики';
$l['demo'] = 'Демо';
$l['ratings'] = 'Оценки';
$l['import'] = 'Внасяне';
$l['software_ver'] = 'Версия';
$l['space_req'] = 'Необходимото пространство';
$l['available_space'] = 'Наличното пространство';
$l['req_space'] = 'Задължително пространство';
$l['mb'] = 'MB';
$l['software_support'] = 'Софтуерна поддръжка';
$l['support_link'] = 'Посети сайта за поддръжка';
$l['support_note'] = 'ВНИМАНИЕ: Softaculous не осигурява поддръжка за какъвто и да е софтуер.';
$l['setup'] = 'Софтуерна настройка';
$l['choose_domain'] = 'Избери домейн';
$l['choose_domain_exp'] = 'Моля изберете домейна, за да инсталирате софтуера.';
$l['in_directory'] = 'В директория';
$l['in_directory_exp'] = 'Директория е по отношение на вашия домейн и <b>не трябва да съществува</b>. Например за да инсталирате на адрес http://mydomain/dir/ напишете <b>dir</b>.';
$l['database_name'] = 'База данни име';
$l['database_name_exp'] = 'Въведете името на базата данни за да се създаде за инсталацията';
$l['softcopy_note'] = '<b>ВНИМАНИЕ</b>: Този софтуер изисква той да бъде инсталирана, използвайки собствените си средство за инсталиране. Моля посетете URL, който ще бъде показан веднъж файловете са копирани, за да завършите процеса на инсталация.';
$l['softsubmit'] = 'Инсталация';
$l['congrats'] = 'Поздравления, софтуерът е инсталиран успешно';
$l['succesful'] = 'е инсталиран успешно в';
$l['admin_url'] = 'Административен URL';
$l['setup_continue'] = 'Въпреки това, настройката ще бъде завършен от самия софтуер. За да завършите настройката, моля посетете следния URL адрес';
$l['enjoy'] = 'Надяваме се, че процеса на инсталиране е лесен.';
$l['install_notes'] = 'По-долу са някои важни бележки. Препоръчително е да ги прочетете ';
$l['please_note'] = '<b>ВНИМАНИЕ</b>: '.APP.' е просто автоматичен инсталатор на софтуер и не предоставя никаква подкрепа за отделните софтуерни пакети. Моля, посетете уеб сайта за поддръжка на софтуера!';
$l['regards'] = 'Поздрави';
$l['softinstaller'] = APP.' автоматичен инсталатор';
$l['return'] = 'Назад към преглед';
$l['current_ins'] = 'Инсталации';
$l['link'] = 'Линк';
$l['ins_time'] = 'Време на инсталацията';
$l['version'] = 'Версич';
$l['upd_to'] = 'Ъпгрейд до версия';
$l['remove'] = 'Изтрий';
$l['no_info'] = 'Няма информация';
$l['randpass'] = 'Генериране на произволна парола';
$l['ratesoft'] = 'Оцени този скрипт';
$l['reviews'] = 'Отзиви';
$l['reviewsoft'] = 'Добави мнение';
$l['readreviews'] = 'Прочети мнения';
$l['reviews_exp'] = 'Прочети мнения написани от други потребители';
$l['cron_job'] = 'CRON Job';
$l['cron_job_exp'] = 'Този скрипт изисква CRON за да работи. Моля посочете Cron времена. Ако сте не сте наясно с това, оставете го така!';
$l['cron_min'] = 'Минута';
$l['cron_hour'] = 'Час';
$l['cron_day'] = 'Ден';
$l['cron_month'] = 'Месец';
$l['cron_weekday'] = 'Делничен ден';
$l['datadir'] = 'Директория с данни';
$l['datadir_exp'] = 'Този скрипт изисква да съхранява данните си в папка не е достъпна чрез интернет. Тя ще бъде създадена в home директорията т.е. ако сте задали <b>datadir</b> по-долу ще бъдат създадени - /home/username/<b>datadir</b>';
$l['db_alpha_num'] = 'Само алфа-цифрови символа са позволени за името на базата данни.';
$l['overwrite'] = 'Презапиши файлове';
$l['ins_emailto'] = 'Имейл инсталация детайли до';
$l['choose_protocol'] = 'Изберете протокол';
$l['choose_protocol_exp'] = 'Ако вашият сайт има SSL, моля изберете протокол HTTPS.';
$l['clone'] = 'Clone';
$l['backup'] = 'Резервно копие';
$l['options'] = 'Опции';
$l['admin'] = 'Админ';
$l['notify_ver'] = 'Уведоми '.$globals['sn'].' за нова версия';
$l['notifyversion'] = 'Благодаря ви за информирането за новата версия. Ние ще го разгледаме възможно най-скоро';
$l['del_insid'] = 'Сигурен ли сте, че искате да премахнете избраните инсталации? Действието ще бъдат необратими.';
$l['rem_inst_id'] = 'Изтриване на инсталация - ';
$l['no_sel_inst'] = 'Няма избрани инсталации за изтриване.';
$l['inst_remvd'] = 'Избраните инсталации са изтрити. Страницата ще се презареди!';
$l['remove'] = 'Изтрий';
$l['go'] = 'Отиди';
$l['screenshots'] = 'Снимки';
$l['downloading'] = 'Изтегляне на пакет';
$l['installing'] = 'Инсталиране на скрипт';
$l['editdetail'] = 'Редактиране на детайли';
$l['publish'] = 'Публикуване в интернет';
$l['hostname'] = 'База данни хост';
$l['hostname_exp'] = 'MySQL хост (главно <b>localhost</b>)';
$l['dbusername'] = 'База данни потребител';
$l['dbusername_exp'] = 'MySQL потребител';
$l['dbuserpass'] = 'База данни парола';
$l['dbuserpass_exp'] = 'Парола за MySQL потребител';
$l['database_name_exp_aefer'] = 'Въведете името на базата данни, която ще бъде използвана за инсталирането';
$l['sel_version'] = 'Избери версия';
$l['choose_version_exp'] = 'Моля изберете версия за инсталация.';
$l['choose_version'] = 'Изберете версията която искате да инсталирате';
$l['select'] = 'Избери';
$l['release_date'] = 'Release Date';
$l['adv_option'] = 'Advanced Options';
$l['disable_notify_update'] = 'Disable Update Notifications Emails';
$l['exp_disable_notify_update'] = 'If checked you will not receive an email notification for updates available for this installation.';
$l['prog_installing'] = 'Installing '; // Dont remove trailing space
$l['prog_install_complete'] = 'Installation Completed.';
$l['bad'] = 'Bad';
$l['good'] = 'Good';
$l['strong'] = 'Strong';
$l['short'] = 'Short';
$l['strength_indicator'] = 'Strength Indicator';
$l['auto_backup'] = 'Automated backups';
$l['exp_auto_backup'] = APP.' will take automated backups via CRON as per the frequency you select';
$l['auto_backup_rotation'] = 'Backup Rotation';
$l['exp_auto_backup_rotation'] = 'If the backup rotation limit is reached '.APP.' will delete the oldest backup for this installation and create a new backup. The backups will utilize your space so choose the backup rotation as per the space available on your server';
$l['no_backup'] = 'Don\'t backup';
$l['daily'] = 'Once a day';
$l['weekly'] = 'Once a week';
$l['monthly'] = 'Once a month';
$l['unlimited'] = 'Unlimited';
$l['changelog'] = 'Changelog';
$l['act_upgrade'] = 'Recently Upgraded';
$l['act_clone'] = 'Recently Cloned';
$l['act_backup'] = 'Recently Backed up';
$l['act_install'] = 'Recently Installed';
$l['act_edit'] = 'Recently Edited';
$l['act_import'] = 'Recently Imported';
$l['act_restore'] = 'Recently Restored';

$l['install_tweet_sub'] = 'Tell your friends about your new site';
$l['err_auto_backup_limit'] = 'The auto backup rotation cannot be more than <b>&soft-1;</b>';
$l['select_domain'] = 'Select Domain';
$l['with_selected'] = 'With Selected';
$l['not_in_free'] = '<b>&soft-1;</b> cannot be installed in the Free version of '.APP.'!';
$l['notify_admin'] = 'Please notify your Server Admin to purchase the premium version of '.APP.'!';
$l['related_scripts'] = 'Related Scripts';
$l['install_now'] = 'Инсталирай сега';
$l['my_apps'] = 'Моите приложения';

$l['soft_ins_exists'] = 'An installation already exists at &soft-1; as per our records. To re-install the application please uninstall the existing installation!';
$l['no_java_support'] = 'Java script installation is not supported on this panel';

$l['choose_url'] = 'Choose Installation URL';
$l['choose_url_exp'] = 'Please choose the URL to install the software';

$l['error_max_ins_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Installations allowed per script';