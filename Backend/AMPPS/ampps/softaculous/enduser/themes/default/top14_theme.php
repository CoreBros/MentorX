<?php

//////////////////////////////////////////////////////////////
//===========================================================
// categories_theme.php
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

function top14_theme(){

global $theme, $globals, $user, $l, $langs, $skins, $error, $saved, $categories, $iscripts, $updates_available, $allcatwise, $scripts, $cscripts, $softpanel, $user_sitepad;

	$top = array();
	
	foreach($scripts as $k => $v){
		if(empty($iscripts[$k])){
			continue;
		}
		$top[$k] = $v['ratings']*$v['votes'];
	}
		
	// Sorting according to top ratings
	arsort($top);
	
	//To fill up the scripts if less than 7 are selected by admin
	$ext_fill = array();
	$ext_fill = $top;
	if(file_exists($globals['path'].'/conf/top_scripts.php')){
		$selected_top = $top = unserialize(file_get_contents($globals['path'].'/conf/top_scripts.php'));
	}

	// If Admin has checked Append scripts than only append the scripts. Otherwise Only Selected Scripts will be displayed.
	if(count($top) < 7 && !empty($globals['append_apps'])){
		foreach($ext_fill as $k => $v){
			$top[$k] = $k;
		}
		array_unique($top);
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
		
		if(empty($iscripts[$k]) || (empty($selected_top[$k]) && !empty($scripts[$k]['parent']) && !empty($iscripts[$scripts[$k]['parent']]))){
			unset($top[$k]);
		}		
		
	}
	
	/* // Do we need to add SitePad ? 
	if(can_show_sitepad() && !file_exists($globals['path'].'/conf/top_scripts.php')){
		
		$tmp_top = $top;
		$top = array();
		
		if(!array_key_exists(26, $tmp_top)){
			$tmp_top = array_reverse($tmp_top, true);
			$tmp_top[-1] = 5;
			$top = array_reverse($tmp_top, true); 
		}else{
			foreach($tmp_top as $tk => $tv){
				$top[$tk] = $tv;
				if($tk == 26){
					$top[-1] = 5;
				}
			}
		}
		
	} */
	//r_print($top);
	
	$updates_available = 0;
	foreach($user['ins'] as $insid => $soft){
		if(!empty($iscripts[$soft['sid']]) ){		
			if(is_upgradable($insid)){		
				$updates_available++;
			}
		}
	}

	if($globals['softimages'] != $globals['mirror_images']){
		if($globals['softpanel'] == 'cpanel'){
			$globals['softimages'] = 'softaculous/'.$globals['softimages'];
		}elseif($globals['softpanel'] == 'directadmin'){
			$globals['softimages'] = 'CMD_PLUGINS/softaculous/'.$globals['softimages'];
		}
	}
	
	$url = $globals['softimages'];
	
	$cat_image_path = 'themes/default/images/cats/';
	
	if($globals['softpanel'] == 'directadmin'){
		$fullurl = 'CMD_PLUGINS/softaculous';
		$cat_image_path = 'images/themes/default/images/cats/';
	}elseif($globals['softpanel'] == 'cpanel'){
		$fullurl = 'softaculous';
	}elseif($globals['softpanel'] == 'plesk'){
		$fullurl = '/modules/softaculous';
	}else{
		$fullurl = 'http://localhost/ampps';
	}
	
	$cat_width = 24;
	$cat_height = 40;
	
	if($globals['theme'] != 'default'){
		
		if(is_cp_theme('paper_lantern')){
			
			$cat_image_path = 'themes/default/';
			
			if($globals['softpanel'] == 'directadmin'){
				$fullurl = 'CMD_PLUGINS/softaculous';
				$cat_image_path = 'images/themes/default/';
			}elseif($globals['softpanel'] == 'cpanel'){
				$fullurl = 'softaculous';
			}elseif($globals['softpanel'] == 'plesk'){
				$fullurl = '/modules/softaculous';
			}else{
				$fullurl = 'http://localhost/ampps';
			}
			
			$cat_width = 90;
			$cat_height = 40;
			
		}else{
			
			$cat_width = 70;
			$cat_height = 40;
			
		}
	}
	
	$no_cat = (!empty($globals['disable_cats']) ? $globals['disable_cats'] : optGET('nocat'));
	$my_ins = (!empty($globals['enable_myins']) ? $globals['enable_myins'] : optGET('noins'));
	
	// For directadmin evolution theme we need to pass JSON data in the below format
	if($globals['softpanel'] == 'directadmin' && $softpanel->detect_theme() == 'evolution'){
		
		// This theme needs full path i.e. /
		// Sometimes it is https://images.softaculous.com
		$fullurl = (!preg_match('/^http(s|)\:/is', $fullurl) ? '/' : '').$fullurl;
		$url = (!preg_match('/^http(s|)\:/is', $url) ? '/' : '').$url;
		
		$menu_count = 0;
		
		// For Users installations
		if(!empty($my_ins) && !empty($user['ins'])){
			
			$menu[$menu_count]['name'] = $l['installed_apps'];
			$menu[$menu_count]['icon'] = $fullurl.'/'.$theme['images'].'soft.png';
			$i = 0;
			
			// We want the new installations first
			$user_ins = array_reverse($user['ins']);
			
			foreach($user_ins as $uk => $uv){
				
				$img_path = 'top15/48/'.$scripts[$uv['sid']]['softname'].'.png';
				
				// custom scripts logos path
				if($uv['sid'] > 10000){
					if(file_exists($theme['images'].'topscripts/48/'.$uv['sid'].'__logo.gif')){
						$cscript_img_path = '/CMD_PLUGINS/softaculous/'.$theme['images'].'topscripts/48/'.$uv['sid'].'__logo.gif"';
					}elseif(file_exists($theme['images'].'topscripts/32/'.$uv['sid'].'__logo.gif')){
						$cscript_img_path = '/CMD_PLUGINS/softaculous/'.$theme['images'].'topscripts/32/'.$uv['sid'].'__logo.gif"';
					}else{
						$cscript_img_path = $fullurl.'/'.$theme['images'].'top14_custom_script.png"';
					}
				}
				
				$imgsrc = ($uv['sid'] > 10000 ? $cscript_img_path : $url.$img_path);
				
				// Check if the script supports Sign On
				$has_sign_on = has_sign_on($uv['sid']);
				
				$_site_name = @unserialize($uv['site_name']);
				
				$hrefurl = (!empty($has_sign_on) ? $fullurl.'/'.$globals['ind'].'act=sign_on&insid='.$uv['insid'].'&autoid='.srandstr(32) : $fullurl.'/'.$globals['ind'].'act=editdetail&insid='.$uv['insid']);
			
				// Make the entries
				$menu[$menu_count]['entries'][$i]['href'] = $hrefurl;
				$menu[$menu_count]['entries'][$i]['name'] = (!empty($uv['site_name']) ? (!empty($_site_name) ? $_site_name : $uv['site_name']) : $iscripts[$uv['sid']]['name']);
				$menu[$menu_count]['entries'][$i]['icon'] = $imgsrc;
				$menu[$menu_count]['entries'][$i]['newTab'] = false;
				$menu[$menu_count]['entries'][$i]['updates'] = 0;
				
				$i++;
				
				// Display max 13 installations
				if($i == 13){
					// Make the entries for Show More
					$menu[$menu_count]['entries'][$i]['href'] = $fullurl.'/'.$globals['ind'].'act=installations';
					$menu[$menu_count]['entries'][$i]['name'] = $l['show_all'];
					$menu[$menu_count]['entries'][$i]['icon'] = '/CMD_PLUGINS/softaculous/'.$theme['images'].'plus.png';
					$menu[$menu_count]['entries'][$i]['newTab'] = false;
					$menu[$menu_count]['entries'][$i]['updates'] = 0;
					break;
				}
			}
			
			$menu_count++;
		
		} // End of $my_ins
		
		$menu[$menu_count]['name'] = $globals['show_top_scripts'];
		$menu[$menu_count]['icon'] = $fullurl.'/'.$theme['images'].'soft.png';
		$i = 0;
		foreach($top as $k => $v){
			
			// -1 is exception for SitePad
			if(empty($iscripts[$k]) && $k != -1){
				continue;
			}
			
			$hrefurl = $fullurl.'/'.$globals['ind'].'act='.($iscripts[$k]['type'] == 'perl' ? 'perl' : ($iscripts[$v]['type'] == 'js' ? 'js' : 'software' )).'&soft='.$k;
			$img_path = 'top15/48/'.$scripts[$k]['softname'].'.png';
				
			// custom scripts logos path
			if($k > 10000){
				if(file_exists($theme['images'].'topscripts/48/'.$k.'__logo.gif')){
					$cscript_img_path = '/CMD_PLUGINS/softaculous/'.$theme['images'].'topscripts/48/'.$k.'__logo.gif';
				}elseif(file_exists($theme['images'].'topscripts/32/'.$k.'__logo.gif')){
					$cscript_img_path = '/CMD_PLUGINS/softaculous/'.$theme['images'].'topscripts/32/'.$k.'__logo.gif';				
				}else{
					$cscript_img_path = $fullurl.'/'.$theme['images'].'top14_custom_script.png';
				}
			}
			$imgsrc = ($k > 10000 ? $cscript_img_path : $url.$img_path);
			
			// Make the entries
			$menu[$menu_count]['entries'][$i]['href'] = $hrefurl;
			$menu[$menu_count]['entries'][$i]['name'] = $iscripts[$k]['name'];
			$menu[$menu_count]['entries'][$i]['icon'] = $imgsrc;
			$menu[$menu_count]['entries'][$i]['newTab'] = false;
			$menu[$menu_count]['entries'][$i]['updates'] = 0;
			
			$i++;
			
			if($i == 14 && !empty($globals['append_apps'])){
				break;
			}elseif(!file_exists($globals['path'].'/conf/top_scripts.php') && empty($globals['append_apps']) && $i == 14){
				// This is the DEFAULT case if scripts are not selected AND append_apps is not checked then display 14 scripts by default.
				break;
			}
		}
		
		//r_print($menu);
		$data = json_encode($menu, JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT);
		echo $data;
		
		return true;
		
	}

	$custome_width = optGET('width');
	
	if($globals['softpanel'] == 'plesk'){
		$width = '450px';
		$s_width = '455px';
	}else{ 
		$width = 'auto';
		$s_width = 'auto';
	}
	
	if(!empty($custome_width) && is_numeric($custome_width)){
		$width = $custome_width.'px';
		$s_width = ($custome_width+5).'px';
	}
	
	//Including font-awesome style here since the class 'fa' was conflicting with cPanel's style class 'fa'
	$fa_class = file_get_contents($globals['path']."/enduser/themes/default/font-awesome.css");
				
	//Changing the class name in style
	$fa_class = str_replace('.fa {', '.sai_fa {', $fa_class);
	//Changing the fonts URL
	$fa_class = str_replace('url(\'fonts', 'url(\'softaculous/themes/default/fonts', $fa_class);
	//Adding double slashes since one gets parsed by the browser
	$fa_class = str_replace('content: "\\', 'content: "\\\\', $fa_class);
	
	// Some modifications to make the category look good in cPanel's Dark and Light style
	if((!empty($softpanel->cp_style)) && $softpanel->cp_style == 'dark'){
		
		$cat_color = '#FFF';
		$cat_scroll_left = 'white_move_left.png';
		$cat_scroll_right = 'white_move_right.png';
		$softac_cat_bgcolor = '#333';
		$softac_cat_color = 'color:#FFF;';
		
	}else{
		
		$cat_color = '#348AC4';
		$cat_scroll_left = 'move_left.png';
		$cat_scroll_right = 'move_right.png';
		$softac_cat_bgcolor = '#EEE';
		$softac_cat_color = '';
	}

$str = '
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="'.$fullurl.'/'.$cat_image_path.'ie7.css?'.$GLOBALS['globals']['version'].'">
<![endif]-->
<style type="text/css">
'.$fa_class.'
.top14catbg{
width:'.$cat_width.'px;
height:'.$cat_height.'px;
padding:5px;
margin-top:5px;
font-size:19px;
color:'.$cat_color.';
}

#top14scriptbg{
padding:12px;
}

