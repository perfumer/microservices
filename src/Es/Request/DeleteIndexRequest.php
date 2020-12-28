<?php

namespace Perfumer\Microservices\Es\Request;

use Perfumer\Microservices\Request;

class DeleteIndexRequest extends Request
{
    /**
     * @var string
     */
    public $name;
}