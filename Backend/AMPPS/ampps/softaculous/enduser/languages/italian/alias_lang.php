<?php

//////////////////////////////////////////////////////////////
//===========================================================
// userindex_lang.php
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

global $globals;

$l['err_invalid_alias'] = 'Il nome di alias indicato non è valido';
$l['err_invalid_alias_path'] = 'Il percorso di alias indicato non è valido';
$l['err_exists_alias'] = 'Il nome di alias indicato esiste già';
$l['err_dir_not_created'] = 'La directory del percorso alias non è stata creata';
$l['err_invalid_alias_sp'] = 'Non è permesso l\'utilizzo di caratteri speciali in nome di alias';
$l['err_alias_ampps'] = 'Questo nome di alias risulta già in uso';

//Theme Strings
$l['submitalias'] = 'Creare alias';
$l['alias_label'] = 'Nome alias';
$l['alias_path'] = 'Percorso alias';

$l['<title>'] = APP.' - Alias Manager';
$l['alias_headling'] = 'Gestore degli alias';
$l['alias_name'] = 'Alias';
$l['alias_option'] = 'Opzioni';
$l['delete'] = 'Alias eliminato correttamente';
$l['alias_del_conf'] = 'Sei sicuro di voler eliminare questo alias?';
$l['alias_path'] = 'Percorso';
$l['connect_error'] = 'Siamo spiacenti, si è verificato un errore durante la connessione a <strong>Server</strong>';
$l['alias_path_notice'] = '<b>Note:</b> Assicurarsi che il percorso è corretto. Nel caso di un nuovo percorso, verrà creata una nuova directory.';
$l['alias_name_notice'] = '<b>Note:</b> Successivamente, dovresti poter accedere a http://localhost/your_site.';
if($globals['os'] == 'windows'){
	$l['alias_path_eg'] = 'e.g C:/www/your_site';
}else{
	$l['alias_path_eg'] = 'e.g /usr/local/www/your_site';
}
$l['alias_name_eg'] = 'ad es. il tuo_sito';
$l['add_new_button'] = 'Aggiungi nuovo';
$l['back_button'] = 'Indietro';
