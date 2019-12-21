<?php

//////////////////////////////////////////////////////////////
//===========================================================
// software_lang.php
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
$l['softdirectory_exists'] = 'Vámi zadaný adresář již existuje! Prosím, zvolte jiné jméno adresáře.';
$l['no_space'] = 'Nemáte dostatek místa pro instalaci tohoto softwaru!';
$l['no_softdb'] = 'Databáze nebyla nahrána.';
$l['database_exists'] = 'Databáze již existuje. Prosím zvolte jiný název.';
$l['databaseuser_exists'] = 'Uživatel databáze již existuje. Prosím zvolte jiné jméno databáze.';
$l['db_name_long'] = 'Jméno databáze nemůže být delší než 7 písmen. Prosím zvolte kratší jméno databáze.';
$l['db_limit_crossed'] = 'Instalace nebyla provedena, protože bylo dosaženo maximálního počtu vytvořených databází.';
$l['no_field'] = 'Pole <b>&soft-1;</b> je povinné a musí být vyplněno.';
$l['error_adddb'] = 'Databáze nemohla být vytvořena';
$l['error_adduser'] = 'Došlo k chybě při přidání uživatele k nové databázi';
$l['no_package'] = 'Instalační balíček nebyl nalezen!';
$l['no_decompress'] = 'Při dekompresi balíčku souborů došlo k chybám.';
$l['mail_new_ins'] = 'Nová instalace &soft-1; byla dokončena. Detaily instalace jsou uvedeny níže:';
$l['mail_path'] = 'Cesta';
$l['mail_url'] = 'URL';
$l['mail_admin_url'] = 'Admin URL';
$l['mail_admin'] = 'Uživatelské jméno administrátora';
$l['mail_pass'] = 'Heslo administrátora';
$l['mail_db'] = 'MySQL databáze';
$l['mail_dbuser'] = 'Uživatel MySQL DB';
$l['mail_dbhost'] = 'MySQL DB server';
$l['mail_dbpass'] = 'Heslo MySQL DB';
$l['mail_time'] = 'Čas instalace';
$l['mail_subject'] = 'Nová instalace &soft-1;';
$l['no_cron_min'] = 'Minuta v Cronu nebyla zadána';
$l['no_cron_hour'] = 'Hodina v Cronu nebyla zadána';
$l['no_cron_day'] = 'Den v Cronu nebyl zadán';
$l['no_cron_month'] = 'Měsíc v Cronu nebyl zadán';
$l['no_cron_weekday'] = 'Den v týdnu v Cronu nebyl zadán';
$l['wrong_cron_min'] = 'Chybná hodnota minuta v Cronu. Platné hodnoty jsou 0-59 nebo <b>*</b>';
$l['wrong_cron_hour'] = 'Chybná hodnota hodina v Cronu. Platné hodnoty jsou 0-23 nebo <b>*</b>';
$l['wrong_cron_day'] = 'Chybná hodnota den v Cronu. Platné hodnoty jsou 1-31 nebo <b>*</b>';
$l['wrong_cron_month'] = 'Chybná hodnota měsíc v Cronu. Platné hodnoty jsou 1-12 nebo <b>*</b>';
$l['wrong_cron_weekday'] = 'Chybná hodnota den v týdnu v Cronu. Platné hodnoty jsou 0-7 nebo  <b>*</b>';
$l['mail_cron'] = 'Úloha CRONu';
$l['no_datadir'] = 'Adresář pro data nebyl zadán';
$l['datadir_exists'] = 'Adresář pro data, který jste zadali, již existuje. Prosím zadejte jiný.';
$l['no_decompress_data'] = 'Došlo k chybám při dekompresi datového souboru.';
$l['mail_datadir'] = 'Adresář pro data';
$l['some_files_exist'] = 'Instalace nemohla být provedena, protože následující soubory již existují v cílové složce:';
$l['delete_files'] = 'Prosím smažte tyto soubory nebo zvolte jinou složku.';
$l['overwrite_exist'] = '<b>NEBO</b><br/><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">Zaškrtněte políčko pro přepsání všech souborů a pokračujte</span></b>';
$l['www_files_exist'] = 'Instalace nemohla být provedena, protože následující soubory již existují v adresáři webu';
$l['no_decompress_www'] = 'Při dekompresi souborů webu došlo k chybám.';
$l['no_config_perl_path'] = 'Došlo k chybě při konfiguraci CGI souborů.';
$l['mail_wwwdir'] = 'Adresář webu';
$l['checking_data'] = 'Kontrola zadaných dat';
$l['unzipping_files'] = 'Kopírování souborů a složek';
$l['unzipping_datadir'] = 'Rozbalování datových souborů';
$l['prop_db'] = 'Rozšiřování databáze';
$l['finishing_process'] = 'Dokončení instalace';
$l['wait_note'] = '<b>POZNÁMKA</b>: Toto může trvat 3-4 minuty. Prosím neopouštějte tuto stránku, dokud nebude dosaženo 100 %.';
$l['softdirectory_invalid'] = 'Adresář, který jste zadali, je neplatný.';
$l['softdatadir_invalid'] = 'Datový adresář, který jste uvedli, je neplatný.';
$l['wwwdir_invalid'] = 'WWW adresář, který jste zadali, je neplatný.';
$l['err_pass_strength'] = 'Síla hesla musí být větší než';
$l['no_https'] = 'Důvěryhodný SSL certifikát nebyl nalezen';
$l['err_dbprefix'] = 'Prefix tabulka je neplatná. Platné hodnoty jsou a-z nebo A-Z nebo 0-9 nebo';
$l['no_perl_install'] = 'PERL není nainstalován. Pro jeho nainstalování klikněte prosím <a href="'.$globals['index'].'act=apps&app=19">zde</a>';
$l['no_mysql_install'] = 'MySQL není instalována. Pro její instalaci prosím klikněte <a href="'.$globals['index'].'act=apps&app=16">zde</a>';
$l['auto_backup_not_allowed'] = 'Frekvence automatické zálohy, kterou jste zvolili, je neplatná';
$l['invalid_script'] = 'Invalid Script ID';
$l['not_perl_script'] = 'This script is not in PERL';

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
$l['in_directory_exp'] = 'Adresář je relativní k vaší doméně a <b>neměl by existovat</b>. Např. chcete-li nainstalovat na adrese http://mydomain/dir/, stačí zadat <b>dir</b>. Chcete-li nainstalovat pouze v http://mydomain/, nechte toto prázdné.';
$l['database_name'] = 'Jméno databáze';
$l['database_name_exp'] = 'Zadejte název databáze, která má být pro instalaci vytvořena';
$l['softcopy_note'] = '<b>POZNÁMKA</b>: Tento software vyžaduje, aby byl nainstalován pomocí vlastního instalačního nástroje. Pro dokončení instalace prosím navštivte URL adresu, která se zobrazí, jakmile se soubory nakopírují.';
$l['softsubmit'] = 'Instalovat';
$l['congrats'] = 'Gratulujeme, software byl úspěšně nainstalován.';
$l['succesful'] = 'byl úspěšně nainstalován na';
$l['admin_url'] = 'Administrativní URL';
$l['setup_continue'] = 'Nastavení bude dokončeno samotným softwarem. Pro dokončení nastavení prosím navštivte následující URL';
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
$l['randpass'] = 'Vytvořit náhodné heslo';
$l['ratesoft'] = 'Ohodnotit tento skript';
$l['reviews'] = 'Hodnocení';
$l['reviewsoft'] = 'Napsat hodnocení';
$l['readreviews'] = 'Číst hodnocení';
$l['reviews_exp'] = 'Číst hodnocení napsaná ostatními uživateli a';
$l['cron_job'] = 'Úloha CRONu';
$l['cron_job_exp'] = 'Tento skript vyžaduje, aby CRON pracoval. Prosím stanovte načasování CRONu. Pokud si nejste jisti, neupravujte!';
$l['cron_min'] = 'Minuta';
$l['cron_hour'] = 'Hodina';
$l['cron_day'] = 'Den';
$l['cron_month'] = 'Měsíc';
$l['cron_weekday'] = 'Pracovní den';
$l['datadir'] = 'Adresář pro data';
$l['datadir_exp'] = 'Tento skript vyžaduje ukládat data ve složce nepřístupné přes web. Bude vytvořena ve vašem domovském adresáři. Tj. zadáte-li <b>datadir</b>, bude vytvořena - /home/username/<b>datadir</b>';
$l['db_alpha_num'] = 'Pro název databáze jsou povolené pouze alfanumerické znaky.';
$l['overwrite'] = 'Přepsat soubory';
$l['ins_emailto'] = 'Detaily instalace zaslat emailem na';
$l['choose_protocol'] = 'Zvolit protokol';
$l['choose_protocol_exp'] = 'Mají-li vaše stránky SSL, pak prosím zvolte HTTPS protokol.';
$l['clone'] = 'Klonovat';
$l['backup'] = 'Zálohovat';
$l['options'] = 'Možnosti';
$l['admin'] = 'Administrátor';
$l['notify_ver'] = 'Upozornit '.$globals['sn'].' na novou verzi';
$l['notifyversion'] = 'Děkujeme za informaci o nové verzi. Podíváme se na to co nejdříve.';
$l['del_insid'] = 'Opravdu chcete odstranit zvolené instalace? Akce je nevratná. \Žádná další potvrzení nebudou vyžadována.';
$l['rem_inst_id'] = 'Odstraňování instalace - ';
$l['no_sel_inst'] = 'Nejsou vybrány žádné instalace k odstranění.';
$l['inst_remvd'] = 'Vybrané instalace byly odstraněny. Stránka bude nyní znovu nahrána!';
$l['remove'] = 'Odebrat';
$l['go'] = 'Jít';
$l['screenshots'] = 'Screenshoty';
$l['downloading'] = 'Stahování balíčku';
$l['installing'] = 'Instalování skriptu';
$l['editdetail'] = 'Upravit detaily';
$l['wwwdir'] = 'Adresář webu';
$l['wwwdir_exp'] = 'Adresář přístupný přes web';
$l['publish'] = 'Publikovat na webu';
$l['release_date'] = 'Datum vydání';
$l['adv_option'] = 'Rozšířené možnosti';
$l['disable_notify_update'] = 'Zablokovat oznámení o aktualizacích';
$l['exp_disable_notify_update'] = 'Zaškrtnete-li tuto volbu, nebudete emailem dostávat upozornění na dostupný update pro tuto instalaci.';
$l['prog_installing'] = 'Instaluji'; // Dont remove trailing space
$l['prog_install_complete'] = 'Instalace dokončena.';
$l['bad'] = 'Špatné';
$l['good'] = 'Dobré';
$l['strong'] = 'Silné';
$l['short'] = 'Krátké';
$l['strength_indicator'] = 'Indikátor síly';

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
$l['related_scripts'] = 'Related Scripts';

$l['soft_ins_exists'] = 'An installation already exists at &soft-1; as per our records. To re-install the application please uninstall the existing installation!';
$l['install_now'] = 'Nainstalovat nyní';
$l['my_apps'] = 'Moje aplikace';

$l['backup_location'] = 'Backup Location';
$l['backup_location_exp'] = 'Choose the backup location to be used while backing up this installation';
$l['default'] = 'Default';
$l['invalid_backup_location'] = 'Backup location submitted does not exist';
$l['local_folder'] = 'Local Folder';

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