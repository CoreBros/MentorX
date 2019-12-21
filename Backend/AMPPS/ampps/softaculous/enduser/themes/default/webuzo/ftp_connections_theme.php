<?php

/**
 * This page manages the FTP connections to the FTP Server.
 * 
 * @package  webuzo
 */
//===========================================================
// ftp_connections_theme.php
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

function ftp_connections_theme(){

	global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $scripts, $ftp_list, $done, $tuser;
	
	// Ajax response for deleting a ftp connection
	if(optGET('ajaxdel')){
		
		// Error
		if(!empty($error)){
			echo '0'.current($error);
			return false;
		}
		
		// Success
		if(!empty($done)){
			echo '1'.$l['delete'];
			ftp_list_conn();
			return true;
		}
		
	}
	
	softheader($l['<title>']);
	
	echo '
	<div class="bg"><br />
		<div class="sai_main_head"><center><img src="'.$theme['a_images'].'ftp_connections.png" alt="" />&nbsp;'.$l['ftp_connections_head'].'</center></div><hr>
		
		<center>
			<div id="showrectab">';
				ftp_list_conn();
			echo'
			</div>
		</center>
	</div>';
	
	softfooter();
}

function ftp_list_conn(){
		
	global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $scripts, $ftp_list, $done, $tuser;

	$ftp_list = $softpanel->list_ftp_connections();

	echo'
	<table border="0" cellpadding="8" cellspacing="1" width="100%" align="center" class="table table-hover table-hover-moz td_font">
		<thead style="background:#EFEFEF;" class="sai_head2">
			<tr>
				<th>'.$l['ftp_user'].'</th>
				<th style="text-align:center">'.$l['ftp_logged_in'].'</th>
				<th style="text-align:center">'.$l['ftp_log_time'].'</th>
				<th style="text-align:center">'.$l['ftp_status'].'</th>
				<th style="text-align:center">'.$l['ftp_process_id'].'</th>
				<th style="text-align:right">'.$l['ftp_disconnect'].'</th>
			</tr>
		</thead>
		<tbody>';
		if(!empty($ftp_list)){
			$i = 1;
			foreach ($ftp_list as $key => $value){
			
				echo '
				<tr id="tr'.$key.'">
					<td>'.$value['ftp_user'].'</td>
					<td style="text-align:center">'.$value['log_from'].'</td>
					<td style="text-align:center">'.datify($value['ftp_timestamp'], 1, 1, 0).'</td>
					<td style="text-align:center">'.$value['status'].'</td>
					<td style="text-align:center">'.$key.'</td>
					<td style="text-align:right"><img title="Delete" class="delete" id="did'.$key.'" src="'.$theme['images'].'remove.gif" style="cursor:pointer" /></td>
				</tr>';
				$i++;
			}
			
		}else{
			
			echo '<br /><tr class="sai_oddrowcolor">
				<td colspan="6" align="center">'.$l['no_ftp_connections_found'].'</td>
			</tr>';
		
		}
	echo '
		</tbody>
	</table>
	<br><br>';
	
	
	echo'
	<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
		// For msgbox MboxObject(fYes, fNo)
		var message_box = new MboxObject(deleteftpcon,"");
		
		function deleteftpcon(did){
			$.ajax({
				type: "POST",
				url: window.location+"&ajaxdel=1&ftp_connection_pid="+did,
				// Checking the results
				success: function(data){
					var result = data.substring(0,1);
					var msg = data.substring(1);
					if(result == "1"){
						var msg = data.substring(1,data.indexOf("<table"));
						var output = data.substring(data.indexOf("<table"));
						message_box.show_message("Delete",msg,2);
						$("#showrectab").html(output);
					}
					if(result == "0"){
						message_box.show_message("Error",msg,1);
					}
				},
				error: function(request,error){
					message_box.show_message("Error",\''.$l['connect_error'].'\',1);
				}
			});
		}
				
		$(document).ready(function(){
			$(".sai_altrowstable tr").mouseover(function(){
				var old_class = $(this).attr("class");
				$(this).attr("class", "sai_tr_bgcolor");
				
				$(this).mouseout(function(){
					$(this).attr("class", old_class);
				});
			});
			
			// FOR DELETING THE FTP CONNECTION
			$(".delete").click(function(){
				var did = $(this).attr(\'id\');
				did = did.substr(3);
				message_box.delete_message(\'Warning\',\''.$l['record_del_conf'].'\',did);
			});
		});
	// ]]></script>';  	
}

