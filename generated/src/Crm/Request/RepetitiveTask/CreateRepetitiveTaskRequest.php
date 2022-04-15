<?php

namespace Generated\Perfumer\Microservices\Crm\Request\RepetitiveTask;

class CreateRepetitiveTaskRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $code = null;

    /**
     * @var int
     */
    public $customer_id = null;

    /**
     * @var int
     */
    public $user_id = null;

    /**
     * @var string
     */
    public $type = null;

    /**
     * @var string
     */
    public $description = null;

    /**
     * @var string
     */
    public $time = null;

    /**
     * @var string
     */
    public $day = null;

    /**
     * @var string
     */
    public $module = null;

    public function __construct()
    {
        $this->_request_url = '/repetitive-task';
        $this->_request_method = 'post';
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->customer_id = new \Perfumer\Microservices\Undefined();
        $this->user_id = new \Perfumer\Microservices\Undefined();
        $this->type = new \Perfumer\Microservices\Undefined();
        $this->description = new \Perfumer\Microservices\Undefined();
        $this->time = new \Perfumer\Microservices\Undefined();
        $this->day = new \Perfumer\Microservices\Undefined();
        $this->module = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }
        if (!$this->customer_id instanceof \Perfumer\Microservices\Undefined) {
            $array['customer_id'] = $this->customer_id;
        }
        if (!$this->user_id instanceof \Perfumer\Microservices\Undefined) {
            $array['user_id'] = $this->user_id;
        }
        if (!$this->type instanceof \Perfumer\Microservices\Undefined) {
            $array['type'] = $this->type;
        }
        if (!$this->description instanceof \Perfumer\Microservices\Undefined) {
            $array['description'] = $this->description;
        }
        if (!$this->time instanceof \Perfumer\Microservices\Undefined) {
            $array['time'] = $this->time;
        }
        if (!$this->day instanceof \Perfumer\Microservices\Undefined) {
            $array['day'] = $this->day;
        }
        if (!$this->module instanceof \Perfumer\Microservices\Undefined) {
            $array['module'] = $this->module;
        }

        return $array;
    }
}
