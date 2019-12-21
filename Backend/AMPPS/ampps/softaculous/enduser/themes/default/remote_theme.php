<?php

//////////////////////////////////////////////////////////////
//===========================================================
// remote_theme.php
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

function remote_theme(){

global $user, $globals, $l, $theme, $softpanel, $iscripts, $deleted, $error;

softheader($l['<title>']);

error_handle($error, '100%');

echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
function doConfirm(){
	var answer = confirm ("'.$l['del_conf'].'")
	if (answer)
	{
		return true;
	}	
	return false;		
}
</script>

<center class="sai_tit"><img src="'.$theme['images'].'domains.gif" />&nbsp; ' . $l['header'] . '</center>';

// Was something deleted
if(!empty($deleted)){
	
	echo '<div class="sai_notice"><img src="'.$theme['images'].'notice.gif" /> '.$l['deleted'].'</div><br /><br />';
	
}

// Are there no remote websites ?
if(empty($user['remote'])){
	
	echo '<div class="sai_notice"><img src="'.$theme['images'].'notice.gif" /> '.$l['no_remote'].'</div><br /><br />';
	
}else{

echo '<table border="0" cellpadding="8" cellspacing="1" width="95%" class="sai_summaryBlock">
<tr>
<td align="center" class="sai_summaryTitle" width="80">'.$l['site_type'].'</td>
<td align="center" class="sai_summaryTitle">'.$l['site_domain'].'</td>
<td align="center" class="sai_summaryTitle" width="140">'.$l['site_username'].'</td>
<td align="center" class="sai_summaryTitle" width="100">'.$l['site_options'].'</td>
</tr>';

foreach($user['remote'] as $k => $v){
	echo '<tr>
	<td align="center"><img src="'.$theme['images'].$v['panel'].'.gif" width="32" /></td>
	<td><a target="_blank" href="http://'.$v['domain_name'].'"> '.$v['domain_name'].'</a></td>
	<td align="center">'.$v['username'].'</td>
	<td align="center">
		<a href="'.$globals['ind'].'act=editremote&remid='.$k.'" title="'.$l['edit'].'"><img src="'.$theme['images'].'edit.gif" /></a>
		<a href="'.$globals['ind'].'act=remote&delete='.$k.'" title="'.$l['remove'].'" onclick="return doConfirm();"><img src="'.$theme['images'].'remove.gif" /></a>
	</td>';
}

echo '</table>
<br />
<br />
<br />
<center><a href="'.$globals['ind'].'act=addremote" class="sai_abut">'.$l['add_new'].'</a></center>';

}

softfooter();

}

?>