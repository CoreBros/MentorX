<?php

//////////////////////////////////////////////////////////////
//===========================================================
// email_theme.php
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


function sslcsr_theme(){

global $user, $globals, $l, $theme, $softpanel, $error , $done, $domain_list, $domain_name, $csr_list, $detailcsr;

// For create
if(optGET('ajaxcsr')){	
				
	if(!empty($error)){				
		echo '0<ul><li>'.implode("</li><li>", $error).'</li></ul>';
		return false;
	}
	if(!empty($done)){		
		echo '1'.$l['done'];
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
<div class="sai_main_head"><center><img src="'.$theme['a_images'].'sslcsr.png" />&nbsp;'.$l['lbl_head'].'</center></div><hr>';

error_handle($error, '100%');

if(!empty($done)){
	echo '<div class="sai_success">'.$done.'</div>';
}

if(empty($domain_list)){
	echo ' <div class="alert alert-warning text-center"><center><h2>'.$l['no_key_file'].'</h2></center></div>';
}else{
echo '<div id="showrectab">';
	showcert();
echo '</div>
</div><!--end of bg-->
<br/>

<div id="detailrectab" style="display:none">
</div>

<div class="bg">
<br/>
<form accept-charset="'.$globals['charset'].'" name="createssl" method="post" action="" class="form-horizontal" id="editform">
	<div class="row">
		<div class="col-sm-5">
			<label class="sai_head" for="selectkey">'.$l['key'].'</label>
		</div>
		<div class="col-sm-7">
			<select name="selectkey" id="selectkey" class="form-control">';
			foreach ($domain_list as $key => $value){
				$ext = get_extension($value);					
				if($ext == 'key'){				
					$file = get_filename($value);
					if(!in_array($file.'.csr', $csr_list))									
					echo '<option value='.$file.'>'.$file.'</option>';
				}
			}				
			echo '<option value=newkey>'.$l['genrate'].'</option>';		
			echo '</select>
		</div>
	</div><br/>
	<div class="row">
		<div class="col-sm-5">
			<label class="sai_head" for="domain">'.$l['domain'].'</label><br/>
			<span class="sai_exp2">'.$l['domain_desc'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="text" name="domain" id="domain" class="form-control" '.(!empty($error)? 'value="'.POSTval('domain', '').'"' : '').' />
		</div>
	</div><br/>
	<div class="row">
		<div class="col-sm-5">
			<label class="sai_head" for="country">'.$l['country'].'</label><br/>
			<span class="sai_exp2">'.$l['country_desc'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="text" name="country" id="country" class="form-control" '.(!empty($error)? 'value="'.POSTval('country', '').'"' : '').' />
		</div>
	</div><br/>
	<div class="row">
		<div class="col-sm-5">
			<label class="sai_head" for="state">'.$l['state'].'</label><br/>
			<span class="sai_exp2">'.$l['state_desc'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="text" name="state" id="state" class="form-control" '.(!empty($error)? 'value="'.POSTval('state', '').'"' : '').' />
		</div>
	</div><br/>
	<div class="row">
		<div class="col-sm-5">
			<label class="sai_head" for="locality">'.$l['locality'].'</label><br/>
			<span class="sai_exp2">'.$l['locality_desc'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="text" name="locality" id="locality" class="form-control" '.(!empty($error)? 'value="'.POSTval('locality', '').'"' : '').' />
		</div>
	</div><br/>
	<div class="row">
		<div class="col-sm-5">
			<label class="sai_head" for="organisation">'.$l['organisation'].'</label><br/>
			<span class="sai_exp2">'.$l['organisation_desc'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="text" name="organisation" id="organisation" class="form-control" '.(!empty($error)? 'value="'.POSTval('organisation', '').'"' : '').' />
		</div>
	</div><br/>
	<div class="row">
		<div class="col-sm-5">
			<label class="sai_head" for="orgunit">'.$l['org_unit'].'</label><br/>
			<span class="sai_exp2">'.$l['org_unit_desc'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="text" name="orgunit" id="orgunit" class="form-control" '.(!empty($error)? 'value="'.POSTval('orgunit', '').'"' : '').' />
		</div>
	</div><br/>
	<div class="row">
		<div class="col-sm-5">
			<label class="sai_head" for="email">'.$l['email'].'</label><br/>
			<span class="sai_exp2">'.$l['email_desc'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="text" name="email" id="email" class="form-control" '.(!empty($error)? 'value="'.POSTval('email', '').'"' : '').' />
		</div>
	</div><br/>
	<div class="row">
		<div class="col-sm-5">
			<label class="sai_head" for="pass">'.$l['pass_pharse'].'</label><br/>
			<span class="sai_exp2">'.$l['pass_pharse_desc'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="text" name="pass" id="pass" class="form-control" '.(!empty($error)? 'value="'.POSTval('pass', '').'"' : '').' />
		</div>
	</div><br/>
	<div class="row">
		<div class="col-sm-offset-5 col-sm-7">
			<input type="hidden" name="createcsr" value="1" />
			<input type="submit" style="cursor:pointer" value="'.$l['createcsr'].'" class="flat-butt" name="create_csr" id="submitcsr"/> &nbsp;<img id="createcert" src="'.$theme['images'].'progress.gif" style="display:none">
		</div><br/>
	</div>
</form>
</div><!--end of bg-->
			
<script language="javascript" type="text/javascript"><!-- // --><![CDATA[	
var message_box1 = new MboxObject("","",1);
$(document).ready(function(){	
					
	// For creating CSR
	$("#submitcsr").click(function(){
		$("#createcert").css("display", "");			
		$.ajax({
			type: "POST",
			url: window.location+"&ajaxcsr=1",
			data: $("#editform").serialize(),
					
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
					$_("pass").value="";
					var msg = data.substring(1,data.indexOf("<table"));	
					var output = data.substring(data.indexOf("<table"));
					message_box1.show_message( "Done ",msg,2);	
					$("#showrectab").html(output);						
				}
				if(result == "0"){	
					$("#createcert").css("display", "none");
					var msg = data.substring(1);
					message_box1.show_message( "Error",msg,1);
				}
			},
			error: function() {
				message_box1.show_message("Error",\''.$l['connect_error'].'\',1);						
			}															
		});			
		return false;
	});	
});	
// ]]></script>';

}

softfooter();

}

function showcert(){
	
global $user, $globals, $l, $theme, $softpanel, $error , $done, $domain_list, $domain_name, $csr_list;

echo '<table class="table table-hover table-hover-moz td_font">	
<thead style="background:#EFEFEF;" class="sai_head2">
	<tr>
		<th><font style="margin-left:100px;width:50%;">'.$l['cert_file'].'</font></th>
		<th style="text-align:center;" colspan="2">'.$l['option'].'</th>
	</tr>
</thead>
<tbody>';

	// Getting csr files
	$csr_list = $softpanel->csrfiles();
	
	if(empty($csr_list)) {
		echo '<tr><td colspan=4><center><span>'.$l['no_csr_found'].'</span></center></td></<tr>';
	}else{

		$i =1;
		foreach ($csr_list as $key => $value){	
			$ext = get_extension($value);					
			if($ext == 'csr'){
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
	echo '
</tbody>
</table>';
	
echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[

// For msgbox MboxObject(fYes, fNo)
var message_box = new MboxObject(deleteDomain,"",1);
		
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
			
	// For deleting record
	$(".delete").click(function() {	
		var did = $(this).attr(\'id\');
		did = did.substr(3);						
		message_box.delete_message (\'Warning\',\''.$l['record_del_conf'].'\',did);			
	});			
});

// ]]></script>';

}

function showdetail(){
	
global $user, $globals, $l, $theme, $softpanel, $error , $done, $domain_list, $domain_name, $csr_list , $detailcsr;

echo '<div class="bg2">
<table border="0" cellpadding="8" cellspacing="0" width="100%" class="sai_altrowstable td_font" style="padding:15px;">';
	foreach($detailcsr as $key => $value ){
		echo '<tr>
			<td width="50%"> 
				<label class="sai_head" style="margin:10px 10px 10px 100px; text-align:center;">'.$l['cert'].$key.'</label><br/>
				<textarea  name="kpaste" rows="25" readonly="readonly" style="overflow:auto; resize: none; width:100%;" wrap="off">'.$detailcsr[$key]['key'].'</textarea>	
			</td>
			<td width="50%"> 
				<label class="sai_head" style="margin:10px 10px 10px 100px; text-align:center">'.$l['info'].'</label><br />
				<textarea  name="kpaste" rows="25" readonly="readonly" style="overflow:auto; resize: none; width:100%;" >'.$detailcsr[$key]['info'].'</textarea>			
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
	$(".sai_altrowstable tr").mouseover(function(){
		var old_class = $(this).attr("class");		
		$(this)
			.attr("class", "sai_tr_bgcolor")
			.mouseout(function(){
				$(this).attr("class", old_class);
			});
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
				
	// For close details
	$(".dclose").click(function() {	
		$("#detailrectab").slideUp(\'slide\',\'\',1000);			
	});	
});		
// ]]></script>';
}
?>