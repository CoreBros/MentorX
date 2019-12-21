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

$l['no_email'] = 'Nebyla zadána emailová adresa';
$l['wrong_email'] = 'Zadaná emailová adresa není platná';
$l['off_email_link'] = 'Email settings have been disabled by admin';

//Theme Strings
$l['<title>'] = APP.' - Email Settings';
$l['emailsettings'] = 'Nastavení emailu';
$l['email_address'] = 'Emailová adresa';
$l['email_exp'] = 'Emailová adresa pro zasílání emailů';
$l['ins_email'] = 'Emaily o instalaci';
$l['ins_email_exp'] = 'Poslat email obsahující podrobnosti nastavení při instalaci nového softwaru';
$l['rem_email'] = 'Odstranit instalace';
$l['rem_email_exp'] = 'Poslat email, je-li software odinstalován';
$l['edit_settings'] = 'Upravit nastavení emailů';
$l['settings_saved'] = 'Vaše nastavení emailů bylo úspěšně uloženo';
$l['editdetail_email'] = 'Upravit instalace';
$l['editdetail_email_exp'] = 'Poslat email v případě, že jsou podrobnosti instalace upraveny';
$l['disable_all_notify_update'] = 'Zablokovat všechna upozornění o aktualizaci';
$l['disable_all_notify_update_exp'] = 'Je-li zaškrtnuto, nebudete dostávat emailové upozornění na aktualizace dostupné pro <b>VŠECHNY</b> vaše instalace.';
$l['backup_email'] = 'Emaily o zálohování';
$l['backup_email_exp'] = 'Zaslat email obsahující podrobnosti zálohy při zálohování jakékoliv instalace';
$l['clone_email'] = 'Emaily o klonování';
$l['clone_email_exp'] = 'Poslat email obsahující podrobnosti instalace při klonování jakékoliv instalace';
$l['restore_email'] = 'Emaily o obnově';
$l['restore_email_exp'] = 'Poslat email obsahující podrobnosti obnovy při obnovení jakékoliv instalace';
$l['done'] = 'Done';
$l['email_password_user'] = 'Email password in plain text';
$l['email_password_user_exp'] = 'If checked, the passwords will be sent in plain-text to the users via email for install, clone, etc.';
$l['import_email'] = 'Import Emails'; 
$l['import_email_exp'] = 'Send an email containing details of the installation you have imported';

$l['staging_email'] = 'Staging Emails';
$l['staging_email_exp'] = 'Send an email containing installation details when you create a staging environment of any installation'; 