<?php

//////////////////////////////////////////////////////////////
//===========================================================
// index_lang.php
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

$l['user_data_error_t'] = 'ユーザーデータのエラー';
$l['user_data_error'] = APP.'はあなたのアカウント情報を読み込むことができません。サーバー管理者へ報告して下さい。';

$l['remote_licence_t'] = '無効なライセンス';
$l['remote_licence'] = 'あなたは有効なライセンスを使用していません。サーバー管理者へ報告して下さい。';

$l['enterprise_licence_t'] = '無効なライセンス';
$l['enterprise_licence'] = 'あなたは有効なライセンスを使用していません。サーバー管理者へ報告して下さい。';

$l['no_license'] = ' LICENSEファイルは発見されませんでした。サーバー管理者へ報告して下さい。';

$l['today'] = '<b>Today</b> at ';//The today string for showing todays post time

$l['init_theme_error_t'] = 'テーマエラー';//Title
$l['init_theme_error'] = 'テーマファイルの読込ができません- &soft-1;.';

$l['init_theme_func_error_t'] = 'テーマ機能のエラー';//Title
$l['init_theme_func_error'] = '&soft-1;のテーマ機能を読み込むことができません。';

$l['disable_softaculous_t'] = ' Softaculous が作動しません。';
$l['disable_softaculous'] = ' Softaculous はこのユーザーへでは作動しません。システム管理者へ報告して下さい。';

$l['load_theme_settings_error'] = 'テーマ設定ファイルを読み込むことができません。';

$l['view_guide'] = 'View Guide';
$l['max_db_length'] = 'The database name cannot be greater than &soft-1; characters. Please choose a shorter database name.';


//Error Handle Function
$l['following_errors_occured'] = '次のエラーが発見されました。';

//Success Message Function
$l['following_message'] = '次のメッセージが返信されました。';

//Major Error Function
$l['fatal_error'] = '致命的なエラー';
$l['following_fatal_error'] = '次のエラーが発生しました。';

//Message Function
$l['soft_message'] = APP.' メッセージ';
$l['following_soft_message'] = '次のメッセージが返信されました。';

//Update Softwares
$l['no_soft_found'] = 'ソフトウェアは発見されませんでした.....アップデートが必要です。';
$l['ver_not_match'] = 'バージョンが一致しません.....アップデートが必要です。';
$l['ver_match'] = '現在のバージョンは最新です.....継続中';
$l['del_prev_files'] = '旧ファイルの削除......完了';
$l['fetch_latest'] = '最新ファイルの取得......';
$l['error_fetch_latest'] = '最新ファイルを取得できませんでした.....継続中';
$l['error_save_latest'] = '最新ファイルを保存できませんでした.....継続中';
$l['got_latest'] = '最新ファイルを保存しました。';
$l['unzip_latest'] = 'ファイルの解凍中......';
$l['error_unzip_latest'] = '解凍のエラー.....継続中';
$l['unzipped_latest'] = '正常に解凍しました。';

//Update Softaculous
$l['getting_info'] = '情報を要求中......';
$l['error_getting_latest'] = '情報を取得できませんでした......中止します';
$l['got_info'] = '情報を取得しました。';
$l['manual_mode'] = ''.APP.'の新バージョンは、manual attentionを要求しています......中止します';
$l['no_updates'] = '現在のバージョンは最新です.....継続中';
$l['fetch_upgrade'] = 'アップグレードの取得......';
$l['error_fetch_upgrade'] = 'アップグレードファイルを取得できませんでした......中止します';
$l['error_save_upgrade'] = 'アップグレードファイルを保存できませんでした......中止します';
$l['got_upgrade'] = 'アップグレードファイルを保存しました。';
$l['unzip_upgrade'] = 'ファイルの解凍中......';
$l['error_unzip_upgrade'] = '解凍のエラー......中止します';
$l['unzipped_upgrade'] = '正常に解凍しました。';
$l['md5_check'] = 'MD5 チェックは成功しました。';
$l['err_md5_check'] = 'これらのファイルへのMD5 チェックは成功しませんでした。';
$l['err_md5_file'] = ' 存在しません。';

//MySQL Errors
$l['err_selectmy'] = ' MySQL データベースを選択できませんでした。';
$l['err_myconn'] = 'MySQL 通信を構築できませんでした。';
$l['err_makequery'] = '検索番号を作成できませんでした。';
$l['err_mynum'] = 'MySQLエラー番号';
$l['err_myerr'] = 'MySQLエラー';
$l['err_no_db_file'] = 'The database import file does not exist';
$l['err_no_open_db_file'] = 'Could not open the database import file';

//Importing Errors
$l['imp_wrong_softdomain'] = 'ドメイン&soft-1; のパスは発見されませんでした。';
$l['imp_softpath_wrong'] = '&soft-1;のパスが間違っており、存在しません。';
$l['imp_ins_exists'] = '記録上、 &soft-1;は&soft-2;に既に存在し、管理されています。';
$l['imp_no_func'] = '&soft-1; のインポート機能を読み込むことができませんでした。';
$l['imp_err'] = '&soft-1;へインストールされたソフトウェアのインポート中にエラーが発生しました。';
$l['err_query'] = 'Could not execute the query';

$l['invalid_search_input'] = 'Invalid Theme Search character. Only alphanumeric characters, underscore and hyphen are allowed.';

//hf_theme.php
$l['welcome'] = 'ようこそ';
$l['logout'] = 'ログアウト';
$l['page_time'] = 'ページ作成時間';
$l['times_are'] = '時間はGMTです。
 ';
$l['time_is'] = '現在の時間：';
$l['no_script_found'] = 'そのようなスクリプトは発見されませんでした。';
$l['webuzo_sysapps_disabled'] = 'This functionality has been disabled from the Webuzo Admin Panel';
$l['webuzo_install_utility'] = 'This utility is not installed. Please install it first';

