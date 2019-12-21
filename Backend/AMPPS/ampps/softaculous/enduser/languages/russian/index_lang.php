<?php

//////////////////////////////////////////////////////////////
//===========================================================
// index_lang.php
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

$l['user_data_error_t'] = 'Ошибка в данных пользователя';
$l['user_data_error'] = ''.APP.' не удалось загрузить данные учетной записи. Пожалуйста, сообщите об этом администратору сервера!';

$l['remote_licence_t'] = 'Недействительная лицензия';
$l['remote_licence'] = 'Используемая лицензия недействительна. Пожалуйста, сообщите об этом администратору сервера!';

$l['enterprise_licence_t'] = 'Недействительная лицензия';
$l['enterprise_licence'] = 'Используемая лицензия недействительна. Пожалуйста, сообщите об этом администратору сервера!';

$l['no_license'] = 'Файл ЛИЦЕНЗИИ не может быть найден! Пожалуйста, сообщите об этом администратору сервера.';

$l['today'] = '<b>Сегодня</b> at ';//The today string for showing todays post time

$l['init_theme_error_t'] = 'Ошибка темы';//Title
$l['init_theme_error'] = 'Невозможно загрузить файл темы - &soft-1;.';

$l['init_theme_func_error_t'] = 'Ошибка Темы функции';//Title
$l['init_theme_func_error'] = 'Невозможно загрузить тему функции(й) &soft-1;.';

$l['disable_softaculous_t'] = 'Softaculous отключен';
$l['disable_softaculous'] = 'Softaculous отключен для данного пользователя. Пожалуйста, свяжитесь с администратором сервера.';

$l['load_theme_settings_error'] = 'Невозможно загрузить файл настроек темы.';

$l['view_guide'] = 'View Guide';
$l['max_db_length'] = 'The database name cannot be greater than &soft-1; characters. Please choose a shorter database name.';


//Error Handle Function
$l['following_errors_occured'] = 'Обнаружены следующие ошибки';

//Success Message Function
$l['following_message'] = 'Следующее сообщение было возвращено';

//Major Error Function
$l['fatal_error'] = 'Фатальная ошибка';
$l['following_fatal_error'] = 'Произошла следующая ошибка';

//Message Function
$l['soft_message'] = ''.APP.' Сообщение';
$l['following_soft_message'] = 'Следующие сообщения были возвращены';

//Update Softwares
$l['no_soft_found'] = 'Программное обеспечение не найдено.....Необходимо обновление';
$l['ver_not_match'] = 'Версии не совпадают.....Необходимо обновление';
$l['ver_match'] = 'Текущая версия является последней версией ......Продолжение';
$l['del_prev_files'] = 'Удалить предыдущие файлы......Готово';
$l['fetch_latest'] = 'Получен файл обновления......';
$l['error_fetch_latest'] = 'Не удалось получить файл обновления......Продолжение';
$l['error_save_latest'] = 'Не удалось сохранить файл обновления......Продолжение';
$l['got_latest'] = 'Сохранен файл с обновлением';
$l['unzip_latest'] = 'Распаковка файлов......';
$l['error_unzip_latest'] = 'Ошибка распаковки......Продолжение';
$l['unzipped_latest'] = 'Распаковка прошла успешно';

//Update Softaculous
$l['getting_info'] = 'Запрос информации......';
$l['error_getting_latest'] = 'Не удалось получить информацию......Отказ';
$l['got_info'] = 'Получена информация';
$l['manual_mode'] = 'Новая версия '.APP.' требует внимания к руководству......Отказ';
$l['no_updates'] = 'Текущая версия является Последней версией......Продолжение';
$l['fetch_upgrade'] = 'Получено обновление......';
$l['error_fetch_upgrade'] = 'Не удалось получить файл обновления......Отказ';
$l['error_save_upgrade'] = 'Не удалось сохранить файл обновления......Отказ';
$l['got_upgrade'] = 'Сохранен файл с обновлением';
$l['unzip_upgrade'] = 'Распаковка файлов......';
$l['error_unzip_upgrade'] = 'Ошибка распаковки......Отказ';
$l['unzipped_upgrade'] = 'Распаковка прошла успешно';
$l['md5_check'] = 'MD5 Проверка успешна';
$l['err_md5_check'] = 'MD5 Проверка для этих файлов не успешна';
$l['err_md5_file'] = ' не существует';

//MySQL Errors
$l['err_selectmy'] = 'MySQL база данных не найдена.';
$l['err_myconn'] = 'Подключение MySQL не может быть установлено.';
$l['err_makequery'] = 'Не удалось сделать запрос номером';
$l['err_mynum'] = 'MySQL Ошибка No';
$l['err_myerr'] = 'MySQL Ошибка';
$l['err_no_db_file'] = 'The database import file does not exist';
$l['err_no_open_db_file'] = 'Could not open the database import file';

//Importing Errors
$l['imp_wrong_softdomain'] = 'Путь домена &soft-1; не был найден.';
$l['imp_softpath_wrong'] = 'Путь &soft-1; не существует.';
$l['imp_ins_exists'] = '&soft-1; уже установлен ​​в &soft-2; как записано в наших записях и поддерживается нами !';
$l['imp_no_func'] = 'Функция импорта &soft-1; не может быть загружена.';
$l['imp_err'] = 'Возникли некоторые ошибки при импорте программного обеспечения, установленного в &soft-1;';
$l['err_query'] = 'Could not execute the query';

$l['invalid_search_input'] = 'Invalid Theme Search character. Only alphanumeric characters, underscore and hyphen are allowed.';

//hf_theme.php
$l['root_login'] = 'Вход осуществлен как ROOT';
$l['welcome'] = 'Добро пожаловать';
$l['logout'] = 'Выход';
$l['page_time'] = 'Страница создана за';
$l['times_are'] = 'Часовой пояс GMT';
$l['time_is'] = 'Текущее время';
$l['no_script_found'] = 'Данный скрипт не найден!';
$l['webuzo_sysapps_disabled'] = 'This functionality has been disabled from the Webuzo Admin Panel';
$l['webuzo_install_utility'] = 'This utility is not installed. Please install it first';

//The Category Language Variables
$l['forums'] = 'Форумы';
$l['blogs'] = 'Блоги';
$l['cms'] = 'Порталы/CMS';
$l['galleries'] = 'Фотогалереи';
$l['wikis'] = 'Википедии';
$l['admanager'] = 'Реклама/Объявления';
$l['calendars'] = 'Календари';
$l['games'] = 'Игры';
$l['mail'] = 'Почта';
$l['polls'] = 'Опросы и исследования';
$l['projectman'] = 'Управление проектами';
$l['ecommerce'] = 'Электронная коммерция';
$l['guestbooks'] = 'Гостевые книги';
$l['customersupport'] = 'Поддержка пользователей';
$l['others'] = 'Прочее';
$l['music'] = 'Музыка';
$l['video'] = 'Видео';
$l['files'] = 'Управление файлами';
$l['go_cpanel'] = 'Перейти в панель управления';
$l['go_home'] = ''.APP.' Главная';
$l['go_demos'] = 'Демо скриптов';
$l['go_ratings'] = 'Рейтинги скриптов';
$l['go_settings'] = 'Редактирование настроек';
$l['go_email_settings'] = 'Настройки электронной почты';
$l['go_installations'] = 'Все установки';
$l['go_support'] = 'Помощь и поддержка';
$l['go_sync'] = 'Синхронизация с другими автоустановщиками';
$l['go_backups'] = 'Резервные копии и восстановление';
$l['go_tasklist'] = 'Список задач';
$l['go_apps_installations'] = 'Все установленные предложения';
$l['go_my_themes'] = 'Мои темы';
$l['go_logout'] = 'Выход';
$l['ins_stats'] = 'Установки';
$l['outdated_stats'] = 'Устаревшие установки';
$l['backups_stats'] = 'Резервные копии';