#soft_div1{
font-size: 11px;
padding: 0px;
width:500px;
font-family: Verdana, Tahoma, Arial, "Trebuchet MS", "Times New Roman", Georgia, sans-serif, serif;
}

.softac_cat {
vertical-align:middle;padding:5px;text-align:left;background-color: #DDD;
}

#top14catmargin{
padding-bottom:5px;
}
   
</style>';

if($globals['softpanel'] == 'directadmin'){
	$str .= '<img src="'.$fullurl.'/'.$theme['images'].'da.gif" align="left"/><br /><br /><br />
	<div style="margin-left:70px;margin-right:15px"><br /><br />';
}

if($globals['softpanel'] == 'plesk'){
	$str .= '<center><img src="'.$fullurl.'/'.$theme['images'].'plesk.gif" /></center>';
}

if(!empty($updates_available)){	
	$str .= '<div style="background-color:#FAFBD9;width:auto;padding:7px;"><center>
	<a href="'.$fullurl.'/'.$globals['ind'].'act=installations&showupdates=true" alt="Updates" style="background-color: #FAFBD9;font-size:13px;padding:8px;text-decoration:none;"><img src="'.$fullurl.'/'.$theme['images'].'notice.gif" border="0" align="middle" /> &nbsp; '.lang_vars($l['updates_available'], array($updates_available)).'</a></center></div>';
}

	// For Users installations
	if(!empty($my_ins) && !empty($user['ins'])){
		
		$str .= '<div class="softac_ins" style="vertical-align:middle;padding:5px;text-align:left;background-color: '.$softac_cat_bgcolor.';width:'.$width.';'.$softac_cat_color.'"><b>'.$l['my_installations'].' :</b></div>
		<table border="0" cellpadding="0" cellspacing="0" style="table-layout: fixed;" width="100%"><tr>
		<td width="15px" onmouseover="mousemove(\'softins_div\', event);" onmouseout="softstop(\'softins_div\', event);" align="center">
			<img src="'.$fullurl.'/'.$theme['images'].$cat_scroll_left.'" alt="Left" border="0"/>
		</td>
		<td>
		<div style="overflow:hidden;display: block;width:'.$s_width.';" id="softins_div" onclick="softstop(this.id, event);">
		<table border="0" cellpadding="7" cellspacing="3" style="table-layout:fixed;" width="100%"><tr>';
		
		// We want the new installations first
		$user_ins = array_reverse($user['ins']);
		
		foreach($user_ins as $uk => $uv){
			
			// We have to make some chnages as per the theme (i.e for x3 and paper_lantern)
			if(is_cp_theme('paper_lantern')){
				$img_path = 'top15/48/'.$scripts[$uv['sid']]['softname'].'.png';
				$td_width = 100;
				$td_height = 80;
			}else{
				$img_path = 'top15/32/'.$uv['sid'].'__logo.gif';
				$td_width = 80;
				$td_height = 50;
			}
				
			// custom scripts logos path
			if($uv['sid'] > 10000){
				if(is_cp_theme('paper_lantern') && file_exists($theme['images'].'topscripts/48/'.$uv['sid'].'__logo.gif')){
					$cscript_img_path = 'softaculous/'.$theme['images'].'topscripts/48/'.$uv['sid'].'__logo.gif"';
				}elseif(file_exists($theme['images'].'topscripts/32/'.$uv['sid'].'__logo.gif')){
					$cscript_img_path = 'softaculous/'.$theme['images'].'topscripts/32/'.$uv['sid'].'__logo.gif"';				
				}else{
					$cscript_img_path = $fullurl.'/'.$theme['images'].'top14_custom_script.png"';
				}
			}
			
			// Check if the script supports Sign On
			$has_sign_on = has_sign_on($uv['sid']);
			
			$_site_name = @unserialize($uv['site_name']);
			
			$str .= '<td width="'.$td_width.'" valign="middle" align="center" height="'.$td_height.'"><a href="'.$fullurl.'/'.$globals['ind'].'act=editdetail&insid='.$uv['insid'].'" style="text-decoration:none;'.$softac_cat_color.'"><img src="'.($uv['sid'] > 10000 ? $cscript_img_path : $url.$img_path.'"').' border="0" id="top14scriptbg"/></a><br />'.(!empty($has_sign_on) ? '<a href="'.$fullurl.'/'.$globals['ind'].'act=sign_on&insid='.$uv['insid'].'&autoid='.srandstr(32).'" target="_blank" style="text-decoration:none;">'.(is_cp_theme('paper_lantern') || is_cp_theme('x3') ? '<i class="sai_fa sai-blogs fa-1x" style="font-size:1.1em;"></i>' : '<img src="'.$fullurl.'/'.$cat_image_path.'php_blogs.gif" title="" style="height:13;width:13;vertical-align:bottom;" border="0">').'</a>&nbsp;' : '').'<a href="'.$fullurl.'/'.$globals['ind'].'act=editdetail&insid='.$uv['insid'].'" style="text-decoration:none; vertical-align:top;'.$softac_cat_color.'">'.(!empty($uv['site_name']) ? (!empty($_site_name) ? $_site_name : $uv['site_name']) : $iscripts[$uv['sid']]['name']).'</a></td>';
		}
		
		$str .= '</tr></table></div></td>
		<td width="15px" onmouseover="mousemove(\'softins_div\', event);" onmouseout="softstop(\'softins_div\', event);" align="center">
		<img src="'.$fullurl.'/'.$theme['images'].$cat_scroll_right.'" alt="Right" border="0"/>
		</td>
		</tr></table>';
	
	} // End of $my_ins
	
	if(empty($no_cat) || !empty($my_ins)){
		$str .= '<div class="softac_cat" style="vertical-align:middle;padding:5px;text-align:left;background-color: '.$softac_cat_bgcolor.';width:'.$width.';'.$softac_cat_color.'"><b>'.$l['script'].':</b></div>';
	}
	
	$str .= '<table border="0" cellpadding="0" cellspacing="0" style="table-layout: fixed;" width="100%"><tr>
		<td width="15px" onmouseover="mousemove(\'script_div\', event);" onmouseout="softstop(\'script_div\', event);" align="center">
			<img src="'.$fullurl.'/'.$theme['images'].$cat_scroll_left.'" alt="Left" border="0"/>
		</td>
		<td>
		<div style="overflow:hidden;display: block;width:'.$s_width.';" id="script_div" onclick="softstop(this.id, event);">
		<table border="0" cellpadding="7" cellspacing="3" id="script_table" style="table-layout: fixed;" width="100%"><tr>';
	$i=1;
	
		foreach($top as $k => $v){
			// -1 is exception for SitePad
			if(empty($iscripts[$k]) && $k != -1){
				continue;
			}
			
			// We have to make some chnages as per the theme (i.e for x3 and paper_lantern)
			if(is_cp_theme('paper_lantern')){
				$img_path = 'top15/48/'.$scripts[$k]['softname'].'.png';
				$td_width = 100;
				$td_height = 80;
			}else{
				$img_path = 'top15/32/'.$k.'__logo.gif';
				$td_width = 80;
				$td_height = 50;
			}
				
			// custom scripts logos path
			if($k > 10000){
				if(is_cp_theme('paper_lantern') && file_exists($theme['images'].'topscripts/48/'.$k.'__logo.gif')){
					$cscript_img_path = 'softaculous/'.$theme['images'].'topscripts/48/'.$k.'__logo.gif"';
				}elseif(file_exists($theme['images'].'topscripts/32/'.$k.'__logo.gif')){
					$cscript_img_path = 'softaculous/'.$theme['images'].'topscripts/32/'.$k.'__logo.gif"';				
				}else{
					$cscript_img_path = $fullurl.'/'.$theme['images'].'top14_custom_script.png"';
				}
			}
			
			if($k == -1){
				$hrefurl = $fullurl.'/'.$globals['ind'].'act='.(!empty($user_sitepad['apikey']) ? 'sitepad' : 'sitepad_overview');
				$imgsrc = $fullurl.'/'.$theme['images'].'sitepad_'.(is_cp_theme('paper_lantern') ? '48' : '32').'.png';
				$link_name = 'SitePad';
			}else{
				$hrefurl = $fullurl.'/'.$globals['ind'].'act='.($iscripts[$k]['type'] == 'perl' ? 'perl' : ($iscripts[$v]['type'] == 'js' ? 'js' : 'software' )).'&soft='.$k;
				$imgsrc = ($k > 10000 ? $cscript_img_path : $url.$img_path.'"');
				$link_name = $iscripts[$k]['name'];
			}
			
			$str .= '<td width="'.$td_width.'" valign="middle" align="center" height="'.$td_height.'"><a href="'.$hrefurl.'" style="text-decoration:none;'.$softac_cat_color.'"><img src="'.$imgsrc.'" border="0" id="top14scriptbg"/><br />'.$link_name.'</a></td>';
			$i++;
			if($i == 15 && !empty($globals['append_apps'])){
				break;
			}elseif(!file_exists($globals['path'].'/conf/top_scripts.php') && empty($globals['append_apps']) && $i == 15){
				// This is the DEFAULT case if scripts are not selected AND append_apps is not checked then display 14 scripts by default.
				break;
			}
		}
	
	$str .= '</tr></table></div></td>
		<td width="15px" onmouseover="mousemove(\'script_div\', event);" onmouseout="softstop(\'script_div\', event);" align="center">
		<img src="'.$fullurl.'/'.$theme['images'].$cat_scroll_right.'" alt="Right" border="0"/>
		</td>
		</tr></table>';
	
	// Disable category 
	if(empty($no_cat)){
$str .= '<div class="softac_cat" style="vertical-align:middle;padding:5px;text-align:left;background-color: '.$softac_cat_bgcolor.';width:'.$width.';'.$softac_cat_color.'"><b>'.$l['category'].' :</b></div>
		<table border="0" cellpadding="0" cellspacing="0" style="table-layout: fixed;" width="100%"><tr>
		<td width="15px" onmouseover="mousemove(\'softcat_div\', event);" onmouseout="softstop(\'softcat_div\', event);" align="center">
			<img src="'.$fullurl.'/'.$theme['images'].$cat_scroll_left.'" alt="Left" border="0"/>
		</td>
		<td>
		<div style="overflow:hidden;display: block;width:'.$s_width.';" id="softcat_div" onclick="softstop(this.id, event);">
		<table border="0" cellpadding="7" cellspacing="0" style="table-layout:fixed;"><tr>';
		foreach($allcatwise as $type => $cats){
			foreach($cats as $k => $v){
				//If there is no script in this category no need to display
				if(empty($v)){
					continue;
				}
				
				$str .= ' <td width="'.$td_width.'" valign="top" align="center"><a href="'.$fullurl.'/'.$globals['index'].'ind='.$type.'&act=listsoftwares&cat='.$k.'" style="text-decoration:none;'.$softac_cat_color.'" class="desc">'.((is_cp_theme('paper_lantern') || is_cp_theme('x3')) ? '<div class="top14catbg"><i class="sai_fa sai-'.$k.(is_cp_theme('x3') ? ' fa-1x' : ' fa-2x').'"></i></div>' : '<img src="'.$fullurl.'/'.$cat_image_path.$type.'_'.$k.'.gif" title="'.strtoupper($type).' '.strtoupper($k).'" border="0">').(!is_cp_theme('x3') ? '<br />' : '').'<div  id="top14catmargin">'.$l['cat_'.$type.'_'.$k].'</div></a></td>';
				
			}
		}
		
	$str .= '</tr></table></div></td>
		<td width="15px" onmouseover="mousemove(\'softcat_div\', event);" onmouseout="softstop(\'softcat_div\', event);" align="center">
		<img src="'.$fullurl.'/'.$theme['images'].$cat_scroll_right.'" alt="Right" border="0"/>
		</td>
		</tr></table>';
	
	} // End of $no_cat
	
	// If its Dirctadmin than Closing the DIV
	if($globals['softpanel'] == 'directadmin'){
		$str .= '</div>';	
	}