//The Category Language Variables
$l['forums'] = 'フォーラム';
$l['blogs'] = 'ブログ';
$l['cms'] = 'Portals/CMS';
$l['galleries'] = 'イメージギャラリー';
$l['wikis'] = 'Wikis';
$l['admanager'] = '広告管理';
$l['calendars'] = 'カレンダー';
$l['games'] = 'ゲーム';
$l['mail'] = 'メール';
$l['polls'] = 'ポーリングと調査';
$l['projectman'] = 'プロジェクト管理';
$l['ecommerce'] = 'Ｅコマース';
$l['guestbooks'] = 'ゲストブック';
$l['customersupport'] = 'カスタマーサポート';
$l['others'] = 'その他';
$l['music'] = '音楽';
$l['video'] = 'ビデオ';
$l['files'] = 'ファイル管理';
$l['go_cpanel'] = 'コントロールパネルを参照する';
$l['go_home'] = APP.' ホーム';
$l['go_demos'] = 'スクリプトデモ';
$l['go_ratings'] = 'スクリプト評価';
$l['go_settings'] = '編集設定';
$l['go_email_settings'] = 'Ｅメール設定';
$l['go_installations'] = '全てのインスタレーション';
$l['go_support'] = 'ヘルプとサポート';
$l['go_sync'] = 'その他の自動インストーラーの同期';
$l['go_backups'] = 'バックアップと復元';
$l['go_tasklist'] = 'タスクリスト';
$l['go_apps_installations'] = '全インストール済みアプリケーション';
$l['go_my_themes'] = 'My Themes';
$l['go_logout'] = 'Logout';
$l['ins_stats'] = 'Installations';
$l['outdated_stats'] = 'Outdated Installations';
$l['backups_stats'] = 'Backups';

$l['type_php'] = 'PHP';
$l['type_perl'] = 'Perl';
$l['type_js'] = 'JavaScript';
$l['type_java'] = 'Java';
$l['search'] = '検索';
$l['back_to_top'] = 'トップへ戻る';

$l['show'] = 'Show';
$l['hide'] = 'Hide';

// Categories
$l['cat_php_forums'] = 'フォーラム';
$l['cat_php_blogs'] = 'ブログ';
$l['cat_php_cms'] = 'Portals/CMS';
$l['cat_php_galleries'] = 'イメージギャラリー';
$l['cat_php_wikis'] = 'Wikis';
$l['cat_php_admanager'] = '広告管理';
$l['cat_php_calendars'] = 'カレンダー';
$l['cat_php_games'] = 'ゲーム';
$l['cat_php_mail'] = 'メール';
$l['cat_php_polls'] = '世論調査と分析';
$l['cat_php_projectman'] = 'プロジェクトマネジメント';
$l['cat_php_ecommerce'] = 'Ｅコマース';
$l['cat_php_guestbooks'] = 'ゲストブック';
$l['cat_php_customersupport'] = 'カスタマーサポート';
$l['cat_php_others'] = 'その他';
$l['cat_php_music'] = '音楽';
$l['cat_php_video'] = 'ビデオ';
$l['cat_php_rss'] = 'RSS';
$l['cat_php_socialnetworking'] = 'ソーシャルネットワーキング';
$l['cat_php_microblogs'] = 'マイクロブログ';
$l['cat_php_frameworks'] = 'フレームワーク';
$l['cat_php_educational'] = '教育';
$l['cat_php_erp'] = 'ERP';
$l['cat_php_dbtools'] = 'DBツール';
$l['cat_php_files'] = 'ファイル管理';
$l['cat_js_libraries'] = 'ライブラリ';
$l['cat_js_widgets'] = 'Widgets';
$l['cat_perl_blogs'] = 'ブログ';
$l['cat_perl_ecommerce'] = 'Ｅコマース';
$l['cat_perl_wikis'] = 'Wikis';
$l['cat_perl_forums'] = 'フォーラム';
$l['cat_perl_mail'] = 'メール';
$l['cat_java_cms'] = 'CMS';
$l['cat_java_forums'] = 'フォーラム';
$l['cat_java_projectman'] = 'プロジェクト管理';
$l['cat_java_erp'] = 'ERP';
$l['cat_java_blogs'] = 'ブログ';
$l['cat_java_wikis'] = 'Wikis';
$l['cat_apps_server_side_scripting'] = 'サーバー側のスクリプト記述';
$l['cat_apps_web_servers'] = 'ウェブサーバー';
$l['cat_apps_utilities'] = 'ユーティリティ';
$l['cat_apps_libraries'] = 'ライブラリ';
$l['cat_apps_databases'] = 'データベース';
$l['cat_apps_stacks'] = 'スタック';
$l['cat_apps_security'] = 'セキュリティ';
$l['cat_apps_statistics'] = 'スタティスティックス';
$l['cat_apps_java_tools'] = 'Java ツール';
$l['cat_apps_java_containers'] ='Java コンテイナー';
$l['cat_apps_version_control'] ='バージョンコントロール';
$l['cat_apps_modules'] ='モジュール';

// Classes Categories
$l['classes_ajax'] = 'Ajax';
$l['classes_cryptography'] = '暗号文';
$l['classes_algorithms'] = 'アルゴリズム';
$l['classes_artificialintelligence'] = '人工知';
$l['classes_email'] = 'Ｅメール';
$l['classes_finances'] = '財務';
$l['classes_searching'] = '検索';
$l['classes_user_management'] = 'ユーザー管理';
$l['classes_utilitiesandtools'] = 'ユーティリティとツール';
$l['classes_validation'] = '検証';
$l['classes_security'] = 'セキュリティ';
$l['classes_console'] = 'コンソール';
$l['classes_codegeneration'] = 'コード生成';
$l['classes_chat'] = 'チャット';
$l['classes_astrology'] = '星占い';
$l['classes_audio'] = 'オーディオ';
$l['classes_biology'] = '生物学';
$l['classes_blogs'] = 'ブログ';
$l['classes_cache'] = 'キャッシュ';
$l['classes_compression'] = '圧縮';
$l['classes_configuration'] = '設定';
$l['classes_contentmanagement'] = 'コンテンツ管理';
$l['classes_conversion'] = 'コンバージョン';
$l['classes_datatypes'] = 'データタイプ';
$l['classes_databases'] = 'データベース';
$l['classes_debug'] = 'デバッグ';
$l['classes_designpatterns'] = 'デザインパターン';
$l['classes_ecommerce'] = 'Ｅコマース';
$l['classes_elearning'] = 'Ｅラーニング';
$l['classes_emulators'] = 'エミュレーター';
$l['classes_filesandfolders'] = 'ファイルとフォルダ';
$l['classes_flash'] = 'Flash';
$l['classes_forums'] = 'フォーラム';
$l['classes_games'] = 'ゲーム';
$l['classes_geography'] = '地理学';
$l['classes_graphics'] = 'グラフィックス';
$l['classes_gui'] = 'GUI';
$l['classes_hosting'] = 'ホスティング';
$l['classes_html'] = 'HTML';
$l['classes_http'] = 'HTTP';
$l['classes_language'] = '言語';
$l['classes_projectmanagement'] = 'プロジェクト管理';

