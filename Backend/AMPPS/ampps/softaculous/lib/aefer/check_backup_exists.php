<?php

error_reporting(E_ALL);

function softdie($txt){
	global $dbexist, $datadir, $wwwdir, $ins;
	global $result;

	$array = array();
	$array['settings'] = $GLOBALS['settings'];
	$array['result'] = $txt;
	
	// Was there an error ?
	if(!empty($GLOBALS['error'])){
		$array['error'] = $GLOBALS['error'];
	}
	
	echo '<aefer>'.base64_encode(serialize($array)).'</aefer>';die();
}

//@unlink(__FILE__); // More has to be done here !

global $user, $globals, $theme, $softpanel, $settings, $iscripts, $catwise, $error;

// The data
$data = unserialize(base64_decode('[[[data]]]'));

$user = $data['user'];
$basename= $data['basename'];
$user= $data['user'];	
$globals = $data['globals'];	
$_insid = $data['_insid'];	
$backupinfo = $data['backupinfo'];	
$ins = $data['ins'];
$settings = $data['settings'];

// Is the backup file there ?
if(!file_exists($backupinfo['path'].'/'.$backupinfo['name'].'.tar.gz')){
	$error[] = 'Cannot find the Backup';
	softdie('nobackup');
}

if(empty($ins)){
			
	//r_print($tmp);
	$ins = $user['ins'][$backupinfo['insid']] = $backupinfo;
	$soft = $ins['sid'];
	//r_print($ins);
	
	if(!empty($ins['backup_db'])){
		$create_db = true;
	}

}

// If the installation is DELETED and I have to restore then the backup INFO should be there AND the backup file as well
if(!is_array($user['ins'][$_insid[1]])){
	$error[] = 'Installation could not be found in Remote Softaculous';
	softdie('noinstinfo');
}
		
$dbexist = (!empty($backupinfo['backup_db']) ? 'softsql.sql' : '');
$datadir = (!empty($backupinfo['backup_datadir']) ? true : '');
$wwwdir = (!empty($backupinfo['backup_wwwdir']) ? true : '');

softdie('DONE');
