<?php

//////////////////////////////////////////////////////////////
//===========================================================
// sclone_theme.php
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


function sclone_theme(){

	global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $scripts;
	global $software, $soft, $info, $settings, $init_tab, $dbtype, $dbs, $installed, $__settings, $setupcontinue, $installations, $notes, $cron, $datadir, $ajaxdb, $ajaxdbexists, $overwrite_option, $protocols, $nopackage, $can_publish, $not_default, $child, $install_option, $multi_ver, $child_sids, $installation_keys, $no_autoupgrade, $ajaxhttpsexists, $ajaxhttps, $insid, $cloned, $new_insid, $clone_count_per_script, $act;
	
	if(optGET('ajaxdownload') && !empty($nopackage)){	
		
		// Try to download the package
		if(method_exists($softpanel, 'updatesoftwares')){
			$softpanel->updatesoftwares($soft, 0, 0, 1);
			echo 1;
			return true;
		}
		
		// False call
		echo 0;
		return false;
	
	}
	
	// Give the status
	if(optGET('ajaxstatus')){
		
		$_status = soft_progress(optGET('ajaxstatus'));
		
		$tmp_status = _unserialize($_status[1]);
		$_status[1] = $tmp_status['current_status'];
		
		//Update variables in backgrounding
		if(!empty($tmp_status['update_variables'])){
			$_status[] = array2json($tmp_status['update_variables']);
			//r_print($_status);
		}
		
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
	
	if(!empty($ajaxdb)){
		echo $ajaxdbexists;
		return true;
	}
	
	if(!empty($ajaxhttps)){
		echo $ajaxhttpsexists;
		return true;
	}
	
	softheader($l['<title>']);
		
		$return = '<a href="'.script_link($soft).'&highlight='.$new_insid.'&postact=clone" class="sai_head">'.$l['return'].'</a>';
		//Filter to customize the return to link
		$return = apply_filters('return_link', $return, $act);
		
		// Check if the script supports Sign On
		$has_sign_on = has_sign_on($soft);
	
		echo '
		<div class="bg" id="completed" '.(empty($cloned) ? 'style="display:none;"' : '').'>
			<h4>'.$l['congrats'].'</h4>
			'.$software['name'].' '.$l['succesful'].' : <br />
			<a id="insurl" href="'.$__settings['softurl'].'" target="_blank">'.$__settings['softurl'].'</a>
			'.(!empty($software['adminurl']) ? '<br />'.$l['admin_url'].' : <a id="adminurl" href="'.(empty($globals['disable_sign_on']) && !empty($has_sign_on) ? $globals['ind'].'act=sign_on&insid='.$new_insid.'&autoid='.srandstr(32) : $__settings['softurl'].'/'.$software['adminurl']).'" target="_blank">'.$__settings['softurl'].'/'.$software['adminurl'].'</a>' : '').'<br /><br />
			<div class="setupcontinue">'.(!empty($setupcontinue) || empty($cloned) ? $l['setup_continue'].' : <br />
			<a id="setupcontinue" href="'.$__settings['softurl'].'/'.$setupcontinue.'" target="_blank">'.$__settings['softurl'].'/'.$setupcontinue.'</a><br /><br />' : '').'</div>
			'.$l['enjoy'].'<br /><br />
			'.(!empty($notes) ? $l['install_notes'].' : <br />
			<div class="sai_notes">'.softparse($notes, $soft).'</div><br /><br />' : '').'
			'.$l['please_note'].'<br /><br />
			'.$l['regards'].',<br />
			'.$l['softinstaller'].'<br /><br />
			<center><b>'.$return.'</b></center><br /><br />';
		
			if(empty($globals['clone_tweet_off']) || empty($globals['lictype'])){
				echo '
				<form method="get" action="http://twitter.com/intent/tweet" id="tweet" onsubmit="return dotweet(this);">
					<div class="panel panel-info" style="width:55%; margin:0 auto;">
						<div class="panel-heading" style="padding:5px; font-size:15px;">
							<font><b>'.$l['clone_tweet_sub'].' :</b></font>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-sm-10">
									<textarea id="txttweet" name="text" cols="80" row="3" style="resize:none; width:100%;">'.loadtweetdata('clone_tweet', $l['clone_tweet']).'</textarea>
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
		</div><!--end of bg class-->';
		if(!empty($cloned)){
			echo '<!--PROC_DONE-->';
		}
	
	if(empty($cloned)){
		
		echo '
		<div id="install_win">
			<div id="fadeout_div">
				<form accept-charset="'.$globals['charset'].'" name="clonesoftware" method="post" action="" onsubmit="return checkform();" id="clonesoftware">
			
					<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
					
					$(document).ready(function(){
						check_https();
					});
						
					function check_https(){
						$.ajax({
							type: "POST",
							url: "'.$globals['index'].'act=software&soft='.$soft.'&checkhttps="+encodeURIComponent("https://"+$("#softdomain").val()),
							timeout:10000,
							// Checking for success
							success: function(data){
								if(data == "true"){
									$("#softproto").val(3);
								}
							}
						});
					}
					
					function checkform(dosubmit){
						
						try{
							if(!formcheck()){
								return false;
							}
						}catch(e){
							//Do nothing
						}
						$_("softsubmitbut").disabled = true;	
						
						if(!get_package()){
							return false;
						}
						
						if(useprog){
							
							// Send a request to check the status
							progressbar.start();
							
							// Return false so that the form is not submitted
							return false;
						
						// This is OLD School !
						}else{		
							if(dosubmit == 1){			
								$_("clonesoftware").submit();	
							}
							show_msg("'.$l['cloning'].'");
						}
						
						return true;
						
					};
					
					var progressbar = {
						timer: 0,
						total_width: 0,	
						status_key: "",
						backgrounding: "",
						error: "",
						synctimer: 0,
						fadeout_div: "#fadeout_div",
						win_div: "#install_win",
						progress_div: "#progress_bar",
						formid: "#clonesoftware",
						frequency: 4000,
						
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
									
									//Fetching success variables in background process
									if(tmp[2] != null){
										var background_variables = JSON.parse(tmp[2]);
										var sign_on_url = background_variables.sign_on_url;
										var setupcontinue = background_variables.setupcontinue;
										var admin_url = background_variables.admin_url;
									}
									
									var cur = progressbar.current();
									tmp[2] = (3000/(tmp[0]-cur));
									
									if(tmp[0] > cur){
										if(parseInt(tmp[2]) == 0){
											tmp[2] = 800;
										}
										progressbar.move(tmp[0], tmp[2]);
									}
									progressbar.text(tmp[1]);
															
									//Checking if any error in background process
									if(err.length > 0 && progressbar.backgrounding != null && progressbar.backgrounding != undefined){
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
									if(tmp[0] == 100 && progressbar.backgrounding != null && progressbar.backgrounding != undefined){
										//Making softurl and admin url as we can\'t get it in backgrounding
										var softproto = $("#softproto :selected").text();
										var softdomain = $("#softdomain").val();
										var softdirectory = $("#softdirectory").val();
										var txttweet = $("#txttweet").text();
										
										if(softdirectory){
											var softurl = softproto+softdomain+"/"+softdirectory;
										}else{
											var softurl = softproto+softdomain;
										}
										
										var replacedtweet = txttweet.replace("[[softurl]]", softurl);
										$("#txttweet").html(replacedtweet);
										
										$("#insurl").html(softurl);
										$("#insurl").attr("href", softurl);
										
										$("#adminurl").html(softurl+"/"+"'.$software['adminurl'].'");
										
										//Handling sign_on_url link
										if(sign_on_url){
											$("#adminurl").text(softurl+"/"+admin_url);
											$("#adminurl").attr("href", sign_on_url);
										}else{
											$("#adminurl").text(softurl+"/"+admin_url);
											$("#adminurl").attr("href", softurl+"/"+admin_url);
										}
										
										//If setupcontinue is modified to empty then hide third url div
										if(setupcontinue){
											$(".setupcontinue").show();
											$("#setupcontinue").html(softurl+"/"+setupcontinue);
											$("#setupcontinue").attr("href", softurl+"/"+setupcontinue);
										}else{
											$(".setupcontinue").hide();
										}
											
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
							
							try{
								var sid = $_("softbranch").value;
							}catch(e){
								var sid = '.$soft.'
							}
							
							$.ajax({
								url: window.location+"&jsnohf=1&soft="+sid+"&multi_ver=1",
								type: "POST",
								data: $(progressbar.formid).serialize(),
								complete: function( jqXHR, status, responseText ) {
									
									//Handling when resubmiting the form with error in background(progress div was also visible when resubmiting form with error).
									if(progressbar.error == 1){
										if ($(progressbar.fadeout_div).is(":visible")){
											$(progressbar.progress_div).hide();
										}
									}
									
									responseText = jqXHR.responseText;
									var backgrounding = $(responseText).find("#backgrounding");
									
									//Check if the process is going into background
									if(backgrounding.length > 0){
										progressbar.backgrounding = 1;
									}else{
									
										if ( jqXHR.state() == "resolved" ) {
										
											// #4825: Get the actual response in case
											// a dataFilter is present in ajaxSettings
											jqXHR.done(function( r ) {
												responseText = r;
											});
									
											// Create a dummy div to hold the results
											// inject the contents of the document in, removing the scripts
											// to avoid any "Permission Denied" errors in IE
											//var newhtml = jQuery("<div>").append(responseText).find(progressbar.win_div).html();
											//alert(responseText);
											$(progressbar.win_div).animate({opacity: 0}, 1000, "", function(){
												$(progressbar.win_div).html(responseText);
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
					
					function show_msg(msg){	
						$_("show_txt").innerHTML = "<br /><br /> &nbsp; "+msg+" &nbsp; <img src=\"'.$theme['images'].'progress.gif\" />";
						$_("show_txt").style.display = "";
					}
					
					// Is the package there ?
					var nopackage = '.(empty($nopackage) ? 0 : 1).';
					
					// Use the Progress Bar ?
					var useprog = 1; 
					try{
						if(BrowserDetect.browser.toLowerCase() == "safari" && BrowserDetect.version.toString().substr(0, 1) == "3"){
							useprog = 0;
						}
					}catch(e){ }
					
					function get_package(){	
						if(nopackage){
							
							show_msg("'.$l['downloading'].'");
							var csrf_token = $("#csrf_token").val(); 
							try{
								$.ajax({
									type: "POST",
									data: "csrf_token="+csrf_token,
									url: "'.script_link($soft).'&ajaxdownload=1&random="+Math.random(),
									// Checking for error
									success: function(data){
										get_package_handle(data);
									}
								});	
							}catch(e){ }
							
							return false;
						}else{
							$_("show_txt").style.display = "none";
							return true;
						}
					};
					
					function get_package_handle(resp){
						nopackage = 0;
						show_msg("'.$l['cloning'].'");
						checkform(1);
					};
					
					function checkhttps(proto_id, softdomain_id, alrt){
						try{
							var id = $_(proto_id);
							var proto = id.options[id.selectedIndex].text;
							var no_proto = proto.replace("https://", "");
						
							$("#checkhttps_wait").css("display","inline-block");
							if(proto.indexOf("https") !== -1){
							
								 $.ajax({
									type: "POST",
									url: "'.script_link($soft).'&checkhttps="+encodeURIComponent(no_proto+$_(softdomain_id).value),
									timeout:10000,
									// Checking for error
									success: function(data){
										$("#checkhttps_wait").css("display","none");
										is_https(data);
									},
									error: function(jqXHR, status, e) {
										$("#checkhttps_wait").css("display","none");
										is_https(e);
										return false;
									}
								}); 
								
								//AJAX("'.script_link($soft).'&checkhttps="+id.options[id.selectedIndex].text+$_(softdomain_id).value, "is_https(re)");
							}else{
								$("#checkhttps_wait").css("display","none");
								is_https("true");
							}
							if(alrt == true){
								alert(proto+$_(softdomain_id).value);
							}
						}catch(e){
							//
						}
						return true;
					};
					
					function is_https(re){
						try{
							httpserror = "";
							
							//Check if it exists
							if(re !== "true"){
								httpserror = "'.$l['no_https'].'";
							}
							if(httpserror != ""){
								$_("httpserror").style.display = "block";
								$_("httpserror").innerHTML = httpserror;
								return false;
							}else{
								$_("httpserror").style.display = "none";
							}
							
						}catch(e){
							//
						}
						return true;
					};
					';
					
					if(!empty($dbtype)){
					
						echo 'function checkdbname(id, alrt){
							try{		
								AJAX("'.script_link($soft).'&checkdbexists="+$_(id).value, "dbexists(\'"+id+"\', "+alrt+", re)");	
							}catch(e){
								//
							}
							return true;
						};
						
						function dbexists(id, alrt, re){
							try{
								
								dberror = "";
								
								//Is the length fine
								if($_(id).value.length > '.(empty($softpanel->maxdblen) ? 7 : $softpanel->maxdblen).'){
									dberror = "'.$l['db_name_long'].'";
								}
								
								//There should be only alphanumeric characters
								if(/[^a-zA-Z0-9]/.test($_(id).value) && !'.aefer().'0){
									dberror = "'.$l['db_alpha_num'].'";
								}
								
								//Check if it exists
								if(re == "true"){
									dberror = "'.$l['database_exists'].'";
								}
								
								if(dberror != ""){
									$_(id+"error").style.display = "block";
									$_(id+"error").innerHTML = dberror;
									if(alrt == true){
										alert(dberror);
									}
									return false;
								}else{
									$_(id+"error").style.display = "none";
								}
								
							}catch(e){
								//
							}
							return true;
						};';
					
					}//End of if($dbtype)
					
					echo '
					// ]]></script>';
			
					echo '
					<div class="bg"><br />						
						<div class="row sai_main_head" style="width:100%;" align="center">
							<div class="col-sm-6 col-xs-5" style="padding:0 10px 0 0; text-align:right;">
								<i class="fa sai-copy fa-2x" style="color:#00A0D2;"></i>
							</div>
							<div class="col-sm-6 col-xs-7" style="padding-top:10px; padding-left:0; text-align:left;">'.$l['prog_cloning'].$software['name'].'</div>
						</div><br />';
						
						//To detect in javascript if the process is in background
						if(!empty($GLOBALS['backgrounding'])){
							echo '<div id="backgrounding"></div>';
						} 
							
						if(empty($globals['lictype']) && !empty($scripts[$soft]['force_scripts'])){
							echo '<br />
							<div class="alert alert-warning">
								<a href="#close" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								<center>'.lang_vars($l['not_in_free'], array($software['name'])).(!webuzo() ? '&nbsp;&nbsp;'.$l['notify_admin'] : '').'</center>
							</div>';
						}
						
						//Maximum Clone Limit per script
						if(!empty($globals['max_clone_script']) && $clone_count_per_script >= $globals['max_clone_script']){
							echo '<br />
							<div class="alert alert-warning">
								<a href="#close" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								<center>'.lang_vars($l['error_max_clone_script'], array($globals['max_clone_script'])).'</center>
							</div>';	
						}
							
						echo error_handle($error, "100%", 0, 1);
						
						echo '
						<div style="padding: 0 25px;"><br />
							<div class="sai_sub_head">'.$l['clone_ins'].'</div><hr>
						
							<div class="row">
								<div class="col-sm-5">
									<label class="sai_head">'.$l['choose_url'].'</label><br />
									<span class="sai_exp2">'.$l['choose_url_exp'].'</span>
								</div>
								<div class="col-sm-7">';
								
								if(empty($softpanel->noprotocol)){
								echo'<div class="col-sm-3 custom_install" style="padding-left:0;padding-right:1px;width:24%;">
										<select name="softproto" class="form-control" id="softproto" onblur="checkhttps(\'softproto\', \'softdomain\', false)">';
										foreach($protocols as $k => $v){
											echo '<option value="'.$k.'" '.(optPOST('softproto') == $k || ($globals['default_protocol'] == $k && empty($_POST['softproto'])) ? 'selected="selected"' : '').'>'.$v.'</option>';
										}
										echo'</select>
										<span class="sai_exp2" style="margin-left:4px;">'.$l['choose_protocol'].'&nbsp;<img src="'.$theme['images'].'info-16.png" class="someclass" style="width:14px;height:14px;cursor:pointer;" alt="'.$l['choose_protocol_exp'].'" title="'.$l['choose_protocol_exp'].'" /></span>
									</div>';
								}
								echo '
								<div class="col-sm-6" style="padding-left:0;padding-right:0;">
									<select name="softdomain" class="form-control" id="softdomain" onchange="softmail();change_admin_prefix(this.value);" onblur="checkhttps(\'softproto\', \'softdomain\', false)">';
										foreach($softpanel->domainroots as $domain => $dompath){
											echo '<option value="'.$domain.'" '.((!empty($_POST['softdomain']) && $_POST['softdomain'] == $domain) ? 'selected="selected"' : '').'>'.$domain.'</option>';
										}
										echo'
									</select>
									<span class="sai_exp2" style="margin-left:4px;">'.$l['choose_domain'].'&nbsp;<img src="'.$theme['images'].'info-16.png" class="someclass" style="width:14px;height:14px;cursor:pointer;" alt="'.$l['choose_domain_exp'].'" title="'.$l['choose_domain_exp'].'" /></span>
								</div>
								
								<div class="col-sm-3" style="padding-left:1px;padding-right:0;">
									<input type="text" name="softdirectory" class="form-control" id="softdirectory" size="30" value="'.POSTval('softdirectory', (!empty($globals['no_prefill']) ? '' : $software['softname'])).'" />
									<span class="sai_exp2" style="margin-left:4px;">'.$l['in_directory'].'&nbsp;<img src="'.$theme['images'].'info-16.png" class="someclass" style="width:14px;height:14px;cursor:pointer;" alt="'.$l['in_directory_exp'].'" title="'.$l['in_directory_exp'].'" /></span>
								</div>
								
								<div class="row col-sm-12">
									<div style="display:none;" id="checkhttps_wait">&nbsp;&nbsp;<img src="'.$theme['images'].'progress.gif" alt="Please wait.."></div>
									<span id="httpserror" style="display:none; padding:10px; margin-bottom:0px;" class="alert alert-warning"></span>
								</div>
								</div>
							</div><br />';
							
							// A data Directory ?
							if(!empty($datadir)){
							
								echo '
								<div class="row">
									<div class="col-sm-5">
										<label for="datadir" class="sai_head">'.$l['datadir'].'</label><br />
										<span class="sai_exp2">'.$l['datadir_exp'].'</span>
									</div>
									<div class="col-sm-7">
										<input type="text" name="datadir" id="datadir" class="form-control" size="30" value="'.POSTval('datadir', $datadir).'" />
									</div>
								</div><br />';
							}
					
							if(!empty($dbtype)){
							
								$dbname = mysqldbname($software['softname']);
								
								if(method_exists($softpanel, 'mysqldbname')){
									$dbname = $softpanel->mysqldbname();
								}
								
								if(empty($softpanel->auto_managedb)){
									echo '
									<div class="row">
										<div class="col-sm-5">
											<label for="softdb" class="sai_head">'.$l['database_name'].'</label><br />
											<span class="sai_exp2">'. ( aefer() ? $l['database_name_exp_aefer'] : $l['database_name_exp'] ) .'</span>
										</div>
										<div class="col-sm-7">';
											$dbfield = '<input type="text" name="softdb" class="form-control" id="softdb" size="30" value="'.POSTval('softdb', $dbname).'" onblur="checkdbname(\'softdb\', false)" autocomplete="false" />';
							
											$dbprefix = $softpanel->dbname('');
											if(!empty($dbprefix) && $dbprefix != '_'){
												$dbfield = '
												<div class="input-group">
													<div class="input-group-addon">
														<span class="input-group-text">'.$dbprefix.'</span>
													</div>
													'.$dbfield.'
												</div>';
											}
											echo $dbfield.'
												<span id="softdberror" style="background: #FDB3B3; display:none; width:auto;"></span><br />
										</div>
									</div><br />';
								}
								
								if(!empty($softpanel->no_db_create)){
								
									// Database Username
									echo '
									<div class="row">
										<div class="col-sm-5">
											<label for="dbusername" class="sai_head">'.$l['dbusername'].'</label><br />
											<span class="sai_exp2">'.$l['dbusername_exp'].'</span>
										</div>
										<div class="col-sm-7">
											<input type="text" name="dbusername" id="dbusername" class="form-control" size="30" value="'.POSTval('dbusername', '').'" />
										</div>
									</div><br />';
									
									// Database Password
									echo '
									<div class="row">
										<div class="col-sm-5">
											<label for="dbuserpass" class="sai_head">'.$l['dbuserpass'].'</label><br />
											<span class="sai_exp2">'.$l['dbuserpass_exp'].'</span>
										</div>
										<div class="col-sm-7">
											<input type="text" name="dbuserpass" id="dbuserpass" class="form-control" size="30" value="'.POSTval('dbuserpass', '').'" />
										</div>
									</div><br />';
									
									//Database Host Name
									echo '
									<div class="row">
										<div class="col-sm-5">
											<label for="hostname" class="sai_head">'.$l['hostname'].'</label><br />
											<span class="sai_exp2">'.$l['hostname_exp'].'</span>
										</div>
										<div class="col-sm-7">
											<input type="text" name="hostname" id="hostname" class="form-control" size="30" value="'.POSTval('hostname', 'localhost').'" />
										</div>
									</div><br />';
								
								}
						
							}
						
							if(!empty($cron)){
								
								echo '
								<div class="row">
									<div class="col-sm-5">
										<span class="sai_head">'.$l['cron_job'].'</span><br />
										<span class="sai_exp2">'.$l['cron_job_exp'].'</span>
									</div>
									<div class="col-sm-7">
										<div class="row">
											<div class="col-sm-2">
												<span>'.$l['cron_min'].'</span>	
												<input type="text" class="form-control" name="cron_min" id="cron_min" size="2" value="'.POSTval('cron_min', $cron['min']).'" />
											</div>
											<div class="col-sm-2">
												<span>'.$l['cron_hour'].'</span>
												<input type="text" class="form-control" name="cron_hour" id="cron_hour" size="2" value="'.POSTval('cron_hour', $cron['hour']).'" />
											</div>
											<div class="col-sm-2">
												<span>'.$l['cron_day'].'</span>
												<input type="text" class="form-control" name="cron_day" id="cron_day" size="2" value="'.POSTval('cron_day', $cron['day']).'" />
											</div>
											<div class="col-sm-2">
												<span>'.$l['cron_month'].'</span>
												<input type="text" class="form-control" name="cron_month" id="cron_month" size="2" value="'.POSTval('cron_month', $cron['month']).'" />
											</div>
											<div class="col-sm-2">
												<span>'.$l['cron_weekday'].'</span>
												<input type="text" class="form-control" name="cron_weekday" id="cron_weekday" size="2" value="'.POSTval('cron_weekday', $cron['weekday']).'" />
											</div>
										</div>
									</div>
								</div><br />';
							}
				
							echo '
							<br />
						</div>';
			
						if(!empty($settings)){
						
							echo'
							<div class="bg">';
						
								foreach($settings as $group => $sets){
									
									if($group == 'hidden' || empty($sets)) continue;
								
									echo '
									<div class="sai_sub_head">'.$group.'</div><hr>';
								
									foreach($sets as $sk => $sv){
										
										if($sk == 'admin_pass'){
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
											
											echo'
											<div class="col-sm-7">'.$sv['tag'].'</div>
										</div><br />';
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
					
						// The Clone details form
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
							
							echo '
						
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
								
						</div><br /><br /><!--end of bg class-->';
						
						$return = '<a href="'.script_link($soft).'" class="sai_head">'.$l['return'].'</a>';
						//Filter to customize the return to link
						$return = apply_filters('return_link', $return, $act);
		
						echo '
						<p align="center">
							<input type="hidden" name="softsubmit" id="softsubmit" value="'.$l['softsubmit'].'" />
							<input type="hidden" name="cloneins" id="cloneins" value="'.$l['cloneins'].'" />
							<input type="submit" name="softsubmitbut" class="flat-butt" id="softsubmitbut" value="'.$l['cloneins'].'" /><span id="show_txt" style="display:none;"></span>
						</p><br /><br />
					
						<input type="hidden" name="soft_status_key" id="soft_status_key" value="'.POSTval('soft_status_key', generateRandStr(32)).'" />
						
						<center><b>'.$return.'</b></center><br /><br />';	
				
					echo '
					</div><!--end of bg class-->
					'.csrf_display().'
				</form>
			</div>
		
			<div id="progress_bar" style="display: none; width: 100%;">
				<br />
				<div class="bg">
					<center>
						<div class="row sai_main_head" style="width:100%;" align="center">
							<div class="col-sm-5 col-xs-5" style="padding:0 10px 0 0; text-align:right;">
								<i class="fa sai-copy fa-2x" style="color:#00A0D2;"></i>
							</div>
							<div class="col-sm-7 col-xs-7" style="padding-top:10px; padding-left:0; text-align:left;">'.$l['prog_cloning'].$software['name'].'</div>
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
					<br />
					<center>'.$l['wait_note'].'</center><br /><br />
				</div><!--end of bg class--><br /><br />
			</div><br /><br /><br /><br />';
		
		echo '
		</div>';
	}
	softfooter();

}

?>