<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Ticket;

class UpdateProcessStateTicketRequest extends \Perfumer\Microservices\Request
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
     * @var string
     */
    public $task = null;

    /**
     * @var string
     */
    public $process_scenario = null;

    public function __construct()
    {
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->task = new \Perfumer\Microservices\Undefined();
        $this->process_scenario = new \Perfumer\Microservices\Undefined();
    }
}
