<?php

//////////////////////////////////////////////////////////////
//===========================================================
// settings_lang.php
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

$l['no_path'] = 'Es wurde kein Pfad angegeben';
$l['wrong_path'] = 'Konnte universal.php nicht finden unter dem Pfad den Sie angegeben haben.';
$l['no_softscripts'] = 'Es wurde kein Pfad zum Ort der Software / Anwendung angegeben';
$l['wrong_softscripts'] = 'Der Pfad zur Software / Anwendung Pfad existiert nicht';
$l['no_sn'] = 'Es wurde kein Seiten Name angegeben.';
$l['no_cookie_name'] = 'Es wurde kein Cookie Name angegeben';
$l['no_soft_email'] = 'Es wurde keine E-Mail Adresse angegeben';
$l['wrong_soft_email'] = 'Die angegebene Admin E-Mail Adresse ist ungültig';
$l['wrong_from_email'] = 'Die Absender E-Mail Adresse ist ungültig';
$l['no_license'] = 'Es wurde kein Lizenzschlüssel angegeben';
$l['no_lang'] = 'Es wurde keine Sprache ausgewählt';
$l['wrong_lang'] = 'Die ausgewählte Sprache ist ungültig';
$l['no_theme_folder'] = 'Es wurde kein Thema ausgewählt';
$l['wrong_theme_folder'] = 'Das ausgewählte Thema ist ungültig';
$l['no_timezone'] = 'Es wurde keine Zeitzone ausgewählt';
$l['wrong_timezone'] = 'Die ausgewählte Zeitzone ist ungültig';
$l['no_cron_time'] = 'Es wurde keine Zeit für den Cron Job angegeben';
$l['no_off_message'] = 'Es wurde kein switch off Betreff angegeben';
$l['no_off_subject'] = 'Es wurde keine switch off Nachricht angegeben';
$l['saving_error'] = 'Es sind Fehler beim Speichern der Einstellungen aufgetreten';
$l['no_update'] = 'Es wurde keine Präferenz für Updates angegeben';
$l['invalid_update'] = 'Es wurde ein ungültiger Wert für die Update Präferenz angegeben';
$l['no_protocol'] = 'Es wurde kein Protokoll ausgewählt';
$l['wrong_protocol'] = 'Das ausgewählte Protokoll ist ungültig';
$l['wrong_network_interface'] = 'Die ausgewählte Netzwerkschnittstelle ist ungültig';
$l['pass_strength_error'] = 'Die Passwortstärke muss eine Ganzzahl zwischen 0 und 100 sein.';
$l['err_binary_path'] = 'Es scheint, dass das Binary nicht unter dem angegebenen Pfad existiert. Bitte überprüfen Sie dies und versuchen es erneut.';
$l['err_invalid_soa'] = 'Ungültiger SOA!!! Bitte geben Sie eine gültige positive Nummer ein';

