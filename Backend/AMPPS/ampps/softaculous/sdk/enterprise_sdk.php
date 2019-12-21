<?php

// --------------------------------------------------------------------------------
// Webuzo - Softaculous Development Kit
// --------------------------------------------------------------------------------
// // http://www.webuzo.com
// --------------------------------------------------------------------------------
//
// Description :
//   Webuzo_API is a Class of Webuzo that allows users to perform action on all of the features //   provided by Webuzo like managing FTP, Certificates, Domains, MX records, Email accounts, 
//   Forwarders, Zoner files, SSH, IP Block, Installing Tomcat/Rockmongo/AWStats in addition to
//   installing, upgrading, removing, backing up & restoring the installations made on the
//   server.
//
////////////////////////////////////////////////////////////////////////////////////
	
if(!defined('SOFTACULOUS')){	
	define('SOFTACULOUS', 1);
}

include_once(dirname(__FILE__).'/sdk.php');

///////////////////////////////
///////// Enterprise API //////////
///////////////////////////////	

class Enterprise_API extends Softaculous_API{
	
	var $currentUser = '';
	var $loginURL = '';
	var $adminURL = '';
	var $URL = '';
	
	function Enterprise_API($url, $key, $pass){
		$this->__construct($url, $key, $pass);
	}
	
	/**
	 * Construtor
	 *
	 * @param        string $url The URL to Softaculous Enterprise
	 * @param		 string $key The Users Enterprise API KEY
	 * @param		 string $pass The Users Enterprise API PASS
	 * @return       NULL
	 */
	function __construct($url, $key, $pass){
		
		// Add the ?
		if(!strstr($url, '?')){
			$url = $url.'?';
		}
		
		$this->URL = $url;
		$this->loginURL = $url.'&api_key='.$key.'&api_pass='.$pass.'&';
		$this->login = $this->loginURL;
		
	}
	
	/**
	 * Lets you login as that USER IF you have the permission to DO SO.
	 * Basically only Admins and Resellers can use this function.
	 *
	 * @param        string $username The Username you want to operate as
	 * @return       NULL
	 */
	function switchUser($username = '', $owner = ''){
		
		$this->login = $this->loginURL.'loginAs='.$username.'&'.(!empty($owner) ? 'owner='.$owner.'&' : '');
		
		// Do you want to be yourself ?
		if(empty($username)){
			$this->login = $this->loginURL;
		}
		
	}
	
	/**
	 * Create a SESSION of a USER to enable the user to USE the Softaculous GUI Interface 
	 *
	 * @param        string $username The username for whom you want to create a session
	 * @return		 string $resp Will contain a KEY 'rsid' with the session ID which can be used to redirect 
	 *						the user to $url.'?rsid='.$resp['rsid'];
	 */
	function createSession($username, $owner = '', $ip_address = ''){
		
		// Make a call
		$resp = $this->curl_unserialize('createSession='.$username.'&'.(!empty($owner) ? 'owner='.$owner.'&' : '').(!empty($ip_address) ? 'ip_address='.$ip_address.'&' : ''));
		
		if(!empty($resp['rsid'])){
			$resp['redirect_url'] = $this->URL.'rsid='.$resp['rsid'];
		}
		
		return $resp;
		
	}
	
	/**
	 * List Domains
	 *
	 * @category	 Enterprise
	 * @return		array $resp List of Domains in Array.
	 */
	function list_domains(){
		$act = 'act=listdomains';
		return $this->curl_unserialize($act);		
	}
	
	/**
	 * Add a Domain for the user
	 *
	 * @param        string $domain The domain name e.g. yourdom.com
	 * @param        string $username The username who will be accessing the domain
	 * @param        string $email Email of the username
 	 * @param        string $path Full path of the web accessible directory
 	 * @param        string $backup_dir Backup Path
 	 * @param        string $replace_path Replace Path
 	 * @param        string $data_dir Data Dir
	 * @return		 array $resp Response of Action in an ARRAY
	 */
	function adddomain($domain, $username, $path, $backup_dir, $replace_path, $data_dir){
		
		// The act
		$act = 'act=adddomain';

		$data['domain'] = $domain;
		$data['username'] = $username;
		$data['path'] = $path;
		$data['backup_dir'] = $backup_dir;
		$data['replace_path'] = $replace_path;
		$data['data_dir'] = $data_dir;

		$data['savedomain'] = 1;
		
		return $this->curl_unserialize($act, $data);
	}
	
