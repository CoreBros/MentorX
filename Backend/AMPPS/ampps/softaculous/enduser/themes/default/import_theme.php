<?php

//////////////////////////////////////////////////////////////
//===========================================================
// import_theme.php
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


function import_theme(){

	global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $scripts;
	global $software, $soft, $info, $settings, $softins, $dbtype, $dbs, $imported, $remote_imported, $__settings, $setupcontinue, $installations, $notes, $protocols, $ajaxhttpsexists, $ajaxhttps, $ajaxdb, $ajaxdbexists, $can_import, $overwrite_option;
	
	if(!empty($ajaxhttps)){
		echo $ajaxhttpsexists;
		return true;
	}

	if(!empty($ajaxdb)){
		echo $ajaxdbexists;
		return true;
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

	softheader($l['<title>'].$software['name']);
	
	// Check if the script supports Sign On
	$has_sign_on = has_sign_on($soft);

	// Does the user have custom admin url for their installation
	$software['adminurl'] = !empty($__settings['admin_folder']) ? $__settings['admin_folder'] : @$software['adminurl'];
	echo '
	<div class="bg" id="completed" style="display:none;">
	<h4>'.$l['congrats'].'</h4><br />
		'.$software['name'].' '.$l['succesful'].' : <br />
		<a id="insurl" href="'.$__settings['softurl'].'" target="_blank">'.$__settings['softurl'].'</a>
		'.(!empty($software['adminurl']) ? '<br />'.$l['admin_url'].' : <a id="adminurl" href="'.(empty($globals['disable_sign_on']) && !empty($has_sign_on) ? $globals['ind'].'act=sign_on&insid='.$__settings['insid'].'&autoid='.srandstr(32) : $__settings['softurl'].'/'.$software['adminurl']).'" target="_blank">'.$__settings['softurl'].'/'.$software['adminurl'].'</a>' : '').'<br /><br />
		'.$l['enjoy'].'<br /><br />
		'.(!empty($notes) ? $l['import_notes'].' : <br />
		<div class="sai_notes">'.softparse($notes, $soft).'</div><br /><br />' : '').'
		'.$l['please_note'].'<br /><br />
		'.$l['regards'].',<br />
		'.$l['softinstaller'].'
		<br /><br />
		<center><b><a href="'.script_link($soft).'&highlight='.$__settings['insid'].'&postact=import" class="sai_head">'.$l['return'].'</a></b></center>
	</div><!--end of bg class-->';
	
	echo '
	<link rel="stylesheet" type="text/css" href="'.$theme['url'].'/spectrum.css?'.$GLOBALS['globals']['version'].'" />
	<div id="install_win">
	<div id="fadeout_div">
		<form accept-charset="'.$globals['charset'].'" name="importsoftware" method="post" action="" onsubmit="return checkform(this.id);" class="form-horizontal" id="importsoftware">';
		
			if(!empty($can_import)){
				echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
			
				$(document).ready(function(){
					check_auth_password();
					checkprotocol();
					handle_remote_form();
					var page = "'.$_POST['remote_submit'].'";
					if(page){
						toggle_rimport(1);
					}
				});
				
				function handle_remote_form(){
					$(\'#auth_password\').change(function(){
						if($(this).is(":checked")) {
							hide_sshkey();
						}else{
							show_sshkey();
						}
					});
					
					$("#remote_imp_but").click(function(){
						checkprotocol();
						toggle_rimport(1);
					});
					
					$("#remote_imp_but_res").click(function(){
						checkprotocol();
						toggle_rimport(1);
					});

					$("#local_imp_but").click(function(){
						toggle_rimport();
					});
					
					$("#local_imp_but_res").click(function(){
						toggle_rimport();
					});
					
					$(\'#protocol\').change(function(){
						checkprotocol();
					});
				}

				function checkprotocol(){
					
					$(\'#ftp_user_head\').html($(\'#protocol\').val().toUpperCase()+" "+"'.$l['ftp_user'].'");
					$(\'#ftp_pass_head\').html($(\'#protocol\').val().toUpperCase()+" "+"'.$l['ftp_pass'].'");
					$(\'#ftp_path_head\').html($(\'#protocol\').val().toUpperCase()+" "+"'.$l['ftp_path'].'");
					
					if($(\'#protocol\').val() == \'ftp\'){
						if($(\'#port\').val() == "" || $(\'#port\').val() == "22"){
							$(\'#port\').val(\'21\');
						}
						$(\'#trauthpass\').hide();
						hide_sshkey();
						ftppath();
					}
					if($(\'#protocol\').val() == \'ftps\'){
						
						if($(\'#port\').val() == "" || $(\'#port\').val() == "22"){
							$(\'#port\').val(\'21\');
						}
						$(\'#trauthpass\').hide();
						hide_sshkey();
						ftppath();
					}
					if($(\'#protocol\').val() == \'sftp\'){
						if($(\'#port\').val() == "" || $(\'#port\').val() == "21"){
							$(\'#port\').val(\'22\');
						}
						$(\'#trauthpass\').show();
						if($(\'#auth_password\').is(":checked")){
							hide_sshkey();
						}else{
							show_sshkey();
							
						}
						sftppath();
					}
				}
				
				function toggle_rimport(show){
					if(show){
						$("#local_import").hide();
						$("#remote_import").show();					
						$("#remote_sub_btn").show();
						$("#local_sub_btn").hide();					
					}else{
						$("#remote_import").hide();
						$("#local_import").show();				
						$("#remote_sub_btn").hide();
						$("#local_sub_btn").show();					
					}
				}

				function ftppath(){
					$(\'#ftp_path\').html("'.$l['ftp_path'].'");
					$(\'#ftp_path_exp\').html("'.$l['ftp_path_exp'].'");
					$(\'#backup_path_exp\').html("'.$l['backup_path_exp'].'");
				}

				function sftppath(){
					$(\'#ftp_path\').html("'.$l['sftp_path'].'");
					$(\'#ftp_path_exp\').html("'.$l['sftp_path_exp'].'");
					$(\'#backup_path_exp\').html("'.$l['sbackup_path_exp'].'");
				}
				function toggle_advoptions(ele){
					//alert("#"+ele);
					if ($("#"+ele).is(":hidden")){
						$("#"+ele).slideDown("slow");
						$("#"+ele+"_toggle_plus").attr("src", "'.$theme['images'].'minus_new.gif");
					}
					else{
						$("#"+ele).slideUp("slow");
						$("#"+ele+"_toggle_plus").attr("src", "'.$theme['images'].'plus_new.gif");
					}
				}
				
				function checkdbname(id, alrt){
					try{		
						AJAX("'.$globals['index'].'act=import&soft='.$soft.'&checkdbexists="+$_(id).value, "dbexists(\'"+id+"\', "+alrt+", re)");	
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
				}
				
				function check_auth_password(){
					if($("#auth_password").is(":checked")){
						hide_sshkey();
					}else{
						show_sshkey();
					}
				}

				function hide_sshkey(){
						$("#private_key").prop("disabled", true);
						$("#pri").hide();
						$("#passphrase").hide();
						$("#ftp_pass").show();
					}

				function show_sshkey(){
					$("#private_key").prop("disabled", false);
					$("#pri").show();
					$("#passphrase").show();
					$("#ftp_pass").hide();
				}
				// ]]></script>
				
				<script language="JavaScript" src="'.$theme['url'].'/js/tabber.js" type="text/javascript"></script>
				<script type="text/javascript">
					tabs = new tabber;
					tabs.tabs = new Array(\'local_imp_but\', \'remote_imp_but\');
					var page = "'.$_POST['remote_submit'].'";
					if(page){
						tabs.inittab = \'remote_imp_but\';						
					}else{
						tabs.inittab = \'local_imp_but\';						
					}
					addonload(\'tabs.init();\');
				</script>';
			}
			
			echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
			function checkhttps(proto_id, softdomain_id, alrt){ 
				try{
					var id = $_(proto_id);
					var proto = id.options[id.selectedIndex].text;
					var no_proto = proto.replace("https://", "");
					
					$("#checkhttps_wait").css("display","inline-block");
					if(proto.indexOf("https") !== -1){
					
						 $.ajax({
							type: "POST",
							url: "'.$globals['index'].'act=import&soft='.$soft.'&checkhttps="+encodeURIComponent(no_proto+$_(softdomain_id).value),
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
						
						//AJAX("'.$globals['index'].'act=import&soft='.$soft.'&checkhttps="+id.options[id.selectedIndex].text+$_(softdomain_id).value, "is_https(re)");
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
			
			function checkform(formid){
				
				if(formid === "importsoftware"){
					progressbar.local_import = 1;
					progressbar.frequency = 1000; //Local import is fast hence to get the resp fast we set 1 sec
					$_("remote_submit").disabled = true;
				}
				
				if(formid === "importsoftware_r"){
					progressbar.remote_import = 1;
					progressbar.frequency = 4000;
					$_("softsubmit").disabled = true;
				}
				
				try{
					if(!formcheck() || !checkdbname(\'softdb\', true)){
						return false;
					}
				}catch(e){
					//Do nothing
				}
				
				if(useprog){
					//Which form to submit
					progressbar.formid = "#"+formid;
					
					// Send a request to check the status
					progressbar.start();
				
					// Return false so that the form is not submitted
					return false;
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
				formid: "",
				frequency: "",
				got_resp: 0,
				error: "",
				remote_import: "",
				local_import: "",
				
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
							
							//Fetching success variables in background process
							if(tmp[2] != null){
								var background_variables = JSON.parse(tmp[2]);
								var sign_on_url = background_variables.sign_on_url;
								var admin_url = background_variables.admin_url;
								
							}
							
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
								
								$("#local_sub_btn").removeAttr("disabled"); //Enabling submit button 			
								$("#remote_sub_btn").removeAttr("disabled"); //Enabling submit button 
								
								$(progressbar.progress_div).fadeOut(1, 
								function(){
									$(progressbar.fadeout_div).fadeOut(1);
									$(progressbar.fadeout_div).fadeIn(500);
								});
								
								return false;	//Stop javascript execution
							}
							
							//Checking if pogressbar is completed for backgrounding
							if(tmp[0] == 100){
								
								//Making softurl and admin url as we can\'t get it in backgrounding
								if(progressbar.local_import){
									var softproto = $("#softproto :selected").text();
									var softdomain = $("#softdomain").val();
									var softdirectory = $("#softdirectory").val();
								}else{
									var softproto = $("#softproto_r :selected").text();
									var softdomain = $("#softdomain_r").val();
									var softdirectory = $("#dest_directory").val();
								}
								
								if(softdirectory){
									var softurl = softproto+softdomain+"/"+softdirectory;
								}else{
									var softurl = softproto+softdomain;
								}
								
								$("#insurl").html(softurl);
								$("#insurl").attr("href", softurl);
								
								$("#adminurl").html(softurl+"/"+admin_url);
								
								//Handling sign_on_url link
								if(sign_on_url){
									$("#adminurl").text(softurl+"/"+admin_url);
									$("#adminurl").attr("href", sign_on_url);
								}else{
									$("#adminurl").text(softurl+"/"+admin_url);
									$("#adminurl").attr("href", softurl+"/"+admin_url);
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
					if(progressbar.remote_import){
						this.status_key = $("#soft_status_key_remote").attr("value");
					}else{
						this.status_key = $("#soft_status_key_local").attr("value");
					}
					this.sync();
				}catch(e){ }},
				
				post: function(){
					// Scroll to the Top and show the progress bar
					goto_top();
					$(progressbar.fadeout_div).fadeOut(500, 
						function(){
							$(progressbar.progress_div).fadeOut(1);
							
							// In local import the process is so fast that completed is executed before we fade in progress_div so check if we are already completed
							if (!$("#completed").is(":visible")){
								$(progressbar.progress_div).fadeIn(500);
							}
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
							
							if ($("#completed").is(":visible")){
								$(progressbar.progress_div).hide();
							}
							
							// Store the response as specified by the jqXHR object
							responseText = jqXHR.responseText;
							//alert(responseText);
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
					<div class="col-sm-6 col-xs-5" style="padding:0 10px 0 0; text-align:right;">
						<img src="'.$globals['softimages'].'top15/48/'.$scripts[$soft]['softname'].'.png" >
					</div>
					<div class="col-sm-6 col-xs-7" style="padding-top:10px; padding-left:0; text-align:left;">'.$l['import_soft'].' - '.$software['name'].'</div>
				</div><br />';
				
				//To detect in javascript if the process is in background
				if(!empty($GLOBALS['backgrounding'])){
					echo '<div id="backgrounding"></div>';
				}
				
				if(!empty($can_import)){
					echo '<div class="old_tab">
						<table width="100%" cellpadding="0" cellspacing="0" border="0" class="sai_tabs">
							<tr>
								<td width="50%"><a class="sai_tab" href="javascript:tabs.tab(\'local_imp_but\')" id="local_imp_but">'.$l['local_btn'].'</a></td>
								<td><a class="sai_tab" href="javascript:tabs.tab(\'remote_imp_but\')" id="remote_imp_but">'.$l['remote_btn'].'</a></td>
							</tr>
						</table><br />
					</div>
					
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
									<li><a href="javascript:tabs.tab(\'local_imp_but\')" id="local_imp_but_res" class="sai_tab2" style="text-decoration:none;" data-toggle="collapse" data-target="#myNavbar">'.$l['local_btn'].'</a></li>
									<li><a href="javascript:tabs.tab(\'remote_imp_but\')" id="remote_imp_but_res" class="sai_tab2" style="text-decoration:none;" data-toggle="collapse" data-target="#myNavbar">'.$l['remote_btn'].'</a></li>
								</ul>
							</div>
						</nav>
					</div>';
				}
				
				if(empty($globals['lictype']) && !empty($scripts[$soft]['force_scripts'])){
					echo '<center class="alert alert-warning">'.lang_vars($l['not_in_free'], array($software['name'])).(!webuzo() ? '&nbsp;&nbsp;'.$l['notify_admin'] : '').'</center>';
				}
				
				error_handle($error, "100%");
				
				if(!empty($can_import)){
				
					$dbname = mysqldbname($software['softname']);
		
					if(method_exists($softpanel, 'mysqldbname')){
						$dbname = $softpanel->mysqldbname();
					}
					
					$install = @implode('', file($software['path'].'/install.xml'));

					if(preg_match('/<db>mysql<\/db>/is', $install)){
						$has_db = 1;
					}
				}
				
				if(empty($softpanel->noprotocol) && empty($globals['hide_protocol'])){
				
					if(empty($can_import)) echo '<hr />';
					
					echo '
					<div class="bg2" id="local_import" '.(isset($_POST['remote_submit']) ? 'style="display:none;"' : '').'><br />
						<div class="row">
							<div class="col-sm-5">
								<label for="softproto" class="sai_head">'.$l['choose_protocol'].'</label>
								<span class="sai_exp">'.$l['choose_protocol_exp'].'</span>
							</div>
							<div class="col-sm-7">
								<select name="softproto" id="softproto" class="form-control" onblur="checkhttps(\'softproto\', \'softdomain\', false)">';
									foreach($protocols as $k => $v){
										echo '<option value="'.$k.'" '.(optPOST('softproto') == $k || ($globals['default_protocol'] == $k && empty($_POST['softproto'])) ? 'selected="selected"' : '').'>'.$v.'</option>';
									}
								echo '
								</select>
								<div style="display:none;" id="checkhttps_wait">&nbsp;&nbsp;<img src="'.$theme['images'].'progress.gif" alt="please wait.."></div><br />
								<div class="row">
									<div class="col-sm-12">
										<span id="httpserror" style="display:none; font-size:12px; padding:10px;" class="alert alert-warning"></span>
									</div>
								</div>
							</div>
						</div>';
					}
					
					echo '
					<div class="row">
						<div class="col-sm-5">
							<label for="softdomain" class="sai_head">'.$l['choose_domain'].'</label>
							<span class="sai_exp">'.$l['choose_domain_exp'].'</span>
						</div>
						<div class="col-sm-7">
							<select name="softdomain" id="softdomain" class="form-control" onblur="checkhttps(\'softproto\', \'softdomain\', false)">';
								foreach($softpanel->domainroots as $domain => $dompath){
									echo '<option value="'.$domain.'" '.((!empty($_POST['softdomain']) && $_POST['softdomain'] == $domain) ? 'selected="selected"' : '').'>'.$domain.'</option>';
								}
								// For PERL Append /cgi-bin/ in front of textbox
								$perl = ($iscripts[$soft]['type'] == 'perl' ? (empty($softpanel->user['cgi-bin']) ? '' : $softpanel->user['cgi-bin']) : '');
							echo '
							</select>
						</div>
					</div><br />
					
					<div class="row">
						<div class="col-sm-5">
							<label for="softdirectory" class="sai_head">'.$l['in_directory'].'</label><br />
							<span class="sai_exp2">'.$l['in_directory_exp'].'</span>
						</div>
						<div class="col-sm-7">
							<span style="font-size: 14px; color: #555;">'.(!empty($perl) ? $perl.'/' : '').'</span><input type="text" name="softdirectory" id="softdirectory" class="form-control" size="30" value="'.POSTval('softdirectory', '').'" />
						</div>
					</div><br />
				</div>
				<p align="center">
					'.csrf_display().'
					<input type="hidden" name="softsubmit" id="softsubmit" value="'.$l['softsubmit'].'" />
					<input type="submit" id="local_sub_btn" class="flat-butt" name="local_sub_btn" value="'.$l['softsubmit'].'"/><br /><img id="waiting" src="'.$theme['images'].'progress.gif" style="display:none">
				</p>
				<input type="hidden" name="soft_status_key" id="soft_status_key_local" value="'.POSTval('soft_status_key', generateRandStr(32)).'" />
				</form>
				
				<form accept-charset="'.$globals['charset'].'" name="importsoftware_r" method="post" action="" onsubmit="return checkform(this.id);" class="form-horizontal" id="importsoftware_r">';
				
				if(!empty($can_import)){
					echo '<div id="remote_import" '.(!isset($_POST['remote_submit']) ? 'style="display:none;"' : '').'>
					<div style="padding: 0 25px;">
						<div class="sai_main_head">'.$l['source'].'</div><hr>
						<div class="row">
							<div class="col-sm-5">
								<label for="domain" class="sai_head">'.$l['domain'].'</label><br />
								<span class="sai_exp2">'.$l['domain_exp'].'</span>
							</div>
							<div class="col-sm-7">
								<input type="text" name="domain" id="domain" class="form-control" value="'.POSTval('domain', '').'" />
							</div>
						</div><br />
						
						<div class="row">
							<div class="col-sm-5">
								<label for="server_host" class="sai_head">'.$l['server_host'].'</label>
								<span class="sai_exp">'.$l['server_host_exp'].'</span>
							</div>
							<div class="col-sm-7">
								<input type="text" name="server_host" id="server_host" class="form-control" value="'.POSTval('server_host', '').'" />
							</div>
						</div><br />
						
						<div class="row">
							<div class="col-sm-5">
								<label for="protocol" class="sai_head">'.$l['protocol'].'</label>
								<span class="sai_exp">'.$l['protocol_exp'].'</span>
							</div>
							<div class="col-sm-7">
								<select name="protocol" class="form-control" id="protocol">
									<option value="ftp" '.(isset($_POST['protocol']) && $_POST['protocol'] == 'ftp' ? 'selected="selected"' : '').'>FTP</option>
									<option value="ftps" '.(isset($_POST['protocol']) && $_POST['protocol'] == 'ftps' ? 'selected="selected"' : '').'>FTPS</option>
									<option value="sftp" '.(isset($_POST['protocol']) && $_POST['protocol'] == 'sftp' ? 'selected="selected"' : '').'>SFTP</option> 
								</select>
							</div>
						</div><br />
					
						<div class="row">
							<div class="col-sm-5">
								<label for="port" class="sai_head">'.$l['port'].'</label>
								<span class="sai_exp">'.$l['port_exp'].'</span>
							</div>
							<div class="col-sm-7">
								<input type="text" name="port" id="port" class="form-control" value="'.POSTval('port', '').'" />
							</div>
						</div><br />
						
						<div class="row">
							<div class="col-sm-5">
								<label for="ftp_user" class="sai_head" id="ftp_user_head">'.$l['ftp_user'].'</label><br />
								<span class="sai_exp2">'.$l['ftp_user_exp'].'</span>
							</div>
							<div class="col-sm-7">
								<input type="text" name="ftp_user" id="ftp_user" class="form-control" value="'.POSTval('ftp_user', '').'" />
							</div>
						</div><br />
						
						<div class="row" id="ftp_pass">
							<div class="col-sm-5">
								<label for="ftp_passwd" class="sai_head" id="ftp_pass_head">'.$l['ftp_pass'].'</label><br />
								<span class="sai_exp2">'.$l['ftp_pass_exp'].'</span>
							</div>
							<div class="col-sm-7">
								<div class="row">
									<div class="col-sm-11">
									<input type="password" name="ftp_pass" id="ftp_passwd" class="form-control" value="'.POSTval('ftp_pass', '').'" autocomplete="off" />
									</div>
									<div class="col-sm-1" style="margin-left:-20px;">
									<input id="toggle_passwd" type="checkbox" style="display:none;" onclick="toggle_pass(\'show_hide\', \'ftp_passwd\');" /><label for="toggle_passwd" style="margin-top:6px;"><span id="show_hide">'.$l['show'].'</span></label>
									</div>
								</div><br />
							</div>
						</div>
		
						<div class="row" id="trauthpass">
							<div class="col-sm-5">
								<label for="auth_password" class="sai_head">'.$l['auth_password'].'</label>
								<span class="sai_exp">'.$l['auth_password_exp'].'</span>
							</div>
							<div class="col-sm-7">
								<input type="radio" name="auth_password" id="auth_password" value="1" onchange="check_auth_password();" '.POSTradio('auth_password', 1, 1).' />&nbsp;'.$l['auth_method_pass'].' &nbsp;&nbsp;
								<input type="radio" name="auth_password" id="auth_password" value="" onchange="check_auth_password();" '.POSTradio('auth_password', '').' />&nbsp;'.$l['auth_method_key'].'<br /><br />
							</div>
						</div>
						
						<div class="row" id="pri">
							<div class="col-sm-5">
								<label for="private_key" class="sai_head">'.$l['private_key'].'</label><br />
								<span class="sai_exp2">'.$l['private_key_exp'].'</span>
							</div>
							<div class="col-sm-7">
								<textarea name="private_key" id="private_key" rows="15" cols="70" class="form-control">'.aPOSTval('private_key').'</textarea><br />
							</div>
						</div>
						
						<div class="row" id="passphrase">
							<div class="col-sm-5">
								<label for="passphrase" class="sai_head">'.$l['passphrase'].'</label><br />
								<span class="sai_exp2">'.$l['passphrase_exp'].'</span>
							</div>
							<div class="col-sm-7">
								<input type="text" name="passphrase" id="passphrase" class="form-control" value="'.POSTval('passphrase', '').'" /><br />
							</div>
						</div>
						
						<div class="row">
							<div class="col-sm-5">
								<label for="ftp_path" class="sai_head" id="ftp_path_head">'.$l['ftp_path'].'</label><br />
								<span class="sai_exp2" id="ftp_path_exp">'.$l['ftp_path_exp'].'</span>
							</div>
							<div class="col-sm-7">
								<input type="text" name="ftp_path" id="ftp_path" class="form-control" value="'.POSTval('ftp_path', '').'" />
							</div>
						</div><br />
						
						<div class="row">
							<div class="col-sm-5">
								<label for="Installed_path" class="sai_head">'.$l['Installed_path'].'</label><br />
								<span class="sai_exp2">'.$l['Installed_path_exp'].'</span>
							</div>
							<div class="col-sm-7">
								<input type="text" name="Installed_path" id="Installed_path" class="form-control" value="'.POSTval('Installed_path', '').'" />
							</div>
						</div><br />
						</div>
						
						<div class="bg">
						<div class="sai_main_head">'.$l['destination'].'</div><hr>
						<div class="row">
							<div class="col-sm-5">
								<label for="softproto" class="sai_head">'.$l['choose_protocol'].'</label>
								<span class="sai_exp">'.$l['choose_protocol_exp'].'</span>
							</div>
							<div class="col-sm-7">
								<select name="softproto" id="softproto_r" class="form-control" onblur="checkhttps(\'softproto\', \'softdomain\', false)">';
									foreach($protocols as $k => $v){
										echo '<option value="'.$k.'" '.(optPOST('softproto') == $k || ($globals['default_protocol'] == $k && empty($_POST['softproto'])) ? 'selected="selected"' : '').'>'.$v.'</option>';
									}
								echo '
								</select>
								<div style="display:none;" id="checkhttps_wait">&nbsp;&nbsp;<img src="'.$theme['images'].'progress.gif" alt="please wait.."></div><br />
								<div class="row">
									<div class="col-sm-12">
										<span id="httpserror" style="display:none; font-size:12px; padding:10px;" class="alert alert-warning"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-5">
								<label for="softdomain" class="sai_head">'.$l['choose_domain'].'</label>
								<span class="sai_exp">'.$l['choose_domain_exp'].'</span>
							</div>
							<div class="col-sm-7">
								<select name="softdomain" id="softdomain_r" class="form-control" onblur="checkhttps(\'softproto\', \'softdomain\', false)">';
									foreach($softpanel->domainroots as $domain => $dompath){
										echo '<option value="'.$domain.'" '.((!empty($_POST['softdomain']) && $_POST['softdomain'] == $domain) ? 'selected="selected"' : '').'>'.$domain.'</option>';
									}
									// For PERL Append /cgi-bin/ in front of textbox
									$perl = ($iscripts[$soft]['type'] == 'perl' ? (empty($softpanel->user['cgi-bin']) ? '' : $softpanel->user['cgi-bin']) : '');
								echo '
								</select>
							</div>
						</div><br />
						<div class="row">
							<div class="col-sm-5">
								<label for="dest_directory" class="sai_head">'.$l['in_directory'].'</label><br />
								<span class="sai_exp2">'.$l['in_directory_exp'].'</span>
							</div>
							<div class="col-sm-7">
								<span style="font-size: 14px; color: #555;">'.(!empty($perl) ? $perl.'/' : '').'</span><input type="text" name="dest_directory" id="dest_directory" class="form-control" size="30" value="'.POSTval('dest_directory', '').'" />
							</div>
						</div><br />';
						
						if(aefer() && empty($softpanel->auto_managedb) && !empty($has_db)){
							
							echo '<div class="row">
									<div class="col-sm-5">
										<label for="softdb" class="sai_head">'.$l['database_name'].'</label><br />
										<span class="sai_exp2">'.$l['database_name_exp_aefer'].'</span>
									</div>
									<div class="col-sm-7">
										<input type="text" name="softdb" class="form-control" id="softdb" size="30" value="'.POSTval('softdb', $dbname).'" onblur="checkdbname(\'softdb\', false)" />
										<span id="softdberror" style="background: #FDB3B3; display:none; width:200px;"></span>
									</div>
								</div><br />';
						}
						
						if(!empty($softpanel->no_db_create) && !empty($has_db)){
							echo '<div class="row">
									<div class="col-sm-5">
										<label for="dbusername" class="sai_head">'.$l['dbusername'].'</label><br />
										<span class="sai_exp2">'.$l['dbusername_exp'].'</span>
									</div>
									<div class="col-sm-7">
										<input type="text" name="dbusername" class="form-control" id="dbusername" size="30" value="'.POSTval('dbusername', '').'" />
									</div>
								</div><br />
								
								<div class="row">
									<div class="col-sm-5">
										<label for="dbuserpass" class="sai_head">'.$l['dbuserpass'].'</label><br />
										<span class="sai_exp2">'.$l['dbuserpass_exp'].'</span>
									</div>
									<div class="col-sm-7">
										<div class="row">
											<div class="col-sm-11">
												<input type="password" name="dbuserpass" class="form-control" id="dbuserpass" size="30" value="'.POSTval('dbuserpass', '').'" />
											</div>
											<div class="col-sm-1" style="margin-left:-20px;">
												<input id="toggle_pass_db_pass" type="checkbox" style="display:none;" onclick="toggle_pass(\'show_hide_db_pass\', \'dbuserpass\');"/><label for="toggle_pass_db_pass" style="margin-top:6px;"><span id="show_hide_db_pass">'.$l['show'].'</span></label>
											</div>
										</div>
									</div>
								</div><br />
								
								<div class="row">
									<div class="col-sm-5">
										<label for="hostname" class="sai_head">'.$l['hostname'].'</label><br />
										<span class="sai_exp2">'.$l['hostname_exp'].'</span>
									</div>	
									<div class="col-sm-7">	
										<input type="text" name="hostname" class="form-control" id="hostname" size="30" value="'.POSTval('hostname', $dbhost).'" />
									</div>	
								</div>';
						}
					
					echo '</div><br />';
					
					if(!empty($has_db) && empty($softpanel->auto_managedb) && !aefer()){
						echo '<div class="bg">
								<div class="sai_head" id="advoptions_toggle" onclick="toggle_advoptions(\'advoptions\');" style="cursor:pointer"><h4><b><img id="advoptions_toggle_plus"  src="'.$theme['images'].'plus_new.gif" style="margin-top:-4px;"/>&nbsp;&nbsp;'.$l['adv_option'].'</b></h4></div>
								<div id="advoptions" style="display:none;"><hr>
									<div class="row">
										<div class="col-sm-5">
											<label for="softdb" class="sai_head">'.$l['database_name'].'</label><br />
											<span class="sai_exp2">'.$l['database_name_exp'].'</span>
										</div>
										<div class="col-sm-7">';
										
										$dbfield = '<input type="text" name="softdb" class="form-control" id="softdb" size="30" value="'.POSTval('softdb', $dbname).'" onblur="checkdbname(\'softdb\', false)" /><br />';
										
										$soft_dbprefix = $softpanel->dbname('');
										if(!empty($soft_dbprefix) && $soft_dbprefix != '_'){
											$dbfield = '
											<div class="input-group">
												<div class="input-group-addon">
													<span class="input-group-text">'.$soft_dbprefix.'</span>
												</div>
												'.$dbfield.'
											</div>';
										}
										echo $dbfield.'
											<span id="softdberror" style="background: #FDB3B3; display:none; width:auto;"></span><br />
										</div>
									</div>
								</div>
							</div>';
					}
					echo '</div> <!--end of bg class-->';
				}
				
				echo '				
				<p align="center">
					'.csrf_display().'
					
					<input type="hidden" name="remote_submit" id="remote_submit" value="'.$l['softsubmit'].'" />
					<input type="submit" id="remote_sub_btn" class="flat-butt" name="remote_sub_btn" value="'.$l['softsubmit'].'" style="display:none;"/><br /><img id="waiting" src="'.$theme['images'].'progress.gif" style="display:none">
				</p><br />
				<input type="hidden" name="soft_status_key" id="soft_status_key_remote" value="'.POSTval('soft_status_key', generateRandStr(32)).'" />
				
				<center><b><a href="'.script_link($soft).'" class="sai_head">'.$l['return'].'</a></b></center><br />
				</form>	
			</div><!--end of bg class--><br />
		</div><!--end of fadeout-->
	
		<div id="progress_bar" style="display: none; width: 100%;">
			<div class="bg">
				<center>
					<div class="row sai_main_head" style="width:100%;" align="center">
						<div class="col-sm-5 col-xs-5" style="padding:0 10px 0 0; text-align:right;">
							<i class="fa sai-copy fa-2x" style="color:#00A0D2;"></i>
						</div>
						<div class="col-sm-7 col-xs-7" style="padding-top:10px; padding-left:0; text-align:left;">'.$l['import_script'].' '.$software['name'].'</div>
					</div>
					<br />
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
		</div>
	</div>'; //win_div close

	softfooter();

}

?>