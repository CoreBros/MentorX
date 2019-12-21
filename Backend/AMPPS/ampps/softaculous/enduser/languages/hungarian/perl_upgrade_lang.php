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

$l['no_info_file'] = 'Az INFO.XML fájl nem található! Kérjük, ezt jelentse a szerver rendszergazdának.';
$l['incompatible'] = 'A szoftver egy magasabb verziójú  '.APP.' -t igényel! Kérjük, ezt jelentse a szerver rendszergazdának.';
$l['no_upgrade'] = 'Az  UPGRADE.XML fájl nem található! Kérjük, ezt jelentse a szerver rendszergazdának.';
$l['no_functions'] = 'Az  UPGRADE FUNCTIONS fájl nem található! Kérjük, ezt jelentse a szerver rendszergazdának.';
$l['no_field'] = 'A mező <b>&soft-1;</b> kitöltése kötelező.';
$l['no_package'] = 'A frissítés csomag nem található!';
$l['no_decompress'] = 'A fájlok kicsomagolásakor néhány hiba lépett fel.';
$l['no_decompress_www'] = 'A Web fájlok kicsomagolásakor hiba lépett fel.';
$l['no_config_perl_path'] = 'Hiba történt a CGI fájlok konfigurálásakor.';
$l['checking_data'] = 'A megadott adatok ellenőrzése';
$l['unzipping_files'] = 'Fájlok és mappák másolása';
$l['unzipping_datadir'] = 'Adat fájlok kicsomagolása';
$l['prop_db'] = 'Adatbázis frissítése';
$l['finishing_process'] = 'Rangsorolás befejezése';
$l['wait_note'] = '<b>MEGJEGYZÉS:</b> Eltarthat 3-4 percig. Kérjük, ne hagyja el az oldalt, amíg a folyamatjelző el nem éri a 100 %-ot';
$l['no_space'] = 'Nincs elegendő hely a frissítés telepítéséhez!';
$l['invalid_insid'] = 'Invalid Installation ID';
$l['invalid_script'] = 'Invalid Script ID';
$l['not_perl_script'] = 'This script is not in PERL';
$l['no_perl_upgrade'] = 'Upgrade is not supported for this script';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['upgrade'] = 'Szoftver frissítés';
$l['softins_url'] = 'URL';
$l['softins_path'] = 'Útvonal';
$l['softcopy_note'] = '<b>MEGJEGYZÉS</b>: Ez a szoftver a saját segédprogramjával fogja elvégezni a frissítést. A frissítés sikerességéhez, kérjük látogasson el az alábbi URL címre, ami látható lesz, ha a fájlokat átmásolta.';
$l['softsubmit'] = 'Frissítés';
$l['congrats'] = 'Gratulálunk, a szoftver telepítése sikeres volt';
$l['succesful'] = 'sikeresen telepítve';
$l['admin_url'] = 'Admin URL';
$l['setup_continue'] = 'Azonban a szoftver segítségével lesz befejezve a frissítés, ezért kérjük látogasson le a következő URL címre';
$l['enjoy'] = 'Reméljük, hogy a frissítési folyamat könnyű volt.';
$l['upgrade_notes'] = 'Az alábbiakban néhány fontos megjegyzés. Ajánljuk, hogy olvassa el ezeket';
$l['please_note'] = '<b>MEGJEGYZÉS</b>: A '.APP.' csak egy automata telepítő és nem nyújt támogatást egyes szoftver csomagokhoz. Kérjük, látogasson el a vendor\ szoftver weboldalára a támogatásért!';
$l['regards'] = 'Üdvözlettel';
$l['softinstaller'] = 'Softaculus automata telepítő';
$l['return'] = 'Vissza az Áttekintéshez';
$l['note_backup'] = 'Azt javasoljuk, hogy készítsen <a href="'.$globals['index'].'act=backup&insid=&soft-1;">biztonsági mentést</a> a telepítésről a frissítés befejeződése előtt."';
$l['create_backup'] = 'Biztonsági mentés készítése';
$l['create_backup_exp'] = 'Készítsen biztonsági mentést a frissítés előtt';
$l['prog_upgrading'] = 'Frissítés';// Dont remove the trailing space
$l['prog_upgrade_complete'] = 'Frissítés bejeződött.';

$l['upgrade_tweet_sub'] = 'Mondja el barátainak';
$l['not_in_free'] = '<b>&soft-1;</b> nem lehetett frissíteni a'.APP.' ingyenes verzióját!';
$l['notify_admin'] = 'Kérjük értesítse a szerver rendszergazdáját a '.APP.' prémium verziójának vásárlásáról!';

