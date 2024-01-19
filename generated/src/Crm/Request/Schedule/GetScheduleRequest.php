<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Schedule;

class GetScheduleRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $group;

    /**
     * @var string
     */
    public $activity;

    /**
     * @var string
     */
    public $calendar;

    /**
     * @var string
     */
    public $module;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $code;

    public function __construct()
    {
        $this->_request_url = '/schedule';
        $this->_request_method = 'get';
        $this->role = new \Perfumer\Microservices\Undefined();
        $this->group = new \Perfumer\Microservices\Undefined();
        $this->activity = new \Perfumer\Microservices\Undefined();
        $this->calendar = new \Perfumer\Microservices\Undefined();
        $this->module = new \Perfumer\Microservices\Undefined();
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->role instanceof \Perfumer\Microservices\Undefined) {
            $array['role'] = $this->role;
        }
        if (!$this->group instanceof \Perfumer\Microservices\Undefined) {
            $array['group'] = $this->group;
        }
        if (!$this->activity instanceof \Perfumer\Microservices\Undefined) {
            $array['activity'] = $this->activity;
        }
        if (!$this->calendar instanceof \Perfumer\Microservices\Undefined) {
            $array['calendar'] = $this->calendar;
        }
        if (!$this->module instanceof \Perfumer\Microservices\Undefined) {
            $array['module'] = $this->module;
        }
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }

        return $array;
    }
}
