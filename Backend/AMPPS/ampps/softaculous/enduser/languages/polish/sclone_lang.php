<?php

//////////////////////////////////////////////////////////////
//===========================================================
// sclone_lang.php
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
$l['no_info_file'] = 'Plik INSTALL.XML nie został odnaleziony! Prosimy wysłać zgłoszenie do administratora serwera.';
$l['incompatible'] = 'Oprogramowanie wymaga wyższej wersji '. APP.'! Prosimy o wysłanie zgłoszenia do administratora serwera.';
$l['no_install'] = 'Plik INSTALL.XML nie został odnaleziony! Prosimy wysłać zgłoszenie do administratora serwera.';
$l['no_functions'] = 'Plik CLONE FUNCTIONS nie został znaleziony!';
$l['no_clone'] = 'Brak klonów';
$l['no_softdomain'] = 'Nie wybrałeś domeny do zainstalowania oprogramowania.';
$l['wrong_softdomain'] = 'Nie można odnaleźć ścieżki wybranej domeny.';
$l['softdirectory_exists'] = 'Ścieżka, którą wprowadziłeś już istnieje! Prosimy wprowadzić inną.';
$l['no_space'] = 'Nie masz wystarczającej ilości wolnej powierzchni, aby zainstalować oprogramowanie!';
$l['no_softdb'] = 'Baza danych nie została wysłana.';
$l['database_exists'] = 'Baza danych już istnieje. Proszę wybrać inną nazwę.';
$l['databaseuser_exists'] = 'Użytkownik bazy danych już istnieje. Proszę wybrać inną nazwę bazy danych.';
$l['db_name_long'] = 'Nazwa bazy danych nie może być dłuższa niż 7 liter. Prosimy, wybrać krótszą nazwę bazy danych.';
$l['db_limit_crossed'] = 'Została osiągnięta maksymalna liczba baz danych, którą możesz utworzyć, w takim wypadku instalacja nie może być kontynuowana.';
$l['cloning'] = 'Klonowanie instalacji';
$l['downloading'] = 'Pobieranie pakietu';
$l['cant_clone_db'] = 'Nie można sklonować bazy danych';
$l['fail_create'] = 'Nie można utworzyć katalogu';
$l['fail_create_datadir'] = 'Nie można utworzyć katalogu danych';
$l['cant_clone_dir'] = 'Katalogu nie może być sklonowany jeśli jest to katalog domowy.';
$l['cant_connect_mysql'] = 'Nie można połączyć się z bazą danych, prosimy o sprawdzenie nazwy użytkownika i hasła. Jeśli uległy zmianie, prosimy o aktualizację tych danych w instalacji Softaculous przy użyciu opcji Edytuj szczegóły.';
$l['same_ins'] = 'Nie jest możliwe sklonowanie instalacji do tej samej lokalizacji';
$l['ins_exists'] = 'Wydaje się, że masz już <b>&soft-1;</b> instalację w wybranej lokalizacji';
$l['ins_recursive'] = 'Nie można sklonować instalacji do podkatalogu oryginalnej instalacji';
$l['no_clone_support'] = 'Clone is not supported for this script';
$l['invalid_script'] = 'Invalid Script ID';
$l['no_domain_found'] = 'No domain found. Please add a domain to install the script';

