<?php

//////////////////////////////////////////////////////////////
//===========================================================
// apache_settings_theme.php
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


function apache_settings_theme(){

global $user, $globals, $l, $theme, $softpanel, $iapps, $error, $saved, $dserver, $done, $proxy;
	
	// ENABLE PROXY
	if(optGET('enable_proxy')){
		if(!empty($error)){
			echo '0'.current($error);
			return false;
		}
		if(!empty($done)){
			echo '1'.$l['enable_done'];
			return true;
		}
	}
	
	// ENABLE SERVER
	if(optGET('enable_server')){
		if(!empty($error)){
			echo '0'.current($error);
			return false;
		}
		if(!empty($saved)){
			echo '1'.$l['settings_saved'];
			return true;
		}
	}	
	
	// DISABLE PROXY
	if(optGET('disable_proxy')){
		if(!empty($error)){
			echo '0'.current($error);
			return false;
		} 
		if(!empty($done)){
			echo '1'.$l['disable_done'];
			return true;
		}
	}
	
	softheader($l['<title>']);
	
	error_handle($error, '100%');
	echo '<script language="javascript" type="text/javascript">
		message_box = new MboxObject("","",1);
		
		$(document).ready(function(){
			
			// ENABLE PROXY
			$("#enable").click(function(){
				
				var port = $("#port").val();
				$("#progress").css("display", "");
				
				$.ajax({
					type: "POST",
					url: window.location+"&enable_proxy=1",
					data: $("#enable_p").serialize(),
					
					// Checking the result
					success: function(data){
						$("#progress").css("display", "none");
						var result = data.substring(0,1);
						if(result == "1"){
							$("#port").val("");
							var msg = data.substring(1);
							message_box.show_message("Done", msg, 2, 1);
						}
						if(result == "0"){
							var msg = data.substring(1);
							message_box.show_message("Error", msg, 1, 1);
						}
					},
					error: function() {
						message_box.show_message("Error", "'.$l['connect_error']. '", 1, 1);
					}
				});
				return false;
			});
			
			// DISABLE PROXY
			$("#disable").click(function(){
				
				var webserver = $("input[name=webserver]:checked").val();
				$("#progress").css("display", "");
				
				$.ajax({
					type: "POST",
					url: window.location+"&disable_proxy=1",
					data: "webserver="+webserver,
					
					// Checking for error
					success: function(data){
						$("#progress").css("display", "none");
						var result = data.substring(0,1);
						if(result == "1"){
							var msg = data.substring(1);
							message_box.reload = 0;
							message_box.show_message( "Done ", msg, 2);
							message_box.reload = 1;
							
							var dserver = $("input[name=webserver]:checked").val();
							if(dserver == "lighttpd" || dserver == "httpd2"){
								window.location = "'.$globals['index'].'";
							}else{
								window.location = window.location;
							}
						}
						if(result == "0"){
							$("#progress").css("display", "none");							
							var msg = data.substring(1);
							message_box.show_message( "Error", msg, 1, 1);
						}
					},
					error: function() {
						message_box.show_message("Error", "'.$l['connect_error'].'", 1, 1);
					}
				});
				return false;
			});
			
			
			// EDIT APACHE SETTINGS (FOR SUPHP/FASTCGI)
			$("#submitapacheeditset").click(function(){
				$("#progressbar1").css("display", "");

				$.ajax({
					type: "POST",
					url: window.location+"&enable_server=1",
					data: $("#editform123").serialize(),
					
					// Checking the result
					success: function(data){
						$("#progressbar1").css("display", "none");
						var result = data.substring(0,1);
						if(result == "1"){
							var msg = data.substring(1);
							message_box.show_message("Done", msg, 2, 1);
						}
						if(result == "0"){
							$("#progressbar1").css("display", "none");
							var msg = data.substring(1);
							message_box.show_message("Error", msg, 1, 1);
						}
					},
					error: function() {
						message_box.show_message("Error", "'.$l['connect_error']. '", 1, 1);
					}
				});
				return false;
			});
			
			// EDIT APACHE SETTINGS (FOR HTTP2 & GZIP)
			$("#submitenablehttp2").click(function(){
				$("#progressbar3").css("display", "");

				$.ajax({
					type: "POST",
					url: window.location+"&enable_server=1",
					data: $("#editformhttp2").serialize(),
					
					// Checking the result
					success: function(data){
						$("#progressbar3").css("display", "none");
						var result = data.substring(0,1);
						if(result == "1"){
							var msg = data.substring(1);
							message_box.show_message("Done", msg, 2, 1);
						}
						if(result == "0"){
							$("#progressbar3").css("display", "none");
							var msg = data.substring(1);
							message_box.show_message("Error", msg, 1, 1);
						}
					},
					error: function() {
						message_box.show_message("Error", "'.$l['connect_error']. '", 1, 1);
					}
				});
				return false;
			});	
			
			// Enable/Disable Varnish
			$("#submitvarnish").click(function(){
				$("#progressbar4").css("display", "");

				$.ajax({
					type: "POST",
					url: window.location+"&enable_server=1",
					data: $("#enablevarnish").serialize(),
					
					// Checking the result
					success: function(data){
						$("#progressbar4").css("display", "none");
						var result = data.substring(0,1);
						if(result == "1"){
							var msg = data.substring(1);
							message_box.show_message("Done", msg, 2, 1);
						}
						if(result == "0"){
							$("#progressbar4").css("display", "none");
							var msg = data.substring(1);
							message_box.show_message("Error", msg, 1, 1);
						}
					},
					error: function() {
						message_box.show_message("Error", "'.$l['connect_error']. '", 1, 1);
					}
				});
				return false;
			});

		});
	</script>';
	
	if($dserver == 'nginx'){
		echo'
		<div class="bg">
			<div class="sai_head"><center><h4><b>
				<img src="'.$theme['a_images'].'nginx_proxy.gif" />&nbsp;'.$l['lbl_head'].'</img></b></h4></center>
			</div>
			<div id="show_set">';
				show_proxy();
			echo '</div>
		</div><br/>';
		
	}
	
	// Display if DEFAULT WEBSERVER IS APACHE | APACHE2 OR {PROXY IS ENABLED AND APACHE/APACHE2 IS THE PROXY SERVER}
	if(($dserver == 'httpd' || $dserver == 'httpd2' ) || (!empty($proxy) && ($proxy == 'httpd' || $proxy == 'httpd2'))){

	echo '<div class="bg">
			<form accept-charset="'.$globals['charset'].'" name="editsettings" method="post" action="" class="form-horizontal" id="editform123">
				<div class="sai_main_head"><center>
					<img src="'.$theme['a_images'].'apache_settings.png" />&nbsp;'.$l['apachesettings'].'</center>
				</div><hr>
				<div class="row">
					<div class="col-sm-5">
						<label class="sai_head">'.
							(($dserver == 'httpd' || $proxy == 'httpd') ? $l['suphp_enable'] : $l['fastcgi_enable']).'
						</label><br/>
						<span class="sai_exp2">'.
							(($dserver == 'httpd' || $proxy == 'httpd') ? $l['suphp_check'] : $l['fastcgi_check']).'
						</span>
					</div>
					<div class="col-sm-7">'.
						(($dserver == 'httpd' || $proxy == 'httpd') ? '<input type="checkbox" name="suphpon" id="suphpon" '.POSTchecked('suphpon', (!$softpanel->getconf('NO_SUPHP'))).' />' : '<input type="checkbox" name="fastcgion" id="fastcgion" '.POSTchecked('fastcgion', (!$softpanel->getconf('NO_FASTCGI'))).' />').'
					</div>
				</div><br/>
				<div class="row">
					<div class="col-sm-offset-5 col-sm-7">
						<p>
							<input type="hidden" name="editapachesettings" value="1" />
							<input type="submit" class="flat-butt" name="editapachesettings" value="'.$l['edit_settings'].'" id="submitapacheeditset"/>&nbsp;<img id="progressbar1" src="'.$theme['images'].'progress.gif" style="display:none" />
						</p>
					</div>
				</div>
			</form>
		</div><br/>';
	}

	echo '
	<div class="bg">
		<div class="sai_main_head" class="text-center">
			<center>
				<img src="'.$theme['images'].'settings.png"  />&nbsp;'.
				$l['additional_mod_settings'].'
			</center>
		</div><hr>';

		//
		if(($dserver == 'httpd' && $iapps['3_1']['mod'] < 28) || ($dserver == 'httpd2' && $iapps['125_1']['mod'] < 19)){
			echo '
			<div class="alert alert-danger text-center" role="alert" style="font-size:15px">'.
				$l['error_update_webserver'].'
			</div>';

		}else{
			
			echo'
			<form accept-charset="'.$globals['charset'].'" name="editsettingshttp2" method="post" action="" class="form-horizontal" id="editformhttp2">';
			if($dserver == 'httpd2' || $dserver == 'nginx'){
				echo'
				<div class="row">
					<div class="col-sm-5">
						<label class="sai_head">'.
							$l['enable_http2'].'
						</label><br/>
						<span class="sai_exp2">'.
							$l['check_http2'].'
						</span>
					</div>
					<div class="col-sm-7">
						<input type="checkbox" name="http2on" id="http2on" '.POSTchecked('http2', (!$softpanel->getconf('NO_HTTP2'))).' />
					</div>
				</div>';
			}
				echo'
				<div class="row" style="margin-top:20px">
					<div class="col-sm-5">
						<label class="sai_head">'.
							$l['enable_gzip'].'
						</label><br/>
						<span class="sai_exp2">'.
							$l['check_gzip'].'
						</span>
					</div>
					<div class="col-sm-7">
						<input type="checkbox" name="gzipon" id="gzipon" '.POSTchecked('gzipon', (!$softpanel->getconf('NO_GZIP'))).' />
					</div>
				</div>
				<div class="row" style="margin-top:20px">
					<div class="col-sm-offset-5 col-sm-7">
						<p>
							<input type="hidden" name="edithttp2settings" value="1" />
							<input type="submit" class="flat-butt" name="edithttp2settings" value="'.$l['save_settings'].'" id="submitenablehttp2"/>&nbsp;<img id="progressbar3" src="'.$theme['images'].'progress.gif" style="display:none" />
						</p>
					</div>
				</div><br/>
			</form>';
			
		}
		echo'
	</div>';
	
	//enable varnish block
	$fcgi = $softpanel->getconf('NO_FASTCGI');
	if(($dserver != 'lighttpd') && !empty($iapps['87_1'])){ //not for lighttpd
		
		echo '<div class="bg">
			<div class="sai_main_head" class="text-center">
				<center>
					<img src="'.$theme['images'].'/webuzo/87_icon.png"  />&nbsp;'.
					$l['varnish_setting'].'
				</center>
			</div><hr>';
		if($iapps['87_1']['mod'] < 6){
			echo '<div class="alert alert-danger text-center" role="alert" style="font-size:15px">'.
				$l['update_varnish'].'
			</div>';

		}elseif(($dserver == 'httpd' && $iapps['3_1']['mod'] < 29) || ($dserver == 'httpd2' && $iapps['125_1']['mod'] < 20)){
			echo '<div class="alert alert-danger text-center" role="alert" style="font-size:15px">'.
				$l['update_webserver'].'
			</div>';
		}elseif(($dserver == 'httpd2' && empty($fcgi))){
			echo'
			<div class="alert alert-info text-center" style = "font-size: 15px">
				<i class="fa sai-info fa-1x" style="color:#31708f;vertical-align: middle;"></i>&nbsp;&nbsp;'.$l['err_fastcgi_varnish'].'
			</div>';
		}else{
			echo'
			<form accept-charset="'.$globals['charset'].'" name="enablevarnish" method="post" action="" class="form-horizontal" id="enablevarnish">
				<div class="row">
					<div class="col-sm-5">
						<label class="sai_head">'.
							$l['enable_varnish'].'
						</label><br/>
						<span class="sai_exp2">'.
							$l['exp_enable_varnish'].'
						</span>
					</div>
					<div class="col-sm-7">
						<input type="checkbox" name="varnishon" id="varnishon" '.POSTchecked('varnishon', $softpanel->getconf('VARNISH_PORT')).' />
					</div>
				</div><br/>
				<div class="row">
					<div class="col-sm-5">
							<label class="sai_head" for="varnish_port">'.$l['name'].'</label><br/>
							<span class="sai_exp2">'.$l['exp_name'].'</span>
						</div>
						<div class="col-sm-7">
							<input type="text" value="'.POSTval('varnish_port', $softpanel->getconf('VARNISH_PORT')).'" name="varnish_port" id="varnish_port" class="form-control"/>
						</div>
				</div><br/>
				<div class="row" style="margin-top:20px">
					<div class="col-sm-offset-5 col-sm-7">
						<p>
							<input type="hidden" name="editvarnishsettings" value="1" />
							<input type="submit" class="flat-butt" name="editvarnishsettings" value="'.$l['save_settings'].'" id="submitvarnish"/>&nbsp;<img id="progressbar4" src="'.$theme['images'].'progress.gif" style="display:none" />
						</p>
					</div>
				</div><br/>
				<div class="row text-center sai_notice">
					'.$l['beta_note'].'
				</div><br>
			</form>';
		}
		echo '</div>';
	}
	softfooter();

}
	
