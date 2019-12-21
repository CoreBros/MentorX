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

$l['user_data_error_t'] = 'Потребителски грешка в базата данни';
$l['user_data_error'] = APP.' не е в състояние да заредите вашата информация. Моля докладвайте за това на администратора на сървъра!';

$l['remote_licence_t'] = 'Invalid License';
$l['remote_licence'] = 'You are not using a valid license. Please report this to the server administrator!';

$l['enterprise_licence_t'] = 'Invalid License';
$l['enterprise_licence'] = 'You are not using a valid license. Please report this to the server administrator!';

$l['no_license'] = 'Лицензния файл не може да бъде намерен! Моля докладвайте за това на администратора на сървъра.';

$l['today'] = '<b>Днес</b> в ';//The today string for showing todays post time

$l['init_theme_error_t'] = 'Тема грешка';//Title
$l['init_theme_error'] = 'Не може да се зареди файла от тема - &soft-1;.';

$l['init_theme_func_error_t'] = 'Грешка при функция на тема';//Title
$l['init_theme_func_error'] = 'Не може да заради функции от тема &soft-1;.';

$l['disable_softaculous_t'] = 'Softaculous Изключено';
$l['disable_softaculous'] = 'Softaculous е изключен за този потребител. Моля свържете се с системния администратор.';

$l['load_theme_settings_error'] = 'Не може да се зареди файлът с настройките за тема.';

$l['view_guide'] = 'View Guide';
$l['max_db_length'] = 'The database name cannot be greater than &soft-1; characters. Please choose a shorter database name.';


//Error Handle Function
$l['following_errors_occured'] = 'Следните грешки бяха открити';

//Success Message Function
$l['following_message'] = 'Следното съобщение е върнато';

//Major Error Function
$l['fatal_error'] = 'Фатална грешка';
$l['following_fatal_error'] = 'Възникна следната грешка';

//Message Function
$l['soft_message'] = APP.' Съобщение';
$l['following_soft_message'] = 'Следното съобщение е върнато';

//Update Softwares
$l['no_soft_found'] = 'Софтуерът не е открит..... Има нужда от актуализация';
$l['ver_not_match'] = 'Версиите не се съвпадат..... Има нужда от актуализация';
$l['ver_match'] = 'Настоящата версия е последна. Продължете';
$l['del_prev_files'] = 'Изтриване на предишните файлове...... Направено';
$l['fetch_latest'] = 'Извличане на последен файл......';
$l['error_fetch_latest'] = 'Не може да се извлече последния файл...... Продължете';
$l['error_save_latest'] = 'Не може да запази последния файл...... Продължете';
$l['got_latest'] = 'Запази последния файл';
$l['unzip_latest'] = 'Разархивирате на файлове......';
$l['error_unzip_latest'] = 'Грешка при разархивирането...... Продължете';
$l['unzipped_latest'] = 'Разархивирането успешно';

//Update Softaculous
$l['getting_info'] = 'Търсене на информация......';
$l['error_getting_latest'] = 'Не може да се получи информация...... Изоставяне';
$l['got_info'] = 'Вземи информация';
$l['manual_mode'] = 'Новата версия на '.APP.' изисква ръчно внимание...... Изоставяне';
$l['no_updates'] = 'Текущата версия е последна...... Продължете';
$l['fetch_upgrade'] = 'Извличане на ъпгрейд......';
$l['error_fetch_upgrade'] = 'Не може да се извлече файла за ъпгрейд ...... Изоставяне';
$l['error_save_upgrade'] = 'Не може да се запази файла за ъпгрейд...... Изоставяне';
$l['got_upgrade'] = 'Файла за ъпгрейд е запазен';
$l['unzip_upgrade'] = 'Разархивиране на файлове......';
$l['error_unzip_upgrade'] = 'Грешка при разархивирането...... Изоставяне';
$l['unzipped_upgrade'] = 'Разархивирането е успешно';
$l['md5_check'] = 'MD5 проверката е успешна';
$l['err_md5_check'] = 'MD5 проверката за тези файлове не е успешна';
$l['err_md5_file'] = ' не съществува';

//MySQL Errors
$l['err_selectmy'] = 'MySQL база данни не може да бъде избран.';
$l['err_myconn'] = 'MySQL връзката не може да бъде установена.';
$l['err_makequery'] = 'Не може да направи заявка';
$l['err_mynum'] = 'MySQL Грешка No';
$l['err_myerr'] = 'MySQL Грешка';
$l['err_no_db_file'] = 'The database import file does not exist';
$l['err_no_open_db_file'] = 'Could not open the database import file';

//Importing Errors
$l['imp_wrong_softdomain'] = 'Пътят на домейна &soft-1; не може да бъде намерен.';
$l['imp_softpath_wrong'] = 'Пътят на &soft-1; е грешен или не съществува.';
$l['imp_ins_exists'] = '&soft-1; вече е инсталиран на &soft-2; по нашите записи и се поддържат от нас!';
$l['imp_no_func'] = 'Вносът функция за &soft-1; не може да бъде зареден.';
$l['imp_err'] = 'Имаше някои грешки докато се внасяше софтуера инсталиран в&soft-1;';
$l['err_query'] = 'Could not execute the query';

