<?php

//////////////////////////////////////////////////////////////
//===========================================================
// login_theme.php
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


function signin_theme(){

global $user, $globals, $l, $theme, $iscripts, $catwise, $error, $softpanel;

$theme['url'] = 'themes/default';
$theme['images'] = $theme['url'].'/images/';

echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="keywords" content="softaculous, software" />
<title>Softaculous Login</title>
<link rel="stylesheet" type="text/css" href="'.$theme['url'].'/style.css" />
<link rel="shortcut icon" href="'.$theme['images'].'favicon.ico" />
<script language="javascript" src="'.$theme['url'].'/js/universal.js" type="text/javascript"></script>
</head>
<body>

<div class="sai_loginmap">
<table border="0" cellpadding="0" cellspacing="0" width="100%">	
<tr>
	<td colspan="3" background="'.$theme['images'].'loginhead.gif">
	
		<table border="0" cellpadding="0" cellspacing="0" width="950" align="center">	
			<tr>
				<td align="left" width="100%" height="43" valign="middle">
				<a href="'.$globals['ind'].'"><img src="'.$theme['images'].'cust_panel.gif" alt="" /></a>
				</td>
			</tr>
		</table>
		
	</td>
</tr>

<tr>
<td>&nbsp;</td>
<td align="left" width="950" valign="top"><form accept-charset="UTF-8" action="" method="post" name="loginform">
<br /><br />
<table border="0" cellpadding="8" cellspacing="0" align="center">	
	<tr>			
		<td width="400" valign="middle">
			<center class="sai_main_head">'.$l['sign_in'].'</center>
			<table border="0" cellpadding="2" cellspacing="0" align="center">
				<tr>
				<td width="30">&nbsp;</td>
				<td valign="top" class="sai_login_txt">';
				
					if(!empty($error)){
						echo'<br /><div align="center" style="color:#cdcd; background:#ffb2b2; width:93%; padding:8px; border-radius:4px; font-size:15px;">'.$error.'</div>';	
					}
					
				echo'<br />
					'.$l['log_user'].'<br />
					<input type="text" name="username" id="username" value="'.POSTval('username').'" class="sai_login_input" />
					
					<br />
					
					'.$l['log_pass'].'<br />
					<input type="password" name="password" value="" class="sai_login_input" />
					
					<center>
						<input type="submit" name="login" value="'.$l['sub_but'].'" class="flat-butt" />
					</center>
				</td>
				<td width="30">&nbsp;</td>
				</tr>
			</table>			
			<br />
		</td>
	</tr>
</table>
</form>
<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
window.onload = function(){ $_("username").focus(); }
// ]]></script>

</td>
<td>&nbsp;</td>
</tr>
</table>
</div>

<br />';	
}
?>