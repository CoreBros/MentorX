<?php

//////////////////////////////////////////////////////////////
//===========================================================
// backups_lang.php
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

// Error strings
$l['off_backup_restore'] = 'Backup/Restore feature has been disabled by admin';

//Theme Strings
$l['<title>'] = APP.' - Резервное копирование';
$l['backups_head'] = 'Резервное копирование и восстановление';
$l['file'] = 'Название файла';
$l['bac_time'] = 'Резервная копия';
$l['size'] = 'Размер';
$l['remove'] = 'Удалить резервную копию';
$l['download'] = 'Скачать резервную копию';
$l['size_mb'] = 'МБ';
$l['options'] = 'Опции';
$l['no_info'] = 'Нет информации';
$l['no_ins'] = 'У вас нет каких-либо резервных копий';
$l['upd_to'] = 'Обновить до версии';
$l['backup_deleted'] = 'Резервная копия была успешно удалена.';
$l['confirm_del'] = 'Вы уверены, что хотите удалить файл резервной копии?';
$l['restore'] = 'Восстановить';
$l['del_insid'] = 'Are you sure you wish to remove the selected backup(s) ? The action will be irreversible. \nNo further confirmations will be asked !';
$l['rem_backup_id'] = 'Removing Backup - ';
$l['no_sel_inst'] = 'No backup(s) selected to remove.';
$l['inst_remvd'] = 'The selected backup(s) have been removed. The page will now be reloaded !';
$l['editdetail'] = 'Редактировать';
$l['go'] = 'Вперёд';
$l['version'] = 'Версия';
$l['installation_removed'] = 'Installation has been removed, which was installed on the following url : <b>&soft-1;</b>. You can restore it using the Backup.';
$l['invalid_downloadfile'] = 'Не валидный файл резервной копии'; // To be translated
$l['note'] = 'Заметки'; // To be translated
$l['with_selected'] = 'С выделенными';
$l['backups_expire'] = 'Your backups will be automatically purged after <b>&soft-1;</b> days of the backup creation.';
$l['max_backups'] = 'You currently have <b>&soft-1;</b> backups in your account. Your maximum backups limit is <b>&soft-2;</b>.'; 

$l['backup_locations'] = 'Manage Backup Locations';
$l['remote_location'] = 'Backup on ';