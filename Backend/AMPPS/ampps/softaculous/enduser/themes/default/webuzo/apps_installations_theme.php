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


function apps_installations_theme(){

global $user, $globals, $l, $theme, $softpanel, $error, $apps;

	if(!empty($user['apps_ins']) && optGET('api')){
		_api($user['apps_ins'], optGET('api'));
		return;
	}
	softheader($l['<title>']);

	error_handle($error, '100%');
	if(optGET('showupdates')){
		echo '<div class="row text-center sai_notice">
			<a href="'.$globals['ind'].'act=apps_installations">'.$l['showing_only'].' '.$l['see_all'].'</a>		
		</div><br>';
	}
	// For APPS INSTALLATION LIST
	ksort($user['apps_ins']);
	
	echo '<div class="bg"><br>
	<div class="row text-center"><span class="sai_main_head">'.$l['apps_ins'].'</span></div><hr>
	<table class="table table-hover">
		<thead class="sai_head2" style="background-color:#333333; color: #ffffff;">
			<tr>
				<th>'.$l['path'].'</th>
				<th>'.$l['ins_time'].'</th>
				<th>'.$l['version'].'</th>
				<th colspan="2">'.$l['options'].'</th>
			</tr>
		</thead>';
		
	$i = 1;
	$th = 0;
	
	if(count($user['apps_ins']) > 0){
		//r_print($user['apps_ins']);
		echo '<tbody>';
		
		foreach($user['apps_ins'] as $k => $v){
			foreach($v as $ik => $iv){
				if($th == 0){
					echo '
					<tr>
						<th colspan="5" style="background-color: #EFEFEF;"><a href='.$globals['ind'].'act=apps&app='.$iv['aid'].' style="text-decoration:none;">'.$apps[$iv['aid']]['name'].'</a></th>
					</tr>';
				}
				echo '
					<tr id="trid' . $ik . '">
						<td>'.(empty($iv['path']['base']) ? $l['default_apps_base'] : $iv['path']['base']).'</td>
						<td>'.datify($iv['itime']).'</td>
						<td>'.$iv['version'].'</td>
						<td width="10">
							<a href="'.$globals['ind'].'act=apps&app='.$iv['aid'].'" title="'.$l['remove'].'">
							<img src="'.$theme['images'].'remove.gif" /></a>&nbsp;
						</td>
						<td width="10"><input type="checkbox" name="ainsids[]" value="'.$iv['aid'].'"></td>
					</tr>';
				$i++;
				$th = 1;
			}
				$th = 0;
		}
		
		echo '</tbody>
		</table>
		<br />
		<br />
	
		<p class="text-right">
			<label for="multi_options_apps">'.$l['with_selected'].': </label>
			<select name="multi_options_apps" id="multi_options_apps">
				<option name="todo_apps" id="todo_apps" value="0">---</option>
				<option name="todo_apps" id="todo_apps" value="mult_rem">'.$l['remove_apps'].'</option>
			</select>
			<input type="button" class="flat-butt" value="'.$l['go'].'" onclick="show_confirm_apps()">
			<br />
		</p>
		<div id="rem_div_apps"></div>
	
		<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
			ainsids = new Array();
			removed = new Object();

			function show_confirm_apps(){
					
				ainsids = new Array();
				removed = new Object();
					
				if($_("multi_options_apps").value != "mult_rem"){
					return false;
				}

				// Build the list of Installations to remove
				var field = document.getElementsByName(\'ainsids[]\');
					ainsids = new Array();
					var c = 0;
					for(i = 0; i < field.length; i++){
						if(field[i].checked == true){
							ainsids[c] = field[i].value;
							c++;
						}
						
				}
				//alert(ainsids);
					
				if(c == 0){
					alert("'.$l['no_sel_inst'].'");
					return false;
				}
					
				var r = confirm("'.$l['del_insid'].'");
				if(r != true){
					return false;
				}
					
				remove_by_id_apps(ainsids[0], "", 0);
			}

			function remove_by_id_apps(ainsid, re, oldainsid){

				removed[ainsid] = false;
					
				if(re.length > 0 && oldainsid > 0){
					if(re == "removed"){
						removed[ainsid] = true;
					}
				}
					
				nextainsid = 0;
					
				// Find the next INSTALLATION to remove
				for(i = 0; i < ainsids.length; i++){
					if(typeof(removed[ainsids[i]]) != "undefined"){
						continue;
					}
					nextainsid = ainsids[i];
					break;
				}
					
				// If there is something left to be removed
				if(ainsid != 0){
					try{
						AJAX("'.$globals['index'].'act=apps&app="+ainsid+"&remove=1&ajax=1&random="+Math.random(), "remove_by_id_apps(\'"+nextainsid+"\', re, \'"+ainsid+"\')");
						$_("rem_div_apps").innerHTML = "<br /><br /><p class=\"text-center\"><img src=\"' . $theme['images'] . 'ajax_remove.gif\"> <br />'.$l['rem_inst_id']. ' ID: " +ainsid+ "<br /></p>";
						return true;
					}catch(e){
						alert(e.description);
						return false;
					}
				}
				$_("rem_div_apps").innerHTML = "";
				alert("'.$l['inst_remvd'].'");
				location.reload(true);
				return true;
			}
		// ]]></script>';
	}else{
		echo '<div class="row text-center">'.$l['no_ins'].'</div>';
	}
	softfooter();
}

?>