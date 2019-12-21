<?php

//////////////////////////////////////////////////////////////
//===========================================================
// software_lang.php
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
$l['incompatible'] = APP.'\'ın güncellenmesi gerekiyor! Lütfen sistem yöneticinize başvurun.';
$l['no_install'] = 'INSTALL.XML dosyasına ulaşılamıyor! Lütfen sistem yöneticinize başvurun.';
$l['no_functions'] = 'YÜKLEME FONKSİYONLARINA ulaşılamıyor! Lütfen sistem yöneticinize başvurun.';
$l['no_remove_functions'] = 'The REMOVE FUNCTIONS file could not be found! Please report this to the server administrator.';
$l['no_softdomain'] = 'Scriptin yüklenmesi için domain seçmediniz.';
$l['wrong_softdomain'] = 'Seçtiğiniz kurulum yolu bulunamadı.';
$l['softdirectory_exists'] = 'Böyle bir dizin zaten var. Lütfen başka bir kurulum dizini seçiniz.';
$l['no_space'] = 'Bu scipriti yüklemek için gerekli alan yok!';
$l['no_softdb'] = 'Veritabanına yazılamadı.';
$l['database_exists'] = 'Böyle bir veri tabanı zaten var. Lütfen başka bir veritabanı seçiniz.';
$l['databaseuser_exists'] = 'Böyle bir veri tabanı kullanıcısı zaten var. Lütfen başka bir veritabanı kullanıcısı seçiniz.';
$l['db_name_long'] = 'Veri tabanı adı 7 karakteri geçemez. Lütfen daha kısa bir veri tabanı ismi seçiniz.';
$l['db_limit_crossed'] = 'Açabileceğiniz maksimum veri tabanı sayısına ulaştınız. Veri tabanı açılamadığından kurulum tamamlanamıyor.';
$l['no_field'] = 'Şu alan <b>&soft-1;</b> gereklidir ve doldurulmak zorundadır.';
$l['error_adddb'] = 'Veri tabanı oluşturulamdı';
$l['error_adduser'] = 'Veri tabanına kullanıcı eklenirken hata oluştu';
$l['no_package'] = 'Kurulum paketi bulunamadı!';
$l['no_decompress'] = 'Paket dosyaları açılırken hata oluştu.';
$l['mail_new_ins'] = '&soft-1; kurulumu tamamlandır. Detaylar aşağıda:';
$l['mail_path'] = 'Dizin';
$l['mail_url'] = 'URL';
$l['mail_admin_url'] = 'Admin URL'; 
$l['mail_admin'] = 'Yönetici Adı';
$l['mail_pass'] = 'Yönetici Şifresi';
$l['mail_db'] = 'MySQL Veri Tabanı';
$l['mail_dbuser'] = 'MySQL DB Kullanıcısı';
$l['mail_dbhost'] = 'MySQL DB Hostu';
$l['mail_dbpass'] = 'MySQL DB Şifresi';
$l['mail_time'] = 'Kurulum Zamanı';
$l['mail_subject'] = '&soft-1; Yeni Kurulumu';
$l['no_cron_min'] = 'Dakika Cronu var';
$l['no_cron_hour'] = 'Saat Cronu var';
$l['no_cron_day'] = 'Gün Cronu var';
$l['no_cron_month'] = 'Ay Cronu yok';
$l['no_cron_weekday'] = 'Haftalık Cronu yok';
$l['wrong_cron_min'] = 'Cron dakikası yanlış. 0-59 arasında veya <b>*</b> olmalı';
$l['wrong_cron_hour'] = 'Cron saati yanlış. 0-23 arasında veya <b>*</b> olmalı';
$l['wrong_cron_day'] = 'Cron günü yanlış. 0-31 arasında veya <b>*</b> olmalı';
$l['wrong_cron_month'] = 'Cron ayı yanlış. 0-12 arasında veya <b>*</b> olmalı';
$l['wrong_cron_weekday'] = 'Cron hafta günü yanlış. 0-7 arasında veya <b>*</b> olmalı';
$l['mail_cron'] = 'Cron İşi';
$l['no_datadir'] = 'Veri dizini bilgisi yok';
$l['datadir_exists'] = 'Veri dizini zaten var. Lütfen başka bir tane seçiniz.';
$l['no_decompress_data'] = 'VERİ\'ler açılırken hata oluştu.';
$l['mail_datadir'] = 'Veri Dizini';
$l['some_files_exist'] = 'Kurulum tamamlanamadı çünkü hedef dizin zaten var.: ';
$l['delete_files'] = 'Lütfen bu dosyaları silin vaya farklı dizin seçin.';
$l['overwrite_exist'] = '<b>YA DA</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">dosyaların üzerine yazılması için burayı seçin</span></b>';
$l['checking_data'] = 'Checking the submitted data';
$l['unzipping_files'] = 'Copying files and folders';
$l['unzipping_datadir'] = 'Unzipping data files';
$l['prop_db'] = 'Propagating the database';
$l['finishing_process'] = 'Finishing Installation';
$l['wait_note'] = '<b>NOTE:</b> This may take 3-4 minutes. Please do not leave this page until the progress bar reaches 100%';
$l['no_hostname'] = 'Please enter your Database Hostname';
$l['no_dbusername'] = 'Please enter your Database Username';
$l['no_dbuserpass'] = 'Please enter your Database Password';
$l['softdirectory_invalid'] = 'The directory you typed is invalid.';
$l['softdatadir_invalid'] = 'The data directory you typed is invalid.';
$l['err_domain'] = 'No Domain';
$l['err_domain_admin'] = 'This User does not have any Domain. Please contact Administrator.';
$l['err_pass_strength'] = 'Password strength must be greater than ';
$l['no_https'] = 'A trusted SSL Certificate was not found';
$l['err_dbprefix'] = 'Table Prefix is invalid. Valid values are a-z or A-Z or 0-9 or _';
$l['no_php_install'] = 'PHP is not installed. To install it, please click <a href="'.$globals['index'].'act=apps&app=1">here</a>';
$l['no_mysql_install'] = 'MySQL is not installed. To install it, please click <a href="'.$globals['index'].'act=apps&app=16">here</a>';
$l['no_domain_verify'] = 'Could not access your domain. Please make sure your domain is pointing to this server and there is no .htaccess file restricing access to your domain';
$l['auto_backup_not_allowed'] = 'The auto backup frequency you chose is invalid';
$l['invalid_script'] = 'Invalid Script ID';
$l['no_domain_found'] = 'No domain found. Please add a domain to install the script';
$l['not_php_script'] = 'This script is not in PHP';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['install'] = 'Yükle';
$l['overview'] = 'Genel Bakış';
$l['features'] = 'Özellikler';
$l['demo'] = 'Demo';
$l['ratings'] = 'Puanlar';
$l['import'] = 'İçeri Al';
$l['software_ver'] = 'Versiyon';
$l['space_req'] = 'Gerekli Alan';
$l['available_space'] = 'Kullanılabilir Alan';
$l['req_space'] = 'Gerekli Alan';
$l['mb'] = 'MB';
$l['software_support'] = 'Script Desteği';
$l['support_link'] = 'Destek Sitesine Gidin';
$l['support_note'] = 'Not: Softaculous hiçbir script için destek vermez.';
$l['setup'] = 'Script Ayarları';
$l['choose_domain'] = 'Domain Seçin';
$l['choose_domain_exp'] = 'Yükleme yapılacak klasörü seçiniz.';
$l['choose_url'] = 'Choose Installation URL';
$l['choose_url_exp'] = 'Please choose the URL to install the software';
$l['in_directory'] = 'Yükleme dizini';
$l['in_directory_exp'] = 'Dizin veya alt alan adı yoksa <b>oluşturulmaya çalışılacaktır</b>. örnek: http://mydomain/dir/ şeklinde kurmak için <b>dir</b> yazın. http://mydomain/ şeklinde kurmak için boş bırakın.';
$l['database_name'] = 'Veri Tabanı Adı';
$l['database_name_exp'] = 'Kurulum için oluşturulacak veri tabanı adınızı seçiniz';
$l['softcopy_note'] = '<b>NOT</b>: Bu script güncelleme için kendi güncelleme programını kullanmaktadır. Güncelleme tamamlandığında, lütfen kopyalanan dosyaları inceleyiniz.';
$l['softsubmit'] = 'Yükle';
$l['congrats'] = 'Tebrikler, kurulum başarılı.';
$l['succesful'] = 'başarıyla kurulan';
$l['admin_url'] = 'Yönetim URL';
$l['setup_continue'] = 'Ancak, yükleme tamamlanmışolsa da aşağıdaki URL\'yi kontrol ediniz.';
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
$l['upd_to'] = 'Versiyonu Yükselt';
$l['remove'] = 'Sil';
$l['no_info'] = 'Bilgi Yok';
$l['randpass'] = 'Rasgele Şifre Oluştur';
$l['ratesoft'] = 'Scripti Puanlar';
$l['reviews'] = 'Yorumlar';
$l['reviewsoft'] = 'Yorum Yaz';
$l['readreviews'] = 'Yorum Oku';
$l['reviews_exp'] = 'Diğer kullanıcıların yazdıkları yorumları oku';
$l['cron_job'] = 'CRON İşi';
$l['cron_job_exp'] = 'Bu script düzgün çalışması için CRON\'a ihtiaç duyuyır. Lütfen CRON zamanlamasını yapınız. Eğr bu uyarıyı gözardı etmek istiyorsanız, boş bırakın!';
$l['cron_min'] = 'Dakika';
$l['cron_hour'] = 'Saat';
$l['cron_day'] = 'Gün';
$l['cron_month'] = 'Ay';
$l['cron_weekday'] = 'Haftanın Günü';
$l['datadir'] = 'Veri Dizini';
$l['datadir_exp'] = 'Bu script verilerini dosya olarak saklıyor.  Bunun için klasör seçinizeğer <b>datadir</b> yazarsanız - /home/username/<b>datadir</b> şeklinde klasör oluşturulacaktır.';
$l['db_alpha_num'] = 'Veri tabanı adı sadece alfa numerik karakterlerden oluşur.';
$l['overwrite'] = 'Üzerine Yaz';
$l['ins_emailto'] = 'E-postama kurulum bilgilerini gönder';
$l['choose_protocol'] = 'Protokol Seçiniz';
$l['choose_protocol_exp'] = 'Sitenizin SSL\'si varsa, lütfen HTTPS protokolünü seçiniz.';
$l['clone'] = 'Clone';
$l['backup'] = 'Yedekle';
$l['options'] = 'Ayarlar';
$l['admin'] = 'Admin';
$l['notify_ver'] = 'Notify '.$globals['sn'].' of a new Version';
$l['notifyversion'] = 'Thank you for informing about the new version. We will look into it as soon as possible';
$l['del_insid'] = 'Are you sure you wish to remove the selected installations ? The action will be irreversible. \nNo further confirmations will be asked.';
$l['rem_inst_id'] = 'Removing Installation - ';
$l['no_sel_inst'] = 'No installation(s) selected to remove.';
$l['inst_remvd'] = 'The selected installation(s) have been removed. The page will now be reloaded !';
$l['remove'] = 'Remove';
$l['go'] = 'Go';
$l['screenshots'] = 'Ekran görüntüleri'; 
$l['downloading'] = 'Downloading Package'; 
$l['installing'] = 'Installing Script'; 
$l['editdetail'] = 'Edit Details';
$l['publish'] = 'Publish on the Web';
$l['hostname'] = 'Database Hostname';
$l['hostname_exp'] = 'The MySQL hostname (mainly <b>localhost</b>)';
$l['dbusername'] = 'Database Username';
$l['dbusername_exp'] = 'The MySQL username';
$l['dbuserpass'] = 'Database Password';
$l['dbuserpass_exp'] = 'The password of the MySQL user';
$l['database_name_exp_aefer'] = 'Type the name of the database to be used for the installation';
$l['sel_version'] = 'Select Version';
$l['choose_version_exp'] = 'Please select the version to install.';
$l['choose_version'] = 'Choose the version you want to install';
$l['select'] = 'Select';
$l['release_date'] = 'Release Date';
$l['adv_option'] = 'Advanced Options';
$l['disable_notify_update'] = 'Disable Update Notification Emails';
$l['exp_disable_notify_update'] = 'If checked you will not receive an email notification for updates available for this installation.';
$l['prog_installing'] = 'Installing '; // Dont remove trailing space
$l['prog_install_complete'] = 'Installation Completed.';
$l['eu_auto_upgrade'] = 'Auto Upgrade';
$l['exp_eu_auto_upgrade'] = 'Select the automatic upgrade preference for this installation when a new version is available';
$l['auto_upgrade_plugins'] = 'Auto Upgrade &soft-1; Plugins';
$l['exp_auto_upgrade_plugins'] = 'If checked, all the active &soft-1; plugins installed for this installation will be automatically upgraded to the latest version when your script installation is upgraded.';
$l['auto_upgrade_themes'] = 'Auto Upgrade &soft-1; Themes';
$l['exp_auto_upgrade_themes'] = 'If checked, the active &soft-1; theme for this installation will be automatically upgraded to the latest version when your script installation is upgraded.';
$l['auto_upgrade_enabled'] = 'Auto Upgrade Enabled';
$l['bad'] = 'Bad';
$l['good'] = 'Good';
$l['strong'] = 'Strong';
$l['short'] = 'Short';
$l['strength_indicator'] = 'Strength Indicator';
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

