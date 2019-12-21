/*
* Author: Chirag nagda and Raheel Farooqui
*/

var suggestjs = {

	lookup: function(inputString) {
	
		if(inputString.length == 0) {
			$_('suggestions').style.display = "none"; // Hide the suggestions box
		} else {
			// Form the URL to query
			var wl_tmp = $('#inputString').attr('sugurl');
	
			$.get(wl_tmp, {sact: "scripts", q: inputString}, function(data) { // Do an AJAX call
				$('#suggestions').html(data); // Fill the suggestions box				
				$_('suggestions').style.display = ""; // Show the suggestions box
				
				// Find the position of the search string and make adjustment to the search list. 
				// If it goes out of the screen ,adjust it.
				var pos = findelpos($_("inputString"));
				if((screen.width - 40) < (pos[0] + $_("suggestions").offsetWidth)){
					var extra = (pos[0] + $_("suggestions").offsetWidth) - (screen.width - 40);
					pos[0] = pos[0] - extra;
				}
				
				//Adjust the screen position
				$_("suggestions").style.left = pos[0] + "px";
				$_("suggestions").style.top =  (pos[1] + 10 + $_("inputString").offsetHeight) + "px";
				
				//If IE version is less than 7 call suggest.bg
				if(BrowserDetect.browser.toLowerCase() == "explorer" && BrowserDetect.version.toString().substr(0, 1) <= "7"){
					$_("row").className = "suggestIE";//suggestjs.bg();
				}
								
			});
		}
	
	},

	b4: "",
	row: 0,
	t: "",
	myKeyDownHandler: function(evt, inputString) {
		//alert(inputString);
		if(suggestjs.t != ""){
			clearTimeout(suggestjs.t);
		}
		
		//Look for which key is pressed and make it compatible for all browsers
		var charCode = (evt.which) ? evt.which : window.event.keyCode;
		
		//if any key other than up and down are presses then search for the scripts again
		if (charCode) {
						
			if((charCode >= 65 && charCode <= 90) || (charCode >= 97 && charCode <= 122) || charCode == 8 || (charCode >= 48 && charCode <= 57)){
				suggestjs.t=setTimeout(function(){suggestjs.lookup(inputString)}, 200);
				if(charCode != 38 && charCode != 40){
					old_inputString = $_("inputString").value;
				}
			}
				
			//If navigation keys are pressed , navigate accordingly and provide the search results
			if (charCode == 38 || charCode == 8) {// up arrow
				
				if (suggestjs.row > 0) suggestjs.row--;
				
				if(charCode != 8 && suggestjs.row == 0){
					$_("inputString").value = old_inputString;
				}
				
				//If IE version is less than 7 than give it a plain Background
				if(BrowserDetect.browser.toLowerCase() == "explorer" && BrowserDetect.version.toString().substr(0, 1) <= "7"){
					document.getElementById("row").className = "suggestIE";			
				}
			
				//Suggest the user search input
				if(charCode != 8 && suggestjs.row > 0 ){
					$_("inputString").value = getAttributeByName($_('r'+(suggestjs.row-1)), "suggestscript");
				}
				
			
			// Down arrow
			}else if(charCode == 40 || charCode == 8) {
			
				if($_("inputString").value != ""){
					if (suggestjs.row < $_("row").rows.length){
						suggestjs.row++;
					}else if(suggestjs.row >= $_("row").rows.length){
						suggestjs.row = 1;
					}
					if(charCode != 8) $_("inputString").value = getAttributeByName($_('r'+(suggestjs.row-1)), "suggestscript");
				}
							
			}else if (charCode != 40 || charCode != 38 || charCode == 8){
				suggestjs.row = 0;
				suggestjs.b4 = "";
			}
			
			if(charCode == 27){
				$_('suggestions').style.display = "none";
				$_("inputString").value = "";
			}
			
			//If backspace is pressed dont suggest anything 
			if(charCode != 8 || charCode != 13){
				if((BrowserDetect.browser.toLowerCase() == "explorer" && BrowserDetect.version.toString().substr(0, 1) > "7" && charCode == 40) || (suggestjs.row>0 && charCode == 38)){
					suggestjs.bg();	
				}else{
					if(BrowserDetect.browser.toLowerCase() != "explorer"  ){
						suggestjs.bg();
					}
				}
			}
		}
	},

	// Start giving colors to the table rows produced due to search
	bg: function() {
		
	try{
		var doret = false;
		tmp = suggestjs.row-1;
		var r = "r" + tmp;
		if(r == 'r-1'){
			r = 'r0';
			var doret = true;
		}
		if (suggestjs.b4 == "") suggestjs.b4 = r;
		
		//if b4 is undefined , define it.
		if(typeof(suggestjs.b4) == 'undefined') suggestjs.b4 = 'r0';
		
		//Get the attributes of the class used to give coloured
		var old_class = getAttributeByName($_(suggestjs.b4), "class");
		
		if(!doret){	
			setTimeout("$_(suggestjs.b4).style.backgroundColor = '#B2D1FF'",70);
			$_(r).style.backgroundColor = '#CCEEFF';
		}
		
		// If $global['mode'] is classes and the user is using the old search box, 
		// at that time classes and scripts both should be searched properly
		// So we are putting the cid in a hidden tag only at the time of classes
		if(getAttributeByName($_("inputString"), "mode") == 'classes'){
			// Set the cid to hidden tag having id = hidden_cid
			$_('hidden_cid').value = getAttributeByName($_('r'+(suggestjs.row-1)), "suggestcid");
		}
		//alert($_(b4).style.backgroundColor+" - "+$_(r).style.backgroundColor);
			
		//Give back the original colors of the rows in the table 
		if(old_class == 'sai_oddrowcolor'){
			$_(suggestjs.b4).style.backgroundColor = '#FCFCFC';
		}else{
			$_(suggestjs.b4).style.backgroundColor = '#F5F5F5';
		}
		
		suggestjs.b4 = r;
		//}
	}catch(e){}
	},//Function ends here

	// search the script and help redirect to the required page
	set_inputstring: function (str){
		
		$_("inputString").value = str;
		$_('suggestions').style.display = "none";
		$_("searchform").submit();
	},	
	
	initial_text: "",
	
	show: function (blur){
		
		if(suggestjs.initial_text == ""){
			suggestjs.initial_text = $_("inputString").value;
		}
		
		if(blur == 0){ // Focusing!
			if($_("inputString").value == suggestjs.initial_text){
				$_("inputString").value = "";
			}
		}	
		if(blur == 1){ // Blurring!
			$("html").click(function(){
				$_("suggestions").style.display = "none";				
			});
			if($_("inputString").value == ""){
				$_("inputString").value = suggestjs.initial_text;
			}
		}
	}

};
