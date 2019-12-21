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

$l['no_info_file'] = 'Plik INSTALL.XML nie został odnaleziony! Prosimy wysłać zgłoszenie do administratora serwera.';
$l['incompatible'] = 'Oprogramowanie wymaga wyższej wersji '. APP.'! Prosimy o wysłanie zgłoszenia do administratora serwera.';
$l['no_install'] = 'Plik INSTALL.XML nie został odnaleziony! Prosimy wysłać zgłoszenie do administratora serwera.';
$l['no_functions'] = 'Plik INSTALL FUNCTIONS nie został odnaleziony! Prosimy wysłać zgłoszenie do administratora serwera.';
$l['no_softdomain'] = 'Nie wybrałeś domeny do zainstalowania oprogramowania.';
$l['wrong_softdomain'] = 'Nie można odnaleźć ścieżki wybranej domeny.';
$l['no_space'] = 'Nie masz wystarczającej ilości wolnej powierzchni, aby zainstalować oprogramowanie!';
$l['no_field'] = 'Pole <b>&soft-1;</b> jest wymagana i musi być wypełnione.';
$l['no_package'] = 'Nie znaleziono pakietu instalacyjnego!';
$l['no_decompress'] = 'Było kilka błędów podczas dekompresji plików pakietu.';
$l['mail_new_ins'] = 'Nowa instalacja &soft-1; została zakończona. Poniżej przedstawiono szczegóły dotyczące instalacji:';
$l['mail_path'] = 'Ścieżka';
$l['mail_url'] = 'URL';
$l['mail_time'] = 'Czas instalacji';
$l['mail_subject'] = 'Nowa instalacja programu &soft-1;';
$l['some_files_exist'] = 'Instalacja nie może być kontynuowana, ponieważ w folderze docelowym istnieją następujące pliki:';
$l['delete_files'] = 'Proszę usunąć te pliki lub wybrać inny katalog.';
$l['checking_data'] = 'Sprawdzenia zatwierdzonych danych';
$l['unzipping_files'] = 'Kopiowanie plików i katalogów';
$l['unzipping_datadir'] = 'Rozpakowaniu plików danych';
$l['prop_db'] = 'Propagowanie w bazie danych';
$l['finishing_process'] = 'Kończenie instalacji';
$l['wait_note'] = '<b>Uwaga:</b> To może zająć 3-4 minuty. Prosimy nie zamykać tej strony do momentu, aż pasek postępu zapełni się w 100%';
$l['softdirectory_invalid'] = 'Wprowadzone ścieżka jest nieprawidłowa.';
$l['err_domain'] = 'No Domain';
$l['err_domain_admin'] = 'This User does not have any Domain. Please contact Administrator.';
$l['no_sel_inst'] = 'Brak wybranych instalacji';
$l['del_insid'] = 'Czy na pewno chcesz usunąć wybrane instalacje?';
$l['ins_emailto'] = 'Szczegóły instalacji e-mail do';
$l['no_https'] = 'Nie znaleziono zaufanego certyfikatu SSL';
$l['err_dbprefix'] = 'Prefiks tabeli jest nieprawidłowy. Prawidłowe wartości to a-z lub A-Z lub 0-9 lub _';
$l['auto_backup_not_allowed'] = 'Wybrana częstotliwość automatycznego backupu jest nieprawidłowa';
$l['invalid_script'] = 'Invalid Script ID';
$l['not_js_script'] = 'This script is not JavaScript';
$l['no_domain_found'] = 'No domain found. Please add a domain to install the script';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['install'] = 'Instaluj';
$l['overview'] = 'Podgląd';
$l['features'] = 'Funkcje';
$l['demo'] = 'Demo';
$l['ratings'] = 'Oceny';
$l['import'] = 'Importuj';
$l['software_ver'] = 'Wersja';
$l['space_req'] = 'Wymagana ilość powierzchni';
$l['available_space'] = 'Dostępna przestrzeń';
$l['req_space'] = 'Wymagana przestrzeń';
$l['mb'] = 'MB';
$l['software_support'] = 'Wsparcie dla software-u';
$l['support_link'] = 'Odwiedź stronę pomocy technicznej';
$l['support_note'] = 'Uwaga: Softaculous nie zapewnia wsparcia dla jakiegokolwiek oprogramowania.';
$l['setup'] = 'Instalacji oprogramowania';
$l['choose_domain'] = 'Wybierz domenę';
$l['choose_domain_exp'] = 'Proszę wybrać domenę do zainstalowania oprogramowania.';
$l['in_directory'] = 'W katalogu';
$l['in_directory_exp'] = 'Katalog jest powiązany z domeną i zostanie <b>utworzony, jeśli nie istnieje</b>. Np.: aby dokonać instalacji w http://mydomain/dir/ wpisz tylko <b>dir</b>. Aby zainstalować tylko w http://mydomain/ zostaw to pole puste.';
$l['softsubmit'] = 'Instaluj';
$l['congrats'] = 'Gratulacje, oprogramowanie zostało pomyślnie zainstalowane';
$l['succesful'] = 'został pomyślnie zainstalowane w';
$l['enjoy'] = 'Mamy nadzieję, że proces instalacji był łatwy.';
$l['install_notes'] = 'Oto kilka ważnych uwag. Sugerujemy aby się z nimi zapoznać';
$l['please_note'] = '<b>Uwaga</b>: '.APP.' jest automatyczny instalatorem oprogramowania i nie zapewnia wsparcia dla poszczególnych pakietów. Odwiedź witrynę sieci web w celu uzyskania wsparcia!';
$l['regards'] = 'Podziękowania';
$l['softinstaller'] = 'Autoinstalator '.APP.'';
$l['return'] = 'Powrót do przegladu';
$l['current_ins'] = 'Obecna instalacja';
$l['link'] = 'Link';
$l['ins_time'] = 'Czas instalacji';
$l['version'] = 'Wersja';
$l['upd_to'] = 'Upgrade do wersji';
$l['remove'] = 'Usuń';
$l['no_info'] = 'Brak informacji';
$l['ratesoft'] = 'Oceń ten skrypt';
$l['reviews'] = 'Opinie';
$l['reviewsoft'] = 'Napisz recenzję';
$l['readreviews'] = 'Przeczytaj Opinie';
$l['reviews_exp'] = 'Przeczytaj recenzje napisane przez innych użytkowników i';
$l['ins_type'] = 'Rodzaj instalacji';
$l['ins_type_exp'] = '<b>Oryginalny pakiet</b> - pakiet jako dostępny ze strony internetowej skryptów. < br / > <b>Tylko pliki bibliotek</b> - tylko pliki bibliotek Javascript.';
$l['ori_pack'] = 'Oryginalny pakiet';
$l['just_lib'] = 'Tylko pliki biblioteki';
$l['overwrite_exist'] = '<b>LUB</b> < br / ><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;"> zaznacz pole wyboru, aby nadpisać wszystkie pliki i kontynuować dalej</span></b>';
$l['overwrite'] = 'Nadpisz pliki';
$l['choose_protocol'] = 'Wybierz protokół';
$l['choose_protocol_exp'] = 'Jeśli witryna posiada SSL to wybierz protokół HTTPS.';
$l['clone'] = 'Klon';
$l['options'] = 'Opcje';
$l['downloading'] = 'Pobieranie pakietu';
$l['installing'] = 'Instalacja skryptu';
$l['go'] = 'Idź';
$l['rem_inst_id'] = 'Usuwanie instalacji-';
$l['inst_remvd'] = 'Wybrane instalacje zostały usunięte. Strony będą teraz ponownie załadowane!';
$l['release_date'] = 'Data wydania';
$l['adv_option'] = 'Zaawansowane opcje';
$l['disable_notify_update'] = 'Wyłącz powiadomienia o aktualizacji';
$l['exp_disable_notify_update'] = 'Jeśli zostawisz zaznaczone, nie otrzymasz żadnych wiadomość e-mail z powiadomieniem o dostępnych aktualizacjach dla tej instalacji.';
$l['prog_installing'] = 'Instaluje'; // Dont remove trailing space
$l['prog_install_complete'] = 'Instalacja zakończona.';

