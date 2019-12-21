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

$l['no_info_file'] = '指定的 ID 沒有符合的分類';
$l['incompatible'] = '這個語法需求更高版本的 '.APP.'! 請回報給您的伺服器管理員.';
$l['no_install'] = 'INSTALL.XML 檔案無法被找到! 請回報給您的伺服器管理員.';
$l['no_functions'] = 'INSTALL FUNCTIONS 檔案無法被找到! 請回報給您的伺服器管理員.';
$l['no_softdomain'] = '您還沒選擇一個域名來安裝這個語法.';
$l['wrong_softdomain'] = '找不到您所指定域名的路徑.';
$l['no_space'] = '您沒有足夠的空間來安裝這個語法!';
$l['no_field'] = '表單 <b>&soft-1;</b> 是必填欄位.';
$l['no_package'] = '安裝包無法被找到!';
$l['no_decompress'] = '解壓縮檔案遇到錯誤.';
$l['mail_new_ins'] = '&soft-1; 的新安裝包已經下載完成. 安裝包的詳細資訊已經顯示於下方:';
$l['mail_path'] = '路徑';
$l['mail_url'] = '連結';
$l['mail_time'] = '安裝時間';
$l['mail_subject'] = '新的 &soft-1; 安裝包';
$l['some_files_exist'] = '安裝程序無法執行因為以下的檔案已經存在於目的資料夾 : ';
$l['delete_files'] = '請刪除這些檔案或選擇其他資料夾.';
$l['checking_data'] = '正在檢查輸出的資料';
$l['unzipping_files'] = '正在複製檔案及資料夾';
$l['unzipping_datadir'] = '正在解壓縮資料檔案';
$l['prop_db'] = '正在建立資料庫';
$l['finishing_process'] = '即將完成安裝程序';
$l['wait_note'] = '<b>注意:</b> 這將會使用到 3-4 分鐘. 請勿離開這個頁面直到處理程序達到 100%';
$l['cant_download'] = '無法下載壓縮檔案.';
$l['softdirectory_invalid'] = '您輸入的資料夾是無效的.';
$l['softdirectory_exists'] = '您輸入的資料夾已經存在! 請輸入其他的資料夾名稱.';
$l['ins_emailto'] = '傳送安裝包資訊至電子郵件';
$l['disable_classes'] = 'PHP Classes are disabled by admin or you are using '.APP.' Free version';
$l['invalid_class_id'] = 'Invalid Class ID';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['install'] = '安裝';
$l['overview'] = '重新命名';
$l['features'] = '功能';
$l['demo'] = '範例';
$l['file'] = '檔案';
$l['ratings'] = '評分';
$l['import'] = '匯入';
$l['software_ver'] = '版本';
$l['space_req'] = '需求空間';
$l['available_space'] = '可用空間';
$l['req_space'] = '空間需求';
$l['mb'] = 'MB';
$l['software_support'] = '語法支援';
$l['support_link'] = '訪問語法支援網頁';
$l['support_note'] = '注意: Softaculous 不需提供任何語法的支援.';
$l['setup'] = '語法安裝';
$l['choose_domain'] = '選擇域名';
$l['choose_domain_exp'] = '請選擇一個域名來安裝語法.';
$l['in_directory'] = '於資料夾';
$l['in_directory_exp'] = '資料夾位置為您電腦的相對路徑且<b>當沒有對應的資料夾將會自動創建</b>. 例如 安裝於 &soft-1;/dir 只需要輸入 <b>dir</b>. 只要安裝在 &soft-1;/ 留下空白的.';
$l['aef_in_directory_exp'] = '資料夾位置為您電腦的相對路徑且<b>當沒有對應的資料夾將會自動創建</b>. 例如 安裝於 <span id="aef_span_lang">&soft-1;</span>/dir 只需要輸入 <b>dir</b>. 只要安裝在 <span id="aef_span_lang_a">&soft-1;</span>/ 留下空白的.';
$l['softsubmit'] = '安裝';
$l['congrats'] = '恭喜, 語法已經成功安裝';
$l['succesful'] = '成功安裝於';
$l['enjoy'] = '我們希望安裝程序是簡單的.';
$l['install_notes'] = '以下為一些重要的資訊. 我們強烈建議您閱讀他們 ';
$l['please_note'] = '<b>注意</b>: '.APP.' 只是一個自動安裝器且不需支援語法. 請於創建者網頁尋求支援!';
$l['regards'] = '誠摯的';
$l['softinstaller'] = APP.' 自動安裝器';
$l['return'] = '回到總覽';
$l['current_ins'] = '目前安裝包';
$l['link'] = '連結';
$l['ins_time'] = '安裝時間';
$l['version'] = '版本';
$l['upd_to'] = '升級到版本';
$l['remove'] = '移除';
$l['no_info'] = '沒有資訊';
$l['ratesoft'] = '評價語法';
$l['reviews'] = '評價';
$l['reviewsoft'] = '撰寫評價';
$l['readreviews'] = '閱讀評價';
$l['reviews_exp'] = '觀看其他用戶撰寫的評價及';
$l['ins_type'] = '安裝模式';
$l['ins_type_exp'] = '<b>原始安裝包</b> - 安裝包於其網頁是有效的. <br /> <b>只是資料檔案</b> - 只是 Javascript 資料檔案.';
$l['ori_pack'] = '原始安裝包';
$l['just_lib'] = '只是資料檔案';
$l['overwrite_exist'] = '<b>或</b> <br /><input type="checkbox" name="overwrite_existing" id="overwrite_existing" />&nbsp;&nbsp;<b><span style="color:#000;">選取選擇欄位來覆蓋所有的檔案</span></b>';
$l['overwrite'] = '覆蓋檔案';
$l['choose_protocol'] = '選擇條約';
$l['choose_protocol_exp'] = '如果您的網站有 SSL, 那麼請選擇 HTTPS 條約.';
$l['downloading'] = '正在下載安裝包';
$l['installing'] = '正在安裝語法';
$l['files'] = '檔案 & 資料夾';
$l['modified_time'] = '最後編輯';
$l['size'] = '大小';
$l['classes_ins_error'] = '儲存安裝包資訊時發生了錯誤.';
$l['del_insid'] = '您確定您要移除選擇的安裝包嗎 ? 這個動作將無法復原. \n沒有其餘的資訊將會被詢問.';
$l['rem_inst_id'] = '正在移除安裝包 - ';
$l['no_sel_inst'] = '沒有選擇的安裝包要被移除.';
$l['inst_remvd'] = '選擇的安裝包已經刪除. 頁面正在重新整理中 !';
$l['go'] = 'Go';
$l['download_zip'] = '下載所有檔案 ';
$l['software_category'] = '分類';
$l['adv_option'] = '進接選項';
$l['disable_notify_update'] = '取消更新通知';
$l['exp_disable_notify_update'] = '如果選擇這個選項將不會寄送任何有關於可用更新的電子郵件有關於這個安裝包.';
$l['prog_installing'] = '安裝中 ';// Dont remove the trailing space
$l['prog_install_complete'] = '安裝完成.';

$l['install_tweet_sub'] = 'Tell your friends';
$l['select_domain'] = 'Select Domain';
$l['with_selected'] = 'With Selected';
$l['download'] = 'Download';