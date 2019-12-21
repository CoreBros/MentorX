<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editdetail_lang.php
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

$l['no_ins'] = 'Не предоставлена установка';
$l['wrong_ins_title'] = 'Некорректный ID установки';
$l['wrong_ins'] = 'Установки с указанным ID не существует';
$l['cant_remove_dir'] = 'Директория не может быть удалена, так как это домашняя директория. Пожалуйста, отмените опцию <b>Удалить директорию</b> для продолжения без удаления директории.';
$l['no_dir'] = 'Директория установки не существует!';
$l['no_datadir'] = 'Директория данных не существует!';
$l['no_wwwdir'] = 'Веб директория не существует!';
$l['wrong_url'] = 'URL и имя директории не совпадают';
$l['wrong_wwwurl'] = 'WEB URL имя веб директории не совпадают';
$l['err_mysql_user'] = 'Имя пользователя, пароль или сервер MySQL указаны некорректно, поэтому соединение не может быть установлено.';
$l['err_mysql_db'] = 'Имя базы данных MySQL указано некорректно, база данных не может быть выбрана.';
$l['mail_path'] = 'Путь';
$l['mail_url'] = 'URL';
$l['mail_db'] = 'База данных MySQL';
$l['mail_dbuser'] = 'Пользователь MySQL';
$l['mail_dbhost'] = 'Сервер MySQL';
$l['mail_dbpass'] = 'Пароль MySQL';
$l['mail_time'] = 'Время установки';
$l['mail_editdetail_time'] = 'Время изменения';
$l['mail_subject'] = 'Изменённые детали установки &soft-1;';
$l['mail_cron_command'] = 'Задание CRON';
$l['mail_datadir'] = 'Директория данных';
$l['mail_wwwdir'] = 'Веб директория';
$l['mail_wwwurl'] = 'URL веб директории';

//Theme Strings
$l['<title>'] = APP.' - изменить детали';
$l['ins_details'] = 'Детали установки';
$l['info'] = 'Инфо';
$l['ins_softname'] = 'Программное обеспечение';
$l['ins_num'] = 'ID установки';
$l['ins_ver'] = 'Версия';
$l['ins_time'] = 'Время установки';
$l['ins_path'] = 'Путь';
$l['ins_url'] = 'URL';
$l['ins_admin_url'] = 'URL административной панели';
$l['ins_db'] = 'Имя базы данных';
$l['ins_dbuser'] = 'Пользователь базы данных';
$l['ins_dbpass'] = 'Пароль базы данных';
$l['ins_dbhost'] = 'Сервер базы данных';
$l['ins_datadir'] = 'Директория данных';
$l['ins_wwwdir'] = 'Веб директория';
$l['ins_wwwurl'] = 'URL веб директории';
$l['ins_cron_command'] = 'Cron задание';
$l['details_edited'] = 'Детали установки успешно изменены';
$l['version_edited'] = 'Версия была успешно обновлена в наших записях.';
$l['return'] = 'Вернуться к обзору';

$l['edit_ins'] = 'Изменить детали установки';
$l['edit_dir'] = 'Директория';
$l['edit_datadir'] = 'Директория данных';
$l['edit_db'] = 'Имя базы данных';
$l['edit_dbuser'] = 'Пользователь базы данных';
$l['edit_dbpass'] = 'Пароль базы данных';
$l['edit_dbhost'] = 'Сервер базы данных';
$l['edit_url'] = 'URL';
$l['editins'] = 'Сохранить детали установки';
$l['mail_editdetail_ins'] = 'Детали установки &soft-1; были изменены. Далее следуют изменённые детали установки : ';
$l['edit_wwwdir'] = 'Веб директория';
$l['edit_wwwurl'] = 'URL веб директории';
$l['disable_notify_update'] = 'Отключить письменные уведомления о наличии обновлений';
$l['exp_disable_notify_update'] = 'Если выбрано, вы не будете получать уведомления о доступных обновлениях для этой установки.';
$l['alreadyupdated'] = 'Хм... Похоже, что текущая версия установки <b>&soft-1;</b>, а не <b>&soft-2;</b>. <br />Нажмите здесь для обновления записей '.APP.'';
$l['edit_acc_detail'] = 'Изменить данные учётной записи администратора';
$l['eu_auto_upgrade'] = 'Автообновление';
$l['exp_eu_auto_upgrade'] = 'Выберите настройки автоматического обновления для текущей установки при наличии новой версии';
$l['auto_upgrade_plugins'] = 'Автообновление плагинов &soft-1;';
$l['exp_auto_upgrade_plugins'] = 'If checked, all the active &soft-1; plugins installed for this installation will be automatically upgraded to the latest version when your script installation is upgraded.';
$l['auto_upgrade_themes'] = 'Автообновление тем &soft-1;';
$l['exp_auto_upgrade_themes'] = 'Если выбрано, активная тема &soft-1; для этой установки будет автоматически обновлена до последней версии при обновлении самой установки.';
$l['auto_backup'] = 'Автоматические резервные копии';
$l['exp_auto_backup'] = APP.' будет автоматически создавать резервные копии через CRON с указанной вами частотой';
$l['auto_backup_rotation'] = 'Ротация резервных копий';
$l['exp_auto_backup_rotation'] = 'Если лимит ротации резервных копий достигнут, '.APP.' удалит самую старую имеющуюся резервную копию для этой установки и создаст новую. Резервные копии занимают место на диске, поэтому выбирайте параметр ротации исходя из количества свободного места.';
$l['no_backup'] = 'Не создавать резервные копии';
$l['daily'] = 'Раз в день';
$l['weekly'] = 'Раз в неделю';
$l['monthly'] = 'Раз в месяц';
$l['unlimited'] = 'Неограниченно';
$l['auto_backup_not_allowed'] = 'Выбранная вами частота резервных копий не валидна';