//Theme Strings
$l['<title>'] = APP.' - Einstellungscenter';
$l['settings_saved'] = 'Die Einstellungen wurden erfolgreich gespeichert';
$l['pathhead'] = 'Software Pfade';
$l['softpath'] = APP.' Pfad';
$l['softpath_exp'] = 'Dies ist der Pfad an dem alle Dateien außer die verschiedenen Anwendungen liegen';
$l['softscripts'] = 'Pfad der Anwendung';
$l['softscripts_exp'] = 'Dies ist der Pfad, an dem alle Anwendungen / Software liegen';
$l['gen_set'] = 'Allgemeine Einstellungen';
$l['sitename'] = 'Seiten Name';
$l['sitename_exp'] = 'Der Name des Servers oder des Unternehmens das '.APP.' benutzt. Dieser wird auf vielen Seiten des '.APP.' installers zu sehen sein';
$l['cook_name'] = 'Cookie Name';
$l['cook_name_exp'] = 'Der Name des Cookies, das in Browsern gespeichert wird.';
$l['comp_output'] = 'Ausgabe komprimieren';
$l['comp_output_exp'] = 'Dies wird die Ausgabe komprimieren und eine Menge Bandbreite einsparen.';
$l['soft_email'] = 'Admin E-Mail Adresse';
$l['soft_email_exp'] = 'Die E-Mail Adresse an die die CRON Aktivitäten und andere Admin ähnlichen Mails gesendet werden.';
$l['from_email'] = 'Absender E-Mail Adresse';
$l['from_email_exp'] = 'Die Absender E-Mail Adresse.';
$l['license'] = 'Lizenzschlüssel';
$l['license_exp'] = 'Bitte geben Sie den korrekten Lizenzschlüssel von '.APP.' an';
$l['choose_lang'] = 'Sprache auswählen';
$l['choose_lang_exp'] = 'Wählen Sie Ihre bevorzugte Sprache aus';
$l['choose_theme'] = 'Thema wählen';
$l['choose_theme_exp'] = 'Das ausgewählte Thema wird dann überall das Standard Thema sein '.APP;
$l['timezone'] = 'Zeitzone';
$l['update_settings'] = 'Update Einstellungen';
$l['auto_upd_softac'] = 'Auto Update '.APP;
$l['auto_upd_softac_exp'] = 'Wenn diese Option aktiviert ist, wird '.APP.' sich automatisch auf die neuste Version aktualisieren <br />Die <b>Stable</b> Version wird veröffentlicht, wenn die Release Candidate Version komplett getestet wurde. <br />Die <b>Release Candidate</b> Version beinhaltet die neuste Version und die neusten Features.';
$l['never_update'] = 'Update niemals durchführen';
$l['stable'] = 'Stable (empfohlen)';
$l['release_cand'] = 'Release Candidate (Experimentell!)';
$l['auto_upd_soft'] = 'Auto Update der Anwendungen';
$l['auto_upd_soft_exp'] = 'Wenn diese Option aktiviert ist, werden die verschiedenen Anwendungen oder Software automatisch auf die neuste Version aktualisiert';
$l['auto_add_soft'] = 'Auto Hinzufügen neuer Anwendungen';
$l['auto_add_soft_exp'] = 'Wenn diese Option aktiviert ist, werden neue Anwendungen während des Wartungs Cron Jobs hinzugefügt. EMPFOHLEN';
$l['email_upd_soft'] = 'Benachrichtigung über Updates';
$l['email_upd_soft_exp'] = 'Dies wird E-Mails senden, wenn '.APP.' Upgrades verfügbar sind, oder wenn ein Auto Upgrade ausgeführt wird';
$l['email_upd_softs'] = 'Benachrichtigung über Anwendungsupdates';
$l['email_upd_softs_exp'] = 'Dies wird E-Mails senden wenn Skript oder Software Updates verfügbar sind oder wenn ein Auto Upgrade ausgeführt wird';
$l['cron_time'] = 'Cron Job für Updates';
$l['cron_time_exp'] = 'Die Zeit für einen Cron Job, der auf neue Updates prüft. Ändern Sie Einstellung nicht, wenn Sie unsicher sind was Cron Jobs sind';
$l['disable_soft'] = APP.' deaktivieren';
$l['soft_off'] = APP.' deaktivieren';
$l['soft_off_exp'] = 'Diese Option wird '.APP.' deaktivieren und Benutzer werden es nicht mehr nutzen können!';
$l['off_sub'] = 'Betreff deaktivieren';
$l['off_message'] = 'Nachricht deaktivieren';
$l['edit_settings'] = 'Einstellungen bearbeiten';
$l['chmod_files'] = 'CHMOD Dateien';
$l['chmod_files_exp'] = 'Dies ist hilfreich wenn Sie suPHP installiert haben und '.APP.' nicht in der Lage ist es zu finden. Lassen Sie das Feld leer, wenn Sie unsicher sind.';
$l['chmod_dir'] = 'CHMOD Verzeichnisse';
$l['chmod_dir_exp'] = 'Dies ist hilfreich wenn Sie suPHP installiert haben und '.APP.' nicht in der Lage ist es zu finden. Lassen Sie das Feld leer, wenn Sie unsicher sind.';
$l['is_vps'] = 'VPS (Virtual private server)';
$l['is_vps_exp'] = 'Wenn dieser Server eine virtuelle Maschine ist, aktivieren Sie bitte diese Box.';
$l['eu_news_off'] = 'Endbenutzer News deaktivieren';
$l['eu_news_off_exp'] = 'Wenn diese Option aktiviert ist, sind News für Endbenutzer für verschiedene Anwendungen deaktiviert. Es gibt Auskunft über Entwicklungsneuigkeiten verschiedener Anwendungen, sowie Informationen über neue Updates etc.';
$l['logo_url'] = 'Logo URL';
$l['logo_url_exp'] = 'Wenn dieses Feld leer ist, wird das '.APP.' Logo angezeigt.';
$l['php_bin'] = 'PHP Binary';
$l['php_bin_exp'] = 'Dies ist das Binary, welches für den Cron Job und andere Zwecke benutzt wird. Wenn dieses Feld leer gelassen wird, wird <b>/usr/bin/php</b> benutzt. Bitte beachten Sie, dass die <b> PHP binary eine CLI binary </b> sein sollte.';
$l['off_sync_link'] = 'Sync Link deaktivieren';
$l['off_sync_link_exp'] = 'Diese Option deaktiviert den Sync Link für Endbenutzer.';
$l['off_panel_link'] = 'Control Panel Link deaktivieren';
$l['off_panel_link_exp'] = 'Diese Option deaktiviert den Control Panel Link im Dock für Endbenutzer.';
$l['chmod_conf_file'] = 'CHMOD Konfigurationsdateien';
$l['chmod_conf_file_exp'] = 'Konfigurationsdateien von Anwendungen werden nach diesem Muster Rechte gegeben. Standard ist 0644. (Nicht bearbeiten / leer lassen, wenn Sie sich nicht sicher sind!)';
$l['suphp_detected'] = 'suPHP festgestellt';
$l['no_prefill'] = 'Den Verzeichnis Namen nicht vorausfüllen';
$l['no_prefill_exp'] = 'Den Verzeichnis Namen nicht standardmäßig mit dem Anwendungsnamen vorausfüllen.';
$l['footer_link'] = 'Footer Link';
$l['footer_link_exp'] = 'Wenn Jemand eine Anwendung installiert, wird dieser Link in den Footer dieser Installation eingebettet';
$l['eu_email_off'] = 'Endbenutzer Update E-Mails deaktivieren';
$l['eu_email_off_exp'] = 'Wenn diese Option aktiviert ist, werden keine E-Mails an den Endbenutzer geschickt werden, in denen er über Updates informiert wird.';
$l['random_pass'] = 'Zufallspasswort für Benutzer generieren';
$l['random_pass_exp'] = 'Wenn diese Option aktiviert ist, werden zufällige Admin Passwörter während einer Installation generiert.';
$l['off_demo_link'] = 'Anwedungsdemos deaktivieren';
$l['off_demo_link_exp'] = 'Diese Option deaktiviert die Demos für Endbenutzer.';
$l['off_rating_link'] = 'Bewertungen für Anwendungen deaktivieren';
$l['off_rating_link_exp'] = 'Diese Option deaktiviert die Bewertungen für Endbenutzer.';
$l['off_review_link'] = 'Berichte für Anwendungen deaktivieren';
$l['off_review_link_exp'] = 'Diese Option deaktiviert Berichte über Anwendungen für Endbenutzer.';
$l['off_screenshot_link'] = 'Screenshots der Anwendungen deaktivieren';
$l['off_screenshot_link_exp'] = 'Diese Option deaktiviert Screenshots für Endbenutzer.';
$l['random_dbprefix'] = 'Zufälliges Datenbank Präfix für Benutzer generieren';
$l['random_dbprefix_exp'] = 'Wenn diese Option aktiviert ist, wird ein zufälliges Datenbank Präfix während einer Installation generiert.';
$l['remote_mysql'] = 'Remote Mysql Hostname';
$l['remote_mysql_exp'] = 'Wenn Sie MySQL Remote nutzen möchten, geben Sie hier den Remote Mysql Hostname oder die IP an.';
$l['perl_scripts'] = 'PERL Skripte deaktivieren';
$l['perl_scripts_exp'] = 'Diese Option deaktiviert PERL Scripte für Endbenutzer';
$l['show_top_scripts'] = 'Top Gruppe der Anwedungen anzeigen';
$l['show_top_scripts_exp'] = 'Wenn diese Option aktiviert ist, werden die Top Anwednungen in einer Gruppe angezeigt, um dem Enbenutzer den Zugang zu den Installationsseiten der Anwendungen vereinfachen. Um dieses Feature zu deaktivieren, lassen Sie dieses Feld <b>leer</b>.';
$l['err_change_app_name'] = 'Ein Fehler ist aufgetreten während der Name der Gruppe geändert wurde';
$l['hide_dbprefix'] = 'Das Datenbank Präfix verstecken';
$l['hide_dbprefix_exp'] = 'Wenn diese Option aktiviert ist, wird kein Datenbank Präfix für diese Anwendung verfügbar sein.';
$l['user_mod_dir'] = 'USER MOD DIR benutzen';
$l['user_mod_dir_exp'] = 'Bunztzer können Anwendungen unter http://IP/~benutzer installieren';
$l['off_email_link'] = 'Alle E-Mails zu Endbenutzern deaktivieren';
$l['off_email_link_exp'] = 'Diese Option wird den E-Mail Link für Endbenutzer deaktivieren UND EBENFALLS werden keine anderen E-Mails mehr verschickt, wie während der Installation, entfernen von Installationen etc.';
$l['disable_classes'] = 'PHP Klassen deaktivieren';
$l['disable_classes_exp'] = 'Diese Option wird PHP Klassen für Endbenutzer deaktivieren.';
$l['panel_hf'] = 'Show Softaculous in control panel\'s native UI';
$l['panel_hf_exp'] = 'If this is enabled then Softaculous will be shown in control panel\'s native UI.';
$l['disable_backup_restore'] = 'Sichern/Wiederherstellen Funktion für Endbenutzer deaktivieren';
$l['disable_backup_restore_exp'] = 'Diese Option deaktiviert die Funktionen Sichern und Wiederherstellen für Endbenutzer.';
$l['nolabels'] = 'ALLE Anwendungskategorien deaktivieren';
$l['nolabels_exp'] = 'Wenn diese Option aktiviert ist, ewrden dem Endbenutzer keine Kategorien angezeigt. Das heißt z.B. PHP, Jvascripts, PERL, Klassen, all diese Kategorien werden deaktiviert.';
$l['end_user_set'] = 'Endbenutzer Panel Einstellungen';
$l['settings'] = APP.' Éinstellungen';
$l['disable_reseller_panel'] = 'Reseller Panel deaktivieren';
$l['disable_reseller_panel_exp'] = 'Wenn diese Option gesetzt ist, werden Reseller keinen Zugriff auf das Reseller Panel haben.';
$l['choose_protocol'] = 'Protokoll auswählen';
$l['choose_protocol_exp'] = 'Wählen Sie Ihr bervorzugtes Protokoll aus. Es wird für Endbenutzer standardmäßig ausgewählt.';
$l['random_username'] = 'Zufälligen Benutzernamen für Benutzer generieren.';
$l['random_username_exp'] = 'Wenn diese Option gesetzt ist, werden zufällige admin Benutzernamen während einer Installation generiert.';
$l['network_interface'] = 'Netzwerkschnittstelle';
$l['network_interface_exp'] = 'Die öffentliche Netzwerkschnittstelle des Servers. Wenn Sie unsicher sind, lassen Sie das Feld leer.';
$l['default_domain_path'] = 'Standard Domain Pfad';
$l['default_domain_path_exp'] = 'Wenn Sie eine neue Domain hinzufügen können Sie den Standard Domain Pfad setzen.';
$l['empty_username'] = 'Kein Benutzername';
$l['empty_username_exp'] = 'Wenn diese Option gesetzt ist, wird das Feld "Admin Benutzername" leer gelassen.';
$l['empty_pass'] = 'Kein Passwort';
$l['empty_pass_exp'] = 'Wenn diese Option gesetzt ist, wird das Feld "Passwort" leer gelassen.';
$l['show_cscript_in_top'] = 'Benutzerdefiniertes Anwendungs Logo in den TOP Anwendungen zeigen.';
$l['show_cscript_in_top_exp'] = 'Wenn diese Option gesetzt ist, wird Ihr benutzerdefiniertes Logo in den TOP Anwendungen angezeigt.';
$l['pass_strength'] = 'Minimale Passwortstärke setzen';
$l['pass_strength_exp'] = 'Wenn diese Option gesetzt ist, muss die minimale Passwortstärke über dem definierten Wert liegen.';
$l['off_remove_mail'] = 'E-Mails über entfernte Installationen abschalten';
$l['off_remove_mail_exp'] = 'Dies schaltet E-Mails ab, die dem Endbenutzer während der Entfernung einer Installation geschicket werden.';
$l['off_backup_mail'] = 'E-Mails über Sicherungen abschalten';
$l['off_backup_mail_exp'] = 'Dies schaltet E-Mails ab, die dem Endbenutzer während der Sicherung einer Installation geschicket werden.';
$l['off_install_mail'] = 'E-Mails über neue Installationen abschalten';
$l['off_install_mail_exp'] = 'Dies schaltet E-Mails ab, die dem Endbenutzer während der Neuinstalltion einer Anwendung geschicket werden.';
$l['off_edit_mail'] = 'E-Mails übder Änderungen an Installationen abschalten';
$l['off_edit_mail_exp'] = 'Dies schaltet E-Mails ab, die dem Endbenutzer über die Änderung einer Installtion geschicket werden.';
$l['off_clone_mail'] = 'E-Mails über kopierte Installationen abschalten';
$l['off_clone_mail_exp'] = 'Dies schaltet E-Mails ab, die dem Endbenutzer beim Kopieren einer Installation geschickt werden.';
$l['off_restore_mail'] = 'Turn off Restore Installation emails';
$l['off_restore_mail_exp'] = 'This will disable the email sent to endusers when an installation is restored.';
$l['admin_prefix'] = 'Präfix für den admin Benutzernamen';
$l['admin_prefix_exp'] = 'Dies wird im Installations Formular als Präfix vor den admin Benutzernamen gesetzt<br/> Bitte nutzen Sie keinen Bindestrich \'-\', da dieser als Trennung benutzt wird.';
$l['ap_none'] = 'Keine';
$l['ap_username'] = 'Benutzername';
$l['ap_domain'] = 'Domain';
$l['ap_admin_defined'] = 'Durch Admin definiert';
$l['disable_auto_backup'] = 'Automatische Backups für Endbenutzer abschalten';
$l['disable_auto_backup_exp'] = 'Wenn diese Option gesetzt ist, wir die Option für automatische Backups bei Endbenutzen deaktiviert.';
$l['webuzo_disable_username'] = 'Webuzo Benutzernamen vor-ausfüllen';
$l['webuzo_disable_username_exp'] = 'Wenn diese Option gesetzt ist, wird das Feld für den Webuzo Benutzernamen auf der Login Seite automatisch ausgefüllt.';
$l['disable_clone'] = 'Kopier Funktion für Endbenutzer deaktivieren';
$l['disable_clone_exp'] = 'Dies schaltet die Kopier Option für Endbenutzer ab.';
$l['disable_remote_import'] = 'Disable Remote Import feature for endusers';
$l['disable_remote_import_exp'] = 'This will disable the remote import option for endusers';
$l['disable_backup_upgrade'] = 'Backup Option während Upgrades abschalten';
$l['disable_backup_upgrade_exp'] = 'Dies schaltet die Backup Option auf der Seite für Installations Upgrades für Endbenutzer ab.';
$l['ephp_bin'] = 'Endbenutzer PHP binary';
$l['ephp_bin_exp'] = 'Den PHP Binary Pfad definieren, der von den Endbeutzer Webseiten benutzt wird. '.APP.' wird dieses Binary benutzen, um die Voraussetzungen einer Anwendung zu überpfüfen. Ist dies nicht definiert, wird '.APP.' den Standardwert benutzen: ';
$l['no_ampps_download'] = 'AMPPS Download Link deaktivieren';
$l['no_ampps_download_exp'] = 'Dies deaktiviert den AMPPS Download Link im '.APP.' Endbenutzer Panel.';
$l['no_strong_mysql_pass'] = 'Kein starkes Passwort für den MySQL Datenbankbenutzer generieren.';
$l['no_strong_mysql_pass_exp'] = 'Dies generiert ein MySQL Datenbankbenutzer Passwort ohne Sonderzeichen.';