// Softaculous Remote Domain Strings
$l['no_domain_data'] = 'Domain Data Not Found!!';
$l['no_aefer_resp'] = 'Could not access the worker file over web. Please check if your domain is pointing to the correct server.'; 

// Webuzo Strings
$l['webuzo'] = 'Webuzo';
$l['go_domain'] = 'ドメイン管理';
$l['webuzo_license_exp'] = 'あなたのライセンスは機能していないか、期限が切れています。期限が切れている場合は、更新してからWebuzo の利用を継続して下さい。';
$l['webuzo_license_exp_t'] = 'ライセンスは機能していません。';
$l['err_no_access'] = 'You do not have permission to access this page';

// Ampps Strings
$l['ampps'] = 'AMPPS';
$l['go_domain'] = 'ドメイン管理';
$l['ampps_license_exp'] = 'あなたのライセンスは機能していないか、期限が切れています。期限が切れている場合は、更新してからAmpps の利用を継続して下さい。';
$l['ampps_license_exp_t'] = 'ライセンスは機能していません。';


/////////////////////////////////////////////////////////////
/////  Following Variables are used for Email Templates /////
/////////////////////////////////////////////////////////////

$l['notify_enable'] = '有効';
$l['notify_disable'] = '無効';

$l['autoupgrade_enable'] = '有効';
$l['autoupgrade_disable'] = '無効';

// Auto backup strings
$l['auto_backup_enable'] = '有効';
$l['auto_backup_disable'] = '無効';

// Install Template Vaiable
$l['mail_install_php_sub'] = ' $scriptnameの新規インスタレーション';
$l['mail_install_php'] = '$scriptname $versionの新規インストールは完了しました。インストール詳細は以下をご参照下さい：
Path : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>データ・ディレクトリ: $datadirectory</if>
<if $admin_username>管理者ユーザー名: $admin_username</if>
<if $admin_pass> 管理者パスワード: $admin_pass</if>
<if $admin_email> 管理者Ｅメール: $admin_email</if>
<if $dbname>MySQLデータベース: $dbname</if>
<if $dbuser>MySQL DB ユーザー: $dbuser</if>
<if $dbhost>MySQL DB ホスト: $dbhost</if>
<if $dbpass>MySQL DB パスワード: $dbpass</if>
<if $cron>Cronのジョブ: $cron</if>
<if $disable_notify_update>アップデート通知: $disable_notify_update</if>
<if $eu_auto_upgrade>自動アップグレード: $eu_auto_upgrade</if>
<if $auto_backup>自動バックアップ: $auto_backup</if>
<if $auto_backup_rotation>バックアップ・ローテーション: $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
<if $time>インストール時間: $time</if>

Ｅメール配信を停止したい場合は、コントロール・パネル -> '.APP.' ->Ｅメール設定をご参照下さい。';

// Clone Template Vaiable
$l['mail_clone_sub'] = ' $scriptnameのインスタレーションの複製';
$l['mail_clone'] = 'あなたの$scriptname $versionのインスタレーションは正常に複製されました。.

オリジナル・インスタレーションの詳細:
オリジナル・パス: $old_path
オリジナル・URL : $old_url

複製されたインスタレーションの詳細:
パス: $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>データ・ディレクトリ: $datadirectory</if>
<if $dbname>MySQLデータベース: $dbname</if>
<if $dbuser>MySQL DBユーザー: $dbuser</if>
<if $dbhost>MySQL DBホスト: $dbhost</if>
<if $dbpass>MySQL DBパスワード: $dbpass</if>
<if $cron>Cronジョブ: $cron</if>
<if $time>インストール時間: $time</if>

Ｅメール配信を停止したい場合は、コントロール・パネル -> '.APP.' ->Ｅメール設定をご参照下さい。';

// Install Template Vaiable
$l['mail_install_js_sub'] = '$scriptname の新規インストール';
$l['mail_install_js'] = ' $scriptname $versionの新規インストールは完了しました。インストール詳細は以下をご参照下さい：
パス: $path
URL : $url
<if $disable_notify_update>アップデート通知: $disable_notify_update</if>
<if $auto_backup>自動バックアップ: $auto_backup</if>
<if $auto_backup_rotation>バックアップ・ローテーション: $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
<if $time>インストール時間: $time</if>

Ｅメール配信を停止したい場合は、コントロール・パネル -> '.APP.' ->Ｅメール設定をご参照下さい。';

// Install Template Vaiable
$l['mail_install_perl_sub'] = ' $scriptname の新規インストール';
$l['mail_install_perl'] = ' $scriptname $versionの新規インストールは完了しました。インストール詳細は以下をご参照下さい：
パス: $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>データ・ディレクトリ: $datadirectory</if>
<if $wwwdir>ウェブ・ディレクトリ: $wwwdir</if>
<if $admin_username>Adminユーザー名: $admin_username</if>
<if $admin_pass>Adminパスワード: $admin_pass</if>
<if $admin_email>AdminＥメール: $admin_email</if>
<if $dbname>MySQLデータベース: $dbname</if>
<if $dbuser>MySQL DBユーザー: $dbuser</if>
<if $dbhost>MySQL DBホスト: $dbhost</if>
<if $dbpass>MySQL DB パスワード: $dbpass</if>
<if $cron>Cronジョブ: $cron</if>
<if $disable_notify_update>アップデート通知: $disable_notify_update</if>
<if $auto_backup>自動バックアップ: $auto_backup</if>
<if $auto_backup_rotation>バックアップ・ローテーション: $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
<if $time>インストール時間: $time</if>

Ｅメール配信を停止したい場合は、コントロール・パネル -> '.APP.' ->Ｅメール設定をご参照下さい。';

// Install Template Vaiable
$l['mail_install_java_sub'] = ' $scriptname の新規インストール';
$l['mail_install_java'] = ' $scriptname $versionの新規インストールは完了しました。インストール詳細は以下をご参照下さい：
パスワード: $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>データ・ディレクトリ: $datadirectory</if>
<if $wwwdir>ウェブ・ディレクトリ: $wwwdir</if>
<if $admin_username>Adminユーザー名: $admin_username</if>
<if $admin_pass>Adminパスワード: $admin_pass</if>
<if $admin_email>AdminＥメール: $admin_email</if>
<if $dbname>MySQLデータベース: $dbname</if>
<if $dbuser>MySQL DBユーザー: $dbuser</if>
<if $dbhost>MySQL DBホスト: $dbhost</if>
<if $dbpass>MySQL DBパスワード: $dbpass</if>
<if $cron>Cronジョブ: $cron</if>
<if $disable_notify_update>アップデート通知: $disable_notify_update</if>
<if $auto_backup>自動バックアップ: $auto_backup</if>
<if $auto_backup_rotation>バックアップ・ローテーション: $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
<if $time>インストール時間: $time</if>

