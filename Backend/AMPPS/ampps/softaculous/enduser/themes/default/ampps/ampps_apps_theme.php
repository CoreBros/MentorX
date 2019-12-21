<?php

//////////////////////////////////////////////////////////////
//===========================================================
// ampps_apps_theme.php
//===========================================================
// SOFTACULOUS 
// Version : 7.9
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Rishi
// Date:       7th July 2016
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

function ampps_apps_theme(){

global $a_apps, $ampps_apps_installed, $theme, $globals, $user, $l, $langs, $skins, $error, $saved, $done, $list, $k ,$v, $category, $cat; 

softheader($l['<title>']);

@set_time_limit(0);

//AMPPS version 3.8 Needed.

if($globals['amp_version'] < '3.8'){
echo'
	<div class="alert alert-danger">
		<center><strong><u>'.$l['update_needed'].'</u></strong>'.' &nbsp&nbsp '.$l['update_to38'].'</Strong></center>
	</div>';
}

//If Apps file is missing.
if(!is_file($globals['ampps_path'].'/ampps/data/apps')){
	foreach($a_apps as $k => $v){
		if(is_dir($globals['ampps_path'].'/'.$a_apps[$k]['softname'])){
			$ampps_apps_installed [$v['aid']] = array('aid' => $v['aid'], 'name' => $v['name'], 'version' => $v['version'], 'default' => false);
		}
		if($v['aid']  == "1" || $v['aid']  == "2" || $v['aid']  == "3"){
			$ampps_apps_installed [$v['aid']]['default'] = true;
		}
	}
	$apps_list = json_encode($ampps_apps_installed);
	file_put_contents($globals['ampps_path'].'/ampps/data/apps',$apps_list);
}

echo'
	<style>
		._softable{
		border:5px solid #F0F0F0;
		}	
		
		._deschead a:link, ._deschead a:visited, ._deschead a:active, ._deschead a:hover{
		color: #666666;
		font-size:15px;
		font-weight:bold;
		font-family: Arial, Helvetica, sans-serif;
		text-decoration:none;
		}
		
		._descr{
		font-size:11px;
		padding-left:15px;
		}
		
		._icodesc a:link, ._icodesc a:visited, ._icodesc a:active, ._icodesc a:hover{
		color:#666666;
		font-weight:bold;
		font-size:12px;
		font-family: Arial, Helvetica, sans-serif;
		text-decoration:none;
		}
		
		._ratings{
		font-size:12px;
		font-weight:bolder;
		}
		
		._views{
		font-size:12px;
		font-weight:bolder;
		}
		
		._imghr{
		margin:6px 0px;
		}
		
		._links{
		padding: 5px 0 0 30px;	
		}
	
	</style>
		
	<!-- Do not edit IE conditional style below -->
	<!--[if gte IE 5.5]>
	
	<style type="text/css">
		#motioncontainer {
		width:expression(Math.min(this.offsetWidth, maxwidth)+\'px\');
		}
	</style>
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="'.$theme['url'].'/motiongallery.css" />
	<script language="javascript" type="text/javascript" src="'.$theme['url'].'/js/motiongallery.js"></script>
	
	<div class="row-fluid top-buffer col-md-12 col-lg-12" >
	
		<div id="motioncontainer" style="position: relative; overflow: hidden; height: 180px; width: 100%; margin: auto; max-width: 1000px;">
			<div id="motiongallery" style="position:absolute;left:0;top:0;white-space: nowrap;">	
				<div class="sai_blog_script_holder">
					<table id="trueContainer" width="100%" border="0" cellspacing="8">
						<tr>';
						foreach($a_apps as $k => $v){
							echo '
							<td align="middle"><a href="'.$globals['ind'].'act=a_apps&app='.$k.'">
								<a href="'.$globals['ind'].'act=a_apps&app='.$k.'" title="'.$v['name'].'"style="display:block; text-decoration:none;" >
									<div class="sai_blog_script">
										<img src="'.$globals['mirror_images'].'ampps/softimages/'.$v['imgid'].'__logo.gif" style="margin:20px;">
										<p><div class="sai_script_name text-center">'.$v['fullname'].'</div></p>
									</div>
								</a>
							</td>';
						}
						echo '
						</tr>
					</table>
				</div>
			</div>
		</div>
		<br />';
		
		//Check Update for AMPPS APPS.
		foreach($ampps_apps_installed as $i => $j){

			if($a_apps[$j['aid']]['version'] > $j['version']){
				$chkupdate[$j['aid']]['aid'] = $j['aid'];
				$chkupdate[$j['aid']]['name'] = $a_apps[$j['aid']]['fullname'];
			}
		}
		
		if(!empty($chkupdate) && $globals['amp_version'] >= '3.8'){
			sort($chkupdate);
			echo '<div class="col-md-12 col-lg-12"><!----#Update---->
					<div class="alert alert-info" >
						<a href ="javascript:void(0)" class="close" data-dismiss="alert">&times;</a>
							<center><img src="'.$theme['images'].'upgrade_logo.png" height="25" width="25" /> &nbsp'.$l['update_note'];
							foreach($chkupdate as $k => $v){
							echo'
							<a style="color:#31708f;" target="_blank" href="'.$globals['ind'].'act=a_apps_update&app='.$chkupdate[$k]['aid'].'" ><b>'.$chkupdate[$k]['name'].'</b></a>,&nbsp';
							}
						echo'</center>
					</div>
				</div>';
		}
		echo'
		<br />
		
		<script language="javascript" type="text/javascript">
			
		if(typeof $_ != "function"){
			function $_(id){ return document.getElementById(id); };
		}
		function startmotiongal(){
			$_("trueContainer").style.height = $_("motioncontainer").offsetHeight+"px";
			fillup();
		};
		try{
			$_("trueContainer").style.height = $_("motioncontainer").offsetHeight+"px";
			$(document).ready(function(){
				setTimeout("startmotiongal();", 100);
			});
		} catch(e){ }
		
		</script>';

		foreach ($a_apps as $k => $v) {
			$ratings = array();
			$deduct = 1;
			$r = $v['ratings'];
				
			for($i=1; $i<=5; $i++){		
				if($r >= 1){
					$ratings[$i] = '<img src="'.$theme['images'].'star.png'.'" alt="('.number_format($v['ratings'], 2).' out of 5)" />';
				}elseif($r > 0){
					$ratings[$i] = '<img src="'.$theme['images'].'halfstar.png'.'" alt="('.number_format($v['ratings'], 2).' out of 5)" />';
				}else{
					$ratings[$i] = '<img src="'.$theme['images'].'nostar.png'.'" alt="('.number_format($v['ratings'], 2).' out of 5)" />';
				}
				$r = $r - $deduct;
			}	
			$demo_scriptname = str_replace(' ', '_', $v['name']);
		
		echo'		
		<div class= "col-md-12 col-lg-12">
			<div class="panel panel" style="border-top:5px solid darkgrey">
				<div class="panel-heading">
					<a style="text-decoration:none;" href="'.$globals['ind'].'act=a_apps&app='.$k.'">
					<span style="color: #008cba; font-size:15px;">'.$v['fullname'].'</span>
					</a>&nbsp
					<hr style="margin-top:5px;margin-bottom:5px">
				</div>
			
				<div class="panel-body">
				<div class="row">
				<div class="col-md-2 col-lg-2" style="margin-bottom:20px;">
					<center><a href="'.$globals['ind'].'act=a_apps&app='.$k.'">
						<img src="'.$globals['mirror_images'].'ampps/softimages/'.$v['imgid'].'__logo.gif" height="80" width="80">
					</a></center>
				</div>
	
				<div class="col-md-10 col-lg-8">
					<p style="text-align:justify; font-size:15px;">'.$v['description'].'</p>
					<p style="text-align:justify; font-size:13px;"><b>'.$l['version'].' : '.$v['version'].'</b></br>
				<b>'.(!empty($v['release_date']) ? $l['release_date'].' : '.$v['release_date'].'</b>' : '').'</p>
				</div>
	
				<div class="col-lg-2 col-xs-12 top-buffer">
					<div align="left">
						';if($globals['amp_version'] >= '3.8'){
							foreach($ampps_apps_installed as $j => $m){
								if($m['aid'] == $v['aid'] && $m['version'] < $v['version']){
								echo'<a href = "'.$globals['ind'].'act=a_apps_update&app='.$k.'" style="text-decoration:none">
									<div class="alert alert-info" style="height:40px; width:100px; padding-top: 10px; padding-bottom: 10px;" align="center">
										<u>'.$l['update'].'</u>
									</div></a>';
								}
							}
						}echo'
						<a style="text-decoration:none; font-size:13px;" href="'.$v['support'].'" target="_blank">
							<i class="fa sai-customersupport fa-2x" style="float: left;"></i>&nbsp
							'.$l['support'].'
						</a><br><br>
						
						<a href="'.$globals['ind'].'act=a_apps&app='.$k.'" style="text-decoration:none; font-size:13px;">
							<i class="fa sai-download fa-2x" style="float: left;"></i>&nbsp
							'.number_format($v['space']/1024/1024, 2).' MB
						</a><br><br>
					</div>
				</div>
			</div>
		</div>
	</div>	
</div>
	
';
}

softfooter();
}

?>