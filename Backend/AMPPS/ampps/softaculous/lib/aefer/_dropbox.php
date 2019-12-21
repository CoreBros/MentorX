<?php

class dropbox{

	var $access_token;
	var $backup_loc;
	var $path;
	var $filename;
	var $filesize = 0;
	var $session_id = '';
	var $offset = 0;
	var $tmpsize = 0;
	var $tpfile = '';
	var $mode = '';
	var $wp = NULL; // Memory Write Pointer
	var $chunk = 1048576;	//1MB
	var $range_lower_limit = 0;
	var $range_upper_limit = 0;
	
	// APP name is Softaculous auto installer and is assigned to sales@softaculous.com Dropbox account
	var $app_key = '1hthriqdm4cunck';
	var $app_secret = 'bo2bk8cbs3e7p3a';
	
	function stream_open($path, $mode, $options, &$opened_path){
		global $error;
		
		$stream = parse_url($path);
		
		$this->access_token = $stream['host'];
		$this->path = $stream['path'];
		$this->mode = $mode;
		
		$pathinfo = pathinfo($this->path);
		$this->filename = $pathinfo['basename'];
		$dir = trim($pathinfo['dirname'], '/\\');
		$this->backup_loc = (empty($dir) ? "" : $pathinfo['dirname']);
		//php://memory not working on localhost
		$this->tpfile = 'php://temp';		
		$ret = false;
		
		if(preg_match('/w|a/is', $this->mode)){
			$this->offset = 0;
			$tfp = fopen($this->tpfile, $this->mode);
			
			if(empty($GLOBALS['sinit_data'])){
				$ret = $this->upload_start($tfp);
			}else{
				$ret = true;
			}
			
			fclose($tfp);
		}
		
		return $ret;		
	}
	
	// Dropbox Create a file
	function upload_start($fp){
		global $error;

		$upload_url = 'https://content.dropboxapi.com/2/files/upload_session/start';
		$headers = array('Authorization: Bearer '.$this->access_token,
						'Dropbox-API-Arg: {"close": false}',
						'Content-Type: application/octet-stream');
		
		$resp = $this->__curl($upload_url, $headers, $fp, 0);
		
		if(empty($resp) || empty($resp['session_id'])){
			return false;
		}
		
		$this->session_id = $resp['session_id'];
		$GLOBALS['init_data'] = $this->session_id;
		
		return true;
	}
	
	function stream_write($data){
		global $error;
		
		if(!is_resource($this->wp)){
			$this->wp = fopen($this->tpfile, 'w+');
		}
		
		//Initially store the data in a memory
		fwrite($this->wp, $data);		
		$this->tmpsize += strlen($data);
		$data_size = strlen($data);
		
		// Are we already more than 4 MB ?
		if($this->tmpsize >= 2000000){
			
			rewind($this->wp);
			
			//Call upload append function to write the data from PHP Memory stream to Dropbox
			$this->upload_append($this->session_id, $this->wp, $this->tmpsize);
			
			// Close the temp file and reset the variables
			fclose($this->wp);
			$this->wp = NULL;
			$this->tmpsize = 0;
		}
		
		return $data_size;	
	}
	
	// Dropbox API to upload
	function upload_append($session_id, $filep, $data_size){
		global $error;
		
		if(!empty($GLOBALS['sinit_data'])){
			$session_id = $GLOBALS['sinit_data'];
			$this->session_id = $GLOBALS['sinit_data'];
			$GLOBALS['init_data'] = $session_id;			
		}
		
		if(!empty($GLOBALS['init_pos'])){
			$this->offset = $GLOBALS['start_pos'];
		}
		
		$args = json_encode(array('cursor' => array('session_id' => $session_id, 
											'offset' => $this->offset), 
								'close' => false));
		
		$upload_url = 'https://content.dropboxapi.com/2/files/upload_session/append_v2';
		$headers = array('Authorization: Bearer '.$this->access_token,
						'Dropbox-API-Arg: '.$args,
						'Content-Type: application/octet-stream');
		
		$resp = $this->__curl($upload_url, $headers, $filep, $data_size);
		
		if(is_null($resp)){
			$this->offset += $data_size;
			$GLOBALS['start_pos'] = $this->offset;
			return $data_size;
		}
		
		return false;
		
	}
	