Ｅメール配信を停止したい場合は、コントロール・パネル -> '.APP.' ->Ｅメール設定をご参照下さい。';

// Update template Variable (From ADMIN)
$l['mail_update_sub'] = 'スクリプトのアップデートは利用可能です。';
$l['mail_update'] = ' 
本メールは、あなたがインストールした、期限切れのインスタレーションに関するメールです。セキュリティ上の理由から、至急これらインスタレーションをアップデートすることをお勧めいたします。
以下のスクリプトのアップデートが利用可能です：

$installation

これらのスクリプトをアップグレードするには、コントロール・パネル-> '.APP.' -> インスタレーションをご参照下さい。
サーバー管理者から$serverip
';

// Remove Template Variable
$l['mail_remove_sub'] = ' $scriptname のインスタレーションの削除';
$l['mail_remove'] = ' $scriptnameのインスタレーションは削除されました。以下のインスタレーションの詳細をご参照下さい:
パス: $path
<if $url>URL : $url</if>
<if $datadirectory>データ・ディレクトリ : $datadirectory</if>
<if $wwwdir>ウェブ・ディレクトリ: $wwwdir</if>
<if $dbname>MySQLデータベース: $dbname</if>
<if $dbuser>MySQL DBユーザー: $dbuser</if>
<if $dbhost>MySQL DBホスト: $dbhost</if>
<if $dbpass>MySQL DBパスワード: $dbpass</if>
<if $cron>Cronジョブ: $cron</if>
インストール時間: $time
削除時間: $rem_time

Ｅメール配信を停止したい場合は、コントロール・パネル -> '.APP.' ->Ｅメール設定をご参照下さい。';

// Cron Template Variable
$l['mail_cron_sub'] = 'スクリプトのアップデートが利用可能です。';
$l['changelog'] = '== Changelog for';
$l['mail_cron'] = '以下のスクリプトのアップデートが利用可能です:

$installation

これらのスクリプトのアップグレードをするには、コントロール・パネル-> '.APP.' ->インスタレーションをご参照下さい。


$changelog

From '.APP.' Cron ジョブ$serverip

Ｅメール配信を停止したい場合は、コントロール・パネル -> '.APP.' ->Ｅメール設定をご参照下さい。

';

// Editdetail Template Variable
$l['mail_editdetail_sub'] = ' 修正された$scriptname のインスタレーション詳細';
$l['mail_editdetail'] = ' $scriptnameのインスタレーション詳細は修正されました。以下、修正されたインスタレーションの詳細です：:
パス: $path
URL : $url
<if $datadirectory>データ・ディレクトリ: $datadirectory</if>
<if $wwwdir> ウェブ・ディレクトリ: $wwwdir</if>
<if $wwwurl> ウェブURL : $wwwurl</if>
<if $dbname>MySQLデータベース: $dbname</if>
<if $dbuser>MySQL DBユーザー: $dbuser</if>
<if $dbhost>MySQL DB ホスト: $dbhost</if>
<if $dbpass>MySQL DB パスワード: $dbpass</if>
<if $cron>Cron ジョブ: $cron</if>
<if $disable_notify_update>アップデート通知 : $disable_notify_update</if>
<if $eu_auto_upgrade>自動アップグレード: $eu_auto_upgrade</if>
<if $auto_backup>自動バックアップ: $auto_backup</if>
<if $auto_backup_rotation>バックアップ・ローテーション : $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
インストール時間: $time
修正時間 : $edit_time

Ｅメール配信を停止したい場合は、コントロール・パネル -> '.APP.' ->Ｅメール設定をご参照下さい。';

// Backup Language Strings
$l['mail_backup_sub'] = '$scriptname インスタレーションのバックアップ ';
$l['mail_backup'] = 'あなたの$scriptnameインスタレーションのバックアップは、正常に完了しました。
以下詳細です:
インスタレーション・パス: $path
インスタレーションURL : $url
<if $backup_location>Backup Location : $backup_location</if>
バックアップ・パス : $backup_file
<if $backup_note>バックアップ・ノート: $backup_note</if>

'.APP.'内のバックアップ・セクションから、バックアップをダウンロードすることができます。
Ｅメール配信を停止したい場合は、コントロール・パネル -> '.APP.' ->Ｅメール設定をご参照下さい。';

$l['mail_backup_fail_sub'] = '失敗: $scriptname インスタレーションのバックアップ';
$l['mail_backup_fail'] = 'あなたの$scriptname インスタレーションのバックアップは、正常に完了しませんでした。.
詳細は以下をご参照下さい:
インスタレーション・パス: $path
インスタレーションURL : $url
バックアップ・パス: $backup_file

以下のエラーが発生しました:
$error

しばらく時間を置いて、再度バックアップの作成を試みて下さい。
Ｅメール配信を停止したい場合は、コントロール・パネル -> '.APP.' ->Ｅメール設定をご参照下さい。';


// Restore Language Strings
$l['mail_restore_sub'] = 'あなたの$scriptnameの復元 ';
$l['mail_restore'] = 'あなたの$scriptnameバックアップは、正常に完了しました。.
以下、詳細です:
インスタレーション・パス: $path
インスタレーションURL : $url

Ｅメール配信を停止したい場合は、コントロール・パネル -> '.APP.' ->Ｅメール設定をご参照下さい。';

$l['mail_restore_fail_sub'] = '失敗 : $scriptname の復元';
$l['mail_restore_fail'] = 'あなたの$scriptnameは、正常に完了しませんでした。
以下、詳細です:
インスタレーション・パス: $path
インスタレーションURL : $url

次のエラーが発生しました:
$error

しばらく時間を置いて、再度バックアップの復元を試みて下さい。
Ｅメール配信を停止したい場合は、コントロール・パネル -> '.APP.' ->Ｅメール設定をご参照下さい。
';

