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

$l['no_info_file'] = 'Не найден файл INFO.XML! Пожалуйста, сообщите об этом администратору сервера.';
$l['incompatible'] = 'ПО требует более высокую версию '.APP.'! Пожалуйста, сообщите об этом администратору сервера.';
$l['no_install'] = 'Не найден файл INSTALL.XML! Пожалуйста, сообщите об этом администратору сервера.';
$l['no_functions'] = 'Не найден файл функций клонирования!';
$l['no_remove_functions'] = 'The REMOVE FUNCTIONS file could not be found! Please report this to the server administrator.';
$l['no_softdomain'] = 'Вы не выбрали домен для установки программного обеспечения.';
$l['wrong_softdomain'] = 'Указанный домен не может быть найден.';
$l['softdirectory_exists'] = 'Указанный каталог уже существует! Пожалуйста, укажите другой каталог.';
$l['no_space'] = 'У вас нет достаточно места для установки этого программного обеспечения!';
$l['no_softdb'] = 'База данных не была размещена.';
$l['database_exists'] = 'База данных уже существует. Пожалуйста, укажите другое название.';
$l['databaseuser_exists'] = 'Пользователь базы данных уже существует. Пожалуйста, укажите другое имя.';
$l['db_name_long'] = 'Название базы данных не может быть больше 7 букв. Пожалуйста, укажите более короткое название базы данных.';
$l['db_limit_crossed'] = 'Максимальное количество баз данных которое можно создать достигнуто, поэтому установка не может быть продолжена.';
$l['no_field'] = 'Поле <b>&soft-1;</b> является обязательным и должно быть заполнено.';
$l['error_adddb'] = 'База данных не может быть создана';
$l['error_adduser'] = 'Возникла ошибка при добавлении пользователя в новой базе данных';
$l['no_package'] = 'Инсталляционный пакет не может быть найден!';
$l['no_decompress'] = 'Возникли некоторые ошибки в распаковке файлов пакетов.';
$l['mail_new_ins'] = 'Новая установка &soft-1; была завершена. Подробная информация о, установке приведены ниже:';
$l['mail_path'] = 'Путь';
$l['mail_url'] = 'URL';
$l['mail_admin_url'] = 'Admin URL'; 
$l['mail_admin'] = 'Админ Имя';
$l['mail_pass'] = 'Админ Пароль';
$l['mail_db'] = 'MySQL База Данных';
$l['mail_dbuser'] = 'MySQL БД Пользователь';
$l['mail_dbhost'] = 'MySQL БД Хост';
$l['mail_dbpass'] = 'MySQL БД Пароль';
$l['mail_time'] = 'Установлено';
$l['mail_subject'] = 'Новая установка &soft-1;';
$l['no_cron_min'] = 'Не указаны минуты Cron';
$l['no_cron_hour'] = 'Не указаны часы Cron';
$l['no_cron_day'] = 'Не указаны дни Cron';
$l['no_cron_month'] = 'Не указаны месяцы Cron';
$l['no_cron_weekday'] = 'Не указаны дни недели Cron';
$l['wrong_cron_min'] = 'Cron минуты указаны неправильно. Допустимые значения 0-59 или <b>*</b>';
$l['wrong_cron_hour'] = 'Cron часы указаны неправильно. Допустимые значения 0-23 или <b>*</b>';
$l['wrong_cron_day'] = 'Cron день указан неправильно. Допустимые значения 1-31 или <b>*</b>';
$l['wrong_cron_month'] = 'Cron месяц указан неправильно. Допустимые значения 1-12 или <b>*</b>';
$l['wrong_cron_weekday'] = 'Cron день недели указан неправильно. Допустимые значения 0-7 или <b>*</b>';
$l['mail_cron'] = 'Cron Задание';
$l['no_datadir'] = 'Не указан каталога данных';
$l['datadir_exists'] = 'Указанный каталог существует. Пожалуйста, укажите другой.';
$l['no_decompress_data'] = 'Возникли некоторые ошибки в распаковке файлов данных.';
$l['mail_datadir'] = 'Каталог данных';
$l['some_files_exist'] = 'Установка не может быть продолжена, потому что следующие файлы уже существуют в указанной директории : ';
$l['delete_files'] = 'Пожалуйста, удалите эти файлы, или выберите другой каталог.';
$l['overwrite_exist'] = '<b>ИЛИ</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">Установите флажок, чтобы переписать все файлы и продолжать</span></b>';
$l['checking_data'] = 'Проверка предоставленных данных';
$l['unzipping_files'] = 'Копирование файлов и каталогов';
$l['unzipping_datadir'] = 'Распаковка файлов данных';
$l['prop_db'] = 'Распространение базы данных';
$l['finishing_process'] = 'Завершение установки';
$l['wait_note'] = '<b>ПРИМЕЧАНИЕ:</b> Это может занять 3-4 минуты. Пожалуйста, не уходите с этой страницы пока индикатор прогресса не достигнет 100%';
$l['no_hostname'] = 'Please enter your Database Hostname';
$l['no_dbusername'] = 'Please enter your Database Username';
$l['no_dbuserpass'] = 'Please enter your Database Password';
$l['softdirectory_invalid'] = 'The directory you typed is invalid.';
$l['softdatadir_invalid'] = 'The data directory you typed is invalid.';
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
$l['not_php_script'] = 'Этот скрипт не на PHP';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['install'] = 'Установка';
$l['overview'] = 'Обзор';
$l['features'] = 'Особенности';
$l['demo'] = 'Демо';
$l['ratings'] = 'Рейтинг';
$l['import'] = 'Импорт';
$l['software_ver'] = 'Версия';
$l['space_req'] = 'Требуемое место';
$l['available_space'] = 'Доступное место';
$l['req_space'] = 'Требуемое место';
$l['mb'] = 'МБ';
$l['software_support'] = 'Поддержка программного обеспечения';
$l['support_link'] = 'Посетить сайт поддержки';
$l['support_note'] = 'Примечание: Softaculous не предоставляет поддержку для какого-либо программного обеспечения.';
$l['setup'] = 'Установка программного обеспечения';
$l['choose_domain'] = 'Выберите домен';
$l['choose_domain_exp'] = 'Пожалуйста, выберите домен для установки программного обеспечения.';
$l['choose_url'] = 'Выберите URL установки';
$l['choose_url_exp'] = 'Пожалуйста, выберите URL для установки ПО';
$l['in_directory'] = 'Директория';
$l['in_directory_exp'] = 'Каталог относительно корня вашего домена и он <b>не должен существовать</b>. т.е. Для установки на http://mydomain/dir/ просто введите <b>dir</b>. Для установки только в http://mydomain/ оставьте поле пустым.';
$l['database_name'] = 'Имя базы данных';
$l['database_name_exp'] = 'Введите название базы данных, в которой будет создана установка';
$l['softcopy_note'] = '<b>ПРИМЕЧАНИЕ</b>: Это программное обеспечение требует, чтобы оно было установлено ​​с помощью собственной утилиты установки. Пожалуйста, посетите URL, который будет показан один раз, файлы были скопированы для полного процесса установки.';
$l['softsubmit'] = 'Установка';
$l['congrats'] = 'Поздравляем, программное обеспечение установлено успешно!';
$l['succesful'] = 'был успешно установлен в';
$l['admin_url'] = 'Административный URL';
$l['setup_continue'] = 'Однако, установка будет завершена самой программой. Для завершения установки, пожалуйста, посетите следующий адрес';
$l['enjoy'] = 'Мы надеемся, что процесс установки прошел легко.';
$l['install_notes'] = 'Ниже приводятся некоторые важные примечания. Настоятельно рекомендуется прочитать их';
$l['please_note'] = '<b>ПРИМЕЧАНИЕ</b>: '.APP.' производит только автоматическую установку программного обеспечения и не предоставляет никакой поддержки для отдельных пакетов программного обеспечения. Пожалуйста, посетите веб-сайт поставщика программного обеспечения для поддержки!';
$l['regards'] = 'С уважением';
$l['softinstaller'] = APP.' Авто Установщик';
$l['return'] = 'Вернуться к обзору';
$l['current_ins'] = 'Имеющиеся установки';
$l['link'] = 'Ссылка';
$l['ins_time'] = 'Время установки';
$l['version'] = 'Версия';
$l['upd_to'] = 'Обновить до версии';
$l['remove'] = 'Удалить';
$l['no_info'] = 'Нет информации';
$l['randpass'] = 'Генерировать случайный пароль';
$l['ratesoft'] = 'Оценить этот скрипт';
$l['reviews'] = 'Отзывы';
$l['reviewsoft'] = 'Напишите свой отзыв';
$l['readreviews'] = 'Отзывы';
$l['reviews_exp'] = 'Читайте обзоры, написанные другими пользователями и';
$l['cron_job'] = 'CRON Задание';
$l['cron_job_exp'] = 'Этот сценарий требует задания CRON. Пожалуйста, укажите время запуска CRON. Если Вы не знаете его, оставьте все как есть!';
$l['cron_min'] = 'Минута';
$l['cron_hour'] = 'Час';
$l['cron_day'] = 'День';
$l['cron_month'] = 'Месяц';
$l['cron_weekday'] = 'Неделя';
$l['datadir'] = 'Директория данных';
$l['datadir_exp'] = 'Этот сценарий требует, чтобы свои данные хранились в директории, не доступной через Интернет. Она будет создана в вашем домашнем каталоге. Т.е. Если вы укажете <b>datadir</b> будет создано - /home/username/<b>datadir</b>';
$l['db_alpha_num'] = 'Только буквенно-цифровой символы разрешены для имени базы данных.';
$l['overwrite'] = 'Перезаписать файлы';
$l['ins_emailto'] = 'Отправить детали установки';
$l['choose_protocol'] = 'Выберите протокол';
$l['choose_protocol_exp'] = 'Если ваш сайт имеет SSL, то, пожалуйста, выберите протокол HTTPS.';
$l['clone'] = 'Клонировать';
$l['backup'] = 'Создать резервную копию';
$l['options'] = 'Опции';
$l['admin'] = 'Админ-панель';
$l['notify_ver'] = 'Уведомить: У '.$globals['sn'].' устаревшая версия';
$l['notifyversion'] = 'Спасибо за информирование о новой версии. Мы проверим это как можно скорее.';
$l['del_insid'] = 'Вы уверены, что хотите удалить выбранные установки? Действие будет необратимым.\n Никаких дальнейших подтверждения не будет предложено.';
$l['rem_inst_id'] = 'Удаление установки - ';
$l['no_sel_inst'] = 'Нет установок выбранных для удаления.';
$l['inst_remvd'] = 'Выбранные установки были удалены. Страница будет перезагружена!';
$l['remove'] = 'Удалить';
$l['go'] = 'Начать';
$l['screenshots'] = 'Скриншоты'; 
$l['downloading'] = 'Загрузка пакета'; 
$l['installing'] = 'Установка скрипта'; 
$l['editdetail'] = 'Редактировать';
$l['publish'] = 'Опубликовать в интернете';
$l['hostname'] = 'Сервер баз данных';
$l['hostname_exp'] = 'Сервер баз данных MySQL (обычно <b>localhost</b>)';
$l['dbusername'] = 'Имя пользователя базы данных';
$l['dbusername_exp'] = 'Имя пользователя MySQL';
$l['dbuserpass'] = 'Пароль базы данных';
$l['dbuserpass_exp'] = 'Пароль пользователя MySQL';
$l['database_name_exp_aefer'] = 'Введите имя базы данных, используемой для установки';
$l['sel_version'] = 'Выберите версию';
$l['choose_version_exp'] = 'Пожалуйста, выберите версию для установки';
$l['choose_version'] = 'Выберите версию, которую вы хотите установить';
$l['select'] = 'Выбрать';
$l['release_date'] = 'Дата выхода';
$l['adv_option'] = 'Расширенные настройки';
$l['disable_notify_update'] = 'Отключить уведомления на почту об обновлениях';
$l['exp_disable_notify_update'] = 'Если выбрано, вы не будете получать почтовые уведомления о доступных для этой установки обновлениях.';
$l['prog_installing'] = 'Установка '; // Dont remove trailing space
$l['prog_install_complete'] = 'Установка завершена.';
$l['eu_auto_upgrade'] = 'Автообновление';
$l['exp_eu_auto_upgrade'] = 'Выберите действие для этой установки при наличии новой версии';
$l['auto_upgrade_plugins'] = 'Автообновление плагинов &soft-1;';
$l['exp_auto_upgrade_plugins'] = 'Если выбрано, все активные плагины &soft-1; для данной установки будут обновляться до последних версий при установке обновлений самого скрипта.';
$l['auto_upgrade_themes'] = 'Автообновление тем &soft-1;';
$l['exp_auto_upgrade_themes'] = 'Если выбрано, активная тема &soft-1; будет обновляться до последней версии при установке обновлений самого скрипта.';
$l['auto_upgrade_enabled'] = 'Автоматическое обновление включено';
$l['bad'] = 'Плохой';
$l['good'] = 'Хороший';
$l['strong'] = 'Сильный';
$l['short'] = 'Короткий';
$l['strength_indicator'] = 'Индикатор стойкости';
$l['auto_backup'] = 'Автоматические резервные копии';
$l['exp_auto_backup'] = APP.' будет автоматически создавать резервные копии через CRON с указанной вами частотой';
$l['auto_backup_rotation'] = 'Ротация резервных копий';
$l['exp_auto_backup_rotation'] = 'Если лимит ротации резервных копий достигнут, '.APP.' удалит самую старую имеющуюся резервную копию для этой установки и создаст новую. Резервные копии занимают место на диске, поэтому выбирайте параметр ротации исходя из количества свободного места.';
$l['no_backup'] = 'Не создавать резервные копии';
$l['daily'] = 'Раз в день';
$l['weekly'] = 'Раз в неделю';
$l['monthly'] = 'Раз в месяц';
$l['unlimited'] = 'Неограниченно';
$l['changelog'] = 'Журнал изменений';
$l['act_upgrade'] = 'Недавно обновлённые';
$l['act_clone'] = 'Недавно склонированные';
$l['act_backup'] = 'Недавно забэкапированные';
$l['act_install'] = 'Недавно установленные';
$l['act_edit'] = 'Недавно отредактированные';
$l['act_import'] = 'Недавно импортированные';
$l['act_restore'] = 'Недавно восстановленные';
$l['ampps_download'] = 'You can develop <b>&soft-1;</b> on your <b>desktop</b> using our Free developer tool Softaculous AMPPS. Click <a href="http://www.ampps.com/download?give=latest" target="_blank"><b>here</b></a> to download <a href="http://www.ampps.com/download?give=latest" target="_blank"><img src="https://images.softaculous.com/ampps.gif" height="25" /></a>';