$l['remove_options'] = 'Optionen zum entfernen von Endbenutzern';
$l['remove_dir'] = 'Verzeichnis entfernen Option verbergen';
$l['remove_dir_exp'] = 'Wenn diese Option gesetzt ist, wird das Installationsverzeichnis immer gelöscht, wenn eine Installation entfernt wird.';
$l['remove_db'] = 'Datenbank entfernen und Datenbank Benutzer Optionen verbergen';
$l['remove_db_exp'] = 'Wenn diese Option gesetzt ist, werden die die Datenbank und der Datenbankbenutzer immer gelöscht, wenn eine Installation entfernt wird.';
$l['remove_datadir'] = 'Datenverzeichnis entfernen Option verbergen';
$l['remove_datadir_exp'] = 'Wenn diese Option gesetzt ist, wird das Datenverzeichnis immer gelöscht, wenn eine Installation entfernt wird.';
$l['remove_wwwdir'] = 'WWW-Verzeichnis entfernen Option verbergen';
$l['remove_wwwdir_exp'] = 'Wenn diese Option gesetzt ist, wird das WWW-Verzeichnis immer gelöscht, wenn eine Installation entfernt wird.';

$l['social_media'] = 'Social Media Einstellungen';
$l['install_tweet_off'] = 'Tweet für neue Installationen deaktivieren';
$l['install_tweet_off_exp'] = 'Wenn diese Option gesetzt ist, wird die Tweet Option nicht nach einer neuen Installation angezeigt.';
$l['install_tweet_msg'] = 'Tweet Nachricht für neue Installationen';
$l['install_tweet_msg_exp'] = 'Benutzerdefinierte Tweet Nachricht für neue Installationen';

