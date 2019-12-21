<?php
 return array (
  'components' => 
  array (
    'db' => 
    array (
      'class' => 'CDbConnection',
      'connectionString' => 'mysql:host=[[softdbhost]];dbname=[[softdb]];port=3306',
      'username' => '[[softdbuser]]',
      'password' => '[[softdbpass]]',
      'emulatePrepare' => true,
      'charset' => 'utf8',
      'enableParamLogging' => false,
      'enableProfiling' => false,
      'schemaCachingDuration' => 7200,
      'tablePrefix' => '[[dbprefix]]',
    ),
  ),
  'language' => 'en',
) ;
?>