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

$l['user_data_error_t'] = '使用者資料錯誤';
$l['user_data_error'] = APP.' 無法載入您的帳號資料.請回報這個錯誤給系統管理員!';

$l['remote_licence_t'] = '無效的許可證';
$l['remote_licence'] = '您目前沒有有效的許可證.請回報這個錯誤給系統管理員!';

$l['enterprise_licence_t'] = '無效的許可證';
$l['enterprise_licence'] = '您目前沒有有效的許可證.請回報這個錯誤給系統管理員!';

$l['no_license'] = 'LICENSE許可證 檔案無法獲取!請回報這個錯誤給系統管理員!';

$l['today'] = '<b>今天</b> 於 ';//The today string for showing todays post time

$l['init_theme_error_t'] = '主題錯誤';//Title
$l['init_theme_error'] = '無法讀取主題檔案 - &soft-1;.';

$l['init_theme_func_error_t'] = '主題功能錯誤';//Title
$l['init_theme_func_error'] = '無法讀取主題的功能於 &soft-1;.';

$l['disable_softaculous_t'] = 'Softaculous 關閉';
$l['disable_softaculous'] = '這個使用者的 Softaculous 為關閉狀態.請聯絡系統管理員.';

$l['load_theme_settings_error'] = '無法讀取主題設定檔案.';

$l['view_guide'] = 'View Guide';
$l['max_db_length'] = 'The database name cannot be greater than &soft-1; characters. Please choose a shorter database name.';


//錯誤 Handle Function
$l['following_errors_occured'] = '發現以下錯誤';

//Success Message Function
$l['following_message'] = '正在返回以下訊息';

//Major 錯誤 Function
$l['fatal_error'] = '重大錯誤';
$l['following_fatal_error'] = '發生了以下錯誤';

//Message Function
$l['soft_message'] = APP.' 訊息';
$l['following_soft_message'] = '正在返回以下訊息';

//Update Softwares
$l['no_soft_found'] = '找不到軟體.....需要更新';
$l['ver_not_match'] = '版本不符合.....需要更新';
$l['ver_match'] = '目前的版本為最新版本......正在繼續';
$l['del_prev_files'] = '刪除先前檔案中......完成';
$l['fetch_latest'] = '獲得最新的檔案......';
$l['error_fetch_latest'] = '無法獲得最新的檔案......正在繼續';
$l['error_save_latest'] = '無法儲存最新的檔案......正在繼續';
$l['got_latest'] = '成功儲存最新的檔案';
$l['unzip_latest'] = '正在解壓縮檔案......';
$l['error_unzip_latest'] = '解壓縮檔案時遇到錯誤......正在繼續';
$l['unzipped_latest'] = '成功解壓縮';

//Update Softaculous
$l['getting_info'] = '請求資訊中......';
$l['error_getting_latest'] = '無法獲取請求的資訊......終止中';
$l['got_info'] = '獲得請求的資訊';
$l['manual_mode'] = '新版本的 '.APP.' 需要手動執行......終止中';
$l['no_updates'] = '目前版本為最新版本......正在繼續';
$l['fetch_upgrade'] = '獲取更新......';
$l['error_fetch_upgrade'] = '無法獲得更新......終止中';
$l['error_save_upgrade'] = '無法儲存更新......終止中';
$l['got_upgrade'] = '成功儲存更新';
$l['unzip_upgrade'] = '正在解壓縮檔案......';
$l['error_unzip_upgrade'] = '解壓縮檔案時遇到錯誤......終止中';
$l['unzipped_upgrade'] = '成功解壓縮';
$l['md5_check'] = '成功 MD5 確認';
$l['err_md5_check'] = '確認檔案的 MD5 沒有成功';
$l['err_md5_file'] = ' 為不存在的';

//MySQL 錯誤s
$l['err_selectmy'] = 'MySQL 資料庫不能被選擇.';
$l['err_myconn'] = 'MySQL 不能為離線的.';
$l['err_makequery'] = '不能查詢編號';
$l['err_mynum'] = 'MySQL 錯誤號碼';
$l['err_myerr'] = 'MySQL 錯誤';
$l['err_no_db_file'] = 'The database import file does not exist';
$l['err_no_open_db_file'] = 'Could not open the database import file';

//Importing 錯誤s
$l['imp_wrong_softdomain'] = '域名的路徑 &soft-1; 無法被找到.';
$l['imp_softpath_wrong'] = ' &soft-1; 的路徑是錯誤的並不存在.';
$l['imp_ins_exists'] = '&soft-1; 已經成功安裝在 &soft-2; 並按照我們的紀錄,正在由我們維護!';
$l['imp_no_func'] = '導入功能 &soft-1; 無法被讀取.';
$l['imp_err'] = '有些錯誤當正在匯入 &soft-1; 軟體.';
$l['err_query'] = 'Could not execute the query';

$l['invalid_search_input'] = 'Invalid Theme Search character. Only alphanumeric characters, underscore and hyphen are allowed.';

