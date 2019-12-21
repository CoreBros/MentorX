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

$l['no_info_file'] = 'INFO.XMLを発見できませんでした。サーバー管理者へ報告して下さい。';
$l['incompatible'] = 'ソフトウェアは'.APP.'の新しいバージョンを要求しています。サーバー管理者へ報告して下さい。';
$l['no_install'] = ' INSTALL.XMLを発見できませんでした。サーバー管理者へ報告して下さい。';
$l['no_functions'] = ' INSTALL FUNCTIONSを発見できませんでした。サーバー管理者へ報告して下さい。';
$l['no_softdomain'] = 'ソフトウェアインストール用のドメインを選択していません。';
$l['wrong_softdomain'] = '選択されたドメインのパスは発見されませんでした。';
$l['softdirectory_exists'] = '入力されたディレクトリはすでに存在しています。別のディレクトリ名を入力して下さい。';
$l['no_space'] = 'このソフトウェアをインストールするのに十分な空き容量がありません。';
$l['no_softdb'] = 'データベースが掲載されていません。';
$l['database_exists'] = 'そのデータベースはすでに存在しています。別のデータベースを選択して下さい。';
$l['databaseuser_exists'] = ' そのデータベース・ユーザーはすでに存在しています。別のデータベース名を選択して下さい。';
$l['db_name_long'] = 'データベース名は７文字を超えることができません。７文字以下データベース名を選択して下さい。';
$l['db_limit_crossed'] = '作成可能なデータベース数に達しているため、インスタレーションが実行されませんでした。';
$l['no_field'] = ' <b>&soft-1;</b>欄を入力する必要があります。';
$l['error_adddb'] = 'データベースを作成できませんでした。';
$l['error_adduser'] = '新規データベースへのユーザーの追加中にエラーが発生しました。';
$l['no_package'] = 'インスタレーション・パッケージを発見できませんでした。';
$l['no_decompress'] = 'パッケージファイルの展開中にエラーが発生しました。';
$l['mail_new_ins'] = ' &soft-1; の新規インストールが完了しました。インストールの詳細は下記をご参照下さい。';
$l['mail_path'] = 'パス';
$l['mail_url'] = 'URL';
$l['mail_admin_url'] = '管理者URL';
$l['mail_admin'] = '管理者ユーザー名';
$l['mail_pass'] = '管理者パスワード';
$l['mail_db'] = 'MySQLデータベース';
$l['mail_dbuser'] = 'MySQLデータベース・ユーザー';
$l['mail_dbhost'] = 'MySQLデータベース・ホスト';
$l['mail_dbpass'] = 'MySQLデータベース・パスワード';
$l['mail_time'] = 'インストール時間';
$l['mail_subject'] = '&soft-1;の新規インストール';
$l['no_cron_min'] = 'cronの分値が指定されていません。';
$l['no_cron_hour'] = 'cronの時間値が指定されていません。';
$l['no_cron_day'] = 'cronの日付値が指定されていません。';
$l['no_cron_month'] = 'cronの月値が指定されていません。';
$l['no_cron_weekday'] = 'cronの平日値が指定されていません。';
$l['wrong_cron_min'] = 'cronの分値が間違っています。有効な分値は、0-59もしくは<b>*</b>です。';
$l['wrong_cron_hour'] = 'cronの時間値が間違っています。有効な時間値は、0-23もしくは<b>*</b>です。';
$l['wrong_cron_day'] = 'cronの日付値が間違っています。有効な日付値は、1-31もしくは<b>*</b>です。';
$l['wrong_cron_month'] = 'cronの月値が間違っています。有効な月値は、1-12もしくは<b>*</b>です。';
$l['wrong_cron_weekday'] = 'cronの平日値が間違っています。有効な平日値は、0-7もしくは<b>*</b>です。';
$l['mail_cron'] = 'cronのジョブ';
$l['no_datadir'] = 'データ・ディレクトリが指定されていません。';
$l['datadir_exists'] = '送信されたディレクトリは存在しています。別のディレクトリを指定して下さい。';
$l['no_decompress_data'] = 'データファイルの展開中にエラーが発生しました。';
$l['mail_datadir'] = 'データ・ディレクトリ';
$l['some_files_exist'] = '指定したフォルダ内に、次のファイルが存在しているため、インストールを実行できません。';
$l['delete_files'] = 'これらのファイルを削除するか、別のフォルダを選択して下さい。';
$l['overwrite_exist'] = '<b>OR</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;"> ファイルを上書きして続行するため、チェックボックスを選択して下さい。</span></b>';
$l['www_files_exist'] = 'ウェブディレクトリ内に、次のファイルが存在しているため、インストールを実行できません。';
$l['no_decompress_www'] = 'ウェブファイルの展開中にエラーが発生しました。';
$l['no_config_perl_path'] = 'CGIファイルの設定中にエラーが発生しました。';
$l['mail_wwwdir'] = 'ウェブ・ディレクトリ';
$l['checking_data'] = '送信データの確認';
$l['unzipping_files'] = 'ファイルとフォルダのコピー';
$l['unzipping_datadir'] = 'データファイルの解凍';
$l['prop_db'] = 'データベースの伝搬';
$l['finishing_process'] = 'インストールの終了';
$l['wait_note'] = '<b>NOTE:</b>本作業には3〜4分ほど掛かります。プログレスバーが100％に達するまで、このページから離れないで下さい。';
$l['softdirectory_invalid'] = '入力されたディレクトリは無効です。';
$l['softdatadir_invalid'] = '入力されたデータ・ディレクトリは無効です。';
$l['wwwdir_invalid'] = '入力されたWWW ディレクトリは無効です。';
$l['err_pass_strength'] = 'パスワード強度を強化する必要があります。';
$l['no_https'] = '信頼できるSSL認証が発見されませんでした。';
$l['err_dbprefix'] = 'テーブル・プレフィックスが無効です。有効な値は、a-z、A-Z、0-9または _です。';
$l['no_perl_install'] = 'PERLがインストールされていません。インストールするには<a href="'.$globals['index'].'act=apps&app=19">here</a>をクリックして下さい。';
$l['no_mysql_install'] = 'MySQLがインストールされていません。インストールするには <a href="'.$globals['index'].'act=apps&app=16">here</a>をクリックして下さい。';
$l['auto_backup_not_allowed'] = 'The auto backup frequency you chose is invalid';
$l['invalid_script'] = 'Invalid Script ID';
$l['not_perl_script'] = 'This script is not in PERL';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['install'] = 'インストール';
$l['overview'] = '概要';
$l['features'] = '機能';
$l['demo'] = 'デモ';
$l['ratings'] = '評価';
$l['import'] = 'インポート';
$l['software_ver'] = 'バージョン';
$l['space_req'] = '必要容量';
$l['available_space'] = '空き容量';
$l['req_space'] = '必要容量';
$l['mb'] = 'MB';
$l['software_support'] = 'ソフトウェアサポート';
$l['support_link'] = 'サポートサイトを参照する';
$l['support_note'] = '注意：Softaculous はいかなるソフトウェアのサポートも提供していません。';
$l['setup'] = 'ソフトウェアセットアップ';
$l['choose_domain'] = 'ドメインの選択';
$l['choose_domain_exp'] = 'ソフトウェアをインストールするため、ドメインを選択して下さい。';
$l['in_directory'] = 'ディレクトリ';
$l['in_directory_exp'] = 'ディレクトリはあなたのドメイン関連し、存在しません（例： http://mydomain/dir/でインストールするには<b>dir</b>を入力し、 http://mydomain/でインストールするには空欄のままとして下さい）。';
$l['database_name'] = 'データベース名';
$l['database_name_exp'] = 'インストール用に作成されるデータベース名を入力して下さい。';
$l['softcopy_note'] = ' <b>注意</b>:このソフトウェアは、専用のインストール・ユーティリティを使用してインストールする必要があります。インストールを完了させるためには、ファイルをコピーした際に表示されたURLをご参照下さい。';
$l['softsubmit'] = 'インストール';
$l['congrats'] = 'ソフトウェアは正常にインストールされました。';
$l['succesful'] = 'は正常に次の場所にインストールされました。';
$l['admin_url'] = '管理者URL';
$l['setup_continue'] = 'セットアップはソフトウェアにより完了されます。セットアップを完了するには、次のURLを参照して下さい。';
$l['enjoy'] = 'We hope the installation process was easy.';
$l['install_notes'] = '下記の注記事項には、重要事項が含まれておりますので、、ご一読されることを強くお勧めいたします。';
$l['please_note'] = ' <b>注意</b>: '.APP.' は自動ソフトウェアインストーラーであるため、ソフトウェアパッケージのサポートは提供しておりません。サポートを受けるには、ソフトウェア提供元もウェブサイトをご参照下さい。';
$l['regards'] = 'Regards';
$l['softinstaller'] = APP.'自動インストーラー';
$l['return'] = '概要へ戻る';
$l['current_ins'] = '現在のインスタレーション';
$l['link'] = 'リンク';
$l['ins_time'] = 'インストール時間';
$l['version'] = 'バージョン';
$l['upd_to'] = 'バージョンのアップグレード';
$l['remove'] = '削除';
$l['no_info'] = '情報はありません';
$l['randpass'] = 'ランダムパスワードの作成';
$l['ratesoft'] = 'このスクリプトを評価する';
$l['reviews'] = 'レビュー';
$l['reviewsoft'] = 'レビューを書く';
$l['readreviews'] = 'レビューを読む';
$l['reviews_exp'] = '他のユーザーのレビューを読み、';
$l['cron_job'] = 'cronのジョブ';
$l['cron_job_exp'] = 'このスクリプトは、cronの作動を要求しています。cronのタイミングを指定して下さい。不要な場合、変更は必要ありません。';
$l['cron_min'] = '分';
$l['cron_hour'] = '時';
$l['cron_day'] = '日';
$l['cron_month'] = '月';
$l['cron_weekday'] = '平日';
$l['datadir'] = 'データ・ディレクトリ';
$l['datadir_exp'] = 'このディレクトリは、ウェブからアクセスできないフォルダへの、データの保存を要求しています。<b>データ・ディレクトリ</b> を選択した場合、下記が作成されます- /home/username/<b>データ・ディレクトリ</b>';
$l['db_alpha_num'] = 'データベース名は、英数字のみ有効です。';
$l['overwrite'] = 'ファイルをの上書き';
$l['ins_emailto'] = 'インストール内容を右記へメールする：';
$l['choose_protocol'] = 'プロトコルの選択';
$l['choose_protocol_exp'] = 'あなたのサイトがSSLを使用している場合は、HTTPSプロトコルを選択指定して下さい。';
$l['clone'] = '複製';
$l['backup'] = 'バックアップ';
$l['options'] = 'オプション';
$l['admin'] = '管理者';
$l['notify_ver'] = ''.$globals['sn'].の新バージョンを通知する。;
$l['notifyversion'] = '新バージョンを通知頂きありがとうございます。至急確認させて頂きます。';
$l['del_insid'] = '選択されたインスタレーションを削除してよろしいですか？本作業は取り消すことができません。また、これ以上の確認は求められません。';
$l['rem_inst_id'] = 'インスタレーションの削除 - ';
$l['no_sel_inst'] = '削除するインスタレーションが選択されていません。';
$l['inst_remvd'] = '選択されたインスタレーションは削除されれました。このページを再度読み込みます';
$l['remove'] = '削除';
$l['go'] = 'Go';
$l['screenshots'] = 'スクリーンショット';
$l['downloading'] = 'パッケージダウンロード';
$l['installing'] = 'スクリプトのインストール';
$l['editdetail'] = '内容の編集';
$l['wwwdir'] = 'ウェブディレクトリ';
$l['wwwdir_exp'] = 'ディレクトリは、ウェブからのアクセスが可能です。';
$l['publish'] = 'ウェブへ公開する';
$l['release_date'] = 'リリース日';
$l['adv_option'] = 'アドバンスド・オプション';
$l['disable_notify_update'] = 'アップデート通知を無効にする';
$l['exp_disable_notify_update'] = 'チェクした場合、このインスタレーションで利用可能なアップデートに関する通知を、Ｅメールで受信しません。';
$l['prog_installing'] = 'インストール '; // Dont remove trailing space
$l['prog_install_complete'] = 'インストール完了';
$l['bad'] = 'Bad';
$l['good'] = 'Good';
$l['strong'] = 'Strong';
$l['short'] = 'Short';
$l['strength_indicator'] = '強度インジケーター';

