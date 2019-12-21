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
function errorlog_theme(){

	global $theme, $globals, $l, $error, $domain_list, $error_log;	
	
	if(optGET('ajaxdel')){	
		echo $error_log;
		return true;
	}
	
	softheader($l['<title>']);
	
	echo '
	<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
	
		function geterrorlogs(dname, clearlog){
			
			if(dname !== "error_log"){		 	
				dname = dname+".err";
			}else{
				dname = "error_log";
			}
			
			$("#create_err_log").css("display", "");
			
			$.ajax({				
				type: "POST",
				url: window.location+"&ajaxdel=1&domain_log="+dname+"&clearlog="+clearlog,
				
				success: function(data){
				$("#create_err_log").css("display", "none");
					$("#er_file").html(dname);
					if(data == ""){
						$("#showerroe").html("'.$l['empty_file'].'");
					}else{
						$("#showerroe").html(data);
					}
				}															  
			});
		}
		
		$(document).ready(function(){
			
			//To change the logs as per selected domain
			$("#selectdomain").change( function() {
				geterrorlogs($(this).val(), 0);
			});
		});
	// ]]></script>
	
	<div class="bg"><br>
		<div class="row sai_main_head text-center">
				<img src="'.$theme['a_images'].'error_log.png"  alt=""  />&nbsp;
				'.$l['lbl_head'].'
		</div><hr>';
		error_handle($error, '100%');
		echo'
		<div class="row">
			<div class="form-group">
				<div class="col-sm-5">
					<label class="sai_head" for="selectdomain">'.$l['domain'].'</label>&nbsp;&nbsp;<br/>
				</div>
				<div class="col-sm-7">
					<select class="form-control" name="selectdomain" id="selectdomain">
						<option value="error_log">'.$l['default_log'].'</option>
				</div>
			</div>
		</div>
	</div>
	<br/>
	<br/>';
					
	foreach ($domain_list as $key => $value){	
		echo '<option value='.$key.'>'.$key.'</option>';
	}
	
	echo '
	<div class="bg">
		<div class="row">
			</select> &nbsp;<img id="create_err_log" src="'.$theme['images'].'progress.gif" style="display:none">
		</div><br/>
		<div class="row">
			<div class="col-sm-12 sai_head text-center">
				<b>'.$l['msg'].'<span id="er_file">'.$l['default_file'].'</span></b>
			</div>
		</div><br/>
		<div class="row sai_exp2 text-center" style="padding-left:20px; padding-right:20px;">
			<table class="table">
				<tr>
					<td nowrap="nowrap" style="width:97%;">
					<textarea class="form-control" id="showerroe" readonly="readonly"; style="height:400px; width:100%; overflow:auto;  resize: none;" wrap="off"; >'.trim($error_log).'</textarea>
					</td>
				</tr>
			</table>
		</div>
		<div class="row">
			<div class="col-sm-offset-5 col-sm-7">
				<input type="button" class="flat-butt" id="clear_log" style="cursor:pointer" value="'.$l['clear_logs'].'" onclick="geterrorlogs(selectdomain.value, 1);" />
			</div>
		</div>';
		
softfooter();

}

?>