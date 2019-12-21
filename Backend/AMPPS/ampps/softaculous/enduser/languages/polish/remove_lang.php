<?php

//////////////////////////////////////////////////////////////
//===========================================================
// remove_lang.php
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

$l['no_ins'] = 'Nie dodano żadnej instalacji';
$l['wrong_ins_title'] = 'Błędne ID Instalacji';
$l['wrong_ins'] = 'Przesłany przez Ciebie ID instalacji nie istnieje';
$l['cant_remove_dir'] = 'Nie można usunąć katalogu ponieważ jest to katalog domowy. Proszę odznaczyć opcję <b>Usuń katalog</b> aby kontynuować bez usuwania tego katalogu.';
$l['cant_remove_wwwdir'] = 'Nie można usunąć katalogu WEB ponieważ jest to katalog domowy. Proszę odznaczyć opcję <b>Usuń katalog WEB</b> aby kontynuować bez usuwania tego katalogu.';
$l['mail_rem_ins'] = 'Instalacja z &soft-1; została usunięta. Poniżej znajdują się szczegóły dotyczące instalacji:';
$l['mail_path'] = 'Ścieżka';
$l['mail_url'] = 'URL';
$l['mail_db'] = 'Bazy danych MySQL';
$l['mail_dbuser'] = 'Użytkownik MySQL DB';
$l['mail_dbhost'] = 'Host MySQL DB';
$l['mail_dbpass'] = 'Hasło MySQL DB';
$l['mail_time'] = 'Czas instalacji';
$l['mail_rem_time'] = 'Czas usunięcia';
$l['mail_subject'] = 'Usunięte instalacje z &soft-1;';
$l['mail_cron_command'] = 'Zadanie CRON';
$l['mail_datadir'] = 'Katalog danych';
$l['mail_wwwdir'] = 'Web directory';
$l['checking_data'] = 'Sprawdzenia zatwierdzonych danych';
$l['rem_db'] = 'Usuwanie bazy danych/użytkownika bazy danych';
$l['rem_dir'] = 'Usunięcie katalogu';
$l['rem_datadir'] = 'Usunięcie katalogu danych';
$l['rem_cron'] = 'Usuwanie zadań crona';
$l['finishing_process'] = 'Pomyślnie usunięto';
$l['wait_note'] = '<b>Uwaga:</b> To może zająć 3-4 minuty. Prosimy nie zamykać tej strony do momentu, aż pasek postępu zapełni się w 100%';


//Theme Strings
$l['<title>'] = APP.' - Remove';
$l['info'] = 'Info';
$l['ins_softname'] = 'Oprogramowanie';
$l['ins_num'] = 'Numer instalacji';
$l['ins_ver'] = 'Wersja';
$l['ins_time'] = 'Czas instalacji';
$l['ins_path'] = 'Ścieżka';
$l['ins_url'] = 'URL';
$l['ins_db'] = 'Nazwa bazy danych';
$l['ins_dbuser'] = 'Użytkownik bazy danych';
$l['ins_dbpass'] = 'Hasło bazy danych';
$l['ins_dbhost'] = 'Host bazy danych';
$l['remove_ins'] = 'Usunąć instalację';
$l['remove_dir'] = 'Usuń katalog';
$l['remove_dir_exp'] = 'Jeśli zaznaczysz tą opcję zostanie usunięty cały katalog';
$l['remove_db'] = 'Usunięcie bazy danych';
$l['remove_db_exp'] = 'Jeśli zaznaczysz tą opcję zostanie usunięta baza danych';
$l['remove_dbuser'] = 'Usunąć użytkownika bazy danych';
$l['remove_dbuser_exp'] = 'Jeśli zostanie zaznaczona ta opcja, użytkownik bazy danych zostaną także usunięty';
$l['remove_conf'] = 'Ta operacja jest nieodwracalna! \n Czy na pewno chcesz usunąć tą instalację?';
$l['uninstalled'] = 'Instalacji została pomyślnie usunięta';
$l['removeins'] = 'Usuń instalację';
$l['ins_cron_command'] = 'Komendy crona';
$l['remove_datadir'] = 'Usuń katalog danych';
$l['remove_datadir_exp'] = 'Jeśli ta opcja będzie zaznaczona, katalog danych będzie usunięty.';
$l['ins_datadir'] = 'Katalog danych';
$l['remove_wwwdir'] = 'Usuń katalog Web';
$l['remove_wwwdir_exp'] = 'Jeśli ta opcja będzie zaznaczona, katalog danych będzie usunięty.';
$l['ins_wwwdir'] = 'Web directory';
$l['return'] = 'Powrót do przegladu';
$l['prog_removing'] = 'Usuwanie';// Dont remove the trailing space
$l['prog_remove_complete'] = 'Instalacja usunięta.';
$l['disabled_script_info'] = 'Brak informacji ponieważ ten skrypt został wyłączony.';

$l['wpc_return'] = 'Return to Installations';