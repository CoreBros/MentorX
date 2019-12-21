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

$l['upd_avail_sub'] = ''.APP.' Доступно Обновление v&soft-1;';
$l['upd_avail'] = ''.APP.' Доступно обновление v&soft-1;.
<br>Так как "Автоматическое обновление" отключено вам нужно будет вручную обновить до последней версии.
<br>Для этого перейдите по ссылке:
<br>Admin Panel -> Updates -> Update '.APP.'
<br>
<br>информацию о новых версиях:
<br>&soft-2;
<br>
From '.APP.' Cron Jobs';

$l['upd_avail_suc_sub'] = 'Успешное Обновление '.APP.' до v&soft-1;';
$l['upd_avail_suc'] = ''.APP.' Обновление v&soft-1; доступно.
<br>'.APP.' successfully Upgraded to latest version.
<br>Below is the logs of the Upgrade Attempt:
<br>&soft-2;
<br>
<br>The following information about the new version was fetched:
<br>&soft-3;

From '.APP.' Cron Jobs';

$l['upd_avail_err_sub'] = 'Не удалось Обновление '.APP.' до v&soft-1;';
$l['upd_avail_err'] = ''.APP.' Обновление v&soft-1; доступно.
<br>Softaculous пытался автоматически обновиться до последней версии, но не удалось.
<br>Ниже журналов Попыток Обновлений:
<br>&soft-2;
<br>
<br>Вам придется вручную обновить до последней версии.
<br>Для этого перейдите по ссылке:
<br>Admin Panel -> Updates -> Update '.APP.'
<br>
<br>Получена информация о следующих новых версиях:
<br>&soft-3;
<br>
From '.APP.' Cron Jobs';

$l['soft_upd_sub'] = ''.APP.' Updates';
$l['soft_upd_fail'] = 'Не удалось';
$l['soft_upd_suc'] = 'Успешно';
$l['free_lic_txt'] = "\n".'You are using the free version of '.APP.' which has limited number of scripts. Purchase premium version of '.APP.' to activate all scripts:'."\n";
$l['soft_upd'] = 'Следующее программное обеспечение было обновлено при автоматическом обновлении Cron:
&soft-1;
&soft-3;
Журнал обновлений:
&soft-2;

From '.APP.' Cron Jobs';

$l['soft_upd_avail_sub'] = 'Доступно обновление ПО';
$l['soft_upd_avail'] = 'Доступно обновление следующего ПО:
&soft-1;

Автоматическое обновление отключено и вам придется вручную обновить до последних версий.
Для этого перейдите по ссылке:
Admin Panel -> Software -> Update Settings

From '.APP.' Cron Jobs';


$l['user_soft_upd_sub'] = 'Доступно обновление скриптов';
$l['user_soft_upd'] = 'Доступно обновление следующих скриптов:
&soft-1;

Для обновления этих сценариев перейдите в Панель управления -> '.APP.' -> Установки.
Там вы сможете обновить скрипты.

From '.APP.' Cron Jobs';

