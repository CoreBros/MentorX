<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editdomain.php
//===========================================================
// SOFTACULOUS 
// Version : 1.1
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Husain Bhala
// Date:       23th Jan 2017
// Time:       12:00 hrs
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

function domainedit_theme(){
	
	global $user, $globals, $l, $theme, $softpanel, $error, $done, $domains_list, $primary_domain, $domain;

	// For editing domain
	if(optGET('ajaxedit')){
	
		if(!empty($error)){			
			echo '0'.current($error);
			return false;
		}

		if(!empty($done)){
			echo '1'.$l['suc_edit_added'];			
			return true;
		}
	}

	softheader($l['<title>']);
	error_handle($error, '100%');
	echo '<div class="bg"><br/>
		<div class="sai_main_head"><center><img src="'.$theme['a_images'].'domains.png" />&nbsp;'.$l['domain_edit_label'].'</center></div><hr>
		
		<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
			var dompath = false;
			var message_box = new MboxObject();

			function show(){
				if($("#isaddon").is(":checked")){
					$("#addon").show();
					$("#addon1").show();
					$("#addon2").show();
					$("#addon3").show();
				}else{
					$("#addon").hide();
					$("#addon1").hide();
					$("#addon2").hide();
					$("#addon3").hide();
				}
			}

			addonload("show();");

			$(document).ready(function(){

				$("#isaddon").on("change", function(){
					show();
				});

				$("#editdomain").click(function(){
					$("#editdom").css("display", "");
					var tmp = "";
					if($_("isaddon").checked == true){
						var isaddon = 1;
						if(document.getElementById("domainpath")){
							tmp += "&domainpath="+($("#domainpath").val());
						}
						if(document.getElementById("validate_mails")){
							tmp += "&validate_mails="+($_("validate_mails").checked == true ? 1 : 0);
						}
						if(document.getElementById("ip")){
							tmp += "&ip="+($("#ip").val());
						}
					}else{
						var isaddon = 0;
						var tmp = "";
					}

					$.ajax({
						type: "POST",
						url: window.location+"&editdomain=1&ajaxedit=1",
						data: "&isaddon="+isaddon+tmp,

						// Checking for error
						success: function(data){
								var result = data.substring(0,1);
								var msg = data.substring(1);
								if(result == "1"){
									message_box.show_message( "Done ",msg,2);
								}
								if(result == "0"){
									message_box.show_message( "Error",msg,1);
								}
								$("#editdom").css("display", "none");
							},
						error: function(){
							message_box.show_message("Error",\''.$l['connect_error'].'\',1);
						}
					});
				});
			});

		// ]]></script>

		<form accept-charset="'.$globals['charset'].'" action="" method="post" name="editform" id="editform" class="form-horizontal">

			<div class="row">
				<div class="col-sm-5">
					<label for="domain" class="sai_head control-label">'.$l['domain_label'].'</label>
				</div>
				<div class="col-sm-7">
					<input type="text" disabled id="domain" name="domain" class="form-control" value="'.$domain.'"/>
				</div>
			</div><br/>

			<div class="row">
				<div class="col-sm-5 col-xs-10">
					<label for="isaddon" class="sai_head control-label">'.$l['is_addon_part'].'</label><br>
					<span class="sai_exp2">'.$l['exp_checkaddon'].'</span>
				</div>
				<div class="col-sm-7 col-xs-2">
					<input type="checkbox" id="isaddon" '.($domain != $primary_domain ? '' : 'disabled').' name="isaddon" '.POSTchecked('isaddon', ($domain != $primary_domain ? $domains_list[$domain]['addon'] : 1)).'" />
				</div>
			</div><br/>';

			if($domain != $primary_domain){
				echo '<div class="row" id="addon">
					<div class="col-sm-5">
						<label for="domainpath" class="sai_head control-label">'.$l['domain_path'].'</label>
					</div>
					<div class="col-sm-7">
						<div class="input-group">
							<span class="input-group-addon" style="background-color: white;" >'.$softpanel->user['homedir'].'/'.'</span>
							<input type="text" id="domainpath" name="domainpath" class="form-control" value="'.stripslashes(POSTval('domainpath', (substr($domains_list[$domain]['path'], strlen($softpanel->user['homedir'].'/')) != 'public_html' ? substr($domains_list[$domain]['path'], strlen($softpanel->user['homedir'].'/')) : 'www').'/')).'" onfocus=""/>
						</div>
					</div>
				</div><br/>
				
				<div class="row" id="addon2">
					<div class="col-sm-5">
						<label for="ip" class="sai_head control-label">'.$l['ip_label'].'</label><br>
						<span class="sai_exp">'.$l['exp_ip'].'</span>
					</div>
					<div class="col-sm-7">
						<input type="text" id="ip" name="ip" class="form-control" value="'.POSTval('ip', $domains_list[$domain]['ip']).'" />
					</div>
				</div><br/>';
			}

			echo '<div class="row" id="addon3">
				<div class="col-sm-5">
					<label for="validate_mails" class="sai_head control-label">'.$l['validate_mails_label'].'</label><br>
					<span class="sai_exp2">'.$l['exp_validate_mails'].'</span>
				</div>
				<div class="col-sm-7">
					<input type="checkbox" id="validate_mails" name="validate_mails" '.POSTchecked('validate_mails', $domains_list[$domain]['validate_mails']).'" />
				</div>
			</div><br/>

			<div class="row">
				<div class="col-sm-offset-5 col-sm-7">
					<input type="button" id="editdomain" name="editdomain" class="flat-butt" style="cursor:pointer" value="'.$l['editdomain'].'" /> &nbsp;<img id="editdom" src="'.$theme['images'].'progress.gif" style="display:none">
				</div>
			</div><br/>	
		</form>
	</div>';
	softfooter();
}
?>