$l['auto_backup'] = 'Automatyczne backupy';
$l['exp_auto_backup'] = APP.' will take automated backups via CRON as per the frequency you select';
$l['auto_backup_rotation'] = 'Rotacja backupu';
$l['exp_auto_backup_rotation'] = 'Jeśli osiągnięty zostanie limit rotacji backupu '. APP.' będzie usuwany najstarszy backup tej instalacji i na jego miejsce będzie utworzony nowy. Backupy zużywają Twoją przestrzeń więc wybierz rotację backupu zgodnie z aktualnym zużyciem';
$l['no_backup'] = 'Brak backupu';
$l['daily'] = 'Raz dziennie';
$l['weekly'] = 'Raz w tygodniu';
$l['monthly'] = 'Raz w miesiącu';
$l['unlimited'] = 'Nieograniczony';
$l['changelog'] = 'Rejestr zmian';
$l['act_upgrade'] = 'Niedawno zaktualizowane';
$l['act_clone'] = 'Niedawno sklonowane';
$l['act_backup'] = 'Niedawno zbackupowane';
$l['act_install'] = 'Niedawno zainstalowane';
$l['act_edit'] = 'Ostatnio edytowane';
$l['act_import'] = 'Ostatnio importowane';
$l['act_restore'] = 'Ostatnio przywrócone';
$l['ampps_download'] = 'Można opracować <b>&soft-1;</b> u twój <b>pulpit</b> przy pomocy nasz developer darmowe narzędzie Softaculous AMPPS. Kliknij <a href="http://www.ampps.com/download?give=latest" target="_blank"><b>tutaj</b></a>aby pobrać <a href="http://www.ampps.com/download?give=latest" target="_blank"><img src="https://images.softaculous.com/ampps.gif" height="25" /></a>';

