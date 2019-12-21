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

$l['no_email'] = 'Geen e-mail adres opgegeven';//No email address was specified
$l['wrong_email'] = 'U heeft geen geldig e-mail adres opgegeven';//The submitted email address is not valid
$l['off_email_link'] = 'Email settings have been disabled by admin';

//Theme Strings
$l['<title>'] = APP.' - E-mail instellingen';//Softaculous - Email Settings
$l['emailsettings'] = 'E-mail instellingen';//Email Settings
$l['email_address'] = 'E-mail adres';//Email Address
$l['email_exp'] = 'Via deze optie kunt u het e-mail adres instellen dat wordt gebruikt voor e-mail notificaties van de script installer.';//The email address to send mails to
$l['ins_email'] = 'Script installeren e-mails';//Installation Emails
$l['ins_email_exp'] = 'Via deze optie kunt u aangeven dat u een e-mail met de setup gegevens wilt ontvangen nadat u de installatie van een script heeft voltooid.';//Send an email containing setup details when you install a new software
$l['rem_email'] = 'Script verwijderen e-mails';//Remove Installations
$l['rem_email_exp'] = 'Via deze optie kunt u aangeven dat u een e-mail wilt ontvangen nadat u een script heeft verwijderd.';//Send an email when a software is uninstalled
$l['edit_settings'] = 'Wijzig e-mail instellingen';//Edit Email Settings
$l['settings_saved'] = 'Uw e-mail instellingen zijn succesvol opgeslagen';//Your Email settings were saved successfully
$l['editdetail_email'] = 'Script wijzigen e-mails';
$l['editdetail_email_exp'] = 'Via deze optie kunt u aangeven dat u een e-mail wilt ontvangen nadat u een script heeft gewijzigd.';
$l['disable_all_notify_update'] = 'Update notificaties uitschakelen';
$l['disable_all_notify_update_exp'] = 'Via deze optie kunt u aangeven dat u geen e-mail notificaties wilt ontvangen wanneer een update voor een script beschikbaar is. Deze instelling geldt voor <b>alle</b> door u geïnstalleerde scripts.';
$l['backup_email'] = 'Backup e-mails';
$l['backup_email_exp'] = 'Via deze optie kunt u aangeven dat u een e-mail wilt ontvangen wanneer er een backup van een script gemaakt is.';
$l['clone_email'] = 'Clone e-mails';
$l['clone_email_exp'] = 'Via deze optie kunt u aangeven dat u een e-mail wilt ontvangen wanneer er een clone van een script gemaakt is.';
$l['restore_email'] = 'Restore Emails';
$l['restore_email_exp'] = 'Send an email containing restore details when you restore any installation';
$l['done'] = 'Done';
$l['email_password_user'] = 'Email password in plain text';
$l['email_password_user_exp'] = 'If checked, the passwords will be sent in plain-text to the users via email for install, clone, etc.';
$l['import_email'] = 'Import Emails'; 
$l['import_email_exp'] = 'Send an email containing details of the installation you have imported'; 

$l['staging_email'] = 'Staging Emails';
$l['staging_email_exp'] = 'Send an email containing installation details when you create a staging environment of any installation';