	function stream_close(){
		global $error;
		
		if(preg_match('/w|a/is', $this->mode)){
			// Is there still some data left to be written ?
			if($this->tmpsize > 0){
				
				rewind($this->wp);
				
				//Call upload append function to write the data from PHP Memory stream to Dropbox
				$data_size = $this->upload_append($this->session_id, $this->wp, $this->tmpsize);
				
				// Close the temp file and reset the variables
				fclose($this->wp);
				$this->wp = NULL;
				$this->tmpsize = 0;
			}
			
			if(empty($GLOBALS['end_file'])){
				$upload_url = 'https://content.dropboxapi.com/2/files/upload_session/finish';
				$headers = array('Authorization: Bearer '.$this->access_token,
								'Dropbox-API-Arg: {"cursor":{"session_id":"'.$this->session_id.'","offset":'.$this->offset.'},"commit":{"path":"'.$this->path.'","mode":"add","autorename": true,"mute": false}}',
								'Content-Type: application/octet-stream');
				
				$resp = $this->__curl($upload_url, $headers);
			}
		}
		
		return true;
	}
	
	//In response to file_exists(), is_file(), is_dir()
	function url_stat($path , $flags){
		global $error;
		
		$stream = parse_url($path);
		$this->access_token = $stream['host'];
		$pathinfo = pathinfo($stream['path']);
		
		$filename = $pathinfo['basename'];
		$dir = trim($pathinfo['dirname'], '/\\');
		$path = (empty($dir) ? "" : $pathinfo['dirname']);
		
		//Metadata for the root folder is unsupported
		if(!empty($filename)){
			$data = json_encode(array("path" => $path.'/'.$filename, "include_media_info" => false, "include_deleted" => false, "include_has_explicit_shared_members" => false));
			$url = 'https://api.dropboxapi.com/2/files/get_metadata';
			$headers = array('Authorization: Bearer '.$this->access_token,
							'Content-Type: application/json');
			
			$resp = $this->__curl($url, $headers, '', 0, $data, '', 1);
			
			if($resp['.tag'] == 'file'){
				$mode = 0100000;	//For File
			}elseif($resp['.tag'] == 'folder'){
				$mode = 0040000;	//For DIR
			}
			
			if(!empty($resp['id'])){
				$stat = array('dev' => 0,
							'ino' => 0,
							'mode' => $mode,
							'nlink' => 0,
							'uid' => 0,
							'gid' => 0,
							'rdev' => 0,
							'size' => $resp['size'],
							'atime' => strtotime($resp['client_modified']),
							'mtime' => strtotime($resp['client_modified']),
							'ctime' => strtotime($resp['client_modified']),
							'blksize' => 0,
							'blocks' => 0);
					
				$this->filesize = $stat['size'];
				return $stat;
			}
		}
		return false;
	}
	
	/*// AS of now not used
	function stream_read($count){
	
		if($count == ''){
			return false;
		}
				
		$data = json_encode(array("path" => $this->path));
		$url = 'https://content.dropboxapi.com/2/files/download';
		$headers = array('Authorization: Bearer '.$this->access_token,
						'Dropbox-API-Arg: '.$data,
						'Range:bytes = 0-'.$count,
						'Content-Type:');
		
		$sfp = fopen($GLOBALS['backup_local_path'], 'wb');
		$resp = $this->__curl($url, $headers, '', 0, '', $sfp);
		fclose($sfp);
		
		return $resp;
		
	}*/
	
	//Download Backup File from Dropbox to local server
	function download_file_loop($source, $dest, $startpos = 0){
		global $error;
		
		$stream = parse_url($source);
		$this->access_token = $stream['host'];
		$path = $stream['path'];
		
		//Set $this->filesize variable to remote tar file's size
		$this->url_stat($source, '');
		
		$this->range_lower_limit = $startpos;
		$this->range_upper_limit = ($this->range_lower_limit + $this->chunk) - 1;
		
		while(!$this->__eof()){
			
			if(time() >= $GLOBALS['end']){
				$GLOBALS['l_readbytes'] = filesize($dest);
				break;
			}			
			
			if($this->range_upper_limit >= $this->filesize){
				$this->range_upper_limit = $this->filesize - 1;
			}
			
			$this->__write($path, $dest, $this->range_lower_limit, $this->range_upper_limit);
			
			$this->offset = $this->range_upper_limit + 1;
			$this->range_lower_limit = $this->range_upper_limit + 1;
			$this->range_upper_limit = ($this->range_lower_limit + $this->chunk) - 1;
		}
		
		return true;
	}
	
	function __write($path, $dest, $lower_limit, $upper_limit){
		global $error;
		
		$data = json_encode(array("path" => $path));
		$url = 'https://content.dropboxapi.com/2/files/download';
		$headers = array('Authorization: Bearer '.$this->access_token,
						'Dropbox-API-Arg: '.$data,
						'Range: bytes='.$lower_limit.'-'.$upper_limit,
						'Content-Type:');
		
		$sfp = fopen($dest, 'ab');
		$resp = $this->__curl($url, $headers, '', 0, '', $sfp);
		fclose($sfp);
		
		if(empty($resp) && !empty($error)){
			return false;
		}
		return $resp['result'];
	}
	