// Restore Background Language Strings
$l['mail_restore_bg_sub'] = 'Restore of your $scriptname backup started in background';
$l['mail_restore_bg'] = 'The restore of your $scriptname backup has started in the background. You will receive an email notification about the status once the restore process is completed.
The details are as follows :
Installation Path : $path
Installation URL : $url

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Backup Background Language Strings
$l['mail_backup_bg_sub'] = 'Backup of your $scriptname installation started in background';
$l['mail_backup_bg'] = 'The backup of your $scriptname has started in background. You will receive an email notification about the status once the backup process is completed.
The details are as follows :
Installation Path : $path
Installation URL : $url

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// import Language Strings
$l['mail_import_sub'] = 'Import of your $scriptname installation';
$l['mail_import'] = 'The import of your $scriptname installation was completed successfully.
The details are as follows :
Installation Path : $path
Installation URL : $url

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// import fail Language Strings
$l['mail_import_fail_sub'] = 'Failed : Import of your $scriptname installation';
$l['mail_import_fail'] = 'The import of your $scriptname installation did not complete successfully.
The details are as follows :
Installation Path : $path
Installation URL : $url

The following error occured :
$error

Please try to import the installation again after some time.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Import Background Language Strings
$l['mail_import_bg_sub'] = 'Import of your $scriptname installation';
$l['mail_import_bg'] = 'The import of your $scriptname installation has started in the background. You will receive an email notification about the status once the import process is completed.
The details are as follows :
Installation Path : $path
Installation URL : $url

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';


// Install Template Vaiable CLASSES
$l['mail_install_classes_sub'] = ' $classesname の新規インスタレーション';
$l['mail_install_classes'] = ' $classesname $versionの新規インストールが完了しました。インストール詳細は、以下を
ご参照下さい:
パス: $path
<if $time>インストール時間 : $time</if>

Ｅメール配信を停止したい場合は、コントロール・パネル -> '.APP.' ->Ｅメール設定をご参照下さい。';

////////////////////////
// ADMIN UPGRADE - 6
////////////////////////

// Auto Upgrade Email For Admin (successful)
$l['mail_adminupgrade_success_admin_sub'] = 'ユーザー$userの$scriptnameインスタレーションは正常にアップグレードされました。';
$l['mail_adminupgrade_success_admin'] = 'ユーザー$userの$scriptnameインスタレーションは、最新のバージョンに正常にアップグレードされました。
以下、詳細です:
インスタレーションURL : $url
最新バージョン : $version
旧バージョン: $oldversion
';

// Auto Upgrade Email For Admin (Failed) but restored successfully.
$l['mail_adminupgrade_fail_admin_sub'] = ' $scriptname インスタレーションのアップグレードは失敗し、バックアップから復元されました。';
$l['mail_adminupgrade_fail_admin'] = 'ユーザー$userの $scriptnameインスタレーションのアップグレードは失敗しました。
'.APP.'はアップグレード前にバックアップを作成し、バックアップは正常に復元されました。
インスタレーション URL : $url
現在のバージョン: $oldversion
最新バージョン: $version
以下、アップグレード・エラーの詳細です:
エラー : $upgrade_error
';

// Auto Upgrade Email for user (successful)
$l['mail_adminupgrade_success_user_sub'] = ' $scriptname インスタレーションは、システムAdminにより正常にアップグレードされました。 ';
$l['mail_adminupgrade_success_user'] = 'あなたの$scriptnameインスタレーションは、システムAdminにより、正常にアップグレードされました。
以下、詳細です:
インスタレーションURL : $url
最新バージョン : $version
旧バージョン: $oldversion

Ｅメール配信を停止したい場合は、コントロール・パネル -> '.APP.' ->Ｅメール設定をご参照下さい。';

// Auto Upgrade Email for user (fail) but restored successfully
$l['mail_adminupgrade_fail_user_sub'] = ' システムAdminによる、あなたの$scriptnameインスタレーションのアップグレードは失敗しました。 ';
$l['mail_adminupgrade_fail_user'] = 'システムAdminは、あなたの$scriptnameインスタレーションのアップグレードを試みましたが、アップグレード・プロセスは失敗しました。
インスタレーションのアップグレード前にバックアップが作成され、あなたのインスタレーションは、このバックアップから正常に復元されました。
インスタレーション URL : $url
現在のバージョン : $oldversion
最新バージョン: $version
以下、アップグレード・エラーの詳細です:
エラー: $upgrade_error

Ｅメール配信を停止したい場合は、コントロール・パネル -> '.APP.' ->Ｅメール設定をご参照下さい。';

// ALL IS FAILED (Upgrade and RESTORE toooo) (FOR ADMIN)
$l['mail_adminupgrade_restore_fail_admin_sub'] = 'ユーザー$userの$scriptname インスタレーションのアップグレード・プロセスは失敗しました。';
$l['mail_adminupgrade_restore_fail_admin'] = ' ユーザー$userの$scriptname インスタレーションのアップグレード・プロセスは失敗しました。
アップグレード前にバックアップが作成されましたが、復元のプロセスはしました。

手動による復元が要求されています。手動復元のガイドをご利用いただけます:
http://www.softaculous.com/docs/Manual_Restore

以下、あなたが復元を要求した$scriptnameインスタレーションの、インスタレーションおよびバックアップの詳細です:
バックアップファイルへのパス : $backup_path
インスタレーションのパス : $softpath
<if $dbname> データベース名: $dbname</if>
<if $dbuser>データベース・ユーザー: $dbuser</if>
<if $dbpass>データベース・パス: $dbpass</if>
<if $dbhost>データベース・ホスト: $dbhost</if>

インスタレーションURL : $url
現在のバージョン: $oldversion
最新バージョン: $version
<if $upgrade_error>
以下、アップグレード・エラーの詳細です:
エラー: $upgrade_error
</if>
<if $error>
以下、復元エラーの詳細です:
エラー : $error
</if>

'.APP.'チームによるヘルプをご利用いただけます。何か問題が発生した場合は、(support@'.strtolower(APP).'.com)から'.APP.'チームへご連絡下さい。
';

// ALL IS FAILED (Upgrade and RESTORE toooo) (FOR USER)
$l['mail_adminupgrade_restore_fail_user_sub'] = 'システムAdmin による、$scriptname インスタレーションのアップグレードは失敗しました。';
$l['mail_adminupgrade_restore_fail_user'] = 'システムAdminがあなたの$scriptnameインスタレーションのアップグレードを試みましたが、アップグレードは失敗しました。
アップグレード前にバックアップが作成されましたが、復元のプロセスは失敗しました。

