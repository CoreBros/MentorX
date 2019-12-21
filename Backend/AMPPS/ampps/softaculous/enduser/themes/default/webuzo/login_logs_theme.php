<?php

/**
 * This page manages the Login Logs.
 * 
 * @package  webuzo
 */
//===========================================================
//////////////////////////////////////////////////////////////
//===========================================================
// login_logs_theme.php
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

function login_logs_theme(){
	
	global $user, $globals, $l, $theme, $softpanel, $error, $logs, $done;
	
	// For Deleting Login Logs
	if(optGET('delete_all')){
		
		if(!empty($error)){
			echo '0'.current($error);
			return false;
		}
		
		// Affirm Record Deletion
		if(!empty($done)){
			echo '1'.$l['rec_deleted'];
			show_tab();
			return true;
		}
		
	}

	softheader($l['<title>']);
	
	echo '
		<div class="bg"><br>
			<div class="row sai_main_head text-center"><img src="'.$theme['a_images'].'login_logs.png" alt="" class="webu_head_img"/>&nbsp;'.$l['ftp_head'].'</div>
			<div id="show_log">';
				show_tab();
	echo '
			</div>
		</div>';
		
	softfooter();
}

function show_tab(){
	global $user, $globals, $l, $theme, $softpanel, $error, $logs, $done;
	
	$logs_a = $softpanel->read_logs_login();
	$logs = array_reverse($logs_a['data'], true);
	
	echo '<hr>
		<div id="display_tab">
			<table class="table table-hover table-hover-moz">
				<thead class="sai_head2" style="background-color: #EFEFEF;">  
					<tr>
						<th>'.$l['access'].'</th>
						<th>'.$l['user'].'</th>
						<th>'.$l['ip'].'</th>
						<th>'.$l['status'].'</th>			
					</tr>
				</thead>
				<tbody>';
			$i=1;
			
		if(!empty($logs)){
			foreach ($logs as $key => $value){
				echo '
				<tr id="tr'.$i.'">
					<td>'.datify($value['ltime'], 1, 1, 0).'</td>
					<td>'.$value['user'].'</td>
					<td>'.$value['ip'].'</td>			
					<td>'.($value['status'] == 'Failed' ? '<font color="#FF0000">'.$value['status'].'</font>' : '<font color="#009900">'.$value['status'].'</font>').'</td>
				</tr>';
				$i++;
			}
			echo '
				</tbody>
			</table><br>
			<div class="row">
				<div class="col-sm-12 text-center">
					<input type="submit" value="'.$l['delete'].'" name="delete" id="delete" class="flat-butt" /> &nbsp;<img id="delete_rec" src="'.$theme['images'].'progress.gif" style="display:none">
				</div>
			</div>
			<br>';
		}else{
			echo '<tr><td colspan=4><center><span>'.$l['no_record'].'</span></center></td></<tr></tbody></table>';
		}
	echo '
		</div>
		<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
			
			function deleteLoginLogs(){
				$.ajax({
					type: "POST",				
					url: window.location+"&delete_all=1",								
					// checking for error
					success: function(data){
						$("#delete_rec").css("display", "none");
						var result = data.substring(0,1);
						if(result == "1"){
							var msg = data.substring(1,data.indexOf("<table"));
							var output = data.substring(data.indexOf("<table"));
							message_box.show_message("Done",msg,2);
							$("#show_log").html(output);
						}
						if(result == "0"){
							$("#createmx").css("display", "none");
							var msg = data.substring(1);
							message_box.show_message("Error",msg,1);
						}
					},				
					error: function(request,error) {
						message_box.show_message("Error","'.$l['connect_error'].'",1);					
					}
				});	
			}
			
			if(typeof deleteLoginLogs ==="function"){
				// For msgbox MboxObject(fYes, fNo)
				var message_box = new MboxObject(deleteLoginLogs,"");
			}	
			
			$(document).ready(function(){
				// For deleting record
				$("#delete").click(function() {
					message_box.delete_message ("Warning","'.$l['record_del_conf'].'");
				});
			});
		// ]]></script>
	';
}
