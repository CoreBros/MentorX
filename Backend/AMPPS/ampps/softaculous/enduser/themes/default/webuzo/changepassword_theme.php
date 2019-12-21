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

function changepassword_theme(){
	
	global $theme, $globals, $kernel, $user, $l, $error, $done, $onboot, $user_name, $iapps, $isql, $softpanel;

	// For changing password
	if(optGET('ajaxpass')){
		
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

	echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[

		var message_box = new MboxObject();	
		
		function submit_pass(ptype){
			
			var pid_val = $("#"+ptype+"pass").val();
			$("#create"+ptype+"pass").css("display", "");					
			$.ajax({
				type: "POST",
				url: window.location+"&ajaxpass=1",					
				data: "change"+ptype+"pass=1&"+ptype+"pass="+pid_val,
				
				// Checking for error
				success: function(data){
					$("#create"+ptype+"pass").css("display", "none");
					var result = data.substring(0,1);
					if(result == "1"){
						$_(ptype+"pass").value="";							
						var msg = data.substring(1);
						message_box.show_message( "Done ",msg,2);
						check_pass_str_wuzo($("#"+ptype+"pass"), $("#pass-prog-bar_"+ptype))
					}
					if(result == "0"){	
						$("#create"+ptype+"pass").css("display", "none");
						var msg = data.substring(1);
						message_box.show_message( "Error",msg,1);
					}
				},
				error: function() {
					message_box.show_message("Error",\''.$l['connect_error'].'\',1);						
				}															
			});
			return false;
		}

		$(document).ready(function(){
			
			// For changing password	
			$("#submitpass").click(function(){
				$("#createpass").css("display", "");					
				$.ajax({
					type: "POST",
					url: window.location+"&ajaxpass=1&changepass=1",					
					data: $("#editform").serialize(),
					
					// Checking for error
					success: function(data){
						$("#createpass").css("display", "none");
						var result = data.substring(0,1);
						if(result == "1"){
							$_("newpass").value="";
							$_("conf").value="";
							var msg = data.substring(1);
							message_box.reload = 0;
							message_box.show_message( "Done ",msg,2);																					
							message_box.reload = 1;
							window.location = "'.$globals['index'].'act=logout";										
						}
						if(result == "0"){	
							$("#createpass").css("display", "none");
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
	<div class="bg">
		<form accept-charset="'.$globals['charset'].'" action="" method="post" name="changepass" id="editform" class="form-horizontal"><br />
			<div class="sai_main_head"><center><img src="'.$theme['a_images'].'changepassword.png" />&nbsp;'.$l['change_pass'].'</center></div><hr>
			<div class="row">
				<div class="col-sm-5">
					<label class="sai_head" for="newpass">'.$l['new_pass'].'</label>
				</div>
				<div class="col-sm-6">
					<div class="input-group">
						<input type="password" name="newpass" id="newpass" class="form-control" onkeyup="check_pass_str_wuzo($(\'#newpass\'), $(\'#pass-prog-bar\'))" value="" />
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
			<div class="row">
				<div class="col-sm-5">
					<label class="sai_head" for="conf">'.$l['retype_pass'].'</label>
				</div>
				<div class="col-sm-6">
					<input type="password" name="conf" id="conf" class="form-control" value="" />
				</div>
			</div><br/>
			<div class="row">
				<div class="col-sm-offset-5 col-sm-7">
					<input type="submit" style="cursor:pointer" value="'.$l['submit_button'].'" name="changepass" class="flat-butt" id="submitpass"/> &nbsp;<img id="createpass" src="'.$theme['images'].'progress.gif" style="display:none">
				</div><br/>
			</div><br/>
		</form>
	</div><br />';

	echo '<div class="bg">
		<div class="sai_main_head"><center><img src="'.$theme['a_images'].'changepassword.png" width="32"/>&nbsp;'.$l['filemanager'].'</center></div><hr>
		<div class="row">
			<div class="col-sm-5">
				<label class="sai_head">'.$l['username'].'</label>
			</div>
			<div class="col-sm-7">
				<label class="sai_head">'.$user_name.'</label>
			</div>
		</div><br/>
		<div class="row">
			<div class="col-sm-5">
				<label class="sai_head" for="filepass">'.$l['fpassword'].'</label>
			</div>
			<div class="col-sm-6">
					<div class="input-group">
						<input type="password" name="filepass" id="filepass" class="form-control" onkeyup="check_pass_str_wuzo($(\'#filepass\'), $(\'#pass-prog-bar_file\'))" value="" />
						<span class="input-group-addon" style="padding: 4px 12px" onclick="change_image(this, \'filepass\')">
						<img src="'.$theme['images'].'eye.png">
						</span>
					</div>
					<div class="progress">
						<div class="progress-bar progress-bar-danger" id="pass-prog-bar_file" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0">
							<span class="sr-only">0% Complete (danger)</span>
							<span id="progress-bar-text" style="color:#000;"></span>
						</div>
					</div>
				</div>
				<div class="col-sm-1">
					<a href="javascript: void(0);" onclick="$_(\'filepass\').value=randstr_wuzo(10);check_pass_str_wuzo($(\'#filepass\'), $(\'#pass-prog-bar_file\'));return false;" title="'.$l['randpass'].'">
						<img src="'.$theme['images'].'key.png" style="padding-top:9px;"/>
					</a>
				</div>
			</div><br/>
		<div class="row">
			<div class="col-sm-offset-5 col-sm-7">
				<input type="submit" style="cursor:pointer" value="'.$l['submit_button'].'" name="changefilepass" class="flat-butt" id="submitfilepass" onclick="submit_pass(\'file\')"/> &nbsp;<img id="createfilepass" src="'.$theme['images'].'progress.gif" style="display:none">
			</div><br/>
		</div><br/>
	</div><br />';

	if(!empty($iapps['37_1']) || !empty($iapps['57_1']) || !empty($iapps['94_1']) || !empty($iapps['145_1'])){
	
		echo '<div class="bg">
			<div class="sai_main_head"><center><img src="'.$theme['a_images'].'changepassword.png" width="32" />&nbsp;'.$l['tomcat'].'</center></div><hr>
			<div class="row">
				<div class="col-sm-5">
					<label class="sai_head">'.$l['username'].'</label>
				</div>
				<div class="col-sm-7">
					<label class="sai_head">'.$user_name.'</label>
				</div>
			</div><br/>
			<div class="row">
				<div class="col-sm-5">
					<label class="sai_head" for="tomcatpass">'.$l['fpassword'].'</label>
				</div>
				<div class="col-sm-6">
					<div class="input-group">
						<input type="password" name="tomcatpass" id="tomcatpass" class="form-control" onkeyup="check_pass_str_wuzo($(\'#tomcatpass\'), $(\'#pass-prog-bar_tomcat\'))" value="" />
						<span class="input-group-addon" style="padding: 4px 12px" onclick="change_image(this, \'tomcatpass\')">
						<img src="'.$theme['images'].'eye.png">
						</span>
					</div>
					<div class="progress">
						<div class="progress-bar progress-bar-danger" id="pass-prog-bar_tomcat" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0">
							<span class="sr-only">0% Complete (danger)</span>
							<span id="progress-bar-text" style="color:#000;"></span>
						</div>
					</div>
				</div>
				<div class="col-sm-1">
					<a href="javascript: void(0);" onclick="$_(\'tomcatpass\').value=randstr_wuzo(10);check_pass_str_wuzo($(\'#tomcatpass\'), $(\'#pass-prog-bar_tomcat\'));return false;" title="'.$l['randpass'].'">
						<img src="'.$theme['images'].'key.png" style="padding-top:9px;"/>
					</a>
				</div>
			</div><br/>
			<div class="row">
				<div class="col-sm-offset-5 col-sm-7">
					<input type="submit" style="cursor:pointer" value="'.$l['submit_button'].'" name="changetomcatpass" class="flat-butt" id="submittomcatpass" onclick="submit_pass(\'tomcat\')"/> &nbsp;<img id="createtomcatpass" src="'.$theme['images'].'progress.gif" style="display:none">
				</div><br/>
			</div><br/>
		</div><br />';
	}
	
	if(!empty($isql)){
	
		echo '<div class="bg">
			<div class="sai_main_head"><center><img src="'.$theme['a_images'].'changepassword.png" width="32" />&nbsp;'.$l['sql'].'</center></div><hr>
			<div class="row">
				<div class="col-sm-5">
					<label class="sai_head">'.$l['username'].'</label>
				</div>
				<div class="col-sm-7">
					<label class="sai_head">root</label>
				</div>
			</div><br/>
			<div class="row">
				<div class="col-sm-5">
					<label class="sai_head" for="sqlpass">'.$l['fpassword'].'</label>
				</div>
				<div class="col-sm-6">
					<div class="input-group">
						<input type="password" name="sqlpass" id="sqlpass" class="form-control" onkeyup="check_pass_str_wuzo($(\'#sqlpass\'), $(\'#pass-prog-bar_sql\'))" value="" />
						<span class="input-group-addon" style="padding: 4px 12px" onclick="change_image(this, \'sqlpass\')">
						<img src="'.$theme['images'].'eye.png">
						</span>
					</div>
					<div class="progress">
						<div class="progress-bar progress-bar-danger" id="pass-prog-bar_sql" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0">
							<span class="sr-only">0% Complete (danger)</span>
							<span id="progress-bar-text" style="color:#000;"></span>
						</div>
					</div>
				</div>
				<div class="col-sm-1">
					<a href="javascript: void(0);" onclick="$_(\'sqlpass\').value=randstr_wuzo(10);check_pass_str_wuzo($(\'#sqlpass\'), $(\'#pass-prog-bar_sql\'));return false;" title="'.$l['randpass'].'">
						<img src="'.$theme['images'].'key.png" style="padding-top:9px;"/>
					</a>
				</div>
			</div><br/>
			<div class="row">
				<div class="col-sm-offset-5 col-sm-7">
					<button class="flat-butt" style="cursor:pointer" id="submitsqlpass" onclick="submit_pass(\'sql\')">'.$l['submit_button'].'</button> &nbsp;<img id="createsqlpass" src="'.$theme['images'].'progress.gif" style="display:none">
				</div><br/>
			</div><br/>
		</div><br />';
	}
	softfooter();
}

?>