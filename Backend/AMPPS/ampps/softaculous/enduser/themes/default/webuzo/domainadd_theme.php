<?php

//////////////////////////////////////////////////////////////
//===========================================================
// domainadd_theme.php
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

function domainadd_theme(){

global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error;
global $insid, $backed, $software, $soft, $done;

// For adding MX Record
if(optGET('ajaxdomadd')){
	
	if(!empty($error)){			
		echo '0'.current($error);
		return false;
	}
	// Creating domain
	if(!empty($done)){
		echo '1'.$l['suc_dom_added'];
		return true;
	}
}

softheader($l['<title>']);
echo '<div class="bg"><br/>';
if($softpanel->getacl('DISABLE_DOMAINADD')){
	echo '<div class="alert alert-danger " style="width:100%">
			<center style="margin-top:4px; font-size:16px;">'.$l['err_no_access'].'</center>
		</div>';
}else{
	error_handle($error, '100%');

	echo '
		<form accept-charset="'.$globals['charset'].'"  name="importsoftware" method="post" action="" onsubmit="return checkform();" role="form" class="form-horizontal">
			<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
				var dompath = false;
				var message_box = new MboxObject();
				function show(){
					if($_("isaddon").checked){		
						$_("addon").style.display = "";
						$_("addon1").style.display = "";	
					}else{
						$_("addon").style.display = "none";
						$_("addon1").style.display = "none";
					}
				}
				addonload("show();");
			
				function checkform(){
					try{
						if(!formcheck() || !checkdbname(\'softdb\', true)){
							return false;
						}
					}catch(e){
						//Do nothing
					}
					return true;
				};

				function suggestdompath(domval){
					if(dompath){
						return true;	
					}
					$_("domainpath").value = "www/"+$_("domain").value.trim();
				}
				$(document).ready(function(){
					$("#isaddon").on("change", function(){
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
					});
			
					// For creating MX Record	
					$("#submitdomain").click(function(){
						$("#createdomain").css("display", "");	
						var domain = ($("#domain").val());
						if($_("isaddon").checked == true){
							var isaddon = 1;
							var domainpath = ($("#domainpath").val());
							var validate_mails = ($_("validate_mails").checked == true ? 1 : 0)
							var issue_lecert = ($_("issue_lecert").checked == true ? 1 : 0)
							var ip = ($("#ip").val());
							var tmp = "&domainpath="+domainpath+"&validate_mails="+validate_mails+"&issue_lecert="+issue_lecert;
						}else{
							var selectdomain = ($("#selectdomain").val());
							var isaddon = 0;
							var tmp = "&selectdomain="+selectdomain;
						}
				
						$.ajax({
							type: "POST",
							url: window.location+"&submitdomain=1&ajaxdomadd=1",					
							data: "domain="+domain+"&isaddon="+isaddon+tmp+"&ip="+ip,
					
							// Checking for error
							success: function(data){
									$("#createdomain").css("display", "none");
									var result = data.substring(0,1);
									var msg = data.substring(1);
									if(result == "1"){
										$_("domain").value="";
										$_("ip").value="";
										if($_("isaddon").checked == true){
											$_("domainpath").value="www/";
										}
										message_box.show_message( "Done ",msg,2);
									}
									if(result == "0"){	
										$("#createdomain").css("display", "none");
										message_box.show_message( "Error",msg,1);
									}
								},
							error: function() {
								message_box.show_message("Error",\''.$l['connect_error'].'\',1);
							}															
						});												
					});
				});
				
		   // ]]></script>';
	   
	   echo '
			<div class="row">
				<div class="sai_main_head text-center">
					<img src="'.$theme['a_images'].'adddomain.png" alt="" class="webu_head_img"/>&nbsp;'.$l['domain_add_label'].'
					<hr/>
				</div>		
			</div>
			<div class="row">
				<div class="col-sm-5">
					<label for="domain" class="sai_head control-label">'.$l['domain_label'].'</label>
				</div>
				<div class="col-sm-7">
					<input type="text" id="domain" name="domain" class="form-control" required onkeyup="suggestdompath(this);" value="'.POSTval('domain', '').'"/>
				</div>
			</div>
			<br/>	
		
			<div class="row">
				<div class="col-sm-5 col-xs-10">
					<label for="isaddon" class="sai_head control-label">'.$l['is_addon_part'].'</label><br>
					<span class="sai_exp2">'.$l['exp_checkaddon'].'</span>
				</div>
				<div class="col-sm-7 col-xs-2">
					<input type="checkbox" id="isaddon" name="isaddon" '.POSTchecked('isaddon', true).'" />
				</div>
			</div>
			<br/>	
		
			<div class="row" id="addon" style="display:none;">
				<div class="col-sm-5">
					<label for="domainpath" class="sai_head control-label">'.$l['domain_path'].'</label>
				</div>
				<div class="col-sm-7">
					<div class="input-group">
						<span class="input-group-addon" style="background-color: white;" >'.$softpanel->user['homedir'].'/'.'</span>
						<input type="text" id="domainpath" name="domainpath" class="form-control" value="'.stripslashes(POSTval('domainpath', 'www/')).'" onfocus=""/>
					</div>
					<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
						//Add an event handler
						$_("domainpath").onkeydown = function(){
							dompath = true;
						}
					// ]]></script>
				</div>&nbsp;
			</div>
				
			<div class="row" id="addon1">
				<div class="col-sm-5">
					<label for="ip" class="sai_head control-label">'.$l['ip_label'].'</label><br>
					<span class="sai_exp">'.$l['exp_ip'].'</span>
				</div>
				<div class="col-sm-7">
					<input type="text" id="ip" name="ip" class="form-control" value="'.POSTval('ip', '').'" />
				</div>&nbsp;
			</div>
			
			<div class="row" id="addon2">
				<div class="col-sm-5">
					<label for="validate_mails" class="sai_head control-label">'.$l['validate_mails_label'].'</label><br>
					<span class="sai_exp2">'.$l['exp_validate_mails'].'</span>
				</div>
				<div class="col-sm-7">
					<input type="checkbox" id="validate_mails" name="validate_mails" '.POSTchecked('validate_mails', true).'" />
				</div>&nbsp;
			</div>
			
			<div class="row" id="addon3">
				<div class="col-sm-5">
					<label for="issue_lecert" class="sai_head control-label">'.$l['issue_lecert_label'].'</label><br>
					<span class="sai_exp2">'.$l['exp_issue_lecert'].'</span>
				</div>
				<div class="col-sm-7">
					<input type="checkbox" id="issue_lecert" name="issue_lecert" '.POSTchecked('issue_lecert', false).'" />
				</div>&nbsp;
			</div>

			<div class="row">
				<div class="col-sm-offset-5 col-sm-7">
					<input type="button" id="submitdomain" name="submitdomain" class="flat-butt" style="cursor:pointer" value="'.$l['submitdomain'].'" /> &nbsp;<img id="createdomain" src="'.$theme['images'].'progress.gif" style="display:none">
				</div>
			</div>
			<br/>';
	echo '
		<br/>
		<br/>
		</form>';
}

echo '<div>';
softfooter();

}

