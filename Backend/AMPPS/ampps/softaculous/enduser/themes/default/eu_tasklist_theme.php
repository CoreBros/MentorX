<?php

//////////////////////////////////////////////////////////////
//===========================================================
// eu_tasklist_theme.php
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

function eu_tasklist_theme(){

global $theme, $globals, $user, $l, $langs, $skins, $error, $saved, $list, $done, $filename, $error_log_data, $no_tasks, $tasks_file;

// Give the staus
if(optGET('status')){
	
	$array = array();
	
	foreach($tasks_file as $tk => $tv){
		$_status = soft_progress($tv['name']);
		//r_print($_status);
		$cur_progress = unserialize($_status[1]);
		//r_print($cur_progress);
		$_status[0] = $_status[0].'|'.$cur_progress['current_status'];
		$_status[1] = $cur_progress;
		
		$array[$tv['name']] = $_status;
		//r_print($array);
		//echo implode('|', $_status);
	}
	
	if(!empty($array)){
		echo json_encode($array);
		return true;
	}
	
	// False call
	echo 0;
	return false;

}

softheader($l['<title>']);

$_key = array();

echo '
<div class="bg"><br />
	<div class="row sai_main_head" style="width:100%;" align="center">
		<div class="col-sm-6 col-xs-5" style="padding:0 10px 0 0; text-align:right;">
			<i class="fa sai-list fa-1x" style="color:#00A0D2;"></i>
		</div>
		<div class="col-sm-6 col-xs-7" style="padding-left:0; text-align:left;">'.$l['errorlog_head'].'</div>
	</div>
	<hr>
	<div class="row">
		<div class="sai_sub_head" align="center">'.(!empty($no_tasks) ? $l['no_tasks'] : $l['current_tasks']).'</div><br /><br />
	</div>	
	<div id="main_div" >';

foreach($tasks_file as $k => $v){
	
	$_key[$v['name']] = $v['name'];
	
	echo '<div  id="body_progressbar'.$v['name'].'">
		<div class="row">
			<div class="col-sm-6">
				<label class="sai_head" id="progress_script'.$v['name'].'"></label><br />
				<label class="sai_head" id="progress_softurl'.$v['name'].'"></label><br />
			</div>
			<div class="col-sm-5">
				<div id="progressbar'.$v['name'].'" style="height:25px;"></div><br />
				<div class="row">
					<div class="col-sm-8 sai_head" id="progress_process'.$v['name'].'"></div>
					<div class="col-sm-8 sai_head" id="progress_txt'.$v['name'].'"></div>
					<div class="col-sm-4 sai_head" id="progress_percent'.$v['name'].'"></div>
				</div>
			</div>		
			<div class="col-sm-1" style="margin-top:10px;">
				<img src="'.$theme['images'].'admin/softok.gif" style="display:none" id="suucess_img'.$v['name'].'"/>
			</div>
		</div>
	</div>
	<hr>';
}

echo '</div>
</div>';

echo '<script language="javascript" src="'.$theme['url'].'/js/jquery.ui.widget.min.js" type="text/javascript"></script>
<script language="javascript" src="'.$theme['url'].'/js/ui.progressbar.js" type="text/javascript"></script>

<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
var set = 0;
var refresh_period = 3000; // ms
var script_path = window.location;

ids = ["'.implode('", "', array_keys($_key)).'"];

// In case if user reload the page than we have to initialize the available running progressbar so that it can be shown properly.
for(x in ids){
	$("#progressbar"+ids[x]).progressbar();
	$("#progressbar"+ids[x]).progressbar( "option", "value", 0.1 );
	$("#progressbar"+ids[x]).css("height", "25px");
}

(function( $ ) {
    $.fn.animate_progressbar = function(value,duration,easing,complete) {
		try{
			if (value == null)value = 0;
			if (duration == null)duration = 2000;
			if (easing == null)easing = "swing";
			if (complete == null)complete = function(){};
			var progress = this.find(".ui-progressbar-value").css("height","25px");
			
			progress.stop(true).animate({
				width: value + "%"
			},duration,easing,function(){
	
				if(value >= 99.5){
					progress.addClass("ui-corner-right");
				} else {
					progress.removeClass("ui-corner-right");
				}
				complete();
			});
		}catch(e){
				// do nothing my dear !!
		}
    }
})( jQuery );

function create_new_div(key){
	//alert(key);	
	var new_div = \'<div id="body_progressbar\'+key+\'"><div class="row"><div class="col-sm-6"><label class="sai_head" id="progress_script\'+key+\'"></label><br /><label class="sai_head" id="progress_softurl\'+key+\'"></label><br /></div><div class="col-sm-5"><div id="progressbar\'+key+\'" style="height:25px;"></div><br /><div class="row"><div class="col-sm-8 sai_head" id="progress_process\'+key+\'"></div><div class="col-sm-8 sai_head" id="progress_txt\'+key+\'"></div><div class="col-sm-4 sai_head" id="progress_percent\'+key+\'"></div></div></div><div class="col-sm-1" style="margin-top:10px;"><img src="'.$theme['images'].'admin/softok.gif" style="display:none" id="suucess_img\'+key+\'"/></div></div></div><hr>\';
	//alert(new_div);	
	$(new_div).appendTo("#main_div");
	$("#progressbar"+key).progressbar();
	$("#progressbar"+key).progressbar( "option", "value", 0.0001 );
	// Add new added divs ID so that we can delete it if any error occurs
	ids.push(key);
}



// Now make the firts call for ProgressBar.
$(document).ready(function(){
	set = 0;
	updateProgressBar();
});

function in_array(val){
	
	for (i=0; i <= ids.length; i++){
		if (ids[i] == val) {
			return true;
			// {alert(i +" -- "+ids[i]+" -- "+val);return i;}
		}
	}
	return false;
}

function updateProgressBar () {

	$.getJSON(script_path+"&status=1&random="+Math.random(), function(data) {
		
		if (data == 0) {
			
			//Remove progress div if there no status file
			$("#main_div").find("div").each(function(){
				prog_id = $(this).attr("id");
			
				if(prog_id){
					if(prog_id.match(/body_progressbar/gi)){
						prog_id = prog_id.replace("body_progressbar", "");
						$("#body_progressbar"+prog_id).hide();
						$("#body_progressbar"+prog_id).next("hr").remove();
					}
				}
			});
			
			setTimeout("updateProgressBar()", 3000);
			return;
			//clearInterval(interval);
			//alert("bas karo ab");
		}
		
		setTimeout("updateProgressBar()", 3000);
		// Just set the heading
		$("#task_heading").html("'.$l['current_tasks'].'");
		//var count = countProperties(data);
		
		
		var real_ids = [];
		var prog_id = "";
		
		// Just to check if the process is created when user is on this page 
		// So user dont have to refresh the page
		$.each(data, function (key, item){
			// If div is not there than create it !
			//alert($("#progressbar"+key).length);
			if($("#body_progressbar"+key).length == 0){
				create_new_div(key);
			}
			
			real_ids.push(key);
		});
		
		$("#main_div").find("div").each(function(){
			prog_id = $(this).attr("id");
			if(prog_id){
				if(prog_id.match(/body_progressbar/gi)){
					prog_id = prog_id.replace("body_progressbar", "");
					var found = 0;
					
					for(var i = 0; i <= real_ids.length; i++ ){
						if(real_ids[i] == prog_id){
							found = 1;
						}
					}
					
					//If status file is not present remove the div
					if(!found){
						$("#body_progressbar"+prog_id).hide();
						$("#body_progressbar"+prog_id).next("hr").remove();
					}
				}
			}
		});
	
		$.each(data, function (key, item){
			
			// We have to set the progress bar to 0.0001 to work 
			if(set == 0){
				$("#progressbar"+key).progressbar();
				$("#progressbar"+key).progressbar( "option", "value", 0.1 );
				set = 1;
			}
			
			//alert(key);
			//alert(data[key]);
			
			var cur_prog = data[key][0].split("|");
			var prog_data = data[key][1];
			
			//alert(tmp_arr);
			//alert(data[key]);
			
			//Remove div if any task is corrupted
			if(cur_prog[0] == 0){
				if($("#body_progressbar"+key).is(":visible")){
					$("#body_progressbar"+key).hide();
					$("#body_progressbar"+key).next("hr").remove();
				}
			}
			
			// Just check for an error if any.
			if(!in_array(key)){
				$("#body_progressbar"+key).remove();
			}
			
			$("#progress_percent"+key).html("<font size=\"2\" color=\"#222222\"> ("+cur_prog[0]+" %)</font>");
			
			if(prog_data.version){
				$("#progress_script"+key).html(prog_data.name +" "+"("+prog_data.version+")");
			}else{
				$("#progress_script"+key).html(prog_data.name);
			}
			
			$("#progress_process"+key).html(prog_data.process+" "+prog_data.name+"<br>");
			// Just in case of CLASSES it is generated bit late so dont show untill we get the value
			if(typeof prog_data.softurl != "undefined"){
				$("#progress_softurl"+key).html("<a href=\'"+prog_data.softurl+"\' target=\"_blank\">"+prog_data.softurl+"</a>");
			}
			
			if(typeof prog_data.softpath != "undefined"){
				$("#progress_softurl"+key).html(prog_data.softpath);
			}
			
			if(cur_prog[0] == 100){
				$("#progress_process"+key).html("");
				$("#suucess_img"+key).css("display", "block");
				$("#progressbar"+key).fadeOut(100);
				$("#progress_txt"+key).html(prog_data.completed);
			}else{
				$("#progress_txt"+key).html(prog_data.current_status);
			}
			
			$("#progressbar"+key).animate_progressbar(cur_prog[0], 3000);
			
		});
			
	});	
}

// ]]></script>';



echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[

function show_msg(msg){	
	$_("show_txt").innerHTML = "<br /><br /> &nbsp; "+msg+" &nbsp; <img src=\"'.$theme['images'].'progress.gif\" />";
	$_("show_txt").style.display = "";
}

// Use the Progress Bar ?
try{
	if(BrowserDetect.browser.toLowerCase() == "safari" && BrowserDetect.version.toString().substr(0, 1) == "3"){
		useprog = 0;
	}
}catch(e){ }

// ]]></script>';



softfooter();

}

?>