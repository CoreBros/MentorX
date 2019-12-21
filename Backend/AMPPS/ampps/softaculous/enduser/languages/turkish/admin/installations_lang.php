<?php

//////////////////////////////////////////////////////////////
//===========================================================
// installations_lang.php
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

$l['no_submit'] ='Kurulumlar için email seçilmedi.';
$l['user_soft_upd_sub'] = 'Script Güncellemesi Mevcut';
$l['posix_error'] = 'POSIX function is disabled. Please enable POSIX function to perform Upgrade for Installations.';
$l['shellexec_error'] = 'exec function is disabled. Please enable exec function to perform Upgrade for Installations.';
$l['user_soft_upd'] = 'Bu mail zamanı geçmiş PHP scriptlerinizn olduğu için gönderimiştir. Güvenliğiniz için zamanı geçmiş yazılımlarınızı güncellemeniz gerekmektedir..
Aşağıdaki yazılımların güncellenmesi gerekiyor:

&soft-1;
Scriptleri güncellemek için Kontrol Paneli-> '.APP.' -> Kurulumlar.
Buradan bütün scriptlerinizi güncelleyebilirsiniz.

Sistem yöneticisi tarafından gönderildi';
$l['no_reseller_upgrade_ins'] = 'Resellers are not allowed to auto upgrade installations';
$l['no_ins_selected'] = 'No installation(s) selected for Upgrade.';

//Theme Strings
$l['<title>'] = ''.APP.' - Kurulum Listesi';
$l['searchinstallations'] = 'Kurulumları Listele';
$l['search_scripts'] = 'Scriptler';
$l['search_scripts_exp'] = 'Hepsi için boş bırakınız. Çoklu için ise \'<b>;</b>\' ile ayırın';
$l['search_users'] = 'Kullanıcılar';
$l['search_users_exp'] = 'Hepsi için boş bırakınız. Çoklu üye seçimi için ise \'<b>;</b>\' ile ayırın';
$l['group_by_scripts'] = 'Gruplara Göre Scriptler';
$l['group_by_scripts_exp'] = 'Kullanıcılara göre';
$l['only_outdated'] = 'Sadece zamanı geçmiş kurulumları göster';
$l['only_outdated_exp'] = 'Bütün kurulumları göster';
$l['li_user'] = 'Kullanıcılar';
$l['li_scripts'] = 'Scriptler';
$l['li_domains'] = 'Domains';
$l['li_url'] = 'URL';
$l['li_insver'] = 'Yüklü Versiyon';// Installed Ver
$l['li_ver'] = 'Versiyon';
$l['li_realver'] = 'Real Ver';
$l['no_results'] = 'Sonuç bulunamadı';
$l['search_ins'] = 'Arama';
$l['with_selected'] = 'Seçililer';
$l['sub_email_users'] = 'Yeni versiyonu üyelere bildir';
$l['emailed_users'] = 'Bu seçenek yazılımların yeni versiyonu çıktığında söz konusu yazılımı kullanan üyelere email gönderir.';
$l['sub_upgrade_ins'] = 'Upgrade';
$l['upgrading_ins'] = 'Upgrading Installations...';
$l['upgraded_ins'] = 'The Auto upgrade process has finished and the details have been sent via email.';
$l['upgraded'] = 'Upgraded';
$l['failed'] = 'Failed';
$l['go_to_autoupgrade'] = 'Go to List';
$l['upgrading_completed'] = 'Upgrade Finished';
$l['beta_note'] = '<b>Note</b> : This feature is in <b>BETA VERSION</b>. <a href="http://softaculous.com/docs/Auto_Upgrade" target="_blank">Read More..</a>';
$l['wait_note'] = '<b>Note</b> : Please don\'t leave this page until all the installations are upgraded.';
$l['tasklist_button'] = 'Task List';
$l['auto_upgrade_enabled'] = 'Auto Upgrade Enabled';
$l['real_ver_notice'] = 'The real version does not match with '.APP.' records. It seems that the user has upgraded installation(s) manually.';
$l['latest_ver_notice'] = 'Latest version is available for the installation(s).';
$l['update_records'] = 'Update '.APP.' records';
$l['no_submit_rec'] = 'No installation(s) were selected for updating '.APP.' records';
$l['err_update_record'] = 'Error occured while updating version in '.APP.' records';
$l['succ_update_record'] = 'Successfully updated version for selected installation(s) in '.APP.' record';
$l['only_realversion'] = 'Show Real Version';
$l['only_realversion_exp'] = 'If checked '.APP.' will try to detect the real version of the installations.<br /><b>Note</b>: This might take time as it will find the real version by scanning the files of the installations';
$l['no_info'] = 'No Info';
$l['search_domains'] = 'Domains';
$l['search_domains_exp'] = 'Leave blank for all. For multiple domains seperate with \'<b>;</b>\'';

$l['auto_upgrade_major'] = '(Major and Minor)'; 
$l['auto_upgrade_minor'] = '(Minor)';