$l['type_php'] = 'PHP';
$l['type_perl'] = 'Perl';
$l['type_js'] = 'JavaScript';
$l['type_java'] = 'Java';
$l['type_python'] = 'Python';
$l['search'] = 'Поиск';
$l['back_to_top'] = 'Наверх';

$l['show'] = 'Показать';
$l['hide'] = 'Скрыть';

// Categories
$l['cat_php_forums'] = 'Форумы';
$l['cat_php_blogs'] = 'Блоги';
$l['cat_php_cms'] = 'Порталы/CMS';
$l['cat_php_galleries'] = 'Фотогалереи';
$l['cat_php_wikis'] = 'Википедии';
$l['cat_php_admanager'] = 'Реклама/Объявления';
$l['cat_php_calendars'] = 'Календари';
$l['cat_php_games'] = 'Игры';
$l['cat_php_mail'] = 'Почта';
$l['cat_php_polls'] = 'Опросы и аналитика';
$l['cat_php_projectman'] = 'Управление проектами';
$l['cat_php_ecommerce'] = 'Электронная коммерция';
$l['cat_php_guestbooks'] = 'Гостевые книги';
$l['cat_php_customersupport'] = 'Поддержка пользователей';
$l['cat_php_others'] = 'Прочее';
$l['cat_php_music'] = 'Музыка';
$l['cat_php_video'] = 'Видео';
$l['cat_php_rss'] = 'RSS';
$l['cat_php_socialnetworking'] = 'Социальные сети';
$l['cat_php_microblogs'] = 'Микро блоги';
$l['cat_php_frameworks'] = 'Фреймворки';
$l['cat_php_educational'] = 'Образование';
$l['cat_php_erp'] = 'ERP-системы';
$l['cat_php_dbtools'] = 'Инструменты баз данных';
$l['cat_php_files'] = 'Управление файлами';
$l['cat_js_libraries'] = 'Библиотеки';
$l['cat_js_widgets'] = 'Виджеты';
$l['cat_perl_blogs'] = 'Блоги';
$l['cat_perl_wikis'] = 'Вики';
$l['cat_perl_forums'] = 'Форумы';
$l['cat_perl_ecommerce'] = 'Электронная коммерция';
$l['cat_perl_mail'] = 'Почта';
$l['cat_java_cms'] = 'CMS';
$l['cat_java_forums'] = 'Форумы';
$l['cat_java_projectman'] = 'Управление проектом';
$l['cat_java_erp'] = 'ERP-системы';
$l['cat_java_blogs'] = 'Блоги';
$l['cat_java_wikis'] = 'Вики';
$l['cat_python_wikis'] = 'Вики';
$l['cat_python_projectman'] = 'Управление проектом';
$l['cat_apps_server_side_scripting'] = 'Сценарии на стороне сервера';
$l['cat_apps_web_servers'] = 'Веб-серверы';
$l['cat_apps_utilities'] = 'Утилиты';
$l['cat_apps_libraries'] = 'Библиотеки';
$l['cat_apps_databases'] = 'Базы данных';
$l['cat_apps_stacks'] = 'Множества';
$l['cat_apps_security'] = 'Безопасность';
$l['cat_apps_statistics'] = 'Статистика';
$l['cat_apps_java_tools'] = 'Инструменты Java';
$l['cat_apps_java_containers'] = 'Java контейнеры';
$l['cat_apps_version_control'] = 'Управление версией';
$l['cat_apps_modules'] = 'Модули';
$l['cat_apps_message_queue'] ='Очередь сообщений';

// Classes Categories
$l['classes_ajax'] = 'Ajax';
$l['classes_cryptography'] = 'Криптография';
$l['classes_algorithms'] = 'Алгоритмы';
$l['classes_artificialintelligence'] = 'Искусственный интеллект';
$l['classes_email'] = 'Электронная почта';
$l['classes_finances'] = 'Финансы';
$l['classes_searching'] = 'Поиск';
$l['classes_user_management'] = 'Управление пользователями';
$l['classes_utilitiesandtools'] = 'Инструменты и утилиты';
$l['classes_validation'] = 'Валидация';
$l['classes_security'] = 'Безопасность';
$l['classes_console'] = 'Консоль';
$l['classes_codegeneration'] = 'Генерирование кода';
$l['classes_chat'] = 'Чат';
$l['classes_astrology'] = 'Астрология';
$l['classes_audio'] = 'Аудио';
$l['classes_biology'] = 'Биология';
$l['classes_blogs'] = 'Блоги';
$l['classes_cache'] = 'Кэш';
$l['classes_compression'] = 'Сжатие';
$l['classes_configuration'] = 'Конфигурация';
$l['classes_contentmanagement'] = 'Управление содержимым';
$l['classes_conversion'] = 'Конверсия';
$l['classes_datatypes'] = 'Типы данных';
$l['classes_databases'] = 'Базы данных';
$l['classes_debug'] = 'Отладить';
$l['classes_designpatterns'] = 'Разработка шаблонов';
$l['classes_ecommerce'] = 'Электронная коммерция';
$l['classes_elearning'] = 'Электронное обучение';
$l['classes_emulators'] = 'Эмуляторы';
$l['classes_filesandfolders'] = 'файлы и папки';
$l['classes_flash'] = 'Flash';
$l['classes_forums'] = 'Форумы';
$l['classes_games'] = 'Игры';
$l['classes_geography'] = 'География';
$l['classes_graphics'] = 'Графика';
$l['classes_gui'] = 'ГИП';
$l['classes_hosting'] = 'Хостинг';
$l['classes_html'] = 'HTML';
$l['classes_http'] = 'HTTP';
$l['classes_language'] = 'Язык';
$l['classes_projectmanagement'] = 'Управление проектом';

// Softaculous Remote Domain Strings
$l['no_domain_data'] = 'Domain Data Not Found!!';
$l['no_aefer_resp'] = 'Could not access the worker file over web. Please check if your domain is pointing to the correct server.'; 

// Webuzo Strings
$l['webuzo'] = 'Webuzo';
$l['go_domain'] = 'Управление доменами';
$l['webuzo_license_exp'] = 'Лицензия неактивна или просрочена. Если у лицензии закончился срок действия, пожалуйста, продлите её, чтобы продолжить пользоваться Webuzo';
$l['webuzo_license_exp_t'] = 'Лицензия неактивна';
$l['err_no_access'] = 'У вас недостаточно прав для доступа к этой странице';

// Ampps Strings
$l['ampps'] = 'AMPPS';
$l['go_domain'] = 'Управление доменами';
$l['ampps_license_exp'] = 'Ваша лицензия неактивна или просрочена. Если у лицензии закончился срок действия, пожалуйста, продлите её, чтобы продолжить пользоваться Ampps';
$l['ampps_license_exp_t'] = 'Лицензия не активна';


