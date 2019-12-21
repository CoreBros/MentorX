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

function formcheck(){
	
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


jQuery(document).ready(function(){
	
	var domain = jQuery("#softdomain").val();
	jQuery("#imap").val("imap."+domain);
	jQuery("#smtp").val("smtp."+domain);
	
	jQuery("#softdomain").change(function(){
		var domain = jQuery(this).val();
		jQuery("#imap").val("imap."+domain);
		jQuery("#smtp").val("smtp."+domain);
	});
	
	//alert("imap."+domain);
	
	
});
