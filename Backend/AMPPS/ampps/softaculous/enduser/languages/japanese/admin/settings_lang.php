<?php

//////////////////////////////////////////////////////////////
//===========================================================
// settings_lang.php
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

$l['no_path'] = 'パスがありません。';
$l['wrong_path'] = '指定されたパスでuniversal.phpを検索できませんでした。 ';
$l['no_softscripts'] = 'スクリプト/ソフトウェアのパスの位置が指定されていません。';
$l['wrong_softscripts'] = 'スクリプト/ソフトウェアのパスが間違っています。';
$l['no_sn'] = 'サイト名が指定されていません。';
$l['no_cookie_name'] = 'クッキーの名称が指定されていません。';
$l['no_soft_email'] = 'Ｅメールアドレスが指定されていません。';
$l['wrong_soft_email'] = 'あなたが指定した管理者用Ｅメールアドレスは無効です。';
$l['wrong_from_email'] = 'あなたが送信したFrom Ｅメールアドレスは無効にです。 ';
$l['no_license'] = 'ライセンスキーが送信されていません。';
$l['no_lang'] = '言語が指定されていません。';
$l['wrong_lang'] = '指定された言語は無効です。';
$l['no_theme_folder'] = 'テーマが選択されていません。';
$l['wrong_theme_folder'] = '選択されたテーマは無効です。';
$l['no_timezone'] = '時間帯が選択されていません。';
$l['wrong_timezone'] = '選択された時間帯は無効です。';
$l['no_cron_time'] = ' cron job が指定されていません。';
$l['no_off_message'] = '無効にするサブジェクトが指定されていません。';
$l['no_off_subject'] = '無効にするメッセージが指定されていません。';
$l['saving_error'] = '設定の保存中にエラーが発生しました。';
$l['no_update'] = 'アップデートの実行が送信されていません。';
$l['invalid_update'] = '無効なアップデートの実行が送信されました。';
$l['no_protocol'] = 'プロトコルが選択されていません。';
$l['wrong_protocol'] = '選択されたプロトコルは無効です。';
$l['wrong_network_interface'] = '選択したネットワークインターフェイスは無効です。';
$l['pass_strength_error'] = 'パスワード強度は0から100までの整数のみです。';
$l['err_binary_path'] = '指定されたパスではバイナリが存在しません。確認の上もう一度やり直して下さい。';
$l['err_invalid_soa'] = 'Invalid SOA!!!Please enter a valid positive number';

