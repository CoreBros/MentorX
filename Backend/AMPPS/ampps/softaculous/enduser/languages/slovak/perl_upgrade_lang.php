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

$l['no_info_file'] = 'Súbor INFO.XML nebol nájdený! Prosím, oznámte to správcovi servera.';
$l['incompatible'] = 'Softvér požaduje vyššiu verziu '.APP.'! Prosím, oznámte to správcovi servera.';
$l['no_upgrade'] = 'Súbor UPGRADE.XML nebol nájdený! Prosím, oznámte to správcovi servera.';
$l['no_functions'] = 'Súbor UPGRADE FUNCTIONS nebol nájdený! Prosím, oznámte to správcovi servera.';
$l['no_field'] = 'Políčko <b>&soft-1;</b> je požadované a musí byť vyplnené.';
$l['no_package'] = 'Balík aktualizácie nebol nájdený!';
$l['no_decompress'] = 'Pri dekompresii súborov balíčka sa vyskytli chyby.';
$l['no_decompress_www'] = 'Vyskytli sa chyby pri rozbaľovaní Web súborov.';
$l['no_config_perl_path'] = 'Vyskytla sa chyba pri nastavovaní CGI súborov.';
$l['checking_data'] = 'Kontrola zadaných údajov';
$l['unzipping_files'] = 'Kopírovanie súborov a priečinkov';
$l['unzipping_datadir'] = 'Rozbaľovanie súborov dát';
$l['prop_db'] = 'Aktualizujeme databázu';
$l['finishing_process'] = 'Dokončujem aktualizáciu';
$l['wait_note'] = '<b>UPOZORNENIE:</b> Toto môže trvať 3-4 minúty. Prosím, neopúšťajte stránku, pokým ukazovateľ nedosiahne 100%';
$l['no_space'] = 'Nemáte dostatočný úložný priestor pre aktualizáciu tejto inštalácie !';
$l['invalid_insid'] = 'Invalid Installation ID';
$l['invalid_script'] = 'Invalid Script ID';
$l['not_perl_script'] = 'This script is not in PERL';
$l['no_perl_upgrade'] = 'Upgrade is not supported for this script';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['upgrade'] = 'Aktualizácia softvéru';
$l['softins_url'] = 'URL';
$l['softins_path'] = 'Cesta';
$l['softcopy_note'] = '<b>UPOZORNENIE</b>: Tento softvér uskutoční aktualizáciu s pomocou jeho vlastného nástroja. Pre dokončenie aktualizácie navštívte URL, ktorá bude zobrazená, keď budú súbory skopírované.';
$l['softsubmit'] = 'Aktualizovať';
$l['congrats'] = 'Gratulujeme, softvér bol úspešne aktualizovaný';
$l['succesful'] = 'bol úspešne aktualizovaný na';
$l['admin_url'] = 'URL správcu';
$l['setup_continue'] = 'Avšak, aktualizácia bude dokončená samotným softvérom, takže, prosím, prejdite na nasledujúcu URL';
$l['enjoy'] = 'Dúfame, že proces aktualizácie bol jednoduchý.';
$l['upgrade_notes'] = 'Nasledujú dôležité poznámky. Je dôrazne doporučované prečítať si ich';
$l['please_note'] = '<b>UPOZORNENIE</b>: '.APP.' je iba auto inštalátor a neposkytuje žiadnu podporu pre softvér. Prosím, navštívte stránku poskytovateľa softvéru pre podporu!';
$l['regards'] = 'S pozdravom';
$l['softinstaller'] = APP.' Auto inštalátor';
$l['return'] = 'Spať na prehľad';
$l['note_backup'] = 'Je odporúčané, aby ste vykonali <a href="'.$globals['index'].'act=backup&insid=&soft-1;">zálohu</a> inštalácie pred aktualizáciou.';
$l['create_backup'] = 'Vytvoriť zálohu';
$l['create_backup_exp'] = 'Vytvoriť zálohu pred aktualizáciou';
$l['prog_upgrading'] = 'Aktualizujem';// Dont remove the trailing space
$l['prog_upgrade_complete'] = 'Aktualizácia dokončená.';

$l['upgrade_tweet_sub'] = 'Zdieľajte so známymi';
$l['not_in_free'] = '<b>&soft-1;</b> nemôže byť aktualizovaná v bezplatnej verzii '.APP.'!';
$l['notify_admin'] = 'Prosím, upozornite vášho správcu servera, aby zakúpil prémiovú verziu '.APP.'!';

