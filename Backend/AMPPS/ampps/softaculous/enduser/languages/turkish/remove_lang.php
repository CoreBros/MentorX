<?php

//////////////////////////////////////////////////////////////
//===========================================================
// remove_lang.php
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

$l['no_ins'] = 'Hiç kurulum yok';
$l['wrong_ins_title'] = 'Kurulum id si yanlış';
$l['wrong_ins'] = 'Girdiğiniz id\'ye ait kurulum yok';
$l['cant_remove_dir'] = 'Ana dizininiz silinemez. Lütfen <b>Dizini Sil</b> seçeneğini kaldırdıktan sonra devam ediniz.';
$l['cant_remove_wwwdir'] = 'The WEB directory cannot be removed as it is the home directory. Please uncheck the <b>Remove Web Directory</b> option to continue without removing the web directory.';
$l['mail_rem_ins'] = '&soft-1; kurulumu silindi. İşlemin detayları aşağıda : ';
$l['mail_path'] = 'Yol';
$l['mail_url'] = 'URL';
$l['mail_db'] = 'MySQL Veri Tabanı';
$l['mail_dbuser'] = 'MySQL DB Kullanıcısı';
$l['mail_dbhost'] = 'MySQL DB Hostu';
$l['mail_dbpass'] = 'MySQL DB Şifresi';
$l['mail_time'] = 'Kurulum Zamanı';
$l['mail_rem_time'] = 'Silme Zamanı';
$l['mail_subject'] = '&soft-1; Silindi';
$l['mail_cron_command'] = 'CRON İşi';
$l['mail_datadir'] = 'Veri Dizini';
$l['mail_wwwdir'] = 'Web Directory';
$l['checking_data'] = 'Checking the submitted data';
$l['rem_db'] = 'Removing the Database/Database User';
$l['rem_dir'] = 'Removing the Directory';
$l['rem_datadir'] = 'Removing the Data Directory';
$l['rem_cron'] = 'Removing the Cron Jobs';
$l['finishing_process'] = 'Removed Successfully';
$l['wait_note'] = '<b>NOTE:</b> This may take 3-4 minutes. Please do not leave this page until the progress bar reaches 100%';


//Theme Strings
$l['<title>'] = APP.' - Sil';
$l['info'] = 'Bilgi';
$l['ins_softname'] = 'Script';
$l['ins_num'] = 'Kurulum Numarası';
$l['ins_ver'] = 'Versyion';
$l['ins_time'] = 'Kurulum Zamanı';
$l['ins_path'] = 'Yol';
$l['ins_url'] = 'URL';
$l['ins_db'] = 'Veri Tabanı Adı';
$l['ins_dbuser'] = 'Veri Tabanı Kullanıcı Adı';
$l['ins_dbpass'] = 'Veri Tabanı Şifresi';
$l['ins_dbhost'] = 'Veri Tabanı Hostu';
$l['remove_ins'] = 'Kurulum Silme';
$l['remove_dir'] = 'Dizin Silme';
$l['remove_dir_exp'] = 'Klasörü de silmek için seçiniz';
$l['remove_db'] = 'Veri Tabanı Silme';
$l['remove_db_exp'] = 'Eğer seçili ise veri tabanınız silinir';
$l['remove_dbuser'] = 'Veri tabanı kullanıcısını sil';
$l['remove_dbuser_exp'] = 'Eğer seçili ise veri tabanı kullanıcısı silinir';
$l['remove_conf'] = 'Bu işlemin geri dönüşü yoktur! \n Kurulumu silmek istediğinize emin misiniz ?';
$l['uninstalled'] = 'Kurulum başarıyla silindi';
$l['removeins'] = 'Kurulum Sil';
$l['ins_cron_command'] = 'Cron Komutu';
$l['remove_datadir'] = 'Veri Dizinini Sil';
$l['remove_datadir_exp'] = 'Eğer seçili ise Veri Dizini Silinir.';
$l['ins_datadir'] = 'Veri Dizini';
$l['remove_wwwdir'] = 'Remove Web Directory';
$l['remove_wwwdir_exp'] = 'If checked the web directory will be removed.';
$l['ins_wwwdir'] = 'Web Directory';
$l['return'] = 'Genel Bakışa Geri Dön';
$l['prog_removing'] = 'Removing ';// Dont remove the trailing space
$l['prog_remove_complete'] = 'Installation Removed.';
$l['disabled_script_info'] = 'No information available as this script has been disabled.';

$l['wpc_return'] = 'Return to Installations';