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

$l['no_email'] = 'Не указан адрес электронной почтц';
$l['wrong_email'] = 'Указанный адрес электронной почты недействительный';
$l['off_email_link'] = 'Email settings have been disabled by admin';

//Theme Strings
$l['<title>'] = ''.APP.' - Настройки Электронной почты';
$l['emailsettings'] = 'Настройка Электронной почты';
$l['email_address'] = 'Адрес Электронной почты';
$l['email_exp'] = 'Адрес электронной почты для отправки почты для';
$l['ins_email'] = 'Письма об установке';
$l['ins_email_exp'] = 'Отправлять письмо, содержащее детали установки при установке нового программного обеспечения';
$l['rem_email'] = 'Письма об удалении';
$l['rem_email_exp'] = 'Отправить письмо при удалении программного обеспечения';
$l['edit_settings'] = 'Сохранить настройки Электронной почты';
$l['settings_saved'] = 'Настройки электронной почты были успешно сохранены';
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