//hf_theme.php
$l['welcome'] = '歡迎';
$l['logout'] = '登出';
$l['page_time'] = '頁面創建秒數';
$l['times_are'] = '所有時間均為GMT國際標準時間';
$l['time_is'] = '現在時間為';
$l['no_script_found'] = 'No such Script found!';
$l['webuzo_sysapps_disabled'] = 'This functionality has been disabled from the Webuzo Admin Panel';
$l['webuzo_install_utility'] = 'This utility is not installed. Please install it first';

//The Category Language Variables
$l['forums'] = '論壇';
$l['blogs'] = '部落格';
$l['cms'] = '入口網站/CMS';
$l['galleries'] = '圖片畫廊';
$l['wikis'] = '維基';
$l['admanager'] = '廣告管理';
$l['calendars'] = '日曆';
$l['games'] = '遊戲';
$l['mail'] = '郵件';
$l['polls'] = '民調與測驗';
$l['projectman'] = '方案管理';
$l['ecommerce'] = '電子商務';
$l['guestbooks'] = '留言簿';
$l['customersupport'] = '客戶支援';
$l['others'] = '其他';
$l['music'] = '音樂';
$l['video'] = '影片';
$l['files'] = '檔案管理';
$l['go_cpanel'] = '前往控制台';
$l['go_home'] = APP.' 首頁';
$l['go_demos'] = '語法範例';
$l['go_ratings'] = '語法評分';
$l['go_settings'] = '編輯設定';
$l['go_email_settings'] = '電子郵件設定';
$l['go_installations'] = '全部的安裝';
$l['go_support'] = '幫助與支援';
$l['go_sync'] = '同步其他自動安裝';
$l['go_backups'] = '備份與還原';
$l['go_tasklist'] = '任務列表';
$l['go_apps_installations'] = '所有安裝的軟體';

$l['type_php'] = 'PHP';
$l['type_perl'] = 'Perl';
$l['type_js'] = 'JavaScript';
$l['type_java'] = 'Java';
$l['type_python'] = 'Python';
$l['search'] = '搜尋';
$l['back_to_top'] = '回到頁首';

$l['show'] = 'Show';
$l['hide'] = 'Hide';

// Categories
$l['cat_php_forums'] = '論壇';
$l['cat_php_blogs'] = '部落格';
$l['cat_php_cms'] = '入口網站/CMS';
$l['cat_php_galleries'] = '圖片畫廊';
$l['cat_php_wikis'] = '維基';
$l['cat_php_admanager'] = '廣告管理';
$l['cat_php_calendars'] = '日曆';
$l['cat_php_games'] = '遊戲';
$l['cat_php_mail'] = '郵件';
$l['cat_php_polls'] = '民意调查和分析';
$l['cat_php_projectman'] = '方案管理';
$l['cat_php_ecommerce'] = '電子商務';
$l['cat_php_guestbooks'] = '留言簿';
$l['cat_php_customersupport'] = '客戶支援';
$l['cat_php_others'] = '其他';
$l['cat_php_music'] = '音樂';
$l['cat_php_video'] = '影片';
$l['cat_php_rss'] = 'RSS新聞';
$l['cat_php_socialnetworking'] = '社交網路';
$l['cat_php_microblogs'] = '微網誌';
$l['cat_php_frameworks'] = 'Frameworks';
$l['cat_php_educational'] = '教育';
$l['cat_php_erp'] = '企業管理平台';
$l['cat_php_dbtools'] = '資料庫工具';
$l['cat_php_files'] = '檔案管理';
$l['cat_js_libraries'] = '博物館';
$l['cat_js_widgets'] = '小工具';
$l['cat_perl_blogs'] = '部落格';
$l['cat_perl_ecommerce'] = '電子商務';
$l['cat_perl_wikis'] = '維基';
$l['cat_perl_forums'] = '論壇';
$l['cat_perl_mail'] = '郵件';
$l['cat_java_cms'] = '內容管理系統';
$l['cat_java_forums'] = '論壇';
$l['cat_java_projectman'] = '方案管理';
$l['cat_java_erp'] = '企業管理平台';
$l['cat_java_blogs'] = '部落格';
$l['cat_java_wikis'] = '維基';
$l['cat_apps_server_side_scripting'] = '伺服器端語法';
$l['cat_apps_web_servers'] = '網路伺服器';
$l['cat_apps_utilities'] = '公用程式';
$l['cat_apps_libraries'] = '博物館';
$l['cat_apps_databases'] = '資料庫';
$l['cat_apps_stacks'] = '堆疊';
$l['cat_apps_security'] = '安全';
$l['cat_apps_statistics'] = '統計';
$l['cat_apps_java_tools'] = 'Java工具';
$l['cat_apps_java_containers'] ='Java集裝箱';
$l['cat_apps_version_control'] ='版本控制';
$l['cat_apps_modules'] ='模組';

