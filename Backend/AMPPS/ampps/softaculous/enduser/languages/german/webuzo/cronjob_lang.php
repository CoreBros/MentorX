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

$l['no_hour'] = 'Bitte geben Sie die Stunde an';
$l['no_minute'] = 'Bitte geben Sie die Minute an';
$l['no_day'] = 'Bitte geben Sie den Tag an';
$l['no_month'] = 'Bitte geben Sie den Monat an';
$l['no_weekday'] = 'Bitte geben Sie den Wochentag an';
$l['no_cmd'] = 'Bitte geben Sie den Befehl an, der ausgeführt werden soll';
$l['err_invalid_minute'] = 'Das Minute-Feld enthält keine korrekte Formatierung.';
$l['err_invalid_hour'] = 'Das Stunde-Feld enthält keine korrekte Formatierung.';
$l['err_invalid_day'] = 'Das Tag-Feld enthält keine korrekte Formatierung.';
$l['err_invalid_month'] = 'Das Monat-Feldenthält keine korrekte Formatierung.';
$l['err_invalid_weekday'] = 'Das Wochentag-Feld enthält keine korrekte Formatierung.';
$l['err_del_msg'] = 'Einige Fehler beim Löschen des Datensatzes';
$l['err_add_msg'] = 'Einige Fehler beim Hinzufügen des Datensatzes';
$l['err_edit_msg'] = 'Einige Fehler beim Aktualisieren des Datensatzes';
$l['err_norecord'] = 'Keine Daten gefunden';
$l['no_cron_added'] = 'Es wurden keine Cron Job(s) hinzugefügt';

//Theme Strings
$l['<title>'] = APP . ' - Cron Job';
$l['lbl_head'] = 'cron Job';
$l['minute'] = 'Minute';
$l['mtype'] = '[ 0-59 ]';
$l['hour'] = 'Stunde';
$l['htype'] = '[ 0-23 ]';
$l['day'] = 'Tag';
$l['dtype'] = '[1-31]';
$l['month'] = 'Monat';
$l['motype'] = '[1-12]';
$l['weekday'] = 'Wochentag';
$l['wtype'] = '[0-6]';
$l['cmd'] = 'Befehl';
$l['submit_button'] = 'Cron Job hinzufügen';
$l['create'] = 'Cron-Job erfolgreich hinzugefügt';
$l['option'] = 'Optionen';
$l['cron_head'] = 'Cron Job für Benutzer';
$l['delete'] = 'Cron-Job erfolgreich gelöscht';
$l['record_del_conf'] = 'Sind Sie sicher, dass Sie diesen Datensatz wirklich löschen wollen?';
$l['edit'] = 'Cron-Job erfolgreich aktualisiert';
$l['note'] = '<strong>Hinweis:</strong> Weitere Informationen über Cron Jobs erhalten Sie <a href="http://www.manpagez.com/man/5/crontab/" target="_blank">hier</a>';
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