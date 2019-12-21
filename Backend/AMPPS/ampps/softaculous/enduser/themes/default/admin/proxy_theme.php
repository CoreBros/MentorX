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

function proxy_theme(){

global $theme, $globals, $user, $l, $langs, $skins, $error, $saved;

softheader($l['<title>']);

echo '<div class="container-fluid"><br /><br />
	<div class="sai_main_head text-center">'.$l['proxyhead'].'</div>
	<div class="sai_form"><br />';
	
	error_handle($error);
	
	if(!empty($saved)){
		echo '<div class="alert alert-success text-center"><a href="#close" class="close" data-dismiss="alert">&times;</a><img src="'.$theme['images'].'success.gif" /> '.$l['settings_saved'].'</div>';
	}
		
	echo '<form accept-charset="'.$globals['charset'].'" name="editeproxysettings" method="post" action="">
		<div class="row">
			<div class="col-sm-5">
				<span class="sai_head">'.$l['proxy_check'].'</span>
			</div>
			<div class="col-sm-7">
				<input type="checkbox" name="proxy_check" '.POSTchecked('proxy_check', $globals['proxy_check']).' />
			</div>
		</div><br />
		<div class="row">
			<div class="col-sm-5">
				<span class="sai_head">'.$l['proxy_ip'].'</span>
			</div>
			<div class="col-sm-7">
				<input type="text" class="form-control" name="proxy_ip" size="30" value="'.aPOSTval('proxy_ip', $globals['proxy_ip']).'" />
			</div>
		</div><br />
		<div class="row">
			<div class="col-sm-5">
				<span class="sai_head">'.$l['proxy_port'].'</span>
			</div>
			<div class="col-sm-7">
				<input type="text" class="form-control" name="proxy_port" size="30" value="'.aPOSTval('proxy_port', $globals['proxy_port']).'" />
			</div>
		</div><br />
		<div class="row">
			<div class="col-sm-5">
				<span class="sai_head">'.$l['proxy_user'].'</span>
			</div>
			<div class="col-sm-7">
				<input type="text" class="form-control" name="proxy_user" size="30" value="'.aPOSTval('proxy_user', $globals['proxy_user']).'" />
			</div>
		</div><br />
		<div class="row">
			<div class="col-sm-5">
				<span class="sai_head">'.$l['proxy_pass'].'</span>
			</div>
			<div class="col-sm-7">
				<input type="password" class="form-control" name="proxy_pass" size="30" value="'.aPOSTval('proxy_pass', $globals['proxy_pass']).'" />
			</div>
		</div><br /><br />
		<p align="center"><input type="submit" name="editproxysettings" value="'.$l['edit_settings'].'" class="flat-butt"/></p><br />
		<font class="bboxtxt">'.$l['tcp_note'].'</font>
	</div>
</div>
</form><br />';

softfooter();

}

?>