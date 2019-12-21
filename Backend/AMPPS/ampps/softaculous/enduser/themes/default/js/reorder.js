//////////////////////////////////////////////////////////////
// js_reorder
// By Alons
// Please Read the Terms of use at http://www.softaculous.com
// (c)Softaculous Inc.
//////////////////////////////////////////////////////////////

function init_reoder(){
	var init_pos = findelpos($_(reorder_holder));
	var tot_height = 0;
	var width = $_(reorder_holder).offsetWidth;
	var top = init_pos[1];
	
	//Find the prerequisites
	for(x in reo_r){
		tot_height = tot_height + $_(reo_ha+reo_r[x]).offsetHeight + 10;
		$_(reo_ha+reo_r[x]).style.width = width+'px';
	}
	$_(reorder_holder).style.height = tot_height+'px';//Make it long
	tot_height = (tot_height + init_pos[1]);
	
	//Initialize the Drag
	for(x in reo_r){
		Drag.init($_(reo_ho+reo_r[x]), $_(reo_ha+reo_r[x]), init_pos[0], init_pos[0], (init_pos[1]-10), tot_height);
		$_(reo_ha+reo_r[x]).onDragEnd = function(){
										reorder();
									};
		$_(reo_ha+reo_r[x]).style.left = init_pos[0]+'px';
		$_(reo_ha+reo_r[x]).style.top = top+'px';
		showel(reo_ha+reo_r[x]);
		top = top + $_(reo_ha+reo_r[x]).offsetHeight + 10;
	}
};

//This will reorder
function reorder(){
	var reo_arr = new Array();
	var reo_arr_pos = new Array();
	for(x in reo_r){
		var pos = findelpos($_(reo_ha+reo_r[x]));
		//A position may be used if x smiley is left over y sm at the same position
		if(is_pos_there(reo_arr_pos, pos[1])){
			pos[1] = pos[1] + 1;
		}
		reo_arr[x] = pos[1]+'|'+reo_r[x];
		reo_arr_pos[x] = pos[1];
	}
	reo_arr_pos = reo_arr_pos.sort(sortnumber);
	for(x in reo_arr_pos){
		reo_r[x] = find_reokey(reo_arr, reo_arr_pos[x]);
	}
	
	//Re-position Vars
	var init_pos = findelpos($_(reorder_holder));
	var top = init_pos[1];
	//Re-position
	for(x in reo_r){
		$_(reo_ha+reo_r[x]).style.top = top+'px';
		top = top + $_(reo_ha+reo_r[x]).offsetHeight + 10;
		$_(reo_hid+reo_r[x]).value = (parseInt(x) + 1);
	}	
};


function find_reokey(arr, val){
	var x;
	for(x in arr){
		var r = arr[x].split('|');
		if(r[0] == val){
			return r[1];
		}
	}
};

//Tells if the position is already there - Like in_array
function is_pos_there(arr, val){
	var x;
	for(x in arr){
		if(arr[x] == val){
			return true;
		}
	}
	return false;
};

//Just a sort function
function sortnumber(a, b){
	return a - b;
};