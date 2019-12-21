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

function adduser_theme(){

global $theme, $globals, $user, $l, $langs, $error, $reseller, $iscripts, $plans, $done, $_cpplan, $_users, $allcatwise, $_resellers, $loaded_scripts, $softpanel, $__adduser;

softheader($l['<title>']);

echo '<br /><form accept-charset="'.$globals['charset'].'" name="addplan" method="post" action="">
<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
	
function show(){
	if($_("is_reseller").checked){		
		$_("num_users_row").style.display = "";
	}else{
		$_("num_users_row").style.display = "none";
		$_("num_users").value = 0;
	}
}
addonload("show();");

// ]]></script>';

echo '<link href="https://www.softaculous.net/images/sprites/20.css" rel="stylesheet" type="text/css" />
<div class="container-fluid">
<div class="sai_heading text-center">
	<div class="row">
		<span style="display: inline-block; position:relative; top:3px;">
			<i class="fa sai-blogs fa-1x"></i>
		</span>
		<span>
			'.$l['title'].'
		</span>
	</div>
</div><br />
<div class="sai_hr"></div><br /><br />
<div class="sai_form_head">'.$l['user_details'].'</div>
<div class="sai_form"><br />';

error_handle($error);

if(!empty($done)){
	echo '<div class="alert alert-success text-center"><img src="'.$theme['images'].'success.gif" /> &nbsp; '.$l['done'].'</div>';
}

echo '<div class="row">
		<div class="col-sm-5">
			<span class="sai_head">'.$l['username'].'</span><br />
			<span class="sai_exp2">'.$l['exp_username'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="text" class="form-control" name="username" size="40" value="'.POSTval('username', '').'">
		</div>
	</div><br />
	<div class="row">
		<div class="col-sm-5">
			<span class="sai_head">'.$l['user_email'].'</span><br />
			<span class="sai_exp2">'.$l['exp_user_email'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="text" class="form-control" name="user_email" size="40" value="'.POSTval('user_email', '').'">
		</div>
	</div><br />';
	
if(ent()){
	echo '
	<div class="row">
		<div class="col-sm-5">
			<span class="sai_head">'.$l['uid'].'</span><br />
			<span class="sai_exp2">'.$l['exp_uid'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="text" class="form-control" name="uid" size="40" value="'.POSTval('uid', '').'">
		</div>
	</div><br />
	
	<div class="row">
		<div class="col-sm-5">
			<span class="sai_head">'.$l['gid'].'</span><br />
			<span class="sai_exp2">'.$l['exp_gid'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="text" class="form-control" name="gid" size="40" value="'.POSTval('gid', '').'">
		</div>
	</div><br />';
}
	
if(!defined('SOFTRESELLER')){
	echo '
	<div class="row">
		<div class="col-sm-5">
			<span class="sai_head">'.$l['is_reseller'].'</span><br />
			<span class="sai_exp2">'.$l['exp_is_reseller'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="checkbox" name="is_reseller" size="40"  id="is_reseller" '.POSTchecked('is_reseller', true).' onclick="show(this);">
		</div>
	</div><br />
	
	<div class="row" id="num_users_row" style="display:none;">
		<div class="col-sm-5">
			<span class="sai_head">'.$l['number_of_users'].'</span><br />
			<span class="sai_exp2">'.$l['exp_number_of_users'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="text" class="form-control" name="num_users" id="num_users" size="40" value="'.POSTval('num_users', '').'">
		</div>
	</div><br />';
}
	
echo '<br /><p align="center">
		'.csrf_display().'
		<input type="submit" name="saveuser" value="'.$l['saveuser'].'" class="flat-butt">
		</p>
</div>
</div>
</form><br />';

softfooter();

}

?>