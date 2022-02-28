<?php

return [
    'microservices.box' => [
        'shared' => true,
        'class' => 'Perfumer\\Microservices\\Box\\Box',
        'arguments' => [[
            'host' => '@microservices/box.host',
            'locale' => '@microservices/locale',
            'secret' => '@microservices/box.secret',
            'request_catcher_host' => '@microservices/request_catcher.host',
        ]]
    ],

    'microservices.cloud' => [
        'shared' => true,
        'class' => 'Perfumer\\Microservices\\Cloud\\Cloud',
        'arguments' => [[
            'host' => '@microservices/cloud.host',
            'locale' => '@microservices/locale',
            'request_catcher_host' => '@microservices/request_catcher.host',
        ]]
    ],

    'microservices.crm' => [
        'shared' => true,
        'class' => 'Perfumer\\Microservices\\Crm\\Crm',
        'arguments' => [[
            'host' => '@microservices/crm.host',
            'locale' => '@microservices/locale',
            'segment' => '@microservices/segment',
            'request_catcher_host' => '@microservices/request_catcher.host',
        ]]
    ],

    'microservices.delivery' => [
        'shared' => true,
        'class' => 'Perfumer\\Microservices\\Delivery\\Delivery',
        'arguments' => [[
            'host' => '@microservices/delivery.host',
            'locale' => '@microservices/locale',
            'request_catcher_host' => '@microservices/request_catcher.host',
        ]]
    ],

    'microservices.email' => [
        'shared' => true,
        'class' => 'Perfumer\\Microservices\\Email\\Email',
        'arguments' => [[
            'host' => '@microservices/email.host',
            'locale' => '@microservices/locale',
            'request_catcher_host' => '@microservices/request_catcher.host',
        ]]
    ],

    'microservices.es' => [
        'shared' => true,
        'class' => 'Perfumer\\Microservices\\Es\\Es',
        'arguments' => [[
            'host' => '@microservices/es.host',
            'locale' => '@microservices/locale',
            'dummy' => '@microservices/es.dummy',
            'request_catcher_host' => '@microservices/request_catcher.host',
        ]]
    ],

    'microservices.events' => [
        'shared' => true,
        'class' => 'Perfumer\\Microservices\\Events\\Events',
        'arguments' => [[
            'host' => '@microservices/events.host',
            'locale' => '@microservices/locale',
            'request_catcher_host' => '@microservices/request_catcher.host',
        ]]
    ],

    'microservices.feed' => [
        'shared' => true,
        'class' => 'Perfumer\\Microservices\\Feed\\Feed',
        'arguments' => [[
            'host' => '@microservices/feed.host',
            'locale' => '@microservices/locale',
            'dummy' => '@microservices/feed.dummy',
            'request_catcher_host' => '@microservices/request_catcher.host',
        ]]
    ],

    'microservices.forms' => [
        'shared' => true,
        'class' => 'Perfumer\\Microservices\\Forms\\Forms',
        'arguments' => [[
            'host' => '@microservices/forms.host',
            'locale' => '@microservices/locale',
            'segment' => '@microservices/segment',
            'request_catcher_host' => '@microservices/request_catcher.host',
        ]]
    ],

    'microservices.i18n' => [
        'shared' => true,
        'class' => 'Perfumer\\Microservices\\I18n\\I18n',
        'arguments' => [[
            'host' => '@microservices/i18n.host',
            'locale' => '@microservices/locale',
            'request_catcher_host' => '@microservices/request_catcher.host',
        ]]
    ],

    'microservices.ncanode' => [
        'shared' => true,
        'class' => 'Perfumer\\Microservices\\Ncanode\\Ncanode',
        'arguments' => [[
            'host' => '@microservices/ncanode.host',
            'locale' => '@microservices/locale',
            'segment' => '@microservices/segment',
            'request_catcher_host' => '@microservices/request_catcher.host',
        ]]
    ],

    'microservices.otp' => [
        'shared' => true,
        'class' => 'Perfumer\\Microservices\\Otp\\Otp',
        'arguments' => [[
            'host' => '@microservices/otp.host',
            'locale' => '@microservices/locale',
            'request_catcher_host' => '@microservices/request_catcher.host',
        ]]
    ],

    'microservices.pages' => [
        'shared' => true,
        'class' => 'Perfumer\\Microservices\\Pages\\Pages',
        'arguments' => [[
            'host' => '@microservices/pages.host',
            'locale' => '@microservices/locale',
            'segment' => '@microservices/segment',
            'request_catcher_host' => '@microservices/request_catcher.host',
        ]]
    ],

    'microservices.posts' => [
        'shared' => true,
        'class' => 'Perfumer\\Microservices\\Posts\\Posts',
        'arguments' => [[
            'host' => '@microservices/posts.host',
            'locale' => '@microservices/locale',
            'request_catcher_host' => '@microservices/request_catcher.host',
        ]]
    ],

    'microservices.queue' => [
        'shared' => true,
        'class' => 'Perfumer\\Microservices\\Queue\\Queue',
        'arguments' => [[
            'host' => '@microservices/queue.host',
            'locale' => '@microservices/locale',
            'request_catcher_host' => '@microservices/request_catcher.host',
        ]]
    ],

    'microservices.sed' => [
        'shared' => true,
        'class' => 'Perfumer\\Microservices\\Sed\\Sed',
        'arguments' => [[
            'host' => '@microservices/sed.host',
            'locale' => '@microservices/locale',
            'segment' => '@microservices/segment',
            'request_catcher_host' => '@microservices/request_catcher.host',
        ]]
    ],

    'microservices.store' => [
        'shared' => true,
        'class' => 'Perfumer\\Microservices\\Store\\Store',
        'arguments' => [[
            'host' => '@microservices/store.host',
            'locale' => '@microservices/locale',
            'request_catcher_host' => '@microservices/request_catcher.host',
        ]]
    ],
];
