<?php

//////////////////////////////////////////////////////////////
//===========================================================
// updates_theme.php
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
function cronjob_theme(){

	global $theme, $globals, $l, $error, $softpanel ,$done, $user;
	
	// for Add cron job
	if(optGET('ajaxcron')){			
		if(!empty($error)){				
			echo '0'.current($error);
			return false;
		}
		if(!empty($done)){
			echo '1'.$l['create'];	
			showcron();
			return true;			
		}
	}
	
	// For delete
	if(optGET('ajaxdel')){		
		if(!empty($error)){				
			echo '0'.current($error);
			return false;
		}
		if(!empty($done)){
			echo '1'.$l['delete'];	
			showcron();
			return true;			
		}
	}	
	
	// For update
	if(optGET('ajaxup')){	
		if(!empty($error)){				
			echo '0'.current($error);
			return false;
		}
		if(!empty($done)){
			echo '1'.$l['edit'];	
			return true;			
		}
	}
	
	softheader($l['<title>']);	
	
	echo '<div class="bg"><br/>
		<div class="sai_main_head"><center><img src="'.$theme['a_images'].'cronjob.png" />&nbsp;'.$l['lbl_head'].'</center></div><hr>
		<form accept-charset="'.$globals['charset'].'" action="" method="post" name="cronjob" id="editform">
			<div class="row">
				<div class="col-sm-2 col-xs-12">
					<label class="sai_head" for="minute">'.$l['minute'].'</label>&nbsp;
					<span class="sai_exp2"><font size="2">'.$l['mtype'].'</font></span>
				</div>
				<div class="col-sm-3 col-xs-12"> 
					<input type="text" name="minute" id="minute" class="form-control" value="  * " />
				</div>
				<div class="col-sm-7 col-xs-12">
					<select id="minute_options"class="form-control" onchange="select_option(\'minute\')">
						<option value="---">---'.$l['comm_sett'].'---</option>
						<option value="*">'.$l['every_min'].'</option>
						<option value="*/5">'.$l['every_five_min'].'</option>
						<option value="*/10">'.$l['every_ten_min'].'</option>
						<option value="*/15">'.$l['every_fifteen_min'].'</option>
						<option value="---">---'.$l['minute'].'---</option>';
						for($i = 0 ; $i < 60 ; $i++){
							echo'<option value="'.$i.'">'.($i < 10 ? ':0'.$i : ':'.$i).'</option>';
						}
					echo
					'</select>
				</div>
			</div><br/>
			<div class="row">
				<div class="col-sm-2 col-xs-12">
					<label class="sai_head" for="hour">'.$l['hour'].'</label>&nbsp;
					<span class="sai_exp2"><font size="2">'.$l['htype'].'</font></span>
				</div>
				<div class="col-sm-3 col-xs-12">
					<input type="text" name="hour" id="hour" class="form-control" value="  * " />
				</div>
				<div class="col-sm-7 col-xs-12">
					<select id="hour_options" class="form-control" onchange="select_option(\'hour\')">
						<option value="---">---'.$l['comm_sett'].'---</option>
						<option value="*">'.$l['every_hr'].'</option>
						<option value="*/2">'.$l['every_other_hr'].'</option>
						<option value="*/4">'.$l['every_fourth_hr'].'</option>
						<option value="---">---'.$l['hour'].'---</option>';
						for($i = 0 ; $i < 24 ; $i++){
							echo'<option value="'.$i.'">'.$i.':00 ('.$i.')</option>';
						}
					echo'
					</select>
				</div>
			</div><br/>
			<div class="row">
				<div class="col-sm-2 col-xs-12">
					<label class="sai_head" for="day">'.$l['day'].'</label>&nbsp;
					<span class="sai_exp2"><font size="2">'.$l['dtype'].'</font></span>
				</div>
				<div class="col-sm-3 col-xs-12">
					<input type="text" name="day" id="day" class="form-control" value="  * " />
				</div>
				<div class="col-sm-7 col-xs-12">
					<select id="day_options" class="form-control" onchange="select_option(\'day\')">
						<option value="---">---'.$l['comm_sett'].'---</option>
						<option value="*">'.$l['every_day'].'</option>
						<option value="*/2">'.$l['every_other_day'].'</option>
						<option value="---">---'.$l['day'].'---</option>';
						$ends = array('th','st','nd','rd','th','th','th','th','th','th');
						for($i = 1 ; $i < 32 ; $i++){
							if((($i % 100) >= 11) && (($i % 100) <= 13)){
								echo '<option value="'.$i.'">'.$i.'th ('.$i.')</option>';
							}
							else{
								echo '<option value="'.$i.'">'.$i.$ends[$i % 10].' ('.$i.')</option>';
							}
						}
					echo'
					</select>
				</div>
			</div><br/>
			<div class="row">
				<div class="col-sm-2 col-xs-12">
					<label class="sai_head" id="type" for="month">'.$l['month'].'</label>&nbsp;
					<span class="sai_exp2"><font size="2">'.$l['motype'].'</font></span>
				</div>
				<div class="col-sm-3 col-xs-12">
					<input type="text" name="month" id="month" class="form-control" value="  * " />
				</div>
				<div class="col-sm-7 col-xs-12">
					<select id="month_options" class="form-control" onchange="select_option(\'month\')">
						<option value="---">---'.$l['comm_sett'].'---</option>
						<option value="*">'.$l['every_mon'].'</option>
						<option value="*/2">'.$l['every_other_mon'].'</option>
						<option value="*/3">'.$l['every_third_mon'].'</option>
						<option value="---">---'.$l['month'].'---</option>';
						for($i = 1 ; $i < 13 ; $i++){
							echo '<option value="'.$i.'">'.date("F", mktime(0, 0, 0, $i, 10)).' ('.$i.')</option>';
						}
					echo'
					</select>
				</div>
			</div><br/>
			<div class="row">
				<div class="col-sm-2 col-xs-12">
					<label class="sai_head" id="type" for="weekday">'.$l['weekday'].'</label>&nbsp;
					<span class="sai_exp2"><font size="2">'.$l['wtype'].'</font></span>
				</div>
				<div class="col-sm-3 col-xs-12">
					<input type="text" name="weekday" id="weekday" class="form-control"  value="  * " />
				</div>
				<div class="col-sm-7 col-xs-12">
					<select id="weekday_options" class="form-control" onchange="select_option(\'weekday\')">
						<option value="---">---'.$l['comm_sett'].'---</option>
						<option value="1-5">'.$l['every_weekday'].'</option>
						<option value="0,6">'.$l['every_weekend'].'</option>
						<option value="1,2,3">'.$l['every_mon_tues_wed'].'</option>
						<option value="0,2,4">'.$l['every_sun_tues_thur'].'</option>
						<option value="---">---'.$l['weekday'].'---</option>';
						$days = array($l['sun'], $l['mon'], $l['tues'], $l['wed'], $l['thur'], $l['fri'], $l['sat']);
						for($i = 0 ; $i < 7 ; $i++){
							echo '<option value="'.$i.'">'.$days[$i].' ('.$i.')</option>';
						}
					echo'
					</select>
				</div>
			</div><br/>
			<div class="row">
				<div class="col-sm-2">
					<label class="sai_head" id="type" for="cmd">'.$l['cmd'].'</label>
				</div>
				<div class="col-sm-10">
					<input type="text" name="cmd" id="cmd" size="60" class="form-control" placeholder="" />
				</div>
			</div><br/>
			<div class="row">
				<div class="col-sm-offset-5 col-sm-7">
					<input type="hidden" name="create_record" value="1" />
					<input type="submit" style="cursor:pointer" value="'.$l['submit_button'].'" name="create_record" class="flat-butt" id="submitcron"/> &nbsp;<img id="createcron" src="'.$theme['images'].'progress.gif" style="display:none">
				</div>
			</div><br/>
		</form>
	</div>
	</br></br></br>
	<div class="bg">
		<div class="sai_sub_head"><center>'.$l['cron_head'].' '.$softpanel->user['name'].'</center></div><hr>
		<div id="showrectab">';
			showcron();
		echo '</div><br /><br />
		<div class="sai_notice text-center">'.$l['note'].'</div>
	</div>
	<script language="javascript" type="text/javascript"><!-- // --><![CDATA[		
		
		function select_option(input_field){
			input_field = input_field.trim();
			var dd_obj = document.getElementById(input_field+"_options");
			var ib_obj = document.getElementById(input_field);
			if(dd_obj.value !== "---"){
				ib_obj.value = dd_obj.value;
			}
		}
		
		$(document).ready(function(){
			// For creating DNS	
			$("#submitcron").click(function(){
				$("#createcron").css("display", "");				
				$.ajax({
					type: "POST",
					url: window.location+"&ajaxcron=1",					
					data: $("#editform").serialize(),
					
					// Checking for error
					success: function(data){
						$("#createcron").css("display", "none");
						var result = data.substring(0,1);
						if(result == "1"){						
							$_("minute").value="*";
							$_("minute_options").value="---";
							$_("hour").value="*";
							$_("hour_options").value="---";
							$_("day").value="*";
							$_("day_options").value="---";
							$_("month").value="*";
							$_("month_options").value="---";
							$_("weekday").value="*";	
							$_("weekday_options").value="---";	
							$_("cmd").value="";					
							var msg = data.substring(1,data.indexOf("<table"));
							var output = data.substring(data.indexOf("<table"));							
							message_box.show_message( "Done ",msg,2);														
							$("#showrectab").html(output);																																					
						}
						if(result == "0"){	
							$("#createdns").css("display", "none");
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

function showcron(){

global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $done, $domain_list, $read_cron, $domain_name ;

	$read_cron = $softpanel->read_cronjob();
	

		echo '<table border="0" cellpadding="8" cellspacing="1" width="100%" align="center" class="table table-hover table-hover-moz td_font">			
		<thead style="background:#EFEFEF;" class="sai_head2">
			<tr>				
				<th width="10%">'.$l['minute'].'</th>
				<th width="10%">'.$l['hour'].'</th>
				<th width="10%">'.$l['day'].'</th>
				<th width="10%">'.$l['month'].'</th>
				<th width="10%">'.$l['weekday'].'</th>
				<th width="35%">'.$l['cmd'].'</th>
				<th style="text-align:right;" colspan="3">'.$l['option'].'</th>
			</tr>
		</thead>
		<tbody>';
				
			$i =1;		

			if(empty($read_cron)){
				echo '<tr><td colspan=7><center><span>'.$l['no_cron_added'].'</span></center></td></<tr>';
			}else{
				foreach ($read_cron as $key => $value){
					echo '<tr id="trc'.$key.'">
						<td>
							<span id="minc'.$key.'">'.$read_cron[$key]['min'].'</span>
							<input id="min_entryc'.$key.'" style="display:none;" size="2" >
						</td>
						<td>
							<span id="houc'.$key.'">'.$read_cron[$key]['hou'].'</span>
							<input id="hou_entryc'.$key.'" style="display:none;" size="2" >
						</td>
						<td>
							<span id="dayc'.$key.'">'.$read_cron[$key]['day'].'</span>
							<input id="day_entryc'.$key.'" style="display:none;" size="2" >
						</td>
						<td>
							<span id="monc'.$key.'">'.$read_cron[$key]['mon'].'</span>
							<input id="mon_entryc'.$key.'" style="display:none;" size="2" >
						</td>
						<td>
							<span id="weec'.$key.'">'.$read_cron[$key]['wee'].'</span>
							<input id="wee_entryc'.$key.'" style="display:none;" size="2" >
						</td>
						<td>
							<code style="color:#000000;background-color:#e8e8e8"><span id="cmdc'.$key.'">'.$read_cron[$key]['cmd'].'</span></code>
							<input id="cmd_entryc'.$key.'" style="display:none;" size="30" >
						</td>
						<td style="width:1%;">
							<img title="Cancel" class="cancel" id="cidc'.$key.'" src="'.$theme['images'].'del.gif" style="display:none; cursor:pointer;" />
						</td>
						<td style="width:1%;">
							<img title="Edit" class="edit" id="eidc'.$key.'" src="'.$theme['images'].'editdetail.gif" style="cursor:pointer"  />
						</td>
						<td style="width:1%;">
							<img title="Delete" class="delete" id="didc'.$key.'" src="' . $theme['images'] . 'remove.gif" style="cursor:pointer" />
						</td>
					</tr>';
					$i++;
				}
			}


		echo '</tbody>';
		echo '</table>	
		<script language="javascript" type="text/javascript"><!-- // --><![CDATA[

			// For msgbox MboxObject(fYes, fNo)
			var message_box = new MboxObject(deleteDomain,"");
			
			function deleteDomain(did){			
				$.ajax({				
					type: "POST",				
					url: window.location+"&ajaxdel=1&delete_record="+did,	
				
					success: function(data){
						var result = data.substring(0,1);
						if(result == "1"){
							var msg = data.substring(1,data.indexOf("<table"));
							var output = data.substring(data.indexOf("<table"));							
							message_box.show_message("Done",msg,2);														
							$("#showrectab").html(output);											
						}
						if(result == "0"){
							var msg = data.substring(1);
							message_box.show_message("Error",msg,1);														
						}
					},
					error: function() {
						message_box.show_message("Error",\''.$l['connect_error'].'\',1);							
					}															  
				});					
			}
			$(document).ready(function(){			
				
				$(".sai_altrowstable tr").mouseover(function(){
					var old_class = $(this).attr("class");		
					$(this).attr("class", "sai_tr_bgcolor");		
					$(this).mouseout(function(){
						$(this).attr("class", old_class);
					});
				});
				
				// For deleting record
				$(".delete").click(function() {	
					var did = $(this).attr(\'id\');
					did = did.substr(3);			
					message_box.delete_message (\'Warning\',\''.$l['record_del_conf'].'\',did);			
				});
				
				// For cancel
				$(".cancel").click(function() {
					var id = $(this).attr(\'id\');
					id = id.substr(3);	
					$("#cid"+id).css("display", "none");
					$(\'#eid\'+id).attr("src","'.$theme['images'].'editdetail.gif");
					$("#min_entry"+id).css("display", "none");
					$("#min"+id).css("display", "");
					$("#hou_entry"+id).css("display", "none");
					$("#hou"+id).css("display", "");
					$("#day_entry"+id).css("display", "none");
					$("#day"+id).css("display", "");
					$("#mon_entry"+id).css("display", "none");
					$("#mon"+id).css("display", "");
					$("#wee_entry"+id).css("display", "none");
					$("#wee"+id).css("display", "");
					$("#cmd_entry"+id).css("display", "none");
					$("#cmd"+id).css("display", "");	
				});
				
				// for editing record
				$(".edit").click(function() {
					var id = $(this).attr(\'id\');
					id = id.substr(3);	
					$("#cid"+id).css("display", "");	
					if($(this).attr(\'src\') == "'.$theme['images'].'save.gif"){			
						var minute = ($("#min_entry"+id).val());
						var hour = ($("#hou_entry"+id).val());
						var day = ($("#day_entry"+id).val());
						var month = ($("#mon_entry"+id).val());
						var weekday = ($("#wee_entry"+id).val());
						var cmd = ($("#cmd_entry"+id).val());		
						$.ajax({
							type: "POST",
							url: window.location+"&ajaxup=1&edit_record="+id,
							data: {
								minute:minute,
								hour:hour,
								day:day,
								month:month,
								weekday:weekday,
								cmd:cmd
							},
							// checking for error
							success: function(data){					
								var result = data.substring(0,1);					
								var msg = data.substring(1);	
								if(result == "0"){																														
									message_box.show_message( "Error ",msg,1);
									$(\'#eid\'+id).attr("src","'.$theme['images'].'editdetail.gif");
								}	
								if(result == "1"){						
									message_box.show_message( "Done ",msg,2);
									$(\'#min\'+id).html($("#min_entry"+id).val());
									$(\'#hou\'+id).html($("#hou_entry"+id).val());
									$(\'#day\'+id).html($("#day_entry"+id).val());
									$(\'#mon\'+id).html($("#mon_entry"+id).val());
									$(\'#wee\'+id).html($("#wee_entry"+id).val());
									$(\'#cmd\'+id).html($("#cmd_entry"+id).val());														
									$(\'#eid\'+id).attr("src","'.$theme['images'].'editdetail.gif");
								}	
							},
							error: function() {
								message_box.show_message("Error",\''.$l['connect_error'].'\',1);							
							}
						});	
						$(this).attr("src","'.$theme['images'].'progress.gif");
						$("#cid"+id).css("display", "none");
						$("#min_entry"+id).css("display", "none");
						$("#min"+id).css("display", "");
						$("#hou_entry"+id).css("display", "none");
						$("#hou"+id).css("display", "");
						$("#day_entry"+id).css("display", "none");
						$("#day"+id).css("display", "");
						$("#mon_entry"+id).css("display", "none");
						$("#mon"+id).css("display", "");
						$("#wee_entry"+id).css("display", "none");
						$("#wee"+id).css("display", "");
						$("#cmd_entry"+id).css("display", "none");
						$("#cmd"+id).css("display", "");				
					}else{
						$(this).attr("src","'.$theme['images'].'save.gif");
						$("#min"+id).css("display", "none");			
						$("#min_entry"+id)
							.val($("#min"+id).text())
							.css("display", "")
							.focus();
						$("#hou"+id).css("display", "none");
						$("#hou_entry"+id)
							.val($("#hou"+id).text())
							.css("display", "")
							.focus();
						$("#day"+id).css("display", "none");
						$("#day_entry"+id)
							.val($("#day"+id).text())
							.css("display", "")
							.focus();
						$("#mon"+id).css("display", "none");
						$("#mon_entry"+id)
							.val($("#mon"+id).text())
							.css("display", "")
							.focus();
						$("#wee"+id).css("display", "none");
						$("#wee_entry"+id)
							.val($("#wee"+id).text())
							.css("display", "")
							.focus();
						$("#cmd"+id).css("display", "none");
						$("#cmd_entry"+id)
							.val($("#cmd"+id).text())
							.css("display", "")
							.focus();						
					}
				});			
			});
		// ]]></script>';

	
}
?>
