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
        $this->role_id = new \Perfumer\Microservices\Undefined();
        $this->group_id = new \Perfumer\Microservices\Undefined();
        $this->activity_id = new \Perfumer\Microservices\Undefined();
        $this->calendar_id = new \Perfumer\Microservices\Undefined();
        $this->module_id = new \Perfumer\Microservices\Undefined();
    }
}
