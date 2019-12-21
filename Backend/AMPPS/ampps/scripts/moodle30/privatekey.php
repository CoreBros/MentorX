<?php

// We do not need this file any more
@unlink('privatekey.php');

$ltikey = __mod_lti_verify_private_key();

echo '<kid>'.$ltikey['kid'].'</kid>';
echo '<privatekey>'.$ltikey['privatekey'].'</privatekey>';

function __mod_lti_verify_private_key() {
	global $error;
	
	if (!function_exists('openssl_random_pseudo_bytes')) {
		$error[] = "openssl must be loaded for openssl_random_pseudo_bytes to function";
		return null;
	}
	
	// Create the private key.
	$kid = bin2hex(openssl_random_pseudo_bytes(10));
	
	$config = array(
		"digest_alg" => "sha256",
		"private_key_bits" => 2048,
		"private_key_type" => OPENSSL_KEYTYPE_RSA,
	);
	$res = openssl_pkey_new($config);
	openssl_pkey_export($res, $privatekey);

	return array(
		'kid' => $kid,
		'privatekey' => $privatekey,
	);
}

?>