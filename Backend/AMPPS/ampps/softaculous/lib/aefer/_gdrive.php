<?php

class gdrive{

	var $access_token;
	var $refresh_token;
	var $backup_loc;
	var $path;
	var $filename;
	var $filesize = 0;
	var $init_url = '';
	var $complete = 0;
	var $offset = 0;
	var $tmpsize = 0;
	var $chunk = 2097152;		//upload chunks in google drive should be multiples of 256 KB
	var $range_lower_limit = 0;
	var $range_upper_limit = 0;
	var $tpfile = '';
	var $mode = '';
	var $gdrive_fileid = '';
	var $wp = NULL; // Memory Write Pointer
	var $parents = array();
	
	// APP name is Softaculous Auto Installer and is assigned to developers@softaculous.com Google account
	var $app_key = '391014249634-irv3vtkqkvh2dfp86ph6jdf86vc1tnkl.apps.googleusercontent.com';
	var $app_secret = '9HI34jRjS-w_3Qs4aIs-Nk2B';
	var $app_dir = 'Softaculous Auto Installer';
	var $redirect_uri = 'https://s2.softaculous.com/gdrive/callback.php';
	//var $redirect_uri = 'http://test.nuftp.com/googledrive/callback.php';
	
	function stream_open($path, $mode, $options, &$opened_path){
		global $error, $l;
		
		$stream = parse_url($path);
		
		$this->refresh_token = $stream['host'];
		//Google Drive access token expires in an hour so we need to refresh
		$this->access_token = $this->refresh_token_func($this->refresh_token);
		
		$this->path = $stream['path'];
		$this->mode = $mode;
		
		$pathinfo = pathinfo($this->path);
		$dirlist = explode('/', $pathinfo['dirname']);
		
		//Generate parent directories IDs
		
		$this->parents = array();
	
		foreach($dirlist as $sk => $subdir){
			
			if(empty($subdir)){
				continue;
			}
			
			$this->parents[] = $this->get_gdrive_fileid($subdir);			 
		}
		
		$this->filename = $pathinfo['basename'];
		
		//php://memory not working on localhost
		$this->tpfile = 'php://temp';
		
		$ret = false;
		if(preg_match('/w|a/is', $this->mode)){
			$this->offset = 0;
			$this->range_lower_limit = 0;
			
			if(empty($GLOBALS['sinit_data'])){
				$ret = $this->upload_start();
			}else{
				$ret = true;
			}
		}

		return $ret;
	}
	
	// Google Drive API to upload
	function upload_start(){
		global $error, $l;

		$upload_url = 'https://www.googleapis.com/upload/drive/v3/files?uploadType=resumable';
		$headers = array('Authorization: Bearer '.$this->access_token,
						"Cache-Control: no-cache",
						"Content-Type: application/json; charset=UTF-8",
						"X-Upload-Content-Type: application/x-gzip");
		
		if(empty($GLOBALS['sinit_data'])){
			$headers[] = 'Content-Range: */*';
		}
				
		$post = json_encode(array("name" => $this->filename, "parents" => array(end($this->parents))));
		$resp = $this->__curl($upload_url, $headers, '', 0, $post);
		//echo '<br />Upload Start: ';r_print($resp);
		if(!empty($resp['error'])){
			$error[] = $resp['error'];
			return false;
		}
		
		$op = explode("\r\n", $resp['result']);
		
		foreach($op as $ok => $ov){
			if(preg_match('/HTTP\/1.1(\s*?)(.*?)$/is', $ov)){
				soft_preg_replace('/HTTP\/1.1(\s*?)(.*?)$/is', $ov, $retcode, 2);
			}
			if(preg_match('/Location:(\s*?)(.*?)$/is', $ov)){
				soft_preg_replace('/Location:(\s*?)(.*?)$/is', $ov, $init_url, 2);
			}
		}
		
		if($retcode != '200 OK'){
			$error[] = $retcode;
			return false;
		}
		
		if(empty($init_url)){
			$error['gdrive_err_init'] = 'There were some errors while initiating the backup on Google Drive!!';
			return false;
		}
		$this->init_url = $init_url;
		$GLOBALS['init_data'] = $this->init_url;
		
		return true;
	}
	
