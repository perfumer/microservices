<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Log;

class SaveTicketLogRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $ticket = null;

    /**
     * @var string
     */
    public $ticket_id = null;

    /**
     * @var string
     */
    public $type = null;

    /**
     * @var string
     */
    public $text = null;

    /**
     * @var string
     */
    public $user = null;

    /**
     * @var string
     */
    public $code = null;

    /**
     * @var string
     */
    public $status = null;

    /**
     * @var string
     */
    public $close_status = null;

    /**
     * @var array
     */
    public $payload = [
    ];

    public function __construct()
    {
        $this->ticket = new \Perfumer\Microservices\Undefined();
        $this->ticket_id = new \Perfumer\Microservices\Undefined();
        $this->type = new \Perfumer\Microservices\Undefined();
        $this->text = new \Perfumer\Microservices\Undefined();
        $this->user = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->status = new \Perfumer\Microservices\Undefined();
        $this->close_status = new \Perfumer\Microservices\Undefined();
        $this->payload = new \Perfumer\Microservices\Undefined();
    }
}
