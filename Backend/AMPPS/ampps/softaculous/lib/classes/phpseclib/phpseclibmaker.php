<?php

$files = array(	'Net/SSH2.php',
				'Net/SFTP.php',
				'Crypt/AES.php',
				'Crypt/Base.php',
				'Crypt/Blowfish.php',
				'Crypt/DES.php',
				'Crypt/Hash.php',
				'Crypt/Random.php',
				'Crypt/RC2.php',
				'Crypt/RC4.php',
				'Crypt/Rijndael.php',
				'Crypt/RSA.php',
				'Crypt/TripleDES.php',
				'Crypt/Twofish.php',
				'Math/BigInteger.php');
				
				//$files = array_reverse($files);

$string = '';				
foreach($files as $k){
	$string .= '//'.$k."\n".substr(file_get_contents($k), 5);
}

$zip = gzcompress($string);

file_put_contents('combine.php', $string);
file_put_contents('zip.psl', $zip);
file_put_contents('psl.class', base64_encode($zip));