//Theme Strings 
$l['<title>'] = APP.' ? セッティング・センター';
$l['settings_saved'] = '設定は正常に保存されました。';
$l['pathhead'] = 'ソフトウェアのパス';
$l['softpath'] = APP.' パス';
$l['softpath_exp'] = 'スクリプトが存在しないファイルへのパスです。';
$l['softscripts'] = 'スクリプトのパス';
$l['softscripts_exp'] = '全てのソフトウェア/スクリプトが存在するパスです';
$l['gen_set'] = '一般設定';
$l['sitename'] = 'サイト名';
$l['sitename_exp'] = ' '.APP.'を使用するサーバーまたは企業名です。'.APP.' インストーラーのあらゆるページで表示されます。';
$l['cook_name'] = 'クッキーの名称';
$l['cook_name_exp'] = 'ブラウザに保存されるクッキーの名称です。';
$l['comp_output'] = '圧縮出力';
$l['comp_output_exp'] = '大容量を圧縮して出力し保存します。';
$l['soft_email'] = '管理者用Ｅメールアドレス';
$l['soft_email_exp'] = ' CRON 作業用やその他管理用のＥメールが送信されるアドレス';
$l['from_email'] = 'FromＥメールアドレス';
$l['from_email_exp'] = ' FROMヘッダー用のアドレス';
$l['license'] = 'ライセンスキー';
$l['license_exp'] = ' '.APP.'により発行された有効なライセンスキーを入力して下さい。';
$l['choose_lang'] = '言語の選択';
$l['choose_lang_exp'] = '言語を選択して下さい。';
$l['choose_theme'] = 'テーマの選択';
$l['choose_theme_exp'] = '選択されたテーマが '.APP.'の初期テーマとなります。';
$l['timezone'] = '時間帯';
$l['update_settings'] = '設定のアップデート';
$l['auto_upd_softac'] = ' '.APP.'の自動アップデート';
$l['auto_upd_softac_exp'] = '有効にした場合'.APP.'は自動で最新バージョンへアップデートされます。 <br /> <b>Stable</b>ブランチはテスト版をテストした後に起動されます。<br /> <b>テスト版</b> には最新バージョンと最新機能が搭載されています。';
$l['never_update'] = 'アップデートしない';
$l['stable'] = '変更しない(推奨)';
$l['release_cand'] = 'テスト版 (実験用)';
$l['auto_upd_soft'] = 'スクリプトの自動アップデート';
$l['auto_upd_soft_exp'] = '有効にした場合、スクリプトやソフトウェアが自動的に最新バージョンへアップデートされます。';
$l['auto_add_soft'] = '新規スクリプトの自動追加';
$l['auto_add_soft_exp'] = '有効にした場合、cron jobを持続している期間は新規スクリプトや新規ソフトウェアが自動で追加されます。'; 
$l['email_upd_soft'] = 'アップデート通知';
$l['email_upd_soft_exp'] = ' '.APP.'のアップグレードが可能な場合または自動アップグレードが実施された場合にＥメールが送信されます。';
$l['email_upd_softs'] = 'スクリプトのアップデート通知';
$l['email_upd_softs_exp'] = 'のスクリプトまたはソフトウェアのアップグレードが可能な場合または自動アップグレードが実施された場合にＥメールが送信されます。';
$l['cron_time'] = 'Cron Jobのアップデート';
$l['cron_time_exp'] = '利用可能なアップデートを確認するためのcron jobです。cron jobs について分からない場合は変更しないで下さい。';
$l['disable_soft'] = 'を無効にする'.APP;
$l['soft_off'] = ''.APP.' を無効にする';
$l['soft_off_exp'] = ' '.APP.' を無効にします。ユーザーは使用することができなくなります。';
$l['off_sub'] = 'サブジェクトを無効にする';
$l['off_message'] = ' Messageを無効にする';
$l['edit_settings'] = '設定の編集';
$l['chmod_files'] = 'CHMOD ファイル';
$l['chmod_files_exp'] = ''.APP.'があなたがインストールしたsuPHPを検出できない場合にご利用下さい。不明な場合は空欄のままとして下さい。';
$l['chmod_dir'] = 'CHMOD ディレクトリ';
$l['chmod_dir_exp'] = ''.APP.'があなたがインストールしたsuPHPを検出できない場合にご利用下さい。不明な場合は空欄のままとして下さい。';
$l['is_vps'] = 'Is VPS';
$l['is_vps_exp'] = 'サーバーがVPSの場合はチェックボックスにチェックを入れて下さい。';
$l['eu_news_off'] = 'エンドユーザーニュースを無効にする';
$l['eu_news_off_exp'] = 'チェックを入れた場合、スクリプトの最新開発情報やアップデート情報などのエンドユーザーニュースが無効になります。';
$l['logo_url'] = 'ロゴURL';
$l['logo_url_exp'] = '空欄の場合'.APP.'ロゴが表示されます。';
$l['php_bin'] = 'PHP バイナリ';
$l['php_bin_exp'] = ' CRON Jobやその他の目的に使用されるバイナリです。空欄の場合、<b>/usr/bin/php</b> が使用されます。 Please note that the <b>PHP binary should be a CLI binary</b>.';
$l['end_user_set'] = 'エンドユーザーパネル設定';
$l['off_sync_link'] = '同期リンクを無効にする';
$l['off_sync_link_exp'] = 'エンドユーザーの同期リンクを無効にします。';
$l['off_panel_link'] = 'コントロール・パネルリンクを無効にする';
$l['off_panel_link_exp'] = 'ドック内のコントロール・パネルリンクを無効にします。';
$l['chmod_conf_file'] = 'CHMOD設定ファイル';
$l['chmod_conf_file_exp'] = 'スクリプトの設定ファイルがこの値にCHMODされます。 初期値は 0644となっています(不明な場合は編集しないで下さい)。';
$l['suphp_detected'] = '検出されたsuPHP';
$l['no_prefill'] = 'ディレクトリ名を事前に入力しない';
$l['no_prefill_exp'] = 'ディレクトリ名を事前に入力しません。';
$l['footer_link'] = 'フッターのリンク';
$l['footer_link_exp'] = 'スクリプトをインストールした際にこのリンクまたはテキストがインスタレーションのフッターに挿入されます。';
$l['eu_email_off'] = 'エンドユーザーへのアップデート通知を無効にする';
$l['eu_email_off_exp'] = 'チェックを入れた場合、アップデート可能な場合でもエンドユーザーへＥメール通知を送信しません。';
$l['random_username'] = 'ユーザーのランダムユーザー名の作成';
$l['random_username_exp'] = 'チェックを入れた場合、インストール中にランダムに管理者用ユーザー名が作成されます。';
$l['random_pass'] = 'ランダムパスワードの作成';
$l['random_pass_exp'] = 'チェックを入れた場合、インストール中にランダムに管理者用パスワードが作成されます。';
$l['off_demo_link'] = 'スクリプトデモを無効にする';
$l['off_demo_link_exp'] = 'エンドユーザー用のデモを無効にします。';
$l['off_rating_link'] = 'スクリプトの評価を無効にする';
$l['off_rating_link_exp'] = 'エンドユーザーの評価を無効にします。';
$l['off_review_link'] = 'スクリプトのレビューを無効にする';
$l['off_review_link_exp'] = 'エンドユーザーのレビューを無効にします。';
$l['off_screenshot_link'] = 'スクリプトのスクリーンショット無効にする';
$l['off_screenshot_link_exp'] = 'スクリプトのスクリーンショット無効にします。';
$l['random_dbprefix'] = 'ランダムにデータベースのプレフィックスを作成する';
$l['random_dbprefix_exp'] = 'チェックを入れた場合、インストール中にランダムにデータベースのプレフィックスが作成されます。';
$l['remote_mysql'] = '遠隔 Mysql ホスト名';
$l['remote_mysql_exp'] = '遠隔でmysqlを使用したい場合、遠隔mysqlホスト名またはIPを指定して下さい。';
$l['perl_scripts'] = 'PERL スクリプトを無効にする';
$l['perl_scripts_exp'] = 'エンドユーザーのPERL スクリプトを無効にします。';
$l['show_top_scripts'] = 'トップスクリプトのグループを表示する';
$l['show_top_scripts_exp'] = 'エンドユーザーがスクリプトのインストールページにアクセスしやすいよう、トップスクリプトのグループを表示します。この機能を無効にするには、この欄を空欄のままにして下さい。';
$l['err_change_app_name'] = 'グループ名の変更中にエラーが発生しました。';
$l['hide_dbprefix'] = 'スクリプトのデータベースプレフィックスを隠す';
$l['hide_dbprefix_exp'] = 'チェックを入れた場合、スクリプトのデータベースプレフィックスは利用できません。';
$l['user_mod_dir'] = 'USER MOD DIRを使用する';
$l['user_mod_dir_exp'] = 'ユーザーは http://IP/~userでスクリプトをインストールすることができます。';
$l['off_email_link'] = 'エンドユーザーへのＥメールを無効にする';
$l['off_email_link_exp'] = 'エンドユーザーへのＥメールリンクおよびインストールや削除時のＥメールを無効にします。';
$l['disable_classes'] = 'PHP のクラスを無効にする';
$l['disable_classes_exp'] = 'エンドユーザーからのPHPクラスを無効にします。';
$l['panel_hf'] = 'cPanel\'s Native UIにSoftaculous を表示する';
$l['panel_hf_exp'] = '有効にした場合Softaculous が cPanel\'s Native UIに表示されます';
$l['disable_backup_restore'] = 'エンドユーザーのバックアップ/復元機能を無効にする';
$l['disable_backup_restore_exp'] = 'エンドユーザーのバックアップ/復元機能を無効にします';
$l['nolabels'] = '全てのスクリプトカテゴリーを無効にする';
$l['nolabels_exp'] = 'チェックを入れた場合エンドユーザーパネルにカテゴリーが表示されません（例： PHP, Javascripts, PERLなどの全てのカテゴリーが無効となります）。';
$l['settings'] = APP.' 設定';
$l['disable_reseller_panel'] = 'リセラーパネルを無効にする';
$l['disable_reseller_panel_exp'] = 'チェックを入れた場合、リセラーはリセラーパネルにアクセスできなくなります。';
$l['choose_protocol'] = 'プロトコルの選択';
$l['choose_protocol_exp'] = 'プロトコルを選択して下さい。このプロトコルがエンドユーザーの初期設定となります。';
$l['network_interface'] = 'ネットワークインターフェイス';
$l['network_interface_exp'] = 'サーバーの公衆ネットワークインターフェイスです。不明な場合は空欄のままにして下さい。';
$l['default_domain_path'] = '初期設定のドメインパス';
$l['default_domain_path_exp'] = 'ドメインの追加中に初期設定のドメインパスを設定することができます。';
$l['empty_username'] = 'ユーザー名を空欄にする';
$l['empty_username_exp'] = 'チェックを入れた場合、管理者用ユーザー名の入力欄が空欄のままとなります。';
$l['empty_pass'] = 'パスワードを空欄にする';
$l['empty_pass_exp'] = 'チェックを入れた場合、パスワードの入力欄が空欄のままとなります。';
$l['show_cscript_in_top'] = 'トップスクリプト内のカスタムスクリプトロゴを表示する';
$l['show_cscript_in_top_exp'] = '有効にした場合、あなたのカスタムスクリプトのロゴがトップスクリプト内に表示されます。';
$l['pass_strength'] = 'パスワード強度の最小値を設定する';
$l['pass_strength_exp'] = '設定した場合、パスワード強度が設定値を超えてなければなりません。';
$l['off_remove_mail'] = 'インスタレーション削除のＥメールを無効にする';
$l['off_remove_mail_exp'] = 'インスタレーションの削除中のエンドユーザーへのＥメールを無効にします。';
$l['off_backup_mail'] = 'インスタレーションバックアップのＥメールを無効にする';
$l['off_backup_mail_exp'] = 'インスタレーションのバックアップ中のエンドユーザーへのＥメールを無効にします。';
$l['off_install_mail'] = '新規インスタレーションのＥメールを無効にする';
$l['off_install_mail_exp'] = 'アプリケーションのインスタレーション中のエンドユーザーへのＥメールを無効にします。';
$l['off_edit_mail'] = 'インスタレーションの編集のＥメールを無効にする';
$l['off_edit_mail_exp'] = 'インスタレーションの詳細が編集された際のエンドユーザーへのＥメールを無効にします。';
$l['off_clone_mail'] = 'インスタレーションの複製のＥメールを無効にする';
$l['off_clone_mail_exp'] = 'インスタレーションが複製された際のエンドユーザーへのＥメールを無効にします。';
$l['off_restore_mail'] = 'Turn off Restore Installation emails';
$l['off_restore_mail_exp'] = 'This will disable the email sent to endusers when an installation is restored.';
$l['admin_prefix'] = '管理者用ユーザー名のプレフィックス';
$l['admin_prefix_exp'] = '選択されたオプションがスクリプトインストールフォームでの管理者用ユーザー名として設定されます。<br/> セパレーターとして認識されるためハイフン\'-\' は使用しないで下さい。';
$l['ap_none'] = 'None';
$l['ap_username'] = 'ユーザー名';
$l['ap_domain'] = 'ドメイン';
$l['ap_admin_defined'] = '定義された管理者';
$l['disable_auto_backup'] = 'エンドユーザーの自動バックアップを無効にする';
$l['disable_auto_backup_exp'] = 'エンドユーザーの自動バックアップオプションを無効にします。';
$l['webuzo_disable_username'] = ' Webuzo ユーザー名の事前入力';
$l['webuzo_disable_username_exp'] = 'ログインページのWebuzo ユーザー名が予め入力されます。';
$l['disable_clone'] = 'エンドユーザーの複製機能を無効にする';
$l['disable_clone_exp'] = 'エンドユーザーのインスタレーション複製機能を無効にします。';
$l['disable_remote_import'] = 'Disable Remote Import feature for endusers';
$l['disable_remote_import_exp'] = 'This will disable the remote import option for endusers';
$l['disable_backup_upgrade'] = 'アップグレード中のバックアップオプションを無効にする';
$l['disable_backup_upgrade_exp'] = 'エンドユーザーのインスタレーションアップグレードページのバックアップオプションを無効にします。';
$l['ephp_bin'] = 'エンドユーザー PHP バイナリ';
$l['ephp_bin_exp'] = 'エンドユーザーのウェブサイトで使用されるPHPバイナリパスを定義します。スクリプトの要求をチェックするために'.APP.'がこのバイナリを使用します。定義しない場合'.APP.'は次の初期バイナリを使用します。';
$l['no_ampps_download'] = 'AMPPS ダウンロードリンクを無効にする';
$l['no_ampps_download_exp'] = ' '.APP.' エンドユーザーパネル内のAMPPS ダウンロードリンクを無効にします。';
$l['no_strong_mysql_pass'] = '強力な MySQL データベース・ユーザーパスワードを作成しない';
$l['no_strong_mysql_pass_exp'] = '特殊文字を使用せずにMySQLデータベース・ユーザーパスワードを作成します。';

