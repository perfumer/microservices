<?php

return [
    'microservices.box' => [
        'shared' => true,
        'class' => 'Perfumer\\Microservices\\Box\\Box',
        'arguments' => [[
            'host' => '@microservices/box.host',
            'secret' => '@microservices/box.secret',
            'request_fetcher_host' => '@microservices/request_fetcher.host',
        ]]
    ],

    'microservices.delivery' => [
        'shared' => true,
        'class' => 'Perfumer\\Microservices\\Delivery\\Delivery',
        'arguments' => [[
            'host' => '@microservices/delivery.host',
            'request_fetcher_host' => '@microservices/request_fetcher.host',
        ]]
    ],

    'microservices.email' => [
        'shared' => true,
        'class' => 'Perfumer\\Microservices\\Email\\Email',
        'arguments' => [[
            'host' => '@microservices/email.host',
            'request_fetcher_host' => '@microservices/request_fetcher.host',
        ]]
    ],

    'microservices.es' => [
        'shared' => true,
        'class' => 'Perfumer\\Microservices\\Es\\Es',
        'arguments' => [[
            'host' => '@microservices/es.host',
            'dummy' => '@microservices/es.dummy',
            'request_fetcher_host' => '@microservices/request_fetcher.host',
        ]]
    ],

    'microservices.feed' => [
        'shared' => true,
        'class' => 'Perfumer\\Microservices\\Feed\\Feed',
        'arguments' => [[
            'host' => '@microservices/feed.host',
            'dummy' => '@microservices/feed.dummy',
            'request_fetcher_host' => '@microservices/request_fetcher.host',
        ]]
    ],

    'microservices.ncanode' => [
        'shared' => true,
        'class' => 'Perfumer\\Microservices\\Ncanode\\Ncanode',
        'arguments' => [[
            'host' => '@microservices/ncanode.host',
            'segment' => '@microservices/segment',
            'request_fetcher_host' => '@microservices/request_fetcher.host',
        ]]
    ],

    'microservices.otp' => [
        'shared' => true,
        'class' => 'Perfumer\\Microservices\\Otp\\Otp',
        'arguments' => [[
            'host' => '@microservices/otp.host',
            'request_fetcher_host' => '@microservices/request_fetcher.host',
        ]]
    ],
];
