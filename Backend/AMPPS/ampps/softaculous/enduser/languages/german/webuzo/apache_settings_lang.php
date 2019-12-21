<?php

//////////////////////////////////////////////////////////////
//===========================================================
// apache_settings_lang.php
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

$l['no_port'] = 'Bitte geben Sie die Portnummer an';
$l['err_msg'] = 'Einige Fehler beim Speichern der Einstellungen';
$l['settings_saved'] = 'Ihre Einstellungen wurden erfolgreich gespeichert';
$l['err_installing_webserver'] = 'Es sind einige Fehler beim Imstallieren des Proxy Webservers aufgetreten';
$l['invalid_webserver'] = 'Üngültiges Webserver Set';
$l['invalid_default_server'] = 'Ungültiger Standard Server';
$l['errport_no'] = 'Ungültige Portnummer';
$l['port_used'] = 'Der angegebene Port ist bereits in Benutzung';

// Theme Strings
$l['<title>'] = APP.' - Apache Einstellungen';
$l['edit_settings'] = 'Bearbeiten Apache Einstellungen';
$l['apachesettings'] = 'Apache Einstellungen';
$l['suphp_enable'] = 'suPHP aktivieren';
$l['suphp_check'] = 'Prüfen Sie, ob Sie suphp aktivieren wollen';
$l['err_no_install'] = 'PHP ist auf Ihrem Server nicht installiert';
$l['spdy_enable'] = 'SPDY aktivieren';
$l['spdy_check'] = 'Überprüfen Sie, ob Sie SPDY aktivieren wollen.';
$l['nginxsettings'] = 'Nginx Einstellungen';
$l['edit_nginx_settings'] = 'Nginx Einstelleungen bearbeiten';
$l['err_no_install_nginx'] = 'Nginx ist auf Ihrem Server nicht installiert';
$l['old_nginx'] = 'Sie müssen Nginx auf die neuste Version aktualisieren um die Einstellung aktivieren zu können.';
$l['lbl_head'] = 'Nginx Proxy';
$l['name'] = 'Portnummer';
$l['exp_name'] = 'Port auf dem der Apache Service laufen soll<br />
<strong>Hinweis: </strong>Es sollte kein Anderer Service auf diesem Port laufen.';
$l['enable_button'] = 'aktivieren';
$l['disable_button'] = 'deaktivieren';
$l['option'] = 'Optionen';
$l['block'] = 'IP Adresse';
$l['enable_done'] = 'Nginx Proxy ist aktiviert.';
$l['disable_done'] = 'Nginx Proxy ist deaktiviert.';
$l['some_error'] = 'Es sind einige Fehler aufgetreten. Bitte versuchen Sie es erneut!';
$l['connect_error'] = 'Upps, es ist ein Fehler bei der Verbindung zum <strong>Server</strong> aufgetreten';
$l['ht_check'] = '.htaccess Datei erlauben';
$l['ht_check_exp'] = 'Prüfen Sie ob Sie .htaccess Dateien erlauben wollen.';
$l['set_default'] = 'Standard Webserver setzen';
$l['set_proxy'] = 'PROXY Server setzen';
$l['set_proxy_exp'] = 'Wählen Sie den Proxy Server, der genutzt werden soll.';
$l['fastcgi_enable'] = 'Enable Fast CGI';
$l['fastcgi_check'] = 'Check if you want to enable Fast CGI';
$l['lighttpd_settings'] = 'Lighttpd Settings';
$l['additional_mod_settings'] = 'Additional Modules Settings';
$l['error_update_webserver'] = 'Please Update your Webserver to Toggle modules';
$l['enable_http2'] = 'Enable HTTP/2 protocol';
$l['check_http2'] = 'Check if you want to enable HTTP/2';
$l['enable_gzip'] = 'Enable Gzip Compression';
$l['check_gzip'] = 'Check if you want to enable Gzip compression';
$l['save_settings'] = 'Save Settings';
$l['http2_not_present'] = 'HTTP2 Protocol is not available for';
$l['varnish_setting'] = 'Varnish Settings';
$l['enable_varnish'] = 'Enable Varnish';
$l['exp_enable_varnish'] = 'Check to enable Varnish Cache';
$l['lighttpd_err'] = 'This functionality is not supported with Lighttpd currently';
$l['no_varnish'] = 'Varnish is not installed on your machine';
$l['update_varnish'] = 'Please update Varnish to use this functionality';
$l['update_webserver'] = 'Please update your default webserver to use this functionality';
$l['beta_note'] = 'NOTE: This functionality is currently in BETA and some sites may not work well with HTTPS specially if the default server is Nginx';
$l['err_fastcgi_varnish'] = 'Disable FASTCGI to enable Varnish';