$l['auto_backup'] = '自動バックアップ';
$l['exp_auto_backup'] = APP.'は、cronを介して、あなたが選択した任意の頻度で、自動バックアップを取ります。';
$l['auto_backup_rotation'] = 'バックアップ・ローテーション';
$l['exp_auto_backup_rotation'] = 'バックアップ・ローテーションの上限に達した場合、'.APP.'は最も古いバックアップを消去し、新規バックアップを作成します。バックアップは空き容量を活用するため、あなたのサーバーの空き容量に準じて、バックアップ・ローテーションを選択して下さい。';
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
$l['ampps_download'] = '無料開発ツールSoftaculous AMPPSを使用し、あなたの<b>デスクトップ</b>上に<b>&soft-1;</b>を開発することができます。<a href="http://www.ampps.com/download?give=latest" target="_blank"><b>here</b></a>をクリックし、<a href="http://www.ampps.com/download?give=latest" target="_blank"><img src="https://images.softaculous.com/ampps.gif" height="25" /></a>をダウンロードして下さい。';
$l['with_selected'] = '選択した状態で';
$l['not_in_free'] = '<b>&soft-1;</b> cannot be installed in the Free version of '.APP.'!';
$l['notify_admin'] = 'Please notify your Server Admin to purchase the premium version of '.APP.'!';
$l['related_scripts'] = 'Related Scripts';

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
$l['ampps_notify_premium'] = 'This feature is available in the premium version of AMPPS. Please purchase <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';

$l['choose_url'] = 'Choose Installation URL';
$l['choose_url_exp'] = 'Please choose the URL to install the software';
$l['error_max_ins_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Installations allowed per script';
