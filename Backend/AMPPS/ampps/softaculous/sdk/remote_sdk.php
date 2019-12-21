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
///////// Remote API //////////
///////////////////////////////	

class Remote_API extends Softaculous_API{
	
	var $currentUser = '';
	var $loginURL = '';
	var $adminURL = '';
	var $URL = '';
	
	function Remote_API($url, $key, $pass){
		$this->__construct($url, $key, $pass);
	}
	
	/**
	 * Construtor
	 *
	 * @param        string $url The URL to Softaculous Remote
	 * @param		 string $key The Users Remote API KEY
	 * @param		 string $pass The Users Remote API PASS
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
	 * @category	 Remote
	 * @return		array $resp List of Domains in Array.
	 */
	function list_domains(){
		$act = 'act=domains';
		return $this->curl_unserialize($act);
	}
	
	/**
	 * Add a Domain for the user
	 *
	 * @param        string $domain The domain name e.g. yourdom.com
 	 * @param        string $ftp_user The FTP Username
 	 * @param        string $ftp_pass The FTP Password
 	 * @param        string $ftp_path The FTP path where the Domain is accessible e.g. /public_html
 	 * @param        string $backup_path The FTP Path where the backups will be stored e.g. /softbacks
 	 * @param        string $data_dir The Data directory Path where the data directory will be created /home/USERNAME/datadir
	 * @return		 array $resp Response of Action in an ARRAY
	 */
	function adddomain($domain, $ftp_user, $ftp_pass = '', $ftp_path, $backup_path, $data_dir, $protocol = 'ftp', $port = '21', $private_key = '', $passphrase = ''){
		
		// The act
		$act = 'act=adddomain';

		$data['domain'] = $domain;
		$data['ftp_user'] = $ftp_user;
		$data['ftp_pass'] = $ftp_pass;
		$data['ftp_path'] = $ftp_path;
		$data['backup_path'] = $backup_path;
		$data['data_dir'] = $data_dir;
		$data['protocol'] = $protocol;
		$data['port'] = $port;
		$data['private_key'] = $private_key;
		$data['passphrase'] = $passphrase;

		$data['add_domain'] = 1;
		
		return $this->curl_unserialize($act, $data);
	}
	
	/**
	 * Edit a Domain
	 *
	 * @category	 Remote
	 * @param        string $domain The domain to edit
	 * @return		 string $resp Response of Action. Default: Serialize
	 */
	function edit_domain($domain, $ftp_user, $ftp_pass, $ftp_path, $backup_path, $data_dir, $protocol = 'ftp', $port = '21', $private_key = '', $passphrase = ''){
		
		// List the domains
		$tmp = $this->list_domains();
		
		$domain_list = $tmp['domain_list'];
		
		if(empty($domain_list[$domain])){
			$resp['error']['no_domain'] = 'Domain does not exist';
			return $resp;
		}
		
		$act = 'act=editdomain&did='.$domain_list[$domain]['did'];

		$data['domain'] = $domain;
		$data['ftp_user'] = $ftp_user;
		$data['ftp_pass'] = $ftp_pass;
		$data['ftp_path'] = $ftp_path;
		$data['backup_path'] = $backup_path;
		$data['data_dir'] = $data_dir;
		$data['protocol'] = $protocol;
		$data['port'] = $port;
		$data['private_key'] = $private_key;
		$data['passphrase'] = $passphrase;

		$data['edit_domain'] = 1;
		
		// Make a call	
		return $this->curl_unserialize($act, $data);
		
	}
	
	/**
	 * Delete a Domain
	 *
	 * @category	 Remote
	 * @param        string $domain The domain to delete
	 * @return		 string $resp Response of Action. Default: Serialize
	 */
	function delete_domain($domain){
		
		// List the domains
		$tmp = $this->list_domains();
		if(empty($tmp['domain_list'])){
			$resp['error']['no_list'] = $tmp['error'];
			return $resp;
		}
		
		$domain_list = $tmp['domain_list'];
		
		if(empty($domain_list[$domain])){
			$resp['error']['no_domain'] = 'Domain does not exist';
			return $resp;
		}
		
		// Make a call		
		$act = 'act=domains&delid='.$domain_list[$domain]['did'];
		return $this->curl_unserialize($act);
		
	}
	
