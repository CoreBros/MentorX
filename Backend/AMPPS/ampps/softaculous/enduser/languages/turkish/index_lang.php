<?php

//////////////////////////////////////////////////////////////
//===========================================================
// index_lang.php
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

$l['user_data_error_t'] = 'Kullanıcı Bilgisi Hatası';
$l['user_data_error'] = ''.APP.' kullanıcı bilgilerinize ulaşamıyor. Lütfen sistem yöneticinize başvurun!';

$l['remote_licence_t'] = 'Invalid License';
$l['remote_licence'] = 'You are not using a valid license. Please report this to the server administrator!';

$l['enterprise_licence_t'] = 'Invalid License';
$l['enterprise_licence'] = 'You are not using a valid license. Please report this to the server administrator!';

$l['no_license'] = 'LİSANS dosyasına ulaşılamıyor. Lütfen sistem yöneticinize başvurun.';

$l['today'] = '<b>Bugün</b>  ';//The today string for showing todays post time

$l['init_theme_error_t'] = 'Tema Hatası';//Title
$l['init_theme_error'] = 'Tema dosyasına ulaşılamıyor - &soft-1;.';

$l['init_theme_func_error_t'] = 'Fonksiyon Hatası';//Title
$l['init_theme_func_error'] = 'Fonksiyona veya fonksiyonlara ulaşılamıyor &soft-1;.';

$l['disable_softaculous_t'] = 'Softaculous Disabled';
$l['disable_softaculous'] = 'Softaculous is Disabled for this User. Please contact System Administrator.';

$l['load_theme_settings_error'] = 'Tema ayarları dosyasına ulaşılamıyor.';

$l['view_guide'] = 'View Guide';
$l['max_db_length'] = 'The database name cannot be greater than &soft-1; characters. Please choose a shorter database name.';


//Error Handle Function
$l['following_errors_occured'] = 'Aşağıdaki hatalarla karşılaşıldı';

//Success Message Function
$l['following_message'] = 'Aşağıdaki mesajınız geri döndü';

//Major Error Function
$l['fatal_error'] = 'Kritik Hata';
$l['following_fatal_error'] = 'Aşağıdaki hatalarla karşılaşıldı';

//Message Function
$l['soft_message'] = ''.APP.' Mesajı';
$l['following_soft_message'] = 'Aşağıdaki mesajınız geri döndü';

//Update Softwares
$l['no_soft_found'] = 'Script bulunamadı.....Güncelleme Gerekiyor';
$l['ver_not_match'] = 'Versiyonlar uyuşmuyor.....Güncelleme Gerekiyor';
$l['ver_match'] = 'Kullanılan versiyon Güncel......Devam ediyor';
$l['del_prev_files'] = 'Önceki dosyalar siliniyor......Done';
$l['fetch_latest'] = 'Güncel dosyalar alınıyor......';
$l['error_fetch_latest'] = 'Günce dosyalar alınamıyor......Devam ediyor';
$l['error_save_latest'] = 'Güncel dosyalar kaydedilemiyor......Devam ediyor';
$l['got_latest'] = 'Güncel dosyalar kaydedildi';
$l['unzip_latest'] = 'Sıkıştırılmış dosyalar açılıyor......';
$l['error_unzip_latest'] = 'Açma işlemi sırasında hata oluştu......Devam ediyor';
$l['unzipped_latest'] = 'Açma işlemi başarılı';

//Update Softaculous
$l['getting_info'] = 'Bilgi Talebi......';
$l['error_getting_latest'] = 'Bilgi alınamıyor......İptal Ediliyor';
$l['got_info'] = 'Bilgi Alınıyor';
$l['manual_mode'] = ''.APP.'\'yeni versiyonu var. Manuel işlem gerekiyor......İptal Ediliyor';
$l['no_updates'] = 'Kullanılan versiyon en güncel versiyon......Devam ediyor';
$l['fetch_upgrade'] = 'Yükseltme bilgileri alınıyor......';
$l['error_fetch_upgrade'] = 'Yükseltme bilgileri alınamadı......İptal Ediliyor';
$l['error_save_upgrade'] = 'Yükseltme dosyası kaydedilemedi......İptal Ediliyor';
$l['got_upgrade'] = 'Yükseltme dosyası kaydedildi';
$l['unzip_upgrade'] = 'Dosyalar açılıyor......';
$l['error_unzip_upgrade'] = 'Açma işlemi sırasında hata oluştu......İptal Ediliyor';
$l['unzipped_upgrade'] = 'Açma işlemi başarılı';
$l['md5_check'] = 'MD5 Check Successful';
$l['err_md5_check'] = 'MD5 Check for these files were not Successful';
$l['err_md5_file'] = ' does not exist';

//MySQL Errors
$l['err_selectmy'] = 'MYSQL veri tabanı seçilmedi.';
$l['err_myconn'] = 'MYSQL veri tabanına bağlanılamadı.';
$l['err_makequery'] = 'Sorgu çalıştırılamadı';
$l['err_mynum'] = 'MySQL Hata numarası';
$l['err_myerr'] = 'MySQL Hatası';
$l['err_no_db_file'] = 'The database import file does not exist';
$l['err_no_open_db_file'] = 'Could not open the database import file';

//Importing Errors
$l['imp_wrong_softdomain'] = '&soft-1; domaini bulunamadı.';
$l['imp_softpath_wrong'] = '&soft-1; adresi yanlış veya böyle bir adres yok.';
$l['imp_ins_exists'] = '&soft-1; adresinde zaten yüklü. &soft-2; satırındaki kayıtlarınız bakım modunda!';
$l['imp_no_func'] = 'İçeri alma fonksiyonu &soft-1; için başarılı olamadı.';
$l['imp_err'] = 'İçeri alınan kurulurken hata ile karşılaşıldı &soft-1;';
$l['err_query'] = 'Could not execute the query';

$l['invalid_search_input'] = 'Invalid Theme Search character. Only alphanumeric characters, underscore and hyphen are allowed.';