$l['choose_theme'] = 'Select Theme';
$l['clear_theme'] = 'Clear selection';
$l['installing_theme'] = 'Installing theme';
$l['cant_download_theme'] = 'Could not download the theme files';
$l['no_theme_package'] = 'The theme installation package could not be found!';
$l['unzipping_theme_files'] = 'Copying themes files and folders';
$l['use_this_theme'] = 'Select this';
$l['err_auto_backup_limit'] = 'The auto backup rotation cannot be more than <b>&soft-1;</b>';
$l['select_domain'] = 'Select Domain';
$l['refresh'] = 'Refresh';
$l['purchase'] = 'Buy';
$l['your_purchased'] = 'Purchased ';//trailing space is required
$l['your_purchased_times'] = ' times(s)';
$l['err_theme_not_bought'] = 'You have not purchased the theme, so could not install it !';
$l['err_theme_reached_limit'] = 'Please buy this theme and try to install it again. You reached the limit of installing this theme.';
$l['payment_heading'] = 'Purchase Theme';
$l['payment_redirect'] = 'You will be redirected to pay ';//trailing space is required
$l['close'] = 'Close';
$l['free'] = 'Free';
$l['select'] = 'Select';
$l['theme_is_optional'] = '<b>Note</b>: This is optional. If not selected, the default theme will be installed';
$l['with_selected'] = 'With Selected';
$l['not_in_free'] = '<b>&soft-1;</b> cannot be installed in the Free version of '.APP.'!';
$l['notify_admin'] = 'Please notify your Server Admin to purchase the premium version of '.APP.'!';
$l['related_scripts'] = 'Related Scripts';

