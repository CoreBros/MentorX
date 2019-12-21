<?php

//////////////////////////////////////////////////////////////
//===========================================================
// categories_theme.php
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

function no_autoupgrade_theme(){

global $theme, $globals, $user, $l, $langs, $skins, $error, $saved, $categories, $iscripts, $scripts, $top, $no_autoupgrade, $noautoupgrade_catwise, $noautoupgrade_scripts;

softheader($l['<title>']);

echo '<div class="container-fluid">
<div class="sai_heading" align="center">'.$l['show_top_scripts'].'</div><br />
<div class="sai_hr"></div><br />';

error_handle($error);

if(!empty($saved)){
	echo '<div class="alert alert-success text-center"><img src="'.$theme['images'].'success.gif" /> '.$l['settings_saved'].'</div>';
}

echo '<form accept-charset="'.$globals['charset'].'" name="reordercat" method="post" action="" class="form-horizontal">

<script language="javascript" type="text/javascript"><!-- // --><![CDATA[

ids1 = new Array('.implode(', ', array_keys($noautoupgrade_scripts)).');

function checkallsoftware(checker){	
	for(x in ids1){
		
		$_("scripts_"+ids1[x]).checked = checker.checked;
		
		//change td background color
		changebg(ids1[x],"scripts_");
	}	
};

function selectchkbox(id,type){
	if($_(type+id).checked){
		$_(type+id).checked = false;
	}else{
		$_(type+id).checked = true;
	}
	
	//change td background color
	changebg(id,type);
}

function changebg(id,type){
	try{
		if($_(type+id).checked){
			$("#td_"+id).addClass("script_selected");			
		}else{
			$("#td_"+id).removeClass("script_selected");
		}
	}catch(e){}
};

function checkall(){
	
	// for scripts
	for(x in ids1){	
		changebg(ids1[x],"scripts_");
	}
	
};

addonload("checkall();");

// ]]></script>';

/*  $reseller $user*/
echo '<link href="'.$globals['mirror_images'].'sprites/20.css" rel="stylesheet" type="text/css" />
	<div class="sai_form_head">'.$l['planhead'].'</div>
	<div class="sai_form">
		<div class="row">
			<div class="col-sm-5">
				<label for="softpath" class="sai_head">'.$l['disable_autoupgrade'].'</label><br />
				<span class="sai_exp2">'.$l['disable_autoupgrade_exp'].'</span>
			</div>
			<div class="col-sm-5 col-md-5">
				<input type="checkbox" name="disable_autoupgrade" size="30" '.POSTchecked('disable_autoupgrade', @$no_autoupgrade['disable_autoupgrade']).' />
			</div>
		</div><br />
		<div class="row">
			<div class="col-sm-5">
				<label for="uptime" class="sai_head">'.$l['uptime'].'</label><br />
				<span class="sai_exp2">'.$l['exp_uptime'].'</span>
			</div>
			<div class="col-sm-5 col-md-5">
				<input type="text" name="uptime" class="form-control" id="uptime" size="40" value="'.POSTval('uptime', $no_autoupgrade['uptime']).'">
			</div>
		</div><br />
		<font class="sai_head"><b>'.$l['script_note'].'</b> : <br />'.$l['script_note_exp'].'</font><br />
	</div><br />
	
	<div class="sai_form_head">'.$l['scriptselect'].'</div>
	<div class="sai_form">
		<div class="row">
			<div class="col-sm-12">
				<label class="sai_head">'.$l['exp_scriptselect'].'</label><br />
				<span class="sai_exp2">'.$l['select_all'].'<input type="checkbox" onclick="checkallsoftware(this);"/></span>
			</div>
		</div><br />
		<table width="100%">
		<tr><td colspan="12">
		<table width="100%">';
		//r_print($noautoupgrade_catwise);
		//Showing All scripts Category wise
		foreach($noautoupgrade_catwise as $ak => $av){
			echo '<tr><td colspan="4"><span class="text-center"><h4>'.strtoupper($ak).' Apps</h4></span></td></tr>';
				
				foreach($av as $kk => $vv){
					
					if(empty($av[$kk])) continue;

					echo '<tr><td colspan="12">
							<div class="sai_bboxtxt script_cat" style="font-size:14px;">'.$l['cat_'.$ak.'_'.$kk].'</div>
							<div class="sai_hr"></div>
						</td></tr>';
					$i = 0;
					foreach($vv as $k => $v){
					
						if(is_int($i/4)){
							echo '<tr>';
						}
			
						echo '<td width="20%" class="script_choose" id="td_'.$k.'">
							<table width="95%" style="margin-top:10px;">
							<tr>
							<td width="8%">
								<input type="checkbox" id="scripts_'.$k.'" name="scripts_'.$k.'" '.POSTchecked('scripts_'.$k, $no_autoupgrade['scripts'][$k]).'  onclick="changebg(\''.$k.'\',\'scripts_\');"/>
							</td>
							<td width="10%">
								<div class="sp20_'.$v['softname'].'"></div>
							</td>
							<td>
								<a href="javascript:void(0)" style="text-decoration: none; " onclick="selectchkbox(\''.$k.'\',\'scripts_\');"><font class="sai_bboxtxt">'.$v['name'].'</font></a>
							</td>
							</tr>
							</table>
						</td>';															
						$i++;		
													
						if(is_int($i/4)){	
							echo '</tr>';					
						}																								
					}
				}
		}
		echo '</table>
		</td></tr></table>';
		
		echo '<p align="center"><input type="submit" name="save" value="'.$l['save'].'" class="flat-butt"></p>
	</div><br />
</div>
	
</form>';
softfooter();

}

?>