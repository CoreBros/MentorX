<?php

//////////////////////////////////////////////////////////////
//===========================================================
// userindex_theme.php
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

function webuzoindex_theme(){

	global $theme, $globals, $softpanel, $user, $l, $updates_available, $iscripts, $scripts ,$info, $cscripts, $usage, $bandwidth, $band;
	global $apps, $iapps, $uidata, $user_preference, $file_data;
	
	$panel_order_array = json_encode($user_preference['panel_order']);
	$collapsed_panels = $user_preference['collapsed_panels'];
		
	// $iapps is loaded in $softpanel->__custruct(). Might as well use that to save a call !
	if(empty($iapps)){
		$ins_apps = $softpanel->loadinsapps();
	}else{
		$ins_apps = $iapps;
	}
	
	$bandwidth = $usage['bandwidth'];
	
	$def_mysql = $softpanel->getConf('WU_DEFAULT_MYSQL');
	$mysql = (!empty($def_mysql) ? $softpanel->get_app_record($def_mysql) : 16);
	
	$def_web_server = $softpanel->getConf('WU_DEFAULT_SERVER');
	$web_server = (!empty($def_web_server) ? $softpanel->get_app_record($def_web_server) : 3);
	$onlyapache = $uidata['current_apache_id'];	
	$onlyapache = (!empty($onlyapache) ? $onlyapache : 3);
	$disable_sysapps = $softpanel->is_sysapps_disable();
	
	/// FOR APPS UPDATE LIST
	$installed_apps = $softpanel->loadinsapps();
	$apps_updates_available = 0; 

	if(empty($disable_sysapps)){
		foreach($installed_apps as $k => $v){
			if(!empty($v['aid'])){
				if($softpanel->is_app_upgradable($v['aid'], $v['mod']) && (($apps[$v['aid']]['ins'] == 1 && empty($globals['lictype'])) || !empty($globals['lictype']))){
					$apps_updates_available++;
				}
			}
		}
	}
	
	echo'<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="'.$theme['url'].'/js/excanvas.min.js"></script><![endif]-->
	
<script language="javascript" src="'.$theme['url'].'/webuzo/js/jquery.flot.min.js" type="text/javascript"></script>
<script language="javascript" src="'.$theme['url'].'/webuzo/js/jquery.flot.pie.min.js" type="text/javascript"></script>
<script language="javascript" src="'.$theme['url'].'/webuzo/js/jquery.flot.time.min.js" type="text/javascript"></script>
<script language="javascript" src="'.$theme['url'].'/webuzo/js/jquery.flot.tooltip.min.js" type="text/javascript"></script>
<script type="text/javascript" src="'.$theme['url'].'/webuzo/js/jquery.flot.stack.min.js"></script>
<script type="text/javascript" src="'.$theme['url'].'/webuzo/js/jquery.flot.symbol.min.js"></script>
<script type="text/javascript" src="'.$theme['url'].'/webuzo/js/jquery.flot.axislabels.js"></script>
<script type="text/javascript" src="'.$theme['url'].'/webuzo/js/jquery-ui.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://images.softaculous.com/webuzo/sprites/32.css" />
<style type="text/css">
    /* show the move cursor as the user moves the mouse over the panel header.*/
    #draggablePanelList .panel-heading {
        cursor: move;
    }
	
	.highlight_placeholder {
		border: 2px dashed;
		height: 11em;
		background-color: #D3D3D3;
	}
</style>

<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
		
function remove_unnecessary_tables_webuzo(){
	var str="";
	var no_script=0;
	var panel_names = '.json_encode($file_data['glyphicon']).';
	$.each(panel_names, function(key, value){
		var hide_chk=0;
		var pname = key.substring(6);
		var items=$("#main_table_"+pname+" .panel-body a").children();
		var itemsLen=items.length;
		items.each(function(i, item){
			if(trim($(item).text()) == ""){
				itemsLen -= 1;
			}
		});
			
		items.each(function(i, item){
			if(typeof $(item).attr("value") != "undefined"){
				var disp = $(item).css("display");
				var disp_val = $(item).attr("value").toString();
				str=disp+" === "+disp_val;
				str+="\n";
				if(disp == "none"){
					hide_chk += 1;						
				}
			}
		});
		
		if(hide_chk == itemsLen){
			$("#main_div_"+pname).hide();			
			no_script += 1;
		}else{
			$("#main_div_"+pname).show();
		}
	});

	if(no_script == 12){
		$("#show_none").show();		
	}else{
		$("#show_none").hide();
	}
};
	
$(document).ready(function() {
	
	$("#inputs_searchs").bind("keyup",function(){
			
		var selfVal = $(this).val().toLowerCase();
							
		var compareDivs = $("div"); 		
			
		compareDivs.each(function(i, item){
			
			var id_tmp = item.id.toString();
			//console.log(">>"+id_tmp);
			var search = id_tmp.substring(0,12);	 
						
			if(trim(search) == "webuzo_icons" && typeof $("#"+item.id).attr("value") != "undefined") {
					
				var divVal = $("#"+item.id).attr("value").toString().toLowerCase();								
					 
				if (divVal.indexOf(selfVal) < 0){
						
					if(selfVal == "") return;
						
					$("#"+item.id).hide();
						
				}else{
											
					$("#"+item.id).show();
				}			
			}
							
		});
		remove_unnecessary_tables_webuzo();
	});
});
		
function getusage(){
	
	$.getJSON("'.$globals['index'].'api=json&usage_only=1", function(data, textStatus, jqXHR) {

		server_graph_data(data["usage"]);
		
	});
	
};

function puzo(){
    $.ajax({
        url: "",
        type: "POST",
        data: {"promo":"no_pinguzo"},
    });
}
		
function startusage(){
	ajaxtimer = setInterval("getusage()", updateInterval);
};
		
function server_graph_data(data){		
	
	var data = data || false;
	
	var server_cpu = [
		{ label: "Used",  data: '.$usage['cpu']['percent'].'},
		{ label: "Free",  data: '.$usage['cpu']['percent_free'].'}
	];
			
	var server_ram = [
		{ label: "Used",  data: '.$usage['ram']['used'].'},
		{ label: "Free",  data: '.$usage['ram']['free'].'}
	];
			
	var server_disk = [
		{ label: "Used",  data: '.$usage['disk']['/']['used_gb'].'},
		{ label: "Free",  data: '.$usage['disk']['/']['free_gb'].'}
	];
			
	var server_bandwidth = [
		{ label: "Used",  data: '.(empty($usage['bandwidth']['used_gb']) ? 0.01 : $usage['bandwidth']['used_gb']).'},
		{ label: "Free",  data: '.(empty($usage['bandwidth']['free_gb']) ? $usage['bandwidth']['used_gb']*100 : $usage['bandwidth']['free_gb']).'}
	];
	
	var disk_percent = '.$usage['disk']['/']['percent'].';
	
	if(data){

		server_cpu = [
			{ label: "Used",  data: data["cpu"]["percent"]},
			{ label: "Free",  data: data["cpu"]["percent_free"]}
		];
				
		server_ram = [
			{ label: "Used",  data: data["ram"]["used"]},
			{ label: "Free",  data: data["ram"]["free"]}
		];
				
		server_disk = [
			{ label: "Used",  data: data["disk"]["/"]["used_gb"]},
			{ label: "Free",  data: data["disk"]["/"]["free_gb"]}
		];
				
		server_bandwidth = [
			{ label: "Used",  data: (data["bandwidth"]["used_gb"] == 0 ? 0.01 : data["bandwidth"]["used_gb"])},
			{ label: "Free",  data: (data["bandwidth"]["free_gb"] == 0 ? data["bandwidth"]["used_gb"] * 100 : data["bandwidth"]["free_gb"])}
		];
		
		 disk_percent = data["disk"]["/"]["percent"];
	
	}
			
	// Fill in the Text
	$_("server_disk_text").innerHTML = server_disk[0].data+" GB / "+Math.round((server_disk[0].data+server_disk[1].data)*100)/100+" GB";
	$("#server_disk").css("width", disk_percent+"%");
			
	// RAM
	server_graph("server_ram", server_ram, "MB");
			
	// CPU
	server_graph("server_cpu", server_cpu, "%");
				
	// Bandwidth
	server_graph("server_bandwidth", server_bandwidth, "");
	
	// Update CPU history
	try{
		
		cpudata.shift();
					
		cpudata.push(parseFloat(server_cpu[0].data));
		
		cpu_dataset = [
			{ label: "", data: cpu_makedata(cpudata), color: "#3498DB" }
		];
		
		$.plot($("#cpu_hist"), cpu_dataset, cpu_options);
	
	}catch(e){ }
};	
		
		
// Draw a Server Resource Graph
function server_graph(id, data, tooltip_suffix){		
	
	tooltip_suffix = tooltip_suffix || "";
	
	$.plot($("#"+id), data, 
	{
		series: {
			pie: { 
				innerRadius: 0.85,
				radius: 1,
				show: true,
				label: {
					show: true,
					radius: 0,
					formatter: function(label, series){
						if(label != "Used") return "";
						return \'<div style="font-size:13px;">\'+Math.round(series.percent)+\'%</div><div style="font-size:10px; color:#333;">\'+label+\'</div>\';	
					}
				}
			}
		},
		grid: {
			hoverable: true
		},
		tooltip: {
			show: true,
			content: "%p.0% %s"+(tooltip_suffix == "" ? "" : "<br /> %n "+tooltip_suffix), // show percentages, rounding to 2 decimal places
			shifts: {
				x: 20,
				y: 0
			}
		},
		legend: {
			show: false
		}
	});
			
};

