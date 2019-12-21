<?php

//////////////////////////////////////////////////////////////
//===========================================================
// pushtolive_lang.php
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
$l['no_info_file'] = 'The INFO.XML file could not be found! Please report this to the server administrator.';
$l['incompatible'] = 'The software requires a higher version of '.APP.'! Please report this to the server administrator.';
$l['no_install'] = 'The INSTALL.XML file could not be found! Please report this to the server administrator.';
$l['no_functions'] = 'The CLONE FUNCTIONS file could not be found!';
$l['no_space'] = 'You do not have sufficient space to install this software!';
$l['pushing'] = 'Pushing Installation to Live';
$l['staging'] = 'Staging';
$l['downloading'] = 'Downloading Package';
$l['cant_push_db'] = 'Could not push the database';
$l['fail_create'] = 'Failed to create the Directory';
$l['fail_create_datadir'] = 'Failed to create the Data Directory';
$l['cant_copy_dir'] = 'The directory cannot be copied as it is the home directory';
$l['cant_connect_mysql'] = 'Could not connect to the live site database, please check the Username/Password of your database. If changed, please update the details in '.APP.' installations using Edit Details';
$l['failed_backup'] = 'Could not create backup before pushing the installation to live';

$l['no_cron_min'] = 'No Cron minute was specified';
$l['no_cron_hour'] = 'No Cron hour was specified';
$l['no_cron_day'] = 'No Cron day was specified';
$l['no_cron_month'] = 'No Cron month was specified';
$l['no_cron_weekday'] = 'No Cron weekday was specified';
$l['wrong_cron_min'] = 'Cron minute is wrong. Valid values are 0-59 or a <b>*</b>';
$l['wrong_cron_hour'] = 'Cron hour is wrong. Valid values are 0-23 or a <b>*</b>';
$l['wrong_cron_day'] = 'Cron day is wrong. Valid values are 1-31 or a <b>*</b>';
$l['wrong_cron_month'] = 'Cron month is wrong. Valid values are 1-12 or a <b>*</b>';
$l['wrong_cron_weekday'] = 'Cron weekday is wrong. Valid values are 0-7 or a <b>*</b>';
$l['no_datadir'] = 'No Data directory was specified';
$l['datadir_exists'] = 'The data directory you submitted exists. Please specify another one.';
$l['no_decompress_data'] = 'There were some errors in decompressing the DATA files.';
$l['some_files_exist'] = 'Installation cannot proceed because the following files already exist in the target folder : ';
$l['delete_files'] = 'Please delete these files or choose another folder.';
$l['overwrite_exist'] = '<b>OR</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">Select the checkbox to overwrite all files and continue</span></b>';
$l['prog_pushtolive'] = 'Push To Live';
$l['prog_push_complete'] = 'Pushing to Live Completed';
$l['checking_data'] = 'Checking the submitted data';
$l['unzipping_files'] = 'Copying files and folders';
$l['unzipping_datadir'] = 'Unzipping data files';
$l['prop_db'] = 'Propagating the database';
$l['finishing_process'] = 'Finishing push to live process';
$l['wait_note'] = '<b>NOTE:</b> This may take 3-4 minutes. Please do not leave this page until the progress bar reaches 100%';

$l['no_php_install'] = 'PHP is not installed. To install it, please click <a href="'.$globals['index'].'act=apps&app=1">here</a>';
$l['no_mysql_install'] = 'MySQL is not installed. To install it, please click <a href="'.$globals['index'].'act=apps&app=16">here</a>';
$l['no_field'] = 'The field <b>&soft-1;</b> is required and must be filled out.';
$l['error_adddb'] = 'The database could not be created';
$l['error_adduser'] = 'There was an error in adding a user to the new database';
$l['no_package'] = 'The installation package could not be found!';
$l['no_decompress'] = 'There were some errors in decompressing the package files.';
$l['no_pushtolive_support'] = 'Push to Live is not supported for this script';
$l['invalid_script'] = 'Invalid Script ID';
$l['no_domain_found'] = 'No domain found. Please add a domain to install the script';
$l['no_staging_ins'] = 'This installation is not a staging installation';
$l['pushtolive_backup_note'] = 'Backup created before pushing the site to live';
$l['pushtolive_partial_backup_note'] = 'Backup created before pushing the site to live (Could be a partial backup)';

//Theme Strings
$l['<title>'] = APP.' - Push Installation to Live';
$l['info'] = 'Info';
$l['ins_softname'] = 'Software';
$l['ins_num'] = 'Installation Number';
$l['ins_ver'] = 'Version';
$l['ins_time'] = 'Installation Time';
$l['ins_path'] = 'Path';
$l['ins_url'] = 'URL';
$l['ins_admin_url'] = 'Admin URL';
$l['ins_db'] = 'Database Name';
$l['ins_dbuser'] = 'Database User';
$l['ins_dbpass'] = 'Database Password';
$l['ins_dbhost'] = 'Database Host';
$l['ins_datadir'] = 'Data Directory';
$l['ins_wwwdir'] = 'Web Directory';
$l['ins_wwwurl'] = 'Web Directory URL';
$l['ins_cron_command'] = 'Cron Command';
$l['cloned'] = 'The installation has been cloned successfully';
$l['clone_ins'] = 'Clone Installation Details';
$l['default_push'] = 'Default Push';
$l['custom_push'] = 'Customize Push';
$l['current_to_live'] = 'Set this installation as live';

