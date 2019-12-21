<?php

//////////////////////////////////////////////////////////////
//===========================================================
// settings_theme.php
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

function settings_theme(){

global $theme, $globals, $user, $l, $langs, $skins, $error, $saved, $softpanel, $protocols;

//Is suPHP installed ?
$apache_modules = (function_exists('apache_get_modules') ? apache_get_modules() : '');
if(is_array($apache_modules)){
	foreach($apache_modules as $av){
		if(strtolower($av) == 'mod_suphp'){
			$suphp = true;
		}
	}
}

softheader($l['<title>']);

echo '<div class="container-fluid">
		<div class="row sai_heading text-center">'.$l['settings'].'</div><br />
		<div class="sai_hr"></div>
	</div><br />';

echo '<link rel="stylesheet" type="text/css" href="'.$theme['url'].'/spectrum.css?'.$globals['version'].'" />
<script language="javascript" src="'.$theme['url'].'/js/combined.js" type="text/javascript"></script>
<script src="'.$theme['url'].'/js/spectrum.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript"><!-- // --><![CDATA[

function show_ud(id){
	var val = id.value;
	if(val == "user_defined"){
		$("#admin_prefix_ud").css("display", "");
	}else{
		$("#admin_prefix_ud").css("display", "none");
	}
}

function showtip(txt, el){	
	
	$_("stooltip").innerHTML = txt;
	
	var pos = findelpos(el);
	$_("stooltip").style.display = "";
	var tipheight = parseInt($_("stooltip").offsetHeight);
	var tipwidth = parseInt($_("stooltip").offsetWidth);
	//alert(tipheight+" "+tipwidth);
	
	var abody = findelpos($_("abody"));
	var bodyWidth = abody[0] + $_("abody").offsetWidth
	
	if((pos[0] + tipwidth) > bodyWidth){
		pos[0] = pos[0] - (pos[0] + tipwidth - bodyWidth) + 15;
	}
	
	$_("stooltip").style.left = pos[0]+"px";
	$_("stooltip").style.top = (pos[1]-5-tipheight)+"px";
	
	el.onmouseout = function(){
		hidetip();
	};

};

function hidetip(){
	$_("stooltip").style.display = "none";
}

function isNumber(n) {
	if(isNaN(n.value)){
		alert(n.value+\' is not a valid Number\');
		return false;
	}
}

$(document).ready(function() {
	$("#off_sitepad").change(function() {
		if($(this).prop("checked")){
			alert("'.$l['off_sitepad_conf'].'");
		}
	});
});
// ]]></script>';

if(!empty($saved)){
	echo '<div class="container-fluid"><div class="alert alert-success text-center"><a href="#close" class="close" data-dismiss="alert">&times;</a><img src="'.$theme['images'].'success.gif" /> '.$l['settings_saved'].'</div></div>';
}

echo '<div id="stooltip" style="display:none; position:absolute; top: 0px; left: 0px; border: 1px solid #CCC; padding: 8px; background: #FFF; z-index:1000;"></div>
<form accept-charset="'.$globals['charset'].'" name="editsettings" method="post" action="" class="form-horizontal">
<div class="container-fluid">';

error_handle($error);

echo '<div class="row">
	<div class="col-sm-6">';
	
if(!defined('SOFTRESELLER')){
	echo '<div class="sai_form_head">'.$l['pathhead'].'</div>
	<div class="sai_form">
		<div class="row">
			<div class="col-sm-5">
				<label for="softpath" class="sai_head">'.$l['softpath'].'</label><br />
				<span class="sai_exp2">'.$l['softpath_exp'].'</span>
			</div>
			<div class="col-sm-7">
				<input type="text" name="path" class="form-control" id="softpath" value="'.aPOSTval('path', $globals['path']).'" />
			</div>
		</div><br />
		
		<div class="row">
			<div class="col-sm-5">
				<label for="softscripts" class="sai_head">'.$l['softscripts'].'</label><br />
				<span class="sai_exp2">'.$l['softscripts_exp'].'</span>
			</div>
			<div class="col-sm-7">
				<input type="text" name="softscripts" class="form-control" id="softscripts" value="'.aPOSTval('softscripts', $globals['softscripts']).'" />
			</div>
		</div><br />
		<p><input type="submit" class="flat-butt" name="editsettings" value="'.$l['edit_settings'].'"/></p>
	</div><br />';
}
	echo '<div class="sai_form_head">'.$l['rebranding_settings'].'</div>
	<div class="sai_form">
		
		<div class="row">
			<div class="col-sm-7">
				<label for="sn" class="sai_head">'.$l['sitename'].'</label><br />
				<span class="sai_exp2">'.$l['sitename_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="text" name="sn" id="sn" class="form-control" value="'.aPOSTval('sn', $globals['sn']).'" />
			</div>
		</div><br />
		
		<div class="row">
			<div class="col-sm-7">
				<label for="logo_url" class="sai_head">'.$l['logo_url'].'</label><br />
				<span class="sai_exp2">'.$l['logo_url_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="text" name="logo_url" class="form-control" id="logo_url" value="'.aPOSTval('logo_url', $globals['logo_url']).'" />
			</div>
		</div><br />
	
		<div class="row">
			<div class="col-sm-7">
				<label for="demo_logo" class="sai_head">'.$l['demo_logo'].'</label><br />
				<span class="sai_exp2">'.$l['demo_logo_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="text" name="demo_logo" class="form-control" id="demo_logo" value="'.aPOSTval('demo_logo', $globals['demo_logo']).'" />
			</div>
		</div><br />
	
		<div class="row">
			<div class="col-sm-7">
				<label for="demo_logo_url" class="sai_head">'.$l['demo_logo_url'].'</label><br />
				<span class="sai_exp2">'.$l['demo_logo_url_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="text" name="demo_logo_url" class="form-control" id="demo_logo_url" value="'.aPOSTval('demo_logo_url', $globals['demo_logo_url']).'" />
			</div>
		</div><br />
	
		<div class="row">
			<div class="col-sm-7">
				<label for="favicon_logo" class="sai_head">'.$l['favicon_logo'].'</label><br />
				<span class="sai_exp2">'.$l['favicon_logo_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="text" name="favicon_logo" class="form-control" id="favicon_logo" value="'.aPOSTval('favicon_logo', $globals['favicon_logo']).'" />
			</div>
		</div><br />
		
		<p><input type="submit" class="flat-butt " name="editsettings" value="'.$l['edit_settings'].'"/></p>
	</div><br />
	
<div class="sai_form_head">'.$l['gen_set'].'</div>
<div class="sai_form">';
		
if(!defined('SOFTRESELLER')){
	
	echo '<div class="row">
		<div class="col-sm-7">
			<label for="is_vps" class="sai_head">'.$l['is_vps'].'</label><br />
			<span class="sai_exp2">'.$l['is_vps_exp'].'</span>
		</div>
		<div class="col-sm-5">
			<input type="checkbox" name="is_vps" id="is_vps" '.POSTchecked('is_vps', $globals['is_vps']).' />
		</div>
	</div><br />

	<div class="row">
		<div class="col-sm-7">
			<label for="cookie_name" class="sai_head">'.$l['cook_name'].'</label><br />
			<span class="sai_exp2">'.$l['cook_name_exp'].'</span>
		</div>
		<div class="col-sm-5">
			<input type="text" name="cookie_name" id="cookie_name" class="form-control" value="'.aPOSTval('cookie_name', $globals['cookie_name']).'" />
		</div>
	</div><br />
	
	<div class="row">
		<div class="col-sm-7">
			<label for="chmod_files" class="sai_head">'.$l['chmod_files'].'</label><br />
			<span class="sai_exp2">'.$l['chmod_files_exp'].' '.(empty($suphp) ? '' : '<b>('.$l['suphp_detected'].')</b>').'</span>
		</div>
		<div class="col-sm-5">
			<input type="text" name="chmod_files" id="chmod_files" class="form-control"  value="'.aPOSTval('chmod_files', $globals['chmod_files']).'" />
		</div>
	</div><br />
	
	<div class="row">
		<div class="col-sm-7">
			<label for="chmod_dir" class="sai_head">'.$l['chmod_dir'].'</label><br />
			<span class="sai_exp2">'.$l['chmod_dir_exp'].' '.(empty($suphp) ? '' : '<b>('.$l['suphp_detected'].')</b>').'</span>
		</div>
		<div class="col-sm-5">
			<input type="text" name="chmod_dir" id="chmod_dir" class="form-control" value="'.aPOSTval('chmod_dir', $globals['chmod_dir']).'" />
		</div>
	</div><br />
	
	<div class="row">
		<div class="col-sm-7">
			<label for="chmod_conf_file" class="sai_head">'.$l['chmod_conf_file'].'</label><br />
			<span class="sai_exp2">'.$l['chmod_conf_file_exp'].'</span>
		</div>
		<div class="col-sm-5">
			<input type="text" name="chmod_conf_file" id="chmod_conf_file" class="form-control" value="'.aPOSTval('chmod_conf_file', @$globals['chmod_conf_file']).'" />
		</div>
	</div><br />
	
	<div class="row">
		<div class="col-sm-7">
			<label for="footer_link" class="sai_head">'.$l['footer_link'].'</label><br />
			<span class="sai_exp2">'.$l['footer_link_exp'].'</span>
		</div>
		<div class="col-sm-5">
			<input type="text" name="footer_link" id="footer_link" class="form-control" size="20" value="'.aPOSTval('footer_link', @$globals['footer_link']).'" />
		</div>
	</div><br />';
}

if($globals['softpanel'] == 'directadmin' && !defined('SOFTRESELLER')){
	echo '<div class="row">
		<div class="col-sm-7">
			<label for="remote_mysql" class="sai_head">'.$l['remote_mysql'].'</label><br />
			<span class="sai_exp2">'.$l['remote_mysql_exp'].'</span>
		</div>
		<div class="col-sm-5">
			<input type="text" name="remote_mysql" id="remote_mysql" class="form-control" size="20" value="'.aPOSTval('remote_mysql', @$globals['remote_mysql']).'" />
		</div>
	</div><br />';
}	
	
if(!defined('SOFTRESELLER')){
	echo '<div class="row">
		<div class="col-sm-7">
			<label for="soft_email" class="sai_head">'.$l['soft_email'].'</label><br />
			<span class="sai_exp2">'.$l['soft_email_exp'].'</span>
		</div>
		<div class="col-sm-5">
			<input type="text" name="soft_email" id="soft_email" class="form-control" size="30" value="'.aPOSTval('soft_email', $globals['soft_email']).'" />
		</div>
	</div><br />';
}
	
echo '<div class="row">
		<div class="col-sm-7">
			<label for="from_email" class="sai_head">'.$l['from_email'].'</label><br />
			<span class="sai_exp2">'.$l['from_email_exp'].'</span>
		</div>
		<div class="col-sm-5">
			<input type="text" name="from_email" id="from_email" size="30" class="form-control" value="'.aPOSTval('from_email', $globals['from_email']).'" />
		</div>
	</div><br />
	
	<div class="row">
		<div class="col-sm-7">
			<label class="sai_head">'.$l['choose_lang'].'</label><br />
			<span class="sai_exp2">'.$l['choose_lang_exp'].'</span>
		</div>
		<div class="col-sm-5">
			<select name="language" class="form-control">';
			foreach($langs as $k => $v){
				echo '<option value="'.$v.'" '.(empty($_POST['language']) && $globals['language'] == $v ? 'selected="selected"' : (@trim($_POST['language']) == $v ? 'selected="selected"' : '') ).'>'._ucfirst($v).'</option>';
			}
			echo '</select>
		</div>
	</div><br />
	
	<div class="row">
		<div class="col-sm-7">
			<label class="sai_head">'.$l['choose_protocol'].'</label><br />
			<span class="sai_exp2">'.$l['choose_protocol_exp'].'</span>
		</div>
		<div class="col-sm-5">
			<select name="default_protocol" class="form-control">';
			foreach($protocols as $pk => $pv){
				echo '<option value="'.$pk.'" '.($globals['default_protocol'] == $pk ? 'selected="selected"' : '').'>'.$pv.'</option>';
			}
			echo '</select>
		</div>
	</div><br />
	
	<div class="row">
		<div class="col-sm-7">
			<label class="sai_head">'.$l['off_protocol'].'</label><br />
			<span class="sai_exp2">'.$l['off_protocol_exp'].'</span>
		</div>
		<div class="col-sm-5">';
			foreach($protocols as $pk => $pv){
				echo '<input type="checkbox" name="off_proto_'.$pk.'" '.POSTchecked('off_proto_'.$pk, @$globals['off_proto_'.$pk]).' /><span class="sai_head">&nbsp;'.$pv.'</span><br />';
			}
			echo'
		</div>
	</div><br />
	
	<div class="row">
		<div class="col-sm-7">
			<label class="sai_head">'.$l['choose_theme'].'</label><br />
			<span class="sai_exp2">'.$l['choose_theme_exp'].'</span>
		</div>
		<div class="col-sm-5">
			<select name="theme_folder" class="form-control">';
			foreach($skins as $k => $v){
				echo '<option value="'.$v.'" '.(empty($_POST['theme_folder']) && $globals['theme_folder'] == $v ? 'selected="selected"' : (trim($_POST['theme_folder']) == $v ? 'selected="selected"' : '') ).'>'._ucfirst($v).'</option>';	
			}
			echo '</select>
		</div>
	</div><br />';
				
if(!defined('SOFTRESELLER')){
	echo '<div class="row">
		<div class="col-sm-7">
			<label class="sai_head">'.$l['default_hf_bg'].'</label><br />
			<span class="sai_exp2">'.$l['default_hf_bg_exp'].'</span>
		</div>
		<div class="col-sm-5">
			<input type="color" name="color" id="default_hf_bg" class="changecolor"/>&nbsp;&nbsp;
			<input type="hidden" name="default_hf_bg" value="'.aPOSTval('default_hf_bg', $globals['default_hf_bg']).'" id="hidden_default_hf_bg">
		</div>
	</div><br />

	<div class="row">
		<div class="col-sm-7">
			<label class="sai_head">'.$l['default_cat_hover'].'</label><br />
			<span class="sai_exp2">'.$l['default_cat_hover_exp'].'</span>
		</div>
		<div class="col-sm-5">
			<input type="color" name="color" id="default_cat_hover" class="changecolor"/>&nbsp;&nbsp;
			<input type="hidden" name="default_cat_hover" value="'.aPOSTval('default_cat_hover', $globals['default_cat_hover']).'" id="hidden_default_cat_hover">
		</div>
	</div><br />
	
	<div class="row">
		<div class="col-sm-7">
			<label class="sai_head">'.$l['default_hf_text'].'</label><br />
			<span class="sai_exp2">'.$l['default_hf_text_exp'].'</span>
		</div>
		<div class="col-sm-5">
			<input type="color" name="color" id="default_hf_text" class="changecolor"/>&nbsp;&nbsp;
			<input type="hidden" name="default_hf_text" value="'.aPOSTval('default_hf_text', $globals['default_hf_text']).'" id="hidden_default_hf_text">
		</div>
	</div><br />
	
	<div class="row">
		<div class="col-sm-7">
			<label class="sai_head">'.$l['default_scriptname_text'].'</label><br />
			<span class="sai_exp2">'.$l['default_scriptname_text_exp'].'</span>
		</div>
		<div class="col-sm-5">
			<input type="color" name="color" id="default_scriptname_text" class="changecolor"/>&nbsp;&nbsp;
			<input type="hidden" name="default_scriptname_text" value="'.aPOSTval('default_scriptname_text', $globals['default_scriptname_text']).'" id="hidden_default_scriptname_text">
		</div>
	</div><br />';


	if($globals['softpanel'] == 'webuzo'){
		$disable_sysapps = $softpanel->getconf('DISABLE_SYSAPPS');
		echo '<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['network_interface'].'</label><br />
				<span class="sai_exp2">'.$l['network_interface_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="text" name="network_interface" class="form-control" size="30" value="'.aPOSTval('network_interface', $globals['network_interface']).'" />
			</div>
		</div><br />';
		
		if(empty($disable_sysapps)){
			echo '<div class="row">
				<div class="col-sm-7">
					<label class="sai_head">'.$l['webuzo_disable_username'].'</label><br />
					<span class="sai_exp2">'.$l['webuzo_disable_username_exp'].'</span>
				</div>
				<div class="col-sm-5">
					<input type="checkbox" name="webuzo_disable_username" '.POSTchecked('webuzo_disable_username', @$globals['webuzo_disable_username']).' />
				</div>
			</div><br />';
		}
	}
	
	echo '<div class="row">
		<div class="col-sm-7">
			<label class="sai_head">'.$l['time_format'].'</label><br />
			<span class="sai_exp2">'.$l['time_format_exp'].'</span>
		</div>
		<div class="col-sm-5">
			<input type="text" name="time_format" class="form-control" size="30" value="'.aPOSTval('time_format', $globals['time_format']).'" />
		</div>
	</div><br />

	<div class="row">
		<div class="col-sm-3">
			<label class="sai_head">'.$l['timezone'].'</label><br />
		</div>
		<div class="col-sm-9">
			<select name="timezone" style="font-size:12px" class="form-control">
				<option value="-12" '.(isset($_POST['timezone']) && $_POST['timezone'] == '-12' ? 'selected="selected"' : ($globals['timezone'] == -12 ? 'selected="selected"' : '')).' >(GMT -12:00) Eniwetok, Kwajalein</option>
				<option value="-11" '.(isset($_POST['timezone']) && $_POST['timezone'] == '-11' ? 'selected="selected"' : ($globals['timezone'] == -11 ? 'selected="selected"' : '')).' >(GMT -11:00) Midway Island, Samoa</option>
				<option value="-10" '.(isset($_POST['timezone']) && $_POST['timezone'] == '-10' ? 'selected="selected"' : ($globals['timezone'] == -10 ? 'selected="selected"' : '')).' >(GMT -10:00) Hawaii</option>
				<option value="-9" '.(isset($_POST['timezone']) && $_POST['timezone'] == '-9' ? 'selected="selected"' : ($globals['timezone'] == -9 ? 'selected="selected"' : '')).' >(GMT -9:00) Alaska</option>
				<option value="-8" '.(isset($_POST['timezone']) && $_POST['timezone'] == '-8' ? 'selected="selected"' : ($globals['timezone'] == -8 ? 'selected="selected"' : '')).' >(GMT -8:00) Pacific Time (US &amp; Canada)</option>
				<option value="-7" '.(isset($_POST['timezone']) && $_POST['timezone'] == '-7' ? 'selected="selected"' : ($globals['timezone'] == -7 ? 'selected="selected"' : '')).' >(GMT -7:00) Mountain Time (US &amp; Canada)</option>
				<option value="-6" '.(isset($_POST['timezone']) && $_POST['timezone'] == '-6' ? 'selected="selected"' : ($globals['timezone'] == -6 ? 'selected="selected"' : '')).' >(GMT -6:00) Central Time (US &amp; Canada), Mexico City</option>
				<option value="-5" '.(isset($_POST['timezone']) && $_POST['timezone'] == '-5' ? 'selected="selected"' : ($globals['timezone'] == -5 ? 'selected="selected"' : '')).' >(GMT -5:00) Eastern Time (US &amp; Canada), Bogota, Lima</option>
				<option value="-4" '.(isset($_POST['timezone']) && $_POST['timezone'] == '-4' ? 'selected="selected"' : ($globals['timezone'] == -4 ? 'selected="selected"' : '')).' >(GMT -4:00) Atlantic Time (Canada), Caracas, La Paz</option>
				<option value="-3.5" '.(isset($_POST['timezone']) && $_POST['timezone'] == '-3.5' ? 'selected="selected"' : ($globals['timezone'] == -3.5 ? 'selected="selected"' : '')).' >(GMT -3:30) Newfoundland</option>
				<option value="-3" '.(isset($_POST['timezone']) && $_POST['timezone'] == '-3' ? 'selected="selected"' : ($globals['timezone'] == -3 ? 'selected="selected"' : '')).' >(GMT -3:00) Brazil, Buenos Aires, Georgetown</option>
				<option value="-2" '.(isset($_POST['timezone']) && $_POST['timezone'] == '-2' ? 'selected="selected"' : ($globals['timezone'] == -2 ? 'selected="selected"' : '')).' >(GMT -2:00) Mid-Atlantic</option>
				<option value="-1" '.(isset($_POST['timezone']) && $_POST['timezone'] == '-1' ? 'selected="selected"' : ($globals['timezone'] == -1 ? 'selected="selected"' : '')).' >(GMT -1:00 hour) Azores, Cape Verde Islands</option>
				<option value="0" '.(isset($_POST['timezone']) && $_POST['timezone'] == '0' ? 'selected="selected"' : ($globals['timezone'] == 0 ? 'selected="selected"' : '')).' >(GMT) Western Europe Time, London, Lisbon, Casablanca</option>
				<option value="1" '.(isset($_POST['timezone']) && $_POST['timezone'] == '1' ? 'selected="selected"' : ($globals['timezone'] == 1 ? 'selected="selected"' : '')).' >(GMT +1:00 hour) Brussels, Copenhagen, Madrid, Paris</option>
				<option value="2" '.(isset($_POST['timezone']) && $_POST['timezone'] == '2' ? 'selected="selected"' : ($globals['timezone'] == 2 ? 'selected="selected"' : '')).' >(GMT +2:00) Kaliningrad, South Africa</option>
				<option value="3" '.(isset($_POST['timezone']) && $_POST['timezone'] == '3' ? 'selected="selected"' : ($globals['timezone'] == 3 ? 'selected="selected"' : '')).' >(GMT +3:00) Baghdad, Riyadh, Moscow, St. Petersburg</option>
				<option value="3.5" '.(isset($_POST['timezone']) && $_POST['timezone'] == '3.5' ? 'selected="selected"' : ($globals['timezone'] == 3.5 ? 'selected="selected"' : '')).' >(GMT +3:30) Tehran</option>
				<option value="4" '.(isset($_POST['timezone']) && $_POST['timezone'] == '4' ? 'selected="selected"' : ($globals['timezone'] == 4 ? 'selected="selected"' : '')).' >(GMT +4:00) Abu Dhabi, Muscat, Baku, Tbilisi</option>
				<option value="4.5" '.(isset($_POST['timezone']) && $_POST['timezone'] == '4.5' ? 'selected="selected"' : ($globals['timezone'] == 4.5 ? 'selected="selected"' : '')).' >(GMT +4:30) Kabul</option>
				<option value="5" '.(isset($_POST['timezone']) && $_POST['timezone'] == '5' ? 'selected="selected"' : ($globals['timezone'] == 5 ? 'selected="selected"' : '')).' >(GMT +5:00) Ekaterinburg, Islamabad, Karachi, Tashkent</option>
				<option value="5.5" '.(isset($_POST['timezone']) && $_POST['timezone'] == '5.5' ? 'selected="selected"' : ($globals['timezone'] == 5.5 ? 'selected="selected"' : '')).' >(GMT +5:30) Bombay, Calcutta, Madras, New Delhi</option>
				<option value="6" '.(isset($_POST['timezone']) && $_POST['timezone'] == '6' ? 'selected="selected"' : ($globals['timezone'] == 6 ? 'selected="selected"' : '')).' >(GMT +6:00) Almaty, Dhaka, Colombo</option>
				<option value="6.5" '.(isset($_POST['timezone']) && $_POST['timezone'] == '6.5' ? 'selected="selected"' : ($globals['timezone'] == 6.5 ? 'selected="selected"' : '')).' >(GMT +6:30) Yangon, Myanmar</option>
				<option value="7" '.(isset($_POST['timezone']) && $_POST['timezone'] == '7' ? 'selected="selected"' : ($globals['timezone'] == 7 ? 'selected="selected"' : '')).' >(GMT +7:00) Bangkok, Hanoi, Jakarta</option>
				<option value="8" '.(isset($_POST['timezone']) && $_POST['timezone'] == '8' ? 'selected="selected"' : ($globals['timezone'] == 8 ? 'selected="selected"' : '')).' >(GMT +8:00) Beijing, Perth, Singapore, Hong Kong, Taiwan</option>
				<option value="9" '.(isset($_POST['timezone']) && $_POST['timezone'] == '9' ? 'selected="selected"' : ($globals['timezone'] == 9 ? 'selected="selected"' : '')).' >(GMT +9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk</option>
				<option value="9.5" '.(isset($_POST['timezone']) && $_POST['timezone'] == '9.5' ? 'selected="selected"' : ($globals['timezone'] == 9.5 ? 'selected="selected"' : '')).' >(GMT +9:30) Adelaide, Darwin</option>
				<option value="10" '.(isset($_POST['timezone']) && $_POST['timezone'] == '10' ? 'selected="selected"' : ($globals['timezone'] == 10 ? 'selected="selected"' : '')).' >(GMT +10:00) Eastern Australia, Guam, Vladivostok</option>
				<option value="11" '.(isset($_POST['timezone']) && $_POST['timezone'] == '11' ? 'selected="selected"' : ($globals['timezone'] == 11 ? 'selected="selected"' : '')).' >(GMT +11:00) Magadan, Solomon Islands, New Caledonia</option>
				<option value="12" '.(isset($_POST['timezone']) && $_POST['timezone'] == '12' ? 'selected="selected"' : ($globals['timezone'] == 12 ? 'selected="selected"' : '')).' >(GMT +12:00) Auckland, Wellington, Fiji, Kamchatka</option>
			</select>
		</div>
	</div><br />
	
	<div class="row">
		<div class="col-sm-7">
			<label class="sai_head">'.$l['logs_level'].'</label><br />
			<span class="sai_exp2">'.$l['logs_level_exp'].'</span>
		</div>
		<div class="col-sm-5">
			<select name="logs_level" class="form-control">
				<option value="0" '.POSTselect('logs_level', 0, (empty($globals['logs_level']) ? '1' : '0')).'>'.$l['off'].'</option>
				<option value="1" '.POSTselect('logs_level', 1, ($globals['logs_level'] == '1' ? '1' : '0')).'>1</option>
				<option value="2" '.POSTselect('logs_level', 2, ($globals['logs_level'] == '2' ? '1' : '0')).'>2</option>
				<option value="3" '.POSTselect('logs_level', 3, ($globals['logs_level'] == '3' ? '1' : '0')).'>3</option>
				<option value="4" '.POSTselect('logs_level', 4, ($globals['logs_level'] == '4' ? '1' : '0')).'>4 ('.$l['logs_level-4'].')</option>
			</select>
		</div>
	</div><br />';
	
	if(aefer() || ent() || $globals['softpanel'] == 'isp'){
	echo '<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['disable_csrf'].'</label><br />
				<span class="sai_exp2">'.$l['disable_csrf_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="checkbox" name="disable_csrf" '.POSTchecked('disable_csrf', @$globals['disable_csrf']).' />
			</div>
		</div><br />';
	}
	
	if($globals['softpanel'] == 'hc'){
		echo '<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['hc_api_url'].'</label><br />
				<span class="sai_exp2">'.$l['hc_api_url_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" name="hc_apiurl" size="30" value="'.aPOSTval('hc_apiurl', htmlizer($globals['hc_apiurl'])).'" />
			</div>
		</div><br />';
	}
	
	if(aefer() || ent()){
		echo '<div class="row">
				<div class="col-sm-7">
					<label class="sai_head">'.$l['enc_user_pass'].'</label><br />
					<span class="sai_exp2">'.$l['enc_user_pass_exp'].'</span>
				</div>
				<div class="col-sm-5">
					<input type="checkbox" name="enc_user_pass" '.POSTchecked('enc_user_pass', @$globals['enc_user_pass']).' />
				</div>
			</div><br />
			<div class="row">
				<div class="col-sm-7">
					<label class="sai_head">'.$l['force_softaculous_on_ssl'].'</label><br />
					<span class="sai_exp2">'.$l['force_softaculous_on_ssl_exp'].'</span>
				</div>
				<div class="col-sm-5">
					<input type="checkbox" name="force_softaculous_on_ssl" '.POSTchecked('force_softaculous_on_ssl', @$globals['force_softaculous_on_ssl']).' />
				</div>
			</div><br />';		
	}
	
	if($globals['softpanel'] == 'webuzo'){
	echo'<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['db_prefix'].'</label><br />
				<span class="sai_exp2">'.$l['db_prefix_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="checkbox" name="enable_dbprefix" '.POSTchecked('enable_dbprefix', @$globals['enable_dbprefix']).' />
			</div>
		</div><br />';
	}
}
	
echo '<p><input type="submit" class="flat-butt " name="editsettings" value="'.$l['edit_settings'].'"/></p>
</div><br />

<div class="sai_form_head">'.$l['sitepad_settings'].'</div>
<div class="sai_form">
	<div class="row">
		<div class="col-sm-7">
			<label class="sai_head">'.$l['off_sitepad'].'</label><br />
			<span class="sai_exp2">'.$l['off_sitepad_exp'].'</span>
		</div>
		<div class="col-sm-5">
			<input type="checkbox" name="off_sitepad" id="off_sitepad" '.POSTchecked('off_sitepad', @$globals['off_sitepad']).' />
		</div>
	</div><br />
	
	<div class="row">
		<div class="col-sm-7">
			<label class="sai_head">'.$l['hide_sitepad'].'</label><br />
			<span class="sai_exp2">'.$l['hide_sitepad_exp'].'</span>
		</div>
		<div class="col-sm-5">
			<input type="checkbox" name="hide_sitepad" id="hide_sitepad" '.POSTchecked('hide_sitepad', @$globals['hide_sitepad']).' />
		</div>
	</div><br />
	
	<div class="row">
		<div class="col-sm-7">
			<label for="sm_brand" class="sai_head">'.$l['sm_brand'].'</label><br />
			<span class="sai_exp2">'.$l['sm_brand_exp'].'</span>
		</div>
		<div class="col-sm-5">
			<input type="text" name="sm_brand" id="sm_brand" class="form-control" value="'.aPOSTval('sm_brand', $globals['sm_brand']).'" />
		</div>
	</div><br />
	
	<div class="row">
		<div class="col-sm-7">
			<label for="sm_sitename" class="sai_head">'.$l['sm_sitename'].'</label><br />
			<span class="sai_exp2">'.$l['sm_sitename_exp'].'</span>
		</div>
		<div class="col-sm-5">
			<input type="text" name="sm_sitename" id="sm_sitename" class="form-control" value="'.aPOSTval('sm_sitename', $globals['sm_sitename']).'" />
		</div>
	</div><br />
	
	<div class="row">
		<div class="col-sm-7">
			<label for="sm_brand_editor" class="sai_head">'.$l['sm_brand_editor'].'</label><br />
			<span class="sai_exp2">'.$l['sm_brand_editor_exp'].'</span>
		</div>
		<div class="col-sm-5">
			<input type="text" name="sm_brand_editor" id="sm_brand_editor" class="form-control" value="'.aPOSTval('sm_brand_editor', $globals['sm_brand_editor']).'" />
		</div>
	</div><br />
	
	<div class="row">
		<div class="col-sm-7">
			<label for="sm_logo_url" class="sai_head">'.$l['sm_logo_url'].'</label><br />
			<span class="sai_exp2">'.$l['sm_logo_url_exp'].'</span>
		</div>
		<div class="col-sm-5">
			<input type="text" name="sm_logo_url" id="sm_logo_url" class="form-control" value="'.aPOSTval('sm_logo_url', $globals['sm_logo_url']).'" />
		</div>
	</div><br />
	
	<div class="row">
		<div class="col-sm-7">
			<label for="sm_brand_url" class="sai_head">'.$l['sm_brand_url'].'</label><br />
			<span class="sai_exp2">'.$l['sm_brand_url_exp'].'</span>
		</div>
		<div class="col-sm-5">
			<input type="text" name="sm_brand_url" id="sm_brand_url" class="form-control" value="'.aPOSTval('sm_brand_url', $globals['sm_brand_url']).'" />
		</div>
	</div><br />
			
	<div class="row">
	<div class="col-sm-7">
		<label for="host_sm" class="sai_head">'.$l['host_sm'].'</label><br />
		<span class="sai_exp2">'.$l['host_sm_exp'].'</span>
	</div>
	<div class="col-sm-5">
		<input type="text" name="host_sm" id="host_sm" class="form-control" size="30" value="'.aPOSTval('host_sm', $globals['host_sm']).'" />
	</div>
	</div><br />
	
	<div class="row">
	<div class="col-sm-7">
		<label for="sm_brand_demos" class="sai_head">'.$l['sm_brand_demos'].'</label><br />
		<span class="sai_exp2">'.$l['sm_brand_demos_exp'].'</span>
	</div>
	<div class="col-sm-5">
		<input type="text" name="sm_brand_demos" id="sm_brand_demos" class="form-control" size="30" value="'.aPOSTval('sm_brand_demos', $globals['sm_brand_demos']).'" />
	</div>
	</div><br />
	
	<div class="row">
		<div class="col-sm-7">
			<label class="sai_head">'.$l['sm_no_demos'].'</label><br />
			<span class="sai_exp2">'.$l['sm_no_demos_exp'].'</span>
		</div>
		<div class="col-sm-5">
			<input type="checkbox" name="sm_no_demos" '.POSTchecked('sm_no_demos', $globals['sm_no_demos']).' />
		</div>
	</div><br />
	
	<div class="row">
		<div class="col-sm-7">
			<label class="sai_head">'.$l['sm_no_recent_themes'].'</label><br />
			<span class="sai_exp2">'.$l['sm_no_recent_themes_exp'].'</span>
		</div>
		<div class="col-sm-5">
			<input type="checkbox" name="sm_no_recent_themes" '.POSTchecked('sm_no_recent_themes', $globals['sm_no_recent_themes']).' />
		</div>
	</div><br />
	
	<div class="row">
	<div class="col-sm-7">
		<label for="sm_ftp_host" class="sai_head">'.$l['sm_ftp_host'].'</label><br />
		<span class="sai_exp2">'.$l['sm_ftp_host_exp'].'</span>
	</div>
	<div class="col-sm-5">
		<input type="text" name="sm_ftp_host" id="sm_ftp_host" class="form-control" size="30" value="'.aPOSTval('sm_ftp_host', $globals['sm_ftp_host']).'" />
	</div>
	</div><br />
	
	<div class="row">
	<div class="col-sm-7">
		<label for="sm_ftp_port" class="sai_head">'.$l['sm_ftp_port'].'</label><br />
		<span class="sai_exp2">'.$l['sm_ftp_port_exp'].'</span>
	</div>
	<div class="col-sm-5">
		<input type="text" name="sm_ftp_port" id="sm_ftp_port" class="form-control" size="30" value="'.aPOSTval('sm_ftp_port', $globals['sm_ftp_port']).'" />
	</div>
	</div><br />
			
		<p><input type="submit" class="flat-butt " name="editsettings" value="'.$l['edit_settings'].'"/></p>
</div><br />';
		
if(!defined('SOFTRESELLER')){
	// PFX Settings will be here
	if(!empty($globals['lictype'])){
		echo '<div class="sai_form_head">'.$l['pfx_settings'].'</div>
		<div class="sai_form">
			<div class="row">
				<div class="col-sm-7">
					<label class="sai_head">'.$l['eu_enable_themes'].'</label><br />
					<span class="sai_exp2">'.$l['eu_enable_themes_exp'].'</span>
				</div>
				<div class="col-sm-5">
					<input type="checkbox" name="eu_enable_themes" '.POSTchecked('eu_enable_themes', @$globals['eu_enable_themes']).' />
				</div>
			</div><br />
			
			<div class="row">
				<div class="col-sm-7">
					<label class="sai_head">'.$l['eu_themes_premium'].'</label><br />
					<span class="sai_exp2">'.$l['eu_themes_premium_exp'].'</span>
				</div>
				<div class="col-sm-5">
					<input type="checkbox" name="eu_themes_premium" '.POSTchecked('eu_themes_premium', @$globals['eu_themes_premium']).' />
				</div>
			</div><br />
				<p><input type="submit" class="flat-butt " name="editsettings" value="'.$l['edit_settings'].'"/></p>
		</div><br />';
	}	
		
	echo '<div class="sai_form_head">'.$l['update_settings'].'</div>
	<div class="sai_form">
		<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['auto_upd_softac'].'</label><br />
				<span class="sai_exp2">'.$l['auto_upd_softac_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="radio" name="update" value="0" '.POSTradio('update', 0, $globals['update']).' /> '.$l['never_update'].' <br />
				<input type="radio" name="update" value="1" '.POSTradio('update', 1, $globals['update']).' /> '.$l['stable'].' <br />
				<input type="radio" name="update" value="2" '.POSTradio('update', 2, $globals['update']).' /> '.$l['release_cand'].'
			</div>
		</div><br />';
		
		if($globals['softpanel'] == 'webuzo'){
			echo '<div class="row">
				<div class="col-sm-7">
					<label class="sai_head">'.$l['update_system'].'</label><br />
					<span class="sai_exp2">'.$l['update_system_exp'].'</span>
				</div>
				<div class="col-sm-5">
					<input type="checkbox" name="update_system" '.POSTchecked('update_system', $globals['update_system']).' />
				</div>
			</div><br/>';
		}
		
		echo '<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['auto_upd_soft'].'</label><br />
				<span class="sai_exp2">'.$l['auto_upd_soft_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="checkbox" name="update_softs" '.POSTchecked('update_softs', $globals['update_softs']).' />
			</div>
		</div><br />
		
		<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['auto_add_soft'].'</label><br />
				<span class="sai_exp2">'.$l['auto_add_soft_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="checkbox" name="add_softs" '.POSTchecked('add_softs', $globals['add_softs']).' />
			</div>
		</div><br />
		
		<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['email_upd_soft'].'</label><br />
				<span class="sai_exp2">'.$l['email_upd_soft_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="checkbox" name="email_update" '.POSTchecked('email_update', $globals['email_update']).' />
			</div>
		</div><br />
		
		<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['email_upd_softs'].'</label><br />
				<span class="sai_exp2">'.$l['email_upd_softs_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="checkbox" name="email_update_softs" '.POSTchecked('email_update_softs', $globals['email_update_softs']).' />
			</div>
		</div><br />';
		
		if($globals['softpanel'] == 'webuzo'){
			echo '<div class="row">
				<div class="col-sm-7">
					<label class="sai_head">'.$l['email_update_apps'].'</label><br />
					<span class="sai_exp2">'.$l['email_update_apps_exp'].'</span>
				</div>
				<div class="col-sm-5">
					<input type="checkbox" name="email_update_apps" '.POSTchecked('email_update_apps', $globals['email_update_apps']).' />
				</div>
			</div><br/>';
		}
		
		echo '<div class="row">
			<div class="col-sm-7">
				<label for="cron_time" class="sai_head">'.$l['cron_time'].'</label><br />
				<span class="sai_exp2">'.$l['cron_time_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="text" name="cron_time" id="cron_time" class="form-control" size="30" value="'.aPOSTval('cron_time', $globals['cron_time']).'" />
			</div>
		</div><br />
		
		<div class="row">
			<div class="col-sm-7">
				<label for="php_bin" class="sai_head">'.$l['php_bin'].'</label><br />
				<span class="sai_exp2">'.$l['php_bin_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control" name="php_bin" size="30" value="'.aPOSTval('php_bin', htmlizer($globals['php_bin'])).'" />
			</div>
		</div><br />
		<p><input type="submit" class="flat-butt " name="editsettings" value="'.$l['edit_settings'].'"/></p>
	</div><br />
	
	<div class="sai_form_head">'.$l['remove_options'].'</div>
	<div class="sai_form">
		<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['remove_dir'].'</label><br />
				<span class="sai_exp2">'.$l['remove_dir_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="checkbox" name="remove_dir" '.POSTchecked('remove_dir', $globals['remove_dir']).' />
			</div>
		</div><br />
		
		<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['remove_db'].'</label><br />
				<span class="sai_exp2">'.$l['remove_db_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="checkbox" name="remove_db" '.POSTchecked('remove_db', $globals['remove_db']).' />
			</div>
		</div><br />
		
		<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['remove_datadir'].'</label><br />
				<span class="sai_exp2">'.$l['remove_datadir_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="checkbox" name="remove_datadir" '.POSTchecked('remove_datadir', $globals['remove_datadir']).' />
			</div>
		</div><br />
		
		<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['remove_wwwdir'].'</label><br />
				<span class="sai_exp2">'.$l['remove_wwwdir_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="checkbox" name="remove_wwwdir" '.POSTchecked('remove_wwwdir', $globals['remove_wwwdir']).' />
			</div>
		</div><br />
		<p><input type="submit" class="flat-butt " name="editsettings" value="'.$l['edit_settings'].'"/></p>
	</div><br />
	
	<div class="sai_form_head">'.$l['social_media'].'</div>
	<div class="sai_form">
		<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['install_tweet_off'].'</label><br />
				<span class="sai_exp2">'.$l['install_tweet_off_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="checkbox" name="install_tweet_off" '.POSTchecked('install_tweet_off', $globals['install_tweet_off']).' />
			</div>
		</div><br />
		
		<div class="row">
			<div class="col-sm-7">
				<label for="install_tweet" class="sai_head">'.$l['install_tweet_msg'].'</label><br />
				<span class="sai_exp2">'.$l['install_tweet_msg_exp'].'</span><br />
				<span style="cursor:pointer;" onmouseover="showtip(\''.$l['tweet_vars'].'\', this)">'.$l['tweet_vars_link'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="text" name="install_tweet" id="install_tweet" class="form-control" size="30" value="'.aPOSTval('install_tweet', (!empty($globals['install_tweet']) ? $globals['install_tweet'] : $l['install_tweet'])).'" />
			</div>
		</div><br />
		
		<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['upgrade_tweet_off'].'</label><br />
				<span class="sai_exp2">'.$l['upgrade_tweet_off_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="checkbox" name="upgrade_tweet_off" '.POSTchecked('upgrade_tweet_off', $globals['upgrade_tweet_off']).' />
			</div>
		</div><br />
		
		<div class="row">
			<div class="col-sm-7">
				<label for="upgrade_tweet" class="sai_head">'.$l['upgrade_tweet_msg'].'</label><br />
				<span class="sai_exp2">'.$l['upgrade_tweet_msg_exp'].'</span><br />
				<span style="cursor:pointer;" onmouseover="showtip(\''.$l['tweet_vars'].'\', this)">'.$l['tweet_vars_link'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="text" name="upgrade_tweet" id="upgrade_tweet" class="form-control" size="30" value="'.aPOSTval('upgrade_tweet', (!empty($globals['upgrade_tweet']) ? $globals['upgrade_tweet'] : $l['upgrade_tweet'])).'" />
			</div>
		</div><br />
		
		<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['clone_tweet_off'].'</label><br />
				<span class="sai_exp2">'.$l['clone_tweet_off_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="checkbox" name="clone_tweet_off" '.POSTchecked('clone_tweet_off', $globals['clone_tweet_off']).' />
			</div>
		</div><br />

		<div class="row">
			<div class="col-sm-7">
				<label for="clone_tweet" class="sai_head">'.$l['clone_tweet_msg'].'</label><br />
				<span class="sai_exp2">'.$l['clone_tweet_msg_exp'].'</span><br />
				<span style="cursor:pointer;" onmouseover="showtip(\''.$l['tweet_vars'].'\', this)">'.$l['tweet_vars_link'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="text" name="clone_tweet" class="form-control" id="clone_tweet" size="30" value="'.aPOSTval('clone_tweet', (!empty($globals['clone_tweet']) ? $globals['clone_tweet'] : $l['clone_tweet'])).'" />
			</div>
		</div><br />
		<p><input type="submit" class="flat-butt " name="editsettings" value="'.$l['edit_settings'].'"/></p>
	</div><br />
	
	<div class="sai_form_head">'.$l['disable_soft'].'</div>
	<div class="sai_form">
		<div class="row">
			<div class="col-sm-5">
				<label class="sai_head">'.$l['soft_off'].'</label><br />
				<span class="sai_exp2">'.$l['soft_off_exp'].'</span>
			</div>
			<div class="col-sm-7">
				<input type="checkbox" name="off" '.POSTchecked('off', $globals['off']).' />
			</div>
		</div><br />
		
		<div class="row">
			<div class="col-sm-5">
				<label for="off_subject" class="sai_head">'.$l['off_sub'].'</label><br />
			</div>
			<div class="col-sm-7">
				<input type="text" name="off_subject" class="form-control" id="off_subject" size="30" value="'.aPOSTval('off_subject', $globals['off_subject']).'" />
			</div>
		</div><br />
		
		<div class="row">
			<div class="col-sm-5">
				<label for="off_message" class="sai_head">'.$l['off_message'].'</label><br />
			</div>
			<div class="col-sm-7">
				<textarea name="off_message" class="form-control" cols="30" rows="6">'.aPOSTval('off_message', $globals['off_message']).'</textarea>
			</div>
		</div><br />
		<p><input type="submit" class="flat-butt " name="editsettings" value="'.$l['edit_settings'].'"/></p>
	</div><br />';
}
	
echo '</div>
	
	<div class="col-sm-6">
		<div class="sai_form_head">'.$l['end_user_set'].'</div>
		<div class="sai_form">
		<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['no_prefill'].'</label><br />
				<span class="sai_exp2">'.$l['no_prefill_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="checkbox" name="no_prefill" '.POSTchecked('no_prefill', @$globals['no_prefill']).' />
			</div>
		</div><br />
		
		<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['no_indir'].'</label><br />
				<span class="sai_exp2">'.$l['no_indir_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="checkbox" name="no_indir" '.POSTchecked('no_indir', @$globals['no_indir']).' />
			</div>
		</div><br />
		
		<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['random_username'].'</label><br />
				<span class="sai_exp2">'.$l['random_username_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="checkbox" name="random_username" '.POSTchecked('random_username', @$globals['random_username']).' />
			</div>
		</div><br />
		
		<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['random_pass'].'</label><br />
				<span class="sai_exp2">'.$l['random_pass_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="checkbox" name="random_pass" '.POSTchecked('random_pass', @$globals['random_pass']).' />
			</div>
		</div><br />
		
		<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['random_dbprefix'].'</label><br />
				<span class="sai_exp2">'.$l['random_dbprefix_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="checkbox" name="random_dbprefix" '.POSTchecked('random_dbprefix', @$globals['random_dbprefix']).' />
			</div>
		</div><br />';
		
if(!defined('SOFTRESELLER')){
	echo '<div class="row">
		<div class="col-sm-7">
			<label class="sai_head">'.$l['empty_username'].'</label><br />
			<span class="sai_exp2">'.$l['empty_username_exp'].'</span>
		</div>
		<div class="col-sm-5">
			<input type="checkbox" name="empty_username" '.POSTchecked('empty_username', @$globals['empty_username']).' />
		</div>
	</div><br />
	
	<div class="row">
		<div class="col-sm-7">
			<label class="sai_head">'.$l['empty_pass'].'</label><br />
			<span class="sai_exp2">'.$l['empty_pass_exp'].'</span>
		</div>
		<div class="col-sm-5">
			<input type="checkbox" name="empty_pass" '.POSTchecked('empty_pass', @$globals['empty_pass']).' />
		</div>
	</div><br />
	
	<div class="row">
		<div class="col-sm-7">
			<label class="sai_head">'.$l['comp_output'].'</label><br />
			<span class="sai_exp2">'.$l['comp_output_exp'].'</span>
		</div>
		<div class="col-sm-5">
			<input type="checkbox" name="gzip" '.POSTchecked('gzip', $globals['gzip']).' />
		</div>
	</div><br />';
}
	
if(!empty($softpanel->native_ui)){
	echo '<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['panel_hf'].'</label><br />
				<span class="sai_exp2">'.$l['panel_hf_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="checkbox" name="panel_hf" size="30" '.POSTchecked('panel_hf', @$globals['panel_hf']).' />
			</div>
		</div><br />';
}

if(!defined('SOFTRESELLER')){
	echo '<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['show_cscript_in_top'].'</label><br />
				<span class="sai_exp2">'.$l['show_cscript_in_top_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="checkbox" name="show_cscript_in_top" '.POSTchecked('show_cscript_in_top', @$globals['show_cscript_in_top']).' />
			</div>
		</div><br />';
		
	if(!empty($softpanel->user_mod_dir)){
		echo '<div class="row">
				<div class="col-sm-7">
					<label class="sai_head">'.$l['user_mod_dir'].'</label><br />
					<span class="sai_exp2">'.$l['user_mod_dir_exp'].'</span>
				</div>
				<div class="col-sm-5">
					<input type="checkbox" name="user_mod_dir" '.POSTchecked('user_mod_dir', $globals['user_mod_dir']).' />
				</div>
			</div><br />';
		
		if($globals['softpanel'] == 'cpanel'){
			echo '<div class="row">
					<div class="col-sm-7">
						<label class="sai_head">'.$l['nat_config'].'</label><br />
						<span class="sai_exp2">'.$l['nat_config_exp'].'</span>
					</div>
					<div class="col-sm-5">
						<input type="checkbox" name="nat_config" '.POSTchecked('nat_config', $globals['nat_config']).' />
					</div>
				</div><br />';
		}
	}
	
	echo '<div class="row">
			<div class="col-sm-7">
				<label for="pass_strength" class="sai_head">'.$l['pass_strength'].'</label><br />
				<span class="sai_exp2">'.$l['pass_strength_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="text" name="pass_strength" id="pass_strength" class="form-control" size="30" value="'.aPOSTval('pass_strength', $globals['pass_strength']).'" />
			</div>
		</div><br />
		
		<div class="row">
			<div class="col-sm-7">
				<label for="admin_prefix" class="sai_head">'.$l['admin_prefix'].'</label><br />
				<span class="sai_exp2">'.$l['admin_prefix_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<select id="admin_prefix" name="admin_prefix" onchange="show_ud(this);" class="form-control">
					<option value="" '.((isset($_POST['admin_prefix']) && $_POST['admin_prefix'] == "") ? 'selected="selected"' : ((!isset($_POST['admin_prefix']) && $globals['admin_prefix'] == "") ? 'selected="selected"' : '')).'>'.$l['ap_none'].'</option>
					
					<option value="username" '.((isset($_POST['admin_prefix']) && $_POST['admin_prefix'] == "username") ? 'selected="selected"' : ((!isset($_POST['admin_prefix']) && $globals['admin_prefix'] == "username") ? 'selected="selected"' : '')).'>'.$l['ap_username'].'</option>
					
					<option value="domain" '.((isset($_POST['admin_prefix']) && $_POST['admin_prefix'] == "domain") ? 'selected="selected"' : ((!isset($_POST['admin_prefix']) && $globals['admin_prefix'] == "domain") ? 'selected="selected"' : '')).'>'.$l['ap_domain'].'</option>
					
					<option value="user_defined" '.((isset($_POST['admin_prefix']) && $_POST['admin_prefix'] == "user_defined") ? 'selected="selected"' : ((!isset($_POST['admin_prefix']) && $globals['admin_prefix'] != "username" && $globals['admin_prefix'] != "domain" && $globals['admin_prefix'] != "") ? 'selected="selected"' : '')).'>'.$l['ap_admin_defined'].'</option>
					
				</select>&nbsp;&nbsp;&nbsp;
				<input type="text" id="admin_prefix_ud" name="admin_prefix_ud" '.((!empty($_POST['admin_prefix_ud']) && $_POST['admin_prefix'] != "" && $_POST['admin_prefix'] != "username" && $_POST['admin_prefix'] != "domain") ? 'value="'.$_POST['admin_prefix_ud'].'" style=""' : ((!isset($_POST['admin_prefix']) && ($globals['admin_prefix'] != "username" && $globals['admin_prefix'] != "domain" && $globals['admin_prefix'] != "")) ? 'value="'.$globals['admin_prefix'].'" style=""' : 'style="display:none"')).' />
			</div>
		</div><br />';

	// At the moment only for H-Sphere we are providing this option
	if($globals['softpanel'] == 'hsphere'){
		echo '<div class="row">
				<div class="col-sm-7">
					<label for="ephp_bin" class="sai_head">'.$l['ephp_bin'].'</label><br />
					<span class="sai_exp2">'.$l['ephp_bin_exp'].sphpbin().'</span>
				</div>
				<div class="col-sm-5">
					<input type="text" name="ephp_bin" class="form-control" id="ephp_bin" value="'.aPOSTval('ephp_bin', $globals['ephp_bin']).'" size="30" />
				</div>
			</div><br />';
	}
}

if($globals['softpanel'] == 'ampps'){
	echo '<div class="row">
			<div class="col-sm-7">
				<label for="adomain_path" class="sai_head">'.$l['default_domain_path'].'</label><br />
				<span class="sai_exp2">'.$l['default_domain_path_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="text" name="adomain_path" id="adomain_path" class="form-control" size="30" value="'.aPOSTval('adomain_path', $globals['adomain_path']).'" />
			</div>
		</div><br />';
}

if($globals['softpanel'] != 'ampps' && !empty($globals['ampps_enabled']) && !empty($globals['lictype'])){
	echo '<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['no_ampps_download'].'</label><br />
				<span class="sai_exp2">'.$l['no_ampps_download_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="checkbox" name="no_ampps" '.POSTchecked('no_ampps', @$globals['no_ampps']).' />
			</div>
		</div><br />';
}

if(!defined('SOFTRESELLER')){
	echo '<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['no_strong_mysql_pass'].'</label><br />
				<span class="sai_exp2">'.$l['no_strong_mysql_pass_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="checkbox" name="no_strong_mysql_pass" '.POSTchecked('no_strong_mysql_pass', @$globals['no_strong_mysql_pass']).' />
			</div>
		</div><br />
	
		<div class="row">
			<div class="col-sm-7">
				<label for="dbpass_len" class="sai_head">'.$l['dbpass_len'].'</label><br />
				<span class="sai_exp2">'.$l['dbpass_len_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="text" id="dbpass_len" name="dbpass_len" class="form-control" value="'.aPOSTval('dbpass_len', @$globals['dbpass_len']).'" onblur="isNumber(this)"/>
			</div>
		</div><br />
	
		<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['pre_download_all'].'</label><br />
				<span class="sai_exp2">'.$l['pre_download_all_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="checkbox" name="pre_download_all" '.POSTchecked('pre_download_all', @$globals['pre_download_all']).' />
			</div>
		</div><br />

		<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['enc_db_pass'].'</label><br />
				<span class="sai_exp2">'.$l['enc_db_pass_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="checkbox" name="enc_db_pass" '.POSTchecked('enc_db_pass', @$globals['enc_db_pass']).' />
			</div>
		</div><br />		

		<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['disable_branches'].'</label><br />
				<span class="sai_exp2">'.$l['disable_branches_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="checkbox" name="disable_branches" '.POSTchecked('disable_branches', @$globals['disable_branches']).' />
			</div>
		</div><br />';

	if(asperapp(1, 0, 0)){ // Only for Softaculous
	echo '<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['default_landing'].'</label><br />
				<span class="sai_exp2">'.$l['default_landing_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<select name="default_landing" class="form-control">
					<option value="" '.(!isset($_POST['default_landing']) && empty($globals['default_landing']) ? 'selected="selected"' : '').'>'.$l['top_scripts'].'</option>
					<option value="installations" '.(isset($_POST['default_landing']) && $_POST['default_landing'] == 'installations' ? 'selected="selected"' : ($globals['default_landing'] == 'installations' ? 'selected="selected"' : '')).'>'.$l['all_ins'].'</option>
					<option value="outdated_ins" '.(isset($_POST['default_landing']) && $_POST['default_landing'] == 'outdated_ins' ? 'selected="selected"' : ($globals['default_landing'] == 'outdated_ins' ? 'selected="selected"' : '')).'>'.$l['outdated_ins'].'</option>
					<option value="all_scripts" '.(isset($_POST['default_landing']) && $_POST['default_landing'] == 'all_scripts' ? 'selected="selected"' : ($globals['default_landing'] == 'all_scripts' ? 'selected="selected"' : '')).'>'.$l['all_scripts'].'</option>
				</select>
			</div>
		</div><br />';
	}

	if(aefer()){
	echo '<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['no_ftp_encrypted'].'</label><br />
				<span class="sai_exp2">'.$l['no_ftp_encrypted_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="checkbox" name="no_ftp_encrypted" '.POSTchecked('no_ftp_encrypted', @$globals['no_ftp_encrypted']).' />
			</div>
		</div><br />
		
		<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['no_add_domain'].'</label><br />
				<span class="sai_exp2">'.$l['no_add_domain_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="checkbox" name="no_add_domain" '.POSTchecked('no_add_domain', @$globals['no_add_domain']).' />
			</div>
		</div><br />
		
		<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['no_prefill_db'].'</label><br />
				<span class="sai_exp2">'.$l['no_prefill_db_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="checkbox" name="no_prefill_db" '.POSTchecked('no_prefill_db', @$globals['no_prefill_db']).' />
			</div>
		</div><br />';
	}

	if(aefer() || ent()){
	echo '<div class="row">
			<div class="col-sm-7">
				<label for="session_timeout" class="sai_head">'.$l['session_timeout'].'</label><br />
				<span class="sai_exp2">'.$l['session_timeout_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="text" id="session_timeout" name="session_timeout" class="form-control" value="'.aPOSTval('session_timeout', @$globals['session_timeout']).'" onblur="isNumber(this)"/>
			</div>
		</div><br />
	
		<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['sync_domains'].'</label><br />
				<span class="sai_exp2">'.(aefer() ? $l['sync_domains_exp_remote'] : $l['sync_domains_exp_ent']).'</span>
			</div>
			<div class="col-sm-5">
				<input type="checkbox" name="sync_domains" '.POSTchecked('sync_domains', @$globals['sync_domains']).' />
			</div>
		</div><br />';
	}		
		
	echo '<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['no_prefill_pass'].'</label><br />
				<span class="sai_exp2">'.$l['no_prefill_pass_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="checkbox" name="no_prefill_pass" '.POSTchecked('no_prefill_pass', @$globals['no_prefill_pass']).' />
			</div>
		</div><br />
		
		<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['disable_sign_on'].'</label><br />
				<span class="sai_exp2">'.$l['disable_sign_on_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="checkbox" name="disable_sign_on" '.POSTchecked('disable_sign_on', @$globals['disable_sign_on']).' />
			</div>
		</div><br />
		
		<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['use_eu_username'].'</label><br />
				<span class="sai_exp2">'.$l['use_eu_username_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="checkbox" name="use_eu_username" '.POSTchecked('use_eu_username', @$globals['use_eu_username']).' />
			</div>
		</div><br />
		
		<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['use_eu_email'].'</label><br />
				<span class="sai_exp2">'.$l['use_eu_email_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="checkbox" name="use_eu_email" '.POSTchecked('use_eu_email', @$globals['use_eu_email']).' />
			</div>
		</div><br />
		
		<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['off_available_space'].'</label><br />
				<span class="sai_exp2">'.$l['off_available_space_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="checkbox" name="off_available_space" '.POSTchecked('off_available_space', @$globals['off_available_space']).' />
			</div>
		</div><br />
		
		<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['off_checkhttps'].'</label><br />
				<span class="sai_exp2">'.$l['off_checkhttps_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="checkbox" name="off_checkhttps" '.POSTchecked('off_checkhttps', @$globals['off_checkhttps']).' />
			</div>
		</div><br />
		
		<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['quick_install_default'].'</label><br />
				<span class="sai_exp2">'.$l['quick_install_default_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="checkbox" name="quick_install_default" '.POSTchecked('quick_install_default', @$globals['quick_install_default']).' />
			</div>
		</div><br />';
		
	if(!aefer() && !ent()){
	echo'<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['sync_ins_list'].'</label><br />
				<span class="sai_exp2">'.$l['sync_ins_list_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="checkbox" name="sync_ins_list" '.POSTchecked('sync_ins_list', @$globals['sync_ins_list']).' />
			</div>
		</div><br />
	
		<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['sync_ins_real_ver'].'</label><br />
				<span class="sai_exp2">'.$l['sync_ins_real_ver_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="checkbox" name="sync_ins_real_ver" '.POSTchecked('sync_ins_real_ver', @$globals['sync_ins_real_ver']).' />
			</div>
		</div><br />
		
		<div class="row">
			<div class="col-sm-7">
				<label for="max_staging" class="sai_head">'.$l['max_staging'].'</label><br />
				<span class="sai_exp2">'.$l['max_staging_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="text" name="max_staging" id="max_staging" class="form-control" size="30" value="'.aPOSTval('max_staging', $globals['max_staging']).'" />
			</div>
		</div><br />';
	}

	if($globals['softpanel'] == 'webuzo'){
	echo '<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['disable_cronupdate_email'].'</label><br />
				<span class="sai_exp2">'.$l['disable_cronupdate_email_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="checkbox" name="disable_cronupdate_email" '.POSTchecked('disable_cronupdate_email', @$globals['disable_cronupdate_email']).' />
			</div>
		</div><br />
	
		<div class="row">
			<div class="col-sm-7">
				<label for="soa_expire_val" class="sai_head">'.$l['set_soa_expire_val'].'</label><br />
				<span class="sai_exp2">'.$l['set_soa_expire_val_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="text" id="soa_expire_val" name="soa_expire_val" class="form-control" value="'.(!empty($globals['soa_expire_val']) ? POSTval('soa_expire_val', @$globals['soa_expire_val']) : POSTval('soa_expire_val', 3600000)).'" />
			</div>
		</div><br />';
	}	
}

echo '<p><input type="submit" class="flat-butt " name="editsettings" value="'.$l['edit_settings'].'"/></p>
	</div><br />';

if(!defined('SOFTRESELLER')){
echo '<div class="sai_form_head">'.$l['backup_set'].'	</div>
	<div class="sai_form">
		<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['disable_auto_backup'].'</label><br />
				<span class="sai_exp2">'.$l['disable_auto_backup_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="checkbox" name="disable_auto_backup" '.POSTchecked('disable_auto_backup', @$globals['disable_auto_backup']).' /><span class="sai_head">&nbsp;'.$l['auto_backup_all'].'</span><br />
				<input type="checkbox" name="disable_auto_backup_daily" '.POSTchecked('disable_auto_backup_daily', @$globals['disable_auto_backup_daily']).' /><span class="sai_head">&nbsp;'.$l['auto_backup_daily'].'</span><br />
				<input type="checkbox" name="disable_auto_backup_weekly" '.POSTchecked('disable_auto_backup_weekly', @$globals['disable_auto_backup_weekly']).' /><span class="sai_head">&nbsp;'.$l['auto_backup_weekly'].'</span><br />
				<input type="checkbox" name="disable_auto_backup_monthly" '.POSTchecked('disable_auto_backup_monthly', @$globals['disable_auto_backup_monthly']).' /><span class="sai_head">&nbsp;'.$l['auto_backup_monthly'].'</span><br />
				<input type="checkbox" name="disable_auto_backup_custom" '.POSTchecked('disable_auto_backup_custom', @$globals['disable_auto_backup_custom']).' /><span class="sai_head">&nbsp;'.$l['auto_backup_custom'].'</span>
			</div>
		</div><br />';
	if(!aefer() && !ent()){	
	echo'<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['auto_backup'].'</label><br />
				<span class="sai_exp2">'.$l['auto_backup_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<select name="auto_backup" class="form-control" id="auto_backup">
					<option value="0" '.POSTselect('auto_backup', '0', 1).'>'.$l['no_backup'].'</option>
					<option value="daily" '.POSTselect('auto_backup', 'daily', ($globals['auto_backup'] == 'daily' ? 1 : '')).'>'.$l['daily'].'</option>
					<option value="weekly" '.POSTselect('auto_backup', 'weekly', ($globals['auto_backup'] == 'weekly' ? 1 : '')).'>'.$l['weekly'].'</option>
					<option value="monthly" '.POSTselect('auto_backup', 'monthly', ($globals['auto_backup'] == 'monthly' ? 1 : '')).'>'.$l['monthly'].'</option>
				</select>
			</div>
		</div><br />
		
		<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['backup_rotation'].'</label><br />
				<span class="sai_exp2">'.$l['backup_rotation_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<select name="auto_backup_rotation" class="form-control">';
					for($i=0; $i<=10; $i++){
						echo '<option value="'.$i.'" '.(empty($_POST['auto_backup_rotation']) && $globals['auto_backup_rotation'] == $i ? 'selected="selected"' : (trim($_POST['auto_backup_rotation']) == $i ? 'selected="selected"' : '') ).'>'.(empty($i) ? $l['auto_backup_default'] : ($i == -1 ? $l['auto_backup_unlimited'] : $i)).'</option>';        
					}
					echo '<option value="-1" '.(empty($_POST['auto_backup_rotation']) && $globals['auto_backup_rotation'] == -1 ? 'selected="selected"' : (trim($_POST['auto_backup_rotation']) == -1 ? 'selected="selected"' : '') ).'>'.$l['auto_backup_unlimited'].'</option>';
				echo '</select>
			</div>
		</div><br />';
	}
	echo'<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['auto_backup_limit'].'</label><br />
				<span class="sai_exp2">'.$l['auto_backup_limit_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<select name="auto_backup_limit" class="form-control">';    
					for($i=0; $i<=10; $i++){
						echo '<option value="'.$i.'" '.(empty($_POST['auto_backup_limit']) && $globals['auto_backup_limit'] == $i ? 'selected="selected"' : (trim($_POST['auto_backup_limit']) == $i ? 'selected="selected"' : '') ).'>'.(empty($i) ? $l['auto_backup_unlimited'] : $i).'</option>';        
					}	
				echo '</select>
			</div>
		</div><br />
	
		<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['max_backups'].'</label><br />
				<span class="sai_exp2">'.$l['max_backups_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<select name="max_backups" class="form-control">';
					for($i=0; $i<=10; $i++){
						echo '<option value="'.$i.'" '.(empty($_POST['max_backups']) && $globals['max_backups'] == $i ? 'selected="selected"' : (trim($_POST['max_backups']) == $i ? 'selected="selected"' : '') ).'>'.(empty($i) ? $l['max_backups_unlimited'] : $i).'</option>';        
					}	
				echo '</select>
			</div>
		</div><br />';

		if(!aefer() && !ent()){
		echo '<div class="row">
				<div class="col-sm-7">
					<label for="backups_expire" class="sai_head">'.$l['backups_expire'].'</label><br />
					<span class="sai_exp2">'.$l['backups_expire_exp'].'</span>
				</div>
				
				<div class="col-sm-5">
					<div class="input-group">
						<input type="text" id="backups_expire" class="form-control" aria-describedby="backups_expire" name="backups_expire" value="'.aPOSTval('backups_expire', @$globals['backups_expire']).'" onblur="isNumber(this)"/ >
						<p class="input-group-addon" id="backups_expire" style="width:5%;">days</p>
					</div>
				</div>
			</div><br />';
		}
		
	echo '<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['disable_backup_restore'].'</label><br />
				<span class="sai_exp2">'.$l['disable_backup_restore_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="checkbox" name="disable_backup_restore" size="30" '.POSTchecked('disable_backup_restore', @$globals['disable_backup_restore']).' />
			</div>
		</div><br />
		
		<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['disable_backup_upgrade'].'</label><br />
				<span class="sai_exp2">'.$l['disable_backup_upgrade_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="checkbox" name="disable_backup_upgrade" '.POSTchecked('disable_backup_upgrade', @$globals['disable_backup_upgrade']).' />
			</div>
		</div><br />
		
		<div class="row">
			<div class="col-sm-7">
				<label for="set_backup_dir" class="sai_head">'.$l['set_backup_dir'].'</label><br />
				<span class="sai_exp2">'.$l['set_backup_dir_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="text" name="set_backup_dir" id="set_backup_dir" class="form-control" size="20" value="'.aPOSTval('set_backup_dir', @$globals['set_backup_dir']).'" />
			</div>
		</div><br />
		
		<div class="row">
			<div class="col-sm-7">
				<label for="off_rbackup" class="sai_head">'.$l['off_rbackup'].'</label><br />
				<span class="sai_exp2">'.$l['off_rbackup_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="checkbox" name="off_rbackup" '.POSTchecked('off_rbackup', @$globals['off_rbackup']).' />
			</div>
		</div><br />
		
		<div class="row">
			<div class="col-sm-7">
				<label for="upgrade_backup_on" class="sai_head">'.$l['upgrade_backup_on'].'</label><br />
				<span class="sai_exp2">'.$l['upgrade_backup_on_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="checkbox" name="upgrade_backup_on" '.POSTchecked('upgrade_backup_on', @$globals['upgrade_backup_on']).' />
			</div>
		</div><br />
		<p><input type="submit" class="flat-butt " name="editsettings" value="'.$l['edit_settings'].'"/></p>
	</div><br />';
}

echo '<div class="sai_form_head">'.$l['email_set'].'</div>
		<div class="sai_form">
			<div class="row">
				<div class="col-sm-7">
					<label class="sai_head">'.$l['off_email_link'].'</label><br />
					<span class="sai_exp2">'.$l['off_email_link_exp'].'</span>
				</div>
				<div class="col-sm-5">
					<input type="checkbox" name="off_email_link" '.POSTchecked('off_email_link', $globals['off_email_link']).' />
				</div>
			</div><br />';

if(!defined('SOFTRESELLER')){
echo '<div class="row">
		<div class="col-sm-7">
			<label class="sai_head">'.$l['off_remove_mail'].'</label><br />
			<span class="sai_exp2">'.$l['off_remove_mail_exp'].'</span>
		</div>
		<div class="col-sm-5">
			<input type="checkbox" name="off_remove_mail" '.POSTchecked('off_remove_mail', $globals['off_remove_mail']).' />
		</div>
	</div><br />

	<div class="row">
		<div class="col-sm-7">
			<label class="sai_head">'.$l['off_install_mail'].'</label><br />
			<span class="sai_exp2">'.$l['off_install_mail_exp'].'</span>
		</div>
		<div class="col-sm-5">
			<input type="checkbox" name="off_install_mail" '.POSTchecked('off_install_mail', $globals['off_install_mail']).' />
		</div>
	</div><br />
	
	<div class="row">
		<div class="col-sm-7">
			<label class="sai_head">'.$l['off_edit_mail'].'</label><br />
			<span class="sai_exp2">'.$l['off_edit_mail_exp'].'</span>
		</div>
		<div class="col-sm-5">
			<input type="checkbox" name="off_edit_mail" '.POSTchecked('off_edit_mail', $globals['off_edit_mail']).' />
		</div>
	</div><br />
	
	<div class="row">
		<div class="col-sm-7">
			<label class="sai_head">'.$l['off_clone_mail'].'</label><br />
			<span class="sai_exp2">'.$l['off_clone_mail_exp'].'</span>
		</div>
		<div class="col-sm-5">
			<input type="checkbox" name="off_clone_mail" '.POSTchecked('off_clone_mail', $globals['off_clone_mail']).' />
		</div>
	</div><br />
	
	<div class="row">
		<div class="col-sm-7">
			<label class="sai_head">'.$l['off_staging_mail'].'</label><br />
			<span class="sai_exp2">'.$l['off_staging_mail_exp'].'</span>
		</div>
		<div class="col-sm-5">
			<input type="checkbox" name="off_staging_mail" '.POSTchecked('off_staging_mail', $globals['off_staging_mail']).' />
		</div>
	</div><br />
	
	<div class="row">
		<div class="col-sm-7">
			<label class="sai_head">'.$l['eu_email_off'].'</label><br />
			<span class="sai_exp2">'.$l['eu_email_off_exp'].'</span>
		</div>
		<div class="col-sm-5">
			<input type="checkbox" name="eu_email_off" '.POSTchecked('eu_email_off', @$globals['eu_email_off']).' />
		</div>
	</div><br />
	
	<div class="row">
		<div class="col-sm-7">
			<label class="sai_head">'.$l['off_backup_mail'].'</label><br />
			<span class="sai_exp2">'.$l['off_backup_mail_exp'].'</span>
		</div>
		<div class="col-sm-5">
			<input type="checkbox" name="off_backup_mail" '.POSTchecked('off_backup_mail', $globals['off_backup_mail']).' />
		</div>
	</div><br />
	
	<div class="row">
		<div class="col-sm-7">
			<label class="sai_head">'.$l['off_restore_mail'].'</label><br />
			<span class="sai_exp2">'.$l['off_restore_mail_exp'].'</span>
		</div>
		<div class="col-sm-5">
			<input type="checkbox" name="off_restore_mail" '.POSTchecked('off_restore_mail', $globals['off_restore_mail']).' />
		</div>
	</div><br />
	
	<div class="row">
		<div class="col-sm-7">
			<label class="sai_head">'.$l['off_import_mail'].'</label><br />
			<span class="sai_exp2">'.$l['off_import_mail_exp'].'</span>
		</div>
		<div class="col-sm-5">
			<input type="checkbox" name="off_import_mail" '.POSTchecked('off_import_mail', $globals['off_import_mail']).' />
		</div>
	</div><br />';
}

echo '<div class="row">
		<div class="col-sm-7">
			<label class="sai_head">'.$l['email_password'].'</label><br />
			<span class="sai_exp2">'.$l['email_password_exp'].'</span>
		</div>
		<div class="col-sm-5">
			<input type="checkbox" name="email_password" '.POSTchecked('email_password', $globals['email_password']).' />
		</div>
	</div><br />

	<p><input type="submit" class="flat-butt " name="editsettings" value="'.$l['edit_settings'].'"/></p>
	</div><br />
	
	<div class="sai_form_head">'.$l['hide_feature_set'].'</div>
	<div class="sai_form">
		<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['eu_news_off'].'</label><br />
				<span class="sai_exp2">'.$l['eu_news_off_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="checkbox" name="eu_news_off"  '.POSTchecked('eu_news_off', @$globals['eu_news_off']).' />
			</div>
		</div><br />
		
		<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['off_demo_link'].'</label><br />
				<span class="sai_exp2">'.$l['off_demo_link_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="checkbox" name="off_demo_link" '.POSTchecked('off_demo_link', @$globals['off_demo_link']).' />
			</div>
		</div><br />
	
		<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['off_screenshot_link'].'</label><br />
				<span class="sai_exp2">'.$l['off_screenshot_link_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="checkbox" name="off_screenshot_link" '.POSTchecked('off_screenshot_link', @$globals['off_screenshot_link']).' />
			</div>
		</div><br />
		
		<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['off_rating_link'].'</label><br />
				<span class="sai_exp2">'.$l['off_rating_link_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="checkbox" name="off_rating_link" '.POSTchecked('off_rating_link', @$globals['off_rating_link']).' />
			</div>
		</div><br />
		
		<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['off_review_link'].'</label><br />
				<span class="sai_exp2">'.$l['off_review_link_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="checkbox" name="off_review_link" '.POSTchecked('off_review_link', @$globals['off_review_link']).' />
			</div>
		</div><br />';
		
if(!defined('SOFTRESELLER')){
	echo '<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['perl_scripts'].'</label><br />
				<span class="sai_exp2">'.$l['perl_scripts_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="checkbox" name="perl_scripts" '.POSTchecked('perl_scripts', @$globals['perl_scripts']).' />
			</div>
		</div><br />
	
		<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['nolabels'].'</label><br />
				<span class="sai_exp2">'.$l['nolabels_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="checkbox" name="nolabels" size="30" '.POSTchecked('nolabels', $globals['nolabels']).' />
			</div>
		</div><br />';
		
	// Classes are only avaialable to Premium License
	if(!empty($globals['lictype'])){
	echo '<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['disable_classes'].'</label><br />
				<span class="sai_exp2">'.$l['disable_classes_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="checkbox" name="disable_classes" size="30" '.POSTchecked('disable_classes', @$globals['disable_classes']).' />
			</div>
		</div><br />';
	}
	
	echo '<div class="row">
			<div class="col-sm-7">
			<label class="sai_head">'.$l['disable_reseller_panel'].'</label><br />
			<span class="sai_exp2">'.$l['disable_reseller_panel_exp'].'</span>
		</div>
		<div class="col-sm-5">
			<input type="checkbox" name="disable_reseller_panel" size="30" '.POSTchecked('disable_reseller_panel', @$globals['disable_reseller_panel']).' />
		</div>
	</div><br />
	
	<div class="row">
		<div class="col-sm-7">
			<label class="sai_head">'.$l['disable_clone'].'</label><br />
			<span class="sai_exp2">'.$l['disable_clone_exp'].'</span>
		</div>
		<div class="col-sm-5">
			<input type="checkbox" name="disable_clone" '.POSTchecked('disable_clone', @$globals['disable_clone']).' />
		</div>
	</div><br />
	
	<div class="row">
		<div class="col-sm-7">
			<label class="sai_head">'.$l['disable_import'].'</label><br />
			<span class="sai_exp2">'.$l['disable_import_exp'].'</span>
		</div>
		<div class="col-sm-5">
			<input type="checkbox" name="disable_import" '.POSTchecked('disable_import', @$globals['disable_import']).' />
		</div>
	</div><br />
	
	<div class="row">
		<div class="col-sm-7">
			<label class="sai_head">'.$l['disable_remote_import'].'</label><br />
			<span class="sai_exp2">'.$l['disable_remote_import_exp'].'</span>
		</div>
		<div class="col-sm-5">
			<input type="checkbox" name="disable_remote_import" '.POSTchecked('disable_remote_import', @$globals['disable_remote_import']).' />
		</div>
	</div><br />
		
	<div class="row">
		<div class="col-sm-7">
			<label class="sai_head">'.$l['disable_manage_sets'].'</label><br />
			<span class="sai_exp2">'.$l['disable_manage_sets_exp'].'</span>
		</div>
		<div class="col-sm-5">
			<input type="checkbox" name="disable_manage_sets" '.POSTchecked('disable_manage_sets', @$globals['disable_manage_sets']).' />
		</div>
	</div><br />
	
	<div class="row">
		<div class="col-sm-7">
			<label for="off_staging" class="sai_head">'.$l['off_staging'].'</label><br />
			<span class="sai_exp2">'.$l['off_staging_exp'].'</span>
		</div>
		<div class="col-sm-5">
			<input type="checkbox" name="off_staging" id="off_staging" '.POSTchecked('off_staging', $globals['off_staging']).' />
		</div>
	</div><br />
	
	<div class="row">
		<div class="col-sm-7">
			<label class="sai_head">'.$l['off_customize_theme'].'</label><br />
			<span class="sai_exp2">'.$l['off_customize_exp'].'</span>
		</div>
		<div class="col-sm-5">
			<input type="checkbox" name="off_customize_theme" '.POSTchecked('off_customize_theme', $globals['off_customize_theme']).' />
		</div>
	</div><br />
	<div class="row">
		<div class="col-sm-7">
			<label class="sai_head">'.$l['off_sync_link'].'</label><br />
			<span class="sai_exp2">'.$l['off_sync_link_exp'].'</span>
		</div>
		<div class="col-sm-5">
			<input type="checkbox" name="off_sync_link" '.POSTchecked('off_sync_link', @$globals['off_sync_link']).' />
		</div>
	</div><br />

	<div class="row">
		<div class="col-sm-7">
			<label class="sai_head">'.$l['off_panel_link'].'</label><br />
			<span class="sai_exp2">'.$l['off_panel_link_exp'].'</span>
		</div>
		<div class="col-sm-5">
			<input type="checkbox" name="off_panel_link" '.POSTchecked('off_panel_link', @$globals['off_panel_link']).' />
		</div>
	</div><br />';
}

echo '<p><input type="submit" class="flat-butt " name="editsettings" value="'.$l['edit_settings'].'"/></p>
	</div><br />';
	
if(!defined('SOFTRESELLER')){
	echo '<div class="sai_form_head">'.$l['auto_upgrade_set'].'</div>
	<div class="sai_form">
		<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['force_upgrade_plugins'].'</label><br />
				<span class="sai_exp2">'.$l['force_upgrade_plugins_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="checkbox" name="force_upgrade_plugins" '.POSTchecked('force_upgrade_plugins', @$globals['force_upgrade_plugins']).' />
			</div>
		</div><br />
		
		<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['force_upgrade_themes'].'</label><br />
				<span class="sai_exp2">'.$l['force_upgrade_themes_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="checkbox" name="force_upgrade_themes" '.POSTchecked('force_upgrade_themes', @$globals['force_upgrade_themes']).' />
			</div>
		</div><br />
		
		<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['off_upgrade_plugins'].'</label><br />
				<span class="sai_exp2">'.$l['off_upgrade_plugins_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="checkbox" name="off_upgrade_plugins" '.POSTchecked('off_upgrade_plugins', @$globals['off_upgrade_plugins']).' />
			</div>
		</div><br />
		
		<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['off_upgrade_themes'].'</label><br />
				<span class="sai_exp2">'.$l['off_upgrade_themes_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="checkbox" name="off_upgrade_themes" '.POSTchecked('off_upgrade_themes', @$globals['off_upgrade_themes']).' />
			</div>
		</div><br />
		
		<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['enable_auto_upgrade'].'</label><br />
				<span class="sai_exp2">'.$l['enable_auto_upgrade_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="radio" name="enable_auto_upgrade" value="0" '.POSTradio('enable_auto_upgrade', 0, @$globals['enable_auto_upgrade']).' /> '.$l['dont_auto_upgrade'].' <br />
				<input type="radio" name="enable_auto_upgrade" value="2" '.POSTradio('enable_auto_upgrade', 2, @$globals['enable_auto_upgrade']).' /> '.$l['minor_auto_upgrade'].' <br />
				<input type="radio" name="enable_auto_upgrade" value="1" '.POSTradio('enable_auto_upgrade', 1, @$globals['enable_auto_upgrade']).' /> '.$l['major_auto_upgrade'].'
			</div>
		</div><br />
		
		<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['force_auto_upgrade'].'</label><br />
				<span class="sai_exp2">'.$l['force_auto_upgrade_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="radio" name="force_auto_upgrade" value="0" '.POSTradio('force_auto_upgrade', 0, @$globals['force_auto_upgrade']).' /> '.$l['dont_auto_upgrade'].' <br />
				<input type="radio" name="force_auto_upgrade" value="2" '.POSTradio('force_auto_upgrade', 2, @$globals['force_auto_upgrade']).' /> '.$l['minor_auto_upgrade'].' <br />
				<input type="radio" name="force_auto_upgrade" value="1" '.POSTradio('force_auto_upgrade', 1, @$globals['force_auto_upgrade']).' /> '.$l['major_auto_upgrade'].'
			</div>
		</div><br />
	
		<div class="row">
			<div class="col-sm-7">
				<label class="sai_head">'.$l['max_bg_process'].'</label><br />
				<span class="sai_exp2">'.$l['max_bg_process_exp'].'</span>
			</div>
			<div class="col-sm-5">
				<input type="text" name="max_bg_process" class="form-control" size="30" value="'.aPOSTval('max_bg_process', $globals['max_bg_process']).'" />
			</div>
		</div><br />
		
		<div class="row">
			<div class="col-sm-7">
				<label for="au_extra_retry" class="sai_head">'.$l['au_extra_retry'].'</label><br />
				<span class="sai_exp2">'.$l['au_extra_retry_exp'].'</span>
			</div>
			
			<div class="col-sm-5">
				<div class="input-group">
					<input type="text" id="au_extra_retry" class="form-control" aria-describedby="au_extra_retry" name="au_extra_retry" value="'.aPOSTval('au_extra_retry', @$globals['au_extra_retry']).'" onblur="isNumber(this)"/ >
					<p class="input-group-addon" id="au_extra_retry" style="width:5%;">hours</p>
				</div>
			</div>
		</div><br />
		<p><input type="submit" class="flat-butt " name="editsettings" value="'.$l['edit_settings'].'"/></p>
	</div><br />';
}

echo '</div>
</div>
</div>
'.csrf_display().'
</form>
<script>
function updateColor(color, id) {
	
	var hexColor = "transparent";
	if(color) {
		hexColor = color.toHexString();
	}
	if(hexColor == "transparent") return;
	
	// Set the hidden value so that we can save the settings
	$("#default_hf_bg").val("1");
	
	// For changing text colors of category heading
	if(id == "default_hf_text"){
		$(".soft_cathead a").css("color", hexColor);
		$(".soft_nav a").css("color", hexColor);
		$(".fa").css("color", hexColor);
		
		// set the hidden value so that it can be saved
		$("#hidden_default_hf_text").val(hexColor);
	}
	
	// For changing text colors of category heading hover color
	if(id == "default_cat_hover"){
		try{
			$(".soft_cathead:hover, .soft_cathead_slide:hover").css("background-color", hexColor);
			//$(".soft_cathead_slide:hover").css("background-color", hexColor);
		
			// set the hidden value so that it can be saved
			$("#hidden_default_cat_hover").val(hexColor);
		}catch(e){
			// do nothing
		}
	}
	
	// For changing text colors of script names
	if(id == "default_scriptname_text"){
		$(".softlinks li a").css("color", hexColor);
		
		// set the hidden value so that it can be saved
		$("#hidden_default_scriptname_text").val(hexColor);
	}
	
	// For changing background color
	if(id == "default_hf_bg"){
		$(".soft_nav").css("background", hexColor);
		
		// set the hidden value so that it can be saved
		$("#hidden_default_hf_bg").val(hexColor);
	}
	
}

var pallete_array = [
		["rgb(0, 0, 0)", "rgb(67, 67, 67)", "rgb(102, 102, 102)", /*"rgb(153, 153, 153)","rgb(183, 183, 183)",*/
		"rgb(204, 204, 204)", "rgb(217, 217, 217)", /*"rgb(239, 239, 239)", "rgb(243, 243, 243)",*/ "rgb(255, 255, 255)"],
		["rgb(152, 0, 0)", "rgb(255, 0, 0)", "rgb(255, 153, 0)", "rgb(255, 255, 0)", "rgb(0, 255, 0)",
		"rgb(0, 255, 255)", "rgb(74, 134, 232)", "rgb(0, 0, 255)", "rgb(153, 0, 255)", "rgb(255, 0, 255)"],
		["rgb(230, 184, 175)", "rgb(244, 204, 204)", "rgb(252, 229, 205)", "rgb(255, 242, 204)", "rgb(217, 234, 211)",
		"rgb(208, 224, 227)", "rgb(201, 218, 248)", "rgb(207, 226, 243)", "rgb(217, 210, 233)", "rgb(234, 209, 220)",
		"rgb(221, 126, 107)", "rgb(234, 153, 153)", "rgb(249, 203, 156)", "rgb(255, 229, 153)", "rgb(182, 215, 168)",
		"rgb(162, 196, 201)", "rgb(164, 194, 244)", "rgb(159, 197, 232)", "rgb(180, 167, 214)", "rgb(213, 166, 189)",
		"rgb(204, 65, 37)", "rgb(224, 102, 102)", "rgb(246, 178, 107)", "rgb(255, 217, 102)", "rgb(147, 196, 125)",
		"rgb(118, 165, 175)", "rgb(109, 158, 235)", "rgb(111, 168, 220)", "rgb(142, 124, 195)", "rgb(194, 123, 160)",
		"rgb(166, 28, 0)", "rgb(204, 0, 0)", "rgb(230, 145, 56)", "rgb(241, 194, 50)", "rgb(106, 168, 79)",
		"rgb(69, 129, 142)", "rgb(60, 120, 216)", "rgb(61, 133, 198)", "rgb(103, 78, 167)", "rgb(166, 77, 121)",
		/*"rgb(133, 32, 12)", "rgb(153, 0, 0)", "rgb(180, 95, 6)", "rgb(191, 144, 0)", "rgb(56, 118, 29)",
		"rgb(19, 79, 92)", "rgb(17, 85, 204)", "rgb(11, 83, 148)", "rgb(53, 28, 117)", "rgb(116, 27, 71)",*/
		"rgb(91, 15, 0)", "rgb(102, 0, 0)", "rgb(120, 63, 4)", "rgb(127, 96, 0)", "rgb(39, 78, 19)",
		"rgb(12, 52, 61)", "rgb(28, 69, 135)", "rgb(7, 55, 99)", "rgb(32, 18, 77)", "rgb(76, 17, 48)"]
	];

$(function() {
	$("#default_hf_bg").spectrum({
		allowEmpty:true,
		color : "'.(!empty($globals['default_hf_bg']) ? $globals['default_hf_bg'] : '#333333').'",
		showInput: true,
		className: "full-spectrum",
		showInitial: true,
		showPalette: true,
		showSelectionPalette: true,
		maxPaletteSize: 10,
		preferredFormat: "hex",
		localStorageKey: "soft.demo",
		move: function (color) {
			updateColor(color, this.id);
		},
		hide: function (color) {
			updateColor(color, this.id);
		},
		palette: pallete_array
	});
});

$(function() {
	$("#default_cat_hover").spectrum({
		allowEmpty:true,
		color : "'.(!empty($globals['default_cat_hover']) ? $globals['default_cat_hover'] : '#4096ee').'",
		showInput: true,
		className: "full-spectrum",
		showInitial: true,
		showPalette: true,
		showSelectionPalette: true,
		maxPaletteSize: 10,
		preferredFormat: "hex",
		localStorageKey: "soft.demo",
		move: function (color) {
			updateColor(color, this.id);
		},
		hide: function (color) {
			updateColor(color, this.id);
		},
		palette: pallete_array
	});
});

$(function() {
	$("#default_hf_text").spectrum({
		allowEmpty:true,
		color : "'.(!empty($globals['default_hf_text']) ? $globals['default_hf_text'] : '#F2F2F2').'",
		showInput: true,
		className: "full-spectrum",
		showInitial: true,
		showPalette: true,
		showSelectionPalette: true,
		maxPaletteSize: 10,
		preferredFormat: "hex",
		localStorageKey: "soft.demo",
		move: function (color) {
			updateColor(color, this.id);
		},
		hide: function (color) {
			updateColor(color, this.id);
		},
		palette: pallete_array
	});
});

$(function() {
	$("#default_scriptname_text").spectrum({
		allowEmpty:true,
		color : "'.(!empty($globals['default_scriptname_text']) ? $globals['default_scriptname_text'] : '#FFFFFF').'",
		showInput: true,
		className: "full-spectrum",
		showInitial: true,
		showPalette: true,
		showSelectionPalette: true,
		maxPaletteSize: 10,
		preferredFormat: "hex",
		localStorageKey: "soft.demo",
		move: function (color) {
			updateColor(color, this.id);
		},
		hide: function (color) {
			updateColor(color, this.id);
		},
		palette: pallete_array
	});
});
</script>';

softfooter();

}

?>