<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Task;

class SaveProcessTaskRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $state = null;

    /**
     * @var string
     */
    public $activity = null;

    /**
     * @var string
     */
    public $group = null;

    /**
     * @var bool
     */
    public $is_customer = null;

    public function __construct()
    {
        $this->state = new \Perfumer\Microservices\Undefined();
        $this->activity = new \Perfumer\Microservices\Undefined();
        $this->group = new \Perfumer\Microservices\Undefined();
        $this->is_customer = new \Perfumer\Microservices\Undefined();
    }
}
