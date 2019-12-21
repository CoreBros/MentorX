<?php

//////////////////////////////////////////////////////////////
//===========================================================
// adddomain_theme.php
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


function adddomain_theme(){

global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error;
global $saved , $aefer ;

softheader($l['<title>']);

echo '<div class="bg"><br />';

echo '<form accept-charset="'.$globals['charset'].'" name="addadomain" method="post" action="" class="form-horizontal">
	<div class="sai_main_head" style="width:100%;" align="center">'.$l['add_domain'].'</div><hr>';
		
	error_handle($error, '100%');

	if(!empty($saved)){
		echo '<div class="alert alert-warning">
			<a href="#close" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<center><img src="'.$theme['images'].'notice.gif" /> &nbsp; '.$l['settings_saved'].'</center>
		</div>';
	}
	
	echo '<div class="row">
		<div class="col-sm-5">
			<label for="domain" class="sai_head">'.$l['domain'].'</label><br />
			<span class="sai_exp2">'.$l['domain_exp'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="text" name="domain" id="domain" class="form-control" value="'.POSTval('domain', '').'" />
		</div>
	</div><br />
	
	<div class="row">
		<div class="col-sm-5">
			<label for="server_host" class="sai_head">'.$l['server_host'].'</label>
			<span class="sai_exp">'.$l['server_host_exp'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="text" name="server_host" id="server_host" class="form-control" value="'.POSTval('server_host', '').'" />
		</div>
	</div><br />';
	
	if(empty($globals['custom_handler'])){
		echo '
		<div class="row">
			<div class="col-sm-5">
				<label for="protocol" class="sai_head">'.$l['protocol'].'</label>
				<span class="sai_exp">'.$l['protocol_exp'].'</span>
			</div>
			<div class="col-sm-7">
				<select name="protocol" class="form-control" id="protocol">
					<option value="ftp" '.(isset($_POST['protocol']) && $_POST['protocol'] == 'ftp' ? 'selected="selected"' : '').'>FTP</option>
					<option value="ftps" '.(isset($_POST['protocol']) && $_POST['protocol'] == 'ftps' ? 'selected="selected"' : '').'>FTPS</option>
					<option value="sftp" '.(isset($_POST['protocol']) && $_POST['protocol'] == 'sftp' ? 'selected="selected"' : '').'>SFTP</option>
				</select>
			</div>
		</div><br />';
	}
	
	echo '
	<div class="row">
		<div class="col-sm-5">
			<label for="port" class="sai_head">'.$l['port'].'</label>
			<span class="sai_exp">'.$l['port_exp'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="text" name="port" id="port" class="form-control" value="'.POSTval('port', '').'" />
		</div>
	</div><br />
	
	<div class="row">
		<div class="col-sm-5">
			<label for="ftp_user" class="sai_head" id="ftp_user_head">'.$l['ftp_user'].'</label><br />
			<span class="sai_exp2">'.$l['ftp_user_exp'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="text" name="ftp_user" id="ftp_user" class="form-control" value="'.POSTval('ftp_user', '').'" />
		</div>
	</div><br />
	
	<div class="row" id="ftp_pass">
		<div class="col-sm-5">
			<label for="ftp_passwd" class="sai_head" id="ftp_pass_head">'.$l['ftp_pass'].'</label><br />
			<span class="sai_exp2">'.$l['ftp_pass_exp'].'</span>
		</div>
		<div class="col-sm-7">
			<div class="row">
				<div class="col-sm-11">
					<input type="password" name="ftp_pass" id="ftp_passwd" class="form-control" value="'.POSTval('ftp_pass', '').'" autocomplete="off" />
				</div>
				<div class="col-sm-1" style="margin-left:-20px;">
					<input id="toggle_passwd" type="checkbox" style="display:none;" onclick="toggle_pass(\'show_hide\', \'ftp_passwd\');" /><label for="toggle_passwd" style="margin-top:6px;"><span id="show_hide">'.$l['show'].'</span></label>
				</div>
			</div><br />
		</div>
	</div>
	
	<div class="row" id="trauthpass">
		<div class="col-sm-5">
			<label for="auth_password" class="sai_head">'.$l['auth_password'].'</label><br/>
			<span class="sai_exp">'.$l['auth_password_exp'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="radio" name="auth_password" id="auth_password" value="1" onchange="check_auth_password();" '.POSTradio('auth_password', 1, 1).' />&nbsp;'.$l['auth_method_pass'].' &nbsp;&nbsp;
			<input type="radio" name="auth_password" id="auth_password" value="" onchange="check_auth_password();" '.POSTradio('auth_password', '').' />&nbsp;'.$l['auth_method_key'].'<br /><br />
		</div><br/>
	</div>
	
	<div class="row" id="pri">
		<div class="col-sm-5">
			<label for="private_key" class="sai_head">'.$l['private_key'].'</label>
			<span class="sai_exp">'.$l['private_key_exp'].'</span>
		</div>
		<div class="col-sm-7">
			<textarea name="private_key" id="private_key" rows="15" cols="70" class="form-control">'.aPOSTval('private_key').'</textarea><br />
		</div><br/>
	</div>
	
	<div class="row" id="passphrase">
		<div class="col-sm-5">
			<label for="passphrase" class="sai_head">'.$l['passphrase'].'</label>
			<span class="sai_exp2">'.$l['passphrase_exp'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="text" name="passphrase" id="passphrase" class="form-control" value="'.POSTval('passphrase', '').'" /><br />
		</div>
	</div>
	
	<div class="row">
		<div class="col-sm-5">
			<label for="ftp_path" class="sai_head" id="ftp_path_head">'.$l['ftp_path'].'</label><br />
			<span class="sai_exp2" id="ftp_path_exp">'.$l['ftp_path_exp'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="text" name="ftp_path" id="ftp_path" class="form-control" value="'.POSTval('ftp_path', '').'" />
		</div>
	</div><br />';
	
	if(empty($softpanel->dont_show_backup_dir) && empty($globals['disable_backup_restore'])){
	
		echo '<div class="row">
			<div class="col-sm-5">
				<label for="backup_path" class="sai_head">'.$l['backup_path'].'</label><br />
				<span class="sai_exp2" id="backup_path_exp">'.$l['backup_path_exp'].'</span>
			</div>
			<div class="col-sm-7">
				<input type="text" name="backup_path" id="backup_path" class="form-control" value="'.POSTval('backup_path', '').'" />
			</div>
		</div><br />';
	}
	
	if(empty($softpanel->dont_show_datadir)){
		echo '<div class="row">
			<div class="col-sm-5">
				<label for="data_dir" class="sai_head">'.$l['data_dir'].'</label><br />
				<span class="sai_exp2">'.$l['data_dir_exp'].'</span>
			</div>
			<div class="col-sm-7">
				<input type="text" name="data_dir" id="data_dir" class="form-control" value="'.POSTval('data_dir', '').'" />
			</div>
		</div><br />';
	}
	
	echo '
	<br /><br />
	<p align="center">
	'.csrf_display().'
	<input class="flat-butt" type="submit" name="add_domain" value="'.$l['submit_add'].'" />
	<br /><br /><br /><br />
	<b><a class="sai_head" href="'.$globals['ind'].'act=domains">'.$l['show_all_dom'].'</a></b>
	</p>
	</form>
</div>';

echo ' <br /><br />
<script language="javascript" type="text/javascript"><!-- // --><![CDATA[

$(document).ready(function(){
	check_auth_password();
	checkprotocol();
	$(\'#auth_password\').change(function(){
		if($(this).is(":checked")) {
			hide_sshkey();
		}else{
			show_sshkey();
		}
	});
	
	$(\'#protocol\').change(function(){
		checkprotocol();
	});
});

