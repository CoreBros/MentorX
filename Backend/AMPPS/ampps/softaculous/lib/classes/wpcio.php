<?php

class wpcio{

	// Public
	var $ftp_conn;
	
	// Private
	private $host = '';
	private $port = '';
	private $user = '';
	private $pass = '';
	private $error = array();
	var $tpfile = '';
	
	function __construct(){
		// Not required
	}
	
	/**
	* Destructor
	*/	
	function __destruct(){
		// Task when process is completed. Generally closing the connection.
	}
	
	
	/**
	* Connect to the server
	* Param1 : $host - Domain name or the IP address to connect
	* Param2 : $port - Port through which server will be connected
	* Param2 : $user - User to login
	* Param2 : $pass - Password of the user to login
	* Return : int(1) in case of error
			 : return $this->ftp_conn with the resource connection
	*/
	function connect($host, $port='', $user='', $pass){
		// Connect to the host and login
		global $error, $l, $__settings;
		
		$verify_url = $host.'/wp-admin/admin-ajax.php?action=my_wpc_actions&wpc_act=verifyconnect&auth_key='.$pass;
		$resp = curl_call($verify_url, 0, 5);
		$settings_resp = json_decode(trim($resp, "0"), 1);
		//echo '<br />Curl resp connect: '.$verify_url;r_print($resp);r_print($settings_resp);
		
		if(!empty($settings_resp['error'])){
			$error[] = $settings_resp['error'];
			return false;
		}
		
		if(empty($settings_resp['data'])){
			$error['empty_resp'] = $l['empty_resp_err'];
			return false;
		}
		
		$this->host = $host;
		$this->pass = $pass;
		
		$this->tpfile = 'php://temp';
		
		return true;
		
	}
	
