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

$l['no_info_file'] = 'Soubor INFO.XML nenalezen! Prosím oznamte to správci serveru.';
$l['incompatible'] = 'Software vyžaduje vyšší verzi ".APP."! Prosím oznamte to správci serveru.';
$l['no_install'] = 'Soubor INSTALL.XML nelze nalézt! Prosím oznamte to správci serveru.';
$l['no_functions'] = 'Soubor INSTALL FUNCTIONS nelze nalézt. Prosím oznamte to správci serveru.';
$l['no_softdomain'] = 'Nevybral jste doménu pro instalaci softwaru.';
$l['wrong_softdomain'] = 'Vybranou cestu domény nelze nalézt.';
$l['no_space'] = 'Nemáte dostatek místa pro instalaci tohoto softwaru!';
$l['no_field'] = 'Pole <b>&soft-1;</b> je povinné a musí být vyplněno.';
$l['no_package'] = 'Instalační balíček nebyl nalezen!';
$l['no_decompress'] = 'Při dekompresi balíčku souborů došlo k chybám.';
$l['mail_new_ins'] = 'Nová instalace &soft-1; byla dokončena. Detaily instalace jsou uvedeny níže:';
$l['mail_path'] = 'Cesta';
$l['mail_url'] = 'URL';
$l['mail_time'] = 'Čas instalace';
$l['mail_subject'] = 'Nová instalace &soft-1;';
$l['some_files_exist'] = 'Instalace nemohla být provedena, protože následující soubory již existují v cílové složce:';
$l['delete_files'] = 'Prosím smažte tyto soubory nebo zvolte jinou složku.';
$l['checking_data'] = 'Kontrola zadaných dat';
$l['unzipping_files'] = 'Kopírování souborů a složek';
$l['unzipping_datadir'] = 'Rozbalování datových souborů';
$l['prop_db'] = 'Rozšiřování databáze';
$l['finishing_process'] = 'Dokončení instalace';
$l['wait_note'] = '<b>POZNÁMKA</b>: Toto může trvat 3-4 minuty. Prosím neopouštějte tuto stránku, dokud nebude dosaženo 100 %.';
$l['softdirectory_invalid'] = 'Adresář, který jste zadali, je neplatný.';
$l['err_domain'] = 'No Domain';
$l['err_domain_admin'] = 'This User does not have any Domain. Please contact Administrator.';
$l['no_sel_inst'] = 'Žádné vybrané instalace';
$l['del_insid'] = 'Opravdu chcete smazat zvolené instalace?';
$l['ins_emailto'] = 'Detaily instalace zaslat emailem na';
$l['no_https'] = 'Důvěryhodný SSL certifikát nebyl nalezen';
$l['err_dbprefix'] = 'Prefix tabulka je neplatná. Platné hodnoty jsou a-z nebo A-Z nebo 0-9 nebo';
$l['auto_backup_not_allowed'] = 'Frekvence automatické zálohy, kterou jste zvolili, je neplatná';
$l['invalid_script'] = 'Invalid Script ID';
$l['not_js_script'] = 'This script is not JavaScript';
$l['no_domain_found'] = 'No domain found. Please add a domain to install the script';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['install'] = 'Instalovat';
$l['overview'] = 'Přehled';
$l['features'] = 'Vlastnosti';
$l['demo'] = 'Demo';
$l['ratings'] = 'Hodnocení';
$l['import'] = 'Importovat';
$l['software_ver'] = 'Verze';
$l['space_req'] = 'Potřebný prostor';
$l['available_space'] = 'Dostupný prostor';
$l['req_space'] = 'Požadovaný prostor';
$l['mb'] = 'MB';
$l['software_support'] = 'Podpora softwaru';
$l['support_link'] = 'Navštívit stránky podpory';
$l['support_note'] = 'Poznámka: Softaculous neposkytuje podporu pro žádný software.';
$l['setup'] = 'Nastavení softwaru';
$l['choose_domain'] = 'Zvolit doménu';
$l['choose_domain_exp'] = 'Prosím zvolte doménu pro instalaci softwaru.';
$l['in_directory'] = 'V adresáři';
$l['in_directory_exp'] = 'Adresář je relativní k vaší doméně a bude <b>vytvořen, pokud neexistuje</b>. Např. chcete-li nainstalovat na adrese http://mydomain/dir/, stačí zadat <b>dir</b>. Chcete-li instalovat pouze v http://mydomain/, ponechte toto prázdné.';
$l['softsubmit'] = 'Instalovat';
$l['congrats'] = 'Gratulujeme, software byl úspěšně nainstalován.';
$l['succesful'] = 'byl úspěšně nainstalován na';
$l['enjoy'] = 'Doufáme, že proces instalace byl snadný.';
$l['install_notes'] = 'Níže jsou uvedeny některé důležité poznámky. Doporučujeme si je přečíst.';
$l['please_note'] = '<b>POZNÁMKA</b>: '.APP.' je jen automatický instalátor softwaru a neposkytuje žádnou podporu pro jednotlivé softwarové balíčky. Kvůli podpoře navštivte prosím stránky prodejce softwaru.';
$l['regards'] = 'S pozdravem';
$l['softinstaller'] = APP.' auto instalátor';
$l['return'] = 'Zpět na Přehled';
$l['current_ins'] = 'Aktuální instalace';
$l['link'] = 'Odkaz';
$l['ins_time'] = 'Čas instalace';
$l['version'] = 'Verze';
$l['upd_to'] = 'Upgrade na verzi';
$l['remove'] = 'Odebrat';
$l['no_info'] = 'Žádné informace';
$l['ratesoft'] = 'Ohodnotit tento skript';
$l['reviews'] = 'Hodnocení';
$l['reviewsoft'] = 'Napsat hodnocení';
$l['readreviews'] = 'Číst hodnocení';
$l['reviews_exp'] = 'Číst hodnocení napsaná ostatními uživateli a';
$l['ins_type'] = 'Typ instalace';
$l['ins_type_exp'] = '<b>Originální balíček</b> - Balíček dostupný ze skriptů webové stránky.<br/><b>Pouze soubory knihovny</b> - Pouze soubory Javascript knihovny.';
$l['ori_pack'] = 'Originální balíček';
$l['just_lib'] = 'Pouze soubory knihovny';
$l['overwrite_exist'] = '<b>NEBO</b><br/><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">Zaškrtněte políčko pro přepsání všech souborů a pokračujte</span></b>';
$l['overwrite'] = 'Přepsat soubory';
$l['choose_protocol'] = 'Zvolit protokol';
$l['choose_protocol_exp'] = 'Mají-li vaše stránky SSL, pak prosím zvolte HTTPS protokol.';
$l['clone'] = 'Klonovat';
$l['options'] = 'Možnosti';
$l['downloading'] = 'Stahování balíčku';
$l['installing'] = 'Instalování skriptu';
$l['go'] = 'Jít';
$l['rem_inst_id'] = 'Odstraňování instalace - ';
$l['inst_remvd'] = 'Vybrané instalace byly odstraněny. Stránka bude nyní znovu nahrána!';
$l['release_date'] = 'Datum vydání';
$l['adv_option'] = 'Rozšířené možnosti';
$l['disable_notify_update'] = 'Zablokovat oznámení o aktualizacích';
$l['exp_disable_notify_update'] = 'Zaškrtnete-li tuto volbu, nebudete emailem dostávat upozornění na dostupný update pro tuto instalaci.';
$l['prog_installing'] = 'Instaluji'; // Dont remove trailing space
$l['prog_install_complete'] = 'Instalace dokončena.';

