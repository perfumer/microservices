<?php

return [
    'microservices.box' => [
        'shared' => true,
        'class' => 'Perfumer\\Microservices\\Box\\Box',
        'arguments' => [[
            'host' => '@microservices/box.host',
            'secret' => '@microservices/box.secret',
            'request_catcher_host' => '@microservices/request_catcher.host',
        ]]
    ],

    'microservices.delivery' => [
        'shared' => true,
        'class' => 'Perfumer\\Microservices\\Delivery\\Delivery',
        'arguments' => [[
            'host' => '@microservices/delivery.host',
            'request_catcher_host' => '@microservices/request_catcher.host',
        ]]
    ],

    'microservices.email' => [
        'shared' => true,
        'class' => 'Perfumer\\Microservices\\Email\\Email',
        'arguments' => [[
            'host' => '@microservices/email.host',
            'request_catcher_host' => '@microservices/request_catcher.host',
        ]]
    ],

    'microservices.es' => [
        'shared' => true,
        'class' => 'Perfumer\\Microservices\\Es\\Es',
        'arguments' => [[
            'host' => '@microservices/es.host',
            'dummy' => '@microservices/es.dummy',
            'request_catcher_host' => '@microservices/request_catcher.host',
        ]]
    ],

    'microservices.feed' => [
        'shared' => true,
        'class' => 'Perfumer\\Microservices\\Feed\\Feed',
        'arguments' => [[
            'host' => '@microservices/feed.host',
            'dummy' => '@microservices/feed.dummy',
            'request_catcher_host' => '@microservices/request_catcher.host',
        ]]
    ],

    'microservices.ncanode' => [
        'shared' => true,
        'class' => 'Perfumer\\Microservices\\Ncanode\\Ncanode',
        'arguments' => [[
            'host' => '@microservices/ncanode.host',
            'segment' => '@microservices/segment',
            'request_catcher_host' => '@microservices/request_catcher.host',
        ]]
    ],

    'microservices.otp' => [
        'shared' => true,
        'class' => 'Perfumer\\Microservices\\Otp\\Otp',
        'arguments' => [[
            'host' => '@microservices/otp.host',
            'request_catcher_host' => '@microservices/request_catcher.host',
        ]]
    ],
];
