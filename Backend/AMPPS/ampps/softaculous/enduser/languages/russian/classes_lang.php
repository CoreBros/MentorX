<?php

//////////////////////////////////////////////////////////////
//===========================================================
// js_lang.php
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

$l['no_info_file'] = 'No class for the specified ID';
$l['incompatible'] = 'The software requires a higher version of '.APP.'! Please report this to the server administrator.';
$l['no_install'] = 'The INSTALL.XML file could not be found! Please report this to the server administrator.';
$l['no_functions'] = 'The INSTALL FUNCTIONS file could not be found! Please report this to the server administrator.';
$l['no_softdomain'] = 'You did not choose the domain to install the software.';
$l['wrong_softdomain'] = 'The path of the domain you selected could not be found.';
$l['no_space'] = 'You do not have sufficient space to install this software!';
$l['no_field'] = 'The field <b>&soft-1;</b> is required and must be filled out.';
$l['no_package'] = 'The installation package could not be found!';
$l['no_decompress'] = 'There were some errors in decompressing the package files.';
$l['mail_new_ins'] = 'A new installation of &soft-1; has been completed. The details of the installation are shown below:';
$l['mail_path'] = 'Path';
$l['mail_url'] = 'URL';
$l['mail_time'] = 'Time of Installation';
$l['mail_subject'] = 'New Installation of &soft-1;';
$l['some_files_exist'] = 'Installation cannot proceed because the following files already exist in the target folder : ';
$l['delete_files'] = 'Please delete these files or choose another folder.';
$l['checking_data'] = 'Checking the submitted data';
$l['unzipping_files'] = 'Copying files and folders';
$l['unzipping_datadir'] = 'Unzipping data files';
$l['prop_db'] = 'Propagating the database';
$l['finishing_process'] = 'Finishing Installation';
$l['wait_note'] = '<b>NOTE:</b> This may take 3-4 minutes. Please do not leave this page until the progress bar reaches 100%';
$l['cant_download'] = 'Can not download the ZIP file.';
$l['softdirectory_invalid'] = 'The directory you typed is invalid.';
$l['softdirectory_exists'] = 'The directory you typed already exists! Please type in another directory name.';
$l['ins_emailto'] = 'Email installation details to';
$l['disable_classes'] = 'PHP Classes are disabled by admin or you are using '.APP.' Free version';
$l['invalid_class_id'] = 'Invalid Class ID';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['install'] = 'Install';
$l['overview'] = 'Readme';
$l['features'] = 'Features';
$l['demo'] = 'Demo';
$l['file'] = 'Files';
$l['ratings'] = 'Ratings';
$l['import'] = 'Import';
$l['software_ver'] = 'Version';
$l['space_req'] = 'Space Required';
$l['available_space'] = 'Available Space';
$l['req_space'] = 'Required Space';
$l['mb'] = 'MB';
$l['software_support'] = 'Software Support';
$l['support_link'] = 'Visit Support Site';
$l['support_note'] = 'Note: Softaculous does not provide support for any software.';
$l['setup'] = 'Software Setup';
$l['choose_domain'] = 'Choose Domain';
$l['choose_domain_exp'] = 'Please choose the domain to install the software.';
$l['in_directory'] = 'In Directory';
$l['in_directory_exp'] = 'The directory is relative to your home path and will be <b>created if it does not exist</b>. e.g. To install at &soft-1;/dir just type <b>dir</b>. To install only in &soft-1;/ leave this empty.';
$l['aef_in_directory_exp'] = 'The directory is relative to your home path and will be <b>created if it does not exist</b>. e.g. To install at <span id="aef_span_lang">&soft-1;</span>/dir just type <b>dir</b>. To install only in <span id="aef_span_lang_a">&soft-1;</span>/ leave this empty.';
$l['softsubmit'] = 'Install';
$l['congrats'] = 'Congratulations, the software was installed successfully';
$l['succesful'] = 'has been successfully installed at';
$l['enjoy'] = 'We hope the installation process was easy.';
$l['install_notes'] = 'The following are some important notes. It is highly recommended that you read them ';
$l['please_note'] = '<b>NOTE</b>: '.APP.' is just an automatic software installer and does not provide any support for the individual software packages. Please visit the software vendor\'s web site for support!';
$l['regards'] = 'Regards';
$l['softinstaller'] = APP.' Auto Installer';
$l['return'] = 'Return to Overview';
$l['current_ins'] = 'Current Installations';
$l['link'] = 'Link';
$l['ins_time'] = 'Installation Time';
$l['version'] = 'Version';
$l['upd_to'] = 'Upgrade to Version';
$l['remove'] = 'Remove';
$l['no_info'] = 'No Info';
$l['ratesoft'] = 'Rate this Script';
$l['reviews'] = 'Reviews';
$l['reviewsoft'] = 'Write a Review';
$l['readreviews'] = 'Read Reviews';
$l['reviews_exp'] = 'Read reviews written by other users and';
$l['ins_type'] = 'Type of Install';
$l['ins_type_exp'] = '<b>Original Package</b> - Package as available from the Scripts Website. <br /> <b>Just Library Files</b> - Just the Javascript Library files.';
$l['ori_pack'] = 'Original Package';
$l['just_lib'] = 'Just Library Files';
$l['overwrite_exist'] = '<b>OR</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">Select the checkbox to overwrite all files and continue</span></b>';
$l['overwrite'] = 'Overwrite Files';
$l['choose_protocol'] = 'Choose Protocol';
$l['choose_protocol_exp'] = 'If your site has SSL, then please choose the HTTPS protocol.';
$l['downloading'] = 'Downloading Package';
$l['installing'] = 'Installing Script';
$l['files'] = 'Files & Folders';
$l['modified_time'] = 'Last Modified';
$l['size'] = 'Size';
$l['classes_ins_error'] = 'Error occured while saving the Installation.';
$l['del_insid'] = 'Are you sure you wish to remove the selected installations ? The action will be irreversible. \nNo further confirmations will be asked.';
$l['rem_inst_id'] = 'Removing Installation - ';
$l['no_sel_inst'] = 'No installation(s) selected to remove.';
$l['inst_remvd'] = 'The selected installation(s) have been removed. The page will now be reloaded !';
$l['go'] = 'Go';
$l['download_zip'] = 'Download All Files ';
$l['software_category'] = 'Category';
$l['adv_option'] = 'Advanced Options';
$l['disable_notify_update'] = 'Disable Update Notifications Emails';
$l['exp_disable_notify_update'] = 'If checked you will not receive an email notification for updates available for this installation.';
$l['prog_installing'] = 'Installing ';// Dont remove the trailing space
$l['prog_install_complete'] = 'Installation Completed.';

$l['install_tweet_sub'] = 'Tell your friends';
$l['select_domain'] = 'Select Domain';
$l['with_selected'] = 'With Selected';
$l['download'] = 'Download';

