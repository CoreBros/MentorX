<?php

//////////////////////////////////////////////////////////////
//===========================================================
// services_theme.php
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

function services_theme(){

	global $theme, $globals, $user, $l, $error, $updated, $info, $services, $done, $softpanel, $proxy;

	// Restart the Service
	if(optGET('ajax')){	
			
		if(!empty($error)){						
			echo '0'.$error;
			return false;
		}
		if(!empty($done)){
			echo '1'.$l['done'];	
			return true;			
		}
	}

	// Start/Stop Service
	if(optGET('ajaxser')){
			
		if(!empty($error)){
			echo '0'.$error;
			return false;
		}
		
		if(!empty($done)){
			if(optGET('action') == 'stop'){
				echo '1'.$l['done_stop'];
			}else{
				echo '1'.$l['done_start'];
			}
			return true;
		}
	}

	softheader($l['<title>']);
	echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
		// For msgbox MboxObject(fYes, fNo)
		var message_box = new MboxObject();		
		
		$(document).ready(function(){
			
			// Server status display
			$("#status, #info").click(function() {
				$(".container_class").css("display", "none"); // Close the other container
				$("#show_"+this.id).show("slow");
			});
			
			// Close the <DIV>
			$(".close").click(function () {
				$(this).parent().hide("slow");
			});
			
			// Restart Service
			$(".restart").click(function() {
				var service_name = $(this).attr("id");
				$("#did"+service_name).css("display", "");
				$.ajax({
					type: "POST",
					url: window.location+"&ajax=1&service_name="+service_name+"&action=restart",
					// checking for error
					success: function(data){
						$("#did"+service_name).css("display", "none");
						var result = data.substring(0,1);
						var msg = data.substring(1);
						if(result == "1"){
							message_box.show_message("Info ", msg, 2);
							if($("#status"+service_name).attr("src") == "'.$theme['images'].'stop.gif"){
								$("#status"+service_name).attr("src", "'.$theme['images'].'running.gif");
							}
							$("."+service_name+"_startstop").attr({
								src : "'.$theme['a_images'].'stop.gif",
								title : "Stop",
								id : service_name+"_running"
							});
						}else{
							message_box.show_message("Error ", msg, 1);
						}
					},
					error: function(request, error) {
						$("#did"+service_name).css("display", "none");
						message_box.show_message("Error ", "'.$l['connect_error'].'", 1);
					}
				});
			});
			
			// Start OR Stop Service
			$(".startstop").click(function(){
				
				var str = $(this).attr("id");
				var chunks = str.split("_");
				var service_name = chunks[0];
				var action = chunks[1];
				if(action == "running"){
					action = "stop";
				}else{
					action = "start";
				}
				
				$("#did"+service_name).css("display", "");
				
				$.ajax({
					type: "POST",
					url: window.location+"&ajaxser=1&service_name="+service_name+"&action="+action,
					// checking for error
					success: function(data){
						$("#did"+service_name).css("display", "none");
						var result = data.substring(0, 1);
						var msg = data.substring(1);
						if(result == "1"){
							message_box.show_message("Info ", msg, 2);
							if($("#status"+service_name).attr("src") == "'.$theme['images'].'running.gif"){
								$("#status"+service_name).attr("src", "'.$theme['images'].'stop.gif");
							}else{
								$("#status"+service_name).attr("src", "'.$theme['images'].'running.gif");
							}
							
							if($("."+service_name+"_startstop").attr("src") == "'.$theme['a_images'].'stop.gif"){
								$("."+service_name+"_startstop").attr({
									src : "'.$theme['a_images'].'start.gif",
									title : "Start",
									id : service_name+"_stop"
								});
							}else{
								$("."+service_name+"_startstop").attr({
									src : "'.$theme['a_images'].'stop.gif",
									title : "Stop",
									id : service_name+"_running"
								});
							}
						}else{
							message_box.show_message("Error ", msg, 1);
						}
					},
					error: function(request,error) {
						$("#did"+service_name).css("display", "none");
						message_box.show_message("Error ", "'.$l['connect_error'].'", 1);
					}
				});
			});
		});
	// ]]></script>

	<style type="text/css">
		.close {
			float:right;
			position:relative;
			z-index:99999;
			margin:3px 6px 0;
		}
	</style>
	<div class="bg"><br/>
		<div class="sai_main_head"><center><img src="'.$theme['a_images'].'services.png"  alt="" />&nbsp;'.$l['lbl_head'].'</center></div><hr>';

		if($services['valid'] == true){
			
			echo '
			<table border="0" cellpadding="8" cellspacing="1" width="700px" align="center" class="table table-hover table-hover-moz td_font">
				<thead style="background:#EFEFEF;" class="sai_head2">
					<tr>
						<th width="50%" align="center">'.$l['service_name'].'</th>
						<th width="15%" align="center">'.$l['status'].'</th>
						<th width="15%" align="center">'.$l['restart'].'</th>
						<th width="20%" align="center">'.$l['start_stop'].'</th>
					</tr>
				</thead>
				<tbody>';
				
					foreach($services['services'] as $key => $service){
						
						echo'<tr>
							<td class="sai_head">'.$service['name'].'</td>
							<td align="left" style="margin:0 auto;">
								<img id="status'.$key.'" src="'.$theme['images'].$service['status'].'.gif" style="margin-left:12px;" title="'.($service['status'] == 'running' ? $l['running'] : $l['stopped']).'"/>
							</td>
							<td align="left" style="margin:0 auto;">
								<img class="restart" id="'.$key.'" src="'.$theme['images'].'restart.gif'.'" style="cursor:pointer;margin-left:20px;" title="'.$l['restart'].'" />
							</td>
							<td align="left" style="margin:0 auto;">
								<img class="startstop '.$key.'_startstop" id="'.$key.'_'.$service['status'].'" '.($service['status'] == 'running' ? 'src="'.$theme['a_images'].'stop.gif'.'" title="'.$l['stop'].'"' : 'src="'.$theme['a_images'].'start.gif'.'" title="'.$l['start'].'"').'  style="cursor:pointer;margin-left:30px;" />
								<img class="restart" id="did'.$key.'" src="'.$theme['images'].'progress.gif'.'" style="display:none;margin-left:30px;" />
							</td>
						</tr>';
					}
				echo '</tbody>
			</table>
			<br/>';					
			// If Apache service is installed (not default) and Proxy not enabled 
			//	$services['services'] lists only the default one though
			if(($services['services']['3']['status'] == 'running' || $services['services']['125']['status'] == 'running') && (empty($proxy))){
				
				echo '<div class="row">
					<p align="center">
						<a href="javascript:void(0);" id="status" style="text-decoration: underline" >'.$l['apache_status'].'</a>
					</p>
				</div>
				<div class="row">
					<p align="center">
						<a href="javascript:void(0);" id="info" style="text-decoration: underline" >'.$l['apache_info'].'</a>
					</p>
				</div>';
				$show = 1;
				
			}
		echo '<br />';
		}
		
		if(!empty($show)){
			echo '<div id="show_status" style="display:none; padding:15px;" width="100%" align="left" class="sai_divroundshad container_class" >
				<img src="'.$theme['images'].'remove.gif" style="cursor:pointer" alt="close" height="20" width="20" title="Close" class="close" />';
				echo get_web_file("http://127.0.0.1/Webuzo-server-status");
			echo '</div>
			<div id="show_info" style="display:none; padding:15px;" width="100%" align="left" class="sai_divroundshad container_class" >
				<img src="'.$theme['images'].'remove.gif" style="cursor:pointer" alt="close" height="20" width="20" title="Close" class="close" />';
				echo get_web_file("http://127.0.0.1/webuzo-server-info");
			echo '</div>';
		}
	echo '</div>';
	softfooter();
}

?>