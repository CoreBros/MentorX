<?php

//////////////////////////////////////////////////////////////
//===========================================================
// backup_lang.php
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

$l['no_ins'] = 'Няма изпратени инсталации';
$l['wrong_ins_title'] = 'Грешен инсталационен идентификатор';
$l['wrong_ins'] = 'Инсталационният идентификатор сте подали не съществува';
$l['backup_ftp_error'] = 'Could not create Backup Directory <b>&soft-1;</b>. Please create manually and try again.';
$l['err_backup'] = 'Could not create Backup.';
$l['no_space_backup'] = 'You do not have sufficient space to backup this installation!';
$l['err_notelength'] = 'Backup note must be less than 255 characters';
$l['off_backup_restore'] = 'Backup/Restore feature has been disabled by admin';

$l['cant_backup_dir'] = 'Помощна програма за архивиране не може да направи резервно копие на файлове.';
$l['could_not_read'] = 'Softaculous не може да прочете следния файл/директория <b>&soft-1;</b> Моля направете файла/директорията да се чете за да продължите да използвате архивирането.';
$l['cant_datadir_dir'] = 'Изникна грешка при добавяне на директория с данни';
$l['cant_wwwdir'] = 'Изникна грешка при добавяне на уеб директория';
$l['cant_backup_db'] = 'Изникна грешка при добавяне на базата данни в резервното копие';
$l['err_perm_file'] = 'Изникна грешка докато се опитвахте да направите промяна в правата на файла';
$l['err_dataperm_file'] = 'Изникна грешка докато се опитвахте да направите промяна в правата на файла на директорията с данни';
$l['err_wwwperm_file'] = 'Изникна грешка докато се опитвахте да направите промяна в правата на файла на уеб директорията';
$l['save_dir_perms'] = 'Не можете да запазите правата на файла';
$l['save_datadir_perms'] = 'Не можете да запазите правата на директорията с данни';
$l['save_www_perms'] = 'Не можете да запазите правата на уеб директорията';
$l['cant_connect_mysql'] = 'Could not connect to database, please check the Username/Password of your database. If changed, please update the details in Softaculous installations using Edit Details.';
//Theme Strings
$l['<title>'] = APP.' - Архивиране';
$l['info'] = 'Информация';
$l['ins_softname'] = 'Софтуер';
$l['ins_num'] = 'Инсталационен номер';
$l['ins_ver'] = 'Версия';
$l['ins_time'] = 'Време на инсталацията';
$l['ins_path'] = 'Директория';
$l['ins_wwwdir'] = 'Уеб директория';
$l['ins_url'] = 'URL';
$l['ins_db'] = 'База данни име';
$l['ins_dbuser'] = 'База данни потребител';
$l['ins_dbpass'] = 'База данни парола';
$l['ins_dbhost'] = 'База данни хост';
$l['backup_ins'] = 'Архивиране на инсталацията';
$l['backup_dir'] = 'Директория за архивиране';
$l['backup_dir_exp'] = 'Ако отбележите това, цялата папка ще бъде архивирана';
$l['backup_db'] = 'Резервно копие на база данни';
$l['backup_db_exp'] = 'АКо отбележите това, базата данни ще бъде архивирана';
$l['backup_conf'] = 'Архивиране може да отнеме известно време в зависимост от данните. Моля не затваряйте уеб страницата и не преминавайте към друга страница.';
$l['backedup'] = 'Резервното копие е създадено успешно. Можете да го изтеглите от <a href="'.$globals['index'].'act=backups">Резервни копия</a> page.';
$l['backup_ins'] = 'Резервно копие на инсталацията';
$l['backup_datadir'] = 'Резарвно копие на директорията с данни';
$l['backup_datadir_exp'] = 'Ако е отбелязано, директорията с данни ще бъде запазена.';
$l['ins_datadir'] = 'Директория с данни';
$l['return'] = 'Назад към преглед';
$l['ins_cron_command'] = 'Cron команда';
$l['backup_wwwdir'] = 'Резервно копие на уеб директория';
$l['backup_wwwdir_exp'] = 'Ако е отбелязано, уеб директорията ще бъде запазена.';
$l['checking_data'] = 'Проверка на предоставените данни';
$l['backingup_db'] = 'Създаване на резервно копие на базата данни';
$l['backingup_dir'] = 'Създаване на резервно копие на директорията';
$l['backingup_datadir'] = 'Създаване на резервно копие на директорията с данни';
$l['finishing_process'] = 'Завършване на резервното копие';
$l['wait_note'] = '<b>ВНИМАНИЕ:</b> Това може да отнеме 3-4 минути. Можете да напуснете тази страница, ако желаете!';
$l['backingup'] = 'Резервните копия се създават във фонов режим. Вие ще бъдете уведомени по електронната поща, след като приключи. След като архивирането приключи, можете да го изтеглите от <a href="'.$globals['index'].'act=backups">Резервни копия</a> page.';
$l['check_email'] = 'Моля проверете електронната си поща за състоянието на резервните копия';
$l['prog_backingup'] = 'Backing Up '; // Dont remove the trailing space
$l['prog_backup_complete'] = 'Backup Completed.';
$l['backup_note'] = 'Backup Note';
$l['backup_note_exp'] = 'You can save a note for your reference';
$l['backup_operation'] = 'Select Backup Operation(s)';
$l['backups_expire'] = 'Your backups will be automatically purged after <b>&soft-1;</b> days of the backup creation.';
$l['err_max_backups'] = 'You have reached the maximum number of (<b>&soft-1;</b>) backups allowed. Please delete unwanted backups to be able to take a new backup.';
$l['backup_notes'] = 'Backup created by '.APP.' auto backup';
$l['max_backups'] = 'You currently have <b>&soft-1;</b> backups in your account. Your maximum backups limit is <b>&soft-2;</b>.';

$l['no_backup_functions'] = 'The BACKUP FUNCTIONS file could not be found! Please report this to the server administrator.';
$l['no_dir_exists'] = 'The Installation Directory does not exist.';
$l['backup_location_name'] = 'Backup Location';
$l['backup_file_empty'] = 'Incorrect backup file size : 0';
$l['err_mysql_db'] = 'The MySQL database name is incorrect as the database could not be selected.';
$l['backup_loc'] = 'Backup Location'; 
$l['exp_backup_loc'] = 'Choose the backup location where you would like to store the backup'; 
$l['default'] = 'Default'; 
$l['invalid_backup_location'] = 'Backup location submitted does not exist'; 
$l['local_folder'] = 'Local Folder'; 

$l['invalid_access_token'] = 'Invalid Access Token. Please Re-Authorize '.APP.' Dropbox APP from the Edit Backup location page in '.APP.' enduser panel';
$l['insufficient_space'] = 'Your Dropbox account is full. Please free some space and attempt the backup after sometime';

$l['gdrive_err_init'] = 'There were some errors while initiating the backup on Google Drive!!';
$l['gdrive_err_end'] = 'There were some errors while committing backup to your Google Drive account!!';

$l['error_max_backup_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Backups allowed per script';

$l['ftp_access'] = 'PHP process is unable to write files to your server. Please configure FTP access to continue.';
$l['configure_domain'] = 'Configure Settings';

$l['wpc_return'] = 'Return to Backups';

$l['ampps_notify_premium'] = 'This feature is available in the premium version of AMPPS. Please purchase <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';
$l['backing_up'] = 'Your backup is being created in background. You will be notified by email once its completed. You can track the backup process from the <a href="'.$globals['index'].'act=eu_tasklist">Task List</a> page.<br /> Your installation URL : <a href="&soft-1;" target="_blank">&soft-1;</a>';