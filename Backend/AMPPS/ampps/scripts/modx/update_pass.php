<?php
/**
 * A Compatibility library with PHP 5.5's simplified password hashing API.
 *
 * @author Anthony Ferrara <ircmaxell@php.net>
 * @license http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright 2012 The Authors
 */
 
if (!defined('PASSWORD_DEFAULT')){
	define('PASSWORD_BCRYPT', 1);
	define('PASSWORD_DEFAULT', PASSWORD_BCRYPT);
	define('PASSWORD_BCRYPT_DEFAULT_COST', 10);
}

$resp =  __password_hash('[[admin_pass]]', PASSWORD_DEFAULT);
echo '<update_pass>'.$resp.'</update_pass>';

/**
 * Hash the password using the specified algorithm
 *
 * @param string $password The password to hash
 * @param int    $algo     The algorithm to use (Defined by PASSWORD_* constants)
 * @param array  $options  The options for the algorithm to use
 *
 * @return string|false The hashed password, or false on error.
 */
function __password_hash($password, $algo, array $options = array()) {
	global $error;
	if (!function_exists('crypt')) {
		$error[] = "Crypt must be loaded for password_hash to function";
		return null;
	}
	if (is_null($password) || is_int($password)) {
		$password = (string) $password;
	}
	if (!is_string($password)) {
		$error[] = "password_hash(): Password must be a string";
		return null;
	}
	if (!is_int($algo)) {
		$error[] = "password_hash() expects parameter 2 to be long, " . gettype($algo) . " given";
		return null;
	}
	$resultLength = 0;
	switch ($algo) {
		case PASSWORD_BCRYPT:
			$cost = PASSWORD_BCRYPT_DEFAULT_COST;
			if (isset($options['cost'])) {
				$cost = $options['cost'];
				if ($cost < 4 || $cost > 31) {
					$error[] = "password_hash(): Invalid bcrypt cost parameter specified: ".$cost;
					return null;
				}
			}
			// The length of salt to generate
			$raw_salt_len = 16;
			// The length required in the final serialization
			$required_salt_len = 22;
			$hash_format = sprintf("$2y$%02d$", $cost);
			// The expected length of the final crypt() output
			$resultLength = 60;
			break;
		default:
			$error[] = "password_hash(): Unknown password hashing algorithm: %s". $algo;
			return null;
	}
	$salt_requires_encoding = false;
	if (isset($options['salt'])) {
		switch (gettype($options['salt'])) {
			case 'NULL':
			case 'boolean':
			case 'integer':
			case 'double':
			case 'string':
				$salt = (string) $options['salt'];
				break;
			case 'object':
				if (method_exists($options['salt'], '__tostring')) {
					$salt = (string) $options['salt'];
					break;
				}
			case 'array':
			case 'resource':
			default:
				$error[] = 'password_hash(): Non-string salt parameter supplied';
                        return null;
                }
                if (__strlen($salt) < $required_salt_len) {
			$error[] = "password_hash(): Provided salt is too short: ".strlen($salt)." expecting ".$required_salt_len;
                    return null;
                } elseif (0 == preg_match('#^[a-zA-Z0-9./]+$#D', $salt)) {
                    $salt_requires_encoding = true;
                }
            } else {
                $buffer = '';
                $buffer_valid = false;
                if (function_exists('mcrypt_create_iv') && !defined('PHALANGER')) {
                    $buffer = mcrypt_create_iv($raw_salt_len, MCRYPT_DEV_URANDOM);
                    if ($buffer) {
                        $buffer_valid = true;
                    }
                }
                if (!$buffer_valid && function_exists('openssl_random_pseudo_bytes')) {
                    $buffer = openssl_random_pseudo_bytes($raw_salt_len);
                    if ($buffer) {
                        $buffer_valid = true;
                    }
                }
                if (!$buffer_valid && @is_readable('/dev/urandom')) {
                    $f = fopen('/dev/urandom', 'r');
                    $read = __strlen($buffer);
                    while ($read < $raw_salt_len) {
                        $buffer .= fread($f, $raw_salt_len - $read);
                        $read = __strlen($buffer);
                    }
                    fclose($f);
                    if ($read >= $raw_salt_len) {
                        $buffer_valid = true;
                    }
                }
                if (!$buffer_valid || __strlen($buffer) < $raw_salt_len) {
                    $bl = __strlen($buffer);
                    for ($i = 0; $i < $raw_salt_len; $i++) {
                        if ($i < $bl) {
                            $buffer[$i] = $buffer[$i] ^ chr(mt_rand(0, 255));
                        } else {
                            $buffer .= chr(mt_rand(0, 255));
                        }
                    }
                }
                $salt = $buffer;
                $salt_requires_encoding = true;
            }
            if ($salt_requires_encoding) {
                // encode string with the Base64 variant used by crypt
                $base64_digits =
                    'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/';
                $bcrypt64_digits =
                    './ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

		$base64_string = base64_encode($salt);
		$salt = strtr(rtrim($base64_string, '='), $base64_digits, $bcrypt64_digits);
	}
	$salt = __substr($salt, 0, $required_salt_len);

	$hash = $hash_format . $salt;

	$ret = crypt($password, $hash);

	if (!is_string($ret) || __strlen($ret) != $resultLength) {
		return false;
	}

	return $ret;
}

/**
 * Count the number of bytes in a string
 *
 * We cannot simply use strlen() for this, because it might be overwritten by the mbstring extension.
 * In this case, strlen() will count the number of *characters* based on the internal encoding. A
 * sequence of bytes might be regarded as a single multibyte character.
 *
 * @param string $binary_string The input string
 *
 * @internal
 * @return int The number of bytes
 */
function __strlen($binary_string) {
	if (function_exists('mb_strlen')) {
		return mb_strlen($binary_string, '8bit');
	}
	return strlen($binary_string);
}

/**
 * Get a substring based on byte limits
 *
 * @see __strlen()
 *
 * @param string $binary_string The input string
 * @param int    $start
 * @param int    $length
 *
 * @internal
 * @return string The substring
 */
function __substr($binary_string, $start, $length) {
	if (function_exists('mb_substr')) {
		return mb_substr($binary_string, $start, $length, '8bit');
	}
	return substr($binary_string, $start, $length);
}

@unlink('update_pass.php');
?>