echo 'var softOffsets = function(e){
	e = e || window.event;
	 
	var
	//cache document variables
	_d = document, _dBody = _d.body, _dDocEl = _d.documentElement, _o = null,
	 
	//calculate scroll values
	_scroll_left = _dDocEl.scrollLeft ? _dDocEl.scrollLeft : 0 + _dBody.scrollLeft ? _dBody.scrollLeft : 0,
	_scroll_top = _dDocEl.scrollTop ? _dDocEl.scrollTop : 0 + _dBody.scrollTop ? _dBody.scrollTop : 0,
	 
	
	window_pos = {
	_x: (e.pageX || e.clientX) + _scroll_left, _y: (e.pageY || e.clientY) + _scroll_top
	},
	 
	
	viewport_pos = {
	_x: (e.pageX || e.clientX), _y: (e.pageY || e.clientY)
	},
	 
	
	_console = function(o, type) {
	o = (typeof o === "object") ? o : _d.getElementById(o);
	o.innerHTML = type + " = [ " +
	" X: " + ((type === "viewport") ? viewport_pos._x : window_pos._x) +
	" Y: " + ((type === "viewport") ? viewport_pos._y : window_pos._y) +
	" ] Foo: " + Math.random()
	};
	 
	return {
	ViewPortX: viewport_pos._x,
	ViewPortY: viewport_pos._y,
	 
	WindowX: window_pos._x,
	WindowY: window_pos._y,
	 
	ViewPort: [viewport_pos._x, viewport_pos._y],
	Window: [window_pos._x, window_pos._y],
	 
	ToString: _console
	};
};

