<?php

//////////////////////////////////////////////////////////////
//===========================================================
// backup_lang.php
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
$l['wrong_ins_title'] = 'Hibás telepítési azonosító';
$l['wrong_ins'] = 'A telepítési azonosító nem létezik';
$l['backup_ftp_error'] = 'Nem sikerült létrehozni a Backup Könyvtárat <b>&soft-1;</b>. Kérjük, hozza létre kézzel és próbálja meg újra.';
$l['err_backup'] = 'Nem sikerült létrehozni a Backupot.';
$l['no_space_backup'] = 'Nincs elegendő hely a backup telepítéséhez!';
$l['err_notelength'] = 'Biztonsági mentés megjegyzésnek rövidebbnek kell lennie, mint 255 karakter';
$l['off_backup_restore'] = 'Backup/Restore feature has been disabled by admin';

$l['cant_backup_dir'] = 'A mentés nem tudja a fájlokat elmenteni.';
$l['could_not_read'] = 'Upsz, a Softaculus nem tudta beolvasni a következő fájlt file/directory <b>&soft-1;</b> . Kérjük tegye olvashatóvá, hogy továbbra is használható legyen a backup segédprogram.';
$l['cant_datadir_dir'] = 'Hiba történt az adatkönyvtár mentésekor.';
$l['cant_wwwdir'] = 'Hibák léptek fel a web könyvtár hozzáadása során.';
$l['cant_backup_db'] = 'Hiba történt az adatbázis mentésekor.';
$l['err_perm_file'] = 'Hiba történt a jogosultságok mentésekor';
$l['err_wwwperm_file'] = 'There were errors while trying to make a file of permissions of the WEB directory';
$l['err_dataperm_file'] = 'Hiba történt az adatkönyvtár jogosultságainak mentésekor';
$l['save_dir_perms'] = 'A jogosultságokat nem lehetett elmenteni';
$l['save_datadir_perms'] = 'Az adatkönyvtár jogosultságait nem lehetett elmenteni';
$l['save_www_perms'] = 'Nem lehetett elmenteni a web könyvtár engedélyeket';
$l['cant_connect_mysql'] = 'Nem lehetett csatlakozni az adatbázishoz, kérjük ellenőrizze az adatbázis Felhasználónevét/Jelszavát. Ha megváltozott, kérjük frissítse az adatokra a Softaculus telepítőjén belül az Adatok szerkesztését használva.';

