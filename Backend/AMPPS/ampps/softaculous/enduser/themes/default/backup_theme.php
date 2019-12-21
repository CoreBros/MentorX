<?php

//////////////////////////////////////////////////////////////
//===========================================================
// backup_theme.php
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


function backup_theme(){

global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $act;
global $insid, $backing, $software, $soft, $completed, $cur_backups, $remote_location, $backup_count_per_script, $backing_up;

if(optREQ('ajax_backup') == 1){
	if(!empty($error)){
		echo current($error);
		return false;
	}else{
		echo 'success';
		return true;
	}
}

// Give the status
if(optGET('ajaxstatus')){
	
	$_status = soft_progress(optGET('ajaxstatus'));
	
	$tmp_status = _unserialize($_status[1]);
	$_status[1] = $tmp_status['current_status'];
	if(!empty($_status) && !array_key_exists('error', $tmp_status)){
		echo implode('|', $_status);
		return true;
	}
	
	if(array_key_exists('error', $tmp_status)){
		$_status = array();
		//r_print($tmp_status['error']);
		$return = error_handle($tmp_status['error'], "100%", 0, 1);
		echo 'error';
		echo array2json($return);
		//To prevent conflicting errors hence we deleting status file.
		soft_progress(optGET('ajaxstatus'), NULL, NULL);
		return false;
	}
	
	// False call
	echo 0;
	return false;
}

softheader($l['<title>']);

$return = '<a href="'.script_link($soft).'" class="sai_head">'.$l['return'].'</a>';
//Filter to customize the return to link
$return = apply_filters('return_link', $return, $act);

echo '<div id="install_win">
		<div class="bg" id="completed" style="display:none;"><br />
			<div class="alert alert-warning">
				<center><img src="'.$theme['images'].'notice.gif" /> &nbsp; '.lang_vars($l['backedup'], array($user['ins'][$insid]['softurl'])).'
				<center><b><a href="'.script_link($soft).'&highlight='.$insid.'&postact=backup"></a></b></center></center>
			</div>
			<br />
			<center><b>'.$return.'</b></center><br /><br />
		</div>

	<div id="fadeout_div">
<form accept-charset="'.$globals['charset'].'" name="editsettings" method="post" action="" class="form-horizontal" onsubmit="return checkform();" id="editsettings">

<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
	function checkform(dosubmit){
		$_("softsubmitbut").disabled = true;
		if(useprog){
	
			// Send a request to check the status
			progressbar.start();
			
			// Return false so that the form is not submitted
			return false;
		
			// This is OLD School !
		}
		return true;
	}
	
var progressbar = {
	timer: 0,
	total_width: 0,	
	status_key: "",
	synctimer: 0,
	fadeout_div: "#fadeout_div",
	win_div: "#install_win",
	progress_div: "#progress_bar",
	formid: "#editsettings",
	frequency: 4000,
	got_resp: 0,
	error: "",
	
	current: function(){
		try{
			var tmp_cur = Math.round(parseInt($_("progress_color").width)/parseInt($_("table_progress").width)*100);
			if(tmp_cur > 100){
				tmp_cur = 99;
			}
			return tmp_cur;
		}catch(e){
			return -1;	
		}
	},
	
	reset: function(){ try{
		clearTimeout(this.timer);
		$_("progress_color").width = 1;
		progressbar.got_resp = 0;
	}catch(e){ }},
	
	move: function(dest, speed, todo){ try{
		var cur = this.current();
		if(cur < 0){
			clearTimeout(this.timer);
			return false;
		}
		var cent = cur + 1;
		var new_width = cent/100*this.total_width;
		if(new_width < 1){
			new_width = 1;
		}
		//alert(new_width+" "+dest+" "+cent);
		
		$_("progress_color").width = new_width;
		$_("progress_percent").innerHTML = "("+cent+" %)";
		
		if(cent < dest){
			this.timer = setTimeout("progressbar.move("+dest+", "+speed+", \""+todo+"\")", speed);
		}else{
			eval(todo);	
		}
	}catch(e){ }},
	
	text: function(txt){ try{
		$_("progress_txt").innerHTML = txt;
	}catch(e){ }},
	
	sync: function(){
		if(progressbar.status_key.length < 2){
			return false;
		}
		
		$("#background_error").empty();
		
		$.ajax({
			url: window.location+"&ajaxstatus="+progressbar.status_key+"&random="+Math.random(),
			type: "GET",
			success: function(data){
				if(data == 0){
					progressbar.synctimer = setTimeout("progressbar.sync()", progressbar.frequency);
					return false;
				}
				
				var err = "";
				if(data.substring(0,5) == "error"){
					var error = data.substr(5);
					error = JSON.parse(error);
					var err = $(error).filter(\'#error_handler\');
				}
				
				var tmp = data.split("|");
				
				var cur = progressbar.current();
				tmp[2] = (3000/(tmp[0]-cur));
				//alert(tmp);
				if(tmp[0] > cur){
					if(parseInt(tmp[2]) == 0){
						tmp[2] = 800;
					}
					progressbar.move(tmp[0], tmp[2]);
				}
				progressbar.text(tmp[1]);
				
				//Checking if any error in background process
				if(err.length > 0){
					//alert("error");
					progressbar.error = 1;
					
					progressbar.reset();
					
					progressbar.sync_abort();	
					
					$(".sai_main_head").next("br").remove();
					
					linebreak = document.createElement("br");
					var newdiv = document.createElement("div");
					newdiv.id = "background_error";
					
					$(".sai_main_head").after(newdiv);
					
					$("#background_error").append(err);
					$(".sai_main_head").after(linebreak);
					
					$("#softsubmitbut").removeAttr("disabled"); //Enabling submit button 			
					$(progressbar.progress_div).fadeOut(1, 
					function(){
						$(progressbar.fadeout_div).fadeOut(1);
						$(progressbar.fadeout_div).fadeIn(500);
					});
					
					return false;	//Stop javascript execution
				}
				
				//Checking if pogressbar is completed for backgrounding
				if(tmp[0] == 100){
					progressbar.sync_abort();	
					progressbar.text("'.addslashes($l['finishing_process']).'");
					progressbar.move(99, 10);
					$(progressbar.progress_div).fadeOut(1200, function(){
						$("#completed").fadeIn(1);
					});
					
					return false; //Stop javascript execution
					
				}
				progressbar.synctimer = setTimeout("progressbar.sync()", progressbar.frequency);
			}
		});
	},
	
	sync_abort: function(){
		clearTimeout(this.synctimer);
	},
	
	start: function(){ try{
		this.post();
		this.reset();
		this.total_width = parseInt($_("table_progress").width);
		this.move(95, 800);
		this.status_key = $("#soft_status_key").attr("value");
		this.sync();
	}catch(e){ }},
	
	post: function(){
		
		// Scroll to the Top and show the progress bar
		goto_top();
		$(progressbar.fadeout_div).fadeOut(500, 
			function(){
				$(progressbar.progress_div).fadeOut(1);
				$(progressbar.progress_div).fadeIn(500);
			}
		);
		
		var progress_text = $("#progress_txt").text();
		if(progress_text == "undefined" || progress_text == null){
			$("#progress_txt").text("'.$l['checking_data'].'");	
		}
		
		$.ajax({
			url: window.location+"&jsnohf=1",
			type: "POST",
			data: $(progressbar.formid).serialize(),
			complete: function( jqXHR, status, responseText ) {
				
				//Handling when resubmiting the form with error in background(progress div was also visible when resubmiting form with error).
				if(progressbar.error == 1){
					if ($(progressbar.fadeout_div).is(":visible")){
						$(progressbar.progress_div).hide();
					}
				}
				
				// Store the response as specified by the jqXHR object
				responseText = jqXHR.responseText;
				
				try{
					//alert(responseText);
					if(responseText.match(/\<\!\-\-PROC_DONE\-\-\>/gi)){
						progressbar.text("'.addslashes($l['finishing_process']).'");
						progressbar.move(99, 10, "$(progressbar.progress_div).fadeOut(1)");
					}
				}catch(e){ }
				
				var backgrounding = $(responseText).find("#backgrounding");
									
				//Check if the process is going into background
				if(backgrounding.length > 0){
					progressbar.backgrounding = 1;
					if ( jqXHR.state() == "resolved" ) {
					}else{
						alert("Oops ... the connection was lost");
					}
				}else{
					if ( jqXHR.state() == "resolved" ) {
					
						// #4825: Get the actual response in case
						// a dataFilter is present in ajaxSettings
						jqXHR.done(function( r ) {
							responseText = r;
						});
						//alert(responseText);
						// Create a dummy div to hold the results
						// inject the contents of the document in, removing the scripts
						// to avoid any "Permission Denied" errors in IE
						var newhtml = jQuery("<div>").append(responseText).find(progressbar.win_div).html();
						
						$(progressbar.win_div).animate({opacity: 0}, 1000, "", function(){
							$(progressbar.win_div).html(newhtml);
							new_theme_funcs_init();
						}).delay(50).animate({opacity: 1}, 500);
						
						//alert(newhtml);
						
					}else{
						alert("Oops ... the connection was lost");
					}
				}
			}
		});
	}
};
	
// Use the Progress Bar ?
var useprog = 1;
try{
	if(BrowserDetect.browser.toLowerCase() == "safari" && BrowserDetect.version.toString().substr(0, 1) == "3"){
		useprog = 0;
	}
}catch(e){ }


// ]]></script>';

echo '<div class="bg"><br />
		<div class="row sai_main_head" style="width:100%;" align="center">
			<div class="col-sm-6 col-xs-5" style="padding:0 10px 0 0; text-align:right;">
				<i class="fa sai-backup fa-2x" style="color:#00A0D2;"></i>
			</div>
			<div class="col-sm-6 col-xs-7" style="padding-top:10px; padding-left:0; text-align:left;">'.$l['prog_backingup'].$software['name'].'</div>
		</div><br />';
		
		//To detect in javascript if the process is in background
		if(!empty($GLOBALS['backgrounding'])){
			echo '<div id="backgrounding"></div>';
		}
		
		if(!empty($globals['backups_expire'])){
			echo '<br /><div class="alert alert-warning">
					<a href="#close" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<center>'.lang_vars($l['backups_expire'], array($globals['backups_expire'])).'</center>
				</div>';
		}
		
		if(!empty($globals['max_backups'])){
			echo '<div class="alert alert-warning">
				<a href="#close" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				<center>'.lang_vars($l['max_backups'], array($cur_backups, $globals['max_backups'])).'</center>
			</div>';
		}
		
		//Maximum Backup Limit per script
		if(!empty($globals['max_backup_script']) && $backup_count_per_script >= $globals['max_backup_script']){
			echo '<br />
			<div class="alert alert-warning">
				<a href="#close" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				<center>'.lang_vars($l['error_max_backup_script'], array($globals['max_backup_script'])).'</center>
			</div>';	
		} 
		
		echo error_handle($error, "100%", 0, 1);
		
		echo '
		<div style="padding-left:20px; padding-right:20px;">
			<div class="sai_sub_head">'.$l['backup_operation'].'</div><hr>
			<div class="row">
				<div class="col-sm-5">
					<label class="sai_head">'.$l['backup_dir'].'</label>
					<span class="sai_exp">'.$l['backup_dir_exp'].'</span>
				</div>
				<div class="col-sm-7">
					<input type="checkbox" name="backup_dir" '.POSTchecked('backup_dir', true).' />
				</div>
			</div><br />';
			
			// Web Directory (For Perl) @since 3.5
			if(!empty($user['ins'][$insid]['wwwdir'])){
				echo '
				<div class="row">
					<div class="col-sm-5">
						<label class="sai_head">'.$l['backup_wwwdir'].'</label>
						<span class="sai_exp">'.$l['backup_wwwdir_exp'].'</span>
					</div>
					<div class="col-sm-7">
						<input type="checkbox" name="backup_wwwdir" '.POSTchecked('backup_wwwdir', true).' />
					</div>
				</div><br />';
			}
			
			// Data directory ?
			if(!empty($user['ins'][$insid]['softdatadir'])){
				echo '
				<div class="row">
					<div class="col-sm-5">
						<label class="sai_head">'.$l['backup_datadir'].'</label>
						<span class="sai_exp">'.$l['backup_datadir_exp'].'</span>
					</div>
					<div class="col-sm-7">
						<input type="checkbox" name="backup_datadir" '.POSTchecked('backup_datadir', true).' />
					</div>
				</div><br />';
			}
			
			if(!empty($user['ins'][$insid]['softdb'])){
				echo '
				<div class="row">
					<div class="col-sm-5">
						<label class="sai_head">'.$l['backup_db'].'</label>
						<span class="sai_exp">'.$l['backup_db_exp'].'</span>
					</div>
					<div class="col-sm-7">
						<input type="checkbox" name="backup_db" '.POSTchecked('backup_db', true).' />
					</div>
				</div><br />';
			}
			// Backup note
			echo '<div class="row">
					<div class="col-sm-5">
						<label for="backup_note" class="sai_head">'.$l['backup_note'].'</label>
						<span class="sai_exp">'.$l['backup_note_exp'].'</span>
					</div>
					<div class="col-sm-7">
						<input type="text" name="backup_note" id="backup_note" class="form-control" '.POSTval('backup_note', '').' size="50" maxlength="255"/>
					</div>
				</div><br />';
			
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
			
		echo '</div>
		
		<div class="bg info_block">
			<div class="sai_sub_head">'.$l['info'].'</div><hr style="border-color: #D1D2D3;">
			<div class="row">
				<div class="col-sm-5">
					<span class="sai_head">'.$l['ins_softname'].'</span>
				</div>
				<div class="col-sm-6">
					<span class="sai_info">'.$software['name'].'</span>
				</div>
			</div><br />
			
			<div class="row">
				<div class="col-sm-5">
					<span class="sai_head">'.$l['ins_num'].'</span>
				</div>
				<div class="col-sm-6">
					<span class="sai_info">'.$user['ins'][$insid]['insid'].'</span>
				</div>
			</div><br />
			
			<div class="row">
				<div class="col-sm-5">
					<span class="sai_head">'.$l['ins_ver'].'</span>
				</div>
				<div class="col-sm-6">
					<span class="sai_info">'.$user['ins'][$insid]['ver'].'</span>
				</div>
			</div><br />
			
			<div class="row">
				<div class="col-sm-5">
					<span class="sai_head">'.$l['ins_time'].'</span>
				</div>
				<div class="col-sm-6">
					<span class="sai_info">'.datify($user['ins'][$insid]['itime']).'</span>
				</div>
			</div><br />
			
			<div class="row">
				<div class="col-sm-5">
					<span class="sai_head">'.$l['ins_path'].'</span>
				</div>
				<div class="col-sm-6">
					<span class="sai_info">'.$user['ins'][$insid]['softpath'].'</span>
				</div>
			</div><br />
			
			<div class="row">
				<div class="col-sm-5">
					<span class="sai_head">'.$l['ins_url'].'</span>
				</div>
				<div class="col-sm-6">
					<span class="sai_info"><a href="'.$user['ins'][$insid]['softurl'].'" target="_blank">'.$user['ins'][$insid]['softurl'].'</a></span>
				</div>
			</div><br />
			'.(empty($user['ins'][$insid]['wwwdir']) ? '' :'
				<div class="row">
					<div class="col-sm-5">
						<span class="sai_head">'.$l['ins_wwwdir'].'</span>
					</div>
					<div class="col-sm-6">
						<span class="sai_info">'.$user['ins'][$insid]['wwwdir'].'</span>
					</div>
				</div><br />
			').'
			
			'.(empty($user['ins'][$insid]['softdatadir']) ? '' : '
				<div class="row">
					<div class="col-sm-5">
						<span class="sai_head">'.$l['ins_datadir'].'</span>
					</div>
					<div class="=col-sm-6">
						<span class="sai_info">'.$user['ins'][$insid]['softdatadir'].'</span>
					</div>
				</div><br />
			').'	
			
			'.(empty($user['ins'][$insid]['softdb']) ? '' : '
				<div class="row">
					<div class="col-sm-5">
						<span class="sai_head">'.$l['ins_db'].'</span>
					</div>
					<div class="col-sm-6">
						<span class="sai_info">'.$user['ins'][$insid]['softdb'].'</span>
					</div>
				</div><br />
			').'	
			
			'.(empty($user['ins'][$insid]['softdbuser']) ? '' : '
				<div class="row">
					<div class="col-sm-5">
						<span class="sai_head">'.$l['ins_dbuser'].'</span>
					</div>
					<div class="col-sm-6">
						<span class="sai_info">'.$user['ins'][$insid]['softdbuser'].'</span>
					</div>
				</div><br />
			').'	
			
			'.(empty($user['ins'][$insid]['softdbhost']) ? '' : '
				<div class="row">
					<div class="col-sm-5">
						<span class="sai_head">'.$l['ins_dbhost'].'</span>
					</div>
					<div class="col-sm-6">
						<span class="sai_info">'.$user['ins'][$insid]['softdbhost'].'</span>
					</div>
				</div><br />
			').'	
			
			'.(empty($user['ins'][$insid]['cron_command']) ? '' : '
				<div class="row">
					<div class="col-sm-5">
						<span class="sai_head">'.$l['ins_cron_command'].'</span>
					</div>
					<div class="col-sm-6">
						<span class="sai_info">'.base64_decode($user['ins'][$insid]['cron_command']).'</span>
					</div>
				</div><br />			
			');
			
			if(!empty($remote_location) && empty($globals['off_rbackup'])){
				echo '
				<div class="row">
					<div class="col-sm-5">
						<span class="sai_head">'.$l['backup_location_name'].'</span>
					</div>
					<div class="col-sm-6">
						<span class="sai_info">'.$remote_location['name'].'</span>
					</div>
				</div><br />';
			}
			
		echo '</div><!--end of bg class-->
	
		<br /><br />
		<p align="center">
			<input type="hidden" name="backupins" id="backupins" value="'.$l['backup_ins'].'" />
			<input type="submit" name="softsubmitbut" class="flat-butt" id="softsubmitbut" value="'.$l['backup_ins'].'"  />
		</p>
		<br /><br />
		<center><b>'.$return.'</b></center><br /><br />
		<input type="hidden" name="soft_status_key" id="soft_status_key" value="'.POSTval('soft_status_key', generateRandStr(32)).'" />

	</div><br /><!--end of bg class-->
	'.csrf_display().'
</form></div>

<div id="progress_bar" style="display: none; width: 100%;">
	<br />
	<div class="bg">
	
		<div class="row sai_main_head" style="width:100%;" align="center">
			<div class="col-sm-5 col-xs-5" style="padding:0 10px 0 0; text-align:right;">
				<i class="fa sai-backup fa-2x" style="color:#00A0D2;"></i>
			</div>
			<div class="col-sm-7 col-xs-7" style="padding-top:10px; padding-left:0; text-align:left;">'.$l['prog_backingup'].$software['name'].'</div>
		</div><br />
		
		<div class="alert alert-warning" id="stat_txt">
			<center><img src="'.$theme['images'].'notice.gif" /> &nbsp; '.lang_vars($l['backingup'], array($user['ins'][$insid]['softurl'])).'</center>
		</div>
		
		<br /><br />
		<center>
		<font size="4" color="#222222" id="progress_txt" style="width: 100%;">'.$l['checking_data'].'</font>
		<font style="font-size: 18px;font-weight: 400;color: #444444; width: 100%;" id="progress_percent">(0 %)</font><br /><br />
		</center>
		<table width="500" cellpadding="0" cellspacing="0" id="table_progress" border="0" align="center" height="28" style="border:1px solid #CCC; -moz-border-radius: 5px;
		-webkit-border-radius: 5px; border-radius: 5px; width: 50%;">
			<tr>
				<td id="progress_color" width="1" style="background-image: url('.$theme['images'].'bar.gif); -moz-border-radius: 4px; -webkit-border-radius: 4px; border-radius: 4px;"></td>
				<td id="progress_nocolor">&nbsp;</td>
			</tr>
		</table>
		<br /><center>'.$l['wait_note'].'</center><br /><br />
	</div>
</div><br /><br />';

echo '</div>';

softfooter();

}

?>