$l['install_tweet_sub'] = 'Расскажите друзьям о вашем новом сайте';

$l['choose_theme'] = 'Select Theme';
$l['clear_theme'] = 'Clear selection';
$l['installing_theme'] = 'Installing theme';
$l['cant_download_theme'] = 'Could not download the theme files';
$l['no_theme_package'] = 'The theme installation package could not be found!';
$l['unzipping_theme_files'] = 'Copying themes files and folders';
$l['use_this_theme'] = 'Select this';
$l['err_auto_backup_limit'] = 'Ротация автоматических резервных копий не может быть больше, чем  <b>&soft-1;</b>';
$l['select_domain'] = 'Выбрать домен';
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
$l['with_selected'] = 'С выбранными';
$l['not_in_free'] = 'ПО <b>&soft-1;</b> не может быть установлено в бесплатной версии '.APP.'!';
$l['notify_admin'] = 'Пожалуйста, уведомите администратора вашего сервера о необходимости покупки премиум версии '.APP.'!';
$l['related_scripts'] = 'Похожие скрипты';

$l['date_added'] = 'Дата добавления';
$l['downloaded'] = 'Загружено';

$l['soft_ins_exists'] = 'Установка уже существует в записях &soft-1;. Для повторной установки приложения, пожалуйста, удалите текущую установку!';
$l['install_now'] = 'Установить сейчас';
$l['my_apps'] = 'Мои установки';

