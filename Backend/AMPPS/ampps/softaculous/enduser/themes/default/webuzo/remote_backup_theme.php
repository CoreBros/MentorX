<?php 
	
//////////////////////////////////////////////////////////////
//===========================================================
// remote_backup_theme.php
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
	
function remote_backup_theme(){
	
	global $global, $globals, $l, $theme, $softpanel, $done, $error;
	
	$backup_servers = $softpanel->get_backup_servers();
	
	$backup_type = $_GET['backup_type'];
	$username = get_username();
		
	softheader($l['title']);
		
	echo '
	<div class="bg" style="padding:0px;">										
		<div class="row">
			<div class="col-sm-12">
				<div class="sai_sub_head">
					<center><img src="'.$theme['a_images'].'backup_restore.png" />&nbsp;'.$l['title'].'</center>
				</div>
			</div>
		</div>
		<br/>
		<div class="row">
			<div class="col-sm-3 col-sm-offset-1 text-right">
				<label class="sai_head" style="font-size:14px;">'.$l['select_backup_server'].'</label>					
			</div>
			<div class="col-sm-5">
				<select class="form-control" name="backup_server" id="backup_server" style="height:35px;">
					<option value="-1">Local</option>';
					foreach($backup_servers as $key => $value){
						echo '<option data-backup-location="'.$value['backup_location'].'" value="'.$key.'">'.$value['name'].' ('.$value['hostname'].')</option>';
					}
			echo'</select><br/>
			</div>
		</div>
		<br/>
		<div class="row">
			<div class="col-sm-3 col-sm-offset-1 text-right">
				<label class="sai_head" style="font-size:14px;">'.$l['backup_type'].'</label>					
			</div>
			<div class="col-sm-5">
				<select class="form-control" name="backup_type" id="backup_type" style="height:35px;">
					<option value="full" '.($backup_type == "full" ? "selected":"").'>Full Backup</option>
					<option value="home" '.($backup_type == "home" ? "selected":"").'>Home Backup</option>
					<option value="data" '.($backup_type == "data" ? "selected":"").'>Data Backup</option>
					<option value="mail" '.($backup_type == "mail" ? "selected":"").'>Mail Backup</option>
				</select>
			</div>	
		</div>
		<br/><br/>
		<div class="row" id="row_skip_softaculous" style="display: none;">
			<div class="col-sm-3 col-sm-offset-1 text-right">
				<label class="sai_head" style="font-size:14px;">'.$l['skip_softaculous'].'</label>
				<span class="sai_exp2" style="font-size:12px">/home/'.$username.'/'.$l['skip_softaculous_sub'].'</span>					
			</div>
			<div class="col-sm-5">
				<input type="checkbox" name="skip_softaculous" id="skip_softaculous" /><br/><br/><br/>
			</div>
		</div>			
		<div class="row">
			<div class="col-sm-offset-4 col-sm-2">
				<input type="button" class="flat-butt" value="'.$l['backup_now'].'" onclick="backup_now();">
			</div>
		</div><br/><br/>
		<div class="row">
			<div class="col-sm-offset-4 col-sm-3">
				<b><a class="sai_head" href="'.$globals['ind'].'act=webuzo_backup">'.$l['return_to_webuzo_backup'].'</a></b>
			</div>
		</div>
		<br/><br/>	
	</div>';
		
	softfooter();
		
	echo '
	<script language="javascript" type="text/javascript">
		
		$(document).ready(function(){				
			var backup_type = $("#backup_type option:selected").val();
			if(backup_type == "full" || backup_type == "home"){
				$("#row_skip_softaculous").css("display","block");
			}
		});		
		
		$("#backup_type").on("change", function(){
			var backup_type = this.value;
			if(backup_type == "full" || backup_type == "home"){
				$("#row_skip_softaculous").css("display","block");
			}else{
				$("#row_skip_softaculous").css("display","none");
				$("#skip_softaculous").prop("checked", false);
			}
		});
		
		var message_box = new MboxObject();
		function backup_now(){
			var backup_server = $("#backup_server").val();
			var backup_type = $("#backup_type").val();
			var skip_softaculous_backup = $("#skip_softaculous").is(":checked");
			if(skip_softaculous_backup){
				skip_softaculous_backup = 1;
			}else{
				skip_softaculous_backup = 0;
			}
			
			$.ajax({
				type: "POST",
				url: window.location+"&api=json",
				data: {
					"remote_backup" : 1,
					"backup_server" : backup_server,
					"type" : backup_type,
					"skip_softaculous_backup" : skip_softaculous_backup
				},
				dataType : "json",
				success: function(data){
					if("done" in data){
						message_box.show_message("Backup", \''.$l['strt_backup'].'\', 2);						
					}else{
						message_box.show_message("Error",data["error"],1);
					}
				},
				error: function(){
					message_box.show_message("Error",\''.$l['connect_error'].'\',1);
				}
			});
		}
			
	</script>';
	
}
	
	
?>