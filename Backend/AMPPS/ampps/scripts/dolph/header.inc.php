<?php

$site['url']               = "[[softurl]]/";
$admin_dir                 = "administration";
$iAdminPage				= 0;
$site['url_admin']         = "{$site['url']}$admin_dir/";

$site['mediaImages']       = "{$site['url']}media/images/";
$site['gallery']           = "{$site['url']}media/images/gallery/";
$site['flags']             = "{$site['url']}media/images/flags/";
$site['banners']           = "{$site['url']}media/images/banners/";
$site['tmp']               = "{$site['url']}tmp/";
$site['plugins']           = "{$site['url']}plugins/";
$site['base']              = "{$site['url']}templates/base/";

$site['bugReportMail']     = "[[bug_email]]";
$site['logError']          = true;
$site['fullError']         = false;
$site['emailError']        = true;

$dir['root']               = "[[softpath]]/";
$dir['inc']                = "{$dir['root']}inc/";
$dir['profileImage']       = "{$dir['root']}media/images/profile/";

$dir['mediaImages']        = "{$dir['root']}media/images/";
$dir['gallery']            = "{$dir['root']}media/images/gallery/";
$dir['flags']              = "{$dir['root']}media/images/flags/";
$dir['banners']            = "{$dir['root']}media/images/banners/";
$dir['tmp']                = "{$dir['root']}tmp/";
$dir['cache']              = "{$dir['root']}cache/";
$dir['plugins']            = "{$dir['root']}plugins/";
$dir['base']               = "{$dir['root']}templates/base/";
$dir['classes']            = "{$dir['inc']}classes/";

$PHPBIN                    = "[[PHPBIN]]";

$db['host']                = '[[softdbhost]]';
$db['sock']                = '';
$db['port']                = '';
$db['user']                = '[[softdbuser]]';
$db['passwd']              = '[[softdbpass]]';
$db['db']                  = '[[softdb]]';
$db['persistent']          = true;

define('BX_DOL_URL_ROOT', $site['url']);
define('BX_DOL_URL_ADMIN', $site['url_admin']);
define('BX_DOL_URL_PLUGINS', $site['plugins']);
define('BX_DOL_URL_MODULES', $site['url'] . 'modules/' );
define('BX_DOL_URL_CACHE_PUBLIC', $site['url'] . 'cache_public/');

define('BX_DOL_LOG_ERROR', $site['logError']);
define('BX_DOL_FULL_ERROR', $site['fullError']);
define('BX_DOL_EMAIL_ERROR', $site['emailError']);
define('BX_DOL_REPORT_EMAIL', $site['bugReportMail']);

define('BX_DIRECTORY_PATH_INC', $dir['inc']);
define('BX_DIRECTORY_PATH_ROOT', $dir['root']);
define('BX_DIRECTORY_PATH_BASE', $dir['base']);
define('BX_DIRECTORY_PATH_CACHE', $dir['cache']);
define('BX_DIRECTORY_PATH_CLASSES', $dir['classes']);
define('BX_DIRECTORY_PATH_PLUGINS', $dir['plugins']);
define('BX_DIRECTORY_PATH_DBCACHE', $dir['cache']);
define('BX_DIRECTORY_PATH_MODULES', $dir['root'] . 'modules/' );
define('BX_DIRECTORY_PATH_CACHE_PUBLIC', $dir['root'] . 'cache_public/' );

define('DATABASE_HOST', $db['host']);
define('DATABASE_SOCK', $db['sock']);
define('DATABASE_PORT', $db['port']);
define('DATABASE_USER', $db['user']);
define('DATABASE_PASS', $db['passwd']);
define('DATABASE_NAME', $db['db']);
define('DATABASE_PERSISTENT', $db['persistent']);

define('BX_DOL_SPLASH_VIS_DISABLE', 'disable');
define('BX_DOL_SPLASH_VIS_INDEX', 'index');
define('BX_DOL_SPLASH_VIS_ALL', 'all');


