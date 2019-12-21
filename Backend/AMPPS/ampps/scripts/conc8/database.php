<?php

return [
    'default-connection' => 'concrete',
    'connections' => [
        'concrete' => [
            'driver' => 'c5_pdo_mysql',
            'server' => '[[softdbhost]]',
            'database' => '[[softdb]]',
            'username' => '[[softdbuser]]',
            'password' => '[[softdbpass]]',
            'character_set' => 'utf8',
            'collation' => 'utf8_unicode_ci',
        ],
    ],
];
