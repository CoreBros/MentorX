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

function apache_conf_theme(){

global $theme, $globals, $user, $l, $langs, $skins, $error, $saved, $done, $list;

	
	// For updating entir file
	if(optGET('ajaxapache')){
		
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

ksort($list);

echo '
<div class="bg">
	<div class="row">
			<center><div class="sai_main_head"><img height="48" width="48" src="'.$theme['a_images'].'apache_conf.png" />&nbsp;'.$l['apachehead'].'</div><hr></center>
	</div>';

echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[

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
		
		// For updating entire file
		$("#saveapache").click(function(){					
			
			$("#save_apache").css("display", "");					
			$.ajax({
				type: "POST",
				url: window.location+"&ajaxapache=1&saveapache=1",					
				data: $("#editapacheconf").serialize(),
				
				// Checking for error
				success: function(data){
					$("#save_apache").css("display", "none");
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
	
	echo '<form accept-charset="'.$globals['charset'].'" name="editapacheconf" method="post" action="" id="editapacheconf">
	
		<table border="0" cellpadding="8" cellspacing="8"  align="center" class="table table-hover">
		<center><span class="sai_head">'.$l['warning'].'</span></center><br/><br/><br/>
			<tr>
				<thead class="sai_head2" style="background:#efefef;">
					<th align="center" width="50%">
						<center><font size="2">'.$l['module'].'</font></center>
					</th>
					<th align="center">
						<center><font size="2">'.$l['status'].'</font></center>
					</th>
				</thead>
			</tr>';
			foreach($list as $k => $v){
				echo '
				<tr>
					<td align="center">
						<span class="sai_head" align="center">'.$k.'</span><br />
					</td>		
					<td align="center"> 					
						<label style="cursor:pointer;"><input type="radio" name="'.$k.'"   value='.$l['on'].' '.((!empty($v)) ? 'checked="checked"' : '').' /> '.$l['on'].'</label> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
						<label style="cursor:pointer;"><input type="radio" name="'.$k.'"   value='.$l['off'].' '.((!empty($v)) ? '' : 'checked="checked"').' /> '.$l['off'].'</label>
					</td>
				</tr>';
			}
				echo '
				<tr>
					<td width="50%" align="center">
						<span class="sai_head">'.$l['retrieve'].' </span><br />
						<span class="sai_exp">'.$l['ins_retrieve'].'</span>
					</td>
					<td width="50%" align="center">
						<input type="checkbox" id="retrieve" name="retrieve" />
					</td>
				</tr>
				<tr>
					<td width="50%" align="center">
						<span class="sai_head">'.$l['restart'].' </span><br />
						<span class="sai_exp">'.$l['ins_restart'].'<br/>'.$l['note'].'</span>
					</td>
					<td width="50%" align="center">
						<input type="checkbox" id="restart" name="restart" />
					</td>
				</tr>
		</table>
		<p align="center">			
			<input type="submit" value="'.$l['save'].'" name="saveapache" class="flat-butt" id="saveapache" /> &nbsp;<img id="save_apache" src="'.$theme['images'].	'progress.gif" style="display:none">
		</p></div>
		</form>';
	
softfooter();

}

?>