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

function service_manager_theme(){

	global $user, $globals, $l, $theme, $softpanel, $error, $saved, $iapps, $apps;
	
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

	$proxy = $softpanel->getConf('WU_PROXY_PORT');
	//check if varnish is enabled
	$varnish_port = $softpanel->getConf('VARNISH_PORT');
	
	$disable_sysapps = $softpanel->is_sysapps_disable();
	
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

		if(empty($disable_sysapps)){
		
		echo '
		<form accept-charset="'.$globals['charset'].'" method="post" action="" class="form-horizontal" name="service_manager" id="editform">
		<center>
		<div class="bg" style="width:600px;">
			<div class="row">
				<div class="sai_sub_head">
					<img src="'.$theme['a_images'].'webserver.gif" />&nbsp;'.$l['webserver'].'
				</div>
			</div><br/>';
			
			if(count($tmp_server) > 0 && ((empty($proxy)) && empty($varnish_port) )){
				foreach($tmp_server as $key => $value){
					echo '<div class="row">
						<div class="col-sm-5">
							<label class="sai_head">'.$apps[$key]['name'].'</label>
						</div>
						<div class="col-lg-7">
							<input type="radio" name="webserver" value='.$value['set_default'].' '.POSTradio('webserver', $value['set_default'], $softpanel->getConf('WU_DEFAULT_SERVER')).' />
						</div>
					</div><br/>
					';
				}
			}else{
				$no_web_server = 1;
				echo'
				<div class="alert alert-warning text-center" style = "font-size: 15px">
					<i class="fa sai-info fa-1x" style="color:#8a6d3b;vertical-align: middle;"></i>&nbsp;&nbsp;'.(!(empty($proxy) || empty($varnish_port) ) ? $l['no_web_server'] : (empty($proxy) ? $l['err_chng_wserver_varnish'] :  $l['proxy_on'])).'
				</div>';
			}
			echo '</div><br/><!--end of first bg class-->
			</center>
			<form accept-charset="'.$globals['charset'].'" method="post" action="" class="form-horizontal">
			<center>
			<div class="bg" style="width:600px;">
				<div class="row">
					<div class="sai_sub_head">
						<img src="'.$theme['a_images'].'php_conf.png" />&nbsp;'.$l['default_php'].'
					</div><br/>
				</div>';
				
				foreach($softpanel->phpgrp as $phpkey => $phpvalue){
					if(!empty($iapps[$phpkey.'_1'])) continue;
					unset($softpanel->phpgrp[$phpkey]);
				}
				
				if(count($softpanel->phpgrp) > 0 ){
					foreach($softpanel->phpgrp as $key => $value){
						echo '<div class="row">
							<div class="col-sm-5">
								<label class="sai_head">'.$apps[$key]['name'].'</label>
							</div>
							<div class="col-lg-7">
								<input type="radio" name="default_php" value='.$apps[$key]['softname'].' '.POSTradio('default_php', $apps[$key]['softname'], $softpanel->getConf('WU_DEFAULT_PHP')).' />
							</div>
						</div><br/>';
					}
				}else{
					$no_php = 1;
					echo '<div class="row">
							<div class="alert alert-warning">
								<center>'.$l['no_php'].'</center>
							</div><br/>
						</div>';
				}

				if(empty($no_web_server) || empty($no_php)){
					
					echo '
					<div class="row">
						<div class="col-sm-12">
							<input type="hidden" name="service_manager" value="1" />
							<input type="submit" style="cursor:pointer" value="'.$l['edit_settings'].'" class="flat-butt" name="service_manager" id="submitservice" /> &nbsp;<img id="createservice" src="'.$theme['images'].'progress.gif" style="display:none">
						</div><br/>
					</div>
				</form>
			</div><!--end of second bg class-->
			</center>
		</form>';
				
				}
				
				// Display a NOTE if NGINX is installed
				if(!empty($iapps['18_1'])){
					echo '<br/>
					<div class="row">
							<p align="center">			
							<div class="sai_notice text-center" style="text-decoration:none;">'.$l['nginx_note'].'</div>
							</p>
					</div>';
				}
		}
	echo '</div><!--end of main bg class-->
	<script language="javascript" type="text/javascript"><!-- // --><![CDATA[	

	// For msgbox MboxObject(fYes, fNo)
	var message_box = new MboxObject();
	// ]]></script>';
	softfooter();
}

?>