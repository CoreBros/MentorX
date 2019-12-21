<?php

//////////////////////////////////////////////////////////////
//===========================================================
// update_ssl_cert_theme.php
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

function ssl_cert_theme(){

global $globals, $l, $theme, $langs, $error, $updated;

softheader($l['<title>']);

echo '<div class="container-fluid"><br /><br />
		<div class="sai_main_head text-center">'.$l['update_ssl_cert'].'</div>
		<div class="sai_form">';

error_handle($error);

if(!empty($updated)){
	echo '<br /><div class="container-fluid"><div class="alert alert-success text-center"><a href="#close" class="close" data-dismiss="alert">&times;</a><img src="'.$theme['images'].'success.gif" /> '.$l['save_key'].'</div></div>';
}

echo '<form accept-charset="'.$globals['charset'].'" name="updatesslcert" method="post" action="">
<br />';
echo '<div class="row">
		<div class="col-sm-5">
			<label class="sai_head" for="kpaste">'.$l['paste_key'].'</label>					
		</div>
		<div class="col-sm-7">
			<textarea name="kpaste" id="kpaste"  rows="15" cols="70" class="form-control" wrap="off">'.aPOSTval('kpaste').'</textarea>					
		</div>
	</div><br/>
	<div class="row">
		<div class="col-sm-5">
			<label class="sai_head" for="cpaste">'.$l['paste_crt'].'</label>					
		</div>
		<div class="col-sm-7">
			<textarea name="cpaste" id="cpaste" rows="15" cols="70" class="form-control" wrap="off">'.aPOSTval('cpaste').'</textarea>
		</div>
	</div><br/>
	<div class="row">
		<div class="col-sm-12">
			<input type="hidden" name="update_ssl" value="1" />
			<center><input type="submit" style="cursor:pointer" value="'.$l['update_button'].'" class="flat-butt" name="update_ssl" id="submitkey" />&nbsp;<img id="instcert" src="'.$theme['images'].'progress.gif" style="display:none"></center>
			<br />
		</div>
	</div>';
echo csrf_display().'
</form>
</div>
</div><br />';

softfooter();

}

?>