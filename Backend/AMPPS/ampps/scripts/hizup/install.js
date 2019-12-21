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
	
	
	if(window.check_punycode){
		//Check the Bug Email
		if(!check_punycode($('bug_email').value)){
			alert('{{err_bugemail}}');
			return false;
		}
		//Check the No Reply Email
		if(!check_punycode($('noreply_email').value)){
			alert('{{err_noreplyemail}}');
			return false;
		}
		//Check the Feedback Email
		if(!check_punycode($('feedback_email').value)){
			alert('{{err_feedbackemail}}');
			return false;
		}
		//Check the Admin Email
		if(!check_punycode($('admin_email').value)){
			alert('{{err_ademail}}');
			return false;
		}
		return true;
	}
	
	return true;
};