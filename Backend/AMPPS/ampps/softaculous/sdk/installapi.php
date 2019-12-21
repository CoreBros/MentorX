<?php

function softaculous_scripts(){
	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'http://api.softaculous.com/scripts.php?in=serialize');
	curl_setopt($ch, CURLOPT_VERBOSE, 1);

	// Turn off the server and peer verification (TrustManager Concept).
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
	
	// Follow redirects
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	
	// Check the Header
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	
	// Get response from the server.
	$file = curl_exec($ch);
	
	// Did we get the file ?
	if($file === false){
		die('Could not load list of scripts. cURL Error : '.curl_error($ch));
	}
	
	curl_close($ch);
	
	$scripts = unserialize($file);
	
	return $scripts;
	
}


class Soft_Install{

	// The Login URL
	var $login = '';
	
	var $debug = 0;

	// THE POST DATA
	var $data = array();
	
	function install($sid){
		
		define('SOFTACULOUS', 1);
		
		// Include the Scripts List
		//@include('http://www.softaculous.com/scripts.php');
		
		$scripts = softaculous_scripts();
		
		// You should place the cscripts.php here with this file.
		// We should also include the Custom Scripts if any
		if(file_exists('cscripts.php')){
			include('cscripts.php');
			$scripts += $cscripts;
		}
		
		if(empty($scripts[$sid])){
			return false;
		}
		
		$tmp_login = parse_url($this->login);
		
		// This is to set the cookie for Directadmin
		if($tmp_login['port'] == '2222'){
		
			$cmd_login = $tmp_login['scheme'].'://'.$tmp_login['host'].':'.$tmp_login['port'].'/CMD_LOGIN'; 
			
			$post = array('username' => $tmp_login['user'],
					'password' => $tmp_login['pass'],
					'referer' => '/');
			
			$res = $this->curl_call($cmd_login, 1, $post);
			
			// Did we login ?
			if($res === false){
				die('Could not login to the remote server. cURL Error : '.$res);
				return false;
			}
			
			$res = explode("\n", $res);
			
			// Find the cookies
			foreach($res as $k => $v){
				if(preg_match('/^'.preg_quote('set-cookie:', '/').'(.*?)$/is', $v, $mat)){
					$this->cookie= trim($mat[1]);
				}
			}
		}
		
		// Add the ?
		if(!strstr($this->login, '?')){
			$this->login = $this->login.'?';
		}
		
		// Login PAGE
		if($scripts[$sid]['type'] == 'js'){
			$this->login = $this->login.'&act=js&soft='.$sid;
		}elseif($scripts[$sid]['type'] == 'perl'){
			$this->login = $this->login.'&act=perl&soft='.$sid;
		}elseif($scripts[$sid]['type'] == 'java'){
			$this->login = $this->login.'&act=java&soft='.$sid;
		}else{
			$this->login = $this->login.'&act=software&soft='.$sid;
		}
		
		$this->login = $this->login.'&autoinstall='.rawurlencode(base64_encode(serialize($this->data)));
		
		if(!empty($this->debug)){
			return $this->data;
		}
		
		$resp = $this->curl_call($this->login, 0, array(), $this->cookie);
		
		if($resp != 'installed') {
			return $resp;
		}
		
		return true;
		
	}
	
	function curl_call($url, $header = 1, $post = array(), $cookie = ''){
	
		global $globals;
		
		// Set the curl parameters.
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_VERBOSE, 1);
		
		// Turn off the server and peer verification (TrustManager Concept).
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
		
		if($this->panel == 'isp'){
			//curl_setopt($ch, CURLOPT_SSLVERSION,3); // We have removed this because of a vulnerability in SSLv3
			curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:2.0.1) Gecko/20100101 Firefox/4.0.1');
			curl_setopt($ch, CURLOPT_REFERER, $url);
		}
		
		// Follow redirects
		//curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE); // This does not work with DA hence we have commented this
				
		if(!empty($post)){
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));
		}
		
		// Is there a Cookie
		if(!empty($cookie)){
			curl_setopt($ch, CURLOPT_COOKIESESSION, true);
			curl_setopt($ch, CURLOPT_COOKIE, $cookie);
		}
		
		if($header){
			curl_setopt($ch, CURLOPT_HEADER, 1);
		}
		
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		
		// Get response from the server.
		$resp = curl_exec($ch);
		
		if($resp === false){
			$ch_err = curl_error($ch);
			curl_close($ch);
			return $ch_err;
		}
		
		curl_close($ch);
		
		return $resp;
		
	}

}

/*@set_time_limit(0);

$new = new Soft_Install();

$new->data['softdomain'] = 'domain.com'; // OPTIONAL - By Default the primary domain will be used
$new->data['softdirectory'] = 'folder'; // OPTIONAL - By default it will be installed in the /public_html folder
$new->data['admin_pass'] = 'qwerty';
$new->data['admin_email'] = 'admin@domain.com';
//$new->data['overwrite_existing'] = true; // Uncomment this line if you wish to overwrite the files and continue installation
// Uncomment the following line if you want to install original package of JS Library (By default JS installaer will install the minimal package)
//$new->data['jsinstalltype'] = 0;*/


////////////////////  FOR ISP Manager /////////////////////////

/*$new->panel = 'isp';
$url = 'https://YOUR_DOMAIN/manager/ispmgr';
$post = array(
			'username' => 'USER_NAME',
			'password' => 'PASSWORD',
			'func' => 'auth',
			'theme' => 'sirius',
			'lang' => 'en');
			
$res = $new->curl_call($url, 0, $post, 1);

preg_match_all('/cookie = binary(.*?)=(.*?); (.*?)/is', trim($res), $matches);
$new->cookie = 'ispmgr4='.$matches[2][1].'; mbar=ispmgr-5-all';
$new->login = 'https://YOUR_DOMAIN/softaculous/index.php';*/


////////////////////  FOR DirectAdmin /////////////////////////
//$new->login = 'http://USER:PASSWORD@DOMAIN:2222/CMD_PLUGINS/softaculous/index.raw';

////////////////////  FOR cPanel /////////////////////////
//$new->login = 'https://USER:PASSWORD@DOMAIN:2083/frontend/paper_lantern/softaculous/index.live.php';

/*$res = $new->install(26); // Will install WordPress

if($res == 'installed'){
	echo 'Installed';
}else{
	echo $res; // A serialized array of error will be returned
}*/

?>