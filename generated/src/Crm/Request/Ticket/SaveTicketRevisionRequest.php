<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Ticket;

class SaveTicketRevisionRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $task_id = null;

    /**
     * @var string
     */
    public $scenario = null;

    /**
     * @var string
     */
    public $message = null;

    public function __construct()
    {
        $this->task_id = new \Perfumer\Microservices\Undefined();
        $this->scenario = new \Perfumer\Microservices\Undefined();
        $this->message = new \Perfumer\Microservices\Undefined();
    }
}
