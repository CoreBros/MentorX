<?php

	/**
	* @Software : ClipBucket
	* @License : CBLA
	* @version :ClipBucket v2.1
	*/

	$BDTYPE = 'mysql';
	//Database Host
	$DBHOST = '[[softdbhost]]';
	//Database Name
	$DBNAME = '[[softdb]]';
	//Database Username
	$DBUSER = '[[softdbuser]]';
	//Database Password
	$DBPASS = '[[softdbpass]]';
	//Setting Table Prefix
	define('TABLE_PREFIX','[[dbprefix]]');


    $db = new Clipbucket_db();

    $db->connect($DBHOST,$DBNAME,$DBUSER,$DBPASS);

/*
	require 'adodb/adodb.inc.php';

	$db             = ADONewConnection($BDTYPE);
	$db->debug      = false;
	$db->charpage   = 'cp_utf8';
	$db->charset    = 'utf8';
	if(!$db->Connect($DBHOST, $DBUSER, $DBPASS, $DBNAME))
	{
	    exit($db->ErrorMsg());
	}
	$db->Connect($DBHOST, $DBUSER, $DBPASS, $DBNAME);
	
        $db->SetFetchMode(ADODB_FETCH_ASSOC); 
        
	$db->Execute('SET NAMES utf8');
	$db->Execute('SET CHARACTER SET utf8');
	$db->Execute('SET COLLATION_CONNECTION="utf8_general_ci"');
*/

?>