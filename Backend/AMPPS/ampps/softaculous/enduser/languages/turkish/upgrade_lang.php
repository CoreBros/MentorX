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

$l['no_info_file'] = 'INFO.XML dosyasina ulasilamiyor. Lütfen sistem yöneticinize basvurun.';
$l['incompatible'] = ''.APP.'\'in güncellenmesi gerekiyor! Lütfen sistem yöneticinize basvurun.';
$l['no_upgrade'] = 'UPGRADE.XML dosyasi bulunamiyor. Lütfen sistem yöneticinize basvurun.';
$l['no_functions'] = 'YÜKLEME FONKSIYONLARINA ulasilamiyor! Lütfen sistem yöneticinize basvurun.';
$l['no_field'] = '<b>&soft-1;</b> alaninin doldurulmasi gerekiyor.';
$l['no_package'] = 'Yükleme paketi buluamadi!';
$l['no_decompress'] = 'Paketler açilirken bir hata olustu.';
$l['checking_data'] = 'Checking the submitted data';
$l['unzipping_files'] = 'Copying files and folders';
$l['unzipping_datadir'] = 'Unzipping data files';
$l['prop_db'] = 'Updating the database';
$l['finishing_process'] = 'Finishing Upgradation';
$l['wait_note'] = '<b>NOTE:</b> This may take 3-4 minutes. Please do not leave this page until the progress bar reaches 100%';
$l['cver_greater'] = 'The current version is greater than or equal to the version you are upgrading to. This is possible if you manually upgraded the installation. If this is not the case please check the following checkbox';
$l['force_upgrade'] = 'Forcefully Upgrade';
$l['backup_finish'] = 'Backup Finished';
$l['backup_fail_proceed'] = 'Some error occured during the Backup process. Proceed to upgradation ?';
$l['backing_up'] = 'Backing up the installation';
$l['no_space'] = 'You do not have sufficient space to upgrade this installation!';
$l['invalid_insid'] = 'Invalid Installation ID';
$l['invalid_script'] = 'Invalid Script ID';
$l['no_upgrade_support'] = 'Upgrade is not supported for this script';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['upgrade'] = 'Script Güncelleme';
$l['softins_url'] = 'URL';
$l['softins_path'] = 'Yol';
$l['softcopy_note'] = '<b>NOT</b>: Bu script güncelleme için kendi güncelleme programini kullanmaktadir. Güncelleme tamamlandiginda, lütfen kopyalanan dosyalari inceleyiniz.';
$l['softsubmit'] = 'Yükselt';
$l['congrats'] = 'Tebrikler, script basariyla yükseltildi';
$l['succesful'] = 'basariyla güncellenen';
$l['admin_url'] = 'Yönetim URL';
$l['setup_continue'] = 'Ancak, yükleme tamamlanmisolsa da asagidaki URL\'yi kontrol ediniz.';
$l['enjoy'] = 'Yükseltme isini daha da kolaylastirmayi umut ediyoruz.';
$l['upgrade_notes'] = 'Önemli notlar var. Okumanizi tavsiye ediyoruz. ';
$l['please_note'] = '<b>NOT</b>: '.APP.' sadece script yükleyici bir sistemdir. Yüklediginiz scriptler hakkinda destek vermez. Kurdugunuz/Kuracaginiz scriptler için o scriptin üreticisine basvurun!';
$l['regards'] = 'Saygilarimizi sunariz.';
$l['softinstaller'] = APP.' Aninda Yükleme';
$l['return'] = 'Genel Bakisa Geri Dön';
$l['note_backup'] = 'Sitenizi yükseltmeden önce <a href="'.$globals['index'].'act=backup&insid=&soft-1;">yedekleme</a>yi unutmayiniz.';
$l['alreadyupdated'] = 'Hmm ... it looks like the actual version of the installation is <b>&soft-1;</b> and not <b>&soft-2;</b>. <br />Click here to update '.APP.' records.';
$l['no_update_required'] = 'It looks like you don\'t need to update your installation as it is already uptodate';
$l['auto_backup'] = 'Would you like to take a Backup before Upgrading ?';
$l['select_version'] = 'Select a version to upgrade to';
$l['upgrading'] = 'Upgrading...';
$l['setup_partial'] = 'You are one more step away from completing the upgrade process';
$l['finish_update'] = 'Please visit below link to complete the upgrade process.';
$l['finish_up_sucess'] = 'After completing the upgrade process, you can access the &soft-1; installation here';
$l['upgrading_to'] = 'You will be Upgrading to : ';
$l['version'] = 'Version ';
$l['create_backup'] = 'Create Backup';
$l['create_backup_exp'] = 'Create a Backup before upgrading';
$l['prog_upgrading'] = 'Upgrading ';// Dont remove the trailing space
$l['prog_upgrade_complete'] = 'Upgrade Completed.';

$l['upgrade_tweet_sub'] = 'Tell your friends';

$l['not_in_free'] = '<b>&soft-1;</b> cannot be upgraded in the Free version of '.APP.'!';
$l['notify_admin'] = 'Please notify your Server Admin to purchase the premium version of '.APP.'!';

$l['backup_type'] = 'Backup Options';
$l['backup_type_exp'] = 'Choose full backup or advanced options';
$l['standard_backup'] = 'Full Backup (Default)';
$l['advanced_backup'] = 'Advanced Options';

$l['backup_dir'] = 'Backup Directory';
$l['backup_db'] = 'Backup Database';
$l['backup_wwwdir'] = 'Backup Web Directory';
$l['backup_datadir'] = 'Backup Data Directory';
$l['no_dir'] = 'The installation files are missing hence cannot proceed with the upgrade';
$l['wpc_return'] = 'Return to Installations';