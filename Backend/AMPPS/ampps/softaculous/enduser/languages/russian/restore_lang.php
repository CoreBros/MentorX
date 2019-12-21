<?php

//////////////////////////////////////////////////////////////
//===========================================================
// restore_lang.php
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

$l['restoreerror'] = 'Возникли некоторые ошибки при распаковке файлов резервных копий';
$l['restoredatadir'] = 'Не удается восстановить данные каталога';
$l['restorewww'] = 'Невозможно восстановить веб директорию';
$l['res_err_selectmy'] = 'Не удалось выбрать базу данных для восстановления';
$l['err_myconn'] = 'Не удалось подключиться к базе данных';
$l['err_db_create'] = 'Произошла ошибка при создании базы данных';
$l['off_backup_restore'] = 'Резервное копирование/восстановление отключено администратором';
$l['no_backupinfo_file'] = 'Файл информации о резервной копии не найден';
$l['no_backup_time'] = 'Не найдено время создания резервной копии';
$l['instime_higher_than_btime'] = 'Время установки больше времени создания резервной копии';

//Theme Strings
$l['<title>'] = ''.APP.' - Восстановление';
$l['restorefile'] = 'Восстановление из резервной копии';
$l['restore_dir'] = 'Восстановить директорию';
$l['restore_dir_exp'] = 'Если выбрано, вся директория будет восстановлена';
$l['restore_datadir'] = 'Восстановление данных Директории';
$l['restore_datadir_exp'] = 'При выборе каталога данных он будет восстановлен';
$l['restore_db'] = 'Восстановить базу данных';
$l['restore_db_exp'] = 'Если выбрано, будет восстановлена база данных';
$l['restore_ins'] = 'Восстановить установку';
$l['restore'] = 'Резервная копия успешно восстановлена';
$l['confirm_restore'] = 'Вы уверены, что хотите восстановить установку?';
$l['return'] = 'Вернуться к обзору';
$l['restore_wwwdir'] = 'Restore Web Directory';
$l['restore_wwwdir_exp'] = 'If checked the Web directory will be restored';
$l['checking_data'] = 'Checking the submitted data';
$l['res_db'] = 'Restoring the Database';
$l['res_dir'] = 'Restoring the Directory';
$l['res_datadir'] = 'Restoring the Data Directory';
$l['finishing_process'] = 'Backup Restored';
$l['wait_note'] = '<b>NOTE:</b> This may take 3-4 minutes. Please do not leave this page until the progress bar reaches 100%';
$l['restoring'] = 'Your backup is being restored in background. You will be notified by email once its completed.';
$l['prog_restoring'] = 'Восстановление '; // Dont remove the trailing space
$l['prog_restore_complete'] = 'Restore Completed.';
$l['no_restore_functions'] = 'The RESTORE FUNCTIONS file could not be found! Please report this to the server administrator.';
$l['backup_file_empty'] = 'Backup file is empty';
$l['db_not_exist'] = 'Database file does not exist';
$l['db_empty'] = 'The database file is empty';

$l['read_archive'] = 'Reading the archive';

$l['no_backup_file'] = 'Backup file not present';

$l['wpc_not_in_free'] = 'Remote Backups cannot be restored in the Free version of '.APP.'! You can purchase the premium plan <a href="'.$globals['index'].'act=wpc_plans">here</a> to continue using them.';

$l['wpc_return'] = 'Return to Backups';

$l['ampps_notify_premium'] = 'This feature is available in the premium version of AMPPS. Please purchase <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';