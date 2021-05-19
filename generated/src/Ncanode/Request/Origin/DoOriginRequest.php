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
        $this->_request_url = '/origin';
        $this->_request_method = 'post';
        $this->method = new \Perfumer\Microservices\Undefined();
        $this->version = new \Perfumer\Microservices\Undefined();
        $this->params = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        return [
        'method' => $this->method,
        'version' => $this->version,
        'params' => $this->params,
        ];
    }
}
