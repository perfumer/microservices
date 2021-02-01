<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Tickets;

class GetTicketsRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $customer = null;

    /**
     * @var string
     */
    public $customer_fio = null;

    /**
     * @var string
     */
    public $module_name = null;

    /**
     * @var string
     */
    public $opened_at_from = null;

    /**
     * @var string
     */
    public $opened_at_to = null;

    /**
     * @var string
     */
    public $deadline_at_from = null;

    /**
     * @var string
     */
    public $deadline_at_to = null;

    /**
     * @var string
     */
    public $code = null;

    /**
     * @var int
     */
    public $process = null;

    /**
     * @var int
     */
    public $process_state = null;

    /**
     * @var string
     */
    public $closed_at = null;

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
        $this->customer = new \Perfumer\Microservices\Undefined();
        $this->customer_fio = new \Perfumer\Microservices\Undefined();
        $this->module_name = new \Perfumer\Microservices\Undefined();
        $this->opened_at_from = new \Perfumer\Microservices\Undefined();
        $this->opened_at_to = new \Perfumer\Microservices\Undefined();
        $this->deadline_at_from = new \Perfumer\Microservices\Undefined();
        $this->deadline_at_to = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->process = new \Perfumer\Microservices\Undefined();
        $this->process_state = new \Perfumer\Microservices\Undefined();
        $this->closed_at = new \Perfumer\Microservices\Undefined();
        $this->limit = new \Perfumer\Microservices\Undefined();
        $this->offset = new \Perfumer\Microservices\Undefined();
        $this->count = new \Perfumer\Microservices\Undefined();
    }
}
