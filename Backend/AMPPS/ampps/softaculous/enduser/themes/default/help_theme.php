<?php

//////////////////////////////////////////////////////////////
//===========================================================
// help_theme.php
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

function help_theme(){

global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $faq_list;

	softheader($l['<title>']);
	
	echo '
	<div class="bg">
		<br />
		<div class="row">
			<div class="col-sm-12">
				<div class="sai_main_head text-center">'.$l['faq'].'</div><br />
			</div>
		</div>';

	foreach($faq_list as $fk => $fv){
		echo '
		<div class="row">
			<div class="col-sm-12">
				<div class="sai_sub_head">'.$fv['question'].'</div>
				<hr>
				<div class="sai_ans">'.$fv['answer'].'</div>
			</div>
		</div>';
	}
	
	echo '
	</div>';

	softfooter();

}

?>