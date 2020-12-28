<?php

namespace Perfumer\Microservices\Pages\Request;

use Perfumer\Microservices\Request;

class UpdatePageRequest extends Request
{
    /**
     * @var int
     */
    public $id;

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
