<?php

//////////////////////////////////////////////////////////////
//===========================================================
// software_lang.php
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
$l['incompatible'] = 'The software requires a higher version of '.APP.'! Моля да докладвате за това на администратора на сървъра.';
$l['no_install'] = 'The INSTALL.XML file could not be found! Моля да докладвате за това на администратора на сървъра.';
$l['no_functions'] = 'Файла с функции за инсталация не може да бъде намерен! Моля да докладвате за това на администратора на сървъра.';
$l['no_remove_functions'] = 'The REMOVE FUNCTIONS file could not be found! Please report this to the server administrator.';
$l['no_softdomain'] = 'Не сте избрали домейн, за да инсталирате софтуера.';
$l['wrong_softdomain'] = 'Пътят на домейна, който сте избрали, не може да бъде намерен.';
$l['softdirectory_exists'] = 'Директорията която сте въвели вече съществува! Моля въведете име на друга директория.';
$l['no_space'] = 'Вие не разполагат с достатъчно пространство, за да инсталирате този софтуер!';
$l['no_softdb'] = 'Базата от данни не беше публикувана.';
$l['database_exists'] = 'Базата данни вече съществува. Моля изберете друго име.';
$l['databaseuser_exists'] = 'Потребителска база данни вече съществува. Моля изберете различно име на база данни.';
$l['db_name_long'] = 'Името на базата данни не може да бъде по-голямо от 7 букви. Моля изберете по-кратко име на базата данни.';
$l['db_limit_crossed'] = 'Максималният брой бази данни, които можете да създадете е бил достигнат, така че инсталацията не може да продължи.';
$l['no_field'] = 'Полето <b>&soft-1;</b> е задължително и трябва да бъде попълнено.';
$l['error_adddb'] = 'Базата данни не може да бъде създадена';
$l['error_adduser'] = 'Има грешка в добавянето на потребител към новата база данни';
$l['no_package'] = 'Инсталационния пакет не може да бъде намерен!';
$l['no_decompress'] = 'Има грешки при декомпресиране на пакета файлове.';
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
$l['mail_time'] = 'Време на инсталация';
$l['mail_subject'] = 'Нова инсталация на &soft-1;';
$l['no_cron_min'] = 'Не са посочени Cron минути';
$l['no_cron_hour'] = 'Не са посочени Cron часове';
$l['no_cron_day'] = 'Не са посочени Cron дни';
$l['no_cron_month'] = 'Не са посочени Cron месеци';
$l['no_cron_weekday'] = 'Не са посочени Cron делнични дни';
$l['wrong_cron_min'] = 'Cron минутите са грешни. Валидни стойности са 0-59 или <b>*</b>';
$l['wrong_cron_hour'] = 'Cron часовете са грешни. Валидни стойности са 0-23 или <b>*</b>';
$l['wrong_cron_day'] = 'Cron дните са грешни. Валидни стойности са  1-31 или <b>*</b>';
$l['wrong_cron_month'] = 'Cron месеците са грешни. Валидни стойности са 1-12 или <b>*</b>';
$l['wrong_cron_weekday'] = 'Cron делничните дни са грешни. Валидни стойности са 0-7 или <b>*</b>';
$l['mail_cron'] = 'Cron Job';
$l['no_datadir'] = 'Не е посочена директория с данни';
$l['datadir_exists'] = 'Директория с данни, които сте посочили съществува. Моля, посочете друга.';
$l['no_decompress_data'] = 'Има грешки в декомпресиране на файлове с данни.';
$l['mail_datadir'] = 'Директория с данни';
$l['some_files_exist'] = 'Инсталацията не може да се процедира поради следните файлове, които вече съществуват в целевата папка: ';
$l['delete_files'] = 'Моля изтрийте тези файлове, или изберете друга папка.';
$l['overwrite_exist'] = '<b>ИЛИ</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">Поставете отметка в квадратчето, за да презапишете всички файлове и ще продължите</span></b>';
$l['checking_data'] = 'Проверка на предоставените данни';
$l['unzipping_files'] = 'Копиране на файлове и папки';
$l['unzipping_datadir'] = 'Разархивирате файлове с данни';
$l['prop_db'] = 'Посадъчен базата данни';
$l['finishing_process'] = 'Завършване на инсталация';
$l['wait_note'] = '<b>ВНИМАНИЕ:</b> Това може да отнеме 3-4 минути. Моля не напускайте тази страница докато прогресния бар достигне 100%';
$l['no_hostname'] = 'Моля въведете вашата база данни хост';
$l['no_dbusername'] = 'Моля въведете вашата база данни потребител';
$l['no_dbuserpass'] = 'Моля въведете вашата база данни парола';
$l['softdirectory_invalid'] = 'Директорията която сте въвели е невалидна.';
$l['softdatadir_invalid'] = 'Директорията с данни която сте въвели е невалидна.';
$l['err_domain'] = 'No Domain';
$l['err_domain_admin'] = 'This User does not have any Domain. Please contact Administrator.';
$l['err_pass_strength'] = 'Password strength must be greater than ';
$l['no_https'] = 'A trusted SSL Certificate was not found';
$l['err_dbprefix'] = 'Table Prefix is invalid. Valid values are a-z or A-Z or 0-9 or _';
$l['no_php_install'] = 'PHP is not installed. To install it, please click <a href="'.$globals['index'].'act=apps&app=1">here</a>';
$l['no_mysql_install'] = 'MySQL is not installed. To install it, please click <a href="'.$globals['index'].'act=apps&app=16">here</a>';
$l['no_domain_verify'] = 'Could not access your domain. Please make sure your domain is pointing to this server and there is no .htaccess file restricing access to your domain';
$l['auto_backup_not_allowed'] = 'The auto backup frequency you chose is invalid';
$l['invalid_script'] = 'Invalid Script ID';
$l['no_domain_found'] = 'No domain found. Please add a domain to install the script';
$l['not_php_script'] = 'This script is not in PHP';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['install'] = 'Инсталация';
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
$l['support_link'] = 'Посетете сайта за поддръжка';
$l['support_note'] = 'ВНИМАНИЕ: Softaculous не осигурява поддръжка за какъвто и да е софтуер.';
$l['setup'] = 'Настройки за софтуер';
$l['choose_domain'] = 'Избери домейн';
$l['choose_domain_exp'] = 'Моля изберете домейна, за да инсталирате софтуера.';
$l['choose_url'] = 'Choose Installation URL';
$l['choose_url_exp'] = 'Please choose the URL to install the software';
$l['in_directory'] = 'В директория';
$l['in_directory_exp'] = 'Директория е по отношение на вашия домейн и <b>не трябва да съществува</b>. Например за да инсталирате на адрес http://mydomain/dir/ напишете <b>dir</b>. За да инсталирате на адрес http://mydomain/ оставете празно.';
$l['database_name'] = 'База данни име';
$l['database_name_exp'] = 'Въведете името на базата данни, да се създаде за инсталацията';
$l['softcopy_note'] = '<b>ВНИМАНИЕ</b>: Този софтуер изисква той да бъде инсталирана, използвайки собствените си средства за инсталиране. Моля посетете URL, който ще бъде показан, след като файловете са копирани за да завършите процеса на инсталация.';
$l['softsubmit'] = 'Инсталация';
$l['congrats'] = 'Поздравления, софтуерът е инсталиран успешно';
$l['succesful'] = 'е инсталиран успешно в';
$l['admin_url'] = 'Админ URL';
$l['setup_continue'] = 'Въпреки това, настройката ще бъде завършен от самия софтуер. За да завършите настройката, моля посетете следния URL адрес';
$l['enjoy'] = 'Надяваме се, че процеса на инсталиране е лесен.';
$l['install_notes'] = 'По-долу са някои важни бележки. Препоръчително е да ги прочетете ';
$l['please_note'] = '<b>ВНИМАНИЕ</b>: '.APP.' е просто автоматичен инсталатор на софтуер и не предоставя никаква подкрепа за отделните софтуерни пакети. Моля посетете уеб сайта за поддръжка на софтуера!';
$l['regards'] = 'Поздрави';
$l['softinstaller'] = APP.' автоматичен инсталатор';
$l['return'] = 'Назад към преглед';
$l['current_ins'] = 'Инсталации';
$l['link'] = 'Линк';
$l['ins_time'] = 'Време на инсталация';
$l['version'] = 'Версия';
$l['upd_to'] = 'Ъпгрейд до версия';
$l['remove'] = 'Изтрий';
$l['no_info'] = 'Няма информация';
$l['randpass'] = 'Генериране на случайна парола';
$l['ratesoft'] = 'Оцени този скрипт';
$l['reviews'] = 'Отзиви';
$l['reviewsoft'] = 'Добави мнение';
$l['readreviews'] = 'Прочети мнения';
$l['reviews_exp'] = 'Прочети мнения написани от други потребители';
$l['cron_job'] = 'CRON Job';
$l['cron_job_exp'] = 'Този скрипт изисква CRON за да работи. Моля посочете Cron времена. Ако не сте наясно с това, оставете го така като е!';
$l['cron_min'] = 'Минута';
$l['cron_hour'] = 'Час';
$l['cron_day'] = 'Ден';
$l['cron_month'] = 'Месец';
$l['cron_weekday'] = 'Делничен ден';
$l['datadir'] = 'Директория с данни';
$l['datadir_exp'] = 'Този скрипт изисква да съхранява данните си в папка не е достъпна чрез интернет. Тя ще бъде създадена в дома си папка. Например ако посочите <b>datadir</b> ще бъде създаден - /home/username/<b>datadir</b>';
$l['db_alpha_num'] = 'Само алфа-цифрови символа са позволени за името на базата данни.';
$l['overwrite'] = 'Презаписване на файлове';
$l['ins_emailto'] = 'Email информация за инсталиране на';
$l['choose_protocol'] = 'Избери протокол';
$l['choose_protocol_exp'] = 'Ако вашият сайт има SSL, моля изберете HTTPS протокол.';
$l['clone'] = 'Clone';
$l['backup'] = 'Резервно копие';
$l['options'] = 'Опции';
$l['admin'] = 'Админ';
$l['notify_ver'] = 'Уведоми '.$globals['sn'].' за нови версии';
$l['notifyversion'] = 'Благодаря ви за информиране за новата версия. Ние ще го разгледаме възможно най-скоро';
$l['del_insid'] = 'Сигурен ли сте, че искате да премахнете избраните инсталации? Действието ще бъдат необратими.';
$l['rem_inst_id'] = 'Изтриване на инсталация - ';
$l['no_sel_inst'] = 'Няма избрани инсталации за изтриване.';
$l['inst_remvd'] = 'Избраната инсталация е изтрита. Страницата ще се презареди!';
$l['remove'] = 'Изтрий';
$l['go'] = 'Отиди';
$l['screenshots'] = 'Снимки';
$l['downloading'] = 'Изтегляне на пакет';
$l['installing'] = 'Инсталация на скрипт';
$l['editdetail'] = 'Редактиране на дейтали';
$l['publish'] = 'Публикуване в интернет';
$l['hostname'] = 'База данни хост';
$l['hostname_exp'] = 'MySQL хост (mainly <b>localhost</b>)';
$l['dbusername'] = 'База данни потребител';
$l['dbusername_exp'] = 'MySQL потребител';
$l['dbuserpass'] = 'База данни парола';
$l['dbuserpass_exp'] = 'Парола за MySQL потребителя';
$l['database_name_exp_aefer'] = 'Въведете името на базата данни, които да бъдат използвани за инсталирането';
$l['sel_version'] = 'Избери версия';
$l['choose_version_exp'] = 'Моля изберете версията за инсталиране.';
$l['choose_version'] = 'Изберете версията, която искате да инсталирате';
$l['select'] = 'Изберете';
$l['release_date'] = 'Release Date';
$l['adv_option'] = 'Advanced Options';
$l['disable_notify_update'] = 'Disable Update Notification Emails';
$l['exp_disable_notify_update'] = 'If checked you will not receive an email notification for updates available for this installation.';
$l['prog_installing'] = 'Installing '; // Dont remove trailing space
$l['prog_install_complete'] = 'Installation Completed.';
$l['eu_auto_upgrade'] = 'Auto Upgrade';
$l['exp_eu_auto_upgrade'] = 'Select the automatic upgrade preference for this installation when a new version is available';
$l['auto_upgrade_plugins'] = 'Auto Upgrade &soft-1; Plugins';
$l['exp_auto_upgrade_plugins'] = 'If checked, all the active &soft-1; plugins installed for this installation will be automatically upgraded to the latest version when your script installation is upgraded.';
$l['auto_upgrade_themes'] = 'Auto Upgrade &soft-1; Themes';
$l['exp_auto_upgrade_themes'] = 'If checked, the active &soft-1; theme for this installation will be automatically upgraded to the latest version when your script installation is upgraded.';
$l['auto_upgrade_enabled'] = 'Auto Upgrade Enabled';
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
$l['ampps_download'] = 'You can develop <b>&soft-1;</b> on your <b>desktop</b> using our Free developer tool Softaculous AMPPS. Click <a href="http://www.ampps.com/download?give=latest" target="_blank"><b>here</b></a> to download <a href="http://www.ampps.com/download?give=latest" target="_blank"><img src="https://images.softaculous.com/ampps.gif" height="25" /></a>';

