<?php

//////////////////////////////////////////////////////////////
//===========================================================
// a_apps_update _theme.php
//===========================================================
// SOFTACULOUS 
// Version : 7.9
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Rishi
// Date:       7th July 2016
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

function a_apps_update_theme(){

	global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $scripts;
	global $software, $soft, $a_apps, $info, $settings, $softins, $dbtype, $dbs, $upgraded, $__settings, $setupcontinue, $installations, $notes, $upgradableto, $ampps_apps_installed, $curr_running;
	
	// Give the staus
	if(optGET('ajaxstatus')){
		
		$_status = soft_progress(optGET('ajaxstatus'));
		
		$tmp_status = unserialize($_status[1]);
		$_status[1] = $tmp_status['current_status'];
		
		if(!empty($_status)){
			echo implode('|', $_status);
			return true;
		}
		
		// False call
		echo 0;
		return false;
	
	}
	
	softheader($l['ampps'].' Update '.$software['fullname']);
	
	echo '
	<div id="install_win">';
		
	if(empty($upgraded)){
	echo '
		<div id="fadeout_div">
			<form accept-charset="'.$globals['charset'].'" name="installsoftware" method="post" action="" onsubmit="return checkform();" id="installsoftware">
			
				<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
				
				function checkform(dosubmit){
					
					try{
						if(!formcheck() || !checkdbname(\'softdb\', true)){
							return false;
						}
					}catch(e){
						//Do nothing
					}
					$_("softsubmitbut").disabled = true;
					
					if(useprog){
						
						// Send a request to check the status
						progressbar.start();
						
						// Return false so that the form is not submitted
						return false;
					
					// This is OLD School !
					}else{		
						if(dosubmit == 1){			
							$_("installsoftware").submit();	
						}
						show_msg("'.$l['upgrading'].'");
					}
					return true;
				};
				
				var progressbar = {
					timer: 0,
					total_width: 0,	
					status_key: "",
					synctimer: 0,
					fadeout_div: "#fadeout_div",
					win_div: "#install_win",
					progress_div: "#progress_bar",
					formid: "#installsoftware",
					frequency: 8000,
					
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
						$.ajax({
							url: window.location+"&ajaxstatus="+progressbar.status_key+"&random="+Math.random(),
							type: "GET",
							success: function(data){
								if(data == 0) return false;
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
						
						
						try{
							var sid = 0;
							sid = $_("softbranch").value;
						}catch(e){ 
							var sid = 0;
						}
						
						$.ajax({
							url: window.location+"&jsnohf=1&softbranch="+sid,
							type: "POST",
							data: $(progressbar.formid).serialize(),
							complete: function( jqXHR, status, responseText ) {
								
								progressbar.sync_abort();
								
								// Store the response as specified by the jqXHR object
								responseText = jqXHR.responseText;
								
								try{
									//alert(responseText);
									if(responseText.match(/\<\!\-\-PROC_DONE\-\-\>/gi)){
										progressbar.text("'.addslashes($l['finishing_process']).'");
										progressbar.move(99, 10, "$(progressbar.progress_div).fadeOut(1)");
									}else{
										progressbar.reset();
									}
								}catch(e){ }
								
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
									}).delay(50).animate({opacity: 1}, 500,function(){
										if($("#setupcontinue_url").length > 0){
											$(".third_url").css({"border": "2px solid #FBDB0C", "width":"55%", "padding":"5px"});
											alert("'.$l['setup_partial'].'");
											$(".third_url").css({"border-color": "#fff", "transition":"60s"});
										}				
									});
									
									$.ajax({
										url: window.location+"&jsnohf=1&softbranch="+sid+"&bgupdate=1",
										complete: function( jqXHR, status, responseText ) {
											// Do nothing
										}
									});
									//alert(newhtml);
									
								}else{
									alert("Oops ... the connection was lost");
								}
							}
						});
					}
				};
				
				function show_msg(msg){	
					$_("show_txt").innerHTML = "<br /><br /> &nbsp; "+msg+" &nbsp; <img src=\"'.$theme['images'].'progress.gif\" />";
					$_("show_txt").style.display = "";
				}
				
				// Use the Progress Bar ?
				var useprog = 1;
				
				softemail = new Array();
				function softmail(){
					try{
						var sofdom = "softdomain";
						for(x in softemail){
							if(softemail[x] == true) continue;
							var temp = $_(x).value.split("@");
							$_(x).value = temp[0] + "@" + $_(sofdom).value;
						}
					}catch(e){
						return false;
					}
				};
				
				'.(!empty($_POST) ? '' : 'addonload(\'softmail();\');');
				
				echo '
				// ]]></script>';
			
			//If update is Available.
			if($software['version'] > $ampps_apps_installed[$soft]['version']){
			echo '
			<div class="bg"><br />
				<div class="row sai_main_head" style="width:100%;" align="center">
					<div class="col-sm-5 col-xs-5" style="padding:0 5px 0 0; text-align:right;">
						<i class="fa sai-sync fa-2x" style="color:#00A0D2;"></i>
					</div>
					<div class="col-sm-7 col-xs-7" style="padding-top:5px; padding-left:0; text-align:left;">
						'.$l['update'].'&nbsp'.$l['title'].'
					</div>
				</div><hr>
			
				<div class="row">
					<div class="col-sm-5 col-xs-5">
						<span class="sai_head">'.$l['app_name'].'</span>
					</div>
					<div class="col-sm-6 col-xs-6">
						<span class="sai_info"><a href="'.$globals[ind].'act=a_apps&app='.$soft.'" style="display:block; text-decoration:none;" " >'.$software['fullname'].'</a></span>
					</div>
				</div><br />
				
				<div class="row">
					<div class="col-sm-5 col-xs-5">
						<span class="sai_head">'.$l['i_version'].'</span>
					</div>
					<div class="col-sm-6 col-xs-6">
						<span class="sai_info">'.$ampps_apps_installed[$soft]['version'].'</span>
					</div>
				</div><br />
											
				<div class="row">
					<div class="col-sm-5 col-xs-5">
						<span class="sai_head">'.$l['l_version'].'</span>
					</div>
					<div class="col-sm-6 col-xs-6">
						<span class="sai_info">'.$software['version'].'</span>
					</div>
				</div><br />
									
				<div class="row">
					<div class="col-sm-5 col-xs-5">
						<span class="sai_head">'.$l['location'].'</span>
					</div>
					<div class="col-sm-6 col-xs-6">
						<span class="sai_info">'.$globals['ampps_path'].($globals['os'] == 'windows' ? '\\' : '/').$software['softname'].'</span>
					</div>
				</div><br /><br />
					
				<div class="row">
					<center><input type="hidden" name="softsubmit" id="softsubmit" value="'.$l['softsubmit'].'" />
						<input type="submit" name="softsubmitbut" class="flat-butt" id="softsubmitbut" value="'.$l['softsubmit'].'" /><span id="show_txt" style="display:none;"></span><br />
						<input type="hidden" name="soft_status_key" id="soft_status_key" value="'.POSTval('soft_status_key', generateRandStr(32)).'" />
					</center>
				</div><br />

				<center>
					<b><a href="'.$globals[ind].'act=ampps_apps" class="sai_head">'.$l['return'].'</a></b>
				</center><br />'.
				
				(ampps() && !is_ampps_premium() && empty($software['ins']) ? 		
				'<div class="alert alert-danger" align=center>'.lang_vars($l['ampps_notify_premium'], array($software['fullname'])).'</strong>
				</div>' : '').
				
				($globals['amp_version'] < '3.9' && !empty($curr_running) ? 
				'<div class="alert alert-danger" align=center>
					AMPPS 3.9 Required. </strong>
				</div>': '').'
								
			</div><!--end of bg class-->
			</form>
		</div>
	
		<div id="progress_bar" style="display: none; width: 100%;"><br />
			<div class="bg">
				<center>
					<div class="row sai_main_head" style="width:100%;" align="center">
						<div class="col-sm-5 col-xs-5" style="padding:0 10px 0 0; text-align:right;">
							<i class="fa sai-sync fa-2x" style="color:#00A0D2;"></i>
						</div>
						<div class="col-sm-7 col-xs-7" style="padding-top:10px; padding-left:0; text-align:left;">
							'.$l['prog_upgrading'].'&nbsp'.$software['fullname'].'
						</div>
					</div>
					<br />
					<font size="4" color="#222222" id="progress_txt" style="width: 100%;">'.$l['checking_data'].'</font>
					<font style="font-size: 18px;font-weight: 400;color: #444444; width: 100%;" id="progress_percent">(0 %)</font><br /><br />
				</center>
				<table width="500" cellpadding="0" cellspacing="0" id="table_progress" border="0" align="center" height="28" style="border:1px solid #CCC; -moz-border-radius: 5px;
			-webkit-border-radius: 5px; border-radius: 5px;background-color:#efefef; width: 50%;">
					<tr>
						<td id="progress_color" width="1" style="background-image: url('.$theme['images'].'bar.gif); -moz-border-radius: 4px; -webkit-border-radius: 4px; border-radius: 4px;"></td>
						<td id="progress_nocolor">&nbsp;</td>
					</tr>
				</table><br />
				<center>'.$l['wait_note'].'</center><br /><br />
			</div><!--end of bg class-->
		</div><br /><br />';
		}else{
		//If Update is Not Available.
		echo'	
		<div class="bg"><br />
			<div class="row sai_main_head" style="width:100%;" align="center">
				'.$software['fullname'].'
			</div><br>

			<div class="row" style="width:100%;" align="center">
				<div class="alert alert-success">
					<strong>'.$l['upto_date'].'</strong>&nbsp&nbsp'.$l['upto_date2'].'
				</div>
			</div>
		</div>';	
		}
	}
		
	if(!empty($upgraded)){
	echo '
	<div class="bg"><br />
						
		<h3>'.$l['congrats'].'</h3><br />
		'.$software['fullname'].' '.$l['succesful'].'<br />
		'.$l['enjoy'].'<br /><br />
		'.(!empty($notes) ? $l['install_notes'].' : <br />
		<div class="sai_notes">'.softparse($notes, $soft, 1).'</div><br /><br />' : '').'
		'.$l['please_note'].'<br /><br />
		'.$l['restart_ampps'].'<br /><br />
		'.$l['regards'].',<br />
		'.$l['softinstaller'].'<br /><br />
		
		<center><b><a href="'.$globals['ind'].'act=a_apps&app='.$soft.'">'.$l['return'].'</a></b></center><!--PROC_DONE--><br /><br />';
				if(empty($globals['upgrade_tweet_off']) || empty($globals['lictype'])){
					echo '
					<form method="get" action="http://twitter.com/intent/tweet" id="tweet" onsubmit="return dotweet(this);">
						<div class="panel panel-info" style="width:55%; margin:0 auto;">
							<div class="panel-heading" style="padding:5px;">
								<font size="+1"><b>'.$l['install_tweet_sub'].' :</b></font>
							</div>
							<div class="panel-body">
								<div class="row">
									<div class="col-sm-10">
										<textarea name="text" cols="80" row="3" style="resize:none; width:100%;">'.loadtweetdata('upgrade_tweet', $l['upgrade_tweet']).'</textarea>
									</div>
									<div class="col-sm-2 col-xs-2">
										<input type="submit" value="Tweet!" class="btn btn-info" onsubmit="return false;" id="twitter-btn" style="margin-top:20px;"/>
									</div>
								</div>
							</div>
						</div>
					</form>';
				}
			echo '
		</div><!--end of bg class--><!--PROC_DONE-->
		<br /><br /><br /><br />';
	}
	echo '
	</div>';
	softfooter();
}

?>