$l['upgrade_tweet_off'] = 'Tweet für Upgrades von Installationen deaktivieren';
$l['upgrade_tweet_off_exp'] = 'Wenn diese Option gesetzt ist, wird die Tweet Option nicht nach dem Upgrade einer Insallation angezeigt.';
$l['upgrade_tweet_msg'] = 'Tweet Nachricht für das Upgrade einer Installation';
$l['upgrade_tweet_msg_exp'] = 'Benutzerdefinierte Tweet Nachricht für das Upgrade einer Installation';

$l['clone_tweet_off'] = 'Tweet für das Klonen einer Installation deaktivieren';
$l['clone_tweet_off_exp'] = 'Wenn diese Option gesetzt ist, wird die Tweet Option nicht nach dem Klonen einer Installation angezeigt.';
$l['clone_tweet_msg'] = 'Tweet Nachricht für das Klonen einer Installation';
$l['clone_tweet_msg_exp'] = 'Benutzerdefinierte Tweet Nachricht für das Klonen einer Installation';

$l['no_ftp_encrypted'] = 'Das FTP Passwort nicht verschlüsseln';
$l['no_ftp_encrypted_exp'] = 'Diese Option wird FTP Passwörter ohne Verschlüsselung in der Datenbank speichern';
$l['pre_download_all'] = 'Vorab Download für alle Anwendungen aktivieren';
$l['pre_download_all_exp'] = 'Diese Option wird den Vorab Download für alle Anwendungen inklusive neu hinzugekommener Anwendungen aktivieren';

