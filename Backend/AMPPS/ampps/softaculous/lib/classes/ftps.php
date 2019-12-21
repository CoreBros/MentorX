<?php

class ftps{

	// Public
	var $ftp_conn;
	var $stream = 'ftps';
	var $error = array();
	var $log_on = 1;
	
	// Private
	private $host = '';
	private $port = '';
	private $user = '';
	private $pass = '';
	
	function __construct(){
	}
	
	function __destruct(){
		if(!empty($this->ftp_conn)){
			ftp_close($this->ftp_conn);
		}
	}
	
	function connect($host, $port, $user, $pass){
		
		if(!function_exists('ftp_ssl_connect')){
			$this->error[] = 'ftp_ssl_connect is disabled on your server. Please install OpenSSL in order to enable the function.';
			return false;
		}
		$this->ftp_conn = @ftp_ssl_connect($host, $port, 90);
		if(!$this->ftp_conn){
			$this->error[] = 'SSL connection not found';
			return false;
		}
		$login_result = @ftp_login($this->ftp_conn, $user, $pass);
		if(!$login_result){
			$this->error[] = 'Please enter correct login details';
			return false;
		}
		ftp_pasv($this->ftp_conn,true);
		
		// Used for fetching and inserting data on remote server
		$this->host = $host;
		$this->port = $port;
		$this->user = $user;
		$this->pass = $pass;
		
		return true;
	}
	
	function delete($filename){
		
		if(!@ftp_delete($this->ftp_conn, $filename)){	
			return false;
		}
		return true;
	}
	
	function is_dir($dir){
		$old = $this->pwd();
		if(!$this->chdir($dir)){
			return false;
		}
		$this->chdir($old);
		return true;
	}
	
	function chdir($dir){
		if(!ftp_chdir($this->ftp_conn, $dir)){
			return false;
		}
		return true;
	}
	
	function pwd(){
		return @ftp_pwd($this->ftp_conn);
	}
	
	function chmod($pathname, $mode){
		return @ftp_site($this->ftp_conn, sprintf('CHMOD %o %s', $mode, $pathname));
	}
	
	function file_exists($file){
		$dir = dirname($file);
		$filename = basename($file);
		if(!$list = $this->filelist($dir)){
			return false;
		}
		if(!in_array($filename, $list) && !in_array($file, $list)){
			return false;
		}
		return true;
	}
	
	function rename($from, $to){
		if(!@ftp_rename($this->ftp_conn, $from, $to)){
			$this->error[] = "Could not move $from to $to";
			return false;
		}
		return true;
	}
	
	function rmdir($dir){
		if(!@ftp_rmdir($this->ftp_conn, $dir)){
			$this->error[] = "Could not remove directory $dir";
			return false;
		}
		return true;
	}
	
	function mkdir($dirname, $mode = 0755){
		if(!@ftp_mkdir($this->ftp_conn, $dirname)){
			$this->error[] = "Could not make directory $dirname";
			return false;
		}
		$this->chmod($dirname, $mode);
		return true;
	}

	function mmkdir($dir, $mode = 0755) {
		if(empty($dir)) return FALSE;
		
		$parts = explode('/', $dir); // 2013/06/11/username
		
		$pwd = $this->pwd();
		
		foreach($parts as $part){
			if(!@ftp_chdir($this->ftp_conn, $part)){
				$ret = ftp_mkdir($this->ftp_conn, $part);
				ftp_chdir($this->ftp_conn, $part);
				ftp_chmod($this->ftp_conn, $mode, $part);
			}
		}
		
		$this->chdir($pwd);
		
		return $ret;
	}
	
	function exec($command){
		return @ftp_exec($this->ftp_conn, $command);
	}
	
	function is_exists($file){
		if($this->file_exists($file)){
			return true;
		}elseif($this->is_dir($file)){
			return true;
		}
		return false;
	}
	
