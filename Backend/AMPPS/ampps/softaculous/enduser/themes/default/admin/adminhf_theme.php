<?php

//////////////////////////////////////////////////////////////
//===========================================================
// adminhf_theme.php
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

function js_url(){
	
	$js['givejs'] = func_get_args();
	
	return $GLOBALS['globals']['ind'].http_build_query($js).'&'.$GLOBALS['globals']['version'];
		
}


function softheader($title = '', $leftbody = true){

global $theme, $user, $logged_in, $globals, $l, $dmenus, $onload, $newslinks, $act, $iscripts, $catwise, $softpanel;

	if(optGET('jsnohf')){
		return true;
	}
	
	// If it is reseller the title should be changed
	if(defined('SOFTRESELLER')){
		$title = $l['reseller_title'];
	}
	
	$title = ((empty($title)) ? $globals['sn'] : $title);

	// This is if we want to include any custom header from any control panel. Eg: cPanel
	if(method_exists($softpanel, 'admin_cp_header')){
		$softpanel->admin_cp_header();
	}
	
	//Lets echo the top headers
	echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset='.$globals['charset'].'" />
	<meta name="keywords" content="softaculous, software" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0" />
	<title>'.$title.'</title>
	<link rel="stylesheet" type="text/css" href="'.$theme['url'].'/bootstrap/css/bootstrap.css?'.$GLOBALS['globals']['version'].'" />
	<link rel="stylesheet" type="text/css" href="'.$theme['url'].'/admin/style.css?'.$GLOBALS['globals']['version'].'" />
	<link rel="shortcut icon" href="'.$theme['images'].'/'.(asperapp('', 'webuzo/', 'ampps/')).'favicon.ico" />
	<link rel="stylesheet" type="text/css" href="'.$theme['url'].'/font-awesome.css?'.$GLOBALS['globals']['version'].'" />
	<!--[if lt IE 9]>
      <script src="'.$theme['url'].'/bootstrap/js/html5.min.js"></script>
      <script src="'.$theme['url'].'/bootstrap/js/respond.min.js"></script>
    <![endif]-->
	<script language="javascript" src="'.$theme['url'].'/js/combined.js?'.$GLOBALS['globals']['version'].'" type="text/javascript"></script>
	<script language="javascript" src="'.$theme['url'].'/bootstrap/js/bootstrap.min.js" type="text/javascript"> </script>
	
	</head>
	<body onload="bodyonload();">';
		
	echo '<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0" align="center" id="abody" style="position: absolute;">
	<tr>
	<!--left panel starts here-->
	<img src="'.$theme['images'].'menu.png" alt="Left_menu" class="left_toggle_btn" id="left_toggle_btn">
	<td width="175" valign="top" style="background:#23282E; min-height:100%;" class="left_panel">
	
	<div class="nav-side-menu">
		<div class="brand">
			<a href="'.$globals['ind'].'"><img src="'.($globals['softpanel'] == 'ampps' ? $theme['a_images'].'header.png' : (empty($globals['logo_url']) ? ($globals['softpanel'] == 'webuzo' ? $theme['a_images'].'header.png' : $theme['images'].'header.png') : $globals['logo_url'])).'" alt="" height="'.(!empty($softpanel->leftpanel_resize) ? '40' : '50').'"/></a>
		</div>
		
		<img src="'.$theme['images'].'search.png" style="margin-top:7%; position:absolute; right:5%;"/>
		<input type="text" id="search_cat" onfocus="this.value=\'\';" onKeyUp="search_cat(this.value);" value="'.$l['search'].'" placeholder="'.$l['search'].'" class="sai_search_box">				
		<div class="no_data_found"></div>
		<div class="menu-list">
		<ul id="menu-content" class="menu-content collapse out">
			<li id="home" class="active" onclick="left_toggle(this.id)"><a href="'.$globals['ind'].'"><i class="fa sai-dashboard fa-lg"></i> '.$l['tab_home'].'</a></li>
			<li id="settings" class="main_cat" onclick="left_toggle(this.id);">
				<i class="fa sai-settings fa-lg"></i> '.$l['tab_settings'].'
				<div class="pull-right" id="settings_img" style="margin-top:5%;"><img src="'.$theme['images'].'collapsed.png"></div>
				<div class="pull-right" id="settings_img_opened" style="margin-top:5%; display:none;"><img src="'.$theme['images'].'expanded.png"></div>
			</li>
			<ul class="sub-menu collapse" id="settings_l">
				<li id="sub_gen_set"><a href="'.$globals['ind'].'act=settings"><i class="fa sai-rightarrow fa-lg"></i>'.$l['sub_gen_set'].'</a></li>';
				
				if($globals['softpanel'] == 'webuzo'){
					echo '<li id="tab_webuzoconfigs"><a href="'.$globals['ind'].'act=webuzoconfigs"><i class="fa sai-rightarrow fa-lg"></i>'.$l['tab_webuzoconfigs'].'</a></li>
					<li id="tab_root_pass"><a href="'.$globals['ind'].'act=root_pass"><i class="fa sai-rightarrow fa-lg"></i>'.$l['tab_root_pass'].'</a></li>
					<li id="tab_webuzo_acl"><a href="'.$globals['ind'].'act=webuzo_acl"><i class="fa sai-rightarrow fa-lg"></i>'.$l['tab_webuzo_acl'].'</a></li>';
				}
				
				if(!defined('SOFTRESELLER') && (!empty($globals['enable_proxy']) || $globals['softpanel'] == 'ampps' || aefer() || ent())){
					echo '<li id="tab_proxy"><a href="'.$globals['ind'].'act=proxy"><i class="fa sai-rightarrow fa-lg"></i>'.$l['tab_proxy'].'</a></li>';
				}
				
				if(!defined('SOFTRESELLER')){ 
					echo '<li id="tab_email"><a href="'.$globals['ind'].'act=email"><i class="fa sai-rightarrow fa-lg"></i>'.$l['tab_email'].'</a></li>
					<li id="sub_top_scripts"><a href="'.$globals['ind'].'act=topscripts"><i class="fa sai-rightarrow fa-lg"></i>'.$l['sub_top_scripts'].'</a></li>
					<li id="tab_categories"><a href="'.$globals['ind'].'act=categories"><i class="fa sai-rightarrow fa-lg"></i>'.$l['tab_categories'].'</a></li>
					<li id="tab_error_log"><a href="'.$globals['ind'].'act=errorlog"><i class="fa sai-rightarrow fa-lg"></i>'.$l['tab_error_log'].'</a></li>';
					if(aefer() || ent()){
						echo '<li id="tab_update_ssl_cert"><a href="'.$globals['ind'].'act=ssl_cert"><i class="fa sai-rightarrow fa-lg"></i>'.$l['tab_update_ssl_cert'].'</a></li>';
					}
					if($globals['softpanel'] != 'ispconfig' || $globals['softpanel'] != 'aefer' || $globals['softpanel'] != 'enterprise'){
						echo '<li id="tab_disable_autoupgrade"><a href="'.$globals['ind'].'act=no_autoupgrade"><i class="fa sai-rightarrow fa-lg"></i>'.$l['tab_disable_autoupgrade'].'</a></li>';
					}
				}
				
				if(!defined('SOFTRESELLER') && $globals['softpanel'] != 'ampps'){
					echo '<li id="tab_mail_trmplate"><a href="'.$globals['ind'].'act=emailtemp"><i class="fa sai-rightarrow fa-lg"></i>'.$l['tab_mail_trmplate'].'</a></li>';
				}
				
				if(!defined('SOFTRESELLER') && in_array($globals['softpanel'], array('cpanel', 'enterprise', 'aefer', 'webuzo'))){ 
					echo '<li id="sub_import_export"><a href="'.$globals['ind'].'act=import_export"><i class="fa sai-rightarrow fa-lg"></i>'.$l['sub_import_export'].'</a></li>';
				}
				
				if(asperapp(0, 1, 1)){ 
					echo '<li id="sub_license"><a href="'.$globals['ind'].'act=licensekey"><font class="bboxtxt"><i class="fa sai-rightarrow fa-lg"></i>'.$l['sub_license'].'</font></a></li>';
				}	
				
				echo '</ul>';

				if(!defined('SOFTRESELLER')){
					echo '<li id="softwares" onclick="left_toggle(this.id)">
					<a></a>
						<i class="fa sai-apps fa-lg"></i> '.$l['tab_softwares'].' 
						<div class="pull-right" id="softwares_img" style="margin-top:5%;"><img src="'.$theme['images'].'collapsed.png"></div>
						<div class="pull-right" id="softwares_img_opened" style="margin-top:5%; display:none;"><img src="'.$theme['images'].'expanded.png"></div>
					</li>  
				
					<ul class="sub-menu collapse" id="softwares_l">
					  <li id="sub_general_scripts"><a href="'.$globals['ind'].'act=softwares"><i class="fa sai-rightarrow fa-lg"></i>'.$l['sub_general_scripts'].'</a></li>
					  <li id="sub_custom_scripts"><a href="'.$globals['ind'].'act=customscripts"><i class="fa sai-rightarrow fa-lg"></i>'.$l['sub_custom_scripts'].'</a></li>
					  <li id="adv_software"><a href="'.$globals['ind'].'act=adv_software"><i class="fa sai-rightarrow fa-lg"></i>'.$l['adv_software'].'</a></li>';
					  
					  if(!aefer() && !ent()){
						echo '<li id="sub_script_req"><a href="'.$globals['ind'].'act=script_requirement"><i class="fa sai-rightarrow fa-lg"></i>'.$l['sub_script_req'].'</a></li>';
					  }
					  
					echo '<li id="sub_manage_sets"><a href="'.$globals['ind'].'act=manage_sets"><i class="fa sai-rightarrow fa-lg"></i>'.$l['sub_manage_sets'].'</a></li>
					</ul>';
				}
				
				if(!defined('SOFTRESELLER')){
					echo '<li id="updates" onclick="left_toggle(this.id)">
					  <a href="'.$globals['ind'].'act=updates" style="display:block;">
						<i class="fa sai-sync fa-lg"></i> '.$l['tab_updates'].' 
					  </a>
					</li>';
				}
					
				// Is the installations function there ?
				if(method_exists($softpanel, 'listinstallations')){
					echo '<li id="installations" onclick="left_toggle(this.id)">
						<i class="fa sai-installations fa-lg"></i> '.$l['tab_installations'].'  
						<div class="pull-right" id="installations_img" style="margin-top:5%;"><img src="'.$theme['images'].'collapsed.png"></div>
						<div class="pull-right" id="installations_img_opened" style="margin-top:5%; display:none;"><img src="'.$theme['images'].'expanded.png"></div>
					</li>';
				}	
				
				echo '<ul class="sub-menu collapse" id="installations_l">
					  <li id="search_ins"><a href="'.$globals['ind'].'act=installations"><i class="fa sai-rightarrow fa-lg"></i>'.$l['search_ins_menu'].'</a></li>
					  <li id="sub_byuser"><a href="'.$globals['ind'].'act=installations&show=byusers"><i class="fa sai-rightarrow fa-lg"></i>'.$l['sub_byuser'].'</a></li>
					  <li id="sub_byscript"><a href="'.$globals['ind'].'act=installations&show=byscript"><i class="fa sai-rightarrow fa-lg"></i>'.$l['sub_byscript'].'</a></li>
					  <li id="sub_bydomain"><a href="'.$globals['ind'].'act=installations&show=bydomains"><i class="fa sai-rightarrow fa-lg"></i>'.$l['sub_bydomain'].'</a></li>
					  <li id="sub_outdated"><a href="'.$globals['ind'].'act=installations&show=outdated"><i class="fa sai-rightarrow fa-lg"></i>'.$l['sub_outdated'].'</a></li>
					  <li id="sub_ins_statistics"><a href="'.$globals['ind'].'act=ins_statistics"><i class="fa sai-rightarrow fa-lg"></i>'.$l['sub_ins_statistics'].'</a></li>';
					  
				if(!defined('SOFTRESELLER') && $globals['softpanel'] != 'ampps' && !empty($softpanel->can_autoupgrade)){
					echo '<li id="sub_upgrade"><a href="'.$globals['ind'].'act=installations&show=upgrade"><i class="fa sai-rightarrow fa-lg"></i>'.$l['sub_upgrade'].'</a></li>';
				}
				
				echo '</ul>';
				
				if(webuzo()){
					echo '<li id="go_enduser" onclick="left_toggle(this.id)">
					  <a href="javascript:goto_panel()">
						<i class="fa sai-control_panel fa-lg"></i>'.$l['tab_goto_enduser'].' 
					  </a>
					</li>';
				}
					
				if($globals['softpanel'] == 'aefer' || $globals['softpanel'] == 'enterprise'){
					echo '<li id="users" onclick="left_toggle(this.id)">
						<i class="fa sai-blogs fa-lg"></i> '.$l['user'].'
						<div class="pull-right" id="users_img" style="margin-top:5%;"><img src="'.$theme['images'].'collapsed.png"></div>
						<div class="pull-right" id="users_img_opened" style="margin-top:5%; display:none;"><img src="'.$theme['images'].'expanded.png"></div>
					</li>
					<ul class="sub-menu collapse" id="users_l">
						<li id="list_user"><a href="'.$globals['ind'].'act=listuser"><i class="fa sai-rightarrow fa-lg"></i>'.$l['list_user'].'</a></li>
						<li id="add_user"><a href="'.$globals['ind'].'act=adduser"><i class="fa sai-rightarrow fa-lg"></i>'.$l['add_user'].'</a></li>
					</ul>';
				}
				
				if($globals['softpanel'] != 'ampps' && $globals['softpanel'] != 'webuzo' && $globals['softpanel'] != 'hc'){
					
					if($globals['softpanel'] != 'isp' && $globals['softpanel'] != 'cwp' && $globals['softpanel'] != 'ispconfig' && $globals['softpanel'] != 'vesta'){
						echo '<li id="plans" onclick="left_toggle(this.id)">
							<i class="fa sai-statistics fa-lg"></i> '.$l['tab_plans'].' 
							<div class="pull-right" id="plans_img" style="margin-top:5%;"><img src="'.$theme['images'].'collapsed.png"></div>
							<div class="pull-right" id="plans_img_opened" style="margin-top:5%; display:none;"><img src="'.$theme['images'].'expanded.png"></div>
						</li>
						
						<ul class="sub-menu collapse" id="plans_l">
						  <li id="list_plan"><a href="'.$globals['ind'].'act=plans"><i class="fa sai-rightarrow fa-lg"></i>'.$l['list_plan'].'</a></li>
						  <li id="add_plan"><a href="'.$globals['ind'].'act=addplans"><i class="fa sai-rightarrow fa-lg"></i>'.$l['add_plan'].'</a></li>
						</ul>';
					}
				}
				
				if($globals['softpanel'] == 'enterprise'){
					echo '<li id="domains" onclick="left_toggle(this.id)">
						<i class="fa sai-www fa-lg"></i> '.$l['tab_domain'].'
						<div class="pull-right" id="domains_img" style="margin-top:5%;"><img src="'.$theme['images'].'collapsed.png"></div>
						<div class="pull-right" id="domains_img_opened" style="margin-top:5%; display:none;"><img src="'.$theme['images'].'expanded.png"></div>
					</li>
					<ul class="sub-menu collapse" id="domains_l">
						<li id="sub_list_domain"><a href="'.$globals['ind'].'act=listdomains"><i class="fa sai-rightarrow fa-lg"></i>'.$l['sub_list_domain'].'</a></li>
						<li id="sub_add_domain"><a href="'.$globals['ind'].'act=adddomain"><i class="fa sai-rightarrow fa-lg"></i>'.$l['sub_add_domain'].'</a></li>
					</ul>';
				}

				if($globals['softpanel'] == 'webuzo' || $globals['softpanel'] == 'aefer' || $globals['softpanel'] == 'enterprise'){
				
					echo '<li id="logout" onclick="left_toggle(this.id)">
					  <a href="'.$globals['ind'].'act=logout" style="display:block;">
						<i class="fa sai-logout fa-lg"></i> '.$l['tab_logout'].'
					  </a>
					</li>';
				}else{
					if(!defined('SOFTRESELLER') && $globals['softpanel'] != 'ampps'){
						echo '<li id="import" onclick="left_toggle(this.id)">
							<a href="'.$globals['ind'].'act=import" style="display:block;">
								<i class="fa sai-download fa-lg"></i> '.$l['tab_import'].'
							</a>
						</li>';
					}
				}
				
	echo '</ul>
		</div>
	</div>			
	</td>
	
	<td valign="top">
		<div style="border-radius:0px; background:#2E353D; height:35px; color:#ccc;">	 
			<div style="position:absolute; margin-top:5px;"><h5>'.$l['welcome'].'</h5></div>	
		</div>
		<div id="header_prog" style="width:0px; height:3px; background:#29B7D3;"></div>
		
	<script>
	//for left panel toggle
	function left_toggle(ele){
	
		var shown = false;
		shown=$("#"+ele+"_l").is(":visible");
		if(!shown){
		$("#"+ele+"_l").slideDown("slow");
		$("#"+ele).addClass("active");
			setcookie("a_head_"+ele, 2);
			$("#"+ele+"_img").css("display","none");
			$("#"+ele+"_img_opened").css("display","block");
		}else{
		$("#"+ele+"_l").slideUp("slow");
			removecookie("a_head_"+ele);
			$("#"+ele+"_img").css("display","block");
			$("#"+ele+"_img_opened").css("display","none");
		}	
	}
		
	//left panel menu toggle state
	function left_panel_state(){
		
		var main = $(".menu-list li"); 
		var sub_link = $(".menu-list ul ul li");
		
		sub_link.each(function(){
			var link_id = $(this).closest("li").attr("id");
			
			$("#"+link_id).click(function(){
				setcookie("sub_link", link_id);
			});
			var if_isset_submenu = getcookie("sub_link");
			if(if_isset_submenu == link_id){
				var id = $("#"+link_id).parent().attr("id");
				var id = id.substring(0,id.length - 2);
				
				$("#"+id).addClass("active");
				$("#"+link_id).addClass("active");
				$("#home").removeClass("active");
			}
			$("#home").click(function(){
				removecookie("sub_link");
			});
		});
		main.each(function(){                                  
			var cookie_id = $(this).closest("li").attr("id");
			var if_isset_toggle = getcookie("a_head_"+cookie_id);
			var if_isset_menu = getcookie("a2_head_menu_"+cookie_id);
			var tmp_cookieid = String("a_head_"+cookie_id);
			$("#opened_img").hide();
			if(if_isset_menu == 3){
				$("#home").removeClass("active");
			}
			
			if(if_isset_menu == cookie_id){
				$("#home").removeClass("active");
				$("#"+if_isset_menu).addClass("active");		
			}
			
			$("#"+cookie_id).click(function(){
				
				setcookie("a2_head_menu_"+cookie_id, cookie_id);
				main.each(function(){
					var cookie_id_cookie = $(this).closest("li").attr("id");
					var if_isset_menu = getcookie("a2_head_menu_"+cookie_id_cookie);	
					$("#"+cookie_id_cookie).removeClass("active");
					if(if_isset_menu == cookie_id){
						$("#"+cookie_id).addClass("active");					
					}
					if(cookie_id_cookie != cookie_id){
						removecookie("a2_head_menu_"+cookie_id_cookie);		
					}
				});
				
			});				
		
			if(if_isset_menu == 3){
				removecookie("sub_link");
			}
			
			if(if_isset_toggle == 2 && tmp_cookieid != "undefined"){
				var id = $("#"+cookie_id+"_l");
				var img_id = $("#"+cookie_id+"_img");
				id.show();
				$("#"+cookie_id+"_img").css("display","none");
				$("#"+cookie_id+"_img_opened").css("display","block");
			}
			
		});
	}

	// For Webuzo
	function goto_panel(){
		
		var str = window.location;
		var find_port = str.toString().search(\'2005\');
		
		if(find_port < 1){
			var str_url = str.toString().replace("2004", "2002");
		}else{
			var str_url = str.toString().replace("2005", "2003");
		}

		var res = str_url.split("/",4);
		
		var res_out = res.join("/");	
		
		window.location = res_out+"/";
	}
	
	//left panel search box
	function search_cat(val){
		var $val = val.toLowerCase();
		var qlen = val.length;
		if(qlen >= 1){
			$(".menu-list ul ul").each(function(){
				var toggle_id  = $(this).attr("id");
				$("#"+toggle_id).slideDown();
			});
		}
		$(".menu-list ul li").each(function(){	
			var text = $(this).text().toLowerCase();
			if(text.indexOf($val) == 0){
				var cat_id = $(this).parent("ul").attr("id");
				var cat_id = cat_id.slice(0,-2);
				$("#"+cat_id).show();
			}
			(text.indexOf($val) == 0) ? $(this).show("fast") : $(this).hide("fast", function(){
				shown = $(".menu-list ul li").is(":visible");
				
				if(!shown){
					$(".no_data_found").show();
					$(".no_data_found").html("'.$l['no_data'].'").css("padding-left", "10px");
				}else{
					$(".no_data_found").hide();
				}
				
			});
			
		});
	
	}
	
	$(document).ready(function(){
		var shown=false;';
		
	//Handling admin left panel arrows aligment for cPanel when loaded with WHM hf.
	if($globals['softpanel'] == 'cpanel'){
		//If WHM header is visible then do this.
	echo '
		
		if($("#topFrameWrapper").is(":visible")){
			$("#menu-content li div").css("margin-top","0px");
			$("#abody").css("width","98%");
		}';
	}
	
	echo '$("#left_toggle_btn").on("click", function(e){
			shown=$(".left_panel").is(":visible");
			$(".left_panel").toggle("1000",function(){
				$(".left_panel").css({"position":"absolute", "z-index":"1000"});
			});
			if(!shown){
				$(".left_toggle_btn").animate({
					left: "175px"
				},"1000");
			}else{
				$(".left_toggle_btn").animate({
					left: "0px"
				},"1000");
			}
		});
		
		$("#header_prog").animate({width:"20%"}, "slow", function(){
			$("#header_prog").animate({width:"50%"},"5000",function(){
				$("#header_prog").animate({width:"100%"},"5000");
			});
		});
		
		left_panel_state();
		
	});
	</script>';
	
	if($globals['lictype'] == '-2'){	
		echo '
		<div style="padding:10px;">
			<div id="soft_dev_banner" style="display:block;margin:0;padding:0;width:100%;background-color:#ffffd2;">
				<div style="padding:10px 35px;font-size:14px;text-align:center;color:#555;"><strong>Dev License:</strong> This installation of <b>'.APP.'</b> is running under a Development License and is not authorized to be used for production use. <br>Please report any cases of abuse to <a href="mailto:support@'.strtolower(APP).'.com">support@'.strtolower(APP).'.com</a>
			</div>
		</div>';	
	}
}


