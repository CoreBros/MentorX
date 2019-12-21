<?php

//////////////////////////////////////////////////////////////
//===========================================================
// js_lang.php
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

$l['no_info_file'] = ' インフォメーションファイルを発見できませんでした。サーバー管理者へ報告して下さい。';
$l['incompatible'] = 'ソフトウェアは'.APP.'の新しいバージョンを要求しています。サーバー管理者へ報告して下さい。';
$l['no_install'] = ' インストールファイルを発見できませんでした。サーバー管理者へ報告して下さい。';
$l['no_functions'] = 'インストール機能ファイルを発見できませんでした。サーバー管理者へ報告して下さい。';
$l['no_softdomain'] = 'ソフトウェアインストール用のドメインを選択していません。';
$l['wrong_softdomain'] = '選択したドメインのパスが発見されませんでした。';
$l['no_space'] = 'このソフトウェアをインストールするのに十分な空き容量がありません。';
$l['no_field'] = '入力欄<b>&soft-1;</b>への入力が必要です。';
$l['no_package'] = 'インスタレーションパッケージを発見できませんでした。';
$l['no_decompress'] = 'パッケージファイルの展開中にエラーが発生しました。';
$l['mail_new_ins'] = '新規&soft-1;のインストールが完了しました。インスタレーションの詳細は下記に表示されます。';
$l['mail_path'] = 'パス';
$l['mail_url'] = 'URL';
$l['mail_time'] = 'インストール時間';
$l['mail_subject'] = '&soft-1;の新規インストール';
$l['some_files_exist'] = '目標のフォルダに次のファイルが既に存在しているため、インストールを開始できませんでした。';
$l['delete_files'] = 'これらのファイルを削除するか別のフォルダを選択して下さい。';
$l['checking_data'] = '送信されたデータの確認';
$l['unzipping_files'] = 'ファイルとフォルダのコピー';
$l['unzipping_datadir'] = 'データファイルの解凍';
$l['prop_db'] = 'データベースの伝搬';
$l['finishing_process'] = 'インスタレーションの終了';
$l['wait_note'] = '<b>注意:</b>この作業には３～４分程かかります。プログレスバーが100％に達するまで、このページから離れないで下さい。';
$l['softdirectory_invalid'] = '入力されたディレクトリは無効です。';
$l['err_domain'] = 'No Domain';
$l['err_domain_admin'] = 'This User does not have any Domain. Please contact Administrator.';
$l['no_sel_inst'] = 'インスタレーションが選択されていません。';
$l['del_insid'] = '選択されたインスタレーションを削除してもよろしいですか？';
$l['ins_emailto'] = 'インスタレーション詳細のＥメール先';
$l['no_https'] = '信頼できるSSL証明書を発見できませんでした。';
$l['err_dbprefix'] = 'テーブルプレフィックスが無効です。有効な値はa～z、A～Z、0～9または＿です。';
$l['auto_backup_not_allowed'] = 'The auto backup frequency you chose is invalid';
$l['invalid_script'] = 'Invalid Script ID';
$l['not_js_script'] = 'This script is not JavaScript';
$l['no_domain_found'] = 'No domain found. Please add a domain to install the script';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['install'] = 'インストール';
$l['overview'] = '概要';
$l['features'] = '機能';
$l['demo'] = 'デモ';
$l['ratings'] = '評価';
$l['import'] = 'インポート';
$l['software_ver'] = 'バージョン';
$l['space_req'] = '必要な容量';
$l['available_space'] = '利用可能な容量';
$l['req_space'] = '必要な容量';
$l['mb'] = 'MB';
$l['software_support'] = 'ソフトウェアサポート';
$l['support_link'] = 'サポートサイトを参照する';
$l['support_note'] = '注意：Softaculousはいかなるソフトウェアのサポートも提供していません。';
$l['setup'] = 'ソフトウェアセットアップ';
$l['choose_domain'] = 'ドメインの選択';
$l['choose_domain_exp'] = 'ソフトウェアインストール用のドメインを選択して下さい。';
$l['in_directory'] = 'ディレクトリ';
$l['in_directory_exp'] = 'ディレクトリはあなたのドメインに関連し、存在しない場合は作成されます（例：http://mydomain/dir/でインストールする場合は<b>dir</b>を入力し、http://mydomain/でインストールする場合は空欄のままにします）';
$l['softsubmit'] = 'インストール';
$l['congrats'] = 'ソフトウェアは正常にインストールされました。';
$l['succesful'] = 'で正常にインストールされました。';
$l['enjoy'] = 'We hope the installation process was easy.';
$l['install_notes'] = ' 以下、重要な情報となりますので、一読するのをお勧めします。';
$l['please_note'] = ' <b>注意</b>: '.APP.'は自動インストーラーのため、個別のソフトウェアパッケージについて、いかなるサポートも提供しておりません。サポートが必要な場合は、ソフトウェア提供元のウェブサイトをご参照下さい。';
$l['regards'] = '注意';
$l['softinstaller'] = ' Softaculous自動インストーラー';
$l['return'] = '概要へ戻る';
$l['current_ins'] = '現在のインスタレーション';
$l['link'] = 'リンク';
$l['ins_time'] = 'インストール時間';
$l['version'] = 'バージョン';
$l['upd_to'] = 'バージョンのアップグレード';
$l['remove'] = '削除';
$l['no_info'] = '情報はありません';
$l['ratesoft'] = 'このスクリプトを評価する';
$l['reviews'] = 'レビュー';
$l['reviewsoft'] = 'レビューを書く';
$l['readreviews'] = 'レビューを読む';
$l['reviews_exp'] = '他のユーザーのレビューを読み、';
$l['ins_type'] = 'インストールタイプ';
$l['ins_type_exp'] = '<b>オリジナルパッケージ</b> - パッケージはスクリプトのサイトから利用可能です。<br /> <b>ライブラリファイル </b> - Javascript ファイルのみです。';
$l['ori_pack'] = 'オリジナルパッケージ';
$l['just_lib'] = 'ライブラリファイル';
$l['overwrite_exist'] = ' <b>または</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">全てのファイルを上書きして続けるには、チェックボックスを選択して下さい。</span></b>';
$l['overwrite'] = '上書きファイル';
$l['choose_protocol'] = 'プロトコルの選択';
$l['choose_protocol_exp'] = 'あなたのサイトがSSLの場合は、HTTPS プロトコルを選択して下さい。';
$l['clone'] = '複製';
$l['options'] = 'オプション';
$l['downloading'] = 'パッケージのダウンロード';
$l['installing'] = 'スクリプトのインストール';
$l['go'] = 'Go';
$l['rem_inst_id'] = 'インスタレーションの削除 - ';
$l['inst_remvd'] = '選択されたインスタレーションは削除されました。ページは再読み込みされます。';
$l['release_date'] = 'リリースデータ';
$l['adv_option'] = 'アドバンスドオプション';
$l['disable_notify_update'] = 'アップデート通知を無効にする';
$l['exp_disable_notify_update'] = 'チェックした場合、このインスタレーションで利用可能なアップデートの通知を受信しません。';
$l['prog_installing'] = 'インストール '; // Dont remove trailing space
$l['prog_install_complete'] = 'インストールが完了しました。';

