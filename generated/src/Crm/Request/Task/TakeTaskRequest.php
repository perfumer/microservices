<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Task;

class TakeTaskRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $task = null;

    /**
     * @var string
     */
    public $user = null;

    public function __construct()
    {
        $this->task = new \Perfumer\Microservices\Undefined();
        $this->user = new \Perfumer\Microservices\Undefined();
    }
}