// Classes Categories
$l['classes_ajax'] = 'Ajax';
$l['classes_cryptography'] = '密碼技術';
$l['classes_algorithms'] = '演算';
$l['classes_artificialintelligence'] = '人工智慧';
$l['classes_email'] = '郵件';
$l['classes_finances'] = '金融';
$l['classes_searching'] = '搜尋';
$l['classes_user_management'] = '用戶管理';
$l['classes_utilitiesandtools'] = '實用程式與工具';
$l['classes_validation'] = '確認';
$l['classes_security'] = '安全';
$l['classes_console'] = '指令控制台';
$l['classes_codegeneration'] = '代碼生成';
$l['classes_chat'] = '聊天';
$l['classes_astrology'] = '占星';
$l['classes_audio'] = '聲音';
$l['classes_biology'] = '自然學';
$l['classes_blogs'] = '部落格';
$l['classes_cache'] = '暫存';
$l['classes_compression'] = '壓縮';
$l['classes_configuration'] = '組態設置';
$l['classes_contentmanagement'] = '內容管理';
$l['classes_conversion'] = '轉換';
$l['classes_datatypes'] = '資料類型';
$l['classes_databases'] = '資料庫';
$l['classes_debug'] = '除錯';
$l['classes_designpatterns'] = '設計模式';
$l['classes_ecommerce'] = '電子商務';
$l['classes_elearning'] = '電子教學';
$l['classes_emulators'] = '模擬機器';
$l['classes_filesandfolders'] = '檔案與資料夾';
$l['classes_flash'] = 'Flash';
$l['classes_forums'] = '論壇';
$l['classes_games'] = '遊戲';
$l['classes_geography'] = '地理';
$l['classes_graphics'] = '圖像';
$l['classes_gui'] = 'GUI介面化';
$l['classes_hosting'] = '域名管理';
$l['classes_html'] = 'HTML';
$l['classes_http'] = 'HTTP';
$l['classes_language'] = '語言';
$l['classes_projectmanagement'] = '方案管理';

// Softaculous Remote Domain Strings
$l['no_domain_data'] = 'Domain Data Not Found!!';
$l['no_aefer_resp'] = 'Could not access the worker file over web. Please check if your domain is pointing to the correct server.'; 

// Webuzo Strings
$l['webuzo'] = 'Webuzo';
$l['go_domain'] = '管理域名';
$l['webuzo_license_exp'] = '您的通行證尚未激活或已經過期.如果您的通行證已經過期,請新增一個新的通行證來繼續使用 Webuzo.';
$l['webuzo_license_exp_t'] = '通行證尚未激活';
$l['err_no_access'] = 'You do not have permission to access this page';

// Ampps Strings
$l['ampps'] = 'AMPPS';
$l['go_domain'] = '管理域名';
$l['ampps_license_exp'] = '您的通行證尚未激活或已經過期.如果您的通行證已經過期,請新增一個新的通行證來繼續使用Ampps';
$l['ampps_license_exp_t'] = '通行證尚未激活';


/////////////////////////////////////////////////////////////
/////  Following Variables are used for Email Templates /////
/////////////////////////////////////////////////////////////

$l['notify_enable'] = '已啟用';
$l['notify_disable'] = '尚未啟用';

$l['autoupgrade_enable'] = '已啟用';
$l['autoupgrade_disable'] = '尚未啟用';

// Auto backup strings
$l['auto_backup_enable'] = '已啟用';
$l['auto_backup_disable'] = '尚未啟用';

// Install Template Vaiable
$l['mail_install_php_sub'] = '$scriptname 有新的更新';
$l['mail_install_php'] = '一個新的安裝包 $scriptname $version 已經完成.更詳細的介紹安裝包請參閱以下訊息:
路徑 : $path
連結 : $url
管理員連結 : $admin_url
<if $datadirectory>資料資料夾 : $datadirectory</if>
<if $admin_username>管理員名稱 : $admin_username</if>
<if $admin_pass>管理員密碼 : $admin_pass</if>
<if $admin_email>管理員電子郵件: $admin_email</if>
<if $dbname>MySQL 資料庫 : $dbname</if>
<if $dbuser>MySQL 資料庫使用者 : $dbuser</if>
<if $dbhost>MySQL 資料庫域名 : $dbhost</if>
<if $dbpass>MySQL 資料庫密碼 : $dbpass</if>
<if $cron>定時任務 : $cron</if>
<if $disable_notify_update>升級提醒 : $disable_notify_update</if>
<if $eu_auto_upgrade>自動升級 : $eu_auto_upgrade</if>
<if $auto_backup>自動備份 : $auto_backup</if>
<if $auto_backup_rotation>備份輪替 : $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
<if $time>安裝包的時間 : $time</if>

如果您希望取消訂閱電子郵件,前往控制台 -> '.APP.' -> 電子郵件設定
';

// Clone Template Vaiable
$l['mail_clone_sub'] = '複製安裝包 $scriptname';
$l['mail_clone'] = '您的 $scriptname $version 安裝包已經被成功複製.

您的原始安裝包資訊 :
原始路徑 : $old_path
原始連結 : $old_url

您的複製安裝包資訊 :
路徑 : $path
連結 : $url
管理員連結 : $admin_url
<if $datadirectory>資料資料夾 : $datadirectory</if>
<if $dbname>MySQL 資料庫 : $dbname</if>
<if $dbuser>MySQL 資料庫用戶 : $dbuser</if>
<if $dbhost>MySQL 域名 : $dbhost</if>
<if $dbpass>MySQL 資料庫密碼 : $dbpass</if>
<if $cron>排程任務 : $cron</if>
<if $time>安裝包時間 : $time</if>

如果您希望取消訂閱電子郵件,前往控制台 -> '.APP.' -> 電子郵件設定
';

