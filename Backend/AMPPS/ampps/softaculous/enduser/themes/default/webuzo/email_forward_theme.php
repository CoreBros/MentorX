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

function email_forward_theme(){

	global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $done, $domain_list, $email_list, $domain_name;
	
	// For update
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
	
	// For delete
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
	// For adding email forward
	if(optGET('ajaxemail')){
		
		if(!empty($error)){			
			echo '0'.current($error);
			return false;
		}
		// Creating new table for display new DB
		if(!empty($done)){
			echo '1'.$l['change_final'];			
			show_email_users();
			return true;
		}
	}
		
	softheader($l['<title>']);
	
	echo '<div class="bg"><br/>
		<div class="sai_main_head"><center><img src="'.$theme['a_images'].'email_forward.png" />&nbsp;'.$l['email'].'</center></div><hr>';

		echo '<form accept-charset="'.$globals['charset'].'" action="" method="post" name="email_account" id="editform" class="form-horizontal">
			<div class="row">
				<div class="col-sm-5">
					<label class="sai_head" for="addemail">'.$l['loginname'].'</label>
				</div>
				<div class="col-sm-7">
					<div class="row">
						<div class="col-sm-5">
							<div class="input-group">
								<input type="text" name="addemail" id="addemail" class="form-control" value="" />
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
					<label class="sai_head" for="sendemail">'.$l['new_pass'].'</label>
				</div>
				<div class="col-sm-7"> 
					<input type="text" name="sendemail" id="sendemail" class="form-control" value="" />
				</div>
			</div><br/>
			<div class="row"> 
				<div class="col-sm-12">
					<img id="plus" onmouseover="plus_onmouseover();" onmouseout="plus_onmouseout();" onclick="toggle_advoptions();" src="'.$theme['images'].'plus.gif" />&nbsp;&nbsp;<span class="sai_head" onclick="toggle_advoptions();" style="cursor:pointer;">'.$l['adv_option'].'</span>
					<br/><br/>
					<div id="advoptions" style="display:none;">
						<div class="col-sm-5">
							<label class="sai_head" for="pipe_path">'.$l['pipe'].'</label>				
						</div>
						<div class="col-sm-7"> 
							<div class="input-group">
								<span class="input-group-addon" style="background-color: white;"><span id="domainname">'.$softpanel->user['homedir'].'/</span></span>
								<input type="text" name="pipe_path" id="pipe_path" class="form-control" value="" />
							</div>
						</div>
					</div>
				</div>
			</div><br/>
			<div class="row">
				<div class="col-sm-offset-5 col-sm-7">
					<input type="hidden" name="create_acc" value="1" />
					<input type="submit" style="cursor:pointer" value="'.$l['submit_button'].'" name="create_acc" class="flat-butt" id="submitemail" /> &nbsp;<img id="createmail" src="'.$theme['images'].'progress.gif" style="display:none">
				</div><br/>
			</div>
		</form>
		<br/>
		<center>
			<label class="sai_sub_head">'.$l['record_table'].' <span id="domain_file">'.$domain_name.'</span></label>
		</center>
		<div id="showrectab">';
			show_email_users();
	echo '</div>
	</div>

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
							$_("sendemail").value="";
							$_("addemail").value="";
							$_("pipe_path").value="";						
							var msg = data.substring(1,data.indexOf("<table"));
							var output = data.substring(data.indexOf("<table"));							
							message_box.show_message( "Done ",msg,2);														
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
	
		function toggle_advoptions(){
			if ($("#advoptions").is(":hidden")){
				$("#advoptions").slideDown("slow");
			}
			else{
				$("#advoptions").slideUp("slow");
			}
		}
	
		function plus_onmouseover(){
			$("#plus").attr("src", "'.$theme['images'].'plus_hover.gif");
		}
	
		function plus_onmouseout(){
			$("#plus").attr("src", "'.$theme['images'].'plus.gif");
		}
	// ]]></script>';
	
	softfooter();

}

function show_email_users(){

	global $globals, $l, $softpanel, $error, $email_list, $domain_name, $theme;

	//printig from file
	$email_list = $softpanel->reademailforward($domain_name);	

		echo '
		<table border="0" cellpadding="8" cellspacing="1" width="100%" class="table table-hover table-hover-moz td_font">
			<thead style="background:#EFEFEF;" class="sai_head2">
				<tr>
					<th width="40%">'.$l['email_user'].'</th>
					<th align="center"  width="40%">'.$l['email_forward'].'</th>
					<th style="text-align:right;">'.$l['option'].'</th>
				</tr>
			</thead>
			</tbody>';

			if(empty($email_list)){
				echo '<tr><td colspan=4><center><span>'.$l['no_email_fwd'].'</span></center></td></<tr>';
			}else{
				foreach ($email_list as $key => $value){
					$i =1;
					foreach($value as $k => $v ){
						if(!empty($v)){
						echo '<tr id="tr'.$key.'" >
								 <td><span id="em_user'.$key.'">'.$key.'@'.$domain_name.'</span></td>
								 <td><span id="em_user'.$key.'">'.$v.'</span></td>
								 <td style="text-align:right;">';
									echo '<img title="Delete" class="delete" id="did'.$key.'--'.$k.'" src="' . $theme['images'] . 'remove.gif" style="cursor:pointer" />
								 </td>
							</tr>';
						}
						$i++;
					}
				}
			}

			echo '
			</tbody>
		</table>
	
		<script language="javascript" type="text/javascript"><!-- // --><![CDATA[	
			// For msgbox MboxObject(fYes, fNo)
			var message_box = new MboxObject(deleteDomain,"");
			
			function deleteDomain(did){	
				var user_id = did.substring(3);
				$.ajax({				
					type: "POST",				
					url: window.location+"&domain_name='.$domain_name.'&ajaxdel=1&delete_record="+user_id,
					// checking for error
					success: function(data){
						var result = data.substring(0,1);					
						var msg = data.substring(1);
						if(result == "1"){
							var msg = data.substring(1,data.indexOf("<table"));
							var output = data.substring(data.indexOf("<table"));							
							message_box.show_message( "Done ",msg,2);														
							$("#showrectab").html(output);																														
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
					$("#change_note").css("display", "");
				});			
			});	
		// ]]></script>';
}
