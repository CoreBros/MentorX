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

$l['no_info_file'] = 'INFO.XML dosyasına ulaşılamıyor. Lütfen sistem yöneticinize başvurun.';
$l['incompatible'] = ''.APP.'\'ın güncellenmesi gerekiyor! Lütfen sistem yöneticinize başvurun.';
$l['no_install'] = 'INSTALL.XML dosyasına ulaşılamıyor! Lütfen sistem yöneticinize başvurun.';
$l['no_functions'] = 'YÜKLEME FONKSİYONLARINA ulaşılamıyor! Lütfen sistem yöneticinize başvurun.';
$l['no_softdomain'] = 'Scriptin yüklenmesi için domain seçmediniz.';
$l['wrong_softdomain'] = 'Seçtiğiniz kurulum yolu bulunamadı.';
$l['no_space'] = 'Bu scipriti yüklemek için gerekli alan yok!';
$l['no_field'] = '<b>&soft-1;</b> alanının doldurulması gerekiyor.';
$l['no_package'] = 'Yükleme paketi buluamadı!';
$l['no_decompress'] = 'Paketler açılırken bir hata oluştu.';
$l['mail_new_ins'] = '&soft-1; kurulumu tamamlandı. Detaylar aşağıda:';
$l['mail_path'] = 'Yol';
$l['mail_url'] = 'URL';
$l['mail_time'] = 'Kurulma Zamanı';
$l['mail_subject'] = '&soft-1; Kurulumu';
$l['some_files_exist'] = 'Kurulum tamamlanamadı. Dizinde şu dosyalar zaten var : ';
$l['delete_files'] = 'Lütfen bu dosyaları silin veya başka bir kurulum dizini seçiniz.';
$l['checking_data'] = 'Checking the submitted data';
$l['unzipping_files'] = 'Copying files and folders';
$l['unzipping_datadir'] = 'Unzipping data files';
$l['prop_db'] = 'Propagating the database';
$l['finishing_process'] = 'Finishing Installation';
$l['wait_note'] = '<b>NOTE:</b> This may take 3-4 minutes. Please do not leave this page until the progress bar reaches 100%';
$l['softdirectory_invalid'] = 'The directory you typed is invalid.';
$l['err_domain'] = 'No Domain';
$l['err_domain_admin'] = 'This User does not have any Domain. Please contact Administrator.';
$l['no_sel_inst'] = 'No selected installations';
$l['del_insid'] = 'Are you sure you want to delete selected installations ?';
$l['ins_emailto'] = 'Email installation details to';
$l['no_https'] = 'A trusted SSL Certificate was not found';
$l['err_dbprefix'] = 'Table Prefix is invalid. Valid values are a-z or A-Z or 0-9 or _';
$l['auto_backup_not_allowed'] = 'The auto backup frequency you chose is invalid';
$l['invalid_script'] = 'Invalid Script ID';
$l['not_js_script'] = 'This script is not JavaScript';
$l['no_domain_found'] = 'No domain found. Please add a domain to install the script';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['install'] = 'Kurulum';
$l['overview'] = 'Genel Bakış';
$l['features'] = 'Özellikler';
$l['demo'] = 'Demo';
$l['ratings'] = 'Puanlar';
$l['import'] = 'İçeri AL';
$l['software_ver'] = 'Versiyon';
$l['space_req'] = 'Gerekli Alan';
$l['available_space'] = 'Kullanılabilir Alan';
$l['req_space'] = 'Gerekli Alan';
$l['mb'] = 'MB';
$l['software_support'] = 'Scriptin Desteği';
$l['support_link'] = 'Destek Sitesine Gidin';
$l['support_note'] = 'Not: Softaculous herhangi bir script için destek vermez.';
$l['setup'] = 'Ayarları Yap';
$l['choose_domain'] = 'Domain Seçin';
$l['choose_domain_exp'] = 'Yükleme yapılacak klasörü seçiniz.';
$l['in_directory'] = 'Yükleme dizini';
$l['in_directory_exp'] = 'Dizin veya alt alan adı yoksa <b>oluşturulmaya çalışılacaktır</b>. örnek: http://mydomain/dir/ şeklinde kurmak için <b>dir</b> yazın. http://mydomain/ şeklinde kurmak için boş bırakın.';
$l['softsubmit'] = 'Yükle';
$l['congrats'] = 'Tebrikler, kurulum başarılı.';
$l['succesful'] = 'başarıyla kuruldu';
$l['enjoy'] = 'Kurulumun daha da kolay olması için umut ediyoruz.';
$l['install_notes'] = 'Önemli notlar var. Okumanızı tavsiye ediyoruz. ';
$l['please_note'] = '<b>NOT</b>: '.APP.' sadece script yükleyici bir sistemdir. Yüklediğiniz scriptler hakkında destek vermez. Kurduğunuz/Kuracağınız scriptler için o scriptin üreticisine başvurun!';
$l['regards'] = 'Saygılarımızı Sunarız';
$l['softinstaller'] = APP.' Anında Yükleme';
$l['return'] = 'Genel Bakışa Geri Dön';
$l['current_ins'] = 'Mevcut Kurulumlar';
$l['link'] = 'Link';
$l['ins_time'] = 'Kurulum Zamanı';
$l['version'] = 'Versiyon';
$l['upd_to'] = 'Versyion GÜncelle';
$l['remove'] = 'Sil';
$l['no_info'] = 'Bilgi Yok';
$l['ratesoft'] = 'Scripte Puan Ver';
$l['reviews'] = 'Yorumlar';
$l['reviewsoft'] = 'Yorum Yaz';
$l['readreviews'] = 'Yorum Oku';
$l['reviews_exp'] = 'Diğer kullanıcıların yorumlarını gör';
$l['ins_type'] = 'Kurulum Tipi';
$l['ins_type_exp'] = '<b>Orijinal Paket</b> - Scriptin websitesindeki paket. <br /> <b>Kütüphane Dosyaları</b> - Sadece Kütüphane Dosyaları.';
$l['ori_pack'] = 'Orijinal Paket';
$l['just_lib'] = 'Sadece Kütüphane Dosyaları';
$l['overwrite_exist'] = '<b>YA DA</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">tüm  dosyaların üzerine yazılmasını onaylamak için lütfen seçiniz.</span></b>';
$l['overwrite'] = 'Dosyaların Üzerine Yaz';
$l['choose_protocol'] = 'Protokol Seçiniz';
$l['choose_protocol_exp'] = 'Sitenizin SSL\'si varsa, lütfen HTTPS protokolünü seçiniz.';
$l['clone'] = 'Clone';
$l['options'] = 'Options';
$l['downloading'] = 'Downloading Package';
$l['installing'] = 'Installing Script';
$l['go'] = 'Go';
$l['rem_inst_id'] = 'Removing Installation - ';
$l['inst_remvd'] = 'The selected installation(s) have been removed. The page will now be reloaded !';
$l['release_date'] = 'Release Date';
$l['adv_option'] = 'Advanced Options';
$l['disable_notify_update'] = 'Disable Update Notification Emails';
$l['exp_disable_notify_update'] = 'If checked you will not receive an email notification for updates available for this installation.';
$l['prog_installing'] = 'Installing '; // Dont remove trailing space
$l['prog_install_complete'] = 'Installation Completed.';

