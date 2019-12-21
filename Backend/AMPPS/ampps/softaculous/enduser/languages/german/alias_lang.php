<?php

//////////////////////////////////////////////////////////////
//===========================================================
// userindex_lang.php
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

global $globals;

$l['err_invalid_alias'] = 'Der eingegebene Alias Name ist ungültig';
$l['err_invalid_alias_path'] = 'Der eingegebene Alias Pfad ist ungültig';
$l['err_exists_alias'] = 'Der angegebene Alias existiert bereits';
$l['err_dir_not_created'] = 'Das Alias Pfad Verzeichnis konnte nicht angelegt werden';
$l['err_invalid_alias_sp'] = 'Sonderzeichen sind nicht erlaubt im Alias Namen';
$l['err_alias_ampps'] = 'Dieser Alias ist schon vergeben';

//Theme Strings
$l['submitalias'] = 'Alias anlegen';
$l['alias_label'] = 'Alias Name';
$l['alias_path'] = 'Alias Pfad';

$l['<title>'] = APP.' - Alias Manager';
$l['alias_headling'] = 'Alias Manager';
$l['alias_name'] = 'Alias';
$l['alias_option'] = 'Optionen';
$l['delete'] = 'Alias erfolgreich gelöscht';
$l['alias_del_conf'] = 'Sind Sie sicher, dass dieser Alias gelöscht werden soll?';
$l['alias_path'] = 'Pfad';
$l['connect_error'] = 'Ups, es gab einen Fehler bei der Verbindung zum <strong>Server</strong>';
$l['alias_path_notice'] = '<b>Hinweis:</b> Stellen Sie sicher, dass der Pfad korrekt ist. Bei einem neuen Pfad wird das Verzeichnis neu angelegt.';
$l['alias_name_notice'] = '<b>Hinweis:</b> Nachdem dies hinzugefügt wurde, sollte es möglich sein, auf http://localhost/ihre_seite zuzugreifen.';
if($globals['os'] == 'windows'){
	$l['alias_path_eg'] = 'z.B.1^ C:/www/ihre_seite';
}else{
	$l['alias_path_eg'] = 'z.B. /usr/local/www/ihre_seite';
}
$l['alias_name_eg'] = 'z.B. ihre_site';
$l['add_new_button'] = 'hinzufügen';
$l['back_button'] = 'zurück';