// Install Template Vaiable
$l['mail_install_js_sub'] = '$scriptname 有新的更新';
$l['mail_install_js'] = '一個新的安裝包 $scriptname $version 已經完成.更詳細的介紹安裝包請參閱以下訊息:
路徑 : $path
連結 : $url
<if $disable_notify_update>升級提醒 : $disable_notify_update</if>
<if $auto_backup>自動備份 : $auto_backup</if>
<if $auto_backup_rotation>備份輪替 : $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
<if $time>安裝包時間 : $time</if>

如果您希望取消訂閱電子郵件,前往控制台 -> '.APP.' -> 電子郵件設定
';

// Install Template Vaiable
$l['mail_install_perl_sub'] = '$scriptname 有新的更新';
$l['mail_install_perl'] = '一個新的安裝包 $scriptname $version 已經完成.更詳細的介紹安裝包請參閱以下訊息:
Path : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>資料資料夾 : $datadirectory</if>
<if $admin_username>管理員名稱 : $admin_username</if>
<if $admin_pass>管理員密碼 : $admin_pass</if>
<if $admin_email>管理員電子郵件: $admin_email</if>
<if $dbname>MySQL 資料庫 : $dbname</if>
<if $dbuser>MySQL 資料庫使用者 : $dbuser</if>
<if $dbhost>MySQL 資料庫域名 : $dbhost</if>
<if $dbpass>MySQL 資料庫密碼 : $dbpass</if>
<if $cron>定時任務 : $cron</if>
<if $disable_notify_update>升級提醒 : $disable_notify_update</if>
<if $eu_auto_upgrade>自動升級 : $eu_auto_upgrade</if>
<if $auto_backup>自動備份 : $auto_backup</if>
<if $auto_backup_rotation>備份輪替 : $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
<if $time>安裝包的時間 : $time</if>

如果您希望取消訂閱電子郵件,前往控制台 -> '.APP.' -> 電子郵件設定
';

// Install Template Vaiable
$l['mail_install_java_sub'] = '$scriptname 有新的更新';
$l['mail_install_java'] = '一個新的版本的 $scriptname $version 已經釋出. 以下為安裝包的資訊:
路徑 : $path
連結 : $url
管理員連結 : $admin_url
<if $datadirectory>資料資料夾 : $datadirectory</if>
<if $admin_username>管理員名稱 : $admin_username</if>
<if $admin_pass>管理員密碼 : $admin_pass</if>
<if $admin_email>管理員電子郵件: $admin_email</if>
<if $dbname>MySQL 資料庫 : $dbname</if>
<if $dbuser>MySQL 資料庫使用者 : $dbuser</if>
<if $dbhost>MySQL 資料庫域名 : $dbhost</if>
<if $dbpass>MySQL 資料庫密碼 : $dbpass</if>
<if $cron>定時任務 : $cron</if>
<if $disable_notify_update>升級提醒 : $disable_notify_update</if>
<if $eu_auto_upgrade>自動升級 : $eu_auto_upgrade</if>
<if $auto_backup>自動備份 : $auto_backup</if>
<if $auto_backup_rotation>備份輪替 : $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
<if $time>安裝包的時間 : $time</if>

如果您希望取消訂閱電子郵件,前往控制台 -> '.APP.' -> 電子郵件設定
';

// Update template Variable (From ADMIN)
$l['mail_update_sub'] = '有新的語法更新可用';
$l['mail_update'] = '這個電子郵件涵蓋過期的 PHP 語法安裝. 為了安全起見您一定要迅速更新這些過期的安裝. 以下列出可用的更新:

$installation

請至您的控制台更新您的語法 -> '.APP.' -> 安裝.
您可以在那裡更新您的語法.

給 $serverip 網域的管理員
';

// Remove Template Variable
$l['mail_remove_sub'] = '移除了 $scriptname 的安裝';
$l['mail_remove'] = '一個 $scriptname 的安裝已經被移除. 以下為此安裝包的詳細資訊 :
魯靜 : $path
<if $url>連結ƒ : $url</if>
<if $datadirectory>資料資料夾 : $datadirectory</if>
<if $wwwdir>網頁資料夾 : $wwwdir</if>
<if $dbname>MySQL 資料庫 : $dbname</if>
<if $dbuser>MySQL 資料庫用戶 : $dbuser</if>
<if $dbhost>MySQL 域名 : $dbhost</if>
<if $dbpass>MySQL 資料庫密碼 : $dbpass</if>
<if $cron>排程任務 : $cron</if>
安裝包時間 : $time
Time of Removal : $rem_time

如果您希望取消訂閱電子郵件,前往控制台 -> '.APP.' -> 電子郵件設定
';

// Cron Template Variable
$l['mail_cron_sub'] = '語法有新的更新';
$l['mail_cron'] = '以下的語法有更新可用:

$installation

安裝這些語法請至 -> '.APP.' -> 安裝.
您可以在那裡更新您的語法.

從 '.APP.' 的 corns $serverip

如果您希望取消訂閱電子郵件,前往控制台 -> '.APP.' -> 電子郵件設定

';

