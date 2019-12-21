<?php

//////////////////////////////////////////////////////////////
//===========================================================
// listsoftwares_theme.php
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

function listsoftwares_theme(){

	global $theme, $globals, $user, $l, $cat, $list, $scripts , $allcatwise , $softs, $iscripts, $apps;
	
	softheader($l['<title>'].' - '.$l[$cat]);
	
	if(!empty($globals['lictype'])){
	
		echo '
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
		'; 
		
		if($globals['mode'] == 'apps'){
			$scripts = $apps;
			echo '<link rel="stylesheet" type="text/css" href="'.$globals['mirror_images'].'webuzo/sprites/80.css" />';	
		}else{
			echo '<link rel="stylesheet" type="text/css" href="'.$globals['mirror_images'].'sprites/80.css" />';
		}
		
		$category = @$allcatwise[$globals['mode']][$cat];
		$ids_ = array_keys($category);
		$ids = array_keys($category);
		
		foreach($ids_ as $v){
			
			$v = (int) trim($v);
			if(!empty($v)){
				$ids[$v] = $v;
			}
		}
		
		if(empty($ids)){
			return false;
		}
		
		$branches = array();
		
		$url= $theme['images'];
		echo '
		<div id="motioncontainer" style="position:relative;overflow:hidden;height:200px;width:100%;margin:auto;">
			<div id="motiongallery" style="position:absolute;left:0;top:0;white-space: nowrap;">
				<div class="sai_blog_script_holder">
					<table id="trueContainer" width="100%" border="0" cellspacing="8">
						<tr>';
	
							foreach($scripts as $k => $v){
							
								if(!in_array($k, $ids)){
									continue;
								}
								
								// If the script has a parent and it is enabled we will display only the parent
								if(!empty($v['parent']) && array_key_exists($v['parent'], $iscripts)){
									$branches[$v['parent']][$k] = $v['version'];
									continue;
								}
							
								echo '
								<td valign="middle">
									<a href="'.(($globals['mode'] == 'apps') ? app_link($v['aid']) : script_link($v['sid'])).'" title="'.$v['name'].'" style="display:block; text-decoration:none;" >
										<div class="sai_blog_script"><br />
											<div class="sp80_'.$v['softname'].'" style="margin:20px;"></div>
											<div class="sai_script_name">'.$v['name'].'</div>
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
		<br />
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
	
		foreach ($scripts as $k => $v) {
			
			if(!in_array($k, $ids)){
				continue;
			}
			
			// If the script has a parent and it is enabled we will display only the parent
			if(!empty($v['parent']) && array_key_exists($v['parent'], $iscripts)){
				continue;
			}
			
			$ratings = array();
			$deduct = 1;
			$r = $v['ratings'];
				
			for($i=1; $i<=5; $i++){		
				if($r >= 1){
					$ratings[$i] = '<img src="'.$url.'star.png'.'" alt="('.number_format($v['ratings'], 2).' out of 5)" />';
				}elseif($r > 0){
					$ratings[$i] = '<img src="'.$url.'halfstar.png'.'" alt="('.number_format($v['ratings'], 2).' out of 5)" />';
				}else{
					$ratings[$i] = '<img src="'.$url.'nostar.png'.'" alt="('.number_format($v['ratings'], 2).' out of 5)" />';
				}
				$r = $r - $deduct;
			}	
			
			$demo_scriptname = str_replace(' ', '_', $v['name']);
			echo'
			<div class="bg">
				<div class="sai_loginhead" valign="middle" style="padding-left:10px;"><a href="'.(($globals['mode'] == 'apps') ? app_link($v['aid']) : script_link($v['sid'])).'&tab=install" style="text-decoration: none;">'.$v['name'].'</a></div><hr>
				
				<div class="row">
					<div class="col-sm-2" style="margin-top:20px;">
						<a href="'.(($globals['mode'] == 'apps') ? app_link($v['aid']) : script_link($v['sid'])).'&tab=install">
							<img src="'.$globals['mirror_images'].($globals['mode'] == 'apps' ? 'webuzo/softimages/'.$k.'__logo.gif"' : 'softimages/'.$v['sid'].'__logo.gif"').' alt="'.$v['softname'].'" class="img-responsive" >
						</a>
					</div>
					
					<div class="col-sm-8">
						<div class="row">
							<b><a href="'.(($globals['mode'] == 'apps') ? app_link($v['aid']) : script_link($v['sid'])).'" style="text-decoration:none;">'.$v['fullname'].'</a></b><br />
							<div class="script_rating">'.implode('', $ratings).'</div><br />
							<p>'.$v['description'].'</p>
						</div>
						
						<div class="row">
							<div class="col-sm-5">
								<b>'.$l['version'].' : '.$v['version'].(!empty($branches[$k]) ? ', '.implode(', ', $branches[$k]) : '').'</b>
							</div>
							
							<div class="col-sm-5">
								<b>'.(!empty($v['release_date']) ? $l['release_date'].' : '.$v['release_date'].'</b>' : '').'</b>
							</div>
						</div>
						
						<div class="row">
							<div class="col-sm-5">
								<span class="_ratings">'.$l['rating'].': ('.number_format($v['ratings'], 2).' '.$l['outof'].') '.$l['from'].' '.$v['votes'].' '.$l['votes'].'.</span>
							</div>
							
							<div class="col-sm-5">
								<span class="_views">'.$v['reviews'].' '.$l['reviews'].'. '.$v['views'].' '.$l['views'].'</span>
							</div>
						</div>
					</div>
					
					<div class="col-sm-2" style="margin-top:20px;">
						'.(($globals['mode'] != 'apps') ? (empty($globals['off_demo_link']) ? ' <div align="left"><a href="'.$globals['ind'].'act=demos&soft='.$v['sid'].'" target="_blank" style="text-decoration:none"><i class="fa sai-demo fa-2x" style="float: left;"></i><div class="_links">'.$l['demo'].'</div></a></div>' : '') : '').'
						<br />
						
						<div align="left"><a href="'.$v['support'].'" style="text-decoration:none;"><i class="fa sai-customersupport fa-2x" style="float: left;"></i><div class="_links">'.$l['support'].'</div></a></div>
						<br />
						
						<div align="left"><a href="'.(($globals['mode'] == 'apps') ? app_link($v['aid']) : script_link($v['sid'])).'" style="text-decoration:none"><i class="fa sai-download fa-2x" style="float: left;"></i><div class="_links">'.number_format($v['space']/1024/1024, 2).' MB</div></a></div>
					</div>
				</div><br />
			</div><!--end of bg-->
			<br />';
		}
	}else{
		echo $l['soft_free_note'];
	}
	
	softfooter();

}

?>