//hf_theme.php
$l['root_login'] = 'Logged in as ROOT';
$l['welcome'] = 'Hoşgeldiniz';
$l['logout'] = 'Çıkış';
$l['page_time'] = 'Page Created In';
$l['times_are'] = 'GMT zaman dilimi';
$l['time_is'] = 'Sayfa ıluşturulma süresi';
$l['no_script_found'] = 'No such Script found!';
$l['webuzo_sysapps_disabled'] = 'This functionality has been disabled from the Webuzo Admin Panel';
$l['webuzo_install_utility'] = 'This utility is not installed. Please install it first';

//The Category Language Variables
$l['forums'] = 'Forumlar';
$l['blogs'] = 'Bloglar';
$l['cms'] = 'Portallar/CMS';
$l['galleries'] = 'Resim Galerileri';
$l['wikis'] = 'Wikiler';
$l['admanager'] = 'Reklam Yöneticileri';
$l['calendars'] = 'Takvimler';
$l['games'] = 'Oyunlar';
$l['mail'] = 'Posta İşlemciler';
$l['polls'] = 'Anketler ve Oylamalar';
$l['projectman'] = 'Proje Yöneticileri';
$l['ecommerce'] = 'E-Ticaret Sistemleri';
$l['guestbooks'] = 'Ziyaretçi Defterleri';
$l['customersupport'] = 'Müşteri Destekleri';
$l['others'] = 'Diğerleri';
$l['music'] = 'Müzik';
$l['video'] = 'Video';
$l['files'] = 'File Management';
$l['go_cpanel'] = 'Kontrol Paneline Git';
$l['go_home'] = ''.APP.' Ana Sayfa';
$l['go_demos'] = 'Script Demoları';
$l['go_ratings'] = 'Script Puanları';
$l['go_settings'] = 'Ayarları Değiştir';
$l['go_email_settings'] = 'E-posta Ayarları';
$l['go_installations'] = 'Bütün Yüklemeler';
$l['go_support'] = 'Yardım ve Destek';
$l['go_sync'] = 'Diğer otomatik yükleyicileri eşitle';
$l['go_backups'] = 'Backups and Restore';
$l['go_tasklist'] = 'Task List';
$l['go_apps_installations'] = 'All Installed Applications';
$l['go_my_themes'] = 'My Themes';
$l['go_logout'] = 'Logout';
$l['ins_stats'] = 'Installations';
$l['outdated_stats'] = 'Outdated Installations';
$l['backups_stats'] = 'Backups';

$l['type_php'] = 'PHP';
$l['type_perl'] = 'Perl';
$l['type_js'] = 'JavaScript';
$l['type_java'] = 'Java';
$l['type_python'] = 'Python';
$l['search'] = 'Ara';
$l['back_to_top'] = 'Üste Çık';

$l['show'] = 'Show';
$l['hide'] = 'Hide';

// Categories
$l['cat_php_forums'] = 'Forumlar';
$l['cat_php_blogs'] = 'Bloglar';
$l['cat_php_cms'] = 'Portallar/CMS';
$l['cat_php_galleries'] = 'Resim Galerileri';
$l['cat_php_wikis'] = 'Wikiler';
$l['cat_php_admanager'] = 'Reklam Yöneticileri';
$l['cat_php_calendars'] = 'Takvimler';
$l['cat_php_games'] = 'Oyunlar';
$l['cat_php_mail'] = 'Posta İşlemciler';
$l['cat_php_polls'] = 'Anketler ve analitik';
$l['cat_php_projectman'] = 'Proje Yöneticileri';
$l['cat_php_ecommerce'] = 'E-Ticaret Sistemleri';
$l['cat_php_guestbooks'] = 'Ziyaretçi Defterleri';
$l['cat_php_customersupport'] = 'Müşteri Destekleri';
$l['cat_php_others'] = 'Diğerleri';
$l['cat_php_music'] = 'Müzik';
$l['cat_php_video'] = 'Video';
$l['cat_php_rss'] = 'RSS';
$l['cat_php_socialnetworking'] = 'Sosyal AĞ';
$l['cat_php_microblogs'] = 'Mikro Bloglar';
$l['cat_php_frameworks'] = 'Frameworks';
$l['cat_php_educational'] = 'Educational';
$l['cat_php_erp'] = 'ERP';
$l['cat_php_dbtools'] = 'DB Tools';
$l['cat_php_files'] = 'File Management';
$l['cat_js_libraries'] = 'Kütüphaneler';
$l['cat_js_widgets'] = 'Bileşenler';
$l['cat_perl_blogs'] = 'Bloglar';
$l['cat_perl_wikis'] = 'Wikiler';
$l['cat_perl_forums'] = 'Forumlar';
$l['cat_perl_ecommerce'] = 'E-Commerce';
$l['cat_perl_mail'] = 'Mails';
$l['cat_java_cms'] = 'CMS';
$l['cat_java_forums'] = 'Forumlar';
$l['cat_java_projectman'] = 'Proje Yöneticileri';
$l['cat_java_erp'] = 'ERP';
$l['cat_java_blogs'] = 'Bloglar';
$l['cat_java_wikis'] = 'Wikiler';
$l['cat_python_wikis'] = 'Wikis';
$l['cat_python_projectman'] = 'Project Management';
$l['cat_apps_server_side_scripting'] = 'Server Side Scripting';
$l['cat_apps_web_servers'] = 'Web Servers';
$l['cat_apps_utilities'] = 'Utilities';
$l['cat_apps_libraries'] = 'Libraries';
$l['cat_apps_databases'] = 'Databases';
$l['cat_apps_stacks'] = 'Stacks';
$l['cat_apps_security'] = 'Security';
$l['cat_apps_statistics'] = 'Statistics';
$l['cat_apps_java_tools'] = 'Java Tools';
$l['cat_apps_java_containers'] = 'Java Containers';
$l['cat_apps_version_control'] = 'Version Control';
$l['cat_apps_modules'] = 'Modules';
$l['cat_apps_message_queue'] ='Message Queue';

