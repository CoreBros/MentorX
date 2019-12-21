<?php

//////////////////////////////////////////////////////////////
//===========================================================
// import_theme.php
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

function import_export_theme(){

global $theme, $globals, $user, $l, $error, $updated, $info, $report, $allusers, $imported;

softheader($l['<title>']);

echo '<div class="container-fluid width80">
<div class="sai_heading" align="center">'.$l['import_export'].'</div><br />
<div class="sai_hr"></div><br />';

error_handle($error);

if(!empty($imported)){
	echo '<div class="container-fluid width80">
			<div class="alert alert-success"><img src="'.$theme['images'].'success.gif" /> '.$l['settings_imported'].'</div>
		</div>';
}

echo '<form accept-charset="'.$globals['charset'].'" name="importexport" method="post" action="" enctype="multipart/form-data" class="form-horizontal">
	<div class="sai_form_head">'.$l['import_setting'].'</div>
	<div class="sai_form">
		<div class="row"><br />
			<div class="col-sm-6">
				<label class="sai_head">'.$l['import_setting'].'</label><br />
				<span class="sai_exp2">'.$l['import_setting_exp'].'</span>
			</div>
			<div class="col-sm-6">
				<input type="file" name="import_file"/><br />
				<input type="submit" name="import_setting" value="'.$l['import_setting'].'" class="flat-butt"/>
			</div>
		</div>
	</div><br />
	
	<div class="sai_form_head">'.$l['export_setting'].'</div>
	<div class="sai_form">
		<div class="row"><br />
			<div class="col-sm-6">
				<label class="sai_head">'.$l['export_setting'].'</label><br />
				<span class="sai_exp2">'.$l['export_setting_exp'].'</span>
			</div>
			<div class="col-sm-6">
				<p class="flat-butt"><a href="'.$globals['ind'].'act=import_export&download=softaculous_settings.zip"  style="text-decoration:none; color:#fff;">'.$l['export_setting'].'</a></p>
			</div>
		</div><br />
	</div>
</div>
'.csrf_display().'
</form>';

softfooter();

}

?>