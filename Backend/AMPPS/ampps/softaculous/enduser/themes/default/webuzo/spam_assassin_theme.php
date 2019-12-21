<?php 
	
//////////////////////////////////////////////////////////////
//===========================================================
// spam_assassin_theme.php
//===========================================================
// SOFTACULOUS 
// Version : 2.6.8
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Jignesh Sawant
// Date:       10th Jan 2018
// Time:       15:00 hrs
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
	
function spam_assassin_theme(){
	
	global $user, $globals, $l, $theme, $softpanel, $done, $error, $type;
	
	if(optREQ('add_email')){
		if(!empty($error)){
			echo '0'.current($error);
			return false;
		}
		if(!empty($done)){
			echo '1';		//If all Email ids are added
			show_table($type);
			return true;								
		}
	}
	
	if(optREQ('remove')){
		if(!empty($error)){
			echo '0'.current($error);
			return false;
		}
			if(!empty($done)){
			echo '1';
			return true;
		}
	}
		
	softheader($l['title']);
		
	echo '<style>
	.ui_titlebar {
		padding: 0.4em 1em;
		background-color: #CCCCCC;
		border: 1px solid #AAAAAA;
		color: #222222;
		font-weight: bold;
		border-radius: 4px;
	}	
	.sai_popup {
		position:fixed;
		background:#FFFFFF;
		border:#666 1px solid;
		display:none;
		z-index:10000;
		min-height:200px;
		padding:5px;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
	}
	.close {
		float:right;
		position:relative;
		z-index:99999;
		margin:3px 6px 0;
	}
	a.selected {
		border-radius: 5px;
		border :2px solid #B8B8B8;			
		background: #EFEFEF;		
		padding: 8px;		
		font-size:18px;
		color:#333333;
		margin-top:20px;
		margin-bottom:5px;
		font-family: "Lucida Grande","Lucida Sans Unicode",Helvetica,Arial,Verdana,sans-serif;		
	}	
	.heading_a{
		border-radius: 5px;
		border :2px solid  #FFFFFF;			
		background: #FFFFFF;
		padding: 8px;	
		font-size:18px;
		color:#333333;
		margin-top:20px;
		margin-bottom:5px;
		font-family: "Lucida Grande","Lucida Sans Unicode",Helvetica,Arial,Verdana,sans-serif;
	}
	.spam_list{
		width:100%;
		float: center;
		padding:20px;
	}
	#panel-heading-part{
		background-color: #FFFFFF;
		border-bottom: 0px solid #DDD;
	}
	#panel-background{
		border-color: #FFFFFF;
		box-shadow: 0px 0px 0px #ffffff;
		height:58px;
		border-bottom: 0px solid #DDD;
		background-color: #DDD;
	}
	.no-border-bottom{
		border-bottom: 0px solid #DDD;
	}
	.tab-center{
		margin: 0 auto;
		background-color: #FFFFFF;
	}
	#panel-body-part{
		border-top:2px solid #DDD; 
		width:100%;
	}
	.with-nav-tabs.panel-default .nav-tabs > li > a,
	.with-nav-tabs.panel-default .nav-tabs > li > a:hover,
	.with-nav-tabs.panel-default .nav-tabs > li > a:focus {
	color: #777;
	}
	.with-nav-tabs.panel-default .nav-tabs > .open > a,
	.with-nav-tabs.panel-default .nav-tabs > .open > a:hover,
	.with-nav-tabs.panel-default .nav-tabs > .open > a:focus,
	.with-nav-tabs.panel-default .nav-tabs > li > a:hover,
	.with-nav-tabs.panel-default .nav-tabs > li > a:focus {
	color: #777;
	background-color: #DDD;
	border-color: transparent;
	}
	.with-nav-tabs.panel-default .nav-tabs > li.active > a,
	.with-nav-tabs.panel-default .nav-tabs > li.active > a:hover,
	.with-nav-tabs.panel-default .nav-tabs > li.active > a:focus {
	color: #555;
	background-color: #DDD;
	border-color: #ccc;
	}
	@media screen and (min-width:320px) and (max-width: 560px) {
		.sai_popup{
			top: 50%;
			left: 50%;
			width:80%;
		}
		ul li {
			width:100%;
		}
		#panel-body-part{
			margin-top:250px;
		}
	}
	@media screen and (min-width:560px) and (max-width: 1030px) {
		ul li {
			width:50%;
		}
		#panel-body-part{
			margin-top:100px;
		}		
	}			
	</style>';
		
	echo '<div class="bg" style="padding:0px;"><br/>
		<div class="row text-center sai_main_head"><img src="'.$theme['a_images'].'spamassassin.png" class="webu_head_img" width="50"/>&nbsp; '.$l['title'].'</div>';
		
	echo '
		<div class="panel with-nav-tabs panel-default" id="panel-background"> 
			<div class="panel-heading" id="panel-heading-part">
				<ul class="nav nav-tabs no-border-bottom tab-center">
					<li align="center" id="black_list"><a href="#black_list_tab" data-toggle="tab" class="heading_a" style="text-decoration:none">'.$l['black_list_head'].'</a></li>
					<li align="center" id="white_list"><a href="#white_list_tab" data-toggle="tab" class="heading_a"  style="text-decoration:none">'.$l['white_list_head'].'</a></li>				
				</ul>
			</div>
		</div>

		<div class="panel-body" id="panel-body-part"><br/>
			<div class="tab-content" style="height: auto;">
				<div class="tab-pane fade" id="black_list_tab">
					<div class="row">
						<div class="col-sm-5">
							<label class="sai_head" style="font-size:15px;" for="blacklist_email_id">'.$l['email_id'].'</label>
							<br/><br/>
							<span class="sai_exp2" style="font-size:14px">'.$l['email_format'].'</span><br/>
							<span class="sai_exp2" style="font-size:14px">
								<b>'.$l['single'].':</b>
								<span> user@domain.com</span><br/>
								<b>'.$l['multiple'].':</b>
								<span> user1@domain1.com, user2@domain2.com</span><br/>
								<b>'.$l['blacklist_domain'].':</b>
								<span> *@domain.com</span>
							</span>
						</div>
						<div class="col-sm-6">
							<input type="email" name="blacklist_email_id" id="blacklist_email_id" class="form-control" value="" style="border-radius:0; height:35px;" /><br/>
						</div>
					</div></br>
					<div class="row">
						<div class="col-sm-offset-5 col-sm-6">
							<input type="button" class="flat-butt" id="btn_blacklist" style="cursor:pointer" value="'.$l['blacklist_email'].'" onclick="add_email_id(this);" /> &nbsp;<img id="blacklist_email_add" src="'.$theme['images'].'progress.gif" style="display:none">
						</div>
					</div><hr>
					<div class="row">
						<div class="col-sm-12">
							<div id="blacklist_emails" class="spam_list" >';
								show_table("blacklist");
							echo '</div>
						</div>
					</div></br>
					<div class="row">						
						<div class="col-sm-offset-8 col-sm-4">
							<p class="text-right">
								<label for="multi_blacklist_emails_del">'.$l['with_selected'].': </label>
								<select name="multi_blacklist_emails_del" id="multi_blacklist_emails_del">
									<option value="0">------</option>
									<option value="multi_rem">'.$l['remove_email_ids'].'</option>
								</select>
								<input type="button" id="blacklist_emails_del" onclick=\'onGo(this.id);\' class="flat-butt" value="'.$l['go'].'"><br />
							</p>
						</div>
					</div>		
					</div>
					
				<div class="tab-pane fade" id="white_list_tab">
					<div class="row">
						<div class="col-sm-5">
							<label class="sai_head" style="font-size:15px;" for="whitelist_email_id">'.$l['email_id'].'</label>
							<br/><br/>
							<span class="sai_exp2" style="font-size:14px">'.$l['email_format'].'</span><br/>
							<span class="sai_exp2" style="font-size:14px">
								<b>'.$l['single'].':</b>
								<span> user@domain.com</span><br/>
								<b>'.$l['multiple'].':</b>
								<span> user1@domain1.com, user2@domain2.com</span><br/>
								<b>'.$l['whitelist_domain'].':</b>
								<span> *@domain.com</span>
							</span>
						</div>
						<div class="col-sm-6">
							<input type="email" name="whitelist_email_id" id="whitelist_email_id" class="form-control" value="" style="border-radius:0; height:35px;" /><br/>
						</div>
					</div></br>
					<div class="row">
						<div class="col-sm-offset-5 col-sm-6">
							<input type="button" class="flat-butt" id="btn_whitelist" style="cursor:pointer" value="'.$l['whitelist_email'].'" onclick="add_email_id(this);" /> &nbsp;<img id="whitelist_email_add" src="'.$theme['images'].'progress.gif" style="display:none">
						</div>
					</div><hr>
					<div class="row">
						<div class="col-sm-12">
							<div id="whitelist_emails" class="spam_list" >';
								show_table("whitelist");
							echo '</div>
						</div>
					</div></br>
					<div class="row">						
						<div class="col-sm-offset-8 col-sm-4">
							<p class="text-right">
								<label for="multi_whitelist_emails_del">'.$l['with_selected'].': </label>
								<select name="multi_whitelist_emails_del" id="multi_whitelist_emails_del">
									<option value="0">------</option>
									<option value="multi_rem">'.$l['remove_email_ids'].'</option>
								</select>
								<input type="button" id="whitelist_emails_del" onclick=\'onGo(this.id);\' class="flat-butt" value="'.$l['go'].'"><br />
							</p>
						</div>
					</div>								
					</div>
					
			</div>	
		</div>
			
		</div>';
		
	softfooter();
		
	echo '
	<script language="javascript" type="text/javascript">
		
		$(document).ready(function(){				
			$("#black_list").addClass("active");
			$("#black_list_tab").addClass("active in");
		});
	
		function add_email_id(evt){
			var type = evt.id.substring(4);
			var email_id = $("#"+type+"_email_id").val();
			email_id = email_id.toLowerCase();											
			
			if(email_id == ""){		//check for empty email id 
				message_box.show_message("'.$l['error'].'", "'.$l['enter_email_id'].'", 1);
				return false;
			}				
			
			$("#"+type+"_email_add").css("display", "");	
			$.ajax({
				type: "POST",
				url: window.location.toString(),
				data: "add_email=1&email_id="+email_id+"&type="+type,
				success: function(data){
					$("#"+type+"_email_add").css("display", "none");
					var result = data.substring(0,1);
					var output = data.substring(1);
					if(result == "0"){
						message_box.show_message("'.$l['error'].'", output, 1);
					}
					if(result == "1"){
						$("#"+type+"_emails").html(output);
						message_box.show_message("'.$l['add_email'].'", "'.$l['add_success'].'", 2);
					}						
					$("#"+type+"_email_id").val("");	//empty email text box
				},
				error: function(){
					message_box.show_message("'.$l['error'].'", "'.$l['connect_error'].'", 1);
				}
			});
		}
			
		function allCheckboxClicked(evt,type){
			if(evt.checked){
				$("."+type+"_checkSingle").each(function(){
					this.checked=true;
				});
			}else{
				$("."+type+"_checkSingle").each(function(){
					this.checked=false;
				});
			}
		}
			
		function remove_email_id(email_id, type){
			var rem_cnf = confirm("'.$l['remove_id'].'");
			if(rem_cnf == false){
				return false;
			}
			
			var td_img = document.getElementById(email_id).childNodes[3].firstChild;
			td_img.src = "'.$theme['images'].'progress.gif";
			var email_id_arr = [];
			email_id_arr[0] = email_id;
			var email_id_json = JSON.stringify(email_id_arr);
			
			$.ajax({
				type: "POST",
				url: window.location.toString(),
				data: {"email_ids": email_id_json, "type": type, "remove": 1},
				success: function(data){
					var result = data.substring(0,1);
					var output = data.substring(1);
					if(result == "1"){
						$(document.getElementById(email_id)).remove();
						message_box.show_message("'.$l['remove_email'].'", "'.$l['remove_success'].'", 2);
						// Check if table is empty or not
						var fields = document.getElementsByName(type+\'_checkbox[]\');
						if(fields.length == 0){
							if(type == "blacklist"){
								$("#"+type+"_table").append("<tr><td colspan=\"3\" style=\"text-align: center;\">'.$l['no_email_blacklist'].'</td></tr>");
							}else{
								$("#"+type+"_table").append("<tr><td colspan=\"3\" style=\"text-align: center;\">'.$l['no_email_whitelist'].'</td></tr>");
							}								
						}
					}
					if(result == "0"){
						message_box.show_message("'.$l['error'].'", output, 1);
					}
				},
				error: function(){
					message_box.show_message("'.$l['error'].'", "'.$l['connect_error'].'", 1);
				}
			});
		}
			
		// For msgbox MboxObject(fYes, fNo)
		var message_box = new MboxObject(removeMultipleEmailIds,"");
		
		// For removing multiple email ids
		function onGo(id){
			var type = id.substring(0, 9);
			if($("#"+type+"_table input:checked").length == 0){
				message_box.show_message("'.$l['error'].'", "'.$l['select_email_ids'].'", 1);
				return false;
			}				
			if($("#multi_"+id).val() != "multi_rem"){
				message_box.show_message("'.$l['error'].'", "'.$l['action_msg'].'", 1);
				return false;
			}
			message_box.delete_message("'.$l['warning'].'", "'.$l['rem_mul_emails_msg'].'", type);
		}
			
		function removeMultipleEmailIds(check_type){		
			var email_ids = [];
			var field = document.getElementsByName(check_type+\'_checkbox[]\');
			var cnt = 0;
			for(i = 0; i < field.length; i++){
				if(field[i].checked == true){
					email_ids[cnt] = field[i].value;	
					cnt++;
				}	
			}
			$.each(email_ids, function(key, value){
				var td_img = document.getElementById(value).childNodes[3].firstChild;
				td_img.src = "'.$theme['images'].'progress.gif";
			});
			
			var email_ids_json = JSON.stringify(email_ids);
			$.ajax({
				type: "POST",
				url: window.location.toString(),
				data: {"email_ids": email_ids_json, "type": check_type, "remove": 1},
				success: function(data){
					var result = data.substring(0,1);
					var output = data.substring(1);
					if(result == "1"){
						$.each(email_ids, function(key, value){
							$(document.getElementById(value)).remove();
						});
						message_box.show_message("'.$l['remove_email'].'", "'.$l['remove_success'].'", 2);
						// Check if table is empty or not
						field = document.getElementsByName(check_type+\'_checkbox[]\');
						if(field.length == 0){
							if(check_type == "blacklist"){
								$("#"+check_type+"_table").append("<tr><td colspan=\"3\" style=\"text-align: center;\">'.$l['no_email_blacklist'].'</td></tr>");
							}else{
								$("#"+check_type+"_table").append("<tr><td colspan=\"3\" style=\"text-align: center;\">'.$l['no_email_whitelist'].'</td></tr>");
							}
						}
					}
					if(result == "0"){
						message_box.show_message("'.$l['error'].'", output, 1);
					}
					// Uncheck all checkboxes and revert the dropdown to default value
					$(\'input[type=checkbox]\').prop(\'checked\', false);
					$("#multi_"+check_type+"_emails_del").val("0");
				},
				error: function(){
					message_box.show_message("'.$l['error'].'", "'.$l['connect_error'].'", 1);
				}
			});
		}
			
	</script>';
	
}
	
function show_table($email_type){
		
	global $user, $globals, $l, $theme, $softpanel, $done, $error;
	$email_list = $softpanel->get_spam_assassin_emails();
	
	echo '<table border="0" cellpadding="6" cellspacing="1" width="100%" class="table table-hover table-hover-moz" align="center">
			<thead style="background:#EFEFEF;" class="sai_head2">
				<tr>
					<th width="90%">'.$l['email_id'].'</th>
					<th width="7%" style="text-align:right">'.$l['option'].'</th>
					<th width="3%"><input type="checkbox" onclick=\'allCheckboxClicked(this,"'.$email_type.'");\' name="'.$email_type.'_allCheckbox" id="'.$email_type.'_allCheckbox"></th>
				</tr>
			</thead>
			<tbody id="'.$email_type.'_table">';
							
			if(empty($email_list[$email_type])){
				echo '<tr><td colspan=2><center><span>'.$l['no_email_'.$email_type].'</span></center></td></<tr>';
			}else{
				foreach($email_list[$email_type] as $key => $value){
					echo '
						<tr id="'.$value.'">
							<td>'.$value.'</td>
							<td onclick="remove_email_id(this.parentNode.id, \''.$email_type.'\');"><img style="float:right; cursor:pointer;" title="'.$l['remove'].'" src="'.$theme['images'].'remove.gif" /></td>
							<td><input type="checkbox" name="'.$email_type.'_checkbox[]" class="'.$email_type.'_checkSingle" value="'.$value.'"></td>
						</tr>
					';
				}
			}
			
		echo '
		</tbody>
		</table>';
	
}
	
?>