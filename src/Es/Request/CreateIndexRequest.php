<?php

namespace Perfumer\Microservices\Es\Request;

use Perfumer\Microservices\Request;

class CreateIndexRequest extends Request
{
    /**
     * @var string
     */
    public $name;

    public function getBody(): array
    {
        return ['name' => $this->name];
    }
}