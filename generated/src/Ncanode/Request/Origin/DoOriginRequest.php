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

    /**
     * @var string
     */
    public $code = null;

    public function __construct()
    {
        $this->_request_url = '/origin';
        $this->_request_method = 'post';
        $this->method = new \Perfumer\Microservices\Undefined();
        $this->version = new \Perfumer\Microservices\Undefined();
        $this->params = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->method instanceof \Perfumer\Microservices\Undefined) {
            $array['method'] = $this->method;
        }
        if (!$this->version instanceof \Perfumer\Microservices\Undefined) {
            $array['version'] = $this->version;
        }
        if (!$this->params instanceof \Perfumer\Microservices\Undefined) {
            $array['params'] = $this->params;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }

        return $array;
    }
}