/////////////////////////////////////////////////////////////
/////  Following Variables are used for Email Templates /////
/////////////////////////////////////////////////////////////


$l['notify_enable'] = 'Включено';
$l['notify_disable'] = 'Отключено';

$l['autoupgrade_enable'] = 'Включено';
$l['autoupgrade_disable'] = 'Отключено';

// Auto backup strings
$l['auto_backup_enable'] = 'Включено';
$l['auto_backup_disable'] = 'Отключено';

// Install Template Vaiable
$l['mail_install_php_sub'] = '$scriptname была успешно установлена';
$l['mail_install_php'] = 'Здравствуйте,
Рады сообщить, что установка $scriptname $version на наш хостинг была успешно завершена. Детали доступа и настройки представлены ниже:
Путь : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>Каталог данных : $datadirectory</if>
<if $admin_username>Имя администратора : $admin_username</if>
<if $admin_pass>Пароль администратора : $admin_pass</if>
<if $admin_email>e-mail администратора : $admin_email</if>
<if $dbname>Имя базы данных MySQL : $dbname</if>
<if $dbuser>Пользователь базы данных MySQL : $dbuser</if>
<if $dbhost>Hostname базы данных MySQL : $dbhost</if>
<if $dbpass>Пароль базы данных MySQL : $dbpass</if>
<if $cron>Задание: $cron</if>
<if $disable_notify_update>Получать уведомления : $disable_notify_update</if>
<if $eu_auto_upgrade>Автоматическое обновление : $eu_auto_upgrade</if>
<if $auto_backup>Автоматическое создание резервных копий : $auto_backup</if>
<if $auto_backup_rotation>Частота создания резервных копий : $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
<if $time>Время установки: $time</if>

Вы можете отписаться и не получать больше подобные emails уведомления зайдя в контрольную панель cPanel -> '.APP.' -> Настройки почты.
Если у Вас возникнут вопросы, пожалуйста, обратитесь в нашу поддержку.
';

// Clone Template Vaiable
$l['mail_clone_sub'] = 'Создание копии $scriptname';
$l['mail_clone'] = 'Здравствуйте, 

Рады сообщить, что копия $scriptname $version была успешно установлена.

Изначальные детали доступа :

Изначальный путь : $old_path
Изначальный URL : $old_url

Детали доступа для копии:

Путь : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>Директория данных : $datadirectory</if>
<if $dbname>Имя базы данных MySQL : $dbname</if>
<if $dbuser>Пользователь базы данных MySQL : $dbuser</if>
<if $dbhost>Hostname базы данных MySQL : $dbhost</if>
<if $dbpass>Пароль базы данных MySQL : $dbpass</if>
<if $cron>Задание Cron : $cron</if>
<if $time>Время установки : $time</if>

Вы можете отписаться и не получать больше подобные emails уведомления зайдя в контрольную панель cPanel -> '.APP.' -> Настройки почты.

Если у Вас возникнут вопросы, пожалуйста, обратитесь в нашу поддержку.
';

// Install Template Vaiable
$l['mail_install_js_sub'] = '$scriptname была успешно установлена';
$l['mail_install_js'] = 'Здравствуйте, 

Рады сообщить, что установка $scriptname $version на наш хостинг был успешно завершена. Детали доступа и настройки представлены ниже:
Путь : $path
URL : $url
<if $disable_notify_update>Получать уведомления : $disable_notify_update</if>
<if $auto_backup>Автоматическое создание резервных копий : $auto_backup</if>
<if $auto_backup_rotation>Частота создания резервных копий : $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
<if $time>Установлено : $time</if>

Вы можете отписаться и не получать больше подобные emails уведомления зайдя в контрольную панель cPanel -> '.APP.' -> Настройки почты.

Если у Вас возникнут вопросы, пожалуйста, обратитесь в нашу поддержку.
';

// Install Template Vaiable
$l['mail_install_perl_sub'] = '$scriptname была успешно установлена';
$l['mail_install_perl'] = 'Здравствуйте,

Рады сообщить, что установка $scriptname $version на наш хостинг была успешно завершена. Детали доступа и настройки представлены ниже:
Путь : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>Каталог данных : $datadirectory</if>
<if $wwwdir>Веб каталог : $wwwdir</if>
<if $admin_username>Имя администратора : $admin_username</if>
<if $admin_pass>Пароль администратора : $admin_pass</if>
<if $admin_email>E-mail администратора : $admin_email</if>
<if $dbname>Имя базы данных MySQL : $dbname</if>
<if $dbuser>Пользователь базы данных MySQL : $dbuser</if>
<if $dbhost>Hostname базы данных MySQL : $dbhost</if>
<if $dbpass>Пароль базы данных MySQL : $dbpass</if>
<if $cron>Задание Cron : $cron</if>
<if $disable_notify_update>Получать уведомления : $disable_notify_update</if>
<if $auto_backup>Автоматическое создание резервных копий : $auto_backup</if>
<if $auto_backup_rotation>Частота создания резервных копий : $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
<if $time> Время установки : $time</if>

Вы можете отписаться и не получать больше подобные emails уведомления зайдя в контрольную панель cPanel -> '.APP.' -> Настройки почты.
Если у Вас возникнут вопросы, пожалуйста, обратитесь в нашу поддержку.
';

// Install Template Vaiable
$l['mail_install_java_sub'] = 'Новая установка $scriptname';
$l['mail_install_java'] = 'Новая установка $scriptname $version была завершена. Подробная информация об установке приведена ниже:
Путь : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>Каталог данных : $datadirectory</if>
<if $wwwdir>Веб каталог : $wwwdir</if>
<if $admin_username>Админ Имя : $admin_username</if>
<if $admin_pass>Админ Пароль : $admin_pass</if>
<if $admin_email>Админ Почта: $admin_email</if>
<if $dbname>MySQL База Данных : $dbname</if>
<if $dbuser>MySQL БД Пользователь : $dbuser</if>
<if $dbhost>MySQL БД Хост : $dbhost</if>
<if $dbpass>MySQL БД Пароль : $dbpass</if>
<if $cron>Cron Задание : $cron</if>
<if $disable_notify_update>Обновить оповещение : $disable_notify_update</if>
<if $auto_backup>Автоматические резервные копии : $auto_backup</if>
<if $auto_backup_rotation>Чередование резервных копий : $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
<if $time>Установлено : $time</if>

Если Вы хотите отписаться от подобных писем, перейдите в Вашу контрольную панель -> '.APP.' -> Настройки Почты
';

$l['mail_install_python_sub'] = 'Новая установка $scriptname';
$l['mail_install_python'] = 'Новая установка $scriptname $version была завершена. Подробная информация об установке приведена ниже:
Путь : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>Каталог данных : $datadirectory</if>
<if $wwwdir>Веб каталог : $wwwdir</if>
<if $admin_username>Админ Имя : $admin_username</if>
<if $admin_pass>Админ Пароль : $admin_pass</if>
<if $admin_email>Админ Почта: $admin_email</if>
<if $dbname>MySQL База Данных : $dbname</if>
<if $dbuser>MySQL БД ПОльзователь : $dbuser</if>
<if $dbhost>MySQL БД Хост : $dbhost</if>
<if $dbpass>MySQL DB Пароль : $dbpass</if>
<if $cron>Cron Задание : $cron</if>
<if $disable_notify_update>Обновить оповещение : $disable_notify_update</if>
<if $auto_backup>Автоматические резервные копии : $auto_backup</if>
<if $auto_backup_rotation>Чередование резервных копий : $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
<if $time>Время Установки : $time</if>