// Editdetail Template Variable
$l['mail_editdetail_sub'] = '$scriptname 的修改安裝資訊';
$l['mail_editdetail'] = '安裝包 $scriptname 的資料已經修改. 以下為修改過後的安裝包詳細資訊 :
路徑 : $path
連結 : $url
<if $datadirectory>資料資料夾 : $datadirectory</if>
<if $wwwdir>網頁資料夾 : $wwwdir</if>
<if $wwwurl>Web URL : $wwwurl</if>
<if $dbname>MySQL 資料庫 : $dbname</if>
<if $dbuser>MySQL 資料庫用戶 : $dbuser</if>
<if $dbhost>MySQL 域名 : $dbhost</if>
<if $dbpass>MySQL 資料庫密碼 : $dbpass</if>
<if $cron>排程任務 : $cron</if>
<if $disable_notify_update>升級提醒 : $disable_notify_update</if>
<if $eu_auto_upgrade>自動更新 : $eu_auto_upgrade</if>
<if $auto_backup>自動備份 : $auto_backup</if>
<if $auto_backup_rotation>備份輪替 : $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
安裝包時間 : $time
修改時間 : $edit_time

如果您希望取消訂閱電子郵件,前往控制台 -> '.APP.' -> 電子郵件設定
';

// Backup Language Strings
$l['mail_backup_sub'] = '已經備份您的 $scriptname 安裝包';
$l['mail_backup'] = '已經成功備份您的 $scriptname 安裝包.
以下內容為詳細資訊 :
安裝路徑 : $path
安裝連結 : $url
<if $backup_location>Backup Location : $backup_location</if>
備份路徑 : $backup_file
<if $backup_note>備份筆記 : $backup_note</if>

您可以從下方路徑來下載您的備份 '.APP.'.

如果您希望取消訂閱電子郵件,前往控制台 -> '.APP.' -> 電子郵件設定
';

$l['mail_backup_fail_sub'] = '失敗 : 備份您的 $scriptname 安裝包';
$l['mail_backup_fail'] = '備份 $scriptname 安裝包並沒有成功完成.
以下內容為詳細資訊 :
安裝路徑 : $path
安裝連結 : $url
備份路徑 : $backup_file

發生了以下錯誤 :
$error

請稍後嘗試建立一個新的備份.

如果您希望取消訂閱電子郵件,前往控制台 -> '.APP.' -> 電子郵件設定
';


// Restore Language Strings
$l['mail_restore_sub'] = '還原您的 $scriptname';
$l['mail_restore'] = '您的 $scriptname 備份已經成功還原.
以下內容為詳細資訊 :
安裝路徑 : $path
安裝連結 : $url

如果您希望取消訂閱電子郵件,前往控制台 -> '.APP.' -> 電子郵件設定
';

$l['mail_restore_fail_sub'] = '失敗 : 還原您的 $scriptname';
$l['mail_restore_fail'] = '還原 $scriptname 並沒有成功完成.
以下內容為詳細資訊 :
安裝路徑 : $path
安裝連結 : $url

發生了以下錯誤 :
$error

請稍後嘗試從您的備份中還原.

如果您希望取消訂閱電子郵件,前往控制台 -> '.APP.' -> 電子郵件設定
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
$l['mail_install_classes_sub'] = '新的 $classesname 安裝包';
$l['mail_install_classes'] = '一個新的 $classesname $version 安裝包已經完成. 以下為安裝的資料:
路徑 : $path
<if $time>安裝包時間 : $time</if>

如果您希望取消訂閱電子郵件,前往控制台 -> '.APP.' -> 電子郵件設定
';

////////////////////////
// ADMIN UPGRADE - 6
////////////////////////

// Auto Upgrade Email For Admin (successful)
$l['mail_adminupgrade_success_admin_sub'] = '$user 的 $scriptname 安裝包已經成功更新';
$l['mail_adminupgrade_success_admin'] = '$user 的 $scriptname 安裝包已經被成功更新至最新版本.
以下內容為詳細資訊 :
安裝連結 : $url
最新版本 : $version
舊版本 : $oldversion
';

// Auto Upgrade Email For Admin (Failed) but restored successfully.
$l['mail_adminupgrade_fail_admin_sub'] = '$scriptname 的更新程序失敗並且由備份檔案中還原';
$l['mail_adminupgrade_fail_admin'] = '$user 的 $scriptname 安裝程序失敗.
'.APP.' 已經在更新前建立了備份, 然後備份已經成功還原.
安裝連結 : $url
目前版本 : $oldversion
最新版本 : $version
以下為詳細的更新錯誤 :
錯誤 : $upgrade_error
';

// Auto Upgrade Email for user (successful)
$l['mail_adminupgrade_success_user_sub'] = '$scriptname 已經成功由系統管理員更新';
$l['mail_adminupgrade_success_user'] = '您的 $scriptname 安裝包已經由系統管理員更新到最新的版本.
以下內容為詳細資訊 :
安裝連結 : $url
最新版本 : $version
舊版本 : $oldversion

如果您希望取消訂閱電子郵件,前往控制台 -> '.APP.' -> 電子郵件設定
';

