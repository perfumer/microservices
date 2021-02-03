<?php

namespace Generated\Perfumer\Microservices\Forms\Request\Field;

class GetFieldRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id = null;

    /**
     * @var string
     */
    public $locale = null;

    public function __construct()
    {
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->locale = new \Perfumer\Microservices\Undefined();
    }
}
