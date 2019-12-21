<?php

//////////////////////////////////////////////////////////////
//===========================================================
// pass_protect_dir_theme.php
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

function pass_protect_dir_theme(){

	global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $done;
	
	// For Delete
	if(optGET('ajaxdel')){
		
		if(!empty($error)){
			echo '0'.current($error);
			return false;
		}
		if(!empty($done)){
			echo '1'.$l['delete'];
			show_protected_user_accts();
			return true;
		}
		
	}
	
	// For Adding a Record
	if(optGET('add_pass_protect')){
		
		if(!empty($error)){
			echo '0'.current($error);
			return false;
		}
		
		if(!empty($done)){
			echo '1'.$l['add_pass_protect'];
			show_protected_user_accts();
			return true;
		}
		
	}
	
	softheader($l['<title>']);
	
	echo '<div class="bg"><br/>
		<div class="sai_main_head">
			<center><img src="'.$theme['a_images'].'email_account.gif" />&nbsp;'.$l['lbl_head'].'</center>
		</div><hr>
		<form accept-charset="'.$globals['charset'].'" action="" method="post" name="frm_protect_dir" id="frm_protect_dir" class="form-horizontal">
			<div class="row">
				<div class="col-sm-5">
					<label class="sai_head" for="dir_path">'.$l['dir_path'].'</label><br/>
					<span class="sai_exp2">'.$l['exp_dir_path'].'</span>
				</div>
				<div class="col-sm-7">
					<div class="input-group">
						<span class="input-group-addon" style="background-color: white;"><span id="domainname">'.$softpanel->user['homedir'].'/</span></span>
						<input type="text" name="dir_path" id="dir_path" class="form-control"  value="'.stripslashes(POSTval('dir_path', 'public_html/')).'" onfocus="" />
					</div>
				</div>
			</div><br/>
			<div class="row">
				<div class="col-sm-5">
					<label class="sai_head" for="dir_name">'.$l['dir_name'].'</label><br/>
					<span class="sai_exp2">'.$l['exp_dir_name'].'</span>
				</div>
				<div class="col-sm-7">
					<input type="text" name="dir_name" id="dir_name" class="form-control" value="'.POSTval('dir_name', '').'" />
				</div>
			</div><br/>
			<div class="row">
				<div class="col-sm-5">
					<label class="sai_head" for="username">'.$l['username'].'</label><br/>
					<span class="sai_exp2">'.$l['exp_username'].'</span>
				</div>
				<div class="col-sm-7">
					<input type="text" name="username" id="username" class="form-control" value="'.POSTval('username', '').'" />
				</div>
			</div><br/>
			<div class="row">
				<div class="col-sm-5">
					<label class="sai_head" for="password">'.$l['password'].'</label><br/>
					<span class="sai_exp2">'.$l['exp_password'].'</span>
				</div>
				<div class="col-sm-6">
					<div class="input-group">
						<input type="password" name="password" id="password" class="form-control" onkeyup="check_pass_str_wuzo($(\'#password\'), $(\'#pass-prog-bar\'))" value="" />
						<span class="input-group-addon" style="padding: 4px 12px" onclick="change_image(this, \'password\')">
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
					<a href="javascript: void(0);" onclick="rand_val=randstr_wuzo(10);$_(\'password\').value=rand_val;$_(\'re_password\').value=rand_val;check_pass_str_wuzo($(\'#password\'), $(\'#pass-prog-bar\'));return false;" title="'.$l['randpass'].'"><img src="'.$theme['images'].'key.png" style="padding-top:9px;"/></a>
				</div>
			</div><br/>
			<div class="row">
				<div class="col-sm-5">
					<label class="sai_head" for="re_password">'.$l['re_password'].'</label><br/>
					<span class="sai_exp2">'.$l['exp_re_password'].'</span>
				</div>
				<div class="col-sm-7">
					<input type="password" name="re_password" id="re_password" class="form-control" value="" />
				</div>
			</div><br/>
			<div class="center">
				<div class="col-sm-offset-5 col-sm-7">
					<input type="hidden" name="add_pass_protect" value="1" />
					<input type="submit" style="cursor:pointer" value="'.$l['submit_pass_protect'].'" name="submit_pass_protect" class="flat-butt" id="submit_pass_protect" />&nbsp;<img id="add_pass_proc_loader" src="'.$theme['images'].'progress.gif" style="display:none" />
				</div><br/>
			</div>
		</form>
		
		<center><br/>
			<label class="sai_sub_head"><h4><b>'.$l['record_table'].'</b></h4></label>
		</center>

		<div id="showrectab">';
			show_protected_user_accts();
		echo '</div>
	</div>

	<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
		$(document).ready(function(){
				
			// For Adding Password Protected Directories
			$("#submit_pass_protect").click(function(){
				
				// The Revolving Loader !!!
				$("#add_pass_proc_loader").css("display", "");
				
				$.ajax({
					type: "POST",
					url: window.location+"&add_pass_protect=1",
					data: $("#frm_protect_dir").serialize(),
					
					// Checking for error
					success: function(data){
						$("#add_pass_proc_loader").css("display", "none");
						
						// Do we have a success string ?
						var result = data.substring(0,1);

						if(result == "1"){
							// Clean Up
							$_("dir_path").value = "public_html/";
							$_("dir_name").value = "";
							$_("username").value = "";
							$_("password").value = "";
							$_("re_password").value = "";
							var msg = data.substring(1,data.indexOf("<table"));
							var output = data.substring(data.indexOf("<table"));
							message_box.show_message("Done",msg,2);
							check_pass_str_wuzo($("#password"), $("#pass-prog-bar"));
							$("#showrectab").html(output);
						}

						if(result == "0"){
							var msg = data.substring(1);
							message_box.show_message("Error",msg,1);
						}
						
					},
					error: function() {
						message_box.show_message("Error", "'.$l['connect_error'].'", 1);
					}
				});
				return false;
			});
		});
	// ]]></script>';
	softfooter();

}

