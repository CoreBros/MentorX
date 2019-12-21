<?php
/**
	AbanteCart, Ideal OpenSource Ecommerce Solution
	http://www.AbanteCart.com
	Copyright © 2011-2019 Belavier Commerce LLC

	Released under the Open Software License (OSL 3.0)
*/

define('SERVER_NAME', '[[domhost]]');
// Admin Section Configuration. You can change this value to any name. Will use ?s=name to access the admin
define('ADMIN_PATH', '[[admin_realname]]');

// Database Configuration
define('DB_DRIVER', 'amysqli');
define('DB_HOSTNAME', '[[softdbhost]]');
define('DB_USERNAME', '[[softdbuser]]');
define('DB_PASSWORD', '[[softdbpass]]');
define('DB_DATABASE', '[[softdb]]');
define('DB_PREFIX', '[[dbprefix]]');

define('CACHE_DRIVER', 'file');
// Unique AbanteCart store ID
define('UNIQUE_ID', '[[UNIQUE_ID]]');
// Encryption key for protecting sensitive information. NOTE: Change of this key will cause a loss of all existing encrypted information!
define('ENCRYPTION_KEY', '[[ENCRYPTION_KEY]]');
