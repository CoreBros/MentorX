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

$l['no_email'] = 'Няма посочен имейл адрес';
$l['wrong_email'] = 'Посоченият имейл адрес е невалиден';
$l['off_email_link'] = 'Email settings have been disabled by admin';

//Theme Strings
$l['<title>'] = APP.' - Имейл настройки';
$l['emailsettings'] = 'Имейл настройки';
$l['email_address'] = 'Имейл адрес';
$l['email_exp'] = 'Адресът на електронната поща, да изпрати писма до';
$l['ins_email'] = 'Инсталиране имейли';
$l['ins_email_exp'] = 'Изпрати имейл, съдържащ подробности за настройки, когато инсталирате нов софтуер';
$l['rem_email'] = 'Премахване на инсталации';
$l['rem_email_exp'] = 'Изпрати имейл, когато е деинсталиран софтуер';
$l['edit_settings'] = 'Редактиране на настройките на имейла';
$l['settings_saved'] = 'Настройките на имейла са запазени успешно';
$l['editdetail_email'] = 'Редактиране на инсталации';
$l['editdetail_email_exp'] = 'Изпращане на имейл, когато се променят детайлите на дадена инсталация';
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