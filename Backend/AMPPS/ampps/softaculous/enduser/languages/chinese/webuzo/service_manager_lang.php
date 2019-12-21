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
$l['err_msg'] = 'Some error occurred while saving your settings';

// Theme Strings
$l['<title>'] = APP.' - System Manager';

$l['edit_settings'] = 'Edit Settings';
$l['apachesettings'] = 'Apache Settings';
$l['settings_saved'] = 'Your settings were saved successfully.';
$l['nginx_enable'] = 'Enable NGINX';
$l['nginx_check'] = 'Check if you want NGINX enabled';
$l['service_manager'] = 'System Utilities';
$l['webserver'] = 'Web Server';
$l['httpd_webserver'] = 'Apache';
$l['lighttpd_webserver'] = 'LIGHTTPD';
$l['nginx_webserver'] = 'NGINX';
$l['no_web_server'] = 'You have No Webserver installed.';

$l['default_php'] = 'Default PHP';
$l['php53'] = 'PHP 5.3';
$l['php54'] = 'PHP 5.4';
$l['php55'] = 'PHP 5.5';
$l['no_php'] = 'You have No PHP installed.';
$l['nginx_note'] = '<b>Note: </b>You will have to handle your .htaccess file in case of Scripts while using Nginx.';

$l['php56'] = 'PHP 5.6';
$l['proxy_on'] = 'You have Nginx Proxy enabled on your server. Please disable it.';
$l['err_chng_wserver_varnish'] = 'Disable Varnish to change WebServer';