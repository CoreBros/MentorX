<?php

//////////////////////////////////////////////////////////////
//===========================================================
// edit.php(For individual softwares)
//===========================================================
// SOFTACULOUS 
// Version : 1.0
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

/////////////////////////////////////////
// All functions in this PAGE must begin
// with TWO UNDERSCORE '__' to avoid 
// clashes with SOFTACULOUS Functions
// e.g. __funcname()
/////////////////////////////////////////

//////////////////////////////////////////
// Note : The path of the upgrade package 
//        is $software['path'].'/' . So to
//        access other files use 
//        $software['path'].'/other_file.ext'
//////////////////////////////////////////

//The Edit process
function __edit($installation){

global $__settings, $globals, $setupcontinue, $software, $error, $replace_data;

	$__settings['admin_username'] = optPOST('admin_username');
	$__settings['admin_pass'] = optPOST('admin_pass');
	
	// Do we need to reset the password ?
	if(!empty($__settings['admin_pass'])){
	
		// We need the username
		if(empty($__settings['admin_username'])){
			$error[] = '{{err_no_username}}';
			return false;
		}
		
		//Making a backup of the  old settings file 
		@scopy($installation['softpath'].'/data/settings/settings.xml', $installation['softpath'].'/data/settings/settings.xml.bak');
		
		//we need values of username and old password 
		$file = sfile($installation['softpath'].'/data/settings/settings.xml');
		
		if(empty($file)){
			$error[] = '{{err_openconfig}}';
			return false;
		}
		
		soft_preg_replace('/<AdminLogin>(.*?)<\/AdminLogin>/is', $file, $user, 1);	
		soft_preg_replace('/<AdminPassword>(.*?)<\/AdminPassword>/is', $file, $pass, 1);	
		
		if($__settings['admin_username'] != $user){
			$error[] = '{{err_no_such_user}}';
			return false;			
		}else{	
		
			if(sversion_compare($installation['ver'], '7.7.0', '<')){
				
				// This is to obtain old password method from extend.php
				@sp_include_once($software['path'].'/extend.php');
				
				// creating password using extend.php __ad_pass_md5() function
				$__settings['admin_pass'] = __ad_pass_md5($__settings['admin_pass']);
			}else{
				
				//Retrieving salt from salt.php 
				$salt = sfile($installation['softpath'].'/data/salt.php');
				
				if(empty($file)){
					$error[] = '{{err_openconfig}} to fetch salt';
				return false;
				}
				
				$__settings['salt'] = trim($salt);
				
				// This is to obtain password method from install.php
				@sp_include_once($software['path'].'/install.php');			
			
				// creating password using install.php __ad_pass() function
				$__settings['admin_pass'] = __ad_pass($__settings['admin_pass']);
			}
			
			$replace_data["<AdminPassword>".$pass."</AdminPassword>"] = "<AdminPassword>".$__settings['admin_pass']."</AdminPassword>";
			
			sclone_replace($replace_data, $installation['softpath'].'/data/settings/settings.xml', true);
		}
	}
}

?>