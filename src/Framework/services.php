<?php

return [
    'microservices.crm' => [
        'shared' => true,
        'class' => 'Perfumer\\Microservices\\Crm\\Crm',
        'arguments' => ['@microservices/crm.host']
    ],

    'microservices.es' => [
        'shared' => true,
        'class' => 'Perfumer\\Microservices\\Es\\Es',
        'arguments' => ['@microservices/es.host', '@microservices/es.dummy']
    ],

    'microservices.forms' => [
        'shared' => true,
        'class' => 'Perfumer\\Microservices\\Forms\\Forms',
        'arguments' => ['@microservices/forms.host']
    ],

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

    'microservices.events' => [
        'shared' => true,
        'class' => 'Perfumer\\Microservices\\Events\\Events',
        'arguments' => ['@microservices/events.host']
    ],
];
