<?php

//////////////////////////////////////////////////////////////
//===========================================================
// network_tools_theme.php
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

function network_tools_theme(){

global $user, $globals, $l, $theme, $softpanel, $error , $done, $domain, $lookup, $action;

// For Detail
if(optGET('domain_lookup')){
	
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

error_handle($error);

if(!empty($done)){
	echo '<div class="sai_success">'.$done.'</div><br /><br />';
}

echo '
<div class="bg"><br>
	<div class="row text-center sai_main_head"><img src="'.$theme['a_images'].'network_tools.png" class="webu_head_img" />&nbsp;'.$l['network_tools'].'</div><hr>
	<form accept-charset="'.$globals['charset'].'" name="domain_lookup" method="post" action="" id="domain_lookup" class="form-horizontal">	
		<div class="row">
			<div class="col-sm-5">
				<label for="domain_name" class="sai_head">'.$l['lbl_head'].'</label><br/>
				<span class="sai_exp">'.$l['lookup_desc'].'</span>
			</div>
			<div class="col-sm-7">
				<input type="text" name="domain_name" id="domain_name" class="form-control" value="'.POSTval('domain_name', '').'" />
			</div>
		</div>
		<br />
		<div class="row">
			<div class="col-sm-offset-5 col-sm-7">
				<input type="button" class="flat-butt" name="dns_lookup" value="'.$l['domain_lookup'].'" id="dns_lookup" style="min-width: 135px;"/>
				<input type="button" class="flat-butt" name="dns_traceroute" value="'.$l['domain_trace'].'" id="dns_traceroute" style="min-width: 135px;"/> &nbsp;
				<img id="trace_prog" src="'.$theme['images'].'progress.gif" style="display:none">
			</div>
		</div>
	</form>
	<div id="domain_lookup_tab" style="display:none"></div></br>
	<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
	
		//MboxObject(fYes, fNo)
		var message_box = new MboxObject();
		
		$(document).ready(function(){
						
			// For close details
			$(".dclose").click(function(){
				$("#domain_lookup_tab").slideUp(\'slide\',\'\',5000);
			});
			
			// Domain Lookup
			$("#dns_lookup").click(function(){
				$("#trace_prog").css("display", "");
				var action = $(this).attr(\'id\');
				action = action.substr(4);
				var domain = $("#domain_name").val();
				
				$.ajax({
					type: "POST",
					url: window.location+"&domain_lookup=1&domain_name="+domain+"&action="+action,
					
					// Checking for error
					success: function(data){
						$("#trace_prog").css("display", "none");
						var result = data.substring(0,1);
						if(result == "0"){
							var msg = data.substring(1);
							message_box.show_message( "Error",msg,1);
							
						}else{
							$("#domain_lookup_tab").html(data);
							$("#domain_lookup_tab").slideDown(\'slide\',\'\',5000);
						}
					},
					error: function() {
						message_box.show_message("Error",\''.$l['connect_error'].'\',1);
					}
				});
			});
			// Domain Lookup
			$("#dns_traceroute").click(function(){
				$("#trace_prog").css("display", "");
				var action = $(this).attr(\'id\');
				action = action.substr(4);
				var domain = $("#domain_name").val();
				$.ajax({
					type: "POST",
					url: window.location+"&domain_lookup=1&domain_name="+domain+"&action="+action,
					
					// Checking for error
					success: function(data){
						$("#trace_prog").css("display", "none");	
						var result = data.substring(0,1);
						if(result == "0"){
							var msg = data.substring(1);
							message_box.show_message( "Error",msg,1);
						}else{
							$("#domain_lookup_tab").html(data);
							$("#domain_lookup_tab").slideDown(\'slide\',\'\',5000);
						}
					},
					error: function() {
						message_box.show_message("Error",\''.$l['connect_error'].'\',1);
					}
				});
			});
		});
	// ]]></script>
</div>';
softfooter();

}

function showdetail(){
	
global $user, $globals, $l, $theme, $softpanel, $error, $done, $domain, $lookup, $action;

echo '<br>
	<div class="bg2">
		<div class="row">
			<div class="row text-center">
				<span class="sai_head" style="text-align:center">&nbsp;'.lang_vars($l['action_for'], array(ucfirst($action))).' '.$domain.'</span>
				<span class="dclose sai_head" style="cursor:pointer; background-color: #ccc; border-radius: 2px; padding: 0px 5px; margin: 0px 5px; color: white;"><b>'.$l['close_detail'].'</b></span>
			</div><br />
			<div class="row">
				<div class="col-xs-12"><textarea class="form-control" name="kpaste" rows="18" readonly="readonly" style="overflow:auto; resize: none;" wrap="off">'.$lookup[$action].'</textarea></div>
			</div>
		</div>
	</div>
	<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
		$(document).ready(function(){	
			// For close details
			$(".dclose").click(function() {	
				$("#domain_lookup_tab").slideUp(\'slide\',\'\',1000);
			});	
		});		
	// ]]></script>';
}

?>