define('CHECK_DOLPHIN_REQUIREMENTS', 1);
if (defined('CHECK_DOLPHIN_REQUIREMENTS')) {
    $aErrors = array();
    $aErrors[] = (ini_get('register_globals') == 0) ? '' : '<font color="red">register_globals is On (warning, you should have this param in the Off state, or your site will be unsafe)</font>';
    $aErrors[] = (ini_get('safe_mode') == 0) ? '' : '<font color="red">safe_mode is On, disable it</font>';
    $aErrors[] = (version_compare(PHP_VERSION, '5.4.0', '<')) ? '<font color="red">PHP version too old, please update to PHP 5.4.0 at least</font>' : '';
    $aErrors[] = (!extension_loaded( 'mbstring')) ? '<font color="red">mbstring extension not installed. <b>Warning!</b> Dolphin cannot work without <b>mbstring</b> extension.</font>' : '';
    $aErrors[] = (ini_get('short_open_tag') == 0 && version_compare(phpversion(), "5.4", "<") == 1) ? '<font color="red">short_open_tag is Off (must be On!)<b>Warning!</b> Dolphin cannot work without <b>short_open_tag</b>.</font>' : '';
    $aErrors[] = (ini_get('allow_url_include') == 0) ? '' : '<font color="red">allow_url_include is On (warning, you should have this param in the Off state, or your site will be unsafe)</font>';

    $aErrors = array_diff($aErrors, array('')); //delete empty
    if (count($aErrors)) {
        $sErrors = implode(" <br /> ", $aErrors);
        echo <<<EOF
{$sErrors} <br />
Please go to the <br />
<a href="https://www.boonex.com/trac/dolphin/wiki/GenDol7TShooter">Dolphin Troubleshooter</a> <br />
and solve the problem.
EOF;
        exit;
    }
}


//check correct hostname
$aUrl = parse_url( $site['url'] );
$iPortDefault = 'https' == $aUrl['scheme'] ? '443' : '80';
if ( isset($_SERVER['HTTP_HOST']) and 0 != strcasecmp($_SERVER['HTTP_HOST'], $aUrl['host']) and 0 != strcasecmp($_SERVER['HTTP_HOST'], $aUrl['host'] . ':' . (!empty($aUrl['port']) ? $aUrl['port'] : $iPortDefault)) ) {
    $sPort = empty($aUrl['port']) || 80 == $aUrl['port'] || 443 == $aUrl['port'] ? '' : ':' . $aUrl['port'];
    header( "Location:{$aUrl['scheme']}://{$aUrl['host']}{$sPort}{$_SERVER['REQUEST_URI']}", true, 301 );
    exit;
}


// check if install folder exists
if ( !defined ('BX_SKIP_INSTALL_CHECK') && file_exists( $dir['root'] . 'install' ) ) {
    $ret = <<<EOJ
<!DOCTYPE html>
<html>
<head>
    <title>Dolphin Installed</title>
    <link href="{$site['url']}install/general.css" rel="stylesheet" type="text/css" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body class="bx-def-font">
    <div class="adm-header">
        <div class="adm-header-content">
            <div class="adm-header-title bx-def-margin-sec-left">
                <div class="adm-header-logo"><img src="{$site['url']}install/images/dolphin-white.svg" /></div>
                <div class="adm-header-text bx-def-font-h1">DOLPHIN.PRO</div>
                <div class="clear_both">&nbsp;</div>
            </div>
            <div class="clear_both">&nbsp;</div>
        </div>
    </div>
    <div id="bx-install-main" class="bx-def-border bx-def-round-corners bx-def-margin-top bx-def-margin-bottom">
        <div id="bx-install-content" class="bx-def-padding">
            <div class="bx-install-header-caption bx-def-font-h1 bx-def-margin-bottom">
                Well done, mate! Dolphin is now installed.
            </div>
            <div class="bx-install-header-text bx-def-font-large bx-def-font-grayed">
                Remove directory called <b>"install"</b> from your server and <a href="{$site['url']}administration/modules.php">proceed to Admin Panel to install modules</a>.
            </div>
        </div>
    </div>
</body>
</html>
EOJ;
    echo $ret;
    exit();
}

// set error reporting level
// only show errors, hide notices, deprecated and strict warnings
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT & ~E_WARNING);

// set default encoding for multibyte functions
mb_internal_encoding('UTF-8');
mb_regex_encoding('UTF-8');

require_once(BX_DIRECTORY_PATH_INC . "version.inc.php");
require_once(BX_DIRECTORY_PATH_ROOT . "flash/modules/global/inc/header.inc.php");
require_once(BX_DIRECTORY_PATH_ROOT . "flash/modules/global/inc/content.inc.php");
require_once(BX_DIRECTORY_PATH_CLASSES . "BxDolService.php");
require_once(BX_DIRECTORY_PATH_CLASSES . 'BxDolAlerts.php');
require_once(BX_DIRECTORY_PATH_CLASSES . 'BxDolExceptionHandler.php');

set_exception_handler([new BxDolExceptionHandler(), 'handle']);

$oZ = new BxDolAlerts('system', 'begin', 0);
$oZ->alert();
