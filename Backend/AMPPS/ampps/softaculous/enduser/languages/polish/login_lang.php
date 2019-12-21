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

$l['user_data_missing'] = 'Pole nazwy użytkownika lub hasła było puste';
$l['invalid_username'] = 'Nazwa użytkownika lub hasło, które podałeś jest niepoprawne';
$l['invalid_password'] = 'Nazwa użytkownika lub hasło, które podałeś jest niepoprawne'; 
$l['invalid_user'] = 'Nazwa użytkownika lub hasło, które podałeś jest niepoprawne'; 
$l['no_username'] = 'Pole nazwa użytkownika było puste';
$l['no_password'] = 'Pole hasła było puste';
$l['disable_user'] = 'Login wyłączony przez użytkownika <strong>root</strong>.';

$l['<title>'] = 'Login';
$l['sign_in'] = 'Zaloguj się';
$l['log_user'] = 'Nazwa użytkownika';
$l['log_pass'] = 'Hasło';
$l['sub_but'] = 'Login';

$l['<title_fpass>'] = 'Zapomniałeś hasła';
$l['pass_nomatch'] = 'Nazwa użytkownika lub hasło, które podałeś jest niepoprawne.';
$l['forgotpass'] = 'Zapomniałeś hasła';
$l['emailuser'] = 'Adres e-mail';
$l['enteremail'] = 'Wpisz swój adres e-mail';
$l['sub_email'] = 'Zatwierdź';
$l['no_email'] = 'Nie zatwierdziłeś swojego adresu email';
$l['invalidemail'] = 'Potwierdzony przez Ciebie adres e-mail jest nieprawidłowy';
$l['mail_sub'] = 'Resetowanie hasła';
$l['mail_body'] = 'Hi,
						
A request to reset your password has been made.
If you did not request the password reset, then please ignore this email.

If you would like to reset your password, then please click the URL below :
http://'.(($globals['softpanel'] == 'webuzo') ? $softpanel->getConf('WU_PRIMARY_DOMAIN').':2002' : '127.0.0.1').'/index.php?act=login&sa=resetpass&key=&soft-1;

Regards,
'.$globals['sn'];
$l['mail_done'] = 'Została wysłana wiadomość zawierająca szczegóły odnośnie resetu hasła';
$l['fuser_mail_sub'] = 'Nazwa użytkownika Webuzo';
$l['fuser_mail_body'] = 'Hi,
						
A request to fetch the Webuzo Username has been made.
If you did not request the Webuzo Username, then please ignore this email.

Login to the URL below :
http://'.(($globals['softpanel'] == 'webuzo') ? $softpanel->getConf('WU_PRIMARY_DOMAIN').':2002' : '127.0.0.1').'/index.php?act=login

Username : &soft-1;

Regards,
'.$globals['sn'];
$l['fuser_mail_done'] = 'Została wysłana wiadomość e-mail zawierająca nazwę użytkownika Webuzo';
$l['forgotuser'] = 'Zapomniałeś nazwę użytkownika';
$l['back_to_login'] = 'Powrót do logowania';

$l['<title_reset>'] = 'Resetowanie hasła';
$l['resetpass'] = 'Resetowanie hasła';
$l['log_new_pass'] = 'Nowe hasło'; 
$l['log_reppass'] = 'Potwierdź hasło';
$l['changepass'] = 'Zmień hasło';
$l['no_key'] = 'Nie został potwierdzony klucz resetu';
$l['invalidkey'] = 'Określono nieprawidłowy klucz';
$l['no_new'] = 'Proszę podać prawidłowe hasło';
$l['no_reppass'] = 'Proszę podać potwierdzenie hasła';
$l['no_match'] = 'Hasła, które podałeś nie pasują';
$l['keyexpire'] = 'Klucz jest nieważny';
$l['passchanged'] = 'Hasło zostało pomyślnie zmienione. Prosimy iść do <a href="'.$globals['index'].'act=login">Logowanie</a>';
$l['forgot_pass'] = 'Zapomniałeś hasła';

