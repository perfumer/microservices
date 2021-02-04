<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Scenarios;

class GetProcessScenariosRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $process = null;

    /**
     * @var string
     */
    public $code = null;

    /**
     * @var string
     */
    public $from_state = null;

    /**
     * @var string
     */
    public $to_state = null;

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
        $this->process = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->from_state = new \Perfumer\Microservices\Undefined();
        $this->to_state = new \Perfumer\Microservices\Undefined();
        $this->limit = new \Perfumer\Microservices\Undefined();
        $this->offset = new \Perfumer\Microservices\Undefined();
        $this->count = new \Perfumer\Microservices\Undefined();
        $this->order_field = new \Perfumer\Microservices\Undefined();
        $this->order_direction = new \Perfumer\Microservices\Undefined();
    }
}