手動による復元が要求されています。手動復元のガイドをご利用いただけます:
http://www.softaculous.com/docs/Manual_Restore

以下、あなたが復元を要求した$scriptnameインスタレーションの、インスタレーションおよびバックアップの詳細です :
あなたのバックアップファイルへのパス: $backup_path
インスタレーションのパス: $softpath
<if $dbname>データベース名: $dbname</if>
<if $dbuser>データベース・ユーザー: $dbuser</if>
<if $dbpass>データベース・パス: $dbpass</if>
<if $dbhost>データベース・ホスト: $dbhost</if>

インスタレーションURL : $url
現在のバージョン: $oldversion
最新バージョン : $version
<if $upgrade_error>
以下、アップデート・エラーの詳細です:
エラー : $upgrade_error
</if>
<if $error>
以下、復元エラーの詳細です:
エラー: $error
</if>

 '.APP.'チームによるヘルプをご利用いただけます。何か問題が発生した場合は、(support@'.strtolower(APP).'.com)から'.APP.'チームへご連絡下さい。
Ｅメール配信を停止したい場合は、コントロール・パネル -> '.APP.' ->Ｅメール設定をご参照下さい。';

////////////////////////
// USER UPGRADE - 3
////////////////////////

// When upgraded by user successfully (By user)
$l['mail_userupgrade_success_user_sub'] = ' $scriptname インスタレーションは、正常にアップグレードされました。';
$l['mail_userupgrade_success_user'] = 'あなたの$scriptnameインスタレーションは、最新バージョンに正常にアップグレードされました。
以下、詳細です:
インスタレーションURL : $url
最新バージョン: $version
旧バージョン: $oldversion

Ｅメール配信を停止したい場合は、コントロール・パネル -> '.APP.' ->Ｅメール設定をご参照下さい。';

// If any error occured while upgrading, (By user)
$l['mail_userupgrade_fail_user_sub'] = 'あなたの$scriptnameインスタレーションのアップグレードは失敗しました。 ';
$l['mail_userupgrade_fail_user'] = ' あなたの$scriptnameインスタレーションのアップグレードは失敗しました。以下、詳細です:
インスタレーションURL : $url
現在のバージョン: $oldversion
最新バージョン: $version
エラー : $upgrade_error

Ｅメール配信を停止したい場合は、コントロール・パネル -> '.APP.' ->Ｅメール設定をご参照下さい。';

// If UPGRADE and RESTORE failed while upgrading, (By user)
$l['mail_userupgrade_restore_fail_user_sub'] = 'あなたの$scriptname インスタレーションのアップグレードは失敗しました。';
$l['mail_userupgrade_restore_fail_user'] = 'あなたの$scriptname インスタレーションのアップグレードは失敗しました。
 アップグレード前にバックアップが作成されましたが、復元のプロセスは失敗しました。

手動による復元が要求されています。手動復元のガイドをご利用いただけます:
http://www.softaculous.com/docs/Manual_Restore

いか、詳細です:
インスタレーションURL : $url
現在のバージョン: $oldversion
最新バージョン: $version
<if $upgrade_error>
以下、アップグレード・エラーの詳細です:
エラー : $upgrade_error
</if>
<if $error>
以下、復元エラーの詳細です:
エラー: $error
</if>

 '.APP.'チームによるヘルプをご利用いただけます。何か問題が発生した場合は、(support@'.strtolower(APP).'.com)から'.APP.'チームへご連絡下さい。
Ｅメール配信を停止したい場合は、コントロール・パネル -> '.APP.' ->Ｅメール設定をご参照下さい。';

////////////////////////
// AUTO UPGRADE - 3
////////////////////////

// When AUTOUPGRADED successfully
$l['mail_autoupgrade_success_user_sub'] = ' $scriptname インスタレーションは、正常に自動アップグレードされました。';
$l['mail_autoupgrade_success_user'] = 'あなたの$scriptnameインスタレーションは、最新バージョンに正常に自動アップグレードされました。
以下、詳細です:
インスタレーションURL : $url
最新バージョン : $version
旧バージョン : $oldversion

Ｅメール配信を停止したい場合は、コントロール・パネル -> '.APP.' ->Ｅメール設定をご参照下さい。';

// When AUTOUPGRADE FAILED
$l['mail_autoupgrade_fail_user_sub'] = 'あなたの$scriptname インスタレーションの自動アップグレードは失敗しました。';
$l['mail_autoupgrade_fail_user'] = ' あなたの$scriptname インスタレーションの自動アップグレードは失敗しました。
以下、詳細です:
インスタレーションURL : $url
現在のバージョン: $oldversion
最新バージョン: $version
エラー: $upgrade_error

Ｅメール配信を停止したい場合は、コントロール・パネル -> '.APP.' ->Ｅメール設定をご参照下さい。';

// If UPGRADE and RESTORE failed while AUTOUPGRADING
$l['mail_autoupgrade_restore_fail_user_sub'] = 'あなたの$scriptname インスタレーションの自動アップグレードは失敗しました。';
$l['mail_autoupgrade_restore_fail_user'] = ' あなたの$scriptname インスタレーションの自動アップグレードは失敗しました。 アップグレード前にバックアップが作成されましたが、復元のプロセスは失敗しました。

手動による復元が要求されています。手動復元のガイドをご利用いただけます:
http://www.softaculous.com/docs/Manual_Restore

以下、詳細です:
インスタレーション URL : $url
現在のバージョン : $oldversion
最新バージョン: $version
<if $upgrade_error>
以下、アップグレード・エラーの詳細です:
エラー: $upgrade_error
</if>
<if $error>
以下、復元エラーの詳細です:
エラー : $error
</if>

 '.APP.'チームによるヘルプをご利用いただけます。何か問題が発生した場合は、(support@'.strtolower(APP).'.com)から'.APP.'チームへご連絡下さい。
Ｅメール配信を停止したい場合は、コントロール・パネル -> '.APP.' ->Ｅメール設定をご参照下さい。';

////////////////////////
// PRE UPGRADE CHECK 
////////////////////////

// If pre upgradation check fails while AUTOUPGRADE (FOR USER)
$l['mail_autoupgrade_precheck_fail_sub'] = '事前のアップグレード・チェックは失敗しました。';
$l['mail_autoupgrade_precheck_fail'] = '下記インスタレーションの自動アップグレード・プロセスは、アップグレード要求に合致しなかったため、完了することができませんでした :
インスタレーションURL : $url
現在のバージョン: $oldversion
最新バージョン : $version
<if $upgrade_error>
エラー: $upgrade_error
</if>
<if $error>
エラー : $error
</if>

