<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Task;

class PostponeTaskRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $task = null;

    /**
     * @var string
     */
    public $user = null;

    /**
     * @var string
     */
    public $time_to = null;

    /**
     * @var string
     */
    public $text = null;

    public function __construct()
    {
        $this->task = new \Perfumer\Microservices\Undefined();
        $this->user = new \Perfumer\Microservices\Undefined();
        $this->time_to = new \Perfumer\Microservices\Undefined();
        $this->text = new \Perfumer\Microservices\Undefined();
    }
}
