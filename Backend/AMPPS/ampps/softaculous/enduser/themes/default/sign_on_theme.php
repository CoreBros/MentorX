<?php

//////////////////////////////////////////////////////////////
//===========================================================
// sign_on_theme.php
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


function sign_on_theme(){
	
global $insid, $user, $autoid, $__settings, $globals, $software, $iscripts, $soft, $theme, $sign_on_url, $error, $l, $SESS;
	
	if(empty($error)){
		
		putenv('REQUEST_URI=');
		
		//We need to pass username i.e., domain name in case of Hosting Controller Windows server
		$dom = strtolower(parse_url($__settings['softurl'], PHP_URL_HOST));
		
		if(preg_match('/^www\./is', $dom)){
			$dom = preg_replace('/^www\./', '' , $dom);
		}
		
		soft_shell_exec_bg(soft_php_bin(1).' '.to_win_path($globals['path']).'/cli.php --clean_sign_on --insid='.$insid.' --file='.$autoid.(aefer() || ent() ? ' --username='.$SESS['username'].' --owner='.$SESS['owner'] : ($globals['softpanel'] == 'hc' ? ' --username='.$dom : '')));
		
		// Redirect the user to signon file which will perform the login part
		redirect($sign_on_url, false, true);
		die();		
	}
	
	softheader($l['<title>']);
				
	echo error_handle($error, '100%');
	
	softfooter();

}

?>