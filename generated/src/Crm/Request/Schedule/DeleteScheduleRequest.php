<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Schedule;

class DeleteScheduleRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $role_id = null;

    /**
     * @var string
     */
    public $group_id = null;

    /**
     * @var string
     */
    public $activity_id = null;

    /**
     * @var string
     */
    public $calendar_id = null;

    public function __construct()
    {
        $this->role_id = new \Perfumer\Microservices\Undefined();
        $this->group_id = new \Perfumer\Microservices\Undefined();
        $this->activity_id = new \Perfumer\Microservices\Undefined();
        $this->calendar_id = new \Perfumer\Microservices\Undefined();
    }
}
