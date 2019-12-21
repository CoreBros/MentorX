<?php

//////////////////////////////////////////////////////////////
//===========================================================
// customscripts_theme.php
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

function customscripts_theme(){

global $theme, $globals, $user, $l, $langs, $skins, $error, $saved, $iscripts, $scripts, $allcatwise, $custom_catwise, $cscripts, $removed;

softheader($l['<title>']);

echo '<div class="container-fluid width80"><br /><br />
<div class="sai_main_head text-center">'.$l['cust_scr'].'</div>
<div class="sai_form"><br />';

error_handle($error);

if(!empty($removed)){
	echo '<div class="alert alert-success text-center"><img src="'.$theme['images'].'success.gif" /> &nbsp; '.$l['cs_removed'].'</div>';	
}

//The necessary JavaScripts
echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
	ids = new Array('.implode(', ', array_keys($cscripts)).');
	function confirm_remove(sid){	
		return confirm("'.$l['confirm_remove'].'");
	};
// ]]></script>';

echo '<form accept-charset="'.$globals['charset'].'" name="updatesoft" method="post" action="">
	<table width="95%" cellpadding="1" cellspacing="0" border="0" style="margin:0px auto;">
		<tr>
		<td colspan="5">
		<table width="100%" class="table table-hover" cellpadding="7">
		<thead style="background:#bdbdbd;">
		<td class="sai_head" width="15%"><b>'.$l['soft_name'].'</b></td>
		<td class="sai_head" width="55%"><b>'.$l['soft_desc'].'</b></td>
		<td class="sai_head" width="10%"><b>'.$l['soft_ins'].' '.$l['soft_ver'].'</b></td>
		<td class="sai_head" width="10%"><b>'.$l['soft_action'].'</b></td>
		</thead>
		</table>
		</td>
		</tr>';
			
foreach($custom_catwise as $cattype => $catscripts){

	if(empty($catscripts)){
		continue;
	}
	
	echo '<tr>
			<td colspan="4" align="center">
			<h4>'.$l['type_'.$cattype].'</h4>
			</td>
		</tr>';
	
	foreach($catscripts as $cat => $cv){
	
	echo '<tr>
			<td>
			<table width="100%" border="0" class="table table-hover" cellspacing="1" cellpadding="5">
				<tr>
					<thead style="background:#d3d3d3; color:#676A6C;">
						<th valign="top" width="663" colspan="6">
							<font class="bboxtxt"><b>'.$l['cat_'.$cattype.'_'.$cat].'</b></font>
						</th>
					</thead>
				</tr>';
			$i=0;
			foreach($cv as $k => $v){
			
				echo '<tr class="'.($i%2 == 0 ? "altrow" : "naltrow").'">
					<td class="bboxtxt" width="15%">'.$v['name'].'</td>
					<td class="bboxtxt" width="55%">'.$v['desc'].'</td>
					<td class="bboxtxt" width="10%">'.$v['ver'].'</td>
					<td class="bboxtxt" width="10%"><a href="'.$globals['ind'].'act=customscripts&remid='.$k.'" title="'.$l['remove_cs'].'"><img src="'.$theme['images'].'admin/remove.gif" onclick="return confirm_remove('.$k.');" alt=""></a> &nbsp; <a href="'.$globals['ind'].'act=customscripts&sact=edit&sid='.$k.'" title="'.$l['edit_cs'].'"><img src="'.$theme['images'].'admin/edit.gif" alt=""></a></td>
					 </tr>';
				$i++;		
			}
		echo '</table><br />';
	}
	
}

	echo '</td>
	</tr>
	</table>
	<center>
		<input type="button" name="add" onclick="window.location=\''.$globals['ind'].'act=customscripts&sact=add\'" value="'.$l['add_cs'].'" class="flat-butt" /> &nbsp;<br /><br />
		<a href="http://www.softaculous.com/docs/Making_Custom_Package" target="_blank"><font class="bboxtxt">'.$l['guide_cs'].'</font></a>
	</center><br /><br />
	</div>
	</div>
	'.csrf_display().'
	</form><br />';

softfooter();

}

