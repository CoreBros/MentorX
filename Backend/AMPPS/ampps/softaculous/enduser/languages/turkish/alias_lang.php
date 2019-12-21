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

$l['err_invalid_alias'] = 'The entered Alias Name is invalid';
$l['err_invalid_alias_path'] = 'The entered Alias Path is invalid';
$l['err_exists_alias'] = 'The submitted Alias Name already exists';
$l['err_dir_not_created'] = 'The Alias Path Directory was not created';
$l['err_invalid_alias_sp'] = 'Special characters are not allowed in Alias Name';
$l['err_alias_ampps'] = 'This Alias Name is already taken';

//Theme Strings
$l['submitalias'] = 'Create Alias';
$l['alias_label'] = 'Alias Name';
$l['alias_path'] = 'Alias Path';

$l['<title>'] = APP.' - Alias Manager';
$l['alias_headling'] = 'Alias Manager';
$l['alias_name'] = 'Alias';
$l['alias_option'] = 'Options';
$l['delete'] = 'Alias deleted successfully';
$l['alias_del_conf'] = 'Are you sure want to delete this Alias?';
$l['alias_path'] = 'Path';
$l['connect_error'] = 'Oops there was an error while connecting to <strong>Server</strong>';
$l['alias_path_notice'] = '<b>Note:</b> Make sure the path is correct. New directory will be created in case of new path.';
$l['alias_name_notice'] = '<b>Note:</b> After adding this, you should be able to access http://localhost/your_site.';
if($globals['os'] == 'windows'){
	$l['alias_path_eg'] = 'e.g C:/www/your_site';
}else{
	$l['alias_path_eg'] = 'e.g /usr/local/www/your_site';
}
$l['alias_name_eg'] = 'e.g your_site';
$l['add_new_button'] = 'Add New';
$l['back_button'] = 'Go Back';
