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

function webuzoconfigs_theme(){

global $theme, $globals, $user, $l, $langs, $skins, $error, $saved, $webuzoconfigs;

softheader($l['<title>']);
error_handle($error);

echo '<form accept-charset="'.$globals['charset'].'" name="editconfigs" method="post" action="" class="form-horizontal">
<div class="container-fluid width80"><br /><br />
	<div class="sai_main_head text-center">
	'.$l['pathhead'].'
	</div>
	<div class="sai_form"><br />';
		if(!empty($saved)){
			echo '<div class="alert alert-success text-center"><a href="#close" class="close" data-dismiss="alert">&times;</a><img src="'.$theme['images'].'success.gif" /> '.$l['settings_saved'].'</div>';
		}
		
		echo '<div class="row">
		<div class="col-sm-5">
			<label for="mail" class="sai_head">'.$l['primary_ip'].'</label>
		</div>
		<div class="col-sm-7">
			<input class="form-control" type="text" name="WU_PRIMARY_IP" size="30" value="'.aPOSTval('WU_PRIMARY_IP', $webuzoconfigs['WU_PRIMARY_IP']).'" />
		</div>
		</div><br/>
		
		<div class="row">
		<div class="col-sm-5">
			<label for="mail" class="sai_head">'.$l['primary_domain'].'</label>
		</div>
		<div class="col-sm-7">
			<input class="form-control" type="text" name="WU_PRIMARY_DOMAIN" size="30" value="'.aPOSTval('WU_PRIMARY_DOMAIN', $webuzoconfigs['WU_PRIMARY_DOMAIN']).'" />
		</div>
		</div><br/>
		
		<div class="row">
		<div class="col-sm-5">
			<label for="mail" class="sai_head">'.$l['ns1'].'</label>
		</div>
		<div class="col-sm-7">
			<input class="form-control" type="text" name="WU_NS1" size="30" value="'.aPOSTval('WU_NS1', $webuzoconfigs['WU_NS1']).'" />
		</div>
		</div><br/>
		
		<div class="row">
		<div class="col-sm-5">
			<label for="mail" class="sai_head">'.$l['ns2'].'</label>
		</div>
		<div class="col-sm-7">
			<input class="form-control" type="text" name="WU_NS2" size="30" value="'.aPOSTval('WU_NS2', $webuzoconfigs['WU_NS2']).'" />
		</div>
		</div><br/>
		
		<p align="center"><input type="submit" name="editconfigs" value="'.$l['edit_configs'].'" class="flat-butt" /></p>
	</div>
</div>
</form>';

softfooter();

}

?>
