<?php

//////////////////////////////////////////////////////////////
//===========================================================
// cpu_theme.php
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

function cpu_theme(){

global $theme, $globals, $user, $l, $cpu;

if(optGET('ajax')){	
	echo 'var server_cpu = [
		{ label: "Used",  data: '.$cpu['cpu']['percent'].'},
		{ label: "Free",  data: '.$cpu['cpu']['percent_free'].'}
	];';
		
	return true;
}

softheader($l['<title>']);

echo '
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="'.$theme['url'].'/js/excanvas.min.js"></script><![endif]-->
<script language="javascript" src="'.$theme['url'].'/webuzo/js/jquery.flot.min.js" type="text/javascript"></script>
<script language="javascript" src="'.$theme['url'].'/webuzo/js/jquery.flot.pie.min.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript"><!-- // --><![CDATA[													   
function getusage(){	
	if(AJAX("'.$globals['index'].'act=cpu&ajax=true", "server_graph_data(re)")){
		return false;
	}else{
		return true;	
	}
};

function startusage(){
	ajaxtimer = setInterval("getusage()", 5000);
};	

function server_graph_data(re){		

	var server_cpu = [
		{ label: "Used",  data: '.$cpu['cpu']['percent'].'},
		{ label: "Free",  data: '.$cpu['cpu']['percent_free'].'}
	];	
	if(re.length > 0){
		try{
			eval(re);
		}catch(e){ }
	}
	
	// Fill in the Text
	$_("server_cpu_text").innerHTML = server_cpu[0].data+"% / 100%";
		
	// CPU
	server_graph("server_cpu", server_cpu);
	
	
};

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

addonload("server_graph_data(\'void(0);\'); startusage();");

// ]]></script>

<style>
	.row-centered{
	text-aling: center;
	}
	.col-centered {
		display:inline-block;
		float:none;
		/* reset the text-align */
		text-align:left;
		/* inline-block space fix */
		margin-right:-4px;
	}
</style>

';

echo '
<div class="bg"><br>
	<div class="row sai_main_head text-center"><img src="'.$theme['a_images'].'cpu.png" class="webu_head_img"/>'.$l['header'].'</div><hr>
	<div class="row" style="border: 1px solid #CCCCCC; margin: 5%;">
		<div class="col-sm-6" style="padding: 10px;"><br>
			<div class="col-sm-12 text-center title_si">'.$l['cpuinfo'].'</div><br><br><br>
			<div class="row text-center">
				<div class="col-lg-12">
					<div class="row" style="padding:2px">
						<div class="col-xs-4" style="padding-right:0px">
							<span class="label_si pull-right">'.$l['cpu_model'].'</span>
						</div>
						<div class="col-xs-8"> 
							<span class="val value_si pull-left">'.$cpu['cpu']['model_name'].'</span>
						</div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="row" style="padding:2px">
						<div class="col-xs-4" style="padding-right:0px">
							<span class="label_si pull-right">'.$l['max_freq'].'</span>
						</div>
						<div class="col-xs-8"> 
							<span class="val value_si pull-left">'.$cpu['cpu']['limit'].' MHz</span>
						</div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="row" style="padding:2px">
						<div class="col-xs-4" style="padding-right:0px">
							<span class="label_si pull-right">'.$l['cache_size'].'</span>
						</div>
						<div class="col-xs-8"> 
							<span class="val value_si pull-left">'.$cpu['cpu']['cache_size'].'</span>
						</div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="row" style="padding:2px">
						<div class="col-xs-4" style="padding-right:0px">
							<span class="label_si pull-right">'.$l['core_count'].'</span>
						</div>
						<div class="col-xs-8"> 
							<span class="val value_si pull-left">'.$cpu['cpu']['core_count'].'</span>
						</div>
					</div>
				</div>
				<br><br>
				<div class="col-lg-12">
					<div class="row" style="padding:2px">
						<div class="col-xs-4" style="padding-right:0px">
							<span class="label_si pull-right">'.$l['poweredby'].'</span>	
						</div>
						<div class="col-xs-8">
							<span class="val value_si pull-left"><img src="'.$theme['a_images'].$cpu['cpu']['manu'].'.gif" style="width: 100; height: 400;" /></span>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-sm-6" style="padding: 10px;"><br>
			<div class="col-sm-12 text-center title_si">
				<span>'.$l['graphheader'].'</span>
			</div><br><br><br>
			<div class="row">
				<div id="server_cpu" class="server_graph" style="margin: auto;"></div>
				<div id="server_cpu_text" class="text-center value_si"></div>
			</div>
		</div><br><br>
	</div>
	<div class="sai_notice">'.$l['trademarks'].'</div><br>
</div> <!-- End of BG Div -->
';
softfooter();

}

?>