Если Вы хотите отписаться от подобных писем, перейдите в Вашу контрольную панель -> '.APP.' -> Настройки Почты
';

// Update template Variable (From ADMIN)
$l['mail_update_sub'] = 'Есть важные обновления';
$l['mail_update'] = 'Здравствуйте,

Спешим сообщить, что текущая версия движка уже устарела.
По соображениям безопасности необходимо установить обновления как можно скорее. 
Доступны следующие обновления:

$installation

Чтобы применить данные обновления, пожалуйста, зайдите в  cPanel -> '.APP.' -> Установки.

Если у Вас возникнут вопросы, пожалуйста, обратитесь в нашу поддержку.
';

// Remove Template Variable
$l['mail_remove_sub'] = 'Удаление $scriptname успешно завершено';
$l['mail_remove'] = 'Здравствуйте, 

Хотим сообщить, что удаление $scriptname было успешно завершено. 

Детали удаленного движка:
Путь : $path
<if $url>URL : $url</if>
<if $datadirectory>Каталог данных : $datadirectory</if>
<if $wwwdir>Web каталог : $wwwdir</if>
<if $dbname>База данных MySQL :  $dbname</if>
<if $dbuser>Пользователь базы данных MySQL : $dbuser</if>
<if $dbhost>Hostname базы данных MySQL : $dbhost</if>
<if $dbpass>Пароль базы данных MySQL : $dbpass</if>
<if $cron>Задание Cron : $cron</if>
Время установки : $time
Время удаления : $rem_time

Вы можете отписаться и не получать больше подобные emails уведомления зайдя в контрольную панель cPanel -> '.APP.' -> Email Settings.
Если у Вас возникнут вопросы, пожалуйста, обратитесь в нашу поддержку.
';

// Cron Template Variable
$l['mail_cron_sub'] = ' Есть важные обновления';
$l['changelog'] = '== Журнал изменений для';
$l['mail_cron'] = 'Здравствуйте,

Спешим сообщить, что ваша версия уже устарела.
По соображениям безопасности необходимо установить обновления как можно скорее. 

Доступны следующие обновления:

$installation

Чтобы применить данные обновления, пожалуйста, зайдите в  cPanel -> '.APP.' -> Установки.


$changelog

From '.APP.' Cron Jobs $serverip

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings

';

// editdetail Template Variable
$l['mail_editdetail_sub'] = 'Детали установки $scriptname были успешно изменены';
$l['mail_editdetail'] = 'Здравствуйте, 

Спешим сообщить, что детали установки $scriptname были успешно изменены. Ниже представлены измененые детали:
Путь : $path
URL : $url
<if $datadirectory>Каталог данных : $datadirectory</if>
<if $wwwdir>Веб каталог : $wwwdir</if>
<if $wwwurl>Веб URL : $wwwurl</if>
<if $dbname>Имя базы данных MySQL : $dbname</if>
<if $dbuser>Пользователь базы данных MySQ L: $dbuser</if>
<if $dbhost>Hostname базы данных MySQL : $dbhost</if>
<if $dbpass>Пароль базы данных MySQL : $dbpass</if>
<if $cron>Задание Cron : $cron</if>
<if $disable_notify_update>Получать уведомления : $disable_notify_update</if>
<if $eu_auto_upgrade>Автоматическое обновление : $eu_auto_upgrade</if>
<if $auto_backup>Автоматическое создание резервных копий : $auto_backup</if>
<if $auto_backup_rotation>Частота создания резервных копий : $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
Время установки : $time
Время внесения изменений : $edit_time

Вы можете отписаться и не получать больше подобные emails уведомления зайдя в контрольную панель cPanel -> '.APP.' -> Email Setting.

Если у Вас возникнут вопросы, пожалуйста, обратитесь в нашу поддержку.
';

// Backup Language Strings
$l['mail_backup_sub'] = 'Резервная копия $scriptname создана успешно';
$l['mail_backup'] = 'Здравствуйте, 

Рады сообщить, что резервная копия $scriptname была успешно создана.
Детали представлены ниже :
Installation Путь : $path
Installation URL : $url
<if $backup_location>Backup Location : $backup_location</if>
Путь резервной копии : $backup_file
<if $backup_note>Данные резервной копии : $backup_note</if>

Вы можете получить доступ к резервной копии в разделе "Резервные копии" в меню '.APP.'

Вы можете отписаться и не получать больше подобные emails уведомления зайдя в контрольную панель cPanel -> '.APP.' -> Email Setting.
Если у Вас возникнут вопросы, пожалуйста, обратитесь в нашу поддержку.
';

$l['mail_backup_fail_sub'] = 'Создание резервной копии $scriptname завершилось неуспешно';
$l['mail_backup_fail'] = 'Здравствуйте,

Вынуждены сообщить, что создание резервной копии $scriptname завершилось неуспешно.
Детали резервной копии :
Installation Путь : $path
Installation URL : $url
Путь резервной копии : $backup_file

Возникла следующая ошибка :
$error

Пожалуйста, повторите процесс создания резервной копии через несколько минут.

Вы можете отписаться и не получать больше подобные emails уведомления зайдя в контрольную панель cPanel -> '.APP.' -> Email Settings.

Если у Вас возникнут вопросы, пожалуйста, обратитесь в нашу поддержку.';


// Restore Language Strings
$l['mail_restore_sub'] = 'Восстановление резервной копии $scriptname завершено успешно';
$l['mail_restore'] = 'Здравствуйте,

Рады сообщить, что восстановление резервной копии $scriptname завершено успешно.

Ниже представлены детали операции :
Installation Путь : $path
Installation URL : $url

Вы можете отписаться и не получать больше подобные emails уведомления зайдя в контрольную панель cPanel -> '.APP.' -> Email Settings.

Если у Вас возникнут вопросы, пожалуйста, обратитесь в нашу поддержку.';

$l['mail_restore_fail_sub'] = 'Восстановление резервной копии $scriptname не было успешно завершено';
$l['mail_restore_fail'] = 'Здравствуйте,

Вынуждены сообщить, что восстановление резервной копии $scriptname не было успешно завершено.

Детали представлены ниже:
Installation Путь : $path
Installation URL : $url

Возникла следующая ошибка
$error

Пожалуйста, повторите попытку восстановить резервную копию спустя несколько минут.

Вы можете отписаться и не получать больше подобные emails уведомления зайдя в контрольную панель cPanel -> '.APP.' -> Email Settings.

Если у Вас возникнут вопросы, пожалуйста, обратитесь в нашу поддержку.
';

// Restore Background Language Strings
$l['mail_restore_bg_sub'] = 'Восстановление резервной копии $scriptname началось - $sn';
$l['mail_restore_bg'] = 'Здравствуйте,

Восстановление резервной копии $scriptname началось в фоновом режиме. Вы получите уведомление на электронную почту отдельным письмом о том, что процесс восстановления завершен.

Детали представлены ниже:
Installation Путь : $path
Installation URL : $url

