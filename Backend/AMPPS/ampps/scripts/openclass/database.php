<?php defined('SYSPATH') or die('No direct script access.');
return array
(
    'default' => array(
        'type'       => 'mysqli',
        'connection' => array(
            'hostname'   => '[[softdbhost]]',
            'username'   => '[[softdbuser]]',
            'password'   => '[[softdbpass]]',
            'persistent' => FALSE,
            'database'   => '[[softdb]]',
            'variables'  => array('sql_mode'=>'')
            ),
        'table_prefix' => '[[dbprefix]]',
        'charset'      => 'utf8mb4',
        'profiling'    => (Kohana::$environment===Kohana::DEVELOPMENT)? TRUE:FALSE,
     ),
);