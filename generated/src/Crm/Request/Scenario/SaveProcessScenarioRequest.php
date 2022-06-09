<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Scenario;

class SaveProcessScenarioRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $code = null;

    /**
     * @var string
     */
    public $name = null;

    /**
     * @var int
     */
    public $task_term = null;

    /**
     * @var int
     */
    public $process = null;

    /**
     * @var int
     */
    public $from_state = null;

    /**
     * @var int
     */
    public $to_state = null;

    /**
     * @var bool
     */
    public $has_notification = null;

    /**
     * @var bool
     */
    public $has_sms_notification = null;

    /**
     * @var string
     */
    public $webhook = null;

    /**
     * @var int
     */
    public $autoclose_days = null;

    /**
     * @var string
     */
    public $autoclose_field = null;

    public function __construct()
    {
        $this->_request_url = '/process/scenario';
        $this->_request_method = 'post';
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->name = new \Perfumer\Microservices\Undefined();
        $this->task_term = new \Perfumer\Microservices\Undefined();
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
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }
        if (!$this->name instanceof \Perfumer\Microservices\Undefined) {
            $array['name'] = $this->name;
        }
        if (!$this->task_term instanceof \Perfumer\Microservices\Undefined) {
            $array['task_term'] = $this->task_term;
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
