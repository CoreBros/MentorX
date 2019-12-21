<?php

//////////////////////////////////////////////////////////////
//===========================================================
// edit_email_autoresponder_theme.php
//===========================================================
// SOFTACULOUS 
// Version : 2.7.2
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Dhanya Varier
// Date:       12th Sept 2018
// Time:       13:00 hrs
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

function edit_email_autoresponder_theme(){

	global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $done, $domain_list, $email_list, $domain_name, $mail_settings, $is_running, $email_auto_list;
	
	// For adding Email Autoresponder
	if(optGET('ajaxedit')){
		
		if(!empty($error)){
			echo '0'.current($error);
			return false;
		}
		
		// Creating new table to display the list of email autoresponders
		if(!empty($done)){
			echo '1'.$l['change_final'];
			return true;
		}
		
	}
	
	softheader($l['<title>']);
	echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[

		var message_box = new MboxObject();	

		$(document).ready(function(){
			
			// For changing password	
			$("#edit_autoresponder").click(function(){
				$("#edit_email_autoresponder").css("display", "");					
				$.ajax({
					type: "POST",
					url: window.location+"&ajaxedit=1",					
					data: $("#editform").serialize(),
					
					// Checking for error
					success: function(data){
						$("#edit_email_autoresponder").css("display", "none");
						var result = data.substring(0,1);
						if(result == "1"){							
							var msg = data.substring(1);
							message_box.show_message( "Done ",msg,2);										
						}
						if(result == "0"){	
							$("#edit_email_autoresponder").css("display", "none");
							var msg = data.substring(1);
							message_box.show_message( "Error",msg,1);
						}
					},
					error: function() {
						message_box.show_message("Error",\''.$l['connect_error'].'\',1);						
					}															
				});
				return false;												
			});		
		});
	// ]]></script>';
	echo '<div class="bg"><br/>';
	if($softpanel->getacl('DISABLE_EMAIL') || $softpanel->getacl('DISABLE_EMAILADD')){
		echo '<div class="alert alert-danger " style="width:100%">
			<center style="margin-top:4px; font-size:16px;">'.$l['err_no_access'].'</center>
		</div>';
	}else{
		echo '<div class="sai_main_head"><center><img src="'.$theme['a_images'].'auto-reply.png" />&nbsp;'.$l['emailautoresponder'].'</center></div><hr>';
	
		// Check for the service working or not
		if(empty($is_running)){
			echo '<div class="row" style="margin-top:10px">
					<div class="col-sm-12"><center>
						<div class="alert alert-danger " style="width:95% ; padding:10px">
							<a href="'.$globals['ind'].'act=services" style="margin-top:4px; font-size:15px; text-decoration:none"><center>'.$l['service_stop'].'</center></a>
						</div>
					</center></div>
				</div>';
		}
		
		if(!empty($iapps['35_1']) && ($iapps['35_1']['mod'] < 17)){
			echo '<div class="row" style="margin-top:10px">
					<div class="col-sm-12"><center>
						<div class="alert alert-danger " style="width:95%; padding:10px; margin-top:4px; font-size:15px;">'.$l['exim_not_installed'].'</div>
					</center></div>
				</div>';
		}else{
	
			echo '<form accept-charset="'.$globals['charset'].'" action="" method="post" name="edit_email_autoresponder" id="editform" class="form-horizontal">
				<div class="row">
					<div class="col-sm-5">
						<label class="sai_head" for="login_name">'.$l['loginname'].'</label>
					</div>
					<div class="col-sm-7">
						<input type="text" disabled name="login_name" id="login_name" class="form-control" value="'.$user.'@'.$domain_name.'" />
					</div>
				</div><br/>	
				
				<div class="row">
					<div class="col-sm-5">
						<label class="sai_head" for="mail_subject">'.$l['mailsubject'].'</label>
						<span class="sai_exp2">('.$l['optional'].')</span>
					</div>
					<div class="col-sm-7">
						<input type="text" class="form-control" name="mail_subject" id="mail_subject" size="2" value="'.POSTval('mail_subject', $email_auto_list[$user]['autoreply_subject']).'" />
					</div>
				</div><br/>				
				
				<div class="row">
					<div class="col-sm-5">
						<label class="sai_head" for="mail_body">'.$l['mailbody'].'</label>
					</div>
					<div class="col-sm-7">
						<textarea name="mail_body" id="mail_body" class="form-control" rows="10" cols="70">'.$email_auto_list[$user]['autoreply_content'].'</textarea>
					</div>
				</div><br/>
				
				<div class="row">
					<div class="col-sm-offset-5 col-sm-7">
						<input type="hidden" name="edit_autoresponder" value="1" />
						<input type="submit" style="cursor:pointer" value="'.$l['submit_button'].'" name="edit_autoresponder" class="flat-butt" id="edit_autoresponder" /> &nbsp;<img id="edit_email_autoresponder" src="'.$theme['images'].'progress.gif" style="display:none">
					</div><br/>
				</div>		
			</form><br/>';
		}
	}
		
	echo '</div>';
	softfooter();
}
