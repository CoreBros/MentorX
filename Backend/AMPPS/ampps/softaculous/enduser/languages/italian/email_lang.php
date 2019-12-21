<?php

//////////////////////////////////////////////////////////////
//===========================================================
// email_lang.php
//===========================================================
// SOFTACULOUS 
// Versione : 1.1
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

$l['no_email'] = 'Non &egrave; stato inserito nessun indirizzo e-mail';
$l['wrong_email'] = 'L\'indirizzo e-mail inserito non &egrave; valido';
$l['off_email_link'] = 'Email settings have been disabled by admin';

//Theme Strings
$l['<title>'] = APP.' - Impostazioni e-mail';
$l['emailsettings'] = 'Impostazioni e-mail';
$l['email_address'] = 'Indirizzo e-mail';
$l['email_exp'] = 'Indirizzo E-mail a cui inviare messaggi';
$l['ins_email'] = 'E-mail di installazione';
$l['ins_email_exp'] = 'Quando viene installato un nuovo software, invia un\'e-mail contenente informazioni sulle impostazioni'; 
$l['rem_email'] = 'Rimuovere le installazioni';
$l['rem_email_exp'] = 'Invia un\'e-mail quando un software viene disinstallato';
$l['edit_settings'] = 'Modifica impostazioni E-mail';
$l['settings_saved'] = 'Le nuove impostazioni sono state salvate con successo';
$l['editdetail_email'] = 'Modificare le installazioni';
$l['editdetail_email_exp'] = 'Invia una mail quando cambiano i dettagli d\'installazione';
$l['disable_all_notify_update'] = 'Disattivare tutte le notifiche di aggiornamento';
$l['disable_all_notify_update_exp'] = 'Se spuntato, non riceverai alcuna notifica email sugli aggiornamenti disponibili per le tue installazioni <b>TUTTI</b>.';
$l['backup_email'] = 'E-mail di backup';
$l['backup_email_exp'] = 'Quando esegui un backup dell\'installazione, invia una mail con i dettagli di backup';
$l['clone_email'] = 'Clonare email';
$l['clone_email_exp'] = 'Quando esegui una clonazione dell\'installazione, invia una mail con i dettagli d\'installazione';
$l['restore_email'] = 'Ripristina e-mail';
$l['restore_email_exp'] = 'Invia un\'e-mail contenente i dettagli del ripristino quando ripristini qualsiasi installazione';
$l['done'] = 'Done';
$l['email_password_user'] = 'Email password in plain text';
$l['email_password_user_exp'] = 'If checked, the passwords will be sent in plain-text to the users via email for install, clone, etc.';
$l['import_email'] = 'Import Emails'; 
$l['import_email_exp'] = 'Send an email containing details of the installation you have imported'; 

$l['staging_email'] = 'Staging Emails';
$l['staging_email_exp'] = 'Send an email containing installation details when you create a staging environment of any installation';