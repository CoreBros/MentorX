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

$l['no_info_file'] = 'A megadott azonosítóhoz nincs osztály';
$l['incompatible'] = 'A szoftver egy magasabb verziójú  '.APP.' -t igényel! Kérjük, ezt jelentse a szerver rendszergazdának.';
$l['no_install'] = 'Az INSTALL.XML fájl nem található! Kérjük, ezt jelentse a szerver rendszergazdának.';
$l['no_functions'] = 'Az INSTALL FUNCTIONS fájl nem található! Kérjük, ezt jelentse a szerver rendszergazdának.';
$l['no_softdomain'] = 'Nem választotta ki a domain nevet a szoftver telepítéséhez.';
$l['wrong_softdomain'] = 'Nem található a kiválasztott domain útvonal.';
$l['no_space'] = 'Nincs elegendő hely a szoftver telepítéséhez!';
$l['no_field'] = 'A mező <b>&soft-1;</b> kitöltése kötelező.';
$l['no_package'] = 'A telepítési csomag nem található!';
$l['no_decompress'] = 'A fájlok kicsomagolásakor néhány hiba lépett fel.';
$l['mail_new_ins'] = 'A &soft-1; telepítése megtörtént. A telepítés részletei az alábbiakban olvashatóak:';
$l['mail_path'] = 'Útvonal';
$l['mail_url'] = 'URL';
$l['mail_time'] = 'Telepítési idő';
$l['mail_subject'] = '&soft-1; telepítése';
$l['some_files_exist'] = 'A telepítés nem folytatható, mert a következő fájlok már léteznek a célmappában:';
$l['delete_files'] = 'Kérjük, törölje a fájlokat vagy válasszon egy másik könyvtárat.';
$l['checking_data'] = 'A megadott adatok ellenőrzése';
$l['unzipping_files'] = 'Fájlok és mappák másolása';
$l['unzipping_datadir'] = 'Adat fájlok kicsomagolása';
$l['prop_db'] = 'Adatbázis terjesztése';
$l['finishing_process'] = 'Telepítés befejezése';
$l['wait_note'] = '<b>MEGJEGYZÉS:</b> Eltarthat 3-4 percig. Kérjük, ne hagyja el az oldalt, amíg a folyamatjelző el nem éri a 100 %-ot';
$l['cant_download'] = 'Nem tudja letölteni a ZIP fájlt.';
$l['softdirectory_invalid'] = 'A megadott könyvtárnév érvénytelen.';
$l['softdirectory_exists'] = 'A megadott könyvtárnév már létezik! Kérjük, adjon meg egy másik könyvtár nevet.';
$l['ins_emailto'] = 'E-mail telepítés részletei ';
$l['disable_classes'] = 'PHP Classes are disabled by admin or you are using '.APP.' Free version';
$l['invalid_class_id'] = 'Invalid Class ID';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['install'] = 'Telepítés';
$l['overview'] = 'Részletek';
$l['features'] = 'Jellemzők';
$l['demo'] = 'Demó';
$l['file'] = 'Fájlok';
$l['ratings'] = 'Értékelések';
$l['import'] = 'Importál';
$l['software_ver'] = 'Verzió';
$l['space_req'] = 'Hely szükséges';
$l['available_space'] = 'Rendelkezésre álló hely';
$l['req_space'] = 'Szükséges hely';
$l['mb'] = 'MB';
$l['software_support'] = 'Szoftver Támogatás';
$l['support_link'] = 'Támogatási oldal meglátogatása';
$l['support_note'] = 'Megjegyzés: A Softaculus nem ad támogatást bármilyen szoftverhez.';
$l['setup'] = 'Szoftver Telepítése';
$l['choose_domain'] = 'Válasszon Domain nevet';
$l['choose_domain_exp'] = 'Kérjük, válassza ki a domain nevet a szoftver telepítéséhez.';
$l['in_directory'] = 'Könyvtárban';
$l['in_directory_exp'] = 'A könyvtár relatív az útvonalhoz és <b>létrejön, ha nem létezik</b>. Például: A &soft-1;/dir telepítéséhez elég beírni: <b>dir</b>. A &soft-1; telepítéshez / és hagyja üresen.';
$l['aef_in_directory_exp'] = 'A könyvtár relatív az útvonalhoz és <b>létrejön, ha nem létezik</b>. Például: A  <span id="aef_span_lang">&soft-1;</span>/dir telepítéséhez elég beírni: <b>dir</b>. A <span id="aef_span_lang_a">&soft-1;</span> telepítéshez / és hagyja üresen.';
$l['softsubmit'] = 'Telepítés';
$l['congrats'] = 'Gratulálunk, a szoftver telepítése sikeres volt';
$l['succesful'] = 'sikeresen telepítve';
$l['enjoy'] = 'Reméljük, hogy a telepítési folyamat könnyű volt.';
$l['install_notes'] = 'Az alábbiakban néhány fontos megjegyzés. Ajánljuk, hogy olvassa el ezeket';
$l['please_note'] = '<b>MEGJEGYZÉS</b>: A '.APP.' csak egy automatikus szoftver telepítő és nem nyújt támogatást egyes szoftver csomagokhoz. Kérjük, látogasson el a vendor\ szoftver weboldalára a támogatásért!';
$l['regards'] = 'Üdvözlettel';
$l['softinstaller'] = 'Softaculus automata telepítő';
$l['return'] = 'Vissza az Áttekintéshez';
$l['current_ins'] = 'Jelenlegi Telepítések';
$l['link'] = 'Link';
$l['ins_time'] = 'Telepítési idő';
$l['version'] = 'Verzió';
$l['upd_to'] = 'Verzió frissítése';
$l['remove'] = 'Eltávolítás';
$l['no_info'] = 'Nincs információ';
$l['ratesoft'] = 'Értékelje ezt a szkriptet';
$l['reviews'] = 'Vélemények';
$l['reviewsoft'] = 'Vélemény írása';
$l['readreviews'] = 'Vélemények olvasása';
$l['reviews_exp'] = 'Más felhasználók által írt vélemények olvasása';
$l['ins_type'] = 'Telepítés típusa';
$l['ins_type_exp'] = '<b>Eredeti Csomag</b> - A Szkript Honlapjáról elérhető csomagban. <br /> <b>Csak Könyvtár Fájlok</b> - Csak a Javascript Könyvtár fájlok.';
$l['ori_pack'] = 'Eredeti Csomag';
$l['just_lib'] = 'Csak Könyvtár Fájlok';
$l['overwrite_exist'] = '<b>VAGY</b><br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">Válassza a checkboxot az összes fájl áttekintéséhet és folytassa</span></b>';
$l['overwrite'] = 'Fájlok Felülírása';
$l['choose_protocol'] = 'Válasszon Protokollt';
$l['choose_protocol_exp'] = 'Ha oldala rendelkezik SSl-el, kérjük, válassza a HTTPS protokollt.';
$l['downloading'] = 'Csomag letöltése';
$l['installing'] = 'Szkript telepítése';
$l['files'] = 'Fájlok és Mappák';
$l['modified_time'] = 'Utolsó módosítás';
$l['size'] = 'Méret';
$l['classes_ins_error'] = 'Hiba történt a telepítés mentése közben.';
$l['del_insid'] = 'Biztos benne, hogy el akarja távolítani a kiválasztott telepítéseket? A művelet visszafordíthatatlan. \nNem lesz több megerősítő kérdés.';
$l['rem_inst_id'] = 'Telepítés Eltávolítása - ';
$l['no_sel_inst'] = 'Nincs(enek) kijelölve telepítés(ek) eltávolításra.';
$l['inst_remvd'] = 'A kijelölt telepítés(ek) eltávolításra került(ek).  Az oldal most frissülni fog!';
$l['go'] = 'Mehet';
$l['download_zip'] = 'Minden fájl letöltése';
$l['software_category'] = 'Kategória';
$l['adv_option'] = 'Haladó beállítások';
$l['disable_notify_update'] = 'Frissítési értesítések tiltása';
$l['exp_disable_notify_update'] = 'Ha ki van jelölve, akkor nem fog e-mailt kapni az elérhető frissítésekről.';
$l['prog_installing'] = 'Telepítés';// Dont remove the trailing space
$l['prog_install_complete'] = 'Telepítés sikeres volt.';

$l['install_tweet_sub'] = 'Mondja el barátainak';
$l['select_domain'] = 'Domain kiválasztása';
$l['with_selected'] = 'Kiválasztattal';
$l['download'] = 'Letöltés';

