//////////////////////////////////////////////////////////////
// universal.js - Simple JS functions that make JS easy
// Inspired by Alons
// ----------------------------------------------------------
// Please Read the Terms of use at http://www.softaculous.com
// ----------------------------------------------------------
// (c)Softaculous Inc.
//////////////////////////////////////////////////////////////

ua = navigator.userAgent.toLowerCase();
isIE = ((ua.indexOf("msie") != -1) && (ua.indexOf("opera") == -1) && (ua.indexOf("webtv") == -1));
isFF = (ua.indexOf("firefox") != -1);
isGecko = (ua.indexOf("gecko") != -1);
isSafari = (ua.indexOf("safari") != -1);
isKonqueror = (ua.indexOf("konqueror") != -1);

var BrowserDetect = {
	init: function () {
		this.browser = this.searchString(this.dataBrowser) || "An unknown browser";
		this.version = this.searchVersion(navigator.userAgent)
			|| this.searchVersion(navigator.appVersion)
			|| "an unknown version";
		this.OS = this.searchString(this.dataOS) || "an unknown OS";
	},
	searchString: function (data) {
		for (var i=0;i<data.length;i++)	{
			var dataString = data[i].string;
			var dataProp = data[i].prop;
			this.versionSearchString = data[i].versionSearch || data[i].identity;
			if (dataString) {
				if (dataString.indexOf(data[i].subString) != -1)
					return data[i].identity;
			}
			else if (dataProp)
				return data[i].identity;
		}
	},
	searchVersion: function (dataString) {
		var index = dataString.indexOf(this.versionSearchString);
		if (index == -1) return;
		return parseFloat(dataString.substring(index+this.versionSearchString.length+1));
	},
	dataBrowser: [
		{
			string: navigator.userAgent,
			subString: "Chrome",
			identity: "Chrome"
		},
		{ 	string: navigator.userAgent,
			subString: "OmniWeb",
			versionSearch: "OmniWeb/",
			identity: "OmniWeb"
		},
		{
			string: navigator.vendor,
			subString: "Apple",
			identity: "Safari",
			versionSearch: "Version"
		},
		{
			prop: window.opera,
			identity: "Opera",
			versionSearch: "Version"
		},
		{
			string: navigator.vendor,
			subString: "iCab",
			identity: "iCab"
		},
		{
			string: navigator.vendor,
			subString: "KDE",
			identity: "Konqueror"
		},
		{
			string: navigator.userAgent,
			subString: "Firefox",
			identity: "Firefox"
		},
		{
			string: navigator.vendor,
			subString: "Camino",
			identity: "Camino"
		},
		{		// for newer Netscapes (6+)
			string: navigator.userAgent,
			subString: "Netscape",
			identity: "Netscape"
		},
		{
			string: navigator.userAgent,
			subString: "MSIE",
			identity: "Explorer",
			versionSearch: "MSIE"
		},
		{
			string: navigator.userAgent,
			subString: "Gecko",
			identity: "Mozilla",
			versionSearch: "rv"
		},
		{ 		// for older Netscapes (4-)
			string: navigator.userAgent,
			subString: "Mozilla",
			identity: "Netscape",
			versionSearch: "Mozilla"
		}
	],
	dataOS : [
		{
			string: navigator.platform,
			subString: "Win",
			identity: "Windows"
		},
		{
			string: navigator.platform,
			subString: "Mac",
			identity: "Mac"
		},
		{
			   string: navigator.userAgent,
			   subString: "iPhone",
			   identity: "iPhone/iPod"
	    },
		{
			string: navigator.platform,
			subString: "Linux",
			identity: "Linux"
		}
	]

};
try{ BrowserDetect.init(); }catch(e){ }

aefonload = '';

//Element referencer - We use $ because we love PHP
function $_(id){
	//DOM
	if(document.getElementById){
		return document.getElementById(id);
	//IE
	}else if(document.all){
		return document.all[id];
	//NS4
	}else if(document.layers){
		return document.layers[id];
	}
};

