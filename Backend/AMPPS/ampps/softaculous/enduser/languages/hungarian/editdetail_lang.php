<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editdetail_lang.php
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

$l['no_ins'] = 'Nincs benyújtott telepítés';
$l['wrong_ins_title'] = 'Rossz telepítési azonosító';
$l['wrong_ins'] = 'A megadott telepítési azonosító nem létezik';
$l['cant_remove_dir'] = 'A könyvtárat nem lehetett eltávolítani, ugyanis ez a saját könyvtár. Kérjük, vegye le a jelölést a <b> Könyvtár Eltávolítása</b> lehetőségről, hogy folytatni tudja  a könyvtár eltávolítása nélkül.';
$l['no_dir'] = 'A telepítési könyvtár nem létezik!';
$l['no_datadir'] = 'Az adat könyvtár nem létezik!';
$l['no_wwwdir'] = 'A Web könyvtár nem létezik!';
$l['wrong_url'] = 'Az URL és a KÖNYVTÁR név nem egyezhet meg';
$l['wrong_wwwurl'] = 'A WEB URL és a WEB LÖNYVTÁR neve nem egyezhet meg';
$l['err_mysql_user'] = 'A MySQL Felhasználó név vagy Jelszó vagy Adatbázis név rossz, így nem lehetett csatlakozni.';
$l['err_mysql_db'] = 'A MySQL adatbázis neve helytelen, így az adatbázist nem lehet kiválasztani.';
$l['mail_path'] = 'Útvonal';
$l['mail_url'] = 'URL';
$l['mail_db'] = 'MySQL Adatbázis';
$l['mail_dbuser'] = 'MySQL DB Felhasználó';
$l['mail_dbhost'] = 'MySQL DB Hoszt';
$l['mail_dbpass'] = 'MySQL DB Jelszó';
$l['mail_time'] = 'Telepítési idő';
$l['mail_editdetail_time'] = 'Módosítás dátuma';
$l['mail_subject'] = 'Módosított Telepítés Részletei  &soft-1;';
$l['mail_cron_command'] = 'CRON Job';
$l['mail_datadir'] = 'Adat Könyvtár';
$l['mail_wwwdir'] = 'Web Könyvtár';
$l['mail_wwwurl'] = 'Web Könyvtár URL';

//Theme Strings
$l['<title>'] = APP.' - Edit Detail';
$l['ins_details'] = 'Telepítés Részletei';
$l['info'] = 'Infó';
$l['ins_softname'] = 'Szoftver';
$l['ins_num'] = 'Telepítés száma';
$l['ins_ver'] = 'Verzió';
$l['ins_time'] = 'Telepítési idő';
$l['ins_path'] = 'Útvonal';
$l['ins_url'] = 'URL';
$l['ins_admin_url'] = 'Admin URL';
$l['ins_db'] = 'Adatbázis Neve';
$l['ins_dbuser'] = 'Adatbázis Felhasználó';
$l['ins_dbpass'] = 'Adatbázis Jelszó';
$l['ins_dbhost'] = 'Adatbázis Hoszt';
$l['ins_datadir'] = 'Adat Könyvtár';
$l['ins_wwwdir'] = 'Web Könyvtár';
$l['ins_wwwurl'] = 'Web Könyvtár URL';
$l['ins_cron_command'] = 'Cron Parancs';
$l['details_edited'] = 'A telepítési részletek frissítése sikeres volt';
$l['version_edited'] = 'A nyilvántartásunkban szereplő verzió lefrissült.';
$l['return'] = 'Vissza az Áttekintéshez';