//Finds the position of the element
function findelpos(ele){
	var curleft = 0;
	var curtop = 0;
	if(ele.offsetParent){
		while(1){
			curleft += ele.offsetLeft;
			curtop += ele.offsetTop;
			if(!ele.offsetParent){
				break;
			}
			ele = ele.offsetParent;
		}
	}else if(ele.x){
		curleft += ele.x;
		curtop += ele.y;
	}
	return [curleft,curtop];
};

function mousemove(id, e){

	if(typeof softac[id+"left"] == "undefined"){
		softac[id+"right"] = "";
		softac[id+"left"] = "";
		softac[id+"entered"] = false;
	}
	
	if(softac[id+"entered"] == true){
		return false;
	}
	
	softac[id+"entered"] = true;
	
	var ele = document.getElementById(id);
	var mouse = softOffsets(e);
	mouse[0] = mouse.ViewPortX;	
	softac[id+"elpos"] = findelpos(ele);	
	softac[id+"menuwidth"] = ele.offsetWidth;	
	softac[id+"leftbound"] =((softac[id+"menuwidth"]-20)/2) + softac[id+"elpos"][0];
	softac[id+"rightbound"] =((softac[id+"menuwidth"]+20)/2) + softac[id+"elpos"][0];
	
	//alert(softac[id+"leftbound"]+" "+softac[id+"rightbound"]+" "+mouse[0]);	
	//document.getElementById("aaa").innerHTML = mouse[0]+"<br />"+document.getElementById("aaa").innerHTML;
	
	if (mouse[0]>softac[id+"rightbound"]){
		softLeft(id);
	}else if (mouse[0]<softac[id+"leftbound"]){
		softRight(id);
	}else{
		softstop(id, e);
	}
}
	
