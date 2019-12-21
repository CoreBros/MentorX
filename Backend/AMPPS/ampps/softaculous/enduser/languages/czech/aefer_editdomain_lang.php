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

$l['no_domain'] = 'Doména nebyla zadaná';
$l['alreay_exists'] = 'Zadaná doména již ve vašem účtu existuje.';
$l['no_ftp_user'] = 'Uživatel FTP nebyl zadán';
$l['no_ftp_pass'] = 'Heslo k FTP nebylo zadáno';
$l['no_ftp_path'] = 'FTP cesta nebyla zadána';
$l['no_data_dir'] = 'Adresář pro data nebyl zadán';
$l['wrong_ftp_path'] = 'Zadaná FTP cesta je nesprávná a neukazuje na danou doménu.';
$l['no_id'] = 'ID nenalezeno!';
$l['no_backup_path'] = 'Cesta zálohy nebyla zadána';
$l['ftp_error-1'] = 'Nelze přeložit jméno domény';
$l['ftp_error-2'] = 'Nelze se přihlásit se zadanými FTP detaily';
$l['ftp_error-3'] = 'Zadaná FTP cesta neexistuje';
$l['no_port'] = 'Port nebyl zadán';
$l['no_pub_allowed'] = 'Veřejný klíč není požadován při ověřování pomocí hesla';
$l['no_public_key'] = 'Cesta k veřejnému klíči nebyla nalezena';
$l['no_private_key'] = 'Cesta k soukromému klíči nebyla nalezena';
$l['err_sftp_only'] = 'Pouze SFTP umožňuje ověřování prostřednictvím klíčů';
$l['no_pub_pri'] = 'Veřejný nebo soukromý klíč nenalezen';
$l['no_domain_exist'] = 'Zadaná doména neexistuje';
$l['not_allowed'] = 'Nemáte oprávnění editovat tuto doménu';
$l['ftp_error'] = 'Could not connect to the FTP server';
$l['err_upload_remote'] = 'Unable to upload file to the FTP path';
$l['err_fetch_file'] = 'Unable to access the file uploaded to the domain';
$l['err_fetch_path'] = 'Unable to fetch path from the data received';
$l['invalid_domain_id'] = 'Invalid Domain ID';

//Theme Strings
$l['<title>'] = 'Editovat doménu';
$l['edit_domain'] = 'Editování domény';
$l['domain'] = 'Doména';
$l['domain_exp'] = 'Zadejte platnou doménu (bez http://) např. mojedomena.cz';
$l['ftp_user'] = 'uživatel';
$l['ftp_user_exp'] = 'Uživatelské jméno vašeho FTP účtu';
$l['ftp_pass'] = 'heslo';
$l['ftp_pass_exp'] = 'Heslo vašeho FTP účtu';
$l['ftp_path'] = 'cesta';
$l['ftp_path_exp'] = 'Relativní cesta k adresáři uživatele přístupného z webu, např. /public_html';
$l['backup_path'] = 'Cesta zálohy';
$l['backup_path_exp'] = 'Relativní cesta z domovského adresáře uživatele, např. /backups';
$l['data_dir'] = 'Adresář pro data';
$l['data_dir_exp'] = 'Úplná cesta k adresáři pro data např. /home/USER/datadir<br/>Tento adresář bude využit pro umístění skriptů jako například Elgg nebo Moodle, které vyžadují složku nepřístupnou z webového rozhraní.<br/>';
$l['ins_email_exp'] = 'Poslat email obsahující podrobnosti nastavení při instalaci nového softwaru';
$l['submit_edit'] = 'Uložit & Aktualizovat';
$l['settings_saved'] = 'Doména byla úspěšně uložena';
$l['show_all_dom'] = 'Zobrazit všechny domény';
$l['port'] = 'Port';
$l['port_exp'] = 'Vložte port pro připojení';
$l['protocol'] = 'Protokol';
$l['protocol_exp'] = 'Vyberte protokol, přes který bude Softaculous komunikovat';
$l['auth_password'] = 'Metoda autentizace';
$l['auth_password_exp'] = 'Vyberte metodu autentizace';
$l['private_key'] = 'Soukromý klíč';
$l['private_key_exp'] = 'Zde vložte soukromý klíč';
$l['passphrase'] = 'Přístupové heslo';
$l['passphrase_exp'] = '…. Přístupové heslo pro šifrovaný soukromý klíč (volitelné)';
$l['sftp_path'] = 'Adresář webu';
$l['sftp_path_exp'] = 'Absolutní cesta k adresáři webu uživatele, např. /home/USERNAME/public_html';
$l['sbackup_path_exp'] = 'Absolutní cesta k adresáři záloh, např. /home/USERNAME/backups';
$l['server_host'] = 'Hostitelský server (volitelný)';
$l['server_host_exp'] = '<b>Jestliže</b> vaše doména a název hostitel nejsou stejné, vložte hostitele, např. ftp.mojedomena.cz';
$l['ftp_pass_opt'] = 'Leave blank if you do not want to update the password.';
$l['auth_method_pass'] = 'Password';
$l['auth_method_key'] = 'SSH Key';
$l['no_pass_pri'] = 'Please provide either a password or private key';
$l['err_reconnect'] = 'Could not reconnect to database';