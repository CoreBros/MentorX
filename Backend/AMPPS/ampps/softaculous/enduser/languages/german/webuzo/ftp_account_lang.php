<?php

//////////////////////////////////////////////////////////////
//===========================================================
// ftp_account_lang.php
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

$l['no_new'] = 'Du hast nicht das Kennwort angeben .';
$l['no_conf'] = 'Die Bestätigung Passwort fehlt.';
$l['no_match'] = 'Die Passwörter, die Sie gaben stimmen nicht überein';
$l['no_dir'] = 'Du hast nicht das Verzeichnis angeben,';
$l['no_user'] = 'Bitte geben Sie den Benutzernamen';
$l['no_quota_limit'] = 'Bitte geben Sie Quota-Limit';
$l['err_invalid_user'] = 'Ungültiger Benutzername';
$l['err_invalid_quotalimit'] = 'Quota-Limit muss eine positive ganze Zahl sein';
$l['err_add_msg'] = 'Es gab einige Fehler beim Hinzufügen neue FTP-Benutzer. Bitte versuchen Sie es erneut.' ;
// Theme Strings
$l['<title>'] = APP.' - FTP-Account hinzufügen';
$l['loginname']='Login';
$l['ftp']='FTP-Account hinzufügen';
$l['new_pass']='Passwort';
$l['retype_pass']='Passwort (Again)';
$l['directory'] = 'Verzeichnis';
$l['path'] = 'Das Verzeichnis dieser Benutzer zugreifen darf sein';
$l['submit_button']='Konto erstellen';
$l['change_note'] = 'Kennwort ändern';
$l['change_final'] = 'FTP-Benutzer angelegt';
$l['change_onboot'] = 'Ihr Passwort wird geändert, wenn die VPS wieder gestartet wird werden';
$l['user_exist'] = 'Benutzername bereits vorhanden';
$l['lbl_ftp_manage'] = 'Zurück zu FTP verwalten';
$l['quota'] = 'Quote';
$l['unlimited'] = 'unbegrenzt';
$l['limited'] = 'MB';
$l['randpass'] = 'Generate a Random Password';
$l['service_stop'] = 'Your Pure-FTPd service is not running currently. Click here to start.';
$l['is_domain_resolve'] = 'Your Domain does not resolve to the server IP ! So use the IP as Host instead of the domain name, while connecting.';
$l['change_final'] = 'FTP user created.<br/>Return to <a href="'.$globals['index'].'act=ftp">Manage FTP</a>';