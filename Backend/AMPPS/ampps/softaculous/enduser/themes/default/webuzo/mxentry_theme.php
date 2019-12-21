<?php

//This page use for make MX record for @webuzo.
// Also allowde to delete and update MX record
//////////////////////////////////////////////////////////////
//===========================================================
// settings_theme.php
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

function mxentry_theme(){

	global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $done, $domain_list, $dns_list, $domain_name;
	
	// For update
	if(optGET('ajaxup')){			
		if(!empty($error)){				
			echo '0'.current($error);
			return false;
		}
		if(!empty($done)){
			echo '1'.$l['edit'];	
			return true;			
		}
	}
	
	// To update domains links
	if(optGET('ajaxdom')){			
		showmx();
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
			showmx();	
			return true;			
		}
	}
	
	// For adding MX Record
	if(optGET('ajaxmx')){
		
		if(!empty($error)){			
			echo '0'.current($error);
			return false;
		}
		// Creating new table for display new DB
		if(!empty($done)){
			echo '1'.$l['rec_added'];			
			showmx();
			return true;
		}
	}
		
	softheader($l['<title>']);

	echo '<div class="bg"><br/><div class="sai_main_head"><center><img src="'.$theme['a_images'].'mx_entry.png" />&nbsp;'.$l['mxentry'].'</center></div><hr>
		<form accept-charset="'.$globals['charset'].'" action="" method="post" name="mxentry" id="editform" class="form-horizontal">
			<div class="row">
				<div class="col-sm-5">
					<label class="sai_head" for="selectdomain">'.$l['domain'].'</label>
				</div>
				<div class="col-sm-7">
					<select class="form-control" name="selectdomain" id="selectdomain">';
					foreach ($domain_list as $key => $value){	
						if($domain_name == $key){			
							echo '<option value='.$key.' selected=selected >'.$key.'</option>';
						}else{
							echo '<option value='.$key.'>'.$key.'</option>';
						}				
					}			
				echo '</select>&nbsp;<img id="changedom" src="'.$theme['images'].'progress.gif" style="display:none">
				</div>	
			</div>	
			<div class="row">
				<div class="col-sm-5">
					<label class="sai_head" for="priority">'.$l['priority'].'</label>
				</div>
				<div class="col-sm-7"> 
					<input type="text" name="priority" id="priority" class="form-control" />
				</div>
			</div><br/>	
			<div class="row">
				<div class="col-sm-5">
					<label class="sai_head" for="destination">'.$l['destination'].'</label>
				</div>
				<div class="col-sm-7">
					<input type="text" name="destination" id="destination" class="form-control" />
				</div>
			</div><br/>
			<div class="row">
				<div class="col-sm-offset-5 col-sm-7">
					<input type="hidden" name="create_record" value="1" />
					<input type="submit" style="cursor:pointer" value="'.$l['submit_button'].'" name="create_record" class="flat-butt" id="submitmx"/> &nbsp;<img id="createmx" src="'.$theme['images'].'progress.gif" style="display:none">
				</div><br/>			
			</div>
		</form>		
		<center>
			</br>
			<label class="sai_head">'.$l['record_table'].' <label id="domain_file">'.$domain_name.'</label></label><br/>
		</center>
		<div id="showrectab">';
			showmx();
	echo '</div>
	</div>
	
	<script language="javascript" type="text/javascript"><!-- // --><![CDATA[	
	$(document).ready(function(){
		$("#selectdomain").change(function(){
			$("#changedom").css("display", "");
			var domain = $(this).val();
			$.ajax({				
				type: "POST",				
				url: window.location+"&ajaxdom=1&domain="+domain,
				success: function(data){
					$("#changedom").css("display", "none");
					$("#showrectab").html(data);
					$("#domain_file").html(domain);
				}															  
			});	
		});
				
		// For creating MX Record	
		$("#submitmx").click(function(){
			$("#createmx").css("display", "");				
			$.ajax({
				type: "POST",
				url: window.location+"&ajaxmx=1",					
				data: $("#editform").serialize(),
				
				// Checking for error
				success: function(data){
					$("#createmx").css("display", "none");
					var result = data.substring(0,1);
					if(result == "1"){
						$_("priority").value="";
						$_("destination").value="";
						var msg = data.substring(1,data.indexOf("<table"));
						var output = data.substring(data.indexOf("<table"));							
						message_box.show_message( "Done ",msg,2);														
						$("#showrectab").html(output);																																
					}
					if(result == "0"){	
						$("#createmx").css("display", "none");
						var msg = data.substring(1);
						message_box.show_message( "Error",msg,1);
					}
				},
				error: function() {
					message_box.show_message("Error",\''.$l['connect_error'].'\',1);						
				}															
			});		
			return false;											
		});	
	});	
	// ]]></script>';
	
	softfooter();

}