$l['edit_ins'] = 'Telepítési részletek szerkesztése';
$l['edit_dir'] = 'Könyvtár';
$l['edit_datadir'] = 'Adat Könyvtár';
$l['edit_db'] = 'Adatbázis Név';
$l['edit_dbuser'] = 'Adatbázis Felhasználó név';
$l['edit_dbpass'] = 'Adatbázis Jelszó';
$l['edit_dbhost'] = 'Adatbázis Hoszt';
$l['edit_url'] = 'URL';
$l['editins'] = 'Telepítési részletek mentése';
$l['mail_editdetail_ins'] = 'A  &soft-1; telepítési részletek módosítva lettek. Az alábbiakban a módosított telepítési részletek szerepelnek :';
$l['edit_wwwdir'] = 'Web Könyvtár';
$l['edit_wwwurl'] = 'Web Könyvtár URL';
$l['disable_notify_update'] = 'Frissítési értesítések tiltása';
$l['exp_disable_notify_update'] = 'Ha ki van jelölve, akkor nem fog e-mailt kapni az elérhető frissítésekről.';
$l['alreadyupdated'] = 'Hmm… úgy tűnik, hogy a telepítés aktuális verziója  <b>&soft-1;</b> és nem  <b>&soft-2;</b>. <br />Kattintson ide a '.APP.' rekordok frissítéséhez.';
$l['edit_acc_detail'] = 'Admin felület részletek szerkesztése';
$l['eu_auto_upgrade'] = 'Automatikus frissítés';
$l['exp_eu_auto_upgrade'] = 'Select the automatic upgrade preference for this installation when a new version is available';
$l['auto_upgrade_plugins'] = 'Automatikus frissítés &soft-1; Pluginek';
$l['exp_auto_upgrade_plugins'] = 'Ha be van jelölve, minden aktív &soft-1; plugin telepítve lesz automatikusan frissítve a legújabb verzióval, mikor a szkript telepítése lefrissült.';
$l['auto_upgrade_themes'] = 'Automatikus frissítés &soft-1; Témák';
$l['exp_auto_upgrade_themes'] = 'Ha be van jelölve, az aktív  &soft-1; téma  telepítve lesz automatikusan frissítve a legújabb verzióval, mikor a szkript telepítése lefrissült.';
$l['auto_backup'] = 'Automatikus biztonsági mentések';
$l['exp_auto_backup'] = APP.' will take automated backups via CRON as per the frequency you select';
$l['auto_backup_rotation'] = 'Biztonsági mentés Forgás';
$l['exp_auto_backup_rotation'] = 'Ha a biztonsági mentés forgás korlát eléri a '.APP.', törölve lesz a legrégebbi biztonsági mentés ami a telepítéshez van, és biztonsági mentés készül. A biztonsági mentés kihasználja helyet, így ki tudja választani a biztonsági mentés forgás helyét a rendelkezésre álló helyek közül a szerverén';
$l['no_backup'] = 'Nincs biztonsági mentés';
$l['daily'] = 'Egyszer egy nap';
$l['weekly'] = 'Egyszer egy héten';
$l['monthly'] = 'Egyszer egy hónapban';
$l['unlimited'] = 'Korlátlan';
$l['auto_backup_not_allowed'] = 'Az automatikus biztonsági mentés gyakoriság kiválasztása érvénytelen';

$l['no_edit'] = 'Az EDIT.XML fájl nem található! Kérjük, ezt jelentse a szerver rendszergazdának.';
$l['no_functions'] = 'Az EDIT FUNCTIONS fájl nem található! Kérjük, ezt jelentse a szerver rendszergazdának.';
$l['no_field'] = 'A mező <b>&soft-1;</b> kitöltése kötelező.';
$l['err_auto_backup_limit'] = 'Az automatikus biztonsági mentés forgatás nem lehet több, mint <b>&soft-1;</b>';
$l['select_files'] = 'Fájlok/mappák kiválasztása';
$l['select_files_exp'] = 'Kérjük, válassza ki a további fájlokat/mappákat, amiket hozzákapcsol a telepítéshez. <br /> Ez a lista olyan műveletekhez lesz használva, mint a Clone, Biztonsági mentés és eltávolítás telepítése';
$l['invalid_files_in_post_list'] = 'Érvénytelen fájlok/mappák lettek kiválasztva';
$l['select_files_list'] = 'Válasszon további fájlokat/mappákat az alábbi listából';

$l['select_files_backup'] = 'Használja a fent kiválasztott fájlokat/mappákat a Biztonsági mentéshez';
$l['select_files_backup_exp'] = 'Ha kiválasztotta, csak a telepítéshez kapcsolt fájlok/mappák lesznek mentve. <br /> Az alapértelmezett biztonsági mentés tartalmazni fogja a fájlokat/mappákat ezen útvonal alatt';
$l['no'] = 'Nem';
$l['yes'] = 'Igen';
$l['check_all_edit'] = 'Mind kiválasztása';