Вы можете отписаться и не получать больше подобные emails уведомления зайдя в контрольную панель cPanel -> '.APP.' -> Email Settings.

Если у Вас возникнут вопросы, пожалуйста, обратитесь в нашу поддержку.
';

// Backup Background Language Strings
$l['mail_backup_bg_sub'] = 'Backup of your $scriptname installation started in background';
$l['mail_backup_bg'] = 'The backup of your $scriptname has started in background. You will receive an email notification about the status once the backup process is completed.
The details are as follows :
Installation Path : $path
Installation URL : $url

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// import Language Strings
$l['mail_import_sub'] = 'Импорт $scriptname  был завершен успешно';
$l['mail_import'] = 'Здравствуйте,

Рады сообщить, что импорт $scriptname  был завершен успешно.

Детали операции представлены ниже:
Installation Путь : $path
Installation URL : $url

Вы можете отписаться и не получать больше подобные emails уведомления зайдя в контрольную панель cPanel -> '.APP.' -> Email Settings.

Если у Вас возникнут вопросы, пожалуйста, обратитесь в нашу поддержку.
';

// import fail Language Strings
$l['mail_import_fail_sub'] = 'Импорт $scriptname не был успешно завершен';
$l['mail_import_fail'] = 'Здравствуйте,

Вынуждены сообщить, что импорт $scriptname не был успешно завершен. 

Детали операции представлены ниже:
Installation Путь : $path
Installation URL : $url

Возникли следующие ошибки:
$error

Попробуйте, пожалуйста, повторить попытку импорта спустя несколько минут.

Вы можете отписаться и не получать больше подобные emails уведомления зайдя в контрольную панель cPanel -> '.APP.' -> Email Settings.

Если у Вас возникнут вопросы, пожалуйста, обратитесь в нашу поддержку.
';

// Import Background Language Strings
$l['mail_import_bg_sub'] = 'Импорт $scriptname начался';
$l['mail_import_bg'] = 'Здравствуйте, 

Хотим сообщить, что импорт $scriptname начался в фоновом режиме. Вы получите отдельное письмо на электронную почту о том, что процесс импорта завершен.

Детали операции представлены ниже:
Installation Путь : $path
Installation URL : $url

Вы можете отписаться и не получать больше подобные emails уведомления зайдя в контрольную панель cPanel -> '.APP.' -> Email Setting.

Если у Вас возникнут вопросы, пожалуйста, обратитесь в нашу поддержку.
';


// Install Template Vaiable CLASSES
$l['mail_install_classes_sub'] = 'Новая установка $classesname';
$l['mail_install_classes'] = 'Здравствуйте,

Рады сообщить, что новая установка $classesname $version была успешно завершена.  
Детали установки представлены ниже:
Путь : $path
<if $time>Время установки : $time</if>

Вы можете отписаться и не получать больше подобные e-mail уведомления зайдя в контрольную панель cPanel -> '.APP.' -> Email Settings.
Если у Вас возникнут вопросы, пожалуйста, обратитесь в нашу поддержку.';

////////////////////////
// ADMIN UPGRADE - 6
////////////////////////

// Auto Upgrade Email For Admin (successful)
$l['mail_adminupgrade_success_admin_sub'] = 'Версия $scriptname для пользователя $user была успешно обновлена';
$l['mail_adminupgrade_success_admin'] = 'Здравствуйте, 

Рады сообщить, что произошло успешное обновление $scriptname для пользователя $user до последней версии.

Ниже представлены детали установки:
Installation URL : $url
Новая версия : $version
Старая версия : $oldversion

Вы можете отписаться и не получать больше подобные emails уведомления зайдя в контрольную панель cPanel -> '.APP.' -> Email Settings.
Если у Вас возникнут вопросы, пожалуйста, обратитесь в нашу поддержку.';

// Auto Upgrade Email For Admin (Failed) but restored successfully.
$l['mail_adminupgrade_fail_admin_sub'] = 'Процесс обновления $scriptname не был успешно завершен и выполнено восстановление из резервной копии';
$l['mail_adminupgrade_fail_admin'] = 'Здравствуйте,

Вынуждены сообщить, что процесс обновления $scriptname не был успешно завершен и произошло восстановление из резервной копии.

Средствами Softaculous была создана резервная копия перед началом обновления. Благодаря этому после неудачного обновления было выполнено восстановление созданной резервной копии.

Детали обновления:

Installation URL : $url
Текущая версия : $oldversion
Последняя доступная версия : $version
Ошибки, которые возникли в процесс обновления : $upgrade_error

Вы можете отписаться и не получать больше подобные e-mail уведомления зайдя в контрольную панель cPanel -> '.APP.' -> Email Setting.

Если у Вас возникнут вопросы, пожалуйста, обратитесь в нашу поддержку.';

// Auto Upgrade Email for user (successful)
$l['mail_adminupgrade_success_user_sub'] = 'Версия $scriptname  была успешно обновлена системным администратором';
$l['mail_adminupgrade_success_user'] = 'Здравствуйте,

Рады сообщить, что системный администратор успешно выполнил обновление $scriptname до последней версии. 

Детали операции :
Installation URL : $url
Последняя версия : $version
Старая версия : $oldversion

Вы можете отписаться и не получать больше подобные emails уведомления зайдя в контрольную панель cPanel -> '.APP.' -> Email Settings.
Если у Вас возникнут вопросы, пожалуйста, обратитесь в нашу поддержку.';

// Auto Upgrade Email for user (fail) but restored successfully
$l['mail_adminupgrade_fail_user_sub'] = 'Обновление $scriptname завершилось неудачно';
$l['mail_adminupgrade_fail_user'] = 'Здравствуйте,

Вынуждены сообщить, что системный администратор попытался обновить $scriptname 
Однако, процесс не был завершен успешно.

Автоматически была создана резервная копия до процесса обновления. Восстановление из данной резервной копии завершено успешно.

Детали операции:
Installation URL : $url
Текущая версия : $oldversion
Последняя версия : $version
Ошибки, которые возникли во время обновления :
Ошибка : $upgrade_error

Вы можете отписаться и не получать больше подобные emails уведомления зайдя в контрольную панель cPanel -> '.APP.' -> Email Setting.

Если у Вас возникнут вопросы, пожалуйста, обратитесь в нашу поддержку.';

// ALL IS FAILED (Upgrade and RESTORE toooo) (FOR ADMIN)
$l['mail_adminupgrade_restore_fail_admin_sub'] = 'Процесс обновления $scriptname не был успешно завершен для пользователя $user';
$l['mail_adminupgrade_restore_fail_admin'] = 'Здравствуйте, 

Вынуждены сообщить, что процесс обновления $scriptname не был успешно завершен. 
Была создана автоматическая резервная копия до процесса обновления. Однако процесс восстановления из резервной копии также не был корректно завершен.

Необходимо выполнить ручной процесс восстановления. Инструкция об этом содержится по ссылке: http://www.softaculous.com/docs/Manual_Restore

Ниже представлены детали, которые могут потребоваться для ручного восстановления :
Путь к резервной копии: $backup_path
Путь установочного файла: $softpath
<if $dbname>Имя базы данных: $dbname</if>
<if $dbuser>Имя пользователя базы данных: $dbuser</if>
<if $dbpass>Пароль базы данных: $dbpass</if>
<if $dbhost>Hostname базы данных: $dbhost</if>

