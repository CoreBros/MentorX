<?php 
	
//////////////////////////////////////////////////////////////
//===========================================================
// add_backup_server_theme.php
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
	
function add_backup_server_theme(){
	
	global $globals, $l, $theme, $softpanel, $done, $error;
	
	$backup_servers = $softpanel->get_backup_servers();
	if(isset($_GET['edit_backup_server'])){
		$backup_server_id = $_GET['edit_backup_server'];	
		$password = webuzo_pass_decrypt($backup_servers[$backup_server_id]['password']);
	}

	//check host
	if(optREQ('conn_check')){
		
		if(!empty($done)){
			//conn successful
			echo '1';
			return true;			
		}else{
			//conn failed
			echo '0';
			return true;
		}
	}
	
	if(optREQ('edit_backup_server')){
		if($done){
			header("Location: ".$globals['ind']."act=webuzo_backup#remote_backup");
		}
	}

	softheader($l['title']);
		
	echo '
	<div class="bg" style="padding:0px;">										
		<div class="row">
			<div class="col-sm-12">
				<div class="sai_sub_head"><center><img src="'.$theme['a_images'].'backup_restore.png" />&nbsp;'.$l['add_backup_server'].'</center>
				</div>
			</div>
		</div>
		</br>';
		if(!empty($error)){
			echo '
			<div id="error_box" class="row">
				<div class="col-sm-offset-1 col-sm-10">
					<div class="alert alert-danger">
						<center><span style="font-size: 14px;"><a style="text-decoration: none;" href="'.$globals['ind'].'act=webuzo_backup">'.$error.'</a></span></center>
					</div>
				</div>
			</div><br/>';
		}
		if($done){
			echo '
			<div id="error_box" class="row">
				<div class="col-sm-offset-1 col-sm-10">
					<div class="alert alert-success">
						<center><span style="font-size: 14px;"><a style="text-decoration: none;" href="'.$globals['ind'].'act=webuzo_backup">'.$l['backup_server_added'].'</a></span></center>
					</div>
				</div>
			</div><br/>';
		}
		echo '
		<div class="row">
			<div class="col-sm-12">
				<form accept-charset="UTF-8" data-toggle="validator" role="form" name="addbackupserver" method="post" action="">
				<div class="row">
					<div class="col-sm-offset-1 col-sm-5">
						<label class="sai_head" style="font-size:14px;">'.$l['name'].'</label></br>
						<span class="sai_exp2" style="font-size:12px">'.$l['name_sub'].'</span>
					</div>
					<div class="col-sm-5">
						<input type="hidden" name="server_id" id="server_id" value="'.$backup_server_id.'" />
						<input type="text" name="name" id="name" class="form-control" value="'.POSTval('name', '').'" style="height:35px;" required /><br/>
					</div>
				</div>
						
				<div class="row">
					<div class="col-sm-offset-1 col-sm-5">
						<label class="sai_head" style="font-size:14px;">'.$l['hostname'].'</label></br>
						<span class="sai_exp2" style="font-size:12px">'.$l['hostname_sub'].'</span>
					</div>
					<div class="col-sm-5">
						<input type="text" name="hostname" id="hostname" class="form-control" value="'.POSTval('hostname', '').'" style="height:35px;" required /><br/>
					</div>
				</div>
								
				<div class="row">
					<div class="col-sm-offset-1 col-sm-5">
						<label class="sai_head" style="font-size:14px;">'.$l['type'].'</label>
					</div>
					<div class="col-sm-5">
						<select class="form-control" name="type" id="type" style="height:35px;">
							<option '.(POSTval('type', '') == "SSH" ? 'selected': '' ).' value="SSH">SSH</option>
							<option '.(POSTval('type', '') == "FTP" ? 'selected': '' ).' value="FTP">FTP</option>
						</select><br/>
					</div>
				</div>
						
				<div class="row">
					<div class="col-sm-offset-1 col-sm-5">
						<label class="sai_head" style="font-size:14px;">'.$l['username'].'</label>
					</div>
					<div class="col-sm-5">
						<input type="text" name="username" id="username" class="form-control" value="'.POSTval('username', '').'" style="height:35px;" required /><br/>
					</div>
				</div>
								
				<div class="row">
					<div class="col-sm-offset-1 col-sm-5">
						<label class="sai_head" style="font-size:14px;">'.$l['password'].'</label>
					</div>
					<div class="col-sm-5">
						<input type="password" name="password" id="password" class="form-control" value="" style="height:35px;" required /><br/>
					</div>
				</div>
							
				<div class="row">
					<div class="col-sm-offset-1 col-sm-5">
						<label class="sai_head" style="font-size:14px;">'.$l['port'].'</label>
					</div>
					<div class="col-sm-5">
						<input type="number" name="port" id="port" class="form-control" value="'.POSTval('port', '').'" style="height:35px;" required /><br/>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-offset-6 col-sm-6">
						<div class="row">
							<div class="col-sm-5">
								<button class="btn btn-default" style="margin-bottom:20px;outline:none" type="button" id="check_connection">'.$l['test_conn'].'</button>&nbsp;&nbsp;&nbsp;<img id="submit_pri_loader" src="'.$theme['images'].'progress.gif" style="display:none;margin-bottom: 20px" /></p>
							</div>
						</div>
					</div>
				</div>
								
				<div class="row">
					<div class="col-sm-offset-1 col-sm-5">
						<label class="sai_head" style="font-size:14px;">'.$l['backup_location'].'</label><br/>
						<span id="backup_location_sub" class="sai_exp2" style="font-size:12px; display:none">'.$l['backup_location_sub'].'</span>
					</div>
					<div class="col-sm-5">
						<input type="text" name="backup_location" id="backup_location" class="form-control" value="'.POSTval('backup_location', '').'" style="height:35px;" required /><br/>
					</div>
				</div>
						
				<div class="row">
					<div class="col-sm-offset-6 col-sm-5">
						<input type="submit" class="flat-butt" value="'.$l['submit'].'">
					</div>
				</div>
				</form><br/><br/><br/>
			</div>						
		</div>
		<script>
			$(document).ready(function(){
				var backup_server_data = \''.($backup_servers[$backup_server_id] ? json_encode($backup_servers[$backup_server_id]) : "").'\';
				if(backup_server_data !== ""){					
					backup_server_data = JSON.parse(backup_server_data);
					$("#name").val(backup_server_data.name);
					$("#hostname").val(backup_server_data.hostname);
					$("#type").val(backup_server_data.type).change();
					$("#username").val(backup_server_data.username);
					$("#password").val("'.$password.'");
					$("#port").val(backup_server_data.port);
					$("#backup_location").val(backup_server_data.backup_location);
				}

				var type = $("#type option:selected").val();
				if(type == "FTP"){
					$("#backup_location_sub").css("display","block");
				}	
			});
			
			$("#type").on("change", function(){
				var type = this.value;
				if(type == "FTP"){
					$("#backup_location_sub").css("display","block");
				}else{
					$("#backup_location_sub").css("display","none");
				}
			});
			
			$("#check_connection").click(function() {

				var username = $("#username").val();
				var password = $("#password").val();
				var port = $("#port").val();
				var hostname = $("#hostname").val();
				var backup_type = $("#type").val();
				$("#submit_pri_loader").css({"display":""});

				$.ajax({
					type: "POST",
					url: window.location+"&conn_check=1",
					data: {
						"username" : username,
						"password" : password,
						"port" : port,
						"hostname" : hostname,
						"type" : backup_type,
					},
					success: function(data){		
						$("#submit_pri_loader").css({"display":"none"})										
						var result = data.substring(0,1);	
						if(result == "1"){
							$("#check_connection").text("Test Connection Successful")
							$("#check_connection").addClass("btn-success")
							class_remove = "btn-success"	
						}

						if(result == "0"){	
							$("#check_connection").text("Test Connection Failed")
							$("#check_connection").addClass("btn-danger")
							class_remove = "btn-danger"
						}

						//delete the label after 5 seconds
						setTimeout(function(){ 
							$("#check_connection").text("'.$l['test_conn'].'")
							$("#check_connection").removeClass(class_remove) }, 5000);
					}															
				});	

			});
		</script>											
	</div>';
		
	softfooter();
	
}
	
	
?>