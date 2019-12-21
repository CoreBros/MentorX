<?php

//////////////////////////////////////////////////////////////
//===========================================================
// csf_conf_theme.php
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
function csf_conf_theme(){

	global $user, $globals, $iscripts, $l, $theme,  $softpanel, $csf_conf, $done, $error;	
	
	// For Updating Entire File
	if(optGET('ajaxcsf')){
		
		// Error 
		if(!empty($error)){
			echo '0'.current($error);
			return false;
		}
		
		// Success
		if(!empty($done)){
			echo '1'.$l['change_final_file'];
			return true;
		}
		
	}
	
	softheader($l['<title>']);
	error_handle($error, '100%');
	$linecount = count($csf_conf['all']);	
	echo '
	<div class="bg"><br>
		<div class="row text-center sai_main_head"><img src="'.$theme['a_images'].'firewall.png"  alt=""  />&nbsp;'.$l['lbl_head'].'</div><hr>
		<form accept-charset="'.$globals['charset'].'" name="editemailsettings" method="post" action="" id="editcsf" class="form-horizontal">
			<div class="row">
				<div class="col-xs-offset-2 col-xs-8" style="border: 2px solid #CCC; padding-top: 20px;">
					<div class="col-sm-5">
						<label for="select_section" class="sai_head">'.$l['file_part'].'</label>
					</div>
					<div class="col-sm-7">
						<select class="form-control" name="select_section" id="select_section">';
						echo '<option value=all>All</option>';
						foreach ($csf_conf['part'] as $key => $value){
							$test = explode(" " , $value['name']);	
							echo '<option value='.trim($test[0]).'-'.trim($test[1]).'>'.$value['name'].'</option>';
						}
					echo '</select> &nbsp;<img id="create_err_log" src="'.$theme['images'].'progress.gif" style="display:none">
					</div>
				</div>
			</div><br><br>
			<div class="row">
				<div class="col-xs-8 col-xs-offset-2 ContentDivs" id="all" style="border: 2px solid #CCC; height: 400px; padding: 0px; overflow: auto;">
					<div class="col-sm-12" style="padding: 0px; margin: 0px;">
						<div class="col-sm-1 col-xs-2 text-center" style="font-size:12px; padding: 0px; margin: 0px; background-color: #CCC;">';
						for($i=1; $i<=$linecount+1; $i++){
							echo $i."<br />";
						}
						echo '
						</div>
						<div class="col-sm-11 col-xs-10" style="padding: 0px 8px;">
							<textarea class="form-control" style="width: 200%; resize: none; overflow: hidden; font-size:12px; border:none; padding:0px;" WRAP=OFF name="csf_data_all" id="csf_data_all" rows='.($linecount+1).'>'.htmlentities(implode($csf_conf['all']), ENT_QUOTES, "UTF-8").'</textarea>
						</div>
					</div>
				</div>
			</div>';
	
	foreach($csf_conf['part'] as $key => $value){
		$test = explode(" " , $value['name']);
		$parts = trim($test[0]).'-'.trim($test[1]);
		echo '
			<div class="row">
				<div class="col-xs-8 col-xs-offset-2 ContentDivs" id='.$parts.' style="border: 2px solid #CCC; height: 400px; padding: 0px; overflow: auto; display: none;">
					<div class="col-sm-12" style="padding: 0px; margin: 0px;">
						<div class="col-xs-1 text-center" style="font-size: 12px; padding: 0px; margin: 0px; background-color: #CCC;">';
							$k = 0;
							for($i=$value['startpoint']; $i<=$value['endpoint']; $i++){
								echo $i."<br />";
								$temp_data[$parts][$k] = $csf_conf['all'][$i];
								$k++;
							}
								echo $i;
						echo '
						</div>
						<div class="col-xs-11" style="padding: 0px 8px;">
							<textarea class="form-control" style="width: 200%; resize: none; overflow: hidden; font-size:12px; border:none; padding: 0px;" WRAP=OFF name="csf_data_'.$parts.'" id="csf_data_'.$parts.'" rows='.(count($temp_data[$parts])+1).'>'.htmlentities(implode($temp_data[$parts]), ENT_QUOTES, "UTF-8").'</textarea>
						</div>
					</div>
				</div>
			</div>';
	}

	echo '<br>
			<div class="row">
				<div class="col-sm-offset-5 col-sm-7">
					<input type="submit" value="'.$l['save'].'" name="savecsf" class="flat-butt" id="savecsf" /> &nbsp;<img id="save_csf" src="'.$theme['images'].'progress.gif" style="display:none">
				</div><br>
			</div><br>
			<div class="row text-center sai_notice">'.$l['note'].'</div>
		</form>
	</div>';
	
echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
		
	$(document).ready(function(){
		
		if('.$linecount.'<2){
			$(".ContentDivs").css("height", "100%");
			$(".ContentDivs").html("<div class=\"text-center\" style=\"padding: 5px;\">Empty Configuration File!</div>");
		}
		
		// For 
		$("#select_section").change( function() {
			var new_id = $("#select_section").val();
			$(".ContentDivs:visible").fadeOut("fast");
			var escaped_did = new_id.replace(/[\/()*+?&.\#\s]/g, "\\\$&");
			$("#"+escaped_did).fadeIn("slow");
		});				
			
		// For updating entire file
		$("#savecsf").click(function(){
			
			$("#save_csf").css("display", "");
			var new_id = $("#select_section").val();		
			
			$.ajax({
				type: "POST",
				url: window.location+"&ajaxcsf=1&savecsf=1",
				data: "csfdata=csf_data_"+new_id+"&"+$("#editcsf").serialize(),
				
				// Checking for error
				success: function(data){
					$("#save_csf").css("display", "none");
					var result = data.substring(0,1);
					if(result == "1"){
						var msg = data.substring(1);
						var ack=message_box.show_message( "Done ",msg,2);
						if(ack==1){location.reload();}
					}
					if(result == "0"){
						var msg = data.substring(1);
						message_box.show_message( "Error",msg,1);
					}
				},
				error: function(){
					message_box.show_message("Error",\''.$l['connect_error'].'\',1);
				}
			});
			return false;
		});
	});
	var message_box = new MboxObject("","",1);
	// ]]></script>';
softfooter();

}

?>