	function stream_write($data){
		global $error, $l;
		
		if(!is_resource($this->wp)){
			$this->wp = fopen($this->tpfile, 'w+');
		}
		
		//Initially store the data in a memory
		fwrite($this->wp, $data);		
		$this->tmpsize += strlen($data);
		$data_size = strlen($data);
		
		if(!empty($GLOBALS['init_pos'])){
			$this->range_lower_limit = $GLOBALS['start_pos'];
			$this->offset = $GLOBALS['start_pos'];	
		}		
		
		$lower_limit = $this->range_lower_limit;
		
		// Are we already more than 4 MB ?
		if($this->tmpsize >= $this->chunk){
			$this->range_upper_limit = $this->range_lower_limit + $this->chunk - 1;
			
			//If the temp file contains data more than the chunk size
			$rem_data = '';
			$rem_size = $this->tmpsize - $this->chunk;
			$this->tmpsize = $rem_size;
			rewind($this->wp);
			
			if($rem_size > 0){
				$append_data = fread($this->wp, $this->chunk);
				$rem_data = fread($this->wp, $rem_size);
				fclose($this->wp);
				$this->wp = NULL;
				
				$this->wp = fopen($this->tpfile, 'w+');
				fwrite($this->wp, $append_data);
				$append_data = '';
				rewind($this->wp);
			}			
			
			//Call upload append function to write the data from PHP Memory stream to Google Drive
			$retcode = $this->upload_append($this->init_url, $this->wp, $this->chunk);
			//echo '<br />Write: ';r_print($retcode);
			if($retcode == '200 OK' || $retcode == '201 Created'){
				$this->complete = 1;
			}
			
			// Close the temp file and reset the variables
			fclose($this->wp);
			$this->wp = NULL;
			
			if(empty($retcode)){
				$error[] = $retcode;
				return false;
			}
			
			//Write the remaining data back to the temp file
			if(!empty($rem_data)){
				$this->wp = fopen($this->tpfile, 'w+');
				fwrite($this->wp, $rem_data);
			}
		}
		return $data_size;	
	}
	
	// Google Drive API to append
	function upload_append($init_url, $filep, $data_size, $final_size = '*'){
		global $error, $l;
		
		if(!empty($GLOBALS['sinit_data'])){
			$init_url = $GLOBALS['sinit_data'];
			$this->init_url = $GLOBALS['sinit_data'];
			$GLOBALS['init_data'] = $init_url;
		}
		
		$headers = array('Authorization: Bearer '.$this->access_token, 
						'Content-Length: '.$data_size, 
						'Content-Type: application/x-gzip', 
						'Content-Range: bytes '.$this->range_lower_limit.'-'.$this->range_upper_limit.'/'.$final_size);
				
		$resp = $this->__curl($this->init_url, $headers, $filep, $data_size, '', '', 'PUT');
		//echo '<br />Append: ';r_print($resp);
		
		if(!empty($resp['error'])){
			$error[] = $resp['error'];
			return false;
		}
		
		$op = explode("\r\n", $resp['result']);
		soft_preg_replace('/HTTP\/1.1(\s*?)(.*?)$/is', $op[2], $retcode, 2);
		//echo '<br />Append Ret Code: '.$retcode;
		
		if($retcode != '308 Resume Incomplete' && $retcode != '200 OK' && $retcode != '201 Created'){
			$error[] = $retcode;
			return false;
		}
		
		if($retcode == '308 Resume Incomplete'){
			foreach($op as $ok => $ov){
				if(preg_match('/Range:(\s*?)bytes=0-(.*?)$/is', $ov)){
					soft_preg_replace('/Range:(\s*?)bytes=0-(.*?)$/is', $ov, $urange, 2);
				}
			}
			
			if(!empty($urange)){
				$this->range_lower_limit = $urange + 1;
				$this->offset = $urange + 1;
				$GLOBALS['start_pos'] = $this->offset;
			}
		}elseif($retcode == '200 OK' || $retcode == '201 Created'){
			
			preg_match('/{(.*?)}$/is', $resp['result'], $matches);
			$data = json_decode($matches[0], true);
			$this->gdrive_fileid = $data['id'];
		}
		return $retcode;
	}
	
