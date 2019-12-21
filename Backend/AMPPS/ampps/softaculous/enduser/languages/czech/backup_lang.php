<?php

//////////////////////////////////////////////////////////////
//===========================================================
// backup_lang.php
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
$l['backup_ftp_error'] = 'Nelze vytvořit adresář zálohy <b>&soft-1;</b>. Vytvořte jej ručně a zkuste to znovu.';
$l['err_backup'] = 'Nelze vytvořit zálohu.';
$l['no_space_backup'] = 'Nemáte dostatek místa pro zálohování této instalace!';
$l['err_notelength'] = 'Poznámka k záloze musí mít méně než 255 znaků';
$l['off_backup_restore'] = 'Backup/Restore feature has been disabled by admin';

$l['cant_backup_dir'] = 'Nástroj zálohy nemohl zazálohovat soubory.';
$l['could_not_read'] = 'Jejda, Softaculous nemohl přečíst následující soubor/adresář <b>&soft-1;</b>. Povolte ho pro "čtení", aby bylo možné dále používat nástroj zálohy.';
$l['cant_datadir_dir'] = 'Došlo k chybám při přidávání adresáře pro data.';
$l['cant_wwwdir'] = 'Došlo k chybám při přidávání adresáře webu.';
$l['cant_backup_db'] = 'Došlo k chybám při přidávání databáze do zálohy.';
$l['err_perm_file'] = 'Došlo k chybám při vytváření souboru práv';
$l['err_dataperm_file'] = 'Došlo k chybám při vytváření souboru práv adresáře pro data';
$l['err_wwwperm_file'] = 'Došlo k chybám při vytváření souboru práv adresáře webu';
$l['save_dir_perms'] = 'Nelze uložit oprávnění souboru.';
$l['save_datadir_perms'] = 'Nelze uložit oprávnění adresáře pro data';
$l['save_www_perms'] = 'Nelze uložit oprávnění adresáře webu.';
$l['cant_connect_mysql'] = 'Nelze se připojit k databázi, prosím ověřte uživatelské jméno/heslo vaší databáze. Došlo-li ke změně, prosím aktualizujte detaily v instalaci Softaculous pomocí sekce Upravit detaily.';

