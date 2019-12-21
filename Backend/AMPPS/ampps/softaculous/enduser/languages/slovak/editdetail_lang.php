<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editdetail_lang.php
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
$l['no_dir'] = 'Priečinok inštalácie neexistuje !';
$l['no_datadir'] = 'Priečinok dát neexistuje !';
$l['no_wwwdir'] = 'Priečinok Web neexistuje !';
$l['wrong_url'] = 'URL a názov PRIEČINKA sa nezhodujú';
$l['wrong_wwwurl'] = 'WEB URL a názov PRIEČINKA WEB sa nezhodujú';
$l['err_mysql_user'] = 'Prihlasovacie meno MySQL alebo heslo alebo host databázy je nesprávne, pretože nemôže byť nadviazané spojenie.';
$l['err_mysql_db'] = 'Názov MySQL databázy je nesprávny, pretože databáza nemôže byť zvolená.';
$l['mail_path'] = 'Cesta';
$l['mail_url'] = 'URL';
$l['mail_db'] = 'MySQL databáza';
$l['mail_dbuser'] = 'Prihlasovacie meno MySQL DB';
$l['mail_dbhost'] = 'Host MySQL DB';
$l['mail_dbpass'] = 'Heslo MySQL DB';
$l['mail_time'] = 'Čas inštalácie';
$l['mail_editdetail_time'] = 'Čas zmeny';
$l['mail_subject'] = 'Upravené detaily inštalácie &soft-1;';
$l['mail_cron_command'] = 'CRON úloha';
$l['mail_datadir'] = 'Priečinok dát';
$l['mail_wwwdir'] = 'Webový priečinok';
$l['mail_wwwurl'] = 'URL priečinka Web';

//Theme Strings
$l['<title>'] = APP.' - Edit Detail';
$l['ins_details'] = 'Detaily inštalácie';
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
$l['details_edited'] = 'Detaily inštalácie boli úspešne zmenené';
$l['version_edited'] = 'Verzia bola v našich záznamov aktualizovaná.';
$l['return'] = 'Spať na prehľad';

$l['edit_ins'] = 'Upraviť detaily inštalácie';
$l['edit_dir'] = 'Priečinok';
$l['edit_datadir'] = 'Priečinok dát';
$l['edit_db'] = 'Názov databázy';
$l['edit_dbuser'] = 'Používateľ databázy';
$l['edit_dbpass'] = 'Heslo databázy';
$l['edit_dbhost'] = 'Host databázy';
$l['edit_url'] = 'URL';
$l['editins'] = 'Uložiť detaily inštalácie';
$l['mail_editdetail_ins'] = 'Detaily inštalácie &soft-1; boli upravené. Nasledujú upravené detaily inštalácie :';
$l['edit_wwwdir'] = 'Webový priečinok';
$l['edit_wwwurl'] = 'URL priečinka Web';
$l['disable_notify_update'] = 'Zakázať upozornenia na nové verzie.';
$l['exp_disable_notify_update'] = 'Ak zaškrtnuté, nebude dostávať upozornenia na nové verzie pre túto inštaláciu emailom.';
$l['alreadyupdated'] = 'Hmm ... vyzerá to, že skutočná verzia inštalácie je <b>&soft-1;</b> a nie <b>&soft-2;</b>. <br />Kliknite sem pre aktualizovanie záznamov '.APP.'.';
$l['edit_acc_detail'] = 'Upraviť detaily účtu správcu';
$l['eu_auto_upgrade'] = 'Automatická aktualizácia';
$l['exp_eu_auto_upgrade'] = 'Select the automatic upgrade preference for this installation when a new version is available';
$l['auto_upgrade_plugins'] = 'Automaticky aktualizovať zásuvné moduly &soft-1;';
$l['exp_auto_upgrade_plugins'] = 'Ak zaškrtnuté, všetky aktívne zásuvné moduly &soft-1; nainštalované pre túto inštaláciu budú automaticky aktualizované na najnovšiu verziu pri automatickej aktualizácii skriptu.';
$l['auto_upgrade_themes'] = 'Automatická aktualizácia &soft-1; motívov';
$l['exp_auto_upgrade_themes'] = 'Ak zaškrtnuté, aktívne &soft-1; motívy pre túto inštaláciu budú automaticky aktualizované na najnovšiu verziu pri automatickej aktualizácii skriptu.';
$l['auto_backup'] = 'Automatické zálohy';
$l['exp_auto_backup'] = APP.' will take automated backups via CRON as per the frequency you select';
$l['auto_backup_rotation'] = 'Rotácia záloh';
$l['exp_auto_backup_rotation'] = 'Ak bude dosiahnutý limit rotácie '.APP.' odstráni najstaršiu zálohu tejto inštalácie a vytvorí novú zálohu. Zálohy budú používať váš priestor, preto vyberte rotáciu záloh na základe dostupného priestoru na vašom serveri';
$l['no_backup'] = 'Nezálohovať';
$l['daily'] = 'Denne';
$l['weekly'] = 'Týždenne';
$l['monthly'] = 'Mesačne';
$l['unlimited'] = 'Neobmedzené';
$l['auto_backup_not_allowed'] = 'Zvolená frekvencia záloh je neplatná';