$l['auto_backup'] = 'Automatizované zálohy';
$l['exp_auto_backup'] = APP.' will take automated backups via CRON as per the frequency you select';
$l['auto_backup_rotation'] = 'Rotace záloh';
$l['exp_auto_backup_rotation'] = 'Je-li dosažen limit rotace záloh, '.APP.' smaže nejstarší zálohu pro tuto instalaci a vytvoří novou zálohu. Zálohy budou využívat váš prostor, proto zvolte rotaci záloh dle dostupného prostoru na vašem serveru';
$l['no_backup'] = 'Nezálohovat';
$l['daily'] = 'Jednou denně';
$l['weekly'] = 'Jednou týdně';
$l['monthly'] = 'Jednou měsíčně';
$l['unlimited'] = 'Neomezeně';
$l['changelog'] = 'Log změn';
$l['act_upgrade'] = 'Nedávno aktualizované';
$l['act_clone'] = 'Nedávno klonované';
$l['act_backup'] = 'Nedávno zálohované';
$l['act_install'] = 'Nedávno nainstalované';
$l['act_edit'] = 'Nedávno upravené';
$l['act_import'] = 'Nedávno naimportované';
$l['act_restore'] = 'Nedávno obnovené';
$l['ampps_download'] = 'Můžete vyvíjet <b>&soft-1;</b> na vaší <b>ploše</b> pomocí našeho bezplatného vývojářského nástroje Softaculous AMPPS. Klikněte <a href="http://www.ampps.com/download?give=latest" target="_blank"><b>zde</b></a> pro stažení <a href="http://www.ampps.com/download?give=latest" target="_blank"><img src="https://images.softaculous.com/ampps.gif" height="25" /></a>';