//Trims a string
function trim(str){
	return str.replace(/^[\s]+|[\s]+$/, "");
};

//Give a random integer
function AEFrand(min, max){
	return Math.floor(Math.random() * (max - min + 1) + min);
};

//To clear a time out
function AEFclear(timer){
	clearTimeout(timer);
	clearInterval(timer);
	return null;
};

//Changes the opacity
function setopacity(el, opacity){
	el.style.opacity = (opacity/100);
	el.style.filter = 'alpha(opacity=' + opacity + ')';
};

//Hides an element
function hideel(elid){
	$_(elid).style.visibility="hidden";
};

//Shows an element
function showel(elid){
	$_(elid).style.visibility="visible";
};

function isvisible(elid){
	if($_(elid).style.visibility == "visible"){
		return true;
	}else{
		return false;
	}
}

//Checks the entire range of checkboxes
function check(field, checker){
	if(checker.checked == true){
		for(i = 0; i < field.length; i++){
			field[i].checked = true;
		}
	}else{
		for(i = 0; i < field.length; i++){  
			field[i].checked = false;
		}
	}
};
//The page width
function getwidth(){
	return document.body.clientWidth;
};
//The page height
function getheight(){
	return document.body.clientHeight;
};

//Get the scrolled height
function scrolledy(){
	//Netscape compliant
	if(typeof(window.pageYOffset) == 'number'){
		return window.pageYOffset;
	//DOM compliant
	}else if(document.body && document.body.scrollTop){
		return document.body.scrollTop;
	//IE6 standards compliant mode
	}else if(document.documentElement && typeof(document.documentElement.scrollTop)!='undefined'){
		return document.documentElement.scrollTop;
	}else{
		return 0;	
	}
};

//Gradually increases the opacity
function smoothopaque(elid, startop, endop, inc){
	if(typeof(elid) == 'object'){
		var el = elid;
	}else{
		var el = $_(elid);
	}
	op = startop;
	//Initial opacity
	setopacity(el, op);
	//Start the opacity timeout that makes it more visible
	setTimeout(slowopacity, 1);
	function slowopacity(){
		if(startop < endop){
			op = op + inc;
			if(op < endop){
				setTimeout(slowopacity, 1);
			}
		}else{
			op = op - inc;
			if(op > endop){
				setTimeout(slowopacity, 1);
			}
		}
		setopacity(el, op);		
	};
};

//Cookie setter
function setcookie(name, value, duration){
	value = escape(value);
	if(duration){
		var date = new Date();
		date.setTime(date.getTime() + (duration * 86400000));
		value += "; expires=" + date.toGMTString();
	}
	document.cookie = name + "=" + value;
};

//Gets the cookie value
function getcookie(name){
	value = document.cookie.match('(?:^|;)\\s*'+name+'=([^;]*)');
	return value ? unescape(value[1]) : false;
};

//Removes the cookies
function removecookie(name){
	setcookie(name, '', -1);
};

function AJAX(url, evalthis){
	req = false;
	toeval = evalthis;
    // branch for native XMLHttpRequest object
    if(window.XMLHttpRequest){
    	try{
			req = new XMLHttpRequest();
        }catch(e){
			req = false;
        }
    // branch for IE/Windows ActiveX version
    }else if(window.ActiveXObject){
       	try{
	        req = new ActiveXObject("Msxml2.XMLHTTP");
      	}catch(e){
        	try{
          		req = new ActiveXObject("Microsoft.XMLHTTP");
        	}catch(e){
          		req = false;
        	}
		}
    }
	
	if(req){
		try{
			req.onreadystatechange = function(){				
    			// only if req shows "loaded"
				if (req.readyState==4) {
					//only if OK
					if (req.status == 200) {
						// only if "OK"...processing statements go here..
						var re = req.responseText // result of the req object
						if(re.length > 0){
							return eval(toeval);
						}else{
							return false;
						}
					}
				}
			};
			req.open("GET", url, true);
			req.send(null);
		}catch(e){
			return false;
		}
	}else{
		return false;
	}
	return true;
};

