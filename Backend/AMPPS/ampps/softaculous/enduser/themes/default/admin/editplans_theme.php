<?php

//////////////////////////////////////////////////////////////
//===========================================================
// email_theme.php
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

function editplans_theme(){

global $theme, $globals, $user, $l, $langs, $error, $iscripts, $plans, $done, $unserplan, $acl, $_users, $_cpplan, $allcatwise, $_resellers, $loaded_scripts, $softpanel;

softheader($l['<title>']);

echo '<form accept-charset="'.$globals['charset'].'" name="editplan" method="post" action="">
<div class="container-fluid">
<div class="sai_heading text-center">
	<div class="row">
		<span style="display: inline-block; position:relative; top:5px;">
			<i class="fa sai-projectman fa-1x"></i>
		</span>
		<span>'.$l['title'].'</span>
	</div>
</div><br />

<div class="sai_hr"></div><br />'.(empty($globals['lictype']) ? '<div class="sai_notebox">'.$l['feature_not_available'].'</div>' : '');

echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
ids = new Array("'.implode('", "', array_keys($_users)).'");
function checkalluser(checker){	
	for(x in ids){
		$_("users_"+ids[x]).checked = checker.checked;
		changebg(ids[x], "users_");
	}
};

ids1 = new Array('.implode(', ', array_keys($iscripts)).');
function checkallsoftware(checker){	
	for(x in ids1){
		$_("scripts_"+ids1[x]).checked = checker.checked;
		changebg(ids1[x],"scripts_");
	}	
};

ids2 = new Array("'.implode('", "', array_keys($_resellers)).'");
function checkallreseller(checker){	
	for(x in ids2){
		$_("resellers_"+ids2[x]).checked = checker.checked;
		changebg(ids2[x], "resellers_");
	}	
};

ids3 = new Array("'.implode('", "', array_keys($_cpplan)).'");
function checkallcpplan(checker){	
	for(x in ids3){
		$_("cpplan_"+ids3[x]).checked = checker.checked;
		changebg(ids3[x], "cpplan_");
	}	
};

function selectchkbox(id, type){
	if($_(type+id).checked){
		$_(type+id).checked = false;
	}else{
		$_(type+id).checked = true;
	}
	//change td background color
	changebg(id, type);
}

function changebg(id, type){
	try{
		if($_(type+id).checked){
			
			$("#td_"+id).addClass("script_selected");
			
		}else{
			
			$("#td_"+id).removeClass("script_selected");
		}
	}catch(e){}
};

ids4 = new Array('.implode(', ', array_keys($unserplan['scripts'])).');
function checkall(){	
	
};
function checkall(){
	
	// for users
	for(x in ids){	
		changebg(ids[x],"users_");
	}
	
	// for scripts
	for(x in ids1){	
		changebg(ids1[x],"scripts_");		
	}
	
	// for resellers_
	for(x in ids2){	
		changebg(ids2[x],"resellers_");
	}
	// for cpplan_
	for(x in ids3){	
		changebg(ids3[x],"cpplan_");
	}
	
	// for $unserplan
	for(x in ids4){		
		changebg(ids4[x],"scripts_");
	}
};

addonload("checkall();");
// ]]></script>';
	
$unserplan['show_name'] = $unserplan['name'];

// Just to show proper name in text box
if(defined('SOFTRESELLER')){
	$unserplan['show_name'] = str_replace('reseller_'.SOFTRESELLER.'_', '', $unserplan['name']);
}

/*  $reseller $user*/

error_handle($error);

if(!empty($done)){
	echo '<div class="alert alert-warning text-center"><img src="'.$theme['images'].'success.gif" /> &nbsp; '.$l['done'].'</div>';
}

echo '<div class="sai_form_head">'.$l['planhead'].'</div>
	<div class="sai_form">
		<div class="row">
			<div class="col-sm-5">
				<label for="planname" class="sai_head">'.$l['planname'].'</label><br />
				<span class="sai_exp2">'.$l['exp_plan'].'</span>
			</div>
			<div class="col-sm-5">
			'.(defined('SOFTRESELLER') ? 'reseller_'.SOFTRESELLER.'_' : '').'
			<input type="text" class="form-control" name="planname" size="40" value="'.POSTval('planname', $unserplan['show_name']).'">
			</div>
		</div><br/>';
		
		// Show the disable auto upgrade option only if we have userdata_cli() function in softpanel as we will need it to load it
		if(method_exists($softpanel, 'userdata_cli')){
			echo '<div class="row">
				<div class="col-sm-5">
					<label for="disable_autoupgrade" class="sai_head">'.$l['disable_autoupgrade'] .'</label><br />
					<span class="sai_exp2">'.$l['exp_disable_autoupgrade'] .'</span>
				</div>
				<div class="col-sm-5">
					<input type="checkbox" name="disable_autoupgrade" id="disable_autoupgrade" '.POSTchecked('disable_autoupgrade', $unserplan['disable_autoupgrade']).'/>
				</div>
			</div>';
		}
		
	echo '</div><br />';
	
	// Are there control panel plans
if(!empty($_cpplan)){
	echo '<div class="sai_form_head">
		'.$l['cpanelplan'].'
	</div>
	<div class="sai_form">
		<span>'.$l['cpplanselect'].'</span>
		<div class="row">
			<div class="col-sm-6">
				<span class="sai_head">'.$l['select_all'].'<input type="checkbox" onclick="checkallcpplan(this);" /></span>
			</div>
			<div class="col-sm-6">
				<span class="sai_head">'.$l['overwrite_settings'].'&nbsp;<input type="checkbox" name="cpplansetting"/></span>
			</div>
		</div><br />
		<div class="row">';
	foreach($_cpplan as $k => $v){
		echo '<div class="col-sm-3 script_choose" id="td_'.$k.'">
				<div class="row">
					<input type="checkbox" id="cpplan_'.$k.'" name="cpplan_'.$k.'" '.POSTchecked('cpplan_'.$k, (@$acl['cpplan'][$v['original_key']] == $unserplan['name'] ? $acl['cpplan'][$v['original_key']] : '')).' onclick="changebg(\''.$k.'\',\'cpplan_\');" />
					<a href="javascript:void(0)" style="text-decoration: none; " onclick="selectchkbox(\''.$k.'\',\'cpplan_\');"><font class="sai_bboxtxt">'.$v['original_key'].'</font></a>
				</div>
			</div>';
	}
	
	echo '</div><br />
	</div><br />';
}
	
if(!defined('SOFTRESELLER') && method_exists('softpanel', 'listresellers')){
	echo '<div class="sai_form_head">'.$l['resellerselect'].'</div>
	<div class="sai_form">
		<span>'.$l['exp_resellerselect'].'</span><br />
		<div class="row">
			<div class="col-sm-6">
				<span class="sai_head">'.$l['select_all'].'<input type="checkbox" onclick="checkallreseller(this);" /></span>
			</div>
			<div class="col-sm-6">
				<span class="sai_head">'.$l['overwrite_settings'].'&nbsp;<input type="checkbox" name="resellersetting"/></span>
			</div>
		</div><br />
		<div class="row">';
		
	foreach($_resellers as $k => $v){
	
		echo '<div class="col-sm-3 script_choose" id="td_'.$k.'">
				<div class="row">
					<input type="checkbox" id="resellers_'.$k.'" name="resellers_'.$k.'" '.POSTchecked('resellers_'.$k, (@$acl['users'][$v['original_key']] == $unserplan['name'] ? $acl['users'][$v['original_key']] : '')).' onclick="changebg(\''.$k.'\',\'resellers_\');"/>
					<img src="'.$theme['images'].'reseller15.png" style="margin-bottom:4px;">
					<a href="javascript:void(0)" style="text-decoration: none; " onclick="selectchkbox(\''.$k.'\',\'resellers_\');"><font class="sai_bboxtxt">'.$v['original_key'].'</font></a>
				</div>
			</div>';
	
	}
	
	echo '</div><br />
	</div><br />';
}
	
	echo '<div class="sai_form_head">'.$l['userselect'].'</div>
	<div class="sai_form">
		<span>'.$l['exp_userselect'].'</span><br />
		<div class="row">
			<div class="col-sm-6">
				<span class="sai_head">'.$l['select_all'].'<input type="checkbox" onclick="checkalluser(this);" /></span>
			</div>
			<div class="col-sm-6">
				<span class="sai_head">'.$l['overwrite_settings'].'&nbsp;<input type="checkbox" name="usersetting" /></span>
			</div>
		</div><br />
		<div class="row">';
		
	foreach($_users as $k=>$v){			
		echo '<div class="col-sm-3 script_choose" id="td_'.$k.'">
			<div class="row">
				<input type="checkbox" id="users_'.$k.'" name="users_'.$k.'" '.POSTchecked('users_'.$k, (@$acl['users'][$v['original_key']] == $unserplan['name'] ? $acl['users'][$v['original_key']] : '')).' onclick="changebg(\''.$k.'\',\'users_\');" />
				<img src="'.$theme['images'].'user15.png" style="margin-bottom:4px;">
				<a href="javascript:void(0)" style="text-decoration: none; " onclick="selectchkbox(\''.$k.'\',\'users_\');"><font class="sai_bboxtxt">'.$v['original_key'].'</font></a>
			</div>
		</div>';	
	}
	
	echo '</div>
	</div><br />
	
	<div class="sai_form_head">'.$l['limit_features'].'</div>
	<div class="sai_form">
		<div class="row">
			<div class="col-sm-4">
				<label for="max_ins_script" class="sai_head">'.$l['max_ins_script'].'</label><br />
				<span class="sai_exp2">'.$l['exp_max_ins_script'].' '.$l['default_note'].'</span><br /><br />
			</div>
			<div class="col-sm-2">
				<input type="text" class="form-control" name="max_ins_script" id="max_ins_script" size="40" value="'.POSTval('max_ins_script', $unserplan['max_ins_script']).'">
				<br />
			</div>
			<div class="col-sm-4">
				<label for="max_backup_script" class="sai_head">'.$l['max_backup_script'].'</label><br />
				<span class="sai_exp2">'.$l['exp_max_backup_script'].' '.$l['default_note'].'</span><br /><br />
			</div>	
			<div class="col-sm-2">
				<input type="text" class="form-control" name="max_backup_script" id="max_backup_script" size="40" value="'.POSTval('max_backup_script', $unserplan['max_backup_script']).'">
				<br />
			</div>
		</div>	
				
		<div class="row">
			<div class="col-sm-4">
				<label for="max_clone_script" class="sai_head">'.$l['max_clone_script'].'</label><br />
				<span class="sai_exp2">'.$l['exp_max_clone_script'].' '.$l['default_note'].'</span><br /><br />
			</div>	
			<div class="col-sm-2">
				<input type="text" class="form-control" name="max_clone_script" id="max_clone_script" size="40" value="'.POSTval('max_clone_script', $unserplan['max_clone_script']).'">
				<br />
			</div>
				
			<div class="col-sm-4">
			<label for="max_staging_script" class="sai_head">'.$l['max_staging_script'].'</label><br />
				<span class="sai_exp2">'.$l['exp_max_staging_script'].' '.$l['default_note'].'</span>
				<br /><br />	
			</div>
			<div class="col-sm-2">
				<input type="text" class="form-control" name="max_staging_script" id="max_staging_script" size="40" value="'.POSTval('max_staging_script', $unserplan['max_staging_script']).'">
			</div>
		</div>
	</div><br />
	
	<link href="'.$globals['mirror_images'].'sprites/20.css" rel="stylesheet" type="text/css" />	
	<div class="sai_form_head">'.$l['scriptselect'].'</div>
	<div class="sai_form">
		<span>'.$l['exp_scriptselect'].'</span><br />
		<span class="sai_head">'.$l['select_all'].'<input type="checkbox" onclick="checkallsoftware(this);" /></span>
		<table width="100%">
			<tr><td colspan="12">
				<table width="100%">';
				//r_print($allcatwise);
				//Showing All scripts Category wise
				foreach($allcatwise as $ak => $av){
					
					if(empty($allcatwise[$ak])) continue;
					
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
									<input type="checkbox" id="scripts_'.$k.'" name="scripts_'.$k.'" '.POSTchecked('scripts_'.$k, !empty($unserplan['scripts'][$k])).'  onclick="changebg(\''.$k.'\',\'scripts_\');"/>
								</td>
								<td width="10%">
									<div class="sp20_'.$v['softname'].'"></div>
								</td>
								<td>
									<a href="javascript:void(0)" style="text-decoration: none; " onclick="selectchkbox(\''.$k.'\',\'scripts_\');" ><font class="sai_bboxtxt">'.$v['name'].'</font></a>
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
	
echo'<p align="center">
	'.csrf_display().'
	<input type="submit" name="saveplan" value="'.$l['editplan'].'" class="flat-butt" />
	</p>
	'.(empty($globals['lictype']) ? '<div class="notebox">'.$l['feature_not_available'].'</div>' : '').'<br />
	</div>	
</div>
</form><br />';

softfooter();

}

?>