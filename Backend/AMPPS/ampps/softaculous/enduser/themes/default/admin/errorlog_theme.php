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

function errorlog_theme(){

global $theme, $globals, $user, $l, $langs, $skins, $error, $saved, $list, $done, $filename, $softlog, $error_log_data, $error_softlog_data, $log_cleared;

softheader($l['<title>']);

echo '<script language="javascript" src="'.js_url('js/combined.js').'" type="text/javascript"></script>
<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
function confirm_reset(){
	var r = confirm("'.$l['reset_confirm'].'");
	if(r != true){
		return false;
	}else{
		//alert(window.location+"&reset='.basename($filename).'");
		//return false;
		
		if($("#errorLogType").val() == "soft_logfile"){
			window.location += "&clear_log='.basename($softlog).'";
		}else{
			window.location  += "&clear_log='.basename($filename).'";			
		}
		
	}
}

$( document ).ready(function() {
    $("#errorlog_data").text('.json_encode($error_log_data['error_data']).');
});

function changelogs(e){
	var optionVal = e.value;
	var eld = document.getElementById("errorlog_data");
	if(optionVal == "soft_logfile"){
		eld.textContent = '.json_encode($error_softlog_data['error_data']).';
	}
	if(optionVal == "error_logfile"){
		eld.textContent = '.json_encode($error_log_data['error_data']).';
	}
}

// ]]></script>';

if(!empty($log_cleared)){
	echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
		alert("'.$l['refresh_after_clear'].'");
		window.location = "'.$globals['index'].'act=errorlog";
	// ]]></script>';
}else{
	echo '<form accept-charset="'.$globals['charset'].'" name="errorlogform" method="post" action="" id="errorlogform" class="form-horizontal">
	<div class="container-fluid width80"><br /><br />
	<div class="sai_main_head text-center">
		<div class="row">
			<span style="display: inline-block; position:relative; top:3px;">
				<i class="fa sai-file fa-1x"></i>
			</span>
			<span>
				'.$l['errorlog_head'].'
			</span>
		</div>
	</div>
	<div class="sai_form"><br /><br />';
	
	error_handle($error);
	
	echo '<center>
		<table border="0" cellpadding="5" cellspacing="0" width="80%" height="40" align="center" class="sai_reviewform">
			<tr><td>
			<select class="sai_head" style="margin-left:4px; width:99%;" name="errorLogType" onChange="changelogs(this);" id="errorLogType">
				<option value="error_logfile">'.$filename.(!empty($error_log_data['file_size']) ? ' ('.$error_log_data['file_size'].')' : '').'</option>
				'.($globals['logs_level'] > 0 && (aefer() || ent()) ? '<option value="soft_logfile">'.$softlog.(!empty($error_softlog_data['file_size']) ? ' ('.$error_softlog_data['file_size'].')' : '').'</option>' : '').'
			</select>
			</td></tr>
		</table>
		</center>
		<br /><br />
		<div style="height:460px; width:80%; border: 1px solid #CCC; margin:0px auto;">
			<textarea style="font-size:15px;color:#666; width:100%; border:none; resize:none; overflow-y: visible;" name="errorlog_data" id="errorlog_data" rows="20" cols="250" readonly="readonly"></textarea>		
		</div><br /><br />
		<p align="center">
			<input type="button" value="'.$l['clear_log'].'" name="clear_log" class="flat-butt" onClick="confirm_reset();"/>
		</p>
	</div>
	</div>
	</form><br />';
}

softfooter();

}

?>