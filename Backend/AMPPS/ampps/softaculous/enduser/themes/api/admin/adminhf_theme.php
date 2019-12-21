<?php

//////////////////////////////////////////////////////////////
//===========================================================
// adminhf_theme.php
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
	
		if(!empty($GLOBALS['_api']['scriptwise'])){
			foreach($GLOBALS['_api']['scriptwise'] as $username => $sid){
				foreach($sid as $_sid => $ins){
					foreach($ins as $_insid => $details){
						unset($GLOBALS['_api']['scriptwise'][$username][$_sid][$_insid]['softdbpass']);
						unset($GLOBALS['_api']['scriptwise'][$username][$_sid][$_insid]['display_softdbpass']);
						unset($GLOBALS['_api']['scriptwise'][$username][$_sid][$_insid]['admin_pass']);
					}
				}
			}
		}
		
		if(!empty($GLOBALS['_api']['list'])){
			foreach($GLOBALS['_api']['list'] as $k => $v){
				foreach($v as $kk => $vv){
					foreach($vv as $kkk => $vvv){
						unset($GLOBALS['_api']['list'][$k][$kk][$kkk]['softdbpass']);
						unset($GLOBALS['_api']['list'][$k][$kk][$kkk]['display_softdbpass']);
						unset($GLOBALS['_api']['list'][$k][$kk][$kkk]['admin_pass']);
					}
				}
			}
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

global $theme, $globals, $user, $l;

softheader(((empty($title)) ? $l['fatal_error'] : $title), false);

$GLOBALS['_api']['fatal_error_heading'] = $heading;

$GLOBALS['_api']['fatal_error_text'] = $text;

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