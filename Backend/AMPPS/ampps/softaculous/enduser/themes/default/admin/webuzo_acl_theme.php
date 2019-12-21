<?php

//////////////////////////////////////////////////////////////
//===========================================================
// webuzo_acl_theme.php
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

function webuzo_acl_theme(){
	
global $theme, $globals, $l, $error, $done, $softpanel;

softheader($l['<title>']);
error_handle($error);

echo '<form accept-charset="'.$globals['charset'].'" action="" method="post" name="changepass" id="editform" class="form-horizontal">
<div class="container-fluid width80"><br /><br />
	<div class="sai_main_head text-center">
	'.$l['heading_webuzo_acl'].'
	</div>
	<div class="sai_form"><br />';
		if(!empty($done)){
			echo '<div class="alert alert-success text-center"><a href="#close" class="close" data-dismiss="alert">&times;</a><img src="'.$theme['images'].'success.gif" /> '.$l['change_final'].'</div>';
		}
		
		echo '<div class="row">
		<div class="col-sm-5">
			<label for="mail" class="sai_head">'.$l['disable_domainadd'].'</label><br />
			<span class="sai_exp2">'.$l['disable_domainadd_exp'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="checkbox" name="disable_domainadd" '.POSTchecked('disable_domainadd', ($softpanel->getconf('DISABLE_DOMAINADD'))).' />
		</div>
		</div><br/>
		
		<div class="row">
		<div class="col-sm-5">
			<label for="mail" class="sai_head">'.$l['disable_addon'].'</label><br />
			<span class="sai_exp2">'.$l['disable_addon_exp'].'</span>
		</div>
		<div class="col-sm-2">
			<input type="text" name="disable_addon" class="form-control" value="'.POSTval('disable_addon', ($softpanel->getconf('DISABLE_ADDON'))).'" />
		</div>
		<div class="col-sm-5">&nbsp;</div>
		</div><br/>
		
		<div class="row">
		<div class="col-sm-5">
			<label for="mail" class="sai_head">'.$l['disable_email'].'</label><br />
			<span class="sai_exp2">'.$l['disable_email_exp'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="checkbox" name="disable_email" '.POSTchecked('disable_email', ($softpanel->getconf('DISABLE_EMAIL'))).' />
		</div>
		</div><br/>
		
		<div class="row">
		<div class="col-sm-5">
			<label for="mail" class="sai_head">'.$l['disable_emailadd'].'</label><br />
			<span class="sai_exp2">'.$l['disable_emailadd_exp'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="checkbox" name="disable_emailadd" '.POSTchecked('disable_emailadd', ($softpanel->getconf('DISABLE_EMAILADD'))).' />
		</div>
		</div><br/>
		
		<div class="row">
		<div class="col-sm-5">
			<label for="mail" class="sai_head">'.$l['disable_ssh'].'</label><br />
			<span class="sai_exp2">'.$l['disable_ssh_exp'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="checkbox" name="disable_ssh" '.POSTchecked('disable_ssh', ($softpanel->getconf('DISABLE_SSH'))).' />
		</div>
		</div><br/>
		
		<div class="row">
		<div class="col-sm-5">
			<label for="mail" class="sai_head">'.$l['disable_system_apps'].'</label><br />
			<span class="sai_exp2">'.$l['disable_system_apps_exp'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="checkbox" name="disable_sysapps" '.POSTchecked('disable_sysapps', ($softpanel->getconf('DISABLE_SYSAPPS'))).' />
		</div>
		</div><br/>
		
		<div class="row">
		<div class="col-sm-5">
			<span class="sai_exp2">'.$l['root_login_admin'].'</span>
		</div>
		</div><br/>
		
		<p align="center">
			<input type="submit" style="cursor:pointer" value="'.$l['submit_button'].'" name="savechanges" class="flat-butt" />
		</p>
	</div>	
</div>
</form><br /><br /><br />';

softfooter();

}

?>