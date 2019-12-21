<?php

//////////////////////////////////////////////////////////////
//===========================================================
// categories_theme.php
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

function categories_theme(){

global $theme, $globals, $user, $l, $langs, $skins, $error, $saved, $categories;

softheader($l['<title>']);

echo '<form accept-charset="'.$globals['charset'].'" name="reordercat" method="post" action="">

	<script language="javascript" src="'.$theme['url'].'/js/reorder.js" type="text/javascript"></script>
	<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
	//The array id of all the elements to be reordered
	reo_r = new Array(\''.implode('\', \'', array_keys($categories)).'\');

	//The id of the table that will hold the elements
	reorder_holder = "cat_reorder_pos";

	//The prefix of the Dom Drag handle for every element
	reo_ha = "catha";

	//The prefix of the Dom Drag holder for every element(the parent of every element)
	reo_ho = "cat";

	//The prefix of the Hidden Input field for the reoder value for every element
	reo_hid = "cathid";
	addonload(\'init_reoder();\');
	// ]]></script>
		
	<div class="container-fluid width80"><br /><br />
		<div class="sai_main_head text-center">
			'.$l['reordercat_head'].'
		</div>
		<div class="sai_form"><br />';
		
		error_handle($error);
		
		if(!empty($saved)){
			echo '<div class="alert alert-success text-center"><img src="'.$theme['images'].'success.gif" /> '.$l['settings_saved'].'</div>';
		}
		
		echo '<center><div id="cat_reorder_pos" style="width:50%;"></div></center><br />';

		$temp = 1;
		foreach($categories as $ck => $cv){
				
			echo '<div id="cat'.$ck.'">
					<div class="catreo" id="catha'.$ck.'" onmousedown="this.style.zIndex=\'1\'" onmouseup="this.style.zIndex=\'0\'">
						<div>&nbsp;&nbsp;'.$l['cat_php_'.$ck].'</div>	
					</div>
				</div>';	
		
			echo '<input type="hidden" name="cat['.$ck.']" value="'.$temp.'" id="cathid'.$ck.'" />';	
			$temp = $temp + 1;
			
		}

echo '<p align="center">
	'.csrf_display().'
	<input type="submit" name="reordercat" value="'.$l['reordercat'].'" class="flat-butt" />
	</p>
	'.(empty($globals['lictype']) ? '<div class="notebox">'.$l['soft_free_note'].'</div>' : '').'<br />
	</div>
	</div>
	</form><br />';

softfooter();

}

?>