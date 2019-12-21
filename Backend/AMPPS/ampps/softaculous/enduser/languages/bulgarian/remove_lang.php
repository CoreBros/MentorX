<?php

//////////////////////////////////////////////////////////////
//===========================================================
// remove_lang.php
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

$l['no_ins'] = 'No installation was submitted';
$l['wrong_ins_title'] = 'Wrong Installation ID';
$l['wrong_ins'] = 'The installation ID you submitted does not exist';
$l['cant_remove_dir'] = 'The directory cannot be removed as it is the home directory. Please uncheck the <b>Remove Directory</b> option to continue without removing the directory.';
$l['cant_remove_wwwdir'] = 'The WEB directory cannot be removed as it is the home directory. Please uncheck the <b>Remove Web Directory</b> option to continue without removing the web directory.';
$l['mail_rem_ins'] = 'A installation of &soft-1; has been removed. Following were the details of the installation : ';
$l['mail_path'] = 'Path';
$l['mail_url'] = 'URL';
$l['mail_db'] = 'MySQL Database';
$l['mail_dbuser'] = 'MySQL DB User';
$l['mail_dbhost'] = 'MySQL DB Host';
$l['mail_dbpass'] = 'MySQL DB Password';
$l['mail_time'] = 'Time of Installation';
$l['mail_rem_time'] = 'Time of Removal';
$l['mail_subject'] = 'Removed Installation of &soft-1;';
$l['mail_cron_command'] = 'CRON Job';
$l['mail_datadir'] = 'Data Directory';
$l['mail_wwwdir'] = 'Web Directory';
$l['checking_data'] = 'Checking the submitted data';
$l['rem_db'] = 'Removing the Database/Database User';
$l['rem_dir'] = 'Removing the Directory';
$l['rem_datadir'] = 'Removing the Data Directory';
$l['rem_cron'] = 'Removing the Cron Jobs';
$l['finishing_process'] = 'Removed Successfully';
$l['wait_note'] = '<b>NOTE:</b> This may take 3-4 minutes. Please do not leave this page until the progress bar reaches 100%';


//Theme Strings
$l['<title>'] = APP.' - Remove';
$l['info'] = 'Info';
$l['ins_softname'] = 'Software';
$l['ins_num'] = 'Installation Number';
$l['ins_ver'] = 'Version';
$l['ins_time'] = 'Installation Time';
$l['ins_path'] = 'Path';
$l['ins_url'] = 'URL';
$l['ins_db'] = 'Database Name';
$l['ins_dbuser'] = 'Database User';
$l['ins_dbpass'] = 'Database Password';
$l['ins_dbhost'] = 'Database Host';
$l['remove_ins'] = 'Remove a Installation';
$l['remove_dir'] = 'Remove Directory';
$l['remove_dir_exp'] = 'If you check this the entire folder will be deleted';
$l['remove_db'] = 'Remove Database';
$l['remove_db_exp'] = 'If checked the database will be deleted';
$l['remove_dbuser'] = 'Remove Database User';
$l['remove_dbuser_exp'] = 'If checked the database user will also be deleted';
$l['remove_conf'] = 'These actions are irreversible! \n Are you sure you want to remove this installation ?';
$l['uninstalled'] = 'The installation was removed successfully';
$l['removeins'] = 'Remove Installation';
$l['ins_cron_command'] = 'Cron Command';
$l['remove_datadir'] = 'Remove Data Directory';
$l['remove_datadir_exp'] = 'If checked the Data directory will be removed.';
$l['ins_datadir'] = 'Data Directory';
$l['remove_wwwdir'] = 'Remove Web Directory';
$l['remove_wwwdir_exp'] = 'If checked the web directory will be removed.';
$l['ins_wwwdir'] = 'Web Directory';
$l['return'] = 'Return to Overview';
$l['prog_removing'] = 'Removing ';// Dont remove the trailing space
$l['prog_remove_complete'] = 'Installation Removed.';
$l['disabled_script_info'] = 'No information available as this script has been disabled.';

$l['wpc_return'] = 'Return to Installations';