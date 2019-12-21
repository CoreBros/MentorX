<?php

//////////////////////////////////////////////////////////////
//===========================================================
// upgrade.php(For individual softwares)
//===========================================================
// SOFTACULOUS 
// Version : 1.0
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

/////////////////////////////////////////
// All functions in this PAGE must begin
// with TWO UNDERSCORE '__' to avoid 
// clashes with SOFTACULOUS Functions
// e.g. __funcname()
/////////////////////////////////////////

//////////////////////////////////////////
// Note : The path of the upgrade package 
//        is $software['path'].'/' . So to
//        access other files use 
//        $software['path'].'/other_file.ext'
//////////////////////////////////////////

// NOTE: $__settings will contain the installation information like PATH, URL. They are :
//       $__settings['ver'] - The version of the current installation
//		 $__settings['itime'] - When the software was installed
//		 $__settings['softpath'] - The current PATH
//		 $__settings['softurl'] - The URL of the software
//		 IF database was made by Softaclous
//		 $__settings['softdb'] - The Database name
//		 $__settings['softdbuser'] - Database User
//		 $__settings['softdbhost'] - Database Host
//		 $__settings['softdbpass'] - Database Password

//The Upgrade process
function __upgrade($version_from){

global $__settings, $globals, $setupcontinue, $software, $notes;

	//Uncomment this when we enable upgrade on non suPHP servers.
	/* // CHMOD
	@schmod($__settings['softpath'].'/infusions/blog/', $globals['odc']);
	@schmod($__settings['softpath'].'/infusions/blog/images/', $globals['odc']);
	@schmod($__settings['softpath'].'/infusions/blog/images/thumbs/', $globals['odc']);
	@schmod($__settings['softpath'].'/infusions/blog/blog_cats/', $globals['odc']);
	@schmod($__settings['softpath'].'/infusions/downloads/', $globals['odc']);
	@schmod($__settings['softpath'].'/infusions/downloads/files/', $globals['odc']);
	@schmod($__settings['softpath'].'/infusions/downloads/images/', $globals['odc']);
	@schmod($__settings['softpath'].'/infusions/downloads/submissions/', $globals['odc']);
	@schmod($__settings['softpath'].'/infusions/downloads/submissions/images/', $globals['odc']);
	@schmod($__settings['softpath'].'/infusions/forum/attachments/', $globals['odc']);
	@schmod($__settings['softpath'].'/infusions/news/images/', $globals['odc']);
	@schmod($__settings['softpath'].'/infusions/news/images/thumbs/', $globals['odc']);
	@schmod($__settings['softpath'].'/infusions/news/news_cats/', $globals['odc']);
	@schmod($__settings['softpath'].'/infusions/gallery/photos/', $globals['odc']);
	@schmod($__settings['softpath'].'/infusions/gallery/photos/thumbs/', $globals['odc']);
	@schmod($__settings['softpath'].'/infusions/gallery/submissions/', $globals['odc']);
	@schmod($__settings['softpath'].'/downloads/', $globals['odc']);
	@schmod($__settings['softpath'].'/downloads/images/', $globals['odc']);
	@schmod($__settings['softpath'].'/downloads/submissions/', $globals['odc']);
	@schmod($__settings['softpath'].'/downloads/submissions/images/', $globals['odc']);
	@schmod($__settings['softpath'].'/ftp_upload/', $globals['odc']);	
	@schmod($__settings['softpath'].'/robots.txt', $globals['ofc']);
	 */
	if(sversion_compare($__settings['ver'], '9.0', '<')){	
	
		$notes = 'After completing the script upgrade process please apply safe permissions to the config file : <b>'.$__settings['softpath'].'/config.php</b><br /> and also delete the installer file: <b>'.$__settings['softpath'].'/install.php</b>';
		
	}
	
	/* $notes = "Please login to your site as the Super Administrator. Under the System Admin tab of the Admin Panel, click on Upgrade then click the button marked Upgrade. YOU MUST perform the upgrade first! The upgrade process will complete only when you see 'Database upgrade complete'."; */
	
}

