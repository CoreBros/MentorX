<?php

//////////////////////////////////////////////////////////////
//===========================================================
// apps_theme.php
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


function apps_theme(){

global $user, $globals, $l, $theme, $softpanel, $apps, $iapps, $error;
global $software, $soft, $info, $settings, $init_tab, $installed, $removed, $__settings, $notes, $cron, $overwrite_option, $nopackage, $install;

if(optGET('notify')){	
	
	get_softaculous_file('http://api.softaculous.com/notifyappsversion.php?softid="'.$soft.'"');
	echo 1;
	return true;

}

if(optGET('ajaxdownload') && !empty($nopackage)){	
	
	// Try to download the package
	if(method_exists($softpanel, 'updatesoftwares')){
		$softpanel->downloadapp($soft, 0, 0, 1);
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

softheader($l['<title>'].$software['name']);

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
		echo '$_(\'ratings_js_file\').src = "http://api.webuzo.com/ratingsjs.php?soft='.$soft.'&user='.$softpanel->user['name'].'&ip='.$_SERVER['SERVER_ADDR'].'";';
	}
		
	if(empty($globals['off_review_link'])){
		echo '$_(\'review_js_file\').src =  "http://api.webuzo.com/reviewjs.php?soft='.$soft.'&user='.$softpanel->user['name'].'&ip='.$_SERVER['SERVER_ADDR'].'";';
		echo '$_(\'reviews_js_file\').src =  "http://api.webuzo.com/reviewsjs.php?soft='.$soft.'&user='.$softpanel->user['name'].'&ip='.$_SERVER['SERVER_ADDR'].'";';	
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

$url = $theme['images'];
$ratings = array();
$deduct = 1;
$r = $apps[$soft]['ratings'];
for($i_r=1; $i_r<=5; $i_r++){		
	if($r >= 1){
		$ratings[$i_r] = '<td><img src="'.$url.'star.png'.'" alt="('.number_format($apps[$soft]['ratings'], 2).' out of 5)" /></td>';
	}elseif($r > 0){
		$ratings[$i_r] = '<td><img src="'.$url.'halfstar.png'.'" alt="('.number_format($apps[$soft]['ratings'], 2).' out of 5)" /></td>';
	}else{
		$ratings[$i_r] = '<td><img src="'.$url.'nostar.png'.'" alt="('.number_format($apps[$soft]['ratings'], 2).' out of 5)" /></td>';
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

echo '<div class="bg" >
	<div id="currentrating" style="display:none"></div>
	<div class="row" style="margin-left:10px;">
		'.(!empty($custom_48) ? '<img src="'.$custom_48.'" alt="">' : '<img src="'.$globals['mirror_images'].'webuzo/softimages/'.$soft.'__logo.gif" >').'
		<span class="sai_process_heading" style="margin-left:20px;">'.$software['name'].'</span>
	</div><br/>
	<div class="row" style="margin-left:10px;">
		<div class="col-sm-2">'.($soft > 10000 ? '' : '<div class="someclass" title="'.$apps[$soft]['ratings'].'"><table><tr>'.implode('', $ratings).'</tr></table></div>').'</div>
		<div class="col-sm-5 ver_style">
			'.$l['software_ver'].' : <font size="2"><b>'.(!empty($info['version']) ? $info['version'] : 'NA').'</b></font>
		</div>
		<div class="col-sm-3 release_style">
			'.(!empty($info['release_date']) ? $l['release_date'].' : <font size="1"><b>'.$info['release_date'].'</b></font>' : '').'
		</div>
		<div class="col-sm-2 change_style">
			'.(!empty($info['changelog']) ? '&nbsp;&nbsp;<a href="javascript" onclick="$(\'#changelog_div\').bPopup(); return false;" class="sai_changelogbut" style="text-decoration:none;">'.$l['changelog'].'</a>' : '').'
		</div>
	</div><br />
	<div class="old_tab">
		<table width="100%" cellpadding="0" cellspacing="0" border="0" class="sai_tabs">
			<tr>
				<td><a href="javascript:tabs.tab(\'overview\')" class="sai_insbut" id="overview">'.$l['overview'].'</a></td>
				<td><a href="javascript:tabs.tab(\'notes\')" class="sai_tabbed" id="notes">'.$l['notes'].'</a></td>
				<td><a href="javascript:tabs.tab(\'features\')" class="tab" id="features">'.$l['features'].'</a></td>
				'.(empty($globals['off_rating_link']) && $soft < 10000 ? '<td><a href="javascript:tabs.tab(\'ratings\')" class="tab" id="ratings">'.$l['ratings'].'</a></td>' : '').'
				'.(empty($globals['off_review_link']) && $soft < 10000 ? '<td><a href="javascript:tabs.tab(\'reviews\')" class="tab" id="reviews">'.$l['reviews'].'</a></td>' : '').'
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
					<li class="active" style="width:80px;"><a href="javascript:tabs.tab(\'overview\')" id="overview" class="sai_tab2" style="text-decoration:none; height:40px; top:5px;" data-toggle="collapse" data-target="#myNavbar">'.$l['overview'].'</a></li>					</ul>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar" style="position:absolute; z-index:1000; width:100%; background:#F8F8F8;">
				<ul class="nav navbar-nav">
					<li><a href="javascript:tabs.tab(\'notes\')"  id="overview" class="sai_tab2" style="text-decoration:none;" data-toggle="collapse" data-target="#myNavbar">'.$l['notes'].'</a></li>
					<li><a href="javascript:tabs.tab(\'features\')"  id="features" class="sai_tab2" style="text-decoration:none;" data-toggle="collapse" data-target="#myNavbar">'.$l['features'].'</a></li>
					<li><a href="javascript:tabs.tab(\'ratings\')" class="sai_tab2" id="ratings" style="text-decoration:none;" data-toggle="collapse" data-target="#myNavbar">'.$l['ratings'].'</a></li>
					<li><a href="javascript:tabs.tab(\'reviews\')" class="sai_tab2" id="reviews" style="text-decoration:none;" data-toggle="collapse" data-target="#myNavbar">'.$l['reviews'].'</a></li>
				</ul>
			</div>
		</nav>
	</div>';

// Parse and take care of images
$info['overview'] = '<div id="fadeout_div">'.(!empty($info['changelog']) ? '<div id="changelog_div" class="sai_popup" style="display:none;"><span class="sai_clogbutton b-close"><span>X</span></span><div class="sai_changelog">'.$info['changelog'].'</div></div>' : '').'

	<div class="row">
		'.(!empty($scripts[$soft]['screenshots']) && empty($globals['panel_hf']) ? '
		<div class="col-sm-6">
			<div id="overview_img"> <img src="'.$globals['mirror_images'].'softimages/screenshots/'.$soft.'_screenshot1.gif" class="img-responsive" alt="" > </div>
		</div>': '').'
			
		<div class="'.(!empty($scripts[$soft]['screenshots']) && empty($globals['panel_hf']) ? 'col-sm-6' : 'col-sm-12').' col-xs-12">
			'.softparse($info['overview'], $soft).'<br /><br />
			<div class="row">
				<div class="col-sm-1 col-xs-1"><font color="#447edf"><i class="fa sai-disk fa-3x"></i></font></div>
				<div class="col-sm-5 col-xs-11">
					<label class="sai_head">'.$l['space_req'].'</label><br />
					<span class="sai_exp2">'.$l['available_space'].' : '.(is_numeric($softpanel->spaceremain) ? number_format($softpanel->spaceremain/1024/1024, 2) : $softpanel->spaceremain).' '.$l['mb'].'<br />
					'.$l['req_space'].' : '.number_format($info['space']/1024/1024, 2).' '.$l['mb'].'</span>
				</div>
				
				<div class="col-sm-1 col-xs-1"><a href="'.$info['support'].'"><font color="#447edf"><i class="fa sai-question fa-3x"></i></font></a></div>
				<div class="col-sm-5 col-xs-11">
					<label class="sai_head">'.$l['software_support'].'</label><br />
					<span class="sai_exp2"><a href="'.$info['support'].'" target="_blank">'.$l['support_link'].'</a><br />
					'.$l['support_note'].'</span>
				</div>
			</div><br/><br/>
		</div>
	</div>';

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
'.$software['name'].' '.$l['succesful'].'<br />
'.$l['enjoy'].'<br /><br />
'.(!empty($notes) ? $l['install_notes'].' : <br />
<div class="sai_notes">'.softparse($notes, $soft, 1).'</div><br /><br />' : '').'
'.$l['please_note'].'<br /><br />
'.$l['regards'].',<br />
'.$l['softinstaller'].'<br /><br />
<center><b><a href="'.app_link($soft).'">'.$l['return'].'</a></b></center><!--PROC_DONE--><br /><br />';

if(empty($globals['install_tweet_off']) || empty($globals['lictype'])){
	$info['overview'] .= '<form method="get" action="http://twitter.com/intent/tweet" id="tweet" onsubmit="return dotweet(this);">
	<div class="panel panel-primary" style="width:50%; margin:0 auto;">
		<div class="panel-heading text-center" style="padding:5px;background-color:#4B77BE;border-color:#4B77BE;border-radius:0px;">
			<font size="3"><b>'.$l['install_tweet_sub'].$software['name'].'</b></font>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-sm-12 text-center">
					<textarea name="text" style="resize:none;width:100%;padding:5px;">'.loadtweetdata('install_tweet', $l['install_tweet_classes']).'</textarea><br>
					<input type="submit"  value="Tweet!" class="btn btn-primary" onsubmit="return false;" id="twitter-btn" style="margin-top:10px;padding: 7px 14px;" >
				</div>
			</div>
		</div>
	</div>
	</form>';
}

}elseif(!empty($removed)){

	$info['overview'] = '<br /><br /><br /><div class="sai_success"><img src="'.$theme['images'].'notice.gif" /> &nbsp; '.$l['uninstalled'].'</div><!--PROC_DONE--><br /><br />
<center><b><a href="'.app_link($soft).'">'.$l['return'].'</a></b></center>';

}else{

// Premium App | Just listed in Free to TEMPT the USER
if(empty($globals['lictype']) && !empty($apps[$soft]['force_apps'])){
	$info['overview'] .= '<center class="sai_anotice">'.lang_vars($l['not_in_free'], array($apps[$soft]['name'])).'</center><br />';
}
	
// The installer
$info['overview'] .= '<br />

<form accept-charset="'.$globals['charset'].'" name="installsoftware" method="post" action="" onsubmit="return checkform();" id="installsoftware">
'.error_handle($error, "100%", 0, 1).'
<p align="center">';
		
	if(!empty($settings)){
		
		// For set defaults check box display
		$is_display = 0;
		if(!empty($info['is_default'])){
			foreach($info['is_default'] as $k => $v){
				if(array_key_exists($v, $iapps)){						
					$ins_display = 1;						
				}
			}
		}
			
		// Is this app a dependency for any other application ?
		foreach($iapps as $k => $v){
				
			if(empty($v['deps'])) continue;
				
			if(in_array($apps[$soft]['softname'], $v['deps'])){
				$rem_display = 1;
			}
		}
			
		if(!empty($ins_display) || !empty($rem_display)){				
				
			foreach($settings as $group => $sets){
					
				if($group == 'hidden' || empty($sets)) continue;
				
				$ext_disp .= '<br />
				<div class="bg">
					<div class="row">
						<div class="col-sm-12">
							<div class="sai_sub_head">'.$group.'</div>
						</div>
					</div>';
						
					foreach($sets as $sk => $sv){
							
						$ext_disp .= '<div class="row">
						<div class="col-sm-5">
							<label class="sai_head">'.$sv['head'].'</label>
							'.(empty($sv['exp']) ? '' : '<br />
							<span class="sai_exp2">'.$sv['exp'].'</span>').'
						</div>
						<div class="col-sm-7">
							'.(preg_match('/admin_pass|softpass/is', $sv['tag']) ? '<div class="row"><div class="col-sm-11">'.preg_replace('/>|\/>/is',' onkeyup="check_pass_strength();">', $sv['tag']).'</div>' : $sv['tag']).'
							'.(preg_match('/softmail/is', $sv['tag']) ? '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
								softemail["'.$sk.'"] = false;
								//Add an event handler
								$_("'.$sk.'").onkeydown = function(){
									softemail["'.$sk.'"] = true;
								}
							// ]]></script>' : '').'
							'.(preg_match('/admin_pass|softpass/is', $sv['tag']) ? '
								<div class="col-sm-1"><a href="javascript: void(0);" onclick="$_(\''.$sk.'\').value=randstr(10, 1);check_pass_strength();return false;" title="'.$l['randpass'].'"><img src="'.$theme['images'].'randpass.gif" /></a></div></div>
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
						</div>
					</div><br/>';
					}					
				$ext_disp .= '</div><br /><!--end of bg class-->';
			}
		}		
	}//End of if($settings)	
	if(empty($iapps[$soft.'_1'])) {
							
		if(!empty($ins_display)){			
			$info['overview'] .= $ext_disp;				
		}

		//check if user is allowed to install this App
		if(($apps[$soft]['ins'] == 1 && empty($globals['lictype'])) || !empty($globals['lictype'])){
			$info['overview'] .= '<center><input type="hidden" align="" name="install" id="softsubmit" value="install" />
			<input type="submit" name="softsubmitbut" id="softsubmitbut" value="'.$l['softsubmit'].'" class="flat-butt" /></center>';
		}else{
	 		$info['overview'] .='<center><div class="alert alert-danger">'.lang_vars($l['not_in_free'], array($apps[$soft]['name'])).'</div></center>';
	 	}

	}else{
						
		if(!empty($rem_display)){										
			$info['overview'] .= $ext_disp;	
		}
						
		$info['overview'] .= '<center><input type="hidden" name="remove" id="softsubmit" value="remove" />
		<input type="submit" name="softsubmitbut" id="softsubmitbut" onclick="return confirm_remove();" value="'.$l['remove'].'" class="flat-butt" /></center>';
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
			AJAX("'.$globals['index'].'act=software&soft='.$soft.'&ajaxdownload=1&random="+Math.random(), "get_package_handle(re)");
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

//Parse and take care of images
$info['features'] = softparse($info['features'], $soft, 1);

$info['ratings'] = '';
$info['reviews'] = '<div id="allreviews"></div>';

foreach($info as $k => $v){
	
	if(in_array($k, array('demo', 'support', 'import', 'install'))) continue;
	
	echo '<div id="'.$k.'_win" style="display: '.($init_tab == $k ? "block" : "none").';">
	'.$v.'
	</div>';


}

echo '<br /><br />
</div><!--end of bg class-->';

softfooter();

}

?>