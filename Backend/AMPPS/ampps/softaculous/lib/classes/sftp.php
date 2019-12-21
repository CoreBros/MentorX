<?php
set_include_path(get_include_path() . PATH_SEPARATOR . $GLOBALS['globals']['path'].'/lib/classes/phpseclib');
include('Net/SSH2.php');
include('Net/SFTP.php');
include('Crypt/RSA.php');
class sftp{

	var $ssh_conn;
	var $sftp_conn;
	var $error;
	var $log_on = 1;
	var $auth_pass;
	var $sftp;
	var $ssh;
	
	function __construct(){
	}
	
	//removed $pub since while accessing we need only private key
	function connect($host, $port, $user, $password = '', $pri = '', $passphrase = ''){
		$this->sftp = new Net_SFTP($host, $port);
		if(!empty($pri)){
			$key = new Crypt_RSA();
			if(!empty($passphrase)){
				$key->setPassword($passphrase);
			}
			
			$key->loadKey($pri);
		}
		
		if (!$this->sftp->login($user, !empty($password) ? $password : $key)) {
			return false;
		}
		
		return true;
	}
	
	function delete($filename){
		return $this->sftp->delete($filename);
	}
	
	function is_dir($dir){
		$org = $this->sftp->pwd();
		$this->sftp->chdir($dir);
		if($dir == trim($this->sftp->pwd())){
			$this->sftp->chdir($org);
			return true;
		}
		return false;
	}
	
	function chdir($dir){
		return $this->sftp->chdir($dir);;
	}
	
	function pwd(){
		return $this->sftp->pwd();
	}
	
	function chmod($pathname, $mode, $rec = 0){
		return $this->sftp->chmod($mode, $pathname, $rec);
	}
	
	function file_exists($file){
		$output = $this->sftp->stat($file);
		if(is_array($output)){
			return true;
		}
		return false;
	}
	
	function copy($source, $dest, $rec = 1){
		if($this->file_exists($source) || $this->is_dir($source)){
			$output = $this->sftp->exec("cp ".(!empty($rec) ? '-R ' : '')."$source $dest");
		}else{
			return false;
		}
		if($this->file_exists($dest) || $this->is_dir($dest)){
			return true;
		}else{
			$this->error = "Could not copy $source to $dest";
			return false;
		}
	}
	
	function rename($from, $to){
		return $this->sftp->rename($from, $to);
	}
	
	function rmdir($dir, $rec = 1){
		return $this->sftp->delete($dir, $rec);
	}
	
	function mkdir($dirname, $mode = 0755, $rec = 0){
		return $this->sftp->mkdir($dirname, $mode, $rec);
	}

	function mmkdir($dir, $mode = 0755) {
		return $this->sftp->mkdir($dir, $mode, 1);
	}
	
	function exec($command, $blocking = true, $error = false){
		$this->sftp->enableQuietMode();
		$this->sftp->exec($command);
		if(!empty($error)){
			$this->error[] = $this->sftp->getStdError();
		}
		return $this->sftp->getExitStatus();
	}
	
	/* function realpath($filename){
		return ssh2_sftp_realpath($this->sftp_conn, $filename);
	} */
	
	function put($local_file, $remote_file, $mode = 0644){
		$ret = $this->sftp->put($remote_file, $local_file, NET_SFTP_LOCAL_FILE);
		
		// Softaculous change to CHMOD the file just copied
		if(defined('SOFTACULOUS_FILE_CHMOD')){
			$this->chmod($remote_file, SOFTACULOUS_FILE_CHMOD);
		}
		
		return $ret;
	}
	
	function get($remote_file, $local_file){
		return $this->sftp->get($remote_file, $local_file);
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
			$v['name'] = $k;
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
	
	function mput($local, $remote, $continious = false, $mode = 0755){
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
	
	function is_exists($file){
		if($this->file_exists($file)){
			return true;
		}elseif($this->is_dir($file)){
			return true;
		}
		return false;
	}
	
	// Takes the DATA rather than the LOCAL file name
	function softput($remotefile=NULL, $softdata, $rest=0) {
		
		$ret = $this->sftp->put($remotefile, $softdata);
		
		// Softaculous change to CHMOD the file just copied
		if(defined('SOFTACULOUS_FILE_CHMOD')){
			$this->chmod($remotefile, SOFTACULOUS_FILE_CHMOD);
		}
		
		return $ret;
	}
	
	// Returns the Data
	function softget($remotefile=NULL) {
		return $this->sftp->get($remotefile);
	}
	
	function nlist($dir = '.'){
		return $this->sftp->nlist($dir);
	}
	
	function rawlist($dir = '.'){
		return $this->sftp->rawlist($dir);
	}
	
	function _parselisting($line) {
		
		$b = array();
		
		if($line['type'] == 2){
			$b['isdir'] = 1;
			$b['type'] = 'd';	
		}elseif($line['type'] == 3){
			$b['islink'] = 1;
			$b['type'] = 'l';
		}else{
			$b['type'] = 'f';
		}
		
		$b['perms'] = $line['permissions'] & 0777;	
		$b['size'] = $line['size'];
		$b['time'] = $line['mtime'];
		$b['name'] = $line['name'];
		
		return $b;

	}
	
	// For remote backup SFTP
	function backup_softput($remotefile=NULL, $softdata){
		
		$ret = $this->sftp->put($remotefile, $softdata, NET_SFTP_RESUME);
		
		return $ret;
		
	}

}


/*
error_reporting(E_ALL);
$new = new sftp();
$ret = $new->connect('infolink.nuftp.com', 2044, 'infolink', NULL, 'C:\id_dsa.pub', 'C:\id_dsa', 'infolink@123');
echo "Delete : \n";
$delete = $new->delete('/home/infolink/prac1/index1.php');
var_dump($delete);
echo "\n Is DIR : ";
$is_dir = $new->is_dir('/home/infolink/prac1');
var_dump($is_dir);
echo "\n Change Dir : ";
$chdir = $new->chdir('/home/infolink/prac1');
var_dump($chdir);
echo "\n CHMOD";
$chmod = $new->chmod('/home/infolink/prac1', 0777, 1);
var_dump($chmod);
echo "\n PWD : ";
$pwd = $new->pwd();
var_dump($pwd);
echo "\n File Exists : ";
$file_exists = $new->file_exists('/home/infolink/prac1/index.php');
var_dump($file_exists);
echo "\n Copy :";
$copy = $new->copy('/home/infolink/prac1', '/home/infolink/prac12', 1);
var_dump($copy);
echo "\n Rename : ";
$rename = $new->rename('/home/infolink/prac12', '/home/infolink/prac_12');
var_dump($rename);
echo "\n RMDIR : ";
$rmdir = $new->rmdir('/home/infolink/prac_12', 1);
var_dump($rmdir);
echo "\n MKDIR : ";
$mkdir = $new->mkdir('/home/infolink/prac1/test', 1);
var_dump($mkdir); */

