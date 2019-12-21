<?php

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

function advancedns_theme(){

	global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $done, $domain_list, $dns_list, $domain_name, $is_running;
	
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
		showdns();
		return true;
	}
	
	// For adding DNS Record
	if(optGET('ajaxdns')){
		
		if(!empty($error)){			
			echo '0'.current($error);
			return false;
		}
		// Creating new table for display new DB
		if(!empty($done)){
			echo '1'.$l['change_final'];			
			showdns();
			return true;
		}
	}
	
	// For delete
	if(optGET('ajaxdel')){	
				
		if(!empty($error)){				
			echo '0'.current($error);
			return false;
		}
		if(!empty($done)){
			echo '1'.$l['delete'];
			showdns(); 	
			return true;			
		}
	}	
			
	softheader($l['<title>']);	
	echo '
	<div class="bg"><br>';
	echo '
		<div class="row text-center sai_main_head">
			<img src="'.$theme['a_images'].'advancedns.png" class="webu_head_img"/>&nbsp;'.$l['advancedns'].'
		</div><hr>';
	
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
		<form accept-charset="'.$globals['charset'].'" action="" method="post" name="advancedns" id="editform" class="form-horizontal">';
	echo '
			<div class="row">
				<div class="col-sm-5">
					<label for="selectdomain" class="sai_head">'.$l['domain'].'</label>
				</div>
				<div class="col-sm-7">
					<select class="form-control" id="selectdomain" name="selectdomain">';
						foreach ($domain_list as $key => $value){
							if($domain_name == $key){			
								echo '<option value='.$key.' selected=selected >'.$key.'</option>';
							}else{
								echo '<option value='.$key.'>'.$key.'</option>';
							}					
						}echo '
					</select>
					<img id="changedns" src="'.$theme['images'].'progress.gif" style="display:none;">
				</div>
			</div><br>
			
			<div class="row">
				<div class="col-sm-5">
					<label for="name" class="sai_head">'.$l['dns_name'].'</label>
				</div>
				<div class="col-sm-7">
					<div class="input-group">
						<input type="text" name="name" id="name" class="form-control" />
						<span class="input-group-addon" id="domainname" style="background-color: white;">.'.$domain_name.'</span></span>
					</div>
				</div>
			</div><br>
			<div class="row">
				<div class="col-sm-5">
					<label for="ttl" class="sai_head">'.$l['dns_ttl'].'</label>
				</div>
				<div class="col-sm-7">
					<input type="text" name="ttl" id="ttl" class="form-control" size="30" value="14400" />
				</div>
			</div><br>
			<div class="row">
				<div class="col-sm-5">
					<label for="selecttype" class="sai_head">'.$l['dns_type'].'</label>
				</div>
				<div class="col-sm-7">
					<select name="selecttype" id="selecttype" class="form-control" onchange="disp_type(this.value)">
						<option value="A">A</option>
						<option value="CNAME">CNAME</option>
						<option value="TXT">TXT</option>
					</select>
				</div>
			</div><br>
			<div class="row">
				<div class="col-sm-5">
					<label for="address" class="sai_head" id="type">'.$l['typedefault'].'</label>
				</div>
				<div class="col-sm-7">
					<input type="text" id="address" name="address" class="form-control" value="" />
				</div>
			</div><br>
			<div class="row">
				<div class="col-sm-offset-5 col-sm-7">
					<input type="hidden" name="create_record" class="form-control" value="1" />
					<input type="submit" class="flat-butt" value="'.$l['submit_button'].'" name="create_record" id="submitdns" /> &nbsp; <img id="createdns" src="'.$theme['images'].'progress.gif" style="display:none">
				</div><br/>
			</div>';
			echo '		
		</form>
		<div class="bg2"><br/>
			<div class="row">
				<div class="col-xs-12 text-center">
					<span class="sai_sub_head">'.$l['record_table'].' 
						<span id="domain_file">
							'.$domain_name.'
						</span>
					</span>
				</div>
			</div><hr><br>
			<div id="showrectab">';
				showdns();
	echo '  </div>
	
		<script language="javascript" type="text/javascript"><!-- // --><![CDATA[	
			$(document).ready(function(){
				$("#selectdomain").change(function(){
					$("#changedns").css("display", "");	
					var domain = $(this).val();
					$.ajax({				
						type: "POST",				
						url: window.location+"&ajaxdom=1&domain="+domain,
						success: function(data){
							$("#changedns").css("display", "none");
							$("#showrectab").html(data);
							$("#domainname").html(domain);
							$("#domain_file").html(domain);
						}															  
					});	
				});
				// For creating DNS	
				$("#submitdns").click(function(){
					$("#createdns").css("display", "");				
					$.ajax({
						type: "POST",
						url: window.location+"&create_record=1&ajaxdns=1",					
						data: $("#editform").serialize(),
			
						// Checking for error
						success: function(data){
							$("#createdns").css("display", "none");
							var result = data.substring(0,1);
							if(result == "1"){
								$_("name").value="";
								$_("address").value="";
								var msg = data.substring(1,data.indexOf("<"));
								var output = data.substring(data.indexOf("<"));							
								message_box.show_message( "Done ",msg,2);														
								$("#showrectab").html(output);																																
							}
							if(result == "0"){	
								$("#createdns").css("display", "none");
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
		// ]]></script>	
		</div>	
	</div>	';

	softfooter();
}


function showdns(){

global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $done, $domain_list, $dns_list, $domain_name ;
echo '

	<table class="table table-hover table-hover-moz" >			
		<thead class="sai_head2" style="background-color: #EFEFEF;">
			<tr>
				<th>'.$l['dns_name'].'</th>
				<th>'.$l['dns_ttl'].'</th>
				<th>'.$l['dns_class'].'</th>
				<th>'.$l['dns_type'].'</th>
				<th>'.$l['dns_record'].'</th>
				<th colspan="3" style="text-align:right">'.$l['dns_option'].'</th>
			</tr>
			
		</thead>
		<tbody>';
			
		//printig from file
		$dns_list = $softpanel->readdnsrecord($domain_name);

		if(empty($dns_list)){
			echo '<tr><td colspan=6><center><span style="font-size:15px" >'.$l['no_dns_recods'].'</span></center></td></<tr>';
		}else{
		
			$i =1;
			foreach ($dns_list as $key => $value){						
				// check if domain name is in record 
				if(!preg_match('/'.$domain_name.'/is', $dns_list[$key]['name'])){		
					$dns_list[$key]['name'] = $dns_list[$key]['name'].'.'.$domain_name.'.';
				}

				echo '
				
				<tr id="tr'.$key.'">
					<td>
						 <span id="name'.$key.'">'.$dns_list[$key]['name'].'</span>
						 <input type="text" id="name_entry'.$key.'" style="display:none;" >
					</td>
					<td>
						<span id="ttl'.$key.'">'.$dns_list[$key]['ttl'].'</span>
						<input type="text" id="ttl_entry'.$key.'" style="display:none;" size="5">
					</td>
					<td>
						'.$dns_list[$key]['class'].'
					</td>
					
					<td>
						<span id="type'.$key.'">'.$dns_list[$key]['type'].'</span>			
						<select class="input" id="type_entry'.$key.'" style="display:none;">
							<option value="A" '.($dns_list[$key]['type'] == 'A' ? 'selected=selected' : '').'>A</option>
							<option value="CNAME" '.($dns_list[$key]['type'] == 'CNAME' ? 'selected=selected' : '').'>CNAME</option>
							<option value="TXT" '.($dns_list[$key]['type'] == 'TXT' ? 'selected=selected' : '').'>TXT</option>
						</select>
					</td> 
					
					<td>
						<span id="record'.$key.'">'.$dns_list[$key]['record'].'</span>
						<input type="text" id="record_entry'.$key.'" style="display:none;" size="30">
					</td>
					
					<td width="2%">	
						<img title="Cancel" class="cancel" id="cid'.$key.'" src="'.$theme['images'].'del.gif" style="display:none;" />
					</td>
					<td width="2%">
						<img title="Edit" class="edit" id="eid'.$key.'" src="'.$theme['images'].'editdetail.gif" style="cursor:pointer"  />
					</td>
					<td width="2%">
						<img title="Delete" class="delete" id="did'.$key.'" src="' . $theme['images'] . 'remove.gif" style="cursor:pointer" />
					</td>
					
				</tr>';			
					$i++;
			}
		}		
echo '
		<tbody>
	</table>
	
	<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
		function disp_type(str){
			$_("type").innerHTML = str;
		}    
		
		function deleteRecord(did){
			jQuery(\'.sai_message_box\').hide(\'fast\');		
			$.ajax({				
				type: "POST",				
				url: window.location+"&domain_name='.$domain_name.'&ajaxdel=1&delete_record="+did,				
				// checking for error
				// checking for error
				success: function(data){
					var result = data.substring(0,1);					
					var msg = data.substring(1);
					if(result == "1"){
						var msg = data.substring(1,data.indexOf("<table"));
						var output = data.substring(data.indexOf("<table"));							
						message_box.show_message("Delete",msg,2);
						//message_box.show_message( "Done ",msg,2);														
						$("#showrectab").html(output);			
					}
					if(result == "0"){
						message_box.show_message("Error",msg,1);																																			
					}
				},
				error: function() {
					message_box.show_message("Error",\''.$l['connect_error'].'\',1);							
				}															  
			});	
		}
		
		if(typeof deleteRecord === "function"){
			var message_box = new MboxObject(deleteRecord,"");
		}

		$(document).ready(function(){			
			
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
				$("#name_entry"+id).css("display", "none");
				$("#name"+id).css("display", "");
				
				$("#ttl_entry"+id).css("display", "none");
				$("#ttl"+id).css("display", "");
				$("#type_entry"+id).css("display", "none");
				$("#type"+id).css("display", "");
				$("#record_entry"+id).css("display", "none");
				$("#record"+id).css("display", "");			
			});
			
			// for editing record
			$(".edit").click(function() {
				var id = $(this).attr(\'id\');
				id = id.substr(3);	
				$("#cid"+id).css("display", "");	
				if($(this).attr(\'src\') == "'.$theme['images'].'save.gif"){			
					var name = $(\'#name_entry\'+id).val();	
					var	ttl = $(\'#ttl_entry\'+id).val();
					var type = $(\'#type_entry\'+id).val();	
					var	record = btoa($(\'#record_entry\'+id).val());
					$.ajax({
						type: "POST",
						url: window.location+"&domain_name='.$domain_name.'&ajaxup=1&edit_record="+id,
						data: "name="+ name +"&ttl="+ ttl +"&type="+ type +"&record="+ record,
						
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
								var point_find = $("#name_entry"+id).val().toString().search("'.$domain_name.'"); 
								if(point_find < 0){		
									$(\'#name\'+id).html($("#name_entry"+id).val()+".'.$domain_name.'.");
								}else{
									$(\'#name\'+id).html($("#name_entry"+id).val());											
								}								
								$(\'#ttl\'+id).html($("#ttl_entry"+id).val());
								$(\'#type\'+id).html($("#type_entry"+id).val());
								if($("#type_entry"+id).val() == \'CNAME\'){
									$(\'#record\'+id).html($("#record_entry"+id).val()+\'.\');
								}else{
									$(\'#record\'+id).html($("#record_entry"+id).val());
								}								
								$(\'#eid\'+id).attr("src","'.$theme['images'].'editdetail.gif");
							}	
						},
						error: function() {
							message_box.show_message("Error",\''.$l['connect_error'].'\',1);							
						}
					});	
					$(this).attr("src","'.$theme['images'].'progress.gif");
					$("#cid"+id).css("display", "none");
					$("#name_entry"+id).css("display", "none");
					$("#name"+id).css("display", "");
					$("#ttl_entry"+id).css("display", "none");
					$("#ttl"+id).css("display", "");
					$("#type_entry"+id).css("display", "none");
					$("#type"+id).css("display", "");
					$("#record_entry"+id).css("display", "none");
					$("#record"+id).css("display", "");				
				}else{
					$(this).attr("src","'.$theme['images'].'save.gif");
					$("#name"+id).css("display", "none");			
					$("#name_entry"+id)
						.val($("#name"+id).text().replace(".'.$domain_name.'.", ""))
						.css("display", "")
						.focus();
					$("#ttl"+id).css("display", "none");
					$("#ttl_entry"+id)
						.val($("#ttl"+id).text())
						.css("display", "")
						.focus();
					$("#type"+id).css("display", "none");
					$("#type_entry"+id)
						.val($("#type"+id).text())
						.css("display", "")
						.focus();
					$("#record"+id).css("display", "none");
					if($("#type"+id).text() == \'CNAME\'){
						$("#record_entry"+id).val($("#record"+id).text().substring(0, $("#record"+id).text().length - 1));
					}else{
						$("#record_entry"+id).val($("#record"+id).text());
					}
					$("#record_entry"+id)				
						.css("display", "")
						.focus();
				}
			});			
		});
	// ]]></script>';
}
