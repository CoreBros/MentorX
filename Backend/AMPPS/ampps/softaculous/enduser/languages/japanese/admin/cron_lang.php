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

$l['upd_avail_sub'] = APP.'v&soft-1; をアップグレードすることができます。';
$l['upd_avail'] = APP.' v&soft-1; をアップグレードすることができます。\'Automatic Updates\'がオフとなっているため、手動で最新バージョンへアップグレードする必要があります。
<br>アップグレードするには以下をご参照下さい:
<br>Admin Panel -> Updates -> Update '.APP.'
<br>
<br>新バージョンに関する以下の情報が取得されました:
<br>&soft-2;
<br>
From '.APP.' Cronのジョブ';

$l['upd_avail_suc_sub'] = ' '.APP.' v&soft-1;へ正常にアップグレードされました。';
$l['upd_avail_suc'] = APP.' v&soft-1; をアップグレードすることができます。
<br>'.APP.' successfully Upgraded to latest version.
<br>Below is the logs of the Upgrade Attempt:
<br>&soft-2;
<br>
<br>The following information about the new version was fetched:
<br>&soft-3;

From '.APP.' Cronのジョブ';

$l['upd_avail_err_sub'] = ' '.APP.' v&soft-1;へのアップグレードは失敗しました。';
$l['upd_avail_err'] = APP.' v&soft-1; をアップグレードすることができます。
<br>'.APP.' は最新バージョンへの自動アップグレードを試みましたが失敗しました。
<br>アップグレードのログは次の通りです:
<br>&soft-2;
<br>
<br>手動で最新バージョンへアップグレードする必要があります。
<br>アップグレードするには以下をご参照下さい:
<br>Admin Panel -> Updates -> Update '.APP.'
<br>
<br>新バージョンに関する以下の情報が取得されました:
<br>&soft-3;
<br>
From '.APP.' Cronのジョブ';

$l['soft_upd_sub'] = 'ソフトウェア・アップデート';
$l['soft_upd_fail'] = '失敗';
$l['soft_upd_suc'] = '成功';
$l['free_lic_txt'] = "\n".'You are using the free version of '.APP.' which has limited number of scripts. Purchase premium version of '.APP.' to activate all scripts:'."\n";
$l['soft_upd'] = '以下のソフトウェアはCronの自動アップデートの間にアップデートされました:
&soft-1;
&soft-3;
アップデートのログは次の通りです:
&soft-2;

From '.APP.' Cronのジョブ';

$l['soft_upd_avail_sub'] = 'ソフトウェアをアップデートすることができます。';
$l['soft_upd_avail'] = '以下のソフトウェアをアップデートすることができます:
&soft-1;

自動アップデートがオフとなっているため、手動で最新バージョンへアップデートする必要があります。
アップデートするには以下をご参照下さい:
Admin Panel -> Software -> Update Settings

From '.APP.' Cronのジョブ';


$l['user_soft_upd_sub'] = 'スクリプトをアップデートすることができます。';
$l['user_soft_upd'] = '以下のスクリプトをアップデートすることができます:

&soft-1;
これらのスクリプトをアップデートするには、Control Panel -> '.APP.' -> Installationsをご参照下さい。

From '.APP.' Cronのジョブ';

