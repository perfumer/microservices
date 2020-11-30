<?php

namespace Perfumer\Microservices\Pages\Request;

use Perfumer\Microservices\Request;

class GetModulesRequest extends Request
{
    /**
     * @var string
     */
    public $parent;

    /**
     * @var string
     */
    public $child;
}
