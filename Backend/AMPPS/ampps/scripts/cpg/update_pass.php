<?php

function __pbkdf2($algorithm, $password, $salt, $count, $key_length, $raw_output = false){

    if (function_exists("hash_pbkdf2")) {
        // The output length is in NIBBLES (4-bits) if $raw_output is false!
        if (!$raw_output) {
            $key_length = $key_length * 2;
        }
        return hash_pbkdf2($algorithm, $password, $salt, $count, $key_length, $raw_output);
    }

    $hash_length = strlen(hash($algorithm, "", true));
    $block_count = ceil($key_length / $hash_length);

    $output = "";
    for($i = 1; $i <= $block_count; $i++) {
        // $i encoded as 4 bytes, big endian.
        $last = $salt . pack("N", $i);
        // first iteration
        $last = $xorsum = hash_hmac($algorithm, $last, $password, true);
        // perform the other $count - 1 iterations
        for ($j = 1; $j < $count; $j++) {
            $xorsum ^= ($last = hash_hmac($algorithm, $last, $password, true));
        }
        $output .= $xorsum;
    }

    if($raw_output)
        return substr($output, 0, $key_length);
    else
        return bin2hex(substr($output, 0, $key_length));
}

if (function_exists('random_bytes')) {
    	$vect = random_bytes(24);
    } else {
    	$vect = mcrypt_create_iv(24, MCRYPT_DEV_URANDOM);
    }
	
$salt = base64_encode($vect);

$resp = base64_encode(__pbkdf2("sha256", '[[admin_pass]]', $salt, 1000, 24, true));
echo $salt.'SOFTACULOUS'.$resp;

@unlink('update_pass.php');

?>