	function stream_close(){
		global $error, $l;
		
		if(preg_match('/w|a/is', $this->mode)){
			
			// Is there still some data left to be written ?			
			if($this->tmpsize > 0){
				
				if(!empty($this->complete)){
					$error[] = 'There were some errors while committing backup to your Google Drive account!!';
					return false;
				}
				
				if(!empty($GLOBALS['end_file'])){
					if($this->tmpsize < $this->chunk){
						//We are doing this because in resumable uploads on gdrive, we can only upload data in multiples of 0.25MB except for the last upload. When the backup is performed in loops in aefer, at the end of every iteration, stream_close is called when the object is destroyed, hence it is not the end data everytime the iteration ends.
						//Data in the tempfile
						rewind($this->wp);
						$temp_data = fread($this->wp, $this->tmpsize);
						
						//data in the local file
						$slfp = fopen($GLOBALS['slocal_tar'], 'rb');
						$lo_data = fread($slfp, filesize($GLOBALS['slocal_tar']));
						fclose($slfp);
						
						//Combine both the data and write in the local file
						$clfp = fopen($GLOBALS['slocal_tar'], 'wb');
						$lo_data = fwrite($clfp, $temp_data.$lo_data);
						fclose($clfp);
					}
					return true;
				}
				
				if(!empty($GLOBALS['start_pos'])){
					$this->range_lower_limit = $GLOBALS['start_pos'];
					$this->offset = $GLOBALS['start_pos'];
				}
				
				$this->range_upper_limit = $this->range_lower_limit + $this->tmpsize - 1;
				
				$this->offset += $this->tmpsize;
				rewind($this->wp);
				
				//Call upload append function to write the remaining data from PHP Memory stream to Google Drive
				if(empty($GLOBALS['end_file'])){
					$retcode = $this->upload_append($this->init_url, $this->wp, $this->tmpsize, $this->offset);
				}else{
					$retcode = $this->upload_append($this->init_url, $this->wp, $this->tmpsize);
				}
				
				// Close the temp file and reset the variables
				fclose($this->wp);
				$this->wp = NULL;
				$this->tmpsize = 0;
				
				if(empty($retcode)){
					return false;
				}
			}
		}
		return true;
	}
	
	//In response to file_exists(), is_file(), is_dir()
	function url_stat($path){
		global $error, $l;
		
		$stream = parse_url($path);
		$this->refresh_token = $stream['host'];
		$pathinfo = pathinfo($stream['path']);
		$filename = $pathinfo['basename'];
		
		//Google Drive access token expires in an hour so we need to refresh
		if(empty($this->access_token)){
			$this->access_token = $this->refresh_token_func($this->refresh_token);
		}
		
		$this->get_gdrive_fileid($filename);
		$url = 'https://www.googleapis.com/drive/v3/files/'.$this->gdrive_fileid.'?fields=kind,name,size,createdTime,modifiedTime,mimeType,explicitlyTrashed';
		$headers = array('Authorization: Bearer '.$this->access_token);
		
		$resp = $this->__curl($url, $headers, '', 0, '', '', 'GET');
		if(!empty($resp['error'])){
			$error[] = $resp['error'];
			return false;
		}
		
		preg_match('/{(.*?)}$/is', $resp['result'], $matches);
		$data = json_decode($matches[0], true);
		
		soft_preg_replace('/drive#(.*?)$/is', $data['kind'], $filetype, 1);
		
		if($data['mimeType'] == 'application/vnd.google-apps.folder'){
			$mode = 0040000;	//For DIR
		}else{
			$mode = 0100000;	//For File
		}
		
		if(!empty($data['name']) && empty($data['explicitlyTrashed'])){
			$stat = array('dev' => 0,
						'ino' => 0,
						'mode' => $mode,
						'nlink' => 0,
						'uid' => 0,
						'gid' => 0,
						'rdev' => 0,
						'size' => $data['size'],
						'atime' => $data['createdTime'],
						'mtime' => $data['modifiedTime'],
						'ctime' => $data['createdTime'],
						'blksize' => 0,
						'blocks' => 0);
			return $stat;	
		}
		return false;
	}
	
