<?php

//////////////////////////////////////////////////////////////
//===========================================================
// settings_theme.php
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

function licensekey_theme(){

global $theme, $globals, $user, $l, $langs, $skins, $error, $licsubmit;

softheader($l['<title>']);			
error_handle($error);


echo '<form accept-charset="'.$globals['charset'].'" name="licensekey" method="post" action="" class="form-horizontal">
<div class="container-fluid width80"><br /><br />
	<div class="sai_main_head text-center">
		'.$l['license_key'].'
	</div>
	<div class="sai_form"><br />';
		if(!empty($licsubmit)){
			echo '<div class="alert alert-success text-center"><a href="#close" class="close" data-dismiss="alert">&times;</a><img src="'.$theme['images'].'success.gif" /> '.$l['license_success'].'</div>';
		}

		echo '<div class="row">
		<div class="col-sm-5">
			<label for="mail" class="sai_head">'.$l['enter_license_key'].'</label><br />
			<span class="sai_exp2">'.$l['exp_license_key'].'</span>
		</div>
		<div class="col-sm-7">
			<input class="form-control" type="text" name="enter_license" id="enter_license" size="30" value="'.POSTval('enter_license').'" autocomplete=off /> &nbsp; &nbsp;
		</div>
		</div><br/>
		
		<div class="row">
		<div class="col-sm-5">
			<label for="mail" class="sai_head">'.$l['enter_email'].'</label><br />
			<span class="sai_exp2">'.$l['exp_enter_email'].'</span>
		</div>
		<div class="col-sm-7">
			<input class="form-control" type="text" name="enter_email" id="enter_email" size="30" value="'.POSTval('enter_email').'" autocomplete=on /> &nbsp; &nbsp;
		</div>
		</div><br/>
		
		<p align="center">
			<input type="submit" name="submit_license" value="'.$l['submit_license'].'" class="flat-butt" />
		</p>
		
	</div>
</div>
</form><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />';

softfooter();
}

?>