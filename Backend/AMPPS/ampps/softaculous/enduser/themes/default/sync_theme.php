<?php

//////////////////////////////////////////////////////////////
//===========================================================
// sync_theme.php
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


function sync_theme(){

global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $scripts;
global $software, $soft, $info, $settings, $softins, $dbtype, $dbs, $imported, $__settings, $setupcontinue, $installations, $notes, $list;

softheader($l['<title>']);

//First add the installation info
if(empty($imported)){
	
	echo '<form accept-charset="'.$globals['charset'].'" name="importsoftware" method="post" action="" onsubmit="return checkform();">
<script language="javascript" type="text/javascript"><!-- // --><![CDATA[

$(document).ready(function(){
	$(".check_all").on("ifChecked", function(event){
		$(".import_check").iCheck("check");
	});
	$(".check_all").on("ifUnchecked", function(event){
		$(".import_check").iCheck("uncheck");
	});	
});

function checkform(){
	try{
		if(!formcheck() || !checkdbname(\'softdb\', true)){
			return false;
		}
	}catch(e){
		//Do nothing
	}
	return true;
};

';

echo '// ]]></script>';

echo '
<div class="bg"><br />
<div class="row sai_main_head" style="width:100%;" align="center">
	<div class="col-sm-5 col-xs-5" style="padding:0px 10px 0 0; text-align:right;">
		<i class="fa sai-sync fa-2x" style="color:#00A0D2;"></i>
	</div>
	<div class="col-sm-7 col-xs-7" style="padding-top:5px; padding-left:0; text-align:left;">'.$l['import_soft'].'</div>
</div><hr>';
error_handle($error, '100%');
echo'
<table width="100%" cellpadding="5" cellspacing="1" class="table table-hover">
<tr>
<thead class="sai_head2" style="background:#EFEFEF;">
<th width="45%" align="left">'.$l['script_name'].'</th>
<th width="45%" align="left">'.$l['script_url'].'</th>
<th><input type="checkbox" onclick="check(document.getElementsByName(\'approved[]\'), this)" class="check_all"></th>
</thead>
</tr>';

foreach($list as $k => $v){

	foreach($v as $vk => $vv){
			echo '<tr>
					<tbody class="endurl">
						<td>'.$iscripts[$k]['name'].'</td>
						<td><a href='.$vv['url'].'>'.$vv['url'].'</a></td>
						<td><input type="checkbox" name="approved[]" class="import_check" value="'.$vv['base'].'"></td>
					</tbody>
				</tr>';
	}
}

echo '</table><br />';

echo '<p align="center">
'.csrf_display().'
<input type="submit" name="softsubmit" value="'.$l['softsubmit'].'" class="flat-butt" />
</p>
</form></div>
<br /><br /><br />';

}elseif(!empty($imported)){

	echo '<div class="bg2">
	<h4>'.$l['congrats'].'</h4><br />
'.$l['succesful'].' : ';

foreach($list as $k => $v){

	foreach($v as $vk => $vv){
			
		if($vv['synced'] == true){
			echo '<br /><a href="'.$vv['url'].'" target="_blank">'.$vv['url'].'</a>';
		}
			
	}
}

echo '<br /><br />
'.$l['enjoy'].'<br /><br />
'.(!empty($notes) ? $l['import_notes'].' : <br />
<div class="sai_notes">'.softparse($notes, $soft).'</div><br /><br />' : '').'
'.$l['please_note'].'<br /><br />
'.$l['regards'].',<br />
'.$l['softinstaller'].'<br /><br />
<center><b><a href="'.$globals['ind'].'">'.$l['return'].'</a></b></center><br />
</div><!--end of bg class-->
';

}

softfooter();

}

?>