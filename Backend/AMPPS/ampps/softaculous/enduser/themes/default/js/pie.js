function pie(hold,arr,used,left,c,d,u,pole) {
	var r=Raphael(hold, arr[0], arr[1]);
	var attrib = new Object();
	attrib.colors = new Array();
	attrib.colors[0] = c;
	attrib.colors[1] = d;
	attrib.legend = [used+" "+u+" Used", left+" "+u+" Free"];
	attrib.legendpos = pole || "east";
	var vals = new Array();
	if(used == 0 && left > 0){
		used = 0.1;
	}
	vals[0] = used;
	if(left != 0){
		vals[1] = left;
	}
	var pie = r.g.piechart(arr[2], arr[3], arr[4], vals, attrib);

	pie.hover(function () {
		this.sector.stop();
		this.sector.scale(1.1, 1.1, this.cx, this.cy);
		if (this.label) {
			this.label[0].stop();
			this.label[0].scale(1.5);
			this.label[1].attr({"font-weight": 900});
		}
	}, function () {
		this.sector.animate({scale: [1, 1, this.cx, this.cy]}, 600, "bounce");
		if (this.label) {
			this.label[0].animate({scale: 1}, 600, "bounce");
			this.label[1].attr({"font-weight": 400});
		}
	});	
			
};