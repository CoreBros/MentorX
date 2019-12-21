<?php

//////////////////////////////////////////////////////////////
//===========================================================
// software_lang.php
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

$l['no_info_file'] = 'INFO.XMLは発見されませんでした。サーバー管理者へ報告して下さい。';
$l['incompatible'] = 'ソフトウェアは、'.APP.'のより高いバージョンを要求しています。サーバー管理者へ報告して下さい。';
$l['no_install'] = 'INSTALL.XML ファイルは発見されませんでした。サーバー管理者へ報告して下さい。';
$l['no_functions'] = 'INSTALL FUNCTIONSファイルは発見されませんでした。サーバー管理者へ報告して下さい。';
$l['no_remove_functions'] = 'REMOVE FUNCTIONSファイルは発見されませんでした。サーバー管理者へ報告して下さい。';
$l['no_softdomain'] = 'ソフトウェアインストール用のドメインを選択していません。';
$l['wrong_softdomain'] = 'あなたが選択したドメインのパスは発見されませんでした。';
$l['softdirectory_exists'] = 'あなたが入力したディレクトリは既に存在しています。別のディレクトリ名を入力して下さい。';
$l['no_space'] = 'ソフトウェアをインストールするのに、十分な空き容量がありません。';
$l['no_softdb'] = 'データベースがポストされていません。';
$l['database_exists'] = 'そのデータベースは既に存在しています。別のデータベースを選択して下さい。';
$l['databaseuser_exists'] = 'そのデータベースユーザーは既に存在しています。別のデータベース名を選択して下さい。';
$l['db_name_long'] = 'データベース名は７文字を超えることが出来ません。データベース名を短縮して下さい。';
$l['db_limit_crossed'] = '作成可能な最大データベース数に達しているため、インストールは実行されませんでした。';
$l['no_field'] = '<b>&soft-1;</b>欄を埋めて下さい。';
$l['error_adddb'] = 'データベースは作成できませんでした。';
$l['error_adduser'] = '新規データベースへのユーザー追加中にエラーが発生しました。';
$l['no_package'] = 'インストール・パッケージは発見されませんでした。';
$l['no_decompress'] = 'パッケージファイルの展開中にエラーが発生しました。';
$l['mail_new_ins'] = '&soft-1;の新規インストールが完了しました。インストールの詳細は以下の通りです：';
$l['mail_path'] = 'パス';
$l['mail_url'] = 'URL';
$l['mail_admin_url'] = '管理者URL';
$l['mail_admin'] = '管理者のユーザー名';
$l['mail_pass'] = '管理者のパスワード';
$l['mail_db'] = 'MySQLデータベース';
$l['mail_dbuser'] = 'MySQLデータベース・ユーザー';
$l['mail_dbhost'] = 'MySQLデータベース・ホスト';
$l['mail_dbpass'] = 'MySQLデータベース・パスワード';
$l['mail_time'] = 'インストール時間';
$l['mail_subject'] = ' &soft-1;の新規インストール';
$l['no_cron_min'] = 'Cronの「秒」が指定されていません。';
$l['no_cron_hour'] = 'Cronの「時間」が指定されていません。';
$l['no_cron_day'] = ' Cronの「日」が指定されていません。';
$l['no_cron_month'] = 'Cronの「月」が指定されていません。';
$l['no_cron_weekday'] = 'Cronの「週」が指定されていません。';
$l['wrong_cron_min'] = 'Cronの「秒」が間違っています。有効な値は0-59もしくは<b>*</b>です。';
$l['wrong_cron_hour'] = 'Cronの「時間」が間違っています。有効な値は0-23もしくは<b>*</b>です。';
$l['wrong_cron_day'] = 'Cronの「日」が間違っています。有効な値は1-31もしくは<b>*</b>です。';
$l['wrong_cron_month'] = 'Cronの「月」が間違っています。有効な値は1-12もしくは<b>*</b>です。';
$l['wrong_cron_weekday'] = 'Cronの「週」が間違っています。有効な値は0-7もしくは<b>*</b>です。';
$l['mail_cron'] = 'Cronジョブ';
$l['no_datadir'] = 'データディレクトリが指定されていません。';
$l['datadir_exists'] = 'あなたが送信したデータディレクトリは存在しています。別のデータディレクトリを指定して下さい。';
$l['no_decompress_data'] = 'データファイルの展開中にエラーが発生しました。';
$l['mail_datadir'] = 'データディレクトリ';
$l['some_files_exist'] = '対象のフォルダ内に次のファイルが既に存在しているため、インストールを実行することができませんでした。既存ファイル：';
$l['delete_files'] = 'ファイルを削除するか、別のフォルダを選択して下さい。';
$l['overwrite_exist'] = ' <b>もしくは</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">チェックボックスを選択して、ファイルを上書きし、続行して下さい。</span></b>';
$l['checking_data'] = '送信データの確認';
$l['unzipping_files'] = 'ファイルとフォルダのコピー';
$l['unzipping_datadir'] = 'ファイルの解凍';
$l['prop_db'] = 'データベースの伝搬';
$l['finishing_process'] = 'インストール終了';
$l['wait_note'] = '<b>注:</b>この作業には3〜4分程掛かります。プログレスバーが100％に達するまで、このページから離れないで下さい。';
$l['no_hostname'] = 'あなたのデータベース・ホスト名を入力して下さい。';
$l['no_dbusername'] = 'あなたのデータベース・ユーザー名を入力して下さい。';
$l['no_dbuserpass'] = 'あなたのデータベース・パスワードを入力して下さい。';
$l['softdirectory_invalid'] = 'あなたの入力したディレクトリは無効です。';
$l['softdatadir_invalid'] = 'あなたが入力したデータ・ディレクトリは無効です。';
$l['err_domain'] = 'ドメインがありません。';
$l['err_domain_admin'] = 'このユーザーはドメインを保有していません。管理者へ報告して下さい。';
$l['err_pass_strength'] = 'Password strength must be greater than ';
$l['no_https'] = '信用できるSSL認証は発見されませんでした。';
$l['err_dbprefix'] = 'テーブル・プレフィックスは無効です。有効な値はa-z、A-Z、0-9 もしくは_です。';
$l['no_php_install'] = 'PHP はインストールされていません。インストールするには、<a href="'.$globals['index'].'act=apps&app=1">here</a>をクリックして下さい。';
$l['no_mysql_install'] = ' MySQLはインストールされていません。インストールするには、<a href="'.$globals['index'].'act=apps&app=16">here</a>をクリックして下さい。';
$l['no_domain_verify'] = 'Could not access your domain. Please make sure your domain is pointing to this server and there is no .htaccess file restricing access to your domain';
$l['auto_backup_not_allowed'] = 'The auto backup frequency you chose is invalid';
$l['invalid_script'] = 'Invalid Script ID';
$l['no_domain_found'] = 'No domain found. Please add a domain to install the script';
$l['not_php_script'] = 'This script is not in PHP';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['install'] = 'インストール';
$l['overview'] = '概要';
$l['features'] = '機能';
$l['demo'] = 'デモ';
$l['ratings'] = '評価';
$l['import'] = 'インポート';
$l['software_ver'] = 'バージョン';
$l['space_req'] = '必要な空き容量';
$l['available_space'] = '利用可能な空き容量';
$l['req_space'] = '必要な空き容量';
$l['mb'] = 'MB';
$l['software_support'] = 'ソフトウェア・サポート';
$l['support_link'] = 'サポートサイトの参照';
$l['support_note'] = '注意：Softaculousは、いかなるソフトウェアのサポートも提供しておりません。';
$l['setup'] = 'ソフトウェアセットアップ';
$l['choose_domain'] = 'ドメインの選択';
$l['choose_domain_exp'] = 'ソフトウェアインストール用のドメインを選択して下さい。';
$l['choose_url'] = 'Choose Installation URL';
$l['choose_url_exp'] = 'Please choose the URL to install the software';
$l['in_directory'] = 'ディレクトリ';
$l['in_directory_exp'] = 'ディレクトリはあなたのドメインに関連しており、存在していません（http://mydomain/dir/でインストールするには <b>dir</b>と入力し、http://mydomain/でインストールするには空欄のままとして下さい）。';
$l['database_name'] = 'データベース名';
$l['database_name_exp'] = 'インストール用に作成するデータベース名を入力して下さい。';
$l['softcopy_note'] = '<b>注</b>:このソフトウェアは、専用のインスタレーション・ユーティリティを使用したインストールを要求しています。インストールを完了するために、ファイルをコピーした際に表示されたURLを参照して下さい。';
$l['softsubmit'] = 'インストール';
$l['congrats'] = 'ソフトウェアは正常にインストールされました。';
$l['succesful'] = '正常にインストールされました。インストール場所：';
$l['admin_url'] = '管理者URL ';
$l['setup_continue'] = 'セットアップはソフトウェアにより完了されます。セットアップを完了するには、以下のURLをご参照下さい';
$l['enjoy'] = 'We hope the installation process was easy.';
$l['install_notes'] = '下記は重要事項を含んでおります。一読されることをお勧めします。 ';
$l['please_note'] = '<b>注</b>: '.APP.'は、自動ソフトウェアインストーラーであり、いかなるソフトウェアのサポートも提供しておりません。サポートを受けるためには、ソフトウェア提供元のウェブサイトをご参照下さい。';
$l['regards'] = 'Regards';
$l['softinstaller'] = ' Softaculous自動インストーラー';
$l['return'] = '概要へ戻る';
$l['current_ins'] = '現状のインスタレーション';
$l['link'] = 'リンク';
$l['ins_time'] = 'インストール時間';
$l['version'] = 'バージョン';
$l['upd_to'] = 'バージョンのアップグレード';
$l['remove'] = '削除';
$l['no_info'] = '情報はありません';
$l['randpass'] = 'ランダムパスワードを作成する';
$l['ratesoft'] = 'このスクリプトの評価';
$l['reviews'] = 'レビュー';
$l['reviewsoft'] = 'レビューを書く';
$l['readreviews'] = 'レビューを読む';
$l['reviews_exp'] = '他のユーザーが書いたレビューを読み、';
$l['cron_job'] = ' cronのジョブ';
$l['cron_job_exp'] = 'このスクリプトは、cronの作動を要求しています。変更しない場合は、現状のままとして下さい。';
$l['cron_min'] = '分';
$l['cron_hour'] = '時';
$l['cron_day'] = '日';
$l['cron_month'] = '月';
$l['cron_weekday'] = '平日';
$l['datadir'] = 'データ・ディレクトリ';
$l['datadir_exp'] = 'このスクリプトは、ウェブを介したアクセスができないフォルダへのデータ保存を要求しています。<b>datadir</b>を指定した場合、あなたのホームフォルダに- /home/username/<b>datadir</b>が作成されます。';
$l['db_alpha_num'] = 'データベース名は英数字のみ有効です。';
$l['overwrite'] = 'ファイルの上書き';
$l['ins_emailto'] = 'インストール詳細のＥメール送信先：';
$l['choose_protocol'] = 'プロトコルの選択';
$l['choose_protocol_exp'] = 'あなたのサイトがSSLを使用している場合は、HTTPSプロトコルを選択して下さい。';
$l['clone'] = '複製';
$l['backup'] = 'バックアップ';
$l['options'] = 'オプション';
$l['admin'] = '管理者';
$l['notify_ver'] = ''.$globals['sn'].'の新規バージョン通知';
$l['notifyversion'] = '新規バージョンのご連絡ありがとうございます。至急確認いたします。';
$l['del_insid'] = '選択したインスタレーションを削除してよろしいですか？この作業は取り消すことができません。また、これ以上の確認は求められません。';
$l['rem_inst_id'] = 'インスタレーションの削除 - ';
$l['no_sel_inst'] = '削除するインスタレーションが選択されていません。';
$l['inst_remvd'] = '選択されたインスタレーションは削除されました。ページを再度読み込みます。';
$l['remove'] = '削除';
$l['go'] = 'Go';
$l['screenshots'] = 'スクリーンショット';
$l['downloading'] = 'パッケージのダウンロード';
$l['installing'] = 'スクリプトのインストール';
$l['editdetail'] = '詳細の編集';
$l['publish'] = 'ウェブ上に発行';
$l['hostname'] = 'データベース・ホスト名';
$l['hostname_exp'] = ' MySQLホスト名（主に<b>localhost</b>）';
$l['dbusername'] = 'データベース・ユーザー名';
$l['dbusername_exp'] = ' MySQLユーザー名';
$l['dbuserpass'] = ' データベース・パスワード';
$l['dbuserpass_exp'] = ' MySQL ユーザーのパスワード';
$l['database_name_exp_aefer'] = 'インストール用のデータベース名を入力して下さい。';
$l['sel_version'] = 'バージョンの選択';
$l['choose_version_exp'] = 'インストールするバージョンを選択して下さい。';
$l['choose_version'] = 'インストールしたいバージョンを選択して下さい。';
$l['select'] = '選択';
$l['release_date'] = 'リリース日';
$l['adv_option'] = 'アドバンスドオプション';
$l['disable_notify_update'] = 'アップデート通知を無効にする';
$l['exp_disable_notify_update'] = 'チェックした場合、このインスタレーションで利用可能な、アップデートに関するＥメール通知を受信しません。';
$l['prog_installing'] = 'インストール '; // Dont remove trailing space
$l['prog_install_complete'] = 'インストール完了';
$l['eu_auto_upgrade'] = '自動アップグレード';
$l['exp_eu_auto_upgrade'] = 'Select the automatic upgrade preference for this installation when a new version is available';
$l['auto_upgrade_enabled'] = '自動アップグレードは有効です。';
$l['bad'] = 'Bad';
$l['good'] = 'Good';
$l['strong'] = 'Strong';
$l['short'] = 'Short';
$l['strength_indicator'] = '強度インジケーター';
$l['auto_backup'] = '自動バックアップ';
$l['exp_auto_backup'] = APP.'は、あなたが選択した任意の頻度で、cronを介して自動バックアップを取ります。';
$l['auto_backup_rotation'] = 'バックアップ・ローテーション';
$l['exp_auto_backup_rotation'] = 'バックアップ・ローテーションが上限に達した場合、'.APP.' は最も古いバックアップを削除した後、新規バックアップを作成します。空き容量を活用してバックアップを作成するため、あなたのサーバーの空き容量に準じて、バックアップ・ローテーションを選択して下さい。';
$l['no_backup'] = 'バックアップしない';
$l['daily'] = '1回／日';
$l['weekly'] = '1回／週';
$l['monthly'] = '1回／月';
$l['unlimited'] = '無制限';
$l['changelog'] = 'ログの変更';
$l['act_upgrade'] = '最近のアップグレード';
$l['act_clone'] = '最近の複製';
$l['act_backup'] = '最近のバックアップ';
$l['act_install'] = '最近のインストール';
$l['act_edit'] = '最近の編集';
$l['act_import'] = '最近のインポート';
$l['act_restore'] = '最近の復元';
$l['ampps_download'] = '無料開発ツールSoftaculous を使用して、あなたの<b>デスクトップ</b>に<b>&soft-1;</b>を開発することができます。<a href="http://www.ampps.com/download?give=latest" target="_blank"><img src="https://images.softaculous.com/ampps.gif" height="25" /></a>をダウンロードするには、<a href="http://www.ampps.com/download?give=latest" target="_blank"><b>here</b></a>をクリックして下さい。';

