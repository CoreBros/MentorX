<?php

//////////////////////////////////////////////////////////////
//===========================================================
// sslkey_theme.php
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


function sslkey_theme(){

	global $user, $globals, $l, $theme, $softpanel, $error, $done, $domain_list, $key_list , $detailkey, $done;

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
			 showdetail();
			return true;			
		}
	}
	
	// For creation of key
	if(optGET('ajaxcsr')){	
				
		if(!empty($error)){				
			echo '0'.current($error);
			return false;
		}
		if(!empty($done)){
			echo '1'.$l['create_key'];
			 showcert();
			return true;			
		}
	}	

	softheader($l['<title>']);
	echo '<div class="bg">';
		echo '<br /><div class="sai_main_head"><center><img src="'.$theme['a_images'].'sslkey.png" />&nbsp;'.$l['lbl_head'].'</center></div><hr>';
		if(!empty($done)){
			echo '<div class="alert alert-success text-center"><a href="#close" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$done.'</div>';
		}		
		error_handle($error, '100%');
		echo'<div id="showrectab">';
			showcert();
		echo '<br/></div>
	</div>
	<div id="detailrectab" style="display:none"></div><br />
	<script language="javascript" type="text/javascript">
		$(document).ready(function(){
			
			$("#submitcertkey").click(function(){
				$("#genkey").css("display", "");	
				$.ajax({
					type: "POST",
					url: window.location+"&ajaxcsr=1",
					data: $("#editform").serialize(),
					
					// Checking for error
					success: function(data){
						$("#genkey").css("display", "none");
						var result = data.substring(0,1);
						var msg = data.substring(1);
						if(result == "1"){
							var msg = data.substring(1, data.indexOf("<table"));	
							var output = data.substring(data.indexOf("<table"));
							message_box.show_message("Done",msg,2);	
							$("#showrectab").html(output);
						}
						if(result == "0"){	
							$("#genkey").css("display", "none");
							var msg = data.substring(1);
							message_box.show_message("Error",msg,1);
						}
					},
					error: function() {
						message_box.show_message("Error",\''.$l['connect_error'].'\',1);						
					}															
				});			
				return false;
			});
		});
	</script>
	<div class="bg">
		<form accept-charset="'.$globals['charset'].'" action="" method="post" enctype="multipart/form-data">
			<center><div class="sai_head"><h4><b>'.$l['upload'].'</b></h4></div></center><hr>
			<div class="row">
				<div class="col-sm-5">
					<label class="sai_head" for="selectdom">'.$l['domain'].'</label>
				</div>
				<div class="col-sm-7">
					<input type="text" name="selectdom" id="selectdom" class="form-control" value="" />
				</div>
			</div><br/>
			<div class="row">
				<div class="col-sm-5">
					<label class="sai_head" for="kpaste">'.$l['paste'].'</label>
				</div>
				<div class="col-sm-7">
					<textarea name="kpaste" id="kpaste" class="form-control"></textarea>
					<span class="sai_head" style="text-align:center">'.$l['or'].'</span>
				</div>
			</div><br/>
			<div class="row">
				<div class="col-sm-5">
					<label class="sai_head" for="ukey">'.$l['choose_file'].'</label>
				</div>
				<div class="col-sm-7">
					<div id="filecabinet"><input type=file id="ukey" name="ukey"></div>
				</div>
			</div><br/>
			<div class="row">
				<div class="col-sm-offset-5 col-sm-7">
					<input type="submit" name="install_key" style="cursor:pointer" value="'.$l['install_button'].'" class="flat-butt" id="instkey"/>
				</div><br/>
			</div><br/>
		</form>
	</div>
	<br/>
	<div class="bg">
		<form accept-charset="'.$globals['charset'].'" action="" method="post" class="form-horizontal" id="editform">
			<center><div class="sai_head"><h4><b>'.$l['genrate'].'</b></h4></div></center><hr>
			<div class="row">
				<div class="col-sm-5">
					<label class="sai_head" for="selectdom1">'.$l['domain'].'</label>
				</div>
				<div class="col-sm-7">
					<input type="text" name="selectdom" id="selectdom1" class="form-control" value="" />
				</div>
			</div><br/>
			<div class="row">
				<div class="col-sm-5">
					<label class="sai_head" for="keysize">'.$l['ksize'].'</label>
				</div>
				<div class="col-sm-7">
					<select class="input" name="keysize" id="keysize" class="form-control">
						<option value="2048">'.$l['2048'].'</option>
						<option value="4096">'.$l['4096'].'</option>
					</select>
				</div>
			</div><br/>
			<div class="row">
				<div class="col-sm-offset-5 col-sm-7">
					<input type="hidden" name="create_key" value="1" />
					<input type="submit" name="create_key" style="cursor:pointer" value="'.$l['genrate_button'].'" class="flat-butt" id="submitcertkey"/> &nbsp;<img id="genkey" src="'.$theme['images'].'progress.gif" style="display:none">
				</div><br/>
			</div><br/>
		</form>
	</div>	
	<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
	
		// For msgbox MboxObject(fYes, fNo)
		var message_box = new MboxObject(deleteDomain,"");
		
		function deleteDomain(did){
			$.ajax({
				type: "POST",
				url: window.location+"&ajaxdel=1&delete_record="+did,
				
				// Checking for error
				success: function(data){
					var result = data.substring(0,1);
					var msg = data.substring(1);
					
					if(result == "1"){
						var msg = data.substring(1, data.indexOf("<table"));
						var output = data.substring(data.indexOf("<table"));
						message_box.show_message( "Delete ", msg, 2);
						$("#showrectab").html(output);
					}else{
						message_box.show_message("Error ", msg, 1);
						$("#did"+did).attr("src", "'.$theme['images'].'remove.gif");
					}
				},
				error: function(request,error) {
					message_box.show_message("Error", "'.$l['connect_error'].'", 1);
				}
			});
		}	
	// ]]></script>';
	softfooter();
}

