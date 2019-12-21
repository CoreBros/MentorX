<?php

//////////////////////////////////////////////////////////////
//===========================================================
// redirect_theme.php
//===========================================================
// SOFTACULOUS 
// Version : 2.4.5
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Husain Bhala
// Date:       30th May 2016
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

function redirects_theme(){

	global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $done, $domain_list, $redirects_list, $domain_name;

	// To update domains links
	if(optGET('ajaxdom')){
		showredirects();
		return true;
	}

	// For adding DNS Record
	if(optGET('ajaxadd')){
		
		// Creating new table for display new DB
		if(!empty($done)){
			echo '1'.$l['record_added'];			
			showredirects();
			return true;
		}else{
			echo '0'.current($error);
			return false;
		}
	}
	
	// For delete
	if(optGET('ajaxdel')){
				
		if(!empty($done)){
			echo '1'.$l['record_deleted'];
			showredirects();
			return true;
		}else{
			echo '0'.current($error);
			return false;
		}
	}
	
	softheader($l['<title>']);
	
	echo '<div class="bg"><br><div class="row text-center sai_main_head">
		<img src="'.$theme['a_images'].'redirects.png" class="webu_head_img"/>&nbsp;'.$l['redirect'].'
	</div><hr>
	<form accept-charset="'.$globals['charset'].'" action="" method="post" name="redirect" id="editform" class="form-horizontal">
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
				<img id="changeredirects" src="'.$theme['images'].'progress.gif" style="display:none;">
			</div>
		</div><br>
				
		<div class="row">
			<div class="col-sm-5">
				<label for="path" class="sai_head">'.$l['redirect_path'].'</label><br/>
				<span class="sai_exp2">'.$l['exp_path'].'</span>
			</div>
			<div class="col-sm-7">
				<div class="input-group">
					<span class="input-group-addon">/</span>
					<input type="text" name="path" id="path" class="form-control" />
				</div>
			</div>
		</div><br>
		<div class="row">
			<div class="col-sm-5">
				<label for="type" class="sai_head">'.$l['redirect_type'].'</label>
			</div>
			<div class="col-sm-7">
				<select name="type" id="type" class="form-control">
					<option value="temporary">Temporary (302)</option>
					<option value="permanent">Permanent (301)</option>
				</select>
			</div>
		</div><br>
		<div class="row">
			<div class="col-sm-5">
				<label for="address" class="sai_head" id="type">'.$l['redirect_addr'].'</label><br/>
				<span class="sai_exp2">'.$l['exp_address'].'</span>
			</div>
			<div class="col-sm-7">
				<input type="text" id="address" name="address" class="form-control" value="" />
			</div>
		</div><br>
		<div class="row">
			<div class="col-sm-offset-5 col-sm-7">
				<input type="submit" class="flat-butt" value="'.$l['submit_button'].'" name="create_record" id="submitredirect" /> &nbsp; <img id="createimg" src="'.$theme['images'].'progress.gif" style="display:none">
			</div>
		</div>	
	</form>
	<div class="bg2"><br/>
		<div class="row">
			<div class="col-xs-12 text-center">
				<span class="sai_sub_head">'.$l['redirects_table'].'&nbsp;<span id="domain_name">'.$domain_name.'</span></span>
			</div>
		</div><hr><br>
		<div id="showrectab">';
				showredirects();
	echo '</div>
	
	<script language="javascript" type="text/javascript"><!-- // --><![CDATA[	
		$(document).ready(function(){
			$("#selectdomain").change(function(){
				$("#changeredirects").css("display", "");	
				var domain = $(this).val();
				$.ajax({				
					type: "POST",				
					url: window.location+"&ajaxdom=1&domain="+domain,
					success: function(data){
						$("#changeredirects").css("display", "none");
						$("#domain_name").html(domain);
						$("#showrectab").html(data);
					}															  
				});
			});

			// For creating Redirects
			$("#submitredirect").click(function(){
				if(!/^(http|https|ftp):\/\/[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z0-9]{2,5}(:[0-9]{1,5})?(\/.*)?$/i.test($("#address").val())){
					message_box.show_message("Error",\''.$l['err_invalid_address'].'\',1);
					return false;
				}
				
				if(!/^([a-zA-Z0-9\/\-\#\_\.\?\&\=\:\(\)]*)$/i.test($("#path").val())){
					message_box.show_message("Error",\''.$l['err_invalid_path'].'\',1);
					return false;
				}
				
				$("#createimg").css("display", "");
				
				$.ajax({
					type: "POST",
					url: window.location+"&add_redirect=1&ajaxadd=1",
					
					
					data: $("#editform").serialize(),
					success: function(data){
						$("#createimg").css("display", "none");
						var result = data.substring(0,1);
							if(result == "1"){
								var msg = data.substring(1,data.indexOf("<"));
								var output = data.substring(data.indexOf("<"));							
								message_box.show_message( "Done ",msg,2);														
								$("#showrectab").html(output);
								$("#path").val("");
								$("#address").val("");
								$("#type").val("temporary");
							}else{
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

function showredirects(){

global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $done, $domain_list, $redirects_list, $domain_name ;
echo '<table class="table table-hover table-hover-moz" >			
		<thead class="sai_head2" style="background-color: #EFEFEF;">
			<tr>
				<th>'.$l['redirect_path'].'</th>
				<th>'.$l['redirect_type'].'</th>
				<th>'.$l['redirect_addr'].'</th>
				<th style="text-align: right; padding-right: 1%;">'.$l['option'].'</th>
			</tr>
			
		</thead>
		<tbody>';

		//printig from file
		$redirects_list = $softpanel->readredirect($domain_name);

		if(empty($redirects_list)){
			echo '<tr><td colspan=6><center><span style="font-size:15px" >'.$l['no_redirects'].'</span></center></td></<tr>';
		}else{
			foreach ($redirects_list as $key => $value){
				echo '<tr id="tr'.$key.'">
					<td>
						<span id="path'.$key.'"><a href="http://'.$domain_name.$redirects_list[$key]['path'].'" target="_blank">'.$redirects_list[$key]['path'].'</a></span>
					</td>
					<td><span id="type'.$key.'">'.$redirects_list[$key]['type'].'</span></td>
					<td><span id="address'.$key.'">'.$redirects_list[$key]['address'].'</span></td>
					<td width="2%" style="text-align: right">
						<img title="Delete" class="delete" id="did'.$key.'" src="' . $theme['images'] . 'remove.gif" style="cursor:pointer" />
					</td>
				</tr>';
			}
		}
echo '<tbody>
	</table>
	
	<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
	
		function deleterecord(did){
			$.ajax({
				type: "POST",
				url: window.location.toString()+"&domain_name='.$domain_name.'&remove_redirect=1&ajaxdel=1&delete_record="+did,
				data: "delete_record="+did+"&domain_name='.$domain_name.'",
				success: function(data){
					var result = data.substring(0,1);					
					var msg = data.substring(1);
					if(result == "1"){
						var msg = data.substring(1,data.indexOf("<table"));
						var output = data.substring(data.indexOf("<table"));							
						message_box.show_message("Delete",msg,2);
						//location.reload(true);
						$("#showrectab").html(output);			
					}else{
						message_box.show_message("Error",msg,1);																																			
					}
				},
				error: function() {
					message_box.show_message("Error",\''.$l['connect_error'].'\',1);							
				}
			});
		}

		var message_box = new MboxObject(deleterecord,"");
		$(document).ready(function(){
			// For deleting record
			$(".delete").click(function(){
				var did = $(this).attr(\'id\');
				did = did.substr(3);
				message_box.delete_message (\'Warning\',\''.$l['record_del_conf'].'\',did);			
			});	
		});
	// ]]></script>';
}
