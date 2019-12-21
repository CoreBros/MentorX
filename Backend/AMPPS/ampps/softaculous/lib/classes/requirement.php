<?php

class requirement{

	var $req = array();

	function replace_callback($matches){
		$this->req[] = $matches[0];
		return;
	}
	
	function __construct($info = ''){
		
		global $vr, $softpanel;
		
		$vr = vr($info);
		
		$tmp_info = $info;
		
		$this->req = array();
		
		// Check Scripts requirements
		//Changed the position as when normal closing tag was used after self closing tags, the preg_match was failing.
		$tmp_info = preg_replace_callback('/<requirement([^>]*)\/>/is', array($this, 'replace_callback'), $tmp_info);
		$tmp_info = preg_replace_callback('/<requirement([^>]*)>(.*?)<\/requirement>/is', array($this, 'replace_callback'), $tmp_info);
		$requirements = $this->req;
		//r_print($requirements);
		//$requirements = $requirements[1][0];
		
		foreach($requirements as $k => $v){
		
			//echo $v."<br />";
			soft_preg_replace('/check=("|\')(.*?)("|\')(\s*?)/is', $v, $req[$k]['check'], 2);
			soft_preg_replace('/type=("|\')(.*?)("|\')(\s*?)/is', $v, $req[$k]['type'], 2);
			soft_preg_replace('/operator=("|\')(.*?)("|\')(\s*?)/is', $v, $req[$k]['operator'], 2);
			soft_preg_replace('/<\!\[CDATA\[(\s*?)(.*?)(\s*?)\]\]>/is', $v, $req[$k]['grep'], 2);
			soft_preg_replace('/name=("|\')(.*?)("|\')(\s*?)/is', $v, $req[$k]['name'], 2);
			soft_preg_replace('/value=("|\')(.*?)("|\')(\s*?)/is', $v, $req[$k]['value'], 2);
			soft_preg_replace('/version=("|\')(.*?)("|\')(\s*?)/is', $v, $req[$k]['version'], 2);
			soft_preg_replace('/err=("|\')(.*?)("|\')(\s*?)/is', $v, $req[$k]['err'], 2);
			soft_preg_replace('/function=("|\')(.*?)("|\')(\s*?)/is', $v, $req[$k]['function'], 2);
			
			// We have used value since the beginning and version was added later
			if(!empty($req[$k]['value']) && empty($req[$k]['version'])){
				$req[$k]['version'] = $req[$k]['value'];
			}
			
		}
		//r_print($req);
		
		// It it is Remote lets check it here
		// We do it here because we want to check all requirements at once
		if(aefer()){
			$req = $this->aefer_req_check($req);
			// This will fill the key 'result' for every requirement
			//r_print($req);
		}
		
		if(method_exists($softpanel, 'soft_req_check') && !defined('SOFTADMIN')){
			$req = $softpanel->soft_req_check($req);
		}
		
		foreach($req as $k => $v){
			// Check if php extension is loaded
			
			if($v['type'] == 'extension'){
				
				$ext_res = $this->req_loaded_extension($v);
				if($ext_res){
					if(!$this->req_loaded_extension_version($v)){
						//return false;
					}
				}else{
					//return false;
				}
			}
			
			// Check if php function exist
			if($v['type'] == 'function_exists'){
				if(!$this->req_function_exists($v)){
					
				}
			}
			if($v['type'] == 'version'){
				if(!$this->req_version($v)){
					//return false;
				}
			}
		}
		
	}// End of constructor
	
