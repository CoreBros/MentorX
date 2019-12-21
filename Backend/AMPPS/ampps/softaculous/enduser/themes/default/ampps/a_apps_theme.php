<?php

//////////////////////////////////////////////////////////////
//===========================================================
// a_apps_theme.php
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

function a_apps_theme(){

global $user, $globals, $l, $theme, $softpanel, $a_apps, $ia_apps, $error,$tmp ;
global $software, $soft, $info, $settings, $init_tab, $installed, $removed, $__settings, $notes, $cron, $overwrite_option, $ampps_package, $ipkg, $nopackage, $install, $ampps_apps_installed, $currently_ruunning, $isMysql55installed, $show_warning_note, $softinfo, $showDbWarning;

if(optGET('notify')){	
	
	get_softaculous_file('http://api.softaculous.com/notifyappsversion.php?softid="'.$soft.'"');
	return true;

}

$nopackage = (is_file($ampps_package) ? 0 : 1);
	
if(optGET('ajaxdownload') && !empty($nopackage)){	

	
	// Try to download the package
//	if(method_exists($softpanel, 'downloadapp')){
		
		//$softpanel->downloadapp($soft, 0, 0, 1);
//		return true;
//	}
	
	// False call
	return true;

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

softheader($l['ampps'].' - '.$software['fullname']);

$loadedinfo = array('overview', 'notes', 'features', 'reviews', 'ratings');

?>
<script language="JavaScript" src="<?php echo $theme['url'].'/js/tabber.js';?>" type="text/javascript"></script>
<script language="JavaScript" id="ratings_js_file" type="text/javascript"></script>
<script language="JavaScript" id="review_js_file"  type="text/javascript"></script>
<script language="JavaScript" id="reviews_js_file"  type="text/javascript"></script>
<script type="text/javascript">
tabs = new tabber;
tabs.tabs = new Array('<?php echo implode('\', \'', $loadedinfo);?>');
tabs.tabwindows = new Array('<?php echo implode('_win\', \'', $loadedinfo);?>_win');
tabs.inittab = <?php echo '\''.$init_tab.'\';';?>
addonload('tabs.init();loadraterev();');

function loadraterev(){
<?php 
	if(empty($globals['off_rating_link'])){
		echo '$_(\'ratings_js_file\').src = "http://api.webuzo.com/ratingsjs.php?soft='.$software['imgid'].'&user='.$softpanel->user['name'].'&ip='.$_SERVER['SERVER_ADDR'].'";';
	}
		
	if(empty($globals['off_review_link'])){
		echo '$_(\'review_js_file\').src =  "http://api.webuzo.com/reviewjs.php?soft='.$software['imgid'].'&user='.$softpanel->user['name'].'&ip='.$_SERVER['SERVER_ADDR'].'";';
		echo '$_(\'reviews_js_file\').src =  "http://api.webuzo.com/reviewsjs.php?soft='.$software['imgid'].'&user='.$softpanel->user['name'].'&ip='.$_SERVER['SERVER_ADDR'].'";';	
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

</script>

<?php

//$url = $theme['images'];
$ratings = array();
$deduct = 1;
$r = $a_apps[$soft]['ratings'];	
for($i_r=1; $i_r<=5; $i_r++){		
	if($r >= 1){
		$ratings[$i_r] = '<td><img src="'.$theme['images'].'star.png'.'" alt="('.number_format($apps[$soft]['ratings'], 2).' out of 5)" /></td>';
	}elseif($r > 0){
		$ratings[$i_r] = '<td><img src="'.$theme['images'].'halfstar.png'.'" alt="('.number_format($apps[$soft]['ratings'], 2).' out of 5)" /></td>';
	}else{
		$ratings[$i_r] = '<td><img src="'.$theme['images'].'nostar.png'.'" alt="('.number_format($apps[$soft]['ratings'], 2).' out of 5)" /></td>';
	}
	$r = $r - $deduct;
}

echo '<div id="currentrating" style="display:none"></div>

<div class="bg">
	<div class="row">
		<table width="100%" cellpadding="4" cellspacing="1" border="0">
			<tr>
				<td width="10%" align="center">'.(!empty($custom_48) ? '<img src="'.$custom_48.'" alt="">' : '<img src="'.$globals['mirror_images'].'ampps/softimages/'.$software['imgid'].'__logo.gif" >').'</td>
				<td width="90%" class="sai_process_heading" colspan="4">'.$software['fullname'].'</td>
			</tr>
			<tr>
				<td align="center" width="10%">'.($soft > 10000 ? '' : '<div class="someclass" title="'.$software['ratings'].'"><table><tr>'.implode('', $ratings).'</tr></table></div>').'</td>
				<td valign="top" align="left" width="20%">
					'.$l['software_ver'].' : <font size="2"><b>'.(!empty($software['version']) ? $software['version'] : 'NA').'</b></font>
				</td>
				<td align="left" width="60%">
					'.(!empty($software['release_date']) ? $l['release_date'].' : <font size="1"><b>'.$software['release_date'].'</b></font>' : '').'
				</td>
				<td width="10%">
					'.(!empty($info['changelog']) ? '&nbsp;&nbsp;<a href="javascript" onclick="$(\'#changelog_div\').bPopup(); return false;" class="sai_changelogbut" style="text-decoration:none;">'.$l['changelog'].'</a>' : '').'
				</td>
			</tr>
		</table>
	</div><br />

	<!----- Heading Tab -------->
	<div class="row">
		<table width="100%" cellpadding="0" cellspacing="0" border="0" class="sai_tabs">
			<tr>
			<td><a href="javascript:tabs.tab(\'overview\')" class="sai_tab" id="overview">'.$l['overview'].'</a></td>
				<td><a href="javascript:tabs.tab(\'notes\')" class="sai_tab" id="notes">'.$l['notes'].'</a></td>
				<td><a href="javascript:tabs.tab(\'features\')" class="sai_tab" id="features">'.$l['features'].'</a></td>
				'.(empty($globals['off_rating_link']) && $soft < 10000 ? '<td><a href="javascript:tabs.tab(\'ratings\')" class="sai_tab" id="ratings">'.$l['ratings'].'</a></td>' : '').'
				'.(empty($globals['off_review_link']) && $soft < 10000 ? '<td><a href="javascript:tabs.tab(\'reviews\')" class="sai_tab" id="reviews">'.$l['reviews'].'</a></td>' : '').'
			</tr>
		</table>
	</div>		
';
	// Parse and take care of images
	$info['overview'] = '<div id="fadeout_div">'.(!empty($info['changelog']) ? '<div id="changelog_div" class="sai_popup" style="display:none;"><span class="sai_clogbutton b-close"><span>X</span></span><div class="sai_changelog">'.$info['changelog'].'</div></div>' : '').'

	'.(ampps() && !is_ampps_premium() && !empty($software['ins']) ? '<br /><center class="alert alert-warning">'.lang_vars($l['ampps_notify_premium'], array($software['fullname'])).'</center>' : '').'
	
	<div class="">
		<table width="100%" cellpadding="8" cellspacing="1" border="0">
		<tr>
			'.(!empty($scripts[$soft]['screenshots']) && empty($globals['panel_hf']) ? '
			<td width="20%" valign="top">
				<div id="overview_img"> <img src="'.$globals['mirror_images'].'softimages/screenshots/'.$soft.'_screenshot1.gif" width="500" alt="" > </div>
			</td>': '').'
			
			<td valign="top" style="padding:10px;">
				'.softparse($software['overview'], $soft).'<br /><br />
				'.($software['type'] == 'database' ? '					
				<p style="color:red;font-size:18px">'.lang_vars($l['upgrade_warning'], array($software['fullname'])).'</p>
				<ul>
					<li style="font-size:14px">'.$l['upgrade_note1'].'</li>
					<li style="font-size:14px">'.$l['upgrade_note2'].'</li>
					<li style="font-size:14px">'.$l['upgrade_note3'].'</li>
				</ul>		
				<br /><br /><br />' : '').'
				
				<table width="100%" cellpadding="4" cellspacing="1" border="0">
					<tr>
						<td width="10%" valign="top" align="center"><font color="#447edf"><i class="fa sai-disk fa-3x"></i></font></td>
						<td valign="top" width="40%">
							<span class="sai_head">'.$l['space_req'].'</span><br />
							<span class="sai_exp2">'.$l['req_space'].' : '.number_format($software['space']/1024/1024, 2).' '.$l['mb'].'</span>
						</td>
						<td valign="top" align="center" width="10%"><a href="'.$software['support'].'"><font color="#447edf"><i class="fa sai-question fa-3x"></i></font></a></td>
						
						<td valign="top" width="40%">
							<span class="sai_head">'.$l['software_support'].'</span><br />
							<span class="sai_exp2"><a href="'.$software['support'].'" target="_blank">'.$l['support_link'].'</a><br />
							'.$l['support_note'].'</span>
						</td>
					</tr>
				</table>
			</td>
		</tr>		
		</table>
	</div>	
';
// Which Version is this software ?
$info['overview'] .= '
<script language="javascript" type="text/javascript"><!-- // --><![CDATA[

function show_ins_but(){
	if($_("iagree").checked){
		$("#softsubmitbut").show();	
	}else{
		$("#softsubmitbut").hide();
	}
};
</script>';

if(!empty($installed)){

	$info['overview'] = '<h3>'.$l['congrats'].'</h3><br />
	'.$software['fullname'].' '.$l['succesful'].'<br />
	'.$l['enjoy'].'<br /><br />
	'.(!empty($notes) ? $l['install_notes'].' : <br />
	<div class="sai_notes">'.softparse($notes, $soft, 1).'</div><br /><br />' : '').'
	'.$l['please_note'].'<br /><br />
	'.$l['restart_ampps'].'<br /><br />
	'.$l['regards'].',<br />
	'.$l['softinstaller'].'<br /><br />
	
	<center><b><a href="'.$globals['ind'].'act=a_apps&app='.$soft.'">'.$l['return'].'</a></b></center><!--PROC_DONE--><br /><br />';
	
	if(empty($globals['install_tweet_off']) || empty($globals['lictype'])){
		
		$info['overview'] .= '<form method="get" action="http://twitter.com/intent/tweet" id="tweet" onsubmit="return dotweet(this);">
							<div class="panel panel-info" style="width:55%; margin:0 auto;">
								<div class="panel-heading" style="padding:5px;">
									<font size="+1"><b>'.$l['install_tweet_sub'].' :</b></font>
								</div>
								<div class="panel-body">
									<div class="row">
										<div class="col-sm-10">
											<textarea name="text" cols="80" row="3" style="resize:none; width:100%;">'.loadtweetdata('install_tweet', $l['install_tweet_classes']).'</textarea>
										</div>
										<div class="col-sm-2 col-xs-2">
											<input type="submit" value="Tweet!" class="btn btn-info" onsubmit="return false;" id="twitter-btn" style="margin-top:20px;"/>
										</div>
									</div>
								</div>
							</div>
						</form>';				
	}

}elseif(!empty($removed)){

	$info['overview'] = '<br /><br /><br />
	<div class="sai_success"><img src="'.$theme['images'].'notice.gif" /> &nbsp; '.$l['uninstalled'].'
	</div><!--PROC_DONE--><br /><br />
	<center><b><a href="'.$globals['ind'].'act=a_apps&app='.$soft.'">'.$l['return'].'</a></b></center>';

}else{

// The installer
$info['overview'] .= '<br />

'.error_handle($error, "100%", 0, 1).
'<form accept-charset="'.$globals['charset'].'" name="installsoftware" method="post" action="" onsubmit="return checkform();" id="installsoftware">
	<p align="center">';
		
		if(!empty($settings)){
		
			// For set defaults check box display
			$is_display = 0;
			if(!empty($info['is_default'])){
				foreach($info['is_default'] as $k => $v){
					if(array_key_exists($v, $ia_apps)){						
						$ins_display = 1;						
					}
				}
			}
			if(!empty($ins_display) || !empty($rem_display)){				
				
				foreach($settings as $group => $sets){
					
					if($group == 'hidden' || empty($sets)) continue;
				
					$ext_disp .= '<br />
<table width="100%" cellpadding="8" cellspacing="1" border="0" class="sai_divroundshad">
<tr class="nohover">
<td class="sai_heading_full" colspan="5">'.$group.'</td>
</tr>
';
					foreach($sets as $sk => $sv){
			
						$ext_disp .= '<tr>
						<td width="50%">
						<span class="sai_head">'.$sv['head'].'</span>
						'.(empty($sv['exp']) ? '' : '<br /><span class="sai_exp">'.$sv['exp'].'</span>').'
						</td>
						<td valign="top">
						'.(preg_match('/admin_pass|softpass/is', $sv['tag']) ? preg_replace('/>|\/>/is',' onkeyup="check_pass_strength();">', $sv['tag']) : $sv['tag']).'
						'.(preg_match('/softmail/is', $sv['tag']) ? '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
						softemail["'.$sk.'"] = false;
						//Add an event handler
						$_("'.$sk.'").onkeydown = function(){
							softemail["'.$sk.'"] = true;
						}
						// ]]></script>
						' : '').'
						'.(preg_match('/admin_pass|softpass/is', $sv['tag']) ? '
						<a href="javascript: void(0);" onclick="$_(\''.$sk.'\').value=randstr(10, 1);check_pass_strength();return false;" title="'.$l['randpass'].'"><img src="'.$theme['images'].'randpass.gif" /></a>
						<div id="pass-strength-result" class="">'.$l['strength_indicator'].'</div>' : '').'
						'.(preg_match('/admin_pass|softpass/is', $sv['tag']) && (!empty($softpanel->securepass) || !empty($globals['random_pass'])) ? '
						<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
						addonload(\'$_("'.$sk.'").value=randstr(10, 1);check_pass_strength();\');
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
						' : '').'
						</td>
						</tr>';
					}					
					$ext_disp .= '</table><br />';
				}
			}//End of if($settings)				
		}

	if(!empty($software['default'])){
		$info['overview'] .= '<center><div class="alert alert-warning"><strong>'.$l['note'].'</strong>&nbsp'.$l['software_note'].'</div></center>';
	}else if(empty($software['os_support'])){
		$info['overview'] .= '<center><div class="alert alert-warning">'.lang_vars($l['OS_not_supported'], array($software['fullname'])).'</div></center>';
	}else if(!empty($currently_ruunning)){
		$info['overview'] .= '<center><div class="alert alert-warning"><strong>'.$l['note'].'</strong>&nbsp'.$l['notes_remove_php'].'</div></center>';
	}else if(!$ampps_apps_installed[$soft]){
		$info['overview'] .= '<center><input type="hidden" align="" name="install" id="softsubmit" value="install" />
		<input type="submit" name="softsubmitbut" id="softsubmitbut" value="'.$l['softsubmit'].'" class="flat-butt" /></center>';
	}else{		
		$info['overview'] .= '<center><input type="hidden" name="remove" id="softsubmit" value="remove" />
		<input type="submit" name="softsubmitbut" id="softsubmitbut" onclick="return confirm_remove();" value="'.$l['remove'].'" class="flat-butt" />';
	}

	$info['overview'] .= '<span id="show_txt" style="display:none;"></span>

	<input type="hidden" name="soft_status_key" id="soft_status_key" value="'.POSTval('soft_status_key', generateRandStr(32)).'" />
	</p>
</form>
</div><br />

<div id="progress_bar" style="height:125px; display: none;">
	<br />
	<center>
	<font size="4" color="#222222" id="progress_txt">'.$l['checking_data'].'</font>
	<font style="font-size: 18px;font-weight: 400;color: #444444;" id="progress_percent">(0 %)</font><br /><br />
	</center>
	<table width="500" cellpadding="0" cellspacing="0" id="table_progress" border="0" align="center" height="28" style="border:1px solid #CCC; -moz-border-radius: 5px;
-webkit-border-radius: 5px; border-radius: 5px;background-color:#efefef;">
		<tr>
			<td id="progress_color" width="1" style="background-image: url('.$theme['images'].'bar.gif); -moz-border-radius: 4px; -webkit-border-radius: 4px; border-radius: 4px;"></td>
			<td id="progress_nocolor">&nbsp;</td>
		</tr>
	</table>
<br /><center>'.$l['wait_note'].'</center>
</div>
<script language="javascript" type="text/javascript"><!-- // --><![CDATA[

function confirm_remove(){
	
	var r = confirm("'.$l['del_insid'].'");
	if(r != true){
		return false;
	}
	
	return true;
	
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
		if($_("softsubmit").value == "remove"){
			show_msg("'.$l['removing'].'");
		}else{
			if(dosubmit == 1){			
				$_("installsoftware").submit();	
			}
			show_msg("'.$l['installing'].'");
		}
	}
	
	return true;
	
};

var progressbar = {
	timer: 0,
	total_width: 0,	
	status_key: "",
	synctimer: 0,
	fadeout_div: "#fadeout_div",
	win_div: "#overview_win",
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
		$("#progress_txt").html(txt);
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
			var sid = $_("softbranch").value;
		}catch(e){
			var sid = '.$soft.'
		}
		var action = $("#softsubmitbut").val();
		$.ajax({
			url: window.location+"&jsnohf=1&soft="+sid+"&multi_ver=1",
			type: "POST",
			data: $(progressbar.formid).serialize(),
			complete: function( jqXHR, status, responseText ) {
				
				progressbar.sync_abort();
				
				// Store the response as specified by the jqXHR object
				responseText = jqXHR.responseText;
				
				try{
					
					if(responseText.match(/\<\!\-\-PROC_DONE\-\-\>/gi)){
						if(action == "Install"){
							progressbar.text("'.addslashes($l['ins_finishing_process']).'");
						}else{
							progressbar.text("'.addslashes($l['rem_finishing_process']).'");
						}
							
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
					}).delay(50).animate({opacity: 1}, 500);
					
					//alert(newhtml);
					
				}else{
					alert(jqXHR.state());
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
		
		try{		
			AJAX("'.$globals['index'].'act=a_apps&app='.$soft.'&ajaxdownload=1&random="+Math.random(), "get_package_handle(re)");
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
</script>
';

}
//Add Binary and config file address
$info['notes'] = '<br>
	<table border="1" cellspacing="1" cellpadding="8" align="center" class="notestable">
		<tr style="height: 30px;">
			<th bgcolor="#EFEFEF" align="center" width="100px">&nbsp&nbsp&nbsp&nbsp'.$l['desc'].'</th>
			<th bgcolor="#EFEFEF" align="center">&nbsp&nbsp&nbsp&nbsp'.$l['c_path'].'</th>
		</tr>
		<tr style="height: 30px;">				
			<td bgcolor="#E6F5FF" width="100px" >&nbsp&nbsp&nbsp&nbsp'.$l['binary'].'</td>
			<td bgcolor="#E6F5FF">&nbsp&nbsp&nbsp&nbsp'.$globals['ampps_path']. DIRECTORY_SEPARATOR .($software['type'] == 'database' ? 'mysql' : $software['softname']).$software['bin'].'&nbsp&nbsp</td>		
		</tr>
		<tr style="height: 30px;">				
			<td bgcolor="#E6F5FF" width="100px" >&nbsp&nbsp&nbsp&nbsp'.$l['conf'].'</td>
			<td bgcolor="#E6F5FF">&nbsp&nbsp&nbsp&nbsp'.$globals['ampps_path']. DIRECTORY_SEPARATOR .($software['type'] == 'database' ? 'mysql' : $software['softname']).$software['conf_path'].'&nbsp&nbsp&nbsp&nbsp</td>
		</tr>
	</table><br>
';

$softinfo=file_get_contents($ipkg);

$info['features'] = '<br>'.$softinfo.'<br>';
$info['ratings'] = '<br><br>';
$info['reviews'] = '<div id="allreviews"><br></div>';

foreach($info as $k => $v){
	
	if(in_array($k, array('demo', 'support', 'import', 'install'))) continue;
	
	echo '<div id="'.$k.'_win" class="row" style="display: '.($init_tab == $k ? "block" : "none").';">
	'.$v.'
	</div>';


}

softfooter();

}
	
?>







