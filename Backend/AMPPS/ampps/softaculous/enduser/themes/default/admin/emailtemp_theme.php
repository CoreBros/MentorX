<?php

//////////////////////////////////////////////////////////////
//===========================================================
// emailtemp_theme.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// Version : 1.0
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Date:       8th Mar 2010
// Time:       23:00 hrs
// Site:       http://www.virtualizor.com/ (SOFTACULOUS VIRTUALIZOR)
// ----------------------------------------------------------
// Please Read the Terms of use at http://www.virtualizor.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Ltd.
//===========================================================
//////////////////////////////////////////////////////////////

if(!defined('SOFTACULOUS')){

	die('Hacking Attempt');

}

function emailtemp_theme(){

global $theme, $globals, $kernel, $user, $l, $error, $emailtemps, $done, $notice;

softheader($l['<title>']);

echo '<div class="container-fluid width80"><br /><br />
<div class="sai_main_head text-center">
	<div class="row">
		<span style="display: inline-block; position:relative; top:3px;">
			<i class="fa sai-mail fa-1x"></i>
		</span>
		<span>'.$l['emailtemp'].'</span>
	</div>
</div>';

if(!empty($notice)){
	echo '<br /><div class="alert alert-warning text-center"><img src="'.$theme['images'].'notice.gif" /> &nbsp; '.$l['action_not_applicable'].'</div>';
}else{
	echo '<div class="sai_form"><br />';
	
	error_handle($error);
	
	echo '<table border="0" cellpadding="8" cellspacing="1" width="95%" class="table table-hover" style="margin:0px auto; width:70%;">
	<tr>
		<thead style="background:#edebe8;">
			<th align="center" class="sai_head">'.$l['tempname'].'</th>
			<th width="50" align="center" class="sai_head">'.$l['options'].'</th>
		</thead>
	</tr>';

	$i=1;

	foreach($emailtemps as $k=>$v){
	echo '<tr>		
		<td>'.$l['temp_'.$k].'</td>
		<td align="center"><a href="'.$globals['ind'].'act=editemailtemp&temp='.$k.'"><img src="'.$theme['images'].'admin/editemail.gif" /></a></td>
	</tr>';
	$i++;
}
echo '</table>
</div>
</div><br />';

}

softfooter();

}

?>