$l['auto_backup'] = 'Automated backups';
$l['exp_auto_backup'] = APP.' will take automated backups via CRON as per the frequency you select';
$l['auto_backup_rotation'] = 'Backup Rotation';
$l['exp_auto_backup_rotation'] = 'If the backup rotation limit is reached '.APP.' will delete the oldest backup for this installation and create a new backup. The backups will utilize your space so choose the backup rotation as per the space available on your server';
$l['no_backup'] = 'Don\'t backup';
$l['daily'] = 'Once a day';
$l['weekly'] = 'Once a week';
$l['monthly'] = 'Once a month';
$l['unlimited'] = 'Unlimited';
$l['changelog'] = 'Changelog';
$l['act_upgrade'] = 'Recently Upgraded';
$l['act_clone'] = 'Recently Cloned';
$l['act_backup'] = 'Recently Backed up';
$l['act_install'] = 'Recently Installed';
$l['act_edit'] = 'Recently Edited';
$l['act_import'] = 'Recently Imported';
$l['act_restore'] = 'Recently Restored';
$l['ampps_download'] = 'You can develop <b>&soft-1;</b> on your <b>desktop</b> using our Free developer tool Softaculous AMPPS. Click <a href="http://www.ampps.com/download?give=latest" target="_blank"><b>here</b></a> to download <a href="http://www.ampps.com/download?give=latest" target="_blank"><img src="https://images.softaculous.com/ampps.gif" height="25" /></a>';