Ｅメール配信を停止したい場合は、コントロール・パネル -> '.APP.' ->Ｅメール設定をご参照下さい。';

/////////////////////////////////
// Backup Failed CLI UPGRADE
/////////////////////////////////

// If a backup fails before AUTO UPGRADING an installation (FOR USER)
$l['mail_autoupgrade_backup_fail_sub'] = '	 $scriptname インスタレーションの自動アップグレード前に、バックアップ・プロセスが失敗しました。';
$l['mail_autoupgrade_backup_fail'] = '$scriptnameインスタレーションのバックアップが失敗したため、アップグレード・プロセスは中止されました。
以下、詳細です :
インスタレーションURL : $url
現在のバージョン: $oldversion
最新バージョン: $version
エラー : $error

Ｅメール配信を停止したい場合は、コントロール・パネル -> '.APP.' ->Ｅメール設定をご参照下さい。';

$l['err_openconfig'] = '設定ファイルを開くことができませんでした。';
$l['err_writeconfig'] = '設定ファイルをか書き込むことができませんでした。';

$l['classes_con_failed'] = 'エラー : サーバーへの接続に失敗しました。';
$l['cl_ratings'] = '評価';
$l['cl_author'] = '作者';
$l['cl_license'] = 'ライセンス';
$l['cl_version'] = 'バージョン';
$l['cl_show_files'] = 'ファイルの閲覧';
$l['cl_install_but'] = 'インストール';
$l['expand_view'] = '全景で見るにはここをクリックして下さい。';
$l['collapse_view'] = '埋込式で見るにはここをクリックして下さい。';

$l['email_off_notice'] = '</b><b>注:通知メールが無効となっているため、いかなるＥメールも受信しません。</b>';

// Add User Language Strings
$l['mail_add_user_sub'] = ' Softaculous リモート・インストーラーへようこそ';
$l['mail_add_user'] = '正常にSoftaculous リモート・インストーラーへログインできます。
以下、詳細です :
ユーザー 					: $username
API キー 				: $api_key
API パスワード			: $api_pass
許可されたユーザー番号: $number_of_users';

// Requirement parser languages
$l['req_ver_nf'] = 'Required &soft-1; version &soft-2; &soft-3; AND found version is : ';
$l['req_ext_nf'] = '要求された&soft-1;拡張子が発見されません。:';
$l['req_func_nf'] = '要求された&soft-1;機能が発見されません。';
$l['req_ext_ver'] = 'Required &soft-1; &soft-2; extension version &soft-3; &soft-4; BUT found &soft-5;';
$l['gt'] = 'greater than';
$l['lt'] = 'less than';
$l['ge'] = '以上';
$l['le'] = '以下';
$l['eq'] = 'is';
$l['ne'] = 'should not be equal to';

// Automated Backup Language Strings
$l['mail_auto_backup_sub'] = 'あなたの$scriptname インスタレーションの自動バックアップ';
$l['mail_auto_backup'] = 'あなたの$scriptname インスタレーションの自動バックアップは、正常に完了しました。.
以下、詳細です:
インスタレーション ・パス: $path
インスタレーション URL : $url
バックアップ・パス: $backup_file
<if $backup_location>Backup Location : $backup_location</if>
'.APP.'内のバックアップ・セクションから、バックアップをダウンロードすることができます。

Ｅメール配信を停止したい場合は、コントロール・パネル -> '.APP.' ->Ｅメール設定をご参照下さい。';

$l['mail_auto_backup_fail_sub'] = '失敗:あなたの$scriptname インスタレーションの自動バックアップ';
$l['mail_auto_backup_fail'] = 'あなたの$scriptnameインスタレーションの自動バックアップは、正常に完了しませんでした。
以下、詳細です:
インスタレーション・パス : $path
インスタレーション URL : $url
バックアップ・パス : $backup_file
<if $backup_location>Backup Location : $backup_location</if>
occurred次のエラーが発生しました :
$error

Ｅメール配信を停止したい場合は、コントロール・パネル -> '.APP.' ->Ｅメール設定をご参照下さい。';

// Email for sending the list of scripts which does not meet the requirements.
$l['mail_script_requirement_sub'] = 'スクリプトの要求はログに失敗しました。';
$l['mail_script_requirement'] = '以下のスクリプトのリストは、あなたのサーバーの最低必要条件に合致しないため、動作しません。
以下、詳細です:

$failed_req

注：あなたがPHPのバージョンをランタイム時に変更する場合（例：CageFS, hive, .htaccess の使用など）は、上記PHPバージョンの警告は無視して下さい。';

// Softpanel Language Strings
$l['no_www_domain'] = 'ログアウトボタンをクリックして、全ての'.APP.'ページを閉じ、コントロール・パネルからログアウトして下さい。
その後再度ログインしていただき、'.APP.'をご使用いただけます。';


// month strings
$l['January'] = '1月';
$l['February'] = '2月';
$l['March'] = '3月';
$l['April'] = '4月';
$l['May'] = '5月';
$l['June'] = '6月';
$l['July'] = '7月';
$l['August'] = '8月';
$l['September'] = '9月';
$l['October'] = '10月';
$l['November'] = '11月';
$l['December'] = '12月';

// Mail templates for webuzo backup
$l['mail_webuzo_backup_sub'] = '$type backup completed successfully';
$l['mail_webuzo_backup'] = 'The backup process was completed successfully.
Backup file is created with the file name:
$filename

Regards,
Webuzo Team';
$l['mail_webuzo_backup_fail_sub'] = '$type backup failed';
$l['mail_webuzo_backup_fail'] = 'The backup process did not complete successfully.
The following error(s) occured:
$error

Regards,
Webuzo Team';
$l['mail_webuzo_restore_sub'] = '$type restore completed successfully';
$l['mail_webuzo_restore'] = 'The restoration was completed successfully.

The file restored was:
$filename

Regards,
Webuzo Team';
$l['mail_webuzo_restore_fail_sub'] = '$type restore failed';
$l['mail_webuzo_restore_fail'] = 'The restore process encountered errors and would not be completed.
The following error(s) occured:
$error

Regards,
Webuzo Team';

// Staging Template Vaiable
$l['mail_staging_sub'] = 'Staging of $scriptname';
$l['mail_staging'] = 'Your Staging of $scriptname $version has been completed successfully.

Your live installation details :
Original Path : $live_path
Original URL : $live_url