function show_proxy(){
	
	global $user, $globals, $l, $theme, $softpanel, $iapps, $error, $saved, $dserver, $done, $proxy, $apps;
	
	$proxy = $softpanel->getConf('WU_PROXY_SERVER');
	
	// Is Proxy enabled ?
	if(empty($proxy)){ // Disabled
	
		// Array of webservers | Apache | NGINX | Lighttpd | Apache2
		$proxy_server = array(3, 125);
		foreach($proxy_server as $proxy_server_value){
			$tmp_prxy_server[$proxy_server_value] = $softpanel->appinfo($proxy_server_value);
		}
		echo'<hr>
			<form accept-charset="'.$globals['charset'].'" action="" method="post" name="enable_p" id="enable_p" class="form-horizontal">
				<div class="row">
				<div class="col-sm-5">
						<label class="sai_head" for="port">'.$l['name'].'</label><br/>
						<span class="sai_exp2">'.$l['exp_name'].'</span>
					</div>
					<div class="col-sm-7">
						<input type="text" name="port" id="port" class="form-control"/>
					</div>
				</div><br/>
				<div class="row">
					<div class="col-sm-5">
						<label class="sai_head" for="ht_check">'.$l['ht_check'].'</label><br/>
						<span class="sai_exp2">'.$l['ht_check_exp'].'</span>
					</div>
					<div class="col-sm-7">
						<input type="checkbox" name="ht_check" id="ht_check" class="form-control"/>
					</div>
				</div><br/>
				<div class="row">
					<div class="col-sm-5">
						<label class="sai_head">'.$l['set_proxy'].'</label><br/>
						<span class="sai_exp2">'.$l['set_proxy_exp'].'</span>
					</div>
					<div class="col-sm-7">';
						foreach($tmp_prxy_server as $tkey => $tvalue){
							echo '<input type="radio" name="webserver" value="'.$tvalue['set_default'].'" id="'.$tvalue['set_default'].'" '.POSTradio('webserver', $tvalue['set_default'], $tvalue['set_default']).' /> &nbsp;<label class="sai_head">'.$apps[$tkey]['name'].'</label><br />';
						}
					echo '
					</div>
				</div><br/>
				<div class="row">
					<p align="center">
						<input type="hidden" name="enable" value="1" />
						<input type="submit" class="flat-butt" name="enable" value="'.$l['enable_button'].'" id="enable"/>&nbsp;<img id="progress" src="'.$theme['images'].'progress.gif" style="display:none" />
					</p>
				</div>
			</form><br/>';
	
	}else{ // Enabled
		
		foreach($softpanel->wgrp as $webkey => $webvalue){
			if(!empty($iapps[$webkey.'_1'])) $tmp_server[$webkey] = $softpanel->appinfo($webkey);
		}
		echo '<hr>
		<form accept-charset="'.$globals['charset'].'" action="" method="post" name="disable_p" id="disable_p" class="form-horizontal">
				<div class="sai_head"><center>'.$l['set_default'].'</center></div>';
				foreach($tmp_server as $key => $value){
					echo '<div class="row">
							<div class="col-sm-5">
							<label class="sai_head">'.$apps[$key]['name'].'</label>
						</div>
							<div class="col-sm-7">
							<input type="radio" name="webserver" class="form-control" value="'.$value['set_default'].'" id="'.$value['set_default'].'" '.POSTradio('webserver', $value['set_default'], $softpanel->getConf('WU_DEFAULT_SERVER')).' />
						</div>
					</div><br/>';
				}
				echo '<div class="row">
					<p align="center">
						<input type="button" class="flat-butt" name="disable" value="'.$l['disable_button'].'" id="disable"/> &nbsp;<img id="progress" src="'.$theme['images'].'progress.gif" style="display:none" />
					</p>
				</div>
		</form></br></br>';
	}
}
?>