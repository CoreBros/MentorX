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

$l['no_ins'] = 'Es wurde keine Installation angegeben';
$l['wrong_ins_title'] = 'Falsche Installations ID';
$l['wrong_ins'] = 'Die Installations ID die Sie angegeben haben existiert nicht';
$l['cant_remove_dir'] = 'Das Verzeichnis kann nicht entfernt werden, da es das home Verzeichnis ist. Bitte wählen Sie die Option <b>Verzeichnis löschen</b> ab, um ohne das Verzeichnis zu löschen weiter zu machen.';
$l['no_dir'] = 'Das Installations Verzeichnis existiert nicht!';
$l['no_datadir'] = 'Das Daten Verzeichnis existiert nicht!';
$l['no_wwwdir'] = 'Das Web Verzeichnis existiert nicht!';
$l['wrong_url'] = 'Die URL und der Verzeichnis Name stimmen nicht überein';
$l['wrong_wwwurl'] = 'Die WebURL und der Web Verzeichnis Name stimmen nicht überein';
$l['err_mysql_user'] = 'MySQL Benutzer oder Passwort ist falsch. Eine Verbindung konnte nicht hergestellt werden.';
$l['err_mysql_db'] = 'Der MySQL Datenbank Name ist falsch, da die Datenbank nicht gefunden wurde.';
$l['mail_path'] = 'Pfad';
$l['mail_url'] = 'URL';
$l['mail_db'] = 'MySQL Datenbank';
$l['mail_dbuser'] = 'MySQL DB Benutzer';
$l['mail_dbhost'] = 'MySQL DB Host';
$l['mail_dbpass'] = 'MySQL DB Passwort';
$l['mail_time'] = 'Installationszeit';
$l['mail_editdetail_time'] = 'Änderungszeit';
$l['mail_subject'] = 'Geänderte Installationsdetails zu &soft-1;';
$l['mail_cron_command'] = 'CRON Job';
$l['mail_datadir'] = 'Daten Verzeichnis';
$l['mail_wwwdir'] = 'Web Verzeichnis';
$l['mail_wwwurl'] = 'Web Verzeichnis URL';

//Theme Strings
$l['<title>'] = APP.' - Details bearbeiten';
$l['ins_details'] = 'Installation Details';
$l['info'] = 'Info';
$l['ins_softname'] = 'Software';
$l['ins_num'] = 'Installations Nummer';
$l['ins_ver'] = 'Version';
$l['ins_time'] = 'Installations Zeit';
$l['ins_path'] = 'Pfad';
$l['ins_url'] = 'URL';
$l['ins_admin_url'] = 'Admin URL';
$l['ins_db'] = 'Datenbank Name';
$l['ins_dbuser'] = 'Datenbank Benutzer';
$l['ins_dbpass'] = 'Datenbank Passwort';
$l['ins_dbhost'] = 'Datenbank Host';
$l['ins_datadir'] = 'Daten Verzeichnis';
$l['ins_wwwdir'] = 'Web Verzeichnis';
$l['ins_wwwurl'] = 'Web Verzeichnis URL';
$l['ins_cron_command'] = 'Cron Command';
$l['details_edited'] = 'Die Installationsdetails wurden erfolgreich geändert';
$l['version_edited'] = 'Die Version wurde in unseren Aufzeichnungen aktualisiert.';
$l['return'] = 'Zurück zur Übersicht';

$l['edit_ins'] = 'Installationsdetails bearbeiten';
$l['edit_dir'] = 'Verzeichnis';
$l['edit_datadir'] = 'Daten Verzeichnis';
$l['edit_db'] = 'Datenbank Name';
$l['edit_dbuser'] = 'Datenbank Benutzer';
$l['edit_dbpass'] = 'Datenbank Passwort';
$l['edit_dbhost'] = 'Datenbank Host';
$l['edit_url'] = 'URL';
$l['editins'] = 'Installationsdetails bearbeiten';
$l['mail_editdetail_ins'] = 'Die Installationsdetails zu &soft-1; wurden geändert. Dies sind die geänderten Details der Installation: ';
$l['edit_wwwdir'] = 'Web Verzeichnis';
$l['edit_wwwurl'] = 'Web Verzeichnis URL';
$l['disable_notify_update'] = 'Update Benachrichtigungen deaktivieren';
$l['exp_disable_notify_update'] = 'Wenn diese Option gesetzt ist, werden Sie keine E-Mail Benachrichtigung über zur Verfügung stehende Updates für diese Installation erhalten.';
$l['alreadyupdated'] = 'iHmm ... es sieht so aus, als ob die aktuelle Version <b>&soft-1;</b> ist und nicht <b>&soft-2;</b>. <br />Klicken Sie um die '.APP.' Aufzeichnungen zu aktualisieren.';
$l['edit_acc_detail'] = 'Admin Account Einstellungen bearbeiten';
$l['eu_auto_upgrade'] = 'Auto Upgrade';
$l['exp_eu_auto_upgrade'] = 'Select the automatic upgrade preference for this installation when a new version is available';
$l['auto_upgrade_plugins'] = 'Auto Upgrade &soft-1; Plugins';
$l['exp_auto_upgrade_plugins'] = 'If checked, all the active &soft-1; plugins installed for this installation will be automatically upgraded to the latest version when your script installation is upgraded.';
$l['auto_upgrade_themes'] = 'Auto Upgrade &soft-1; Themes';
$l['exp_auto_upgrade_themes'] = 'If checked, the active &soft-1; theme for this installation will be automatically upgraded to the latest version when your script installation is upgraded.';
$l['auto_backup'] = 'Automatische Backups';
$l['exp_auto_backup'] = APP.' wird automatische Backups via Cron durchführen in der Häfigkeit, die Sie einstellen.';
$l['auto_backup_rotation'] = 'Backup Rotation';
$l['exp_auto_backup_rotation'] = 'Wenn das Backup Ratations Limit erreicht ist, wird '.APP.' das älteste Backup für diese Installation löschen und ein neues Backup anlegen. Die Backups werden Ihren Speicherplatz benutzen, daher wählen Sie bitte eine Rotation entsprechend Ihres verfügbaren Speicherplatzes auf dem Server.';
$l['no_backup'] = 'Nicht sichern';
$l['daily'] = 'Einmal am Tag';
$l['weekly'] = 'Einmal in der Woche';
$l['monthly'] = 'Einmal im Monat';
$l['unlimited'] = 'unbegrenzt';
$l['auto_backup_not_allowed'] = 'Die Backup Frequenz, die Sie gewählt haben, die ungültig';

