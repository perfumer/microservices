<?php

namespace Perfumer\Microservices\Pages\Request;

use Perfumer\Microservices\Request;
use Perfumer\Microservices\RequestTrait\MeshSaveTrait;

class SaveModuleRequest extends Request
{
    use MeshSaveTrait;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $code;
}
