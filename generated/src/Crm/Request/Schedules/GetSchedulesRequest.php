<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Schedules;

class GetSchedulesRequest extends \Perfumer\Microservices\Request
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
     * @var int
     */
    public $limit = null;

    /**
     * @var int
     */
    public $offset = null;

    /**
     * @var int
     */
    public $count = null;

    public function __construct()
    {
        $this->role = new \Perfumer\Microservices\Undefined();
        $this->group = new \Perfumer\Microservices\Undefined();
        $this->activity = new \Perfumer\Microservices\Undefined();
        $this->calendar = new \Perfumer\Microservices\Undefined();
        $this->limit = new \Perfumer\Microservices\Undefined();
        $this->offset = new \Perfumer\Microservices\Undefined();
        $this->count = new \Perfumer\Microservices\Undefined();
    }
}