$l['overwrite'] = 'Overwrite Files';
$l['database_exists'] = 'The database already exists. Please choose a different name.';
$l['no_softdomain'] = 'You did not choose the domain to install the software.';
$l['wrong_softdomain'] = 'The path of the domain you selected could not be found.';
$l['no_space'] = 'You do not have sufficient space to install this software!';
$l['no_softdb'] = 'The database was not posted.';

$l['softcopy_note'] = '<b>NOTE</b>: This software requires that it be installed using its own installation utility. Please visit the URL that will be shown once the files have been copied to complete the installation process.';
$l['softsubmit'] = 'Push to Live';
$l['congrats'] = 'Congratulations, the site was successfully pushed to live';
$l['succesful'] = 'Site has been successfully pushed to live at';
$l['admin_url'] = 'Administrative URL';
$l['setup_continue'] = 'However, setup will be completed by the software itself. To complete setup, please visit the following URL';
$l['enjoy'] = 'We hope the process was easy.';
$l['install_notes'] = 'The following are some important notes. It is highly recommended that you read them ';
$l['please_note'] = '<b>NOTE</b>: '.APP.' is just an automatic software installer and does not provide any support for the individual software packages. Please visit the software vendor\'s web site for support!';
$l['regards'] = 'Regards';
$l['softinstaller'] = APP.' Auto Installer';
$l['return'] = 'Return to Overview';

// These strings are for Softaculous Remote
$l['hostname'] = 'Database Hostname';
$l['hostname_exp'] = 'The MySQL hostname (mainly <b>localhost</b>)';
$l['dbusername'] = 'Database Username';
$l['dbusername_exp'] = 'The MySQL username';
$l['dbuserpass'] = 'Database Password';
$l['dbuserpass_exp'] = 'The password of the MySQL user';
$l['database_name_exp_aefer'] = 'Type the name of the database to be used for the installation';

$l['clone_tweet_sub'] = 'Tell your friends';
$l['not_in_free'] = '<b>&soft-1;</b> cannot be staged in the Free version of '.APP.'!';
$l['notify_admin'] = 'Please notify your Server Admin to purchase the premium version of '.APP.'!';

$l['soft_ins_exists'] = 'An installation already exists at &soft-1; as per our records. To clone the application at this location please uninstall the existing installation!';

$l['no_sclone'] = 'The CLONE.XML file could not be found! Please report this to the server administrator.';
$l['no_functions'] = 'The CLONE FUNCTIONS file could not be found! Please report this to the server administrator.';

$l['pushtolive_bg'] = 'Pushing to live has started in background';
$l['err_mysql_db'] = 'The MySQL database name is incorrect as the database could not be selected';
$l['err_mysql_db_live'] = 'The MySQL database name of the live installation is incorrect as the database could not be selected';

$l['push_btn'] = 'Default Options';
$l['custom_push_btn'] = 'Customize';
$l['push'] = 'Push to Live';
$l['prog_pushing'] = 'Pushing to Live';
$l['pushing_tweet'] = 'I just pushed my staging #[[SCRIPTNAME]] to live on [[softurl]] via #[[APP]] #[[TYPE]]';
$l['overwrite_files'] = 'Overwrite Files/Folders';
$l['overwrite_files_exp'] = 'If checked the live site files/folders will be overwritten';
$l['structural_change'] = 'Database Structure Changes';
$l['table_data_change'] = 'Data Changes in Tables';
$l['no_structural_change'] = 'There are no changes in structure';
$l['no_table_data_change'] = 'There are no changes in data';
$l['select_tables'] = 'Choose Database Changes';
$l['select_tables_exp'] = 'Select the database structure/data changes that you would like to push to the live site';
$l['check_all_edit'] = 'Check All';
$l['push_db'] = 'Push Full Database';
$l['push_db_exp'] = 'If checked then full database will be erased from live installation and current database will be imported to live site';
$l['backing_up'] = 'Backing up the live installation';
$l['push_views'] = 'Push Database Views';
$l['push_views_exp'] = 'If checked the database views will be pushed to live site';
$l['live_site_desc'] = 'Current Staging site will be pushed to your live site :';
$l['default_push_desc'] = 'This will replace all the files of your live installation with the ones in Staging installation and will erase the live database and import the database from your staging installation';
$l['corfirm_live'] = 'Are you sure you want to set this installation as live';

