<?php
require_once(dirname(__FILE__) . '/../helpers/common.php');

$physicalPath = realpath(dirname(__FILE__) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..');
Yii::setPathOfAlias('webroot', $physicalPath);
Yii::setPathOfAlias('webroot.uploads', $physicalPath . DIRECTORY_SEPARATOR . 'uploads');
Yii::setPathOfAlias('webroot.uploads.objects', $physicalPath . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . 'objects');

$baseHost = '[[softurl]]';
$_SERVER['SERVER_NAME'] = $_SERVER['HTTP_HOST'] = $baseHost;

$config = array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'OpenRealEstateCMSCron'.md5($baseHost),
    'preload' => array('log'),
    'components' => array(
        'request' => array(
            'hostInfo' => $baseHost,
            'baseUrl' => '',
            'scriptUrl' => '',
        ),
    ),
);

if (file_exists(dirname(__FILE__) . '/main.php')) {
    $mainConfig = require(dirname(__FILE__) . '/main.php');
} else {
    $mainConfig = require(dirname(__FILE__) . '/main-free.php');
}

$mergeArr = CMap::mergeArray($config, $mainConfig);

if (isset($mergeArr['theme'])) {
    unset($mergeArr['theme']);
}

if (isset($mergeArr['onBeginRequest'])) {
    unset($mergeArr['onBeginRequest']);
}

if (isset($mergeArr['components']['user'])) {
    $mergeArr['components']['user']['class'] = 'ConsoleUser';
    $mergeArr['components']['user']['primaryKey'] = 1;
    
    unset($mergeArr['components']['user']['allowAutoLogin']);
    unset($mergeArr['components']['user']['loginUrl']);
}

# вырубаем всё не нужное - чтобы работала генерация ссылок в Notifier через createUrl/createAssoluteUrl
if (isset($mergeArr['components']['request']['enableCsrfValidation'])) {
    unset($mergeArr['components']['request']['enableCsrfValidation']);
}

if (isset($mergeArr['components']['request']['noCsrfValidationRoutes'])) {
    unset($mergeArr['components']['request']['noCsrfValidationRoutes']);
}

if (isset($mergeArr['components']['request']['enableCookieValidation'])) {
    unset($mergeArr['components']['request']['enableCookieValidation']);
}

if (isset($mergeArr['components']['request']['csrfTokenName'])) {
    unset($mergeArr['components']['request']['csrfTokenName']);
}

if (isset($mergeArr['components']['request']['class'])) {
    unset($mergeArr['components']['request']['class']);
}

if (isset($mergeArr['controllerMap'])) {
    unset($mergeArr['controllerMap']);
}

return $mergeArr;
