//////////////////////////////////////////////////////////////
// install.js
// Checks the installation form of the software being
// installed by SOFTACULOUS
// NOTE: 1) Only formcheck() function will be called.
//       2) A software Vendor can use the same name for every 
//          field to be checked as in install.xml . It can be
//          called using $('fieldname').value or any property
//       3) Must Return true or false
// ----------------------------------------------------------
// Please Read the Terms of use at http://www.softaculous.com
// ----------------------------------------------------------
// (c)Softaculous Inc.
//////////////////////////////////////////////////////////////

// Check if there is a number in random generated password
function update_admin_pass(){
	
	if(typeof jQuery('#admin_pass').val() == "undefined"){
		setTimeout('update_admin_pass();', 500);
		return;
	}
	
	var admin_pass = jQuery('#admin_pass').val();
	var isnum = /\d+/.test(admin_pass);
	
	if(!isnum){
		admin_pass = admin_pass+Math.floor((Math.random() * 10) + 1);
		jQuery('#admin_pass').val(admin_pass);
	}
}

update_admin_pass();

// Check if dbprefix is less than 6 chars
function update_dbprefix(){
	
	if(typeof jQuery('#dbprefix').val() == "undefined"){
		setTimeout('update_dbprefix();', 500);
		return;
	}
	
	var dbprefix = jQuery('#dbprefix').val();
	var length = dbprefix.length;
	
	if(length > 5){
		newdbprefix = dbprefix.substring(0, 4);
		jQuery('#dbprefix').val(newdbprefix+"_");
	}
}

setTimeout('update_dbprefix();', 1000);

function formcheck(){
	
	if($('dbprefix').value.length > 5){
		alert('{{err_dbprefixlen}}');
		return false;
	}
	
	//Check the Admin Email
	if(window.check_punycode){
		if(!check_punycode($('admin_email').value)){
			alert('{{err_ademail}}');
			return false;
		}
		return true;
	}
	
	return true;
};