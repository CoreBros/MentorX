<?php

//////////////////////////////////////////////////////////////
//===========================================================
// software_lang.php
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

$l['no_info_file'] = 'Az INFO.XML fájl nem található! Kérjük tájékoztassa a szerver adminisztrátorát.';
$l['incompatible'] = 'A szoftver újabb '.APP.' verziót igényel! Kérjük tájékoztassa a szerver adminisztrátorát.';
$l['no_install'] = 'Az INSTALL.XML fájl nem található! Kérjük tájékoztassa a szerver adminisztrátorát.';
$l['no_functions'] = 'Az INSTALL FUNCTIONS fájl nem található! Kérjük tájékoztassa a szerver adminisztrátorát.';
$l['no_remove_functions'] = 'A REMOVE FUNCTIONS fájl nem található! Kérjük, ezt jelentse a szerver rendszergazdának.';
$l['no_softdomain'] = 'Nem választott domain nevet a telepítéshez.';
$l['wrong_softdomain'] = 'A domain név könyvtára nem található.';
$l['softdirectory_exists'] = 'A megadott telepítési könyvtár létezik! Kérjük adjon meg egy másik könyvtárat.';
$l['no_space'] = 'Nem rendelkezik elegendő tárhellyel a telepítéshez!';
$l['no_softdb'] = 'Az adatbázis nem volt megadva.';
$l['database_exists'] = 'A megadott adatbázis már létezik. Kérjük adjon meg másik adatbázis nevet.';
$l['databaseuser_exists'] = 'Az adatbázis felhasználói név már étezik. Kérjük adjon meg másik nevet.';
$l['db_name_long'] = 'Az adatbázis neve nem lehet 7 karakternél hosszabb. Kérjük adjon meg rövidebb nevet.';
$l['db_limit_crossed'] = 'A maximálisan létrehozható adatbázisok számát elérte, így a telepítés nem folytatható.';
$l['no_field'] = 'A következő mezőt ki kell tölteni: <b>&soft-1;</b>.';
$l['error_adddb'] = 'Az adatbázist nem lehet létrehozni';
$l['error_adduser'] = 'Az új adatbázis felhasználó létrehozása nem sikerült.';
$l['no_package'] = 'A telepítési csomag nem található!';
$l['no_decompress'] = 'Hibák történtek a telepítő-csomag kicsomagolásakor.';
$l['mail_new_ins'] = '&soft-1; új telepítése befejeződött. A részletek:';
$l['mail_path'] = 'Útvonal';
$l['mail_url'] = 'URL';
$l['mail_admin_url'] = 'Admin URL';
$l['mail_admin'] = 'Adminisztrátor neve';
$l['mail_pass'] = 'Adminisztrátor jelszava';
$l['mail_db'] = 'MySQL adatbázis';
$l['mail_dbuser'] = 'MySQL felhasználó';
$l['mail_dbhost'] = 'MySQL szerver';
$l['mail_dbpass'] = 'MySQL jelszó';
$l['mail_time'] = 'Telepítés időpontja';
$l['mail_subject'] = 'Új telepítés - &soft-1;';
$l['no_cron_min'] = 'Nincs a perc megadva a cron időzítőhöz';
$l['no_cron_hour'] = 'Nincs az óra megadva a cron időzítőhöz';
$l['no_cron_day'] = 'Nincs a nap megadva a cron időzítőhöz';
$l['no_cron_month'] = 'Nincs a hónap megadva a cron időzítőhöz';
$l['no_cron_weekday'] = 'Nincs a hét napja megadva a cron időzítőhöz';
$l['wrong_cron_min'] = 'A cron időzítőhöz megadott perc értéke hibás. Érvényes értékek: 0-59 vagy <b>*</b>';
$l['wrong_cron_hour'] = 'A cron időzítőhöz megadott óra értéke hibás. Érvényes értékek: 0-23 vagy <b>*</b>';
$l['wrong_cron_day'] = 'A cron időzítőhöz megadott nap értéke hibás. Érvényes értékek: 1-31 vagy <b>*</b>';
$l['wrong_cron_month'] = 'A cron időzítőhöz megadott hónap értéke hibás. Érvényes értékek: 1-12 vagy <b>*</b>';
$l['wrong_cron_weekday'] = 'A cron időzítőhöz megadott hét napja hibás. Érvényes értékek: 0-7 vagy <b>*</b>';
$l['mail_cron'] = 'Cron időzítő';
$l['no_datadir'] = 'Nincs adatkönyvtár megadva';
$l['datadir_exists'] = 'Az adatkönyvtár létezik. Kérjük adjon meg másikat.';
$l['no_decompress_data'] = 'Hiba történt az adatfájlok kicsomagolásakor.';
$l['mail_datadir'] = 'Adatkönyvtár';
$l['some_files_exist'] = 'A telepítés nem folytatható, mert a következő fájlok vannak a célkönyvtárban: ';
$l['delete_files'] = 'Kérjük törölje a fájlokat, vagy válasszon másik könyvtárat';
$l['overwrite_exist'] = '<b>VAGY</b><br /> <input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">pipálja be az összes fájl felülírásához és a folytatáshoz</span></b>';
$l['checking_data'] = 'A megadott adatok ellenőrzése';
$l['unzipping_files'] = 'Fájlok és mappák másolása';
$l['unzipping_datadir'] = 'Adat fájlok kicsomagolása';
$l['prop_db'] = 'Adatbázis terjesztése';
$l['finishing_process'] = 'Telepítés befejezése';
$l['wait_note'] = '<b>MEGJEGYZÉS:</b> Eltarthat 3-4 percig. Kérjük, ne hagyja el az oldalt, amíg a folyamatjelző el nem éri a 100 %-ot';
$l['no_hostname'] = 'Kérjük, adja meg az Adatbázis Hoszt nevet';
$l['no_dbusername'] = 'Kértjük, adja meg az Adatbázis Felhasználó nevet';
$l['no_dbuserpass'] = 'Kérjük, adja meg az Adatbázis Jelszavát';
$l['softdirectory_invalid'] = 'A megadott könyvtárnév érvénytelen.';
$l['softdatadir_invalid'] = 'A megadott adat könyvtár érvénytelen.';
$l['err_domain'] = 'Nincs Domain';
$l['err_domain_admin'] = 'Ehhez a felhasználóhoz nem tartozik domain név. Kérjük vegye fel a kapcsolatot a rendszergazdával.';
$l['err_pass_strength'] = 'A jelszónak ennél erősebbnek kell lennie';
$l['no_https'] = 'Nem található megbízható SSL Tanúsítvány';
$l['err_dbprefix'] = 'A táblázat előtagja érvénytelen. A következőnek kell lennie: a-z vagy A-Z vagy 0-9 vagy _';
$l['no_php_install'] = 'PHP nincs telepítve. A telepítéshez, kérjük kattintson  <a href="'.$globals['index'].'act=apps&app=1">ide</a>';
$l['no_mysql_install'] = 'MySQL nincs telepítve. A telepítéshez kérjük kattintson ide  <a href="'.$globals['index'].'act=apps&app=16">here</a>';
$l['no_domain_verify'] = 'Nem lehetett elérni a domaint. Kérjük, győződjön meg róla, hogy a domain erre a szerverre mutat és nincs .htaccess fájl .htaccess hozzáférés a domain nevéhez';
$l['auto_backup_not_allowed'] = 'Az automatikus biztonsági mentés gyakoriság kiválasztása érvénytelen';
$l['invalid_script'] = 'Invalid Script ID';
$l['no_domain_found'] = 'No domain found. Please add a domain to install the script';
$l['not_php_script'] = 'This script is not in PHP';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['install'] = 'Telepítés';
$l['overview'] = 'Áttekintés';
$l['features'] = 'Jellemzők';
$l['demo'] = 'Demó';
$l['ratings'] = 'Értékelés';
$l['import'] = 'Importálás';
$l['software_ver'] = 'Verzió';
$l['space_req'] = 'Helyszükséglet';
$l['available_space'] = 'Rendelkezésre áll';
$l['req_space'] = 'Szükséges';
$l['mb'] = 'MB';
$l['software_support'] = 'Szoftver támogatás';
$l['support_link'] = 'Támogatási oldal';
$l['support_note'] = 'Megjegyzés: Softaculous nem illetékes az alkalmazások támogatásáért.';
$l['setup'] = 'Szoftver telepítés';
$l['choose_domain'] = 'Válasszon domain nevet';
$l['choose_domain_exp'] = 'Válassza ki, hogy mely domain névhez telepíti a szoftvert.';
$l['choose_url'] = 'Choose Installation URL';
$l['choose_url_exp'] = 'Please choose the URL to install the software';
$l['in_directory'] = 'Telepítési könyvtár';
$l['in_directory_exp'] = 'A telepítési könyvtár relatív a választott domain név könyvtárához képest és <b>nem lehet létező könyvtár</b>.<br />Pl.: Ha úgy akarja elérni a telepített alkalmazást, hogy http://www.domainnevem.hu/xyz/, akkor a telepítési könyvtár az <b>xyz</b>.<br />Ha üresen hagyja, akkor a telepített szoftvert a http://www.domainnevem.hu/ alatt éri el.';
$l['database_name'] = 'Adatbázis neve';
$l['database_name_exp'] = 'Adja meg a használni kívánt adatbázis nevét.';
$l['softcopy_note'] = '<b>Figyelem</b>: Ezt az alkalmazást a saját telepítőjével lehet telepíteni. Kérjük a telepítés végén a megadott címen fejezze be a telepítést.';
$l['softsubmit'] = 'Telepítés';
$l['congrats'] = 'Gratulálunk! A szoftver sikeresen telepítve!';
$l['succesful'] = 'sikeresen telepítve';
$l['admin_url'] = 'Adminisztrátor URL';
$l['setup_continue'] = 'A telepítést magával a szoftverrel kell befejezni. A befejezéshez látogasson a következő címre';
$l['enjoy'] = 'Reméljük, hogy a telepítés egyszerű és gyors volt.';
$l['install_notes'] = 'Fontos információk! Ajánlatos elolvasni ';
$l['please_note'] = '<b>Figyelem</b>: '.APP.' csak egy alkalmazás-telepítő és nem szolgál semmilyen támogatással a telepíthető programokkal kapcsolatban. Segítséghez keresse fel az alkalmazás weboldalát!';
$l['regards'] = 'Üdvözlettel';
$l['softinstaller'] = APP.' Alkalmazástelepítő ';
$l['return'] = 'Vissza az áttekintéshez';
$l['current_ins'] = 'Jelenlegi telepítések';
$l['link'] = 'Link';
$l['ins_time'] = 'Telepítés ideje';
$l['version'] = 'Verzió';
$l['upd_to'] = 'Frissítés erre a verzióra';
$l['remove'] = 'Eltávolítás';
$l['no_info'] = 'Nincs infó';
$l['randpass'] = 'Véletlen jelszó létrehozása';
$l['ratesoft'] = 'Értékelje az alkalmazást';
$l['reviews'] = 'Vélemények';
$l['reviewsoft'] = 'írja meg Ön is a véleményét';
$l['readreviews'] = 'Olvassa a véleményeket';
$l['reviews_exp'] = 'Olvassa el, hogy a többi felhasználó milyen véleményt írt és';
$l['cron_job'] = 'CRON időzítő';
$l['cron_job_exp'] = 'Az alkalmazáshoz CRON időzítő szükséges. Kérjük adja meg az időpontot. Ha nem tudja, hagyja meg a jelenlegi beállítást!';
$l['cron_min'] = 'Perc';
$l['cron_hour'] = 'Óra';
$l['cron_day'] = 'Nap';
$l['cron_month'] = 'Hónap';
$l['cron_weekday'] = 'Hét napja';
$l['datadir'] = 'Adatkönyvtár';
$l['datadir_exp'] = 'Ez az alkalmazás az adatait egy olyan könyvtárban tárolja, ami webes felületen nem elérhető. Ez a könyvtár az ön gyökérkönyvtárában lesz létrehozva. Azaz, ha ön az <b>abc</b> nevet adta a könyvtárnak, akkor /home/felhasznalonev/<b>abc</b> lesz a könyvtár útvonala.';
$l['db_alpha_num'] = 'Csak alfanumerikus karaktereket lehet adatbázis névként megadni.';
$l['overwrite'] = 'Fájlok felülírása';
$l['ins_emailto'] = 'Telepítési adatok küldése erre az email címre';
$l['choose_protocol'] = 'Elérési protokoll';
$l['choose_protocol_exp'] = 'Ha rendelkezik saját IP címmel és tanúsítvánnyal, akkor válassza a https protokollt.<br />Egyébként válassza a http protokollt.';
$l['clone'] = 'Clone';
$l['backup'] = 'Mentés';
$l['options'] = 'Opciók';
$l['admin'] = 'Adminisztrátor';
$l['notify_ver'] = $globals['sn'].' tájékoztatása az elérhettablehost.com új verzióról';
$l['notifyversion'] = 'Köszönjük, hogy az új verzióról informált bennünket. A lehető leghamarabb megvizsgáljuk.';
$l['del_insid'] = 'Biztos, hogy eltávolítja a kiválasztott alkalmazásokat? A folyamat visszaforíthatatlan.\nNem lesz több kérdés.';
$l['rem_inst_id'] = 'Telepítés eltávolítása - ';
$l['no_sel_inst'] = 'Nincs eltávolításra kiválasztva semmi.';
$l['inst_remvd'] = 'A kiválasztott telepítés eltávolításra került. Az oldal újratöltődik!';
$l['remove'] = 'Eltávolítás';
$l['go'] = 'Tovább';
$l['screenshots'] = 'Képernyőkép';
$l['downloading'] = 'Csomag letöltése';
$l['installing'] = 'Szkript telepítése';
$l['editdetail'] = 'Részletek szerkesztése';
$l['publish'] = 'Közzététel az interneten';
$l['hostname'] = 'Adatbázis Hosztnév';
$l['hostname_exp'] = 'A MySQL hosztneve (általában <b>localhost</b>)';
$l['dbusername'] = 'Adatbázis Felhasználónév';
$l['dbusername_exp'] = 'A MySQL felhasználónév';
$l['dbuserpass'] = 'Adatbázis Jelszó';
$l['dbuserpass_exp'] = 'A MySQL felhasználó jelszava';
$l['database_name_exp_aefer'] = 'Írja be az adatbázis nevét a telepítéshez';
$l['sel_version'] = 'Válasszon verziót';
$l['choose_version_exp'] = 'Kérjük válasszon verziót a telepítéshez.';
$l['choose_version'] = 'Válassza ki a verziót amit telepíteni szeretne';
$l['select'] = 'Választ';
$l['release_date'] = 'Kiadás dátuma';
$l['adv_option'] = 'Haladó beállítások';
$l['disable_notify_update'] = 'Frissítési értesítések tiltása';
$l['exp_disable_notify_update'] = 'Ha ki van jelölve, akkor nem fog e-mailt kapni az elérhető frissítésekről.';
$l['prog_installing'] = 'Telepítés'; // Dont remove trailing space
$l['prog_install_complete'] = 'Telepítés sikeres volt.';
$l['eu_auto_upgrade'] = 'Automatikus Frissítés';
$l['exp_eu_auto_upgrade'] = 'Select the automatic upgrade preference for this installation when a new version is available';
$l['auto_upgrade_plugins'] = 'Automatikus frissítés &soft-1; Plugins';
$l['exp_auto_upgrade_plugins'] = 'Ha be van jelölve, minden aktív &soft-1; plugin telepítve lesz automatikusan frissítve a legújabb verzióval, mikor a szkript telepítése lefrissült.';
$l['auto_upgrade_themes'] = 'Automatikus frissítés &soft-1; Témák';
$l['exp_auto_upgrade_themes'] = 'Ha be van jelölve, az aktív &soft-1; téma ehhez a telepítéshez, automatikusan frissülni fog a legújabb verzióra, mikor a szkript telepítés lefrissül.';
$l['auto_upgrade_enabled'] = 'Automatikus frissítés engedélyezve';
$l['bad'] = 'Rossz';
$l['good'] = 'Jó';
$l['strong'] = 'Erős';
$l['short'] = 'Rövid';
$l['strength_indicator'] = 'Erősség mutató';
$l['auto_backup'] = 'Automatikus biztonsági mentések';
$l['exp_auto_backup'] = APP.' will take automated backups via CRON as per the frequency you select';
$l['auto_backup_rotation'] = 'Biztonsági mentés Forgás';
$l['exp_auto_backup_rotation'] = 'Ha a biztonsági mentés forgás korlát eléri a '.APP.', törölve lesz a legrégebbi biztonsági mentés ami a telepítéshez van, és biztonsági mentés készül. A biztonsági mentés kihasználja helyet, így ki tudja választani a biztonsági mentés forgás helyét a rendelkezésre álló helyek közül a szerverén';
$l['no_backup'] = 'Nincs biztonsági mentés';
$l['daily'] = 'Egyszer egy nap';
$l['weekly'] = 'Egyszer egy héten';
$l['monthly'] = 'Egyszer egy hónapban';
$l['unlimited'] = 'Korlátlan';
$l['changelog'] = 'Módosítási napló';
$l['act_upgrade'] = 'Mostanában frissített';
$l['act_clone'] = 'Mostanában klónozott';
$l['act_backup'] = 'Mostanában készítve a biztonsági mentés';
$l['act_install'] = 'Mostanában telepítve';
$l['act_edit'] = 'Mostanában szerkesztve';
$l['act_import'] = 'Mostanában importálva';
$l['act_restore'] = 'Mostanában visszaállítva';
$l['ampps_download'] = 'Fejlesztheti a <b>&soft-1;</b>  az <b>asztalon</b> az Ingyenes fejlesztő eszköz, a Softaculus AMPPS használatával. Kattintson <a href="http://www.ampps.com/download?give=latest" target="_blank"><b>ide</b></a> a letöltéshez <a href="http://www.ampps.com/download?give=latest" target="_blank"><img src="https://images.softaculous.com/ampps.gif" height="25" /></a>';

