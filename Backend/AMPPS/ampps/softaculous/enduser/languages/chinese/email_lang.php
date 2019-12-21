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

$l['no_email'] = '沒有指定的電子郵件地址';
$l['wrong_email'] = '指定的電子郵件地址是錯誤的';
$l['off_email_link'] = 'Email settings have been disabled by admin';

//語法heme Strings
$l['<title>'] = APP.' - 電子郵件選項';
$l['emailsettings'] = '電子郵件選項';
$l['email_address'] = '電子郵件地址';
$l['email_exp'] = '選擇一個地址來寄送電子郵件';
$l['ins_email'] = '安裝包電子郵件';
$l['ins_email_exp'] = '寄送一封包含安裝資訊的電子郵件當您安裝了一個新的語法';
$l['rem_email'] = '刪除安裝包';
$l['rem_email_exp'] = '寄送一封郵件當有語法被移除時';
$l['edit_settings'] = '編輯郵件設定';
$l['settings_saved'] = '您的電子郵件設定已經成功儲存';
$l['editdetail_email'] = '編輯安裝包';
$l['editdetail_email_exp'] = '寄送一封電子郵件當有安裝包的設定被變更時';
$l['disable_all_notify_update'] = '取消所有更新電子郵件';
$l['disable_all_notify_update_exp'] = '如果選擇了這個選項將不會寄送任何有關於語法更新的 <b>所有</b> 電子郵件.';
$l['backup_email'] = '備份電子郵件';
$l['backup_email_exp'] = '當製作備份時傳送一封郵件';
$l['clone_email'] = '複製資訊電子郵件';
$l['clone_email_exp'] = '傳送一封郵件當有安裝包被複製時';


$l['restore_email'] = 'Restore Emails';
$l['restore_email_exp'] = 'Send an email containing restore details when you restore any installation';
$l['done'] = 'Done';
$l['email_password_user'] = 'Email password in plain text';
$l['email_password_user_exp'] = 'If checked, the passwords will be sent in plain-text to the users via email for install, clone, etc.';
$l['import_email'] = 'Import Emails'; 
$l['import_email_exp'] = 'Send an email containing details of the installation you have imported'; 

$l['staging_email'] = 'Staging Emails';
$l['staging_email_exp'] = 'Send an email containing installation details when you create a staging environment of any installation';