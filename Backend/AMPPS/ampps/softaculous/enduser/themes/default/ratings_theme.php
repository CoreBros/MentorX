<?php

//////////////////////////////////////////////////////////////
//===========================================================
// ratings_theme.php
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

function ratings_theme(){

global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $scripts;
global $soft, $software;

	softheader($l['<title>']);
	
	error_handle($error, '100%');
	
	echo '<link href="'.$globals['mirror_images'].'sprites/80.css" rel="stylesheet" type="text/css" />
	<div class="row sai_main_head" style="width:100%; padding-left:30px;" align="center">
		<div class="col-sm-5 col-xs-4" style="padding:0 10px 0 0; text-align:right;">
			<i class="fa sai-fullstar fa-1x" style="color:#00A0D2;"></i>
		</div>
		<div class="col-sm-7 col-xs-8" style="padding-left:0; text-align:left;">'.$l['script_ratings'].'</div>
	</div><br />
	
	<div class="sai_main_head" style="width:95%;" align="center">
		<center><p class="sai_head">'.$l['click_logo'].'</p><hr></center>
	</div>';
	
	foreach($catwise as $cat => $softs){
		
		if(empty($softs)) continue;
		
		$catimg = (!empty($GLOBALS['catimgs']['php_'.$cat]) ?  $GLOBALS['catimgs']['php_'.$cat] : $theme['images'].'cats/php_'.$cat.'.png');
		
		echo '<div class="bg">
		<div class="sai_heading_full" valign="middle">
			<img src="'.$catimg.'" alt="" />&nbsp;&nbsp;'.$l['cat_php_'.$cat].'
		</div><br />';

		foreach($softs as $sid => $softw){
					
			if(empty($softw['ins'])) continue;
			if($sid >= 10000) continue;
			
			echo '<div style="text-decoration:none;display:inline-block;text-align:center;">
					<a href="'.$globals['ind'].'act=software&soft='.$sid.'&tab=ratings" target="_blank" title="'.$softw['desc'].'"  width="80" alt="" class="someclass" style="text-decoration:none;margin-top:5px;">
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

}

?>