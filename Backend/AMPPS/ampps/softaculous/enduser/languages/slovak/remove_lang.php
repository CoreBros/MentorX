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

$l['no_ins'] = 'Nebola potvrdená žiadna inštalácia';
$l['wrong_ins_title'] = 'Zlé ID inštalácie';
$l['wrong_ins'] = 'ID inštalácie, ktoré ste zadali neexistuje';
$l['cant_remove_dir'] = 'Priečinok nemôže byť odstránený, pretože je domovským priečinkom. Prosím, odznačte možnosť <b>Odstrániť priečinok</b> pre pokračovanie bez odstránenia priečinka.';
$l['cant_remove_wwwdir'] = 'Priečinok WEB nemôže byť odstránený, pretože je domovským priečinkom. Prosím, odznačte možnosť <b>Odstrániť priečinok WEB</b> pre pokračovanie bez odstránenia priečinka WEB.';
$l['mail_rem_ins'] = 'Inštalácia &soft-1; bola odstránená. Nasledujú detaily inštalácie:';
$l['mail_path'] = 'Cesta';
$l['mail_url'] = 'URL';
$l['mail_db'] = 'MySQL databáza';
$l['mail_dbuser'] = 'Prihlasovacie meno MySQL DB';
$l['mail_dbhost'] = 'Host MySQL DB';
$l['mail_dbpass'] = 'Heslo MySQL DB';
$l['mail_time'] = 'Čas inštalácie';
$l['mail_rem_time'] = 'Čas odobrania';
$l['mail_subject'] = 'Odstránená inštalácia &soft-1;';
$l['mail_cron_command'] = 'CRON úloha';
$l['mail_datadir'] = 'Priečinok dát';
$l['mail_wwwdir'] = 'Webový priečinok';
$l['checking_data'] = 'Kontrola zadaných údajov';
$l['rem_db'] = 'Odstraňovanie databázy/používateľa databázy';
$l['rem_dir'] = 'Odstraňovanie priečinka';
$l['rem_datadir'] = 'Odstraňovanie priečinka dát';
$l['rem_cron'] = 'Odstraňovanie CRON úloh';
$l['finishing_process'] = 'Úspešne odstránené';
$l['wait_note'] = '<b>UPOZORNENIE:</b> Toto môže trvať 3-4 minúty. Prosím, neopúšťajte stránku, pokým ukazovateľ nedosiahne 100%';


//Theme Strings
$l['<title>'] = APP.' - Remove';
$l['info'] = 'Informácie';
$l['ins_softname'] = 'Softvér';
$l['ins_num'] = 'Číslo inštalácie';
$l['ins_ver'] = 'Verzia';
$l['ins_time'] = 'Čas inštalácie';
$l['ins_path'] = 'Cesta';
$l['ins_url'] = 'URL';
$l['ins_db'] = 'Názov databázy';
$l['ins_dbuser'] = 'Používateľ databázy';
$l['ins_dbpass'] = 'Heslo databázy';
$l['ins_dbhost'] = 'Host databázy';
$l['remove_ins'] = 'Odstrániť inštaláciu';
$l['remove_dir'] = 'Odstrániť priečinok';
$l['remove_dir_exp'] = 'Ak zaškrtnete toto, celý priečinok bude zmazaný';
$l['remove_db'] = 'Odstrániť databázu';
$l['remove_db_exp'] = 'Ak zaškrtnuté, databáza bude zmazaná';
$l['remove_dbuser'] = 'Odstrániť používateľa databázy';
$l['remove_dbuser_exp'] = 'Ak zaškrtnuté, bude zmazaná aj databáza';
$l['remove_conf'] = 'Tieto úkony sú nezvratné! \n Ste si istý, že chcete odstrániť túto inštaláciu ?';
$l['uninstalled'] = 'Inštalácia bola úspešne odstránená';
$l['removeins'] = 'Odstrániť inštaláciu';
$l['ins_cron_command'] = 'Cron príkaz';
$l['remove_datadir'] = 'Odstrániť priečinok dát';
$l['remove_datadir_exp'] = 'Ak zaškrtnuté, priečinok dát bude odstránený.';
$l['ins_datadir'] = 'Priečinok dát';
$l['remove_wwwdir'] = 'Odstrániť Web priečinok';
$l['remove_wwwdir_exp'] = 'Ak zaškrtnuté, priečinok web bude odstránený.';
$l['ins_wwwdir'] = 'Webový priečinok';
$l['return'] = 'Spať na prehľad';
$l['prog_removing'] = 'Odstraňovanie';// Dont remove the trailing space
$l['prog_remove_complete'] = 'Inštalácia odstránená.';
$l['disabled_script_info'] = 'Nie sú dostupné žiadne informácie, pretože tento skript bol zakázaný.';

$l['wpc_return'] = 'Return to Installations';