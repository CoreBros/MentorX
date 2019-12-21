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

function topscripts_theme(){

global $theme, $globals, $user, $l, $langs, $skins, $error, $saved, $categories, $iscripts, $scripts, $top, $top_selected, $reset_topscripts, $softpanel;

softheader($l['<title>']);

echo '<div class="container-fluid width80">
		<div class="sai_heading" align="center">'.$l['show_top_scripts'].'</div><br />
		<div class="sai_hr"></div>
	</div><br />';

if(!empty($saved)){
	echo '<div class="container-fluid width80">
			<div class="alert alert-success text-center"><img src="'.$theme['images'].'success.gif" /> '.$l['settings_saved'].'</div>
		</div>';
}

if(!empty($reset_topscripts)){
	echo '<div class="container-fluid width80">
			<div class="alert alert-success text-center"><img src="'.$theme['images'].'success.gif" /> '.$l['reset_topscripts_done'].'</div>
		</div>';
}

echo '<script language="javascript">
	function reset_topscript(){
		var cnf = confirm("'.$l['resetscripts_warning'].'");
		if(cnf){
			window.location = "'.$globals['index'].'act=topscripts&reset_topscripts=1";
		}
		return false;
	};
</script>
<script language="javascript" src="'.$theme['url'].'/js/script_select.js" type="text/javascript"> </script>
<script language="javascript" src="'.$theme['url'].'/js/jquery.js" type="text/javascript"> </script>';

echo '<form accept-charset="'.$globals['charset'].'" name="reordercat" method="post" action="" clss="form-horizontal">
<div class="container-fluid width80">';

error_handle($error);

echo '<div class="sai_main_head text-center">
		<div class="row">
			<span>'.$l['top_scripts_set'].'</span>
		</div>
	</div>
	<div class="sai_form">
		<div class="row"><br />
			<div class="col-sm-5">
				<label class="sai_head">'.$l['enable_apps'].'</label><br />
				<span class="sai_exp2">'.$l['enable_apps_exp'].'</span>
			</div>
			<div class="col-sm-7">
				<input type="checkbox" name="enable_topscripts" '.(!empty($globals['show_top_scripts']) ? "checked=checked" : "").'>
			</div>
		</div><br />
		
		<div class="row">
			<div class="col-sm-5">
				<label for="append_apps" class="sai_head">'.$l['append_apps'].'</label><br />
				<span class="sai_exp2">'.$l['append_apps_exp'].'</span>
			</div>
			<div class="col-sm-7">
				<input type="checkbox" name="append_apps" id="append_apps" '.POSTchecked('append_apps', $globals['append_apps']).'>
			</div>
		</div><br />';
		
if(method_exists($softpanel,'save_topscripts_index')){
	echo '<div class="row">
		<div class="col-sm-5">
			<label for="show_top_scripts" class="sai_head">'.$l['show_top_scripts'].'</label><br />
			<span class="sai_exp2">'.$l['show_top_scripts_exp'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="text" class="form-control" name="show_top_scripts" id="show_top_scripts" size="30" value="'.aPOSTval('show_top_scripts', $globals['show_top_scripts']).'" />
		</div>
	</div><br />
	
	<div class="row">
		<div class="col-sm-5">
			<label for="disable_cats" class="sai_head">'.$l['disable_cats'].'</label><br />
			<span class="sai_exp2">'.$l['disable_cats_exp'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="checkbox" name="disable_cats" id="disable_cats" '.POSTchecked('disable_cats', $globals['disable_cats']).'>
		</div>
	</div><br />
	
	<div class="row">
		<div class="col-sm-5">
			<label for="enable_myins" class="sai_head">'.$l['enable_myins'].'</label><br />
			<span class="sai_exp2">'.$l['enable_myins_exp'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="checkbox" name="enable_myins" id="enable_myins" '.POSTchecked('enable_myins', $globals['enable_myins']).'>
		</div>
	</div><br />';

	if($globals['softpanel'] == 'cpanel'){
		echo '<div class="row">
			<div class="col-sm-5">
				<label for="show_in_notice" class="sai_head">'.$l['show_in_notice'].'</label><br />
				<span class="sai_exp2">'.$l['show_in_notice_exp'].'</span>
			</div>
			<div class="col-sm-7">
				<input type="checkbox" name="show_in_notice" id="show_in_notice" '.POSTchecked('show_in_notice', $globals['show_in_notice']).'>
			</div>
		</div><br />
		
		<div class="row">
			<div class="col-sm-5">
				<label for="group_order" class="sai_head">'.$l['group_order'].'</label><br />
				<span class="sai_exp2">'.$l['group_order_exp'].'</span>
			</div>
			<div class="col-sm-7">
				<input type="text" class="form-control" name="group_order" id="group_order" size="30" value="'.optPOST('group_order', $globals['group_order']).'">
			</div>
		</div><br />';
	}
}

echo '</div><br />
	
	<div class="sai_main_head text-center">
		<div class="row">
			<span>
				'.$l['select_from_below'].'
			</span>
		</div>
	</div>
	<div class="sai_form">
		<div class="row">
			<div class="col-sm-5">
				<label for="softpath" class="sai_head">'.$l['select_top_scripts'].' :</label><br />
				<link href="'.$globals['mirror_images'].'sprites/32.css" rel="stylesheet" type="text/css" />      
				<div id="all_users">';
				
				foreach($top as $k => $v){
					
					if($k == $top_selected[$k]){
						continue;	 
					}
					
					echo '<div id="user'.$k.'" sid="'.$k.'" class="innertxt" style="width:100%;">
						<div class="row" style="margin-left:5px;">
							<div class="col-sm-12 sp32_'.$iscripts[$k]['softname'].'"></div>
							<div style="margin-top:6px;"><strong>&nbsp;'.$iscripts[$k]['name'].'</strong></div>
						</div>
						<input type="hidden" id="select'.$k.'" class="selectit" />
					</div>';
				}
				
				echo '</div>		
			</div>
			
			<div class="col-sm-2">
				<div style=" padding-top: 130px; margin-left:40%; float:left;">
						<a href="javascript:void(0);" id="move_right"><img src="'.$theme['images'].'right_arrow.png"></a><br /><br />
					<a href="javascript:void(0);" id="move_left"><img src="'.$theme['images'].'left_arrow.png"></a>
					<div class="float_break"></div>   
				</div>
			</div>
			
			<div class="col-sm-5">
				<div class="pull-right">
				<label for="softpath" class="sai_head" style="margin-left:10px;">'.$l['selected_top_scripts'].' :</label><br />
				<div id="selected_users">';
				if(count($top_selected) > 0){
					foreach($top_selected as $k => $v){
						
						if(empty($iscripts[$k])){
							continue;	 	
						}
						
						echo '<div id="user'.$k.'" sid="'.$k.'" class="innertxt2" style="width:100%;">
							<div class="row" style="margin-left:5px;">
								<div class="col-sm-12 sp32_'.$iscripts[$k]['softname'].'"></div>
								<div style="margin-top:6px;"><strong>&nbsp;'.$iscripts[$k]['name'].'</strong></div>
							</div>
							<input type="hidden" id="select'.$k.'" class="selectit" />
						</div>';
					}
				}
				
			echo '</div>			
			</div>
			</div>
			
		</div><br />
		<div class="row" style="margin-left:0px;">
			<span class="bboxtxt" style="color:#767676;"><br /><b>'.$l['script_note'].'</b> : <br />'.$l['script_note_exp'].'</span>
		</div><br />		
	</div>
</div><br />';

echo '<input type="hidden" name="hidden_selected" id="hidden_selected" />
<p align="center">
	'.csrf_display().'
	<input type="submit" name="savescript" value="'.$l['savescript'].'" class="flat-butt" />&nbsp;
	<input type="button" name="reset_topscripts" value="'.$l['reset_topscripts'].'" class="flat-butt" onclick="reset_topscript();" />
</p>
'.(empty($globals['lictype']) ? '<div class="sai_notebox width80"><font class="bboxtxt">'.$l['soft_free_note'].'</font></div>' : '').'<br />
</form>';

echo '<script language="javascript">

	$(document).ready(function () {
		// Uncheck each checkbox on body load
		//$("#all_users .selectit").each(function() {this.checked = false;});
		//$("#selected_users .selectit").each(function() {this.checked = false;});
		
		//onload we have to save the PREVIOUS slected scripts
		var scripts = "";
		$("#selected_users .innertxt2").each(function() {
			var s_id = $(this).attr("sid");
			if (scripts == "") 
				scripts += s_id;
			else
				scripts += "," + s_id;
		});
		document.getElementById("hidden_selected").value = scripts;
		
    	$("#all_users .innertxt").click(function() {
			
			var color = $(this).css("background-color");
			if(color != "transparent" && (!color.match(/rgb(a?)\(0/))){
				$(this).css("background-color","transparent");
			}else{
				$(this).css("background-color","lightblue");
			}
			var userid = $(this).attr("id");
			$("#" + userid).toggleClass("innertxt_bg");
		});
		
		$("#selected_users .innertxt2").click(function() {
			
			var color = $(this).css("background-color");
			if(color != "transparent" && (!color.match(/rgb(a?)\(0/))){
				$(this).css("background-color","transparent");
			}else{
				$(this).css("background-color","lightblue");
			}
			var userid = $(this).attr("id");
			$("#" + userid).toggleClass("innertxt_bg");
		});
		
		$("#move_right").click(function() {
			var users = $("#selected_users .innertxt2").length;
			var selected_users = $("#all_users .innertxt_bg").length;
			
			/*if (users + selected_users > 14) {
				alert("You can only chose maximum 14 Scripts.");
				return;
			}*/
			
			$("#all_users .innertxt_bg").each(function() {
				var user_clone = $(this).clone(true);
				$(user_clone).removeClass("innertxt");
				$(user_clone).removeClass("innertxt_bg");
				$(user_clone).addClass("innertxt2");
				$(user_clone).css("background-color","transparent");
				
				$("#selected_users").append(user_clone);
				$(this).remove();
			});
			
			var scripts = "";
			$("#selected_users .innertxt2").each(function() {
				var s_id = $(this).attr("sid");
				if (scripts == "") 
					scripts += s_id;
				else
					scripts += "," + s_id;
			});
			document.getElementById("hidden_selected").value = scripts;
		});
		
		$("#move_left").click(function() {
			$("#selected_users .innertxt_bg").each(function() {
				
				
				var user_clone = $(this).clone(true);
				$(user_clone).removeClass("innertxt2");
				$(user_clone).removeClass("innertxt_bg");
				$(user_clone).addClass("innertxt");
				$(user_clone).css("background-color","transparent");
				
				$("#all_users").append(user_clone);
				$(this).remove();
			});
			
			var scripts = "";
			$("#selected_users .innertxt2").each(function() {
				var s_id = $(this).attr("sid");
				if (scripts == "") 
					scripts += s_id;
				else
					scripts += "," + s_id;
			});
			document.getElementById("hidden_selected").value = scripts;
		});
		
		$("#view").click(function() {
			var scripts = "";
			$("#selected_users .innertxt2").each(function() {
				var s_id = $(this).attr("sid");
				if (scripts == "") 
					scripts += s_id;
				else
					scripts += "," + s_id;
			});
			document.getElementById("hidden_selected").value = scripts;
			//alert(scripts);
			
		});
	});		

</script>';

softfooter();

}

?>