$l['install_tweet_sub'] = 'Tell your friends about your new site';

$l['choose_theme'] = 'Select Theme';
$l['clear_theme'] = 'Clear selection';
$l['installing_theme'] = 'Installing theme';
$l['cant_download_theme'] = 'Could not download the theme files';
$l['no_theme_package'] = 'The theme installation package could not be found!';
$l['unzipping_theme_files'] = 'Copying themes files and folders';
$l['use_this_theme'] = 'Select this';
$l['err_auto_backup_limit'] = 'The auto backup rotation cannot be more than <b>&soft-1;</b>';
$l['select_domain'] = 'Select Domain';
$l['refresh'] = 'Refresh';
$l['purchase'] = 'Buy';
$l['your_purchased'] = 'Purchased ';//trailing space is required
$l['your_purchased_times'] = ' times(s)';
$l['err_theme_not_bought'] = 'You have not purchased the theme, so could not install it !';
$l['err_theme_reached_limit'] = 'Please buy this theme and try to install it again. You reached the limit of installing this theme.';
$l['payment_heading'] = 'Purchase Theme';
$l['payment_redirect'] = 'You will be redirected to pay ';//trailing space is required
$l['close'] = 'Close';
$l['free'] = 'Free';
$l['select'] = 'Select';
$l['theme_is_optional'] = '<b>Note</b>: This is optional. If not selected, the default theme will be installed';
$l['with_selected'] = 'With Selected';
$l['not_in_free'] = '<b>&soft-1;</b> cannot be installed in the Free version of '.APP.'!';
$l['notify_admin'] = 'Please notify your Server Admin to purchase the premium version of '.APP.'!';
$l['related_scripts'] = 'Related Scripts';