// Classes Categories
$l['classes_ajax'] = 'Ajax';
$l['classes_cryptography'] = 'Cryptography';
$l['classes_algorithms'] = 'Algorithms';
$l['classes_artificialintelligence'] = 'Artificial Intelligence';
$l['classes_email'] = 'Email';
$l['classes_finances'] = 'Finances';
$l['classes_searching'] = 'Searching';
$l['classes_user_management'] = 'User Management';
$l['classes_utilitiesandtools'] = 'Utilities and Tools';
$l['classes_validation'] = 'Validation';
$l['classes_security'] = 'Security';
$l['classes_console'] = 'Console';
$l['classes_codegeneration'] = 'Code Generation';
$l['classes_chat'] = 'Chat';
$l['classes_astrology'] = 'Astrology';
$l['classes_audio'] = 'Audio';
$l['classes_biology'] = 'Biology';
$l['classes_blogs'] = 'Blogs';
$l['classes_cache'] = 'Cache';
$l['classes_compression'] = 'Compression';
$l['classes_configuration'] = 'Configuration';
$l['classes_contentmanagement'] = 'Content Management';
$l['classes_conversion'] = 'Conversion';
$l['classes_datatypes'] = 'Datatypes';
$l['classes_databases'] = 'Databases';
$l['classes_debug'] = 'Debug';
$l['classes_designpatterns'] = 'Design Patterns';
$l['classes_ecommerce'] = 'E-Commerce';
$l['classes_elearning'] = 'E-Learning';
$l['classes_emulators'] = 'Emulators';
$l['classes_filesandfolders'] = 'Files and Folders';
$l['classes_flash'] = 'Flash';
$l['classes_forums'] = 'Forums';
$l['classes_games'] = 'Games';
$l['classes_geography'] = 'Geography';
$l['classes_graphics'] = 'Graphics';
$l['classes_gui'] = 'GUI';
$l['classes_hosting'] = 'Hosting';
$l['classes_html'] = 'HTML';
$l['classes_http'] = 'HTTP';
$l['classes_language'] = 'Language';
$l['classes_projectmanagement'] = 'Project Management';

// Softaculous Remote Domain Strings
$l['no_domain_data'] = 'Domain Data Not Found!!';
$l['no_aefer_resp'] = 'Could not access the worker file over web. Please check if your domain is pointing to the correct server.'; 

// Webuzo Strings
$l['webuzo'] = 'Webuzo';
$l['go_domain'] = 'Manage Domains';
$l['webuzo_license_exp'] = 'Your license is not active or it has expired. If your license has expired, please renew it to continue using Webuzo';
$l['webuzo_license_exp_t'] = 'License Inactive';
$l['err_no_access'] = 'You do not have permission to access this page';

// Ampps Strings
$l['ampps'] = 'AMPPS';
$l['go_domain'] = 'Manage Domains';
$l['ampps_license_exp'] = 'Your license is not active or it has expired. If your license has expired, please renew it to continue using Ampps';
$l['ampps_license_exp_t'] = 'License Inactive';


/////////////////////////////////////////////////////////////
/////  Following Variables are used for Email Templates /////
/////////////////////////////////////////////////////////////


$l['notify_enable'] = 'Enabled';
$l['notify_disable'] = 'Disabled';

$l['autoupgrade_enable'] = 'Enabled';
$l['autoupgrade_disable'] = 'Disabled';

// Auto backup strings
$l['auto_backup_enable'] = 'Enabled';
$l['auto_backup_disable'] = 'Disabled';

// Install Template Vaiable
$l['mail_install_php_sub'] = '$scriptname Yeni Kurulumu';
$l['mail_install_php'] = '$scriptname $version kurulumu tamamlandır. Detaylar aşağıda:
Dizin : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>Veri Dizini : $datadirectory</if>
<if $admin_username>Yönetici Adı : $admin_username</if>
<if $admin_pass>Yönetici Şifresi : $admin_pass</if>
<if $admin_email>Admin Email: $admin_email</if>
<if $dbname>MySQL Veri Tabanı : $dbname</if>
<if $dbuser>MySQL DB Kullanıcısı : $dbuser</if>
<if $dbhost>MySQL DB Hostu : $dbhost</if>
<if $dbpass>MySQL DB Şifresi : $dbpass</if>
<if $cron>Cron İşi : $cron</if>
<if $disable_notify_update>Update Notification : $disable_notify_update</if>
<if $eu_auto_upgrade>Auto Upgrade : $eu_auto_upgrade</if>
<if $auto_backup>Automated Backups : $auto_backup</if>
<if $auto_backup_rotation>Backup Rotation : $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
<if $time>Kurulum Zamanı : $time</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Clone Template Vaiable
$l['mail_clone_sub'] = 'Clone Installation of $scriptname';
$l['mail_clone'] = 'Your installation of $scriptname $version has been cloned successfully.

Your original installation details :
Original Path : $old_path
Original URL : $old_url

