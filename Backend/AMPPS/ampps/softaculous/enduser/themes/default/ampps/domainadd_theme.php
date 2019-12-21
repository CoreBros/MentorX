<?php

//////////////////////////////////////////////////////////////
//===========================================================
// domainadd_theme.php
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

function domainadd_theme(){

global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $ampps_apps_installed;
global $insid, $backed, $software, $soft, $done;

// For adding MX Record
if(optGET('ajaxdomadd')){
	
	if(!empty($error)){			
		echo '0'.current($error);
		return false;
	}
	// Creating domain
	if(!empty($done)){
		echo '1'.$l['suc_dom_added'];
		return true;
	}
}

softheader($l['<title>']);

error_handle($error, '100%');

echo '<form accept-charset="'.$globals['charset'].'" name="importsoftware" method="post" action="" onsubmit="return checkform();">
<script language="javascript" type="text/javascript"><!-- // --><![CDATA[

var dompath = false;

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
			var message = \'<table border="0" cellpadding="8" width="100%" height="100%"><tr ><td rowspan="2" width="40%" > \'+ img + \'</td><td width="60%" class ="msg_tr1">\' +  title + \'</td></tr><tr class ="msg_tr2"><td style="text-align:left">\' + body + \'</td></tr><tr ><td colspan="2">\' + okbutton + \'</a></td></tr></table>\';
			jQuery(\'.sai_message_box\').css(\'top\', jQuery($(jQuery.browser.webkit ? "body": "html")).scrollTop() + 150);
			jQuery(\'.sai_message_box\').show(\'slow\');
			jQuery(\'.sai_message_box\').html( message );
		}
	},
	close_message: function() {
		jQuery(\'.sai_message_box\').hide(\'fast\');
	}
}
}();

function show(){
	if($(".isaddon_check input").parent().hasclass("checked")){
		$("#addon").css("display", "");
		$("#parked").css("display", "none");
	}else{
		$("#addon").css("display", "none");
		$("#parked").css("display", "");
	}
}
addonload("show();");

function checkform(){
	try{
		if(!formcheck() || !checkdbname(\'softdb\', true)){
			return false;
		}
	}catch(e){
		//Do nothing
	}
	return true;
};

function asuggestdompath(domval){
	if(dompath){
		return true;	
	}
	$_("domainpath").value = "'.(empty($globals['adomain_path']) ? cleanpath($softpanel->user['homedir']).'/www/' : $globals['adomain_path']).'"+$_("domain").value;
}

function error(err){
	return err;
}

$(document).ready(function(){

	$(".isaddon_check input").on("click", function(event){
		if(this.checked == true){
			$("#addon").css("display", "");
			$("#parked").css("display", "none");
		}else{
			$("#addon").css("display", "none");
			$("#parked").css("display", "");
		}
	});
	
	var r=1;
	$(\'#hostadd\').prop(\'checked\', true);
	
	// For creating MX Record	
	$("#submitdomain").click(function(){
		$("#createdomain").css("display", "");	
		var domain = ($("#domain").val());
		if($_("isaddon").checked == true){
			var isaddon = 1;
			var domainpath = ($("#domainpath").val());
			var tmp = "&domainpath="+domainpath;
		}else{
			var selectdomain = ($("#selectdomain").val());
			var isaddon = 0;
			var tmp = "&selectdomain="+selectdomain;
		}
		if($_("hostadd").checked == true){
			var hostadd = 1;
		}else{
			var hostadd = 0;
		}
		if($_("ssl").checked == true){
			var ssl = 1;
		}else{
			var ssl = 0;
		}
		$.ajax({
			type: "POST",
			url: window.location+"&submitdomain=1&ajaxdomadd=1",					
			data: "domain="+domain+"&isaddon="+isaddon+tmp+"&hostadd="+hostadd+"&ssl="+ssl,
			
			// Checking for error
			success: function(data){
				$("#createdomain").css("display", "none");
				var result = data.substring(0,1);
				var msg = data.substring(1);
				if(result == "1"){
					$_("domain").value="";
					if($_("isaddon").checked == true){
						$_("domainpath").value="'.cleanpath($softpanel->user['homedir']).'/www/";
					}
					$(\'input:checkbox[name="hostadd"]\').attr(\'checked\', true);
					$(\'input:checkbox[name="ssl"]\').attr(\'checked\', false);
					r=1;
					message_box.show_message( "Done ",msg,2);
				}
				if(result == "0"){
					$("#createdomain").css("display", "none");
					message_box.show_message( "Error",msg,1);
				}
			},
			error: function() {
				message_box.show_message("Error",\''.$l['connect_error'].'\',1);
			}
		});
	});
});
// ]]></script>

<div class="bg">
	<div class="row">	
		<center><div class="sai_main_head"><img height="48" width="48" src="'.$theme['a_images'].'adddomain.png" alt="" /> &nbsp;'.$l['domain_add_label'].'</div></center><hr>
	</div>

	<div class="row">
		<div class="col-sm-5">
			<label for="domain" class="sai_head">'.$l['domain_label'].'</label>
		</div>	
		<div class="col-sm-7">
			<input type="text" name="domain" id="domain" class="form-control" onkeyup="asuggestdompath(this);" value="'.POSTval('domain', '').'" />
		</div>
	</div><br />

	<div class="row">
		<div class="col-sm-5">
			<label for="isaddon" class="sai_head">'.$l['is_addon_part'].'</font></label><br/><span class="sai_exp2">'.$l['exp_checkaddon'].'</span>
		</div>
		<div class="col-sm-7 isaddon_check">
			<input type="checkbox" name="isaddon" id="isaddon" '.POSTchecked('isaddon', true).' onclick="show(this);">
		</div>
	</div><br />
	
	<div class="row" id="addon">
		<div class="col-sm-5">
			<label for="domainpath" class="sai_head">'.$l['domain_path'].'</label><span class="sai_exp2">'.$l['exp_dompath'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="text" name="domainpath" id="domainpath" class="form-control" size="30" value="'.(!empty($globals['adomain_path']) ? $globals['adomain_path'] : cleanpath($softpanel->user['homedir']).'/www/').'" onfocus="" />
		</div>
	</div>

	<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
	//Add an event handler
	$_("domainpath").onkeydown = function(){
		dompath = true;
	}
	// ]]></script>

	<div class="row" id="parked" style="display:none">
		<div class="col-sm-5">
			<label for="selectdomain" class="sai_head">'.$l['select_domain'].'</label>
		</div>
		<div class="col-sm-7">
			<select class="form-control" name="selectdomain" id="selectdomain"> ';
			$domains = $softpanel->domains();

			foreach($domains as $k => $v){
				if($k!=''){
					echo '<option value="'.$k.'">'.$k.'</option>';	
				}
			}
		echo '</select>
		</div>
	</div><br />

	<div id="ssltr" '.($softpanel->is_ssl() == true ? '' : 'style="display:none"').'>
		<div class="row">
			<div class="col-sm-5">
				<label for="ssl" class="sai_head">'.$l['ssl_entry'].'</label><br/><span class="sai_exp">'.$l['exp_ssl'].'</span>
			</div>
			<div class="col-lg-7 col-md-7 col-sm-7">
				<input type="checkbox" name="ssl" id="ssl" '.POSTchecked('ssl', false).'>
			</div>
		</div>
	</div><br />
	
	<div class="row" '.($globals['os'] == 'windows' ? '' : ($softpanel->currentBinary() > 16 ? '' : 'style="display:none"')).'>
		<div class="col-sm-5">
			<label for="hostadd" class="sai_head">'.$l['host_entry'].'</label><br/><span class="sai_exp2">'.$l['exp_hostadd'].'</span>'.($softpanel->isHostWrittable() != 1 ? '<br/><span class="sai_exp2"><font color=red>'.$l['hosts_perms'].'</font>' : '').'</span>
		</div>
		
		<div class="col-sm-7">
			<input type="checkbox" name="hostadd" id="hostadd" '.POSTchecked('hostadd', false).'>
		</div>
	</div><br />

	<div class="row">
		<div class="col-sm-5">
			<label class="sai_head"><a href="http://'.$_SERVER['HTTP_HOST'].'/ampps/index.php?act=ampps_domainmanage">'.$l['lbl_domain_manage'].'</a> </label>
		</div>
	</div>
	
	<center><input type="button" style="cursor:pointer" name="submitdomain" value="'.$l['submitdomain'].'" id="submitdomain" class="flat-butt"/> &nbsp;<img id="createdomain" src="'.$theme['images'].'progress.gif" style="display:none">
	<br /><br />
	</form>';

softfooter();
echo '</div><!--End of bg-->';
}