function softfooter(){

global $user, $conn, $dbtables, $logged_in, $globals, $l, $dmenus, $end_time, $start_time, $onload, $theme;

if(optGET('jsnohf')){
	return true;
}

$pageinfo = array();

if(!empty($globals['showntimetaken'])){
	$pageinfo[] = $l['page_time'].':'.substr($end_time-$start_time,0,5);
}

if(!empty($theme['copyright'])){
	echo unhtmlentities($theme['copyright']);
}

echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
function bodyonload(){
	if(aefonload != \'\'){		
		eval(aefonload);
	}
	'.(empty($onload) ? '' : 'eval(\''.implode(';', $onload).'\');').'
};
// ]]></script>';

echo '</td>
</tr>
 
<tr>
	<td style="background:#23282E;" class="left_panel"></td>
	<td valign="bottom">
		<div align="center">'.$l['times_are'].(empty($globals['pgtimezone']) ? '' : ' '.($globals['pgtimezone'] > 0 ? '+' : '').$globals['pgtimezone']).'. '.$l['time_is'].' '.datify(time(), false).'.</div>	<br />
		<table width="100%" cellpadding="5" cellspacing="1">
			<tr class="sai_foot"> 
				<td align="left" style="font-size:12px; padding-left:10px;">'.copyright().'</td>'.(empty($pageinfo) ? '' : '<td align="right" style="margin-right:-30px; font-size:12px;">'.implode('&nbsp;&nbsp;|&nbsp;&nbsp;', $pageinfo).'</td>').'
			</tr>
		</table>
	</td>
</tr>';

// This is if we want to include any custom footer from any control panel. Eg: cPanel
if(method_exists($softpanel, 'admin_cp_footer')){
	$softpanel->admin_cp_footer();
}

echo '</body>
</html>';
}


