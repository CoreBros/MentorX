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

$l['no_info_file'] = 'Файл INFO.XML не найден! Пожалуйста, сообщите об этом администратору сервера.';
$l['incompatible'] = 'Программное обеспечение требует новой версии '.APP.'! Пожалуйста, сообщите об этом администратору сервера.';
$l['no_install'] = 'INSTALL.XML файл не найден! Пожалуйста, сообщите об этом администратору сервера.';
$l['no_functions'] = 'Установочный файл функций, не найден! Пожалуйста, сообщите об этом администратору сервера.';
$l['no_softdomain'] = 'Вы не выбрали домен для установки программного обеспечения.';
$l['wrong_softdomain'] = 'Указанный домен не может быть найден.';
$l['no_space'] = 'У вас недостаточно дискового пространства для установки этого программного обеспечения!';
$l['no_field'] = 'Поле <b>&soft-1;</b> является обязательным и должно быть заполнено.';
$l['no_package'] = 'Инсталляционный пакет не найден!';
$l['no_decompress'] = 'Возникли ошибки при распаковке файлов пакетов.';
$l['mail_new_ins'] = 'Новая установка &soft-1; была завершена. Подробная информация о, установке приведены ниже:';
$l['mail_path'] = 'Путь';
$l['mail_url'] = 'URL';
$l['mail_time'] = 'Установлено';
$l['mail_subject'] = 'Установка &soft-1;';
$l['some_files_exist'] = 'Установка не может быть продолжена, потому что следующие файлы уже существуют в указанной директории : ';
$l['delete_files'] = 'Пожалуйста, удалите эти файлы, или выберите другой каталог.';
$l['checking_data'] = 'Проверка предоставленных данных';
$l['unzipping_files'] = 'Копирование файлов и каталогов';
$l['unzipping_datadir'] = 'Распаковка файлов данных';
$l['prop_db'] = 'Распространение базы данных';
$l['finishing_process'] = 'Завершение установки';
$l['wait_note'] = '<b>ПРИМЕЧАНИЕ:</b> Это может занять 3-4 минуты. Пожалуйста, не уходите с этой страницы пока индикатор прогресса не достигнет 100%';
$l['softdirectory_invalid'] = 'Указанная вами директория не валидна.';
$l['err_domain'] = 'Нет домена';
$l['err_domain_admin'] = 'У этого пользователя нет доменов. Пожалуйста, свяжитесь с администратором.';
$l['no_sel_inst'] = 'Не выбраны установки';
$l['del_insid'] = 'Вы уверены, что хотите удалить выбранные установки?';
$l['ins_emailto'] = 'Отправить детали установки';
$l['no_https'] = 'Доверенный SSL сертификат не найден';
$l['err_dbprefix'] = 'Префикс таблицы не валидный. Валыдные значения: a-z или A-Z, или 0-9, или _';
$l['auto_backup_not_allowed'] = 'Заданная частота автоматических резервных копий не валидна';
$l['invalid_script'] = 'Не валидный ID скрипта';
$l['not_js_script'] = 'Этот скрипт не на JavaScript';
$l['no_domain_found'] = 'Домен не найден. Пожалуйста, добавьте домен для установки скрипта';

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
$l['support_note'] = 'Примечание: Softaculous не предоставляет поддержку для любого программного обеспечения.';
$l['setup'] = 'Установка программного обеспечения';
$l['choose_domain'] = 'Выберите домен';
$l['choose_domain_exp'] = 'Пожалуйста, выберите домен для установки программного обеспечения.';
$l['in_directory'] = 'Директория';
$l['in_directory_exp'] = 'Каталог относительно корня вашего домена и он <b>не должен существовать</b>. Например, для установки на http://mydomain/dir/ просто введите <b>dir</b>. Для установки в корень http://mydomain/ оставите поле пустым.';
$l['softsubmit'] = 'Установить';
$l['congrats'] = 'Поздравляем, программное обеспечение установлено успешно!';
$l['succesful'] = 'был успешно установлен в';
$l['enjoy'] = 'Мы надеемся, что процесс установки прошел легко.';
$l['install_notes'] = 'Ниже приводятся некоторые важные примечания. Настоятельно рекомендуется прочитать их ';
$l['please_note'] = '<b>ПРИМЕЧАНИЕ</b>: '.APP.' производит только автоматическую установку программного обеспечения и не предоставляет никакой поддержки для отдельных пакетов программного обеспечения. Пожалуйста, посетите веб-сайт поставщика программного обеспечения для поддержки!';
$l['regards'] = 'С уважением';
$l['softinstaller'] = APP.' Авто Установщик';
$l['return'] = 'Вернуться к обзору';
$l['current_ins'] = 'Имеющиеся установки';
$l['link'] = 'Ссылка';
$l['ins_time'] = 'Установлено';
$l['version'] = 'Версия';
$l['upd_to'] = 'Обновить до версии';
$l['remove'] = 'Удалить';
$l['no_info'] = 'Нет информации';
$l['ratesoft'] = 'Рейтинг скрипта';
$l['reviews'] = 'Отзывы';
$l['reviewsoft'] = 'Написать отзыв';
$l['readreviews'] = 'Читать отзывы';
$l['reviews_exp'] = 'Прочитайте отзывы других пользователей и';
$l['ins_type'] = 'Тип установки';
$l['ins_type_exp'] = '<b>Оригинальный пакет</b> - Пакет, доступный на сайте скрипта. <br/> <b>Только файлы библиотеки</b> - Просто Javascript библиотека файлов.';
$l['ori_pack'] = 'Оригинальный пакет';
$l['just_lib'] = 'Только файлы библиотеки';
$l['overwrite_exist'] = '<b>ИЛИ</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">Установите флажок, чтобы переписать все файлы и продолжать</span></b>';
$l['overwrite'] = 'Переписать файлы';
$l['choose_protocol'] = 'Выберите протокол';
$l['choose_protocol_exp'] = 'Если ваш сайт имеет SSL, то, пожалуйста, выберите протокол HTTPS.';
$l['clone'] = 'Клонировать';
$l['options'] = 'Настройки';
$l['downloading'] = 'Загрузка пакета';
$l['installing'] = 'Установка скрипта';
$l['go'] = 'Начать';
$l['rem_inst_id'] = 'Удаление установки - ';
$l['inst_remvd'] = 'Выбранные установки были удалены. Страница будет сейчас перезагружена!';
$l['release_date'] = 'Дата выхода';
$l['adv_option'] = 'Расширенные настройки';
$l['disable_notify_update'] = 'Отключить уведомления об обновлениях на Email';
$l['exp_disable_notify_update'] = 'Если выбрано, вы не будете получать уведомления на email о доступных обновлениях этой установки.';
$l['prog_installing'] = 'Установка '; // Dont remove trailing space
$l['prog_install_complete'] = 'Установка завершена.';

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

