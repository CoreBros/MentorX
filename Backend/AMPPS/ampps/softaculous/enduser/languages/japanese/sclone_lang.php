<?php

//////////////////////////////////////////////////////////////
//===========================================================
// sclone_lang.php
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

$l['no_ins'] = 'インスタレーションは送信されていません。';
$l['wrong_ins_title'] = 'インスタレーションIDが間違っています。';
$l['wrong_ins'] = 'あなたが送信したインスタレーションIDは存在しません。';
$l['no_info_file'] = ' INFO.XMLファイルは発見されませんでした。サーバー管理者へ報告して下さい。';
$l['incompatible'] = 'ソフトウェアは、'.APP.'のより高いバージョンを要求しています。サーバー管理者へ報告して下さい。';
$l['no_install'] = ' INSTALL.XMLファイルは発見されませんでした。サーバー管理者へ報告して下さい。';
$l['no_functions'] = 'CLONE FUNCTIONS ファイルは発見されませんでした。';
$l['no_clone'] = '複製はありません。';
$l['no_softdomain'] = 'ソフトウェアインストール用のドメインを選択していません。';
$l['wrong_softdomain'] = 'あなたが選択したドメインのパスは発見されませんでした。';
$l['softdirectory_exists'] = 'あなたが入力したディレクトリは既に存在しています。別のディレクトリ名を入力して下さい。';
$l['no_space'] = 'このソフトウェアをインストールするのに十分な空き容量がありません。';
$l['no_softdb'] = 'データベースが提示されていません。';
$l['database_exists'] = 'そのデータベースは既に存在しています。別のデータベース名を選択していません。して下さい。';
$l['databaseuser_exists'] = 'そのデータベースユーザーは既に存在しています。別のデータベース名を選択して下さい。';
$l['db_name_long'] = 'データベース名は7文字を超えることができません。7文字以内のデータベース名を選択して下さい。';
$l['db_limit_crossed'] = '作成可能なデータベース数の上限に達したため、インストールを開始できません。';
$l['cloning'] = 'インスタレーションの複製';
$l['downloading'] = 'パッケージのダウンロード';
$l['cant_clone_db'] = 'データベースを複製できませんでした。';
$l['fail_create'] = 'ディレクトリの作成に失敗しました。';
$l['fail_create_datadir'] = 'データ・ディレクトリの作成に失敗しました。';
$l['cant_clone_dir'] = 'ホームディレクトリのため、そのディレクトリは複製できません。';
$l['cant_connect_mysql'] = 'データベースへ接続できませんでした。あなたのデータベースのユーザー名／パスワードを確認して下さい。変更している場合、詳細編集により、Softaculousインスタレーション内の詳細をアップデートして下さい。';
$l['same_ins'] = '同じ場合にインスタレーションを複製することはできません。';
$l['ins_exists'] = '選択した場所には、既に<b>&soft-1;</b>をインストールしているようです。';
$l['ins_recursive'] = 'オリジナルインスタレーションのサブディレクトリ内に、インスタレーションを複製することはできません。';
$l['no_clone_support'] = 'Clone is not supported for this script';
$l['invalid_script'] = 'Invalid Script ID';
$l['no_domain_found'] = 'No domain found. Please add a domain to install the script';

