<?php

namespace Generated\Perfumer\Microservices\Forms\Request\Forms;

class GetFormsRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $module_name = null;

    /**
     * @var string
     */
    public $customer_fio = null;

    /**
     * @var string
     */
    public $user_fio = null;

    /**
     * @var string
     */
    public $name = null;

    /**
     * @var string
     */
    public $schema = null;

    /**
     * @var string
     */
    public $module = null;

    /**
     * @var int
     */
    public $ticket_id = null;

    /**
     * @var int
     */
    public $user_id = null;

    /**
     * @var int
     */
    public $customer_id = null;

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
        $this->module_name = new \Perfumer\Microservices\Undefined();
        $this->customer_fio = new \Perfumer\Microservices\Undefined();
        $this->user_fio = new \Perfumer\Microservices\Undefined();
        $this->name = new \Perfumer\Microservices\Undefined();
        $this->schema = new \Perfumer\Microservices\Undefined();
        $this->module = new \Perfumer\Microservices\Undefined();
        $this->ticket_id = new \Perfumer\Microservices\Undefined();
        $this->user_id = new \Perfumer\Microservices\Undefined();
        $this->customer_id = new \Perfumer\Microservices\Undefined();
        $this->limit = new \Perfumer\Microservices\Undefined();
        $this->offset = new \Perfumer\Microservices\Undefined();
        $this->count = new \Perfumer\Microservices\Undefined();
    }
}
