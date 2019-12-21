<?php

//////////////////////////////////////////////////////////////
//===========================================================
// ram_theme.php
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

function ram_theme(){

global $theme, $globals, $user, $l, $ram;

if(optGET('ajax')){	

	echo 'var server_ram = [
		{ label: "Used",  data: '.$ram['used'].'},
		{ label: "Free",  data: '.$ram['free'].'}
	];';
		
			return true;
}

softheader($l['<title>']);

echo '
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="'.$theme['url'].'/js/excanvas.min.js"></script><![endif]-->
<script language="javascript" src="'.$theme['url'].'/webuzo/js/jquery.flot.min.js" type="text/javascript"></script>
<script language="javascript" src="'.$theme['url'].'/webuzo/js/jquery.flot.pie.min.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript"><!-- // --><![CDATA[


function server_graph_data(re){		

	var server_ram = [
		{ label: "Used",  data: '.$ram['used'].'},
		{ label: "Free",  data: '.$ram['free'].'}
	];	
	if(re.length > 0){
		try{
			eval(re);
		}catch(e){ }
	}	
	
	// Fill in the Text
	$_("server_ram_text").innerHTML = server_ram[0].data+" MB / "+(server_ram[0].data+server_ram[1].data)+" MB";
		
	server_graph("server_ram", server_ram);
	
	
};
																			   
function getusage(){
	if(AJAX("'.$globals['index'].'act=ram&ajax=true", "server_graph_data(re)")){
		return false;
	}else{
		return true;	
	}
};

function startusage(){
	ajaxtimer = setInterval("getusage()", 5000);
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

// ]]></script>';

echo '
	<div class="bg"><br>
		<div class="row sai_main_head text-center"><img src="'.$theme['a_images'].'ram.png" class="webu_head_img"/>'.$l['header'].'</div><hr>
		<div class="row" style="border: 1px solid #CCCCCC; margin: 5%;">
			<div class="col-lg-12">
				<div class="col-sm-6" style="padding: 10px;"><br>
					<div class="col-sm-12 text-center title_si">'.$l['raminfo'].'</div><br><br><br>
					<div class="col-sm-12 text-center">
						<div class="row">
							<span class="label_si">'.$l['totalram'].'</span> <span class="val value_si">'.$ram['limit'].' MB</span>
						</div><br>	
						<div class="row">
							<span class="label_si">'.(isset($ram['swap']) ? $l['swap'] : $l['burstable']).' : </span> <span class="val value_si">'.(isset($ram['swap']) ? $ram['swap'] : $ram['burst']).' MB</span>
						</div><br/>
						<div class="row">
							<span class="label_si">'.$l['utilised'].'</span> <span class="val value_si">'.$ram['used'].' MB</span>
						</div><br><br>
					</div>
				</div>
				<div class="col-sm-6" style="padding: 10px;"><br>
					<div class="col-sm-12 text-center title_si">'.$l['graphheader'].'</div><br><br><br>
					<div class="row">
						<div id="server_ram" class="server_graph" style="margin: auto;"></div><br>
						<div id="server_ram_text" class="text-center value_si">&nbsp;</div>		
					</div>
				</div>
			</div>
		</div>
	</div>';
softfooter();

}

?>