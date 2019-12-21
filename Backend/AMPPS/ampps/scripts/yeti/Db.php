<?php

/**
 * Configuration file.
 * This file is auto-generated.
 *
 * @package Config
 *
 * @copyright YetiForce Sp. z o.o
 * @license   YetiForce Public License 3.0 (licenses/LicenseEN.txt or yetiforce.com)
 */

namespace Config;

/**
 * Configuration Class.
 */
class Db
{
	/** Gets the database server */
	public static $db_server = '[[softdbhost]]';

	/** Gets the database port */
	public static $db_port = '3306';

	/** Gets the database user name */
	public static $db_username = '[[softdbuser]]';

	/** Gets the database password */
	public static $db_password = '[[softdbpass]]';

	/** Gets the database name */
	public static $db_name = '[[softdb]]';

	/** Gets the database type */
	public static $db_type = 'mysql';


	/**
	 * Gets host name
	 */
	public static function db_hostname()
	{
		return self::$db_server . ":" . self::$db_port;
	}


	/**
	 * Basic database configuration
	 */
	public static function base()
	{
		return [
			'dsn' => self::$db_type . ':host=' . self::$db_server . ';dbname=' . self::$db_name . ';port=' . self::$db_port,
			'host' => self::$db_server,
			'port' => self::$db_port,
			'username' => self::$db_username,
			'password' => self::$db_password,
			'dbName' => self::$db_name,
			'tablePrefix' => 'yf_',
			'charset' => 'utf8',
		];
	}
}
