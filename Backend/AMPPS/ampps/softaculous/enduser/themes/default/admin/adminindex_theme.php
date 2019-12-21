<?php

//////////////////////////////////////////////////////////////
//===========================================================
// adminindex_theme.php
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

function adminindex_theme(){

global $theme, $globals, $user, $l, $scripts, $cscripts, $iscripts, $count_data, $softpanel, $sitepad_installed, $outdated_scripts;

softheader($l['<title>']);

if(optGET('rebuild_cache') && !defined('SOFTRESELLER')){
	$count_data = get_count_cache(1);
	echo json_encode($count_data);
	return true;
}

echo '<script language="javascript" type="text/javascript" src="'.serverurls('latestinfo').'"></script>

<script type="text/javascript">
function load_soft_info(){
	$_("softnews").style.width = $_("softnewsholder").offsetWidth;
	//The news
	if(typeof(soft_news) == "undefined"){
		$_("softnews").innerHTML = "'.$l['conect_to_soft'].'";
	}else{
		var newsstr = "";
		for(x in soft_news){
			newsstr = newsstr+\'<div class="softnewshead">\'+soft_news[x][0]+\'</div>\'+\'<div class="softnewsblock">\'+soft_news[x][1]+\'</div><br />\';
		}
		$_("softnews").innerHTML = newsstr;
	}
	//The current version
	if(typeof(soft_latest_version) == "undefined"){
		$_("newsoftversion").innerHTML = "<i>'.$l['no_info'].'</i>";
	}else{
		$_("newsoftversion").innerHTML = soft_latest_version;
	}
}
addonload(\'load_soft_info();\');

function rotate_img() {
	
	$("#refresh_ins_count, #refresh_user_count, #refresh_domain_count").click(function () {
		$(this).first().addClass("fa-rotate-360");
	});
}
				
	$(document).ready(function(){
		
		$("#refresh_ins_count, #refresh_user_count, #refresh_domain_count").tooltip();  
		
		$("#refresh_user_count, #refresh_ins_count, #refresh_domain_count").click(function(){
			var that = this;
			$.getJSON("'.$globals['ind'].'act=adminindex&rebuild_cache=1&jsnohf=1", function(data){
				$(that).first().removeClass("fa-rotate-360");
				//alert(data.ins_user);
				$("#total_ins").html(data.ins_count);
				$("#total_user").html(data.users_count);
				$("#total_domain").html(data.domain_count);
			});
		});
	});

</script>
<br />

<div class="bg2"><br />';
	
	if(!empty($sitepad_installed)){
		echo '<div class="container-fluid"><div class="alert alert-success text-center"><a href="#close" class="close" data-dismiss="alert">&times;</a><img src="'.$theme['images'].'success.gif" /> SitePad installation has started in background, your users can now access SitePad from their cPanel accounts. </div></div>';
	}

	if(!defined('SOFTRESELLER')){
		echo '<div class="row">
			<div class="col-sm-4">
				<div class="sai_smbox">
					<div class="row pull-right" style="width:15%;">';
					if($globals['softpanel'] == 'webuzo'){
						echo '<p style="color: #29B7D3; margin-top:-10px; position:absolute; cursor:pointer; "title="'.$l['domain_count_title'].'" id ="refresh_domain_count" data-placement="bottom" onclick ="rotate_img()"><i class="fa sai-sync fa-1x"></i></p>
						</div>
						<center><p align="center" class="ie8_users" style="color: #29B7D3; font-size:13px; margin-top:-3px;"><i class="fa sai-www fa-3x"></i></p>
						<p id="total_domain" style="color: #444; font-size: 15px; font-weight: normal; text-shadow: 0 1px 0 #fff;">'.(int) $count_data['domain_count'].'</p>
						<p style="color: #999; font-size:12px; margin-top:-12px;"><b>'.$l['domain_count'].'</b></p></center>';
					}else{
						echo '<p style="color: #29B7D3; margin-top:-10px; position:absolute; cursor:pointer; "title="'.$l['users_count_title'].'" id ="refresh_user_count" data-placement="bottom" onclick ="rotate_img()"><i class="fa sai-sync fa-1x"></i></p>
						</div>
						<center><p align="center" class="ie8_users" style="color: #29B7D3; font-size:13px; margin-top:-3px;"><i class="fa sai-blogs fa-3x"></i></p>
						<p id="total_user" style="color: #444; font-size: 15px; font-weight: normal; text-shadow: 0 1px 0 #fff;">'.(int) $count_data['users_count'].'</p>
						<p style="color: #999; font-size:12px; margin-top:-12px;"><b>'.$l['users'].'</b></p></center>';
					}
				echo '
				</div>
			</div>
			<div class="col-sm-4">
				<div class="sai_smbox">
					<div class="row pull-right" style="width:15%;">
					<p style="color: #29B7D3; margin-top:-10px; position:absolute; cursor:pointer; "title="'.$l['ins_count_title'].'" id ="refresh_ins_count" data-placement="bottom" onclick ="rotate_img()"><i class="fa sai-sync fa-1x"></i></p>
					</div>
					<center><p align="center" class="ie8_users" style="color: #29B7D3; font-size:13px; margin-top:-3px;"><i class="fa sai-stacks fa-3x"></i></p>
					<p id="total_ins" style="color: #444; font-size: 15px; font-weight: normal; text-shadow: 0 1px 0 #fff;">'.(int) $count_data['ins_count'].'</p>
					<p style="color: #999; font-size:12px; margin-top:-12px;"><b>'.$l['total_ins'].'</b></p></center>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="sai_smbox">
					<center><p align="center" style="color: #29B7D3; font-size:13px; margin-top:-3px;"><i class="fa sai-graph fa-3x"></i></p>
					<p style="color: #444; font-size: 15px; font-weight: normal; text-shadow: 0 1px 0 #fff;">'.(count($iscripts) - count($cscripts)).'/'.count($scripts).'</p>
					<p style="color: #999; font-size:12px; margin-top:-12px;"><b>'.$l['enabled_scripts'].'</b></p></center>
				</div>
			</div>
		</div>';
		
	}
	
	if(can_show_sitepad()){
		$license_col = 8;
		$sitepad_col = 4;
		$badge_align = 'left';
	}else{
		$license_col = 12;
		$sitepad_col = 0;
		$badge_align = 'center';
	}
	
	if(!empty($outdated_scripts) && !defined('SOFTRESELLER')){
		echo '<div class="row">
		<div class="col-sm-12">
			<a href="'.$globals['ind'].'act=softwares" style="text-decoration:none;"><center class="alert alert-warning"><p><font style="color: red; font-size:12px;"><i class="fa sai-warning fa-2x"></i></font> &nbsp;&nbsp; '.$outdated_scripts.' '.$l['disable_scripts'].'</p></center></a>
		</div>
		</div>';
	}
	
	echo '<div class="row">
		<div class="col-sm-'.$license_col.'">
		<div class="row sai_licensebox">
		<div align="center" style="color: #666; font-size:18px;">'.$l['soft_info'].'<br /></div><hr>
		<div class="col-sm-8">
			<div class="softinfo" >'.(!defined('SOFTRESELLER') ? '<b>'.$l['soft_license'].'</b> : '.$globals['license'].' ('.$globals['primary_ip'].')<br />
				<b>'.$l['soft_license_type'].'</b> : '.(empty($globals['lictype']) ? $l['type_0'].' (<a href="'.serverurls('buy').'" target="_blank">'.$l['become_premium'].'</a>)&nbsp; (<a href="'.serverurls('pricing').'" target="_blank">'.$l['pricing'].'</a>)' : $l['type_1']).'&nbsp; (<a href="'.$globals['ind'].'refreshlicense">'.$l['refreshlicense'].'</a>)'.(asperapp(0, 1, 1) ? '&nbsp; (<a href="'.$globals['ind'].'act=licensekey">Enter License Key</a>)' : '') : '').' <br />
				<b>'.$l['server_addr'].'</b> : '.(!empty($_SERVER['SERVER_ADDR']) ? $_SERVER['SERVER_ADDR'] : $_SERVER['LOCAL_ADDR']).'  <br />
				'.(!defined('SOFTRESELLER') ? '<b>'.$l['expires'].'</b> : '.(empty($globals['licexpires']) ? $l['never'] : makedate($globals['licexpires']).' (DD/MM/YYYY)' ).'  <br />': '').
				'<b>'.$l['ip_license'].'</b> : '.@substr(curl_call(fastestmirror().'/ip.php', 0, 5), 0, 16).'<br />
				<b>'.$l['php_version'].'</b> : '.sphpversion().'<br />
				<b>'.$l['soft_version'].'</b> : '.asperapp($globals['version'], @$globals['webuzo_version'], @$globals['ampps_version']).'<br />
				<b>'.$l['latest_soft_version'].'</b> : <span id="newsoftversion"></span>
			</div>
		</div>
		<div class="col-sm-4">';
			if($globals['softpanel'] == 'ampps' || $globals['softpanel'] == 'webuzo'){
				echo '<div align="'.$badge_align.'"><img src="'.$theme['images'].$globals['softpanel'].(empty($globals['lictype']) ? 'free' : 'premium').'.png" class="img-responsive"/></div>';
			}else{
				echo '<div align="'.$badge_align.'"><img src="'.$theme['images'].'softaculous'.(empty($globals['lictype']) ? 'free' : 'premium').'.png"/></div>';
			}
		echo'
		</div>
		</div>
		</div>';
		
		// Do we have to show SitePad info ?
		if(!empty($sitepad_col)){
			
			echo '<div class="col-sm-'.$sitepad_col.'">
			<div class="row alert alert-info" style="margin: 2px 0px 2px 0px;">
			<h4 align="center"><img src="'.$theme['images'].'sitepad_32.gif" />&nbsp;SitePad Website Builder</h4><hr />
			<span style="font-size:12px;">SitePad is now included in Softaculous scripts list.<br /><br />
			SitePad does not host the user\'s website and the final website will be hosted on your server. <br /><br />
			SitePad is based on a Freemium model with 15 themes in Free version. <a href="mailto:sales@softaculous.com">Know more</a>. <br /><br />
			You can disable SitePad from the <a href="'.$globals['index'].'act=settings">Settings page</a>.</span>
			</div>
			</div>';
			
		}
		
	echo '</div>';
	
	// Do we need to show promos ?
	$show_promo = 0;
	if($globals['softpanel'] == 'webuzo'){
		if($globals['sn'] == 'Webuzo' && !file_exists('/home/'.$softpanel->getCurrentUser_webuzo().'/.softaculous/no_pinguzo')){
			$show_promo = 1;
		}
	}else{
		if(!defined('SOFTRESELLER') && !file_exists($globals['path'].'/conf/no_promo')){
			$show_promo = 1;
		}
	}
	
	if(!empty($show_promo)){
		
		
		if(!is_dir('/usr/local/pinguzo/')){
			
			// Pinguzo promo
			$promo[] = '
			<div class="col-md-12" align="center"><h2 style="margin-top:5px;">Pinguzo - Server and Website Monitoring</h2><hr /></div>
			<div class="col-md-7">
				<span style="font-size:15px; line-height:150%">We have been developing Pinguzo, which is a Server and Website Monitoring SaaS. As you know, downtime can happen on your Servers and Websites. Pinguzo can send notifications instantly, so that you can take corrective steps. 
				<br>You can use your <b>Softaculous Account to Sign In</b>. Since its a SaaS, you will not need to manage any storage or processes related to monitoring.
				<center style="margin-top:15px;"><a href="https://cp.pinguzo.com" style="text-decoration:none;color:#FFF;" target="new"><button class="flat-butt">Let\'s Try Pinguzo</button></a></center>
				<br>If you have any feedback / questions, please do let us know - <a href="mailto:support%40pinguzo.com">support@pinguzo.com</a>.</span>
			</div>
			<div class="col-md-5" style="vertical-align:center;">
				<img src="'.$theme['images'].'pinguzo_scr.jpg" class="img-responsive">
			</div>';
		
		}
		
		if(($globals['softpanel'] == 'cpanel' || $globals['softpanel'] == 'directadmin' || $globals['softpanel'] == 'plesk') && !is_dir('/usr/local/sitepad/')){
			
			// SitePad promo
			$promo[] = '
			<div class="col-md-12" align="center"><h2 style="margin-top:5px;">SitePad Website Builder</h2><hr /></div>
			<div class="col-md-7">
				<span style="font-size:15px; line-height:150%">We have been developing SitePad, which is a website builder that publishes static web pages to hosting account. SitePad is an Easy to use, Drag &amp; Drop Website builder with 40+ Widgets like Image/Video Slider, Image Galleries, Rich Text and many more!! SitePad currently has <b>345+</b> Themes and we are adding more..
				<br><br>SitePad plugin can be installed in your control panel and users can publish their site to their hosting account with just One Click.
				<br><br>Pricing starts at $5/month per server with unlimited users and goes down to $3/month with volumes
				<center style="margin-top:15px;">
				<a href="?install_sitepad=1" style="text-decoration:none;color:#FFF;"><button class="flat-butt">Install SitePad</button></a>&nbsp; &nbsp;
				<a href="http://sitepad.com" style="text-decoration:none;color:#FFF;" target="new"><button class="flat-butt">More Details</button></a></center>
				<br>If you have any feedback / questions, please do let us know - <a href="mailto:support%40sitepad.com">support@sitepad.com</a>.</span>
			</div>
			<div class="col-md-5" style="vertical-align:center;">
				<img src="'.$theme['images'].'sitemush_scr.png" class="img-responsive">
			</div>';
			
		}
		
		// Virtualizor promo
		$promo[] = '
		<div class="col-md-12" align="center"><h2 style="margin-top:5px;">Virtualizor - VPS Control Panel</h2><hr /></div>
		<div class="col-md-7">
			<span style="font-size:15px; line-height:150%">Virtualizor is a powerful web based VPS Control Panel. It supports OpenVZ, Xen PV, Xen HVM, XenServer, Linux KVM, LXC and OpenVZ 7 virtualization. Admins can create a VPS on the fly by the click of a button. VPS users can start, stop, restart and manage their VPS using a very advanced web based GUI.
			<br><br>Pricing starts at $9/month per server with unlimited VPS and goes down to $7/month with volumes
			<center style="margin-top:15px;">
			<a href="http://virtualizor.com" style="text-decoration:none;color:#FFF;" target="new"><button class="flat-butt">Try Virtualizor</button></a></center>
			<br>If you have any feedback / questions, please do let us know - <a href="mailto:support%40virtualizor.com">support@virtualizor.com</a>.</span>
		</div>
		<div class="col-md-5" style="vertical-align:center;">
			<img src="'.$theme['images'].'virtualizor_scr.png" class="img-responsive">
		</div>';
		
		echo '
		<div class="clearfix"></div>
		<div class="row alert alert-info" style="margin-left:0px;margin-right:0px;">
			'.$promo[mt_rand(0, count($promo) - 1)].'
		</div>';
	}

	echo '<div id="softnewsholder" style="margin-left:0px; margin-right:0px;">
		<center class="news_content_header">
			'.$l['news'].'
		</center> 
		<div class="news_content sai_newzbox" style="padding:0;">
			<div class="softnews" id="softnews"></div>
		</div>	
	</div>
	
</div><br />';

softfooter();

}

?>