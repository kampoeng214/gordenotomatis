<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],

        //Database Settings
        'db' => [
            'host' => 'localhost',
        	'user' => 'id14602758_1234567',
        	'pass' => 'k/p(WeiR8mt+>@27',
        	'dbname' => 'id14602758_gorden',
            'driver' => 'mysql'
        ]
    ],
];
