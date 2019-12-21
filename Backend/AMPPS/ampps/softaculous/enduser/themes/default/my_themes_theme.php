<?php

//////////////////////////////////////////////////////////////
//===========================================================
// my_themes_theme.php
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


function my_themes_theme(){

global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $edit, $settings;
global $insid, $edited, $software, $soft, $scripts, $purchased, $owned_themes;

if(optPOST('ajax')){
	return true;
}

softheader($l['<title>']);

echo '
<script language="javascript" type="text/javascript"><!-- // --><![CDATA[

function plus_onmouseover(ele){
	$("#"+ele.id+"_plus").attr("src", "'.$theme['images'].'plus_hover.gif");
}

function plus_onmouseout(ele){
	$("#"+ele.id+"_plus").attr("src", "'.$theme['images'].'plus.gif");
}

var length;
var deduct;
var payment_timer;
var dg;
var owned_theme = new Array("'.implode('", "', array_values($owned_themes)).'");

var screen_width = $(window).width();

if(screen_width < 1024){
	length = 3;
	deduct = 20;
}else{
	length = 4;
	deduct = 20;
}

'.(empty($user['pfxapi_key']) ? 'var api_key = 0;' : 'var api_key = 1;').'


// Now make the API key if it is not there
	if(api_key == 0){
		
		var csrf_token = $("#csrf_token").val();
		
		 $.ajax({
			type: "POST",
			data: "generate_apikey=1&csrf_token="+csrf_token,
			url: "'.$globals['index'].'act=my_themes&jsnohf=1",
			// Checking for error
			success: function(data){
				// Do nothing :)
			}
		 });
	}
	
function show_pay(){
	
	//alert(arguments[0] +" -- "+arguments[1]+" -- "+arguments[2]);
	$("#pfxpay").bPopup();
	
	// Now set the variable for sending the data
	$("#item_name").val(arguments[0]);
	$("#item_number").val(arguments[1]);
	$("#amount").val(arguments[2]);
	$("#item_price").html(arguments[2]);
	
	
	dg = new PAYPAL.apps.DGFlow({
		// HTML ID of form submit buttons that call setEC
		trigger:"submit_pay",
		expType:"instant"
	});
	
	$("#submit_pay").click(function(){
		$("#pfxpay").bPopup().close();
	});
	
	$(".b-close").click(function(){
		
	});
}

function show_selected_theme(){
	
	var th_name = $("#theme_name").val();
	var th_id = $("#theme_id").val();
	
	//alert("'.$globals['api_pfx'].'theme_search.php?in=json&cversion='.$software['ver'].'&cat='.$iscripts[$soft]['name'].'&q="+th_name+"&start=0&length=1&callback=?")
	
	$.getJSON("'.$globals['api_pfx'].'theme_search.php?in=json&cversion='.$software['ver'].'&cat='.$iscripts[$soft]['name'].'&q="+th_name+"&start=0&length=1&callback=?",
		function (data) {
				
			// If there is no result found
			if(data.data == "NODATA"){
				data.data = new Array();
			}
			
			var soft_themes = \'<div id="slider"><table border="0" width="100%" height="200" cellspacing="0" cellpadding="3"><tr>\';
			var new_li = 0;
			$.each(data.data, function (i, item) {
				
				if(item.name != undefined){
					soft_themes += \'<td align="center"><div class="sai_image_container" id="img_\'+new_li+\'" onmouseover="onthemeover(nav_\'+new_li+\');" onmouseout="onthemeout(nav_\'+new_li+\');" value="\'+item.pid+\'" theme_name="\'+item.softname+\'"><div class="sai_theme_header">\'+item.name+\'</div><img src="\'+data.img_url+item.pid+\'/\'+item.pid+\'_200.png" width="230" height="200" ><div class="sai_navigation" id="nav_\'+new_li+\'" style="display:none;"><span class="sai_demo"><a href="\'+item.demo_url+\'" target="_blank">Demo</a></span></div></div></td>\';
					soft_themes += \'</tr><tr><td><input type="hidden" name="theme_id" id="theme_id" value="\'+item.pid+\'"><input type="hidden" name="theme_name" id="theme_name" value="\'+item.softname+\'"></td></tr></table></div>\';
				}
				new_li += 1;
			});// end of each loop
	
			
			$("#display_theme").html(soft_themes);
			$(".sai_image_container").removeClass("sai_theme_selected");
			$(".sai_image_container").addClass("sai_theme_selected");
			$(function(){
				$(".sai_image_container, #select_this_theme").click(function(){
					$(".sai_image_container").removeClass("sai_theme_selected");
					if(this.id == "select_this_theme"){
						$("#"+$(this).attr("val")).addClass("sai_theme_selected");
						$("#theme_id").val($("#"+$(this).attr("val")).attr("value"));
						$("#theme_name").val($("#"+$(this).attr("val")).attr("theme_name"));
					}else{
						$(this).addClass("sai_theme_selected");
						$("#theme_id").val($(this).attr("value"));
						$("#theme_name").val($(this).attr("theme_name"));
					}						
				 })
			});
			
			$("#themesearch").bPopup().close();
		});
}

function clear_theme(){
	$(".sai_image_container").removeClass("sai_theme_selected");
	$("#theme_id").val("");
	$("#theme_name").val("");
	$("#clear_theme").hide();
	show_list(0, length);
}

function onthemeover(id_no){
	$(id_no).show();
}

function onthemeout(id_no){
	$(id_no).hide();
}

var startpt;
function search() {
	
	var query_value = $("input#themesearchstring").val();
			
	if(query_value.match(/[^a-zA-Z0-9_-\s]+/)){
		$("input#themesearchstring").val("");
		alert("'.$l['invalid_search_input'].'");
		return false;
	}
			
	$("b#search-string").html(query_value);
	
	if(startpt == undefined || startpt == ""){
		startpt = 0;
	}
	var top = 0;
	if(query_value === ""){
		top = 1;
	}
	
	$.getJSON("'.$globals['api_pfx'].'theme_search.php?in=json&cversion='.$software['ver'].'&cat='.$iscripts[$soft]['name'].'&start="+startpt+"&length=20&q="+query_value+"&top="+top+"&callback=?",
	function (data) {
				
		// If there is no result found
		if(data.data == "NODATA"){
			data.data = new Array();
		}
		
		var search_themes = \'<div id="slider"><table border="0" width="100%" height="200" cellspacing="5" cellpadding="3">\';
		var new_li = 0;
		$.each(data.data, function (i, item) {
			
			if(item.name != undefined){
				search_themes += \'<tr class="sai_tr_color"><td align="center"><table border="0" width="100%" cellspacing="0" cellpadding="3"><tr><td width="160"><div class="sai_image_container" id="simg_\'+new_li+\'" value="\'+item.pid+\'" theme_name="\'+item.softname+\'" style="width:160px;height:175px;"><img src="\'+data.img_url+item.pid+\'/\'+item.pid+\'_200.png" width="150" height="150" ><div class="sai_navigation" id="snav_\'+new_li+\'" style="display:none;"><span class="sai_demo"><a href="\'+item.demo_url+\'" target="_blank">Demo</a></span></div></div></td><td><table class="sai_search_description" border="0" cellpadding="5" cellspacing="0" width="100%"><tr><td colspan="2"><b>\'+item.name+\'</b></td></tr><tr><td colspan="2">\'+item.desc+\'</td></tr><tr><td colspan="2">\'+item.overview+\'</td></tr><tr><td width="200"><div class="sai_searchbox_button" id="select_this_theme" val="simg_\'+new_li+\'">'.$l['use_this_theme'].'</div></td><td><div class="sai_searchbox_button"><a href="\'+item.demo_url+\'" target="_blank">'.$l['demo'].'</a></div></td></tr></table></td><td width="50"></td></tr></table></td></tr>\';
			}
			new_li += 1;
		});// end of each loop

		search_themes += \'<tr><td><input type="hidden" name="theme_id" id="theme_id"><input type="hidden" name="theme_name" id="theme_name"></td></tr></table></div>\';
		$("#searchsuggestions").animate(0, "", function(){
			$("#searchsuggestions").html(search_themes);
				$(function(){
					$(".sai_image_container, #select_this_theme").click(function(){
						$(".sai_image_container").removeClass("sai_theme_selected");
						if(this.id == "select_this_theme"){
							$("#"+$(this).attr("val")).addClass("sai_theme_selected");
							$("#theme_id").val($("#"+$(this).attr("val")).attr("value"));
							$("#theme_name").val($("#"+$(this).attr("val")).attr("theme_name"));
							show_selected_theme();
							$("#clear_theme").css("display", "block");
						}else{
							$(this).addClass("sai_theme_selected");
							$("#theme_id").val($(this).attr("value"));
							$("#theme_name").val($(this).attr("theme_name"));
						}						
					 })
				});
		}).delay(0).animate({opacity: 1}, 300);
		
	}); // End of getJSON
}

var search_timer;

$(document).on("keyup", "#themesearchstring", function(e) {
	
	//clearTimeout($.data(this, "timer"));
	var search_string = $(this).val();
	clearTimeout(search_timer);

	if (search_string == "") {
		$("ul#results").fadeOut();
		$("h4#results-text").fadeOut();
		$("#searchsuggestions").html("");
	}else{
		$("ul#results").fadeIn();
		$("h4#results-text").fadeIn();
		search_timer = setTimeout("search();", 200);
	};
});



//function to display list of Themes
function show_list(start, length){
	length = 20;
	//alert("'.$globals['api_pfx'].'category.php?in=json&cversion='.$software['ver'].'&cat='.$iscripts[$soft]['name'].'&start="+start+"&length="+length+"&callback=?");
    $.getJSON("'.$globals['api_pfx'].'category.php?in=json&cversion='.$software['ver'].'&cat='.$iscripts[$soft]['name'].'&start="+start+"&length="+length+"&callback=?", 
	function (data) {
		
		if (typeof(data.data)!="object" || typeof data.data == "undefined"){
			$("#display_theme").html("<center><span class=\'sai_newhead\'>'.$l['classes_con_failed'].'</span></center>");	
			$("#loading").hide();
			$("#display_theme").fadeIn(300);
			$("#nextBtn").css("display", "none");
			$("#prevBtn").css("display", "none");
		}
		$("#clear_theme").css("display", "none");
		$("#nextBtn").css("display", "block");
		$("#prevBtn").css("display", "block");
		
		var soft_themes = \'<div id="slider"><table border="0" width="100%" height="200" cellspacing="0" cellpadding="3"><tr>\';
		var new_li = 0;
		var new_tr = 0;
		$.each(data.data, function (i, item) {
			var you_own = "";
			if(item.name != undefined){
				var params = new Array();
				params[0] = "\'"+item.name+" - "+item.desc+"\'";
				params[1] = item.pid;
				params[2] = item.price;
				//alert(item.pid+" -- "+ owned_theme)

				if($.inArray(item.pid, owned_theme) !== -1){
					you_own = \'<span>'.$l['your_purchased'].'</span>\';
				}else{
					you_own = "";
				}
				
				
				soft_themes += \'<td align="center"><div class="sai_image_container" id="img_\'+new_li+\'" onmouseover="onthemeover(nav_\'+new_li+\');" onmouseout="onthemeout(nav_\'+new_li+\');" value="\'+item.pid+\'" theme_name="\'+item.softname+\'"><div class="sai_theme_header">\'+item.name+\'</div><img src="\'+data.img_url+item.pid+\'/\'+item.pid+\'_200.png" width="230" height="200" ><div class="sai_navigation" id="nav_\'+new_li+\'" style="display:none;"><span class="sai_demo"><a href="\'+item.demo_url+\'" target="_blank">Demo</a></span></div></div>\'+you_own+item.price+item.pid+\'<a href="javascript:void(0);" onclick="show_pay(\'+params+\');">'.$l['purchase'].'</a></td>\';
			}
			
			
			new_li += 1;
			new_tr += 1;
			if(new_tr == 4){
				soft_themes += \'</tr><tr>\';
				new_tr = 0;
			}
			
	    });// end of each loop

		soft_themes += \'</tr><tr><td><input type="hidden" name="theme_id" id="theme_id"><input type="hidden" name="theme_name" id="theme_name"></td></tr></table></div>\';
		
		$("#loading").hide();
		
		$("#display_theme").animate(0, "", function(){
			$("#display_theme").html(soft_themes);
			$(function(){
				$(".sai_image_container").click(function(){
					$(".sai_image_container").removeClass("sai_theme_selected");
					$(this).addClass("sai_theme_selected");
					$("#theme_id").val($(this).attr("value"));
					$("#theme_name").val($(this).attr("theme_name"));
					$("#clear_theme").css("display", "block");
				 })
			});
		}).delay(0).animate({opacity: 1}, 300);
		
		$("#prevBtn").val(start);
		start = parseInt(start) + length;
		$("#nextBtn").val(start);
		
		if($("#prevBtn").val() <= 0){
			$("#prevBtn").css("display", "none");
		}else{
			$("#prevBtn").css("display", "block");
		}
		
		if(start == (data.count)){
			$("#nextBtn").css("display", "none");
		}
		
		// If we get the last data
		if(data.is_last == 1){
			$("#nextBtn").css("display", "none");
			$("#nextBtn").hide();
		}
		
		$("#display_theme").fadeIn(300);
		
		
	}); // end of get json function
	
	// If we dont get the api key for this user we will generate one !
	if(api_key == 0){
		
		/* $.ajax({
			type: "POST",
			data: "generate_apikey=1",
			url: "'.$globals['index'].'act=my_themes&jsnohf=1",
			// Checking for error
			success: function(data){
				// At the moment nothing to do !
			}
		 });*/
	}
}//end of show list

function get_purchased(){
	
	$(".refresh_theme").hide();
	$("#sloading").show();
	var csrf_token = $("#csrf_token").val();	
	
	$.ajax({
		type: "POST",
		data: "get_owned_theme=1&ajax=1&csrf_token="+csrf_token,
		url: "'.$globals['index'].'act=my_themes&jsnohf=1",
		// Checking for error
		success: function(data){
			owned_theme = data.split(",");
			//alert(owned_theme);
			$("#sloading").hide();
			$(".refresh_theme").show();
			//show_list(0, length);
		}
	});
}

function theme_init(){
	
	//get_purchased();
	
	show_list(0, length);
	
	$("#prevBtn").click(function(){
		var tmp = parseInt($("#prevBtn").val());
		$("#nextBtn").val(tmp);
		tmp = tmp - deduct;
		$("#prevBtn").val(tmp);
		$("#display_theme").fadeOut(100);
		$("#loading").show();
		show_list($("#prevBtn").val(), length);
	});
	
	$("#nextBtn").click(function(){
		var tmp = parseInt($("#nextBtn").val());
		$("#prevBtn").val(tmp);
		tmp = tmp + deduct;
		$("#nextBtn").val(tmp);
		$("#display_theme").fadeOut(100);
		$("#loading").show();
		show_list($("#prevBtn").val(), length);
	});
	
	$(".search_theme").click(function(){
		$("#themesearch").bPopup();
		search();
	});
	$(".b-close").click(function(){
		$("#themesearchstring").val("");
	});
	
	$(".refresh_theme").click(function(){
		get_purchased();
	});
}

$(document).ready(function(){
	theme_init();
});

// ]]></script>';

if(!empty($edited)){
	
}else{

echo '<form accept-charset="'.$globals['charset'].'" name="editsettings" method="post" action="" class="form-horizontal">
<div class="bg">
	<div id="theme_toggle" class="sai_sub_head">'.$l['theme_settings'].'</div><hr>';
	error_handle($error, '100%');
	echo'
		<div class="row">
			<div class="col-sm-12">
				<div class="col-lg-4">
					<span class="sai_head">'.$l['user_apikey'].'</span><br />
				</div>
				<div class="col-sm-4">
					'.(empty($user['pfxapi_key']) ? $l['no_key'] : strtoupper($user['pfxapi_key'])).'
				</div>
				<div class="col-sm-4">
					<input type="hidden" name="get_owned_theme" value="1">
					<input type="submit" name="generate_apikey" id="generate_apikey" value="'.$l['fetch'].'" class="flat-butt pull-right" style="margin-top:-8px;"/>
				</div>
			</div>
		</div><br />
	</div>
	'.csrf_display().'
</form>';

if(!empty($globals['eu_themes_premium']) && !empty($globals['lictype']) && !empty($purchased)){
	
	echo '<br /><br /><div class="sai_divroundshad">
		<div id="theme_toggle" class="sai_heading_full">&nbsp;&nbsp;'.$l['owned_themes'].'</div>
			<table border="0" cellpadding="8" cellspacing="5" width="100%">
				<tr>
					<td>
						<table border="0" width="100%" cellspacing="0" cellpadding="3"><tr>';
						$new_li = 0;
						$new_tr = 0;
						
						foreach($purchased as $pk => $pv){
							
							echo '<td align="center">
								<div class="sai_image_container noti_Container" id="img_'.$new_li.'" onmouseover="onthemeover(navi_'.$new_li.');" onmouseout="onthemeout(navi_'.$new_li.');" value="'.$pv['pid'].'" theme_name="'.$pv['softname'].'"><div class="sai_theme_header">'.$pv['name'].'</div>'.(!empty($pv['buy_count']) ? '<div class="sai_noti_bubble" id="n1" tooltip="'.$l['go_cpanel'].'">'.$pv['buy_count'].'</div>' : '').'<img src="'.$globals['s2api_pfx'].$pv['img_url'].$pv['pid'].'/'.$pv['pid'].'_200.png" width="230" height="200" ><div class="sai_navigation" id="navi_'.$new_li.'" style="display:none;"><span class="sai_demo"><a href="'.$pv['demo_url'].'" target="_blank">'.$l['demo'].'</a></span></div></div></td>';
							
							$new_li += 1;
							$new_tr += 1;
							if($new_tr == 4){
								echo '</tr><tr>';
								$new_tr = 0;
							}	
						}
						echo '</tr></table>
						</td>
				</tr>
			</table>
		</div>
	</div>';
}

echo '<br /><br />
<table border="0" cellpadding="8" cellspacing="5" width="100%">
	<tr>
		<td>
			<br />
			<center><a id="browse_more" name="browse_more"  href="'.$globals['index'].'act=browse_themes" target="_blank"><p class="flat-butt">'.$l['browse_more'].'</p></a><br /><br /></center>
		</td>
	</tr>
</table>
<div id="themesearch" class="sai_popupc" style="display:none;">
	<div class="sai_themesearch_div sai_popuptitle" align="center">
		<center>
			<fieldset class="sai_inputs">
				<table border="0" cellpadding="3" cellspacing="0" width="100%">
					<tr>
						<td width="95%" align="center">
							<input type="text"  name="themesearchstring" id="themesearchstring"  class="sai_inputs" autofocus placeholder="Search Themes" autocomplete="off">
							<h4 id="results-text" style="display:none;">Showing results for: <b id="search-string"></b></h4>
							<ul id="results"></ul><br />
						</td>
						<td>
							<div id="search_subcat1" style="display:none;"></div>
						</td>
						<td align="right" valign="top">
							<a href="javascript:void(0);" class="sai_popupclose b-close">Close</a>
						</td>
					</tr>
				</table>
			</fieldset>
		</center>
	</div>
	<div id="searchsuggestions"></div>
</div>';

}

softfooter();

}

?>