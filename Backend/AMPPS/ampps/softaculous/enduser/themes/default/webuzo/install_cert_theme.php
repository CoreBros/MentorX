<?php

//////////////////////////////////////////////////////////////
//===========================================================
// install_cert_theme.php
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


function install_cert_theme(){

	global $user, $globals, $l, $theme, $softpanel, $error, $done, $domain_list, $install_list , $detailkey, $detail;

	// For delete
	if(optGET('ajaxdel')){	
			
		if(!empty($error)){				
			echo '0'.current($error);
			return false;
		}
		if(!empty($done)){
			echo '1'.$l['delete'];	
			 showcert();
			return true;			
		}
	}

	// For detail
	if(optGET('ajaxdetail')){	
			
		if(!empty($error)){				
			echo '0'.current($error);
			return false;
		}
		if(!empty($done)){			
			return true;			
		}
	}

	//For create
	if(optGET('ajaxkey'))
	{
		if(!empty($error)){	
			echo '0'.current($error);
			return false;
		}
		if(!empty($done)){
			echo '1'.$l['save_key'];	
			 showcert();			
			return true;
		}
	}

	softheader($l['<title>']);
	echo '<div class="bg">';
		echo '<br /><div class="sai_main_head"><center><img src="'.$theme['a_images'].'install_cert.png" />&nbsp;'.$l['lbl_head'].'</center></div><hr>';
		error_handle($error, '100%');
		if(!empty($done)){
			echo '<div class="alert alert-success text-center"><a href="#close" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$done.'</div>';
		}		
		echo '
		<div id="showrectab">';
			showcert();
		echo '</div>
	</div><br/>
	<div class="bg"><br/>
		<form accept-charset="'.$globals['charset'].'" action="" method="post" id="editformuplode" enctype="multipart/form-data" class="form-horizontal">
			<div class="row">
				<div class="col-sm-5">
					<label class="sai_head" for="selectdomain">'.$l['domain'].'</label>
				</div>
				<div class="col-sm-6 col-xs-9">
					<select class="form-control" name="selectdomain" id="selectdomain" onchange="disp_type(this.value)">';					
						foreach ($domain_list as $key => $value){
							echo '<option value='.$key.'>'.$key.'</option>';
						}
					echo '</select>
				</div>
				<div class="col-sm-1">				
					<input type="button" name="fatch_data" style="cursor:pointer" value="'.$l['fatch_button'].'" class="flat-butt" id="fatchdata"/>&nbsp; &nbsp;<img id="createcron" src="'.$theme['images'].'progress.gif" style="display:none">
				</div>
			</div><br/>
			<div class="row">
				<div class="col-sm-5">
					<label class="sai_head" for="kpaste">'.$l['paste_key'].'</label>					
				</div>
				<div class="col-sm-7">
					<textarea name="kpaste" id="kpaste"  rows="15" cols="70" class="form-control" wrap="off"></textarea>					
				</div>
			</div><br/>
			<div class="row">
				<div class="col-sm-5">
					<label class="sai_head" for="cpaste">'.$l['paste_crt'].'</label>					
				</div>
				<div class="col-sm-7">
					<textarea name="cpaste" id="cpaste" rows="15" cols="70" class="form-control" wrap="off"></textarea>
				</div>
			</div><br/>
			<div class="row">
				<div class="col-sm-5">
					<label class="sai_head" for="bpaste">'.$l['paste_ca'].'</label>					
				</div>
				<div class="col-sm-7">
					<textarea name="bpaste" id="bpaste" rows="15" cols="70" class="form-control" wrap="off"></textarea>
				</div>
			</div><br/>		
			<div class="row">
				<div class="col-sm-5">
					<label class="sai_head" for="ispanel">'.$l['use_for_panel'].'</label><br/>
					<span class="sai_exp2">'.$l['exp_use_for_panel'].'</span>
				</div>
				<div class="col-sm-7">
					<input type="checkbox" name="ispanel" id="ispanel" '.POSTchecked('ispanel', false).'>
				</div>
			</div><br/>				
			<div class="row">
				<div class="col-sm-offset-5 col-sm-7">
					<input type="hidden" name="install_key" value="1" />
					<input type="submit" style="cursor:pointer" value="'.$l['install_button'].'" class="flat-butt" name="install_key" id="submitkey" />&nbsp;<img id="instcert" src="'.$theme['images'].'progress.gif" style="display:none">
				</div><br/>
			</div>
		</form>
	</div>
	<script language="javascript" type="text/javascript">
	
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
						$(\'#did\'+did).attr("src","'.$theme['images'].'remove.gif");																																		
					}
				},				
				error: function(request,error) {
					message_box.show_message("Error",\''.$l['connect_error'].'\',1);					
				}
			});					
		}
		
		$(document).ready(function(){	
			// For deleting record
			$(".delete").click(function() {	
				var did = $(this).attr(\'id\');
				did = did.substr(3);						
				message_box.delete_message (\'Warning\',\''.$l['record_del_conf'].'\',did);			
			});	
			
			// For creating DNS	
			$("#fatchdata").click(function(){
				var domain = $("#selectdomain").val();				
				$("#createcron").css("display", "");
				$("#kpaste").html("");
				$("#cpaste").html("");				
				$.ajax({
					type: "POST",
					url: window.location+"&ajaxdetail=1&detail_record="+domain,
					
					// Checking for error
					success: function(data){
						$("#createcron").css("display", "none");
						var result = data.substring(0,1);					
						var msg = data.substring(1);
						
						if(result == "0"){															
							message_box.show_message(\'Warning\',msg, 1);																																									
						}else{	
							var arr = data.split("webuzo-1");								
							$("#kpaste").html(arr[0]);
							$("#cpaste").html(arr[1]);
						}
					},
					error: function(){
						$("#createcron").css("display", "none");
						message_box.show_message("Error",\''.$l['connect_error'].'\',1);						
					}															
				});												
			});	
		});	
		
		// Function for show host
		function disp_type(str){				
			$("#select_domain").val(str);			
		}
		
		</script>';
		
	softfooter();

}

function showcert(){
	
	global $user, $globals, $l, $theme, $softpanel, $error , $done, $domain_list, $domain_name, $install_list;

	// Getting cert files
	$install_list = $softpanel->list_install_cert();

		echo '<table border="0" cellpadding="8" cellspacing="0" width="100%" class="table table-hover table-hover-moz td_font">
		<thead style="background:#EFEFEF;" class="sai_head2">
			<tr>
				<th><font style="margin-left:100px;width:50%;">'.$l['cert_file'].'</font></th>
				<th style="text-align:center">'.$l['option'].'</th>
			</tr>
		</thead>
		<tbody>';

			$i =1;

			if(empty($install_list)){
				echo '<tr><td colspan=2><center><span>'.$l['no_cert_installed'].'</span></center></td></<tr>';
			}else{
				foreach($install_list as $key => $value){
					$ext = get_extension($value);
					if($ext == 'key'){
						$file = get_filename($value);
						echo '<tr>
							<td>
								<div class="endurl"><a href="https://'.$file.'" target="_blank" ><span id="name'.$key.'" style="margin-left:100px;">'.$file.'</span></a></div>
							</td>
							<td align="center">
							 	<img title="Delete" class="delete" id="did'.$key.'" src="' . $theme['images'] . 'remove.gif" style="cursor:pointer" />
							</td>
						</tr>';
						$i++;
					}
				}
			}

			echo '</tbody>
		</table>';

}

?>
