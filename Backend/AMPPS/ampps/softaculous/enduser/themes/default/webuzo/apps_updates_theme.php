<?php

//////////////////////////////////////////////////////////////
//===========================================================
// apps_installations_theme.php
//===========================================================
// WEBUZO 
// Version : 2.1.0
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

function apps_updates_theme(){

	global $user, $globals, $l, $theme, $softpanel, $error, $apps, $update, $result, $done, $sysapps_disable;

	// For updating entire file
	if(optGET('ajax')){
		
		$soft = (int) optGET('app');
		
		if(!empty($error)){			
			echo '0'.$l['error'].$user['apps_update'][$soft]['name'].' : '.current($error);
			return false;
		}		
	}
	
	// For updating entire file
	if(optGET('ajax_remove')){
		
		$soft = (int) optGET('app');
		
		if(!empty($error)){			
			echo '0'.current($error);
			return false;
		}
	}

	if(!empty($user['apps_update']) && optGET('api')){
		_api($user['apps_update'], optGET('api'));
		return;
	}

	softheader($l['<title>']);
	echo '<div class="bg">
		<center>
			<label class="sai_sub_head">'.$l['apps_ins'].'</label>
		</center><hr>';

	if(!empty($sysapps_disable)){
		echo '<div class="alert alert-danger " style="width:100%">
			<center style="margin-top:4px; font-size:16px;">'.$l['err_no_access'].'</center>
		</div>';
	}else{
		echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
		ainsids = new Array();
		updated = new Object();

		$(document).ready(function(){
			$(".sai_altrowstable tr").mouseover(function(){
				var old_class = $(this).attr("class");
				$(this).attr("class", "sai_tr_bgcolor");
				$(this).mouseout(function(){
					$(this).attr("class", old_class);
				});
			});
		});

		function show_confirm_apps(){
	
			ainsids = new Array();
			updated = new Object();		

			// Build the list of Installations to update
			var field = document.getElementsByName(\'ainsids[]\');
			ainsids = new Array();
			var c = 0;
			for(i = 0; i < field.length; i++){
				if(field[i].checked == true){
					ainsids[c] = field[i].value;
					c++;
				}		
			}
		
			if(c == 0){
				alert("'.$l['no_sel_inst'].'");
				return false;
			}
	
			var r = confirm("'.$l['del_insid'].'");
			if(r != true){
				return false;
			}
	
			update_by_id_apps(ainsids[0], "", 0);
		}

		function update_by_id_apps(ainsid, re, oldainsid){

			updated[ainsid] = false;
	
			if(re.length > 0 && oldainsid > 0){
		
				var result = re.substring(0,1);		
				var msg = re.substring(1);		
				if(result == "0"){
					alert(msg);
					updated[ainsid] = false;
					$_("rem_div_apps").innerHTML = "";
					return false;			
				}
				if(result == "1"){			
					updated[ainsid] = true;					
				}
			}
	
			nextainsid = 0;
	
			// Find the next INSTALLATION to update
			for(i = 0; i < ainsids.length; i++){
				if(typeof(updated[ainsids[i]]) != "undefined"){
					continue;
				}
				nextainsid = ainsids[i];
				break;
			}
	
			// If there is something left to be updated
			if(ainsid != 0){
				try{
					AJAX(window.location+"&app="+ainsid+"&update=1&ajax=1&random="+Math.random(), "update_by_id_apps(\'"+nextainsid+"\', re, \'"+ainsid+"\')");
					$_("rem_div_apps").innerHTML = "<br /><br /><p align=\"center\"><img src=\"' . $theme['images'] . 'ajax_remove.gif\"> <br />'.$l['rem_inst_id']. ' ID: " +ainsid+ "<br /></p>";
					return true;
				}catch(e){
					alert(e.description);
					return false;
				}
			}
			alert("'.$l['inst_remvd'].'");	
			location.reload(true);
			return true;
		}

		binsids = new Array();
		backuped = new Object();

		function show_confirm_backup(){
	
			binsids = new Array();
			backuped = new Object();		

			// Build the list of Installations to update
			var field = document.getElementsByName(\'binsids[]\');
			binsids = new Array();
			var c = 0;
			for(i = 0; i < field.length; i++){
				if(field[i].checked == true){
					binsids[c] = field[i].value;
					c++;
				}		
			}
	
			if(c == 0){
				alert("'.$l['no_sel_backup'].'");
				return false;
			}
	
			var r = confirm("'.$l['del_backup'].'");
			if(r != true){
				return false;
			}
	
			backup_remove_by_id_apps(binsids[0], "", 0);
		}

		function backup_remove_by_id_apps(binsid, re, oldbinsid){

			backuped[binsid] = false;
	
			if(re.length > 0 && oldbinsid > 0){
		
				var result = re.substring(0,1);		
				var msg = re.substring(1);		
				if(result == "0"){
					alert(msg);
					backuped[binsid] = false;
					$_("rem_div_back").innerHTML = "";
					return false;			
				}
				if(result == "1"){			
					backuped[binsid] = true;					
				}
			}
	
			nextbinsid = 0;
	
			// Find the next Backup to remove
			for(i = 0; i < binsids.length; i++){
				if(typeof(backuped[binsids[i]]) != "undefined"){
					continue;
				}
				nextbinsid = binsids[i];
				break;
			}
	
			// If there is something left to be backuped
			if(binsid != 0){
				try{
					AJAX(window.location+"&backup_file="+binsid+"&backup_remove=1&ajax_remove=1&random="+Math.random(), "backup_remove_by_id_apps(\'"+nextbinsid+"\', re, \'"+binsid+"\')");
					$_("rem_div_back").innerHTML = "<br /><br /><p align=\"center\"><img src=\"' . $theme['images'] . 'ajax_remove.gif\"> <br />'.$l['removing']. ' ID: " +binsid+ "<br /></p>";
					return true;
				}catch(e){
					alert(e.description);
					return false;
				}
			}
			alert("'.$l['back_remvd'].'");	
			location.reload(true);
			return true;
		}

	// ]]></script>';

	// For APPS INSTALLATION LIST
	ksort($user['apps_update']);

	echo '<link rel="stylesheet" type="text/css" href="https://images.softaculous.com/webuzo/sprites/20.css" />';
	error_handle($error, '100%');
		if(count($user['apps_update']) > 0){
			echo '<div class="bg2"><div class="alert alert-warning text-center">'.$l['note'].'</div>';	
				$show_head = '<table border="0" cellpadding="5" cellspacing="0" width="100%" class="table table-hover table-hover-moz td_font">
				<thead style="background:#EFEFEF;" class="sai_head2">
				<tr>
					<th width="50%">'.$l['path'].'</th>
					<th width="20%">'.$l['ins_time'].'</th>
					<th width="10%">'.$l['install_version'].'</th>
					<th width="10%">'.$l['latest_version'].'</th>
					<th width="10%" style="text-align:right">'.$l['options'].'</th>
				</tr></thead>
				</table>
			</div>';

			foreach($user['apps_update'] as $ik => $iv){			
		
				if($iv['type'] == 'library') continue;
				// check for update	
				$n_info[$ik] = $softpanel->appinfo($ik);	
		
				$app_update .= '<div class="bg2">
					<table border="0" cellpadding="5" cellspacing="0" width="100%" class="table table-hover table-hover-moz td_font">
						<thead style="background:#EFEFEF;" class="sai_head2">
							<tr>
								<th colspan="5">
									<table border="0" cellpadding="0" cellspacing="0">
										<tr class="no">
											<td class="sp20_'.$apps[$ik]['softname'].'" style="border:none"></td>
											<td style="border:none">&nbsp;'.$apps[$ik]['name'].'</td>
										</tr>
									</table>			
								</th>
							</tr>
						</thead>	
						<tbody> 
							<tr class="sai_evenrowcolor">
								<td width="50%" align="left">'.(empty($iv['path']['base']) ? $l['default_apps_base'] : $iv['path']['base']).'</td>
								<td width="20%">'.datify($iv['itime']).'</td>
								<td width="10%">'.$iv['version'].'</td>
								<td width="10%">'.$n_info[$iv['aid']]['version'].'</td>
								<td width="10%" align="right"><input type="checkbox" name="ainsids[]" value="'.$ik.'"></td>
							</tr>
						</tbody>
					</table>
				</div><br />';		
			}

			if(!empty($app_update)){
				echo '<center>
					<label class="sai_sub_head">'.$l['application'].'</label>
				</center><br />';
				echo $show_head;
				$set_head = 1;
				echo $app_update;
			}
			foreach($user['apps_update'] as $ik => $iv){			
		
				if($iv['type'] != 'library') continue;
		
				// check for update	
				$n_info[$ik] = $softpanel->appinfo($ik);	
		
				$lib_update .= '<div class="bg2">
					<table border="0" cellpadding="5" cellspacing="0" width="100%" class="table table-hover table-hover-moz td_font">
						<thead style="background:#EFEFEF;" class="sai_head2">
							<tr>
								<th colspan="5">
									<table border="0" cellpadding="0" cellspacing="0">
										<tr class="no">
											<td class="sp20_'.$apps[$ik]['softname'].'" style="border:none"></td>
											<td style="border:none">&nbsp;'.$apps[$ik]['name'].'</td>
										</tr>
									</table>			
								</th>
							</tr>	
						</thead>
						<tbody>
							<tr class="sai_evenrowcolor">
								<td width="50%" align="left">'.(empty($iv['path']['base']) ? $l['default_apps_base'] : $iv['path']['base']).'</td>
								<td width="20%">'.datify($iv['itime']).'</td>
								<td width="10%">'.$iv['version'].'</td>
								<td width="10%">'.$n_info[$iv['aid']]['version'].'</td>
								<td width="10%" align="right"><input type="checkbox" name="ainsids[]" value="'.$ik.'"></td>
							</tr>
						</tbody>
					</table>
				</div><br />';		
			}
			if(!empty($lib_update)){
				echo '<center>
					<label class="sai_sub_head">'.$l['library'].'</label>
				</center><br />';
				if(empty($set_head)){
					echo $show_head;
				}
				echo $lib_update;
			}
			echo '<div id="rem_div_apps"></div>
			<p align="center">
				<input class="flat-butt" type="button" value="'.$l['update_apps'].'" onclick="show_confirm_apps()">
			</p>';
		}else{
			echo '<div class="alert alert-warning"><center>'.$l['no_ins'].'</center></div>';
		}
		echo '</div><br />
		<div class="bg">
			<center>
				<label class="sai_sub_head">'.$l['apps_backup'].'</label><hr>
			</center>';
			
			if(count($user['apps_backup']) > 0){
		
				echo '<table border="0" cellpadding="5" cellspacing="0" width="100%" class="table table-hover table-hover-moz td_font">
					<thead style="background:#EFEFEF;" class="sai_head2">
						<tr>
							<th colspan="2">		
								<table border="0" cellpadding="5" cellspacing="0" width="100%">
									<tr>
										<th width="70%" style="border:none">'.$l['path'].'</th>
										<th width="30%" style="border:none">'.$l['options'].'</th>
									</tr>	
								</table>
							</th>	
						</tr>
					</thead>
					<tbody>';
						$i =1;
						foreach($user['apps_backup'] as $ik => $iv){
		
							echo '<tr class="sai_evenrowcolor">
								<td width="70%" align="left">'.$iv['name'].'</td>
								<td width="30%"><input type="checkbox" name="binsids[]" value="'.$iv['name'].'"></td>		
							</tr>';
							$i++;		
						}
					echo '</tbody>';
				echo '</table><br />
				<div id="rem_div_back"></div>
				<p align="center">
					<input class="flat-butt" type="button" value="'.$l['remove'].'" onclick="show_confirm_backup()">
				</p>';
			}else{
		
				echo '<div class="alert alert-warning text-center"><center>'.$l['no_backup'].'</center></div>';
		
			}
	}
	echo '</div>';
	softfooter();
}
?>