Your staging installation details :
Path : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>Data Directory : $datadirectory</if>
<if $dbname>MySQL Database : $dbname</if>
<if $dbuser>MySQL DB User : $dbuser</if>
<if $dbhost>MySQL DB Host : $dbhost</if>
<if $dbpass>MySQL DB Password : $dbpass</if>
<if $cron>Cron Job : $cron</if>
<if $time>Time of Installation : $time</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings';

// Pushtolive Template Vaiable
$l['mail_pushtolive_sub'] = 'Pushing $scriptname to live';
$l['mail_pushtolive'] = 'Pushing your $scriptname site $version to live has been completed successfully.

Your live installation details :
Original Path : $live_path
Original URL : $live_url

Your staging installation details :
Path : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>Data Directory : $datadirectory</if>
<if $dbname>MySQL Database : $dbname</if>
<if $dbuser>MySQL DB User : $dbuser</if>
<if $dbhost>MySQL DB Host : $dbhost</if>
<if $dbpass>MySQL DB Password : $dbpass</if>
<if $cron>Cron Job : $cron</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings';

/////////////////////////////////
// Backup Failed CLI UPGRADE of Plugins/Themes
/////////////////////////////////

// If a backup fails before AUTO UPGRADING Plugins/Themes of an installation (FOR USER)
$l['mail_autoupgrade_extras_backup_fail_sub'] = 'Backup process failed before auto upgrading plugins/theme of your $scriptname installation';
$l['mail_autoupgrade_extras_backup_fail'] = 'The backup process of plugins/theme of your $scriptname installation has failed. So the auto upgrade plugins/theme process was not performed.
The details are as follows :
Installation URL : $url
Error : $error

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

/////////////////////////////////
// Upgrade Plugins/Themes By USER
/////////////////////////////////

// Plugins/Theme when upgraded by user successfully (By user)
$l['mail_userupgrade_extras_success_user_sub'] = 'Plugins/Theme of $scriptname installation upgraded successfully';
$l['mail_userupgrade_extras_success_user'] = 'Plugins/Theme of your $scriptname installation have been successfully upgraded to the latest version.
The details are as follows :
Installation URL : $url

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// If UPGRADE and RESTORE Plugins/Theme failed while upgrading, (By user)
$l['mail_userupgrade_extras_restore_fail_user_sub'] = 'Upgrade of Plugins/Theme of your $scriptname installation failed';
$l['mail_userupgrade_extras_restore_fail_user'] = 'The upgrade of plugins/theme of your $scriptname installation has failed.
A backup had been created before upgrading, but the restore process also failed !

It will require a manual restore. Guide for the manual restore is available here :
http://www.softaculous.com/docs/Manual_Restore

The details are as follows :
Installation URL : $url
<if $upgrade_error>
The Upgrade error details are as follows :
Error : $upgrade_error
</if>
<if $error>
The Restore error details are as follows :
Error : $error
</if>

The '.APP.' team is available for help as well. You can contact the '.APP.' Team (support@'.strtolower(APP).'.com) if you face any problems.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// If any error occured while upgrading plugins/theme, (By user)
$l['mail_userupgrade_extras_fail_user_sub'] = 'Upgrade of plugins/theme of your $scriptname installation failed';
$l['mail_userupgrade_extras_fail_user'] = 'The upgrade of plugins/theme of your $scriptname installation has failed.
The details are as follows :
Installation URL : $url
Error : $upgrade_error

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

/////////////////////////////////
// Auto Upgrade Plugins/Themes
/////////////////////////////////

// When AUTOUPGRADED Plugins/Theme successfully
$l['mail_autoupgrade_extras_success_user_sub'] = 'Plugins/Theme of $scriptname Installation Auto Upgraded Successfully';
$l['mail_autoupgrade_extras_success_user'] = 'Plugins/Theme of your $scriptname installation have been successfully auto upgraded to the latest version.
The details are as follows :
Installation URL : $url
<if $plugins_updated>
Following Active Plugins were upgraded :
$plugins_updated
</if>
<if $theme_updated>
Following Active Theme was upgraded :
$theme_updated
</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// If UPGRADE and RESTORE of Plugins/Theme failed while AUTOUPGRADING
$l['mail_autoupgrade_extras_restore_fail_user_sub'] = 'Auto Upgrade of plugins/theme of your $scriptname installation failed';
$l['mail_autoupgrade_extras_restore_fail_user'] = 'The auto upgrade  of plugins/theme of your $scriptname installation has failed.
A backup had been created before upgrading, but the restore process also failed !

It will require a manual restore. Guide for the manual restore is available here :
http://www.softaculous.com/docs/Manual_Restore

The details are as follows :
Installation URL : $url
<if $upgrade_error>
The Upgrade error details are as follows :
Error : $upgrade_error
</if>
<if $error>
The Restore error details are as follows :
Error : $error
</if>

The '.APP.' team is available for help as well. You can contact the '.APP.' Team (support@'.strtolower(APP).'.com) if you face any problems.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// When AUTOUPGRADE Plugins/Theme FAILED
$l['mail_autoupgrade_extras_fail_user_sub'] = 'Auto Upgrade of plugins/theme of your $scriptname installation failed';
$l['mail_autoupgrade_extras_fail_user'] = 'The auto upgrade of plugins/theme of your $scriptname installation has failed.
The details are as follows :
Installation URL : $url
Error : $upgrade_error

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// clone fail Language Strings
$l['mail_clone_fail_sub'] = 'Failed : Clone of your $scriptname installation';
$l['mail_clone_fail'] = 'The clone of your $scriptname installation did not complete successfully.
The details are as follows :
Installation Path : $path
Installation URL : $url

The following error occured :
$error

Please try to import the installation again after some time.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// clone fail Language Strings
$l['mail_staging_fail_sub'] = 'Failed : Staging of your $scriptname installation';
$l['mail_staging_fail'] = 'The staging of your $scriptname installation did not complete successfully.
The details are as follows :
Installation Path : $path
Installation URL : $url

The following error occured :
$error

Please try to import the installation again after some time.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

$l['mail_upgrade_fail_sub'] = 'Failed : Upgrade of your $scriptname installation';
$l['mail_upgrade_fail'] = 'The upgrade of your $scriptname installation did not complete successfully.
The details are as follows :
Installation Path : $path
Installation URL : $url

The following error occured :
$error

Please try to upgrade again after some time.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

$l['invalid_resp'] = 'Invalid response received ';