	function _parselisting($line) {
		$is_windows = false;//($this->OS_remote == FTP_OS_Windows);
		if ($is_windows && preg_match("/([0-9]{2})-([0-9]{2})-([0-9]{2}) +([0-9]{2}):([0-9]{2})(AM|PM) +([0-9]+|<DIR>) +(.+)/",$line,$lucifer)) {
			$b = array();
			if ($lucifer[3]<70) { $lucifer[3]+=2000; } else { $lucifer[3]+=1900; } // 4digit year fix
			$b['isdir'] = ($lucifer[7]=="<DIR>");
			if ( $b['isdir'] )
				$b['type'] = 'd';
			else
				$b['type'] = 'f';
			$b['size'] = $lucifer[7];
			$b['month'] = $lucifer[1];
			$b['day'] = $lucifer[2];
			$b['year'] = $lucifer[3];
			$b['hour'] = $lucifer[4];
			$b['minute'] = $lucifer[5];
			$b['time'] = @mktime($lucifer[4]+(strcasecmp($lucifer[6],"PM")==0?12:0),$lucifer[5],0,$lucifer[1],$lucifer[2],$lucifer[3]);
			$b['am/pm'] = $lucifer[6];
			$b['name'] = $lucifer[8];
		} else if (!$is_windows && $lucifer=preg_split("/[ ]/",$line,9,PREG_SPLIT_NO_EMPTY)) {
			//echo $line."\n";
			$lcount=count($lucifer);
			if ($lcount<8) return '';
			$b = array();
			$b['isdir'] = $lucifer[0]{0} === "d";
			$b['islink'] = $lucifer[0]{0} === "l";
			if ( $b['isdir'] )
				$b['type'] = 'd';
			elseif ( $b['islink'] )
				$b['type'] = 'l';
			else
				$b['type'] = 'f';
			$b['perms'] = $lucifer[0];
			$b['number'] = $lucifer[1];
			$b['owner'] = $lucifer[2];
			$b['group'] = $lucifer[3];
			$b['size'] = $lucifer[4];
			if ($lcount==8) {
				sscanf($lucifer[5],"%d-%d-%d",$b['year'],$b['month'],$b['day']);
				sscanf($lucifer[6],"%d:%d",$b['hour'],$b['minute']);
				$b['time'] = @mktime($b['hour'],$b['minute'],0,$b['month'],$b['day'],$b['year']);
				$b['name'] = $lucifer[7];
			} else {
				$b['month'] = $lucifer[5];
				$b['day'] = $lucifer[6];
				if (preg_match("/([0-9]{2}):([0-9]{2})/",$lucifer[7],$l2)) {
					$b['year'] = date("Y");
					$b['hour'] = $l2[1];
					$b['minute'] = $l2[2];
					
					// The LS command gives time for the files which are modified in the last 6 months
					// Hence if the time is there it can also be created within the last year but within 6 months
					// e.g. if today is 21st Jan, 2016, LS will show time for files created from 22ND July onwards
					// So we cannot assume the year to be the current year. We simply take the last year
					if(strtotime(sprintf("%d %s %d %02d:%02d",$b['day'],$b['month'],$b['year'],$b['hour'],$b['minute'])) > time()){
						$b['year'] = $b['year'] - 1;
					}
					
				} else {
					$b['year'] = $lucifer[7];
					$b['hour'] = 0;
					$b['minute'] = 0;
				}
				$b['time'] = strtotime(sprintf("%d %s %d %02d:%02d",$b['day'],$b['month'],$b['year'],$b['hour'],$b['minute']));
				$b['name'] = $lucifer[8];
			}
		}
		
		$bad=array("(?)");
		if(in_array($b["owner"], $bad)) $b["owner"]=NULL;
		if(in_array($b["group"], $bad)) $b["group"]=NULL;
		
		$orig_perm = substr($b["perms"], 1);
		$b["perms"] = 0;
		//echo $orig_perm.'-'.(int)($orig_perm{4}=="w").' - '.$b["perms"].'<br>';
		$b["perms"]+=00400*(int)($orig_perm{0}=="r");
		$b["perms"]+=00200*(int)($orig_perm{1}=="w");
		$b["perms"]+=00100*(int)in_array($orig_perm{2}, array("x","s"));
		$b["perms"]+=00040*(int)($orig_perm{3}=="r");
		$b["perms"]+=00020*(int)($orig_perm{4}=="w");
		$b["perms"]+=00010*(int)in_array($orig_perm{5}, array("x","s"));
		$b["perms"]+=00004*(int)($orig_perm{6}=="r");
		$b["perms"]+=00002*(int)($orig_perm{7}=="w");
		$b["perms"]+=00001*(int)in_array($orig_perm{8}, array("x","t"));
		$b["perms"]+=04000*(int)in_array($orig_perm{2}, array("S","s"));
		$b["perms"]+=02000*(int)in_array($orig_perm{5}, array("S","s"));
		$b["perms"]+=01000*(int)in_array($orig_perm{8}, array("T","t"));

		return $b;
	}
	
	function filelist($dir){
		ftp_pasv($this->ftp_conn,true);
		if(!$list = ftp_nlist($this->ftp_conn, "$dir")){
			$this->error[] = "Could not get the list of files in directory $dir";
			return false;
		}
		return $list;
	}
	
	function rawlist($dir){
		ftp_pasv($this->ftp_conn,true);
		if(!$list = ftp_rawlist($this->ftp_conn, "$dir")){
			$this->error[] = "Could not get the raw list of files in directory $dir";
			return false;
		}
		return $list;
	}
	
