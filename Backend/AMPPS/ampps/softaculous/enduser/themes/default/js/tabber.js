//////////////////////////////////////////////////////////////
// Tabber.js
// By Alons
// Please Read the Terms of use at http://www.softaculous.com
// (c)Softaculous Inc.
// You cannot remove the copyrights.
//////////////////////////////////////////////////////////////

function tabber(){

	this.tabs = new Array();//The tabs
	
	this.tabwindows = new Array();//The tab windows
	
	this.tabclass = 'tab';//A tab button which is not yet tabbed
	
	this.tabbedclass = 'sai_tabbed';//The tabbed button class
	
	this.inittab = false;
	
	this.tab = function(id, init){
		for(x in this.tabs){
			try{		
				if(this.tabs[x] == id){
					$_(this.tabs[x]).className = this.tabbedclass;
					if(init != 1){
						setopacity($_(this.tabwindows[x]), 0);
						smoothopaque(this.tabwindows[x], 1, 100, 4);
					}
					$_(this.tabwindows[x]).style.display = 'block';
				}else{
					$_(this.tabs[x]).className = this.tabclass;
					$_(this.tabwindows[x]).style.display = 'none';			
				}
			}catch(ee){ }
		}
		// If you want to override anything !
		this.override(id);
	};
	
	//Will set the first tab to Tabbed
	this.init = function(){
		if(this.inittab){
			this.tab(this.inittab, 1);
		}else{
			this.tab(this.tabs[0, 1]);
		}
	};
	
	this.override = function(){
		
	};
	
};