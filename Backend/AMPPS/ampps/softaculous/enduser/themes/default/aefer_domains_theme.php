<?php

//////////////////////////////////////////////////////////////
//===========================================================
// domains_theme.php
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


function domains_theme(){

global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error;
global $removed;

softheader($l['<title>']);

echo '<div class="bg"><br />';

echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[

function conf_del(){
	return confirm("'.$l['conf_del'].'");
};
// ]]></script>

<div class="sai_main_head" style="width:100%;" align="center">'.$l['list_domain'].'</div><hr>';

error_handle($error, '100%');

if(!empty($removed)){
	echo '<div class="alert alert-warning">
		<a href="#close" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<center><img src="'.$theme['images'].'notice.gif" /> &nbsp; '.$l['domain_removed'].'</center>
	</div>';
}

echo '<div class="bg2">
	<table class="table table-hover">
		<thead  style="background:#EFEFEF;" class="sai_head2">
			<tr>
				<th width="75%">'.$l['domain_name'].'</th>
				<th>'.$l['domain_edit'].'</th>
				<th>'.$l['domain_del'].'</th>
			</tr>
		</thead>';
		
		foreach($softpanel->domains as $k => $v) {
			echo '<tr>
				<td>'.$k.'</td>
				<td><a href="'.$globals['ind'].'act=editdomain&did='.$v['did'].'"><img title="Edit" src="'.$theme['images'].'editdetail.gif"  /></a></td>
				<td><a href="'.$globals['ind'].'act=domains&delid='.$v['did'].'" onclick="return conf_del();"><img title="Delete"  src="'.$theme['images'].'remove.gif" /></a></td>
			</tr>';
		}
		
	echo '</table>
</div>
<br /><br />
<p align="center"><input class="flat-butt" type="button" onclick="window.location=\''.$globals['ind'].'act=adddomain\'" value="'.$l['add_a_domain'].'" /></p><br />
</div>';


softfooter();

}