	function put($local_file, $remote_file, $mode = FTP_ASCII){
		
		if(!ftp_put($this->ftp_conn, $remote_file, $local_file, FTP_BINARY)){
			$this->connect($this->host, $this->port, $this->user, $this->pass); //Timeout??
			if(!ftp_put($this->ftp_conn, $remote_file, $local_file, FTP_BINARY)){
				return false;
			}
		}
		
		// Softaculous change to CHMOD the file just copied
		if(defined('SOFTACULOUS_FILE_CHMOD')){
			$this->chmod($remote_file, SOFTACULOUS_FILE_CHMOD);
		}
		
		return true;
	}
	
	function get($remote_file, $local_file){
		if(!ftp_get($this->ftp_conn, $local_file, $remote_file, FTP_BINARY)){
			$this->error[] = "Could not fetch the file $remote_file";
			return false;
		}
		
		if(file_exists($local_file)){
			return true;
		}
		
		$this->error[] = "Could not fetch the file $remote_file";		
		return false;	
	}
	
	function mput($local, $remote, $continious = false){
		$local=realpath($local);
		if(!@file_exists($local)) {
			$this->error[] = "Cannot open local folder $local";
			return FALSE;
		}
		if(!is_dir($local)) return $this->put($local, $remote);
		if(empty($remote)) $remote=".";
		elseif(!$this->file_exists($remote) and !$this->mkdir($remote)) return FALSE;
		if($handle = opendir($local)) {
			$list=array();
			while (false !== ($file = readdir($handle))) {
				if ($file != "." && $file != "..") $list[]=$file;
			}
			closedir($handle);
		} else {
			$this->error[] = "Can't open local folder $local";
			return FALSE;
		}
		if(empty($list)) return TRUE;
		$ret=true;
		foreach($list as $el) {
			if(is_dir($local."/".$el)) $t=$this->mput($local."/".$el, $remote."/".$el);
			else $t=$this->put($local."/".$el, $remote."/".$el);
			if(!$t) {
				$ret=FALSE;
				if(!$continious) break;
			}
		}
		return $ret;
	}

	function mget($remote, $local=".", $continious=false, $include_only=array()) {
		
		global $__settings;
		
		if(!@file_exists($local)) {
			if(!@mkdir($local, 0755, true)) {
				$this->error[] = "Cannot create folder \"".$local."\"";
				return FALSE;
			}
		}
		
		$list = $this->rawlist($remote);
		
		if($list===false) {
			$this->error[] = "Can't read remote folder \"".$remote."\" contents";
			return FALSE;
		}
		
		if(empty($list)) return true;
		
		foreach($list as $k=>$v) {
			$list[$k] = $this->_parselisting($v);
			if($list[$k]["name"]=="." or $list[$k]["name"]=="..") unset($list[$k]);
		}
		
		$ret=true;
		foreach($list as $el) {
		
			if($el['size'] == '0'){
				if($el['type'] == 'f'){
					$empty_file = @fopen($local.'/'.$el['name'], "w");
					@fclose($empty_file);
				}elseif($el['type'] == 'd'){
					mkdir($local.'/'.$el['name']);
				}
				@chmod($local.'/'.$el['name'], $el['perms']);
				
				$t=$el["time"];
				//echo 'Path :'.$local."/".$el["name"].' Date : '.$el["date"].' Strtotime : '.$t.'<br />';
				if($t!==-1 and $t!==false) @touch($local."/".$el["name"], $t);
				
				unset($list[$el]);
				continue;
			}
			
			$extension = get_extension($el['name']);
			if(!empty($include_only) && !in_array($el['name'], $include_only) && $extension !== 'sql'){
				unset($list[$el]);
				continue;
			}
			
			if($el["type"]=="d") {
				if(!$this->mget($remote."/".$el["name"], $local."/".$el["name"], $continious)) {
					$this->error[] = "Can't copy remote folder \"".$remote."/".$el["name"]."\" to local \"".$local."/".$el["name"]."\"";
					$ret=false;
					if(!$continious) break;
				}
			} else {
				
				//To exclude some files if set in script's clone.php's __pre_unzip() function
				if(!empty($__settings['exclude_ext']) && in_array($extension, $__settings['exclude_ext'])){
					unset($list[$el]);
					continue;
				}
				
				if(!$this->get($remote."/".$el["name"], $local."/".$el["name"])) {
					$this->error[] = "Can't copy remote file \"".$remote."/".$el["name"]."\" to local \"".$local."/".$el["name"]."\"";
					$ret=false;
					if(!$continious) break;
				}
			}
			@chmod($local."/".$el["name"], $el["perms"]);
			
			$t=$el["time"];
			//echo 'Path :'.$local."/".$el["name"].' Date : '.$el["date"].' Strtotime : '.$t.'<br />';
			if($t!==-1 and $t!==false) @touch($local."/".$el["name"], $t);
		}
		return $ret;
	}
	