function error_handle($error, $table_width = '100%', $center = 1){

global $l, $theme;

	//on error call the form
	if(!empty($error)){
		
		$str .= '<div class="alert alert-danger " style="width:'.$table_width.'">
				<div class="row"><div class="col-sm-9"><p style="margin-top:4px; font-size:16px;">&nbsp;&nbsp;'.$l['following_errors_occured'].' :</p>
					<ul type="square" style="margin-top:-4px;">';
		
		foreach($error as $ek => $ev){		
			$str .= '<li style="font-size:13px;">'.$ev.'</li>';		
		}
		
		$str .= '</ul>
		</div>
		<div class="col-sm-2" align="right">
		<img src="'.$theme['images'].'/caution.png">
		</div>
		<div class="col-sm-1">
		<a href="#close" class="close" data-dismiss="alert">&times;</a>
		</div></div></div>';
		
		if(empty($return)){
			echo $str;
		}else{
			return $str;	
		}		
		
	}

}

//This will just echo that everything went fine
function success_message($message, $table_width = '100%', $center = false){

global $l;

	//on error call the form
	if(!empty($message)){
		
		echo '<table width="'.$table_width.'" cellpadding="2" cellspacing="1" class="sai_error" '.(($center) ? 'align="center"' : '' ).'>
			<tr>
			<td>
			'.$l['following_message'].' :
			<ul type="square">';
		
		foreach($message as $mk => $mv){
		
			echo '<li>'.$mv.'</li>';
		
		}
		
		
		echo '</ul>
			</td>
			</tr>
			</table>'.(($center) ? '</center>' : '' ).'
			<br />';
		
		
	}

}


