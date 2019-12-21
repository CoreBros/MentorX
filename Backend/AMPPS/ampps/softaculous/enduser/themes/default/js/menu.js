//////////////////////////////////////////////////////////////
// menu.js - A simple JS drop Down menu
// Inspired by Ronak and Pulkit
// ----------------------------------------------------------
// Please Read the Terms of use at http://www.anelectron.com
// ----------------------------------------------------------
// (c)Electron Inc.
//////////////////////////////////////////////////////////////

//Shows the menu
function dropmenu(ele, divid){
	//To prevent errors
	try{ $_(divid).style;}catch(e){ return false;};	
	//If it is visible means he is on the drop down list
	if($_(divid).style.visibility=="visible"){
		clearTimeout(hider);
		return;
	}
	//Get the position
	var pos = findelpos(ele);
	//Get the callers left and top
	x = pos[0];
	y = pos[1]+ele.offsetHeight;//Add the height
		
	//If extremely right adjust
	if((screen.width - 40) < (x + $_(divid).offsetWidth)){
		extra = $_(divid).offsetWidth - ele.offsetWidth;
		x = x - extra;
	}
	
	//Set the drop down div to that point
	$_(divid).style.left=x+"px";
	$_(divid).style.top=y+"px";
	
	//Make the div visble
	$_(divid).style.visibility="visible";
	smoothopaque(divid, 0, 100, 5);
};

//Hides the menu
function pullmenu(hidedivid){
	hider = setTimeout("puller('"+hidedivid+"')", 100);
};

function puller(pid){
	try{ $_(pid).style;}catch(e){ return false;};
	$_(pid).style.visibility="hidden";
};

function clearhider(){
	try{ clearTimeout(hider);}catch(e){ return false;};	
}

function createmenu(id, array){
	if(!array){
		return false;
	}
	var t = '<table id="'+id+'" cellpadding="5" cellspacing="1">';	
	var o;
	for(o in array){		
		t += '<tr><td>'+array[o]+'</td></tr>';		
	}
	
	t += '</table>';
	document.write(t);
};