<?php

namespace Generated\Perfumer\Microservices\Crm\Request\States;

class GetProcessStatesRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $process = null;

    /**
     * @var int
     */
    public $limit = null;

    /**
     * @var int
     */
    public $offset = null;

    /**
     * @var int
     */
    public $count = null;

    public function __construct()
    {
        $this->process = new \Perfumer\Microservices\Undefined();
        $this->limit = new \Perfumer\Microservices\Undefined();
        $this->offset = new \Perfumer\Microservices\Undefined();
        $this->count = new \Perfumer\Microservices\Undefined();
    }
}
