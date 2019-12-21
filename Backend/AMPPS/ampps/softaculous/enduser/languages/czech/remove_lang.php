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

$l['no_ins'] = 'Instalace nebyla zadána';
$l['wrong_ins_title'] = 'Špatné instalační ID';
$l['wrong_ins'] = 'Instalační ID, které bylo zadáno, neexistuje';
$l['cant_remove_dir'] = 'Adresáře nelze odebrat, protože je to domovský adresář. Prosím zrušte možnost <b>Odstranit adresář</b>, aby bylo možné pokračovat bez odstranění adresáře.';
$l['cant_remove_wwwdir'] = 'Adresář webu nelze odstranit, protože je to domovský adresář. Prosím zrušte zaškrtnutí  <b>Odebrat adresář webu</b>, aby bylo možné pokračovat bez odebrání adresáře webu.';
$l['mail_rem_ins'] = 'Instalace &soft-1; byla odstraněna. Níže jsou uvedeny podrobnosti instalace:';
$l['mail_path'] = 'Cesta';
$l['mail_url'] = 'URL';
$l['mail_db'] = 'MySQL databáze';
$l['mail_dbuser'] = 'Uživatel MySQL DB';
$l['mail_dbhost'] = 'MySQL DB server';
$l['mail_dbpass'] = 'Heslo MySQL DB';
$l['mail_time'] = 'Čas instalace';
$l['mail_rem_time'] = 'Čas odstranění';
$l['mail_subject'] = 'Odstraněná instalace &soft-1;';
$l['mail_cron_command'] = 'Úloha CRONu';
$l['mail_datadir'] = 'Adresář pro data';
$l['mail_wwwdir'] = 'Adresář webu';
$l['checking_data'] = 'Kontrola zadaných dat';
$l['rem_db'] = 'Odstraňování databáze/uživatele databáze';
$l['rem_dir'] = 'Odstraňování adresáře';
$l['rem_datadir'] = 'Odstraňování adresáře pro data';
$l['rem_cron'] = 'Odstraňování úloh Cronu';
$l['finishing_process'] = 'Úspěšně odstraněno';
$l['wait_note'] = '<b>POZNÁMKA</b>: Toto může trvat 3-4 minuty. Prosím neopouštějte tuto stránku, dokud nebude dosaženo 100 %.';


//Theme Strings
$l['<title>'] = APP.' - Remove';
$l['info'] = 'Informace';
$l['ins_softname'] = 'Software';
$l['ins_num'] = 'Číslo instalace';
$l['ins_ver'] = 'Verze';
$l['ins_time'] = 'Čas instalace';
$l['ins_path'] = 'Cesta';
$l['ins_url'] = 'URL';
$l['ins_db'] = 'Jméno databáze';
$l['ins_dbuser'] = 'Uživatel databáze';
$l['ins_dbpass'] = 'Heslo databáze';
$l['ins_dbhost'] = 'Databázový server';
$l['remove_ins'] = 'Odstranit instalaci';
$l['remove_dir'] = 'Odstranit adresář';
$l['remove_dir_exp'] = 'Zaškrtnete-li toto, celá složka bude smazána';
$l['remove_db'] = 'Odstranit databázi';
$l['remove_db_exp'] = 'Pokud je zaškrtnuto, databáze bude smazána';
$l['remove_dbuser'] = 'Odstranit uživatele databáze';
$l['remove_dbuser_exp'] = 'Pokud je zaškrtnuto, uživatel databáze bude také smazán';
$l['remove_conf'] = 'Tyto akce jsou nevratné! \n Opravdu chcete odstranit tuto instalaci?';
$l['uninstalled'] = 'Instalace byla úspěšně odstraněna';
$l['removeins'] = 'Odstranit instalaci';
$l['ins_cron_command'] = 'Cron příkaz';
$l['remove_datadir'] = 'Odstranit adresář pro data';
$l['remove_datadir_exp'] = 'Pokud je zaškrtnuto, adresář pro data bude odstraněn.';
$l['ins_datadir'] = 'Adresář pro data';
$l['remove_wwwdir'] = 'Odstranit adresář webu';
$l['remove_wwwdir_exp'] = 'Pokud je zaškrtnuto, adresář webu bude odstraněn.';
$l['ins_wwwdir'] = 'Adresář webu';
$l['return'] = 'Zpět na Přehled';
$l['prog_removing'] = 'Odstraňování';// Dont remove the trailing space
$l['prog_remove_complete'] = 'Instalace odstraněna.';
$l['disabled_script_info'] = 'Informace nejsou dostupné, protože skript je zakázaný.';

$l['wpc_return'] = 'Return to Installations';