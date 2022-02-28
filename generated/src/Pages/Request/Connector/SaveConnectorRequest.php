<?php

namespace Generated\Perfumer\Microservices\Pages\Request\Connector;

class SaveConnectorRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $name = null;

    /**
     * @var string
     */
    public $description = null;

    /**
     * @var string
     */
    public $html = null;

    /**
     * @var string
     */
    public $json = null;

    /**
     * @var string
     */
    public $service = null;

    /**
     * @var string
     */
    public $method = null;

    /**
     * @var string
     */
    public $type = null;

    /**
     * @var array
     */
    public $arguments = [
    ];

    public function __construct()
    {
        $this->_request_url = '/connector';
        $this->_request_method = 'post';
        $this->name = new \Perfumer\Microservices\Undefined();
        $this->description = new \Perfumer\Microservices\Undefined();
        $this->html = new \Perfumer\Microservices\Undefined();
        $this->json = new \Perfumer\Microservices\Undefined();
        $this->service = new \Perfumer\Microservices\Undefined();
        $this->method = new \Perfumer\Microservices\Undefined();
        $this->type = new \Perfumer\Microservices\Undefined();
        $this->arguments = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->name instanceof \Perfumer\Microservices\Undefined) {
            $array['name'] = $this->name;
        }
        if (!$this->description instanceof \Perfumer\Microservices\Undefined) {
            $array['description'] = $this->description;
        }
        if (!$this->html instanceof \Perfumer\Microservices\Undefined) {
            $array['html'] = $this->html;
        }
        if (!$this->json instanceof \Perfumer\Microservices\Undefined) {
            $array['json'] = $this->json;
        }
        if (!$this->service instanceof \Perfumer\Microservices\Undefined) {
            $array['service'] = $this->service;
        }
        if (!$this->method instanceof \Perfumer\Microservices\Undefined) {
            $array['method'] = $this->method;
        }
        if (!$this->type instanceof \Perfumer\Microservices\Undefined) {
            $array['type'] = $this->type;
        }
        if (!$this->arguments instanceof \Perfumer\Microservices\Undefined) {
            $array['arguments'] = $this->arguments;
        }

        return $array;
    }
}
