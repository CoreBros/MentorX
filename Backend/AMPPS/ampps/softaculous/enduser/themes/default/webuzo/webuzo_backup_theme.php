<?php

//////////////////////////////////////////////////////////////
//===========================================================
// webuzo_backup_theme.php
//===========================================================
// SOFTACULOUS 
// Version : 2.4.3
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Husain Bhala
// Date:       12th March 2016
// Time:       11:00 hrs
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

function webuzo_backup_theme(){

	global $user, $globals, $l, $theme, $softpanel, $iscripts, $error, $done, $wbackup_path, $wbackup_log, $json_files;
	global $type;
	
	if(optREQ('multi_delete')){
		if(!empty($error)){
			echo '0'.$type;
			if(optREQ('show_table')){
				if($type == "data"){
					show_table($type, '.sql.gz');	
				}else{
					show_table($type, '.tar.gz');
				}
			}
			return false;
		}

		if(!empty($done)){
			echo '1'.$type;
			if(optREQ('show_table')){
				if($type == "data"){
					show_table($type, '.sql.gz');	
				}else{
					show_table($type, '.tar.gz');
				}
			}
			return true;
		}
	}
	
	if(optREQ('remove_backup_server') || optREQ('remove_multiple_backup_server')){
		if($done){
			echo '1';
			return true;
		}
	}
	
	if(optGET('ajaxsch')){
		if(!empty($error)){
			echo '0'.current($error);
			return false;
		}
		if(!empty($done)){
			echo '1'.$l['schedule_done'];
			list_autobackups();
			return true;
		}
	}
	
	if(optGET('ajaxsch_del')){
		if(!empty($error)){
			echo '0'.current($error);
			return false;
		}
		if(!empty($done)){
			echo '1'.$l['remove_done'];
			list_autobackups();
			return true;
		}
	}
	
	if(optGET('refreshTable')){
		if(!empty($done)){
			echo '1';
			switch(optGET('refreshTable')){
				case 'refresh_fullBackup':
					show_table('full', '.tar.gz');
					break;
				case 'refresh_homeBackup':
					show_table('home', '.tar.gz');
					break;
				case 'refresh_dataBackup':
					show_table('data', '.sql.gz');
					break;
				case 'refresh_mailBackup':
					show_table('mail', '.tar.gz');
					break;	
			}
			return true;
		}
	}
	
	softheader($l['<title>']);
	
	echo '<style>
	.sai_popup {
		position:absolute;
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
	.innertabs{
		width:100%;
		float: center;				
		padding:20px;
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
	.fa-rotate-360{
	-webkit-transform: rotate(360deg);
	-moz-transform: rotate(360deg);
	-ms-transform: rotate(360deg);
	-o-transform: rotate(360deg);
	transform: rotate(360deg);
	transition: .8s;
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
	
	echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
	$(document).ready(function(){
		
		// For scheduling backups	
		$("#schedule").click(function(){
			$("#schedule_gif").css("display", "");
			var w_l = remove_hash(window.location.toString());

			$.ajax({
				type: "POST",
				url: w_l+"&ajaxsch=1",
				data: $("#scheduler").serialize()+"&type="+$_("backup_type").value+"&schedule_backup=1",
				
				// Checking for error
				success: function(data){
					$("#schedule_gif").css("display", "none");
					var result = data.substring(0,1);
					if(result == "1"){
						$_("minute").value="0";
						$_("minute_options").value="---";
						$_("hour").value="0";
						$_("hour_options").value="---";
						$_("day").value="*";
						$_("day_options").value="---";
						$_("month").value="*";
						$_("month_options").value="---";
						$_("weekday").value="*";
						$_("weekday_options").value="---";
						$_("backup_type").value="full";
						var msg = data.substring(1,data.indexOf("<div"));
						var output = data.substring(data.indexOf("<div"));
						message_box.show_message( "Done ",msg,2);
						$("#list_autobackups").html(output);
					}
					if(result == "0"){
						var msg = data.substring(1);
						message_box.show_message( "Error",msg,1);
					}
				},
				error: function(){
					message_box.show_message("Error",\''.$l['connect_error'].'\',1);
				}
			});
			return false;
		});
	
		// For selecting tab
		try{
			var select_tab = window.location;
			if(select_tab.length > 0){
				$(select_tab+"_a").addClass("active");
				$(select_tab).addClass("in active");
			}else{
				$("#backupfull_a").addClass("active");
				$("#backupfull").addClass("in active");
			}
		}catch(e){}
		
		if(window.location.hash == "#backuplog"){ 
			$("#backupfull_a").removeClass("active");
			$("#backupfull").removeClass("in active");				
			$("#backuplog_a").addClass("active");
			$("#backuplog").addClass("in active");
		}
		if(window.location.hash == "#remote_backup"){ 
			$("#backupfull_a").removeClass("active");
			$("#backupfull").removeClass("in active");				
			$("#remote_backup_a").addClass("active");
			$("#remote_backup").addClass("in active");
		}
		
	});

	// Remove hash from URL before making ajax request
	function remove_hash(w_l){
		if(w_l.indexOf("#") > 0){
			var unhashed_w_l = w_l.substring(0, w_l.indexOf("#"));
			return unhashed_w_l;
		}

		return w_l;
	}
	
	function restore_backup(filename, server_id, backup_type){
	var res_cnf = confirm("'.$l['restore_cnf'].'");
	if(res_cnf == false){
		return false;
	}
	
	var remote_restore = 0;
	if(backup_type != "local"){
		remote_restore = 1;
	}
	
	type = filename.substr(0, 4);
	if(type == "data"){
		filename = filename+".sql.gz";
	}else{
		filename = filename+".tar.gz";
	}
	
	var w_l = remove_hash(window.location.toString());	
	$.ajax({
		type: "POST",
		url: w_l+"&api=json",
		data: "restore=1&filename="+filename+"&server_id="+server_id+"&remote_restore="+remote_restore,
		dataType : "json",
		success: function(data){
			if("done" in data){
				message_box.show_message("Restore", \''.$l['strt_restore'].'\', 2);
			}else{
				message_box.show_message("Error",data["error"],1);
			}
			
		},
		error: function() {
			message_box.show_message("Error",\''.$l['connect_error'].'\',1);						
		}															
	});
	}

	var message_box = new MboxObject(delete_backup,"");
	function delete_backup(id, server_id){
	var del_cnf = confirm("'.$l['delete_cnf'].'");
	if(del_cnf == false){
		return false;
	}
	
	type = id.substr(0, 4);
	if(type == "data"){
		filename = id+".sql.gz";
	}else{
		filename = id+".tar.gz";
	}
	
	var w_l = remove_hash(window.location.toString());
	$.ajax({
		type: "POST",
		url: w_l+"&api=json",
		data: "delete=1&filename="+filename+"&server_id="+server_id,
		dataType : "json",
		success: function(data){
			if("done" in data){
				message_box.show_message("Delete",\''.$l['file_deleted'].'\',2);
				var row_parent = $("#"+id).parent();
				$("#"+id).remove();
				if(row_parent.children().length == 0)
					row_parent.html("<tr><td colspan=3><center><span>'.$l['no_backup'].' !</span></center></td></<tr>");
			}else{
				message_box.show_message("Error",data["error"],1);
			}
		},
		error: function(){
			message_box.show_message("Error",\''.$l['connect_error'].'\',1);
		}
	});
	}
	
	//get backup logs (and clear them if needed)
	function get_logs(id){
	$("#trace_prog").css("display", "");
	if(id == "clear_log"){
		dataval = "clearlog=1";
	}else{
		dataval = "";
	}
	
	var w_l = remove_hash(window.location.toString());
	$.ajax({
		type: "POST",
		url: w_l+"&api=json",
		data: dataval,
		dataType : "json",
		// checking for error
		success: function(data){
			$("#trace_prog").css("display", "none");
			if("done" in data){
				if(id == "clear_log"){
					message_box.show_message("Delete","Logs Cleared",2);
				}
				$("#showlog").text(data["wbackup_log"]);
			}else{
				message_box.show_message("Error",data["error"],1);
			}
		},
		error: function(){
			message_box.show_message("Error",\''.$l['connect_error'].'\',1);
		}
	});
	}
	
	//for cron option
	function select_option(input_field){
		input_field = input_field.trim();
		var dd_obj = document.getElementById(input_field+"_options");
		var ib_obj = document.getElementById(input_field);
		if(dd_obj.value !== "---"){
			ib_obj.value = dd_obj.value;
		}
	}
	
	//remove scheduled entry
	function remove_schedule(did){
		var del_cnf = confirm("'.$l['remove_cnf'].'");
		if(del_cnf == false){
			return false;
		}
		
		did = did.substr(2);
		$("#schedule_gif").css("display", "");
		
		var w_l = remove_hash(window.location.toString());
		$.ajax({
			type: "POST",
			url: w_l+"&ajaxsch_del=1",
			data: "remove_schedule=1&delete_record="+did,
			success: function(data){
				var result = data.substring(0,1);
				$("#schedule_gif").css("display", "none");
				if(result == "1"){
					var msg = data.substring(1,data.indexOf("<div"));
					var output = data.substring(data.indexOf("<div"));							
					message_box.show_message("Delete",msg,2);														
					$("#list_autobackups").html(output);		
				}
				if(result == "0"){
					var msg = data.substring(1);
					message_box.show_message("Error",msg,1);
				}
			},
			error: function(){
				message_box.show_message("Error",\''.$l['connect_error'].'\',1);
			}
		});
	}
	
	function rotate_img(ev){
		var backup_id = ev.id;
		$("#"+backup_id).attr("class", "fa-rotate-360");	

		var w_l = remove_hash(window.location.toString());
		$.ajax({
			type: "POST",
			url: w_l+"&refreshTable="+backup_id,
			success: function(data){
				$("#"+backup_id).attr("class", "");
				var result = data.substring(0,1);
				if(result == "1")
				{
					var output = data.substring(data.indexOf("<div"));
					$("#"+backup_id+"Display").html(output);	
				}
			}
		});
	};
	
	// For msgbox MboxObject(fYes, fNo)
	var message_box = new MboxObject(deleteMultipleBackups,"");
	
	// For deleting multiple backups
	function onGo(id){
		var type = id.substring(0, 4);
		if($("#backup"+type+" .table > tbody input:checked").length == 0){
			message_box.show_message("'.$l['error'].'", "'.$l['select_backups'].'", 1);
			return false;
		}				
		if($("#multi_"+id).val() != "mult_rem"){
			message_box.show_message("'.$l['error'].'", "'.$l['action_msg'].'", 1);
			return false;
		}
		message_box.delete_message("'.$l['warning'].'", "'.$l['rem_mul_backups_msg'].'", type);
	}
				
	function deleteMultipleBackups(check_type){		
		var filenames = [];
		var server_ids = [];
		var remote_filenames = "", remote_server_ids = "";
		var field = document.getElementsByName(check_type+\'_checkbox[]\');
		var cnt = 0;
		var not_deleted_files = "";
		for(i = 0; i < field.length; i++){
			if(field[i].checked == true){
				type = field[i].value.substr(0, 4);
				if(field[i].value != ""){
					if(field[i].dataset.server_id == -1){					
						if(type == "data"){
							filenames[cnt] = field[i].value+".sql.gz";
						}else{
							filenames[cnt] = field[i].value+".tar.gz";
						}	
						server_ids[cnt] = field[i].dataset.server_id;
						cnt++;
					}else{
						if(type == "data"){
							remote_filenames += field[i].value+".sql.gz,";
						}else{
							remote_filenames += field[i].value+".tar.gz,";
						}	
						remote_server_ids += field[i].dataset.server_id+",";	
					}
				}	
			}	
		}
		
		if(remote_filenames != ""){
			filenames.push(remote_filenames);
			server_ids.push(remote_server_ids);
		}
		var file_count = 0;		
		var remote_flag = 0;
		ajax_call(filenames[file_count], server_ids[file_count]);

		var w_l = remove_hash(window.location.toString());
		function ajax_call(backup_file, server_id){
			if(server_id == -1){
				var removing_file = "Removing backup file : "+backup_file;
			}else{
				var removing_file = "Removing remote backup files";
				remote_flag = 1;	
			}
			
			var div = "&nbsp;&nbsp;<div><center><img src=\"' . $theme['images'] . 'bar.gif\" style=\"height: 20px;\" > <br /><b>"+removing_file+"</b></center></div>";
			$("#msg_backup_"+type).html(div);
			var refresh_table = (filenames.length - 1 == file_count ? 1 : 0);
				
			$.ajax({
				type: "POST",
				url: w_l,
				data: "multi_delete=1&filename="+backup_file+"&server_id="+server_id+"&show_table="+refresh_table,
				success: function(data){
					file_count++;
					var result = data.substring(0,1);
					var type = data.substring(1,5);
					var output = data.substring(5);
					if(result == "0"){		//File delete error		
						not_deleted_files += "\n"+backup_file;									
					}	
					if(filenames.length == file_count){
						if(not_deleted_files != ""){	
							//Display all the undeleted files
							$("#msg_backup_"+type).empty();
							alert("'.$l['unable_to_delete'].'\n"+not_deleted_files);
						}else{
							//If all the files are deleted then display a success message
							if(remote_flag == 0){
								div = "<div class=\'alert alert-success fade in\' style=\'width:95% ; padding:10px; font-size:15px;\'><a href=\'#close\' class=\'close\' data-dismiss=\'alert\'>&times;</a><center>'.$l['selected_files_deleted'].'</center>";
							}else{
								div = "<div class=\'alert alert-success fade in\' style=\'width:95% ; padding:10px; font-size:15px;\'><a href=\'#close\' class=\'close\' data-dismiss=\'alert\'>&times;</a><center>'.$l['removing_remote_files'].'</center>";
							}
							$("#msg_backup_"+type).html(div);
						}
						
						//Reload the table list
						$("#refresh_"+type+"BackupDisplay").html(output);					
						var tbody = $("#"+type+"_show_table");
						if(tbody.children().length == 0){
							tbody.html("<tr><td colspan=3><center><span>'.$l['no_backup'].' !</span></center></td></<tr>");
						}
						
						// Uncheck all checkboxes and revert the dropdown to default value
						$(\'input[type=checkbox]\').prop(\'checked\', false);
						$("#multi_"+type+"_backups_del").val("0");
					}
					if(file_count < filenames.length){
						ajax_call(filenames[file_count], server_ids[file_count]);
					}
				},
				error: function(error){
					message_box.show_message("Error",\''.$l['connect_error'].'\',1);
				}
			});
			
		}
	}
	
	function remove_backup_server(server_id){
		var rem_cnf = confirm("'.$l['remove_backup_server'].'");
		if(rem_cnf == false){
			return false;
		}
			
		var td_img = document.getElementById(server_id).childNodes[11].firstChild;
		td_img.src = "'.$theme['images'].'progress.gif";	
		var backup_server_arr = [];
		backup_server_arr[0] = server_id;
		var backup_server_json = JSON.stringify(backup_server_arr);
		
		var w_l = remove_hash(window.location.toString());	
		$.ajax({
			type: "POST",
			url: w_l,
			data: {"server_ids": backup_server_json, "remove_backup_server": 1},
			success: function(result){
				if(result == "1"){				
					message_box.show_message("'.$l['delete'].'","'.$l['backup_server_removed'].'",2);
					var row_parent = $("#"+server_id).parent();
					$("#"+server_id).remove();
					if(row_parent.children().length == 0){
						row_parent.html("<tr><td colspan=7><center><span>'.$l['no_backup_servers'].'</span></center></td></<tr>");
					}					
				}
			},
			error: function(){
				message_box.show_message("'.$l['error'].'", "'.$l['connect_error'].'", 1);
			}
		});
	}	
	
	// For deleting multiple backups
	function remove_server_onGo(){
		if($("#remote_backup .table > tbody input:checked").length == 0){
			message_box.show_message("'.$l['error'].'", "'.$l['select_backup_server'].'", 1);
			return false;
		}				
		if($("#rem_multi_backup_server").val() != "mult_rem"){
			message_box.show_message("'.$l['error'].'", "'.$l['action_msg'].'", 1);
			return false;
		}
		
		message_box = new MboxObject(removeMultipleBackupServers,"");	
		message_box.delete_message("'.$l['warning'].'", "'.$l['rem_mul_backup_server_msg'].'");
	}
	
	function removeMultipleBackupServers(){
		var serverids = [];
		var field = document.getElementsByName("remote_checkbox[]");
		var cnt = 0;
		for(i = 0; i < field.length; i++){
			if(field[i].checked == true){
				serverids[cnt] = field[i].value;	
				cnt++;
			}	
		}
		
		$.each(serverids, function(key, value){
			var td_img = document.getElementById(value).childNodes[11].firstChild;
			td_img.src = "'.$theme['images'].'progress.gif";
		});
			
		var serverids_json = JSON.stringify(serverids);		
		var w_l = remove_hash(window.location.toString());
		$.ajax({
			type: "POST",
			url: w_l,
			data: {"server_ids": serverids_json, "remove_multiple_backup_server": 1},
			success: function(result){
				if(result == "1"){				
					message_box.show_message("'.$l['delete'].'", "'.$l['selected_servers_removed'].'",2);
					for(i = 0; i < serverids.length; i++){
						$("#"+serverids[i]).remove();
					}
					if($("#backup_server_table").children().length == 0){
						$("#backup_server_table").html("<tr><td colspan=9><center><span>'.$l['no_backup_servers'].'</span></center></td></<tr>");
					}					
				}
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
	};
	
	// ]]></script>';
	
	echo '<div class="bg" style="padding:0px;">
		<div class="panel with-nav-tabs panel-default" id="panel-background"> 
			<div class="panel-heading" id="panel-heading-part">
				<ul class="nav nav-tabs no-border-bottom tab-center">
					<li align="center" id="backupfull_a"><a href="#backupfull" data-toggle="tab" class="heading_a" style="text-decoration:none">'.$l['backup_full'].'</a></li>
					<li align="center" id="backuphome_a"><a href="#backuphome" data-toggle="tab" class="heading_a" style="text-decoration:none">'.$l['backup_home'].'</a></li>
					<li align="center" id="backupdata_a"><a href="#backupdata" data-toggle="tab" class="heading_a"  style="text-decoration:none">'.$l['backup_db'].'</a></li>
					<li align="center" id="backupmail_a"><a href="#backupmail" data-toggle="tab" class="heading_a" style="text-decoration:none">'.$l['backup_mail'].'</a></li>
					<li align="center" id="auto_backup_a"><a href="#auto_backup" data-toggle="tab" class="heading_a" style="text-decoration:none">'.$l['auto_backup'].'</a></li>
					<li align="center" id="remote_backup_a"><a href="#remote_backup" data-toggle="tab" class="heading_a"  style="text-decoration:none">'.$l['remote_backup'].'</a></li>
					<li align="center" id="backuplog_a"><a href="#backuplog" data-toggle="tab" class="heading_a" style="text-decoration:none">'.$l['backup_log'].'</a></li>
				</ul>
			</div>
		</div>	
		
		<div class="panel-body" id="panel-body-part">
			<div class="tab-content" style="height: auto;">
			
				<div class="tab-pane fade" id="backupfull">
					<div class="row">
						<div class="col-sm-11">
							<div class="sai_sub_head">
								<center><img src="'.$theme['a_images'].'backup_restore.png" />&nbsp;'.$l['backup_full'].'</center>
							</div>
						</div>
						<div class="col-sm-1">
							<center><span type="button" id="refresh_fullBackup" onclick="rotate_img(this);" style="color:#29B7D3; margin-top:20px; position:absolute; cursor:pointer;" class="" title="'.$l['refresh_table'].'"><i class="fa sai-sync fa-2x"></i></span></center>
						</div>
					</div>
					
					<div class="row" id="refresh_fullBackupDisplay">';
						show_table('full', '.tar.gz');
					echo '</div>
					
					<div class="row">
						<div class="col-sm-offset-3 col-sm-5">
							<div style="text-align: center;">
								<a href="'.$globals['ind'].'act=remote_backup&backup_type=full"  style="text-decoration:none">
									<button class="flat-butt">'.$l['backup_now'].'</button>
								</a>
							</div>
						</div>
						<div class="col-sm-4">
							<p class="text-right">
								<label for="multi_full_backups_del">'.$l['with_selected'].': </label>
								<select name="multi_full_backups_del" id="multi_full_backups_del">
									<option value="0">---</option>
									<option value="mult_rem">'.$l['remove_backups'].'</option>
								</select>
								<input type="button" id="full_backups_del" onclick=\'onGo(this.id);\' class="flat-butt" value="'.$l['go'].'"><br />
							</p>
						</div>
					</div>
					
					<div class="row">
						<div class="col-sm-offset-1 col-sm-9">
							<div id="msg_backup_full">
							</div>
						</div>
					</div>
				</div>

				<div class="tab-pane fade" id="backuphome">
					<div class="row">
						<div class="col-sm-11">
							<div class="sai_sub_head"><center><img src="'.$theme['a_images'].'backup_restore.png" />&nbsp;'.$l['backup_home'].'</center>
							</div>
						</div>
						<div class="col-sm-1">
							<center><span type="button" id="refresh_homeBackup" onclick="rotate_img(this);" style="color:#29B7D3; margin-top:20px; position:absolute; cursor:pointer;" class="" title="'.$l['refresh_table'].'"><i class="fa sai-sync fa-2x"></i></span></center>
						</div>
					</div>
					
					<div class="row" id="refresh_homeBackupDisplay">';
						show_table('home', '.tar.gz');
					echo '</div>
					
					<div class="row">
						<div class="col-sm-offset-3 col-sm-5">
							<div style="text-align: center;">
								<a href="'.$globals['ind'].'act=remote_backup&backup_type=home"  style="text-decoration:none">
									<button class="flat-butt">'.$l['backup_now'].'</button>
								</a>
							</div>
						</div>
						<div class="col-sm-4">
							<p class="text-right">
								<label for="multi_home_backups_del">'.$l['with_selected'].': </label>
								<select name="multi_home_backups_del" id="multi_home_backups_del">
									<option value="0">---</option>
									<option value="mult_rem">'.$l['remove_backups'].'</option>
								</select>
								<input type="button" id="home_backups_del" onclick=\'onGo(this.id);\' class="flat-butt" value="'.$l['go'].'"><br />
							</p>
						</div>
					</div>
					
					<div class="row">
						<div class="col-sm-offset-1 col-sm-9">
							<div id="msg_backup_home">
							</div>
						</div>
					</div>
				</div>

				<div class="tab-pane fade" id="backupdata">
					<div class="row">
						<div class="col-sm-11">
							<div class="sai_sub_head"><center><img src="'.$theme['a_images'].'backup_restore.png" />&nbsp;'.$l['backup_now'].'</center>
							</div>
						</div>
						<div class="col-sm-1">
							<center><span type="button" id="refresh_dataBackup" onclick="rotate_img(this);" style="color:#29B7D3; margin-top:20px; position:absolute; cursor:pointer;" class="" title="'.$l['refresh_table'].'"><i class="fa sai-sync fa-2x"></i></span></center>
						</div>
					</div>
					
					<div class="row" id="refresh_dataBackupDisplay">';
						show_table('data', '.sql.gz');
					echo '</div>
					
					<div class="row">
						<div class="col-sm-offset-3 col-sm-5">
							<div style="text-align: center;">
								<a href="'.$globals['ind'].'act=remote_backup&backup_type=data"  style="text-decoration:none">
									<button class="flat-butt">'.$l['backup_now'].'</button>
								</a>
							</div>
						</div>
						<div class="col-sm-4">
							<p class="text-right">
								<label for="multi_data_backups_del">'.$l['with_selected'].': </label>
								<select name="multi_data_backups_del" id="multi_data_backups_del">
									<option value="0">---</option>
									<option value="mult_rem">'.$l['remove_backups'].'</option>
								</select>
								<input type="button" id="data_backups_del" onclick=\'onGo(this.id);\' class="flat-butt" value="'.$l['go'].'"><br />
							</p>
						</div>
					</div>
					
					<div class="row">
						<div class="col-sm-offset-1 col-sm-9">
							<div id="msg_backup_data">
							</div>
						</div>
					</div>
				</div>

				<div class="tab-pane fade" id="backupmail">
					<div class="row">
						<div class="col-sm-11">
							<div class="sai_sub_head"><center><img src="'.$theme['a_images'].'backup_restore.png" />&nbsp;'.$l['backup_mail'].'</center>
							</div>
						</div>
						<div class="col-sm-1">
							<center><span type="button" id="refresh_mailBackup" onclick="rotate_img(this);" style="color:#29B7D3; margin-top:20px; position:absolute; cursor:pointer;" class="" title="'.$l['refresh_table'].'"><i class="fa sai-sync fa-2x"></i></span></center>
						</div>
					</div>
					
					<div class="row" id="refresh_mailBackupDisplay">';
						show_table('mail', '.tar.gz');
					echo '</div>
					
					<div class="row">
						<div class="col-sm-offset-3 col-sm-5">
							<div style="text-align: center;">
								<a href="'.$globals['ind'].'act=remote_backup&backup_type=mail"  style="text-decoration:none">
									<button class="flat-butt">'.$l['backup_now'].'</button>
								</a>
							</div>
						</div>
						<div class="col-sm-4">
							<p class="text-right">
								<label for="multi_mail_backups_del">'.$l['with_selected'].': </label>
								<select name="multi_mail_backups_del" id="multi_mail_backups_del">
									<option value="0">---</option>
									<option value="mult_rem">'.$l['remove_backups'].'</option>
								</select>
								<input type="button" id="mail_backups_del" onclick=\'onGo(this.id);\' class="flat-butt" value="'.$l['go'].'"><br />
							</p>
						</div>
					</div>
					
					<div class="row">
						<div class="col-sm-offset-1 col-sm-9">
							<div id="msg_backup_mail">
							</div>
						</div>
					</div>
				</div>
				
				<div class="tab-pane fade" id="auto_backup">
					<div class="row">
						<div class="col-sm-12">
							<div class="sai_sub_head"><center><img src="'.$theme['a_images'].'backup_restore.png" />&nbsp;'.$l['auto_backup'].'</center>
							</div>
						</div>
					</div>
					<div class="row" id="schedule_backups">';
						schedule_backups();
					echo '</div>
					<div class="row" id="list_autobackups">';
						list_autobackups();
					echo '</div>
				</div>
				
				<div class="tab-pane fade" id="remote_backup">
					<div class="row">
						<div class="col-sm-12">
							<div class="sai_sub_head"><center><img src="'.$theme['a_images'].'backup_restore.png" />&nbsp;'.$l['remote_backup'].'</center>
							</div>
						</div>
					</div>
					<br/>
					<div class="row">
						<div class="col-sm-12">';
							show_remote_backup_servers("remote");
						echo '</div>
					</div>
					<br/>
					<div class="row">
						<div class="col-sm-offset-5 col-sm-3">
							<a href="'.$globals['ind'].'act=add_backup_server" style="text-decoration:none">
								<button class="flat-butt">'.$l['add_backup_server'].'</button>
							</a>
						</div>
						<div class="col-sm-4">
							<p class="text-right">
								<label for="rem_multi_backup_server">'.$l['with_selected'].': </label>
								<select name="rem_multi_backup_server" id="rem_multi_backup_server">
									<option value="0">---</option>
									<option value="mult_rem">'.$l['remove_server'].'</option>
								</select>
								<input type="button" id="backup_server_del" onclick=\'remove_server_onGo();\' class="flat-butt" value="'.$l['go'].'"><br />
							</p>
						</div>
					</div>	
				</div>
				
				<div class="tab-pane fade" id="backuplog">
					<div class="row">
						<div class="col-sm-12">
							<div class="sai_sub_head"><center><img src="'.$theme['a_images'].'backup_restore.png" />&nbsp;'.$l['backup_log'].'</center>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 innertabs" nowrap="nowrap" style="width:97%;">
							<textarea class="form-control" id="showlog" readonly="readonly"; style="height:400px; width:100%; overflow:auto; resize: none;" wrap="off"; >'.$wbackup_log.'</textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-offset-5 col-sm-7">
							<input type="button" class="flat-butt" id="get_log" style="cursor:pointer" value="'.$l['ref_logs'].'" onclick="get_logs();" />
							<input type="button" class="flat-butt" id="clear_log" style="cursor:pointer" value="'.$l['clear_logs'].'" onclick="get_logs(this.id);" />
							<img id="trace_prog" src="'.$theme['images'].'progress.gif" style="display:none">
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div><!--end of bg class-->
	
	<div class="row">
		<div class="sai_popup"></div>
	</div>';
	
	softfooter();
}

function show_table($type, $file_type){
	global $globals, $theme, $l, $softpanel;
	$wbackup_list = $softpanel->list_wbackups();
	
	echo '<div class="col-sm-12 innertabs">
			<table border="0" cellpadding="6" cellspacing="1" width="100%" class="table table-hover table-hover-moz" align="center">
				<thead style="background:#EFEFEF;" class="sai_head2">
					<tr>
						<th width="40%">'.$l['filename'].'</th>
						<th width="20%">'.$l['type'].'</th>
						<th width="20%">'.$l['server_name'].'</th>
						<th width="20%">'.$l['size'].'</th>
						<th width="5%" colspan="3">'.$l['option'].'</th>
						<th width="3%"><input type="checkbox" onclick=\'allCheckboxClicked(this,"'.$type.'");\' name="'.$type.'_allCheckbox" id="'.$type.'_allCheckbox"></th>
					</tr>
				</thead><tbody id="'.$type.'_show_table">';

	if(empty($wbackup_list[$type])){
		echo '<tr><td colspan=8><center><span>'.$l['no_backup'].' !</span></center></td></<tr>';
	}else{
		foreach($wbackup_list[$type] as $k => $v){
			echo '<tr id='.basename($v['name'], $file_type).'>
					<td>'.$v['name'].'</td>
					<td>'.$v['type'].'</td>
					<td>'.$v['server_name'].'</td>
					<td>'.(!empty($v['size']) ? trim(round(($v['size']/1024)/1024, 2).' M') : "--").'</td>
					<td onclick="restore_backup(this.parentNode.id, '.$v['backup_server_id'].', \''.$v['type'].'\');"><img title="'.$l['restore'].'" class="restore" style="cursor:pointer" src="'.$theme['images'].'restore.gif"></td>'
					.($v['type'] == 'local' ? '<td><a href="'.$globals['index'].'act=webuzo_backup&download='.$v['name'].'" title="'.$l['download'].'" ><img src="'.$theme['images'].'download.gif"></a></td>' : '<td></td>').
					'<td onclick="delete_backup(this.parentNode.id, '.$v['backup_server_id'].');"><img title="'.$l['delete'].'" class="delete" style="cursor:pointer" src="'.$theme['images'].'remove.gif" /></td>
					<td><input type="checkbox" name="'.$type.'_checkbox[]" class="'.$type.'_checkSingle" value="'.basename($v['name'], $file_type).'" data-server_id="'.$v['backup_server_id'].'" ></td>
				</tr>';
		}
	}
	
	echo '</tbody></table></div>';
}

function schedule_backups(){

global $globals, $theme, $list_autobackups, $l, $softpanel;
$backup_servers = $softpanel->get_backup_servers();
$username = get_username();

echo '<div class="col-sm-12 innertabs">
	<form accept-charset="'.$globals['charset'].'" action="" method="post" name="scheduler" id="scheduler">
		<div class="row">
			<div class="col-sm-2 col-xs-12">
				<label class="sai_head" for="minute">'.$l['minute'].'</label>&nbsp;
				<span class="sai_exp2"><font size="2">'.$l['mtype'].'</font></span>
			</div>
			<div class="col-sm-3 col-xs-12">
				<input type="text" name="minute" id="minute" class="form-control" value="0" />
			</div>
			<div class="col-sm-7 col-xs-12">
				<select id="minute_options"class="form-control" onchange="select_option(\'minute\')">
					<option value="---">---'.$l['minute'].'---</option>';
					for($i = 0 ; $i < 60 ; $i++){
						echo'<option value="'.$i.'">'.($i < 10 ? ':0'.$i : ':'.$i).'</option>';
					}
				echo
				'</select>
			</div>
		</div><br/>
		<div class="row">
			<div class="col-sm-2 col-xs-12">
				<label class="sai_head" for="hour">'.$l['hour'].'</label>&nbsp;
				<span class="sai_exp2"><font size="2">'.$l['htype'].'</font></span>
			</div>
			<div class="col-sm-3 col-xs-12">
				<input type="text" name="hour" id="hour" class="form-control" value="0" />
			</div>
			<div class="col-sm-7 col-xs-12">
				<select id="hour_options" class="form-control" onchange="select_option(\'hour\')">
					<option value="---">---'.$l['hour'].'---</option>';
					for($i = 0 ; $i < 24 ; $i++){
						echo'<option value="'.$i.'">'.$i.':00 ('.$i.')</option>';
					}
				echo'
				</select>
			</div>
		</div><br/>
		<div class="row">
			<div class="col-sm-2 col-xs-12">
				<label class="sai_head" for="day">'.$l['day'].'</label>&nbsp;
				<span class="sai_exp2"><font size="2">'.$l['dtype'].'</font></span>
			</div>
			<div class="col-sm-3 col-xs-12">
				<input type="text" name="day" id="day" class="form-control" value="*" />
			</div>
			<div class="col-sm-7 col-xs-12">
				<select id="day_options" class="form-control" onchange="select_option(\'day\')">
					<option value="---">---'.$l['comm_sett'].'---</option>
					<option value="*">'.$l['every_day'].'</option>
					<option value="*/2">'.$l['every_other_day'].'</option>
					<option value="---">---'.$l['day'].'---</option>';
					$ends = array('th','st','nd','rd','th','th','th','th','th','th');
					for($i = 1 ; $i < 32 ; $i++){
						if((($i % 100) >= 11) && (($i % 100) <= 13)){
							echo '<option value="'.$i.'">'.$i.'th ('.$i.')</option>';
						}
						else{
							echo '<option value="'.$i.'">'.$i.$ends[$i % 10].' ('.$i.')</option>';
						}
					}
				echo'
				</select>
			</div>
		</div><br/>
		<div class="row">
			<div class="col-sm-2 col-xs-12">
				<label class="sai_head" id="type" for="month">'.$l['month'].'</label>&nbsp;
				<span class="sai_exp2"><font size="2">'.$l['motype'].'</font></span>
			</div>
			<div class="col-sm-3 col-xs-12">
				<input type="text" name="month" id="month" class="form-control" value="*" />
			</div>
			<div class="col-sm-7 col-xs-12">
				<select id="month_options" class="form-control" onchange="select_option(\'month\')">
					<option value="---">---'.$l['comm_sett'].'---</option>
					<option value="*">'.$l['every_mon'].'</option>
					<option value="*/2">'.$l['every_other_mon'].'</option>
					<option value="*/3">'.$l['every_third_mon'].'</option>
					<option value="---">---'.$l['month'].'---</option>';
					for($i = 1 ; $i < 13 ; $i++){
						echo '<option value="'.$i.'">'.date("F", mktime(0, 0, 0, $i, 10)).' ('.$i.')</option>';
					}
				echo'
				</select>
			</div>
		</div><br/>
		<div class="row">
			<div class="col-sm-2 col-xs-12">
				<label class="sai_head" id="type" for="weekday">'.$l['weekday'].'</label>&nbsp;
				<span class="sai_exp2"><font size="2">'.$l['wtype'].'</font></span>
			</div>
			<div class="col-sm-3 col-xs-12">
				<input type="text" name="weekday" id="weekday" class="form-control"  value="*" />
			</div>
			<div class="col-sm-7 col-xs-12">
				<select id="weekday_options" class="form-control" onchange="select_option(\'weekday\')">
					<option value="---">---'.$l['comm_sett'].'---</option>
					<option value="1-5">'.$l['every_weekday'].'</option>
					<option value="0,6">'.$l['every_weekend'].'</option>
					<option value="1,2,3">'.$l['every_mon_tues_wed'].'</option>
					<option value="0,2,4">'.$l['every_sun_tues_thur'].'</option>
					<option value="---">---'.$l['weekday'].'---</option>';
					$days = array($l['sun'], $l['mon'], $l['tues'], $l['wed'], $l['thur'], $l['fri'], $l['sat']);
					for($i = 0 ; $i < 7 ; $i++){
						echo '<option value="'.$i.'">'.$days[$i].' ('.$i.')</option>';
					}
				echo'
				</select>
			</div>
		</div><br/>
		<div class="row">
			<div class="col-sm-2">
				<label class="sai_head">'.$l['select_server'].'</label>					
			</div>
			<div class="col-sm-10">
				<select class="form-control" name="backup_server" id="backup_server" style="height:35px;">
					<option value="-1">Local</option>';
					foreach($backup_servers as $key => $value){
						echo '<option data-backup-location="'.$value['backup_location'].'" value="'.$key.'">'.$value['name'].' ('.$value['hostname'].')</option>';
					}
			echo'</select><br/>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2">
				<label class="sai_head" id="type" for="type">'.$l['type'].'</label>
			</div>
			<div class="col-sm-10">
				<select id="backup_type" class="form-control">
					<option value="full">'.$l['backup_full'].'</option>
					<option value="home">'.$l['backup_home'].'</option>
					<option value="data">'.$l['backup_db'].'</option>
					<option value="mail">'.$l['backup_mail'].'</option>
				</select>
			</div>
		</div><br/>
		<div class="row" id="row_skip_softaculous" style="display: none;">
			<div class="col-sm-2">
				<label class="sai_head">'.$l['skip_softaculous'].'</label>
				<span class="sai_exp2" style="font-size:12px">/home/'.$username.'/'.$l['skip_softaculous_sub'].'</span>					
			</div>
			<div class="col-sm-10">
				<input type="checkbox" name="skip_softaculous" id="skip_softaculous" /><br/>
			</div>
		</div>	
		<div class="row">
			<div class="col-sm-offset-5 col-sm-7">
				<input type="submit" style="cursor:pointer" value="'.$l['schedule'].'" name="create_record" class="flat-butt" id="schedule"/> &nbsp;<img id="schedule_gif" src="'.$theme['images'].'progress.gif" style="display:none">
			</div>
		</div><br/>
	</form>
</div>';

echo '
	<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
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

// ]]></script>';

}

function list_autobackups(){
	global $globals, $theme, $list_autobackups, $l, $softpanel;

	$list_autobackups = $softpanel->wlist_autobackups();

	echo '<div class="col-sm-12 innertabs">
	<table border="0" cellpadding="8" cellspacing="1" width="100%" align="center" class="table table-hover table-hover-moz td_font">			
		<thead style="background:#EFEFEF;" class="sai_head2">
			<tr>				
				<th width="15%">'.$l['minute'].'</th>
				<th width="15%">'.$l['hour'].'</th>
				<th width="15%">'.$l['day'].'</th>
				<th width="15%">'.$l['month'].'</th>
				<th width="15%">'.$l['weekday'].'</th>				
				<th width="15%">'.$l['backup_server'].'</th>
				<th width="15%">'.$l['type'].'</th>
				<th style="text-align:right;">'.$l['option'].'</th>
			</tr>
		</thead>
		<tbody>';
		
		$i =1;		

		if(empty($list_autobackups)){
			echo '<tr><td colspan=8><center><span>'.$l['no_autobackup'].'</span></center></td></<tr>';
		}else{
			foreach ($list_autobackups as $key => $value){
				echo '<tr id="tr'.$key.'">
					<td>
						<span>'.$list_autobackups[$key]['min'].'</span>
					</td>
					<td>
						<span>'.$list_autobackups[$key]['hour'].'</span>
					</td>
					<td>
						<span>'.$list_autobackups[$key]['day'].'</span>
					</td>
					<td>
						<span>'.$list_autobackups[$key]['mon'].'</span>
					</td>
					<td>
						<span>'.$list_autobackups[$key]['week'].'</span>
					</td>
					<td>
						<span>'.$list_autobackups[$key]['backup_server'].'</span>
					</td>
					<td>
						<span>'.$list_autobackups[$key]['type'].'</span>
					</td>
					<td onclick="remove_schedule(this.parentNode.id);" style="width:1%;">
						<img title="Delete" class="delete" src="'.$theme['images'].'remove.gif" style="cursor:pointer" />
					</td>
				</tr>';
				$i++;
			}
		}

		echo '</tbody>
	</table>
	</div>';
}

function show_remote_backup_servers($type){
		
	global $globals, $l, $theme, $softpanel, $done, $error;
	$backup_servers = $softpanel->get_backup_servers();
	
	echo '<table border="0" cellpadding="6" cellspacing="1" width="100%" class="table table-hover table-hover-moz" align="center">
			<thead style="background:#EFEFEF;" class="sai_head2">
				<tr>
					<th>'.$l['name'].'</th>
					<th>'.$l['hostname'].'</th>
					<th>'.$l['type'].'</th>
					<th>'.$l['username'].'</th>
					<th>'.$l['port'].'</th>
					<th>'.$l['backup_location'].'</th>
					<th colspan="2">'.$l['manage'].'</th>
					<th><input type="checkbox" onclick=\'allCheckboxClicked(this,"'.$type.'");\' name="'.$type.'_allCheckbox" id="'.$type.'_allCheckbox"></th>
				</tr>
			</thead>
			<tbody id="backup_server_table">';
							
			if(empty($backup_servers)){
				echo '<tr><td colspan=9><center><span>'.$l['no_backup_servers'].'</span></center></td></<tr>';
			}else{
				foreach($backup_servers as $key => $value){
					echo '
						<tr id="'.$key.'">
							<td>'.$value['name'].'</td>
							<td>'.$value['hostname'].'</td>
							<td>'.$value['type'].'</td>
							<td>'.$value['username'].'</td>
							<td>'.$value['port'].'</td>
							<td>'.$value['backup_location'].'</td>
							<td>
								<a href="'.$globals['ind'].'act=add_backup_server&edit_backup_server='.$key.'" style="text-decoration:none">
								<img style="cursor:pointer;" title="'.$l['edit'].'" src="'.$theme['images'].'edit.gif" /></a>
							</td>
							<td onclick="remove_backup_server(\''.$key.'\');"><img style="cursor:pointer;" title="'.$l['remove'].'" src="'.$theme['images'].'remove.gif" /></td>
							<td><input type="checkbox" name="remote_checkbox[]" class="'.$type.'_checkSingle" value="'.$key.'"></td>
						</tr>
					';
				}
			}
			
		echo '
		</tbody>
		</table>';
	
}