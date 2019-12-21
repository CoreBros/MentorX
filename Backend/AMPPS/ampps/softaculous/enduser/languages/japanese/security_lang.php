<?php

//////////////////////////////////////////////////////////////
//===========================================================
// userindex_lang.php
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

//Theme Strings
$l['<title>'] = 'セキュリティセンター - Powered by Softaculous';
$l['security_center'] = 'セキュリティセンター';
$l['subject_name'] = 'サブジェクト';
$l['subject_status'] = 'ステータス';
$l['ampps_subject'] = 'AMPPSログイン';
$l['mysql_subject'] = 'MySQLサーバーログイン';
$l['phpmyadmin_subject'] = 'phpMyAdminパスワードログイン';

//Unsecure Messege
$l['ampps_unsecure'] = ' AMPPSを保護するには、パスワードを設定して下さい。';
$l['phpmyadmin_unsecure'] = ' phpMyAdminは、ネットワークによりパスワード無しでアクセスが可能です。<b>config.inc.php</b> 内の<b>auth_type</b>を、"http" または "cookie"に設定して下さい。';
$l['mysql_unsecure'] = 'MySQLを保護するには、あなたのパスワードを、空欄または"mysql"以外のパスワードに変更して下さい。';

