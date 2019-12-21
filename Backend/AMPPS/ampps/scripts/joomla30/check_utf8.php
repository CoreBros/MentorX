<?php
/**
	 * Does the database server claim to have support for UTF-8 Multibyte (utf8mb4) collation?
	 *
	 * libmysql supports utf8mb4 since 5.5.3 (same version as the MySQL server). mysqlnd supports utf8mb4 since 5.0.9.
	 *
	 * @return  boolean
	 *
	 * @since   CMS 3.5.0
	 */
	function serverClaimsUtf8mb4Support()
	{
		$client_version = mysqli_get_client_info();

		if (strpos($client_version, 'mysqlnd') !== false)
		{
			$client_version = preg_replace('/^\D+([\d.]+).*/', '$1', $client_version);

			return version_compare($client_version, '5.0.9', '>=');
		}
		else
		{
			return version_compare($client_version, '5.5.3', '>=');
		}
	}
	
	/**
	 * Get the version of the database connector.
	 *
	 * @return  string  The database connector version.
	 *
	 * @since   12.1
	 */
	function getVersion()
	{
		$con = mysqli_connect("[[softdbhost]]","[[softdbuser]]","[[softdbpass]]","[[softdb]]");

		return mysqli_get_server_info($con);
	}

	$serverClaimsUtf8mb4Support = serverClaimsUtf8mb4Support();
	
	if(!empty($serverClaimsUtf8mb4Support)){
		echo '<claim_utf8>utf8mb4</claim_utf8>';
	}

?>