$l['no_cron_min'] = 'Nie została określona minuta dla crona';
$l['no_cron_hour'] = 'Nie została określona godzina dla crona';
$l['no_cron_day'] = 'Nie został określony dzień dla crona';
$l['no_cron_month'] = 'Nie został określony miesiąc dla crona';
$l['no_cron_weekday'] = 'Nie został określony dzień powszedni dla crona';
$l['wrong_cron_min'] = 'Źle podana minuta. Prawidłowa wartość to 0-59 lub <b>*</b>';
$l['wrong_cron_hour'] = 'Źle podana godzina. Prawidłowa wartość to 0-23 lub <b>*</b>';
$l['wrong_cron_day'] = 'Źle podany dzień. Prawidłowa wartość to: 1-31 lub w <b>*</b>';
$l['wrong_cron_month'] = 'Źle podany miesiąc. Prawidłowa wartość to: 1-12 lub <b>*</b>';
$l['wrong_cron_weekday'] = 'Źle podany dzień powszedni. Prawidłowa wartość to 0-7 lub <b>*</b>';
$l['no_datadir'] = 'Nie został określony katalog danych';
$l['datadir_exists'] = 'Dodany katalog danych już nie istnieje. Określ inny katalog.';
$l['no_decompress_data'] = 'Było kilka błędów podczas dekompresji plików DATA.';
$l['some_files_exist'] = 'Instalacja nie może być kontynuowana, ponieważ w folderze docelowym istnieją następujące pliki:';
$l['delete_files'] = 'Proszę usunąć te pliki lub wybrać inny katalog.';
$l['overwrite_exist'] = '<b>LUB</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">zaznacz pole wyboru, aby nadpisać wszystkie pliki i kontynuować dalej</span></b>';
$l['prog_cloning'] = 'Klonowanie'; // Dont remove trailing space
$l['prog_cloning_complete'] = 'Klonowanie zakończone.';
$l['checking_data'] = 'Sprawdzenia zatwierdzonych danych';
$l['unzipping_files'] = 'Kopiowanie plików i katalogów';
$l['unzipping_datadir'] = 'Rozpakowaniu plików danych';
$l['prop_db'] = 'Propagowanie w bazie danych';
$l['finishing_process'] = 'Kończenie klonowania';
$l['wait_note'] = '<b>Uwaga:</b> To może zająć 3-4 minuty. Prosimy nie zamykać tej strony do momentu, aż pasek postępu zapełni się w 100%';
$l['no_hostname'] = 'Podaj nazwę hosta bazy danych';
$l['no_dbusername'] = 'Wprowadź swoją nazwę użytkownika bazy danych';
$l['no_dbuserpass'] = 'Podaj hasło bazy danych';
$l['softdirectory_invalid'] = 'Wprowadzone ścieżka jest nieprawidłowa.';
$l['softdatadir_invalid'] = 'Katalogu danych, który wpisałeś jest niepoprawny.';
$l['err_domain'] = 'Brak domeny';
$l['err_domain_admin'] = 'Ten użytkownik nie ma żadnych domeny. Prosimy o kontakt z administratorem.';
$l['no_https'] = 'Nie znaleziono zaufanego certyfikatu SSL';
$l['no_php_install'] = 'Java nie jest zainstalowana. Aby ją zainstalować, kliknij <a href="'.$globals['index'].'act=apps&app=37">tutaj</a>';
$l['no_mysql_install'] = 'MySQL jest niezainstalowany. Aby go zainstalować kliknij <a href="'.$globals['index'].'act=apps&app=16">tutaj</a>';
$l['no_field'] = 'Pole <b>&soft-1;</b> jest wymagana i musi być wypełnione.';
$l['error_adddb'] = 'Nie można utworzyć bazy danych';
$l['error_adduser'] = 'Wystąpił błąd podczas dodawania użytkownika do nowej bazy danych';
$l['no_package'] = 'Nie znaleziono pakietu instalacyjnego!';
$l['no_decompress'] = 'Było kilka błędów podczas dekompresji plików pakietu.';

