<?php

namespace Generated\Perfumer\Microservices\Pages\Request\Connector;

class SaveConnectorRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id = null;

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
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->name = new \Perfumer\Microservices\Undefined();
        $this->description = new \Perfumer\Microservices\Undefined();
        $this->html = new \Perfumer\Microservices\Undefined();
        $this->json = new \Perfumer\Microservices\Undefined();
        $this->service = new \Perfumer\Microservices\Undefined();
        $this->method = new \Perfumer\Microservices\Undefined();
        $this->type = new \Perfumer\Microservices\Undefined();
        $this->arguments = new \Perfumer\Microservices\Undefined();
    }
}
