<?php

//////////////////////////////////////////////////////////////
//===========================================================
// pushtolive_theme.php
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


function pushtolive_theme(){

	global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $scripts;
	global $software, $soft, $info, $settings, $dbtype, $__settings, $notes, $cron, $datadir, $ajaxdb, $ajaxdbexists, $overwrite_option, $nopackage, $multi_ver, $insid, $pushed, $liveinsid, $liveins, $tables_structure_diff, $tables_data_diff, $is_views, $data, $act;
	
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
	
	softheader($l['<title>']);
	
	$return = '<a href="'.script_link($soft).'" class="sai_head">'.$l['return'].'</a>';
	//Filter to customize the return to link
	$return = apply_filters('return_link', $return, $act);
	
	// Check if the script supports Sign On
	$has_sign_on = has_sign_on($soft);

	echo '
	<div class="bg" id="completed" '.(empty($pushed) ? 'style="display:none;"' : '').'>
		<h4>'.$l['congrats'].'</h4>
		'.$software['name'].' '.$l['succesful'].' : <br />
		<a id="insurl" href="'.$__settings['softurl'].'" target="_blank">'.$__settings['softurl'].'</a>
		'.(!empty($software['adminurl']) ? '<br />'.$l['admin_url'].' : <a id="adminurl" href="'.(empty($globals['disable_sign_on']) && !empty($has_sign_on) ? $globals['ind'].'act=sign_on&insid='.(!empty($_REQUEST['current_to_live']) ? $data['insid'] : $liveinsid).'&autoid='.srandstr(32) : $__settings['softurl'].'/'.$software['adminurl']).'" target="_blank">'.$__settings['softurl'].'/'.$software['adminurl'].'</a>' : '').'<br /><br />
		<div class="setupcontinue">'.(!empty($setupcontinue) || empty($pushed) ? $l['setup_continue'].' : <br />
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
								<textarea id="txttweet" name="text" cols="80" row="3" style="resize:none; width:100%;">'.loadtweetdata('pushing_tweet', $l['pushing_tweet']).'</textarea>
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
	
	if(!empty($pushed)){
		echo '<!--PROC_DONE-->';
	}
	
	if(empty($pushed)){
		
		echo '
		<div id="install_win">
			<div id="fadeout_div">
				<form accept-charset="'.$globals['charset'].'" name="pushingsite" method="post" action="" onsubmit="return checkform();" id="pushingsite">
			
					<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
					
					function checkform(dosubmit){
						
						try{
							if(!formcheck()){
								return false;
							}
						}catch(e){
							//Do nothing
						}
						$_("push_sub").disabled = true;	
						
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
								$_("pushingsite").submit();	
							}
							show_msg("'.$l['pushing'].'");
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
						formid: "#pushingsite",
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
										
										$("#push_sub").removeAttr("disabled"); //Enabling submit button 			
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
								
										var txttweet = $("#txttweet").text();
										
										var softurl = "'.$liveins['softurl'].'";
										
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
						show_msg("'.$l['pushing'].'");
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
					
					$(document).ready(function(){
						
						$("#push_sub").click(function () {
							$("#custom_push").remove();
						});
						
						$("#custom_push_sub").click(function () {
							$("#default_push").remove();
						});
						
						handle_push_form();
						var page = "'.$_POST['custom_push'].'";
						if(page){
							toggle_push(1);
						}
						
						$("#push_db").click(function () {
							if(this.checked == true){
								$("#custom_database").hide();
								$("#push_view_div").hide();
							}else{
								$("#custom_database").show();
								$("#push_view_div").show();
							}
						});
						
					});
					
					function toggle_push(show){
						if(show){
							$("#custom_push_div").show();
							$("#custom_push_sub").show();
							$("#push").hide();
							$("#push_sub").hide();					
						}else{
							$("#custom_push_div").hide();		
							$("#custom_push_sub").hide();
							$("#push").show();	
							$("#push_sub").show();								
						}
					}
					
					function handle_push_form(){
						
						$("#custom_push_but").click(function(){
							toggle_push(1);
						});
						
						$("#custom_push_but_res").click(function(){
							toggle_push(1);
						});

						$("#push_but").click(function(){
							toggle_push();
						});
						
						$("#push_but_res").click(function(){
							toggle_push();
						});
						
					}
					
					function confirm_alert(){
						var resp = confirm("'.$l['corfirm_live'].'");
						if(resp == true){
							return true;
						}else{
							return false;
						}
					}
					
					// ]]></script>';
					
					echo '<script language="JavaScript" src="'.$theme['url'].'/js/tabber.js" type="text/javascript"></script>
					<script type="text/javascript">
						tabs = new tabber;
						tabs.tabs = new Array(\'push_but\', \'custom_push_but\');
						var page = "'.$_POST['push_sub'].'";
						if(page){
							tabs.inittab = \'custom_push_but\';						
						}else{
							tabs.inittab = \'push_but\';						
						}
						addonload(\'tabs.init();\');
					</script>';
					
					echo '<div class="bg"><br />
					<div class="row sai_main_head" style="width:100%;" align="center">
						<div class="col-sm-6 col-xs-5" style="padding:0 10px 0 0; text-align:right;">
							<img src="'.$theme['images'].'pushtolive_48.png" />
						</div>
						<div class="col-sm-6 col-xs-7" style="padding-top:10px; padding-left:0; text-align:left;">'.$l['prog_pushtolive'].' '.$software['name'].'</div>
					</div><hr>';
						
					if(empty($globals['lictype']) && !empty($scripts[$soft]['force_scripts'])){
						echo '<br />
						<div class="alert alert-warning">
							<a href="#close" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<center>'.lang_vars($l['not_in_free'], array($software['name'])).(!webuzo() ? '&nbsp;&nbsp;'.$l['notify_admin'] : '').'</center>
						</div>';
					}
					
					echo '<div class="row">
						<div class="col-sm-8">
							<span class="sai_head"><h5>'.$l['live_site_desc'].' <b><a href="'.$user['ins'][$liveinsid]['softurl'].'" target="_blank" style="text-decoration:none;">'.$user['ins'][$liveinsid]['softurl'].'</a></b></h5></span>
						</div>
						<div class="col-sm-4" align="right">
							<a href="'.$globals['ind'].'act=pushtolive&insid='.$insid.'&current_to_live=1"><input name="current_to_live" class="flat-butt" onclick="return confirm_alert();" id="current_to_live" value="'.$l['current_to_live'].'" type="button"></a>
						</div>
					</div>
					<br />';
					
					if(!aefer()){	
					echo'<div class="old_tab">
							<table width="100%" cellpadding="0" cellspacing="0" border="0" class="sai_tabs">
								<tr>
									<td width="50%"><a class="sai_tab" href="javascript:tabs.tab(\'push_but\')" id="push_but">'.$l['push_btn'].'</a></td>
									<td><a class="sai_tab" href="javascript:tabs.tab(\'custom_push_but\')" id="custom_push_but">'.$l['custom_push_btn'].'</a></td>
								</tr>
							</table><br />
						</div><br />
					
						<div class="new_tab">
							<nav class="navbar navbar-default">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>                        
									</button>
									<ul class="nav">
										
									</ul>
								</div>
								<div class="collapse navbar-collapse" id="myNavbar" style="position:absolute; z-index:1000; width:100%; background:#F8F8F8;">
									<ul class="nav navbar-nav">
										<li><a href="javascript:tabs.tab(\'push_but\')" id="push_but_res" class="sai_tab2" style="text-decoration:none;" data-toggle="collapse" data-target="#myNavbar">'.$l['push_btn'].'</a></li>
										<li><a href="javascript:tabs.tab(\'custom_push_but\')" id="custom_push_but_res" class="sai_tab2" style="text-decoration:none;" data-toggle="collapse" data-target="#myNavbar">'.$l['custom_push_btn'].'</a></li>
									</ul>
								</div>
							</nav>
						</div>';
					}
					
					//To detect in javascript if the process is in background
					if(!empty($GLOBALS['backgrounding'])){
						echo '<div id="backgrounding"></div>';
					}
						
					echo error_handle($error, "100%", 0, 1);
				
					echo '<!--easy push form starts-->
					<div id="push" '.(isset($_POST['custom_push']) ? 'style="display:none;"' : '').'>
						<div class="row">
							<div class="col-sm-12">
								<center><span class="sai_exp2">'.$l['default_push_desc'].'</span></center><br /><br />
							</div>
						</div>
						
						<p align="center">
						<input type="hidden" name="default_push" id="default_push" value="'.$l['default_push'].'" />
						<input type="submit" name="push_sub" class="flat-butt" id="push_sub" value="'.$l['push'].'" />
						<span id="show_txt" style="display:none;"></span>
						</p><br /><br />
						<center><b>'.$return.'</b></center><br /><br />
					</div><!--end of easy push-->
					
					<!--advanced form starts-->
					<div id="custom_push_div" '.(!isset($_POST['custom_push']) ? 'style="display:none;"' : '').'>
						
					<div class="row">
						<div class="col-sm-5">
							<label class="sai_head">'.$l['overwrite_files'].'</label>
							<span class="sai_exp">'.$l['overwrite_files_exp'].'</span>
						</div>
						<div class="col-sm-7">
							<input type="checkbox" name="overwrite_files" id="overwrite_files" '.POSTchecked('overwrite_files', 1).' />
						</div>	
					</div><br />';
					
					if(!empty($dbtype)){
						
						echo '<div class="row">
							<div class="col-sm-5">
								<label class="sai_head">'.$l['push_db'].'</label>
								<span class="sai_exp">'.$l['push_db_exp'].'</span>
							</div>
							<div class="col-sm-7">
								<input type="checkbox" name="push_db" id="push_db" '.POSTchecked('push_db').' />
							</div>	
						</div><br />';
						
						if(!empty($is_views)){
							
							echo '<div class="row" id="push_view_div">
								<div class="col-sm-5">
									<label class="sai_head">'.$l['push_views'].'</label>
									<span class="sai_exp">'.$l['push_views_exp'].'</span>
								</div>
								<div class="col-sm-7">
									<input type="checkbox" name="push_views" id="push_views" '.POSTchecked('push_views', 1).' />
								</div>	
							</div><br />';
						
						}
						
						echo '<div class="row" id="custom_database">
							<div class="col-sm-5">
								<label class="sai_head">'.$l['select_tables'].'</label><br />
								<span class="sai_exp">'.$l['select_tables_exp'].'</span><br />
							</div>
							<div class="col-sm-7">
								<div id="select_table">
								<table class="table table-hover">
								<thead style="background:#EFEFEF;" class="sai_head2">
									<tr>
										<th colspan="2"><b>'.$l['structural_change'].'</b></th>
									</tr>
								</thead>';
								
								if(empty($tables_structure_diff)){
									echo '<tr><td><h6>'.$l['no_structural_change'].'</h6></td></tr>';
								}else{
									foreach($tables_structure_diff as $tk => $tv){
										echo '<tr>
											<td width="1%"><input type="checkbox" name="structural_change_tables[]" value="'.$tv.'" '.POSTmulticheck('structural_change_tables', $tv, $tables_structure_diff).' /></td>
											<td>'.$tv.'</td>
										</tr>';
									}
								}
								
								echo '
								</table>
								
								<table class="table table-hover">
								<thead style="background:#EFEFEF;" class="sai_head2">
									<tr>
										<th colspan="2"><b>'.$l['table_data_change'].'</b></th>
									</tr>
								</thead>';
								
								if(empty($tables_data_diff)){
									echo '<tr><td><h6>'.$l['no_table_data_change'].'</h6></td></tr>';
								}else{
									foreach($tables_data_diff as $tk => $tv){
										echo '<tr>
											<td width="1%"><input type="checkbox" name="datachange_tables[]" value="'.$tv.'" '.POSTmulticheck('datachange_tables', $tv, $tables_data_diff).' /></td>
											<td>'.$tv.'</td>
										</tr>';
									}
								}
								echo '
								</table>
								</div>
							</div>	
						</div><br />';
					}
					
					echo '<br />
					<p align="center">
						<input type="hidden" name="softsubmit" id="softsubmit" value="'.$l['softsubmit'].'" />
						<input type="hidden" name="custom_push" id="custom_push" value="'.$l['custom_push'].'" />
						<input type="submit" name="custom_push_sub" class="flat-butt" id="custom_push_sub" value="'.$l['push'].'" />
					</p><br /><br />
					
					<input type="hidden" name="soft_status_key" id="soft_status_key" value="'.POSTval('soft_status_key', generateRandStr(32)).'" />
					
					<center><b><a href="'.script_link($soft).'" class="sai_head">'.$l['return'].'</a></b></center><br /><br />
					
					</div>
				</div><!--end of bg class-->
				'.csrf_display().'
				</form>
			</div><!--end of fadeout div-->
			
			<div id="progress_bar" style="display: none; width: 100%;">
				<br />
				<div class="bg">
					<center>
						<div class="row sai_main_head" style="width:100%;" align="center">
							<div class="col-sm-5 col-xs-5" style="padding:0 10px 0 0; text-align:right;">
								<img src="'.$theme['images'].'pushtolive_48.png" />
							</div>
							<div class="col-sm-7 col-xs-7" style="padding-top:10px; padding-left:0; text-align:left;">'.$l['prog_pushtolive'].' '.$software['name'].'</div>
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