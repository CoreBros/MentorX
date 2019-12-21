<?php

//////////////////////////////////////////////////////////////
//===========================================================
// js_lang.php
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

$l['no_info_file'] = 'Žiadna trieda pre zadané ID';
$l['incompatible'] = 'Softvér požaduje vyššiu verziu '.APP.'! Prosím, oznámte to správcovi servera.';
$l['no_install'] = 'Súbor INSTALL.XML nebol nájdený! Prosím, oznámte to správcovi servera.';
$l['no_functions'] = 'Súbor INSTALL FUNCTIONS nebol nájdený ! Prosím, oznámte to správcovi servera.';
$l['no_softdomain'] = 'Nevybrali ste doménu pre inštaláciu softvéru.';
$l['wrong_softdomain'] = 'Cesta domény, ktorú ste vybrali, nebola nájdená.';
$l['no_space'] = 'Nemáte dostatočný priestor pre inštaláciu tohto softvéru.';
$l['no_field'] = 'Políčko <b>&soft-1;</b> je požadované a musí byť vyplnené.';
$l['no_package'] = 'Inštalačný balíček nebol nájdený !';
$l['no_decompress'] = 'Pri dekompresii súborov balíčka sa vyskytli chyby.';
$l['mail_new_ins'] = 'Nová inštalácia &soft-1; bola dokončená. Detaily inštalácie sú zobrazené nižšie:';
$l['mail_path'] = 'Cesta';
$l['mail_url'] = 'URL';
$l['mail_time'] = 'Čas inštalácie';
$l['mail_subject'] = 'Nová inštalácia &soft-1;';
$l['some_files_exist'] = 'Inštalácia nemôže pokračovať, pretože v cieľovom priečinku už existujú nasledujúce súbory:';
$l['delete_files'] = 'Prosím, odstráňte tieto súbory, alebo zvoľte iný priečinok.';
$l['checking_data'] = 'Kontrola zadaných údajov';
$l['unzipping_files'] = 'Kopírovanie súborov a priečinkov';
$l['unzipping_datadir'] = 'Rozbaľovanie súborov dát';
$l['prop_db'] = 'Propagovanie databázy';
$l['finishing_process'] = 'Dokončovanie inštalácie';
$l['wait_note'] = '<b>UPOZORNENIE:</b> Toto môže trvať 3-4 minúty. Prosím, neopúšťajte stránku, pokým ukazovateľ nedosiahne 100%';
$l['cant_download'] = 'Nebolo možné stiahnuť ZIP súbor.';
$l['softdirectory_invalid'] = 'Priečinok , ktorý ste zadali, je neplatný.';
$l['softdirectory_exists'] = 'Priečinok, ktorý ste zadali, už existuje! Prosím, zadajte iný názov priečinku.';
$l['ins_emailto'] = 'Zaslať detaily inštalácie emailom na';
$l['disable_classes'] = 'PHP Classes are disabled by admin or you are using '.APP.' Free version';
$l['invalid_class_id'] = 'Invalid Class ID';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['install'] = 'Inštalovať';
$l['overview'] = 'Súbor README';
$l['features'] = 'Funkcionality';
$l['demo'] = 'Ukážka';
$l['file'] = 'Súbory';
$l['ratings'] = 'Hodnotenia';
$l['import'] = 'Import';
$l['software_ver'] = 'Verzia';
$l['space_req'] = 'Požadované miesto';
$l['available_space'] = 'Dostupné miesto';
$l['req_space'] = 'Požadované miesto';
$l['mb'] = 'MB';
$l['software_support'] = 'Softvérová podpora';
$l['support_link'] = 'Navštíviť stránku podpory';
$l['support_note'] = 'Poznámky: Softaculous neposkytuje podporu pre žiadny softvér.';
$l['setup'] = 'Nastavenia softvéru';
$l['choose_domain'] = 'Vybrať doménu';
$l['choose_domain_exp'] = 'Prosím, vyberte doménu pre inštaláciu softvéru.';
$l['in_directory'] = 'V priečinku';
$l['in_directory_exp'] = 'Priečinok je relatívny k vašej domovskej ceste a bude <b>vytvorený ak neexistuje</b>. napr. Pre inštaláciu na &soft-1;/priečinok len zadajte <b>priečinok</b>. Pre inštaláciu len do &soft-1; ponechajte políčko prázdne.';
$l['aef_in_directory_exp'] = 'Priečinok je relatívny k vašej domovskej ceste a bude <b>vytvorený ak neexistuje</b>. napr. Pre inštaláciu na <span id=\“aef_span_lang\“>&soft-1;</span>/priečinok len zadajte <b>priečinok</b>. Pre inštaláciu len do <span id=\“aef_span_lang_a\“>&soft-1;</span> ponechajte políčko prázdne.';
$l['softsubmit'] = 'Inštalovať';
$l['congrats'] = 'Gratulujeme, softvér bol úspešne nainštalovaný';
$l['succesful'] = 'bol úspešne nainštalovaný do';
$l['enjoy'] = 'Dúfame, že proces inštalácie bol jednoduchý.';
$l['install_notes'] = 'Nasledujú dôležité poznámky. Je dôrazne doporučované prečítať si ich';
$l['please_note'] = '<b>UPOZORNENIE</b>: '.APP.' je iba automatický inštalátor a neposkytuje žiadnu podporu pre individuálne softvérové balíčky. Prosím, navštívte stránku poskytovateľa softvéru pre podporu!';
$l['regards'] = 'S pozdravom';
$l['softinstaller'] = APP.' Auto inštalátor';
$l['return'] = 'Spať na prehľad';
$l['current_ins'] = 'Súčasné inštalácie';
$l['link'] = 'Spojenie';
$l['ins_time'] = 'Čas inštalácie';
$l['version'] = 'Verzia';
$l['upd_to'] = 'Aktualizovať na verziu';
$l['remove'] = 'Odstrániť';
$l['no_info'] = 'Žiadne info';
$l['ratesoft'] = 'Ohodnoťte tento skript';
$l['reviews'] = 'Hodnotenia';
$l['reviewsoft'] = 'Napísať hodnotenie';
$l['readreviews'] = 'Čítať hodnotenia';
$l['reviews_exp'] = 'Čítať hodnotenia od ostatných používateľov a';
$l['ins_type'] = 'Druh inštalácie';
$l['ins_type_exp'] = '<b>Originálny Balíček</b> - Balíček je ako dostupný na stránke so skriptami. <br /><b>Iba súbory knižnice</b> - iba súbory Javascript knižnice.';
$l['ori_pack'] = 'Originálny balíček';
$l['just_lib'] = 'Iba súbory knižnice';
$l['overwrite_exist'] = '<b>ALEBO</b><br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">Označte políčko pre prepísanie všetkých súborov a pokračovanie</span></b>';
$l['overwrite'] = 'Prepísať súbory';
$l['choose_protocol'] = 'Vybrať protokol';
$l['choose_protocol_exp'] = 'Ak vaša stránka používa SSL, tak, prosím, zvoľte protokol HTTPS.';
$l['downloading'] = 'Sťahovanie balíčka';
$l['installing'] = 'Inštalovanie skriptu';
$l['files'] = 'Súbory & priečinky';
$l['modified_time'] = 'Posledné upravené';
$l['size'] = 'Veľkosť';
$l['classes_ins_error'] = 'Pri ukladaní sa vyskytla chyba.';
$l['del_insid'] = 'Ste si istý, chcete odstrániť označenú inštaláciu? Úkon bude nezvratný. \nNebudete vyzvaný k ďalšiemu potvrdeniu!';
$l['rem_inst_id'] = 'Odstraňovanie inštalácie -';
$l['no_sel_inst'] = 'Nie sú označená(/-)é inštalácia(/-e) pre odstránenie.';
$l['inst_remvd'] = 'Označená inštalácia(/-e) bola(/-i) odstránená(/-é). Stránka bude obnovená !';
$l['go'] = 'Ísť';
$l['download_zip'] = 'Stiahnuť všetky súbory';
$l['software_category'] = 'Kategória';
$l['adv_option'] = 'Rozšírené možnosti';
$l['disable_notify_update'] = 'Zakázať upozornenia na nové verzie.';
$l['exp_disable_notify_update'] = 'Ak zaškrtnuté, nebude dostávať upozornenia na nové verzie pre túto inštaláciu emailom.';
$l['prog_installing'] = 'Inštalácia';// Dont remove the trailing space
$l['prog_install_complete'] = 'Inštalácia dokončená.';

$l['install_tweet_sub'] = 'Zdieľajte so známymi';
$l['select_domain'] = 'Vybrať doménu';
$l['with_selected'] = 'S označenými';
$l['download'] = 'Download';

