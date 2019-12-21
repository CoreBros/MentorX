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

$l['no_info_file'] = 'Az INFO.XML fájl nem található! Kérjük tájékoztassa a szerver adminisztrátorát.';
$l['incompatible'] = 'A szoftver újabb '.APP.' verziót igényel! Kérjük tájékoztassa a szerver adminisztrátorát.';
$l['no_upgrade'] = 'Az UPGRADE.XML fájl nem található! Kérjük tájékoztassa a szerver adminisztrátorát.';
$l['no_functions'] = 'Az UPGRADE FUNCTIONS fájl nem található! Kérjük tájékoztassa a szerver adminisztrátorát.';
$l['no_field'] = 'A következo mezot ki kell tölteni: <b>&soft-1;</b> ';
$l['no_package'] = 'A frissíto csomag nem találhatód!';
$l['no_decompress'] = 'Hibák történtek a telepíto-csomag kicsomagolásakor.';
$l['checking_data'] = 'A megadott adatok ellenőrzése';
$l['unzipping_files'] = 'Fájlok és mappák másolása';
$l['unzipping_datadir'] = 'Adat fájlok kicsomagolása';
$l['prop_db'] = 'Adatbázis frissítése';
$l['finishing_process'] = 'Rangsorolás befejezése';
$l['wait_note'] = '<b>MEGJEGYZÉS:</b> Eltarthat 3-4 percig. Kérjük, ne hagyja el az oldalt, amíg a folyamatjelző el nem éri a 100 %-ot';
$l['cver_greater'] = 'A jelenlegi verzió frissebb vagy ugyanaz, mint amit frissíteni szeretne. Ez akkor lehetséges, ha manuálisan frissítette a telepítést. Ha ez nem így volt, kérjük ellenőrizze a következő checkboxot';
$l['force_upgrade'] = 'Erőteljesen frissíteni';
$l['backup_finish'] = 'Biztonsági mentés befejeződött';
$l['backup_fail_proceed'] = 'Néhány hiba lépett fel a biztonsági mentés közben. Folytatódjon?';
$l['backing_up'] = 'Biztonsági mentés telepítés';
$l['no_space'] = 'Nincs elegendő hely a frissítés telepítéséhez!';
$l['invalid_insid'] = 'Invalid Installation ID';
$l['invalid_script'] = 'Invalid Script ID';
$l['no_upgrade_support'] = 'Upgrade is not supported for this script';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['upgrade'] = 'Alkalmazás frissítése';
$l['softins_url'] = 'URL';
$l['softins_path'] = 'Útvonal';
$l['softcopy_note'] = '<b>MEGJEGYZÉS</b>: Ez az alkalmazás a frissítést a saját frissíto segédprogramjával végzi. A frissítés befejezéséhez kövesse a linket, amit a fájlok másolását követoen biztosítunk.';
$l['softsubmit'] = 'Frissítés';
$l['congrats'] = 'Gratulálunk, az alkalmazás sikeresen frissítve';
$l['succesful'] = 'sikeresen frissítésre került itt';
$l['admin_url'] = 'Adminisztratív URL';
$l['setup_continue'] = 'A frissítést magával az alkalmazással kell befejezni a következo címen';
$l['enjoy'] = 'Reméljük, hogy a frissítés egyszeru volt.';
$l['upgrade_notes'] = 'Fontos információk. Kérjük figyelmesen olvassa el ';
$l['please_note'] = '<b>Figyelem</b>: '.APP.' csak egy alkalmazás-telepíto és nem szolgál semmilyen támogatással a telepítheto programokkal kapcsolatban. Segítséghez keresse fel az alkalmazás weboldalát!';
$l['regards'] = 'Üdvözlettel';
$l['softinstaller'] = APP.' Alkalmazás-telepíto';
$l['return'] = 'Vissza az áttekintéshez';
$l['note_backup'] = 'Ajánlott, hogy készítsen <a href="'.$globals['index'].'act=backup&insid=&soft-1;">biztonsági mentést</a> a telepítésrol frissítés elott.';
$l['alreadyupdated'] = 'Hmm… úgy tűnik, hogy a telepítés aktuális verziója  <b>&soft-1;</b> és nem  <b>&soft-2;</b>. <br />Kattintson ide a '.APP.' rekordok frissítéséhez.';
$l['no_update_required'] = 'Úgy tűnik, nincs szüksége a telepítés frissítésére, mert már frissítve lett';
$l['auto_backup'] = 'Szeretne biztonsági mentést készíteni a frissítés előtt?';
$l['select_version'] = 'Válasszon egy verziót a frissítéshez';
$l['upgrading'] = 'Frissítés…';
$l['setup_partial'] = 'Még egy lépés van a frissítési folyamat befejezéséhez';
$l['finish_update'] = 'Kérjük, látogasson el az alábbi linkre a frissítési folyamat befejezéséhez.';
$l['finish_up_sucess'] = 'A frissítési folyamat befejeződése után itt fog hozzáférni a &soft-1; telepítéséhez';
$l['upgrading_to'] = 'Frissíteni fogja:';
$l['version'] = 'Verzió';
$l['create_backup'] = 'Biztonsági mentés készítése';
$l['create_backup_exp'] = 'Készítsen biztonsági mentést a frissítés előtt';
$l['prog_upgrading'] = 'Frissítés';// Dont remove the trailing space
$l['prog_upgrade_complete'] = 'Frissítés bejeződött.';

$l['upgrade_tweet_sub'] = 'Mondja el barátainak';

$l['not_in_free'] = '<b>&soft-1;</b> nem lehetett frissíteni a'.APP.' ingyenes verzióját!';
$l['notify_admin'] = 'Kérjük értesítse a szerver rendszergazdáját a '.APP.' prémium verziójának vásárlásáról!';

$l['backup_type'] = 'Backup Options';
$l['backup_type_exp'] = 'Choose full backup or advanced options';
$l['standard_backup'] = 'Full Backup (Default)';
$l['advanced_backup'] = 'Advanced Options';

$l['backup_dir'] = 'Backup Directory';
$l['backup_db'] = 'Backup Database';
$l['backup_wwwdir'] = 'Backup Web Directory';
$l['backup_datadir'] = 'Backup Data Directory';
$l['no_dir'] = 'The installation files are missing hence cannot proceed with the upgrade';
$l['wpc_return'] = 'Return to Installations';