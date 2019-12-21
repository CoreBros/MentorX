<?php

//////////////////////////////////////////////////////////////
//===========================================================
// email_theme.php
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


function email_theme(){

global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $saved;

// For email settings
if(optGET('ajax_email')){
	
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

echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[

	var message_box = function(){			
			return {
				show_message: function(title, body , image) {			
					var okbutton = \'<input  style="width:75px; margin-top:5px; background:#00A0D2; color:#FFF;" class="sai_submit" type="button" onclick="message_box.close_message();" value="OK" />\';
					if(image == "1"){
						var img = \'<img src="'.$theme['images'].'error.gif" />\';
					}else{
						var img = \'<img src="'.$theme['images'].'confirm.gif" />\';			
					}
										
					if(jQuery(\'.sai_message_box\').html() === null || jQuery(\'.sai_message_box\').html() === undefined ) {
						var message = \'<div class="sai_message_box"><table border="0" cellpadding="8" width="100%" height="100%"><tr ><td rowspan="2" width="30%" > \'+ img + \'</td><td width="70%" class ="msg_tr1">\' +  title + \'</td></tr><tr class ="msg_tr2"><td style="text-align:left">\' + body + \'</td></tr><tr ><td colspan="2">\' + okbutton + \'</td></tr></table></div>\';
						jQuery(document.body).append( message );								
						jQuery(\'.sai_message_box\').css(\'top\', \'40%\');
						jQuery(\'.sai_message_box\').show(\'slow\');
					}else{
						var message =\' <table border="0" width="100%" cellpadding="8" height="100%"><tr ><td rowspan="2" width="30%">\'+ img +  \'</td><td widt="70%" class ="msg_tr1">\' + title + \'</td></tr><tr class ="msg_tr2"><td style="text-align:left">\' + body + \'</td></tr><tr ><td colspan="2">\' + okbutton + \'</td></tr></table>\';				
						jQuery(\'.sai_message_box\').css(\'top\', \'40%\');
						jQuery(\'.sai_message_box\').show(\'slow\');
						jQuery(\'.sai_message_box\').html( message );
					}
				},
				close_message: function() {
					jQuery(\'.sai_message_box\').hide(\'fast\');
				}
			}
		}();

	$(document).ready(function(){
			
		// For email settings
		$("#editform").submit(function(){
			
			$("#create_email").css("display", "");
			
			$.ajax({
				type: "POST",
				url: window.location+"&ajax_email=1",					
				data: $("#editform").serialize(),
				
				// Checking for error
				success: function(data){
					$("#create_email").css("display", "none");
					var result = data.trim().substring(0,1);
					if(result == "1"){
						var msg = data.trim().substring(1);
						message_box.show_message( "'.$l['done'].' ",msg,2);																					
					}
					if(result == "0"){
						var msg = data.trim().substring(1);
						message_box.show_message( "Error",msg,1);
					}
				},
				error: function() {
					message_box.show_message("Error", "Oops ... the connection was lost", 1);
				}													
			});
			
			return false;
														
		});	
	});
	// ]]></script>';

echo '<form accept-charset="'.$globals['charset'].'" name="editemailsettings" method="post" action="" id="editform" class="form-horizontal">
<div class="bg"><br />
	<div class="row sai_main_head" style="width:100%;" align="center">
		<div class="col-sm-6 col-xs-5" style="padding:0px 10px 0 0; text-align:right;">
			<i class="fa sai-mail fa-2x" style="color:#00A0D2;"></i>
		</div>
		<div class="col-sm-6 col-xs-7" style="padding-top:5px; padding-left:0px; text-align:left;">'.$l['emailsettings'].'</div>
	</div><hr>';
	error_handle($error);
	
	if(!empty($saved)){
		echo '<div class="alert alert-success">'.$l['settings_saved'].'</div>';
	}
	echo'
	<div class="row">
		<div class="col-sm-5">
			<label  for="email" class="sai_head">'.$l['email_address'].'</label>
			<span class="sai_exp">'.$l['email_exp'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="text" id="email" name="email" class="form-control" size="30" value="'.POSTval('email', $user['email']).'" softmail="true">
		</div>
	</div><br /><!---row end--->';
	
	// If admin has disabled installation email than dont show.
	if(empty($globals['off_install_mail'])){
		echo '<div class="row">
				<div class="col-sm-5">
					<label class="sai_head">'.$l['ins_email'].'</label>
					<span class="sai_exp">'.$l['ins_email_exp'].'</span>
				</div>
				<div class="col-sm-7">
					<input type="checkbox" id="ins_email" name="ins_email" '.POSTchecked('ins_email', $user['ins_email']).' />
				</div>
			</div><br />';
	}
			
	// If admin has disabled remove email than dont show.
	if(empty($globals['off_remove_mail'])){
	
		echo '<div class="row">
				<div class="col-sm-5">
					<label class="sai_head">'.$l['rem_email'].'</label>
					<span class="sai_exp">'.$l['rem_email_exp'].'</span>
				</div>
				<div class="col-sm-7">
					<input type="checkbox" id="rem_email" name="rem_email" '.POSTchecked('rem_email', $user['rem_email']).' />
				</div>
			</div><br />';
	}
	
	// If admin has disabled edit email than dont show.
	if(empty($globals['off_edit_mail'])){
		echo '<div class="row">
				<div class="col-sm-5">
					<label class="sai_head">'.$l['editdetail_email'].'</label>
					<span class="sai_exp">'.$l['editdetail_email_exp'].'</span>
				</div>
				<div class="col-sm-7">
					<input type="checkbox" id="editdetail_email" name="editdetail_email" '.POSTchecked('editdetail_email', $user['editdetail_email']).' />
				</div>
			</div><br />';
	}
	
	// If admin has disabled backup email than dont show.
	if(empty($globals['off_backup_mail']) && empty($globals['disable_backup_restore'])){
		echo '<div class="row">
				<div class="col-sm-5">
					<label class="sai_head">'.$l['backup_email'].'</label>
					<span class="sai_exp">'.$l['backup_email_exp'].'</span>
				</div>
				<div class="col-sm-7">
					<input type="checkbox" id="backup_email" name="backup_email" '.POSTchecked('backup_email', $user['backup_email']).' />
				</div>
			</div><br />';
	}
		
	// Restore email settings
	if(empty($globals['off_restore_mail'])){
		echo '<div class="row">
				<div class="col-sm-5">
					<label class="sai_head">'.$l['restore_email'].'</label>
					<span class="sai_exp">'.$l['restore_email_exp'].'</span>
				</div>
				<div class="col-sm-7">
					<input type="checkbox" id="restore_email" name="restore_email" '.POSTchecked('restore_email', (empty($user['disable_restore_email']) ? 1 : 0)).' />
				</div>
			</div><br />';
	}
	
	// Clone email settings
	if(empty($globals['off_clone_mail'])){
		echo '<div class="row">
				<div class="col-sm-5">
					<label class="sai_head">'.$l['clone_email'].'</label>
					<span class="sai_exp">'.$l['clone_email_exp'].'</span>
				</div>
				<div class="col-sm-7">
					<input type="checkbox" id="clone_email" name="clone_email" '.POSTchecked('clone_email', (empty($user['disable_clone_email']) ? 1 : 0)).' />
				</div>
			</div><br />';
	}
	
	// Staging email settings
	if(empty($globals['off_staging_mail'])){
		echo '<div class="row">
				<div class="col-sm-5">
					<label class="sai_head">'.$l['staging_email'].'</label>
					<span class="sai_exp">'.$l['staging_email_exp'].'</span>
				</div>
				<div class="col-sm-7">
					<input type="checkbox" id="staging_email" name="staging_email" '.POSTchecked('staging_email', (empty($user['disable_staging_email']) ? 1 : 0)).' />
				</div>
			</div><br />';
	}
	
	// Import email settings
	if(empty($globals['off_import_mail'])){
		echo '<div class="row">
				<div class="col-sm-5">
					<label class="sai_head">'.$l['import_email'].'</label>
					<span class="sai_exp">'.$l['import_email_exp'].'</span>
				</div>
				<div class="col-sm-7">
					<input type="checkbox" name="import_email" id="import_email" '.POSTchecked('import_email', (empty($user['disable_import_email']) ? 1 : 0)).' />
				</div>
			</div><br />';
	}	
	
	echo '<div class="row">
			<div class="col-sm-5">
				<label class="sai_head">'.$l['disable_all_notify_update'].'</label>
				<span class="sai_exp">'.$l['disable_all_notify_update_exp'].'</span>
			</div>
			<div class="col-sm-7">
				<input type="checkbox" id="disable_all_notify_update" name="disable_all_notify_update" '.POSTchecked('disable_all_notify_update', $user['disable_all_notify_update']).' />
			</div>
		</div><br />
		
		<div class="row">
			<div class="col-sm-5">
				<label class="sai_head">'.$l['email_password_user'].'</label>
				<span class="sai_exp">'.$l['email_password_user_exp'].'</span>
			</div>
			<div class="col-sm-7">
				<input type="checkbox" id="email_password_user" name="email_password_user" '.POSTchecked('email_password_user', $user['email_password_user']).(!empty($globals['email_password']) ? ' disabled' : '').' />
			</div>
		</div><br />';
	
	echo '<p align="center">
			<input type="hidden" name="editemailsettings" value="1" />
			'.csrf_display().'
			<input type="submit" name="editsubmit" value="'.$l['edit_settings'].'" class="flat-butt" /> <br /><img id="create_email" src="'.$theme['images'].'progress.gif" style="display:none">
		</p>
</form>
</div><br /><!--end of bg class-->';

softfooter();

}

?>