$l['date_added'] = 'Date Added';
$l['downloaded'] = 'Downloaded';

$l['soft_ins_exists'] = 'An installation already exists at &soft-1; as per our records. To re-install the application please uninstall the existing installation!';
$l['install_now'] = 'Instalar ahora';
$l['my_apps'] = 'Mis aplicaciones';

$l['backup_location'] = 'Backup Location';
$l['backup_location_exp'] = 'Choose the backup location to be used while backing up this installation';
$l['default'] = 'Default';
$l['invalid_backup_location'] = 'Backup location submitted does not exist';
$l['local_folder'] = 'Local Folder';

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

$l['pushtolive'] = 'Push to Live';
$l['staging'] = 'Create Staging';

$l['dont_auto_upgrade'] = 'Do not Auto Upgrade'; 
$l['minor_auto_upgrade'] = 'Upgrade to <b>Minor</b> versions only'; 
$l['major_auto_upgrade'] = 'Upgrade to any latest version available (<b>Major</b> as well as <b>Minor</b>)'; 
$l['auto_upgrade_major'] = '(Major and Minor)'; 
$l['auto_upgrade_minor'] = '(Minor)'; 

$l['err_fetch_key'] = 'Could not fetch the PFX API key at the moment';
$l['ampps_notify_premium'] = 'This feature is available in the premium version of AMPPS. Please purchase <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';

$l['view_items'] = 'List Items in Set';
$l['ok'] = 'OK';
$l['plugins'] = 'Plugins';
$l['themes'] = 'Themes';
$l['empty_set'] = 'There are currently no items in the set!!';

$l['error_max_ins_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Installations allowed per script';
$l['error_max_backup_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Backups allowed per script';
$l['error_max_clone_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Clone allowed per script';
$l['error_max_staging_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Staging allowed per script';

$l['remove_complete'] = 'Remove Completely';
$l['remove_info'] = 'Remove from '.APP;
$l['manage_sets'] = 'Administrar complementos / conjuntos de temas';
$l['manage_plugin_sets'] = 'Manage Plugin Sets';
$l['manage_theme_sets'] = 'Manage Theme Sets';