$l['install_tweet_sub'] = 'Mutassa meg barátainak az új oldalát';

$l['choose_theme'] = 'Téma kiválasztása';
$l['clear_theme'] = 'Kiválasztás törlése';
$l['installing_theme'] = 'Téma telepítése';
$l['cant_download_theme'] = 'Nem lehetett letölteni a téma fájlokat';
$l['no_theme_package'] = 'A téma telepítés csomag nem található';
$l['unzipping_theme_files'] = 'Téma fájlok és mappák másolása';
$l['use_this_theme'] = 'Kiválasztás';
$l['err_auto_backup_limit'] = 'Az automatikus biztonsági mentés forgatás nem lehet több, mint <b>&soft-1;</b>';
$l['select_domain'] = 'Domain kiválasztása';
$l['refresh'] = 'Frissít';
$l['purchase'] = 'Vásárlás';
$l['your_purchased'] = 'Vásárlások';//trailing space is required
$l['your_purchased_times'] = 'idő';
$l['err_theme_not_bought'] = 'Nem vásárolta meg ezt a témát, így nem tudja azt telepíteni!';
$l['err_theme_reached_limit'] = 'Kérjük vásárolja meg ezt a témát és próbálja meg újra a telepítést. Elérte ennek a témának a telepítési korlátját.';
$l['payment_heading'] = 'Téma vásárlás';
$l['payment_redirect'] = 'Át fogja irányítani a fizetésre';//trailing space is required
$l['close'] = 'Bezár';
$l['free'] = 'Ingyenes';
$l['select'] = 'Választ';
$l['theme_is_optional'] = '<b>Megjegyzés</b>: Nem kötelezően választandó. Ha nincs kiválasztva, az alapértelmezett téma lesz telepítve';
$l['with_selected'] = 'Kiválasztottal';
$l['not_in_free'] = '<b>&soft-1;</b> nem lehetett telepíteni a'.APP.' ingyenes verzióját!';
$l['notify_admin'] = 'Kérjük értesítse a szerver rendszergazdáját a '.APP.' prémium verziójának vásárlásáról!';
$l['related_scripts'] = 'Kapcsolódó Szkriptek';