// Auto Upgrade Email for user (fail) but restored successfully
$l['mail_adminupgrade_fail_user_sub'] = '系統管理員更新您的 $scriptname 安裝包已經失敗';
$l['mail_adminupgrade_fail_user'] = '系統管理員嘗試要安裝您的 $scriptname 安裝包, 但是更新程序失敗了.
已經在更新前建立了備份, 然後備份已經成功還原.
安裝連結 : $url
目前版本 : $oldversion
最新版本 : $version
以下為詳細的更新錯誤 :
錯誤 : $upgrade_error

如果您希望取消訂閱電子郵件,前往控制台 -> '.APP.' -> 電子郵件設定
';

// ALL IS FAILED (Upgrade and RESTORE toooo) (FOR ADMIN)
$l['mail_adminupgrade_restore_fail_admin_sub'] = '$user 的 $scriptname 安裝包更新程序失敗';
$l['mail_adminupgrade_restore_fail_admin'] = '$user 的 $scriptname 更新程序失敗了.
已經在更新前建立了備份, 但是還原程序也失敗了 !

您將需要一個手動還原. 手動還原的教學在這裡 :
http://www.softaculous.com/docs/Manual_Restore

以下為您可能需要關於安裝與備份 $scriptname 的資訊 :
PATH_TO_YOUR_BACKUP_FILE : $backup_path
PATH_OF_INSTALLATION : $softpath
<if $dbname>DATABASE_NAME : $dbname</if>
<if $dbuser>DATABSE_USER : $dbuser</if>
<if $dbpass>DATABASE_PASS : $dbpass</if>
<if $dbhost>DATABASE_HOST : $dbhost</if>

安裝連結 : $url
目前版本 : $oldversion
最新版本 : $version
<if $upgrade_error>
以下為詳細的更新錯誤 :
錯誤 : $upgrade_error
</if>
<if $error>
以下為詳細的還原錯誤 :
錯誤 : $error
</if>

'.APP.' 團隊可以盡力幫助您. 如果您正在面對任何問題, 您可以聯絡 '.APP.' 團隊 (support@'.strtolower(APP).'.com).
';

// ALL IS FAILED (Upgrade and RESTORE toooo) (FOR USER)
$l['mail_adminupgrade_restore_fail_user_sub'] = '系統管理員更新您的 $scriptname 安裝包失敗';
$l['mail_adminupgrade_restore_fail_user'] = '系統管理員嘗試要安裝您的 $scriptname 安裝包, 但是更新失敗.
已經在更新前建立了備份, 但是還原程序也失敗了 !

您將需要一個手動還原. 手動還原的教學在這裡 :
http://www.softaculous.com/docs/Manual_Restore

以下為您可能需要關於安裝與備份 $scriptname 的資訊 :
PATH_TO_YOUR_BACKUP_FILE : $backup_path
PATH_OF_INSTALLATION : $softpath
<if $dbname>DATABASE_NAME : $dbname</if>
<if $dbuser>DATABSE_USER : $dbuser</if>
<if $dbpass>DATABASE_PASS : $dbpass</if>
<if $dbhost>DATABASE_HOST : $dbhost</if>

安裝連結 : $url
目前版本 : $oldversion
最新版本 : $version
<if $upgrade_error>
以下為詳細的更新錯誤 :
錯誤 : $upgrade_error
</if>
<if $error>
以下為詳細的還原錯誤 :
錯誤 : $error
</if>

'.APP.' 團隊可以盡力幫助您. 如果您正在面對任何問題, 您可以聯絡 '.APP.' 團隊 (support@'.strtolower(APP).'.com).

如果您希望取消訂閱電子郵件,前往控制台 -> '.APP.' -> 電子郵件設定
';

////////////////////////
// USER UPGRADE - 3
////////////////////////

// When upgraded by user successfully (By user)
$l['mail_userupgrade_success_user_sub'] = '$scriptname 安裝包成功更新';
$l['mail_userupgrade_success_user'] = '您的 $scriptname 安裝包已經被成功更新至最新版本.
以下內容為詳細資訊 :
安裝連結 : $url
最新版本 : $version
舊版本 : $oldversion

如果您希望取消訂閱電子郵件,前往控制台 -> '.APP.' -> 電子郵件設定
';

// If any error occured while upgrading, (By user)
$l['mail_userupgrade_fail_user_sub'] = '更新您的 $scriptname 安裝包失敗';
$l['mail_userupgrade_fail_user'] = '更新您的 $scriptname 安裝包失敗.
以下內容為詳細資訊 :
安裝連結 : $url
目前版本 : $oldversion
最新版本 : $version
錯誤 : $upgrade_error

如果您希望取消訂閱電子郵件,前往控制台 -> '.APP.' -> 電子郵件設定
';

// If UPGRADE and RESTORE failed while upgrading, (By user)
$l['mail_userupgrade_restore_fail_user_sub'] = '更新您的 $scriptname 安裝包失敗';
$l['mail_userupgrade_restore_fail_user'] = '更新您的 $scriptname 安裝包失敗.
已經在更新前建立了備份, 但是還原程序也失敗了 !

您將需要一個手動還原. 手動還原的教學在這裡
http://www.softaculous.com/docs/Manual_Restore

