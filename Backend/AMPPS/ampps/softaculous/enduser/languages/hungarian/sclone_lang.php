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

$l['no_ins'] = 'Nem lett elindítva telepítés';
$l['wrong_ins_title'] = 'Rossz Telepítési Azonosító';
$l['wrong_ins'] = 'A megadott telepítési azonosító nem létezik';
$l['no_info_file'] = 'Az INFO.XML fájl nem található! Kérjük, ezt jelentse a szerver rendszergazdának.';
$l['incompatible'] = 'A szoftver egy magasabb verziójú  '.APP.' -t igényel! Kérjük, ezt jelentse a szerver rendszergazdának.';
$l['no_install'] = 'Az INSTALL.XML fájl nem található! Kérjük, ezt jelentse a szerver rendszergazdának.';
$l['no_functions'] = 'A CLONE FUNCTIONS fájl nem található!';
$l['no_clone'] = 'Nincs Clone';
$l['no_softdomain'] = 'Nem választotta ki a domain nevet a szoftver telepítéséhez.';
$l['wrong_softdomain'] = 'Nem található a kiválasztott domain útvonal.';
$l['softdirectory_exists'] = 'A megadott könyvtárnév már létezik! Kérjük, adjon meg egy másik könyvtár nevet.';
$l['no_space'] = 'Nincs elegendő hely a szoftver telepítéséhez!';
$l['no_softdb'] = 'Az adatbázis nem lett megosztva.';
$l['database_exists'] = 'Az adatbázis már létezik. Kérjük, válasszon másik nevet.';
$l['databaseuser_exists'] = 'Az adatbázis felhasználó már létezik. Kérjük, válasszon másik adatbázis nevet.';
$l['db_name_long'] = 'Az adatbázis neve nem lehet hosszabb 7 karakternél. Kérjük, válasszon rövidebb adatbázis nevet.';
$l['db_limit_crossed'] = 'A létrehozható adatbázisok számát elérte, így a telepítés nem folytatható.';
$l['cloning'] = 'Klónozás telepítése';
$l['downloading'] = 'Csomag letöltése';
$l['cant_clone_db'] = 'Nem lehetett klónozni az adatbázist';
$l['fail_create'] = 'Hiba a könyvtár létrehozásakor';
$l['fail_create_datadir'] = 'Hiba az adat könyvtár létrehozásakor';
$l['cant_clone_dir'] = 'A könyvtárat nem lehetett klónozni, mert ez a saját könyvtár.';
$l['cant_connect_mysql'] = 'Nem lehetett csatlakozni az adatbázishoz, kérjük ellenőrizze az adatbázis Felhasználónevét/Jelszavát. Ha megváltozott, kérjük frissítse az adatokra a Softaculus telepítőjén belül az Adatok szerkesztését használva.';
$l['same_ins'] = 'Nem lehetséges ugyanarra a helyre klónozni a telepítést';
$l['ins_exists'] = 'Úgy tűnik, hogy <b>&soft-1;</b> a kiválasztott helyre már telepítve lett';
$l['ins_recursive'] = 'Nem lehetett klónozni a telepítést az eredeti telepítés alkönyvtárában';
$l['no_clone_support'] = 'Clone is not supported for this script';
$l['invalid_script'] = 'Invalid Script ID';
$l['no_domain_found'] = 'No domain found. Please add a domain to install the script';

