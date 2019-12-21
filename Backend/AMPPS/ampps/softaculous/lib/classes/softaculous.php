<?php

/**
 * This is the important page where a user can install a script.
 * It will gives the detailed information of particular php scripts.
 * It will allow a user to check the ratings, review, demos, screenshots, etc of the script.
 * A user can also rate and review a script.
 */
 
//////////////////////////////////////////////////////////////
//===========================================================
// software.php
//===========================================================
// SOFTACULOUS 
// Version : 1.1
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Date:       10th Jan 2009
// Time:       21:00 hrs
// Site:       http://www.softaculous.com/ (SOFTACULOUS)
// ----------------------------------------------------------
// Please Read the Terms of use at http://www.softaculous.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Inc.
//===========================================================
//////////////////////////////////////////////////////////////

if(!defined('SOFTACULOUS')){

	die('Hacking Attempt');

}

class softscripts{
	
	var $sid = 0;		// Script ID
	var $error = 0;		// Any error occured ?
	var $softinfo;		// Raw info.xml
	var $softinstall;	// Raw install.xml
	var $softupgrade;	// Raw upgrade.xml
	var $info;			// Parsed info.xml
	var $install;		// Parsed install.xml
	var $upgrade;		// Parsed upgrade.xml	
	var $l;				// Language Strings from info.xml
	var $software;		
	
	/**
	 * The constructor of this class. Sets the 
	 *
	 * @package      softscripts
	 * @author       Pulkit Gupta
	 * @param        int $sid - The script ID to load
	 * @returns 	 bool Is always false
	 * @since     	 3.5
	 */	
	function __construct($sid){
	
		global $globals, $iscripts, $scripts, $allcatwise;
		
		if(empty($scripts[$sid])){
			return $this->e('invalid_script');
		}
		
		$this->sid = $sid;
		$this->software = $scripts[$sid];
		
		// Load the SCRIPTS Language File
		if(!load_lang('script_strings')){	
			return $this->e('load_script_string');
		}
		
		$this->software['path'] = $globals['softscripts'].'/'.$this->software['softname'];
		
		// CHECK if the files exists
		if(!file_exists($this->software['path'].'/info.xml') && method_exists($softpanel, 'updatesoftwares')){
			$softpanel->updatesoftwares($sid, 0, 1);
		}
	
	}
	
	function infoxml(){
	
		global $globals, $iscripts, $scripts, $allcatwise;
		
		// Get info about this software
		$this->softinfo = @implode('', file($this->software['path'].'/info.xml'));
		
		// OH NO! No information was found
		if(empty($this->softinfo)){
			return $this->e('no_info_file');
		}
		
		// Check the version of SOFTACULOUS Required
		if(preg_match('/<softversion>(.*?)<\/softversion>/is', $this->softinfo)){
			preg_replace('/<softversion>(.*?)<\/softversion>/ies', '$this->info[softversion] = stripslashes(trim(\'$1\'));', $this->softinfo);
			if(!empty($softversion) && !$this->softversion($softversion)){
				return $this->e('incompatible');
			}
		}
		
		
		$this->softinfo = $this->loadlanguages($this->softinfo);
		
		$this->info = array('overview' => '', 'install' => '', 'features' => '', 'demo' => '', 'ratings' => '', 'version' => '', 'support' => '');
		
		foreach($this->info as $key => $v){
			
			if($key == 'install') continue;
			
			preg_replace('/<'.$key.'>(.*?)<\/'.$key.'>/ies', '$this->info[\''.$key.'\'] = unhtmlentities(trim(\'$1\'))', $this->softinfo);
			
		}
		
		$spacereq = 0;
		preg_replace('/<space>(.*?)<\/space>/ies', '$spacereq = trim(\'$1\')', $this->softinfo);
		$this->software['spacereq'] = $spacereq;
		
		// Admin URL
		preg_replace('/<admin>(.*?)<\/admin>/ies', '$adminurl = trim(\'$1\')', $this->softinfo);
		$this->software['adminurl'] = (empty($adminurl) ? false : $adminurl);
		
		//Version Info
		$this->software['ver'] = $this->info['version'];
		unset($this->info['version']);//Otherwise it will show in the TABS
		
		// Do we have an importer ?
		if(file_exists($software['path'].'/import.php')){
			$this->info['import'] = true;
		}
		
		//r_print($this->info);
		
		return $this->info;
		
	}
	
