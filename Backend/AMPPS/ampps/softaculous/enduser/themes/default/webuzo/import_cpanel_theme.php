<?php

//////////////////////////////////////////////////////////////
//===========================================================
// settings_theme.php
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


function import_cpanel_theme(){

	global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $done ;


softheader($l['<title>']);
	
echo '<div class="bg"><br>
	<div class="row">
		<div class="col-sm-12 sai_main_head text-center"><img src="'.$theme['a_images'].'import_cpanel.png" class="webu_head_img"/>&nbsp;'.$l['import_cpanel'].'</div>
	</div><hr><br>';
		
	if(!empty($done)){
		echo '<div class="alert alert-success">
			<a href="#close" class="close" data-dismiss="alert" aria-lable="close">
				&times;
			</a>
			'.$l['import_done'].'
		</div><br><br>';
	}else{
		echo '<form accept-charset="'.$globals['charset'].'" name="editsettings" method="post" action="" id="editsettings" class="form-horizontal">
			'.error_handle($error, "100%", 0, 1).'
					
			<div class="row">
				<div class="col-sm-5">
					<label for="r_domain" class="sai_head ">'.$l['r_domain'].'</label><br>
					<span class="sai_exp2">'.$l['r_domain_exp'].'</span>
				</div>
				<div class="col-sm-7">
					<input type="text" name="r_domain" id="r_domain" class="form-control" value="'.POSTval('r_domain', '').'" />
				</div>
			</div><br>
			<div class="row">
				<div class="col-sm-5">
					<label for="r_user" class="sai_head ">'.$l['r_user'].'</label><br>
					<span class="sai_exp2">'.$l['r_user_exp'].'</span>
				</div>
				<div class="col-sm-7">
					<input type="text" name="r_user" id="r_user" class="form-control" value="'.POSTval('r_user', '').'" />
				</div>
			</div><br>
			<div class="row">
				<div class="col-sm-5">
					<label for="isbackup" class="sai_head control-label">'.$l['is_backup_avbl'].'</label><br>
					<span class="sai_exp2">'.$l['exp_backup_avbl'].'</span>
				</div>
				<div class="col-sm-7">
					<input type="checkbox" id="isbackup" name="isbackup" '.POSTchecked('isbackup', false).'" />
				</div>
			</div><br>
			<div class="row" id="no_backup">
				<div class="col-sm-5">
					<label for="r_pass" class="sai_head ">'.$l['r_pass'].'</label><br />
					<span class="sai_exp2">'.$l['r_pass_exp'].'</span>
				</div>
				<div class="col-sm-7">
					<div class="input-group">
						<input type="password" name="r_pass" id="r_pass" class="form-control" value="'.POSTval('r_pass', '').'" />
						<span class="input-group-addon" style="padding: 4px 12px" onclick="change_image(this, \'r_pass\')">
							<img src="'.$theme['images'].'eye.png">
						</span>
					</div>
				</div>
			</div>
			<div class="row" id="backup" style="display:none;">
				<div class="col-sm-5">
					<label for="r_backup" class="sai_head ">'.$l['r_backup'].'</label><br />
					<span class="sai_exp2">'.$l['r_backup_exp'].'</span>
				</div>
				<div class="col-sm-7">
					<input type="text" name="r_backup" id="r_backup" class="form-control" value="'.POSTval('r_backup', '').'" />
				</div>
			</div><br>
			<div class="row">
				<div class="col-sm-offset-5 col-sm-7">
					<input type="hidden" name="create_acc" value="1" />
					<input type="submit" id="submitftp" name="create_acc" class="flat-butt" value="'.$l['submit_button'].'" /> 
				</div><br/>
			</div><br>
			<div class="row text-center sai_notice">
				'.$l['note'].'
			</div><br>
		</form>
		
		<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
			$(document).ready(function(){
				$("#isbackup").on("change", function(){
					if($("#isbackup").is(":checked")){
						$("#r_pass").val("");
						$("#no_backup").hide();
						$("#backup").show();
					}else{
						$("#r_backup").val("");
						$("#backup").hide();
						$("#no_backup").show();
					}
				});
			});
	   // ]]></script>
		';
	}
	
	echo '</div>';
	
	softfooter();
}
