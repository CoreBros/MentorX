<?php

//////////////////////////////////////////////////////////////
//===========================================================
// addremote_theme.php
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

function addremote_theme(){

global $theme, $globals, $user, $l, $error, $panels, $done;

softheader($l['<title>']);

echo '<center class="sai_tit"><img src="'.$theme['images'].'adddomain.gif" />&nbsp; &nbsp;'.$l['header'].'</center>
<img src="'.$theme['images'].'hr.jpg" width="100%" height="1" alt="" /><br /><br />';

error_handle($error, '100%');

if(!empty($done)){
	echo '<div class="sai_success">'.$l['done'].'</div><br /><br />
	<center><a href="'.$globals['ind'].'act=remote" style="padding:8px; display:block; font-size: 18px; font-weight: 400;">'.$l['return_overview'].'</a></center>';
}else{
	
echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[

function checkradio(panel){
	var panels = new Array("'.implode('", "', array_keys($panels)).'");
	for(x in panels){
		$_("panel_"+panels[x]).style.backgroundColor = "white";
	}
	$_("panel_"+panel).style.backgroundColor = "#E2F4FE";
	$_("panel").value = panel;
}

addonload("checkradio(\''.POSTval('panel', 'cpanel').'\');");

// ]]></script>
<form accept-charset="'.$globals['charset'].'" name="addremote" method="post" action="">

<table border="0" cellpadding="8" cellspacing="0" width="100%">
	<tr>
		<td width="35%" valign="top">
			<span class="sai_head">'.$l['choose_type'].'</span><br />
			<span class="sai_exp">'.$l['choose_type_exp'].'</span>
		</td>
		<td>
<input type="hidden" name="panel" id="panel" />
<table>
<tr>';

foreach($panels as $pk => $pv){
		
	echo '<td align="center" width="100" valign="top">
		<a href="javascript:checkradio(\''.$pk.'\');" style="padding:8px; text-decoration:none; display:block; font-size: 18px; font-weight: 400; color: #444444;" id="panel_'.$pk.'" />
		<img src="'.$theme['images'].$pk.'.gif" border="0" /><br />
		'.$pv.'
		</a>
	</td>';

}

echo '</tr>
</table>	
		</td>
	</tr>
	
	<tr>
		<td>
			<span class="sai_head">'.$l['domain_name'].'</font></span><br />
			<span class="sai_exp">'.$l['domain_name_exp'].'</span>
		</td>
		<td>
			<input type="text" name="domain_name" id="domain_name" size="30" value="'.POSTval('domain_name', '').'" />
		</td>
	</tr>
	
	<tr>
		<td>
			<span class="sai_head">'.$l['username'].'</font></span><br />
			<span class="sai_exp">'.$l['username_exp'].'</span>
		</td>
		<td>
			<input type="text" name="username" id="username" size="30" value="'.POSTval('username', '').'" />
		</td>
	</tr>
	
	<tr>
		<td>
			<span class="sai_head">'.$l['password'].'</font></span><br />
			<span class="sai_exp">'.$l['password_exp'].'</span>
		</td>
		<td>
			<input type="password" name="password" id="password" size="30" value="'.POSTval('password', '').'" />
		</td>
	</tr>
</table>

<br /><br />
<p align="center">
<input type="submit" name="addremotesite" id="addremotesite" value="'.$l['submit'].'" class="sai_graybluebut" />
</p>
</form>';

}

softfooter();

}

?>