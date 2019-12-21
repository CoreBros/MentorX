<?php

//////////////////////////////////////////////////////////////
//===========================================================
// cronjob_lang.php
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

$l['no_hour'] = 'Hour field cannot be empty.';
$l['no_minute'] = 'Minute field cannot be empty.';
$l['no_day'] = 'Day field cannot be empty.';
$l['no_month'] = 'Month field cannot be empty.';
$l['no_weekday'] = 'Weekday field cannot be empty.';
$l['no_cmd'] = 'Please specify a command to execute.';
$l['err_invalid_minute'] = 'Minute field not formatted correctly.';
$l['err_invalid_hour'] = 'Hour field not formatted correctly.';
$l['err_invalid_day'] = 'Day field not formatted correctly.';
$l['err_invalid_month'] = 'Month field not formatted correctly.';
$l['err_invalid_weekday'] = 'Weekday field not formatted correctly.';
$l['err_del_msg'] = 'Some error occurred while deleting the record';
$l['err_add_msg'] = 'Some error occurred while adding the record';
$l['err_edit_msg'] = 'Some error occurred while updating the record';
$l['err_norecord'] = 'No record found';
$l['no_cron_added'] = 'No Cron Job(s) Added';

//Theme Strings
$l['<title>'] = APP . ' - Cron Job';
$l['lbl_head'] = 'Cron Job';
$l['minute'] = 'Minute';
$l['mtype'] = '[0-59]';
$l['hour'] = 'Ora';
$l['htype'] = '[0-23]';
$l['day'] = 'Giorno';
$l['dtype'] = '[1-31]';
$l['month'] = 'Mese';
$l['motype'] = '[1-12]';
$l['weekday'] = 'Giorno della settimana';
$l['wtype'] = '[0-6]';
$l['cmd'] = 'Command';
$l['submit_button'] = 'Add Cron Job';
$l['create'] = 'Cron Job added successully';
$l['option'] = 'Option';
$l['cron_head'] = 'Cron Job for user';
$l['delete'] = 'Cron Job deleted successfully';
$l['record_del_conf'] = 'Are you sure you want to delete this record ?';
$l['edit'] = 'Cron Job updated successfully';
$l['note'] = '<strong>Note:</strong> You can learn more about Cron Job <a href="http://www.manpagez.com/man/5/crontab/" target="_blank">here</a>';
$l['every_min'] = 'Every Minute (*)';
$l['every_five_min'] = 'Every Five Minutes (*/5)';
$l['every_ten_min'] = 'Every Ten Minutes (*/10)';
$l['every_fifteen_min'] = 'Every Fiveteen Minutes (*/15)';
$l['comm_sett'] = 'Common Settings';
$l['every_hr'] = 'Every Hour (*)';
$l['every_other_hr'] = 'Every Other Hour (*/2)';
$l['every_fourth_hr'] = 'Every Fourth Hour (*/4)';
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