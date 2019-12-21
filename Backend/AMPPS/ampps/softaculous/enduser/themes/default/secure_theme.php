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

function secure_theme(){

global $theme, $globals, $softpanel, $user, $l, $error, $updates_available, $done, $checked, $is_secured;

softheader($l['<title>']);

echo '

<div class="bg">
	<div class="row">
		<center class="sai_main_head"><img height="48" width="48" src="'.$theme['a_images'].'secure.png" />&nbsp; ' . $l['ampps_secure'] .'<br/></center><hr>
	</div>';
	error_handle($error, '100%');

	if (!empty($done)){
		
		echo '<div align="center" class="alert alert-success" style="font-size:13px;">
				<a href = "#" class="close" data-dismiss="alert">&times;</a>
				' . (empty($is_secured) ? $l['ampps_unsecured'] : $l['ampps_secured']) .  '</div>';
		echo '<br /><a href="'.$globals['ind'].'">' . $l['lbl_home'] .  '</a>';
		
	}else{
		echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
		function showpass(){
			if($_("secure").checked){		
				$_("pass_row").style.display = "";
				$_("conf_row").style.display = "";
			}else{
				$_("pass_row").style.display = "none";
				$_("conf_row").style.display = "none";
			}
		}
		addonload("showpass();");
		
	// ]]></script>
	<form action="" method="post">
	
	<div class="row">		
		<div class="col-sm-5">
			<label for="secure" class="sai_head">'.$l['question'].'</span></label><br/>';	
			if($is_secured==true){
			echo '<span class="sai_exp2">'.$l['is_secure'].'<font color="green">Secured</font></span>';
			}else{	
			echo '<span class="sai_exp2">'.$l['is_secure'].'<font color="red">Unsecured</font></span>';
				}
			echo '
		</div>
		<div class="col-sm-7">			
			<input type="checkbox" name="secure" id="secure" '.POSTchecked('secure', $is_secured).' onclick="showpass(this);">
		</div>
	</div><br />
	
	<div class="row" id="pass_row">			
		<div class="col-sm-5">
			<label for="pass" class="sai_head">'.$l['set_pass'].'</label>
			<br/><span class="sai_exp2">'.$l['set_notify'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="password" id="pass" name="setpass" class="form-control"/>
		</div>
	</div><br />

	<div class="row" id="conf_row">		
		<div class="col-sm-5">
			<label for ="repass" class="sai_head">'.$l['retype_pass'].' </label>
		</div>
		<div class="col-sm-7">
			<input type="password" name="retypepass" id="repass" class="form-control"/>
		</div>
	</div></br>';
	
	if($done==1)
	{
		echo '
		<div class="alert alert-success">'.$l['pass_set'].'</div>';
	}
	echo '
	<div class="row">
		<div class="sai_exp2">&nbsp&nbsp&nbsp&nbsp&nbsp'.$l['note'].'</div>
	</div></br>
	
	<div class="row">
		<center><input type="submit" class="flat-butt" name="submit" value="Submit"/></center>
	</div><br />
	
</div></form></body></html>';
}
softfooter();
}		