	function __eof(){
		if($this->offset < $this->filesize){
			return false;
		}
		return true;
	}
	
	//Delete the backup from Dropbox
	function unlink($path){
		global $error;
		
		$stream = parse_url($path);
		$this->access_token = $stream['host'];
		$this->path = $stream['path'];
		
		$data = json_encode(array("path" => $this->path));
		$url = 'https://api.dropboxapi.com/2/files/delete_v2';
		$headers = array('Authorization: Bearer '.$this->access_token,
						'Content-Type: application/json');
		
		$resp = $this->__curl($url, $headers, '', 0, $data);
		
		if(empty($resp)){
			return false;
		}
		return true;
	}	
	
	function rename($from, $to){
		global $error;
		
		$stream_from = parse_url($from);
		$this->access_token = $stream_from['host'];
		$from_path = $stream_from['path'];
		
		$stream_to = parse_url($to);
		$to_path = $stream_to['path'];
		
		$data = json_encode(array("from_path" => $from_path, "to_path" => $to_path, "allow_shared_folder" => false, "autorename" => false, "allow_ownership_transfer" => false));
		$url = 'https://api.dropboxapi.com/2/files/move_v2';
		$headers = array('Authorization: Bearer '.$this->access_token,
						'Content-Type: application/json');
		
		$resp = $this->__curl($url, $headers, '', 0, $data);
		
		if(empty($resp)){
			return false;
		}		
		return true;
	}

	/**
	 * Generate Dropbox Access Token from the Authorization Code provided
	 *
	 * @package	softaculous 
	 * @author	Priya Mittal
	 * @param	string $auth_code The authorization code generated by user during access grant process
	 * @return	string $token Dropbox Access Token which we can use to create backup files
	 * @since	4.9.4
	 */
	function generate_dropbox_token($auth_code){
		global $globals, $dropbox;
		
		$url = 'https://api.dropboxapi.com/oauth2/token';
		$post = http_build_query(array('code' => $auth_code,
									'grant_type' => 'authorization_code',
									'client_id' => $this->app_key,
									'client_secret' => $this->app_secret));
				
		$resp = $this->__curl($url, '', '', 0, $post);
		
		return $resp['access_token'];
	}
	
	function __curl($url, $headers = '', $filepointer = '', $upload_size = 0, $post = '', $download_file = '', $ignore_errors = 0){
		global $error, $l;
		
		// Set the curl parameters.
		$ch = curl_init($url);
		
		if(!empty($headers)){
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		}
		
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
		
		if(!empty($filepointer)){
			curl_setopt($ch, CURLOPT_PUT, true);
			curl_setopt($ch, CURLOPT_INFILE, $filepointer);
			curl_setopt($ch, CURLOPT_INFILESIZE, $upload_size);
		}
		
		if(!empty($post)){
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		}
		//curl_setopt($ch, CURLOPT_VERBOSE, TRUE);

		// Turn off the server and peer verification (TrustManager Concept).
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		
		if(!empty($download_file)){
			curl_setopt($ch, CURLOPT_FILE, $download_file);
		}
		
		// Get response from the server.
		$resp = curl_exec($ch);
		
		/* echo '<br />Resp: ';
		r_print($resp);
		echo '<br />Curl Error:';
		$curl_error = curl_error($ch);
		echo $curl_error;
		$errno = curl_errno($ch);
		r_print($errno);
		//$error_message = curl_strerror($errno);
		//r_print($error_message);
		var_dump(curl_getinfo($ch, CURLINFO_HTTP_CODE)); */
		
		curl_close($ch);
		
		$result = json_decode($resp, true);
		//r_print($result);
		
		if(!empty($result['error']) && empty($ignore_errors)){
			if($result['error']['.tag'] == 'invalid_access_token'){
				$error[$result['error']['.tag']] = 'Invalid Access Token. Please Re-Authorize '.APP.' Dropbox APP from the Edit Backup location page in '.APP.' enduser panel';
				
			}elseif($result['error'][$result['error']['.tag']]['.tag'] == 'insufficient_space'){
				$error[$result['error'][$result['error']['.tag']]['.tag']] = 'Your Dropbox account is full. Please free some space and attempt the backup after sometime';
				
			}elseif(!empty($result['error'][$result['error']['.tag']]['.tag'])){
				$error[] = $result['error'][$result['error']['.tag']]['.tag'];
				
			}else{
				$error[$result['error']['.tag']] = $result['error']['.tag'];
			}
			
			return false;
		}
		
		return $result;
	}
}
