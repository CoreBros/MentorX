<?php

//////////////////////////////////////////////////////////////
//===========================================================
// changepassword.php
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

function editftp_theme(){
	
	global $theme, $globals, $kernel, $user, $l, $error, $done, $onboot, $fuser;

	// For changing password
	if(optGET('ajaxftppass')){
	
		if(!empty($error)){			
			echo '0'.current($error);
			return false;
		}
		// Creating new table for display new DB
		if(!empty($done)){
			echo '1'.$l['change_final'];			
			return true;
		}
	}

	softheader($l['<title>']);
	error_handle($error, '100%');
	
	echo '<div class="bg"><br/>
		<div class="sai_main_head"><center><img src="'.$theme['images'].'changepassdp.gif" />&nbsp;'.$l['change_note'].'</center></div><hr>';
		echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
			// For msgbox MboxObject(fYes, fNo)
			var message_box = new MboxObject();

			$(document).ready(function(){
			
				// For changing password	
				$("#submitftppass").click(function(){
					$("#createftppass").css("display", "");					
					$.ajax({
						type: "POST",
						url: window.location+"&ajaxftppass=1",					
						data: $("#editform").serialize(),
					
						// Checking for error
						success: function(data){
							$("#createftppass").css("display", "none");
							var result = data.substring(0,1);
							if(result == "1"){
								$_("newpass").value="";
								$_("conf").value="";
								var msg = data.substring(1);
								message_box.show_message( "Done ",msg,2);
								check_pass_str_wuzo($("#newpass"), $("#pass-prog-bar"));
							}
							if(result == "0"){	
								$("#createftppass").css("display", "none");
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
		// ]]></script>
	
		<form accept-charset="'.$globals['charset'].'" action="" method="post" name="changepass" id="editform" class="form-horizontal">
			<div class="row">
				<div class="col-sm-5">
					<label class="sai_head">'.$l['for_fuser'].'</label>
				</div>
				<div class="col-sm-7">
					<label class="sai_head">'.$fuser.'</label>
				</div>
			</div><br/>
			<div class="row">
				<div class="col-sm-5">
					<label class="sai_head" for="newpass">'.$l['new_pass'].'</label>
				</div>
				<div class="col-sm-6">
					<div class="input-group">
						<input type="password" name="newpass" id="newpass" value="" class="form-control" onkeyup="check_pass_str_wuzo($(\'#newpass\'), $(\'#pass-prog-bar\'))" />
						<span class="input-group-addon" style="padding: 4px 12px" onclick="change_image(this, \'newpass\')">
						<img src="'.$theme['images'].'eye.png">
						</span>
					</div>
					<div class="progress">
						<div class="progress-bar progress-bar-danger" id="pass-prog-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0">
							<span class="sr-only">0% Complete (danger)</span>
							<span id="progress-bar-text" style="color:#000;"></span>
						</div>
					</div>
				</div>
				<div class="col-sm-1">
					<a href="javascript: void(0);" onclick="rand_val=randstr_wuzo(10);$_(\'newpass\').value=rand_val;$_(\'conf\').value=rand_val;check_pass_str_wuzo($(\'#newpass\'), $(\'#pass-prog-bar\'));return false;" title="'.$l['randpass'].'">
						<img src="'.$theme['images'].'key.png" style="padding-top:9px;"/>
					</a>
				</div>
			</div><br/>
			<br/>
			<div class="row">
				<div class="col-sm-5">
					<label class="sai_head" for="conf">'.$l['retype_pass'].'</label>
				</div>
				<div class="col-sm-6">
					<input type="password" name="conf" id="conf" value="" class="form-control"/>
				</div>
				<div class="col-sm-1">
				</div>
			</div>
			<br/>
			<div class="row">
				<div class="col-sm-offset-5 col-sm-7">
					<input type="hidden" name="changepass" value="1" />
					<input type="submit" style="cursor:pointer" value="'.$l['submit_button'].'" name="changepass" class="flat-butt" id="submitftppass"/> &nbsp;<img id="createftppass" src="'.$theme['images'].'progress.gif" style="display:none">
				</div><br/>
			</div>	
		</form>
	</div>';
	softfooter();
}
?>