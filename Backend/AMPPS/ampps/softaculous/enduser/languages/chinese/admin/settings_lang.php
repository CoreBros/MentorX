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

$l['no_path'] = '沒有路徑發布';
$l['wrong_path'] = '無法定位 universal.php 於您所指定的位置';
$l['no_softscripts'] = '沒有指定 語法/軟體 的位置路徑No path of the script/software location was given';
$l['wrong_softscripts'] = '語法/軟體 的路徑因為不存在而產生錯誤';
$l['no_sn'] = '沒有指定的網站名稱.';
$l['no_cookie_name'] = '沒有指定的 cookie 名稱';
$l['no_soft_email'] = '沒有提供電子郵件';
$l['wrong_soft_email'] = '您送出的管理員電子郵件是錯誤的';
$l['wrong_from_email'] = '您送出的表單電子郵件是錯誤的';
$l['no_license'] = '沒有送出許可證金鑰';
$l['no_lang'] = '沒有選擇的語言';
$l['wrong_lang'] = '選擇的語言是無效的';
$l['no_theme_folder'] = '沒有選擇的佈景主題';
$l['wrong_theme_folder'] = '選擇的佈景主題是無效的';
$l['no_timezone'] = '沒有選擇的時區';
$l['wrong_timezone'] = '選擇的時區是無效的';
$l['no_cron_time'] = '沒有指定的 cron job time';
$l['no_off_message'] = '沒有指定的 switch off subject';
$l['no_off_subject'] = '沒有指定的 switch off message';
$l['saving_error'] = '儲存設定時發生錯誤';
$l['no_update'] = '沒有送出更新設定';
$l['invalid_update'] = '一個無效的更新設定送出';
$l['no_protocol'] = '沒有選擇協定';
$l['wrong_protocol'] = '選擇的協定是無效的';
$l['wrong_network_interface'] = '您所選擇的網路介面是無效的';
$l['pass_strength_error'] = '密碼必須為整數, 介於 0 到 100 之間';
$l['err_binary_path'] = '看起來二進制資料庫不存在於指定路徑. 請重新檢查.';
$l['err_invalid_soa'] = 'Invalid SOA!!!Please enter a valid positive number';