$l['backup_location'] = 'Backup Location';
$l['backup_location_exp'] = 'Choose the backup location to be used while backing up this installation';
$l['default'] = 'Default';
$l['invalid_backup_location'] = 'Backup location submitted does not exist';
$l['local_folder'] = 'Local Folder';

$l['custom_autobackup'] = 'Другое';
$l['custom'] = 'Другое время запуска Cron';
$l['custom_autobackup_cron'] = 'Время запуска Cron для автоматических резервных копий';
$l['custom_autobackup_cron_exp'] = 'Пожалуйста, укажите время запуска Cron для автоматических резервных копий';

//Errors for autobcakup cron settings
$l['wrong_autobackup_cron_min'] = 'Некорректная минута в Cron. Валидные значения: 0-59 или <b>*</b>';
$l['wrong_autobackup_cron_hour'] = 'Некорректный час в Cron. Валидные значения: 0-23 или <b>*</b>';
$l['wrong_autobackup_cron_day'] = 'Некорректный день в Cron. Валидные значения: 1-31 или <b>*</b>';
$l['wrong_autobackup_cron_month'] = 'Некорректный месяц в Cron. Валидные значения: 1-12 или <b>*</b>';
$l['wrong_autobackup_cron_weekday'] = 'Некорректный день недели в Cron. Валидные значения: 0-7 или <b>*</b>';

