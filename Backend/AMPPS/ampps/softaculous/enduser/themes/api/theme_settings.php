<?php

//////////////////////////////////////////////////////////////
//===========================================================
// theme_settings.php
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

//Is the ADMIN Mode Defined!
if(!defined('SOFTADMIN')){
	$theme['url'] = $softpanel->theme['url'].'/'.$globals['theme_folder'];
}else{
	$theme['url'] = $softpanel->theme['admin_url'].'/'.$globals['theme_folder'];
}

$theme['images'] = $theme['url'].'/images/';//Has a Trailing slash
$theme['a_images'] = $theme['url'].'/images/'.$globals['softpanel'].'/';//Has a Trailing slash

//////////////////////////////////////////////
// This file should contain all the necessary
// Path of Theme Files, URL of the images 
// folder. It is a very important file for a 
// particular theme.
//////////////////////////////////////////////

// Headers and Footers
$theme['hf'] = $theme['path'].'/hf_theme.php';

// The Default Softaculous Page
$theme['userindex'] = $theme['path'].'/userindex_theme.php';

// Shows Softwares in a Category
$theme['listsoftwares'] = $theme['path'].'/listsoftwares_theme.php';

// Shows a Software
$theme['software'] = $theme['path'].'/software_theme.php';

// Shows a Javascripts
$theme['js'] = $theme['path'].'/js_theme.php';

// Shows all current installations
$theme['installations'] = $theme['path'].'/installations_theme.php';

// Edit User Settings
$theme['settings'] = $theme['path'].'/settings_theme.php';

// Help and Support
$theme['help'] = $theme['path'].'/help_theme.php';

// Email Settings
$theme['email'] = $theme['path'].'/email_theme.php';

// Remove an installed software
$theme['remove'] = $theme['path'].'/remove_theme.php';

// Upgrade an installed software
$theme['upgrade'] = $theme['path'].'/upgrade_theme.php';

// Import a installed script
$theme['import'] = $theme['path'].'/import_theme.php';

// Sync data of other Auto Installers
$theme['sync'] = $theme['path'].'/sync_theme.php';

// Demos of the Auto Installers
$theme['demos'] = $theme['path'].'/demos_theme.php';

// Ratings Page
$theme['ratings'] = $theme['path'].'/ratings_theme.php';

// Backups Page
$theme['backups'] = $theme['path'].'/backups_theme.php';

// Restore Page
$theme['restore'] = $theme['path'].'/restore_theme.php';

// Backup Page
$theme['backup'] = $theme['path'].'/backup_theme.php';

// Admin Center Headers and Footers
$theme['admin/adminhf'] = $theme['path'].'/admin/adminhf_theme.php';

// Admin Center Index
$theme['admin/adminindex'] = $theme['path'].'/admin/adminindex_theme.php';

// Softaculous Settings
$theme['admin/settings'] = $theme['path'].'/admin/settings_theme.php';

// Softaculous Email Settings
$theme['admin/email'] = $theme['path'].'/admin/email_theme.php';

// Categories
$theme['admin/categories'] = $theme['path'].'/admin/categories_theme.php';

// Softwares
$theme['admin/softwares'] = $theme['path'].'/admin/softwares_theme.php';

// Updates
$theme['admin/updates'] = $theme['path'].'/admin/updates_theme.php';

// Installations
$theme['admin/installations'] = $theme['path'].'/admin/installations_theme.php';

// Import
$theme['admin/import'] = $theme['path'].'/admin/import_theme.php';

// Custom Scripts
$theme['admin/customscripts'] = $theme['path'].'/admin/customscripts_theme.php';


?>