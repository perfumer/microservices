<?php

namespace Perfumer\Microservices\Pages\Request;

use Perfumer\Microservices\Request;

class CreatePageRequest extends Request
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $module;
}