$l['remove_options'] = 'エンドユーザーの削除オプション';
$l['remove_dir'] = 'ディレクトリの削除オプションを非表示にする';
$l['remove_dir_exp'] = '選択した場合、インスタレーションが削除された際は必ずインスタレーション・ディレクトリも削除されます。';
$l['remove_db'] = 'データベースおよびデータベース・ユーザーの削除オプションを非表示にする';
$l['remove_db_exp'] = '選択した場合、インスタレーションが削除された際は必ずデータベースおよびデータベース・ユーザーも削除されます。';
$l['remove_datadir'] = 'データディレクトリの削除オプションを非表示にする';
$l['remove_datadir_exp'] = '選択した場合、インスタレーションが削除された際は必ずデータディレクトリも削除されます。';
$l['remove_wwwdir'] = ' WWW ディレクトリの削除オプションを非表示にする';
$l['remove_wwwdir_exp'] = '選択した場合、インスタレーションが削除された際は必ずWWW ディレクトリも削除されます。';

$l['social_media'] = 'ソーシャルメディア設定';
$l['install_tweet_off'] = '新規インスタレーションのツイートを無効にする';
$l['install_tweet_off_exp'] = 'チェックを入れた場合、新規インストール後にツイートのオプションが表示されません。';
$l['install_tweet_msg'] = '新規インスタレーションのツイートメッセージ';
$l['install_tweet_msg_exp'] = '新規インスタレーションのツイートメッセージを設定します。';

