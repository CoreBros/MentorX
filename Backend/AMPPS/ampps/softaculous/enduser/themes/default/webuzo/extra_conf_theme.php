<?php

// This page allows to include additional configurations to 
// the existing webserver configurations
// 
//////////////////////////////////////////////////////////////
//===========================================================
// extra_conf_theme.php
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

function extra_conf_theme(){

	global $user, $globals, $l, $theme, $softpanel, $iscripts, $error, $done, $domain_list, $file_list, $domain_name, $iapps, $w_list;
	
	// To update domains links
	if(optGET('ajaxdom')){
		showconf();
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
			showconf();
			return true;
		}
	}	
	
	softheader($l['<title>']);
		 
	echo '
	<div class="bg"><br>
		<div class="row sai_main_head text-center"><img src="'.$theme['a_images'].'extra_conf.png" class="webu_head_img"/>&nbsp;'.$l['head'].'</div><hr>';
		//Confirmation Message on conf file
		if(!empty($done)){
			echo '  <div class="alert alert-success"><a href="#close" class="close" data-dismiss="alert" aria-lable="close">&times;</a>'.$done.'</div>';
		}
	//Error message
		error_handle($error);
	 
	echo '
		<form accept-charset="'.$globals['charset'].'" action="" method="post" name="mxentry" id="editform" enctype = "multipart/form-data" class="form-horizontal">
			<div class="row">
				<div class="col-sm-5"><label for="selectdomain" class="sai_head ">'.$l['domain'].'</label></div>
				<div class="col-sm-7">
					<select name="selectdomain" id="selectdomain" class="form-control">';
						foreach ($domain_list as $key => $value){
							if($domain_name == $key){
								echo '<option value='.$key.' selected="selected" >'.$key.'</option>';
							}else{
								echo '<option value='.$key.'>'.$key.'</option>';
							}
						}
				echo '</select>&nbsp;
					<img id="changedom" src="'.$theme['images'].'progress.gif" style="display:none">
				</div>
			</div>	 
			<div class="row">
				<div class="col-sm-5"><label for="selectweb" class="sai_head ">'.$l['webserver'].'</label></div>
				<div class="col-sm-7">
					<select name="selectweb" id="selectweb" class="form-control">';
						foreach ($w_list as $key => $value){
							echo '<option value='.$key.'>'.$value.'</option>';
						}
				echo '</select>
				</div>
			</div><br />
			
			<div class="row">
				<div class="col-sm-5">
					<label for="destination_upload" class="sai_head " style="margin-top:5px;">'.$l['destination'].'</label>
				</div>
				<div class="col-sm-7">
					<input type="file" name="destination_upload" id="destination_upload" accept=".conf"/>
				</div>
			</div><br/>
			
			<div class="row">
				<div class="col-sm-offset-5 col-sm-7">
					<input type="hidden" name="create_record" value="1" />
					<input type="submit" value="'.$l['submit_button'].'" name="create_record" class="flat-butt" id="submitrec"/> &nbsp;<img id="createrec" src="'.$theme['images'].'progress.gif" style="display:none">
				</div><br/>
			</div>
		</form>
		<br>'; 
	echo '
		<br><hr>
		<div class="row">
			<div class="col-sm-12 sai_head text-center">
				<h4 style="display:inline;">
					'.$l['record_table'].' :
					<span id="domain_file">'.$domain_name.'</span>
				</h4>
			</div>
		</div>
		<br >
		<div id="showrectab">';
			showconf();
echo '  </div>
	</div>
	
	<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
	$(document).ready(function(){
		
		$("#destination_upload").on("change",function(){
			
			$("#fileselected").text("Selected: "+this.value.split(/[\\\/]/).pop());
		});
		
		$("#selectdomain").change(function(){
			$("#changedom").css("display", "");
			var domain = $(this).val();
			$.ajax({
				type: "POST",
				url: window.location+"&ajaxdom=1&domain_name="+domain,
				success: function(data){
					$("#changedom").css("display", "none");
					$("#showrectab").html(data);
					$("#domain_file").html(domain);
				}
			});
		});
		
	});
	// ]]></script>';
	
	softfooter();

}

