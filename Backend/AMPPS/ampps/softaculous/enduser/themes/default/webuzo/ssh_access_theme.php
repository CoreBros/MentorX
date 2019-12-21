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

function ssh_access_theme(){

	global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error;
	global $installations, $langs, $saved;

	// For delete
	if(optGET('ajaxset')){
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

	echo '<div class="bg">
		<div class="sai_main_head"><center><img src="'.$theme['a_images'].'ssh_login.png" />&nbsp;'.$l['ssh_access'].'</center></div><hr>';
		if($softpanel->getacl('DISABLE_SSH')){
			echo '<div class="alert alert-danger " style="width:100%">
				<center style="margin-top:4px; font-size:16px;">'.$l['err_no_access'].'</center>
			</div>';
		}else{
			echo '<form accept-charset="'.$globals['charset'].'" name="editsettings" method="post" action="" class="form-horizontal" id="editform"><br />';
				error_handle($error, "100%");
				echo '<div class="row">
					<div class="col-sm-5">
						<label class="sai_head">'.$l['ssh_enable'].'</label><br/>
						<span class="sai_exp2">'.$l['ssh_check'].'</span>
					</div>
					<div class="col-sm-7">			
						<input type="checkbox" name="sshon" id="sshon" '.POSTchecked('sshon', ($softpanel->getssh())).' ">
					</div>
				</div><br/>
				<div class="row">
					<div class="col-sm-5">
						<label class="sai_head">'.$l['ssh_port'].'</label><br/>
						<span class="sai_exp2">'.$l['ssh_port_exp'].'</span>
					</div>
					<div class="col-sm-7">			
						<input type="text" name="ssh_port" id="ssh_port" value="'.POSTval('ssh_port', trim(($softpanel->getssh_port()))).'">
					</div>
				</div><br/>
				<div class="row">
					<div class="col-sm-offset-5 col-sm-7">
						<input type="hidden" name="editsshsettings" value="1" />		
						<input type="submit" class="flat-butt" name="editsshsettings" value="'.$l['edit_settings'].'" id="submitset"/>&nbsp;<img id="edit_set" src="'.$theme['images'].'progress.gif" style="display:none">
					</div><br/>
				</div><br/>
			</form>
			<script language="javascript" type="text/javascript">
					
				// For msgbox MboxObject(fYes, fNo)
				var message_box = new MboxObject();
				
				$(document).ready(function(){		
					// For creating CSR
					$("#submitset").click(function(){
						$("#edit_set").css("display", "");
						
						var port = $("#ssh_port").val();
						if(isNaN(port) || port <= 0 || port > 65535){
							message_box.show_message("Error",\''.$l['err_ssh_port'].'\',1);
							$("#edit_set").css("display", "none");
							return false;
						}
						
						$.ajax({
							type: "POST",
							url: window.location+"&ajaxset=1",
							data: $("#editform").serialize(),
							
							// Checking for error
							success: function(data){
								$("#edit_set").css("display", "none");
								var result = data.substring(0,1);
								if(result == "1"){
									var msg = data.substring(1);	
									message_box.show_message("Done",msg,2);						
								}
								if(result == "0"){	
									$("#edit_set").css("display", "none");
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
			</script>';
		}
	echo '</div>';
	softfooter();
}

?>