$l['tweet_vars_link'] = 'Liste der Variablen für Tweet Nachrichten';
$l['tweet_vars'] = '[[SCRIPTNAME]] - Anwendungsname <br />[[TYPE]] - Anwendungstyp, z.B.: PHP, PERL, etc. <br />[[softurl]] - URL der Installation <br />[[cat]] - Kategorie der Anwendung, z.B.: Blog, CMS, etc. <br />[[ver]] - Version der installierten Anwendung <br />';

$l['session_timeout'] = 'Session Timeout';
$l['session_timeout_exp'] = 'Softaculous Session wird für die angegebene Zeit aktiv bleiben.<br />Die Zeit wird in Minuten angegeben. Default: 15';


$l['auto_backup_limit'] = 'Auto backup rotation limit';
$l['auto_backup_limit_exp'] = 'Geben Sie hier das maximale Limit für das Rotieren von automatischen Backups von Endbenutzern an';
$l['auto_backup_unlimited'] = 'Unbegrenzt';
$l['auto_backup_all'] = 'Alle';
$l['auto_backup_daily'] = 'Tägliche automatische Backups deaktivieren';
$l['auto_backup_weekly'] = 'Wöchentliche automatische Backups deaktivieren';
$l['auto_backup_monthly'] = 'Monatliche automatische Backups deaktivieren';

$l['off_upgrade_plugins'] = 'Automatisches Upgrade von Plugins für Endbenutzer deaktivieren';
$l['off_upgrade_plugins_exp'] = 'Wenn diese Option gesetzt ist, wird die Option um Plugins der Installationen von Benutzern automatisch zu aktualisieren deaktiviert.';

$l['off_upgrade_themes'] = 'Automatisches Upgrade von Themes für Endbenutzer deaktivieren';
$l['off_upgrade_themes_exp'] = 'Wenn diese Option gesetzt ist, wird die Option um Themes der Installationen von Benutzern automatisch zu aktualisieren deaktiviert.';

$l['pfx_settings'] = 'PopularFX Einstellungen';
$l['eu_enable_themes'] = 'Kostenlose Themes aktivieren';
$l['eu_enable_themes_exp'] = 'Wenn diese Option gesetzt ist, bekommen Endbenutzer eine Option um kostenlose Themes auszuwählen, während sie eine Anwendung wie z.B. WordPress installieren.';
$l['eu_themes_premium'] = 'Premium Themes aktivieren';
$l['eu_themes_premium_exp'] = 'Wenn diese Option gesetzt ist, bekommen Endbenutzer eine Option um Premium Themes für Anwendungen wie z.B. WordPress zu kaufen und zu installieren.<br /> Weitere Informationen <a href="http://www.softaculous.com/docs/Premium_Themes" target="_blank">hier</a>';

$l['backups_expire'] = 'Löschintervall für Backups';
$l['backups_expire_exp'] = 'Wenn die Benutzer Backups nach einer bestimmten Zeit nach dem Anlegen gelöscht werden sollen. Standardmäßig werden Backups nie gelöscht.';

$l['default_hf_bg'] = 'Standard Frabe für Header und Footer';
$l['default_hf_bg_exp'] = 'Dies wird die standard Farbe für Header, Footer und das linke Panel sein';
$l['default_cat_hover'] = 'Standard Farbe für Kategorie Hover';
$l['default_cat_hover_exp'] = 'Dies wird die standard Farbe sein, wenn der Benutzer mit der Maus über die Kategorien im linken Panel fährt';
$l['default_hf_text'] = 'Standard Farbe für Text in Header und Footer';
$l['default_hf_text_exp'] = 'Dies wird die standard Farbe für Text im Header, Footer und linken Panel sein';
$l['default_scriptname_text'] = 'Standard Farbe für den Anwendungsnamen im linken Panel';
$l['default_scriptname_text_exp'] = 'Dies wird die standard Farbe für den Anwendungsnamen im linken Panel sein';

