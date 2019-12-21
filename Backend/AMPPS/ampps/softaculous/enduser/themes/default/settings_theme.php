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

global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error;
global $installations, $langs, $saved, $deleted;

softheader($l['<title>']);

echo '
<link rel="stylesheet" type="text/css" href="'.$theme['url'].'/spectrum.css?'.$GLOBALS['globals']['version'].'" />
<form accept-charset="'.$globals['charset'].'" name="editsettings" method="post" action="" id="editsettings" class="form-horizontal">

<div class="bg"><br />
	<div class="row sai_main_head" style="width:100%;" align="center">
		<div class="col-sm-6 col-xs-6" style="padding:0px 10px 0 0; text-align:right;">
			<i class="fa sai-settings fa-2x" style="color:#00A0D2;"></i>
		</div>
		<div class="col-sm-6 col-xs-6" style="padding-top:5px; padding-left:0; text-align:left;">'.$l['settings'].'</div>
	</div><hr>';
	error_handle($error, '100%');
	
	if(!empty($saved)){
		echo '<div class="alert alert-success" style="padding:10px;font-size:15px;"><center><img src="'.$theme['images'].'message_success.gif">&nbsp;&nbsp;'.$l['settings_saved'].'</div></center>';
	}
	
	if(!empty($deleted)){
		echo '<div class="alert alert-warning" style="padding:10px;font-size:15px;"><center><a href="#close" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$l['backuploc_deleted'].'</center></div>';
	}
	
	echo'
	<div class="row">
		<div class="col-sm-5">
			<label  for="choose_lang" class="sai_head">'.$l['choose_lang'].'</label>
			<span class="sai_exp">'.$l['exp_lang'].'</span>
		</div>
		<div class="col-sm-7">
			<select name="language" id="choose_lang" class="form-control">';
				foreach($langs as $k => $v){
					echo '<option value="'.$v.'" '.(empty($_POST['language']) && (empty($user['language']) ? $globals['language'] : $user['language']) == $v ? 'selected="selected"' : (trim($_POST['language']) == $v ? 'selected="selected"' : '') ).'>'._ucfirst($v).'</option>';
				}
			echo '</select>
		</div>
	</div><br /><!---row end--->

	<div class="row">
		<div class="col-sm-5">
			<label for="timezone" class="sai_head">'.$l['timezone'].'</label>
		</div>
		<div class="col-sm-7">
			<select name="timezone" id="timezone" class="form-control">
				<option value="-12" '.(($user['timezone'] == -12) ? 'selected="selected"' : '').'>(GMT -12:00) Eniwetok, Kwajalein</option>
				<option value="-11" '.(($user['timezone'] == -11) ? 'selected="selected"' : '').'>(GMT -11:00) Midway Island, Samoa</option>
				<option value="-10" '.(($user['timezone'] == -10) ? 'selected="selected"' : '').'>(GMT -10:00) Hawaii</option>
				<option value="-9" '.(($user['timezone'] == -9) ? 'selected="selected"' : '').'>(GMT -9:00) Alaska</option>
				<option value="-8" '.(($user['timezone'] == -8) ? 'selected="selected"' : '').'>(GMT -8:00) Pacific Time (US &amp; Canada)</option>
				<option value="-7" '.(($user['timezone'] == -7) ? 'selected="selected"' : '').'>(GMT -7:00) Mountain Time (US &amp; Canada)</option>
				<option value="-6" '.(($user['timezone'] == -6) ? 'selected="selected"' : '').'>(GMT -6:00) Central Time (US &amp; Canada), Mexico City</option>
				<option value="-5" '.(($user['timezone'] == -5) ? 'selected="selected"' : '').'>(GMT -5:00) Eastern Time (US &amp; Canada), Bogota, Lima</option>
				<option value="-4" '.(($user['timezone'] == -4) ? 'selected="selected"' : '').'>(GMT -4:00) Atlantic Time (Canada), Caracas, La Paz</option>
				<option value="-3.5" '.(($user['timezone'] == -3.5) ? 'selected="selected"' : '').'>(GMT -3:30) Newfoundland</option>
				<option value="-3" '.(($user['timezone'] == -3) ? 'selected="selected"' : '').'>(GMT -3:00) Brazil, Buenos Aires, Georgetown</option>
				<option value="-2" '.(($user['timezone'] == -2) ? 'selected="selected"' : '').'>(GMT -2:00) Mid-Atlantic</option>
				<option value="-1" '.(($user['timezone'] == -1) ? 'selected="selected"' : '').'>(GMT -1:00 hour) Azores, Cape Verde Islands</option>
				<option value="+0" '.(($user['timezone'] == '+0') ? 'selected="selected"' : '').'>(GMT) Western Europe Time, London, Lisbon, Casablanca</option>
				<option value="1" '.(($user['timezone'] == 1) ? 'selected="selected"' : '').'>(GMT +1:00 hour) Brussels, Copenhagen, Madrid, Paris</option>
				<option value="2" '.(($user['timezone'] == 2) ? 'selected="selected"' : '').'>(GMT +2:00) Kaliningrad, South Africa</option>
				<option value="3" '.(($user['timezone'] == 3) ? 'selected="selected"' : '').'>(GMT +3:00) Baghdad, Riyadh, Moscow, St. Petersburg</option>
				<option value="3.5" '.(($user['timezone'] == 3.5) ? 'selected="selected"' : '').'>(GMT +3:30) Tehran</option>
				<option value="4" '.(($user['timezone'] == 4) ? 'selected="selected"' : '').'>(GMT +4:00) Abu Dhabi, Muscat, Baku, Tbilisi</option>
				<option value="4.5" '.(($user['timezone'] == 4.5) ? 'selected="selected"' : '').'>(GMT +4:30) Kabul</option>
				<option value="5" '.(($user['timezone'] == 5) ? 'selected="selected"' : '').'>(GMT +5:00) Ekaterinburg, Islamabad, Karachi, Tashkent</option>
				<option value="5.5" '.(($user['timezone'] == 5.5) ? 'selected="selected"' : '').'>(GMT +5:30) Bombay, Calcutta, Madras, New Delhi</option>
				<option value="6" '.(($user['timezone'] == 6) ? 'selected="selected"' : '').'>(GMT +6:00) Almaty, Dhaka, Colombo</option>
				<option value="6.5" '.(($user['timezone'] == 6.5) ? 'selected="selected"' : '').'>(GMT +6:30) Yangon, Myanmar</option>
				<option value="7" '.(($user['timezone'] == 7) ? 'selected="selected"' : '').'>(GMT +7:00) Bangkok, Hanoi, Jakarta</option>
				<option value="8" '.(($user['timezone'] == 8) ? 'selected="selected"' : '').'>(GMT +8:00) Beijing, Perth, Singapore, Hong Kong, Taiwan</option>
				<option value="9" '.(($user['timezone'] == 9) ? 'selected="selected"' : '').'>(GMT +9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk</option>
				<option value="9.5" '.(($user['timezone'] == 9.5) ? 'selected="selected"' : '').'>(GMT +9:30) Adelaide, Darwin</option>
				<option value="10" '.(($user['timezone'] == 10) ? 'selected="selected"' : '').'>(GMT +10:00) Eastern Australia, Guam, Vladivostok</option>
				<option value="11" '.(($user['timezone'] == 11) ? 'selected="selected"' : '').'>(GMT +11:00) Magadan, Solomon Islands, New Caledonia</option>
				<option value="12" '.(($user['timezone'] == 12) ? 'selected="selected"' : '').'>(GMT +12:00) Auckland, Wellington, Fiji, Kamchatka</option>
				<option value="0" '.(empty($user['timezone']) ? 'selected="selected"' : '').'>'.$l['default_timezone'].'</option>
			</select>
		</div>			
	</div><br />';

	echo '
	<div class="row">
		<div class="col-sm-5">
			<label class="sai_head">'.$l['arrange_domain'].'</label>
			<span class="sai_exp">'.$l['exp_arrange_domain'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="checkbox" name="arrange_domain" id="arrange_domain" '.POSTchecked('arrange_domain', $user['arrange_domain']).' />
		</div>
	</div><br />';

	if($theme['this_theme'] == 'modern' && empty($globals['off_customize_theme'])){
		echo'
		<div class="row">
			<div class="col-sm-5">
				<label class="sai_head">'.$l['use_custom_color'].'</label>
				<span class="sai_exp">'.$l['exp_use_custom_color'].'</span>
			</div>
			<div class="col-sm-7">
				<input type="checkbox" name="user_defined_color" id="user_defined_color" '.POSTchecked('user_defined_color', $user['user_defined_color']).' onchange="change_div(this.id);" />
			</div>
		</div><br />
	
		<div id="show_color_option" '.(!empty($user['user_defined_color']) ? '' : 'style="display:none;"').'>
			<div class="row">
				<div class="col-sm-5">
					<label class="sai_head">'.$l['left_panel_bg'].'</label>
					<span class="sai_exp">'.$l['left_panel_bg_exp'].'</span>
				</div>
				<div class="col-sm-7">
					<input type="color" name="color" id="left_panel_bg" class="changecolor"/>&nbsp;&nbsp;
					<input type="hidden" name="left_panel_bg" value="'.aPOSTval('left_panel_bg', $user['color_theme']['left_panel_bg']).'" id="hidden_left_panel_bg">
					<input type="color" name="color" id="left_panel_cathead_hover" class="changecolor" />
					<input type="hidden" name="left_panel_cathead_hover" value="'.aPOSTval('left_panel_cathead_hover', $user['color_theme']['left_panel_cathead_hover']).'" id="hidden_left_panel_cathead_hover">
				</div>
			</div><br />
			
			<div class="row">
				<div class="col-sm-5">
					<label class="sai_head">'.$l['text_color'].'</label>
					<span class="sai_exp">'.$l['text_color_exp'].'</span>
				</div>
				<div class="col-sm-7">
					<input type="color" name="color" id="left_panel_cathead" class="changecolor"/>&nbsp;&nbsp;
					<input type="hidden" name="left_panel_cathead" value="'.aPOSTval('left_panel_cathead', $user['color_theme']['left_panel_cathead']).'" id="hidden_left_panel_cathead">
					<input type="color" name="color" id="left_panel_scriptname" class="changecolor"/>
					<input type="hidden" name="left_panel_scriptname" value="'.aPOSTval('left_panel_scriptname', $user['color_theme']['left_panel_scriptname']).'" id="hidden_left_panel_scriptname">
				</div>
			</div><br />
					
		</div></br>';
	}
	
	if(empty($globals['disable_manage_sets'])){
	echo '<div class="row">
			<div class="col-sm-5">
				<label class="sai_head">'.$l['manage_sets'].'</label>
				<span class="sai_exp">'.$l['exp_manage_sets'].'</span>
			</div>
			<div class="col-sm-7">
				<a class="btn btn-default" href="'.$globals['ind'].'act=manage_sets" style="text-decoration:none;">'.$l['manage_sets'].'</a>
			</div><br /><br />
		</div><br /><br />';
	}

	if(empty($globals['off_rbackup']) && empty($globals['disable_backup_restore'])){
	echo'
	<div class="row">
		<div class="col-sm-5">
			<label class="sai_head">'.$l['list_backup_locs'].'</label>
		</div>
		<div class="col-sm-7">
			<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
				function conf_del(){
					return confirm("'.$l['conf_del'].'");
				};
			// ]]></script>
			<table border="0" cellpadding="5" cellspacing="0" width="100%" class="table table-hover borderless">
				<thead style="background:#EFEFEF;" class="sai_head2">
					<th>'.$l['default'].'</th>
					<th style="min-width:20%;">'.$l['backuploc_name'].'</th>
					<th>'.$l['backuploc'].'</th>
					<th>'.$l['backuploc_edit'].'</th>
					<th>'.$l['backuploc_del'].'</th>
				</thead>';
				
				$local_backup_dir = $user['backup_dir'];
				$local_backup_dir = apply_filters('show_local_backup_dir', $local_backup_dir);
				
				echo '
				<tr>
					<td><input type="radio" name="default_backup_location" value="0" '.(!empty($_POST) ? (empty($_POST['default_backup_location']) ? 'checked="checked"' : '') : (empty($user['default_backup_location']) ? 'checked="checked"' : '')).' /></td>
					<td>'.$l['local_folder'].'</td>
					<td>'.$local_backup_dir.'</td>
					<td align="center">-</td>
					<td align="center">-</td>
				</tr>';
				
				if(!empty($user['remote_backup_locs'])){
					foreach($user['remote_backup_locs'] as $k => $v) {
						echo '<tr>
							<td><input type="radio" name="default_backup_location" value="'.$k.'" '.POSTradio('default_backup_location', $k, $user['default_backup_location']).' /></td>
							<td>'.$v['name'].'</td>
							<td>'.$v['backup_loc'].'</td>
							<td align="center"><a href="'.$globals['ind'].'act=editbackuploc&loc_id='.$k.'"><img title="Edit" src="'.$theme['images'].'editdetail.gif" /></a></td>
							<td align="center"><a href="'.$globals['ind'].'act=settings&del_loc_id='.$k.'" onclick="return conf_del();"><img title="Delete" src="'.$theme['images'].'remove.gif" /></a></td>
						</tr>';
					}
				}
				
			echo '</table><br/>
			<div class="col-sm-12">
				<a class="btn btn-default" href="'.$globals['ind'].'act=addbackuploc" style="text-decoration:none;">'.$l['add_backup_loc'].'</a>
			</div><br /><br />
		</div>
	</div><br /><br />';
	}
	
	echo '
	<div class="col-sm-offset-5 col-sm-7">
		<input type="submit" class="flat-butt" name="editsettings" value="'.$l['edit_settings'].'" /><br /><img id="waiting" src="'.$theme['images'].'progress.gif" style="display:none">
	</div><br /><br /><br />
</div><br /><!--end of bg class-->
'.csrf_display().'
</form>';

if($theme['this_theme'] == 'modern'){
	echo '
	<script src="'.$theme['url'].'/js/spectrum.js" type="text/javascript"></script>
	<script type="text/javascript">
	
	function change_div(id){
	
		//alert($_(id).checked);
		
		if($_(id).checked == true){
			$("#show_color_option").show();
		}else{
			$("#show_color_option").hide();
		}
	}
	
	function reset_theme(){
		$("#user_defined_color").val("0");
		$("#editsettings").submit();
	}
	
	function updateColor(color, id) {
		
		var hexColor = "transparent";
		if(color) {
			hexColor = color.toHexString();
		}
		if(hexColor == "transparent") return;
		
		// Set the hidden value so that we can save the settings of user
		$("#user_defined_color").val("1");
		
		// For changing text colors of category heading
		if(id == "left_panel_cathead"){
			$(".soft_cathead a").css("color", hexColor);
			$(".soft_nav a").css("color", hexColor);
			$(".fa").css("color", hexColor);
			
			// set the hidden value so that it can be saved
			$("#hidden_left_panel_cathead").val(hexColor);
		}
		
		// For changing text colors of category heading hover color
		if(id == "left_panel_cathead_hover"){
			try{
				$(".soft_cathead:hover, .soft_cathead_slide:hover").css("background-color", hexColor);
				//$(".soft_cathead_slide:hover").css("background-color", hexColor);
			
				// set the hidden value so that it can be saved
				$("#hidden_left_panel_cathead_hover").val(hexColor);
			}catch(e){
				// do nothing
			}
		}
		
		// For changing text colors of script names
		if(id == "left_panel_scriptname"){
			$(".softlinks li a").css("color", hexColor);
			
			// set the hidden value so that it can be saved
			$("#hidden_left_panel_scriptname").val(hexColor);
		}
		
		// For changing background color
		if(id == "left_panel_bg"){
			$(".left_panel").css("background-image", "none");
			$(".left_panel").css("background-color", hexColor);
			$(".soft_nav").css("background", hexColor);
			
			// set the hidden value so that it can be saved
			$("#hidden_left_panel_bg").val(hexColor);
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
	
	';
	
	foreach($user['color_theme'] as $kc => $vc){
		
	echo '$(function() {
			$("#'.$kc.'").spectrum({
				allowEmpty:true,
				color : "'.$vc.'",
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
		});';
	}
	echo '
	</script>';
}// END OF "if($theme['this_theme'] == 'modern'){"

softfooter();

}

?>