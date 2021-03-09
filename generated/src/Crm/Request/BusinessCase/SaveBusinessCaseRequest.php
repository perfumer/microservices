<?php

namespace Generated\Perfumer\Microservices\Crm\Request\BusinessCase;

class SaveBusinessCaseRequest extends \Perfumer\Microservices\Request
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
     * @var array
     */
    public $processes = [
    ];

    public function __construct()
    {
        $this->name = new \Perfumer\Microservices\Undefined();
        $this->description = new \Perfumer\Microservices\Undefined();
        $this->processes = new \Perfumer\Microservices\Undefined();
    }
}
