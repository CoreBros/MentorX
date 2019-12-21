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

$l['no_ins'] = '沒有選擇的安裝包';
$l['wrong_ins_title'] = '錯誤的安裝包ID';
$l['wrong_ins'] = '選擇的安裝ID不存在';
$l['no_info_file'] = '找不到 INFO.XML 檔案! 請回報這個至您的伺服器管理員.';
$l['incompatible'] = '這個軟體需要更高版本的 '.APP.'! 請回報這個至您的伺服器管理員.';
$l['no_install'] = '找不到 INSTALL.XML 檔案! 請回報這個至您的伺服器管理員.';
$l['no_functions'] = '找不到 CLONE FUNCTIONS 檔案!';
$l['no_clone'] = '沒有複製';
$l['no_softdomain'] = '您沒有選擇要安裝這個軟體的域名.';
$l['wrong_softdomain'] = '您選擇的域名路徑無法被找到.';
$l['softdirectory_exists'] = '您所輸入的資料夾已經存在! 請輸入另一個資料夾名稱.';
$l['no_space'] = '您沒有足夠的空間來安裝這個軟體!';
$l['no_softdb'] = '資料庫沒有被告示 (posted).';
$l['database_exists'] = '資料庫已經存在. 請選擇另一個名稱.';
$l['databaseuser_exists'] = '資料庫使用者名稱已經存在. 請選擇另一個名稱.';
$l['db_name_long'] = '資料庫名稱不能大於 7 個字元. 請選擇短一點的資料庫名稱.';
$l['db_limit_crossed'] = '您已經達到了最大資料庫建立數, 因此安裝程序無法進行.';
$l['cloning'] = '正在複製安裝包';
$l['downloading'] = '正在下載封包';
$l['cant_clone_db'] = '不能複製資料庫';
$l['fail_create'] = '建立資料夾失敗';
$l['fail_create_datadir'] = '建立資料資料夾失敗';
$l['cant_clone_dir'] = '目錄不能被複製, 因為它是家目錄.';
$l['cant_connect_mysql'] = '無法連線到資料庫, 請檢查資料庫的 使用者名稱/密碼. 如果他改變了, 請更新詳細資料於 Softaculous 安裝包使用修改詳細資料的工具.';
$l['same_ins'] = '複製到同一個地方是不可能的';
$l['ins_exists'] = '看來您已經安裝了 <b>&soft-1;</b> 於您選擇的位置';
$l['ins_recursive'] = '您不能複製複製於原始資料夾中的安裝包';
$l['no_clone_support'] = 'Clone is not supported for this script';
$l['invalid_script'] = 'Invalid Script ID';
$l['no_domain_found'] = 'No domain found. Please add a domain to install the script';

$l['no_cron_min'] = '沒有 Cron 的分鐘被指定';
$l['no_cron_hour'] = '沒有 Cron 的小時被指定';
$l['no_cron_day'] = '沒有 Cron 的天被指定';
$l['no_cron_month'] = '沒有 Cron 的月被指定';
$l['no_cron_weekday'] = '沒有 Cron 的工作日被指定';
$l['wrong_cron_min'] = 'Cron 分鐘錯誤. 正確的值為 0-59 或一個 <b>*</b>';
$l['wrong_cron_hour'] = 'Cron 小時錯誤. 正確的值為 0-23 或一個 <b>*</b>';
$l['wrong_cron_day'] = 'Cron 天錯誤. 正確的值為 1-31 或一個 <b>*</b>';
$l['wrong_cron_month'] = 'Cron 月錯誤. 正確的值為 1-12 或一個 <b>*</b>';
$l['wrong_cron_weekday'] = 'Cron 工作日. 正確的值為 0-7 或一個 <b>*</b>';
$l['mail_cron'] = 'Cron 工作';
$l['no_datadir'] = '沒有資料資料夾被指定';
$l['datadir_exists'] = '您所輸入的資料夾名稱已經存在! 請選擇其他的資料夾名稱.';
$l['no_decompress_data'] = '解壓縮資料檔案時發生錯誤.';
$l['some_files_exist'] = '安裝程序無法進行因為以下檔案己經存在於目標資料夾 : ';
$l['delete_files'] = '請刪除這些檔案或選擇其他資料夾.';
$l['overwrite_exist'] = '<b>或</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">選取選擇方塊來覆蓋所有的檔案並繼續</span></b>';
$l['prog_cloning'] = '複製中 '; // Dont remove trailing space
$l['prog_cloning_complete'] = '複製完成.';
$l['checking_data'] = '正在檢查送出的資料';
$l['unzipping_files'] = '正在複製檔案與資料夾';
$l['unzipping_datadir'] = '正在解壓縮資料檔案';
$l['prop_db'] = '正在傳播資料庫';
$l['finishing_process'] = '正在完成複製';
$l['wait_note'] = '<b>注意:</b> 這將會使用到 3-4 分鐘. 請勿離開這個頁面直到處理程序達到 100%';
$l['no_hostname'] = '請輸入您的資料庫域名';
$l['no_dbusername'] = '請輸入您的資料庫使用者名稱';
$l['no_dbuserpass'] = '請輸入您的資料庫使用者密碼';
$l['softdirectory_invalid'] = '您輸入的資料夾是無效的.';
$l['softdirectory_exists'] = '您輸入的資料夾已經存在! 請輸入其他的資料夾名稱.';
$l['softdatadir_invalid'] = '您所輸入的資料資料夾是錯誤的.';
$l['err_domain'] = '沒有域名';
$l['err_domain_admin'] = '這個使用者並沒有任何域名. 請聯絡管理員.';
$l['no_https'] = '一個信任的 SSL連線 無法找到';
$l['no_php_install'] = 'PHP 還沒安裝. 要安裝請點選 <a href="'.$globals['index'].'act=apps&app=1">這裡</a>';
$l['no_mysql_install'] = 'MySQL 還沒安裝. 要安裝請點選<a href="'.$globals['index'].'act=apps&app=16">這裡</a>';
$l['no_field'] = '<b>&soft-1;</b> 欄位是必須要填入的.';
$l['error_adddb'] = '資料庫不能被創建';
$l['error_adduser'] = '新增一個使用者至新的資料庫時發生錯誤';
$l['no_package'] = '安裝包無法被找到!';
$l['no_decompress'] = '解壓縮檔案遇到錯誤.';

