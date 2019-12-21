//////////////////////////////////////////////////////////////
// js_slider
// By Alons
// Please Read the Terms of use at http://www.softaculous.com
// (c)Softaculous Inc.
//////////////////////////////////////////////////////////////

function slideitout(elid, endheight, inc, time){
	startheight = $_(elid).offsetHeight + inc;
	if(startheight < endheight){
		diff = endheight - startheight;
		if(diff > inc){
			$_(elid).style.height = startheight+"px";
			_mytimer = setTimeout('slideitout(\''+elid+'\', '+endheight+', '+inc+', '+time+');', time);
		}else{
			$_(elid).style.height = endheight+"px";
		}
	}
};

function pullitin(elid, dec, time){
	height = $_(elid).offsetHeight - dec;
	if(height > dec){
		$_(elid).style.height = height+"px";
		_mytimer = setTimeout('pullitin(\''+elid+'\', '+dec+', '+time+');', time);
	}else{
		$_(elid).style.height = "1px"; //A bug in IE 5.5
	}
};

var _mytimer;

function slider(){
	this.speed = 20;
	this.bydefault = 1; // Collapsed
	this.collapsed = new Array(); // Collapsed by Default
	this.expanded = new Array(); // Expanded by Default
	this.img_collapsed = imgurl+'collapsed.gif';
	this.img_expanded = imgurl+'expanded.gif';
	this.elements = new Array();
	
	this.slide = function(id){
		var height = $_(id).offsetHeight;
		
		// People can PLAY too much, hence clear the timer :) Take that idiots !
		if(typeof(_mytimer) != 'undefined'){
			AEFclear(_mytimer);	
		}
		
		if(height > 1){
			this.collapse(id);
		}else{
			this.expand(id);
		}
	};
	
	this.expand = function(id){
		slideitout(id, $_('t'+id).offsetHeight, this.speed, 1);
		$_('i'+id).src = this.img_expanded;
		setcookie(id, '2', 365);
	};
	
	this.collapse = function(id){
		pullitin(id, this.speed, 1);
		$_('i'+id).src = this.img_collapsed;
		setcookie(id, '1', 365);
	};
	
	//Init it
	this.init = function(){
		var elements = this.elements;
		for(id in elements){
			
			var cookie = getcookie(elements[id]);
			
			if(cookie.length > 0){
				if(cookie == 2){
					this.initexp(elements[id]);
				}else if(cookie == 1){
					this.initcoll(elements[id]);
				}
				continue;
			}
			
			var defau = 0;
			for(xx in this.expanded){
				if(this.expanded[xx] == elements[id]){
					this.initexp(elements[id]);
					defau = 1;
					break;
				}
			}
			
			if(defau == 1){
				continue;
			}
			
			var defau = 0;
			for(xx in this.collapsed){
				if(this.collapsed[xx] == elements[id]){
					this.initcoll(elements[id]);
					defau = 1;
					break;
				}
			}
			
			if(defau == 1){
				continue;
			}
			
			if(this.bydefault == 2){
				this.initexp(elements[id]);
			}else if(this.bydefault == 1){
				this.initcoll(elements[id]);
			}
		}
	};
	
	this.initexp = function(id){
		$_(id).style.height = $_('t'+id).offsetHeight+"px";
		$_('i'+id).src = this.img_expanded;
	};
	
	this.initcoll = function(id){
		$_(id).style.height = "1px";
		$_('i'+id).src = this.img_collapsed;
	};
	
	this.expandAll = function(){
		var elements = this.elements;
		for(key in elements){
			id = elements[key];
			this.expand(id);
		}
	};
	
	this.collapseAll = function(){
		var elements = this.elements;
		for(key in elements){
			id = elements[key];
			this.collapse(id);
		}
	};
};