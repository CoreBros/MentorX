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

$l['no_info_file'] = 'Soubor INFO.XML nenalezen! Prosím oznamte to správci serveru.';
$l['incompatible'] = 'Software vyžaduje vyšší verzi ".APP."! Prosím oznamte to správci serveru.';
$l['no_upgrade'] = 'Soubor UPGRADE.XML nebyl nalezen! Prosím oznamte to správci serveru.';
$l['no_functions'] = 'Soubor UPGRADE FUNCTIONS nebyl nalezen! Prosím oznamte to správci serveru.';
$l['no_field'] = 'Pole <b>&soft-1;</b> je povinné a musí být vyplněno.';
$l['no_package'] = 'Balíček pro upgrade nebyl nalezen!';
$l['no_decompress'] = 'Při dekompresi balíčku souborů došlo k chybám.';
$l['checking_data'] = 'Kontrola zadaných dat';
$l['unzipping_files'] = 'Kopírování souborů a složek';
$l['unzipping_datadir'] = 'Rozbalování datových souborů';
$l['prop_db'] = 'Aktualizuji databázi';
$l['finishing_process'] = 'Dokončuji aktualizaci';
$l['wait_note'] = '<b>POZNÁMKA</b>: Toto může trvat 3-4 minuty. Prosím neopouštějte tuto stránku, dokud nebude dosaženo 100 %.';
$l['cver_greater'] = 'Aktuální verze je větší nebo rovna verzi, na kterou provádíte upgrade. Toto je možné, pokud jste ručně upgradovali instalaci. Není-li to tento případ, zkontrolujte prosím následující políčko';
$l['force_upgrade'] = 'Vynucený upgrade';
$l['backup_finish'] = 'Záloha dokončena';
$l['backup_fail_proceed'] = 'Během procesu zálohování došlo k chybám. Pokračovat v upgradu?';
$l['backing_up'] = 'Zálohování instalace';
$l['no_space'] = 'Nemáte dostatek místa pro aktualizaci této instalace!';
$l['invalid_insid'] = 'Invalid Installation ID';
$l['invalid_script'] = 'Invalid Script ID';
$l['no_upgrade_support'] = 'Upgrade is not supported for this script';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['upgrade'] = 'Aktualizace softwaru';
$l['softins_url'] = 'URL';
$l['softins_path'] = 'Cesta';
$l['softcopy_note'] = '<b>POZNÁMKA</b>: Tento software bude provádět upgrade pomocí vlastního nástroje. Pro dokončení upgradu navštivte prosím URL adresu, která se zobrazí, jakmile se soubory zkopírují.';
$l['softsubmit'] = 'Aktualizace';
$l['congrats'] = 'Gratulujeme, software byl úspěšně aktualizován';
$l['succesful'] = 'byl úspěšně aktualizován';
$l['admin_url'] = 'Admin URL';
$l['setup_continue'] = 'Nicméně upgrade bude dokončen samotným softwarem, proto prosím navštivte následující URL adresu';
$l['enjoy'] = 'Doufáme, že proces upgradu byl snadný.';
$l['upgrade_notes'] = 'Níže jsou uvedeny některé důležité poznámky. Doporučujeme si je přečíst.';
$l['please_note'] = '<b>POZNÁMKA</b>: '.APP.' je jen automatický instalátor a neposkytuje žádnou podporu pro softwarove. Kvůli podpoře navštivte prosím stránky prodejce softwaru!';
$l['regards'] = 'S pozdravem';
$l['softinstaller'] = APP.' auto instalátor';
$l['return'] = 'Zpět na Přehled';
$l['note_backup'] = 'Doporučuje se provést <a href="'.$globals['index'].'act=backup&insid=&soft-1;">zálohu</a> instalace před upgradem.';
$l['alreadyupdated'] = 'Hm… vypadá to, že aktuální verze instalace je <b>&soft-1;</b> a ne <b>&soft-2;</b>. <br/> Klikněte zde pro aktualizaci '.APP.' záznamů.';
$l['no_update_required'] = 'Zdá se, že upgrade není nutný, vaše instalace je aktuální.';
$l['auto_backup'] = 'Chcete provést zálohu před upgradem?';
$l['select_version'] = 'Vyberte verzi, na kterou chcete upgradovat';
$l['upgrading'] = 'Aktualizace..';
$l['setup_partial'] = 'Jste jeden krok od dokončení procesu upgradu';
$l['finish_update'] = 'Navštivte prosím níže uvedený odkaz pro dokončení procesu upgradu.';
$l['finish_up_sucess'] = 'Po dokončení procesu upgradu můžete přistupovat k instalaci &soft-1; zde';
$l['upgrading_to'] = 'Budete aktualizováni na:';
$l['version'] = 'Verze';
$l['create_backup'] = 'Vytvořit zálohu';
$l['create_backup_exp'] = 'Vytvořit zálohu před aktualizací';
$l['prog_upgrading'] = 'Aktualizuji';// Dont remove the trailing space
$l['prog_upgrade_complete'] = 'Aktualizace dokončena.';

$l['upgrade_tweet_sub'] = 'Tell your friends';

$l['not_in_free'] = '<b>&soft-1;</b> nemůže být aktualizován v bezplatné verzi '.APP.'!';
$l['notify_admin'] = 'Prosím upozorněte svého správce serveru, aby zakoupil prémiovou verzi '.APP.'! ';

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