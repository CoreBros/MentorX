<?php

//////////////////////////////////////////////////////////////
//===========================================================
// remote_backup_lang.php
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



$l['title'] = 'Backup Configuration';
$l['select_backup_server'] = 'Select Backup Server';
$l['backup_type'] = 'Backup Type';
$l['backup_now'] = 'Backup Now';
$l['skip_softaculous'] = 'Skip Softaculous Backup';
$l['skip_softaculous_sub'] = 'softaculous_backups directory will not be backed up';
$l['err_script'] = 'There were some errors while calling the script';
$l['connect_error'] = 'Unable to connect to the server';
$l['strt_backup'] = 'The backup process has been started in the background. <a href="'.$globals['index'].'act=webuzo_backup#backuplog">Check backup logs</a>';
$l['return_to_webuzo_backup'] = 'Return to Webuzo Backup Utility';