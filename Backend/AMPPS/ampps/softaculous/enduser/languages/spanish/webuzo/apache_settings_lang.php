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

$l['no_port'] = 'Please enter the Port No.';
$l['err_msg'] = 'Ha ocurrido un error mientras se guardaba su configuracion';
$l['settings_saved'] = 'Su configuracion se ha guardado satisfactoriamente';
$l['err_installing_webserver'] = 'There were some errors installing the Proxy webserver.';
$l['invalid_webserver'] = 'Invalid Webserver Set';
$l['invalid_default_server'] = 'Invalid Default Server';
$l['errport_no'] = 'Invalid Port Number';
$l['port_used'] = 'The specified port is already in use';

// Theme Strings
$l['<title>'] = APP.' - Configuracion de Apache';
$l['edit_settings'] = 'Editar Configuracion de Apache';
$l['apachesettings'] = 'Configuracion de Apache';
$l['suphp_enable'] = 'Habilitar suPHP';
$l['suphp_check'] = 'Verifique que quiere tener suphp habilitado';
$l['err_no_install'] = 'PHP is not installed on your Server';
$l['spdy_enable'] = 'Enable SPDY';
$l['spdy_check'] = 'Check if you want SPDY enabled.';
$l['nginxsettings'] = 'Nginx Settings';
$l['edit_nginx_settings'] = 'Edit Nginx Settings';
$l['err_no_install_nginx'] = 'Nginx is not installed on your Server';
$l['old_nginx'] = 'You need to upgrade Nginx to the latest version to enable this setting.';
$l['lbl_head'] = 'Nginx Proxy';
$l['name'] = 'Port No';
$l['exp_name'] = 'Port for running Apache Service<br />
<strong>Note: </strong>No other service should be running on this port.';
$l['enable_button'] = 'Enable';
$l['disable_button'] = 'Disable';
$l['option'] = 'Options';
$l['block'] = 'IP Address';
$l['enable_done'] = 'Nginx Proxy is enabled.';
$l['disable_done'] = 'Nginx Proxy is disabled.';
$l['some_error'] = 'Some error occurred. Please try again!';
$l['connect_error'] = 'Oops! There was an error while connecting to <strong>Server</strong>';
$l['ht_check'] = 'Allow .htaccess';
$l['ht_check_exp'] = 'Check if you want to allow .htaccess files.';
$l['set_default'] = 'Set your default web server';
$l['set_proxy'] = 'Set the PROXY Server';
$l['set_proxy_exp'] = 'Select the Proxy server to be used.';
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