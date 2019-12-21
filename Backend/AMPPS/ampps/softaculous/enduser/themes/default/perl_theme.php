<?php

//////////////////////////////////////////////////////////////
//===========================================================
// software_theme.php
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


function perl_theme(){

global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $scripts, $allcatwise;
global $software, $soft, $info, $settings, $init_tab, $dbtype, $dbs, $installed, $__settings, $setupcontinue, $installations, $notes, $cron, $datadir, $ajaxdb, $ajaxdbexists, $overwrite_option, $protocols, $nopackage, $www, $ajaxhttpsexists, $ajaxhttps, $new_insid;

if(optGET('notify')){	
	
	get_softaculous_file('http://www.softaculous.com/notifyversion.php?softid="'.$soft.'"');
	echo 1;
	return true;

}

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


if(!empty($ajaxdb)){
	echo $ajaxdbexists;
	return true;
}

if(!empty($ajaxhttps)){
	echo $ajaxhttpsexists;
	return true;
}

// Auto Installation responses
if(isset($_GET['autoinstall'])){
	
	// Installed successfully
	if(!empty($installed)){
		echo 'installed';
		return true;
	}
	
	// Are there errors
	if(!empty($error)){
		echo serialize($error);
		return false;
	}
}

$outdated_script = is_outdated_script($soft);

//First add the installation info
if(empty($installed)){
	
	$random_username = true;
	
	// This is to see if a script has predefined username and cannot be changed
	foreach($settings as $ik => $iv){		
		if($ik == 'hidden') continue;
		foreach($iv as $ikk => $ivv){				
			if($ikk == 'admin_username' && preg_match('/disabled=\"disabled\"/ie', $ivv['tag'])){
				$random_username = false;
			}			
		}
	}
	
	$info['install'] = '<div id="fadeout_div"><form accept-charset="'.$globals['charset'].'" name="installsoftware" method="post" action="" onsubmit="return checkform();" id="installsoftware" class="form-horizontal">';

	if(ampps() && !is_ampps_premium() && count($user['ins']) >= 3){
		$info['install'] .= '<center class="alert alert-warning">'.$l['ampps_notify_premium'].'</center>';
	}
	
	if(empty($globals['lictype']) && !empty($scripts[$soft]['force_scripts'])){
		$info['install'] .= '
		<div class="alert alert-warning">
			<a href="#close" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<center>'.lang_vars($l['not_in_free'], array($software['name'])).(!webuzo() ? '&nbsp;&nbsp;'.$l['notify_admin'] : '').'</center>
		</div>';
	}
	
	$info['install'] .= error_handle($error, "100%", 0, 1).'

<script language="javascript" type="text/javascript"><!-- // --><![CDATA[';

//If domain has SSL installed then select protocol https:// by default on page load.
if((empty($globals['default_protocol']) || $globals['default_protocol'] <= 1) && empty($globals['off_checkhttps'])){
	$info['install'] .= '	
	
	$(document).ready(function(){
		
		$("#install, #install_now").click(function(){
			check_https();
		});

		if($("#install_win").is(":visible")){
			check_https();
		}
	});
		
	function check_https(){
		$.ajax({
			type: "POST",
			url: "'.$globals['index'].'act=perl&soft='.$soft.'&checkhttps="+encodeURIComponent($("#softdomain").val()),
			timeout:10000,
			// Checking for success
			success: function(data){
				if(data == "true"){
					$("#softproto").val(3);
				}
			}
		});
	}';
}

$info['install'] .= '

$("#quick_install_btn, #show_less_form").click(function(){
	quick_install();
});

//Handling if user clicked on quick install and come back to custom install.
$("#custom_install_btn, #show_full_form").click(function(){
	custom_install();
});

';

// This is because we do not want to overwrite the value in case of AJAX calls
if(empty($_GET['jsnohf'])){
	$info['install'] .= 'var is_quick_install = '.(!empty($globals['quick_install_default']) ? '1' : '0').';

	$("#show_install_option").click(function(){
		$("#quick_install_dropdown").slideToggle("fast");
	});';
}

$info['install'] .= '
$(document).ready(function(){
	
	//Get width of install tab to show the dropdown with correct width
	var installwidth = $("#install").width();
	var caretwidth = $("#show_install_option").width();
	var total_instab_width = installwidth+caretwidth;
	
	$("#quick_install_dropdown").css("width",total_instab_width);
	
	if($("#install_win").is(":visible")){
		post_install_but();
	}
});

$("#install, #install_now").click(function(){
	post_install_but();
});

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

function display_pass_strength(score, per){
	
	var lang;
	//disp_per = $("#pass-strength-hidden").val();
	
	if(typeof per == "undefined") per = 0;
	
	if(score == "bad") lang = "'.$l['bad'].'";
	if(score == "good") lang = "'.$l['good'].'";
	if(score == "strong") lang = "'.$l['strong'].'";
	if(score == "short") lang = "'.$l['short'].'";
	if(score == "strength_indicator") lang = "'.$l['strength_indicator'].'";
	
	$("#pass-strength-result").addClass(score).html( lang+" ("+per+"/100)" );
}

function checkform(dosubmit){
	
	// If admin has set the password strength than only we will check for it.
	'.(!empty($globals['pass_strength']) ? '
	//alert($("#pass-strength-hidden").val());
	if(parseInt($("#pass-strength-hidden").val()) < '.$globals['pass_strength'].'){
		alert("'.$l['err_pass_strength'].'"+'.$globals['pass_strength'].');
		return false;
	}' : '').'
	
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
			
					// Create a dummy div to hold the results
					// inject the contents of the document in, removing the scripts
					// to avoid any "Permission Denied" errors in IE
					var newhtml = jQuery("<div>").append(responseText).find(progressbar.win_div).html();
					
					$(progressbar.win_div).animate({opacity: 0}, 1000, "", function(){
						$(progressbar.win_div).html(newhtml);
						
						//quick install? this is because now the newhtml has been filled in win_div(for error and selectversion)
						post_install_but();
						
						show_backup();
						check_pass_strength();
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
				url: "'.$globals['index'].'act=perl&soft='.$soft.'&ajaxdownload=1&random="+Math.random(),
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
	show_msg("'.$l['installing'].'");
	checkform(1);
};

softemail = new Object();
function softmail(){
	try{
		var use_eu_email = "'.(!empty($globals['use_eu_email']) ? $globals['use_eu_email'] : 0).'";
		if(use_eu_email > 0){
			return true;
		}
		var sofdom = "softdomain";
		for(x in softemail){
			if(softemail[x] == true) continue;
			var temp = $_(x).value.split("@");
			if($_(sofdom).value.indexOf("/") > 0){
				var dom_value = $_(sofdom).value.substring(0, $_(sofdom).value.indexOf("/"));
			}else{
				var dom_value = $_(sofdom).value;
			}
			$_(x).value = temp[0] + "@" + dom_value;
		}
	}catch(e){
		return false;
	}
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
				url: "'.$globals['index'].'act=perl&soft='.$soft.'&checkhttps="+encodeURIComponent(no_proto+$_(softdomain_id).value),
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
			
			//AJAX("'.$globals['index'].'act=software&soft='.$soft.'&checkhttps="+id.options[id.selectedIndex].text+$_(softdomain_id).value, "is_https(re)");
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

function prepend_prefix(prefix){
	
	// Decide prefix USERNAME, DOMAIN OR USER DEFINED
	if(prefix != "" && prefix == "username") prefix = "'.$softpanel->user['name'].'";
	if(prefix != "" && prefix == "domain") prefix = "'.current(array_keys($softpanel->domainroots)).'";
	if(prefix != "" && prefix != "domain" && prefix != "username");
	
	// APPEND OLD USERNAME OR DEFAULT USERNAME
	var old = $_("admin_username").value
	temp = $_("admin_username").value.split("-");
	if (typeof temp[1] == \'string\' || temp[1] instanceof String){
		$_("admin_username").value = prefix+"-"+temp[1];
	}else{
		$_("admin_username").value = prefix+"-"+old;
	}
}

function change_admin_prefix(domain){
	var admin_prefix = \''.$globals['admin_prefix'].'\';
	var random_username = \''.(!empty($random_username) ? 'true' : '').'\';
	var empty_username = \''.(empty($globals['empty_username']) ? 'true' : '').'\';
	var gl_random_username = \''.(empty($globals['random_username']) ? 'true' : '').'\';
	if(admin_prefix == "domain" && random_username == "true" && empty_username == "true" && gl_random_username == "true"){
		prepend_prefix(domain);
	}
}
  
// show/hide backup options
function show_backup(){

	var auto_backup = $("#auto_backup").val();
	
	if(auto_backup == 0){
		$("#auto_backup_rotation").attr("disabled", true);
		$("#custom_autobackup_cron").css("display", "none");
	}else{
		if(auto_backup == "custom"){
			$("#custom_autobackup_cron").css("display", "block");
		}else{
			$("#custom_autobackup_cron").css("display", "none");
		}
		$("#auto_backup_rotation").attr("disabled", false);
	}
	
	return true;
};

'.(!empty($_POST) ? '' : 'addonload(\'softmail();show_backup();\');');

if(!empty($dbtype)){

$info['install'] .= 'function checkdbname(id, alrt){
	try{		
		AJAX("'.$globals['index'].'act=perl&soft='.$soft.'&checkdbexists="+$_(id).value, "dbexists(\'"+id+"\', "+alrt+", re)");	
	}catch(e){
		//
	}
	return true;
};

function dbexists(id, alrt, re){
	try{
		
		dberror = "";
		
		//Is the length fine
		if($_(id).value.length > 7){
			dberror = "'.$l['db_name_long'].'";
		}
		
		//There should be only alphanumeric characters
		if(/[^a-zA-Z0-9]/.test($_(id).value)){
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

$info['install'] .= '// ]]></script>';


$info['install'] .= '
<div class="bg">
	<button type="button" class="btn pull-right quick_form_toggle_btn" id="show_full_form" style="display:none;" onclick="custom_install();return false;">'.$l['custom_install'].'</button>
	<button type="button" class="btn pull-right quick_form_toggle_btn" id="show_less_form" style="display:none;" onclick="quick_install();return false;">'.$l['quick_install'].'</button>
	<div class="sai_sub_head">'.$l['setup'].'</div><hr>';
	
	
	$info['install'] .= '
	<div class="row">
		<div class="col-sm-5">
			<label class="sai_head">'.$l['choose_url'].'</label><br />
			<span class="sai_exp2">'.$l['choose_url_exp'].'</span>
		</div>
		<div class="col-sm-7">';
		
	if(empty($softpanel->noprotocol) && empty($globals['hide_protocol'])){
		$info['install'] .= '
		<div class="col-sm-3 custom_install" style="padding-left:0;padding-right:1px;width:24%;">
			<select name="softproto" class="form-control" id="softproto" onblur="checkhttps(\'softproto\', \'softdomain\', false)">';
			foreach($protocols as $k => $v){
				$info['install'] .= '<option value="'.$k.'" '.(optPOST('softproto') == $k || ($globals['default_protocol'] == $k && empty($_POST['softproto'])) ? 'selected="selected"' : '').'>'.$v.'</option>';
			}
			$info['install'] .= '</select>
			<span class="sai_exp2" style="margin-left:4px;">'.$l['choose_protocol'].'&nbsp;<img src="'.$theme['images'].'info-16.png" class="someclass" style="width:14px;height:14px;cursor:pointer;" alt="'.$l['choose_protocol_exp'].'" title="'.$l['choose_protocol_exp'].'" /></span>
		</div>';
	}
	
	$info['install'] .= '
	<div class="col-sm-6" style="padding-left:0;padding-right:0;">
		<select name="softdomain" class="form-control" id="softdomain" onchange="softmail();change_admin_prefix(this.value);" onblur="checkhttps(\'softproto\', \'softdomain\', false)">';
		if(!empty($globals['blank_domain'])){
			$info['install'] .= '<option value="" '.(empty($_POST['softdomain']) ? 'selected="selected"' : '').'>('.$l['select_domain'].')</option>';
		}
		foreach($softpanel->domainroots as $domain => $dompath){
			$info['install'] .= '<option value="'.$domain.'" '.((!empty($_POST['softdomain']) && $_POST['softdomain'] == $domain) ? 'selected="selected"' : '').'>'.$domain.'</option>';
		}
		$info['install'] .= '
		</select>
		<span class="sai_exp2" style="margin-left:4px;">'.$l['choose_domain'].'&nbsp;<img src="'.$theme['images'].'info-16.png" class="someclass" style="width:14px;height:14px;cursor:pointer;" alt="'.$l['choose_domain_exp'].'" title="'.$l['choose_domain_exp'].'" /></span>
	</div>';
		
	if(empty($globals['no_indir'])){
		$info['install'] .= '
		<div class="col-sm-3" style="padding-left:1px;padding-right:0;">
			<input type="text" name="softdirectory" class="form-control" id="softdirectory" size="30" value="'.POSTval('softdirectory', (!empty($globals['no_prefill']) ? '' : $software['softname'])).'" />
			<span class="sai_exp2" style="margin-left:4px;">'.$l['in_directory'].'&nbsp;<img src="'.$theme['images'].'info-16.png" class="someclass" style="width:14px;height:14px;cursor:pointer;" alt="'.$l['in_directory_exp'].'" title="'.$l['in_directory_exp'].'" /></span>
		</div>';
	}
	
	$info['install'] .= '
			<div class="row col-sm-12">
				<div style="display:none;" id="checkhttps_wait">&nbsp;&nbsp;<img src="'.$theme['images'].'progress.gif" alt="Please wait.."></div>
				<span id="httpserror" style="display:none; padding:10px; margin-bottom:0px;" class="alert alert-warning"></span>
			</div>
		</div>
	</div><br />';
	
	// A www Directory ?
	if(!empty($www)){
	
		$info['install'] .= '
		<div class="row">
			<div class="col-sm-5">
				<label for="wwwdir" class="sai_head">'.$l['wwwdir'].'</label><br />
				<span class="sai_exp2">'.$l['wwwdir_exp'].'</span>
			</div>
			<div class="col-sm-7">
				<input type="text" name="wwwdir" id="wwwdir" class="form-control" size="30" value="'.POSTval('wwwdir', $www).'" />		
			</div>
		</div><br />';
	
	}
	
	if(!empty($datadir)){
		$info['install'] .= '
		<div class="row">
			<div class="col-sm-5">
				<label for="datadir" class="sai_head">'.$l['datadir'].'</label><br />
				<span class="sai_exp2">'.$l['datadir_exp'].'</span>
			</div>
			<div class="col-sm-7">
				<input type="text" name="datadir" class="form-control" id="datadir" size="30" value="'.POSTval('datadir', $datadir).'" />		
			</div>
		</div><br />';
	}

	if(!empty($dbtype)){
		
		$dbdetails = array();
		$dbdetails['dbname'] = '';
		$dbdetails['dbhost'] = '';
		$dbdetails['dbusername'] = '';
		$dbdetails['dbuserpass'] = '';
	
		$dbdetails['dbname'] = mysqldbname($software['softname']);
		
		if(method_exists($softpanel, 'mysqldbname')){
			$dbdetails['dbname']= $softpanel->mysqldbname();
		}
		
		$dbdetails = apply_filters('post_load_dbdetails', $dbdetails);
		
		if(aefer() && empty($softpanel->auto_managedb)){
			$info['install'] .= '<br />
			<div class="row">
				<div class="col-sm-5">
					<label for="softdb" class="sai_head">'.$l['database_name'].'</label><br />
					<span class="sai_exp2">'.$l['database_name_exp'].'</span>
				</div>
				<div class="col-sm-7">
					<input type="text" name="softdb" id="softdb" class="form-control" size="30" value="'.POSTval('softdb', $dbdetails['dbname']).'" onblur="checkdbname(\'softdb\', false)" autocomplete="false" />
					<span id="softdberror" style="background: #FDB3B3; display:none; width:200px;"></span>
				</div>
			</div><br />';
		}
	}


	// Are there any cron jobs
	if(!empty($cron)){
	
		$info['install'] .= '
		<div class="row custom_install">
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
	
	// Do we need to load any additional fields required by server admin ?
	if(!empty($GLOBALS['install_fields'])){
		
		foreach($GLOBALS['install_fields'] as $ifk => $ifv){
			
			if(empty($ifv['input'])) continue;
			
			//Adding class to input
			if(preg_match('/type="text"/is', $ifv['input']) && !preg_match('/class="form-control"/is', $ifv['input'])){
				$ifv['input'] = preg_replace('/>/is', ' class="form-control">',$ifv['input']);
			}
			
			if(preg_match('/<select/is', $ifv['input']) && !preg_match('/class="form-control"/is', $ifv['input'])){
				$ifv['input'] = preg_replace('/<select/is', '<select class="form-control"',$ifv['input']);
			}
			
			$info['install'] .= '
			<div class="row">
				<div class="col-sm-5">
					<span class="sai_head">'.$ifv['head'].'</span><br />
					<span class="sai_exp2">'.$ifv['exp'].'</span>
				</div>
				<div class="col-sm-7">
					'.$ifv['input'].'
				</div>
			</div>';
			
		}
	}
	
	$info['install'] .= '
</div><br /><!--end of bg class-->';
	
	
	if(!empty($settings)){
		
		if(file_exists($software['path'].'/install.js')){
			$info['install'] .= '<script language="javascript" type="text/javascript"><!--// --><![CDATA[';
			$info['install'] .= @parselanguages(str_replace('$(', '$_(', implode('', file($software['path'].'/install.js'))));
			$info['install'] .= '// ]]></script>';
		}
		
		foreach($settings as $group => $sets){
			
			if($group == 'hidden' || empty($sets)) continue;
			
			// We will show dbprefix under advanced options
			if(count($sets) == 1 && array_key_exists('dbprefix', $sets)){
				$dbprefix = $sets;
				continue;
			}
			
			$info['install'] .= '
			<div class="script_blocks">
			<div class="bg">
				<div class="sai_sub_head">'.$group.'</div><hr>';

			foreach($sets as $sk => $sv){
				
				if(preg_match('/dbprefix/is', $sv['tag'])){
					$dbprefix[$sk] = $sv;
					continue;
				}
						
				//Adding class to input
				if(preg_match('/type="text"/is', $sv['tag'])){
					$sv['tag'] = preg_replace('/>/is', ' class="form-control">',$sv['tag']);
				}
				if(preg_match('/<select/is', $sv['tag'])){
					$sv['tag'] = preg_replace('/<select/is', '<select class="form-control"',$sv['tag']);
				}
				$info['install'] .= '
				<div class="script_fields" '.(!empty($sv['quick_install']) ? 'quick_install="1"' : '').'>
				<div class="row">
					<div class="col-sm-5">
						<label for='.$sk.' class="sai_head" id="sai_head">'.$sv['head'].'</label>
							'.(empty($sv['exp']) ? '' : '<span class="sai_exp">'.$sv['exp'].'</span>').'	
					</div>
					'.(preg_match('/admin_pass|softpass/is', $sv['tag']) ? preg_replace('/>|\/>/is',' onkeyup="check_pass_strength();" >', '
						<div class="col-sm-6">'.$sv['tag'].'<div id="pass-strength-result" style="border-radius:3px;width:100%;">'.$l['strength_indicator'].'</div></div>') :'<div class="col-sm-7 ">'.$sv['tag'].'</div>').'
						'.(preg_match('/softmail/is', $sv['tag']) ? '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
						softemail["'.$sk.'"] = false;
						//Add an event handler
						$_("'.$sk.'").onkeydown = function(){
							softemail["'.$sk.'"] = true;
						}
						// ]]></script>
						' : '').'
						'.(preg_match('/admin_pass|softpass/is', $sv['tag']) ? '
						<div class="col-sm-1"><div class="row" style="margin-left:-25px;"><div class="col-sm-12"><input id="toggle_passwd" type="checkbox" style="display:none;" onclick="toggle_pass(\'show_hide\', \'admin_pass\');"/><label for="toggle_passwd" style="margin-top:6px;"><span id="show_hide">'.$l['hide'].'</span></label></div>
						<div class="col-sm-12" style="margin-top:6px;"><a href="javascript: void(0);"  onclick="$_(\''.$sk.'\').value=randstr(10, 1, '.(!empty($globals['pass_strength']) ? $globals['pass_strength'] : 0).');check_pass_strength();return false;" title="'.$l['randpass'].'"><img src="'.$theme['images'].'randpass.gif" /></a>
						</div></div></div>
						<div class="clearfix"></div>
						' : '').'
						
						'.(preg_match('/admin_pass|softpass/is', $sv['tag']) && (!empty($softpanel->securepass) || !empty($globals['random_pass'])) ? '
						<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
						addonload(\'$_("'.$sk.'").value=randstr(10, 1, '.(!empty($globals['pass_strength']) ? $globals['pass_strength'] : 0).');check_pass_strength();\');
						// ]]></script>
						' : '').'
						'.(preg_match('/admin_pass|softpass/is', $sv['tag']) && !empty($globals['empty_pass']) ? '
						<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
						addonload(\'$_("'.$sk.'").value="";check_pass_strength();\');
						// ]]></script>
						' : '').'
						'.(preg_match('/dbprefix/is', $sv['tag']) && !empty($globals['random_dbprefix']) ? '
						<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
						addonload(\'$_("'.$sk.'").value=randstr(3)+"_";\');
						// ]]></script>
						' : '').'
						'.(preg_match('/admin_username/is', $sv['tag']) && !empty($globals['random_username']) && !empty($random_username) ? '
						<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
						addonload(\'$_("'.$sk.'").value=randstr(5);\');
						// ]]></script>
						' : '').'
						'.(preg_match('/admin_username/is', $sv['tag']) && !empty($globals['empty_username']) && !empty($random_username) ? '
						<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
						addonload(\'$_("'.$sk.'").value="";\');
						// ]]></script>
						' : '').'
						'.(preg_match('/admin_username/is', $sv['tag']) && !empty($globals['admin_prefix']) && empty($globals['empty_username']) && empty($globals['random_username']) && !empty($random_username) ? '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
						addonload(\'prepend_prefix("'.$globals['admin_prefix'].'");\');
							// ]]></script>
						' : '').'<!--//Code for admin setting for admin email and admin username-->
						'.(preg_match('/admin_username/is', $sv['tag']) && !empty($globals['use_eu_username']) && empty($globals['empty_username']) && !empty($random_username) && empty($globals['random_username']) ? '
						<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
						addonload(\'$_("'.$sk.'").value="'.$softpanel->user['name'].'";\');
						// ]]></script>
						' : '').'
						'.(preg_match('/admin_email|board_email|site_email|bug_email|noreply_email|feedback_email|wiki_mail/is', $sv['tag']) && !empty($globals['use_eu_email']) ? '
						<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
						$(document).ready(function(){$_("'.$sk.'").value="'.$user['email'].'";});
						// ]]></script>
						' : '').'
				</div><br />
			</div>';				
			}
			$info['install'] .= '<br />
			</div><!--end of script_blocks-->
			</div><!--end of bg class-->';
		}
	
		//The Hidden groups 
		if(!empty($settings['hidden'])){
		
			foreach($settings['hidden'] as $sk => $sv){
		
				$info['install'] .= $sv['tag'].'
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
	$info['install'] .= '
		'.$l['softcopy_note'].'
	';				
}



// Advance option 

$info['install'] .= '
	<div class="bg custom_install">
		<div class="sai_sub_head" id="advoptions_toggle" onclick="toggle_advoptions(\'advoptions\');" style="cursor:pointer"><img id="advoptions_toggle_plus"  src="'.$theme['images'].'plus_new.gif" style="margin-top:-4px;"/>&nbsp;&nbsp;'.$l['adv_option'].'</div>
		<div id="advoptions" style="display:none;"><hr>';
			if(empty($dbtype) || aefer() || !empty($softpanel->auto_managedb)){
					// Do nothing
				}else{
					$info['install'] .= '<div class="row">
						<div class="col-sm-5">
							<label for="softdb" class="sai_head">'.$l['database_name'].'</label><br />
							<span class="sai_exp2">'.$l['database_name_exp'].'</span>
						</div>
						<div class="col-sm-7">';
						
						$dbfield = '<input type="text" name="softdb" class="form-control" id="softdb" size="30" value="'.POSTval('softdb', $dbdetails['dbname']).'" onblur="checkdbname(\'softdb\', false)" autocomplete="false" />';
						
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
						$info['install'] .= $dbfield.'
							<span id="softdberror" style="background: #FDB3B3; display:none; width:auto;"></span><br />
						</div>
					</div>';
				}
				
				if(isset($dbprefix)){
					foreach($dbprefix as $sk => $sv){
						
						//Adding class to input tag
						if(preg_match('/type="text"/is', $sv['tag'])){
							$sv['tag'] = preg_replace('/>/is', ' class="form-control">',$sv['tag']);
						}
						
						$info['install'] .= '<br />
						<div class="row">
							<div class="col-sm-5">
								<label for='.$sk.' class="sai_head" id="sai_head">'.$sv['head'].'</label>
									'.(empty($sv['exp']) ? '' : '<span class="sai_exp">'.$sv['exp'].'</span>').'	
							</div>
							<div class="col-sm-7 ">'.$sv['tag'].'</div>
							<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
								
								addonload(\'rand_dbprefix();\');
							// ]]></script>
						</div><br />
						';
					}
				}
				
				//Do not show 'disable update notifications' option if both 'Turn off all Emails sent to endusers' and 'Disable End User Update E-Mails' or either is enabled in Admin Panel
				if(empty($globals['off_email_link']) && empty($globals['eu_email_off'])){
					$info['install'] .= '
					<div class="row">
						<div class="col-sm-5">
							<label class="sai_head">'.$l['disable_notify_update'].'</label>
							<span class="sai_exp">'.$l['exp_disable_notify_update'].'</span>
						</div>
						<div class="col-sm-7">
							<input type="checkbox" name="disable_notify_update" id="disable_notify_update" '.POSTchecked('disable_notify_update').' />
						</div>		
					</div><br />';
				}
				
				if(empty($globals['off_rbackup']) && empty($globals['disable_backup_restore'])){
					$info['install'] .= '
					<div class="row">
						<div class="col-sm-5">
							<label for="backup_location" class="sai_head">'.$l['backup_location'].'</label><br />
							<span class="sai_exp">'.$l['backup_location_exp'].'</span>
						</div>
						<div class="col-sm-7">
							<select name="backup_location" class="form-control" id="backup_location">
								<option value="0"'.POSTselect('backup_location', 0).'>'.$l['default'].'</option>
								<option value="-1"'.POSTselect('backup_location', -1).'>'.$l['local_folder'].'</option>';
								if(!empty($user['remote_backup_locs'])){
									foreach($user['remote_backup_locs'] as $ck => $cv){
										$info['install'] .= '<option value="'.$ck.'" '.POSTselect('backup_location', $ck, (@$user['default_backup_location'] == $ck ? '1' : '0')).'>'.$cv['name'].'</option>';
									}
								}
							$info['install'] .= '</select>
						</div>
					</div><br />';
				}
				
				// Auto backups option only if backups is not disabled and panel is not remote
				if(empty($globals['disable_backup_restore']) && empty($globals['disable_auto_backup']) && !aefer() && empty($softpanel->disable_auto_backup)){
					$info['install'] .= '
					<div class="row">
						<div class="col-sm-5">
							<label for="auto_backup" class="sai_head">'.$l['auto_backup'].'</label>
							<span class="sai_exp">'.$l['exp_auto_backup'].'</span>
						</div>
						<div class="col-sm-7">
							<select name="auto_backup" class="form-control" id="auto_backup" onchange="show_backup();">
								<option value="0" '.POSTselect('auto_backup', '0', 1).'>'.$l['no_backup'].'</option>'.
								(empty($globals['disable_auto_backup_daily']) ? '<option value="daily" '.POSTselect('auto_backup', 'daily', ($globals['auto_backup'] == 'daily' ? 1 : '')).'>'.$l['daily'].'</option>' : '').
								(empty($globals['disable_auto_backup_weekly']) ? '<option value="weekly" '.POSTselect('auto_backup', 'weekly', ($globals['auto_backup'] == 'weekly' ? 1 : '')).'>'.$l['weekly'].'</option>' : '').
								(empty($globals['disable_auto_backup_monthly']) ? '<option value="monthly" '.POSTselect('auto_backup', 'monthly', ($globals['auto_backup'] == 'monthly' ? 1 : '')).'>'.$l['monthly'].'</option>' : '').
								(empty($globals['disable_auto_backup_custom']) ? '<option value="custom" '.POSTselect('auto_backup', 'custom').'>'.$l['custom_autobackup'].'</option>' : '').'
							</select>
						</div>	
					</div>
					
					<div class="row" id="custom_autobackup_cron" style="display:none;"><br/>
						<div class="col-sm-5">
							<span class="sai_head">'.$l['custom_autobackup_cron'].'</span><br />
							<span class="sai_exp">'.$l['custom_autobackup_cron_exp'].'</span>
						</div>
						<div class="col-sm-7">
							<div class="row">
								<div class="col-sm-2">
									<span>'.$l['cron_min'].'</span>	
									<input type="text" class="form-control" name="autobackup_cron_min" id="autobackup_cron_min" size="2" value="'.POSTval('autobackup_cron_min', '').'" />
								</div>
								<div class="col-sm-2">
									<span>'.$l['cron_hour'].'</span>
									<input type="text" class="form-control" name="autobackup_cron_hour" id="autobackup_cron_hour" size="2" value="'.POSTval('autobackup_cron_hour', '').'" />
								</div>
								<div class="col-sm-2">
									<span>'.$l['cron_day'].'</span>
									<input type="text" class="form-control" name="autobackup_cron_day" id="autobackup_cron_day" size="2" value="'.POSTval('autobackup_cron_day', '').'" />
								</div>
								<div class="col-sm-2">
									<span>'.$l['cron_month'].'</span>
									<input type="text" class="form-control" name="autobackup_cron_month" id="autobackup_cron_month" size="2" value="'.POSTval('autobackup_cron_month', '').'" />
								</div>
								<div class="col-sm-2">
									<span>'.$l['cron_weekday'].'</span>
									<input type="text" class="form-control" name="autobackup_cron_weekday" id="autobackup_cron_weekday" size="2" value="'.POSTval('autobackup_cron_weekday', '').'" />
								</div>
							</div>
						</div>	
					</div><br />
					
					<div class="row">
						<div class="col-sm-5">
							<label class="sai_head">'.$l['auto_backup_rotation'].'</label>
							<span class="sai_exp">'.$l['exp_auto_backup_rotation'].'</span>
						</div>
						<div class="col-sm-7"> 
							<select name="auto_backup_rotation" class="form-control" id="auto_backup_rotation">';    
								for($i=0; $i<=10; $i++){
									// Do we have a limit from admin ?
									if(!empty($globals['auto_backup_limit']) && ($i > $globals['auto_backup_limit'] || $i == 0) || !empty($globals['max_backups']) && ($i > $globals['max_backups'] || $i == 0)) continue;
									$info['install'] .= '<option value="'.$i.'" '.POSTselect('auto_backup_rotation', $i, (!empty($globals['auto_backup_rotation']) ? $i == $globals['auto_backup_rotation'] : $i == 4) ? '1' : '0').'>'.(empty($i) ? $l['unlimited'] : $i).'</option>';						
								}
							$info['install'] .= '</select>
						</div>	
					</div><br />';
				}
	$info['install'] .= '
		</div><br />
	</div><!--end of bg-->';

$info['install'] .= '

<p align="center">
	<input type="hidden" name="softsubmit" id="softsubmit" value="'.$l['softsubmit'].'" />
	<input type="hidden" name="pass-strength-hidden" id="pass-strength-hidden" value="" />
	<input type="submit" name="softsubmitbut" id="softsubmitbut" value="'.$l['softsubmit'].'" class="flat-butt" /><span id="show_txt" style="display:none;"></span>
	<br /><br /><br />
	'.(empty($globals['off_email_link']) && empty($globals['off_install_mail']) ? '<span class="sai_head">'.$l['ins_emailto'].'</span> : <input type="text" name="emailto" id="emailto" size="20" value="'.POSTval('emailto', '').'" />' : '').'
</p>
<input type="hidden" name="soft_status_key" id="soft_status_key" value="'.POSTval('soft_status_key', generateRandStr(32)).'" />
'.csrf_display().'
</form></div>

<div id="progress_bar" style="height:125px; width:100%; display: none;">
	<br />
	<center>
		<font size="4" color="#222222" id="progress_txt" style="width:100%;">'.$l['checking_data'].'</font>
		<font style="font-size: 18px; font-weight: 400; color: #444444; width:100%;" id="progress_percent">(0 %)</font><br /><br />
	</center>
	<table width="500" cellpadding="0" cellspacing="0" id="table_progress" border="0" align="center" height="28" style="border:1px solid #CCC; -moz-border-radius: 5px;
	-webkit-border-radius: 5px; border-radius: 5px; width:50%;">
		<tr>
			<td id="progress_color" width="1" style="background-image: url('.$theme['images'].'bar.gif); -moz-border-radius: 4px; -webkit-border-radius: 4px; border-radius: 4px;"></td>
			<td id="progress_nocolor">&nbsp;</td>
		</tr>
	</table>
<br /><center>'.$l['wait_note'].'</center>
</div>
<br /><br /><br />';

}elseif(!empty($installed)){

	$info['install'] = '
	<div class="bg2">
		<h4>'.$l['congrats'].'</h4><br />
		'.$software['name'].' '.$l['succesful'].' : <br />
		<a href="'.$__settings['softurl'].'" target="_blank">'.$__settings['softurl'].'</a>
		'.(!empty($software['adminurl']) ? '<br />'.$l['admin_url'].' : <a href="'.$__settings['softurl'].'/'.$software['adminurl'].'" target="_blank">'.$__settings['softurl'].'/'.$software['adminurl'].'</a>' : '').'<br /><br />
		'.(!empty($setupcontinue) ? $l['setup_continue'].' : <br />
		<a href="'.$__settings['softurl'].'/'.$setupcontinue.'" target="_blank">'.$__settings['softurl'].'/'.$setupcontinue.'</a><br /><br />' : '').'
		'.$l['enjoy'].'<br /><br />
		'.(!empty($notes) ? $l['install_notes'].' : <br />
		<div class="sai_notes">'.softparse($notes, $soft).'</div><br /><br />' : '').'
		'.$l['please_note'].'<br /><br />
		'.(!empty($globals['ampps_enabled']) && empty($globals['no_ampps']) && $globals['softpanel'] != 'ampps' ? lang_vars($l['ampps_download'], array($software['name'])).'<br /><br />' : '').'
		'.$l['regards'].',<br />
		'.$l['softinstaller'].'<br /><br />
		<center><b><a href="'.script_link($soft).'&highlight='.$new_insid.'&postact=install">'.$l['return'].'</a></b></center><br /><br />';

		if(empty($globals['install_tweet_off']) || empty($globals['lictype'])){
			$info['install'] .= '<form method="get" action="http://twitter.com/intent/tweet" id="tweet" onsubmit="return dotweet(this);">
				<div class="panel panel-info" style="width:55%; margin:0 auto;">
					<div class="panel-heading" style="padding:5px; font-size:15px;">
						<font><b>'.$l['install_tweet_sub'].' :</b></font>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-sm-10">
								<textarea name="text" cols="80" row="3" style="resize:none; width:100%;">'.loadtweetdata('install_tweet', $l['install_tweet']).'</textarea>
							</div>
							<div class="col-sm-2">
								<input type="submit" value="Tweet!" class="btn btn-info" onsubmit="return false;" id="twitter-btn" style="margin-top:20px;"/>
							</div>
						</div>
					</div>
				</div>
			</form>';
		}
		
	$info['install'] .= '
	</div><!--end of bg2 class--><!--PROC_DONE-->
	<br /><br />';

}

softheader($l['<title>'].$software['name']);

$loadedinfo = array('install', 'overview', 'features', 'reviews', 'screenshots', 'ratings');

?>
<script language="JavaScript" src="<?php echo $theme['url'].'/js/tabber.js';?>" type="text/javascript">
</script>
<script language="JavaScript" id="ratings_js_file" type="text/javascript"></script>
<script language="JavaScript" id="review_js_file"  type="text/javascript"></script>
<script language="JavaScript" id="reviews_js_file"  type="text/javascript"></script>
<script type="text/javascript">
tabs = new tabber;
tabs.tabs = new Array('<?php echo implode('\', \'', $loadedinfo);?>');
tabs.tabwindows = new Array('<?php echo implode('_win\', \'', $loadedinfo);?>_win');
tabs.inittab = <?php echo '\''.$init_tab.'\';';?>
addonload('tabs.init();loadraterev();check_pass_strength();');

function loadraterev(){
<?php 
	if(empty($globals['off_rating_link']) && $soft < 10000){
		echo '$_(\'ratings_js_file\').src = "'.fastestmirror().'/ratingsjs.php?soft='.$soft.'&user='.$softpanel->user['name'].'&ip='.$_SERVER['SERVER_ADDR'].'";';
	}
		
	if(empty($globals['off_review_link']) && $soft < 10000){
		echo '$_(\'review_js_file\').src =  "'.fastestmirror().'/reviewjs.php?soft='.$soft.'&user='.$softpanel->user['name'].'&ip='.$_SERVER['SERVER_ADDR'].'";';
		echo '$_(\'reviews_js_file\').src =  "'.fastestmirror().'/reviewsjs.php?soft='.$soft.'&user='.$softpanel->user['name'].'&ip='.$_SERVER['SERVER_ADDR'].'";';	
	} 
?>
};

function notifyversion(){
	if(AJAX(window.location+"&notify=true", "notified(re)")){
		return false;
	}else{
		return true;	
	}
};

function notified(re){
	if(re == 1){
		alert('<?php echo $l['notifyversion'] ?>');
	}
};

function loadScreenshots(){
	$_('screenshots_iframe').src = '<?php echo fastestmirror().'/screenshots/screenshots1.php?sid='.$soft;?>';
};

</script>
<?php
$url = $theme['images'];
$ratings = array();
$deduct = 1;
$r = $scripts[$soft]['ratings'];
for($i_r=1; $i_r<=5; $i_r++){		
	if($r >= 1){
		$ratings[$i_r] = '<img src="'.$url.'star.png'.'" alt="('.number_format($scripts[$soft]['ratings'], 2).' out of 5)" />';
	}elseif($r > 0){
		$ratings[$i_r] = '<img src="'.$url.'halfstar.png'.'" alt="('.number_format($scripts[$soft]['ratings'], 2).' out of 5)" />';
	}else{
		$ratings[$i_r] = '<img src="'.$url.'nostar.png'.'" alt="('.number_format($scripts[$soft]['ratings'], 2).' out of 5)" />';
	}
	$r = $r - $deduct;
}		

// For custom themes
if($soft > 10000){
	if(file_exists($globals['euthemes'].'/'.$globals['theme_folder'].'/images/topscripts/48/'.$iscripts[$soft]['softname'].'.png')){
		$custom_48 = $theme['images'].'topscripts/48/'.$iscripts[$soft]['softname'].'.png';
	}else{
		$custom_48 = $theme['images'].'/custom.png';
	}
}

echo '
<div class="bg">
	<div id="currentrating" style="display:none"></div>
	<div class="row" style="margin-left:10px;">
		'.(!empty($custom_48) ? '<img src="'.$custom_48.'" alt="">' : '<img src="'.$globals['softimages'].'top15/48/'.$scripts[$soft]['softname'].'.png" >').'
		<span class="sai_process_heading" style="margin-left:20px;">'.$software['name'].'</span>
	</div><br />
	<div class="row">
		<div class="col-sm-2">
			'.($soft > 10000 ? '' : '<div class="someclass" title="'.$scripts[$soft]['ratings'].'">'.implode('', $ratings).'</div>').'
		</div>
		<div class="col-sm-5 ver_style">
			'.$l['software_ver'].' : <font size="2"><b>'.(!empty($tmp_ver) ? $tmp_ver : $software['ver']).'</b></font> &nbsp; &nbsp; <a href="javascript" onclick="notifyversion(); return false;" ><img src="'.$theme['images'].'notify.gif" name="notifyver" title="'.$l['notify_ver'].'" alt="'.$l['notify_ver'].'"></a>
		</div>
		<div class="col-sm-3 release_style">
			'.(!empty($info['release_date']) ? $l['release_date'].' : <font size="1"><b>'.$info['release_date'].'</b></font>' : '').'
		</div>
		<div class="col-sm-2 change_style">
			'.(!empty($info['changelog']) ? '&nbsp;&nbsp;<a href="" data-toggle="modal" data-target="#changelog_div" class="sai_changelogbut" style="text-decoration:none;">'.$l['changelog'].'</a>' : '').'
		</div>
	</div><br />
	
	<script type=text/javascript>';
	if(!empty($softpanel->pheader)){
		if(is_cp_theme('x3')){
			echo '
			$(document).ready(function(){
				$(".ver_style").css("margin-left","0px");
				$(".release_style").css("margin-left","0px");
				$(".change_style").css({"margin-left":"0px", "margin-top":"-15px"});
			});';
		}else{
			echo '
			$(document).ready(function(){
				$(".ver_style").css("margin-left","0px");
				$(".release_style").css("margin-left","0px");
				$(".change_style").css({"margin-left":"0px", "margin-top":"-10px"});
			});';
		}
	}
	echo '
	</script>
	
	<div class="old_tab">
		<table width="100%" cellpadding="0" cellspacing="0" border="0" class="sai_tabs">
			<tr>
				<td><a href="javascript:tabs.tab(\'install\')" id="install" class="sai_insbut" style="border-right:0px;">'.$l['install'].'</td>
				<td><a class="sai_insbut" id="show_install_option"><span class="caret" style="cursor:pointer; margin-top:17px;"></span></a></td>
				<td><a href="javascript:tabs.tab(\'overview\')" class="sai_tab" id="overview">'.$l['overview'].'</a></td>
				<td><a href="javascript:tabs.tab(\'features\')" class="sai_tab" id="features">'.$l['features'].'</a></td>
					'.(empty($globals['off_screenshot_link']) ? '<td><a href="javascript:tabs.tab(\'screenshots\'); loadScreenshots();" class="sai_tab" id="screenshots">'.$l['screenshots'].'</a></td>' : '').'
					'.(empty($globals['off_demo_link']) ? '<td><a href="'.($soft >= 10000 && !empty($info['demo']) ? $info['demo'] : $globals['ind'].'act=demos&soft='.$soft).'" class="sai_tab" id="demo" target="_blank">'.$l['demo'].'</a></td>' : '').'
					'.(empty($globals['off_rating_link']) && $soft < 10000 ? '<td><a href="javascript:tabs.tab(\'ratings\')" class="sai_tab" id="ratings">'.$l['ratings'].'</a></td>' : '').'
					'.(empty($globals['off_review_link']) && $soft < 10000 ? '<td><a href="javascript:tabs.tab(\'reviews\')" class="sai_tab" id="reviews">'.$l['reviews'].'</a></td>' : '').'
					'.((empty($info['import']) || !empty($globals['disable_import'])) ? '' : '<td><a href="'.$globals['ind'].'act=import&soft='.$soft.'" class="sai_tab" id="import">'.$l['import'].'</a></td>').'
			</tr>
		</table>
		<div class="quick_install_dropdown" id="quick_install_dropdown" style="display:none;" >
			<div id="quick_install_btn" class="quick_install_dropdown_btn"><a href="javascript:tabs.tab(\'install\')">'.$l['quick_install'].'</a></div>
			<div id="custom_install_btn" class="quick_install_dropdown_btn"><a href="javascript:tabs.tab(\'install\')">'.$l['custom_install'].'</a></div>
		</div>
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
					<li class="active" style="width:100px;"><a href="javascript:tabs.tab(\'install\')" id="install" class="sai_tab2" style="text-decoration:none; height:40px; top:5px;">'.$l['install'].'</a>
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#quick_install_m" style="margin-top:-25px; border:none;"><span class="caret"></span></button>
					</li>
				</ul>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar" style="position:absolute; z-index:1000; width:100%; background:#F8F8F8;">
				<ul class="nav navbar-nav">
					<li><a href="javascript:tabs.tab(\'overview\')"  id="overview" class="sai_tab2" style="text-decoration:none;" data-toggle="collapse" data-target="#myNavbar">'.$l['overview'].'</a></li>
					<li><a href="javascript:tabs.tab(\'features\')"  id="features" class="sai_tab2" style="text-decoration:none;" data-toggle="collapse" data-target="#myNavbar">'.$l['features'].'</a></li>
					<li>'.(empty($globals['off_screenshot_link']) ? '<a href="javascript:tabs.tab(\'screenshots\'); loadScreenshots();" class="sai_tab2" id="screenshots" style="text-decoration:none;" data-toggle="collapse" data-target="#myNavbar">'.$l['screenshots'].'</a>' : '').'</li>
					<li>'.(empty($globals['off_demo_link']) ? '<a href="'.($soft >= 10000 && !empty($info['demo']) ? $info['demo'] : $globals['ind'].'act=demos&soft='.$soft).'" class="sai_tab2" id="demo" target="_blank" style="text-decoration:none;" data-toggle="collapse" data-target="#myNavbar">'.$l['demo'].'</a>' : '').'</li>
					<li>'.(empty($globals['off_rating_link']) && $soft < 10000 ? '<a href="javascript:tabs.tab(\'ratings\')" class="sai_tab2" id="ratings" style="text-decoration:none;" data-toggle="collapse" data-target="#myNavbar">'.$l['ratings'].'</a>' : '').'</li>
					<li>'.(empty($globals['off_review_link']) && $soft < 10000 ? '<a href="javascript:tabs.tab(\'reviews\')" class="sai_tab2" id="reviews" style="text-decoration:none;" data-toggle="collapse" data-target="#myNavbar">'.$l['reviews'].'</a>' : '').'</li>
					<li>'.((empty($info['import']) || !empty($globals['disable_import'])) ? '' : '<a href="'.$globals['ind'].'act=import&soft='.$soft.'" class="sai_tab2" id="import" style="text-decoration:none;" data-toggle="collapse" data-target="#myNavbar">'.$l['import'].'</a>').'</li>
				</ul>
			</div>
			<div class="collapse navbar-collapse" id="quick_install_m" style="position:absolute; z-index:1000; width:100%; background:#F8F8F8;">
				<ul class="nav navbar-nav">
					<li><a href="javascript:tabs.tab(\'install\')" id="quick_install_btn" class="sai_tab2" style="text-decoration:none;" data-toggle="collapse" data-target="#quick_install_m">'.$l['quick_install'].'</a></li>
					<li><a href="javascript:tabs.tab(\'install\')" id="custom_install_btn" class="sai_tab2" style="text-decoration:none;" data-toggle="collapse" data-target="#quick_install_m">'.$l['custom_install'].'</a></li>
				</ul>
			</div>
		</nav>
	</div>';
		
	if(!empty($outdated_script)){
		echo '<center class="alert alert-warning" style="margin-bottom:0px;">'.lang_vars($l['outdated_script'], array($software['name'])).'</center>';
	}

	echo '<script type="text/javascript">
	$_(tabs.inittab).className = tabs.tabbedclass;

	var softid = '.$soft.'

	tabs.override = function(id){
		if(id == \'install\'){
			$_(\'install\').className = \'sai_insbutclicked\';
		}else{
			$_(\'install\').className = \'sai_insbut\';
		}
	};
	</script>';

	//Parse and take care of images
	$info['overview'] = (!empty($info['changelog']) ? '
	<div class="modal fade" id="changelog_div" role="dialog" >
		<div class="modal-dialog modal-lg" style="margin-top:80px;">
		  <!-- Modal content-->
		  <div class="modal-content">
			<div class="modal-header" style="background:#F0F0F0;">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title">Changelog</h4>
			</div>
			<div class="modal-body" style="height: 350px; overflow-y: auto;">
			  '.$info['changelog'].'
			</div>
			<div class="modal-footer" style="padding-top:10px; height:50px;">
			  <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
			</div>
		  </div>
		</div>
	</div>' : '').'
	<div class="bg2">
		<div class="row">
			'.(!empty($scripts[$soft]['screenshots']) && (empty($softpanel->pheader) || (!empty($softpanel->pheader) && is_cp_theme('paper_lantern'))) ? '
			<div class="col-sm-6">
				
				<div id="overview_img" style="padding:10px;" style="width:100%;"> <img src="'.$globals['mirror_images'].'softimages/screenshots/'.$soft.'_screenshot1.gif" class="img-responsive" alt=""> </div>
					
			</div>
			<div class="col-sm-6">': '<div class="col-sm-12">').'
				'.softparse($info['overview'], $soft).'<br /><br />
				<div class="row">
					<div class="col-sm-6 col-md-6 col-xs-6">
						<span class="sai_new_insbut"><a href="javascript:tabs.tab(\'install\')" id="install_now">'.$l['install_now'].'</a></span>
					</div>
					<div class="col-sm-6 col-md-6 col-xs-6">
						<span class="sai_new_insbut"><a href="javascript:tabs.tab(\'overview\')" id="my_app">'.$l['my_apps'].'</a></span>
					</div>	
				</div><br /><br /><br /><br />
				<div class="row">
					<div class="col-sm-1 col-md-1 col-xs-1" style="margin-right:4px"><font color="#447edf"><i class="fa sai-disk fa-3x"></i></font></div>
					<div class="col-sm-5 col-md-5 col-xs-5">
						<span class="sai_head">'.$l['space_req'].'</span><br />
						<span class="sai_exp2">'.
							(!empty($globals['off_available_space']) ? '' : $l['available_space'].' : '.(is_numeric($softpanel->spaceremain) ? number_format($softpanel->spaceremain/1024/1024, 2) : $softpanel->spaceremain).' '.$l['mb'].'<br />')
							.$l['req_space'].' : '.number_format($software['spacereq']/1024/1024, 2).' '.$l['mb']
						.'</span>
					</div>
					<div class="col-sm-1 col-md-1 col-xs-1" style="margin-right:4px"><a href="'.$info['support'].'"><font color="#447edf"><i class="fa sai-question fa-3x"></i></font></a></div>
						<div class="col-sm-4 col-md-4 col-xs-4">
							<span class="sai_head">'.$l['software_support'].'</span><br />
							<span class="sai_exp2"><a href="'.$info['support'].'" target="_blank">'.$l['support_link'].'</a><br />
							'.$l['support_note'].'</span>
						</div>
				</div>	
			</div>
		</div><br />
	</div><!--end of bg2 class-->';

	//r_print($no_autoupgrade);

	if(!empty($installations[$soft])){
		
		$is_cloneable = is_cloneable($soft);
		$highlight = optGET('highlight');
		$action = optGET('postact');
		
		$info['overview'] .= '<br /><br />
		<center>
			<span class="sai_newhead">'.$l['current_ins'].'</span><br />
		</center><hr>';


		$info['overview'] .= '
		<div class="bg2">
			<table class="table table-hover">
				<thead  style="background:#EFEFEF;" class="sai_head2">
					<tr>
						<th>'.$l['link'].'</th>
						<th>'.$l['admin'].'</th>
						<th>'.$l['ins_time'].'</th>
						<th>'.$l['version'].'</th>
						<th width="130">'.$l['options'].'</th>
						<th><input type="checkbox" id="check_all"></th>
					</tr>
				</thead>';
		
		foreach($installations[$soft] as $ik => $iv){
	
			$iv['sid'] = get_sid_by_version($iv['ver'], $iv['sid']);
			
			$is_upgradable = is_upgradable($ik);
		
			$info['overview'] .= '<tr id="trid' . $ik . '">
				<td class="endurl"><a href="'.$iv['softurl'].'" target="_blank" id="insurl'.$ik.'">'.$iv['softurl'].'</a>'.(($highlight == $ik && !empty($action)) ? '<span id="highlight">&nbsp;&nbsp;<b class="sai_highlight">'.$l['act_'.$action].'</b></span>' : '').'</td>
				<td><a href="'.$iv['softurl'].'/'.(!empty($iv['admin_folder']) ? $iv['admin_folder'] : admin_folder($iv['sid'])).'" target="_blank"><img src="'.$theme['images'].'/admin.gif" /></a></td>
				<td>'.datify($iv['itime']).'</td>
				<td>'.$iv['ver'].(!empty($is_upgradable) ? ' <a href="'.$globals['ind'].'act=perl_upgrade&insid='.$ik.'"><img src="'.$theme['images'].'updates.gif" alt="'.$l['upd_to'].' '.implode(' or ', $is_upgradable).'" title="'.$l['upd_to'].' '.implode(' or ', $is_upgradable).'" class="someclass"/></a>' : '').'</td><td>'.
				(!empty($is_cloneable) ? '<a href="'.$globals['ind'].'act=sclone&insid='.$ik.'" title="'.$l['clone'].'"><img src="'.$theme['images'].'clone.gif" style="min-width: 20px;" /></a>&nbsp;' : '').
				(empty($globals['disable_backup_restore']) ? '<a href="'.$globals['ind'].'act=backup&insid='.$ik.'" title="'.$l['backup'].'"><img src="'.$theme['images'].'backup.gif" style="min-width: 20px;" /></a>' : '').' &nbsp;<a href="'.$globals['ind'].'act=editdetail&insid='.$ik.'" title="'.$l['editdetail'].'"><img src="'.$theme['images'].'editdetail.gif" style="min-width: 20px;" /></a>'.(asperapp(0, 0, 1) && !empty($can_publish) ? ' &nbsp;<a href="'.$globals['ind'].'act=publish&insid='.$ik.'" title="'.$l['publish'].'"><img src="'.$theme['images'].'publish.gif" style="min-width: 20px;" /></a>' : '').' &nbsp;<a href="'.$globals['ind'].'act=remove&insid='.$ik.'" title="'.$l['remove'].'"><img src="'.$theme['images'].'remove.gif" style="min-width: 20px;" /></a>
				<td>
					<input type="checkbox" name="insids[]" id="'.$iv['softurl'].'" value="'.$ik.'" class="soft_inslist">
				</td>
				</tr>';
		}

		$info['overview'] .= '</table><br />
		<p align="right" style="width:100%;">
			<span class="sai_head">'.$l['with_selected'].':</span>
			<select name="multi_options" id="multi_options">
				<option name="todo" id="todo" value="0">---</option>
				<option name="todo" id="todo" value="mult_rem">'.$l['remove'].'</option>
			</select>
			<input type="button" value="'.$l['go'].'" onclick="show_confirm()" class="sai_graybluebut">
			<br />
		</p>
		<div id="rem_div"></div>
		</div><!--end of bg2 class-->
		
	<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
	insids = new Array();
	removed = new Object();

	function show_confirm(){
		
		insids = new Array();
		removed = new Object();
		
		if($_("multi_options").value != "mult_rem"){
			return false;
		}

		// Build the list of Installations to remove
		var field = document.getElementsByName(\'insids[]\');
			insids = new Array();
			var c = 0;
			for(i = 0; i < field.length; i++){
				if(field[i].checked == true){
					insids[c] = field[i].value;
					c++;
				}
			
		}
		//alert(insids);
		
		if(c == 0){
			alert("'.$l['no_sel_inst'].'");
			return false;
		}
		
		var r = confirm("'.$l['del_insid'].'");
		if(r != true){
			return false;
		}
		
		remove_by_id(insids[0], "", 0);
	}

	function remove_by_id(insid, re, oldinsid){

		removed[insid] = false;
		
		if(re.length > 0 && oldinsid > 0){
			if(re == "removed"){
				removed[insid] = true;
			}
		}
		
		nextinsid = 0;
		
		// Find the next INSTALLATION to remove
		for(i = 0; i < insids.length; i++){
			if(typeof(removed[insids[i]]) != "undefined"){
				continue;
			}
			nextinsid = insids[i];
			break;
		}
		
		// If there is something left to be removed
		if(insid != 0){
			var csrf_token = $("#csrf_token").val(); 
		
			try{

				$.ajax({
					type: "POST",
					data: "csrf_token="+csrf_token,
					url: "'.$globals['index'].'act=remove&insid="+insid+"&ajax=1&ssk="+randomstring(32)+"&random="+Math.random(),
					// Checking for error
					success: function(data){
						remove_by_id(nextinsid, data, insid);	
					}
				});		
				$_("rem_div").innerHTML = "<br /><br /><p align=\"center\"><img src=\"' . $theme['images'] . 'ajax_remove.gif\"> <br />'.$l['rem_inst_id']. ' ID: " +insid+ ", URL: " + $_("insurl"+insid)+"<br /></p>";
				return true;
			}catch(e){
				return false;
			}
		}
		$_("rem_div").innerHTML = "";
		alert("'.$l['inst_remvd'].'");
		location.reload(true);
		return true;
	}

	$(document).ready(function(){
		$("#check_all").on("click", function(event){
			if(this.checked == true){
				$(".soft_inslist").prop("checked", true);
			}else{
				$(".soft_inslist").prop("checked", false);
			}
		});
		
		$(".sai_altrowstable tr").mouseover(function(){
			var old_class = $(this).attr("class");
			
			if(old_class == "nohover") return;
			
			//alert(old_class);
			$(this).attr("class", "sai_tr_bgcolor");
			
			$(this).mouseout(function(){
				$(this).attr("class", old_class);
			});
		});';
		
	// If we get anything in $highlight than only we have to call this JS function other wise it will cause the JS error.
	if(!empty($highlight)){
		$info['overview'] .= 'goto_id("insurl'.$highlight.'");
		$("#highlight").fadeOut(10000);';
	}
		
	$info['overview'] .= '});

	// ]]></script>';
		
	}

	if(count($allcatwise[$software['type']][$software['cat']]) > 2 && $software['cat'] != 'others'){

		$info['overview'] .= '<br /><br /><div class="bg2">
			<table width="100%" class="table table-hover">
				<tr>
					<th style="background:#EFEFEF" class="sai_head2">'.$l['related_scripts'].'</th>
				</tr>
			</table>';
					
		$i = 0;
		
		foreach($allcatwise[$software['type']][$software['cat']] as $k => $v){

			if(($k == $soft) || (!empty($scripts[$k]['parent']) && !empty($iscripts[$scripts[$k]['parent']]))){
				continue;
			}
			
			// Show only 5 scripts
			if($i == 5){
				break;
			}
			
			$info['overview'] .='
			<div style="text-decoration:none;display:inline-block;text-align:center;margin-top:10px;margin-left:10px;">
				<a href="'.script_link($k).'"  title="'.$v['desc'].'"  width="80" alt="" class="someclass softtooltip" style="text-decoration:none;margin-top:5px;">
					<div class="sai_blog_script">
						<div class="sai_demo_script_logo" style="padding:10px 40px 10px 40px;">
							<img src="'.$globals['softimages'].'top15/48/'.$v['softname'].'.png" >	
						</div>
						<div class="sai_script_name">'.$v['name'].'</div>
					</div>
				</a>
			</div>';
			
			$i++;
			
		}
		
		$info['overview'] .='</div><!--end of bg2 class-->';
	}

	//Parse and take care of images
	$info['features'] = '<div class="bg2"><br />'.softparse($info['features'], $soft).'</div><!--end of bg class-->';

	$info['ratings'] = '';
	$info['screenshots'] = '<div class="bg2"><iframe src="" id="screenshots_iframe" style="width:100%;height:500px;" frameborder="0" scrolling="no"></iframe></div><!--end of bg2 class-->';
	$info['reviews'] = '<div class="bg2"><div id="allreviews"></div></div><!--end of bg2 class-->';

	foreach($info as $k => $v){
		
		if(in_array($k, array('demo', 'support', 'import', 'changelog'))) continue;
		
		echo '<div id="'.$k.'_win" style="display: '.($init_tab == $k ? "block" : "none").'; width:100%;"><br />
		'.$v.'
		</div>';

	}

echo '</div><!--end of bg-->';

softfooter();

}

?>