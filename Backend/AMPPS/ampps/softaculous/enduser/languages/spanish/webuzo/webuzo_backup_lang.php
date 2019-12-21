<?php

//////////////////////////////////////////////////////////////
//===========================================================
// webuzo_backup_lang.php
//===========================================================
// SOFTACULOUS 
// Version : 2.4.3
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Date:       12th March 2016
// Time:       11:00 hrs
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

$l['<title>'] = APP.' - Backup and Restore';
$l['backup_full'] = 'Full Backup';
$l['backup_home'] = 'Home Backup';
$l['backup_db'] = 'Data Backup';
$l['backup_mail'] = 'Mail Backup';
$l['backup_log'] = 'Logs';
$l['backup_now'] = 'Backup Now';
$l['filename'] = 'File Name';
$l['option'] = 'Options';
$l['no_backup'] = 'There are no backups files found';
$l['restore'] = 'Restore';
$l['download'] = 'Download';
$l['delete'] = 'Delete';
$l['clear_logs'] = 'Clear Logs';
$l['restore_cnf'] = 'Are you sure you want to restore this file ?';
$l['delete_cnf'] = 'Are you sure you want to delete this file ?';
$l['done_delete'] = 'Record deleted successfully';
$l['connect_error'] = 'Unable to connect to the server';
$l['strt_backup'] = 'Backup started in background';
$l['strt_restore'] = 'Restore started in background';
$l['size'] = 'Size';
$l['err_script'] = 'There were some errors while calling the script';
$l['wrng_type'] = 'Backup type not proper';
$l['wrng_file'] = 'File specified is not a backup file';
$l['file_deleted'] = 'Backup file deleted';
$l['invalid_file'] = 'Invalid File';
$l['err_clearlog'] = 'Log file would not be deleted';
$l['log_empty'] = '** Backup log file is empty **';
$l['ref_logs'] = 'Refresh Logs';
$l['access_denied'] = 'Access denied';
$l['only_for_premium'] = 'This feature is only available to Premium license users';

//For scheduling backups
$l['auto_backup'] = 'Schedule Backups';
$l['minute'] = 'Minute';
$l['hour'] = 'Hour';
$l['day'] = 'Day';
$l['month'] = 'Month';
$l['weekday'] = 'Weekday';
$l['type'] = 'Type';
$l['no_minute'] = 'Minute field cannot be empty';
$l['no_hour'] = 'Hour field cannot be empty';
$l['no_day'] = 'Day field cannot be empty';
$l['no_month'] = 'Month field cannot be empty';
$l['no_weekday'] = 'Weekday field cannot be empty';
$l['err_invalid_minute'] = 'Minute field not formatted correctly';
$l['err_invalid_hour'] = 'Hour field not formatted correctly';
$l['err_invalid_day'] = 'Day field not formatted correctly';
$l['err_invalid_month'] = 'Month field not formatted correctly';
$l['err_invalid_weekday'] = 'Weekday field not formatted correctly';
$l['err_add_msg'] = 'Some error occurred while adding the record';
$l['no_autobackup'] = 'No backups scheduled';
$l['mtype'] = '[0-59]';
$l['htype'] = '[0-23]';
$l['dtype'] = '[1-31]';
$l['motype'] = '[1-12]';
$l['wtype'] = '[0-6]';
$l['schedule'] = 'Schedule';
$l['comm_sett'] = 'Common Settings';
$l['every_mon'] = 'Every Month (*)';
$l['every_other_mon'] = 'Every Other Month (*/2)';
$l['every_third_mon'] = 'Every Third Month (*/3)';
$l['sun'] = 'Sunday';
$l['mon'] = 'Monday';
$l['tues'] = 'Tuesday';
$l['wed'] = 'Wednesday';
$l['thur'] = 'Thursday';
$l['fri'] = 'Friday';
$l['sat'] = 'Saturday';
$l['every_weekday'] = 'Every Weekday (1-5)';
$l['every_weekend'] = 'Every Weekend (0,6)';
$l['every_mon_tues_wed'] = 'Every Monday Tuesday Wednesday (1,2,3)';
$l['every_sun_tues_thur'] = 'Every Sunday Tuesday Thursday (0,2,4)';
$l['every_day'] = 'Every Day(*)';
$l['every_other_day'] = 'Every Other Day(*/2)';
$l['schedule_done'] = 'Backup scheduled successfully';
$l['remove_cnf'] = 'Are you sure you want to remove the scheduled backup entry';
$l['remove_done'] = 'Scheduled backup entry removed';
$l['err_norecord'] = 'No such record found';
$l['err_del_msg'] = 'Delete operation failed';
$l['remove_backups'] = 'Remove Backups';
$l['go'] = 'Go';
$l['with_selected'] = 'With Selected';
$l['rem_mul_backups_msg'] = 'Are you sure you want to delete all the selected backups?';
$l['selected_files_deleted'] = 'All the selected files were successfully removed.';
$l['action_msg'] = 'Please select appropriate action';
$l['select_backups'] = 'Please select atleast one backup file to be removed';
$l['error'] = 'Error';
$l['warning'] = 'Warning';
$l['unable_to_delete'] = 'Unable to delete the following backup files:';
$l['refresh_table'] = 'Refresh Table';
$l['remote_backup'] = 'Backup Servers';
$l['name'] = 'Name';
$l['hostname'] = 'Hostname';
$l['type'] = 'Type';
$l['username'] = 'Username';
$l['password'] = 'Password';
$l['port'] = 'Port';
$l['no_backup_servers'] = 'No backup servers not found';
$l['manage'] = 'Manage';
$l['remove'] = 'Remove';
$l['remove_backup_server'] = 'Are you sure you want to remove this server';
$l['add_backup_server'] = 'Add Backup Server';
$l['backup_server_removed'] = 'Backup server removed successfully';
$l['select_backup_server'] = 'Please select atleast one backup server to be removed';
$l['rem_mul_backup_server_msg'] = 'Are you sure you want to remove all the selected backup servers ?';
$l['remove_server'] = 'Remove Servers';
$l['selected_servers_removed'] = 'All the selected backup servers were successfully removed';
$l['backup_location'] = 'Backup Location';
$l['select_server'] = 'Select Backup Server';
$l['skip_softaculous'] = 'Skip Softaculous Backup';
$l['skip_softaculous_sub'] = 'softaculous_backups directory will not be backed up';
$l['backup_server'] = 'Backup Server';
$l['no_backup_location'] = 'The Backup location field cannot be empty';
$l['edit'] = 'Edit';
$l['removing_remote_files'] = 'Delete operation successfull. Please note Remote backups may take some time to delete.';
$l['server_name'] = 'Server Name';