以下內容為詳細資訊 :
安裝連結 : $url
目前版本 : $oldversion
最新版本 : $version
<if $upgrade_error>
以下為詳細的更新錯誤 :
錯誤 : $upgrade_error
</if>
<if $error>
以下為詳細的還原錯誤 :
錯誤 : $error
</if>

'.APP.' 團隊可以盡力幫助您. 如果您正在面對任何問題, 您可以聯絡 '.APP.' 團隊 (support@'.strtolower(APP).'.com).

如果您希望取消訂閱電子郵件,前往控制台 -> '.APP.' -> 電子郵件設定
';

////////////////////////
// AUTO UPGRADE - 3
////////////////////////

// When AUTOUPGRADED successfully
$l['mail_autoupgrade_success_user_sub'] = '$scriptname 安裝包已經自動安裝成功';
$l['mail_autoupgrade_success_user'] = '您的 $scriptname 安裝包已經成功自動更新至最新版本.
以下內容為詳細資訊 :
安裝連結 : $url
最新版本 : $version
舊版本 : $oldversion

如果您希望取消訂閱電子郵件,前往控制台 -> '.APP.' -> 電子郵件設定
';

// When AUTOUPGRADE FAILED
$l['mail_autoupgrade_fail_user_sub'] = '自動更新您的 $scriptname 安裝包失敗';
$l['mail_autoupgrade_fail_user'] = '自動更新您的 $scriptname 安裝包失敗.
以下內容為詳細資訊 :
安裝連結 : $url
目前版本 : $oldversion
最新版本 : $version
錯誤 : $upgrade_error

如果您希望取消訂閱電子郵件,前往控制台 -> '.APP.' -> 電子郵件設定
';

// If UPGRADE and RESTORE failed while AUTOUPGRADING
$l['mail_autoupgrade_restore_fail_user_sub'] = '自動更新您的 $scriptname 安裝包失敗';
$l['mail_autoupgrade_restore_fail_user'] = '自動更新您的 $scriptname 安裝包失敗.
已經在更新前建立了備份, 但是還原程序也失敗了 !

您將需要一個手動還原. 手動還原的教學在這裡
http://www.softaculous.com/docs/Manual_Restore

以下內容為詳細資訊 :
安裝連結 : $url
目前版本 : $oldversion
最新版本 : $version
<if $upgrade_error>
以下為詳細的更新錯誤 :
錯誤 : $upgrade_error
</if>
<if $error>
以下為詳細的還原錯誤 :
錯誤 : $error
</if>

'.APP.' 團隊可以盡力幫助您. 如果您正在面對任何問題, 您可以聯絡 '.APP.' 團隊 (support@'.strtolower(APP).'.com).f

如果您希望取消訂閱電子郵件,前往控制台 -> '.APP.' -> 電子郵件設定
';

////////////////////////
// PRE UPGRADE CHECK 
////////////////////////

// If pre upgradation check fails while AUTOUPGRADE (FOR USER)
$l['mail_autoupgrade_precheck_fail_sub'] = '預先更新檢查失敗';
$l['mail_autoupgrade_precheck_fail'] = '以下安裝包的更新程序無法自動安裝, 因為沒有載入到升級條件 :
安裝連結 : $url
目前版本 : $oldversion
最新版本 : $version
<if $upgrade_error>
錯誤 : $upgrade_error
</if>
<if $error>
錯誤 : $error
</if>

如果您希望取消訂閱電子郵件,前往控制台 -> '.APP.' -> 電子郵件設定
';

/////////////////////////////////
// Backup Failed CLI UPGRADE
/////////////////////////////////

// If a backup fails before AUTO UPGRADING an installation (FOR USER)
$l['mail_autoupgrade_backup_fail_sub'] = '在自動安裝 $scriptname 前的備份程序失敗';
$l['mail_autoupgrade_backup_fail'] = '$scriptname 的自動安裝程序失敗了. 所以自動安裝程序被擱置.
以下內容為詳細資訊 :
安裝連結 : $url
目前版本 : $oldversion
最新版本 : $version
錯誤 : $error

如果您希望取消訂閱電子郵件,前往控制台 -> '.APP.' -> 電子郵件設定
';

$l['err_openconfig'] = '不能開啟設置檔案';
$l['err_writeconfig'] = '不能存取設置檔案';

$l['classes_con_failed'] = '錯誤 : 無法連結至伺服器 .';
$l['cl_ratings'] = '評分';
$l['cl_author'] = '作者';
$l['cl_license'] = '執照';
$l['cl_version'] = '版本';
$l['cl_show_files'] = '顯示檔案';
$l['cl_install_but'] = '安裝';
$l['expand_view'] = '點選這裡顯示完整內容';
$l['collapse_view'] = '點選這裡顯示部分內容';

$l['email_off_notice'] = '<b>警告 : 通知電郵已經被關閉, 因此您將無法接收到任何電郵.</b>';

// Add 使用者 Language Strings
$l['mail_add_user_sub'] = '歡迎來到 Softaculous 遠端安裝';
$l['mail_add_user'] = '您現在可以成功登入進入 Softaculous 遠端安裝.
以下內容為詳細資訊 :
使用者 					: $username
API 金鑰 				: $api_key
API 密碼 			: $api_pass
Number of 使用者s allowed	: $number_of_users';