$l['upgrade_tweet_off'] = 'アップグレードインスタレーションのツイートを無効にする';
$l['upgrade_tweet_off_exp'] = 'チェックを入れた場合、インスタレーションのアップグレード後にツイートのオプションが表示されません。';
$l['upgrade_tweet_msg'] = 'アップグレードインスタレーションのツイートメッセージ';
$l['upgrade_tweet_msg_exp'] = 'アップグレードインスタレーションのツイートメッセージを設定します。';

$l['clone_tweet_off'] = 'インスタレーション複製のツイートを無効にする';
$l['clone_tweet_off_exp'] = 'チェックを入れた場合、インスタレーションの複製後にツイートオプションが表示されません。';
$l['clone_tweet_msg'] = 'インスタレーション複製のツイートメッセージ';
$l['clone_tweet_msg_exp'] = '複製インスタレーションのツイートメッセージを設定します。';

$l['no_ftp_encrypted'] = ' FTP パスワードを暗号化しない';
$l['no_ftp_encrypted_exp'] = 'データベース内のドメインのFTPパスワードを暗号化せずに保存します。';
$l['pre_download_all'] = '全てのスクリプトのプレ・ダウンロードを有効にする';
$l['pre_download_all_exp'] = '追加された新規スクリプトを含め、全てのスクリプトにおいてプレ・ダウンロードを有効にします。';

