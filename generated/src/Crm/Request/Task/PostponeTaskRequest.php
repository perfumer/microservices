<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Task;

class PostponeTaskRequest extends \Perfumer\Microservices\Request
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
    public $time_to;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $code;

    public function __construct()
    {
        $this->_request_url = '/task/postpone';
        $this->_request_method = 'post';
        $this->task = new \Perfumer\Microservices\Undefined();
        $this->user = new \Perfumer\Microservices\Undefined();
        $this->time_to = new \Perfumer\Microservices\Undefined();
        $this->text = new \Perfumer\Microservices\Undefined();
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
        if (!$this->time_to instanceof \Perfumer\Microservices\Undefined) {
            $array['time_to'] = $this->time_to;
        }
        if (!$this->text instanceof \Perfumer\Microservices\Undefined) {
            $array['text'] = $this->text;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }

        return $array;
    }
}
