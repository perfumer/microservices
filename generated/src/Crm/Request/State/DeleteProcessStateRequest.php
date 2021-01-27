<?php

namespace Generated\Perfumer\Microservices\Crm\Request\State;

class DeleteProcessStateRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id = null;

    /**
     * @var int
     */
    public $process = null;

    public function __construct()
    {
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->process = new \Perfumer\Microservices\Undefined();
    }
}