$l['invalid_search_input'] = 'Invalid Theme Search character. Only alphanumeric characters, underscore and hyphen are allowed.';

//hf_theme.php
$l['root_login'] = 'Logged in as ROOT';
$l['welcome'] = 'Добре дошъл';
$l['logout'] = 'Изход';
$l['page_time'] = 'Страницата е създадена за';
$l['times_are'] = 'Всички времена са GMT';
$l['time_is'] = 'В момента е';
$l['no_script_found'] = 'No such Script found!';
$l['webuzo_sysapps_disabled'] = 'This functionality has been disabled from the Webuzo Admin Panel';
$l['webuzo_install_utility'] = 'This utility is not installed. Please install it first';

//The Category Language Variables
$l['forums'] = 'Форуми';
$l['blogs'] = 'Блогове';
$l['cms'] = 'Портали/CMS';
$l['galleries'] = 'Галерии';
$l['wikis'] = 'Уикита';
$l['admanager'] = 'Управление на реклами';
$l['calendars'] = 'Календари';
$l['games'] = 'Игри';
$l['mail'] = 'Пощи';
$l['polls'] = 'Анкети и анализ';
$l['projectman'] = 'Управление на проекти';
$l['ecommerce'] = 'Магазини';
$l['guestbooks'] = 'Книги за гости';
$l['customersupport'] = 'Поддръжка за клиенти';
$l['others'] = 'Други';
$l['music'] = 'Музика';
$l['video'] = 'Видео';
$l['files'] = 'File Management';
$l['go_cpanel'] = 'Обратно в контролния панел';
$l['go_home'] = APP.' Начало';
$l['go_demos'] = 'Скрипт демо';
$l['go_ratings'] = 'Скрипт оценки';
$l['go_settings'] = 'Редактиране на настройките';
$l['go_email_settings'] = 'Email настройки';
$l['go_installations'] = 'Всички инсталации';
$l['go_support'] = 'Помощ и поддръжка';
$l['go_sync'] = 'Синхронизиране с други автоматични инсталации';
$l['go_backups'] = 'Резервни копия и Възстановяване';
$l['go_tasklist'] = 'Task List';
$l['go_apps_installations'] = 'All Installed Applications';
$l['go_my_themes'] = 'My Themes';
$l['go_logout'] = 'Logout';
$l['ins_stats'] = 'Installations';
$l['outdated_stats'] = 'Outdated Installations';
$l['backups_stats'] = 'Backups';

$l['type_php'] = 'PHP';
$l['type_perl'] = 'Perl';
$l['type_js'] = 'JavaScript';
$l['type_java'] = 'Java';
$l['type_python'] = 'Python';
$l['search'] = 'Търси';
$l['back_to_top'] = 'Нагоре';

$l['show'] = 'Show';
$l['hide'] = 'Hide';

// Categories
$l['cat_php_forums'] = 'Форуми';
$l['cat_php_blogs'] = 'Блогове';
$l['cat_php_cms'] = 'Портали/CMS';
$l['cat_php_galleries'] = 'Галерии';
$l['cat_php_wikis'] = 'Уикита';
$l['cat_php_admanager'] = 'Управление на реклами';
$l['cat_php_calendars'] = 'Календари';
$l['cat_php_games'] = 'Игри';
$l['cat_php_mail'] = 'Пощи';
$l['cat_php_polls'] = 'Анкети и анализи';
$l['cat_php_projectman'] = 'Управление на проекти';
$l['cat_php_ecommerce'] = 'Магазини';
$l['cat_php_guestbooks'] = 'Книги за гости';
$l['cat_php_customersupport'] = 'Поддръжка за клиенти';
$l['cat_php_others'] = 'Други';
$l['cat_php_music'] = 'Музика';
$l['cat_php_video'] = 'Видео';
$l['cat_php_rss'] = 'RSS';
$l['cat_php_socialnetworking'] = 'Социални мрежи';
$l['cat_php_microblogs'] = 'Микро блогове';
$l['cat_php_frameworks'] = 'Рамки';
$l['cat_php_educational'] = 'Образователен';
$l['cat_php_erp'] = 'ERP';
$l['cat_php_dbtools'] = 'DB инструменти';
$l['cat_php_files'] = 'File Management';
$l['cat_js_libraries'] = 'Библиотеки';
$l['cat_js_widgets'] = 'Джаджи';
$l['cat_perl_blogs'] = 'Блогове';
$l['cat_perl_wikis'] = 'Уикита';
$l['cat_perl_forums'] = 'Форуми';
$l['cat_perl_ecommerce'] = 'E-Commerce';
$l['cat_perl_wikis'] = 'Wikis';
$l['cat_perl_forums'] = 'Forums';
$l['cat_perl_mail'] = 'Mails';
$l['cat_java_cms'] = 'CMS';
$l['cat_java_forums'] = 'Forums';
$l['cat_java_projectman'] = 'Project Management';
$l['cat_java_erp'] = 'ERP';
$l['cat_java_blogs'] = 'Blogs';
$l['cat_java_wikis'] = 'Wikis';
$l['cat_python_wikis'] = 'Wikis';
$l['cat_python_projectman'] = 'Project Management';
$l['cat_apps_server_side_scripting'] = 'Server Side Scripting';
$l['cat_apps_web_servers'] = 'Web Servers';
$l['cat_apps_utilities'] = 'Utilities';
$l['cat_apps_libraries'] = 'Libraries';
$l['cat_apps_databases'] = 'Databases';
$l['cat_apps_stacks'] = 'Stacks';
$l['cat_apps_security'] = 'Security';
$l['cat_apps_statistics'] = 'Statistics';
$l['cat_apps_java_tools'] = 'Java Tools';
$l['cat_apps_java_containers'] = 'Java Containers';
$l['cat_apps_version_control'] = 'Version Control';
$l['cat_apps_modules'] = 'Modules';
$l['cat_apps_message_queue'] ='Message Queue';

