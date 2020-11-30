<?php

return [
    'microservices.i18n' => [
        'shared' => true,
        'class' => 'Perfumer\\Microservices\\I18n\\I18n',
        'arguments' => ['@microservices/i18n.host']
    ],

    'microservices.pages' => [
        'shared' => true,
        'class' => 'Perfumer\\Microservices\\Pages\\Pages',
        'arguments' => ['@microservices/pages.host']
    ],
];