function showmx(){

	global $globals, $l,$softpanel, $error, $dns_list, $domain_name, $theme;

	//printig from file
	$dns_list = $softpanel->readmxrecord($domain_name);

		echo '<br/>
		<table border="0" cellpadding="8" cellspacing="1" width="100%" class="table table-hover table-hover-moz td_font">
			<thead style="background:#EFEFEF;" class="sai_head2">
				<tr>
					<th width="20%"><font style="margin-left:30px;">'.$l['priority'].'</th>
					<th width="30%">'.$l['destination'].'</th>
					<th colspan="3" style="text-align:right">'.$l['option'].'</th>
				</tr>
			</thead>
			<tbody>';
			$i =1;
			if(empty($dns_list)){
				echo '<tr><td colspan=4><center><span>'.$l['no_mxentry'].'</span></center></td></<tr>';
			}else{
				foreach ($dns_list as $key => $value){
					echo '<tr id="tr'.$key.'" >
							 <td><span id="priority'.$key.'" style="margin-left:30px;">'.$dns_list[$key]['priority'].'</span>
							 <input type="text" id="priority_entry'.$key.'" style="display:none;"> </td>
							 <td><span id="destination'.$key.'">'.$dns_list[$key]['destination'].'</span>
							 <input type="text" id="destination_entry'.$key.'" style="display:none;"> </td>
							 <td style="width:2%; padding-right:0px; padding-left:0px;"><img title="Cancel" class="cancel" id="cid'.$key.'" src="'.$theme['images'].'del.gif" style="display:none; cursor:pointer;" /></td>
							 <td style="width:2%; padding-right:0px; padding-left:0px;"><img title="Edit" class="edit" id="eid'.$key.'" src="'.$theme['images'].'editdetail.gif" style="cursor:pointer" /></td>
							 <td style="width:2%; padding-right:0px; padding-left:0px;"><img title="Delete" class="delete" id="did'.$key.'" src="' . $theme['images'] . 'remove.gif" style="cursor:pointer" /></td>
						 </tr>';
					$i++;
				}
			}

			echo '
			</tbody>
		</table>

		<script language="javascript" type="text/javascript"><!-- // --><![CDATA[

			// For msgbox MboxObject(fYes, fNo)
			var message_box = new MboxObject(deleteDomain,"");

			function deleteDomain(did){
				$.ajax({
					type: "POST",
					url: window.location+"&domain_name='.$domain_name.'&ajaxdel=1&delete_record="+did,
					// checking for error
					success: function(data){
						var result = data.substring(0,1);
						var msg = data.substring(1);
						if(result == "1"){
							var msg = data.substring(1,data.indexOf("<table"));
							var output = data.substring(data.indexOf("<table"));							
							message_box.show_message( "Done ",msg,2);														
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
				
				// For cancel
				$(".cancel").click(function() {
					var id = $(this).attr(\'id\');
					id = id.substr(3);	
					$("#cid"+id).css("display", "none");
					$(\'#eid\'+id).attr("src","'.$theme['images'].'editdetail.gif");
					$("#priority_entry"+id).css("display", "none");
					$("#priority"+id).css("display", "");
					$("#destination_entry"+id).css("display", "none");
					$("#destination"+id).css("display", "");
				});	
				
				// For editing record
				$(".edit").click(function() {
					var id = $(this).attr(\'id\');
					id = id.substr(3);
					$("#cid"+id).css("display", "");
							
					if($(this).attr(\'src\') == "'.$theme['images'].'save.gif"){			
						var editpriority = $(\'#priority_entry\'+id).val();	
						var	editdestination = $(\'#destination_entry\'+id).val();
						$.ajax({
							type: "POST",
							url: window.location+"&domain_name='.$domain_name.'&ajaxup=1&edit_record="+id,
							data: "editpriority="+ editpriority +"&editdestination="+ editdestination,
							
							// checking for error
							success: function(data){
								var result = data.substring(0,1);					
								var msg = data.substring(1);						
								if(result == "0"){																								
									message_box.show_message( "Error ",msg,1);
									$(\'#eid\'+id).attr("src","'.$theme['images'].'editdetail.gif");							
								}
								if(result == "1"){						
									message_box.show_message( "Done ",msg,2);
									$(\'#priority\'+id).html($("#priority_entry"+id).val());
									$(\'#destination\'+id).html($("#destination_entry"+id).val()+\'.\');
									$(\'#eid\'+id).attr("src","'.$theme['images'].'editdetail.gif");
								}	
							},
							error: function() {
								message_box.show_message("Error",\''.$l['connect_error'].'\',1);					
							}
						});
						$(this).attr("src","'.$theme['images'].'progress.gif");
						$("#cid"+id).css("display", "none");
						$("#priority_entry"+id).css("display", "none");
						$("#priority"+id).css("display", "");
						$("#destination_entry"+id).css("display", "none");
						$("#destination"+id).css("display", "");			
					}else{
						$(this).attr("src","'.$theme['images'].'save.gif");
						$("#priority"+id).css("display", "none");
						$("#priority_entry"+id)
							.val($("#priority"+id).text())
							.css("display", "")
							.focus();
						$("#destination"+id).css("display", "none");
						$("#destination_entry"+id)
							.val($("#destination"+id).text().substring(0, $("#destination"+id).text().length - 1))
							.css("display", "")
							.focus();
					}
				});		
			});	
		// ]]></script>';

}