Your cloned installation details :
Path : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>Data Directory : $datadirectory</if>
<if $dbname>MySQL Database : $dbname</if>
<if $dbuser>MySQL DB User : $dbuser</if>
<if $dbhost>MySQL DB Host : $dbhost</if>
<if $dbpass>MySQL DB Password : $dbpass</if>
<if $cron>Cron Job : $cron</if>
<if $time>Time of Installation : $time</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Install Template Vaiable
$l['mail_install_js_sub'] = '$scriptname Yeni Kurulumu';
$l['mail_install_js'] = '$scriptname $version kurulumu tamamlandır. Detaylar aşağıda:
Dizin : $path
URL : $url
<if $disable_notify_update>Update Notification : $disable_notify_update</if>
<if $auto_backup>Automated Backups : $auto_backup</if>
<if $auto_backup_rotation>Backup Rotation : $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
<if $time>Kurulum Zamanı : $time</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Install Template Vaiable
$l['mail_install_perl_sub'] = '$scriptname Yeni Kurulumu';
$l['mail_install_perl'] = '$scriptname $version kurulumu tamamlandır. Detaylar aşağıda:
Dizin : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>Veri Dizini : $datadirectory</if>
<if $wwwdir>Web Directory : $wwwdir</if>
<if $admin_username>Yönetici Adı : $admin_username</if>
<if $admin_pass>Yönetici Şifresi : $admin_pass</if>
<if $admin_email>Admin Email: $admin_email</if>
<if $dbname>MySQL Veri Tabanı : $dbname</if>
<if $dbuser>MySQL DB Kullanıcısı : $dbuser</if>
<if $dbhost>MySQL DB Hostu : $dbhost</if>
<if $dbpass>MySQL DB Şifresi : $dbpass</if>
<if $cron>Cron İşi : $cron</if>
<if $disable_notify_update>Update Notification : $disable_notify_update</if>
<if $auto_backup>Automated Backups : $auto_backup</if>
<if $auto_backup_rotation>Backup Rotation : $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
<if $time>Kurulum Zamanı : $time</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Install Template Vaiable
$l['mail_install_java_sub'] = '$scriptname Yeni Kurulumu';
$l['mail_install_java'] = '$scriptname $version kurulumu tamamlandır. Detaylar aşağıda:
Dizin : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>Veri Dizini : $datadirectory</if>
<if $wwwdir>Web Directory : $wwwdir</if>
<if $admin_username>Yönetici Adı : $admin_username</if>
<if $admin_pass>Yönetici Şifresi : $admin_pass</if>
<if $admin_email>Admin Email: $admin_email</if>
<if $dbname>MySQL Veri Tabanı : $dbname</if>
<if $dbuser>MySQL DB Kullanıcısı : $dbuser</if>
<if $dbhost>MySQL DB Hostu : $dbhost</if>
<if $dbpass>MySQL DB Şifresi : $dbpass</if>
<if $cron>Cron İşi : $cron</if>
<if $disable_notify_update>Update Notification : $disable_notify_update</if>
<if $auto_backup>Automated Backups : $auto_backup</if>
<if $auto_backup_rotation>Backup Rotation : $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
<if $time>Kurulum Zamanı : $time</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

$l['mail_install_python_sub'] = 'New Installation of $scriptname';
$l['mail_install_python'] = 'A new installation of $scriptname $version has been completed. The details of the installation are shown below:
Path : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>Data Directory : $datadirectory</if>
<if $wwwdir>Web Directory : $wwwdir</if>
<if $admin_username>Admin Username : $admin_username</if>
<if $admin_pass>Admin Password : $admin_pass</if>
<if $admin_email>Admin Email: $admin_email</if>
<if $dbname>MySQL Database : $dbname</if>
<if $dbuser>MySQL DB User : $dbuser</if>
<if $dbhost>MySQL DB Host : $dbhost</if>
<if $dbpass>MySQL DB Password : $dbpass</if>
<if $cron>Cron Job : $cron</if>
<if $disable_notify_update>Update Notification : $disable_notify_update</if>
<if $auto_backup>Automated Backups : $auto_backup</if>
<if $auto_backup_rotation>Backup Rotation : $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
<if $time>Time of Installation : $time</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Update template Variable (From ADMIN)
$l['mail_update_sub'] = 'Script Güncellemesi Mevcut';
$l['mail_update'] = 'Bu mail zamanı geçmiş PHP scriptlerinizn olduğu için gönderimiştir. Güvenliğiniz için zamanı geçmiş yazılımlarınızı güncellemeniz gerekmektedir..
Aşağıdaki yazılımların güncellenmesi gerekiyor:

$installation

Scriptleri güncellemek için Kontrol Paneli-> '.APP.' -> Kurulumlar.
Buradan bütün scriptlerinizi güncelleyebilirsiniz.

Sistem yöneticisi tarafından gönderildi $serverip
';

// Remove Template Variable
$l['mail_remove_sub'] = '$scriptname Silindi';
$l['mail_remove'] = '$scriptname kurulumu silindi. İşlemin detayları aşağıda :
Dizin : $path
<if $url>URL : $url</if>
<if $datadirectory>Veri Dizini : $datadirectory</if>
<if $wwwdir>Web Directory : $wwwdir</if>
<if $dbname>MySQL Veri Tabanı : $dbname</if>
<if $dbuser>MySQL DB Kullanıcısı : $dbuser</if>
<if $dbhost>MySQL DB Hostu : $dbhost</if>
<if $dbpass>MySQL DB Şifresi : $dbpass</if>
<if $cron>Cron İşi : $cron</if>
Kurulum Zamanı : $time
Silme Zamanı : $rem_time

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Cron Template Variable
$l['mail_cron_sub'] = 'Script GÜncellemesi Mevcut';
$l['changelog'] = '== Changelog for';
$l['mail_cron'] = 'Aşağıdaki scriptlerin yeni versiyonu mevcut:

$installation

Bu scripti güncellemek için Yönetim Paneli -> '.APP.' -> Kurulumlar\'a gidin


$changelog

'.APP.'\'un otomatik mesajıdır $serverip

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Editdetail Template Variable
$l['mail_editdetail_sub'] = 'Modified Installation Details of $scriptname';
$l['mail_editdetail'] = 'The installation details of $scriptname has been modified. Following are the modified details of the installation :
Dizin : $path
URL : $url
<if $datadirectory>Veri Dizini : $datadirectory</if>
<if $wwwdir>Web Directory : $wwwdir</if>
<if $wwwurl>Web URL : $wwwurl</if>
<if $admin_username>Yönetici Adı : $admin_username</if>
<if $admin_pass>Yönetici Şifresi : $admin_pass</if>
<if $dbname>MySQL Veri Tabanı : $dbname</if>
<if $dbuser>MySQL DB Kullanıcısı : $dbuser</if>
<if $dbhost>MySQL DB Hostu : $dbhost</if>
<if $dbpass>MySQL DB Şifresi : $dbpass</if>
<if $cron>Cron İşi : $cron</if>
<if $disable_notify_update>Update Notification : $disable_notify_update</if>
<if $eu_auto_upgrade>Auto Upgrade : $eu_auto_upgrade</if>
<if $auto_backup>Automated Backups : $auto_backup</if>
<if $auto_backup_rotation>Backup Rotation : $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
Kurulum Zamanı : $time
Silme Zamanı : $rem_time

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Backup Language Strings
$l['mail_backup_sub'] = 'Backup of your $scriptname installation';
$l['mail_backup'] = 'The backup of your $scriptname installation was completed successfully.
The details are as follows :
Installation Path : $path
Installation URL : $url
<if $backup_location>Backup Location : $backup_location</if>
Backup Path : $backup_file
<if $backup_note>Backup Note : $backup_note</if>

