<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Tickets;

class GetTicketsRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $customer_id = null;

    /**
     * @var string
     */
    public $customer_name = null;

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
    public $business_case_id = null;

    /**
     * @var string
     */
    public $business_case_name = null;

    /**
     * @var int
     */
    public $process_state = null;

    /**
     * @var string
     */
    public $process_state_name = null;

    /**
     * @var string
     */
    public $closed_at = null;

    /**
     * @var string
     */
    public $id_lt = null;

    /**
     * @var string
     */
    public $id_le = null;

    /**
     * @var string
     */
    public $id_gt = null;

    /**
     * @var string
     */
    public $id_ge = null;

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

    /**
     * @var string
     */
    public $order_field = null;

    /**
     * @var string
     */
    public $order_direction = null;

    public function __construct()
    {
        $this->customer_id = new \Perfumer\Microservices\Undefined();
        $this->customer_name = new \Perfumer\Microservices\Undefined();
        $this->module_name = new \Perfumer\Microservices\Undefined();
        $this->opened_at_from = new \Perfumer\Microservices\Undefined();
        $this->opened_at_to = new \Perfumer\Microservices\Undefined();
        $this->deadline_at_from = new \Perfumer\Microservices\Undefined();
        $this->deadline_at_to = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->business_case_id = new \Perfumer\Microservices\Undefined();
        $this->business_case_name = new \Perfumer\Microservices\Undefined();
        $this->process_state = new \Perfumer\Microservices\Undefined();
        $this->process_state_name = new \Perfumer\Microservices\Undefined();
        $this->closed_at = new \Perfumer\Microservices\Undefined();
        $this->id_lt = new \Perfumer\Microservices\Undefined();
        $this->id_le = new \Perfumer\Microservices\Undefined();
        $this->id_gt = new \Perfumer\Microservices\Undefined();
        $this->id_ge = new \Perfumer\Microservices\Undefined();
        $this->limit = new \Perfumer\Microservices\Undefined();
        $this->offset = new \Perfumer\Microservices\Undefined();
        $this->count = new \Perfumer\Microservices\Undefined();
        $this->order_field = new \Perfumer\Microservices\Undefined();
        $this->order_direction = new \Perfumer\Microservices\Undefined();
    }
}
