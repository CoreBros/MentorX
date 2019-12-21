// JavaScript Document

/*
* Author: Chirag nagda and Raheel Farooqui
*/
var classes_suggestjs = {
	input_id : '',
	suggestion_display : '',
	submit_form : '',
	classes_search : function(val){
	// alert(val);
	 if(val == ""){
		$("#searchsuggestions").hide();
		return;	 
	 }
	 var wl_tmp = $('#'+classes_suggestjs.input_id).attr('sugurl');
	 //alert(wl_tmp+'classes_search.php?q='+val+'&start=0&length=10&in=json&callback=?');
	 $.getJSON(wl_tmp+'classes_search.php?q='+val+'&start=0&length=10&in=json&callback=?', 
		
		 function (data) {
			var classessearch = '<table cellspacing="0" border="0" cellpadding="5" class="sai_altrowstable" width="100%" id="classes_row"><tr>';
			var tr_i=0;
			
			$.each(data.data, function (i, item) {
				
				if(tr_i % 2 == 0){
					tr_class = "sai_evenrowcolor";	
				}else{
					tr_class = "sai_oddrowcolor";
				}
				
				classessearch += '<tr id="c'+tr_i+'" class="'+tr_class+'" style="cursor:pointer" onClick="classes_suggestjs.set_inputstring(\''+item.cid+'\');" suggestclasses="'+item.name+'" suggestcid="'+item.cid+'"><td align="left" colspan="2" style="padding:8px">'+item.name+'</td></tr>';
				//alert(classessearch);
				tr_i += 1;
				
			});// end of each loop
			
			classessearch += '</table>';
			$("#searchsuggestions").html(classessearch);
			$("#searchsuggestions").css("z-index","9999");
			$("#searchsuggestions").show();
			
		}); // end of get json function
	}, // End of classes_search()
	b4: "",
	row: 0,
	t: "",
	myKeyDownHandler: function(evt, inputString, id) {

		classes_suggestjs.input_id = id;
		//alert(inputString);
		classes_suggestjs.suggestion_display = "searchsuggestions";
		
		$_('searchsuggestions').style.display = "";
		//alert(classes_suggestjs.input_id);
		if(classes_suggestjs.t != ""){
			clearTimeout(classes_suggestjs.t);
		}
		
		//Look for which key is pressed and make it compatible for all browsers
		var charCode = (evt.which) ? evt.which : window.event.keyCode;
		
		//if any key other than up and down are presses then search for the scripts again
		if (charCode) {

			if((charCode >= 65 && charCode <= 90) || (charCode >= 97 && charCode <= 122) || charCode == 8 || (charCode >= 48 && charCode <= 57) || charCode == 32){
				classes_suggestjs.t=setTimeout(function(){classes_suggestjs.classes_search(inputString);}, 200);	
				
				if(charCode != 38 && charCode != 40){
					old_inputString = $_(classes_suggestjs.input_id).value;
				}
			}
				
			//If navigation keys are pressed , navigate accordingly and provide the search results
			if (charCode == 38 || charCode == 8) {// up arrow
				
				if (classes_suggestjs.row > 0) classes_suggestjs.row--;
				
				if(charCode != 8 && classes_suggestjs.row == 0){
					$_(classes_suggestjs.input_id).value = old_inputString;
				}
				
				//If IE version is less than 7 than give it a plain Background
				if(BrowserDetect.browser.toLowerCase() == "explorer" && BrowserDetect.version.toString().substr(0, 1) <= "7"){
					document.getElementById("classes_row").className = "suggestIE";			
				}
			
				//Suggest the user search input
				if(charCode != 8 && classes_suggestjs.row > 0 ){
					$_(classes_suggestjs.input_id).value = $('#c'+(classes_suggestjs.row-1)).attr("suggestclasses");
				}
				
			
			// Down arrow
			}else if(charCode == 40 || charCode == 8) {
			
				if($_(classes_suggestjs.input_id).value != ""){
					if (classes_suggestjs.row < $_("classes_row").rows.length){
						classes_suggestjs.row++;
					}else if(classes_suggestjs.row >= $_("classes_row").rows.length){
						classes_suggestjs.row = 1;
					}
					if(charCode != 8) $_(classes_suggestjs.input_id).value = $('#c'+(classes_suggestjs.row-1)).attr("suggestclasses");
				}
							
			}else if (charCode != 40 || charCode != 38 || charCode == 8){
				classes_suggestjs.row = 0;
				classes_suggestjs.b4 = "";
			}
			
			if(charCode == 27){
				$_('searchsuggestions').style.display = "none";
				$_(classes_suggestjs.input_id).value = "";
			}
			
			//If backspace is pressed dont suggest anything 
			if(charCode != 8 || charCode != 13){
				if((BrowserDetect.browser.toLowerCase() == "explorer" && BrowserDetect.version.toString().substr(0, 1) > "7" && charCode == 40) || (classes_suggestjs.row>0 && charCode == 38)){
					classes_suggestjs.bg();	
				}else{
					if(BrowserDetect.browser.toLowerCase() != "explorer"  ){
						classes_suggestjs.bg();
					}
				}
			}
		}
	},

	// Start giving colors to the table rows produced due to search
	bg: function() {
		
	try{
		var doret = false;
		tmp = classes_suggestjs.row-1;
		var r = "c" + tmp;
		if(r == 'c-1'){
			r = 'c0';
			var doret = true;
		}
		
		if (classes_suggestjs.b4 == "") classes_suggestjs.b4 = r;
		
		//if b4 is undefined , define it.
		if(typeof(classes_suggestjs.b4) == 'undefined') classes_suggestjs.b4 = 'c0';
		
		//Get the attributes of the class used to give coloured
		var old_class = getAttributeByName($_('c'+(classes_suggestjs.row-1)), "class");//$(classes_suggestjs.b4).attr("class");
		
		if(!doret){	
			setTimeout(function(){$('#'+classes_suggestjs.b4).css('backgroundColor','#B2D1FF');},70);
			$_(r).style.backgroundColor = '#CCEEFF';
		}
		
		//alert($_(b4).style.backgroundColor+" - "+$_(r).style.backgroundColor);
			
		//Give back the original colors of the rows in the table 
		if(old_class == 'sai_oddrowcolor'){
			$_(classes_suggestjs.b4).style.backgroundColor = '#FCFCFC';
		}else{
			$_(classes_suggestjs.b4).style.backgroundColor = '#F5F5F5';
		}
		
		classes_suggestjs.b4 = r;
		//}
	}catch(e){}
	},//Function ends here

	// search the script and help redirect to the required page
	set_inputstring: function (str){
		
		//alert(getAttributeByName($_('c'+(classes_suggestjs.row)), "suggestcid"));
		if($_('c'+(classes_suggestjs.row-1)) != null){
			if(str == 'submit'){
				str = getAttributeByName($_('c'+(classes_suggestjs.row-1)), "suggestcid");
			}
			window.location.href = getAttributeByName($_(classes_suggestjs.input_id), "classes_ind")+'act=classes&cid='+str;
		}
		
	},	
	
	initial_text: "",
	
	show: function (blur,show_id){
		
		if(classes_suggestjs.initial_text == ""){
			classes_suggestjs.initial_text = $_(show_id).value;
		}
		//alert(blur+"--"+classes_suggestjs.input_id);
		if(blur == 0){ // Focusing!
			if($_(show_id).value == classes_suggestjs.initial_text){
				$_(show_id).value = "";
			}
		}	
		if(blur == 1){ // Blurring!
			$_('searchsuggestions').style.display = "none";				
			
			if($_(show_id).value == ""){
				$_(show_id).value = classes_suggestjs.initial_text;
			}
		}
	}

};