$l['tweet_vars_link'] = 'ツイートメッセージの変数リスト';
$l['tweet_vars'] = '[[SCRIPTNAME]] ? 使用するスクリプト名 <br />[[TYPE]] ? 使用するスクリプトタイプ 例: PHP, PERL, etc <br />[[softurl]] ? 使用するインスタレーションのURL <br />[[cat]] ? 使用するスクリプトのカテゴリー 例: Blog, CMS, etc <br />[[ver]] ? 使用するインストールスクリプトのバージョン<br />';

$l['session_timeout'] = 'セッション・タイムアウト';
$l['session_timeout_exp'] = 'Softaculous のセッションは設定された時間内で作動します。 <br /> 初期設定は15分です。';

$l['eu_enable_themes'] = 'エンドユーザーのテーマ・オプションを有効にする';
$l['eu_enable_themes_exp'] = 'チェックを入れた場合、スクリプトのインストール中にテーマの選択およびインストールができるオプションがエンドユーザーに与えられます。';
$l['auto_backup_limit'] = '自動バックアップ・ローテーションの制限';
$l['auto_backup_limit_exp'] = 'エンドユーザーによる自動バックアップ・ローテーションの最大限度を選択して下さい。';
$l['auto_backup_unlimited'] = '無制限';
$l['auto_backup_all'] = 'All';
$l['auto_backup_daily'] = 'Disable Daily Auto backups';
$l['auto_backup_weekly'] = 'Disable Weekly Auto backups';
$l['auto_backup_monthly'] = 'Disable Monthly Auto backups';

$l['off_upgrade_plugins'] = 'Disable auto upgrade plugins for enduser';
$l['off_upgrade_plugins_exp'] = 'If checked then the option to auto upgrade plugins for user\'s installations will be disabled for endusers.';
$l['off_upgrade_themes'] = 'Disable auto upgrade themes for enduser';
$l['off_upgrade_themes_exp'] = 'If checked then the option to auto upgrade themes for user\'s installations will be disabled for endusers.';

$l['pfx_settings'] = 'PopularFX Settings';
$l['eu_enable_themes'] = 'Enable Free Themes';
$l['eu_enable_themes_exp'] = 'If checked then endusers will get an option to select and install free themes while installing scripts like WordPress';
$l['eu_themes_premium'] = 'Enable Premium Themes';
$l['eu_themes_premium_exp'] = 'If checked then endusers will get an option to purchase and install Premium themes for scripts like WordPress.<br /> You can find more info <a href="http://www.softaculous.com/docs/Premium_Themes" target="_blank">Here</a>';

$l['backups_expire'] = 'Delete Backup Frequency';
$l['backups_expire_exp'] = 'If you would like to delete your users\' backups after certain days since backup creation. By default the backups are never deleted.';

$l['default_hf_bg'] = 'Default color for Header Footer';
$l['default_hf_bg_exp'] = 'This will be the default color for Header, Footer and Left Panel';
$l['default_cat_hover'] = 'Default color for Category hover';
$l['default_cat_hover_exp'] = 'This will be the default color when the user hovers over the Categories in Left panel';
$l['default_hf_text'] = 'Default color for text in Header Footer';
$l['default_hf_text_exp'] = 'This will be the default color for text in Header, Footer and Left Panel';
$l['default_scriptname_text'] = 'Default color for script name text in Left panel';
$l['default_scriptname_text_exp'] = 'This will be the default color for script name text in Left Panel';

$l['max_backups'] = 'Maximum backups per user limit';
$l['max_backups_exp'] = 'This will limit the maximum number of backups a user can take';
$l['max_backups_unlimited'] = 'Unlimited';

$l['default_landing'] = 'Default page for Enduser Panel';
$l['default_landing_exp'] = 'This will be the default page for '.APP.' Enduser Panel';
$l['top_scripts'] = 'Top Scripts (Default)';
$l['all_ins'] = 'All Installations';
$l['outdated_ins'] = 'Outdated Installations';

$l['no_add_domain'] = 'Disable Adding domains by Endusers';
$l['no_add_domain_exp'] = 'This will not allow Endusers to add domains';