	/**
	 * Add a user / Reseller. To add a reseller $num_users MUST be greater than 1
	 *
	 * @category	 Remote
	 * @param        string $username The Username to add
	 * @param		 string $email The EMAIL address of the user
	 * @param		 int $num_users The number of users allowed to the reseller
	 * @return		 string $resp Response of Action. Default: Serialize
	 *						The array returned will contain the key 'done' if created successfully
	 *						If the key 'error' is NOT EMPTY, there was an error
	 */
	function adduser($username, $email, $num_users = 0){
		// Make a call		
		$act = 'act=adduser';
		
		$post['username'] = $username;
		$post['user_email'] = $email;
		$post['num_users'] = $num_users;
		$post['saveuser'] = 1;
		
		return $this->curl_unserialize($act, $post);
		
	}	
	
	/**
	 * Delete a user / Reseller. To delete a reseller $owner MUST be equal to the $username.
	 * Root user can delete any user with the owner parameter
	 *
	 * @category	 Remote
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
	 * Edit a Reseller. Only Root user can edit any reseller.
	 *
	 * @category	 Remote
	 * @param        string $username The Username to edit
	 * @param		 int $num_user The NEW NUMBER of users
	 * @return		 string $resp Response of Action. Default: Serialize
	 *						The array returned will contain the key 'done' if edited successfully
	 *						If the key 'error' is NOT EMPTY, there was an error
	 */
	function edituser($username, $num_user = 0){
		return $this->curl_unserialize('act=listuser&nof='.$num_user.'&moduser='.$username);
	}
	
	/**
	 * Lists the users
	 *
	 * @category	 Remote
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
$rsdk = new Remote_API('http://192.168.17.132', 'TESTAPIKEYREMOTE', 'PASSPASSPASSPASSPASSPASSPASSPASS');

$res = $rsdk->switchUser('iamauser');

// Do whatever you wanted to do

*/

////////////////////////////
//		List Domain       //
////////////////////////////

/* 
$rsdk = new Remote_API('http://192.168.17.132', 'TESTAPIKEYREMOTE', 'PASSPASSPASSPASSPASSPASSPASSPASS');

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
$rsdk = new Remote_API('http://192.168.17.132', 'TESTAPIKEYREMOTE', 'PASSPASSPASSPASSPASSPASSPASSPASS');

// Get the list of domains
$res = $rsdk->adddomain('domain.com', 'ftp_username', 'ftp_pass', '/public_html', '/', '/home/USERNAME/datadir');

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
//		Edit Domain       //
//////////////////////////////
/*
$rsdk = new Remote_API('http://192.168.17.132', 'TESTAPIKEYREMOTE', 'PASSPASSPASSPASSPASSPASSPASSPASS');

// Get the list of domains
$res = $rsdk->edit_domain('domain.com', 'user', 'pass', '/public_html', '/backups', '/home/soft/datadir');

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
$rsdk = new Remote_API('http://192.168.17.132', 'TESTAPIKEYREMOTE', 'PASSPASSPASSPASSPASSPASSPASSPASS');

$res = $rsdk->delete_domain('domain.com');

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
$rsdk = new Remote_API('http://192.168.17.132', 'ADMINAPIKEYREMOTE', 'PASSPASSPASSPASSPASSPASSPASSPASS');

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
$rsdk = new Remote_API('http://192.168.17.132:2006', 'TESTAPIKEYREMOTE', 'PASSPASSPASSPASSPASSPASSPASSPASS');

$res = $rsdk->adduser('userNAME', 'a@a.com', 1);

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
$rsdk = new Remote_API('http://192.168.17.132:2006', 'TESTAPIKEYREMOTE', 'PASSPASSPASSPASSPASSPASSPASSPASS');

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
$rsdk = new Remote_API('http://192.168.17.132:2006', 'TESTAPIKEYREMOTE', 'PASSPASSPASSPASSPASSPASSPASSPASS');

$res = $rsdk->edituser('reseller', 1);

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