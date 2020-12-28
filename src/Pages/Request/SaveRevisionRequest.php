<?php

namespace Perfumer\Microservices\Pages\Request;

use Perfumer\Microservices\Request;

class SaveRevisionRequest extends Request
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
     * @var int
     */
    public $page_id;

    /**
     * @var array
     */
    public $blocks;

    /**
     * @var array
     */
    public $parameters;
}
