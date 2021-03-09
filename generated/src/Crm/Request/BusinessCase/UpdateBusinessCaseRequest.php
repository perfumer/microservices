<?php

namespace Generated\Perfumer\Microservices\Crm\Request\BusinessCase;

class UpdateBusinessCaseRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
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
     * @var array
     */
    public $init_processes = [
    ];

    public function __construct()
    {
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->name = new \Perfumer\Microservices\Undefined();
        $this->description = new \Perfumer\Microservices\Undefined();
        $this->init_processes = new \Perfumer\Microservices\Undefined();
    }
}