function majorerror($title, $text, $heading = ''){

global $theme, $globals, $user, $l;

softheader(((empty($title)) ? $l['fatal_error'] : $title), false);

?>

<div class="panel panel-danger" style="width:70%;margin:auto; margin-top:20px;">
	<div class="panel-heading" style="padding:5px;"><h5><b><?php echo ((empty($heading)) ? $l['following_fatal_error'].':' : $heading);?></b><h5></div>
	<div class="panel-body" align="center">
		<img src="<?php echo $theme['images'];?>error.png" alt="" />&nbsp;&nbsp;<font size="-1"><?php echo $text;?></font><br /><br />
	</div>
</div>

<?php

softfooter();

//We must return
return true;

}

function message($title, $heading = '', $icon, $text){

global $theme, $globals, $user, $l;

softheader(((empty($title)) ? $l['soft_message'] : $title), false);

?>

<table width="70%" cellpadding="2" cellspacing="1" class="sai_cbor" align="center">
	
	<tr>
	<td class="sai_cbg" align="left">
	<b><?php echo ((empty($heading)) ? $l['following_soft_message'].':' : $heading);?></b>
	</td>
	</tr>
	
	<tr>
	<td class="sai_bg" colspan="2" align="center">
	<img src="<?php echo $theme['images'].(empty($icon)?'info.gif':$icon);?>" alt="" />
	</td>
	</tr>
	
	<tr>
	<td class="sai_error" align="left"><?php echo $text;?><br />
	</td>
	</tr>

</table>
<br /><br /><br />

<?php

softfooter();

//We must return
return true;

}

