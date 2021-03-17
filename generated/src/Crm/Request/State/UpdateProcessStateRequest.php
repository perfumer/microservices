<?php

namespace Generated\Perfumer\Microservices\Crm\Request\State;

class UpdateProcessStateRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id = null;

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
    public $task_link = null;

    /**
     * @var string
     */
    public $name = null;

    /**
     * @var string
     */
    public $customer_name = null;

    /**
     * @var string
     */
    public $description = null;

    /**
     * @var bool
     */
    public $is_initial = null;

    /**
     * @var bool
     */
    public $is_final = null;

    /**
     * @var string
     */
    public $log_text = null;

    public function __construct()
    {
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->process = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->task_link = new \Perfumer\Microservices\Undefined();
        $this->name = new \Perfumer\Microservices\Undefined();
        $this->customer_name = new \Perfumer\Microservices\Undefined();
        $this->description = new \Perfumer\Microservices\Undefined();
        $this->is_initial = new \Perfumer\Microservices\Undefined();
        $this->is_final = new \Perfumer\Microservices\Undefined();
        $this->log_text = new \Perfumer\Microservices\Undefined();
    }
}