$l['force_auto_upgrade'] = 'Force Auto Upgrade preference for users\' installations';
$l['force_auto_upgrade_exp'] = 'Chosen auto upgrade preference, will be selected and disabled in the enduser panel. Enduser(s) will <b>not</b> be able to modify it. (Not Applicable for existing installations)';
$l['enable_auto_upgrade'] = 'Prefill Auto Upgrade preference for users\' installations';
$l['enable_auto_upgrade_exp'] = 'Chosen auto upgrade preference, will be selected by default in the enduser panel. Enduser(s) will be able to modify it.';
$l['dont_auto_upgrade'] = 'Do not Auto Upgrade (Default)';
$l['minor_auto_upgrade'] = 'Upgrade to <b>Minor</b> versions only';
$l['major_auto_upgrade'] = 'Upgrade to any latest version available (<b>Major</b> as well as <b>Minor</b>)';

$l['set_backup_dir'] = 'Set Backup Directory';
$l['set_backup_dir_exp'] = 'Choose the path to store enduser(s) installation backups. <br /> This will be absolute path i.e. if you enter /backups then the backups will be created at /backups/USERNAME directory on your server. This directory should exist and should be writable for all users.';

$l['off_customize_theme'] = 'Turn off Customize Theme';
$l['off_customize_exp'] = 'If selected, then Enduser(s) will not be able to access Customise Theme option';

$l['enc_db_pass'] = 'Store Database Password in encrypted format';
$l['enc_db_pass_exp'] = 'If selected, then the Database Password for users\' installations will be stored in encrypted format';

$l['time_format'] = 'Default Time format';
$l['time_format_exp'] = 'Choose the default time format. Default : <b>F j, Y, g:i a</b>';

$l['no_prefill_db'] = 'Don\'t Prefill Database details';
$l['no_prefill_db_exp'] = 'Don\'t prefill the database details by default.';

$l['off_protocol'] = 'Disable Protocol';
$l['off_protocol_exp'] = 'If selected, the protocol will not be displayed to the enduser';

$l['disable_branches'] = 'Disable Scripts Branches';
$l['disable_branches_exp'] = 'If checked, all the branches of a script will be disabled except the parent one';
$l['db_prefix'] = 'Enable DB Prefix';
$l['db_prefix_exp'] = 'If selected, all database and users will be created with a prefix.';

$l['disable_cronupdate_email'] = 'Disable CronJob Email';
$l['disable_cronupdate_email_exp'] = 'If checked, cronjob notifications will not be send to Email Address given';

$l['set_soa_expire_val'] = 'Set SOA Expire Value';
$l['set_soa_expire_val_exp'] = 'Set a numeric SOA expire value for all the domains. Minimum Value : 86400';

$l['nat_config'] = 'NAT Configuration';
$l['nat_config_exp'] = 'Select this option if you are using NAT configuration on your server';

$l['logs_level'] = APP.' Logs Level';
$l['logs_level_exp'] = 'Selected logs level will be used for error/debug logs. <br />Logs level 4 might contain passwords';
$l['off'] = 'Off';
$l['logs_level-4'] = 'Detailed Logs';

$l['backup_set'] = 'Backup Settings';
$l['email_set'] = 'Email Settings';
$l['hide_feature_set'] = 'Disable Features for End users';
$l['auto_upgrade_set'] = 'Auto Upgrade Settings';

$l['no_prefill_pass'] = 'Don\'t Prefill Password fields';
$l['no_prefill_pass_exp'] = 'While editing an installation or a domain the password will not be shown';
$l['enc_user_pass'] = 'Encrypt API Pass';
$l['enc_user_pass_exp'] = 'If selected the API Pass for user(s) will be encrypted and stored';

$l['sync_domains'] = 'Enable Sync Domain(s)';
$l['sync_domains_exp_remote'] = 'This will enable the synchronizing of Domain(s) in '.APP.' records with the domain(s) list passed via $PRE_LOGIN in session.php, click <a href="http://www.softaculous.com/docs/Softaculous_Remote#Sync_Domains" target="_blank">here</a> to for guide';
$l['sync_domains_exp_ent'] = 'This will enable the synchronizing of Domain(s) in '.APP.' records with the domain(s) list passed via $PRE_LOGIN in session.php, click <a href="http://www.softaculous.com/docs/Softaculous_Enterprise_Integration#Sync_Domains" target="_blank">here</a> to for guide';

$l['email_password'] = 'Email password in plain text';
$l['email_password_exp'] = 'If checked, the passwords will be sent in plain-text to the users via email for install, clone, etc.';

$l['disable_sign_on'] = 'Disable Auto Login';
$l['disable_sign_on_exp'] = 'Select this option to disable auto login to script\'s admin panel from '.APP;

$l['demo_logo'] = 'Logo URL For Scripts Demo';
$l['demo_logo_exp'] = 'If empty the '.APP.' logo will be shown, recommended dimension for the logo Width:150, Height:45';

$l['email_update_apps'] = 'Notify Application Updates';
$l['email_update_apps_exp'] = 'If enabled, emails will be sent when updates for installed Application(s) are available';

