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

$l['no_domain'] = 'Nebol určený žiadny názov domény';
$l['alreay_exists'] = 'Zadaná doména už vo vašom účte existuje.';
$l['no_ftp_user'] = 'Nebol určený žiadny používateľ pre FTP';
$l['no_ftp_pass'] = 'Nebolo určené žiadne heslo pre FTP';
$l['no_ftp_path'] = 'Nebola určená žiadna FTP cesta';
$l['no_data_dir'] = 'Nebol určený priečinok dát';
$l['wrong_ftp_path'] = 'Zadaný priečinok FTP je nesprávny a nesmeruje na zadanú doménu.';
$l['no_id'] = 'Nebolo nájdené ID !';
$l['no_backup_path'] = 'Nebola určená žiadna cesta pre zálohu';
$l['ftp_error-1'] = 'Nebolo možné získať doménový názov';
$l['ftp_error-2'] = 'Nebolo možné sa prihlásiť so zadanými údajmi FTP';
$l['ftp_error-3'] = 'Zadaná cesta FTP neexistuje';
$l['no_port'] = 'Nebol určený port';
$l['no_pub_allowed'] = 'Verejný kľúč nie je požadovaný pri prihlásení pomocou hesla';
$l['no_public_key'] = 'Nebola nájdená cesta k verejnému kľúču';
$l['no_private_key'] = 'Nebola nájdená cesta k súkromnému kľúču';
$l['err_sftp_only'] = 'Iba SFTP umožňuje prihlásenie pomocou kľúčou';
$l['no_pub_pri'] = 'Verejný alebo súkromný kľúč nebol nájdený';
$l['no_domain_exist'] = 'Doména neexistuje';
$l['not_allowed'] = 'Nemáte povolenie upraviť túto doménu';
$l['ftp_error'] = 'Could not connect to the FTP server';
$l['err_upload_remote'] = 'Unable to upload file to the FTP path';
$l['err_fetch_file'] = 'Unable to access the file uploaded to the domain';
$l['err_fetch_path'] = 'Unable to fetch path from the data received';
$l['invalid_domain_id'] = 'Invalid Domain ID';

//Theme Strings
$l['<title>'] = 'Upraviť doménu';
$l['edit_domain'] = 'Upraviť doménu';
$l['domain'] = 'Názov domény';
$l['domain_exp'] = 'Zadajte platný doménový názov (bez http://) napr.: mojadomena.sk';
$l['ftp_user'] = 'Používateľ';
$l['ftp_user_exp'] = 'Prihlasovacie meno vášho účtu FTP';
$l['ftp_pass'] = 'Heslo';
$l['ftp_pass_exp'] = 'Heslo vášho účtu FTP';
$l['ftp_path'] = 'Cesta';
$l['ftp_path_exp'] = 'Relatívna cesta do priečinka dostupná z webu. napr.: /public_html';
$l['backup_path'] = 'Cesta zálohy';
$l['backup_path_exp'] = 'Relatívna cesta z domovského priečinka používateľa. napr.: /backups';
$l['data_dir'] = 'Priečinok dát';
$l['data_dir_exp'] = 'Celá cesta do priečinka dát napr.: /home/POUŹÍVATEĽ/datadir<br/>Niektoré skripty ako Elgg, Moodle, apod. potrebujú priečinok nedostupný z webu.<br/>Na to bude použitý tento priečinok.';
$l['ins_email_exp'] = 'Zaslať email obsahujúci údaje pre nastavenie, keď nainštalujete nový softvér';
$l['submit_edit'] = 'Uložiť a aktualizovať';
$l['settings_saved'] = 'Vaša doména bola úspešne uložená';
$l['show_all_dom'] = 'Zobraziť všetky domény';
$l['port'] = 'Port';
$l['port_exp'] = 'Zadajte port pre pripojenie';
$l['protocol'] = 'Protokol';
$l['protocol_exp'] = 'Zvoľte protokol, ktorým bude Softaculous komunikovať';
$l['auth_password'] = 'Metóda overovania';
$l['auth_password_exp'] = 'Vyberte metódu overovania';
$l['private_key'] = 'Súkromný kľúč';
$l['private_key_exp'] = 'Prilepte privátny kľúč tu';
$l['passphrase'] = 'Overovacia fráza';
$l['passphrase_exp'] = 'Overovacia fráza pre zašifrovaný súkromný kľúč(voliteľné)';
$l['sftp_path'] = 'Webový priečinok';
$l['sftp_path_exp'] = 'Celá cesta do webového priečinka používateľa. napr.: /home/POUŽÍVATEĽ/public_html';
$l['sbackup_path_exp'] = 'Celá cesta do priečinka záloh. napr.: /home/POUŽÍVATEĽ/backups';
$l['server_host'] = 'Host servera (voliteľné)';
$l['server_host_exp'] = '<b>Ak</b> váš doménový názov a host servera nie sú tie isté zadajte host servera. napr. ftp.mojadomena.sk';
$l['ftp_pass_opt'] = 'Leave blank if you do not want to update the password.';
$l['auth_method_pass'] = 'Password';
$l['auth_method_key'] = 'SSH Key';
$l['no_pass_pri'] = 'Please provide either a password or private key';
$l['err_reconnect'] = 'Could not reconnect to database';
