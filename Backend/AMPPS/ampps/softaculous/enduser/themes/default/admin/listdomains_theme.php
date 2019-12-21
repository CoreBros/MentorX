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

function listdomains_theme(){

global $theme, $globals, $user, $l, $langs, $error, $done, $softpanel, $listdomains;
	
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
	
	// Ajax part for update privaliges
	if(optGET('ajaxedit')){
	
		if(!empty($error)){				
			echo '0 '.current($error);
			return false;
		}
		
		if(!empty($done)){
			echo '1'.$l['domain_edited'];	
			showdomains();
			return true;			
		}
	}
	
	
	// Privaliges page for popup		
	if(optGET('editdomain')){
	
		$eowner = POST('owner');
		$eusername = POST('username');
		$edomain = POST('domain');
		$epath = POST('path');
		$ereplace_path = POST('replace_path');
		$ebackup_dir = POST('backup_dir');
		$edata_dir = POST('data_dir');
		
		echo '<style type="text/css">
		.ui_titlebar {
			padding: 0.4em 1em;
			background-color: #F0F0F0;
			border: 0px solid #AAAAAA;
			color: #222222;
			font-weight: bold;
			border-radius: 4px;
		}
		
		.sai_popup_add {
			width:500px;
			height:460px;
			position:absolute;
			top:40%;
			left:50%;
			margin:0 auto;
			display:none;
			background:#FFFFFF;
			border:#666 1px solid;
			padding:5px;
		}
		
		.close {
			float:right;
			position:relative;
			z-index:99999;
			margin:3px 6px 0;
		}
		#scroller-body {		
			width=100%;
			padding-bottom:30px;
			height: 100%;
		}
		</style>
		<script language="javascript" type="text/javascript" ><!-- // --><![CDATA[	
			$(document).ready(function(){
				
			$("#submitdomain").click(function() {
			
				var eusername = $("#eusername").val();
				var edomain = $("#edomain").val();
				var oldedomain = $("#oldedomain").val();
				var epath = $("#epath").val();
				var ereplace_path = $("#ereplace_path").val();
				var ebackup_dir = $("#ebackup_dir").val();
				var edata_dir = $("#edata_dir").val();
				var csrf_token = $("#csrf_token").val();
				
				$("#comsg").css("display", "none");
				$("#ermsg").css("display", "none");
				
				var w_l = window.location.toString();
				if(w_l.indexOf("#") > 0){
					w_l = w_l.substring(0, w_l.indexOf("#"));
				}
				$.ajax({
					type: "POST",
					url: w_l+"&submitdomain=1&ajaxedit=1",
					data: "feusername="+eusername+"&fedomain="+edomain+"&foldedomain="+oldedomain+"&fepath="+epath+"&fereplace_path="+ereplace_path+"&febackup_dir="+ebackup_dir+"&fedata_dir="+edata_dir+"&csrf_token="+csrf_token,
					
					// checking for error
					success: function(data){
						var result = data.substring(0,1);
						if(result == "1"){
						var msg = data.substring(1,data.indexOf("<table"));
						var output = data.substring(data.indexOf("<table"));
							$(".sai_popup_add")
								.css({"height" : "480px"});
							$("#comsg").css("display", "");
							$("#comsg").html(msg);
							$("#showdomaintab").html(output);
							$(".sai_altrowstable tr").mouseover(function(){
								var old_class = $(this).attr("class");		
								$(this).attr("class", "sai_tr_bgcolor");		
								$(this).mouseout(function(){
									$(this).attr("class", old_class);
								});
							});
						}
						if(result == "0"){
							var msg = data.substring(1);
							$("#ermsg").css("display", "");
							$("#ermsg").html(msg);
						}
					},
					error: function(ts,errorThrown) {
						message_box.show_message("Error",\''.$l['connect_error'].'\',1);
					}
				});
			});
			});
		// ]]></script>';
			
		echo '<div class="ui_titlebar" style="width:100%">
			<a title="Close" class="close"><img src="'.$theme['images'].'remove.gif" style="cursor:pointer; float:right;" alt="close" height="20" width="20" onclick="popup_close();" /></a>
			<center class="sai_tit"><img src="'.$theme['images'].'domains.gif" />&nbsp; Edit '.$edomain.'</center>
			<center id="comsg" style="display:none" class="sai_notice"></center>
			<center id="ermsg" style="display:none; background-color: #FF9999;" class="sai_notice" ></center>		
			<form accept-charset="'.$globals['charset'].'" name="importsoftware" method="post" action="" ></div><br />';
			echo '<div class="row">
					<div class="col-sm-5 col-xs-5">
						<span class="sai_head">'.$l['eusername'].'</span><br />
						<span class="sai_exp2">'.$l['exp_eusername'].'</span>
					</div>
					<div class="col-sm-7 col-xs-7">
						<input type="text" class="form-control" id="eusername" name="eusername" size="40" value="'.$eusername.'">
					</div>
				</div><br />
				<div class="row">
					<div class="col-sm-5 col-xs-5">
						<span class="sai_head">'.$l['edomain'].'</span><br />
						<span class="sai_exp2">'.$l['exp_edomain'].'</span>
					</div>
					<div class="col-sm-7 col-xs-7">
						<input type="text" class="form-control" id="edomain" name="edomain" size="40" value="'.$edomain.'">
						<input type="hidden" id="oldedomain" name="oldedomain" value="'.$edomain.'">
					</div>
				</div><br />
				<div class="row">
					<div class="col-sm-5 col-xs-5">
						<span class="sai_head">'.$l['epath'].'</span><br />
						<span class="sai_exp2">'.$l['exp_epath'].'</span>
					</div>
					<div class="col-sm-7 col-xs-7">
						<input type="text" class="form-control" id="epath" name="epath" size="40" value="'.$epath.'">
					</div>
				</div><br />
				<div class="row">
					<div class="col-sm-5 col-xs-5">
						<span class="sai_head">'.$l['ebackup_dir'].'</span><br />
						<span class="sai_exp2">'.$l['exp_ebackup_dir'].'</span>
					</div>
					<div class="col-sm-7 col-xs-7">
						<input type="text" class="form-control" id="ebackup_dir" name="ebackup_dir" size="40" value="'.$ebackup_dir.'">
					</div>
				</div><br />
				<div class="row">
					<div class="col-sm-5 col-xs-5">
						<span class="sai_head">'.$l['ereplace_path'].'</span><br />
						<span class="sai_exp2">'.$l['exp_ereplace_path'].'</span>
					</div>
					<div class="col-sm-7 col-xs-7">
						<input type="text" class="form-control" id="ereplace_path" name="ereplace_path" size="40" value="'.$ereplace_path.'">
					</div>
				</div><br />
				<div class="row">
					<div class="col-sm-5 col-xs-5">
						<span class="sai_head">'.$l['edata_dir'].'</span><br />
						<span class="sai_exp2">'.$l['exp_edata_dir'].'</span>
					</div>
					<div class="col-sm-7 col-xs-7">
						<input type="text" class="form-control" id="edata_dir" name="edata_dir" size="40" value="'.$edata_dir.'">
					</div>
				</div><br />';
		echo '<p align="center"><input type="button" class="flat-butt" id="submitdomain" style="cursor:pointer" name="submitdomain" value="'.$l['submitdomain'].'" /></p>
		'.csrf_display().'
			</form>';
		return true;
	}

softheader($l['<title>']);

echo '<br /><form accept-charset="'.$globals['charset'].'" name="listuser" method="post" action="">


<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
		
// Function for close popup
function popup_close(){
	$(".sai_popup_add").fadeOut(1000);
	$("#comsg").css("display", "none");
	$("#ermsg").css("display", "none");
};

// Function for show popup
function show_popup(domain){
	var obj = JSON.parse(domain);			 																
	var height = $("#scroller-body").height();
	var width = $("#scroller-body").width();
	var spanHeight = 50;
	var spanWidth = 50;	
	var w_l = window.location.toString();				
	var csrf_token = $("#csrf_token").val();			
	if(w_l.indexOf("#") > 0){
		w_l = w_l.substring(0, w_l.indexOf("#"));
	}					
	$.ajax({
		type: "POST",
		url: w_l+"&editdomain=1",					
		data: "owner="+obj.owner+"&username="+obj.username+"&domain="+obj.domain+"&path="+obj.path+"&replace_path="+obj.replace_path+"&backup_dir="+obj.backup_dir+"&data_dir="+obj.data_dir+"&username="+obj.username+"&csrf_token="+csrf_token,			
		success: function(data){
			$(".sai_popup_add").html(data);
		},
		error: function() {
			message_box.show_message("Error",\''.$l['connect_error'].'\',1);						
		}	
	});
	setTimeout(function() {
		display();
	},1000);
};	

function display(){
	$(".sai_popup_add")
		.css({"margin-left" : "-250px"})
		.css({"margin-top" : "-150px"})
		.fadeIn(500);
};
	
// For msgbox
var message_box = function() {			
	return {
		show_message: function(title, body , image) {			
			var okbutton = \'<input  style="width:75px" class="sai_graybluebut" type="button" onclick="message_box.close_message();" value="OK" />\';
			if(image == "1"){
				var img = \'<img src="'.$theme['images'].'error.gif" />\';
			}else{
				var img = \'<img src="'.$theme['images'].'confirm.gif" />\';			
			}					
			if(jQuery(\'.sai_message_box\').html() === null || $(\'.sai_message_box\').html() === undefined) {
				var message = \'<div class="sai_message_box"><table border="0" cellpadding="8" width="100%" height="100%"><tr ><td rowspan="2" width="40%" > \'+ img + \'</td><td width="60%" class ="msg_tr1">\' +  title + \'</td></tr><tr class ="msg_tr2"><td style="text-align:left">\' + body + \'</td></tr><tr ><td colspan="2" class ="msg_tr3">\' + okbutton + \'</td></tr></table></div>\';
				jQuery(document.body).append( message );
				jQuery(\'.sai_message_box\').css(\'top\', scrolledy() + 150);							
				jQuery(\'.sai_message_box\').show(\'slow\');
			}else{
				var message =\' <table border="0" width="100%" cellpadding="8" height="100%"><tr ><td rowspan="2" width="40%">\'+ img +  \'</td><td widt="60%" class ="msg_tr1">\' + title + \'</td></tr><tr class ="msg_tr2"><td style="text-align:left">\' + body + \'</td></tr><tr ><td colspan="2" class ="msg_tr3">\' + okbutton + \'</td></tr></table>\';
				jQuery(\'.sai_message_box\').css(\'top\', scrolledy() + 150);
				jQuery(\'.sai_message_box\').show(\'slow\');
				jQuery(\'.sai_message_box\').html( message );
			}
		},
		delete_message: function(title, body ,did) {
			var yesbutton = \'<input type="button" style="width:75px" onclick="message_box.yes_close_message(\\\'\'+did+\'\\\');" value="YES" class="sai_graybluebut"/>\';
			var nobutton = \'<input type="button" style="width:75px" onclick="message_box.no_close_message();" value="NO" class="sai_graybluebut" />\';
			var img = \'<img src="'.$theme['images'].'remove_big.gif" />\';
			if(jQuery(\'.sai_message_box\').html() === null || $(\'.sai_message_box\').html() === undefined) {
				var message = \'<div class="sai_message_box"><table border="0" cellpadding="8" width="100%" height="100%"><tr height="60%" ><td rowspan="2" width="40%" > \'+ img + \'</td><td width="60%" class ="msg_tr1" height="10%">\' +  title + \'</td></tr><tr ><td style="text-align:left" height="60%" cellpading="2" class ="msg_tr2">\' + body + \'</td></tr><tr ><td colspan="2" class ="msg_tr3" >\' + yesbutton + \'&nbsp; &nbsp; \' + nobutton + \'</td></tr></table></div>\';
				jQuery(document.body).append( message );
				jQuery(\'.sai_message_box\').css(\'top\', scrolledy() + 150);							
				jQuery(\'.sai_message_box\').show(\'slow\');
			}else{
				var message = \' <table  border="0" cellpadding="8" width="100%" height="100%"><tr height="60%" ><td rowspan="2" width="40%">\'+ img +  \'</td><td widt="60%" class ="msg_tr1" height="10%">\' + title + \'</td></tr><tr><td style="text-align:left" height="60%" cellpading="2" class ="msg_tr2">\' + body + \'</td></tr><tr ><td colspan="2" class ="msg_tr3" >\' + yesbutton + \'&nbsp; &nbsp; \' + nobutton + \'</td></tr></table>\';
				jQuery(\'.sai_message_box\').css(\'top\', scrolledy() + 150);
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
			var deltmp = did.split("--soft--");
			var csrf_token = $("#csrf_token").val();
			
			$.ajax({				
				type: "POST",				
				url: window.location+"&ajaxdel=1&deletedomain=1&deluser="+deltmp[1]+"&delowner="+deltmp[0]+"&deldomain="+deltmp[2],
				data: "csrf_token="+csrf_token,
				// checking for error
				success: function(data){
					var result = data.substring(0,1);					
					var msg = data.substring(1);
					if(result == "1"){
						message_box.show_message("Delete ", msg, 2);
						$_("tr"+did).style.display = "none";
					}
					if(result == "0"){
						message_box.show_message("Error ", msg, 1);
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
	
$(document).ready(function(){
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
		var tmp_ress = did.split("--soft--");
		message_box.delete_message (\'Warning\',\''.$l['del_domain'].'\'+tmp_ress[2]+\' ?\', did);			
	});
	
	// Cancel
	$(".cancel").click(function() {
		var cid = $(this).attr(\'id\');
		cid = cid.substr(3);
		$("#cid"+cid).css("display", "none");
		$("#eid"+cid).attr("src","'.$theme['images'].'editdetail.gif");
		$("#nof_entry"+cid).css("display", "none");
		$("#nof"+cid).css("display", "");
		if('.ent().'){
				$("#uid_entry"+cid).css("display", "none");
				$("#uid"+cid).css("display", "");
				$("#gid_entry"+cid).css("display", "none");
				$("#gid"+cid).css("display", "");
		}
	});
});
	
// ]]></script>';

echo '<link href="https://www.softaculous.net/images/sprites/20.css" rel="stylesheet" type="text/css" />
<div id="scroller-body">
<div class="container-fluid">
<div class="sai_heading text-center">
	<div class="row">
		<span style="display: inline-block; position:relative; top:3px;">
			<i class="fa sai-www fa-1x"></i>
		</span>
		<span>'.$l['title'].'</span>
	</div>
</div><br />
<div class="sai_hr"></div><br /><br />
<div class="sai_form_head">'.$l['user_details'].'</div>
<div class="sai_form"><br />';

error_handle($error);

if(!empty($listdomains)){
	echo '<div class="sai_popup_add"></div>
	<div id="showdomaintab" class="showdomaintab">';
		showdomains();
	echo '</div>';
}else{
	echo '<div class="alert alert-warning text-center">'.$l['no_domains'].'</div>';
}

echo '<br /><br /><p align="center"><a href="'.$globals['ind'].'act=adddomain" style="text-decoration:none;"><span class="flat-butt">Add Domain</a></p>
</div>
</div>
</div>
'.csrf_display().'
</form><br />';

softfooter();

}

function showdomains(){

	global $theme, $globals, $user, $l, $langs, $error, $done, $softpanel, $listdomains;
		
	$listdomains = $softpanel->listdomains();
	
	echo '<table border="0" cellpadding="8" cellspacing="1" width="95%" class="table table-hover" style="margin:0px auto;">
	<tr>
		<th align="center" class="sai_head" width="20%">'.$l['username'].'</th>
		<th align="center" class="sai_head" width="25%">'.$l['domain'].'</th>
		<th align="center" class="sai_head" width="20%">'.$l['path'].'</th>
		<th align="center" class="sai_head" width="2%">'.$l['options'].'</th>
	</tr>';
	$i=1;
	foreach($listdomains as $k => $v){
		echo '<tr class="'.($i % 2 == 0 ? "sai_evenrowcolor" : "sai_oddrowcolor").'" id="tr'.$v['owner'].'--soft--'.$v['username'].'--soft--'.$v['domain'].'">
		
				<td><span id="user'.$v['owner'].'--soft--'.$v['username'].'">'.$v['owner'].'_'.$v['username'].'</span>
				</td>
				
				<td><span id="dom'.$v['owner'].'--soft--'.$v['username'].'">'.(empty($v['domain']) ? '-' : $v['domain']).'</span>
				<input type="text" id="dom_entry'.$v['owner'].'--soft--'.$v['username'].'" style="display:none;width:35px;" ></td>
		
				<td><span id="path'.$v['owner'].'--soft--'.$v['username'].'">'.(empty($v['path']) ? '-' : $v['path']).'</span>
				<input type="text" id="path_entry'.$v['owner'].'--soft--'.$v['username'].'" style="display:none;width:35px;" ></td>
				
				<!--<td><span id="backup_dir'.$v['owner'].'--soft--'.$v['username'].'">'.(empty($v['backup_dir']) ? '-' : $v['backup_dir']).'</span>
				<input type="text" id="backup_dir_entry'.$v['owner'].'--soft--'.$v['username'].'" style="display:none;width:35px;" ></td>
				
				<td><span id="datadir'.$v['owner'].'--soft--'.$v['username'].'">'.(empty($v['data_dir']) ? '-' : $v['data_dir']).'</span>
				<input type="text" id="datadir_entry'.$v['owner'].'--soft--'.$v['username'].'" style="display:none;width:35px;" ></td>-->
				
				<td align="center">
				<table width="100%" border="0" style="text-decoration:none;">
				<tr class="'.($i % 2 == 0 ? "sai_evenrowcolor" : "sai_oddrowcolor").'">';
				
				echo '<td width="50%" align="center"><a href="#" onclick=show_popup(\''.json_encode($v).'\');><img title="Edit" class="edit" src="' . $theme['images'] . 'edit.gif" /></a>&nbsp;&nbsp;</td>
				
				<td width="50%" align="center"><img title="Delete" class="delete" id="did'.$v['owner'].'--soft--'.$v['username'].'--soft--'.$v['domain'].'" src="' . $theme['images'] . 'remove.gif" style="cursor:pointer" />&nbsp;&nbsp;</td>';
				
				echo '</tr>
				</table>';
		$i++;
	}
	
	echo '</table>';
	
}

?>