$l['date_added'] = 'Date Added';
$l['downloaded'] = 'Downloaded';

$l['soft_ins_exists'] = 'An installation already exists at &soft-1; as per our records. To re-install the application please uninstall the existing installation!';
$l['install_now'] = 'Telepítés most';
$l['my_apps'] = 'Alkalmazásaim';

$l['backup_location'] = 'Backup Location';
$l['backup_location_exp'] = 'Choose the backup location to be used while backing up this installation';
$l['default'] = 'Default';
$l['invalid_backup_location'] = 'Backup location submitted does not exist';
$l['local_folder'] = 'Local Folder';

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

$l['pushtolive'] = 'Push to Live';
$l['staging'] = 'Create Staging';

$l['dont_auto_upgrade'] = 'Do not Auto Upgrade'; 
$l['minor_auto_upgrade'] = 'Upgrade to <b>Minor</b> versions only'; 
$l['major_auto_upgrade'] = 'Upgrade to any latest version available (<b>Major</b> as well as <b>Minor</b>)'; 
$l['auto_upgrade_major'] = '(Major and Minor)'; 
$l['auto_upgrade_minor'] = '(Minor)'; 

$l['err_fetch_key'] = 'Could not fetch the PFX API key at the moment';
$l['ampps_notify_premium'] = 'This feature is available in the premium version of AMPPS. Please purchase <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';

$l['view_items'] = 'List Items in Set';
$l['ok'] = 'OK';
$l['plugins'] = 'Plugins';
$l['themes'] = 'Themes';
$l['empty_set'] = 'There are currently no items in the set!!';

$l['error_max_ins_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Installations allowed per script';
$l['error_max_backup_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Backups allowed per script';
$l['error_max_clone_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Clone allowed per script';
$l['error_max_staging_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Staging allowed per script';

$l['remove_complete'] = 'Remove Completely';
$l['remove_info'] = 'Remove from '.APP;
$l['manage_sets'] = 'Bővítmény- / témakészletek kezelése';
$l['manage_plugin_sets'] = 'Manage Plugin Sets';
$l['manage_theme_sets'] = 'Manage Theme Sets';