function showconf(){

	global $globals, $l, $softpanel, $error, $file_list, $domain_name, $theme, $w_list;
	
	$file_list = $softpanel->read_extra_conf($domain_name);
		
	if(!is_array($file_list)){		
	   //echo 'NO RECORD FOUND!!!';
	   echo '<div class="row">
				<div class="sai_notice">'.$l['no_record'].'</div>
			</div>';
	}else{
		echo '
		<table class="table table-hover table-hover-moz">
			<thead class="sai_head2" style="background-color: #EFEFEF;">
				<tr>
					<th>'.$l['webserver'].'</th>
					<th>'.$l['destination'].'</th>
					<th style="text-align: right; padding-right: 2%;">'.$l['option'].'</th>
				</tr>
			 <thead>
			 <tbody>';
		
		//Printing from file
		$i = 1;
		foreach ($w_list as $kkey => $vvalue){
			foreach ($file_list[$kkey] as $key => $value){
				echo '
				<tr id="trc'.$kkey.'_'.$key.'" >
					<td>
						<span value="'.$kkey.'" id="priorityc'.$kkey.'_'.$key.'">'.$vvalue.'</span>
						<input type="text" id="priority_hidec'.$kkey.'_'.$key.'" style="display:none;" value="'.$kkey.'" />
					</td>
					<td>
						<span id="destinationc'.$kkey.'_'.$key.'" class="editfile" cursor:pointer;" >'.$value.'</span>
						<input type="text" id="destination_entryc'.$kkey.'_'.$key.'" size="50" value="'.$value.'" style="display:none;" />
					</td>
					<td style="text-align: right; padding-right: 2%;">
						<img id="didc'.$kkey.'_'.$key.'" class="delete" title="Delete" src="'.$theme['images'].'remove.gif" style="cursor:pointer" />&nbsp&nbsp&nbsp;
						<img id="cidc'.$kkey.'_'.$key.'" class="cancel" title="Cancel" src="'.$theme['images'].'del.gif" style="display:none;" />
					</td>
				</tr>';
				$i++;			
			}
		}
		echo '
			</tbody>
		</table>';
	}
	
	echo '<br />
	<div id="detailrectab" style="display:none;"></div>
	
	<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
	
	function removeConfigFile(did){
		var editwebserver = $("#priority_hide"+did).val();
		var editdestination = $("#destination_entry"+did).val();
		$.ajax({
			type: "POST",
			url: window.location+"&domain_name='.$domain_name.'&ajaxdel=1&delete_record="+did,
			data: "editwebserver="+ editwebserver +"&editdestination="+ editdestination,
			
			// Checking for Error
			success: function(data){
				var result = data.substring(0,1);
				if(result == "1"){
				
					var msg = data.substring(1,data.indexOf("<"));
					var output = data.substring(data.indexOf("<"));
					message_box.show_message( "Done ",msg,2);
					$("#showrectab").html(output);
					
				}else{
					$("#did"+did).attr("src", "'.$theme['images'].'remove.gif");
					message_box.show_message("Error", msg, 1);
				}
				
			},
			error: function(request,error) {
				$("#did"+did).attr("src", "'.$theme['images'].'remove.gif");
				message_box.show_message("Error", "'.$l['connect_error'].'", 1);
			}
		});
	}
	
	if(typeof removeConfigFile === "function"){
		var message_box = new MboxObject(removeConfigFile, "");
	}
	
	$(document).ready(function(){
		// For deleting record
		$(".delete").click(function() {
			var did = $(this).attr("id").substr(3);
			message_box.delete_message ("Warning", "'.$l['record_del_conf'].'", did);
		});
	});
	// ]]></script>';
}

?>