$l['no_cron_min'] = 'cronの分値が指定されていません。';
$l['no_cron_hour'] = 'cronの時間値が指定されていません。';
$l['no_cron_day'] = 'cronの日付値が指定されていません。';
$l['no_cron_month'] = 'cronの月値が指定されていません。';
$l['no_cron_weekday'] = 'cronの平日値が指定されていません。';
$l['wrong_cron_min'] = 'cronの分値が間違っています。有効な値は0-59または<b>*</b>です。';
$l['wrong_cron_hour'] = 'cronの時間値が間違っています。有効な値は0-23または<b>*</b>です。';
$l['wrong_cron_day'] = 'cronの日付値が間違っています。有効な値は1-31または<b>*</b>です。';
$l['wrong_cron_month'] = 'cronの月値が間違っています。有効な値は1-12または<b>*</b>です。';
$l['wrong_cron_weekday'] = 'cronの平日値が間違っています。有効な値は0-7または<b>*</b>です。';
$l['no_datadir'] = 'データ・ディレクトリが指定されていません。';
$l['datadir_exists'] = 'あなたが送信したデータ・ディレクトリは存在しています。別のデータ・ディレクトリを指定して下さい。';
$l['no_decompress_data'] = ' DATAファイルの展開中にエラーが発生しました。';
$l['some_files_exist'] = '対象のフォルダ内に、下記のファイルが存在しているため、インスタレーションを開始することができません。ファイル: ';
$l['delete_files'] = 'これらファイルを削除するか、別のフォルダを選択して下さい。';
$l['overwrite_exist'] = ' <b>もしくは</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">チェックボックスを選択し、ファイルを上書きして続行して下さい。</span></b>';
$l['prog_cloning'] = '複製 '; // Dont remove trailing space
$l['prog_cloning_complete'] = '複製完了';
$l['checking_data'] = '送信データの確認';
$l['unzipping_files'] = 'ファイルとフォルダのコピー';
$l['unzipping_datadir'] = 'データファイルの解凍';
$l['prop_db'] = 'データベースの伝搬';
$l['finishing_process'] = '複製終了';
$l['wait_note'] = '<b>注:</b>この作業には3〜4分程掛かります。プログレスバーが100％に達するまで、このページから離れないで下さい。';
$l['no_hostname'] = 'あなたのデータベース・ホスト名を入力して下さい。';
$l['no_dbusername'] = 'あなたのデータベース・ユーザー名を入力して下さい。';
$l['no_dbuserpass'] = 'あなたのデータベース・パスワードを入力して下さい。';
$l['softdirectory_invalid'] = 'あなたが入力したディレクトリは無効です。';
$l['softdatadir_invalid'] = 'あなたが入力したデータ・ディレクトリは無効です。';
$l['err_domain'] = 'ドメインがありません。';
$l['err_domain_admin'] = 'このユーザーはドメインを持っていません。管理者へ連絡して下さい。';
$l['no_https'] = '信頼できるSSL認証は発見されませんでした。';
$l['no_php_install'] = ' PHP はインストールされていません。インストールするには、<a href="'.$globals['index'].'act=apps&app=1">here</a>をクリックして下さい。';
$l['no_mysql_install'] = 'MySQLはインストールされていません。インストールするには、<a href="'.$globals['index'].'act=apps&app=16">here</a>をクリックして下さい。';
$l['no_field'] = ' <b>&soft-1;</b>欄への入力が必要です。';
$l['error_adddb'] = 'データベースを作成できませんでした。';
$l['error_adduser'] = '新規データベースへのユーザー追加中にエラーが発生しました。';
$l['no_package'] = 'インスタレーションパッケージは発見されませんでした。';
$l['no_decompress'] = 'パッケージファイルの展開中にエラーが発生しました。';

