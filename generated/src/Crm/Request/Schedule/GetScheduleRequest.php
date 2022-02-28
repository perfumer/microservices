<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Schedule;

class GetScheduleRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $role = null;

    /**
     * @var string
     */
    public $group = null;

    /**
     * @var string
     */
    public $activity = null;

    /**
     * @var string
     */
    public $calendar = null;

    /**
     * @var string
     */
    public $module = null;

    public function __construct()
    {
        $this->_request_url = '/schedule';
        $this->_request_method = 'get';
        $this->role = new \Perfumer\Microservices\Undefined();
        $this->group = new \Perfumer\Microservices\Undefined();
        $this->activity = new \Perfumer\Microservices\Undefined();
        $this->calendar = new \Perfumer\Microservices\Undefined();
        $this->module = new \Perfumer\Microservices\Undefined();
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

        return $array;
    }
}