	/**
	 * Set and error and return false
	 *
	 * @package      softscripts
	 * @author       Pulkit Gupta
	 * @param        string $code - The error code to be set
	 * @returns 	 bool Is always false
	 * @since     	 3.5
	 */	
	function e($code){
		$this->error = $code;
		return false;
	}

	/**
	 * Check the Softaculous Version required for the scripts.
	 * If the Softaculous version is older then the minimum requirement, it returns false.
	 *
	 * @package      softscripts
	 * @author       Pulkit Gupta
	 * @param        string $ver The minimum required Softaculous Version
	 * @return       bool
	 * @since     	 1.0
	 */
	function softversion($ver){
	
	global $globals;
	
		$ver = str_replace('.', '', $ver);
		
		$softver = str_replace('.', '', $globals['version']);
		
		if($ver > $softver){
			return false;	
		}
	
		return true;
	
	}
	
	/**
	 * Load and Parse the XML of a script
	 *
	 * @package      softscripts
	 * @author       Pulkit Gupta
	 * @returns 	 bool Is always false
	 * @since     	 3.5
	 */	
	function installxml(){
	
		global $globals, $iscripts, $scripts, $allcatwise, $l, $softpanel;
		
		$soft = $this->sid;
		$software = $this->software;
		
		// Get INSTALLATION Info about this software
		$install = @implode(file($software['path'].'/install.xml'));
			
		// OH NO! No INSTALLATION Info
		if(empty($install)){
			return $this->e('no_install');
		}
		
		$install = $this->parselanguages($install);		
		
		//This package is to be installed by SOFTACULOUS
		if(preg_match('/<softinstall (.*?)>(.*?)<\/softinstall>/is', $install)){
			
			$settings = $this->load_settings($install);
		
		}
		
		// Does it need to continue setup on its own ? 1.8
		preg_replace('/<setuplocation>(.*?)<\/setuplocation>/ies', '$setupcontinue = stripslashes(trim(\'$1\'));', $install);
		
		if(preg_match('/<db>mysql<\/db>/is', $install)){
			preg_replace('/<db>(.*?)<\/db>/ies', '$dbtype = stripslashes(trim(\'$1\'));', $install);
		}
		
		// Footer Links
		if(preg_match('/<footer_link>(.*?)<\/footer_link>/is', $install)){
			preg_replace('/<footer_link>(.*?)<\/footer_link>/ies', '$footer_link[] = stripslashes(trim(\'$1\'));', $install);
			foreach($footer_link as $k => $v){
				$footer_link[$k] = trim($v);
			}
			// The footer prefix
			preg_replace('/<footer_prefix>(.*?)<\/footer_prefix>/ies', '$footer_prefix = stripslashes(\'$1\');', $install);
		}
		
		//Are we to include/exclude files
		if(preg_match('/<files>(.*?)<\/files>/is', $install)){
			preg_replace('/<files>(.*?)<\/files>/ies', '$files = stripslashes(trim(\'$1\'));', $install);
			$files = trim($files);
			
			//Files to be included only
			if(!empty($files) && preg_match('/<include>(.*?)<\/include>/is', $files)){
				preg_replace('/<include>(.*?)<\/include>/ies', '$include[] = stripslashes(trim(\'$1\'));', $files);
			}
	
			//Files to be excluded
			if(!empty($files) && preg_match('/<exclude>(.*?)<\/exclude>/is', $files)){
				preg_replace('/<exclude>(.*?)<\/exclude>/ies', '$exclude[] = stripslashes(trim(\'$1\'));', $files);
			}
		}
		
		// Are there any CRON JOBS
		if(preg_match('/<cron>(.*?)<\/cron>/is', $install)){
			preg_replace('/<cron>(.*?)<\/cron>/ies', '$cronjob = stripslashes(trim(\'$1\'));', $install);
			$cron = array();
			
			preg_replace('/<min>(.*?)<\/min>/ies', '$cron[\'min\'] = stripslashes(trim(\'$1\'));', $cronjob);
			
			preg_replace('/<hour>(.*?)<\/hour>/ies', '$cron[\'hour\'] = stripslashes(trim(\'$1\'));', $cronjob);
			
			preg_replace('/<day>(.*?)<\/day>/ies', '$cron[\'day\'] = stripslashes(trim(\'$1\'));', $cronjob);
			
			preg_replace('/<month>(.*?)<\/month>/ies', '$cron[\'month\'] = stripslashes(trim(\'$1\'));', $cronjob);
			
			preg_replace('/<weekday>(.*?)<\/weekday>/ies', '$cron[\'weekday\'] = stripslashes(trim(\'$1\'));', $cronjob);
			
			preg_replace('/<command>(.*?)<\/command>/ies', '$cron[\'command\'] = stripslashes(trim(\'$1\'));', $cronjob);
			
		}
		
		if(preg_match('/<datadir>(.*?)<\/datadir>/is', $install)){
			preg_replace('/<datadir>(.*?)<\/datadir>/ies', '$datadir = stripslashes(trim(\'$1\'));', $install);
		}
		
		// Usage Notes ???
		preg_replace('/<notes>(.*?)<\/notes>/ies', '$notes = stripslashes(trim(\'$1\'));', $install);
		
		// Can we publish ?
		if(preg_match('/<publish>(.*?)<\/publish>/is', $install)){
			$can_publish = true;
		}
				
		//Path of the packaged file
		$package = $software['path'].'/'.$software['softname'].'.zip';
		
		$this->softinstall = $install;
		$this->install['setupcontinue'] = $setupcontinue;
		$this->install['dbtype'] = $dbtype;
		$this->install['footer_link'] = $footer_link;
		$this->install['footer_prefix'] = $footer_prefix;
		$this->install['include'] = $include;
		$this->install['exclude'] = $exclude;
		$this->install['cron'] = $cron;
		$this->install['datadir'] = $datadir;
		$this->install['notes'] = $notes;
		$this->install['can_publish'] = $can_publish;
		//$this->install[''] = 
		
		return $this->install;
		
	}