You can access the backup from the Backups Section in '.APP.'.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

$l['mail_backup_fail_sub'] = 'Failed : Backup of your $scriptname installation';
$l['mail_backup_fail'] = 'The backup of your $scriptname installation did not complete successfully.
The details are as follows :
Installation Path : $path
Installation URL : $url
Backup Path : $backup_file

The following error occured :
$error

Please try to create a backup again after some time.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';


// Restore Language Strings
$l['mail_restore_sub'] = 'Restore of your $scriptname';
$l['mail_restore'] = 'The restore of your $scriptname backup was completed successfully.
The details are as follows :
Installation Path : $path
Installation URL : $url

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

$l['mail_restore_fail_sub'] = 'Failed : Restore of your $scriptname';
$l['mail_restore_fail'] = 'The restore of your $scriptname did not complete successfully.
The details are as follows :
Installation Path : $path
Installation URL : $url

The following error occured :
$error

Please try to restore the backup again after some time.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Restore Background Language Strings
$l['mail_restore_bg_sub'] = 'Restore of your $scriptname backup started in background';
$l['mail_restore_bg'] = 'The restore of your $scriptname backup has started in the background. You will receive an email notification about the status once the restore process is completed.
The details are as follows :
Installation Path : $path
Installation URL : $url

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Backup Background Language Strings
$l['mail_backup_bg_sub'] = 'Backup of your $scriptname installation started in background';
$l['mail_backup_bg'] = 'The backup of your $scriptname has started in background. You will receive an email notification about the status once the backup process is completed.
The details are as follows :
Installation Path : $path
Installation URL : $url

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings';

// import Language Strings
$l['mail_import_sub'] = 'Import of your $scriptname installation';
$l['mail_import'] = 'The import of your $scriptname installation was completed successfully.
The details are as follows :
Installation Path : $path
Installation URL : $url

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// import fail Language Strings
$l['mail_import_fail_sub'] = 'Failed : Import of your $scriptname installation';
$l['mail_import_fail'] = 'The import of your $scriptname installation did not complete successfully.
The details are as follows :
Installation Path : $path
Installation URL : $url

The following error occured :
$error

Please try to import the installation again after some time.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Import Background Language Strings
$l['mail_import_bg_sub'] = 'Import of your $scriptname installation';
$l['mail_import_bg'] = 'The import of your $scriptname installation has started in the background. You will receive an email notification about the status once the import process is completed.
The details are as follows :
Installation Path : $path
Installation URL : $url

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';


// Install Template Vaiable CLASSES
$l['mail_install_classes_sub'] = 'New Installation of $classesname';
$l['mail_install_classes'] = 'A new installation of $classesname $version has been completed. The details of the installation are shown below:
Path : $path
<if $time>Time of Installation : $time</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

////////////////////////
// ADMIN UPGRADE - 6
////////////////////////

// Auto Upgrade Email For Admin (successful)
$l['mail_adminupgrade_success_admin_sub'] = '$scriptname installation of user $user has been upgraded successfully';
$l['mail_adminupgrade_success_admin'] = '$scriptname installation of user $user has been upgraded successfully to the latest version.
The details are as follows :
Installation URL : $url
Latest Version : $version
Old Version : $oldversion
';

// Auto Upgrade Email For Admin (Failed) but restored successfully.
$l['mail_adminupgrade_fail_admin_sub'] = 'Upgrade process for $scriptname installation failed and was restored from the backup';
$l['mail_adminupgrade_fail_admin'] = 'Upgrade process of $scriptname installation for user $user failed.
'.APP.' had created a backup before upgrading, and the backup was restored successfully.
Installation URL : $url
Current Version : $oldversion
Latest Version : $version
The Upgrade error details are as follows :
Error : $upgrade_error
';

// Auto Upgrade Email for user (successful)
$l['mail_adminupgrade_success_user_sub'] = '$scriptname installation has been successfully upgraded by System Admin';
$l['mail_adminupgrade_success_user'] = 'Your $scriptname installation has been successfully upgraded to the latest version by the System Admin.
The details are as follows :
Installation URL : $url
Latest Version : $version
Old Version : $oldversion

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Auto Upgrade Email for user (fail) but restored successfully
$l['mail_adminupgrade_fail_user_sub'] = 'Upgrade of your $scriptname installation by System Admin was unsuccessful';
$l['mail_adminupgrade_fail_user'] = 'The System Admin had tried to upgrade your $scriptname installation, but the upgrade process had failed.
A backup had been created before upgrading your installation, and your installation has been successfully restored from this backup.
Installation URL : $url
Current Version : $oldversion
Latest Version : $version
The Upgrade error details are as follows :
Error : $upgrade_error

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// ALL IS FAILED (Upgrade and RESTORE toooo) (FOR ADMIN)
$l['mail_adminupgrade_restore_fail_admin_sub'] = 'Upgrade process of $scriptname installation of user $user has failed';
$l['mail_adminupgrade_restore_fail_admin'] = 'Upgrade process of $scriptname installation of user $user has failed.
A backup had created before upgrading, but the restore process also failed !

It will require a manual restore. Guide for the manual restore is available here :
http://www.softaculous.com/docs/Manual_Restore

Following are the installation and backup details which you might require to restore your $scriptname installation :
PATH_TO_YOUR_BACKUP_FILE : $backup_path
PATH_OF_INSTALLATION : $softpath
<if $dbname>DATABASE_NAME : $dbname</if>
<if $dbuser>DATABSE_USER : $dbuser</if>
<if $dbpass>DATABASE_PASS : $dbpass</if>
<if $dbhost>DATABASE_HOST : $dbhost</if>

