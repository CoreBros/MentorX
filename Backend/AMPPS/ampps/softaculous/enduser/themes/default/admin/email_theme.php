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

function email_theme(){

global $theme, $globals, $user, $l, $langs, $skins, $error, $saved;

softheader($l['<title>']);

error_handle($error);

echo '<form accept-charset="'.$globals['charset'].'" name="editemailsettings" method="post" action="" class="form-horizontal">
<div class="container-fluid width80"><br /><br />
	<div class="sai_main_head text-center">
		<div class="row">
			<span style="display: inline-block; position:relative; top:3px;">
				<i class="fa sai-mail fa-1x"></i>
			</span>
			<span>
				'.$l['emailhead'].'
			</span>
		</div>
	</div>
	<div class="sai_form"><br />';
	
	if(!empty($saved)){
		echo '<div class="alert alert-success text-center"><a href="#close" class="close" data-dismiss="alert">&times;</a>
		<img src="'.$theme['images'].'success.gif" /> '.$l['settings_saved'].'</div>';
	}
	
	if(!empty($globals['enc_mail_pass']) && !empty($globals['mail_pass'])){
		$globals['mail_pass'] = smart_pass_decrypt($globals['mail_pass'], $globals['enc_mail_pass']);
	}
		
	echo '<div class="row">
		<div class="col-sm-5">
			<label for="mail" class="sai_head">'.$l['mailmethod'].'</label><br />
			<span class="sai_exp2">'.$l['mailmethod_exp'].'</span>
		</div>
		<div class="col-sm-7">
			<select name="mail" id="mail" class="form-control">
				<option value="1" '.(isset($_POST['mail']) && $_POST['mail'] == '1' ? 'selected="selected"' : ($globals['mail'] == 1 ? 'selected="selected"' : '')).'>PHP Mail</option>
				<option value="0" '.(isset($_POST['mail']) && $_POST['mail'] == '0' ? 'selected="selected"' : ($globals['mail'] == 0 ? 'selected="selected"' : '')).'>SMTP</option>
			</select>
		</div>
	</div><br />
	<div class="row">
		<div class="col-sm-5">
			<label for="mail_authtype" class="sai_head">'.$l['mailauthtype'].'</label><br />
			<span class="sai_exp2">'.$l['mailauthtype_exp'].'</span>
		</div>
		<div class="col-sm-7">
			<select name="mail_authtype" id="mail_authtype" class="form-control">
				<option value="0" '.(isset($_POST['mail_authtype']) && $_POST['mail_authtype'] == '0' ? 'selected="selected"' : ($globals['mail_authtype'] == 0 ? 'selected="selected"' : '')).'>Default</option>
				<option value="CRAM-MD5" '.(isset($_POST['mail_authtype']) && $_POST['mail_authtype'] == 'CRAM-MD5' ? 'selected="selected"' : ($globals['mail_authtype'] == 'CRAM-MD5' ? 'selected="selected"' : '')).'>CRAM-MD5</option>
			</select>
		</div>
	</div><br />
	
	<div class="row">
		<div class="col-sm-5">
			<label for="mail_server" class="sai_head">'.$l['smtp_server'].'</label><br />
		</div>
		<div class="col-sm-7">
			<input type="text" name="mail_server" class="form-control" id="mail_server" size="30" value="'.aPOSTval('mail_server', $globals['mail_server']).'" />
		</div>
	</div><br />
	
	<div class="row">
		<div class="col-sm-5">
			<label for="mail_port" class="sai_head">'.$l['smtp_port'].'</label><br />
		</div>
		<div class="col-sm-7">
			<input type="text" name="mail_port" class="form-control" id="mail_port" size="30" value="'.aPOSTval('mail_port', $globals['mail_port']).'" />
		</div>
	</div><br />
	
	<div class="row">
		<div class="col-sm-5">
			<label for="mail_server" class="sai_head">'.$l['smtp_user'].'</label><br />
		</div>
		<div class="col-sm-7">
			<input type="text" name="mail_user" class="form-control" id="mail_user" size="30" value="'.aPOSTval('mail_user', $globals['mail_user']).'" />
		</div>
	</div><br />
	
	<div class="row">
		<div class="col-sm-5">
			<label for="mail_pass" class="sai_head">'.$l['smtp_pass'].'</label><br />
		</div>
		<div class="col-sm-6">
			<input type="password" name="mail_pass" class="form-control" id="mail_pass" size="30" value="'.aPOSTval('mail_pass', $globals['mail_pass']).'" />
		</div>
		<div class="col-sm-1" style="margin-left:-20px;">
			<input id="toggle_pass_mail_pass" type="checkbox" style="display:none;" onclick="toggle_pass(\'show_hide_mail_pass\', \'mail_pass\');"/><label for="toggle_pass_mail_pass" style="margin-top:6px; cursor:pointer;"><span id="show_hide_mail_pass">'.$l['show'].'</span></label>
		</div>
	</div><br />
	
	<div class="row">
		<div class="col-sm-5">
			<label for="mail_send" class="sai_head">'.$l['mail_send'].'</label><br />
		</div>
		<div class="col-sm-7">
			<input type="checkbox" name="mail_send" id="mail_send" size="30" '.POSTchecked('mail_send').' />
		</div>
	</div><br />
	
	<div class="row">
		<div class="col-sm-5">
			<label for="enc_mail_pass" class="sai_head">'.$l['enc_mail_pass'].'</label><br />
		</div>
		<div class="col-sm-7">
			<input type="checkbox" name="enc_mail_pass" '.POSTchecked('enc_mail_pass', @$globals['enc_mail_pass']).' />
		</div>
	</div><br />
	
	<p align="center">
	'.csrf_display().'
	<input type="submit" name="editemailsettings" class="flat-butt" value="'.$l['edit_settings'].'"/>
	</p>
	</div>
</div>
</form>';

softfooter();

}

?>