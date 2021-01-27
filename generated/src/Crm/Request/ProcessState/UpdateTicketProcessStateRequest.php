<?php

namespace Generated\Perfumer\Microservices\Crm\Request\ProcessState;

class UpdateTicketProcessStateRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id = null;

    /**
     * @var string
     */
    public $code = null;

    /**
     * @var int
     */
    public $process_state = null;

    public function __construct()
    {
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->process_state = new \Perfumer\Microservices\Undefined();
    }
}
