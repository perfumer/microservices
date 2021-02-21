<?php

namespace Generated\Perfumer\Microservices\Ncanode\Request\Origin;

class DoOriginRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $method = null;

    /**
     * @var string
     */
    public $version = null;

    /**
     * @var array
     */
    public $params = [
    ];

    public function __construct()
    {
        $this->method = new \Perfumer\Microservices\Undefined();
        $this->version = new \Perfumer\Microservices\Undefined();
        $this->params = new \Perfumer\Microservices\Undefined();
    }
}
