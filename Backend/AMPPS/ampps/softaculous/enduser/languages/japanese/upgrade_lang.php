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

$l['no_info_file'] = ' INFO.XMLファイルは発見されませんでした。サーバー管理者へ報告して下さい。';
$l['incompatible'] = 'ソフトウェアは、'.APP.'のより高いバージョンを要求しています。サーバー管理者へ報告して下さい。';
$l['no_upgrade'] = 'UPGRADE.XMLファイルは発見されませんでした。サーバー管理者へ報告して下さい。';
$l['no_functions'] = ' UPGRADE FUNCTIONSファイルは発見されませんでした。サーバー管理者へ報告して下さい。';
$l['no_field'] = '<b>&soft-1;</b>欄の入力が必要です。';
$l['no_package'] = 'アップグレード・パッケージを発見できませんでした。';
$l['no_decompress'] = 'パッケージファイルの展開中にエラーが発生しました。';
$l['checking_data'] = '送信データの確認';
$l['unzipping_files'] = 'ファイルとフォルダのコピー';
$l['unzipping_datadir'] = 'データファイルの解凍';
$l['prop_db'] = 'データベースのアップデート';
$l['finishing_process'] = 'アップグレードの終了';
$l['wait_note'] = '<b>注意:</b> この作業には3～4分程掛かります。進捗状況メーターが100％に達するまで、このページから離れないで下さい。';
$l['cver_greater'] = '現在のバージョンは、あなたがアップグレード予定のバージョンよりも高い、もしくはそれと同等のバージョンとなっています。あなたが手動でインストレーションをアップグレードした可能性があります。そうでない場合、下記のチェックボックスにチェックして下さい。';
$l['force_upgrade'] = '強制アップグレード';
$l['backup_finish'] = 'バックアップ終了';
$l['backup_fail_proceed'] = 'バックアップ中にエラーが発生しました。アップグレードを続行しますか？';
$l['backing_up'] = 'インストレーションのバックアップ';
$l['no_space'] = 'このインストレーションをアップグレードするのに、十分な空き容量がありません。';
$l['invalid_insid'] = 'Invalid Installation ID';
$l['invalid_script'] = 'Invalid Script ID';
$l['no_upgrade_support'] = 'Upgrade is not supported for this script';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['upgrade'] = 'ソフトウェアアップグレード';
$l['softins_url'] = 'URL';
$l['softins_path'] = 'パス';
$l['softcopy_note'] = ' <b>注意</b>:このソフトウェアは、専用のアップグレードユーティリティを使用してアップグレードします。アップグレードを完了させるためには、ファイルをコピーした際に表示されるURLをご参照下さい。';
$l['softsubmit'] = 'アップグレード';
$l['congrats'] = 'ソフトウェアは、正常にアップグレードされました。';
$l['succesful'] = 'は、正常にアップグレードされました。アップグレード場所：';
$l['admin_url'] = '管理者URL';
$l['setup_continue'] = 'アップグレードは、ソフトウェアにより完了されます。以下URLをご参照下さい：';
$l['enjoy'] = 'We hope the upgrade process was easy.';
$l['upgrade_notes'] = ' 下記は重要事項を含んでおります。一読されることをお勧めします。';
$l['please_note'] = ' <b>注意</b>: '.APP.'は、自動インストーラーであり、いかなるソフトウェアのサポートも提供しておりません。サポートを受けるためには、ソフトウェア販売元のウェブサイトをご参照下さい。 ';
$l['regards'] = 'Regards';
$l['softinstaller'] = APP.'自動インストーラー';
$l['return'] = '概要へ戻る';
$l['note_backup'] = 'アップグレードする前に、インスタレーションの<a href="'.$globals['index'].'act=backup&insid=&soft-1;">バックアップ</a>を取ることをお勧めいたします。';
$l['alreadyupdated'] = 'インスタレーションの実際のバージョンは、<b>&soft-2;</b>ではなく<b>&soft-1;</b>のようです。'.APP.'記録をアップデートするには、ここをクリックして下さい。';
$l['no_update_required'] = '既にアップデートされているため、アップデートの必要はありません。';
$l['auto_backup'] = 'アップグレードの前にバックアップを取りますか？';
$l['select_version'] = 'アップグレードするバージョンを選択して下さい。';
$l['upgrading'] = 'アップグレード中...';
$l['setup_partial'] = 'アップグレード完了まで、あと1ステップです。';
$l['finish_update'] = 'アップグレード完了のためには、下記リンクをご参照下さい。';
$l['finish_up_sucess'] = 'アップグレード完了後、&soft-1;インスタレーションへアクセスできます。';
$l['upgrading_to'] = '次へアップグレードします: ';
$l['version'] = 'バージョン ';
$l['create_backup'] = 'バックアップの作成';
$l['create_backup_exp'] = 'アップグレードの前にバックアップを作成する。';
$l['prog_upgrading'] = 'アップグレード ';// Dont remove the trailing space
$l['prog_upgrade_complete'] = 'アップグレード完了';

$l['upgrade_tweet_sub'] = 'Tell your friends';

$l['not_in_free'] = '<b>&soft-1;</b> cannot be upgraded in the Free version of '.APP.'!';
$l['notify_admin'] = 'Please notify your Server Admin to purchase the premium version of '.APP.'!';

$l['backup_type'] = 'Backup Options';
$l['backup_type_exp'] = 'Choose full backup or advanced options';
$l['standard_backup'] = 'Full Backup (Default)';
$l['advanced_backup'] = 'Advanced Options';

$l['backup_dir'] = 'Backup Directory';
$l['backup_db'] = 'Backup Database';
$l['backup_wwwdir'] = 'Backup Web Directory';
$l['backup_datadir'] = 'Backup Data Directory';
$l['no_dir'] = 'The installation files are missing hence cannot proceed with the upgrade';
$l['wpc_return'] = 'Return to Installations';