//Theme Strings
$l['<title>'] = APP.' - インスタレーションの複製';
$l['info'] = 'インフォメーション';
$l['ins_softname'] = 'ソフトウェア';
$l['ins_num'] = 'インストール番号';
$l['ins_ver'] = 'バージョン';
$l['ins_time'] = 'インストール時間';
$l['ins_path'] = 'パス';
$l['ins_url'] = 'URL';
$l['ins_admin_url'] = '管理者URL';
$l['ins_db'] = 'データベース名';
$l['ins_dbuser'] = 'データベース・ユーザー';
$l['ins_dbpass'] = 'データベース・サーバーパスワード';
$l['ins_dbhost'] = 'データベース・ホスト';
$l['ins_datadir'] = 'データ・ディレクトリ';
$l['ins_wwwdir'] = 'ウェブ・ディレクトリ';
$l['ins_wwwurl'] = 'ウェブ・ディレクトリURL';
$l['ins_cron_command'] = 'cronコマンド';
$l['cloned'] = 'インフォメーションは正常に複製されました。';
$l['clone_ins'] = 'インフォメーションの複製詳細';
$l['cloneins'] = 'インフォメーションの複製';
$l['choose_protocol'] = 'プロトコルの選択';
$l['choose_protocol_exp'] = 'あなたのサイトがSSLを使用している場合は、HTTPSプロトコルを選択して下さい。';
$l['cron_job'] = 'cronのジョブ';
$l['cron_job_exp'] = 'このスクリプトは、cronの実行を要求しています。cronのタイミングを指定して下さい。変更しない場合は、現状のままとして下さい。';
$l['cron_min'] = '分';
$l['cron_hour'] = '時';
$l['cron_day'] = '日';
$l['cron_month'] = '月';
$l['cron_weekday'] = '平日';
$l['datadir'] = 'データ・ディレクトリ';
$l['datadir_exp'] = 'このスクリプトは、ウェブからアクセスできないフォルダへの、データの保存を要求しています。<b>データ・ディレクトリ</b> を指定した場合、あなたのホームフォルダに- /home/username/<b>datadir</b>が作成されます。';
$l['db_name_long'] = 'データベース名は7文字を超えることができません。7文字以下のデータベース名を選択して下さい。';
$l['db_alpha_num'] = 'データベース名は英数字のみ有効です。.';
$l['overwrite'] = 'ファイルの上書き';
$l['database_exists'] = 'そのデータベースは既に存在しています。別の名前を選択して下さい。';
$l['no_softdomain'] = 'ソフトウェアインストール用のドメインを選択していません。';
$l['wrong_softdomain'] = 'あなたが選択したドメインを発見できませんでした。';
$l['no_space'] = 'このソフトウェアをインストールするのに、十分な空き容量がありません。';
$l['no_softdb'] = 'データベースが提示されていません。';
$l['choose_domain'] = 'ドメインの選択';
$l['choose_domain_exp'] = 'ソフトウェアインストール用のドメインを選択して下さい。';
$l['in_directory'] = 'ディレクトリ';
$l['in_directory_exp'] = 'ディレクトリはあなたのドメインに関連しており、存在していません（http://mydomain/dir/でインストールするには <strong>dir</strong>と入力して下さい。 http://mydomain/でインストールするには空欄のままとして下さい）。';
$l['database_name'] = 'データベース名';
$l['database_name_exp'] = 'インスタレーション用に作成されたデータベース名を入力して下さい。';
$l['softcopy_note'] = ' <b>注</b>: このソフトウェアは、専用のインスタレーションユーティリティを使用してのインストールを要求しています。インストールを完了させるためには、ファイルをコピーした際に表示されURLをご参照下さい。';
$l['softsubmit'] = '複製';
$l['congrats'] = 'インスタレーションは正常に複製されました。';
$l['succesful'] = 'は、正常に複製されました。複製場所：';
$l['admin_url'] = '管理者URL';
$l['setup_continue'] = 'セットアップはソフトウェアによって完了されます。セットアップ完了のため、下記URLをご参照下さい：';
$l['enjoy'] = 'We hope the installation process was easy.';
$l['install_notes'] = '下記は重要事項を含んでおります。一読されることをお勧めします。';
$l['please_note'] = '<b>注</b>: '.APP.'は自動ソフトウェアインストーラーであり、ソフトウェアパッケージのいかなるサポートも提供しておりません。サポートを受けるためには、ソフトウェア販売元のウェブサイトをご参照下さい。 ';
$l['regards'] = 'Regards';
$l['softinstaller'] = APP.'自動インストーラー';
$l['return'] = '概要へ戻る';

// These strings are for Softaculous Remote
$l['hostname'] = 'データベース・ホスト名';
$l['hostname_exp'] = ' MySQLホスト名 (主に<b>ローカルホスト</b>)';
$l['dbusername'] = 'データベース・ユーザー名';
$l['dbusername_exp'] = 'MySQLユーザー名';
$l['dbuserpass'] = 'データベースパスワード';
$l['dbuserpass_exp'] = ' MySQL ユーザーのパスワード';
$l['database_name_exp_aefer'] = 'インスタレーション用に使用されるデータベース名を入力して下さい。';

$l['clone_tweet_sub'] = 'Tell your friends';
$l['not_in_free'] = '<b>&soft-1;</b> cannot be cloned in the Free version of '.APP.'!';
$l['notify_admin'] = 'Please notify your Server Admin to purchase the premium version of '.APP.'!';

$l['soft_ins_exists'] = 'An installation already exists at &soft-1; as per our records. To clone the application at this location please uninstall the existing installation!';

$l['no_sclone'] = 'The CLONE.XML file could not be found! Please report this to the server administrator.';
$l['no_functions'] = 'The CLONE FUNCTIONS file could not be found! Please report this to the server administrator.';

$l['clone_push_bg'] = 'Clone has been pushed in background';
$l['err_mysql_db'] = 'The MySQL database name is incorrect as the database could not be selected.';

$l['error_max_clone_script'] = 'You have reached the maximum number of (<b>&soft-1;</b>) Clone allowed per script';

$l['choose_url'] = 'Choose Installation URL';
$l['choose_url_exp'] = 'Please choose the URL to install the software';

$l['ampps_notify_premium'] = 'This feature is available in the premium version of AMPPS. Please purchase <b><a href="https://ampps.com/clients">AMPPS Premium</a></b>';