<?php

//////////////////////////////////////////////////////////////
//===========================================================
// import_lang.php
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

//Theme Strings
$l['<title>'] = APP.' - 匯入設定';
$l['importing_scripts'] = '從其他自動安裝器中匯入設定Importing Scripts from other auto installers';
$l['no_import'] = '沒有語法匯入No scripts to import!';
$l['importing_of'] = '使用者名稱Username';
$l['start_import'] = '開始匯入Start Import';
$l['import_exp'] = '這個工具將會匯入其他自動安裝所安裝的語. 開始程序請點選 "'.$l['start_import'].'"';
$l['no_users'] = '在伺服器中找不到使用者';

$l['manual_ins'] = 'Import manually installed scripts by users ? (This will consume more resources based on the number of users)';
$l['import_head'] = 'Import Scripts';
$l['fantastico_ins'] = 'Import scripts installed by <b>Fantastico</b>.';
$l['installatron_ins'] = 'Import scripts installed by <b>Installatron</b>.';
$l['cpaddons_ins'] = 'Import scripts installed by <b>cPAddons</b>.';
$l['import_completed'] = 'Import Completed !';
$l['import_progress'] = 'Detecting installations for user :';