$l['max_backups'] = 'Maximale Anzahl an Backups pro Benutzer';
$l['max_backups_exp'] = 'Dies limitiert die maximale Anzahl an Backups, die ein Benutzer machen kann';
$l['max_backups_unlimited'] = 'Unlimitiert';

$l['default_landing'] = 'Standard Seite für das Endbenutzer Panel';
$l['default_landing_exp'] = 'Dies wird die standard Seite für '.APP.' im Endbenutzer Panel sein.';
$l['top_scripts'] = 'Top Anwendungen (Standard)';
$l['all_ins'] = 'Alle Installationen';
$l['outdated_ins'] = 'veraltete Installationen';

$l['no_add_domain'] = 'Domains hinzufügen für Endbenutzer deaktivieren';
$l['no_add_domain_exp'] = 'Diese Option verbietet es Endbenutzern Domains hinzuzufügen';

$l['force_auto_upgrade'] = 'Force Auto Upgrade preference for users\' installations';
$l['force_auto_upgrade_exp'] = 'Chosen auto upgrade preference, will be selected and disabled in the enduser panel. Enduser(s) will <b>not</b> be able to modify it. (Not Applicable for existing installations)';
$l['enable_auto_upgrade'] = 'Prefill Auto Upgrade preference for users\' installations';
$l['enable_auto_upgrade_exp'] = 'Chosen auto upgrade preference, will be selected by default in the enduser panel. Enduser(s) will be able to modify it.';
$l['dont_auto_upgrade'] = 'Do not Auto Upgrade (Default)';
$l['minor_auto_upgrade'] = 'Upgrade to <b>Minor</b> versions only';
$l['major_auto_upgrade'] = 'Upgrade to any latest version available (<b>Major</b> as well as <b>Minor</b>)';

$l['set_backup_dir'] = 'Backup Verzeichnis einstellen';
$l['set_backup_dir_exp'] = 'Wählen Sie das Verzeichnis in dem Benutzer Backups gespeichert werden sollen. <br /> Dies ist ein absoluter Pfad. Wenn z.B. /backups angegeben wird, werden die Backups im Verzeichnis /backups/USERNAME auf dem Server gespeichert. Das Verzeichnis sollte bereits existieren und von allen benutzern beschreibbar sein.';

$l['off_customize_theme'] = 'Benutzerdefinierte Themes deaktivieren';
$l['off_customize_exp'] = 'Wenn diese Option gesetzt ist, können Endbentzer die Option für benutzerdefinierte Themes nicht benutzen';

$l['enc_db_pass'] = 'Datenbankpasswort verschlüsselt abspeichern';
$l['enc_db_pass_exp'] = 'Wenn diese Option gesetzt ist, werden die Datenbankpasswörter aller Benutzer Installationen verschlüsselt abgespeichert';

$l['time_format'] = 'Standard Zeit Format';
$l['time_format_exp'] = 'Wählen Sie das standard Zeit Format. Standard: <b>F j, Y, g:i a</b>';

$l['no_prefill_db'] = 'Datenbank Details nicht vorausfüllen';
$l['no_prefill_db_exp'] = 'Die Datenbank Details standardmäßig nicht vorausfüllen.';

$l['off_protocol'] = 'Protokoll';
$l['off_protocol_exp'] = 'Wenn diese Option gesetzt ist, wird das Protokoll nicht für Endbenutzer sichtbar sein.';

$l['disable_branches'] = 'Disable Scripts Branches';
$l['disable_branches_exp'] = 'If checked, all the branches of a script will be disabled except the parent one';
$l['db_prefix'] = 'DB Prefix aktivieren';
$l['db_prefix_exp'] = 'Wenn diese Option gesetzt ist, werden alle Datanbanken und Benutzer mit einem Prefix angelegt.';

$l['disable_cronupdate_email'] = 'CronJob E-Mail deaktivieren';
$l['disable_cronupdate_email_exp'] = 'Wenn diese Option gesetzt ist, werden keine Benachrichtigungen von Cronjobs an die angegebene E-Mail Adresse geschickt.';

$l['set_soa_expire_val'] = 'SOA Ablaufzeit setzen';
$l['set_soa_expire_val_exp'] = 'Eine numerische SOA Ablaufzeit in Sekunden für alle Domains setzen. Minimale Zeit: 86400';

$l['nat_config'] = 'NAT Konfiguration';
$l['nat_config_exp'] = 'Diese Option auswählen, wenn auf dem Server NAT eingesetzt wird.';

$l['logs_level'] = APP.' Log Level';
$l['logs_level_exp'] = 'Das ausgewählte Log Level wird für Error/Debug Logs verwendet. <br />Log Level 4 könnte Passwörter enthalten';
$l['off'] = 'Off';
$l['logs_level-4'] = 'detailliert Logs';

$l['backup_set'] = 'Backup Settings';
$l['email_set'] = 'Email Settings';
$l['hide_feature_set'] = 'Disable Features for End users';
$l['auto_upgrade_set'] = 'Auto Upgrade Settings';

$l['no_prefill_pass'] = 'Don\'t Prefill Password fields';
$l['no_prefill_pass_exp'] = 'While editing an installation or a domain the password will not be shown';
$l['enc_user_pass'] = 'Encrypt API Pass';
$l['enc_user_pass_exp'] = 'If selected the API Pass for user(s) will be encrypted and stored';

