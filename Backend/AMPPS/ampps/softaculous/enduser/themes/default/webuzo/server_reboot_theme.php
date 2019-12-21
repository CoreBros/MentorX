<?php

//////////////////////////////////////////////////////////////
//===========================================================
// server_reboot_theme.php
//===========================================================
// SOFTACULOUS 
// Version : 2.7.2
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Nikhil Muskur
// Date:       10th Sept 2018
// Time:       12:30 hrs
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


function server_reboot_theme(){

	global $user, $globals, $l, $theme, $softpanel, $error, $done;

	softheader($l['<title>']);

	echo '
	<style>
		.img_server_reboot {
			cursor:pointer;
			width:48px;
			height:48px;
		}
		.img_server_reboot_txt {
			padding:5px;
			font-size:15px;
		}
	</style>
	<div class="bg">
		<div class="sai_main_head text-center">
			<img width="48" height="48" src="'.$theme['a_images'].'server.png" />&nbsp;'.$l['title'].'
		</div>
		<hr>
		<div class="alert alert-success text-center msg_banner" style="display:none">
			<a href="#close" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			'.$l['reboot_message'].'
		</div>
		<div class="row">
			<div class="col-sm-3 text-center" style="padding:20px">
				<img id="reboot_grace" class="img_server_reboot" src="'.$theme['a_images'].'reboot_grace.png">
				<div class="img_server_reboot_txt">'.$l['reboot_grace'].'</div>
			</div>
			<div class="col-sm-3 text-center" style="padding:20px">
				<img id="reboot_force" class="img_server_reboot" src="'.$theme['a_images'].'reboot_force.png">
				<div class="img_server_reboot_txt">'.$l['reboot_force'].'</div>
			</div>
		</div>';

	echo '
	</div>
	<script language="javascript" type="text/javascript">
		var message_box = new MboxObject(reboot_server,"");

		function reboot_server(reboot_type){ 
			$(".msg_banner").show();
			reboot_type = reboot_type.split(":")[1];
			var w_l = window.location.toString();
			if(reboot_type == "force" || reboot_type == "grace"){
				$.ajax({
					type: "POST",
					url : w_l+="&reboot=1",
					data: {"type" : reboot_type},
					success: function(data){ },
					error: function (error){ $(".msg_banner").hide(); }
				});
			}else{
				return
			}
		}

		$(document).ready(function(){
			
			$("#reboot_force").click(function(){ 
				message_box.delete_message(
				"Warning",
				"'.$l['warning_reboot_force'].'", "reboot_type:force");
			});

			$("#reboot_grace").click(function(){ 
				message_box.delete_message(
				"Warning",
				"'.$l['warning_reboot_grace'].'", "reboot_type:grace");
			});
		});
	</script>';
	softfooter();
}

?>