<?php 

//////////////////////////////////////////////////////////////
//===========================================================
// import_webuzo_theme.php
//===========================================================
// SOFTACULOUS 
// Version : 2.4.3
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Jignesh Sawant
// Date:       22nd August 2018
// Time:       12:32 hrs
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

function import_webuzo_theme(){
	
	global $user, $globals, $l, $theme, $softpanel, $error, $done, $migrate_log;
	
	softheader($l['<title>']);
	
	echo '<style>
	.sai_popup {
		position:absolute;
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
	.innertabs{
		width:100%;
		float: center;				
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
	.fa-rotate-360{
	-webkit-transform: rotate(360deg);
	-moz-transform: rotate(360deg);
	-ms-transform: rotate(360deg);
	-o-transform: rotate(360deg);
	transform: rotate(360deg);
	transition: .8s;
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
	
	echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
			$(document).ready(function(){
				$("#import_webuzo_head").addClass("active");
				$("#import_webuzo").addClass("in active");
				
				$("#migrate_type").change(function(){
					var migrate_type = $(this).val();
					if(migrate_type == "full" || migrate_type == "databases"){
						$("#mysql_row").show();
						$("#mysql_pass").prop("required", true);
					}else{
						$("#mysql_row").hide();
						$("#mysql_pass").prop("required", false);
					}
				});				
			});
			
		// Remove hash from URL before making ajax request
		function remove_hash(w_l){
			if(w_l.indexOf("#") > 0){
				var unhashed_w_l = w_l.substring(0, w_l.indexOf("#"));
				return unhashed_w_l;
			}
			return w_l;
		}	
		
		var message_box = new MboxObject();
		
		//get backup logs (and clear them if needed)
		function get_logs(id){
			$("#trace_prog").css("display", "");
			if(id == "clear_log"){
				dataval = "clearlog=1";
			}else{
				dataval = "";
			}
			
			var w_l = remove_hash(window.location.toString());
			$.ajax({
				type: "POST",
				url: w_l+"&api=json",
				data: dataval,
				dataType : "json",
				// checking for error
				success: function(data){
					$("#trace_prog").css("display", "none");
					if("done" in data){
						if(id == "clear_log"){
							message_box.show_message("Delete","'.$l['logs_cleared'].'",2);
						}
						$("#showlog").text(data["migrate_log"]);
					}else{
						message_box.show_message("Error",data["error"],1);
					}
				},
				error: function(){
					message_box.show_message("Error",\''.$l['connect_error'].'\',1);
				}
			});
		}

	// ]]></script>';
	
	echo '<div class="bg" style="padding:0px;">
		<div class="panel with-nav-tabs panel-default" id="panel-background"> 
			<div class="panel-heading" id="panel-heading-part">
				<ul class="nav nav-tabs no-border-bottom tab-center">
					<li align="center" id="import_webuzo_head"><a href="#import_webuzo" data-toggle="tab" class="heading_a" style="text-decoration:none">'.$l['import_webuzo'].'</a></li>
					<li align="center" id="logs_head"><a href="#logs" data-toggle="tab" class="heading_a" style="text-decoration:none">'.$l['logs'].'</a></li>
				</ul>
			</div>
		</div>
		
		<div class="panel-body" id="panel-body-part">
			<div class="tab-content" style="height: auto;">
		
			<div class="tab-pane fade" id="import_webuzo">
				<div class="row">
					<div class="col-sm-12">
						<div class="sai_sub_head">
							<center><img src="'.$theme['a_images'].'import_cpanel.png" />&nbsp;'.$l['import_from_webuzo'].'</center>
						</div>
					</div>
				</div>
				<hr><br/>';
				if(!empty($error)){
					echo '
					<div id="error_box" class="row">
						<div class="col-sm-offset-1 col-sm-10">
							<div class="alert alert-danger">
								<center><span style="font-size:14px; text-decoration:none;"><a href="#close" class="close" data-dismiss="alert">&times;</a>'.$error.'</span></center>
							</div>
						</div>
					</div><br/>';
				}
				if($done && !empty(optREQ('server_ip'))){
					echo '
					<div id="error_box" class="row">
						<div class="col-sm-offset-1 col-sm-10">
							<div class="alert alert-success">
								<center><span style="font-size:14px; text-decoration:none;"><a href="#close" class="close" data-dismiss="alert">&times;</a>Migration process is started. Check the logs for more info</span></center>
							</div>
						</div>
					</div><br/>';
				}
				echo '
				<div class="row">
					<div class="col-sm-12">
						<form accept-charset="UTF-8" data-toggle="validator" role="form" name="import_from_webuzo" method="post" action="">
						<div class="row">
							<div class="col-sm-offset-1 col-sm-5">
								<label class="sai_head" style="font-size:14px;">'.$l['server_ip'].'</label><br/>
								<span class="sai_exp2" style="font-size:12px">'.$l['server_ip_sub'].'</span>
							</div>
							<div class="col-sm-5">
								<input type="text" name="server_ip" id="server_ip" class="form-control" value="" style="height:35px;" required /><br/>
							</div>
						</div><br/>
						
						<div class="row">
							<div class="col-sm-offset-1 col-sm-5">
								<label class="sai_head" style="font-size:14px;">'.$l['server_pass'].'</label><br/>
								<span class="sai_exp2" style="font-size:12px">'.$l['server_pass_sub'].'</span>
							</div>
							<div class="col-sm-5">
								<input type="password" name="server_pass" id="server_pass" class="form-control" value="" style="height:35px;" required /><br/>
							</div>
						</div><br/>
						
						<div class="row">
							<div class="col-sm-offset-1 col-sm-5">
								<label class="sai_head" style="font-size:14px;">'.$l['server_port'].'</label><br/>
								<span class="sai_exp2" style="font-size:12px">'.$l['server_port_sub'].'</span>
							</div>
							<div class="col-sm-5">
								<input type="number" name="server_port" id="server_port" class="form-control" value="" style="height:35px;" required /><br/>
							</div>
						</div><br/>
						
						<div class="row">
							<div class="col-sm-offset-1 col-sm-5">
								<label class="sai_head" style="font-size:14px;">'.$l['migrate_type'].'</label><br/>
							</div>
							<div class="col-sm-5">
								<select class="form-control" name="migrate_type" id="migrate_type" style="height:35px;">
									<option value="full">Full</option>
									<option value="webuzo_conf">Webuzo Conf</option>
									<option value="user_account">User Account</option>
									<option value="databases">Databases</option>
									<option value="emails">Email Accounts and Data</option>
									<option value="ftp">FTP accounts</option>
								</select><br/>
							</div>
						</div><br/>
						
						<div class="row" id="mysql_row">
							<div class="col-sm-offset-1 col-sm-5">
								<label class="sai_head" style="font-size:14px;">'.$l['mysql_pass'].'</label><br/>
								<span class="sai_exp2" style="font-size:12px">'.$l['mysql_pass_sub'].'</span>
							</div>
							<div class="col-sm-5">
								<input type="password" name="mysql_pass" id="mysql_pass" class="form-control" value="" style="height:35px;" required /><br/>
							</div>
						</div><br/>
						
						<div class="row">
							<div class="col-sm-offset-6 col-sm-6">
								<input type="submit" id="submit" name="submit" class="flat-butt" value="'.$l['submit_button'].'" />
							</div>
						</div><br/>
						
						<div class="row text-center sai_notice">
							'.$l['note'].'
						</div><br>
						</form>
					</div>
				</div>
			</div>
			
			<div class="tab-pane fade" id="logs">
				<div class="row">
					<div class="col-sm-12">
						<div class="sai_sub_head">
							<center><img src="'.$theme['a_images'].'login_logs.png" />&nbsp;'.$l['logs'].'</center>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 innertabs" nowrap="nowrap" style="width:97%;">
						<textarea class="form-control" id="showlog" readonly="readonly"; style="height:400px; width:100%; overflow:auto; resize: none;" wrap="off"; >'.$migrate_log.'</textarea>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-offset-5 col-sm-7">
						<input type="button" class="flat-butt" id="get_log" style="cursor:pointer" value="'.$l['refresh_logs'].'" onclick="get_logs();" />
						<input type="button" class="flat-butt" id="clear_log" style="cursor:pointer" value="'.$l['clear_logs'].'" onclick="get_logs(this.id);" />
						<img id="trace_prog" src="'.$theme['images'].'progress.gif" style="display:none">
					</div>
				</div>
			</div>
			
			</div>
		</div>
		
		</div>';
		
		softfooter();
	
}

?>