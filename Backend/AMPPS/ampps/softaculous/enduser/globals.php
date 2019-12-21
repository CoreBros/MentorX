<?php

//////////////////////////////////////////////////////////////
//===========================================================
// globals.php
//===========================================================
// SOFTACULOUS 
// Version : 1.1
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Date:       10th Jan 2009
// Time:       21:00 hrs
// Site:       http://www.softaculous.com/ (SOFTACULOUS)
// ----------------------------------------------------------
// Please Read the Terms of use at http://www.softaculous.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Inc.
//===========================================================
//////////////////////////////////////////////////////////////

if(!defined('SOFTACULOUS')){

	die('Hacking Attempt');

}

@ini_set('safe_mode', '0');

$globals['hf_loaded'] = 0;
$globals['charset'] = 'UTF-8';
$globals['showntimetaken'] = 1;
$globals['ins_num'] = 0;
$globals['version'] = '5.3.2';
$globals['license'] = (!empty($globals['license']) ? $globals['license'] : '00000-00000-00000-00000-00000');//Dummy License
$globals['mysqlpath'] = '/usr/bin/mysql';
$globals['dirchmod'] = 0755;

// The default path for Softimages
$globals['softimages_path'] = $globals['enduser'].'/softimages';

// Load the override images mirror (if any)
if(!empty($globals['override_mirror_images'])){
	$globals['mirror_images'] = $globals['override_mirror_images'];
}else{
	$globals['mirror_images'] = 'https://images.softaculous.com/'; // Images URL
}

// CLASSES API URL FROM WHERE IT WILL TAKE THE DATA
$globals['api_nuphp'] = 'https://apinuphp.softaculous.com/';
$globals['api_nuphp_nossl'] = 'http://apinuphp.softaculous.com/';
$globals['api_nuphp2'] = 'https://apinuphp2.softaculous.com/';
//$globals['api_nuphp'] = 'http://192.168.1.10/soft/www/api/nuphp/';
$globals['api_pfx'] = 'https://s2.softaculous.com/a/popularfx/';
$globals['s2api_pfx'] = 'https://s2.softaculous.com/a/popularfx/';
$globals['apipfx'] = 'https://a.softaculous.com/popularfx/';
//$globals['apipfx'] = 'http://192.168.1.10/soft/api/popularfx/';
//$globals['api_pfx'] = 'http://192.168.1.10/soft/api/popularfx/';

$globals['paypal_url'] = 'https://www.paypal.com/cgi-bin/webscr';
$globals['paypal_business'] = 'sales@popularfx.com';
$globals['paypal_return'] = 'https://www.softaculous.com/clients?ca=pfxpayment';

// Disabled Classes
$globals['disable_classes'] = 1;

// This is for extraordinary write permissions like making a Directory Writable
// If no suPHP is detected write permissions would be 0777
// If suPHP is detected we change it to 0755
$globals['odc'] = 0777;//Octal Directory CHMOD
$globals['sdc'] = '0777';//String Directory CHMOD
$globals['ofc'] = 0777;//Octal File CHMOD
$globals['sfc'] = '0777';//String File CHMOD
$globals['ocfc'] = 0644;//Octal Config File CHMOD
$globals['scfc'] = '0644';//String Config File CHMOD
$globals['efc'] = 0755;//Octal Executable File CHMOD
$globals['os'] = (strtoupper(substr(PHP_OS, 0, 3)) == 'WIN' ? 'windows' : (strtoupper(substr(PHP_OS, 0, 3)) == 'DAR' ? 'darwin' : 'linux'));

// This is added here because the correct permissions should be loaded when in CLI mode
// Config file CHMOD
if(strlen($globals['chmod_conf_file']) > 0){
	$globals['ocfc'] = octdec($globals['chmod_conf_file']);//Octal
	$globals['scfc'] = $globals['chmod_conf_file'];//String
}

// Is there a manual overide for files
if(strlen($globals['chmod_files']) > 0){
	$globals['ofc'] = octdec($globals['chmod_files']);//Octal
	$globals['sfc'] = $globals['chmod_files'];//String
}

// Is there a manual overide for directories
if(strlen($globals['chmod_dir']) > 0){
	$globals['odc'] = octdec($globals['chmod_dir']);//Octal
	$globals['sdc'] = $globals['chmod_dir'];//String
}

// Disable error reporting if not debug mode
if(empty($globals['debug_mode'])){
	error_reporting(0);
	if(function_exists('ini_set')){
		ini_set('display_errors', 'Off');
		ini_set('error_reporting', 'E_ALL & ~E_NOTICE & ~E_DEPRECATED');
	}
}

// Update the includes path as per the current PHP version and it respective encoded files

if(version_compare(PHP_VERSION, '7.1.0', '>=') && is_dir($globals['path'].'/includes71')){
	$includes_path = 'includes71';
}elseif(version_compare(PHP_VERSION, '5.6.0', '>=') && is_dir($globals['path'].'/includes56')){
	$includes_path = 'includes56';
}elseif(version_compare(PHP_VERSION, '5.3.0', '>=') && is_dir($globals['path'].'/includes53')){
	$includes_path = 'includes53';
}elseif(is_dir($globals['path'].'/includes52')){
	$includes_path = 'includes52';
}else{
	$includes_path = 'includes';
}

$globals['includes_path'] = $globals['path'].'/'.$includes_path;
$globals['mainfiles'] = $globals['includes_path'].'/main';
$globals['adminfiles'] = $globals['mainfiles'].'/admin';
$globals['clifiles'] = $globals['includes_path'].'/cli';
