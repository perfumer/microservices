<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Ticket;

class SaveTicketRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $customer = null;

    /**
     * @var string
     */
    public $module = null;

    /**
     * @var string
     */
    public $code = null;

    /**
     * @var string
     */
    public $deadline_at = null;

    /**
     * @var string
     */
    public $opened_at = null;

    /**
     * @var string
     */
    public $closed_at = null;

    /**
     * @var array
     */
    public $payload = [
    ];

    public function __construct()
    {
        $this->customer = new \Perfumer\Microservices\Undefined();
        $this->module = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->deadline_at = new \Perfumer\Microservices\Undefined();
        $this->opened_at = new \Perfumer\Microservices\Undefined();
        $this->closed_at = new \Perfumer\Microservices\Undefined();
        $this->payload = new \Perfumer\Microservices\Undefined();
    }
}
