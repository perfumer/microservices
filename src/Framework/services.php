<?php

return [
    'microservices.es' => [
        'shared' => true,
        'class' => 'Perfumer\\Microservices\\Es\\Es',
        'arguments' => ['@microservices/es.host', '@microservices/es.dummy']
    ],

    'microservices.ncanode' => [
        'shared' => true,
        'class' => 'Perfumer\\Microservices\\Ncanode\\Ncanode',
        'arguments' => ['@microservices/ncanode.host']
    ],

    'microservices.otp' => [
        'shared' => true,
        'class' => 'Perfumer\\Microservices\\Otp\\Otp',
        'arguments' => ['@microservices/otp.host']
    ],
];
