<?php

//////////////////////////////////////////////////////////////
//===========================================================
// email_account_theme.php
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

function email_account_theme(){

	global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $done, $domain_list, $email_list, $domain_name, $mail_settings, $is_running;
	
	// To change the password
	if(optGET('ajaxup')){
		if(!empty($error)){
			echo '0'.current($error);
			return false;
		}
		if(!empty($done)){
			echo '1'.$l['changed_password'];
			return true;
		}
	}
	
	// To update domains links
	if(optGET('ajaxdom')){
		show_email_users();
		return true;
	}
	
	// For Delete
	if(optGET('ajaxdel')){
		if(!empty($error)){
			echo '0'.current($error);
			return false;
		}
		if(!empty($done)){
			echo '1'.$l['delete'];
			return true;
		}
	}
	
	// For adding Email User
	if(optGET('ajaxemail')){
		
		if(!empty($error)){
			echo '0'.current($error);
			return false;
		}
		
		// Creating new table to display the list of email accounts
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
		echo '<div class="sai_main_head"><center><img src="'.$theme['a_images'].'email_account.png" />&nbsp;'.$l['email'].'</center></div><hr>';
	
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
	
		echo '<form accept-charset="'.$globals['charset'].'" action="" method="post" name="email_account" id="editform" class="form-horizontal">
			<div class="row">
				<div class="col-sm-5">
					<label class="sai_head" for="login">'.$l['loginname'].'</label>
				</div>
				<div class="col-sm-7">
					<div class="row">
						<div class="col-sm-5"> 
							<div class="input-group">
								<input type="text" name="login" id="login" class="form-control" value="'.POSTval('login', '').'" />
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
				</div>
			</div><br/>
			
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
				<div class="col-sm-7">
					<input type="password" name="conf" id="conf" class="form-control" value="" />
				</div>
			</div><br/>
			<div class="row">
				<div class="col-sm-offset-5 col-sm-7">
					<input type="hidden" name="create_acc" value="1" />
					<input type="submit" style="cursor:pointer" value="'.$l['submit_button'].'" name="create_acc" class="flat-butt" id="submitemail" /> &nbsp;<img id="createmail" src="'.$theme['images'].'progress.gif" style="display:none">
				</div><br/>
			</div>
		</form><br/>
		
		<div class="row">
			<div class="col-sm-12" onclick="toggle_mailsett();">
				<img id="plus_mailsett" src="'.$theme['images'].'plus.gif" />&nbsp;&nbsp;<span class="sai_head" style="cursor:pointer;">'.$l['mail_settings'].'</span><br/><br/>
				<div id="mail_settings" style="display:none;">
					<div class="col-sm-12 well">
						<div class="row">
							<div class="col-sm-5">
								<label class="sai_head">Primary IP - </label>
							</div>
							<div class="col-sm-7">
								<label>'.$mail_settings['primary_ip'].'</label>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-5">
								<label class="sai_head">SMTP Server - </label>
							</div>
							<div class="col-sm-7">
								<label>'.$mail_settings['smtp']['server'].'</label>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-5">
								<label class="sai_head">SMTP Port - </label>
							</div>
							<div class="col-sm-7">
								<label>'.$mail_settings['smtp']['port'].'</label>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-5">
								<label class="sai_head">IMAP Server - </label>
							</div>
							<div class="col-sm-7">
								<label>'.$mail_settings['imap']['server'].'</label>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-5">
								<label class="sai_head">IMAP Port - </label>
							</div>
							<div class="col-sm-7">
								<label>'.$mail_settings['imap']['port'].'</label>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><br/>
		<center>
		<br/>
			<label class="sai_sub_head">'.$l['record_table'].' <span id="domain_file">'.$domain_name.'</span></label>
		<br/>
		</center>
		<div id="showrectab">';
			show_email_users();
		echo '</div>';
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
			$("#submitemail").click(function(){
				$("#createmail").css("display", "");					
				$.ajax({
					type: "POST",
					url: window.location+"&ajaxemail=1",					
					data: $("#editform").serialize(),
					
					// Checking for error
					success: function(data){
						$("#createmail").css("display", "none");
						var result = data.substring(0,1);
						if(result == "1"){
							$_("login").value="";
							$_("newpass").value="";
							$_("conf").value="";
							var msg = data.substring(1,data.indexOf("<table"));
							var output = data.substring(data.indexOf("<table"));							
							message_box.show_message( "Done ",msg,2);
							check_pass_str_wuzo($("#newpass"), $("#pass-prog-bar"));
							$("#showrectab").html(output);														
						}
						if(result == "0"){							
							$("#createemail").css("display", "none");
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
		
		function toggle_mailsett(){
			if ($("#mail_settings").is(":hidden")){
				$("#mail_settings").slideDown("slow");
			}
			else{
				$("#mail_settings").slideUp("slow");
			}
		}
		
	// ]]></script>';
	softfooter();
}

function show_email_users(){

	global $globals, $l, $softpanel, $error, $email_list, $domain_name, $theme;

	// Printing from the File
	$email_list = $softpanel->reademailusers($domain_name);

		// When no email accounts were present this was still visible

		echo'
		<table border="0" cellpadding="8" cellspacing="1" width="100%" class="table table-hover table-hover-moz td_font">
		<thead style="background:#EFEFEF;" class="sai_head2">	
			<tr>
				<th>'.$l['email_user'].'</th>
				<th>'.$l['msg_count'].'</th>
				<th>'.$l['space'].'</th>
				<th colspan="5" style="text-align:right">'.$l['option'].'</th>
			</tr>
		</thead>
		<tbody>';

		$i = 1;

		if(empty($email_list)){
			echo '<tr><td colspan=4><center><span>'.$l['no_email_config'].'</span></center></td></<tr>';
		}else{
			foreach ($email_list as $key => $value){
				echo '<tr id="tr'.$i.'" >
					<td>
						<span id="em_user'.$key.'">'.$email_list[$key]['user'].'</span>
					</td>
					<td>'.$email_list[$key]['count'].'</td>
					<td>'.(empty($email_list[$key]['space']) ? '-' : $email_list[$key]['space']).'</td>
					<td align="center">
						<label id="lbl_pass'.$i.'" style="display:none;">'.$l['change_pass'].' :&nbsp;</label><input type="password" id="chng_pass'.$i.'" style="width:120px; align:right; display:none;" >
						<input type="hidden" id="hdn'.$i.'" value="'.$i.'" />
						<input type="hidden" id="hdn_user'.$i.'" value="'.$key.'" />
					</td>
					<td width="1%">
						<img title="Cancel" class="cancel" id="cid'.$i.'" src="'.$theme['images'].'del.gif" style="display:none; cursor:pointer;"  />
					</td>
					<td width="1%">
						<img title="Change Password" class="edit" id="eid'.$i.'" src="'.$theme['images'].'editdetail.gif" style="cursor:pointer" />
					</td>
					<td width="1%">
						<a href="javascript:void(0)" onclick="is_app_inst(36, \'rainloop\'); return;"><img title="Access Email" class="Access Email" src="' . $theme['images'] . 'access_email.gif" /></a>
					</td>
					<td width="1%">
						<img title="Delete" class="delete" id="did'.$i.'" src="' . $theme['images'] . 'remove.gif" style="cursor:pointer" />
					</td>
				</tr>';
				$i++;
			}
		}


		echo '</tbody>';
		echo '</table>
		
		<script language="javascript" type="text/javascript"><!-- // --><![CDATA[	
			
			// For msgbox MboxObject(fYes, fNo)
			var message_box = new MboxObject(deleteDomain,"");
			
			function deleteDomain(did){	
				var user_id = did.substring(3);
				var hidn_user_val = $("#hdn_user"+user_id).val();
				var delete_record = hidn_user_val;	
				$.ajax({				
					type: "POST",				
					url: window.location+"&domain_name='.$domain_name.'&ajaxdel=1&delete_record="+delete_record,
					// checking for error
					success: function(data){
						var result = data.substring(0,1);					
						var msg = data.substring(1);
						if(result == "1"){
							message_box.show_message("Delete ",msg,2);
							//Added to remove the tr after fadeout
							$("#tr"+user_id).fadeOut(2000,function(){
								row_parent = $(this).parent();
								$(this).remove();
								if(row_parent.children().length == 0){
									row_parent.html("<tr><td colspan=4><center><span>'.$l['no_email_config'].'</span></center></td></<tr>");
								}
							});
						}
						if(result == "0"){
							message_box.show_message( "Error ",msg,1);																																			
						}
					},				
					error: function(request,error) {
						message_box.show_message("Error",\''.$l['connect_error'].'\',1);					
					}
				});					
			}
			
			function mod_escape(value) {
			  value = escape(value);
			  return value.replace(/\+/g, \'%2B\');
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
				
				// For cancel
				$(".cancel").click(function() {
					var id = $(this).attr(\'id\');
					id = id.substr(3);
					$("#cid"+id).css("display", "none");
					$("#chng_pass"+id).css("display", "none");
					$("#lbl_pass"+id).css("display", "none");
					$(\'#eid\'+id).attr("src","'.$theme['images'].'editdetail.gif");
				});
				
				// For editing record
				$(".edit").click(function() {
					
					var id = $(this).attr(\'id\');
					id = id.substr(3);
					var hidn_val = $("#hdn"+id).val();
					
					var edit_hidn_val = $("#hdn_user"+id).val();
					
					$("#cid"+hidn_val).css("display", "");
					$("#chng_pass"+hidn_val).css("display", "");
					$("#lbl_pass"+hidn_val).css("display", "");
					
					var edit_record = edit_hidn_val;
					
					if($(this).attr(\'src\') == "'.$theme['images'].'save.gif"){
						var cpass = mod_escape($(\'#chng_pass\'+hidn_val).val());
						$.ajax({
							type: "POST",
							url: window.location+"&domain_name='.$domain_name.'&ajaxup=1&edit_record="+edit_record,
							data: "cpass="+cpass,
							// Checking for error
							success: function(data){
								var result = data.substring(0,1);
								var msg = data.substring(1);
								if(result == "0"){
									message_box.show_message( "Error ",msg,1);
									$(\'#eid\'+hidn_val).attr("src","'.$theme['images'].'editdetail.gif");
								}
								if(result == "1"){
									message_box.show_message( "Done ",msg,2);
									$(\'#chng_pass\'+hidn_val).html($("#chng_pass"+hidn_val).val());
									$(\'#eid\'+hidn_val).attr("src","'.$theme['images'].'editdetail.gif");
									$("#chng_pass"+hidn_val).css("display", "none");
									$("#lbl_pass"+id).css("display", "none");
									$("#cid"+id).css("display", "none");
								}
							},
							error: function() {
								message_box.show_message("Error",\''.$l['connect_error'].'\',1);
							}
						});
						$(this).attr("src","'.$theme['images'].'progress.gif");
					}else{
						$(this).attr("src","'.$theme['images'].'save.gif");
						$("#chng_pass"+hidn_val)
							.val($("#chng_pass"+hidn_val).text().substring(0, $("#chng_pass"+hidn_val).text().length - 1))
							.css("display", "")
							.focus();
					}
				});		
			});	
		// ]]></script>';

}
