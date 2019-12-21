<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editdetail_theme.php
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


function editdetail_theme(){

	global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $edit, $settings;
	global $insid, $edited, $software, $soft, $scripts, $version_updated, $account_details_editable, $no_autoupgrade, $add_to_fileindex, $__settings, $default_fileindex, $pfx_error, $owned_themes, $full_tables, $default_tables, $no_autoupgrade_acl, $notes, $act;
	
	// If generate order call
	if(optGET('generate_order')){
		$order_id = get_softaculous_file($globals['apipfx'].'fetch.php?apikey='.$user['pfxapi_key'].'&email='.$user['email'].'&pid='.optGET('theme_id').'&giveinfo=generate_order&index='.rawurlencode($globals['index']));
		echo json_encode($order_id);
		return true;
		
	}
	
	// For update theme and plugins ajax call
	if(optGET('upgradenow')){
		
		// It was not successful
		if(!empty($error)){
			echo '0'.current($error);
			return false;
		}
		
		// It was successful
		if(!empty($edited)){
			
			if(!empty($_REQUEST['upgradeplugins'])){
				$successmsg = $l['plugins_upgrade_success'];
			}
			
			if(!empty($_REQUEST['upgradetheme'])){
				$successmsg = $l['theme_upgrade_success'];
			}
			
			echo '1'.$successmsg;
			return true;
		}
	}
	
	softheader($l['<title>']);
	
	echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[

	var message_box = function(){			
		return {
			show_message: function(title, body , image) {			
				var okbutton = \'<input  style="width:75px; margin-top:5px; background:#00A0D2; color:#FFF;" class="sai_submit" type="button" onclick="message_box.close_message();" value="OK" />\';
				if(image == "1"){
					var img = \'<img src="'.$theme['images'].'error.gif" />\';
				}else{
					var img = \'<img src="'.$theme['images'].'confirm.gif" />\';			
				}
									
				if(jQuery(\'.sai_message_box\').html() === null || jQuery(\'.sai_message_box\').html() === undefined ) {
					var message = \'<div class="sai_message_box"><table border="0" cellpadding="8" width="100%" height="100%"><tr ><td rowspan="2" width="30%" > \'+ img + \'</td><td width="70%" class ="msg_tr1">\' +  title + \'</td></tr><tr class ="msg_tr2"><td style="text-align:left">\' + body + \'</td></tr><tr ><td colspan="2">\' + okbutton + \'</td></tr></table></div>\';
					jQuery(document.body).append( message );								
					jQuery(\'.sai_message_box\').css(\'top\', jQuery(\'html, body\').scrollTop() + 150);
					jQuery(\'.sai_message_box\').show(\'slow\');
				}else{
					var message =\' <table border="0" width="100%" cellpadding="8" height="100%"><tr ><td rowspan="2" width="30%">\'+ img +  \'</td><td widt="70%" class ="msg_tr1">\' + title + \'</td></tr><tr class ="msg_tr2"><td style="text-align:left">\' + body + \'</td></tr><tr ><td colspan="2">\' + okbutton + \'</td></tr></table>\';				
					jQuery(\'.sai_message_box\').css(\'top\', jQuery(\'html, body\').scrollTop() + 150);
					jQuery(\'.sai_message_box\').show(\'slow\');
					jQuery(\'.sai_message_box\').html( message );
				}
			},
			close_message: function() {
				jQuery(\'.sai_message_box\').hide(\'fast\');
			}
		}
	}();

	$(document).ready(function(){
			
		// For Plugins Upgrade
		$("#plugins_upgrade").click(function(){
			
			$("#upgradeplugins").val(1);
			$("#plugins_upgrade_gif").css("display", "");
			
			return upgradenow("plugins");
														
		});

		// For Theme Upgrade
		$("#theme_upgrade").click(function(){
			
			$("#upgradetheme").val(1);
			$("#theme_upgrade_gif").css("display", "");
			
			return upgradenow("theme");
														
		});
	});
	
	function upgradenow(action){
		$.ajax({
			type: "POST",
			url: window.location+"&upgradenow=1",					
			data: $("#editsettings").serialize(),
			
			// Checking for error
			success: function(data){
				
				$("#" + action + "_upgrade_gif").css("display", "none");
				
				// Reset the button so it is not submitted next time
				$("#upgrade" + action).val(0);
				
				var result = data.trim().substring(0,1);
				if(result == "1"){
					var msg = data.trim().substring(1);
					message_box.show_message( "'.$l['done'].'", msg, 2);
				}
				if(result == "0"){
					var msg = data.trim().substring(1);
					message_box.show_message( "'.$l['error'].'", msg, 1);
				}
			},
			error: function() {
				message_box.show_message("Error", "Oops ... the connection was lost", 1);
			}													
		});
		
		return false;
	}
	// ]]></script>';
	
	echo '
	<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
	
	// show/hide backup options
	function show_backup(){
		try{
			var auto_backup = $("#auto_backup").val();
			if(auto_backup == 0){
				$("#auto_backup_rotation").prop("disabled", true);
				$("#custom_autobackup_cron").css("display", "none");
			}else{
				if(auto_backup == "custom"){
					$("#custom_autobackup_cron").css("display", "block");
				}else{
					$("#custom_autobackup_cron").css("display", "none");
				}				
				$("#auto_backup_rotation").prop("disabled", false);
			}
			
		}catch(e){
			//
		}
		return true;
	};
	
	function toggle_advoptions(ele){
		//alert("#"+ele);
		
		if ($("#"+ele).is(":hidden")){
			$("#"+ele).slideDown("slow");
			$("#advoptions_toggle_plus").attr("src", "'.$theme['images'].'minus_new.gif");
		}
		else{
			$("#"+ele).slideUp("slow");
			$("#advoptions_toggle_plus").attr("src", "'.$theme['images'].'plus_new.gif");
		}
	}
	
	function plus_onmouseover(ele){
		$("#"+ele.id+"_plus").attr("src", "'.$theme['images'].'plus_hover.gif");
	}
	
	function plus_onmouseout(ele){
		$("#"+ele.id+"_plus").attr("src", "'.$theme['images'].'plus.gif");
	}
	
	$(document).ready(function() {
		$("#editfiles tr").click(function(event) {
			if (event.target.type !== "checkbox") {
			  $(":checkbox", this).trigger("click");
			}
		});
	});
	
	'.(!empty($_POST) ? '' : 'addonload(\'show_backup();\');').'
	
	// ]]></script>';
	
	$width_size = 65;
	
	if(!empty($softpanel->leftpanel_resize)){
		$width_size = 40;
	}
	
	if(!empty($edited)){
		
		$return = '<a href="'.script_link($soft).'&highlight='.$insid.'&postact=edit" class="sai_head">'.$l['return'].'</a>';
		//Filter to customize the return to link
		$return = apply_filters('return_link', $return, $act);
		
		echo '
		<div class="bg"><br />
			<div class="alert alert-warning"><center>'.$l['details_edited'].'</center></div><br />';
			
			if(!empty($notes)){
				echo $l['edit_notes'].' : <br />
				<div class="sai_notes">'.softparse($notes, $soft).'</div><br />';
			}
			
			if(!empty($pfx_error)){
				error_handle($pfx_error, "100%");
			}
				
		echo '<br /><center><b>'.$return.'</b></center><br />
		</div><!--end of bg-->';
	}else{
		
		$return = '<a href="'.script_link($soft).'" class="sai_head">'.$l['return'].'</a>';
		//Filter to customize the return to link
		$return = apply_filters('return_link', $return, $act);
		
		echo '
		<form accept-charset="'.$globals['charset'].'" name="editsettings" id="editsettings" method="post" action="" class="form-horizontal">
			<div class="bg"><br />			
				<div class="row sai_main_head" style="width:100%;" align="center">
					<div class="col-sm-5 col-xs-4" style="padding:0 10px 0 0; text-align:right;">
						<i class="fa sai-projectman fa-2x" style="color:#00A0D2;"></i>
					</div>
					<div class="col-sm-7 col-xs-8" style="padding-top:10px; padding-left:0; text-align:left;">'.$l['edit_ins'].'</div>
				</div><br />';
				
				error_handle($error, '100%');
				
				if(!empty($version_updated)){
					echo '<div class="alert alert-warning" align="center"><a href="#close" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$l['version_edited'].'</div>';
				}
	
				echo (!empty($GLOBALS['alreadyupdated']) ? '
					<form accept-charset="'.$globals['charset'].'" method="post" name="uprec" id="uprec" action="">
					<br />
						<center class="alert alert-warning">
							<a href="#close" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<a href="'.$globals['index'].'act=editdetail&insid='.$insid.'&updateversion=1" style="text-decoration:none;"><img src="'.$theme['images'].'notice.gif" /> &nbsp; '.lang_vars($l['alreadyupdated'], array($GLOBALS['alreadyupdated'], $user['ins'][$insid]['ver'])).'</a>
						</center>
						'.csrf_display().'
					</form>' : '');
	
				echo'
				<div style="padding: 0 25px;">
					<div class="sai_sub_head">'.$l['ins_details'].'</div><hr>';
			
					if(empty($globals['hide_directory_url'])){
						echo '
						<div class="row">
							<div class="col-sm-5">
								<label for="edit_dir" class="sai_head">'.$l['edit_dir'].'</label><br />
							</div>	
							<div class="col-sm-7">
								<input type="text" name="edit_dir" id="edit_dir" class="form-control" value="'.POSTval('edit_dir', $user['ins'][$insid]['softpath']).'" size="'.$width_size.'" />
							</div>	
						</div><br />
						
						<div class="row">
							<div class="col-sm-5">
								<label for="edit_url" class="sai_head">'.$l['edit_url'].'</label><br />
							</div>	
							<div class="col-sm-7">	
								<input type="text" name="edit_url" id="edit_url" class="form-control" value="'.POSTval('edit_url', $user['ins'][$insid]['softurl']).'" size="'.$width_size.'" />
							</div>	
						</div><br />
					';}
					
					// Web directory @since 3.5
					if(!empty($user['ins'][$insid]['wwwdir'])){
						echo '
						<div class="row">
							<div class="col-sm-5">
								<label for="edit_wwwdir" class="sai_head">'.$l['edit_wwwdir'].'</label><br />
							</div>
							<div class="col-sm-7"> 
								<input type="text" name="edit_wwwdir" id="edit_wwwdir" class="form-control" value="'.POSTval('edit_wwwdir', $user['ins'][$insid]['wwwdir']).'" size="'.$width_size.'" />
							</div>	
						</div><br />
					';}
					
					// Web directory URL @since 3.5
					if(!empty($user['ins'][$insid]['wwwurl'])){
					
						echo '
						<div class="row">
							<div class="col-sm-5">
								<label for="edit_wwwurl" class="sai_head">'.$l['edit_wwwurl'].'</label><br />
							</div>
							<div class="col-sm-7">
								<input type="text" name="edit_wwwurl" id="edit_wwwurl" class="form-control" value="'.POSTval('edit_wwwurl', $user['ins'][$insid]['wwwurl']).'" size="'.$width_size.'" />
							</div>	
						</div><br />
					';}
					
					// Data directory ?
					if(!empty($user['ins'][$insid]['softdatadir'])){
					
						echo '
						<div class="row">
							<div class="col-sm-5">
								<label for="edit_datadir" class="sai_head">'.$l['edit_datadir'].'</label><br />
							</div>
							<div class="col-sm-7">
								<input type="text" name="edit_datadir" id="edit_datadir" class="form-control" value="'.POSTval('edit_datadir', $user['ins'][$insid]['softdatadir']).'" size="'.$width_size.'" />
							</div>	
						</div><br />
					';}
				
					if(!empty($user['ins'][$insid]['softdb'])){
						
						echo '
						<div class="row">
							<div class="col-sm-5">
								<label for="edit_db" class="sai_head">'.$l['edit_db'].'</label><br />
							</div>
							<div class="col-sm-7">
								<input type="text" name="edit_dbname" id="edit_db" class="form-control" value="'.POSTval('edit_dbname', $user['ins'][$insid]['softdb']).'" size="'.$width_size.'" />
							</div>					
						</div><br />
					';}
					
					if(!empty($user['ins'][$insid]['softdbuser'])){
					
						echo '
						<div class="row">
							<div class="col-sm-5">
								<label for="edit_dbuser" class="sai_head">'.$l['edit_dbuser'].'</label><br />
							</div>
							<div class="col-sm-7">
								<input type="text" name="edit_dbuser" id="edit_dbuser" class="form-control" value="'.POSTval('edit_dbuser', $user['ins'][$insid]['softdbuser']).'" size="'.$width_size.'" />
							</div>
						</div><br />
					';}
				
					if(!empty($user['ins'][$insid]['display_softdbpass'])){
					
						echo '
						<div class="row">
							<div class="col-sm-5">
								<label for="edit_dbpass" class="sai_head">'.$l['edit_dbpass'].'</label><br />
								'.((!empty($globals['no_prefill_pass'])) ? '<span class="sai_exp2">'.$l['edit_dbpass_exp'].'</span>' : '').'
							</div>
							<div class="col-sm-7">
								<div class="row">
									<div class="col-sm-11">
										<input type="password" name="edit_dbpass" id="edit_dbpass" class="form-control" value="'.aPOSTval('edit_dbpass', (empty($globals['no_prefill_pass']) ? htmlizer($user['ins'][$insid]['display_softdbpass']) : '')).'" size="'.$width_size.'" autocomplete="off" />
									</div>
									<div class="col-sm-1" style="margin-left:-20px;">
										<input id="toggle_pass_dbpass" type="checkbox" style="display:none;" onclick="toggle_pass(\'show_hide_dbpass\', \'edit_dbpass\');"/><label for="toggle_pass_dbpass" style="margin-top:6px;"><span id="show_hide_dbpass">'.$l['show'].'</span></label>
									</div>
								</div>
							</div>						
						</div><br />
					';}
					
					if(!empty($user['ins'][$insid]['softdbhost'])){
					
						echo '
						<div class="row">
							<div class="col-sm-5">
								<label for="edit_dbhost" class="sai_head">'.$l['edit_dbhost'].'</label><br />
							</div>
							<div class="col-sm-7">
								<input type="text" name="edit_dbhost" class="form-control" id="edit_dbhost" value="'.aPOSTval('edit_dbhost', $user['ins'][$insid]['softdbhost']).'" size="'.$width_size.'" />
							</div>	
						</div><br />
					';}
				
					//Do not show 'disable update notifications' option if both 'Turn off all Emails sent to endusers' and 'Disable End User Update E-Mails' or either is enabled in Admin Panel
					if(empty($globals['off_email_link']) && empty($globals['eu_email_off'])){
						echo'
						<div class="row">
							<div class="col-sm-5">
								<label for="disable_notify_update" class="sai_head">'.$l['disable_notify_update'].'</label><br />
								<span class="sai_exp">'.$l['exp_disable_notify_update'].'</span>
							</div>
							<div class="col-xs-6">
								<input type="checkbox" name="disable_notify_update" id="disable_notify_update" '.POSTchecked('disable_notify_update', $user['ins'][$insid]['disable_notify_update']).' />
							</div>	
						</div><br />';
					}
					
					if(!empty($scripts[$soft]['auto_upgrade']) && empty($no_autoupgrade) && empty($no_autoupgrade_acl)){
						
						$user['ins'][$insid]['eu_auto_upgrade'] = (int) $user['ins'][$insid]['eu_auto_upgrade'];
						echo '
						<div class="row">
							<div class="col-sm-5">
								<label for="eu_auto_upgrade" class="sai_head">'.$l['eu_auto_upgrade'].'</label><br />
								<span class="sai_exp">'.$l['exp_eu_auto_upgrade'].'</span>
							</div>
							<div class="col-sm-7">
								<input type="radio" name="eu_auto_upgrade" value="0" '.POSTradio('eu_auto_upgrade', 0, $user['ins'][$insid]['eu_auto_upgrade']).' /> '.$l['dont_auto_upgrade'].' <br />
								'.(!empty($software['has_minor']) ? '<input type="radio" name="eu_auto_upgrade" value="2" '.POSTradio('eu_auto_upgrade', 2, $user['ins'][$insid]['eu_auto_upgrade']).' /> '.$l['minor_auto_upgrade'].' <br />' : '').'
								<input type="radio" name="eu_auto_upgrade" value="1" '.POSTradio('eu_auto_upgrade', 1, $user['ins'][$insid]['eu_auto_upgrade']).' /> '.$l['major_auto_upgrade'].'
							</div>
						</div><br />
					';}
						
					if(empty($globals['off_upgrade_plugins']) && !empty($software['update_plugins'])){
						echo '
						<div class="row">
							<div class="col-sm-5">
								<label for="auto_upgrade_plugins" class="sai_head">'.lang_vars($l['auto_upgrade_plugins'], array($software['name'])).'</label><br />
								<span class="sai_exp">'.lang_vars($l['exp_auto_upgrade_plugins'], array($software['name'])).'</span>	
							</div>
							<div class="col-sm-1">
								<input type="checkbox" name="auto_upgrade_plugins" id="auto_upgrade_plugins" id="auto_upgrade_plugins" '.POSTchecked('auto_upgrade_plugins', $user['ins'][$insid]['auto_upgrade_plugins']).' />
							</div>
							<div class="col-sm-6">
								<input type="hidden" name="upgradeplugins" id="upgradeplugins" />
								<input id="plugins_upgrade" class="flat-butt" name="plugins_upgrade" value="'.$l['plugins_upgrade_now'].'" type="button" style="padding: 5px; font-size:13px;">&nbsp;
								<img id="plugins_upgrade_gif" src="'.$theme['images'].'progress.gif" style="display:none">
							</div>
						</div><br />
					';}
				
					if(empty($globals['off_upgrade_themes']) && !empty($software['update_themes'])){
						echo '
						<div class="row">
							<div class="col-sm-5">
								<label for="auto_upgrade_themes" class="sai_head">'.lang_vars($l['auto_upgrade_themes'], array($software['name'])).'</label><br />
								<span class="sai_exp">'.lang_vars($l['exp_auto_upgrade_themes'], array($software['name'])).'</span>
							</div>
							<div class="col-sm-1">
								<input type="checkbox" name="auto_upgrade_themes" id="auto_upgrade_themes" '.POSTchecked('auto_upgrade_themes', $user['ins'][$insid]['auto_upgrade_themes']).' />	
							</div>
							<div class="col-sm-6">
								<input type="hidden" name="upgradetheme" id="upgradetheme" />
								<input id="theme_upgrade" class="flat-butt" name="theme_upgrade" value="'.$l['theme_upgrade_now'].'" type="button" style="padding: 5px; font-size:13px;">&nbsp;
								<img id="theme_upgrade_gif" src="'.$theme['images'].'progress.gif" style="display:none">
							</div>
						</div><br />
					';}
					
					if(empty($globals['off_rbackup']) && empty($globals['disable_backup_restore'])){
						echo '
						<div class="row">
							<div class="col-sm-5">
								<label for="backup_location" class="sai_head">'.$l['backup_loc'].'</label><br />
								<span class="sai_exp">'.$l['exp_backup_loc'].'</span>	
							</div>
							<div class="col-sm-7">
								<select name="backup_location" class="form-control" id="backup_location">
									<option value="0" '.POSTselect('backup_location', 0, (empty($user['ins'][$insid]['backup_location']) ? '1' : '0')).'>'.$l['default'].'</option>
									<option value="-1" '.POSTselect('backup_location', -1, ($user['ins'][$insid]['backup_location'] == -1 ? '1' : '0')).'>'.$l['local_folder'].'</option>';
									foreach($user['remote_backup_locs'] as $k => $v){
										echo '<option value="'.$k.'" '.POSTselect('backup_location', $k, ($user['ins'][$insid]['backup_location'] == $k ? '1' : '0')).'>'.$v['name'].'</option>';
									}
								echo '</select>
							</div>
						</div><br />';
					}
			
					if(empty($globals['disable_backup_restore']) && empty($globals['disable_auto_backup'])){
						echo '
						<div class="row">
							<div class="col-sm-5">
								<label for="auto_backup" class="sai_head">'.$l['auto_backup'].'</label><br />
								<span class="sai_exp">'.$l['exp_auto_backup'].'</span>	
							</div>
							<div class="col-sm-7">
								<select name="auto_backup" class="form-control" id="auto_backup" onchange="show_backup();">
								<option value="0" '.POSTselect('auto_backup', '0', (empty($user['ins'][$insid]['auto_backup']) ? '1' : '0')).'>'.$l['no_backup'].'</option>'.
								(empty($globals['disable_auto_backup_daily']) ? '<option value="daily" '.POSTselect('auto_backup', 'daily', ($user['ins'][$insid]['auto_backup'] == 'daily' ? '1' : '0')).'>'.$l['daily'].'</option>' : '').
								(empty($globals['disable_auto_backup_weekly']) ? '<option value="weekly" '.POSTselect('auto_backup', 'weekly', ($user['ins'][$insid]['auto_backup'] == 'weekly' ? '1' : '0')).'>'.$l['weekly'].'</option>' : '').
								(empty($globals['disable_auto_backup_monthly']) ? '<option value="monthly" '.POSTselect('auto_backup', 'monthly', ($user['ins'][$insid]['auto_backup'] == 'monthly' ? '1' : '0')).'>'.$l['monthly'].'</option>' : '').
								(empty($globals['disable_auto_backup_custom']) ? '<option value="custom" '.POSTselect('auto_backup', 'custom', ($user['ins'][$insid]['auto_backup'] == 'custom' ? '1' : '0')).'>'.$l['custom_autobackup'].'</option>' : '').'
								</select>					
							</div>
						</div>';
						
						$autobackup_cron = explode(",", $user['ins'][$insid]['auto_backup_crontime']);
						
						echo '<div class="row" id="custom_autobackup_cron" style="display:none;"><br/>
							<div class="col-sm-5">
								<span class="sai_head">'.$l['custom_autobackup_cron'].'</span><br />
								<span class="sai_exp">'.$l['custom_autobackup_cron_exp'].'</span>
							</div>
							<div class="col-sm-7">
								<div class="row">
									<div class="col-sm-2">
										<span>'.$l['cron_min'].'</span>	
										<input type="text" class="form-control" name="autobackup_cron_min" id="autobackup_cron_min" size="2" value="'.POSTval('autobackup_cron_min', $autobackup_cron[0]).'" />
									</div>
									<div class="col-sm-2">
										<span>'.$l['cron_hour'].'</span>
										<input type="text" class="form-control" name="autobackup_cron_hour" id="autobackup_cron_hour" size="2" value="'.POSTval('autobackup_cron_hour', $autobackup_cron[1]).'" />
									</div>
									<div class="col-sm-2">
										<span>'.$l['cron_day'].'</span>
										<input type="text" class="form-control" name="autobackup_cron_day" id="autobackup_cron_day" size="2" value="'.POSTval('autobackup_cron_day', $autobackup_cron[2]).'" />
									</div>
									<div class="col-sm-2">
										<span>'.$l['cron_month'].'</span>
										<input type="text" class="form-control" name="autobackup_cron_month" id="autobackup_cron_month" size="2" value="'.POSTval('autobackup_cron_month', $autobackup_cron[3]).'" />
									</div>
									<div class="col-sm-2">
										<span>'.$l['cron_weekday'].'</span>
										<input type="text" class="form-control" name="autobackup_cron_weekday" id="autobackup_cron_weekday" size="2" value="'.POSTval('autobackup_cron_weekday', $autobackup_cron[4]).'" />
									</div>
								</div>
							</div>	
						</div><br />';
				
						echo '<div class="row">
							<div class="col-sm-5">
								<label for="auto_backup_rotation" class="sai_head">'.$l['auto_backup_rotation'].'</label><br />
								<span class="sai_exp">'.$l['exp_auto_backup_rotation'].'</span>
							</div>
							<div class="col-sm-7">
								<select name="auto_backup_rotation" class="form-control" id="auto_backup_rotation">';    
								for($i=0; $i<=10; $i++){
									// Do we have a limit from admin ?
									if(!empty($globals['auto_backup_limit']) && ($i > $globals['auto_backup_limit'] || $i == 0) || !empty($globals['max_backups']) && ($i > $globals['max_backups'] || $i == 0)) continue;
									echo '<option value="'.$i.'" '.POSTselect('auto_backup_rotation', $i, (!empty($user['ins'][$insid]['auto_backup_rotation']) && $user['ins'][$insid]['auto_backup_rotation'] == $i ? '1' : (empty($user['ins'][$insid]['auto_backup_rotation']) && $i == 4) ? '1' : '0')).'>'.(empty($i) ? $l['unlimited'] : $i).'</option>';						
								}
								echo '</select>		
							</div>			
						</div><br />';
					}
				
					if(!empty($add_to_fileindex)){
					
						echo '
						<div class="row">
							<div class="col-sm-5">
								<label for="advoptions_toggle" class="sai_head">'.$l['select_files'].'</label><br />
								<span class="sai_exp">'.$l['select_files_exp'].'</span><br />
							</div>
							<div class="col-sm-7">
								<div id="advoptions_toggle" onclick="toggle_advoptions(\'selectfile\');" class="sai_head" style="background: none; cursor:pointer;"><img id="advoptions_toggle_plus" src="'.$theme['images'].'plus_new.gif" /> &nbsp; '.$l['select_files_list'].'</div>
								<div id="selectfile" style="display:none">
									<table class="table table-hover">
										<thead style="background:#EFEFEF;" class="sai_head2">
											<tr>
												<th width="5%"><input type="checkbox" id="check_all_edit" name="check_all_edit"></th>
												<th colspan="2"><b>'.$l['check_all_edit'].'</b></th>
											</tr>
										</thead>';
										foreach($add_to_fileindex as $ck => $cv){
											
											if(in_array($cv['name'], $default_fileindex) && in_array($cv['name'], $__settings['fileindex'])) continue;
											
											echo '<tr>
													<td><input type="checkbox" name="add_to_fileindex[]" class="soft_filelist" value="'.$cv['name'].'" '.POSTmulticheck('add_to_fileindex', $cv['name'], $__settings['fileindex']).' /></td>
													<td width="5%"><img src="'.$theme['images'].''.(!empty($cv['dir']) ? 'dir.png' : 'file.png').'"></td>
													<td>'.$cv['name'].'</td>
												</tr>';
											$i++;
										}
									echo'
									</table>
								</div>		
							</div>	
						</div><br />';	
						
						if(empty($globals['disable_backup_restore'])){
							
							echo '<div class="row">
									<div class="col-sm-5">
										<label for="select_files_backup" class="sai_head">'.$l['select_files_backup'].'</label><br />
										<span class="sai_exp">'.$l['select_files_backup_exp'].'</span>
									</div>
									<div class="col-sm-7">
										<select name="select_files_backup" class="form-control" id="select_files_backup">
											<option value="0" '.POSTselect('select_files_backup', '0', (empty($user['ins'][$insid]['select_files_backup']) ? '1' : '0')).'>'.$l['no'].'</option>
											<option value="1" '.POSTselect('select_files_backup', '1', (!empty($user['ins'][$insid]['select_files_backup']) ? '1' : '0')).'>'.$l['yes'].'</option>
										</select>				
									</div>			
								</div><br />';
						}
					}
					
					if(!empty($__settings['softdb']) && aefer() && empty($data['dbcreated'])){
						echo '
						<div class="row">
							<div class="col-sm-5">
								<label for="tables_toggle" class="sai_head">'.$l['select_tables'].'</label><br />
								<span class="sai_exp">'.$l['select_tables_exp'].'</span><br />
							</div>
							<div class="col-sm-7">
								<div id="tables_toggle" onclick="toggle_advoptions(\'select_tables\');" class="sai_head" style="background: none; cursor:pointer;"><img id="advoptions_toggle_plus" src="'.$theme['images'].'plus_new.gif" /> &nbsp; Select tables</div>
								<div id="select_tables" style="display:none">
									<table class="table table-hover">
										<thead style="background:#EFEFEF;" class="sai_head2">
											<tr>
												<th width="5%"><input type="checkbox" id="check_all_tables" name="check_all_tables"></th>
												<th colspan="2"><b>'.$l['check_all_edit'].'</b></th>
											</tr>
										</thead>';
										foreach($full_tables as $k => $v){											
											echo '<tr>
													<td><input type="checkbox" name="add_to_softdbtables[]" class="soft_tablelist" value="'.$v.'" '.POSTmulticheck('add_to_softdbtables', $v, $__settings['softdbtables']).' '. (in_array($v, $default_tables) ? 'disabled' : '').'/></td>
													<td>'.trim($v, '`').'</td>
												</tr>';
											$i++;
										}
									echo'
									</table>
								</div>		
							</div>	
						</div><br />';
					}
				echo'</div>';
			
				if(!empty($settings)){
				
					echo'
					<div class="bg">';
				
						foreach($settings as $group => $sets){
							
							if($group == 'hidden' || empty($sets)) continue;
						
							echo '
							<div class="sai_sub_head">'.$group.'</div><hr>';
						
							foreach($sets as $sk => $sv){
								
								if($sk == 'admin_pass' || $sk == 'signon_username'){
									$exp_class = 'sai_exp2';
								}else{
									$exp_class = 'sai_exp';					
								}
								
								echo '
								<div class="row">
									<div class="col-sm-5">
										<label for='.$sk.' class="sai_head">'.$sv['head'].'</label>
										'.(empty($sv['exp']) ? '' : '<br /><span class="'.$exp_class.'">'.$sv['exp'].'</span>').'
									</div>';
									
									//Adding class to input
									if(preg_match('/type="text"/is', $sv['tag'])){
										$sv['tag'] = preg_replace('/>/is', 'class="form-control">',$sv['tag']);
									}
									
									if($sk == 'admin_pass'){
										$sv['tag'] = preg_replace('/type="text"/is', 'type="password"',$sv['tag']);
										echo '<div class="col-sm-7"><div class="row"><div class="col-sm-11">'.$sv['tag'].'</div><div class="col-sm-1" style="margin-left:-20px;"><input id="toggle_pass_admin" type="checkbox" style="display:none;" onclick="toggle_pass(\'show_hide_admin\', \'admin_pass\');"/><label for="toggle_pass_admin" style="margin-top:6px;"><span id="show_hide_admin">'.$l['show'].'</span></label></div></div></div>';
									}else{
										echo '<div class="col-sm-7">'.$sv['tag'].'</div>';
									}
						echo '</div><br />';
							}
						}
			
						//The Hidden groups 
						if(!empty($settings['hidden'])){
						
							foreach($settings['hidden'] as $sk => $sv){
								echo $sv['tag'];
							}
						
						}
			
					echo'
					</div><br /><!--end of bg clss-->';
				}//End of if($settings)

			
// Do we have to display the theme 
if((!empty($globals['eu_enable_themes'])) && !empty($software['has_theme'])){

	echo '
		<div class="bg">
			<div id="pfx_div" style="display:none"></div>
		</div><br /><!--end of bg class-->
		<script id="paypal_js" language="javascript" type="text/javascript"></script>
		<script language="javascript" type="text/javascript"><!-- // --><![CDATA[

		var pfx_div = \''.(str_replace(array("\n", "'"), array('', "\'"), '<style>
		</style>
		<div id="themesearch" class="sai_popupc" style="display:none;">
			<div class="sai_themesearch_div sai_popuptitle" align="center" style="padding-left:20px;">
					<fieldset class="sai_inputs">
						<div class="row">
							<input type="text"  name="themesearchstring" class="col-sm-10" id="themesearchstring"  class="sai_inputs" autofocus placeholder="Search Themes" autocomplete="off">
							<div class="col-sm-6" style="text-align:right; margin-top:8px;">
								<a href="javascript:void(0);" class="sai_popupclose b-close">Close</a>
							</div>
						</div>
						<div class="row">
							<h4 id="results-text" style="display:none;">Showing results for: <b id="search-string"></b></h4>
							<ul id="results"></ul><br />
						</div>
					</fieldset>
			</div>
			<div id="searchsuggestions"></div>
		</div>
		<div class="sai_sub_head" id="theme_toggle" onclick="toggle_advoptions(\'theme\');" class="sai_heading_full" style="cursor:pointer"><img id="theme_toggle_plus" src="'.$theme['images'].'minus_new.gif" />&nbsp;&nbsp;'.$l['choose_theme'].'</div>
		<div class="row">
			<div id="theme" style="display:block;" class="col-sm-12"><hr>
				<div id="theme_div" style="display:block;">
					<div class="row">
						<div class="col-sm-2">
							<a class="btn btn-default" id="search_theme">'.$l['search'].'</a>
						</div>
						<div class="col-sm-2">
							<select name="sort_theme" class="form-control" id="sort_theme">
								<option value="added_date">'.$l['date_added'].'</option>
								<option value="downloaded">'.$l['downloaded'].'</option>
							</select>
						</div>
						<div class="col-sm-6">		
							<center>'.$l['theme_is_optional'].'</center>
						</div>
						<div class="col-sm-2">
							<a class="btn btn-default pull-right" id="refresh_theme">'.$l['refresh'].'</a>
							<div id="sloading" style="display:none;">
								<center><img src="'.$theme['images'].'loading.gif" alt="Loading..." /></center>
							</div>
						</div>
					</div><br />
					
					<div class="row">
						<div style="height:280;">
							<div id="loading" style="display:block;z-index:99;">
								<center><img src="'.$theme['images'].'loading.gif" alt="Loading..." /></center>
							</div>
							<center><div id="display_theme" style="height:auto;"></div></center>
						</div>
					</div>
					
					<div class="row">
						<div class="col-sm-1">
							<span id="prevBtn"><a href="javascript:void(0);"></a></span>
						</div>
						<div class="col-sm-10">
							<center><div id="clear_theme" name="clear_theme" class="sai_searchbox_button" onclick="clear_theme();" style="display:none;">'.$l['clear_theme'].'</div></center>
						</div>
						<div class="col-sm-1">
							<span id="nextBtn"><a href="javascript:void(0);"></a></span>
						</div>	
					</div>
				</div>
			</div>
		</div>')).'\';
			
		var length;
		var deduct;
		var payment_timer;
		var dg;

		'.(!empty($owned_themes) ? 'owned_theme = new Array("'.implode('", "', array_values($owned_themes)).'");' : 'var owned_theme = new Array();').'

		var screen_width = $(window).width();

		if(screen_width < 1282 && screen_width > 982){
			length = 3;
			deduct = 3;
		}else if(screen_width < 982 && screen_width >802){
			length = 2;
			deduct = 2;
		}else if(screen_width < 802 && screen_width >770){
			length = 1;
			deduct = 1;
		}else if(screen_width < 770 && screen_width > 362){
			length = 2;
			deduct = 2;
		}else if(screen_width < 363 && screen_width > 200){
			length = 1;
			deduct = 1;
		}else{
			length = 4;
			deduct = 4;
		}

		'.(!empty($softpanel->pheader) ? ($softpanel->cp_theme == 'paper_lantern' ? 'length = 3;deduct = 3;' : 'length = 2;deduct = 2;') : '').'

		'.(empty($user['pfxapi_key']) ? 'var api_key = 0;' : 'var api_key = 1;').'
		'.(empty($globals['eu_themes_premium']) ? 'var premium = 0;' : 'var premium = "'.$globals['eu_themes_premium'].'";').'

		function sleep(milliseconds) {
		  var start = new Date().getTime();
		  for (var i = 0; i < 1e7; i++) {
			if ((new Date().getTime() - start) > milliseconds){
			  break;
			}
		  }
		}

		if(api_key == 0){
		 var csrf_token = $("#csrf_token").val();
		 $.ajax({
			type: "POST",
			data: "generate_apikey=1&ajax=1&csrf_token="+csrf_token,
			url: "'.$globals['index'].'act=my_themes&jsnohf=1",
			// Checking for error
			success: function(data){
				// Do nothing :)
			}
		 });
		}

		function show_pfx_div(){
			var current_html = $("#pfx_div").html();
			if(current_html == ""){
				$("#pfx_div").html(pfx_div);
				$("#pfx_div").show();
				theme_init();
			}
		}

		function show_pay(){
			
			//alert(arguments[0] +" -- "+arguments[1]+" -- "+arguments[2]+" -- "+arguments[3]);
			//alert($("#paypal_js").attr("src"))
			
			$("#display_theme").fadeOut(100);
			$("#loading").show();
			
			var csrf_token = $("#csrf_token").val();
			
			// We will have to create an order now
			$.ajax({
				type: "POST",
				data: "csrf_token="+csrf_token,
				url: window.location+"&generate_order=1&ajax=1&jsnohf=1&theme_id="+arguments[1],
				success: function(data){
					//alert(data)
					var order_id = JSON.parse(data);
					$("#custom").val(order_id);
					$("#loading").hide();
					$("#display_theme").fadeIn(100);
					//$("#pfxpay").bPopup();			
				}	
			});
			
			$.getScript("https://www.paypalobjects.com/js/external/dg.js", function( data, textStatus, jqxhr ) {
				//alert(data +" -- "+textStatus+" -- "+jqxhr)
				
				if(textStatus == "success"){
					dg = new PAYPAL.apps.DGFlow({
						// HTML ID of form submit buttons that call setEC
						trigger:"submit_pay",
						expType:"instant"
					});
				}
			});
			
			// Now set the variable for sending the data
			$("#item_name").val(arguments[0]);
			$("#item_number").val(arguments[1]);
			$("#amount").val(arguments[2]);
			$("#item_price").html(arguments[2]);
			select_theme(arguments[3]);
			
			$("#submit_pay").click(function(){
				
				/*var timer = setInterval(function() {   
					if(dg.isOpen() !== true) {  
						clearInterval(timer);  
						alert("closed");
					}  
				}, 30000);*/
				$("#pfxpay").bPopup().close();
			});
			
			$(".b-close").click(function(){
				
			});
		}

		function show_selected_theme(){
			
			var th_name = $("#theme_name").val();
			var th_id = $("#theme_id").val();
		
			//alert("'.$globals['s2api_pfx'].'theme_search.php?in=json&cversion='.(!empty($user['ins'][$insid]['ver']) ? $user['ins'][$insid]['ver'] : $software['ver']).'&cat='.(!is_int($software['has_theme']) ? $software['has_theme'] : $iscripts[$soft]['name']).'&q="+th_name+"&start=0&length=1&premium="+premium+"&callback=?")
			
			$.getJSON("'.$globals['s2api_pfx'].'theme_search.php?in=json&cversion='.(!empty($user['ins'][$insid]['ver']) ? $user['ins'][$insid]['ver'] : $software['ver']).'&cat='.(!is_int($software['has_theme']) ? $software['has_theme'] : $iscripts[$soft]['name']).'&q="+th_name+"&start=0&length=1&premium="+premium+"&callback=?",
				function (data) {
				
					// If there is no result found
					if(data.data == "NODATA"){
						data.data = new Array();
					}
					
					var soft_themes = \'<div id="slider"><div class="row">\';
					var new_li = 0;
					$.each(data.data, function (i, item) {
						
						if(item.name != undefined){
							soft_themes += \'<div class="row"><div class="sai_image_container" id="img_\'+new_li+\'" onmouseover="onthemeover(\'+new_li+\');" onmouseout="onthemeout(\'+new_li+\');" value="\'+item.pid+\'" theme_name="\'+item.softname+\'"><div class="sai_theme_header">\'+item.name+\'</div><img src="\'+data.img_url+item.pid+\'/\'+item.pid+\'_200.png" width="100%" height="100" class="img-responsive"><div class="sai_navigation" id="nav_\'+new_li+\'" style="display:none;"><span class="sai_demo"><a href="\'+item.demo_url+\'" target="_blank">'.addslashes($l['demo']).'</a></span></div></div></div>\';
							soft_themes += \'</div><div class="row"><input type="hidden" name="theme_id" id="theme_id" value="\'+item.pid+\'"><input type="hidden" name="theme_name" id="theme_name" value="\'+item.softname+\'"></div></div>\';
						}
						new_li += 1;
					});// end of each loop
			
					
					$("#display_theme").html(soft_themes);
					$(".sai_image_container").removeClass("sai_theme_selected");
					$(".sai_image_container").addClass("sai_theme_selected");
					$(function(){
						$(".sai_image_container, #select_this_theme").click(function(){
							$(".sai_image_container").removeClass("sai_theme_selected");
							if(this.id == "select_this_theme"){
								$("#"+$(this).attr("val")).addClass("sai_theme_selected");
								$("#theme_id").val($("#"+$(this).attr("val")).attr("value"));
								$("#theme_name").val($("#"+$(this).attr("val")).attr("theme_name"));
							}else{
								$(this).addClass("sai_theme_selected");
								$("#theme_id").val($(this).attr("value"));
								$("#theme_name").val($(this).attr("theme_name"));
							}						
						 })
					});
					
					$("#themesearch").bPopup().close();
				});
		}

		function clear_theme(){
			$(".sai_image_container").removeClass("sai_theme_selected");
			$("#theme_id").val("");
			$("#theme_name").val("");
			$("#clear_theme").hide();
			
			var sort_val = $("#sort_theme").val();
			show_list($("#prevBtn").val(), length, sort_val);
		}

		function onthemeover(id_no){
			$("#nav_"+id_no).show();
		}

		function onthemeout(id_no){
			$("#nav_"+id_no).hide();
		}

		var startpt;
		function search() {
			
			var query_value = $("input#themesearchstring").val();
			
			if(query_value.match(/[^a-zA-Z0-9_-\s]+/)){
				$("input#themesearchstring").val("");
				alert("'.$l['invalid_search_input'].'");
				return false;
			}
			
			$("b#search-string").html(query_value);
			
			if(startpt == undefined || startpt == ""){
				startpt = 0;
			}
			var top = 0;
			if(query_value === ""){
				top = 1;
			}
			
			$.getJSON("'.$globals['s2api_pfx'].'theme_search.php?in=json&cversion='.(!empty($user['ins'][$insid]['ver']) ? $user['ins'][$insid]['ver'] : $software['ver']).'&cat='.(!is_int($software['has_theme']) ? $software['has_theme'] : $iscripts[$soft]['name']).'&start="+startpt+"&length=20&q="+query_value+"&top="+top+"&premium="+premium+"&callback=?",
			function (data) {
				
				// If there is no result found
				if(data.data == "NODATA"){
					data.data = new Array();
				}
				
				var search_themes = \'<div id="slider"><table border="0" width="100%" height="200" cellspacing="5" cellpadding="3">\';
				var new_li = 0;
				$.each(data.data, function (i, item) {
					var you_own = "";
					if(item.name != undefined){
					
						var params = new Array();
						params[0] = "\'"+item.name+" - "+item.desc+"\'";
						params[1] = item.pid;
						params[2] = item.price;
						params[3] = "\'simg_"+new_li+"\'";
						
						//alert(item.pid+" -- "+ owned_theme+ " -- "+ $.inArray(item.pid, owned_theme) + " -- "+val_count(owned_theme, item.pid))
						if($.inArray(item.pid, owned_theme) !== -1){
							you_own = \'<img src="'.$theme['images'].'success.png" class="someclass" title="'.addslashes($l['your_purchased']).'(\'+val_count(owned_theme, item.pid)+\')'.addslashes($l['your_purchased_times']).'" alt="" height="22" width="22">\';
						}else{
							you_own = "&nbsp;";
						}
						
						if(item.price > 0){
							var price_lable = \'<td align="center" width="200"><table border="0" width="100%" cellpadding="0" cellspacing="0"><tr><td width="30%"><div class="sai_searchbox_button" onclick="show_pay(\'+params+\');"><span style="margin-right:20px">\'+you_own+\'</span><a href="javascript:void(0);" >'.addslashes($l['purchase']).'&nbsp;&nbsp;$\'+item.price+\'</a></div></td></tr></table></td>\';
						}else{
							var price_lable = \'<td align="center" width="20">&nbsp</td>\';
						}
						
						search_themes += \'<tr class="sai_tr_color"><td align="center" style="padding-left:10px;"><table border="0" width="100%" cellspacing="0" cellpadding="3"><tr><td width="180"><div class="sai_image_container" id="simg_\'+new_li+\'" value="\'+item.pid+\'" theme_name="\'+item.softname+\'" style="width:160px;height:175px;"><img src="\'+data.img_url+item.pid+\'/\'+item.pid+\'_200.png" width="150" height="150" ><div class="sai_navigation" id="snav_\'+new_li+\'" style="display:none;"><span class="sai_demo"><a href="\'+item.demo_url+\'" target="_blank">'.addslashes($l['demo']).'</a></span></div></div></td><td><table border="0" cellpadding="5" cellspacing="0" width="100%"><tr><td colspan="3"><b>\'+item.name+\'</b></td></tr><tr><td colspan="3" class="sai_search_description">\'+item.desc+\'</td></tr><tr><td colspan="3" class="sai_search_description">\'+item.overview+\'</td></tr><tr><td width="200"><div class="sai_searchbox_button" id="select_this_theme" val="simg_\'+new_li+\'">'.addslashes($l['use_this_theme']).'</div></td><td width="200"><a href="\'+item.demo_url+\'" target="_blank" style="text-decoration:none;"><div class="sai_searchbox_button">'.addslashes($l['demo']).'</div></a></td>\'+price_lable+\'</tr></table></td><td></td></tr><br /></table></td></tr>\';
					}
					new_li += 1;
				});// end of each loop

				search_themes += \'<tr><td><input type="hidden" name="theme_id" id="theme_id"><input type="hidden" name="theme_name" id="theme_name"></td></tr></table></div>\';
				$("#searchsuggestions").animate(0, "", function(){
					$("#searchsuggestions").html(search_themes);
						$(function(){
							$(".sai_image_container, #select_this_theme").click(function(){
								$(".sai_image_container").removeClass("sai_theme_selected");
								if(this.id == "select_this_theme"){
									$("#"+$(this).attr("val")).addClass("sai_theme_selected");
									$("#theme_id").val($("#"+$(this).attr("val")).attr("value"));
									$("#theme_name").val($("#"+$(this).attr("val")).attr("theme_name"));
									show_selected_theme();
									$("#clear_theme").css("display", "block");
								}else{
									$(this).addClass("sai_theme_selected");
									$("#theme_id").val($(this).attr("value"));
									$("#theme_name").val($(this).attr("theme_name"));
								}						
							 })
						});
				}).delay(0).animate({opacity: 1}, 300);
				
			}); // End of getJSON
		}

		var search_timer;

		$(document).on("keyup", "#themesearchstring", function(e) {
			
			//clearTimeout($.data(this, "timer"));
			var search_string = $(this).val();
			clearTimeout(search_timer);

			if (search_string == "") {
				$("ul#results").fadeOut();
				$("h4#results-text").fadeOut();
				$("#searchsuggestions").html("");
			}else{
				$("ul#results").fadeIn();
				$("h4#results-text").fadeIn();
				search_timer = setTimeout("search();", 200);
			};
		});

		function in_array(val, array){
																
			for (i=0; i <= array.length; i++){
				if (array[i] == val) {
					return true;
					// {alert(i +" -- "+ids[i]+" -- "+val);return i;}
				}
			}
			return false;
		}

		//function to display list of Themes
		function show_list(start, length, sort){
			
			//alert("'.$globals['s2api_pfx'].'category.php?in=json&cversion='.(!empty($user['ins'][$insid]['ver']) ? $user['ins'][$insid]['ver'] : $software['ver']).'&cat='.(!is_int($software['has_theme']) ? $software['has_theme'] : $iscripts[$soft]['name']).'&start="+start+"&length="+length+"&premium="+premium+"&callback=?&sort="+sort);
			$.getJSON("'.$globals['s2api_pfx'].'category.php?in=json&cversion='.(!empty($user['ins'][$insid]['ver']) ? $user['ins'][$insid]['ver'] : $software['ver']).'&cat='.(!is_int($software['has_theme']) ? $software['has_theme'] : $iscripts[$soft]['name']).'&start="+start+"&length="+length+"&premium="+premium+"&callback=?&sort="+sort, 
			function (data) {
				
				if (typeof(data.data)!="object" || typeof data.data == "undefined"){
					$("#display_theme").html("<center><span class=\'sai_newhead\'>'.$l['classes_con_failed'].'</span></center>");	
					$("#loading").hide();
					$("#display_theme").fadeIn(300);
					$("#nextBtn").css("display", "none");
					$("#prevBtn").css("display", "none");
				}
				$("#clear_theme").css("display", "none");
				$("#nextBtn").css("display", "block");
				$("#prevBtn").css("display", "block");
				
				var soft_themes = \'<div id="slider"><table border="0" width="100%" height="200" cellspacing="0" cellpadding="3"><tr>\';
				var new_li = 0;
				
				$.each(data.data, function (i, item) {
					
					soft_themes += \'<td align="center"><div class="sai_image_container" id="img_\'+new_li+\'" onmouseover="onthemeover(\'+new_li+\');" onmouseout="onthemeout(\'+new_li+\');" value="\'+item.pid+\'" theme_name="\'+item.softname+\'"><div class="sai_theme_header">\'+item.name+\'</div><img src="\'+data.img_url+item.pid+\'/\'+item.pid+\'_200.png" width="230" height="200" ><div class="sai_navigation" id="nav_\'+new_li+\'" style="display:none;"><span class="sai_demo"><a href="\'+item.demo_url+\'" target="_blank">'.addslashes($l['demo']).'</a></span></div></div></td>\';
					
					new_li += 1;
					
				});// end of each loop
				
				soft_themes += \'</tr><tr>\';
				var new_li = 0;
				
				$.each(data.data, function (i, item) {
					var you_own = "";
					if(item.name != undefined){
						var params = new Array();
						params[0] = "\'"+item.name+" - "+item.desc+"\'";
						params[1] = item.pid;
						params[2] = item.price;
						params[3] = "\'img_"+new_li+"\'";
						
						//alert(item.pid+" -- "+ owned_theme+ " -- "+ $.inArray(item.pid, owned_theme) + " -- "+val_count(owned_theme, item.pid))
						
						if($.inArray(item.pid, owned_theme) !== -1){
							you_own = \'<img src="'.$theme['images'].'success.png" class="someclass" title="'.addslashes($l['your_purchased']).'(\'+val_count(owned_theme, item.pid)+\')'.addslashes($l['your_purchased_times']).'" alt="" height="24" width="24">\';
						}else{
							you_own = "&nbsp;";
						}
						
						if(item.price > 0){
							soft_themes += \'<td align="center"><div class="sai_purchased blue" onclick="show_pay(\'+params+\');" data-toggle="modal" data-target="#pfxpay"><table border="0" width="95%"><tr><td width="25%">\'+you_own+\'</td><td width="60%"><a href="javascript:void(0);" >'.addslashes($l['purchase']).'&nbsp;&nbsp;$\'+item.price+\'</a></td></tr></table></div><br /></td>\';
						}else{
							soft_themes += \'<td align="center"><div class="sai_purchased blue"><table border="0" width="95%"><tr><td align="center" onclick="select_theme(\\\'img_\'+new_li+\'\\\');"><a href="javascript:void(0);"   id="select_theme">'.(!empty($globals['eu_themes_premium']) ? addslashes($l['free']) : addslashes($l['select'])).'</a></td></tr></table></div><br /></td>\';
						}
					}
					new_li += 1;
				});// end of each loop

				soft_themes += \'</tr><tr><td><input type="hidden" name="theme_id" id="theme_id"><input type="hidden" name="theme_name" id="theme_name"></td></tr></table></div>\';
				
				$("#loading").hide();
				
				$("#display_theme").animate(0, "", function(){
					$("#display_theme").html(soft_themes);
					$(function(){
						$(".sai_image_container").click(function(){
							$(".sai_image_container").removeClass("sai_theme_selected");
							$(this).addClass("sai_theme_selected");
							$("#theme_id").val($(this).attr("value"));
							$("#theme_name").val($(this).attr("theme_name"));
							$("#clear_theme").css("display", "block");
						 })
					});
				}).delay(0).animate({opacity: 1}, 300);
				
				
				
				$("#prevBtn").val(start);
				start = parseInt(start) + length;
				$("#nextBtn").val(start);
				
				if($("#prevBtn").val() <= 0){
					$("#prevBtn").css("display", "none");
				}else{
					$("#prevBtn").css("display", "block");
				}
				
				if(start == (data.count)){
					$("#nextBtn").css("display", "none");
				}
				
				// If we get the last data
				if(data.is_last == 1){
					$("#nextBtn").css("display", "none");
					$("#nextBtn").hide();
				}
				
				$("#display_theme").fadeIn(300);
				
				
			}); // end of get json function
			
			// If we dont get the api key for this user we will generate one !
			if(api_key == 0){
				
				/* $.ajax({
					type: "POST",
					data: "generate_apikey=1",
					url: "'.$globals['index'].'act=my_themes&jsnohf=1",
					// Checking for error
					success: function(data){
						// At the moment nothing to do !
					}
				 });*/
			}
		}//end of show list

		function get_purchased(){
			
			$("#refresh_theme").hide();
			$("#sloading").show();
			var sort_val = $("#sort_theme").val();
			var csrf_token = $("#csrf_token").val();
			$.ajax({
				type: "POST",
				data: "get_owned_theme=1&ajax=1&csrf_token="+csrf_token,
				url: "'.$globals['index'].'act=my_themes&jsnohf=1",
				// Checking for error
				success: function(data){
					owned_theme = data.split(",");
					//alert(owned_theme)
					$("#sloading").hide();
					$("#refresh_theme").show();
					show_list(0, length, sort_val);
				}
			 });
		}

		function select_theme(id){
			$(".sai_image_container").removeClass("sai_theme_selected");
			$("#"+id).addClass("sai_theme_selected");
			$("#theme_id").val($("#"+id).attr("value"));
			$("#theme_name").val($("#"+id).attr("theme_name"));
			$("#clear_theme").css("display", "block");
		}

		function theme_init(){
			
			//get_purchased();
			var sort_val = $("#sort_theme").val();
			show_list(0, length, sort_val);
			
			$("#prevBtn").click(function(){
				var tmp = parseInt($("#prevBtn").val());
				var sort_val = $("#sort_theme").val();
				$("#nextBtn").val(tmp);
				tmp = tmp - deduct;
				$("#prevBtn").val(tmp);
				$("#display_theme").fadeOut(100);
				$("#loading").show();
				show_list($("#prevBtn").val(), length, sort_val);
			});
			
			$("#nextBtn").click(function(){
				var tmp = parseInt($("#nextBtn").val());
				var sort_val = $("#sort_theme").val();
				$("#prevBtn").val(tmp);
				tmp = tmp + deduct;
				$("#nextBtn").val(tmp);
				$("#display_theme").fadeOut(100);
				$("#loading").show();
				show_list($("#prevBtn").val(), length, sort_val);
			});
			
			$("#search_theme").click(function(){
				$("#themesearch").bPopup();
				search();
			});
			$(".b-close").click(function(){
				$("#themesearchstring").val("");
			});
			
			$("#refresh_theme").click(function(){
				get_purchased();
			});
			
			$("#sort_theme").change(function(){
				var sort_val = $("#sort_theme").val();
				show_list(0, length, sort_val);
			});
			
			$(".someclass").tipTip();
		}

		$(document).ready(function(){
			show_pfx_div();
		});

		// ]]></script>
	';
}
				
				echo '
				<div class="bg info_block">
				
					<div class="sai_sub_head">'.$l['info'].'</div><hr style="border-color: #D1D2D3;">
				
					<div class="row">
						<div class="col-sm-5 col-xs-5">
							<span class="sai_head">'.$l['ins_softname'].'</span>
						</div>
						<div class="col-sm-6 col-xs-6">
							<span class="sai_info">'.$software['name'].'</span>
						</div>
					</div><br />
					
					<div class="row">
						<div class="col-sm-5 col-xs-5">
							<span class="sai_head">'.$l['ins_num'].'</span>
						</div>
						<div class="col-sm-6 col-xs-6">
							<span class="sai_info">'.$user['ins'][$insid]['insid'].'</span>
						</div>
					</div><br />
					
					<div class="row">
						<div class="col-sm-5 col-xs-5">
							<span class="sai_head">'.$l['ins_ver'].'</span>
						</div>
						<div class="col-sm-6 col-xs-6">
							<span class="sai_info">'.$user['ins'][$insid]['ver'].'</span>
						</div>
					</div><br />
					
					<div class="row">
						<div class="col-sm-5 col-xs-5">
							<span class="sai_head">'.$l['ins_time'].'</span>
						</div>
						<div class="col-sm-6 col-xs-6">
							<span class="sai_info">'.datify($user['ins'][$insid]['itime']).'</span>
						</div>
					</div><br />
			
					<div class="row">
						<div class="col-sm-5 col-xs-5">
							<span class="sai_head">'.$l['ins_path'].'</span>
						</div>
						<div class="col-sm-6 col-xs-6">
							<span class="sai_info">'.$user['ins'][$insid]['softpath'].'</span>
						</div>
					</div><br />
					
					<div class="row">
						<div class="col-sm-5 col-xs-5">
							<span class="sai_head">'.$l['ins_url'].'</span>
						</div>
						<div class="col-sm-6 col-xs-6">
							<span class="sai_info"><a href="'.$user['ins'][$insid]['softurl'].'" target="_blank">'.$user['ins'][$insid]['softurl'].'</a></span>
						</div>
					</div><br />';
			
					if(!empty($user['ins'][$insid]['admin_folder']) || !empty($scripts[$soft]['admin_url'])){
						$adminurl = $user['ins'][$insid]['softurl'].'/'.(!empty($user['ins'][$insid]['admin_folder']) ? $user['ins'][$insid]['admin_folder'] : $scripts[$soft]['admin_url']);
						echo'
						<div class="row">
							<div class="col-sm-5 col-xs-5">
								<span class="sai_head">'.$l['ins_admin_url'].'</span>
							</div>
							<div class="col-sm-6 col-xs-6">
								<span class="sai_info"><a href="'.$adminurl.'" target="_blank">'.$adminurl.'</a></span>
							</div>
						</div><br />';
					}
			
					echo'
					
					'.(empty($user['ins'][$insid]['wwwdir']) ? '' :'
						<div class="row">
							<div class="col-sm-5 col-xs-5">
								<span class="sai_head">'.$l['ins_wwwdir'].'</span>
							</div>
							<div class="col-sm-6 col-xs-6">
								<span class="sai_info">'.$user['ins'][$insid]['wwwdir'].'</span>
							</div>			
						</div><br />
					').'
					
					'.(empty($user['ins'][$insid]['wwwurl']) ? '' : '
						<div class="row">
							<div class="col-sm-5 col-xs-5">
								<span class="sai_head">'.$l['ins_wwwurl'].'</span>
							</div>
							<div class="col-sm-6 col-xs-6">
								<span class="sai_info">'.$user['ins'][$insid]['wwwurl'].'</span>
							</div>		
						</div><br />
					').'
					
					'.(empty($user['ins'][$insid]['softdatadir']) ? '' : '
						<div class="row">
							<div class="col-sm-5 col-xs-5">
								<span class="sai_head">'.$l['ins_datadir'].'</span>
							</div>
							<div class="col-sm-6 col-xs-6">
								<span class="sai_info">'.$user['ins'][$insid]['softdatadir'].'</span>
							</div>
						</div><br />
					').'	
					
					'.(empty($user['ins'][$insid]['softdb']) ? '' : '
						<div class="row">
							<div class="col-sm-5 col-xs-5">
								<span class="sai_head">'.$l['ins_db'].'</span>
							</div>
							<div class="col-sm-6 col-xs-6">
								<span class="sai_info">'.$user['ins'][$insid]['softdb'].'</span>
							</div>
						</div><br />
					').'	
					
					'.(empty($user['ins'][$insid]['softdbuser']) ? '' : '
						<div class="row">
							<div class="col-sm-5 col-xs-5">
								<span class="sai_head">'.$l['ins_dbuser'].'</span>
							</div>
							<div class="col-sm-6 col-xs-6">
								<span class="sai_info">'.$user['ins'][$insid]['softdbuser'].'</span>
							</div>
						</div><br />
					').'	
					
					'.(empty($user['ins'][$insid]['softdbhost']) ? '' : '
						<div class="row">
							<div class="col-sm-5 col-xs-5">
								<span class="sai_head">'.$l['ins_dbhost'].'</span>
							</div>
							<div class="col-sm-6 col-xs-6">
								<span class="sai_info">'.$user['ins'][$insid]['softdbhost'].'</span>
							</div>
						</div><br />
					').'	
					
					'.(empty($user['ins'][$insid]['cron_command']) ? '' : '
						<div class="row">
							<div class="col-sm-5 col-xs-5">
								<span class="sai_head">'.$l['ins_cron_command'].'</span>
							</div>
							<div class="col-sm-6 col-xs-6">
								<span class="sai_info">'.base64_decode($user['ins'][$insid]['cron_command']).'</span>
							</div>
						</div><br />
					
					').'	
				</div><!--end of bg class-->
				
				<br /><br />
				<p align="center">
					<input type="hidden" name="editins" id="editins" value="'.$l['editins'].'" />
					<input type="submit" name="softsubmitbut" class="flat-butt" id="softsubmitbut" value="'.$l['editins'].'"  />
				</p><br /><br />
				<center><b>'.$return.'</b></center><br /><br />					
			</div><!--end of bg class-->
			'.csrf_display().'
		</form><br /><br />';

if((!empty($globals['eu_enable_themes'])) && !empty($software['has_theme'])){
	echo '
	<div class="modal fade" id="pfxpay" role="dialog">
		<div class="modal-dialog modal-sm">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">'.$l['payment_heading'].'</h4>
				</div>
				<div class="modal-body" align="middle">
					<form action="'.$globals['paypal_url'].'" method="post" name="pay" id="pay">
						'.$l['payment_redirect'].'$<span id="item_price"></span><br /><br />
						<input type="hidden" name="cmd" value="_xclick">
						<input type="hidden" name="business" id="business" value="'.$globals['paypal_business'].'">
						<input type="hidden" name="return" id="return" value="'.$globals['paypal_return'].'">
						<input type="hidden" name="cancel_return" id="cancel_return" value="'.$globals['paypal_return'].'">
						<input type="hidden" name="notify_url" id="notify_url" value="'.$globals['paypal_return'].'">
						<input type="hidden" name="item_name" id="item_name" value="">
						<input type="hidden" name="item_number" id="item_number" value="">
						<input type="hidden" name="amount" id="amount" value="">
						<input type="hidden" name="custom" id="custom" value="">
						<input type="hidden" name="paymentaction" id="paymentaction" value="sale">
						<!--<input type="submit" class="tiny radius button" value="Buy now">-->
						<button type="submit" name="submit" style="border: 0; background: transparent; cursor:pointer" id="submit_pay">
							<img src="https://www.paypal.com/en_US/i/bnr/horizontal_solution_PPeCheck.gif" border="0" alt="Accepted Cards" style="width:100%;">
						</button>
					</form>
				</div>
				<div class="modal-footer">
				  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>	
		</div>
	</div>';
}
		
		echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
			$(document).ready(function(){
			
				$("#check_all_edit").on("click", function(event){
					if(this.checked == true){
						$(".soft_filelist").prop("checked", true);
					}else{
						$(".soft_filelist").prop("checked", false);
					}
				});
				
				$("#check_all_tables").on("click", function(event){
					if(this.checked == true){
						$(".soft_tablelist").prop("checked", true);
					}else{
						$(".soft_tablelist").prop("checked", false);
					}
				});
			
				$(".sai_altrowstable tr").mouseover(function(){
					var old_class = $(this).attr("class");
					//alert(old_class);
					$(this).attr("class", "sai_tr_bgcolor");
					
					$(this).mouseout(function(){
						$(this).attr("class", old_class);
					});
				});
				
			});
		// ]]></script>';
	
	}	
	
	softfooter();

}

?>