$l['demo_logo_url'] = 'Custom link for Scripts Demo Logo';
$l['demo_logo_url_exp'] = 'If empty the '.APP.' url will be used';

$l['favicon_logo'] = 'Favicon logo URL';
$l['favicon_logo_exp'] = 'If empty the '.APP.' favicon will be shown in Enduser Panel';

$l['rebranding_settings'] = 'Rebranding Settings';

$l['use_eu_username'] = 'Prefill Control Panel Username as Admin Username';
$l['use_eu_username_exp'] = 'If set, the script installation\'s Admin Username on the script install form will be prefilled as Control Panel Username';
$l['use_eu_email'] = 'Prefill Enduser Email as Admin Email';
$l['use_eu_email_exp'] = 'If set, the script installation\'s Admin Email on the script install form will be prefilled as the Email set in Enduser Email Settings';

$l['dbpass_len'] = 'Length for random generated MySQL database user password';
$l['dbpass_len_exp'] = 'Choose the length of random generated database user password. If left blank '.APP.' will use default: 10';
$l['off_available_space'] = 'Don\'t display available space';
$l['off_available_space_exp'] = 'If checked, Available Space will not be displayed on the script\'s Overview page';
$l['disable_import'] = 'Disable Import feature for endusers';
$l['disable_import_exp'] = 'This will disable the local import as well as remote import option for endusers';
$l['update_system'] = 'Update Operating System';
$l['update_system_exp'] = 'This will updates the operating system using yum or apt-get';
$l['off_rbackup'] = 'Disable Backup on Remote Server';
$l['off_rbackup_exp'] = 'If checked, backups from '.APP.' on remote server will be disabled for all endusers';

$l['sync_ins_list'] = 'Sync installations list with '.APP.' Records';
$l['sync_ins_list_exp'] = 'Check if the installation directory exists in the user\'s web directory and remove the installation(s) from '.APP.' records for which directory does not exist';

$l['sync_ins_real_ver'] = 'Detect and update actual version of installations';
$l['sync_ins_real_ver_exp'] = 'Detect if the user has manually updated their installation and update the version in '.APP.' records in case of version mismatch';
$l['update_system'] = 'Update OS';
$l['update_system_exp'] = 'If enabled, Operating System will be updated using Yum or Apt-get';
$l['auto_backup_custom'] = 'Disable Custom time for Auto backups';

$l['sitepad_settings'] = 'SitePad Settings'; 
$l['off_sitepad'] = 'Turn Off SitePad Website Builder';
$l['off_sitepad_exp'] = 'This will disable SitePad for all your users<br /><b>Note:</b> SitePad is based on Freemium model and if your users upgrade to the premium plan you get recurring commissions from SitePad. <a href="mailto:sales@sitepad.com">More details</a>';
$l['off_sitepad_conf'] = 'Are you sure you want to disable SitePad Website Builder ? You can get revenues from SitePad via Commissions when your users upgrade to the premium plan of SitePad. Contact us for more details about SitePad at sales@sitepad.com';
$l['auto_backup_default'] = 'Default'; 
$l['auto_backup'] = 'Default auto backup frequency';
$l['auto_backup_exp'] = 'Choose the default auto backup frequency. The chosen value will be pre-selected for endusers';
$l['no_backup'] = 'Don\'t backup';
$l['daily'] = 'Once a day';
$l['weekly'] = 'Once a week';
$l['monthly'] = 'Once a month';
$l['backup_rotation'] = 'Default auto backup rotation';
$l['backup_rotation_exp'] = 'Choose the default auto backup rotation. The chosen value will be pre-selected for endusers';

$l['hc_api_url'] = 'Hosting Controller API URL';
$l['hc_api_url_exp'] = 'API calls for various tasks such as fetching users list, etc at admin level or in CLI will be performed using this HC API URL. This URL must be a valid API URL accessible from your server and of the format <b>http(s)://IP:PORT</b>';

$l['force_softaculous_on_ssl'] = 'Force '.APP.' to run on SSL(HTTPS)';
$l['force_softaculous_on_ssl_exp'] = 'If enabled, '.APP.' will redirect non-ssl page request to HTTPS';

$l['off_import_mail'] = 'Turn off Import Installation emails';
$l['off_import_mail_exp'] = 'This will disable the email sent to endusers when an installation is imported.';

$l['off_checkhttps'] = 'Disable SSL certificate check on script install form';
$l['off_checkhttps_exp'] = 'This will disable the SSL certificate check for domains when a user selects to install a script on https protocol and will not see any error if SSL certificate is not installed';
$l['hide_sitepad'] = 'Hide SitePad Website Builder';
$l['hide_sitepad_exp'] = 'This will disable SitePad for the users who have not used SitePad but will leave SitePad enabled for users who have used SitePad';