//Theme Strings
$l['<title>'] = APP.' - Backup';
$l['info'] = 'Informace';
$l['ins_softname'] = 'Software';
$l['ins_num'] = 'Číslo instalace';
$l['ins_ver'] = 'Verze';
$l['ins_time'] = 'Čas instalace';
$l['ins_path'] = 'Cesta';
$l['ins_wwwdir'] = 'Cesta adresáře webu';
$l['ins_url'] = 'URL';
$l['ins_db'] = 'Jméno databáze';
$l['ins_dbuser'] = 'Uživatel databáze';
$l['ins_dbpass'] = 'Heslo databáze';
$l['ins_dbhost'] = 'Databázový server';
$l['backup_ins'] = 'Záloha instalace';
$l['backup_dir'] = 'Adresář zálohy';
$l['backup_dir_exp'] = 'Pokud zaškrtnete toto, celá složka bude zálohovaná';
$l['backup_db'] = 'Záloha databáze';
$l['backup_db_exp'] = 'Je-li zaškrtnuto, bude zálohovaná také databáze';
$l['backup_conf'] = 'Zálohování může trvat delší dobu v závislosti na datech. Prosím nezavírejte webovou stránku ani nepřecházejte na jinou stránku.';
$l['backedup'] = 'Záloha byla úspěšně vytvořena. Můžete ji stáhnout ze stránky <a href="'.$globals['index'].'act=backups">zálohy</a> .<br /> URL vaší instalace:  <a href="&soft-1;" target="_blank">&soft-1;</a>';
$l['backup_ins'] = 'Záloha instalace';
$l['backup_datadir'] = 'Záloha adresáře pro data';
$l['backup_datadir_exp'] = 'Je-li zaškrtnuto, adresář pro data bude uložen.';
$l['ins_datadir'] = 'Adresář pro data';
$l['return'] = 'Zpět na Přehled';
$l['ins_cron_command'] = 'Cron příkaz';
$l['backup_wwwdir'] = 'Záloha adresáře webu';
$l['backup_wwwdir_exp'] = 'Je-li zaškrtnuto, adresář webu bude uložen.';
$l['checking_data'] = 'Kontrola zadaných dat';
$l['backingup_db'] = 'Zálohování databáze';
$l['backingup_dir'] = 'Zálohování adresáře';
$l['backingup_datadir'] = 'Zálohování adresáře pro data';
$l['finishing_process'] = 'Dokončení zálohy';
$l['wait_note'] = '<b>POZNÁMKA:</b> Toto může trvat 3-4 minuty. Tuto stránku můžete opustit, pokud chcete!';
$l['backingup'] = 'Záloha je vytvářena na pozadí. O jejím dokončení budete informováni emailem.<br/> Po dokončení zálohy ji můžete stáhnout ze stránky <a href="'.$globals['index'].'act=backups">Zálohy</a>.<br /> URL vaší instalace: <a href="&soft-1;" target="_blank">&soft-1;</a>';
$l['check_email'] = 'Prosím zkontrolujte váš email pro stav zálohy';
$l['prog_backingup'] = 'Zálohování '; // Dont remove the trailing space
$l['prog_backup_complete'] = 'Záloha dokončena.';
$l['backup_note'] = 'Poznámka k záloze';
$l['backup_note_exp'] = 'Můžete si uložit poznámku pro vaši referenci';
$l['backup_operation'] = 'Vyberte operaci(e ) zálohování';
$l['backups_expire'] = 'Vaše zálohy budou automaticky odstraněny po <b>&soft-1;</b> dnech od vytvoření zálohy.';
$l['err_max_backups'] = 'Dosáhli jste maximálního počtu povolených záloh (<b>&soft-1;</b>). Prosím odstraňte nepotřebné zálohy, aby bylo možné provést novou zálohu.';
$l['backup_notes'] = 'Záloha vytvořena '.APP.' automatickou zálohou';
$l['max_backups'] = 'You currently have <b>&soft-1;</b> backups in your account. Your maximum backups limit is <b>&soft-2;</b>.';

$l['no_backup_functions'] = 'The BACKUP FUNCTIONS file could not be found! Please report this to the server administrator.';
$l['no_dir_exists'] = 'The Installation Directory does not exist.';
$l['backup_location_name'] = 'Backup Location';
$l['backup_file_empty'] = 'Incorrect backup file size : 0';
$l['err_mysql_db'] = 'The MySQL database name is incorrect as the database could not be selected.';
$l['backup_loc'] = 'Backup Location'; 
$l['exp_backup_loc'] = 'Choose the backup location where you would like to store the backup'; 
$l['default'] = 'Default'; 
$l['invalid_backup_location'] = 'Backup location submitted does not exist'; 
$l['local_folder'] = 'Local Folder'; 

$l['invalid_access_token'] = 'Invalid Access Token. Please Re-Authorize '.APP.' Dropbox APP from the Edit Backup location page in '.APP.' enduser panel';
$l['insufficient_space'] = 'Your Dropbox account is full. Please free some space and attempt the backup after sometime';

$l['gdrive_err_init'] = 'There were some errors while initiating the backup on Google Drive!!';
$l['gdrive_err_end'] = 'There were some errors while committing backup to your Google Drive account!!';

$l['error_max_backup_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Backups allowed per script';

$l['ftp_access'] = 'PHP process is unable to write files to your server. Please configure FTP access to continue.';
$l['configure_domain'] = 'Configure Settings';

$l['wpc_return'] = 'Return to Backups';

$l['ampps_notify_premium'] = 'This feature is available in the premium version of AMPPS. Please purchase <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';
$l['backing_up'] = 'Your backup is being created in background. You will be notified by email once its completed. You can track the backup process from the <a href="'.$globals['index'].'act=eu_tasklist">Task List</a> page.<br /> Your installation URL : <a href="&soft-1;" target="_blank">&soft-1;</a>';