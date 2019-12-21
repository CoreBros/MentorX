<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editdomain_lang.php
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

$l['no_domain'] = 'Non è stato specificato alcun nome di dominio';
$l['alreay_exists'] = 'Il dominio indicato esiste già nel tuo account.';
$l['no_ftp_user'] = 'Non è stato specificato alcun utente FTP';
$l['no_ftp_pass'] = 'Non è stata specificata alcuna password FTP';
$l['no_ftp_path'] = 'Non è stato specificato alcun PERCORSO FTP';
$l['no_data_dir'] = 'Non è stata specificata alcuna directory dei dati';
$l['wrong_ftp_path'] = 'Il percorso FTP inserito è errato e non punta al dominio specificato.';
$l['no_id'] = 'Non è stato trovato alcun ID!';
$l['no_backup_path'] = 'Non è stato specificato alcun PERCORSO di backup';
$l['ftp_error-1'] = 'Risoluzione del nome a dominio non riuscita';
$l['ftp_error-2'] = 'Impossibile eseguire il login con i dettagli FTP forniti';
$l['ftp_error-3'] = 'Il percorso FTP specificato è inesistente';
$l['no_port'] = 'Non è stata specificata alcuna porta';
$l['no_pub_allowed'] = 'La chiave pubblica non viene richiesta durante l\'autenticazione con password';
$l['no_public_key'] = 'Non è stato trovato alcun percorso verso la chiave pubblica';
$l['no_private_key'] = 'Non è stata trovata alcuna chiave';
$l['err_sftp_only'] = 'L\'autenticazione tramite chiave d\'accesso è permessa solo per SFTP';
$l['no_pub_pri'] = 'Non è stato possibile trovare la chiave pubblica o la chiave privata';
$l['no_domain_exist'] = 'Il dominio non esiste';
$l['not_allowed'] = 'Non sei autorizzato a modificare questo dominio';
$l['ftp_error'] = 'Could not connect to the FTP server';
$l['err_upload_remote'] = 'Unable to upload file to the FTP path';
$l['err_fetch_file'] = 'Unable to access the file uploaded to the domain';
$l['err_fetch_path'] = 'Unable to fetch path from the data received';
$l['invalid_domain_id'] = 'Invalid Domain ID';

//Theme Strings
$l['<title>'] = 'Modificare un dominio';
$l['edit_domain'] = 'Modificare dominio';
$l['domain'] = 'Nome del dominio';
$l['domain_exp'] = 'Inserire un nome di dominio valido (senza http://) ad es. ilmiodominio.com';
$l['ftp_user'] = 'Utente';
$l['ftp_user_exp'] = 'Il nome utente del tuo account FTP';
$l['ftp_pass'] = 'Password';
$l['ftp_pass_exp'] = 'La password del tuo account FTP';
$l['ftp_path'] = 'Percorso';
$l['ftp_path_exp'] = 'The Percorso FTP to your domain e.g. /public_html';
$l['backup_path'] = 'Percorso di backup';
$l['backup_path_exp'] = 'The Percorso di backup to your domain e.g. /backups';
$l['data_dir'] = 'Directory dei dati';
$l['data_dir_exp'] = 'Percorso completo verso la directory dei dati ad es. /home/UTENTE/datadir<br/>Alcuni script come Elgg, Moodle, etc richiedono una cartella non accessibile dal web.<br/>Questo sarà utilizzato a tale scopo.';
$l['ins_email_exp'] = 'Quando installi un nuovo software, invia una mail con i dettagli d\'installazione';
$l['submit_edit'] = 'Salva & aggiorna';
$l['settings_saved'] = 'Il tuo dominio è stato salvato correttamente.';
$l['show_all_dom'] = 'Mostra tutti i domini';
$l['port'] = 'Porta';
$l['port_exp'] = 'Inserisci la porta di connessione';
$l['protocol'] = 'Protocollolo';
$l['protocol_exp'] = 'Selezionare il protocollo che Softaculous utilizzerà per comunicare';
$l['auth_password'] = 'Metodo di autenticazione';
$l['auth_password_exp'] = 'Selezionare il metodo di autenticazione';
$l['private_key'] = 'Chiave privata';
$l['private_key_exp'] = 'Incollare qui la chiave privata';
$l['passphrase'] = 'Passphrase';
$l['passphrase_exp'] = 'Passphrase per chiave crittografica privata (opzionale)';
$l['sftp_path'] = 'Web directory';
$l['sftp_path_exp'] = 'Percorso assoluto verso la web directory dell\'utente, ad es. /home/NOME UTENTE/public_html';
$l['sbackup_path_exp'] = 'Percorso assoluto verso la Directory di Backup, ad es. /home/NOME UTENTE/backup';
$l['server_host'] = 'Host di server (opzionale)';
$l['server_host_exp'] = '<b>IF</b> il tuo nome a dominio e il server host non sono identici inserire il server host ad es. ftp.mydomain.com';
$l['ftp_pass_opt'] = 'Leave blank if you do not want to update the password.';
$l['auth_method_pass'] = 'Password';
$l['auth_method_key'] = 'SSH Key';
$l['no_pass_pri'] = 'Please provide either a password or private key';
$l['err_reconnect'] = 'Could not reconnect to database';