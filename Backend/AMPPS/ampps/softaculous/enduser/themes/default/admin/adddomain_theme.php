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

function adddomain_theme(){

global $theme, $globals, $user, $l, $langs, $error, $reseller, $iscripts, $plans, $done, $_cpplan, $_users, $allcatwise, $_resellers, $loaded_scripts, $softpanel, $__adduser;

softheader($l['<title>']);

echo '<br /><form accept-charset="'.$globals['charset'].'" name="adddomain" method="post" action="">
<div class="container-fluid">

<div class="sai_heading text-center">
	<div class="row">
		<span style="display: inline-block; position:relative; top:3px;">
			<i class="fa sai-www fa-1x"></i>
		</span>
		<span>
			'.$l['title'].'
		</span>
	</div>
</div><br />
<div class="sai_hr"></div><br /><br />
<div class="sai_form_head">
	'.$l['domain_details'].'
</div>
<div class="sai_form"><br />';
	
error_handle($error);

if(!empty($done)){
	echo '<div class="alert alert-success text-center"><img src="'.$theme['images'].'success.gif" /> &nbsp; '.$l['done'].'</div>';
}

echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[

// ]]></script>';

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
			<span class="sai_head">'.$l['domain'].'</span><br />
			<span class="sai_exp2">'.$l['exp_domain'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="text" class="form-control" name="domain" size="40" value="'.POSTval('domain', '').'">
		</div>
	</div><br />
	<div class="row">
		<div class="col-sm-5">
			<span class="sai_head">'.$l['path'].'</span><br />
			<span class="sai_exp2">'.$l['exp_path'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="text" class="form-control" name="path" size="40" value="'.POSTval('path', '').'">
		</div>
	</div><br />
	<div class="row">
		<div class="col-sm-5">
			<span class="sai_head">'.$l['backup_dir'].'</span><br />
			<span class="sai_exp2">'.$l['exp_backup_dir'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="text" class="form-control" name="backup_dir" size="40" value="'.POSTval('backup_dir', '').'">
		</div>
	</div><br />
	<div class="row">
		<div class="col-sm-5">
			<span class="sai_head">'.$l['replace_path'].'</span><br />
			<span class="sai_exp2">'.$l['exp_replace_path'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="text" class="form-control" name="replace_path" size="40" value="'.POSTval('replace_path', '').'">
		</div>
	</div><br />
	<div class="row">
		<div class="col-sm-5">
			<span class="sai_head">'.$l['data_dir'].'</span><br />
			<span class="sai_exp2">'.$l['exp_data_dir'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="text" class="form-control" name="data_dir" size="40" value="'.POSTval('data_dir', '').'">
		</div>
	</div><br /><br />
	
	<p align="center">
	'.csrf_display().'
	<input type="submit" name="savedomain" value="'.$l['savedomain'].'" class="flat-butt">
	</p>
</div>
</div>
</form><br />';

softfooter();

}

?>