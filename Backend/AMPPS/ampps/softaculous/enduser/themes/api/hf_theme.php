<?php

//////////////////////////////////////////////////////////////
//===========================================================
// hf_theme.php
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

function softheader($title = '', $leftbody = true){

global $theme, $globals, $kernel, $user, $l, $error;
	
	$GLOBALS['_api']['title'] = ((empty($title)) ? $globals['sn'] : $title);
	
}


function softfooter(){

global $theme, $globals, $kernel, $user, $l, $error, $end_time, $start_time;

	$GLOBALS['_api']['timenow'] = time();
	
	if(!empty($globals['showntimetaken'])){
	
		$GLOBALS['_api']['time_taken'] = substr($end_time-$start_time,0,5);
	
	}
	
	// Send the debug info - Removed for the time being as it is visible to the API User and can leak commands !
	//$GLOBALS['_api']['logr'] = $GLOBALS['logr'];

	//r_print($GLOBALS['_api']);
		
	// Remove the db passwords and admin pass
	if(!empty($globals['hide_api_pass'])){
		
		if(!empty($GLOBALS['_api']['installations'])){
			foreach($GLOBALS['_api']['installations'] as $sid => $insid){
				foreach($insid as $_insid => $ins){
					unset($GLOBALS['_api']['installations'][$sid][$_insid]['softdbpass']);
					unset($GLOBALS['_api']['installations'][$sid][$_insid]['display_softdbpass']);
					unset($GLOBALS['_api']['installations'][$sid][$_insid]['admin_pass']);			
				}
			}
		}
		
		if(!empty($GLOBALS['_api']['userins'])){
			unset($GLOBALS['_api']['userins']['softdbpass']);
			unset($GLOBALS['_api']['userins']['display_softdbpass']);
			unset($GLOBALS['_api']['userins']['admin_pass']);		
		}
		
		if(!empty($GLOBALS['_api']['__settings'])){
			unset($GLOBALS['_api']['__settings']['softdbpass']);
			unset($GLOBALS['_api']['__settings']['display_softdbpass']);
			unset($GLOBALS['_api']['__settings']['admin_pass']);		
		}
		
		if(!empty($GLOBALS['_api']['user']['ins'])){
			foreach($GLOBALS['_api']['user']['ins'] as $insid => $ins){
				unset($GLOBALS['_api']['user']['ins'][$insid]['softdbpass']);
				unset($GLOBALS['_api']['user']['ins'][$insid]['display_softdbpass']);
				unset($GLOBALS['_api']['user']['ins'][$insid]['admin_pass']);
			}
		}
		
		if(!empty($GLOBALS['_api']['thisdomain'])){
			unset($GLOBALS['_api']['thisdomain']['ftp_pass']);	
		}
		
		if(!empty($GLOBALS['_api']['domain_list'])){
			foreach($GLOBALS['_api']['domain_list'] as $domain => $details){
				unset($GLOBALS['_api']['domain_list'][$domain]['ftp_pass']);
			}
		}
		
		if(!empty($GLOBALS['_api']['backupinfo'])){
			unset($GLOBALS['_api']['backupinfo']['softdbpass']);
			unset($GLOBALS['_api']['backupinfo']['display_softdbpass']);
			unset($GLOBALS['_api']['backupinfo']['admin_pass']);		
		}
		
		if(!empty($GLOBALS['_api']['ins'])){
			unset($GLOBALS['_api']['ins']['softdbpass']);
			unset($GLOBALS['_api']['ins']['display_softdbpass']);
			unset($GLOBALS['_api']['ins']['admin_pass']);		
		}
		
		if(!empty($GLOBALS['_api']['user_ins'])){
			unset($GLOBALS['_api']['user_ins']['softdbpass']);
			unset($GLOBALS['_api']['user_ins']['display_softdbpass']);
			unset($GLOBALS['_api']['user_ins']['admin_pass']);		
		}
		
		if(!empty($GLOBALS['_api']['softins'])){
			unset($GLOBALS['_api']['softins']['softdbpass']);
			unset($GLOBALS['_api']['softins']['display_softdbpass']);
			unset($GLOBALS['_api']['softins']['admin_pass']);		
		}
	}
	
	// Return Serialize
	if($_GET['api'] == 'serialize'){
		
		echo serialize($GLOBALS['_api']);
	
	// Return JSON String
	}elseif($_GET['api'] == 'json'){
	
		echo array2json($GLOBALS['_api']);
	
	// Return XML by default
	}else{
		
		echo ArrayToXML::toXML($GLOBALS['_api'], 'xml');
		
	}

}



function error_handle($error, $table_width = '100%', $center = false, $ret = false){

global $l;
	
	$str = '';
	
	//on error call the form
	if(!empty($error)){
		
		$error = apply_filters('error_handle', $error);
		
		$GLOBALS['_api']['error'] = $error;
		
	}

}


//This will just echo that everything went fine
function success_message($message, $table_width = '100%', $center = false){

global $l;

	//on error call the form
	if(!empty($message)){
		
		$GLOBALS['_api']['message'] = $message;
		
	}

}


function majorerror($title, $text, $heading = ''){

global $theme, $globals, $user, $l, $error;

softheader(((empty($title)) ? $l['fatal_error'] : $title), false);

$GLOBALS['_api']['fatal_error_heading'] = $heading;

$GLOBALS['_api']['fatal_error_text'] = $text;

// Also fill up error - this is for api
$error['fatal_error_text'] = $text;
error_handle($error);

softfooter();

//We must return
return true;

}

function message($title, $heading = '', $icon, $text){

global $theme, $globals, $user, $l;

softheader(((empty($title)) ? $l['soft_message'] : $title), false);

$GLOBALS['_api']['message_heading'] = $heading;

$GLOBALS['_api']['message_text'] = $text;

softfooter();

//We must return
return true;

}

?>