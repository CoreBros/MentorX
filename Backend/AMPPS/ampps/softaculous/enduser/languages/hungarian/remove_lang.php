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

$l['no_ins'] = 'Nincs telepítés kiválasztva';
$l['wrong_ins_title'] = 'Rossz Telepítési Azonosító';
$l['wrong_ins'] = 'A megadott telepítési azonosító nem létezik';
$l['cant_remove_dir'] = 'A könyvtárat nem lehetett eltávolítani, ugyanis ez a saját könyvtár. Kérjük, vegye le a jelölést a <b> Könyvtár Eltávolítása</b> lehetőségről, hogy folytatni tudja  a könyvtár eltávolítása nélkül.';
$l['cant_remove_wwwdir'] = 'A WEBkönyvtárat nem lehetett eltávolítani a saját könyvtárból. Kérjük, vegye le a kijelölést a  <b>Web Könyvtár Eltávolítása</b> opciónál a web könyvár elvávolítása nélküli folytatáshoz.';
$l['mail_rem_ins'] = 'A &soft-1; telepítése eltávolításra került. Az alábbiakban találja a telepítés részleteit:';
$l['mail_path'] = 'Útvonal';
$l['mail_url'] = 'URL';
$l['mail_db'] = 'MySQL Adatbázis';
$l['mail_dbuser'] = 'MySQL DB Felhasználó';
$l['mail_dbhost'] = 'MySQL DB Hoszt';
$l['mail_dbpass'] = 'MySQL DB Jelszó';
$l['mail_time'] = 'Telepítési idő';
$l['mail_rem_time'] = 'Eltávolítás ideje';
$l['mail_subject'] = 'El lett távolítva a  &soft-1; telepítése';
$l['mail_cron_command'] = 'Cron Job';
$l['mail_datadir'] = 'Adat Könyvtár';
$l['mail_wwwdir'] = 'Web Könyvtár';
$l['checking_data'] = 'A megadott adatok ellenőrzése';
$l['rem_db'] = 'Adatbázis/Adatbázis felhasználó eltávolítása';
$l['rem_dir'] = 'Könyvtár eltávolítása';
$l['rem_datadir'] = 'Adat könyvtár eltávolítása';
$l['rem_cron'] = 'Cron Job eltávolítása';
$l['finishing_process'] = 'Sikeres volt az eltávolítás';
$l['wait_note'] = '<b>MEGJEGYZÉS:</b> Eltarthat 3-4 percig. Kérjük, ne hagyja el az oldalt, amíg a folyamatjelző el nem éri a 100 %-ot';


//Theme Strings
$l['<title>'] = APP.' - Remove';
$l['info'] = 'Infó';
$l['ins_softname'] = 'Szoftver';
$l['ins_num'] = 'Telepítés száma';
$l['ins_ver'] = 'Verzió';
$l['ins_time'] = 'Telepítési idő';
$l['ins_path'] = 'Útvonal';
$l['ins_url'] = 'URL';
$l['ins_db'] = 'Adatbázis név';
$l['ins_dbuser'] = 'Adatbázis Felhasználónév';
$l['ins_dbpass'] = 'Adatbázis Jelszó';
$l['ins_dbhost'] = 'Adatbázis Hoszt';
$l['remove_ins'] = 'Telepítés eltávolítása';
$l['remove_dir'] = 'Könyvtár eltávolítása';
$l['remove_dir_exp'] = 'Ha ezt bejelöli, az összes mappa törlődni fog';
$l['remove_db'] = 'Adatbázis eltávolítása';
$l['remove_db_exp'] = 'Ha bejelöli, az adatbázis törlődni fog';
$l['remove_dbuser'] = 'Adatbázis Felhasználó eltávolítása';
$l['remove_dbuser_exp'] = 'Ha bejelöli, az adatbázis felhasználó törlődni fog';
$l['remove_conf'] = 'Ez a művelet visszaállíthatatlan! \n Biztos benne, hogy ezt a telepítést el kívánja távolítani?';
$l['uninstalled'] = 'A telepítés eltávolítása sikeres volt';
$l['removeins'] = 'Telepítés eltávolítása';
$l['ins_cron_command'] = 'Cron Parancs';
$l['remove_datadir'] = 'Adat könyvtár eltávolítása';
$l['remove_datadir_exp'] = 'Ha bejelöli, az Adat könyvtár eltávolításra kerül.';
$l['ins_datadir'] = 'Adat Könyvtár';
$l['remove_wwwdir'] = 'Web Könyvtár eltávolítása';
$l['remove_wwwdir_exp'] = 'Ha bejelöli, a web könyvtár eltávolításra kerül.';
$l['ins_wwwdir'] = 'Web Könyvtár';
$l['return'] = 'Vissza az Áttekintéshez';
$l['prog_removing'] = 'Eltávolítás';// Dont remove the trailing space
$l['prog_remove_complete'] = 'Telepítés el lett távolítva.';
$l['disabled_script_info'] = 'Nincs elérhető információ, mert ez a szkript le van tiltva.';

$l['wpc_return'] = 'Return to Installations';