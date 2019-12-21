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

$l['no_ins'] = 'Instalace nebyla zadána';
$l['wrong_ins_title'] = 'Špatné instalační ID';
$l['wrong_ins'] = 'Instalační ID, které bylo zadáno, neexistuje';
$l['no_info_file'] = 'Soubor INFO.XML nenalezen! Prosím oznamte to správci serveru.';
$l['incompatible'] = 'Software vyžaduje vyšší verzi ".APP."! Prosím oznamte to správci serveru.';
$l['no_install'] = 'Soubor INSTALL.XML nelze nalézt! Prosím oznamte to správci serveru.';
$l['no_functions'] = 'Soubor CLONE FUNCTIONS nelze nalézt!';
$l['no_clone'] = 'Žádný klon';
$l['no_softdomain'] = 'Nevybral jste doménu pro instalaci softwaru.';
$l['wrong_softdomain'] = 'Vybranou cestu domény nelze nalézt.';
$l['softdirectory_exists'] = 'Vámi zadaný adresář již existuje! Prosím, zvolte jiné jméno adresáře.';
$l['no_space'] = 'Nemáte dostatek místa pro instalaci tohoto softwaru!';
$l['no_softdb'] = 'Databáze nebyla nahrána.';
$l['database_exists'] = 'Databáze již existuje. Prosím zvolte jiný název.';
$l['databaseuser_exists'] = 'Uživatel databáze již existuje. Prosím zvolte jiné jméno databáze.';
$l['db_name_long'] = 'Jméno databáze nemůže být delší než 7 písmen. Prosím zvolte kratší jméno databáze.';
$l['db_limit_crossed'] = 'Instalace nebyla provedena, protože bylo dosaženo maximálního počtu vytvořených databází.';
$l['cloning'] = 'Klonování instalace';
$l['downloading'] = 'Stahování balíčku';
$l['cant_clone_db'] = 'Nelze naklonovat databázi';
$l['fail_create'] = 'Adresář se nepodařilo vytvořit';
$l['fail_create_datadir'] = 'Adresář pro data se nepodařilo vytvořit';
$l['cant_clone_dir'] = 'Domovský adresář nemůže být naklonován.';
$l['cant_connect_mysql'] = 'Nelze se připojit k databázi, prosím ověřte uživatelské jméno/heslo vaší databáze. Došlo-li ke změně, prosím aktualizujte detaily v instalaci Softaculous pomocí sekce Upravit detaily.';
$l['same_ins'] = 'Není možné klonovat instalaci do stejného místa';
$l['ins_exists'] = 'Vypadá to, že jste <b>&soft-1;<\b> již instalovali do zvoleného místa.';
$l['ins_recursive'] = 'Nemůžete klonovat instalaci do podadresáře původní instalace';
$l['no_clone_support'] = 'Clone is not supported for this script';
$l['invalid_script'] = 'Invalid Script ID';
$l['no_domain_found'] = 'No domain found. Please add a domain to install the script';

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
$l['no_datadir'] = 'Adresář pro data nebyl zadán';
$l['datadir_exists'] = 'Adresář pro data, který jste zadali, již existuje. Prosím zadejte jiný.';
$l['no_decompress_data'] = 'Došlo k chybám při dekompresi datového souboru.';
$l['some_files_exist'] = 'Instalace nemohla být provedena, protože následující soubory již existují v cílové složce:';
$l['delete_files'] = 'Prosím smažte tyto soubory nebo zvolte jinou složku.';
$l['overwrite_exist'] = '<b>NEBO</b><br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">Zaškrtněte políčko pro přepsání všech souborů a pokračujte</span></b>';
$l['prog_cloning'] = 'Klonování'; // Dont remove trailing space
$l['prog_cloning_complete'] = 'Klonování dokončeno.';
$l['checking_data'] = 'Kontrola zadaných dat';
$l['unzipping_files'] = 'Kopírování souborů a složek';
$l['unzipping_datadir'] = 'Rozbalování datových souborů';
$l['prop_db'] = 'Rozšiřování databáze';
$l['finishing_process'] = 'Dokončování klonování';
$l['wait_note'] = '<b>POZNÁMKA</b>: Toto může trvat 3-4 minuty. Prosím neopouštějte tuto stránku, dokud nebude dosaženo 100 %.';
$l['no_hostname'] = 'Prosím zadejte jméno databázového serveru';
$l['no_dbusername'] = 'Prosím zadejte uživatelské jméno databáze';
$l['no_dbuserpass'] = 'Prosím zadejte heslo databáze';
$l['softdirectory_invalid'] = 'Adresář, který jste zadali, je neplatný.';
$l['softdatadir_invalid'] = 'Datový adresář, který jste uvedli, je neplatný.';
$l['err_domain'] = 'Žádná doména';
$l['err_domain_admin'] = 'Tento uživatel nemá žádnou doménu. Kontaktujte, prosím, správce.';
$l['no_https'] = 'Důvěryhodný SSL certifikát nebyl nalezen';
$l['no_php_install'] = 'PHP není nainstalováno. Pro jeho instalaci klikněte <a href="'.$globals['index'].'act=apps&app=1">zde</a>';
$l['no_mysql_install'] = 'MySQL není instalována. Pro její instalaci prosím klikněte <a href="'.$globals['index'].'act=apps&app=16">zde</a>';
$l['no_field'] = 'Pole <b>&soft-1;</b> je povinné a musí být vyplněno.';
$l['error_adddb'] = 'Databáze nemohla být vytvořena';
$l['error_adduser'] = 'Došlo k chybě při přidání uživatele k nové databázi';
$l['no_package'] = 'Instalační balíček nebyl nalezen!';
$l['no_decompress'] = 'Při dekompresi balíčku souborů došlo k chybám.';