// Classes Categories
$l['classes_ajax'] = 'Ajax';
$l['classes_cryptography'] = 'Криптография';
$l['classes_algorithms'] = 'Алгоритми';
$l['classes_artificialintelligence'] = 'Изкуствен интелект';
$l['classes_email'] = 'Email';
$l['classes_finances'] = 'Финанси';
$l['classes_searching'] = 'Търсене';
$l['classes_user_management'] = 'Управление на потребители';
$l['classes_utilitiesandtools'] = 'Комунални услуги и инструменти';
$l['classes_validation'] = 'Потвърждаване';
$l['classes_security'] = 'Сигурност';
$l['classes_console'] = 'Конзола';
$l['classes_codegeneration'] = 'Генериране на код';
$l['classes_chat'] = 'Чат';
$l['classes_astrology'] = 'Астрология';
$l['classes_audio'] = 'Аудио';
$l['classes_biology'] = 'Биология';
$l['classes_blogs'] = 'Блогове';
$l['classes_cache'] = 'Кеш';
$l['classes_compression'] = 'Компресия';
$l['classes_configuration'] = 'Конфигурация';
$l['classes_contentmanagement'] = 'Управление на съдържанието';
$l['classes_conversion'] = 'Конверсия';
$l['classes_datatypes'] = 'Типове данни';
$l['classes_databases'] = 'База данни';
$l['classes_debug'] = 'Дебъг';
$l['classes_designpatterns'] = 'Моделите на дизайна';
$l['classes_ecommerce'] = 'Електронни магазини';
$l['classes_elearning'] = 'Електронно обучение';
$l['classes_emulators'] = 'Емулатори';
$l['classes_filesandfolders'] = 'Файлове и папки';
$l['classes_flash'] = 'Флаш';
$l['classes_forums'] = 'Форуми';
$l['classes_games'] = 'Игри';
$l['classes_geography'] = 'География';
$l['classes_graphics'] = 'Изобразителни изкуства';
$l['classes_gui'] = 'GUI';
$l['classes_hosting'] = 'Хостинг';
$l['classes_html'] = 'HTML';
$l['classes_http'] = 'HTTP';
$l['classes_language'] = 'Език';
$l['classes_projectmanagement'] = 'Управление на проекти';

// Softaculous Remote Domain Strings
$l['no_domain_data'] = 'Domain Data Not Found!!';
$l['no_aefer_resp'] = 'Could not access the worker file over web. Please check if your domain is pointing to the correct server.'; 

// Webuzo Strings
$l['webuzo'] = 'Webuzo';
$l['go_domain'] = 'Управление на домейни';
$l['webuzo_license_exp'] = 'Вашият лиценз не е активен или е изтекъл. Ако вашият лиценз е изтекъл, моля да го поднови, за да продължите да използвате Webuzo';
$l['webuzo_license_exp_t'] = 'Лиценза е неактивен';
$l['err_no_access'] = 'You do not have permission to access this page';

// Ampps Strings
$l['ampps'] = 'AMPPS';
$l['go_domain'] = 'Управление на домейни';
$l['ampps_license_exp'] = 'Вашият лиценз не е активен или е изтекъл. Ако вашият лиценз е изтекъл, моля да го поднови, за да продължите да използвате Ampps';
$l['ampps_license_exp_t'] = 'Лиценза е неактивен';


/////////////////////////////////////////////////////////////
/////  Following Variables are used for Email Templates /////
/////////////////////////////////////////////////////////////

$l['notify_enable'] = 'Enabled';
$l['notify_disable'] = 'Disabled';

$l['autoupgrade_enable'] = 'Enabled';
$l['autoupgrade_disable'] = 'Disabled';

// Auto backup strings
$l['auto_backup_enable'] = 'Enabled';
$l['auto_backup_disable'] = 'Disabled';