$l['no_cron_min'] = 'Nem lett megadva Cron perc';
$l['no_cron_hour'] = 'Nem lett megadva Cron óra';
$l['no_cron_day'] = 'Nem lett megadva Cron nap';
$l['no_cron_month'] = 'Nem lett megadva Cron hónap';
$l['no_cron_weekday'] = 'Nem lett megadva Cron hét napja';
$l['wrong_cron_min'] = 'Rossz Cron perc. A következőnek kell lennie: 0-59 vagy egy <b>*</b>';
$l['wrong_cron_hour'] = 'Rossz Cron óra. A következőnek kell lennie: 0-23 vagy egy <b>*</b>';
$l['wrong_cron_day'] = 'Rossz Cron nap. A következőnek kell lennie: 1-31 vagy egy  <b>*</b>';
$l['wrong_cron_month'] = 'Rossz Cron hónap. A következőnek kell lennie: 1-12 vagy egy <b>*</b>';
$l['wrong_cron_weekday'] = 'Rosszul lett megadva a Cron hét napja. A következőnek kell lennie: 0-7 vagy egy <b>*</b>';
$l['no_datadir'] = 'Nem lett megadva Adat Könyvtár';
$l['datadir_exists'] = 'A megadott adat könyvtár létezik. Kérjük, adjon meg egy másikat.';
$l['no_decompress_data'] = 'Az ADAT fájlok kicsomagolásakor hiba lépett fel.';
$l['some_files_exist'] = 'A telepítés nem folytatható, mert a következő fájlok már léteznek a célmappában:';
$l['delete_files'] = 'Kérjük, törölje a fájlokat vagy válasszon egy másik könyvtárat.';
$l['overwrite_exist'] = '<b>VAGY</b><br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">Válassza a checkboxot az összes fájl áttekintéséhet és folytassa</span></b>';
$l['prog_cloning'] = 'Klónozás'; // Dont remove trailing space
$l['prog_cloning_complete'] = 'Klónozás sikeres volt.';
$l['checking_data'] = 'A megadott adatok ellenőrzése';
$l['unzipping_files'] = 'Fájlok és mappák másolása';
$l['unzipping_datadir'] = 'Adat fájlok kicsomagolása';
$l['prop_db'] = 'Adatbázis terjesztése';
$l['finishing_process'] = 'Klónozás befejezése';
$l['wait_note'] = '<b>MEGJEGYZÉS:</b> Eltarthat 3-4 percig. Kérjük, ne hagyja el az oldalt, amíg a folyamatjelző el nem éri a 100 %-ot';
$l['no_hostname'] = 'Kérjük, adja meg az Adatbázis Hoszt nevet';
$l['no_dbusername'] = 'Kértjük, adja meg az Adatbázis Felhasználó nevet';
$l['no_dbuserpass'] = 'Kérjük, adja meg az Adatbázis Jelszavát';
$l['softdirectory_invalid'] = 'A megadott könyvtárnév érvénytelen.';
$l['softdatadir_invalid'] = 'A megadott adat könyvtár érvénytelen.';
$l['err_domain'] = 'Nincs Domain';
$l['err_domain_admin'] = 'Ehhez a felhasználóhoz nem tartozik domain név. Kérjük vegye fel a kapcsolatot a rendszergazdával.';
$l['no_https'] = 'Nem található megbízható SSL Tanúsítvány';
$l['no_php_install'] = 'PHP nincs telepítve. A telepítéshez, kérjük kattintson  <a href="'.$globals['index'].'act=apps&app=1">ide</a>';
$l['no_mysql_install'] = 'MySQL nincs telepítve. A telepítéshez kérjük kattintson ide  <a href="'.$globals['index'].'act=apps&app=16">here</a>';
$l['no_field'] = 'A mező <b>&soft-1;</b> kitöltése kötelező.';
$l['error_adddb'] = 'Az adatbázist nem lehetett létrehozni';
$l['error_adduser'] = 'Hiba történt az új adatbázis felhasználó hozzáadásakor';
$l['no_package'] = 'A telepítési csomag nem található!';
$l['no_decompress'] = 'A fájlok kicsomagolásakor néhány hiba lépett fel.';

