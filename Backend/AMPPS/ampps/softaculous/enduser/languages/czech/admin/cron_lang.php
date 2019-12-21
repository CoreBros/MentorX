<?php

//////////////////////////////////////////////////////////////
//===========================================================
// cron_lang.php
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

$l['upd_avail_sub'] = APP.' Upgrades v&soft-1; is available';
$l['upd_avail'] = APP.' Upgrades v&soft-1; is available.
<br>Since \'Automatic Updates\' are OFF you will need to manually upgrade to the latest version.
<br>To do so go to:
<br>Admin Panel -> Updates -> Update '.APP.'
<br>
<br>The following information about the new version was fetched:
<br>&soft-2;
<br>
From '.APP.' Cron Jobs';

$l['upd_avail_suc_sub'] = 'Successfully Upgraded to '.APP.' v&soft-1;';
$l['upd_avail_suc'] = APP.' Upgrades v&soft-1; is available.
<br>'.APP.' successfully Upgraded to latest version.
<br>Below is the logs of the Upgrade Attempt:
<br>&soft-2;
<br>
<br>The following information about the new version was fetched:
<br>&soft-3;

From '.APP.' Cron Jobs';

$l['upd_avail_err_sub'] = 'Failed Upgrading to '.APP.' v&soft-1;';
$l['upd_avail_err'] = APP.' Upgrades v&soft-1; is available.
<br>'.APP.' tried to automatically upgrade to the latest version but failed.
<br>Below is the logs of the Upgrade Attempt:
<br>&soft-2;
<br>
<br>You will have to manually upgrade to the latest version.
<br>To do so go to:
<br>Admin Panel -> Updates -> Update '.APP.'
<br>
<br>The following information about the new version was fetched:
<br>&soft-3;
<br>
From '.APP.' Cron Jobs';

$l['soft_upd_sub'] = 'Software Updates';
$l['soft_upd_fail'] = 'Failed';
$l['soft_upd_suc'] = 'Successful';
$l['free_lic_txt'] = "\n".'You are using the free version of '.APP.' which has limited number of scripts. Purchase premium version of '.APP.' to activate all scripts:'."\n";
$l['soft_upd'] = 'The following software were updated during Automatic Cron Updates:
&soft-1;
&soft-3;
The logs of the Updates are as follows:
&soft-2;

From '.APP.' Cron Jobs';

$l['soft_upd_avail_sub'] = 'Software Updates Available';
$l['soft_upd_avail'] = 'The following software updates are available:
&soft-1;

As automatic updates are OFF you will have to manually update to the latest versions.
To do so go to:
Admin Panel -> Software -> Update Settings

From '.APP.' Cron Jobs';


$l['user_soft_upd_sub'] = 'Script Updates Available';
$l['user_soft_upd'] = 'The following script updates are available:

&soft-1;
To upgrade these scripts go to your Control Panel -> '.APP.' -> Installations.
There you will be able to update the scripts.

From '.APP.' Cron Jobs';

