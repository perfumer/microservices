<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Task;

class CloseTaskRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $task = null;

    /**
     * @var string
     */
    public $process_scenario = null;

    /**
     * @var array
     */
    public $fixes = [
    ];

    /**
     * @var string
     */
    public $message = null;

    /**
     * @var string
     */
    public $code = null;

    public function __construct()
    {
        $this->_request_url = '/task/close';
        $this->_request_method = 'post';
        $this->task = new \Perfumer\Microservices\Undefined();
        $this->process_scenario = new \Perfumer\Microservices\Undefined();
        $this->fixes = new \Perfumer\Microservices\Undefined();
        $this->message = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->task instanceof \Perfumer\Microservices\Undefined) {
            $array['task'] = $this->task;
        }
        if (!$this->process_scenario instanceof \Perfumer\Microservices\Undefined) {
            $array['process_scenario'] = $this->process_scenario;
        }
        if (!$this->fixes instanceof \Perfumer\Microservices\Undefined) {
            $array['fixes'] = $this->fixes;
        }
        if (!$this->message instanceof \Perfumer\Microservices\Undefined) {
            $array['message'] = $this->message;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }

        return $array;
    }
}
