<?php

//////////////////////////////////////////////////////////////
//===========================================================
// classes_theme.php
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

function classes_theme(){

global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $scripts;
global $software, $cid, $info, $settings, $init_tab, $overwrite_option, $dbs, $installed, $__settings, $setupcontinue, $installations, $notes, $show_installtype, $protocols, $nopackage;

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
	
	$info['install'] = '<div id="fadeout_div"><form accept-charset="'.$globals['charset'].'" name="installsoftware" method="post" action="" onsubmit="return checkform();" id="installsoftware" class="form-horizontal">
						'.error_handle($error, "100%", 0, 1).'
						
<script language="javascript" src="'.$theme['url'].'/js/jquery-ui-custom.js?'.$GLOBALS['globals']['version'].'" type="text/javascript"></script>
<script language="javascript" type="text/javascript"><!-- // --><![CDATA[

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
			$_("installsoftware").submit();	
		}
		show_msg("'.$l['installing'].'");
	}
	
	return true;
	
};

function toggle_advoptions(){
	if ($("#advoptions").is(":hidden")){
		$("#advoptions").slideDown("slow");
		$("#advoptions_toggle_plus").attr("src", "'.$theme['images'].'minus_new.gif");
	}
	else{
		$("#advoptions").slideUp("slow");
		$("#advoptions_toggle_plus").attr("src", "'.$theme['images'].'plus_new.gif");
	}
}

function plus_onmouseover(){
	$("#plus").attr("src", "'.$theme['images'].'plus_hover.gif");
}

function plus_onmouseout(){
	$("#plus").attr("src", "'.$theme['images'].'plus.gif");
}

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
				url: "'.$globals['index'].'act=js&soft='.$cid.'&ajaxdownload=1&random="+Math.random(),
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
			$_(x).value = temp[0] + "@" + $_(sofdom).value;
		}
	}catch(e){
		return false;
	}
};

function change_aefer_path(){
	try{
		var str = $_("softdomain").value;
		var apath = ' . json_encode($softpanel->domains) . ';
		$_("aef_path").innerHTML = $_("aef_span_lang").innerHTML = $_("aef_span_lang_a").innerHTML = apath[str]["path"]+"/";
	}catch(e){
		return false;
	}
};

$(document).ready(function(){
	$("#check_all_classes").on("click", function(event){
		if(this.checked == true){
			$(".check_all_classes").prop("checked", true);
		}else{
			$(".check_all_classes").prop("checked", false);
		}
	});
	change_aefer_path();
});

'.(!empty($_POST) ? '' : 'addonload(\'softmail();\');');

$info['install'] .= '// ]]></script>';

$info['install'] .= '
	<div class="bg">
		<div class="sai_sub_head">'.$l['setup'].'</div><hr>';

		if(aefer() || ent()){

			$info['install'] .= '
				<div class="row">
						<div class="col-sm-5">
							<label for="softdomain" class="sai_head">'.$l['choose_domain'].'</span><br />
							<span class="sai_exp">'.$l['choose_domain_exp'].'</span>
						</div>
						<div class="col-sm-7">
							<select name="softdomain" id="softdomain" onchange="change_aefer_path();" class="form-control">';
				if(!empty($globals['blank_domain'])){
					$info['install'] .= '<option value="" '.(empty($_POST['softdomain']) ? 'selected="selected"' : '').'>('.$l['select_domain'].')</option>';
				}

				foreach($softpanel->domainroots as $domain => $dompath){

					$info['install'] .= '<option value="'.$domain.'" '.((!empty($_POST['softdomain']) && $_POST['softdomain'] == $domain) ? 'selected="selected"' : '').'>'.$domain.'</option>';

				}

				$info['install'] .= '</select>
						</div>
				</div>';
		}

		$info['install'] .= '
			<div class="row">
				<div class="col-sm-5">
					<label for="softdirectory" class="sai_head">'.$l['in_directory'].'</label><br />
					<span class="sai_exp2">'. lang_vars((aefer() || ent() ? $l['aef_in_directory_exp'] : $l['in_directory_exp']), array($softpanel->user['homedir'])).'</span>
				</div>
				<div class="col-sm-7">
					<span id="aef_path">'.$softpanel->user['homedir'].'/</span><br><input type="text" name="softdirectory" id="softdirectory" class="form-control" size="30" value="'.POSTval('softdirectory', $software['softname']).'" />
				</div>
			</div>';

	$info['install'] .= '
	</div><br /><!--end of bg class-->';