// SitePad Settings language strings
$l['sm_saving_error'] = 'There were some errors while saving the SitePad settings'; 
$l['sm_brand'] = 'Brand Name';
$l['sm_brand_exp'] = 'A single word for the Brand Name. If empty the default value will be : SitePad';
$l['sm_sitename'] = 'Site Name';
$l['sm_sitename_exp'] = 'The name of the server or company using SitePad. It will appear in many pages of the SitePad Website Builder' ;
$l['sm_brand_editor'] = 'Editor Name';
$l['sm_brand_editor_exp'] = 'The name of the editor to be shown. If empty the default value will be : SitePad Editor';
$l['sm_logo_url'] = 'Logo URL';
$l['sm_logo_url_exp'] = 'It should be a 100 x 100 pixels transparent PNG image. If empty the SitePad logo will be shown';
$l['sm_brand_url'] = 'Website URL';
$l['sm_brand_url_exp'] = 'The URL to show the users for this Website Builder. If empty the default value will be : https://sitepad.com';
$l['host_sm'] = 'Custom Server Host';
$l['host_sm_exp'] = 'You can create a CNAME record to point to <a href="http://sitepad.com/wiki/Servers" target="_blank">our Servers</a>. Or you can simply use our servers hostname. If empty SitePad will use default server host for user';
$l['sm_brand_demos'] = 'Themes Demos URL';
$l['sm_brand_demos_exp'] = 'You can create a CNAME record to point to <b>demos.sitepad.com</b> <br />If empty SitePad will use default demos server for displaying themes demos';
$l['sm_no_demos'] = 'Disable Themes Demos';
$l['sm_no_demos_exp'] = 'Select this checkbox if you want to disable the themes demos for the user';
$l['sm_no_recent_themes'] = 'Disable Recent Themes';
$l['sm_no_recent_themes_exp'] = 'Select this checkbox if you want to disable the recently added themes section on the enduser Dashboard';
$l['sm_ftp_host'] = 'FTP Host';
$l['sm_ftp_host_exp'] = 'You can specify the FTP Host/IP that SitePad should use to connect while publishing files to your server. By default server IP will be used';
$l['sm_ftp_port'] = 'FTP Port';
$l['sm_ftp_port_exp'] = 'You can specify the FTP Port that SitePad should use to connect while publishing files to your server. By default 21 will be used';

// END SitePad Settings language strings

$l['err_no_dir'] = 'Backup directory doesn\'t exist on your server';

$l['quick_install_default'] = 'Set Quick Install as the default install option';
$l['quick_install_default_exp'] = 'If selected, the default install form will show minimal options (only required fields)';

$l['off_staging_mail'] = 'Turn off Staging Installation emails';
$l['off_staging_mail_exp'] = 'This will disable the email sent to endusers when staging an installation';
$l['max_bg_process'] = 'Maximum number of background processes';
$l['max_bg_process_exp'] = 'Set the maximum number of processes to be executed simultaneously in background. This will be used for tasks like Auto Upgrade. Default value : 10';
$l['au_extra_retry'] = 'Retry Auto Upgrade Script Plugins and Themes';
$l['au_extra_retry_exp'] = 'In case the auto upgrade for plugin or theme failed '.APP.' will retry after the given time. Default value : 48 hours';

$l['upgrade_backup_on'] = 'Set Backup checkbox pre-selected on Upgrade';
$l['upgrade_backup_on_exp'] = 'If selected, the Create Backup checkbox on the script upgrade page will be by default';

$l['off_staging'] = 'Turn Off Staging';
$l['off_staging_exp'] = 'This will turn off the Staging feature for endusers';
$l['err_openssl'] = 'Openssl extension is required to encrypt password';

$l['no_indir'] = 'Hide <b>In Directory</b> Field';
$l['no_indir_exp'] = 'If selected, then In Directory field will be hidden on installation form and the users will be able to install scripts only on domain root not in subdirectory.';

$l['max_staging'] = 'Maximum Staging installations per user limit';
$l['max_staging_exp'] = 'This will limit the maximum number of staging installations a user can create. Default : Unlimited';

$l['force_upgrade_plugins'] = 'Force upgrade for Plugins';
$l['force_upgrade_plugins_exp'] = 'If checked then the option to auto upgrade plugins for user\'s installation\'s will be enabled for endusers even if the user\'s didn\'t checked the option "auto upgrade plugins" in a particular edit installation\'s page.';

$l['force_upgrade_themes'] = 'Force upgrade for Themes';
$l['force_upgrade_themes_exp'] = 'If checked then the option to auto upgrade plugins for user\'s installation\'s will be enabled for endusers even if the user\'s didn\'t checked the option "auto upgrade themes" in a particular edit installation\'s page.';

$l['all_scripts'] = 'All Scripts';

$l['disable_csrf'] = 'Disable CSRF';
$l['disable_csrf_exp'] = 'This will disable the CSRF security check in Softaculous';

$l['cookie_name_invalid'] = 'The cookie name you submitted is invalid.';
$l['disable_manage_sets'] = 'Disable WordPress Manage Sets feature for endusers';
$l['disable_manage_sets_exp'] = 'This will disable the WordPress Plugin / Theme Sets feature for endusers';