//Theme Strings
$l['<title>'] = APP.' - Mentés';
$l['info'] = 'Infó';
$l['ins_softname'] = 'Szoftver';
$l['ins_num'] = 'Telepítési azonosító';
$l['ins_ver'] = 'Verzió';
$l['ins_time'] = 'Telepítés ideje';
$l['ins_path'] = 'Útvonal';
$l['ins_wwwdir'] = 'Web Könyvtár útvonal';
$l['ins_url'] = 'URL';
$l['ins_db'] = 'Adatbázisnév';
$l['ins_dbuser'] = 'Adatbázis felhasználó';
$l['ins_dbpass'] = 'Adatbázis jelszó';
$l['ins_dbhost'] = 'Adatbázis szerver';
$l['backup_ins'] = 'Telepítés mentése';
$l['backup_dir'] = 'Könyvtár mentése';
$l['backup_dir_exp'] = 'Ha bejelöli, akkor a teljes könyvtár mentésre kerül';
$l['backup_db'] = 'Adatbázis mentése';
$l['backup_db_exp'] = 'Ha bejelöli, akkor az adatbázis is mentésre kerül';
$l['backup_conf'] = 'A mentés az adatmennyiségtől függően akár több időt is igénybe vehet. Kérjük NE zárja be a böngésző ablakát és maradjon az oldalon.';
$l['backedup'] = 'A mentés sikeresen elkészült. A <a href="'.$globals['index'].'act=backups">Mentés</a> oldalról le is töltheti.';
$l['backup_ins'] = 'Telepítés mentése';
$l['backup_datadir'] = 'Adatkönyvtár mentése';
$l['backup_datadir_exp'] = 'Ha bejelöli, akkor az adatkönyvtár mentésre kerül.';
$l['ins_datadir'] = 'Adatkönyvtár';
$l['return'] = 'Vissza az áttekintéshez';
$l['ins_cron_command'] = 'Cron Parancs';
$l['backup_wwwdir'] = 'Backup Web Könyvtár';
$l['backup_wwwdir_exp'] = 'Ha ellenőrizte, a web könyvtár mentésre kerül.';
$l['checking_data'] = 'A megadott adatok ellenőrzése';
$l['backingup_db'] = 'Adatbázis mentése';
$l['backingup_dir'] = 'Könyvtár mentése';
$l['backingup_datadir'] = 'Adat könyvtár mentése';
$l['finishing_process'] = 'Mentés befejezése';
$l['wait_note'] = '<b>MEGJEGYZÉS</b> Ez eltarthat 3-4 percig. Bármikor elhagyhatja ezt az oldalt amikor szeretné!';
$l['backingup'] = 'A mentés a háttérben folyik. Emailben értesítjük, amikor elkészült. Miután a mentés befejeződött, elérheti azt a <a href="'.$globals['index'].'act=backups">Mentések</a> oldalon.';
$l['check_email'] = 'Kérjük ellenőrizze e-mailjeit a mentés állapota miatt';
$l['prog_backingup'] = 'Mentés '; // Dont remove the trailing space
$l['prog_backup_complete'] = 'Mentés teljesítve.';
$l['backup_note'] = 'Mentés megjegyzés';
$l['backup_note_exp'] = 'Egy megjegyzést el tud menteni hivatkozásul';
$l['backup_operation'] = 'Válassza ki a Backup művelete(ke)t';
$l['backups_expire'] = 'Biztonsági mentései automatikusan kiürülnek a mentés létrehozása után  <b>&soft-1;</b> nappal.';
$l['err_max_backups'] = 'Elérte a megengedett mentések maximális számát (<b>&soft-1;</b>). Kérjük, töröljön nem használt mentéseket, hogy újat tudjon készíteni.';
$l['backup_notes'] = 'A biztonsági mentést a  '.APP.' automatikus biztonsági mentése készítette';
$l['max_backups'] = 'You currently have <b>&soft-1;</b> backups in your account. Your maximum backups limit is <b>&soft-2;</b>.';

$l['no_backup_functions'] = 'The BACKUP FUNCTIONS file could not be found! Please report this to the server administrator.';
$l['no_dir_exists'] = 'The Installation Directory does not exist.';
$l['backup_location_name'] = 'Backup Location';
$l['backup_file_empty'] = 'Incorrect backup file size : 0';
$l['err_mysql_db'] = 'The MySQL database name is incorrect as the database could not be selected.';
$l['backup_loc'] = 'Backup Location'; 
$l['exp_backup_loc'] = 'Choose the backup location where you would like to store the backup'; 
$l['default'] = 'Default'; 
$l['invalid_backup_location'] = 'Backup location submitted does not exist'; 
$l['local_folder'] = 'Local Folder'; 

$l['invalid_access_token'] = 'Invalid Access Token. Please Re-Authorize '.APP.' Dropbox APP from the Edit Backup location page in '.APP.' enduser panel';
$l['insufficient_space'] = 'Your Dropbox account is full. Please free some space and attempt the backup after sometime';

$l['gdrive_err_init'] = 'There were some errors while initiating the backup on Google Drive!!';
$l['gdrive_err_end'] = 'There were some errors while committing backup to your Google Drive account!!';

$l['error_max_backup_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Backups allowed per script';

$l['ftp_access'] = 'PHP process is unable to write files to your server. Please configure FTP access to continue.';
$l['configure_domain'] = 'Configure Settings';

$l['wpc_return'] = 'Return to Backups';

$l['ampps_notify_premium'] = 'This feature is available in the premium version of AMPPS. Please purchase <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';
$l['backing_up'] = 'Your backup is being created in background. You will be notified by email once its completed. You can track the backup process from the <a href="'.$globals['index'].'act=eu_tasklist">Task List</a> page.<br /> Your installation URL : <a href="&soft-1;" target="_blank">&soft-1;</a>';