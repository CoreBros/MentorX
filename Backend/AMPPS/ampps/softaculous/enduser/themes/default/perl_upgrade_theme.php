<?php

//////////////////////////////////////////////////////////////
//===========================================================
// upgrade_theme.php
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


function perl_upgrade_theme(){

	global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $scripts;
	global $software, $soft, $info, $settings, $softins, $dbtype, $dbs, $upgraded, $__settings, $setupcontinue, $installations, $notes;
	
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
	
	softheader($l['<title>'].$software['name']);
	echo '
	<div id="install_win">';
	
		//First add the installation info
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
							show_msg("'.$l['installing'].'");
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
							
							$.ajax({
								url: window.location+"&jsnohf=1",
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
										}).delay(50).animate({opacity: 1}, 500);
										
										//alert(newhtml);
										
									}else{
										alert("Oops ... the connection was lost");
									}
								}
							});
						}
					};
					
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
		
		
		
					echo '
					<div class="bg"><br />
						<div class="row sai_main_head" style="width:100%;" align="center">
							<div class="col-sm-5 col-xs-5" style="padding:0 10px 0 0; text-align:right;">
								<i class="fa sai-sync fa-2x" style="color:#00A0D2;"></i>
							</div>
							<div class="col-sm-7 col-xs-7" style="padding-top:10px; padding-left:0; text-align:left;">'.$l['prog_upgrading'].$scripts[$softins['sid']]['name'].'</div>
						</div><hr>';
		
						if(empty($globals['lictype']) && !empty($scripts[$soft]['force_scripts'])){	
							echo '<br />
							<div class="alert alert-warning">
								<a href="#close" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								<center>'.lang_vars($l['not_in_free'], array($software['name'])).(!webuzo() ? '&nbsp;&nbsp;'.$l['notify_admin'] : '').'</center>
							</div>';
						}
					
						echo error_handle($error, "100%", 0, 1);
		
						echo '
						<div class="row">
							<div class="col-sm-5 col-xs-5">
								<span class="sai_head">'.$l['softins_url'].'</span>
							</div>
							<div class="col-sm-6 col-xs-6">
								<span class="sai_info"><a href="'.$softins['softurl'].'" target="_blank">'.$softins['softurl'].'</a></span>
							</div>
						</div><br />
							
						<div class="row">
							<div class="col-sm-5 col-xs-5">
								<span class="sai_head">'.$l['softins_path'].'</span>
							</div>
							<div class="col-sm-6 col-xs-6">
								<span class="sai_info">'.$softins['softpath'].'</span>
							</div>
						</div><br />';
		
		
						if(!empty($settings)){
							
							if(file_exists($software['path'].'/upgrade.js')){
								echo '<script language="javascript" type="text/javascript"><!--// --><![CDATA[';
								echo @parselanguages(str_replace('$(', '$_(', implode('', file($software['path'].'/upgrade.js'))));
								echo '// ]]></script>';
							}
						
							foreach($settings as $group => $sets){
								
								if($group == 'hidden') continue;
							
								echo '<br /><br />
								<div class="bg">
									<div class="sai_sub_head">'.$group.'</div><hr>';
						
									foreach($sets as $sk => $sv){
										
										// Adding class form-control
										if(preg_match('/type="text"/is', $sv['tag'])){
											$sv['tag'] = preg_replace('/>/is', ' class="form-control">',$sv['tag']);
										}
										if(preg_match('/<select/is', $sv['tag'])){
											$sv['tag'] = preg_replace('/<select/is', '<select class="form-control"',$sv['tag']);
										}
								
										echo '
										<div class="row">
											<div class="col-sm-5">
												<label for="dbusername" class="sai_head">'.$sv['head'].'</label>
												'.(empty($sv['exp']) ? '' : '<br /><span class="sai_exp">'.$sv['exp'].'</span>').'
											</div>
											<div class="col-sm-7">
												'.$sv['tag'].'
												'.(preg_match('/softmail/is', $sv['tag']) ? '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
												softemail["'.$sk.'"] = false;
												//Add an event handler
												$_("'.$sk.'").onkeydown = function(){
													softemail["'.$sk.'"] = true;
												}
												// ]]></script>
												' : '').'
											</div>
										</div>';
											
									}
								echo '
								</div><br /><!---end of bg class--->';
							
							}
						
							//The Hidden groups 
							if(!empty($settings['hidden'])){
							
								foreach($settings['hidden'] as $sk => $sv){
							
									echo $sv['tag'].'
									'.(preg_match('/softmail/is', $sv['tag']) ? '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
									softemail["'.$sk.'"] = false;
									//Add an event handler
									$_("'.$sk.'").onkeydown = function(){
										softemail["'.$sk.'"] = true;
									}
									// ]]></script>
									' : '');
						
								}
							
							}
						
						}//End of if($settings)
		
		
						//Is it a SOFTCOPY, then Leave a NOTE
						if(!empty($setupcontinue)){
							echo '<br /><br />
							<div class="row" style="padding-left:15px;">
								<label class="sai_head">'.$l['softcopy_note'].'</label>
							</div><br />';
						}
						
						echo '
						<div class="row" style="padding-left:15px;">
							<label class="sai_head">'.lang_vars($l['note_backup'], array($softins['insid'])).'</label>
						</div><br />';
		
		
						echo '
						<p align="center">
							<input type="hidden" name="softsubmit" id="softsubmit" value="'.$l['softsubmit'].'" />
							<input type="submit" name="softsubmitbut" class="flat-butt" id="softsubmitbut" value="'.$l['softsubmit'].'" /><span id="show_txt" style="display:none;"></span>
						</p><br /><br />
								
						<input type="hidden" name="soft_status_key" id="soft_status_key" value="'.POSTval('soft_status_key', generateRandStr(32)).'" />								
						<center><b><a href="'.script_link($soft).'" class="sai_head">'.$l['return'].'</a></b></center><br /><br />		
					</div><br /><!--end of bg class-->
				</form>
			</div>
		
			<div id="progress_bar" style="display: none; width: 100%;">
				<br />
				<div class="bg">
					<center>
						<div class="row sai_main_head" style="width:100%;" align="center">
							<div class="col-sm-5 col-xs-5" style="padding:0 10px 0 0; text-align:right;">
								<i class="fa sai-sync fa-2x" style="color:#00A0D2;"></i>
							</div>
							<div class="col-sm-7 col-xs-7" style="padding-top:10px; padding-left:0; text-align:left;">'.$l['prog_upgrading'].$scripts[$softins['sid']]['name'].'</div>
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
					</table>
					<br /><center>'.$l['wait_note'].'</center><br /><br />
				</div>
			</div><br /><br />';
		
		}elseif(!empty($upgraded)){
		
			echo '
			<div class="bg2"><h4>'.$l['congrats'].'</h4><br />
				'.$software['name'].' '.$l['succesful'].' : <br />
				<a href="'.$__settings['softurl'].'" target="_blank">'.$__settings['softurl'].'</a>
				'.(!empty($software['adminurl']) ? '<br />'.$l['admin_url'].' : <a href="'.$__settings['softurl'].'/'.$software['adminurl'].'" target="_blank">'.$__settings['softurl'].'/'.$software['adminurl'].'</a>' : '').'<br /><br />
				'.(!empty($setupcontinue) ? $l['setup_continue'].' : <br />
				<a href="'.$__settings['softurl'].'/'.$setupcontinue.'" target="_blank">'.$__settings['softurl'].'/'.$setupcontinue.'</a><br /><br />' : '').'
				'.$l['enjoy'].'<br /><br />
				'.(!empty($notes) ? $l['upgrade_notes'].' : <br />
				<div class="sai_notes">'.softparse($notes, $soft).'</div><br /><br />' : '').'
				'.$l['please_note'].'<br /><br />
				'.$l['regards'].',<br />
				'.$l['softinstaller'].'<br /><br />';
		
				if(empty($globals['upgrade_tweet_off']) || empty($globals['lictype'])){
					echo '
					<form method="get" action="http://twitter.com/intent/tweet" id="tweet" onsubmit="return dotweet(this);">
						<div class="panel panel-info" style="width:55%; margin:0 auto;">
							<div class="panel-heading" style="padding:5px; font-size:15px;">
								<font><b>'.$l['upgrade_tweet_sub'].' :</b></font>
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
			<br /><br />';
		
		}
	
	echo '
	</div>';
	
	softfooter();

}

?>