Installation URL : $url
Current Version : $oldversion
Latest Version : $version
<if $upgrade_error>
The Upgrade error details are as follows :
Error : $upgrade_error
</if>
<if $error>
The Restore error details are as follows :
Error : $error
</if>

The '.APP.' team is available for help as well. You can contact the '.APP.' Team (support@'.strtolower(APP).'.com) if you face any problems.
';

// ALL IS FAILED (Upgrade and RESTORE toooo) (FOR USER)
$l['mail_adminupgrade_restore_fail_user_sub'] = 'Upgrade of your $scriptname installation by System Admin failed';
$l['mail_adminupgrade_restore_fail_user'] = 'The System Admin had tried to upgrade your $scriptname installation, but the upgrade failed.
A backup had been created before upgrading, but the restore process also failed !

It will require a manual restore. Guide for the manual restore is available here :
http://www.softaculous.com/docs/Manual_Restore

Following are the installation and backup details which you might require to restore your $scriptname installation :
PATH_TO_YOUR_BACKUP_FILE : $backup_path
PATH_OF_INSTALLATION : $softpath
<if $dbname>DATABASE_NAME : $dbname</if>
<if $dbuser>DATABSE_USER : $dbuser</if>
<if $dbpass>DATABASE_PASS : $dbpass</if>
<if $dbhost>DATABASE_HOST : $dbhost</if>

Installation URL : $url
Current Version : $oldversion
Latest Version : $version
<if $upgrade_error>
The Upgrade error details are as follows :
Error : $upgrade_error
</if>
<if $error>
The Restore error details are as follows :
Error : $error
</if>

The '.APP.' team is available for help as well. You can contact the '.APP.' Team (support@'.strtolower(APP).'.com) if you face any problems.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

////////////////////////
// USER UPGRADE - 3
////////////////////////

// When upgraded by user successfully (By user)
$l['mail_userupgrade_success_user_sub'] = '$scriptname installation upgraded successfully';
$l['mail_userupgrade_success_user'] = 'Your $scriptname installation has been successfully upgraded to the latest version.
The details are as follows :
Installation URL : $url
Latest Version : $version
Old Version : $oldversion

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// If any error occured while upgrading, (By user)
$l['mail_userupgrade_fail_user_sub'] = 'Upgrade of your $scriptname installation failed';
$l['mail_userupgrade_fail_user'] = 'The upgrade of your $scriptname installation has failed.
The details are as follows :
Installation URL : $url
Current Version : $oldversion
Latest Version : $version
Error : $upgrade_error

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// If UPGRADE and RESTORE failed while upgrading, (By user)
$l['mail_userupgrade_restore_fail_user_sub'] = 'Upgrade of your $scriptname installation failed';
$l['mail_userupgrade_restore_fail_user'] = 'The upgrade of your $scriptname installation has failed.
A backup had been created before upgrading, but the restore process also failed !

It will require a manual restore. Guide for the manual restore is available here :
http://www.softaculous.com/docs/Manual_Restore

The details are as follows :
Installation URL : $url
Current Version : $oldversion
Latest Version : $version
<if $upgrade_error>
The Upgrade error details are as follows :
Error : $upgrade_error
</if>
<if $error>
The Restore error details are as follows :
Error : $error
</if>

The '.APP.' team is available for help as well. You can contact the '.APP.' Team (support@'.strtolower(APP).'.com) if you face any problems.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

////////////////////////
// AUTO UPGRADE - 3
////////////////////////

// When AUTOUPGRADED successfully
$l['mail_autoupgrade_success_user_sub'] = '$scriptname Installation Auto Upgraded Successfully';
$l['mail_autoupgrade_success_user'] = 'Your $scriptname installation has been successfully auto upgraded to the latest version.
The details are as follows :
Installation URL : $url
Latest Version : $version
Old Version : $oldversion

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// When AUTOUPGRADE FAILED
$l['mail_autoupgrade_fail_user_sub'] = 'Auto Upgrade of your $scriptname installation failed';
$l['mail_autoupgrade_fail_user'] = 'The auto upgradation of your $scriptname installation has failed.
The details are as follows :
Installation URL : $url
Current Version : $oldversion
Latest Version : $version
Error : $upgrade_error

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// If UPGRADE and RESTORE failed while AUTOUPGRADING
$l['mail_autoupgrade_restore_fail_user_sub'] = 'Auto Upgrade of your $scriptname installation failed';
$l['mail_autoupgrade_restore_fail_user'] = 'The auto upgradation of your $scriptname installation has failed.
A backup had been created before upgrading, but the restore process also failed !

It will require a manual restore. Guide for the manual restore is available here :
http://www.softaculous.com/docs/Manual_Restore

The details are as follows :
Installation URL : $url
Current Version : $oldversion
Latest Version : $version
<if $upgrade_error>
The Upgrade error details are as follows :
Error : $upgrade_error
</if>
<if $error>
The Restore error details are as follows :
Error : $error
</if>

The '.APP.' team is available for help as well. You can contact the '.APP.' Team (support@'.strtolower(APP).'.com) if you face any problems.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

////////////////////////
// PRE UPGRADE CHECK 
////////////////////////

// If pre upgradation check fails while AUTOUPGRADE (FOR USER)
$l['mail_autoupgrade_precheck_fail_sub'] = 'Pre Upgrade Check failed';
$l['mail_autoupgrade_precheck_fail'] = 'Auto upgrade process for the following installation cannot be completed, because it does not meet the upgrade requirements :
Installation URL : $url
Current Version : $oldversion
Latest Version : $version
<if $upgrade_error>
Error : $upgrade_error
</if>
<if $error>
Error : $error
</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

/////////////////////////////////
// Backup Failed CLI UPGRADE
/////////////////////////////////