//Theme Strings
$l['<title>'] = APP.' - Clone Installation';
$l['info'] = 'Info';
$l['ins_softname'] = 'Oprogramowanie';
$l['ins_num'] = 'Numer instalacji';
$l['ins_ver'] = 'Wersja';
$l['ins_time'] = 'Czas instalacji';
$l['ins_path'] = 'Ścieżka';
$l['ins_url'] = 'URL';
$l['ins_admin_url'] = 'Admin URL';
$l['ins_db'] = 'Nazwa bazy danych';
$l['ins_dbuser'] = 'Użytkownik bazy danych';
$l['ins_dbpass'] = 'Hasło bazy danych';
$l['ins_dbhost'] = 'Host bazy danych';
$l['ins_datadir'] = 'Katalog danych';
$l['ins_wwwdir'] = 'Web directory';
$l['ins_wwwurl'] = 'URL Katalogu Web';
$l['ins_cron_command'] = 'Komendy crona';
$l['cloned'] = 'Instalacja została pomyślnie sklonowana';
$l['clone_ins'] = 'Szczegóły instalacji klona';
$l['cloneins'] = 'Klon instalacji';
$l['choose_protocol'] = 'Wybierz protokół';
$l['choose_protocol_exp'] = 'Jeśli witryna posiada SSL to wybierz protokół HTTPS.';
$l['cron_job'] = 'Zadanie CRON';
$l['cron_job_exp'] = 'Ten skrypt wymaga CRONA do pracy. Proszę określić chronometraż CRON. Jeśli nie masz odpowiedniej wiedzy, zostaw to tak jak jest!';
$l['cron_min'] = 'Min';
$l['cron_hour'] = 'Godzina';
$l['cron_day'] = 'Dzień';
$l['cron_month'] = 'Miesiąc';
$l['cron_weekday'] = 'Dni powszednie';
$l['datadir'] = 'Katalog danych';
$l['datadir_exp'] = 'Ten skrypt wymaga do przechowywania swoich danych katalogu, który nie jest dostępny za pośrednictwem Internetu. W takim wypadku zostanie on utworzony w Twoim katalogu homr, np.: jeśli określisz <b>datadir</b> poniżej będzie utworzony - /home/username/<b>datadir</b>';
$l['db_name_long'] = 'Nazwa bazy danych nie może być dłuższa niż 7 liter. Prosimy, wybrać krótszą nazwę bazy danych.';
$l['db_alpha_num'] = 'W nazwie bazy danych można używać tylko znaków alfanumerycznych.';
$l['overwrite'] = 'Nadpisz pliki';
$l['database_exists'] = 'Baza danych już istnieje. Proszę wybrać inną nazwę.';
$l['no_softdomain'] = 'Nie wybrałeś domeny do zainstalowania oprogramowania.';
$l['wrong_softdomain'] = 'Nie można odnaleźć ścieżki wybranej domeny.';
$l['no_space'] = 'Nie masz wystarczającej ilości wolnej powierzchni, aby zainstalować oprogramowanie!';
$l['no_softdb'] = 'Baza danych nie została wysłana.';
$l['choose_domain'] = 'Wybierz domenę';
$l['choose_domain_exp'] = 'Proszę wybrać domenę do zainstalowania oprogramowania.';
$l['in_directory'] = 'W katalogu';
$l['in_directory_exp'] = 'Katalog jest powiązany z Twoją domenę i <b>nie powinien istnieć</b>. Np.: aby dokonać instalacji w http://mydomain/dir/ wpisz tylko <b>dir</b>. Aby zainstalować tylko w http://mydomain/ zostaw to pole puste.';
$l['database_name'] = 'Nazwa bazy danych';
$l['database_name_exp'] = 'Wpisz nazwę bazy danych, która ma być użyta do instalacji';
$l['softcopy_note'] = '<b>Uwaga</b>: Ten program wymaga do instalacji użycia swoich własnych narzędzi instalacyjnych. Prosimy odwiedź adres URL, który pojawi się po skopiowaniu plików, aby zakończyć proces instalacji.';
$l['softsubmit'] = 'Klon';
$l['congrats'] = 'Gratulacje, instalacja została pomyślnie sklonowana';
$l['succesful'] = 'została pomyślnie sklonowana do';
$l['admin_url'] = 'Administracyjny adres URL';
$l['setup_continue'] = 'Jednakże, proces instalacji zostanie zakończony przez oprogramowanie. Aby zakończyć instalację, odwiedź następujący adres URL';
$l['enjoy'] = 'Mamy nadzieję, że proces instalacji był łatwy.';
$l['install_notes'] = 'Oto kilka ważnych uwag. Sugerujemy aby się z nimi zapoznać';
$l['please_note'] = '<b>Uwaga</b>: '.APP.' jest automatyczny instalatorem oprogramowania i nie zapewnia wsparcia dla poszczególnych pakietów. Odwiedź witrynę sieci web w celu uzyskania wsparcia!';
$l['regards'] = 'Podziękowania';
$l['softinstaller'] = 'Autoinstalator '.APP.'';
$l['return'] = 'Powrót do przegladu';

// These strings are for Softaculous Remote
$l['hostname'] = 'Nazwa hosta bazy danych';
$l['hostname_exp'] = 'MySQL hostname (głównie <b>localhost</b>)';
$l['dbusername'] = 'Nazwa użytkownika bazy danych';
$l['dbusername_exp'] = 'Nazwa użytkownika MySQL';
$l['dbuserpass'] = 'Hasło bazy danych';
$l['dbuserpass_exp'] = 'Hasło użytkownika MySQL';
$l['database_name_exp_aefer'] = 'Wpisz nazwę bazy danych, która ma być użyta instalacji';

$l['clone_tweet_sub'] = 'Powiedz znajomym';
$l['not_in_free'] = '<b>&soft-1;</b> nie może być aktualizowany w wersji darmowej '. APP.'!';
$l['notify_admin'] = 'Powiadom swojego admina serwera o zakupie wersji premium '. APP.'!';

$l['soft_ins_exists'] = 'An installation already exists at &soft-1; as per our records. To clone the application at this location please uninstall the existing installation!';

$l['no_sclone'] = 'The CLONE.XML file could not be found! Please report this to the server administrator.';
$l['no_functions'] = 'The CLONE FUNCTIONS file could not be found! Please report this to the server administrator.';

$l['clone_push_bg'] = 'Clone has been pushed in background';
$l['err_mysql_db'] = 'The MySQL database name is incorrect as the database could not be selected.';

$l['error_max_clone_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Clone allowed per script';

$l['choose_url'] = 'Choose Installation URL';
$l['choose_url_exp'] = 'Please choose the URL to install the software';

$l['ampps_notify_premium'] = 'This feature is available in the premium version of AMPPS. Please purchase <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';