function show_protected_user_accts(){

	global $globals, $l, $softpanel, $error, $theme;
	
	echo '<table border="0" cellpadding="8" cellspacing="1" width="100%" class="table table-hover-moz td_font" >
			<thead style="background:#EFEFEF;" class="sai_head2">
				<tr>
					<th>'.$l['pass_protected_path'].'</th>
					<th>'.$l['pass_protected_user'].'</th>
					<th style="text-align:right">'.$l['option'].'</th>
				</tr>
			</thead>
			<tbody>';

				$list_protected_users = $softpanel->list_protected_users();

				// to check if any dir are pass protected
				$flag = 0;
				foreach($list_protected_users['user_accounts'] as $key => $value) {
					if(!empty($value['users'])){
						$flag = 1;
						break;
					}
				}

				$i = 1;
				if(empty($flag)){
					echo'<tr><td colspan="3"><center>'.$l['no_proct_dir'].'</td></tr>';
				}else{
					foreach ($list_protected_users['user_accounts'] as $key => $value){

						foreach($value['users'] as $kk => $vv){

							echo '
							<tr id="tr'.str_replace("/", "-", $value['spath']).''.$vv.'" >
								<td>
									<span>'.$value['spath'].'</span>
								</td>
								<td>
									<span>'.$vv.'</span>
								</td>
								<td align="right">
									<img title="Delete" class="delete" style="cursor:pointer" id="did'.str_replace("/", "-", $value['spath']).''.$vv.'" src="' . $theme['images'] . 'remove.gif" />
								</td>
							 </tr>';
						}
						$i++;
					}
				}
			echo '</tbody>';
	echo '</table>
	
	<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
		// For msgbox MboxObject(fYes, fNo)
		var message_box = new MboxObject(deleteDomain,"");
		
		function deleteDomain(did){					
			// to show the progress gif
			$("#"+did).attr("src","'.$theme['images'].'progress.gif");
			var del_rec = did.split("-");
			var lastItem = del_rec.pop();
			
			var tmp_arr = [];
			for (var i=1; i < del_rec.length; i++){
				tmp_arr[i-1] = del_rec[i];
			}
			
			var joinn = "/"+tmp_arr.join("/");
			
			var user_id = did.substring(3);
			
			$.ajax({
				type: "POST",
				url: window.location+"&path="+joinn+"&ajaxdel=1&delete_record="+lastItem,
				
				// checking for error
				success: function(data){

					// Do we have a success string ?
					var result = data.substring(0,1);
					var msg = data.substring(1,data.indexOf("<table"));

					if(result == "1"){
						var output = data.substring(data.indexOf("<table"));
						message_box.show_message("Done",msg,2);
						$("#showrectab").html(output);
					}

					if(result == "0"){
					        $("#"+did).attr("src","");
						message_box.show_message("Error",msg,1);
					}
					
				},				
				error: function(request,error) {
					message_box.show_message("Error",\''.$l['connect_error'].'\',1);
				}
			});				
		}
		
		$(document).ready(function(){
			$(".sai_altrowstable tr").mouseover(function(){
				var old_class = $(this).attr("class");
				$(this).attr("class", "sai_tr_bgcolor")
				.mouseout(function(){
					$(this).attr("class", old_class);
				});
			});
			
			// For deleting record
			$(".delete").click(function() {
				message_box.delete_message ("Warning", "'.$l['record_del_conf'].'", $(this).attr("id"));
			});
		});
	// ]]></script>';
}

?>