Installation URL : $url
Текущая версия : $oldversion
Последняя версия : $version
<if $upgrade_error>
Ошибки, которые возникли во время обновления :
Ошибка : $upgrade_error
</if>
<if $error>
Ошибки, которые возникли во время восстановления из резервной копии:
Ошибка: $error
</if>

The '.APP.' team is available for help as well. You can contact the '.APP.' Team (support@'.strtolower(APP).'.com) if you face any problems.
';

// ALL IS FAILED (Upgrade and RESTORE toooo) (FOR USER)
$l['mail_adminupgrade_restore_fail_user_sub'] = 'Обновление $scriptname не было успешно завершено';
$l['mail_adminupgrade_restore_fail_user'] = 'Здравствуйте,

Вынуждены сообщить, что системный администратор предпринял попытку обновить $scriptname 
Однако процесс обновления не был успешно завершен.
Автоматически была создана резервная копия до процесса обновления, но, к сожалению, восстановление из резервной копии также завершилось неудачно.


Необходимо выполнить ручной процесс восстановления. Инструкция об этом содержится по ссылке: http://www.softaculous.com/docs/Manual_Restore


Ниже представлены детали, которые могут потребоваться для ручного восстановления :

Путь к резервной копии : $backup_path
Путь установочного файла: $softpath
<if $dbname>Имя базы данных: $dbname</if>
<if $dbuser>Имя пользователя базы данных: $dbuser</if>
<if $dbpass>Пароль базы данных: $dbpass</if>
<if $dbhost>Hostname базы данных: $dbhost</if>

Installation URL : $url
Текущая версия : $oldversion
Последняя версия : $version
<if $upgrade_error>
Ошибки, которые возникли во время процесса обновления :
Ошибка : $upgrade_error
</if>
<if $error>
Ошибки, которые возникли во время процесса восстановления из резервной копии :
Ошибка : $error
</if>

The '.APP.' team is available for help as well. You can contact the '.APP.' Team (support@'.strtolower(APP).'.com) if you face any problems.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

////////////////////////
// USER UPGRADE - 3
////////////////////////

// When upgraded by user successfully (By user)
$l['mail_userupgrade_success_user_sub'] = 'Версия $scriptname была успешно обновлена';
$l['mail_userupgrade_success_user'] = 'Здравствуйте,

Рады сообщить, что произошло успешное обновление $scriptname до последней версии.

Детали операции :
Installation URL : $url
Последняя версия : $version
Старая версия : $oldversion

Вы можете отписаться и не получать больше подобные e-mail уведомления зайдя в контрольную панель cPanel -> '.APP.' -> Email Settings.

Если у Вас возникнут вопросы, пожалуйста, обратитесь в нашу поддержку.
';

// If any error occured while upgrading, (By user)
$l['mail_userupgrade_fail_user_sub'] = 'Обновление $scriptname не было успешно завершено';
$l['mail_userupgrade_fail_user'] = 'Здравствуйте,

Вынуждены сообщить, что процесс обновления $scriptname не был успешно завершен.

Детали процесса обновления :
Installation URL : $url
Текущая версия : $oldversion
Последняя версия : $version
Ошибка : $upgrade_error

Вы можете отписаться и не получать больше подобные emails уведомления зайдя в контрольную панель cPanel -> '.APP.' -> Email Settings.
Если у Вас возникнут вопросы, пожалуйста, обратитесь в нашу поддержку.
';

// If UPGRADE and RESTORE failed while upgrading, (By user)
$l['mail_userupgrade_restore_fail_user_sub'] = 'Обновление $scriptname не было успешно завершено';
$l['mail_userupgrade_restore_fail_user'] = 'Здравствуйте,

Вынуждены сообщить, что процесс обновления $scriptname не был успешно завершен.
Автоматически была создана резервная копия до процесса обновления. Однако восстановление резервной копии также завершилось неудачно.


Необходимо выполнить ручной процесс восстановления. Инструкция об этом содержится по ссылке: http://www.softaculous.com/docs/Manual_Restore

Детали операции :
Installation URL: $url
Текущая версия : $oldversion
Последняя версия : $version
<if $upgrade_error>
Ошибки, которые возникли во время обновления :
Ошибка : $upgrade_error
</if>
<if $error>
Ошибки, которые возникли во время восстановления резервной копии :
Ошибка : $error
</if>

The '.APP.' team is available for help as well. You can contact the '.APP.' Team (support@'.strtolower(APP).'.com) if you face any problems.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

////////////////////////
// AUTO UPGRADE - 3
////////////////////////

// When AUTOUPGRADED successfully
$l['mail_autoupgrade_success_user_sub'] = 'Версия $scriptname автоматически обновлена';
$l['mail_autoupgrade_success_user'] = 'Здравствуйте,

Рады сообщить, что произошло автоматическое обновление $scriptname до последней версии.

Детали обновления :
Installation URL : $url
Последняя версия : $version
Старая версия: $oldversion

Вы можете отписаться и не получать больше подобные e-mail уведомления зайдя в контрольную панель cPanel -> '.APP.' -> Email Setting.
Если у Вас возникнут вопросы, пожалуйста, обратитесь в нашу поддержку.
';

// When AUTOUPGRADE FAILED
$l['mail_autoupgrade_fail_user_sub'] = 'Автоматическое обновление $scriptname не было успешно завершено';
$l['mail_autoupgrade_fail_user'] = 'Здравствуйте,

Вынуждены сообщить, что автоматическое обновление $scriptname не было успешно завершено.

Ниже указаны детали обновления:
Installation URL : $url
Текущая версия : $oldversion
Последняя версия : $version
Ошибка : $upgrade_error
Вы можете отписаться и не получать больше подобные e-mail уведомления зайдя в контрольную панель cPanel -> '.APP.' -> Email Setting.
Если у Вас возникнут вопросы, пожалуйста, обратитесь в нашу поддержку.';

// If UPGRADE and RESTORE failed while AUTOUPGRADING
$l['mail_autoupgrade_restore_fail_user_sub'] = 'Автоматическое обновление $scriptname не было успешно завершено';
$l['mail_autoupgrade_restore_fail_user'] = 'Здравствуйте,

Вынуждены сообщить, что автоматический процесс обновления $scriptname не был корректно завершен. 
Была создана резервная копия до процесса обновления. Однако процесс восстановления из резервной копии также не был успешно завершен.

Необходимо выполнить ручной процесс восстановления. Инструкция об этом содержится по ссылке: http://www.softaculous.com/docs/Manual_Restore

Детали операции :
Installation URL : $url
Текущая версия : $oldversion
Последняя версия : $version
<if $upgrade_error>
Ошибки, которые возникли во время обновления :
Ошибка : $upgrade_error
</if>
<if $error>
Ошибки, которые возникли во время восстановления резервной копии :
Ошибка : $error
</if>

The '.APP.' team is available for help as well. You can contact the '.APP.' Team (support@'.strtolower(APP).'.com) if you face any problems.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

////////////////////////
// PRE UPGRADE CHECK 
////////////////////////

// If pre upgradation check fails while AUTOUPGRADE (FOR USER)
$l['mail_autoupgrade_precheck_fail_sub'] = 'Проверка совместимости перед автоматическим обновлением CMS $scriptname не выполнена';
$l['mail_autoupgrade_precheck_fail'] = 'Здравствуйте,