function showcert(){
	
	global $user, $globals, $l, $theme, $softpanel, $error, $done, $key_list;

	// Getting cert files
	$key_list = $softpanel->keyfiles();

		echo '<table class="table table-hover table-hover-moz td_font">
		<thead style="background:#EFEFEF;" class="sai_head2">
			<tr>
				<th><font style="margin-left:100px;width:50%;">'.$l['cert_file'].'<font></th>
				<th style="text-align:center;" colspan="2">'.$l['option'].'</th>
			</tr>
		</thead>
		<tbody>';
		$i = 1;
		if(empty($key_list)){
				echo '<tr><td colspan=2><center><span>'.$l['no_keys_uploaded'].'</span></center></td></<tr>';
				
		}else{
			foreach ($key_list as $key => $value){
				$ext = get_extension($value);
				if($ext == 'key'){
					$file = get_filename($value);
					echo '<tr>
						<td>
							<span id="name'.$key.'" style="margin-left:100px;">'.$file.'</span>
						</td>
						<td align="right">
							<img title="Show" class="edit" id="eid'.$file.'" src="'.$theme['images'].'editdetail.gif" style="cursor:pointer"  />
						</td>
						<td>
							<img title="Delete" class="delete" id="did'.$key.'" src="' . $theme['images'] . 'remove.gif" style="cursor:pointer" />
						 </td>
					</tr>';
					$i++;
				}
			}
		}

		echo '</tbody>
		</table>
		<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
		
			$(document).ready(function(){
				// For deleting record
				$(".delete").click(function() {
					message_box.delete_message ("Warning", "'.$l['record_del_conf'].'", $(this).attr("id").substr(3));
				});
				
				// For creating DNS
				$(".edit").click(function(){
					var did = $(this).attr("id").substr(3);
					$.ajax({
						type: "POST",
						url: window.location+"&ajaxdetail=1&detail_record="+did,
						
						// Checking for error
						success: function(data){
							$("#detailrectab")
								.html(data)
								.slideDown("slide", "", 5000);
						},
						error: function() {
							message_box.show_message("Error", "'.$l['connect_error'].'", 1);
						}
					});
				});
			});	
		// ]]></script>';

}

function showdetail(){
	
	global $user, $globals, $l, $theme, $softpanel, $error, $done, $key_list, $detailkey;

	echo '<div class="bg2">
		<table border="0" cellpadding="8" cellspacing="8" width="100%" class="sai_altrowstable td_font" align="center" style="padding:15px;" >';

			foreach($detailkey as $key => $value ){
				echo '<tr>
					<td width="50%"> 
						<label class="sai_head" style="text-align:center; margin:10px 10px 10px 200px;">'.$l['cert'].$key.'</label><br />	
						<textarea name="kpaste" rows="25" readonly="readonly" style="overflow:auto; resize: none; width:100%;" wrap="off" >'.$detailkey[$key]['key'].'</textarea>
					</td>
					<td width="50%"> 
						<label class="sai_head" style="text-align:center; margin:10px 10px 10px 250px;">'.$l['info'].'</label><br />
						<textarea name="kpaste" rows="25" readonly="readonly" style="overflow:auto; resize: none; width:100%;" >'.$detailkey[$key]['info'].'</textarea>			
					</td>		
				</tr>';	
			}	
				echo '<tr>
					<td colspan="2">
						<center><div class="dclose" style="cursor:pointer; margin:10px 10px 10px 10px;"><b><u>'.$l['close_detail'].'</u></b></div></center>
					</td>
				</tr>	
		</table>
	</div>

	<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
		$(document).ready(function(){
			// For close details
			$(".dclose").click(function() {
				$("#detailrectab").slideUp("slide", "", 1000);
			});
		});
	// ]]></script>';
}
?>