	/**
	 * Delete a Domain
	 *
	 * @category	 Enterprise
	 * @param        string $domain The domain to delete
	 * @return		 string $resp Response of Action. Default: Serialize
	 */
	function delete_domain($domain, $delowner, $deluser){
		
		$domain_list = array();
		
		// List the domains
		$tmp = $this->list_domains();
		
		foreach($tmp['listdomains'] as $dk => $dv){
			$domain_list[$dv['domain']] =  $dv['did'];
		}
		
		if(empty($domain_list[$domain])){
			$resp['error']['no_domain'] = 'Domain does not exist';
			return $resp;
		}
		
		// Make a call		
		$act = 'act=listdomains&deletedomain=1&deluser='.$deluser.'&delowner='.$delowner.'&deldomain='.$domain;
		
		return $this->curl_unserialize($act);
		
	}
	
	/**
	 * Add a user / Reseller. To add a reseller $num_users MUST be greater than 1
	 *
	 * @category	 Enterprise
	 * @param        string $username The Username to add
	 * @param		 string $email The EMAIL address of the user
	 * @param		 int $num_users The number of users allowed to the reseller
	 * @return		 string $resp Response of Action. Default: Serialize
	 *						The array returned will contain the key 'done' if created successfully
	 *						If the key 'error' is NOT EMPTY, there was an error
	 */
	function adduser($username, $email, $uid, $gid, $num_users = 0){
		// Make a call		
		$act = 'act=adduser';
		
		$post['username'] = $username;
		$post['user_email'] = $email;
		$post['uid'] = $uid;
		$post['gid'] = $gid;
		$post['num_users'] = $num_users;
		$post['saveuser'] = 1;
		
		return $this->curl_unserialize($act, $post);
		
	}	
	
	/**
	 * Delete a user / Reseller. To delete a reseller $owner MUST be equal to the $username.
	 * Root user can delete any user with the owner parameter
	 *
	 * @category	 Enterprise
	 * @param        string $username The Username to delete
	 * @param		 int $owner The owner to the reseller
	 * @return		 string $resp Response of Action. Default: Serialize
	 *						The array returned will contain the key 'done' if deleted successfully
	 *						If the key 'error' is NOT EMPTY, there was an error
	 */
	function deleteuser($username, $owner = ''){
		return $this->curl_unserialize('act=listuser&deluser='.$username.'&delowner='.$owner);
	}
		
	/**
	 * Edit a User/Reseller
	 *
	 * @category	 	Enterprise
	 * @param		string $owner The Owner of the user
	 * @param		string $username The Username to delete
	 * @param		string $uid UID
	 * @param		string $gid GID
	 * @param		int $num_user The NEW NUMBER of users (Only Resellers can edit number of users)
	 * @param		string $new_username The NEW Username of the user (Username can't be edited for Reseller)
	 * @param		string $new_email The NEW Email of the user
	 * @return		string $resp Response of Action. Default: Serialize
	 *				The array returned will contain the key 'done' if edited successfully
	 *				If the key 'error' is NOT EMPTY, there was an error
	 */
	function edituser($owner, $username, $uid, $gid, $num_user = 0, $new_username = '', $new_email = ''){
		
		return $this->curl_unserialize('act=listuser&nof='.$num_user.'&moduser='.$username.'&modowner='.$owner.'&uid='.$uid.'&gid='.$gid.(!empty($new_username) ? '&updateuser='.$new_username : '').(!empty($new_email) ? '&email='.$new_email : ''));
	
	}
	
	
	/**
	 * Lists the users
	 *
	 * @category	 Enterprise
	 * @return		 string $resp Response of Action. Default: Serialize
	 *						The array returned will contain the key 'listusers' with the list of users
	 */
	function listusers(){
		return $this->curl_unserialize('act=listuser');
	}
	
}

//////////////////////////////////////////////////////////////////////
//							EXAMPLES								//
//////////////////////////////////////////////////////////////////////

////////////////////////////
//		Switch User       //
////////////////////////////

