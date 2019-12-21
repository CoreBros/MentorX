<?php

// This page is used to create Database and Database user in @webuzo
// It is also used to add database user to a particular database and grant them required privileges.
// Also used for deleting user and database.
//////////////////////////////////////////////////////////////
//===========================================================
// dbmanage_theme.php
//===========================================================
// SOFTACULOUS 
// Version : 1.1
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Date:       10th Jan 2009
// Time:       21:00 hrs
// Site:       http://www.webuzo.com/ (WEBUZO)
// ----------------------------------------------------------
// Please Read the Terms of use at http://www.softaculous.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Inc.
//===========================================================
//////////////////////////////////////////////////////////////

function dbmanage_theme(){
	global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $dbname, $dbuser, $pri_list, $dbdone, $db_list, $db_list_size, $db_with_user_list, $db_user_list, $db_prefix, $db_pri, $is_running;
	
		
	//Ajax part for add DB
	if(optGET('ajaxdb') ){
		if(!empty($error)){			
			echo '0'.current($error);
			return false;
		}
		// Creating new table for display new DB
		if(!empty($dbdone)){
			echo '1'.$l['db_create'];			
			showdb();
			return true;
		}
	}
	
	// Ajax part for add user
	if(optGET('ajax') ){
		if(!empty($error)){			
			echo '0'.current($error);
			return false;
		}
		// Creating new table for display new user
		if(!empty($dbdone)){			
			echo '1'.$l['user_added'];
			showuser();
			return true;
		}
	}
	
	// Ajax part for edit user
	if(optGET('ajaxedit')){
		if(!empty($error)){
			echo '0'.current($error);
			return false;
		}
		if(!empty($dbdone)){
			echo '1'.$l['pass_changed'];
			return true;
		}
	}
	
	// Ajax part for update privaliges
	if(optGET('ajaxpri')){			
		if(!empty($error)){				
			echo '0 '.current($error);
			return false;
		}
		if(!empty($dbdone)){
			echo '1'.$l['db_pri_updated'];	
			showdb();
			return true;			
		}
	}
	
	// Ajax part for delete user
	if(optGET('ajaxdeluser')){				
		if(!empty($error)){				
			echo '0'.current($error);
			return false;
		}
		if(!empty($dbdone)){
			echo '1'.$l['db_user_del'];	
			echo showdb();
			echo "_&_";
			echo showuser();
			return true;			
		}
	}
	
	// Ajax part for delete DB
	if(optGET('ajaxdeldb')){			
		if(!empty($error)){							
			echo '0'.current($error);
			return false;
		}
		if(!empty($dbdone)){
			echo '1'.$l['db_db_del'];	
			showdb();
			return true;			
		}
	}
	
	
	if(optGET('editdb_user')){
		
		$db_list = $softpanel->listdbs();
		$db_user_list = $softpanel->listdbusers();
		echo '<hr>
		<div style="background-color:#FFF;">
					<div class="row" style="margin-top:-10px;">
						<div class="sai_sub_head"><center><img src="'.$theme['a_images'].'adddb.png" alt="" />&nbsp;' . $l['user_db_add_label'] . '</center>
					</div><br/>';
		if (count($db_list) > 0 && count($db_user_list) > 0){
				echo '<form accept-charset="'.$globals['charset'].'" name="importsoftware" method="post" action="" class="form-horizontal">
					<div class="row">
						<div class="col-sm-5">
							<label class="sai_head" for="sel_user">'.$l['user_label'].'</label>
						</div>
						<div class="col-sm-7">
							<select name="sel_user" id="sel_user" class="form-control">';
								foreach ($db_user_list as $k => $v)	{
									echo '<option value="'.$k.'" '.((!empty($_POST['sel_user']) && $_POST['sel_user'] == $k) ? 'selected="selected"' : '').'>'.$v.'</option>';
								}
							echo '</select>
						</div>     	
					</div><br/>
					<div class="row">
						<div class="col-sm-5">
							<label class="sai_head" for="sel_db">'.$l['db_set_label'].'</label>
						</div>
						<div class="col-sm-7">
							<select name="sel_db" id="sel_db" class="form-control">';
								foreach ($db_list as $k => $v)	{
									echo '<option value="'.$k.'" '.((!empty($_POST['sel_db']) && $_POST['sel_db'] == $k) ? 'selected="selected"' : '').'>'.$v.'</option>';
								}
							echo '</select>
						</div>
					</div><br/>						
					<div class="row">
						<div class="col-sm-offset-5 col-sm-7">
							<input type="button" class="flat-butt" id="submit1" style="cursor:pointer" name="submitselectuser" value="'.$l['submitselectuser'].'" />
						</div>
					</div>
				</form>					
		<script language="javascript" type="text/javascript"><!-- // --><![CDATA[				
				// For popup			
				$("#submit1").click(function(){
					var dbname = ($("#sel_db").val());
					var dbuser = ($("#sel_user").val());
					show_popup(dbname, dbuser, "sai_popup");
				});									
			// ]]></script>';
		}else{
			echo '<center><h4><b>'. $l['err_nodata'].'</b></h4></center>';
		}
		echo '</div>';
		return true;
	}
	// Privaliges page for popup		
	if(optGET('editpri')){
	echo '<script language="javascript" type="text/javascript" ><!-- // --><![CDATA[						
			$(document).ready(function(){	
				$("#submitpri").click(function() {
					$("#comsg").css("display", "none");	
					$("#ermsg").css("display", "none");							
					$("#submit_pri_loader").css("display", "");	
					var prilist = Array();				
					ids = new Array("'.implode('", "', $pri_list).'");				
					for(x in ids){
						if($_("pri["+ids[x]+"]").checked){													
							prilist[x] = ids[x];							
						}
					}
					var host = ($("#selecttype").val());				
					if(host == "Use text field"){					
						host =($("#hname").val());
					}			
					var w_l = window.location.toString();				
					if(w_l.indexOf("#") > 0){
						w_l = w_l.substring(0, w_l.indexOf("#"));
					}					
					$.ajax({
						type: "POST",
						url: w_l+"&submitpri=1&ajaxpri=1 ",					
						data: "dbname='.$dbname.'&dbuser='.$dbuser.'&host=" +host+"&prilist=" +prilist,
						// checking for error
						success: function(data){												
							$("#submit_pri_loader").css("display", "none");								
							var result = data.substring(0,1);	
							if(result == "1"){
							var msg = data.substring(1,data.indexOf("<table"));
							var output = data.substring(data.indexOf("<table"));								
								$("#comsg").css("display", "");
								$("#comsg").html(msg);
								$("#showdbtab").html(output);
							}	
							if(result == "0"){	
								var msg = data.substring(1);
								$("#ermsg").css("display", "");
								$("#ermsg").html(msg);
							}						
						},
						error: function() {
							message_box.show_message("Error",\''.$l['connect_error'].'\',1);						
						}															
					});	
				});	
				$("#chk_table tr").click(function(e){				
					var $checkbox = $(this).find(":checkbox");
					$("#chk_table:checkbox").not($checkbox).removeAttr("checked");
					if (e.target.type == "checkbox") {
						$checkbox.attr("checked");
					}else{
						$checkbox.attr("checked", !$checkbox.attr("checked"));
						$(this).filter(":has(:checkbox)").toggleClass("selected", $checkbox.attr("checked"));
					}				
				});
			});
		</script>';
		echo '
		<div class="ui_titlebar" style="width:100%">
			<a title="Close" class="close"><img src="' . $theme['images'] . 'remove.gif" style="cursor:pointer; float:right; margin-right:-10px;" alt="close" height="20" width="20" onclick="popup_close();" /></a>			
			<center class="sai_tit"><img src="'.$theme['images'].'mysql_1.gif" />&nbsp; ' . $l['db_headling_pri'] . ' For Database '.$dbname.' To User '.$dbuser.'</center>
			<center id="comsg" style="display:none" class="sai_notice"></center>
			<center id="ermsg" style="display:none; background-color: #FF9999;" class="sai_notice"></center>
		</div>
		<table width="100%" class="table" id="db_privileges">
			<thead style="background:#EFEFEF;" class="sai_head2" >
				<tr>
					<th>'.$l['db_pri'].'</th> 
					<th>'.$l['pri_option'].'<input type="checkbox" onclick="checkall(this);" style="float:right;margin-right:30px;" id="checkall" /></th>
				</tr>
			</thead>';
			foreach ($pri_list as $key => $value){	
				$k = ucfirst(strtolower($value)) . '_priv';
				$check[$key] = (isset($db_pri[$k]) && $db_pri[$k] == 'Y') ?  'checked="checked"' : '';
				$label[$key] = ucfirst(str_replace('_', ' ', strtolower($value)));
			}
			echo'
			<tbody>
				<tr>
					<td width="50%" id="part-1">
						<table class="table table-hover table-hover-moz" id="chk_table" width="100%">';
							for($j=0; $j<=((count($pri_list)/2)-1); $j++){	
							echo '<tr>
								<td width="70%">'. $label[$j]. '</td>
								<td align="center" width="25%"><input '. $check[$j] .' type="checkbox" name="pri['.$pri_list[$j].']" id="pri['.$pri_list[$j].']" value="Y" /></td>
							</tr>';							
							}
						echo'</table>
					</td>	
					<td width="50%" id="part-2">
						<table class="table table-hover table-hover-moz" id="chk_table" width="110%">';
						for($j=((count($pri_list)/2)); $j<=count($pri_list)-1; $j++){	
							echo '<tr>
								<td width="70%">'. $label[$j] .'</td>
								<td align="center" width="25%"><input ' . $check[$j]. ' type="checkbox" name="pri['.$pri_list[$j].']" id="pri['.$pri_list[$j].']" value="Y" /></td>
							</tr>';							
						}
						echo'
						</table>
					</td>	
				</tr>
			</tbody>
		</table>';	
		echo'
		<form accept-charset="'.$globals['charset'].'" name="importsoftware" method="post" action="" class="form-horizontal">
			<div class="row">
				<div class="col-sm-3">
					<label class="sai_head" for="selecttype">'.$l['select_host'].'</label> 
				</div>		
				<div class="col-sm-4">							
					<select name="selecttype" id="selecttype" onchange="disp_type(this.value)" class="form-control">
						<option value="'.$l['local'].'" '.($db_pri['Host'] == $l['local'] ? 'selected=selected' : '').'>'.$l['local'].'</option>
						<option value="'.$l['anyhost'].'" '.($db_pri['Host'] == '%' ? 'selected=selected' : '').'>'.$l['anyhost'].'</option>
						<option value="'.$l['text'] .'"  '.(($db_pri['Host'] != $l['local'] && $db_pri['Host'] != '%' && $db_pri['Host'] != '' ) ? 'selected=selected' : '').'>'.$l['text'] .'</option>		
					</select>								
				</div>
				<div class="col-sm-5">
					<input type="text" id="hname" name="hname" id="address" '.(($db_pri['Host'] != $l['local'] && $db_pri['Host'] != '%' && $db_pri['Host'] != '' ) ? 'value='.$db_pri['Host'].'' :  'style="display:none" ').' class="form-control"/>			
				</div>
			</div><br/>
			<div class="row">
				<p align="center"><input type="button" class="flat-butt" id="submitpri" style="cursor:pointer" name="submitpri" value="'.$l['submitpri'].'" />&nbsp;<img id="submit_pri_loader" src="'.$theme['images'].'progress.gif" style="display:none" /></p>
			</div>
		</form>';	
		return true;
	}
		
	softheader($l['<title>']);
	echo '<style>
	.ui_titlebar {
		padding: 0.4em 1em;
		background-color: #CCCCCC;
		border: 1px solid #AAAAAA;
		color: #222222;
		font-weight: bold;
		border-radius: 4px;
	}	
	.sai_popup {
		position:fixed;
		background:#FFFFFF;
		border:#666 1px solid;
		display:none;
		z-index:10000;
		min-height:200px;
		padding:5px;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
	}
	.close {
		float:right;
		position:relative;
		z-index:99999;
		margin:3px 6px 0;
	}
	a.selected {
		border-radius: 5px;
		border :2px solid #B8B8B8;			
		background: #EFEFEF;		
		padding: 8px;		
		font-size:18px;
		color:#333333;
		margin-top:20px;
		margin-bottom:5px;
		font-family: "Lucida Grande","Lucida Sans Unicode",Helvetica,Arial,Verdana,sans-serif;		
	}	
	.heading_a{
		border-radius: 5px;
		border :2px solid  #FFFFFF;			
		background: #FFFFFF;
		padding: 8px;	
		font-size:18px;
		color:#333333;
		margin-top:20px;
		margin-bottom:5px;
		font-family: "Lucida Grande","Lucida Sans Unicode",Helvetica,Arial,Verdana,sans-serif;
	}
	#showdbtab{
		width:100%;
		float: center;
		padding:20px;
	}
	#dbtouser_disp{
		width:100%;
		padding-top:0px;
		padding-bottom:10px;
		padding-left:20px;
		padding-right:20px;
	}
	#panel-heading-part{
		background-color: #FFFFFF;
		border-bottom: 0px solid #DDD;
	}
	#panel-background{
		border-color: #FFFFFF;
		box-shadow: 0px 0px 0px #ffffff;
		height:58px;
		border-bottom: 0px solid #DDD;
		background-color: #DDD;
	}
	.no-border-bottom{
		border-bottom: 0px solid #DDD;
	}
	.tab-center{
		margin: 0 auto;
		background-color: #FFFFFF;
	}
	#panel-body-part{
		border-top:2px solid #DDD; 
		width:100%;
	}
	#adddb{
		width: 100%;
		padding:20px;
	}
	#showusertab{
		width:100%;
		float: center;				
		padding:20px;
	}
	#dbtouser{
		width:100%;
		padding:20px;
	}
	.with-nav-tabs.panel-default .nav-tabs > li > a,
	.with-nav-tabs.panel-default .nav-tabs > li > a:hover,
	.with-nav-tabs.panel-default .nav-tabs > li > a:focus {
	color: #777;
	}
	.with-nav-tabs.panel-default .nav-tabs > .open > a,
	.with-nav-tabs.panel-default .nav-tabs > .open > a:hover,
	.with-nav-tabs.panel-default .nav-tabs > .open > a:focus,
	.with-nav-tabs.panel-default .nav-tabs > li > a:hover,
	.with-nav-tabs.panel-default .nav-tabs > li > a:focus {
	color: #777;
	background-color: #DDD;
	border-color: transparent;
	}
	.with-nav-tabs.panel-default .nav-tabs > li.active > a,
	.with-nav-tabs.panel-default .nav-tabs > li.active > a:hover,
	.with-nav-tabs.panel-default .nav-tabs > li.active > a:focus {
	color: #555;
	background-color: #DDD;
	border-color: #ccc;
	}
	@media screen and (min-width:320px) and (max-width: 560px) {
		.sai_popup{
			top: 50%;
			left: 50%;
			width:80%;
		}
		ul li {
			width:100%;
		}
		#panel-body-part{
			margin-top:250px;
		}
	}
	@media screen and (min-width:560px) and (max-width: 1030px) {
		ul li {
			width:50%;
		}
		#panel-body-part{
			margin-top:100px;
		}		
	}			
	</style>';
	echo '<script language="javascript" type="text/javascript">
	     	
		// For msgbox MboxObject(fYes, fNo)
		var message_box = new MboxObject(deleteDomain,"");
		
		function deleteDomain(delact){
			delaction = delact.substr(0,3)
			delrecord = delact.substr(3);						
			if(delaction == "did"){
				$(\'#did\'+delrecord).attr("src","'.$theme['images'].'progress.gif");
				url = "&delete_db=" +delrecord+"&ajaxdeldb=1";
			}else{
				$(\'#uid\'+delrecord).attr("src","'.$theme['images'].'progress.gif");
				url = "&delete_dbuser=" +delrecord+"&ajaxdeluser=1";	
			}
			jQuery(\'.sai_message_box\').hide(\'fast\');		
			var w_l = window.location.toString();				
			if(w_l.indexOf("#") > 0){
				w_l = w_l.substring(0, w_l.indexOf("#"));
			}					
			$.ajax({
				type: "POST",
				url: w_l+url,						
				success: function(data){													
					var result = data.substring(0,1);										
					var msg = data.substring(1,data.indexOf("<table"));

					if(result == "1"){
						var output = data.substring(data.indexOf("<table"));
						message_box.show_message("Delete",msg,2);
						if(delaction == "did"){
							$("#showdbtab").html(output);
						}else{
							output = output.split("_&_");
							$("#showdbtab").html(output[0]);
							$("#showusertab").html(output[1]);
						}
					}
					if(result == "0"){
						message_box.show_message("Error",msg,1);																																			
					}
				},
				error: function() {
					message_box.show_message("Error",\''.$l['connect_error'].'\',1);						
				}															  
			});					
		}
	
		// for deleting db or user		
		function deleterecord(delact){			
			delaction = delact.substr(0,3);
			if(delaction == "did"){	
				message_box.delete_message (\'Warning\',\''.$l['db_del_conf'].'\', delact);
			}else{
				message_box.delete_message (\'Warning\',\''.$l['dbuser_del_conf'].'\', delact);
			}		
		};
		
		// Function for checkbox check all
		ids = new Array("'.implode('", "', $pri_list).'");
		function checkall(checker){	
			for(x in ids){
				$_("pri["+ids[x]+"]").checked = checker.checked;
			}				
		};
		
		// Function for show host
		function disp_type(str){
			if(str == "Use text field"){
				$("#hname").css("display", "");
			}else{
				$("#hname").css("display", "none");
			}
		} ;	
		
		// Function for close popup
		function popup_close(){
			//location.reload(true);			
			$(".sai_popup").fadeOut(500);
			$("#comsg").css("display", "none");	
			$("#ermsg").css("display", "none");
		};						
		
		// Function for show popup
		function show_popup(dbname, dbuser, classnm)
		{			 																
			var w_l = window.location.toString();	
			if(w_l.indexOf("#") > 0){
				w_l = w_l.substring(0, w_l.indexOf("#"));
			}			
			$.ajax({
				type: "POST",
				url: w_l+"&editpri=1",					
				data: "dbname="+dbname+"&dbuser="+dbuser,			
				success: function(data){
					$("."+classnm).html(data);	
					$("."+classnm).fadeIn(500);
				},
				error: function() {
					message_box.show_message("Error",\''.$l['connect_error'].'\',1);						
				}	
			});
		};	
						
		function mod_escape(value) {
		  value = escape(value);
		  return value.replace(/\+/g, \'%2B\');
		}
		
		$(document).ready(function(){	
 		
			// For selecting tab
			try{
				var select_tab = window.location;
				if(select_tab.length > 0){
					$(select_tab+"_a").addClass("active");
					$(select_tab).addClass("in active");
				}else{
					$("#currentdb_a").addClass("active");
					$("#currentdb").addClass("in active");
				}
			}catch(e){}
			if(window.location.hash == "#adddb")
			{ 
				$("#currentdb_a").removeClass("active");
				$("#currentdb").removeClass("in active");				
				$("#adddb_a").addClass("active");
				$("#adddb").addClass("in active");
			}
						
			// for adding db	
			$("#submitdb").click(function() {
				$("#createdb").css("display", "");	
				var db = ($("#db").val());
				var w_l = window.location.toString();				
				if(w_l.indexOf("#") > 0){
					w_l = w_l.substring(0, w_l.indexOf("#"));
				}					
				$.ajax({
					type: "POST",
					url: w_l+"&submitdb=1&ajaxdb=1",					
					data: "db="+db,
					// checking for error
					success: function(data){
						$("#createdb").css("display", "none");						
						var result = data.substring(0,1);
						if(result == "1"){
							$_("db").value="";				
							var msg = data.substring(1,data.indexOf("<table"));
							var output = data.substring(data.indexOf("<table"));							
							message_box.show_message("Done",msg,2);
							$("#showdbtab").html(output);
							$(".sai_altrowstable tr").mouseover(function(){
								var old_class = $(this).attr("class");		
								$(this).attr("class", "sai_tr_bgcolor");		
								$(this).mouseout(function(){
									$(this).attr("class", old_class);
								});
							});																											
						}
						if(result == "0"){	
							$("#createdb").css("display", "none");
							var msg = data.substring(1);
							message_box.show_message( "Error",msg,1);
						}
					},
					error: function() {
						message_box.show_message("Error",\''.$l['connect_error'].'\',1);						
					}															
				});					
			});				
			// for adding user	
			$("#submituser").click(function() {	
				$("#createuser").css("display", "");			
				var dbuser = ($("#dbuser").val());				
				var userpass = ($("#dbpassword").val());
				userpass =  mod_escape(userpass);
				var w_l = window.location.toString();				
				if(w_l.indexOf("#") > 0){
					w_l = w_l.substring(0, w_l.indexOf("#"));
				}					
				$.ajax({
					type: "POST",
					url: w_l+"&submituserdb=1&ajax=1",					
					data: "dbuser="+dbuser+"&dbpassword=" +userpass,
					// checking for error
					success: function(data){
						$("#createuser").css("display", "none");																		
						var result = data.substring(0,1);														
						if(result == "1"){	
							$_("dbuser").value="";
							$_("dbpassword").value="";			
							var msg = data.substring(1,data.indexOf("<table"));							
							var output = data.substring(data.indexOf("<table"));							
							message_box.show_message("Done",msg,2);
							check_pass_str_wuzo($("#dbpassword"), $("#pass-prog-bar"));
							var height = $(".tab-content").height();
							$(".tab-content").css({ "height" :  height + 50 });
							chkdbvalue();							
							$("#showusertab").html(output);
							
							$(".sai_altrowstable tr").mouseover(function(){
								var old_class = $(this).attr("class");		
								$(this).attr("class", "sai_tr_bgcolor");		
								$(this).mouseout(function(){
									$(this).attr("class", old_class);
								});
							});																											
						}
						if(result == "0"){
							$("#createuser").css("display", "none");	
							var msg = data.substring(1);
							message_box.show_message( "Error",msg,1);
						}
					},	
					error: function() {
						message_box.show_message("Error",\''.$l['connect_error'].'\',1);						
					}														
				});													
			});
		
		});		
		
		function chkdbvalue(){			
			var w_l = window.location.toString();
			if(w_l.indexOf("#") > 0){
				w_l = w_l.substring(0, w_l.indexOf("#"));
			}
			$.ajax({
				type: "POST",
				url: w_l+"&editdb_user=1",								
				success: function(data){																		
					$("#dbtouser_disp").css("display", "");									
					$("#dbtouser_disp").html(data);	
				},
				error: function() {
					message_box.show_message("Error",\''.$l['connect_error'].'\',1);						
				}	
			});					
		}			
	</script>
	<div class="bg" style="padding:0px;">';
	
	// Check for the service working or not
	if(empty($is_running)){
		echo '<div class="row" style="margin-top:10px">
				<div class="col-sm-12"><center>
					<div class="alert alert-danger " style="width:95% ; padding:10px">
						<a href="'.$globals['ind'].'act=services" style="margin-top:4px; font-size:15px; text-decoration:none"><center>'.$l['service_stop'].'</center></a>
					</div>
				</center></div>
			</div>';
	}
	
		echo '<div class="panel with-nav-tabs panel-default" id="panel-background"> 
			<div class="panel-heading" id="panel-heading-part">
				<ul class="nav nav-tabs no-border-bottom tab-center">
					<li align="center" id="currentdb_a"><a href="#currentdb" data-toggle="tab" class="heading_a" style="text-decoration:none">'.$l['db_headling'].'</a></li>
					<li align="center" id="adddb_a"><a href="#adddb" data-toggle="tab" class="heading_a"  style="text-decoration:none">'.$l['db_add_label'].'</a></li>
					<li align="center" id="currentuser_a"><a href="#currentuser" data-toggle="tab" class="heading_a" style="text-decoration:none">'.$l['db_user_add_label'].'</a></li>
					<li align="center" id="dbtouser_a"><a href="#dbtouser" data-toggle="tab" class="heading_a" style="text-decoration:none" onclick="chkdbvalue();">'.$l['user_db_add_label'].'</a></li>
				</ul>
			</div>
		</div>	
		
		<div class="panel-body" id="panel-body-part">
			<div class="tab-content" style="height: auto;">
				<div class="tab-pane fade" id="currentdb">
					<div class="row"><div class="sai_sub_head"><center><img src="'.$theme['a_images'].'database.png" />&nbsp; ' . $l['db_headling'] . '</center></div></div>
					<div class="row">
						<div class="col-sm-12">
							<div id="showdbtab">';
								showdb();
							echo '</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="adddb">';											
					echo'<form accept-charset="'.$globals['charset'].'" name="importsoftware" method="post" action="" class="form-horizontal">
					<div class="row" style="margin-top:-15px;">
						<div class="sai_sub_head"><center><img src="'.$theme['a_images'].'adddb.png" alt="" />&nbsp;' . $l['db_add_label'] . '</center></div>
					</div><br/>
					<div class="row">
						<div class="col-sm-4">
							<label class="sai_head" for="db">'.$l['db_label'].'</label>
						</div>
						<div class="col-sm-6">'.
							(!empty($db_prefix) ? '
							<div class="input-group">
								<span class="input-group-addon" style="background-color: white;"><span id="domainname">'.$db_prefix.'</span></span>' : '').'
								<input type="text" name="db" id="db" class="form-control" value="'.POSTval('db', '').'" style="border-radius:0px 5px 5px 0px;height:35px;" /><br/>'.
							(!empty($db_prefix) ? '</div>' : '').'
						</div>
					</div><br/>
					<div class="row">
						<p align="center"><input type="button" class="flat-butt" id="submitdb" style="cursor:pointer" name="submitdb" value="'.$l['submitdb'].'" /> &nbsp;<img id="createdb" src="'.$theme['images'].'progress.gif" style="display:none"></p>	
					</div>
					</form>
				</div>';
					
				echo '<div class="tab-pane fade" id="currentuser">';					
					echo '<div class="row"><div class="col-sm-12"><div class="sai_sub_head"><center><img src="'.$theme['a_images'].'database.png" />&nbsp; ' . $l['db_user_headling'] . '</center></div></div></div>
						<div id="showusertab">';
							showuser();
						echo '</div>
				</div>
				<div class="tab-pane fade" id="dbtouser">';
					echo'<form accept-charset="'.$globals['charset'].'" name="importsoftware" method="post" action="" class="form-horizontal">
						<div class="row" style="margin-top:-15px;"><div class="sai_sub_head"><center><img src="'.$theme['a_images'].'adddb.png" alt="" /> &nbsp;' . $l['db_user_create_label'] . '</center></div></div><br/>
						<div class="row">
							<div class="col-sm-5">
								<label class="sai_head" for="dbuser">'.$l['db_user_label'].'</label>
							</div>
							<div class="col-sm-6">'.
								(!empty($db_prefix) ? '
								<div class="input-group"><span class="input-group-addon" style="background-color: white;"><span id="domainname">'.$db_prefix.'</span></span>' : '').'
									<input type="text" name="dbuser" id="dbuser" class="form-control" />'.
								(!empty($db_prefix) ? '</div>' : '').'
							</div>
						</div><br/>
						<div class="row">
							<div class="col-sm-5">
								<label class="sai_head" for="dbpassword">'.$l['db_user_password'].'</label>
							</div>
							<div class="col-sm-6">
								<div class="input-group">
									<input type="password" name="dbpassword" id="dbpassword" class="form-control" onkeyup="check_pass_str_wuzo($(\'#dbpassword\'), $(\'#pass-prog-bar\'))" />
									<span class="input-group-addon" style="padding: 4px 12px" onclick="change_image(this, \'dbpassword\')">
									<img src="'.$theme['images'].'eye.png">
									</span>
								</div>
								<div class="progress">
									<div class="progress-bar progress-bar-danger" id="pass-prog-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0">
										<span class="sr-only">0% Complete (danger)</span>
										<span id="progress-bar-text" style="color:#000;"></span>
									</div>
								</div>
							</div>
							<div class="col-sm-1">
								<a href="javascript: void(0);" onclick="$_(\'dbpassword\').value=randstr_wuzo(10);check_pass_str_wuzo($(\'#dbpassword\'), $(\'#pass-prog-bar\'));return false;" title="'.$l['randpass'].'"><img src="'.$theme['images'].'key.png" style="padding-top:9px;"/></a>
							</div>
						</div><br/>
						<div class="row">
							<div class="col-sm-offset-5 col-sm-7">
								<input type="button" class="flat-butt" id="submituser" style="cursor:pointer" name="submituserdb" value="'.$l['submituserdb'].'" /> &nbsp;<img id="createuser" src="'.$theme['images'].'progress.gif" style="display:none">
							</div>
						</div>
					</form>
					<div class="row"><div class="col-sm-12"><div id="dbtouser_disp"></div></div></div>
				</div>
			</div>
		</div>
	</div><!--end of bg class-->
	
	<div class="row">
		<div class="sai_popup"></div>
	</div>';
	
	softfooter();
}

function showdb(){
	global $user, $l, $theme, $softpanel, $dbname, $dbuser, $db_list, $db_list_size, $db_with_user_list;
		
	$db_list = $softpanel->listdbs();
	$db_list_size = $softpanel->listdbsize();	
	$db_with_user_list = $softpanel->getAllDbUsers();
	echo '
	<table border="0" cellpadding="6" cellspacing="1" width="100%" class="table table-hover table-hover-moz" align="center">
		<thead style="background:#EFEFEF;" class="sai_head2">
			<tr>
				<th width="40%">'.$l['db_name'].'</th>
				<th width="10%">'.$l['db_size'].'</th>
				<th width="40%">'.$l['db_user'].'</th>
				<th width="10%" style="text-align:right">'.$l['db_option'].'</th>
			</tr>
		</thead>
		<tbody>';
		if(empty($db_list)){
			echo '<tr><td colspan=4><center><span style="font-size:15px" >'.$l['no_db'].'</span></center></td></<tr>';
		}else{
			$i=1;
			foreach ($db_list as $key => $value){
				$user = NULL;
				echo '<tr id="tr'.$value.'">
					<td>'.$value.'</td>
					<td>'.($db_list_size[$value]['size'] == 0 ? "0.00 MB" : $db_list_size[$value]['size']).'</td>';
					echo '<td class="endurl">';
					$tmp_holder = array();
					foreach ($db_with_user_list[$value] as $key => $user){
						$tmp_holder[] = '<a href="#" onclick=show_popup(\''.$value.'\',\''.$user.'\',"sai_popup");>' . $user . '</a>';
					}
					echo implode(', ', $tmp_holder).'</td>';
					echo '<td align="right"><img title="Delete" class="delete" id="did'.$value.'" style="cursor:pointer" src="' . $theme['images'] . 'remove.gif" onclick="deleterecord(this.id);"  /></td>
				</tr>';
				$i++;
			}

		}
		echo '</tbody>
	</table>';
}

function showuser(){
	global $user, $l, $theme, $softpanel, $dbname, $dbuser;
	$db_user_list = $softpanel->listdbusers();
	echo '
	<table border="0" cellpadding="8" cellspacing="1" width="100%" class="table table-hover table-hover-moz td_font" id="usertab" align="center">
		<thead style="background:#EFEFEF;" class="sai_head2">
			<tr>
				<th width="60%">'.$l['db_user_name'].'</th>
				<th width="30%"></th>
				<th colspan="3" width="10%" style="text-align:right">'.$l['db_option'].'</th>
			</tr>
		</thead>
		<tbody>';
		if(empty($db_user_list)){
			echo '<tr><td colspan=3><center><span style="font-size:15px" >'.$l['no_dbuser'].'</span></center></td></<tr>';
		}else{
			$i=1;
			foreach ($db_user_list as $key => $value)
			{
				echo '<tr id="ur'.$key.'" ><td >'.$value.'</td>
				<td width="90%">
					<label id="lbl_pass'.$i.'" style="display:none;">'.$l['new_pass'].' &nbsp; : &nbsp; </label><input type="password" id="chng_pass'.$i.'" style="width:150px; display:none;" >
						<input type="hidden" id="hdn'.$i.'" value="'.$i.'" />
						<input type="hidden" id="hdn_user'.$i.'" value="'.$key.'" />
				</td>
				<td width="2%">
					<img title="Cancel" class="cancel" id="cid'.$i.'" src="'.$theme['images'].'del.gif" style="display:none; cursor:pointer;"  />
				</td>
				<td width="2%">
					<img title="Change Password" class="edit" id="uid'.$i.'" src="'.$theme['images'].'editdetail.gif" style="cursor:pointer" />
				</td>
				<td width="2%">
					<img title="Delete" class="delete" id="uid'.$key.'" style="cursor:pointer" src="' . $theme['images'] . 'remove.gif" onclick="deleterecord(this.id);" />
				</td>
				</tr>';
				$i++;
			}
		}
		echo '</tbody>
	</table>
	<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
		$(document).ready(function(){
			
			// Change DB user password
			$(".edit").click(function(){
				
				var id = $(this).attr(\'id\');
				id = id.substr(3);
				var hidn_val = $("#hdn"+id).val();
				var edit_record = $("#hdn_user"+id).val();
				
				$("#cid"+hidn_val).css("display", "");
				$("#chng_pass"+hidn_val).css("display", "");
				$("#lbl_pass"+hidn_val).css("display", "");
				
				if($(this).attr(\'src\') == "'.$theme['images'].'save.gif"){
					var cpass = mod_escape($(\'#chng_pass\'+hidn_val).val());
					var w_l = window.location.toString();	
					if(w_l.indexOf("#") > 0){
						w_l = w_l.substring(0, w_l.indexOf("#"));
					}
					
					$.ajax({
						type: "POST",
						url: w_l+"&ajaxedit=1&change_user_pass=1",
						data: "db_user="+edit_record+"&dbpass="+cpass,
						// Checking for error
						success: function(data){
							var result = data.substring(0,1);
							var msg = data.substring(1);
							if(result == "0"){
								message_box.show_message( "Error ",msg,1);
								$(\'#uid\'+hidn_val).attr("src","'.$theme['images'].'editdetail.gif");
							}
							if(result == "1"){
								message_box.show_message( "Done ",msg,2);
								$(\'#chng_pass\'+hidn_val).html($("#chng_pass"+hidn_val).val());
								$(\'#uid\'+hidn_val).attr("src","'.$theme['images'].'editdetail.gif");
								$("#chng_pass"+hidn_val).css("display", "none");
								$("#lbl_pass"+id).css("display", "none");
								$("#cid"+id).css("display", "none");
							}
						},
						error: function(){
							message_box.show_message("Error",\''.$l['connect_error'].'\',1);
						}
					});
					$(this).attr("src","'.$theme['images'].'progress.gif");
				}else{
					$(this).attr("src","'.$theme['images'].'save.gif");
					$("#chng_pass"+hidn_val)
						.val($("#chng_pass"+hidn_val).text().substring(0, $("#chng_pass"+hidn_val).text().length - 1))
						.css("display", "")
						.focus();
				}
			});
			
			//Cancel action
			$(".cancel").click(function() {
				var id = $(this).attr(\'id\');
				id = id.substr(3);
				$("#cid"+id).css("display", "none");
				$("#chng_pass"+id).css("display", "none");
				$("#lbl_pass"+id).css("display", "none");
				$(\'#uid\'+id).attr("src","'.$theme['images'].'editdetail.gif");
			});
		});
	// ]]></script>';
}
?>
