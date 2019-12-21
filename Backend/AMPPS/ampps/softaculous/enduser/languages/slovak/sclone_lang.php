<?php

//////////////////////////////////////////////////////////////
//===========================================================
// sclone_lang.php
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
$l['no_info_file'] = 'Súbor INFO.XML nebol nájdený! Prosím, oznámte to správcovi servera.';
$l['incompatible'] = 'Softvér požaduje vyššiu verziu '.APP.'! Prosím, oznámte to správcovi servera.';
$l['no_install'] = 'Súbor INSTALL.XML nebol nájdený! Prosím, oznámte to správcovi servera.';
$l['no_functions'] = 'Súbor CLONE FUNCTIONS nebol nájdený!';
$l['no_clone'] = 'Žiadny klon';
$l['no_softdomain'] = 'Nevybrali ste doménu pre inštaláciu softvéru.';
$l['wrong_softdomain'] = 'Cesta domény, ktorú ste vybrali, nebola nájdená.';
$l['softdirectory_exists'] = 'Priečinok, ktorý ste zadali, už existuje! Prosím, zadajte iný názov priečinku.';
$l['no_space'] = 'Nemáte dostatočný priestor pre inštaláciu tohto softvéru.';
$l['no_softdb'] = 'Databáza nebola poslaná.';
$l['database_exists'] = 'Databáza už existuje. Prosím, vyberte iný názov.';
$l['databaseuser_exists'] = 'Používateľ databázy už existuje. Prosím, vyberte iné meno.';
$l['db_name_long'] = 'Názov databázy nemôže mať viac ako 7 písmen. Prosím, vyberte kratší názov databázy.';
$l['db_limit_crossed'] = 'Bol dosiahnutý najväčší počet databáz, ktorý môžete vytvoriť, takže inštalácia nemôže pokračovať.';
$l['cloning'] = 'Klonovanie inštalácie';
$l['downloading'] = 'Sťahovanie balíčka';
$l['cant_clone_db'] = 'Nebolo možné naklonovať databázu';
$l['fail_create'] = 'Zlyhalo vytvorenie priečinka';
$l['fail_create_datadir'] = 'Zlyhalo vytvorenie priečinka';
$l['cant_clone_dir'] = 'Priečinok nemôže byť klonovaný, pretože je to domovský priečinok.';
$l['cant_connect_mysql'] = 'Nebolo možné sa spojiť s databázou, prosím, skontrolujte Prihlasovacie_Meno/Heslo vašej databázy. V prípade zmeny, prosím, upravte údaje v Softaculous inštalácie pomocou Upraviť Detaily.';
$l['same_ins'] = 'Nie je možné naklonovať inštaláciu do rovnakého umiestenia';
$l['ins_exists'] = 'Vyzerá to, že už máte <b>&soft-1;</b> nainštalovaný na vybrané umiestnenie';
$l['ins_recursive'] = 'Nemôžete naklonovať inštaláciu do podpriečinku pôvodnej inštalácie';
$l['no_clone_support'] = 'Clone is not supported for this script';
$l['invalid_script'] = 'Invalid Script ID';
$l['no_domain_found'] = 'No domain found. Please add a domain to install the script';

