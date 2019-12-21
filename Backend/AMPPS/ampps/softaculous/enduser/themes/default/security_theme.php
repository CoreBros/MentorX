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

function security_theme(){

global $theme, $globals, $softpanel, $user, $l, $updates_available, $pmastate, $newmysqlstatus, $amppsstatus;

softheader($l['<title>']);

echo '

<div class="bg">
	<div class="row">				
		<center class="sai_main_head"><img height="48" width="48" src="'.$theme['a_images'].'security.png" />&nbsp; ' . $l['security_center'] . '</center><hr>
	</div>
	
	<table border="0" cellpadding="5" cellspacing="1" width="95%" class="table table-hover">			
		<tr>
			<thead class="sai_head2" style="background:#efefef;">
			<th>'.$l['subject_name'].'</th>
			<th>'.$l['subject_status'].'</th>
			</thead>
		</tr>';
	if($amppsstatus==1){
		$amppssecure='Secure';
		echo '
		<tr>
			<td><font size="2">&nbsp; ' . $l['ampps_subject'].'</font></td>
			<td><font size="2" color="green" face="Arial"><b>'.$amppssecure.'</b></font></td>
		</tr>';
	}
	else{
		$amppssecure='Unsecure';
		echo '
		<tr>
			<td><font size="2">&nbsp; ' . $l['ampps_subject'].'</font><br/><font color="red">&nbsp;&nbsp;'.$l['ampps_unsecure'].'</font><br/></td>
			<td><font size="2" color="red" face="Arial"><b>'.$amppssecure.'</b></font></td>
		</tr>';
	}
	if($pmastate == 1){ 
		$pmastatus='Secure';
		echo '
		<tr>
			<td><font size="2">&nbsp; ' . $l['phpmyadmin_subject'].'</font></font></td>
			<td><font size="2" color="green" face="Arial"><b>'.$pmastatus.'</b></font></td>
		</tr>';
	}
	else{ 
		$pmastatus='Unsecure';
		echo '
		<tr>
			<td class=><font size="2">&nbsp;'.$l['phpmyadmin_subject'].'</font><br><font color="red">&nbsp;&nbsp;'.$l['phpmyadmin_unsecure'].'</font><br/></td>
			<td><font size="2" color="red" face="Arial"><b>'.$pmastatus.'</b></font></td>
		</tr>';
	}
	if($newmysqlstatus==1){
		$mysqlstatus='Secure';
		echo '
		<tr>
			<td>&nbsp; ' . $l['mysql_subject'].'</font></td>
			<td><font size="2" color="green" face="Arial"><b>'.$mysqlstatus.'</b></font></td>
		</tr>';
	}
	else
	{
		$mysqlstatus='Unsecure';
		echo '
		<tr>
			<td>&nbsp; '. $l['mysql_subject'].'</font><br/><font color="red">&nbsp;&nbsp;'.$l['mysql_unsecure'].'</font><br/></td>
			<td><font size="2" color="red" face="Arial"><b>'.$mysqlstatus.'</b></font></td>
		</tr>';
	}

	echo '</table></br>
	
	<div class="row">		
		<div class="col-sm-5">
			<span class="sai_head">To fix the problems for MySQL go to: </span>
		</div>
	</div><br />
				
	<div class="row">		
		<div class="col-sm-5">		
			<img "48" width="48" src="'.$theme['a_images'].'security.gif" alt="" />&nbsp&nbsp&nbsp<a href="'.$globals['ind'].'act=mysqlsettings"><b>Change MySQL root Password</b></a>
		</div>
	</div><br />
	
	<div class="row">		
		<div class="col-sm-5">
			<span class="sai_head">To fix the problems for AMPSS go to:</span>
		</div>
	</div><br />
			
	<div class="row">		
		<div class="col-sm-5">			
			<img height="48" width="48" src="'.$theme['a_images'].'secure.gif" alt="" />&nbsp&nbsp&nbsp<a href="'.$globals['ind'].'act=secure"><b>Set AMPPS Password</b></a>
		</div>
	</div><br />
</div>';

softfooter();
}		

