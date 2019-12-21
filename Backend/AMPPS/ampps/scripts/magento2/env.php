<?php
return [
    'backend' => [
        'frontName' => '[[admin_folder]]'
    ],
    'crypt' => [
        'key' => '[[key]]'
    ],
    'db' => [
        'table_prefix' => '[[dbprefix]]',
        'connection' => [
            'default' => [
                'host' => '[[softdbhost]]',
                'dbname' => '[[softdb]]',
                'username' => '[[softdbuser]]',
                'password' => '[[softdbpass]]',
                'active' => '1'
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'default',
    'session' => [
        'save' => 'db'
    ],
    'cache' => [
        'frontend' => [
            'default' => [
                'id_prefix' => '[[id_prefix]]'
            ],
            'page_cache' => [
                'id_prefix' => '[[id_prefix]]'
            ]
        ]
    ],
    'lock' => [
        'provider' => 'db',
        'config' => [
            'prefix' => null
        ]
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'google_product' => 1,
        'full_page' => 1,
        'config_webservice' => 1,
        'translate' => 1,
        'vertex' => 1
    ],
    'downloadable_domains' => [
        '[[domhost]]'
    ],
    'install' => [
        'date' => '[[_instime]]'
    ]
];
