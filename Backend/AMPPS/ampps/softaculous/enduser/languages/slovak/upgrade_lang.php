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
$l['checking_data'] = 'Kontrola zadaných údajov';
$l['unzipping_files'] = 'Kopírovanie súborov a priečinkov';
$l['unzipping_datadir'] = 'Rozbaľovanie súborov dát';
$l['prop_db'] = 'Aktualizujeme databázu';
$l['finishing_process'] = 'Dokončujem aktualizáciu';
$l['wait_note'] = '<b>UPOZORNENIE:</b> Toto môže trvať 3-4 minúty. Prosím, neopúšťajte stránku, pokým ukazovateľ nedosiahne 100%';
$l['cver_greater'] = 'Súčasná verzia je vyššia alebo rovnaká ako verzia, na ktorú chcete uskutočniť aktualizáciu. Toto je možné, ak ste ručne aktualizovali túto inštaláciu. Ak to nie je tento prípad, tak, prosím, označte nasledujúce políčko';
$l['force_upgrade'] = 'Nasilu aktualizovať';
$l['backup_finish'] = 'Záloha dokončená';
$l['backup_fail_proceed'] = 'Pri procese zálohovania sa vyskytla chyba. Pokračovať s aktualizáciou ?';
$l['backing_up'] = 'Zálohovanie inštalácie';
$l['no_space'] = 'Nemáte dostatočný úložný priestor pre aktualizáciu tejto inštalácie !';
$l['invalid_insid'] = 'Invalid Installation ID';
$l['invalid_script'] = 'Invalid Script ID';
$l['no_upgrade_support'] = 'Upgrade is not supported for this script';

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
$l['upgrade_notes'] = 'Nasledujú dôležité upozornenia. Dôrazne odporúčame, aby ste si ich prečítali';
$l['please_note'] = '<b>UPOZORNENIE</b>: '.APP.' je iba auto inštalátor a neposkytuje žiadnu podporu pre softvér. Prosím, navštívte stránku poskytovateľa softvéru pre podporu!';
$l['regards'] = 'S pozdravom';
$l['softinstaller'] = APP.' Auto inštalátor';
$l['return'] = 'Spať na prehľad';
$l['note_backup'] = 'Je odporúčané, aby ste vykonali <a href="'.$globals['index'].'act=backup&insid=&soft-1;">zálohu</a> inštalácie pred aktualizáciou.';
$l['alreadyupdated'] = 'Hmm ... vyzerá to, že skutočná verzia inštalácie je <b>&soft-1;</b> a nie <b>&soft-2;</b>. <br />Kliknite sem pre aktualizovanie záznamov '.APP.'.';
$l['no_update_required'] = 'Vyzerá to, že nepotrebujete aktualizovať inštaláciu, pretože je v aktuálnej verzii';
$l['auto_backup'] = 'Chcete vykonať zálohu pred aktualizovaním ?';
$l['select_version'] = 'Vyberte si, na ktorú chcete aktualizovať';
$l['upgrading'] = 'Aktualizácia...';
$l['setup_partial'] = 'Ste jeden krok od dokončenia aktualizácie';
$l['finish_update'] = 'Prosím, navštívte odkaz nižšie pre dokončenie procesu aktualizácie.';
$l['finish_up_sucess'] = 'Po dokončení procesu aktualizácie môžete pristupovať k inštalácii &soft-1; tu';
$l['upgrading_to'] = 'Budete aktualizovať na :';
$l['version'] = 'Verzia';
$l['create_backup'] = 'Vytvoriť zálohu';
$l['create_backup_exp'] = 'Vytvoriť zálohu pred aktualizáciou';
$l['prog_upgrading'] = 'Aktualizujem';// Dont remove the trailing space
$l['prog_upgrade_complete'] = 'Aktualizácia dokončená.';

$l['upgrade_tweet_sub'] = 'Zdieľajte so známymi';

$l['not_in_free'] = '<b>&soft-1;</b> nemôže byť aktualizovaná v bezplatnej verzii '.APP.'!';
$l['notify_admin'] = 'Prosím, upozornite vášho správcu servera, aby zakúpil prémiovú verziu '.APP.'!';

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