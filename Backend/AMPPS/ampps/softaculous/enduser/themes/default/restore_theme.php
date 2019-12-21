<?php

//////////////////////////////////////////////////////////////
//===========================================================
// restore_theme.php
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

function restore_theme(){

	global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $scripts, $_insid, $dbexist, $restored, $datadir, $wwwdir, $restoring;
	global $backups, $deleted, $soft, $backupinfo, $act;
	
	if(optREQ('ajax_restore') == 1){
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
	
	echo '
	<div id="install_win">
		<div class="bg" id="completed" style="display:none;"><br />
			<div class="alert alert-warning">
				<center><img src="'.$theme['images'].'notice.gif" /> &nbsp; '.(!empty($restoring) ? $l['restoring'] : $l['restore']).'</center>
			</div>
			<br />
			<center><b>'.$return.'</b></center><br /><br />
		</div>
		
		<div id="fadeout_div">
			<form accept-charset="'.$globals['charset'].'" name="restore" method="post" action="" onsubmit="return checkform();" id="restore">
			
				<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
				function checkform(dosubmit){
					var conf = confirm("'.$l['confirm_restore'].'");
					if(conf){
						$_("restorebtn").disabled = true;
						if(useprog){
					
							// Send a request to check the status
							progressbar.start();
							
							// Return false so that the form is not submitted
							return false;
						
							// This is OLD School !
						}
						
						return true;
					}else{
						return false;
					}
				}	
				
				var progressbar = {
					timer: 0,
					total_width: 0,	
					status_key: "",
					synctimer: 0,
					fadeout_div: "#fadeout_div",
					win_div: "#install_win",
					progress_div: "#progress_bar",
					formid: "#restore",
					frequency: 4000,
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
							this.timer = setTimeout("progressbar.move("+dest+", "+speed+")", speed);
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
									
									$("#restorebtn").removeAttr("disabled"); //Enabling submit button 			
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
				
				// ]]></script>
			
			
				<div class="bg"><br />
					<div class="row sai_main_head" style="width:100%;" align="center">
						<div class="col-sm-5 col-xs-5" style="padding:0 10px 0 0; text-align:right;">
							<i class="fa sai-restore fa-2x" style="color:#00A0D2;"></i>
						</div>
						<div class="col-sm-7 col-xs-7" style="padding-top:10px; padding-left:0; text-align:left;">'.$l['prog_restoring'].$iscripts[$soft]['name'].'</div>
					</div>
					<hr><br />';
					
					//To detect in javascript if the process is in background
					if(!empty($GLOBALS['backgrounding'])){
						echo '<div id="backgrounding"></div>';
					}
					
					echo error_handle($error, "100%", 0, 1);						
					
					echo '
					<div class="row">
						<div class="col-sm-5">
							<label class="sai_head">'.$l['restore_dir'].'</label><br />
							<span class="sai_exp2">'.$l['restore_dir_exp'].'</span>
						</div>
						<div class="col-sm-7">
							<input type="checkbox" name="restore_dir" '.POSTchecked('restore_dir', true).' value="1" />
						</div>
					</div><br />';
					
					// Web directory ?
					if(!empty($wwwdir)){
					
						echo '
						<div class="row">
							<div class="col-sm-5">
								<label class="sai_head">'.$l['restore_wwwdir'].'</label><br />
								<span class="sai_exp2">'.$l['restore_wwwdir_exp'].'</span>
							</div>
							<div class="col-sm-7">
								<input type="checkbox" name="restore_wwwdir" '.POSTchecked('restore_wwwdir', true).' value="1" />
							</div>
						</div><br />';		
					}
				
					// Data directory ?
					if(!empty($datadir)){
						
						echo '
						<div class="row">
							<div class="col-sm-5">
								<label class="sai_head">'.$l['restore_datadir'].'</label><br />
								<span class="sai_exp2">'.$l['restore_datadir_exp'].'</span>
							</div>
							<div class="col-sm-7">
								<input type="checkbox" name="restore_datadir" '.POSTchecked('restore_datadir', true).' value="1" />
							</div>
						</div><br />';	
					}
				
					if(!empty($dbexist)){
						
						echo '
						<div class="row">
							<div class="col-sm-5">
								<label class="sai_head">'.$l['restore_db'].'</label><br />
								<span class="sai_exp2">'.$l['restore_db_exp'].'</span>
							</div>
							<div class="col-sm-7">
								<input type="checkbox" name="restore_db" '.POSTchecked('restore_db', true).' value="1" />
							</div>
						</div><br />';		
					}
					
					echo '<br /><br />
					<p align="center">
						<input type="hidden" name="restore_ins" value="1" />
						<input type="hidden" name="soft_status_key" id="soft_status_key" value="'.POSTval('soft_status_key', generateRandStr(32)).'" />
						<input type="submit" name="restorebtn" class="flat-butt" id="restorebtn" value="'.$l['restore_ins'].'"  />
					</p>
					<br /><br />
					<center><b>'.$return.'</b></center><br /><br />				
				</div><br /><!--end of bg class-->
				'.csrf_display().'
			</form>
		</div>			
			
		<div id="progress_bar" style="display: none; width: 100%;">
			<br />
			<div class="bg">
				<center>
					<div class="row sai_main_head" style="width:100%;" align="center">
						<div class="col-sm-5 col-xs-5" style="padding:0 10px 0 0; text-align:right;">
							<i class="fa sai-restore fa-2x" style="color:#00A0D2;"></i>
						</div>
						<div class="col-sm-7 col-xs-7" style="padding-top:10px; padding-left:0; text-align:left;">'.$l['prog_restoring'].$iscripts[$soft]['name'].'</div>
					</div><br />
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
				<br /><center>'.$l['wait_note'].'</center><br />
				<center><b>'.$return.'</b></center><br /><br />
			</div>
		</div><br /><br />
	</div>';
	
	softfooter();

}

?>