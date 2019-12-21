<?php

//////////////////////////////////////////////////////////////
//===========================================================
// add_email_autoresponder_theme.php
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

function add_email_autoresponder_theme(){

	global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $done, $domain_list, $email_list, $domain_name, $mail_settings, $is_running, $email_auto_list, $iapps;
	
	// To update domains links
	if(optGET('ajaxdom')){
		show_email_users();
		return true;
	}
	
	// For Deleting Auto responses for email account
	if(optGET('ajaxdel')){
		if(!empty($error)){
			echo '0'.current($error);
			return false;
		}
		if(!empty($done)){
			echo '1'.$l['delete'];
			show_email_users();
			return true;
		}
	}
	
	// For adding Email Autoresponder
	if(optGET('ajaxadd')){
		
		if(!empty($error)){
			echo '0'.current($error);
			return false;
		}
		
		// Creating new table to display the list of email autoresponders
		if(!empty($done)){
			echo '1'.$l['change_final'];
			show_email_users();
			return true;
		}
		
	}
	
	softheader($l['<title>']);

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
	
			echo '<form accept-charset="'.$globals['charset'].'" action="" method="post" name="add_email_autoresponder" id="editform" class="form-horizontal">
				<div class="row">
					<div class="col-sm-5">
						<label class="sai_head" for="login_name">'.$l['loginname'].'</label>
					</div>
					<div class="col-sm-7">
						<div class="row">
							<div class="col-sm-5"> 
								<div class="input-group">
									<input type="text" name="login_name" id="login_name" class="form-control" value="'.POSTval('login_name', '').'" />
									<span class="input-group-addon">@</span>
								</div>
							</div>
							<div class="col-sm-7">
								<select class="form-control" name="selectdomain" id="selectdomain" >';
									foreach ($domain_list as $key => $value){
										if($domain_name == $key){
											echo '<option value='.$key.' selected=selected >'.$key.'</option>';
										}else{
											echo '<option value='.$key.'>'.$key.'</option>';
										}
									}
								echo '</select>&nbsp;<img id="changedom" src="'.$theme['images'].'progress.gif" style="display:none">
							</div>
						</div>
					</div><br/>
				</div>	

				<div class="row">
					<div class="col-sm-5">
						<label class="sai_head" for="mail_subject">'.$l['mailsubject'].'</label>
						<span class="sai_exp2">('.$l['optional'].')</span>
					</div>
					<div class="col-sm-7">
						<input type="text" class="form-control" name="mail_subject" id="mail_subject" size="2" value="'.POSTval('mail_subject', '').'" />
					</div>
				</div><br/>
				
				<div class="row">
					<div class="col-sm-5">
						<label class="sai_head" for="mail_body">'.$l['mailbody'].'</label>
					</div>
					<div class="col-sm-7">
						<textarea name="mail_body" id="mail_body" class="form-control" rows="10" cols="70"></textarea>
					</div>
				</div><br/>
				
				<div class="row">
					<div class="col-sm-offset-5 col-sm-7">
						<input type="hidden" name="add_autoresponder" value="1" />
						<input type="submit" style="cursor:pointer" value="'.$l['submit_button'].'" name="add_autoresponder" class="flat-butt" id="add_autoresponder" /> &nbsp;<img id="create_autoresponder" src="'.$theme['images'].'progress.gif" style="display:none">
					</div><br/>
				</div>		
			</form><br/>
			<center>
			<br/>
				<label class="sai_sub_head">'.$l['record_table'].' <span id="domain_file">'.$domain_name.'</span></label>
			<br/>
			</center>
			<div id="showrectab">';
				show_email_users();
			echo '</div>';
		}
	}
		
	echo '</div>

	<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
		$(document).ready(function(){
			$("#selectdomain").change(function(){
				$("#changedom").css("display", "");
				var domain = $(this).val();
				$.ajax({				
					type: "POST",				
					url: window.location+"&ajaxdom=1&domain="+domain,
					success: function(data){
						$("#changedom").css("display", "none");
						$("#showrectab").html(data);
						$("#domain_file").html(domain);
					}															  
				});	
			});
			
			// For creating email accounts 
			$("#add_autoresponder").click(function(){
				$("#create_autoresponder").css("display", "");					
				$.ajax({
					type: "POST",
					url: window.location+"&ajaxadd=1",					
					data: $("#editform").serialize(),
					
					// Checking for error
					success: function(data){
						$("#create_autoresponder").css("display", "none");
						var result = data.substring(0,1);
						if(result == "1"){
							$_("login_name").value="";
							$_("mail_subject").value="";
							$_("mail_body").value="";
							var msg = data.substring(1,data.indexOf("<table"));
							var output = data.substring(data.indexOf("<table"));							
							message_box.show_message( "Done ",msg,2);
							$("#showrectab").html(output);														
						}
						if(result == "0"){							
							$("#create_autoresponder").css("display", "none");
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
	softfooter();
}

function show_email_users(){

	global $globals, $l, $softpanel, $error, $email_list, $domain_name, $theme, $email_auto_list;

	$email_list = $softpanel->reademailusers($domain_name);
	$email_auto_list = $softpanel->read_email_autoresponders($domain_name);

		echo'
		<table border="0" cellpadding="8" cellspacing="1" width="100%" class="table table-hover table-hover-moz td_font">
		<thead style="background:#EFEFEF;" class="sai_head2">	
			<tr>
				<th>'.$l['email_user'].'</th>
				<th colspan="5" style="text-align:right">'.$l['option'].'</th>
			</tr>
		</thead>
		<tbody>';

		$i = 1;

		if(empty($email_auto_list)){
			echo '<tr><td colspan=4><center><span>'.$l['no_email_config'].'</span></center></td></<tr>';
		}else{
			foreach ($email_list as $key => $value){
				foreach ($email_auto_list as $k => $v){
					if($k == $key){
						echo '<tr id="tr'.$i.'" >
							<td>
								<input type="hidden" id="hdn_user'.$i.'" value="'.$k.'" />
								<span id="em_user'.$k.'">'.$key.'@'.$domain_name.'</span>
							</td>
							<td width="1%">
								<a href="'.$globals['ind'].'act=edit_email_autoresponder&domain='.$domain_name.'&user='.$k.'" title="'.$l['edit'].'"><img src="'.$theme['images'].'editdetail.gif" style="cursor:pointer" />
							</td>
							<td width="1%">
								<img title="Delete" class="delete" id="did'.$i.'" src="' . $theme['images'] . 'remove.gif" style="cursor:pointer" /><img id="delprog'.$i.'" src="'.$theme['images'].'progress.gif" style="display:none">
							</td>
						</tr>';
						$i++;
					}
				}
			}
		}


		echo '</tbody>';
		echo '</table>
		
		<script language="javascript" type="text/javascript"><!-- // --><![CDATA[	
			
			// For msgbox MboxObject(fYes, fNo)
			var message_box = new MboxObject(deleteDomain,"");
			
			function deleteDomain(did){
				var user_id = did.substring(3);
				$("#"+did).css("display", "none");
				$("#delprog"+user_id).css("display", "");
				var hidn_user_val = $("#hdn_user"+user_id).val();
				var delete_record = hidn_user_val;
				$.ajax({				
					type: "POST",				
					url: window.location+"&ajaxdel=1",
					data: {"del_domain_name":"'.$domain_name.'", "delete_record": delete_record},
					// checking for error
					success: function(data){
						$("#delprog"+user_id).css("display", "none");
						var result = data.substring(0,1);					
						if(result == "1"){
							var msg = data.substring(1,data.indexOf("<table"));
							var output = data.substring(data.indexOf("<table"));							
							message_box.show_message("Delete ",msg,2);
							$("#showrectab").html(output);
							
						}
						if(result == "0"){
							var msg = data.substring(1);
							message_box.show_message( "Error",msg,1);
						}
					},				
					error: function(request,error) {
						message_box.show_message("Error",\''.$l['connect_error'].'\',1);					
						$("#delprog"+user_id).css("display", "none");
						$("#"+did).css("display", "");
					}
				});					
			}
			
			$(document).ready(function(){	
				$(".sai_altrowstable tr").mouseover(function(){
					var old_class = $(this).attr(\'class\');		
					$(this).attr("class", \'sai_tr_bgcolor\');		
					$(this).mouseout(function(){
					$(this).attr(\'class\', old_class);
					});
				});
				
				// For deleting record
				$(".delete").click(function() {	
					var did = $(this).attr(\'id\');
					message_box.delete_message (\'Warning\',\''.$l['record_del_conf'].'\',did);			
				});		
			});	
		// ]]></script>';

}
