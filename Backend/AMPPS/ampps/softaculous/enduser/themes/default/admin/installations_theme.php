<?php

//////////////////////////////////////////////////////////////
//===========================================================
// installations_theme.php
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

function installations_theme(){

global $theme, $globals, $user, $l, $langs, $skins, $error, $list, $scripts, $_scriptwise, $emailed, $iscripts, $autoupgrade, $ins_to_be_upgrade, $records_updated, $real_version, $_domainwise;

if(optGET('api')){
	_api($list, optGET('api'));
	return;
}

softheader($l['<title>']);

//The necessary JavaScripts
echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
var ids = [];
function show_image(){
	
	goto_top();
	$("#prog_img").fadeIn(500);
	$("#list_ins").hide();
	$("#autoupgrade_process").css("display","");
	$("#prog_img").show();

	$("#list_ins input[type=checkbox]:checked").each(function() {
		ids.push($(this).val());
	});
	
	//alert(aArray);return;
		
	updatedids = new Object();
	for(x in ids){
		if(ids[x] != "on"){
			//alert(ids[x]);
			updatedids[ids[x]] = false;
		}
	}
	//alert(ids);
	
	$("#upgrade_ins_div1").css("display","none");
	$("#upgrade_ins_div2").css("display","none");
	
	autoupgradeins(0, \'\');
	return false;
};

function autoupgradeins(id, resp){
	//alert(resp);
	//alert(id);
	
	
	//Update the Status with Response
	if(id != 0){
		$("<div>"+resp+"</div>").appendTo("#autoupgrade_process");
		updatedids[id] = true;
	}
	
	var csrf_token = $("#csrf_token").val(); 
	
	for(x in ids){
		//alert(ids[x]);
		if(updatedids[ids[x]] == false){
			var tmp_id = ids[x].split("-");
			
			$.ajax({
				type: "POST",
				data: "csrf_token="+csrf_token,
				url: "'.$globals['index'].'act=installations&show=upgrade&sact=autoupgradeins&user="+tmp_id[0]+"&insid="+tmp_id[1],
				// Checking for error
				success: function(data){
					autoupgradeins(ids[x], data);
				}
			});
			
			return true;
		}
	}

	$("#prog_img").fadeOut(50);
	$("#succ_upgrad_msg").fadeIn(100);
	$("#goto_list_link").fadeIn(100);
	
};

// ]]></script>';

echo '<script language="JavaScript" src="'.$theme['url'].'/js/osuggest.js" type="text/javascript"></script>
<form accept-charset="'.$globals['charset'].'" name="serchinstallations" method="post" action="" class="form-horizontal">
<div class="container-fluid"><br /><br />
<div class="sai_main_head text-center">'.$l['searchinstallations'].'</div>
<div class="sai_form">';
error_handle($error);

echo '<div class="row"><br />
		<div class="col-sm-3">
			<label for="scripts" class="sai_head">'.$l['search_scripts'].'</label><br />
			<span class="sai_exp2">'.$l['search_scripts_exp'].'</span>
		</div>
		<div class="col-sm-3">
			<input type="text" name="scripts" class="form-control" id="scripts" size="30" value="'.POSTval('scripts').'" onkeyup="handlesuggest(event, \'scripts\')" onkeydown="handlekeys(event)" autocomplete=off  onblur="setTimeout(hidesuggest, 1000);" suggesturl="'.$globals['ind'].'act=suggest&sact=scripts" />
		</div>
		<div class="col-sm-3">
			<label for="group_by_scripts" class="sai_head">'.$l['group_by_scripts'].'</label><br />
			<span class="sai_exp2">'.$l['group_by_scripts_exp'].'</span>
		</div>
		<div class="col-sm-3">
			<input type="checkbox" name="group_by_scripts" id="group_by_scripts" '.POSTchecked('group_by_scripts').' />
		</div>
	</div><br />
	
	<div class="row">';
	
	if(!webuzo()){
		echo '<div class="col-sm-3">
				<label for="users" class="sai_head">'.$l['search_users'].'</label><br />
				<span class="sai_exp2">'.$l['search_users_exp'].'</span>
			</div>
			<div class="col-sm-3">
				<input type="text" name="users" class="form-control" id="users" size="30" value="'.POSTval('users').'" onkeyup="handlesuggest(event, \'users\')" onkeydown="handlekeys(event)" autocomplete=off  onblur="setTimeout(hidesuggest, 1000);" suggesturl="'.$globals['ind'].'act=suggest&sact=users" />
			</div>';
	}
	
	echo '<div class="col-sm-3">
			<label class="sai_head">'.$l['only_outdated'].'</label><br />
			<span class="sai_exp2">'.$l['only_outdated_exp'].'</span>
		</div>
		<div class="col-sm-3">
			<input type="checkbox" name="only_outdated" '.POSTchecked('only_outdated').' />
		</div>
	</div><br />
		
	<div class="row">
		<div class="col-sm-3">
			<label for="domains" class="sai_head">'.$l['search_domains'].'</label><br />
			<span class="sai_exp2">'.$l['search_domains_exp'].'</span>
		</div>
		<div class="col-sm-3">
			<input type="text" class="form-control" name="domains" id="domains" size="30" value="'.POSTval('domains').'" />
		</div>
		<div class="col-sm-3">
			<label class="sai_head">'.$l['only_realversion'].'</label><br />
			<span class="sai_exp2">'.$l['only_realversion_exp'].'</span>
		</div>
		<div class="col-sm-3">
			<input type="checkbox" name="only_realversion" '.POSTchecked('only_realversion').' />
		</div>
	</div><br /><br />		
	<p align="center">
	'.csrf_display().'
	<input type="submit" name="listinstallations" value="'.$l['search_ins'].'" class="flat-butt" />
	</p>
</div>
</div>
</form>';

if(isset($_REQUEST['listinstallations'])){
	echo '<div class="container-fluid">
	<div class="sai_form">';
	$upgrade_ins_button = '<table cellpadding="0" cellspacing="0" width="100%" border="0">
			<tr>
				<td width="80%">
					<p align="right" class="bboxtxt">'.$l['with_selected'].'&nbsp;&nbsp;
				</td> 
				<td>:&nbsp;&nbsp;</td>'.csrf_display().'
				<td valign="middle"><input type="submit" name="upgrade_ins" id="upgrade_ins" value="'.$l['sub_upgrade_ins'].'" class="sai_graybluebut" onclick="return show_image();" /></td>
			</tr>
		</table>';
	
	// In case there is any error than just dont show the button	
	if(!empty($error)){
		$upgrade_ins_button = '';
	}
	
	$email_button = '<p align="right" class="sai_head"><table cellpadding="0" cellspacing="0" width="100%" border="0">
		<tr>
			<td width="80%" align="right" valign="middle" class="sai_head"><p style="margin-top:25px;">'.$l['with_selected'].'&nbsp;&nbsp;:&nbsp;&nbsp;</p></td>';
	if(!empty($real_version)){
		$email_button .= '<td valign="middle"><br /><input type="submit" name="update_records" id="update_records" value="'.$l['update_records'].'" class="flat-butt"/></td></tr></table></p>';
	}else{
		$email_button .=  '<td valign="middle"><br /><input type="submit" name="send_email" id="send_email" value="'.$l['sub_email_users'].'" class="flat-butt"/></td></tr></table></p>';
	}
		
	if(!empty($records_updated)){
		echo '<div class="container-fluid">
				<div class="alert alert-success text-center"><img src="'.$theme['images'].'success.gif" /> '.$l['succ_update_record'].'</div>
			</div>';
	}
	
	if(empty($list)){
		echo '<h2 align="center">'.$l['no_results'].'</h2>';
	}else{
		
		if(!empty($emailed)){
			echo '<div class="container-fluid">
					<div class="alert alert-success"><img src="'.$theme['images'].'success.gif" /> '.$l['emailed_users'].'</div>
				</div>';
		}
		
		echo '<div class="container-fluid">
				<div class="alert alert-warning" id="succ_upgrad_msg" style="display:none">'.$l['upgraded_ins'].'</div>
			</div>
			
			<form accept-charset="'.$globals['charset'].'" name="email_users" method="post" action="" id="email_users">
			<link href="'.$globals['mirror_images'].'sprites/20.css" rel="stylesheet" type="text/css" />
			<table cellpadding="0" cellspacing="0" width="100%" border="0">
			<tr>
				<td width="50%">
				<div style="display:none;float:left" id="prog_img"><img src="'.$theme['images'].'admin_progress.gif" />&nbsp;&nbsp;'.$l['upgrading_ins'].'</div>
				</td>
			</tr>
			<tr>
			<td align="right">';
				
			if(!isset($_REQUEST['upgrade_installation']) || !empty($real_version)){
				echo $email_button;
			}else{
				// We are ending the table because we are not ending this in the variable.
				echo '<div id="upgrade_ins_div1">'.$upgrade_ins_button.'</div>';
			}
			
		echo '</td></tr>
			</table><br /><br />';
		
		if(!empty($real_version)){
			echo '<div class="notebox" style="width:95%;" id="beta_notice1">
				<table width="100%" cellpadding="5" cellspacing="1" border="0">
					<tr>
						<td width="25px">
							<div class="lirealver" style="height:16px;width:16px"></div>
						</td>
						<td><font class="bboxtxt">'.$l['real_ver_notice'].'</font></td>
					</tr>
					<tr>
						<td width="25px">
							<div class="lioutdated" style="height:16px;width:16px"></div>
						</td>
						<td><font class="bboxtxt">'.$l['latest_ver_notice'].'</font></td>
					</tr>
				</table>
				</div><br />';
		}
		
		echo '<div id="list_ins" style="display:block">
		<table width="100%" cellpadding="5" cellspacing="1" border="0" class="table table-bordered">
		<tr>
		<thead style="background:#d3d3d3;">
			<th width="'.(!empty($_domainwise) ? '200' : '100').'">'.(empty($_scriptwise) ? (empty($_domainwise) ? $l['li_user'] : $l['li_domains']) : $l['li_scripts']).'</th>
			<th>'.(empty($_scriptwise) ? $l['li_scripts'] : $l['li_user']).'</th>'.
			(!empty($_domainwise) ? '<th width="5%">'.$l['li_user'].'</th>' : '').
			'
			<th>'.$l['li_url'].'</th>
			<th width="10%">'.$l['li_insver'].'</th>'.
			(!empty($real_version) ? '<th width="10%">'.$l['li_realver'].'</th>' : '').
			'<th width="10%">'.$l['li_ver'].'</th>
			<th><img src="'.$theme['images'].'auto_upgrade.png"  title="'.$l['auto_upgrade_enabled'].'" style="cursor:pointer;"/></th>
			<th><input type="checkbox" onclick="check(document.getElementsByName(\'list[]\'), this);" '.(!empty($error) ? 'disabled=true' : '').'/></th>
		</thead>
		</tr>';
			
		$class = '';

		foreach($list as $lk => $lv){
			
			$i = 1;
			
			$class = ($class == 'lione' ? 'litwo' : 'lione');
			
			foreach($lv as $llk => $llv){
			
				foreach($llv as $ik => $iv){

					$_class = $class;
					
					echo '<tr>
					<td class="'.($i == 1 ? $class : '').'">';
					
					$isCustom = (is_customscript($iv['sid']) ? 1 : 0);
					
					if($i == 1){
						echo  '<font class="bboxtxt">'.(empty($_scriptwise) ? $lk : (!empty($scripts[$iv['sid']]) && !empty($iscripts[$iv['sid']]) ? $scripts[$iv['sid']]['name'] : (!empty($isCustom) ? $iscripts[$iv['sid']]['name'] : $l['no_info']))).'</font>';
					}else{
						echo '&nbsp;';
					}
					
					if(!empty($isCustom)){
						if($iscripts[$iv['sid']]['ver'] != $iv['ver']){
							$_class = 'lioutdated';
						}
					}else{
						if($iscripts[$iv['sid']]['ver'] != $iv['ver'] && file_exists($globals['softscripts'].'/'.$iscripts[$iv['sid']]['softname'].'/upgrade.xml')){
							$_class = 'lioutdated';
						}
					}
					
					$real_class = 'lirealver';
					
					$__user = (empty($_scriptwise) ? $lk : $llk);
					
					if(!empty($_domainwise)){
						$__user = $iv['user'];
					}
					
					echo '</td>
					<td class="'.$class.'">'.(empty($_scriptwise) ? (!empty($scripts[$iv['sid']]) && !empty($iscripts[$iv['sid']]) ? $scripts[$iv['sid']]['name'] : (!empty($isCustom) ? $iscripts[$iv['sid']]['name'] : $l['no_info'])) : $llk).'</td>'.
					(!empty($_domainwise) ? '<td class="'.$class.'">'.$__user.'</td>' : '').
					'
					<td class="'.$class.'"><a href="'.$iv['softurl'].'" target="_blank">'.$iv['softurl'].'</a></td>
					<td class="'.$class.'">'.$iv['ver'].'</td>'.
					(!empty($iv['real_ver']) && !empty($real_version) ? '<td class="'.$real_class.'">'.$iv['real_ver'].'</td>' : '').
					'<td class="'.$_class.'">'.(empty($isCustom) ? $scripts[$iv['sid']]['ver'] : $iscripts[$iv['sid']]['ver']).'</td>
					<td class="'.$class.'" align="center">'.(!empty($iv['eu_auto_upgrade']) ? '<img src="'.$theme['images'].'success.gif" hight="20px" width="20px" title="'.$l['auto_upgrade_enabled'].' '.($iv['eu_auto_upgrade'] == 1 ? $l['auto_upgrade_major'] : $l['auto_upgrade_minor']).'" style="cursor:pointer"/>' : '').'
					<td class="'.$class.'">'.((empty($isCustom) ? ($scripts[$iv['sid']]['ver'] != $iv['ver'] && file_exists($globals['softscripts'].'/'.$scripts[$iv['sid']]['softname'].'/upgrade.xml')) : ($iscripts[$iv['sid']]['ver'] != $iv['ver'] && file_exists($globals['softscripts'].'/'.$iscripts[$iv['sid']]['softname'].'/upgrade.xml'))) ? '<input type="checkbox" name="list[]" value="'.$__user.'-'.$ik.'" '.(!empty($error) ? 'disabled=true' : '').'/>' : '').'</td>
					</tr>';
						
					$i++;
					
				}				
			}			
		}
		
		echo '</table>
		</div>
		<div id="autoupgrade_process" style="display:none"></div>
		<div id="goto_list_link" style="display:none" class="sai_heading"><center>'.$l['upgrading_completed'].'&nbsp;&nbsp;<a href="'.$globals['ind'].'act=installations&show=upgrade'.'">'.$l['go_to_autoupgrade'].'</a><center></div>
		<br /><br />
		<table cellpadding="0" cellspacing="0" width="100%" border="0">
		<tr>
			<td width="50%">&nbsp;</td> 
		</tr>
		<tr>
			<td align="right">';
			
			if(!isset($_REQUEST['upgrade_installation']) || !empty($real_version)){
				echo $email_button;
			}else{
				echo '<div id="upgrade_ins_div2">'.$upgrade_ins_button.'</div>';
			}
			
		echo '</td>
		</tr>
		</table>';
		
		if(!empty($real_version)){
			echo '<div class="notebox" style="width:95%;" id="beta_notice1">
					<table width="100%" cellpadding="5" cellspacing="1" border="0">
						<tr>
							<td width="25px">
								<div class="lirealver" style="height:16px;width:16px"></div>
							</td>
							<td><font class="bboxtxt">'.$l['real_ver_notice'].'</font></td>
						</tr>
						<tr>
							<td width="25px">
								<div class="lioutdated" style="height:16px;width:16px"></div>
							</td>
							<td><font class="bboxtxt">'.$l['latest_ver_notice'].'</font></td>
						</tr>
					</table>
				</div>';
		}
		
		echo csrf_display().'
		</form>';
		
	}

}

echo '</div>

</div><br />';

softfooter();

}

function autoupgrade_ins_theme(){

global $user, $globals, $scripts, $iscripts, $l, $theme, $error, $saved, $report, $softid;

	echo '<div class="sai_smbox" style="text-align:left;background-color:#f2f2f2;padding:10px;">
		<table width="97%" cellpadding="6" cellspacing="0" border="0">
			<tr>
				<td rowspan="2" width="5%">
					<img src="'.$theme['images'].'admin/'.(empty($report['status']) ? 'softerror.gif' : 'softok.gif').'" />
				</td>
			</tr>
			<tr>
				<td valign="top" class="">'.$report['log'].'</td>
			</tr>
		</table>
	</div>';

}

?>