$l['no_cron_min'] = 'Žiadna Cron minúta nebola určená';
$l['no_cron_hour'] = 'Žiadna Cron hodina nebola určená';
$l['no_cron_day'] = 'Žiadny Cron deň nebol určený';
$l['no_cron_month'] = 'Žiadny Cron mesiac nebol určený';
$l['no_cron_weekday'] = 'Žiadny Cron deň týždňa nebol určený';
$l['wrong_cron_min'] = 'Cron minúta je nesprávna. Platné hodnoty sú 0-59 alebo <b>*</b>';
$l['wrong_cron_hour'] = 'Cron hodina je nesprávna. Platné hodnoty sú 0-23 alebo <b>*</b>';
$l['wrong_cron_day'] = 'Cron deň je neplatný. Platné hodnoty sú 1-31 alebo <b>*</b>';
$l['wrong_cron_month'] = 'Cron mesiac je nesprávny. Platné hodnoty sú 1-12 alebo <b>*</b>';
$l['wrong_cron_weekday'] = 'Cron deň týždňa je neplatný. Platné hodnoty sú 0-7 alebo <b>*</b>';
$l['no_datadir'] = 'Nebol určený priečinok dát';
$l['datadir_exists'] = 'Zadaný priečinok dát exstuje. Prosím, určite iný.';
$l['no_decompress_data'] = 'Pri rozbaľovaní priečinka dát sa vyskytli chyby.';
$l['some_files_exist'] = 'Inštalácia nemôže pokračovať, pretože v cieľovom priečinku už existujú nasledujúce súbory:';
$l['delete_files'] = 'Prosím, odstráňte tieto súbory, alebo zvoľte iný priečinok.';
$l['overwrite_exist'] = '<b>ALEBO</b><br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">Označte políčko pre prepísanie všetkých súborov a pokračovanie</span></b>';
$l['prog_cloning'] = 'Klonovanie'; // Dont remove trailing space
$l['prog_cloning_complete'] = 'Klonovanie dokončené.';
$l['checking_data'] = 'Kontrola zadaných údajov';
$l['unzipping_files'] = 'Kopírovanie súborov a priečinkov';
$l['unzipping_datadir'] = 'Rozbaľovanie súborov dát';
$l['prop_db'] = 'Propagovanie databázy';
$l['finishing_process'] = 'Dokončujem klonovanie';
$l['wait_note'] = '<b>UPOZORNENIE:</b> Toto môže trvať 3-4 minúty. Prosím, neopúšťajte stránku, pokým ukazovateľ nedosiahne 100%';
$l['no_hostname'] = 'Prosím, zadajte hostname vašej databázy';
$l['no_dbusername'] = 'Prosím, zadajte používateľské meno pre vašu databázu';
$l['no_dbuserpass'] = 'Prosím, zadajte heslo pre vašu databázu';
$l['softdirectory_invalid'] = 'Priečinok , ktorý ste zadali, je neplatný.';
$l['softdatadir_invalid'] = 'Dátový priečinok, ktorý ste zadali je neplatný.';
$l['err_domain'] = 'Žiadna doména';
$l['err_domain_admin'] = 'Tento používateľ nemá doménu. Prosím, kontaktujte správcu.';
$l['no_https'] = 'Dôveryhodný SSL certifikát nebol nájdený';
$l['no_php_install'] = 'PHP nie je nainštalované. Pre inštaláciu, prosím, kliknite <a href="'.$globals['index'].'act=apps&app=1">sem</a>';
$l['no_mysql_install'] = 'MySQL nie je  nainštalované. Pre jeho inštaláciu, prosím, kliknite <a href="'.$globals['index'].'act=apps&app=16">sem</a>';
$l['no_field'] = 'Políčko <b>&soft-1;</b> je požadované a musí byť vyplnené.';
$l['error_adddb'] = 'Databáza nemohla byť vytvorená';
$l['error_adduser'] = 'Pri pridávaní používateľa do databázy sa vyskytla chyba';
$l['no_package'] = 'Inštalačný balíček nebol nájdený !';
$l['no_decompress'] = 'Pri dekompresii súborov balíčka sa vyskytli chyby.';