//Theme Strings
$l['<title>'] = APP.' - Clone Installation';
$l['info'] = 'Informace';
$l['ins_softname'] = 'Software';
$l['ins_num'] = 'Číslo instalace';
$l['ins_ver'] = 'Verze';
$l['ins_time'] = 'Čas instalace';
$l['ins_path'] = 'Cesta';
$l['ins_url'] = 'URL';
$l['ins_admin_url'] = 'Admin URL';
$l['ins_db'] = 'Jméno databáze';
$l['ins_dbuser'] = 'Uživatel databáze';
$l['ins_dbpass'] = 'Heslo databáze';
$l['ins_dbhost'] = 'Databázový server';
$l['ins_datadir'] = 'Adresář pro data';
$l['ins_wwwdir'] = 'Adresář webu';
$l['ins_wwwurl'] = 'URL adresáře webu';
$l['ins_cron_command'] = 'Cron Command';
$l['cloned'] = 'Instalace byla úspěšně naklonována';
$l['clone_ins'] = 'Podrobnosti klonování instalace';
$l['cloneins'] = 'Klonovat instalaci';
$l['choose_protocol'] = 'Zvolit protokol';
$l['choose_protocol_exp'] = 'Mají-li vaše stránky SSL, pak prosím zvolte HTTPS protokol.';
$l['cron_job'] = 'Úloha CRONu';
$l['cron_job_exp'] = 'Tento skript vyžaduje, aby CRON pracoval. Prosím stanovte načasování CRONu. Pokud si nejste jisti, neupravujte!';
$l['cron_min'] = 'Minuta';
$l['cron_hour'] = 'Hodina';
$l['cron_day'] = 'Den';
$l['cron_month'] = 'Měsíc';
$l['cron_weekday'] = 'Pracovní den';
$l['datadir'] = 'Adresář pro data';
$l['datadir_exp'] = 'Tento skript vyžaduje ukládat data ve složce nepřístupné přes web. Bude vytvořena ve vašem domovském adresáři. Tj. zadáte-li <b>datadir</b>, bude vytvořena - /home/username/<b>datadir</b>';
$l['db_name_long'] = 'Jméno databáze nemůže být delší než 7 písmen. Prosím zvolte kratší jméno databáze.';
$l['db_alpha_num'] = 'Pro název databáze jsou povolené pouze alfanumerické znaky.';
$l['overwrite'] = 'Přepsat soubory';
$l['database_exists'] = 'Databáze již existuje. Prosím zvolte jiný název.';
$l['no_softdomain'] = 'Nevybral jste doménu pro instalaci softwaru.';
$l['wrong_softdomain'] = 'Vybranou cestu domény nelze nalézt.';
$l['no_space'] = 'Nemáte dostatek místa pro instalaci tohoto softwaru!';
$l['no_softdb'] = 'Databáze nebyla nahrána.';
$l['choose_domain'] = 'Zvolit doménu';
$l['choose_domain_exp'] = 'Prosím zvolte doménu pro instalaci softwaru.';
$l['in_directory'] = 'V adresáři';
$l['in_directory_exp'] = 'Adresář je relativní k vaší doméně a <b>neměl by existovat</b>. Např. chcete-li nainstalovat na adrese http://mydomain/dir/, stačí zadat <b>dir</b>. Chcete-li nainstalovat pouze v http://mydomain/, nechte toto prázdné.';
$l['database_name'] = 'Jméno databáze';
$l['database_name_exp'] = 'Zadejte název databáze, která má být pro instalaci vytvořena';
$l['softcopy_note'] = '<b>POZNÁMKA</b>: Tento software vyžaduje, aby byl nainstalován pomocí vlastního instalačního nástroje. Pro dokončení instalace prosím navštivte URL adresu, která se zobrazí, jakmile se soubory nakopírují.';
$l['softsubmit'] = 'Klonovat';
$l['congrats'] = 'Gratulujeme, instalace byla úspěšně naklonována';
$l['succesful'] = 'byla úspěšně naklonována do';
$l['admin_url'] = 'Administrativní URL';
$l['setup_continue'] = 'Nastavení bude dokončeno samotným softwarem. Pro dokončení nastavení prosím navštivte následující URL';
$l['enjoy'] = 'Doufáme, že proces instalace byl snadný.';
$l['install_notes'] = 'Níže jsou uvedeny některé důležité poznámky. Doporučujeme si je přečíst.';
$l['please_note'] = '<b>POZNÁMKA</b>: '.APP.' je jen automatický instalátor softwaru a neposkytuje žádnou podporu pro jednotlivé softwarové balíčky. Kvůli podpoře navštivte prosím stránky prodejce softwaru.';
$l['regards'] = 'S pozdravem';
$l['softinstaller'] = APP.' auto instalátor';
$l['return'] = 'Zpět na Přehled';

