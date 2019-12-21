<?php
/**
 * @package Configuration Settings
 * @copyright Copyright 2003-2018 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * File Built by Zen Cart Installer on [[DATE_NOW]]
 */


/*************** NOTE: This file is VERY similar to, but DIFFERENT from the "store" version of configure.php. ***********/
/***************       The 2 files should be kept separate and not used to overwrite each other.              ***********/

/**
 * Enter the domain for your Admin URL. If you have SSL, enter the correct https address in the HTTP_SERVER setting, instead of just an http address.
 */
define('HTTP_SERVER', 'http://[[domhost]]');
/**
 * Note about HTTPS_SERVER:
 * There is no longer an HTTPS_SERVER setting for the Admin. Instead, put your SSL URL in the HTTP_SERVER setting above.
 */

/**
 * Note about DIR_WS_ADMIN
 * The DIR_WS_ADMIN value is now auto-detected.
 * In the rare case where it cannot be detected properly, you can add your own DIR_WS_ADMIN definition below.
 */

/**
 * Enter the domain for your storefront URL.
 * Enter a separate SSL URL in HTTPS_CATALOG_SERVER if your store supports SSL.
 */
define('HTTP_CATALOG_SERVER', 'http://[[domhost]]');
define('HTTPS_CATALOG_SERVER', 'https://[[domhost]]');

/**
 * Do you use SSL for your customers login/checkout on the storefront? If so, enter 'true'. Else 'false'.
 */
define('ENABLE_SSL_CATALOG', '');

/**
 * These DIR_WS_xxxx values refer to the name of any subdirectory in which your store is located.
 * These values get added to the HTTP_CATALOG_SERVER and HTTPS_CATALOG_SERVER values to form the complete URLs to your storefront.
 * They should always start and end with a slash ... ie: '/' or '/foldername/'
 */
define('DIR_WS_CATALOG', '[[relativeurl]]/');
define('DIR_WS_HTTPS_CATALOG', '[[relativeurl]]/');

/**
 * This is the complete physical path to your store's files.  eg: /var/www/vhost/accountname/public_html/store/
 * Should have a closing / on it.
 */
define('DIR_FS_CATALOG', '[[softpath]]/');

/**
 * NOTE about DIR_FS_ADMIN
 * The value for DIR_FS_ADMIN is now auto-detected.
 * In the very rare case where there is a need to override the autodetection, simply add your own definition for it below.
 */

/**
 * The following settings define your database connection.
 * These must be the SAME as you're using in your non-admin copy of configure.php
 */
define('DB_TYPE', 'mysql'); // always 'mysql'
define('DB_PREFIX', '[[dbprefix]]'); // prefix for database table names -- preferred to be left empty
define('DB_CHARSET', 'utf8mb4'); // 'utf8mb4' or older 'utf8' / 'latin1' are most common
define('DB_SERVER', '[[softdbhost]]');  // address of your db server
define('DB_SERVER_USERNAME', '[[softdbuser]]');
define('DB_SERVER_PASSWORD', '[[softdbpass]]');
define('DB_DATABASE', '[[softdb]]');

/**
 * This is an advanced setting to determine whether you want to cache SQL queries.
 * Options are 'none' (which is the default) and 'file' and 'database'.
 */
define('SQL_CACHE_METHOD', 'none');

/**
 * Reserved for future use
 */
define('SESSION_STORAGE', 'reserved for future use');

/**
 * Advanced use only:
 * The following are OPTIONAL, and should NOT be set unless you intend to change their normal use. Most sites will leave these untouched.
 * To use them, uncomment AND add a proper defined value to them.
 */
// define('DIR_FS_SQL_CACHE' ...
// define('DIR_FS_DOWNLOAD' ...
// define('DIR_FS_LOGS' ...

// End Of File
