<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editini_theme.php
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

function editini_theme(){

	global $theme, $globals, $user, $l, $langs, $skins, $error, $saved, $list, $done, $iapps, $filename, $apps, $phpversion, $curr_php;
	
	// For Updating Entire File
	if(optGET('ajaxphpini')){
		
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
	
	// On PHP Version Change 
	if(optGET('ajaxdom')){
		showconf();
		return true;
	}
	
	//Get ids for all the PHP's 
	$php_ids = get_app_ids('php');
	sort($php_ids);
	
	softheader($l['<title>']);

	echo '<div class="bg"><br/>
		<div class="sai_main_head"><center><img src="'.$theme['a_images'].'php_conf.png" />&nbsp;'.$l['phpinihead'].'</center></div><hr>
		<script language="javascript" type="text/javascript">

			// For msgbox MboxObject(fYes, fNo)
			var message_box = new MboxObject("","",1);	
				
			$(document).ready(function(){
				
				//For multiple version
				$("#phpversion").change(function(){
					$("#changedom").css("display", "");
					var version = $(this).val();
					$.ajax({
						type: "POST",
						url: window.location+"&ajaxdom=1&phpversion="+version,
						
						success: function(data){
							$("#changedom").css("display", "none");
							$("#dispconf").html(data);
						}
					});
				});
			});
			
		</script>
		
		<div class="row">
			<div class="col-sm-5">
				<label class="sai_head" for="phpversion">'.$l['version'].'</label>
			</div>
			<div class="col-sm-7">
				<select class="form-control" name="phpversion" id="phpversion">';
					foreach($php_ids as $id){
						echo '<option value="'.$id.'_1" '.(POSTselect('phpversion', $id.'_1', ($curr_php == $id ? 1 : ""))).'>'.$apps[$id]['name'].'</option>';
					}
				echo ' 
				</select>&nbsp;<img id="changedom" src="'.$theme['images'].'progress.gif" style="display:none" />
			</div>
		</div>
		<div class="row">
			<div id="dispconf">';
				showconf();
			echo '</div>
		</div>
	</div>';
	
	softfooter();

}

function showconf(){
	
	global $theme, $globals, $user, $l, $error, $saved, $list, $done, $ipps, $filename, $apps, $phpversion;
	
	if(empty($filename)){
	
		echo '<h4><b><div align="center" class="alert alert_warning">'.$l['no_php_file'].'</b></div></h4>';
		
	}else{
		
		$linecount = count(file($filename));
		
		echo '<div class="bg2">
			<form accept-charset="'.$globals['charset'].'" name="editphpini" method="post" action="" id="editphpini" class="form-horizontal">
				<div class="row">
					<div class="col-xs-8 col-xs-offset-2 ContentDivs" style="border: 2px solid #CCC; height: 400px; padding: 0px; resize: both; overflow: auto;">
						<div class="col-sm-12" style="padding: 0px; margin: 0px;">
							<div class="col-sm-1 col-xs-2 text-center" style="font-size:13px; padding: 0px; margin: 0px; background-color: #CCC;">';
								for($i=1; $i<=$linecount; $i++){
									echo $i."<br/>";
								}
							echo '</div>
							<div class="col-sm-11 col-xs-10" style="padding: 0px 8px;">
								<textarea style="width:200%; overflow:hidden; font-size:13px; border:none; resize:none; padding:0px;" WRAP=off name="phpini_data" id="phpini_data" rows='.$linecount.'>'.htmlentities(file_get_contents($filename), ENT_QUOTES, "UTF-8").'</textarea>
							</div>
						</div>
					</div>
				</div><br/>
				<div class="row">
					<div class="col-sm-offset-5 col-sm-7">
						<input type="submit" value="'.$l['save'].'" name="savephp" class="flat-butt" id="savephpini" /> &nbsp;<img id="save_php_ini" src="'.$theme['images'].'progress.gif" style="display:none" />
					</div><br/>
				</div>
			</form>
		</div>';
	}
	
	echo '
	<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
		$(document).ready(function(){
			// For updating entire file
			$("#savephpini").click(function(){
				
				$("#save_php_ini").css("display", "");
				var version = $("#phpversion").val();
				
				$.ajax({
					type: "POST",
					url: window.location+"&ajaxphpini=1&savephpini=1",
					data: "ver="+version+"&"+$("#editphpini").serialize(),
					
					// Checking for error
					success: function(data){
						$("#save_php_ini").css("display", "none");
						var result = data.substring(0,1);
						var msg = data.substring(1);
						if(result == "1"){
							message_box.show_message("Done", msg, 2);
						}else{
							message_box.show_message("Error", msg, 1);
						}
					},
					error: function(){
						message_box.show_message("Error", "'.$l['connect_error'].'", 1);
					}
				});
				return false;
			});
		});
	// ]]></script>';	
}
?>