//Finds the position of the element
function findelpos(ele){
	var curleft = 0;
	var curtop = 0;
	if(ele.offsetParent){
		while(1){
			curleft += ele.offsetLeft;
			curtop += ele.offsetTop;
			if(!ele.offsetParent){
				break;
			}
			ele = ele.offsetParent;
		}
	}else if(ele.x){
		curleft += ele.x;
		curtop += ele.y;
	}
	return [curleft,curtop];
};

function getAttributeByName(node, attribute){
	if(typeof NamedNodeMap != "undefined"){
		if(node.attributes.getNamedItem(attribute)){
			return node.attributes.getNamedItem(attribute).value;
		}
	}else{
		return node.getAttribute(attribute);
	}
};

//With ';'
function addonload(js){
	aefonload += js;
};

function randstr(length, special, strength){
	$randstr = "";
	$specialchars = new Array('&', '#', '$', '%', '@');
	//alert(special);
	for($i = 0; $i < length; $i++){	
		$randnum = Math.floor(Math.random()*61);
		if($randnum < 10){		
			$randstr = $randstr + String.fromCharCode($randnum+48);			
		}else if($randnum < 36){		
			$randstr = $randstr + String.fromCharCode($randnum+55);			
		}else if(special > 0){
			var tmp = Math.floor(Math.random() * $specialchars.length);
			$randstr = $randstr + $specialchars[tmp];
		}else{		
			$randstr = $randstr + String.fromCharCode($randnum+61);			
		}
	}
	
	// Do we have to meet the strength set by admin ?
	if(strength > 0){
		$cur_strength = passwordStrength($randstr);
		if($cur_strength[1] < strength){
			while ($cur_strength[1] < strength) {
				$randnum = Math.floor(Math.random()*61);
				$randstr = $randstr + String.fromCharCode($randnum+55);
				$cur_strength = passwordStrength($randstr);
			}
		}
	}
	
	if(special > 0){
		return $randstr;
	}else{
		return $randstr.toLowerCase();	
	}
};
	
function randstr_wuzo(length) {
    var chars = "abcdefghijklmnopqrstuvwxyz!@#$%&ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
    var pass = "";
    for (var x = 0; x < length; x++) {
        var i = Math.floor(Math.random() * chars.length);
        pass += chars.charAt(i);
    }
    return pass;
};

function change_image(span_obj, elementid){
	var ip_obj = document.getElementById(elementid);
	var img_obj  = span_obj.firstChild;
	if(ip_obj.type == "password") {
		img_obj.src = theme+"noeye.png"
		ip_obj.type = "text";
	} else {
		img_obj.src = theme+"eye.png"
		ip_obj.type = "password";
	}
};