$l['sync_domains'] = 'Enable Sync Domain(s)';
$l['sync_domains_exp_remote'] = 'This will enable the synchronizing of Domain(s) in '.APP.' records with the domain(s) list passed via $PRE_LOGIN in session.php, click <a href="http://www.softaculous.com/docs/Softaculous_Remote#Sync_Domains" target="_blank">here</a> to for guide';
$l['sync_domains_exp_ent'] = 'This will enable the synchronizing of Domain(s) in '.APP.' records with the domain(s) list passed via $PRE_LOGIN in session.php, click <a href="http://www.softaculous.com/docs/Softaculous_Enterprise_Integration#Sync_Domains" target="_blank">here</a> to for guide';

$l['email_password'] = 'Email password in plain text';
$l['email_password_exp'] = 'If checked, the passwords will be sent in plain-text to the users via email for install, clone, etc.';

$l['disable_sign_on'] = 'Disable Auto Login';
$l['disable_sign_on_exp'] = 'Select this option to disable auto login to script\'s admin panel from '.APP;

$l['demo_logo'] = 'Logo URL For Scripts Demo';
$l['demo_logo_exp'] = 'If empty the '.APP.' logo will be shown, recommended dimension for the logo Width:150, Height:45';

$l['email_update_apps'] = 'Notify Application Updates';
$l['email_update_apps_exp'] = 'If enabled, emails will be sent when updates for installed Application(s) are available';

$l['demo_logo_url'] = 'Custom link for Scripts Demo Logo';
$l['demo_logo_url_exp'] = 'If empty the '.APP.' url will be used';

$l['favicon_logo'] = 'Favicon logo URL';
$l['favicon_logo_exp'] = 'If empty the '.APP.' favicon will be shown in Enduser Panel';

$l['rebranding_settings'] = 'Rebranding Settings';

$l['use_eu_username'] = 'Prefill Control Panel Username as Admin Username';
$l['use_eu_username_exp'] = 'If set, the script installation\'s Admin Username on the script install form will be prefilled as Control Panel Username';
$l['use_eu_email'] = 'Prefill Enduser Email as Admin Email';
$l['use_eu_email_exp'] = 'If set, the script installation\'s Admin Email on the script install form will be prefilled as the Email set in Enduser Email Settings';

$l['dbpass_len'] = 'Length for random generated MySQL database user password';
$l['dbpass_len_exp'] = 'Choose the length of random generated database user password. If left blank '.APP.' will use default: 10';
$l['off_available_space'] = 'Don\'t display available space';
$l['off_available_space_exp'] = 'If checked, Available Space will not be displayed on the script\'s Overview page';
$l['disable_import'] = 'Disable Import feature for endusers';
$l['disable_import_exp'] = 'This will disable the local import as well as remote import option for endusers';
$l['update_system'] = 'Update Operating System';
$l['update_system_exp'] = 'This will updates the operating system using yum or apt-get';
$l['off_rbackup'] = 'Disable Backup on Remote Server';
$l['off_rbackup_exp'] = 'If checked, backups from '.APP.' on remote server will be disabled for all endusers';

$l['sync_ins_list'] = 'Sync installations list with '.APP.' Records';
$l['sync_ins_list_exp'] = 'Check if the installation directory exists in the user\'s web directory and remove the installation(s) from '.APP.' records for which directory does not exist';

$l['sync_ins_real_ver'] = 'Detect and update actual version of installations';
$l['sync_ins_real_ver_exp'] = 'Detect if the user has manually updated their installation and update the version in '.APP.' records in case of version mismatch';
$l['update_system'] = 'Update OS';
$l['update_system_exp'] = 'If enabled, Operating System will be updated using Yum or Apt-get';

$l['auto_backup_custom'] = 'Disable Custom time for Auto backups';

$l['sitepad_settings'] = 'SitePad Settings'; 
$l['off_sitepad'] = 'Turn Off SitePad Website Builder';
$l['off_sitepad_exp'] = 'This will disable SitePad for all your users<br /><b>Note:</b> SitePad is based on Freemium model and if your users upgrade to the premium plan you get recurring commissions from SitePad. <a href="mailto:sales@sitepad.com">More details</a>';
$l['off_sitepad_conf'] = 'Are you sure you want to disable SitePad Website Builder ? You can get revenues from SitePad via Commissions when your users upgrade to the premium plan of SitePad. Contact us for more details about SitePad at sales@sitepad.com';
$l['auto_backup_default'] = 'Default'; 
$l['auto_backup'] = 'Default auto backup frequency';
$l['auto_backup_exp'] = 'Choose the default auto backup frequency. The chosen value will be pre-selected for endusers';
$l['no_backup'] = 'Don\'t backup';
$l['daily'] = 'Once a day';
$l['weekly'] = 'Once a week';
$l['monthly'] = 'Once a month';
$l['backup_rotation'] = 'Default auto backup rotation';
$l['backup_rotation_exp'] = 'Choose the default auto backup rotation. The chosen value will be pre-selected for endusers';

$l['hc_api_url'] = 'Hosting Controller API URL';
$l['hc_api_url_exp'] = 'API calls for various tasks such as fetching users list, etc at admin level or in CLI will be performed using this HC API URL. This URL must be a valid API URL accessible from your server and of the format <b>http(s)://IP:PORT</b>';

$l['force_softaculous_on_ssl'] = 'Force '.APP.' to run on SSL(HTTPS)';
$l['force_softaculous_on_ssl_exp'] = 'If enabled, '.APP.' will redirect non-ssl page request to HTTPS';

$l['off_import_mail'] = 'Turn off Import Installation emails';
$l['off_import_mail_exp'] = 'This will disable the email sent to endusers when an installation is imported.';

