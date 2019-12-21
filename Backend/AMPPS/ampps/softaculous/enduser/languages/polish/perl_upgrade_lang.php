<?php

//////////////////////////////////////////////////////////////
//===========================================================
// upgrade_lang.php
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
$l['no_upgrade'] = 'Plik UPGRADE.XML nie został odnaleziony! Prosimy wysłać zgłoszenie do administratora serwera.';
$l['no_functions'] = 'Plik UPGRADE FUNCTIONS nie został odnaleziony! Prosimy wysłać zgłoszenie do administratora serwera.';
$l['no_field'] = 'Pole <b>&soft-1;</b> jest wymagana i musi być wypełnione.';
$l['no_package'] = 'Nie można odnaleźć pakiet aktualizującego!';
$l['no_decompress'] = 'Było kilka błędów podczas dekompresji plików pakietu.';
$l['no_decompress_www'] = 'Było kilka błędów podczas dekompresji plików Web.';
$l['no_config_perl_path'] = 'Wystąpił błąd podczas konfigurowania plików CGI.';
$l['checking_data'] = 'Sprawdzenia zatwierdzonych danych';
$l['unzipping_files'] = 'Kopiowanie plików i katalogów';
$l['unzipping_datadir'] = 'Rozpakowaniu plików danych';
$l['prop_db'] = 'Aktualizacja bazy danych';
$l['finishing_process'] = 'Kończenie aktualizacji';
$l['wait_note'] = '<b>Uwaga:</b> To może zająć 3-4 minuty. Prosimy nie zamykać tej strony do momentu, aż pasek postępu zapełni się w 100%';
$l['no_space'] = 'Nie masz wystarczająco dużo miejsca aby dokonać aktualizacji tej instalacji!';
$l['invalid_insid'] = 'Invalid Installation ID';
$l['invalid_script'] = 'Invalid Script ID';
$l['not_perl_script'] = 'This script is not in PERL';
$l['no_perl_upgrade'] = 'Upgrade is not supported for this script';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['upgrade'] = 'Aktualizacja oprogramowania';
$l['softins_url'] = 'URL';
$l['softins_path'] = 'Ścieżka';
$l['softcopy_note'] = '<b>Uwaga</b>: to oprogramowanie używa własnych narzędzi do aktualizacji. Aby zakończyć aktualizację, prosimy przejść pod adres URL, który pojawi się po tym jak pliki zostaną skopiowane.';
$l['softsubmit'] = 'Aktualizacja';
$l['congrats'] = 'Gratulacje, oprogramowanie został pomyślnie zaktualizowane';
$l['succesful'] = 'został pomyślnie zaktualizowany w';
$l['admin_url'] = 'Admin URL';
$l['setup_continue'] = 'Jednakże, aktualizacja zostanie wykonana przez oprogramowanie, prosimy kliknąć w poniższy adres URL';
$l['enjoy'] = 'Mamy nadzieję, że proces aktualizacji był łatwy.';
$l['upgrade_notes'] = 'Oto kilka ważnych uwag. Sugerujemy aby się z nimi zapoznać';
$l['please_note'] = '<b>Uwaga</b>: '.APP.' jest automatycznym instalatorem i nie dostarcza żadnego wsparcia dla oprogramowania. Odwiedź witrynę sieci web w celu uzyskania wsparcia!';
$l['regards'] = 'Podziękowania';
$l['softinstaller'] = 'Autoinstalator '.APP.'';
$l['return'] = 'Powrót do przegladu';
$l['note_backup'] = 'Sugerujemy abyś wykonał <a href="'.$globals['index'].'act=backup&insid=&soft-1;">backup</a> instalacji przed aktualizacją.';
$l['create_backup'] = 'Wykonaj backup';
$l['create_backup_exp'] = 'Wykonaj backup przed aktualizacją';
$l['prog_upgrading'] = 'Aktualizacja';// Dont remove the trailing space
$l['prog_upgrade_complete'] = 'Aktualizacja zakończona.';

$l['upgrade_tweet_sub'] = 'Powiedz znajomym';
$l['not_in_free'] = '<b>&soft-1;</b> nie może być aktualizowany w wersji darmowej '. APP.'!';
$l['notify_admin'] = 'Powiadom swojego admina serwera o zakupie wersji premium '. APP.'!';