$l['no_edit'] = 'Súbor EDIT.XML nebol nájdený! Prosím, oznámte to správcovi servera.';
$l['no_functions'] = 'Súbor EDIT FUNCTIONS nebol nájdený! Prosím, oznámte to správcovi servera.';
$l['no_field'] = 'Políčko <b>&soft-1;</b> je požadované a musí byť vyplnené.';
$l['err_auto_backup_limit'] = 'Rotácia automatickej zálohy nemôže byť viac ako <b>&soft-1;</b>';
$l['select_files'] = 'Zvoľte súbory/priečinky';
$l['select_files_exp'] = 'Prosím, vyberte dodatočný súbor/priečinok pridružený s touto inštaláciou. <br />Tento zoznam bude použitý na úkony ako Klonovanie, zálohovanie a odstránenie tejto inštalácie';
$l['invalid_files_in_post_list'] = 'Boli vybraté neplatné súbory/priečinky';
$l['select_files_list'] = 'Vyberte dodatočné súbory/priečinky z nasledujúceho zoznamu';

$l['select_files_backup'] = 'Použiť hore vybrané súbory/priečinky pre zálohu';
$l['select_files_backup_exp'] = 'Ak označené iba súbory/priečinky súvisiace s touto inštaláciou budú zálohované. <br />V predvolenom stave bude záloha zahŕňať všetky súbory/priečinky pod touto cestou';
$l['no'] = 'Nie';
$l['yes'] = 'Áno';
$l['check_all_edit'] = 'Označiť všetky';

$l['choose_theme'] = 'Install Theme';
$l['clear_theme'] = 'Clear selection';
$l['installing_theme'] = 'Installing theme';
$l['cant_download_theme'] = 'Could not download the theme files';
$l['no_theme_package'] = 'The theme installation package could not be found!';
$l['unzipping_theme_files'] = 'Copying themes files and folders';
$l['use_this_theme'] = 'Select this';
$l['demo'] = 'Demo';
$l['refresh'] = 'Refresh';
$l['purchase'] = 'Buy';
$l['close'] = 'Close';
$l['free'] = 'Free';
$l['select'] = 'Select';
$l['theme_is_optional'] = '<b>Note</b>: This is optional. Select only if you want to change your current theme.';
$l['your_purchased'] = 'Purchased ';//trailing space is required
$l['your_purchased_times'] = ' times(s)';
$l['err_theme_not_bought'] = 'You have not purchased the theme, so could not install it !';
$l['err_theme_reached_limit'] = 'Please buy this theme and try to install it again. You reached the limit of installing this theme.';
$l['payment_heading'] = 'Purchase Theme';
$l['payment_redirect'] = 'You will be redirected to pay ';//trailing space is required
$l['date_added'] = 'Date Added';
$l['downloaded'] = 'Downloaded';
$l['edit_dbpass_exp'] = 'New Database Password. <br/>Leave blank if you do not want to update the password';
$l['select_tables'] = 'Select additional database tables';
$l['select_tables_exp'] = 'Selected tables will be included in the database backup';

$l['backup_loc'] = 'Backup Location';
$l['exp_backup_loc'] = 'Choose the backup location to be used while backing up this installation';
$l['default'] = 'Default';
$l['invalid_backup_location'] = 'Backup location submitted does not exist';
$l['local_folder'] = 'Local Folder';

$l['cron_min'] = 'Min';
$l['cron_hour'] = 'Hour';
$l['cron_day'] = 'Day';
$l['cron_month'] = 'Month';
$l['cron_weekday'] = 'Weekday';

$l['no_cron_min'] = 'No Cron minute was specified';
$l['no_cron_hour'] = 'No Cron hour was specified';
$l['no_cron_day'] = 'No Cron day was specified';
$l['no_cron_month'] = 'No Cron month was specified';
$l['no_cron_weekday'] = 'No Cron weekday was specified';

$l['custom_autobackup'] = 'Custom';
$l['custom'] = 'Custom Cron time';
$l['custom_autobackup_cron'] = 'Automated Backups Cron time';
$l['custom_autobackup_cron_exp'] = 'Please specify the CRON timings for automated backups';

//Errors for autobcakup cron settings
$l['wrong_autobackup_cron_min'] = 'Automated Backup cron minute is wrong. Valid values are 0-59 or a *';
$l['wrong_autobackup_cron_hour'] = 'Automated Backup cron hour is wrong. Valid values are 0-23 or a *';
$l['wrong_autobackup_cron_day'] = 'Automated Backup cron day is wrong. Valid values are 1-31 or a *';
$l['wrong_autobackup_cron_month'] = 'Automated Backup cron month is wrong. Valid values are 1-12 or a *';
$l['wrong_autobackup_cron_weekday'] = 'Automated Backup cron weekday is wrong. Valid values are 0-7 or a *';

$l['done'] = 'Done';
$l['error'] = 'Error';
$l['plugins_upgrade_now'] = 'Upgrade Plugin(s) Now';
$l['theme_upgrade_now'] = 'Upgrade Theme Now';
$l['plugins_upgrade_success'] = 'Plugin(s) Upgraded Successfully!!';
$l['theme_upgrade_success'] = 'Theme Upgraded Successfully!!';
$l['fetch_db_details'] = 'Allow Softaculous to fetch the database details ?';

$l['edit_notes'] = 'The following are some important notes. It is highly recommended that you read them ';
$l['domain_not_in_list'] = 'The URL posted is not in your domain(s) list'; 

$l['dont_auto_upgrade'] = 'Do not Auto Upgrade'; 
$l['minor_auto_upgrade'] = 'Upgrade to <b>Minor</b> versions only'; 
$l['major_auto_upgrade'] = 'Upgrade to any latest version available (<b>Major</b> as well as <b>Minor</b>)'; 
$l['auto_upgrade_major'] = '(Major and Minor)'; 
$l['auto_upgrade_minor'] = '(Minor)';

$l['wpc_return'] = 'Return to Installations';