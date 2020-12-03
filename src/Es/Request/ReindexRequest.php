<?php

namespace Perfumer\Microservices\Es\Request;

use Perfumer\Microservices\Request;

class ReindexRequest extends Request
{
    /**
     * @var string
     */
    public $name;
}