Вынуждены сообщить, что автоматический процесс обновления не может быть завершен, так как при проверке совместимости возникла ошибка:

Installation URL : $url
Текущая версия : $oldversion
Последняя версия : $version
<if $upgrade_error>
Ошибка : $upgrade_error
</if>
<if $error>
Ошибка : $error
</if>

Вы можете отписаться и не получать больше подобные emails уведомления зайдя в контрольную панель cPanel -> '.APP.' -> Email Setting.
Если у Вас возникнут вопросы, пожалуйста, обратитесь в нашу поддержку.
';

/////////////////////////////////
// Backup Failed CLI UPGRADE
/////////////////////////////////

// If a backup fails before AUTO UPGRADING an installation (FOR USER)
$l['mail_autoupgrade_backup_fail_sub'] = 'Создание резервной копии перед автоматическим обновлением $scriptname завершено неудачно';
$l['mail_autoupgrade_backup_fail'] = 'Здравствуйте,

Вынуждены сообщить, что создание резервной копии $scriptname не было успешно завершено. В связи с этим процесс автоматического обновления был отменен.

Детали операции :
Installation URL : $url
Текущая версия : $oldversion
Последняя версия : $version
Ошибка : $error

Вы можете отписаться и не получать больше подобные emails уведомления зайдя в контрольную панель cPanel -> '.APP.' -> Email Settings.
Если у Вас возникнут вопросы, пожалуйста, обратитесь в нашу поддержку
';

$l['err_openconfig'] = 'Неввозможно открыть конфигурационный файл';
$l['err_writeconfig'] = 'Невозможно редактировать конфигурационный файл';

$l['classes_con_failed'] = 'Ошибка : Не удалось подключиться к серверу.';
$l['cl_ratings'] = 'Рейтинги';
$l['cl_author'] = 'Автор';
$l['cl_license'] = 'Лицензии';
$l['cl_version'] = 'Версия';
$l['cl_show_files'] = 'Показать файлы';
$l['cl_install_but'] = 'Установить';
$l['expand_view'] = 'Щелкните для полноэкранного просмотра';
$l['collapse_view'] = 'Щелкните для просмотра в окне';
$l['email_off_notice'] = '<b>NOTE : Email-уведомления отключены и Вы не будете получать писем.</b>';

// Add User Language Strings
$l['mail_add_user_sub'] = 'Добро пожаловать в удаленный установщик Softaculous Remote Installer';
$l['mail_add_user'] = 'You can now successfully login into Softaculous Remote Installer.
Детали доступа следующие :
Пользователь				: $username
Ключ API  				: $api_key
Пароль API 			: $api_pass
Разрешенное количество пользователей : $number_of_users';

// Requirement parser languages
$l['req_ver_nf'] = 'Требуется &soft-1; версии &soft-2; &soft-3; И найденная версия : ';
$l['req_ext_nf'] = 'Требуется &soft-1; расширение не найдено :';
$l['req_func_nf'] = 'Требуется &soft-1; функция не найдена';
$l['req_ext_ver'] = 'Требуется &soft-1; &soft-2; аерсия расширения &soft-3; &soft-4; НО найдено &soft-5;';
$l['gt'] = 'больше';
$l['lt'] = 'меньше';
$l['ge'] = 'больше равно';
$l['le'] = 'меньше равно';
$l['eq'] = 'равно';
$l['ne'] = 'should not be equal to';

// Automated Backup Language Strings
$l['mail_auto_backup_sub'] = 'Автоматическое создание резервной копии $scriptname завершено успешно';
$l['mail_auto_backup'] = 'Здравствуйте,

Рады сообщить, что автоматическое создание резервной копии $scriptname завершено успешно.

Детали операции :
Installation Путь : $path
Installation URL : $url
Путь файла резервной копии : $backup_file
<if $backup_location>Backup Location : $backup_location</if>
Доступ к резервной копии есть в меню '.APP.', раздел "Резервные копии" (Backups Section).

Вы можете отписаться и не получать больше подобные emails уведомления зайдя в контрольную панель cPanel -> '.APP.' -> Настройки почты.

Если у Вас возникнут вопросы, пожалуйста, обратитесь в нашу поддержку.
';

$l['mail_auto_backup_fail_sub'] = 'Создание автоматической резервной копии $scriptname не было успешно завершено';
$l['mail_auto_backup_fail'] = 'Здравствуйте,

Вынуждены сообщить, что создание автоматической резервной копии $scriptname не было успешно завершено.

Детали операции :
Installation Путь : $path
Installation URL : $url
Путь файла резервной копии : $backup_file
<if $backup_location>Backup Location : $backup_location</if>
Возникли следующие ошибки :
$error

Вы можете отписаться и не получать больше подобные emails уведомления зайдя в контрольную панель cPanel -> '.APP.' -> Настройки почты.

Если у Вас возникнут вопросы, пожалуйста, обратитесь в нашу поддержку.
';

// Email for sending the list of scripts which does not meet the requirements.
$l['mail_script_requirement_sub'] = 'Журнал несоответствующих требованиям скриптов';
$l['mail_script_requirement'] = 'Ниже представлен список скриптов, которые не соответствуют минимальным требованиям на Вашем сервере и, возможно, работать не будут.
Детали :

$failed_req

Note : Если Вы меняете версию PHP во время работы (т.е. используете CageFS, hive, .htaccess etc.), можете игнорировать описанные выше предупреждения об ошибках PHP версии.
';

// Softpanel Language Strings
$l['no_www_domain'] = 'Пожалуйста, закройте все '.$globals['sn'].' страницы и выйдите из контрольной панели, используя кнопку Выход.
После этого Вы можете войти в контрольную панель снова и использовать '.$globals['sn'].'.';

$l['install_tweet'] = 'Я только что установил #[[SCRIPTNAME]] на [[softurl]] через #[[APP]] #[[TYPE]]';
$l['install_tweet_classes'] = 'Я только что установил  #[[SCRIPTNAME]] через #[[APP]] #[[TYPE]]';
$l['upgrade_tweet'] = 'Я только что обновил #[[SCRIPTNAME]] на [[softurl]] через #[[APP]] #[[TYPE]]';
$l['clone_tweet'] = 'Я только что скопировал #[[SCRIPTNAME]] на [[softurl]] через #[[APP]] #[[TYPE]]';


// month strings
$l['January'] = 'Январь';
$l['February'] = 'Февраль';
$l['March'] = 'Март';
$l['April'] = 'Апрель';
$l['May'] = 'Май';
$l['June'] = 'Июнь';
$l['July'] = 'Июль';
$l['August'] = 'Август';
$l['September'] = 'Сентябрь';
$l['October'] = 'Октябрь';
$l['November'] = 'Ноябрь';
$l['December'] = 'Декабрь';

// Mail templates for webuzo backup
$l['mail_webuzo_backup_sub'] = '$type резервная копия была завершена успешно';
$l['mail_webuzo_backup'] = 'Процесс резервного копирования закончен успешно.
Файл резервной копии создан с именем:
$filename

С уважением,
Webuzo Team';
$l['mail_webuzo_backup_fail_sub'] = '$type резервная копия не была создана';
$l['mail_webuzo_backup_fail'] = 'Резервное копирование не было завершено успешно.
Возникли следующие ошибки:
$error

