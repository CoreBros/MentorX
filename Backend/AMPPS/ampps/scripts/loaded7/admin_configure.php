<?php
/*
  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

// Define the webserver and path parameters
// * DIR_FS_* = Filesystem directories (local/physical)
// * DIR_WS_* = Webserver directories (virtual/URL)
  define('HTTP_SERVER', '[[protocol]]://[[domhost]]'); // eg, http://localhost - should not be empty for productive servers
  define('HTTP_CATALOG_SERVER', 'http://[[domhost]]');
  define('HTTPS_CATALOG_SERVER', '[[protocol]]://[[domhost]]');
  define('HTTPS_SERVER', '[[protocol]]://[[domhost]]'); // eg, https://localhost - should not be empty for productive servers
  define('HTTPS_ADMIN_SERVER', '[[protocol]]://[[domhost]]');
  define('HTTP_COOKIE_DOMAIN', '[[domhost]]');
  define('HTTPS_COOKIE_DOMAIN', '[[domhost]]');
  define('HTTP_COOKIE_PATH', '[[relativeurl]]/');
  define('HTTPS_COOKIE_PATH', '[[relativeurl]]/');
  define('ENABLE_SSL',  '[[bool_SSL]]'); // secure webserver for checkout procedure?
  define('ENABLE_SSL_CATALOG', '[[bool_SSL]]'); // secure webserver for catalog module
  define('DIR_WS_HTTP_ADMIN',  '[[relativeurl]]/admin/');
  define('DIR_WS_HTTPS_ADMIN',  '[[relativeurl]]/admin/');
  define('DIR_FS_DOCUMENT_ROOT', '[[softpath]]/'); // where the pages are located on the server
  define('DIR_FS_ADMIN', '[[softpath]]/admin/'); // absolute path required
  define('DIR_WS_CATALOG', '[[relativeurl]]/'); // absolute path required
  define('DIR_WS_HTTP_CATALOG', '[[relativeurl]]/');
  define('DIR_WS_HTTPS_CATALOG', '[[relativeurl]]/');
  define('DIR_FS_CATALOG', '[[softpath]]/'); // absolute path required
  define('DIR_WS_IMAGES', 'images/');
  define('DIR_WS_ICONS', DIR_WS_IMAGES . 'icons/');
  define('DIR_WS_CATALOG_IMAGES', DIR_WS_CATALOG . 'images/');
  define('DIR_WS_INCLUDES', 'includes/');
  define('DIR_WS_BOXES', DIR_WS_INCLUDES . 'boxes/');
  define('DIR_WS_FUNCTIONS', DIR_WS_INCLUDES . 'functions/');
  define('DIR_WS_CLASSES', DIR_WS_INCLUDES . 'classes/');
  define('DIR_WS_MODULES', DIR_WS_INCLUDES . 'modules/');
  define('DIR_WS_LANGUAGES', DIR_WS_INCLUDES . 'languages/');
  define('DIR_WS_CATALOG_LANGUAGES', DIR_WS_CATALOG . 'includes/languages/');
  define('DIR_FS_CATALOG_LANGUAGES', DIR_FS_CATALOG . 'includes/languages/');
  define('DIR_FS_CATALOG_IMAGES', DIR_FS_CATALOG . 'images/');
  define('DIR_FS_CATALOG_MODULES', DIR_FS_CATALOG . 'includes/modules/');
  define('DIR_FS_BACKUP', DIR_FS_ADMIN . 'backups/');

// Added for Templating
  define('DIR_FS_CATALOG_MAINPAGE_MODULES', DIR_FS_CATALOG_MODULES . 'mainpage_modules/');
  define('DIR_WS_TEMPLATES', DIR_WS_CATALOG . 'templates/');
  define('DIR_FS_TEMPLATES', DIR_FS_CATALOG . 'templates/');

// define our database connection
  define('DB_SERVER', '[[softdbhost]]'); // eg, localhost - should not be empty for productive servers
  define('DB_SERVER_USERNAME', '[[softdbuser]]');
  define('DB_SERVER_PASSWORD', '[[softdbpass]]');
  define('DB_DATABASE', '[[softdb]]');
  define('USE_PCONNECT', 'false'); // use persisstent connections?
  define('STORE_SESSIONS', 'mysql'); // leave empty '' for default handler or set to 'mysql'
?>