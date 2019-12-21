<?php
/* ############################################################ *\
 ----------------------------------------------------------------
@package	Jcow Social Networking Script.
@copyright	Copyright (C) 2009 jcow.net.  All Rights Reserved.
@license	see http://jcow.net/license
 ----------------------------------------------------------------
\* ############################################################ */

$db_info = array(
	'host' => '[[softdbhost]]',
	'user' => '[[softdbuser]]',
	'pass' => '[[softdbpass]]',
	'dbname' => '[[softdb]]'
	);


$uhome = '[[softurl]]';
$flvtool2Path = '/usr/bin/flvtool2';
$ffmpegPath='/usr/local/bin/ffmpeg';
$var_cache_live = 3600; // seconds
$ubase = $uhome.'/index.php?p=';
//$ubase = $uhome.'/';
$num_per_page = 12;
$sid = 'jcow';
$table_prefix = 'jcow_';
$timezone = -8;
$settings = array(
	'time_format' => 'g:i a',
	'date_format' => 'M jS Y',
	'date_today' => 'Today',
	'date_yesterday' => 'Yesterday',
	'default_lang' => 'en',
	'hide_whatsnew' => 1,
	'hide_onlineuser' => 1,
	'online' => 10, // minutes
	);
$config['disable_language'] = 0;
$config['is_local'] = 1;
$config['max_upload'] = 200; // kb
$config['allowed_html_tags'] = '<ul><li><a><img><br><p><strong><em><span>';
$config['ad_right'] = 
	'';
$captcha['publickey'] = '';
$captcha['privatekey'] = '';