	//PHP Extension version check not currently supported for AEFER
	function aefer_req_check($params){
		
		global $globals, $error, $l, $__hooks, $softpanel, $ftp, $__settings;
		
		include_once($globals['mainfiles'].'/functions/aefer.php');
		
		$dom = $__settings;
		$conn = set_connection($dom);
		if(!empty($error)){
			return false;
		}
		
		$ftp_softpath = npath($dom, $dom['softpath']);
	
		$_file = implode('', file($globals['path'].'/lib/aefer/sreq.php'));
		$_file = aefer_dump($params, '[[[sreq]]]', $_file);
		if($_GET['debug'] == 'fetch'){
			$conn->Verbose = true;
			$conn->LocalEcho = true;
		}
		
		if(!$conn->softput($ftp_softpath.'/sreq.php', $_file)){
			$error[] = 'Error in uploading requirements checker';
			aefer_cleanup();
			return false;
		}
		
		soft_log(1, 'sreq is uploaded successfully');
		
		rename_htaccess($dom, 1);
		
		soft_log(2, 'renamed .htaccess');
		
		$result = aefer_response($dom['softurl'].'/sreq.php');
		//echo $__settings['softurl'].'/sreq.php';r_print($result);$ftp->softput($__settings['ftp_softpath'].'/../sreq1.php', $_file);
		soft_log(3, 'aefer response for sreq:'.var_export($result, 1));
		
		rename_htaccess($dom, 0);// Just to be safe. This should already be done by sreq.php
		
		soft_log(2, 'reverted .htaccess');
		// Delete the file
		$conn->delete($ftp_softpath.'/sreq.php');
		
		if(aefer_was_successful($result)){
			
			soft_log(1, 'aefer was successful...DONE');
			
			return $result['sreq'];
		}else{
			$error['no_response'] = $l['no_aefer_resp'];
			aefer_cleanup();
			return false;
		}
		
		// If it was not successful just return what we received
		return $params;
		
	}
	
	// Check for FUNCTION exists in PHP
	function req_function_exists($param){
		
		global $globals, $error, $l, $__hooks, $softpanel;
		
		if(in_array($param['name'], $__hooks['function_exists']) || defined('NO_REQUIREMENT')){
			return true;
		}
			
		// This is for Remote
		if(!aefer() && !isset($param['result'])){
		
			$command = eu_php_bin().' -r "if (function_exists(\''.$param['name'].'\')) exit(0); else exit(1);"';
			
			// If it is CageFS we need to change the command
			if(file_exists('/usr/bin/selectorctl') && file_exists('/bin/cagefs_enter')){
				@exec("/usr/bin/selectorctl --user-current --user=".$softpanel->user['name'].' 2>&1', $cout, $cret);
				if(!preg_match('/ERROR/is', implode('', $cout)) && !preg_match('/native/is', implode('', $cout))){
					if(file_exists('/bin/cagefs_enter.proxied')){
						if(file_exists('/usr/local/bin/php')){
							$cagefs_phpbin = '/bin/cagefs_enter.proxied /usr/local/bin/php';
						}else{
							$cagefs_phpbin = '/bin/cagefs_enter.proxied php';
						}
					}else{
						$cagefs_phpbin = '/bin/cagefs_enter php';						
					}
					$command = $cagefs_phpbin.' -r "if (function_exists(\''.$param['name'].'\')) exit(0); else exit(1);"';
				}
			}
			
			@exec($command, $out, $ret);
			
			if(!empty($_GET['debug'])){
				echo $command;
				r_print($out);
				r_print($ret);
			}
			
			$output = implode('', $out);
		}
				
		// Fill in the error
		if(!empty($ret) || !empty($param['result'])){
			
			// Is there NO SPECIFIC error string !
			if(empty($param['err'])){		
				$param['err_key'] = 'req_func_nf_'.$param['name'];
				$param['err_val'] = lang_vars($l['req_func_nf'], array(strtoupper($param['check']))).' : <b>'.$param['name'].'</b>';
			}else{
				$param['err_key'] = $param['err'];
				$param['err_val'] = '{{'.$param['err'].'}}';
			}
			
			$error[$param['err_key']] = $param['err_val'];
			return false;
		
		}
		
		return true;
		
	}