// If a backup fails before AUTO UPGRADING an installation (FOR USER)
$l['mail_autoupgrade_backup_fail_sub'] = 'Backup process failed before auto upgrading $scriptname installation';
$l['mail_autoupgrade_backup_fail'] = 'The backup of $scriptname installation has failed. So the auto upgrade process was aborted.
The details are as follows :
Installation URL : $url
Current Version : $oldversion
Latest Version : $version
Error : $error

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

$l['err_openconfig'] = 'Could not open the Configuration File';
$l['err_writeconfig'] = 'Could not write the Configuration File';

$l['classes_con_failed'] = 'Error : Failed to Connect to Server .';
$l['cl_ratings'] = 'Ratings';
$l['cl_author'] = 'Author';
$l['cl_license'] = 'License';
$l['cl_version'] = 'Version';
$l['cl_show_files'] = 'Show Files';
$l['cl_install_but'] = 'Install';
$l['expand_view'] = 'Click here for full view';
$l['collapse_view'] = 'Click here for embedded view';
$l['email_off_notice'] = '<b>NOTE : Notification emails are disabled so you will not receive any email.</b>';

// Add User Language Strings
$l['mail_add_user_sub'] = 'Welcome to Softaculous Remote Installer';
$l['mail_add_user'] = 'You can now successfully login into Softaculous Remote Installer.
The details are as follows :
User 					: $username
API Key 				: $api_key
API Password 			: $api_pass
Number of Users allowed	: $number_of_users';

// Requirement parser languages
$l['req_ver_nf'] = 'Required &soft-1; version &soft-2; &soft-3; AND found version is : ';
$l['req_ext_nf'] = 'Required &soft-1; extension not found :';
$l['req_func_nf'] = 'Required &soft-1; function not found';
$l['req_ext_ver'] = 'Required &soft-1; &soft-2; extension version &soft-3; &soft-4; BUT found &soft-5;';
$l['gt'] = 'greater than';
$l['lt'] = 'less than';
$l['ge'] = 'greater than equal to';
$l['le'] = 'less than equal to';
$l['eq'] = 'is';
$l['ne'] = 'should not be equal to';

// Automated Backup Language Strings
$l['mail_auto_backup_sub'] = 'Automatic Backup of your $scriptname installation';
$l['mail_auto_backup'] = 'The automatic backup of your $scriptname installation was completed successfully.
The details are as follows :
Installation Path : $path
Installation URL : $url
Backup Path : $backup_file
<if $backup_location>Backup Location : $backup_location</if>

You can access the backup from the Backups Section in '.APP.'.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

$l['mail_auto_backup_fail_sub'] = 'Failed : Automatic Backup of your $scriptname installation';
$l['mail_auto_backup_fail'] = 'The automatic backup of your $scriptname installation did not complete successfully.
The details are as follows :
Installation Path : $path
Installation URL : $url
Backup Path : $backup_file
<if $backup_location>Backup Location : $backup_location</if>

The following error occured :
$error

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Email for sending the list of scripts which does not meet the requirements.
$l['mail_script_requirement_sub'] = 'Scripts requirements failed log';
$l['mail_script_requirement'] = 'The following list of script(s) do not meet the minumum requirements on your server and might not work.
The details are as follows :

$failed_req

Note : If you are changing the PHP version on runtime (i.e. using CageFS, hive, .htaccess etc.) than you can ignore the above PHP version failure warnings.
';

// Softpanel Language Strings
$l['no_www_domain'] = 'Please close all '.$globals['sn'].' pages and log out from the control panel using the log out button.
Afterwards you can log in again and use '.$globals['sn'].'.';

$l['install_tweet'] = 'I just installed #[[SCRIPTNAME]] on [[softurl]] via #[[APP]] #[[TYPE]]';
$l['install_tweet_classes'] = 'I just installed #[[SCRIPTNAME]] via #[[APP]] #[[TYPE]]';
$l['upgrade_tweet'] = 'I just upgraded #[[SCRIPTNAME]] on [[softurl]] via #[[APP]] #[[TYPE]]';
$l['clone_tweet'] = 'I just cloned #[[SCRIPTNAME]] on [[softurl]] via #[[APP]] #[[TYPE]]';

// month strings
$l['January'] = 'Ocak';
$l['February'] = 'Şubat';
$l['March'] = 'Mart';
$l['April'] = 'Nisan';
$l['May'] = 'Mayıs';
$l['June'] = 'Haziran';
$l['July'] = 'Temmuz';
$l['August'] = 'Ağustos';
$l['September'] = 'Eylül';
$l['October'] = 'Ekim';
$l['November'] = 'Kasım';
$l['December'] = 'Aralık';

// Mail templates for webuzo backup
$l['mail_webuzo_backup_sub'] = '$type backup completed successfully';
$l['mail_webuzo_backup'] = 'The backup process was completed successfully.
Backup file is created with the file name:
$filename

Regards,
Webuzo Team';
$l['mail_webuzo_backup_fail_sub'] = '$type backup failed';
$l['mail_webuzo_backup_fail'] = 'The backup process did not complete successfully.
The following error(s) occured:
$error

Regards,
Webuzo Team';
$l['mail_webuzo_restore_sub'] = '$type restore completed successfully';
$l['mail_webuzo_restore'] = 'The restoration was completed successfully.

The file restored was:
$filename

Regards,
Webuzo Team';
$l['mail_webuzo_restore_fail_sub'] = '$type restore failed';
$l['mail_webuzo_restore_fail'] = 'The restore process encountered errors and would not be completed.
The following error(s) occured:
$error

Regards,
Webuzo Team';

// Staging Template Vaiable
$l['mail_staging_sub'] = 'Staging of $scriptname';
$l['mail_staging'] = 'Your Staging of $scriptname $version has been completed successfully.

Your live installation details :
Original Path : $live_path
Original URL : $live_url

Your staging installation details :
Path : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>Data Directory : $datadirectory</if>
<if $dbname>MySQL Database : $dbname</if>
<if $dbuser>MySQL DB User : $dbuser</if>
<if $dbhost>MySQL DB Host : $dbhost</if>
<if $dbpass>MySQL DB Password : $dbpass</if>
<if $cron>Cron Job : $cron</if>
<if $time>Time of Installation : $time</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings';

