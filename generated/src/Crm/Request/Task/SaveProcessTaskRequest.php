<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Task;

class SaveProcessTaskRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $state;

    /**
     * @var string
     */
    public $activity;

    /**
     * @var string
     */
    public $group;

    /**
     * @var string
     */
    public $form_field;

    /**
     * @var bool
     */
    public $is_customer;

    public function __construct()
    {
        $this->_request_url = '/process/task';
        $this->_request_method = 'post';
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->state = new \Perfumer\Microservices\Undefined();
        $this->activity = new \Perfumer\Microservices\Undefined();
        $this->group = new \Perfumer\Microservices\Undefined();
        $this->form_field = new \Perfumer\Microservices\Undefined();
        $this->is_customer = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }
        if (!$this->state instanceof \Perfumer\Microservices\Undefined) {
            $array['state'] = $this->state;
        }
        if (!$this->activity instanceof \Perfumer\Microservices\Undefined) {
            $array['activity'] = $this->activity;
        }
        if (!$this->group instanceof \Perfumer\Microservices\Undefined) {
            $array['group'] = $this->group;
        }
        if (!$this->form_field instanceof \Perfumer\Microservices\Undefined) {
            $array['form_field'] = $this->form_field;
        }
        if (!$this->is_customer instanceof \Perfumer\Microservices\Undefined) {
            $array['is_customer'] = $this->is_customer;
        }

        return $array;
    }
}
