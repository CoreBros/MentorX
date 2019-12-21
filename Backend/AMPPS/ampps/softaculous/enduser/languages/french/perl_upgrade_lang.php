<?php

//////////////////////////////////////////////////////////////
//===========================================================
// upgrade_lang.php
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

$l['no_info_file'] = 'The INFO.XML file could not be found! Please report this to the server administrator.';
$l['incompatible'] = 'The software requires a higher version of '.APP.'! Please report this to the server administrator.';
$l['no_upgrade'] = 'The UPGRADE.XML file could not be found! Please report this to the server administrator.';
$l['no_functions'] = 'The UPGRADE FUNCTIONS file could not be found! Please report this to the server administrator.';
$l['no_field'] = 'The field <b>&soft-1;</b> is required and must be filled out.';
$l['no_package'] = 'The upgrade package could not be found!';
$l['no_decompress'] = 'There were some errors in decompressing the package files.';
$l['no_decompress_www'] = 'There were some errors in decompressing the Web files.';
$l['no_config_perl_path'] = 'Error occured while configuring CGI Files.';
$l['checking_data'] = 'Checking the submitted data';
$l['unzipping_files'] = 'Copying files and folders';
$l['unzipping_datadir'] = 'Unzipping data files';
$l['prop_db'] = 'Updating the database';
$l['finishing_process'] = 'Finishing Upgradation';
$l['wait_note'] = '<b>NOTE:</b> This may take 3-4 minutes. Please do not leave this page until the progress bar reaches 100%';
$l['no_space'] = 'You do not have sufficient space to upgrade this installation!';
$l['invalid_insid'] = 'Invalid Installation ID';
$l['invalid_script'] = 'Invalid Script ID';
$l['not_perl_script'] = 'This script is not in PERL';
$l['no_perl_upgrade'] = 'Upgrade is not supported for this script';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['upgrade'] = 'Software Upgrade';
$l['softins_url'] = 'URL';
$l['softins_path'] = 'Path';
$l['softcopy_note'] = '<b>NOTE</b>: This software will perform an upgrade using its own upgrade utility. To complete the upgrade, please visit the URL that will be shown once the files have been copied.';
$l['softsubmit'] = 'Upgrade';
$l['congrats'] = 'Congratulations, the software was upgraded successfully';
$l['succesful'] = 'has been successfully upgraded at';
$l['admin_url'] = 'Admin URL';
$l['setup_continue'] = 'However, the upgrade will be completed by the software itself, so please visit the following URL';
$l['enjoy'] = 'We hope the upgrade process was easy.';
$l['upgrade_notes'] = 'The following are some important notes. It is highly recommended that you read them ';
$l['please_note'] = '<b>NOTE</b>: '.APP.' is just an auto installer and does not provide any support for the software. Please visit the software vendor\'s web site for support!';
$l['regards'] = 'Regards';
$l['softinstaller'] = APP.' Auto Installer';
$l['return'] = 'Return to Overview';
$l['note_backup'] = 'Its recommended that you take a <a href="'.$globals['index'].'act=backup&insid=&soft-1;">backup</a> of the installation before upgrading.';
$l['create_backup'] = 'Créer une sauvegarde';
$l['create_backup_exp'] = 'Créer une sauvegarde avant la mise à niveau';
$l['prog_upgrading'] = 'Upgrading ';// Dont remove the trailing space
$l['prog_upgrade_complete'] = 'Mise à niveau terminée.';

$l['upgrade_tweet_sub'] = 'Tell your friends';
$l['not_in_free'] = '<b>&soft-1;</b> cannot be upgraded in the Free version of '.APP.'!';
$l['notify_admin'] = 'Please notify your Server Admin to purchase the premium version of '.APP.'!';

