<?php

//////////////////////////////////////////////////////////////
//===========================================================
// advancedns_lang.php
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

$l['connect_error'] =' <strong>サーバー</strong>への通信中にエラーが発生しました。';
$l['err_invalid_data'] ='データを入力して下さい。';
$l['no_user'] = ' <strong>レコード</strong>欄へ値を入力して下さい。';
$l['err_invalid_record'] = 'ネーム欄に誤った情報を入力しています。';
$l['no_ttl'] = ' TTLを入力して下さい。';
$l['no_address'] = 'アドレスを入力して下さい。';
$l['no_cname'] = ' CNAMEを入力して下さい。';
$l['no_txt'] = ' TXTデータを入力して下さい。';
$l['err_invalid_address'] = '無効なIPアドレス';
$l['err_invalid_cname'] = '無効なCNAME';
$l['err_invalid_txt'] = '無効なTXTデータ';
$l['err_invalid_ttl'] = 'TTLは自然数である必要があります。';
$l['err_domain_exist'] = 'レコードは既に存在しています。';
$l['err_add_msg'] = 'レコードの追加中にエラーが発生しました。';
$l['err_edit_msg'] = 'レコードの編集中にエラーが発生しました。';
$l['err_del_msg'] = 'レコードの削除中にエラーが発生しました。';
$l['edit'] = 'レコードは正常に編集されました。';
$l['delete'] = 'レコードは正常に削除されました。';
$l['invalid_domain'] = '無効なドメイン';
$l['err_norecord'] = 'レコードは発見されませんでした。';
$l['no_type'] = 'Invalid Type';

// Theme Strings
$l['<title>'] = APP.' - Advance DNS Setting';
$l['domain'] = 'ドメインの選択';
$l['advancedns'] = 'アドバンス DNS 設定';
$l['submit_button'] = 'レコードの追加';
$l['typedefault'] = 'アドレス';
$l['change_final'] = '追加されたレコード';
$l['dns_name'] = 'ネーム';
$l['dns_ttl'] = 'TTL';
$l['dns_class'] = 'クラス';
$l['dns_type'] = 'タイプ';
$l['dns_record'] = 'レコード';
$l['dns_option'] = 'オプション'; 
$l['record_del_conf'] = 'このレコードを削除してもよろしいですか？';
$l['record_table'] = 'Zone File records of';
$l['no_dns_recods'] = 'No DNS record(s) found';
$l['service_stop'] = 'Your Bind service is not running currently. Click here to start.';