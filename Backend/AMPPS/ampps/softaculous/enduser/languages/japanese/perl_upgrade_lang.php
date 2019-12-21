<?php

//////////////////////////////////////////////////////////////
//===========================================================
// upgrade_lang.php
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

$l['no_info_file'] = 'INFO.XMLファイルは発見されませんでした。サーバー管理者へ報告して下さい。';
$l['incompatible'] = 'ソフトウェアは、'.APP.'のより高いバージョンを要求しています。サーバー管理者へ報告して下さい。';
$l['no_upgrade'] = 'UPGRADE.XMLファイルは発見されませんでした。サーバー管理者へ報告して下さい。';
$l['no_functions'] = 'UPGRADE FUNCTIONSファイルは発見されませんでした。サーバー管理者へ報告して下さい。';
$l['no_field'] = ' <b>&soft-1;</b>欄への入力が必要です。';
$l['no_package'] = 'アップグレードパッケージは発見されませんでした。';
$l['no_decompress'] = 'パッケージファイルの展開中にエラーが発生しました。';
$l['no_decompress_www'] = 'ウェブファイルの展開中にエラーが発生しました。';
$l['no_config_perl_path'] = ' CGIファイルの設定中にエラーが発生しまし。';
$l['checking_data'] = '送信データの確認';
$l['unzipping_files'] = 'ファイルとフォルダのコピー';
$l['unzipping_datadir'] = 'データファイルの解凍';
$l['prop_db'] = 'データベースのアップデート';
$l['finishing_process'] = 'アップグレードの終了';
$l['wait_note'] = '<b>注意:</b>この作業には2〜3分ほど掛かります。プログレスバーが100％に達するまで、このページを離れないで下さい。';
$l['no_space'] = 'このインスタレーションをアップグレードするのに、十分な空き容量がありません。';
$l['invalid_insid'] = 'Invalid Installation ID';
$l['invalid_script'] = 'Invalid Script ID';
$l['not_perl_script'] = 'This script is not in PERL';
$l['no_perl_upgrade'] = 'Upgrade is not supported for this script';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['upgrade'] = 'ソフトウェアアップグレード';
$l['softins_url'] = 'URL';
$l['softins_path'] = 'パス';
$l['softcopy_note'] = ' <b>注意</b>: このソフトウェアは、専用のアップグレード・ユーティリティを使用して、アップグレードします。アップグレードを完了させるためには、ファイルをコピーした際に表示されるURLをご参照下さい。';
$l['softsubmit'] = 'アップグレード';
$l['congrats'] = 'ソフトウェアは、正常にアップグレードされました。';
$l['succesful'] = 'は、正常にアップグレードされました。アップグレード場所：';
$l['admin_url'] = '管理者URL';
$l['setup_continue'] = 'アップグレードは、ソフトウェアによって完了します。以下のURLをご参照下さい。';
$l['enjoy'] = 'We hope the upgrade process was easy.';
$l['upgrade_notes'] = '下記は重要事項を含んでおります。一読されることをお勧めします。';
$l['please_note'] = '<b>注意</b>: '.APP.'は自動インストーラーであり、いかなるソフトウェアのサポートも提供しておりません。サポートを受けるためには、ソフトウェア提供元のウェブサイトをご参照下さい。';
$l['regards'] = 'Regards';
$l['softinstaller'] = ' Softaculous自動インストーラー';
$l['return'] = '概要へ戻る';
$l['note_backup'] = 'アップグレードする前に、インスタレーションの<a href="'.$globals['index'].'act=backup&insid=&soft-1;">バックアップ</a>を取ることをお勧めいたします。';
$l['create_backup'] = 'バックアップの作成';
$l['create_backup_exp'] = 'アップグレードの前にバックアップを作成する。';
$l['prog_upgrading'] = 'アップグレード ';// Dont remove the trailing space
$l['prog_upgrade_complete'] = 'アップグレード完了.';

$l['upgrade_tweet_sub'] = 'Tell your friends';
$l['not_in_free'] = '<b>&soft-1;</b> cannot be upgraded in the Free version of '.APP.'!';
$l['notify_admin'] = 'Please notify your Server Admin to purchase the premium version of '.APP.'!';