// Install Template Vaiable
$l['mail_install_php_sub'] = 'Нова инсталация на $scriptname';
$l['mail_install_php'] = 'Нова инсталация на $scriptname $version е завършена. Подробностите на инсталацията са показани по-долу:
Директория : $path
URL : $url
Админ URL : $admin_url
<if $datadirectory>Директория за данни: $datadirectory</if>
<if $admin_username>Потребителско име за админ: $admin_username</if>
<if $admin_pass>Парола за админ: $admin_pass</if>
<if $admin_email>Email на админ: $admin_email</if>
<if $dbname>MySQL база данни : $dbname</if>
<if $dbuser>MySQL база данни потребител: $dbuser</if>
<if $dbhost>MySQL база данни хост: $dbhost</if>
<if $dbpass>MySQL база данни парола: $dbpass</if>
<if $cron>Cron Job : $cron</if>
<if $disable_notify_update>Update Notification : $disable_notify_update</if>
<if $eu_auto_upgrade>Auto Upgrade : $eu_auto_upgrade</if>
<if $auto_backup>Automated Backups : $auto_backup</if>
<if $auto_backup_rotation>Backup Rotation : $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
<if $time>Време на инсталирането: $time</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Clone Template Vaiable
$l['mail_clone_sub'] = 'Clone Installation of $scriptname';
$l['mail_clone'] = 'Your installation of $scriptname $version has been cloned successfully.

Your original installation details :
Original Path : $old_path
Original URL : $old_url

Your cloned installation details :
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

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Install Template Vaiable
$l['mail_install_js_sub'] = 'Нова инсталация на $scriptname';
$l['mail_install_js'] = 'Нова инсталация на $scriptname $version е завършена. Подробностите на инсталацията са показани по-долу:
Директория : $path
URL : $url
<if $disable_notify_update>Update Notification : $disable_notify_update</if>
<if $auto_backup>Automated Backups : $auto_backup</if>
<if $auto_backup_rotation>Backup Rotation : $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
<if $time>Време на инсталирането: $time</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Install Template Vaiable
$l['mail_install_perl_sub'] = 'Нова инсталация на $scriptname';
$l['mail_install_perl'] = 'Нова инсталация на $scriptname $version е завършена. Подробностите на инсталацията са показани по-долу:
Директория : $path
URL : $url
Админ URL : $admin_url
<if $datadirectory>Директория за данни: $datadirectory</if>
<if $wwwdir>Уеб директория : $wwwdir</if>
<if $admin_username>Потребителско име за админ: $admin_username</if>
<if $admin_pass>Парола за админ: $admin_pass</if>
<if $admin_email>Email на админ: $admin_email</if>
<if $dbname>MySQL база данни: $dbname</if>
<if $dbuser>MySQL база данни потребител: $dbuser</if>
<if $dbhost>MySQL база данни хост: $dbhost</if>
<if $dbpass>MySQL база данни парола: $dbpass</if>
<if $cron>Cron Job : $cron</if>
<if $disable_notify_update>Update Notification : $disable_notify_update</if>
<if $auto_backup>Automated Backups : $auto_backup</if>
<if $auto_backup_rotation>Backup Rotation : $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
<if $time>Време на инсталирането: $time</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Install Template Vaiable
$l['mail_install_java_sub'] = 'Нова инсталация на $scriptname';
$l['mail_install_java'] = 'Нова инсталация на $scriptname $version е завършена. Подробностите на инсталацията са показани по-долу:
Директория : $path
URL : $url
Админ URL : $admin_url
<if $datadirectory>Директория за данни: $datadirectory</if>
<if $wwwdir>Уеб данни : $wwwdir</if>
<if $admin_username>Потребителско име за админ: $admin_username</if>
<if $admin_pass>Парола за админ: $admin_pass</if>
<if $admin_email>Email на админ: $admin_email</if>
<if $dbname>MySQL база данни: $dbname</if>
<if $dbuser>MySQL база данни потребител: $dbuser</if>
<if $dbhost>MySQL база данни хост: $dbhost</if>
<if $dbpass>MySQL база данни парола: $dbpass</if>
<if $cron>Cron Job : $cron</if>
<if $disable_notify_update>Update Notification : $disable_notify_update</if>
<if $auto_backup>Automated Backups : $auto_backup</if>
<if $auto_backup_rotation>Backup Rotation : $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
<if $time>Време на инсталирането: $time</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

