<?php

//////////////////////////////////////////////////////////////
//===========================================================
// root_pass.php
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

function root_pass_theme(){
	
global $theme, $globals, $kernel, $user, $l, $error, $done, $onboot, $user_name, $iapps;


 
softheader($l['<title>']);
error_handle($error);

echo '<form accept-charset="'.$globals['charset'].'" action="" method="post" name="changepass" id="editform" class="form-horizontal">
<div class="container-fluid width80"><br /><br />
	<div class="sai_main_head text-center">
	'.$l['change_note'].'
	</div>
	<div class="sai_form"><br />';
		if(!empty($done)){
			echo '<div class="alert alert-success text-center"><a href="#close" class="close" data-dismiss="alert">&times;</a><img src="'.$theme['images'].'success.gif" /> '.$l['change_final'].'</div>';
		}
		
		echo '<div class="row">
		<div class="col-sm-5">
			<label for="mail" class="sai_head">'.$l['new_pass'].'</label>
		</div>
		<div class="col-sm-7">
			<input class="form-control" type="password" name="newpass" id="newpass" size="30" value="" />
		</div>
		</div>
		<br/>
		
		<div class="row">
		<div class="col-sm-5">
			<label for="mail" class="sai_head">'.$l['retype_pass'].'</label>
		</div>
		<div class="col-sm-7">
			<input class="form-control" type="password" name="conf" id="conf" size="30" value="" />
		</div>
		</div>
		<br/>
		
		<p align="center">
			<input type="hidden" name="changepass" value="1" />
			<input class="flat-butt" type="submit" style="cursor:pointer" value="'.$l['submit_button'].'" name="changepass" id="submitpass"/> &nbsp;<img id="createpass" src="'.$theme['images'].'progress.gif" style="display:none">
		</p>
	</div>
</div>
</form><br /><br /><br />';

softfooter();
	 
}

?>