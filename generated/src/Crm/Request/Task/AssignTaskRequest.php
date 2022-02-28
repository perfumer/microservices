<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Task;

class AssignTaskRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $task = null;

    /**
     * @var string
     */
    public $user = null;

    public function __construct()
    {
        $this->_request_url = '/task/assign';
        $this->_request_method = 'post';
        $this->task = new \Perfumer\Microservices\Undefined();
        $this->user = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->task instanceof \Perfumer\Microservices\Undefined) {
            $array['task'] = $this->task;
        }
        if (!$this->user instanceof \Perfumer\Microservices\Undefined) {
            $array['user'] = $this->user;
        }

        return $array;
    }
}
