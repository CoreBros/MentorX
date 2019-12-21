<?php
/**
 * @package Dotclear
 *
 * @copyright Olivier Meunier & Association Dotclear
 * @copyright GPL-2.0-only
 */

if (!defined('DC_RC_PATH')) {return;}

// Database driver (mysql (deprecated, disabled in PHP7), mysqli, mysqlimb4 (full UTF-8), pgsql, sqlite)
define('DC_DBDRIVER','mysqli');

// Database hostname (usually "localhost")
define('DC_DBHOST','[[softdbhost]]');

// Database user
define('DC_DBUSER','[[softdbuser]]');

// Database password
define('DC_DBPASSWORD','[[softdbpass]]');

// Database name
define('DC_DBNAME','[[softdb]]');

// Tables' prefix
define('DC_DBPREFIX','[[dbprefix]]');

// Persistent database connection
define('DC_DBPERSIST', false);

// Crypt key (password storage)
define('DC_MASTER_KEY','[[secret]]');

// Admin URL. You need to set it for some features.
define('DC_ADMIN_URL','[[softurl]]/admin/');

// Admin mail from address. For password recovery and such.
define('DC_ADMIN_MAILFROM','[[admin_email]]');

// Cookie's name
define('DC_SESSION_NAME', 'dcxd');

// Session TTL
//define('DC_SESSION_TTL','120 seconds');

// Plugins root
define('DC_PLUGINS_ROOT', dirname(__FILE__) . '/../plugins');

// Template cache directory
define('DC_TPL_CACHE', path::real(dirname(__FILE__) . '/..') . '/cache');

// Var directory
define('DC_VAR', path::real(dirname(__FILE__) . '/..') . '/var');

// Cryptographic algorithm
define('DC_CRYPT_ALGO', 'sha512');

// Vendor name
//define('DC_VENDOR_NAME', 'Dotclear');

// Do not check for update
//define('DC_NOT_UPDATE', false);

// Update URL
//define('DC_UPDATE_URL','http://download.dotclear.org/versions.xml');

// Update channel (stable, unstable, testing)
//define('DC_UPDATE_VERSION', 'stable');

// Proxy config
//define('HTTP_PROXY_HOST','127.0.0.1');
//define('HTTP_PROXY_PORT','8080');

// Reverse Proxy
//define('DC_REVERSE_PROXY',false);

// Show hidden media dirs
//define('DC_SHOW_HIDDEN_DIRS', false);

// If you have PATH_INFO issue, uncomment following lines
//if (!isset($_SERVER['ORIG_PATH_INFO'])) {
//    $_SERVER['ORIG_PATH_INFO'] = '';
//}
//$_SERVER['PATH_INFO'] = $_SERVER['ORIG_PATH_INFO'];

// If you have mail problems, uncomment following lines and adapt it to your hosting configuration
// For more information about this setting, please refer to http://doc.dotclear.net/2.0/admin/install/custom-sendmail
//function _mail($to, $subject, $message, $headers)
//{
//    socketMail::$smtp_relay = 'my.smtp.relay.org';
//    socketMail::mail($to, $subject, $message, $headers);
//}
