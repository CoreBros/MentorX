<?php

//////////////////////////////////////////////////////////////
//===========================================================
// softwares_theme.php
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

function script_requirement_theme(){

global $theme, $globals, $user, $l, $langs, $skins, $error, $saved, $iscripts, $scripts, $catscripts, $allcatwise, $_iscripts, $cscripts, $req_fail;

softheader($l['<title>']);

if(!empty($req_fail)){
	
	echo '<div id="stooltip" style="display:none; position:absolute; top: 0px; left: 0px; border: 1px solid #CCC; padding: 8px; background: #FFF; z-index:1000;"></div>
	<form accept-charset="'.$globals['charset'].'" name="updatesoft" method="post" action="">
	<link href="'.$globals['mirror_images'].'sprites/20.css" rel="stylesheet" type="text/css" />
	<div class="container-fluid width80"><br /><br />
	<div class="sai_main_head text-center">'.$l['list_of_scripts'].'</div>
	<div class="sai_form"><br />';
	
	error_handle($error);
	
	echo '<center><font class="sai_head">'.$l['note'].'</font></center><br />
	<div>
	<table width="100%" border="0" class="table table-striped" align="center" style="width:70%;">
	<th>'.$l['script_name'].'</th>
	<th>'.$l['req'].'</th>';
	
	$i=1;
	
	foreach($req_fail as $k => $v){
		
		if($k > 10000){
			continue;
		}

		echo '<tr>
				<td>
				<table width="100%" border="0">
					<tr>
						<td><div class="sp20_'.$iscripts[$k]['softname'].'"></div></td>
						<td class="sai_bboxtxt" align="left" width="90%">&nbsp;'.$v['name'].'</td>
					</tr>
				</table>
				</td>
				
				<td class="sai_bboxtxt">';
				if(count($v['err_msg']) > 1){
					foreach($v['err_msg'] as $v_msg){
						echo '<strong>*</strong> '.$v_msg."<br />";
					}
				}else{
					echo current($v['err_msg']);
				}
				
				echo '</td>
			</tr>';
			$i++;
	}
	
	echo '</table><br />
		</div>
		</div>
	</div>
	</form><br />';
	
}else{
	echo '<h2 align="center">'.$l['no_results'].'</h2><br />';
}

softfooter();

}
?>