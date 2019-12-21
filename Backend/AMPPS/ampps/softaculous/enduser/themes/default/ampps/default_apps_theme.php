<?php

//////////////////////////////////////////////////////////////
//===========================================================
// service_manager_theme.php
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

function default_apps_theme(){

	global $a_apps, $user, $globals, $l, $theme, $softpanel, $error, $saved, $iapps, $apps, $ampps_apps_installed, $server_list, $php_list, $database_list;
	
	// For create
	if(optGET('ajaxservice'))
	{		
		if(!empty($error)){				
			echo '0'.current($error);
			return false;
		}
		if(!empty($saved)){		
			echo '1'.$l['settings_saved'];
			return true;			
		}
	}
	
	
	softheader($l['<title>']);
	// Array of webservers | Apache | NGINX | Lighttpd | Apache2
	
	foreach($softpanel->wgrp as $webkey => $webvalue){
		if(!empty($iapps[$webkey.'_1'])) $tmp_server[$webkey] = $softpanel->appinfo($webkey);
	}
	echo '<script language="javascript" type="text/javascript">
		$(document).ready(function(){	
			// For creating CSR
			$("#submitservice").click(function(){
				$("#createservice").css("display", "");			
				$.ajax({
					type: "POST",
					url: window.location+"&ajaxservice=1",
					data: $("#editform").serialize(),
					
					// Checking for error
					success: function(data){
						$("#createservice").css("display", "none");
						var result = data.substring(0,1);
						if(result == "1"){
							var msg = data.substring(1);	
							message_box.show_message("Done",msg,2);	
						}
						if(result == "0"){	
							$("#createservice").css("display", "none");
							var msg = data.substring(1);
							message_box.show_message("Error",msg,1);
						}
					},
					error: function() {
						message_box.show_message("Error",\''.$l['connect_error'].'\',1);											
					}															
				});			
				return false;
			});	
		});
	</script>
	
	<div class="bg"><br />
		<div class="sai_main_head"><center><img src="'.$theme['a_images'].'service_manager.png" />&nbsp;'.$l['service_manager'].'</center></div><br/>';
		
		echo '
		<form accept-charset="'.$globals['charset'].'" method="post" action="" class="form-horizontal" name="service_manager_form" id="editform">
		<center>
		<div class="bg" style="width:600px;">
			<div class="row">
				<div class="sai_sub_head">
					<img src="'.$theme['a_images'].'domains.png" />&nbsp;'.$l['webserver'].'
				</div>
			</div><br/>';
			
			foreach($server_list as $key => $value){
				echo '<div class="row">
					<div class="col-sm-5">
						<label class="sai_head">'.$value['fullname'].'</label>
					</div>
					<div class="col-lg-7">
						<input type="radio" name="webserver" value='.$value['name'].' '.POSTradio('webserver', $value['name'], $ampps_apps_installed[$key]['default']).'/>
					
					</div>
				</div><br/>
				';
			}
			echo '</div><br/><!--end of first bg class-->
			<div class="bg" style="width:600px;">
				<div class="row">
					<div class="sai_sub_head">
						<img src="'.$theme['a_images'].'php_conf.png" />&nbsp;'.$l['default_php'].'
					</div><br/>
				</div>';
				
				foreach($php_list as $key => $value){
					echo '<div class="row">
						<div class="col-sm-5">
							<label class="sai_head" for='.$value['name'].'>'.$value['fullname'].'</label>
						</div>
						<div class="col-lg-7">
							<input type="radio" name="default_php" id='.$value['name'].'  value='.$value['name'].' '.POSTradio('default_php', $value['name'], $ampps_apps_installed[$key]['default']).'/>
						</div>
					</div><br/>';
				}					
				echo '<br/>
				<div class="row">
					<div class="col-sm-12">
						<input type="hidden" name="service_manager" value="1" />
						<input type="submit" style="cursor:pointer" value="'.$l['edit_settings'].'" class="flat-butt" name="service_manager_but" id="submitservice" /> &nbsp;<img id="createservice" src="'.$theme['images'].'progress.gif" style="display:none">
					</div><br/>
				</div>
		</div><!--end of seco	nd bg class-->
		</center>
	</form>';
			
	echo '</div><!--end of main bg class-->
	<script language="javascript" type="text/javascript"><!-- // --><![CDATA[	

	// For msgbox MboxObject(fYes, fNo)
	var message_box = new MboxObject();
	// ]]></script>';
	softfooter();
}

?>