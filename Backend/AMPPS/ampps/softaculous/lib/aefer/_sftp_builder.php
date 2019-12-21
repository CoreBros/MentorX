<?php

die();

$path = 'C:\Users\server\Desktop\phpseclib1.0.14';

// NOTE : You will need to update the FUNCTION in phpseclib whichever it is that resolves the path to the CRYPT FILES
// In version 1.0.14 we have changed this in function phpseclib_resolve_include_path()

$files = [
	'Crypt/Base.php',
	'Crypt/Rijndael.php',
	'Crypt/AES.php',
	'Crypt/Blowfish.php',
	'Crypt/DES.php',
	'Crypt/Hash.php',
	'Crypt/Random.php',
	'Crypt/RC2.php',
	'Crypt/RC4.php',
	'Crypt/RSA.php',
	'Crypt/TripleDES.php',
	'Crypt/Twofish.php',
	'Math/BigInteger.php',
	'Net/SSH2.php',
	'Net/SFTP.php',
];

$content = '';

foreach($files as $k => $v){
	$content .= "\n\n".'// File : '.$v."\n".substr(file_get_contents($path.'/'.$v), 5);
}

$final = base64_encode(gzcompress($content));

$_sftp = file_get_contents(dirname(__FILE__).'/_sftp.php');
$_sftp = str_replace('<?php', '<?php

$class = \''.$final.'\';', $_sftp);

file_put_contents(dirname(__FILE__).'/_sftp.php', $_sftp);