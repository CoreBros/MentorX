<?php

//////////////////////////////////////////////////////////////
//===========================================================
// publish_theme.php
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

function publish_theme(){

global $theme, $globals, $softpanel, $user, $l, $error, $iscripts, $scripts, $insid, $software, $p, $configure, $_chmod, $done, $soft;

// Give the staus
if(optGET('ajaxstatus')){
	
	$_status = soft_progress(optGET('ajaxstatus'));
	
	if(is_array($_status)){
		echo implode('|', $_status);
		return true;
	}
	
	// False call
	echo 0;
	return false;

}

softheader($l['<title>']);

echo '<center class="sai_tit"><img src="'.$theme['images'].'publish_dp.gif" />&nbsp; &nbsp;'.$l['header'].'</center>
<img src="'.$theme['images'].'hr.jpg" width="100%" height="1" alt="" /><br /><br />

<div id="entire_win">';

if(!empty($done)){
	echo '<div class="sai_notice"><img src="'.$theme['images'].'success.gif" /> &nbsp; '.$l['done'].'</div><br />
'.lang_vars($l['succesful'], array($software['name'])).' : <br />
<a href="'.$p->settings['new_softurl'].'" target="_blank">'.$p->settings['new_softurl'].'</a>
'.(!empty($software['adminurl']) ? '<br />'.$l['admin_url'].' : <a href="'.$p->settings['new_softurl'].'/'.$software['adminurl'].'" target="_blank">'.$p->settings['new_softurl'].'/'.$software['adminurl'].'</a>' : '').'<br /><br />
'.$l['enjoy'].'<br /><br />
'.(!empty($notes) ? $l['publish_notes'].' : <br />
<div class="sai_notes">'.softparse($notes, $soft).'</div><br /><br />' : '').'
'.$l['please_note'].'<br /><br />
'.$l['regards'].',<br />
'.$l['softinstaller'].'<!--PROC_DONE-->';
}else{
	
echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[

function checkform(dosubmit){
	
	$_("softsubmitbut").disabled = true;	
	//return true;
	
	// Send a request to check the status
	progressbar.start();
	
	// Return false so that the form is not submitted directly
	return false;
	
};

var progressbar = {
	timer: 0,
	total_width: 0,	
	status_key: "",
	synctimer: 0,
	fadeout_div: "#fadeout_div",
	win_div: "#entire_win",
	progress_div: "#progress_bar",
	formid: "#publishins",
	frequency: 3000,
	
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
		this.move(3, 800);
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
					}).delay(50).animate({opacity: 1}, 500);
					
					//alert(newhtml);
					
				}else{
					alert("Oops ... the connection was lost");
				}
			}
		});
	}
};

// ]]></script>

<div id="progress_bar" style="height:125px; display: none;">
	<br /><br />
	<center>
	<font size="4" color="#222222" id="progress_txt">'.$l['checking_data'].'</font>
	<font style="font-size: 18px;font-weight: 400;color: #444444;" id="progress_percent">(0 %)</font><br /><br />
	</center>
	<table width="500" cellpadding="0" cellspacing="0" id="table_progress" border="0" align="center" height="28" style="border:1px solid #CCC; -moz-border-radius: 5px;
-webkit-border-radius: 5px; border-radius: 5px;">
		<tr>
			<td id="progress_color" width="1" style="background-image: url('.$theme['images'].'bar.gif); -moz-border-radius: 4px; -webkit-border-radius: 4px; border-radius: 4px;"></td>
			<td id="progress_nocolor">&nbsp;</td>
		</tr>
	</table>
</div>

<div id="fadeout_div">';

error_handle($error, '100%');

echo '<form accept-charset="'.$globals['charset'].'" name="publishins" id="publishins" method="post" action="" onsubmit="return checkform();">

<table border="0" cellpadding="8" cellspacing="0" width="100%">
	<tr>
		<td width="40%">
			<span class="sai_head">'.$l['choose_account'].'</span><br />
			<span class="sai_exp">'.$l['choose_account_exp'].'</span>
		</td>
		<td>
			<select name="remid" id="remid">';
			
		foreach($user['remote'] as $k => $v){
			echo '<option value="'.$k.'" '.POSTselect('remid', $k).'>'.$v['domain_name'].'</option>';		
		}
		
		echo '</select>
		</td>
	</tr>';
	
	$defaultdir = basename($user['ins'][$insid]['softpath']);
	
	// Is it the home folder of a domain ?
	foreach($softpanel->domainroots as $k => $v){
		if(strtolower(cleanpath($user['ins'][$insid]['softpath'])) == strtolower(cleanpath($v))){
			$defaultdir = '';
		}
	}
	
	echo '<tr>
		<td>
			<span class="sai_head">'.$l['dir'].'</span><br />
			<span class="sai_exp">'.$l['dir_exp'].'</span>
		</td>
		<td>
			<input type="text" name="dir" id="dir" size="30" value="'.POSTval('dir', $defaultdir).'" />
		</td>
	</tr>
	
	<tr>
		<td>
			<span class="sai_head">'.$l['password'].'</span><br />
			<span class="sai_exp">'.$l['password_exp'].'</span>
		</td>
		<td>
			<input type="password" name="password" id="password" size="30" value="'.POSTval('password', '').'" />
		</td>
	</tr>
</table>

<p align="center">
<input type="hidden" name="publishins" id="publishins" value="'.$l['publishins'].'" />
<input type="submit" name="softsubmitbut" id="softsubmitbut" value="'.$l['publishins'].'" class="sai_graybluebut" />
</p>
<input type="hidden" name="soft_status_key" id="soft_status_key" value="'.POSTval('soft_status_key', generateRandStr(32)).'" />
</form>
</div>';

}

echo '</div>
<br /><br /><br />
<center><b><a href="'.script_link($soft).'">'.$l['return'].'</a></b></center>';

softfooter();

}

?>