$l['install_tweet_sub'] = 'あなたの新規サイトについて友人に紹介しましょう。';

$l['choose_theme'] = 'テーマの選択';
$l['clear_theme'] = '選択のクリア';
$l['installing_theme'] = 'インストールテーマ';
$l['cant_download_theme'] = 'そのテーマファイルをインストールできませんでした。';
$l['no_theme_package'] = 'そのテーマインストールパッケージは発見できませんでした。';
$l['unzipping_theme_files'] = 'テーマファイルとフォルダのコピー';
$l['use_this_theme'] = '選択';
$l['err_auto_backup_limit'] = '自動バックアップローテーションは<b>&soft-1;</b>を超えることができません。';
$l['select_domain'] = 'ドメインの選択';
$l['with_selected'] = '選択した状態で';
$l['not_in_free'] = '<b>&soft-1;</b> cannot be installed in the Free version of '.APP.'!';
$l['notify_admin'] = 'Please notify your Server Admin to purchase the premium version of '.APP.'!';
$l['related_scripts'] = 'Related Scripts';

$l['date_added'] = 'Date Added';
$l['downloaded'] = 'Downloaded';

$l['soft_ins_exists'] = 'An installation already exists at &soft-1; as per our records. To re-install the application please uninstall the existing installation!';
$l['install_now'] = '今すぐインストール';
$l['my_apps'] = '私のアプリ';

