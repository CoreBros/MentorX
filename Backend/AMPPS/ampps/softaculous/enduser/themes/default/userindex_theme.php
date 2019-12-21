<?php

//////////////////////////////////////////////////////////////
//===========================================================
// userindex_theme.php
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

function userindex_theme(){

global $theme, $globals, $softpanel, $user, $l, $updates_available, $iscripts, $scripts ,$info, $cscripts, $usage;

$__tmp = explode(':', (!empty($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost'));
$globals['HTTP_HOST'] = $__tmp[0];

softheader($l['<title>'], 'js');

/*For native UI support*/
	if(!empty($softpanel->pheader)){
		if(is_cp_theme('paper_lantern')){
			echo '
			<style>
				.row_usi {
				padding-left: 45px;
				padding-right: 0px;
				}
				
				.row_usi_warn {
				padding-left: 110px;
				padding-right: 30px;
				}
				
				.sai_inputs_cls input{
				width:280px;
				}
				
				.sai_suggestions_cls{
				width:280px;
				}
				
				.row_usi_cls {
				padding-left: 50px;
				}
				
				@media screen and (min-width: 980px) and (max-width: 1279px){
					.row_usi{
					padding-left: 20px;
					padding-right: 0;
					}
					
					.row_usi_warn{
					padding-left: 50px;
					padding-right: 0;
					}
				}
				
				@media screen and (min-width: 800px) and (max-width: 979px){
					.row_usi{
					padding: 0 5px;
					}
					
					.row_usi_warn{
					padding-left: 30px;
					padding-right: 5px;
					}
					
					.sai_inputs_cls input{
					width:250px;
					}
					
					.sai_suggestions_cls{
					width:250px;
					}
				}
				
				@media screen and (min-width: 768px) and (max-width: 799px){
					.row_usi{
					padding: 0 100px;
					}
					
					.row_usi_warn{
					padding-left: 130px;
					padding-right: 120px;
					}
					
					.sai_inputs_cls{
					padding-left:70px;	
					}
					
					.sai_inputs_cls input{
					width:300px;
					}
					
					.sai_suggestions_cls{
					width:300px;
					}
					
					.row_usi_cls {
					padding-left: 180px;
					}
				}
				
				@media screen and (min-width: 360px) and (max-width: 767px){
					.row_usi{
					padding: 0 10px;
					}
					
					.row_usi_warn{
					padding-left: 35px;
					padding-right: 65px;
					}
					
					.sai_inputs_cls input{
					width:130px;
					}
					
					.sai_suggestions_cls{
					width:130px;
					}
					
					.row_usi_cls {
					padding-left: 0;
					}
					
					.sai_classes_boxgrid{
					width:250px;
					}
					
					.sai_classes_boxgrid2{
					width:250px;
					}
				}
				
				@media screen and (min-width: 320px) and (max-width: 359px){
					.row_usi{
					padding: 0 10px;
					}
					
					.row_usi_warn{
					padding-left: 35px;
					padding-right: 30px;
					}
					
					.sai_inputs_cls input{
					width:130px;
					}
					
					.sai_suggestions_cls{
					width:130px;
					}
					
					.row_usi_cls {
					padding-left: 0;
					}
					
					.sai_classes_boxgrid{
					width:250px;
					}
					
					.sai_classes_boxgrid2{
					width:250px;
					}
				}
			</style>';
		}else{
			echo '
			<style>
				.row_usi {
				padding: 0;
				}
				
				.row_usi_warn {
				padding-left: 45px;
				padding-right: 40px;
				}
				
				.sai_inputs_cls input{
				width:190px;
				}
				
				.sai_suggestions_cls{
				width:190px;
				}
				
				.row_usi_cls {
				padding-left: 80px;
				}
				
				@media screen and (min-width: 1280px) and (max-width: 1300px){					
					.row_usi_warn{
					padding-left: 50px;
					padding-right: 40px;
					}
				}
				
				@media screen and (min-width: 980px) and (max-width: 1279px){
					.row_usi{
					padding: 0 40px;
					}
					
					.row_usi_warn{
					padding-left: 55px;
					padding-right: 40px;
					}
				}
				
				@media screen and (min-width: 800px) and (max-width: 979px){					
					.row_usi {
					padding: 0 20px;
					}
					
					.row_usi_warn{
					padding-left: 40px;
					padding-right: 40px;
					}
				}
				
				@media screen and (min-width: 768px) and (max-width: 799px){
					.row_usi {
					padding: 0 120px;
					}
					
					.row_usi_warn{
					padding-left: 130px;
					padding-right: 135px;
					}
					
					.sai_inputs_cls{
					padding-left:70px;	
					}
					
					.sai_inputs_cls input{
					width:300px;
					}
					
					.sai_suggestions_cls{
					width:300px;
					}
					
					.row_usi_cls {
					padding-left: 180px;
					}
				}
			</style>';
		}
	}
	
	if($globals['softpanel'] == 'plesk' && $globals['panel_hf'] == 1){
		echo '<style>';
		// If not admin
		if($GLOBALS["usertype"] != 1){
			echo '
			.row_usi {
			padding-left: 45px;
			padding-right: 0px;
			}
			
			.row_usi_warn {
			padding-left: 70px;
			padding-right: 20px;
			}
			
			@media screen and (min-width: 980px) and (max-width: 1279px){
				.row_usi{
				padding-left: 20px;
				padding-right: 0;
				}
				
				.row_usi_warn{
				padding-left: 50px;
				padding-right: 0;
				}
			}
			
			@media screen and (min-width: 768px) and (max-width: 799px){
				.row_usi{
				padding: 0 100px;
				}
				
				.row_usi_warn{
				padding-left: 130px;
				padding-right: 120px;
				}
			}
			';
		}else{
			echo '
			.row_usi {
			padding-left: 0;
			padding-right: 0;
			}
			
			.row_usi_warn {
			padding-left: 70px;
			padding-right: 20px;
			}
			
			@media screen and (min-width: 980px) and (max-width: 1279px){
				.row_usi{
				padding-left: 20px;
				padding-right: 0;
				}
				
				.row_usi_warn{
				padding-left: 50px;
				padding-right: 0;
				}
			}
			
			@media screen and (min-width: 768px) and (max-width: 799px){
				.row_usi{
				padding: 0 30px;
				}
				
				.row_usi_warn{
				padding-left: 130px;
				padding-right: 120px;
				}
			}
			';
		}
		echo '			
			@media screen and (min-width: 800px) and (max-width: 979px){
				.row_usi{
				padding-left: 60px;
				padding-right: 0px;
				}
				
				.row_usi_warn{
				padding-left: 30px;
				padding-right: 5px;
				}
			}
			
			@media screen and (min-width: 360px) and (max-width: 767px){
				.row_usi{
				padding: 0 200px;
				}
				
				.row_usi_warn{
				padding-left: 35px;
				padding-right: 65px;
				}
				
				.sai_classes_boxgrid{
				width:250px;
				}
				
				.sai_classes_boxgrid2{
				width:250px;
				}
			}
			
			@media screen and (min-width: 320px) and (max-width: 359px){
				.row_usi{
				padding: 0 10px;
				}
				
				.row_usi_warn{
				padding-left: 35px;
				padding-right: 30px;
				}
				
				.sai_classes_boxgrid{
				width:250px;
				}
				
				.sai_classes_boxgrid2{
				width:250px;
				}
			}
		</style>';
	}

echo '<script>
$(document).ready(function(){
	var this_theme = "'.$theme['this_theme'].'";
	
	if(this_theme == "modern"){
			$("body").css("background-color", "#F8F8F8");
	}
		
	$(".sai_boxgrid").hover(function(){
		$(this).stop().animate({top:"-200px"},{queue:false,duration:200});
		
		}, function() {
			$(this).stop().animate({top:"0px"},{queue:true,duration:200});
	});
	
	$(".about").click(function(){
		$(".right_panel_two").fadeOut(1); 
		$(".right_panel_one").fadeIn(500);
	});
	$(".topscripts").click(function(){
		$(".right_panel_one").fadeOut(1); 
		$(".right_panel_two").fadeIn(500);
	});
	
	$("#news").attr("src", "https://www.softaculous.com/news.js");
	
});

	function show_desc(element){
		var eid = (element.id).split("_");
		$("#saihover_"+eid[1]).css("opacity", 1);
	}
	
	function hide_desc(element){
		var eid = (element.id).split("_");
		$("#saihover_"+eid[1]).css("opacity", 0);
	}
</script>';
	
	// top 10 scripts based on the rating formula 
	foreach($scripts as $k => $v){
		
		if(empty($iscripts[$k]) || (!empty($scripts[$k]['parent']) && !empty($iscripts[$scripts[$k]['parent']]))){
			continue;
		}
		
		$top[$k] = $v['ratings']*$v['votes'];
		
	}

	arsort($top);

	if(file_exists($globals['path'].'/conf/top_scripts.php') && !empty($globals['lictype'])){
		$top = unserialize(file_get_contents($globals['path'].'/conf/top_scripts.php'));
	}


	//r_print($globals);
	if(!empty($globals['show_cscript_in_top'])){
		//r_print($top_custom_list);
		foreach($cscripts as $ck => $cv){
			if(array_key_exists($ck, $iscripts)){
				$top_custom[$ck] = $ck;
			}
		}
		
		$tmp_top = $top;
		
		// Do we need to add any other default scripts ?
		if(!empty($top_custom)){	
			$top = $top_custom;
		}
		
		if(!empty($tmp_top)){
			$top += $tmp_top;
		}
	}

	foreach($scripts as $k => $v){
		
		// We have to remove the scripts which are not enabled AND yet coming from top_scripts.php (i.e. Admin have saved it from top scripts)
		if(!array_key_exists($k, $iscripts) && !empty($top[$k])){
			unset($top[$k]);
		}
		
		if(empty($iscripts[$k]) || (!empty($scripts[$k]['parent']) && !empty($iscripts[$scripts[$k]['parent']]))){
			continue;
		}
		
		if(!empty($globals['append_apps'])){
			$top[$k] = $v['ratings']*$v['votes'];
		}
		
	}
	
	$ts_head1 = ((!empty($softpanel->pheader) ? (is_cp_theme('paper_lantern') ? 'col-sm-11 col-xs-10' : 'col-sm-10 col-xs-10') : 'col-sm-11 col-xs-10'));
	
	$ts_head2 = ((!empty($softpanel->pheader) ? (is_cp_theme('paper_lantern') ? 'col-sm-1 col-xs-2' : 'col-sm-2 col-xs-2') : 'col-sm-1 col-xs-2'));
	
	echo '
	<div>
		<div class="right_panel_two" '.($globals['softpanel'] == 'ampps' || $globals['softpanel'] == 'webuzo' ? 'style="display:none"' : '').'>
		
		<div class="row">
			<div class="'.$ts_head1.'"></div>
			<div class="'.$ts_head2.'">
				<div class="about">
					<img src="'.$theme['images'].'info_star.png" width="30" height="30" class="someclass" title="'.$l['about'].'" style="border:none;"/>&nbsp;&nbsp;							
				</div>
			</div>
		</div>';
	
	// Show some statistics
	if(!empty($user['ins'])){
	
		echo '
	<div class="row row_usi">
		<div class="col-md-1"></div>
		<div class="col-md-10">';
		
		if(empty($globals['disable_backup_restore'])){
			$cols = 4;
		}else{
			$cols = 6;
		}
		
		$col_class = ((!empty($softpanel->pheader) ? (is_cp_theme('paper_lantern') ? 'col-lg-'.$cols.' col-md-6 col-sm-6 col-xs-12' : 'col-lg-6 col-md-6 col-sm-6 col-xs-12') : 'col-lg-'.$cols.' col-md-4 col-sm-6 col-xs-12'));
		
		echo '
		<div class="'.$col_class.'" style="padding-top: 5px;">
			<a href="'.$globals['ind'].'act=installations" style="text-decoration:none;">
				<div class="statistic_grp resource_gr" style="background-color:#4D95C4; border:1px solid #4D95C4; color:#FFF;">
					<div class="resource_header"><b>'.$l['ins_stats'].'</b></div>
					<div class="content">
						<div class="dash pull-left">
						<i class="fa sai-installations fa-3x"></i>
							<span class="badge">'.count($user['ins']).'</span>
						</div>
					</div>
				</div>
			</a>
		</div>';
		
		if(!empty($updates_available)){
			$ua_href = $globals['ind'].'act=installations&showupdates=true';
			$ua_bg = '#EA695C ; border:1px solid #EA695C ; color:#FFF;';
			$ua_badge = (int) $updates_available;
			$ua_fa = 'sai-warning';
		}else{
			$ua_href = '';
			$ua_bg = '#40B19B ; border:1px solid #40B19B ; color:#FFF;';
			$ua_badge = 0;
			$ua_fa = 'sai-success';
		}
		
		echo '<div class="'.$col_class.'" style="padding-top: 5px;">
			<a href="'.$ua_href.'" style="text-decoration:none;">
				<div class="statistic_grp resource_gr" style="background-color:'.$ua_bg.'">
					<div class="resource_header"><b>'.$l['outdated_stats'].'</b></div>
					<div class="content">
						<div class="dash pull-left">
						<i class="fa '.$ua_fa.' fa-3x"></i>
							<span class="badge">'.$ua_badge.'</span>
						</div>
					</div>
				</div>
			</a>
		</div>';
		
		if(empty($globals['disable_backup_restore'])){
	
			$b_count = 0;
			$backups_count = get_backups_count(listbackups());
			$backups_count = (int) $backups_count;
			if(!empty($globals['max_backups'])){
				$b_count = $backups_count.' / '.$globals['max_backups'];
			}else{
				$b_count = $backups_count;
			}
			
			echo '
			<div class="'.$col_class.'" style="padding-top: 5px;">
				<a href="'.$globals['ind'].'act=backups" style="text-decoration:none;">
					<div class="statistic_grp resource_gr" style="background-color:#A163BA; border:1px solid #A163BA; color:#FFF;">
						<div class="resource_header"><b>'.$l['backups_stats'].'</b></div>
						<div class="content">
							<div class="dash pull-left">
							<i class="fa sai-backup fa-3x"></i>
								<span class="badge">'.$b_count.'</span>
							</div>
						</div>
					</div>
				</a>
			</div>';
		}
		
		echo '
		</div>
	</div>';
			
	}
			
	echo '<br />			
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div style="text-align:center;">
					<span class="sai_main_head">'.$l['top_scrip'].'</span>
				</div>
			</div>
		</div>
		<hr>';
		
	if(!empty($updates_available)){	
		echo '
		<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="alert alert-warning" style>
				<a href="#close" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				<center>
					<a href="'.$globals['ind'].'act=installations&showupdates=true" alt="" style="text-decoration:none;"><img src="'.$theme['images'].'notice.gif" /> &nbsp; '.lang_vars($l['updates_available'], array($updates_available)).'</a>
				</center>
			</div>
		</div>
		</div>';
	}
	
	echo '
	<div class="row row_usi">
		<div class="col-md-1"></div>
		<div class="col-md-10">';
		
	$i = 0;
	$j = 1;		
	$url = $globals['mirror_images'];
	$url_i = $globals['softimages'].'top15/';
	
	foreach ($top as $k => $v) {		
		$demo_scriptname = str_replace(' ', '_', $scripts[$k]['name']);
		$ratings = array();
		$deduct = 1;
		$r = $scripts[$k]['ratings'];
	
		if($k > 10000){
			if(file_exists($globals['euthemes'].'/'.$globals['theme_folder'].'/images/topscripts/'.$iscripts[$k]['softname'].'.png')){
				$url_i = $theme['images'].'topscripts/'.$iscripts[$k]['softname'].'.png';
				$url_i32 = $theme['images'].'topscripts/32/'.$k.'__logo.gif';
			}else{
				$url_i = $theme['images'].'custom_script.png';
			}
			$image_name = $url_i;
		}else{
			$url_i = $globals['softimages'].'top15/';
			$url_i32 = $globals['softimages'].'top15/32/'.$k.'__logo.gif';
			$image_name = $url_i.$iscripts[$k]['softname'].'.png';
		}
	
		for($i_r=1; $i_r<=5; $i_r++){		
			if($r >= 1){
				$ratings[$i_r] = '<img src="'.$theme['images'].'star_ts.png'.'" width="11" height="12" alt="('.number_format($scripts[$k]['ratings'], 2).' out of 5)" />';
			}elseif($r > 0){
				$ratings[$i_r] = '<img src="'.$theme['images'].'halfstar_ts.png'.'" width="11" height="12" alt="('.number_format($scripts[$k]['ratings'], 2).' out of 5)" />';
			}else{
				$ratings[$i_r] = '<img src="'.$theme['images'].'nostar_ts.png'.'" width="11" height="12" alt="('.number_format($scripts[$k]['ratings'], 2).' out of 5)" />';
			}
			$r = $r - $deduct;
		}	
		
		$ts_class = ((!empty($softpanel->pheader) ? (is_cp_theme('paper_lantern') ? 'col-lg-4 col-md-6 col-sm-6 col-xs-12' : 'col-lg-6 col-md-6 col-sm-6 col-xs-12') : 'col-lg-4 col-md-6 col-sm-6 col-xs-12'));
			
		echo '
		<div class="'.$ts_class.'" style="padding-bottom: 20px;">
			<div class="sai_boxgrid2_ts">
				<div class="row" id="row_'.$j.'" style="height:80%; padding-top:5px;" onmouseover="show_desc(this);" onmouseout="hide_desc(this);">
					<div class="sai_block" id="saiblock_'.$j.'">
						<center>	
							<img class="cover" src="'.$image_name.'" class="img-responsive" /><br />
						</center>
					</div>
					
					<div class="sai_hover" id="saihover_'.$j.'">
						<a href="'.script_link($k, 1).'&tab=overview"><p style="height:75%;">'.(strlen($iscripts[$k]['desc']) > 120 ? substr($iscripts[$k]['desc'], 0, 116).'<br /><font size="2" color="#FFF">['.$l['more'].']</font>' : $iscripts[$k]['desc']).'</p></a>
						
						<div class="row">
							<div class="col-sm-4 col-xs-4">
								<a href="'.script_link($k, 1).'&tab=install" class="sai_insbut sai_insbutpad" style="text-decoration:none; padding:4px; vertical-align:bottom;">'.$l['install_button'].'</a>
							</div>
							
							<div class="col-sm-3 col-xs-3">
								<span>'.(empty($globals['off_demo_link']) ? '<a href="'.$globals['ind'].'act=demos&soft='.$k.'" target="_blank" class="sai_insbut_ts" style="vertical-align:bottom;"><b>'.$l['demo_button'].'</b></a>' : '').'</span>
							</div>
							
							<div class="col-sm-3 col-xs-3">
								<span><a href="'.script_link($k, 1).'&tab=overview" class="sai_insbut_ts" style="vertical-align:bottom;"><b>'.$l['overview_button'].'</b></a></span>
							</div>
						</div>
						
					</div>
				</div>
		
				<a href="'.script_link($k, 1).'&tab=overview" style="text-decoration:none;">
				<div class="row" id="row_ts_'.$j.'" style="height:20%; text-align:center; padding-top:3px; background-color:#ECECEC;">
					<font size="2" style="color:#717276;"><strong>'.$iscripts[$k]['name'].'</strong></font><br />
					'.(empty($globals['off_rating_link']) && $k < 10000 ? '<div class="sai_coverstars" style="margin-left:0;">'.implode('', $ratings).'</div>' : '').'
				</div>
				</a>
			</div>
		</div>';
		
		// Show 8 scripts for all native UI i.e. cp, da, pl except cp paper_lantern where its 15
		if($j == (!empty($softpanel->pheader) ? (is_cp_theme('paper_lantern') ? 15 : 8) : (($globals['softpanel'] == 'plesk' && $globals['panel_hf'] == 1) ? ($GLOBALS["usertype"] != 1 ? 8 : 15) : 15))){
			break;
		}
		$j++;
		$i++;
	}
	echo '	
		</div>
		<div class="col-md-1"></div>
	</div>
	</div>';		

echo '<div class="right_panel_one" '.($globals['softpanel'] == 'ampps' || $globals['softpanel'] == 'webuzo' ? '' : 'style="display:none"').'>';

if($globals['softpanel'] == 'webuzo'){
	
	include_once(dirname(__FILE__).'/webuzo/webuzoindex_theme.php');
	webuzoindex_theme();
	
}elseif($globals['softpanel'] == 'ampps'){
	
	include_once(dirname(__FILE__).'/ampps/amppsindex_theme.php');
	amppsindex_theme();

}else{

	$info_head1 = ((!empty($softpanel->pheader) ? (is_cp_theme('paper_lantern') ? 'col-md-11 col-sm-10 col-xs-9' : 'col-md-10 col-sm-10 col-xs-9') : 'col-md-11 col-sm-10 col-xs-9'));
			
	echo 
	'<div class="bg bg_usi"><br />
		<div class="row">
			<div class="'.$info_head1.'" style="text-align:center;">
				<span class="sai_newhead">'.$globals['sn'].'</span>
			</div>
				
			<div class="topscripts">
				<img src="'.$theme['images'].'top_star.png" width="30" height="30" class="someclass" title="'.$l['top_scrip'].'" style="border:none;"/>&nbsp;&nbsp;							
			</div>
		</div><hr><br />
	
		<div class="row">
			<div style="width:20%; float:left;">
				<img src="'.$theme['images'].'autoinstaller.jpg" alt="" class="img-responsive"/>
			</div>
			<div style="width:80%; float:right; padding:0 20px;">
				<font class="sai_newhead">'.$l['auto_installer'].'</font>
				<br /><br />
				<font class="sai_feature_exp">'.$l['auto_installer_exp'].'</font>
			</div>
		</div><br /><br />';
		
		if(empty($globals['off_demo_link'])){
		
			echo '<div class="row">
				<div style="width:80%; float:left; padding-right:50px;">		
					<font class="sai_newhead">'.$l['view_demos'].'</font>
					<br /><br />
					<font class="sai_feature_exp">'.$l['view_demos_exp'].'</font>
				</div>
				<div style="width:20%; float:right;">	
					<a href="'.$globals['ind'].'act=demos"><img src="'.$theme['images'].'exp_demos.gif" alt="" class="img-responsive"/></a>
				</div>
			</div><br /><br />';
			
		}
		
		if(empty($globals['off_rating_link'])){
	
			echo '<div class="row">
				<div style="width:20%; float:left;">	
					<a href="'.$globals['ind'].'act=ratings"><img src="'.$theme['images'].'rate_it.jpg" alt="" class="img-responsive"/></a>
				</div>
				<div style="width:80%; float:right; padding:0 20px;">	
					<font class="sai_newhead">'.$l['rate_it'].'</font>
					<br /><br />
					<font class="sai_feature_exp">'.$l['rate_it_exp'].'</font>
				</div>
			</div><br /><br />';
			
		}
	
		echo '<div class="row">
			<div style="width:80%; float:left; padding-right:50px;">
				<font class="sai_newhead">'.$l['build_sites'].'</font><br /><br />
				<font class="sai_feature_exp">'.$l['build_sites_exp'].'</font>
			</div>
			<div style="width:20%; float:right;">	
				<img src="'.$theme['images'].'build.jpg" alt="" class="img-responsive"/>
			</div>
		</div><br /><br />
	</div><!--end of bg class-->';
}
//THIS IS THE CLOSING OF TAB2 DIV
echo '</div>
</div>';

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



function js_userindex_theme(){

	global $theme, $globals, $softpanel, $user, $l;
	
	softheader($l['<title>']);
	
	echo '
	<div class="bg bg_usi"><br />
		<div class="row">
			<div style="width:20%; float:left;">
				<img src="'.$theme['images'].'javascripts.jpg" alt="" class="img-responsive"/>
			</div>
			<div style="width:80%; float:right; padding:0 20px;">
				<font class="sai_newhead">'.$l['javascriptify'].'</font>
				<br /><br />
				<font class="sai_feature_exp">'.$l['javascriptify_exp'].'</font>
			</div>
		</div>
		
		<br /><br />
		
		<div class="row">
			<div style="width:80%; float:left; padding-right:50px;">
				<font class="sai_newhead">'.$l['served_ajax'].'</font>
				<br /><br />
				<font class="sai_feature_exp">'.$l['served_ajax_exp'].'</font>
			</div>
			<div style="width:20%; float:right;">
				<img src="'.$theme['images'].'ajax.jpg" alt="" class="img-responsive"/>
			</div>
		</div>
		
		<br /><br />
		
		<div class="row">
			<div style="width:20%; float:left;">
				<img src="'.$theme['images'].'dragme.gif" alt="" id="dragme" style="position:relative;" class="img-responsive"/>
		
				<script language="javascript" src="'.$theme['url'].'/js/domdrag.js" type="text/javascript"></script>
				<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
				Drag.init($_("dragme"), $_("dragme"));
				// ]]>
				</script>
			</div>
			<div style="width:80%; float:right; padding:0 20px;">
				<font class="sai_newhead">'.$l['play_demos'].'</font>
				<br /><br />
				<font class="sai_feature_exp">'.$l['play_demos_exp'].'</font>
			</div>
		</div>
		
		<br /><br />
		
		<div class="row">
			<div style="width:80%; float:left; padding-right:50px;">
				<font class="sai_newhead">'.$l['cross_browser'].'</font>
				<br /><br />
				<font class="sai_feature_exp">'.$l['cross_browser_exp'].'</font>
			</div>
			<div style="width:20%; float:right;">
				<img src="'.$theme['images'].'crossbrowser.jpg" alt="" class="img-responsive"/>
			</div>
		</div>
		
		<br /><br />
		
		<div class="row">
			<div style="width:20%; float:left;">
				<img src="'.$theme['images'].'jscode.jpg" alt="" class="img-responsive"/>
			</div>
			<div style="width:80%; float:right; padding:0 20px;">
				<font class="sai_newhead">'.$l['code_poetry'].'</font>
				<br /><br />
				<font class="sai_feature_exp">'.$l['code_poetry_exp'].'</font>
			</div>
		</div>
		<br /><br />
	</div><!--end of bg class-->';
	
	softfooter();

}

function perl_userindex_theme(){
	global $theme, $globals, $softpanel, $user, $l;
	softheader($l['<title>']);
	echo '
	<div class="bg bg_usi"><br />
		<div class="row">
			<div style="width:20%; float:left;">
				<img src="'.$theme['images'].'perl.jpg" alt="" class="img-responsive"/>
			</div>
			<div style="width:80%; float:right; padding:0 20px;">
				<font class="sai_newhead">'.$l['glimpse_perl'].'</font>
				<br /><br />
				<font class="sai_feature_exp">'.$l['perl_exp'].'</font>
			</div>
		</div>
		
		<br /><br />
		
		<div class="row">
			<div style="width:80%; float:left; padding-right:50px;">
				<font class="sai_newhead">'.$l['served_cgi'].'</font>
				<br /><br />
				<font class="sai_feature_exp">'.$l['served_cgi_exp'].'</font>
			</div>
			<div style="width:20%; float:right;">
				<img src="'.$theme['images'].'poc.png" alt="" class="img-responsive"/>
			</div>
		</div>
		
		<br /><br />
		
		<div class="row">
			<div style="width:20%; float:left;">
				<img src="'.$theme['images'].'chess.png" alt="" id="dragme" style="position:relative;" class="img-responsive"/>
				
				<script language="javascript" src="'.$theme['url'].'/js/domdrag.js" type="text/javascript"></script>
				
				<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
				Drag.init($_("dragme"), $_("dragme"));
				// ]]>
				</script>
			</div>
			<div style="width:80%; float:right; padding:0 20px;">
				<font class="sai_newhead">'.$l['play_demos_perl'].'</font>
				<br /><br />
				<font class="sai_feature_exp">'.$l['play_demos_perl_exp'].'</font>
			</div>
		</div>
		<br /><br />
	</div><!--end of bg class-->';
	
	softfooter();
}

function classes_userindex_theme(){
	
	global $theme, $globals, $softpanel, $user, $l;
	$globals['mode'] = 'classes';
	softheader($l['<title>']);
	
	if(!empty($softpanel->pheader)){
		if(is_cp_theme('paper_lantern')){
			echo '
			<style>
				.sai_inputs_cls input{
				width:280px;
				}
				
				.sai_suggestions_cls{
				width:280px;
				}
				
				.row_usi_cls {
				padding-left: 50px;
				}
				
				@media screen and (min-width: 320px) and (max-width: 767px){
					.sai_inputs_cls input{
					width:130px;
					}
					
					.sai_suggestions_cls{
					width:130px;
					}
					
					.row_usi_cls {
					padding-left: 0;
					}
					
					.sai_classes_boxgrid{
					width:250px;
					}
					
					.sai_classes_boxgrid2{
					width:250px;
					}
				}
				
				@media screen and (min-width: 768px) and (max-width: 799px){
					.sai_inputs_cls{
					padding-left:70px;	
					}
					
					.sai_inputs_cls input{
					width:300px;
					}
					
					.sai_suggestions_cls{
					width:300px;
					}
					
					.row_usi_cls {
					padding-left: 180px;
					}
				}
				
				@media screen and (min-width: 800px) and (max-width: 980px){
					.sai_inputs_cls input{
					width:250px;
					}
					
					.sai_suggestions_cls{
					width:250px;
					}
				}
			</style>';
		}else{
			echo '
			<style>
				.sai_inputs_cls input{
				width:190px;
				}
				
				.sai_suggestions_cls{
				width:190px;
				}
				
				.row_usi_cls {
				padding-left: 80px;
				}
				
				@media screen and (min-width: 768px) and (max-width: 799px){
					.sai_inputs_cls{
					padding-left:70px;	
					}
					
					.sai_inputs_cls input{
					width:300px;
					}
					
					.sai_suggestions_cls{
					width:300px;
					}
					
					.row_usi_cls {
					padding-left: 180px;
					}
				}
			</style>';
		}
	}
	
	if($globals['softpanel'] == 'plesk' && $globals['panel_hf'] == 1){
		// If not admin
		if($GLOBALS["usertype"] != 1){
			echo '
			<style>
				.sai_inputs_cls input{
				width:130px;
				}
				
				.sai_suggestions_cls{
				width:130px;
				}
				
				.row_usi_cls {
				padding-left: 0;
				}
				
				@media screen and (min-width: 320px) and (max-width: 359px){
					.sai_inputs_cls input{
					width:130px;
					}
					
					.sai_suggestions_cls{
					width:130px;
					}
					
					.row_usi_cls {
					padding-left: 0;
					}
				}
				
				@media screen and (min-width: 360px) and (max-width: 767px){
					.sai_inputs_cls input{
					width:130px;
					}
					
					.sai_suggestions_cls{
					width:130px;
					}
					
					.row_usi_cls {
					padding-left: 180px;
					}
					
					.sai_classes_boxgrid{
					width:250px;
					}
					
					.sai_classes_boxgrid2{
					width:250px;
					}
				}
				
				@media screen and (min-width: 768px) and (max-width: 799px){
					.sai_inputs_cls{
					padding-left:70px;	
					}
					
					.sai_inputs_cls input{
					width:300px;
					}
					
					.sai_suggestions_cls{
					width:300px;
					}
					
					.row_usi_cls {
					padding-left: 180px;
					}
				}
				
				@media screen and (min-width: 800px) and (max-width: 980px){
					.sai_inputs_cls input{
					width:280px;
					}
					
					.sai_suggestions_cls{
					width:280px;
					}
					
					.row_usi_cls {
					padding-left: 120px;
					}
				}
			</style>';
		}else{
			echo '
			<style>
				.sai_inputs_cls input{
				width:170px;
				}
				
				.sai_suggestions_cls{
				width:170px;
				}
				
				.row_usi_cls {
				padding-left: 50px;
				}
				
				@media screen and (min-width: 320px) and (max-width: 767px){
					.sai_inputs_cls input{
					width:170px;
					}
					
					.sai_suggestions_cls{
					width:170px;
					}
					
					.row_usi_cls {
					padding-left: 120px;
					}
					
					.sai_classes_boxgrid{
					width:250px;
					}
					
					.sai_classes_boxgrid2{
					width:250px;
					}
				}
				
				@media screen and (min-width: 768px) and (max-width: 980px){
					.sai_inputs_cls{
					padding-left:0px;	
					}
					
					.sai_inputs_cls input{
					width:250px;
					}
					
					.sai_suggestions_cls{
					width:250px;
					}
					
					.row_usi_cls {
					padding-left: 70px;
					}
				}
			</style>';
		}
	}
	
	
	$tc_class = ((!empty($softpanel->pheader) ? (is_cp_theme('paper_lantern') ? 'col-lg-6 col-md-6 col-sm-12 col-xs-12' : 'col-lg-12 col-md-12 col-sm-12 col-xs-12') : (($globals['softpanel'] == 'plesk' && $globals['panel_hf'] == 1) ? 'col-lg-4 col-md-6 col-sm-12 col-xs-12' : 'col-lg-4 col-md-4 col-sm-12 col-xs-12')));
	
	echo '
	<div class="bg bg_usi">
		<br />
		
		<script>
		$(document).ready(function(){
			$("#tab2").hide();
			$("#about").click(function(){
				$("#tab1").fadeOut(1); 
				$("#tab2").fadeIn(500);
			});
			$("#top").click(function(){
				$("#tab2").fadeOut(1); 
				$("#tab1").fadeIn(500);
			});
		
		});
		
		//alert("'.$globals['api_nuphp'].'top_classes.php?top=20&in=json&callback=?");
		$.getJSON("'.$globals['api_nuphp'].'top_classes.php?top=20&in=json&callback=?", 
				
			function (data) {
			 var soft_classes = \'<div class="row row_usi_cls">\';
			 var br = 1; 
			 $.each(data.data, function (i, item) {
				//alert(item.author);
				soft_classes += \'<div class="'.$tc_class.'" style="padding-bottom: 20px;"><div class="sai_classes_boxgrid2" id="'.$globals['index'].'act=classes&cid=\'+item.cid+\'&tab=overview" onclick=window.location=this.id;><div class="sai_classes_boxgrid"><div><h2>\'
				+item.name+
				\'</h2><p style="padding:10px;height:50px;">\'
				+item.desc+\'</p><p style="padding:10px;height:15px;"><b> '.$l['cl_ratings'].'</b> : \'
				+parseFloat(item.ratings)+\'</p> </div><div style="height:200px;"><br /><h2>\'
				+item.name+
				\'</h2><p style="margin-left:10px;margin-top:15px"> <b>'.$l['cl_author'].'</b> : \'
				+item.author+\'</p><p style="margin-left:10px;"> <b>'.$l['cl_license'].'</b> :\'
				+item.license+\'</p><p style="margin-left:10px;"> <b>'.$l['cl_version'].'</b> :\'
				+item.version+\'</p><div align="center"> <a href="'.$globals['index'].'act=classes&cid=\'+item.cid+\'&tab=install" class="sai_cbutton">'.$l['cl_install_but'].'</a><a href="'.$globals['index'].'act=classes&cid=\'+item.cid+\'&tab=file" class="sai_cbutton">'.$l['cl_show_files'].'</a></div></div></div></div></div>\';
				 
				 br += 1 ;
			 });// end of each loop
			
			soft_classes += "</div>";
			$("#tab1").append(soft_classes); 
				
			$(".sai_classes_boxgrid").hover(function(){$(this).stop().animate({top:"-200px"},{queue:false,duration:200});},function() 
			{$(this).stop().animate({top:"0px"},{queue:true,duration:200});});
			
			 }); // end of get json function
			
		 </script>';
		
		echo '
		<div class="tab1" id="tab1" '.($globals['softpanel'] == 'ampps' || $globals['softpanel'] == 'webuzo' ? 'style="display:block"' : '').'>
			<script language="javascript" src="'.$theme['url'].'/js/classes_suggest.js"></script>
			<div class="row">
				<div class="col-lg-10 col-md-11 col-sm-10 col-xs-10" style="text-align:center;">
					<span class="sai_main_head">'.$l['top_classes'].'</span>
				</div>
					
				<div class="col-lg-2 col-md-1 col-sm-2 col-xs-2">
					<a href="javascript:void(0)" id="about"><img src="'.$theme['images'].'info_star.png" alt="'.$l['about'].'" title="'.$l['about'].'" ></a>&nbsp;&nbsp;							
				</div>
			</div>
			<hr>
			
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-2 col-xs-2"></div>
				<div class="col-lg-5 col-md-5 col-sm-7 col-xs-6">
					<fieldset class="sai_inputs sai_inputs_cls">
						<form accept-charset="'.$globals['charset'].'" name="classsearch" method="post" action="" onsubmit="classes_suggestjs.set_inputstring(\'submit\');return false;" id="classsearchform">
							<input type="text" name="searchString" id="searchString" class="sai_inputs sai_inputs_cls" autofocus placeholder="'.$l['search_classes'].'"  onKeyUp="classes_suggestjs.myKeyDownHandler(event, this.value, this.id);" autocomplete="off" sugurl="'.$globals['api_nuphp'].'" onblur="classes_suggestjs.show(1,this.id);" classes_ind="'.$globals['ind'].'"><br />
							<div id="searchsuggestions" class="sai_suggestions sai_suggestions_cls"></div>
						</form>
					</fieldset>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-3 col-xs-4"><div class="sai_search_button" onclick="classes_suggestjs.set_inputstring(\'submit\');"></div></div>
			</div>
			<br /><br />
		</div>';// THIS IS THE CLOSING OF TAB1 DIV
		
		echo '
		<div class="tab2" id="tab2" '.($globals['softpanel'] == 'ampps' || $globals['softpanel'] == 'webuzo' ? 'style="display:none"' : '').'>
		
			<div style="float:right">
				<a href="javascript:void(0)" id="top"><img src="'.$theme['images'].'top_star.png" alt="'.$l['top_classes'].'" title="'.$l['top_classes'].'" id="top"></a>
			</div>
			<center>
				<span class="sai_newhead">'.APP.'</span>
			</center>
			<hr>
			<div class="row">
				<div style="width:20%; float:left;">	
					<img src="'.$theme['images'].'puzzle_pieces.jpg" style=""alt="" class="img-responsive" />
				</div>
				<div style="width:80%; float:right; padding:0 20px;">	
					<font class="sai_newhead">'.$l['classes'].'</font>
					<br /><br />
					<font class="sai_feature_exp">'.$l['classes_exp'].'</font>
				</div>
			</div>
			
			<br /><br />
			
			<div class="row">
				<div style="width:80%; float:left; padding-right:50px;">	
					<font class="sai_newhead">'.$l['classes_speedup'].'</font>
					<br /><br />
					<font class="sai_feature_exp">'.$l['classes_speedup_exp'].'</font>
				</div>
				<div style="width:20%; float:right;">	
					<img src="'.$theme['images'].'speed_up_simple.jpg"  alt="" class="img-responsive"/>
				</div>
			</div>
			
			<br /><br />
			
			<div class="row">
				<div style="width:20%; float:left;">	
					<img src="'.$theme['images'].'integrate.jpg" alt="" class="img-responsive"/>
				</div>
				<div style="width:80%; float:right; padding:0 20px;">	
					<font class="sai_newhead">'.$l['classes_1000'].'</font>
					<br /><br />
					<font class="sai_feature_exp">'.$l['classes_1000_exp'].'</font>
				</div>
			</div>
			
			<br /><br />';
			
		//THIS IS THE CLOSING OF TAB2 DIV
	echo '
		</div><br /><br />
	</div><!--end of bg class-->';
	
	softfooter();
}

function java_userindex_theme(){

global $theme, $globals, $softpanel, $user, $l;

softheader($l['<title>']);

echo '<table width="100%" cellpadding="4" cellspacing="1" border="0">
<tr>
	<td width="115">
		<img src="'.$theme['images'].'efficient.gif" alt="" />
	</td>
	<td valign="top">
		<font class="sai_newhead">'.$l['efficient'].'</font>
		<br /><br />
		<font class="sai_feature_exp">
		'.$l['efficient_exp'].'
		</font>
	</td>
</tr>
</table>

<table width="100%" cellpadding="4" cellspacing="1" border="0">
<tr>
	<td valign="top">
		<font class="sai_newhead">'.$l['convenient'].'</font>
		<br /><br />
		<font class="sai_feature_exp">
		'.$l['convenient_exp'].'
		</font>
	</td>
	<td width="115">
		<img src="'.$theme['images'].'convenient.gif" alt="" />
	</td>
</tr>
</table>

<br /><br />

<table width="100%" cellpadding="4" cellspacing="1" border="0">
<tr>
	<td width="130">
	
	<img src="'.$theme['images'].'dragme.gif" alt="" id="dragme" style="position:relative;" />
	
<script language="javascript" src="'.$theme['url'].'/js/domdrag.js" type="text/javascript"></script>

<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
Drag.init($_("dragme"), $_("dragme"));
// ]]></script>

	</td>
	<td valign="top">
		<font class="sai_newhead">'.$l['play_demos'].'</font>
		<br /><br />
		<font class="sai_feature_exp">
		'.$l['play_demos_exp'].'
		</font>
	</td>
</tr>
</table>

<br /><br />

<table width="100%" cellpadding="4" cellspacing="1" border="0">
<tr>
	<td valign="top">
		<font class="sai_newhead">'.$l['powerful'].'</font>
		<br /><br />
		<font class="sai_feature_exp">
		'.$l['powerful_exp'].'
		</font>
	</td>
	<td width="115">
		<img src="'.$theme['images'].'powerful.gif" alt="" />
	</td>
</tr>
</table>

<br /><br />

<table width="100%" cellpadding="4" cellspacing="1" border="0">
<tr>
	<td width="140">
		<img src="'.$theme['images'].'portable.gif" alt="" />
	</td>
	<td valign="top">
		<font class="sai_newhead">'.$l['portable'].'</font>
		<br /><br />
		<font class="sai_feature_exp">
		'.$l['portable_exp'].'
		</font>
	</td>
</tr>
</table>

<br /><br />';

softfooter();

}

function python_userindex_theme(){

global $theme, $globals, $softpanel, $user, $l;

softheader($l['<title>']);

echo '<table width="100%" cellpadding="4" cellspacing="1" border="0">
<tr>
	<td width="115">
		<img src="'.$theme['images'].'python.jpg" alt="" />
	</td>
	<td valign="top">
		<font class="sai_newhead">'.$l['glimpse_python'].'</font>
		<br /><br />
		<font class="sai_feature_exp">
		'.$l['python_exp'].'
		</font>
	</td>
</tr>
</table>

<table width="100%" cellpadding="4" cellspacing="1" border="0">
<tr>
	<td valign="top">
		<font class="sai_newhead">'.$l['interpreter'].'</font>
		<br /><br />
		<font class="sai_feature_exp">
		'.$l['interpreter_exp'].'
		</font>
	</td>
	<td width="115">
		<img src="'.$theme['images'].'convenient.gif" alt="" />
	</td>
</tr>
</table>

<br /><br />

<table width="100%" cellpadding="4" cellspacing="1" border="0">
<tr>
	<td width="130">
	
	<img src="'.$theme['images'].'dragme.gif" alt="" id="dragme" style="position:relative;" />
	
<script language="javascript" src="'.$theme['url'].'/js/domdrag.js" type="text/javascript"></script>

<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
Drag.init($_("dragme"), $_("dragme"));
// ]]></script>

	</td>
	<td valign="top">
		<font class="sai_newhead">'.$l['play_demos'].'</font>
		<br /><br />
		<font class="sai_feature_exp">
		'.$l['play_demos_exp'].'
		</font>
	</td>
</tr>
</table>
<br /><br />';

softfooter();

}

// The Application Index theme
function apps_userindex_theme(){

global $theme, $globals, $softpanel, $user, $l;

softheader($l['<title>']);

echo '<table width="100%" cellpadding="4" cellspacing="1" border="0">
<tr>
	<td width="115">
		<img src="'.$theme['images'].'efficient.gif" alt="" />
	</td>
	<td valign="top">
		<font class="sai_newhead">'.$l['efficient'].'</font>
		<br /><br />
		<font class="sai_feature_exp">
		'.$l['efficient_exp'].'
		</font>
	</td>
</tr>
</table>

<table width="100%" cellpadding="4" cellspacing="1" border="0">
<tr>
	<td valign="top">
		<font class="sai_newhead">'.$l['convenient'].'</font>
		<br /><br />
		<font class="sai_feature_exp">
		'.$l['convenient_exp'].'
		</font>
	</td>
	<td width="115">
		<img src="'.$theme['images'].'convenient.gif" alt="" />
	</td>
</tr>
</table>

<br /><br />

<table width="100%" cellpadding="4" cellspacing="1" border="0">
<tr>
	<td width="130">
	
	<img src="'.$theme['images'].'dragme.gif" alt="" id="dragme" style="position:relative;" />
	
<script language="javascript" src="'.$theme['url'].'/js/domdrag.js" type="text/javascript"></script>

<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
Drag.init($_("dragme"), $_("dragme"));
// ]]></script>

	</td>
	<td valign="top">
		<font class="sai_newhead">'.$l['play_demos'].'</font>
		<br /><br />
		<font class="sai_feature_exp">
		'.$l['play_demos_exp'].'
		</font>
	</td>
</tr>
</table>

<br /><br />

<table width="100%" cellpadding="4" cellspacing="1" border="0">
<tr>
	<td valign="top">
		<font class="sai_newhead">'.$l['powerful'].'</font>
		<br /><br />
		<font class="sai_feature_exp">
		'.$l['powerful_exp'].'
		</font>
	</td>
	<td width="115">
		<img src="'.$theme['images'].'powerful.gif" alt="" />
	</td>
</tr>
</table>

<br /><br />

<table width="100%" cellpadding="4" cellspacing="1" border="0">
<tr>
	<td width="140">
		<img src="'.$theme['images'].'portable.gif" alt="" />
	</td>
	<td valign="top">
		<font class="sai_newhead">'.$l['portable'].'</font>
		<br /><br />
		<font class="sai_feature_exp">
		'.$l['portable_exp'].'
		</font>
	</td>
</tr>
</table>

<br /><br />';

softfooter();

}

?>