$l['date_added'] = 'Date Added';
$l['downloaded'] = 'Downloaded';
$l['soft_ins_exists'] = 'An installation already exists at &soft-1; as per our records. To re-install the application please uninstall the existing installation!';
$l['install_now'] = 'Инсталирай сега';
$l['my_apps'] = 'Моите приложения';
$l['backup_location'] = 'Backup Location';
$l['backup_location_exp'] = 'Choose the backup location to be used while backing up this installation';
$l['default'] = 'Default';
$l['invalid_backup_location'] = 'Backup location submitted does not exist';
$l['local_folder'] = 'Local Folder';

$l['custom_autobackup'] = 'Custom';
$l['custom_autobackup_cron'] = 'Automated Backups Cron time';
$l['custom_autobackup_cron_exp'] = 'Please specify the CRON timings for automated backups';

//Errors for autobcakup cron settings
$l['wrong_autobackup_cron_min'] = 'Automated Backup cron minute is wrong. Valid values are 0-59 or a *';
$l['wrong_autobackup_cron_hour'] = 'Automated Backup cron hour is wrong. Valid values are 0-23 or a *';
$l['wrong_autobackup_cron_day'] = 'Automated Backup cron day is wrong. Valid values are 1-31 or a *';
$l['wrong_autobackup_cron_month'] = 'Automated Backup cron month is wrong. Valid values are 1-12 or a *';
$l['wrong_autobackup_cron_weekday'] = 'Automated Backup cron weekday is wrong. Valid values are 0-7 or a *';