//Theme Strings
$l['<title>'] = APP.' - 複製安裝包';
$l['info'] = '資訊';
$l['ins_softname'] = '軟體';
$l['ins_num'] = '安裝號碼';
$l['ins_ver'] = '版本';
$l['ins_time'] = '安裝時間';
$l['ins_path'] = '路徑';
$l['ins_url'] = '連結';
$l['ins_admin_url'] = '管理員連結';
$l['ins_db'] = '資料庫名稱';
$l['ins_dbuser'] = '資料庫使用者';
$l['ins_dbpass'] = '資料庫密碼';
$l['ins_dbhost'] = '資料庫域名';
$l['ins_datadir'] = '資料資料夾';
$l['ins_wwwdir'] = '網頁資料夾';
$l['ins_wwwurl'] = '網頁資料夾連結';
$l['ins_cron_command'] = '複製指令';
$l['cloned'] = '安裝包已經成功複製';
$l['clone_ins'] = '複製安裝包詳細資訊';
$l['cloneins'] = '複製安裝包';
$l['choose_protocol'] = '選擇協議';
$l['choose_protocol_exp'] = '如果您的網頁具有 SSL, 那們請選擇 HTTPS 安全協議.';
$l['cron_job'] = 'CRON 工作';
$l['cron_job_exp'] = '這個語法需要一個 CRON 來工作.請指定一個 CRON 定時任務. 如果您不知道其功用, 隨他而去吧!';
$l['cron_min'] = '分';
$l['cron_hour'] = '小時';
$l['cron_day'] = '日';
$l['cron_month'] = '月';
$l['cron_weekday'] = '周';
$l['datadir'] = '資料資料夾';
$l['datadir_exp'] = '這個語法需要儲存其資訊的一個可透過網頁存取的資料夾. 這將會創建於您的家目錄. 例如 如果您指定了了資料夾名稱 <b>datadir</b> , 將會創建以下資料夾 - /home/username/<b>datadir</b>';
$l['db_name_long'] = '資料庫名稱不能大於 7 個字元. 請選擇短一點的資料庫名稱.';
$l['db_alpha_num'] = '只有英文字母以及數字才可以成為資料庫的名稱.';
$l['overwrite'] = '覆寫文件';
$l['database_exists'] = '資料庫已經存在. 請選擇另一個名稱.';
$l['no_softdomain'] = '您沒有選擇要安裝這個軟體的域名.';
$l['wrong_softdomain'] = '您選擇的域名路徑無法被找到.';
$l['no_space'] = '您沒有足夠的空間來安裝這個軟體!';
$l['no_softdb'] = '資料庫沒有被告示 (posted).';
$l['choose_domain'] = '選擇域名';
$l['choose_domain_exp'] = '請選擇要安裝軟體的域名.';
$l['in_directory'] = '在資料夾裡';
$l['in_directory_exp'] = '您所輸入的資料夾 <b>不應存在</b> 您的域名. 例如要安裝在 http://mydomain/dir/ 只需輸入 <b>dir</b>.';
$l['database_name'] = '資料庫名稱';
$l['database_name_exp'] = '為安裝包輸入需要創建的資料庫名稱';
$l['softcopy_note'] = '<b>警告</b>: 這個軟體需要由其本身的安裝工具進行. 請訪問複製檔案後所出現的連結來完成安裝程序.';
$l['softsubmit'] = 'Clone';
$l['congrats'] = 'Congratulations, the installation was cloned successfully';
$l['succesful'] = 'has been successfully cloned at';
$l['admin_url'] = 'Administrative URL';
$l['setup_continue'] = '不過, 安裝程序還是需要由軟體本身完成, 請訪問以下連結';
$l['enjoy'] = '我們希望安裝過程是簡單的.';
$l['install_notes'] = '以下為一些重要的訊息. 我們強烈建議您閱讀它們 ';
$l['please_note'] = '<b>注意</b>: '.APP.' 只是一個自動安裝器, 不需負責任何其他個別的安裝程序. 請瀏覽該語法供應商的網站獲取支援!';
$l['regards'] = '誠摯的';
$l['softinstaller'] = APP.' 自動安裝器';
$l['return'] = '回到總覽';
$l['softinstaller'] = APP.' 自動安裝器';
$l['return'] = '回到總覽';

// These strings are for Softaculous Remote
$l['hostname'] = '資料庫主機名稱';
$l['hostname_exp'] = 'MySQL 主機 (通常為 <b>localhost</b>)';
$l['dbusername'] = '資料庫使用者名稱';
$l['dbusername_exp'] = '資料庫的用戶名稱';
$l['dbuserpass'] = '資料庫的密碼';
$l['dbuserpass_exp'] = 'MySQL 用戶名稱的密碼';
$l['database_name_exp_aefer'] = '輸入安裝需求的資料庫';

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