// For CPU Live Graph
function cpu_makedata(data){
	
	var now = new Date().getTime();
	
	var fdata = [];
	i = 0;
	for (x in data){
		fdata.push([now += 1000 , data[x]]);
		i++;
	}
	return fdata;
}

$(document).ready(function() {

	/*------------For RealTime CPU Graph --------------*/

	cpu_options = {
		series: {
			lines: {
				show: true,
				lineWidth: 0.1,
				fill: true
			}
		},
		xaxis: {
			show:true,
			color:"white",
			mode: "time",
			tickSize: [5, "second"],
			tickFormatter: function (v, axis) {
				var date = new Date(v);
				 
				if (date.getSeconds() % 5 == 0) {
					var hours = date.getHours() < 10 ? "0" + date.getHours() : date.getHours();
					var minutes = date.getMinutes() < 10 ? "0" + date.getMinutes() : date.getMinutes();
					var seconds = date.getSeconds() < 10 ? "0" + date.getSeconds() : date.getSeconds();
				 
					return hours + ":" + minutes + ":" + seconds;
				} else {
					return "";
				}
			},
			axisLabel: " ",
			axisLabelUseCanvas: true,
			axisLabelFontSizePixels: 12,					
			axisLabelFontFamily: \'Verdana, Arial\',
			axisLabelPadding: 10
		},
		yaxis: {
			show:false,
		},
		grid: {
			borderWidth: 0,
			borderColor: \'#fff\',
			hoverable: true,
		},
	};
		
	totalPoints = 30;
	cpudata = [];
	finalcpudata = [];
	updateInterval = 5000;
	
	for (var i = 0; i < totalPoints; ++i) {
		cpudata.push(0.1);
	}

	cpu_dataset = [
		{ label: "", data: cpu_makedata(cpudata), color: "#3498DB" }
	];
	
	$.plot($("#cpu_hist"), cpu_dataset, cpu_options);
	
	/*---------- Start yearly graph (Month wise)------------*/
	var d3 = [];
	var d4 = [];	

	function adddata(data)	{
		var tmp = 0;
		for(x in data){
			tmp += data[x];
		}
		return tmp;
	}';

	$currentYear = date("Y");
	for($mon=1;$mon<=12;$mon++){
		
		$monthly_bandwidth = $uidata['yearly_bandwidth'][$mon];
				echo 'd3.push(['.($mon-1).', adddata([0, '.implode(', ', $monthly_bandwidth['in']).'])]);	
					d4.push(['.($mon-1).', adddata([0, '.implode(', ', $monthly_bandwidth['out']).'])]);';
					
	}

	echo 'var tick_labels = [
		[0, "Jan"], [1, "Feb"], [2, "Mar"], [3, "Apr"],
		[4, "May"], [5, "Jun"], [6, "Jul"], [7, "Aug"],
		[8, "Sep"], [9, "Oct"], [10, "Nov"], [11, "Dec"]
	];
			
	/* Monthly graph options */	
	var monthly_options = {
		series:{
			stack: true,
			bars: {
				show: true,
				fill: true,
				barWidth: 0.6,
				lineWidth: 0.6
			},
		},
		legend: {
				show: true,
				noColumns: 2,
				container: $("#bw_monthly_chartLegend")
		},
		xaxis:{
			color: "white",
			axisLabel: " ",
			axisLabelUseCanvas: true,
			axisLabelFontSizePixels: 15,
			axisLabelFontFamily: \'Verdana, Arial\',
			ticks: tick_labels,
		},
		yaxis:{
			min:0,
			color: "white",
			axisLabelUseCanvas: true,
			axisLabelFontSizePixels: 15,
			axisLabelFontFamily: \'Verdana, Arial\',
			tickFormatter: function (v) {
				if(v <= 1024)
					return Math.round(v) + " M";
				if(v > 1024 && v < (1024*1024))
					return (v /1024).toFixed(1) + " G";
				if(v > (1024*1024))
					return (v / (1024*1024)).toFixed(2) + " T"
			}
		},
		grid:{
			borderWidth: 0,
			borderColor: "#fff",
			hoverable: true,
		},
		tooltip: {
			show: true,
			content: function(label, x, y, flotItem){
					return "Month: "+ (Number(x+1)) + ", Bandwidth:" +(Math.round(y))+" MB";
				}
		}
	};
			
	var monthly_dataset = [
		{ label: "&nbsp;Download &nbsp;", data: d3, color: "#0077FF" },
		{ label: "&nbsp;Upload", data: d4, color: "#7D0096" }
	];
	
	$.plot($("#bw_monthly_body"), monthly_dataset, monthly_options);

	/*-----------------For Line Graph of Bandwidth----------------*/
			
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
		{ label: "&nbsp;In &nbsp;",  data: d1},
		{ label: "&nbsp;Out",  data: d2}
	];
			
	$.plot($("#bwband_holder"),  bandwidth_graph, {
		series: {
			points: { show: false },
			lines: { show: true, fill: true, steps: false, lineWidth: 0.5 }
		},
		legend: {
				show: true,
				noColumns: 2,
				container: $("#bw_chartLegend")
		},
		xaxis:{
			color:\'white\',
			axisLabelUseCanvas: true,
			axisLabelFontSizePixels: 15,
			axisLabelFontFamily: \'Verdana, Arial\',				
		},
		yaxis:{
			min:0,
			color:\'white\',
			axisLabelFontSizePixels: 15,
			axisLabelFontFamily: \'Verdana, Arial\',
			tickFormatter: function (v) {
				if(v <= 1024)
					return Math.round(v) + " M";
				if(v > 1024 && v < (1024*1024))
					return (v /1024).toFixed(1) + " G";
				if(v > (1024*1024))
					return (v / (1024*1024)).toFixed(2) + " T"
			}
		},
		grid: {
			borderWidth: 0,
			borderColor: \'#fff\',
			hoverable: true,
		}
	});
			
	function showTooltip(x, y, contents) {
		$(\'<div id="tooltip">\' + contents + \'</div>\').css( {
			position: "absolute",
			display: "none",
			top: y + 20,
			left: x - 20,
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
	
	$("#cpu_hist").bind("plothover", function (event, pos, item) {
		$("#x").text(pos.x.toFixed(2));
		$("#y").text(pos.y.toFixed(2));

		if(item){
				
			if (previousPoint != item.dataIndex) {
				previousPoint = item.dataIndex;
				$("#tooltip").remove();
				var x = item.datapoint[0].toFixed(2);
				var y = item.datapoint[1].toFixed(2);
				var time = "";
				
				showTooltip(item.pageX, item.pageY, parseFloat(y) + " %" + time);
				
			}
		}else{
			$("#tooltip").remove();
			previousPoint = null;
		}
	});
	
	server_graph_data(); 
	startusage();
		
});