$l['mail_install_python_sub'] = 'New Installation of $scriptname';
$l['mail_install_python'] = 'A new installation of $scriptname $version has been completed. The details of the installation are shown below:
Path : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>Data Directory : $datadirectory</if>
<if $wwwdir>Web Directory : $wwwdir</if>
<if $admin_username>Admin Username : $admin_username</if>
<if $admin_pass>Admin Password : $admin_pass</if>
<if $admin_email>Admin Email: $admin_email</if>
<if $dbname>MySQL Database : $dbname</if>
<if $dbuser>MySQL DB User : $dbuser</if>
<if $dbhost>MySQL DB Host : $dbhost</if>
<if $dbpass>MySQL DB Password : $dbpass</if>
<if $cron>Cron Job : $cron</if>
<if $disable_notify_update>Update Notification : $disable_notify_update</if>
<if $auto_backup>Automated Backups : $auto_backup</if>
<if $auto_backup_rotation>Backup Rotation : $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
<if $time>Time of Installation : $time</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Update template Variable (From ADMIN)
$l['mail_update_sub'] = 'Актуализации за скриптове са налични';
$l['mail_update'] = 'Този имейл е по отношение на остарялата инсталация на някои скриптове на PHP, които сте инсталирали. От съображения за сигурност трябва да актуализирате тези остарели инсталации възможно най-скоро.
Следните актуализации скрипт са на разположение:

$installation

За надграждане на тези скриптове, отидете в контролния панел -> '.APP.' -> Инсталации.
Там ще можете да актуализирате скриптове.

От системния администратор $serverip
';

// Remove Template Variable
$l['mail_remove_sub'] = 'Премахване на инсталацията на $scriptname';
$l['mail_remove'] = 'Инсталация на $scriptname е била отстранена. За детайли на инсталацията:
Директория: $path
<if $url>URL : $url</if>
<if $datadirectory>Директория за данни: $datadirectory</if>
<if $wwwdir>Уеб директория: $wwwdir</if>
<if $dbname>MySQL база данни: $dbname</if>
<if $dbuser>MySQL база данни потребител: $dbuser</if>
<if $dbhost>MySQL база данни хост: $dbhost</if>
<if $dbpass>MySQL база данни парола: $dbpass</if>
<if $cron>Cron Job : $cron</if>
Време на инсталирането: $time
Време на изтриването: $rem_time

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Cron Template Variable
$l['mail_cron_sub'] = 'Script Updates Available';
$l['changelog'] = '== Changelog for';
$l['mail_cron'] = 'Следните актуализации за скрипт са на разположение:

$installation

За надграждане на тези скриптове, отидете в контролния панел -> '.APP.' -> Инсталации.
Там ще можете да актуализирате скриптове.


$changelog

От '.APP.' Cron Jobs $serverip

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings

';

// Editdetail Template Variable
$l['mail_editdetail_sub'] = 'Модифицирани детайли за инсталиране на $scriptname';
$l['mail_editdetail'] = 'Информация за инсталиране на $scriptname е била променена. Променени детайли на инсталацията:
Директория: $path
URL: $url
<if $datadirectory>Директория за данни: $datadirectory</if>
<if $wwwdir>Уеб директория: $wwwdir</if>
<if $wwwurl>Уеб URL: $wwwurl</if>
<if $dbname>MySQL база данни: $dbname</if>
<if $dbuser>MySQL база данни потребител: $dbuser</if>
<if $dbhost>MySQL база данни хост: $dbhost</if>
<if $dbpass>MySQL база данни парола: $dbpass</if>
<if $cron>Cron Job : $cron</if>
<if $disable_notify_update>Update Notification : $disable_notify_update</if>
<if $eu_auto_upgrade>Auto Upgrade : $eu_auto_upgrade</if>
<if $auto_backup>Automated Backups : $auto_backup</if>
<if $auto_backup_rotation>Backup Rotation : $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
Време на инсталирането: $time
Време за промяна: $edit_time

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Backup Language Strings
$l['mail_backup_sub'] = 'Резервно копие на $scriptname инсталация';
$l['mail_backup'] = 'Резервно копие на $scriptname инсталирането е завършило успешно.
Детайли:
Инсталационна директория: $path
Инсталационен URL : $url
<if $backup_location>Backup Location : $backup_location</if>
Директория на резервно копие: $backup_file
<if $backup_note>Backup Note : $backup_note</if>

Можете да изтеглите резервно копие от архивите в '.APP.'.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

$l['mail_backup_fail_sub'] = 'Грешка: Резервното копие $scriptname инсталацията';
$l['mail_backup_fail'] = 'Резервно копие на $scriptname инсталацията не завърши успешно.
Детайли:
Инсталационна директория: $path
Инсталационен URL : $url
Директория за резервно копие: $backup_file

Възникна следната грешка:
$error

Моля опитайте да създадете резервно копие отново след известно време.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';


// Restore Language Strings
$l['mail_restore_sub'] = 'Restore of your $scriptname';
$l['mail_restore'] = 'The restore of your $scriptname backup was completed successfully.
The details are as follows :
Installation Path : $path
Installation URL : $url

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

$l['mail_restore_fail_sub'] = 'Failed : Restore of your $scriptname';
$l['mail_restore_fail'] = 'The restore of your $scriptname did not complete successfully.
The details are as follows :
Installation Path : $path
Installation URL : $url

The following error occured :
$error

