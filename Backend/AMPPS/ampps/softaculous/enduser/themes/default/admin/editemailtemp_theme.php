<?php

//////////////////////////////////////////////////////////////
//===========================================================
// emailtemp_theme.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// Version : 1.0
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Date:       8th Mar 2010
// Time:       23:00 hrs
// Site:       http://www.virtualizor.com/ (SOFTACULOUS VIRTUALIZOR)
// ----------------------------------------------------------
// Please Read the Terms of use at http://www.virtualizor.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Ltd.
//===========================================================
//////////////////////////////////////////////////////////////

if(!defined('SOFTACULOUS')){

	die('Hacking Attempt');

}

function editemailtemp_theme(){

global $theme, $globals, $kernel, $user, $l, $error, $emailtemp, $done, $notice, $tempname, $ll, $langs;

softheader($l['<title>']);

echo '<form accept-charset="'.$globals['charset'].'" name="editemailtemp" method="post" action="" class="form-horizontal">
<div class="container-fluid width80"><br /><br />
<div class="sai_main_head text-center">
	<div class="row">
		<div class="col-sm-5 col-md-5 col-xs-5" align="right" style="left:20px;">
			<i class="fa sai-mail fa-2x"></i>
		</div>
		<div class="col-sm-7 col-md-7 col-xs-7" align="left" style="top:5px;">
			'.$l['edittemp'].'
		</div>
	</div>
</div>

<div class="sai_form"><br />';

error_handle($error);

if(!empty($done)){
	echo '<div class="alert alert-success text-center"><img src="'.$theme['images'].'success.gif" /> &nbsp; '.$l['done'].'</div><br />';
}	

echo '
<script>
$(document).ready( function() {
	$("#changelang").change( function() {
		location.href = "'.$globals['index'].'act=editemailtemp&temp='.$tempname.'&editlang="+$(this).val();
	});
});
</script>

<div style="margin-left: 15%; margin-right: 10%;">
	<div class="row">
		<div class="col-sm-2">
			<span class="sai_head pull-right">'.$l['language'].':</span>	
		</div>
		<div class="col-sm-9">
			<select name="changelang" class="form-control" id="changelang">';
			foreach($langs as $k => $v){
				echo '<option value="'.$v.'" '.(empty($_REQUEST['editlang']) && $globals['language'] == $v ? 'selected="selected"' : (@trim($_REQUEST['editlang']) == $v ? 'selected="selected"' : '') ).'>'._ucfirst($v).'</option>';
			}
			echo '</select>
		</div>
	</div><br />
	
	<div class="row">
		<div class="col-sm-2">
			<span class="sai_head pull-right">'.$l['subject'].':</span>	
		</div>
		<div class="col-sm-9">
			<input type="text" class="form-control" name="tempsub" value="'.htmlizer($ll['title']).'" size="73">
		</div>
	</div><br />

	<div class="row">
		<div class="col-sm-2">
			<span class="sai_head pull-right">'.$l['content'].':</span>
		</div>
		<div class="col-sm-9">
			<textarea  class="form-control" cols="70" name="tempcontent" rows="16">'.htmlizer($ll['body']).'</textarea>
		</div>
	</div><br />

	<div class="row">
		<div class="col-sm-2">
			<span class="sai_head pull-right">'.$l['ishtml'].':</span>
		</div>
		<div class="col-sm-9">
			<input type="checkbox" name="ishtml" '.POSTchecked('ishtml', $ll['ishtml']).'></input>
		</div>
	</div><br />

	<div class="row">
		<div class="col-sm-9 col-sm-offset-2">
			<div class="sai_head">
				'.$l['mail_'.$tempname.'_info'].'
			</div><br />
			<div class="sai_head">'.$l['if_note'].'</div>
		</div>
	</div><br />
	<p align="center">
		'.csrf_display().'
		<input type="submit" name="savetemplate" value="'.$l['savetemp'].'" class="flat-butt">&nbsp;&nbsp;
		<input type="button" name="savetemplate" value="'.$l['reset_template'].'" class="flat-butt" onClick="confirm_reset();">
	</p><br />
	</div>
</div><br />

<center><a href="'.$globals['index'].'act=emailtemp"><font class="sai_head">'.$l['temp_overview'].'</font></a></center><br />
</div>
</form>

<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
function confirm_reset(){
	var r = confirm("'.$l['reset_confirm'].'");
	if(r != true){
		return false;
	}else{
		window.location = window.location+"&reset='.$tempname.'";
	}
}

// ]]></script>';

softfooter();

}

?>