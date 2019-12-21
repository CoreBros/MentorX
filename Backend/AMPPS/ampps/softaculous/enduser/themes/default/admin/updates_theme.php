<?php

//////////////////////////////////////////////////////////////
//===========================================================
// updates_theme.php
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

function updates_theme(){

global $theme, $globals, $user, $l, $error, $updated, $info, $report;

softheader($l['<title>']);

echo '<div class="container-fluid"><br /><br />
<div class="sai_main_head text-center">'.$l['update_softaculous'].'</div>
<div class="sai_form"><br />';

error_handle($error);

if(!empty($updated)){
	echo '<div class="alert alert-success text-center"><img src="'.$theme['images'].'success.gif" /> '.$l['updated_successfully'].'</div>';
}

if(!empty($report)){
	echo '<table width="100%" cellpadding="1" cellspacing="0" border="0" class="table table-striped">
	<tr>
		<td colspan="2" class="sai_head">'.$l['update_logs'].'</td>
	</tr>
	<tr>
		<td valign="top">'.implode('<br />', $report['log']).'</td>
		<td width="20%" style="vertical-align:middle;"><img src="'.$theme['images'].'admin/'.(empty($report['status']) ? 'softerror.gif' : 'softok.gif').'" /></td>
	</tr>
	</table>
	<br />';
}

$curr_version = (!empty($updated) ? $report['version'] : asperapp($globals['version'], @$globals['webuzo_version'], @$globals['ampps_version']));
$latest_version = (empty($info['version']) ? $l['not_connect_soft'] : $info['version']);

echo '<form accept-charset="'.$globals['charset'].'" name="updatesoftaculous" method="post" action="">
<div class="sai_divroundshad"><br />
	<div class="row">
		<div class="sai_head" align="center">'.$l['cur_ver'].'&nbsp;&nbsp;'.$curr_version.'</div>
	</div><br />
	<div class="row">
		<div class="sai_head" align="center">'.$l['latest_ver'].'&nbsp;&nbsp;&nbsp;&nbsp;'.($curr_version != $latest_version ? '<font color="#FF0033">' : '<font>').$latest_version.'</font>
		</div>
	</div><br />
</div><br />
<div class="sai_bboxtxt" style="color:#767676;">'.$info['message'].'</div><br />

'.($curr_version != $latest_version ? '<p align="center"><input type="submit" name="update" value="'.$l['updatesoftaculous'].'" '.(empty($info['link']) ? 'disabled="disabled"' : '').' class="flat-butt" /></p>' : '').'
'.csrf_display().'
</form></div></div><br />';

softfooter();

}

?>