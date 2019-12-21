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

$l['no_info_file'] = '找不到 INFO.XML 檔案! 請回報這個至您的伺服器管理員.';
$l['incompatible'] = '這個軟體需要更高版本的 '.APP.'! 請回報這個至您的伺服器管理員.';
$l['no_install'] = '找不到 INSTALL.XML 檔案! 請回報這個至您的伺服器管理員.';
$l['no_functions'] = '找不到 INSTALL FUNCTIONS 檔案! 請回報這個至您的伺服器管理員.';
$l['no_softdomain'] = '您沒有選擇要安裝這個軟體的域名.';
$l['wrong_softdomain'] = '您選擇的域名路徑無法被找到.';
$l['softdirectory_exists'] = '您所輸入的資料夾已經存在! 請輸入另一個資料夾名稱.';
$l['no_space'] = '您沒有足夠的空間來安裝這個軟體!';
$l['no_softdb'] = '資料庫沒有被告示 (posted).';
$l['database_exists'] = '資料庫已經存在. 請選擇另一個名稱.';
$l['databaseuser_exists'] = '資料庫使用者名稱已經存在. 請選擇另一個名稱.';
$l['db_name_long'] = '資料庫名稱不能大於 7 個字元. 請選擇短一點的資料庫名稱.';
$l['db_limit_crossed'] = '您已經達到了最大資料庫建立數, 因此安裝程序無法進行.';
$l['no_field'] = '<b>&soft-1;</b> 欄位是必須要填入的.';
$l['error_adddb'] = '資料庫不能被創建';
$l['error_adduser'] = '新增一個使用者至新的資料庫時發生錯誤';
$l['no_package'] = '無法找到安裝包';
$l['no_decompress'] = '解壓縮檔案時發生錯誤.';
$l['mail_new_ins'] = '一個新的 &soft-1; 更新已經完成. 以下為安裝包詳細訊息:';
$l['mail_path'] = '路徑';
$l['mail_url'] = '網址';
$l['mail_admin_url'] = '管理員連結';
$l['mail_admin'] = '管理員使用者名稱';
$l['mail_pass'] = '管理員密碼';
$l['mail_db'] = 'MySQL 資料庫';
$l['mail_dbuser'] = 'MySQL 資料庫使用者名稱';
$l['mail_dbhost'] = 'MySQL 資料庫域名';
$l['mail_dbpass'] = 'MySQL 資料庫密碼';
$l['mail_time'] = '安裝次數';
$l['mail_subject'] = '&soft-1; 的新的安裝';
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
$l['mail_datadir'] = '資料資料夾';
$l['datadir_exists'] = '您所輸入的資料夾名稱已經存在! 請選擇其他的資料夾名稱.';
$l['no_decompress_data'] = '解壓縮資料檔案時發生錯誤.';
$l['mail_datadir'] = '資料資料夾';
$l['some_files_exist'] = '安裝程序無法進行因為以下檔案己經存在於目標資料夾 : ';
$l['delete_files'] = '請刪除這些檔案或選擇其他資料夾.';
$l['overwrite_exist'] = '<b>或</b> <br />選取選擇方塊來覆蓋所有的檔案並繼續';
$l['checking_data'] = 'Performing Initial Steps';
$l['checking_dependencies'] = 'Computing the dependencies to be installed';
$l['installing_dependencies'] = 'Installing the dependencies';
$l['installing_package'] = 'Installing the application';
$l['unzipping_files'] = '正在複製檔案與資料夾';
$l['wait_note'] = '<b>注意:</b> 這將會使用到 3-4 分鐘. 請勿離開這個頁面直到處理程序達到 100%';
$l['no_hostname'] = '請輸入您的主機名稱';
$l['no_dbusername'] = '請輸入您的使用者名稱';
$l['no_dbuserpass'] = '請輸入您的密碼';
$l['softdirectory_invalid'] = '您輸入的資料夾是錯誤的.';
$l['softdatadir_invalid'] = '您輸入的資料資料夾是錯誤的.';
$l['no_installation'] = 'No installation found';
$l['no_dep_found'] = 'Could not find dependency <b>&soft-1;</b> for <b>&soft-2;</b>';
$l['err_dep_install'] = 'There was an error installing dependency <b>&soft-1;</b> for <b>&soft-2;</b>';
$l['err_extract'] = 'There was an error extracting the package -';
$l['err_dep_remove'] = '<b>&soft-1;</b> is required by <b>&soft-2;</b>. Hence, cannot be removed.';
$l['no_app_info'] = 'Could not find the applications information';
$l['ins_finishing_process'] = 'Finishing Installation';
$l['rem_finishing_process'] = 'Removed Successfully';

