<?php

return [
    'microservices.pages' => [
        'shared' => true,
        'class' => 'Perfumer\\Microservices\\Pages\\Pages',
        'arguments' => ['@microservices/pages.host']
    ],
];