ids = ["'.implode('", "', array_keys($ins_apps)).'"];
tools = ["phpmyadmin","rockmongo","rainloop", "tomcat", "monsta"];
		
function in_array(val, arr){
			
	for (var i in arr) {
		var tmp_val = arr[i].split("_");
		if(tmp_val[0] == val){
			return true;
		}
	}
	return false;
}

$( document ).ready(function() {
        $(function() {
        	var panelList = $(\'#draggablePanelList\');
			var panel_order_array = '.$panel_order_array.';
			if(panel_order_array != null){
				$.each(panel_order_array, function(key, value){
					var row_name = value.substring(6);
					$("#row_"+row_name).appendTo("#draggablePanelList");
				});
			}

        	panelList.sortable({
            	// Only make the .panel-heading child elements support dragging.
            	handle: ".panel-heading",
	    	axis: "y",		
	    	placeholder: "highlight_placeholder",
            	update: function() {
	    		var panel_order = [];	
                $(".panel", panelList).each(function(index, elem) {
					var elem_id = $(this).attr(\'id\');
					var panel_id = "panel_"+elem_id.substring(11);
					panel_order.push(panel_id);		 
                });
					
			var panel_order_json = JSON.stringify(panel_order);
			$.ajax({
				type: "POST",
				url: "",
				data: {"panel_order": panel_order_json},
				success: function(){
					console.log("success");
				},
				error: function(){
					console.log("error");
				}
			});
	    	}        
		});     
     	});
});

// ]]></script>';
			
		echo '
<div class="row">
	<div class="col-sm-12 text-center">
		<div class="row">
			<div class="col-sm-11"><span class="sai_main_head">'.( empty($globals['sn']) ? $l['webuzo'] : $globals['sn']).'</span></div>
			<div class="col-sm-1">
				<div class="topscripts" align="right">
					<img src="'.$theme['a_images'].'ratings.png" width="26" height="26" class="someclass" title="Top Scripts"/>&nbsp;&nbsp;								
				</div>
			</div>
		</div>
		<br />
		<div class="row">
			<form accept-charset="'.$globals['charset'].'" name="classsearch" method="post" action=""  id="classsearchform" class="sai_inputs">
				<input id="inputs_searchs" type="text" name="searchFeature" class="sai_inputs" autofocus placeholder="Search" autocomplete="off"><br />			
			</form>
			<br />
			<br />
			<div id="show_none" class="sai_notice" style="text-align:center; display:none;">
				'.$l['webuzo_no_search'].'
			</div>
		</div>
	</div>
</div>';

if(!empty($apps_updates_available) || !empty($updates_available) ){
	$col_size = !empty($apps_updates_available) && !empty($updates_available) ? 'col-md-6 col-xs-12' : 'col-xs-12';
	echo'
	<div class="row"><!----#Update---->';
		echo (!empty($apps_updates_available) ? '
		<div class="'.$col_size.'">
			<div class="alert alert-warning" style="padding:8px">
				<center>
					<img src="'.$theme['images'].'notice.gif" /> &nbsp;					
					<a href="'.$globals['ind'].'act=apps_updates" alt="" style="text-decoration:none;">'.lang_vars($l['apps_updates_available'], array($apps_updates_available)).'</a>
				</center>
			</div>
		</div>' : '');
		echo (!empty($updates_available) ? '
		<div class="'.$col_size.'">
			<div class="alert alert-warning" style="padding:8px">
				<center>
					<img src="'.$theme['images'].'notice.gif" /> &nbsp;
					<a href="'.$globals['ind'].'act=installations&showupdates=true" alt="" style="text-decoration:none;">'.lang_vars($l['updates_available'], array($updates_available)).'</a>			
				</center>
			</div>
		</div>' : '');
	echo'
	</div>';
}


$glyphicon = $file_data['glyphicon'];
$isPanelCollapsed = $file_data['isPanelCollapsed'];

foreach($glyphicon as $key => $value)
{	
	if(array_key_exists($key, $collapsed_panels))
	{
		$glyphicon[$key] = "glyphicon glyphicon-plus";
		$isPanelCollapsed[$key] = "panel-collapse collapse";
	}
	else
	{
		$glyphicon[$key] = "glyphicon glyphicon-minus";
		$isPanelCollapsed[$key] = "panel-collapse collapse in";
	}		
}

echo'<div class="row" >
	<div class="col-lg-8" style="text-align:center;" id="draggablePanelList">
		
		<div class="row" id="row_domain">
			<div class="col-sm-12 col-xs-12" id="main_div_domain">
				<div class="panel panel-default" id="main_table_domain">
					<div class="panel-heading webuzohead">
						<span class="sai_head"><span class="sai-www"></span> '.$l['webuzo_domain'].'</span>
						<span id="icon_domain" style="float:right; font-size:20px; font-weight:bold;" class="'.$glyphicon["panel_domain"].'" role="button" data-toggle="collapse" data-parent="#accordion" href="#panel_domain" aria-controls="panel_domain"
						onclick="panel_collapse(this);"></span>
					</div>
					<div id="panel_domain" class="'.$isPanelCollapsed["panel_domain"].'" role="tabpanel" aria-labelledby="panel_domainHeading">
					<div class="panel-body pad0">
						<a href="'.$globals['ind'].'act=domainmanage">
							<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons11" value="'.$l['webuzo_mandom'].'">
								<img src="'.$theme['a_images'].'domains.png" alt="" width="36" /><br>
								<span class="medium">'.$l['webuzo_mandom'].'</span>
							</div>
						</a>';
						
						if(!$softpanel->getacl('DISABLE_DOMAINADD')){
							echo '<a href="'.$globals['ind'].'act=domainadd">
								<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons12" value="'.$l['webuzo_adddom'].'">
								<img src="'.$theme['a_images'].'adddomain.png" alt="" width="36" /><br>
								<span class="medium">'.$l['webuzo_adddom'].'</span>
								</div>
							</a>';
						}
						
						echo '<a href="'.$globals['ind'].'act=redirects">
							<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons126" value="'.$l['webuzo_redirects'].'">
								<img src="'.$theme['a_images'].'redirects.png" alt="" width="36" /><br>
								<span class="medium">'.$l['webuzo_redirects'].'</span>
							</div>
						</a>
						<a href="javascript:void(0)" onclick="is_app_inst(34, \'advancedns\'); return;">
							<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons13" value="'.$l['webuzo_advance_dns'].'">
								<img src="'.$theme['a_images'].'advancedns.png" alt="" width="36" /><br>
								<span class="medium">'.$l['webuzo_advance_dns'].'</span>
							</div>
						</a>
						<a href="'.$globals['ind'].'act=network_tools">
							<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons14" value="'.$l['webuzo_network_tools'].'">
								<img src="'.$theme['a_images'].'network_tools.png" alt="" width="36" /><br>
								<span class="medium">'.$l['webuzo_network_tools'].'</span>
							</div>
						</a>
						
						<a href="'.$globals['ind'].'act=extra_conf">
							<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons15" value="'.$l['webuzo_extra_conf'].'">
								<img src="'.$theme['a_images'].'extra_conf.png" alt="" width="36" /><br>
								<span class="medium">'.$l['webuzo_extra_conf'].'</span>
							</div>
						</a>
					</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row" id="row_database">
			<div class="col-xs-12" id="main_div_database">
				<div class="panel panel-default" id="main_table_database">
					<div class="panel-heading webuzohead">
						<span class="sai_head"><span class="sai-databases"></span> '.$l['webuzo_mysql'].'</span>
						<span id="icon_database" style="float:right; font-size:20px; font-weight:bold;" class="'.$glyphicon["panel_database"].'" role="button" data-toggle="collapse" data-parent="#accordion" href="#panel_database" aria-controls="panel_database"
						onclick="panel_collapse(this);"></span>
					</div>
					<div id="panel_database" class="'.$isPanelCollapsed["panel_database"].'" role="tabpanel" aria-labelledby="panel_databaseHeading">
					<div class="panel-body pad0">
						<a href="javascript:void(0)" onclick="is_app_inst('.$mysql.', \'dbmanage\'); return;">
							<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons21" value="'.$l['webuzo_mandb'].'">
								<img src="'.$theme['a_images'].'database.png" alt="" width="36" /><br>
								<span class="medium">'.$l['webuzo_mandb'].'</span>
							</div>
						</a>
						
						<a href="javascript:void(0)" onclick="is_app_inst('.$mysql.', \'dbmanage#adddb\'); return;">
							<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons22" value="'.$l['webuzo_adddb'].'">
								<img src="'.$theme['a_images'].'adddb.png" alt="" width="36" /><br>
								<span class="medium">'.$l['webuzo_adddb'].'</span>
							</div>
						</a>
						
						<a href="javascript:void(0)" onclick="is_app_inst('.$mysql.', \'phpmyadmin\'); return;">
							<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons23" value="'.$l['webuzo_phpmyadmin'].'">
								<img src="'.$theme['a_images'].'phpmyadmin.png" alt="" width="36" /><br>
								<span class="medium">'.$l['webuzo_phpmyadmin'].'</span>
							</div>
						</a>
						<a href="javascript:void(0)" onclick="is_app_inst(39, \'rockmongo\'); return;">
							<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons24" value="'.$l['ampps_rockmongo'].'">
								<img src="'.$theme['a_images'].'rockmongo.png" alt="RockMongo" width="36" /><br>
								<span class="medium">'.$l['ampps_rockmongo'].'</span>
							</div>
						</a>
					</div>
					</div>
				</div>
			</div>
		</div>
		
		
		<div class="row" id="row_ftp">
			<div class="col-sm-12 col-xs-12" id="main_div_ftp">
				<div class="panel panel-default" id="main_table_ftp">
					<div class="panel-heading webuzohead">
						<span class="sai_head"><span class="sai-folder"></span> '.$l['webuzo_cat_ftp'].'</span>
						<span id="icon_ftp" style="float:right; font-size:20px; font-weight:bold;" class="'.$glyphicon["panel_ftp"].'" role="button" data-toggle="collapse" data-parent="#accordion" href="#panel_ftp" aria-controls="panel_ftp"
						onclick="panel_collapse(this);"></span>
					</div>
					<div id="panel_ftp" class="'.$isPanelCollapsed["panel_ftp"].'" role="tabpanel" aria-labelledby="panel_ftpHeading">
					<div class="panel-body pad0">
						<a href="javascript:void(0)" onclick="is_app_inst(31, \'ftp\'); return;">
							<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons31" value="'.$l['webuzo_ftp'].'">
								<img src="'.$theme['a_images'].'ftp.png" alt="" width="36"/><br>
								<span class="medium" >'.$l['webuzo_ftp'].'</span>
							</div>
						</a>
						
						<a href="javascript:void(0)" onclick="is_app_inst(31, \'ftp_account\'); return;">
							<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons32" value="'.$l['webuzo_ftp_account'].'">
								<img src="'.$theme['a_images'].'addftp.png" alt="" width="36" /><br>
								<span class="medium">'.$l['webuzo_ftp_account'].'</span>
							</div>
						</a>
						
						<a href="javascript:void(0)" onclick="is_app_inst(31, \'ftp_connections\'); return;">
							<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons34" value="'.$l['webuzo_ftp_connections'].'">
								<img src="'.$theme['a_images'].'ftp_connections.png" alt="" width="36" /><br>
								<span class="medium">'.$l['webuzo_ftp_connections'].'</span>
							</div>
						</a>
					</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row" id="row_ssl">
			<div class="col-sm-12 col-xs-12" id="main_div_ssl">
				<div class="panel panel-default" id="main_table_ssl">
					<div class="panel-heading webuzohead">
						<span class="sai_head"><span class="sai-file"></span> '.$l['webuzo_ssl'].'</span>
						<span id="icon_ssl" style="float:right; font-size:20px; font-weight:bold;" class="'.$glyphicon["panel_ssl"].'" role="button" data-toggle="collapse" data-parent="#accordion" href="#panel_ssl" aria-controls="panel_ssl"
						onclick="panel_collapse(this);"></span>
					</div>
					<div id="panel_ssl" class="'.$isPanelCollapsed["panel_ssl"].'" role="tabpanel" aria-labelledby="panel_sslHeading">
					<div class="panel-body pad0">
						<a href="javascript:void(0)" onclick="is_app_inst(4, \'sslkey\'); return;">
							<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons51" value="'.$l['webuzo_key'].'">
								<img src="'.$theme['a_images'].'sslkey.png" alt="" width="36" /><br>
								<span class="medium" >'.$l['webuzo_key'].'</span>
							</div>
						</a>
						
						<a href="javascript:void(0)" onclick="is_app_inst(4, \'sslcsr\'); return;">
							<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons52" value="'.$l['webuzo_csr'].'">
								<img src="'.$theme['a_images'].'sslcsr.png" alt="" width="36" /><br>
								<span class="medium">'.$l['webuzo_csr'].'</span>
							</div>
						</a>
						
						<a href="javascript:void(0)" onclick="is_app_inst(4, \'sslcrt\'); return;">
							<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons53" value="'.$l['webuzo_crt'].'">
								<img src="'.$theme['a_images'].'sslcrt.png" alt="" width="36" /><br>
								<span class="medium">'.$l['webuzo_crt'].'</span>
							</div>
						</a>
						
						<a href="javascript:void(0)" onclick="is_app_inst('.$web_server.', \'install_cert\'); return;">
							<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons54" value="'.$l['webuzo_install_cert'].'">
								<img src="'.$theme['a_images'].'install_cert.png" alt="" width="36"  /><br>
								<span class="medium">'.$l['webuzo_install_cert'].'</span>
							</div>
						</a>
						
						<a href="javascript:void(0)" onclick="is_app_inst('.$web_server.', \'lets_encrypt\'); return;">
							<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons128" value="'.$l['webuzo_lets_encrypt'].'">
								<img src="'.$theme['a_images'].'lets_encrypt.png" alt="" width="36"  /><br>
								<span class="medium">'.$l['webuzo_lets_encrypt'].'</span>
							</div>
						</a>
					</div>
					</div>
				</div>
			</div>
		</div>';

		if(!$softpanel->getacl('DISABLE_EMAIL')){
			echo '<div class="row" id="row_email">		
				<div class="col-sm-12 col-xs-12" id="main_div_email">
					<div class="panel panel-default"  id="main_table_email">
						<div class="panel-heading webuzohead">
							<span class="sai_head"><span class="sai-message_queue"></span> '.$l['webuzo_cat_email'].'</span>
							<span id="icon_email" style="float:right; font-size:20px; font-weight:bold;" class="'.$glyphicon["panel_email"].'" role="button" data-toggle="collapse" data-parent="#accordion" href="#panel_email" aria-controls="panel_email"
							onclick="panel_collapse(this);"></span>
						</div>
						<div id="panel_email" class="'.$isPanelCollapsed["panel_email"].'" role="tabpanel" aria-labelledby="panel_emailHeading">
						<div class="panel-body pad0">';
							if(!$softpanel->getacl('DISABLE_EMAILADD')){
								echo '<a href="javascript:void(0)" onclick="is_app_inst(35, \'email_account\'); return;">
								<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons61" value="'.$l['webuzo_email_acc'].'">
									<img src="'.$theme['a_images'].'email_account.png" alt="" width="36" /><br>
									<span class="medium">'.$l['webuzo_email_acc'].'</span>
								</div>
								</a>';
							}
										
							echo '<a href="javascript:void(0)" onclick="is_app_inst(35, \'email_forward\'); return;">
								<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons62" value="'.$l['webuzo_email_forward'].'">
									<img src="'.$theme['a_images'].'email_forward.png" alt="" width="36" /><br>
									<span class="medium" >'.$l['webuzo_email_forward'].'</span>
								</div>
							</a>
							
							<a href="javascript:void(0)" onclick="is_app_inst(34, \'mxentry\'); return;">
								<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons63" value="'.$l['webuzo_mx_entry'].'">
									<img src="'.$theme['a_images'].'mx_entry.png" alt="" width="36" /><br>
									<span class="medium" >'.$l['webuzo_mx_entry'].'</span>
								</div>
							</a>
							
							<a href="javascript:void(0)" onclick="is_app_inst(36, \'rainloop\'); return;">
								<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons64" value="'.$l['webuzo_rainloop'].'">
									<img src="'.$theme['a_images'].'squirrel.png" alt="" width="36" /><br>
									<span class="medium" >'.$l['webuzo_rainloop'].'</span>
								</div>
							</a>
							
							<a href="'.$globals['ind'].'act=email">
								<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons65" value="'.$l['webuzo_email'].'">
									<img src="'.$theme['a_images'].'emails.png" alt="" width="36" /><br>
									<span class="medium" >'.$l['webuzo_email'].'</span>
								</div>
							</a>
							
							<a href="javascript:void(0)" onclick="is_app_inst(137, \'spam_assassin\'); return;">
								<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons66" value="'.$l['webuzo_spam_assassin'].'">
									<img src="'.$theme['a_images'].'spamassassin.png" alt="" width="36" /><br>
									<span class="medium" >'.$l['webuzo_spam_assassin'].'</span>
								</div>
							</a>
							
							<a href="javascript:void(0)" onclick="is_app_inst(35, \'add_email_autoresponder\'); return;">
								<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons62" value="'.$l['webuzo_email_autoresponders'].'">
									<img src="'.$theme['a_images'].'auto-reply.png" alt="" width="36" /><br>
									<span class="medium" >'.$l['webuzo_email_autoresponders'].'</span>
								</div>
							</a>
							</div>
						</div>
					</div>
				</div>
			</div>';
		}
		
		if(empty($disable_sysapps)){
			echo '
		<div class="row" id="row_configuration">
			<div class="col-sm-12 col-xs-12" id="main_div_configuration">
				<div class="panel panel-default"  id="main_table_configuration">
					<div class="panel-heading webuzohead">
						<span class="sai_head"><span class="sai-control_panel"></span> '.$l['webuzo_configuration'].'</span>
						<span id="icon_configuration" style="float:right; font-size:20px; font-weight:bold;" class="'.$glyphicon["panel_configuration"].'" role="button" data-toggle="collapse" data-parent="#accordion" href="#panel_configuration" aria-controls="panel_configuration"
						onclick="panel_collapse(this);"></span>
					</div>
					<div id="panel_configuration" class="'.$isPanelCollapsed["panel_configuration"].'" role="tabpanel" aria-labelledby="panel_configurationHeading">	
					<div class="panel-body pad0">
						
						<a href="'.$globals['ind'].'act=editini">
							<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons71" value="'.$l['webuzo_php'].'">
								<img src="'.$theme['a_images'].'php_conf.png" alt="" width="36" /><br>
								<span class="medium">'.$l['webuzo_php'].'</span>
							</div>
						</a>'
						.($softpanel->getConf('WU_DEFAULT_SERVER')== 'nginx' ?('
							<a href="javascript:void(0)" onclick="is_app_inst(18, \'apache_conf\'); return;">
								<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons72" value="'.$l['webuzo_nginx'].'">
									<img src="'.$theme['a_images'].'nginx_conf.png" alt="" width="36" /><br>
									<span class="medium">'.$l['webuzo_nginx'].'</span>
								</div>
							</a>
							') : (
								$softpanel->getConf('WU_DEFAULT_SERVER')== 'lighttpd' ?(
									'
									<a href="javascript:void(0)" onclick="is_app_inst(60, \'apache_conf\'); return;">
										<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons72" value="'.$l['webuzo_lighttpd'].'">
											<img src="'.$theme['a_images'].'lighttpd_conf.png" alt="" width="36" /><br>
											<span class="medium">'.$l['webuzo_lighttpd'].'</span>
										</div>
									</a>
							') : ('
									<a href="javascript:void(0)" onclick="is_app_inst('.$onlyapache.', \'apache_conf\'); return;">
										<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons72" value="'.$l['webuzo_apache'].'">
											<img src="'.$theme['a_images'].'apache_conf.png" alt="" width="36" /><br>
											<span class="medium">'.$l['webuzo_apache'].'</span>
										</div>
									</a>
						'))).'
						
						<a href="javascript:void(0)" onclick="is_app_inst('.$mysql.', \'mysql_conf\'); return;">
							<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons73" value="'.$ins_apps[$mysql.'_1']['name'].'">
								<img src="'.$theme['a_images'].$mysql.'_icon.png" alt="" width="36" /><br>
								<span class="medium">'.$ins_apps[$mysql.'_1']['name'].'</span>
							</div>
						</a>
						';
						if($softpanel->getConf('WU_DEFAULT_SERVER') == 'httpd' || $softpanel->getConf('WU_DEFAULT_SERVER') == 'httpd2'){
							$apache_id = ($softpanel->getConf('WU_DEFAULT_SERVER') == 'httpd' ? 3 : 125);
							echo '
						<a href="javascript:void(0)" onclick="is_app_inst('.$apache_id.', \'apache_settings\'); return;">
							<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons75" value="'.$l['apache_settings'].'">
								<img src="'.$theme['a_images'].'apache_settings.png" alt="" width="36" /><br>
								<span class="medium">'.$l['apache_settings'].'</span>
							</div>
						</a>';
						
						}elseif($softpanel->getConf('WU_DEFAULT_SERVER') == 'nginx'){
								echo '
						<a href="javascript:void(0)" onclick="is_app_inst(18, \'apache_settings\'); return;">
							<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons75" value="'.$l['nginx_settings'].'">
								<img src="'.$theme['a_images'].'nginx_settings.png" alt="" width="36" /><br>
								<span class="medium">'.$l['nginx_settings'].'</span>
							</div>
						</a>';
						}elseif($softpanel->getConf('WU_DEFAULT_SERVER') == 'lighttpd'){
								echo '
						<a href="javascript:void(0)" onclick="is_app_inst(60, \'apache_settings\'); return;">
							<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons75" value="'.$l['nginx_settings'].'">
								<img src="'.$theme['a_images'].'lighttpd_settings.png" alt="" width="36" /><br>
								<span class="medium">'.$l['lighttpd_settings'].'</span>
							</div>
						</a>';
						}
						
						if(!empty($iapps['35_1'])){
							echo '<a href="'.$globals['ind'].'act=exim_conf">
								<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons127" value="'.$l['webuzo_exim'].'">
									<img src="'.$theme['a_images'].'exim_conf.png" alt="" width="36" /><br>
									<span class="medium">'.$l['webuzo_exim'].'</span>
								</div>
							</a>';
						}
						
						if(!empty($iapps['87_1']) && ($iapps['87_1']['mod'] > 5)){
							echo '<a href="'.$globals['ind'].'act=varnish_conf">
								<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons128" value="'.$l['webuzo_varnish'].'">
									<img src="'.$theme['a_images'].'varnish_conf.png" alt="" width="36" /><br>
									<span class="medium">'.$l['webuzo_varnish'].'</span>
								</div>
							</a>';
						}
					echo '</div></div>
				</div>
			</div>
		</div>';
		}	
			echo '
		<div class="row" id="row_security">
			<div class="col-sm-12 col-xs-12" id="main_div_security">
				<div class="panel panel-default"  id="main_table_security">
					<div class="panel-heading webuzohead">
						<span class="sai_head"><span class="sai-bell"></span> '.$l['webuzo_cat_security'].'</span>
						<span id="icon_security" style="float:right; font-size:20px; font-weight:bold;" class="'.$glyphicon["panel_security"].'" role="button" data-toggle="collapse" data-parent="#accordion" href="#panel_security" aria-controls="panel_security"
						onclick="panel_collapse(this);"></span>
					</div>
					<div id="panel_security" class="'.$isPanelCollapsed["panel_security"].'" role="tabpanel" aria-labelledby="panel_securityHeading">						
					<div class="panel-body pad0">
						
						<a href="'.$globals['ind'].'act=changepassword">
							<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons81" value="'.$l['webuzo_pass'].'">
								<img src="'.$theme['a_images'].'changepassword.png" alt="" width="36" /><br>
								<span class="medium">'.$l['webuzo_pass'].'</span>
							</div>
						</a>
						
						<a href="'.$globals['ind'].'act=ipblock">
							<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons82" value="'.$l['webuzo_ip_block'].'">
										<img src="'.$theme['a_images'].'ip_block.png" alt="" width="36" /><br>
										<span class="medium">'.$l['webuzo_ip_block'].'</span>
							</div>
						</a>
						
						<a href="javascript:void(0)" onclick="is_app_inst(62, \'csf_conf\'); return;">
							<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons83" value="'.$l['webuzo_csf'].'">
								<img src="'.$theme['a_images'].'firewall.png" alt="" width="36" /><br>
								<span class="medium">'.$l['webuzo_csf'].'</span>
							</div>
						</a>';
						
						if(!$softpanel->getacl('DISABLE_SSH')){
							echo '<a href="'.$globals['ind'].'act=ssh_access">
								<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons84" value="'.$l['webuzo_ssh_access'].'">
									<img src="'.$theme['a_images'].'ssh_login.png" alt="" width="36" /><br>
									<span class="medium" >'.$l['webuzo_ssh_access'].'</span>
								</div>	
							</a>';
						}
						
						if($softpanel->getConf('WU_DEFAULT_SERVER') == 'httpd' || $softpanel->getConf('WU_DEFAULT_SERVER') == 'httpd2'){
							echo '
						<a href="'.$globals['ind'].'act=pass_protect_dir">	
							<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons85" value="'.$l['webuzo_pass_protect_dir'].'">
								<img src="'.$theme['a_images'].'pass_protect_dir.png" alt="" width="36" /><br>
								<span class="medium">'.$l['webuzo_pass_protect_dir'].'</span>
							</div>	
						</a>
							';
						}else{
							
						}
						echo '
					</div>
					</div>
				</div>	
			</div>
		</div> 
			
		<div class="row" id="row_advancedSettings">
			<div class="col-sm-12 col-xs-12" id="main_div_advancedSettings">
				<div class="panel panel-default" id="main_table_advancedSettings">
					<div class="panel-heading webuzohead">
						<span class="sai_head"><span class="sai-settinground"></span> '.$l['webuzo_advance_setting'].'</span>
						<span id="icon_advancedSettings" style="float:right; font-size:20px; font-weight:bold;" class="'.$glyphicon["panel_advancedSettings"].'" role="button" data-toggle="collapse" data-parent="#accordion" href="#panel_advancedSettings" aria-controls="panel_advancedSettings"
						onclick="panel_collapse(this);"></span>
					</div>
					<div id="panel_advancedSettings" class="'.$isPanelCollapsed["panel_advancedSettings"].'" role="tabpanel" aria-labelledby="panel_advancedSettingsHeading">						
					<div class="panel-body pad0">'.(empty($disable_sysapps) ? '<a href="'.$globals['ind'].'act=apps_updates">
							<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons91" value="'.$l['webuzo_apps_updates'].'">
								<img src="'.$theme['a_images'].'apps_updates.png" alt="" width="36" /><br>
								<span class="medium" >'.$l['webuzo_apps_updates'].'</span>
							</div>
						</a>' : '').'
						
						
						<a href="'.$globals['ind'].'act=settings">
							<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons92" value="'.$l['webuzo_settings'].'">
								<img src="'.$theme['a_images'].'settings.png" alt="" width="36" /><br>
								<span class="medium" >'.$l['webuzo_settings'].'</span>
							</div>
						</a>
						
						<a href="'.$globals['ind'].'act=cronjob">
							<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons93" value="'.$l['webuzo_cron'].'">
								<img src="'.$theme['a_images'].'cronjob.png" alt="" width="36" /><br>
								<span class="medium">'.$l['webuzo_cron'].'</span>
							</div>
						</a>
						
						<a href="'.$globals['ind'].'act=php_ext">
							<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons74" value="'.$l['webuzo_php_ext'].'">
								<img src="'.$theme['a_images'].'php_ext.png" alt="" width="36" /><br>	
								<span class="medium">'.$l['webuzo_php_ext'].'</span>
							</div>
						</a>
						
						<a href="'.$globals['ind'].'act=service_manager">
							<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons94" value="'.$l['webuzo_system_utilities'].'">
								<img src="'.$theme['a_images'].'service_manager.png" alt="" width="36" /><br>
								<span class="medium">'.$l['webuzo_system_utilities'].'</span>
							</div>
						</a>
						';
						if(empty($disable_sysapps)){
							echo '
						<a href="'.$globals['ind'].'act=services">
							<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons95" value="'.$l['webuzo_services'].'">
								<img src="'.$theme['a_images'].'services.png" alt="" width="36" /><br>
								<span class="medium">'.$l['webuzo_services'].'</span>
							</div>
						</a>
							';
						}else{
							echo '
						<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons95">
						</div>
							';
						}
						echo '
					</div>
					</div>
				</div>
			</div>
		</div>		
		
		<div class="row" id="row_serverUtilities">
			<div class="col-sm-12 col-xs-12" id="main_div_serverUtilities">
				<div class="panel panel-default" id="main_table_serverUtilities">
					<div class="panel-heading webuzohead">
						<span class="sai_head"><span class="sai-utilities"></span> '.$l['webuzo_server_setting'].'</span>
						<span id="icon_serverUtilities" style="float:right; font-size:20px; font-weight:bold;" class="'.$glyphicon["panel_serverUtilities"].'" role="button" data-toggle="collapse" data-parent="#accordion" href="#panel_serverUtilities" aria-controls="panel_serverUtilities"
						onclick="panel_collapse(this);"></span>
					</div>
					<div id="panel_serverUtilities" class="'.$isPanelCollapsed["panel_serverUtilities"].'" role="tabpanel" aria-labelledby="panel_serverUtilitiesHeading">		
					<div class="panel-body pad0">
						<a href="filemanager/" target="_blank">
							<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons101" value="'.$l['webuzo_filemanager'].'">
								<img src="'.$theme['a_images'].'filemanager.png" alt="" width="36" /><br>
								<span class="medium" >'.$l['webuzo_filemanager'].'</span>
							</div>
						</a>
						
						<a href="'.$globals['ind'].'act=webuzo_backup">
							<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons125" value="'.$l['webuzo_backup'].'">
								<img src="'.$theme['a_images'].'backup_restore.png" alt="" width="36" /><br>
								<span class="medium" >'.$l['webuzo_backup'].'</span>
							</div>
						</a>
						
						<a href="javascript:void(0)" onclick="is_app_inst(38, \'awstats\'); return;">
							<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons102" value="'.$l['webuzo_awstats'].'">
								<img src="'.$theme['a_images'].'awstats.png" alt="" width="36" /><br>
								<span class="medium">'.$l['webuzo_awstats'].'</span>
							</div>
						</a>
						
						<a href="'.$globals['ind'].'act=login_logs">
							<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons103" value="'.$l['webuzo_login_logs'].'">
								<img src="'.$theme['a_images'].'login_logs.png" alt="" width="36" /><br>
								<span class="medium" >'.$l['webuzo_login_logs'].'</span>
							</div>
						</a>
						
						<a href="'.$globals['ind'].'act=import_cpanel">
							<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons104" value="'.$l['webuzo_import_cpanel'].'">
								<img src="'.$theme['a_images'].'import_cpanel.png" alt="" width="36" /><br>
								<span class="medium" >'.$l['webuzo_import_cpanel'].'</span>
							</div>
						</a>
						';
						// Redirect to tomcat 7 installation if no tomcat version is installed
						$is_tomcat_ins = $softpanel->getConf('WU_TOMCAT');
						if(!empty($is_tomcat_ins)){
							echo '
						<a href="http://'.$softpanel->getConf('WU_PRIMARY_DOMAIN').':8080/manager/" target="_blank">
							<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons105" value="'.$l['webuzo_apache_tomcat'].'">
								<img src="'.$theme['a_images'].'apache_tomcat.png" alt="" width="36" /><br>
								<span class="medium" >'.$l['webuzo_apache_tomcat'].'</span>
							</div>
						</a>
							';
						}else{
							echo '
						
						<a href="javascript:void(0)" onclick="is_app_inst(37, \'tomcat\'); return;">
							<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons105" value="'.$l['webuzo_apache_tomcat'].'">
								<img src="'.$theme['a_images'].'apache_tomcat.png" alt="" width="36" /><br>
								<span class="medium">'.$l['webuzo_apache_tomcat'].'</span>
							</div>
						</a>';
						}
						
						echo '
						<a href="javascript:void(0)" onclick="is_app_inst(65, \'appact\', \'subversion\'); return;"">
							<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons106" value="'.$l['svn_manager'].'">
								<img src="'.$theme['a_images'].'svn_manage.png" alt="" width="36" /><br>
								<span class="medium" >'.$l['svn_manager'].'</span>
							</div>
						</a>
						<a href="'.$globals['ind'].'act=server_reboot">
							<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons106" value="'.$l['server_reboot'].'">
								<img src="'.$theme['a_images'].'server.png" alt="" width="36" /><br>
								<span class="medium" >'.$l['server_reboot'].'</span>
							</div>
						</a>
						<a href="'.$globals['ind'].'act=import_webuzo">
							<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons107" value="'.$l['import_from_webuzo'].'">
								<img src="'.$theme['a_images'].'import_webuzo.png" alt="" width="36" /><br>
								<span class="medium" >'.$l['import_from_webuzo'].'</span>
							</div>
						</a>
					</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row" id="row_serverInfo">
			<div class="col-sm-12 col-xs-12" id="main_div_serverInfo">
				<div class="panel panel-default" id="main_table_serverInfo">
					<div class="panel-heading webuzohead">
						<span class="sai_head"><span class="sai-erp"></span> '.$l['webuzo_server_info'].'</span>
						<span id="icon_serverInfo" style="float:right; font-size:20px; font-weight:bold;" class="'.$glyphicon["panel_serverInfo"].'" role="button" data-toggle="collapse" data-parent="#accordion" href="#panel_serverInfo" aria-controls="panel_serverInfo"
						onclick="panel_collapse(this);"></span>
					</div>
					<div id="panel_serverInfo" class="'.$isPanelCollapsed["panel_serverInfo"].'" role="tabpanel" aria-labelledby="panel_serverInfoHeading">
					<div class="panel-body pad0">
						<a href="'.$globals['ind'].'act=cpu">
							<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons111" value="'.$l['webuzo_cpu'].'">
								<img src="'.$theme['a_images'].'cpu.png" alt="" width="36" /><br>
								<span class="medium">'.$l['webuzo_cpu'].'</span>
							</div>
						</a>
						
						<a href="'.$globals['ind'].'act=ram">
							<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons112" value="'.$l['webuzo_ram'].'">
								<img src="'.$theme['a_images'].'ram.png" alt="" width="36" /><br>
								<span class="medium">'.$l['webuzo_ram'].'</span>
							</div>
						</a>
						
						<a href="'.$globals['ind'].'act=disk">
							<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons113" value="'.$l['webuzo_disk'].'">
								<img src="'.$theme['a_images'].'disk.png" alt="" width="36" /><br>
								<span class="medium">'.$l['webuzo_disk'].'</span>
							</div>
						</a>
						
						<a href="'.$globals['ind'].'act=bandwidth">
							<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons114" value="'.$l['webuzo_bandwidth'].'">
								<img src="'.$theme['a_images'].'bandwidth.png" alt="" width="36" /><br>
								<span class="medium">'.$l['webuzo_bandwidth'].'</span>
							</div>
						</a>
						
						<a href="'.$globals['ind'].'act=errorlog">
							<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons115" value="'.$l['webuzo_error_log'].'">
								<img src="'.$theme['a_images'].'error_log.png" alt="" width="36" /><br>
								<span class="medium">'.$l['webuzo_error_log'].'</span>
							</div>			
						</a>
					</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row" id="row_installSysApps">
			<div class="col-sm-12 col-xs-12" id="main_div_installSysApps">';
				$tmpapps = $apps;
				foreach($tmpapps as $key => $val){
					if(array_key_exists($key.'_1', $ins_apps) || $val['type'] == 'library'){
						unset($tmpapps[$key]);
					}
				}

				// Hope all the apps are not installed !!!
				if(!empty($tmpapps) && empty($disable_sysapps)){	
					shuffle($tmpapps);
					echo '<div class="panel panel-default" id="main_table_installSysApps">
					<div class="panel-heading webuzohead">
						<span class="sai_head"><span class="sai-apps"></span> '.$l['webuzo_install_sysapps'].'</span>
						<span id="icon_installSysApps" style="float:right; font-size:20px; font-weight:bold;" class="'.$glyphicon["panel_installSysApps"].'" role="button" data-toggle="collapse" data-parent="#accordion" href="#panel_installSysApps" aria-controls="panel_installSysApps"
						onclick="panel_collapse(this);"></span>
					</div>
					<div id="panel_installSysApps" class="'.$isPanelCollapsed["panel_installSysApps"].'" role="tabpanel" aria-labelledby="panel_installSysAppsHeading">	
					<div class="panel-body pad0">';
					$cnt = 0;
					while(($cnt < 5)){	
						// Blank fields - If any !!!
						if(empty($tmpapps[$cnt]['aid'])){
							echo '
						<div class="col-sm-2 col-xs-6 pan-button" align="center" valign="top"  width="140px" id="webuzo_icons4'.$cnt.'">
						</div>';
							$cnt++;
							continue;
						}
						echo '
						<a href="?act=apps&app='.$tmpapps[$cnt]['aid'].'">
							<div class="col-sm-2 col-xs-6 pan-button" align="center" valign="top" width="140px" id="webuzo_icons4'.$cnt.'" value="'.$tmpapps[$cnt]['name'].'">
								<div class="sp32_'.$tmpapps[$cnt]['softname'].'" style="margin: 0 auto;"></div>
								<span class="medium">'.$tmpapps[$cnt]['name'].'</span>
							</div>
						</a>';
						$cnt++;
					}
					echo '
					</div>
					</div>
				</div>';
			}echo '
			</div>
		</div>
		
		<div class="row" id="row_scripts">
			<div class="col-sm-12 col-xs-12" id="main_div_scripts">
				<div class="panel panel-default" id="main_table_scripts">
					<div class="panel-heading webuzohead">
						<span class="sai_head"><span class="sai-emptystar"></span> '.$l['webuzo_scripts'].'</span>
						<span id="icon_scripts" style="float:right; font-size:20px; font-weight:bold;" class="'.$glyphicon["panel_scripts"].'" role="button" data-toggle="collapse" data-parent="#accordion" href="#panel_scripts" aria-controls="panel_scripts"
						onclick="panel_collapse(this);"></span>
					</div>
					<div id="panel_scripts" class="'.$isPanelCollapsed["panel_scripts"].'" role="tabpanel" aria-labelledby="panel_scriptsHeading">
						<div class="panel-body pad0">
							<a href="'.$globals['ind'].'act=demos">
								<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons121" value="'.$l['webuzo_demos'].'">
									<img src="'.$theme['a_images'].'demos.png" alt="" width="36" /><br>
									<span class="medium">'.$l['webuzo_demos'].'</span>
								</div>
							</a>
						
							<a href="'.$globals['ind'].'act=ratings">
								<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons122" value="'.$l['webuzo_ratings'].'">
									<img src="'.$theme['a_images'].'ratings.png" alt="" width="36" /><br>
									<span class="medium">'.$l['webuzo_ratings'].'</span>
								</div>
							</a>
						
							<a href="'.$globals['ind'].'act=installations">
								<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons123" value="'.$l['webuzo_installations'].'">
									<img src="'.$theme['a_images'].'installations.png" alt="" width="36" /><br>
									<span class="medium">'.$l['webuzo_installations'].'</span>
								</div>
							</a>
						
							<a href="'.$globals['ind'].'act=backups">
								<div class="col-sm-2 col-xs-6 pan-button" id="webuzo_icons124" value="'.$l['webuzo_backups'].'">
									<img src="'.$theme['a_images'].'backups.png" alt="" width="36" /><br>
									<span class="medium">'.$l['webuzo_backups'].'</span>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		
<style>
		
.progress.disk-bar {
height: 6px;
margin-top: 25px;
margin-bottom: 20px;
border-radius: 0px;
-webkit-box-shadow: none;
box-shadow: none;
}

.progress.disk-bar .progress-bar {
font-size: 11px;
line-height: 16px;
color: #ffffff;
-webkit-box-shadow: inset 0 -1px 0 rgba(0,0,0,0);
box-shadow: inset 0 -1px 0 rgba(0,0,0,0);
}

.prog-organge {
background-color: #de745e !important;
}

</style>
		
	<div class="col-lg-4">';
		if($globals['sn'] == 'Webuzo' && !file_exists('/home/'.$softpanel->getCurrentUser_webuzo().'/.softaculous/no_pinguzo')){
			echo'
			<div class="alert alert-info alert-dismissible" role="alert">
				<button type="button" class="close" onclick="puzo()" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<span class="sai_head"><center>Want even more Stats ? <a style="text-decoration:none" target="_newtab" href="http://cp.pinguzo.com/">Try Pinguzo&nbsp;</a><img src="'.$theme['a_images'].'pinguzo.png" alt="" width="16" /></center></span>
			</div>';
		}
		echo'
		<div class="panel panel-default">
			<div class="panel-heading webuzohead">
				<span class="sai_head">'.$l['webuzo_server_status'].'</span>
			</div>
			<div class="panel-body pad0">
				<div class="row" style="padding:10px">
					<div class="col-sm-12 col-xs-12">
						<div>
							<b>'.$l['webuzo_diskinfo'].'</b>
							&nbsp; <span id="server_disk_text"></span>
						</div>
						<div class="clearfix"></div>
						<div class="progress disk-bar">
							<div style="cursor:pointer;" aria-valuemax="100" aria-valuemin="0" role="progressbar" class="progress-bar prog-organge"  data-placement="right" data-toggle="tooltip" id="server_disk">
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4">	
						<center><b>'.$l['webuzo_ram'].'</b></center>
						<div class="server_cpu server_graph" id="server_ram" style="width:80px;height:100px;margin:0 auto;"></div>
					</div>
					<div class="col-lg-4">
						<center><b>'.$l['webuzo_cpu'].'</b></center>
						<div class="server_cpu server_graph" id="server_cpu" style="width:80px;height:100px;margin:0 auto;"></div>
					</div>
					<div class="col-lg-4">	
						<center><b>'.$l['webuzo_bandwidth'].'</b></center>
						<div class="server_graph" id="server_bandwidth" style="width:80px;height:100px;margin:0 auto;"></div>
					</div>
				</div>
				<div class="row">							
					<div class="col-sm-12 col-xs-12">
						<div id="cpu_hist" style="height:150px;overflow:hidden; padding:0px;"></div>									
					</div>
				</div>
			</div>
		</div>
		
		<div class="panel panel-default">
			<div class="panel-heading webuzohead">
				<span class="sai_head">'.$l['webuzo_bandwidth_statistics'].'</span>
			</div>
			<div class="panel-body pad0">
				<div class="row" style="padding:5px">
					<div style="margin-left:20px;" id="bw_chartLegend"></div>
					<div id="graph_td"  class="col-sm-12 col-xs-12">';
						$month['yr'] = datify(time(), 0, 1, 'Y');
						$month['month'] = datify(time(), 0, 1, 'm');
						$tmp = mktime(1, 1, 1, $month['month'], 1, $month['yr']);
						$month['mth_txt'] = date('M', $tmp);
						echo '<center class="sai_tit">'.$month['mth_txt'].' '.$month['yr'].'</center>';
						echo '<div style="width:100%; height:300px; padding: 2px;" id="bwband_holder"></div>
					</div>
				</div><br/>
				<div class="row">
					<div class="col-sm-12 col-xs-12">						
						<center>';
							echo '<a href="'.$globals['ind'].'act=bandwidth&show='.date('Ym', ($tmp-(24*60*60))).'" style="text-decoration:none"><input type="button" class="flat-butt" id="prev_month" value="'.$l['prev_month'].'"/></a>
						</center>
					</div>
				</div><br/>
			</div>
		</div>
		
		<div class="panel panel-default">
			<div class="panel-heading webuzohead">
				<span class="sai_head">'.$l['webuzo_monthly_chart'].'</span>
			</div>
			<div class="panel-body pad0">
				<div class="row" style="padding:5px">
					<div style="margin-left:20px;" id="bw_monthly_chartLegend"></div>
					<div class="col-sm-12 col-xs-12">
						<div id="bw_monthly_body" style="height:300px; margin: 0 auto;"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<br/><br/><br/>';

echo '
	<script language="javascript" type="text/javascript">
		
		function panel_collapse(evt){			
			var Id = evt.id.substring(evt.id.indexOf("_"));
			var class_value = $("#"+evt.id).attr(\'class\');
			if(class_value.indexOf("plus") >= 0){
				$("#"+evt.id).attr(\'class\', \'glyphicon glyphicon-minus\');
			}
			else{
				$("#"+evt.id).attr(\'class\', \'glyphicon glyphicon-plus\');
			}
			var panel_collapsed = "panel"+Id;
			$.ajax({
				type: "POST",
				url: "",
				data: {"panel_collapsed": panel_collapsed},
				success: function(){
					console.log("success");
				},
				error: function(){
					console.log("error");
				}
			});
		};
		
	</script>
	';

}

?>