	// Works but will not work on all servers hence we created softput();
	// Takes the DATA rather than the LOCAL file name
	function __softput($remotefile=NULL, $softdata, $rest=0, $overwrite=true) {
		// Allows overwriting of existing files on the remote FTP server
		$stream_options = array('ftp' => array('overwrite' => $overwrite));

		// Creates a stream context resource with the defined options
		$stream_context = stream_context_create($stream_options);
		
		$file = @fopen($this->stream."://".$this->user.":".$this->pass."@".$this->host."/$remotefile", "wb", 0, $stream_context);
		
		if(!$file){
			$this->error[] = "Remote File $remotefile cannot be accessed";
			return false;
		}
		
		fwrite($file, $softdata);
		
		fclose($file);
		
		if($this->file_exists('/'.ltrim($remotefile, '/'))){
			return true;
		}
		$this->error[] = "Could not put the file $remotefile";
		return false;
	}
	
	// Works but will not work on all servers hence we created softget();
	// Returns the Data
	function __softget($remotefile=NULL) {
		$file = @fopen($this->stream."://".$this->user.":".$this->pass."@".$this->host."/$remotefile", "r");
		if(!$file){
			$this->error[] = "Remote File $remotefile could not be accessed";
			return false;
		}
		$contents = "";
		while(!feof($file)){
			$contents .= @fread($file, 4096);
		}
		return $contents;
	}
	
	// Takes the DATA rather than the LOCAL file name
	function softput($remotefile=NULL, $softdata, $rest=0, $overwrite=true){
		
		$fp = fopen('php://temp', 'w');
		fwrite($fp, $softdata);
		rewind($fp);
		
		if(!ftp_fput($this->ftp_conn, $remotefile, $fp, FTP_ASCII)){
			$this->error[] = "Remote File $remotefile cannot be accessed";
			$this->error[] = "It looks like FTPS protocol is not supported with your PHP, Please try FTP/SFTP protocol";
			return false;
		}
		
		if($this->file_exists('/'.ltrim($remotefile, '/'))){
			return true;
		}
		
		// Softaculous change to CHMOD the file just copied
		if(defined('SOFTACULOUS_FILE_CHMOD')){
			$this->chmod($remotefile, SOFTACULOUS_FILE_CHMOD);
		}
		
		$this->error[] = "Could not put the file $remotefile";
		return false;
		
	}
	
	// Returns the Data
	function softget($remotefile=NULL) {
		
		$fp = fopen('php://temp', 'r+');		
		
		if(!ftp_fget($this->ftp_conn, $fp, $remotefile, FTP_ASCII, 0)){
			$this->error[] = "Remote File $remotefile could not be accessed";
			$this->error[] = "It looks like FTPS protocol is not supported with your PHP, Please try FTP/SFTP protocol";
			return false;
		}
		
		$contents = '';
		rewind($fp);
		
		while (!feof($fp)) {
			$contents .= fread($fp, 8192);
		}
		
		fclose($fp);
		
		return $contents;
	}
	
	function nlist($dir){
		return $this->filelist($dir);
	}
	
	// For remote backup FTPS
	function backup_softput($remotefile=NULL, $fp, $pos = 0){
		
		ftp_set_option($this->ftp_conn, FTP_AUTOSEEK, false);
		if(!ftp_fput($this->ftp_conn, $remotefile, $fp, FTP_BINARY, $pos)){
			fclose($fp);
			$this->error[] = "Remote File $remotefile cannot be accessed";
			$this->error[] = "It looks like FTPS protocol is not supported with your PHP, Please try FTP/SFTP protocol";
			return false;
		}
		
		fclose($fp);
		
		return true;
		
	}

}


/*
error_reporting(E_ALL);
$new = new ftps();
$ret = $new->connect('127.0.0.1', 21, 'soft', 'server1234');
$ret1 = $new->pwd();
$ret2 = $new->mput('/home/soft/public_html/wp754', '/public_html/test123_enduser');
$ret3 = $new->pwd();
echo '<pre>';
var_dump($ret);
var_dump($ret1);
var_dump($ret2);
var_dump($ret3);
print_r($new->error);*/

/*echo $new->pwd();
$mode = '0755';
$copy = $new->mkdir("/home/soft/public_html/aef245/test123", $mode, 0);
var_dump($copy);
echo $new->pwd();
echo '<pre>';
print_r($new->error);*/
