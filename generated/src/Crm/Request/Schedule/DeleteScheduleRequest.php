<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Schedule;

class DeleteScheduleRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $role_id;

    /**
     * @var int
     */
    public $group_id;

    /**
     * @var int
     */
    public $activity_id;

    /**
     * @var int
     */
    public $calendar_id;

    /**
     * @var int
     */
    public $module_id;

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
        $this->_request_method = 'delete';
        $this->role_id = new \Perfumer\Microservices\Undefined();
        $this->group_id = new \Perfumer\Microservices\Undefined();
        $this->activity_id = new \Perfumer\Microservices\Undefined();
        $this->calendar_id = new \Perfumer\Microservices\Undefined();
        $this->module_id = new \Perfumer\Microservices\Undefined();
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
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
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }

        return $array;
    }
}
