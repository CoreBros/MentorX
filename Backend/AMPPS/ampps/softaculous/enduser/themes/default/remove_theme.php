<?php

//////////////////////////////////////////////////////////////
//===========================================================
// remove_theme.php
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


function remove_theme(){

global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error;
global $insid, $removed, $software, $soft, $cinsid, $user_ins, $act;

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

if(optGET('ajax')){
	if(!empty($removed)){
		echo 'removed';
	}else{
		echo 'false';	
	}
	return true;
}


softheader($l['<title>']);

echo '<div class="bg" id="install_win"><br />';

if(!empty($removed)){
	echo '<div class="alert alert-warning"><center>'.$l['uninstalled'].'</center></div><!--PROC_DONE-->';
}else{
	
echo '<div id="fadeout_div"><form accept-charset="'.$globals['charset'].'" name="editsettings" method="post" action="" onsubmit="return checkform();" id="editsettings" class="form-horizontal">
<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
	function checkform(dosubmit){
		var conf = confirm(\''.$l['remove_conf'].'\');
		if(conf){
			$_("softsubmitbut").disabled = true;
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
	formid: "#editsettings",
	frequency: 8000,
	posting: 0,
	
	current: function(){
		try{
			return Math.round(parseInt($_("progress_color").width)/parseInt($_("table_progress").width)*100);
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
				if(progressbar.posting == 0){
					return false;
				}
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
		
		progressbar.posting = 1;
		
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
				
				progressbar.posting = 0;
				
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

	
// Use the Progress Bar ?
var useprog = 1;
try{
	if(BrowserDetect.browser.toLowerCase() == "safari" && BrowserDetect.version.toString().substr(0, 1) == "3"){
		useprog = 0;
	}
}catch(e){ }

// ]]></script>

<div class="row sai_main_head" style="width:100%;" align="center">
	<div class="col-sm-5 col-xs-5" style="padding:0 10px 0 0; text-align:right;">
		<i class="fa sai-remove fa-2x" style="color:#00A0D2;"></i>
	</div>
	<div class="col-sm-7 col-xs-7" style="padding-top:10px; padding-left:0; text-align:left;">'.$l['prog_removing'].$software['name'].'</div>
</div>
<hr>';

echo error_handle($error, "100%", 0, 1);

echo '
<div style="padding: 0 25px;">';
	
if(empty($globals['remove_dir'])){

	echo '<div class="row">
		<div class="col-sm-5">
			<label for="remove_dir" class="sai_head">'.$l['remove_dir'].'</label><br />
			<span class="sai_exp2">'.$l['remove_dir_exp'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="checkbox" name="remove_dir" id="remove_dir" '.POSTchecked('remove_dir', true).' />
		</div>
	</div><br />';

}

// Data directory ?
if(!empty($user_ins['softdatadir']) && empty($globals['remove_datadir'])){

	echo '<div class="row">
		<div class="col-sm-5">
			<label for="remove_datadir" class="sai_head">'.$l['remove_datadir'].'</label><br />
			<span class="sai_exp2">'.$l['remove_datadir_exp'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="checkbox" name="remove_datadir" id="remove_datadir" '.POSTchecked('remove_datadir', true).' />
		</div>
	</div><br />';

}

// Remove WWW Directory ??
if(!empty($user_ins['wwwdir']) && empty($globals['remove_wwwdir'])){

	echo '<div class="row">
		<div class="col-sm-5">
			<label for="remove_wwwdir" class="sai_head">'.$l['remove_wwwdir'].'</label><br />
			<span class="sai_exp2">'.$l['remove_wwwdir_exp'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="checkbox" name="remove_wwwdir" id="remove_wwwdir" '.POSTchecked('remove_wwwdir', true).' />
		</div>
	</div><br />';

}

if(!empty($user_ins['softdb']) && empty($globals['remove_db'])){

	echo '<div class="row">
		<div class="col-sm-5">
			<label for="remove_db" class="sai_head">'.$l['remove_db'].'</label><br />
			<span class="sai_exp2">'.$l['remove_db_exp'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="checkbox" name="remove_db" id="remove_db" '.POSTchecked('remove_db', true).' />
		</div>
	</div><br />';

}

if(!empty($user_ins['softdbuser']) && empty($globals['remove_db'])){

	echo '<div class="row">
		<div class="col-sm-5">
			<label for="remove_dbuser" class="sai_head">'.$l['remove_dbuser'].'</label><br />
			<span class="sai_exp2">'.$l['remove_dbuser_exp'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="checkbox" name="remove_dbuser" id="remove_dbuser" '.POSTchecked('remove_dbuser', true).' />
		</div>
	</div><br />';

}

echo '
</div>
<br />
<div class="bg info_block">
	<div class="sai_sub_head">'.$l['info'].'</div><hr style="border-color: #D1D2D3;">

	<div class="row">
		<div class="col-sm-5">
			<span class="sai_head">'.$l['ins_softname'].'</span>
		</div>
		<div class="col-sm-6">
			<span class="sai_info">'.(!empty($software['name']) ? $software['name'] : $l['disabled_script_info']).'</span>
		</div>
	</div><br />
	
	<div class="row">
		<div class="col-sm-5">
			<span class="sai_head">'.$l['ins_num'].'</span>
		</div>
		<div class="col-sm-6">
			<span class="sai_info">'.(!empty($user_ins['insid']) ? $user_ins['insid'] : $cinsid).'</span>
		</div>
	</div><br />
	
	'.(empty($user_ins['ver']) ? '' : '<div class="row">
		<div class="col-sm-5">
			<span class="sai_head">'.$l['ins_ver'].'</span>
		</div>
		<div class="col-sm-6">
			<span class="sai_info">'.$user_ins['ver'].'</span>
		</div>
	</div><br />').'
	
	<div class="row">
		<div class="col-sm-5">
			<span class="sai_head">'.$l['ins_time'].'</span>
		</div>
		<div class="col-sm-6">
			<span class="sai_info">'.datify($user_ins['itime']).'</span>
		</div>
	</div><br />
	
	<div class="row">
		<div class="col-sm-5">
			<span class="sai_head">'.$l['ins_path'].'</span>
		</div>
		<div class="col-sm-6">
			<span class="sai_info">'.$user_ins['softpath'].'</span>
		</div>
	</div><br />
	
	'.(empty($user_ins['softurl']) ? '' : '<div class="row">
		<div class="col-sm-5">
			<span class="sai_head">'.$l['ins_url'].'</span>
		</div>
		<div class="col-sm-6">
			<span class="sai_info endurl"><a href="'.$user_ins['softurl'].'" target="_blank">'.$user_ins['softurl'].'</a></span>
		</div>
	</div><br />').'
	
	'.(empty($user_ins['softdatadir']) ? '' : '<div class="row">
		<div class="col-sm-5">
			<span class="sai_head">'.$l['ins_datadir'].'</span>
		</div>
		<div class="col-sm-6">
			<span class="sai_info endurl">'.$user_ins['softdatadir'].'</span>
		</div>
	</div><br />').'
	
	'.(empty($user_ins['wwwdir']) ? '' : '<div class="row">
		<div class="col-sm-5">
			<span class="sai_head">'.$l['ins_wwwdir'].'</span>
		</div>
		<div class="col-sm-6">
			<span class="sai_info endurl">'.$user_ins['wwwdir'].'</span>
		</div>
	</div><br />').'
	
	'.(empty($user_ins['softdb']) ? '' : '<div class="row">
		<div class="col-sm-5">
			<span class="sai_head">'.$l['ins_db'].'</span>
		</div>
		<div class="col-sm-6">
			<span class="sai_info endurl">'.$user_ins['softdb'].'</span>
		</div>
	</div><br />').'
	
	'.(empty($user_ins['softdbuser']) ? '' : '<div class="row">
		<div class="col-sm-5">
			<span class="sai_head">'.$l['ins_dbuser'].'</span>
		</div>
		<div class="col-sm-6">
			<span class="sai_info endurl">'.$user_ins['softdbuser'].'</span>
		</div>
	</div><br />').'
	
	'.(empty($user_ins['softdbhost']) ? '' : '<div class="row">
		<div class="col-sm-5">
			<span class="sai_head">'.$l['ins_dbhost'].'</span>
		</div>
		<div class="col-sm-6">
			<span class="sai_info endurl">'.$user_ins['softdbhost'].'</span>
		</div>
	</div><br />').'
	
	'.(empty($user_ins['cron_command']) ? '' : '<div class="row">
		<div class="col-sm-5">
			<span class="sai_head">'.$l['ins_cron_command'].'</span>
		</div>
		<div class="col-sm-6">
			<span class="sai_info endurl">'.base64_decode($user_ins['cron_command']).'</span>
		</div>
	</div><br />');

echo '
</div>
<br /><br />
<p align="center">
<input type="hidden" name="removeins" id="removeins" value="'.$l['removeins'].'" />
<input type="submit" name="softsubmitbut" class="flat-butt" id="softsubmitbut" value="'.$l['removeins'].'"  />
</p>
<input type="hidden" name="soft_status_key" id="soft_status_key" value="'.POSTval('soft_status_key', generateRandStr(32)).'" />
'.csrf_display().'
</form>
</div>';

echo '<div id="progress_bar" style="width:100%; display: none;">
	<br />
	<center>
		<div class="row sai_main_head" style="width:100%;" align="center">
			<div class="col-sm-5 col-xs-5" style="padding:0 10px 0 0; text-align:right;">
				<i class="fa sai-remove fa-2x" style="color:#00A0D2;"></i>
			</div>
			<div class="col-sm-7 col-xs-7" style="padding-top:10px; padding-left:0; text-align:left;">'.$l['prog_removing'].$software['name'].'</div>
		</div><bd /><br />
		<font size="4" color="#222222" id="progress_txt" style="width:100%;">'.$l['checking_data'].'</font>
		<font style="font-size: 18px;font-weight: 400;color: #444444; width:100%;" id="progress_percent">(0 %)</font><br /><br />
	</center>
	<table width="500" cellpadding="0" cellspacing="0" id="table_progress" border="0" align="center" height="28" style="border:1px solid #CCC; -moz-border-radius: 5px;
-webkit-border-radius: 5px; border-radius: 5px; width:50%">
		<tr>
			<td id="progress_color" width="1" style="background-image: url('.$theme['images'].'bar.gif); -moz-border-radius: 4px; -webkit-border-radius: 4px; border-radius: 4px;"></td>
			<td id="progress_nocolor">&nbsp;</td>
		</tr>
	</table>
	<br /><center>'.$l['wait_note'].'</center>
</div>
';

}
if(!empty($insid)){
	
	$return = '<a href="'.script_link($soft).'" class="sai_head">'.$l['return'].'</a>';
	//Filter to customize the return to link
	$return = apply_filters('return_link', $return, $act);
	
	echo '<br /><br /><center><b>'.$return.'</b></center><br /><br />';
}else{
	echo '<br /><br /><center><b><a href="'.$globals['index'].'act=classes&cid='.$user_ins['cid'].'" class="sai_head">'.$l['return'].'</a></b></center><br /><br />';
}
echo '</div>';
softfooter();

}

?>