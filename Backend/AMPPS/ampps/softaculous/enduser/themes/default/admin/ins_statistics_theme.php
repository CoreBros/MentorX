<?php

//////////////////////////////////////////////////////////////
//===========================================================
// sync_settings_email_theme.php
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

function ins_statistics_theme(){

global $theme, $globals, $user, $l, $langs, $skins, $error, $saved, $ins_stats, $scriptwise, $iscripts, $scriptwise_count;

softheader($l['<title>']);

	echo '
	<link rel="stylesheet" type="text/css" media="all" href="'.$theme['url'].'/css/daterangepicker.css" />
	<script type="text/javascript" src="'.$theme['url'].'/js/moment.min.js"></script>
	<script type="text/javascript" src="'.$theme['url'].'/js/daterangepicker.js"></script>

	<div class="container-fluid width80"><br /><br />
	<div class="sai_main_head text-center">'.$l['ins_statistics_head'].'</div>
	<div class="sai_form">
	
	<div class="row">
		<div class="col-sm-12 col-xs-12 col-md-8">
		</div>
		<div id="reportrange" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc;" class="col-sm-5 col-xs-8 col-sm-offset-1 col-xs-offset-1 col-md-offset-0 col-md-3">
			<i class="fa sai-calendars fa-lg"></i>&nbsp;
			<span id="daterange"></span>
		</div>
		<div class="col-sm-3 col-xs-3 col-sm-offset-1 col-xs-offset-0 col-md-offset-0 col-md-1">
			<input name="filter_stats" value="'.$l['filter'].'" class="flat-butt" type="submit" onClick="submit_date();return false;" style="padding:4px 8px;">
		</div>
	</div>
	<br />
	
	<script type="text/javascript">
	$(function() {
		
		var start_date = "'.optREQ('start_date').'";
		
		if(start_date){
			// If the date is in our format i.e. posted via our UI
			if(start_date.match(/,/)){
				var start = moment(start_date, "MMMM DD, YYYY");
			}else if(Number.isInteger(Number(start_date))){
				// If the date is a unix timestamp
				var start = moment.unix(start_date);
			}else{
				// Any other format let the JS handle
				var start = moment(start_date);
			}
		}else{
			var start = moment(0);
		}
		
		var end_date = "'.optREQ('end_date').'";
		
		if(end_date){
			// If the date is in our format i.e. posted via our UI
			if(end_date.match(/,/)){
				var end = moment(end_date, "MMMM DD, YYYY");
			}else if(Number.isInteger(Number(end_date))){
				// If the date is a unix timestamp
				var end = moment.unix(end_date);
			}else{
				// Any other format let the JS handle
				var end = moment(end_date);
			}
		}else{
			var end = moment();
		}

		function cb(start, end) {
			$("#reportrange span").html(start.format("MMMM D, YYYY") + " - " + end.format("MMMM D, YYYY"));
		}

		$("#reportrange").daterangepicker({
			startDate: start,
			endDate: end,
			showDropdowns: true,
			ranges: {
			   "Today": [moment(), moment()],
			   "Yesterday": [moment().subtract(1, "days"), moment().subtract(1, "days")],
			   "Last 7 Days": [moment().subtract(6, "days"), moment()],
			   "Last 30 Days": [moment().subtract(29, "days"), moment()],
			   "This Month": [moment().startOf("month"), moment().endOf("month")],
			   "Last Month": [moment().subtract(1, "month").startOf("month"), moment().subtract(1, "month").endOf("month")]
			}
		}, cb);

		cb(start, end);

	});
	
	function submit_date(){
		var daterange = $("#daterange").text();
		var split_range = daterange.split(" - ");
		var ind = "'.$globals['ind'].'";
		ind = ind.replace("&amp;", "&");
		window.location = ind + "act=ins_statistics&start_date="+split_range[0]+"&end_date="+split_range[1];
	}
	</script>
	';
	
	error_handle($error);

	echo'<div class="sai_form_head"><b>'.$l['overview'].'</b></div><br />';
	
	$j = 0;

	foreach($ins_stats as $ik => $iv){
		echo '<div class="row sai_form_adj"><br />
				<div class="col-sm-6">
					<label class="sai_head">'.$l[$ik].'</label>
				</div>
				<div class="col-sm-6">
					<label class="sai_head">'.$iv.'</label>
				</div>
			</div><br />';
		$j++;
	}
	
	echo '</div>';
	
	if(!empty($scriptwise_count)){
		echo '<div class="sai_form">
			<div class="sai_form_head"><b>'.$l['scriptwise'].'</b></div><br />';
		
		$i = 0;
		
		foreach($scriptwise_count as $sk => $sv){
			
			//Skip if script is disabled 
			if(empty($iscripts[$sk])) continue;
			
			echo '<div class="row sai_form_adj"><br />
					<div class="col-sm-6">
						<label class="sai_head">'.$iscripts[$sk]['name'].'</span>&nbsp;('.$l['cat_'.$iscripts[$sk]['type'].'_'.$iscripts[$sk]['cat']].')</label>
					</div>
					<div class="col-sm-6">
						<label class="sai_head">'.$sv.'</label>
					</div>
				</div><br />';
			$i++;
		}
	}
	
	echo '</div>
	</div><br />';

softfooter();

}

?>