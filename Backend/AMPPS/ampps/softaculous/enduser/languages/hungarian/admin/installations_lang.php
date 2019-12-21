<?php

//////////////////////////////////////////////////////////////
//===========================================================
// installations_lang.php
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

$l['no_submit'] = 'Nincs telepítés kiválasztva az üzenetküldésre.';
$l['no_ins_selected'] = 'No installation(s) selected for Upgrade.';
$l['user_soft_upd_sub'] = 'Alkalmazás-frissítések elérhetők';
$l['posix_error'] = 'POSIX function is disabled. Please enable POSIX function to perform Upgrade for Installations.';
$l['shellexec_error'] = 'exec function is disabled. Please enable exec function to perform Upgrade for Installations.';
$l['user_soft_upd'] = 'Ez a levél az elavult alkalmazásokra figyelmeztet, amik telepítésre kerültek. Biztonsági okokból frissítse az elavult alkalmazásokat minél hamarabb.
A következő alkalmazásokhoz érhető el új frissítés:

&soft-1;
Az alkalmazások frissítését itt végezheti el: Vezérlőpult -> '.APP.' -> Telepítések.
Itt lesz lehetősége az alkalmazások frissítésére.  

A rendszer adminisztrátora';
$l['no_reseller_upgrade_ins'] = 'Resellers are not allowed to auto upgrade installations';

//Theme Strings
$l['<title>'] = APP.' - Telepítések listája';
$l['searchinstallations'] = 'Telepítések keresése';
$l['search_scripts'] = 'Alkalmazások';
$l['search_scripts_exp'] = 'Az összes megtekintéséhez hagyja üresen. Több nevet pontosvesszővel (\'<b>;</b>\') válasszon el.';
$l['search_users'] = 'Felhasználók';
$l['search_users_exp'] = 'Az összes megtekintéséhez hagyja üresen. Több nevet pontosvesszővel (\'<b>;</b>\') válasszon el.';
$l['group_by_scripts'] = 'Csoportosítás alkalmazásonként';
$l['group_by_scripts_exp'] = 'Alapértelmezésként felhasználók szerint csoportosítva';
$l['only_outdated'] = 'Csak az elavult telepítéseket mutassa';
$l['only_outdated_exp'] = 'Alapértelmezésként az összes telepítést megmutatja';
$l['li_user'] = 'Felhasználó';
$l['li_scripts'] = 'Alkalmazás';
$l['li_domains'] = 'Domains';
$l['li_url'] = 'URL';
$l['li_insver'] = 'Telepített verzió';// Installed Ver
$l['li_ver'] = 'Verzió';
$l['li_realver'] = 'Real Ver';
$l['no_results'] = 'Nincs találat';
$l['search_ins'] = 'Keresés';
$l['with_selected'] = 'A kiválasztottakkal';
$l['sub_email_users'] = 'Küldjön üzenetet a felhasználóknak az újabb verziókról';
$l['emailed_users'] = 'A kiválasztott telepítésekhez tartozó felhasználók értesítve lettek az elérhető új verziókról.';
$l['sub_upgrade_ins'] = 'Upgrade';
$l['upgrading_ins'] = 'Upgrading Installations...';
$l['upgraded_ins'] = 'The Auto upgrade process has finished and the details have been sent via email.';
$l['upgraded'] = 'Upgraded';
$l['failed'] = 'Failed';
$l['go_to_autoupgrade'] = 'Go to List';
$l['upgrading_completed'] = 'Upgrade Finished';
$l['beta_note'] = '<b>Note</b> : This feature is in <b>BETA VERSION</b>. <a href="http://softaculous.com/docs/Auto_Upgrade" target="_blank">Read More..</a>';
$l['wait_note'] = '<b>Note</b> : Please don\'t leave this page until all the installations are upgraded.';
$l['tasklist_button'] = 'Task List';
$l['auto_upgrade_enabled'] = 'Auto Upgrade Enabled';
$l['real_ver_notice'] = 'The real version does not match with '.APP.' records. It seems that the user has upgraded installation(s) manually.';
$l['latest_ver_notice'] = 'Latest version is available for the installation(s).';
$l['update_records'] = 'Update '.APP.' records';
$l['no_submit_rec'] = 'No installation(s) were selected for updating '.APP.' records';
$l['err_update_record'] = 'Error occured while updating version in '.APP.' records';
$l['succ_update_record'] = 'Successfully updated version for selected installation(s) in '.APP.' record';
$l['only_realversion'] = 'Show Real Version';
$l['only_realversion_exp'] = 'If checked '.APP.' will try to detect the real version of the installations.<br /><b>Note</b>: This might take time as it will find the real version by scanning the files of the installations';
$l['no_info'] = 'No Info';
$l['search_domains'] = 'Domains';
$l['search_domains_exp'] = 'Leave blank for all. For multiple domains seperate with \'<b>;</b>\'';

$l['auto_upgrade_major'] = '(Major and Minor)'; 
$l['auto_upgrade_minor'] = '(Minor)';