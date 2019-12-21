<?php

//////////////////////////////////////////////////////////////
//===========================================================
// all_scripts_theme.php
//===========================================================
// SOFTACULOUS 
// Version : 5.1.6
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Salman Shaikh
// Date:       20th Feb 20019
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

function all_scripts_theme(){

global $theme, $globals, $softpanel, $user, $l, $updates_available, $allcatwise, $iscripts, $scripts ,$info, $cscripts;

softheader($l['<title>'], 'js');

echo '<script>
$(document).ready(function(){
	
	$("body").css("background-color", "#F8F8F8");
	$("#news").attr("src", "https://www.softaculous.com/news.js");
		
});

function show_desc(element){
	var eid = (element.id).split("_");
	$("#overlay_"+eid[1]).css("opacity", 1);
}

function hide_desc(element){
	var eid = (element.id).split("_");
	$("#overlay_"+eid[1]).css("opacity", 0);
}
</script>';	

if(!empty($updates_available)){	
	echo '
	<div class="row row_usi_warn">
	<div class="alert alert-warning" style="width:99%;">
		<a href="#close" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<center>
			<a href="'.$globals['ind'].'act=installations&showupdates=true" alt="" style="text-decoration:none;"><img src="'.$theme['images'].'notice.gif" /> &nbsp; '.lang_vars($l['updates_available'], array($updates_available)).'</a>
		</center>
	</div>
	</div>';
}

echo '
<link rel="stylesheet" type="text/css" href="'.$globals['mirror_images'].'sprites/80.css" />
<style>
	.overlay-div{
		position: absolute;
		top: 0;
		right: 0;
		background: rgba(0,0,0, 0.65);
		width: 100%;
		height: 72%;
		padding: 0%;
		text-align: center;
		color: #fff !important;
		z-index: 0;
		opacity:0;
		display: -webkit-flex; /* Safari */
		-webkit-align-items: center; /* Safari 7.0+ */
		display: flex;
		align-items: center;
	}
	a.overlay_buttons{
		margin-bottom:0px;
		padding: 3px 3px;
		font-weight:normal;
		min-width:40px;
		background-color:rgba(75,119,190,0.45);
		border-color:rgba(0,0,0, 0.00);
		z-index:3;   
	}
	.thumbnail{
		position: relative;
		overflow: hidden;
	}
	.one-edge-shadow{
		padding:0px;
		box-shadow: 0px 10px 10px 0px #ccc;
		border-radius: 0px;
	}
</style>';

echo'<div class="row">
	<div class="col-sm-12 col-xs-12">
		<div class="row" style="text-align:center;">
			<span class="sai_main_head">All Scripts</span>
		</div>
		<hr style="margin-top:5px;">';
		$j = 1;	
		foreach($allcatwise as $i_ind => $ind_type){
			if(empty($ind_type)) continue;
			echo '<div class="text-center sai_main_head">
					<font size="4"><b>'.strtoupper($i_ind).'</b></font>
				</div>';
			foreach($ind_type as $cat => $softs){
				
				if(empty($softs)) continue;
				
				echo '<div class="row-fluid">
						<a href="'.$globals['ind'].'act=listsoftwares&cat='.$cat.'" title="Blogs" style="color:black;outline: none;text-decoration: none;">
							<i class="fa sai-'.$cat.' fa-lg"></i>&nbsp;&nbsp;<b style="font-size:medium;font-weight:normal">'.ucfirst($l['cat_php_'.$cat]).'</b>
						</a>
					</div>
					<hr style="margin-top:5px;">
					<div class="row">';
				
						$url = $theme['images'];
						$ratings = array();
						$deduct = 1;
						foreach($softs as $ins_key => $name){
							
							//Skip child if parent exist
							if(!empty($scripts[$ins_key]['parent']) && !empty($iscripts[$scripts[$ins_key]['parent']])) continue; 
							
							$custom_icon = '';
				
							// For custom scripts
							if($ins_key > 10000){
								if(file_exists($globals['euthemes'].'/'.$globals['theme_folder'].'/images/topscripts/48/'.$iscripts[$ins_key]['softname'].'.png')){
									$custom_icon = $theme['images'].'topscripts/48/'.$iscripts[$ins_key]['softname'].'.png';
								}else{
									$custom_icon = $theme['images'].'/custom.png';
								}
							}
							
							$fullname=$name['name'];
							if(strlen($name['name'])>12){
								$name['name'] = substr($name['name'], 0,12);
								$name['name'] =$name['name'].'..';
							}
							
							$r = $scripts[$ins_key]['ratings'];
							for($i_r=1; $i_r<=5; $i_r++){		
								if($r >= 1){
									$ratings[$i_r] = '<img src="'.$url.'star_ts.png'.'" alt="('.number_format($scripts[$soft]['ratings'], 2).' out of 5)" />';
								}elseif($r > 0){
									$ratings[$i_r] = '<img src="'.$url.'halfstar_ts.png'.'" alt="('.number_format($scripts[$soft]['ratings'], 2).' out of 5)" />';
								}else{
									$ratings[$i_r] = '<img src="'.$url.'nostar_ts.png'.'" alt="('.number_format($scripts[$soft]['ratings'], 2).' out of 5)" />';
								}
								$r = $r - $deduct;
							}	
							
							
							echo'<div class="col-xs-6 ch col-lg-2 col-md-3 col-sm-4">
									<div class="thumbnail text-center one-edge-shadow" id="row_'.$j.'" style="" onmouseover="show_desc(this);" onmouseout="hide_desc(this);">
										<center>
											<div '.(empty($custom_icon) ? 'class="sp80_'.$name['softname'].'"' : '').' style="margin:4px;min-height:80px;">
												'.(!empty($custom_icon) ? '<img src="'.$custom_icon.'" alt="" style="margin:4px;min-height:80px;">' : '').'
											</div>
										</center>
										<div class="overlay-div row text-center" id="overlay_'.$j.'"style="margin: 0px;">
											<div '.(!empty($globals['off_demo_link']) || !empty($custom_icon) ? 'class="col-sm-12 col-xs-12 "' : 'class="col-sm-6 col-xs-12 "').'><a class="btn btn-xs overlay_buttons" href="'.script_link($ins_key, 1).'&tab=overview" style="text-decoration:none;color:white">'.$l['overview_button'].'</a></div>
											'.(empty($globals['off_demo_link']) && empty($custom_icon) ? '<div class="col-sm-6 col-xs-12 "><span><a href="'.$globals['ind'].'act=demos&soft='.$ins_key.'" target="_blank" class="btn btn-xs overlay_buttons" style="vertical-align:bottom;text-decoration:none;color:white">'.$l['demo_button'].'</a></span></div>' : '').'
										</div> 
										<a href="'.script_link($ins_key, 1).'&tab=overview" title="'.$fullname.'" style="text-decoration:none">
											<div class="caption" style="width:100%;background-color:#ECECEC;margin-top:0px;margin-left:0px;padding:3px;min-height: 36px;">
												<h5 style="margin-top:2px;margin-bottom:2px;font-weight:normal;"><font size="2" style="color:#717276;"><strong>'.$name['name'].'</strong></font></h5>
												'.(empty($globals['off_rating_link']) && $ins_key < 10000 ? '<div class="someclass" style="margin-left:0;" title="'.$scripts[$ins_key]['ratings'].'">'.implode('', $ratings).'</div>' : '').'
											</div>
										</a>
									</div>
								</div>';
								$j++;
						}
				echo '</div>';
			}
		}
echo '</div>
</div>
<hr>';		

// news updates box
if(empty($globals['eu_news_off'])){

	echo '<script language="javascript" type="text/javascript"  id="news"></script>
	
	<script type="text/javascript">
	var news_retry = 0;
	function load_soft_info(){
		if(!$_("softnews")){ // Is the news DIV there ?
			return true;
		}
		$_("softnews").style.width = $_("softnewsholder").offsetWidth;
		
		//The news
		
		if(typeof(soft_news) == "undefined"){
			$_("softnews").innerHTML = "'.$l['conect_to_soft'].'";
			news_retry ++;
			if(news_retry <= 3){
				setTimeout(load_soft_info, 1000);
			}
		}else{
			var newsstr = "";
			for(x in soft_news){
				newsstr = newsstr+\'<div class="softnewshead">\'+soft_news[x][0]+\'</div>\'+\'<div class="softnewsblock">\'+soft_news[x][1]+\'</div><br />\';
			}
			$_("softnews").innerHTML = newsstr;
		}
	}
	addonload(\'load_soft_info();\');
	
	</script>

<div style= "width:78%; margin:3px auto;">	<!----#News---->
	<div class="row">
		<span style="padding-top:40px;" colspan="3">
			<center class="news_content_header">
				'.$l['news'].'
			</center> 
		</span>	
		<div class="news_content" id="softnewsholder" style="padding:0;">
			<div class="softnews" id="softnews"'.(!empty($softpanel->pheader) ? 'style="overflow: auto;width:auto; height:auto; "' : 'style="height:auto;"').'></div>
		</div>	
	</div>
</div>	

';

}
softfooter();

}

?>