//Pagination
function page_links($num_res, $page, $max = 100){
	
	global $l, $js, $globals, $theme;
	
	$pages = ceil($num_res/$max); // Number of Pages	
	$pg = ceil(($page/$max) + 1); //Current Page

	$_pages = array();
	
	if($pages > 1){
		
		// Show the Back Links if required
		if($pg != 1){			
			$_pages['&lt;&lt;'] = 1;			
			$_pages['&lt;'] = ($pg - 1);		
		}
		
		for($i = ($pg - 4); $i < $pg; $i++){			
			if($i >= 1){			
				$_pages[$i] = $i;			
			}		
		}
		
		$_pages[$pg] = $pg;
				
		for($i = ($pg + 1); $i <= ($pg + 4); $i++){		
			if($i <= $pages){			
				$_pages[$i] = $i;			
			}		
		}
		
		
		if($pg != $pages){			
			$_pages['&gt;'] = ($pg + 1);			
			$_pages['&gt;&gt;'] = $pages;		
		}	
	}

	$name = 'pgjmp_'.generateRandStr(4);
		
	if(empty($js['menu'])){
		echo '<script language="javascript" src="'.$theme['url'].'/js/menu.js" type="text/javascript"></script>
			
		<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
		function go_to(max, pg, urlto){
			try{
			var urlto = (urlto || window.location).toString();
			var pg = pg || 0;
			var final = urlto.replace(/(&?)page\=(\d{1,4})|(&?)reslen\=(\d{1,500})/gi,"")+"&page="+pg+"&reslen="+max;
			window.location = final;
			}catch(e){ }
		};
		// ]]></script>';
		
		$js['menu'] = true;
	}
		
	$links = '<br />
	
	<table height="35" cellspacing="1" cellpadding="0" border="0">
	<tr>
	<td colspan="0" class="pagelinks">'.$l['entries_per_page'].'
	<select name = "reslen" class="perpage" onchange="return go_to(this.value)">
	<option value="-1">--</option>
	<option value="10" '.($max == 10 ? 'selected="selected"' : '').'>10</option>
	<option value="25" '.($max == 25 ? 'selected="selected"' : '').'>25</option>
	<option value="50" '.($max == 50 ? 'selected="selected"' : '').'>50</option>
	<option value="100" '.($max == 100 ? 'selected="selected"' : '').'>100</option>
	<option value="all" '.($max == 'all' ? 'selected="selected"' : '').'>'.$l['all'].'</option>
	</select>
	</td>
	<td class="pagelinks">'.$l['page_page'].' '.$pg.' '.$l['page_of'].' '.$pages.'</a></td>';
	
	foreach($_pages as $k => $lv){
		$links .= '<td class="'.($k == $pg ? 'activepage' : 'pagelinks' ).'"><a href="javascript:go_to('.$max.', '.$lv.')">'.$k.'</a></td>';
	}
	
	$links .= '<link rel="stylesheet" type="text/css" href="'.$theme['url'].'/css/admin.css" />';
		
	$links .= '
	</tr>
	</table><br />	
	<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
	createmenu("'.$name.'", [
	[\'<input type="text" name="page" id="in'.$name.'" size="10" placeholder="Go to page" style="height:32px;"/>&nbsp;<input class="flat-butt" type="button" value="'.$l['page_go'].'" onclick="go_to('.$max.', $_(\\\'in'.$name.'\\\').value)" style="padding:4px; margin-top:-4px;"/>\']
	]);
		
	// ]]></script>';
		
	echo $links;
}


?>