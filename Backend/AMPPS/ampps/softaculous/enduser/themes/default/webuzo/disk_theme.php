<?php

//////////////////////////////////////////////////////////////
//===========================================================
// disk_theme.php
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

function disk_theme(){

global $theme, $globals, $user, $l, $disk;



softheader($l['<title>']);

echo '
	<div class="bg"><br>
		<div class="row sai_main_head text-center"><img src="'.$theme['a_images'].'disk.png" class="webu_head_img"/>'.$l['header'].'</div><hr>
		<div class="row" style="border: 1px solid #CCCCCC; margin: 5%;">
			<!---- DiskInfo Info Block Starts ----->
			<div class="col-sm-6" style="padding: 10px;">
				<br>
				<div class="col-sm-12 text-center title_si">'.$l['diskinfo'].'</div><br><br><br>
				<div class="row text-center">
					<div class="row">
						<span class="label_si">'.$l['totaldisk'].'</span> 
						<span class="val value_si">'.$disk['disk']['total']['limit_gb'].' GB</span>
					</div><br/>
					<div class="row">
						<span class="label_si">'.$l['diskutilised'].'</span> 
						<span class="val value_si">'.$disk['disk']['total']['used_gb'].' GB</span>
					</div><br><br>
				</div>
			</div>

			<div class="col-sm-6" style="padding: 10px;">
				<br>
				<div class="col-sm-12 text-center title_si"><span>'.$l['graphheader'].'</span></div><br><br><br>
				<div class="row">
					<div id="server_disk" class="server_graph" style="margin: auto;"></div><br>
					<div id="server_disk_text" class="text-center value_si">&nbsp;</div>
				</div>
			</div><br><br>
		</div>
		<div class="row" style="border: 1px solid #CCCCCC; margin: 5%;">
			<div class="col-lg-12">
				<div class="col-sm-6" style="padding: 10px;"><br>
					<div class="col-sm-12 text-center title_si">'.$l['inodesinfo'].'</div><br><br><br>
					<div class="col-sm-12 text-center">
						<div class="row">
							<span class="label_si">'.$l['inodestotal'].'</span> 
							<span class="val value_si">'.$disk['inodes']['total']['limit'].'</span>
						</div><br/>
						<div class="row">
							<span class="label_si">'.$l['inodesutilised'].'</span> 
							<span class="val value_si">'.$disk['inodes']['total']['used'].'</span>
						</div><br><br>
					</div>
				</div>
				<div class="col-sm-6" style="padding: 10px;"><br>
					<div class="col-sm-12 text-center title_si"><span>'.$l['inodesheader'].'</span></div><br><br><br>
					<div class="row">
						<div id="server_inodes" class="server_graph" style="margin: auto;"></div><br/>
						<div id="server_inodes_text" class="text-center value_si">&nbsp;</div>
					</div>
				</div>
			</div><br><br>
		</div>
	</div>

	<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="'.$theme['url'].'/js/excanvas.min.js"></script><![endif]-->
	<script language="javascript" src="'.$theme['url'].'/webuzo/js/jquery.flot.min.js" type="text/javascript"></script>
	<script language="javascript" src="'.$theme['url'].'/webuzo/js/jquery.flot.pie.min.js" type="text/javascript"></script>
	<script type="text/javascript" charset="utf-8"><!-- // --><![CDATA[	

		function server_graph_data(){	
		var server_disk = [
			{ label: "Used",  data: '.$disk['disk']['total']['used_gb'].'},
			{ label: "Free",  data: '.$disk['disk']['total']['free_gb'].'}
		];

		var server_inodes = [
			{ label: "Used",  data: '.$disk['inodes']['total']['used'].'},
			{ label: "Free",  data: '.$disk['inodes']['total']['free'].'}
		];

		// Fill in the Text
		$_("server_disk_text").innerHTML = server_disk[0].data+" GB / "+Math.round((server_disk[0].data+server_disk[1].data)*100)/100+" GB";

		$_("server_inodes_text").innerHTML = server_inodes[0].data+"  / "+Math.round((server_inodes[0].data+server_inodes[1].data)*100)/100;	

		// disk
		server_graph("server_disk", server_disk);

		server_graph("server_inodes", server_inodes);
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

		addonload("server_graph_data();");
	// ]]></script>';

softfooter();

}

?>