$l['backup_location'] = 'Backup Location';
$l['backup_location_exp'] = 'Choose the backup location to be used while backing up this installation';
$l['default'] = 'Default';
$l['invalid_backup_location'] = 'Backup location submitted does not exist';
$l['local_folder'] = 'Local Folder';

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

$l['pushtolive'] = 'Push to Live';
$l['staging'] = 'Create Staging';

$l['dont_auto_upgrade'] = 'Do not Auto Upgrade'; 
$l['minor_auto_upgrade'] = 'Upgrade to <b>Minor</b> versions only'; 
$l['major_auto_upgrade'] = 'Upgrade to any latest version available (<b>Major</b> as well as <b>Minor</b>)'; 
$l['auto_upgrade_major'] = '(Major and Minor)'; 
$l['auto_upgrade_minor'] = '(Minor)';

$l['err_fetch_key'] = 'Could not fetch the PFX API key at the moment';
$l['ampps_notify_premium'] = 'This feature is available in the premium version of AMPPS. Please purchase <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';

$l['view_items'] = 'List Items in Set';
$l['ok'] = 'OK';
$l['plugins'] = 'Plugins';
$l['themes'] = 'Themes';
$l['empty_set'] = 'There are currently no items in the set!!';

$l['error_max_ins_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Installations allowed per script';
$l['error_max_backup_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Backups allowed per script';
$l['error_max_clone_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Clone allowed per script';
$l['error_max_staging_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Staging allowed per script';

$l['remove_complete'] = 'Remove Completely';
$l['remove_info'] = 'Remove from '.APP;
$l['manage_sets'] = 'プラグイン/テーマセットの管理';
$l['manage_plugin_sets'] = 'Manage Plugin Sets';
$l['manage_theme_sets'] = 'Manage Theme Sets';