	function mkdir($path, $mode){
		global $error, $l, $gdrive;
		
		$stream = parse_url($path);
		$this->refresh_token = $stream['host'];
		$pathinfo = pathinfo($stream['path']);
		
		$parent_dir = explode('/', $pathinfo['dirname']);
		$parent_dir = $parent_dir[1]; //It conatains "Softaculous Auto Installer" prent should be this only.
		
		$dirname = $pathinfo['basename'];
		
		$sub_dirs = explode('/', $stream['path']);
	
		//Google Drive access token expires in an hour so we need to refresh
		if(empty($this->access_token)){
			$this->access_token = $this->refresh_token_func($this->refresh_token);
		}
		
		foreach($sub_dirs as $sk => $subdir){
			
			if(empty($subdir)){
				continue;
			}
			 
			$parent_id = array();
			if(!empty($parent_dir)){
				
				$parent_id[0] = $this->get_gdrive_fileid($parent_dir);
				if(empty($parent_id[0])){
					$parent_id[0] = $this->create_dir($parent_dir);
				}
				
			}
			
			$subdir_id = $this->get_gdrive_fileid($subdir);
			if(empty($subdir_id)){
				$create = $this->create_dir($subdir, $parent_id);
				if(empty($create)){
					break;
				}
			}
			
			$parent_dir = $subdir;
		}
		
		return true;
	}
	
	function create_dir($dirname, $parents = array()){
		
		global $error, $l, $gdrive;
		
		
		$url = 'https://www.googleapis.com/drive/v3/files';
		$headers = array('Authorization: Bearer '.$this->access_token,
						'Accept: application/json',
						'Content-Type: application/json');
		
		if(!empty($parents)){
					
			$post = json_encode(array("name" => $dirname, "mimeType" => "application/vnd.google-apps.folder", "parents" => array(end($parents))));
			
		}else{
			$post = json_encode(array("name" => $dirname, "mimeType" => "application/vnd.google-apps.folder"));
		}
		
		
		$resp = $this->__curl($url, $headers, '', 0, $post, '', 'POST');
		if(!empty($resp['error'])){
			$error[] = $resp['error'];
			return false;
		}
		
		preg_match('/{(.*?)}$/is', $resp['result'], $matches);
		$data = json_decode($matches[0], true);
		
		if(!empty($data['error'])){
			if(is_array($data['error'])){
				$error[] = $data['error']['code'].' : '.$data['error']['message'];
			}else{
				$error[] = $data['error'].' : '.$data['error_description'];
			}
			return false;
		}
		return $data['id'];
	}
	
	function refresh_token_func($refresh_token){
		global $error, $l, $gdrive;
		
		$refresh_token = rawurldecode($refresh_token);		
		$url = 'https://www.googleapis.com/oauth2/v4/token';
		
		$headers = array("Content-Type: application/x-www-form-urlencoded");
		$post = http_build_query(array('refresh_token' => $refresh_token,
									'grant_type' => 'refresh_token',
									'client_id' => $this->app_key,
									'client_secret' => $this->app_secret));
				
		$resp = $this->__curl($url, $headers, '', 0, $post);
		
		if(!empty($resp['error'])){
			$error[] = $resp['error'];
			return false;
		}
		
		preg_match('/{(.*?)}$/is', $resp['result'], $matches);
		$data = json_decode($matches[0], true);
		
		if(!empty($data['error'])){
			if(is_array($data['error'])){
				$error[] = $data['error']['code'].' : '.$data['error']['message'];
			}else{
				$error[] = $data['error'].' : '.$data['error_description'];
			}
			return false;
		}
		return $data['access_token'];
	}
	
	function rename($from, $to){
		global $error, $l;
		
		$stream_from = parse_url($from);
		$this->refresh_token = $stream_from['host'];
		$from_path = trim($stream_from['path'], '/\\');
		$from_pathinfo = pathinfo($stream_from['path']);
		$from_file = $from_pathinfo['basename'];
		
		$stream_to = parse_url($to);
		$to_path = trim($stream_to['path'], '/\\');
		$to_pathinfo = pathinfo($stream_to['path']);
		$to_file = $to_pathinfo['basename'];
		
		//Google Drive access token expires in an hour so we need to refresh
		if(empty($this->access_token)){
			$this->access_token = $this->refresh_token_func($this->refresh_token);
		}
		
		$this->get_gdrive_fileid($from_file);
		
		$post = json_encode(array("name" => $to_file));
		$url = 'https://www.googleapis.com/drive/v3/files/'.$this->gdrive_fileid;
		$headers = array('Authorization: Bearer '.$this->access_token,
						'Content-Type: application/json; charset=UTF-8',
						'X-Upload-Content-Type: application/x-gzip');
		
		$resp = $this->__curl($url, $headers, '', 0, $post, '', 'PATCH');
		if(!empty($resp['error'])){
			$error[] = $resp['error'];
			return false;
		}		
		return true;
	}
	