/******************************************************/
/******** PUNYCODE CONVERSION CODE  *******************/
/******** FOR IDN (Internationalized Domain Name) *****/
/******************************************************/
/*! http://mths.be/punycode v1.2.0 by @mathias */
;(function(u){var I,e=typeof define=='function'&&typeof define.amd=='object'&&define.amd&&define,J=typeof exports=='object'&&exports,q=typeof module=='object'&&module,h=typeof require=='function'&&require,o=2147483647,p=36,i=1,H=26,B=38,b=700,m=72,G=128,C='-',E=/^xn--/,t=/[^ -~]/,l=/\x2E|\u3002|\uFF0E|\uFF61/g,s={overflow:'Overflow: input needs wider integers to process','not-basic':'Illegal input >= 0x80 (not a basic code point)','invalid-input':'Invalid input'},v=p-i,g=Math.floor,j=String.fromCharCode,n;function y(K){throw RangeError(s[K])}function z(M,K){var L=M.length;while(L--){M[L]=K(M[L])}return M}function f(K,L){return z(K.split(l),L).join('.')}function D(N){var M=[],L=0,O=N.length,P,K;while(L<O){P=N.charCodeAt(L++);if((P&63488)==55296&&L<O){K=N.charCodeAt(L++);if((K&64512)==56320){M.push(((P&1023)<<10)+(K&1023)+65536)}else{M.push(P,K)}}else{M.push(P)}}return M}function F(K){return z(K,function(M){var L='';if(M>65535){M-=65536;L+=j(M>>>10&1023|55296);M=56320|M&1023}L+=j(M);return L}).join('')}function c(K){return K-48<10?K-22:K-65<26?K-65:K-97<26?K-97:p}function A(L,K){return L+22+75*(L<26)-((K!=0)<<5)}function w(N,L,M){var K=0;N=M?g(N/b):N>>1;N+=g(N/L);for(;N>v*H>>1;K+=p){N=g(N/v)}return g(K+(v+1)*N/(N+B))}function k(L,K){L-=(L-97<26)<<5;return L+(!K&&L-65<26)<<5}function a(X){var N=[],Q=X.length,S,T=0,M=G,U=m,P,R,V,L,Y,O,W,aa,K,Z;P=X.lastIndexOf(C);if(P<0){P=0}for(R=0;R<P;++R){if(X.charCodeAt(R)>=128){y('not-basic')}N.push(X.charCodeAt(R))}for(V=P>0?P+1:0;V<Q;){for(L=T,Y=1,O=p;;O+=p){if(V>=Q){y('invalid-input')}W=c(X.charCodeAt(V++));if(W>=p||W>g((o-T)/Y)){y('overflow')}T+=W*Y;aa=O<=U?i:(O>=U+H?H:O-U);if(W<aa){break}Z=p-aa;if(Y>g(o/Z)){y('overflow')}Y*=Z}S=N.length+1;U=w(T-L,S,L==0);if(g(T/S)>o-M){y('overflow')}M+=g(T/S);T%=S;N.splice(T++,0,M)}return F(N)}function d(W){var N,Y,T,L,U,S,O,K,R,aa,X,M=[],Q,P,Z,V;W=D(W);Q=W.length;N=G;Y=0;U=m;for(S=0;S<Q;++S){X=W[S];if(X<128){M.push(j(X))}}T=L=M.length;if(L){M.push(C)}while(T<Q){for(O=o,S=0;S<Q;++S){X=W[S];if(X>=N&&X<O){O=X}}P=T+1;if(O-N>g((o-Y)/P)){y('overflow')}Y+=(O-N)*P;N=O;for(S=0;S<Q;++S){X=W[S];if(X<N&&++Y>o){y('overflow')}if(X==N){for(K=Y,R=p;;R+=p){aa=R<=U?i:(R>=U+H?H:R-U);if(K<aa){break}V=K-aa;Z=p-aa;M.push(j(A(aa+V%Z,0)));K=g(V/Z)}M.push(j(A(K,0)));U=w(Y,P,T==L);Y=0;++T}}++Y;++N}return M.join('')}function r(K){return f(K,function(L){return E.test(L)?a(L.slice(4).toLowerCase()):L})}function x(K){return f(K,function(L){return t.test(L)?'xn--'+d(L):L})}I={version:'1.2.0',ucs2:{decode:D,encode:F},decode:a,encode:d,toASCII:x,toUnicode:r};if(J){if(q&&q.exports==J){q.exports=I}else{for(n in I){I.hasOwnProperty(n)&&(J[n]=I[n])}}}else{if(e){define('punycode',I)}else{u.punycode=I}}}(this));

function check_punycode(text){
	
	// Is it an email ??
	if(text.indexOf("@") > 0){
		var tmp_array = text.split("@");
		var out = [];
		for (var i=0; i < tmp_array.length; ++i) {
			var s = tmp_array[i];
            out.push(punycode.toASCII(s));
		}
		
        var encoded_email = out.join("@");
		
		if(!(/^([a-zA-Z0-9+])+([a-zA-Z0-9+\._-])*@([a-zA-Z0-9+_-])+([.])+([a-zA-Z0-9\._-]+)+$/.test(encoded_email))){
			return false;
		}
	
		return true;
	}
	
	return text;
};

