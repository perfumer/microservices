<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Scenario;

class UpdateProcessScenarioRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $task_term;

    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $process;

    /**
     * @var int
     */
    public $from_state;

    /**
     * @var int
     */
    public $to_state;

    /**
     * @var bool
     */
    public $has_notification;

    /**
     * @var bool
     */
    public $has_sms_notification;

    /**
     * @var string
     */
    public $webhook;

    /**
     * @var int
     */
    public $autoclose_days;

    /**
     * @var string
     */
    public $autoclose_field;

    public function __construct()
    {
        $this->_request_url = '/process/scenario';
        $this->_request_method = 'patch';
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->name = new \Perfumer\Microservices\Undefined();
        $this->task_term = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->process = new \Perfumer\Microservices\Undefined();
        $this->from_state = new \Perfumer\Microservices\Undefined();
        $this->to_state = new \Perfumer\Microservices\Undefined();
        $this->has_notification = new \Perfumer\Microservices\Undefined();
        $this->has_sms_notification = new \Perfumer\Microservices\Undefined();
        $this->webhook = new \Perfumer\Microservices\Undefined();
        $this->autoclose_days = new \Perfumer\Microservices\Undefined();
        $this->autoclose_field = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }
        if (!$this->name instanceof \Perfumer\Microservices\Undefined) {
            $array['name'] = $this->name;
        }
        if (!$this->task_term instanceof \Perfumer\Microservices\Undefined) {
            $array['task_term'] = $this->task_term;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }
        if (!$this->process instanceof \Perfumer\Microservices\Undefined) {
            $array['process'] = $this->process;
        }
        if (!$this->from_state instanceof \Perfumer\Microservices\Undefined) {
            $array['from_state'] = $this->from_state;
        }
        if (!$this->to_state instanceof \Perfumer\Microservices\Undefined) {
            $array['to_state'] = $this->to_state;
        }
        if (!$this->has_notification instanceof \Perfumer\Microservices\Undefined) {
            $array['has_notification'] = $this->has_notification;
        }
        if (!$this->has_sms_notification instanceof \Perfumer\Microservices\Undefined) {
            $array['has_sms_notification'] = $this->has_sms_notification;
        }
        if (!$this->webhook instanceof \Perfumer\Microservices\Undefined) {
            $array['webhook'] = $this->webhook;
        }
        if (!$this->autoclose_days instanceof \Perfumer\Microservices\Undefined) {
            $array['autoclose_days'] = $this->autoclose_days;
        }
        if (!$this->autoclose_field instanceof \Perfumer\Microservices\Undefined) {
            $array['autoclose_field'] = $this->autoclose_field;
        }

        return $array;
    }
}