//Theme Strings
$l['<title>'] = APP.' - 設定中心';
$l['settings_saved'] = '設定已經成功儲存';
$l['pathhead'] = '軟體路徑';
$l['softpath'] = APP.' 路徑';
$l['softpath_exp'] = '這個路徑除了大多數語法之外的位置';
$l['softscripts'] = '語法路徑';
$l['softscripts_exp'] = '這是所有軟體/語法的路徑位置';
$l['gen_set'] = '整體設定';
$l['sitename'] = '網站名稱';
$l['sitename_exp'] = '伺服器或公司使用 '.APP.' 的名稱. 這將會出現於 '.APP.' 中多數網站的安裝器中';
$l['cook_name'] = 'Cookie 名稱';
$l['cook_name_exp'] = 'Cookie 名稱將會被儲存於瀏覽器中.';
$l['comp_output'] = '壓縮輸出';
$l['comp_output_exp'] = '這將會壓縮輸出的內容並節省許多流量.';
$l['soft_email'] = '管理員電郵地址';
$l['soft_email_exp'] = '這個電子郵件地址當 CRON 啟用時及其他管理員聯繫使用.';
$l['from_email'] = 'From 電郵地址';
$l['from_email_exp'] = '這個電郵地址是給 FROM headers 使用的.';
$l['license'] = '許可證金鑰';
$l['license_exp'] = '請輸入由 '.APP.' 發放的正確許可證金鑰';
$l['choose_lang'] = '選擇語言';
$l['choose_lang_exp'] = '選擇您偏好的語言';
$l['choose_theme'] = '選擇主題';
$l['choose_theme_exp'] = '選擇的主題將 '.APP.' 遍及預設主題';
$l['timezone'] = '時區';
$l['update_settings'] = '更新設定';
$l['auto_upd_softac'] = '自動更新 '.APP;
$l['auto_upd_softac_exp'] = '如果啟用的話 '.APP.' 其將會自動更新至最新版本. <br /><b>穩定版本</b> 分支是預先發佈被測試後的所釋出的. <br /><b>預先發佈</b> 分支包含最新版本與功能.';
$l['never_update'] = '停用更新';
$l['stable'] = '穩定版本 (建議)';
$l['release_cand'] = '預先發佈 (實驗性的!)';
$l['auto_upd_soft'] = '自動更新語法';
$l['auto_upd_soft_exp'] = '如果啟用, 許多語法或軟體將會自動更新至最新版本';
$l['auto_add_soft'] = '自動新增新語法';
$l['auto_add_soft_exp'] = '如果啟用, 新語法或軟體當自動維護工作啟用時將自動新增. 強烈建議開啟';
$l['email_upd_soft'] = '更新提醒';
$l['email_upd_soft_exp'] = '當 '.APP.' 有可用更新或自動更新啟用, 將會傳送電子郵件';
$l['email_upd_softs'] = '語法更新提醒';
$l['email_upd_softs_exp'] = '當 語法或軟體 有可用更新或自動更新啟用, 將會傳送電子郵件';
$l['cron_time'] = 'Cron Job 更新';
$l['cron_time_exp'] = '利用 cron job time 來檢查是否有更新. 如果您不清楚 cron 如何運作請不要修改';
$l['disable_soft'] = '關閉 '.APP;
$l['soft_off'] = '把 '.APP.' 關閉';
$l['soft_off_exp'] = '這將會關閉 '.APP.' 且用戶將會無法使用!';
$l['off_sub'] = '關閉主題';
$l['off_message'] = '關閉訊息';
$l['edit_settings'] = '編輯設定';
$l['chmod_files'] = 'CHMOD 檔案';
$l['chmod_files_exp'] = 'This is useful if you have suPHP installed and '.APP.' is unable to detect it. Leave blank if unsure.';
$l['chmod_dir'] = 'CHMOD 資料夾';
$l['chmod_dir_exp'] = 'This is useful if you have suPHP installed and '.APP.' is unable to detect it. Leave blank if unsure.';
$l['is_vps'] = 'Is VPS';
$l['is_vps_exp'] = 'If this server is a VPS then please check this box.';
$l['eu_news_off'] = '關閉終端用戶新聞';
$l['eu_news_off_exp'] = '如果選擇這個選項將會關閉終端用戶的新聞, 新聞提供用戶最新的開發新聞與眾多語法的更新等等.';
$l['logo_url'] = 'Logo 網址';
$l['logo_url_exp'] = '如果留空, '.APP.' logo 將會顯示.';
$l['php_bin'] = 'PHP Binary';
$l['php_bin_exp'] = 'This is the binary that will be used for the CRON Job and also other purposes. If empty then <b>/usr/bin/php</b> will be used. Please note that the <b>PHP binary should be a CLI binary</b>.';
$l['end_user_set'] = '終端用戶控制台設定';
$l['off_sync_link'] = '關閉同步連結';
$l['off_sync_link_exp'] = '這將會關閉同步連結給終端用戶.';
$l['off_panel_link'] = '關閉控制台連結';
$l['off_panel_link_exp'] = '這將會關閉終端用戶 Dock 中的控制台連結.';
$l['chmod_conf_file'] = 'CHMOD 設定文件';
$l['chmod_conf_file_exp'] = 'CHMOD 的語法測定文件是這項數據. 預設的數據是 0644. (如果您不了解這項資訊請不要修改!)';
$l['suphp_detected'] = 'suPHP Detected';
$l['no_prefill'] = 'Don\'t Prefill Directory Name不要預先輸入資料夾名稱';
$l['no_prefill_exp'] = '不要預設的預先填寫資料夾名稱與語法名稱.';
$l['footer_link'] = 'Footer 連結';
$l['footer_link_exp'] = '當某些人安裝了一個語法, 這個連結或文字將會顯示於安裝軟體的 Footer';
$l['eu_email_off'] = '關閉終端用戶更新電子郵件';
$l['eu_email_off_exp'] = '如果反選用戶將會收到語法更新的電子郵件.';
$l['random_username'] = '生成隨機用戶名稱給用戶';
$l['random_username_exp'] = '如果選擇了在安裝時將會隨機生成管理員名稱.';
$l['random_pass'] = '生成隨機密碼給用戶';
$l['random_pass_exp'] = '如果選擇了在安裝時將會隨機生成管理員密碼.';
$l['off_demo_link'] = '關閉語法範例';
$l['off_demo_link_exp'] = '這將會關閉語法範例給終端用戶.';
$l['off_rating_link'] = '關閉語法評分';
$l['off_rating_link_exp'] = '這將會關閉語法評分給終端用戶.';
$l['off_review_link'] = '關閉語法評論';
$l['off_review_link_exp'] = '這將會關閉語法評論給終端用戶.';
$l['off_screenshot_link'] = '關閉語法截圖';
$l['off_screenshot_link_exp'] = '這將會關閉語法截圖給終端用戶.';
$l['random_dbprefix'] = '隨機生成資料庫前綴 給用戶';
$l['random_dbprefix_exp'] = '如果選擇了將會在安裝時隨機生成資料庫前綴.';
$l['remote_mysql'] = '遠端 Mysql Hostname';
$l['remote_mysql_exp'] = '如果您希望使用遠端 Mysql, 請提供遠端 Mysql Hostname 或 IP';
$l['perl_scripts'] = '關閉 PERL 語法';
$l['perl_scripts_exp'] = ' 這將會關閉 PERL 語法給終端用戶';
$l['show_top_scripts'] = '顯示最佳語法群組';
$l['show_top_scripts_exp'] = ' 這將會給終端用戶顯示最佳語法群組給予終端用戶簡易存取安裝頁面.  關閉這項功能請留 <b>空</b>.';
$l['err_change_app_name'] = '修改群組名稱時發生錯誤';
$l['hide_dbprefix'] = '隱藏語法的資料庫前綴';
$l['hide_dbprefix_exp'] = '如果選擇了, 那麼語法將不能擁有資料庫前綴.';
$l['user_mod_dir'] = 'Use USER MOD DIR';
$l['user_mod_dir_exp'] = 'Users can install scripts on http://IP/~user';
$l['off_email_link'] = '關閉傳送給終端用戶的電子郵件';
$l['off_email_link_exp'] = ' 這將會關閉電子郵件連結給終端用戶, 同時間取消電子郵件將會傳送給用戶的安裝, 移除等等.';
$l['disable_classes'] = '關閉 PHP Classes';
$l['disable_classes_exp'] = '這將會關閉 PHP Classes 給終端用戶.';
$l['panel_hf'] = '顯示 Softaculous 在 cPanel 的內部介面.';
$l['panel_hf_exp'] = '啟用選項那麼 Softaculous 將會顯示於 cPanel 的內部介面.';
$l['disable_backup_restore'] = '關閉備份還原功能給終端用戶';
$l['disable_backup_restore_exp'] = '這將會關閉備份與還原功能給終端用戶.';
$l['nolabels'] = '關閉所有語法分類.';
$l['nolabels_exp'] = '如果啟用的話將會沒有分類顯示於終端用戶控制台. 例如 PHP, Jvascripts, PERL, Classes 這一類的所有分類將會被關閉.';
$l['settings'] = APP.' 設定';
$l['disable_reseller_panel'] = '關閉經銷商控制台';
$l['disable_reseller_panel_exp'] = '如果啟用那麼就經銷商就不能存取經銷商控制台.';
$l['choose_protocol'] = '選擇協定';
$l['choose_protocol_exp'] = '選擇您想要的協定. 這將會成為終端用戶的預設選項.';
$l['network_interface'] = '網路介面';
$l['network_interface_exp'] = '伺服器的公共網路介面. 如果您不知道如何設定請留空';
$l['default_domain_path'] = '預設域名路徑';
$l['default_domain_path_exp'] = '當加入域名時您可以選擇預設域名路徑.';
$l['empty_username'] = '空白使用者名稱';
$l['empty_username_exp'] = '如果選擇選項那麼 管理員使用者 欄位將會留空.';
$l['empty_pass'] = '空白密碼';
$l['empty_pass_exp'] = '如果選擇選項那麼 密碼 欄位將會留空.';
$l['show_cscript_in_top'] = 'Show custom script(s) logo in TOP scripts.';
$l['show_cscript_in_top_exp'] = 'If enabled your custom script(s) logo will be displayed in the TOP scripts.';
$l['pass_strength'] = '設定最低密碼強度';
$l['pass_strength_exp'] = '如果設定了, 密碼強度必須大於設定值';
$l['off_remove_mail'] = '關閉移除安裝包電子郵件';
$l['off_remove_mail_exp'] = '這將會停用傳送電子郵件給終端用戶當 移除安裝包.';
$l['off_backup_mail'] = '關閉備份安裝包電子郵件';
$l['off_backup_mail_exp'] = '這將會停用傳送電子郵件給終端用戶當 備份安裝包.';
$l['off_install_mail'] = '關閉新安裝包電子郵件';
$l['off_install_mail_exp'] = '這將會停用傳送電子郵件給終端用戶當 安裝軟體.';
$l['off_edit_mail'] = '關閉編輯安裝包電子郵件';
$l['off_edit_mail_exp'] = '這將會停用傳送電子郵件給終端用戶當 安裝資訊被編輯.';
$l['off_clone_mail'] = '關閉複製安裝包電子郵件';
$l['off_clone_mail_exp'] = '這將會停用傳送電子郵件給終端用戶當 安裝包被複製.';
$l['admin_prefix'] = '管理員使用者名稱的前綴';
$l['admin_prefix_exp'] = '選擇設定後將會將安裝包內自訂管理員使用者名稱前面加上前綴<br/> 請不要使用 \'-\' 因為這會被當作分隔符號';
$l['ap_none'] = '無';
$l['ap_username'] = '使用者名稱';
$l['ap_domain'] = '域名Domain';
$l['ap_admin_defined'] = '管理員定義';
$l['disable_auto_backup'] = '對於終端用戶關閉自動備份';
$l['disable_auto_backup_exp'] = '如果選擇終端用戶將不會有自動備份功能.';
$l['webuzo_disable_username'] = 'Pre-fill Webuzo Username';
$l['webuzo_disable_username_exp'] = 'If checked then the field for Webuzo Username on login page will be prefilled.';
$l['disable_clone'] = '對於終端用戶關閉複製功能';
$l['disable_clone_exp'] = '這將會關閉終端用戶克隆安裝包的權限';
$l['disable_remote_import'] = 'Disable Remote Import feature for endusers';
$l['disable_remote_import_exp'] = 'This will disable the remote import option for endusers';
$l['disable_backup_upgrade'] = '關閉升級時的備份';
$l['disable_backup_upgrade_exp'] = '這將會取消終端用戶升級安裝包時的備份選項';
$l['ephp_bin'] = 'Enduser PHP binary';
$l['ephp_bin_exp'] = 'Define the PHP binary path that will be used by the enduser websites. '.APP.' will use this binary for checking the requirements of a script. If not defined '.APP.' will use the default binary as : ';
$l['no_ampps_download'] = '關閉 AMPPS 下載連結';
$l['no_ampps_download_exp'] = '這將會關閉終端用戶 '.APP.' 控制台裡面的 AMPPS 下載連結';
$l['no_strong_mysql_pass'] = '不要生成 MySQL 資料庫使用者難以破解的密碼';
$l['no_strong_mysql_pass_exp'] = '這將會為使用者生成密碼時不會產生特殊符號';

