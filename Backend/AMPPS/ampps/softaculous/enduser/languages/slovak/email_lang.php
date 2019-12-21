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

$l['no_email'] = 'Nebola určená žiadna emailová adresa';
$l['wrong_email'] = 'Zadaná emailová adresa je neplatná';
$l['off_email_link'] = 'Email settings have been disabled by admin';

//Theme Strings
$l['<title>'] = APP.' - Email Settings';
$l['emailsettings'] = 'Nastavenia emailu';
$l['email_address'] = 'Emailové adresy';
$l['email_exp'] = 'Emailová adresa pre zasielanie emailov';
$l['ins_email'] = 'Inštalácia emailov';
$l['ins_email_exp'] = 'Zaslať email obsahujúci údaje pre nastavenie, keď nainštalujete nový softvér';
$l['rem_email'] = 'Odstrániť inštalácie';
$l['rem_email_exp'] = 'Odoslať email pri odinštalovaní softvéru';
$l['edit_settings'] = 'Upraviť nastavenia emailu';
$l['settings_saved'] = 'Vaše nastavenia emailu boli úspešne uložené';
$l['editdetail_email'] = 'Upraviť inštalácie';
$l['editdetail_email_exp'] = 'Odoslať email pri zmene detailov niektorej inštalácie';
$l['disable_all_notify_update'] = 'Zakázať všetky upozornenia o aktualizáciach';
$l['disable_all_notify_update_exp'] = 'Ak zaškrtnuté, nedostanete upozornenie emailom na dostupné aktualizácie pre <b>VŠETKY</b> vaše inštalácie.';
$l['backup_email'] = 'Zálohovať emaily';
$l['backup_email_exp'] = 'Odoslať email obsahujúci detaily zálohy pri zálohe akejkoľvek inštalácie';
$l['clone_email'] = 'Naklonovať emaily';
$l['clone_email_exp'] = 'Odoslať email obsahujúci detaily inštalácie pri naklonovaní akejkoľvek inštalácie';
$l['restore_email'] = 'Obnoviť emaily';
$l['restore_email_exp'] = 'Odoslať email obsahujúci detaily obnovy pri obnove akejkoľvek inštalácie';
$l['done'] = 'Done';
$l['email_password_user'] = 'Email password in plain text';
$l['email_password_user_exp'] = 'If checked, the passwords will be sent in plain-text to the users via email for install, clone, etc.';
$l['import_email'] = 'Import Emails'; 
$l['import_email_exp'] = 'Send an email containing details of the installation you have imported'; 

$l['staging_email'] = 'Staging Emails';
$l['staging_email_exp'] = 'Send an email containing installation details when you create a staging environment of any installation';