$l['install_tweet_sub'] = 'Poinformuj swoich znajomych o nowej witrynie';
$l['err_auto_backup_limit'] = 'Rotacja automatycznego backupu nie może być większa niż <b>&soft-1;</b>';
$l['select_domain'] = 'Wybierz domenę';
$l['with_selected'] = 'Z wybranych';
$l['not_in_free'] = '<b>&soft-1;</b> nie może być zainstalowany w wersji darmowej '. APP.'!';
$l['notify_admin'] = 'Powiadom swojego admina serwera o zakupie wersji premium '. APP.'!';
$l['related_scripts'] = 'Powiązane sktypty';
$l['backup'] = 'Backup';
$l['editdetail'] = 'Edit Details';
$l['install_now'] = 'Instaluj';
$l['my_apps'] = 'Moje aplikacje';

$l['bad'] = 'Bad';
$l['good'] = 'Good';
$l['strong'] = 'Strong';
$l['short'] = 'Short';
$l['strength_indicator'] = 'Strength Indicator';

$l['backup_location'] = 'Backup Location';
$l['backup_location_exp'] = 'Choose the backup location to be used while backing up this installation';
$l['default'] = 'Default';
$l['invalid_backup_location'] = 'Backup location submitted does not exist';
$l['local_folder'] = 'Local Folder';

$l['no_cron_min'] = 'No Cron minute was specified';
$l['no_cron_hour'] = 'No Cron hour was specified';
$l['no_cron_day'] = 'No Cron day was specified';
$l['no_cron_month'] = 'No Cron month was specified';
$l['no_cron_weekday'] = 'No Cron weekday was specified';

$l['custom_autobackup'] = 'Custom';
$l['custom_autobackup_cron'] = 'Automated Backups Cron time';
$l['custom_autobackup_cron_exp'] = 'Please specify the CRON timings for automated backups';

//Errors for autobcakup cron settings
$l['wrong_autobackup_cron_min'] = 'Automated Backup cron minute is wrong. Valid values are 0-59 or a *';
$l['wrong_autobackup_cron_hour'] = 'Automated Backup cron hour is wrong. Valid values are 0-23 or a *';
$l['wrong_autobackup_cron_day'] = 'Automated Backup cron day is wrong. Valid values are 1-31 or a *';
$l['wrong_autobackup_cron_month'] = 'Automated Backup cron month is wrong. Valid values are 1-12 or a *';
$l['wrong_autobackup_cron_weekday'] = 'Automated Backup cron weekday is wrong. Valid values are 0-7 or a *';

$l['quick_install'] = 'Quick Install';
$l['custom_install'] = 'Custom Install';

$l['outdated_script'] = '<b>&soft-1;</b> has not been updated for more than two years and may no longer be maintained or supported by the script vendor';
$l['ampps_notify_premium'] = 'This feature is available in the premium version of AMPPS. Please purchase <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';

$l['choose_url'] = 'Choose Installation URL';
$l['choose_url_exp'] = 'Please choose the URL to install the software';

$l['error_max_ins_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Installations allowed per script';
$l['notify_ver'] = 'Notify '.$globals['sn'].' of a new Version';
$l['notifyversion'] = 'Thank you for informing about the new version. We will look into it as soon as possible';