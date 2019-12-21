<?php

// This page manages the ftp user for @webuzo.
//Allowed  soft user to delete ftp user and change theire password.
//////////////////////////////////////////////////////////////
//===========================================================
// ftp_theme.php
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


function ftp_theme(){

	global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $scripts, $ftp_list, $done, $tuser, $is_running;
	
	// for delete
	if(optGET('ajaxdel')){	
			
		if(!empty($error)){				
			echo '0'.current($error);
			return false;
		}
		if(!empty($done)){
			echo '1'.$l['delete'];
			ftp_list();
			return true;			
		}
	}
	
	// for update
	if(optGET('ajaxup')){	
			
		if(!empty($error)){				
			echo '0'.current($error);
			return false;
		}
		if(!empty($done)){
			echo '1'.$l['update'];
			ftp_list();
			return true;			
		}
	}
	
	//check host
	if(optREQ('check_host')){
		
		if(!empty($done)){
			//Domain doesn't resolve to Webuzo
			echo '1'.$l['is_domain_resolve'];
			return true;			
		}else{
			//Domain resolve to Webuzo
			echo '0';
			return true;
		}
	}
	
	$__tmp = explode(':', (!empty($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost'));
	$__ip = $__tmp[0];
	
	softheader($l['<title>']);
	
	echo '
	<div class="bg"><br />
		<div class="sai_main_head"><center><img src="'.$theme['a_images'].'ftp.png" alt="" />&nbsp;'.$l['ftp_head'].'</center></div>
		<hr>';
		
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
		
		
		echo '
		<div class="row-fluid" style="display: none;" id="check_host">
			<div class="alert alert-warning text-center" style="padding:10px ; font-size: 15px" id="check_host_msg">
				<i class="fa sai-info fa-1x" style="color:#8a6d3b;vertical-align: middle;"></i>
			</div>
		</div>';
		
	
		echo '<center>
			<div id="showrectab">';
				ftp_list();
			echo '</div>
		</center>
	</div>';
	
	softfooter();
}
		
function ftp_list(){
	
	global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $scripts, $ftp_list, $done, $tuser;
	
	$ftp_list = $softpanel->getftpusers();
	
		echo '
		<table width="100%" align="center" class="table table-hover table-hover-moz td_font">';	
			echo '<thead style="background:#EFEFEF;" class="sai_head2">
				<tr>
					<th>'.$l['ftp_name'].'</th>
					<th>'.$l['ftp_path'].'</th>
					<th>'.$l['ftp_usage'].'</th>
					<th>'.$l['ftp_quota'].'</th>
					<th colspan="4" style="text-align:right">'.$l['ftp_option'].'</th>
				</tr>
			</thead>
			<tbody>';
				$i=1;						
				foreach ($ftp_list as $key => $value){					
					echo '<tr id="tr'.$i.'">
						<td><p style="word-break: break-all;">'.$key.'</p></td>';
						echo '<td>'.$value['path'].'</td>';	
						echo '<td>'.$value['usage']. '&nbsp;'.$l['limited'].'</td>';			
						if(preg_match('/unlimited/is', $value['quota'])){
							echo '<td>
								<span id="quo'.$i.'">'.$l['ftp_quota_unlimit'].'</span>
								<span id="quota_limit'.$i.'" style="display:none;" >
								<input type="radio" name="quota'.$i.'" id="qunlimit'.$i.'" value="unlimited" checked="checked" onchange="disableinput('.$i.')" /> '.$l['unlimited'].' &nbsp;
								<input type="radio" name="quota'.$i.'" id="qlimit'.$i.'" value="limited" onchange="enableinput('.$i.')" /> <input type="text" name="qutamb" id="qutamb'.$i.'" size="5" value="1000" disabled="disabled" />'.$l['limited'].'</span>
							</td>';
						}else{
							$qlimit = explode('(',$value['quota']);					
							$q_limit = explode('M',$qlimit[0]);
							
							echo '<td>
								<span id="quo'.$i.'">'.trim($q_limit[0]).'&nbsp'.$l['limited'].'</span>
								<span id="quota_limit'.$i.'" style="display:none;">
								<input type="radio" name="quota'.$i.'" id="qunlimit'.$i.'" value="unlimited" onchange="disableinput('.$i.')" /> '.$l['unlimited'].' &nbsp;
								<input type="radio" name="quota'.$i.'" id="qlimit'.$i.'" value="limited" checked="checked" onchange="enableinput('.$i.')" /> <input type="text" name="qutamb" id="qutamb'.$i.'" size="5" value="'.trim($q_limit[0]).'" />'.$l['limited'].'</span>
							</td>';
						}
						
						if ($key != $softpanel->getCurrentUser_webuzo()){
							echo '<td width="1%"><img title="Cancel" class="cancel" id="cid'.$i.'" src="'.$theme['images'].'del.gif" style="display:none;" /></td>
							
							<td width="1%"><img title="Edit" style="cursor:pointer" class="edit" id="eid'.$i.'" src="'.$theme['images'].'editdetail.gif"  /></td>
							
							<td width="1%"><a href="'.$globals['ind'].'act=editftp&fuser='.$key.'" title="'.$l['cpass'].'"><img src="'.$theme['images'].'randpass.gif" /></a></td>
							
							<td width="1%"><img title="Delete" class="delete" id="did'.$i.'" src="' . $theme['images'] . 'remove.gif" style="cursor:pointer" /></td>';
						}else{
							echo '<td width="1%"></td>
							<td width="1%"></td>
							<td width="1%"></td>
							<td style="text-align:right; padding-right: 2%;">-</td>';
						}
						$i++;
					echo '</tr>';
				}
			echo '</tbody>
		</table>	
		<br />	
		<div class="row">
			<div class="col-sm5">
				<a href="'.$globals['ind'].'act=ftp_account" style="text-decoration:none"><input type="submit" style="cursor:pointer" value="'.$l['add_new'].'" name="create_acc" class="flat-butt" id="submitftp" /></a>
			</div><br/>
		</div><br/>';
	
	echo '
	<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
		// For msgbox MboxObject(fYes, fNo)
		var message_box = new MboxObject(deleteDomain,"");
		
		function deleteDomain(did){
			$.ajax({
				type: "POST",
				url: window.location+"&ajaxdel=1&delete_fuser_id="+did,
				// checking for error
				success: function(data){
					var result = data.substring(0,1);
					if(result == "1"){
						var msg = data.substring(1,data.indexOf("<table"));
						var output = data.substring(data.indexOf("<table"));
						message_box.show_message( "Delete ",msg,2);
						$("#showrectab").html(output);
					}
					if(result == "0"){
						var msg = data.substring(1);
						message_box.show_message( "Error ",msg,1);
					}
				},
				error: function(request,error) {
					message_box.show_message("Error",\''.$l['connect_error'].'\',1);
				}
			});
		}
					
		$(document).ready(function(){
			
			//check host
			$.ajax({
				type: "POST",
				url: window.location+"&check_host=1",
				success: function(data){
					var result = data.substring(0,1);
					if(result == "1"){
						var msg = data.substring(1);
						$("#check_host_msg").append(msg);
						$("#check_host").show();
					}
				}
			});
			
			$(".sai_altrowstable tr").mouseover(function(){
				var old_class = $(this).attr("class");
				$(this).attr("class", "sai_tr_bgcolor");
				$(this).mouseout(function(){
					$(this).attr("class", old_class);
				});
			});
			
			// for deleting record
			$(".delete").click(function() {
				var did = $(this).attr(\'id\');
				did = did.substr(3);
				message_box.delete_message (\'Warning\',\''.$l['record_del_conf'].'\',did);
			});
			
			$(".edit").click(function() {
			var id = $(this).attr(\'id\');
			id = id.substr(3);
			
			$("#cid"+id).css("display", "");
				if($(this).attr(\'src\') == "'.$theme['images'].'save.gif"){
					if($_("qlimit"+id).checked){
						var quota_limit = ($("#qutamb"+id).val());
						var tmp = "&quota=limit&quota_limit="+quota_limit;
					}else{
						var tmp ="&quota=unlimited";
					}			
					$.ajax({
						type: "POST",
						url: window.location+"&ajaxup=1&edit_record="+id,
						data: tmp,
					
						// checking for error
						success: function(data){
							var result = data.substring(0,1);
							
							if(result == "0"){
								var msg = data.substring(1);
								message_box.show_message( "Error ",msg,1);
								$(\'#eid\'+id).attr("src","'.$theme['images'].'editdetail.gif");
							}	
							if(result == "1"){
								var msg = data.substring(1,data.indexOf("<table"));
								var output = data.substring(data.indexOf("<table"));
								message_box.show_message( "Done ",msg,2);
								if($_("qlimit"+id).checked){
									$(\'#quo\'+id).html($("#qutamb"+id).val() +\'' .$l['limited'].'\');
								}else{
									$(\'#quo\'+id).html(\''.$l['ftp_quota_unlimit'].'\');
								}
								$(\'#eid\'+id).attr("src","'.$theme['images'].'editdetail.gif");
								$("#showrectab").html(output);
							}	
						},
						error: function() {
							message_box.show_message("Error",\''.$l['connect_error'].'\',1);
						}
					});
					
					$(this).attr("src","'.$theme['images'].'progress.gif");
					$("#cid"+id).css("display", "none");
					$("#quota_limit"+id).css("display", "none");
					$("#quo"+id).css("display", "");
				}else{
					$(this).attr("src","'.$theme['images'].'save.gif");
					$("#quo"+id).css("display", "none");
					$("#quota_limit"+id)
						.val($("#quo"+id).text())
						.css("display", "")
						.focus();
				}
			});
			
			// For cancel
			$(".cancel").click(function() {
				var id = $(this).attr(\'id\');
				id = id.substr(3);
				$("#cid"+id).css("display", "none");
				$(\'#eid\'+id).attr("src","'.$theme['images'].'editdetail.gif");
				$("#quota_limit"+id).css("display", "none");
				$("#quo"+id).css("display", "");
			});
		});	
			
		function enableinput(idi){
			$_("qutamb"+idi).disabled=false;
		}
		
		function disableinput(idi){
			$_("qutamb"+idi).disabled=true;
		}
	// ]]></script>';

}
