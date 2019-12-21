<?php

//////////////////////////////////////////////////////////////
//===========================================================
// domainmanage_theme.php
//===========================================================
// SOFTACULOUS 
// Version : 1.1
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Date:	   10th Jan 2009
// Time:	   21:00 hrs
// Site:	   http://www.softaculous.com/ (SOFTACULOUS)
// ----------------------------------------------------------
// Please Read the Terms of use at http://www.softaculous.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Inc.
//===========================================================
//////////////////////////////////////////////////////////////

function domainmanage_theme(){
	
	global $theme, $globals, $l, $error, $softpanel ,$done, $user;
	
	// for delete
	if(optGET('ajaxdel')){	
			
		if(!empty($error)){				
			echo '0'.current($error);
			return false;
		}
		if(!empty($done)){
			echo '1'.$l['delete'];	
			domain_list();
			return true;			
		}
	}
	
	softheader($l['<title>']);
	error_handle($error, '100%');	
		
	//require_once "themes/default/mbox2.php";
	
	echo'
	<div class="bg"><br/>
		<div class="row text-center sai_main_head"><img src="'.$theme['a_images'].'domains.png" class="webu_head_img"/>&nbsp; '.$l['domain_headling'].'</div>
		<hr />
		<center>
			<div id="showrectab">';
				domain_list();
			echo'
			</div>
		</center>
	</div>';
	
	softfooter();
}

function domain_list(){
		
	global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $done,$domains_list, $primary_domain, $insid, $backed, $software, $soft, $iapps;

	$domains_list = $softpanel->domains();

	echo'
	<table class="table table-hover table-hover-moz td_font">
		<thead class="sai_head2" style="background:#EFEFEF;">
			<tr>
			<th align="center" width="50">'.$l['domain_name'].'</th>
			<th align="center" width="30">'.$l['domain_path'].'</th>
			<th align="center" width="10">'.$l['domain_addon'].'</th>
			<th align="center" width="10">'.$l['domain_ip'].'</th>
			<th align="center" width="10" colspan="2" style="text-align: right; padding-right: 1%;">'.$l['domain_option'].'</th>
			</tr>
		</thead>
		<tbody>';
		$i =1;
		foreach ($domains_list as $key => $value){
		
			echo '<tr id="tr'.$i.'">
					<td class="endurl"><a target="_blank" href="http://' . $key . '"> '.$key.'</a></td>
					<td>'.$value['path'].'</td>';
			
			if($key == $primary_domain){
				echo '<td>'.$l['primary'].'</td>';
			}elseif($value['addon'] == true){
				echo '<td>'.$l['addon'].'</td>';
			}else{
				echo '<td>'.$l['parked'].'</td>';
			}
			if (!empty($value['ip'])){
				echo '<td>'.$value['ip'].'</td>';
			}else{
				echo '<td>-</td>';
			}
			
			echo '<td  width="1%" style="text-align: right"><a href="'.$globals['ind'].'act=domainedit&domid='.$i.'" title="'.$l['edit'].'"><img src="'.$theme['images'].'editdetail.gif" /></a></td>';
			
			if ($key != $primary_domain)
			{
				echo '<td  width="1%" style="text-align: right"><img title="Delete" class="delete" style="cursor: pointer;" id="did'.$i.'" src="' . $theme['images'] . 'remove.gif" /></td>';
			}else{
				echo '<td  width="1%" style="text-align:right; padding-right: 2%;">-</td>';
			}
			$i++;
			echo '</tr>';
		}
		echo
		'</tbody>
	</table><br /><br /><br />';
	
	//check if add domain perms are given
	if(!$softpanel->getacl('DISABLE_DOMAINADD')){
		echo '<div style="text-align: center;">
			<a href="'.$globals['ind'].'act=domainadd" style="text-decoration:none"><button class="btn btn-info flat-butt">'.$l['add_new'].'</button></a>
		</div>
		<br><br>';
	}
	
	if(empty($iapps['34_1'])){		
		echo '<div class="sai_success">'.$l['package_not_installed'].'</div>';
	}
	
	echo'
	<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
		function deleteDomain(did){
			$.ajax({				
				type: "POST",				
				url: window.location+"&ajaxdel=1&delete_domain_id="+did,				
				// checking for error
				success: function(data){
					var result = data.substring(0,1);
					if(result == "1"){
						var msg = data.substring(1,data.indexOf("<table"));
						var output = data.substring(data.indexOf("<table"));
						message_box.show_message("Delete",msg,2);
						$("#showrectab").html(output);
					}
					if(result == "0"){
						var msg = data.substring(1);
						message_box.show_message("Error",msg,1);
					}
				},				
				error: function(request,error) {
					message_box.show_message("Error",\''.$l['connect_error'].'\',1);					
				}
			});
		}
		if(typeof deleteDomain === "function"){
			// For msgbox MboxObject(fYes, fNo)
			var message_box = new MboxObject(deleteDomain,"");
		}
	$(document).ready(function(){	
		// For deleting record
		
		$(".delete").click(function() {	
			var did = $(this).attr(\'id\');
			did = did.substr(3);			
			message_box.delete_message (\'Warning\',\''.$l['domain_del_conf'].'\',did);			
		});		
	});					
	// ]]></script>';  	
}
?>