Please try to restore the backup again after some time.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Restore Background Language Strings
$l['mail_restore_bg_sub'] = 'Restore of your $scriptname backup started in background';
$l['mail_restore_bg'] = 'The restore of your $scriptname backup has started in the background. You will receive an email notification about the status once the restore process is completed.
The details are as follows :
Installation Path : $path
Installation URL : $url

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Backup Background Language Strings
$l['mail_backup_bg_sub'] = 'Backup of your $scriptname installation started in background';
$l['mail_backup_bg'] = 'The backup of your $scriptname has started in background. You will receive an email notification about the status once the backup process is completed.
The details are as follows :
Installation Path : $path
Installation URL : $url

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings';

// import Language Strings
$l['mail_import_sub'] = 'Import of your $scriptname installation';
$l['mail_import'] = 'The import of your $scriptname installation was completed successfully.
The details are as follows :
Installation Path : $path
Installation URL : $url

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// import fail Language Strings
$l['mail_import_fail_sub'] = 'Failed : Import of your $scriptname installation';
$l['mail_import_fail'] = 'The import of your $scriptname installation did not complete successfully.
The details are as follows :
Installation Path : $path
Installation URL : $url

The following error occured :
$error

Please try to import the installation again after some time.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Import Background Language Strings
$l['mail_import_bg_sub'] = 'Import of your $scriptname installation';
$l['mail_import_bg'] = 'The import of your $scriptname installation has started in the background. You will receive an email notification about the status once the import process is completed.
The details are as follows :
Installation Path : $path
Installation URL : $url

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';


// Install Template Vaiable CLASSES
$l['mail_install_classes_sub'] = 'Нова инсталация на $classesname';
$l['mail_install_classes'] = 'Нова инсталация на $classesname $version е завършена. Подробностите на инсталацията са показани по-долу:
Директория: $path
<if $time>Време на инсталацията: $time</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

////////////////////////
// ADMIN UPGRADE - 6
////////////////////////

// Auto Upgrade Email For Admin (successful)
$l['mail_adminupgrade_success_admin_sub'] = '$scriptname installation of user $user has been upgraded successfully';
$l['mail_adminupgrade_success_admin'] = '$scriptname installation of user $user has been upgraded successfully to the latest version.
The details are as follows :
Installation URL : $url
Latest Version : $version
Old Version : $oldversion
';

// Auto Upgrade Email For Admin (Failed) but restored successfully.
$l['mail_adminupgrade_fail_admin_sub'] = 'Upgrade process for $scriptname installation failed and was restored from the backup';
$l['mail_adminupgrade_fail_admin'] = 'Upgrade process of $scriptname installation for user $user failed.
'.APP.' had created a backup before upgrading, and the backup was restored successfully.
Installation URL : $url
Current Version : $oldversion
Latest Version : $version
The Upgrade error details are as follows :
Error : $upgrade_error
';

// Auto Upgrade Email for user (successful)
$l['mail_adminupgrade_success_user_sub'] = '$scriptname installation has been successfully upgraded by System Admin';
$l['mail_adminupgrade_success_user'] = 'Your $scriptname installation has been successfully upgraded to the latest version by the System Admin.
The details are as follows :
Installation URL : $url
Latest Version : $version
Old Version : $oldversion

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Auto Upgrade Email for user (fail) but restored successfully
$l['mail_adminupgrade_fail_user_sub'] = 'Upgrade of your $scriptname installation by System Admin was unsuccessful';
$l['mail_adminupgrade_fail_user'] = 'The System Admin had tried to upgrade your $scriptname installation, but the upgrade process had failed.
A backup had been created before upgrading your installation, and your installation has been successfully restored from this backup.
Installation URL : $url
Current Version : $oldversion
Latest Version : $version
The Upgrade error details are as follows :
Error : $upgrade_error

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// ALL IS FAILED (Upgrade and RESTORE toooo) (FOR ADMIN)
$l['mail_adminupgrade_restore_fail_admin_sub'] = 'Upgrade process of $scriptname installation of user $user has failed';
$l['mail_adminupgrade_restore_fail_admin'] = 'Upgrade process of $scriptname installation of user $user has failed.
A backup had created before upgrading, but the restore process also failed !

It will require a manual restore. Guide for the manual restore is available here :
http://www.softaculous.com/docs/Manual_Restore

Following are the installation and backup details which you might require to restore your $scriptname installation :
PATH_TO_YOUR_BACKUP_FILE : $backup_path
PATH_OF_INSTALLATION : $softpath
<if $dbname>DATABASE_NAME : $dbname</if>
<if $dbuser>DATABSE_USER : $dbuser</if>
<if $dbpass>DATABASE_PASS : $dbpass</if>
<if $dbhost>DATABASE_HOST : $dbhost</if>

Installation URL : $url
Current Version : $oldversion
Latest Version : $version
<if $upgrade_error>
The Upgrade error details are as follows :
Error : $upgrade_error
</if>
<if $error>
The Restore error details are as follows :
Error : $error
</if>

The '.APP.' team is available for help as well. You can contact the '.APP.' Team (support@'.strtolower(APP).'.com) if you face any problems.
';