//Theme Strings
$l['<title>'] = APP.' - Clone Installation';
$l['info'] = 'Infó';
$l['ins_softname'] = 'Szoftver';
$l['ins_num'] = 'Telepítés száma';
$l['ins_ver'] = 'Verzió';
$l['ins_time'] = 'Telepítési idő';
$l['ins_path'] = 'Útvonal';
$l['ins_url'] = 'URL';
$l['ins_admin_url'] = 'Admin URL';
$l['ins_db'] = 'Adatbázis név';
$l['ins_dbuser'] = 'Adatbázis Felhasználó';
$l['ins_dbpass'] = 'Adatbázis Jelszó';
$l['ins_dbhost'] = 'Adatbázis Hoszt';
$l['ins_datadir'] = 'Adat Könyvtár';
$l['ins_wwwdir'] = 'Web Könyvtár';
$l['ins_wwwurl'] = 'Web Könytár URL';
$l['ins_cron_command'] = 'Cron Parancs';
$l['cloned'] = 'A telepítés sikeresen klónozva lett';
$l['clone_ins'] = 'Telepítési részletek klónozása';
$l['cloneins'] = 'Telepítés klónozása';
$l['choose_protocol'] = 'Válasszon Protokollt';
$l['choose_protocol_exp'] = 'Ha oldala rendelkezik SSl-el, kérjük, válassza a HTTPS protokollt.';
$l['cron_job'] = 'Cron Job';
$l['cron_job_exp'] = 'Ennek a szkriptnek szüksége van a CRON szolgáltatásra a munkához. Kérjük, adja meg a CRON időzítést. Ha ezt nem tudja, hagyja változatlanul!';
$l['cron_min'] = 'Perc';
$l['cron_hour'] = 'Óra';
$l['cron_day'] = 'Nap';
$l['cron_month'] = 'Hónap';
$l['cron_weekday'] = 'Hét napja';
$l['datadir'] = 'Adat Könyvtár';
$l['datadir_exp'] = 'Ez a szkript előírja, hogy az adatokat mappában tárolja, amihez nem lehet az interneten keresztül hozzáférni. Ez a saját mappában lesz létrehozva. Azaz, ha megadja <b>datadir</b>, a következő jön létre - /home/username/<b>datadir</b>';
$l['db_name_long'] = 'Az adatbázis neve nem lehet hosszabb 7 karakternél. Kérjük, válasszon rövidebb adatbázis nevet.';
$l['db_alpha_num'] = 'Csak betűkből és számokból állhat az Adatbázis neve.';
$l['overwrite'] = 'Fájlok Felülírása';
$l['database_exists'] = 'Az adatbázis már létezik. Kérjük, válasszon másik nevet.';
$l['no_softdomain'] = 'Nem választotta ki a domain nevet a szoftver telepítéséhez.';
$l['wrong_softdomain'] = 'Nem található a kiválasztott domain útvonal.';
$l['no_space'] = 'Nincs elegendő hely a szoftver telepítéséhez!';
$l['no_softdb'] = 'Az adatbázis nem lett megosztva.';
$l['choose_domain'] = 'Válasszon Domain nevet';
$l['choose_domain_exp'] = 'Kérjük, válassza ki a domain nevet a szoftver telepítéséhez.';
$l['in_directory'] = 'Könyvtárban';
$l['in_directory_exp'] = 'A könyvtár relatív a domain névhez, és  <b>nem létezik</b>. Például: Telepíteni a  http://mydomain/dir/ helyről, a típus  <b>dir</b>. Telepíteni csak itt http://mydomain/ hagyjuk üresen.';
$l['database_name'] = 'Adatbázis név';
$l['database_name_exp'] = 'Írja be az adatbázis nevét a telepítéshez';
$l['softcopy_note'] = '<b>MEGJEGYZÉS</b>: Ez a szoftver szükséges, hogy telepíteni tudja a saját telepítési segédprogramját. Kérjük, látogasson el az URL címre, ami látható lesz és be kell másolnia, hogy a telepítés folyamata befejeződhessen.';
$l['softsubmit'] = 'Klónozás';
$l['congrats'] = 'Gratulálunk, A telepítés sikeresen klónozva lett';
$l['succesful'] = 'sikeresen klónozva lett';
$l['admin_url'] = 'Adminisztratív URL';
$l['setup_continue'] = 'Azonban a telepítés be lesz fejezve a szoftver segítségével is. A telepítés befejezéséhez, kérjük látogasson le a következő URL címre';
$l['enjoy'] = 'Reméljük, hogy a telepítési folyamat könnyű volt.';
$l['install_notes'] = 'Az alábbiakban néhány fontos megjegyzés. Ajánljuk, hogy olvassa el ezeket';
$l['please_note'] = '<b>MEGJEGYZÉS</b>: A '.APP.' csak egy automatikus szoftver telepítő és nem nyújt támogatást egyes szoftver csomagokhoz. Kérjük, látogasson el a vendor\ szoftver weboldalára a támogatásért!';
$l['regards'] = 'Üdvözlettel';
$l['softinstaller'] = 'Softaculus automata telepítő';
$l['return'] = 'Vissza az Áttekintéshez';

// These strings are for Softaculous Remote
$l['hostname'] = 'Adatbázis Hosztnév';
$l['hostname_exp'] = 'A MySQL hosztneve (általában <b>localhost</b>)';
$l['dbusername'] = 'Adatbázis Felhasználónév';
$l['dbusername_exp'] = 'A MySQL felhasználónév';
$l['dbuserpass'] = 'Adatbázis Jelszó';
$l['dbuserpass_exp'] = 'A MySQL felhasználó jelszava';
$l['database_name_exp_aefer'] = 'Írja be az adatbázis nevét a telepítéshez';

$l['clone_tweet_sub'] = 'Mondja el barátainak';
$l['not_in_free'] = '<b>&soft-1;</b> nem lehetett klónozni a '.APP.'! Ingyenes verzióját!';
$l['notify_admin'] = 'Kérjük értesítse a szerver rendszergazdáját a '.APP.' prémium verziójának vásárlásáról!';

$l['soft_ins_exists'] = 'An installation already exists at &soft-1; as per our records. To clone the application at this location please uninstall the existing installation!';

$l['no_sclone'] = 'The CLONE.XML file could not be found! Please report this to the server administrator.';
$l['no_functions'] = 'The CLONE FUNCTIONS file could not be found! Please report this to the server administrator.';

$l['clone_push_bg'] = 'Clone has been pushed in background';
$l['err_mysql_db'] = 'The MySQL database name is incorrect as the database could not be selected.';

$l['error_max_clone_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Clone allowed per script';

$l['choose_url'] = 'Choose Installation URL';
$l['choose_url_exp'] = 'Please choose the URL to install the software';

$l['ampps_notify_premium'] = 'This feature is available in the premium version of AMPPS. Please purchase <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';