// These strings are for Softaculous Remote
$l['hostname'] = 'Jméno databázového serveru';
$l['hostname_exp'] = 'Jméno MySQL serveru (většinou <b>localhost</b>)';
$l['dbusername'] = 'Uživatelské  jméno databáze';
$l['dbusername_exp'] = 'Uživatelské jméno MySQL';
$l['dbuserpass'] = 'Heslo databáze';
$l['dbuserpass_exp'] = 'Heslo uživatele MySQL';
$l['database_name_exp_aefer'] = 'Zadejte název databáze, která má být použita pro instalaci';

$l['clone_tweet_sub'] = 'Tell your friends';
$l['not_in_free'] = '<b>&soft-1;</b> nemůže být naklonován v bezplatné verzi '.APP.'!';
$l['notify_admin'] = 'Prosím upozorněte svého správce serveru, aby zakoupil prémiovou verzi '.APP.'! ';

$l['soft_ins_exists'] = 'An installation already exists at &soft-1; as per our records. To clone the application at this location please uninstall the existing installation!';

$l['no_sclone'] = 'The CLONE.XML file could not be found! Please report this to the server administrator.';
$l['no_functions'] = 'The CLONE FUNCTIONS file could not be found! Please report this to the server administrator.';

$l['clone_push_bg'] = 'Clone has been pushed in background';
$l['err_mysql_db'] = 'The MySQL database name is incorrect as the database could not be selected.';

$l['error_max_clone_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Clone allowed per script';

$l['choose_url'] = 'Choose Installation URL';
$l['choose_url_exp'] = 'Please choose the URL to install the software';

$l['ampps_notify_premium'] = 'This feature is available in the premium version of AMPPS. Please purchase <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';