$l['no_edit'] = 'Die Datei EDIT.XML konnte nicht gefunden werden! Bitte teilen Sie dies dem Server Administrator mit.';
$l['no_functions'] = 'Die Datei EDIT FUNCTIONS konnte nicht gefunden werden! Bitte teilen Sie dies dem Server Administrator mit.';
$l['no_field'] = 'Das Feld <b>&soft-1;</b> ist erforderlich und muss ausgefüllt werden.';
$l['err_auto_backup_limit'] = 'Die auto Backup Rotation darf nicht über <b>&soft-1;</b> liegen';
$l['select_files'] = 'Dateien/Verzeichnisse auswählen';
$l['select_files_exp'] = 'Bitte wählen Sie alle weiteren Dateien/Verzeichnisse aus, die mit dieser Installation verbunden sind. <br />Diese Liste wird für Vorgänge wie das Klonen, Sichern und Entfernung dieser Installation verwendet';
$l['invalid_files_in_post_list'] = 'Es wurden einige ungültige Dateien/Verzeichnisse ausgewählt';
$l['select_files_list'] = 'Weitere Dateien/Verzeichniss aus der folgenden Liste auswählen';

$l['select_files_backup'] = 'Die oben ausgewählten Dtaien/Verzeichnisse für das Backup verwenden';
$l['select_files_backup_exp'] = 'Wenn diese Option ausgewählt ist, werden nur die Dateien/Verzeichnisse, die zu dieser Installation gehören gesichert. <br />Standardmäßig werden alle Dateien/verzeichnisse unter diesem Pfad in das Backup eingeschlossen';
$l['no'] = 'Nein';
$l['yes'] = 'Ja';
$l['check_all_edit'] = 'Alle auswählen';

$l['choose_theme'] = 'Theme auswählen';
$l['clear_theme'] = 'Auswahl zurück setzen';
$l['installing_theme'] = 'Installiere Theme';
$l['cant_download_theme'] = 'Konnte die Theme Dateien nicht herunter laden';
$l['no_theme_package'] = 'Das Theme Installationspaket konnte nicht gefunden werden!';
$l['unzipping_theme_files'] = 'Kopiere Dateien und Verzeichnisse des Themes';
$l['use_this_theme'] = 'Dieses auswählen';
$l['demo'] = 'Demo';
$l['refresh'] = 'Aktualisieren';
$l['purchase'] = 'Kaufen';
$l['close'] = 'Close';
$l['free'] = 'Frei';
$l['select'] = 'Auswählen';
$l['theme_is_optional'] = '<b>Hinweis</b>: Dies ist optional. Wählen Sie diese Option nur, wenn Sie Ihr aktuelles Theme autauschen möchten.';
$l['your_purchased'] = 'Gekauft ';//trailing space is required
$l['your_purchased_times'] = ' Zeit(en)';
$l['err_theme_not_bought'] = 'Sie haben dieses Theme nicht gekauft, daher können Sie es nicht installieren!';
$l['err_theme_reached_limit'] = 'Bitte kaufen Sie dieses Theme und versuchen Sie erneut es zu installieren. Sie haben das Limit erreicht dieses Theme zu installieren.';
$l['payment_heading'] = 'Theme kaufen';
$l['payment_redirect'] = 'Sie werden weitergeleitet zum Zahlen ';//trailing space is required
$l['date_added'] = 'Hinzugefügt am';
$l['downloaded'] = 'Herunter geladen';
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