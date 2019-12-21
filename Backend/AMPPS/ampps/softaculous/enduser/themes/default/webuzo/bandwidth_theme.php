<?php

//////////////////////////////////////////////////////////////
//===========================================================
// bandwidth_theme.php
//===========================================================
// SOFTACULOUS WEBUZO
// Version : 1.0
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Date:       8th Mar 2010
// Time:       23:00 hrs
// Site:       http://www.webuzo.com/ (SOFTACULOUS WEBUZO)
// ----------------------------------------------------------
// Please Read the Terms of use at http://www.webuzo.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Ltd.
//===========================================================
//////////////////////////////////////////////////////////////

if(!defined('SOFTACULOUS')){

	die('Hacking Attempt');

}

function bandwidth_theme(){

global $theme, $globals, $kernel, $user, $l, $bandwidth, $month, $band, $done, $error;	

	// For ajax bandwidth set
	if(optGET('ajaxband')){			
		if(!empty($error)){				
			echo '0'.current($error);
			return false;
		}
		if(!empty($done)){
			echo '1'.$l['save'];	
			 show_band();
			return true;			
		}
	}
	
	// For ajax bandwidth Reset
	if(optGET('ajaxreset')){			
		if(!empty($error)){				
			echo '0'.current($error);
			return false;
		}
		if(!empty($done)){
			echo '1'.$l['reset'];	
			 show_band();
			return true;			
		}
	}




softheader($l['<title>']);

echo '

<div class="bg"><br>
	<div class="row sai_main_head text-center"><img src="'.$theme['a_images'].'bandwidth.png" class="webu_head_img"/>&nbsp;'.$l['heading'].'</div><hr>

	<form accept-charset="'.$globals['charset'].'" action="" method="post" name="bandwidthedit" id="bandwidthedit" class="form-horizontal">
		<div class="row">
			<div class="col-sm-5">
				<label for="bandwidth_up_limit" class="sai_head control-label">'.$l['bandwidth_up_limit'].'</label><br>
				<span class="sai_exp">'.$l['bandwidth_up_limit_exp'].'</span>
			</div>
			<div class="col-sm-7">
				<input type="text"  id="bandwidth_up_limit" name="bandwidth_up_limit" class="form-control" value="'.POSTval('bandwidth_up_limit', '').'" />
			</div>
		</div>
		<br>
		
		<div class="row">
			<div class="col-sm-5">
				<label for="bandwidth_limit" class="sai_head control-label">'.$l['bandwidth_limit'].'</label><br />
				<span class="sai_exp">'.$l['bandwidth_limit_exp'].'</span>
			</div>
			<div class="col-sm-7">
				<input type="text" id="bandwidth_limit" name="bandwidth_limit" class="form-control" value="'.POSTval('bandwidth_limit', '').'" />
			</div>
		</div>
		<br/>
		<br/>
		<div class="row">
			<div class="col-sm-offset-5 col-sm-7">
				<input type="hidden" name="bandwidth_record" value="1" />
				<input type="submit" id="submitbandwidth" name="create_record" class="flat-butt" value="'.$l['submit_button'].'" /> &nbsp; 				
				<input type="button" id="resetbandwidth" name="resetbandwidth" class="flat-butt" value="'.$l['reset_button'].'" /> &nbsp;<img id="reset_bandwidth" src="'.$theme['images'].'progress.gif" style="display:none">
			</div>
		</div>
	</form>
	<div id="showband">';
		show_band();
echo '
	</div>
</div> <!-- DIV BG Closed -->

<script type="text/javascript" charset="utf-8"><!-- // --><![CDATA[	
	
	var message_box = new MboxObject();
	$(document).ready(function(){
		
		// For Setting record
		$("#submitbandwidth").click(function(){
			$("#reset_bandwidth").css("display", "");	
			var band_alert =$("#bandwidth_limit").val();			
			$.ajax({
				type: "POST",
				url: window.location+"&ajaxband=1",					
				data: $("#bandwidthedit").serialize(),
				
				// Checking for error
				success: function(data){
					$("#reset_bandwidth").css("display", "none");
					var result = data.substring(0,1);
					if(result == "1"){
						$_("bandwidth_up_limit").value="";
						$_("bandwidth_limit").value="";							
						var msg = data.substring(1,data.indexOf("<"));
						var output = data.substring(data.indexOf("<"));							
						message_box.show_message( "Done ",msg,2);														
						$("#showband").html(output);
						if(band_alert){
							$("#alert_limit").html(band_alert+" GB");
						}
						server_graph_data();																																				
					}
					if(result == "0"){
						var msg = data.substring(1);
						message_box.show_message( "Error",msg,1);
					}
				},
				error: function() {
					message_box.show_message("Error",\''.$l['connect_error'].'\',1);						
				}															
			});		
			return false;											
		});
		
		// For Setting record
		$("#resetbandwidth").click(function(){
			$("#reset_bandwidth").css("display", "");				
			$.ajax({
				type: "POST",
				url: window.location+"&ajaxreset=1&bandwidth_reset=1",
				// Checking for error
				success: function(data){
					$("#reset_bandwidth").css("display", "none");
					var result = data.substring(0,1);
					if(result == "1"){					
						var msg = data.substring(1,data.indexOf("<"));
						var output = data.substring(data.indexOf("<"));							
						message_box.show_message( "Done ",msg,2);														
						$("#showband").html(output);
						$("#alert_limit").html("'.$l['na'].'");
						server_graph_data();																																				
					}
					if(result == "0"){
						var msg = data.substring(1);
						message_box.show_message( "Error",msg,1);
					}
				},
				error: function() {
					message_box.show_message("Error",\''.$l['connect_error'].'\',1);						
				}															
			});		
			return false;											
		});
	});
// ]]></script>';
softfooter();
}

function show_band(){
	
global $theme, $globals, $kernel, $user, $l, $bandwidth, $month, $band;

echo '

	<div class="row" style="border: 1px solid #CCCCCC; margin: 5%;">
		<div class="col-sm-6" style="padding: 10px;"><br>
			<div class="col-sm-12 text-center title_si">'.$l['bandwidthinfo'].'</div>
			<br/><br/><br/>
			<div class="row text-center">
				<div class="row">
					<span class="label_si">'.$l['bandwidth_up_limit'].' : </span> <span class="val value_si">'.(($bandwidth['limit_gb'] == '999999' || empty($bandwidth['limit_gb']) ) ? $l['unlimited'] : $bandwidth['limit_gb'].' GB').'</span>
				</div><br/>

				<div class="row">
					<span class="label_si">'.$l['Bandwidth_utilised'].'</span> <span class="val value_si">'.$bandwidth['used_gb'].' GB</span>
				</div>
				<br/>
				<div class="row">
					<span class="label_si">'.$l['bandwidth_limit'].' : </span> <span class="val value_si">'.(!empty($globals['bandwidth_limit']) ? $globals['bandwidth_limit'].' GB ' : $l['na']).'</span>
				</div>
			</div>
		</div>
		
		<div class="col-sm-6" style="padding: 10px;">
			<br>
			<div class="col-sm-12 text-center title_si"><span>'.$l['graphheader'].'</span></div><br><br><br>
			<div class="row">
				<div id="server_bandwidth" class="server_graph" style="margin: auto;"></div><br>
				<div id="server_bandwidth_text" class="text-center value_si">&nbsp;</div>
			</div>
		</div>
	</div>
	
	<div class="row sai_head text-center">'.$month['mth_txt'].' '.$month['yr'].'</div>
	<div class="row text-center">
		<div class="col-sm-2 col-xs-2"></div>
		<div class="col-sm-8 col-xs-8" style="">
			<div style="width: 200px; height: 200px;" id="bwband_holder"></div>
		</div>
		<div class="col-sm-2 col-xs-2"></div>
	</div><br>
	<div class="row">
		<div class="col-xs-6 text-right">
			<button id="prevMonth" onclick="getPrevMonth()" class="flat-butt">Prev Month</button>
		</div>
		<div class="col-xs-6 text-left">
			<button type="button" class="flat-butt" onclick="getNextMonth()" '.($month["next"] > date("Ym")?"disabled":"").'>Next Month</button>
		</div>
	</div>
	<br/>
	
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="'.$theme['url'].'/js/excanvas.min.js"></script><![endif]-->
<script language="javascript" src="'.$theme['url'].'/webuzo/js/jquery.flot.min.js" type="text/javascript"></script>
<script language="javascript" src="'.$theme['url'].'/webuzo/js/jquery.flot.pie.min.js" type="text/javascript"></script>
<script language="javascript" src="'.$theme['url'].'/webuzo/js/jquery.flot.resize.min.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8"><!-- // --><![CDATA[	

function server_graph_data(){	
var server_bandwidth = [
	{ label: "Used",  data: '.(empty($bandwidth['used_gb']) ? 0.01 : $bandwidth['used_gb']).'},
	{ label: "Free",  data: '.(empty($bandwidth['free_gb']) ? $bandwidth['used_gb']*100 : $bandwidth['free_gb']).'}
];

// Fill in the Text
$_("server_bandwidth_text").innerHTML = server_bandwidth[0].data+" GB";
	
// bandwidth
server_graph("server_bandwidth", server_bandwidth);
}

// Draw a Server Resource Graph
function server_graph(id, data){		

	$.plot($("#"+id), data, 
	{
		series: {
			pie: { 
				innerRadius: 0.7,
				radius: 1,
				show: true,
				label: {
					show: true,
					radius: 0,
					formatter: function(label, series){
						if(label != "Used") return "";
						return \'<div style="font-size:13px;"><b>\'+Math.round(series.percent)+\'%</b></div><div style="font-size:9px;">\'+label+\'</div>\';	
					}
				}
			}
		},
		legend: {
			show: false
		}
	});
}

$(document).ready(function(){
	
	addjustGraph()
	
	function makedata(data){
	
		var fdata = [];
		i = 0;
		for (x in data){
			fdata.push([i, (data[x])]);
			i++;
		}
	
		return fdata;
		
	}

	var d1 = makedata([0, '.implode(', ', $bandwidth['in']).']);
	var d2 = makedata([0, '.implode(', ', $bandwidth['out']).']);
	
	var bandwidth_graph = [
		{ label: "In",  data: d1},
		{ label: "Out",  data: d2}
	];
	
	$.plot($("#bwband_holder"),  bandwidth_graph, {
		series: {
			stack: true,
            points: { show: true },
			lines: { show: true, fill: true, steps: false }
		},
		yaxis:{
			tickFormatter: function (v) {
				if(v <= 1024)
					return Math.round(v) + " M";
				if(v > 1024 && v < (1024*1024))
					return (v /1024).toFixed(1) + " G";
				if(v > (1024*1024))
					return (v / (1024*1024)).toFixed(2) + " T"
			}
		},
		legend: {
			show: true
		},
        grid: { hoverable: true}
	});
	
	function showTooltip(x, y, contents) {
		$(\'<div id="tooltip">\' + contents + \'</div>\').css( {
			position: "absolute",
			display: "none",
			top: y ,
			left: x + 20,
			border: "1px solid #CCCCCC",
			padding: "2px",
			"background-color": "#EFEFEF",
			"z-index" : 10000,
			opacity: 0.80
		}).appendTo("body").fadeIn(200);
	}

    var previousPoint = null;
    $("#bwband_holder").bind("plothover", function (event, pos, item) {
        $("#x").text(pos.x.toFixed(2));
        $("#y").text(pos.y.toFixed(2));

        if (item) {
			
			if (previousPoint != item.dataIndex) {
				previousPoint = item.dataIndex;
				$("#tooltip").remove();
				var x = item.datapoint[0].toFixed(2),
					y = item.datapoint[1].toFixed(2);
					
				showTooltip(item.pageX, item.pageY,
							"Total : " + parseInt(y) + " MB <br>Day : " + parseInt(x));
			}
		} else {
			$("#tooltip").remove();
			previousPoint = null;
		}
    });
	
	//This function adjust Graph width and height
	function addjustGraph(){
		var w=$(window).width() * 0.50;
		var h=$(window).height() * 0.50;
		$("#bwband_holder").css("width", w);
		$("#bwband_holder").css("height", h);
		
	}
	$(window).resize(function(){
		addjustGraph();
	});
	
});

	addonload("server_graph_data();");
	
	function getPrevMonth(){
	 window.location.href = "'.$globals['ind'].'act=bandwidth&show='.$month['prev'].'";
	}
	function getNextMonth(){
	 window.location.href = "'.$globals['ind'].'act=bandwidth&show='.$month['next'].'";
	}
	
// ]]></script>';
}

?>