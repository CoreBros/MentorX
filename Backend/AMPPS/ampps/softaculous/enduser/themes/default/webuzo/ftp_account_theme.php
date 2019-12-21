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


function ftp_account_theme(){

	global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $done, $is_running;

	// For adding FTP User
	if(optGET('ajaxftp')){
		
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
	
	//check host
	if(optREQ('check_host')){
		
		if(!empty($done)){
			//Domain doesn't resolve to Webuzo
			echo '1'.$l['is_domain_resolve'];
			return true;			
		}else{
			//Domain resolve to Webuzo
			echo '0';
			return true;
		}
	}
	
	softheader($l['<title>']);

	echo '<div class="bg">
		<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
				
			// For msgbox MboxObject(fYes, fNo)
			var message_box = new MboxObject();
				
			$(document).ready(function(){
				// For creating FTP accounts 
				$("#submitftp").click(function(){
					$("#createftp").css("display", "");					
					$.ajax({
						type: "POST",
						url: window.location+"&ajaxftp=1",					
						data: $("#editform").serialize(),
						
						// Checking for error
						success: function(data){
							$("#createftp").css("display", "none");
							var result = data.substring(0,1);
							if(result == "1"){
								$_("login").value="";
								$_("newpass").value="";
								$_("conf").value="";
								$_("dir").value="";
								var msg = data.substring(1);
								message_box.show_message( "Done ",msg,2);
								check_pass_str_wuzo($("#newpass"), $("#pass-prog-bar"));
							}
							if(result == "0"){							
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
				
				//check host
				$.ajax({
					type: "GET",
					url: window.location+"&check_host=1",
					success: function(data){
						var result = data.substring(0,1);
						if(result == "1"){
							var msg = data.substring(1);
							$("#check_host_msg").append(msg);
							$("#check_host").show();
						}
					}
				});
			});
			
			var dir = false;
			function suggestdompath(domval){
				if(dir){
					return true;	
				}
				$_("dir").value = "www/"+$_("login").value;
			}
			
			function enableinput(){
				$_("quota_limit").disabled=false;
			}
			
			function disableinput(){
				$_("quota_limit").disabled=true;
			}
			
		// ]]></script>
		<form accept-charset="'.$globals['charset'].'" action="" method="post" name="ftp_account" id="editform" class="form-horizontal"><br />
			<div class="sai_main_head"><center><img src="'.$theme['a_images'].'addftp.png" />&nbsp;'.$l['ftp'].'</center></div><hr>';
	
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
			
			//Check host
			echo '
			<div class="row-fluid" style="display: none;" id="check_host">
				<div class="alert alert-warning text-center" style="padding:10px ; font-size: 15px" id="check_host_msg">
					<i class="fa sai-info fa-1x" style="color:#8a6d3b;vertical-align: middle;"></i>
				</div>
			</div>';
	
			echo '<div class="row">
				<div class="col-sm-5">
					<label class="sai_head" for="login">'.$l['loginname'].'</label>
				</div>
				<div class="col-sm-7">
					<div class="input-group">
						<input type="text" name="login" id="login" class="form-control" onkeyup="suggestdompath(this);" value="'.POSTval('login', '').'" />
						<span class="input-group-addon" style="background-color: white;"><span id="domainname">_'.$softpanel->user['domain'].'</span></span>
					</div>
				</div>
			</div><br />
			<div class="row">
				<div class="col-sm-5">
					<label class="sai_head" for="newpass">'.$l['new_pass'].'</label>
				</div>
				<div class="col-sm-6">
					<div class="input-group">
						<input type="password" name="newpass" id="newpass" class="form-control" onkeyup="check_pass_str_wuzo($(\'#newpass\'), $(\'#pass-prog-bar\'))" value="" />
						<span class="input-group-addon" style="padding: 4px 12px"  onclick="change_image(this, \'newpass\')">
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
					<a href="javascript: void(0);" onclick="rand_val=randstr_wuzo(10);$_(\'newpass\').value=rand_val;$_(\'conf\').value=rand_val;check_pass_str_wuzo($(\'#newpass\'), $(\'#pass-prog-bar\'));return false;" title="'.$l['randpass'].'"><img src="'.$theme['images'].'key.png" style="padding-top:9px;"/></a>
				</div>
			</div><br />
			<div class="row">
				<div class="col-sm-5">
					<label class="sai_head" for="conf">'.$l['retype_pass'].'</label>
				</div>
				<div class="col-sm-7">
					<input type="password" name="conf" id="conf" value="" class="form-control"/>
				</div>
			</div><br />
			<div class="row">
				<div class="col-sm-5">
					<label class="sai_head" for="quota">'.$l['quota'].'</label>
				</div>
				<div class="col-sm-7">
						<input type="radio" name="quota" id="radio1" value="unlimited" checked="checked" onchange="disableinput()" /><label for="radio1" class="" >'.$l['unlimited'].'</label>&nbsp;&nbsp;&nbsp;
						<input type="radio" name="quota" id="radio2" value="limited" onchange="enableinput()" />
					<input type="text" name="quota_limit" id="quota_limit" value="1000" disabled="disabled" /><label for="radio2" class="">'.$l['limited'].'</label>
				</div>
			</div><br />
			<div class="row">
				<div class="col-sm-5">
					<label class="sai_head" for="dir">'.$l['directory'].'</label><br/><label class="sai_exp">'.$l['path'].'</label>
				</div>
				<div class="col-sm-7">
					<div class="input-group">
						<span class="input-group-addon" style="background-color: white;"><span id="domainname">'.$softpanel->user['homedir'].'/</span></span>
						<input type="text" name="dir" id="dir" class="form-control" value="'.stripslashes(POSTval('dir', 'www/')).'" onfocus="" style="border-radius:0px 5px 5px 0px;"/>
					<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
					//Add an event handler
					$_("dir").onkeydown = function(){
						dir = true;
					}
					// ]]></script>
					</div>
				</div>
			</div><br/>
			<div class="row">
				<div class="col-sm-offset-5 col-sm-7">
					<input type="hidden" name="create_acc" value="1" />
					<input type="submit" style="cursor:pointer" value="'.$l['submit_button'].'" name="create_acc" class="flat-butt" id="submitftp" /> &nbsp;<img id="createftp" src="'.$theme['images'].'progress.gif" style="display:none">
				</div><br/>
			</div><br/>
		</form>
	</div><br/>';
	softfooter();
}