/* 
$rsdk = new Enterprise_API('http://127.0.0.1/soft/softaculous/enduser/index.live.php', 'pirrehjhzrkgwztr', 'odxzhipr4nhntkrcx1zjvf4cxysgaffd');

$res = $rsdk->switchUser('iamauser');

// Do whatever you wanted to do

*/

////////////////////////////
//		List Domain       //
////////////////////////////

/*
$rsdk = new Enterprise_API('http://192.168.17.131:2006', 'pirrehjhzrkgwztr', 'odxzhipr4nhntkrcx1zjvf4cxysgaffd');

// Get the list of domains
$res = $rsdk->list_domains();

// Error
if(!empty($res['error'])){
	
	if(!empty($res['error'])){
		$rsdk->r_print($res['error']);
	}

// No error
}else{
	$rsdk->r_print($res);	
}
*/


///////////////////////////
//		Add Domain       //
///////////////////////////
/*
$rsdk = new Enterprise_API('http://192.168.17.131:2006', 'rnrfsdrmyafgmcfo', 't2hx1sux348vu3kzb13uzqogo9cpg0ce');

// Get the list of domains
$res = $rsdk->adddomain('192.168.17.157', 'jigar', '/NFS/a/var/www/html', '/NFS/a/var/www/html/backups', '/NFS/a', '/NFS/a/var/www/html/datadir');

// Error
if(!empty($res['error'])){
	
	if(!empty($res['error'])){
		$rsdk->r_print($res['error']);
	}

// No error
}else{
	$rsdk->r_print($res);	
}
*/



//////////////////////////////
//		Delete Domain       //
//////////////////////////////
/*
$rsdk = new Enterprise_API('http://192.168.17.131:2006', 'rnrfsdrmyafgmcfo', 't2hx1sux348vu3kzb13uzqogo9cpg0ce');

$res = $rsdk->delete_domain('192.168.17.157', 'root', 'root');

// Error
if(!empty($res['error'])){
	
	if(!empty($res['error'])){
		$rsdk->r_print($res['error']);
	}

// No error
}else{
	// $res['done'] will be TRUE
	$rsdk->r_print($res);
}
*/

//////////////////////////////
//		Create Session      //
//////////////////////////////
/*
$rsdk = new Enterprise_API('http://192.168.17.131', 'pirrehjhzrkgwztr', 'odxzhipr4nhntkrcx1zjvf4cxysgaffd');

$res = $rsdk->createSession('root');

// Error
if(!empty($res['error'])){
	
	if(!empty($res['error'])){
		$rsdk->r_print($res['error']);
	}

// No error
}else{
	$rsdk->r_print($res);
}
*/



////////////////////////
//		ADD USER      //
////////////////////////
/*
$rsdk = new Enterprise_API('http://192.168.17.131:2006', 'pirrehjhzrkgwztr', 'odxzhipr4nhntkrcx1zjvf4cxysgaffd');

$res = $rsdk->adduser('ketan', 'a@a.com', '505', '505', 15);

// Error
if(!empty($res['error'])){
	
	if(!empty($res['error'])){
		$rsdk->r_print($res['error']);
	}

// No error
}else{
	$rsdk->r_print($res);
}
*/


////////////////////////
//		List USERs    //
////////////////////////
/*
$rsdk = new Enterprise_API('http://192.168.17.131:2006', 'pirrehjhzrkgwztr', 'odxzhipr4nhntkrcx1zjvf4cxysgaffd');

$res = $rsdk->listusers();

// Error
if(!empty($res['error'])){
	
	if(!empty($res['error'])){
		$rsdk->r_print($res['error']);
	}

// No error
}else{
	$rsdk->r_print($res);
}
*/


////////////////////////
//		EDIT USER     //
////////////////////////
/*
$rsdk = new Enterprise_API('http://192.168.17.131:2006', 'pirrehjhzrkgwztr', 'odxzhipr4nhntkrcx1zjvf4cxysgaffd');

$res = $rsdk->edituser('jigar', 'jigar', '506', '506', 100);

// Error
if(!empty($res['error'])){
	
	if(!empty($res['error'])){
		$rsdk->r_print($res['error']);
	}

// No error
}else{
	$rsdk->r_print($res);
}
*/

// **************************************************************************************
// 											END OF FILE
// **************************************************************************************



?>