	//Download Backup File from Google Drive to local server
	function download_file_loop($source, $dest, $startpos = 0){
		global $error, $l;
		
		//Set chunk size for download as 1 MB
		$this->chunk = 1048576;
		
		$stream = parse_url($source);
		$this->refresh_token = $stream['host'];
		$src_file = trim($stream['path'], '\//');
		
		//Google Drive access token expires in an hour so we need to refresh
		if(empty($this->access_token)){
			$this->access_token = $this->refresh_token_func($this->refresh_token);
		}
		
		$pathinfo = pathinfo($stream['path']);
		$src_file = $pathinfo['basename'];
		
		$this->get_gdrive_fileid($src_file);
		
		$file_stats = $this->url_stat($source);
		$this->filesize = $file_stats['size'];
		
		$this->range_lower_limit = $startpos;
		$this->range_upper_limit = ($this->range_lower_limit + $this->chunk) - 1;
		
		$fp = @fopen($dest, "ab");
		while(!$this->__eof()){
			
			if(time() >= $GLOBALS['end']){
				$GLOBALS['l_readbytes'] = filesize($dest);
				break;
			}
			
			if($this->range_upper_limit >= $this->filesize){
				$this->range_upper_limit = $this->filesize - 1;
			}
			
			$block = $this->__read($this->range_lower_limit, $this->range_upper_limit);
			fwrite($fp, $block);
			
			$this->offset = $this->range_upper_limit + 1;
			$this->range_lower_limit = $this->range_upper_limit + 1;
			$this->range_upper_limit = ($this->range_lower_limit + $this->chunk) - 1;
		}
		fclose($fp);
	}
	
	function __read($lower_limit, $upper_limit){
		global $error;
		
		$headers = array('Authorization: Bearer '.$this->access_token, 'Range: bytes='.$lower_limit.'-'.$upper_limit);
		$url = 'https://www.googleapis.com/drive/v3/files/'.$this->gdrive_fileid.'?alt=media';
		
		$resp = $this->__curl($url, $headers, '', 0, '', 1, 'GET');
		
		if(!empty($resp['error'])){
			$error[] = $resp['error'];
		}
		return $resp['result'];
	}
	
	function __eof(){
		if($this->offset < $this->filesize){
			return false;
		}
		return true;
	}
	
	function get_gdrive_fileid($filename, $refresh_token = ''){
		global $error, $l;
		
		if(!empty($refresh_token)){
			$this->refresh_token = $refresh_token;
		}
		
		//Google Drive access token expires in an hour so we need to refresh
		if(empty($this->access_token)){
			$this->access_token = $this->refresh_token_func($this->refresh_token);
		}
		
		$url = 'https://www.googleapis.com/drive/v3/files?q=name=%27'.rawurlencode($filename).'%27%20and%20trashed=false';
		$headers = array('Authorization: Bearer '.$this->access_token);
		
		$resp = $this->__curl($url, $headers, '', 0, '', '', 'GET');
		if(!empty($resp['error'])){
			$error[] = $resp['error'];
			return false;
		}
		
		preg_match('/{(.*?)}$/is', $resp['result'], $matches);
		$data = json_decode($matches[0], true);
		
		if(!empty($data['error'])){
			if(is_array($data['error'])){
				$error[] = $data['error']['message'];
			}else{
				$error[] = $data['error'];
			}
			return false;
		}
		
		$this->gdrive_fileid = $data['files'][0]['id'];
		return $this->gdrive_fileid;
	}
	