function checkprotocol(){
				
	$(\'#ftp_user_head\').html($(\'#protocol\').val().toUpperCase()+" "+"'.$l['ftp_user'].'");
	$(\'#ftp_pass_head\').html($(\'#protocol\').val().toUpperCase()+" "+"'.$l['ftp_pass'].'");
	$(\'#ftp_path_head\').html($(\'#protocol\').val().toUpperCase()+" "+"'.$l['ftp_path'].'");
	
	if($(\'#protocol\').val() == \'ftp\'){
		if($(\'#port\').val() == ""){
			$(\'#port\').val(\'21\');
		}
		$(\'#trauthpass\').hide();
		hide_sshkey();
		ftppath();
	}
	if($(\'#protocol\').val() == \'ftps\'){
		if($(\'#port\').val() == ""){
			$(\'#port\').val(\'21\');
		}
		$(\'#trauthpass\').hide();
		hide_sshkey();
		ftppath();
	}
	if($(\'#protocol\').val() == \'sftp\'){
		if($(\'#port\').val() == ""){
			$(\'#port\').val(\'22\');
		}
		$(\'#trauthpass\').show();
		if($(\'#auth_password\').is(":checked")){
			hide_sshkey();
		}else{
			show_sshkey();
		}
		sftppath();
	}
}

function ftppath(){
	$(\'#ftp_path\').html("'.$l['ftp_path'].'");
	$(\'#ftp_path_exp\').html("'.$l['ftp_path_exp'].'");
	$(\'#backup_path_exp\').html("'.$l['backup_path_exp'].'");
}

function sftppath(){
	$(\'#ftp_path\').html("'.$l['sftp_path'].'");
	$(\'#ftp_path_exp\').html("'.$l['sftp_path_exp'].'");
	$(\'#backup_path_exp\').html("'.$l['sbackup_path_exp'].'");
}

function check_auth_password(){
	
	if($("#auth_password").is(":checked")){
		hide_sshkey();
	}else{
		show_sshkey();
	}
}

function hide_sshkey(){
	$("#private_key").prop("disabled", true);
	$("#pri").hide();
	$("#passphrase").hide();
	$("#ftp_pass").show();
}

function show_sshkey(){
	$("#private_key").prop("disabled", false);
	$("#pri").show();
	$("#passphrase").show();
	$("#ftp_pass").hide();
}

// ]]></script>
<!--<center>
<h2>How to Add a Domain</h2>
<object width="450" height="345" align="center">
<param name="movie" value="Add Domain">
<embed src="../theme/videos/add_domain/video.swf" width="450" height="345">
</embed>
</object>
</center>-->';

softfooter();

}

?>