$l['off_checkhttps'] = 'Disable SSL certificate check on script install form';
$l['off_checkhttps_exp'] = 'This will disable the SSL certificate check for domains when a user selects to install a script on https protocol and will not see any error if SSL certificate is not installed';
$l['hide_sitepad'] = 'Hide SitePad Website Builder';
$l['hide_sitepad_exp'] = 'This will disable SitePad for the users who have not used SitePad but will leave SitePad enabled for users who have used SitePad';

// SitePad Settings language strings
$l['sm_saving_error'] = 'There were some errors while saving the SitePad settings'; 
$l['sm_brand'] = 'Brand Name';
$l['sm_brand_exp'] = 'A single word for the Brand Name. If empty the default value will be : SitePad';
$l['sm_sitename'] = 'Site Name';
$l['sm_sitename_exp'] = 'The name of the server or company using SitePad. It will appear in many pages of the SitePad Website Builder' ;
$l['sm_brand_editor'] = 'Editor Name';
$l['sm_brand_editor_exp'] = 'The name of the editor to be shown. If empty the default value will be : SitePad Editor';
$l['sm_logo_url'] = 'Logo URL';
$l['sm_logo_url_exp'] = 'It should be a 100 x 100 pixels transparent PNG image. If empty the SitePad logo will be shown';
$l['sm_brand_url'] = 'Website URL';
$l['sm_brand_url_exp'] = 'The URL to show the users for this Website Builder. If empty the default value will be : https://sitepad.com';
$l['host_sm'] = 'Custom Server Host';
$l['host_sm_exp'] = 'You can create a CNAME record to point to <a href="http://sitepad.com/wiki/Servers" target="_blank">our Servers</a>. Or you can simply use our servers hostname. If empty SitePad will use default server host for user';
$l['sm_brand_demos'] = 'Themes Demos URL';
$l['sm_brand_demos_exp'] = 'You can create a CNAME record to point to <b>demos.sitepad.com</b> <br />If empty SitePad will use default demos server for displaying themes demos';
$l['sm_no_demos'] = 'Disable Themes Demos';
$l['sm_no_demos_exp'] = 'Select this checkbox if you want to disable the themes demos for the user';
$l['sm_no_recent_themes'] = 'Disable Recent Themes';
$l['sm_no_recent_themes_exp'] = 'Select this checkbox if you want to disable the recently added themes section on the enduser Dashboard';
$l['sm_ftp_host'] = 'FTP Host';
$l['sm_ftp_host_exp'] = 'You can specify the FTP Host/IP that SitePad should use to connect while publishing files to your server. By default server IP will be used';
$l['sm_ftp_port'] = 'FTP Port';
$l['sm_ftp_port_exp'] = 'You can specify the FTP Port that SitePad should use to connect while publishing files to your server. By default 21 will be used';

// END SitePad Settings language strings

$l['err_no_dir'] = 'Backup directory doesn\'t exist on your server';

$l['quick_install_default'] = 'Set Quick Install as the default install option';
$l['quick_install_default_exp'] = 'If selected, the default install form will show minimal options (only required fields)';

$l['off_staging_mail'] = 'Turn off Staging Installation emails';
$l['off_staging_mail_exp'] = 'This will disable the email sent to endusers when staging an installation';
$l['max_bg_process'] = 'Maximum number of background processes';
$l['max_bg_process_exp'] = 'Set the maximum number of processes to be executed simultaneously in background. This will be used for tasks like Auto Upgrade. Default value : 10';
$l['au_extra_retry'] = 'Retry Auto Upgrade Script Plugins and Themes';
$l['au_extra_retry_exp'] = 'In case the auto upgrade for plugin or theme failed '.APP.' will retry after the given time. Default value : 48 hours';

$l['upgrade_backup_on'] = 'Set Backup checkbox pre-selected on Upgrade';
$l['upgrade_backup_on_exp'] = 'If selected, the Create Backup checkbox on the script upgrade page will be by default';

$l['off_staging'] = 'Turn Off Staging';
$l['off_staging_exp'] = 'This will turn off the Staging feature for endusers';
$l['err_openssl'] = 'Openssl extension is required to encrypt password';

$l['no_indir'] = 'Hide <b>In Directory</b> Field';
$l['no_indir_exp'] = 'If selected, then In Directory field will be hidden on installation form and the users will be able to install scripts only on domain root not in subdirectory.';

$l['max_staging'] = 'Maximum Staging installations per user limit';
$l['max_staging_exp'] = 'This will limit the maximum number of staging installations a user can create. Default : Unlimited';

$l['force_upgrade_plugins'] = 'Force upgrade for Plugins';
$l['force_upgrade_plugins_exp'] = 'If checked then the option to auto upgrade plugins for user\'s installation\'s will be enabled for endusers even if the user\'s didn\'t checked the option "auto upgrade plugins" in a particular edit installation\'s page.';

$l['force_upgrade_themes'] = 'Force upgrade for Themes';
$l['force_upgrade_themes_exp'] = 'If checked then the option to auto upgrade plugins for user\'s installation\'s will be enabled for endusers even if the user\'s didn\'t checked the option "auto upgrade themes" in a particular edit installation\'s page.';

$l['all_scripts'] = 'All Scripts';

$l['disable_csrf'] = 'Disable CSRF';
$l['disable_csrf_exp'] = 'This will disable the CSRF security check in Softaculous';

$l['cookie_name_invalid'] = 'The cookie name you submitted is invalid.';
$l['disable_manage_sets'] = 'Disable WordPress Manage Sets feature for endusers';
$l['disable_manage_sets_exp'] = 'This will disable the WordPress Plugin / Theme Sets feature for endusers';