$l['prog_removing'] = 'Removing ';// Dont remove the trailing space
$l['prog_remove_complete'] = 'Installation Removed.';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['install'] = 'Install';
$l['overview'] = 'Overview';
$l['features'] = 'Features';
$l['demo'] = 'Demo';
$l['ratings'] = 'Ratings';
$l['import'] = 'Import';
$l['software_ver'] = 'Version';
$l['space_req'] = 'Space Required';
$l['available_space'] = 'Available Space';
$l['req_space'] = 'Required Space';
$l['mb'] = 'MB';
$l['software_support'] = 'Software Support';
$l['support_link'] = 'Visit Support Site';
$l['support_note'] = 'Note: Softaculous does not provide support for any software.';
$l['setup'] = 'Software Setup';
$l['choose_domain'] = 'Choose Domain';
$l['choose_domain_exp'] = 'Please choose the domain to install the software.';
$l['in_directory'] = 'In Directory';
$l['in_directory_exp'] = 'The directory is relative to your domain and <b>should not exist</b>. e.g. To install at http://mydomain/dir/ just type <b>dir</b>. To install only in http://mydomain/ leave this empty.';
$l['database_name'] = 'Database Name';
$l['database_name_exp'] = 'Type the name of the database to be created for the installation';
$l['softcopy_note'] = '<b>NOTE</b>: This software requires that it be installed using its own installation utility. Please visit the URL that will be shown once the files have been copied to complete the installation process.';
$l['softsubmit'] = 'Install';
$l['congrats'] = 'Congratulations, the software was installed successfully';
$l['succesful'] = 'has been successfully installed.';
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
$l['current_ins'] = '目前的安裝包';
$l['link'] = '連結';
$l['ins_time'] = '安裝時間';
$l['version'] = '版本';
$l['upd_to'] = '升級到最新版本';
$l['remove'] = '移除';
$l['no_info'] = '沒有資訊';
$l['randpass'] = '創造一個隨機密碼';
$l['ratesoft'] = '評分這個語法';
$l['reviews'] = '評價';
$l['reviewsoft'] = '撰寫一個評價';
$l['readreviews'] = '閱讀評價';
$l['reviews_exp'] = '閱讀其他使用者評價以及';
$l['cron_job'] = 'CRON 工作';
$l['cron_job_exp'] = '這個語法需要一個 CRON 來工作.請指定一個 CRON 定時任務. 如果您不知道其功用, 隨他而去吧!';
$l['cron_min'] = '分';
$l['cron_hour'] = '小時';
$l['cron_day'] = '日';
$l['cron_month'] = '月';
$l['cron_weekday'] = '周';
$l['datadir'] = '資料資料夾';
$l['datadir_exp'] = '這個語法需要儲存其資訊的一個可透過網頁存取的資料夾. 這將會創建於您的家目錄. 例如 如果您指定了了資料夾名稱 <b>datadir</b> , 將會創建以下資料夾 - /home/username/<b>datadir</b>';
$l['db_alpha_num'] = '只有英文字母以及數字才可以成為資料庫的名稱.';
$l['overwrite'] = '覆寫文件';
$l['ins_emailto'] = '寄送一封具有安裝資訊的電子郵件給';
$l['choose_protocol'] = '選擇協議';
$l['choose_protocol_exp'] = '如果您的網頁具有 SSL, 那們請選擇 HTTPS 安全協議.';
$l['clone'] = '複製';
$l['backup'] = '備份';
$l['options'] = '選項';
$l['admin'] = '管理員';
$l['notify_ver'] = '告知 '.$globals['sn'].' 一個新的版本';
$l['notifyversion'] = '感謝您告知一個新版本. 我們將會盡可能快速的去調查他';
$l['del_insid'] = '您確定您想要移除選擇的安裝包嗎? 這個動作將無法復原. \n沒有進一步的項目將會被詢問.';
$l['rem_inst_id'] = '正在移除安裝包 - ';
$l['no_sel_inst'] = '沒有選擇的安裝包要被移除.';
$l['inst_remvd'] = '選擇的安裝包已經刪除. 頁面正在重新整理中 !';
$l['remove'] = '移除';
$l['go'] = '執行';
$l['screenshots'] = '截圖';
$l['downloading'] = '正在下載安裝包';
$l['installing'] = '正在安裝語法';
$l['editdetail'] = '編輯詳細資訊';
$l['publish'] = '發布到網際網路';
$l['hostname'] = '資料庫域名名稱';
$l['hostname_exp'] = 'MySQL 域名 (通常為 <b>localhost</b>)';
$l['dbusername'] = '資料庫使用者名稱';
$l['dbusername_exp'] = 'MySQL 資料庫使用者名稱';
$l['dbuserpass'] = '資料庫密碼';
$l['dbuserpass_exp'] = 'MySQL 資料庫使用者密碼';
$l['database_name_exp_aefer'] = '請輸入語法會用到的資料庫名稱';
$l['sel_version'] = '選擇版本';
$l['choose_version_exp'] = '請選擇要安裝的版本.';
$l['choose_version'] = '選擇您要的版本來安裝';
$l['select'] = '選擇';
$l['release_date'] = '釋放日期';
$l['adv_option'] = '進階選項';
$l['disable_notify_update'] = '取消升級提醒';
$l['exp_disable_notify_update'] = '如果選擇了這個選項將不會傳送此語法的更新訊息至您的電子信箱.';
$l['prog_installing'] = '安裝中 '; // Dont remove trailing space
$l['prog_install_complete'] = '安裝完成.';
$l['iagree'] = 'I agree to the Terms and Conditions of &soft-1; License';
$l['notes'] = 'Notes';
$l['uninstalled'] = 'The Application was removed successfully';

$l['disable_sysapps'] = 'This functionality has been disabled from the Webuzo Admin Panel';
$l['no_cli_force'] = 'Please use --force to install this application. Since conflicting app is already installed.';
$l['conflict_check_box'] = 'Please tick the checkbox to install ';
$l['removing'] = 'Removing Application';
$l['install_tweet_sub'] = 'Tell your friends about your new application ';
$l['not_in_free'] = '<b>&soft-1;</b> cannot be installed in the Free version of Webuzo. Please upgrade to the premium version of Webuzo!';