	/**
	* Delete file
	* Param  : File Path to be deleted
	* Return : Boolean. True if deleted successfully.
	*/
	function delete($filename){
		// Delete Code will come here
		global $error;
		
		$args = func_get_args();
		$args = urlencode(implode(',', $args));
		
		$url = $this->host.'/wp-admin/admin-ajax.php?action=my_wpc_actions&wpc_act=fileactions&auth_key='.$this->pass.'&request=delete&args='.$args;
		$resp = curl_call($url, 0, 5);
		$settings_resp = json_decode(trim($resp, "0"), 1);
		//echo '<br />Curl resp delete: '.$url;r_print($resp);r_print($settings_resp);
		
		if(!empty($settings_resp['error'])){
			//$error[] = $settings_resp['error'];
			return false;
		}
		
		if(empty($settings_resp['data'])){
			//$error['empty_resp'] = $l['empty_resp_err'];
			return false;
		}
		
		if(!empty($settings_resp['func_response'])){
			return true;
		}
		
		return true;
	}
	
	
	/**
	* Is directory present
	* Param  : $dir - Path to directory
	* Return : Boolean. True if directory is present.
	*/
	function is_dir($dir){
		// Check if directory specified is present
		global $error;
		
		$args = func_get_args();
		$args = urlencode(implode(',', $args));
		
		$url = $this->host.'/wp-admin/admin-ajax.php?action=my_wpc_actions&wpc_act=fileactions&auth_key='.$this->pass.'&request=is_dir&args='.$args;
		$resp = curl_call($url, 0, 5);
		$settings_resp = json_decode(trim($resp, "0"), 1);
		//echo '<br />Curl resp is_dir: '.$url;r_print($resp);r_print($settings_resp);
		
		if(!empty($settings_resp['error'])){
			//$error[] = $settings_resp['error'];
			return false;
		}
		
		if(!empty($settings_resp['done'])){
			return true;
		}
		
		return true;
	}
	
	
	/**
	* Change Directory
	* Param  : $dir - Path to directory
	* Return : Boolean. True if directory was changed.
	*/
	function chdir($dir){
		// Change Directory
		global $error;
		
		$args = func_get_args();
		$args = urlencode(implode(',', $args));
		
		$url = $this->host.'/wp-admin/admin-ajax.php?action=my_wpc_actions&wpc_act=fileactions&auth_key='.$this->pass.'&request=chdir&args='.$args;
		
		$resp = curl_call($url, 0, 5);
		$settings_resp = json_decode(trim($resp, "0"), 1);
		//echo '<br />Curl resp chdir: '.$url;r_print($resp);r_print($settings_resp);
		
		if(!empty($settings_resp['error'])){
			//$error[] = $settings_resp['error'];
			return false;
		}
		
		if(!empty($settings_resp['done'])){
			return true;
		}
		
		return false;
	}
	
	
	/**
	* Delete file
	* Param  : File Path to be deleted
	* Return : String. Path of the Directory.
	*/
	function pwd(){
		global $user, $site_id, $error, $__settings;
		// Prints Working Directory
		$pwd = $__settings['softpath'];
		return $pwd;
		//return true;
	}
	
	
	/**
	* Change Mode
	* Param1  : $pathname - Path to be chmod
	* Return : Boolean. True if chmod was successful.
	*/
	function chmod($pathname, $mode){
		// Change Mode
		global $error;
		
		$args = func_get_args();
		$args = urlencode(implode(',', $args));
		
		$url = $this->host.'/wp-admin/admin-ajax.php?action=my_wpc_actions&wpc_act=fileactions&auth_key='.$this->pass.'&request=chmod&args='.$args;
		$resp = curl_call($url, 0, 5);
		$settings_resp = json_decode(trim($resp, "0"), 1);
		//echo '<br />Curl resp chmod: '.$url;r_print($resp);r_print($settings_resp);
		
		if(!empty($settings_resp['error'])){
			//$error[] = $settings_resp['error'];
			return false;
		}
		
		if(!empty($settings_resp['done'])){
			return true;
		}
		
		return true;
	}
	
	
	/**
	* Check if file exists
	* Param  : $file - File Path
	* Return : Boolean. True is file is present.
	*/
	function file_exists($file){
		// Check if file exists		
		return $this->is_exists($file);
	}
	
	
	/**
	* Rename File/Folder
	* Param1  : $from - Old Path
	* Param2  : $to - New Path
	* Return : Boolean. True if file/folder was renamed successfully.
	*/
	function rename($from, $to){
		// Check if directory or file exists
		global $error;
		
		$args = func_get_args();
		$args = urlencode(implode(',', $args));
		
		$url = $this->host.'/wp-admin/admin-ajax.php?action=my_wpc_actions&wpc_act=fileactions&auth_key='.$this->pass.'&request=rename&args='.$args;
		$resp = curl_call($url, 0, 5);
		$settings_resp = json_decode(trim($resp, "0"), 1);
		//echo '<br />Curl resp is_exists: '.$url;r_print($resp);r_print($settings_resp);
		
		if(!empty($settings_resp['error'])){
			//$error[] = $settings_resp['error'];
			return false;
		}
		
		if(!empty($settings_resp['done'])){
			return true;
		}
		
		return false;
	}
	
	
	/**
	* Delete directory
	* Param  : $dir - Path to Directory
	* Return : Boolean. True if deleted successfully.
	*/
	function rmdir($dir){
		// Remove Directory
	}
	
	
	/**
	* Make Directory
	* Param  : $dirname - Directory Path
	* Return : Boolean. True if directory was successfully created.
	*/
	function mkdir($dirname, $mode = 0755){
		// Make Directory
		// Check if directory specified is present
		global $error, $l;
		
		$args = func_get_args();
		$args = urlencode(implode(',', $args));
		
		$url = $this->host.'/wp-admin/admin-ajax.php?action=my_wpc_actions&wpc_act=fileactions&auth_key='.$this->pass.'&request=mkdir&args='.$args;
		$resp = curl_call($url, 0, 5);
		$settings_resp = json_decode(trim($resp, "0"), 1);
		//echo '<br />Curl resp mkdir: '.$url;r_print($resp);r_print($settings_resp);
		
		if(!empty($settings_resp['error'])){
			$error[] = lang_vars($l['err_wpc_mkdir'], array($dirname));
			return false;
		}
		
		if(!empty($settings_resp['done'])){
			return true;
		}
		
		return true;
	}

	
	/**
	* Make Directory Recursively
	* Param  : $dirname - Directory Path
	* Return : Boolean. True if directory was successfully created.
	*/
	function mmkdir($dir, $mode = 0755) {
		// Make Directory recursively
	}
	
	
	/**
	* Exec (Optional)
	* Param  : $command - Command to be excuted
	* Return : Boolean. True if executed successfully.
	*/
	function exec($command){
		// Exec Function (Optional)
	}
	
	
	/**
	* Check if directory or file exists
	* Param  : $file - file/directory path
	* Return : Boolean. True if file/directory exists.
	*/
	function is_exists($file){
		// Check if directory or file exists
		global $error;
		
		$args = func_get_args();
		$args = urlencode(implode(',', $args));
		
		$url = $this->host.'/wp-admin/admin-ajax.php?action=my_wpc_actions&wpc_act=fileactions&auth_key='.$this->pass.'&request=file_exists&args='.$args;
		$resp = curl_call($url, 0, 5);
		$settings_resp = json_decode(trim($resp, "0"), 1);
		//echo '<br />Curl resp is_exists: '.$url;r_print($resp);r_print($settings_resp);
		
		if(!empty($settings_resp['error'])){
			//$error[] = $settings_resp['error'];
			return false;
		}
		
		if(!empty($settings_resp['done'])){
			return true;
		}
		
		return false;
	}
	
	
	/**
	* File List of the Directory
	* Param  : $dir - Path of the Directory
	* Return : array. Return format should be same as ftp_nlist
	*/
	function filelist($dir, $searchsubdirs = 0){
		// Get the file list similar to ftp_nlist
		
		// Check if directory specified is present
		global $error;
		
		$args = func_get_args();
		
		$args = urlencode(implode(',', $args));
		
		$url = $this->host.'/wp-admin/admin-ajax.php?action=my_wpc_actions&wpc_act=fileactions&auth_key='.$this->pass.'&request=filelist&args='.$args;
		$resp = curl_call($url, 0, 5);
		$settings_resp = json_decode(trim($resp, "0"), 1);
		//echo '<br />Curl resp filelist: '.$url;r_print($resp);r_print($settings_resp);
		
		if(!empty($settings_resp['error'])){
			//$error[] = $settings_resp['error'];
			return false;
		}
		
		if(empty($settings_resp['done'])){
			return false;
		}
		
		if(empty($settings_resp['func_response'])){
			return false;
		}
		
		$list = array();
		foreach($settings_resp['func_response'] as $lk => $lv){
			$list[] = $lv['name'];
		}
		
		return $list;
	}
	
