<?php

return [
    'storage' => 'Session',

    'consumers' => [
        'GitHub' => [
            'client_id'     => '',
            'client_secret' => '',
            'scope'         => ['user'],
        ],
    ],
];