$l['auto_backup'] = '自動バックアップ';
$l['exp_auto_backup'] = APP.'は、選択された頻度でCRON を介して自動バックアップします。';
$l['auto_backup_rotation'] = 'バックアップローテーション';
$l['exp_auto_backup_rotation'] = 'バックアップローテーションが上限に達した場合、'.APP.' はこのインスタレーションの以前のバックアップを削除し、新規でバックアップを作成します。新規バックアップにより空き容量が消費されるため、あなたのサーバーの空き容量に合わせて、ローテーションを選択して下さい。';
$l['no_backup'] = 'バックアップしない';
$l['daily'] = '1回/日';
$l['weekly'] = '1回/週';
$l['monthly'] = '1回/月';
$l['unlimited'] = '無制限';
$l['changelog'] = 'ログの変更';
$l['act_upgrade'] = '最近のアップグレード';
$l['act_clone'] = '最近の複製';
$l['act_backup'] = '最近のバックアップ';
$l['act_install'] = '最近のインストール';
$l['act_edit'] = '最近の編集';
$l['act_import'] = '最近のインポート';
$l['act_restore'] = '最近の修復';
$l['ampps_download'] = '無料開発ツールSoftaculous AMPPSを利用し、あなたの<b>デスクトップ</b>上で<b>&soft-1;</b>を開発することができます。<a href="http://www.ampps.com/download?give=latest" target="_blank"><b>here</b></a>をクリックし、<a href="http://www.ampps.com/download?give=latest" target="_blank"><img src="https://images.softaculous.com/ampps.gif" height="25" /></a>をダウンロードして下さい。';
$l['with_selected'] = '選択した状態で';
$l['not_in_free'] = '<b>&soft-1;</b> cannot be installed in the Free version of '.APP.'!';
$l['notify_admin'] = 'Please notify your Server Admin to purchase the premium version of '.APP.'!';
$l['related_scripts'] = 'Related Scripts';
$l['backup'] = 'Backup';
$l['editdetail'] = 'Edit Details';
$l['install_now'] = '今すぐインストール';
$l['my_apps'] = '私のアプリ';

