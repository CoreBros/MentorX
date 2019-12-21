<?php

//////////////////////////////////////////////////////////////
//===========================================================
// userindex_theme.php
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

function alias_theme(){

	global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error;
	global $insid, $backed, $software, $soft, $done;
	
	global $alias_list;
	
	if(optGET('ajaxdel')){
			
		if(!empty($error)){
			echo '0'.current($error);
			return false;
		}
		if(!empty($done)){
			echo '1'.$l['delete'];
			return true;			
		}
	}
	
	if(optGET('ajaxalias') ){
		
		if(!empty($error)){
			echo '0'.current($error);
			return false;
		}
		
		// Creating new table for display new DB
		if(!empty($done)){
			$alias_list = $softpanel->alias();
			echo '1 Alias Created Successfully';
			alias_table();
			return true;
		}
	}
	
	softheader($l['<title>']);
	
	error_handle($error, '100%');
		
	echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[

	var dompath = false;
	
	// For msgbox
	var message_box = function() {
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
					jQuery(\'.sai_message_box\').css(\'top\', jQuery(\'html, body\').scrollTop() + 150);
					jQuery(\'.sai_message_box\').show(\'slow\');
				}else{
					var message =\' <table border="0" width="100%" cellpadding="8" height="100%"><tr ><td rowspan="2" width="40%">\'+ img +  \'</td><td widt="60%" class ="msg_tr1">\' + title + \'</td></tr><tr class ="msg_tr2"><td style="text-align:left">\' + body + \'</td></tr><tr ><td colspan="2">\' + okbutton + \'</td></tr></table>\';
					jQuery(\'.sai_message_box\').css(\'top\', jQuery(\'html, body\').scrollTop() + 150);
					jQuery(\'.sai_message_box\').show(\'slow\');
					jQuery(\'.sai_message_box\').html( message );
				}
			},
			delete_message: function(title, body ,did) {
				var yesbutton = \'<input type="button" style="width:75px; background:#00a0d2; border-radius:4px; color:#fff;" onclick="message_box.yes_close_message(\\\'\'+did+\'\\\');" value="YES" class="sai_submit"/>\';
				var nobutton = \'<input type="button" style="width:75px; background:#00a0d2; border-radius:4px; color:#fff;" onclick="message_box.no_close_message();" value="NO" class="sai_submit" />\';
				var img = \'<img src="'.$theme['images'].'remove_big.gif" />\';
				if(jQuery(\'.sai_message_box\').html() === null || jQuery(\'.sai_message_box\').html() === undefined) {
					var message = \'<div class="sai_message_box"><table border="0" cellpadding="8" width="100%" height="100%"><tr height="60%" ><td rowspan="2" width="40%" > \'+ img + \'</td><td width="60%" class ="msg_tr1" height="10%">\' +  title + \'</td></tr><tr ><td style="text-align:left" height="60%" cellpading="2" class ="msg_tr2">\' + body + \'</td></tr><tr ><td colspan="2">\' + yesbutton + \'&nbsp; &nbsp; \' + nobutton + \'</td></tr></table></div>\';
					jQuery(document.body).append( message );
					jQuery(\'.sai_message_box\').css(\'top\', jQuery(\'html, body\').scrollTop() + 150);
					jQuery(\'.sai_message_box\').show(\'slow\');
				}else{
					var message = \' <table  border="0" cellpadding="8" width="100%" height="100%"><tr height="60%" ><td rowspan="2" width="40%">\'+ img +  \'</td><td widt="60%" class ="msg_tr1" height="10%">\' + title + \'</td></tr><tr><td style="text-align:left" height="60%" cellpading="2" class ="msg_tr2">\' + body + \'</td></tr><tr ><td colspan="2">\' + yesbutton + \'&nbsp; &nbsp; \' + nobutton + \'</td></tr></table>\'
					jQuery(\'.sai_message_box\').css(\'top\', jQuery(\'html, body\').scrollTop() + 150);
					jQuery(\'.sai_message_box\').show(\'slow\');
					jQuery(\'.sai_message_box\').html( message );
				}
			},
			close_message: function() {
				jQuery(\'.sai_message_box\').hide(\'fast\');
			},
			yes_close_message: function(did) {
				$(\'#did\'+did).attr("src","'.$theme['images'].'progress.gif");
				jQuery(\'.sai_message_box\').hide(\'fast\');
				$.ajax({
					type: "POST",
					url: window.location+"&ajaxdel=1&delete_alias_id="+did,
					// checking for error
					success: function(data){
						var result = data.substring(0,1);
						var msg = data.substring(1);
						if(result == "1"){
							message_box.show_message( "Delete ",msg,2);
							
							$("#tr"+did).fadeOut(2000);
						}
						if(result == "0"){
							message_box.show_message( "Error ",msg,1);
						}
					},
					error: function(request,error) {
						message_box.show_message("Error",\''.$l['connect_error'].'\',1);
					}
				});
			},
			no_close_message: function() {
				jQuery(\'.sai_message_box\').hide(\'fast\');			
			}
		}
	}();
	
	function suggestdompath(domval){
		if(dompath){
			return true;	
		}
		$_("aliaspath").value = "'.cleanpath($softpanel->user['homedir']).'/www/"+$_("aliasname").value;
	}
	
			
$(document).ready(function(){

	jQuery(\'#butHide\').hide("fast");	
	$(".sai_altrowstable tr").mouseover(function(){
		var old_class = $(this).attr("class");		
		$(this).attr("class", "sai_tr_bgcolor");		
		$(this).mouseout(function(){
			$(this).attr("class", old_class);
		});
	});
	// For showing ADD NEW
	$("#butShow").click(function() {	
		jQuery(\'#showtemp\').slideDown(\'slide\',\'\',1000);
		jQuery(\'#butShow\').fadeOut(0);
		jQuery(\'#butHide\').fadeIn(0);
	});	
	// For hiding ADD NEW
	$("#butHide").click(function() {	
		jQuery(\'#showtemp\').slideUp(\'slide\',\'\',1000);	
		jQuery(\'#butHide\').fadeOut(0);
		jQuery(\'#butShow\').fadeIn(0);			
	});
	// For deleting record
	$(".delete").click(function() {	
		var did = $(this).attr(\'id\');
		did = did.substr(3);
		message_box.delete_message (\'Warning\',\''.$l['alias_del_conf'].'\',did);			
	});	
	// for adding alias	
	$(".submitalias").click(function() {
		$("#createalias").css("display", "");	
		var aliasname = ($("#aliasname").val());
		var aliaspath = ($("#aliaspath").val());					
		$.ajax({
			type: "POST",
			url: window.location+"&submitalias=1&ajaxalias=1",					
			data: "aliasname="+aliasname+"&aliaspath="+aliaspath,
			// checking for error
			success: function(data){
				$("#createalias").css("display", "none");						
				var result = data.substring(0,1);														
				if(result == "1"){
					$_("aliasname").value="";				
					var msg = data.substring(2,data.indexOf("<table"));
					var output = data.substring(data.indexOf("<table"));
					message_box.show_message( "Done ",msg,2);							
					$("#showtab").html(output);
					$(".sai_altrowstable tr").mouseover(function(){
						var old_class = $(this).attr("class");		
						$(this).attr("class", "sai_tr_bgcolor");		
						$(this).mouseout(function(){
							$(this).attr("class", old_class);
						});
					});
					// For deleting record
					$(".delete").click(function() {	
						var did = $(this).attr(\'id\');
						did = did.substr(3);
						message_box.delete_message (\'Warning\',\''.$l['alias_del_conf'].'\',did);			
					});																								
				}
				if(result == "0"){
					$("#createalias").css("display", "none");
					var msg = data.substring(1);
					message_box.show_message( "Error",msg,1);
				}
			},
			error: function() {
				message_box.show_message("Error",\''.$l['connect_error'].'\',1);						
			}															
		});													
	});	
});					
// ]]></script>';  

echo '

<div class="bg">
	<div class="row">
		<center class="sai_main_head"><img height="48" width="48" src="'.$theme['a_images'].'alias.png" />&nbsp; ' . $l['alias_headling'] . '</center><hr>
	</div>
	<div id="butShow" align="right">
		<a href="javascript:void(0)" style="text-decoration:none;" color="#fff";><p class="flat-butt">'.$l['add_new_button'].'</p></a>
	</div>	
	<div id="butHide" align="right>
		<a href="javascript:void(0)" style="text-decoration:none;" class="flat-butt" color:#fff;>'.$l['back_button'].'</a>
	</div><br />

	<div id="showtemp" style="display:none">
	<br />
	<script language="javascript" type="text/javascript"><!-- // --><![CDATA[

	// ]]></script>
	<div class="row">
		<div class="col-sm-5">
			<label for="aliasname"  class="sai_head">'.$l['alias_label'].'</label>&nbsp;&nbsp;&nbsp;&nbsp;</br><span class="sai_exp2">'.$l['alias_name_eg'].'</span>
			<span class="sai_exp">'.$l['alias_name_notice'].'</span>
		</div>
		
		<div class="col-sm-7">
			<input type="text" name="aliasname" id="aliasname" onkeyup="suggestdompath(this);" size="30" value="'.POSTval('aliasname', '').'" onfocus="" class="form-control"/>
		</div>	
	</div><br />
		
	<div class="row">
		<div class="col-sm-5">
			<label for="aliaspath" class="sai_head">'.$l['alias_path'].'</label>&nbsp;&nbsp;&nbsp;&nbsp;</br><span class="sai_exp2">'.$l['alias_path_eg'].'</span><br />
			<span class="sai_exp">'.$l['alias_path_notice'].'</span>
		</div>
			
		<div class="col-sm-7">
			<input type="text" name="aliaspath" id="aliaspath" size="30" value="'.cleanpath($softpanel->path).'/www/'.'" onfocus="" class="form-control"/>
			<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
			//Add an event handler
			$_("aliaspath").onkeydown = function(){
				dompath = true;
			}
		// ]]></script>
		</div>
	</div><br />

	<p align="center"><input type="button" class="submitalias flat-butt" style="cursor:pointer" name="submitalias" value="'.$l['submitalias'].'" /> &nbsp;<img id="createalias" src="'.$theme['images'].'progress.gif" style="display:none"></p>
	</form>
	<br />
	</div>
	<div id="showtab">';

	alias_table();
				
	echo '
	</div><form accept-charset="'.$globals['charset'].'" name="importsoftware" method="post" action="" onsubmit="return checkform();">
	<script language="javascript" type="text/javascript"><!-- // --><![CDATA[

	function checkform(){
		try{
			if(!formcheck() || !checkdbname(\'softdb\', true)){
				return false;
			}
		}catch(e){
			//Do nothing
		}
		return true;
	};';
	echo '// ]]></script>';

softfooter();
	echo '</div>';
}		
/*function died(){
print_r(error_get_last());
}
register_shutdown_function('died');*/
function alias_table(){
	
	global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error;
	global $insid, $backed, $software, $soft, $done;
	
	global $alias_list;
	
	echo '<table border="0" cellpadding="8" cellspacing="1" width="95%" class="table table-hover">
	<tr>
		<thead class="sai_head2" style="background:#efefef;">
			<th align="center"  width="60">'.$l['alias_name'].'</th>
			<th align="center"  width="30">'.$l['alias_path'].'</th>
			<th align="center"  width="10">'.$l['alias_option'].'</th>
		</thead>
	</tr>';
		
	$i =1;
	
	foreach ($alias_list as $key => $value)
	{
		echo '<tr class="'.($i % 2 == 0 ? "sai_evenrowcolor" : "sai_oddrowcolor").'" id="tr'.$i.'">
			<td><a target="_blank" href="http://'.$_SERVER["SERVER_NAME"].'/' . $key . '"> '.$key.'</a></td>
			<td>'.$value.'</td>
			<td align="center"><img title="Delete" class="delete" id="did'.$i.'" src="' . $theme['images'] . 'remove.gif" /></td>
			</tr>';
		$i++;
	}
	echo '</table>';
}
