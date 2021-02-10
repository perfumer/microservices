<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Task;

class CloseTaskRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $task = null;

    /**
     * @var string
     */
    public $process_scenario = null;

    public function __construct()
    {
        $this->task = new \Perfumer\Microservices\Undefined();
        $this->process_scenario = new \Perfumer\Microservices\Undefined();
    }
}