$l['bad'] = 'Bad';
$l['good'] = 'Good';
$l['strong'] = 'Strong';
$l['short'] = 'Short';
$l['strength_indicator'] = 'Strength Indicator';

$l['backup_location'] = 'Backup Location';
$l['backup_location_exp'] = 'Choose the backup location to be used while backing up this installation';
$l['default'] = 'Default';
$l['invalid_backup_location'] = 'Backup location submitted does not exist';
$l['local_folder'] = 'Local Folder';

$l['no_cron_min'] = 'No Cron minute was specified';
$l['no_cron_hour'] = 'No Cron hour was specified';
$l['no_cron_day'] = 'No Cron day was specified';
$l['no_cron_month'] = 'No Cron month was specified';
$l['no_cron_weekday'] = 'No Cron weekday was specified';

$l['custom_autobackup'] = 'Custom';
$l['custom_autobackup_cron'] = 'Automated Backups Cron time';
$l['custom_autobackup_cron_exp'] = 'Please specify the CRON timings for automated backups';

//Errors for autobcakup cron settings
$l['wrong_autobackup_cron_min'] = 'Automated Backup cron minute is wrong. Valid values are 0-59 or a *';
$l['wrong_autobackup_cron_hour'] = 'Automated Backup cron hour is wrong. Valid values are 0-23 or a *';
$l['wrong_autobackup_cron_day'] = 'Automated Backup cron day is wrong. Valid values are 1-31 or a *';
$l['wrong_autobackup_cron_month'] = 'Automated Backup cron month is wrong. Valid values are 1-12 or a *';
$l['wrong_autobackup_cron_weekday'] = 'Automated Backup cron weekday is wrong. Valid values are 0-7 or a *';

$l['quick_install'] = 'Quick Install';
$l['custom_install'] = 'Custom Install';

$l['outdated_script'] = '<b>&soft-1;</b> has not been updated for more than two years and may no longer be maintained or supported by the script vendor';
$l['ampps_notify_premium'] = 'This feature is available in the premium version of AMPPS. Please purchase <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';

$l['choose_url'] = 'Choose Installation URL';
$l['choose_url_exp'] = 'Please choose the URL to install the software';

$l['error_max_ins_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Installations allowed per script';
$l['notify_ver'] = 'Notify '.$globals['sn'].' of a new Version';
$l['notifyversion'] = 'Thank you for informing about the new version. We will look into it as soon as possible';