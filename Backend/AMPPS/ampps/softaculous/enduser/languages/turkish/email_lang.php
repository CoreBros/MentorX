<?php

//////////////////////////////////////////////////////////////
//===========================================================
// email_lang.php
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

$l['no_email'] = 'E-posta adresi bilgisi yok';
$l['wrong_email'] = 'E-posta adresi geçerli değil';
$l['off_email_link'] = 'Email settings have been disabled by admin';

//Theme Strings
$l['<title>'] = ''.APP.' - E-posta ayarları';
$l['emailsettings'] = 'E-posta Ayarları';
$l['email_address'] = 'E-posta Adresleri';
$l['email_exp'] = 'Gönderilecek postalar bu e-posta adresine gönderilir';
$l['ins_email'] = 'Kurulum Bilgilendirme Postaları';
$l['ins_email_exp'] = 'Kurulum tamamlandığında kurulum bilgileri gönderilir.';
$l['rem_email'] = 'Silindi Bilgilendirmesi Postaları';
$l['rem_email_exp'] = 'Silinen kurulumunuz olduğudna bilgileri gönderilir';
$l['edit_settings'] = 'Posta Ayarlarını Değiştir';
$l['settings_saved'] = 'E-posta ayarlarınız başarıyla değiştirilmiştir';
$l['editdetail_email'] = 'Edit Installations';
$l['editdetail_email_exp'] = 'Send an email when the details of an installation is modified';
$l['disable_all_notify_update'] = 'Disable All Update Notifications Emails';
$l['disable_all_notify_update_exp'] = 'If checked you will not receive any email notification for updates available for <b>ALL</b> your installations.';
$l['backup_email'] = 'Backup Emails';
$l['backup_email_exp'] = 'Send an email containing backup details when you backup any installation';
$l['clone_email'] = 'Clone Emails';
$l['clone_email_exp'] = 'Send an email containing installation details when you clone any installation';
$l['restore_email'] = 'Restore Emails';
$l['restore_email_exp'] = 'Send an email containing restore details when you restore any installation';
$l['done'] = 'Done';
$l['email_password_user'] = 'Email password in plain text';
$l['email_password_user_exp'] = 'If checked, the passwords will be sent in plain-text to the users via email for install, clone, etc.';
$l['import_email'] = 'Import Emails'; 
$l['import_email_exp'] = 'Send an email containing details of the installation you have imported'; 

$l['staging_email'] = 'Staging Emails';
$l['staging_email_exp'] = 'Send an email containing installation details when you create a staging environment of any installation';