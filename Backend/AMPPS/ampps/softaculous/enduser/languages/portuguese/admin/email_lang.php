<?php

//////////////////////////////////////////////////////////////
//===========================================================
// email_lang.php
//===========================================================
// SOFTACULOUS 
// Version : 4.XX
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Translation by: Infotech Brazil
// Date:       Feb 2012
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

$l['no_mail'] = 'Não foi selecionado nenhum método de email';
$l['wrong_mail'] = 'O método de email selecionado não é válido';
$l['no_mail_server'] = 'Não foi especificado nenhum servidor de SMTP';
$l['no_mail_port'] = 'Sem porta de SMTP';
$l['no_mail_user'] = 'Sem usuário de SMTP';
$l['no_mail_pass'] = 'Sem senha de SMTP';
$l['saving_error'] = 'Ocorreram erros ao gravar as alterações';

//Theme Strings
$l['<title>'] = 'Centro de Configurações do '.APP;
$l['settings_saved'] = 'Configurações de email gravadas com sucesso';
$l['emailhead'] = 'Opções de Email';
$l['mailmethod'] = 'Método de Email';
$l['mailmethod_exp'] = 'Enviar usando PHP mail()';
$l['smtp_server'] = 'Servidor SMTP';
$l['smtp_port'] = 'Porta SMTP';
$l['smtp_user'] = 'Usuário SMTP';
$l['smtp_pass'] = 'Senha SMTP';
$l['edit_settings'] = 'Editar Configurações';
$l['mailauthtype'] = 'SMTP Authtype';
$l['mailauthtype_exp'] = 'Choose the Authtype for the emails sent using SMTP';

$l['mail_send'] = 'Send Test Email ?';
$l['mail_subject'] = 'Email Settings - Test Email';
$l['mail_message'] = 'This is a test e-mail to verify the updated Email Settings in '.APP.' Admin panel -> Email
Feel free to delete this email.';
$l['enc_mail_pass'] = 'Save SMTP Password in Encrypted format ?';
$l['err_mcrypt'] = 'mcrypt extension is required to encrypt password';
$l['err_openssl'] = 'Openssl extension is required to encrypt password'; 