<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Schedule;

class SaveScheduleRequest extends \Perfumer\Microservices\Request
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

    public function __construct()
    {
        $this->role = new \Perfumer\Microservices\Undefined();
        $this->group = new \Perfumer\Microservices\Undefined();
        $this->activity = new \Perfumer\Microservices\Undefined();
        $this->calendar = new \Perfumer\Microservices\Undefined();
    }
}