function randomstring(L){
    var str= "";
    var randomchar=function(){
    	var n= Math.floor(Math.random()*62);
    	if(n<10) return n; //1-10
    	if(n<36) return String.fromCharCode(n+55); //A-Z
    	return String.fromCharCode(n+61); //a-z
    }
    while(str.length< L) str+= randomchar();
    return str;
}

///////////////////////////////
////// Password strength meter
///////////////////////////////
function passwordStrength(password1) {
	
	var shortPass = 1, badPass = 2, goodPass = 3, strongPass = 4, mismatch = 5, symbolSize = 0, natLog, score = 0;
	var pass_strength = Array();
	//password < 4
	if ( password1.length < 4 ){
		score = 9;
		pass_strength = [shortPass, parseInt(score)];
		return pass_strength;
	}

	if ( password1.match(/[0-9]/) )
		symbolSize +=10;
	if ( password1.match(/[a-z]/) )
		symbolSize +=26;
	if ( password1.match(/[A-Z]/) )
		symbolSize +=26;
	if ( password1.match(/[^a-zA-Z0-9]/) )
		symbolSize +=31;

	natLog = Math.log( Math.pow(symbolSize, password1.length) );
	score = natLog / Math.LN2;

	if (score < 40 ){
		pass_strength = [badPass, parseInt(score)];
		return pass_strength;
	}
		
	if (score < 56 ){
		pass_strength = [goodPass, parseInt(score)];
		return pass_strength;
	}
	
	pass_strength = [strongPass, parseInt(score)];
	return pass_strength;
}

function check_pass_strength() {
	
	var pass1 = $("#admin_pass").val();
	var strength = Array();
	
	//alert(pass1);
	$("#pass-strength-result").removeClass("short bad good strong");
	
	if (!pass1) {
		display_pass_strength("strength_indicator");
		return;
	}
	
	try{
			
		strength = passwordStrength(pass1);
		
		if(strength[1] > 100) strength[1] = 100;
		
		$("#pass-strength-hidden").val(strength[1]);
		
		switch ( strength[0] ) {
			case 2:
				score  = "bad";// For Bad password 
				display_pass_strength(score, strength[1]);
				break;
			case 3:
				score = "good"; // For Good password 
				display_pass_strength(score, strength[1]);
				break;
			case 4:
				score = "strong";// For Strong password 
				display_pass_strength(score, strength[1]);
				break;
			default:
				score = "short";// For Bad password 
				display_pass_strength(score, strength[1]);
		}
		
	}catch(e){
	}
}

function check_pass_str_wuzo(ev, pb) {

    // less than 8 characters
    var worst = 7,
        // minimum 8 characters
        bad = /(?=.{8,}).*/,
        //Alpha Numeric plus minimum 8
        good = /^(?=\S*?[a-z])(?=\S*?[0-9])\S{8,}$/,
        //Must contain at least one upper case letter, one lower case letter and (one number OR one special char).
        better = /^(?=\S*?[A-Z])(?=\S*?[a-z])((?=\S*?[0-9])|(?=\S*?[^\w\*]))\S{8,}$/,
        //Must contain at least one upper case letter, one lower case letter and (one number AND one special char).
        best = /^(?=\S*?[A-Z])(?=\S*?[a-z])(?=\S*?[0-9])(?=\S*?[^\w\*])\S{8,}$/,
        password = ev.val(),
        strength = '0',
        progressClass = 'progress-bar progress-bar-',
        ariaMsg = '0% Complete (danger)',
        $progressBarElement = pb;

    if (best.test(password) === true) {
        strength = '100%';
        progressClass += 'success';
        ariaMsg = '100% Complete (success)';
    } else if (better.test(password) === true) {
        strength = '80%';
        progressClass += 'info';
        ariaMsg = '80% Complete (info)';
    } else if (good.test(password) === true) {
        strength = '50%';
        progressClass += 'warning';
        ariaMsg = '50% Complete (warning)';
    } else if (bad.test(password) === true) {
        strength = '30%';
        progressClass += 'warning';
        ariaMsg = '30% Complete (warning)';
    } else if (password.length >= 1 && password.length <= worst) {
        strength = '10%';
        progressClass += 'danger';
        ariaMsg = '10% Complete (danger)';
    } else if (password.length < 1) {
        strength = '0';
        progressClass += 'danger';
        ariaMsg = '0% Complete (danger)';
    }

    $progressBarElement.removeClass().addClass(progressClass);
    $progressBarElement.attr('aria-valuenow', strength);
    $progressBarElement.css('width', strength);
    $progressBarElement.find('span.sr-only').text(ariaMsg);
}