	// Check loaded extensions
	function req_loaded_extension($param){
		
		global $globals, $error, $l, $__hooks, $softpanel;
		
		// strtolower and str_replace is used bcoz in cagefs they are not using extension as standard (php -m) 
		// All extension are lower case and separated by "_".
		if(in_array(strtolower(str_replace(' ','_', $param['name'])), $__hooks['loaded_extension']) || defined('NO_REQUIREMENT')){
			return true;
		}
		
		// If we reached here then the extension is definately not loaded in cagefs binary
		if(defined('PHP_EXT_EXHAUSTIVE')){
			$ret = 1;
		}
		
		// Is there NO SPECIFIC error string !
		if(empty($param['err'])){		
			$param['err_key'] = 'req_ext_nf_'.$param['name'];
			$param['err_val'] = lang_vars($l['req_ext_nf'], array(strtoupper($param['check']))).' <b>'.$param['name'].'</b>';
		}else{
			$param['err_key'] = $param['err'];
			$param['err_val'] = '{{'.$param['err'].'}}';
		}
		
		// Check if the extention is loaded
		if(!empty($param['name'])){
		
			// This is for Remote
			if(!aefer() && !defined('PHP_EXT_EXHAUSTIVE') && !isset($param['result'])){
							
				$command = sphpbin().' -r "if (extension_loaded(\''.$param['name'].'\')) exit(0); else exit(1);" 2>&1';
				@exec($command, $out, $ret);
			
				if(!empty($_GET['debug'])){
					echo $command;
					r_print($out);
					r_print($ret);
				}
			}

			// Any error ?
			if(!empty($ret) || !empty($param['result'])){
				$error[$param['err_key']] = $param['err_val'].($_GET['debug'] == 'showcmd' ? $command : '');
				return false;
			}
			
		}
		
		return true;
		
	}
	
	function req_loaded_extension_version($param){
		global $globals, $error, $l, $__hooks, $softpanel;
		
		// Do we need to GREP a specific text
		//Skip the extension version check in AEFER.
		if(!empty($param['grep']) && !aefer()){
			
			$command = (defined('eu_php_bin') ? eu_php_bin : sphpbin())." -i";
			@exec($command, $out, $ret);
			
			$param['grepvar'] = (empty($param['grepvar']) ? 1 : $param['grepvar']);
			
			$output = implode('', $out);
			soft_preg_replace('/'.$param['grep'].'/is', $output, $found, $param['grepvar']);
			
			if(empty($found)){
				// Fill the error 
				$error[$param['err_key']] = $param['err_val'];
				return false;
			}
			
			if(!empty($param['version']) && !empty($param['operator'])){
				if(!version_compare($found, $param['version'], $param['operator'])){
					$error[$param['err_key']] = lang_vars($l['req_ext_ver'], array(strtoupper($param['check']), $param['name'], $l[$param['operator']], $param['version'], $found));
					return false;
				}
			}
			
		}
		
		return true;
		
	}
	
