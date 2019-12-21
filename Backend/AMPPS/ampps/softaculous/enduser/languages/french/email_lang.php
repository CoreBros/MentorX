<?php

//////////////////////////////////////////////////////////////
//===========================================================
// email_lang.php
//===========================================================
// SOFTACULOUS FRENCH PACK
// Version 4
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Date:       10th Jan 2009
// Time:       21:00 hrs
// Site:       http://www.softaculous.com/ (SOFTACULOUS)
// ----------------------------------------------------------
// Edited by:  Romain Fluttaz
// Date:       1 July 2009
// Time:       15:00 hrs
// Site:       http://botux.fr/
// ----------------------------------------------------------
// Edited by:  Michel LAURENT
// Date:       25th Augustus 2009
// Time:       18:00 hrs
// Site:       http://www.equipc.net
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

$l['no_email'] = 'Aucune adresse e-mail n\'a été spécifiée';
$l['wrong_email'] = 'L\'adresse e-mail fournie n\'est pas valide';
$l['off_email_link'] = 'Email settings have been disabled by admin';

//Theme Strings
$l['<title>'] = APP.' - Configuration des courriels';
$l['emailsettings'] = 'Configuration des courriels';
$l['email_address'] = 'Adresse courriel';
$l['email_exp'] = 'L\'adresse courriel à laquelle les messages doivent être envoyé.';
$l['ins_email'] = 'Courriels lors d\'une installation';
$l['ins_email_exp'] = 'Envoyer un courriel contenant les détails de l\'installation lorsque vous installez un nouveau logiciel';
$l['rem_email'] = 'Courriels lors dune désintallation';
$l['rem_email_exp'] = 'Envoyer un e-mail lorsqu\'un logiciel est désinstallé';
$l['edit_settings'] = 'Enregistrer la configuaration des e-mails';
$l['settings_saved'] = 'Vos réglages ont été sauvegardés avec succès';
$l['editdetail_email'] = 'Edit Installations';
$l['editdetail_email_exp'] = 'Send an email when a software details are modified';
$l['disable_all_notify_update'] = 'Désactiver toutes les notifications de mise à jour';
$l['disable_all_notify_update_exp'] = 'Si vous cochez cette case, vous ne recevrez aucune notification par courrier électronique pour les mises à jour disponibles pour <b> TOUT </b> vos installations.';
$l['backup_email'] = 'Courriels d sauvegarde';
$l['backup_email_exp'] = 'Envoyer un courriel contenant des informations de sauvegarde lors de la sauvegarde d\'une installation';
$l['clone_email'] = 'Courriels d clonage';
$l['clone_email_exp'] = 'Envoyer un courriel contenant les informations d\'installation lors du clonage d\'une installation';
$l['restore_email'] = 'Restore Emails';
$l['restore_email_exp'] = 'Send an email containing restore details when you restore any installation';
$l['done'] = 'Done';
$l['email_password_user'] = 'Envoyer le mot de passe en texte brut';
$l['email_password_user_exp'] = 'Si cette case est cochée, les mots de passe seront envoyés en texte brut par courriel aux utilisateurs pour une installation, clonage, etc.';
$l['import_email'] = 'Import Emails'; 
$l['import_email_exp'] = 'Send an email containing details of the installation you have imported'; 

$l['staging_email'] = 'Staging Emails';
$l['staging_email_exp'] = 'Send an email containing installation details when you create a staging environment of any installation';