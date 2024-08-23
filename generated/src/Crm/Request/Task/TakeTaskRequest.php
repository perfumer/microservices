<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Task;

class TakeTaskRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $task;

    /**
     * @var string
     */
    public $user;

    /**
     * @var string
     */
    public $code;

    public function __construct()
    {
        $this->_request_url = '/task/take';
        $this->_request_method = 'post';
        $this->task = new \Perfumer\Microservices\Undefined();
        $this->user = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
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
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }

        return $array;
    }
}
