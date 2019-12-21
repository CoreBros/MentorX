<?php

//////////////////////////////////////////////////////////////
//===========================================================
// appact_lang.php
//===========================================================
// SOFTACULOUS WEBUZO
// Version : 2.7.1
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Nikhil Muskur
// Date:	   11th May 2018
// Time:	   16:45 hrs
// Site:	   http://www.webuzo.com/ (SOFTACULOUS WEBUZO)
// ----------------------------------------------------------
// Please Read the Terms of use at http://www.webuzo.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Ltd.
//===========================================================
//////////////////////////////////////////////////////////////

if(!defined('SOFTACULOUS')){
	die('Hacking Attempt');
}

if($_REQUEST['app'] == 'subversion'){
	$lal['<title>'] = APP .' - Subversion Manager';
	$lal['stitle'] = 'Subversion Manager';
	// Error Strings
	$lal['err_no_repo'] = 'Repository name not found';
	$lal['err_no_user'] = 'Username not found';
	$lal['err_no_pass'] = 'Password not found';
	$lal['err_no_priv'] = 'Privilege value not found';
	$lal['err_invalid_repo'] = 'Invalid Repository name';
	$lal['err_invalid_user'] = 'Invalid username';
	$lal['err_invalid_priv'] = 'Invalid Privilege value';
	$lal['err_unknown_func'] = 'Action name not specified';
	// Theme Strings
	$lal['repo_done'] = 'Repository created';
	$lal['user_done'] = 'User created';
	$lal['priv_done'] = 'Privileges assigned';
	$lal['user_del_done'] = 'User deleted';
	$lal['repo_del_done'] = 'Repository deleted';
	$lal['tab_title_repo'] = 'Repositories';
	$lal['tab_title_crepo'] = 'Create Repository';
	$lal['tab_title_user'] = 'Users';
	$lal['tab_title_config_user'] = 'Configure user';
	$lal['tab_title_cuser'] = 'Create Repository User';
	// Theme Table Strings
	$lal['table_title_repo'] = 'Repository Name';
	$lal['table_title_user'] = 'Users';
	$lal['table_title_opt'] = 'Options';
	$lal['table_no_repo'] = 'No Repository found';
	$lal['table_title_nrepo'] = 'New Repository';
	$lal['table_title_repo_user'] = 'Repository user';
	$lal['table_no_user'] = 'No Repository user found';
	$lal['new_user'] = 'New User';
	$lal['pass'] = 'Password';
	$lal['table_new_user'] = 'Repository user';
	$lal['table_repo'] = 'Repository';
	$lal['priv_info'] = 'Please Add Repository/User to assign Privileges';
	$lal['index_title'] = 'SVN Management';
}