// Requirement parser languages
$l['req_ver_nf'] = '需要 &soft-1; 版本 &soft-2; &soft-3; 然後尋找到的版本是 : ';
$l['req_ext_nf'] = '需要的 &soft-1; 擴充元件無法被找到 :';
$l['req_func_nf'] = '需要的 &soft-1; 功能無法被找到';
$l['req_ext_ver'] = '需要的 &soft-1; &soft-2; 擴充元件版n &soft-3; &soft-4; 但是找到的是 &soft-5;';
$l['gt'] = '大於';
$l['lt'] = '小於';
$l['ge'] = '大於等於';
$l['le'] = '小於等於';
$l['eq'] = '等於';
$l['ne'] = 'should not be equal to';

// Automated Backup Language Strings
$l['mail_auto_backup_sub'] = '已經自動備份您的 $scriptname 安裝包';
$l['mail_auto_backup'] = '已經自動備份您的 $scriptname 安裝包已經成功安裝.
以下內容為詳細資訊 :
安裝路徑 : $path
安裝連結 : $url
備份路徑 : $backup_file
<if $backup_location>Backup Location : $backup_location</if>

您現在可以從備份選項裡的 '.APP.' 下載備份.

如果您希望取消訂閱電子郵件,前往控制台 -> '.APP.' -> 電子郵件設定
';

$l['mail_auto_backup_fail_sub'] = '錯誤 : 自動備份您的 $scriptname 安裝包';
$l['mail_auto_backup_fail'] = '自動備份您的 $scriptname 安裝包沒有成功.
以下內容為詳細資訊 :
安裝路徑 : $path
安裝連結 : $url
備份路徑 : $backup_file
<if $backup_location>Backup Location : $backup_location</if>

發生了以下錯誤 :
$error

如果您希望取消訂閱電子郵件,前往控制台 -> '.APP.' -> 電子郵件設定
';

// Email for sending the list of scripts which does not meet the requirements.
$l['mail_script_requirement_sub'] = '語法需求錯誤紀錄';
$l['mail_script_requirement'] = '以下為您的語法在最低需求的伺服器中無法運作的列表.
以下內容為詳細資訊 :

$failed_req

注意 : 如果您想要更改 PHP 版本於運行時 (例如使用 CageFS, hive, .htaccess 等等), 那麼你可以略過 PHP 版本失效的警告.
';

// Softpanel Language Strings
$l['no_www_domain'] = '請關閉所有的 '.APP.' 頁面並使用登出按鈕登出控制台.
之後你可以重新登入並使用 '.APP.'.';
$l['root_login'] = 'Logged in as ROOT';
$l['no_script_found'] = 'No such Script found!';
$l['go_my_themes'] = 'My Themes';
$l['go_logout'] = 'Logout';
$l['ins_stats'] = 'Installations';
$l['outdated_stats'] = 'Outdated Installations';
$l['backups_stats'] = 'Backups';

$l['type_python'] = 'Python';
$l['cat_python_wikis'] = 'Wikis';
$l['cat_python_projectman'] = 'Project Management';
$l['cat_apps_message_queue'] = 'Message Queue';
$l['mail_install_python_sub'] = 'New Installation of $scriptname';
$l['mail_install_python'] = 'A new installation of $scriptname $version has been completed. The details of the installation are shown below:
Path : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>Data Directory : $datadirectory</if>
<if $wwwdir>Web Directory : $wwwdir</if>
<if $admin_username>Admin Username : $admin_username</if>
<if $admin_pass>Admin Password : $admin_pass</if>
<if $admin_email>Admin Email: $admin_email</if>
<if $dbname>MySQL Database : $dbname</if>
<if $dbuser>MySQL DB User : $dbuser</if>
<if $dbhost>MySQL DB Host : $dbhost</if>
<if $dbpass>MySQL DB Password : $dbpass</if>
<if $cron>Cron Job : $cron</if>
<if $disable_notify_update>Update Notification : $disable_notify_update</if>
<if $auto_backup>Automated Backups : $auto_backup</if>
<if $auto_backup_rotation>Backup Rotation : $auto_backup_rotation</if>
<if $backup_location>Backup Location : $backup_location</if>
<if $time>Time of Installation : $time</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';
$l['changelog'] = '== Changelog for';
$l['install_tweet'] = 'I just installed #[[SCRIPTNAME]] on [[softurl]] via #[['.APP.']] #[[TYPE]]';
$l['install_tweet_classes'] = 'I just installed #[[SCRIPTNAME]] via #[['.APP.']] #[[TYPE]]';
$l['upgrade_tweet'] = 'I just upgraded #[[SCRIPTNAME]] on [[softurl]] via #[['.APP.']] #[[TYPE]]';
$l['clone_tweet'] = 'I just cloned #[[SCRIPTNAME]] on [[softurl]] via #[['.APP.']] #[[TYPE]]';
$l['January'] = 'January';
$l['February'] = 'February';
$l['March'] = 'March';
$l['April'] = 'April';
$l['May'] = 'May';
$l['June'] = 'June';
$l['July'] = 'July';
$l['August'] = 'August';
$l['September'] = 'September';
$l['October'] = 'October';
$l['November'] = 'November';
$l['December'] = 'December';

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

