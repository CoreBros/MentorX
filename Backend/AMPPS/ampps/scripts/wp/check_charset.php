<?php

function __has_cap(){
	global $use_mysqli;
	
	$use_mysqli = false;
	if ( function_exists( 'mysqli_connect' ) ) {
		if ( version_compare( phpversion(), '5.5', '>=' ) || ! function_exists( 'mysql_connect' ) ) {
			$use_mysqli = true;
		} elseif ( false !== strpos( '[[wpver]]', '-' ) ) {
			$use_mysqli = true;
		}
	}
	$version = __db_version();
	
	if ( version_compare( $version, '5.5.3', '<' ) ) {
		return false;
	}
	
	if ( $use_mysqli ) {
		$client_version = mysqli_get_client_info();
	} else {
		$client_version = mysql_get_client_info();
	}

	/*
	 * libmysql has supported utf8mb4 since 5.5.3, same as the MySQL server.
	 * mysqlnd has supported utf8mb4 since 5.0.9.
	 */
	if ( false !== strpos( $client_version, 'mysqlnd' ) ) {
		$client_version = preg_replace( '/^\D+([\d.]+).*/', '$1', $client_version );
		return version_compare( $client_version, '5.0.9', '>=' );
	} else {
		return version_compare( $client_version, '5.5.3', '>=' );
	}

	return false;
	
}

function __db_version() {
	global $use_mysqli;
	if ( $use_mysqli ) {
		$server_info = mysqli_get_server_info( mysqli_connect("[[softdbhost]]","[[softdbuser]]","[[softdbpass]]","[[softdb]]"));
	} else {
		$server_info = mysql_get_server_info( mysql_connect("[[softdbhost]]","[[softdbuser]]","[[softdbpass]]","[[softdb]]"));
	}
	return preg_replace( '/[^0-9.].*/', '', $server_info );
}

$has_cap = __has_cap();

if(!empty($has_cap)){
	echo '<claim_utf8>utf8mb4</claim_utf8>';	
}

// Server detection

/**
 * Whether the server software is Apache or something else
 * @global bool $soft_is_apache
 */
$soft_is_apache = (strpos($_SERVER['SERVER_SOFTWARE'], 'Apache') !== false || strpos($_SERVER['SERVER_SOFTWARE'], 'LiteSpeed') !== false);

if(!empty($soft_is_apache)){
	echo '<soft_apache>soft_is_apache</soft_apache>';
}else{
	echo '<soft_apache>soft_not_apache</soft_apache>';	
}
	

?>