$l['quick_install'] = 'Быстрая установка';
$l['custom_install'] = 'Расширенная установка';

$l['outdated_script'] = '<b>&soft-1;</b> не обновлялся более двух лет и, возможно, более не сопровождается или поддерживается поставщиком программного обеспечения.';

$l['pushtolive'] = 'Отправить на основной сайт';
$l['staging'] = 'Создать промежуточную версию';

$l['dont_auto_upgrade'] = 'Не устанавливать обновления автоматически'; 
$l['minor_auto_upgrade'] = 'Обновляться только до <b>минорных</b> версий'; 
$l['major_auto_upgrade'] = 'Обновляться до любой последней версии (как <b>мажорной</b> так и <b>минорной</b>)'; 
$l['auto_upgrade_major'] = '(мажорные и минорные версии)'; 
$l['auto_upgrade_minor'] = '(минорные версии)'; 

$l['err_fetch_key'] = 'Could not fetch the PFX API key at the moment';
$l['ampps_notify_premium'] = 'This feature is available in the premium version of AMPPS. Please purchase <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';

$l['view_items'] = 'List Items in Set';
$l['ok'] = 'OK';
$l['plugins'] = 'Плагины';
$l['themes'] = 'Темы';
$l['empty_set'] = 'There are currently no items in the set!!';

$l['error_max_ins_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Installations allowed per script';
$l['error_max_backup_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Backups allowed per script';
$l['error_max_clone_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Clone allowed per script';
$l['error_max_staging_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Staging allowed per script';

$l['remove_complete'] = 'Удалить полностью';
$l['remove_info'] = 'Удалить из '.APP;
$l['manage_sets'] = 'Настроить набор плагинов / тем';
$l['manage_plugin_sets'] = 'Управление наборами плагинов';
$l['manage_theme_sets'] = 'Управление наборами тем';