	/**
	 * Parses the settings from the given $xml variable. This $xml is mainly the install.xml file of a script.
	 * This is an important function in Softaculous !
	 *
	 * @package      softaculous 
	 * @subpackage   scripts
	 * @author       Pulkit Gupta
	 * @param        array $xml XML read from install.xml of a script
	 * @return       array The data loaded
	 * @since     	 1.0
	 */
	function load_settings($xml){
		
		$xmlset = $settings = array();
		
		preg_replace('/<group>(.*?)<\/group>/ies', '$xmlset[] = stripslashes(trim(\'$1\'));', $xml);
			
		foreach($xmlset as $k => $v){
			
			$heading = '';
			$inputs = array();
			
			preg_replace('/<heading>(.*?)<\/heading>/ies', '$heading = stripslashes(trim(\'$1\'));', $v);		
			$settings[$heading] = array();
			
			preg_match_all('/<input (.*?)>(.*?)<\/input>/is', $v, $inputs);
			
			foreach($inputs[0] as $input){
				
				$tag = $name = $head = $exp = $handle = $optional = NULL;
				
				//The Tag
				preg_match('/<input(.*?)>/is', $input, $tag);
				$tag = @$tag[0];
				//Is it a select tag
				if(preg_match('/type="select"/is', $tag)){
					preg_replace('/(<select (.*?)>(.*?)<\/select>)/ies', '$tag = stripslashes(trim(\'$1\'));', $input);
				}elseif(preg_match('/type="textarea"/is', $tag)){//Its a TEXTAREA
					preg_replace('/(<textarea (.*?)>(.*?)<\/textarea>)/ies', '$tag = stripslashes(trim(\'$1\'));', $input);
				}
				$tag = preg_replace('/name="(.*?)"/is', 'name="$1" id="$1"', $tag);
				
				//The Name of the setting
				preg_match('/name="(.*?)"/is', $tag, $name);
				$name = @$name[1];
				
				//The Heading
				preg_match('/<head>(.*?)<\/head>/is', $input, $head);
				$head = @$head[1];
				
				//The Explanation
				preg_match('/<exp>(.*?)<\/exp>/is', $input, $exp);
				$exp = @$exp[1];
				
				//Handling Function
				preg_match('/<handle>(.*?)<\/handle>/is', $input, $handle);
				$handle = @$handle[1];
				
				//Is it optional
				if(preg_match('/<optional>(.*?)<\/optional>/is', $input)){
					$optional = true;
				}
				
				//The default POST value
				if(preg_match('/type="(text|hidden)"/is', $tag)){
					$tag = preg_replace('/value="(.*?)"/ies', '\'value="\'.stripslashes(POSTval($name, "$1")).\'"\';', $tag);
				}
				
				//What about checkboxes ??
				if(preg_match('/type="checkbox"/is', $tag)){				
					if(preg_match('/checked="checked"/is', $tag)){
						$tag = preg_replace('/checked="checked"/ies','POSTchecked($name, true);',$tag);
					}else{
						$tag = preg_replace('/>/ies', '\' \'.POSTchecked($name).\' >\';', $tag);
					}			
				}
				
				//Select tags
				if(preg_match('/<select/is', $tag)){
					$seltemp = POSTval($name);
					if(!empty($seltemp)){
						$tag = preg_replace('/value="('.preg_quote($seltemp, '/').')"/is', 'value="$1" selected="selected"',$tag);
					}
				}
				
				//TEXTAREAs
				if(preg_match('/<textarea/is', $tag)){
					$tag = preg_replace('/(<textarea (.*?)>)(.*?)(<\/textarea>)/ies', 'stripslashes(\'$1\'.POSTval($name, "$3").\'$4\');', $tag);
				}
				
				$settings[$heading][$name]['tag'] = $tag;
				$settings[$heading][$name]['head'] = $head;
				$settings[$heading][$name]['exp'] = $exp;
				$settings[$heading][$name]['handle'] = $handle;
				$settings[$heading][$name]['optional'] = $optional;
			
			}
			
		}
		
		//r_print($settings);
			
		return $settings;
	
	}
	
	
	/**
	 * If chmod XML is there load it
	 *
	 * @package      softaculous 
	 * @subpackage   scripts
	 * @author       Pulkit Gupta
	 * @param        array $xml The XML to parse
	 * @return       array The data loaded
	 * @since     	 1.0
	 */
	function parse_chmod($xml){
		
		$chmod = array();
		
		preg_match_all('/<chmod (.*?)>(.*?)<\/chmod>/is', $xml, $chmods);
		
		foreach($chmods[0] as $k => $v){
			preg_replace('/<chmod (.*?)>(.*?)<\/chmod>/ies', '$chmod[$k]["path"] = stripslashes(trim(\'$2\'));', $v);
			
			preg_replace('/mode="(.*?)"/ies', '$chmod[$k]["mode"] = stripslashes(trim(\'$1\'));', $v);
			
			if(preg_match('/rec="1"/is', $v)){
				$chmod[$k]['rec'] = 1;
			}
		}
		
		//r_print($chmod);
		
		return $chmod;
	}
	
	
	/**
	 * Further Parses the settings from the load_settings() function. It adds HTML form tags for use in forms.
	 * This is an important function in Softaculous !
	 *
	 * @package      softaculous 
	 * @subpackage   scripts
	 * @author       Pulkit Gupta
	 * @param        array $settings The data returned from the load_settings() function
	 * @return       array The data loaded
	 * @since     	 1.0
	 */
	function load_values($settings){
		
		foreach($settings as $group => $sets){
			
			foreach($sets as $sk => $sv){
				
				// Get the Values
				if(preg_match('/type="(text|hidden)"/is', $settings[$group][$sk]['tag'])){
					preg_replace('/value="(.*?)"/ies', '$settings[$group][$sk][\'value\'] = stripslashes("$1");', $settings[$group][$sk]['tag']);
				}
				
				//What about checkboxes ??
				if(preg_match('/type="checkbox"/is', $settings[$group][$sk]['tag'])){				
					if(preg_match('/checked="checked"/is', $settings[$group][$sk]['tag'])){
						$settings[$group][$sk]['value'] = 'on';
						
						// Does it have a Value
						if(preg_match('/value="(.*?)"/is', $settings[$group][$sk]['tag'])){
							preg_replace('/value="(.*?)"/ies', '$settings[$group][$sk][\'value\'] = stripslashes("$1");', $settings[$group][$sk]['tag']);
						}
					}		
				}
				
				//Select tags
				if(preg_match('/<select/is', $settings[$group][$sk]['tag'])){
					preg_match_all('/<option (.*?)>(.*?)<\/option>/is', $sv['tag'], $options);
					
					$selected = $options[0][0];
					
					foreach($options[0] as $ok => $ov){
						if(preg_match('/selected="selected"/is', $ov)){
							$selected = $ov;
						}
					}
					
					preg_replace('/value="(.*?)"/ies', '$settings[$group][$sk][\'value\'] = stripslashes("$1");', $selected);
					
				}
				
				//TEXTAREAs
				if(preg_match('/<textarea/is', $settings[$group][$sk]['tag'])){
					preg_replace('/(<textarea (.*?)>)(.*?)(<\/textarea>)/ies', '$settings[$group][$sk][\'value\'] = stripslashes("$3");', $settings[$group][$sk]['tag']);
				}
			
			}
		
		}
		
		return $settings;
		
	}
	
