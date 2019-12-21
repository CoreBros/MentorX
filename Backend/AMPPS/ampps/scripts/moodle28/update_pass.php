<?php

$resp = __password_hash('[[admin_pass]]', 1, array());
echo '<update_pass>'.$resp.'</update_pass>';

function __password_hash($password, $algo, array $options = array()) {

global $error;
	if (!function_exists('crypt')) {
		$error[] = "Crypt must be loaded for password_hash to function";
		return null;
	}
	if (!is_string($password)) {
		$error[] = "password_hash(): Password must be a string";
		return null;
	}
	if (!is_int($algo)) {
		$error[] = "password_hash() expects parameter 2 to be long, " . gettype($algo) . " given";
		return null;
	}
	switch ($algo) {
		case 1:
			// Note that this is a C constant, but not exposed to PHP, so we don't define it here.
			$cost = 10;
			if (isset($options['cost'])) {
				$cost = $options['cost'];
				if ($cost < 4 || $cost > 31) {
					$error[] = "password_hash(): Invalid bcrypt cost parameter specified: ".$cost;
					return null;
				}
			}
			$required_salt_len = 22;
			$hash_format = sprintf("$2y$%02d$", $cost);
			break;
		default:
			$error[] = "password_hash(): Unknown password hashing algorithm: ".$algo;
			return null;
	}
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
		if (strlen($salt) < $required_salt_len) {
			$error[] = "password_hash(): Provided salt is too short: ".strlen($salt)." expecting ".$required_salt_len;
			return null;
		} elseif (0 == preg_match('#^[a-zA-Z0-9./]+$#D', $salt)) {
			$salt = str_replace('+', '.', base64_encode($salt));
		}
	} else {
		$buffer = '';
		$raw_length = (int) ($required_salt_len * 3 / 4 + 1);
		$buffer_valid = false;
		if (function_exists('mcrypt_create_iv')) {
			$buffer = mcrypt_create_iv($raw_length, MCRYPT_DEV_URANDOM);
			if ($buffer) {
				$buffer_valid = true;
			}
		}
		if (!$buffer_valid && function_exists('openssl_random_pseudo_bytes')) {
			$buffer = openssl_random_pseudo_bytes($raw_length);
			if ($buffer) {
				$buffer_valid = true;
			}
		}
		if (!$buffer_valid && file_exists('/dev/urandom')) {
			$f = @fopen('/dev/urandom', 'r');
			if ($f) {
				$read = strlen($buffer);
				while ($read < $raw_length) {
					$buffer .= fread($f, $raw_length - $read);
					$read = strlen($buffer);
				}
				fclose($f);
				if ($read >= $raw_length) {
					$buffer_valid = true;
				}
			}
		}
		if (!$buffer_valid || strlen($buffer) < $raw_length) {
			$bl = strlen($buffer);
			for ($i = 0; $i < $raw_length; $i++) {
				if ($i < $bl) {
					$buffer[$i] = $buffer[$i] ^ chr(mt_rand(0, 255));
				} else {
					$buffer .= chr(mt_rand(0, 255));
				}
			}
		}
		$salt = str_replace('+', '.', base64_encode($buffer));

	}
	$salt = substr($salt, 0, $required_salt_len);

	$hash = $hash_format . $salt;

	$ret = crypt($password, $hash);

	if (!is_string($ret) || strlen($ret) <= 13) {
		return false;
	}

	return $ret;
}

// We do not need this file any more
unlink('update_pass.php');
?>