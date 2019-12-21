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

function editini_theme(){

global $theme, $globals, $user, $l, $langs, $skins, $error, $saved, $list, $done, $softpanel;

	// For updating
	if(optGET('ajaxphp')){
		
		if(!empty($error)){			
			echo '0'.current($error);
			return false;
		}
		
		if(!empty($done)){
			echo '1'.$l['change_final'];				
			return true;
		}
	}
	
	// For updating entir file
	if(optGET('ajaxphpini')){
		
		if(!empty($error)){			
			echo '0'.current($error);
			return false;
		}
		
		if(!empty($done)){			
			echo '1'.$l['change_final_file'];						
			return true;
		}
	}

softheader($l['<title>']);

echo '
	<script language="javascript" type="text/javascript"><!-- // --><![CDATA[

	var message_box = function(){			
		return {
			show_message: function(title, body , image) {			
				var okbutton = \'<input  style="width:75px; background:#00a0d2; border-radius:4px; color:#fff;" class="sai_submit" type="button" onclick="message_box.close_message();" value="OK" />\';
				if(image == "1"){
					var img = \'<img src="'.$theme['images'].'error.gif" />\';
				}else{
					var img = \'<img src="'.$theme['images'].'confirm.gif" />\';			
				}
									
				if(jQuery(\'.sai_message_box\').html() === null || jQuery(\'.sai_message_box\').html() === undefined) {
					var message = \'<div class="sai_message_box"><table border="0" cellpadding="8" width="100%" height="100%"><tr ><td rowspan="2" width="40%" > \'+ img + \'</td><td width="60%" class ="msg_tr1">\' +  title + \'</td></tr><tr class ="msg_tr2"><td style="text-align:left">\' + body + \'</td></tr><tr ><td colspan="2">\' + okbutton + \'</td></tr></table></div>\';
					jQuery(document.body).append( message );								
					jQuery(\'.sai_message_box\').css(\'top\', jQuery($(jQuery.browser.webkit ? "body": "html")).scrollTop() + 150);
					jQuery(\'.sai_message_box\').show(\'slow\');
				}else{
					var message =\' <table border="0" width="100%" cellpadding="8" height="100%"><tr ><td rowspan="2" width="40%">\'+ img +  \'</td><td widt="60%" class ="msg_tr1">\' + title + \'</td></tr><tr class ="msg_tr2"><td style="text-align:left">\' + body + \'</td></tr><tr ><td colspan="2">\' + okbutton + \'</td></tr></table>\';				
					jQuery(\'.sai_message_box\').css(\'top\', jQuery($(jQuery.browser.webkit ? "body": "html")).scrollTop() + 150);
					jQuery(\'.sai_message_box\').show(\'slow\');
					jQuery(\'.sai_message_box\').html( message );
				}
			},
			close_message: function() {				
				jQuery(\'.sai_message_box\').hide(\'fast\');
				window.location=window.location;
			}
		}
	}();

	$(document).ready(function(){
		
		// For update form 
		$("#savephp").click(function(){
			$("#save_php").css("display", "");					
			$.ajax({
				type: "POST",
				url: window.location+"&ajaxphp=1",					
				data: $("#editform").serialize(),
				
				// Checking for error
				success: function(data){
					
					$("#save_php").css("display", "none");
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
		
		// For updating entire file
		$("#savephpini").click(function(){					
			
			$("#save_php_ini").css("display", "");					
			$.ajax({
				type: "POST",
				url: window.location+"&ajaxphpini=1&savephpini=1",					
				data: $("#editphpini").serialize(),
				
				// Checking for error
				success: function(data){
					
					$("#save_php_ini").css("display", "none");
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
				
		function enableinput(){
			$_("include_path").disabled=false;
		}
		
		function disableinput(){
			$_("include_path").disabled=true;
		}
	
	// ]]></script>';

	echo '
	
	<form accept-charset="'.$globals['charset'].'" name="editemailsettings" method="post" action="" id="editform">
	
	<div class="bg">
		<div class="row">
			<center class="sai_main_head"><img height="48" width="48" src="'.$theme['a_images'].'php_conf.png" />&nbsp;'.$l['phpinihead'].'</center><hr>';
			echo '
		</div>
		
		<div class="row">
			<div class="col-sm-5">
				<span class="sai_head">PHP Version : </span>
			</div>
			<div class="col-sm-7">
				<span class="sai_head">'.$softpanel->activePHP().'</span>
			</div>
		</div><br />	
					
		<div class="row">
			<div class="col-sm-5">			
				<label class="sai_head" for="asp">'.$l['asp'].'</label><br />
			</div>
			
			<div class="col-sm-1">
				<label><input type="radio" name="asp"   value='.$l['on'].' checked="checked" id="asp"  /> '.$l['on'].' &nbsp;</label>
			</div>	
			<div class="col-sm-1">	
				<label><input type="radio" name="asp"   value='.$l['off'].' '.(trim($list['asp_tags']) == 'off' ? ' checked="checked"' : '' ).' />&nbsp;'.$l['off'].'</label>
			</div>
		</div><br />	

		<div class="row">
			<div class="col-sm-5">	
				<label><span class="sai_head">'.$l['dll'].'</span><br /></label>
			</div>
			<div class="col-sm-1">
				<label><input type="radio" name="dll"  value='.$l['on'].' checked="checked"  /> '.$l['on'].' &nbsp;</label>
			</div>	
			<div class="col-sm-1">	
				<label><input type="radio" name="dll"  value='.$l['off'].' '.(trim($list['enable_dll']) == 'off' ? ' checked="checked"' : '' ).' />&nbsp;'.$l['off'].' </label>
			</div>
		</div><br />		
					
		<div class="row">
			<div class="col-sm-5">
				'.(substr(PHP_VERSION, 0,3) != '5.4' ? '' : 'style="display:none;"').'
				<label class="sai_head" for="rglobal">'.$l['rglobals'].'</label><br />
			</div>
			<div class="col-sm-1">
				<label><input type="radio" name="rglobals"  value='.$l['on'].' checked="checked" id="rglobal" /> '.$l['on'].' &nbsp;</label>
			</div>	
			<div class="col-sm-1">	
				<label><input type="radio" name="rglobals"  value='.$l['off'].' '.(trim($list['register_globals']) == 'off' ? ' checked="checked"' : '' ).'  />&nbsp;'.$l['off'].' </label>
			</div>
		</div><br />
					
		<div class="row">
			<div class="col-sm-5">			
				<label for="include_path" class="sai_head">'.$l['include'].'</label><br />
			</div>
			<div class="col-sm-1">
				<label><input type="radio" name="pinclude"  value='.$l['on'].' checked="checked" onchange="enableinput()" /> '.$l['on'].' &nbsp;<label>
			</div>
			<div class="col-sm-1">
				<label><input type="radio" name="pinclude"  value='.$l['off'].' '.(trim($list['include_path_act']) == 'Off' ? ' checked="checked"' : '' ).' onchange="disableinput()" />&nbsp;'.$l['off'].'</label>
			</div>
			<div class="col-sm-5">
				<input type="text" class="form-control pull-left" name="include_path" id="include_path"  size="30" value="'.trim($list['include_path']).'" '.(trim($list['include_path_act']) == 'Off' ? ' disabled="disabled"' : '' ).'  />
			</div>
		</div><br />
		
		<div class="row">
			<div class="col-sm-5">
				<label for="upload" class="sai_head">'.$l['ufile'].'</label><br />
			</div>
			<div class="col-sm-7">		 
				<input type="text" name="ufile" id="upload" size="30" class = "form-control" value="'.trim($list['file_uploads']).'" />
			</div>
		</div><br />
					
		<div class="row">
			<div class="col-sm-5">
				<label for="execution" class="sai_head"> '.$l['execution_time'].'</label>
			</div>
			<div class="col-sm-7">
				<input type="text" name="etime" id="execution" size="30" class = "form-control" value="'.trim($list['max_execution_time']).'" />
			</div>
		</div><br />
					
		<div class="row">
			<div class="col-sm-5">
				<label for="input" class="sai_head"> '.$l['input_time'].'</label>
			</div>
			<div class="col-sm-7">
				<input type="text" name="itime" id="input" size="30" class = "form-control" value="'.trim($list['max_input_time']).'" />
			</div>
		</div><br />
					
		<div class="row">				
			<div class="col-sm-5"> 
				<label for="limit" class="sai_head"> '.$l['memory'].'</label>&nbsp<span class="sai_exp2">(in MB)</span>
			</div>
			<div class="col-sm-7">
				<input type="text" name="memory" id="limit" class = "form-control" size="30" value="'.trim($list['memory_limit']).'" />
			</div>
		</div><br />
					
		<div class="row">				
			<div class="col-sm-5"> 
				<label for="filesize" class="sai_head"> '.$l['mfile'].'</label> &nbsp<span class="sai_exp2">(in MB)</span>
			</div>
			<div class="col-sm-7">		
				<input type="text" name="mfile" id="filesize" class = "form-control" size="30" value="'.trim($list['upload_max_filesize']).'" />
			</div>
		</div><br />
					
		<div class="row">				
			<div class="col-sm-5">			
				<label for="savepath"class="sai_head">'.$l['savepath'].'</label>
			</div>
			<div class="col-sm-7">
				<input type="text" name="savepath" id="savepath" size="30" class="form-control" value='.trim($list['save_path']).' />
			</div>
		</div><br />
					
		<div class="row">
			<div class="col-sm-5">	
				<label for ="retrieve" class="sai_head">'.$l['retrieve'].' </label><br />
				<span class="sai_exp2">'.$l['ins_retrieve'].'</span>
			</div>
			<div class="col-sm-7">
				<input type="checkbox" id="retrieve" name="retrieve" />
			</div>
		</div><br />
					
		<div class="row">
			<div class="col-sm-5">	
				<label for = "restart" class="sai_head">'.$l['restart'].' </label><br />
				<span class="sai_exp2">'.$l['ins_restart'].'</span>
			</div>
			<div class="col-sm-7">
				<input type="checkbox" id="restart" name="restart" />
			</div>
		</div><br />
					
	<center><span class="sai_exp2">'.$l['note'].'</span></center></br>
	
	<input type="hidden" name="savephp" value="1" />
	<center><input type="submit" value="'.$l['save'].'" name="savephp" class="flat-butt" id="savephp" /> &nbsp;<img id="save_php" src="'.$theme['images'].	'progress.gif" style="display:none"></center>
	</br>
	</form>
</div>';

softfooter();

}

?>