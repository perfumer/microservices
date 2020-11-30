<?php

namespace Perfumer\Microservices\Pages\Request;

use Perfumer\Microservices\Request;

class SaveModuleRequest extends Request
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $code;

    /**
     * @var array
     */
    public $parents;

    /**
     * @var array
     */
    public $children;
}