if(!empty($settings)){
	
	if(file_exists($software['path'].'/install.js')){
		$info['install'] .= '<script language="javascript" type="text/javascript"><!--// --><![CDATA[';		
		$info['install'] .= @parselanguages(str_replace('$(', '$_(', implode('', file($software['path'].'/install.js'))));
		$info['install'] .= '// ]]></script>';
	}

	foreach($settings as $group => $sets){
		
		if($group == 'hidden') continue;
	
		$info['install'] .= '
			<div class="bg">
				<div class="sai_sub_head">'.$group.'</div><hr>';

				foreach($sets as $sk => $sv){
					//Adding class to input
					if(preg_match('/type="text"/is', $sv['tag'])){
						$sv['tag'] = preg_replace('/>/is', ' class="form-control">',$sv['tag']);
					}
					if(preg_match('/<select/is', $sv['tag'])){
						$sv['tag'] = preg_replace('/<select/is', '<select class="form-control"',$sv['tag']);
					}
					$info['install'] .= '
					<div class="row">
						<div class="col-sm-5">
							<label for='.$sk.' class="sai_head" id="sai_head">'.$sv['head'].'</label>
								'.(empty($sv['exp']) ? '' : '<span class="sai_exp">'.$sv['exp'].'</span>').'	
						</div>
							'.(preg_match('/admin_pass|softpass/is', $sv['tag']) ? preg_replace('/>|\/>/is',' onkeyup="check_pass_strength();" >', '
								<div class="col-sm-6">'.$sv['tag'].'</div>') :'<div class="col-sm-7 ">'.$sv['tag'].'</div>').'
								'.(preg_match('/softmail/is', $sv['tag']) ? '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
								softemail["'.$sk.'"] = false;
								//Add an event handler
								$_("'.$sk.'").onkeydown = function(){
									softemail["'.$sk.'"] = true;
								}
								// ]]></script>
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
								'.(preg_match('/admin_email/is', $sv['tag']) && !empty($globals['use_eu_email']) ? '
								<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
								$(document).ready(function(){$_("'.$sk.'").value="'.$user['email'].'";});
								// ]]></script>
								' : '').'
						</div><br />';		
				}
			$info['install'] .= '
			</div><br /><!--end of bg class-->';
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

//Do not show 'disable update notifications' option if both 'Turn off all Emails sent to endusers' and 'Disable End User Update E-Mails' or either is enabled in Admin Panel
if(empty($globals['off_email_link']) && empty($globals['eu_email_off'])){
// Advance option 
$info['install'] .= '
	<div class="bg">
		<div class="sai_sub_head" id="advoptions_toggle" onclick="toggle_advoptions(\'advoptions\');" style="cursor:pointer"><img id="advoptions_toggle_plus"  src="'.$theme['images'].'plus_new.gif" style="margin-top:-4px;"/>&nbsp;&nbsp;'.$l['adv_option'].'</div>
		<div id="advoptions" style="display:none;"><hr>
			<div class="row">
				<div class="col-sm-5">
					<label class="sai_head">'.$l['disable_notify_update'].'</label>
					<span class="sai_exp">'.$l['exp_disable_notify_update'].'</span>
				</div>
				<div class="col-sm-7">
					<input type="checkbox" name="disable_notify_update" id="disable_notify_update" '.POSTchecked('disable_notify_update').' />
				</div>	
			</div>	
		</div>	
	</div><!--end of bg--><br /><br />';
}
			
$info['install'] .= '
	<p align="center" class="sai_head">
		<input type="hidden" name="softsubmit" id="softsubmit" value="'.$l['softsubmit'].'" />
		<input type="submit" name="softsubmitbut" id="softsubmitbut" value="'.$l['softsubmit'].'" class="flat-butt" /><span id="show_txt" style="display:none;"></span>
		<br /><br /><br />
		'.(empty($globals['off_email_link']) ? $l['ins_emailto'].' : <input type="text" name="emailto" id="emailto" size="20" value="'.POSTval('emailto', '').'" />' : '').'
	</p>
	<input type="hidden" name="soft_status_key" id="soft_status_key" value="'.POSTval('soft_status_key', generateRandStr(32)).'" />
	'.csrf_display().'
	</form></div>

<div id="progress_bar" style="height:125px; display: none; width:100%;">
	<br /><br />
	<center>
		<font size="4" color="#222222" id="progress_txt" style="width:100%;">'.$l['checking_data'].'</font>
		<font style="font-size: 18px;font-weight: 400;color: #444444;" width:100%;" id="progress_percent">(0 %)</font><br /><br />
	</center>
	<table width="500" cellpadding="0" cellspacing="0" id="table_progress" border="0" align="center" height="28" style="border:1px solid #CCC; -moz-border-radius: 5px;
	-webkit-border-radius: 5px; border-radius: 5px; width:50%;"">
	<tr>
		<td id="progress_color" width="1" style="background-image: url('.$theme['images'].'bar.gif); -moz-border-radius: 4px; -webkit-border-radius: 4px; border-radius: 4px;"></td>
		<td id="progress_nocolor">&nbsp;</td>
	</tr>
	</table>
</div>
<br />';

}elseif(!empty($installed)){

	$info['install'] = '
	<div class="bg2">
		<h4>'.$l['congrats'].'</h4><br />
		'.$software['name'].' '.$l['succesful'].' : <br />
		<b>'.$__settings['softpath'].'</b>
		<br /><br />
		'.$l['enjoy'].'<br /><br />
		'.(!empty($notes) ? $l['install_notes'].' : <br />
		<div class="sai_notes">'.softparse($notes, $cid).'</div><br /><br />' : '').'
		'.$l['please_note'].'<br /><br />
		'.$l['regards'].',<br />
		'.$l['softinstaller'].'<br /><br />
		<center><b><a href="'.$globals['ind'].'act=classes&cid='.$cid.'">'.$l['return'].'</a></b></center><br /><br />';

		if(empty($globals['install_tweet_off']) || empty($globals['lictype'])){
			$info['install'] .= '<form method="get" action="http://twitter.com/intent/tweet" id="tweet" onsubmit="return dotweet(this);">
			<div class="panel panel-info" style="width:55%; margin:0 auto;">
				<div class="panel-heading" style="padding:5px; font-size:15px;">
					<font><b>'.$l['install_tweet_sub'].' :</b></font>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-sm-10">
							<textarea name="text" cols="80" row="3" style="resize:none; width:100%;">'.loadtweetdata('install_tweet', $l['install_tweet_classes']).'</textarea>
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
	</div><!--end of bg class--><!--PROC_DONE-->
	<br /><br /><br /><br />
';

}

softheader($l['<title>'].$software['name']);

$loadedinfo = array('install', 'overview', 'file', 'reviews', 'ratings');

?>
<script language="JavaScript" src="<?php echo $theme['url'].'/js/tabber.js';?>" type="text/javascript">
</script>
<script language="JavaScript" id="ratings_js_file" type="text/javascript"></script>
<script language="JavaScript" id="review_js_file"  type="text/javascript"></script>
<script language="JavaScript" id="reviews_js_file"  type="text/javascript"></script>
<script language="JavaScript" id="file_js_file"  type="text/javascript"></script>
<script type="text/javascript">
tabs = new tabber;
tabs.tabs = new Array('<?php echo implode('\', \'', $loadedinfo);?>');
tabs.tabwindows = new Array('<?php echo implode('_win\', \'', $loadedinfo);?>_win');
tabs.inittab = <?php echo '\''.$init_tab.'\';';?>

addonload('tabs.init();loadraterev();');

function loadraterev(){
	$_('ratings_js_file').src = '<?php echo $globals['api_nuphp2'].'rating.php?cid='.$cid.'&user='.$softpanel->user['name'].'&ip='.$_SERVER['SERVER_ADDR'].'&rating=1';?>';
	$_('review_js_file').src = '<?php echo $globals['api_nuphp2'].'review.php?cid='.$cid.'&user='.$softpanel->user['name'].'&ip='.$_SERVER['SERVER_ADDR'].'&review=1';?>';
	$_('reviews_js_file').src = '<?php echo $globals['api_nuphp2'].'reviews.php?cid='.$cid.'&user='.$softpanel->user['name'].'&timezone='.$globals['timezone'].'&ip='.$_SERVER['SERVER_ADDR'].'&reviews=1';?>';
	if(tabs.inittab == 'file'){
	filecodeview.loadDirStruct();
}

}
</script>
<?php
$url = $theme['images'];
$ratings = array();
$deduct = 1;
$r = $software['ratings'];
for($i_r=1; $i_r<=5; $i_r++){		
	if($r >= 1){
		$ratings[$i_r] = '<img src="'.$url.'star.png'.'" alt="('.number_format($software['ratings'], 2).' out of 5)" />';
	}elseif($r > 0){
		$ratings[$i_r] = '<img src="'.$url.'halfstar.png'.'" alt="('.number_format($software['ratings'], 2).' out of 5)" />';
	}else{
		$ratings[$i_r] = '<img src="'.$url.'nostar.png'.'" alt="('.number_format($software['ratings'], 2).' out of 5)" />';
	}
	$r = $r - $deduct;
}

echo '
<div class="bg">
	<div id="currentrating" style="display:none"></div>
	
	<div class="row" style="margin-left:-5px;">
		<span class="sai_process_heading" colspan="4">'.$software['name'].'</span>
	</div><br />
	<div class="row">
		<div class="col-sm-3"><div class="someclass" title="'.$scripts[$k]['ratings'].'">'.implode('', $ratings).'</div></div>
		<div class="col-sm-4">
			'.$l['software_ver'].' : <span class="sai_head"><font size="4">'.$software['version'].'</font></span> &nbsp; &nbsp; <a href="javascript" onclick="notifyversion(); return false;" ><img src="'.$theme['images'].'notify.gif" name="notifyver" title="'.$l['notify_ver'].'" alt="'.$l['notify_ver'].'"></a>
		</div>
		<div class="col-sm-3">
			'.$l['software_category'].' : <span class="sai_head"><font size="4">'.$l['classes_'.$software['category']].'</font></span>
		</div>
	</div><br />
	
	<table width="100%" cellpadding="0" cellspacing="0" border="0" class="sai_tabs">
		<tr>
			<td><a href="javascript:tabs.tab(\'install\')" id="install" class="sai_insbut">'.$l['install'].'</a></td>
			<td><a href="javascript:tabs.tab(\'overview\')" class="sai_tab" id="overview">'.$l['overview'].'</a></td>
			<td><a href="javascript:tabs.tab(\'file\'); filecodeview.loadDirStruct();" class="sai_tab" id="file">'.$l['file'].'</a></td>
			'.(empty($globals['off_rating_link']) ? '<td><a href="javascript:tabs.tab(\'ratings\')" class="sai_tab" id="ratings">'.$l['ratings'].'</a></td>' : '').'
			'.(empty($globals['off_review_link']) ? '<td><a href="javascript:tabs.tab(\'reviews\')" class="sai_tab" id="reviews">'.$l['reviews'].'</a></td>' : '').'
		</tr>
	</table><br />';

	?>
	<script type="text/javascript">
	$_(tabs.inittab).className = tabs.tabbedclass;
	var softid = <?php echo $cid;?>;

	tabs.override = function(id){
		if(id == 'install'){
			$_('install').className = 'sai_insbutclicked';
		}else{		
			$_('install').className = 'sai_insbut';
		}
	};
	</script>
	<?php

	//Parse and take care of images
	$info['overview'] = '<table width="100%" cellpadding="8" cellspacing="1" border="0">
	<tr>
		<td valign="top" style="padding:10px;">
			'.softparse($info['overview'], $cid).'<br /><br />
			<table width="100%" cellpadding="4" cellspacing="1" border="0">
				<tr>
					<td width="52" valign="top" align="center"><font color="#447edf"><i class="fa sai-disk fa-3x"></i></font></td>
					<td valign="top">
						<span class="sai_head">'.$l['space_req'].'</span><br />
						<span class="sai_exp2">'.$l['available_space'].' : '.(is_numeric($softpanel->spaceremain) ? number_format($softpanel->spaceremain/1024/1024, 2) : $softpanel->spaceremain).' '.$l['mb'].'<br />
						'.$l['req_space'].' : '.number_format($software['spacereq']/1024/1024, 2).' '.$l['mb'].'</span>
					</td>
				</tr>
				<tr>
					<td valign="top" align="center"><a href="'.$info['support'].'"><font color="#447edf"><i class="fa sai-question fa-3x"></i></font></a></td>
					<td valign="top">
						<span class="sai_head">'.$l['software_support'].'</span><br />
						<span class="sai_exp2"><a href="'.$info['support'].'" target="_blank">'.$l['support_link'].'</a><br />
						'.$l['support_note'].'</span>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	</table>';

	if(!empty($installations)){
		$info['overview'] .= '<br /><br />
			<div class="sai_sub_head" align="center">'.$l['current_ins'].'</div><hr>';

				$info['overview'] .= '<table border="0" cellpadding="5" cellspacing="0" width="100%" class="table table-hover">
			<tr>
				<thead class="sai_head2" style="background:#333; color:#fff;">
					<th><b>'.$l['link'].'</b></th>
					<th width="180"><b>'.$l['ins_time'].'</b></th>
					<th width="80"><b>'.$l['version'].'</b></th>
					<th width="120"><b>'.$l['remove'].'</b></th>
					<th width="50"><input type="checkbox" id="check_all_classes"></th>
				<thead>
			</tr>';

		foreach($installations as $ik => $iv){
			$info['overview'] .= '<tr>
				<td>'.$iv['softpath'].'</td>
				<td width="180">'.datify($iv['itime']).'</td>
				<td width="80">'.$iv['ver'].($software['ver'] != $iv['ver'] && file_exists($software['path'].'/upgrade.xml') ? ' <a href="'.$globals['ind'].'act=upgrade&cinsid='.$ik.'"><img src="'.$theme['images'].'updates.gif" alt="'.$l['upd_to'].' '.$scripts[$cid]['ver'].'" /></a>' : '').'</td>
				<td width="120"><a href="'.$globals['ind'].'act=classes_remove&cinsid='.$ik.'" title="'.$l['remove'].'"><img src="'.$theme['images'].'remove.gif" /></a></td>
				<td width="50"><input type="checkbox" class="check_all_classes" name="insids[]" value="'.$ik.'"></td>
			</tr>';
		}
		
		$info['overview'] .= '</table><br />
			<p align="right">
				'.$l['with_selected'].': 
				<select name="multi_options" id="multi_options">
					<option name="todo" id="todo" value="0">---</option>
					<option name="todo" id="todo" value="mult_rem">'.$l['remove'].'</option>
				</select>
				<input type="button" class="sai_graybluebut" value="'.$l['go'].'" onclick="show_confirm()">
				<br />
			</p>
			<div id="rem_div"></div>
		
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
					url: "'.$globals['index'].'act=classes_remove&cinsid="+insid+"&ajax=1&ssk="+randomstring(32)+"&random="+Math.random(),
					// Checking for error
					success: function(data){
						remove_by_id(nextinsid, data, insid);	
					}
				});
			
				$_("rem_div").innerHTML = "<br /><br /><p align=\"center\"><img src=\"' . $theme['images'] . 'ajax_remove.gif\"> <br />'.$l['rem_inst_id']. ' ID: " +insid+ "<br /></p>";
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

		$(".sai_altrowstable tr").mouseover(function(){
			var old_class = $(this).attr("class");
			//alert(old_class);
			$(this).attr("class", "sai_tr_bgcolor");
			
			$(this).mouseout(function(){
				$(this).attr("class", old_class);
			});
		});

	});

	// ]]></script>';
	}

	$info['file'] =  '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[

	var filecodeview = {
		dir : "",
		data_obj : '.$software['dirstruct'].',
		
		loadDirStruct : function(direction){
				var size = new Number(('.$software['zip_size'].'/1024)+"").toFixed(parseInt(2));
				size = size+" kb";
				var right = "right";
				var back_path_div = \'<table border="0" width="100%"><tr><td><a href="javascript:void(0);" onclick="filecodeview.loadDirStruct(\\\'\'+right+\'\\\');" style="font-size:15px;color:#09F;text-decoration:none;">'.$software['name'].'</a>&nbsp;&nbsp;/&nbsp;&nbsp;<div id="back_path" style="display:inline;"></div></td><td align="right" width="33%"><a href="'.$globals['api_nuphp'].'download.php?cid='.$cid.'&file=package" taget="_blank" style="text-decoration:none">'.$l['download_zip'].'&nbsp;(\'+size+\')&nbsp;<img src="'.$theme['images'].'zip.gif" alt="Download" title="Download" height="35px" width="30px"></a></td></tr></table><div id="soft_dir"></div>\';
				 $("#file_win").html(back_path_div);
				 var soft_dirs = \'<table border="0" cellpadding="10" cellspacing="0" width="100%" class="table table-hover"><th width="50%" class="sai_exp2">'.$l['files'].'</th><th width="25%" class="sai_exp2">'.$l['size'].'</th><th width="25%" class="sai_exp2" colspan="2">'.$l['modified_time'].'</th>\';
				var tr_i = 1;
				 $.each(filecodeview.data_obj, function (i, item) {
					 
					if(tr_i % 2 == 0){
						tr_class = "sai_evenrowcolor";
					}else{
						tr_class = "sai_oddrowcolor";
					}
					
					var download_td = "<td></td>";
					
					if(item.is_dir == 1){
						var file_ext_ico = "dir.png";
					}else{
						var file_ext_ico = "txt.png";
						download_td = \'<td><a href="'.$globals['api_nuphp'].'download.php?cid='.$cid.'&file=\'+i+\'" taget="_blank" style="text_decoration:none";><img src="'.$theme['images'].'downloadbutton.png" alt="Download" title="'.$l['download'].'" height="20px" width="20px"></a></td>\';
					}
					var size = new Number((item.size/1024)+"").toFixed(parseInt(2));
					size = size+" kb";
					if(item.modified == "" || typeof(item.modified) == "undefined"){
						var m_time = "--";
					}else{
						var m_time = filecodeview.timeConverter(item.modified);
					}
					
					if(i.search("/") <= 0){
						var right = "right";
						soft_dirs += \'<tr class=\'+tr_class+\'><td><img src="'.$theme['images'].'\'+file_ext_ico+\'" width="20px" height="20px"/>&nbsp;&nbsp;<a href="javascript:void(0)" onclick="filecodeview.show_tree(\\\'\'+i+\'\\\', \\\'\'+right+\'\\\');" style="text-decoration:none;">\'+i+\'</td><td>\'+size+\'</td><td>\'+m_time+\'</td>\'+download_td+\'</tr>\';
						tr_i += 1;
					}
										
				 });// end of each loop

			soft_dirs += "</table>";
			
			$("#soft_dir").css("display", "none");
			$("#soft_dir").html(soft_dirs);
			$("#soft_dir").show("slide", {direction : "left"}, 700);
		
			$(".sai_altrowstable tr").mouseover(function(){
				var old_class = $(this).attr("class");
				//alert(old_class);
				$(this).attr("class", "sai_tr_bgcolor");
				
				$(this).mouseout(function(){
					$(this).attr("class", old_class);
				});
			});
			 
		}, // End of loadDirStruct

		show_tree : function(current, direction){
		//alert(current);
			if(filecodeview.data_obj[current].is_dir == 0){
				var size = new Number((filecodeview.data_obj[current].size/1024)+"").toFixed(parseInt(2));
				size = size+" kb";
				download_td = \'<a href="'.$globals['api_nuphp'].'download.php?cid='.$cid.'&file=\'+current+\'" taget="_blank" style="text_decoration:none";><img src="'.$theme['images'].'downloadbutton.png" alt="Download" title="Download" height="20px" width="20px"></a>\';
				var soft_file = \'<div style="height:600px;width:100%;"><div style="background-color:#E8E8E8;box-shadow: 0 5px 5px 0 #CCCCCC;text-shadow: 2px 2px 2px #FFFFFF;padding:10px;font-size:13px;">\'+current.substr((current.lastIndexOf("/")+1))+\'&nbsp;&nbsp;<img src="'.$theme['images'].'action_separator.png">&nbsp;&nbsp;\'+size+\'&nbsp;&nbsp;<img src="'.$theme['images'].'action_separator.png">&nbsp;&nbsp;\'+download_td+\'</div><iframe src="'.$globals['api_nuphp'].'file_giver.php?cid='.$cid.'&giveinfo=codeview&file=\'+current+\'" width="100%" height="100%" frameborder="0" class="sai_iframe_class" id="filecode"></iframe></div>\';
				//$("#soft_dir").css("display", "none");
				$("#soft_dir").html(soft_file);
				$("#soft_dir").show("slide", {direction : "right"}, 700);
				
			}else{
				
				var soft_dirs = \'<div id="back_path" ></div><table border="0" cellpadding="10" cellspacing="0" width="100%" class="table table-hover"><tr><th width="50%" class="sai_exp2">'.$l['files'].'</th><th width="25%" class="sai_exp2">'.$l['size'].'</th><th width="25%" class="sai_exp2" colspan="2">'.$l['modified_time'].'</th></tr>\';
			 var tr_i = 1;
			 $.each(filecodeview.data_obj, function (i, item) {
				 
				if(tr_i % 2 == 0){
					tr_class = "sai_evenrowcolor";
				}else{
					tr_class = "sai_oddrowcolor";
				}
				
				var download_td = "<td></td>";
				if(item.is_dir == 1){
					var file_ext_ico = "dir.png";
				}else{
					var file_ext_ico = "txt.png";
					download_td = \'<td><a href="'.$globals['api_nuphp'].'download.php?cid='.$cid.'&file=\'+i+\'"><img src="'.$theme['images'].'downloadbutton.png" alt="Download" title="Download" height="20px" width="20px"></a></td>\';
				}

				var rgxp = new RegExp("^"+current, "i");
				var rgxpnot = new RegExp("^"+current+"/(.*)/(.*)", "gi");
				if(i.match(rgxpnot)){
					return;
				}
				
				if(i.match(rgxp)){
					// This new_i is defined because we are changing the value of i for display purpose
					var new_i = i;
					// We are adding / to i bcoz same filename as folder should not be replaced otherwise only extension will be displayed
					if(item.is_dir == 1){
						i = i + "/";
					}
					
					// If we are not in the directory why should we go ahead right !!
					if(!i.match(current+"/")) return;
					
					i = i.replace(current+"/","");
					
					var size = new Number((item.size/1024)+"").toFixed(parseInt(2));
					size = size+" kb";
					if(item.modified == "" || typeof(item.modified) == "undefined"){
						var m_time = "--";
					}else{
						var m_time = filecodeview.timeConverter(item.modified);
					}
					
					// Now count the / occured bcoz only the current folder we have to display
					var count_i = i.split("/");
					// For checking the right file to be displayed
					if((count_i.length) <= 2 && i.length > 0){
						
						var right = "right";
						soft_dirs += \'<tr class=\'+tr_class+\'><td><img src="'.$theme['images'].'\'+file_ext_ico+\'" width="20px" height="20px"/>&nbsp;<a href="javascript:void(0)" onclick="filecodeview.show_tree(\\\'\'+new_i+\'\\\', \\\'\'+right+\'\\\');" style="text-decoration:none;">\'+i+\'</td><td>\'+size+\'</td><td>\'+m_time+\'</td>\'+download_td+\'</tr>\';
						tr_i += 1;
					}
				}
									
			 });// end of each loop
		
				soft_dirs += "</table>";
				var seperated_path = new Array();
				var new_joined_path = "";
				var final_path = "";
				if(current.search("/") >= 0){
					
					var new_back_path = current.substr(current.lastIndexOf("/"));
					seperated_path = current.split("/");
					for(var i = 0; i < (seperated_path.length); i++){
						if(i>0){
							var seperator = "/";
						}else{
							var seperator = "";
						}
						var left = "left";
						new_joined_path += seperator+seperated_path[i]; 
						final_path += \'<a href="javascript:void(0);" onclick="filecodeview.show_tree(\\\'\'+new_joined_path+\'\\\', \\\'\'+left+\'\\\');" style="font-size:16px;color:#09F;text-decoration:none;">\'+seperated_path[i]+\'</a>&nbsp;&nbsp;/&nbsp;&nbsp;\';
					}
					
				}else{
					var left = "left";
					var new_back_path = current;
					final_path += \'<a href="javascript:void(0);" onclick="filecodeview.show_tree(\\\'\'+current+\'\\\', \\\'\'+left+\'\\\');" style="font-size:16px;color:#09F;text-decoration:none;">\'+current+\' </a>\';	
				}
				
				
				
				
				$("#back_path").html(final_path);
				$("#soft_dir").css("display", "none");
				$("#soft_dir").html(soft_dirs);
				$("#soft_dir").show("slide", {direction : direction}, 700);
				
				
			}// End of else
			$(".sai_altrowstable tr").mouseover(function(){
					var old_class = $(this).attr("class");
					//alert(old_class);
					$(this).attr("class", "sai_tr_bgcolor");
					
					$(this).mouseout(function(){
						$(this).attr("class", old_class);
					});
				});
		}, //End of show_tree
		
		timeConverter : function(timestamp){
			
			 var a = new Date(timestamp*1000);
			 var months = ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];
			 var year = a.getFullYear();
			 var month = months[a.getMonth()];
			 var date = a.getDate();
			 var hour = a.getHours();
			 var min = a.getMinutes();
			 var sec = a.getSeconds();
			 var time = date+","+month+" "+year+" "+hour+":"+min+":"+sec ;
			 return time;
		 }
		 
	};// end of filecodeview

	// ]]></script>';

	$info['ratings'] = '';
	$info['reviews'] = '<div id="allreviews"></div>';

	foreach($info as $k => $v){
		
		if(in_array($k, array('demo', 'support'))) continue;
		
		echo '<div id="'.$k.'_win" style="display: '.($init_tab == $k ? "block" : "none").';">
		'.$v.'
		</div>';

	}
echo '</div><!--end of bg class-->';

softfooter();

}

?>