	function nlist($dir){
		return $this->filelist($dir, 0);
	}
	
	
	/**
	* Put a file
	* Param1  : File Path of Local file
	* Param2  : File Path of Remote file
	* Return  : Boolean. True if file was uploaded successfully.
	*/
	function put($local_file, $remote_file){
		// Put File Local to Remote
		global $error;
		
		$file = implode('', file($local_file));
		
		return $this->softput($remote_file, $file);
	}
	
	
	/**
	* Get the file from Remote to Local
	* Param1  : Path to Remote File
	* Param2  : Path to Local File
	* Return  : Boolean. True is deleted successfully.
	*/
	function get($remote_file, $local_file){
		// Get file remote to local
	}
	
	
	/**
	* Put the whole directory recursively
	* Param1  : Local Directory
	* Param2  : Remote Directory
	* Return  : Boolean. True if whole directory was uploaded.
	*/
	function mput($local=".", $remote=NULL, $continious=false){
		$local=realpath($local);
		if(!@file_exists($local)){
			$error[] = 'Cannot open local folder. Cannot stat folder '.$local;
			return false;
		}
		
		if(!is_dir($local)) return $this->put($local, $remote);
		
		if(empty($remote)) $remote=".";
		elseif(!$this->file_exists($remote) and !$this->mkdir($remote)) return false;
		if($handle = opendir($local)) {
			$list=array();
			while (false !== ($file = readdir($handle))) {
				if ($file != "." && $file != "..") $list[]=$file;
			}
			closedir($handle);
		} else {
			$error[] = 'Cannot open local folder. Cannot read folder '.$local;
			return false;
		}
		if(empty($list)) return true;
		$ret=true;
		foreach($list as $el) {
			if(is_dir($local."/".$el)) $t=$this->mput($local."/".$el, $remote."/".$el);
			else $t=$this->put($local."/".$el, $remote."/".$el);
			if(!$t) {
				$ret=false;
				if(!$continious) break;
			}
		}
		return $ret;
	}
	
	
	/**
	* Takes the DATA rather than the LOCAL file 
	* Param1  : Remote file
	* Param2  : String (Content of the file)
	* Param3  : Boolean - Allow restoring. 1 to enable
	* Return : Boolean. True is deleted successfully.
	*/
	function softput($remotefile, $softdata) {
		// Put String to Remote File
	global $error;
		
		$post = array('action' => 'my_wpc_actions',
					'wpc_act' => 'fileactions',
					'auth_key' => $this->pass,
					'request' => 'put',
					'filename' => $remotefile,
					'putdata' => base64_encode($softdata));
		
		$url = $this->host.'/wp-admin/admin-ajax.php';

		$resp = curl_call($url, 0, 5, $post);
		$settings_resp = json_decode(trim($resp, "0"), 1);
		//echo '<br />Curl resp softput('.$remotefile.'): '.$url;r_print($resp);r_print($settings_resp);
		
		if(!empty($settings_resp['error'])){
			$error[] = $settings_resp['error'];
			return false;
		}
		
		if(!empty($settings_resp['done'])){
			return true;
		}
		
		return true;
	}
	
	
	/**
	* Returns the Data
	* Param  : remote file
	* Return : String. Contents of the file.
	*/
	function softget($remotefile=NULL) {
		// Reads and returns the contents of the remote file		
		global $error;
		
		$args = func_get_args();
		$args = urlencode(implode(',', $args));
		
		$url = $this->host.'/wp-admin/admin-ajax.php?action=my_wpc_actions&wpc_act=fileactions&auth_key='.$this->pass.'&request=sfile&args='.$args;
		$resp = curl_call($url, 0, 5);
		$settings_resp = json_decode(trim($resp, "0"), 1);
		//echo '<br />Curl resp softget: '.$url;r_print($resp);r_print($settings_resp);
		
		if(!empty($settings_resp['error'])){
			return false;
		}
		
		return $settings_resp['func_response'];
	}
	
