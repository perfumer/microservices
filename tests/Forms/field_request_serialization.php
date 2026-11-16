<?php

require $argv[1] ?? __DIR__ . '/../../vendor/autoload.php';

use Perfumer\Microservices\Forms\Request\Field\SaveFieldRequest;
use Perfumer\Microservices\Forms\Request\Field\UpdateFieldRequest;

foreach ([SaveFieldRequest::class, UpdateFieldRequest::class] as $class) {
    $request = new $class();
    if (array_key_exists('is_editable_after_submit', $request->getBody())) {
        throw new RuntimeException($class . ': omitted flag must stay omitted');
    }

    foreach ([true, false] as $value) {
        $request->is_editable_after_submit = $value;
        $body = json_decode(json_encode($request->getBody()), true);
        if (!array_key_exists('is_editable_after_submit', $body)
            || $body['is_editable_after_submit'] !== $value) {
            throw new RuntimeException($class . ': boolean flag was lost');
        }
    }
}

echo "Field request serialization: 6 checks passed\n";