$l['no_edit'] = 'The EDIT.XML file could not be found! Please report this to the server administrator.';
$l['no_functions'] = 'The EDIT FUNCTIONS file could not be found! Please report this to the server administrator.';
$l['no_field'] = 'The field <b>&soft-1;</b> is required and must be filled out.';
$l['err_auto_backup_limit'] = 'The auto backup rotation cannot be more than <b>&soft-1;</b>';
$l['select_files'] = 'Select additional files/folders';
$l['select_files_exp'] = 'Please select the additonal files/folders associated with this installation. <br />This list will be used for operations like Clone, Backup and Removal of this installation';
$l['invalid_files_in_post_list'] = 'There were some invalid files/folders selected';
$l['select_files_list'] = 'Select additional files/folders from the following list';

$l['select_files_backup'] = 'Use above selected files/folders for Backup';
$l['select_files_backup_exp'] = 'If selected only the files/folders related to this installation will be backed up. <br />By default backup will include all the files/folders under this path';
$l['no'] = 'No (Backup all files and folders inside installation directory excluding subdomains)';
$l['yes'] = 'Yes (Backup standard application files/folders along with above selected files/folders)';
$l['check_all_edit'] = 'Check All';

$l['choose_theme'] = 'Install Theme';
$l['clear_theme'] = 'Clear selection';
$l['installing_theme'] = 'Installing theme';
$l['cant_download_theme'] = 'Could not download the theme files';
$l['no_theme_package'] = 'The theme installation package could not be found!';
$l['unzipping_theme_files'] = 'Copying themes files and folders';
$l['use_this_theme'] = 'Select this';
$l['demo'] = 'Demo';
$l['refresh'] = 'Refresh';
$l['purchase'] = 'Buy';
$l['close'] = 'Close';
$l['free'] = 'Free';
$l['select'] = 'Select';
$l['theme_is_optional'] = '<b>Note</b>: This is optional. Select only if you want to change your current theme.';
$l['your_purchased'] = 'Purchased ';//trailing space is required
$l['your_purchased_times'] = ' times(s)';
$l['err_theme_not_bought'] = 'You have not purchased the theme, so could not install it !';
$l['err_theme_reached_limit'] = 'Please buy this theme and try to install it again. You reached the limit of installing this theme.';
$l['payment_heading'] = 'Purchase Theme';
$l['payment_redirect'] = 'You will be redirected to pay ';//trailing space is required
$l['date_added'] = 'Дата добавления';
$l['downloaded'] = 'Загружено';
$l['edit_dbpass_exp'] = 'Новый пароль базы данных. <br/>Оставьте пустым, если не хотите менять пароль';
$l['select_tables'] = 'Выбрать дополнительные таблицы базы данных';
$l['select_tables_exp'] = 'Выбранные таблицы будут включены в резервную копию базы данных';

$l['backup_loc'] = 'Backup Location';
$l['exp_backup_loc'] = 'Choose the backup location to be used while backing up this installation';
$l['default'] = 'Default';
$l['invalid_backup_location'] = 'Backup location submitted does not exist';
$l['local_folder'] = 'Local Folder';

$l['cron_min'] = 'Минута';
$l['cron_hour'] = 'Час';
$l['cron_day'] = 'День';
$l['cron_month'] = 'Месяц';
$l['cron_weekday'] = 'День недели';

$l['no_cron_min'] = 'Не указана минута в Cron';
$l['no_cron_hour'] = 'Не указан час в Cron';
$l['no_cron_day'] = 'Не указан день в Cron';
$l['no_cron_month'] = 'Не указан месяц в Cron';
$l['no_cron_weekday'] = 'Не указан день недели в Cron';

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

$l['done'] = 'Done';
$l['error'] = 'Error';
$l['plugins_upgrade_now'] = 'Upgrade Plugin(s) Now';
$l['theme_upgrade_now'] = 'Upgrade Theme Now';
$l['plugins_upgrade_success'] = 'Plugin(s) Upgraded Successfully!!';
$l['theme_upgrade_success'] = 'Theme Upgraded Successfully!!';
$l['fetch_db_details'] = 'Разрешить Softaculous получить детали базы данных?';

$l['edit_notes'] = 'The following are some important notes. It is highly recommended that you read them ';
$l['domain_not_in_list'] = 'Указанный URL не в списке ваших доменов'; 

$l['dont_auto_upgrade'] = 'Не устанавливать обновления автоматически';
$l['minor_auto_upgrade'] = 'Обновляться только до <b>минорных</b> версий';
$l['major_auto_upgrade'] = 'Обновляться до любой последней версии (как <b>мажорной</b> так и <b>минорной</b>)';
$l['auto_upgrade_major'] = '(мажорные и минорные версии)';
$l['auto_upgrade_minor'] = '(минорные версии)';


$l['wpc_return'] = 'Вернуться к установкам';