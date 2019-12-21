<?php

//////////////////////////////////////////////////////////////
//===========================================================
// php_ext_theme.php
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

if(!defined('WEBUZO')){
	die('Hacking Attempt');
}

function php_ext_theme(){

	global $theme, $globals, $user, $l, $langs, $skins, $error, $saved, $list, $done, $apps, $ext_list, $iapps;

	// Make the AJAX CALL
	if(optGET('ajaxphpext')){
		
		// Is there an Error ?
		if(!empty($error)){
			echo '0'.current($error);
			return false;
		}
		
		// Success Message
		if(!empty($done)){			
			echo '1'.$l['success_msg'];						
			return true;
		}
		
	}

	softheader($l['<title>']);

	echo '<div class="bg"><br/>
		<div class="sai_main_head"><center><img src="'.$theme['a_images'].'php_ext.png" />&nbsp;'.$l['php_ext_head'].'</center></div><hr>
		<script language="javascript" type="text/javascript"><!-- // --><![CDATA[

			$(document).ready(function(){
				$("#check_all_ext").on("click", function(event){
					if(this.checked == true){
						$(".check_ext").prop("checked", true);
					}else{
					$(".check_ext").prop("checked", false);
					}
				});

				// For updating entire file
				$("#savephpext").click(function(){		
					
					$("#progress_img").css("display", "");
					var extensions = [];		
					ids = new Array("'.implode('", "', array_keys($ext_list['php_ext'])).'");				
					for(x in ids){
						if($_("extlist["+ids[x]+"]").checked){													
							extensions[x] = ids[x];							
						}
					}
					function isEmpty(str) {
						return (!str || 0 === str.length);
					}
					
					if(isEmpty(extensions)){
						extensions = ["disableall"];
					}
					
					$.ajax({
						type: "POST",
						url: window.location+"&ajaxphpext=1&save_ext=1",
						data: "extensions="+extensions,
						
						// Checking for error
						success: function(data){
							
							$("#progress_img").css("display", "none");
							var result = data.substring(0,1);
							if(result == "1"){							
								var msg = data.substring(1);
								message_box.show_message( "Done ",msg,2);																					
							}
							if(result == "0"){							
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
		
		//Check if any PHP is installed or not?
		$is_php_installed = get_iapp_ids('php');
		
		if(empty($is_php_installed)){
			echo '<br />
			<label class="sai_head"><center><h4><b>'.$l['no_php'].'</b></h4></center></label>';
		}else{
			echo '<div id="dispconf">';
				showconf();
			echo '</div>';
		}
	echo '</div>';
	softfooter();

}

function showconf(){
	
	global $theme, $globals, $user, $l, $langs, $skins, $error, $saved, $list, $done, $apps, $ext_list, $softpanel;
	
	echo '<form accept-charset="'.$globals['charset'].'" name="php_extensions" method="post" action="" id="editphpext">';
		$default_php = $softpanel->getConf('WU_DEFAULT_PHP');
		if(!empty($default_php)){
			$php = $softpanel->get_app_record($default_php);
		}

		echo '
		<center><div class="sai_sub_head">'.lang_vars($l['php_version'], array($apps[$php]['name'])).'</div></center><br/>
		<div style="width:96%; margin:0px auto;">
			<table border="0" cellpadding="8" cellspacing="0" width="100%" align="center" class="table table-hover table-hover-moz td_font">
				<thead style="background:#EFEFEF;" class="sai_head2">
					<tr>
						<th align="left">'.$l['extensions_head'].'</th>
						<th style="text-align:right">'.$l['extensions_all'].'&nbsp;<input type="checkbox" onclick="checkall(this);" id="check_all_ext" style="float:right;"/></th>
					</tr>
				</thead>
				<tbody>';
					$counter = 0;
					foreach($ext_list['php_ext'] as $k => $v){
						$counter++;
						echo '
							<td><div style="float:left;">'.$k.'</div><div style="text-align: right;"><input type="checkbox" name="extlist['.$k.']" id="extlist['.$k.']" value="1" '.POSTchecked($k, $v).' class="check_ext"/></div></td>';
						
						if($counter % 2 == 0){
							echo '</tr>
							<tr>';
						}
					}
					echo '
				</tbody>
			</table>
		</div><br/>
		<div class="row">
			<p align="center">			
				<input type="submit" value="'.$l['save'].'" name="save_ext" class="flat-butt" id="savephpext" /> &nbsp;<img id="progress_img" src="'.$theme['images'].'progress.gif" style="display:none">
			</p>
		</div>
	</form>
	
	<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
	
		// Function for checkbox check all
		ids = new Array("'.implode('", "', array_keys($ext_list['php_ext'])).'");
		function checkall(checker){
			for(x in ids){
				$_("extlist["+ids[x]+"]").checked = checker.checked;
			}
		};
		
		// For msgbox MboxObject(fYes, fNo)
		var message_box = new MboxObject("","",1);
	// ]]></script>';	
}

?>