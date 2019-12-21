<?php

//////////////////////////////////////////////////////////////
//===========================================================
// login_lang.php
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
	global $softpanel;

$l['user_data_missing'] = 'A felhasználó név vagy jelszó mező üres maradt';
$l['invalid_username'] = 'Érvénytelen felhasználónevet vagy jelszót adott meg';
$l['invalid_password'] = 'Érvénytelen felhasználónevet vagy jelszót adott meg'; 
$l['invalid_user'] = 'Érvénytelen felhasználónevet vagy jelszót adott meg'; 
$l['no_username'] = 'A felhasználó név mező üres maradt';
$l['no_password'] = 'A jelszó mező üres maradt';
$l['disable_user'] = 'Belépést letiltotta a <strong>root</strong> felhasználó.';

$l['<title>'] = 'Bejelentkezés';
$l['sign_in'] = 'Bejelentkezés';
$l['log_user'] = 'Felhasználó név';
$l['log_pass'] = 'Jelszó';
$l['sub_but'] = 'Bejelentkezés';

$l['<title_fpass>'] = 'Elfelejtette jelszavát';
$l['pass_nomatch'] = 'Érvénytelen felhasználónevet vagy jelszót adott meg';
$l['forgotpass'] = 'Elfelejtette jelszavát';
$l['emailuser'] = 'E-mail cím';
$l['enteremail'] = 'Írja be az e-mail címét';
$l['sub_email'] = 'Megad';
$l['no_email'] = 'Nem adta meg e-mail címét';
$l['invalidemail'] = 'A megadott e-mail cím érvénytelen';
$l['mail_sub'] = 'Jelszó visszaállítása';
$l['mail_body'] = 'Hi,
						
A request to reset your password has been made.
If you did not request the password reset, then please ignore this email.

If you would like to reset your password, then please click the URL below :
http://'.(($globals['softpanel'] == 'webuzo') ? $softpanel->getConf('WU_PRIMARY_DOMAIN').':2002' : '127.0.0.1').'/index.php?act=login&sa=resetpass&key=&soft-1;

Regards,
'.$globals['sn'];
$l['mail_done'] = 'A jelszó visszaállítás részleteivel egy e-mail lett kiküldve';
$l['fuser_mail_sub'] = 'Webuzo Felhasználó név';
$l['fuser_mail_body'] = 'Hi,
						
A request to fetch the Webuzo Username has been made.
If you did not request the Webuzo Username, then please ignore this email.

Login to the URL below :
http://'.(($globals['softpanel'] == 'webuzo') ? $softpanel->getConf('WU_PRIMARY_DOMAIN').':2002' : '127.0.0.1').'/index.php?act=login

Username : &soft-1;

Regards,
'.$globals['sn'];
$l['fuser_mail_done'] = 'E-mailben ki lett küldve a Webuzo Felhasználó név';
$l['forgotuser'] = 'Elfelejtette Felhasználó nevét';
$l['back_to_login'] = 'Vissza a Bejelentkezéshez';

$l['<title_reset>'] = 'Jelszó visszaállítása';
$l['resetpass'] = 'Jelszó visszaállítása';
$l['log_new_pass'] = 'Új jelszó'; 
$l['log_reppass'] = 'Jelszó megerősítése';
$l['changepass'] = 'Jelszó megváltoztatása';
$l['no_key'] = 'Nem lett megadva visszaállító kulcs';
$l['invalidkey'] = 'Érvénytelen kulcsot adott meg';
$l['no_new'] = 'Kérjük érvényes jelszót adjon meg';
$l['no_reppass'] = 'Kérjük adja meg a jelszavát újra';
$l['no_match'] = 'A beírt jelszavak nem egyeznek';
$l['keyexpire'] = 'A kulcs már nem érvényes';
$l['passchanged'] = 'Jelszó változtatás sikeres volt. Kérjük folytassa a  <a href="'.$globals['index'].'act=login">Bejelentkezést</a>';
$l['forgot_pass'] = 'Elfelejtette jelszavát';

