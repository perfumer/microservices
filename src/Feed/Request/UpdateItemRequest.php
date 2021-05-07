<?php

namespace Perfumer\Microservices\Feed\Request;

use Perfumer\Microservices\Request;

class UpdateItemRequest extends Request
{
    /**
     * @var string
     */
    public $name;
}