$l['install_tweet_sub'] = 'Tell your friends about your new site';
$l['err_auto_backup_limit'] = 'The auto backup rotation cannot be more than <b>&soft-1;</b>';
$l['select_domain'] = 'Select Domain';
$l['with_selected'] = 'With Selected';
$l['not_in_free'] = '<b>&soft-1;</b> cannot be installed in the Free version of '.APP.'!';
$l['notify_admin'] = 'Please notify your Server Admin to purchase the premium version of '.APP.'!';
$l['related_scripts'] = 'Related Scripts';
$l['backup'] = 'Backup';
$l['editdetail'] = 'Edit Details';
$l['install_now'] = 'Instalar ahora';
$l['my_apps'] = 'Mis aplicaciones';

$l['bad'] = 'Bad';
$l['good'] = 'Good';
$l['strong'] = 'Strong';
$l['short'] = 'Short';
$l['strength_indicator'] = 'Strength Indicator';

$l['backup_location'] = 'Backup Location';
$l['backup_location_exp'] = 'Choose the backup location to be used while backing up this installation';
$l['default'] = 'Default';
$l['invalid_backup_location'] = 'Backup location submitted does not exist';
$l['local_folder'] = 'Local Folder';

$l['no_cron_min'] = 'No Cron minute was specified';
$l['no_cron_hour'] = 'No Cron hour was specified';
$l['no_cron_day'] = 'No Cron day was specified';
$l['no_cron_month'] = 'No Cron month was specified';
$l['no_cron_weekday'] = 'No Cron weekday was specified';

$l['custom_autobackup'] = 'Custom';
$l['custom_autobackup_cron'] = 'Automated Backups Cron time';
$l['custom_autobackup_cron_exp'] = 'Please specify the CRON timings for automated backups';

//Errors for autobcakup cron settings
$l['wrong_autobackup_cron_min'] = 'Automated Backup cron minute is wrong. Valid values are 0-59 or a *';
$l['wrong_autobackup_cron_hour'] = 'Automated Backup cron hour is wrong. Valid values are 0-23 or a *';
$l['wrong_autobackup_cron_day'] = 'Automated Backup cron day is wrong. Valid values are 1-31 or a *';
$l['wrong_autobackup_cron_month'] = 'Automated Backup cron month is wrong. Valid values are 1-12 or a *';
$l['wrong_autobackup_cron_weekday'] = 'Automated Backup cron weekday is wrong. Valid values are 0-7 or a *';

$l['quick_install'] = 'Quick Install';
$l['custom_install'] = 'Custom Install';

$l['outdated_script'] = '<b>&soft-1;</b> has not been updated for more than two years and may no longer be maintained or supported by the script vendor';
$l['ampps_notify_premium'] = 'This feature is available in the premium version of AMPPS. Please purchase <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';

$l['choose_url'] = 'Choose Installation URL';
$l['choose_url_exp'] = 'Please choose the URL to install the software';

$l['error_max_ins_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Installations allowed per script';
$l['notify_ver'] = 'Notify '.$globals['sn'].' of a new Version';
$l['notifyversion'] = 'Thank you for informing about the new version. We will look into it as soon as possible';