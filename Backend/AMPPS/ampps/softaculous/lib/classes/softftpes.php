<?php

include_once('ftps.php');

class softftpes {
	
	var $ftps_conn = false;
	var $position;
	var $remotefile;
	var $readsize = 0;
	var $ftps;
	var $orig_path = '';
	var $tmpsize = 0;
	var $tpfile = 'php://memory';
	var $writepos = 0;
	var $wp = NULL; // Memory Write Pointer
	var $mode;
	
	function __construct(){
		$this->softftpes();
	}
	
	function softftpes(){
		$this->ftps = new ftps();
	}
	
	function __destruct(){
		$this->position = 0;
		$this->remotefile = '';
	}
	
	// Used to test a connection to the remote server
	function connect($host, $port, $user, $pass, $pri = 0, $passphrase = 0){	//cannot put this code inside constructor since we need to pass the URL, the constructor takes void(no) parameters
		
		global $error;
		
		// There is a bug in PHP versions less than 5.6.0 causing the ftp_put/ftp_fput to fail with error Accepted Data Connection
		// Tested with 5.5.38 and 5.4.45
		if(version_compare(phpversion(), '5.6.0', '<')){
			$error['no_support_php56'] = 'FTPS is not supported for PHP version less than 5.6 your current PHP version is '.phpversion();
			return false;
		}
		
		//__construct is called only before stream_open() in older versions of PHP (< 5.6). In newer versions, it is called before all the stream functions.
		if(!is_object($this->ftps)){
			$this->ftps = new ftps();
		}
		
		//echo $host.' - '.$port.' - '.$user.' - '.$pass;
		$this->ftps_conn = $this->ftps->connect($host, $port, $user, $pass);
		//r_print($this->ftps->error);
		return $this->ftps_conn;
	}
	
	// Just so that we can connect everywhere
	function init($path, &$url = array()){		
		
		if(!preg_match('/softftpes:\/\//i', $path)){
			return false;
		}
		
		$url = parse_url($path);
		
		// By default the port is 21
		if(empty($url['port'])){
			$url['port'] = 21;
		}
		
		//r_print($flags);
		
		// Are we to connect
		if(empty($this->ftps_conn)){
			$this->connect($url['host'], $url['port'], rawurldecode($url['user']), rawurldecode($url['pass']));
		}
		
		if(empty($this->ftps_conn)){
			return false;
		}
		
		return $this->ftps_conn;
	}
	
	// For fopen
	function stream_open($path, $mode){
		
		if(!$init = $this->init($path, $url)){
			return $init;
		}
		
		//echo 'IN OPEN : '.$this->ftps_conn.' - '.$path."\n";
		//r_print($this->ftps->error);
		//echo 'HERE';
		//die();
		
		$this->orig_path = $path;
		$this->mode = $mode;
		$this->remotefile = $url['path'];
		$this->position = 0;
		return $this->ftps_conn;
	}
	
	/*// AS of now not used
	function stream_read($count){
		
		if(!$this->ftps_conn){
			return false;
		}
		
		// Get the readsize
		if(empty($this->readsize)){
			$this->readsize = filesize($this->orig_path);
		}
		
		$this->varname = $this->ftps->backup_softget($this->remotefile, $this->position);
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
		
		if(!$this->ftps_conn){
			return false;
		}
		
		if(!is_resource($this->wp)){
			$this->wp = fopen($this->tpfile, 'w+');
		}
		
		//Initially store the data in a variable
		fwrite($this->wp, $data);
		$this->tmpsize += strlen($data);
		
		$ret = $strlen;
		
		$this->position += $strlen;
		
		// Are we already more than 4 MB ?
		if($this->tmpsize >= 4194304){
			
			rewind($this->wp);
			
			//echo 'IN WRITE : '.$this->writepos."\n";
			
			if(!$this->ftps->backup_softput($this->remotefile, $this->wp, $this->writepos)){
				$ret = false;
			}
		
			$this->writepos += $this->tmpsize;
			
			// Close the temp file and reset the variables
			fclose($this->wp);
			$this->wp = NULL;
			$this->tmpsize = 0;
		
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
			
				if(!$this->ftps->backup_softput($this->remotefile, $this->wp, $this->writepos)){
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
		
		$ret = $this->ftps->get($url['path'], $localfile);
		
		return $ret;
		
	}
	
	function mkdir($path, $mode, $options){
		
		if(!$init = $this->init($path, $url)){
			return $init;
		}
		
		$ret = $this->ftps->mmkdir($url['path'], $mode);
		
		return $ret;
			
	}
	
	function rmdir($path, $options){
		
		if(!$init = $this->init($path, $url)){
			return $init;
		}
		
		$res = $this->ftps->rmdir($url['path']);
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
		
		$list = $this->ftps->rawlist($dir);
		//r_print($list);
		
		foreach($list as $k => $v){
			
			$list[$k] = $this->ftps->_parselisting($v);
			
			if($list[$k]['name'] != $file){
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
		
		$res = $this->ftps->delete($url['path']);
		return $res;
	}
	
	function rename($from, $to){
		
		if(!$init = $this->init($from, $url)){
			return $init;
		}
		
		$url_from = parse_url($from);
		$url_to = parse_url($to);
		
		//echo 'Rename : '.$url_from['path'].' - '.$url_to['path']."\n";
		
		return $this->ftps->rename($url_from['path'], $url_to['path']);
		
	}
	
}