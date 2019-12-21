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

global $__settings, $globals, $setupcontinue, $software, $error;
	
	$__settings = $installation;
	
	$__settings['admin_username'] = optPOST('admin_username');
	$__settings['admin_pass'] = optPOST('admin_pass');
	
	// Do we need to reset the password ?
	if(!empty($__settings['admin_pass'])){
		
		// We need the username
		if(empty($__settings['admin_username'])){
			$error[] = '{{err_no_username}}';
			return false;
		}
		
		// This is to get dbprefix from import.php
		sp_include_once($software['path'].'/import.php');
		
		$r = call_user_func('__import_'.$software['softname'], $installation['softpath']);
		
		$__settings['dbprefix'] = $r['dbprefix'];
		$__settings['softdbhost'] = $r['softdbhost'];
		$__settings['softdbuser'] = $r['softdbuser'];
		$__settings['softdbpass'] = $r['softdbpass'];
		$__settings['softdb'] = $r['softdb'];
		
		if(!empty($error)){
			return false;
		}
		
		$query = "SELECT `username` FROM `".$__settings['dbprefix']."Admins` WHERE `username` = '".$__settings['admin_username']."';";
		
		// Does this user exist ?
		$result = sdb_query($query, $__settings['softdbhost'], $__settings['softdbuser'], $__settings['softdbpass'], $__settings['softdb']);
		
		$userid = $result[0]['username'];

		if(empty($userid)){
			$error[] = '{{err_no_such_user}}';
			return false;			
		}else{	
				
				// This is to obtain password method from install.php
				sp_include_once($software['path'].'/install.php');

				// creating password using install.php
				if(sversion_compare(phpversion(), '5.3', '<')){
					sconfigure('update_pass.php', false, 0, 1);
					// We are setting this blank because the current value is plain text pass and we are trying to fetch the encrypted pass if we do not get the encrypted pass we have an error check below
					$__settings['admin_pass'] = '';
					
					$resp = swget($__settings['softurl'].'/update_pass.php');
					
					if(empty($resp)){
						$error[] = '{{no_domain_verify}}';
						return false;
					}
					
					if(preg_match('/<update_pass>(.*?)<\/update_pass>/is', $resp, $matches)){
						$__settings['admin_pass'] = $matches[1];
					}
					
					if(empty($__settings['admin_pass'])){
						$error[] = '{{no_pass_encrypt}}';
						return false;
					}
					
					sunlink($__settings['softpath'].'/update_pass.php');
				}else{
					$__settings['admin_pass'] = __password_hash($__settings['admin_pass'] , PASSWORD_BCRYPT, array('cost' => 14));
				}
			}
			
			if(!empty($error)){
				return false;
			}
			
			// Update the password now
			$update_query = "UPDATE `".$__settings['dbprefix']."Admins` SET `password` = '".$__settings['admin_pass']."' WHERE `username` = '".$userid."';";
			$result = sdb_query($update_query, $__settings['softdbhost'], $__settings['softdbuser'], $__settings['softdbpass'], $__settings['softdb']);
		
		}
	}


?>