$l['install_tweet_sub'] = 'Řekněte svým přátelům o svých nových stránkách';
$l['err_auto_backup_limit'] = 'Automatická rotace záloh nemůže být více než <b>&soft-1;</b>';
$l['select_domain'] = 'Zvolit doménu';
$l['with_selected'] = 'S vybranými';
$l['not_in_free'] = '<b>&soft-1;</b> nemůže být nainstalován v bezplatné verzi '.APP.'!';
$l['notify_admin'] = 'Prosím upozorněte svého správce serveru, aby zakoupil prémiovou verzi '.APP.'! ';
$l['related_scripts'] = 'Související skripty';
$l['backup'] = 'Backup';
$l['editdetail'] = 'Edit Details';
$l['install_now'] = 'Nainstalovat nyní';
$l['my_apps'] = 'Moje aplikace';

$l['bad'] = 'Bad';
$l['good'] = 'Good';
$l['strong'] = 'Strong';
$l['short'] = 'Short';
$l['strength_indicator'] = 'Strength Indicator';

$l['backup_location'] = 'Backup Location';
$l['backup_location_exp'] = 'Choose the backup location to be used while backing up this installation';
$l['default'] = 'Default';
$l['invalid_backup_location'] = 'Backup location submitted does not exist';
$l['local_folder'] = 'Local Folder';

$l['no_cron_min'] = 'No Cron minute was specified';
$l['no_cron_hour'] = 'No Cron hour was specified';
$l['no_cron_day'] = 'No Cron day was specified';
$l['no_cron_month'] = 'No Cron month was specified';
$l['no_cron_weekday'] = 'No Cron weekday was specified';

$l['custom_autobackup'] = 'Custom';
$l['custom_autobackup_cron'] = 'Automated Backups Cron time';
$l['custom_autobackup_cron_exp'] = 'Please specify the CRON timings for automated backups';

//Errors for autobcakup cron settings
$l['wrong_autobackup_cron_min'] = 'Automated Backup cron minute is wrong. Valid values are 0-59 or a *';
$l['wrong_autobackup_cron_hour'] = 'Automated Backup cron hour is wrong. Valid values are 0-23 or a *';
$l['wrong_autobackup_cron_day'] = 'Automated Backup cron day is wrong. Valid values are 1-31 or a *';
$l['wrong_autobackup_cron_month'] = 'Automated Backup cron month is wrong. Valid values are 1-12 or a *';
$l['wrong_autobackup_cron_weekday'] = 'Automated Backup cron weekday is wrong. Valid values are 0-7 or a *';

$l['quick_install'] = 'Quick Install';
$l['custom_install'] = 'Custom Install';

$l['outdated_script'] = '<b>&soft-1;</b> has not been updated for more than two years and may no longer be maintained or supported by the script vendor';
$l['ampps_notify_premium'] = 'This feature is available in the premium version of AMPPS. Please purchase <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';

$l['choose_url'] = 'Choose Installation URL';
$l['choose_url_exp'] = 'Please choose the URL to install the software';

$l['error_max_ins_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Installations allowed per script';
$l['notify_ver'] = 'Notify '.$globals['sn'].' of a new Version';
$l['notifyversion'] = 'Thank you for informing about the new version. We will look into it as soon as possible';