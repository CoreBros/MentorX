<?php

//////////////////////////////////////////////////////////////
//===========================================================
// addplans_lang.php
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

$l['no_planname'] = 'Пожалуйста, укажите имя пакета';
$l['invalidfilename'] = 'Пожалуйста, укажите допустимое имя файла. Специальные символы не допускаются.';
$l['no_cpplan'] = 'Пожалуйста, выберите действительный пакет панели управления';
$l['plan_exist'] = 'Пакет с таким именем уже существует';
$l['error_plans'] = 'Пожалуйста, выберите хотя бы одного пользователя с панели управления или пакет';
$l['user_plan_exist'] = 'Пользователь(и) - <b>&soft-1;</b> - уже подключен на другой пакет. Для перезаписи выберите опцию перезаписи';
$l['reseller_plan_exist'] = 'Реселлер(ы) - <b>&soft-1;</b> - уже подключен на другой пакет. Для перезаписи выберите опцию перезаписи';
$l['error_cpplan'] = 'Пожалуйста, выберите действительный пакет панели управления';
$l['error_scriptselect'] = 'Пожалуйста, выберите хотя бы один скрипт';
$l['error_userselect'] = 'Пожалуйста, выберите хотя бы одного пользователя';
$l['error_resellerselect'] = 'Пожалуйста, выберите хотя бы одного реселлера';
$l['cpplan_plan_exist'] = 'План(ы) панели управления - <b>&soft-1;</b> - уже подключен на другой пакет. Для перезаписи выберите опцию перезаписи';
$l['err_prefix'] = 'Вы не можете дать \'reseller_\' в качестве префикса для Вашего имени плана.';
$l['error_disable'] = 'Please select the checkbox if you want to <b>disable</b> '.APP.' for the selected user(s)';
$l['no_plan_support'] = 'Plans feature is not supported on this panel';

//Theme Strings
$l['<title>'] = 'Softaculous - Контроль доступа';
$l['title'] = 'Добавить план контроля доступа';
$l['planhead'] = 'Настройки контроля доступа';
$l['planname'] = 'Имя плана';
$l['exp_plan'] = 'Имя плана контроля доступа';
$l['cplanname'] = 'Планы панели управления';
$l['exp_cplan'] = 'Планы панели управления';
$l['no_cpplans'] = 'Пожалуйста выберите план контрольной панели';
$l['saveplan'] = 'Сохранить план';
$l['userselect'] = 'Добавить пользователя';
$l['resellerselect'] = 'Добавить реселлера';
$l['exp_userselect'] = 'Выберите отдельных пользователей, которые вы хотите настроить независимо от настройки пакета панели управления.';
$l['exp_resellerselect'] = 'Выберите отдельных ресселеров, которые вы хотите настроить независимо от настройки пакета панели управления.';
$l['scriptselect'] = 'Разрешить скрипт';
$l['exp_scriptselect'] = 'Выберите скрипты для этого плана';
$l['done'] = 'Ваш план был сохранен. Вернуться <a href="'.$globals['index'].'act=plans">для просмотра планов.</a>';
$l['plan_save_fail'] = 'Не удается сохранить параметры плана.';
$l['cpanelplan'] = 'Панель управления - добавление плана.';
$l['cpplanselect'] = 'Выберите пакеты панели управления, к которым настоящая настройка будет применяться. Для всех пользователей пакетов, будет позволено использовать только те скрипты, которые назначеные здесь';
$l['default_plan_note'] = 'ПРИМЕЧАНИЕ: Пожалуйста, укажите имя для плана \'<b>softaculous_default</b>\' чтобы создать план по умолчанию для любого пользователя, который не назначен не на один план Softaculous.';
$l['select_all'] = 'Select All: ';
$l['overwrite_settings'] = 'Overwite Settings:';

$l['disable_autoupgrade'] = 'Disable Auto Upgrade';
$l['exp_disable_autoupgrade'] = 'Disable auto upgrading script installations for users that fall under this plan';

$l['limit_features'] = 'Feature Restrictions';

$l['default_note'] = 'Default : Unlimited';

$l['max_ins_script'] = 'Maximum Installations per Script';
$l['max_backup_script'] = 'Maximum Backups per Script';
$l['max_clone_script'] = 'Maximum Clone per Script';
$l['max_staging_script'] = 'Maximum Staging per Script';

$l['exp_max_ins_script'] = 'This will limit the maximum number of installations a user can create for particular script';
$l['exp_max_backup_script'] = 'This will limit the maximum number of backups a user can create for particular script';
$l['exp_max_clone_script'] = 'This will limit the maximum number of clone a user can create for particular script';
$l['exp_max_staging_script'] = 'This will limit the maximum number of staging a user can create for particular script';