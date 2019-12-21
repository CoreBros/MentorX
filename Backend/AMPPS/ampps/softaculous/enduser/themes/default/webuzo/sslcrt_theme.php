<?php

//////////////////////////////////////////////////////////////
//===========================================================
// sslcrt_theme.php
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

function sslcrt_theme(){

global $user, $globals, $l, $theme, $softpanel, $error , $done, $key_list, $crt_list, $detailcert;

// For create
if(optGET('ajaxcrt')){	
				
	if(!empty($error)){				
		echo '0<ul><li>'.implode("</li><li>", $error).'</li></ul>';
		return false;
	}
	if(!empty($done)){
		echo '1'.$l['create_crt'];	
		showcert();
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

softheader($l['<title>']);
	
echo '<div class="bg">
<br />
<div class="sai_main_head"><center><img src="'.$theme['a_images'].'sslcrt.png" />&nbsp;'.$l['lbl_head'].'</center></div><hr>';

if(!empty($done)){
	echo '<div class="alert alert-success text-center"><a href="#close" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$done.'</div>';
}		
	
error_handle($error);
	
echo'
	<div id="showrectab">';
		showcert();
	echo '</div>
	<br/><br/>
</div><!--end of bg-->

<div id="detailrectab" style="display:none"></div></br>

<div class="bg">
<form accept-charset="'.$globals['charset'].'" action="" method="post" enctype="multipart/form-data" name="mxentry" >
	<center><div class="sai_sub_head">'.$l['upload'].'</div></center><hr>
	<div class="row">
		<div class="col-sm-5">
			<label class="sai_head" for="kpaste">'.$l['paste'].'</label>					
		</div>
		<div class="col-sm-7">
			<textarea name="kpaste" id="kpaste" class="form-control" rows="25" cols="70"></textarea>
			<label class="sai_head" style="text-align:center">'.$l['or'].'</label>
		</div>
	</div><br/>
	<div class="row">
		<div class="col-sm-5">
			<label class="sai_head" for="ukey">'.$l['choose_file'].'</label>
		</div>
		<div class="col-sm-7">
			<input type="file" id="ukey" name="ukey"/>
		</div>
	</div><br/>
	<div class="row">
		<div class="col-sm-offset-5 col-sm-7">	
			<input type="submit" style="cursor:pointer" value="'.$l['install_button'].'" class="flat-butt" name="install_crt" id="install_crt"/>
		</div><br/>
	</div>
</form>
</div><!--end of bg-->
<br/>

<div class="bg">
<form accept-charset="'.$globals['charset'].'" action="" method="post" id="editform1">
	<div class="row"><div class="sai_sub_head"><center>'.$l['genrate'].'</center></div></div><hr>
	<div class="row">
		<div class="col-sm-5">
			<label class="sai_head" for="selectkey">'.$l['key'].'</label>
		</div>
		<div class="col-sm-7">
			<select class="form-control" name="selectkey" id="selectkey">';				
				foreach ($key_list as $value){
					$ext = get_extension($value);					
					if($ext == 'key'){				
						$file = get_filename($value);
						if(!array_key_exists(trim($file), $crt_list)) echo '<option value='.$file.'>'.$file.'</option>';
					}								
				}
				echo '<option value=newkey>'.$l['genrate_key'].'</option>
			</select>
		</div>		
	</div><br/>
	<div class="row">
		<div class="col-sm-5">
			<label class="sai_head" for="domain">'.$l['domain'].'</label><br />
			<span class="sai_exp2">'.$l['domain_desc'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="text" name="domain" id="domain" class="form-control" '.(!empty($error)? 'value="'.POSTval('domain', '').'"' : '').' />
		</div>		
	</div><br/>
	<div class="row">
		<div class="col-sm-5">
			<label class="sai_head" for="country">'.$l['country'].'</label><br />
			<span class="sai_exp2">'.$l['country_desc'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="text" name="country" id="country" class="form-control" '.(!empty($error)? 'value="'.POSTval('country', '').'"' : '').' />
		</div>		
	</div><br/>
	<div class="row">
		<div class="col-sm-5">
			<label class="sai_head" for="state">'.$l['state'].'</label><br />
			<span class="sai_exp2">'.$l['state_desc'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="text" name="state" id="state" class="form-control" '.(!empty($error)? 'value="'.POSTval('state', '').'"' : '').' />
		</div>		
	</div><br/>
	<div class="row">
		<div class="col-sm-5">
			<label class="sai_head" for="locality">'.$l['locality'].'</label><br />
			<span class="sai_exp2">'.$l['locality_desc'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="text" name="locality" id="locality" class="form-control" '.(!empty($error)? 'value="'.POSTval('locality', '').'"' : '').' />
		</div>		
	</div><br/>
	<div class="row">
		<div class="col-sm-5">
			<label class="sai_head" for="organisation">'.$l['organisation'].'</label><br />
			<span class="sai_exp2">'.$l['organisation_desc'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="text" name="organisation" id="organisation" class="form-control" '.(!empty($error)? 'value="'.POSTval('organisation', '').'"' : '').' />
		</div>		
	</div><br/>
	<div class="row">
		<div class="col-sm-5">
			<label class="sai_head" for="orgunit">'.$l['org_unit'].'</label><br />
			<span class="sai_exp2">'.$l['org_unit_desc'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="text" name="orgunit" id="orgunit" class="form-control" '.(!empty($error)? 'value="'.POSTval('orgunit', '').'"' : '').' />
		</div>		
	</div><br/>
	<div class="row">
		<div class="col-sm-5">
			<label class="sai_head" for="email">'.$l['email'].'</label><br />
			<span class="sai_exp2">'.$l['email_desc'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="text" name="email" id="email" class="form-control" '.(!empty($error)? 'value="'.POSTval('email', '').'"' : '').' />
		</div>		
	</div><br/>
	<div class="row">
		<div class="col-sm-offset-5 col-sm-7">
			<input type="hidden" name="create_crt" value="1" />			
			<input type="button" style="cursor:pointer" value="'.$l['createcrt'].'" class="flat-butt" name="create_crt" id="submitcrt"/> &nbsp;<img id="createcert" src="'.$theme['images'].'progress.gif" style="display:none">
		</div><br/>
	</div><br/>
	<div class="row">
		<p align="center">			
			<span class="sai_notice">'.$l['note'].'</span>
		</p>	
	</div>
</form>
</div><!--end of bg-->

<script language="javascript" type="text/javascript"><!-- // --><![CDATA[	
// For msgbox MboxObject(fYes, fNo)
var message_box = new MboxObject(deleteCrt,"");
		
function deleteCrt(did){					
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
	$(".edit").click(function(){
		var did = $(this).attr(\'id\');
		did = did.substr(3);
		$("#createcron").css("display", "");				
		$.ajax({
			type: "POST",
			url: window.location+"&ajaxdetail=1&detail_record="+did,
					
			// Checking for error
			success: function(data){																			
				$("#detailrectab").html(data);
				$("#detailrectab").slideDown(\'slide\',\'\',5000);
				},
			error: function() {
				message_box.show_message("Error",\''.$l['connect_error'].'\',1);						
			}															
		});		
	});

	// For uploading CRT
	$("#submitcrt").click(function(){
		$("#createcert").css("display", "");			
		$.ajax({
			type: "POST",
			url: window.location+"&ajaxcrt=1",
			data: $("#editform1").serialize(),
			
			// Checking for error
			success: function(data){
				$("#createcert").css("display", "none");
				var result = data.substring(0,1);
				if(result == "1"){
					$_("domain").value="";
					$_("country").value="";
					$_("state").value="";
					$_("locality").value="";
					$_("organisation").value="";
					$_("orgunit").value="";
					$_("email").value="";							
					var msg = data.substring(1, data.indexOf("<table"));	
					var output = data.substring(data.indexOf("<table"));
					message_box.reload = 1;
					message_box.show_message( "Done ",msg,2);						
					$("#showrectab").html(output);							
				}
				if(result == "0"){	
					$("#createcert").css("display", "none");
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

function showcert(){
	
global $user, $globals, $l, $theme, $softpanel, $error , $done, $key_list, $domain_name, $crt_list;

	// Getting cert files
	$crt_list = $softpanel->crtfiles();


		echo '<table border="0" cellpadding="8" cellspacing="0" width="100%" class="table table-hover table-hover-moz td_font">
		<thead style="background:#EFEFEF;" class="sai_head2">
			<tr>
				<th><font style="margin-left:100px;width:50%;">'.$l['cert_file'].'</font></th>
				<th style="text-align:center;" colspan="2">'.$l['option'].'</th>
			</tr>
		</thead>
		<tbody>';

		$i =1;

		if(empty($crt_list)){
			echo '<tr><td colspan=2><center><span>'.$l['no_cert_present'].'</span></center></td></<tr>';
		}else{
			foreach ($crt_list as $key => $value){
				$ext = get_extension($value);
				if($ext == 'crt'){
					$file = get_filename($value);
					echo '<tr>
						<td>
							<span id="name'.$key.'" style="margin-left:100px;">'.$file.'</span>
						</td>
						<td align="right">
							<img title="Show" class="edit" id="eid'.$file.'" src="'.$theme['images'].'preview.png" style="cursor:pointer" />
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
		<script language="javascript" type="text/javascript">
		$(document).ready(function(){	
				
			// For deleting record
			$(".delete").click(function() {
				message_box.delete_message("Warning", "'.$l['record_del_conf'].'", $(this).attr("id").substr(3));
			});
				
			// For creating DNS	
			$(".edit").click(function(){
				var did = $(this).attr("id").substr(3);
				$("#createcron").css("display", "");
					
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
		</script>';		

}

function showdetail(){
	
global $user, $globals, $l, $theme, $softpanel, $error , $done, $key_list, $domain_name, $crt_list , $detailcert;

echo '<div class="bg2">
<table border="0" cellpadding="8" cellspacing="0" width="100%" class="sai_altrowstable td_font" style="padding:15px;">';
foreach($detailcert as $key => $value ){
	echo '<tr>
		<td width="50%">
				<label class="sai_head" style="text-align:center; margin:10px 10px 10px 200px;">'.$l['cert'].$key.'</label><br />
			<textarea name="kpaste" rows="25" readonly="readonly" style="overflow:auto; resize: none; width:100%;" wrap="off">'.$detailcert[$key]['key'].'</textarea>
		</td>
		<td>
				<label class="sai_head" style="text-align:center; margin:10px 10px 10px 250px;">'.$l['info'].'</label><br />
			<textarea  name="kpaste" rows="25" readonly="readonly" style="overflow:auto; resize: none; width:100%;" >'.$detailcert[$key]['info'].'</textarea>
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