	function is_customio(){
		//return true;
	}
	
	function sinstall_wp_plugins($plugins, $action = 'install'){
		global $__settings, $plugins_list, $error;
		
		if(!is_array($plugins)) $plugins = array($plugins);
		
		$sources = array();
		
		foreach($plugins as $plk => $plugin){
			if($action == 'install' && in_array($plk, array_keys($plugins_list[$__settings['insid']]['all_plugins']))){
				continue;
			}
			
			if($action == 'update' && !isset($plugins_list[$__settings['insid']]['all_plugins'][$plk]['new_version'])){
				continue;
			}
			
			$download_link = optREQ('download_link');
			if(empty($download_link)){
				
				$pl_slug = $plk;
				if(preg_match('/(.*?)\/(.*?)\.php/is', $plk)){
				    soft_preg_replace('/(.*?)\/(.*?)\.php/is', $plk, $pl_slug, 1, 1);
				}
				if(empty($pl_slug)){//This is the case for the default Hello Dolly plugin that comes installed with the initial WP package
					continue;
				}
				
				$plugin_data = fetch_wp_plugins($pl_slug, 'slug');
				$download_link = $plugin_data[0]->download_link;
			}
			
			$sources[$plk] = $download_link;
		}
		
		$ins_url = $__settings['softurl'].'/wp-admin/admin-ajax.php?action=my_wpc_actions&wpc_act=siteactions&auth_key='.$__settings['wpcentral_key'].'&request='.$action.'&plugins='.urlencode(implode(',', array_keys($plugins))).'&sources='.urlencode(implode(',', $sources)).'&siteurl='.urlencode($__settings['softurl']);
		
		//$ins_url = $__settings['softurl'].'/wp-admin/admin-ajax.php?action=my_wpc_actions&wpc_act=siteactions&auth_key='.$__settings['wpcentral_key'].'&request=install&plugins='.urlencode(implode(',', $plugins)).'&sources='.urlencode(implode(',', $sources));
		
		$resp = curl_call($ins_url, 0, 5);
		$resp_dec = json_decode(trim($resp, "0"), 1);
		//echo '<br />Curl resp All: '.$ins_url;r_print($resp);r_print($resp_dec);
		
		if(!empty($resp_dec['error'])){
			$error[] = $resp_dec['error'];
			return false;
		}
		
		/////////////Error Logs
		
		return true;
	}
	