	function req_version($param){
		
		global $globals, $error, $softpanel, $l, $__settings;
		
		// Is there NO SPECIFIC error string !
		if(empty($param['err'])){		
			$param['err_key'] = 'req_ver_nf_'.$param['check'];
			$param['err_val'] = lang_vars($l['req_ver_nf'], array(strtoupper($param['check']), $l[$param['operator']], $param['version']));
		}else{
			$param['err_key'] = $param['err'];
			$param['err_val'] = '{{'.$param['err'].'}}';
		}
		
		// This is for Remote
		if(aefer() || isset($param['result'])){
			
			$output = $param['result'];
			
		}else{
		
			//echo '<br>------------------------------'.$binary.'------------------------------------------------<br>';
			//echo $binary.' -r "echo function_exists(\''.$fext.'\');"';
			if($param['check'] == 'mysql'){
				
				if(empty($softpanel->mysql_path)) return;
				
				$command = (!empty($softpanel->mysql_path) ? $softpanel->mysql_path : '/usr/bin/mysql').' -V';
				
			}elseif($param['check'] == 'perl'){
				
				if(empty($softpanel->perl_bin)) return;
				
				$command = $softpanel->perl_bin.' -v';
				
			}elseif($param['check'] == 'php'){
				
				$command = '';
	
			}
			
			// Execute the command
			@exec($command, $out, $ret);
			
			$output = implode('', $out);
		
			if($param['check'] == 'php'){
				$output = sphpversion();
			}
			
			if($param['check'] == 'perl'){
				soft_preg_replace('/This is perl,(.*?)\(\*\)/is', $output, $ver, 1);
				$output = trim($ver,'v');
			}
			
			if($param['check'] == 'mysql'){
				
				if(preg_match('/(.*?)-(.*?)-MariaDB/is', $output)){
					soft_preg_replace('/(.*?)-(.*?)-MariaDB/is', $output, $ver, 2);
				}else{
					soft_preg_replace('/(.*?)Distrib (.*?)\,/is', $output, $ver, 2);
					
					//Since the string pattern changed in webuzo mysql 5.7 
					if(empty($ver)){	
						soft_preg_replace('/(.*?)Ver (.*?) /is', $output, $ver, 2);
					}
				}
				
				$output = trim($ver);
			}
		}
		
		if($param['check'] == 'php'){
			
			if(defined('NO_PHP_VER_REQ')) return true;
			
			if(defined('php_version')){
				$output = php_version;
			}
			
			if(!defined('php_version')){
				define('php_version', $output);
			}
		}
		
		if($param['check'] == 'perl'){
			if(aefer()){ // At the moment we are skipping this for PERL
				return true;
			}
			
			if(defined('NO_PERL_VER_REQ')) return true;
			
			if(defined('perl_version')){
				$output = perl_version;
			}
		}
		
		if($param['check'] == 'mysql'){
			if(aefer()){ // At the moment we are skipping this for MySQL
				return true;
			}
			
			if(defined('NO_MYSQL_VER_REQ')) return true;
			
			if(defined('mysql_version')){
				$output = mysql_version;
			}
			
			// We will check the version for remote MySQL later
			if(is_remote_dbhost($__settings['softdbhost']) && !defined('mysql_version') && !defined('NO_REQUIREMENT')){
				
				if(is_array($GLOBALS['remote_mysql_ver_check'])){
					$GLOBALS['remote_mysql_ver_check'][] = $param;
				}else{
					$GLOBALS['remote_mysql_ver_check'] = array($param);
				}
				
				return true;
			}
		}
		
		// Compare the versions
		if(!version_compare($output, $param['version'], $param['operator']) && !defined('NO_REQUIREMENT')){
			$error[$param['err_key']] = $param['err_val'].$output;
		}
		
	}
	
	function remote_mysql_version_check($params){
		
		global $__settings, $globals, $l, $error;
		
		foreach($params as $k => $param){
		
			// Is there NO SPECIFIC error string !
			if(empty($param['err'])){		
				$param['err_key'] = 'req_ver_nf_'.$param['check'];
				$param['err_val'] = lang_vars($l['req_ver_nf'], array(strtoupper($param['check']), $l[$param['operator']], $param['version']));
			}else{
				$param['err_key'] = $param['err'];
				$param['err_val'] = '{{'.$param['err'].'}}';
			}
	
			$conn = @soft_mysql_connect($__settings['softdbhost'], $__settings['softdbuser'], $__settings['softdbpass'], true);
			$output = soft_mysql_get_server_info($conn);
				
			if(preg_match('/(.*?)-(.*?)-MariaDB/is', $output)){
				soft_preg_replace('/(.*?)-(.*?)-MariaDB/is', $output, $ver, 2);
				if(!empty($ver)){
					$output = trim($ver);
				}
			}
		
			// Compare the versions
			if(!version_compare($output, $param['version'], $param['operator']) && !defined('NO_REQUIREMENT')){
				$error[$param['err_key']] = $param['err_val'].$output;
			}
			
		}
		
		if(!empty($error)){
			return false;
		}
	}
}

