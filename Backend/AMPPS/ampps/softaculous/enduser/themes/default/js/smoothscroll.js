var goto_top_type = -1;
var goto_top_itv = 0;
var last_scrolltop = 0;

function goto_top_timer() {
	var y = goto_top_type == 1 ? document.documentElement.scrollTop : document.body.scrollTop;
	//alert(y+' - '+last_scrolltop);
	
	if(y == last_scrolltop){	
		var moveby = 10; // set this to control scroll seed. minimum is fast
		
		y -= Math.ceil(y * moveby / 100);
		if (y < 0)
		y = 0;
		
		if (goto_top_type == 1)
		document.documentElement.scrollTop = y;
		else
		document.body.scrollTop = y;
		
		last_scrolltop = y;
	}else{
		y = 0;	
	}
	
	if (y == 0) {
	clearInterval(goto_top_itv);
	goto_top_itv = 0;
	}
}

function goto_top() {
	if (goto_top_itv == 0) {
		if (document.documentElement && document.documentElement.scrollTop)
		goto_top_type = 1;
		else if (document.body && document.body.scrollTop)
		goto_top_type = 2;
		else
		goto_top_type = 0;
		
		if (goto_top_type > 0){
			last_scrolltop = goto_top_type == 1 ? document.documentElement.scrollTop : document.body.scrollTop;
			goto_top_itv = setInterval('goto_top_timer()', 25);
		}
	}
}