// ALL IS FAILED (Upgrade and RESTORE toooo) (FOR USER)
$l['mail_adminupgrade_restore_fail_user_sub'] = 'Upgrade of your $scriptname installation by System Admin failed';
$l['mail_adminupgrade_restore_fail_user'] = 'The System Admin had tried to upgrade your $scriptname installation, but the upgrade failed.
A backup had been created before upgrading, but the restore process also failed !

It will require a manual restore. Guide for the manual restore is available here :
http://www.softaculous.com/docs/Manual_Restore

Following are the installation and backup details which you might require to restore your $scriptname installation :
PATH_TO_YOUR_BACKUP_FILE : $backup_path
PATH_OF_INSTALLATION : $softpath
<if $dbname>DATABASE_NAME : $dbname</if>
<if $dbuser>DATABSE_USER : $dbuser</if>
<if $dbpass>DATABASE_PASS : $dbpass</if>
<if $dbhost>DATABASE_HOST : $dbhost</if>

Installation URL : $url
Current Version : $oldversion
Latest Version : $version
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

////////////////////////
// USER UPGRADE - 3
////////////////////////

// When upgraded by user successfully (By user)
$l['mail_userupgrade_success_user_sub'] = '$scriptname installation upgraded successfully';
$l['mail_userupgrade_success_user'] = 'Your $scriptname installation has been successfully upgraded to the latest version.
The details are as follows :
Installation URL : $url
Latest Version : $version
Old Version : $oldversion

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// If any error occured while upgrading, (By user)
$l['mail_userupgrade_fail_user_sub'] = 'Upgrade of your $scriptname installation failed';
$l['mail_userupgrade_fail_user'] = 'The upgrade of your $scriptname installation has failed.
The details are as follows :
Installation URL : $url
Current Version : $oldversion
Latest Version : $version
Error : $upgrade_error

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// If UPGRADE and RESTORE failed while upgrading, (By user)
$l['mail_userupgrade_restore_fail_user_sub'] = 'Upgrade of your $scriptname installation failed';
$l['mail_userupgrade_restore_fail_user'] = 'The upgrade of your $scriptname installation has failed.
A backup had been created before upgrading, but the restore process also failed !

It will require a manual restore. Guide for the manual restore is available here :
http://www.softaculous.com/docs/Manual_Restore

The details are as follows :
Installation URL : $url
Current Version : $oldversion
Latest Version : $version
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

////////////////////////
// AUTO UPGRADE - 3
////////////////////////

// When AUTOUPGRADED successfully
$l['mail_autoupgrade_success_user_sub'] = '$scriptname Installation Auto Upgraded Successfully';
$l['mail_autoupgrade_success_user'] = 'Your $scriptname installation has been successfully auto upgraded to the latest version.
The details are as follows :
Installation URL : $url
Latest Version : $version
Old Version : $oldversion

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// When AUTOUPGRADE FAILED
$l['mail_autoupgrade_fail_user_sub'] = 'Auto Upgrade of your $scriptname installation failed';
$l['mail_autoupgrade_fail_user'] = 'The auto upgradation of your $scriptname installation has failed.
The details are as follows :
Installation URL : $url
Current Version : $oldversion
Latest Version : $version
Error : $upgrade_error

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// If UPGRADE and RESTORE failed while AUTOUPGRADING
$l['mail_autoupgrade_restore_fail_user_sub'] = 'Auto Upgrade of your $scriptname installation failed';
$l['mail_autoupgrade_restore_fail_user'] = 'The auto upgradation of your $scriptname installation has failed.
A backup had been created before upgrading, but the restore process also failed !

It will require a manual restore. Guide for the manual restore is available here :
http://www.softaculous.com/docs/Manual_Restore

The details are as follows :
Installation URL : $url
Current Version : $oldversion
Latest Version : $version
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

////////////////////////
// PRE UPGRADE CHECK 
////////////////////////

// If pre upgradation check fails while AUTOUPGRADE (FOR USER)
$l['mail_autoupgrade_precheck_fail_sub'] = 'Pre Upgrade Check failed';
$l['mail_autoupgrade_precheck_fail'] = 'Auto upgrade process for the following installation cannot be completed, because it does not meet the upgrade requirements :
Installation URL : $url
Current Version : $oldversion
Latest Version : $version
<if $upgrade_error>
Error : $upgrade_error
</if>
<if $error>
Error : $error
</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

/////////////////////////////////
// Backup Failed CLI UPGRADE
/////////////////////////////////

// If a backup fails before AUTO UPGRADING an installation (FOR USER)
$l['mail_autoupgrade_backup_fail_sub'] = 'Backup process failed before auto upgrading $scriptname installation';
$l['mail_autoupgrade_backup_fail'] = 'The backup of $scriptname installation has failed. So the auto upgrade process was aborted.
The details are as follows :
Installation URL : $url
Current Version : $oldversion
Latest Version : $version
Error : $error

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

$l['err_openconfig'] = 'Не може да се отвори конфигурационния файл';
$l['err_writeconfig'] = 'Не може да се запише конфигурационния файл';

