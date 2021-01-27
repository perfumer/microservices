<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Process;

class SaveProcessRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $name = null;

    /**
     * @var string
     */
    public $description = null;

    public function __construct()
    {
        $this->name = new \Perfumer\Microservices\Undefined();
        $this->description = new \Perfumer\Microservices\Undefined();
    }
}