С уважением,
Webuzo Team';
$l['mail_webuzo_restore_sub'] = '$type восстановление завершено успешно';
$l['mail_webuzo_restore'] = 'Восстановление завершено успешно.

Восстановленный файл:
$filename

С уважением,
Webuzo Team';
$l['mail_webuzo_restore_fail_sub'] = '$type восстановление не было завершено';
$l['mail_webuzo_restore_fail'] = 'В процессе восстановления возникли ошибки и он не был завершен.
Возникли следующие ошибки:
$error

С уважением,
Webuzo Team';

// Staging Template Vaiable
$l['mail_staging_sub'] = 'Staging of $scriptname';
$l['mail_staging'] = 'Your Staging of $scriptname $version has been completed successfully.

Your live installation details :
Original Path : $live_path
Original URL : $live_url

Your staging installation details :
Path : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>Data Directory : $datadirectory</if>
<if $dbname>MySQL Database : $dbname</if>
<if $dbuser>MySQL DB User : $dbuser</if>
<if $dbhost>MySQL DB Host : $dbhost</if>
<if $dbpass>MySQL DB Password : $dbpass</if>
<if $cron>Cron Job : $cron</if>
<if $time>Time of Installation : $time</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings';

// Pushtolive Template Vaiable
$l['mail_pushtolive_sub'] = 'Pushing $scriptname to live';
$l['mail_pushtolive'] = 'Pushing your $scriptname site $version to live has been completed successfully.

Your live installation details :
Original Path : $live_path
Original URL : $live_url

Your staging installation details :
Path : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>Data Directory : $datadirectory</if>
<if $dbname>MySQL Database : $dbname</if>
<if $dbuser>MySQL DB User : $dbuser</if>
<if $dbhost>MySQL DB Host : $dbhost</if>
<if $dbpass>MySQL DB Password : $dbpass</if>
<if $cron>Cron Job : $cron</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings';

/////////////////////////////////
// Backup Failed CLI UPGRADE of Plugins/Themes
/////////////////////////////////

// If a backup fails before AUTO UPGRADING Plugins/Themes of an installation (FOR USER)
$l['mail_autoupgrade_extras_backup_fail_sub'] = 'Backup process failed before auto upgrading plugins/theme of your $scriptname installation';
$l['mail_autoupgrade_extras_backup_fail'] = 'The backup process of plugins/theme of your $scriptname installation has failed. So the auto upgrade plugins/theme process was not performed.
The details are as follows :
Installation URL : $url
Error : $error

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

/////////////////////////////////
// Upgrade Plugins/Themes By USER
/////////////////////////////////

// Plugins/Theme when upgraded by user successfully (By user)
$l['mail_userupgrade_extras_success_user_sub'] = 'Plugins/Theme of $scriptname installation upgraded successfully';
$l['mail_userupgrade_extras_success_user'] = 'Plugins/Theme of your $scriptname installation have been successfully upgraded to the latest version.
The details are as follows :
Installation URL : $url

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// If UPGRADE and RESTORE Plugins/Theme failed while upgrading, (By user)
$l['mail_userupgrade_extras_restore_fail_user_sub'] = 'Upgrade of Plugins/Theme of your $scriptname installation failed';
$l['mail_userupgrade_extras_restore_fail_user'] = 'The upgrade of plugins/theme of your $scriptname installation has failed.
A backup had been created before upgrading, but the restore process also failed !

It will require a manual restore. Guide for the manual restore is available here :
http://www.softaculous.com/docs/Manual_Restore

The details are as follows :
Installation URL : $url
<if $upgrade_error>
The Upgrade error details are as follows :
Error : $upgrade_error
</if>
<if $error>
The Restore error details are as follows :
Error : $error
</if>

The '.APP.' team is available for help as well. You can contact the '.APP.' Team (support@'.strtolower(APP).'.com) if you face any problems.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// If any error occured while upgrading plugins/theme, (By user)
$l['mail_userupgrade_extras_fail_user_sub'] = 'Upgrade of plugins/theme of your $scriptname installation failed';
$l['mail_userupgrade_extras_fail_user'] = 'The upgrade of plugins/theme of your $scriptname installation has failed.
The details are as follows :
Installation URL : $url
Error : $upgrade_error

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

/////////////////////////////////
// Auto Upgrade Plugins/Themes
/////////////////////////////////

// When AUTOUPGRADED Plugins/Theme successfully
$l['mail_autoupgrade_extras_success_user_sub'] = 'Plugins/Theme of $scriptname Installation Auto Upgraded Successfully';
$l['mail_autoupgrade_extras_success_user'] = 'Plugins/Theme of your $scriptname installation have been successfully auto upgraded to the latest version.
The details are as follows :
Installation URL : $url
<if $plugins_updated>
Following Active Plugins were upgraded :
$plugins_updated
</if>
<if $theme_updated>
Following Active Theme was upgraded :
$theme_updated
</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// If UPGRADE and RESTORE of Plugins/Theme failed while AUTOUPGRADING
$l['mail_autoupgrade_extras_restore_fail_user_sub'] = 'Auto Upgrade of plugins/theme of your $scriptname installation failed';
$l['mail_autoupgrade_extras_restore_fail_user'] = 'The auto upgrade  of plugins/theme of your $scriptname installation has failed.
A backup had been created before upgrading, but the restore process also failed !

It will require a manual restore. Guide for the manual restore is available here :
http://www.softaculous.com/docs/Manual_Restore

The details are as follows :
Installation URL : $url
<if $upgrade_error>
The Upgrade error details are as follows :
Error : $upgrade_error
</if>
<if $error>
The Restore error details are as follows :
Error : $error
</if>

The '.APP.' team is available for help as well. You can contact the '.APP.' Team (support@'.strtolower(APP).'.com) if you face any problems.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// When AUTOUPGRADE Plugins/Theme FAILED
$l['mail_autoupgrade_extras_fail_user_sub'] = 'Auto Upgrade of plugins/theme of your $scriptname installation failed';
$l['mail_autoupgrade_extras_fail_user'] = 'The auto upgrade of plugins/theme of your $scriptname installation has failed.
The details are as follows :
Installation URL : $url
Error : $upgrade_error

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';


// clone fail Language Strings
$l['mail_clone_fail_sub'] = 'Failed : Clone of your $scriptname installation';
$l['mail_clone_fail'] = 'The clone of your $scriptname installation did not complete successfully.
The details are as follows :
Installation Path : $path
Installation URL : $url

The following error occured :
$error

Please try to import the installation again after some time.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// clone fail Language Strings
$l['mail_staging_fail_sub'] = 'Failed : Staging of your $scriptname installation';
$l['mail_staging_fail'] = 'The staging of your $scriptname installation did not complete successfully.
The details are as follows :
Installation Path : $path
Installation URL : $url

The following error occured :
$error

Please try to import the installation again after some time.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

$l['mail_upgrade_fail_sub'] = 'Failed : Upgrade of your $scriptname installation';
$l['mail_upgrade_fail'] = 'The upgrade of your $scriptname installation did not complete successfully.
The details are as follows :
Installation Path : $path
Installation URL : $url

The following error occured :
$error

Please try to upgrade again after some time.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

$l['invalid_resp'] = 'Invalid response received ';

