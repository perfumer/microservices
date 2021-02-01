<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Tasks;

class GetTasksRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $user_fio = null;

    /**
     * @var string
     */
    public $description = null;

    /**
     * @var string
     */
    public $wake_at_from = null;

    /**
     * @var string
     */
    public $wake_at_to = null;

    /**
     * @var string
     */
    public $deadline_at_from = null;

    /**
     * @var string
     */
    public $deadline_at_to = null;

    /**
     * @var string
     */
    public $activity = null;

    /**
     * @var string
     */
    public $ticket = null;

    /**
     * @var string
     */
    public $group = null;

    /**
     * @var string
     */
    public $code = null;

    /**
     * @var string
     */
    public $closed_at = null;

    /**
     * @var string
     */
    public $complexity = null;

    /**
     * @var string
     */
    public $state = null;

    /**
     * @var string
     */
    public $link = null;

    /**
     * @var string
     */
    public $close_status = null;

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
        $this->user_fio = new \Perfumer\Microservices\Undefined();
        $this->description = new \Perfumer\Microservices\Undefined();
        $this->wake_at_from = new \Perfumer\Microservices\Undefined();
        $this->wake_at_to = new \Perfumer\Microservices\Undefined();
        $this->deadline_at_from = new \Perfumer\Microservices\Undefined();
        $this->deadline_at_to = new \Perfumer\Microservices\Undefined();
        $this->activity = new \Perfumer\Microservices\Undefined();
        $this->ticket = new \Perfumer\Microservices\Undefined();
        $this->group = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->closed_at = new \Perfumer\Microservices\Undefined();
        $this->complexity = new \Perfumer\Microservices\Undefined();
        $this->state = new \Perfumer\Microservices\Undefined();
        $this->link = new \Perfumer\Microservices\Undefined();
        $this->close_status = new \Perfumer\Microservices\Undefined();
        $this->limit = new \Perfumer\Microservices\Undefined();
        $this->offset = new \Perfumer\Microservices\Undefined();
        $this->count = new \Perfumer\Microservices\Undefined();
    }
}
