<?php

include_once('sftp.php');

class softsftp {
	
	var $sftp_conn = false;
	var $position;
	var $remotefile;
	var $readsize = 0;
	var $sftp;
	var $orig_path = '';
	var $tmpsize = 0;
	var $tpfile = 'php://memory';
	var $writepos = 0;
	var $wp = NULL; // Memory Write Pointer
	var $mode;
	
	function __construct(){
		$this->softsftp();
	}
	
	function softsftp(){
		$this->sftp = new sftp();
	}
	
	function __destruct(){
		$this->position = 0;
		$this->remotefile = '';
	}
	
	// Used to test a connection to the remote server
	function connect($host, $port, $user, $pass = '', $pri = '', $passphrase = ''){	//cannot put this code inside constructor since we need to pass the URL, the constructor takes void(no) parameters.
	
		//__construct is called only before stream_open() in older versions of PHP (< 5.6). In newer versions, it is called before all the stream functions.
		if(!is_object($this->sftp)){
			$this->sftp = new sftp();
		}
		
		//echo $host.' - '.$port.' - '.$user.' - '.$pass.' - '.$pri.' - '.$passphrase;
		$this->sftp_conn = $this->sftp->connect($host, $port, $user, $pass, $pri, $passphrase);
		//r_print($this->sftp->error);
		return $this->sftp_conn;
	}
	
	// Just so that we can connect everywhere
	function init($path, &$url = array()){		
		global $user;
		//r_print($user);
		
		if(!preg_match('/softsftp:\/\//i', $path)){
			return false;
		}
		
		$url = parse_url($path);
		
		// By default the port is 21
		if(empty($url['port'])){
			$url['port'] = 21;
		}
		
		if(empty($url['pass'])){
			$sftpuser = $user['remote_backup_locs'][$url['user']]['ftp_user'];
			$sftppri = $user['remote_backup_locs'][$url['user']]['private_key'];
			$sftppassphrase = $user['remote_backup_locs'][$url['user']]['passphrase'];
			if(empty($sftppri) && empty($sftppassphrase)){
				return false;
			}
		}
		
		//r_print($flags);
		
		// Are we to connect
		if(empty($this->sftp_conn)){
			$this->connect($url['host'], $url['port'], rawurldecode((empty($url['pass']) ? $sftpuser : $url['user'])), rawurldecode($url['pass']), $sftppri, $sftppassphrase);
		}
		
		if(empty($this->sftp_conn)){
			return false;
		}
		
		return $this->sftp_conn;
	}
	
	// For fopen
	function stream_open($path, $mode){
		
		if(!$init = $this->init($path, $url)){
			return $init;
		}
		
		//echo 'IN OPEN : '.$this->sftp_conn.' - '.$path."\n";
		//r_print($this->sftp->error);
		//echo 'HERE';
		//die();
		
		$this->orig_path = $path;
		$this->mode = $mode;
		$this->remotefile = $url['path'];
		$this->position = 0;
		return $this->sftp_conn;
	}
	
	/*// AS of now not used
	function stream_read($count){
		
		if(!$this->sftp_conn){
			return false;
		}
		
		// Get the readsize
		if(empty($this->readsize)){
			$this->readsize = filesize($this->orig_path);
		}
		
		$this->varname = $this->sftp->backup_softget($this->remotefile, $this->position);
		$ret = substr($this->varname, 0, $count);
		
		if(empty($ret)){
			return false;
		}
		
		$this->position = $this->position + $count;
		return $ret;
		
	}*/

	function stream_write($data){
		
		$strlen = strlen($data);
		
		//echo 'IN WRITE : '.$strlen."\n";
		
		//echo $this->remotefile.' - '.strlen($data);die();
		
		if(!$this->sftp_conn){
			return false;
		}
		
		$ret = $strlen;
		
		if(!$this->sftp->backup_softput($this->remotefile, $data)){
			$ret = false;
		}
		
		return $ret;
		
	}
	
	function stream_close(){
		
		$ret = true;
			
		//echo 'IN CLOSE : '.$this->position."\n";
		
		if(preg_match('/w/is', $this->mode)){
		
			// Are we already more than 4 MB ?
			if($this->tmpsize > 0){
				
				rewind($this->wp);
			
				if(!$this->sftp->backup_softput($this->remotefile, $this->wp, $this->writepos)){
					$ret = false;
				}
		
				$this->writepos += $this->tmpsize;
				
				// Close the temp file and reset the variables
				fclose($this->wp);
				$this->wp = NULL;
				$this->tmpsize = 0;
				
			}
			
		}
		
		return $ret;
	}
	
	function stream_eof(){
		return $this->position >= strlen($this->readsize);
	}
	
	function stream_tell(){
		return $this->position;
	}
	
	// Download a remote file to the local file
	function download_file($path, $localfile){
		
		if(!$init = $this->init($path, $url)){
			return $init;
		}
		
		//echo $path.' - '.$localfile;
		
		$ret = $this->sftp->get($url['path'], $localfile);
		
		return $ret;
		
	}
	
	function mkdir($path, $mode, $options){
		
		if(!$init = $this->init($path, $url)){
			return $init;
		}
		
		$ret = $this->sftp->mmkdir($url['path'], $mode);
		
		return $ret;
			
	}
	
	function rmdir($path, $options){
		
		if(!$init = $this->init($path, $url)){
			return $init;
		}
		
		$res = $this->sftp->rmdir($url['path']);
		return $res;
		
	}	
	
	function url_stat($path, $flags){
		
		if(!$init = $this->init($path, $url)){
			return $init;
		}
		
		$url['path'] = cleanpath($url['path']);
		
		if(empty($url['path'])){
			$url['path'] = '/';
		}
		
		//r_print($url);die();
		
		if($url['path'] == '/'){
			$file = '.';
			$dir = $url['path'];
		}else{
			$file = basename($url['path']);
			$dir = dirname($url['path']);
		}
		
		$dir = cleanpath($dir);
		if(empty($dir)){
			$dir = '/';
		}
		
		//echo $file.' - '.$dir." -- - - -\n";die();
		
		$list = $this->sftp->rawlist($dir);
		//r_print($list);
		
		foreach($list as $k => $v){
			
			$list[$k] = $this->sftp->_parselisting($v);
			
			if($k != $file){
				continue;
			}
			
			//r_print($list[$k]);
			
			$stat = array('dev' => 0,
						'ino' => 0,
						'mode' => octdec($list[$k]['mode']),
						'nlink' => 0,
						'uid' => 0,
						'gid' => 0,
						'rdev' => 0,
						'size' => $list[$k]['size'],
						'atime' => $list[$k]['time'],
						'mtime' => $list[$k]['time'],
						'ctime' => $list[$k]['time'],
						'blksize' => -1,
						'blocks' => -1
					);
					
			return $stat + array_values($stat);			
			
		}
		
		return false;

	}
	
	function unlink($path){
		
		if(!$init = $this->init($path, $url)){
			return $init;
		}
		
		$res = $this->sftp->delete($url['path']);
		return $res;
	}
	
	function rename($from, $to){
		
		if(!$init = $this->init($from, $url)){
			return $init;
		}
		
		$url_from = parse_url($from);
		$url_to = parse_url($to);
		
		//echo 'Rename : '.$url_from['path'].' - '.$url_to['path']."\n";
		
		return $this->sftp->rename($url_from['path'], $url_to['path']);
		
	}
	
	function chdir($dir){
		return $this->sftp->chdir($dir);
	}
	
	function pwd(){
		return $this->sftp->pwd();
	}
	
}