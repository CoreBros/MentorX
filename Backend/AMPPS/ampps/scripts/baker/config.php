<?php
/*
 *** auto generated config file for 2.12.2
 *** WebsiteBaker 2.12.2
 *** created at [[created_at]]
 */
// define('DEBUG', false);
define('DB_TYPE', 'mysqli');
define('DB_HOST', '[[softdbhost]]');
define('DB_PORT', '3306');
define('DB_NAME', '[[softdb]]');
define('DB_USERNAME', '[[softdbuser]]');
define('DB_PASSWORD', '[[softdbpass]]');
define('DB_CHARSET', 'utf8_unicode_ci');
define('TABLE_PREFIX', '[[dbprefix]]');

define('WB_URL', '[[softurl]]'); // no trailing slash or backslash!!
define('ADMIN_DIRECTORY', 'admin'); // no leading/trailing slash or backslash!! A simple directory name only!!

require __DIR__.'/framework/initialize.php';
// --- end of file ----------------------------------