//Theme Strings
$l['<title>'] = APP.' - Clone Installation';
$l['info'] = 'Informácie';
$l['ins_softname'] = 'Softvér';
$l['ins_num'] = 'Číslo inštalácie';
$l['ins_ver'] = 'Verzia';
$l['ins_time'] = 'Čas inštalácie';
$l['ins_path'] = 'Cesta';
$l['ins_url'] = 'URL';
$l['ins_admin_url'] = 'URL správcu';
$l['ins_db'] = 'Názov databázy';
$l['ins_dbuser'] = 'Používateľ databázy';
$l['ins_dbpass'] = 'Heslo databázy';
$l['ins_dbhost'] = 'Host databázy';
$l['ins_datadir'] = 'Priečinok dát';
$l['ins_wwwdir'] = 'Webový priečinok';
$l['ins_wwwurl'] = 'URL priečinka Web';
$l['ins_cron_command'] = 'Cron príkaz';
$l['cloned'] = 'Inštalácia bola úspešne naklonovaná';
$l['clone_ins'] = 'Klonovať detaily inštalácie';
$l['cloneins'] = 'Naklonovať inštaláciu';
$l['choose_protocol'] = 'Vybrať protokol';
$l['choose_protocol_exp'] = 'Ak vaša stránka používa SSL, tak, prosím, zvoľte protokol HTTPS.';
$l['cron_job'] = 'CRON úloha';
$l['cron_job_exp'] = 'Skript vyžaduje CRON, aby fungoval. Prosím, určite časovanie CRONu. Ak ste si nie istý, nechajte to, ako to je!';
$l['cron_min'] = 'Min';
$l['cron_hour'] = 'Hodina';
$l['cron_day'] = 'Deň';
$l['cron_month'] = 'Mesiac';
$l['cron_weekday'] = 'Deň týždňa';
$l['datadir'] = 'Priečinok dát';
$l['datadir_exp'] = 'Skript vyžaduje, aby jeho dáta boli uložené v priečinku nedosiahnuteľnom z internetu. Bude vytvorený vo vašom domovskom adresári. napr. ak určíte <b>dátový priečinok</b> bude vatvorené nasledovné - /home/používateľskémeno/<b>dátový priečinok</b>';
$l['db_name_long'] = 'Názov databázy nemôže mať viac ako 7 písmen. Prosím, vyberte kratší názov databázy.';
$l['db_alpha_num'] = 'Pre názov databázy sú povolené len alfa-numerické znaky.';
$l['overwrite'] = 'Prepísať súbory';
$l['database_exists'] = 'Databáza už existuje. Prosím, vyberte iný názov.';
$l['no_softdomain'] = 'Nevybrali ste doménu pre inštaláciu softvéru.';
$l['wrong_softdomain'] = 'Cesta domény, ktorú ste vybrali, nebola nájdená.';
$l['no_space'] = 'Nemáte dostatočný priestor pre inštaláciu tohto softvéru.';
$l['no_softdb'] = 'Databáza nebola poslaná.';
$l['choose_domain'] = 'Vybrať doménu';
$l['choose_domain_exp'] = 'Prosím, vyberte doménu pre inštaláciu softvéru.';
$l['in_directory'] = 'V priečinku';
$l['in_directory_exp'] = 'Priečinok je relatívny k vašej doméne a <b>nemá existovať</b>. napr. Pre inštaláciu do http://mojadomena/priecinok napíšte iba <b>priecinok</b>. Pre inštaláciu iba do http://mojadomena/ toto ponechajte prázdne.';
$l['database_name'] = 'Názov databázy';
$l['database_name_exp'] = 'Zadajte názov databázy vytvorenej pre inštaláciu';
$l['softcopy_note'] = '<b>UPOZORNENIE</b>: Tento softvér vyžaduje, aby bol nainštalovaný pomocou vlastného inštalačného nástroja. Prosím, navštívte URL, ktorá bude zobrazená, keď budú súbory skopírované, pre dokončenie inštalačného procesu.';
$l['softsubmit'] = 'Klonovať';
$l['congrats'] = 'Gratulujeme, inštalácia bola úspešne naklonovaná';
$l['succesful'] = 'bola úspešne naklonovaná do';
$l['admin_url'] = 'Administratívne URL';
$l['setup_continue'] = 'Avšak, Inštalácia bude dokončená samotným softvérom. Pre dokončenie inštalácie, prosím, prejdite na nasledujúcu URL';
$l['enjoy'] = 'Dúfame, že proces inštalácie bol jednoduchý.';
$l['install_notes'] = 'Nasledujú dôležité poznámky. Je dôrazne doporučované prečítať si ich';
$l['please_note'] = '<b>UPOZORNENIE</b>: '.APP.' je iba automatický inštalátor a neposkytuje žiadnu podporu pre individuálne softvérové balíčky. Prosím, navštívte stránku poskytovateľa softvéru pre podporu!';
$l['regards'] = 'S pozdravom';
$l['softinstaller'] = APP.' Auto inštalátor';
$l['return'] = 'Spať na prehľad';

// These strings are for Softaculous Remote
$l['hostname'] = 'Hostname databázy';
$l['hostname_exp'] = 'Hostname MySQL (zväčša <b>localhost</b>)';
$l['dbusername'] = 'Požívateľské meno databázy';
$l['dbusername_exp'] = 'Používateľské meno MySQL';
$l['dbuserpass'] = 'Heslo databázy';
$l['dbuserpass_exp'] = 'Heslo používateľa MySQL';
$l['database_name_exp_aefer'] = 'Zadajte názov databázy použitej pre inštaláciu';

$l['clone_tweet_sub'] = 'Zdieľajte so známymi';
$l['not_in_free'] = '<b>&soft-1;</b> nemôže byť naklonovaný v bezplatnej verzii '.APP.'!';
$l['notify_admin'] = 'Prosím, upozornite vášho správcu servera, aby zakúpil prémiovú verziu '.APP.'!';

$l['soft_ins_exists'] = 'An installation already exists at &soft-1; as per our records. To clone the application at this location please uninstall the existing installation!';

$l['no_sclone'] = 'The CLONE.XML file could not be found! Please report this to the server administrator.';
$l['no_functions'] = 'The CLONE FUNCTIONS file could not be found! Please report this to the server administrator.';

$l['clone_push_bg'] = 'Clone has been pushed in background';
$l['err_mysql_db'] = 'The MySQL database name is incorrect as the database could not be selected.';

$l['error_max_clone_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Clone allowed per script';

$l['choose_url'] = 'Choose Installation URL';
$l['choose_url_exp'] = 'Please choose the URL to install the software';

$l['ampps_notify_premium'] = 'This feature is available in the premium version of AMPPS. Please purchase <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';