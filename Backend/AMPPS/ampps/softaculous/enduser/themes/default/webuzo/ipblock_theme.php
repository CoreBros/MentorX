<?php

//////////////////////////////////////////////////////////////
//===========================================================
// updates_theme.php
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
function ipblock_theme(){

	global $theme, $globals, $l, $error, $softpanel ,$done ,$add_list;
	
	// For delete
	if(optGET('ajaxdel')){				
		if(!empty($error)){				
			echo '0'.current($error);
			return false;
		}
		if(!empty($done)){
			echo '1'.$l['delete'];	
			showip();			
			return true;			
		}
	}
	
	softheader($l['<title>']);	
	echo '<div class="bg"><br/>
			<div class="sai_main_head"><center><img src="'.$theme['a_images'].'ip_block.png"  alt=""  />&nbsp;'.$l['lbl_head'].'</center></div><hr>';
			error_handle($error);

			if(!empty($done)){
				echo '<div class="alert alert-success text-center"><a href="#close" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$l['rec_added'].'</div>';
			}				
			echo '<form accept-charset="'.$globals['charset'].'" action="" method="post" name="ipblock" id="editform" class="form-horizontal">
				<div class="row">
					<div class="col-sm-5">	
						<label class="sai_head" style="font-size:16px" for="dip">'.$l['name'].'</label><br><br>
						<span class="sai_exp2" style="font-size:14px">You can specify the IP Address in the following format</span><br>
						<span class="sai_exp2" style="font-size:14px">
							<b>'.$l['single_ip'].':</b>
							<span> 192.168.0.1 or example.com</span><br>
							<b>'.$l['ip_range'].':</b>
							<span> 192.168.0.1 - 192.168.0.50</span><br>
							<b>'.$l['cidr_format'].':</b>
							<span> 192.168.0.1/20</span><br>
						</span>
					</div>
					<div class="col-sm-7">					
						<input type="text" name="dip" id="dip" class="form-control" />				
					</div>
				</div><br/>
				<div class="row">
					<div class="col-sm-offset-5 col-sm-7">
				        <input type="hidden" name="add_ip" value="1" />
						<input type="submit" style="cursor:pointer" value="'.$l['submit_button'].'" name="create_record" class="flat-butt" id="submitip"/> &nbsp;<img id="createmx" src="'.$theme['images'].'progress.gif" style="display:none">
					</div>
				</div><br/>
			</form>
	</div>
	</br></br>
	<div class="bg">
		<div class="sai_sub_head"><center>'.$l['record_table'].'</center></div><hr>
		<center><div id="showrectab">';
			showip();
		echo '</div></center>
	</div>';
	softfooter();
}

function showip(){

	global $globals, $l,$softpanel, $error, $dns_list, $domain_name, $theme, $add_list;
	
	// printing from file
	$add_list = $softpanel->readipblock();	

	echo '<table border="0" cellpadding="8" cellspacing="1"  class="table table-hover table-hover-moz td_font">
	<thead style="background:#EFEFEF;" class="sai_head2">
		<tr>
			<th width="30%"><font>'.$l['block'].'</font></th>
			<th width="30%"><font>'.$l['start_ip'].'</font></th>
			<th width="30%"><font>'.$l['end_ip'].'</font></th>
			<th style="text-align:right"><font>'.$l['option'].'</font></th>				
		</tr>
	</thead>
	<tbody>';					

	if(empty($add_list)) {
		echo '<tr><td colspan=4><center><span>'.$l['no_ip_blocked'].'</span></center></td></<tr>';
	}else{

		$i =1;
		foreach ($add_list as $key => $value){	
			echo'
			<tr id="tr'.$key.'">
				<td><span>'.$value.'</span></td>';
				$tmp = cidr_to_iprange($value);
				echo'
				<td><span>'.$tmp[0].'</span></td>
				<td><span>'.$tmp[1].'</span></td>
				<td style="text-align:right"><img title="Delete" class="delete" style="cursor:pointer;" id="did'.$key.'"  src="' . $theme['images'] . 'remove.gif" /></td>
			</tr>';
			$i++;			
		}
	} 
	echo '</tbody>
	</table>
	<script language="javascript" type="text/javascript"><!-- // --><![CDATA[	
	
		// For msgbox MboxObject(fYes, fNo)
		var message_box = new MboxObject(deleteDomain,"");
		
		function deleteDomain(did){		
			$.ajax({				
				type: "POST",				
				url: window.location+"&ajaxdel=1&delete_record="+did,				
				// checking for error
				success: function(data){
					var result = data.substring(0,1);					
					var msg = data.substring(1);
					if(result == "1"){
						var msg = data.substring(1,data.indexOf("<table"));
						var output = data.substring(data.indexOf("<table"));							
						message_box.show_message( "Delete ",msg,2);														
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
				did = did.substr(3);						
				message_box.delete_message (\'Warning\',\''.$l['record_del_conf'].'\',did);			
			});				
		});	
	// ]]></script>';	
	
}

?>