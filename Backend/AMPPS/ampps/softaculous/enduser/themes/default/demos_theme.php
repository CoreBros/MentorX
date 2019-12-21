<?php

//////////////////////////////////////////////////////////////
//===========================================================
// demos_theme.php
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


function demos_theme(){

global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $scripts;
global $soft, $software;

error_handle($error, '100%');

$custom_favicon  = (!empty($globals['favicon_logo']) ? $globals['favicon_logo'] : $theme['images'].(asperapp('', 'webuzo/', 'ampps/')).'favicon.ico');

// Is there any software for which we have to show a DEMO ?
if(empty($software)){

	softheader($l['<title>']);
	
	echo '<link href="'.$globals['mirror_images'].'sprites/80.css" rel="stylesheet" type="text/css" />
	
	<div class="row sai_main_head" style="width:100%; padding-left:40px;" align="center">
		<div class="col-sm-5 col-xs-3" style="padding:0 10px 0 0; text-align:right;">
			<i class="fa sai-demo fa-1x" style="color:#00A0D2;"></i>
		</div>
		<div class="col-sm-7 col-xs-9" style="padding-left:0; text-align:left;">'.$l['script_demos'].'</div>
	</div><br />
	
	<div class="sai_main_head" style="width:95%;" align="center">
		<center><p class="sai_head">'.$l['click_logo'].'</p><hr></center>
	</div>';
	
	foreach($catwise as $cat => $softs){
		
		if(empty($softs)) continue;
		
		$catimg = (!empty($GLOBALS['catimgs']['php_'.$cat]) ?  $GLOBALS['catimgs']['php_'.$cat] : $theme['images'].'cats/php_'.$cat.'.png');
		
		echo '
		<div class="bg">
			<div class="sai_heading_full" valign="middle">
				<img src="'.$catimg.'" alt="" />&nbsp;&nbsp;'.$l['cat_php_'.$cat].'
			</div><br />';

		foreach($softs as $sid => $softw){
					
			if(empty($softw['ins'])) continue;
			if($sid >= 10000) continue;
			
			echo '<div style="text-decoration:none;display:inline-block;text-align:center;">
					<a href="'.$globals['ind'].'act=demos&soft='.$sid.'" target="_blank" title="'.$softw['desc'].'"  width="80" alt="" class="someclass" style="text-decoration:none;margin-top:5px;">
						<div class="sai_blog_script">
							<div class="sai_demo_script_logo">
								<div class="sp80_'.$softw['softname'].'" style="margin:15px;"></div>
							</div>
							<div class="sai_script_name">'.$softw['name'].'</div>
						</div>
					</a><br />
				</div>';
		}
		echo '
		</div><br />';
	}
	 
	softfooter();

}else{

	echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta name="keywords" content="software, auto, installs, software, script, softaculous" />
	<title>'.$globals['sn'].' - '.APP.' - '.$software['name'].' Demo</title>
	<link rel="shortcut icon" href='.$custom_favicon.' />
	</head>
	<frameset rows="51,*" frameborder="0" border="0" framespacing="0">
	<frame src="https://www.softaculous.com/demoheader?sid='.$soft.(!empty($globals['demo_logo']) ? '&cust_logo='.rawurlencode($globals['demo_logo']) : '').(!empty($globals['demo_logo_url']) ? '&cust_logo_url='.rawurlencode($globals['demo_logo_url']) : '').'"  scrolling="no" frameborder="0" noresize="noresize" name="demoheader">
	<frame src="https://demos.softaculous.com/'.($software['type'] == 'perl' ? 'cgi-bin/' : '').urlname($software['name'], $soft).'" style="margin:0px;padding:0px" frameborder="0" noresize="noresize" name="demobody">
	</frameset><noframes></noframes>';

}

}

?>