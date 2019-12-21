<?php

//////////////////////////////////////////////////////////////
//===========================================================
// login_lang.php
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
	global $softpanel;

$l['user_data_missing'] = 'Il campo nome utente o password è vuoto.';
$l['invalid_username'] = 'Nome utente o password non corretta';
$l['invalid_password'] = 'Nome utente o password non corretta'; 
$l['invalid_user'] = 'Nome utente o password non corretta'; 
$l['no_username'] = 'Il campo Nome Utente è vuoto.';
$l['no_password'] = 'Il campo Password è vuoto.';
$l['disable_user'] = 'Accesso disattivato da un utente <strong>root</strong>.';

$l['<title>'] = 'Login';
$l['sign_in'] = 'Accedi';
$l['log_user'] = 'Nome utente';
$l['log_pass'] = 'Password';
$l['sub_but'] = 'Login';

$l['<title_fpass>'] = 'Password dimenticata';
$l['pass_nomatch'] = 'Nome utente o password non corretta.';
$l['forgotpass'] = 'Password dimenticata';
$l['emailuser'] = 'Indirizzo email';
$l['enteremail'] = 'Inserisci il tuo indirizzo email';
$l['sub_email'] = 'Inviare';
$l['no_email'] = 'Non hai fornito il tuo indirizzo email';
$l['invalidemail'] = 'L\'indirizzo email indicato non è valido';
$l['mail_sub'] = 'Reimpostare password';
$l['mail_body'] = 'Hi,
						
A request to reset your password has been made.
If you did not request the password reset, then please ignore this email.

If you would like to reset your password, then please click the URL below :
http://'.(($globals['softpanel'] == 'webuzo') ? $softpanel->getConf('WU_PRIMARY_DOMAIN').':2002' : '127.0.0.1').'/index.php?act=login&sa=resetpass&key=&soft-1;

Riconoscimenti,
'.$globals['sn'];
$l['mail_done'] = 'Una mail è stata inviata con i dettagli per reimpostare la tua password';
$l['fuser_mail_sub'] = 'Nome utente Webuzo';
$l['fuser_mail_body'] = 'Hi,
						
A request to fetch the Nome utente Webuzo has been made.
If you did not request the Nome utente Webuzo, then please ignore this email.

Login to the URL below :
http://'.(($globals['softpanel'] == 'webuzo') ? $softpanel->getConf('WU_PRIMARY_DOMAIN').':2002' : '127.0.0.1').'/index.php?act=login

Nome utente : &soft-1;

Riconoscimenti,
'.$globals['sn'];
$l['fuser_mail_done'] = 'Abbiamo inviato una mail con il nome utente Webuzo';
$l['forgotuser'] = 'Nome utente dimenticato';
$l['back_to_login'] = 'Torna a Login';

$l['<title_reset>'] = 'Reimpostare password';
$l['resetpass'] = 'Reimpostare password';
$l['log_new_pass'] = 'Nuova password'; 
$l['log_reppass'] = 'Confermare password';
$l['changepass'] = 'Cambiare password';
$l['no_key'] = 'Non è stata registrata alcuna chiave di ripristino';
$l['invalidkey'] = 'Hai specificato una chiave non valida';
$l['no_new'] = 'Ti preghiamo di inserire una password valida';
$l['no_reppass'] = 'Ti preghiamo di inserire la password di conferma';
$l['no_match'] = 'Le password indicate non coincidono.';
$l['keyexpire'] = 'La chiave non è più valida';
$l['passchanged'] = 'La password è stata cambiata con successo. Please proceed to <a href="'.$globals['index'].'act=login">Login</a>';
$l['forgot_pass'] = 'Password dimenticata';