$l['install_tweet_sub'] = 'Tell your friends about your new site';
$l['err_auto_backup_limit'] = 'Ротация автоматических резервных копий не может быть больше, чем <b>&soft-1;</b>';
$l['select_domain'] = 'Выбрать домен';
$l['with_selected'] = 'С выбранными';
$l['not_in_free'] = 'ПО <b>&soft-1;</b> не может быть установлено в бесплатной версии '.APP.'!';
$l['notify_admin'] = 'Пожалуйста, уведомите администратора вашего сервера о необходимости покупки премиум версии '.APP.'!';
$l['related_scripts'] = 'Похожие скрипты';
$l['backup'] = 'Резервная копия';
$l['editdetail'] = 'Редактировать';
$l['install_now'] = 'Установить сейчас';
$l['my_apps'] = 'Мои установки';

$l['bad'] = 'Плохой';
$l['good'] = 'Хороший';
$l['strong'] = 'Сильный';
$l['short'] = 'Короткий';
$l['strength_indicator'] = 'Индикатор стойкости';

$l['backup_location'] = 'Backup Location';
$l['backup_location_exp'] = 'Choose the backup location to be used while backing up this installation';
$l['default'] = 'Default';
$l['invalid_backup_location'] = 'Backup location submitted does not exist';
$l['local_folder'] = 'Local Folder';

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

$l['outdated_script'] = '<b>&soft-1;</b> не обновлялся более двух лет и, возможно, более не сопровождается или поддерживается поставщиком программного обеспечения.';
$l['ampps_notify_premium'] = 'This feature is available in the premium version of AMPPS. Please purchase <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';

$l['choose_url'] = 'Выберите URL установки';
$l['choose_url_exp'] = 'Пожалуйста, выберите URL для установки программного обеспечения';

$l['quick_install'] = 'Быстрая установка';
$l['custom_install'] = 'Расширенная установка';

$l['error_max_ins_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Installations allowed per script';
$l['notify_ver'] = 'Уведомить: У '.$globals['sn'].' устаревшая версия';
$l['notifyversion'] = 'Спасибо за информирование о новой версии. Мы проверим это как можно скорее.';