// Pushtolive Template Vaiable
$l['mail_pushtolive_sub'] = 'Pushing $scriptname to live';
$l['mail_pushtolive'] = 'Pushing your $scriptname site $version to live has been completed successfully.

Your live installation details :
Original Path : $live_path
Original URL : $live_url

Your staging installation details :
Path : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>Data Directory : $datadirectory</if>
<if $dbname>MySQL Database : $dbname</if>
<if $dbuser>MySQL DB User : $dbuser</if>
<if $dbhost>MySQL DB Host : $dbhost</if>
<if $dbpass>MySQL DB Password : $dbpass</if>
<if $cron>Cron Job : $cron</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings';

/////////////////////////////////
// Backup Failed CLI UPGRADE of Plugins/Themes
/////////////////////////////////

// If a backup fails before AUTO UPGRADING Plugins/Themes of an installation (FOR USER)
$l['mail_autoupgrade_extras_backup_fail_sub'] = 'Backup process failed before auto upgrading plugins/theme of your $scriptname installation';
$l['mail_autoupgrade_extras_backup_fail'] = 'The backup process of plugins/theme of your $scriptname installation has failed. So the auto upgrade plugins/theme process was not performed.
The details are as follows :
Installation URL : $url
Error : $error

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

/////////////////////////////////
// Upgrade Plugins/Themes By USER
/////////////////////////////////

// Plugins/Theme when upgraded by user successfully (By user)
$l['mail_userupgrade_extras_success_user_sub'] = 'Plugins/Theme of $scriptname installation upgraded successfully';
$l['mail_userupgrade_extras_success_user'] = 'Plugins/Theme of your $scriptname installation have been successfully upgraded to the latest version.
The details are as follows :
Installation URL : $url

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// If UPGRADE and RESTORE Plugins/Theme failed while upgrading, (By user)
$l['mail_userupgrade_extras_restore_fail_user_sub'] = 'Upgrade of Plugins/Theme of your $scriptname installation failed';
$l['mail_userupgrade_extras_restore_fail_user'] = 'The upgrade of plugins/theme of your $scriptname installation has failed.
A backup had been created before upgrading, but the restore process also failed !

It will require a manual restore. Guide for the manual restore is available here :
http://www.softaculous.com/docs/Manual_Restore

The details are as follows :
Installation URL : $url
<if $upgrade_error>
The Upgrade error details are as follows :
Error : $upgrade_error
</if>
<if $error>
The Restore error details are as follows :
Error : $error
</if>

The '.APP.' team is available for help as well. You can contact the '.APP.' Team (support@'.strtolower(APP).'.com) if you face any problems.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// If any error occured while upgrading plugins/theme, (By user)
$l['mail_userupgrade_extras_fail_user_sub'] = 'Upgrade of plugins/theme of your $scriptname installation failed';
$l['mail_userupgrade_extras_fail_user'] = 'The upgrade of plugins/theme of your $scriptname installation has failed.
The details are as follows :
Installation URL : $url
Error : $upgrade_error

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

/////////////////////////////////
// Auto Upgrade Plugins/Themes
/////////////////////////////////

// When AUTOUPGRADED Plugins/Theme successfully
$l['mail_autoupgrade_extras_success_user_sub'] = 'Plugins/Theme of $scriptname Installation Auto Upgraded Successfully';
$l['mail_autoupgrade_extras_success_user'] = 'Plugins/Theme of your $scriptname installation have been successfully auto upgraded to the latest version.
The details are as follows :
Installation URL : $url
<if $plugins_updated>
Following Active Plugins were upgraded :
$plugins_updated
</if>
<if $theme_updated>
Following Active Theme was upgraded :
$theme_updated
</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// If UPGRADE and RESTORE of Plugins/Theme failed while AUTOUPGRADING
$l['mail_autoupgrade_extras_restore_fail_user_sub'] = 'Auto Upgrade of plugins/theme of your $scriptname installation failed';
$l['mail_autoupgrade_extras_restore_fail_user'] = 'The auto upgrade  of plugins/theme of your $scriptname installation has failed.
A backup had been created before upgrading, but the restore process also failed !

It will require a manual restore. Guide for the manual restore is available here :
http://www.softaculous.com/docs/Manual_Restore

The details are as follows :
Installation URL : $url
<if $upgrade_error>
The Upgrade error details are as follows :
Error : $upgrade_error
</if>
<if $error>
The Restore error details are as follows :
Error : $error
</if>

The '.APP.' team is available for help as well. You can contact the '.APP.' Team (support@'.strtolower(APP).'.com) if you face any problems.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// When AUTOUPGRADE Plugins/Theme FAILED
$l['mail_autoupgrade_extras_fail_user_sub'] = 'Auto Upgrade of plugins/theme of your $scriptname installation failed';
$l['mail_autoupgrade_extras_fail_user'] = 'The auto upgrade of plugins/theme of your $scriptname installation has failed.
The details are as follows :
Installation URL : $url
Error : $upgrade_error

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';


// clone fail Language Strings
$l['mail_clone_fail_sub'] = 'Failed : Clone of your $scriptname installation';
$l['mail_clone_fail'] = 'The clone of your $scriptname installation did not complete successfully.
The details are as follows :
Installation Path : $path
Installation URL : $url

The following error occured :
$error

Please try to import the installation again after some time.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// clone fail Language Strings
$l['mail_staging_fail_sub'] = 'Failed : Staging of your $scriptname installation';
$l['mail_staging_fail'] = 'The staging of your $scriptname installation did not complete successfully.
The details are as follows :
Installation Path : $path
Installation URL : $url

The following error occured :
$error

Please try to import the installation again after some time.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

$l['mail_upgrade_fail_sub'] = 'Failed : Upgrade of your $scriptname installation';
$l['mail_upgrade_fail'] = 'The upgrade of your $scriptname installation did not complete successfully.
The details are as follows :
Installation Path : $path
Installation URL : $url

The following error occured :
$error

Please try to upgrade again after some time.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

$l['invalid_resp'] = 'Invalid response received ';

