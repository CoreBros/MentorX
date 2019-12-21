<?php

//////////////////////////////////////////////////////////////
//===========================================================
// categories_lang.php
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

$l['saving_error'] = '儲存設定時出現錯誤.';

//Theme Strings
$l['<title>'] = APP.' - 取消語法的自動更新';
$l['settings_saved'] = '設定已經成功儲存.';
$l['show_top_scripts'] = '關閉自動更新';
$l['show_top_scripts_exp'] = '熱門軟體類別的名稱.';
$l['soft_free_note'] = '注意: 在免費版本中的熱門 14 名排行榜 '.APP.', 段落是關閉的.';
$l['savescript'] = '儲存語法';
$l['select_top_scripts'] = '選擇語法';
$l['selected_top_scripts'] = '您選擇的地方';
$l['select_from_below'] = '在底下選擇您的語法';
$l['script_note_exp'] = '如果提供了 NO 值, 那麼 '.APP.' 將會使用它本身的算式來計算載入時間並嘗試升級安裝包.<br />公視將會被計算為 : <strong>load = Uptime_of_server / Number_of_cores;</strong> <br />而且如果其載入低於 0.70, 那麼 '.APP.' 只會嘗試更新安裝包.';
$l['script_note'] = '注意';


$l['planhead'] = '自動可升級語法的整體設定';
$l['uptime'] = '設定伺服器載入限制';
$l['exp_uptime'] = '例如您可以將數值設定為 5, 現在當 Softaculous 嘗試要更新一個 (些) 語法時它將會檢查載入時間且如果他低於數值的話只會更新而已.';
$l['save'] = '儲存';
$l['scriptselect'] = '語法';
$l['disable_autoupgrade'] = '取消自動更新';
$l['disable_autoupgrade_exp'] = '如果啟用的話沒有安裝包會被自動更新且使用者不會收到一個自動安裝的選項於終端用戶控制台.';
$l['exp_scriptselect'] = '選擇需要取消自動更新的語法';
$l['done'] = '您的計畫已經儲存. 回到 <a href="'.$globals['index'].'act=plans">計畫總覽</a>';
$l['select_all'] = '選擇全部: ';