//Check whether the Minimum Software configuration matches
function __requirements(){

global $__settings, $error, $software;

	/* if(sversion_compare($__settings['ver'], '7.02.05', '<')){
		$error[] = 'It is not possible to upgrade PHP-fusion from version less than 7.02.05.';
	} */
	
	//This is because script requires root directory writable to rename config.php post upgrade
	if(sversion_compare($__settings['ver'], '9.0', '<')){
		//Is suPHP enabled ?
		if(sis_suphp() == false){
			$error[] = 'suPHP must be enabled to upgrade PHP-Fusion.';
		}
	}
	
	if(!checkbox('create_backup') && !checkbox('force_upgrade')){
			$error[] = '<input type="checkbox" name="force_upgrade" '.POSTChecked('force_upgrade').' /> It seems you have not chosen to back up your installation. If you have made changes into any custom theme files then please take backup. Continue anyway ? ';
	}
	
	return true;
}

//The Upgrade Files
function __pre_unzip(){

global $__settings, $error, $software, $globals, $__delete_folders, $__delete_files;
	
	if(sversion_compare($__settings['ver'], '9.0', '<')){
		
		foreach($__settings['fileindex'] as $k => $v){
			if(!empty($v) && $v != 'images' && $v != 'infusions' && $v != 'config.php'){
				srm($__settings['softpath'].'/'.$v);
			}
		}
		/* $__delete_files = array(
			'/articles.php',
			'/downloads.php',
			'/faq.php',
			'/news.php',
			'/news_cats.php',
			'/photo.php',
			'/photogallery.php',
			'/readarticle.php',
			'/setup.php',
			'/setuser.php',
			'/showphoto.php',
			'/weblinks.php',
			'/administration/articles.php',
			'/administration/article_cats.php',
			'/administration/downloads.php',
			'/administration/download_cats.php',
			'/administration/faq.php',
			'/administration/forums.php',
			'/administration/forums_prune.php',
			'/administration/articles.php',
			'/administration/forum_ranks.php',
			'/administration/navigation.php',
			'/administration/news.php',
			'/administration/news_cats.php',
			'/administration/panel_editor.php',
			'/administration/photoalbums.php',
			'/administration/photos.php',
			'/administration/polls.php',
			'/administration/settings_dl.php',
			'/administration/settings_forum.php',
			'/administration/settings_ipp.php',
			'/administration/settings_news.php',
			'/administration/settings_photo.php',
			'/administration/site_links_updater.php',
			'/administration/submissions.php',
			'/administration/user_field_cats.php',
			'/administration/weblinks.php',
			'/administration/weblink_cats.php',
			'/administration/images/admins.gif',
			'/administration/images/admin_pass.gif',
			'/administration/images/articles.gif',
			'/administration/images/article_cats.gif',
			'/administration/images/banners.gif',
			'/administration/images/bbcode.gif',
			'/administration/images/bbcodes.gif',
			'/administration/images/blacklist.gif',
			'/administration/images/c-pages.gif',
			'/administration/images/db_backup.gif',
			'/administration/images/dl.gif',
			'/administration/images/dl_cats.gif',
			'/administration/images/errors.gif',
			'/administration/images/faq.gif',
			'/administration/images/forums.gif',
			'/administration/images/forum_ranks.gif',
			'/administration/images/images.gif',
			'/administration/images/infusions.gif',
			'/administration/images/infusion_panel.gif',
			'/administration/images/members.gif',
			'/administration/images/news.gif',
			'/administration/images/news_cats.gif',
			'/administration/images/panels.gif',
			'/administration/images/photoalbums.gif',
			'/administration/images/phpinfo.gif',
			'/administration/images/polls.gif',
			'/administration/images/registration.gif',
			'/administration/images/robots.gif',
			'/administration/images/security.gif',
			'/administration/images/settings.gif',
			'/administration/images/settings_dl.gif',
			'/administration/images/settings_forum.gif',
			'/administration/images/settings_ipp.gif',
			'/administration/images/settings_misc.gif',
			'/administration/images/settings_news.gif',
			'/administration/images/settings_pm.gif',
			'/administration/images/settings_time.gif',
			'/administration/images/settings_users.gif',
			'/administration/images/shout.gif',
			'/administration/images/site_links.gif',
			'/administration/images/smileys.gif',
			'/administration/images/submissions.gif',
			'/administration/images/upgrade.gif',
			'/administration/images/user_fields.gif',
			'/administration/images/user_fields_cats.gif',
			'/administration/images/user_groups.gif',
			'/administration/images/wl.gif',
			'/administration/images/wl_cats.gif',
			'/downloads/index.php',
			'/downloads/images',
			'/images/dl_downloads.png',
			'/images/dl_homepage.png',
			'/images/dl_info.png',
			'/images/dl_screenshot.png',
			'/images/dl_stats.png',
			'/images/edit.png',
			'/images/favicon.ico',
			'/images/go_first.png',
			'/images/go_last.png',
			'/images/go_next.png',
			'/images/go_previous.png',
			'/images/no.png',
			'/images/php_save.png',
			'/images/printer.png',
			'/images/rss.gif',
			'/images/star.png',
			'/images/tick.png',
			'/images/warn.png',
			'/images/watermark.png',
			'/images/yes.png',
			'/images/smiley/angry.gif',
			'/images/smiley/cool.gif',
			'/images/smiley/frown.gif',
			'/images/smiley/grin.gif',
			'/images/smiley/pfft.gif',
			'/images/smiley/sad.gif',
			'/images/smiley/shock.gif',
			'/images/smiley/smile.gif',
			'/images/smiley/wink.gif',
			'/includes/bbcodes/movie_bbcode_/include.php',
			'/includes/bbcodes/movie_bbcode_/include_var.php',
			'/includes/bbcodes/tlen_bbcode_/include.php',
			'/includes/bbcodes/tlen_bbcode_/include_var.php',
			'/includes/bbcodes/images/allegro.png',
			'/includes/bbcodes/images/alt.png',
			'/includes/bbcodes/images/b.png',
			'/includes/bbcodes/images/bcolor.png',
			'/includes/bbcodes/images/big.png',
			'/includes/bbcodes/images/center.png',
			'/includes/bbcodes/images/code.png',
			'/includes/bbcodes/images/code_save.png',
			'/includes/bbcodes/images/color.png',
			'/includes/bbcodes/images/ebay.png',
			'/includes/bbcodes/images/flash.png',
			'/includes/bbcodes/images/geshi.png',
			'/includes/bbcodes/images/geshi_save.png',
			'/includes/bbcodes/images/gg.png',
			'/includes/bbcodes/images/google.png',
			'/includes/bbcodes/images/googlevideo.png',
			'/includes/bbcodes/images/hide.png',
			'/includes/bbcodes/images/i.png',
			'/includes/bbcodes/images/icq.png',
			'/includes/bbcodes/images/img.png',
			'/includes/bbcodes/images/justify.png',
			'/includes/bbcodes/images/left.png',
			'/includes/bbcodes/images/mail.png',
			'/includes/bbcodes/images/movie.png',
			'/includes/bbcodes/images/mp.png',
			'/includes/bbcodes/images/olist.png',
			'/includes/bbcodes/images/php.png',
			'/includes/bbcodes/images/php_save.png',
			'/includes/bbcodes/images/quote.png',
			'/includes/bbcodes/images/right.png',
			'/includes/bbcodes/images/search.png',
			'/includes/bbcodes/images/size.png',
			'/includes/bbcodes/images/small.png',
			'/includes/bbcodes/images/small.png',
			'/includes/bbcodes/images/smiley.png',
			'/includes/bbcodes/images/tlen.png',
			'/includes/bbcodes/images/u.png',
			'/includes/bbcodes/images/ulist.png',
			'/includes/bbcodes/images/url.png',
			'/includes/bbcodes/images/yahoo.png',
			'/includes/bbcodes/images/youtube.png',
			'/includes/captchas/recaptcha/captcha_check.php',
			'/includes/captchas/recaptcha/captcha_display.php',
			'/includes/captchas/recaptcha/index.php',
			'/includes/captchas/recaptcha/recaptchalib.php',
			'/includes/captchas/securimage/captcha_check.php',
			'/includes/captchas/securimage/captcha_display.php',
			'/includes/captchas/securimage/elephant.ttf',
			'/includes/captchas/securimage/index.php', 
			'/includes/captchas/securimage/LICENSE.txt',
			'/includes/captchas/securimage/securimage.php',
			'/includes/captchas/securimage/securimage_play.php',
			'/includes/captchas/securimage/securimage_show.php',
			'/includes/captchas/securimage/gdfonts/automatic.gdf',
			'/includes/captchas/securimage/gdfonts/bubblebath.gdf',
			'/includes/captchas/securimage/gdfonts/caveman.gdf',
			'/includes/captchas/securimage/gdfonts/crass.gdf',
			'/includes/captchas/securimage/gdfonts/index.php',
			'/includes/captchas/securimage/images/audio_icon.gif',
			'/includes/captchas/securimage/images/index.php',
			'/includes/captchas/securimage/images/refresh.gif',
			'/includes/captchas/securimage/captcha_check.php',
			'/includes/captchas/securimage/captcha_display.php',
			'/includes/captchas/securimage/index.php',
			'/includes/captchas/securimage/securimage.php',
			'/includes/captchas/securimage/securimage_play.php',
			'/includes/captchas/securimage/securimage_play.swf',
			'/includes/captchas/securimage/securimage_show.php',
			'/includes/captchas/securimage/backgrounds/index.php',
			'/includes/captchas/securimage/backgrounds/GIF/bg.gif',
			'/includes/captchas/securimage/backgrounds/GIF/bg.gif',
			'/includes/captchas/securimage/backgrounds/GIF/bg.gif',
			'/includes/captchas/securimage/backgrounds/GIF/bg.gif',
			'/includes/captchas/securimage/backgrounds/GIF/bg.gif',
			'/includes/captchas/securimage/backgrounds/GIF/index.php',
			'/includes/captchas/securimage/backgrounds/PNG/bg.png',
			'/includes/captchas/securimage/backgrounds/PNG/bg.png',
			'/includes/captchas/securimage/backgrounds/PNG/bg.png',
			'/includes/captchas/securimage/backgrounds/PNG/bg.png',
			'/includes/captchas/securimage/backgrounds/PNG/index.php',
			'/includes/captchas/securimage/gd_fonts/automatic.gdf',
			'/includes/captchas/securimage/gd_fonts/bubblebath.gdf',
			'/includes/captchas/securimage/gd_fonts/caveman.gdf',
			'/includes/captchas/securimage/gd_fonts/crass.gdf',
			'/includes/captchas/securimage/gd_fonts/index.php',
			'/includes/captchas/securimage/images/audio_icon.gif',
			'/includes/captchas/securimage/images/index.php',
			'/includes/captchas/securimage/images/refresh.gif',
			'/includes/captchas/securimage/ttf/_fonts/AHGBold.ttf',
			'/includes/captchas/securimage/ttf/_fonts/arlrndbld.ttf',
			'/includes/captchas/securimage/ttf/_fonts/BasculaCollege.ttf',
			'/includes/captchas/securimage/ttf/_fonts/Cartoon_Regular.ttf',
			'/includes/captchas/securimage/ttf/_fonts/elephant.ttf',
			'/includes/captchas/securimage/ttf/_fonts/HappySans.ttf',
			'/includes/captchas/securimage/ttf/_fonts/index.php',
			'/includes/captchas/securimage/ttf/_fonts/Kingthings.ttf',
			'/includes/captchas/securimage/ttf/_fonts/LLCOOPER.ttf',
			'/includes/captchas/securimage/ttf/_fonts/Tusj.ttf',
			'/includes/captchas/securimage/words/index.php',
			'/includes/captchas/securimage/words/words.txt',
			'/includes/classes/Authenticate.class.php',
			'/includes/classes/LostPassword.class.php',
			'/includes/classes/PasswordAuth.class.php',
			'/includes/classes/RemoteFileReader.class.php',
			'/includes/classes/SubCats.class.php',
			'/includes/classes/UserFields.class.php',
			'/includes/classes/UserFieldsInput.class.php',
			'/includes/classes/VersionFileReader.class.php',
			'/includes/jscripts/tiny_mce/index.php',
			'/includes/jscripts/tiny_mce/license.txt',
			'/includes/jscripts/tiny_mce/tiny_mce.js',
			'/includes/jscripts/tiny_mce/tiny_mce_popup.js',
			'/includes/jscripts/tiny_mce/tiny_mce_src.js',
			'/includes/user_fields/user_offset_/include.php',
			'/includes/user_fields/user_offset_/include_var.php',
			'/locale/English/articles.php',
			'/locale/English/downloads.php',
			'/locale/English/faq.php',
			'/locale/English/news_cats.php',
			'/locale/English/photogallery.php',
			'/locale/English/submit.php',
			'/locale/English/weblinks.php',
			'/locale/English/admin/article-cats.php',
			'/locale/English/admin/articles.php',
			'/locale/English/admin/download-cats.php',
			'/locale/English/admin/downloads.php',
			'/locale/English/admin/faq.php',
			'/locale/English/admin/forums.php',
			'/locale/English/admin/forum_ranks.php',
			'/locale/English/admin/news-cats.php',
			'/locale/English/admin/news.php',
			'/locale/English/admin/photoalbums.php',
			'/locale/English/admin/photos.php',
			'/locale/English/admin/polls.php',
			'/locale/English/admin/user_fields-cats.php',
			'/locale/English/admin/user_fields.php',
			'/locale/English/admin/weblinks.php',
			'/locale/English/bbcodes/allegro.php',
			'/locale/English/bbcodes/alt.php',
			'/locale/English/bbcodes/gg.php',
			'/locale/English/bbcodes/googlevideo.php',
			'/locale/English/bbcodes/movie.php',
			'/locale/English/bbcodes/tlen.php', 
			'/locale/English/user_fields/user_offset.php',
			'/themes/functions.php',
			'/themes/templates/admin_header_mce.php',
			'/themes/templates/header_mce.php',
			'/themes/templates/panels.css',
			'/themes/templates/panels.php',
			'/themes/templates/setup_styles.css',
			'/themes/templates/site_links.css'

			);
		
		$__delete_folders = array(
			'/forum',
			'/ftp_upload',
			'/images/articles',
			'/images/news',
			'/images/photoalbum',
			'/images/ranks',
			'/includes/captchas/securimage/audio',
			'/includes/captchas/securimage/ttf_fonts',
			'/includes/jscripts/tiny_mce',
			'/includes/language',
			'/locale/English/forum',
			'/themes/point',
			'/themes/Aer',
			'/themes/Atlantis',
			'/themes/Fumaeleon',
			'/themes/Gillette',
			'/themes/Modern',
			'/themes/Pastel',
			'/themes/Phos',
			'/themes/Stylo'
			);
			
		foreach($__delete_files as $fk => $fv){
			@sunlink($__settings['softpath'].$fv);
		}
		
		foreach($__delete_folders as $dk => $dv){
			@srm($__settings['softpath'].$dv);
		} */
		
	}
}

?>