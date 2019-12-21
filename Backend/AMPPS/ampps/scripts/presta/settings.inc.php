<?php
define('_DB_SERVER_', '[[softdbhost]]');
define('_DB_NAME_', '[[softdb]]');
define('_DB_USER_', '[[softdbuser]]');
define('_DB_PASSWD_', '[[softdbpass]]');
define('_DB_PREFIX_', '[[dbprefix]]');
define('_MYSQL_ENGINE_', 'InnoDB');
define('_PS_CACHING_SYSTEM_', 'CacheMemcache');
define('_PS_CACHE_ENABLED_', '0');
define('_COOKIE_KEY_', '[[cookie_key]]');
define('_COOKIE_IV_', '[[cookie_iv]]');
define('_PS_CREATION_DATE_', '[[creation]]');
if (!defined('_PS_VERSION_'))
	define('_PS_VERSION_', '1.6.1.24');