$l['choose_theme'] = 'Install Theme';
$l['clear_theme'] = 'Clear selection';
$l['installing_theme'] = 'Installing theme';
$l['cant_download_theme'] = 'Could not download the theme files';
$l['no_theme_package'] = 'The theme installation package could not be found!';
$l['unzipping_theme_files'] = 'Copying themes files and folders';
$l['use_this_theme'] = 'Select this';
$l['demo'] = 'Demo';
$l['refresh'] = 'Refresh';
$l['purchase'] = 'Buy';
$l['close'] = 'Close';
$l['free'] = 'Free';
$l['select'] = 'Select';
$l['theme_is_optional'] = '<b>Note</b>: This is optional. Select only if you want to change your current theme.';
$l['your_purchased'] = 'Purchased ';//trailing space is required
$l['your_purchased_times'] = ' times(s)';
$l['err_theme_not_bought'] = 'You have not purchased the theme, so could not install it !';
$l['err_theme_reached_limit'] = 'Please buy this theme and try to install it again. You reached the limit of installing this theme.';
$l['payment_heading'] = 'Purchase Theme';
$l['payment_redirect'] = 'You will be redirected to pay ';//trailing space is required
$l['date_added'] = 'Date Added';
$l['downloaded'] = 'Downloaded';
$l['edit_dbpass_exp'] = 'New Database Password. <br/>Leave blank if you do not want to update the password';
$l['select_tables'] = 'Select additional database tables';
$l['select_tables_exp'] = 'Selected tables will be included in the database backup';

$l['backup_loc'] = 'Backup Location';
$l['exp_backup_loc'] = 'Choose the backup location to be used while backing up this installation';
$l['default'] = 'Default';
$l['invalid_backup_location'] = 'Backup location submitted does not exist';
$l['local_folder'] = 'Local Folder';

$l['cron_min'] = 'Min';
$l['cron_hour'] = 'Hour';
$l['cron_day'] = 'Day';
$l['cron_month'] = 'Month';
$l['cron_weekday'] = 'Weekday';

$l['no_cron_min'] = 'No Cron minute was specified';
$l['no_cron_hour'] = 'No Cron hour was specified';
$l['no_cron_day'] = 'No Cron day was specified';
$l['no_cron_month'] = 'No Cron month was specified';
$l['no_cron_weekday'] = 'No Cron weekday was specified';

$l['custom_autobackup'] = 'Custom';
$l['custom'] = 'Custom Cron time';
$l['custom_autobackup_cron'] = 'Automated Backups Cron time';
$l['custom_autobackup_cron_exp'] = 'Please specify the CRON timings for automated backups';

//Errors for autobcakup cron settings
$l['wrong_autobackup_cron_min'] = 'Automated Backup cron minute is wrong. Valid values are 0-59 or a *';
$l['wrong_autobackup_cron_hour'] = 'Automated Backup cron hour is wrong. Valid values are 0-23 or a *';
$l['wrong_autobackup_cron_day'] = 'Automated Backup cron day is wrong. Valid values are 1-31 or a *';
$l['wrong_autobackup_cron_month'] = 'Automated Backup cron month is wrong. Valid values are 1-12 or a *';
$l['wrong_autobackup_cron_weekday'] = 'Automated Backup cron weekday is wrong. Valid values are 0-7 or a *';

$l['done'] = 'Done';
$l['error'] = 'Error';
$l['plugins_upgrade_now'] = 'Upgrade Plugin(s) Now';
$l['theme_upgrade_now'] = 'Upgrade Theme Now';
$l['plugins_upgrade_success'] = 'Plugin(s) Upgraded Successfully!!';
$l['theme_upgrade_success'] = 'Theme Upgraded Successfully!!';
$l['fetch_db_details'] = 'Allow Softaculous to fetch the database details ?';

$l['edit_notes'] = 'The following are some important notes. It is highly recommended that you read them ';
$l['domain_not_in_list'] = 'The URL posted is not in your domain(s) list'; 

$l['dont_auto_upgrade'] = 'Do not Auto Upgrade'; 
$l['minor_auto_upgrade'] = 'Upgrade to <b>Minor</b> versions only'; 
$l['major_auto_upgrade'] = 'Upgrade to any latest version available (<b>Major</b> as well as <b>Minor</b>)'; 
$l['auto_upgrade_major'] = '(Major and Minor)'; 
$l['auto_upgrade_minor'] = '(Minor)';

$l['wpc_return'] = 'Return to Installations';