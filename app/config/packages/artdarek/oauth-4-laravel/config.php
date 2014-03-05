<?php

return [
    'storage' => 'Session',

    'consumers' => [
        'GitHub' => [
            'client_id'     => apache_getenv('github_id'),
            'client_secret' => apache_getenv('github_secret'),
            'scope'         => ['user'],
        ],
    ],
];