$l['quick_install'] = 'Quick Install';
$l['custom_install'] = 'Custom Install';

$l['outdated_script'] = '<b>&soft-1;</b> has not been updated for more than two years and may no longer be maintained or supported by the script vendor';

$l['pushtolive'] = 'Push to Live';
$l['staging'] = 'Create Staging';

$l['dont_auto_upgrade'] = 'Do not Auto Upgrade'; 
$l['minor_auto_upgrade'] = 'Upgrade to <b>Minor</b> versions only'; 
$l['major_auto_upgrade'] = 'Upgrade to any latest version available (<b>Major</b> as well as <b>Minor</b>)'; 
$l['auto_upgrade_major'] = '(Major and Minor)'; 
$l['auto_upgrade_minor'] = '(Minor)'; 

$l['err_fetch_key'] = 'Could not fetch the PFX API key at the moment';
$l['ampps_notify_premium'] = 'This feature is available in the premium version of AMPPS. Please purchase <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';

$l['view_items'] = 'List Items in Set';
$l['ok'] = 'OK';
$l['plugins'] = 'Plugins';
$l['themes'] = 'Themes';
$l['empty_set'] = 'There are currently no items in the set!!';

$l['error_max_ins_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Installations allowed per script';
$l['error_max_backup_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Backups allowed per script';
$l['error_max_clone_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Clone allowed per script';
$l['error_max_staging_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Staging allowed per script';

$l['remove_complete'] = 'Remove Completely';
$l['remove_info'] = 'Remove from '.APP;
$l['manage_sets'] = 'Управление на приставки / набори от теми';
$l['manage_plugin_sets'] = 'Manage Plugin Sets';
$l['manage_theme_sets'] = 'Manage Theme Sets';