$l['classes_con_failed'] = 'Грешка: Не може да се свърже със сървъра.';
$l['cl_ratings'] = 'Оценки';
$l['cl_author'] = 'Автор';
$l['cl_license'] = 'Лиценз';
$l['cl_version'] = 'Версия';
$l['cl_show_files'] = 'Покажи файлове';
$l['cl_install_but'] = 'Инсталирай';
$l['expand_view'] = 'Кликнете тук за пълен изглед';
$l['collapse_view'] = 'Кликнете тук за вградени изглед';

$l['email_off_notice'] = '<b>ЗАБЕЛЕЖКА: на уведомителни имейли са забранени, така че няма да получавате имейли.</b>';

// Add User Language Strings
$l['mail_add_user_sub'] = 'Welcome to Softaculous Remote Installer';
$l['mail_add_user'] = 'You can now successfully login into Softaculous Remote Installer.
The details are as follows :
User 					: $username
API Key 				: $api_key
API Password 			: $api_pass
Number of Users allowed	: $number_of_users';

// Requirement parser languages
$l['req_ver_nf'] = 'Required &soft-1; version &soft-2; &soft-3; AND found version is : ';
$l['req_ext_nf'] = 'Required &soft-1; extension not found :';
$l['req_func_nf'] = 'Required &soft-1; function not found';
$l['req_ext_ver'] = 'Required &soft-1; &soft-2; extension version &soft-3; &soft-4; BUT found &soft-5;';
$l['gt'] = 'greater than';
$l['lt'] = 'less than';
$l['ge'] = 'greater than equal to';
$l['le'] = 'less than equal to';
$l['eq'] = 'is';
$l['ne'] = 'should not be equal to';

// Automated Backup Language Strings
$l['mail_auto_backup_sub'] = 'Automatic Backup of your $scriptname installation';
$l['mail_auto_backup'] = 'The automatic backup of your $scriptname installation was completed successfully.
The details are as follows :
Installation Path : $path
Installation URL : $url
Backup Path : $backup_file
<if $backup_location>Backup Location : $backup_location</if>

You can access the backup from the Backups Section in '.APP.'.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

$l['mail_auto_backup_fail_sub'] = 'Failed : Automatic Backup of your $scriptname installation';
$l['mail_auto_backup_fail'] = 'The automatic backup of your $scriptname installation did not complete successfully.
The details are as follows :
Installation Path : $path
Installation URL : $url
Backup Path : $backup_file
<if $backup_location>Backup Location : $backup_location</if>

The following error occured :
$error

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Email for sending the list of scripts which does not meet the requirements.
$l['mail_script_requirement_sub'] = 'Scripts requirements failed log';
$l['mail_script_requirement'] = 'The following list of script(s) do not meet the minumum requirements on your server and might not work.
The details are as follows :

$failed_req

Note : If you are changing the PHP version on runtime (i.e. using CageFS, hive, .htaccess etc.) than you can ignore the above PHP version failure warnings.
';

// Softpanel Language Strings
$l['no_www_domain'] = 'Please close all '.$globals['sn'].' pages and log out from the control panel using the log out button.
Afterwards you can log in again and use '.$globals['sn'].'.';

$l['install_tweet'] = 'I just installed #[[SCRIPTNAME]] on [[softurl]] via #[[APP]] #[[TYPE]]';
$l['install_tweet_classes'] = 'I just installed #[[SCRIPTNAME]] via #[[APP]] #[[TYPE]]';
$l['upgrade_tweet'] = 'I just upgraded #[[SCRIPTNAME]] on [[softurl]] via #[[APP]] #[[TYPE]]';
$l['clone_tweet'] = 'I just cloned #[[SCRIPTNAME]] on [[softurl]] via #[[APP]] #[[TYPE]]';

// month strings
$l['January'] = 'Януари';
$l['February'] = 'Февруари';
$l['March'] = 'Март';
$l['April'] = 'Април';
$l['May'] = 'Май';
$l['June'] = 'Юни';
$l['July'] = 'Юли';
$l['August'] = 'Август';
$l['September'] = 'Септември';
$l['October'] = 'Октомври';
$l['November'] = 'Ноември';
$l['December'] = 'Декември';

// Mail templates for webuzo backup
$l['mail_webuzo_backup_sub'] = '$type backup completed successfully';
$l['mail_webuzo_backup'] = 'The backup process was completed successfully.
Backup file is created with the file name:
$filename

Regards,
Webuzo Team';
$l['mail_webuzo_backup_fail_sub'] = '$type backup failed';
$l['mail_webuzo_backup_fail'] = 'The backup process did not complete successfully.
The following error(s) occured:
$error

Regards,
Webuzo Team';
$l['mail_webuzo_restore_sub'] = '$type restore completed successfully';
$l['mail_webuzo_restore'] = 'The restoration was completed successfully.

The file restored was:
$filename

Regards,
Webuzo Team';
$l['mail_webuzo_restore_fail_sub'] = '$type restore failed';
$l['mail_webuzo_restore_fail'] = 'The restore process encountered errors and would not be completed.
The following error(s) occured:
$error

Regards,
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
