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

$l['no_email'] = 'Es wurde keine E-Mail Adresse angegeben';
$l['wrong_email'] = 'Die angegebene E-Mail Adresse ist ungültig';
$l['off_email_link'] = 'Email settings have been disabled by admin';

//Theme Strings
$l['<title>'] = APP.' - E-Mail Einstellungen';
$l['emailsettings'] = 'E-Mail Einstellungen';
$l['email_address'] = 'E-Mail Adresse';
$l['email_exp'] = 'Die E-Mail Adresse an die Mails gesendet werden sollen.';
$l['ins_email'] = 'Installations E-Mails';
$l['ins_email_exp'] = 'Eine E-Mail mit Setup Details versenden, wenn Sie neue Software installieren.';
$l['rem_email'] = 'Installationen löschen';
$l['rem_email_exp'] = 'Eine E-Mail senden, wenn eine Software deinstalliert wird.';
$l['edit_settings'] = 'E-Mail Einstellungen bearbeiten.';
$l['settings_saved'] = 'Ihre E-Mail Einstellungen wurden erfolgreich gespeichert.';
$l['editdetail_email'] = 'Installationen bearbeiten';
$l['editdetail_email_exp'] = 'Eine E-Mail senden, wenn die Details einer Installation geändert wurden.';
$l['disable_all_notify_update'] = 'Alle Update Benachrichtigungen deaktivieren';
$l['disable_all_notify_update_exp'] = 'Wenn diese Option gesetzt ist, werden Sie <b>keine</b> E-Mail Benachrichtigungen über verfügbare Updates <b>ALLER</b> Installationen erhalten.';
$l['backup_email'] = 'Backup E-Mails';
$l['backup_email_exp'] = 'Eine E-Mail verschicken, die die Backup Details enthält, wenn ein Backup gemacht wird.';
$l['clone_email'] = 'Klon E-Mails';
$l['clone_email_exp'] = 'Eine E-Mail verschicken, die die Installations Details enthält, wenn eine Installation geklont wird.';
$l['restore_email'] = 'Wiederherstellungs E-Mails';
$l['restore_email_exp'] = 'Eine E-Mail verschicken, die die Wiederherstellungsdetails enthalt, wenn eine Installation wiederhergestellt wird';
$l['done'] = 'Done';
$l['email_password_user'] = 'Email password in plain text';
$l['email_password_user_exp'] = 'If checked, the passwords will be sent in plain-text to the users via email for install, clone, etc.';
$l['import_email'] = 'Import Emails'; 
$l['import_email_exp'] = 'Send an email containing details of the installation you have imported'; 

$l['staging_email'] = 'Staging Emails';
$l['staging_email_exp'] = 'Send an email containing installation details when you create a staging environment of any installation';