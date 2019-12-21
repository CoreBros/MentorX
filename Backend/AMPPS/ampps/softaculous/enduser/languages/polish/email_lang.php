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

$l['no_email'] = 'Adres e-mail nie został podany';
$l['wrong_email'] = 'Potwierdzony adres e-mail nie jest poprawny';
$l['off_email_link'] = 'Email settings have been disabled by admin';

//Theme Strings
$l['<title>'] = APP.' - Email Settings';
$l['emailsettings'] = 'Ustawienia E-mail';
$l['email_address'] = 'Adres e-mail';
$l['email_exp'] = 'Adres e-mail do wysyłania maili do';
$l['ins_email'] = 'Instalacje email';
$l['ins_email_exp'] = 'Wyślij wiadomość e-mail zawierającą szczegóły ustawień po zainstalowaniu nowego oprogramowania';
$l['rem_email'] = 'Usunąć instalacje';
$l['rem_email_exp'] = 'Wyślij e-mail kiedy oprogramowanie jest odinstalowane';
$l['edit_settings'] = 'Edytuj ustawienia E-mail';
$l['settings_saved'] = 'Ustawienia E-mail zostały pomyślnie zapisane';
$l['editdetail_email'] = 'Edycja instalacji';
$l['editdetail_email_exp'] = 'Wyślij wiadomość e-mail kiedy zmienią się szczegóły instalacji';
$l['disable_all_notify_update'] = 'Wyłącz wszystkie powiadomienia o aktualizacji';
$l['disable_all_notify_update_exp'] = 'Jeśli zaznaczone, nie będziesz otrzymywać żadnych powiadomienie e-mail odnośnie aktualizacji dla <b>wszystkich</b> instalacji.';
$l['backup_email'] = 'Backup emaila';
$l['backup_email_exp'] = 'Wyślij wiadomość email zawierającą szczegóły backupu kiedy wykonujesz kopię zapasową instalacji';
$l['clone_email'] = 'Klonuj email';
$l['clone_email_exp'] = 'Wyślij wiadomość email zawierającą szczegóły instalacji, która została sklonowana';
$l['restore_email'] = 'Przywróć emaile';
$l['restore_email_exp'] = 'Wyślij wiadomość email zawierającą szczegóły odzyskanej instalacji ';
$l['done'] = 'Done';
$l['email_password_user'] = 'Email password in plain text';
$l['email_password_user_exp'] = 'If checked, the passwords will be sent in plain-text to the users via email for install, clone, etc.';
$l['import_email'] = 'Import Emails'; 
$l['import_email_exp'] = 'Send an email containing details of the installation you have imported'; 

$l['staging_email'] = 'Staging Emails';
$l['staging_email_exp'] = 'Send an email containing installation details when you create a staging environment of any installation';