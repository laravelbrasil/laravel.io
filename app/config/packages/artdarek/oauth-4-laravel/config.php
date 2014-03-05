<?php

return [
    'storage' => 'Session',

    'consumers' => [
        'GitHub' => [
            'client_id'     => getenv('github_id'),
            'client_secret' => getenv('github_secret'),
            'scope'         => ['user'],
        ],
    ],
];