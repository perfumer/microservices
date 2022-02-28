<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Schedule;

class SaveScheduleRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $role_id = null;

    /**
     * @var int
     */
    public $group_id = null;

    /**
     * @var int
     */
    public $activity_id = null;

    /**
     * @var int
     */
    public $calendar_id = null;

    /**
     * @var int
     */
    public $module_id = null;

    public function __construct()
    {
        $this->_request_url = '/schedule';
        $this->_request_method = 'post';
        $this->role_id = new \Perfumer\Microservices\Undefined();
        $this->group_id = new \Perfumer\Microservices\Undefined();
        $this->activity_id = new \Perfumer\Microservices\Undefined();
        $this->calendar_id = new \Perfumer\Microservices\Undefined();
        $this->module_id = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->role_id instanceof \Perfumer\Microservices\Undefined) {
            $array['role_id'] = $this->role_id;
        }
        if (!$this->group_id instanceof \Perfumer\Microservices\Undefined) {
            $array['group_id'] = $this->group_id;
        }
        if (!$this->activity_id instanceof \Perfumer\Microservices\Undefined) {
            $array['activity_id'] = $this->activity_id;
        }
        if (!$this->calendar_id instanceof \Perfumer\Microservices\Undefined) {
            $array['calendar_id'] = $this->calendar_id;
        }
        if (!$this->module_id instanceof \Perfumer\Microservices\Undefined) {
            $array['module_id'] = $this->module_id;
        }

        return $array;
    }
}
