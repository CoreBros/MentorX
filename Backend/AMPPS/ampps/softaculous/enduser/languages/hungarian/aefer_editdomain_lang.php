<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editdomain_lang.php
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

$l['no_domain'] = 'Nem lett domain név megadva';
$l['alreay_exists'] = 'A megadott domain már létezik a fiókjában.';
$l['no_ftp_user'] = 'Nem lett megadva FTP felhasználó';
$l['no_ftp_pass'] = 'Nem lett megadva FTP jelszó';
$l['no_ftp_path'] = 'Nem lett megadva FTP útvonal';
$l['no_data_dir'] = 'Nem lett megadva Adat Könyvtár';
$l['wrong_ftp_path'] = 'A beírt FTP útvonal hibás és nem mutat a megadott domain névre.';
$l['no_id'] = 'Az ID nem található!';
$l['no_backup_path'] = 'Nem lett megadva Backup útvonal';
$l['ftp_error-1'] = 'A domain nevet nem lehetett feloldani';
$l['ftp_error-2'] = 'Nem tudott belépni a megadott FTP adatokkal';
$l['ftp_error-3'] = 'A megadott FTP útvonal nem létezik';
$l['no_port'] = 'Nem lett megadva Port';
$l['no_pub_allowed'] = 'Nyilvános Kulcs nem szükséges amíg a hitelesítő jelszót használja';
$l['no_public_key'] = 'Nincs útvonal a nyilvános kulcshoz';
$l['no_private_key'] = 'Nincs útvonal a privát kulcshoz';
$l['err_sftp_only'] = 'Csak az SFTP teszi lehetővé a kulcsokon keresztüli hitelesítést';
$l['no_pub_pri'] = 'Nyilvános vagy privát Kulcs nem található';
$l['no_domain_exist'] = 'A megadott domain név nem létezik';
$l['not_allowed'] = 'Ön nem jogosult  ennek a domain névnek a szerkesztésére';
$l['ftp_error'] = 'Could not connect to the FTP server';
$l['err_upload_remote'] = 'Unable to upload file to the FTP path';
$l['err_fetch_file'] = 'Unable to access the file uploaded to the domain';
$l['err_fetch_path'] = 'Unable to fetch path from the data received';
$l['invalid_domain_id'] = 'Invalid Domain ID';

//Theme Strings
$l['<title>'] = 'Egy domain szerkesztése';
$l['edit_domain'] = 'Domain szerkesztése';
$l['domain'] = 'Domain név';
$l['domain_exp'] = 'Írjon be egy érvényes domain nevet (http:// nélkül) pl.: mydomain.com';
$l['ftp_user'] = 'Felhasználó';
$l['ftp_user_exp'] = 'FTP Fiók felhasználó neve';
$l['ftp_pass'] = 'jelszó';
$l['ftp_pass_exp'] = 'FTP fiók jelszava';
$l['ftp_path'] = 'útvonal';
$l['ftp_path_exp'] = 'The FTP Path to your domain e.g. /public_html';
$l['backup_path'] = 'Backup útvonal';
$l['backup_path_exp'] = 'The Backup Path to your domain e.g. /backups';
$l['data_dir'] = 'Adat Könytár';
$l['data_dir_exp'] = 'Teljes útvona az Adat Könyvtárhoz pl.: /home/USER/datadir<br/> Néhány szkripteknek, mint például Elgg és Moodle stb., szükségük van egy nem weben hozzáférhető mappára.<br/>Erre a célra lesz használva.';
$l['ins_email_exp'] = 'Mikor új szoftvert hoz létre, a beállítás részletei e-mailben kerülnek kiküldésre';
$l['submit_edit'] = 'Ment és frissít';
$l['settings_saved'] = 'Domain neve sikeresen mentésre került';
$l['show_all_dom'] = 'Minden domain';
$l['port'] = 'Port';
$l['port_exp'] = 'Adjon meg minden portot a csatlakozáshoz ';
$l['protocol'] = 'Protokoll';
$l['protocol_exp'] = 'Azzal a Softavculus-al válassza ki a protokollt, amellyel kommunikálni fog';
$l['auth_password'] = 'Hitelesítési módszer';
$l['auth_password_exp'] = 'Válassza ki a hitelesítési módot';
$l['private_key'] = 'Privát kulcs';
$l['private_key_exp'] = 'Illessze be a privát kulcsot itt';
$l['passphrase'] = 'Jelmondat';
$l['passphrase_exp'] = 'Jelmondat titkosított privát kulcshoz (nem kötelező)';
$l['sftp_path'] = 'Web Könyvtár';
$l['sftp_path_exp'] = 'Abszolút útvonal a felhasználó web könyvtárához pl.:  /home/USERNAME/public_html';
$l['sbackup_path_exp'] = 'Abszolút útvonal Backup Könyvtárhoz pl.: /home/USERNAME/backups';
$l['server_host'] = 'Szerver Hoszt (nem kötelező)';
$l['server_host_exp'] = '<b> HA</b> domain neve és szerver hosztja nem ugyanaz, írja be a szerver hosztot, pl.: ftp.mydomain.com';
$l['ftp_pass_opt'] = 'Leave blank if you do not want to update the password.';
$l['auth_method_pass'] = 'Password';
$l['auth_method_key'] = 'SSH Key';
$l['no_pass_pri'] = 'Please provide either a password or private key';
$l['err_reconnect'] = 'Could not reconnect to database';