	//Delete the backup from Google Drive
	function unlink($path){
		global $error, $l;
		
		$stream = parse_url($path);
		$this->refresh_token = $stream['host'];
		$pathinfo = pathinfo($stream['path']);
		$filename = $pathinfo['basename'];
		
		//Google Drive access token expires in an hour so we need to refresh
		if(empty($this->access_token)){
			$this->access_token = $this->refresh_token_func($this->refresh_token);
		}
		
		if(empty($this->gdrive_fileid)){
			$this->get_gdrive_fileid($filename);
		}
		
		$url = 'https://www.googleapis.com/drive/v3/files/'.$this->gdrive_fileid;
		$headers = array('Authorization: Bearer '.$this->access_token);
		
		$resp = $this->__curl($url, $headers, '', 0, '', '', 'DELETE');
		
		if(!empty($resp['error'])){
			$error[] = $resp['error'];
			return false;
		}
		
		return true;
	}
	
	/**
	 * Generate Google Drive Refresh and Access Token from the Authorization Code provided
	 *
	 * @package	softaculous 
	 * @author	Priya Mittal
	 * @param	string $auth_code The authorization code generated by user during access grant process
	 * @return	string $data Google Drive Refresh and Access Token which we can use to create backup files
	 * @since	5.0.0
	 */
	function generate_gdrive_token($auth_code){
		
		global $globals, $gdrive, $error;
		
		$url = 'https://www.googleapis.com/oauth2/v4/token';
		
		$headers = array("Content-Type: application/x-www-form-urlencoded");
		$post = http_build_query(array('code' => $auth_code,
									'grant_type' => 'authorization_code',
									'client_id' => $this->app_key,
									'client_secret' => $this->app_secret,
									'redirect_uri' => $this->redirect_uri));
				
		$resp = $this->__curl($url, $headers, '', 0, $post);
		
		if(!empty($resp['error'])){
			$error[] = $resp['error'];
			return false;
		}
		
		preg_match('/{(.*?)}$/is', $resp['result'], $matches);
		$data = json_decode($matches[0], true);
		
		if(!empty($data['error'])){
			if(is_array($data['error'])){
				$error[] = $data['error']['code'].' : '.$data['error']['message'];
			}else{
				$error[] = $data['error'].' : '.$data['error_description'];
			}
			return false;
		}
		
		return $data;
	}

	/**
	 * Create Softaculous App Directory in user's Google Drive account
	 *
	 * @package	softaculous 
	 * @author	Priya Mittal
	 * @param	string $refresh_token Refresh Token of user's Google Drive account to generate the access token
	 * @since	5.0.0
	 */
	function create_gdrive_app_dir($refresh_token){
		
		global $globals, $gdrive, $error;
		
		$fileid = $this->get_gdrive_fileid($this->app_dir, $refresh_token);
		
		if(empty($fileid)){
			$this->create_dir($this->app_dir);
		}
		
	}
	
	function __curl($url, $headers = '', $filepointer = '', $upload_size = 0, $post = '', $download_file = 0, $request_type = 'POST'){
		global $error, $l;
		
		// Set the curl parameters.
		$ch = curl_init($url);
		
		if(!empty($headers)){
			if(empty($download_file)){
				curl_setopt($ch, CURLOPT_HEADER, 1);
			}
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		}
		
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $request_type);
		
		//We are setting this as on some servers, the default HTTP version was taken as 2.0 by curl, causing issue
		curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
		
		if(!empty($filepointer)){
			curl_setopt($ch, CURLOPT_UPLOAD, 1);
			curl_setopt($ch, CURLOPT_INFILE, $filepointer);
			curl_setopt($ch, CURLOPT_INFILESIZE, $upload_size);
		}
		
		if(!empty($post)){
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		}
		//curl_setopt($ch, CURLOPT_VERBOSE, TRUE);

		// Turn off the server and peer verification (TrustManager Concept).
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		
		// Get response from the server.
		$resp = array();
		$resp['result'] = curl_exec($ch);
		$resp['error'] = curl_error($ch);
		
		/* echo '<br />Resp: ';
		r_print($resp);
		$errno = curl_errno($ch);
		r_print($errno);
		//$error_message = curl_strerror($errno);
		//r_print($error_message);
		var_dump(curl_getinfo($ch, CURLINFO_HTTP_CODE)); */
		
		curl_close($ch);
		return $resp;
	}
}