	/**
	 * Load the Language string of the software / script from the info.xml and replace them in the give $txt.
	 * It uses parselanguages($txt) and also fills the language strings read into $softlang
	 *
	 * @package      softaculous
	 * @subpackage   scripts
	 * @author       Pulkit Gupta
	 * @param        string $txt The data read from info.xml that need to be replaced with the language strings
	 * @return       string The parsed string
	 * @since     	 1.0
	 */
	function loadlanguages($txt){
		
		$softlang = array();
		
		$xml = '';
		
		preg_replace('/<languages>(.*?)<\/languages>/ies', '$xml = stripslashes(trim(\'$1\'));', $txt);
		$txt = preg_replace('/<languages>(.*?)<\/languages>/is', '', $txt);
		
		preg_replace('/<([A-Za-z]*?)\-([A-Za-z0-9_\-]*?)>(.*?)<\/([A-Za-z]*?)\-([A-Za-z0-9_\-]*?)>/ies', '$softlang[strtolower(trim(\'$1\'))][trim(\'$2\')] = stripslashes(trim(\'$3\'));', $xml);
		
		$this->l = $softlang;		
		
		// If script strings didnt parse everything then we 
		$txt = $this->parselanguages($txt);
		
		return $txt;
	
	}

	/**
	 * Parses the language strings in the info.xml data
	 *
	 * @package      softaculous
	 * @subpackage   scripts
	 * @author       Pulkit Gupta
	 * @param        string $txt The data read from info.xml that need to be replaced with the language strings
	 * @return       string The parsed string.
	 * @since     	 1.0
	 */
	function parselanguages($txt){
		
		// If script strings didnt parse everything then we 
		$txt = preg_replace('/(\{\{([A-Za-z0-9_\-]*?)\}\})/ies', '$this->parsestring(trim(\'$2\'))', $txt);
	
		// First TRY to PARSE SCRIPT STRINGS
		$txt = preg_replace('/(\{\{([A-Za-z0-9_\-]*?)\}\})/ies', '$this->scriptstring(trim(\'$2\'))', $txt);
		
		return $txt;
	
	}
	
