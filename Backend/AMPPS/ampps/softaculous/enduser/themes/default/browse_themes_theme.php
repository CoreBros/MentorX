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


function browse_themes_theme(){

global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $edit, $settings;
global $insid, $edited, $software, $soft, $scripts, $purchased, $owned_themes;

softheader($l['<title>']);

// If generate order call
if(optGET('generate_order')){
	$order_id = get_softaculous_file($globals['apipfx'].'fetch.php?apikey='.$user['pfxapi_key'].'&email='.$user['email'].'&pid='.optGET('theme_id').'&giveinfo=generate_order&index='.rawurlencode($globals['index']));
	echo json_encode($order_id);
	return true;
	
}

echo '
<script id="paypal_js"></script>
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
'.(empty($globals['eu_themes_premium']) ? 'var premium = 0;' : 'var premium = "'.$globals['eu_themes_premium'].'";').'

function show_pay(){
	
	//alert(arguments[0] +" -- "+arguments[1]+" -- "+arguments[2]+" -- "+arguments[3]);
	//alert($("#paypal_js").attr("src"))
	
	$("#display_theme").fadeOut(100);
	$("#loading").show();
	
	var csrf_token = $("#csrf_token").val(); 
				
	// We will have to create an order now
	$.ajax({
		type: "POST",
		data: "csrf_token="+csrf_token,
		url: window.location+"&generate_order=1&ajax=1&jsnohf=1&theme_id="+arguments[1],
		success: function(data){
			//alert(data)
			var order_id = JSON.parse(data);
			$("#custom").val(order_id);
			$("#loading").hide();
			$("#display_theme").fadeIn(100);
			$("#pfxpay").bPopup();			
		}	
	});
	
	$.getScript("https://www.paypalobjects.com/js/external/dg.js", function( data, textStatus, jqxhr ) {
		//alert(data +" -- "+textStatus+" -- "+jqxhr)
		
		if(textStatus == "success"){
			dg = new PAYPAL.apps.DGFlow({
				// HTML ID of form submit buttons that call setEC
				trigger:"submit_pay",
				expType:"instant"
			});
		}
	});
	
	// Now set the variable for sending the data
	$("#item_name").val(arguments[0]);
	$("#item_number").val(arguments[1]);
	$("#amount").val(arguments[2]);
	$("#item_price").html(arguments[2]);
	
	$("#submit_pay").click(function(){
		
		/*var timer = setInterval(function() {   
			if(dg.isOpen() !== true) {  
				clearInterval(timer);  
				alert("closed");
			}  
		}, 30000);*/
		$("#pfxpay").bPopup().close();
	});
	
	$(".b-close").click(function(){
		
	});
}

function show_selected_theme(){
	
	var th_name = $("#theme_name").val();
	var th_id = $("#theme_id").val();
	
	//alert("'.$globals['s2api_pfx'].'theme_search.php?in=json&cversion='.$software['ver'].'&cat='.$iscripts[$soft]['name'].'&q="+th_name+"&start=0&length=1&premium="+premium+"&callback=?")
	
	$.getJSON("'.$globals['s2api_pfx'].'theme_search.php?in=json&cversion='.$software['ver'].'&cat='.$iscripts[$soft]['name'].'&q="+th_name+"&start=0&length=1&premium="+premium+"&callback=?",
		function (data) {
				
			// If there is no result found
			if(data.data == "NODATA"){
				data.data = new Array();
			}
			
			var soft_themes = \'<div id="slider"><table border="0" width="100%" height="200" cellspacing="0" cellpadding="3"><tr>\';
			var new_li = 0;
			$.each(data.data, function (i, item) {
				
				if(item.name != undefined){
					soft_themes += \'<td align="center"><div class="sai_image_container" id="img_\'+new_li+\'" onmouseover="onthemeover(nav_\'+new_li+\');" onmouseout="onthemeout(nav_\'+new_li+\');" value="\'+item.pid+\'" theme_name="\'+item.softname+\'"><div class="sai_theme_header">\'+item.name+\'</div><img src="\'+data.img_url+item.pid+\'/\'+item.pid+\'_200.png" width="230" height="200" ><div class="sai_navigation" id="nav_\'+new_li+\'" style="display:none;"><span class="sai_demo"><a href="\'+item.demo_url+\'" target="_blank">'.addslashes($l['demo']).'</a></span></div></div></td>\';
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

/*function clear_theme(){
	$(".sai_image_container").removeClass("sai_theme_selected");
	$("#theme_id").val("");
	$("#theme_name").val("");
	$("#clear_theme").hide();
	show_list(0, length);
}*/

function onthemeover(id_no){
	$(id_no).show();
}

function onthemeout(id_no){
	$(id_no).hide();
}

var use_this_theme_lang = "'.$l['use_this_theme'].'";
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
	
	$.getJSON("'.$globals['s2api_pfx'].'theme_search.php?in=json&cversion='.$software['ver'].'&cat='.$iscripts[$soft]['name'].'&start="+startpt+"&length=20&q="+query_value+"&top="+top+"&premium="+premium+"&callback=?",
	function (data) {
				
		// If there is no result found
		if(data.data == "NODATA"){
			data.data = new Array();
		}
		
		var search_themes = \'<div id="slider"><table border="0" width="100%" height="200" cellspacing="5" cellpadding="3">\';
		var new_li = 0;
		$.each(data.data, function (i, item) {
			
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
				
				if(item.price > 0){
					var price_lable = \'<td align="center" width="200" onclick="show_pay(\'+params+\');"><table border="0" width="100%" cellpadding="0" cellspacing="0"><tr><td width="30%"><div class="sai_searchbox_button"><span style="margin-right:20px">\'+you_own+\'</span><a href="javascript:void(0);">'.$l['purchase'].'&nbsp;&nbsp;$\'+item.price+\'</a></div></td></tr></table></td>\';
				}else{
					var price_lable = \'<td align="center" width="200"><table border="0" width="100%"><tr><td align="center"><div class="sai_searchbox_button"><a href="javascript:void(0);">'.(!empty($globals['eu_themes_premium']) ? addslashes($l['free']) : addslashes($l['select'])).'</a></div></td></tr></table></td>\';
				}
				
				 search_themes += \'<tr class="sai_tr_color"><td align="center"><table border="0" width="100%" cellspacing="0" cellpadding="3"><tr><td width="180"><div class="sai_image_container" id="simg_\'+new_li+\'" value="\'+item.pid+\'" theme_name="\'+item.softname+\'" style="width:160px;height:175px;"><img src="\'+data.img_url+item.pid+\'/\'+item.pid+\'_200.png" width="150" height="150" ><div class="sai_navigation" id="snav_\'+new_li+\'" style="display:none;"><span class="sai_demo"><a href="\'+item.demo_url+\'" target="_blank">'.addslashes($l['demo']).'</a></span></div></div></td><td><table border="0" cellpadding="5" cellspacing="0" width="100%"><tr><td colspan="3"><b>\'+item.name+\'</b></td></tr><tr><td colspan="3" class="sai_search_description">\'+item.desc+\'</td></tr><tr><td colspan="3" class="sai_search_description">\'+item.overview+\'</td></tr><tr><td width="200"><div class="sai_searchbox_button"><a href="\'+item.demo_url+\'" target="_blank">'.addslashes($l['demo']).'</a></div></td>\'+price_lable+\'</tr></table></td><td></td></tr><br /></table></td></tr>\'; 
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
							//show_selected_theme();
							//$("#clear_theme").css("display", "block");
						}else{
							//$(this).addClass("sai_theme_selected");
							$("#theme_id").val($(this).attr("value"));
							$("#theme_name").val($(this).attr("theme_name"));
						}						
					 })
				});
		}).delay(0).animate({opacity: 1}, 300);
		
	}); // End of getJSON
}

var search_timer;

$(document).on("keyup", "#themesearchstring",  function(e) {
	
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
	//alert("'.$globals['s2api_pfx'].'category.php?in=json&cversion='.$software['ver'].'&cat='.$iscripts[$soft]['name'].'&start="+start+"&length="+length+"&premium="+premium+"&callback=?");
    $.getJSON("'.$globals['s2api_pfx'].'category.php?in=json&cversion='.$software['ver'].'&cat='.$iscripts[$soft]['name'].'&start="+start+"&length="+length+"&premium="+premium+"&callback=?", 
	function (data) {
		
		if (typeof(data.data)!="object" || typeof data.data == "undefined"){
			$("#display_theme").html("<center><span class=\'sai_newhead\'>'.$l['classes_con_failed'].'</span></center>");	
			$("#loading").hide();
			$("#display_theme").fadeIn(300);
			$("#nextBtn").css("display", "none");
			$("#prevBtn").css("display", "none");
		}
		//$("#clear_theme").css("display", "none");
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
					you_own = \'<span>'.addslashes($l['your_purchased']).'</span>\';
				}else{
					you_own = "";
				}
				
				if(item.price > 0){
					var price_lable = \'<div class="sai_purchased blue" onclick="show_pay(\'+params+\');"><table border="0" width="100%"><tr><td width="30%">\'+you_own+\'</td><td width="60%"><a href="javascript:void(0);">'.addslashes($l['purchase']).'&nbsp;&nbsp;$\'+item.price+\'</a></td></tr></table></div>\';
				}else{
					var price_lable = \'<div class="sai_purchased blue"><table border="0" width="100%"><tr><td align="center"><a href="javascript:void(0);">'.addslashes($l['free']).'</a></td></tr></table></div>\';
				}
				
				soft_themes += \'<td align="center"><div class="sai_image_container" id="img_\'+new_li+\'" onmouseover="onthemeover(nav_\'+new_li+\');" onmouseout="onthemeout(nav_\'+new_li+\');" value="\'+item.pid+\'" theme_name="\'+item.softname+\'"><div class="sai_theme_header">\'+item.name+\'</div><img src="\'+data.img_url+item.pid+\'/\'+item.pid+\'_200.png" width="230" height="200" ><div class="sai_navigation" id="nav_\'+new_li+\'" style="display:none;"><span class="sai_demo"><a href="\'+item.demo_url+\'" target="_blank">'.addslashes($l['demo']).'</a></span></div></div>\'+price_lable+\'<br /></td>\';
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
			/*$(function(){
				$(".sai_image_container").click(function(){
					//$(".sai_image_container").removeClass("sai_theme_selected");
					//$(this).addClass("sai_theme_selected");
					$("#theme_id").val($(this).attr("value"));
					$("#theme_name").val($(this).attr("theme_name"));
					//$("#clear_theme").css("display", "block");
				 })
			});*/
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
		data: "get_owned_theme=1&csrf_token="+csrf_token,
		url: "'.$globals['index'].'act=my_themes&jsnohf=1",
		// Checking for error
		success: function(data){
			
			owned_theme = eval(data.substring(0, data.indexOf("<")));
			
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
	
	$("#search_theme").click(function(){
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

echo '<div class="modal fade" id="pfxpay" role="dialog">
	<div class="modal-dialog modal-sm">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">'.$l['payment_heading'].'</h4>
			</div>
			<div class="modal-body" align="middle">
				<form action="'.$globals['paypal_url'].'" method="post" name="pay" id="pay">
					'.$l['payment_redirect'].'$<span id="item_price"></span><br /><br />
					<input type="hidden" name="cmd" value="_xclick">
					<input type="hidden" name="business" id="business" value="'.$globals['paypal_business'].'">
					<input type="hidden" name="return" id="return" value="'.$globals['paypal_return'].'">
					<input type="hidden" name="cancel_return" id="cancel_return" value="'.$globals['paypal_return'].'">
					<input type="hidden" name="notify_url" id="notify_url" value="'.$globals['paypal_return'].'">
					<input type="hidden" name="item_name" id="item_name" value="">
					<input type="hidden" name="item_number" id="item_number" value="">
					<input type="hidden" name="amount" id="amount" value="">
					<input type="hidden" name="custom" id="custom" value="">
					<input type="hidden" name="paymentaction" id="paymentaction" value="sale">
					<!--<input type="submit" class="tiny radius button" value="Buy now">-->
					<button type="submit" name="submit" style="border: 0; background: transparent; cursor:pointer" id="submit_pay">
						<img src="https://www.paypal.com/en_US/i/bnr/horizontal_solution_PPeCheck.gif" border="0" alt="Accepted Cards" style="width:100%;">
					</button>
				</form>
			</div>
				<div class="modal-footer">
				  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
		</div>	
	</div>
</div>
<div id="themesearch" class="sai_popupc" style="display:none;">
	<div class="sai_themesearch_div sai_popuptitle" align="center">
			<fieldset class="sai_inputs">
				<div class="row">
					<div class="col-lg-12">
						<input type="text"  name="themesearchstring" class="col-lg-10 col-md-10 col-sm-10 col-xs-10" id="themesearchstring"  class="sai_inputs" autofocus placeholder="'.$l['search_theme'].'" autocomplete="off">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:right;">
							<a href="javascript:void(0);" class="sai_popupclose b-close">Close</a>
						</div>
					</div>
				</div>
				<div class="row">
					<h4 id="results-text" style="display:none;">'.$l['result_for'].'<b id="search-string"></b></h4>
					<ul id="results"></ul><br />
				</div>
			</fieldset>
	</div>
	<div id="searchsuggestions"></div>
</div>
<div class="bg">
<div id="theme_toggle" onclick="toggle_advoptions(\'theme\');" class="sai_main_head" align="center">'.$l['browse_theme'].'</div><hr>';
error_handle($error, '100%');
echo'
<div id="theme" style="display:block;">
	<div id="theme_div" style="display:block;"><br />
		<table border="0" cellpadding="2" cellspacing="0" style="width:100%;table-layout: fixed;">
			<tr>
				<td>&nbsp;</td>
				<td align="center" width="150">
					<div id="search_theme" class="flat-butt">'.$l['search'].'</div><br /><br />
				</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td colspan="3"  height="270">
					<div id="loading" style="display:block;z-index:99;">
						<center><img src="'.$theme['images'].'loading.gif" alt="Loading..." /></center>
					</div>
					<div id="display_theme" style="height:auto"></div>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<table border="0" cellpadding="2" cellspacing="0" style="width:100%;table-layout: fixed;">
						<tr>
							<td width="5%" align="center">
								<span id="prevBtn"><a href="javascript:void(0);"></a></span>
							</td>
							<td width="90%">&nbsp;&nbsp;</td>
							<td align="center" width="5%">
								<span id="nextBtn"><a href="javascript:void(0);"></a></span>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</div>
</div>
</div>
<br /><br />';

}

softfooter();

}

?>