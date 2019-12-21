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

function choosesoftwares_theme(){

global $theme, $globals, $user, $l, $langs, $skins, $error, $saved, $iscripts, $scripts, $catscripts, $allcatwise, $_iscripts, $cscripts;

softheader($l['<title>']);

echo '<div class="container-fluid"><br /><br />
		<div class="sai_main_head text-center">'.$l['gen_scripts'].'</div>
		<div class="sai_form">';

error_handle($error);

if(!empty($saved)){
	//r_print($_iscripts);
	echo '<br /><div class="container-fluid"><div class="alert alert-success text-center"><a href="#close" class="close" data-dismiss="alert">&times;</a><img src="'.$theme['images'].'success.gif" /> '.$l['settings_saved'].'</div></div>
	<table width="100%" style="margin:0px auto;">
	<tr>
	<td>
		<div id="responses">
			<div class="sai_heading"><img src="'.$theme['images'].'admin_progress.gif" id="admin_progress">&nbsp;&nbsp;&nbsp;'.$l['updating_files'].'</div>
			<div class="sai_hr"></div><br />
		</div>
	</td>
	</tr>
	</table>';

	//The necessary JavaScripts
	echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
ids = ['.implode(', ', array_keys($_iscripts)).'];
//alert(ids);
updatedids = new Object();

for(x in ids){
	updatedids["soft_"+ids[x]] = false;
}

function updatesoftware(id, resp){
	
	//Update the Status with Response
	if(id > 0){
		$_("responses").innerHTML = $_("responses").innerHTML + resp;
		updatedids["soft_"+id] = true;
	}
		
	var csrf_token = $("#csrf_token").val(); 
	
	for(x in ids){
		if(updatedids["soft_"+ids[x]] == false){
			
			$.ajax({
				type: "POST",
				data: "csrf_token="+csrf_token,
				url: "'.$globals['index'].'act=softwares&sact=updatesoft&softid="+ids[x],
				// Checking for error
				success: function(data){
					updatesoftware(ids[x], data);	
				}
			});
			
			return true;
		}
	}
	
	$_("responses").innerHTML = $_("responses").innerHTML + "<div class=\"sai_heading\">'.$l['updating_completed'].'<a href=\"'.$globals['ind'].'act=softwares'.'\">'.$l['go_to_soft'].'</a></div>";
	$("#admin_progress").hide();
	
};

addonload("updatesoftware(0, \'\');");

// ]]></script>';

	softfooter();

	return true;
}

//The necessary JavaScripts
echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
ids = new Array('.implode(', ', array_keys($scripts)).');
function checkallsoftware(checker){	
	try{
		for(x in ids){
			$_("soft_"+ids[x]).checked = checker.checked;
		}
	}catch(e){
		// Dont do anything
	}
		
};

function checkallpre(checker){	
	try{
		for(x in ids){
			$_("soft_pre_"+ids[x]).checked = checker.checked;
		}
	}catch(e){
		// Dont do anything
	}
		
};

function checkalloutdated(checker){	
	try{
		for(x in ids){
			// select only outdated scripts
			if($("#soft_outdated_"+ids[x]).length > 0){
				$_("soft_"+ids[x]).checked = checker.checked;
			}
		}
	}catch(e){
		// Dont do anything
	}
		
};

function checkcatsoftware(checker, arr){
		
	$_(checker.id).checked = checker.checked;
	try{
		for(x in arr){
			$_("soft_"+arr[x]).checked = checker.checked;
		}	
	}catch(e){	
		//$_("soft_"+arr.length).checked = checker.checked;	
		// Dont do anything
	}
};

function checkcatpre(checker, arr){
	$_(checker.id).checked = checker.checked;
	//alert(arr);return;	
	try{
		for(x in arr){
			$_("soft_pre_"+arr[x]).checked = checker.checked;
		}	
	}catch(e){
		// Dont do anything
	}
};

function checkcatoutdated(checker, arr){
	$_(checker.id).checked = checker.checked;
	//alert(arr);return;	
	try{
		for(x in arr){
			// select only outdated scripts
			if($("#soft_outdated_"+arr[x]).length > 0){
				$_("soft_"+arr[x]).checked = checker.checked;
			}
		}	
	}catch(e){
		// Dont do anything
	}
};

function showtip(txt, el){	
	
	$_("stooltip").innerHTML = txt;
	
	var pos = findelpos(el);
	$_("stooltip").style.display = "";
	var tipheight = parseInt($_("stooltip").offsetHeight);
	var tipwidth = parseInt($_("stooltip").offsetWidth);
	//alert(tipheight+" "+tipwidth);
	
	var abody = findelpos($_("abody"));
	var bodyWidth = abody[0] + $_("abody").offsetWidth
	
	if((pos[0] + tipwidth) > bodyWidth){
		pos[0] = pos[0] - (pos[0] + tipwidth - bodyWidth) + 15;
	}
	
	$_("stooltip").style.left = pos[0]+"px";
	$_("stooltip").style.top = (pos[1]-5-tipheight)+"px";
	
	el.onmouseout = function(){
		hidetip();
	};

};

function hidetip(){
	$_("stooltip").style.display = "none";
}

// ]]></script>';

if(empty($globals['lictype'])){
	echo '<div style="width:60%; margin:0px auto;" class="sai_notebox"><font class="sai_bboxtxt">'.$l['soft_free_note'].'<br /></font></div><br />';
}

echo '<div id="stooltip" style="display:none; position:absolute; top: 0px; left: 0px; border: 1px solid #CCC; padding: 8px; background: #FFF; z-index:1000;"></div>
<form accept-charset="'.$globals['charset'].'" name="updatesoft" method="post" action="">
<br />
<link href="'.$globals['mirror_images'].'sprites/20.css" rel="stylesheet" type="text/css" /><br />
<table width="90%" cellpadding="1" cellspacing="0" border="0" style="margin:0px auto;">
	<tr>
	<td colspan="6" align="center">
	<table width="100%" height="60" class="sai_divroundshad" style="padding:10px;" border="0">
	<tr>
<td align="center" width="45%">
	<font size="4" color="#182e7a">'.(count($iscripts) - count($cscripts)).'/'.count($scripts).'</font><font class="sai_bboxtxt"> '.$l['scripts_are_ins'].'</font> 
</td>';

if(!empty($globals['lictype'])){
	echo '<td width="40%"><input type="submit" name="updatesoft" value="'.$l['updatesoft'].'" class="flat-butt"/></td>';
}

echo '<td align="center" width="5%"><input type="checkbox" onclick="checkallsoftware(this);" /></td>
'.(empty($globals['pre_download_all']) ? '<td align="center" width="3%"><input type="checkbox" onclick="checkallpre(this);" /></td>' : '').'
<td align="center" width="3%"><input type="checkbox" onclick="checkalloutdated(this);" /></td>
</tr>
</table><br />
</td>
</tr>
<tr>
<td colspan="6">
<table width="100%" style="background:#D3D3D3;" border="0">
<td class="sai_head" width="20%"><b style="margin-left:10px;">'.$l['soft_name'].'</b></td>
<td class="sai_head" width="45%"><b>'.$l['soft_desc'].'</b></td>
<td class="sai_head" width="12%"><b>'.$l['soft_ins'].' '.$l['soft_ver'].'</b></td>
<td class="sai_head" width="8%"><b>'.$l['soft_ver'].'</b></td>
<td class="sai_head" width="7%"><b style="margin-right:10px;">'.$l['soft_ins'].'</b>'.(empty($globals['pre_download_all']) ? '<br /><b style="font-size:8px; margin-right:10px;">'.$l['pre_down'].'</b></td>' : '').'
<td class="sai_head" width="2%"><b style="font-size:10px;">'.$l['soft_outdated'].'</b></td>
</tr>
</table>
</td>
</tr>
';
	
foreach($allcatwise as $cattype => $catscripts){
	
	if(empty($catscripts)){
		continue;
	}
	
	echo '<tr>
		<td colspan="6" align="center">
		<h4>'.$l['type_'.$cattype].'</h4>
		</td>
		</tr>';

	foreach($catscripts as $cat => $cv){
		
		if(empty($cv)) continue;
	
		echo '<tr>
		<td>
		<table width="100%" border="0" class="table table-hover" cellspacing="1" cellpadding="5">
			<tr>
				<thead style="background:#d3d3d3; color:#676A6C;">
					<td valign="top" width="" colspan="4">
						<font class="sai_bboxtxt"><b>'.$l['cat_'.$cattype.'_'.$cat].'</b></font>
					</td>
					<td align="center" width="'.(empty($globals['pre_download_all']) ? '5%' : '77').'"> 
						<input type="checkbox" id="soft_'.$cat.'" name="soft_'.$cat.'" onclick="checkcatsoftware(this, ['.implode(',', array_keys($cv)).']);" />
					</td>';
					if(empty($globals['pre_download_all'])){
						echo '<td width="0%" align="center"> 
							<input type="checkbox" id="soft_pre_'.$cat.'" name="soft_pre_'.$cat.'" onclick="checkcatpre(this, ['.implode(',', array_keys($cv)).']);" />
						</td>';
					}
				echo '<td align="center" width="3%"> 
						<input type="checkbox" id="soft_outdated_'.$cat.'" name="soft_outdated_'.$cat.'" onclick="checkcatoutdated(this, ['.implode(',', array_keys($cv)).']);" />
					</td>
				</thead>
			</tr>';
		
		$i=0;
		
		foreach($cv as $k => $v){
		
			if($k > 10000){
				continue;
			}
		
			echo '<tr>
				<td width="17%" valign="top">
					<table width="100%" border="0">
						<tr>
							<td><div class="sp20_'.$v['softname'].'"></div></td>
							<td class="sai_bboxtxt" align="left" width="90%">&nbsp;'.$v['name'].'</td>
						</tr>
					</table>
				</td>
				<td width="54%" class="sai_bboxtxt">'.$v['desc'].'</td>
				<td '.(trim($v['cur_ver']) == trim($v['ver']) ? '' : 'style="background:#FDCFC4"').' width="10%" class="sai_bboxtxt">'.$v['cur_ver'].'</td>
				<td width="10%" class="sai_bboxtxt">'.$v['ver'].'</td>
				<td width="5%" class="sai_bboxtxt" align="center"><input type="checkbox" id="soft_'.$k.'" name="soft_'.$k.'" '.POSTchecked('soft_'.$k, !empty($iscripts[$k])).' onmouseover="showtip(\''.$l['soft_enable'].' '.$scripts[$k]['name'].'\', this)" /></td>
				'.(empty($globals['pre_download_all']) ? '<td width="5%" class="sai_bboxtxt" align="center"><input type="checkbox" id="soft_pre_'.$k.'" name="soft_pre_'.$k.'" '.POSTchecked('soft_pre_'.$k, !empty($iscripts[$k]['pre_down'])).' onmouseover="showtip(\''.$l['pre_down'].' '.$scripts[$k]['name'].'\', this)" /></td>' : '').'
				<td width="3%" class="sai_bboxtxt"><label for="soft_'.$k.'">'.(is_outdated_script($k) ? '<img src="'.$theme['images'].'admin/outdated.png" onmouseover="showtip(\''.$l['outdated_notification'].'\', this)" id="soft_outdated_'.$k.'" />' : '').'</label></td>
			</tr>';
			$i++;		
		}
		echo '</table><br />';	
	}	
}

echo '</td></tr></table>';

if(empty($globals['lictype'])){
	echo '<div style="width:700px; margin:0px auto;" class="sai_notebox"><font class="sai_bboxtxt">'.$l['soft_free_note'].'<br /></div>';
}else{
	echo '<p align="center"><input type="submit" name="updatesoft" value="'.$l['updatesoft'].'" class="flat-butt" /></p>';
}

echo '</div>
</div>
'.csrf_display().'
</form><br />';

softfooter();

}

function updatesoft_theme(){

global $user, $globals, $scripts, $iscripts, $l, $theme, $error, $saved, $report, $softid;
	echo '<link href="'.$globals['mirror_images'].'sprites/32.css" rel="stylesheet" type="text/css" />
	<div class="sai_form" style="text-align:left;background-color:#f2f2f2;">
		<div class="row">
			<div style="padding-left:25px">
				<table>
					<tr>
						<td><div class="sp32_'.$scripts[$softid]['softname'].'"></div></td>
						<td><div><h4>&nbsp;&nbsp;'.$report['name'].'</h4></div></td>
					</tr>
				</table>
			</div>
		</div><br />
		<div class="row">
			<div class="col-sm-6 col-md-6 col-xs-6" style="padding-left:25px"><span class="sai_exp2">'.implode('<br />', $report['log']).'</span></div>
			<div class="col-sm-5 col-md-5 col-xs-6" style="padding-right:30px">
				<img align="right" src="'.$theme['images'].'admin/'.(empty($report['status']) ? 'softerror.gif' : 'softok.gif').'" />
			</div>
			<div class="col-sm-offset1"></div>
		</div>
	</div>
	<br />';

}

?>