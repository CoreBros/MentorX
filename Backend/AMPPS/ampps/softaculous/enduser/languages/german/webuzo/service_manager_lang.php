<?php

//////////////////////////////////////////////////////////////
//===========================================================
// service_manager_lang.php
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

// Main Strings
$l['err_msg'] = 'Es ist ein Fehler beim Speichern der EInstellungen aufgetreten';

// Theme Strings
$l['<title>'] = ''.APP.' - System Manager';
$l['edit_settings'] = 'Einstellungen bearbeiten';
$l['apachesettings'] = 'Apache Einstellungen';
$l['settings_saved'] = 'Ihre EInstellungen wurde erfolgreich gespeichert.';
$l['nginx_enable'] = 'NGINX aktivieren';
$l['nginx_check'] = 'Überprfüfen Sie ob Sie NGINX aktivieren wollen';
$l['service_manager'] = 'System Utilities';
$l['webserver'] = 'Web Server';
$l['httpd_webserver'] = 'Apache';
$l['lighttpd_webserver'] = 'LIGHTTPD';
$l['nginx_webserver'] = 'NGINX';
$l['no_web_server'] = 'Sie haben keine Webserver installiert.';
$l['default_php'] = 'Standard PHP';
$l['php53'] = 'PHP 5.3';
$l['php54'] = 'PHP 5.4';
$l['php55'] = 'PHP 5.5';
$l['php56'] = 'PHP 5.6';
$l['no_php'] = 'Sie haben noch keine PHP installiert.';
$l['proxy_on'] = 'Sie haben den Nginx Proxy auf Ihrem Server aktiviert. Bitte deaktivieren Sie ihn.';
$l['nginx_note'] = '<b>Hinweis: </b>Sie müssen Ihre .htaccess Datei anpassen, wenn Sie Anwendungen mit Nginx nutzen.';
$l['err_chng_wserver_varnish'] = 'Disable Varnish to change WebServer';