function edit_cs_theme(){

global $user, $globals, $scripts, $iscripts, $l, $theme, $error, $saved, $report, $softid, $cs, $categories, $edited;

softheader($l['<title>']);

echo '<form accept-charset="'.$globals['charset'].'" name="editcs" method="post" action="" class="form-horizontal">

<div class="container-fluid width80"><br /><br />
	<div class="sai_main_head text-center">'.$l['edit_cust_scr'].'</div>
	<div class="sai_form"><br />
		<div class="row">';
		
		error_handle($error);
		
		if(!empty($edited)){	
			echo '<div class="alert alert-success text-center"><img src="'.$theme['images'].'success.gif" /> &nbsp; '.$l['cs_edited'].'</div>';		
		}
		
		echo '</div>

		<div class="row">
			<div class="col-sm-5">
				<label for="softpath" class="sai_head">'.$l['csname'].'</label><br />
				<span class="sai_exp2">'.$l['csname_exp'].'</span>
			</div>
			<div class="col-sm-7">
				<input type="text" class="form-control" name="csname" size="30" value="'.aPOSTval('csname', $cs['name']).'" />
			</div>
		</div><br />
		
		<div class="row">
			<div class="col-sm-5">
				<label for="softpath" class="sai_head">'.$l['softname'].'</label><br />
				<span class="sai_exp2">'.$l['softname_exp'].'</span>
			</div>
			<div class="col-sm-7">
				<input type="text" class="form-control" name="softname" size="30" value="'.aPOSTval('softname', $cs['softname']).'" />
			</div>
		</div><br />
		
		<div class="row">
			<div class="col-sm-5">
				<label for="softpath" class="sai_head">'.$l['desc'].'</label><br />
				<span class="sai_exp2">'.$l['desc_exp'].'</span>
			</div>
			<div class="col-sm-7">
				<input type="text" class="form-control" name="desc" size="40" value="'.aPOSTval('desc', $cs['desc']).'" />
			</div>
		</div><br />
		
		<div class="row">
			<div class="col-sm-5">
				<label for="softpath" class="sai_head">'.$l['ver'].'</label><br />
				<span class="sai_exp2">'.$l['ver_exp'].'</span>
			</div>
			<div class="col-sm-7">
				<input type="text" class="form-control" name="ver" size="30" value="'.aPOSTval('ver', $cs['ver']).'" />
			</div>
		</div><br />
		
		<div class="row">
			<div class="col-sm-5">
				<label for="softpath" class="sai_head">'.$l['cat'].'</label><br />
				<span class="sai_exp2">'.$l['cat_exp'].'</span>
			</div>
			<div class="col-sm-7">
				<select name="cat" class="form-control">';
				foreach($categories as $k => $v){
					echo '<option value="'.$k.'" '.($cs['cat'] == $k ? 'selected="selected"' : '').'>'.$l['cat_php_'.$k].'</option>';
				}
			echo '</select>
			</div>
		</div><br /><br />
		
		<p align="center">
		'.csrf_display().'
		<input type="submit" name="edit_submit" value="'.$l['edit_submit'].'" class="flat-butt" />
		</p>
	</div>
</div>
</form><br />';

softfooter();

}


function add_cs_theme(){

global $user, $globals, $scripts, $iscripts, $l, $theme, $error, $saved, $report, $softid, $cs, $categories, $added;

softheader($l['<title>']);

echo'<div class="container-fluid width80"><br /><br />
	<div class="sai_main_head text-center">'.$l['add_cust_scr'].'</div>';

echo '<form accept-charset="'.$globals['charset'].'" name="addcs" method="post" action="" class="form-horizontal">

	<div class="sai_form"><br />';
	
	error_handle($error);
	
	if(!empty($added)){	
		echo '<div class="alert alert-success text-center"><img src="'.$theme['images'].'success.gif" /> &nbsp; '.$l['cs_added'].'</div>';		
	}
	
	if(!empty($edited)){	
		echo '<div class="alert alert-success text-center"><img src="'.$theme['images'].'success.gif" /> &nbsp; '.$l['cs_edited'].'</div>';
	}
	
	echo '<div class="row">
			<div class="col-sm-5">
				<label for="softpath" class="sai_head">'.$l['csname'].'</label><br />
				<span class="sai_exp2">'.$l['csname_exp'].'</span>
			</div>
			<div class="col-sm-7">
				<input type="text" class="form-control" name="csname" size="30" value="'.aPOSTval('csname', '').'" />
			</div>
		</div><br />
		<div class="row">
			<div class="col-sm-5">
				<label for="softpath" class="sai_head">'.$l['softname'].'</label><br />
				<span class="sai_exp2">'.$l['softname_exp'].'</span>
			</div>
			<div class="col-sm-7">
				<input type="text" class="form-control" name="softname" size="30" value="'.aPOSTval('softname', '').'" />
			</div>
		</div><br />
		<div class="row">
			<div class="col-sm-5">
				<label for="softpath" class="sai_head">'.$l['desc'].'</label><br />
				<span class="sai_exp2">'.$l['desc_exp'].'</span>
			</div>
			<div class="col-sm-7">
				<input type="text" class="form-control" name="desc" size="40" value="'.aPOSTval('desc', '').'" />
			</div>
		</div><br />
		<div class="row">
			<div class="col-sm-5">
				<label for="softpath" class="sai_head">'.$l['ver'].'</label><br />
				<span class="sai_exp2">'.$l['ver_exp'].'</span>
			</div>
			<div class="col-sm-7">
				<input type="text" class="form-control" name="ver" size="30" value="'.aPOSTval('ver', '').'" />
			</div>
		</div><br />
		<div class="row">
			<div class="col-sm-5">
				<label for="softpath" class="sai_head">'.$l['cat'].'</label><br />
				<span class="sai_exp2">'.$l['cat_exp'].'</span>
			</div>
			<div class="col-sm-7">
				<select name="cat" class="form-control">';
				foreach($categories as $k => $v){
					echo '<option value="'.$k.'" '.(optPOST('cat') == $k ? 'selected="selected"' : '').'>'.$l['cat_php_'.$k].'</option>';
				}
			echo '</select>
			</div>
		</div><br /><br />
		<p align="center">
		'.csrf_display().'
		<input type="submit" name="add_submit" value="'.$l['add_submit'].'" class="flat-butt" />
		</p>
	</div>
</div>	
</form><br />';

softfooter();

}

?>