$l['err_mcrypt'] = 'mcrypt extension is required to ';
$l['cookie_name_invalid'] = 'The cookie name you submitted is invalid.';
$l['off_restore_mail'] = 'Turn off Restore Installation emails';
$l['off_restore_mail_exp'] = 'This will disable the email sent to endusers when an installation is restored.';
$l['remove_options'] = 'Enduser Remove Options';
$l['remove_dir'] = 'Hide Remove Directory Option';
$l['remove_dir_exp'] = 'If selected, Installation Directory will always be deleted when an installation is removed';
$l['remove_db'] = 'Hide Remove Database and Database User Option';
$l['remove_db_exp'] = 'If selected, Database and Database User will always be deleted when an installation is removed';
$l['remove_datadir'] = 'Hide Remove Data Directory Option';
$l['remove_datadir_exp'] = 'If selected, Data Directory will always be deleted when an installation is removed';
$l['remove_wwwdir'] = 'Hide Remove WWW Directory Option';
$l['remove_wwwdir_exp'] = 'If selected, WWW Directory will always be deleted when an installation is removed';
$l['social_media'] = 'Social Media Settings';
$l['install_tweet_off'] = 'Turn off Tweet for New Installations';
$l['install_tweet_off_exp'] = 'If checked, the Tweet option will not be shown after a new installation';
$l['install_tweet_msg'] = 'Tweet Message for New Installations';
$l['install_tweet_msg_exp'] = 'Custom Tweet Message for New Installations';
$l['upgrade_tweet_off'] = 'Turn off Tweet for Upgrade Installation';
$l['upgrade_tweet_off_exp'] = 'If checked, the Tweet option will not be shown after upgrading an installation';
$l['upgrade_tweet_msg'] = 'Tweet Message for Upgrade Installation';
$l['upgrade_tweet_msg_exp'] = 'Custom tweet message for Upgrade Installation';
$l['clone_tweet_off'] = 'Turn off Tweet for Clone Installation';
$l['clone_tweet_off_exp'] = 'If checked, the Tweet option will not be shown after cloning an installation';
$l['clone_tweet_msg'] = 'Tweet Message for Clone Installation';
$l['clone_tweet_msg_exp'] = 'Custom tweet message for Clone Installation';
$l['no_ftp_encrypted'] = 'Don\'t encrypt the FTP Password';
$l['no_ftp_encrypted_exp'] = 'This will store FTP Passwords of Domain in the database without encryption';
$l['pre_download_all'] = 'Enable Pre Download for all scripts';
$l['pre_download_all_exp'] = 'This will enable pre download for all scripts including new scripts added';
$l['tweet_vars_link'] = 'List of variables for Tweet message';
$l['tweet_vars'] = '[[SCRIPTNAME]] - Use this for script name <br />[[TYPE]] - Use this for script type Eg: PHP, PERL, etc <br />[[softurl]] - Use this for the URL of installation <br />[[cat]] - Use this for the script category Eg: Blog, CMS, etc <br />[[ver]] - Use this for the version of script installed <br />';
$l['session_timeout'] = 'Session Timeout';
$l['session_timeout_exp'] = 'Softaculous Session will remain active for the time specified.<br />Time should be in minutes. Default: 15';
$l['auto_backup_limit'] = 'Auto backup rotation limit';
$l['auto_backup_limit_exp'] = 'Choose the maximum limit for auto backups rotation for the endusers';
$l['auto_backup_unlimited'] = 'Unlimited';
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
$l['enc_db_pass_exp'] = 'If selected, then the Database Password for users\' installations will be stored in encrypted format. This will require <b>mcrypt</b> extension.';
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
$l['update_system_exp'] = 'If enabled, Oprating System will be updated using Yum or Apt-get';

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
$l['disable_manage_sets'] = 'Disable WordPress Manage Sets feature for endusers';
$l['disable_manage_sets_exp'] = 'This will disable the WordPress Plugin / Theme Sets feature for endusers';