	/**
	 * Parses the string as per the users loaded language file.
	 *
	 * @package      softaculous
	 * @subpackage   scripts
	 * @author       Pulkit Gupta
	 * @param        string $str The key of the Language string array.
	 * @return       string The parsed string if there was a equivalent language key otherwise the key itself if no key was defined.
	 * @since     	 1.0
	 */
	function parsestring($str){
	
	global $globals, $user;
	
		$language = (!empty($user['language']) ? $user['language'] : $globals['language']);
		
		//If this location is there and it did not load
		if(!empty($this->l[$language][$str])){
			return $this->l[$language][$str];
		}elseif(!empty($this->l['english'][$str])){
			return $this->l['english'][$str];
		}else{
			return '{{'.$str.'}}';
		}
	
	}
	
	/**
	 * Replaces the parsed language strings from the info.xml with the ones from $l['ss'] if there.
	 *
	 * @package      softaculous
	 * @subpackage   scripts
	 * @author       Pulkit Gupta
	 * @param        string $str The key of the Language string array.
	 * @return       string The global string if there else {{'.$str.'}}
	 * @since     	 1.0
	 */
	function scriptstring($str){
	
	global $globals, $l, $user;
	
		//If Local strings are available
		if(!empty($l['ss'][$str])){
			return $l['ss'][$str];
		}else{
			return $str;
		}
	
	}
	