// Functions For tooltip
function hidetip(){
	$_("stooltip").style.display = "none";
}

function showtip(txt, el){	
	
	$_("stooltip").innerHTML = txt;
	
	var pos = findelpos(el);
	$_("stooltip").style.display = "";
	var tipheight = parseInt($_("stooltip").offsetHeight);
	var tipwidth = parseInt($_("stooltip").offsetWidth);
	//alert(tipheight+" "+tipwidth);
	
	var abody = findelpos($_("abody"));
	var bodyWidth = abody[0] + $_("abody").offsetWidth
	
	if((pos[0] + tipwidth) > bodyWidth){
		pos[0] = pos[0] - (pos[0] + tipwidth - bodyWidth) + 15;
	}
	
	$_("stooltip").style.left = pos[0]+"px";
	$_("stooltip").style.top = (pos[1]-5-tipheight)+"px";
	
	el.onmouseout = function(){
		hidetip();
	};

};

function goto_id(id){
	// Scroll
	$('html,body').animate({
		scrollTop: $("#"+id).offset().top},
		'slow');
}

function dotweet(ele){
	window.open($("#"+ele.id).attr("action")+"?"+$("#"+ele.id).serialize(), "_blank", "scrollbars=no, menubar=no, height=400, width=500, resizable=yes, toolbar=no, status=no");
	return false;
}

function new_theme_funcs_init(){
	
	$(".sai_exp").each(function(){
		$(this).hide();
		var txt = $(this).text();
		var	saihead = $(this).parent().html();
		var str = $(this).parent().find(".sai_head").text();
	
		if(str){
			var str1 = str + "&nbsp;<i class=\"fa sai-info\" id=\"sai-info\" style=\"font-size:1.15em; vertical-align:middle;\"></i>";
			var str2 = saihead.replace(str,str1);
			$(this).parent().html(str2);
		}
	});
	 
	$(".sai-info").mouseover(function() {
		$(this).parent().parent().find(".sai_exp").fadeIn(5);
	});
	
	$( ".sai-info,.sai_exp" ).mouseout(function() {
		$(this).parent().parent().find(".sai_exp").fadeOut();	
			$(".sai_exp").mouseover(function(){
				$(".sai_exp").stop();
			});
	});
};

function toggle_pass(toggle_button, pass_field) {
	
	if($("#"+pass_field).attr('type') == "text"){
		$("#"+toggle_button).text(show_text);
		$("#"+pass_field).prop("type", "password");
	}
	else{
		$("#"+toggle_button).text(hide_text);
		$("#"+pass_field).prop("type", "text");
	}
}

// Return 1 if a > b
// Return -1 if a < b
// Return 0 if a == b
function version_compare(a, b) {
	if (a === b) {
	   return 0;
	}

	var a_components = a.split(".");
	var b_components = b.split(".");

	var len = Math.min(a_components.length, b_components.length);

	// loop while the components are equal
	for (var i = 0; i < len; i++) {
		// A bigger than B
		if (parseInt(a_components[i]) > parseInt(b_components[i])) {
			return 1;
		}

		// B bigger than A
		if (parseInt(a_components[i]) < parseInt(b_components[i])) {
			return -1;
		}
	}

	// If one\'s a prefix of the other, the longer one is greater.
	if (a_components.length > b_components.length) {
		return 1;
	}

	if (a_components.length < b_components.length) {
		return -1;
	}

	// Otherwise they are the same.
	return 0;
}