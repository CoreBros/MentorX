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
$l['<title>'] = APP.' - Yedekler';
$l['backups_head'] = 'Backups and Restore';
$l['file'] = 'Dosya Adı';
$l['bac_time'] = 'Yedek';
$l['size'] = 'Boyut';
$l['remove'] = 'Yedeği Sil';
$l['download'] = 'Yedeği İndir';
$l['size_mb'] = 'MB';
$l['options'] = 'Seçenekler';
$l['no_info'] = 'Bilgi yok';
$l['no_ins'] = 'Hiç yedeğiniz yok';
$l['upd_to'] = 'Versiyonu Güncelle';
$l['backup_deleted'] = 'Yedek başarıyla silindi.';
$l['confirm_del'] = 'Yedeği silmek istediğinize emin misiniz?';
$l['restore'] = 'Restore'; 
$l['del_insid'] = 'Are you sure you wish to remove the selected backup(s) ? The action will be irreversible. \nNo further confirmations will be asked !';
$l['rem_backup_id'] = 'Removing Backup - ';
$l['no_sel_inst'] = 'No backup(s) selected to remove.';
$l['inst_remvd'] = 'The selected backup(s) have been removed. The page will now be reloaded !';
$l['editdetail'] = 'Edit Details';
$l['go'] = 'Go';
$l['version'] = 'Version';
$l['installation_removed'] = 'Installation has been removed, which was installed on the following url : <b>&soft-1;</b>. You can restore it using the Backup.';
$l['invalid_downloadfile'] = 'The backup file is invalid'; // To be translated
$l['note'] = 'Notes'; // To be translated
$l['with_selected'] = 'With Selected';
$l['backups_expire'] = 'Your backups will be automatically purged after <b>&soft-1;</b> days of the backup creation.';
$l['max_backups'] = 'You currently have <b>&soft-1;</b> backups in your account. Your maximum backups limit is <b>&soft-2;</b>.'; 

$l['backup_locations'] = 'Manage Backup Locations';
$l['remote_location'] = 'Backup on ';