	/**
	 * Parses the upgrade.xml file if present
	 *
	 * @package      softaculous
	 * @subpackage   scripts
	 * @author       Pulkit Gupta
	 * @param        string $str The key of the Language string array.
	 * @return       string The global string if there else {{'.$str.'}}
	 * @since     	 1.0
	 */

	function upgradexml(){
		global $globals, $iscripts, $scripts, $allcatwise, $l, $softpanel;
			
			$soft = $this->sid;
			$software = $this->software;
			
			
		//OH NO No upgrade.xml was found
		if(!file_exists($software['path'].'/upgrade.xml')){
			return $this->e('no_upgrade_xml_found');
			}
		
		$upgrade = @implode(file($software['path'].'/upgrade.xml'));
		
		// OH NO! No INSTALLATION Info
			if(empty($upgrade)){
				return $this->e('no_upgrade');
			}
			
			$upgrade = $this->parselanguages($upgrade);
			
			//r_print($upgrade);
		//This package is to be installed by SOFTACULOUS
			if(preg_match('/<softupgrade (.*?)>(.*?)<\/softupgrade>/is', $upgrade)){
				
				$usettings = $this->load_settings($upgrade);
				$usettings;
			}
		// Does it need to continue setup on its own ? 1.8
			preg_replace('/<setuplocation>(.*?)<\/setuplocation>/ies', '$setupcontinue = stripslashes(trim(\'$1\'));', $upgrade);
			
			if(preg_match('/<heading>(.*?)<\/heading>/ies', $upgrade)){
			preg_replace('/<heading>(.*?)<\/heading>/ies','$hidden = stripslashes(trim(\'$1\'));', $upgrade);
			}
			if(preg_match('/<files>(.*?)<\/files>/is', $upgrade)){
				preg_replace('/<files>(.*?)<\/files>/ies', '$files = stripslashes(trim(\'$1\'));', $upgrade);
				$files = trim($files);
				
		//Files to be included only
			if(!empty($files) && preg_match('/<include>(.*?)<\/include>/is', $files)){
				preg_replace('/<include>(.*?)<\/include>/ies', '$include[] = stripslashes(trim(\'$1\'));', $files);
			}
		
				//Files to be excluded
			if(!empty($files) && preg_match('/<exclude>(.*?)<\/exclude>/is', $files)){
				preg_replace('/<exclude>(.*?)<\/exclude>/ies', '$exclude[] = stripslashes(trim(\'$1\'));', $files);
			}
		}	
		
	}
	

}