	function sinstall_wp_themes($themes, $action = 'install'){
		global $__settings, $themes_list;
		
		if(!is_array($themes)) $themes = array($themes);
		
		$sources = array();
		foreach($themes as $thk => $theme){			
			if($action == 'install' && in_array($thk, array_keys($themes_list[$__settings['insid']]['all_themes']))){
				continue;
			}
			
			if($action == 'update' && !isset($themes_list[$__settings['insid']]['all_themes'][$thk]['new_version'])){
				continue;
			}
			
			$download_link = optREQ('download_link');
			if(empty($download_link)){
				
				$theme_data = fetch_wp_themes($thk, 'slug');
				$download_link = $theme_data[0]->download_link;
			}
			
			$sources[$plk] = $download_link;
		}
		
		//$ins_url = $__settings['softurl'].'/wp-admin/admin-ajax.php?action=my_wpc_actions&wpc_act=siteactions&auth_key='.$__settings['wpcentral_key'].'&request='.$action.'&themes='.urlencode(implode(',', $themes)).'&sources='.urlencode(implode(',', $sources));
		
		$ins_url = $__settings['softurl'].'/wp-admin/admin-ajax.php?action=my_wpc_actions&wpc_act=siteactions&auth_key='.$__settings['wpcentral_key'].'&request='.$action.'&themes='.urlencode(implode(',', array_keys($themes))).'&sources='.urlencode(implode(',', $sources)).'&siteurl='.urlencode($__settings['softurl']);
		
		$resp = curl_call($ins_url, 0, 5);
		$resp_dec = json_decode(trim($resp, "0"), 1);
		//echo '<br />Curl resp All: '.$ins_url;r_print($resp);r_print($resp_dec);
		
		/////////////Error Logs
		if(!empty($resp_dec['error'])){
			$error[] = $resp_dec['error'];
			return false;
		}
		
		return true;
	}
	
	function local_sunzip($file, $destination, $overwrite = 0, $include = array(), $exclude = array()){
		// Check if directory or file exists
		global $error;
		
		$args = func_get_args();
		$args = urlencode(implode(',', $args));
		
		$url = $this->host.'/wp-admin/admin-ajax.php?action=my_wpc_actions&wpc_act=fileactions&auth_key='.$this->pass.'&request=unzip&args='.$args;
		$resp = curl_call($url, 0, 5);
		$settings_resp = json_decode(trim($resp, "0"), 1);
		//echo '<br />Curl resp unzip: '.$url;r_print($resp);r_print($settings_resp);
		
		if(!empty($settings_resp['error'])){
			//$error[] = $settings_resp['error'];
			return false;
		}
		
		if(!empty($settings_resp['done'])){
			return true;
		}
		
		return false;
	}
	
	/**
	* Remove directory
	* Param  : Dir Path to be removed
	* Return : Boolean. True if removed successfully.
	*/
	function srm($path){
		// Delete Code will come here
		global $error;
		
		$args = func_get_args();
		$args = urlencode(implode(',', $args));
		
		$url = $this->host.'/wp-admin/admin-ajax.php?action=my_wpc_actions&wpc_act=fileactions&auth_key='.$this->pass.'&request=srm&args='.$args;
		$resp = curl_call($url, 0, 5);
		$settings_resp = json_decode(trim($resp, "0"), 1);
		//echo '<br />Curl resp srm: '.$url;r_print($resp);r_print($settings_resp);
		
		if(!empty($settings_resp['error'])){
			//$error[] = $settings_resp['error'];
			return false;
		}
		
		if(empty($settings_resp['data'])){
			//$error['empty_resp'] = $l['empty_resp_err'];
			return false;
		}
		
		if(!empty($settings_resp['func_response'])){
			return true;
		}
		
		return true;
	}

}
?>