var softac = new Object();

function softLeft(id){
	clearTimeout(softac[id+"right"]);
	document.getElementById(id).scrollLeft += 3;
	softac[id+"right"] = setTimeout("softLeft(\'"+id+"\')",10);
};

function softRight(id){	
	clearTimeout(softac[id+"left"]);
	document.getElementById(id).scrollLeft -= 3;//alert(document.getElementById(id).scrollLeft);return;
	softac[id+"left"] = setTimeout("softRight(\'"+id+"\')",10);
};

function softstop(id, e){	
	clearTimeout(softac[id+"right"]); 
	clearTimeout(softac[id+"left"]);
	softac[id+"entered"] = false;
};';

// cPanels Notice section code
$notice = '<div style="width:195px;padding:7px;height:50px"><center>
			<a href="'.$fullurl.'/'.$globals['ind'].'act=installations&showupdates=true" alt="Updates" style="font-size:13px;padding:3px;text-decoration:none;"><img src="'.$fullurl.'/'.$theme['images'].'softaculous.gif" border="0" align="middle" height="30px" width="100px"/> <br />
&nbsp; '.lang_vars($l['updates_available_notice'], array($updates_available)).'</a></center></div>';

echo 'var soft_html = \''.str_replace(array('\'', "
", "\r"), array('\\\'', '\'+"\n"+\'', '\'+"\n"+\''),$str).'\';
';

if($globals['softpanel'] == 'directadmin'){
	echo 'document.getElementById("soft_div1").innerHTML = soft_html;';
}elseif($globals['softpanel'] == 'plesk'){
	
	echo 'document.getElementById("secondary").innerHTML = "<div class=\'applications-dashboard-box\'>" + soft_html+ "</div>"+document.getElementById("secondary").innerHTML;';
}else{
	//Top Scripts were loaded before the div 'soft_div-body' creation
	echo 'window.onload = function() {
			setTimeout(show_topscripts, 1000);
		};
		
		function show_topscripts(){';
		
		if(!empty($globals['show_top_scripts'])){
			echo 'document.getElementById("soft_div-body").innerHTML = soft_html;';
		}
		if(!empty($globals['show_in_notice']) && $updates_available > 0){
			echo 'var soft_notice = \''.str_replace(array('\'', "
", "\r"), array('\\\'', '\'+"\n"+\'', '\'+"\n"+\''),$notice).'\';
			document.getElementById("noticeboard").innerHTML += soft_notice;';
		}
		
	echo '};';
	
}

}

?>